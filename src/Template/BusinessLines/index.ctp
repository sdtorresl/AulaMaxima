<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BusinessLine[]|\Cake\Collection\CollectionInterface $businessLines
 */

$slogan = "";
$mainTitle = "";
$mainDescription = "";

foreach ($fields as $field) {
    if ($field->type == 'homeMainTitle' && $field->published == true) {
        $mainTitle = $field->body;
    }
    if ($field->type == 'homeDescription' && $field->published == true) {
        $mainDescription = $field->body;
    }
    if ($field->type == 'homeSlogan' && $field->published == true) {
        $slogan = $field->body;
    }
}
?>

<!-- Page Header-->
<header class="page-header">
    <figure class="icon">
        <?= $this->Html->image("icons/icon-home.png", ['alt' => __("Home")]) ?>
    </figure>
    <h2 class="page-title"><?= __('Home') ?></h2>
</header>

<aside class="quote">
    <h2><?= $slogan ?></h2>
</aside>

<article class="intro">
    <h2><?= $mainTitle ?></h2>
    <p><?= $mainDescription ?></p>
</article>

<section class="main">
    <?php foreach ($businessLines as $businessLine): ?>
    <article class="business-lines">

        <div class="parallax" style="background-image: url(<?= './' . $businessLine->background_dir . $businessLine->background ?>)"></div>
        
        <div class="item">
            <div class="title">
                <h2><?= h($businessLine->title) ?></h2>
            </div>
            <div class="description">
                <p><?= h($businessLine->description) ?></p>
                
                <div class="link">
                    <?= $this->Html->link(__("Read more"), ['action' => 'view', $businessLine->id]); ?>
                </div>
            </div>
        </div>
    </article>
    <?php endforeach; ?>
</section>