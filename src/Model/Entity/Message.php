<?php

namespace App\Model\Entity;

class Message
{
    private $id;
    private $createdBy;
    private $createdAt;
    private $content;

    public function __construct($data = null)
    {
        if ($data) {
            $this->setId($data->id);
            $this->setCreatedby($data->name);
            $this->setCreatedAt($data->createdAt);
            $this->setContent($data->content);
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getcreatedBy()
    {
        return $this->createdBy;
    }

    public function createdBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }
}
