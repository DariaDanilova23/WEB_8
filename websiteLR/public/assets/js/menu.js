localStorage.setItem("Главная", "+");
setCookie('Главная', '', 12);

function setCookie(name, value, days) {
    var date = new Date;
    date.setDate(date.getDate() + days);
    document.cookie = name + "=" + value + ";path=/; expires=" + date.toUTCString();
};

function zero(value) {
    if (value < 10) {
        value = '0' + value;
    }
    return value;
}

function date_time() {
    temp_date = new Date();
    day = zero(temp_date.getDate());
    month = zero(temp_date.getMonth() + 1);
    year = zero(temp_date.getFullYear());
    hours = zero(temp_date.getHours());
    minutes = zero(temp_date.getMinutes());
    seconds = zero(temp_date.getSeconds());
    return day + "." + month + "." + year + " " + hours + ":" + minutes + ":" + seconds;
}
setInterval(function() {
    document.getElementById('current_date').innerHTML = date_time();
}, 1000);