<html>
<head>
	<title></title>
</head>
<body>
<table border="1" width="30%">
	<tr>
		<td><h3>The array to declare</h3></td>
		<td colspan="2"><h3>Shapes to print</h3></td>
	</tr>
	<tr>
		<td>
			<table border="1" width="150px">
				<tr width="30px">
					<td>1</td>
					<td>2</td>
					<td>3</td>
					<td>A</td>
				</tr>
				<tr width="30px">
					<td>1</td>
					<td>2</td>
					<td>B</td>
					<td>C</td>
				</tr>
                <tr width="30px">
					<td>1</td>
					<td>D</td>
					<td>E</td>
					<td>F</td>
				</tr>
			</table>
		</td>
        <td>
        	 <table border="1" width="150px">
                <tr>  
                    <td> <?php for ($i = 1; $i < 2; $i++)  {
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
            </td>
        </tr>
    </table>		
	</body>
</html>