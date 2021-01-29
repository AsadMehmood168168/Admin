<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class APIModel extends Model
{
    private $url;
    public function getUrl()
    {
        return $this->url;
    }
    public function setUrl($url)
    {
        $this->url = $url;
    }
    public function insertData($URL,$content)
    {
        $this->url = $this->url . $URL;
        $curl = curl_init($this->url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
        curl_exec($curl);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        return $status;
    }
    public function getData($URL)
    {
        $this->url = $this->url.$URL;
        $curl = curl_init($this->url);
        curl_setopt($curl, CURLOPT_URL, $this->url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $curl_data = curl_exec($curl);
        curl_close($curl);
        $data = json_decode($curl_data);
        return $data;
    }
    
}
