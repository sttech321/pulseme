
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://mybusinessaccountmanagement.googleapis.com/v1/accounts',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer ya29.a0AcM612zIQLtmFAhTWYyai0STP49bz7XOtwYJdy5Kg-NPAZPByU5QCLHrDZyG4ShFjORA4aydrWBEY_bvp-hpfukFMtg4-Kw9K84vSnpbjU5yrLjaNj6RO4njgJ556n5344v29fceBaoQIWte7rhYgBKla9mDYXbnt7pWtDE4aCgYKAQoSARASFQHGX2MipF9u127gqICZZmFCuljuCw0175',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>