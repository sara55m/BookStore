<?php
require_once("../function.php");
//require_once("../database.php");

class Book{
    public $db;
    public $id;
    public $title;
    public $author;
    public $price;
    
    public function __construct()
    {
        //code to connect with database
        $conn=mysqli_connect("localhost","root","","BookStore");
        $this->db=$conn;
    }

    public function fetch_all_books(){
        //code fetch books from the data base
        $sql="select id,title,author,price from Book";
        $result=$this->db->query($sql);
        if($result->num_rows>0){
            while($book=$result->fetch_assoc()){
                $price=$book["price"]*currency(); 
                echo "<tr>
                <td>{$book["id"]}</td>
                <td>{$book["title"]}</td>
                <td>{$book["author"]}</td>
                <td>{$price} {$_COOKIE["price"]}</td>
                <td>{$this->add_button()}</td>
                </tr>";
            } 
            }
    }
    /*public function fetch_book($id){
        //if(isset($conn)){
            //code fetch a single book from the books table and returns it as a row in the html table
            $sql="select id,title,author,price from Book where id={$id}";
            $result=$this->db->query($sql);
            if($result->num_rows>0){
                while ($book = mysqli_fetch_row($result)) {
                    $this->id=$book[0];
                    $this->title=$book[1];
                    $this->author=$book[2];
                    $this->price=$book[3]*currency();    
                    echo "<tr>
                    <td>{$this->id}</td>
                    <td>{$this->title}</td>
                    <td>{$this->author}</td>
                    <td>{$this->price}  {$_COOKIE["price"]}</td>
                    <td>{$this->add_button()}</td>
                    </tr>";
                }
                }
            }*/
            public function add_button(){
                return "<button type='button' name='add'><a href='BookDetails.php?id={$this->id}&title={$this->title}&author={$this->author}&price={$this->price}'>Add to Cart</a></button>";
            }
            }
?>