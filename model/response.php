<?php
//Это модель ответа. На данный момент она работает только с url (адрес сайта).

class response
{
    private $url; // поле url здесь будет храниться адрес сайта


    public function __construct($url)//конструктор класса. Он вызывается при создании объекта и инициализирует поле
    {
        $this->url = $url;
    }

    public function getUrl()//возвращает значение поля url
    {
        return $this->url;
    }

    public function toString()// возвращает переменную с переносом строки (изначально составлялся json, но я его убрал)
    {
        return $this->url."\n";
    }


}