<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VolumeModel extends Model
{
    private $IssueID, $IssueNumber, $IssueYear;
    private $Articles = array();
    /**
     * Get the value of IssueID
     */
    public function getIssueID()
    {
        return $this->IssueID;
    }
    /**
     * Set the value of IssueID
     *
     * @return  self
     */
    public function setIssueID($IssueID)
    {
        $this->IssueID = $IssueID;

        return $this;
    }
    /**
     * Get the value of IssueNumber
     */
    public function getIssueNumber()
    {
        return $this->IssueNumber;
    }
    /**
     * Set the value of IssueNumber
     *
     * @return  self
     */
    public function setIssueNumber($IssueNumber)
    {
        $this->IssueNumber = $IssueNumber;

        return $this;
    }
    /**
     * Get the value of IssueYear
     */
    public function getIssueYear()
    {
        return $this->IssueYear;
    }
    /**
     * Set the value of IssueYear
     *
     * @return  self
     */
    public function setIssueYear($IssueYear)
    {
        $this->IssueYear = $IssueYear;

        return $this;
    }
    /**
     * Get the value of Articles
     */
    public function getArticles()
    {
        return $this->Articles;
    }
    /**
     * Set the value of Articles
     *
     * @return  self
     */
    public function setArticles($Articles)
    {
        $this->Articles = $Articles;

        return $this;
    }
    public function jsonSerialize()
    {
        return
            [
                'IssueID'     => $this->getIssueID(),
                'IssueNumber' => $this->getIssueNumber(),
                'IssueYear'   => $this->getIssueYear(),
                'Articles'    => $this->getArticles()
            ];
    }
}
