 <li class="header">MAIN NAVIGATION</li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Lihat Data User </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

          <li><a href="index.php?admin=Data_Internal">Data Internal</a></li>
          <li><a href="index.php?admin=Data_Eksternal">Data Eksternal</a></li>


          </ul>
        </li>






        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Analisis</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

          <?php
          $organisasi = $_SESSION['id_organisasi'];

        $query = mysql_query("SELECT * FROM wilayah join organisasi_wilayah on wilayah.id_wilayah = organisasi_wilayah.id_wilayah  where id_organisasi = '$organisasi' and wilayah.id_wilayah = '$wilayah' ;");

        while ($row=mysql_fetch_array($query)) { ?>
        	<li><a href="analisis.php?id=<?php echo $row['id_wilayah'].'&id2='.$row['id_organisasi']; ?>"><i class="fa fa-circle-o"></i> <?php echo $row['nama_wilayah'] ?></a></li>

        	<?php
        }




        ?>


          </ul>
        </li>
        <li><a href="index.php?admin=Lihat_Harapan"><i class="fa fa-book"></i> <span>Lihat Harapan</span></a></li>
        <li><a href="index.php?admin=Lihat_Pertanyaan_Terbuka"><i class="fa fa-book"></i> <span>Lihat Pertanyaan Terbuka</span></a></li>  
        <li><a href="index.php?admin=Lihat_Rintug"><i class="fa fa-book"></i> <span>Lihat Rincian Tugas</span></a></li>

        <li><a href="logout.php"><i class="fa fa-book"></i> <span>Log Out</span></a></li>
