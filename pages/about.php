<?php
$page_title = '👁️ About';

$nav_home_class = '';
$nav_about_class = 'active_page';
$nav_skills_class = '';
$nav_contact_class = '';
?>

<!DOCTYPE html>
<html lang="en">

<?php include('includes/meta.php'); ?>

<body>

    <?php include('includes/header.php'); ?>

    <main>
        <div class="pair-text-image">
            <div class="bio">
                <h2>Thanks for stopping by!</h2>
                <!-- Source: (original work) Jennifer Ai-->
                <p>I am Jennifer - a sophomore studying Information Science, Systems, and Technology interested in concentrating in Data Science and UX Design in the College of Engineering at Cornell University. </p>
                <p>I was born and raised in Plano, Texas, and I have a great passion for being creative through design, art, and crochet. I have always been a creative person- my dream job growing up was to be an artist.</p>

                <!-- Source: (original work) Jennifer Ai-->
                <ul>
                    <li>At Cornell, I am involved with Women in Computing, Society of Women Engineers, and Chinese Student Association.</li>
                    <li>I am a big fan of indie pop and dream pop (Beach House, Phoebe Bridgers, and Men I Trust are my top artists on <a href="https://open.spotify.com/user/jen.ai2014?si=7fc545939cce4ead">Spotify</a>).</li>
                    <li>I aspire to be an Instagram foodie <a href="https://www.instagram.com/jennifereatsfood/">@jennifereatsfood</a> when I am in Texas, New York, or overseas.</li>
                </ul>
            </div>

            <picture class="pic-of-me">
                <!-- Source: (original work) Jennifer Ai-->
                <img src="/public/images/jennifer_ai.jpeg" alt="photo of Jennifer Ai" width="1024" height="768">
            </picture>
        </div>

        <h2>Ask me about...</h2>
        <section class="hobby">
            <!-- Source: (original content) Jennifer Ai-->
            <h3>Crochet</h3>
            <p>I enjoy crocheting a variety of things. From bucket hats to knick knacks, I am always curious to start a new project. In 2021, I entered the Scholastic Art and Writing competition to enter my sweater for the fashion category.</p>
            <div class="hobby-pics">
                <figure class="hobby-A">
                    <!-- Source: (original content) Jennifer Ai-->
                    <img src="/public/images/sweaterfront_orig.jpg" alt="front of crochet sweater" width="571" height="800">
                    <figcaption>matcha + coffee. 2021. (front)</figcaption>
                </figure>
                <figure class="hobby-B">
                    <!-- Source: (original content) Jennifer Ai-->
                    <img src="/public/images/sweaterback_orig.jpg" alt="back of crochet sweater" width="571" height="800">
                    <figcaption>matcha + coffee. 2021. (back)</figcaption>
                </figure>
            </div>
        </section>

        <section class="hobby">
            <!-- Source: (original content) Jennifer Ai-->
            <h3>Painting</h3>
            <p>Ever since I was a kid, I wanted to express my creativity through art. Although I do not have as much time as I did back then, I occasionally like to paint with acrylics.</p>
            <div class="hobby-pics">
                <figure class="hobby-A">
                    <!-- Source: (original content) Jennifer Ai-->
                    <img src="/public/images/duck.png" alt="duck painting" width="582" height="640">
                    <figcaption>Duck</figcaption>
                </figure>

                <figure class="hobby-B">
                    <!-- Source: (original content) Jennifer Ai-->
                    <img src="/public/images/fresh_avocados.jpeg" alt="avocados painting" width="640" height="627">
                    <figcaption>Fresh Avocados</figcaption>
                </figure>
            </div>
        </section>
    </main>

    <?php include('includes/footer.php'); ?>

</body>

</html>
