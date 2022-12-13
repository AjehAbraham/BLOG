
if(window.history.replaceState){

    window.history.replaceState(null,null,window.location.href);

}

function share(){
    
    var b = window.location.href;
    
    if(navigator.share){
  navigator.share({
  title:'Developblog Question and Answers.',
  url: b,
  })
    
  
    }else{
        alert("opps! sorry your device does not support this.")
    }
}