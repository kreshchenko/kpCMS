<?php

namespace App\Model;

use App\Model\Mapper;
use App\Model\SourceEntity;

class SourceMapper extends Mapper
{
    public function getSources()
    {
        // $stmt = $this->db->query("SELECT * FROM news ORDER BY id DESC LIMIT 50");
        $qb = $this->db->createQueryBuilder();
        $qb->select('*')->from('news')->orderBy('id', 'desc');
        $rows = $qb->execute();

        $results = [];
        while ($row = $rows->fetch()) {
            $results[] = new SourceEntity($row);
        }

        return $results;
    }

    public function getSourceById($id)
    {
        // $stmt = $this->db->query("SELECT * FROM news ORDER BY id DESC LIMIT 50");
        $qb = $this->db->createQueryBuilder();
        $qb->select('*')
            ->from('sources')
            ->where('id = :id')
            ->setParameter('id', $id);
        $row = $qb->execute();

        return $row->fetch();
    }

    public function deleteOneNews($id)
    {
        // $stmt = $this->db->query("SELECT * FROM news ORDER BY id DESC LIMIT 50");
        $qb = $this->db->createQueryBuilder();
        $qb->delete('news')
            ->where('id = :id')
            ->setParameter('id', $id);
        $row = $qb->execute();

        return $row;
    }

    public function save(SourceEntity $source)
    {
        $qb = $this->db->createQueryBuilder();

        if ($source->getId()) {
            $qb->update('news')
                ->set('name', '?')
                ->set('text', '?');
        } else {
            $qb->insert('news')
                ->setValue('name', '?')
                ->setValue('text', '?');
        }

        $qb->setParameter(0, $source->getName())
            ->setParameter(1, $source->getSourceLink());//return text

        if ($source->getId()) {
            $qb->where('id = ' . $source->getId());
        }

        $result = $qb->execute();

        if (! $result) {
            throw new \Exception("Can not save SourceEntity");
        }

        return $result;
    }
}
