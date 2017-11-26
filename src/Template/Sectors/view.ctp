<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sector $sector
 */
?>

<!-- Page Header-->
<header class="page-header">
    <figure class="icon">
        <?= $this->Html->image("icons/icon-services.png", ['alt' => __("Services")]) ?>
    </figure>
    <h2 class="page-title"><?= h($sector->business_line->title) ?></h2>
</header>

<section id="sector" class="main">
    <aside class="sector-picture">
        <figure>
            <img src="" alt="">
        </figure>
    </aside>

    <article class="info">
        <div class="title">
            <h3><?= h($sector->title) ?></h3>
        </div>

        <div class="descripion">
            <p><?= h($sector->description) ?></p>
        </div>

        <div class="related-services">
            <?php foreach ($sector->services as $service): ?> 
            <div class="service">
                <?= h($service->title) ?>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="related-sectors">
            <?php foreach ($relatedSectors as $sector): ?> 
            <div class="sector">
                <?= h($sector->title) ?>
            </div>
            <?php endforeach; ?>
        </div>
    </article>
</section>