<?php

include_once 'user.php';
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $security_question = $_POST['security_question'];
    $security_answer = $_POST['security_answer'];
    $password = $_POST['password'];

$userinsert = new user();
$userinsert->userSignup($name, $email, $mobile, $security_question, $security_answer, $password);


echo "<script>alert('Successfully logined')</script>";
echo "<script>window.location.href='login.php' </script>";
}
?>


<!DOCTYPE HTML>
<html>
<head>


<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Account :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<style>input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
 </style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---fonts-->
<!--script-->
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
<!--script-->
</head>
<body>
<?php include 'navbar.php';?>
		<!---login--->
			<div class="content">
				<!-- registration -->
				<div class="content">
<!-- registration -->
    <div class="main-1">
        <div class="container">
            <div class="register">
                <form action="" method="POST" onsubmit="return(validation());"> 
                    <div class="register-top-grid">
                    <h3>personal information</h3>
                        <h5 class="error-msg">* mandatory fields</h5>
                        <div>
                            <span>Name<label>*</label></span>
                            <input type="text" name="name" id="name" required> 
                        </div>
                        <div>
                            <span>Email Address<label>*</label></span>
                            <input type="email" name="email" id="email" required> 
                        </div>
                        <div>
                            <span>Security Question<label>*</label></span>
                            <select id="security-question" name="security_question"> 
                                <option value="Please select security question">Please select security question</option>
                                <option value="What was your childhood nickname?">What was your childhood nickname?</option>
                                <option value="What is the name of your favourite childhood friend?">What is the name of your favourite childhood friend?</option>
                                <option value="What was your favourite place to visit as a child?">What was your favourite place to visit as a child?</option>
                                <option value="What was your dream job as a child?">What was your dream job as a child?</option>
                                <option value="What is your favourite teacher's nickname?">What is your favourite teacher's nickname?</option>
                            </select>
                        </div>
                        <div>
                            <span>Mobile  <label>*</label></span>
                            <input type="number"  onKeyPress="if(this.value.length==11) return false;" ; 
                         name="mobile" id="mobile" required> 
                        </div>
                        <div id="answer-signup">
                            <span>ANSWER<label>*</label></span>
                            <input type="text" name="security_answer" id="answer"> 
                        </div>
                        <div class="clearfix"> </div>
                        <a class="news-letter" href="#">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
                        </a>
                        </div>
                        <div class="register-bottom-grid">
                            <h3>login information</h3>
                                <div>
                                <span>Password<label>*</label></span>
                                <input type="password" name="password" id="password" required>
                                <span id="error-password"> (Password should be atleast one upper case one lower case (min-8 characters))</span>
                                </div>
                                <div>
                                <span>Confirm Password<label>*</label></span>
                                <input type="password" name="repassword" id="repassword" required>
                                </div>
                        </div>
                <div class="clearfix"> </div>
                <div class="register-but">
				<input type="submit" id="signup" value="submit" name="submit">
                        <div>

						
						</div>
                        <div class="error-msg"></div>
                        <div class="clearfix"> </div>
                    </form>
                </div>
            </div>
            </div>
    </div>

			</div>


	<script>
        $('#security-question').click(function(){
            var value=$(this).val();
            if (value!="Please select security question")
            {
                $('#answer-signup').show();
            }
            else{
                $('#answer-signup').hide();
            }
        });
        $('#password').focus(function(){
            $('#error-password').show().fadeOut(7000);
        });
        function validation(){
            var name=($('#name').val()).trim();
            var email=($('#email').val()).trim();
            var mobile=($('#mobile').val()).trim();
            var security_question=($('#security-question').val()).trim();
            var answer=($('#answer').val()).trim();
            var password=($('#password').val()).trim();
            var repassword=($('#repassword').val()).trim();
            var regName=/^([a-zA-Z]+\s?)*$/;
            var regPassword=/^(?!.* )(?=.*\d)(?=.*[a-zA-Z]).{8,16}$/;
            var regMobile=/^(0)?[1-9]{1}[0-9]{9}$/;
            var regEmail=/^[a-zA-Z0-9.-]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/;
            if (name=="" || email=="" || mobile=="" || security_question=="" || answer=="" || password=="" || repassword=="") {
                alert("All fields are mandatory including security question and answer kindly choose one question and answer that!");
                return false;
            }
            else if (!(name.match(regName))){
                alert("Please enter valid name");
                return false;
            }
            else if (!(password.match(regPassword))) {
                alert("password criteria does not matched");
                return false;
            }
            else if (!(email.match(regEmail))) {
                alert("email criteria doesn't match");
                return false;
            }
            else if (!(mobile.match(regMobile))) {
                alert("Please enter valid mobile number");
                return false;
            }
            else if (password!=repassword) {
                alert("please enter same password and repassword");
                return false;
            }
            else if (!isNaN(answer)) {
                alert("please enter valid answers i.e, only digits are not allowed");
                return false;
            }
            return true;
        }

        $("signup").click(function(){

        })
    </script>
<!-- login -->
<?php include 'footer.php';?>
</body>
</html>