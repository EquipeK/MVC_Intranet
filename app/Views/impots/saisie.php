<form method="post" action="<?= BASE_URL.DS.'impots/resultat' ;?>">
    <?= $form->input('nom', 'Votre nom'); ?>
    <?= $form->input('impot', 'Revenu'); ?>
    <button class="btn btn-primary">Calculer</button>
</form>
