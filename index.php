<?php
// Data Mata Kuliah
$mata_kuliah = [
    ["Sistem Informasi Perusahaan dan Akuntansi Dasar", "SI244107", 2, 77, 3, "B"],
    ["Matematika Diskrit", "SI244103", 3, 75, 3, "B"],
    ["Wawasan Teknologi Informasi", "SI244101", 2, 73, 3, "B"],
    ["Bahasa Indonesia", "SI244108", 2, 76, 3, "B"],
    ["Algoritma & Struktur Data", "SI244106", 4, 95, 4, "A"],
    ["Manajemen Bisnis", "SI244105", 3, 80, 4, "A"],
    ["Pendidikan Agama Islam 1", "SI244102", 2, 83, 4, "A"],
    ["Pancasila", "SI244104", 2, 83, 4, "A"],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Studi</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header class="main-header">
    <div class="header-left">
        <button class="menu-toggle">☰</button>
        <h1>SISTEM INFORMASI MANAJEMEN PERGURUAN TINGGI <strong>UNIVERSITAS ALGHIFARI</strong></h1>
    </div>
    <div class="header-right">
        <div class="notification">
            <span class="bell-icon">🔔</span>
        </div>
        <div class="user-profile">
            <img src="https://via.placeholder.com/35" alt="User Profile" class="profile-img">
            <div class="user-info">
                <span class="greeting">Selamat datang,</span>
                <span class="user-name">CHELSA DWI MAULANY</span>
            </div>
        </div>
    </div>
</header>

<!-- < cladivss="top-bar">
    <div class="page-title">Resume Studi</div>
    <div class="breadcrumb">🏠 / Akademik / Resume Studi</div>
</div> -->
    <div class="container">
        <header>
            <h2>Resume Studi</h2>
            <div class="breadcrumb">🏠 / Akademik / Resume Studi</div>
        </header>

        <div class="card">
            <table class="table-summary">
                <thead>
                    <tr>
                        <th rowspan="2">TAHUN AKADEMIK</th>
                        <th rowspan="2">SMT</th>
                        <th colspan="2">NILAI</th>
                        <th colspan="2">SKS</th>
                    </tr>
                    <tr>
                        <th>IP</th>
                        <th>IPK</th>
                        <th>SMT</th>
                        <th>TEMPUH</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2025/2026 - GANJIL</td>
                        <td>1</td>
                        <td>1,35</td>
                        <td>1,35</td>
                        <td>20</td>
                        <td>20</td>
                    </tr>
                </tbody>
            </table>

            <div class="action-bar">
                <button class="btn-khs">🖨️ KHS</button>
            </div>

            <table class="table-detail">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>MATA KULIAH</th>
                        <th>SKS</th>
                        <th>NILAI</th>
                        <th>INDEKS</th>
                        <th>HURUF</th>
                        <th>TRANSFER?</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mata_kuliah as $key => $row): ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td class="text-left">
                            <?= $row[0] ?> <span class="code"><?= $row[1] ?></span>
                        </td>
                        <td><?= $row[2] ?></td>
                        <td><?= $row[3] ?></td>
                        <td><?= $row[4] ?></td>
                        <td><?= $row[5] ?></td>
                        <td><span class="badge">Bukan</span></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>