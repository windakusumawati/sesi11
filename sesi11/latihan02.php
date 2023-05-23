<?php
    $dta[0]["NAMA"] = "Winda";
    $dta[0]["TGL_LAHIR"] = "2000-02-26";
    $dta[0]["JKEL"] = "P";
    $dta[0]["ASAL"] = "Jl. Tukad Batnghari, Denpasar";
    $dta[0]["HOBI"] = "Nonton Film";
    
    $dta[1]["NAMA"] = "Kususma";
    $dta[1]["TGL_LAHIR"] = "2000-03-27";
    $dta[1]["JKEL"] = "L";
    $dta[1]["ASAL"] = "Jl. Tukad Pancoran, Denpasar";
    $dta[1]["HOBI"] = "Membaca";

    $dta[2]["NAMA"] = "Wati";
    $dta[2]["TGL_LAHIR"] = "2001-03-29";
    $dta[2]["JKEL"] = "P";
    $dta[2]["ASAL"] = "Jl. Tukad Yeh Aya, Denpasar";
    $dta[2]["HOBI"] = "Menari";

    $dta[3]["NAMA"] = "Made";
    $dta[3]["TGL_LAHIR"] = "2000-04-27";
    $dta[3]["JKEL"] = "L";
    $dta[3]["ASAL"] = "Jl. Tukad Mawa, Denpasar";
    $dta[3]["HOBI"] = "Memancing";

    $dta[4]["NAMA"] = "Windu";
    $dta[4]["TGL_LAHIR"] = "2000-04-20";
    $dta[4]["JKEL"] = "L";
    $dta[4]["ASAL"] = "Jl. Tukad Barito, Denpasar";
    $dta[4]["HOBI"] = "Olahraga";

    header("content-type: application/json; charset=utf-8");
    echo json_encode($dta);