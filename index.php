<?php $pageTitle = "Fullstack Developer";?>
<?php include 'include/header.php';?>
<main>
<h2 class = "fade-in1">Make a selection, get to know me better</h2>
<nav>
  <ul style="list-style-type:none;">
    <li style="cursor: pointer;" onclick="toggleOption(0, 1, 2, 3);">About Me</li>
    <li style="cursor: pointer;" onclick="toggleOption(1, 0, 2, 3);">Areas of Expertise</li>
    <li style="cursor: pointer;" onclick="toggleOption(2, 0, 1, 3);">Projects</li>
    <li style="cursor: pointer;" onclick="toggleOption(3, 0, 1, 2);">Contact Me</li>
  </ul>
</nav>

<div id="blank-space">
<h4 class = "fade-in2">What would you like to know about me?</h4>
</div>

<div class="selected-option" id="aboutme" style="display: none;">
  <h4>Your friendly Neighborhood Fullstack Developer</h4>
<div class="second-row">
  <img id="ec" src="images/euroCarve.jpg">
        <p class="paragraph-main scroll">I am a fullstack web developer located in beautiful Vermont. For over twenty years, I have spent most of my time 
         outside living the snowboarder life. Not only was I adventurous, but was also analytical as well. I always wanted to 
        dissect and break down everything I encoutner in my path.  
        <br><br>Ultimately, I turned to web development to satisfy this need. It all started when I began customizing my MySpace page with custom
          made HTML and CSS. Eventually, that lead to me taking more classes in web development, further solidifying my developer skills. 
         Since then, web development and coding became some of the biggest passions in my life.
        </p> 
</div>
</div>

<div class="selected-option"  style="display: none;">
      <img class="languages" width="240" height="127" src="images/languages/php+MySQL.png" alt="PHP and MySQL">
      <img class="languages" width="250" height="94" style="margin-left: 20px;" src="images/languages/html+css+JS.png" alt="HTML 5, CSS3, and JavaScript(ES6)">
</div>


<div class="selected-option"  style="display: none;">
  <div class="project">
      <img class="project-image" src="images/projects/after3.png" alt="After 3">
  <p class="paragraph-main">A mockup site of a travel destination page. Included 
         are pages for each resort, a randomnly-generated movie of the week, an 
         AJAX powered quiz, and much more.<br><br>
         <a href="http://roc09090.classweb.ccv.edu/intro_to_prog/FinalProject/index.php">Check this project out!</a>  <br>
         <a href="https://github.com/roc2246/after3">Source Code</a> 
        </p>
  </div>
  <div class="project">
  <img class="project-image" src="images/projects/theCondo.png" alt="The Condo">
  <p class="paragraph-main">An eCommerce site that sells snowboarding softgoods and hardgoods.<br><br>
         <a href="http://roc09090.classweb.ccv.edu/eCommerce/">Check this project out!</a>  <br>
         <a href="https://github.com/roc2246/eCommerceMockup">Source Code</a> 
        </p>
  </div>
  <div class="project">
    <!--Image below shirngs if .project-image is applied-->
  <img  src="images/projects/reCRUD.png" alt="Real Estate App">
  <p class="paragraph-main">A web application that consumes a self-coded real esate api. CRUD 
        features are used to manage the listings.<br><br>
         <a href="">Check this project out!</a> <br>
         <a href="https://github.com/roc2246/real_estate">Source Code</a> 
        </p>
  </div>
</div>


<!--Delete once content gets bigger-->
<div class="selected-option"  style="display: none;">
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
    <button type="submit" value="Submit" name="submit" onclick="submitForm()">Submit</button>
    <h4 id="sendMssg"></h4>
    <?php 
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $msg = $_POST['message']; 
        $msg = wordwrap($msg, 70);    

        $mailTo = "riley.childs@yahoo.com";
        $headers = "From: ". $email . "\r\n";

        mail($mailTo, $subject, $msg, $headers);
        //echo "<h4 id='sent'>Email Sent</h4>";
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
    <a href="http://www.linkedin.com/in/riley-childs-4b015b1a4"><img src="images/socialMedia/linkedIn.png" alt="LinkedIn"></a>
    <a href="https://github.com/roc2246"><img src="images/socialMedia/gitHub.png" alt="gitHub"></a>
  </div>

</div>
</div>

  </main>
<script>
const option = document.getElementsByClassName("selected-option");

const toggleOption = (k, os1, os2, os3) =>{
 if(option[k].style.display == 'none'){
   document.getElementById("blank-space").setAttribute("style", "display: none;");
  option[k].removeAttribute("style");
  option[os1].setAttribute("style", "display: none;");
  option[os2].setAttribute("style", "display: none;");
  option[os3].setAttribute("style", "display: none;");
    }else{
   document.getElementById("blank-space").removeAttribute("style");
      option[k].setAttribute("style", "display: none;");
    }
  }

  

</script>


<?php include "include/footer.php"?>
