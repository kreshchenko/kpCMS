<?php

namespace App\Model;

use App\Model\Mapper;
use App\Model\NewsEntity;

class NewsMapper extends Mapper
{
    public function getNews()
    {
        $qb = $this->db->createQueryBuilder();
        $qb->select('*')->from('news')->orderBy('id', 'desc');
        $rows = $qb->execute();

        $results = [];
        while ($row = $rows->fetch()){
            $results[] = new NewsEntity($row);
        }

        return $results;
    }

    public function getOneNews($id)
    {
        $qb = $this->db->createQueryBuilder();
        $qb->select('*')
            ->from('news')
            ->where('id = :id')
            ->setParameter('id', $id);
        $rows = $qb->execute();

        $results = [];
        while ($row = $rows->fetch()){
            $results[] = new NewsEntity($row);
        }

        return $results;
    }

    public function save(NewsEntity $news)
    {

    }
}
