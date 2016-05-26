<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<div class="row">
    <form class="col s12" method="POST" action="index.php">
        <div class="row">
            <div class="input-field col s12">
                <input id="pattern" type="text" class="validate" name="pattern">
                <label for="pattern">Pattern</label>
            </div>

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="text" class="materialize-textarea"></textarea>
                            <label for="textarea1">Textarea</label>
                        </div>
                    </div>
                </form>
            </div>
            <button class="btn waves-effect waves-light" name="action" id="check" >Check
                <i class="material-icons right">swap_vert</i>
            </button>
            <button class="btn waves-effect waves-light" type="submit" name="action" id="apply">Apply
                <i class="material-icons right">done</i>
            </button>
    </div>
    </form>

    <div class="row">
        <div class="col s12 m6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text" id="mydiv">
                    <span class="card-title">Result</span>
                </div>
            </div>
        </div>
    </div>

</div>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>