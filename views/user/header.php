<?php
session_start();
if (!empty($_SESSION)) {
  $name =  "Hello, " . $_SESSION["name"];
} else {
  $name = "Test-taking website";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>
 
<nav class="navbar navbar-expand-lg bg-light shadow-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><?php echo $name ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-5">
          <li class="nav-item me-5">
            <a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house-door"></i>Home</a>
          </li>

          <li class="nav-item dropdown me-5">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-bar-chart"></i>
              Level
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="test_level1.php">Level 1</a></li>
              <li><a class="dropdown-item" href="test_level2.php">Level 2</a></li>
              <li><a class="dropdown-item" href="test_level3.php">Level 3</a></li>
            </ul>
          </li>
          <li class="nav-item me-5">
            <?php if (empty($_SESSION)) { ?>
              <a class="nav-link active" aria-current="page" href="/views/user/login.html"><i class="bi bi-door-open"></i>
                Login
              </a>
            <?php } else { ?>
              <a class="nav-link active" aria-current="page" href="http://localhost/views/logout.php"><i class="bi bi-door-open"></i>
                Logout
              </a>
            <?php }  ?>
          </li>
          <li class="nav-item me-5">
              <?php  if (!empty($_SESSION)){?>
                    <a class="nav-link active" aria-current="page" href="test_history.php"><i class="bi bi-clock-history"></i>
                    Test history</a>
              <?php }?>
          </li>
          <li class="nav-item me-5">
              <?php if (!empty($_SESSION) && $_SESSION["privillege"]==1){?>
                    <a class="nav-link active" aria-current="page" href="../admin_page.php"><i class="bi bi-dpad"></i>

                   Admin page</a>
              <?php }?>
          </li>
        </ul>
        <form class="d-flex col-4 " role="search">
          <input style=""class="form-control me-2" type="search" placeholder="Search topic" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>