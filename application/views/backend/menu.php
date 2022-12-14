<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>
            .bg_menu{
                background-image: linear-gradient(#C70909, #f0BF0F);
            }
        </style>
    </head>
    <ul class="navbar-nav  bg_menu bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Laundry <sup></sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
        <a class="nav-link" href="index.html">
           <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        

        <!-- Nav Item - Charts -->
        <li class="nav-item">
        <a class="nav-link" href="<?= base_url()?>konsumen">
            <span>Data Konsumen</span>
        </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url()?>paket">
                <span>Data Paket</span></a>
            </li>
        <li class="nav-item">
        <a class="nav-link" href="charts.html">
           
            <span>Data Transaksi</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
        <a class="nav-link" href="tables.html">
           
            <span>Laporan</span></a>
        </li>

        </ul>
        <!-- End of Sidebar -->

    <body>
    
</body>
</html>