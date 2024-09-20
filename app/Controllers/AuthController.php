<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TechnicianModal;
use App\Models\CustomerModel;
use App\Models\CampaignModel;
use App\Models\AuthModel;
use App\Models\CustomersmsbioModel;

class AuthController extends BaseController
{
    public function updateToken()
    {
        $authModel = new AuthModel();
        // $accessToken = $authModel->find();
        // $authtoken = $accessToken['access_token'];
        $authModel->authtoken();
        // $authModel->authenticate();
    }

    public function create_dispatch()
    {
        // Validation rules
        $rules = [
            'customer_email' => 'required|valid_email',
            'customer_phone' => 'required',
            'customer_name' => 'required',
            'customer_address' => 'required',
        ];

        // Validate form input
        if (!$this->validate($rules)) {
            return $this->response->setJSON(
                [
                    'status' => 'error',
                    'message' => 'Validation failed',
                    'errors' => $this->validator->getErrors()
                ]
            );
        }

        $name = $this->request->getPost('customer_name');
        $email = $this->request->getPost('customer_email');
        $phone = $this->request->getPost('customer_phone');
        $address = $this->request->getPost('customer_address');
        $campaignid = $this->request->getPost('campaignid');
        $employeeid = $this->request->getPost('employeeid');
        $actionType = $this->request->getPost('actionType');
        $deviceId = $this->request->getPost('deviceId');
        // error_log('Device ID: ' . $deviceId);
        // Prepare data to insert
        $data = [
            'deviceId'      => $deviceId,
            'customer_name' => $name,
            'customer_email' => $email,
            'customer_phone' => $phone,
            'customer_address' => $address,
            'campaignid' => $campaignid,
            'employeeid' => $employeeid,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'formstatus' => $actionType,
        ];


        if ($actionType === 'bio') {
            // Call the sendbioEmail method
            $testModel = new CustomerModel();
            $testModel->insert($data);
            $this->getdeviceid($deviceId);
            $this->sendbioEmail($campaignid, $email);
            // $this->sendbioSms($campaignid, $phone, $employeeid, $actionType);
            $this->Send_technician_location($deviceId, $email);
            return $this->response->setJSON(['status' => 'success', 'message' => 'Bio sent successfully!', 'data' => $data]);
        } elseif ($actionType === 'pulsecheck') {
            $pulsecheckModel = new CustomerModel();
            $pulsecheckModel->insert($data);
            $this->sendPulseCheckEmail($employeeid, $email);
            // $this->sendPulseCheckSms($employeeid, $phone, $campaignid, $actionType);
            return $this->response->setJSON(['status' => 'success', 'message' => 'Pulsecheck sent successfully!']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Form submission failed.']);
        }
    }

    private function sendbioEmail($campaignid, $email)
    {
        
        $emailService = \Config\Services::email();
        $link = base_url('/application/bio/' . $campaignid);
        $message = view('dispatchTab/bio-template', ['link' => $link]);

        $emailService->initialize([
            'protocol' => 'smtp',
            'SMTPHost' => $_ENV['SMTP_HOST'],
            'SMTPPort' => intval($_ENV['SMTP_PORT']),
            'SMTPUser' => $_ENV['SMTP_USER'],
            'SMTPPass' => $_ENV['SMTP_PASS'],
            'mailType' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ]);

        $emailService->setFrom($_ENV['SMTP_USER'], 'summitRA');
        $emailService->setTo($email);
        $emailService->setSubject('Technician Bio');
        $emailService->setMessage($message);

        if (!$emailService->send()) {
            log_message('error', $emailService->printDebugger(['headers', 'subject', 'body']));
        }
    }

    private function sendPulseCheckEmail($employeeId, $email)
    {
        $emailService = \Config\Services::email();
        $link = base_url('/application/pulsecheck/' . $employeeId);
        $message = view('dispatchTab/pulsecheck-review', ['link' => $link]);

        $emailService->initialize([
            'protocol' => 'smtp',
            'SMTPHost' => $_ENV['SMTP_HOST'],
            'SMTPPort' => intval($_ENV['SMTP_PORT']),
            'SMTPUser' => $_ENV['SMTP_USER'],
            'SMTPPass' => $_ENV['SMTP_PASS'],
            'mailType' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ]);

        $emailService->setFrom($_ENV['SMTP_USER'], 'summitRA');
        $emailService->setTo($email);
        $emailService->setSubject('Pulsecheck Review');
        $emailService->setMessage($message);

        if (!$emailService->send()) {
            echo $emailService->printDebugger(['headers', 'subject', 'body']);
        }
    }

    private function Send_technician_location($deviceId, $email)
    {
        $emailService = \Config\Services::email();
        $link = base_url('tracker/' . $deviceId);
        $message = 'Track the technician in real-time: ' . $link;

        $emailService->initialize([
            'protocol' => 'smtp',
            'SMTPHost' => $_ENV['SMTP_HOST'],
            'SMTPPort' => intval($_ENV['SMTP_PORT']),
            'SMTPUser' => $_ENV['SMTP_USER'],
            'SMTPPass' => $_ENV['SMTP_PASS'],
            'mailType' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ]);

        $emailService->setFrom($_ENV['SMTP_USER'], 'summitRA');
        $emailService->setTo($email);
        $emailService->setSubject('Realtime tracking system');
        $emailService->setMessage($message);

        if (!$emailService->send()) {
            echo $emailService->printDebugger(['headers', 'subject', 'body']);
        }
    }

    // private function sendbioSms($campaignid, $phone, $employeeId, $actionType)
    // {
    //     $apiurl = '';
    //     $message = 'Hales AC is on the way learn about the technician by clicking here  https://halesac.com/pulsem/public/application/bio/'. $campaignid;
    
    //     // Prepare the cURL request
    //     $curl = curl_init();
    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => 'https://api.brevo.com/v3/transactionalSMS/sms',
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => '',
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 0,
    //         CURLOPT_FOLLOWLOCATION => true,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => 'POST',
    //         CURLOPT_POSTFIELDS => json_encode([
    //             "type" => "transactional",
    //             "unicodeEnabled" => true,
    //             "sender" => "halesac",
    //             "recipient" => "$phone",
    //             "content" => $message,
    //             "tag" => "t1",
    //             "webUrl" => "https://halesac.com/",
    //             "organisationPrefix" => "halesac"
    //         ]),
    //         CURLOPT_HTTPHEADER => array(
    //             'accept: application/json',
    //             'content-type: application/json',
    //             'API-key: ' . $apiurl
    //         ),
    //     ));
    
    //     // Execute the request
    //     $response = curl_exec($curl);
    //     // Close cURL session
    //     curl_close($curl);
    
    //     // Decode the JSON response
    //     $responseData = json_decode($response, true);
    
    //     if ($responseData) {
    //         // Debugging: Log the full response to check the structure
    //         // log_message('info', 'SMS API Response: ' . print_r($responseData, true));
    
    //         // Check if necessary keys exist
    //         $reference = $responseData['reference'] ?? null;
    //         $messageId = $responseData['messageId'] ?? null;
    //         $smsCount = $responseData['smsCount'] ?? null;
    //         $usedCredits = $responseData['usedCredits'] ?? null;
    
    //         // Only proceed if required keys are present
    //         if ($reference && $messageId && $smsCount && $usedCredits) {
    //             $data = [
    //                 'campaign_id' => $campaignid,
    //                 'employeeid' => $employeeId,
    //                 'contact_number' => $phone,
    //                 'reference' => $reference,
    //                 'message_id' => $messageId,
    //                 'sms_count' => $smsCount,
    //                 'used_credits' => $usedCredits,
    //                 'sent_at' => date('Y-m-d H:i:s'),
    //                 'status' => $actionType
    //             ];
            
    //             // Insert into database
    //             $CustomersmsbioModel = new CustomersmsbioModel();
    //             $CustomersmsbioModel->insert($data);
    //         } else {
    //             // Handle missing keys
    //             log_message('error', 'SMS API response is missing required fields.');
    //         }
    //     } else {
    //         log_message('error', 'Failed to decode SMS API response.');
    //     }
    // }

    // private function sendPulseCheckSms($employeeId, $phone, $campaignid, $actionType)
    // {
    //     $apiurl = '';
    //     $message = 'How was your experience with Hales AC.? https://halesac.com/pulsem/public/application/pulsecheck/'. $employeeId;
    
    //     // Prepare the cURL request
    //     $curl = curl_init();
    //     curl_setopt_array($curl, array(
    //         CURLOPT_URL => 'https://api.brevo.com/v3/transactionalSMS/sms',
    //         CURLOPT_RETURNTRANSFER => true,
    //         CURLOPT_ENCODING => '',
    //         CURLOPT_MAXREDIRS => 10,
    //         CURLOPT_TIMEOUT => 0,
    //         CURLOPT_FOLLOWLOCATION => true,
    //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //         CURLOPT_CUSTOMREQUEST => 'POST',
    //         CURLOPT_POSTFIELDS => json_encode([
    //             "type" => "transactional",
    //             "unicodeEnabled" => true,
    //             "sender" => "halesac",
    //             "recipient" => "$phone",
    //             "content" => $message,
    //             "tag" => "t1",
    //             "webUrl" => "https://halesac.com/",
    //             "organisationPrefix" => "halesac"
    //         ]),
    //         CURLOPT_HTTPHEADER => array(
    //             'accept: application/json',
    //             'content-type: application/json',
    //             'API-key: ' . $apiurl
    //         ),
    //     ));
    
    //     // Execute the request
    //     $response = curl_exec($curl);
    //     // Close cURL session
    //     curl_close($curl);
    
    //     // Decode the JSON response
    //     $responseData = json_decode($response, true);
    
    //     if ($responseData) {
    //         // Debugging: Log the full response to check the structure
    //         // log_message('info', 'SMS API Response: ' . print_r($responseData, true));
    
    //         // Check if necessary keys exist
    //         $reference = $responseData['reference'] ?? null;
    //         $messageId = $responseData['messageId'] ?? null;
    //         $smsCount = $responseData['smsCount'] ?? null;
    //         $usedCredits = $responseData['usedCredits'] ?? null;
    
    //         // Only proceed if required keys are present
    //         if ($reference && $messageId && $smsCount && $usedCredits) {
    //             $data = [
    //                 'campaign_id' => $campaignid,
    //                 'employeeid' => $employeeId,
    //                 'contact_number' => $phone,
    //                 'reference' => $reference,
    //                 'message_id' => $messageId,
    //                 'sms_count' => $smsCount,
    //                 'used_credits' => $usedCredits,
    //                 'sent_at' => date('Y-m-d H:i:s'),
    //                 'status' => $actionType
    //             ];
            
    //             // Insert into database
    //             $CustomersmsbioModel = new CustomersmsbioModel();
    //             $CustomersmsbioModel->insert($data);
    //         } else {
    //             // Handle missing keys
    //             log_message('error', 'SMS API response is missing required fields.');
    //         }
    //     } else {
    //         log_message('error', 'Failed to decode SMS API response.');
    //     }
    // }

    public function getdeviceid($deviceId){
        // $deviceId = 'b7';
        return $deviceId;
    }

    public function lcoatedestination() {
        $authModel = new AuthModel();
        $accessToken = $authModel->find(1);
        $authtoken = $accessToken['access_token'];
    
        $apiurl = 'https://office.successware.com/webg2/graphql';
        $campaign = new CampaignModel();
        $employeecode = $campaign->findAll(); // Fetch all employee records
        $employeeCodes = [];
    
        if ($employeecode) {
            foreach ($employeecode as $employee) {
                // Assuming your database returns 'employeeId' and 'deviceId'
                $employeeId = strtoupper($employee['employeeId']);
                if(!empty($employeeId)){
                    $employeeCodes[] = [
                        'employeeId' => $employee['employeeId'],
                        'deviceId' => $employee['deviceId'],
                    ];
                }
            }
        }
        $employeeIds = array_column($employeeCodes, 'employeeId');
        $currentDate = round(microtime(true) * 1000);
        $nextDay = round(strtotime('+1 day') * 1000);
        $startDate = '1726804800000';
        $endDate = '1726891199000';
        $page = 0;
        $size = 1000;
        $sort = [];
        $assignedFlag = true;
        $unassignedFlag = false;
        $unscheduledFlag = false;
        $jobDuration = [];
        $jobClass = "";
        $jobType = "";
        $priority = false;
        $prioritySort = true;
        $zoneId = "";
        $emp1 = $employeeIds;
        sort($emp1);
    
        $query = '
            query SearchAssignments($page: Int!, $size: Int!, $sort: [String], $startDate: String, $endDate: String, $employeeCodes: [String], $assignedFlag: Boolean, $unassignedFlag: Boolean, $unscheduledFlag: Boolean, $jobDuration: [String], $jobClass: String, $jobType: String, $priority: Boolean, $prioritySort: Boolean, $zoneId: String) {
                searchAssignments(page: $page, size: $size, sort: $sort, startDate: $startDate, endDate: $endDate, employeeCodes: $employeeCodes, assignedFlag: $assignedFlag, unassignedFlag: $unassignedFlag, unscheduledFlag: $unscheduledFlag, jobDuration: $jobDuration, jobClass: $jobClass, jobType: $jobType, priority: $priority, prioritySort: $prioritySort, zoneId: $zoneId) {
                    totalElements
                    totalPages
                    pageSize
                    pageNumber
                    numberOfElements
                    content {
                        id
                        employeeCode
                        status
                        assignedAt
                        scheduledFor
                        jobId
                        referenceStatus
                        callId
                        isJobFlagged
                        isPermitRequired
                        isSaleEst
                        jobClass
                        jobType
                        jobTypeDescription
                        locationAddress1
                        locationAddress2
                        locationState
                        locationZipCode
                        locationType
                        locationCompanyName
                        locationLotId
                        locationSubDivision
                        locationCity
                        locationDirectionNote
                        locationLatitude
                        customerCompanyName
                        locationLongitude
                        locationAddressHash
                        locationTaxCode
                        locationZone
                        departmentName
                    }
                }
            }
        ';
    
        $curl = curl_init();
    
        curl_setopt_array($curl, array(
            CURLOPT_URL => $apiurl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode([
                "query" => $query,
                "variables" => [
                    "startDate" => $startDate,
                    "endDate" => $endDate,
                    "employeeCodes" => $emp1,
                    "page" => $page,
                    "size" => $size,
                    "sort" => $sort,
                    "assignedFlag" => $assignedFlag,
                    "unassignedFlag" => $unassignedFlag,
                    "unscheduledFlag" => $unscheduledFlag,
                    "jobDuration" => $jobDuration,
                    "jobClass" => $jobClass,
                    "jobType" => $jobType,
                    "prioritySort" => $prioritySort,
                    "zoneId" => $zoneId,
                    "priority" => $priority
                ]
            ]),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                "Authorization: Bearer " . $authtoken
            ),
        ));
    
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
    
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $response = json_decode($response);
            if (isset($response->data->searchAssignments->content)) {
                foreach ($response->data->searchAssignments->content as $assignment) {
                    $employeeCode = $assignment->employeeCode;
                    // Find the matching employee in your database
                    $matchingEmployee = array_filter($employeeCodes, function ($employee) use ($employeeCode) {
                        return $employee['employeeId'] === $employeeCode;
                    });
        
                    if (!empty($matchingEmployee)) {
                        // Get the deviceId of the matching employee
                        $matchingEmployee = array_shift($matchingEmployee);
                        $deviceId = $matchingEmployee['deviceId'];
                        // Construct location address
                        $locationAddress1 = $assignment->locationAddress1 ? $assignment->locationAddress1 : '';
                        $locationCity = $assignment->locationCity ? $assignment->locationCity : '';
                        $locationZipCode = $assignment->locationZipCode ? $assignment->locationZipCode : '';
                        $locationAddress = trim($locationAddress1) . ', ' . trim($locationCity) . ', ' . trim($locationZipCode);
                        $devicedata = $this->getdeviceid($deviceId);
                        $status = $assignment->status;
                        // print_r($status);
                         if($status === "Dispatched"){
                            if($deviceId === $devicedata){
                                return $locationAddress;
                            }
                        }
                    }
                }
            } else {
                echo "No assignments found.";
            }
        }
    }
    
    public function statustrack($deviceId)
    {
        $deviceid = $this->getdeviceid($deviceId);
        $authModel = new AuthModel();
        $accessToken = $authModel->find(1);
        $sessionId = $accessToken['sessionID'];
        $latitude = 0;
        $longitude = 0;
        $speed = 0;
        if ($sessionId) {
            $curl = curl_init();
            curl_setopt_array($curl, [
                CURLOPT_URL => 'https://my.geotab.com/apiv1',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => json_encode([
                    "method" => "ExecuteMultiCall",
                    "params" => [
                        "calls" => [
                            [
                                "method" => "Get",
                                "params" => [
                                    "typeName" => "DeviceStatusInfo",
                                    "search" => [
                                        "deviceSearch" => [
                                            "id" => $deviceid,
                                        ],
                                        "excludeExceptionEvents" => true
                                    ],
                                    "resultsLimit" => 1
                                ]
                            ]
                        ],
                        "credentials" => [
                            "database" => "hales",
                            "sessionId" => $sessionId,
                            "userName" => "st.tech321@gmail.com"
                        ]
                    ]
                ]),
                CURLOPT_HTTPHEADER => [
                    'Content-Type: application/json',
                    'Cookie: GCLB=CJ6T6LfZoPPtcRAD',
                ],
            ]);
        
            // Execute cURL request
            $response = curl_exec($curl);
            curl_close($curl);
        
            // Decode response
            $data = json_decode($response, true);
        
            if (isset($data['result'][0][0])) {
                $latitude = $data['result'][0][0]['latitude'];
                $longitude = $data['result'][0][0]['longitude'];
                $speed = $data['result'][0][0]['speed'];
                $deviceId = $data['result'][0][0]['device']['id'];
            }
        }
        
        // Return the data as JSON
        return $this->response->setJSON([
            'latitude' => $latitude,
            'longitude' => $longitude,
            'speed' => $speed,
            'deviceId' => $deviceId
        ]);
    }

    public function getDirection() {
        $origin = $this->request->getGet('origin');
        $address = $this->lcoatedestination(); 
        $destinationAddress = trim(json_encode($address, JSON_PRETTY_PRINT), '"');
        $geocodeApiKey = 'AIzaSyCX5PvWwNfRmUuwNFJEtEpjorj6RdCV-PE';
    
        // Geocode destination address
        $geocodeUrl = "https://maps.googleapis.com/maps/api/geocode/json?address=" . urlencode($destinationAddress) . "&key=" . $geocodeApiKey;
        $client = \Config\Services::curlrequest();
        
        try {
            $geocodeResponse = $client->get($geocodeUrl);
            $geocodeData = json_decode($geocodeResponse->getBody(), true);
    
            if ($geocodeResponse->getStatusCode() !== 200) {
                return $this->response->setJSON(['error' => 'Geocoding API request failed.']);
            } 
            if (isset($geocodeData['results'][0]['geometry']['location'])) {
                $destinationLat = $geocodeData['results'][0]['geometry']['location']['lat'];
                $destinationLng = $geocodeData['results'][0]['geometry']['location']['lng'];
            //    return $this->getdestination($destinationLat,$destinationLng);
            } else {
                return $this->response->setJSON(['error' => 'Unable to geocode destination address.']);
            }
    
            $directionsUrl = "https://maps.googleapis.com/maps/api/directions/json?origin=$origin&destination=$destinationLat,$destinationLng&key=" . $geocodeApiKey;
            $directionsResponse = $client->get($directionsUrl);
            $directionsData = json_decode($directionsResponse->getBody(), true);

            if ($directionsResponse->getStatusCode() !== 200) {
                return $this->response->setJSON(['error' => 'Directions API request failed.']);
            }
            return $this->response->setJSON($directionsData);
        } catch (\Exception $e) {
            return $this->response->setJSON(['error' => 'An error occurred: ' . $e->getMessage()]);
        }
    }
    
    public function tracker($deviceId = null) {
        if ($deviceId === null) {
            return redirect()->back()->with('error', 'No device ID provided');
        }
        return view('tracker', [
            'deviceId' => $deviceId,
            
        ]);
    }
}

