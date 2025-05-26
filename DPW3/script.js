function login() {
    const userName = document.getElementById("user-input").value;
    const pass = document.getElementById("pass-input").value;

    if (userName === "" || pass === "") {
        alert("Login Failed, Please Input All Columns");
    } else {
        alert("Username : " + userName + "\nPassword  : " + pass);
    }
}

function hidePass() {
    let inputPassword = document.getElementById("pass-input");
    let iconToggle = document.getElementById("ikon-toggle");

    if (inputPassword.type === "password") {
        inputPassword.type = "text";
        iconToggle.src = "noeye.svg";
    } else {
        inputPassword.type = "password";
        iconToggle.src = "eye.svg";
    }
}
