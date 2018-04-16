<!DOCTYPE html>
<html>
<head>
  <title>Babatunde</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Babatunde</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="jumbotron" style="text-align: center;">
      <h1>Welcome to My Page</h1>
      <p>Time is:
        <?php
        echo date("Y/m/d");
        ?>
        <?php
        echo "". date("h:i:sa");
        ?>
      </p>
    </div>
    <p>Thanks or visiting.</p>
  </div>
</body>
</html>
