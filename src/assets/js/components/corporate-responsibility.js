if(document.querySelector('#corporate-responsibility')){

  let links = document.querySelectorAll('[class*=link].c-button-1')
  let contents = document.querySelectorAll('[class*=content]')


  links.forEach(link=>{
    let linkNumber = link.getAttribute('data-id');


    link.addEventListener('click',(e)=>{
      let clickedButtonNumber = e.target.getAttribute('data-id')

      //remove all selected btns
      links.forEach(link=>{
        if(link.classList.contains('selected')){
          link.classList.remove('selected')
        }
      })

      //add selected btn
      if(!link.classList.contains('selected')){
        link.classList.add('selected')
      }

      //remove all selected contents
      contents.forEach(content => {
        if(content.classList.contains('selected')){
          content.classList.remove('selected')
        }
      })

      //add selected content
      contents.forEach(content => {
        let contentNumber = content.getAttribute('data-id');
        if(contentNumber == clickedButtonNumber){
          content.classList.add('selected')
        }
      })
    })

  })

}