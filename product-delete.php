<?php

$deleteImg = $_GET['product_image'];
$dataDir = "src/data";
$deleteFile = $dataDir . "/" . $_GET['product_data'];

if(unlink($deleteImg)){
  if(unlink($deleteFile)){
    header("Location: product.php");
  }
}