<html>

<head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <form action="cadastrar.php" method="POST">
        <input type="email" name="inputEmail"><br>
        <div class="g-recaptcha" data-sitekey="6Lf_2sIZAAAAACUcnZIyAwBSFBEpscjgciiXil0u"></div><br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>