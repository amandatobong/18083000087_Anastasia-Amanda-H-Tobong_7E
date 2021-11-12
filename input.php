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
          <a href="list.php" >
            <i class='bx bx-box' ></i>
            <span class="links_name">Product</span>
          </a>
        </li>
        <li>
          <a href="input.php" class="active">
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
        <span class="dashboard">Input Products</span>
      </div>
      
      
    </nav>
    <div class="container">
        <div class="content">
          <form action="penginputan.php" method="POST">
            <div class="user-details">
            <input type="hidden"  name="kdbarang"  value="<?php echo
                    $barang['kdbarang'] ?>" required>
              <div class="input-box">
                <span class="details">Nama Barang</span>
                <input type="text" placeholder="Masukkan Nama Barang" name="namabarang"  required>
              </div>
              <div class="input-box">
                <span class="details">Quantity</span>
                <input type="text" placeholder="Masukkan Quantity" name="qty" required>
              </div>
              <div class="input-box">
                <span class="details">Kategori</span>
                <select class="form-control" id="details" name="kategori">
                  <option>Kosmetik</option>
                  <option>Makanan</option>
                  <option>Minuman</option>
                  <option>Bumbu</option>
                  <option>Sembako</option>
                  <option>Lain2</option>
                </select>
              </div>
              <div class="input-box">
                <span class="details">Harga</span>
                <input type="text" placeholder="Masukan Harga" name="harga"required>
              </div>
              <div class="input-box">
                <span class="details">Keterangan</span>
                <textarea class="form-control" id="details" rows="3" name="keterangan"></textarea>
              </div>
              
            </div>
            <div class="gender-details">
              <input type="radio" name="ketstok" id="dot-1" value="Tersedia">
              <input type="radio" name="ketstok" id="dot-2" value="Habis">
              <span class="gender-title">Ket. Stok</span>
              <div class="category">
                <label for="dot-1">
                <span class="dot one"></span>
                <span class="gender">Tersedia</span>
              </label>
              <label for="dot-2">
                <span class="dot two"></span>
                <span class="gender">Habis</span>
              </label>
              </div>
            </div>
            <div class="button">
              <input type="submit" value="Input" name="input">
            </div>
          </form>
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
