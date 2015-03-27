<?php
// No direct access
defined('_JEXEC') or die;
$user = JFactory::getUser();
?>

<div class="bloc_module_display">
    <p class="bloc_titre_module">
        <span class="titre_module">Informations du compte</span>
    </p>
    <hr class="hr_module"/>
    <p>
        <b>Identité : </b> <span style="word-spacing: 0.4rem"> <?php echo $user->name ?></span> <br/>
        <b>Nom d'utilisateur : </b><?php echo $user->username ?> <br/>
        <b>Email : </b> <?php echo $user->email ?> <br/>
        <b>Membre depuis : </b> 
        <?php
        $dateEnregistrement = $user->registerDate;
        echo date("d/m/Y", strtotime($dateEnregistrement));
        ?> <br/>
        <b>Dernière connexion : </b> 
        <?php
        $dateDerniereVisite = $user->lastvisitDate;
        echo date("d/m/Y", strtotime($dateDerniereVisite));
        ?>
        <br/>
    <p>
</div>

