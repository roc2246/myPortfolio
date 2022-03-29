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
  <!--Navigation-->
  <?php require 'include/navigation.php';?>

  <!--OPTIONS-->

  <!--Intro-->
  <div class="selected-option">
    <h2 class = "fade-in">What would you like to know about me?</h2>
  </div>
  
  <!--About Me-->
  <div class="selected-option">
    <h4>Your Friendly Neighborhood Fullstack Developer</h4>
    <div class="about-me-row">
      <img class="about-me-image" src="images/euroCarve.jpg" alt="euroCarve">
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
  <div class="selected-option">
    <div id="areas-of-expertise">
      <img class="language" src="https://tinyurl.com/6huwm662" alt="HTML 5"/>
      <img class="language" src="https://tinyurl.com/y2pu9scw" alt="CSS 3"/>
      <img class="language" src="https://tinyurl.com/ktbnbrrp" alt="JavaScript"/>
      <img class="language" src="https://tinyurl.com/2prwet54" alt="MySQL"/>
      <img class="language" src="https://tinyurl.com/bxxsy6jp" alt="PHP"/>
    </div>  
  </div>

  <!--Projects-->
  <div class="selected-option">
    <div id="project-flex-container">
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
  </div>

  <!--Contact Me-->
  <div class="selected-option">
    <form name="contact" method="post">
      <!--Email-->
      <label for="email">Email</label>
      <input type="email" name="email" id="email"><br>
      <!--Subject-->
      <label for="subject">Subject</label>
      <input type="text" name="subject" id="subject"><br>
      <!--Message-->
      <label for="message">Message</label><br>
      <textarea rows="15" cols="45" name="message" id="message"></textarea><br>
      <!--Submit Button-->
      <button type="submit" value="Submit" name="submit" 
          onclick="submitForm(contact, 'index.php')">Send Message</button>
      <h4 id="sendMssg"></h4>
      <!--PHP Code to Send Email-->
      <?php require 'include/sendEmail.php';?>
    </form>
    <!--Form Validation-->
    <script src = "script/validate.js"></script>
    <!--Social Media Links-->
    <div id="social-media">
      <h4>Social Media</h4>
        <div id="SM-icons">
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

<script src = "script/script.js"></script>

<?php require "include/footer.php"?>
