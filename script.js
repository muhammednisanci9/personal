// scroll bar başlangıç
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("headerbar").style.top = "0";
    document.getElementById("headerbar").style.boxShadow = "0 0 10px 0 rgba(0, 0, 0, 0.1)";
    document.getElementById("headerbar").style.background = "#fff";
  } else {
    document.getElementById("headerbar").style.background = "transparent";
    document.getElementById("headerbar").style.boxShadow = "inherit";
  }
}
// scroll bar bitiş



  AOS.init();



function iletisimopen(){
	document.getElementById('secret-contact').style.display = "block";
}

function sidebaropen(){
  document.getElementById('sidebar').style.display = "block";
}
function sidebarclose(){
  document.getElementById('sidebar').style.display = "none";
}
