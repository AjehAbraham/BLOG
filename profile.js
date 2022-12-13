var loadfile = function (event){
var image =document.querySelector("#output");
image.src =URL.createObjectURL(event.target.files[0]);

}
document.querySelector(".edit").addEventListener("click",edit_profile);

function edit_profile(){

  document.querySelector("#first_name").removeAttribute('readOnly');
  document.querySelector("#last_name").removeAttribute('readOnly');
}
function add_read(){
    document.querySelector("#first_name").readOnly= true;
  document.querySelector("#last_name").readOnly = true;

}
  
 document.querySelector(".submit-btn").addEventListener("click",openLoader);

function openLoader(){

  document.querySelector(".loader-overlay").style.display = "block";

}

document.querySelector(".forgot_password").addEventListener("click",openForgot_password);

function openForgot_password(){

    document.querySelector(".change-password_container").style.display="block";

}
document.querySelector("#close-container_btn").addEventListener("click",close_container);

function close_container(){

    document.querySelector(".change-password_container").style.display="none";

}