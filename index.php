<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>BOX MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
            $url = 'http://www.omdbapi.com/?apikey=a3c42b9&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <h3>BOX MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container">
<div class="row mt-3 text-center">
  <div class="col">
<h1>top movies</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="slank.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">SLANK</h5>
        <p class="card-text">Sesuai judulnya, film ini mengisahkan tentang salah satu band legendaris Indonesia, Slank. 
          Dalam film ini, para personel Slank diperankan oleh sejumlah aktor kenamaan 
          Indonesia seperti Adipati Dolken, Ricky Harun, Ajun Perwira, Deva Mahendra, dan Aaron Ashab.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="juring.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">The conjuring</h5>
        <p class="card-text">Mengusung latar belakang tahun 1971, film The Conjuring 1 mengisahkan tentang keluarga 
          pasangan Carolyn (Lili Taylor) dan Roger Perron (Ron Livingston) bersama 5 orang putri mereka.
           Keluarga Carolyn dan Roger pindah ke sebuah rumah tua di kota Harrisville.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="pocomg.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Pocong Setan Jompo</h5>
        <p class="card-text">Lima orang mahasiswa yang semula normal menjadi berubah setelah kedatangan seorang
           wanita misterius yang mengaku sebagai pengurus sebuah Panti Jompo. Cecil (Uli Auliani), 
           mahasiswi komunikasi yang cerdas, baru saja putus dengan Ridho, 
          karena tertangkap basah selingkuh dengan mahasiswi lain.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="tuhan.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Para Pencari Tuhan</h5>
        <p class="card-text">Empat sekawan geng anak punk, yang terdiri dari King atau Sultan Nusantara, Cupi, Gembel,
           dan Dobleh, selalu menghabiskan waktunya degan melakukan hal-hal yang tidak bermanfaat. Masing-masing dari
            empat sekawan ini memiliki permasalahan yang berbeda-beda dalam
           kehidupan mereka masing-masing. Hingga akhirnya, mereka berusaha mencari jati diri melalui ajaran agama Islam. </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="SPOPBOB.JPEG" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">the spongebob</h5>
        <p class="card-text">Film ini menceritakan tentang Gary, siput peliharaan SpongeBob,  yang tiba-tiba menghilang tanpa meninggalkan jejak.
SpongeBob (Tom Kenny) pun mencari Gary ke penjuru Bikini Bottom. Namun, ia tidak juga berhasil menemukannya. SpongeBob menduga Gary diculik.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="vampir.jpEg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Vampir</h5>
        <p class="card-text">Salah satu sosok misterius yang sering muncul dalam banyak film dan serial adalah vampir. Film vampire dapat menjadi pilihan bila Anda membutuhkan tontonan bernuansa horor dengan alur cerita bervariasi. Ada film vampir romantis,
           film vampir lucu, hingga film vampir seram dan film pemburu vampir. </p>
      </div>
    </div>
  </div>
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
