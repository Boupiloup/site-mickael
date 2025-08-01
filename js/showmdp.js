function togglePassword() {
    const input = document.getElementById('password');
    const checkbox = document.getElementById('show-password');
    if (checkbox.checked) {
        input.type = 'text'; // Show password
    } else {
        input.type = 'password'; // Hide password
    }
}