// Elementi html 
const cadr1 = document.querySelector("#card1"); // card pamela
const cadr2 = document.querySelector("#card2"); // card alessia
const colonna1 = document.querySelector("#colonna1"); // colonna pamela
const colonna2 = document.querySelector("#colonna2"); // cointainer alessia

const title = document.querySelector(".title");
const foto_pam = document.querySelector("#foto_pam");
const foto_ale = document.querySelector("#foto_ale");
const description = document.querySelector(".info h3");
const sizes = document.querySelector(".sizes");

// Evento per movimento animazione (colonna pamela)
colonna1.addEventListener("mousemove", (e) => {
  let xAxis = (window.innerWidth / 2 - e.pageX) / 25;
  let yAxis = (window.innerHeight / 2 - e.pageY) / 25;
  cadr1.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
});
// Animazione all'interno della cadr1 (colonna pamela)
colonna1.addEventListener("mouseenter", (e) => {
  cadr1.style.transition = "none";
  title.style.transform = "translateZ(150px)";
  foto_pam.style.transform = "translateZ(200px) rotateY(10deg) rotateX(5deg) rotateZ(5deg)";//rotazione foto
  description.style.transform = "translateZ(125px)";
  sizes.style.transform = "translateZ(100px)";
});
// Animazione "fuori" dalla cadr1 (colonna pamela)
colonna1.addEventListener("mouseleave", (e) => {
  cadr1.style.transition = "all 0.5s ease";
  cadr1.style.transform = `rotateY(0deg) rotateX(0deg)`;
  // tornano indietro
  title.style.transform = "translateZ(0px)";
  foto_pam.style.transform = "translateZ(0px) rotateZ(0deg)";
  description.style.transform = "translateZ(0px)";
  sizes.style.transform = "translateZ(0px)";
});

// Evento per movimento animazione (colonna alessia)
colonna2.addEventListener("mousemove", (e) => {
  let xAxis = (window.innerWidth / 2 - e.pageX) / 25;
  let yAxis = (window.innerHeight / 2 - e.pageY) / 25;
  cadr2.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
});
// Animazione all'interno della cadr2 (colonna alessia)
colonna2.addEventListener("mouseenter", (e) => {
  cadr2.style.transition = "none";
  title.style.transform = "translateZ(150px)";
  foto_ale.style.transform = "translateZ(-200px) rotateY(-10deg) rotateX(-5deg) rotateZ(-5deg)";//rotazione foto -- diversa
  description.style.transform = "translateZ(125px)";
  sizes.style.transform = "translateZ(100px)";
});
// Animazione "fuori" dalla cadr2 (colonna alessia)
colonna2.addEventListener("mouseleave", (e) => {
  cadr2.style.transition = "all 0.5s ease";
  cadr2.style.transform = `rotateY(0deg) rotateX(0deg)`;
  // tornano indietro
  title.style.transform = "translateZ(0px)";
  foto_ale.style.transform = "translateZ(0px) rotateZ(0deg)";
  description.style.transform = "translateZ(0px)";
  sizes.style.transform = "translateZ(0px)";
});
