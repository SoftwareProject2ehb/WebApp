var data;
function readTextFile(file)
{
    var rawFile = new XMLHttpRequest();
    //rawFile = "data:text/csv;charset=utf-8,%EF%BB%BF";
    rawFile.open("GET", file, true);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
                var allText = rawFile.responseText;
                
                data =$.csv.toArrays(allText);
                var html;
                for(i=1;i<data.length;i++){
                    
                   
                    
                    html+="<option data-tokens='" +data[i][0]+ "' >"+data[i][0]+"</option>";
                    console.log(data[i][0]);
                    
                }
                
                    document.getElementById("from").innerHTML= html;
                    document.getElementById("to").innerHTML= html;
                $('#from').selectpicker('refresh');
                $('#to').selectpicker('refresh');    

                     
                }
                
            }
              
        }
        rawFile.send(null);
    }
  
    
    


readTextFile("http://nomaj.eu/wart/CSVStations/csv.csv");

    



