<!DOCTYPE html >
    <html>
        <head>
            <meta charset="utf-8">
                <title>Validation de formulaire avec jQuery</title>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                
        </head>
        <body>
            <form id="myForm">
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" id="username" name="username"><br>
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email"><br>
                        <label for="password">Mot de passe :</label>
                        <input type="password" id="password" name="password"><br>
                            <label for="confirmPassword">Confirmer le mot de passe :</label>
                            <input type="password" id="confirmPassword" name="confirmPassword"><br>
                                <button type="button" id="submitBtn">Soumettre</button>
                            </form>
                                <script>
                                    $(document).ready(function () {
                                        $('#submitBtn').click(function () {
                                            var username = $('#username').val();
                                            var email = $('#email').val();
                                            var password = $('#password').val();
                                            var confirmPassword = $('#confirmPassword').val();
                                            // Vérification de la validité des données saisies
                                            if (username === '') {
                                                alert('Le nom d\'utilisateur est requis.');
                                                return;
                                            }
                                            if (email === '') {
                                                alert('L\'adresse email est requise.');
                                                return;
                                            }
                                            // Validation de l'adresse email
                                            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                                            if (!emailRegex.test(email)) {
                                                alert('Veuillez entrer une adresse email valide.');
                                                return;
                                            }
                                            if (password === '') {
                                                alert('Le mot de passe est requis.');
                                                return;
                                            }
                                            if (password.length < 6) {
                                                alert('Le mot de passe doit comporter au moins 6caractères.');
                                                return;
                                            }
                                            if (confirmPassword === '') {
                                                alert('Veuillez confirmer le mot de passe.');
                                                return;
                                            }
                                            if (confirmPassword !== password) {
                                                alert('Les mots de passe ne correspondent pas.');
                                                return;
                                            }
                                            // Si toutes les validations passent, soumettre le formulaire
                                            $('#myForm').submit();
                                        });
});
                                </script>
                            </body>
                        </html>