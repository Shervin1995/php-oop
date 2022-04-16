
var insert_form = document.querySelector("#insert")


// 
insert_form.addEventListener('submit', (e) => {
    e.preventDefault(); 

    //
    var form = e.target
    var data = `img=${form[0].value}&olaviat=${form[1].value}` 

    // ajax 
    var xhr = new XMLHttpRequest(); 
    xhr.open('POST', 'oop/insert.php', true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  
    xhr.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) { 
        
        // reload 
        location.reload()

      }
    }
  
    xhr.send(data);
})