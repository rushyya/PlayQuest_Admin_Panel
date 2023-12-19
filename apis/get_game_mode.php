<?php
header('Access-Controll-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Controll-Allow-Method: GET');
header('Access-Controll-Allow-Headers: Content-Type,Access-Control-Allow-Headers,Authorization,X-Request-With');

include('user_function.php');

$requestMethod = $_SERVER["REQUEST_METHOD"];
if($requestMethod == "GET"){

    if(isset($_GET['champ_id']) && isset($_GET['user_id'])){
        $user_id = getGameMode($_GET);
        echo $user_id;
    }
    // else{
    //     $labelList = getLabelList();
    //     echo $labelList;
    // }

}
else{

    $data = [
        'status' => 405,
        'message' => $requestMethod. 'Method not allowed',
     ];
     header("HTTP/1.0 405 Method not allowed");
     echo json_encode($data);
}



?>