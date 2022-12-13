document.querySelector("#open-comment").addEventListener("click",openComment);

function openComment(){

var commentBox = document.querySelector(".form-container-rapper");


if ( commentBox.style.display == "none"){

    commentBox.style.display = "block";
}else{

    commentBox.style.display = "none";
}


}
function copy(){
  const text=
document.getElementById("textarea");
text.select();
navigator.clipboard.writeText(
text.value);
alert("Text copied to Clipboard");
document.getElementById("copy").innerText="Text Copied";
  }



/*
function saveCmment(){
  var text_col = document.querySelector(".reply-post-save-comment");
    
    if(text_col.value.length >= 1){
        
        localStorage.setItem("blog-comment","text_col");
    }
    
}

function loadtext(){
    
    var showText =document.querySelector(".reply-post-save-comment").innerHTML = localStorage.getItem("blog-comment","text_col");
}
window.onload ="loadText()";


/*
const txHeight = 16;
const tx = document.getElementsByTagName("textarea");

for (let i = 0; i < tx.length; i++) {
  if (tx[i].value == '') {
    tx[i].setAttribute("style", "height:" + txHeight + "px;overflow-y:hidden;");
  } else {
    tx[i].setAttribute("style", "height:" + (tx[i].scrollHeight) + "px;overflow-y:hidden;");
  }
  tx[i].addEventListener("input", OnInput, false);
}*/