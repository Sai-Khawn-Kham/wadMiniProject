<?php

if (empty($_POST['amount'])) {
  header("Location: /exchange.php");
  die("-- need all input --");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./src/styles/app.css">
</head>

<body>
  <main class="max-w-[1000px] mx-auto p-10">

    <header class="flex gap-x-2 items-center mb-4">
      <!-- Navigation Toggle -->
      <div class="lg:hidden text-center">
        <button type="button" class="p-1 inline-flex justify-center items-center gap-x-2 text-start text-sm font-medium align-middle focus:outline-hidden" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-sidebar-offcanvas" aria-label="Toggle navigation" data-hs-overlay="#hs-sidebar-offcanvas">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <!-- End Navigation Toggle -->
      <a href="./index.php" class="text-3xl font-serif font-bold">Backend Projects</a>
    </header>

    <!-- Sidebar -->
    <div id="hs-sidebar-offcanvas" class="hs-overlay [--auto-close:lg] lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 w-64 hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform h-full hidden fixed top-0 start-0 bottom-0 z-60 bg-white border-e border-gray-200 dark:bg-neutral-800 dark:border-neutral-700" role="dialog" tabindex="-1" aria-label="Sidebar">
      <div class="relative flex flex-col h-full max-h-full ">
        <!-- Header -->
        <div class=" p-4 flex justify-between items-center gap-x-2">
          <a class="flex-none font-semibold text-xl text-black focus:outline-hidden focus:opacity-80 dark:text-white " href="./index.php" aria-label="Brand">My Apps</a>
          <div class="lg:hidden -me-2">
            <!-- Close Button -->
            <button type="button" class="flex justify-center items-center gap-x-3 size-6 bg-white border border-gray-200 text-sm text-gray-600 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:hover:text-neutral-200 dark:focus:text-neutral-200" data-hs-overlay="#hs-sidebar-offcanvas">
              <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M18 6 6 18" />
                <path d="m6 6 12 12" />
              </svg>
              <span class="sr-only">Close</span>
            </button>
            <!-- End Close Button -->
          </div>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
          <div class="hs-accordion-group pb-0 px-2  w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
            <ul class="space-y-1">
              <li>
                <a href="./area.php" class="flex items-center gap-x-3.5 py-2 px-2.5 bg-gray-100 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-white">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" />
                  </svg>
                  Area Calculator
                </a>
              </li>

              <li>
                <a href="exchange.php" class=" w-full flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                  </svg>
                  Exchange
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- End Body -->
      </div>
    </div>
    <!-- End Sidebar -->

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
          <a href="./exchange.php" class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500">
            Exchange Calculator
          </a>
          <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m9 18 6-6-6-6"></path>
          </svg>
        </li>
        <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200" aria-current="page">
          Exchange Result
        </li>
      </ol>

      <hr class="border-gray-300 my-4">

      <?php
      $amount = $_POST['amount'];
      $fCurrArr = explode(" ", $_POST['fromCurrency']);
      $fCurrName = $fCurrArr[0];
      $fCurrRate = $fCurrArr[1];
      $tCurrArr = explode(" ", $_POST['toCurrency']);
      $tCurrName = $tCurrArr[0];
      $tCurrRate = $tCurrArr[1];
      $toMMK = $amount * $fCurrRate;
      $toCurr = $toMMK / $tCurrRate;
      $temp = number_format($toCurr, 2, ".", ",");
      $result = "$amount $fCurrName = $temp $tCurrName";
      $fileName = "exchangeRecord.txt";
      if (!file_exists($fileName)) {
        touch($fileName);
      }
      $fileStream = fopen($fileName, "a");
      fwrite($fileStream, "\n$result ");
      fclose($fileStream);
      ?>

      <p class="text-5xl text-center my-10">
        <?= $result ?>
      </p>

      <div class="flex gap-3">
        <a href="/exchange.php" class="flex-grow py-3 px-4 inline-flex items-center justify-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
          Calculate Again
        </a>
        <a href="exchange-record.php" class="flex-grow py-3 px-4 inline-flex items-center justify-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 text-gray-500 hover:border-blue-600 hover:text-blue-600 focus:outline-hidden focus:border-blue-600 focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500 dark:hover:border-blue-600 dark:focus:text-blue-500 dark:focus:border-blue-600">
          All Record
        </a>
      </div>

    </section>
  </main>
  <script src="./node_modules/preline/dist/preline.js"></script>
</body>

</html>