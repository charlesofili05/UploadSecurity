document.getElementById("burger-menu").addEventListener("click", function() {
    this.classList.toggle("closed");
    document.getElementById("mobileNavLinkPage").classList.toggle("open");
    document.getElementById("mobileNav").classList.toggle("fixednav");
    document.body.classList.toggle("no-scroll");
    
  });
  window.addEventListener("resize", ()=>{
    if (document.body.clientWidth > 835) {
        document.getElementById("burger-menu").classList.remove("closed")
        document.getElementById("mobileNavLinkPage").classList.remove("open");
    document.body.classList.remove("no-scroll");
    }
  })

  let readMoreBtns = document.querySelectorAll(".readMoreBtn")
  let readLessBtns = document.querySelectorAll(".readLessBtn")

  readMoreBtns.forEach(btn => {
    btn.addEventListener("click", ()=>{
      btn.classList.add("hide");
      btn.parentNode.childNodes[3].classList.add("show")
      btn.parentNode.childNodes[4].classList.add("show")
    })
  });
  readLessBtns.forEach(btn => {
    btn.addEventListener("click", ()=>{
      btn.classList.remove("show");
      btn.parentNode.childNodes[3].classList.remove("show")
      btn.parentNode.childNodes[1].classList.remove("hide")
    })
  });

