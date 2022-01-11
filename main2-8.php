<?php
// クラス
class Post
{
  // プロパティ
  private $text;
  private $likes = 0;

  // public function __construct($textFromNew, $likesFromNew)
  // {
  //   $this->text = $textFromNew;
  //   $this->likes = $likesFromNew;
  // }

  public function __construct($text)
  {
    $this->text = $text;
  }
  // メソッド
  public function show()
  {
    printf('%s (%d)' . PHP_EOL, $this->text, $this->likes);
  }

  public function like()
  {
    $this->likes++;

    if($this->likes > 100){
      $this->likes = 100;
    }
  }
}

$posts = [];
// $posts[0] = ['text' => 'hello', 'likes' => 0];
$posts[0] = new Post('hello'); // インスタンス
// $posts[0]->text = 'hello';
// $posts[0]->likes = 0;
$posts[1] = new Post('hello again');
// $posts[0]->likes++;


// $posts[1] = ['text' => 'hello again', 'likes' => 0];
// $posts[1] -> text = 'hello again';
// $posts[1] -> likes = 0;

// print_r($posts);

// function show($post)
// {
//   printf('%s (%d)' . PHP_EOL, $post['text'], $post['likes']);
// }

// show($posts[0]);
// show($posts[1]);
$posts[0]->like();
$posts[0]->show();
$posts[1]->show();