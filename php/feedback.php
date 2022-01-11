
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

                    <label for="picture">Picture</label>
                    <div class="form-group">
                    <input type="file" class="form-control" name="picture" multiple required="true">
                    </div>

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
                    <blockquote class="blockquote mb-0">
                        <p>Donor is humble and responsive, thanks for the shirt, have a great day</p>
                        <footer class="blockquote-footer">11/1/2022 <cite title="Source Title">Reply</cite></footer>
                    </blockquote>
                </div>
            </div>

        

    </div>
</section>



<?php include("page_footer.php"); ?>