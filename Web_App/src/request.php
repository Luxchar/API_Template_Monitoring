<?php
$error = true;

function checkTokenValidity(){
    // check token /api/client/get/user/token and send token as bearer
    $token = $_COOKIE['token'];
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3000/api/client/get/user/token',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '.$token
        ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    // convert response to json
    $response = json_decode($response, true);
    return $response;
}

function getAllScores(){
    // check token /api/client/get/user/token and send token as bearer
    $token = $_COOKIE['token'];
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://localhost:3000/api/score/get',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    // convert response to json
    $response = json_decode($response, true);
    return $response;
}

if ($uri == 'about') {
    if (!isset($_COOKIE['token'])) {
        header('Location: /');
        exit();
    }
    $response = checkTokenValidity();
    if($response['status'] != 'success'){
        header('Location: /');
        exit();
    }
    $response = checkTokenValidity();
    if($response['status'] != 'success'){
        header('Location: /');
        exit();
    }
    $username = $response['data']['username'];
    $user_id = $response['data']['user_id'];
    include_once('./public/about/index.php');
    $error = false;
}

if ($uri == 'settings') {
    if (!isset($_COOKIE['token'])) {
        header('Location: /');
        exit();
    }
    $response = checkTokenValidity();
    if($response['status'] != 'success'){
        header('Location: /');
        exit();
    }
    $response = checkTokenValidity();
    if($response['status'] != 'success'){
        header('Location: /');
        exit();
    }
    $username = $response['data']['username'];
    $user_id = $response['data']['user_id'];
    include_once('./public/settings/index.php');
    $error = false;
}

if ($uri == 'general') {
    if (!isset($_COOKIE['token'])) {
        header('Location: /');
        exit();
    }
    $response = checkTokenValidity();
    if($response['status'] != 'success'){
        header('Location: /');
        exit();
    }
    $response = checkTokenValidity();
    if($response['status'] != 'success'){
        header('Location: /');
        exit();
    }
    $username = $response['data']['username'];
    $user_id = $response['data']['user_id'];
    include_once('./public/general/index.php');
    $error = false;
}

if ($uri == 'overview') {
    // if not detect cookie named token, redirect to login page
    if (!isset($_COOKIE['token'])) {
        header('Location: /');
        exit();
    }
    //include_once('./public/overview/index.php');
    $error = false;
    $response = checkTokenValidity();
    if($response['status'] != 'success'){
        header('Location: /');
        exit();
    }
    $username = $response['data']['username'];
    $user_id = $response['data']['user_id'];
    $scores = getAllScores();
    $scores = $scores['data'];
    $scoren = 0;
    for($i = 0; $i < count($scores); $i++){
        if($scores[$i]['username'] == $username){
            if($scores[$i]['score'] > $scoren){
            $scoren = $scores[$i]['score'];
            }
        }
    }
    $scorelist = array();
    for($i = 0; $i < count($scores); $i++){
        if($scores[$i]['username'] == $username){
            array_push($scorelist, $scores[$i]['score']);
        }
    }
    $scorelist = array_unique($scorelist);
    include_once('./public/overview/index.php');
}

if ($uri == '') {
    include_once('./public/index.php');
    $error = false;
}

if ($error) {
    include_once('./public/404.php');
}

?>