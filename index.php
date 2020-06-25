<?php
require_once(__DIR__.'/view/render.php');
require_once(__DIR__.'/model/fields.php');
require_once(__DIR__.'/model/validate.php');

// Add fields with optional initial message
$validate = new Validate();
$fields = $validate->getFields();
$fields->addField('username', 'Must be between 6 and 10 characters');
$fields->addField('password');
$fields->addField('phone', 'Use 888-555-1234 format.');
$fields->addField('email', 'Must be a valid email address.');
$fields->addField('zipcode', 'Must be a valid 5-digit ZIP code.');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    $action = 'reset';
}

$action = strtolower($action);
switch ($action) {
    case 'reset':
        include 'view/register.php';
        break;
    case 'register':
        // Copy form values to local variables
        $username = trim($_POST['username']);
        $password = $_POST['password'];
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $zipcode = trim($_POST['zipcode']);

        // Validate form data
        $validate->text('username', $username, true, 6, 10);
        $validate->text('password', $password);
        $validate->phone('phone', $phone);
        $validate->email('email', $email);
        $validate->zipcode('zipcode', $zipcode);

        // Load appropriate view based on hasErrors
        if ($fields->hasErrors()) {
            include 'view/register.php';
        } else {
            include 'view/success.php';
        }
        break;
}
?>