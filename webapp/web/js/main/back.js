var goBack = document.getElementsByClassName("backbtn")[0].getElementsByTagName("a")[0];
goBack.onclick = function(){
  window.history.go(-1);
  console.log("yes")
}