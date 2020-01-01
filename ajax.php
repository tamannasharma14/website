<?php
session_start();
$postdata=file_get_contents("php://input");
$request=json_decode($postdata);

include 'ClsConfig.php';
include 'registercls.php';
$obj=new register();
if($request->func=='select1')
{
	$retVal=$obj->SelectData2();
echo json_encode($retVal);
}
else if($request->func=='del')
     {  
     $obj->id=$request->id;
     $gval=$obj->DeleteData();
	echo $gval;
}
else if($request->func=='edit')
{
     $obj->id=$request->id;
	 $retval=$obj->EditData();
	echo json_encode($retval);
}
if($request->func=='save3')
{
	$obj->id=$request->id;
	$obj->name=$request->name;
	$retVal=$obj->update_employee();
	echo  $retVal;
}
?>