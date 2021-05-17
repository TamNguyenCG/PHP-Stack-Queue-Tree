<?php
namespace Priority;

class Node
{
    public array $value = [];
    public mixed $link;

    public function __construct($name,$code)
    {
        $this->value['name'] = $name;
        $this->value['code'] = $code;

    }

}