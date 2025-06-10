<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta description="A generator for Solarpunk 2050 Norm NPCs and names">
    <meta name="keywords" content="solarpunk, ttrpg, rpg, pen&paper, rollenspiel, fate, hopepunk, hope, utopia, name generator, character generator">
    <title>Solarpunk 2050 - Norm</title>
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
    $appearance = Array("Hive controller integrated in glasses", "Hive controller attached to ear as jewellery", "Sari, green, lab silk", "A Neon-west", "Oiled hair", "Victorian outfit");
    $name = Array("Tscharlien", "Hügo", "Niels", "Gus");
    $job = Array("Barrista", "Dog sitter", "Trainer", "Chef", "Festival manager", "Gardener - japanese gardens", "Doctor", "theatre artist");
    $hobby = Array("Broadsword fighter", "Knitting", "watercolour painting", "Model planes");
    $event = Array("Open air festival", "Ceres - cooking recipe brainstorming", "Street music party", "Meet your stars");
    $location = Array("Ceres", "Hive core", "Boat dock", "Deer garden", "Bus stop", "Next free vending machine", "Street musician corner");
    $food = Array("Hydroponic salad", "Slices of lab grown Banana", "Tiger milk (lab grown)", "Tiger milk yoghurt with strawberries (both lab grown)");
    ?>

<div class="jumbotron vertical-center">
    <div class="container">
    <center><img src="images/Norms_header.png" width="400"></center>
    <p><p><p>

    Norms live in Hive cities in a well connected post scarcity community.

    <h2>Appearance</h2>

    Their appearance is modern and fashion oriented:

    <blockquote class="randomly_generated">
      <?php echo ($appearance[array_rand($appearance, 1)]); ?>
    </blockquote>

    <h2>Names</h2>
    Names are from TV shows or trendy. Most of the Norms are illiterate so spelling errors sneak in:

    <blockquote class="randomly_generated">
      <?php echo ($name[array_rand($name, 1)]); ?>
    </blockquote>

    <h2>Jobs</h2>
    Jobs are for entertainment. These fully automated do not need many people working. But there are lots of opportunities to work for fun:

    <blockquote class="randomly_generated">
      <?php echo ($job[array_rand($job, 1)]); ?>
    </blockquote>

    <h2>Hobbies</h2>
    In addition to jobs people have hobbies and learn unusual skills:

    <blockquote class="randomly_generated">
      <?php echo ($hobby[array_rand($hobby, 1)]); ?>
    </blockquote>

    <h2>Events</h2>
    Events you could encounter in a Norm Hive:

    <blockquote class="randomly_generated">
      <?php echo ($event[array_rand($event, 1)]); ?>
    </blockquote>

    <h2>Locations</h2>
    Typical Locations in a Norm Hive:

    <blockquote class="randomly_generated">
      <?php echo ($location[array_rand($location, 1)]); ?>
    </blockquote>

    <h2>Food</h2>
    Typical Norm Food served in a fully automated Ceres:

    <blockquote class="randomly_generated">
      <?php echo ($food[array_rand($food, 1)]); ?>
    </blockquote>


    </div>
</div>

  </body>
</html>