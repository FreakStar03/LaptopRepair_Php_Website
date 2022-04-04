

    <?php
      require_once(realpath(dirname(__FILE__) . "/../config.php"));
      $conn = getConnection();
$query = 'SELECT `Name`,`ContactNo`,`appointmentFor`,`AppointmentDescription`,`Date`,`Time`,`Waiting` FROM `appointments` WHERE `Email`="'. $_SESSION['user'] . '"' ;
$result = mysqli_query($conn, $query);

echo '<table class="table table-striped">';
echo '<thead><tr><th></th><th>Name</th><th>ContactNo</th><th>appointmentFor</th><th>AppointmentDescription</th><th>Date</th><th>Time</th><th>Waiting</th></tr></thead>';
while($value = $result->fetch_array(MYSQLI_ASSOC)){
    echo '<tr>';
    echo '<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></td>';
    foreach($value as $element){
        echo '<td>' . $element . '</td>';
    }

    echo '</tr>';
}
echo '</table>';

$result->close();

$conn -> close();

?>
