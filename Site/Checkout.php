<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="container mx-auto py-12">
  <div class="max-w-xl mx-auto">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
      <h2 class="text-lg font-medium mb-6">Checkout</h2>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="name">
          Name
        </label>
        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Enter your name">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="email">
          Email
        </label>
        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Enter your email">
      </div>
 
      
      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
          Pay Now
        </button>
      </div>
    </form>
  </div>
</div>

</body>
</html>