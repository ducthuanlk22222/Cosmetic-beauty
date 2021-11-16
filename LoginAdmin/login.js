// init firebase

const firebaseConfig = {
    apiKey: "AIzaSyDHab9J0kktzjPwTQJSq8nX7YaWIhCXokM",
    authDomain: "ps11760-lta.firebaseapp.com",
    databaseURL: "https://ps11760-lta-default-rtdb.firebaseio.com",
    projectId: "ps11760-lta",
    storageBucket: "ps11760-lta.appspot.com",
    messagingSenderId: "821133202295",
    appId: "1:821133202295:web:e278525d0b88953960c772",
    measurementId: "G-DBT6FK3F9M"
};

firebase.initializeApp(firebaseConfig);

//

let signup_username = document.querySelector('#signup-username')
let signup_email = document.querySelector('#signup-email')
let signup_password = document.querySelector('#signup-password')
let signup_password_confirm = document.querySelector('#signup-confirm-password')

let signin_email = document.querySelector('#signin-email')
let signin_password = document.querySelector('#signin-password')

isBlankInput = (input) => {
    return input.value.trim() === ''
}

isValidEmail = (input) => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    return re.test(String(input.value.trim()).toLowerCase());
}

isPasswordConfirmed = () => {
    return signup_password.value.trim() === signup_password_confirm.value.trim()
}

document.querySelectorAll('.input-group input').forEach(input => {
    input.onkeyup = () => {
        input.classList.remove('err')
    }
})

document.querySelector('#btn-signup').onclick = () => {
    let check = true

    if (isBlankInput(signup_username)) {
        signup_username.classList.add('err')
        check = false
    }
    if (isBlankInput(signup_email) || !isValidEmail(signup_email)) {
        signup_email.classList.add('err')
        check = false
    }
    if (isBlankInput(signup_password)) {
        signup_password.classList.add('err')
        check = false
    }
    if (isBlankInput(signup_password_confirm) || !isPasswordConfirmed()) {
        signup_password_confirm.classList.add('err')
        check = false
    }

    if (!check) return

    firebase.auth().createUserWithEmailAndPassword(signup_email.value, signup_password.value).then((userCredential) => {
        // Signed up
        let user = userCredential.user;
        user.updateProfile({
            displayName: signup_username.value
        }).then(() => {
            console.log('success')
            console.log(user)
        }, (error) => {
            // An error happened.
            console.log(error)
        })
        let login = window.location.href.replace('login/index.html','login/index.html')
        window.location.href = login
    }).catch((error) => {
        let errorCode = error.code;
        let errorMessage = error.message;
        console.log(errorCode)
        console.log(errorMessage)
    })
}

document.querySelector('#btn-singin').onclick = () => {
    let check = true

    if (isBlankInput(signin_email) || !isValidEmail(signin_email)) {
        signin_email.classList.add('err')
        check = false
    }
    if (isBlankInput(signin_password)) {
        signin_password.classList.add('err')
        check = false
    }

    if (!check) return

    firebase.auth().signInWithEmailAndPassword(signin_email.value, signin_password.value).then((userCredential) => {
        // Signed in
        var user = userCredential.user;
        console.log(user)
        localStorage.setItem("uuid", user.uid);
        let home = window.location.href.replace('login/index.html', 'index.html')
        window.location.href = home
        // ...
    }).catch((error) => {
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log('Tài khoản hoặc mật khẩu sai, mời bạn nhập lại')
    });
}