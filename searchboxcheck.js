function searchboxcheck() {
    if (deptcheck()) {
        if (idcheck()) {} else {
            return false;
        }
    } else {
        return false;
    }
}

function deptcheck() {
    var message, x;
    message = document.getElementById('dept_error');
    message.innerHTML = '';
    x = document.getElementById('department').value;
    if (x == '') {
        message.innerHTML = 'Please select department';
        return false;
    } else {
        return true;
    }
}

function idcheck() {
    var message, x;
    message = document.getElementById('id_error');
    message.innerHTML = '';
    x = document.getElementById('sid').value;

    if (x == '') {
        message.innerHTML = "Id can't be empty!";
        return false;
    }
    var letters = /^[0-9]+$/;
    if (x.match(letters)) {
        if (x.length != 9) {
            message.innerHTML = 'Id must have 9 Numbers only';
            return false;
        }
        return true;
    } else {
        message.innerHTML = 'Id must have Numbers only';
        return false;
    }
}