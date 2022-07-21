<?php 


$txtFile = fopen("php/ytlinks.txt", "r") or die ("Can't open file'");
$strTxt = fread($txtFile, filesize("php/ytlinks.txt"));
$data =  explode("\n",$strTxt);

$arr_;
$l=0;
foreach($data as $fline){
    $j=0;//indexRow
    $indexV = explode(" | ",$fline);
    foreach($indexV as $insertD){
        $arr_[$l][$j]=$insertD;
        $j++;
    }
    $l++; //indexCol 
}
fclose($txtFile);
?>