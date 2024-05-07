<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/main.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
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
<!-- phpdata store of resume -->
<?php

include('connection.php');

// Sanitize input data
$firstname = mysqli_real_escape_string($con, $_REQUEST['firstname']);
$middlename = mysqli_real_escape_string($con, $_REQUEST['middlename']);
$lastname = mysqli_real_escape_string($con, $_REQUEST['lastname']);
$designation = mysqli_real_escape_string($con, $_REQUEST['designation']);
$address = mysqli_real_escape_string($con, $_REQUEST['address']);
$Email = mysqli_real_escape_string($con, $_REQUEST['email']);
$phno = mysqli_real_escape_string($con, $_REQUEST['phoneno']);
$summary = mysqli_real_escape_string($con, $_REQUEST['summary']);
$acti = mysqli_real_escape_string($con, $_REQUEST['achieve_title']);
$acdesc = mysqli_real_escape_string($con, $_REQUEST['achieve_description']);
$exp_title = mysqli_real_escape_string($con, $_REQUEST['exp_title']);
$exp_organization = mysqli_real_escape_string($con, $_REQUEST['exp_organization']);
$exp_location = mysqli_real_escape_string($con, $_REQUEST['exp_location']);
$exp_start_date = mysqli_real_escape_string($con, $_REQUEST['exp_start_date']);
$exp_end_date = mysqli_real_escape_string($con, $_REQUEST['exp_end_date']);
$exp_description = mysqli_real_escape_string($con, $_REQUEST['exp_description']);
$edu_school = mysqli_real_escape_string($con, $_REQUEST['edu_school']);
$edu_degree = mysqli_real_escape_string($con, $_REQUEST['edu_degree']);
$edu_city = mysqli_real_escape_string($con, $_REQUEST['edu_city']);
$edu_start = mysqli_real_escape_string($con, $_REQUEST['edu_start_date']);
$edu_end = mysqli_real_escape_string($con, $_REQUEST['edu_end_date']);
$edu_description = mysqli_real_escape_string($con, $_REQUEST['edu_description']);
$proj_title = mysqli_real_escape_string($con, $_REQUEST['proj_title']);
$proj_link = mysqli_real_escape_string($con, $_REQUEST['proj_link']); 
$proj_description = mysqli_real_escape_string($con, $_REQUEST['proj_description']);
$skill = mysqli_real_escape_string($con, $_REQUEST['skills']);

// SQL query
$sql = "INSERT INTO `resume_details`(
    `firstname`, `middlename`, `lastname`, `designation`, `address`, `email`, `phoneno`, `summary`, 
    `achive_title`, `achive_description`, `exp_title`, `exp_organization`, `exp_location`, `exp_start_date`, 
    `exp_end_date`, `exp_description`, `edu_school`, `edu_degree`, `edu_city`, `edu_start_date`, `edu_end_date`, 
    `edu_description`, `proj_title`, `proj_link`, `proj_description`, `skills`
) VALUES (
    '$firstname','$middlename','$lastname','$designation','$address','$Email','$phno','$summary',
    '$acti','$acdesc','$exp_title','$exp_organization','$exp_location','$exp_start_date','$exp_end_date',
    '$exp_description','$edu_school','$edu_degree','$edu_city','$edu_start','$edu_end',
    '$edu_description','$proj_title','$proj_link','$proj_description','$skill'
)";

// Execute query
$results = mysqli_query($con, $sql);

// Check if query executed successfully
if($results) {
    echo '<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Logged Out!</h4>
    <p>You have been successfully logged out</p>
    <hr>
    <p class="mb-0">Your data has been stored successfully!</p>
    </div>';
} else {
    // Print error message
    echo '<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Error!</h4>
    <p>Failed to insert data into the database. Error: ' . mysqli_error($con) . '</p>
    </div>';
}
?>

<!-- datastore end -->
 <!-- quote -->
 <figure class="text-center">
      <blockquote class="blockquote">
        <p>“The simpler you say it, the more eloquent it is.”</p>
      </blockquote>
      <figcaption class="blockquote-footer">
        <cite title="Source Title">August Wilson.</cite>
      </figcaption>
    </figure>
<!-- fotter -->
<div class="fotterr">
            <div class="fotter">
              <footer class="bd-footer py-5 py-md-5 mt-0 bg-body-tertiary">
                <div class="container py-4 py-md-5 px-4 px-md-3 text-body-secondary">
                  <div class="row">
                    <div class="col-lg-3 mb-3">
                      <a
                        class="d-inline-flex align-items-center mb-2 text-body-emphasis text-decoration-none"
                        href="/"
                        aria-label="Bootstrap"
                      >
                        <span class="fs-5">Tequed-Labs Resume Generator</span>
                      </a>
                      <ul class="list-unstyled small">
                        <li class="mb-2">
                          Goal-Oriented Sales Associate With a Proven Track Record of
                          Success.
                        </li>
                      </ul>
                    </div>
                    <div class="col-6 col-lg-2 offset-lg-6 mb-3">
                      <h5>Links</h5>
                      <ul class="list-unstyled">
                        <li class="mb-2">
                          <a href="/frontend/home/index.html">Home</a> <br>
                          <a href="/frontend/data/login.html">Login</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              
              </footer>
            </div>
          </div>


</body>
</html>

