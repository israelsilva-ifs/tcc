<?php
/**
 *Author: Israel C A Silva
 *git: https://github.com/israelsilva1310
 *HomePage: https://israelcasilva.com.br
 **/
?>
<div class="users">
    <?php if ($teachers):
        foreach ($teachers as $teacher):
            ?>
            <article class="users_user">
                <?= $teacher->first_name ?>
            </article>
        <?php
        endforeach;
        ?>
    <?php
    else:
        ?>
        <h4> Not Exists users registered!!</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    <?php
    endif; ?>
</div>
