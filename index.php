<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width; initial-scale = 1.0; maximum-scale=1.0; user-scalable=no" />
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
                    <row>
                        <div class="col-md-6 col-sx-6">
                            <label for="from">from</label>
                            <input type="text" class="form-control" id="from">
                        </div>
                        <div class="col-md-6 col-sx-6">
                            <label for="to">to</label>
                            <input type="text" class="form-control" id="to">
                        </div>
                    </row>
                    <row class="row-space">
                        <div class="col-md-6 col-sx-0">
                        </div>
                        <div class="col-md-3 col-sx-6">
                            <label for="date">date</label>
                            <div class="input-group date" data-provide="datepicker">
                                <input type="text" class="form-control" id="date">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sx-6">
                            <label for="time">time</label>
                            <div class="input-group date" data-provide="datepicker">
                                <input type="text" class="form-control" id="time">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                        </div>
                    </row>
                 </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
