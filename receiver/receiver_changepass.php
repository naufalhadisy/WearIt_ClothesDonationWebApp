<?php
$identifier = 0;
include("../php/page_header.php");
include("../config.php");
error_reporting(0);
$account = $_SESSION["receiver_email"];

if (isset($_POST['save'])) {

                
  $password  = $_POST['Password'];
  $newpassword1 = $_POST['newPass1'];
  $newpassword2 = $_POST['newPass2'];
  
  $query4 = "SELECT Password FROM receiver WHERE Email = '$account'";
  $result2 = mysqli_query($con, $query4);
  $data  = mysqli_fetch_array($result2);
  
  if ($data['Password'] == md5($password))
  {
     
      if ($newpassword1 == $newpassword2)
      {
          $newencryptedpassword = md5($newpassword1);
           
          $query5 = "UPDATE receiver SET Password = '$newencryptedpassword' WHERE Email = '$account' ";
          $result3 = mysqli_query($con, $query5);
          
          if ($result3) echo "<script>alert('Password Changed')</script>";
          echo "<script type='text/javascript'> document.location ='receiver_profile.php'; </script>";
      }
      else echo "<script>alert('Incorrect New Password')</script>";
  }
  else echo "<script>alert('Current Password is Incorrect')</script>";
  }
?>


<section class="s6">
  <div class="main-container">
    <div class="hero-title">
      <div class="bg-white p-3 border rounded" style="width: 450px;">
        <form method="POST" action="">
          <?php
           $ret = mysqli_query($con, "SELECT * FROM receiver WHERE Email = '$account'");
           $cnt = 1;
           $row = mysqli_num_rows($ret);
           if ($row > 0) {
               while ($row = mysqli_fetch_array($ret)) {
                //print_r($row);
          ?>
                <table style="border: none;">
                <h5 style="text-align: center">Change Password</h5><br>
                  <tr>
                    <td style="border: none; text-align: left;">Old Password</td>
                    <td style="border: none;">: </td>
                    <td style="border: none;"><input class="form-control" type="password" name="Password" required></td>
                  <tr>
                  <tr>
                    <td style="border: none;text-align: left;">New Password</td>
                    <td style="border: none;">: </tdstyle=>
                    <td style="border: none;"><input class="form-control" type="password" name="newPass1" required></td>
                  <tr>
                  <tr>
                    <td style="border: none;text-align: left;">Confirm Password</td>
                    <td style="border: none;">: </td>
                    <td style="border: none;"><input class="form-control" type="password" name="newPass2" required></td>
                  <tr>
                </table>
                <button class="btn btn-success" type="submit" name="save" value="Submit">Save</button>
          <?php
          $cnt = $cnt + 1;
              }
            }
          ?>
        </form>
      </div>
    </div>
    <?php include("../php/page_footer.php"); ?>       