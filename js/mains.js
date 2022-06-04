function button(){
    document.write("dont know")
}

// Read more function
function readMore() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more...";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  } 

  // function readMore2() {
  //   var dots = document.getElementById("dots1");
  //   var moreText = document.getElementById("more1");
  //   var btnText = document.getElementById("myBtn1");
  
  //   if (dots.style.display === "none") {
  //     dots.style.display = "inline";
  //     btnText.innerHTML = "Read more...";
  //     moreText.style.display = "none";
  //   } else {
  //     dots.style.display = "none";
  //     btnText.innerHTML = "Read less";
  //     moreText.style.display = "inline";
  //   }
  // } 


// toggle menu in admin page
// message, blogs, projects...
  function showPage(page){

    document.querySelectorAll('div').forEach(div =>{
      div.style.display = 'none';
    })

    document.querySelector(`#${page}`).style.display = 'block';
  }

  document.addEventListener('DOMContentLoaded',function(){
    document.querySelectorAll('button').forEach(button =>{
      button.onclick = function(){
        showPage(this.dataset.page);
      }
    })
  })