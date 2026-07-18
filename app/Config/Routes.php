<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('academics', 'Home::academics');

$routes->get('about', 'Home::about');
$routes->get('admission', 'Home::admission');
$routes->get('gallery', 'Home::gallery');
$routes->get('blog', 'Home::blog');
$routes->get('blog/detail/(:num)', 'Home::blogDetail/$1');
$routes->get('contact', 'Home::contact');
$routes->get('program', 'Home::program');
$routes->get('teachers', 'Home::teachers');
$routes->get('how-to-apply', 'Home::howToApply');
$routes->get('tuition-fee', 'Home::tuitionFee');
$routes->get('alumni', 'Home::alumni');
$routes->get('libraries', 'Home::libraries');
$routes->get('campus-life', 'Home::campusLife');
$routes->get('events', 'Home::events');

// Language switcher
$routes->get('lang/(:any)', 'Home::switchLanguage/$1');

// Form submissions
$routes->post('admission/submit', 'Home::submitAdmission');
$routes->post('contact/submit', 'Home::submitContact');

// Admin Auth Routes
$routes->get('admin/login', 'Admin\Auth::login');
$routes->post('admin/login', 'Admin\Auth::postLogin');
$routes->get('admin/logout', 'Admin\Auth::logout');

// Admin Panel Routes
$routes->group('admin', ['filter' => 'adminAuth'], function($routes) {
    $routes->get('dashboard', 'Admin\Dashboard::index');
    
    // Settings
    $routes->get('settings', 'Admin\Dashboard::settings');
    $routes->post('settings/save', 'Admin\Dashboard::saveSettings');
    
    // Banners
    $routes->get('banners', 'Admin\Dashboard::banners');
    $routes->post('banners/save', 'Admin\Dashboard::saveBanner');
    $routes->get('banners/delete/(:num)', 'Admin\Dashboard::deleteBanner/$1');
    
    // Announcements
    $routes->get('announcements', 'Admin\Dashboard::announcements');
    $routes->post('announcements/save', 'Admin\Dashboard::saveAnnouncement');
    $routes->get('announcements/delete/(:num)', 'Admin\Dashboard::deleteAnnouncement/$1');
    
    // Events
    $routes->get('events', 'Admin\Dashboard::events');
    $routes->post('events/save', 'Admin\Dashboard::saveEvent');
    $routes->get('events/delete/(:num)', 'Admin\Dashboard::deleteEvent/$1');
    
    // Teachers
    $routes->get('teachers', 'Admin\Dashboard::teachers');
    $routes->post('teachers/save', 'Admin\Dashboard::saveTeacher');
    $routes->get('teachers/delete/(:num)', 'Admin\Dashboard::deleteTeacher/$1');
    
    // Tuition Fees
    $routes->get('tuition-fees', 'Admin\Dashboard::tuitionFees');
    $routes->post('tuition-fees/save', 'Admin\Dashboard::saveTuitionFee');
    $routes->get('tuition-fees/delete/(:num)', 'Admin\Dashboard::deleteTuitionFee/$1');
    
    // Gallery
    $routes->get('gallery', 'Admin\Dashboard::gallery');
    $routes->post('gallery/save', 'Admin\Dashboard::saveGallery');
    $routes->get('gallery/delete/(:num)', 'Admin\Dashboard::deleteGallery/$1');
    
    // Blogs
    $routes->get('blogs', 'Admin\Dashboard::blogs');
    $routes->post('blogs/save', 'Admin\Dashboard::saveBlog');
    $routes->get('blogs/delete/(:num)', 'Admin\Dashboard::deleteBlog/$1');
    
    // Admissions
    $routes->get('admissions', 'Admin\Dashboard::admissions');
    $routes->post('admissions/update', 'Admin\Dashboard::updateAdmissionStatus');
    $routes->get('admissions/delete/(:num)', 'Admin\Dashboard::deleteAdmission/$1');
    
    // Contacts
    $routes->get('contacts', 'Admin\Dashboard::contacts');
    $routes->get('contacts/delete/(:num)', 'Admin\Dashboard::deleteContact/$1');

    // Testimonials
    $routes->get('testimonials', 'Admin\Dashboard::testimonials');
    $routes->post('testimonials/save', 'Admin\Dashboard::saveTestimonial');
    $routes->get('testimonials/delete/(:num)', 'Admin\Dashboard::deleteTestimonial/$1');

    // Extracurriculars / Programs
    $routes->get('extracurriculars', 'Admin\Dashboard::extracurriculars');
    $routes->post('extracurriculars/save', 'Admin\Dashboard::saveExtracurricular');
    $routes->get('extracurriculars/delete/(:num)', 'Admin\Dashboard::deleteExtracurricular/$1');
});