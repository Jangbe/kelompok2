<?php

$conn = mysqli_connect('localhost', 'root', '') or die ('Connection failed!');
mysqli_select_db($conn, 'db_bank') or die ('Database not found');