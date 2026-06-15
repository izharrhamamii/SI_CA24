<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?= $title; ?></title>

<link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css');?>"
rel="stylesheet">

<link href="<?= base_url('assets/css/sb-admin-2.min.css');?>"
rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
rel="stylesheet">

<style>

*{
font-family:'Poppins',sans-serif;
}

body{
background:#f4f9ff;
}

/* SIDEBAR */

.sidebar{
background:
linear-gradient(
180deg,
#55eb69,
#51e46f,
#53f15d
);
}

.sidebar-brand{
height:90px;
}

.sidebar-brand-icon{
font-size:26px;
}

.sidebar .nav-item .nav-link{
padding:14px;
font-size:15px;
font-weight:500;
}

.sidebar .nav-item .nav-link i{
margin-right:10px;
}

.sidebar-dark hr.sidebar-divider{
border-top:1px solid rgba(255,255,255,.15);
}

/* TOPBAR */

.topbar{
background:white;
box-shadow:0 5px 20px rgba(0,0,0,.06);
}

/* CARD */

.card-modern{
border:none;
border-radius:22px;
box-shadow:0 10px 30px rgba(33, 214, 45, 0.08);
transition:.3s;
}

.card-modern:hover{
transform:translateY(-5px);
}

.dashboard-title{
font-weight:700;
color:#0F4C81;
}

/* FOOTER */

.sticky-footer{
background:white;
box-shadow:0 -3px 15px rgba(92, 227, 72, 0.05);
}

</style>

</head>

<body id="page-top">

<div id="wrapper">