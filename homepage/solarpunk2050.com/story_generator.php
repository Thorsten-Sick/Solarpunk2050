<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta description="A generator for Solarpunk 2050 stories">
    <meta name="keywords" content="solarpunk, ttrpg, rpg, pen&paper, rollenspiel, fate, hopepunk, hope, utopia, story generator, adventure generator">
    <title>Solarpunk 2050 - Story generator</title>
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
    $motivation = Array("The protagonists need Resource Points.", "The UN calls and asks for help.", "Something important got stolen.", "A friend needs help", "Someone lost a bet.", "A boring day in a Norm Hive. But there is a quest shown on the Hive controller.", "A Lost child ran away in a Norm Hive and is confused.", "Pioneers are running emergency training for Nuclear/Biological/Chemical accidents in the lab.");

    $story = Array("A party needs to be organized - until tomorrow.", "A Modular Individual Vehicle needs to be tested.", "A Norm Ceres fails to produce the ordered food.", "The Norm swords fighting club wants to grow.", "A mobile kidney dialysis needs to be shipped to a community suffering from PFAS poisoning.", "A nomadic Lost tribe needs someone to transport things trough the wilds. Some of them will join.", "Disaster recovery: A long time ago a zoo got flooded and the animals are free.", "A Romeo and Juliet story between two of the factions.", "A community needs something from a person they define as enemy - and the characters organising the deal learn the whole story.", "A Norm solar cell factory becomes the victim of a terror attack - maybe the Acolytes of the Invisible Hand ?", "The AI of a Norm hive got twisted and starts behaving evil - did the Acolytes of the Invisible Hand interfere ?", "A pioneer (maybe secretly a Acolyte of the Invisible Hand ?) want to de-extinct a species. Maybe an animal still alive in 2000.", "The UN plans a re-settlement of a abandoned colony called Roanoke. No one knows why everyone fled/died. But the buildings look perfect to settle there again.", "A Pioneer community breeding animals for their stem cells (which are used by a Norm Ceres to produce fur, meat and milk) want a new animal for their animal reserve. And the animal is special (wales have milk, ...)", "A Pioneer is secretly tuning Cyberware to have 'larger than live' features. Which is illegal. Stop them or get you Cyberware modified ?", "A Lost needs a very specific part for a tinker project. An old break from a Trabant. And sends the protagonists to a treasure hunt.", "An area has low biodiversity. This must be remedied to allow human resettlement. There are only mosquitoes, stinging nettles and jellyfish.");

    $twist = Array("More people want to get involved and leave their mark.", "A Pioneer added more features - and glitches - than agreed.", "Norm tech was not properly maintained - and no one so far has finished the required tutorials in the Hive controller.", "Extras are needed");

    $drama = Array("Someone breaks down from exhaustion.", "Essential tech breaks and needs urgent repair.", "Wildlife interferes.", "The Hive controller get an update", "A Lost found books that need protection and evac.", "..and there is a love triangle involved among the cast.");

    $showdown = Array("Showdown is a dance battle or similar skill test in front of an audience.", "Exhausted break down of all involved people, an old friend cares for everyone by cooking and the problem is solved with a long chat.", "There is a fight.", "Caffeine and tinkering session.");

    $reward = Array("The protagonists get what was promised.", "The characters gain new friends", "An antagonist needs to think about his actions - and will call back.", "Big reputation gain - they are now famous.", "The reward for a job well done is: More tasks", "A Lost will pay with a stash of old 'valuables'.", "A Norm will send money that can be spent on nice-to-have things in a Hive.", "The protagonists get the chance to be part of their favourite band's performance.", "A Pioneer invention is named after the protagonists.", "A team tattoo", "A puppy cuddle party.", "Beer, food and a party.");


    ?>

<div class="jumbotron vertical-center">
    <div class="container">

    <h1>Story Generator</h1>

    Solarpunk 2050 contains a handcrafted campaign - but if you need just a short inspiration, maybe you are lucky with these random Solarpunk 2050 seeds:

    <h2>Motivation</h2>

    <blockquote class="randomly_generated">
      <?php echo ($motivation[array_rand($motivation, 1)]); ?>
    </blockquote>

    <h2>Story</h2>

    <blockquote class="randomly_generated">
      <?php echo ($story[array_rand($story, 1)]); ?>
    </blockquote>

    <h2>Twist</h2>

    <blockquote class="randomly_generated">
      <?php echo ($twist[array_rand($twist, 1)]); ?>
    </blockquote>

    <h2>Drama</h2>

    <blockquote class="randomly_generated">
      <?php echo ($drama[array_rand($drama, 1)]); ?>
    </blockquote>

    <h2>Showdown</h2>

    <blockquote class="randomly_generated">
      <?php echo ($showdown[array_rand($showdown, 1)]); ?>
    </blockquote>

    <h2>Reward</h2>

    <blockquote class="randomly_generated">
      <?php echo ($reward[array_rand($reward, 1)]); ?>
    </blockquote>



    </div>
</div>
  </body>
</html>