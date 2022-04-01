localStorage.setItem("Учёба","+");
setCookie('Учёба', '', 12);

function setCookie(name, value, days) {
    var date = new Date;
    date.setDate(date.getDate() + days);
    value = encodeURIComponent(value);
    document.cookie = name + "=" + value + ";path=/; expires=" + date.toUTCString();
};