<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{ wp_head() }}
</head>
<body {{ body_class() }}>
 <div id="ds_app">
    @yield('content')
 </div>

{{ wp_footer() }}
</body>
</html>