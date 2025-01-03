<?php
$page_title = '💬 Contact';

$nav_home_class = '';
$nav_about_class = '';
$nav_skills_class = '';
$nav_contact_class = 'active_page';
?>

<!DOCTYPE html>
<html lang="en">

<?php include('includes/meta.php'); ?>

<body>

    <?php include('includes/header.php'); ?>

    <main>
        <div class="pair-text-image">
            <!-- Source: (original work) Jennifer Ai-->
            <div class="contact">
                <div class="contact-form">
                    <h2>Leave a note!</h2>
                    <form action="/contact/confirmation" method="post" novalidate>
                        <div class="form-label">
                            <label for="request-name">Name:</label>
                            <input type="text" name="name" id="request-name" />
                        </div>
                        <div class="form-label">
                            <label for="request-email">Email:</label>
                            <input type="email" name="email" id="request-email" />
                        </div>
                        <div class="form-label">
                            <label for="request-message">Comments/Questions:</label>
                            <textarea id="request-message" name="message" rows="5" cols="33"></textarea>
                        </div>
                        <div>
                            <input id="request-submit" type="submit" value="Send Message" />
                        </div>
                    </form>
                </div>
                <div class="contact-info">
                    <h2>Or Contact Me Directly</h2>
                    <ul>
                        <li>📧 <a href="mailto:jla292@cornell.edu">jla292@cornell.edu</a></li>
                        <li>📞 +1(214)-277-9317</li>
                        <li>LinkedIn: <a href="https://www.linkedin.com/in/jenniferaiii/">@jenniferaiii</a></li>
                    </ul>
                </div>
            </div>
            <picture class="contact-img">
                <img src="/public/images/sunset.jpg" alt="" width="640" height="480">
            </picture>
        </div>
    </main>

    <?php include('includes/footer.php'); ?>
</body>

</html>
