<?php
session_start();
session_destroy();

echo "has salido";

header("refresh:1;url=../");

?>