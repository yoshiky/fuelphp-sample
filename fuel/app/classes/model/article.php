<?php

class Model_Article extends Model_Crud
{

  protected static $_table_name = 'articles';

	protected static $_primary_key = 'id';

	protected static $_rules = [
		'title' => 'required|max_length[30]',
		'body' => 'required'
	];

}
