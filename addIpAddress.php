<?php
    include('connection.php');
    $ipAddress = $_POST['ipAddress'];
    $incidentID = $_POST['incidentID'];
    $handler = $_POST['handlerID'];


    $sql="INSERT INTO incidents_ipAddresses
    VALUES('$ipAddress', '$incidentID', '$handler')";


    if($conn->query($sql)){

        echo '<p style="font-size:24pt;color:black;text-align:center">'."Submitted successfully! Returning to home page...".'<p>';

        $url = "index.html";

        echo "<meta http-equiv='Refresh' content='3;URL=$url'>";

    }else{

        echo '<p style="font-size:24pt;color:black;text-align:center">'."There was an error! Please resubmit.".'<p>';


        $url1 = "addremoveipAddress.html";

        echo "<meta http-equiv='Refresh' content='3;URL=$url1'>";


    }

        $conn->close();
?>
