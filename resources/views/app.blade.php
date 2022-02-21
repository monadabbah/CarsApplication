<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" value="{{ csrf_token() }}"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons' rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@6.x/css/materialdesignicons.min.css" rel="stylesheet">
    <title>{{ __('Cars Application') }}</title>
</head>
<body>
    <!--<div id="app">
        <router-link to="/"></router-link>
        <router-link to="/login">login</router-link>
        <router-link to="/register">register</router-link>
        <router-link to="/dashboard">dashboard</router-link>
        <router-view/>
    </div>-->
    <div id="app">
       
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
   
</body>
</html>