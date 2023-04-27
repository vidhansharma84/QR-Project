<?php 
 session_start();
  include('../Backend/config.php');
 $id=$_SESSION['UID'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    

  <div class="w-1/5 bg-gray-900 text-gray-100 flex flex-col">
    <div class="py-4 px-2 border-b border-gray-800 flex items-center justify-center">
      <h1 class="text-xl font-bold">Sidebar</h1>
    </div>
    <div class="flex-1 overflow-y-auto">
      <ul class="mt-6">
        <li class="my-px">
          <a href="Dashboard.php" class="flex flex-row items-center h-12 px-3 rounded-lg text-gray-400 hover:bg-gray-800">
            <span class="flex items-center justify-center text-lg text-gray-300">
              <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                <path fill-rule="evenodd" d="M10 18a.93.93 0 01-.64-.28l-6-6a.93.93 0 011.28-1.28L10 15.44l5.36-5.36a.93.93 0 011.32 0 .93.93 0 010 1.32l-6 6a.93.93 0 01-.64.28z" clip-rule="evenodd" />
              </svg>
            </span>
            <span class="ml-4 font-medium">Dashboard</span>
          </a>
        </li>
        <li class="my-px">
          <a href="Event.php" class="flex flex-row items-center h-12 px-3 rounded-lg text-gray-400 hover:bg-gray-800">
            <span class="flex items-center justify-center text-lg text-gray-300">
              <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                <path fill-rule="evenodd" d="M13 18a1 1 0 01-.87-.5L9.26 12l-3.82 5.5A1 1 0 014 18H3a1 1 0 01-1-1V3a1 1 0 011-1h10a1 1 0 011 1v14a1 1 0 01-.5.87l-4 2a1 1 0 01-.13.06zM12 9a1 1 0 110 2 1 1 0 010-2zm0-3a1 1 0 110 2 1 1 0 010-2zm-2 9a1 1 0 110-2 1 1 0 010 2zm-2-3a1 1 0 110-2 1 1 0 010 2z" clip-rule="evenodd" />
              </svg>
            </span>
            <span class="ml-4 font-medium">Event</span>
          </a>
        </li>
        <li class="my-px">
          <a href="Ticket.php" class="flex flex-row items-center h-12 px-3 rounded-lg text-gray-400 hover:bg-gray-800">
            <span class="flex items-center justify-center text-lg text-gray-300">
              <svg fill="currentColor" viewBox="0 0 20 20" class="w
              -6 h-6">
<path fill-rule="evenodd" d="M9.2 10.5c1 0 1.5-.5 1.5-1.5V8H12v1.5c0 1-1.5 1.5-2.5 1.5zM6 7.5c1 0 2-.5 2-1.5S7 4.5 6 4.5 4 5 4 6s1 1.5 2 1.5zm0 3c-1 0-2 .5-2 1.5s1 .5 2 1.5 2-.5 2-1.5-1-.5-2-1.5zM8 8.5h4v-1H8v1z" clip-rule="evenodd"/>
</svg>
</span>
<span class="ml-4 font-medium">Ticket's</span>
</a>
</li>

<li class="my-px">
          <a href="Logout.php" class="flex flex-row items-center h-12 px-3 rounded-lg text-gray-400 hover:bg-gray-800">
            <span class="flex items-center justify-center text-lg text-gray-300">
              <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                <path fill-rule="evenodd" d="M13 18a1 1 0 01-.87-.5L9.26 12l-3.82 5.5A1 1 0 014 18H3a1 1 0 01-1-1V3a1 1 0 011-1h10a1 1 0 011 1v14a1 1 0 01-.5.87l-4 2a1 1 0 01-.13.06zM12 9a1 1 0 110 2 1 1 0 010-2zm0-3a1 1 0 110 2 1 1 0 010-2zm-2 9a1 1 0 110-2 1 1 0 010 2zm-2-3a1 1 0 110-2 1 1 0 010 2z" clip-rule="evenodd" />
              </svg>
            </span>
            <span class="ml-4 font-medium">Logout</span>
          </a>
        </li>

</ul>
</div>

  </div>
 
</body>
</html>