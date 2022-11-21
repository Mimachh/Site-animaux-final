/**  JS POUR AFFICHER UNE DIV */

let bouton_cache1 = document.getElementById("bouton_cache1");
let d2 = document.getElementById("d2");

function cache(){
  if(getComputedStyle(d2).display != "block")
  {d2.style.display = "block";}
  else {
    d2.style.display = "none";
  }
};

bouton_cache1.onclick = cache;

let bouton_cache2 = document.getElementById("bouton_cache2");
let d3 = document.getElementById("d3");

function cache2(){
  if(getComputedStyle(d3).display != "block")
  {d3.style.display = "block";}
  else {
    d3.style.display = "none";
  }
};

bouton_cache2.onclick = cache2;


let bouton_cache3 = document.getElementById("bouton_cache3");
let d4 = document.getElementById("d4");

function cache3(){
  if(getComputedStyle(d4).display != "block")
  {d4.style.display = "block";}
  else {
    d4.style.display = "none";
  }
};

bouton_cache3.onclick = cache3;

let bouton_cache4 = document.getElementById("bouton_cache4");
let d5 = document.getElementById("d5");

function cache4(){
  if(getComputedStyle(d5).display != "block")
  {d5.style.display = "block";}
  else {
    d5.style.display = "none";
  }
};

bouton_cache4.onclick = cache4;

let bouton_cache5 = document.getElementById("bouton_cache5");
let d6 = document.getElementById("d6");

function cache5(){
  if(getComputedStyle(d6).display != "block")
  {d6.style.display = "block";}
  else {
    d6.style.display = "none";
  }
};

bouton_cache5.onclick = cache5;

/** FIN DU JS POUR AFFICHER UNE DIV */


/* Js Landing Page Text Animation */

gsap.to('.text0',{
  x:'20%',rotate:10,duration:0.85,scrollTrigger:{
    trigger:'.text0',
    scrub:true,
    start:'top 20%'
  }
})
gsap.to('.text2',{
  x:'20%',rotate:10,duration:0.85,scrollTrigger:{
    trigger:'.text2',
    scrub:true,
    start:'top 40%'
  }
})
gsap.to('.text1',{
  x:'-20%',rotate:-10,duration:0.85,scrollTrigger:{
    trigger:'.text1',
    scrub:true,
    start:'top 30%'
  }
})
gsap.to('.text3',{
  x:'-20%',rotate:-10,duration:0.85,scrollTrigger:{
    trigger:'.text3',
    scrub:true,
    start:'top 40%'
  }
})
document.querySelector('#back').addEventListener('click',()=>{
      gsap.to(window, {duration: 1, scrollTo:'body'});

})

