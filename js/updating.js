
// update
function updating(e) {
    e.preventDefault();

    var form = e.target
    var data = `id=${form[0].value}&olaviat=${form[1].value}` 

    // ajax 
    var xhr = new XMLHttpRequest(); 
    xhr.open('POST', 'oop/update.php', true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  
    xhr.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) { 
        
        // reload 
        location.reload()

      }
    }
  
    xhr.send(data);
    

}
