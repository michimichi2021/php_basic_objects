<?php

// require('Post.php'); //処理が止まる
// include('Post.php'); //処理が止まらない
// require_once('Post.php');
// include_once('Post.php');

spl_autoload_register(function ($class) {
  require($class . '.php');
});

$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');


foreach ($posts as $post) {
  $post->show();
}


