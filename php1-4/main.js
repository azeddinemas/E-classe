document.getElementById("signupform").addEventListener('submit', validationf);

function validationf(e) {


    let name = document.getElementById('nom').value;
    let email1 = document.getElementById('email').value;
    let password = document.getElementById('pin').value;
    let pass = document.getElementById('config').value;

    let regemail = /^([a-z0-9]+(@gmail.com))$/i;



    if (name == "") {
        document.getElementById('name').innerHTML = "*le champ ne peut pas être vide*";
        e.preventDefault();
        return false;
    }
    if (email1 == "") {
        let emailEr = document.getElementById('emailid');
        emailEr.innerHTML = "*le champ ne peut pas être vide*";
        e.preventDefault();
        return false;

    }
    if (!email1.match(regemail)) {
        document.getElementById('email').innerHTML = "*votre email invalid*";
        e.preventDefault();
        return false;
    }
    if (password == "") {
        document.getElementById('password').innerHTML = "*le champ ne peut pas être vide*";
        e.preventDefault();
        return false;
    }
    if (pass == "") {
        document.getElementById('pass').innerHTML = "*le champ ne peut pas être vide*";
        e.preventDefault();
        return false;

    }
    if (pass != password) {

        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'votre confirmation de password incorrect!'
        })
        e.preventDefault();
        return false;
    }


}