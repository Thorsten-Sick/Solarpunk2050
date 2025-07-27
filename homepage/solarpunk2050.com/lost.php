<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta description="A generator for Solarpunk 2050 Lost NPCs and names">
    <meta name="keywords" content="solarpunk, ttrpg, rpg, pen&paper, rollenspiel, fate, hopepunk, hope, utopia, name generator, character generator">
    <title>Solarpunk 2050 - The Lost</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/static/styles.css">
  </head>


  <body>
    <?php
    include "navbar.php"
    ?>

    <?php
    $appearance = Array("Traditional clothes", "Workshop clothes", "Hunting gear", "Full beard", "Long, unwashed hair", "Callus on the hands");
    $name = Array("Caesar", "Elisabeth", "George", "Friedrich the small", "Albert", "Marie");
    $job = Array("Librarian and Priest", "Hunter", "Field cook", "Cook", "Woodworker", "Smith", "Car repair man", "Guard", "Expedition member", "First responder", "Farmer", "Goat herder", "Animal trainer");
    $event = Array("Evening ritual: Story time", "Classical theatre", "Jam session", "Open Pot");
    $location = Array("A camp in the woods", "An old restaurant, renovated", "Ruins and explorers", "A tent", "A caravan trek", "The high secure library-bus");
    $food = Array("Deer", "Deer, wild potatoes and mushroom sauce", "Goose, in clay coat", "Vegetable-inna-pot", "German Gumbo", "Goat cheese with fresh bread and herbs");
    ?>

<div class="jumbotron vertical-center">
    <div class="container">
    <center><img src="images/Lost_header.png" width="400" alt="Header: Lost"></center>
    <p><p><p>

    Lost are survival specialists, historians, librarians, low tech cottage core and family

    <h2>Appearance</h2>

    Their appearance is traditional/practical:

    <blockquote class="randomly_generated">
      <?php echo ($appearance[array_rand($appearance, 1)]); ?>
    </blockquote>

    <h2>Names</h2>
    Names are very often historical names:

    <blockquote class="randomly_generated">
      <?php echo ($name[array_rand($name, 1)]); ?>
    </blockquote>

    <h2>Jobs</h2>
    Jobs are more often tasks they do in their community:

    <blockquote class="randomly_generated">
      <?php echo ($job[array_rand($job, 1)]); ?>
    </blockquote>

    <h2>Events</h2>
    Events you could encounter in a Lost camp:

    <blockquote class="randomly_generated">
      <?php echo ($event[array_rand($event, 1)]); ?>
    </blockquote>

    <h2>Locations</h2>
    Typical Locations in a Lost settlement/camp:

    <blockquote class="randomly_generated">
      <?php echo ($location[array_rand($location, 1)]); ?>
    </blockquote>

    <h2>Food</h2>
    Typical Lost Food:

    <blockquote class="randomly_generated">
      <?php echo ($food[array_rand($food, 1)]); ?>
    </blockquote>


    </div>
</div>

  </body>
</html>