<!doctype html>
<!--
Copyright (c) 2014 The Polymer Project Authors. All rights reserved.
This code may only be used under the BSD style license found at http://polymer.github.io/LICENSE
The complete set of authors may be found at http://polymer.github.io/AUTHORS
The complete set of contributors may be found at http://polymer.github.io/CONTRIBUTORS
Code distributed by Google as part of the polymer project is also
subject to an additional IP rights grant found at http://polymer.github.io/PATENTS
-->
<html>
<head>
  <title>KiraIS</title>

  <link rel="shortcut icon" type="image/png" href="http://kukirakira.com/asset/images/favicon.png"/>
  <link rel="icon" type="image/png" href="http://kukirakira.com/asset/images/favicon.png" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">

  <script src="components/platform/platform.js"></script>

  <link rel="import" href="components/core-icons/core-icons.html">
  <link rel="import" href="components/core-item/core-item.html">
  <link rel="import" href="components/core-menu/core-submenu.html">
  <link rel="import" href="components/kirais-scaffold/kirais-scaffold.html">
  

  <link rel="stylesheet" href="public/css/core.css" type="text/css">

  <style>

    body {
      font-family: sans-serif;
      color: #333;
      margin: 0;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      -webkit-tap-highlight-color: rgba(0,0,0,0);
      -webkit-touch-callout: none;
    }

  </style>

</head>
<body unresolved>

  <kirais-scaffold label="KiraIS" touch-action="auto">

    @yield('content')
        
  </kirais-scaffold>
  
  <script>
    // Google Analytics
  </script>  
</body>
</html>
