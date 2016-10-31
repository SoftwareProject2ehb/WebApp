var data;
function readTextFile(file)
{
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, true);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
                var allText = rawFile.responseText;
                
                data =$.csv.toArrays(allText);
                
                
            }
              console.log(data[1][0])
        }
      
    }
    rawFile.send(null);
    
    
}

readTextFile("http://nomaj.eu/wart/CSVStations/csv.csv");

    



