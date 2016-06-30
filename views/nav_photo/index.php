
    <?php



    if (isset($_POST['photo'])) {
        $test = $_POST['photo'];
        $_SESSION['photo'] = $test;
    }
    $j= $_SESSION['photo'];
 



           
              
                    
                    $i = 0;
    foreach ($this->nav_photo as $key => $value) {
        $photo_name[$i]= $value['photo_name'];

        $photo_description[$i]= $value['photo_description'];
        $i++;
        $_SESSION['photo_count']=  sizeof($photo_name) - 3;
        
    }
    echo "<input id='photo_count' type='hidden' name='foo' value= '" . $_SESSION['photo_count'] ."' />";
    echo  "<ul>";
    if (isset($photo_name[0+$j])) {
    echo "<li class='navigation'>";
    
    echo "<div class='test'>". $photo_description[0+$j] . "</div>";
    echo "<img class ='photo' src=' " .PHOTO."". $photo_name[0+$j] ."'>";  
    echo "</li>";
}
    if (isset($photo_name[1+$j])) {
        echo "<li class='navigation'>";
    
        echo "<img class ='photo' src='" .PHOTO."".$photo_name[1+$j]."'>";
        echo "<div class='test'>" .$photo_description[1+$j] . "</div>";
    
        echo "</li>";
    }
    if (isset($photo_name[2+$j])) {
    echo "<li class='navigation'>";
    echo "<img class ='photo' src='" .PHOTO."".$photo_name[2+$j]."'>";
    echo "<div class='test'>" .$photo_description[2+$j] . "</div>";
    echo "</li>";
}
if (isset($photo_name[3+$j])) {
    echo "<li class='navigation'>";
    echo "<img class ='photo' src='" .PHOTO."".$photo_name[3+$j]."'>";
    echo "<div class='test'>" .$photo_description[3+$j] . "</div>";
    echo "</li>";
}
if (isset($photo_name[4+$j])) {
    echo "<li class='navigation'>";
    echo "<img class ='photo' src='" .PHOTO."".$photo_name[4+$j]."'>";
    echo "<div class='test'>" .$photo_description[4+$j] . "</div>";
    echo "</li>";
}
if (isset($photo_name[5+$j])) {
    echo "<li class='navigation'>";
    echo "<img class ='photo' src='" .PHOTO."".$photo_name[5+$j]."'>";
    echo "<div class='test'>" .$photo_description[1+$j] . "</div>";
    echo "</li>";
}
    echo "</ul>";
