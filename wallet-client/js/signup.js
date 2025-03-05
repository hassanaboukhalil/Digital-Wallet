const first_name = document.getElementById("first_name");
const last_name = document.getElementById("last_name");
const email = document.getElementById("email");
const pass = document.getElementById("pass");



async function signup() {
    const form = new FormData();

    form.append("first_name", first_name.value);
    form.append("last_name", last_name.value);
    form.append("email", email.value);
    form.append("pass", pass.value);


    const response = await axios.post(
        "http://localhost:8080/digital_wallet/wallet-server/user/v1/signup.php",
        form
    );

    // console.log(response.data)
    if (response.data.success) {
        localStorage.setItem("id", response.data.user.id);
        localStorage.setItem("first_name", response.data.user.first_name);
        window.location.href = "./home.html";
    } else {
        alert("Signup failed: " + response.data.message);
    }
}