<?php

$curl = curl_init();
$v = $_GET['actor'];
//movie id is for deadpool.
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.themoviedb.org/3/search/movie?api_key=c0fe0cb9dd7a411fe124ccb8725af6c9&language=en-US&query=$v"
,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "{}",
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
 $maps_array = json_decode($response, true);

if ($err) {

  echo "cURL Error #:" . $err;
} else {
  for ($i=0; $i < 5; $i++) { 
   echo $response;
  }
   
}


?>
