<?php
$number = 7;

if ($number > 10) {
  echo "{$number}は10よりも大きい数字です。\n";
}
elseif ($number >= 5) {
  echo "{$number}は5以上ですが、10以下です。\n";
}
else {
  echo "{$number}は5未満です。\n";
}