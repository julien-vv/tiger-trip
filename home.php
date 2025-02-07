<?php
session_start();
$_SESSION['username'];
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="pages_css/home.css" />
  <title>Tiger Trip Home</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>

<body>

    <header id="homePage">
        <img src="images_home/home.jpg" id="imageHomePage" alt="Background HomePage">
        <h1 id="textHomePage">
            Hello, We are <span style="color:#4CAF50">Tiger Trip</span>.<br>
            We are student in Computer science engineer in APU.<br><br>
            <a href="#menu"  id="buttonHome" onmouseover="changeHomeButton1()" onmouseout="changeHomeButton2()" onclick="transitionPage()">
                View our project →
            </a>
        </h1>
    </header>
      <nav id="navbar" class="navbar sticky-top">
          <ul  id="menu">
              <li><a class="nav-link scrollto active" href="home.php">Home</a></li>
              <li><a class="nav-link scrollto" href="island.php">Islands</a></li>
              <li><a class="nav-link scrollto" href="city.php">Cities</a></li>
              <li><a class="nav-link scrollto" href="kl.php">Kuala Lumpur</a></li>
              <li><a class="nav-link scrollto" href="pages_user/login.php">Login</a></li>
              <li><a class="nav-link scrollto" href="pages_user/logout.php">Logout</a></li>
              <?php
             include "connection.php";

             if(isset($_SESSION['type']) && $_SESSION['type'] == 'Admin')
              echo "<li><a class='nav-link scrollto' href='pages_user/homeadmin.php'>Admin</a></li>";
              ?>
          </ul>
          <h3>Welcome <?php echo $_SESSION['username']; ?>!</h3>
          <img id="logo" src="images_home/logoTiger.png" alt="Tiger Logo">
      </nav>
  <main id="main">

    <h1 id="titleAboutUs">About us</h1>
    <div class="container marketing">

      <div class="row">
        <div class="col-lg-4">
          <img class="photoProfil" src="images_home/noah.png" alt="Noah profil">
          <h2>Noah Goulin</h2>
          <p>Throughout this project I was in charge of the database management with the creation of our databases on phpMyAdmin. So I was able to use this database via php to retrieve the data of the user to store them in a server. I also created the login page so that the user can connect. I worked a lot on the data management.</p>
        </div>
        <div class="col-lg-4">
          <img class="photoProfil" src="images_home/theo.png" alt="Théo profil">
          <h2>Théo Lim</h2>
          <p>On this project, I worked on the design and front which is the html and css to make the pages Home, Islands, Cities and Kuala Lumpur. I used images, gif and video (time-laps) to fill the website with content and animation. I also worked on the structure of the pages like how are we going to transmit our information and what will we share to the users. Then, I made the css of the login/register part to make it look better.</p>
        </div>
        <div class="col-lg-4">
          <img class="photoProfil" src="images_home/julien.jpg" alt="Julien profil">
          <h2>Julien Vieillevigne</h2>
          <p>I was multi-tasking on this project because I could work on different aspects. I helped to design the home page for the design that I was able to refine. I made the footeur, the menu, the feedback, I took care of the content of the site and I helped Noah to create the database.
              I was also the one who pooled the work that everyone in our team did to put it together.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Concept, <span class="text-muted">An added value.</span>
          </h2>
          <p class="lead">Our site is unique because it is made by students for students. The objective is to guide future foreign students to Malaysia so that they can make the most of their trip with the advice of alumni. This way it is easier to organize your trips! To inform you and to source our statements we have used articles from wikipedia and https://vivreenmalaisie.com.</p>
        </div>
        <div class="col-md-5">
          <img src="images_home/sitePresentation.png" alt="site presentation">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Cities, <span class="text-muted">Diverse and varied.</span></h2>
          <p class="lead">Malaysia has many different beautiful cities and villages. You will go from the Asian New-York to the village lost in the middle of the tea plantations. It is very interesting to understand the history of the country. That's why we have selected our top three cities to see!</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img src="images_home/cityPresentation.png" alt="City presentation">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Islands, <span class="text-muted">Paradise on earth.</span></h2>
          <p class="lead">This is not what is missing in Malaysia. On any side the sea is warm and has many islands with paradisiacal scenery. All nature and sandy beach lovers will love it. Moreover, it is a great sport for diving. There are many things to do and many islands to visit and that's why we're going to show you our favorites.</p>
        </div>
        <div class="col-md-5">
          <img src="images_home/islandPresentation.png" alt="Island presentation">
        </div>
      </div>

      <hr class="featurette-divider">


    </div>

    <div class="feedback_box" style="display: flex;">
      <form style="color: black;" id="contact_form">
        <h1 style="color: rgb(12, 91, 196); text-align: center; font-size: 60px;" id="feedback">Feedback</h1> 
        <div class="form-box">
          <input
            type="text"
            name="name"
            id="name"
            class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
            placeholder="Name"
            required
          />
        </div>
        <div class="form-box">
          <input
            type="email"
            name="email"
            id="email"
            class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
            placeholder="Email"
            required
          />
        </div>
        <div class="form-box">
          <textarea
            rows="4"
            name="message"
            id="message"
            class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
            placeholder="Message"
            required
          ></textarea>
        </div>
        <div class="text-center">
          <a  onclick="submit()" type="submit" class="btn tm-btn-submit ">Submit</a>
        </div>
      </form>
  </div>

    <footer>
      <div class="d-flex-center">
          <a href="https://www.linkedin.com/school/apumalaysia/?original_referer="><img class="footerImage" src="images_home/logoLinkedln.png" alt="Linkedln"></a>
          <img class="footerImage" src="images_home/logoDiscord.png" alt="Discord" onclick="alert('Our Discord pseudo is steroidi#9486')">
          <a href="https://github.com/steroidi884"><img class="footerImage" src="images_home/logoGithub.png" alt="Github"></a>
          <a href="https://www.instagram.com/explore/tags/malaisie/?hl=fr"><img class="footerImage" src="images_home/logoInsta.png" alt="Instagram"></a>
      </div><br>
      <img class="line" src="images_home/blueLine1.png" alt="line 1">
      <div class="divPartFooter">
        <h2 style="color:rgb(28, 141, 197)">Contact</h2>
        Fortune park, Persiaran Serdang Perdana, fortune park apartment, 43300 Seri Kembangan, Selangor
        <br><br>
        (+601) 7360 8582
        <br><br>
        Mon - Fri: 9:00 am - 6:00 pm
        <br>
        Closed on Saturdays, Sundays & Public Holidays
      </div><br>
      <img class="line" src="images_home/blueLine2.png" alt="line 2">
      <div class="divPartFooter">
        <br>NOAH GOULHIN, THEO LIM, JULIEN VIEILLEVIGNE <span style="color:rgb(28, 141, 197)">©2022</span>
      </div>
    </footer>

    <script src="home.js"></script>

  </main>
</body>

</html>