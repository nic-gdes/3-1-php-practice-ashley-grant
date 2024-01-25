<!DOCTYPE html>
<html lang="en">

<?php $page_title = "Contact";
    include('./components/head.php');
?>

<?php
if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name'];)
    $email = htmlspecialchars($_POST['email']);//this $email comes from the input name
    $message = htmlspecialchars($_POST['message']);
}

echo $name . ", " . $email . ", " . $message;

?>

<body>
    <h1>Contact Page</h1>
    <?php include('./components/nav.php'); ?>
    <?php include('./components/footer.php'); ?>
</body>
</html>

<!-- Bryan made a form.html with this on it below -->
<form action="">
    <input type="text" />
    <input type="email" />
    <textarea name="" id="" cols="30" rows="10"></textarea>
    <!-- <input type="color" />
    <input type="date" />
    <input type="number" />
    <input type="tel" /> -->
    <input type="submit" value="Send form" />
</form>
