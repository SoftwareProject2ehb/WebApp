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
                        <li><a href="../index.php">Search Trains</a></li>
                        <li class="active"><a href="#">Tickets <span class="sr-only">(current)</span></a></li>
                        <li><a href="../about/">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="search" class="container-fluid">
            <div class="container">
                <h1>Tickets</h1>
                <div class="result">
                    <div class="row">
                        <div class="col-md-12">
                            <h4><span class="glyphicon glyphicon-credit-card status"></span> Standard Ticket</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h4><span class="glyphicon glyphicon-euro status"></span> -,00</h4>
                        </div>
                        <div class="col-md-8">
                            <h4>A single or return, from any Belgian station to any Belgian station, ticket. Price varies from route to route.</h4>
                        </div>
                    </div>
                </div>
                <div class="result">
                    <div class="row">
                        <div class="col-md-12">
                            <h4><span class="glyphicon glyphicon-credit-card status"></span> Weekend Ticket</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h4><span class="glyphicon glyphicon-euro status"></span> -,00</h4>
                        </div>
                        <div class="col-md-8">
                            <h4>A single or return, from any Belgian station to any Belgian station, ticket from friday 19:00 until sunday. Half the price. Price varies from route to route.</h4>
                        </div>
                    </div>
                </div>
                <div class="result">
                    <div class="row">
                        <div class="col-md-12">
                            <h4><span class="glyphicon glyphicon-credit-card status"></span> GoPass One</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h4><span class="glyphicon glyphicon-euro status"></span> 6,00</h4>
                        </div>
                        <div class="col-md-8">
                            <h4>A single fare, from any Belgian station to any Belgian station, ticket for people under 26 year old.</h4>
                        </div>
                    </div>
                </div>
                <div class="result">
                    <div class="row">
                        <div class="col-md-12">
                            <h4><span class="glyphicon glyphicon-credit-card status"></span> Senior Citizen Ticket</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h4><span class="glyphicon glyphicon-euro status"></span> 6,00</h4>
                        </div>
                        <div class="col-md-8">
                            <h4>A return, from any Belgian station to any Belgian station, ticket for people over 65 year old.</h4>
                        </div>
                    </div>
                </div>
                <div class="result">
                    <div class="row">
                        <div class="col-md-12">
                            <h4><span class="glyphicon glyphicon-credit-card status"></span> Child Ticket</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h4><span class="glyphicon glyphicon-euro status"></span> -,00</h4>
                        </div>
                        <div class="col-md-8">
                            <h4>A single or return, from any Belgian station to any Belgian station, ticket. Half the price. Price varies from route to route.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>

