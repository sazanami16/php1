<?php 
$name = 'tanaka';

  // $text = <<<'EOT' ← now document 変数を展開しない記述(変数を埋め込むことはできない)

  // $text = <<<"EOT" ← here document 変数を展開する記述(変数を埋め込むことができる)
  // $text = <<<EOT ← here document 変数を展開する記述(変数を埋め込むことができる)
  
  $text = <<<EOT 

  hello! $name
   this is long!
  text! 
  EOT;

echo $text;
