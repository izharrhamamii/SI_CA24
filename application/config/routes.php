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
|	https://codeigniter.com/userguide3/general/routing.html
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

$route['default_controller'] = 'auth/login_admin';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* =======================
   AUTH
======================= */

$route['login-admin']='auth/login_admin';
$route['login-pasien']='auth/login_pasien';

$route['proses-admin']='auth/proses_admin';
$route['proses-pasien']='auth/proses_pasien';

$route['register']='auth/register';
$route['simpan-register']='auth/simpan_register';

$route['logout']='auth/logout';

/* =======================
   DASHBOARD
======================= */

$route['dashboard_admin']='dashboard_admin';
$route['dashboard_pasien']='pasien/dashboard';

/* =======================
   DATA PASIEN ADMIN
======================= */

$route['pasien']='pasien_admin';

$route['pasien/tambah']='pasien_admin/tambah';

$route['pasien/simpan']='pasien_admin/simpan';

$route['pasien/edit/(:num)']='pasien_admin/edit/$1';

$route['pasien/update/(:num)']='pasien_admin/update/$1';

$route['pasien/hapus/(:num)']='pasien_admin/hapus/$1';

/* =======================
   DATA DOKTER
======================= */

$route['dokter']='dokter/index';

$route['dokter/tambah']='dokter/tambah';

$route['dokter/simpan']='dokter/simpan';

$route['dokter/hapus/(:num)']='dokter/hapus/$1';

/* =======================
   PENDAFTARAN PASIEN
======================= */

$route['pendaftaran']='pendaftaran/index';

$route['pendaftaran/simpan']='pendaftaran/simpan';

$route['pendaftaran/status']='pendaftaran/status';

/* =======================
   PENDAFTARAN ADMIN
======================= */

$route['pendaftaran_admin']='pendaftaran_admin';

$route['pendaftaran_admin/setuju/(:num)']='pendaftaran_admin/setuju/$1';

$route['pendaftaran_admin/tolak/(:num)']='pendaftaran_admin/tolak/$1';

/* =======================
   LAPORAN
======================= */

$route['laporan']='laporan/index';

$route['laporan/csv']='laporan/csv';

$route['laporan/pdf']='laporan/pdf';