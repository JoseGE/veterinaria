<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $titulo;?></title>
    <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.css" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- script para soporte de input date html  -->
    <script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
    <script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
    <script>
      webshims.setOptions('waitReady', false);
      webshims.setOptions('forms-ext', {types: 'date'});
      webshims.polyfill('forms forms-ext');
    </script>
    <style >
    .navbar{
      margin-bottom: 0;
    }
    body{
          background: #ecf0f1;
    }
    ul.gallery {
      padding: 0 2.85714%;
      list-style: none
    }

    ul.gallery:after {
      clear: both;
      content: "";
      display: table
    }

    ul.gallery li {
      width: 24%;
      float: left;
      -webkit-transform: translateZ(0);
      transform: translateZ(0);
      margin-bottom: 2.85714%;
      box-shadow: 0 1px 2px 0 rgba(0,0,0,.3);
      border-radius: 2px;
      background: #66ff40;
      color: #fff;
      text-align: center;
      font-size: 17px;
      font-weight: 900;
      border-radius: 5px;
      margin: auto 5px 5px auto;
    }
    ul.gallery li span{
      display: block;
      padding: 5px;
      word-wrap: break-word;
    }
    ul.gallery li span h3{
      word-wrap: break-word;
    }
    ul.gallery li img{
      max-height: 190px;
      width: 100%;
      background: #fff;
    }
    ul.gallery{
      flex-wrap: nowrap;
      flex-wrap: wrap;
      flex-wrap: wrap-reverse;
      flex-wrap: inherit;
      flex-wrap: initial;
      flex-wrap: unset;
    }
    #lista_mascotas{
        background: #76d3ff;
        padding: 10px;
        box-shadow: 0px 0px 11px 0px #3f3f3f;
    }
    </style>
  </head>
  <body>
    <?php $this->load->view('partes/header');?>
    <div class="container">
