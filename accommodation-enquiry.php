<?php
include 'header.php';
?>

<link rel="stylesheet" href="css\flights-enquiry.css" type="text/css">
<title>Accommodation Enquiry Form</title>


<div class="booking-form">
		
		<form action="includes\accommodation.inc.php" method="post">
			<h2 class="sub-heading">Accommodation Booking Details</h2>
			<div class="main-flex">
				<div class="field-spc form-text1">
					<select class="subject" id="subject" name="Place">
										<option>Choose Place</option>
									</select>
					
				</div>

				<div class="field-spc form-text2">
				<select class="object" id="object" name="Hotel">
										<option>Choose Hotel</option>
									</select>
				</div>
			</div>
			<div class="main-flex">
				<div class="field-spc form-text1">
                    <p>Check In Date</p>
					<input id="datepicker" name="CheckIn" type="date" placeholder="Departure Date" required="" class="hasDatepicker">
				</div>
                <div class="field-spc form-text1">
                    <p>Check Out Date</p>
					<input id="datepicker" name="CheckOut" type="date" placeholder="Return Date" required="" class="hasDatepicker">
				</div>
			</div>

			<div class="triple">
				<div class="field-spc form-text11">
					<select class="form-control" name="Adults">
												<option value="">Adult(12+ Yrs)</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>         
												<option value="4">4</option>
												<option value="5">5+</option>
											</select>
				</div>
				<div class="field-spc form-text22">
					<select class="form-control" name="Children">
												<option value="">Children(2-11 Yrs)</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>         
												<option value="4">4</option>
												<option value="5">5+</option>     
											</select>
				</div>
				<div class="field-spc form-text33">
					<select class="form-control" name="Infants">
												<option value="">Infant(under 2Yrs)</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>         
												<option value="4">4</option>
												<option value="5">5+</option>    
											</select>
				</div>
			</div>
			
			

			<h3 class="sub-heading">Personal Details</h3>
			<div class="main-flex">
				<div class="field-spc form-text1">
					<input type="text" name="FullName" placeholder="Full Name" required="">
				</div>
				<div class="field-spc form-text2">
					<input type="text" name="PhoneNumber" placeholder="Phone Number" required="">
				</div>
			</div>
			<div class="field-spc form-text">
				<input type="email" name="Email" placeholder="Email" required="">
			</div>
			<div class="clear"></div>
			<input type="submit" value="Submit">
			<input type="reset" value="Clear Form">
			<div class="clear"></div>
		</form>
	</div>

	<script src="scripts\bookings.js"></script>