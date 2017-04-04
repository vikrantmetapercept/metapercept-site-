<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Metapercept</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	
	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Jura" rel="stylesheet">
	
  </head>
   <body class="back">

    <div class="loader"></div>
    <div id="myDiv">
	
	<div class="container">
		<div class="col-md-12">
			<div class="row">
				<!--Header-->
					<p><?php include("includes/header.php"); ?></p>
				<!--/Header-->
			</div>
		</div>
	</div>

	 <!--Breadcrumbs-->
    <div class="breadcrumbs">
        <div class="container">
            <ul class="pull-right breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i></a></li>                
            </ul>
        </div>
    </div>
	<!--/breadcrumbs-->

    <!--Content Part-->
    <div class="container content">
      <div class="row margin-bottom-30" style="background-color:transparent;">
        <div class="col-md-7 mb-margin-bottom-30" style="background-color:transparent;">
                <div class="headline" style="background-color:transparent;"><h2 class="wow fadeInUp">Metapercept Technology Services (LLP)</h2></div>
                <br />

				
                <form class="reg-page" id="regForm" method="post" action="contact_me.php">
                   
                      <fieldset class="no-padding">
                    
                      <label>Name <span class="color-red">*</span></label>
                       <div class="row">
                            <div class="col-md-9">
                                <div>
                       <input type="text" name="firstName" class="form-control"  required/>
                       
                                </div>
                            </div>
                        </div>
                          <div class="row">
                            <div class="col-md-9">
                                <div>
                         <label>Phone No <span class="color-red">*</span></label>
                     
                    <input type="tel" name="cntctNo"  class="form-control"  required data-validation-required-message="Please enter your phone number." pattern="^([0|\+[0-9]{1,5})?([7-9][0-9]{9})$" title="Only 10 digits excluding country code is allowed.">
                        </div>
                            </div>
                        </div>
    

                     <label>Email <span class="color-red">*</span></label>
                      <div class="row">
                            <div class="col-md-9 ">
                                <div>
                    <input type="email" name="emailId" class="form-control"  required/>
                    </div>
                            </div>
                        </div>

                      <label>Service Type </label>
                       <div class="row">
                            <div class="col-md-9">
                                <div>
                    <select class="form-control" name="experience" id="experience">
                       <option class="placeholder" selected disabled value="">--</option>
                                <option value="1">DITA-XML Technical Writing</option>
                                <option value="2">DITA-XML Content Migration</option>
                                <option value="3">DITA-XML Consulting &amp; Implementation</option>
                                <option value="4">Technical Writing Services</option>
                                <option value="5">Technical Publication Consulting</option>
                                <option value="6">DTD, XSLT &amp; Schema Development</option>
                                <option value="7">FrameMaker EDD Development</option>
                                <option value="8">Website &amp; Web Application Development</option>
                                <option value="9">DITA-XML Training</option>
                                <option value="10">Advance DITA-XML Training</option>
                                <option value="11">Online DITA-XML Training</option>
                                <option value="12">Technical Writing Training</option>
                                <option value="13">Advance Technical Writing Training</option>
                    </select>                 
                    </div>
                            </div>
                        </div>
                   <br>
                     <label>Message<span class="color-red">*</span> </label>
                      <div class="row">
                            <div class="col-md-9">
                                <div>
                    <!--input type="text" name="cmpnyName" class="form-control"  required/-->
                      <textarea rows="4" cols="50" type="text" name="cmpnyName" class="form-control"  required>
                                </textarea>

                                </div>
                            </div>
                        </div>

                    <br>
                       
                            <button class="btn btn-success" type="submit" name="submit">Send Message</button>
                     
                      </fieldset>
                </form>

          
            </div><!--/col-md-9-->

        <div class="col-md-5">
                <!-- Why we are? -->
                <div class="headline"><h2 class="wow fadeInUp">For Training & Consulting </h2></div>

                <p>
               <ul class="list-unstyled who margin-bottom-30 wow fadeInRight">
             
                  <li><a href="#"><i class="fa fa-phone"></i><b>Training:</b>+91-830-810-3416</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i><b>Email:</b>training@metapercept.com</a></li>
                  <li><a href="#"><i class="fa fa-phone"></i><b>Consulting:</b>+91-839-090-5726</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i><b>Email:</b>info@metapercept.com</a></li>
    
                  </p>
               </ul>

              <!-- Contacts -->
                <div class="headline"><h2 class="wow fadeInright">Office Address </h2></div>
                
                <ul class="list-unstyled who margin-bottom-30 wow fadeInRight">
                    
                    
                    <li><a href="#"><i class="fa fa-home"></i>
                  Flat no 2, Royal Empress Apartment,<br> Baner - Balewadi Road, Baner,<br> 
                   Pune, Maharashtra
                   India <br> Pin - 411045
                    </a></li>
                     <li><a href="#"><i class="fa fa-phone"></i><b>Phone:</b>+91-892-840-6975</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i><b>Email:</b>info@metapercept.com</a></li>
                   
                    
                </ul>
              
               <!-- Business Hours -->
               
                <b class="wow fadeInUp">Business Hours</b>
                <ul class="list-unstyled margin-bottom-30 wow fadeInRight">
                    <li>Monday-Friday:10:00 am to 6:00 pm</li>
                    
                    <li>Closed on Saturday & Sunday</li>
                </ul>
               
            </div><!--/col-md-3-->
        </div><!--/row-->

       
    </div><!--/container-->
    <!-- End Content Part -->
  

    <!--Footer section-->
		<p><?php include("includes/footer.php"); ?></p>
    <!--/Footer-->

  </body>
</html>