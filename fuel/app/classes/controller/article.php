<?php

class Controller_Article extends Controller_Base
{
	public function action_index()
	{
    $data = ['name' => 'test'];
    $this->template->body = View::forge('article/index', $data);
  }

	public function action_new()
	{
    $this->template->body = View::forge('article/new');
  }

  public function action_create()
	{
    $params = $this->permit_params();
    $article = Model_Article::forge($params);

    if(!$article->validates()) {
      $errors = $article->validation()->error();
      foreach($errors as $error) {
        $error_messages[] = $error->get_message();
      }
      Session::set_flash('validation_errors', $error_messages);

      $this->template->body = View::forge('article/new');
      return;
    }

    try {
      $article->save();
      Session::set_flash('success', 'successfully saved.');
    } catch (Exception $ex) {
      Log::error('fail to save');
    }
    
    $this->template->body = View::forge('article/new');
  }

  private function permit_params()
  {
    $inputs = Input::post();
    return array_filter($inputs, function($i) {
      in_array($i, ['title', 'content']);
    });
  }
}