<?php

function content(){
    require_once "db/database.php";
    foreach ($posts as $post) {
        echo ' <div class="main__post p-5 rounded-lg m-3">';
        echo ' <h1 class="display-4">' . $post['title'] . '</h1>';
        echo ' <hr class="my-4">';
        echo ' <p>' . $post['description'] . '</p>';
        echo ' <a class="btn btn-primary btn-lg" href="#" role="button">подробнее</a>';
        echo ' </div>';
    }
}

include_once "components/header.php";

include_once "components/navigation.php";

include_once "components/layout.php";

include_once "components/footer.php";

?>