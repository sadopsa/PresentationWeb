<nav class="nav-menu float-right d-none d-lg-block ">
        <ul>       
          <li class="active ijo-warna"><a href="../index.php">Home</a></li>
            <li class="active drop-down ijo-warna"><a href="#"><?php echo $dataTopik['judul'];?></a>
            <ul>
          <?php while($solution=mysqli_fetch_array($topikSolusi)){
          echo '<li class="active ijo-warna"><a href="../topik/solusiDetail.php?id='.$solution['id'].'&ids='.$dataTopik['id'].'">
          '.$solution['judul'].'</a></li>';
          }?>
          </ul>
          </li>
        </ul>
      </nav>