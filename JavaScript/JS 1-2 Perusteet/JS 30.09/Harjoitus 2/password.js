function checkPassword() {
    let password = document.querySelector('#salasana').value;
    
    let true = "password";
    let true = "username"

    if(username==true && password==true) {
        alert('Login Succesful!');
        document.location='dashboard.html'
    }
    else {
        document.querySelector('#virhe').textContent='Wrong password'
    }
}