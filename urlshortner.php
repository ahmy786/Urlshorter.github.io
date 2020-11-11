<!DOCTYPE html>
<html>
<head>
	<title>shotner url</title>
	<style type="text/css">
		
		body
		{
			background-image:url(3.jpg);
			background-repeat: no-repeat;
		

		}
        input
        {
        	height: 45px !important;
        	
        }
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="h-100">
	<nav class="d-flex justify-content-between" style="height: 120px;align-items: center">
		<h3 class="text-primary pl-5" style="">URL<span class="text-white">shorter</span></h3>
		<ul class="d-flex text-white mr-4" >
			<li style="list-style-type: none;margin-right: 21px;font-size: 17px">Home</li>
			<li style="list-style-type: none;margin-right: 21px;font-size: 17px">Menu</li>
			<li style="list-style-type: none;margin-right: 21px;font-size: 17px">Service</li>
			<li style="list-style-type: none;margin-right: 21px;font-size: 17px">Aboutus</li>
			<li style="list-style-type: none;margin-right: 21px;font-size: 17px">Contact</li>
		</ul>
	</nav>
	<div>
		<h4 class="text-center " style="color: #f8f9fa;margin-top:153px;text-shadow: 1px 1px 2px black;">Let's do your url shorter by <span class="text-primary">URL</span>shorter</h4>
	</div>
<form action="urlshortner.php" method="post" class="form-group mx-auto mt-3 " style="width:800px">
	<div class="d-flex">

	<input type="text" name="url" placeholder="enter valid URL" class="form-control" autocomplete="off">
	<button name="btno" class="btn bg-primary text-white">Shorten</button>
	<p></p>
	</div>
</form>
</body>
</html>

<?php  
$conn=mysqli_connect("localhost","root","","urlmaker");
if(isset($_POST['btno']))
{
$url=$_POST['url'];

$randstr="abcdkfnfgnk84njejnv48ur39ndnewuf9e29ewqid29eiheudneunwinuew847ifjir44ueded833uewccd8rhhhfbsnsh344hrddndn";
for($i=0;$i<7;$i++)
{

	$index=rand(0,strlen($randstr));
	if($i==0)
	{
      $new=$randstr[$index];
	}
	else
	{
		$new=$new.$randstr[$index];
	}
}

$newurl="http://".$new;

$sql="INSERT into url (url,newurl,count) values('{$url}','{$newurl}',0)";
mysqli_query($conn,$sql);

echo "<a href=".$url." style=position:absolute;bottom:240px;left:600px;><h5>$newurl</h5></a>";

}
?>


