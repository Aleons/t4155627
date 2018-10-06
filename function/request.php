<?php
/**
 * Created by PhpStorm.
 * User: aleons
 * Date: 07.10.18
 * Time: 0:38
 */

class request
{
    private $request;

    /**
     * request constructor.
     * @param $request
     */
    public function __construct($request)
    {
        $this->request = $request;
    }


    private function listItems(){
        $insert = str_replace(" ", "%20", $this->request);
        return "https://yandex.ru/search/?text=".$insert."&lr=2";
    }


    public function getResponse(){
        return $this->listItems();
    }

}