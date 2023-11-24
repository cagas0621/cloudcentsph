<?php

get_header();

$url_parts = explode('/', rtrim(home_url($_SERVER['REQUEST_URI']), '/'));
$url_name = end($url_parts);

switch ($url_name) {
    case "about":
        require get_template_directory() . '/pages/about.php';
        break;
    case "team":
        require get_template_directory() . '/pages/team.php';
        break;
    case "contact_us":
        require get_template_directory() . '/pages/emailconfig.php';
        require get_template_directory() . '/pages/contactus.php';
        break;
    case "virtual_accounting":
        require get_template_directory() . '/pages/virtualaccounting.php';
        break;
    case "virtual_assistant":
        require get_template_directory() . '/pages/virtualassistant.php';
        break;
    case "lead_generation":
        require get_template_directory() . '/pages/leadgeneration.php';
        break;
    default:
        wp_redirect(home_url());
}
get_footer();
