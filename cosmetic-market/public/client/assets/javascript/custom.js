passwordInput = document.getElementById('password').attributes;

function change() {
    console.log('clicked')
    if (passwordInput[0].value == 'password') {
        document.getElementById('password').setAttribute('type', 'text')
    } else {
        document.getElementById('password').setAttribute('type', 'password')
    }
}
