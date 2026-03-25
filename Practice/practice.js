console.log(connected)

function collectData(){
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    console.log("collected data from form");
    console.log(email);
    console.log(password);


    if(!email){
        document.getElementById(emailErr).innerHTML = "Email is required";
    }
    else{
        document.getElementById(emailErr).innerHTML = "";
    }

    if(!password){
        document.getElementById(passwordErr).innerHTML = "Password is required"
    }
    else{
        document.getElementById(passwordErr).innerHTML = ""
    }

    return false
}

function getEmail(){
const email = document.getElementById("email").value;
console.log("Given email is", email)
}

function getpassword(){
    const email = document.getElementById(password).value;
    
}
