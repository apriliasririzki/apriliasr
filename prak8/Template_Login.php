<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<link rel="stylesheet" type="text/css" href="login.css">
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class = "container">
    <div class="wrapper">
        <form action="pemroses_template.php" method="post" name="Login_Form" class="form-signin">       
            <h3 class="form-signin-heading">Selamat Datang</h3>
              <hr class="colorgraph"><br>
              <center>
              <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" autocomplete="off" /><br>
              <input type="password" class="form-control" name="password" placeholder="Password" required=""/><br>         
              <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>
              </center>            
        </form>         
    </div>
</div>
</body>
</html>