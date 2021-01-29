<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JournalModel extends Model
{
    private $jName, $jid, $jIssn, $oIssn, $maxVolume, $jAbout, $indexInfo , $apiLink;
    private $news = array();
    private $volumes = array();

    //   Setters
    public function setJName($jName)
    {
        $this->jName = $jName;
    }
    public function setJid($jid)
    {
        $this->jid = $jid;
    }
    public function setJIssn($jIssn)
    {
        $this->jIssn = $jIssn;
    }
    public function setOIssn($oIssn)
    {
        $this->oIssn = $oIssn;
    }
    public function setMaxVolume($maxVolume)
    {
        $this->maxVolume = $maxVolume;
    }
    public function setJAbout($jAbout)
    {
        $this->jAbout = $jAbout;
    }
    public function setIndexInfo($indexInfo)
    {
        $this->indexInfo = $indexInfo;
    }
    public function setNews($news)
    {
        $this->news = $news;
    }
    public function setVolumes($volumes)
    {
        $this->volumes = $volumes;
    }
    public function setApiLink($apiLink)
    {
        $this->apiLink = $apiLink;
    }


    //    Getters 
    public function getJName()
    {
        return $this->jName;
    }
    public function getJid()
    {
        return $this->jid;
    }
    public function getJIssn()
    {
        return $this->jIssn;
    }
    public function getOIssn()
    {
        return $this->oIssn;
    }
    public function getMaxVolume()
    {
        return $this->maxVolume;
    }
    public function getJAbout()
    {
        return $this->jAbout;
    }
    public function getIndexInfo()
    {
        return $this->indexInfo;
    }
    public function getNews()
    {
        return $this->news;
    }
    public function getVolumes()
    {
        return $this->volumes;
    }
    public function getApiLink()
    {
        return $this->apiLink;
    }

    // Json Seralize Class Data for Journal
    public function jsonSerialize()
    {
        return
            [
                'jName'        => $this->getJName(),
                'jid'          => $this->getJid(),
                'jIssn'        => $this->getJIssn(),
                'oIssn'        => $this->getOIssn(),
                'maxVolume'    => $this->getMaxVolume(),
                'jAbout'       => $this->getJAbout(),
                'indexInfo'    => $this->getIndexInfo(),
                '_id'          => $this->getOIssn(),
                'news'         => $this->getNews(),
                'volumes'      => $this->getVolumes()
            ];
    }

    // Json Seralize Class Data for JournalsList
    public function jsonSerializeJournalList()
    {
        return
        [
            'jName'        => $this->getJName(),
            'jid'          => $this->getJid(),
            'jIssn'        => $this->getJIssn(),
            'oIssn'        => $this->getOIssn(),
            '_id'          => $this->getOIssn(),
            'apiLink'      => $this->getApiLink()
        ];
    }    
    
}
