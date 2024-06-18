<?php

class Products
{
    private int $p_id;
    private string $p_name;
    private string $p_price;
    private string $role;
    private string $details;
    private int $amount;

    /**
     * @param int $p_id
     * @param string $p_name
     * @param string $p_price
     * @param string $role
     * @param string $details
     * @param int $amount
     */
    public function __construct(int $p_id, string $p_name, string $p_price, string $role, string $details, int $amount)
    {
        $this->p_id = $p_id;
        $this->p_name = $p_name;
        $this->p_price = $p_price;
        $this->role = $role;
        $this->details = $details;
        $this->amount = $amount;
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

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    public static function dbconn()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "online-shops";
        return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }

    public static function createProducts(string $p_name, string $p_price, string $role, string $details, int $amount): bool
    {
        $con = self::dbconn();
        $sql = 'INSERT INTO products (p_name, details, role, price, amount) VALUES (:p_name, :details, :role, :price, :amount)';
        $stmt = $con->prepare($sql);

        $stmt->bindParam(":p_name", $p_name);
        $stmt->bindParam(":price", $p_price);
        $stmt->bindParam(":p_name", $role);
        $stmt->bindParam(":p_name", $details);
        $stmt->bindParam(":p_name", $amount);

        return $stmt->execute();

    }






}