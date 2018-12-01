<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['id_kode'])   && isset($_SESSION['role'])  ){
  $username = $_SESSION['username'];
  $kode = $_SESSION['kode'];
  $role = $_SESSION['role'] ;
}

require_once('layout/header.php'); 
require_once('layout/sidebar.php');
include 'koneksi.php';
include 'view/ceksession.php';


?>
<!DOCTYPE html>

<body class="hold-transition skin-blue sidebar-mini">
<div  class="wrapper">

  
  <!-- Content Wrapper. Contains page content -->
  <div  class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    <?php if(empty($_GET['admin'])){ ?>
              <?php } ?>
                         
                                        

                                     
     
    </section>

    <!-- Main content -->
<section class="content">
	        <div class="row">
          <!-- left column -->
          <div class="">

            <div class="box box-info">
              <div class="box-header with-border" align="center">
                <h1 class="box-title" align="content-wrapper">
MANAJEMEN SURVEY KEPUASAN PELANGGAN</h1>
              </div>
          </div>

          </div>

         
        </div>
      <div  class="row">
        <div class="box">
          <div class="box-body">
            <?php 
      if (isset($_GET['admin'])) { //Users
        if ($_GET['admin'] == 'Lihat_Survey') {
          include('menu/data_survey.php');
        }
        if ($_GET['admin'] == 'Lihat_visualisasi') {
          include('menu/data_visualisasi.php');
        } 


      }elseif (isset($_GET['isi'])) { //Perangkat
        if ($_GET['isi'] == 'kuisioner') {
          include('kuisioner.php');
        }
      }
    ?>
          </div>
        </div>
      </div>
</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  </div>
 <?php require_once('layout/footer.php'); ?>
