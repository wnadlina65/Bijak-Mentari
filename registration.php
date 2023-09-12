<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Bijak Mentari Shop - Login</title>
    <meta name="author" content="Codeconvey" />
    
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/BM-logo.png">
    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <!-- Stylish Login Page CSS -->
    <link rel="stylesheet" href="login-page.css">
    
    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" href="demo.css" />
	
</head>
<body> 
		
<!--<div class="ScriptTop">
    <div class="rt-container">
        <div class="col-rt-4" id="float-right">
 
            <-- Ad Here ->
            
        </div>
        <div class="col-rt-2">
            <ul>
                <li><a href="https://codeconvey.com/stylish-login-page-in-html-with-css-code" title="Back to Tutorial Page to Download"> Back to Tutorial </a></li>
            </ul>
        </div>
    </div>
</div>-->

<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<!--<h1>Welcome to Computer Club System</h1>-->
                <!--<p>Welcome to Computer Club System</p>-->
                <img src="bm-logo.png" alt="Bijak Mentari">
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
        <div class="col-rt-12">
            <div class="Scriptcontent">

                <!-- Stylish Login Page Start -->
                <form class="codehim-form" action="login.php" method="post">
                    <div class="form-title">
                        <div class="user-icon gr-bg">
                             <i class="fa fa-user"></i>
                        </div>
                        <h4> Welcome, please login first.</h4>
                    </div>
                    <label for="username"><i class="fa fa-user"></i> Email:</label>
                    <input type="text" id="email" class="cm-input" placeholder="Enter your email address" required>
        
                    <label for="pass"><i class="fa fa-lock"></i> Password:</label>
                    <input id="pass" type="password" class="cm-input" placeholder="Enter your password" required>
                    <button type="submit" class="btn-login  gr-bg">Login</button>
                    <br>
                    <p class="form__text">
                        Don't have an account? 
                        <a class="form__link" href="signup.html" id="linkCreateAccount">Sign up here.</a>
                    </p>
                </form>
              <!-- Stylish Login Page End -->
    		
    		</div>
		</div>
    </div>
</section>

<script>
    
</script>
<!-- Analytics -->
</body>
</html>