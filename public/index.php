<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="/public/img.jpg" alt="">
           <header>
        <h2>Le plaisir de jour</h2>
           </header>
    <div class="container">
        <form class="form" id="login">
            
        
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Login">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>

            <div class="bas">
            <button class="form__button" type="submit">Continue</button>
            <p class="form__text">
                <!-- <a href="#" class="form__link">Forgot your password?</a> -->
            </p>
            <p class="form__text">
                <a class="form__link" href="./" id="linkCreateAccount">s'inscrire pour jouer</a>
            </p>
        </form>
        </div>
        <form class="form form--hidden" id="createAccount">
            <h1 class="form__title">Creer un compte</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" id="signupUsername" class="form__input" autofocus placeholder="Username">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Email Address">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Confirm password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit">Continue</button>
            <p class="form__text">
                <a class="form__link" href="./" id="linkLogin">S'inscrire pour jouer</a>
            </p>
        </form>
    </div>
    <script src="script.js"></script>
</body>