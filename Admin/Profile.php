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
      <h1 class="text-3xl font-bold text-gray-800 uppercase">My Profile</h1>
      <div class="bg-white rounded-lg shadow-lg p-8">
  <div class="flex flex-col md:flex-row items-center md:items-start justify-between">
    <div class="flex-shrink-0 mb-4 md:mb-0">
      <img class="h-24 w-24 rounded-full object-cover" src="https://randomuser.me/api/portraits/women/12.jpg" alt="Profile picture">
    </div>
    <div class="md:ml-8">
      <h2 class="text-2xl font-medium text-gray-900 mb-2">Jane Doe</h2>
      <div class="text-gray-700 mb-4">
        <p class="mb-2">Admin</p>
        <p>Email: janedoe@example.com</p>
      </div>
      <div class="flex items-center">
        <a href="#" class="bg-indigo-500 text-white rounded-lg px-4 py-2 mr-4 hover:bg-indigo-600">Edit Profile</a>
        <a href="#" class="bg-gray-300 text-gray-700 rounded-lg px-4 py-2 hover:bg-gray-400">Change Password</a>
      </div>
    </div>
  </div>
  <div class="mt-8">
    <h3 class="text-lg font-medium text-gray-900 mb-4">Activity</h3>
    <div class="overflow-x-auto">
      <table class="table-auto w-full">
        <thead>
          <tr>
            <th class="px-4 py-2 text-left text-gray-700 font-medium">Date</th>
            <th class="px-4 py-2 text-left text-gray-700 font-medium">Activity</th>
            <th class="px-4 py-2 text-left text-gray-700 font-medium">IP Address</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          <tr>
            <td class="px-4 py-2 whitespace-nowrap">2022-04-23 10:27:41</td>
            <td class="px-4 py-2 whitespace-nowrap">Logged in</td>
            <td class="px-4 py-2 whitespace-nowrap">192.168.1.1</td>
          </tr>
          <tr>
            <td class="px-4 py-2 whitespace-nowrap">2022-04-22 14:06:12</td>
            <td class="px-4 py-2 whitespace-nowrap">Updated user profile</td>
            <td class="px-4 py-2 whitespace-nowrap">192.168.1.1</td>
          </tr>
          <!-- Add more rows as needed -->
        </tbody>
      </table>
    </div>
  </div>
</div>

    </div>
  </div>

</body>
</html>