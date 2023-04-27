<?php 
session_start();
include('config.php');

//User Login Codes

if(isset($_POST['user-login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql="SELECT * FROM user WHERE Email ='$email' And Password='$password'";
    $result = mysqli_query($conn, $sql);
    $present=mysqli_num_rows($result);
    if($present>0)
    {
        $row = mysqli_fetch_array($result);
        $_SESSION['UID']=$row['ID'];
        header('location:../User/Dashboard.php');
    }else{
        $_SESSION['UNF']=1;
        header('location:../User/index.php');
    }
}


//User Register Code

if(isset($_POST['user-register']))
{
    $name=$_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql="SELECT * FROM user WHERE Email ='$email' ";
    $result = mysqli_query($conn, $sql);
    $present=mysqli_num_rows($result);
    if($present>0)
    {
        $_SESSION['UAE']=1;
        header('location:../User/Register.php');
    }else{
       $query="INSERT INTO user(Name,Email,Password) VALUES('$name','$email','$password')";
       $results=mysqli_query($conn,$query);
       $sql="SELECT * FROM user WHERE Email ='$email' ";
    $result = mysqli_query($conn, $sql);
       $present=mysqli_num_rows($result);
       if($present>0){
       $row=mysqli_fetch_array($result);
       $_SESSION['UID']=$row['ID'];
        header('location:../User/Dashboard.php');
       }else{
        echo "something went wrong";
       }
    }
}



//event form submit codes
if(isset($_POST['event-create']))
{
    $id=$_SESSION['UID'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $about=$_POST['about'];
    $location = $_POST['location'];
    $amount = $_POST['amount'];
    $fa=$_FILES['file'];
		   $filenames=$fa['name'];
		   $filepaths=$fa['tmp_name'];
		   $destfiles='../asset/upload/'.$filenames;
		   move_uploaded_file($filepaths,$destfiles);

           $sql="INSERT INTO event(UID,Title,Date,Time,About,Pic,Amount,Location)values('$id','$title','$date','$time','$about','$destfiles','$amount','$location')";
           $result=mysqli_query($conn,$sql);
           if($result==true)
           {
           header('Location:../User/Event.php');
           }else{
            header('Location:../User/Event.php');
           }


}

?>