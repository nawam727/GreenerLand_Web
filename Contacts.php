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
        <div class="set-up-location">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.5758403540012!2d80.0393842151876!3d6.821329095069968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2523b05555555%3A0x546c34cd99f6f488!2sNSBM%20Green%20University!5e0!3m2!1sen!2slk!4v1645124231306!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
        <div class="get-in-touch">
        <h1 class="headline">Get In Touch</h1><br>
            <ul>
                  If you have any questions or need help use the below contact form to get in touch with us or call for more information.
                  We are ready to assist you in building a greener world.
            </ul>
        <ul>
             <b>Monday – Saturday | 8.30AM – 5.30PM<b>
        </ul>
        </div>
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
    <div class="form-group">
   <label>Message:</label>
               <textarea name="message"></textarea></div>
<button type="send" value="send" >Send</button>
</form>
</div>
<br>
        <?php include 'Include/PHP/Footer.php' ?>
    </body>
</html>