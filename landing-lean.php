
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="manifest" href="/manifest.json">
<link rel="shortcut icon" href="img/favicon.ico" >
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SolutionBuggy | Find Lean manufacturing consultants | process improvement consultants</title>
<meta name="description" content="SolutionBuggy -  Find Lean manufacturing, six sigma, process improvement consultants, engineering experts across all manufacturing sectors.">
<meta name="robots" content="index, follow">
<meta name="author" content="SolutionBuggy">
<meta property="og:image" content="https://www.solutionbuggy.com/img/connect.jpg" />
<?php
include 'header.php';
?>

<?php include_once("analyticstracking.php") ?>


		<!--Text Slider-->

		<div class="col-lg-6" style="min-height: 130px" id="banner-header">
		<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" style=" min-height: 110px;">
		
    <!-- Carousel items -->
    <div class="carousel-inner">
        <div class="active item"><p class="home-slide">Trusted by more than 50,000 industries and professionals</p></div>
        <div class="item"><p class="home-slide">You have a Project / Requirement - We have an expert best suited for it</p> </div>
        <div class="item"><p class="home-slide">No commission or hidden charges</p></div>
		<div class="item"><p class="home-slide">Rated best problem solving platform for manufacturing sector</p></div>
    </div>
    <!-- Carousel nav -->
	 <ol class="carousel-indicators" style="bottom:-30px">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
    <li data-target="#carousel" data-slide-to="3"></li>
  </ol>
