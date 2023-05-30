function checkInputsForAdminLogin() {
    if (namecheck1()) {
        if (lpasscheck1()) {} else {
            return false;
        }
    } else {
        return false;
    }
}

function namecheck1() {
    var message, x;
    message = document.getElementById('name_error1');
    message.innerHTML = '';
    x = document.getElementById('name1').value;

    if (x == '') {
        message.innerHTML = "Username can't be empty";
        return false;
    }

    var letters = /^[a-zA-Z\s-, ]+$/;
    if (x.match(letters)) {
        return true;
    } else {
        message.innerHTML = 'Username must have alphabet characters only';
        return false;
    }
}

function lpasscheck1() {
    var message, x;
    message = document.getElementById('password_error1');
    message.innerHTML = '';
    x = document.getElementById('lpassword1').value;

    if (x == '') {
        message.innerHTML = "Password can't be empty!";
        return false;
    }
    if (x.length < 6) {
        message.innerHTML = 'Minimum six characters';
        return false;
    } else {
        return true;
    }
}