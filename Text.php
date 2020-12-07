<?php


class Text extends Input
{
    private $width;
    private $height;
    private $placeholder;

    public function __construct($type, $name, $value, $placeholder, $width, $height)
    {
        $this->setType($type);
        $this->setValue($value);
        $this->setName($name);
        $this->placeholder = $placeholder;
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $placeholder
     */
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function convertToHtml()
    {
        $str = '';
        $str .= '<input type="' .$this->getType().'" ';
        $str .= 'name="' .$this->getName().'" ';
        $str .= 'value = "'.$this->getValue().'" ';
        $str .= 'placeholder="'.$this->getPlaceholder().'" ';
        $str .= 'style="height: '.$this->getHeight().'px; width: '.$this->getWidth().'px;"/>';

        return $str;
    }
}