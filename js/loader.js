var timer;

function loaderAnimation() {
  document.getElementById("content").style.display = "none";
  timer = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("content").style.display = "block";
  document.getElementsByClassName("wrapper")[0].style.display = "none";
}