<?php
$array1 = array(
    array( "uregisterDate" => '2013-04-03', "total" => 4 ),
    array( "uregisterDate" => '2013-04-04', "total" => 4 ),
    array( "uregisterDate" => '2013-04-05', "total" => 3 )
   );

$array2 = array(
    array( "uregisterDate" => '2013-04-05', "totalFailed" => 2),
    array( "uregisterDate" => '2013-04-03', "totalFailed" => 3 )
   );

// function merge_array_common_key($a1, $a2, $Ckey) {
//     $merge = array_merge($a1,$a2);
//     $keys = array();
//     foreach ($merge as $key => $value) {

//     	//echo "<pre>";print_r($value);
//         if(isset($keys[$value[$Ckey]])){
//             $merge[$keys[$value[$Ckey]]] += $value;
//             unset($merge[$key]);
//             continue;
//         }
//         $keys[$value[$Ckey]] = $key;
//     }
//     return $merge;
// }

// $test = merge_array_common_key($array1, $array2, 'uregisterDate');

// echo "<pre>";print_r($test);
function combine( $key, $array1, $array2 )
{
    $args = func_get_args();
    array_shift( $args );
    $return = $args[0];
    $arrays = array_slice( $args, 1 );

    foreach ( $arrays as $array ) {
        foreach ( $array as $arrayValue ) {
            $match_found = false;
            foreach ( $return as $i => $value ) {
                if ( isset( $value[$key] ) && isset( $arrayValue[$key] ) && $value[$key] == $arrayValue[$key] ) {
                    $return[$i] = array_merge( $value, $arrayValue );
                    $match_found = true;
                }
            }

            if ( !$match_found ) {
                $return[] = $arrayValue;
            }
        }
    }

    return $return;
}

$array = combine( "uregisterDate", $array1, $array2 );
echo "<pre>";print_r($array);




?>
<input type="emoji">