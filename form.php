<?php 

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Biodata Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <style>
        body {
            background: linear-gradient(135deg, #ffe6f0, #ffd6eb, #ffcccb);
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(255, 105, 180, 0.3);
            backdrop-filter: blur(10px);
        }
        .title {
            text-align: center;
            margin-bottom: 40px;
            animation: fadeInDown 1s ease-out;
        }
        .title i {
            color: #ff4d94;
            margin-right: 10px;
            font-size: 1.5rem;
        }
        .title h1 {
            color: #d63384;
            font-weight: 700;
            margin: 0;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        .form-label { font-weight: 600; color: #b30059; }
        .form-label i { margin-right: 8px; color: #ff66b2; }
        .form-control, .form-select {
            border-radius: 10px;
            border: 2px solid #ff99cc;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        .form-control:focus, .form-select:focus {
            border-color: #ff4d94;
            box-shadow: 0 0 0 0.2rem rgba(255,77,148,0.25);
        }
        .btn-custom {
            background: linear-gradient(45deg, #ff66b2, #ff4d94);
            color: white;
            border-radius: 25px;
            font-weight: 600;
            border: none;
            padding: 12px 24px;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .btn-custom:hover {
            background: linear-gradient(45deg, #e60073, #cc0066);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255,102,178,0.4);
        }
        .btn-secondary-custom {
            background: linear-gradient(45deg, #6c757d, #5a6268);
            color: white;
            border-radius: 25px;
            padding: 12px 24px;
        }
        .btn-secondary-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(108,117,125,0.4);
        }
        table {
            margin-top: 20px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(255,105,180,0.2);
            animation: fadeInUp 0.8s ease-out;
        }
        th {
            background: linear-gradient(45deg, #ff99cc, #ff66b2);
            color: white;
            text-align: center;
            font-weight: 600;
            padding: 15px;
        }
        td {
            background: #fff0f8;
            padding: 12px;
            border-bottom: 1px solid #ffccff;
        }
        tr:hover td { background: #ffeef7; transition: 0.2s; }
        .section-title {
            font-size: 20px;
            margin: 30px 0 20px;
            font-weight: 700;
            color: #b30059;
            display: flex;
            align-items: center;
        }
        .section-title i { margin-right: 10px; color: #ff4da6; }
        .alert { border-radius: 10px; border: none; }
        .form-check-input:checked { background-color: #ff66b2; border-color: #ff66b2; }
        .radio-group { display: flex; gap: 20px; flex-wrap: wrap; }
        .checkbox-group { display: flex; flex-direction: column; gap: 10px; background: #fff5fa; padding: 10px; border-radius: 10px; }
        .no-data { text-align: center; color: #999; font-style: italic; padding: 40px; }
        @keyframes fadeInDown { from {opacity:0; transform:translateY(-30px);} to {opacity:1; transform:translateY(0);} }
        @keyframes fadeInUp { from {opacity:0; transform:translateY(30px);} to {opacity:1; transform:translateY(0);} }
    </style>
</head>
<body>

<!-- CONTAINER 1: FORM BIODATA -->
<div class="container animate__animated animate__fadeIn">
    <div class="title">
        <h1>Website Biodata Mahasiswa</h1>
        <p class="text-muted mt-2">Kelola data biodata dengan mudah dan aman</p>
    </div>

    <!-- FORM BIODATA -->
    <div class="section-title"><i class="fa-solid fa-address-card"></i> Form Input Biodata</div>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <!-- input nama -->
        <div class="mb-3">
            <label for="nama" class="form-label"><i class="fa-solid fa-user"></i> Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <!-- input nim -->
        <div class="mb-3">
            <label for="nim" class="form-label"><i class="fa-solid fa-id-card"></i> NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" required>
        </div>
        <!-- input prodi -->
        <div class="mb-3">
            <label for="prodi" class="form-label"><i class="fa-solid fa-book"></i> Program Studi</label>
            <select class="form-select" id="prodi" name="prodi" required>
                <option value="">Pilih Program Studi</option>
                <option value="Informatika">Informatika</option>
                <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Teknik Elektro">Teknik Elektro</option>
            </select>
        </div>
        <!-- input jk -->
        <div class="mb-3">
            <label class="form-label"><i class="fa-solid fa-venus-mars"></i> Jenis Kelamin</label>
            <div class="radio-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jk" id="laki" value="Laki-laki" required>
                    <label class="form-check-label" for="laki">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jk" id="perempuan" value="Perempuan">
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>
        </div>
        <!-- input hobi -->
        <div class="mb-3">
            <label class="form-label"><i class="fa-solid fa-heart"></i> Hobi</label>
            <div class="checkbox-group">
                <div class="form-check"><input class="form-check-input" type="checkbox" name="hobi[]" value="Membaca"> Membaca</div>
                <div class="form-check"><input class="form-check-input" type="checkbox" name="hobi[]" value="Olahraga"> Olahraga</div>
                <div class="form-check"><input class="form-check-input" type="checkbox" name="hobi[]" value="Musik"> Musik</div>
                <div class="form-check"><input class="form-check-input" type="checkbox" name="hobi[]" value="Traveling"> Traveling</div>
            </div>
        </div>
        <!-- input alamat -->
        <div class="mb-3">
            <label for="alamat" class="form-label"><i class="fa-solid fa-location-dot"></i> Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
        </div>
        <!-- tombol -->
        <div class="d-flex gap-2 justify-content-end">
            <button type="reset" class="btn btn-secondary-custom"><i class="fa-solid fa-rotate"></i> Reset</button>
            <button type="submit" name="submit_biodata" class="btn btn-custom"><i class="fa-solid fa-envelope"></i> Kirim</button>
        </div>
    </form>

    <?php
    if (isset($_POST['submit_biodata'])) {
        $nama = trim($_POST['nama']);
        $nim = trim($_POST['nim']);
        $prodi = trim($_POST['prodi']);
        $jk = $_POST['jk'] ?? '';
        $hobi = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : "-";
        $alamat = trim($_POST['alamat']);

        if ($nama && $nim && $prodi && $jk) {
            $line = "$nama|$nim|$prodi|$jk|$hobi|$alamat\n";
            file_put_contents("data.txt", $line, FILE_APPEND | LOCK_EX);
            echo "<div class='alert alert-success mt-4'><i class='fa-solid fa-check-circle'></i> Data berhasil disimpan!</div>";
        } else {
            echo "<div class='alert alert-danger mt-4'><i class='fa-solid fa-exclamation-triangle'></i> Lengkapi semua field wajib!</div>";
        }
    }
    ?>
</div>

<!-- CONTAINER 2: PENCARIAN & TABEL -->
<div class="container animate__animated animate__fadeIn">
    <div class="section-title"><i class="fa-solid fa-magnifying-glass"></i> Pencarian & Daftar Biodata</div>
    <form method="get" class="d-flex mb-4 gap-2">
        <input type="text" class="form-control" name="keyword" placeholder="Cari Nama / NIM / Prodi...">
        <button type="submit" class="btn btn-custom"><i class="fa-solid fa-search"></i> Cari</button>
        <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="btn btn-secondary-custom"><i class="fa-solid fa-list"></i> Semua</a>
    </form>

    <?php
    $keyword = strtolower($_GET['keyword'] ?? '');
    if (file_exists("data.txt")) {
        $rows = file("data.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $jumlah = count($rows);

        if ($jumlah == 0) {
            echo "<div class='alert alert-info text-center'>
                    <i class='fa-solid fa-folder-open'></i> Belum ada data tersimpan.
                  </div>";
        } else {
            $hasil = [];
            foreach ($rows as $row) {
                if ($keyword != '' && stripos($row, $keyword) !== false) {
                    $hasil[] = $row;
                }
            }

            if ($keyword == '') {
                echo "<div class='alert alert-info text-center'>
                        <i class='fa-solid fa-database'></i> Total data tersimpan: $jumlah
                      </div>";
            } elseif (!empty($hasil)) {
                echo "<div class='mb-3'><strong>Total data tersimpan: $jumlah</strong></div>";
                echo "<table class='table table-bordered text-center'>
                        <thead><tr>
                            <th>Nama</th><th>NIM</th><th>Prodi</th><th>JK</th><th>Hobi</th><th>Alamat</th>
                        </tr></thead><tbody>";
                foreach ($hasil as $row) {
                    $data = explode("|", $row);
                    echo "<tr>";
                    foreach ($data as $col) echo "<td>".htmlspecialchars($col)."</td>";
                    echo "</tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "<div class='alert alert-warning text-center'>
                        <i class='fa-solid fa-inbox'></i> Data tidak ditemukan.<br>
                        <small>Total data tersimpan: $jumlah</small>
                      </div>";
            }
        }
    } else {
        echo "<div class='alert alert-info text-center'>
                <i class='fa-solid fa-folder-open'></i> Belum ada data tersimpan.
              </div>";
    }
    ?>
</div>

</body>
</html>
