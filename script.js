document.getElementById("burger-menu").addEventListener("click", function() {
    this.classList.toggle("closed");
    document.getElementById("mobileNavLinkPage").classList.toggle("open");
    document.body.classList.toggle("no-scroll");
    
  });
  window.addEventListener("resize", ()=>{
    if (document.body.clientWidth > 835) {
        document.getElementById("burger-menu").classList.remove("closed")
        document.getElementById("mobileNavLinkPage").classList.remove("open");
    document.body.classList.remove("no-scroll");
    }
  })