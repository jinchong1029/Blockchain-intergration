<?php

// function usdToBtc($usd){
//     $usd = intval($usd);
//     $rez = file_get_contents("https://www.blockchain.com/tobtc?currency=USD&value=$usd");
//     return $rez;
// }

// $amountInUsd = 100;
// $amountInBtc = usdToBtc($amountInUsd);

// $api_key = 'YhakWcxkE6ceM2UezSEraI4RK1J2jnQucJXeJC1TrBg';
// $url = 'https://www.blockonomics.co/api/new_address?reset=1';

// $options = array(
//     'http' => array(
//         'header'  => 'Authorization: Bearer '.$api_key,
//         'method'  => 'POST',
//         'content' => '',
//         'ignore_errors' => true
//     )
// );

// $context = stream_context_create($options);
// $contents = file_get_contents($url, false, $context);
// $object = json_decode($contents);

// // Check if address was generated successfully
// if (isset($object->address)) {
//   echo $object->address;
//   echo \n;
//   echo $amountInBtc;
// } else {
//   // Show any possible errors
//   echo $http_response_header[0]."\n".$contents;
// }

$txid = $_GET['txid'];
$value = $_GET['value'];
$status = $_GET['status'];
$addr = $_GET['addr'];


if($status == 2) {
    var_dump(array(
    'txid' => $txid,
    'value' => $value,
    'status' => $status,
    'address' => $addr));
}
else {
    echo "not confirmed";
}

?>
