var pas1 = '0 0';
var regExPass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
function acept_pasFun(password) {
    if (password.value.search(regExPass) != -1) {
        password.style = 'border-bottom: 2px solid #9ACD32;';
    }
    else {
        password.style = 'border-bottom: 2px solid #B22222;';
    }
    pas1 = password.value;
}
function acept_pas2Fun(password2) {
    if (password2.value === pas1) {
        password2.style = 'border-bottom: 2px solid #9ACD32;';
    }
    else {
        password2.style = 'border-bottom: 2px solid #B22222;';
    }
}
var regExEmail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]+)$/;
function emailFun(email) {
    if (email.value.search(regExEmail) != -1) {
        email.style = 'border-bottom: 2px solid #9ACD32;';
    }
    else {
        email.style = 'border-bottom: 2px solid #B22222;';
    }
}
var regExName = /^[A-Z][a-z-0-9]{1,11}$/u;
function nameFun(name) {
    if (name.value.search(regExName) != -1) {
        name.style = 'border-bottom: 2px solid #9ACD32;';
    }
    else {
        name.style = 'border-bottom: 2px solid #B22222;';
    }
}    