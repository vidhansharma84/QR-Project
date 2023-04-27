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
    <!-- Button to open the modal -->
<button id="open-modal" class="bg-blue-500 mt-5 ml-2 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none
 focus:shadow-outline transition duration-200 ease-in-out">Create Event</button>

<!-- The modal overlay and content -->
<div id="modal" class="fixed inset-0 z-50 overflow-auto bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
  <div class="bg-white rounded-lg shadow-lg overflow-hidden w-1/2 float-right">
    <div class="px-6 py-4">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
    <button id="close-modal" class="bg-blue-500 
    hover:bg-blue-700 text-white font-bold py-2 px-4 float-right
    rounded focus:outline-none focus:shadow-outline transition duration-200 ease-in-out">X</button>
  <div class="px-6 py-4">
    <h1 class="text-2xl font-bold mb-4">Create Event</h1>
   
    <form action="../Backend/backend.php" method="post" enctype="multipart/form-data">
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="title">
          Title
        </label>
        <input name="title" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" placeholder="Enter title">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="date">
          Date
        </label>
        <input name="date" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="date" type="date">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="time">
          Time
        </label>
        <input name="time" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="time" type="time">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="title">
          Amount
        </label>
        <input name="amount" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="number" placeholder="Enter Amount">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="title">
          Location
        </label>
        <input name="location" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" placeholder="Enter Location">
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="description">
          Description
        </label>
        <textarea  name="about" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" rows="3"></textarea>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="thumbnail">
          Thumbnail
        </label>
        <div class="relative border-dashed border-2 border-gray-400 bg-gray-100 rounded-md py-4 px-4 flex justify-center items-center">
          <div class="space-y-1 text-center">
            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M38 20c0-5.523-4.477-10-10-10s-10 4.477-10 10v4H16a4 4 0 00-4 4v16a4 4 0 004 4h16a4 4 0 004-4V24a4 4 0 00-4-4h-6v-4c0-2.206 1.794-4 4-4s4 1.794 4 4v4h6z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M24 13a7 7 0 017 7v4H17v-4a7 7 0 017-7z"></path>
            </svg>
            <div class="flex text-sm text-gray-600">
              <label for="file-upload" >the file</label>
<p class="pl-1">or drag and drop</p>
</div>
<p class="text-xs text-gray-500">
PNG, JPG, GIF up to 10MB
</p>
</div>
<input id="file-upload" name="file" type="file" class="absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer">
</div>
</div>
<button type="submit" name="event-create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-200 ease-in-out">
Create
</button>
</form>

  </div>
  <div class="bg-green-500 text-white px-4 py-2 text-center text-sm font-semibold uppercase tracking-wider absolute right-0 top-0 transform translate-x-full transition duration-200 ease-in-out hover:translate-x-0">
    Event created
  </div>
</div>
     
    </div>
  </div>
</div>

    <div class="p-4 mt-5">
      
    <?php 
      $sql="SELECT * from event where UID='$id'";
      $result=mysqli_query($conn,$sql);
      $present=mysqli_num_rows($result);
      if($present>0)
      {
        while($row=mysqli_fetch_assoc($result))
        {

      
      ?>

    <div class="flex w-full pl-5">
  <div class="max-w-md rounded overflow-hidden shadow-lg bg-white">
    <img class="w-372 h-64 object-cover" src="<?php echo $row['Pic'];?>" alt="Event Image">
    <div class="px-6 py-4">
      <h1 class="text-2xl font-bold mb-2"><?php echo $row['Title'];?></h1>
      <p class="text-gray-700 text-base mb-2">Date: <?php echo $row['Date'];?></p>
      <p class="text-gray-700 text-base mb-4">Location: <?php echo $row['Location'];?></p>
      <div class="flex justify-between items-center">
        <span class="text-gray-500 font-semibold"><?php echo $row['Amount'];?></span>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-200 ease-in-out">View</button>
      </div>
    </div>
  </div>

  <?php 
  }
}

  ?>
 
</div>


<script >
  const openModal = document.getElementById('open-modal')
const closeModal = document.getElementById('close-modal')
const modal = document.getElementById('modal')

openModal.addEventListener('click', () => {
  modal.classList.remove('hidden')
})

closeModal.addEventListener('click', () => {
  modal.classList.add('hidden')
})

</script>


    </div>
  </div>
</div>
</div>
</body>
</html>