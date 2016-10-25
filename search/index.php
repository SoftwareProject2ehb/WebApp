<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width; initial-scale = 1.0; maximum-scale=1.0; user-scalable=no" />
        <meta name="theme-color" content="#647187">
        <title>WebApp</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="../resources/css/main.css">
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
                    <a class="navbar-brand" href="../index.php">WebApp</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Search Results <span class="sr-only">(current)</span></a></li>
                        <li><a href="../">New Search</a></li>
                        <li><a href="../tickets/">Tickets</a></li>
                        <li><a href="../about/">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div id="search-results" class="container-fluid">
            <div class="container">
            <h1>Search Results</h1>
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <button type="button" class="btn btn-info">Earlier Trains</button>
                    <span class="pull-right"><button type="button" class="btn btn-info">Later Trains</button></span>
                </div>
            </div>
            <div class="row spaced">
                    <div class="col-md-2 col-xs-5">
                        <h4><span class="glyphicon glyphicon-time status delayed"></span> IC 1234</h4>
                    </div>
                    <div class="col-md-10 col-xs-7">
                        <h4>Antwerpen-Centraal - Brussel-Zuid</h4>
                    </div>
               </div>
                <div class="result">
                    <div class="row">
                        <div class="col-md-5 col-xs-5">
                            <h5>
                                Antwerpen-Centraal
                            </h5>
                        </div>
                        <div class="col-md-7 col-xs-7">
                            <h5>
                                Spoor 24<br>
                                12:15
                            </h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-xs-5">

                        </div>
                        <div class="col-md-7 col-xs-7">
                            <h5>This train is delayed (+0h05)</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-xs-5">
                            <h5>Brussel-Zuid</h5>
                        </div>
                        <div class="col-md-7 col-xs-7">
                            <h5>
                                Spoor 15<br>
                                13:00
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 col-xs-5">
                        <h4><span class="glyphicon glyphicon-time status on-time"></span> IC 5678</h4>
                    </div>
                    <div class="col-md-10 col-xs-7">
                        <h4>Antwerpen-Centraal - Brussel-Zuid</h4>
                    </div>
               </div>
                <div class="result">
                    <div class="row">
                        <div class="col-md-5 col-xs-5">
                            <h5>
                                Antwerpen-Centraal
                            </h5>
                        </div>
                        <div class="col-md-7 col-xs-7">
                            <h5>
                                Spoor 24<br>
                                12:45
                            </h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-xs-5">

                        </div>
                        <div class="col-md-7 col-xs-7">
                            <h5>There are currently no delays</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-xs-5">
                            <h5>Brussel-Zuid</h5>
                        </div>
                        <div class="col-md-7 col-xs-7">
                            <h5>
                                Spoor 15<br>
                                13:30
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 col-xs-5">
                        <h4><span class="glyphicon glyphicon-time status cancelled"></span> IC 9876</h4>
                    </div>
                    <div class="col-md-10 col-xs-7">
                        <h4>Antwerpen-Centraal - Brussel-Zuid</h4>
                    </div>
               </div>
                <div class="result">
                    <div class="row">
                        <div class="col-md-5 col-xs-5">
                            <h5>
                                Antwerpen-Centraal
                            </h5>
                        </div>
                        <div class="col-md-7 col-xs-7">
                            <h5>
                                Spoor 24<br>
                                13:30
                            </h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-xs-5">

                        </div>
                        <div class="col-md-7 col-xs-7">
                            <h5>This train is cancelled</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-xs-5">
                            <h5>Brussel-Zuid</h5>
                        </div>
                        <div class="col-md-7 col-xs-7">
                            <h5>
                                Spoor 15<br>
                                14:15
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 col-xs-5">
                        <h4><span class="glyphicon glyphicon-time status cancelled"></span> IC 9876</h4>
                    </div>
                    <div class="col-md-10 col-xs-7">
                        <h4>Antwerpen-Centraal - Brussel-Zuid</h4>
                    </div>
               </div>
                <div class="result">
                    <div class="row">
                        <div class="col-md-5 col-xs-5">
                            <h5>
                                Antwerpen-Centraal
                            </h5>
                        </div>
                        <div class="col-md-7 col-xs-7">
                            <h5>
                                Spoor 24<br>
                                13:30
                            </h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-xs-5">

                        </div>
                        <div class="col-md-7 col-xs-7">
                            <h5>This train is cancelled</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-xs-5">
                            <h5>Brussel-Zuid</h5>
                        </div>
                        <div class="col-md-7 col-xs-7">
                            <h5>
                                Spoor 15<br>
                                14:15
                            </h5>
                        </div>
                    </div>
                </div>
                    <div class="row spaced">
                    <div class="col-md-12 col-xs-12">
                        <button type="button" class="btn btn-info">Earlier Trains</button>
                        <span class="pull-right"><button type="button" class="btn btn-info">Later Trains</button></span>
                    </div>
                
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>