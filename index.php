<!DOCTYPE html>
<html lang="en">

<!-- <head> -->
    <?php
        $page_title = "Home";
        include('./components/head.php');
    ?>
<!-- </head> -->

<body>
    <main>
        <h1>Home Page</h1>
        <h3>Featuring Amazing Disney Poster Designs</h3>
        <?php include('./components/nav.php'); ?>

        <div class="grid">
            <div class="grid-item">
                <h1>Scuttle Poster</h1>
                <img class="grid-img" src="./assets/img/scuttle.jpeg" alt="">
                <p>Scuttle is a seagull (gannet in the live action adaptation) and friend of Ariel. They appear in the film as an expert on human objects with whom Ariel consults about items she salvages, though their identifications consist of nonsense.</p>
            </div>
            <div class="grid-item">
                <h1>Ariel Poster</h1>
                <img class="grid-img" src="./assets/img/ariel.webp" alt="">
                <p>Ariel's most defining feature is her long, flowing, thick, bright red hair. From the waist down, she has a green horizontal fish-like tail with sea-green scales and sea-foam green fins and a matching V-shaped waist-line resembling fish-lips that reveals her midriff and her belly button.</p>
            </div>
            <div class="grid-item">
                <h1>Sebastian Poster</h1>
                <img class="grid-img" src="./assets/img/sebastian.jpeg" alt="">
                <p>Horatio Thelonious Ignacious Crustaceous Sebastian is a red Jamaican crab and a servant of King Triton, and also his main musical composer. His main song is "Under the Sea". He is voiced by Samuel E. Wright in the films, the TV series and the Sebastian segments from the Marsupilami series.</p>
            </div>
            <div class="grid-item">
                <h1>Ursula Poster</h1>
                <img class="grid-img" src="./assets/img/ursula.webp" alt="">
                <p>Ursula, also known as The Sea Witch or Vanessa, is the main antagonist of the 2023 musical fantasy film The Little Mermaid, the live-action remake of the 1989 animated feature film of the same name. She is a cecaelia sea witch and the younger sister of King Triton.</p>
            </div>
            <div class="grid-item">
                <h1>Flounder Poster</h1>
                <img class="grid-img" src="./assets/img/flounder.webp" alt="">
                <p>Ursula, also known as The Sea Witch or Vanessa, is the main antagonist of the 2023 musical fantasy film The Little Mermaid, the live-action remake of the 1989 animated feature film of the same name. She is a cecaelia sea witch and the younger sister of King Triton.</p>
            </div>
            <div class="grid-item">
                <h1>Prince Eric Poster</h1>
                <img class="grid-img" src="./assets/img/prince eric.jpeg" alt="">
                <p>Ursula, also known as The Sea Witch or Vanessa, is the main antagonist of the 2023 musical fantasy film The Little Mermaid, the live-action remake of the 1989 animated feature film of the same name. She is a cecaelia sea witch and the younger sister of King Triton.</p>
            </div>
        </div>
        <?php include('./components/footer.php'); ?>
    </main>
</body>