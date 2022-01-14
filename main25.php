<?php

// use Dotinstall\MyPHPApp as MyPHPApp;
use Dotinstall\MyPHPApp;

require('Post.php'); //処理が止まる
// include('Post.php'); //処理が止まらない
// require_once('Post.php');
// include_once('Post.php');
class Post {}
// $posts[0] = new Dotinstall\MyPHPApp\Post('hello');
// $posts[1] = new Dotinstall\MyPHPApp\Post('hello again');
$posts[0] = new MyPHPApp\Post('hello');
$posts[1] = new MyPHPApp\Post('hello again');


foreach ($posts as $post) {
  $post->show();
}
