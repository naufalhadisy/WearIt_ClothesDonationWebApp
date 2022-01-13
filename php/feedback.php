<?php
$identifier = 3;
error_reporting(0);
session_start();
include("../php/page_header.php");
include("../config.php");
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
                    <input type="text" id="email" name="email" placeholder="exampleTo@mail.com">

                    <label for="email">From</label>
                    <input type="text" id="email" name="email" placeholder="exampleFrom@mail.com">

                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="fullname" placeholder="Put Your Name Here">

                    <label for="message">Feedback Message</label>
                    <textarea id="message" name="message" placeholder="Leave message here" style="height:100px"></textarea>

                    <button name="submit" type="submit" id="btnsubmit" class="btn bg-violet text-light">Submit</button>
                </form>

                <br>
            </div>


        </div>

    </div>
</section>

<section class="s4">
    <div class="main-container">
        <div class="kain-container">
            <h1>All Feedback</h1>
        </div>

        <div class="card">
            <div class="card-header">
                Ammar Hawari
            </div>
            <div class="card-body">
                <blockquote>
                    <p>Donor is humble and responsive, thanks for the shirt, have a great day!</p>
                        <footer class="blockquote-footer">11/1/2022</footer>
                </blockquote>
                <hr>

                <div id='buttons' style="display: flex; width: 150px; justify-content: space-between;">
                    <button id="show" type="button" class="btn btn-primary rep">Reply</button>
                    <button id='hide' type="button" class="btn btn-primary rep" style="display: none;">Close</button>
                </div>
                <form id='form' style="display: none;">
                    <textarea id='textarea'></textarea>
                </form>
                <button type="submit" id="send" form = "form" class="btn btn-primary" style="display: none;">Submit</button>
            </div>
        </div>



    </div>
</section>

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
