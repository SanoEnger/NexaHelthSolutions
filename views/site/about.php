<?php

/** @var yii\web\View $this */

use yii\helpers\Html;


?>
<div class="ind" style="    display: flex;
                            flex-direction: row;
                            align-content: center;
                            justify-content: space-between;">


    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Фильтровать
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">На модерации</a></li>
            <li><a class="dropdown-item" href="#">Одобрена</a></li>
            <li><a class="dropdown-item" href="#">Откланена</a></li>


        </ul>
    </div>
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Показать сначала
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Новые</a></li>
            <li><a class="dropdown-item" href="#">Старые</a></li>

        </ul>
    </div>

</div>

<div class="card" style="margin-top: 20px;">
    <div class="card-header">
        15.02.25 \\\ 18:53
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <p>Р-он Рябковский, Вахромеева 11</p>
            <footer class="blockquote-footer">В кустах прячется злая собака, рычит и не пропускает людей </footer>
            <h6>Одобрена</h6>
        </blockquote>
    </div>
</div>

<div class="card" style="margin-top: 20px;">
    <div class="card-header">
        09.02.25 \\\ 12:02
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <p>Р-он Энергетики, Конституции 59</p>
            <footer class="blockquote-footer"> Дети бросают петарды с балкона в прохожих  </footer>
            <h6>Одоброена</h6>
        </blockquote>
    </div>
</div>


