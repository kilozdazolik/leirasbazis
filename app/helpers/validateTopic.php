<?php

function validateTopic($topic)
{
    $errors = array();

    if (empty($topic['name'])) {
        array_push($errors, 'Cím szükséges!');
    }

    $existingTopic = selectOne('topics', ['name' => $post['name']]);
    if ($existingTopic) {
        if (isset($post['update-topic']) && $existingTopic['id'] != $post['id']) {
            array_push($errors, 'A cím már foglalt!');
        }

        if (isset($post['add-topic'])) {
            array_push($errors, 'A cím már foglalt!');
        }
    }

    return $errors;
}
