
<?php

function names($people){
  $output = $people[0]['name'];

  for ($i = 1; $i < count($people) -1; $i++){

    $output .= ", ".$people[$i]['name'];
  }

  $output .= " & " . $people[count($people) -1 ]['name'];
  return $output;

};



var_dump(names([['name' => 'Bart'],['name' => 'Lisa'],['name' => 'Maggie'],['name' => 'Homer'],['name' => 'Marge']]) === 'Bart, Lisa, Maggie, Homer & Marge');
