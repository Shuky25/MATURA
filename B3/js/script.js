let slikeZemalja = document.querySelectorAll('.zemlje img');
let linkoviZemalja = document.querySelectorAll('.zemlje p');
let a;
slikeZemalja.forEach(s => {
    s.addEventListener('mouseover', () => {
        let audioString = "sounds/" + s.alt + ".mp3";
        a = new Audio(audioString);
        a.play();
    });
    s.addEventListener('mouseout', () => {
        a.pause();
        a.currentTime = 0;
    });
});

linkoviZemalja.forEach(l => {
    l.addEventListener('click', () => {
        let linkPutanja = "pages/zemlje/" + l.id + ".html";
        window.open(linkPutanja, 'window', 'width=800,height=600');
    });
});
