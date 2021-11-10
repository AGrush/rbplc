import Cookies from 'js-cookie'

if(document.querySelector('.c-popup-disclaimer')){
  disclaimerSection();
}

function disclaimerSection() {
  var cookieName = 'rbplc-disclaimer'

  if (!Cookies.get(cookieName)) {
    console.log('2')
    let disclaimerPopup = document.querySelector('.c-popup-disclaimer')
    disclaimerPopup.classList.remove('h-hidden')

    let acceptBtn = document.querySelector('.c-button-1.accept')
    acceptBtn.addEventListener('click', ()=> {
      Cookies.set(
        cookieName
        , '1'
        , { expires: 7 }
      );

      disclaimerPopup.classList.add('h-hidden')
    })
  } 

}