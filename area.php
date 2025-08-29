<?php
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
    <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200" aria-current="page">
      Area Calculator
    </li>
  </ol>

  <hr class="border-gray-300 my-4">

  <form action="./area-process.php" method="post">
    <div class="mb-4">
      <label for="width" class="block text-sm font-medium mb-2 dark:text-white">Width</label>
      <input type="number" name="width" id="width" class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
    </div>
    <div class="mb-4">
      <label for="breadth" class="block text-sm font-medium mb-2 dark:text-white">Breadth</label>
      <input type="number" name="breadth" id="breadth" class="py-2.5 sm:py-3 px-4 block w-full border-gray-200 rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
    </div>
    <button type="submit" name="calc_btn" class="w-full py-3 px-4 inline-flex items-center justify-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
      Calculate
    </button>
  </form>
</section>

<?php require_once('./src/template/footer.php'); ?>