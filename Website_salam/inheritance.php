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
         class Hewan {
             
             protected $nama;
         
             public function __construct($nama) {
                 $this->nama = $nama;
             }
         
             public function getNama() {
                 return $this->nama;
             }
         
             public function suara() {
                 return "Suara hewan";
             }
         }
         
         class Anjing extends Hewan {
         
             public function suara() {
                 return "Guk Guk!";
             }
         }
         
         $anjingSaya = new Anjing("Buddy");
         
         // echo "Nama Hewan: " . $anjingSaya->getNama();
         // echo "Suara Hewan: " . $anjingSaya->suara();
         ?>
      <div class="code-box">
         <pre><code class="language-python">class Hewan {
    
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    public function suara() {
        return "Suara hewan";
    }
}

class Anjing extends Hewan {

    public function suara() {
        return "Guk Guk!";
    }
}

$anjingSaya = new Anjing("Buddy");
echo "Nama Hewan: " . $anjingSaya->getNama();
echo "Suara Hewan: " . $anjingSaya->suara();</code></pre>
      </div>
      <div class="output-box">
         <pre><code class="output-content">nama hewan: <?=$anjingSaya->getNama()?><br>suara hewan: <?=$anjingSaya->suara()?></code></pre>
      </div>
   </body>
</html>