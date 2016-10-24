<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width; initial-scale = 1.0; maximum-scale=1.0; user-scalable=no" />
        <meta name="theme-color" content="#647187">
        <title>WebApp</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="resources/css/main.css">
    </head>
    <body>
        <div id="search" class="container-fluid">
            <div class="container">
                <h1>WebApp</h1>
                <div class="row">
                    <div class="col-md-2 col-xs-2"><h4>IC 1234</h4></div>
                    <div class="col-md-10 col-xs-10"><h4>Antwerpen-Centraal - Brussel-Zuid</h4></div>
                </div>
                <div class="row result-upper">
                    <div class="col-md-2 col-xs-4">
                        <span class="pull-right"><h5>Antwerpen-Centraal</h5></span>
                    </div>
                    <div class="col-md-8 col-xs-4 vertical-center">
                        <div class="line on-time"></div>
                    </div>
                    <div class="col-md-2 col-xs-4">
                        <h5>Brussel-Zuid</h5>
                    </div>
                </div>
                <div class="row result-down">
                    <div class="col-md-2 col-xs-4">
                        <span class="pull-right"><h5>Spoor 24 - 12:45</h5></span>
                    </div>
                    <div class="col-md-8 col-xs-4 text-center">
                        <h5>On time</h5>
                    </div>
                    <div class="col-md-2 col-xs-4">
                        <h5>Spoor 14 - 13:00</h5>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-2 col-xs-2"><h4>IC 1234</h4></div>
                    <div class="col-md-10 col-xs-10"><h4>Antwerpen-Centraal - Brussel-Zuid</h4></div>
                </div>
                <div class="row result-upper">
                    <div class="col-md-2 col-xs-4">
                        <span class="pull-right"><h5>Antwerpen-Centraal</h5></span>
                    </div>
                    <div class="col-md-8 col-xs-4">
                        <div class="line delayed"></div>
                    </div>
                    <div class="col-md-2 col-xs-4">
                        <h5>Brussel-Zuid</h5>
                    </div>
                </div>
                <div class="row result-down">
                    <div class="col-md-2 col-xs-4">
                        <span class="pull-right"><h5>Spoor 24 - 12:45</h5></span>
                    </div>
                    <div class="col-md-8 col-xs-4 text-center">
                        <h5>Delayed +0h15</h5>
                    </div>
                    <div class="col-md-2 col-xs-4">
                        <h5>Spoor 14 - 13:00</h5>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-2 col-xs-2"><h4>IC 1234</h4></div>
                    <div class="col-md-10 col-xs-10"><h4>Antwerpen-Centraal - Brussel-Zuid</h4></div>
                </div>
                <div class="row result-upper">
                    <div class="col-md-2 col-xs-4">
                        <span class="pull-right"><h5>Antwerpen-Centraal</h5></span>
                    </div>
                    <div class="col-md-8 col-xs-4">
                        <div class="line cancelled"></div>
                    </div>
                    <div class="col-md-2 col-xs-4">
                        <h5>Brussel-Zuid</h5>
                    </div>
                </div>
                <div class="row result-down">
                    <div class="col-md-2 col-xs-4">
                        <span class="pull-right"><h5>Spoor 24 - 12:45</h5></span>
                    </div>
                    <div class="col-md-8 col-xs-4 text-center">
                        <h5>Cancelled</h5>
                    </div>
                    <div class="col-md-2 col-xs-4">
                        <h5>Spoor 14 - 13:00</h5>
                    </div>
                </div> 
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>