<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="login.css">
  <link rel="icon" href="logo.png"> 
  <title>Login Page</title>
  <script>
    function validateInput() {
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      
      if (/^[a-zA-Z0-9]*$/.test(username) == false) {
        alert("Username can only contain letters and numbers.");
        return false;
      }
      
      if (/^[a-zA-Z0-9]*$/.test(password) == false) {
        alert("Password can only contain letters and numbers.");
        return false;
      }
      
      return true;
    }
  </script>
  </head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="loginSave.php" method="get" onsubmit="return validateInput()">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" id="username" name="UserName" maxlength="20" autocomplete="off" required>
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="password" name="Pass" minlength="6" maxlength="8" autocomplete="off" required>
                        <label for="">Password</label>
                    </div>
                    <button type="submit">Log in</button>
                    <div class="register">
                        <p>Don't have a account :&nbsp;&nbsp;<a href="CreateAcc.php">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
