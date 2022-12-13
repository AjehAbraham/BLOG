
function openLoader(event){

    document.querySelector(".loader-overlay").style.display = "block";
  
  }
  
      if(window.history.replaceState){
  
          window.history.replaceState(null,null,window.location.href);
  
      }
      
   
function removeLoader(){

var loader = document.body;

loader.classList.remove("loader-overlay");

}
window.onload = removeLoader();