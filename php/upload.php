<?php
$identifier = 1;
include("page_header.php");


//database conection  file
include('dbconnection.php');
//Code for deletion

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Post</title>
</head>

<body>
    <section class="s2">

    <h1>Donation Post</h1>
        <div class="form-group">
            <tbody>
                <?php
                $ret = mysqli_query($con, "select * from donation");
                $cnt = 1;
                $row = mysqli_num_rows($ret);
                if ($row > 0) {
                    while ($row = mysqli_fetch_array($ret)) {

                ?>

                        <div class="card-body">
                            <ul class="w-100 list-group" id="topic-list">
                                <li class="list-group-item mb-4">
                                    <span class="">
                                        <a href="editpost.php" class="btn btn-warning btn-block btn-sm col-sm-2 float-right"><span>Edit Post</span></a>
                                    </span>
                                    <h2><?php echo $row['donation']; ?></h2>
                                    <hr>
                                    <img src="img/<?php echo $row['picture']; ?>" style="width:100%">
                                    <br>
                                    <?php echo $row['description']; ?><br>
                                    <p>Posted by-<?php echo $row['name']; ?></p>
                                    <p>Contact, <?php echo $row['email']; ?></p>
                                    <hr>
                                    <!--
                                        <span class="float-left badge badge-secondary text-white"> 10 view/s</span>
                                    -->
                                    
                                    <span class="float-left badge badge-dark text-white ml-2"><i class="fa fa-comments"></i> 3 comment/s </span>
                                    <span class="float-right">
                                        <span>Tags: </span>
                                        <span class="badge badge-info text-white ml-2">sample</span>
                        </div>
                        <!--Fetch the Records -->

                    <?php
                        $cnt = $cnt + 1;
                    }
                } else { ?>
                    <tr>
                        <th style="text-align:center; color:red;" colspan="6">No Record Found</th>

                    </tr>
                <?php } ?>


            </tbody>
        </div>
    </section>
</body>

</html>
<?php include("page_footer.php"); ?>  