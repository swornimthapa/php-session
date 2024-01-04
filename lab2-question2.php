<!-- If you have the following array, how do you extract the value 3
from the array?
$a = array(
array(
0,
1
),
array(
2,
array(
3
)
)
); -->

<?php
$a = array(array(0, 1), array(2, array(3)));
echo '<pre>';
print_r($a);
echo '</pre>';

echo "The value is extracted as ".'$a[1][1][0] : '.$a[1][1][0];

?>