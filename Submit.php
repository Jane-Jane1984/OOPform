<?php


class Submit extends Input
{
    private $isSubmit;

    public function __construct($type, $name, $value, $isSubmit)
    {
        $this->setType($type);
        $this->setValue($value);
        $this->setName($name);
        $this->isSubmit = $isSubmit;

    }


    public function getSubmitState()
    {
        return $this->isSubmit;
    }

    /**
     * @param bool $isSubmit
     */
    public function setSubmitState($isSubmit = true)
    {
        $this->isSubmit = $isSubmit;
    }

    public function convertToHtml()
    {
        $type = $this->isSubmit ? 'submit' : 'button';
        $str = '';
        $str .= '<input type="' . $type . '" ';
        $str .= 'name="' . $this->getName().'" ';
        $str .= 'value="' . $this->getValue().'"/>';

        return $str;

    }


}