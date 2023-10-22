<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tabel.css">
    <title>Data Pendaftar</title>
</head>

<body>
    <header class="header">
        <img src="assets/point_project.png" alt="logo point project" width="130" height="130" class="logo"/>
        <div class="judul">
            <h1> Data Pendaftar Point Project 1.0 </h1>
        </div>
    </header>

    <div class="main_content">
        <div class="data1">
            <h3>SELAMAT! KAMU SUDAH TERDAFTAR SEBAGAI PESERTA. BERIKUT DATA DIRI KAMU</h3>
            <table border="1">
                <tr>
                    <td>Nama Lengkap </td>
                    <td> : </td>
                    <td><?php echo $_GET['nama_pendaftar']; ?></td>
                </tr>

                <tr>
                    <td>NIM </td>
                    <td> : </td>
                    <td><?php echo $_GET['nim_pendaftar']; ?></td>
                </tr>

                <tr>
                    <td>Program Studi </td>
                    <td> : </td>
                    <td><?php echo $_GET['prodi_pendaftar']; ?></td>
                </tr>

                <tr>
                    <td>Email </td>
                    <td> : </td>
                    <td><?php echo $_GET['email_pendaftar']; ?></td>
                </tr>

                <tr>
                    <td>Password </td>
                    <td> : </td>
                    <td><?php echo $_GET['pwd']; ?></td>
                </tr>

                <tr>
                    <td>Jenis Kelamin </td>
                    <td> : </td>
                    <td><?php echo $_GET['gender']; ?></td>
                </tr>

                <tr>
                    <td>Tanggal Lahir </td>
                    <td> : </td>
                    <td><?php echo $_GET['tanggal_lahir']; ?></td>
                </tr>

                <tr>
                    <td>Alamat </td>
                    <td> : </td>
                    <td><?php echo $_GET['alamat_pendaftar']; ?></td>
                </tr>
            </table>
        </div>
        
        <div class="data2">
            <h1>Berikut Daftar Peserta yang Sudah Mendaftar Terlebih Dahulu</h1>
            <table border="1">
                <tr>
                    <th>N0.</th>
                    <th>NAMA</th>
                    <th>NIM</th>
                    <th>PROGRAM STUDI</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>JENIS KELAMIN</th>
                    <th>TANGGAL LAHIR</th>
                    <th>ALAMAT</th>
                </tr>
                
                <tr>
                    <td>1.</td>
                    <td>Dila Ayu Prastita</td>
                    <td>121140075</td>
                    <td>Teknik Informatika</td>
                    <td>dila.121140075@student.itera.ac.id</td>
                    <td>dilaayu</td>
                    <td>Perempuan</td>
                    <td>15 Juli 2023</td>
                    <td>Sukarame, Bandar Lampung</td>
                </tr>

                <tr>
                    <td>2.</td>
                    <td>Pandu Putra Mulwanda</td>
                    <td>121140176</td>
                    <td>Teknik Informatika</td>
                    <td>pandu.121140176@student.itera.ac.id</td>
                    <td>panduputra</td>
                    <td>Laki-Laki</td>
                    <td>14 Juni 2002</td>
                    <td>Metro, Lampung</td>
                </tr>

                <tr>
                    <td>3.</td>
                    <td>Zahra Areefa Ananta</td>
                    <td>121140138</td>
                    <td>Teknik Informatika</td>
                    <td>zahra.121140138@student.itera.ac.id</td>
                    <td>zahraareefa</td>
                    <td>Perempuan</td>
                    <td>2 November 2003</td>
                    <td>Kotabumi, Lampung</td>
                </tr>

                <tr>
                    <td>4.</td>
                    <td>Shakira Putri Abrar</td>
                    <td>121140053</td>
                    <td>Teknik Informatika</td>
                    <td>shakira.121140053@student.itera.ac.id</td>
                    <td>shakiraputri</td>
                    <td>Perempuan</td>
                    <td>17 November 2002</td>
                    <td>Pramuka, Bandar Lampung</td>
                </tr>

                <tr>
                    <td>5.</td>
                    <td>Nur Hikmah Julliyanti</td>
                    <td>121140137</td>
                    <td>Teknik Informatika</td>
                    <td>nur.121140137@student.itera.ac.id</td>
                    <td>nurhikmah</td>
                    <td>Perempuan</td>
                    <td>10 Juli 2002</td>
                    <td>Lampung</td>
                </tr>
            </table>
        </div>
    </div>

    <footer>
        &copy; Hak Cipta 2023 - Dila Ayu Prastita
    </footer>

</body>

</html>