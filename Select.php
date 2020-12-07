<?php


class Select

{
    private $arItem = [];
    private $name;

    public function __construct($name, $items = [])
    {
        $this->name = $name;
        $this->arItem = $items;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function convertToHtml()
    {

        $str = '';
        $str .= '<select ';
        $str .= 'name="' . $this->name . '">';


        foreach ($this->arItem as $item) {
            $str .= '<option>'.$item.'</option>';
        }

        $str .= '</select>';

        return $str;
    }

}
