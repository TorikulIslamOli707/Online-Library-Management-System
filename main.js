function checkInputs() {
    if (namecheck()) {
        if (idcheck()) {
            if (deptcheck()) {
                if (batchnocheck()) {
                    if (emailcheck()) {
                        if (numbercheck()) {
                            if (passwordcheck()) {
                                if (cspasswordcheck()) {} else {
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
    } else {
        return false;
    }
    /*if(namecheck()){
    if(idcheck()){
      if(deptcheck()){
        if(batchnocheck()){
          if(emailcheck()){
            if(numbercheck()){
             if(passwordcheck()){
              if(cspasswordcheck()){
          
            }else{
              return false;
            }
          }else{
            return false;
          }
        }else{
          return false;
        }  
    }else{
      return false;
    }
    }else{
      return false;
    }
  }else{
    return false;
  }else{
    return false;
  }
    */
}

function checkInputsForStudentLogin() {
    if (lidcheck()) {
        if (lpasscheck()) {} else {
            return false;
        }
    } else {
        return false;
    }
}

/******************************************************************************************************************* */

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

function batchnocheck() {
    var message, x;
    message = document.getElementById('batchno_error');
    message.innerHTML = '';
    x = document.getElementById('batchno').value;
    if (x == '') {
        message.innerHTML = 'Please select batchno!';
        return false;
    } else {
        return true;
    }
}

function namecheck() {
    var message, x;
    message = document.getElementById('name_error');
    message.innerHTML = '';
    x = document.getElementById('name').value;

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

function passwordcheck() {
    //return true;
    var message, x;
    message = document.getElementById('password_error');
    message.innerHTML = '';
    x = document.getElementById('spassword').value;

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

function cspasswordcheck() {
    // return true;
    var message, x;
    message = document.getElementById('cspassword_error');
    message.innerHTML = '';
    x = document.getElementById('cspassword').value;

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

function emailcheck() {
    var message, x;
    message = document.getElementById('email_error');
    message.innerHTML = '';
    x = document.getElementById('email').value;

    if (x == '') {
        message.innerHTML = "Email can't be empty!";
        return false;
    } else {
        return true;
    }
}

function numbercheck() {
    var message, x;
    message = document.getElementById('number_error');
    message.innerHTML = '';
    x = document.getElementById('phone').value;

    if (x == '') {
        message.innerHTML = "Phone number can't be empty!";
        return false;
    } else {
        return true;
    }
}

/****************************student login ******** */
function lidcheck() {
    var message, x;
    message = document.getElementById('id_error');
    message.innerHTML = '';
    x = document.getElementById('lid').value;
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

function lpasscheck() {
    var message, x;
    message = document.getElementById('password_error');
    message.innerHTML = '';
    x = document.getElementById('lpassword').value;

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
/****************************admin login ******** */