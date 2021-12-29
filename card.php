
<?php 

$link = mysqli_connect('localhost', 'root', '', 'christmas');

if (isset($_GET['network'])) {
    $network = $_GET['network'];
    $user = getIPAddress(); ;

    $sql = "SELECT * FROM gifts WHERE network = '$network' AND valid = 0 LIMIT 1";
    $query = mysqli_query($link, $sql);

    $sql3 = "SELECT * FROM users WHERE ip_address = '$user'";
    $query3 = mysqli_query($link, $sql3);

    if (mysqli_num_rows($query3) > 0) {
        echo 'You already redeemed gift';
    } else {

        $sql4 = "INSERT INTO users (ip_address) VALUES ('$user')";
        $query4 = mysqli_query($link, $sql4);

        if (mysqli_num_rows($query) > 0) {
            $rows = mysqli_fetch_assoc($query);
    
            $value = $rows['value'];
    
            $sql2 = "UPDATE gifts SET valid = 1 WHERE network = '$network' && value = '$value'";
            $query = mysqli_query($link, $sql2);
    
            echo $rows['value'];
    
        } else {
            echo "$network giveaway have been exhausted!";
        }
    }

} else {
    echo 'No valid information to proceed';
}

function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
} 




// if ($link) {
//     echo 'connected';
// } else {
//     echo 'not connected';
// }