<?php
 $visitor=390;
 $like=28;
 $dislike=12;
 $histories= array(
                array("time"=>"Yesterday 3pm","Visiting page"=>"Homepage","Impression"=>"good","visiting device"=>"Chrome"),
                array("time"=>"Yesterday","Visiting page"=>"Homepage","Impression"=>"good","visiting device"=>"Chrome"),
                array("time"=>"Today 7am","Visiting page"=>"Post 2","Impression"=>" ","visiting device"=>"Firefox"),
            );
?>
<?php
echo'
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #r1{
        background-color: #A9A9A0;
        }
        #r2{
        background-color: #F0F8FF;   
        }
        #r4{
        background-color: #FAEBD7;   
        }

    </style>
    
    </head>
        <body>
       

        Home|<a href=http://127.0.0.1/practice/MyPosts.php>My posts</a> 
           
            <div>
            <table cellspacing=20, cellpadding=0 >
                <tr >
                    <td> Total Impression</td>
                    <td></td>
                    <td> <select id="month">
                        <option value="This">This month</option>
                        <option value="Last month">Last month</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><fieldset><i class="fa fa-users"></i><p>'.$visitor.'</p> Visitors</fieldset></td>
                    <td><fieldset><i class="fa fa-thumbs-up"></i><p>'.$like.'</p>likes</fieldset></td>
                    <td><fieldset><i class="fa fa-thumbs-down"></i><p>'.$dislike.' </p> dislikes</fieldset></td>
                </tr>
            </table>
            </div>
            <div>
                Visitor history
                <br><br>
                <table border=1>
        <tr id="r1">
            <td>Time</td>
            <td>Visiting page</td>
            <td>Impression</td>
            <td>visiting device</td>
        </tr>
        '
?>
<?php
        foreach($histories as $history)
        echo "<tr>
            <td>".$history['time']."</td>
            <td>".$history['Visiting page']."</td>
            <td>".$history['Impression']."</td>
            <td>".$history['visiting device']."</td>
            </tr>";
        ?>
    </table>
            </div>
        </body>
</html>
<?php

echo "This is my index";

$servername = "127.0.0.1";
$username = "root";
$password = "";
$bdname = "blog";

echo "<br/>".$_SERVER['HTTP_USER_AGENT'];

//create connection 
$conn = mysqli_connect($servername, $username, $password, $bdname);
//check connection
if(!$conn) {
    die("connection failed: ".mysqli_connect_error());
}
$query = "INSERT INTO activity_histories(time,visitor_page,visitor_device) VALUES ('2020.03.05-8:20:00','home','chrome')";
if (mysqli_query($conn, $query)) {
    echo "Record insert successfully";
}else {
    echo "Error insert record: ".mysqli_error($conn);
}
mysqli_close($conn);


?>


