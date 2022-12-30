<?php

 $conn=mysqli_connect("mysql","user","saxud3sldnb","boxoffice");
   if(!$conn)
    {
	 echo "connection error".mysqli_connect_error();
	}
 $sql="select profile_pic from user_profile_data where name='akshay'";
 $r=mysqli_query($conn,$sql);
 $row=mysqli_fetch_assoc($r);
 $str=$row["profile_pic"];
 $myfile=fopen("data.jpg","a");
 fwrite($myfile,$str);
 fclose($myfile);
 mysqli_close($conn);
?>