<?php

session_start();

session_destroy();
Header("Location:login.php?durum=cikis");


?>