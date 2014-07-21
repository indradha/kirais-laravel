<!doctype html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>KiraIS</title>
	
	<!-- SET META TAGS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">

	<!-- IMPORT PLATFORM AND WEB COMPONENTS -->
    <script src="components/platform/platform.js"></script>
	<link rel="import" href="components/core-field/core-field.html">
	<link rel="import" href="components/font-roboto/roboto.html">
  	<link rel="import" href="components/paper-input/paper-input.html">
  	<link rel="import" href="components/paper-button/paper-button.html">
	
	<link href="{{ url('public/css/core.css') }}" rel="stylesheet" type="text/css">


	<link rel="shortcut icon" type="image/png" href="http://kukirakira.com/asset/images/favicon.png"/>
    <link rel="icon" type="image/png" href="http://kukirakira.com/asset/images/favicon.png" />

</head>

<body>
	<div class="wrapper">
		 @yield('content')
	</div>
</body>
</html>
