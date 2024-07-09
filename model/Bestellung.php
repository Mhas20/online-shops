<?php
class Bestellung
{
    private int $b_id;
    private int $u_id;
    private array $produkte;
    private string $datum;
    private int $amount;
    private int $ordernum;

    /**
     * @param int $b_id
     * @param int $u_id
     * @param array $produkte
     * @param string $datum
     * @param int $amount
     */
    public function __construct(int $b_id, int $u_id, array $produkte, string $datum, int $amount, int $ordernum)
    {
        $this->b_id = $b_id;
        $this->u_id = $u_id;
        $this->produkte = $produkte;
        $this->datum = $datum;
        $this->amount = $amount;
        $this->ordernum = $ordernum;
    }

    public function getBId(): int
    {
        return $this->b_id;
    }

    public function getUId(): int
    {
        return $this->u_id;
    }

    public function getProdukte(): array
    {
        return $this->produkte;
    }


    public function getDatum(): string
    {
        return $this->datum;
    }


    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getOrdernum(): int
    {
        return $this->ordernum;
    }



    public static function dbconn()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "online_shops";
        return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }

    public static function createBestellung(int $u_id, int $p_id, int $amount, int $ordernum): bool
    {
        $con = self::dbconn();
        $datum = date('Y-m-d');

        $sql = 'INSERT INTO Bestellung (u_id, p_id, date, amount, ordernum) VALUES (:u_id, :p_id, :datum, :amount, :ordernum)';
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':u_id', $u_id);
        $stmt->bindParam(':p_id', $p_id);
        $stmt->bindParam(':datum', $datum);
        $stmt->bindParam(':amount', $amount);
        $stmt->bindParam(':ordernum', $ordernum);
        $stmt->execute();

        return true;
    }



//    public static function findBestellungById(int $b_id): ?Bestellung
//    {
//        $con = self::dbconn();
//        $sql = 'SELECT * FROM Bestellung WHERE b_id = :b_id';
//        $stmt = $con->prepare($sql);
//        $stmt->bindParam(':b_id', $b_id);
//        $stmt->execute();
//        $bestellungData = $stmt->fetch(PDO::FETCH_ASSOC);
//
//        if ($bestellungData) {
//            $sql = 'SELECT p_id FROM Bestellung WHERE b_id = :b_id';
//            $stmt = $con->prepare($sql);
//            $stmt->bindParam(':b_id', $b_id);
//            $stmt->execute();
//            $produkteData = $stmt->fetchAll(PDO::FETCH_COLUMN);
//
//            return new Bestellung(
//                $bestellungData['b_id'],
//                $bestellungData['u_id'],
//                $produkteData,
//                $bestellungData['date'],
//                $bestellungData['amount'],
//                $bestellungData['ordernum']
//            );
//        } else {
//            return null;
//        }
//    }

    public static function findOrderNum(int $u_id): array
    {
        $con = self::dbconn();
        $sql = 'SELECT * FROM Bestellung WHERE u_id = :u_id GROUP BY ordernum';
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':u_id', $u_id, PDO::PARAM_INT);
        $stmt->execute();
        $bestellungData = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $bestellungen = [];
        foreach ($bestellungData as $bestellung) {
            $sql = 'SELECT p_id FROM Bestellung WHERE ordernum = :ordernum';
            $stmt = $con->prepare($sql);
            $stmt->bindParam(':ordernum', $bestellung['ordernum'], PDO::PARAM_INT);
            $stmt->execute();
            $produkteData = $stmt->fetchAll(PDO::FETCH_COLUMN);

            $bestellungen[] = new Bestellung(
                $bestellung['b_id'],
                $bestellung['u_id'],
                $produkteData,
                $bestellung['date'],
                $bestellung['amount'],
                $bestellung['ordernum']
            );
        }
        return $bestellungen;
    }


    public static function randOrderNum() {
        return mt_rand(1000, 9999);
    }

}

