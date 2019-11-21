<?php


function pretty($var) {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
}

function redirect($uri = '') {
    if (!empty($uri)) {
        header('Location: '.BASE_URL.$uri);
    }
    exit;
}