<?php
class register extends ClsConfig
{
	public $id='';
function SelectData2()
{
	$qry="select * from tb1_bank";
	$res=mysqli_query($this->con,$qry);
	$record=[];
	$count='';
	while($row=mysqli_fetch_assoc($res))
	{
		$record[]=$row;
	}
	return $record;
}
function DeleteData()
{
	if($this->con)
	{
		
$qry="delete from tb1_bank where id='$this->id'";
		$chk=mysqli_query($this->con,$qry);
		if($chk)
		{
			
	    return 1;
		}
		
		else
		{
			
		return 0;
		}
	}
}
function EditData()
{
	$qry="select * from tb1_bank where id=$this->id";
	$res=mysqli_query($this->con,$qry);
	$record=[];
	if($row=mysqli_fetch_assoc($res))
	{
		$record=$row;
	}
	return $record;
}
function update_employee()
{
 $qry1="UPDATE tb1_bank SET name='$this->name' WHERE id='$this->id'";
 $res=mysqli_query($this->con,$qry1);
 if($res)
   {
	 return 1;
   }
 else
   {
	 return 0;
   }
}
}
?>