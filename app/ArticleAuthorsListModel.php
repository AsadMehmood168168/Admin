<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleAuthorsListModel extends Model
{
    private $AuthorName;

    /**
     * Get the value of AuthorName
     */
    public function getAuthorName()
    {
        return $this->AuthorName;
    }

    /**
     * Set the value of AuthorName
     *
     * @return  self
     */
    public function setAuthorName($AuthorName)
    {
        $this->AuthorName = $AuthorName;

        return $this;
    }

    public function jsonSerialize()
    {
        return
            [
                'authorName'     => $this->getAuthorName()
            ];
    }
}
