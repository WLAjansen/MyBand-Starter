<!-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zeldzame plantjes</title>
    <link type="text/css" href="style.css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <nav>
        <ul>
            <li><a href="index.php?page=homepage">Home</a></li>
            <li><a href="index.php?page=alle-plantjes">Alle plantjes</a></li>
        </ul>
    </nav> -->

     <head>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <title>MA-klimaat | Home</title>
  </head>
    <div class="topnav">
  <img class="logo" src="img/logo1.png" alt="">
  <a href="http://26725.hosts2.ma-cloud.nl/bewijzenmap/periode1.4/proj/formula/homepage.php">Home</a>
  <a href="http://26725.hosts2.ma-cloud.nl/bewijzenmap/periode1.4/proj/formula/teams.php">Teams</a>
  <a href="http://26725.hosts2.ma-cloud.nl/bewijzenmap/periode1.4/proj/formula/tracks.php">Tracks</a>
  <a href="http://26725.hosts2.ma-cloud.nl/bewijzenmap/periode1.4/proj/formula/contact.php">Contact</a>
  <div class="search-bar">
    <form action="index.php" method="GET">
      <input type="hidden" name="page" value="zoeken" />
      <input type="text" name="term" value="<?php if(isset($searchterm)): echo $searchterm; endif;?>" placeholder="Search..">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
