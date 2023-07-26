<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <title>Sign Up</title>

            <link rel="stylesheet" href="Signup.css">

            <script src="Signup.js"></script>
            
      </head>
      <body>
            
            <div class="container">
                  <form id="form" form action="insert.php" method="post"> >
                    <h1>Sign Up</h1>                    
                    <div class="input-control">
                      <label for="username">First Name</label>
                      <input id="Fname" name="Fname" type="text" />
                      <div class="error"></div>
                    </div>
                    <div class="input-control">
                        <label for="username">Last Name</label>
                        <input id="Lname" name="Lname" type="text" />
                        <div class="error"></div>
                      </div>
                      <div class="input-control">
                        <label for="username">Date Of Birth</label>
                        <input id="DOB" name="DOB" type="date" />
                        <div class="error"></div>
                      </div>
                    <div class="input-control">
                      <label for="email">Email</label>
                      <input id="email" name="email" type="text" />
                      <div class="error"></div>
                    </div>
                    <div class="input-control">
                        <label for="username">Phone NO.</label>
                        <input id="phone" name="phone" type="tel" />
                        <div class="error"></div>
                      </div>
                      <div class="input-control">
                        <label for="username">Username</label>
                        <input id="username" name="username" type="text" />
                        <div class="error"></div>
                      </div>
                    <div class="input-control">
                      <label for="password">Password</label>
                      <input id="password" name="password" type="password" />
                      <div class="error"></div>
                    </div>
                    <div class="input-control">
                      <label for="password2">Confirm Password</label>
                      <input id="password2" name="password2" type="password" />
                      <div class="error"></div>
                    </div>
                    <div class="btn">
                      <button type="submit">Create Account</button>
                    </div>
                    <div class="footer"><p> Have an Account?</p> <a href="Login.html">Login Here</a></div>
                    
                  </form>
                </div>
            
      </body>