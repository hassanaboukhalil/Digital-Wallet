document.getElementById("user_first_name").innerHTML = localStorage.getItem("first_name") + ","
document.getElementById("balance").innerHTML = localStorage.getItem("balance");
deposit_dialog = document.getElementById("deposit_dialog");
deposit_amount = document.getElementById("deposit_amount");


let opacity_body = 100;


// deposit dialog
function open_deposit_dialog(){
    change_body_opacity()
    deposit_dialog.showModal()

}
function close_deposit_dialog(){
    change_body_opacity()
    deposit_dialog.close()
}




async function deposit() {
    const form = new FormData();

    form.append("user_id", localStorage.getItem("id"));
    form.append("wallet_id", localStorage.getItem("wallet_id"));
    form.append("amount", deposit_amount.value);

    console.log(localStorage.getItem("id"))
    console.log(localStorage.getItem("wallet_id"))
    console.log(deposit_amount.value)


    const response = await axios.post(
        "http://localhost:8080/digital_wallet/wallet-server/user/v1/deposit.php",
        form
    );

    console.log(response.data)
    if (response.data[0].message == 'success') {
        alert("success")
        // localStorage.setItem("id", response.data[0].user.id);
        // localStorage.setItem("first_name", response.data[0].user.first_name);
        // window.location.href = "./home.html";
    } else {
        alert("Login failed: " + response.data[0].message);
    }
}






//* useful functions
function logout(){
    localStorage.removeItem("id");
    localStorage.removeItem("first_name");
    window.location.href = "./login.html";
}

function change_body_opacity(){
    if(opacity_body == 100){
        document.body.style.opacity = "50%";
        opacity_body = 50
    }
    else{
        document.body.style.opacity = "100%";
        opacity_body = 100
    }
}
//*