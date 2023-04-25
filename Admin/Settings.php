<?php 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('sidebar.php');?>
<div class="flex-1">
    <div class="p-10">
      <h1 class="text-3xl font-bold text-gray-800 uppercase">My Settings</h1>
      <div class="bg-white rounded-lg shadow-lg p-8">
  <h2 class="text-lg font-medium mb-6">Settings</h2>
  <form>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div>
        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
        <input type="text" id="name" name="name" class="border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2 rounded-md" placeholder="Enter your name">
      </div>
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
        <input type="email" id="email" name="email" class="border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2 rounded-md" placeholder="Enter your email address">
      </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
        <input type="password" id="password" name="password" class="border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2 rounded-md" placeholder="Enter a new password">
      </div>
      <div>
        <label for="confirm-password" class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
        <input type="password" id="confirm-password" name="confirm-password" class="border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2 rounded-md" placeholder="Confirm your new password">
      </div>
    </div>
    <div class="mt-6">
      <button type="submit" class="bg-indigo-500 text-white rounded-lg px-4 py-2 hover:bg-indigo-600">Save Changes</button>
    </div>
  </form>
</div>

    </div>
  </div>

</body>
</html>