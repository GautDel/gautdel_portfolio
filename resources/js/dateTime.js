const clock = document.getElementById("clock");
const dateEl = document.getElementById("date");
const dayEl = document.getElementById("day");

export default function time() {
    const weekdays = ["SUNDAY", "MONDAY", "TUESDAY", "WEDNESDAY", "THURSDAY", "FRIDAY", "SATURDAY"];
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    const now = new Date();

    const date = now.getDate();
    const day = weekdays[now.getDay()];
    const month = months[now.getMonth()];
    const year = now.getFullYear();

    const franceTimeOptions = {
        timeZone: 'Europe/Paris',
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit',
        hour12: false
    };

    const franceTimeString = now.toLocaleTimeString(undefined, franceTimeOptions);

    clock.innerText = franceTimeString;
    dateEl.innerText = `${date}, ${month}, ${year}`;
    dayEl.innerText = `${day}`;
}
