	<?php 
session_start();
if(isset($_POST['submit']))
{
   include "setting/config.php";
   $admin_username = $_POST['admin_username'];
   $admin_password = $_POST['admin_password'];
   if($admin_username=="" AND $admin_password=="")
   {
      echo "<script>alert('Enter Your Username & Password');</script>";
   }
   else
   {
      $melogin = $ravi->meadmin_check($admin_username,$admin_password);
         if($melogin==1)
   {
   $_SESSION['meadmin'] =  $admin_username;
      header("location: meadmin/home.php");
   }
      
      
   else
   {
      echo "<script>alert('Sorry Try Later');</script>";
   }
   
   }

   
}

?>