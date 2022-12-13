/*/console.log('initially' + (window.navigator.onLine ? 'on' : 'off') + 'line');
window.addEventListener('online', () => console.log (''))

if (window.navigator.onLine == TRUE){
  alert('online');
}else{
  alert('offline');
}
*/
document.querySelector("#openNav-btn").addEventListener("click",opensideBar);
function opensideBar(){
  var open = document.querySelector(".sidebar");

  if (open.style.display == "none"){

 open.style.display = "block";
  }else{
    open.style.display = "none";
  }
}

document.querySelector("#closeNav-btn").addEventListener("click",closeSidebar);

function closeSidebar(){
  document.querySelector(".sidebar").style.display = "none";
}

document.querySelector("#openSearch-btn").addEventListener("click",openSearchBar);

function openSearchBar(){
  var search = document.querySelector(".search-container");

  if (search.style.display == "none"){
    search.style.display ="block";
  }else{
    search.style.display ="none";
  }
}

document.querySelector("#close-serach").addEventListener("click",closeSearch);

function closeSearch(){
  document.querySelector(".search-container").style.display ="none";
}

 
