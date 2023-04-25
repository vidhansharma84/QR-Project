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
      <h1 class="text-3xl font-bold text-gray-800 uppercase">My Admin</h1>
      
      <div class="bg-white p-8 rounded shadow-md mt-5">
  <h2 class="text-lg font-medium mb-4">Add New Admin</h2>
  <form>
    <div class="mb-4">
      <label class="block text-gray-700 font-medium mb-2" for="email">
        Email
      </label>
      <input class="w-full px-3 py-2 border border-gray-300 rounded" id="email" type="email" name="email" required>
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 font-medium mb-2" for="password">
        Password
      </label>
      <input class="w-full px-3 py-2 border border-gray-300 rounded" id="password" type="password" name="password" required>
    </div>
    <div class="flex justify-end">
      <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600" type="submit">Add User</button>
    </div>
  </form>
</div>
      
      <div class="flex flex-col mt-5">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Email
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Role
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Status
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Actions
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/women/17.jpg" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                      Jane Doe
                    </div>
                    <div class="text-sm text-gray-500">
                      janedoe@example.com
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">janedoe@example.com</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  Admin
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  Active
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-4">View</a>
                <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-4">Edit</a>
                <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
              </td>
            </tr>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div 
                class="flex items-center">
<div class="flex-shrink-0 h-10 w-10">
<img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/men/5.jpg" alt="">
</div>
<div class="ml-4">
<div class="text-sm font-medium text-gray-900">
John Doe
</div>
<div class="text-sm text-gray-500">
johndoe@example.com
</div>
</div>
</div>
</td>
<td class="px-6 py-4 whitespace-nowrap">
<div class="text-sm text-gray-900">johndoe@example.com</div>
</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
Admin
</span>
</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
Inactive
</span>
</td>
<td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
<a href="#" class="text-indigo-600 hover:text-indigo-900 mr-4">View</a>
<a href="#" class="text-indigo-600 hover:text-indigo-900 mr-4">Edit</a>
<a href="#" class="text-red-600 hover:text-red-900">Delete</a>
</td>
</tr>
<!-- Add more rows as needed -->
</tbody>
</table>
</div>
</div>

  </div>
</div>
    </div>
  </div>

</body>
</html>