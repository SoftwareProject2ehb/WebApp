<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width; initial-scale = 1.0; maximum-scale=1.0; user-scalable=no" />
        <meta name="theme-color" content="#647187">
        <title>WebApp</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        
        <link rel="stylesheet" href="resources/css/main.css">
    </head>
    <body>
    <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">WebApp</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Search Trains <span class="sr-only">(current)</span></a></li>
                        <li><a href="tickets/">Tickets</a></li>
                        <li><a href="about/">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="search" class="container-fluid">
            <div class="container">
                <h1>Search Trains</h1>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <label for="from">from</label>
                                <select class="selectpicker form-control "  type="text" id="from"  placeholder="Brussel-Zuid"  data-live-search="true">
                                    
                                </select>

                        </div>
                        <div class="col-md-6 col-xs-12">
                            <label for="to">to</label>
                                <select class="selectpicker form-control "  type="text" id="to"  placeholder="Antwerpen-Centraal"  data-live-search="true">
                                                                                                                                                     
                                </select>
                        </div>
                    </div>
                    <div class="row spaced">
                        <div class="col-md-6 col-xs-0">
                        </div>
                        <div class="col-md-4 col-xs-7">
                            <label for="date">date</label>
                            <div class="input-group date" data-provide="datepicker">
                                <input type="text" class="form-control" id="date" placeholder="24/10/2016">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-5">
                            <label for="time">time</label>
                            <div class="input-group date" data-provide="datepicker">
                                <input type="text" class="form-control" id="time" placeholder="11:15">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row spaced">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <span class="pull-right"><a class="btn btn-primary btn-lg" href="search/" role="button">Search</a></span>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script> 
        <script src="jquery-csv/src/jquery.csv.min.js" ></script>
        <script src="CSVStations/csvread.js" charset="utf-8"></script>
    </body>
</html>
