<!DOCTYPE html>
<html lang="id">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Sosial Media</title>
      <link rel="stylesheet" href="../style.css">
      <link rel="icon" type="img/png" href="../img/persona5.png">
</head>

<body>
      <!-- ---------------------- tampilan paling atas ----------------------- -->
      <div class="header">
            <header>
                  <img src="../img/photo321.jpg" alt="gambar-seseorang" id="gambar__ku">
                  <h1 style="text-align: center;">Welcome to my Website</h1>
            </header>
      </div>

      <!-- ----------------- Tampilan untuk bagian Navigasi ------------------ -->
      <div class="sidebar">
            <nav class="sidebar__nav">
                  <a href="../index.html" class="nav__link">Home</a>
                  <a href="profile.html" class="nav__link">Profile</a>
                  <a href="sosmed.html" class="nav__link">Sosial Media</a>
                  <a href="kubus.php" class="nav__link active">Hitung Kubus</a>
            </nav>

            <!-- --------------------------- Footer ---------------------------- -->
            <div class="sidebar__footer">
                  <footer>
                        Made with <div id="warna-warni">❤</div>
                  </footer>

            </div>
      </div>
      <!-- -------------------- Main Content -------------------- -->
      <div class="main">
            <h2>Hitung Volume Kubus</h2>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                  <input type="number" name="sisi" required><br><br>
                  <button type="submit">Hitung</button>
            </form>

            <br>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                  $sisi = $_POST["sisi"];
                  $volume = $sisi * $sisi * $sisi;
                  echo "<p>Volume kubus dengan sisi $sisi adalah $volume cm²</p>";
            }
            ?>
      </div>
</body>

</html>