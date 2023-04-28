<?php 
 session_start();
 include('../Backend/config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Event Page</title>
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="bg-gray-100 font-sans">
	<header class="bg-white shadow">
		<div class="container mx-auto py-4 px-6">
			<div class="flex justify-between items-center">
				<h1 class="text-2xl font-bold text-gray-800">Events</h1>
				<nav class="flex">
					<a href="#" class="text-gray-600 py-2 px-4">Create Event</a>
					
				</nav>
			</div>
		</div>
	</header>
	<main class="container mx-auto my-8 px-6">
		<h2 class="text-2xl font-bold text-gray-800 mb-4">Upcoming Events</h2>
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
			<!-- Event card example -->
            <?php 
      $sql="SELECT * from event ";
      $result=mysqli_query($conn,$sql);
      $present=mysqli_num_rows($result);
      if($present>0)
      {
        while($row=mysqli_fetch_assoc($result))
        {

      
      ?>
			<div class="bg-white rounded-lg shadow-md overflow-hidden">
				<div class="bg-gray-200 h-64 md:h-64 w-full flex items-center justify-center">
					<img src="<?php echo $row['Pic'];?>" class="img-responsive w-full h-64"/>
				</div>
				<div class="p-4">
					<h3 class="text-lg font-bold mb-2"><?php echo $row['Title'];?></h3>
					<p class="text-gray-700 mb-4"><?php echo $row['About'];?></p>
                    <p class="text-gray-700 mb-4">Location:-<?php echo $row['Location'];?></p>
                    <p class="text-gray-700 mb-4">Amount:- ₹<?php echo $row['Amount'];?></p>
                    <form method="post" action="checkout.php">
					<a class="inline-block bg-blue-500 text-white px-3 py-2 rounded 
                    hover:bg-blue-600 transition-colors duration-300"><form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Lik7b0kU6SGcZY" async> </script> </form></a>
                    </form>
				</div>
			</div>


            <?php  }} ?>
			<!-- More event cards here -->
		</div>
		
	</main>
	
</body>
</html>
