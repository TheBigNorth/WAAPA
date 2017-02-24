<?php include __DIR__ . '/../partials/header.php'; ?>

<h1><?= $data->title ?></h1>
<div class="">
    <?= $data->content ?>
    <?php \App\Controller\TeamGridController::get(); ?>
</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>