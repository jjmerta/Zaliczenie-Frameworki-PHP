<?php
$this->title = 'Domowe wino - Strona główna';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Witaj na stronie o domowej produkcji wina!</h1>
        <p class="lead">Znajdziesz tu przepisy, porady i inspiracje dla początkujących i zaawansowanych winiarzy.</p>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <h2>Przepisy</h2>
                <p>Sprawdź nasze sprawdzone przepisy na domowe wina z różnych owoców.</p>
                <p><a class="btn btn-primary" href="<?= \yii\helpers\Url::to(['site/recipes']) ?>">Zobacz przepisy &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Porady</h2>
                <p>Dowiedz się jak uniknąć najczęstszych błędów i poprawić jakość swojego wina.</p>
                <p><a class="btn btn-primary" href="<?= \yii\helpers\Url::to(['site/tips']) ?>">Zobacz porady &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Blog</h2>
                <p>Czytaj nasze wpisy, inspiruj się i dziel się swoimi doświadczeniami.</p>
                <p><a class="btn btn-primary" href="<?= \yii\helpers\Url::to(['site/blog']) ?>">Przejdź do bloga &raquo;</a></p>
            </div>
        </div>
    </div>
</div>
