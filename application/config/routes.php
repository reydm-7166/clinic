<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['default_controller'] = 'Signin_users/user_home';            // users //////

$route['signup'] = 'Signup_users/index';
$route['signin'] = 'Signin_users/index';
$route['book'] = 'Book_schedules/index';
$route['index'] = 'Signin_users/user_home';
$route['logout'] = 'Logout/logout';

$route['login'] = 'Signin_admins/index';                        // admin //////
$route['dashboard'] = 'Dashboard_admin/index';
$route['appointment'] = 'Appointments_admin/get_data';
$route['move/(:any)'] = 'Appointments_admin/get_data_insert/$1';
$route['user'] = 'Users_admin/get_data';
$route['receipt'] = 'Receipt_admin/get_data';
$route['approved'] = 'Approved_admin/get_data';
$route['finish/(:any)'] = 'Approved_admin/get_insert_receipt/$1';


$route['edit/(:any)'] = 'Edits_appointment/index/$1';      /// edit appointment
$route['update'] = 'Edits_appointment/update_appointment';
$route['edit'] = 'Edits_appointment/view';
$route['delete_appointment/(:any)'] = 'Edits_appointment/delete_data/$1';


$route['editusers/(:any)'] = 'Edits_userdata/index/$1';      /// edit useraccount
$route['editusers'] = 'Edits_userdata/view';
$route['updateusers'] = 'Edits_userdata/update_user';
$route['history/(:any)'] = 'Users_history/get_all/$1';
$route['history'] = 'Users_history/view';


$route['manage'] = 'Manages_admin/index';                    /// manage content
$route['manage/(:any)'] = 'Manages_admin/edit/$1';
$route['manage/delete/(:any)'] = 'Manages_admin/delete/$1';
$route['editcontent'] = 'Manages_admin/content';
$route['insert'] = 'Manages_admin/edit_insert';
$route['add'] = 'Manages_admin/add';


$route['report'] = 'Reports_admin/index';                 ///// report
$route['date_range'] = 'Reports_admin/treatment_data';