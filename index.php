<?php
$request = strtok($_SERVER['REQUEST_URI'], '?');
$pages_path = "src/pages/";

switch ($request) {
    case '/':
        require $pages_path . 'home.php';
        break;
    case '/news':
        require $pages_path . 'news.php';
        break;
    case '/professions':
        require $pages_path . 'professions.php';
        break;
    case '/history':
        require $pages_path . 'history.php';
        break;
    case '/apply_for_education':
        require $pages_path . 'apply_for_education.php';
        break;
    case '/dormitory':
        require $pages_path . 'dormitory.php';
        break;
    case '/psychologist':
        require $pages_path . 'psychologist.php';
        break;
    case '/documents':
        require $pages_path . 'documents.php';
        break;
    case '/workshops':
        require $pages_path . 'workshops.php';
        break;
    case '/timetable':
        require $pages_path . 'timetable.php';
        break;
    case '/actions':
        require $pages_path . 'actions.php';
        break;
    case '/for_teachers/certification':
        require $pages_path . 'certification.php';
        break;
    case '/for_teachers/scientific_methodological_support':
        require $pages_path . 'scientific_methodological_support.php';
        break;
}
