<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleModel extends Model
{
    private $pageNo, $articleDOI, $articleID, $articleType, $articleTitle, $affiliation, $abstract, $submittedDate,
        $acceptedDate, $publishedDate;
    private $keyWords = array();
    private $authors  = array();

    //   Setters
    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
    }
    public function setArticleDOI($volumeID)
    {

        $exculeRandom   = substr($volumeID, 0, -4);

        // $this->articleDOI = $articleDOI;
    }
    public function setArticleID($articleID)
    {
        $this->articleID = $articleID;
    }
    public function setArticleType($articleType)
    {
        $this->articleType = $articleType;
    }
    public function setArticleTitle($articleTitle)
    {
        $this->articleTitle = $articleTitle;
    }
    public function setAffiliation($affiliation)
    {
        $this->affiliation = $affiliation;
    }
    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;
    }
    public function setSubmittedDate($submittedDate)
    {
        $this->submittedDate = $submittedDate;
    }
    public function setAcceptedDate($acceptedDate)
    {
        $this->acceptedDate = $acceptedDate;
    }
    public function setPublishedDate($publishedDate)
    {
        $this->publishedDate = $publishedDate;
    }
    public function setKeyWords($keyWords)
    {
        $this->keyWords = $keyWords;
    }
    public function setAuthors($authors)
    {
        $this->authors = $authors;
    }

    //    Getters 
    public function getPageNo()
    {
        return $this->pageNo;
    }
    public function getArticleDOI()
    {
        return $this->articleDOI;
    }
    public function getArticleID()
    {
        return $this->articleID;
    }
    public function getArticleType()
    {
        return $this->articleType;
    }
    public function getArticleTitle()
    {
        return $this->articleTitle;
    }
    public function getAffiliation()
    {
        return $this->affiliation;
    }
    public function getAbstract()
    {
        return $this->abstract;
    }
    public function getSubmittedDate()
    {
        return $this->submittedDate;
    }
    public function getAcceptedDate()
    {
        return $this->acceptedDate;
    }
    public function getPublishedDate()
    {
        return $this->publishedDate;
    }
    public function getKeyWords()
    {
        return $this->keyWords;
    }
    public function getAuthors()
    {
        return $this->authors;
    }

    // Json Seralize Class Data
    public function jsonSerialize()
    {
        return
            [
                "pageNo"        => $this->getPageNo(),
                "articleDOI"    => $this->getArticleDOI(),
                "articleID"     => $this->getArticleID(),
                "articleType"   => $this->getArticleType(),
                "articleTitle"  => $this->getArticleTitle(),
                "affiliation"   => $this->getAffiliation(),
                "abstract"      => $this->getAbstract(),
                "submittedDate" => $this->getSubmittedDate(),
                "acceptedDate"  => $this->getAcceptedDate(),
                "publishedDate" => $this->getPublishedDate(),
                "keyWords"      => $this->getKeyWords(),
                "authors"       => $this->getAuthors()
            ];
    }
}
