localStorage.setItem("Контакт", "+");

function checkParams() {
    var cnt = 0,
        startpos = 0;
    var check1, check2, check3 = 0;
    var name = document.getElementById("fio");
    var phone = document.getElementById("phone");
    var str = name.value;
    var tel = phone.value;
    var c = 0,
        start = 0;
    var email = document.getElementById("email");
    var em = email.value;
    let re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
    let regex = /^\+[73][0-9]{10}$/;
    //var sub= document.getElementsByClassName("submit");
    //проверка фио	
    if (!name.value) {
        document.querySelector("div.error_fio").textContent = "Пожалуйста, заполните поле ФИО";
        document.querySelector("div.error_fio").style.visibility = "visible";
        name.focus();
        return false;
    } else {
        document.querySelector("div.error_fio").style.visibility = "Hidden";
        while (str.indexOf(" ", startpos) >= 0) {
            cnt++;
            startpos = str.indexOf(" ", startpos) + 1;
        }
        if (startpos < str.length) cnt++;
        if (cnt != 3) {
            document.querySelector("div.error_fio").textContent = "ФИО должно содержать 3 слова";
            document.querySelector("div.error_fio").style.visibility = "visible";
            name.focus();
            return false;
        } else {
            document.querySelector("div.error_fio").style.visibility = "Hidden";
            check1 = 1;
        }
        //проверка почты	
        if (!email.value) {
            document.querySelector("div.error_email").textContent = "Пожалуйста, заполните поле email";
            document.querySelector("div.error_email").style.visibility = "visible";
            email.focus();
            return false;
        } else {
            document.querySelector("div.error_email").style.visibility = "Hidden";
            if (!re.test(em)) {
                document.querySelector("div.error_email").textContent = "Неправильный формат поля email";
                document.querySelector("div.error_email").style.visibility = "visible";
                email.focus();
                return false;
            } else {
                document.querySelector("div.error_email").style.visibility = "Hidden";
                check2 = 1;
            }
            //
            //проверка телефона
            if (!phone.value) {
                document.querySelector("div.error_tele").textContent = "Пожалуйста, заполните поле телефон";
                document.querySelector("div.error_tele").style.visibility = "visible";
                phone.focus();
                return false;
            } else {
                document.querySelector("div.error_tele").style.visibility = "Hidden";
                if (!regex.test(tel)) {
                    document.querySelector("div.error_tele").textContent = "Поле телефон может начинаться только с +7 или +3";
                    document.querySelector("div.error_tele").style.visibility = "visible";
                    phone.focus();
                    return false;
                } else {
                    document.querySelector("div.error_tele").style.visibility = "Hidden";
                    check3 = 1;
                }
            }
        };
    };
    if ((name.value) && (email.value) && (phone.value) && (check1 == 1) && (check2 == 1) && (check3 == 1)) {
        submit.removeAttribute('disabled');
    }
}