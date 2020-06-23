<body>
  <h1>記事登録</h1>

  <? if(Session::get_flash('validation_errors')): ?>
    <ul>
      <? foreach(Session::get_flash('validation_errors') as $error):?>
        <li><?= $error ?></li>
      <? endforeach ?>
    </ul>
  <? endif ?>
  
  <div class="wrap-form">
    <?= Form::open('article/create') ?>

      <p><?= Form::label('タイトル') ?></p>
      <?= Form::input('title', null, ['size' => 50]) ?>
        
      <p><?= Form::label('本文') ?></p>
      <?= Form::textarea('body', null, ['rows' => 10, 'cols' => 50]) ?>

      <div>
        <?= Form::submit('submit', '登録') ?>
      </div>
    <?= Form::close(); ?>
  </div>
</body>
