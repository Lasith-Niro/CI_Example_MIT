<!DOCTYPE html>
<html>
    <head>
    <title>Display Records</title>
    </head>
    
    <body>
    <table width="600" border="1" cellspacing="5" cellpadding="5">
    <tr style="background:#FF4500">
        <th>Sr No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
    </tr>
    <?php
    $i=1;
    foreach($data as $row)
    {
    echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$row->name."</td>";
    echo "<td>".$row->email."</td>";
    echo "<td>".$row->mobile."</td>";
    echo "</tr>";
    $i++;
    }
    ?>
    </table>
    
    </body>
</html>