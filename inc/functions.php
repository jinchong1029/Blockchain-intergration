<?php
require_once 'mysql.php';
require_once 'smarty.php';
$wallet="a03cf96b-d2b6-42aa-8b76-ceb445e66726";
$pass="pass123";
$secc_pass="1";
$local_server="http://localhost:3000/";
$api_code="0";


function rand_string( $length ) {

    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    return substr(str_shuffle($chars),0,$length);

}

function createAddress($for,$value,$usd){

    global $wallet,$pass,$secc_pass,$api_code,$local_server;
    $rez = getRow("SELECT * FROM btc_addr WHERE user='" . addslashes($for) . "' AND paid='0'");
    if(count($rez)>0){

        //echo 111;
        execute("UPDATE btc_addr SET btc='" . addslashes($value) . "', usdvalue='" . addslashes($usd) . "' WHERE address='" . addslashes($rez['address']) . "'");
        return $rez['address'];
    }else{
        //echo 123;
        $rez=file_get_contents($local_server.'merchant/'.$wallet.'/new_address?password='.$pass.'&second_password='.$secc_pass.'&label='.$for.'&api_code='.$api_code);

        //echo $rez;
        $js=json_decode($rez,true);
        //var_dump($js);
        $addr=$js['address'];
        execute("INSERT INTO btc_addr SET address='" . addslashes($addr) . "', user='" . addslashes($for) . "', btc='" . addslashes(htmlentities($value)) . "', paid='0', usdvalue='" . addslashes($usd) . "'");
        return $addr;
    }

}
function usdToBtc($usd){
    $usd = intval($usd);
    $rez = file_get_contents('https://blockchain.info/ticker');
    $js = json_decode($rez,true);
    $current = floatval($js['USD']['last']);
    return number_format($usd/$current+0.00004,8,'.','');

}
function checker($cardNum, $expMonth, $expYear, $ccv) {
    $username = 'dsf453';
    $apiKey = '22629be04204d1a68309ef8fadb3eb72';
    $apiSite = 'http://luxchecker.pm/apiv2/';

    $openApi = file_get_contents($apiSite .'ck.php?cardnum=' . $cardNum . '&expm=' . $expMonth . '&expy=' . $expYear . '&cvv=' . $ccv . '&key=' . $apiKey . '&username=' . $username);

    $formatValue =  json_decode($openApi, true);
    return intval($formatValue['result']);
}
function format($array) {
    $formatedArray = array();
    $i = 0;
    foreach ($array as $arKey=>$arVal) {
        foreach ($arVal as $arKey2=>$arVal2) {
            if ($arKey2 ===  'accountNo') {
                $formatedArray[$i]['account'] = $arVal2 === 'NA' ? 'n' : 'y';
            } elseif ($arKey2 ===  'sortCode') {
                $formatedArray[$i]['sortcode'] = $arVal2 === 'NA' ? 'n' : 'y';
            } elseif ($arKey2 ===  'vbv') {
                $formatedArray[$i]['vbv2'] = $arVal2 === 'NA' ? 'n' : 'y';
            } elseif ($arKey2 ===  'telephone') {
                $formatedArray[$i]['tel'] = substr($arVal2, 0, 2) === '07' ? 'y' : 'n';
            } elseif($arKey2 === 'dob') {
                $explodeDob = explode("/", $arVal2);
                $formatedArray[$i]['dob'] = end($explodeDob);
            } elseif($arKey2 === 'cardBin') {
                $formatedArray[$i]['cardBin'] = $arVal2;
            } elseif($arKey2 === 'mmn') {

                $formatedArray[$i]['mmn2'] = $arVal2 !== 'NO-MMN' ? 'YES' : 'MMN';
            } else {
                $formatedArray[$i][$arKey2] = $arVal2;
            }


        }
        $i++;

    }

    return $formatedArray;
}




function generateRefferal($length = 15) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
