<html>
    <link rel="stylesheet" href="summary.css">
    <head><title>Summary Page</title>
    </head>
    <body>
            <nav class="navbar">
      <div class="navbar__container">
        <a href="#home" id="navbar__logo">BAHA</a>
        <div class="navbar__toggle" id="mobile-menu">
          <span class="bar"></span> <span class="bar"></span>
          <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
          <li class="navbar__item">
            <a href="donation.html" class="navbar__links" id="about-page">Donate</a>
          </li>
          <li class="navbar__item">
            <a href="AboutUs.html" class="navbar__links" id="services-page">About Us</a>
          </li>
          <li class="navbar__btn">
            <a href="index.html" class="button" id="signup"><span>Home</span></a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="hero">
    <b class="hero__heading"><span>Summary Page</span><br></b>

    <br>

    <div class="hero__container">
        <div class="hero__description">

<?php

    $fullname = $_GET["fullname"];
    echo '<span class= "hero__description1">Fullname: </span>' . $fullname;
    echo "<br>";

    $username = $_GET["username"];
    echo '<span class= "hero__description1">Username: </span>' . $username;
    echo "<br>";

    $contact = $_GET["contact"];
    echo '<span class= "hero__description1">Contact Number: </span>' . $contact;
    echo "<br>";

    $email = $_GET["email"];
    echo '<span class= "hero__description1">Email: </span>' . $email;
    echo "<br>";

    $psw = $_GET["psw"];
    echo '<span class= "hero__description1">Password: </span>' . $psw;
    echo "<br>";

?>

</div>
</div>
</div>
</body>
</html>