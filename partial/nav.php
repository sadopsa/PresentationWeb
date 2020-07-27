<nav class="nav-menu float-right d-none d-lg-block ">
        <ul>       
          <li class="active ijo-warna"><a href="../index.php">Home</a></li>
          <?php while($topics=mysqli_fetch_array($allTopik)){
          echo '<li class="active ijo-warna"><a href="../topik/topikDetail.php?id='.$topics['id'].'">
          '.$topics['judul'].'</a></li>';
          }?>
        </ul>
      </nav>