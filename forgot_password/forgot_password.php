<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scholar - Education is for all</title>

  <link rel="icon" type="image/x-icon" href="../assets/logo/scholar_logo.png">
  <link rel="stylesheet" href="../sign_up/sign_up.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></link>
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></link>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

    <style>
        a:link {
        text-decoration: none;
        }

        a:visited {
        text-decoration: none;
        color: #FFCC00;
        }

        a:hover {
        text-decoration: none;
        color: #FFCC00;
        }

        a:active {
        text-decoration: none;
        }
    </style>

    <script>
      (function () {
        'use strict';
        window.addEventListener('load', function () {
          var forms = document.getElementsByClassName('needs-validation');
          var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="../login/login.php"><i class="fa-solid fa-graduation-cap me-2"></i> <strong>SCHOLAR</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href = "../sign_up/sign_up.php";><i class="bi bi-house-fill me-1"></i> Back to login</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
<form class="needs-validation" method="post">
  <div class="container my-2">
    <strong style="font-size: 25px">RESET YOUR PASSWORD</strong>
    <hr style="height:2px;border-width:0;color:black;background-color:black">
    <div class="mb-3">
      <label for="exampleFormControlInput2" class="form-label">Email Address</label>
      <input type="email" class="form-control border-dark" name="email" id="email" placeholder="e.g. name@info.com" required>
      <span id="email_error"></span>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="d-grid">
      <button class="btn btn-warning" type="submit" name="submit" onclick="send_otp()">SEND OTP</button>
    </div>
  </div>
</form>
<?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "scholar";

      $con = mysqli_connect($servername,$username,$password,$database);

      if($con)
      {
          $msg = "";
      }
      else
      {
          $msg = "??? DATABASE SUCCESSFULLY NOT CONNECTED!";
      }
    ?>
    <?php echo $msg; ?>
    <?php
      if(isset($_POST["submit"]))
      {
        $emailadd = $_POST['email'];
      
        $query = "INSERT INTO verify_otp VALUES ('','$emailadd','')";
        $data = mysqli_query($con,$query);

        if($data)
        {
            $insmsg =  "";
        }
        else
        {
            $insmsg =  "??? DATA NOT INSERTED!";
        }
      }
    ?>
</body>
</html>