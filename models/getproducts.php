<?php 
class Products{
    private $conn;
    private $table='products';

    public $genre;
    public $product_id;
    
    public $product_name;
    public $description;
    public $price;
    public $image;
    
    //if its a game
    public $code_s;
    public $ram;
    public $graphics_card;
    public $processor;
    public $operating_system;

    //if its an accessory
    public $acc_type_name;
    public $quantity;

    public function __construct($db){
        $this->conn=$db;
    }

    public function getAllProducts(){
        $result;
        //create query 
        $query='SELECT pr.product_name, pr.price, pr.product_id, pr.image FROM ' . $this->table. ' pr';

        //prepare statement 
        $stmt= $this->conn->prepare($query);
        
        //execute query
        if(!$stmt->execute()){
            //true if sth went wrong
            $result=true;
            return result;
        }
        //otherwise return all products
        else return $stmt;
    }

    public function getGamesById(){
        $result;
        //create query 
        $query='SELECT pr.product_name, pr.price, pr.description, pr.product_id, pr.image, 
        sf.ram, sf.graphics_card, sf.processor, sf.operating_system, vg.genre
        FROM  products pr JOIN software_requirements sf ON sf.product_id=pr.product_id JOIN video_games vg
        ON vg.product_id=pr.product_id WHERE pr.product_id=?;';
        
        //prepare statement 
        $stmt= $this->conn->prepare($query);

        //bind this id to the ? at the query
        $stmt->bindParam(1,$this->product_id);

        //execute query
        if(!$stmt->execute()){
            //true if sth went wrong
            $result=true;
            return result;
        }

        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        //set properties
        $this->product_name=$row['product_name'];
        $this->price=$row['price'];
        $this->description=$row['description'];
        $this->genre=$row['genre'];
        $this->image=$row['image'];
        $this->ram=$row['ram'];
        $this->graphics_card=$row['graphics_card'];
        $this->processor=$row['processor'];
        $this->operating_system=$row['operating_system'];
        
    }

    public function getAccessioriesById(){
        $result;
        //create query 
        $query='SELECT pr.product_name, pr.price, pr.description, pr.product_id, pr.image, 
        acc.quantity, acct.acc_type_name
        FROM  products pr JOIN accessories acc ON acc.product_id=pr.product_id JOIN accessory_type acct
        ON acct.acc_type=acc.acc_type
        WHERE pr.product_id=?;';
        
        //prepare statement 
        $stmt= $this->conn->prepare($query);

        //bind this id to the ? at the query
        $stmt->bindParam(1,$this->product_id);

        //execute query
        if(!$stmt->execute()){
            //true if sth went wrong
            $result=true;
            return result;
        }

        $row=$stmt->fetch(PDO::FETCH_ASSOC);

        //set properties
        $this->product_name=$row['product_name'];
        $this->price=$row['price'];
        $this->description=$row['description'];
        $this->image=$row['image'];
        $this->acc_type_name=$row['acc_type_name'];
        $this->quantity=$row['quantity'];
    }

    public function getGamesByGenre(){
        $result;
        //create query 
        $query="SELECT pr.product_name, pr.price, pr.product_id, pr.image, vg.genre 
        FROM video_games vg JOIN products pr ON vg.product_id=pr.product_id  
        WHERE vg.genre LIKE '%". $this->genre ."%' ";
        
        //prepare statement 
        $stmt= $this->conn->prepare($query);

        //execute query
        if(!$stmt->execute()){
            //true if sth went wrong
            $result=true;
            return result;
        }
        return $stmt;
    }

    public function getAccessoriesByGenre(){
        $result;
        //create query 
        $query="SELECT pr.product_name, pr.price, pr.product_id, pr.image, acct.acc_type_name 
        FROM  products pr JOIN accessories acc ON acc.product_id=pr.product_id JOIN accessory_type acct
        ON acct.acc_type=acc.acc_type   
        WHERE acct.acc_type_name LIKE '%". $this->genre ."%' ";
        
        //prepare statement 
        $stmt= $this->conn->prepare($query);

        //execute query
        if(!$stmt->execute()){
            //true if sth went wrong
            $result=true;
            return result;
        }
        return $stmt;
    }



}
?>