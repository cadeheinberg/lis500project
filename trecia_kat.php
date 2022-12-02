<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trecia Kat | Assignment #2</title>
    <link rel="icon" href="images/Wisconsin_Badgers_logo.svg.png">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&family=Open+Sans:wght@300;400&display=swap');
    </style>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="trecia_kat.css">
</head>

<body>
    <?php
    // https://www.w3schools.com/php/func_array_key_exists.asp
    // buttons to set either light or dark mode inspired theme
    function light_mode()
    {
        echo '<body style="background-color:#f8edeb;">';
    }
    function dark_mode()
    {
        echo '<body style="background-color:#A17C6B;">';
    }
    if (array_key_exists('light_mode', $_POST)) {
        light_mode();
    } else if (array_key_exists('dark_mode', $_POST)) {
        dark_mode();
    }
    ?>
    <!--header of the HTML page-->
    <header>
        <h1>Assignment #2 LIS 500</h1>
        <!--navigation of the HTML pages to get to other pages on the site-->
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="angie_jones.html">Angie Jones</a></li>
                <li><a href="trecia_kat.html">Trecia Kat</a></li>
            </ul>
        </nav>
    </header>
    <!--display lucky number to user using php-->
    <div class="fun-header">
        <h1>Your Lucky Number Today is <?php
                                        //https://www.w3schools.com/php/func_math_rand.asp
                                        //generates a random number between 0 and 100
                                        $curr = rand(0, 100);
                                        echo "$curr";
                                        ?>!</h1>
        <!-- buttons to set either light or dark mode inspired theme -->
        <form method="post">
            <input type="submit" name="light_mode" class="button" value="Light Mode" />
            <input type="submit" name="dark_mode" class="button" value="Dark Mode" />
        </form>
    </div>
    <!--picture of trecia with a title above and quote beneath the picture-->
    <div class="trecia-content">
        <section class="trecia-content-title-container">
            <div>
                <h1>Trecia Kat</h1>
                <img src="images/trecia_kat.png" alt="Picture of Trecia Kat">
                <h3>"I Am A Self-Taught Developer; Here’s How I Landed My First Tech Job, Remotely"</h3>
            </div>
        </section>
        <!--background info about trecia-->
        <section class="trecia-content-blurb">
            <h2 class="trecia-content-blurb-title">Background</h2>
            <article>
                <p><span class="bold-please">Tracia Kat</span> is South African by nationality, and 20 years old. She is
                    a self-taught
                    developer who
                    landed her first tech job using connections she made on Twitter. Before starting her self learning
                    journey, Tracia was enrolled at a private institution working towards getting an IT degree. However,
                    after 3 years of being enrolled she left her institution after realizing she was practically
                    teaching herself everything, especially due to covid distance learning and a shortage of lecturers.
                    “I thought, why should I pay for education when I can get it free online?”. Her parents were
                    supportive, but much of her extended family had no faith in her and were
                    disappointed.
                </p>
                <p>
                    <span class="bold-please">She first started web development</span> with a crash course, and
                    dedicated to the
                    #100daysofcode challenge
                    which she documented on <a href="https://twitter.com/TreciaKS">Twitter</a>. During this time, she
                    faced many ups and downs, compared herself to
                    others, and even gave up for 3 months straight and had to come back. Tracia's biggest weakness she
                    believes
                    is being inconsistent, which is difficult to manage while she was simultaneously struggling with
                    anxiety and depression. However, she found motivation in a creative way. By using
                    Vincent Van Goghs "De Sterrennacht" as her computer wall paper, she motivated herself to work harder
                    to be able to make money and afford a
                    plane ticket to the Museum of Modern Art in New York. With this new found motivation, Tracia went on
                    to complete <a href="https://www.freecodecamp.org/">Freecodecamp.orgs</a>
                    responsive web design course. Then used JavaScript.info to learn JS and W3schools.com for tutorials,
                    examples, and exercises. She also used Scrimba which is her favorite and is still the doing frontend
                    career
                    path on it. While documenting her journey on twitter, she has garnered over 25k followers and her
                    niche
                    is CSS, much of which she shares with her twitter followers.
                </p>
                <p><span class="bold-please">All of this Twitter activity</span> eventually paid off, when one day
                    Tracia got an unexpected
                    message from
                    Dan Hampton on Twitter with an offer for a part time
                    free lance job to help him on. She only knew HTML and CSS at the time but the job helped her
                    pick up other useful skills like REACT.
                    After a year that contract ended and she got a DM from Daniel Phiri, Developer Relations Lead of
                    Strapi, offering her a job for developer advocate on his team.
                    She was upfront about not having a degree and he comforted her. She had to do a 6 round interview
                    process and got the job!
                    After securing such a highly sought after job, Tracia struggles with imposter syndrome from time to
                    time for not going to college like her colleagues but there must be a
                    reason she was hired. Rome was not built in a day!
                </p>
                <p><span class="bold-please">Reference: </span><a target="_blank" href="https://peopleofcolorintech.com/break-into-tech/i-am-a-self-taught-developer-and-i-landed-my-first-tech-job-remotely-heres-how/">I Am A Self-Taught Developer; Here’s How I Landed My First Tech Job, Remotely</a></p>
            </article>
        </section>
        <article id="newsletter-article">
            <p>
            <form action="trecia_kat_process.php" method="post">
                To learn more about Trecia Kat, sign-up for our email newsletter:
                <input name="name" type="text" placeholder="First Name">
                <input id="newsletter-article-submit" type="submit">
            </form>
            </p>
        </article>
    </div>

    <!--footer of the HTML page-->
    <footer id="myFooter">
        <p>Created by: Cade</p>
        <p>LIS 500 UW Madison</p>
        <?php
        //https://www.w3schools.com/php/phptryit.asp?filename=tryphp_func_getdate
        // Puts the current date in the footer
        $mydate = getdate(date("U"));
        echo "<p> $mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
        ?>
    </footer>
</body>

</html>