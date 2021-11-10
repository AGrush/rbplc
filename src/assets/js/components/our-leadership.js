if(document.querySelector('.c-our-leadership')){
  ourLeadershipSection1();
  ourLeadershipSection2();
}

function ourLeadershipSection1(){
  let leaderImgs = document.querySelectorAll('[data-id*="leaderimg"]')
  let leaderTexts = document.querySelectorAll('[data-id*="leadertxt"]')
  let leaderCloseBtns = document.querySelectorAll('[data-id*="leadertxt"]>span')

  //logic for lcicking on images
  leaderImgs.forEach(leaderImg => {
    leaderImg.addEventListener('click', (e) => {
      let imgDataIdNumber = leaderImg.getAttribute('data-id').replace(/[^0-9]/g,'')

      //change selected img & text
      if(!leaderImg.classList.contains('show')){

        //remove any selected imgs
        leaderImgs.forEach(img=>{
          if(img.classList.contains('show')){
            img.classList.remove('show')
          }
        })

        //select the clicked img
        leaderImg.classList.add('show')

        //remove any selected txt
        leaderTexts.forEach(txt=>{
          if(txt.classList.contains('show')){
            txt.classList.remove('show')
          }
        })

        //select the right txt
        leaderTexts.forEach(txt=>{
          //get numbers from data-id values
          let txtDataIdNumber = txt.getAttribute('data-id').replace(/[^0-9]/g,'')

          
          if(txtDataIdNumber == imgDataIdNumber){
            txt.classList.add('show')
          }

          //hide all the short info in that row
          if (txtDataIdNumber <= 4){
            document.querySelectorAll('.bod14').forEach(el=>{el.style.display = "none"})
            document.querySelectorAll('.bod58').forEach(el=>{el.style.display = "initial"})
          } 
        })


        if (imgDataIdNumber >= 5 && imgDataIdNumber <= 8) {
          document.querySelectorAll('.bod58').forEach(el=>{el.style.display = "none"})
          document.querySelectorAll('.bod14').forEach(el=>{el.style.display = "initial"})
        }
      } 
      
    })
  })

  //logic for close btns
  leaderCloseBtns.forEach(closeBtn=>{
    closeBtn.addEventListener('click', (e) => {

      //get the number of current txt element
      let selectedTxtDataIdNumber = e.target.parentElement.getAttribute('data-id').replace(/[^0-9]/g,'')
      
      //unselect the current text section
      e.target.parentElement.classList.remove('show')

      //unselet the current image
      document.querySelector(`[data-id=leaderimg${selectedTxtDataIdNumber}]`).classList.remove('show')
    })

  })
}

function ourLeadershipSection2(){
  let leaderImgsBelow = document.querySelectorAll('[data-id*="leaderbelowimg"]')
  let leaderTextsBelow = document.querySelectorAll('[data-id*="leaderbelowtxt"]')
  let leaderCloseBtnsBelow = document.querySelectorAll('[data-id*="leaderbelowtxt"]>span')

  //logic for lcicking on images
  leaderImgsBelow.forEach(leaderImg => {
    leaderImg.addEventListener('click', (e) => {
      
      //change selected img & text
      if(!leaderImg.classList.contains('show')){

        //remove any selected imgs
        leaderImgsBelow.forEach(img=>{
          if(img.classList.contains('show')){
            img.classList.remove('show')
          }
        })

        //select the clicked img
        leaderImg.classList.add('show')

        //remove any selected txt
        leaderTextsBelow.forEach(txt=>{
          if(txt.classList.contains('show')){
            txt.classList.remove('show')
          }
        })

        //select the right txt
        leaderTextsBelow.forEach(txt=>{
          //get numbers from data-id values
          let txtDataIdNumber = txt.getAttribute('data-id').replace(/[^0-9]/g,'')
          let imgDataIdNumber = leaderImg.getAttribute('data-id').replace(/[^0-9]/g,'')
          
          if(txtDataIdNumber == imgDataIdNumber){
            txt.classList.add('show')
          }
        })
      } 
      
    })
  })

  //logic for close btns
  leaderCloseBtnsBelow.forEach(closeBtn=>{
    closeBtn.addEventListener('click', (e) => {

      //get the number of current txt element
      let selectedTxtDataIdNumber = e.target.parentElement.getAttribute('data-id').replace(/[^0-9]/g,'')
      
      //unselect the current text section
      e.target.parentElement.classList.remove('show')

      //unselet the current image
      document.querySelector(`[data-id=leaderbelowimg${selectedTxtDataIdNumber}]`).classList.remove('show')
    })

  })
}