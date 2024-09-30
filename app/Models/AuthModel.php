<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = "auth";
    protected $primaryKey = "id";
    protected $allowedFields = ["access_token", "sessionID", "createdOn", "updatedOn"];

    public function authenticate() {
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://my.geotab.com/apiv1',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode([
                "method" => "Authenticate",
                "params" => [
                    "userName" => "st.tech321@gmail.com",
                    "password" => "Sss1234!"
                ],
                "id" => "1"
            ]),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));
        
        $response = curl_exec($curl);
        curl_close($curl);

        $response1 = json_decode($response);
        
        if (isset($response1->result->credentials->sessionId)) {
            $sessionId = $response1->result->credentials->sessionId;
            return $sessionId;
        }

        throw new \Exception("Error during authentication: " . $response1->error->message ?? "Unknown error");
    }

    // Function to fetch auth token
    public function authtoken() {
        // Call authenticate method using $this->authenticate()
        $sessionId = $this->authenticate();
        // Initialize cURL
        $curl = curl_init();
        // Set cURL options
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://office.successware.com/web/bedrock/login',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode([
                'username' => 'st.tech321@gmail.com',
                'password' => 'Sss1234!@#$'
            ]),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Cookie: JSESSIONID=74E61C5F78E633E02F31DEAE0920C6A8'
            ),
        ));

        // Execute cURL request
        $response = curl_exec($curl);
        $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        // Error handling
        if ($response === false || $http_status !== 200) {
            $error = curl_error($curl);
            curl_close($curl);
            throw new \Exception("Error in cURL request: $error, HTTP Status Code: $http_status");
        }

        // Close cURL
        curl_close($curl);

        // Decode the response
        $responseData = json_decode($response, true);
        $accessToken = $responseData['access_token'];
        print_r($accessToken);

        $data = [
            'sessionID' => $sessionId,
            'access_token' => $accessToken,
            'createdOn' => date('Y-m-d H:i:s'),
            'updatedOn' => date('Y-m-d H:i:s')
        ];

        // Check if a record exists
        $existingRecord = $this->find(1);
        if ($existingRecord) {
            // Update the record if it exists
            $this->update($existingRecord['id'], $data);
        } else {
            // Insert a new record if it doesn't exist
            $this->insert($data);
        }
    }
}

