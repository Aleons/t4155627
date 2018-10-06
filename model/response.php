<?php
/**
this class to description model response
 * */

class response
{
    private $name; /** name suite */
    private $url; /** url suite */

    /**
     * response constructor.
     * @param $name
     * @param $url
     */
    public function __construct($name, $url)
    {
        $this->name = $name;
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    public function toString()
    {
        return "{" .
            "\"name\":\"" . $this->name ."\",\n".
            "\"price\":\"" . $this->url ."\",\n".
            '}';
    }


}