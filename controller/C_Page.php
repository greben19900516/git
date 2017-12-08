<?php

// Конттроллер страницы чтения.
include_once('model/model.php');

class C_Page extends C_Base
{

	// Конструктор.
	public function action_index(){
		$this->title .= ' - Чтение';
		$text = text_get();
		$this->content = $this->template('view/v_index.php', array('text' => $text));
	}
	
	public function action_edit(){
		$this->title .= ' - Редактирование';
		
		if($this->isPost())
		{
			text_set($_POST['text']);
			header('location: index.php');
			exit();
		}
		
		$text = text_get();
		$this->content = $this->template('view/v_edit.php', array('text' => $text));
	}
}
