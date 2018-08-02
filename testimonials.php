<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="img/favicon.ico" >
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Testimonial | what industrial experts, SMEs and large industries speak</title>
<meta name="description" content="A curated B2B marketplace that connects industries to professionals and expertise on an 'on demand' basis for industrial jobs, manufacturing consulting, advisory roles and part-time resource needs.">
<meta name="robots" content="index, follow">
<meta name="author" content="SolutionBuggy">
<link href="css/testimonial.css" rel="stylesheet" type="text/css" />
<?php include 'header2.php';?>
	<!-- ------------------------------------------------------------------------------- -->

	<!-- ------------------------------------------------------------------------------- -->
<?php include_once("analyticstracking.php") ?>

	<!-- Page Content -->
<div class="container">
			<div class="row">
				<div class="col-lg-12 ">
					<center>
						<h3 style="color:#de532b; font-weight:700;">
							<b> TESTIMONIALS</b>
						</h3>
					</center>
					<hr class="style18">
				</div>
			</div>
		</div>
		<div class="container content">
			<div class="col-lg-12 row">
			 
										 <?php 					  
										  include "daabase.php";
									 // just so we know it is broken
									 error_reporting(E_ALL);
								 {
										 //connect to the db
										 $link = mysqli_connect("$host", "$user", "$pass")
										 or die("Could not connect: " . mysql_error());

										 // select our database
										 mysqli_select_db($link,"buggy") or die(mysql_error());
										 $sql = "SELECT id, name, company, description, photo FROM testimonial ";
										 $sth=mysqli_query($link,$sql);
																	
																			
											
										}
								$numresults = mysqli_num_rows($sth);
								$divide = $numresults / 3;
								?>
								<div class="col-lg-4" >
								<?php 	
								for ($i = 0; $i < $divide; $i++)
								{
									$row = mysqli_fetch_array($sth, MYSQLI_ASSOC);
									$id  = $row['id'];
									$name = $row['name'];
									$company = $row['company'];
									$description = $row['description'];
									$image = base64_encode( $row['photo'] );
									?>
								        

			
            <div class="testimonials">
            	<div class="active item">
                  <div class="carousel-info">
                    <?php echo	'<img class="pull-left" height="150" alt="testimonial" src="data:image/jpeg;base64,'.$image.'"';?>
                    <div class="pull-left">
                      <span class="testimonials-name"><?php echo $name?></span>
                      <span class="testimonials-post"><?php echo $company?></span>
                    </div>
                  </div>
				 <blockquote><p><?php echo $description?></p></blockquote>
                </div>
				
								<?php } ?>
								</div>
								<div class="col-lg-4" >
								<?php 	
								$multiply = $divide * 2;
								for ($i = $divide; $i < $multiply; $i++)
								{
									$row = mysqli_fetch_array($sth, MYSQLI_ASSOC);
									$id  = $row['id'];
									$name = $row['name'];
									$company = $row['company'];
									$description = $row['description'];
									$image = base64_encode( $row['photo'] );
									?>
								        

			
            <div class="testimonials">
            	<div class="active item">
                  <div class="carousel-info">
                    <?php echo	'<img class="pull-left" height="150" alt="testimonial" src="data:image/jpeg;base64,'.$image.'"';?>
                    <div class="pull-left">
                      <span class="testimonials-name"><?php echo $name?></span>
                      <span class="testimonials-post"><?php echo $company?></span>
                    </div>
                  </div>
				 <blockquote><p><?php echo $description?></p></blockquote>
                </div>
				
								<?php } ?>
								</div>
								<div class="col-lg-4" >
								<?php 	
								for ($i = $multiply; $i < $numresults; $i++)
								{
									$row = mysqli_fetch_array($sth, MYSQLI_ASSOC);
									$id  = $row['id'];
									$name = $row['name'];
									$company = $row['company'];
									$description = $row['description'];
									$image = base64_encode( $row['photo'] );
									?>
								        

			
            <div class="testimonials">
            	<div class="active item">
                  <div class="carousel-info">
                    <?php echo	'<img class="pull-left" height="150" alt="testimonial" src="data:image/jpeg;base64,'.$image.'"';?>
                    <div class="pull-left">
                      <span class="testimonials-name"><?php echo $name?></span>
                      <span class="testimonials-post"><?php echo $company?></span>
                    </div>
                  </div>
				 <blockquote><p><?php echo $description?></p></blockquote>
                </div>
				
								<?php } ?>
								</div>
		
    </div>
</div><br><br><br><br><br><br>
               
	<?php include 'footer2.php';?>