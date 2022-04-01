let storage = document.querySelector('tbody.LS');
let cookieStore = document.querySelector('tbody.Cookie');
let cookiesArray = document.cookie.split(';');
for (let key in localStorage) {
    if (!localStorage.hasOwnProperty(key)) {
        continue;
    }
    let tr = document.createElement('tr');
    tr.innerHTML = ("<tr>" + key + localStorage.getItem(key) + "</tr>");
    storage.append(tr);
}
let cookiesArray = document.cookie.split(';');
for (let cookie of cookiesArray) {
    let tr2 = document.createElement('tr');
    tr2.innerHTML = cookie;
    cookieStore.append(tr2);
}