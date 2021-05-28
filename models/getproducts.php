<?php 
class Products{
    private $conn;
    private $table='products';

    public $category;
    public $product_id;
    
    public $product_name;
    public $description;
    public $price;
    
    //if its a game
    public $code_s;
    public $ram;
    public $graphics_card;
    public $processor;
    public $operating_system;

    //if its an accessory
    public $acc_type;
    public $acc_type_name;

    public function __construct($db){
        $this->conn=$db;
    }

    public function getAllProducts(){
        $result;
        //create query 
        $query='SELECT product_name, price, product_id FROM ' . $this->table;

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
        //create query 
        $query='SELECT pr.product_name, pr.price, pr.description, pr.product_id, 
        sf.ram, sf.graphics_card, sf.processor, sf.operating_system
        FROM  products pr JOIN software_requirements sf ON sf.product_id=pr.product_id
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
        $this->ram=$row['ram'];
        $this->graphics_card=$row['graphics_card'];
        $this->processor=$row['processor'];
        $this->operating_system=$row['operating_system'];
        
    }

    
}
?>