let slike = document.querySelectorAll('.slicice img');

slike.forEach(slika => {
    slika.addEventListener('click', () => {
        document.querySelector('.conSlika').src = slika.src;
    });
});