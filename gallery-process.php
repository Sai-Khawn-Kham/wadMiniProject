<?php

if(empty($_FILES)) {
  header("Location: /gallery.php");
  die("-- No file was uploaded --");
}

$saveDir = "public/gallery";
if (!is_dir($saveDir)) {
  mkdir($saveDir, 0777, true);
}

$currUpload = [];

//  ------------------------------------------------------------- multiple upload files
$error = false;
foreach ($_FILES['upload']['name'] as $key => $name) {
  $ext = pathinfo($name)['extension'];
  $saveFile = $saveDir . "/" . uniqid() . "." . $ext;
  array_push($currUpload, $saveFile);
  if (!move_uploaded_file($_FILES['upload']['tmp_name'][$key], $saveFile)) {
    $error = true;
  } else {
    $error = false;
  }
}

// --------------------------------------------------------------- single upload file
// $error = false;
// $arr = explode(".",$_FILES["upload"]["name"]);
// $ext = end($arr);
// $ext = pathinfo($_FILES["upload"]["name"])["extension"];
// $saveFile = $saveDir . "/" . uniqid() . "-" . basename($_FILES['upload']['name']);
// $saveFile = $saveDir . "/" . uniqid() . "." . $ext;
// if(!move_uploaded_file($_FILES['upload']['tmp_name'], $saveFile)){
//   $error = true;
// } else {
//   $error = false;
// }

require_once('./src/template/header.php');
require_once('./src/template/sidebar.php');
?>

<section class="bg-gray-100 p-10 rounded-lg">
  <ol class="flex items-center whitespace-nowrap">
    <li class="inline-flex items-center">
      <a href="./index.php" class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500">
        Home
      </a>
      <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="m9 18 6-6-6-6"></path>
      </svg>
    </li>
    <li class="inline-flex items-center">
      <a href="./gallery.php" class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500">
        Gallery
        <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="m9 18 6-6-6-6"></path>
        </svg>
      </a>
    </li>
    <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200" aria-current="page">
      Result
    </li>
  </ol>

  <hr class="border-gray-300 my-4">

  <?php
  if ($error === false) :
  ?>
    <div>
      <h3 class="text-2xl font-semibold">Uploaded Image</h3>
      <div class="columns-3 mt-4">
        <?php
        foreach ($currUpload as $photo):
        ?>
          <img class="rounded-lg mt-3 first:mt-0" src="<?= $photo ?>">
        <?php
        endforeach;
        ?>
      </div>
      <div class="flex justify-center">
        <a href="./gallery-slideshow.php" class="mt-4 py-1.5 px-3 inline-flex items-center justify-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
          Go to Gallery Collection
        </a>
      </div>
    </div>
  <?php
  else :
  ?>
    <div>ERROR: Can't upload the image. <a class="hover:underline" href="./gallery.php">Go to Gallery</a></div>
  <?php
  endif;
  ?>
</section>

<?php
require_once('./src/template/footer.php');
?>