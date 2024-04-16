<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Validation de formulaire avec jQuery Validation Plugin</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<style>
.error {
color: red;
}
</style>
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
<label for="age">Âge :</label>
<input type="number" id="age" name="age"><br>
<input type="checkbox" id="terms1" name="terms1">
<label for="terms1">J'accepte les termes et conditions 1</label><br>
<input type="checkbox" id="terms2" name="terms2">
<label for="terms2">J'accepte les termes et conditions 2</label><br>

<input type="radio" id="gender_male" name="gender" value="male">
<label for="gender_male">Homme</label><br>
<input type="radio" id="gender_female" name="gender" value="female">
<label for="gender_female">Femme</label><br>

<label for="gender1">Genre :</label>
<select id="gender1" name="gender1"> <!-- Liste déroulante pour le genre -->
<option value="">Sélectionner le genre</option>
<option value="male">Homme</option>
<option value="female">Femme</option>
</select><br>


<button type="submit">Soumettre</button>
</form>
<script>
$(document).ready(function () {

    $.validator.addMethod("atLeastOneChecked", function(value,
element) {
return $('input[type="radio"][name="'+$(element).attr('name') + '"]:checked').length > 0;}, "Veuillez sélectionner ");


    $.validator.addMethod("atLeastTwoChecked", function(value,element) {
return $('input[type="checkbox"]:checked').length >= 2;
}, "Veuillez cocher au moins deux cases.");


$('#myForm').validate({
rules: {
username: {
required: true,
minlength: 5,
maxlength: 20
},
email: {
required: true,
email: true
},
password: {
required: true,
minlength: 6
},
confirmPassword: {
required: true,
equalTo: '#password'
},
age: { // Règles pour l'âge
required: true,
min: 18, // Âge minimum
max: 100 // Âge maximum
},
terms1: {
required: true
},
terms2: {
required: true
},
gender: {
atLeastOneChecked: true // Utilisation de la méthode de validation personnalisée
},
gender1: { // Règle pour la liste déroulante
required: true // La liste déroulante est requise
}
},
messages: {
username: {
required: 'Le nom d\'utilisateur est requis.',
minlength: 'Le nom d\'utilisateur doit comporter au moins 5 caractères.',
maxlength: 'Le nom d\'utilisateur ne peut pas dépasser 20 caractères.'
},
email: {
required: 'L\'adresse email est requise.',
email: 'Veuillez entrer une adresse email valide.'
},
password: {
required: 'Le mot de passe est requis.',
minlength: 'Le mot de passe doit comporter au moins 6 caractères.'
},
confirmPassword: {
required: 'Veuillez confirmer le mot de passe.',
equalTo: 'Les mots de passe ne correspondent pas.'
},
age: { // Messages pour l'âge
required: 'Veuillez entrer votre âge.',
min: 'L\'âge doit être d\'au moins 18 ans.', //Message pour l'âge minimum
max: 'L\'âge ne peut pas dépasser 100 ans.' // Message pour l'âge maximum
},
terms1: {
required: 'Veuillez accepter les termes et conditions 1 pour continuer.'
},
terms2: {
required: 'Veuillez accepter les termes et conditions 2 pour continuer.'
},
gender: {
atLeastOneChecked: 'Veuillez sélectionner votre genre.' // Message d'erreur pour le groupe de boutons radio
},
gender1: {
required: 'Veuillez sélectionner votre genre.' //Message d'erreur pour la liste déroulante non sélectionnée
}
},
errorPlacement: function (error, element) {
error.addClass('error');
if (element.attr('type') === 'radio') {
error.insertAfter($('input[type="radio"][name="' +
$(element).attr('name') + '"]').last().next('label'));
} else {
error.insertAfter(element);
}
},
errorPlacement: function (error, element) {
error.addClass('error');
error.insertAfter(element);
}
errorPlacement: function (error, element) {
error.addClass('error');
if (element.attr('type') === 'checkbox') {
error.insertAfter(element.next('label'));
} else {
error.insertAfter(element);
}
}
});
});
</script>
</body>
</html>