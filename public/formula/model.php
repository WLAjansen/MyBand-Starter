<?php

function get_latest_plants() {
    $pdo = dbConnect();

    $query     = 'SELECT * FROM `inhoud`';
    $statement = $pdo->query( $query );

    return $statement;

 }

 function get_all_plants() {
    $pdo = dbConnect();

    $query     = 'SELECT * FROM `inhoud`';
    $statement = $pdo->query( $query );

    return $statement;

 }

 function cars() {
    $pdo = dbConnect();
    $query     = 'SELECT * FROM `inhoud`';
    $statement = $pdo->query( $query );

    return $statement;

 }
 function get_movie($id){

   $pdo = dbConnect();

   $query     = 'SELECT * FROM `movies` WHERE ID= :id';
   $statement = $pdo->prepare( $query );
   $params = [
     'id' => $id
   ];
   $statement->execute($params);
   $movie = $statement->fetch();

   return $movie;

   }


function search_database($searchterm){

  $results = [];
  $pdo = dbConnect();

  $sql = 'SELECT * FROM movies WHERE movie_title LIKE :search_term OR movie_genre LIKE :search_term';

  $statement = $pdo->prepare($sql);
  $params = [
    'search_term' => '%' . $searchterm . '%'

  ];
  $statement->execute($params);
  foreach($statement as $movie){

    $rij = [];
    $rij['type'] = 'movie';
    $rij['title'] = $movie['movie_title'];
    $rij['description'] = 'A movie with genre ' . $movie['movie_genre'];

    $results[] = $rij;
  }

  //Zoeken naar people
  $sql = 'SELECT * FROM people
          WHERE
          first_name LIKE :search_term OR
          last_name LIKE :search_term OR
          city LIKE :search_term OR
          description LIKE :search_term
  ';

  $statement = $pdo->prepare($sql);
  $params = [
    'search_term' => '%' . $searchterm . '%'

  ];
  $statement->execute($params);
  foreach($statement as $person){

    $rij = [];
    $rij['type'] = 'person';
    $rij['title'] = $person['first_name'] . ' ' . $person['last_name'];
    $rij['description'] = $person['description'];

    $results[] = $rij;
  }

  //Zoeken naar cars
  $sql = 'SELECT * FROM people
          WHERE
          car-name LIKE :search_term OR
          author LIKE :search_term OR
          description LIKE :search_term OR
          image LIKE :search_term
  ';

  $statement = $pdo->prepare($sql);
  $params = [
    'search_term' => '%' . $searchterm . '%'

  ];
  $statement->execute($params);
  foreach($statement as $car){

    $rij = [];
    $rij['type'] = 'car';
    $rij['title'] = $person['car-name'] . ' ' . $person['last_name'];
    $rij['description'] = $person['description'];

    $results[] = $rij;
  }

  return $results;
}
