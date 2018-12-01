   
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
       
        <h3>Lihat Data Survey Kepuasan Pelanggan</h3>
        <div class="box-header">

          <h3 class="box-title">
              <button><a href="cetak/cetak-laporan.php">Cetak Excel</a></button>               
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-responsive">
                <thead>
                  <tr    >
                    <th >No</th>
                    <th >Nama Kegiatan</th>
                    <th >Penyelenggara</th>
                    <th >Tempat Kegiatan</th>
                    <th >hari/ Tanggal</th>
                    <th >Ditujukan</th>
                    <th >Kota Asal</th>                 
                    <th >Saran</th>
                    <th >Tanggal</th>
                  
                    <!-- <th >Action</th> -->
                  </tr>
                </thead>
                <tbody >
                 <?php
                 if($_SESSION['role']== 'adminpusat'){
                  $admin  =   mysql_query("SELECT * FROM user1");
                 }else if ($_SESSION['role'] == 'adminfak'){
                  $kode = $_SESSION['kode'];
                  $admin  =   mysql_query("SELECT * FROM user1 where penyelenggara = '$kode'");
                 }
                  


                $i = 1;                                    
                while ($row=mysql_fetch_array($admin)) {
                  $id_user = $row['id'];
                  ?>    

                  <tr  >
                    <td ><?php echo $i; ?></td>
                    <td ><?php echo $row['nama_kegiatan'];?></td>
                    <td ><?php echo $row['penyelenggara'];?></td>
                    <td ><?php echo $row['tempat_kegiatan'];?></td>
                    <td ><?php echo $row['hari/tanggal'];?></td>
                    <td ><?php echo $row['kota_asal'];?></td>
                    <td ><?php echo $row['tipe'];?></td>
                    <td ><?php echo $row['saran'];?></td>
                    <td ><?php echo $row['tanggal'];?></td>
                    
                    
                      
       
                        
                      
                      </tr>
                      <?php
                      $i++;
                    }
                    ?>

                  </tbody>
                 
                </table>
              </div>
              <!-- /.box-body
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>