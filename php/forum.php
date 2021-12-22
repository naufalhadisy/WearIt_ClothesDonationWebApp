<?php 
$identifier = 2;
include("page_header.php"); 
include('dbconnection.php');?>

<section class="s2">
<div class="container-fluid">
<style>
	input[type=checkbox]
{
  /* Double-sized Checkboxes */
  -ms-transform: scale(1.5); /* IE */
  -moz-transform: scale(1.5); /* FF */
  -webkit-transform: scale(1.5); /* Safari and Chrome */
  -o-transform: scale(1.5); /* Opera */
  transform: scale(1.5);
  padding: 10px;
}
.list-group-item +  .list-group-item {
    border-top-width: 1px !important;
}
</style>
	<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">
				
			</div>
		</div>
		<div class="row">
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<b>Thread List</b>
						
				<span class="">
							<a href="createthread.php" class="btn btn-primary btn-block btn-sm col-sm-2 float-right"><i class="fa fa-plus"></i> <span>Create Thread</span></a>
					</div>
					<?php
                $ret = mysqli_query($con, "select * from topics ");
                $cnt = 1;
                $row = mysqli_num_rows($ret);
                if ($row > 0) {
                    while ($row = mysqli_fetch_array($ret)) {

                ?>
					<div class="card-body">
						<ul class="w-100 list-group" id="topic-list">
						<li class="list-group-item mb-4">
						<h2><?php echo $row['title']; ?></h2>
							<hr>
							
							<a><?php echo $row['content']; ?></a>
							<img src="img/<?php echo $row['topicFile']; ?>" style="width:100%">
						 <a style="color: blue"; href="#">Read more...</a>
					
					<hr>		
					<p class="row justify-content-left"><span class="badge badge-success text-white"><i>  Posted By: <?php echo $row['postedby'];?> </i></span></p>
					<span><button type="button" class="btn btn-info"> <a href="editthread.php?id=<?php echo $row['id']; ?>">Edit</button></span></a>
								<hr>
									<span class="float-right">
									<span>Tags:  </span>
									<span class="badge badge-info text-white ml-2"><?php echo $row['category']; ?></span>
								</div>
								<?php
                        $cnt = $cnt + 1;
                    }
                } else { ?>
                    <tr>
                        <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
                    </tr>
                <?php } ?>
				</div>
				
				</div>
				
						
				
			</div>
		</div>
	</div>	

</div>
</section>
<?php include("page_footer.php"); ?>  