localStorage.setItem("Тест", "+");
setCookie('Тест', '', 12);

function setCookie(name, value, days) {
    var date = new Date;
    date.setDate(date.getDate() + days);
    value = encodeURIComponent(value);
    document.cookie = name + "=" + value + ";path=/; expires=" + date.toUTCString();
};

function validate_form() {
    var name = document.getElementById("fio");
    var num = 0;
    var a1 = document.quiz.q1.value;
    var a2 = document.quiz.q2.value;
    var a3 = document.quiz.q3.value;
    var a4 = document.quiz.q4.value;
    var a5 = document.quiz.q5.value;
    var Q1 = document.getElementById("q1");
    var Q2 = document.getElementById("q2");
    var Q3 = document.getElementById("q3");
    var Q4 = document.getElementById("q4");
    var Q5 = document.getElementById("q5");
    var valid1 = false;
    var valid3 = false;
    var valid4 = false;
    var valid5 = false;
    var str = document.getElementById("fio").value;
    var cnt = 0,
        startpos = 0;
    while (str.indexOf(" ", startpos) >= 0) {
        cnt++;
        startpos = str.indexOf(" ", startpos) + 1;
    }
    if (startpos < str.length) {
        cnt++;
    }
    if (cnt != 3) {
        name.style.border = "2px solid red";
        document.querySelector("div.error_name").style.visibility = "visible";
        name.focus();
        return false;
    } else {
        document.querySelector("div.error_q1").style.visibility = "Hidden";
        name.style.border = "none";
    };
    var x = document.quiz.q1;
    for (var i = 0; i < x.length; i++) {
        if (x[i].checked) {
            valid1 = true;
        }
    }
    if (valid1 == false) {
        document.querySelector("div.error_q1").style.visibility = "visible";
        document.getElementById("q1").focus();
        return false;
    } else {
        document.querySelector("div.error_q1").style.visibility = "Hidden";
    };
    checkint = Q2.value;
    if (!Q2.value) {
        document.querySelector("div.error_q2").style.visibility = "visible";
        Q2.focus();
        return false;
    } else {
        document.querySelector("div.error_q2").style.visibility = "Hidden";
    };
    var x3 = document.quiz.q3;
    for (var r = 0; r < x3.length; r++) {
        if (x3[r].checked) {
            valid3 = true;
        }
    }
    if (valid3 == false) {
        document.querySelector("div.error_q3").style.visibility = "visible";
        document.getElementById("q3").focus();
        return false;
    } else {
        document.querySelector("div.error_q3").style.visibility = "Hidden";
    };
    var x4 = document.quiz.q4;
    for (var k = 0; k < x4.length; k++) {
        if (x4[k].checked) {
            valid4 = true;
        }
    }
    if (valid4 == false) {
        document.querySelector("div.error_q4").style.visibility = "visible";
        document.getElementById("q4").focus();
        return false;
    } else {
        document.querySelector("div.error_q4").style.visibility = "Hidden";
    };
    var x5 = document.quiz.q5;
    for (var j = 0; j < x5.length; j++) {
        if (x5[j].checked) {
            valid5 = true;
        }
    }
    if (valid5 == false) {
        document.querySelector("div.error_q5").style.visibility = "visible";
        document.getElementById("q5").focus();
        return false;
    }
    if (a1 == "yes") {
        num++;
        document.querySelector("div.no_1").style.backgroundColor = "green";
    } else {
        document.querySelector("div.no_1").style.backgroundColor = "red";
    }
    if (a2 == "3") {
        num++;
        document.querySelector("div.no_2").style.backgroundColor = "green";
    } else {
        document.querySelector("div.no_2").style.backgroundColor = "red";
    }
    if (a3 == "yes") {
        num++;
        document.querySelector("div.no_3").style.backgroundColor = "green";
    } else {
        document.querySelector("div.no_3").style.backgroundColor = "red";
    }
    if (a4 == "yes") {
        num++;
        document.querySelector("div.no_4").style.backgroundColor = "green";
    } else {
        document.querySelector("div.no_4").style.backgroundColor = "red";
    }
    if (a5 == "yes") {
        num++;
        document.querySelector("div.no_5").style.backgroundColor = "green";
    } else {
        document.querySelector("div.no_5").style.backgroundColor = "red";
    }
    document.getElementById("after_sub").style.visibility = "visible";
    document.getElementById("num_correct").innerHTML = "Результат: " + num + "/5";
    return true;
}