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
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 col-sx-6">
                            <label for="from">from</label>
                            <input type="text" class="form-control" id="from" placeholder="Brussel-Zuid">
                        </div>
                        <div class="col-md-6 col-sx-6">
                            <label for="to">to</label>
                            <input type="text" class="form-control" id="to" placeholder="Antwerpen-Centraal">
                        </div>
                    </div>
                    <div class="row spaced">
                        <div class="col-md-6 col-sx-0">
                        </div>
                        <div class="col-md-4 col-sx-8">
                            <label for="date">date</label>
                            <div class="input-group date" data-provide="datepicker">
                                <input type="text" class="form-control" id="date" placeholder="24/10/2016">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sx-4">
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
                            <span class="pull-right"><a class="btn btn-primary btn-lg" href="#" role="button">Search</a></span>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
