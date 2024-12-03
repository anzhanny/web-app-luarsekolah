
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
