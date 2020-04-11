
<html>
<title>Sign up</title>
<!-- Meta encoding -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">


  <!-- BOOTSTRAP CDN -->
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- BOOTSTRAP CDN END -->

<link rel="stylesheet" type="text/css" href="style.css">

<body background="signup wallpaper.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3" id="form">
        <center><b class="signup">Sign Up</b></center>
        <form method="POST" action="connect.php">
          <div class="form-group">
            <label>Full Name</label>
            <input type="text" class="form-control text" name="fullname" placeholder="Enter Your Full Name">

          </div>
            <div class="form-group">
              <label>E-mail</label>
              <input type="email" class="form-control text" name="email" placeholder="Enter Your E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="required">
            </div>

            <div class="form-group">
              <label>Password</label>
              <input type="Password" class="form-control text" name="password" placeholder="Enter Your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="required">
            </div>
          
            <div class="form-group">
              <label>Date Of Birth</label>
              <input type="Date" class="form-control text" name="dob">
            </div>
            <div class="form-group">
              <label>Select Gender</label>
              <select name="gender" class="form-control text">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
              </select>
            </div>   
            <div class="form-group">
              <input type="submit" class="btn btn-primary" name="Submit">
              <!--<input type="reset" class="btn btn-danger" name="Reset">-->
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
  </html>