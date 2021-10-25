
if(document.querySelector('.c-category')){
  
  
  allCategoryWidgets = document.querySelectorAll('.c-category')
  
  allCategoryWidgets.forEach(widget=>{
    let plusBtn = widget.querySelector('.c-plus')
    let longText = widget.querySelector('.c-category__longtext')

    plusBtn.addEventListener('click', function(){
      if(!plusBtn.classList.contains('open')){
        longText.classList.add('open')
        plusBtn.classList.add('open')
      } else {
        longText.classList.remove('open')
        plusBtn.classList.remove('open')
      }

    })
  })
  
}
