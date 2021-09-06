<?php

function GetData(){
$query = 'london';
$curl = curl_init();
if(isset($_REQUEST['query'])){
$query = $_REQUEST['query'];
}
curl_setopt_array($curl, [
	CURLOPT_URL => "https://travel-advisor.p.rapidapi.com/locations/search?query=$query&limit=300&offset=0&units=km&location_id=1&currency=USD&sort=relevance&lang=en_US",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: travel-advisor.p.rapidapi.com",
		"x-rapidapi-key: fcdb4b1bfcmsh66d805a6c920589p1b8166jsn4d08d476741c"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$file = "cache/location.json";

//	file_put_contents($file,$response);
	

$data = json_decode($response);
$data = $data->data;
return $data;
}
}

$time = time();
$file = "cache/location.json";
if(file_exists($file)){

$file_time	=	filemtime($file);

$diff = $time - $file_time;

if($diff < 1200){

$data = file_get_contents($file);
$data = json_decode($data);
$data = $data->data;



}else{
$data = GetData();

}



}else{

$data = GetData();

}