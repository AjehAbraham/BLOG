document.querySelector(".Accept-cookie").addEventListener("click",getCookie);

function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays * 24 * 7));
  let expires = "expires="+d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(){
    
    setCookie("cookie-policy", user, 7); 

}


function checkCookie(){
    
    let user = getCookie("cookie-policy");
    
    if (user != ""){
        alert("Welcome back");
        document.querySelector(".cookies-container").style.display=" none";
    }else{
        document.querySelector(".cookie-container").style.display="block";
    
    }
    
}
window.onload="checkCookie()";

document.querySelector(".Reject-cookies").addEventListener("click",RejectCookie);

function RejectCookie(){
    
    document.querySelector(".cookies-container").style.display="none";
}
    