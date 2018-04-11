<?php
//$arr = array(
//    array('id' => '1',
//        'name' => 'YI',
//        array('hobbit' => 'guitar')
//        ),
//    array('id' => '2','name' => 'zhang',array('hobbit' => 'guitar')),
//);
//echo "<pre>".var_dump($arr)."</pre>";
//
//
////foreach ($arr as $key=>$val){
////    foreach ($val as $key1=>$item){
////        echo $key1.'---------'.$item.'</br>';
////    }
////}
//function get($arr){
//    if(is_array($arr)){
//        foreach($arr as $key=>$val){
//            if(is_array($val)){
//                get($val);
//            }else{
//                echo "循环结束";
//            }
//        }
//    }
//
//}
session_start();
$_SESSION['name'] = $_POST['name'];
die("<script>;window.location='header.php'</script>");