<?php
echo "<p> PHP Apache container running </p>";


//Running /GET request to Ope Prediction Recommendation

$ACCESS_TOKEN = "eyJhb_w";

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => 'https://app.oneprediction.com/api/recommendation/v1.0/customer/CUSTOMER_ID/Recommendation/RECOMMENDATION_ID/contact/USER_ID?filters[0].name=geo_point.coordinates&filters[0].type=Attribute&filters[0].value={"latitude":57.048735,"longitude":9.9135,"Distance":25}&filters[0].operator=GeoRange',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "Authorization:  Bearer " . $ACCESS_TOKEN ,
    "Content-Type: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

?>