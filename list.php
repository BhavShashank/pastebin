<?php
$files = scandir('files');
$files = array_diff($files, ['.', '..']);
$viewurl = 'http://'.$_SERVER['SERVER_NAME'].'/view.php';
foreach($files as $file){
    echo '<a href="'.$viewurl.'?id='.$file.'">Click Here To View File #'.$file.'</a><br>';
}