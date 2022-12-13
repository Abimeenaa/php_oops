<?php
$url = "https://simplifiedcoding.net/demos/marvel/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_response = curl_exec($ch);


if($err=curl_error($ch)){
    echo $err;
} else {
    $result = json_decode($server_response, true);

    foreach ($result as $details) {

        echo "Name:".$details['name']."<br>" ,
           "Realname:".$details["realname"], "<br>",
           "Team:".$details["team"], "<br>",
           "Created By:".$details["createdby"],"<br>",
           "Publisher:".$details["publisher"], "<br>",
           "Image:".$details["imageurl"], "<br><hr>";
    }
}
curl_close($ch);
?>
