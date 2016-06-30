
    <?php



    if (isset($_POST['token'])) {
        $test = $_POST['token'];
        $_SESSION['token'] = $test;
    }

    $token= $_SESSION['token'];

                    $i = 0;
    foreach ($this->category as $key => $value) {
        $category[$i]= $value['category'];
        $i++;
    }
      $_SESSION['token_count']=  sizeof($category) - 3;
      
       echo "<input id='token_count' type='hidden' name='foo' value= '" . $_SESSION['token_count'] ."' />";
     
        echo  "<ul>";
                    
           echo        "  <li class='navigation'> ";
                     echo  " <ul>";
    
     
        echo  "<li>". $category[0 + $token] ."</li>" ;
        echo  "<li>". $category[1 + $token] ."</li>";
        echo  "<li>". $category[2 + $token] ."</li>";
    
    
                              
                       echo " </ul> ";
    
                    echo "</li>";
                   
                echo '</ul>';
