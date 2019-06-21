<?php

function homepage(){
    $plantjes = get_all_plants();
    include 'homepage.php';
  }

  function alle_plantjes(){
    $plantjes = get_all_plants();
    include 'alle_plantjes.php';
  }
  function zoeken(){
    $searchterm = filter_var($_GET['term'], FILTER_SANITIZE_STRING);
    $zoekresultaten = search_database($searchterm);
    include 'zoekresultaten.php';
  }

  function toon_film(){
    $movie_id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
    $movie = get_movie($movie_id);
    include 'film.php';
  }
