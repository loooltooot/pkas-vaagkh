<?php
$request = strtok($_SERVER['REQUEST_URI'], '?');
$pages_path = "src/pages/";

if (preg_match('/^\/news\/([0-9]+)/', $request, $matches)) {
    require $pages_path . 'skelet-for-news.php';
} else {
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
        case '/cms':
            require $pages_path . 'admin/auth.php';
            break;
        case '/cms/panel':
            require $pages_path . 'admin/panel.php';
            break;
        case '/cms/news':
            require $pages_path . 'admin/news.php';
            break;
        case '/cms/add_news':
            require $pages_path . 'admin/add_news.php';
            break;
        case '/cms/psychologist':
            require $pages_path . 'admin/psychologist.php';
            break;
        case '/cms/feedback':
            require $pages_path . 'admin/feedback.php';
            break;
        case '/cms/apply':
            require $pages_path . 'admin/apply.php';
            break;
        case '/cms/add_apply':
            require $pages_path . 'admin/add_apply.php';
            break;
        default:
            require $pages_path . '/404.html';
            break;
    }
}
