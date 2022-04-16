<?php
include 'header.php';
?>

<link rel="stylesheet" href="css\flights-enquiry.css" type="text/css">
<title>Flights Enquiry Form</title>


<div class="booking-form">
		
		<form action="includes\flights.inc.php" method="post">
			<h2 class="sub-heading">Booking Details</h2>
			<div class="main-flex">
				<div class="field-spc form-text1">
					<select class="form-control">
										<option>From</option>
										<option value="JKIA">Nairobi - Jomo Kenyatta International Airport</option>
										<option value="WIL">Nairobi - Wilson</option>
										
									</select>
				</div>
				<div class="field-spc form-text2">
					<select class="form-control" >
										<option>To</option>
										<option value="ASV">Amboseli - Amboseli Airport</option>
										<option value="UKA">Ukunda - Ukunda Airport</option>
										<option value="LAU">Lamu - Manda Airport</option>
										<option value="MYD">Malindi - Malindi Airport</option>
										<option value="JJM">Meru - Mulika Lodge Airport</option>
										<option value="MBA">Mombasa - Moi International Airport</option>
                                        <option value="KIS">Kisumu - Kisumu International Airport</option>
                                        <option value="NUU">Nakuru - Nakuru Airport</option>
										<option value="NYK">Nanyuki - Nanyuki Airport</option>
										<option value="UAS">Samburu - Samburu Airport</option>
                                        <option value="MRE">Maasai Mara - Mara Serena Airport</option>
										<option value="KTJ">Maasai Mara - Kichwa Tembo Airstrip</option>
										<option value="ANA">Maasai Mara - Angama Mara Airstrip</option>
									</select>
				</div>
			</div>
			<div class="main-flex">
				<div class="field-spc form-text1">
					<select class="form-control">
										<option>Preferred Airline</option>
										<option value="AirKenya Express">AirKenya Express</option>
										<option value="Fly 540">Fly 540</option>
										<option value="Jambo Jet">Jambo Jet</option>
										<option value="Kenya Airways">Kenya Airways</option>
										<option value="Safari Link">Safari Link</option>
									</select>
				</div>
				<div class="field-spc form-text2">
					<select class="form-control">
										<option>Preferred Seating</option>
										<option value="Window">Window</option>
										<option value="Aisle">Aisle</option>
									</select>
				</div>
			</div>
			<div class="main-flex">
				<div class="field-spc form-text1">
                    <p>Depature date</p>
					<input id="datepicker" name="Text" type="date" placeholder="Departure Date"required="" class="hasDatepicker">
				</div>
                <div class="field-spc form-text1">
                    <p>Return date</p>
					<input id="datepicker" name="Text" type="date" placeholder="Return Date" required="" class="hasDatepicker">
				</div>
			</div>

			<div class="triple">
				<div class="field-spc form-text11">
					<select class="form-control">
												<option value="">Adult(12+ Yrs)</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>         
												<option value="4">4</option>
												<option value="5">5+</option>
											</select>
				</div>
				<div class="field-spc form-text22">
					<select class="form-control">
												<option value="">Children(2-11 Yrs)</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>         
												<option value="4">4</option>
												<option value="5">5+</option>     
											</select>
				</div>
				<div class="field-spc form-text33">
					<select class="form-control">
												<option value="">Infant(under 2Yrs)</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>         
												<option value="4">4</option>
												<option value="5">5+</option>    
											</select>
				</div>
			</div>
			<div class="radio-section">
				<h6>Select your Fare:</h6>
				<ul class="radio-buttons">
					<li>
						<input type="radio" id="a-option" name="selector1">
						<label for="a-option">One Way</label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="b-option" name="selector1">
						<label for="b-option">Round-Trip</label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul>
				<div class="clear"></div>
			</div>

			<h3 class="sub-heading">Personal Details</h3>
			<div class="main-flex">
				<div class="field-spc form-text1">
					<input type="text" name="Name" placeholder="Full Name" required="">
				</div>
				<div class="field-spc form-text2">
					<input type="text" name="Phone no" placeholder="Phone Number" required="">
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