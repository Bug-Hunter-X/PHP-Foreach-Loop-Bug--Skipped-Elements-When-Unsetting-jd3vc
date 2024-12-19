function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'c', 'a'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [2] => c )

//The bug: The foreach loop modifies the array while it's being iterated, leading to unexpected results. When an element is unset, the array keys are re-indexed, causing the loop to skip elements.  Expected output would have been ['b','c'].
