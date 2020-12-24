<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    /*
inputOzellik-renk
inputOzellik-cozunurluk
inputOzellik-panel
inputOzellik-power
*/
    function get_data(){
        $datae = array();
        $datae[] = array(

            'title' => $_POST['inputOzellik-title'],
            'subtitle' => $_POST['inputOzellik-subtitle'],

            'renk' => $_POST['inputOzellik-renk'],
            'cozunurluk' => $_POST['inputOzellik-cozunurluk'],
            'panel' => $_POST['inputOzellik-panelbilgi'],
            'aktifalan' => $_POST['inputOzellik-aktifalan'],
            'enboyorani' => $_POST['inputOzellik-enboyorani'],
            'pikselalani' => $_POST['inputOzellik-pikselalani'],
            'yenilemehizi' => $_POST['inputOzellik-yenilemehizi'],
            'parlaklik' => $_POST['inputOzellik-parlaklik'],
            'kontrast' => $_POST['inputOzellik-kontrast'],
            'gorusacisi' => $_POST['inputOzellik-gorusacisi'],
            'sicaklik' => $_POST['inputOzellik-sicaklik'],
            'lambaomru' => $_POST['inputOzellik-lambaomru'],
            'menuislem' => $_POST['inputOzellik-menuislem'],
            'arayuz' => $_POST['inputOzellik-arayuz'],
            'power' => $_POST['inputOzellik-power'],
            'fourk' => $_POST['inputOzellik-fourk'],
            'darbe' => $_POST['inputOzellik-darbe'],
            'voltaj110' => $_POST['inputOzellik-voltaj110'],
            'tochit' => $_POST['inputOzellik-tochit'],
            'cpu'=> $_POST['inputOzellik-cpu'],
            'intmemory'=> $_POST['inputOzellik-intmemory'],
            'builtmemory'=> $_POST['inputOzellik-builtmemory'],
            'dahilirom'=> $_POST['inputOzellik-dahilirom'],
            'decodecozunurluk'=> $_POST['inputOzellik-decodecozunurluk'],
            'isletimsistemi'=> $_POST['inputOzellik-isletimsistemi'],
            'oyunmodu'=> $_POST['inputOzellik-oyunmodu'],
            'agdestegi'=> $_POST['inputOzellik-agdestegi'],
            'videooynatici'=> $_POST['inputOzellik-videooynatici'],
            'goruntuformati'=> $_POST['inputOzellik-goruntuformati'],
            'usbport'=> $_POST['inputOzellik-usbport'],
            'sistemguncellemesi'=> $_POST['inputOzellik-sistemguncellemesi'],
            'wifibt'=> $_POST['inputOzellik-wifibt'],
            'enternet'=> $_POST['inputOzellik-enternet'],
            'sdkart'=> $_POST['inputOzellik-sdkart'],
            'arayuz'=> $_POST['inputOzellik-arayuz'],
            'lvdscikisi'=> $_POST['inputOzellik-lvdscikisi'],
            'hdmicikisi'=> $_POST['inputOzellik-hdmicikisi'],
            'sesvevideocikisi'=> $_POST['inputOzellik-sesvevideocikisi'],
            'rtc'=> $_POST['inputOzellik-rtc'],
            'zamanlama'=> $_POST['inputOzellik-zamanlama'],
            'seriport'=> $_POST['inputOzellik-seriport'],




            'uruncizim' => $_POST['inputOzellik-cizimfile'],


            'urunresim' => $_POST['inputOzellik-urunresim'],
            'urunilkresim' => $_POST['inputOzellik-resimilkfile'],
            'urunikinciresim' => $_POST['inputOzellik-resimikincifile'],
);
        return json_encode($datae);
    }
    $name = "urunbilgi";
   $file_name = $name . '.json';
   
   if(file_put_contents(
    "$file_name", get_data())) {
        echo $file_name . ' dosyasi olusturuldu test1';
       header("Location: prepdf.php");
        exit();

    } 
    else {
        echo ' bir seyler ters gitti.';
    }
}


?>
