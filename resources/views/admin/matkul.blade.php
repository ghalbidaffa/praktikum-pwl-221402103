@extends('admin.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@500;600&display=swap"
    rel="stylesheet">
  <!-- my css -->
  <link rel="stylesheet" href="{{ asset ('css/coba.css') }}"> 
  
  

  <title>FEM grid</title>
</head>

<body>
  <main class="testimonial-grid">
    <article class="testimonial grid-col-span-2 flow bg-primary-400 quote text-neutral-100">
      <div class="flex">
        
        <div>
          <h2 class="name">Sistem Basis Data</h2>
          
        </div>
      </div>
      <p>
      SBD atau Sistem Basis Data adalah kumpulan data terorganisir yang disimpan di dalam sebuah sistem komputer. 


      </p>
      <p>Sistem ini dirancang untuk menyimpan, mengelola, dan mengambil data dengan efisien. SBD digunakan untuk memfasilitasi pengolahan data dalam berbagai bidang, seperti bisnis, ilmu pengetahuan, dan teknologi.
      Dalam SBD, data disimpan dalam tabel yang terdiri dari beberapa kolom dan baris. Setiap kolom dalam tabel mewakili jenis data yang berbeda, sedangkan setiap baris mewakili entitas atau objek yang berbeda. Sebagai contoh, sebuah tabel pelanggan dapat memiliki kolom-kolom seperti nama, alamat, nomor telepon, dan email. Setiap baris dalam tabel ini mewakili pelanggan yang berbeda.
      </p>
    </article>
    <article class="testimonial flow bg-secondary-400 text-neutral-100">
      <div class="flex">
        
        <div>
          <h2 class="name">Pemrograman Web Lanjutan</h2>
         
        </div>
      </div>
      <p>
      PWL adalah bidang pemrograman yang berkaitan dengan pengembangan aplikasi web.
      </p>
      <p>
      Pemrograman web lanjutan memungkinkan para pengembang untuk membuat aplikasi web yang lebih interaktif, dinamis, dan kompleks, serta memiliki kemampuan untuk mengolah data dengan lebih baik.
      </p>
    </article>
    <article class="testimonial flow bg-neutral-100 text-secondary-400">
      <div class="flex">
        
        <div>
          <h2 class="name">Pemrograman Berorientasi Objek </h2>
          
        </div>
      </div>
      <p>
      pemrograman yang berfokus pada objek sebagai unit utama dalam pemrograman</p>
      <p>
      Objek adalah entitas yang terdiri dari data (atribut) dan perilaku (metode) yang saling terkait. Dalam PBO, program dibuat dengan cara memodelkan objek-objek dan hubungan antar objek dalam suatu sistem
      </p>
    </article>
    <article class="testimonial grid-col-span-2 flow bg-secondary-500 text-neutral-100">
      <div class="flex">
  
        <div>
          <h2 class="name">Struktur Data Algoritma</h2>
        </div>
      </div>
      <p>
      SDA adalah konsep dalam ilmu komputer yang berkaitan dengan cara menyimpan, mengelola, dan mengakses data dengan efisien.
      </p>
      <p>
      SDA bertujuan untuk mempermudah pemrosesan data dan meningkatkan efisiensi dalam penggunaan memori dan waktu komputasi. Algoritma, di sisi lain, adalah serangkaian langkah atau instruksi yang digunakan untuk menyelesaikan masalah atau tugas tertentu.
      </p>
    </article>
    <article class="testimonial flow bg-neutral-100 text-secondary-400">
      <div class="flex">
        <div>
          <h2 class="name">Teknologi Informasi</h2>
          
        </div>
      </div>
      <p>
      Teknologi Informasi (TI) adalah bidang yang berkaitan dengan penggunaan teknologi dalam pengolahan, penyimpanan, dan pengiriman informasi melalui media elektronik.
      </p>
      <p>
      TI meliputi berbagai aspek, termasuk perangkat keras (hardware), perangkat lunak (software), jaringan komputer, internet, sistem informasi, dan teknologi multimedia.

Pada dasarnya, TI digunakan untuk memfasilitasi dan mempermudah proses pengolahan data dan informasi dalam berbagai bidang, seperti bisnis, pendidikan, kesehatan, hiburan, dan sebagainya. 
      </p>
    </article>
  </main>




</body>

</html>
@endsection