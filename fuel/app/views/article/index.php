<body>
  <h1>記事登録</h1>

  <?= isset($error)? $error : null ?>

  <?= Form::open('article/create') ?>
    <div>
      <?= Form::label('タイトル') ?>
      <?= Form::input('title') ?>
    </div>
    <div>
      <?= Form::label('本文') ?>
      <?= Form::text('content') ?>
    </div>
    <?= Form::submit('submit', '登録') ?>
  <?= Form::close(); ?>
</body>
