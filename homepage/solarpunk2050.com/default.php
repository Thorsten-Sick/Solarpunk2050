<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta description="Solarpunk 2050 is a Fate based Pen&Paper RPG in a hopeful setting.">
    <meta name="keywords" content="solarpunk, ttrpg, rpg, pen&paper, rollenspiel, fate, hopepunk, hope, utopia">
    <title>Solarpunk 2050</title>
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

<div class="jumbotron vertical-center">

    <?php
    $lost_personalities = Array("Sven and Tanja traded a pig and 5 of their chicken for an old book on home repairs and some tools. Now they fix an old farm they found in the woods.",
    "Ned is in breeding and training animals. He just managed to teach rats some tricks. A trained rat is currently available for: a broken motor bike",
    "Jenny - lifting the engine block a bit - this stupid car has a microcontroller. And guess what's broken ? Find a smiliar one and I can replace it. Stupid microcontrollers.",
    "Librarian Nepomuk: Audience ! Gather ! The night is clear and we will share the book 'Moby Dick' !",
    "Cook Nico: Thanks. Put the food you gathered on the tarp and let's see what the camp will have for dinner tonight.");
    $lost_quotes = Array("Five chickn' and this sturdy hat for your rusty V8 starter box.", "If you would have read your Machiavelli you would know why I am getting my shotgun now. Do you also need a weapon ? ",
      "This old house is a beauty. Gonna take us two families three months to fix it.", "Did the Norm guest again gather the poisonous berries for dinner ?",
      "Hey guests ! Do you have any weapons with you ? Knives don't count. No ? So everyone picks a gun from this heap. We will do weapon practice in 1h hour. The first watch shift this night is mine and you will join.",
    "Those Norms traded me a box of those food bars for the old truck they need for a film. I just got rich !",
    "Get those monster truck wheels to the creepy Pioneers. Best time to find their camp is at night. Look for those crazy glowing trees they planted around it.");

    $pioneer_personalities = Array("Duck is a safety expert: I got the hardest job in this lab. Trust me. So here are the emergency boxes I prepared: 1 is poisoning, 2 is fire fighting, 3 is burn injuries, 4 is lost limbs, 5 is for electric accidents.",
      "Wheels manages the car-lab: You gonna go to  the Norm town ? Mind they get scared by individual transport. Over there are the modules. Do you need help building your ride ?",
      "Bed & Breakfast experiments with new forms of housing: I tried to combine two of those hotel capsule and combined them for couples. Sound absorption is next. After that I can extend the concept to 3 and for. I already got requests.",
      "Lights! is a person who never talks. Lights! instead prefers to communicate their current feelings in thrilling light and soundscapes every night.",
      "Bread and Butter are two food nerds who constantly experiment with new flavours. You will always find something experimental to drink and eat in their kitchen. Do not forget to complete a questionnaire after consumption. And 5 hour later."
      );
    $pioneer_quotes = Array("If we take a V4.3 motor controller but add the distributor I soldered we can run two more individually powered wheels to this car and replace the dumb ones. Maybe we should stop in 5km and check if anything melts.",
    "This drone would be so much more fun if we would attach those monster truck wheels the Lost had in their camp. Do you know what they would want for them ?",
    "The bioluminescent tree is fantastic. And finally bright enough. Let's focus on the whole spectrum next.");

    $norm_personalities = Array("Sheera is in film making the next few weeks: I will make a movie next ! About Lost ! I ceres prepared me a box of those horrible ever-lasting food bars to trade for one of their nostalgic trucks.",
    "Tschäd is fully focussed on the social networks of five connected Hives, calls himself reporter: And this is when you saw the Lost demolish the the vending machine with the free food to steal the food...does this make any sense to you ?",
    "Cleo trains with her broadsword group for years now: You have my sword !",
    "Tscheffri spends 4 hours a day as barrista to meet new people and have great conversations: There is a guy I know - he should be able to tell me more about ancient egyptian texts. It is one of his hobbies. He started it after he saw 'The mummy 9'",
  );
    $norm_quotes = Array("In the last film I saw it worked that way.", "No idea if I should start another hob or pick a hobby. I got the feeling it is getting boring.", "Let's meet at the Ceres. They just grew new cherry pulp from the north italian cell line the Pioneers sold us last year.", "Ceres is offering a new cooking session 'Cooking with lab grown elephant meat'. The best 3 recipes will be added to the automated menu. Two food hackers from the Pioneers will join.");

    ?>

    <div class="container">
    <center><img src="images/Solarpunk_text_mit_logo.png" width="500"></center>
    <center><h1>build an awesome future</h1></center>
    <p>
    <center><h2>a FATE TTRPG setting</h2></center>

    <div class="container pt-5">
    You and your friends are fighting in the Solarpunk revolution. Turning cities, regions and communities into futuristic visions. Fighting the disasters caused by the Lemmings. The good news is you are a diverse group of people with different skills. The bad news is: You visions for a better future are also very diverse.

    But the Solarpunk transformation is not yet complete. You and your friends will face many challenges to finish what humanity has started. Imagine your own utopia. And build it - your way as: <p>
    </div>


    <div class="container pt-5">
    <center><img src="images/Lost_header.png" width="400" alt="Header: Lost"></center>
    If you are a survival expert, explorer of the Lemmings ruins, a fighter or a scholar of old wisdom you are following the <b>Lost</b> philosophy and <b>Bushcraft</b> is your unique skill.<p>
    <center><img src="images/lost_repairing_generator.webp" width="500" alt="A old Lost man repairs an old generator."></center>
    Typical Lost:
    <blockquote class="randomly_generated">
      <?php echo ($lost_personalities[array_rand($lost_personalities, 1)]); ?>
    </blockquote>
    Quote:
    <blockquote class="randomly_generated">
      <?php echo ($lost_quotes[array_rand($lost_quotes, 1)]); ?>
    </blockquote>
    </div>


    <div class="container pt-5">
    <center><img src="images/Pioneer_header.png" width="400" alt="Header: Pioneer"></center>
    If you are constantly pressing for progress, party and new experiences, you are a scientist, engineer, tinkerer or something similar - you follow the <b>Pioneer</b> philosophy and your unique skill is <b>Prototyping</b>.<p>
    <center><img src="images/pioneer_bioscientist.webp" width="500" alt="A Pioneer in a lab coat. Working in a rooftop garden doing scientific experiments."></center>
    Typical Pioneer:
    <blockquote class="randomly_generated">
      <?php echo ($pioneer_personalities[array_rand($pioneer_personalities, 1)]); ?>
    </blockquote>
    Quote:
    <blockquote class="randomly_generated">
      <?php echo ($pioneer_quotes[array_rand($pioneer_quotes, 1)]); ?>
    </blockquote>
    </div>


    <div class="container pt-5">
    <center><img src="images/Norms_header.png" width="400" alt="Header: Norms"></center>
    As a <b>Norm</b> you live in a fully automated city with post-scarcity. Thanks to a Hive controller you are connected to the Hive and everyone else in the city. Constantly. It is like magic. And your unique skill is <b>Hive control</b>.<p>
    <center><img src="images/norm_drone_delivery.png" width="500" alt="A modern city, a delivery drone is flying between large buildings"><p></center>
    Typical Norm:
    <blockquote class="randomly_generated">
      <?php echo ($norm_personalities[array_rand($norm_personalities, 1)]); ?>
    </blockquote>
    Quote:
    <blockquote class="randomly_generated">
      <?php echo ($norm_quotes[array_rand($norm_quotes, 1)]); ?>
    </blockquote>
</div>

    </div>
</div>
  </body>
</html>