
<?php



function __construct(Connection $connection)
{



$host = "localhost";
$dbusernam= "root";
$dbpassword = "";
$dbname = "db";
$conn = new mysqli($host, $dbusernam, $dbpassword,$dbname);



if(isset($_POST['right']))
{



$stmt=$conn->preper("insert into direction(direction) values('r')");
 $stmt->execute();

  echo"right";

}
if(isset($_POST['left']))
{

$stmt=$conn->preper("insert into direction(direction) values('l')");
$stmt->execute();
	
 echo"left";
}

elseif(isset($_POST['bottom']))
{
 $stmt=$conn->preper("insert into direction(direction) values('b')");
$stmt->execute();
	
echo"bottom!";
}
elseif(isset($_POST['top']))
{

$stmt=$conn->preper("insert into direction(direction) values('t')");
$stmt->execute();
	
echo"top!";



}
elseif(isset($_POST['stop']))
{

     $stmt=$conn->prepare("insert into direction(direction) values('s')");
     $stmt->execute();
	
echo"stop!";

	}
else
{
echo "try ";
     }
$this->connection = $connection->connection;

}



 

?>


