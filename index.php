<!DOCTYPE html>
<html>
    <head>
        <title>Scores</title>
    <style>
	.form-score{
        border:solid 2px gray;
        font-size:20px;
        border-radius:5px;
        padding:10px;
        outline:none;
        width:40px;
        maxlength: 2;                           
    }
    table,th,td{
        text-align: center;
		font-size:20px;
		border-collapse: collapse;
    }
	tr:nth-child(even){
		background:gray;
	}
    th,td{
        padding: 10px;
    }
    </style>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
			$('.form-score').change(function() {
				$('tr').each(function() {
					var rowIndex = $('#score-table tr').index($(this).closest('tr'));
					var runTotVal = 0;
					var prevTot = 0;
					var sum = 0;
					$(this).find('input').each(function() {
						var floatValue = parseFloat($(this).val());
						$(this).val(Math.round(floatValue));
						sum += floatValue;
					});
					$('.endTot', this).html(sum);
					if (rowIndex == 1){
						runTotVal = sum;
					}
					else if (rowIndex > 1){
						prevTot = parseInt($('#score-table tr:eq(' + (rowIndex - 1) + ') td:eq(5)').html())
						runTotVal = prevTot + parseInt($('#score-table tr:eq(' + (rowIndex) + ') td:eq(4)').html());
					}
					$('.runTot', this).html(runTotVal);
				});
			});
		});
	</script>
    </head>
    <body>
   
        <?php 
            /*
            if(!$db){
                echo $db->lastErrorMsg();
            }
            else
            {
                echo "Opened Database Successfully\n";
            }
        */
        ?>
        <table border="0" id="score-table">
            <tr>
                <th>End</th>
                <th colspan="3">Score</th>
                <th>End Total</th>
                <th>Running Total</th>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td class="endTot">0</td>
                <td class="runTot">0</td>
            </tr>
            <tr>
                <td>2</td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td class="endTot">0</td>
                <td class="runTot">0</td>
            </tr>
            <tr>
                <td>3</td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td class="endTot">0</td>
                <td class="runTot">0</td>
            </tr>
            <tr>
                <td>4</td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td class="endTot">0</td>
                <td class="runTot">0</td>
            </tr>
            <tr>
                <td>5</td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td class="endTot">0</td>
                <td class="runTot">0</td>
            </tr>
            <tr>
                <td>6</td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td class="endTot">0</td>
                <td class="runTot">0</td>
            </tr>
            <tr>
                <td>7</td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td class="endTot">0</td>
                <td class="runTot">0</td>
            </tr>
            <tr>
                <td>8</td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td class="endTot">0</td>
                <td class="runTot">0</td>
            </tr>
            <tr>
                <td>9</td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td class="endTot">0</td>
                <td class="runTot">0</td>
            </tr>
            <tr>
                <td>10</td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td>
                    <input value="0" type="text" maxlength="2" class="form-score"/>
                </td>
                <td class="endTot">0</td>
                <td class="runTot">0</td>
            </tr>
        </table>
    </body>
</html>
