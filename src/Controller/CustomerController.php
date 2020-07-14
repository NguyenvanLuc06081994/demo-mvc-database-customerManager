<?php

namespace App\Controller;

use App\Model\Customer;
use App\Model\DBCustomer;

class CustomerController
{
    protected $customerController;

    public function __construct()
    {
        $this->customerController = new DBCustomer();
    }

    public function getAllCustomer()
    {
        $customers = $this->customerController->getAllCustomer();
        include("src/View/list.php");
    }

    public function addCustomer()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include('src/View/add.php');
        } else {
            $fullname = $_REQUEST['fullname'];
            $address = $_REQUEST['address'];
            $email = $_REQUEST['email'];
            $phone = $_REQUEST['phone'];
            $customer = new Customer($fullname, $address, $email, $phone);
            $this->customerController->addCustomer($customer);
            header("location:index.php");
        }
    }

    public function updateCustomer()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_REQUEST['id'];
            $customer = $this->customerController->getIdCustomer($id);
            include('src/View/update.php');
        } else {
            $id = $_REQUEST['id'];
            $fullname = $_REQUEST['fullname'];
            $address = $_REQUEST['address'];
            $email = $_REQUEST['email'];
            $phone = $_REQUEST['phone'];
            $customer = new Customer($fullname, $address, $email, $phone);
            $customer->setCustomerNumber($id);
            $this->customerController->updateCustomer($customer);
            header("location:index.php");
        }
    }
}