<?php $this->layout("_theme"); ?>

<article class="not_found">
    <div class="container content">
        <header class="not_found_header">
            <p class="error">&bull;<?= $errcode; ?>&bull;</p>
            <h1><?= $title; ?></h1>
            <p><?= $message; ?></p>

<!--            --><?php //if ($error->link): ?>
<!--                <a class="not_found_btn gradient gradient-green gradient-hover transition radius"-->
<!--                   title="--><?php //= $linkTitle; ?><!--" href="--><?php //= $link; ?><!--">--><?php //= $linkTitle; ?><!--</a>-->
<!--            --><?php //endif; ?>
        </header>
    </div>
</article>