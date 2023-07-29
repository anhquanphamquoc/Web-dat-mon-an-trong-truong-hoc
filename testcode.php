<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Đăng ký và xóa tài khoản</title>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="./css/css_template/register.css">
</head>
<body>
    <?php
        require_once "includes/dbconfig.php";
        require_once "includes/functions.php";
        // Xử lý đăng ký tài khoản ở đây (nếu cần)
    ?>
  <!-- Giao diện đăng ký tài khoản -->
  <div class="main-container">
    <div class="main-forms">
      <div class="signup-form">
        <form class="sign-back" action="" method="">
          <h1>Sign Up</h1>
          <div class="signup-row">
            <i class="fa fa-user"></i>
            <input type="text" name="username" placeholder="USERNAME">
          </div>
          <div class="signup-row">
            <i class="fa fa-key"></i>
            <input type="password" name="password" placeholder="PASSWORD">
          </div>
          <div class="form-bottom">
            <div class="remember">
              <input type="radio" name="role" value="student" required> Student
              <input type="radio" name="role" value="admin" required> Admin
            </div>
          </div>
          <div class="signup-row">
            <a href="#" onclick="confirmDelete()">
              <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
              <div style="font-size: 30px;"><i>Xóa tài khoản</i></div>
            </a>
            <br>
            <a href="#" onclick="registerAccount()">
              <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
              <div style="font-size: 30px;"><i>Đăng ký</i></div>
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Start Scripts -->
  <script src="https://use.fontawesome.com/7dddae9ad9.js"></script>
  <script src="./js/register.js"></script>
  <!-- End Scripts -->
</body>
</html>