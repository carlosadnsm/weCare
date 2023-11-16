<?php
class Customer
{
    public $id;
    public $name;
    public $email;
    public $date;
    public $phone;
    public $document;
    public $gender;
    private $password_hashed;

    private $image_path;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getName()
    {
        return $this->name;

    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function getDocument()
    {
        return $this->document;
    }
    public function setDocument($document)
    {
        $this->document = $document;
    }
    public function getGender()
    {
        return $this->gender;
    }
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    public function getPassword_hashed()
    {
        return $this->password_hashed;
    }

    public function setPassword_hashed($password_hashed)
    {
        $this->password_hashed = $password_hashed;
    }
    public function getImage_path()
    {
        return $this->image_path;
    }

    public function setImage_path($image_path)
    {
        $this->image_path = $image_path;
    }
}