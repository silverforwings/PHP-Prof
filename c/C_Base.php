<?php//// Базовый контроллер сайта.//abstract class C_Base extends C_Controller{	protected $title;		// заголовок страницы	protected $content;		// содержание страницы	//	// Конструктор.	////	function __construct()//	{//	}		protected function before()	{		$this->title = 'Название сайта: ';		$this->content = '';	}		//	// Генерация базового шаблонаы	//		public function render()	{		$vars = array('title' => $this->title, 'content' => $this->content, '___MSG_' => getMsg());		$this->Template('v_main.tmpl', $vars);	}	}