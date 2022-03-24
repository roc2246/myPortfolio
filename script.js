const option = document.getElementsByClassName("selected-option");
  const navItem = document.getElementsByTagName("li");
  const unselectStyle = "cursor: pointer; background-color: none;";

  Object.keys(option).forEach(opt => option[opt].style.display = "none");

  function toggleOption (){

      navItem[k+1].setAttribute("style", "cursor: pointer; background-color: grey;");
      navItem[os1+1].setAttribute("style", unselectStyle);
      navItem[os2+1].setAttribute("style", unselectStyle);
      navItem[os3+1].setAttribute("style", unselectStyle);
  }

  
  //Prevents A new listing from being created upon submission
    if (window.history.replaceState) {
      window.history.replaceState( null, null, window.location.href );
    }

  //Keeps both #home-link and <a> child element highlighted on mouse hover
  const homeLink = document.getElementById("home-link");
  const homeLinkChild = document.getElementsByTagName("a")[0];
  homeLink.addEventListener("mouseover", () => {
  homeLinkChild.style.backgroundColor = "grey"
  });
  homeLink.addEventListener("mouseleave", () => {
  homeLinkChild.style.backgroundColor = ""
  });
  
  