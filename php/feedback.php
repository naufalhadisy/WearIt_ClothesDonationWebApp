<?php
$identifier = 3;
error_reporting(0);
session_start();
include("../php/page_header.php");
include("../config.php");
if (isset($_POST['submit'])) {
    $name = $_POST['fullname'];
    $email1 = $_POST['email1'];
    $email2 = $_POST['email2'];
    $message = $_POST['message'];
    date_default_timezone_set('Asia/Jakarta');
    $date = date('Y/m/d H:i:s');
    $query = mysqli_query($con, "INSERT INTO feedback(toEmail, fromEmail, message, fullname, date) VALUE ('$email1','$email2','$message','$name', '$date')");
}
$sql = "SELECT * FROM feedback";
$result = mysqli_query($con, $sql);

if (isset($_POST['update'])) {
    $reply = $_POST['reply'];
    $id = $_POST['id'];
    $query = mysqli_query($con, "UPDATE feedback SET reply = '$reply' WHERE id = '$id'");
    header("Refresh:2");
}

?>



</div>


<section class="s5">
    <div class="main-container">
        <div class="content-wrapper-contact">
            <div class="hero-title-contact">
                <div class="hero-v2">
                    <h1>Give Your</h1>
                    <h1 style="font-size: 50px">Awesome Gratitude !</h1>
                </div>
            </div>

            <div class="hero-form">
                <form method="post" id="messageform">
                    <label for="email">To</label>
                    <input type="text" id="email" name="email1" placeholder="exampleTo@mail.com">

                    <label for="email">From</label>
                    <input type="text" id="email" name="email2" placeholder="exampleFrom@mail.com">

                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="fullname" placeholder="Put Your Name Here">

                    <label for="message">Feedback Message</label>
                    <textarea id="message" name="message" placeholder="Leave message here" style="height:100px"></textarea>

                    <input type="submit" name="submit" value="Submit" />
                </form>

                <br>
            </div>


        </div>

    </div>
</section>

<div class="main-container">
    <section class="s2">
        <h1>All Feedback</h1>
        <div class="form-group">
            <tbody>
                <?php

                while ($rows = mysqli_fetch_assoc($result)) {

                ?>
                    <div class="card mb-4">
                        <div class="card-header">
                            <?php
                            echo $rows["fullname"]
                            ?>
                        </div>
                        <div class="card-body">
                            <div class="media-body">
                                <blockquote>
                                    <p><?php echo $rows["message"] ?></p>
                                    <footer class="blockquote-footer"><?php echo $rows["date"] ?></footer>
                                </blockquote>
                            </div>
                            <hr>
                            <?php if ($rows["reply"] == NULL) { ?>
                                <div id='buttons' style="display: flex; width: 150px; justify-content: space-between;">
                                    <button id="show" type="button" class="btn btn-outline-secondary"><i class="fa fa-reply"></i> Reply</button>
                                    <button id='hide' type="button" class="btn btn-outline-secondary" style="display: none;">Close</button>
                                </div>
                                <form id='form' method="post" style="display: none;">
                                    <input type="hidden" name="id" value="<?php echo $rows["id"] ?>">
                                    <textarea id='message' name="reply"></textarea>
                                    <input type="submit" name="update" value="Submit" />
                                </form>
                            <?php } else {
                                echo $rows["reply"];
                            } ?>
                        </div>
                    </div>
                <?php
                }
                ?>

            </tbody>
        </div>
    </section>
</div>

</div>

<script>
    var show = document.getElementById('show');
    var hide = document.getElementById('hide');
    var form = document.getElementById('form');
    var send = document.getElementById('send');
    var textarea = document.getElementById('textarea');

    show.addEventListener('click', function() {
        form.style = ('display: block');
        textarea.style = ('animation: riseHeight 1s .1s normal forwards');
        hide.style = ('display: block');
        send.style = ('display: block');
        show.disabled = true;
    })

    hide.addEventListener('click', function() {
        form.style = ('display: none');
        hide.style = ('display: none');
        send.style = ('display: none');
        show.disabled = false;
    })
</script>




<?php include("page_footer.php"); ?>
