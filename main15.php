<?php

class Post //親クラス
{
  protected $text;

  public function __construct($text)
  {
    $this->text = $text;
  }

  // final public function show()
  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }

}

class SponsoredPost extends Post //子クラス
{
  private $sponsor;

  public function __construct($text, $sponsor)
  {
    parent::__construct($text);
    $this->sponsor = $sponsor;
  }


  //override
  public function show()
  {
    printf('%s by %s' . PHP_EOL, $this->text, $this->sponsor);
  }
}

$posts = [];
$posts[0] = new Post('hello');
$posts[1] = new Post('hello again');
$posts[2] = new SponsoredPost('hello hello', 'dotinstall');

function processPost(Post $post)
{
  $post->show();
}

foreach ($posts as $post) {
  processPost($post);
}


