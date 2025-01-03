<?php
$page_title = '👩🏻‍💻 Projects';

$nav_home_class = 'active_page';
$nav_about_class = '';
$nav_skills_class = '';
$nav_contact_class = '';

?>

<!DOCTYPE html>
<html lang="en">

<?php include('includes/meta.php'); ?>

<body>

    <?php include('includes/header.php'); ?>

    <main class="projects-main">
        <h2>Welcome to my website!</h2>
        <p>I hope you can learn a little bit about my portfolio and about me.</p>


        <h2>Projects</h2>

        <div class="project-A">
            <!-- Source: (original work) Jennifer Ai-->
            <img src="/public/images/happiness_app.png" alt="Happiness App project">
            <div class="project-description">
                <h3>Happiness App</h3>
                <em>Role: Product Designer. Time: Fall 2023.</em>
                <p>
                    I joined a team of student developers and designers to redesign Happiness App. Happiness App allows users to track their daily happiness levels through logging daily entries and sharing them with friends.
                </p>
            </div>
        </div>

        <div class="project-B">
            <!-- Source: (original work) Jennifer Ai-->
            <img src="/public/images/travel_agent.png" alt="Travel Agent">
            <div class="project-description">
                <h3>Intelligent Travel Agent</h3>
                <em>Role: Product Designer. Time: Summer 2023.</em>
                <p>
                    I worked on this project with a team of front-end and back-end iOS developers who used my designs to create a functioning artificial intelligence chat-bot app that suggests travel itineraries and general travel assistance to the user.
                </p>
            </div>

        </div>

        <div class="project-C">
            <!-- Source: (original work) Jennifer Ai-->
            <img src="/public/images/insta_case.png" alt="Instagram Case Study">
            <div class="project-description">
                <h3>Instagram Case Study: Keeping In Touch With Others</h3>
                <em>Role: Product Designer. Time: Fall 2022.</em>
                <p>
                    I created an Instagram concept of adding personalized filters to the Instagram home-feed with the goal of streamlining user experience and engagement with a variety of friends. Check out my design process: <a href="https://medium.com/@jenniferai/instagram-concept-keeping-in-touch-with-people-d16e29e3b239">Case Study Medium Article</a>
                </p>
            </div>
        </div>

    </main>

    <?php include('includes/footer.php'); ?>
</body>

</html>
