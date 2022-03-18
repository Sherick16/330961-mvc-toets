<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #A9A9A9;
}
</style>
</head>
<body>

<table>
 
<?php

$records = "";

foreach ($data['users'] as $country){
    $records .= "<tr>
    <th>" .  $country->id  . "</th>
    <th>" .  $country->name  . "</th>
    <th>" .  $country->capitalCity  . "</th>
    <th>" .  $country->continent  . "</th>
    <th>" .  $country->population  . "</th>";
    
    // echo "id " . $country->id; 
    // echo "\n";
    // echo "Land " . $country->name;
    // echo "\n";
    // echo "hoofdstad " . $country->capitalCity;
    // echo "\n";
    // echo "cotinent " . $country->continent;
    // echo "\n";
    // echo "aantalbewoners " . $country->population;
}

// var_dump($data);

?>

   <!-- Elektronica tabel-->
   <div class="container">
  <div class="row">
    <div class="col">
    <div class="col-12" id="header-text" style="">
    <h1 style="padding-bottom: 20px; padding-top: 100px;">
    <center>Landenoverzicht </center>
    <img src="globe.png" alt="..." class="img-thumbnail">
            </h1>
    </div>

      <center> <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Land</th>
      <th scope="col">hoofdstad</th>
      <th scope="col">continent</th>
      <th scope="col">aantalbewoners</th>
    </tr>
  </thead>
  <?php
    echo $records;
    ?>
</table> </center> 

</table>

</body>
</html>


