<?php 
function getinfo($topic){
    // Details for logging in
    $servername = "localhost";
    $username = "root";
    $password = "";
    // Create new connection
    $conn = mysqli_connect($servername, $username, $password, "madsquoa_cms");

    // Check the connection
    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
        }

    // Create SQL Query
    if ($topic == "ALL") {
        $sql = 'SELECT * FROM articles ORDER BY `articles`.`id` ASC';
    } else {
        $sql = 'SELECT * FROM articles WHERE Topic = "' . $topic . '" ORDER BY `articles`.`id` ASC';
    }
    
    // Retrieving the data from the database
    // make a query and get results
    $result = mysqli_query($conn, $sql);
    // fetch resulting rows as an array
    $results_array = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $results_array[] = $row;
    }

    $lastestpost = end($results_array);
    // Free the result and close the connection
    mysqli_free_result($result);
    mysqli_close($conn);
    return array("lp" => $lastestpost, "ra" => $results_array);
}
?>

  
    