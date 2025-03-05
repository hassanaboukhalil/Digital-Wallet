document.getElementById("user_first_name").innerHTML = localStorage.getItem("first_name")
document.getElementById("balance").innerHTML = localStorage.getItem("balance")


//* useful functions
function logout(){
    localStorage.removeItem("id");
    localStorage.removeItem("first_name");
    window.location.href = "./login.html";
}
//*