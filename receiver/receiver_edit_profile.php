<?php
$identifier = 0;
include("../php/page_header.php");
include("../config.php");
error_reporting(0);
$account = $_SESSION["receiver_email"];

if (isset($_POST['save'])) {

  $name = $_POST['Name'];
  $phonenum = $_POST['PhoneNum'];
  $email = $_POST['Email'];
  $receiverid = $_POST['ReceiverID'];

  $query = mysqli_query($con, "UPDATE receiver SET Name = '$name', PhoneNum = '$phonenum', Email = '$email' WHERE Email = '$account'");

  if ($query) {
    echo "<script>alert('Profile Successfully Updated');</script>";
    echo "<script type='text/javascript'> document.location ='receiver_profile.php'; </script>";
  } else {
    echo "Error Updating Profile" . mysqli_error($con);
  }
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
                <h5 style="text-align: center">Edit Profile</h5><br>
                  <tr>
                    <td style="border: none; text-align: left;">Name</td>
                    <td style="border: none;">: </td>
                    <td style="border: none;"><input class="form-control" type="name" name="Name" value="<?php echo $row['Name']; ?>" required></td>
                  <tr>
                  <tr>
                    <td style="border: none;text-align: left;">Phone Number</td>
                    <td style="border: none;">: </tdstyle=>
                    <td style="border: none;"><input class="form-control" type="phonenum" name="PhoneNum" value="<?php echo $row['PhoneNum']; ?>" required></td>
                  <tr>
                  <tr>
                    <td style="border: none;text-align: left;">Email</td>
                    <td style="border: none;">: </td>
                    <td style="border: none;"><input class="form-control" type="email" name="Email" value="<?php echo $row['Email']; ?>" readonly></td>
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
      <br>
      <div class="hero-subtitle">
      <a class="btn btn-info" href="receiver_changepass.php">Change Password</a>
      </div>
    </div>
    <?php include("../php/page_footer.php"); ?>             
