<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class APIModel extends Model
{
    private $url = "http://localhost:3000/";
    public function insertData($obj, $content)
    {
        $this->url = $this->url . $obj;
        $curl = curl_init($this->url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $content);
        $json_response = curl_exec($curl);
        print_r($json_response);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        return $status;
    }
    public function getData($obj)
    {
        $this->url = $this->url . $obj;
        $curl = curl_init($this->url);
        curl_setopt($curl, CURLOPT_URL, $this->url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $curl_data = curl_exec($curl);
        curl_close($curl);
        $data = json_decode($curl_data);
        return $data;
    }
}