</div>
		
		</div>
		
		<div class="themeimage"><center><img src="img/themeimage.png" style="width:90%" alt="SolutionBuggy"></center></div>
		<div class="col-lg-5 col-lg-offset-1 registerform" style="z-index:5">
		
		 <div class="col-lg-12" style=" padding: 0px;" >
	<b><p class="mobilehead" style="margin-bottom:0"> Register - To get started<br><span style="font-size: 18px;">Choose your category <i class="glyphicon glyphicon-arrow-down" style="color:#93e41c"></i></span></p></b>
	<div class="col-lg-12" >
				<div  class="col-lg-3 col-lg-offset-1 col-xs-4 registerselection" style=" padding:5px;">
				<img src="img/seeker-2.png" id="seekerbutton1" class="seekerbutton1" style="width:100%">
				</div>
				<div  class="col-lg-3 col-xs-4" style="padding:5px">
				<img src="img/provider-2.png" id="providerbutton1" class="providerbutton1" style="width:100%">
				</div>
				<div  class="col-lg-3 col-xs-4" style=" padding:5px">
				<img src="img/supplier-2.png" id="supplierbutton1" class="supplierbutton1" style="width:100%">
				</div>
				</div>
	  <form class="form-register" id="seekerregistration" action="https://www.solutionbuggy.com/buggy/register" method="post">
       <div class="text-shrink">

		<div class="row">
       		<div class="form-group col-lg-offset-2 col-lg-4 col-xs-6">
              <input type="text" name="firstname" autocomplete="off" maxlength="64" id="firstname"  placeholder="Name / Company*" class="form-control  form-control--contact" disabled>
            </div>
				<input type="hidden" name="customer_type" value="SS">
			<div class="form-group col-lg-4 col-xs-6">
              <input type="text" name="email" autocomplete="off" maxlength="64" id="email" required placeholder="Email Address*" class="form-control  form-control--contact" disabled>
            </div>
		</div>
		<div class="row">
			<div class="form-group col-lg-offset-2 col-lg-4 col-xs-6">
               <input type="tel" pattern="^\d{10}$" autocomplete="off" name="phone" id="phone" placeholder="Mobile-10 digits*" required class="form-control  form-control--contact" disabled>
            </div> 
			<div class="form-group col-lg-4 col-xs-6">
              <input type="password" name="password" autocomplete="off" maxlength="64" id="password" required value="" placeholder="Password*" class="form-control  form-control--contact" disabled>
            </div>
		</div>
		<div class="row">
			 
			<div class="form-group col-lg-offset-2 col-lg-8 col-xs-12">
              <textarea name="project" id="project" class="form-control  form-control--contact" rows="3" placeholder="Your project Requirement detail" disabled></textarea>
            </div> 
		</div>
		<div class="row">
			<div class="form-group col-lg-4 col-lg-offset-2 col-xs-6">
              <input type="text" name="refcode" id="refcode" autocomplete="off" placeholder="Referral Code (if any)" class="form-control  form-control--contact" disabled>
            </div> 
		
		
			 <div class="form-group col-lg-4 col-xs-6"style="text-align: center; margin-bottom:0">
			 <p style="color:#000; font-size: 14px;"><input type="checkbox" name="terms" checked="true" value="1" /> Accept terms and conditions <a  style="margin-left: 2%;"><small><a href="http://solutionbuggy.com/terms.php"target="_blank">View</a></small></a></p>
			 </div> 
			 </div>
            <div class="center col-lg-offset-2 col-lg-8 col-xs-12">
			<center>
            <button id="registerBtn" class="btn btn-dangerfill1 btn-danger1" style="width:120px" type="submit" name="send">Register</button>
		
			</center>
            </div>                                                                                          
       </div>
 	  </form>
	  <form class="form-register" id="providerregistration" action="https://www.solutionbuggy.com/buggy/register" method="post">
       <div class="text-shrink">

		<div class="row">
       		<div class="form-group col-lg-offset-2 col-lg-4 col-xs-6">
              <input type="text" name="firstname" autocomplete="off" maxlength="64" id="firstname" required placeholder="Name / Company*" class="form-control  form-control--contact">
            </div>
				<input type="hidden" name="customer_type" value="SP">
				<input type="hidden" name="project" value="">
			<div class="form-group col-lg-4 col-xs-6">
              <input type="text" name="email" maxlength="64" autocomplete="off" id="email" required placeholder="Email Address*" class="form-control  form-control--contact">
            </div>
		</div>
		<div class="row">
			<div class="form-group col-lg-offset-2 col-lg-4 col-xs-6">
              <input type="tel" pattern="^\d{10}$" name="phone" autocomplete="off" id="phone" placeholder="Mobile-10 digits*" required class="form-control  form-control--contact">
            </div> 
			<div class="form-group col-lg-4 col-xs-6">
              <input type="password" name="password" autocomplete="off" maxlength="64" required id="password" value="" placeholder="Password*" class="form-control  form-control--contact">
            </div>
		</div>
		<div class="row">
			<div class="form-group col-lg-4 col-lg-offset-2 col-xs-6">
              <input type="text" name="refcode" id="refcode" autocomplete="off" placeholder="Referral Code (if any)" class="form-control  form-control--contact">
            </div> 
		
		
			 <div class="form-group col-lg-4 col-xs-6"style="text-align: center; margin-bottom:0">
			 <p style="color:#000; font-size: 14px;"><input type="checkbox" name="terms" checked="true" value="1" /> Accept terms and conditions <a  style="margin-left: 2%;"><small><a href="http://solutionbuggy.com/terms.php"target="_blank">View</a></small></a></p>
			 </div> 
			 </div>
            <div class="center col-lg-offset-2 col-lg-8 col-xs-12">
			<center>
            <button id="registerBtn" class="btn btn-dangerfill1 btn-danger1" style="width:120px" type="submit" name="send">Register</button>
		
			</center>
            </div>                                                                                          
       </div>
 	  </form>
	   <form class="form-register" id="supplierregistration" action="https://www.solutionbuggy.com/buggy/register" method="post">
       <div class="text-shrink">

		<div class="row">
       		<div class="form-group col-lg-offset-2 col-lg-4 col-xs-6">
              <input type="text" name="firstname" autocomplete="off" maxlength="64" id="firstname" required placeholder="Name / Company*" class="form-control  form-control--contact">
            </div>
				<input type="hidden" name="customer_type" value="S">
				<input type="hidden" name="project" value="">
			<div class="form-group col-lg-4 col-xs-6">
              <input type="text" name="email" autocomplete="off" maxlength="64" id="email" required placeholder="Email Address*" class="form-control  form-control--contact">
            </div>
		</div>
		<div class="row">
			<div class="form-group col-lg-offset-2 col-lg-4 col-xs-6">
               <input type="tel" pattern="^\d{10}$" autocomplete="off" name="phone" id="phone" placeholder="Mobile-10 digits*" required class="form-control  form-control--contact">
            </div> 
			<div class="form-group col-lg-4 col-xs-6">
              <input type="password" name="password" autocomplete="off" maxlength="64" id="password" value="" placeholder="Password*" class="form-control  form-control--contact">
            </div>
		</div>
		<div class="row">
			<div class="form-group col-lg-4 col-lg-offset-2 col-xs-6">
              <input type="text" name="refcode" autocomplete="off" id="refcode" placeholder="Referral Code (if any)" class="form-control  form-control--contact">
            </div> 
		
		
			 <div class="form-group col-lg-4 col-xs-6"style="text-align: center; margin-bottom:0">
			 <p style="color:#000; font-size: 14px;"><input type="checkbox" name="terms" checked="true" value="1" /> Accept terms and conditions <a  style="margin-left: 2%;"><small><a href="http://solutionbuggy.com/terms.php"target="_blank">View</a></small></a></p>
			 </div> 
			 </div>
            <div class="center col-lg-offset-2 col-lg-8 col-xs-12">
			<center>
            <button id="registerBtn" class="btn btn-dangerfill1 btn-danger1" style="width:120px" type="submit" name="send">Register</button>
		
			</center>
            </div>                                                                                          
       </div>
 	  </form>
    </div>
	
		</div>
		
	
		<div class="mobileheight" >
		
		<div class="col-lg-7 gear" style="position:absolute; top:240px; margin-top: 30px;"><center> 
		<div style="position: absolute; left:150px; top:-32px; "><h2 style="color:#fff">CONNECT <img src="img/circle.png" alt="Connect">    INTERFACE <img src="img/circle.png" alt="Interface">  TEAMUP </h2></div>
		<div id="refresh" style="position: absolute; left:330px;top:28px;z-index: 1;" > </div></center> <div id="refresh1" style="position: absolute; left:241px; top:45px;"></div> <div id="refresh2" style="position: absolute; left:481px; top:45px; "> </div><div id="refresh3" style="position: absolute; left:356px; top:179px; "> </div><div style="position: absolute; left:275px; top:75px; "> <img src="img/seeker1.png" alt="Seeker"></div><div style="position: absolute; left:515px; top:75px; "> <img src="img/provider1.png" alt="Provider"></div><div style="position: absolute; left:390px; top:205px; "> <img src="img/supplier1.png" alt="Supplier"></div><div style="position: absolute; left:370px; top:85px; z-index:1 "> <img src="img/buggy.png" alt="SolutionBuggy"></div><div style="position: absolute; left:30px; top:130px; ">  <a href="forseekers.php">
					<h3 style="color:#de532b; font-weight:700; margin-bottom: 0;">
						SOLUTION SEEKER
					</h3>
						</a><p style="    font-size: medium;font-weight: 600; color:#b8bdcc;">* SME Sector<br>* Large Industries<br>* Professionals</p><button class="btn btn-danger btn-dangerfill">Get connected with<br>3000+ Experts</button></div>
						<div style="position: absolute; left:550px; top:130px; ">   <a href="forproviders.php">
					<h3 style="color: #2ea3ea; font-weight:700; margin-bottom: 0;"	>
						SOLUTION Provider
					</h3>
						</a><p style="    font-size: medium;font-weight: 600; color:#b8bdcc;">* Industrial Experts<br>* Consultants<br>* Domain specialists</p><button class="btn btn-danger1 btn-dangerfill1">Get new projects from<br>Industries</button></div>
						<div style="position: absolute; left:285px; top:288px; ">   <a href="forsuppliers.php">
					<h3 style="color:#00A65A;font-weight:700; margin-bottom: 0;">
						Supplier / Traders<br>
					</h3>
						</a><br><button class="btn btn-danger2 btn-dangerfill2">Sell Your Products</button></div>
						
						
						</div>
		
		
		</div>
		
		<!--End Of text Slider-->

		<!-- ____________________________ -->
		
		<br> <br>
	</header>
	<!-- _______________________________ -->
	<div class="container-fluid scrlr_wpr zero_padmo">
            <div class="container zero_padmo">
                <div class="blu_headr" style="color: cyan;">
                    NEWS
                </div>
                <div id="scrollerWrapper_new">
                    
                        <ul id="scroller_new">
                           <li>83 New Problem posted last week for different skills</li><li>75 problems/projects completed last week</li><li>More than 50,000 Solution Seekers registered from various Manufacturing Industries</li><li>More than 3,000 Solution Providers registered to give expert solutions</li><li>More than 7,000 Product Suppliers registered to showcase their products</li><li>SolutionBuggy is now active in more than 40 cities in India</li>                     </ul>
                    </div>
                
            </div>
        </div>
	 <a id="showHere"></a>
	<div class="row" style="background-color:#ccc">
		<div class="col-lg-12 " >
						<div class="col-lg-12" data-wow-delay="0.2s" >
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel" style="margin-top:0; padding:0">
                            <!-- Bottom Carousel Indicators -->
					

                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner text-center" style="min-height:160px">
							
                                <!-- Quote 1 -->
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
												<div  class="row">
																			<div class="col-lg-3 col-xs-3">
																				<img
																					style="border-radius: 50%; float: right;  font-style:"
																					src="img/sabarish.jpg"  alt="testimonial">
																			</div>
																			<div class="col-lg-9 col-xs-9">
																				<p
																					class="testimonialmob">We were facing a challenging problem to prove out a component in cold forging process. I am really thankful to SolutionBuggy as i got an immediate response from an expert from Pune. </p>
																					<div class="rating" style="color: #e67e22;">
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star half"></i>
																					</div>
																				<small style="color:#337ab7;">
																					<i>Sabarish Murali<br>Solution Seeker, Vishnu pressings</i>
																				</small>
																			</div>
                                            </div>
											
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 2 -->
 
                                <div class="item">
                                    <blockquote>
                                       <div class="row">
												<div  class="row">
																			<div class="col-lg-3 col-xs-3">
																				<img
																					style="border-radius: 50%; float: right;  font-style:"
																					src="img/krishna.jpg"  alt="testimonial">
																			</div>
																			<div  class="col-lg-9 col-xs-9">
																				<p
																					class="testimonialmob">SolutionBuggy, the best solutions provider for the Foundry Industry and automotive Industry . They can be dependable partner for your business Growth</p>
																					<div class="rating" style="color: #e67e22;">
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					</div>
																				<small style="color:#337ab7;">
																					<i>Krishna Parihar<br>Associate Vice President at International Tractors Ltd.</i>
																				</small>
																			</div>
                                            </div><br>
											
                                        </div>
                                    </blockquote>
                                </div>
								<!-- Quote 2.5 -->
								<div class="item">
                                    <blockquote>
                                       <div class="row">
												<div class="row">
																			<div class="col-lg-3 col-xs-3">
																				<img
																					style="border-radius: 50%; float: right;  font-style:"
																					src="img/no-image.jpg"  alt="testimonial">
																			</div>
																			<div  class="col-lg-9 col-xs-9">
																				<p
																					class="testimonialmob">We had requirement for Low cost industrial automation for our part counting project. SolutionBuggy helped in getting immediate response from experts / consultants </p>
																					<div class="rating" style="color: #e67e22;">
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					  
																					</div>
																				<small style="color:#337ab7;">
																					<i>Mahesh Pandey<br>Director, SQ Industries</i>
																				</small>
																			</div>
                                            </div><br>
											
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 3 -->
								
								 <div class="item">
                                    <blockquote>
                                       <div class="row">
												<div  class="row">
																			<div class="col-lg-3 col-xs-3">
																				<img
																					style="border-radius: 50%; float: right;  font-style:"
																					src="img/sudhir.jpg"  alt="testimonial">
																			</div>
																			<div  class="col-lg-9 col-xs-9">
																				<p
																					class="testimonialmob">I am a platinum member and have already started benefiting from this association with Solution Buggy. Highly recommended for Industry seeking good engineering consultants</p>
																					<div class="rating" style="color: #e67e22;">
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star half"></i>
																					</div>
																				<small style="color:#337ab7;">
																					<i>Sudhir Patankar<br>Managing Director</i>
																				</small>
																			</div>
                                            </div><br>
											
                                        </div>
                                    </blockquote>
                                </div>
								
								 <div class="item">
                                    <blockquote>
                                       <div class="row">
												<div tyle="padding: 1%;" class="row">
																			<div class="col-lg-3 col-xs-3">
																				<img
																					style="border-radius: 50%; float: right;  font-style:"
																					src="img/sunil.jpg"  alt="testimonial">
																			</div>
																			<div  class="col-lg-9 col-xs-9">
																				<p
																					class="testimonialmob">SolutionBuggy is right platform to share the knowledge gained during years of working and also learn new ideas and technologies</p>
																					<div class="rating" style="color: #e67e22;">
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					</div>
																				<small style="color:#337ab7;">
																					<i>Sunil Chaphalkar<br>Consultant</i>
																				</small>
																			</div>
                                            </div><br>
											
                                        </div>
                                    </blockquote>
                                </div>
								<div class="item">
                                    <blockquote>
                                       <div class="row">
												<div class="row">
																			<div class="col-lg-3 col-xs-3">
																				<img
																					style="border-radius: 50%; float: right;  font-style:"
																					src="img/no-image.jpg"  alt="testimonial">
																			</div>
																			<div  class="col-lg-9 col-xs-9">
																				<p
																					class="testimonialmob">I thank SolutionBuggy for helping me in getting a Business Development expertise to upgrade my facility and increase the orders. </p>
																					<div class="rating" style="color: #e67e22;">
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star half"></i>
																					</div>
																				<small style="color:#337ab7;">
																					<i>Rajshekar<br>DGM, Seakon Industries</i>
																				</small>
																			</div>
                                            </div><br>
											
                                        </div>
                                    </blockquote>
                                </div>
								
								 <div class="item">
                                    <blockquote>
                                       <div class="row">
												<div  class="row">
																			<div class="col-lg-3 col-xs-3">
																				<img
																					style="border-radius: 50%; float: right;  font-style:"
																					src="img/wilson.jpg"  alt="testimonial">
																			</div>
																			<div  class="col-lg-9 col-xs-9">
																				<p
																					class="testimonialmob">Great Idea. The insiders are usually blind to new solutions. We insiders are blind folded due to pressing transactional issues. An independent expert body like SolutionBuggy (SB) can add real time value .</p>
																					<div class="rating" style="color: #e67e22;">
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					</div>
																				<small style="color:#337ab7;">
																					<i>Wilson Maria Doss<br>President-Corporate Human Resources at Himatsingka Seide Ltd</i>
																				</small>
																			</div>
                                            </div><br>
											
                                        </div>
                                    </blockquote>
                                </div>
								
								 <div class="item">
                                    <blockquote>
                                       <div class="row">
												<div class="row">
																			<div class="col-lg-3 col-xs-3">
																				<img
																					style="border-radius: 50%; float: right;  font-style:"
																					src="img/raghu.jpg"  alt="testimonial">
																			</div>
																			<div  class="col-lg-9 col-xs-9">
																				<p
																					class="testimonialmob">SolutionBuggy is a perfect platform for industry experts to interact and support the industry to make them more competitive and profitable. I firmly believe that industry should take support of this platform</p>
																					<div class="rating" style="color: #e67e22;">
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					  <i class="glyphicon glyphicon-star"></i>
																					</div>
																				<small style="color:#337ab7;">
																					<i>Raghavendra Bettadapura<br>FreeLance consultant</i>
																				</small>
																			</div>
                                            </div><br>
											
                                        </div>
                                    </blockquote>
                                </div>
								
                            </div>

                            <!-- Carousel Buttons Next/Prev -->
							<a data-slide="next" href="#quote-carousel" class="right carousel-control" style="margin-top:50px;"><i class="fa fa-chevron-right" style="color:#000"></i></a>
                        </div>
                    </div>
				<div class="compnav">	
				<a href="https://www.solutionbuggy.com/testimonials.php">
					<button class="btn btn-danger btn-dangerfill pullright"
						style="width: 75px; font-size: 16px;
    text-transform: capitalize;    position: absolute;    right: 5%;    bottom: -10px;">
						More >>
					</button><br>
                   </a>	</div>
				  <div class="mobnav">	
				<a href="https://www.solutionbuggy.com/testimonials.php">
					<button class="btn btn-danger btn-dangerfill pullright"
						style="width: 68px; font-size: 14px;
    text-transform: capitalize;    position: absolute;        left: 30px;    bottom: 10px;">
						More >> 
					</button><br>
                   </a>	</div>
		</div>
		</div>
	<!-- _________________________________ -->

	<!--WHY-->
	<header style="padding: 2%;">
        <div class="container">
		<div class="col-lg-4">
		<center>
                        <h3 style="color:#de532b; font-weight:700;">
                           About Us
                        </h3>
                    </center>
					 <hr class="style18" style="width:50%; height:0px">
				<p style="   font-size: 16px; text-align:justify; margin-top:0px">SolutionBuggy is an exclusive and dedicated platform for the Manufacturing Sector in India. 
                It seamlessly bridges the gap between the industrial sector and professionals for on-demand consultation and 
                services including projects. It connects MSMEs and Large Scaled Industries with Industrial Consultants/ Experts 
                and Industrial Product Suppliers over the internet for collaboration and success.<br><a href="about.php"style="color:#de532b">Know more >></a></p>
				
		
		<div class="row">
          <center>
			<div class="col-lg-2 col-xs-6">
				<a href="whysolutionbuggy.php">
					<button class="btn btn-danger btn-dangerfill"
						style="width: 150px; font-size: 13px;
    text-transform: capitalize;">
						Why SolutionBuggy 
					</button><br>
                   </a>
             </div>
        </center>
            <center>
			<div class="col-lg-4 col-xs-6 col-lg-offset-4">
				<a href="needforsolutionbuggy.php">
					<button
						class="btn btn-danger btn-dangerfill"
						style="width: 160px; font-size: 13px;
    text-transform: capitalize;">
						Need for SolutionBuggy 
					</button><br><br><br>
				</a>
			</div>
            </center>
		</div>
		</div>
					<div class="col-lg-8">
					<center>
                        <h3 style="color:#de532b; font-weight:700;">
                            HOW IT WORKS
                        </h3>
                    </center>
                    <hr class="style18" style="width:50%; margin-bottom:0px">
					<div class="col-lg-12 col-xs-5" style="padding:5px; text-align:center">
					<img class="compnav" src="img/hiw.gif" alt="How it works" width="80%" height="auto"> 
					<img class="mobnav" src="img/hiw-mob.gif" alt="How it works" width="100%" height="auto"> 
					</div>
					<div class="col-lg-12  col-xs-7" >
					<div class="row">
					<div class="col-lg-4" style="margin-bottom:25px">
					<center><span class="mobilehead" style="color: #2b5dde;">Post Project</span><br>Register and post your Industrial projects / problems / concerns.</center>
					</div>
					<div class="col-lg-4" style="margin-bottom:25px">
					<center><span class="mobilehead" style="color: #2b5dde;">Discuss Online</span><br>Discuss with multiple Consultants / Experts applied to your project</center>
					</div>
					<div class="col-lg-4" style="margin-bottom:25px"><center><span class="mobilehead" style="color: #2b5dde;">Hire & Execute</span><br>Select the most suitable Consultant / expert for your requirement</center>
					</div>
					</div>
					
					</div>
									<div class="col-lg-12">
											<div class="col-lg-6 compnav" style="position:absolute;left:80%; top:-250px">
										<center>
											<a href="#myModalvideo" data-toggle="modal" >
												<button
													class="btn btn-danger btn-dangerfill"
													style="width: 150px;">
													<b>Play Video</b><img alt="select" src="img/select.png">
												</button>
											</a>
											</center>
											</div>
											<div class="col-lg-12 mobnav">
										<center>
											<a href="#myModalvideo" data-toggle="modal" >
												<button
													class="btn btn-danger btn-dangerfill"
													style="width: 150px;">
													<b>Play Video</b><img alt="select" src="img/select.png">
												</button>
											</a>
											</center>
											</div>
											</div>
					</div>

										</div>
		
	</header>
	<!--End of why-->
	
	<header style="padding: 2%; background-color: #f6fcff">
		<br>
		<div class="container buttontop" >
			<div class="row">
				<div class="col-lg-12 ">
					<center>
						<h3 style="color:#de532b; font-weight:700;  margin: 0;">
							BENEFITS
						</h3>
					</center>
					<hr class="style18" style="width:30%; margin-bottom:0px">
				</div>
				
				<br>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
			
				<ul class="nav nav-carousel nav-justified">
				  <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#" style="padding:3px"><button  class="btn-dangerfill bg-danger btn"> SOLUTION SEEKERS </button></a></li>
				  <li data-target="#myCarousel" data-slide-to="1"><a href="#" style="padding:3px"><button  class="btn-dangerfill1 btn-danger1 btn" >
										SOLUTION PROVIDERS </button></a></li>
				  <li data-target="#myCarousel" data-slide-to="2"><a href="#" style="padding:3px"><button  class="btn-dangerfill2 btn-danger2 btn" >
										PRODUCT SUPPLIERS </button></a></li>
				</ul>
				
				
				
							
							
							  <!-- Wrapper for slides -->
							  <div class="carousel-inner">
							  
								<div class="item active">
									<div style="background-color: #F0EBEB; padding:10px" >
										<div class="row" style="margin-top: 2px;">
										<div class="col-lg-4 col-xs-6">
										<div class=" text-center">
													
                                                    <div class="panel-heading">
														<img src="img/scheme.png" style="width:auto" alt="Automobile">
													</div>
													<div class="panel-body" >
														<p class="benefits-slide">Connect with 3000+ experts</p>
													</div>
										</div>
										</div>
										<div class="col-lg-4 col-xs-6">
										<div class=" text-center">
													
                                                    <div class="panel-heading">
														<img src="img/select-object - Copy.png" style="width:auto" alt="Automobile">
													</div>
													<div class="panel-body" >
														<p class="benefits-slide">Get solutions for all your requirements</p>
													</div>
										</div>
										</div>
										<div class="col-lg-4 col-xs-6">
										<div class=" text-center">
													
                                                    <div class="panel-heading">
														<img src="img/dollar.png" style="width:auto" alt="Automobile">
													</div>
													<div class="panel-body" >
														<p class="benefits-slide">Reduce cost and improve business </p>
													</div>
										</div>
										</div>
									
										<div class="col-lg-4 col-xs-6">
										<div class=" text-center">
													
                                                    <div class="panel-heading">
														<img src="img/stopwatch.png" style="width:auto" alt="Automobile">
													</div>
													<div class="panel-body" >
														<p class="benefits-slide">Confidentiality and quick response for your project</p>
													</div>
										</div>
										</div>
										<div class="col-lg-4 col-xs-6">
										<div class=" text-center">
													
                                                    <div class="panel-heading">
														<img src="img/hidden.png" style="width:auto" alt="Automobile">
													</div>
													<div class="panel-body" >
														<p class="benefits-slide">No commission or hidden charges</p>
													</div>
										</div>
										</div>
										<div class="col-lg-4 col-xs-6">
										<div class=" text-center">
													
                                                    <div class="panel-heading">
														<img src="img/install.png" style="width:auto" alt="Automobile">
													</div>
													<div class="panel-body" >
														<p class="benefits-slide">Find industrial products under one roof</p>
													</div>
										</div>
										</div>
								
									</div>
															

										<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->

									</div>
                                    
									
								</div>

								<!-- ------------------------------------------------------------------------------- -->
								<!-- ---------------------------Solution Provider----------------------- -->

								<div class="item">

									<div style="background-color: #D5E9FB; padding:10px">
										<div class="row" style="margin-top: 2px;">
										<div class="col-lg-4 col-xs-6">
										<div class=" text-center">
													
                                                    <div class="panel-heading">
														<img src="img/businessman (2).png" style="width:auto" alt="Automobile">
													</div>
													<div class="panel-body">
														<p class="benefits-slide">Get projects for your expertise</p>
													</div>
										</div>
										</div>
										<div class="col-lg-4 col-xs-6">
										<div class=" text-center">
													
                                                    <div class="panel-heading">
														<img src="img/viral-marketing.png" style="width:auto" alt="Automobile">
													</div>
													<div class="panel-body">
														<p class="benefits-slide">Earn at your own terms - More than 50,000 industries</p>
													</div>
										</div>
										</div>
										<div class="col-lg-4 col-xs-6">
										<div class=" text-center">
													
                                                    <div class="panel-heading">
														<img src="img/hidden.png" style="width:auto" alt="Automobile">
													</div>
													<div class="panel-body">
														<p class="benefits-slide">No commission / hidden charges for your service offered</p>
													</div>
										</div>
										</div>
										<div class="col-lg-4 col-xs-6">
										<div class=" text-center">
													
                                                    <div class="panel-heading">
														<img src="img/talk-of-a-couple-of-businessmen-standing-with-suitcases.png" style="width:auto" alt="Automobile">
													</div>
													<div class="panel-body">
														<p class="benefits-slide">Ready marketplace to showcase your expertise</p>
													</div>
										</div>
										</div>
										<div class="col-lg-4 col-xs-6">
										<div class=" text-center">
													
                                                    <div class="panel-heading">
														<img src="img/scheme (2).png" style="width:auto" alt="Automobile">
													</div>
													<div class="panel-body">
														<p class="benefits-slide">Wider reach</p>
													</div>
										</div>
										</div>
										<div class="col-lg-4 col-xs-6">
										<div class=" text-center">
													
                                                    <div class="panel-heading">
														<img src="img/user.png" style="width:auto" alt="Automobile">
													</div>
													<div class="panel-body">
														<p class="benefits-slide">Encash your talent</p>
													</div>
										</div>
										</div>
									
									</div>
									

										<!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
									</div>
									
                                    
                                </div>

								<!-- ------------------------------------------------------------------------------- -->
								<!-- -------------------------------SUPPLIER-------------------------------- -->
								<div class="item">
									<div style="background-color: #F2FBF2; padding:10px">
									<div class="row" style="margin-top: 2px;">
										<div class="col-lg-4 col-xs-6">
										<div class=" text-center">
													
                                                    <div class="panel-heading">
														<img src="img/application-ad.png" style="width:auto" alt="Automobile">
													</div>
													<div class="panel-body">
														<p class="benefits-slide">Advertise your products to targeted audience</p>
													</div>
										</div>
										</div>
										<div class="col-lg-4 col-xs-6">
										<div class=" text-center">
													
                                                    <div class="panel-heading">
														<img src="img/megaphone.png" style="width:auto" alt="Automobile">
													</div>
													<div class="panel-body">
														<p class="benefits-slide">Micro website with SEO / Digital marketing </p>
													</div>
										</div>
										</div>
										<div class="col-lg-4 col-xs-6">
										<div class=" text-center">
													
                                                    <div class="panel-heading">
														<img src="img/dollar.png" style="width:auto" alt="Automobile">
													</div>
													<div class="panel-body">
														<p class="benefits-slide">Increased revenue through branding</p>
													</div>
										</div>
										</div>


										<div class="col-lg-4 col-xs-6">
										<div class=" text-center">
													
                                                    <div class="panel-heading">
														<img src="img/leader-of-a-group-with-an-empty-speech-bubble.png" style="width:auto" alt="Automobile">
													</div>
													<div class="panel-body">
														<p class="benefits-slide">Get referred by consultants / experts to increase business</p>
													</div>
										</div>
										</div>
										<div class="col-lg-4 col-xs-6">
										<div class=" text-center">
													
                                                    <div class="panel-heading">
														<img src="img/hidden.png" style="width:auto" alt="Automobile">
													</div>
													<div class="panel-body">
														<p class="benefits-slide">No commission / hidden charges </p>
													</div>
										</div>
										</div>
										<div class="col-lg-4 col-xs-6">
										<div class=" text-center">
													
                                                    <div class="panel-heading">
														<img src="img/scheme (2).png" style="width:auto" alt="Automobile">
													</div>
													<div class="panel-body">
														<p class="benefits-slide">Wider reach</p>
													</div>
										</div>
										</div>

									</div>
									</div>
									</div>
									</div>
									</div><br>
				<div class="row">

					<div class="col-lg-12">
                    <center>
						<a href="benifits.php">
							<button
								class="btn btn-danger  btn-dangerfill"
								style="width:150px;">
								<b>MORE</b><img alt="select" src="img/select.png">
							</button>
						</a>
                        </center>
					</div>
				</div>

			</div>
		</div>
    	<!-- __________________________ -->

	</header>
	
	<header style="padding: 2%;">
  
		<div class="container " 
			id="news">
			<div class="row">
				<div class="col-lg-12 col-xs-12">
					<center>
						<h3 style="color:#de532b; font-weight:700;">Experts Insight - 3000+ registered and counting</h3>
					</center>
					<hr class="style18 "style="width:45%">




					<div class="row ">
						<div class="col-lg-12">

							
										<div class="row">

											<div class="col-lg-6  col-xs-12">
											<center>
											<h4> Expert Skills </h4>
											 <div id="pie-chart10" style="width: auto; height: 300px;"></div>
											</center>	
											</div>
											<div class="col-lg-6  col-xs-12">
											<center>
											<h4> Expert Industries </h4>
											<div id="pie-chart" style="width: auto; height: 300px;"></div>
											</center>
											</div>
										</div>
										<br>
										<div class="row">

										<div class="col-lg-12">
										<center>
											<a href="members.php">
												<button
													class="btn btn-danger btn-dangerfill"
													style="width: 150px;">
													<b>MORE</b><img alt="select" src="img/select.png">
												</button>
											</a>
											</center>
											</div>
										</div>
										<!--/row-fluid-->
									</div>
					</div>

				</div>
				
			</div>
		</div>
	</header>
	<!-- _______________________________ -->
	
	<header style="padding: 2%; background-color: #e2ecf1;">
	<div class="container" id="pricing">
		<div class="row compnav">
			<center>
				<h3 style="color:#de532b; font-weight:700;">PRICING</h3>
			</center>
			<hr class="style18"style="width:35%">
			
			<div class="col-lg-4">
			<center>
			<button  class="btn-dangerfill bg-danger btn"> SOLUTION SEEKERS </button>
			<p>Starts from <br><span style="font-size:32px">₹ 5000</span><br>
			per year</p>
			</center>
			</div>
			<div class="col-lg-4">
			<center>
			<button  class="btn-dangerfill1 btn-danger1 btn" >	SOLUTION PROVIDERS </button>
			<p>Starts from <br><span style="font-size:32px">₹ 5000</span><br>
			per year</p>
			</center>
			</div>
			<div class="col-lg-4">
			<center>
			<button  class="btn-dangerfill2 btn-danger2 btn" >PRODUCT SUPPLIERS </button>
			<p> <br><span style="font-size:32px">₹ 8000</span><br>
			per year</p><br><br>
			</center>
			</div>
			<div class="row">

					<div class="col-lg-12">
                    <center>
						<a href="pricing.php">
							<button
								class="btn btn-danger  btn-dangerfill"
								style="width:150px;">
								<b>MORE</b><img alt="select" src="img/select.png">
							</button>
						</a>
                        </center>
					</div>
				</div>
			<center>
				<h4 style="color:#de532b; font-weight:700;">Payments powered by</h4>
				<hr style=" border-top: 2px solid #2b5dde;">
				<img src="img/payment.png" alt="PayU"width="80%" >
			</center>	
			</div>
			<div class="row mobnav">
			<center>
				<h3 style="color:#de532b; font-weight:700;">PRICING</h3>
			</center>
			<hr class="style18"style="width:35%">
			
			<div class="col-lg-4 col-xs-4" style="padding:2px">
			<center>
			<button  class="btn-dangerfill bg-danger btn" style="font-size: 16px;"> SOLUTION<br>SEEKER </button>
			<p>Starts from <br><span style="font-size:32px">₹ 5000</span><br>
			per year</p>
			</center>
			</div>
			<div class="col-lg-4 col-xs-4"style="padding:2px">
			<center>
			<button  class="btn-dangerfill1 btn-danger1 btn" style="font-size: 16px;">	SOLUTION<br>PROVIDER </button>
			<p>Starts from <br><span style="font-size:32px">₹ 5000</span><br>
			per year</p>
			</center>
			</div>
			<div class="col-lg-4 col-xs-4"style="padding:2px">
			<center>
			<button  class="btn-dangerfill2 btn-danger2 btn" style="font-size: 16px;">PRODUCT<br>SUPPLIER </button>
			<p> <br><span style="font-size:32px">₹ 8000</span><br>
			per year</p><br><br>
			</center>
			</div>
			<div class="row">

					<div class="col-lg-12">
                    <center>
						<a href="pricing.php">
							<button
								class="btn btn-danger  btn-dangerfill"
								style="width:150px;">
								<b>MORE</b><img alt="select" src="img/select.png">
							</button>
						</a>
                        </center>
					</div>
				</div>
			<center>
				<h4 style="color:#de532b; font-weight:700;">Payments powered by</h4>
				<hr style=" border-top: 2px solid #2b5dde;">
				<img src="img/payment.png" alt="PayU"width="80%" >
			</center>	
			</div>
			</div>




				<div id="boxes" >

 <div id="dialog" class="window" style="background: #fee1c3; position:fixed" >
	<div > <a href="#" class="close agree" style="color:red; opacity:100; font-size:30px; padding:10px">X</a> </div>
   <div> <a href="offer.php" target="_blank"><img src="img/ganesha.png" style="width:100%; max-width:700px"></a> </div>

    <div id="popupfoot"> <a href="#" class="close agree" style="color:red; opacity:100; padding:10px; float:left">Close</a> </div>
	
  </div>
 

  <div id="mask"></div>

