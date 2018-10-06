<?php
/**
 * Created by PhpStorm.
 * User: aleons
 * Date: 07.10.18
 * Time: 1:10
 */
require_once ("function/request.php");
$r = new request("test");
echo  $r->getResponse();