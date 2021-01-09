<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="/favicon.ico">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#000000">
    <meta name="description"
          content="A website for keeping track of the latest statistics and news for COVID19 (Coronavirus).">
    <link rel="apple-touch-icon" href="/logo192.png">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <title>Covid-19 Outbreak</title>
{{--    <link href="/static/css/2.764ccc25.chunk.css" rel="stylesheet">--}}
{{--    <link href="/static/css/main.ef5b9dd3.chunk.css" rel="stylesheet">--}}
    <style data-styled="active" data-styled-version="5.0.1"></style>
    <style data-emotion="css"></style>
</head>
    <div id="covid-tracking">
        <covid-tracking-component></covid-tracking-component>
    </div>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script>
    var jsonData = {!! json_encode($aData) !!}
</script>
    <script src="/js/app.js"></script>
</html>
