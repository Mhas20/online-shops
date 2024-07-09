<?php

class Products
{
    private int $p_id;
    private string $p_name;
    private string $p_price;
    private string $role;
    private string $details;

    /**
     * @param int $p_id
     * @param string $p_name
     * @param string $p_price
     * @param string $role
     * @param string $details
     */
    public function __construct(int $p_id, string $p_name, string $p_price, string $role, string $details)
    {
        $this->p_id = $p_id;
        $this->p_name = $p_name;
        $this->p_price = $p_price;
        $this->role = $role;
        $this->details = $details;
    }

    public function getPId(): int
    {
        return $this->p_id;
    }

    public function getPName(): string
    {
        return $this->p_name;
    }

    public function setPName(string $p_name): void
    {
        $this->p_name = $p_name;
    }

    public function getPPrice(): string
    {
        return $this->p_price;
    }

    public function setPPrice(string $p_price): void
    {
        $this->p_price = $p_price;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): void
    {
        $this->role = $role;
    }

    public function getDetails(): string
    {
        return $this->details;
    }

    public function setDetails(string $details): void
    {
        $this->details = $details;
    }

    public static function dbconn()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "online_shops";
        return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }

    public static function createProducts(string $p_name, string $p_price, string $role, string $details): bool
    {
        $con = self::dbconn();
        $sql = 'INSERT INTO products (p_name, details, role, price) VALUES (:p_name, :details, :role, :price)';
        $stmt = $con->prepare($sql);

        $stmt->bindParam(":p_name", $p_name);
        $stmt->bindParam(":price", $p_price);
        $stmt->bindParam(":role", $role);
        $stmt->bindParam(":details", $details);

        return $stmt->execute();
    }

    public static function findAll(): array
    {
        $con = self::dbconn();
        $sql = 'SELECT * FROM products';
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();

        $result = [];
        foreach ($results as $row){
            $result[] = new Products($row['p_id'],$row['p_name'],$row['price'],$row['role'],$row['details']);
        }
        return $result;

    }

    public static function findbyId(int $p_id): ?Products
    {
        $con = self::dbconn();
        $sql = 'SELECT * FROM products WHERE p_id = :p_id';
        $stmt = $con->prepare($sql);
        $stmt->bindParam(":p_id", $p_id);
        $stmt->execute();
        $results = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($results){
            return new Products($results['p_id'], $results['p_name'], $results['price'], $results['role'], $results['details']);
        }
        else{
            return null;
        }
    }

    public static function deleteProducts(): bool
    {
        $con = self::dbconn();
        $sql = 'DELETE FROM products WHERE p_id = :p_id';
        $stmt = $con->prepare($sql);
        $stmt->bindParam(":p_id", $p_id);
        return $stmt->execute();


    }

    public static function startSession()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
    public static function addProduct($productId, $quantity)
    {
        self::startSession();

        if (isset($_SESSION['cart'][$productId])) {
            $_SESSION['cart'][$productId] += $quantity;
        } else {
            $_SESSION['cart'][$productId] = $quantity;
        }
    }



}