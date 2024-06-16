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
             public function bersuara() {
                 return "Suara hewan";
             }
         }
         
         class Anjing extends Hewan {
             public function bersuara() {
                 return "Guk guk!";
             }
         }
         
         class Kucing extends Hewan {
             // Method untuk mengeluarkan suara kucing
             public function bersuara() {
                 return "Meong meong!";
             }
         }
         
         function suaraHewan(Hewan $hewan) {
             return $hewan->bersuara();
         }
         
         $anjing = new Anjing();
         $kucing = new Kucing();
         
         // echo suaraHewan($anjing);
         // echo suaraHewan($kucing);
         ?>
      <div class="code-box">
         <pre><code class="language-python">class Hewan {
    public function bersuara() {
        return "Suara hewan";
    }
}

class Anjing extends Hewan {
    public function bersuara() {
        return "Guk guk!";
    }
}

class Kucing extends Hewan {
    // Method untuk mengeluarkan suara kucing
    public function bersuara() {
        return "Meong meong!";
    }
}

function suaraHewan(Hewan $hewan) {
    return $hewan->bersuara();
}

$anjing = new Anjing();
$kucing = new Kucing();

echo suaraHewan($anjing);
echo suaraHewan($kucing);</code></pre>
      </div>
      <div class="output-box">
         <pre><code class="output-content">nama hewan: <?=suaraHewan($anjing)?><br>suara hewan: <?=suaraHewan($kucing)?>
</code></pre>
      </div>
   </body>
</html>