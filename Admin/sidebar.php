<?php 

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
<div class="flex h-screen bg-gray-200">
  <div class="w-64 bg-indigo-500 shadow-md">
    <div class="flex items-center justify-center mt-10">
      <h1 class="text-3xl font-bold text-white uppercase">My Sidebar</h1>
    </div>
    <nav class="mt-10">
      <a href="Dashboard.php" class="block py-2.5 px-4 text-white rounded transition duration-200 hover:bg-indigo-300 font-bold hover:text-xl hover:shadow-lg">
        Dashboard
      </a>
      <a href="Users.php" class="block py-2.5 px-4 text-white rounded transition duration-200 hover:bg-indigo-300 font-bold hover:text-xl hover:shadow-lg mt-4">
        Users
      </a>
      <a href="Admins.php" class="block py-2.5 px-4 text-white rounded transition duration-200 hover:bg-indigo-300 font-bold hover:text-xl hover:shadow-lg mt-4">
        Admins
      </a>
      <a href="Report.php" class="block py-2.5 px-4 text-white rounded transition duration-200 hover:bg-indigo-300 font-bold hover:text-xl hover:shadow-lg mt-4">
       Report
      </a>
      <a href="Profile.php" class="block py-2.5 px-4 text-white rounded transition duration-200 hover:bg-indigo-300 font-bold hover:text-xl hover:shadow-lg mt-4">
        Profile
      </a>      
      <a href="Settings.php" class="block py-2.5 px-4 text-white rounded transition duration-200 hover:bg-indigo-300 font-bold hover:text-xl hover:shadow-lg mt-4">
        Settings
      </a>
      <a href="Logout.php" class="block py-2.5 px-4 text-white rounded transition duration-200 hover:bg-indigo-300 font-bold hover:text-xl hover:shadow-lg mt-4">
        Logout
      </a>
    </nav>
  </div>
  

</body>
</html>