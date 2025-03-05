const first_name = document.getElementById("first_name");
const last_name = document.getElementById("last_name");
const email = document.getElementById("email");
const pass = document.getElementById("pass");



async function signup() {
    if(!validate_password(pass.value)){
        alert("Your Password should contain letters, numbers and should contain more than 7 characters")
        return
    }

    const form = new FormData();

    form.append("first_name", first_name.value);
    form.append("last_name", last_name.value);
    form.append("email", email.value);
    form.append("pass", pass.value);


    const response = await axios.post(
        "http://localhost:8080/digital_wallet/wallet-server/user/v1/signup.php",
        form
    );

    if (response.data[0].message == 'success') {
        localStorage.setItem("id", response.data[0].user.id);
        localStorage.setItem("first_name", response.data[0].user.first_name);
        window.location.href = "./home.html";
    } else {
        alert("Signup failed: " + response.data[0].message);
    }
}






//* useful functions
function validate_password(pass){
    let contains_nb = false;
    let contains_letter = false;
    if(pass.length < 8){
        return false
    }

    for(i = 0 ; i < pass.length ;i++){
        if(('1234567890').includes(pass[i])){
            contains_nb = true
        }
        else if(("QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm").includes(pass[i])){
            contains_letter = true
        }
    }

    return contains_nb && contains_letter
}
//*