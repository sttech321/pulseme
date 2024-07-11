<?php

namespace App\Models;

use CodeIgniter\Model;

class technicianModal extends Model
{
    protected $table;
    protected $allowedFields;

    public function __construct()
    {
        parent::__construct();
        // Load table name from environment variable
        $this->table = getenv('TECHNICIAN_TABLE');
        // Load allowed fields from environment variable and convert to array
        $fields = getenv('TECHNICIAN_FIELD');
        $this->allowedFields = explode(',', $fields);
    }

    public function getAccessToken()
    {
        $accessToken = getenv('SUCCESSWARE_ACCESS_TOKEN');
        return $accessToken;
    }

    public function get_technician_data()
    {
        $accesstoken = getenv('SUCCESSWARE_ACCESS_TOKEN');
        $Apiurl = getenv('TECHNICIAN_API');
    
        $curl = curl_init();
    
        $postData = array(
            "query" => "query SearchTechnicians(\$input: SearchTechnicianInput) {\n  searchTechnicians(input: \$input) {\n    ...PageablePersonnelInfo\n    content {\n      ...PersonnelInfo\n      schedules {\n        ...WorkScheduleInfo\n        __typename\n      }\n      skills {\n        ...WorkSkillInfo\n        __typename\n      }\n      jobClasses {\n        ...JobClassOutputInfo\n        __typename\n      }\n      __typename\n    }\n    __typename\n  }\n}\n\nfragment PageablePersonnelInfo on PageablePersonnel {\n  totalElements\n  totalPages\n  pageSize\n  pageNumber\n  numberOfElements\n}\n\nfragment PersonnelInfo on Personnel {\n  id\n  employeeCode\n  fullName\n  firstName\n  lastName\n  email\n  employeeType\n  department\n  apprentice\n  monBeginTime\n  monEndTime\n  tueBeginTime\n  tueEndTime\n  wedBeginTime\n  wedEndTime\n  thuBeginTime\n  thuEndTime\n  friBeginTime\n  friEndTime\n  satBeginTime\n  satEndTime\n  sunBeginTime\n  sunEndTime\n  beginTime\n  endTime\n  isApprentice\n}\n\nfragment WorkScheduleInfo on WorkSchedule {\n  id\n  dayOfWeek\n  startTime\n  endTime\n}\n\nfragment WorkSkillInfo on WorkSkill {\n  id\n  category\n  types\n}\n\nfragment JobClassOutputInfo on JobClassOutput {\n  jobClass\n  jobTypes\n}\n",
            "operationName" => "SearchTechnicians",
            "variables" => array(
                "input" => array(
                    "capabilities" => array(),
                    "availabilities" => array(),
                    "page" => 0,
                    "size" => 1000,
                    "sort" => array(),
                    "firstName" => "",
                    "lastName" => "",
                    "names" => array()
                )
            )
        );
    
        curl_setopt_array($curl, array(
            CURLOPT_URL => $Apiurl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($postData),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer ' . $accesstoken
            ),
        ));
        
        $response = curl_exec($curl);
        
        if (curl_errno($curl)) {
            $error_msg = curl_error($curl);
            curl_close($curl);
            return 'Curl error: ' . $error_msg;
        }
        
        curl_close($curl);
        
        $responseData = json_decode($response, true);
        
        // return $responseData;
        if (isset($responseData['data']['searchTechnicians']['content'])) {
            $technicians = $responseData['data']['searchTechnicians']['content'];
            foreach ($technicians as $technician) {
                // Prepare the data to be inserted
                $data = [
                    'technician_name' => $technician['fullName'],
                    'technician_code' => $technician['employeeCode'],
                    'technician_gmail' => $technician['email'],
                    'departments' => $technician['department'],
                    // Add other fields as necessary
                ];
                
                // Insert data into the database
                $this->insert($data);
                // print_r($data);
            }
        } else {
            echo 'No technician data found.';
        }

    }
    
    public function uploadImage($technicianId, $imageData)
    {
        $imageData = $this->db->escapeString($imageData);
        $this->update($technicianId, ['technician_image' => $imageData]);
    }

    public function getTechnicianImage($technicianId)
    {
        return $this->where('id', $technicianId)->first();
    }

}