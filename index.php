<?php 
/** 
 * Riley Childs's Web Development Portfolio
 * 
 * PHP version 7.4
 * 
 * @category Main_Pages
 * @package  Pages
 * @author   Riley Childs <riley.childs@yahoo.com>
 * @license  Attribution-ShareAlike 4.0 International (CC BY-SA 4.0)
 * @link     http://wh963069.ispot.cc/index.php
 */
$pageTitle = "Fullstack Developer";
require 'include/header.php';
?>

<main>
  <h2 class = "fade-in">Make a selection, get to know me better.</h2>
  <?php require 'include/navigation.php';?>

  <!--OPTIONS-->

  <!--Intro-->
  <div class="selected-option" id="intro">
    <h4 class = "fade-in">What would you like to know about me?</h4>
  </div>
  
  <!--About Me-->
  <div class="selected-option" id="aboutme">
    <h4>Your Friendly Neighborhood Fullstack Developer</h4>
    <div class="second-row">
      <img id="ec" src="images/euroCarve.jpg">
            <p class="paragraph-main scroll">I am a fullstack web developer 
              located in beautiful Vermont. For over twenty years,
               I have spent most of my time outside living the snowboarder life.
                When off the slopes, I always wanted to dissect and break down 
                everything I encoutner in my path.  
              <br><br>Ultimately, I turned to web development to satisfy this need.
              It all started when I began customizing my MySpace page with custom
              HTML and CSS made designs. Eventually, that lead to me taking more 
              classes in web development, further solidifying my developer skills. 
              Since then, web development and coding became some of the biggest 
              passions in my life.
            </p> 
    </div>
  </div>

  <!--Areas of Expertise-->
  <!--Image sources: https://devicon.dev/-->
  <div class="selected-option"  id="areas-of-expertise">
    <img class="language" src="https://tinyurl.com/6huwm662" />
    <img class="language" src="https://tinyurl.com/y2pu9scw" />
    <img class="language" src="https://tinyurl.com/ktbnbrrp" />
    <img class="language" src="https://tinyurl.com/2prwet54" />
    <img class="language" src="https://tinyurl.com/bxxsy6jp" />
  </div>

  <!--Projects-->
  <div class="selected-option"  id="projects">
    <div class="project">
      <p class="paragraph-main">
      <img class="project-image" src="images/projects/after3.png" alt="After 3">  
      A mockup site of a travel destination page. Included 
        are pages for each resort, a randomnly-generated movie of the week, an 
        AJAX powered quiz, and much more.<br><br>
        <a href= "http://wh963069.ispot.cc/projects/after3/index.php">
          Check this project out!
        </a> <br>
        <a href="https://github.com/roc2246/after3">Source Code</a> 
      </p>
    </div>
    <div class="project">
      <p class="paragraph-main">
        <img class="project-image" src="images/projects/theCondo.png" 
        alt="The Condo">
        An eCommerce site that sells snowboarding softgoods and hardgoods.<br><br>
        <a href="http://wh963069.ispot.cc/projects/eCommerce/index.php">
          Check this project out!
        </a> <br>
        <a href="https://github.com/roc2246/eCommerceMockup">Source Code</a> 
      </p>
    </div>
    <div class="project">
      <p class="paragraph-main">
        <img class="project-image" src="images/projects/reCRUD.png" 
        alt="Real Estate App">
        A web application that consumes a self-coded real esate API. CRUD 
        features are used to manage the listings.<br><br>
        <a href="http://wh963069.ispot.cc/projects/real_estate/index.php">
          Check this project out!
        </a> <br>
        <a href="https://github.com/roc2246/real_estate">Source Code</a> 
      </p>
    </div>
  </div>

  <!--Contact Me-->
  <div class="selected-option">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <form name="contact" method="post">
          <label for="email">Email</label>
          <input type="email" name="email">
          <br>
          <label for="subject">Subject</label>
          <input type="textbox" name="subject">
          <br>
          <label for="message">Message</label>
          <br>
          <textarea rows="15" cols="45" name="message"></textarea>
          <br>
          <button type="submit" value="Submit" name="submit" 
          onclick="submitForm(contact, 'index.php')">Submit</button>
          <h4 id="sendMssg"></h4>
            <?php 
            if (isset($_POST['submit'])) {
                $email = $_POST['email'];
                $subject = $_POST['subject'];
                $msg = $_POST['message']; 
                $msg = wordwrap($msg, 70);    

                $mailTo = "riley.childs@yahoo.com";
                $headers = "From: ". $email . "\r\n";
          
                mail($mailTo, $subject, $msg, $headers);
                echo "<script>alert('Email has been sent');</script>";
            }
            ?>
        </form>
      <script src = "validate.js"></script>
      </div>
    <div class="row justify-content-center">  
      <div class="page-header">
        <h4>Social Media</h4>
      </div>
    </div>
    <div class="row justify-content-center">
      <a href="http://www.linkedin.com/in/riley-childs-4b015b1a4">
        <img src="images/socialMedia/linkedIn.png" alt="LinkedIn">
      </a>
      <a href="https://github.com/roc2246">
        <img src="images/socialMedia/gitHub.png" alt="gitHub">
      </a>
  </div>
</div>
</div>

</main>

<script src = "script.js"></script>

<?php require "include/footer.php"?>
