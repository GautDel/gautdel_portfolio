import Alpine from 'alpinejs'
import getWeather from './weather'
import time from './dateTime'

window.Alpine = Alpine
window.getWeather = getWeather

time();
setInterval(time, 1000);

Alpine.start()

