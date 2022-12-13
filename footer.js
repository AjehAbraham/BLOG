document.querySelector("#thumbs_up").addEventListener("click",thumbs_up);

function thumbs_up(){
    document.querySelector("#thumbs_up").style.color="red";
    document.querySelector(".thumbs_up_message").style.display ="block";
    document.querySelector(".thank_you").innerHTML="Thank you. " + "<br>" + "<i class='fa-solid fa-heart fa-beat' style='--fa-beat-scale: 2.0;'></i>";
    document.querySelector(".futher-complain").style.display="none";
}
document.querySelector("#thumbs_down").addEventListener("click",thumbsdown);

function thumbsdown(){
    document.querySelector(".thumbs_up_message").style.display ="block";
    document.querySelector("#thumbs_down").style.color="rgb(0,56,0)";
document.querySelector(".thank_you").innerHTML="Thank you please tell us how we can improve our service so that we can serve you better.";
document.querySelector(".futher-complain").style.display="block";

}

document.querySelector("#close_thumb_up_btn").addEventListener("click",close_thumbs_up);

function close_thumbs_up(){

    document.querySelector(".thumbs_up_message").style.display ="none";


}


document.querySelector("#back-to-top").addEventListener("click",backTotop);
function backTotop(){

      document.querySelector(".header").scrollIntoView({
            behavior:'smooth'
})
}


function openLoader(){
document.querySelector(".loader-overlay").style.display = "block";

}