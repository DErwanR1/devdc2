<?php
// Déclaration des variables
$isAdmin = true;
$isMale = false;
$nb_msg = 200;
$registrationDate = new DateTime("2017-06-01");
$today = new DateTime();
$registrationDays = $registrationDate->diff($today)->days;
$birthdate = new DateTime("1990-06-03");
$birthdate2 = $registrationDate->diff($today)->days;

?>
<!DOCTYPE html>
<html>
<head>
    <title>Forum</title>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css"/>
</head>
<body>

<h1>Mon forum</h1>
<!-- Code temporaire à supprimer avant la mise en ligne -->
<fieldset>
    <legend>Badges disponibles</legend>
    <i class="fa fa-2x fa-border fa-user-secret" title="Administrateur"></i>
    <i class="fa fa-2x fa-border fa-birthday-cake" title="Anniversaire"></i>
    <i class="fa fa-2x fa-border fa-bug" title="Flood"></i>
    <i class="fa fa-2x fa-border fa-male" title="Homme"></i>
    <i class="fa fa-2x fa-border fa-female" title="Femme"></i>
    <i class="fa fa-2x fa-border fa-star-o" title="Moins de 50 messages"></i>
    <i class="fa fa-2x fa-border fa-star-half-o" title="Entre 50 et 100 messages"></i>
    <i class="fa fa-2x fa-border fa-star" title="Plus de 100 messages"></i>
    <i class="fa fa-2x fa-border fa-user-plus" title="VIP"></i>
</fieldset>



<!--Si l’utilisateur est admin, afficher le badge "Administrateur".-->
<?php if ($isAdmin): ?>
    <i class="fa fa-2x fa-border fa-user-secret" title="Administrateur"></i>
<?php endif; ?>


<!--Si l’utilisateur est un homme, afficher le badge “Homme”. Sinon, afficher celui indiquant qu’il s’agit d’une femme.-->
<?php if ($isMale) : ?>
    <i class="fa fa-2x fa-border fa-male" title="Homme"></i>
<?php else: ?>
    <i class="fa fa-2x fa-border fa-female" title="Femme"></i>
<?php endif; ?>

<!--Utilisez des instructions “if” pour afficher :-->
<!--Une étoile vide si l’utilisateur a posté moins de 50 messages.-->
<!--Une étoile à moitié remplie si l’utilisateur a posté entre 50 et 100 messages.-->
<!--Une étoile pleine si l’utilisateur a posté plus de 100 messages.-->

<?php if ($nb_msg < 50): ?>
    <i class="fa fa-2x fa-border fa-star-o" title="Moins de 50 messages"></i>
<?php elseif ($nb_msg < 100): ?>
    <i class="fa fa-2x fa-border fa-star-half-o" title="Entre 50 et 100 messages"></i>
<?php else: ?>
    <i class="fa fa-2x fa-border fa-star" title="Plus de 100 messages"></i>
<?php endif; ?>

<!--Si l’utilisateur est inscrit depuis moins de 30 jours et qu’il a posté plus de 50 messages,
 afficher le badge "Flood".-->

<!--Si l’utilisateur est inscrit depuis plus de 365 jours ou qu’il a posté plus de 100 messages-->
<!--(mais qu’il n’a pas la badge "Flood"), afficher le badge "VIP".-->

<?php if ($registrationDays < 30 && $nb_msg > 50): ?>
    <i class="fa fa-2x fa-border fa-bug" title="Flood"></i>
<?php elseif ($registrationDays > 365 || $nb_msg > 100): ?>
    <i class="fa fa-2x fa-border fa-user-plus" title="VIP"></i>
<?php else: ?>
<?php endif; ?>

<!--Si la date du jour correspond à la date de naissance de l’utilisateur,-->
<!--afficher le badge "Anniversaire".-->
<?php if ($today->format("m-d") == $birthdate->format("m-d")): ?>
    <i class="fa fa-2x fa-border fa-birthday-cake" title="Anniversaire"></i>
<?php endif; ?>

</body>
</html>
