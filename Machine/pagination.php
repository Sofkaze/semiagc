<?php 
    
    class AdminKeyword {
    
        function cariPosisi($batas) {
            if(empty($_GET['pages'])) {
                $posisi=0;
                $_GET['pages']=1;
            } else {
                $posisi = ($_GET['pages']-1) * $batas;
            } return $posisi; 
        }
        function jumlahHalaman($jmldata, $batas) {
            $jmlhalaman = ceil($jmldata/$batas);
            return $jmlhalaman;
        }
        function navHalaman($halaman_aktif, $jmlhalaman) {
            $link_halaman = "";
            for ($i=1; $i<=$jmlhalaman; $i++) {
              if ($i == $halaman_aktif) {
                $link_halaman .= "<a class='btn btn-success'><b>$i</b></a> ";
              } else{
                $baseurl = "http://" . $_SERVER['SERVER_NAME']."/"; 
                $link_halaman .= "<a class='btn btn-success' href=".$baseurl."./Administrator/keywords.php/$i>$i</a>";
              }
            $link_halaman .= " ";
            }
            return $link_halaman;
        }
    }


    class homePage {
    
        function cariPosisi($batas) {
            if(empty($_GET['pages'])) {
                $posisi=0;
                $_GET['pages']=1;
            } else {
                $posisi = ($_GET['pages']-1) * $batas;
            } return $posisi; 
        }
        function jumlahHalaman($jmldata, $batas) {
            $jmlhalaman = ceil($jmldata/$batas);
            return $jmlhalaman;
        }
        function navHalaman($halaman_aktif, $jmlhalaman) {
            $link_halaman = "";
            for ($i=1; $i<=$jmlhalaman; $i++) {
              if ($i == $halaman_aktif) {
                $link_halaman .= "<a class='btn btn-success'><b>$i</b></a> ";
              } else{
                $baseurl = "http://" . $_SERVER['SERVER_NAME']."/"; 
                $link_halaman .= "<a class='btn btn-primary btn-xs' href=".$baseurl."./page/$i>$i</a>";
              }
            $link_halaman .= " ";
            }
            return $link_halaman;
        }
    }

    class tagsPage {
    
        function cariPosisi($batas) {
            if(empty($_GET['pages'])) {
                $posisi=0;
                $_GET['pages']=1;
            } else {
                $posisi = ($_GET['pages']-1) * $batas;
            } return $posisi; 
        }
        function jumlahHalaman($jmldata, $batas) {
            $jmlhalaman = ceil($jmldata/$batas);
            return $jmlhalaman;
        }
        function navHalaman($halaman_aktif, $jmlhalaman) {
            $link_halaman = "";
            for ($i=1; $i<=$jmlhalaman; $i++) {
              if ($i == $halaman_aktif) {
                $link_halaman .= "<a class='btn btn-success'><b>$i</b></a> ";
              } else{
                $baseurl = "http://" . $_SERVER['SERVER_NAME']."/"; 
                $link_halaman .= "<a class='btn btn-primary btn-xs' href=".$baseurl."./tags/".$_GET['tag']."/$i>$i</a>";
              }
            $link_halaman .= " ";
            }
            return $link_halaman;
        }
    }