// JavaScript Document

function Validation(){
    var email = document.getElementById('email').value;
    var password = document.getElementById('pwd').value;
    
    if (email==="" || password==="") {
        alert('please enter required fields');
        return false;
    }
    else {
        return true;
    }
}