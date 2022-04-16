
//
var search_form = document.querySelector("#search")

// 
search_form.addEventListener('submit', (e) => {
    e.preventDefault(); 
    var form = e.target
    var data = `id=${form[0].value}&olaviat=${form[1].value}` 

    // ajax 
    var xhr = new XMLHttpRequest(); 
    xhr.open('get', `oop/select.php?${data}`, true);
    // xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  
    xhr.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) { 
        
        // 
        document.querySelector("#display").innerHTML = this.response

      }
    }
  
    xhr.send();
    
})