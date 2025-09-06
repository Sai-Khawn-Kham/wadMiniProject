<?php

$deleteFile = "public/gallery/" . $_GET['file_name'];
if(unlink($deleteFile)) {
  header("Location: gallery-slideshow.php");
}