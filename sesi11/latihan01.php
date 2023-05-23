<?php
    $dta["NAMA"] = "winda";
    $dta["TGL_LAHIR"] = "2000-02-26";
    $dta["JKEL"] = "P";
    $dta["ASAL"] = "Jl. Tukad Batnghari, Denpasar";
    $dta["HOBI"] = "Nonton Film";
    

    header("content-type: application/json; charset=utf-8");
    echo json_encode($dta);