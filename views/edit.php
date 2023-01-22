<?php
$title = "Modifier stagiaire";
ob_start();
?>
    <form action="index.php?action=update" method="post">
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="<?= $stagiaire->id ?>">
        </div>
        <div class="form-group">
            <label>Nom</label>
            <input type="text" class="form-control" name="nom" value="<?= $stagiaire->nom ?>">
        </div>
        <div class="form-group">
            <label>Prénom</label>
            <input type="text" class="form-control" name="prenom" value="<?= $stagiaire->prenom ?>">
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="number" class="form-control" name="age" value="<?= $stagiaire->age ?>">
        </div>
        <div class="form-group">
            <label>Login</label>
            <input type="text" class="form-control" name="login" value="<?= $stagiaire->login ?>">
        </div>
        <div class="form-group">
            <label>Mot de passe</label>
            <input type="password" class="form-control" name="password" value="<?= $stagiaire->password ?>">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary my-2" value="Modifier" name="modifier">
        </div>
    </form>
<?php $content = ob_get_clean(); ?>
<?php include_once 'views/layout.php'; ?>