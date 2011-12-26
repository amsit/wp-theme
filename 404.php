<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Error 404 :: Page not found</title>
  <style type="text/css">
    body {
      font-size: 62.5%;
      font-family: Verdana, Geneva, sans-serif;
      background: #EFF2F3;
    }
    a {
      color: #036;
      outline: none;
      text-decoration: none;
      border-bottom: 1px dotted gray;
    }
    a:hover {
      border-bottom-style: solid;
    }
    #centerlayer {
      position: absolute;
      width: 274px;
      height: 402px;
      left: 50%;
      top: 50%;
      margin-left: -137px;
      margin-top: -201px;
      overflow: hidden;
    }
    .digit {
      font-size: 10em;
      text-align: center;
      background: #999;
      color: #666;
      padding-top: 120px;
    }
    .letter {
      text-align: center;
      font-size: 5em;
      color: #999;
      background: #666;
      padding-bottom: 10px;
    }
    .content {
      font-size: 1.7em;
      text-align: center;
      color: gray;
    }
      .content p {
        margin: 10px 0 0 0;
        /*padding: 0;*/
      }
  </style>
</head>
<body>
<div id="centerlayer">
  <div class="digit">404</div>
  <div class="letter">error</div>
  <div class="content">
    <p>Oops! This link appears broken!</p>
    <p>Please, Go to &#8594; <a href="<?php bloginfo('url'); ?>">home page</a></p>
    <p>Or back to <a href="javascript:history.go(-1)">previous page</a></p>
  </div>
</div>
</body>
</html>
