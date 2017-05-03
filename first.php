<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="styles.css"/>
        <title> My First Webpage</title>
    </head>
    <body>
        <form action="calc.php" method="post">
        <table>
            <th colspan="6">
                Scoring Round
            </th>
            <tr>
                <td> End: </td>
                <td> 1 </td>
                <td> 2 </td>
                <td> 3 </td>
                <td> End Total: </td>
                <td> Running Total: </td>
            </tr>
                <tr>
                    <td> 1 </td>
                    <td><input type="text" name="ar1" id="ar1" style="width:3em"></td>
                    <td><input type="text" name="ar2" id="ar2" style="width:3em"></td>
                    <td><input type="text" name="ar3" id="ar3" style="width:3em"></td>
                    <td></td>
                    <td></td>
                </tr>
            </form>
            
        </table>
        <input type="submit" value="Submit">
    </body>
</html>