if(document.querySelector('.c-banner-fwbg')){
  bannerFwbg();
}

function bannerFwbg() {
  // Life at Revolution
  let allBtns = document.querySelectorAll('.fwbg-button');
  let allCopys = document.querySelectorAll('.fwbg-copy');

  allBtns.forEach(btn=>{
    let btnNumber = btn.getAttribute('data-id')
    let btnCopy = document.querySelector(`.fwbg-copy[data-id='${btnNumber}']`)

    btn.addEventListener('click', function(){
      if(btnCopy.classList.contains('h-hidden')){
        allCopys.forEach(copy=>copy.classList.add('h-hidden'))
        btnCopy.classList.remove('h-hidden')
      } 
    })
  })


  //Job Board Pagination
  let paginationLeftBtn = document.querySelector('.pagination-controls .chevron.left');
  let paginationRightBtn = document.querySelector('.pagination-controls .chevron.right');
  let paginationTotalPages = document.querySelector('.pagination-controls .total-pages');
  let paginationCurrentPage = document.querySelector('.pagination-controls .current-page');

  let careerMenuItems = document.querySelectorAll('.career-menu .career-menu-item');
  let careerItems = document.querySelectorAll('.career-roles .career-role');

  //set total pages
  let totNumRoles = document.querySelectorAll('.career-roles .career-role').length;
  let totNumPages = ` ${Math.ceil(totNumRoles/6)}`;
  paginationTotalPages.innerHTML = totNumPages;

  //change curent page
  let currentPage = 1;
  paginationRightBtn.addEventListener('click', ()=>{
    if(currentPage < totNumPages){
      currentPage += 1
      paginationCurrentPage.innerHTML = currentPage
      careerItems.forEach(item=>{
        item.style.transform = `translateX(-${currentPage*100-100}%)`;
      })
    }
  })
  paginationLeftBtn.addEventListener('click', ()=>{
    if(currentPage >= totNumPages && currentPage != 1){
      currentPage -= 1
      paginationCurrentPage.innerHTML = currentPage
      careerItems.forEach(item=>{
        item.style.transform = `translateX(-${currentPage*100-100}%)`;
      })
    }
  })



  //Job Board Filter
  // let menuItemDataId = careerMenuItems.getAttribute('data-menuitem-department');
  // let jobItemDataId = careerItems.getAttribute('data-menuitem-department');

  careerMenuItems.forEach(menuItem=>{

    menuItem.addEventListener('click', ()=>{

      //lowercase and strip of white space
      let menuItemId = menuItem.getAttribute('data-menuitem-department').toLowerCase().replace(/\s+/g, '');
      
      let numberOfFoundItems = 0;

      careerItems.forEach(careerItem=>{
        if(!careerItem.classList.contains('h-hidden')){
          careerItem.classList.add('h-hidden');
        }
      })

      careerItems.forEach(careerItem=>{
        let careerItemId = careerItem.getAttribute('data-job-department').toLowerCase().replace(/\s+/g, '');
        if(menuItemId == careerItemId){
          numberOfFoundItems += 1;

          if(careerItem.classList.contains('h-hidden')){
            careerItem.classList.remove('h-hidden');
          }
        }
      })

      let nofiIsNaN = isNaN(numberOfFoundItems);

      if(typeof numberOfFoundItems !== "undefined" && !nofiIsNaN && numberOfFoundItems !== 0){
        totNumPages = ` ${Math.ceil(numberOfFoundItems/6)}`;
        paginationTotalPages.innerHTML = totNumPages;

        currentPage = 1;
        paginationCurrentPage.innerHTML = currentPage

        careerItems.forEach(item=>{
          item.style.transform = `translateX(0%)`;
        })
      } else {
        totNumPages = 1;
        paginationTotalPages.innerHTML = ' 1';

        currentPage = 1;
        paginationCurrentPage.innerHTML = currentPage

        careerItems.forEach(item=>{
          item.style.transform = `translateX(0%)`;
        })
      }
      
    })
  })
}