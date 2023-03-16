<?php
$random = rand(0, 10);
if ($random === 0) {
  echo $random;
  echo 'あたりです';
} else {
  echo $random;
    echo 'はずれです';
  }
?>