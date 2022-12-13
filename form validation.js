//document.querySelector("#validate-first_name").addEventListener("keypress",validateFirst_name);

function validateFirst_name(){

 var Name_first = document.querySelector("#validate-first_name").value;

  if(Name_first.length <=0){
    document.querySelector(".validation-message1").style.display= "block";
document.querySelector(".validation-message1").innerHTML="Name cannot be blank";
document.querySelector("#validate-first_name").style.border="2px solid rgba(210,0,0,0.9)";
document.querySelector(".validation-message1").style.textAlign="center";
document.querySelector(".validation-message1").style.color="rgba(210,0,0,0.9)";
  }else if (Name_first.length <= 2){
    document.querySelector("#validate-first_name").style.border="2px solid rgba(210,0,0,0.9)";
document.querySelector(".validation-message1").style.textAlign="center";
document.querySelector(".validation-message1").style.color="rgba(210,0,0,0.9)";
    document.querySelector(".validation-message1").innerHTML= "Name too short";
  }else{
    document.querySelector("#validate-first_name").style.border="2px solid #ccc";
    document.querySelector(".validation-message1").innerHTML=" ";
    
    document.querySelector(".validation-message1").style.display= "none";

    }

}

function validateLast_name(){
  
 var Name_first = document.querySelector("#validate-last_name").value;

  if(Name_first.length <=0){
    document.querySelector(".validation-message2").style.display ="block";
document.querySelector(".validation-message2").innerHTML="Name cannot be blank";
document.querySelector("#validate-last_name").style.border="2px solid rgba(210,0,0,0.9)";
document.querySelector(".validation-message2").style.textAlign="center";
document.querySelector(".validation-message2").style.color="rgba(210,0,0,0.9)";
  }else if (Name_first.length <= 2){
    document.querySelector("#validate-last_name").style.border="2px solid rgba(210,0,0,0.9)";
document.querySelector(".validation-message2").style.textAlign="center";
document.querySelector(".validation-message2").style.color="rgba(210,0,0,0.9)";
    document.querySelector(".validation-message2").innerHTML= "Name too short";
  }else{
    document.querySelector("#validate-last_name").style.border="2px solid #ccc";
    document.querySelector(".validation-message2").innerHTML=" ";
    document.querySelector(".validation-message2").style.display ="none";
    }

}

function validate_email(){


  var validRegex = /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)$/;

 var email_ = document.querySelector("#validate-Email");

  if (email_.value.match(validRegex)) {
    document.querySelector("#validate-Email").style.border = "2px solid #ccc";
    document.querySelector(".validate-email-message").style.display = "none";

}else{

  document.querySelector("#validate-Email").style.border = "2px solid red";
  document.querySelector(".validate-email-message").innerHTML="invalid email";
  document.querySelector(".validate-email-message").style.display ="block";
  document.querySelector(".validate-email-message").style.color = "red";
  document.querySelector(".validate-email-message").borderRadius = "2rem";
  document.querySelector(".validate-email-message").border ="2px solid red";
  document.querySelector(".validate-email-message").backgroundColor = "pink";
}

}
 
function validate_password(){

  var pass = document.querySelector("#validate-pasword");

if (pass.value.length <= 5){

  document.querySelector(".validation-message-password").innerHTML ="Password too weak";
  document.querySelector(".validation-message-password").style.display = "block";
  document.querySelector(".validation-message-password").style.backgroundColor = "pink";
  document.querySelector(".validation-message-password").style.color = "red";
  document.querySelector(".validation-message-password").borderRadius= "2rem";
  document.querySelector("#validate-pasword").style.border=" 2px solid red";
}
if (pass.value.length >= 7){
  document.querySelector(".validation-message-password").innerHTML ="Weak";
  document.querySelector(".validation-message-password").style.display = "block";
  document.querySelector(".validation-message-password").style.backgroundColor = "pink";
  document.querySelector(".validation-message-password").style.color = "orange";
  document.querySelector(".validation-message-password").borderRadius= "2rem";
  document.querySelector("#validate-pasword").style.border=" 2px solid orange";
}
if (pass.value.length > 9){
  
  document.querySelector(".validation-message-password").innerHTML ="Strong";
  document.querySelector(".validation-message-password").style.display = "block";
  document.querySelector(".validation-message-password").style.backgroundColor = "pink";
  document.querySelector(".validation-message-password").style.color = "green";
  document.querySelector(".validation-message-password").borderRadius= "2rem";

  document.querySelector("#validate-pasword").style.border=" 2px solid #ccc";
}/*else if (pass.value.length >= 12){
  document.querySelector(".validation-message-password").innerHTML ="Very strong";
  document.querySelector(".validation-message-password").style.display = "block";
  document.querySelector(".validation-message-password").backgroundColor = "pink";
  document.querySelector(".validation-message-password").color = "darkgreen";
  document.querySelector(".validation-message-password").borderRadius= "2rem";
  document.querySelector(".#validate-pasword").style.border = "2px solid #ccc";

}lse{
  document.querySelector(".validation-message-password").style.display = "none";
}*/



}






document.querySelector(".show-password").addEventListener("click",showPassword);

function showPassword(){

  var b = document.querySelector("#validate-pasword");

  if(b.type === "password"){

b.type  = "text";

  }else{
   b.type = "password";
  }

}
