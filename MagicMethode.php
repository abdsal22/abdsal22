<!DOCTYPE html>
<html lang="id">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Beranda Saya</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <header>
         <h1>Selamat Datang di Beranda Saya</h1>
         <nav>
            <a href="Home.php">Home</a>
            <a href="encaupuaslkhfas.php">encapsulation</a>
            <a href="MagicMethode.php">MagicMethode</a>
            <a href="class objek.php">class objek</a>
            <a href="inheritance.php">inheritance</a>
            <a href="polymorhism.php">polymorhism</a>
         </nav>
      </header>
      <?php
         class Mobil {
             
             private $merk;
             private $warna;
         
             // Constructor
             public function __construct($merk, $warna) {
                 $this->merk = $merk;
                 $this->warna = $warna;
             }
         
             public function __toString() {
                 return "Mobil {$this->merk} berwarna {$this->warna}";
             }
         
             public function __call($namaMetode, $argumen) {
                 echo "Metode '$namaMetode' tidak ditemukan atau tidak tersedia\n";
             }
         
             public function __isset($warna) {
                 $warna = $this->warna;
                 echo "warna mobil: $warna";
             }
         
             public function __unset($merek) {
                 $merek = $this->merk;
                 echo "merek mobil: $merek";
             }
         
         }
         
         $mobil = new Mobil("Toyota", "Merah");
         
         // //Menggunakan __toString()
         // echo "Info Mobil: $mobil\n";
         
         // // Mencoba memanggil metode yang tidak ada
         // $mobil->metodeTidakAda();
         
         // // Mengecek apakah properti ada menggunakan __isset()
         // echo isset($mobil->harga);
         
         // // Menghapus properti menggunakan __unset()
         // unset($mobil->kecepatan);
         
         ?>
      <div class="code-box">
         <pre><code class="language-python">class Mobil {
    
    private $merk;
    private $warna;

    // Constructor
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function __toString() {
        return "Mobil {$this->merk} berwarna {$this->warna}";
    }

    public function __call($namaMetode, $argumen) {
        echo "Metode '$namaMetode' tidak ditemukan atau tidak tersedia\n";
    }

    public function __isset($warna) {
        $warna = $this->warna;
        echo "warna mobil: $warna";
    }

    public function __unset($merek) {
        $merek = $this->merk;
        echo "merek mobil: $merek";
    }

}

$mobil = new Mobil("Toyota", "Merah");

//Menggunakan __toString()
echo "Info Mobil: $mobil\n";

// Mencoba memanggil metode yang tidak ada
$mobil->metodeTidakAda();

// Mengecek apakah properti ada menggunakan __isset()
echo isset($mobil->harga);</code></pre>
      </div>
      <div class="output-box">
         <pre><code class="output-content">info mobil: <?=$mobil?><br><?= $mobil->metodeTidakAda()?><?= isset($mobil->harga)?></code></pre>
      </div>
   </body>
</html>