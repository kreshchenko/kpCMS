<?php

namespace App\Model;

class NewsEntity
{
    protected $id;
    protected $title;
    protected $link;
    protected $description;
    protected $source;
    protected $pub_date;

    public function __construct(array $data)
    {
        // no id if we're creating
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }

        $this->title = $data['name'];
        $this->description = $data['text'];
        $this->pub_date = $data['date'];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getSource()
    {
        return $this->source;
    }

    public function getPubDate()
    {
        return $this->pub_date;
    }
}
