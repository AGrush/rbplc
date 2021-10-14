import { CountUp } from '../libraries/countup';

//intersection observer setup
let observedElement;

//counter divs
var hpStat1 = document.getElementById('hp-stat1')
var hpStat2 = document.getElementById('hp-stat2')
var hpStat3 = document.getElementById('hp-stat3')
var hpStat4 = document.getElementById('hp-stat4')

let hpStat1countUp = 0;
let hpStat2countUp = 0;
let hpStat3countUp = 0;
let hpStat4countUp = 0;

//take the number countUp will use from the wp connected field onload.
if(hpStat1){
  hpStat1countUp = hpStat1.innerHTML
} 
if(hpStat2){
  hpStat2countUp = hpStat2.innerHTML
}
if(hpStat3){
  hpStat3countUp = hpStat3.innerHTML
}
if(hpStat4){
  hpStat4countUp = hpStat4.innerHTML
}

//init counters
let countUpOptions1 = {
  startVal: 0,
  decimalPlaces: 1,
  easingFn: slowEase
}
const countUpStat1 = new CountUp('hp-stat1', hpStat1countUp, countUpOptions1);

let countUpOptions2 = {
  startVal: 0,
  easingFn: slowEase
}
const countUpStat2 = new CountUp('hp-stat2', hpStat2countUp, countUpOptions2);

let countUpOptions3 = {
  startVal: 0,
  easingFn: slowEase
}
const countUpStat3 = new CountUp('hp-stat3', hpStat3countUp, countUpOptions3);

let countUpOptions4 = {
  startVal: 0,
  easingFn: slowEase
}
const countUpStat4 = new CountUp('hp-stat4', hpStat4countUp, countUpOptions4);




window.onload = function () {
  startObservingCountUpIntersection ()
}


function startObservingCountUpIntersection (){
  //Intersection observer to start hp number animation
  const countUpObserver = new IntersectionObserver((entries, countObserver) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            const myTarget = entry.target
            console.log("the target is  ", myTarget)
            startCountingUp();
            // myTarget.src = myTarget.dataset.src
            countObserver.unobserve(myTarget);
        }
    })
  });
  const arr = document.querySelectorAll("[data-id='io1']")
  arr.forEach((v) => {
      countUpObserver.observe(v);
  })
}

function startCountingUp () {
  //only load on page where countUp exists
  if(hpStat1){
    //only load if no errors in countUp
    if (!countUpStat1.error) {
      countUpStat1.start();
      countUpStat2.start();
      countUpStat3.start();
      countUpStat4.start();
    } else {
      console.error(countUpStat1.error);
    }
  }
}



//Ease functions
function fastEase(t, b, c, d) {
  return c * (-Math.pow(2, -10 * t / d) + 1) * 1024 / 1023 + b;
}

function normalEase(t, b, c, d) {
  var ts = (t /= d) * t;
  var tc = ts * t;
  return b + c * (tc * ts + -5 * ts * ts + 10 * tc + -10 * ts + 5 * t);
}

function slowEase(t, b, c, d) {
  var ts = (t /= d) * t;
  var tc = ts * t;
  return b + c * (tc + -3 * ts + 3 * t);
}