</div>

		

	</header>
	
<?php 
include 'footer2.php';
?>
<script>
$(document).ready(function(){
		$("#providerregistration").css("display", "none");
		$("#supplierregistration").css("display", "none");
		
    $("#seekerbutton1").click(function(){
		$("#providerregistration").css("display", "none");
		$("#supplierregistration").css("display", "none");
		$("#seekerregistration").fadeIn("slow");
		$('.seekerbutton1').addClass('active');
		$('.providerbutton1').removeClass('active');
		$('.supplierbutton1').removeClass('active');
		$('.form-control--contact').prop("disabled", false);
    });
	$("#providerbutton1").click(function(){
		$("#seekerregistration").css("display", "none");
		$("#supplierregistration").css("display", "none");
		$("#providerregistration").fadeIn("slow");
		$('.providerbutton1').addClass('active');
		$('.seekerbutton1').removeClass('active');
		$('.supplierbutton1').removeClass('active');
    });
	$("#supplierbutton1").click(function(){
		$("#seekerregistration").css("display", "none");
		$("#providerregistration").css("display", "none");
		$("#supplierregistration").fadeIn("slow");
		$('.supplierbutton1').addClass('active');
		$('.seekerbutton1').removeClass('active');
		$('.providerbutton1').removeClass('active');
    });
});
</script>
<script type="text/javascript">
//function showIt1() {
//document.getElementById("boxes").style.visibility = "visible";
//}
//setTimeout("showIt1()",10000);
</script>
<script>

        // Set options
        var options = {
            offset: '#showHere',
            offsetSide: 'top',
            classes: {
                clone:   'banner--clone',
                stick:   'banner--stick',
                unstick: 'banner--unstick'
            }
        };

        // Initialise with options
        var banner = new Headhesive('.banner', options);
		setTimeout("dialog",10000);
        // Headhesive destroy
        // banner.destroy();
   </script>
