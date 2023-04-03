//alert('Kliknite na stranicu negde da bi interakcija radila');
let slike = document.querySelectorAll('.circle');

slike.forEach(slika => {
    slika.addEventListener('mouseover', () => {
        let audioString = "sound/" + slika.id + ".mp3";
        let audio = new Audio(audioString);
        audio.play();/* 
        console.log(slika.id);
        console.log(audioString);
        console.log(window.location.href); */
    });
    slika.addEventListener('click', () => {
        let pageString = "pages/animals/" + slika.id + ".html";
        window.open(pageString, 'window', 'width=400,height=400');

    });
});