

<?php

class DynamicTableGenerator {

    public function generateTable($numberOfRow, $argumentArray,$template) {
        $tableString = '';
        $tableString .='<table class="'.$template.'">';
        $tableString .='<thead>';
        $tableString .='<tr>';
        foreach ($argumentArray as $value) {
            $tableString .='<td>' . $value . '</td>';
        }
        $tableString .='</tr>';
        $tableString .='<thead>';
        $tableString .='<tbody>';
        for ($i = 0; $i < $numberOfRow; $i++) {
            $tableString .='<tr>';
            $tableString .='<td>Sim</td>';
            $tableString .='<td>Sim</td>';
            $tableString .='<td>Sim</td>';
            $tableString .='</tr>';
        }
        $tableString .='</tbody>';
        $tableString .='<tfoot>';
        $tableString .='<tr>';
        foreach ($argumentArray as $value) {
            $tableString .='<td>' . $value . '</td>';
        }
        $tableString .='</tr>';
        $tableString .='<tfoot>';
        $tableString .='</table>';
        return $tableString;
    }

}

//$obj = new DynamicTableGenerator();
//echo $obj->generateTable(10, array('Name', 'Age', 'Date Of Birth'));
