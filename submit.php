
<?php

$conn = mysqli_connect('localhost', 'root', '', 'gym');

if (!$conn) {
    die("sorry, we failed to connect!" . mysqli_connect_error());
} else {
    echo "Sucessfully connected";
    echo "<br>";
};

$name   = $_POST['name'];
$gender = $_POST['gender'];
$number = $_POST['number'];
$age    = $_POST['age'];

$sql = "INSERT INTO `gym_data` (`sn`, `name`, `gender`, `number`, `age`) VALUES (NULL, '$name', '$gender', '$number', '$age')";

if ($conn->query($sql) == true) {
    echo "form Submited sucessfully";
} else {
    echo "Erroe:", $sql . "<br>" . $conn->error;
}

?>