

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">CMSG1</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
<?php

$slug = 'teletubbies';
foreach($data as $li){

    $active = '';
    if(isset($_GET['p'])){ // Verif si ca existe
        $slug = $_GET['p'];
    }
    if($slug == $li->slug ){ // Met l'active pour l'actuel
        $active ="active";
    }
    ?>

    <li class="<?=$active?>"><a href="?p=<?= $li->slug ?>"><?= $li->title ?></a></li>
                <?php
} ?>

            </ul>
        </div>
    </div>
</nav>

