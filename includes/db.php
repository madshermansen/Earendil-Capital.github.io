<?php 

    $con = mysqli_connect("104.219.248.101", "madsquoa_Mads-Hermansen", "9aej9SPeez??Cgtz", "madsquoa_cms");

    if(!$con)
    {
        die(" Not Connected ");
    }
    else
    {
        echo("Connected");
    }

?>