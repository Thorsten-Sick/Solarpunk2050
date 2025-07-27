<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta description="A generator for Solarpunk 2050 Pioneer NPCs and names">
    <meta name="keywords" content="solarpunk, ttrpg, rpg, pen&paper, rollenspiel, fate, hopepunk, hope, utopia, name generator, character generator">
    <title>Solarpunk 2050 - Pioneer</title>
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
    $appearance = Array("Glowing, green hair.", "Night vision contact lenses (experimental)", "Nerd tattoos", "OLED clothes");
    $name = Array("Shakes", "Melt", "Screws", "Wire", "Tongs", "Iron", "Oxidize", "Spice", "Splice");
    $job = Array("Modular Individual Vehicle Engineer", "Chemicals - non toxic", "Safety instructor", "DJ", "Food hacker", "Hab specialist", "Food artist");
    $event = Array("Party & Science Slam combination", "Battle robots !", "Safety drill party.");
    $location = Array("Chemical Lab", "Cocktail bar", "Scrap yard", "Capsule hotel sleeping area", "Gene edited tree hab", "Party stage", "Tattoo Parlour");
    $food = Array("Extra hot 'almost chili'", "Flavour Balls (Vanilla)", "Flavour Balls - Chicken/Mango", "Flavour Balls - Coconut", "Flavour Balls - Pizza", "Flavour Balls - Pizza Hawaii");

    ?>

<div class="jumbotron vertical-center">
    <div class="container">
    <center><img src="images/Pioneer_header.png" width="400" alt="Header: Pioneers"></center>
    <p><p><p>

    The hyper progressive Pioneers are always tinkering with their newest project.

    <h2>Appearance</h2>

    Their appearance is experimental:

    <blockquote class="randomly_generated">
      <?php echo ($appearance[array_rand($appearance, 1)]); ?>
    </blockquote>

    <h2>Names</h2>
    Nick names picked after events, their favourite tech, ...:
    <blockquote class="randomly_generated">
      <?php echo ($name[array_rand($name, 1)]); ?>
    </blockquote>

    <h2>Jobs</h2>
    Jobs are more like their current project or field of expertise:

    <blockquote class="randomly_generated">
      <?php echo ($job[array_rand($job, 1)]); ?>
    </blockquote>

    <h2>Events</h2>
    Events you could encounter in a Pioneer "lab":

    <blockquote class="randomly_generated">
      <?php echo ($event[array_rand($event, 1)]); ?>
    </blockquote>

    <h2>Locations</h2>
    Typical Locations in a Pioneer settlement/lab:

    <blockquote class="randomly_generated">
      <?php echo ($location[array_rand($location, 1)]); ?>
    </blockquote>

    <h2>Food</h2>
    Typical Pioneer Food:

    <blockquote class="randomly_generated">
      <?php echo ($food[array_rand($food, 1)]); ?>
    </blockquote>


    </div>
</div>

  </body>
</html>