<script>
function showIt() {	

var id = '#dialog';
	
//Get the screen height and width
var maskHeight = $(document).height();
var maskWidth = $(window).width();
	
//Set heigth and width to mask to fill up the whole screen
$('#mask').css({'width':maskWidth,'height':maskHeight});

//transition effect
$('#mask').fadeIn(500);	
$('#mask').fadeTo("slow",0.9);	
	
//Get the window height and width
var winH = $(window).height();
var winW = $(window).width();
              
//Set the popup window to center
$(id).css('top',  winH/2-$(id).height()/2);
$(id).css('left', winW/2-$(id).width()/2);
	
//transition effect
$(id).fadeIn(2000); 	
	
//if close button is clicked
$('.window .close').click(function (e) {
//Cancel the link behavior
e.preventDefault();

$('#mask').hide();
$('.window').hide();
});

//if mask is clicked
$('#mask').click(function () {
$(this).hide();
$('.window').hide();
});
	
}
setTimeout("showIt()",10000);
//function showIt() {
//document.getElementById("hid").style.display = "block";
//}
//setTimeout("showIt()",10000);
</script>
<script>
$(document).on('click','.navbar-collapse.in',function(e) {

    if( $(e.target).is('a') && ( $(e.target).attr('class') != 'dropdown-toggle' ) ) {
        $(this).collapse('hide');
    }

});
</script>
<script>
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap" style="color:#de532b; font-weight: 700">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 10; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
	</script>
