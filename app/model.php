<?php

class Model
{
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('не могу установить соединение с БД');
        }
    }

    public function getOrders()
    {
        $sql = "SELECT orders.id, goods.name, orders.created_at, orders.updated_at FROM orders, goods WHERE orders.goodID=goods.id ORDER BY orders.id ASC";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function placeOrder($id)
    {
        $sql = "INSERT INTO orders (goodID) VALUES (:goodID)";
        $query = $this->db->prepare($sql);
        $params = array(':goodID' => $id);

        $query->execute($params);
    }

    public function destroyOrder($id)
    {
        $sql = "DELETE FROM orders WHERE id = :id";
        $query = $this->db->prepare($sql);
        $params = array(':id' => $id);

        $query->execute($params);
    }

    public function addProduct($name, $price, $description)
    {
        $sql = "INSERT INTO goods (name, price, description) VALUES (:name, :price, :description)";
        $query = $this->db->prepare($sql);
        $params = array(':name' => $name, ':price' => $price, ':description' => $description);

        $query->execute($params);
    }

    public function getGoods()
    {
        
        $sql = "SELECT id, name, price, description, created_at, updated_at FROM goods";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function updateProduct($name, $price, $description, $id)
    {
        $sql = "UPDATE goods SET name = :name, price = :price, description = :description WHERE id = :id";
        $query = $this->db->prepare($sql);
        $params = array(':name' => $name, ':price' => $price, ':description' => $description, ':id' => $id);

        $query->execute($params);
    }

    public function getProduct($id)
    {
        $sql = "SELECT id, name, price, description, created_at, updated_at FROM goods WHERE id = :id";
        $query = $this->db->prepare($sql);
        $params = array(':id' => $id);

        $query->execute($params);

        return $query->fetch();
    }

    public function destroyProduct($id)
    {
        $sql = "DELETE FROM goods WHERE id = :id";
        $query = $this->db->prepare($sql);
        $params = array(':id' => $id);

        $query->execute($params);
    }
}
