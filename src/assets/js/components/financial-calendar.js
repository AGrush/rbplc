if(document.querySelector('.table-control')){
  financialCalendar();
}

function financialCalendar(){

  let nav1 = document.querySelector('[data-id="nav-1"]')
  let nav2 = document.querySelector('[data-id="nav-2"]')
  let table1 = document.querySelector('[data-id="table-1"]')
  let table2 = document.querySelector('[data-id="table-2"]')

  nav1.addEventListener('click', ()=>{
    if(!nav1.classList.contains('active')){
      nav1.classList.add('active')
      nav2.classList.remove('active')
      
      table1.classList.remove('h-hidden')
      table2.classList.add('h-hidden')
    }
  })

  nav2.addEventListener('click', ()=>{
    if(!nav2.classList.contains('active')){
      nav2.classList.add('active')
      nav1.classList.remove('active')

      table2.classList.remove('h-hidden')
      table1.classList.add('h-hidden')
    }
  })

}