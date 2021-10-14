let siteInfo = document.querySelector('.c-site-info')
window.onscroll = function(ev) {
  if ((window.innerHeight + window.pageYOffset) >= document.body.offsetHeight) {
      
      if(!siteInfo.classList.contains('bottom')){
        siteInfo.classList.add('bottom')
      } 
  } else {
     if(siteInfo.classList.contains('bottom')){
        siteInfo.classList.remove('bottom')
      } 
  }
};