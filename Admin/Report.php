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
      <h1 class="text-3xl font-bold text-gray-800 uppercase">My Report</h1>
      
      <div class="bg-white rounded-lg shadow-lg p-8">
  <h2 class="text-lg font-medium mb-6">Report Dashboard</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <div class="bg-indigo-500 text-white rounded-lg p-6">
      <h3 class="text-lg font-medium mb-4">Total Admins</h3>
      <p class="text-4xl font-semibold">25</p>
    </div>
    <div class="bg-blue-500 text-white rounded-lg p-6">
      <h3 class="text-lg font-medium mb-4">Active Admins</h3>
      <p class="text-4xl font-semibold">18</p>
    </div>
    <div class="bg-red-500 text-white rounded-lg p-6">
      <h3 class="text-lg font-medium mb-4">Inactive Admins</h3>
      <p class="text-4xl font-semibold">7</p>
    </div>
  </div>
  <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="bg-white rounded-lg shadow-lg p-6">
      <h3 class="text-lg font-medium mb-4">Admin Activity</h3>
      <div class="overflow-x-auto">
        <table class="table-auto w-full">
          <thead>
            <tr>
              <th class="px-4 py-2 text-left text-gray-700 font-medium">Admin Name</th>
              <th class="px-4 py-2 text-left text-gray-700 font-medium">Email</th>
              <th class="px-4 py-2 text-left text-gray-700 font-medium">Last Login</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <tr>
              <td class="px-4 py-2 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/men/12.jpg" alt="">
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
              <td class="px-4 py-2 whitespace-nowrap">
                <div class="text-sm text-gray-900">johndoe@example.com</div>
              </td>
              <td class="px-4 py-2 whitespace-nowrap">
                <div class="text-sm text-gray-900">2022-04-23 10:27:41</div>
              </td>
            </tr>
            <tr>
              <td class="px-4 py-2 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/women/25.jpg" alt="">
                  </div>
                  <div class="ml-4">
                    <div
                    "class="text-sm font-medium text-gray-900">
Shreya
</div>
<div class="text-sm text-gray-500">
shreya@example.com
</div>
</div>
</div>
</td>
<td class="px-4 py-2 whitespace-nowrap">
<div class="text-sm text-gray-900">shreya@example.com</div>
</td>
<td class="px-4 py-2 whitespace-nowrap">
<div class="text-sm text-gray-900">2022-04-21 14:06:12</div>
</td>
</tr>
<!-- Add more rows as needed -->
</tbody>
</table>
</div>
</div>
<div class="bg-white rounded-lg shadow-lg p-6">
<h3 class="text-lg font-medium mb-4">Admin Activity Chart</h3>
<canvas id="admin-activity-chart"></canvas>
</div>

  </div>
</div><script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
<script>
  const labels = ["puneet kumar", "vishal sharma", "surya mishra", "manish sharma", "mayank gupta", "yashkant rai", "dev kumar"];
  const data = {
    labels: labels,
    datasets: [{
      label: 'Logins',
      data: [12, 7, 4, 9, 6, 8, 10],
      backgroundColor: [
        'rgba(54, 162, 235, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(54, 162, 235, 0.2)',
      ],
      borderColor: [
        'rgba(54, 162, 235, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(54, 162, 235, 1)',
      ],
      borderWidth: 1
    }]
  };
  const config = {
    type: 'bar',
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };
  var myChart = new Chart(
    document.getElementById('admin-activity-chart'),
    config
  );
</script>


    </div>
  </div>

</body>
</html>