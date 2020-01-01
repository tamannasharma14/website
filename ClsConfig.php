<?php
class ClsConfig
{
public $con;
function ClsConfig()
{
$host='localhost';
$username='root';
$password='';
$dbname='db2';
$this->con=mysqli_connect($host,$username,$password,$dbname);

}
}
?>