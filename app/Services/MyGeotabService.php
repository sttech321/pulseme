<?php

namespace App\Services;

use GuzzleHttp\Client;

class MyGeotabService
{
    protected $client;
    protected $apiUrl;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiUrl = getenv('MYGEOTAB_API_URL');
    }

    public function authenticate()
    {
        $response = $this->client->post($this->apiUrl . '/apiv1', [
            'json' => [
                'method' => 'Authenticate',
                'params' => [
                    'username' => getenv('MYGEOTAB_API_USERNAME'),
                    'password' => getenv('MYGEOTAB_API_PASSWORD')
                ]
            ]
        ]);

        return json_decode($response->getBody(), true);
    }

    public function sendDispatchMessage($deviceId, $message)
    {
        $auth = $this->authenticate();

        $response = $this->client->post($this->apiUrl . '/apiv1', [
            'json' => [
                'method' => 'SendMessage',
                'params' => [
                    'device' => $deviceId,
                    'message' => $message,
                    'sessionId' => $auth['result']['sessionId']
                ]
            ]
        ]);

        return json_decode($response->getBody(), true);
    }

    public function sendLiveLocation($deviceId, $latitude, $longitude)
    {
        $auth = $this->authenticate();

        $response = $this->client->post($this->apiUrl . '/apiv1', [
            'json' => [
                'method' => 'SendLiveLocation',
                'params' => [
                    'device' => $deviceId,
                    'latitude' => $latitude,
                    'longitude' => $longitude,
                    'sessionId' => $auth['result']['sessionId']
                ]
            ]
        ]);

        return json_decode($response->getBody(), true);
    }
}
