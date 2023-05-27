<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Pemetaan Pendidikan Kota Padang</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="main">
        <div class="header text-light">
            <div class="row align-items-start">
                <div class="col-2 text-end">
                    <img src="assets/Logo_Padang.png" alt="Logo Kota Padang" style="margin-top: 20px;">
                </div>
                <div class="col-8 text-center">
                    SISTEM INFORMASI PEMETAAN PENDIDIKAN DI KOTA PADANG
                </div>
                <div class="col-2 text-start">
                    <img src="assets/images-removebg-preview.png" alt="Logo Peta" style="margin-top: 20px;">
                </div>
            </div>
        </div>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link  text-dark" href="index.html" >Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  text-dark" href="sdgs.html">SDGs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="info.php" style="text-decoration: underline; color: #005689;">Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  text-dark" href="titikbangun.html">Titik Bangun</a>
            </li>
         </ul>

         <div class="content-info">
            <div class="context">
                <h3>PENDIDIKAN KOTA PADANG</h3>
                <p>Pendidikan di Kota Padang cukup berkembang dengan banyaknya sekolah baik dari tingkat dasar hingga perguruan tinggi. Kota Padang juga menjadi pusat pendidikan di Sumatera Barat dengan beberapa perguruan tinggi terkenal seperti Universitas Andalas dan Institut Teknologi Padang. Walaupun dari sisi pengembangan masih dibutuhkan untuk beberapa kecamatan. Pembangunan pendidikan di kota Padang cukup tersendat dikota Padang. </p>
                <p>Di tingkat dasar, terdapat sekolah-sekolah dasar (SD) dan madrasah ibtidaiyah (MI) yang tersebar di seluruh wilayah Kota Padang. Di tingkat menengah, terdapat sekolah menengah pertama (SMP) dan madrasah tsanawiyah (MTs) serta sekolah menengah atas (SMA) dan madrasah aliyah (MA). Selain itu, ada juga beberapa sekolah kejuruan dan sekolah menengah kejuruan (SMK).</p>
                <p>Untuk perguruan tinggi, selain Universitas Andalas dan Institut Teknologi Padang, terdapat juga beberapa perguruan tinggi swasta yang cukup terkenal seperti Universitas Negeri Padang, Universitas Putra Indonesia YPTK Padang, dan Universitas Bung Hatta.</p>
            </div>
            <div class="contimg">
                <img src="assets/pend.png" alt="Dinas Pendidikan">
            </div>
         </div>

         <div class="content-table">
            <h3>TABEL PENDIDIKAN KOTA PADANG</h3>
            <table class="table">
                <thead>
                  <tr class="table-primary">
                    <th scope="col">No</th>
                    <th scope="col">Nama Wilayah</th>
                    <th scope="col">TK</th>
                    <th scope="col">SD</th>
                    <th scope="col">SMP</th>
                    <th scope="col">SMA</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    include 'config.php';

                    $data = $con -> query ('SELECT * FROM info');

                    $i = 1;

                    while ($temp = $data -> fetch_assoc ()) {
                  ?>
                  <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $temp['wilayah'] ?></td>
                    <td><?= $temp['tk'] ?></td>
                    <td><?= $temp['sd'] ?></td>
                    <td><?= $temp['smp'] ?></td>
                    <td><?= $temp['sma'] ?></td>
                  </tr>
                  <?php
                    $i++;
                    }
                  ?>
                </tbody>
              </table>
         </div>
    </div>
    
    <footer>
        <div class="container">
            <div class="row align-items-end">
                <div class="col-2">
                  <img src="assets/list.png" alt="logolist" style="width:120px; margin:15px">
                </div>
                <div class="col-8 text-light sumbar">
                    SISTEM INFORMASI PEMETAAN PENDIDIKAN <br> KOTA PADANG <br> SUMATERA BARAT
                </div>
                <div class="col-2 text-light" style="font-size: 12px; font-weight: 200; margin-bottom: 10px;">
                    ©April 2023 || Kel 2
                </div>
              </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>