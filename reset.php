<?php

session_start();
session_unset();

header("Location: guess.php");
die();