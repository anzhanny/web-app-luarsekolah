
// header
const header = document.querySelector('.header');

// Tambahkan event listener untuk scroll
window.addEventListener('scroll', function () {
    if (window.scrollY > 50) {
        header.classList.add('scrolled'); 
    } else {
        header.classList.remove('scrolled'); 
    }
});



// dropdown
document.querySelectorAll('.dropdown').forEach(function (dropdown) {
    const button = dropdown.querySelector('.dropbtn');
    const content = dropdown.querySelector('.dropdown-content');
    const arrow = button.querySelector('.arrow');

    button.addEventListener('click', function (e) {
        e.stopPropagation(); 
        document.querySelectorAll('.dropdown-content').forEach(function (item) {
            if (item !== content) {
                item.style.display = 'none'; 
                item.previousElementSibling.classList.remove('active');
            }
        });


        if (content.style.display === 'block') {
            content.style.display = 'none';
            button.classList.remove('active');
        } else {
            content.style.display = 'block';
            button.classList.add('active');
        }
    });


    window.addEventListener('click', function () {
        content.style.display = 'none';
        button.classList.remove('active');
    });
});

// story
document.addEventListener("scroll", () => {
    const story = document.querySelector(".story");
    const slideshow = document.querySelector(".slideshow");
    const storyRect = story.getBoundingClientRect();
    const slideshowRect = slideshow.getBoundingClientRect();


    if (slideshowRect.top < window.innerHeight && slideshowRect.bottom > 0) {
        story.style.opacity = "0"; 
    } else {
        story.style.opacity = "1"; 
    }
});

/* Slide Kegiatan*/

const cardContainer = document.querySelector('.card-container-kegiatan');
const dots = document.querySelectorAll('.pagination-kegiatan .dot');
let isDown = false;
let startX;
let scrollLeft;

cardContainer.addEventListener('mousedown', (e) => {
    isDown = true;
    cardContainer.classList.add('active');
    startX = e.pageX - cardContainer.offsetLeft;
    scrollLeft = cardContainer.scrollLeft;
});

cardContainer.addEventListener('mouseleave', () => {
    isDown = false;
    cardContainer.classList.remove('active');
});

cardContainer.addEventListener('mouseup', () => {
    isDown = false;
    cardContainer.classList.remove('active');
});

cardContainer.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - cardContainer.offsetLeft;
    const walk = (x - startX) * 3; //scroll-fast
    cardContainer.scrollLeft = scrollLeft - walk;
    updateDots();
});

function updateDots() {
    const cardWidth = cardContainer.querySelector('.card-kegiatan').offsetWidth + 20; // card width + margin
    const scrollPosition = cardContainer.scrollLeft;
    const activeIndex = Math.round(scrollPosition / cardWidth);
    dots.forEach((dot, index) => {
        if (index === activeIndex) {
            dot.classList.add('active');
        } else {
            dot.classList.remove('active');
        }
    });
}

dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        const cardWidth = cardContainer.querySelector('.card-kegiatan').offsetWidth + 20; // card width + margin
        cardContainer.scrollTo({
            left: cardWidth * index,
            behavior: 'smooth'
        });
        dots.forEach(d => d.classList.remove('active'));
        dot.classList.add('active');
    });
});

updateDots();

