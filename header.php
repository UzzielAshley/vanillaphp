<head>
  <meta charset="utf-8">
  <title>Simple Blog</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  <nav style="position: fixed !important; z-index: 2;background-color: #2a6aca !important;">
  <div class="nav-wrapper">
    <a href="#" class="brand-logo">MiniBlog</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <?php if(isset($_SESSION['uname'])){
        ?><li><a href="#">Hi! <?php echo $_SESSION['uname'];?></a></li>
        <li><a href="home.php">Home</a></li>
        <li><a href="logout.php">Logout</a></li>
        <?php
      }else{
        ?><li><a href="index.php">Login</a></li><?php
      } ?>



    </ul>
  </div>
</nav>
