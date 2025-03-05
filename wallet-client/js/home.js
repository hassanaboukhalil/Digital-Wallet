// console.log(localStorage.getItem("first_name"))



//* useful functions
function logout(){
    localStorage.removeItem("id");
    localStorage.removeItem("first_name");
    window.location.href = "./login.html";
}
//*