<?php

$imgDir = "public/products";
if(!is_dir($imgDir)){
  mkdir($imgDir, 0777, true);
}

$dataDir = "src/data";
if(!is_dir($dataDir)){
  mkdir($dataDir, 0777, true);
}

$error = false;
$ext = pathinfo($_FILES["product_image"]["name"])["extension"];
$saveImg = $imgDir . "/" . uniqid() . "." . $ext;
if(!move_uploaded_file($_FILES['product_image']['tmp_name'], $saveImg)){
  $error = true;
}

if($error == false){
  $_POST['product_image'] = $saveImg;
  $json = json_encode($_POST);

  $saveData = $dataDir . "/" . uniqid() . "_" . $_POST['product_name'] . ".json";
  touch($saveData);

  $fileStream = fopen($saveData, 'w');
  fwrite($fileStream, $json);
  fclose($fileStream);
}

header("Location: product.php");