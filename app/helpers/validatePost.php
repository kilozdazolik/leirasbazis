<?php


function validatePost($post)
{
    $errors = array();

    if (empty($post['title'])) {
        array_push($errors, 'Cím szükséges!');
    }

    if (empty($post['body'])) {
        array_push($errors, 'Szöveg szükséges!');
    }

    if (empty($post['topic_id'])) {
        array_push($errors, 'Nincs kategória kiválasztva!');
    }

    $existingPost = selectOne('posts', ['title' => $post['title']]);
    if ($existingPost) {
        if (isset($post['update-post']) && $existingPost['id'] != $post['id']) {
            array_push($errors, 'A cím már foglalt!');
        }

        if (isset($post['add-post'])) {
            array_push($errors, 'A cím már foglalt!');
        }
    }

    return $errors;
}