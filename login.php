<?php
session_start();
?>

<html>
<?php

   $i1="";
   $i2="";
   $i3="";
  if (isset($_POST['submit'])) {
$uem = $_POST["uem"];
$ps = $_POST["ps1"];

if (empty($uem)){
    $i1='Please enter username or email address';
}
if (empty($ps)){
 $i2='Please enter password';
}
 if ($i1=="" && $i2==""){
    include 'm1.php';
    $sql="select * from reg where (urname='$uem' or email='$uem') and pass='$ps'";
    $qurey=mysqli_query($conn,$sql);
  $rslt=mysqli_fetch_assoc($qurey); 
  $row_num=mysqli_num_rows($qurey);
  if ($row_num == 1) {
    $_SESSION['uid']= $rslt['id'];
 $_SESSION['uname'] = $rslt['urname'];
 $_SESSION['ulevel'] = $rslt['ulevel'];
 $_SESSION['name1'] = $rslt['name1'];

  header ('location:m4.php');
  }
else{
    $i3='not correct';
}
 }
   }
            ?>
                <body align="center">
<form action="lonig.php" method="post">


<h1>login</h1>
<div align="center">
    <label>Email or username</label>   
    <input type="text" name="uem"><?php echo $i1; ?><br><br>

    <label>password:   </label>   
    <input type="password" name="ps1"><?php echo $i2; ?><br><br>

    <input type="submit" name="submit" value="Register"><br>

    <h6 style="color: red;"><?php echo $i3;?></h6>
    <a href="ss.php">create account</a>
</div>

</from>
</body>
</html>