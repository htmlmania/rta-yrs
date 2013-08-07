<!doctype html>
<html>
    <head>
        <title>Positioning Map</title>
        <link rel="shortcut icon" href="favicon.ico" />
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-glyphicons.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="navbar navbar-fixed-top">
                <a class="navbar-brand tt" href="#home" data-toggle="tab" title="Back Home">
                    <h1>Roadkill</h1>
                </a>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade active in" id="home">
                <h2>Roadkill</h2>
                <div class="row mb">
                    <div class="col-lg-2 col-lg-offset-1">
                        <a href="#map" data-toggle="tab" title="Ambulance Positioning Map" class="map tt btn btn-default btn-lg">
                            <img src="img/map.png" />
                        </a>
                    </div>
                    <div class="col-lg-2 col-lg-offset-1">
                        <a href="#about" data-toggle="tab" title="About the website" class="about tt btn btn-default btn-lg">
                            <img src="img/info.png" />
                        </a>
                    </div>
                    <div class="col-lg-2 col-lg-offset-1">
                        
                    </div>
                </div>
                <div class="row mt">
                    <div class="col-lg-2 col-lg-offset-1">
                        <a href="#map" data-toggle="tab" title="Refresh Everything" class="refresh tt btn btn-default btn-lg">
                            <img src="img/refresh.png" />
                        </a>
                    </div>
                    <div class="col-lg-2 col-lg-offset-1">
                        
                    </div>
                    <div class="col-lg-2 col-lg-offset-1">
                        
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="map">
                <h2>A.P.M: Ambulance Positioning Map</h2>
            </div>
            <div class="tab-pane fade" id="about">
                <h2>About</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <h3>Data source licencing</h3>
                        <p>
                            blablablabls
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <h3>About the team</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <h4>Benjamin M</h4>
                                <p>
                                    <strong>Role</strong>: Algorythems programer and helper<br />
                                    <strong>Age</strong>: 10<br />
                                    <strong>Random Fact</strong>: Likes to DJ
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <h4>Benjamin M</h4>
                                <p>
                                    <strong>Role</strong>: Algorythems programer and helper<br />
                                    <strong>Age</strong>: 10<br />
                                    <strong>Random Fact</strong>: Likes to DJ
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <h4>Benjamin M</h4>
                                <p>
                                    <strong>Role</strong>: Algorythems programer and helper<br />
                                    <strong>Age</strong>: 10<br />
                                    <strong>Random Fact</strong>: Likes to DJ
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <h4>Benjamin M</h4>
                                <p>
                                    <strong>Role</strong>: Algorythems programer and helper<br />
                                    <strong>Age</strong>: 10<br />
                                    <strong>Random Fact</strong>: Likes to DJ
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h3>Instructions</h3>
                        <p>
                            The map page is an embedded version of google maps with colour overlays symbolising risk.
                            If there is no colour overlay there is a low risk factor,
                            amber symbolises increased risk factor,
                            and red equalling a higher risk factor.
                            <ul>
                                <li>No colour overlay = Low risk</li>
                                <li>Amber overlay = Intermediate risk</li>
                                <li>Red overlay = High risk</li>
                            </ul>
                            The stats page displays statistics about predicted response times,
                            high risk areas and recommended areas for.
                            These can be downloaded as a printer PDF for attachment to an email.
                            The manual input page also includes an embedded google maps,
                            allowing the user to enter a specific location,
                            by postcode,
                            address and latitude/longitude.
                            As well as the number of available ambulances and their positions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>