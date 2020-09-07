<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleKeyWordsModel extends Model
{
    private $keyWordBody;

    /**
     * Get the value of keyWordBody
     */
    public function getKeyWordBody()
    {
        return $this->keyWordBody;
    }

    /**
     * Set the value of keyWordBody
     *
     * @return  self
     */
    public function setKeyWordBody($keyWordBody)
    {
        $this->keyWordBody = $keyWordBody;

        return $this;
    }
    public function jsonSerialize()
    {
        return
            [
                'keyWordBody'     => $this->getKeyWordBody()
            ];
    }
}
