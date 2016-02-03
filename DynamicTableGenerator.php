<?php

/*
 * Dynamic Table Generator with Bootstrap.
 * Creator - Zannatul Haque Siam
 * Software Engineer @ TheMessenger
 * Email: ferdoussiam@gmail.com
 */

class DynamicTableGenerator {
    /*
     *  Method Name generateTable;
     * Number of argument: 2
     * First argument = Result Data which want to show in table
     * Second argument = Column names for thead and tfoot
     */

    public function generateTable($dataArray, $columnNames) {

        // Check dataArray's total column number and columnName's total number.

        if (count($dataArray) != count($columnNames)) {
            echo 'Column Numbers Are Not Same';
            exit;
        }
        $tableString = '';
        $tableString .='<table class="table table-hover table-bordered">';
        $tableString .='<thead>';
        $tableString .='<tr>';
        foreach ($columnNames as $value) {
            $tableString .='<td>' . $value . '</td>';
        }
        $tableString .='</tr>';
        $tableString .='<thead>';
        $tableString .='<tbody>';
        for ($i = 0; $i < count($dataArray); $i++) {
            $tableString .='<tr>';
            foreach ($dataArray as $value) {
                $tableString .='<td>' . $value . '</td>';
            }
            $tableString .='</tr>';
        }
        $tableString .='</tbody>';
        $tableString .='<tfoot>';
        $tableString .='<tr>';
        foreach ($columnNames as $value) {
            $tableString .='<td>' . $value . '</td>';
        }
        $tableString .='</tr>';
        $tableString .='<tfoot>';
        $tableString .='</table>';
        return $tableString;
    }

}
