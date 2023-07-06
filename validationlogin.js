function validateLogin() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username === "" || password === "") {
        alert("Please enter both username and password.");
        return false;
    } else if (/\s/.test(username)) {
        alert("Invalid username.\nUsername should not contain spaces.");
        return false;
    } else {
        var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()])[a-zA-Z0-9!@#$%^&*()]{8,}$/;
        if (password.match(passwordRegex)) {
            alert("Login successful!");
            return true;
        } else {
            alert("Invalid username or password.\nPassword should be at least 8 characters long and include at least 1 uppercase letter, 1 lowercase letter, 1 number, and 1 special character.");
            return false;
        }
    }
}
