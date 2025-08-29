<?php
if (empty($_POST['width']) || empty($_POST['breadth'])) {
  header("Location: /area.php");
  die("-- need all input --");
}

require_once('./src/template/header.php');
require_once('./src/template/sidebar.php');

$width = $_POST['width'];
$breadth = $_POST['breadth'];
$area = $width * $breadth;

$fileName = "areaRecord.txt";
if (!file_exists($fileName)) {
  touch($fileName);
}

$fileStream = fopen($fileName, "a");
fwrite($fileStream, "\n$width * $breadth = $area");
fclose($fileStream);
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
      <a href="./area.php" class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500">
        Area Calculator
        <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="m9 18 6-6-6-6"></path>
        </svg>
      </a>
    </li>
    <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200" aria-current="page">
      Calculate Result
    </li>
  </ol>

  <hr class="border-gray-300 my-4">

  <p class="text-5xl text-center my-10">
    <?= $area ?> Sqft
  </p>

  <div class="flex gap-3">
    <a href="/area.php" class="flex-grow py-3 px-4 inline-flex items-center justify-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
      Calculate Again
    </a>
    <a href="area-record.php" class="flex-grow py-3 px-4 inline-flex items-center justify-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 text-gray-500 hover:border-blue-600 hover:text-blue-600 focus:outline-hidden focus:border-blue-600 focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500 dark:hover:border-blue-600 dark:focus:text-blue-500 dark:focus:border-blue-600">
      All Record
    </a>
  </div>
</section>

<?php require_once('./src/template/footer.php'); ?>