
<head>
        <meta charset="UTF-8">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script  src="<?php echo  URL;?>public/js/custom.js"></script>
        <link rel="stylesheet" href=" <?php echo  URL;?>public/css/default.css" />
        <?php
        if (isset($this->js)) {
            foreach ($this->js as $js) {
                echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
            }
        }
    ?>
        </head>