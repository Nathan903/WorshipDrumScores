function hide() {
  var input, filter, table, tr, p, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase().replace(/\s+/g, '');
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("p");

  for (i = 0; i < tr.length; i++) {
    p = tr[i];
    if (p) {
  txtValue = p.id+"|"+p.className+"|"+p.textContent || p.innerText;
  if (txtValue.toUpperCase().replace(/\s+/g, '').indexOf(filter)>-1) {
    tr[i].style.display = "";}
  else {tr[i].style.display = "none";}
  }
  }
}
function r() {
    document.getElementById("myInput").value=""
    hide()}
    
if(location.href.includes("?"))
{
    var u = new URL(window.location.href).searchParams.get("search");
    document.getElementById("myInput").value = u;
    hide();
    document.title = document.getElementById(u).getElementsByTagName("a")[0].textContent.replace('敬拜', '敬█').replace('赞美', '赞█')

}


//document.getElementById("myInput").value = location.href.substring(location.href.indexOf("?")+1);