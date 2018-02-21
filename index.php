<?php
/*
    Jacob Landowski
    Shahbaz Iqbal
    1-30-18
*/

require_once 'vendor/autoload.php';
require_once 'db-functions.php';
require_once '/home/jpappoeg/config.php';

session_start();

//error reporting
error_reporting(E_ALL);

ini_set("display_errors", 1);

//create an instance of the Base class
$f3 = Base::instance();

//f3 error debugging
$f3->set(DEBUG, 3);

//connect to database
$dbh = connect();

/**
 * default route
 */
$f3->route('GET|POST /', function ($f3,$params) {
    $sid = $params['sid'];

    $students = getStudents($sid);

    $f3->set('students', $students);
    $template = new Template();
    echo $template->render('all-students.html');
});

/**
 * add route
 */
$f3->route('GET|POST /add', function ($f3,$params) {
    $sid = $params['sid'];

    $template = new Template();
    echo $template->render('add-student.html');
});

/**
 * summary with SID param
 */
$f3->route('GET|POST /summary/@sid', function ($f3,$params) {
    $sid = $params['sid'];
    $student = getStudents($sid);
    $f3->set('student',$student);

    $template = new Template();
    echo $template->render('view-students.html');
});

$f3->run();
