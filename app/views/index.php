<!DOCTYPE html>
<html>
    <head>
        <title>Voting System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
        <meta charset="utf-8" />
        <link href="css/main.css" rel="stylesheet" media="screen">
    </head>
    <body>    
        <div class="container">
            <div class="jumbotron">
                <h1>General Election Voting App</h1>
                <p>
This sample voting application was developed by Steven Hughes using BackboneJS, jQuery, Twitter Bootstrap, the Laravel PHP MVC Framework, MySQL, CSS and Require.JS.
                </p>
            </div>
            <div id="app" class="row">
                <!-- load start up view into here to kick off the app -->
                <div id="start"></div>
                <div id="vote"></div>
                <div id="results"></div>
                <div id="dont_vote" class="container">
                    <h2>We're sorry to hear you're not voting</h2>
                    <p>Please come back again if you change your mind!</p>
                </div>
            </div>
            <footer>
                <p>Steven Hughes. 2013. This application was made with Laravel, BackboneJS and Twitter Bootstrap.</p>
                <p>Data obtained from http://www.parliament.uk/.</p>
            </footer>
        </div><!-- /container -->
        
        <!-- no other js files included here! -->
	   <script data-main="scripts/main" src="scripts/vendor/requirejs/require.js"></script>
    </body>
</html>