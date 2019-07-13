function filterr() {
 
  var text= document.getElementById("filter").value;
  alert(text.replace(/[^a-zA-Z ]/g, ""));
}