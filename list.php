<?php include("koneksi.php"); ?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> TOKONYA </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxs-shopping-bag' style='color:#fdf9f9' ></i>
      <span class="logo_name">TOKONYA</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="index.php" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="list.php" class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name">Product</span>
          </a>
        </li>
        <li>
          <a href="input.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Input Product</span>
          </a>
        </li>
        
        <li class="log_out">
          <a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar ?')">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Products</span>
      </div>
      <a href="input.php" class="btn btn-primary mt-2"><i class='bx bxs-add-to-queue mr-2' style='color:#fdf9f9' ></i>TAMBAH BARANG</a>
      
      
    </nav>
    
    
    <div class="list-barang">
        
        
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">KODE</th>
                <th scope="col">NAMA BARANG</th>
                <th scope="col">QTY</th>
                <th scope="col">KATEGORI</th>
                <th scope="col">HARGA</th>
                <th scope="col">KETERANGAN</th>
                <th scope="col">STATUS</th>
                <th colspan="2" scope="col">AKSI</th>
              </tr>
            </thead>
            <tbody>
                    <?php
                    $sql = "SELECT * FROM barang";
                    $query = mysqli_query($db, $sql);

                    while($barang = mysqli_fetch_array($query)){
                        echo "<tr>";

                        echo "<td>".$barang["kdbarang"]."</td>";
                        echo "<td>".$barang["namabarang"]."</td>";
                        echo "<td>".$barang["qty"]."</td>";
                        echo "<td>".$barang["kategori"]."</td>";
                        echo "<td>".$barang["harga"]."</td>";
                        echo "<td>".$barang["keterangan"]."</td>";
                        echo "<td>".$barang["ketstok"]."</td>";
                        echo "<td>";
                        echo "<a href='edit.php?kdbarang=".$barang['kdbarang']."'><i class='bx bx-edit' style='color:#0A2558'></i></a> | ";
                        echo "<a href='hapus.php?kdbarang=".$barang['kdbarang']."'><i class='bx bx-trash' style='color:#0A2558' ></i></a>";
                        echo "</td>";
                        echo "</tr>";
                    
                    }
                    ?>
                </tbody>
             
          </table>
          <div class="statusinput">
        <?php if (isset($_GET['status'])) : ?>
            <p>
            <?php
            if ($_GET['status'] == 'sukses') {
                echo "Pendaftaran Berhasil!" ;
            } else {
                echo "Pendaftaran gagal!";
            }
            ?>
            </p>
         <?php endif; ?>
        </div>
    </div>
      
  </section>
 

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>
