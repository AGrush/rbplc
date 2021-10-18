let myMarquee = document.querySelector('.c-tickertape')



// let observerOptions = {
//   root: document.querySelector('[data-id="observedArea"]'),
//   threshold: 1.0
// }


// const countUpObserver = new IntersectionObserver((entries, countObserver) => {
//   entries.forEach((entry) => {


//         if (entry.intersectionRatio = 50) {

//           console.log("the target is  ")

//         } else {
//           console.log("thdsfe target is  ")
//         }


//         // countObserver.unobserve(myTarget);

//   })
// }, observerOptions);
// const arr = document.querySelectorAll(".tickertape-wrapper")
// arr.forEach((v) => {
//     countUpObserver.observe(v);
// })

let outerBox = document.querySelector('.box');
let firstBox = document.querySelector('.first-box');
let secondBox = document.querySelector('.second-box');
let collection = document.querySelector('.collection');
let targets = document.querySelectorAll("[class*='target']");
let firstBoxRect = firstBox.getBoundingClientRect();
let collectionRect = collection.getBoundingClientRect();
let collectionRightSide = collectionRect.right;
let collectionLeftSide = collectionRect.left;
let collectionWidth = collectionRect.right - collectionRect.left;
let step = -5;
let collectionRight = 0;
let myRAF;
let intersected;

// function inViewport(elem, callback, options = {}) {
//   return new IntersectionObserver(entries => {
//       entries.forEach(entry => callback(entry));
//   }, options).observe(document.querySelector(elem));
// }

// //check if all items are on screen
// targets.forEach(target=>{
//   console.log(`${target.classList[0]}`)
//   inViewport(`.${target.classList[0]}`, element => {
//     document.querySelector('.box strong').textContent = element.isIntersecting;
//     console.log(intersected)
//   }, {
//     root: null
//   });
// })



function animate() {
    collectionRect = collection.getBoundingClientRect();
    firstBoxRect = firstBox.getBoundingClientRect();
    console.log(firstBoxRect.right)
    collection.style.right = `${collectionRight}px`;
    collectionRight -= step;
    myRAF = requestAnimationFrame(animate);
    if(firstBoxRect.left <= 0 ){
      let firstThree = document.querySelectorAll(".first-box [class*='target']:nth-child(-n+3)")
      firstThree.forEach(el=>{
        let clone = el.cloneNode(true);
        secondBox.appendChild(clone)
        cancelAnimationFrame(myRAF);
        // box.insertAdjacentElement('beforeend', el);
      })
    }
}

// animate();