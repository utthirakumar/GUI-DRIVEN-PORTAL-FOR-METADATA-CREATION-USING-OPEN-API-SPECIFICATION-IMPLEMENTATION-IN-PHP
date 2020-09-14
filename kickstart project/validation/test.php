<?php

$jsonString = file_get_contents("php://input");
// header('Content-Type: application/json');

 $create = "../jsondata/data.json";

function json($dats){
 $data=json_encode($dats);
        echo  ($data);
}

if(file_exists($create))
 {
    $curent_Data= file_get_contents($create);

    $array_data[]=json_decode($curent_Data,true);
   
    $cudata=json_decode($jsonString,true);
    foreach($cudata as $key => $value){
      $newdata= $value;
  }
foreach ($array_data as $key => $value) {
   foreach ($value as $key => $values) {
$len=$values;
   }
}
$length= Sizeof($len);
$array_data[0]["kick start collection"][$length]=$cudata;
  $final_data=stripslashes(json_encode($array_data));
  $final_data = trim($final_data, "[]");
//   print_r($final_data);
   if(file_put_contents($create,$final_data)){
    json("append new data");
   }

 }else
 {
   
    $myfile = fopen($create, "w") or die($error="Unable to open file!");
    if($error){
      json("Unable to open file!");
    }

    $cudata=json_decode($jsonString);
    foreach($cudata as $key => $value){
            $newdata= $value;
        }
    $new=array(
             "ossKickStartMetadataVersion"=>"1.0",
                "initialreleaseDate"=>"2019-09-19",
                "updateSequence"=>"2",
                "updateDate"=>"2019-10-16",
                "description"=>"Metadata collection of Kickstart ISOs created for various user departments by NIC",
                "preparedBy"=>"Open Technology Group, NIC",
                "kick start collection"=>$newdata
            );
         $final_data=stripslashes(json_encode($new));
             if (fwrite($myfile, $final_data)){
              json("new file created & data inserted");
             }
             fclose($myfile);
}



?>