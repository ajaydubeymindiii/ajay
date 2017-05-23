<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Demo</title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="assests/css/ws.min16d7.css?2017-04-11-14-07" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="assests/css/mobile-styles.min16d7.css?2017-04-11-14-07" media='screen and (max-width : 600px)' rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="assests/css/desktop-styles-default.min16d7.css?2017-04-11-14-07" media='screen and (min-width : 601px)' rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700,800" media="screen, projection"  media='screen and (min-width : 601px)' />
<link rel="stylesheet" type="text/css" href="assests/css/connect16d7.css?2017-04-11-14-07" media="screen, projection"  media='screen and (min-width : 601px)' />
<link rel="stylesheet" type="text/css" href="assests/css/jquery.plugins.min16d7.css?2017-04-11-14-07" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="assests/css/green.min16d7.css?2017-04-11-14-07" media="screen, projection" />
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.0.min.js"></script>
<script type="text/javascript" src="assests/js/worldsingles_jquery_header.min16d7.js?2017-04-11-14-07"></script>
<script src="assests/js/bootstrap.min16d7.js?2017-04-11-14-07"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<link rel="stylesheet" type="text/css" href="assests/css/landing.min16d7.css?2017-04-11-14-07" media="screen, projection" />
<style type="text/css">
.promo-variable-background {
	background-image: url(assests/images/landing-promo-133.jpg);	
}
#registerForm > div {
  background: skyblue none repeat scroll 0 0;
  font-weight: bold;
  text-align: center;
}
.col-sm-4 {
  float: left;
}
/*portrait*/
@media only screen and (max-width: 390px) {
#photo { 
	background-image: url(assests/images/landing-promo-133-portrait-mobile.jpg);
}
.splash-image #photo{
	display: inline-block;
	width: 100%;
	font-size: 0;
	line-height: 0;
	vertical-align: middle;
	background-size: 100%;
	background-position: 50% 100%;
	background-repeat: no-repeat;	
}
.splash-image #photo .inner{
	display: block;
	height: 0;
	padding-top: 200px;
}
}
/*portrait retina*/
@media only screen and (max-width:390px) and (-webkit-min-device-pixel-ratio: 2),
only screen and (max-width:390px) and (                min-resolution: 2dppx) {
#photo { 
	background-image: url(assests/images/landing-promo-133-portrait-mobile%402x.jpg); 
}
.splash-image #photo{
	display: inline-block;
	width: 100%;
	font-size: 0;
	line-height: 0;
	vertical-align: middle;
	background-size: 100%;
	background-position: 50% 100%;
	background-repeat: no-repeat;	
}
.splash-image #photo .inner{
	display: block;
	height: 0;
	padding-top: 200px;
}
}	
</style>
</head>
<body>
	<div class="container">
	<div class="global-wrap" id="landing" style="clear:all;">		 
		<div class="toolbar web">
			<!-- <img src="NAS/static/assets/landing-logo-133.png" alt="AfricanLove.com" title="AfricanLove.com" class="landing-logo" /> -->
	<span class="header"></span>
		</div>
		<div class="page">
	<div class="promo promo-variable-background web">
		<form action="#" method="post" class="signup" id="registerForm" autocomplete="off">
			<div id="message"></div>
			<fieldset>
				<div class="register">
					<h1 class="title-promo"></h1>
				</div>
				<div class="form-row">
					<div class="form-label">
						<label for="name">Name </label>
					</div>
					<div class="form-field">
						<input type="text" maxlength="50"	name="name" id="name" value=""/>
					</div>
				</div>
				<div class="form-row">
					<div class="form-label">
						<label for="email">Email </label>
					</div>
					<div class="form-field">
						<input type="email" maxlength="50" name="email" id="email" value="" />
					</div>
				</div>
				<div class="form-row">
					<div class="form-label">
						<label for="telephone">Telephone </label>
					</div>
					<div class="form-field">
						<input type="text" maxlength="50" name="telephone" id="telephone" value="" />
					</div>
				</div>
				<div class="form-row">
					<div class="form-label">
						<label for="dob">Date of Birth </label>
					</div>
					<div class="form-field">
						<div class="row">
        <div class="col-sm-4">
	        <select name="DOBMonth" class="form-control">
		        <option> Month </option>
		        <option value="January">January</option>
		        <option value="Febuary">Febuary</option>
		        <option value="March">March</option>
		        <option value="April">April</option>
		        <option value="May">May</option>
		        <option value="June">June</option>
		        <option value="July">July</option>
		        <option value="August">August</option>
		        <option value="September">September</option>
		        <option value="October">October</option>
		        <option value="November">November</option>
		        <option value="December">December</option>
	        </select>
        </div>
        <div class="col-sm-4">
	        <select name="DOBDay" class="form-control">
		        <option> Day </option>
		        <option value="1">1</option>
		        <option value="2">2</option>
		        <option value="3">3</option>
		        <option value="4">4</option>
		        <option value="5">5</option>
		        <option value="6">6</option>
		        <option value="7">7</option>
		        <option value="8">8</option>
		        <option value="9">9</option>
		        <option value="10">10</option>
		        <option value="11">11</option>
		        <option value="12">12</option>
		        <option value="13">13</option>
		        <option value="14">14</option>
		        <option value="15">15</option>
		        <option value="16">16</option>
		        <option value="17">17</option>
		        <option value="18">18</option>
		        <option value="19">19</option>
		        <option value="20">20</option>
		        <option value="21">21</option>
		        <option value="22">22</option>
		        <option value="23">23</option>
		        <option value="24">24</option>
		        <option value="25">25</option>
		        <option value="26">26</option>
		        <option value="27">27</option>
		        <option value="28">28</option>
		        <option value="29">29</option>
		        <option value="30">30</option>
		        <option value="31">31</option>
	        </select>
        </div>
        <div class="col-sm-4">
	        <select name="DOBYear" class="form-control">
		        <option> Year </option>
		        <option value="1993">1993</option>
		        <option value="1992">1992</option>
		        <option value="1991">1991</option>
		        <option value="1990">1990</option>
		        <option value="1989">1989</option>
		        <option value="1988">1988</option>
		        <option value="1987">1987</option>
		        <option value="1986">1986</option>
		        <option value="1985">1985</option>
		        <option value="1984">1984</option>
		        <option value="1983">1983</option>
		        <option value="1982">1982</option>
		        <option value="1981">1981</option>
		        <option value="1980">1980</option>
		        <option value="1979">1979</option>
		        <option value="1978">1978</option>
		        <option value="1977">1977</option>
		        <option value="1976">1976</option>
		        <option value="1975">1975</option>
		        <option value="1974">1974</option>
		        <option value="1973">1973</option>
		        <option value="1972">1972</option>
		        <option value="1971">1971</option>
		        <option value="1970">1970</option>
		        <option value="1969">1969</option>
		        <option value="1968">1968</option>
		        <option value="1967">1967</option>
		        <option value="1966">1966</option>
		        <option value="1965">1965</option>
		        <option value="1964">1964</option>
		        <option value="1963">1963</option>
		        <option value="1962">1962</option>
		        <option value="1961">1961</option>
		        <option value="1960">1960</option>
		        <option value="1959">1959</option>
		        <option value="1958">1958</option>
		        <option value="1957">1957</option>
		        <option value="1956">1956</option>
		        <option value="1955">1955</option>
		        <option value="1954">1954</option>
		        <option value="1953">1953</option>
		        <option value="1952">1952</option>
		        <option value="1951">1951</option>
		        <option value="1950">1950</option>
		        <option value="1949">1949</option>
		        <option value="1948">1948</option>
		        <option value="1947">1947</option>
	        </select> 
        </div> 
        </div> 
					</div>
				</div>
				<div class="form-row validate-required">
					<div class="form-label">
						<label for="gender">Gender</label>
					</div>
					<div class="form-field">
						<select tabindex="" name="gender" id="gender" class="" onblur="validateFields('register','gender')">
							<option value=""> Select Gender</option>
							<option value="Male" >Male</option>
							<option value="Female" >Female</option>							
						</select>
					</div>
				</div>
				<div class="form-row">					
						<div class="g-recaptcha" data-sitekey="6LfnyB0UAAAAALY1t3Vu2XpI4XBohWYEmFhUTpva"></div>
					
				</div>				
				<div class="form-submit">
					<span class="btn-join"><input type="submit" id="RegisterSubmit" value="Submit" /></span>
					<div id="pleaseWait" class="pleaseWait" style="padding:5px;display:none">
						<div id="pleaseWaitSpinner"></div>
						<div class="pleaseWaitText">Please Wait...</div>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
	<div class="content row web">
		<div class="container testimonial">						
				<!-- <div class="col-0-5"></div>	
				<div class="col-2-5 last round"></div> -->
		</div>
		<div class="callouts web">					    
		    <!-- <div class="callout-child col-1 round"></div>
			<div class="callout-child col-2 round"></div> -->					    
		</div>
	</div>
	<div class="block-about web"></div>		
</div>
	<div class="footer"></div>	
</div>
</div>
<script type="text/javascript" src="skins/default/javascripts/build/worldsingles_jquery_footer.min16d7.js?2017-04-11-14-07"></script>
<script type="text/javascript">
$('#RegisterSubmit').click(function(){
    var name = $('#name').val();
    var email = $('#email').val();
    var telephone = $('#telephone').val();
    var dob = $('#dob').val();
    var gender = $('#gender').val();   
	$.ajax({
		type: "POST",
		url: "insert.php",
		cache: false,		
		data: {name : name, email : email, telephone : telephone, dob : dob, gender : gender},
		success: function(data)
		{
			$("#message").html(data);
			$('input[type="text"],select').val('');
		}
	});
	return false;
});
</script>
</body>
</html>