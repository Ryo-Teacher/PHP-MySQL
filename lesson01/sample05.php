<?php
  $today = new DateTime();
  $today->setTimezone(new DateTimeZone('Asia/Tokyo'));
  echo '現在は、 '. $today->format('G時 i分 s秒'). ' です';
  ?>
<!-- PHPにはオブジェクト思考言語と、構造かプログラミング言語の両方が使える（PHP自体が古い言語のため） -->
<!-- メソッドを使う時には->の記号が必要 -->
