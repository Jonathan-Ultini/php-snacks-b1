<?php
function isPalindrome($str)
{
  $str = strtolower($str);
  $len = strlen($str);

  for ($i = 0; $i < $len / 2; $i++) {
    if ($str[$i] !== $str[$len - $i - 1]) {
      return false;
    }
  }

  return true;
}
