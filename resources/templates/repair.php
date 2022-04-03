<div id="container form_cont">
    <!--This is a division tag for body container-->

    <div id="body_header">
      <!--This is a division tag for body header-->
      <h1>Appointment Request Form</h1>
      <?php
        $product = $_GET["p"];
      echo "<p>Make your appointments more easier for $product</p>";
        ?>
    </div>
    <form id='repairForm' name="registerProductForm">
      <fieldset>
        <legend><span class="number">1</span>Your basic details</legend>
        <label for="name">Name*:</label>
        <input type="text" id="name" name="Name" placeholder="Atchyut (only first names)" required pattern="[a-zA-Z0-9]+">

        <label for="mail">Email*:</label>
        <input type="email" id="mail" name="Email" placeholder="abc@xyz.com" required>

        <label for="tel">Contact Num:</label>
        <input type="tel" id="tel" placeholder="Include country code" name="ContactNo">

        <label for="skype_name">Skype username:</label>
        <input type="text" id="skype_name" name="Skypeusername" placeholder="@atchyutn" pattern="[a-zA-Z0-9]+">



        <legend><span class="number">2</span>Appointment Details</legend>
        <label for="appointment_for">Appointment for*:</label>
        <select id="appointment_for" name="appointmentFor" required>
          <option value="Hardware">Hardware</option>
          <option value="Software">Software</option>
          <option value="Unknown">Unknown</option>
          <option value="System Check">System Check </option>
          <option value="Software Update">Software Update</option>
          <option value="Hardware Upgrade">Hardware Upgrade</option>
 
        </select>
        <label for="appointment_description">Appointment Description:</label>
        <textarea id="appointment_description" name="AppointmentDescription" placeholder="I wish to get an appointment to skype for resolving a software problem."></textarea>
        <label for="date">Date*:</label>
        <input type="date" name="Date" value="" required></input>
        <br>
        <label for="time">Time*:</label>
        <input type="time" name="Time" value="" required></input>
        <br>
        <label for="duration">How Long??(Days)</label></br>
        <input type="radio" name="Waiting" value="1" checked> 1
        <input type="radio" name="Waiting" value="2"> 2
        <input type="radio" name="Waiting" value="week"> week
        <input type="radio" name="Waiting" value="more"> more
      </fieldset>
      <button type="submit">Request For Appointment</button>
    </form>
  </div>
