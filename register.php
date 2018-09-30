<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
	<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script-->
	<script src="parallaxjs/parallax.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
	<link rel="icon" href="images/VR-logo-1.png">
	<title>Virtual Rival | Registration</title>
</head>
<body>
	<style type="text/css">
		input:not([type="file"]).error,
		textarea.error,
		select.error {
		  border: 1px solid red !important;
		}
		 
		input:not([type="file"]).no-error,
		textarea.no-error,
		select.no-error {
		  border: 1px solid green !important;
		}
		 
		form .error {
		  color: red;
		  font-size: small;
		}
	</style>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#registration_form").validate({
            	rules: {
            		team_name: "required",
            		university_name: "required",
            		leader_name: "required",
            		leader_email: "required",
            		leader_phone: "required",
            		leader_t_shirt: "required",
            		leader_food: "required",
            		member1_name: "required",
            		member1_email: "required",
            		member1_t_shirt: "required",
            		member1_food: "required",
            		member2_name: "required",
            		member2_email: "required",
            		member2_t_shirt: "required",
            		member2_food: "required",
            		member3_name: "required",
            		member3_email: "required",
            		member3_t_shirt: "required",
            		member3_food: "required",
            		member4_name: "required",
            		member4_email: "required",
            		member4_t_shirt: "required",
            		member4_food: "required"
            	},
        		messages: {
			      	team_name: "Team name is required",
			      	university_name: "University name is required",
			      	leader_name: "Please enter leader's name",
			      	leader_email: "Please enter a valid email address",
			      	leader_phone: "Please enter mobile number",
			      	leader_t_shirt: "This field is required",
			      	leader_food: "This field is required",
			      	member1_name: "Please enter member-01's name",
			      	member1_email: "Please enter a valid email address",
			      	member1_t_shirt: "This field is required",
			      	member1_food: "This field is required",
			      	member2_name: "Please enter member-02's name",
			      	member2_email: "Please enter a valid email address",
			      	member2_t_shirt: "This field is required",
			      	member2_food: "This field is required",
			      	member3_name: "Please enter member-03's name",
			      	member3_email: "Please enter a valid email address",
			      	member3_t_shirt: "This field is required",
			      	member3_food: "This field is required",
			      	member4_name: "Please enter member-04's name",
			      	member4_email: "Please enter a valid email address",
			      	member4_t_shirt: "This field is required",
			      	member4_food: "This field is required",
			    },

			    submitHandler: function(form) {
			      	form.submit();
			    }
            });

            $("#leader_contact_no").keydown(function (e) {
		        // Allow: backspace, delete, tab, escape, enter and .
		        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
		             // Allow: Ctrl+A, Command+A
		            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
		             // Allow: home, end, left, right, down, up
		            (e.keyCode >= 35 && e.keyCode <= 40)) {
		                 // let it happen, don't do anything
		                 return;
		        }
		        // Ensure that it is a number and stop the keypress
		        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
		            e.preventDefault();
		        }
		    });
        });
    </script>

	<div>
		<div id="particles-js"></div>
		<section>
			<div class="registration-section">
				<div id="registration-form-title">
					<div id="registration-form-title-background">
						<h1>Virtual Rival</h1>
						<h3>Team Registration</h3>
					</div>
				</div>
				<div class="reg-container-div" id="registration-form-div">
					<form action="process.php" method="POST" id="registration_form">
						<!--Team details part-->
						<div id="required-text-div">
							* Required Fields
						</div>
						<div class="form-section-title">
							Team Details
						</div>
					  	<div class="form-group row">
					    	<label for="team_name" class="col-sm-3 col-form-label">Team Name<span>*</span></label>
						    <div class="col-sm-9">
						      	<input type="text" class="form-control" name="team_name" value="<?php $team_name ?>" id="team_name" placeholder="Team name here">
						    </div>
					  	</div>
					  	<div class="form-group row">
						    <label for="university_name" class="col-sm-3 col-form-label">University Name<span>*</span></label>
						    <div class="col-sm-9">
						      	<input type="text" class="form-control" name="university_name" value="<?php $university_name ?>" id="university_name" placeholder="University name here">
						    </div>
					  	</div>
					  	<br>
					  	<!--Team leader's details part-->
					  	<div class="form-section-title">
							Team Leader's Details
						</div>
					  	<div class="form-group row">
					    	<label for="leader_name" class="col-sm-3 col-form-label">Leader's Name<span>*</span></label>
						    <div class="col-sm-9">
						      	<input type="text" class="form-control" name="leader_name" value="<?php $leader_name ?>" id="leader_name" placeholder="Your name here">
						    </div>
					  	</div>
					  	<div class="form-group row">
					    	<label for="leader_email" class="col-sm-3 col-form-label">Leader's email<span>*</span></label>
						    <div class="col-sm-9">
						      	<input type="email" class="form-control" name="leader_email" value="<?php $leader_email ?>" id="leader_email" placeholder="Your email here">
						    </div>
					  	</div>
					  	<div class="form-group row">
						    <label for="leader_contact_no" class="col-sm-3 col-form-label">Contact Number<span>*</span></label>
						    <div class="col-sm-9">
						      	<input type="text" class="form-control" id="leader_contact_no" name="leader_phone" value="<?php $leader_phone ?>" placeholder="Your contact number here">
						    </div>
					  	</div>
					  	<fieldset class="form-group">
						    <div class="row">
						      	<legend class="col-form-label col-sm-3 pt-0">T-shirt Size<span>*</span></legend>
						      	<div class="col-sm-3">
						      		<select class="custom-select" name="leader_t_shirt">
						      			<option value="" selected>Choose...</option>
									  	<option value="XS">XS</option>
									  	<option value="S">S</option>
									  	<option value="M">M</option>
									  	<option value="L">L</option>
									  	<option value="XL">XL</option>
									  	<option value="XXL">XXL</option>
									</select>
						      	</div>
						    </div>
						  </fieldset>
					  	<fieldset class="form-group">
						    <div class="row">
						      	<legend class="col-form-label col-sm-3 pt-0">Preffered Meal<span>*</span></legend>
						      	<div class="col-sm-3">
						      		<select class="custom-select" name="leader_food">
									  	<option value="" selected>Choose...</option>
									  	<option value="Vegi">Vegi</option>
									  	<option value="Non-Vegi">Non-Vegi</option>
									</select>
						      	</div>
						    </div>
						</fieldset>
						<br>

						<!--Member 1 details-->

						<div class="form-section-title">
							Member-01 Details
						</div>
					  	<div class="form-group row">
					    	<label for="leader_name" class="col-sm-3 col-form-label">Member-01 Name<span>*</span></label>
						    <div class="col-sm-9">
						      	<input type="text" class="form-control" name="member1_name" value="<?php $member1_name ?>" id="member1_name" placeholder="Name here">
						    </div>
					  	</div>
					  	<div class="form-group row">
					    	<label for="leader_email" class="col-sm-3 col-form-label">Member-01 email<span>*</span></label>
						    <div class="col-sm-9">
						      	<input type="email" class="form-control" name="member1_email" value="<?php $member1_email ?>" id="member1_email" placeholder="E-mail here">
						    </div>
					  	</div>
					  	<fieldset class="form-group">
						    <div class="row">
						      	<legend class="col-form-label col-sm-3 pt-0">T-shirt Size<span>*</span></legend>
						      	<div class="col-sm-3">
						      		<select class="custom-select" name="member1_t_shirt">
						      			<option value="" selected>Choose...</option>
									  	<option value="XS">XS</option>
									  	<option value="S">S</option>
									  	<option value="M">M</option>
									  	<option value="L">L</option>
									  	<option value="XL">XL</option>
									  	<option value="XXL">XXL</option>
									</select>
						      	</div>
						    </div>
						  </fieldset>
					  	<fieldset class="form-group">
						    <div class="row">
						      	<legend class="col-form-label col-sm-3 pt-0">Preffered Meal<span>*</span></legend>
						      	<div class="col-sm-3">
						      		<select class="custom-select" name="member1_food">
									  	<option value="" selected>Choose...</option>
									  	<option value="Vegi">Vegi</option>
									  	<option value="Non-Vegi">Non-Vegi</option>
									</select>
						      	</div>
						    </div>
						</fieldset>
						<br>

						<!--Member 2 details-->

						<div class="form-section-title">
							Member-02 Details
						</div>
					  	<div class="form-group row">
					    	<label for="leader_name" class="col-sm-3 col-form-label">Member-02 Name<span>*</span></label>
						    <div class="col-sm-9">
						      	<input type="text" class="form-control" name="member2_name" value="<?php $member2_name ?>" id="member2_name" placeholder="Name here">
						    </div>
					  	</div>
					  	<div class="form-group row">
					    	<label for="leader_email" class="col-sm-3 col-form-label">Member-02 email<span>*</span></label>
						    <div class="col-sm-9">
						      	<input type="email" class="form-control" name="member2_email" value="<?php $member2_email ?>" id="member2_email" placeholder="E-mail here">
						    </div>
					  	</div>
					  	<fieldset class="form-group">
						    <div class="row">
						      	<legend class="col-form-label col-sm-3 pt-0">T-shirt Size<span>*</span></legend>
						      	<div class="col-sm-3">
						      		<select class="custom-select" name="member2_t_shirt">
									  	<option value="" selected>Choose...</option>
									  	<option value="XS">XS</option>
									  	<option value="S">S</option>
									  	<option value="M">M</option>
									  	<option value="L">L</option>
									  	<option value="XL">XL</option>
									  	<option value="XXL">XXL</option>
									</select>
						      	</div>
						    </div>
						  </fieldset>
					  	<fieldset class="form-group">
						    <div class="row">
						      	<legend class="col-form-label col-sm-3 pt-0">Preffered Meal<span>*</span></legend>
						      	<div class="col-sm-3">
						      		<select class="custom-select" name="member2_food">
									  	<option value="" selected>Choose...</option>
									  	<option value="Vegi">Vegi</option>
									  	<option value="Non-Vegi">Non-Vegi</option>
									</select>
						      	</div>
						    </div>
						</fieldset>
						<br>

						<!--Member 3 details-->

						<div class="form-section-title">
							Member-03 Details
						</div>
					  	<div class="form-group row">
					    	<label for="leader_name" class="col-sm-3 col-form-label">Member-03 Name<span>*</span></label>
						    <div class="col-sm-9">
						      	<input type="text" class="form-control" name="member3_name" value="<?php $member3_name ?>" id="member3_name" placeholder="Name here">
						    </div>
					  	</div>
					  	<div class="form-group row">
					    	<label for="leader_email" class="col-sm-3 col-form-label">Member-03 email<span>*</span></label>
						    <div class="col-sm-9">
						      	<input type="email" class="form-control" name="member3_email" value="<?php $member3_email ?>" id="member3_email" placeholder="E-mail here">
						    </div>
					  	</div>
					  	<fieldset class="form-group">
						    <div class="row">
						      	<legend class="col-form-label col-sm-3 pt-0">T-shirt Size<span>*</span></legend>
						      	<div class="col-sm-3">
						      		<select class="custom-select" name="member3_t_shirt">
									  	<option value="" selected>Choose...</option>
									  	<option value="XS">XS</option>
									  	<option value="S">S</option>
									  	<option value="M">M</option>
									  	<option value="L">L</option>
									  	<option value="XL">XL</option>
									  	<option value="XXL">XXL</option>
									</select>
						      	</div>
						    </div>
						  </fieldset>
					  	<fieldset class="form-group">
						    <div class="row">
						      	<legend class="col-form-label col-sm-3 pt-0">Preffered Meal<span>*</span></legend>
						      	<div class="col-sm-3">
						      		<select class="custom-select" name="member3_food">
									  	<option value="" selected>Choose...</option>
									  	<option value="Vegi">Vegi</option>
									  	<option value="Non-Vegi">Non-Vegi</option>
									</select>
						      	</div>
						    </div>
						</fieldset>
						<br>

						<!--Member 4 details-->

						<div class="form-section-title">
							Member-04 Details
						</div>
					  	<div class="form-group row">
					    	<label for="leader_name" class="col-sm-3 col-form-label">Member-04 Name<span>*</span></label>
						    <div class="col-sm-9">
						      	<input type="text" class="form-control" name="member4_name" value="<?php $member4_name ?>" id="member4_name" placeholder="Name here">
						    </div>
					  	</div>
					  	<div class="form-group row">
					    	<label for="leader_email" class="col-sm-3 col-form-label">Member-04 email<span>*</span></label>
						    <div class="col-sm-9">
						      	<input type="email" class="form-control" name="member4_email" value="<?php $member4_email ?>" id="member4_email" placeholder="E-mail here">
						    </div>
					  	</div>
					  	<fieldset class="form-group">
						    <div class="row">
						      	<legend class="col-form-label col-sm-3 pt-0">T-shirt Size<span>*</span></legend>
						      	<div class="col-sm-3">
						      		<select class="custom-select" name="member4_t_shirt">
									  	<option value="" selected>Choose...</option>
									  	<option value="XS">XS</option>
									  	<option value="S">S</option>
									  	<option value="M">M</option>
									  	<option value="L">L</option>
									  	<option value="XL">XL</option>
									  	<option value="XXL">XXL</option>
									</select>
						      	</div>
						    </div>
						  </fieldset>
					  	<fieldset class="form-group">
						    <div class="row">
						      	<legend class="col-form-label col-sm-3 pt-0">Preffered Meal<span>*</span></legend>
						      	<div class="col-sm-3">
						      		<select class="custom-select" name="member4_food">
									  	<option value="" selected>Choose...</option>
									  	<option value="Vegi">Vegi</option>
									  	<option value="Non-Vegi">Non-Vegi</option>
									</select>
						      	</div>
						    </div>
						</fieldset>
						<div class="divider"></div>
						<div class="form-group row" id="reg-submit-button-div">
						    <div class="col-sm-12">
						        <button name="submit" id="reg-button" type="submit" class="btn btn-primary">REGISTER</button>
						    </div>
						</div>
					</form>
				</div>
			</div>
		</section>
		<section id="footer">
			<div class="footer-section">
				<div class="footer-content container">
					<div class="footer-section-title">
						Find <span>US</span>
					</div>
					<div class="social-icons">
						<a href=""><i class="fab fa-facebook fa-3x"></i></a>
						<a href=""><i class="fab fa-twitter fa-3x"></i></a>
						<a href=""><i class="fab fa-instagram fa-3x"></i></a>
						<a href=""><i class="fab fa-youtube fa-3x"></i></a>
					</div>
				</div>
				<div class="footer-copyright-sec">
					All rights reserved ©2018<br>
					Society of Computer Sciences(SOCS), Sabaragamuwa University of Sri Lanka.
				</div>
			</div>
		</section>
	</div>
	<script src="function.js"></script>
	<script src="particles.js"></script>
	<script src="app.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
    	AOS.init({
    		once: true
    	});
  	</script>
  	<script src="BootstrapFormHelper/js/bootstrap-formhelpers-phone.js"></script>
</body>
</html>