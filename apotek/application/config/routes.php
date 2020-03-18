<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//AJAX // untuk update terbaru yang kita inginkan
$route['update_jumlah'] = 'home/update_jumlah';
$route['del_item'] = "home/del_item";

//Admin // disini untuk masuknya admin dan logout dan untuk di dasboard juga
$route['admin'] = 'admin';
$route['login'] = 'admin/login';
$route['admin/logout'] = 'admin/logout';
$route['admin/obat'] = 'admin/obat';
$route['admin/obat/daftar'] = 'admin/daftar_obat';
$route['admin/obat/daftar/(:any)'] = 'admin/edit_obat/$1';
$route['admin/obat/tambah'] = 'admin/tambah_obat';
$route['admin/obat/hapus/(:any)'] = 'admin/hapus_obat/$1';
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
