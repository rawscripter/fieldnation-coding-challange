<?php
class MyArray extends ArrayObject
{
    public function displayAsTable()
    {
        echo '<table>';
        foreach ($this as $key => $value) {
            echo '<tr><td>' . $key . '</td><td>' . $value . '</td></tr>';
        }
        echo '</table>';
    }
}

$table = new MyArray();

$table['name'] = 'Shuvo Goswami';
$table['age'] = '25';
$table['email'] = 'shuvogoswmii@gmail.com';

$table->displayAsTable();

?>