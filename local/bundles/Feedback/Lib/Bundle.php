<?php
class Bundle extends \TAO\Bundle
{
    public function init()
    {
        parent::init();
        $this->infoblockType("feedback", ["NAME" => "Формы", "SECTIONS" => "N"]);
        $this->infoblockSchema('feedback', 'questions', 'Questions');
    }
}