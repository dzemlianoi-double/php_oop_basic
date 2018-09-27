<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div>Hello world</div>
  <?php foreach($data['all_todolists'] as $todolist): ?>
    <div>Todolist <?= $todolist['title'] ?></div>
  <?php endforeach ?>
</body>
</html>