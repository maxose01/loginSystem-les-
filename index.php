<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

</head>
<body>
    <main>
        <section class="containter">
           <form action="login.php" method="post" class="form" id="js--login">
               <h2 class="form__title">Login</h2>
               <div class="form__message form__message--error">De combinatie van uw email-adres en wachtwoord is onjuist.</div>
               <div class="form__input-group">
                    <label>Email:</label>
                    <input type="text" name="email" class="form__input" autofocus placeholder="email">
                    <div class="form__input-error-message">Er is iets fout gegaan.</div>
                </div>
                <div class="form__input-group">
                    <label>Wachtwoord:</label>
                    <input type="password" name="password" class="form__input" placeholder="Wachtwoord">
                    <div class="form__input-error-message">Er is iets fout gegaan.</div>
                </div>
                <button class="form__button" type="submit">Doorgaan</button>
                <p class="form__text">
                    <a href="#" class="form__link">Wachtwoord vergeten?</a>
                </p>
                <p class="form__text">
                    <a href="#" id="js--linkCreateAccount" class="form__link">Nog geen account? Klik hier om er een aan te maken.</a>
                </p>
           </form> 
        </section>
    </main>
    <script src="main.js"></script>
</body>
</html>