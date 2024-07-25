<?php

namespace App\Models;

use CodeIgniter\Model;
use GuzzleHttp\Client;
use Exception;

class GeotabModel extends Model
{
    private $apiUrl = 'https://my.geotab.com/apiv1';
    private $sessionId;
    private $client;

    public function __construct()
    {
        parent::__construct();
        $this->client = new Client();
    }

    public function authenticate($username, $password, $database)
    {
        $data = [
            'method' => 'Authenticate',
            'params' => [
                'userName' => $username,
                'password' => $password,
                'database' => $database
            ],
            'id' => 1
        ];

        $response = $this->sendRequest($data);

        if (isset($response->result->credentials->sessionId)) {
            $this->sessionId = $response->result->credentials->sessionId;
            return true;
        }

        throw new Exception('Authentication failed');
    }

    public function getDevices()
    {
        if (!$this->sessionId) {
            throw new Exception('Session ID is not set');
        }

        $data = [
            'method' => 'Get',
            'params' => [
                'typeName' => 'Device'
            ],
            'id' => 2,
            'sessionId' => $this->sessionId
        ];

        $response = $this->sendRequest($data);

        return $response->result;
    }

    private function sendRequest($data)
    {
        $response = $this->client->post($this->apiUrl, [
            'json' => $data
        ]);

        return json_decode($response->getBody());
    }
}
