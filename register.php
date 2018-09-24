<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
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
	<link rel="icon" href="images/VR-logo-1.png">
	<title>Virtual Rival | Registration</title>
</head>
<body>

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
					<form>
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
						      	<input type="text" class="form-control" id="team_name" placeholder="Team Name">
						    </div>
					  	</div>
					  	<div class="form-group row">
						    <label for="university_name" class="col-sm-3 col-form-label">University Name<span>*</span></label>
						    <div class="col-sm-9">
						      	<input type="text" class="form-control" id="university_name" placeholder="University Name">
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
						      	<input type="text" class="form-control" id="leader_name" placeholder="Leader's Name">
						    </div>
					  	</div>
					  	<div class="form-group row">
					    	<label for="leader_email" class="col-sm-3 col-form-label">Leader's email<span>*</span></label>
						    <div class="col-sm-9">
						      	<input type="email" class="form-control" id="leader_email" placeholder="Leader's email">
						    </div>
					  	</div>
					  	<div class="form-group row">
						    <label for="leader_contact_no" class="col-sm-3 col-form-label">Contact Number<span>*</span></label>
						    <div class="col-sm-9">
						      	<input type="text" class="form-control bfh-phone" data-format="ddd ddd dddd" id="leader_contact_no" placeholder="Leader's Contact Number">
						    </div>
					  	</div>
					  	<fieldset class="form-group">
						    <div class="row">
						      	<legend class="col-form-label col-sm-3 pt-0">T-shirt Size<span>*</span></legend>
						      	<div class="col-sm-9">
						      		<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="XS" value="xs">
									  	<label class="form-check-label" for="inlineRadio1">XS</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="S" value="s">
									  	<label class="form-check-label" for="inlineRadio2">S</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="M" value="m">
									  	<label class="form-check-label" for="inlineRadio3">M</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="L" value="l">
									  	<label class="form-check-label" for="inlineRadio1">L</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="XL" value="xl">
									  	<label class="form-check-label" for="inlineRadio2">XL</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="XXL" value="xxl">
									  	<label class="form-check-label" for="inlineRadio3">XXL</label>
									</div>
						      	</div>
						    </div>
						  </fieldset>
					  	<fieldset class="form-group">
						    <div class="row">
						      	<legend class="col-form-label col-sm-3 pt-0">Preffered Meal<span>*</span></legend>
						      	<div class="col-sm-9">
						      		<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="vegi" value="vegi">
									  	<label class="form-check-label" for="inlineRadio1">Vegi</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="non-vegi" value="non_vegi">
									  	<label class="form-check-label" for="inlineRadio2">Non Vegi</label>
									</div>
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
						      	<input type="text" class="form-control" id="member1_name" placeholder="Member-01 Name">
						    </div>
					  	</div>
					  	<div class="form-group row">
					    	<label for="leader_email" class="col-sm-3 col-form-label">Member-01 email<span>*</span></label>
						    <div class="col-sm-9">
						      	<input type="email" class="form-control" id="member1_email" placeholder="Member-01 email">
						    </div>
					  	</div>
					  	<fieldset class="form-group">
						    <div class="row">
						      	<legend class="col-form-label col-sm-3 pt-0">T-shirt Size<span>*</span></legend>
						      	<div class="col-sm-9">
						      		<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="XS" value="member1_xs">
									  	<label class="form-check-label" for="inlineRadio1">XS</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="S" value="member1_s">
									  	<label class="form-check-label" for="inlineRadio2">S</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="M" value="member1_m">
									  	<label class="form-check-label" for="inlineRadio3">M</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="L" value="member1_l">
									  	<label class="form-check-label" for="inlineRadio1">L</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="XL" value="member1_xl">
									  	<label class="form-check-label" for="inlineRadio2">XL</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="XXL" value="member1_xxl">
									  	<label class="form-check-label" for="inlineRadio3">XXL</label>
									</div>
						      	</div>
						    </div>
						  </fieldset>
					  	<fieldset class="form-group">
						    <div class="row">
						      	<legend class="col-form-label col-sm-3 pt-0">Preffered Meal<span>*</span></legend>
						      	<div class="col-sm-9">
						      		<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="vegi" value="member1_vegi">
									  	<label class="form-check-label" for="inlineRadio1">Vegi</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="non-vegi" value="member1_non_vegi">
									  	<label class="form-check-label" for="inlineRadio2">Non Vegi</label>
									</div>
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
						      	<input type="text" class="form-control" id="member2_name" placeholder="Member-02 Name">
						    </div>
					  	</div>
					  	<div class="form-group row">
					    	<label for="leader_email" class="col-sm-3 col-form-label">Member-02 email<span>*</span></label>
						    <div class="col-sm-9">
						      	<input type="email" class="form-control" id="member2_email" placeholder="Member-02 email">
						    </div>
					  	</div>
					  	<fieldset class="form-group">
						    <div class="row">
						      	<legend class="col-form-label col-sm-3 pt-0">T-shirt Size<span>*</span></legend>
						      	<div class="col-sm-9">
						      		<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="XS" value="member2_xs">
									  	<label class="form-check-label" for="inlineRadio1">XS</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="S" value="member2_s">
									  	<label class="form-check-label" for="inlineRadio2">S</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="M" value="member2_m">
									  	<label class="form-check-label" for="inlineRadio3">M</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="L" value="member2_l">
									  	<label class="form-check-label" for="inlineRadio1">L</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="XL" value="member2_xl">
									  	<label class="form-check-label" for="inlineRadio2">XL</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="XXL" value="member2_xxl">
									  	<label class="form-check-label" for="inlineRadio3">XXL</label>
									</div>
						      	</div>
						    </div>
						  </fieldset>
					  	<fieldset class="form-group">
						    <div class="row">
						      	<legend class="col-form-label col-sm-3 pt-0">Preffered Meal<span>*</span></legend>
						      	<div class="col-sm-9">
						      		<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="vegi" value="member2_vegi">
									  	<label class="form-check-label" for="inlineRadio1">Vegi</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="non-vegi" value="member2_non_vegi">
									  	<label class="form-check-label" for="inlineRadio2">Non Vegi</label>
									</div>
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
						      	<input type="text" class="form-control" id="member3_name" placeholder="Member-03 Name">
						    </div>
					  	</div>
					  	<div class="form-group row">
					    	<label for="leader_email" class="col-sm-3 col-form-label">Member-03 email<span>*</span></label>
						    <div class="col-sm-9">
						      	<input type="email" class="form-control" id="member3_email" placeholder="Member-03 email">
						    </div>
					  	</div>
					  	<fieldset class="form-group">
						    <div class="row">
						      	<legend class="col-form-label col-sm-3 pt-0">T-shirt Size<span>*</span></legend>
						      	<div class="col-sm-9">
						      		<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="XS" value="member3_xs">
									  	<label class="form-check-label" for="inlineRadio1">XS</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="S" value="member3_s">
									  	<label class="form-check-label" for="inlineRadio2">S</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="M" value="member3_m">
									  	<label class="form-check-label" for="inlineRadio3">M</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="L" value="member3_l">
									  	<label class="form-check-label" for="inlineRadio1">L</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="XL" value="member3_xl">
									  	<label class="form-check-label" for="inlineRadio2">XL</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="XXL" value="member3_xxl">
									  	<label class="form-check-label" for="inlineRadio3">XXL</label>
									</div>
						      	</div>
						    </div>
						  </fieldset>
					  	<fieldset class="form-group">
						    <div class="row">
						      	<legend class="col-form-label col-sm-3 pt-0">Preffered Meal<span>*</span></legend>
						      	<div class="col-sm-9">
						      		<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="vegi" value="member3_vegi">
									  	<label class="form-check-label" for="inlineRadio1">Vegi</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="non-vegi" value="member3_non_vegi">
									  	<label class="form-check-label" for="inlineRadio2">Non Vegi</label>
									</div>
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
						      	<input type="text" class="form-control" id="member4_name" placeholder="Member-04 Name">
						    </div>
					  	</div>
					  	<div class="form-group row">
					    	<label for="leader_email" class="col-sm-3 col-form-label">Member-04 email<span>*</span></label>
						    <div class="col-sm-9">
						      	<input type="email" class="form-control" id="member4_email" placeholder="Member-04 email">
						    </div>
					  	</div>
					  	<fieldset class="form-group">
						    <div class="row">
						      	<legend class="col-form-label col-sm-3 pt-0">T-shirt Size<span>*</span></legend>
						      	<div class="col-sm-9">
						      		<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="XS" value="member4_xs">
									  	<label class="form-check-label" for="inlineRadio1">XS</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="S" value="member4_s">
									  	<label class="form-check-label" for="inlineRadio2">S</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="M" value="member4_m">
									  	<label class="form-check-label" for="inlineRadio3">M</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="L" value="member4_l">
									  	<label class="form-check-label" for="inlineRadio1">L</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="XL" value="member4_xl">
									  	<label class="form-check-label" for="inlineRadio2">XL</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="XXL" value="member4_xxl">
									  	<label class="form-check-label" for="inlineRadio3">XXL</label>
									</div>
						      	</div>
						    </div>
						  </fieldset>
					  	<fieldset class="form-group">
						    <div class="row">
						      	<legend class="col-form-label col-sm-3 pt-0">Preffered Meal<span>*</span></legend>
						      	<div class="col-sm-9">
						      		<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="vegi" value="member4_vegi">
									  	<label class="form-check-label" for="inlineRadio1">Vegi</label>
									</div>
									<div class="form-check">
									  	<input class="form-check-input" type="radio" name="gridRadios" id="non-vegi" value="member4_non_vegi">
									  	<label class="form-check-label" for="inlineRadio2">Non Vegi</label>
									</div>
						      	</div>
						    </div>
						</fieldset>
						<div class="divider"></div>
						<div class="form-group row" id="reg-submit-button-div">
						    <div class="col-sm-12">
						        <button id="reg-button" type="submit" class="btn btn-primary">SUBMIT</button>
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