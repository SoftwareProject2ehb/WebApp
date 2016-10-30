var data
function readTextFile(file)
{
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, false);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
                var allText = rawFile.responseText;
                data =$.csv.toArrays(allText)
            }
        }
    }
    rawFile.send(null);
}

readTextFile("file:///D:/Documents/ehb/csv.csv");

    
    



console.log(data[1][1])