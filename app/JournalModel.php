<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JournalModel extends Model
{
    private $periodicalid, $JNAME, $JID, $IMGA, $JISSN, $OISSN, $ISSUE, $JABOUT, $INFOJ, $Arch, $CoverP, $EBML, $JInfoPdf;
    private $News = array();
    private $Volumes = array();

    /**
     * Get the value of periodicalid
     */
    public function getPeriodicalid()
    {
        return $this->periodicalid;
    }

    /**
     * Set the value of periodicalid
     *
     * @return  self
     */
    public function setPeriodicalid($periodicalid)
    {
        $this->periodicalid = $periodicalid;

        return $this;
    }

    /**
     * Get the value of JNAME
     */
    public function getJNAME()
    {
        return $this->JNAME;
    }

    /**
     * Set the value of JNAME
     *
     * @return  self
     */
    public function setJNAME($JNAME)
    {
        $this->JNAME = $JNAME;

        return $this;
    }

    /**
     * Get the value of JID
     */
    public function getJID()
    {
        return $this->JID;
    }

    /**
     * Set the value of JID
     *
     * @return  self
     */
    public function setJID($JID)
    {
        $this->JID = $JID;

        return $this;
    }

    /**
     * Get the value of IMGA
     */
    public function getIMGA()
    {
        return $this->IMGA;
    }

    /**
     * Set the value of IMGA
     *
     * @return  self
     */
    public function setIMGA($IMGA)
    {
        $this->IMGA = $IMGA;

        return $this;
    }

    /**
     * Get the value of JISSN
     */
    public function getJISSN()
    {
        return $this->JISSN;
    }

    /**
     * Set the value of JISSN
     *
     * @return  self
     */
    public function setJISSN($JISSN)
    {
        $this->JISSN = $JISSN;

        return $this;
    }

    /**
     * Get the value of OISSN
     */
    public function getOISSN()
    {
        return $this->OISSN;
    }

    /**
     * Set the value of OISSN
     *
     * @return  self
     */
    public function setOISSN($OISSN)
    {
        $this->OISSN = $OISSN;

        return $this;
    }

    /**
     * Get the value of ISSUE
     */
    public function getISSUE()
    {
        return $this->ISSUE;
    }

    /**
     * Set the value of ISSUE
     *
     * @return  self
     */
    public function setISSUE($ISSUE)
    {
        $this->ISSUE = $ISSUE;

        return $this;
    }

    /**
     * Get the value of JABOUT
     */
    public function getJABOUT()
    {
        return $this->JABOUT;
    }

    /**
     * Set the value of JABOUT
     *
     * @return  self
     */
    public function setJABOUT($JABOUT)
    {
        $this->JABOUT = $JABOUT;

        return $this;
    }

    /**
     * Get the value of INFOJ
     */
    public function getINFOJ()
    {
        return $this->INFOJ;
    }

    /**
     * Set the value of INFOJ
     *
     * @return  self
     */
    public function setINFOJ($INFOJ)
    {
        $this->INFOJ = $INFOJ;

        return $this;
    }

    /**
     * Get the value of Arch
     */
    public function getArch()
    {
        return $this->Arch;
    }

    /**
     * Set the value of Arch
     *
     * @return  self
     */
    public function setArch($Arch)
    {
        $this->Arch = $Arch;

        return $this;
    }

    /**
     * Get the value of CoverP
     */
    public function getCoverP()
    {
        return $this->CoverP;
    }

    /**
     * Set the value of CoverP
     *
     * @return  self
     */
    public function setCoverP($CoverP)
    {
        $this->CoverP = $CoverP;

        return $this;
    }

    /**
     * Get the value of EBML
     */
    public function getEBML()
    {
        return $this->EBML;
    }

    /**
     * Set the value of EBML
     *
     * @return  self
     */
    public function setEBML($EBML)
    {
        $this->EBML = $EBML;

        return $this;
    }

    /**
     * Get the value of JInfoPdf
     */
    public function getJInfoPdf()
    {
        return $this->JInfoPdf;
    }

    /**
     * Set the value of JInfoPdf
     *
     * @return  self
     */
    public function setJInfoPdf($JInfoPdf)
    {
        $this->JInfoPdf = $JInfoPdf;

        return $this;
    }

    /**
     * Get the value of News
     */
    public function getNews()
    {
        return $this->News;
    }

    /**
     * Set the value of News
     *
     * @return  self
     */
    public function setNews($News)
    {
        $this->News = $News;

        return $this;
    }

    /**
     * Get the value of Volumes
     */
    public function getVolumes()
    {
        return $this->Volumes;
    }

    /**
     * Set the value of Volumes
     *
     * @return  self
     */
    public function setVolumes($Volumes)
    {
        $this->Volumes = $Volumes;

        return $this;
    }
    public function jsonSerialize()
    {
        return
            [
                'periodicalid' => $this->getPeriodicalid(),
                'JNAME'        => $this->getJNAME(),
                'JID'          => $this->getJID(),
                'IMGA'         => $this->getIMGA(),
                'JISSN'        => $this->getJISSN(),
                'OISSN'        => $this->getOISSN(),
                'ISSUE'        => $this->getISSUE(),
                'JABOUT'       => $this->getJABOUT(),
                'INFOJ'        => $this->getINFOJ(),
                'Arch'         => $this->getArch(),
                'CoverP'       => $this->getCoverP(),
                'EBML'         => $this->getEBML(),
                'JInfoPdf'     => $this->getJInfoPdf(),
                'News'         => $this->getNews(),
                'Volumes'      => $this->getVolumes()
            ];
    }
}
