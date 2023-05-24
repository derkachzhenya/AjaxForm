<?php

$errors = [];
$data = [];

if (empty($_POST['name'])) {
    $errors['name'] = 'Ведіть ім\'я';
}

if (empty($_POST['surname'])) {
    $errors['surname'] = 'Ведіть прізвище';
}

if (empty($_POST['email'])) {
    $errors['email'] = 'Ведіть імейл';
}

if (empty($_POST['password'])) {
    $errors['password'] = 'Ведіть пароль';
}
if (empty($_POST['passAgain'])) {
    $errors['passAgain'] = 'Ведіть пароль';
}

if ($_POST['password']!==$_POST['passAgain']) {
    $errors['passAgain'] = 'Пароль не співпадає';
}


if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['message'] = 'Ви успішно зареєструвалися';
}

echo json_encode($data,);
