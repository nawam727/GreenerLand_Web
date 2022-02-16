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
<p>Contact</p><input type="text" name="contact"><br><br>
       <label for="district">District</label>
                 <select id="district" name="District">
                              <option value=" "> </option>
                              <option value="Ampara">Ampara</option>
                              <option value="Anuradhapura">Anuradhapura</option>
                              <option value="Badulla">Badulla</option>
                              <option value="Batticaloa">Batticaloa</option>
                              <option value="Colombo">Colombo</option>
                              <option value="Galle">Galle</option>
                              <option value="Gampaha">Gampaha</option>
                              <option value="Hambanthota">Hambanthota</option>
                              <option value="Jaffna">Jaffna</option>
                              <option value="KalUthara">Kaluthara</option>
                              <option value="Kandy">Kandy</option>
                              <option value="kegalle">Kegalle</option>
                              <option value="Kilinochchi">Kilinochchi</option>
                              <option value="Kurunegala">Kurunegala</option>
                              <option value="Mannar">Mannar</option>
                              <option value="Matale">Matale</option>
                              <option value="Matara">Matara</option>
                              <option value="Monaragala">Monaragala</option>
                              <option value="Mullaitivu">Mullaitivu</option>
                              <option value="Nuwaraeliya">Nuwaraeliya</option>
                              <option value="Polonnaruwa">Polonnaruwa</option>
                              <option value="Puttalam">Puttalam</option>
                              <option value="Rathnapura">Rathnapura</option>
                              <option value="Trincomalee">Trincomalee</option>
                              <option value="Vavuniya">Vavuniya</option>
                </select><br><br>
<p>Message</p><input type="text" name="message"><br><br><br><br>
<button type="send" value="send" >Send</button>
</form>
</div>
<br>
        <?php include 'Include/PHP/Footer.php' ?>
    </body>
</html>