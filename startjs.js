// JavaScript Document
var i = 0;
function change() {
  var doc = document.getElementById("gymname");
  var color = ["white", "blue", "yellow", "green","purple","red","pink","orange","brown","grey","voilet"];
  doc.style.color = color[i];
  i = (i + 1) % color.length;
}
setInterval(change, 1000);