<?php
include 'connection.php';
if(isset($_POST['Submit']))
{

$Username=$_POST['usrname'];
$Password=$_POST['psw'];
$ConformPassword=$_POST['psw'];
 
$insertquery="insert into registration(Username,Password,ConformPassword).values('$Username','$Password','$ConformPassword')";
$res=mysqli_query($con,$insertquery);
if($res)
{
    ?>
    <script>
        alert("data inserted properly");
        </script>
        <?php
}
else{
    ?>
    <script>
        alert("data not inserted properly");
       
        </script>
         <?php
}

}


