function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function (event) {
  if (!event.target.matches('#dot3')) {


    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
function mySecond() {
  document.getElementById("dropdown-contentsss").classList.toggle("shows");
}
document.getElementById('file-chooser').onclick=()=>{
  let m=document.getElementById('photo');
  m.click();
}
document.getElementById('photo').onchange=(e)=>{
  let file=e.target.files[0]
  let reader=new FileReader()
  reader.onload=(event1)=>{
    document.getElementById('preview').style.display='block'
    document.getElementById('preview').setAttribute('src',event1.target.result)
  }
  document.getElementById('file-chooser').style.border=`none`
  reader.readAsDataURL(file)
  document.getElementById('san').style.display=`none`
  document.getElementById('plus').style.display=`none`
  
}
window.onclick = function (event) {
  if (!event.target.matches('#toggle1')) {
    var dropdowns = document.getElementsByClassName("dropdown-contentss");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('shows')) {
        openDropdown.classList.remove('shows');
      }
    }
  }
}