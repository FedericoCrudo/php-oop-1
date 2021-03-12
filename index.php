<?php  

   class Movie{
    public $titolo;
    public $cast;
    public $durata;
    private $img;
    public $rate;

        public function __construct($_titolo,$_img){
            $this->titolo=$_titolo; 
            $this->img=$_img; 
        }
        public function Getimg(){
            
            return $this->img;
            

            
        }

    }
    $film = new Movie('Quello che non  vuoi','img/foto2.jpg') ;
    $film ->cast="Il cast ";
    $film ->durata="70min";
    $film ->rate=5;
    echo $film->Getimg();
    var_dump($film);
   $film1 = new Movie('Quello che vuoi','img/foto.jpg') ;
   $film1 ->cast="Il cast che vuoi tu";
   $film1 ->durata="60min";
   $film1 ->rate=3;
   echo $film1->Getimg();
   var_dump($film1);


?>