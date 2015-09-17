<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BlogTamSu Video Getter</title>
    <link rel="stylesheet" href="{{ url('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('bower_components/bootstrap-material-design/dist/css/material.min.css') }}">
    <link rel="stylesheet" href="{{ url('bower_components/bootstrap-material-design/dist/css/material-fullpalette.min.css') }}">
    <link rel="stylesheet" href="{{ url('bower_components/bootstrap-material-design/dist/css/ripples.min.css') }}">
    <link rel="stylesheet" href="{{ url('bower_components/bootstrap-material-design/dist/css/roboto.min.css') }}">
    <link rel="stylesheet" href="{{ url('bower_components/font-awesome/css/font-awesome.min.css') }}">
</head>
<body>

<h1><br></h1>

<div class="container">
    <div class="bs-component">
        <div class="jumbotron">
            <h1>BlogTamSu Video Getter</h1>
            <br>
            <form id="frm-url-getter" class="clearfix" action="{{ route('get_html') }}">
                <div class="form-group">
                    <input type="url" class="form-control" id="txt-url" placeholder="Enter a URL of blogtamsu" autofocus>
                    <button class="btn btn-primary">
                        Get URL
                        &nbsp;
                        <i id="loading-cog" class="fa fa-cog fa-spin hidden"></i>
                    </button>
                </div>
            </form>
            <h4>Results</h4>
            <ul id="lst-results" class="list-group"></ul>
        </div>
    </div>
</div>

<script src="{{ url('bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ url('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ url('bower_components/bootstrap-material-design/dist/js/material.min.js') }}"></script>
<script src="{{ url('bower_components/bootstrap-material-design/dist/js/ripples.min.js') }}"></script>
<script src="{{ url('js/main.js') }}"></script>
</body>
</html>
