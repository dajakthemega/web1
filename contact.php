<?php
print '

<h1>Contact</h1>
<div>
    <iframe class="maps" width="100%" height="500" src="https://maps.google.com/maps?q=New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no"></iframe>
</div>
<div>
    <form  name="login" action="login.php" method="POST">
        <label for="fname">First Name</label>
        <br>
        <input type="text" name="firstname" placeholder="Your name.." required>
        <br>

        <label for="lname">Last Name</label>
        <br>
        <input type="text" name="lastname" placeholder="Your last name.." required>
        <br>
        <label for="lname">Your E-mail</label>
        <br>
        <input type="email" name="email" placeholder="Your e-mail.." required>
        <br>
        <label for="subject">Subject</label>
        <br>
        <textarea name="subject" placeholder="Write something.." style="height:80px"></textarea>
        <br>
        <label for="country">Country</label>
        <br>
        <select name="country">
          <option value="">Please select</option>
          <option value="BE">Belgium</option>
          <option value="HR" selected>Croatia</option>
          <option value="LU">Luxembourg</option>
          <option value="HU">Hungary</option>
        </select>       
        <br>
        <input style="width:auto" type="submit" value="Submit">
    </form>
'
?>