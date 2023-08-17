<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />

    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    <!-- header section starts  -->

    <header>
      <a href="#" class="logo"><i class="fas fa-leaf"></i>SCF</a>

      <nav class="navbar">
        <ul>
          <li><a href="./index.php">home</a></li>
          <li><a href="#about">about</a></li>
          <li><a href="#service">service</a></li>
          <li><a href="./project.php">project</a></li>
          <!-- <li><a href="#donate">donate</a></li> -->
          <li><a href="#post">post</a></li>
          <li><a href="./contactform.php">Contact</a></li>
        </ul>
      </nav>

      <div class="fas fa-bars"></div>
    </header>

    <!-- header section ends -->


  <section class="contact" id="contact">
      <h1 class="heading">
        <i class="fas fa-quote-left"></i> Contact Us
        <i class="fas fa-quote-right"></i>
      </h1>

      <div class="video-container">
        <video src="images/video.mp4" loop autoplay muted></video>
      </div>

      <iframe src=
            "https://maps.google.com/maps?f=q&amp;saddr=IKM+SUNGAI+PETANI&amp;source=s_d&amp;hl=en&amp;z=15&amp;output=embed&amp;refresh=1692267263&amp;hl=en" >
            </iframe>
            <div class="content Area" id="contentArea">
<div class="" id="">

<div class="row">
<div class=""><div class="" id="">
    

    <form class=" ContactForm whiteShadowContainer" target="_top" method="post" name="ContactForm" onsubmit="return check()" style="position:relative"><a name="sForm" id="sForm" style="display:none"></a><h3 class="thumbTitle">Contact Form</h3><div style="padding:3vw">

    <div class="form-group col-xs-12 col-sm-6">
    <label for="contact_name">Full Name</label>
    <input type="text" class="form-control" name="contact_name" value="" id="contact_name" placeholder="Full Name">
  </div>

		<div class="form-group col-xs-12 col-sm-6">
    <label for="contact_email">E-mail</label>
    <input type="text" class="form-control" name="contact_email" value="" id="contact_email" placeholder="E-mail">
  </div><input type="hidden" name="department" id="department" value="0">


	<div class="form-group col-xs-12">
    <label for="contact_message">Message</label>

	<textarea rows="7" name="contact_message" class="form-control" id="contact_message"></textarea>

    
    <div class="form-group col-xs-12">
        <button class="btn btn-primary" type="submit">Send Message</button>
    </div>


  </div>

    </section>

    </div>

</div>
 </div>


</div>


<!-- footer section starts  -->

<section class="footer">
      <div class="box-container">
        <div class="box">
          <a href="#" class="logo"><i class="fas fa-leaf"></i>SCF</a>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda
            possimus impedit voluptate fuga id sapiente perspiciatis amet eos
            esse iure.
          </p>
        </div>

        <div class="box">
          <h3 class="share">share</h3>
          <a href="#">facebook</a>
          <a href="#">twitter</a>
          <a href="#">instagram</a>
          <a href="#">github</a>
        </div>

        <div class="box">
          <h3 class="letter">newsletter</h3>
          <form action="">
            <input type="email" placeholder="enter your email" />
            <button type="submit" class="fas fa-paper-plane"></button>
          </form>
        </div>
      </div>

      <h1 class="credit">
        created by <span>Mr. Muhd Azman</span> | all rights reserved.
      </h1>
    </section>

    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="js/main.js"></script>




</body>
</html>