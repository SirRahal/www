<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Employment Opportunities</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
    <!--favicon-->
    <link rel='shortcut icon' type='image/x-icon' href='img/favicon.png' />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />


<!-- Theme skin -->
<link href="skins/default.css" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<?php include 'nav.php' ?>
	<section id="content">

		<div class="container">
			<div class="row">
				<div class="box-gray" style="padding-bottom: 10px;">
					<h4>
						<span style="color:red;">Midway Machinery Movers</span> has immediate openings for Experienced Riggers:

						<ul style="padding-left:50px;">
							<li>Dismantling</li>
							<li>Installing</li>
							<li>Lifting</li>
							<li>Moving of all types of machinery</li>
							<li>Heavy objects in industrial spaces</li>
						</ul>
					</h4>
					<h4>
						We are based in Grand Rapids, MI and mainly services the West Michigan area for companies of all sizes.  While we specialize in this area, we do have job locations frequently that require some travel.
						<br/><br/>
						Building a stellar reputation from the quality of our work and honesty with our customers, we are quickly expanding.  So if you are looking to collect more than just a paycheck, take pride in your work, and appreciate working with a great team, we would love to meet with you. Top pay and benefits are waiting for qualified candidates!
						We have immediate openings for:

						<ul style="padding-left:50px;">
							<li>Experienced Riggers</li>
							<li>CDL Class A Drivers</li>
							<li>Heavy Forklift Operators</li>
						</ul>
					</h4>

				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form id="contactform" action="contact/jobApplication.php" method="post" class="validateform" name="send-contact">

						<!--Application-->
							<div>

								<div class="applicationSectionHeader row" >Application Information</div>
								<div>
									<!--line 1-->
									<div  class="col-lg-4 field" >
										<span><b>Last Name</b></span>
										<input class="field" type="text" name="ai_lastName" placeholder="* Enter your last name" data-rule="required" data-msg="Please enter your last name" />
										<div class="validation"></div>
									</div>
									<div  class="col-lg-4 field" >
										<span><b>First Name</b></span>
										<input class="field" type="text" name="ai_firstName" placeholder="* Enter your first name" data-rule="required" data-msg="Please enter your first name" />
										<div class="validation"></div>
									</div>
									<div  class="col-lg-2 field" >
										<span><b>Middle Initial</b></span>
										<input class="field" type="text" name="ai_middleInitial" placeholder="* Enter your M.I."  data-msg="Please enter your M.I>" />
										<div class="validation"></div>
									</div>
									<div  class="col-lg-2 field" >
										<span><b>Date</b></span>
										<input class="field" type="date" name="ai_date" placeholder="* Enter today's date" data-rule="required" data-msg="Please enter your last name" />
										<div class="validation"></div>
									</div>
								</div>
								<!--line 2-->
								<div>
									<div  class="col-lg-10 field" >
										<span><b>Address</b></span>
										<input class="field" type="text" name="ai_address" placeholder="* Enter your address" data-rule="required" data-msg="Please enter address" />
										<div class="validation"></div>
									</div>
									<div  class="col-lg-2 field" >
										<span><b>Apartment/Unit#</b></span>
										<input class="field" type="text" name="ai_apt" placeholder="* Enter your apt#" data-msg="Please enter your apt" />
										<div class="validation"></div>
									</div>
								</div>
								<!--line 3-->
								<div  class="col-lg-4 field" >
									<span><b>City</b></span>
									<input class="field" type="text" name="ai_city" placeholder="* Enter your City" data-rule="required" data-msg="Please enter your City" />
									<div class="validation"></div>
								</div>
								<div  class="col-lg-4 field" >
									<span><b>State</b></span>
									<input class="field" type="text" name="ai_state" placeholder="* Enter your State" data-rule="required" data-msg="Please enter your State" />
									<div class="validation"></div>
								</div>
								<div  class="col-lg-4 field" >
									<span><b>Zip</b></span>
									<input class="field" type="text" name="ai_zip" placeholder="* Enter your ZIP" data-rule="required" data-msg="Please enter your ZIP" />
									<div class="validation"></div>
								</div>

								<!--line 4-->
								<div  class="col-lg-4 field" >
									<span><b>Phone</b></span>
									<input class="field" type="tel" name="ai_phone" placeholder="* Enter your phone number" data-rule="required" data-msg="Please enter your phone number" />
									<div class="validation"></div>
								</div>
								<div  class="col-lg-8 field" >
									<span><b>E-Mail</b></span>
									<input class="field" type="email" name="ai_email" placeholder="* Enter your email" data-rule="required" data-msg="Please enter your phone number" />
									<div class="validation"></div>
								</div>

								<!--line 5-->
								<div  class="col-lg-4 field" >
									<span><b>Date Available</b></span>
									<input class="field" type="date" name="ai_dateAvailable" placeholder="* Enter the date you're available" data-rule="required" data-msg="Please enter the date you're available" />
									<div class="validation"></div>
								</div>
								<div  class="col-lg-4 field" >
									<span><b>Social Security No.</b></span>
									<input class="field" type="text" name="ai_ssn" placeholder="* Enter your social security number" data-rule="required" data-msg="Please enter your social security number" />
									<div class="validation"></div>
								</div>
								<div  class="col-lg-4 field" >
									<span><b>Desired Salary</b></span>
									<input class="field" type="number" name="ai_salary" placeholder="* Enter your desired salary" data-rule="required" data-msg="Please enter your desired salary" />
									<div class="validation"></div>
								</div>

								<!--line 6-->
								<div  class="col-lg-4 field" >
									<span><b>Desired Position</b></span>
									<input class="field" type="text" name="ai_position" placeholder="* Enter your desired position" data-msg="Please enter your desired position" />
									<div class="validation"></div>
								</div>
								<div  class="col-lg-4 field" >
									<span><b>Type</b></span>
									<div >
										<div class="col-sm-6">
											<input type="checkbox" name="ai_partTime" value="Yes">
											<label for="partTime" style="margin-bottom: 0px;">Part Time</label>
										</div>
										<div class="col-sm-6">
											<input type="checkbox" name="ai_temporary" value="Yes">
											<label for="temporary" style="margin-bottom: 0px;">Temporary</label>
										</div>
										<div class="col-sm-6">
											<input type="checkbox" name="ai_fullTime" value="Yes">
											<label for="fullTime" style="margin-bottom: 0px;">Full Time</label>
										</div>
										<div class="col-sm-6">
											<input type="checkbox" name="ai_seasonal" value="Yes">
											<label for="seasonal" style="margin-bottom: 0px;">Seasonal</label>
										</div>
									</div>

								</div>
								<!--line 7-->
								<div  class="col-lg-4 field" >
									<span><b>Shift</b></span>
									<div >
										<div class="col-sm-6">
											<input type="checkbox" name="ai_day" value="Yes">
											<label for="day" style="margin-bottom: 0px;">Day</label>
										</div>
										<div class="col-sm-6">
											<input type="checkbox" name="ai_graveyard" value="Yes">
											<label for="graveyard" style="margin-bottom: 0px;">Graveyard</label>
										</div>
										<div class="col-sm-6">
											<input type="checkbox" name="ai_swing" value="Yes">
											<label for="swing" style="margin-bottom: 0px;">Swing</label>
										</div>
										<div class="col-sm-6">
											<input type="checkbox" name="ai_rotation" value="Yes">
											<label for="rotation" style="margin-bottom: 0px;">Rotation</label>
										</div>
									</div>
								</div>
								<!--line 8-->
								<div >
									<div  class="col-lg-10" >
										<span><b>Are you able to perform the essential functions of the job you are applying for, with or without reasonable accommodation?</b></span>
									</div>
									<div class="col-sm-1">
										<input type="checkbox" name="ai_CanPerform" value="Yes">
										<label for="canPerform" style="margin-bottom: 0px;">Yes</label>
									</div>
									<div class="col-sm-1">
										<input type="checkbox" name="ai_CantPerform" value="Yes">
										<label for="cantPerform" style="margin-bottom: 0px;">No</label>
									</div>
								</div>
								<!--line 9-->
								<div >
									<div  class="col-lg-10" >
										<span><b>Are you a citizen of the United States?</b></span>
									</div>
									<div class="col-sm-1">
										<input type="checkbox" name="ai_USCitizen" value="Yes">
										<label for="canPerform" style="margin-bottom: 0px;">Yes</label>
									</div>
									<div class="col-sm-1">
										<input type="checkbox" name="ai_NonUSCitizen" value="Yes">
										<label for="cantPerform" style="margin-bottom: 0px;">No</label>
									</div>
								</div>
								<!--line 10-->

								<div >
									<div  class="col-lg-10" >
										<span><b>Are you legally eligible to work in the United States?</b></span>
									</div>
									<div class="col-sm-1">
										<input type="checkbox" name="ai_Eligible" value="Yes">
										<label for="canPerform" style="margin-bottom: 0px;">Yes</label>
									</div>
									<div class="col-sm-1">
										<input type="checkbox" name="ai_NotEligible" value="Yes">
										<label for="cantPerform" style="margin-bottom: 0px;">No</label>
									</div>
								</div>
								<!--line 11-->

								<div>
									<div  class="col-lg-10" >
										<span><b>Have you ever worked at this company?</b></span>
									</div>
									<div class="col-sm-1">
										<input type="checkbox" name="ai_workedAtMidway" value="Yes">
										<label for="canPerform" style="margin-bottom: 0px;">Yes</label>
									</div>
									<div class="col-sm-1">
										<input type="checkbox" name="ai_haventWorkedAtMidway" value="Yes">
										<label for="cantPerform" style="margin-bottom: 0px;">No</label>
									</div>
								</div>
								<!--line 12-->

								<div  class="col-lg-4 field" >
									<span><b>If so, when?</b></span>
								</div>
								<div  class="col-lg-4 field" >
									<span><b>Start</b></span>
									<input class="field" type="date" name="ai_workedDateStart" />
									<div class="validation"></div>
								</div>
								<div  class="col-lg-4 field" >
									<span><b>End</b></span>
									<input class="field" type="date" name="ai_workedDateEnd"  />
									<div class="validation"></div>
								</div>
									<div  class="col-lg-10" >
										<span><b>Have you been convicted of a felony?</b></span>
									</div>
									<div class="col-sm-1">
										<input type="checkbox" name="ai_felonyYes" value="Yes">
										<label for="canPerform" style="margin-bottom: 0px;">Yes</label>
									</div>
									<div class="col-sm-1">
										<input type="checkbox" name="ai_felonyNo" value="Yes">
										<label for="cantPerform" style="margin-bottom: 0px;">No</label>
									</div>
								<div  class="col-lg-12 field" >
									<span><b>If yes, explain</b></span>
									<input class="field" type="text" name="ai_felonyExplain" placeholder="* Enter when, why, where, and outcome" data-msg="Please explain what happened" />
									<div class="validation"></div>
								</div>
								<div style="clear: both; margin: 25px; min-height:10px;"></div>

							</div>
								<div class="row applicationSectionHeader" >Education</div>
								<div>
									<!--school 1-->
									<div  class="col-lg-6 field" >
										<span><b>High School</b></span>
										<input class="field" type="text" name="ehs_name" placeholder="* Enter your high school" data-msg="Please enter name" />
										<div class="validation"></div>
									</div>
									<div  class="col-lg-6 field" >
										<span><b>Address</b></span>
										<input class="field" type="text" name="ehs_Address" placeholder="* Enter high schools address" data-msg="Please enter address" />
										<div class="validation"></div>
									</div>
									<div  class="col-lg-2 field" >
										<span><b>From</b></span>
										<input class="field" type="date" name="ehs_fromDate" data-msg="Please the date you started" />
										<div class="validation"></div>
									</div>
									<div  class="col-lg-2 field" >
										<span><b>To</b></span>
										<input class="field" type="date" name="ehs_toDate" data-msg="Please enter the date you ended" />
										<div class="validation"></div>
									</div>
									<div>
										<div  class="col-lg-2" >
											<span><b>Did you graduate?</b></span>
											<br/>
											<input type="checkbox" name="ehs_graduated" value="Yes">
											<label for="canPerform" style="margin-bottom: 0px;">Yes</label>
											<br/>
											<input type="checkbox" name="ehs_didntGraduated" value="Yes">
											<label for="cantPerform" style="margin-bottom: 0px;">No</label>
										</div>
									</div>
									<div  class="col-lg-6 field" >
										<span><b>Degree</b></span>
										<input class="field" type="text" name="ehs_degree" placeholder="* Enter your degree" data-msg="Please enter your degree" />
										<div class="validation"></div>
									</div>

									<div style="clear: both;"></div>

									<!--school 2-->
									<div  class="col-lg-6 field" >
										<span><b>College</b></span>
										<input class="field" type="text" name="ec_name" placeholder="* Enter your college" data-msg="Please enter name" />
										<div class="validation"></div>
									</div>
									<div  class="col-lg-6 field" >
										<span><b>Address</b></span>
										<input class="field" type="text" name="ec_Address" placeholder="* Enter college address" data-msg="Please enter address" />
										<div class="validation"></div>
									</div>
									<div  class="col-lg-2 field" >
										<span><b>From</b></span>
										<input class="field" type="date" name="ec_fromDate" data-msg="Please the date you started" />
										<div class="validation"></div>
									</div>
									<div  class="col-lg-2 field" >
										<span><b>To</b></span>
										<input class="field" type="date" name="ec_toDate" data-msg="Please enter the date you ended" />
										<div class="validation"></div>
									</div>
									<div>
										<div  class="col-lg-2" >
											<span><b>Did you graduate?</b></span>
											<br/>
											<input type="checkbox" name="ec_graduated" value="Yes">
											<label for="canPerform" style="margin-bottom: 0px;">Yes</label>
											<br/>
											<input type="checkbox" name="ec_didntGraduated" value="Yes">
											<label for="cantPerform" style="margin-bottom: 0px;">No</label>
										</div>
									</div>
									<div  class="col-lg-6 field" >
										<span><b>Degree</b></span>
										<input class="field" type="text" name="ec_degree" placeholder="* Enter your degree" data-msg="Please enter your degree" />
										<div class="validation"></div>
									</div>
									<div style="clear: both;"></div>

									<!--school 3-->
									<div  class="col-lg-6 field" >
										<span><b>Other</b></span>
										<input class="field" type="text" name="eo_name" placeholder="* Enter other" data-msg="Please enter name" />
										<div class="validation"></div>
									</div>
									<div  class="col-lg-6 field" >
										<span><b>Address</b></span>
										<input class="field" type="text" name="eo_Address" placeholder="* Enter other address" data-msg="Please enter address" />
										<div class="validation"></div>
									</div>
									<div  class="col-lg-2 field" >
										<span><b>From</b></span>
										<input class="field" type="date" name="eo_fromDate" data-msg="Please the date you started" />
										<div class="validation"></div>
									</div>
									<div  class="col-lg-2 field" >
										<span><b>To</b></span>
										<input class="field" type="date" name="eo_toDate" data-msg="Please enter the date you ended" />
										<div class="validation"></div>
									</div>
									<div>
										<div  class="col-lg-2" >
											<span><b>Did you graduate?</b></span>
											<br/>
											<input type="checkbox" name="eo_graduated" value="Yes">
											<label for="canPerform" style="margin-bottom: 0px;">Yes</label>
											<br/>
											<input type="checkbox" name="eo_didntGraduated" value="Yes">
											<label for="cantPerform" style="margin-bottom: 0px;">No</label>
										</div>
									</div>
									<div  class="col-lg-6 field" >
										<span><b>Degree</b></span>
										<input class="field" type="text" name="eo_degree" placeholder="* Enter your degree" data-msg="Please enter your degree" />
										<div class="validation"></div>
									</div>
								</div>

								<div style="clear: both; margin: 25px; min-height:10px;"></div>
								<div class="row applicationSectionHeader"  style="margin-bottom: 5px;">References</div>
								<i>*Please list three professional references</i>
								<div>
									<!--ref1-->
									<div  class="col-lg-6 field" >
										<span><b>Full Name</b></span>
										<input class="field" type="text" name="refOne_name" placeholder="* Enter reference name" />
									</div>
									<div  class="col-lg-6 field" >
										<span><b>Relationship</b></span>
										<input class="field" type="text" name="refOne_relationship" placeholder="* Enter relationship" />
									</div>
									<div  class="col-lg-6 field" >
										<span><b>Company</b></span>
										<input class="field" type="text" name="refOne_company" placeholder="* Enter reference company" />
									</div>
									<div  class="col-lg-6 field" >
										<span><b>Phone</b></span>
										<input class="field" type="text" name="refOne_phone" placeholder="* Enter reference phone number" />
									</div>
									<div  class="col-lg-12 field" >
										<span><b>Address</b></span>
										<input class="field" type="text" name="refOne_address" placeholder="* Enter reference address" />
									</div>
								</div>
								<div>
									<!--ref2-->
									<div  class="col-lg-6 field" >
										<span><b>Full Name</b></span>
										<input class="field" type="text" name="refTwo_name" placeholder="* Enter reference name" />
									</div>
									<div  class="col-lg-6 field" >
										<span><b>Relationship</b></span>
										<input class="field" type="text" name="refTwo_relationship" placeholder="* Enter relationship" />
									</div>
									<div  class="col-lg-6 field" >
										<span><b>Company</b></span>
										<input class="field" type="text" name="refTwo_company" placeholder="* Enter reference company" />
									</div>
									<div  class="col-lg-6 field" >
										<span><b>Phone</b></span>
										<input class="field" type="text" name="refTwo_phone" placeholder="* Enter reference phone number" />
									</div>
									<div  class="col-lg-12 field" >
										<span><b>Address</b></span>
										<input class="field" type="text" name="refTwo_address" placeholder="* Enter reference address" />
									</div>
								</div>
								<div>
									<!--ref3-->
									<div  class="col-lg-6 field" >
										<span><b>Full Name</b></span>
										<input class="field" type="text" name="refThree_name" placeholder="* Enter reference name" />
									</div>
									<div  class="col-lg-6 field" >
										<span><b>Relationship</b></span>
										<input class="field" type="text" name="refThree_relationship" placeholder="* Enter relationship" />
									</div>
									<div  class="col-lg-6 field" >
										<span><b>Company</b></span>
										<input class="field" type="text" name="refThree_company" placeholder="* Enter reference company" />
									</div>
									<div  class="col-lg-6 field" >
										<span><b>Phone</b></span>
										<input class="field" type="text" name="refThree_phone" placeholder="* Enter reference phone number" />
									</div>
									<div  class="col-lg-12 field" >
										<span><b>Address</b></span>
										<input class="field" type="text" name="refThree_address" placeholder="* Enter reference address" />
									</div>
								</div>

						<div style="clear: both; margin: 25px; min-height:10px;"></div>
						<div class="row applicationSectionHeader" >Previous Employment</div>

						<!--emp1-->
						<div  class="col-lg-6 field" >
							<span><b>Company</b></span>
							<input class="field" type="text" name="peOne_company" placeholder="* Enter your previous company" />
						</div>
						<div  class="col-lg-6 field" >
							<span><b>Phone</b></span>
							<input class="field" type="tel" name="peOne_phone" placeholder="* Enter your previous company's number" />
						</div>
						<div  class="col-lg-6 field" >
							<span><b>Address</b></span>
							<input class="field" type="text" name="peOne_address" placeholder="* Enter your previous company's address" />
						</div>
						<div  class="col-lg-6 field" >
							<span><b>Supervisor</b></span>
							<input class="field" type="text" name="peOne_supervisor" placeholder="* Enter your supervisor's name" />
						</div>
						<div  class="col-lg-4 field" >
							<span><b>Job Title</b></span>
							<input class="field" type="text" name="peOne_jobTitle" placeholder="* Enter your job title" />
						</div>
						<div  class="col-lg-4 field" >
							<span><b>Starting Salary</b></span>
							<input class="field" type="text" name="peOne_startingSalary" placeholder="* Enter your starting salary"  />
						</div>
						<div  class="col-lg-4 field" >
							<span><b>Ending Salary</b></span>
							<input class="field" type="text" name="peOne_endingSalary" placeholder="* Enter your ending salary" />
						</div>
						<div  class="col-lg-12 field" >
							<span><b>Responsibilities</b></span>
							<input class="field" type="text" name="peOne_responsibilities" placeholder="* Enter your responsibilities" />
						</div>
						<div  class="col-lg-2 field" >
							<span><b>From</b></span>
							<input class="field" type="date" name="peOne_from" />
						</div>
						<div  class="col-lg-2 field" >
							<span><b>To</b></span>
							<input class="field" type="date" name="peOne_to" />
						</div>
						<div  class="col-lg-8 field" >
							<span><b>Reason for leaving</b></span>
							<input class="field" type="text" name="peOne_reasonForLeaving" placeholder="* Enter your reason for leaving" />
						</div>
						<div  class="col-lg-10" >
							<span><b>May we contact your previous supervisor for a reference?</b></span>
						</div>
						<div class="col-sm-1">
							<input type="checkbox" name="peOne_canContact" value="Yes">
							<label for="canPerform" style="margin-bottom: 0px;">Yes</label>
						</div>
						<div class="col-sm-1">
							<input type="checkbox" name="peOne_canNotContact" value="Yes">
							<label for="cantPerform" style="margin-bottom: 0px;">No</label>
						</div>

						<!--emp2-->
						<div  class="col-lg-6 field" >
							<span><b>Company</b></span>
							<input class="field" type="text" name="peTwo_company" placeholder="* Enter your previous company" />
						</div>
						<div  class="col-lg-6 field" >
							<span><b>Phone</b></span>
							<input class="field" type="tel" name="peTwo_phone" placeholder="* Enter your previous company's number" />
						</div>
						<div  class="col-lg-6 field" >
							<span><b>Address</b></span>
							<input class="field" type="text" name="peTwo_address" placeholder="* Enter your previous company's address" />
						</div>
						<div  class="col-lg-6 field" >
							<span><b>Supervisor</b></span>
							<input class="field" type="text" name="peTwo_supervisor" placeholder="* Enter your supervisor's name" />
						</div>
						<div  class="col-lg-4 field" >
							<span><b>Job Title</b></span>
							<input class="field" type="text" name="peTwo_jobTitle" placeholder="* Enter your job title" />
						</div>
						<div  class="col-lg-4 field" >
							<span><b>Starting Salary</b></span>
							<input class="field" type="text" name="peTwo_startingSalary" placeholder="* Enter your starting salary"  />
						</div>
						<div  class="col-lg-4 field" >
							<span><b>Ending Salary</b></span>
							<input class="field" type="text" name="peTwo_endingSalary" placeholder="* Enter your ending salary" />
						</div>
						<div  class="col-lg-12 field" >
							<span><b>Responsibilities</b></span>
							<input class="field" type="text" name="peTwo_responsibilities" placeholder="* Enter your responsibilities" />
						</div>
						<div  class="col-lg-2 field" >
							<span><b>From</b></span>
							<input class="field" type="date" name="peTwo_from" />
						</div>
						<div  class="col-lg-2 field" >
							<span><b>To</b></span>
							<input class="field" type="date" name="peTwo_to" />
						</div>
						<div  class="col-lg-8 field" >
							<span><b>Reason for leaving</b></span>
							<input class="field" type="tel" name="peTwo_reasonForLeaving" placeholder="* Enter your reason for leaving" />
						</div>
						<div  class="col-lg-10" >
							<span><b>May we contact your previous supervisor for a reference?</b></span>
						</div>
						<div class="col-sm-1">
							<input type="checkbox" name="peTwo_canContact" value="Yes">
							<label for="canPerform" style="margin-bottom: 0px;">Yes</label>
						</div>
						<div class="col-sm-1">
							<input type="checkbox" name="peTwo_canNotContact" value="Yes">
							<label for="cantPerform" style="margin-bottom: 0px;">No</label>
						</div>

						<!--emp3-->
						<div  class="col-lg-6 field" >
							<span><b>Company</b></span>
							<input class="field" type="text" name="peThree_company" placeholder="* Enter your previous company" />
						</div>
						<div  class="col-lg-6 field" >
							<span><b>Phone</b></span>
							<input class="field" type="tel" name="peThree_phone" placeholder="* Enter your previous company's number" />
						</div>
						<div  class="col-lg-6 field" >
							<span><b>Address</b></span>
							<input class="field" type="text" name="peThree_address" placeholder="* Enter your previous company's address" />
						</div>
						<div  class="col-lg-6 field" >
							<span><b>Supervisor</b></span>
							<input class="field" type="text" name="peThree_supervisor" placeholder="* Enter your supervisor's name" />
						</div>
						<div  class="col-lg-4 field" >
							<span><b>Job Title</b></span>
							<input class="field" type="text" name="peThree_jobTitle" placeholder="* Enter your job title" />
						</div>
						<div  class="col-lg-4 field" >
							<span><b>Starting Salary</b></span>
							<input class="field" type="text" name="peThree_startingSalary" placeholder="* Enter your starting salary"  />
						</div>
						<div  class="col-lg-4 field" >
							<span><b>Ending Salary</b></span>
							<input class="field" type="text" name="peThree_endingSalary" placeholder="* Enter your ending salary" />
						</div>
						<div  class="col-lg-12 field" >
							<span><b>Responsibilities</b></span>
							<input class="field" type="text" name="peThree_responsibilities" placeholder="* Enter your responsibilities" />
						</div>
						<div  class="col-lg-2 field" >
							<span><b>From</b></span>
							<input class="field" type="date" name="peThree_from" />
						</div>
						<div  class="col-lg-2 field" >
							<span><b>To</b></span>
							<input class="field" type="date" name="peThree_to" />
						</div>
						<div  class="col-lg-8 field" >
							<span><b>Reason for leaving</b></span>
							<input class="field" type="tel" name="peThree_reasonForLeaving" placeholder="* Enter your reason for leaving" />
						</div>
						<div  class="col-lg-10" >
							<span><b>May we contact your previous supervisor for a reference?</b></span>
						</div>
						<div class="col-sm-1">
							<input type="checkbox" name="peThree_canContact" value="Yes">
							<label for="canPerform" style="margin-bottom: 0px;">Yes</label>
						</div>
						<div class="col-sm-1">
							<input type="checkbox" name="peThree_canNotContact" value="Yes">
							<label for="cantPerform" style="margin-bottom: 0px;">No</label>
						</div>

						<!-- Military Service -->

						<div style="clear: both; margin: 25px; min-height:10px;"></div>
						<div class="row applicationSectionHeader" >Military Service</div>
						<div  class="col-lg-8 field" >
							<span><b>Branch</b></span>
							<input class="field" type="text" name="ms_branch" placeholder="* Enter your branch" />
						</div>
						<div  class="col-lg-2 field" >
							<span><b>From</b></span>
							<input class="field" type="date" name="ms_from" />
						</div>
						<div  class="col-lg-2 field" >
							<span><b>To</b></span>
							<input class="field" type="date" name="ms_to" />
						</div>
						<div  class="col-lg-8 field" >
							<span><b>Rank at Discharge</b></span>
							<input class="field" type="text" name="ms_rank" placeholder="* Enter your rank at discharge" />
						</div>
						<div  class="col-lg-4 field" >
							<span><b>Type of Discharge</b></span>
							<input class="field" type="tel" name="ms_dischargeType" placeholder="* Enter your type of discharge" />
						</div>
						<div  class="col-lg-12 field" >
							<span><b>If other than honorable, explain</b></span>
							<input class="field" type="text" name="ms_explain" placeholder="* Enter your explanation" />
						</div>

						<div style="clear: both; margin: 25px; min-height:10px;"></div>
						<div class="row applicationSectionHeader" style="margin-bottom: 5px;" >Disclaimer and Signature</div>
						<span><b>I certify that my answers are true and complete to the best of my knowledge.<br/>If this application leads to employment, I understand that false or misleading information in my application or interview may result in my release.</b></span>
						<div style="margin-top: 15px;" >
							<div  class="col-lg-8 field" >
								<span><b>Sign</b></span>
								<input class="field" type="text" name="form_Sign" placeholder="* Enter your name" data-rule="required" data-msg="Please enter your name" />
								<div class="validation"></div>
							</div>
							<div  class="col-lg-4 field" >
								<span><b>Date</b></span>
								<input class="field" type="date" name="form_date" data-rule="required" data-msg="Please enter the date" />
								<div class="validation"></div>
							</div>
						</div>

						<div style="clear: both;"/>

						<button class="btn btn-theme margintop10 pull-left" type="submit">Submit Application</button>

						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
<div id="sendmessage">
	Your application has been sent. Thank you!
	<a href="/index.php">Click HERE Go Back To The Home Page</a>
</div>
</div>
<?php include 'footer.php'; ?>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="js/validateJobOpportunities.js"></script>
</body>
</html>


