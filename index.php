<?php $pageTitle = "Fullstack Developer";?>
<?php include 'include/header.php';?>
<div id="main-content">
<!--STOCK PHOTO NEEDED-->
<h2 class = "fade-in">Welcome</h2>

<ul id="selections">
  <li onclick="toggleOption(0);">About Me</li><br>
  <li onclick="toggleOption(1);">Areas of Expertise</li><br>
  <li onclick="toggleOption(2);">Projects</li><br>
  <li><a href="#contact">Contact Me</a></li><br>
</ul>

<div class="selected-option" style="display: none;">
<div class="row">
    <div class="page-header">
        <h4>Your friendly Neighborhood Fullstack Developer</h4>
    </div>
</div>

<div class="row mt-2">
    <div class="col-sm-2.5">
        <img id="ec" src="images/euroCarve.jpg">
    </div>
   <div class="col-sm-9"> 
        <p class="font-weight-lighter" id="main">I am a fullstack web developer located in beautiful Vermont. For over twenty years, I have spent most of my time 
         outside living the snowboarder life. Not only was I adventurous, but was also analytical as well. I always wanted to 
        dissect and break down everything I encoutner in my path.  
        <br><br>Ultimately, I turned to web development to satisfy this need. It all started when I began customizing my MySpace page with custom
          made HTML and CSS. Eventually, that lead to me taking more classes in web development, further solidifying my developer skills. 
         Since then, web development and coding became some of the biggest passions in my life.
        </p> 
    </div>
</div>
</div>

<div class="selected-option"  style="display: none;">
  <div class="row justify-content-center  mt-3">  
    <div class="page-header">
      <h4>Areas of Expertise</h4> 
    </div>
  </div>
  <div class="row justify-content-center mt-3">
    <div class="col-sm-2.5">
      <img src="images/languages/php+MySQL.png" alt="PHP and MySQL">
    </div>
    <div class="col-sm-2.5 ml-3 mt-3">
      <img src="images/languages/html+css+JS.png" alt="HTML 5, CSS3, and JavaScript(ES6)">
    </div>
   </div>
</div>


<div class="selected-option"  style="display: none;">
  <div class="row mt-5">
    <div class="page-header">
      <h4>Projects</h4>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-2.5">
      <img src="images/projects/after3.png" alt="After 3">
    </div>
  <div class="col-sm-9">
  <p id="main">A mockup site of a travel destination page. Included 
         are pages for each resort, a randomnly-generated movie of the week, an 
         AJAX powered quiz, and much more.<br><br>
         <a href="http://roc09090.classweb.ccv.edu/intro_to_prog/FinalProject/index.php">Check this project out!</a> 
        </p>
    </div>
  <div class="col-sm-2.5">
  <img src="images/projects/theCondo.png" alt="The Condo">
  </div>
  <div class="col-sm-9">
  <p id="main">An eCommerce site that sells snowboarding softgoods and hardgoods.<br><br>
         <a href="http://roc09090.classweb.ccv.edu/eCommerce/">Check this project out!</a> 
        </p>
</div>
</div>
</div>

</div>


</div>
<script>
var option = document.getElementsByClassName("selected-option");

const toggleOption = (k) =>{
 if(option[k].style.display == 'none'){
  option[k].removeAttribute("style");
    }else{
      option[k].setAttribute("style", "display: none;");
    }
}



</script>



<?php include "include/footer.php"?>