<?php

namespace App\Model\Entity;

class Admin
{
    private $id;
    private $userName;
    private $password;

    public function __construct($data = null)
    {
        if ($data) {
            $this->setId($data->id);
            $this->setUserName($data->login);
            $this->setPassword($data->password);
        }
    }

    /**
     * Get the value of id.
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of userName.
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set the value of userName.
     *
     * @return self
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get the value of password.
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password.
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}