<script type="text/javascript">
$(document).ready(function(){
    var speed = 5;
    var items, scroller = $('#scroller_new');
    var width = 0;
    scroller.children().each(function(){
        width += $(this).outerWidth(true);
    });
    scroller.css('width', width);
    scroll();
    function scroll(){
        items = scroller.children();
        var scrollWidth = items.eq(0).outerWidth();
        scroller.animate({'left' : 0 - scrollWidth}, scrollWidth * 100 / speed, 'linear', changeFirst);
    }
    function changeFirst(){
        scroller.append(items.eq(0).remove()).css('left', 0);
        scroll();
    }
});
</script>
<script type="text/javascript">
//function showIt() {
//document.getElementById("hid").style.display = "block";
//}
//setTimeout("showIt()",10000);
</script>
<script>

$(".tbtn1").click(function(){$('.themeControll1').toggleClass('active')})

google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawCharts);

function drawCharts() {
  
  // BEGIN PIE CHART
  
  // pie chart data
   var pieData = google.visualization.arrayToDataTable([
    ['Industry', 'Nos'],
    ['Aerospace',      365],
    ['Aluminium manufacturing',   65],
    ['Industrial Automation',   195],
    ['Automotive',    465],
    ['Biotechnology',  26],
	 ['Defence and Space',  65],
	 ['Earth Movers',  89],
	 ['Electrical/Electronics manufacturing',  156],
	 ['Energy',  105],
	 ['Machinery and Machine tools',  289],
	 ['Mechanical or Industrial Engineering',  469],
	 ['Jewellery',  165],
	 ['Mining',  165],
	 ['Oil and Gas',  77],
	 ['Plastics',  56],
	 ['Railways',  82],
	 ['Robotics',  102],
	 ['Steel Manufacturing',  156],
	 ['Tools, Dies and Moulds',  269],
	 ['Tyre',  26],
	 ['Many more',  542]
  ]);
  
  var pieData10 = google.visualization.arrayToDataTable([
    ['Skills', 'Nos', {type: 'string', role: 'tooltip', p:{html:true}}],
    ['Production',   1236, '<div class="panel"><b style="font-weight: 700;" > <div class="panel-heading" style="background-color:#666"><h4 style="color:#fff">Production</h4></div>Planning<br>Scheduling<br>Automation<br>Metallurgy<br>Forging<br>Foundry<br>Forming<br>TPS<br></b></div>'],
    ['Quality',   1851, '<div class="panel"><b style="font-weight: 700;" ><div class="panel-heading" style="background-color:#666"><h4 style="color:#fff">Quality</h4></div> TQM<br>Quality Management Services <br>JISHU HOZEN (7 Steps)<br>ISO 14001 EMS<br>ISO9001 / TS 16949 QMS<br>OHSAS 18001<br>QMS-Ford<br>QMS-Nissan-APQNP<br>QMS-M&M<br>QMS-VW<br></b></div>'],
    ['Maintenance',   1025, '<div class="panel" ><b style="font-weight: 700;" > <div class="panel-heading" style="background-color:#666"><h4 style="color:#fff">Maintenance</h4></div>Spare Inventory Management<br>Men/Machine efficiency <br>OEE-Overall Equipment Effectiveness measurements<br>TPM-Total Productive Maintenance<br></b></div>'],
    ['Improvement',    586, '<div class="panel"><b style="font-weight: 700;" ><div class="panel-heading" style="background-color:#666"><h4 style="color:#fff">Improvement</h4></div>Training<br>KAIZEN <br>R&D<br></b></div>'],
    ['Engineering',  897, '<div class="panel"><b style="font-weight: 700;" ><div class="panel-heading" style="background-color:#666"><h4 style="color:#fff">Engineering</h4></div> Facility<br>Inventory management<br>Visual control of Engineering<br>SHE-Safety Health and Environment<br>Green Energy Solutions<br>Product Development<br>Operations Management<br></b></div>'],
	 ['HR',  987, '<div class="panel"><b style="font-weight: 700;" ><div class="panel-heading" style="background-color:#666"><h4 style="color:#fff">HR</h4></div> Multi-skilling<br>Training and Recruitment<br>Organisation Restructuring<br>Recruitment<br>Payroll services<br>HR projects<br>Man power consulting<br>OD-Organization development<br>SMT-Self Management Team<br>Strategic HR and change management<br></b></div>'],
	 ['Green Field and Brown field projects',  615, '<div class="panel"><b style="font-weight: 700;" ><div class="panel-heading" style="background-color:#666"><h4 style="color:#fff">Green Field and Brown field projects</h4></div> </b></div>'],
	 ['Machines & Tooling',  756, '<div class="panel"><b style="font-weight: 700;" ><div class="panel-heading" style="background-color:#666"><h4 style="color:#fff">Machines & Tooling</h4></div> </b></div>'],
	 ['Cost reduction Program',  1532, '<div class="panel"><b style="font-weight: 700;" ><div class="panel-heading" style="background-color:#666"><h4 style="color:#fff">Cost reduction Program</h4></div> Six Sigma<br>5S<br>SMED<br>Lean Manufacturing<br>Poka-Yoke<br>Value Stream Mapping<br></b></div>'],
	 ['Project Management',  365, '<div class="panel"><b style="font-weight: 700;" ><div class="panel-heading" style="background-color:#666"><h4 style="color:#fff">Project Management</h4></div>FMEA<br>Dip Stick Study<br>Zero Defect Tool<br></b></div>'],
	 ['Process Improvement',  634, '<div class="panel"><b style="font-weight: 700;" ><div class="panel-heading" style="background-color:#666"><h4 style="color:#fff">Process Improvement</h4></div>Product layout / re-layout<br></b></div>'],
	  ['Supply Chain/inventory/Logistics',  986, '<div class="panel"><b style="font-weight: 700;" ><div class="panel-heading" style="background-color:#666"><h4 style="color:#fff">Supply Chain/inventory/Logistics</h4></div>Vendor Management<br>Stores<br>Supply Chain<br></b></div>'],
	 ['Marketing',  496,'<div class="panel"><b style="font-weight: 700;" ><div class="panel-heading" style="background-color:#666"><h4 style="color:#fff">Marketing</h4></div>Business Development<br>Sales and Marketing<br></b></div>'],
	 ['Many more',  976,'<div class="panel"><b style="font-weight: 700;" ><div class="panel-heading" style="background-color:#666"><h4 style="color:#fff">Others</h4></div></b></div>']
  ]);
  

   
  // pie chart options
   var pieOptions = {
    backgroundColor: 'transparent',
    colors: [ "cornflowerblue", 
              "olivedrab", 
              "orange", 
              "tomato", 
              "crimson", 
              "purple", 
              "turquoise", 
              "forestgreen", 
              "navy", 
              "gray","red", "green","blue","yellow"],
    pieSliceText: 'value',
    tooltip: {
      text: 'Nos'
    },
    fontName: 'Open Sans',
    chartArea: {
      width: '100%',
      height: '94%'
    },
	is3D: true,
    legend: {
      textStyle: {
        fontSize: 13
      }
    }
  };
  
  var pieOptions1 = {
    backgroundColor: 'transparent',
    colors: [ "cornflowerblue", 
              "olivedrab", 
              "orange", 
              "tomato", 
              "crimson", 
              "purple", 
              "turquoise", 
              "forestgreen", 
              "navy", 
              "gray","red", "green","blue","yellow"],
    pieSliceText: 'value',
    tooltip: {
       isHtml: true
    },
    fontName: 'Open Sans',
    chartArea: {
      width: '100%',
      height: '94%'
    },
	is3D: true,
    legend: {
      textStyle: {
        fontSize: 13
      }
    }
  };
  // draw pie chart
  var pieChart = new google.visualization.PieChart(document.getElementById('pie-chart'));
  pieChart.draw(pieData, pieOptions);
  var pieChart = new google.visualization.PieChart(document.getElementById('pie-chart10'));
  pieChart.draw(pieData10, pieOptions1);

}
    
	  </script>
	  <script>
	$(window).scroll(function() {
		$('#over').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("animated fadeInUp delay");
			}
		});
	});
