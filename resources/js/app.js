import Alpine from 'alpinejs'
import getWeather from './weather'
import time from './dateTime'

window.Alpine = Alpine
window.getWeather = getWeather

time();
setInterval(time, 1000);


Alpine.start()

const cursorRounded = document.querySelector('.rounded-cursor');
const elementsWithCustomCursor = document.querySelectorAll('.custom-cursor-white');

const moveCursor = (e) => {
  const mouseY = e.clientY;
  const mouseX = e.clientX;
  cursorRounded.style.transform = `translate3d(${mouseX}px, ${mouseY}px, 0)`;

}

elementsWithCustomCursor.forEach(function(element) {

    element.addEventListener('mouseenter', function() {
        cursorRounded.classList.add('cursor-lighten');
    });

    element.addEventListener('mouseleave', function() {
        cursorRounded.classList.remove('cursor-lighten');
    });
});


window.addEventListener('scroll', function () {
    const scrollX = window.scrollX
    const scrollY = window.scrollY

    cursorRounded.style.left = scrollX + 'px';
    cursorRounded.style.top = scrollY + 'px';
});

window.addEventListener('mousemove', moveCursor)


