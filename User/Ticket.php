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
      <h1 class="text-2xl font-bold">Tickets</h1>
    </div>
    <div class="p-4">
     

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
  <div class="flex items-center justify-between mb-6">
    <h2 class="text-2xl font-semibold text-gray-800">Ticket Information</h2>
    <div class="relative">
      <select id="eventFilter" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
        <option value="">All Events</option>
        <option value="Concert A">Concert A</option>
        <option value="Concert B">Concert B</option>
        <option value="Theater Play X">Theater Play X</option>
        <option value="Comedy Show Y">Comedy Show Y</option>
      </select>
      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M14.95 7.95l-3.5 3.5a1 1 0 0 1-1.45 0l-3.5-3.5a1 1 0 0 1 1.45-1.45L10 8.55l3.5-3.5a1 1 0 0 1 1.45 1.45z"/></svg>
      </div>
    </div>
    <button id="filterBtn" class="inline-block px-6 py-3 ml-4 font-bold text-white bg-blue-500 rounded shadow hover:bg-blue-700 focus:shadow-outline focus:outline-none">Filter</button>
  </div>
  <div class="overflow-x-auto">
    <div class="align-middle inline-block min-w-full shadow overflow-hidden rounded-lg">
      <table id="ticketTable" class="min-w-full">
        <thead>
          <tr class="bg-gray-800 text-white">
            <th class="py-3 px-6 text-left text-sm font-semibold uppercase tracking-wider">Event</th>
            <th class="py-3 px-6 text-left text-sm font-semibold uppercase tracking-wider">Date</th>
            <th class="py-3 px-6 text-left text-sm font-semibold uppercase tracking-wider">Ticket Type</th>
            <th class="py-3 px-6 text-center text-sm font-semibold uppercase tracking-wider">Price</th>
          </tr>
        </thead>
        <tbody id="ticketBody" class="bg-white divide-y divide-gray-200">
          <tr class="hover:bg-gray-50">
            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">Concert A</td>
            <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap">05/01/2023</td>
            <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap">General</td>
            <td class="py-4 px-6 text-center text-sm text-gray-500 whitespace-nowrap">$50.00</td>
          </tr>
          
          <tr class="hover:bg-gray-50">
            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">Concert B</td>
            <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap">05/15/2023</td>
            <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap">General</td>
            <td class="py-4 px-6 text-center text-sm text-gray-500 whitespace-nowrap">$45.00</td>
          </tr>
          <tr class="hover:bg-gray-50">
            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">Theater Play X</td>
            <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap">06/10/2023</td>
            <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap">Middle Row</td>
            <td class="py-4 px-6 text-center text-sm text-gray-500 whitespace-nowrap">$60.00</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>



    
    </div>
  </div>
</div>
</div>
</body>
</html>