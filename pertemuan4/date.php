<?php
//DATE
//untuk menampilkan tanggal dengan format tertentu
   //  echo date("l, d-m-y");

//TIME
//UNIX Timestamp / EPOCH time 
//detik yang sudah berlalu sejak 1 januari 1970
   // echo time();
   //echo date("d-m-y", time()-60*60*24*100);

   
   //mktime
   //membuat detik sendiri
   //mktime (0,0,0,0,0,0)
   //jam,menit,detik,bulan,tanggal,tahun
   //echo date("l", mktime(0,0,0,2,27,2005));

   //strtotime
   //echo date("l", strtotime("27 feb 2005"))

   ?>