// Elementi presenti nel html 
const card1 = document.querySelector("#card1"); // card pamela
const card2 = document.querySelector("#card2"); // card alessia
const colonna1 = document.querySelector("#colonna1"); // colonna pamela
const colonna2 = document.querySelector("#colonna2"); // colonna alessia
const title = document.querySelector(".title");
const foto_pam = document.querySelector("#foto_pam");
const foto_ale = document.querySelector("#foto_ale");
const description = document.querySelector(".info h3");
const sizes = document.querySelector(".sizes");
// Colonna Pamela
// Evento per movimento animazione al movimento del mouse
colonna1.addEventListener("mousemove", (e) => {
  let xAxis = (window.innerWidth / 2 - e.pageX) / 25;
  let yAxis = (window.innerHeight / 2 - e.pageY) / 25;
  card1.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
});
// Animazione all'interno della card1
colonna1.addEventListener("mouseenter", (e) => {
  card1.style.transition = "none";
  title.style.transform = "translateZ(150px)";
  foto_pam.style.transform = "translateZ(200px) rotateY(10deg) rotateX(5deg) rotateZ(5deg)";//rotazione foto
  description.style.transform = "translateZ(125px)";
  sizes.style.transform = "translateZ(100px)";
});
// Animazione "fuori" dalla card1
colonna1.addEventListener("mouseleave", (e) => {
  card1.style.transition = "all 0.5s ease";
  card1.style.transform = `rotateY(0deg) rotateX(0deg)`;
  // tornano indietro
  title.style.transform = "translateZ(0px)";
  foto_pam.style.transform = "translateZ(0px) rotateZ(0deg)";
  description.style.transform = "translateZ(0px)";
  sizes.style.transform = "translateZ(0px)";
});
// Colonna Alessia
// Evento per movimento animazione al movimento del mouse 
colonna2.addEventListener("mousemove", (e) => {
  let xAxis = (window.innerWidth / 2 - e.pageX) / 25;
  let yAxis = (window.innerHeight / 2 - e.pageY) / 25;
  card2.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
});
// Animazione all'interno della card2
colonna2.addEventListener("mouseenter", (e) => {
  card2.style.transition = "none";
  title.style.transform = "translateZ(150px)";
  foto_ale.style.transform = "translateZ(-200px) rotateY(-10deg) rotateX(-5deg) rotateZ(-5deg)";//rotazione foto opposta
  description.style.transform = "translateZ(125px)";
  sizes.style.transform = "translateZ(100px)";
});
// Animazione "fuori" dalla card2
colonna2.addEventListener("mouseleave", (e) => {
  card2.style.transition = "all 0.5s ease";
  card2.style.transform = `rotateY(0deg) rotateX(0deg)`;
  // tornano indietro
  title.style.transform = "translateZ(0px)";
  foto_ale.style.transform = "translateZ(0px) rotateZ(0deg)";
  description.style.transform = "translateZ(0px)";
  sizes.style.transform = "translateZ(0px)";
});
