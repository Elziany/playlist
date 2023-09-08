<?php
function uploadFileToFireBase($file,$type)
{
   
    $expiredAt=strtotime('20240901');
    $newFile=$file->getClientOriginalName();
    $localfolder=public_path('firebase_temp')."/".$type."/";
    $file->move($localfolder,$newFile);
    $uploadfile=fopen($localfolder.$newFile,'r');
    app('firebase.storage')->getBucket()->upload($uploadfile,["name"=>$type.'/'.$newFile]);
    unlink($localfolder.$newFile);
    $urlRef=app('firebase.storage')->getBucket()->object($type."/".$newFile);
    $url=$urlRef->signedurl($expiredAt);

    return $url;
}




