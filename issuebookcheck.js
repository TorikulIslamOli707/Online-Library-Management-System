function issuebookinputcheck() {
    if (idcheck()) {
        if (categorycheck()) {
            if (bookNameCheck()) {
                if (authorCheck()) {
                    if (editionCheck()) {
                        if (issuedatecheck()) {
                            if (returndatecheck()) {} else {
                                return false;
                            }
                        } else {
                            return false;
                        }
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function idcheck() {
    var message, x;
    message = document.getElementById('id_error');
    message.innerHTML = '';
    x = document.getElementById('id').value;

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

function categorycheck() {
    var message, x;
    message = document.getElementById('category_error');
    message.innerHTML = '';
    x = document.getElementById('category').value;
    if (x == '') {
        message.innerHTML = 'Please select category';
        return false;
    } else {
        return true;
    }
}

function bookNameCheck() {
    var message, x;
    message = document.getElementById('bookname_error');
    message.innerHTML = '';
    x = document.getElementById('bookname').value;

    if (x == '') {
        message.innerHTML = "Book Name can't be empty";
        return false;
    }
    var letters = /^[a-zA-Z\s-, ]+$/;
    if (x.match(letters)) {
        return true;
    } else {
        message.innerHTML = 'Book name must have alphabet characters only';
        return false;
    }
}

function authorCheck() {
    var message, x;
    message = document.getElementById('author_error');
    message.innerHTML = '';
    x = document.getElementById('author').value;

    if (x == '') {
        message.innerHTML = "Author Name can't be empty";
        return false;
    }
    var letters = /^[a-zA-Z\s-, ]+$/;
    if (x.match(letters)) {
        return true;
    } else {
        message.innerHTML = 'Author name must have alphabet characters only';
        return false;
    }
}

function editionCheck() {
    var message, x;
    message = document.getElementById('edition_error');
    message.innerHTML = '';
    x = document.getElementById('edition').value;
    if (x == '') {
        message.innerHTML = 'Please select edition';
        return false;
    } else {
        return true;
    }
}

function issuedatecheck() {
    var message, x;
    message = document.getElementById('sdate_error');
    message.innerHTML = '';
    x = document.getElementById('sdate').value;
    if (x == '') {
        message.innerHTML = 'Please select Issue date';
        return false;
    } else {
        return true;
    }
}

function returndatecheck() {
    var message, x;
    message = document.getElementById('rdate_error');
    message.innerHTML = '';
    x = document.getElementById('rdate').value;
    if (x == '') {
        message.innerHTML = 'Please select return date';
        return false;
    } else {
        return true;
    }
}