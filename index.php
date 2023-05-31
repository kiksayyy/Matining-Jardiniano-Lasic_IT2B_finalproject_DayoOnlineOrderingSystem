
<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="start">

        <h2>Login</h2>
        
        <form method="post" action="login.php">
            <div class="signins">
          
                  <div class="signin">
                    <input type="text" name='username' id='username'required>
                    <span></span>
                    <label>Username</label>
                  </div>
                
                  <div class="signin">
                    <input type="password" name='password'id='password'required>
                    <span></span>
                    <label>Password</label>
                  </div>

                 
                
            <input type="submit" value="Login">
    
            </div>
        </form>
        <div class="already">
                <button onclick="redirectToRegister()" id="alreadys">Create Account</button>
            </div>
        </div>

       <script>
          function redirectToRegister() {
    window.location.href = "loginform.php";
}
       </script>

</body>
</html>