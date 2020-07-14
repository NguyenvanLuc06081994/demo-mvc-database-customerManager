<?php


namespace App\Model;


class DBCustomer
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAllCustomer()
    {
        $sql = "SELECT * FROM customers";
        $stmt = $this->database->query($sql);
        $data = $stmt->fetchAll();
        $arr = [];
        foreach ($data as $key => $item) {
            $customer = new Customer($item['fullname'], $item['address'], $item['email'], $item['phone']);
            $customer->setCustomerNumber(++$key);
            array_push($arr, $customer);
        }
        return $arr;
    }

    public function addCustomer($customer)
    {
        $sql = "INSERT INTO `customers`( `fullname`, `address`, `email`, `phone`) VALUES ( :fullname, :address, :email, :phone)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':fullname',$customer->getFullName());
        $stmt->bindParam(':address',$customer->getAddress());
        $stmt->bindParam(':email',$customer->getEmail());
        $stmt->bindParam(':phone',$customer->getPhone());
        $stmt->execute();
    }

    public function getIdCustomer($id)
    {
        $sql = "SELECT * FROM customers WHERE customer_number = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $item =$stmt->fetch();
//        var_dump($item);
//        die();
        return $item;

    }

    public function updateCustomer($customer)
    {
        $sql = "UPDATE `customers` SET `fullname`= :fullname ,`address`= :address,`email`= :email,`phone`= :phone WHERE customer_number = :id ";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id',$customer->getCustomerNumber());
        $stmt->bindParam(':fullname',$customer->getFullName());
        $stmt->bindParam(':address',$customer->getAddress());
        $stmt->bindParam(':email',$customer->getEmail());
        $stmt->bindParam(':phone',$customer->getPhone());
        $stmt->execute();
    }




}