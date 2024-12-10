<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>@yield("title")</title>
</head>
<body>
    <header>
<nav class="bg-gray-900 border-gray-200">
  <div class="flex flex-wrap items-center justify-between mx-auto py-4 px-4 md:px-0">

  <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>

    <h1 class="block text-white font-serif underline text-2xl tracking-tighter font-extrabold mx-5 mx-auto">Seth Lee</h1>
    <!-- <div class="font-mono flex md:ml-auto "> -->
    <button type="button" class="md:hidden p-2 text-white bg-red-500 hover:bg-red-600 font-medium rounded-2xl px-4 py-2 text-center text-sm">Contact</button>

    <div class="hidden w-full md:block md:w-auto md:mr-10 text-center my-auto ml-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="#" class="block py-2 px-3 text-white rounded md:hover:bg-transparent md:border-0  md:p-0 hover:bg-gray-700 hover:text-red-500 md:hover:bg-transparent">About</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-white rounded md:hover:bg-transparent md:border-0  md:p-0 hover:bg-gray-700 hover:text-red-500 md:hover:bg-transparent">Resume</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-white rounded md:hover:bg-transparent md:border-0  md:p-0 hover:bg-gray-700 hover:text-red-500 md:hover:bg-transparent">Calendar</a>
        </li>
      </ul>
    </div>
    <button type="button" class="hidden md:block ml-8 mr-5 p-2 text-white bg-red-500 hover:bg-red-600 font-medium rounded-2xl px-4 py-2 text-center text-sm">Contact</button>

    </div>
  </div>
</nav>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const toggleButton = document.querySelector("[data-collapse-toggle]");
    const navbar = document.getElementById("navbar-default");

    toggleButton.addEventListener("click", () => {
      navbar.classList.toggle("hidden"); // Add or remove the `hidden` class
    });
  });
</script>

    </header>
    <main>
