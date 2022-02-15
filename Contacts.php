<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Include/CSS/Header.css">
        <link rel="stylesheet" href="Include/CSS/Contacts.css">
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
		<link rel="stylesheet" href="Include/CSS/footer.css">
    </head>
    <body>
        <?php include 'Include/PHP/Header.php' ?>
    <div class="contact-form">
    <form action="insert"method="post">
<p>Name</p><input type="text" name="name"><br>
<p>Email</p><input type="text" name="email"><br>
<p>Contact</p><input type="text" name="contact"><br>
<p>District</p><input type="text" name="district"><br>
<p>Message</p><input type="text" name="message"><br><br><br><br>
<input type="send" value="send" class="button">
</form>
</div>
<br/>
        <?php include 'Include/PHP/Footer.php' ?>
    </body>
</html>