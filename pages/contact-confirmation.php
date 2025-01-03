<?php
$page_title = '💬 Contact';

$nav_home_class = '';
$nav_about_class = '';
$nav_skills_class = '';
$nav_contact_class = 'active_page';

$form_name = $_POST['name'];
$form_email = $_POST['email'];
$form_message = $_POST['message'];
?>

<!DOCTYPE html>
<html lang="en">

<?php include('includes/meta.php'); ?>

<body>

    <?php include('includes/header.php'); ?>

    <main>
        <h2>Thank you for leaving a note!</h2>
        <p>
            I have recieved your message, and I will get back to you shortly.
        </p>

        <h2>Message Confirmation</h2>
        <ul>
            <li>Your name: <?php echo htmlspecialchars($form_name); ?></li>
            <li>Your email: <?php echo htmlspecialchars($form_email); ?></li>
            <li>Your message: <?php echo htmlspecialchars($form_message); ?></li>
        </ul>
    </main>

    <?php include('includes/footer.php'); ?>
</body>
</html>
