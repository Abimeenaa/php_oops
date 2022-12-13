<?php
$url = "https://simplifiedcoding.net/demos/marvel/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_response = curl_exec($ch);


if ($err = curl_error($ch)) {
  echo $err;
} else {
  $result = json_decode($server_response, true);

}
curl_close($ch);
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <style>
    img{
        width: 150px;
        
    }
    </style>
  <!-- <link rel="stylesheet" type="text/css" href="register.css"> background: linear-gradient(to top left, #99ffcc 10%, #9999ff 100%)height: 100vh;;-->
  <title>Curl API</title>
  <link rel="icon" type="image/x-icon" href="avengerslogo.png">
  
</head>
<body style="font-family: cursive; ">
<!-- <div class="header-inner section-inner"> -->
  <!-- <img src="Americalogo.jpg" height="150px" width="150px" alt="Captain Americalogo"> -->
  <div class="container-fluid">
    <div class="d-flex justify-content-center">
      <div class="col-sm-10">
        <caption>
          <legend style="text-align:center;">Marvel Hero Details</legend>
        </caption>

        <table class="table table-striped table-hover table-bordered">
          <thead class="table-dark table-bordered">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Realname</th>
              <th scope="col">Team</th>
              <th scope="col">Created By</th>
              <th scope="col">Publisher</th>
              <th scope="col">Image</th>
            </tr>
          </thead>
          <tbody>
            <?php

            foreach ($result as $details) :?>
            <tr><td><?=$details["name"]?></td>
            <td><?=$details["realname"]?></td>
            <td><?=$details["team"]?></td>
            <td><?=$details["createdby"]?></td>
            <td><?=$details["publisher"]?></td>
            <td><img src="<?=$details["imageurl"]?>"/></td>
              <!-- echo "Name:" .  . "<br>",
                "Realname:" . $details["realname"], "<br>",
                "Team:" . $details["team"], "<br>",
                "Created By:" . $details["createdby"], "<br>",
                "Publisher:" . $details["publisher"], "<br>",
                "Image:" . $details["imageurl"], "<br><hr>";
            } -->
          </tr>
          <?php endforeach;?>    
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>