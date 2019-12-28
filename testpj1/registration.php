<?php
  require_once("connect.php");
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $passWord = $_POST['passWord'];
  $scripPassword = md5($passWord,true);
  $phoneNumber = $_POST['phoneNumber'];

  $stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, passWord, phoneNumber) value(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("s",$firstName, $lastName, $gender, $email, $scripPassword, $phoneNumber);
        $stmt->execute();
        $stmt->close();
        $conn->close();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Registration Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="panel panel-primary">
                  <div class="panel-heading text-center">
                    <h1>Registration Form</h1>
                  </div>
                  <div class="panel-body">
                      <form action="registration.php" method="post">
                          <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text"
                              class="form-control" name="firstName" id="firstName" placeholder="Nhập firstName">
                          </div>
                          <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text"
                              class="form-control" name="lastName" id="lastName" placeholder="Nhập lastName">
                          </div>
                          <div class="form-group">
                            <label for="gender">Gender</label>
                            <div>
                            <label for="male" class="radio-inline"><input type="radio" name="gender" value="m" id="male">Male</label>
                            <label for="female" class="radio-inline"><input type="radio" name="gender" value="f" id="female">Female</label>
                            <label for="others" class="radio-inline"><input type="radio" name="gender" value="o" id="others">Others</label>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text"
                              class="form-control" name="email" id="email" placeholder="Nhập Email">
                          </div>
                          <div class="form-group">
                            <label for="passWord">PassWord</label>
                            <input type="password"
                              class="form-control" name="passWord" id="passWord" placeholder="Nhập PassWord">
                          </div>
                          <div class="form-group">
                            <label for="phoneNumber">PhoneNumber</label>
                            <input type="number"
                              class="form-control" name="phoneNumber" id="phoneNumber" placeholder="Nhập Số Phone">
                          </div>
                          <input type="submit" value="Gửi Đăng ký" class="btn btn-primary">
                      </form>
                  </div>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>