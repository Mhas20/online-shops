<?php

class Bestellung
{
    private int $b_id;
    private DateTime $date;
    private User $user;
    private Products $products;

    /**
     * @param int $b_id
     * @param DateTime $date
     * @param User $user
     * @param Products $products
     */
    public function __construct(int $b_id, DateTime $date, User $user, Products $products)
    {
        $this->b_id = $b_id;
        $this->date = $date;
        $this->user = $user;
        $this->products = $products;
    }


}