<!DOCTYPE html>

<html lang="en">
<head>
        <title>Login | Signup InfoX 2016</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Dosis:100,300,400,700,900,300italic,400italic,700italic,900italic" type="text/css" media="all">

		<link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/styles.css" type="text/css">
	<script src="js/jquery-1.11.0.min.js"></script>	
        
    </head>
	<style>
	#passcheck{
	color:red;
	}
	</style>
    <body style="background-color:#000000">
       <?php include'includes/general/header.php'?>
	   <div class="signup" style="background-image: url(img/back.png)">
            <div class="middle">
                <div class="signup-widget widget">
                    <div class="widget-header">
                        <table>
                            <tbody><tr>
                                <td id="tab-login">
                                    <a href="login.php">
                                        Login
                                    </a>
                                </td>
                                <td><a href="index.html"><img width="150px" src="img/logo-infox.png"></a></td>
                                <td id="tab-signup" class="current">
                                    <a href="signup.php">Register</a>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                    <div class="widget-body">
                        <form id="signup-form" method="post" action="#"><!--><!-->
                            <input type="email" name="email" placeholder="Email">
                            <input type="password" name="password" placeholder="Password" id="txtpass">
                            <input type="password" name="confirm_password" placeholder="Re-Type Password" id="txtpassconf" onkeyup="checkPass()">
                            <div id="password-characters"></div>
			    <div id="passcheck"></div>
                            <button id="submit" type="submit"><span class="ui-icon"></span>&nbsp;&nbsp;Sign Up</button>
                        </form>
                    </div>
                </div>
            
         
                
            </div>
        </div>

<script>
function checkPass() {
    
    var password = $("#txtpass").val();
    var confirmPassword = $("#txtpassconf").val();

    if (password != confirmPassword)
        $("#passcheck").html("Passwords do not match!");
    else
        $("#passcheck").html("Passwords match.");
}     
</script>

            
   </body></html>
