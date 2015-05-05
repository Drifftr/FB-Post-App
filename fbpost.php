<?php
$response = file_get_contents("http://localhost:8086/mockupservice/track/preview");
if      (substr($response, 0, 4) == "\x89PNG")  header('Content-Type: image/png');
else if (substr($response, 0, 2) == "\xFF\xD8") header('Content-Type: image/jpeg');
else if (substr($response, 0, 4) == "GIF8")     header('Content-Type: image/gif');

echo $response;

       if (isset($_GET['token'])) {
               $access_token = $_GET['token'];
	       $graph_url= "https://graph.facebook.com/me/photos?". "access_token=" .$access_token;
              
         echo '<html><body>';
         echo '<form enctype="multipart/form-data" action="'
         .$graph_url .' "method="POST">';
         echo 'Please choose a photo: ';
         echo '<input name="source" type="file"><br/><br/>';
         echo 'Say something about this photo: ';
         echo '<input name="message" 
             type="text" value=""><br/><br/>';
         echo '<input type="submit" value="Upload"/><br/>';
         echo '</form>';
         echo '</body>&lt/html>';



                /*foreach ($obj->statuses->data as $statuse) {
					$status_id = $statuse->id;
                    $name = $statuse->from->name;
                    $message = $statuse->message;
		    $time = $statuse->updated_time;
					
					echo "<tr>";
                    echo "<td>".$status_id . "</td>";
                    echo "<td >".$name . "</td>";
					echo "<td>".$time . "</td>";
                    echo "<td>".$message . "</td></tr>";


                }*/

            }




            

?>
