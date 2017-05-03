var endCount = 1;
function calcTot()
{
    var ar1 = document.getElementById('ar1').value;
    var ar2 = document.getElementById('ar2').value;
    var ar3 = document.getElementById('ar3').value;
    
    if( ar1 = "M"){
        
        ar1 = Number(0);
        document.getElementById('ar1').setAttribute('class');
    }
    
    var endTot = ar1 + ar2 + ar3;
    var runTot = 0;
    document.getElementById('endTot').innerHTML = endTot;
    
    if(endCount == 1){
        
        runTot = endTot;
    }
    else{
        
        var findRun = 'runTot' + (endCount - 1);
        runTot = Number(endTot) + Number(document.getElementById(findRun).innerHTML);
    }
    insertRow(ar1, ar2, ar3, endTot, runTot);
}

function insertRow(ar1, ar2, ar3, endTot, runTot){
    
    var block = ['<tr>',
                '<td> ' + endCount + ' </td>',
                '<td> ' + ar1 + ' </td>',
                '<td> ' + ar2 + ' </td>',
                '<td> ' + ar3 + ' </td>',
                '<td> ' + endTot + ' </td>',
                '<td id="runTot' + endCount + '"> ' + runTot + ' </td>',
            '</tr>'].join('');
    endCount++;
    console.log(block);
    var tr = document.createElement('tr');
    tr.setAttribute('id', 'endNum' +  (endCount - 1));
    tr.innerHTML = block;
    
    //var text = document.createTextNode(document.getElementById('scoreBlock').innerHTML);
    var child = document.getElementById('scoreInput');
    document.getElementById('scoreInputEnd').innerHTML = endCount;
    child.parentNode.insertBefore(tr, child);
    
    // Reset the values inside the input
    document.getElementById('ar1').value = '';
    document.getElementById('ar2').value = '';
    document.getElementById('ar3').value = '';
    document.getElementById('endTot').value = '';
}