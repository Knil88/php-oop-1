<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php OOP</title>
</head>
<body>
    <?php
    class Movies
    {
        public $nome;
        public $genere;

        public $anno;
        function __construct($nome, $genere, $anno)
        {
            $this->nome = $nome;
            $this->genere = $genere;
            $this->anno = $anno;
            
          
        }
        function GetMovies(){
            return   "Nome:".$this->nome ."<br>"."Genere:".$this->genere ."<br>"."Anno di Produzione:". $this->anno;
                
               
           
            

        }
      
    }
    $movies = [new Movies("American Pie", "Commedia", 1999),
     new Movies("Pirati dei caraibi","Avventura", 2003),
     new Movies("Harry Potter e la pietra filosofale", "Avventura", 2001),
     new Movies("Saw", "Horror", "2004"),
     new Movies("Il Signore Degli Anelli", "Fantasy", 2001),
     new Movies("Star Wars:Una nuova speranza", "Sci-fi", 1976)];
    
    foreach ($movies as $movie){
        echo "<div>" . $movie->GetMovies() . "</div>";
    }

    
    ?>
   
</body>
</html>