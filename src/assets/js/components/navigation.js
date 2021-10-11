//Add sub menu top divs with arrows
let headerSubMenu= document.querySelectorAll('.header-nav .sub-menu')
headerSubMenu.forEach(subMenu=>{
    //make div for sub menu nav
    const newDiv = document.createElement("div");
    newDiv.classList.add("sub-menu__nav")
    subMenu.insertAdjacentElement("afterbegin", newDiv);

    // get text value of parent nav
    let parentNav = subMenu.parentElement.firstElementChild;
    let parentNavText = parentNav.childNodes[0].textContent;

    //make a tag with parent nav link
    const newLink = document.createElement("a");
    newLink.innerHTML = parentNavText
    newLink.setAttribute("href", parentNav.getAttribute("href"))
    newDiv.insertAdjacentElement("afterbegin", newLink);

    //make a back link
    const backLink = document.createElement("span");
    backLink.classList.add("back-arrow")
    backLink.innerHTML = `
    <svg width="9" height="16" viewBox="0 0 9 16"><path fill="#fff" d="M8.7 14.3c.4.4.4 1 0 1.4-.4.4-1 .4-1.4 0l-7-7c-.4-.4-.4-1 0-1.4l7-7c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4L2.4 8l6.3 6.3z"></path></svg>
    `
    newDiv.insertAdjacentElement("afterbegin", backLink);

    //make a forward link
    const forwardLink = document.createElement("span");
    forwardLink.classList.add("forward-arrow")
    forwardLink.innerHTML = `
    <svg width="9" height="16"><path fill="#fff" d="M.3 14.3c-.4.4-.4 1.02 0 1.4.38.4 1 .4 1.4 0l7-7c.4-.4.4-1.02 0-1.4l-7-7C1.3-.1.68-.1.3.3c-.4.38-.4 1 0 1.4L6.6 8 .3 14.3z"></path></svg>
    `
    newDiv.insertAdjacentElement("afterbegin", forwardLink);
})


//nav js
let firstLvlMenusWithChildren = document.querySelectorAll('#menu-all-pages>.menu-item-has-children')
let secondLvlMenusWithChildren = document.querySelectorAll('#menu-all-pages > .menu-item-has-children > .sub-menu > .menu-item-has-children')
let secondLvlBackArrow = document.querySelectorAll('#menu-all-pages > .menu-item-has-children > .sub-menu > .sub-menu__nav > .back-arrow')
let thirdLvlBackArrow = document.querySelectorAll('#menu-all-pages > .menu-item-has-children > .sub-menu > .menu-item-has-children > .sub-menu >.sub-menu__nav > .back-arrow')
let navContainer = document.querySelector('.c-navigation>.o-container')


firstLvlMenusWithChildren.forEach(menu=>{

    menu.addEventListener('click', (e)=>{
        e.stopPropagation();
        if(e.target.parentElement.classList.contains('menu-item-has-children')){
            e.preventDefault(); 
        }
        
        if(menu.classList.contains('open')){
            if(navContainer.classList.contains('lvl2') && (e.target.parentElement.classList.contains('back-arrow') || e.target.classList.contains('back-arrow') || e.target.parentElement.parentElement.classList.contains('back-arrow'))){
                menu.classList.remove('open')
                navContainer.classList.remove('lvl2')
            }
            // console.log(e.target)
        } else {
            firstLvlMenusWithChildren.forEach(menu=>{
                if(menu.classList.contains('open')){
                    menu.classList.remove('open')
                    navContainer.classList.remove('lvl2')
                }
            })
            secondLvlMenusWithChildren.forEach(menu=>{
                if(menu.classList.contains('open')){
                    menu.classList.remove('open')
                    navContainer.classList.remove('lvl2')
                }
            })
            menu.classList.add('open')
            navContainer.classList.add('lvl2')
        }
    })
})

secondLvlMenusWithChildren.forEach(menu=>{

    menu.addEventListener('click', (e)=>{
        e.stopPropagation();
        if(e.target.parentElement.classList.contains('menu-item-has-children')){
            e.preventDefault(); 
        }

        if(menu.classList.contains('open')){
            if(navContainer.classList.contains('lvl3') && (e.target.parentElement.classList.contains('back-arrow') || e.target.classList.contains('back-arrow') || e.target.parentElement.parentElement.classList.contains('back-arrow'))){
                menu.classList.remove('open')
                navContainer.classList.remove('lvl3')
            }

        } else {
            secondLvlMenusWithChildren.forEach(menu=>{
                if(menu.classList.contains('open')){
                    menu.classList.remove('open')
                    navContainer.classList.remove('lvl3')
                }
            })
            menu.classList.add('open')
            navContainer.classList.add('lvl3')
        }
    })
})


//burger btn
let burgerBtn = document.querySelector('.c-burger-btn .openSidebarMenu')
let cNavigation = document.querySelector('.c-navigation')
let newDiv= document.createElement("div")
let menuItemHasChildren = document.querySelectorAll('.menu-item-has-children')
let cHeader = document.querySelector('.c-header');
let cHeaderContainer = document.querySelector('.c-header > .o-container');

burgerBtn.addEventListener('click', (e)=>{
    
    if(cNavigation.classList.contains('open')){
        cNavigation.classList.remove('open')
        cHeader.classList.remove('open')
        newDiv.remove();
        closeAllMenus();

    } else {
        cNavigation.classList.add('open')
        cHeader.classList.add('open')
  
        //seethrough close menu film
        newDiv.classList.add("c-close-menu-film")
        cNavigation.insertAdjacentElement("afterend", newDiv);
        newDiv.addEventListener('click',()=>{
            cNavigation.classList.remove('open')
            cHeader.classList.remove('open')
            closeAllMenus()
            document.getElementById("openSidebarMenu").checked = false;
            newDiv.remove();
            
        })
    }
    
})

function closeAllMenus() {
    menuItemHasChildren.forEach(menu=>{
        if(menu.classList.contains('open')){
            menu.classList.remove('open')
        }
        if(navContainer.classList.contains('lvl2')){
            navContainer.classList.remove('lvl2')
        }
        if(navContainer.classList.contains('lvl3')){
            navContainer.classList.remove('lvl3')
        }
    })
}


//make header smaller on scroll
setTimeout(headerSmaller, 100);

function headerSmaller(){
  let top = window.pageYOffset || document.documentElement.scrollTop;
//console.log(top)
  if(top<110){
    setTimeout(headerSmaller, 100);
    if(cHeader.classList.contains('smaller')){
        cHeader.classList.remove('smaller')
    }
  } else {
    if(!cHeader.classList.contains('smaller')){
        cHeader.classList.add('smaller')
    }
    setTimeout(headerSmaller, 100);
  }
}