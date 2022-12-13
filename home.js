

const boxes = document.querySelectorAll(".box");

const checkBoxes = () => {
  const triggerBottom = (window.innerHeight / 5) * 4;

  boxes.forEach((box) => {
    const boxTop = box.getBoundingClientRect().top;

    if (boxTop < triggerBottom) {
      box.classList.add("show");
    } else {
      box.classList.remove("show");
    }
  });
};

checkBoxes();

window.addEventListener("scroll", checkBoxes);




document.querySelector(".Reject-cookies").addEventListener("click",Reject_cookies);


function Reject_cookies(){
document.querySelector(".cookies-container").style.display = "none";

}