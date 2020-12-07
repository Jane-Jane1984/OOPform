<?php


class Checkbox extends Input
{
    public function __construct($type, $name, $value)
    {
        $this->setType($type);
        $this->setValue($value);
        $this->setName($name);
    }

    public function convertToHtml()
    {

        $str = '';
        $str .= '<input type = "'.$this->getType().'" ';
        $str .= 'name="' . $this->getName().'" ';
        $str .= 'value="' . $this->getValue().'"/>';

        return $str;
    }

}