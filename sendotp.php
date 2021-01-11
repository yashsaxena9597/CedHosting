<?php
session_start();

      $mobile=$_POST['mobno'];
      $_SESSION['otp']=rand(1000,9999);




      $field = array(
        "sender_id" => "FSTSMS",
        "language" => "english",
        "route" => "qt",
        "numbers" => "$mobile",
        "message" => "42841",
        "variables" => "{#AA#}",
        "variables_values" => $_SESSION['otp']
    );
    
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_SSL_VERIFYHOST => 0,
      CURLOPT_SSL_VERIFYPEER => 0,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => json_encode($field),
      CURLOPT_HTTPHEADER => array(
        "authorization: d9gCTs2qjxlVnyUFHQt6fW1L8NABIRMP3ro0ameZuDhXG5SOKkVvfoThBlwgQNnPzLA8uRCbteEx7J9G",
        "cache-control: no-cache",
        "accept: */*",
        "content-type: application/json"
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      echo $response;
    }
   

 ?>