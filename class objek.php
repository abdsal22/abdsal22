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
         class mobil {
             private $roda = 4;
         
             private function jalan() {
                 echo "mobil berjalan";
             }
         
             public function jumlahRoda() {
                 echo $this->roda;
             }
         
             public function aktifkanJalan() {
                 $this->jalan();
             }
         }
         
         $avanza = new mobil();
         ?>
      <div class="code-box">
         <pre><code class="language-python">class mobil {
    private $roda = 4;

    private function jalan() {
        echo "mobil berjalan";
    }

    public function jumlahRoda() {
        echo $this->roda;
    }

    public function aktifkanJalan() {
        $this->jalan();
    }
}

$avanza = new mobil();
$avanza->jumlahRoda();
$avanza->aktivkanJalan();</code></pre>
      </div>
      <div class="output-box">
         <pre><code class="output-content">jumlah roda: <?=$avanza->jumlahRoda()?><br><?=$avanza->aktifkanJalan()?>
    </code></pre>
      </div>
</body>
</html>