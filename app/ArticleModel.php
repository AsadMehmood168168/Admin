<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleModel extends Model
{
    private $PageNo, $ArticleDOI, $ArticleType, $ArticleTitle, $Authors, $Affiliation, $Abstract, $SubmittedDate,
        $AcceptedDate, $PublishedDate, $ArticleID, $PDFPath, $HTMLLink;
    private $KeyWords = array();
    private $MetaAuthors = array();

    /**
     * Get the value of PageNo
     */
    public function getPageNo()
    {
        return $this->PageNo;
    }

    /**
     * Set the value of PageNo
     *
     * @return  self
     */
    public function setPageNo($PageNo)
    {
        $this->PageNo = $PageNo;

        return $this;
    }

    /**
     * Get the value of ArticleDOI
     */
    public function getArticleDOI()
    {
        return $this->ArticleDOI;
    }

    /**
     * Set the value of ArticleDOI
     *
     * @return  self
     */
    public function setArticleDOI($ArticleDOI)
    {
        $this->ArticleDOI = $ArticleDOI;

        return $this;
    }

    /**
     * Get the value of ArticleType
     */
    public function getArticleType()
    {
        return $this->ArticleType;
    }

    /**
     * Set the value of ArticleType
     *
     * @return  self
     */
    public function setArticleType($ArticleType)
    {
        $this->ArticleType = $ArticleType;

        return $this;
    }

    /**
     * Get the value of ArticleTitle
     */
    public function getArticleTitle()
    {
        return $this->ArticleTitle;
    }

    /**
     * Set the value of ArticleTitle
     *
     * @return  self
     */
    public function setArticleTitle($ArticleTitle)
    {
        $this->ArticleTitle = $ArticleTitle;

        return $this;
    }

    /**
     * Get the value of Authors
     */
    public function getAuthors()
    {
        return $this->Authors;
    }

    /**
     * Set the value of Authors
     *
     * @return  self
     */
    public function setAuthors($Authors)
    {
        $this->Authors = $Authors;

        return $this;
    }

    /**
     * Get the value of Affiliation
     */
    public function getAffiliation()
    {
        return $this->Affiliation;
    }

    /**
     * Set the value of Affiliation
     *
     * @return  self
     */
    public function setAffiliation($Affiliation)
    {
        $this->Affiliation = $Affiliation;

        return $this;
    }

    /**
     * Get the value of Abstract
     */
    public function getAbstract()
    {
        return $this->Abstract;
    }

    /**
     * Set the value of Abstract
     *
     * @return  self
     */
    public function setAbstract($Abstract)
    {
        $this->Abstract = $Abstract;

        return $this;
    }

    /**
     * Get the value of SubmittedDate
     */
    public function getSubmittedDate()
    {
        return $this->SubmittedDate;
    }

    /**
     * Set the value of SubmittedDate
     *
     * @return  self
     */
    public function setSubmittedDate($SubmittedDate)
    {
        $this->SubmittedDate = $SubmittedDate;

        return $this;
    }

    /**
     * Get the value of AcceptedDate
     */
    public function getAcceptedDate()
    {
        return $this->AcceptedDate;
    }

    /**
     * Set the value of AcceptedDate
     *
     * @return  self
     */
    public function setAcceptedDate($AcceptedDate)
    {
        $this->AcceptedDate = $AcceptedDate;

        return $this;
    }

    /**
     * Get the value of PublishedDate
     */
    public function getPublishedDate()
    {
        return $this->PublishedDate;
    }

    /**
     * Set the value of PublishedDate
     *
     * @return  self
     */
    public function setPublishedDate($PublishedDate)
    {
        $this->PublishedDate = $PublishedDate;

        return $this;
    }

    /**
     * Get the value of ArticleID
     */
    public function getArticleID()
    {
        return $this->ArticleID;
    }

    /**
     * Set the value of ArticleID
     *
     * @return  self
     */
    public function setArticleID($ArticleID)
    {
        $this->ArticleID = $ArticleID;

        return $this;
    }

    /**
     * Get the value of PDFPath
     */
    public function getPDFPath()
    {
        return $this->PDFPath;
    }

    /**
     * Set the value of PDFPath
     *
     * @return  self
     */
    public function setPDFPath($PDFPath)
    {
        $this->PDFPath = $PDFPath;

        return $this;
    }

    /**
     * Get the value of HTMLLink
     */
    public function getHTMLLink()
    {
        return $this->HTMLLink;
    }

    /**
     * Set the value of HTMLLink
     *
     * @return  self
     */
    public function setHTMLLink($HTMLLink)
    {
        $this->HTMLLink = $HTMLLink;

        return $this;
    }

    /**
     * Get the value of KeyWords
     */
    public function getKeyWords()
    {
        return $this->KeyWords;
    }

    /**
     * Set the value of KeyWords
     *
     * @return  self
     */
    public function setKeyWords($KeyWords)
    {
        $this->KeyWords = $KeyWords;

        return $this;
    }

    /**
     * Get the value of MetaAuthors
     */
    public function getMetaAuthors()
    {
        return $this->MetaAuthors;
    }

    /**
     * Set the value of MetaAuthors
     *
     * @return  self
     */
    public function setMetaAuthors($MetaAuthors)
    {
        $this->MetaAuthors = $MetaAuthors;

        return $this;
    }

    public function jsonSerialize()
    {
        return
            [
                'PageNo'          => $this->getPageNo(),
                'ArticleDOI'      => $this->getArticleDOI(),
                'ArticleType'     => $this->getArticleType(),
                'ArticleTitle'    => $this->getArticleTitle(),
                'Authors'         => $this->getAuthors(),
                'Affiliation'     => $this->getAffiliation(),
                'Abstract'        => $this->getAbstract(),
                'SubmittedDate'   => $this->getSubmittedDate(),
                'AcceptedDate'    => $this->getAcceptedDate(),
                'PublishedDate'   => $this->getPublishedDate(),
                'ArticleID'       => $this->getArticleID(),
                'PDFPath'         => $this->getPDFPath(),
                'HTMLLink'        => $this->getHTMLLink(),
                'KeyWords'        => $this->getKeyWords(),
                'MetaAuthors'     => $this->getMetaAuthors()
            ];
    }
}
