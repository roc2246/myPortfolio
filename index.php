<?php $pageTitle = "Fullstack Developer";?>
<?php include 'include/header.php';?>
<h2 class = "fade-in">Welcome</h2>

<div id="main-content">

<nav>
  <ul id="selections" style="list-style-type:none;">
    <li onclick="toggleOption(0, 1, 2);">About Me</li>
    <li onclick="toggleOption(1, 0, 2);">Areas of Expertise</li>
    <li onclick="toggleOption(2, 0, 1);">Projects</li>
    <li><a href="#contact">Contact Me</a></li>
  </ul>
</nav>

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
      <h4>Areas of Expertise</h4>
      <img class="languages" src="images/languages/php+MySQL.png" alt="PHP and MySQL">
      <img class="languages" style="margin-left: 20px;" src="images/languages/html+css+JS.png" alt="HTML 5, CSS3, and JavaScript(ES6)">
</div>


<div class="selected-option"  style="display: none;">
      <h4>Projects</h4>
  <div class="project">
      <img class="project-image" src="images/projects/after3.png" alt="After 3">
  <p class="paragraph-main">A mockup site of a travel destination page. Included 
         are pages for each resort, a randomnly-generated movie of the week, an 
         AJAX powered quiz, and much more.<br><br>
         <a href="http://roc09090.classweb.ccv.edu/intro_to_prog/FinalProject/index.php">Check this project out!</a> 
        </p>
  </div>
  <div class="project">
  <img class="project-image" src="images/projects/theCondo.png" alt="The Condo">
  <p class="paragraph-main">An eCommerce site that sells snowboarding softgoods and hardgoods.<br><br>
         <a href="http://roc09090.classweb.ccv.edu/eCommerce/">Check this project out!</a> 
        </p>
  </div>
</div>


</div>
<script>
const option = document.getElementsByClassName("selected-option");

const toggleOption = (k, os1, os2) =>{
 if(option[k].style.display == 'none'){
  option[k].removeAttribute("style");
  option[os1].setAttribute("style", "display: none;");
  option[os2].setAttribute("style", "display: none;");
    }else{
      option[k].setAttribute("style", "display: none;");
    }
  }

  

</script>



<?php include "include/footer.php"?>