<?php require_once './DynamicTableGenerator.php'; ?>

<html>
    <head>
        <link rel="stylesheet" href="resource/css/bootstrap.min.css" >
    </head>
    <body>
        <?php $obj = new DynamicTableGenerator(); 
        
       echo $obj->generateTable(10, array('Name','Age','Bith'),'table table-hover');
        
        ?>
    </body>
</html>
