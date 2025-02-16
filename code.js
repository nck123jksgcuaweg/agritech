document.getElementById("toggle-btn").addEventListener("click", function() {
    const loginForm = document.getElementById("login-form");
    const registerForm = document.getElementById("register-form");
    const formTitle = document.getElementById("form-title");

    if (loginForm.style.display === "none") {
        loginForm.style.display = "block";
        registerForm.style.display = "none";
        formTitle.innerText = "Login";
        this.innerText = "Register";
    } else {
        loginForm.style.display = "none";
        registerForm.style.display = "block";
        formTitle.innerText = "Register";
        this.innerText = "Login";
    }
});
document.getElementById("register-form").addEventListener("submit", function(event) {
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirm-password").value;
    let errorMessage = document.getElementById("password-error");

    if (password !== confirmPassword) {
        errorMessage.style.display = "block";
        event.preventDefault(); // Stop form submission
    } else {
        errorMessage.style.display = "none";
    }
});

//for sidebar
function showTable(tableId) {
    let tables = document.querySelectorAll('.data-table');
    let statusSection = document.querySelector('.machine-status');
    
    if (tableId === 'machine-status') {
        statusSection.style.display = 'flex';
        tables.forEach(table => table.style.display = 'none');
    } else {
        statusSection.style.display = 'none';
        tables.forEach(table => {
            table.style.display = table.id === tableId ? 'table' : 'none';
        });
    }
}

//for login
function logout() {
    window.location.href = 'login.php';
}


