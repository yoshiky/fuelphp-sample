<?php

class Controller_Base extends Controller_Template
{
	public function before()
	{
    parent::before();
    $this->template->header = View::forge('common/header');
    $this->template->footer = View::forge('common/footer');
  }

}