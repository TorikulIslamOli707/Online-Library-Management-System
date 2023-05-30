function addBookInputsCheck() {
    if (categoryCheck()) {
        if (bookNameCheck()) {
            if (authorCheck()) {
                if (editionCheck()) {
                    if (priceCheck()) {} else {
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

function categoryCheck() {
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

function priceCheck() {
    var message, x;
    message = document.getElementById('price_error');
    message.innerHTML = '';
    x = document.getElementById('price').value;

    if (x == '') {
        message.innerHTML = "Price can't be empty";
        return false;
    }
    var letters = /^[0-9\s-, ]+$/;
    if (x.match(letters)) {
        return true;
    } else {
        message.innerHTML = 'Book name must have alphabet characters only';
        return false;
    }
}