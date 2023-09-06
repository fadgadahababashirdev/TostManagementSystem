<?php
$con=mysqli_connect("localhost","root","","mypro") or die("not connected");
?>

<?php
$sel="Select *from admin";
$runsel=mysqli_query($con,$sel);
?>
<?php
if(isset($_GET['update'])){
$aid=$_GET['aid'];
$username=$_GET['name'];
$em=$_GET['email'];
$ro=$_GET['role'];
$phone=$_GET['phone'];
$gender=$_GET['gender'];
$password=$_GET['password'];


$update=mysqli_query($con,"UPDATE admin SET name='$username',email='$em',role='$ro',phone='$phone',gender='$gender',password='$password' WHERE aid='$aid'");

if($update){
    echo "<script>alert('updated')</script>";
    echo "<script>
          window.location.assign('http://localhost/tostmanagementsystem/select.php');
                    
          </script>";
  
}
else{
    echo "<script>alert('update denied')</script>";
    
}

}

?>


