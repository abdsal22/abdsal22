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
             public function __construct($merk, $warna) {
                 $this->merk = $merk;
                 $this->warna = $warna;
             }
         
             public function getMerk() {
                 return $this->merk;
             }
         
             public function setWarna($warna) {
                 $this->warna = $warna;
             }
         
             public function getWarna() {
                 return $this->warna;
             }
         
         }
         
         $mobilSaya = new Mobil("Toyota", "Merah");
         
         // echo "Merk Mobil: " . $mobilSaya->getMerk();
         // echo "Warna Mobil: " . $mobilSaya->getWarna();
         
         $mobilSaya->setWarna("Biru");
         ?>
      <div class="code-box">
         <pre><code class="language-python">class Mobil {
    
    private $merk;
    private $warna;
    
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function getWarna() {
        return $this->warna;
    }

}

$mobilSaya = new Mobil("Toyota", "Merah");
$mobilSaya->setWarna("Biru");

echo "Merk Mobil: " . $mobilSaya->getMerk();
echo "Warna Mobil: " . $mobilSaya->getWarna();</code></pre>
      </div>
      <div class="output-box">
         <pre><code class="output-content">merek mobil: <?=$mobilSaya->getMerk()?><br>warna mobil: <?=$mobilSaya->getWarna()?></code></pre>
      </div>
   </body>
</html>