<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>

<body>
  <!-- nav -->

  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="/media/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top" style="overflow: auto" />
        tequedlabs resume builder

      </a>
    </div>
  </nav>




  <!-- PHP VERIFY -->
  <?php
  include('connection.php');
  $email = $_POST['email'];
  $password = $_POST['password'];

  $email = stripslashes($email);
  $password = stripslashes($password);

  $sql = "SELECT * FROM `signinq` WHERE email = '$email' AND password='$password' ";
  $results = mysqli_query($con, $sql);
  $row = mysqli_fetch_row($results);
  $count = mysqli_num_rows($results);

  if ($count == 1) {
    $login=true;
    echo '<div class="popup my-5">
    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Welcome ' . $_POST['email'] . '</h4>
    <p>you have succefully logged in</p>
    <hr>
    <div class="alert alert-success" role="alert">
   <a href="/frontend/resumegen/resume.html" class="alert-link">Click here to build your resume</a>. 
    </div></div>';
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['username']=$email;

  } else {
    echo '<div class="alert alert-danger" role="alert" >
    You have entered wrong email or password, <br>if you dont have an account<a href="\frontend\data\signup.html" class="alert-link">click here</a> to signup
  </div>';
  }
  ?>
  <!-- button for resume  generator -->

  <!-- try22 -->
  <div class="fotter">
    <footer class="bd-footer py-5 py-md-5 mt-5 bg-body-tertiary">
      <div class="container py-4 py-md-5 px-4 px-md-3 text-body-secondary">
        <div class="row">
          <div class="col-lg-3 mb-3">
            <a class="d-inline-flex align-items-center mb-2 text-body-emphasis text-decoration-none" href="/" aria-label="Bootstrap">
              <span class="fs-5">Tequed-Labs Resume Generator</span>
            </a>
            <ul class="list-unstyled small">
              <li class="mb-2">Goal-Oriented Sales Associate With a Proven Track Record of Success.</li>


            </ul>
          </div>
          <div class="col-6 col-lg-2 offset-lg-6 mb-3">
            <h5>Links</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="/frontend/data/signup.html">Signin</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
</body>

</html>