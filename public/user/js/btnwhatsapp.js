document.getElementById('waButton').addEventListener('click', function() {
    const popup = document.getElementById('popup');
    const buttonIcon = document.getElementById('buttonIcon');
    const waButton = document.getElementById('waButton');

    waButton.classList.toggle('clicked');
    
    if (popup.style.display === 'block') {
        popup.classList.remove('show');
        setTimeout(() => {
            popup.style.display = 'none';
            // buttonIcon.src = 'user/img/wa.png';

        }, 300);
    } else {
        popup.style.display = 'block';
        setTimeout(() => {
            popup.classList.add('show');
            // buttonIcon.src = 'user/img/del.png';
            // buttonIcon.src = 'user/img/wa.png';
        }, 10);
    }
});

window.addEventListener('click', function(event) {
    const popup = document.getElementById('popup');
    const buttonIcon = document.getElementById('buttonIcon');
    const waButton = document.getElementById('waButton');

    if (event.target === popup) {
        popup.classList.remove('show');
        waButton.classList.remove('clicked');
        setTimeout(() => {
            popup.style.display = 'none';
            // buttonIcon.src = 'user/img/wa.png';
        }, 300);
    }
});

document.querySelectorAll('.waLink').forEach(button => {
    button.addEventListener('click', function() {
        const phone = this.getAttribute('data-phone');
        const message = encodeURIComponent(this.getAttribute('data-message'));
        window.open(`https://wa.me/${phone}?text=${message}`, '_blank');
    });
});