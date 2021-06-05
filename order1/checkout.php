<?php 
class orderDet{
    
    private $conn;
    private $table='order_details';

    public $Card_Type;
    public $delivery_type;
    public $user_id;
    public $product_id;

    public function __construct($db){
        $this->conn=$db;
    }

    public function placeOrder(){
        $result;
        
        if(trim($this->Card_Type)!=""&&$this->delivery_type!=""){

        
        $query='INSERT INTO '.$this->table.' (Card_Type, delivery_type) VALUES (?, ?);';
        
      
        if(!$stmt= $this->conn->prepare($query)){
            $result=true;
            return $result;
        }
        
        $stmt->bindParam(1,$this->Card_Type);
        $stmt->bindParam(2,$this->delivery_type);

         if($stmt->execute()){
             $row=$stmt->fetch(PDO::FETCH_ASSOC);
             $orderdet_id=$this->conn->lastInsertId();

            $query2='INSERT INTO order_u (product_id, user_id, orderdet_id) VALUES (?, ?, ?);';

            $stmt2= $this->conn->prepare($query2);
            
            $stmt2->bindParam(1,$this->product_id);
            $stmt2->bindParam(2,$this->user_id);
            $stmt2->bindParam(3,$orderdet_id);

            $stmt2->execute();
            
            $result=false;
            return $result;
        }
    }else {
        $result=true;
        return $result;
    }     
    }
}