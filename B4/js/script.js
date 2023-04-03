let slike = [
    slika1 = {
        naslov: "Фаун са звездама",
        godina: 1955,
        tekst: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incid",
        source: "img/slika1.jpg"
    },
    slika2 = {
        naslov: "Шуки са звездама",
        godina: 2005,
        tekst: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incid",
        source: "img/slika2.jpg"
    },
    slika3 = {
        naslov: "Шуки са парама",
        godina: 2025,
        tekst: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incid",
        source: "img/slika3.jpg"
    },
    slika4 = {
        naslov: "Свет са шукијем",
        godina: 2022,
        tekst: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incid",
        source: "img/slika4.jpg"
    },
    slika5 = {
        naslov: "Свет без шукија",
        godina: 3000,
        tekst: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incid",
        source: "img/slika5.jpg"
    }
];


let i = 1;
let sl;
const opis = document.querySelector('#godina');
setInterval(() => {
    document.querySelector('section#galerija img').src = slike[i].source;
    document.querySelector('h2').innerText = slike[i].naslov;
    document.querySelector('#opis').innerText = slike[i].tekst;
    document.querySelector('#godina').innerText = slike[i].godina;
    let buttons = document.querySelectorAll('.indicators button');
    buttons[i-1].classList.remove('active');
    buttons[i].classList.add('active');
    i = (i + 1) % 5;
}, 3000);   