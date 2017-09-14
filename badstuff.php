<html>
    <head>
        <title>Open for monke</title>
    </head>
    <body>
        <?php
        if(isset($_GET['language'])){
            echo "<h2>Hacked</h2><br/>";
            $language = $_GET['language'];
            include($language . '.jpg');
        }
        
        ?>
    </body>
</html>