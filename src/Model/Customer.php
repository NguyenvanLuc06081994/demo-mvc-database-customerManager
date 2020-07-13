<?php


namespace App\Model;


class Customer
{
    protected $customer_number;
    protected $fullName;
    protected $address;
    protected $email;
    protected $phone;

    public function __construct($fullName,$address,$email,$phone)
    {
        $this->fullName = $fullName;
        $this->address = $address;
        $this->email = $email;
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getCustomerNumber()
    {
        return $this->customer_number;
    }

    /**
     * @param mixed $customer_number
     */
    public function setCustomerNumber($customer_number): void
    {
        $this->customer_number = $customer_number;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param mixed $fullName
     */
    public function setFullName($fullName): void
    {
        $this->fullName = $fullName;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }
}