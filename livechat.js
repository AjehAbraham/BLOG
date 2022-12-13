document.querySelector(".livechat-container").addEventListener("click",opeLivechat);

function opeLivechat(){

document.querySelector(".open-livechat-container-overlay").style.display = "block";

}

document.querySelector("#close-livechat-btn").addEventListener("click",closeLivechat);

function closeLivechat(){

    document.querySelector(".open-livechat-container-overlay").style.display = "none";


}
document.querySelector(".start-conversation").addEventListener("click",openConversation);

function openConversation(){

    document.querySelector(".livechat-conversation-container-overlay").style.display="block";

}

document.querySelector("#close-livechat-conversation-btn").addEventListener("click",closeConversation);

function closeConversation(){

document.querySelector(".livechat-conversation-container-overlay").style.display="none";

}

