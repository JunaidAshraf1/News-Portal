  <?php include 'header.php' ; ?> 

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="contact.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<!-- card code -->
<br><br>
<!-- person 1 -->

<div class="card">
  <h2 style="text-align:center">Profile</h2>
  <img src="download.png" alt="John" style="width:100%">
  <h4>Akram Sardar</h4>
  <p class="title">Student of</p>
  <p>Budge Budge Institute of Technology</p>
  <div style="margin: 24px 0;">
    <a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a> 
    <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>  
    <a href="https://linkedin.com/"><i class="fa fa-linkedin"></i></a>  
    <a href="https://facebook.com/"><i class="fa fa-facebook"></i></a> 
 </div>
 <!-- <p><button>Contact</button></p> -->
</div>
<!-- person 2 -->
<div class="card">
  <h2 style="text-align:center">Profile</h2>
  <img src="download.png" alt="John" style="width:100%">
  <h4>Akram Ali Mondal</h4>
  <p class="title">Student of</p>
  <p>Budge Budge Institute of Technology</p>
  <div style="margin: 24px 0;">
    <a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a> 
    <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>  
    <a href="https://linkedin.com/"><i class="fa fa-linkedin"></i></a>  
    <a href="https://facebook.com/"><i class="fa fa-facebook"></i></a> 
 </div>
 <!-- <p><button>Contact</button></p> -->
</div>

<!-- person 3 -->
<div class="card">
  <h2 style="text-align:center">Profile</h2>
  <img src="download.png" alt="John" style="width:100%">
  <h4>Pallavi Sharma</h4>
  <p class="title">Student of</p>
  <p>Budge Budge Institute of Technology</p>
  <div style="margin: 24px 0;">
    <a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a> 
    <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>  
    <a href="https://linkedin.com/"><i class="fa fa-linkedin"></i></a>  
    <a href="https://facebook.com/"><i class="fa fa-facebook"></i></a> 
 </div>
 <!-- <p><button>Contact</button></p> -->
</div>

<!-- person 4 -->
<div class="card">
  <h2 style="text-align:center">Profile</h2>
  <img src="download.png" alt="John" style="width:100%">
  <h4>Imrana Eyasmin</h4>
  <p class="title">Student of</p>
  <p>Budge Budge Institute of Technology</p>
  <div style="margin: 24px 0;">
    <a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a> 
    <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>  
    <a href="https://linkedin.com/"><i class="fa fa-linkedin"></i></a>  
    <a href="https://facebook.com/"><i class="fa fa-facebook"></i></a> 
 </div>
 <!-- <p><button>Contact</button></p> -->
</div>

<!-- person 5 -->
<div class="card">
  <h2 style="text-align:center">Profile</h2>
  <img src="download.png" alt="John" style="width:100%">
  <h4>Bikash Sahu</h4>
  <p class="title">Student of</p>
  <p>Budge Budge Institute of Technology</p>
  <div style="margin: 24px 0;">
    <a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a> 
    <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>  
    <a href="https://linkedin.com/"><i class="fa fa-linkedin"></i></a>  
    <a href="https://facebook.com/"><i class="fa fa-facebook"></i></a> 
 </div>
<!--  <p><button>Contact</button></p> -->
</div>


<!-- map and message code -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  <h2>Don't afraid to contact us</h2>
<br><br>
<div class="container">

  <div style="text-align:center">
    <h2>Contact Us</h2>
    <!-- <p>Swing by for a cup of coffee, or leave us a message:</p> -->
  </div>
  <div class="row">
    <div class="column">
      <div id="map" style="width:50%;height:500px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d117990.3441534329!2d88.09979510254497!3d22.459182985974618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x39f830fc6fffffff%3A0x880d852ade5959b!2sbbit!3m2!1d22.4591981!2d88.16983549999999!5e0!3m2!1sen!2sin!4v1523936487261" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

      </div>
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="West Bengal">West Bengal</option>
          <option value="Delhi">Delhi</option>
          <option value="Mumbai">Mumbai</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

</body>
</html>

  <?php include 'footer.php' ; ?> 
