<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VolumeModel extends Model
{
    private $volumeID, $volumeNumber, $volumeYear;
    private $articles = array();

    //   Setters
    public function setVolumeID($volumeID)
    {
        $this->volumeID = $volumeID;
    }
    public function setVolumeNumber($volumeNumber)
    {
        $this->volumeNumber = $volumeNumber;
    }
    public function setVolumeYear($volumeYear)
    {
        $this->volumeYear = $volumeYear;
    }
    public function setArticles($articles)
    {
        $this->articles = $articles;
    }

    //   Getters 
    public function getVolumeID()
    {
        return $this->volumeID;
    }
    public function getVolumeNumber()
    {
        return $this->volumeNumber;
    }
    public function getVolumeYear()
    {
        return $this->volumeYear;
    }
    public function getArticles()
    {
        return $this->articles;
    }

    //   Json Seralize Class Data
    public function jsonSerialize()
    {
        return
            [
                'volumeID'     => $this->getVolumeID(),
                'volumeNumber' => $this->getVolumeNumber(),
                'volumeYear'   => $this->getVolumeYear(),
                'articles'     => $this->getArticles()
            ];
    }
}
