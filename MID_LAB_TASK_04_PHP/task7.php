<html>
    <head>Table</head>
<body>

<table border="2" width="50%">
    <tr height="10px">
        <td>
        
            <?php for ($i = 1; $i < 4; $i++) {
                   for ($j = 1; $j <= $i; $j++) {
                    echo " * ";
                    }
                    echo '<br />';
                }
            ?>
       </td>
       <td>     
            <?php for ($i = 1; $i < 2; $i++)  {
                     echo "1 2 3";
                }
                     echo '<br />';
                    for ($i = 1; $i < 2; $i++)  {
                    echo "1 2";
                }
                     echo '<br />';
                    for ($i = 1; $i < 2; $i++)  {
                echo "1 ";
            }
    
?>

        </td> 
        <td>
            
<?php for ($i = 1; $i < 2; $i++)  {
                 echo "A";
            }
                 echo '<br />';
                    for ($i = 1; $i < 2; $i++)  {
                    echo "B C";
            }
                     echo '<br />';
                        for ($i = 1; $i < 2; $i++)  {
                     echo "D E F ";
                     }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>