</script>
<script>
	$(window).scroll(function() {
		$('#why').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("animated fadeInUp delay");
			}
		});
	});
</script>
<script>
	$(window).scroll(function() {
		$('#how').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("animated fadeInUp delay");
			}
		});
	});
</script>
<script>
	$(window).scroll(function() {
		$('#benifits').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("animated fadeInUp delay");
			}
		});
	});
</script>
<script>
	$(window).scroll(function() {
		$('#left').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("animated fadeInLeft delay");
			}
		});
	});
</script>
<script>
	$(window).scroll(function() {
		$('#mid').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("animated fadeInLeft delay");
			}
		});
	});
</script>
<script>
	$(window).scroll(function() {
		$('#right').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("animated fadeInLeft delay");
			}
		});
	});
</script>
<script>
	$(window).scroll(function() {
		$('#news').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("animated fadeInLeft delay");
			}
		});
	});
</script>
<script>
	$(window).scroll(function() {
		$('#target').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				$(this).addClass("animated fadeInLeft delay");
			}
		});
	});
	
	
	
	$('#myModal').on('show.bs.modal', function (e) {
  if (!data) return e.preventDefault() // stops modal from being shown
})
</script>

<script>

    /* Light YouTube Embeds by @labnol */
    /* Web: http://labnol.org/?p=27941 */

    document.addEventListener("DOMContentLoaded",
        function() {
            var div, n,
                v = document.getElementsByClassName("youtube-player");
            for (n = 0; n < v.length; n++) {
                div = document.createElement("div");
                div.setAttribute("data-id", v[n].dataset.id);
                div.innerHTML = labnolThumb(v[n].dataset.id);
                div.onclick = labnolIframe;
                v[n].appendChild(div);
            }
        });

    function labnolThumb(id) {
        var thumb = '<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg">',
            play = '<div class="play"></div>';
        return thumb.replace("ID", id) + play;
    }

    function labnolIframe() {
        var iframe = document.createElement("iframe");
        var embed = "https://www.youtube.com/embed/ID?autoplay=1";
        iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
        iframe.setAttribute("frameborder", "0");
        iframe.setAttribute("allowfullscreen", "1");
        this.parentNode.replaceChild(iframe, this);
    }

</script>

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModalvideo" class="modal fade" style="top:12.5%">
							  <div class="modal-dialog">
								<div class="modal-content" >
									<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
									<h4 class="modal-title"></h4>
								  </div>
								  <div class="modal-body" style="padding:0">
									 <div class="embed-container">
									 <div class="youtube-player" data-id="gMNGoiV6_rQ"></div>
									   <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/gMNGoiV6_rQ?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>    --> 
									</div>
								</div>	

								  </div>
								</div><!-- /.modal-content -->
</div>