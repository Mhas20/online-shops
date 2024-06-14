<?php

class User
{
    private int $u_id;
    private string $fname;
    private string $lname;
    private string $email;
    private string $password;
    private string $address;

    /**
     * @param int $u_id
     * @param string $fname
     * @param string $lname
     * @param string $email
     * @param string $password
     * @param string $address
     */
    public function __construct(int $u_id, string $fname, string $lname, string $email, string $password, string $address)
    {
        $this->u_id = $u_id;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->email = $email;
        $this->password = $password;
        $this->address = $address;
    }

    public function getUId(): int
    {
        return $this->u_id;
    }

    public function getFname(): string
    {
        return $this->fname;
    }

    public function setFname(string $fname): void
    {
        $this->fname = $fname;
    }

    public function getLname(): string
    {
        return $this->lname;
    }

    public function setLname(string $lname): void
    {
        $this->lname = $lname;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public static function dbcon()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "online_shops";
        return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }

    public static function createUser(string $fname, string $lname, string $password, string $email, string $role): bool
    {
        $con = self::dbcon();
        $sql = 'INSERT INTO user (fname, lname, email, password, address) VALUES (:fname, :lname, :email, :pwhash, :address)';
        $stmt = $con->prepare($sql);
        $pwhash = password_hash($password,PASSWORD_DEFAULT);
        $stmt->bindParam(':fname', $fname);
        $stmt->bindParam(':lname', $lname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':pwhash', $pwhash);
        $stmt->bindParam(':address', $address);
        return $stmt->execute();

    }

    public static function findbyUser(){
        $con = self::dbcon();
        $sql = 'SELECT * FROM user WHERE u_id = :u_id';
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':u_id', $u_id);
        $stmt->execute();

    }

    public static function findAll()
    {
        $con = self::dbcon();
        $sql = 'SELECT * FROM user';
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_OBJ);

        $users = [];
        foreach ($results as $result) {
            $users = new User();
        }

    }




}