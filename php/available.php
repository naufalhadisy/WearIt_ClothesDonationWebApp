<?php
$identifier = 1;
include("../php/page_header.php");
include("../config.php");

?>


<div class="main-container">
    <section class="s2">
        <h1>Available</h1>
        
        <div class="card-columns">
        <?php
        $ret = mysqli_query($con, "select * from donation");
        $cnt = 1;
        $row = mysqli_num_rows($ret);

        if ($row > 0) {
            while ($row = mysqli_fetch_array($ret)) {

        ?>

                <div class="card text-center">
                    <img class="card-img-top" src="../img/<?php echo $row['picture']; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['donation']; ?></h5>
                        <p class="card-text"><?php echo $row['description']; ?></p>
                        <a href="../php/available_select.php?id=<?php echo $row['id']?>" class="btn btn-primary">Select</a>
                    </div>
                </div>
                <!--Fetch the Records -->

            <?php
                $cnt = $cnt + 1;
            }
        } else { ?>
            <tr>
                <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
            </tr>
        <?php } ?></div>
    
    </section>
</div>

</div>


<?php include("../php/page_footer.php"); ?>