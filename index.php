<?php require_once './DynamicTableGenerator.php'; ?>
<html>
    <head>
        <link rel="stylesheet" href="resource/css/bootstrap.min.css" >
        <style>
            thead tr td{
                font-weight: bold;
            }
            tfoot tr td{
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p class="text-center">Dynamic Table Generator With Bootstrap</p>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php
                                $dataArray = array('id', 'column value', 'column value', 'column value');
                                $columnNames = array('#', 'Column Name', 'Column Name', 'Column Name');
                                $obj = new DynamicTableGenerator();
                                echo $obj->generateTable($dataArray, $columnNames);
                                ?>
                            </div>
                        </div>
                        <div class="panel-footer"></div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

