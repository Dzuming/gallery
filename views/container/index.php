
    <?php


if (isset($_POST['path']))
{
$path = $_POST['path'];
$_SESSION['path'] = $path;
 }
$p= $_SESSION['path'];
 if (isset($_POST['description']))
{
$description = $_POST['description'];
$_SESSION['description'] = $description;
 }
$d= $_SESSION['description'];

?>
           
              
            
                <!-- <div class="photo_number">1/23</div> -->
                
                <div class="photo_frame">
                    <?php
                   echo "<div class='photo_description'>" .$d. "</div>";
                     echo "<img class ='photo_big' src='".$p."'>";
                     ?>
                
                
            </div>