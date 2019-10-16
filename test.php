<?php
   /* $val=$_GET["id"];
    for($i=0;$i<$val;$i++)
    {
        echo $i.nl2br("\n");
    }
*/
    $con=mysqli_connect("localhost","root","","test");
    if($con)
    {
        echo "Success";
        $v=$_GET["state"];
        $query=mysqli_query($con,"select city from test where state='".$v."'");
        echo "select city from test where state='".$v."'";
        //echo "<select id='c'>";
        while($row=mysqli_fetch_array($query))
        {
            echo "<option value='".$row[0]."'>$row[0]</option>";
        }
        //echo "</select>";
    }
    else{
        echo "Failed";
    }
?>