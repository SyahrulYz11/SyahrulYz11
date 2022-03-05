<?php
    // Date
    // Untuk menampilkan tanggal tertentu
    echo date("l, d-M-Y");

    echo "<hr>";

    // time
    // UNIX Timestamp / EPOCH time
    // detik yang sudah berlalu sejak 1 januari 1970
    // echo time();
    echo date("l, d-M-Y", time()+60*60*24*100);
    
    echo "<hr>";

    // mktime
    // membuat detik sendiri
    // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    echo date("l", mktime(0,0,0,3,15,2003));

    echo "<hr>";

    // strtotime
    echo date("l", strtotime("15 mar 2003"));

    // String
    // strlen()
    // strcmp()
    // explode()
    // htmlspacialchars()

    // Utility
    // var_dump()
    // isset()
    // empty()
    // die()
    // sleep()

?>