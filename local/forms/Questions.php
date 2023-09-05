<?php

namespace App\Form;
class Questions extends \TAO\Form
{
    public function options()
	{
		return array(
			'infoblock' => 'Questions',
			'layout' => 'feedback',
			'show_labels' => true,
			'show_placeholders' => true,
			'submit_text' => 'Оставить сообщение',
			'mail_event' => 'myglavniyacount@gmail.com',
		);
	}
	public function required()
    {
        return array(
            'name' => 'Ведите ваше имя!',
            'email' => 'Введите ваш E-mail!',
			'thems' => 'Выберите тему!',
			'message' => 'Напишите сообщение!',
        );
    }
	public function styles()
	{

	}

	public function properties()
	{
		$props = parent::properties(); //получаем родительские свойства
		unset($props['answer']); //отключаем ненужные свойства на форме
		return $props;
	}
}