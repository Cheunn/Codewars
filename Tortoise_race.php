<?php
function race($v1, $v2, $g) {
    // your code
    $hour = 0;
    $min = 0;
    $sec = 0;
    if($v2>$v1){
      $second_to_catch = $g/($v2-$v1)*3600;                        // total seconds to catch
      $hour = floor($second_to_catch / 3600);                      // number of hours before tortoise #2 catches #1
      $min = floor(($second_to_catch - $hour*3600) / 60);          // number of minutes before tortoise #2 catches #1 minus number of hours
      $sec = floor($second_to_catch - ($hour*3600) - ($min*60));   // number of seconds that is resting after taking out hours and minutes
      $rep = [$hour, $min, $sec];
      return $rep;
    }else{
      return NULL;
    }
}

?>