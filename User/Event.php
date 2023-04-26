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
<div class="flex h-screen">
<?php include('Sidebar.php');?>
<div class="w-4/5 bg-gray-100">
    <div class="py-4 px-2 border-b border-gray-300">
      <h1 class="text-2xl font-bold">Event</h1>
    </div>
    <div class="p-4">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
  <div class="px-6 py-4">
    <h1 class="text-2xl font-bold mb-4">Create Event</h1>
    <form>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="title">
          Title
        </label>
        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" placeholder="Enter title">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="date">
          Date
        </label>
        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="date" type="date">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="time">
          Time
        </label>
        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="time" type="time">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="description">
          Description
        </label>
        <textarea class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" rows="3"></textarea>
      </div>
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-200 ease-in-out">
        Create
      </button>
    </form>
  </div>
  <div class="bg-blue-500 text-white px-4 py-2 text-center text-sm font-semibold uppercase tracking-wider absolute right-0 top-0 transform translate-x-full transition duration-200 ease-in-out hover:translate-x-0">
    Event created
  </div>
</div>

    </div>
  </div>
</div>
</div>
</body>
</html>