<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Login</title>

  <!-- css files -->
  <link rel="stylesheet" href="css/all.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/login.css" />
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/index1Res.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />


  <!-- js files- -->


  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/index.js"></script>
</head>

<body>
  <header>
    <?php include 'menu.inc.php'; ?>
  </header>
  <div class="main">
    <div class="loginForm">
      <h1 class="text-center text-dark">Login</h1>

      <?php
      if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyField") {
          echo '<div class="loginErrorMsg">
              <p id="errorMsg">Fill in all the empty fields</p>
  
            </div>';
        } else if ($_GET['error'] == 'sqlerror') {
          echo '<div class="loginErrorMsg">
              <p id="errorMsg">There is problem with the DB.</p>
  
            </div>';
        } else if ($_GET['error'] == 'wrongpassword') {
          echo '<div class="loginErrorMsg">
              <p id="errorMsg">Invalid username and password.</p>
  
            </div>';

            }
          }
        ?>
        <form action="includes/signin.inc.php" method="POST" onsubmit="return loginValidation();">
          <div class="form-input">
            <!-- <i class="fas fa-user"></i> -->
            <input type="text" id="userEmail" name="userEmail" placeholder="Enter Your Email/Username" />
            <label for="" id="email__label1"></label>
          </div>
          <div class="form-input">
            <!-- <i class="fas fa-lock"></i> -->
            <input type="password" id="userPassword" name="userPassword" placeholder="Enter Your Password" />
            <label id="pass__label1"></label>
          </div>
          
          <?php
        //	session_start();
        if(!session_id()) {
          session_start();
      }
					require_once __DIR__ . '/src/Facebook/autoload.php'; // download official fb sdk for php @ https://github.com/facebook/php-graph-sdk

					$fb = new Facebook\Facebook([
					  'app_id' => '519024735517232',
					  'app_secret' => '2a5442e9adc3eeea6da36b01eb545da8',
					  'default_graph_version' => 'v3.1',
					  ]);

					$helper = $fb->getRedirectLoginHelper();

					$permissions = ['email']; // optional

					try {
						if (isset($_SESSION['facebook_access_token'])) {
							$accessToken = $_SESSION['facebook_access_token'];
						} else {
					  		$accessToken = $helper->getAccessToken();
						}
					} catch(Facebook\Exceptions\FacebookResponseException $e) {
					 	// When Graph returns an error
					 	echo 'Graph returned an error: ' . $e->getMessage();

					  	exit;
					} catch(Facebook\Exceptions\FacebookSDKException $e) {
					 	// When validation fails or other local issues
						echo 'Facebook SDK returned an error: ' . $e->getMessage();
					  	exit;
					 }

					if (isset($accessToken)) {
						if (isset($_SESSION['facebook_access_token'])) {
							$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
						} else {
							// getting short-lived access token
							$_SESSION['facebook_access_token'] = (string) $accessToken;

						  	// OAuth 2.0 client handler
              $oAuth2Client = $fb->getOAuth2Client();
              
              //echo $oAuth2Client;

							// Exchanges a short-lived access token for a long-lived one
							$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);

							$_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;

							// setting default access token to be used in script
							$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
						}

						// redirect the user back to the same page if it has "code" GET variable
						if (isset($_GET['code'])) {
							header('Location: ./');
						}

						// getting basic info about user
						try {
							$profile_request = $fb->get('/me?fields=name,first_name,last_name,email');
              $profile = $profile_request->getGraphNode()->asArray();
              $user = $profile_request->getGraphUser();
              $_SESSION['name'] = $user->getField('name');
						} catch(Facebook\Exceptions\FacebookResponseException $e) {
							// When Graph returns an error
							echo 'Graph returned an error: ' . $e->getMessage();
							session_destroy();
							// redirecting user back to app login page
							header("Location: ./");
							exit;
						} catch(Facebook\Exceptions\FacebookSDKException $e) {
							// When validation fails or other local issues
							echo 'Facebook SDK returned an error: ' . $e->getMessage();
							exit;
						}

						// printing $profile array on the screen which holds the basic info about user
						print_r($user);

					  	// Now you can redirect to another page and use the access token from $_SESSION['facebook_access_token']
					} else {
      
						// replace your website URL same as added in the developers.facebook.com/apps e.g. if you used http instead of https and you used non-www version or www version of your website then you must add the same here
            $loginUrl = $helper->getLoginUrl('http://localhost/MediCare/Project%20Code/login.php', $permissions);
            echo '<div class="loginWith">';
            echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
            echo '</div>';



					}

?>
          <!-- <div class="loginWith">
            <a href='#' scope="public_profile,email" onlogin="checkLoginState();">Log in with Facebook</a >
          </div> -->
          <input
             class="btn btn-outline-dark "
             type="submit"
             name="submit"
             value="Login"
        />
        </form>
          <div class="forgot__pass">
            <a href="#">Forgot Password?</a>
      </div>
      
 
      <div class="form-footer">
        <a href="signup.php">Create An Account.</a>
      </div>
    </div>

    <script src="js/form-validation.js"></script>
  </body>
</html>

