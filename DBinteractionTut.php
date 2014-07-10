<html>
 <head>
  <title>User management Test</title>
 </head>
 <body>
 <span>
  <h3><font color="green">User info</font>

<table>
  <tr><td>John Smith</td></tr>
  <tr><td>Wendy Sarr</td></tr>
  <tr><td>Kayla Gail</td></tr>
</table></span>
 <?php
$query = 'Insert into subscriber '.
		 '(`FirstName`, `LastName`, `Country`) '.
		 'Values ("Wendy", "Sarr", "USA")';//, ("Kayla","Gail","Brasil")';


var_dump ($query);			 
// Create connection
$con=mysql_connect("localhost","DemoUser","");

// Check connection
@mysql_select_db("test") or die( "Unable to select database");
//@mysql_select_db("mysql") or die( "Unable to select database");
	 
	 mysql_query($query);
	 $query = 'Select * from subscriber';
	 $rs = mysql_query($query);
	 var_dump ( mysql_fetch_row($rs));
mysql_close();
			
?>
  
 </body>
</html>