<?php

namespace App\Model;

class SourceEntity
{
    protected $id;
    protected $name;
    protected $text;
    protected $rss_feed_link;
    protected $is_active;

    public function __construct(array $data)
    {
        // no id if we're creating
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }

        $this->name = $data['name'];
        $this->text = $data['source_link'];
        
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSourceLink()
    {
        return $this->text;
    }

    public function getRssFeedLink()
    {
        return $this->rss_feed_link;
    }

    public function isActive()
    {
        return $this->is_active;
    }

}
