<?php  

   class Movie{
    public $titolo;
    public $cast;
    public $durata;
    private $img;
    public $rate;
    public $data;
    public $datadiff;
        public function __construct($_titolo,$_img){
            $this->titolo=$_titolo; 
            $this->img=$_img; 
        }
        public function Getimg(){
            
            return $this->img;
        }
        public function datadiff($_years){
          $this->datadiff= ($_years - (int)$this->data).' anni fa';
        }

    }
    $film = new Movie('Quello che non  vuoi','img/foto2.jpg') ;
    $film ->cast="Il cast ";
    $film ->durata="70min";
    $film ->rate=5;
    $film ->data="2015";
    $film ->datadiff(2021);
   $film1 = new Movie('Quello che vuoi','img/foto.jpg') ;
   $film1 ->cast="Il cast che vuoi tu";
   $film1 ->durata="60min";
   $film1 ->rate=3;
   $film1 ->data="2010";
   $film1 ->datadiff(2021);
    $raccolta=[];
    array_push($raccolta,$film,$film1);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="movie">
        <?php foreach($raccolta as $movie){?>
            <?php foreach($movie as $items){?>  
                    <span><?php echo $items ?></span><br>
            <?php }?>
        <?php }?>
    </div>
</body>
</html>