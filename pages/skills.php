<?php
$page_title = '💻 Skills';

$nav_home_class = '';
$nav_about_class = '';
$nav_skills_class = 'active_page';
$nav_contact_class = '';
?>

<!DOCTYPE html>
<html lang="en">

<?php include('includes/meta.php'); ?>

<body>

    <?php include('includes/header.php'); ?>

    <main>
        <h2>Technical Skills</h2>
        <div class="pair-text-image">
            <section class="skills">
                <!-- Source: (original content) Jennifer Ai-->
                <div class="design-skills">
                    <h3>Design</h3>
                    <ul>
                        <li>Figma</li>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>PHP</li>
                        <li>UI/UX</li>
                        <li>User research</li>
                        <li>Prototyping</li>
                    </ul>
                </div>
                <div class="programming-skills">
                    <h3>Programming</h3>
                    <ul>
                        <li>SQL</li>
                        <li>Java</li>
                        <li>Python</li>
                        <li>R</li>
                        <li>C/C++</li>
                        <li>Object Oriented Programming</li>
                    </ul>
                </div>
            </section>

            <section class="awards">
                <h3>Achievements and Awards</h3>
                <ul>
                    <li>Fall 2023 College of Engineering Dean's List</li>
                    <li>2023 DFW IT Champion Competition: Rising Star Award</li>
                    <li>2021 Scholastic Art and Writing: National Silver Medal Award</li>
                    <li>2021 President&#39;s Volunteer Service Award: Silver Medal</li>
                </ul>
            </section>

            <!-- Source: (original content) Jennifer Ai-->
            <picture class="cornell-img">
                <img src="/public/images/cornell.jpeg" alt="" width="960" height="1280">
            </picture>
        </div>

        <section>
            <!-- Source: (original content) Jennifer Ai-->
            <h3>Leadership Experience</h3>
            <p>Women in Computing at Cornell | <em>Vice President of Outreach</em> | December 2023-Present</p>
            <ul>
                <li>Facilitate weekly Girls Who Code Python course by coordinating and teaching middle and high school students
                <li>Manage volunteers through recruiting, training, and adapting to constructive feedback and ideas</li>
                <li>Maintain e-board expectations by attending meetings, volunteering for events, and collaborating with e-board</li>
            </ul>
            <p>Cornell Undergraduate Advising | <em>Peer Advisor</em> | Fall 2023-Present</p>
            <ul>
                <li>Cultivate support for first-year engineering students by providing resources in engineering seminar ENGRG 1050</li>
                <li>Coordinate with engineering faculty advisors and present models for studying and extracurricular involvement</li>
                <li>Collaborate with fellow peer advisors to better mentor prospective Information Science engineering students
                    transitioning from high school to college</li>
            </ul>
            <p>Society of Women Engineers | <em>Outreach Committee Member</em> | Fall 2022-Present</p>
            <ul>
                <li>Attend monthly general body meetings learning about different opportunities and career paths within engineering</li>
                <li>Volunteer at a local elementary school to teach Scratch coding and elementary engineering concepts</li>
            </ul>
        </section>
    </main>

    <?php include('includes/footer.php'); ?>
</body>

</html>
