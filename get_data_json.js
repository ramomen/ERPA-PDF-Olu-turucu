 //getting form data from json
alert("selam arkadaşım");




  function urunbilgi(data) {

    const urun = data[0];
    console.log("json verileribaslangic"+urun);
    
    console.log(urun);
    
    console.log("json verileribtis"+urun);
    
 
    if(urun.endustri == "on"){
      document.querySelector("#endustri").style.display = "block";

      console.log("endustri var");
  
    }
    else{
      console.log("endustri yoh");
    }

  
   if(urun.data40inch == "on"){
    document.querySelector("#data40inch").style.display = "block";

    console.log("40inç var");

  }
  else{
    console.log("40inç yoh");
  }
 
  if(urun.data43inch == "on"){
    document.querySelector("#data43inch").style.display = "block";

    console.log("43inç var");

  }
  else{
    console.log("data43inç yoh");
  }

  if(urun.data46inch == "on"){
    document.querySelector("#data46inch").style.display = "block";

    console.log("46inç var");

  }
  else{
    console.log("46inç yoh");
  }

  if(urun.data49inch == "on"){
    document.querySelector("#data49inch").style.display = "block";

    console.log("49inç var");

  }
  else{
    console.log("49inç yoh");
  }

  if(urun.data55inch == "on"){
    document.querySelector("#data55inch").style.display = "block";

    console.log("55inç var");

  }
  else{
    console.log("55inç yoh");
  }

if(urun.data65inch == "on"){
  document.querySelector("#data65inch").style.display = "block";

  console.log("65inç var");

}
else{
  console.log("65inç yoh");
}

  if(urun.data75inch == "on"){
    document.querySelector("#data75inch").style.display = "block";

    console.log("75inç var");

  }
  else{
    console.log("75inç yoh");

  if(urun.data86inch == "on"){
    document.querySelector("#data86inch").style.display = "block";

    console.log("86inç var");

  }
  else{
    console.log("86inç yoh");
  }

   if(urun.data98inch == "on"){
    document.querySelector("#data98inch").style.display = "block";

    console.log("98inç var");

  }
  else{
    console.log("98inç yoh");
  }

    if(urun.darbe == "on"){
      document.querySelector("#darbe").style.display = "block";
      console.log("darbe var")
  
    }
    else{
      console.log("darbe yoh icon yok");
    }
    
    if(urun.tochit == "on"){
      document.querySelector("#tochit").style.display = "block";
      console.log("tochit var")
  
    }
    else{
      console.log("tochit yoh icon yok");
    }
   
    if(urun.inch32 == "on"){
      document.querySelector("#inch32").style.display = "block";
      console.log("32 inch var")
  
    }
    else{
      console.log("32inch yoh icon yok");
    }

    if(urun.voltaj110 == "on"){
      document.querySelector("#voltaj110").style.display = "block";
      console.log("110 Vvar")
  
    }
    else{
      console.log("110v yoh icon yok");
    }
  
    



   
    document.getElementById('urunrenk').innerHTML = urun.renk;
    document.getElementById('urunbaslik').innerHTML = urun.title;
    document.getElementById('urunaltbaslik').innerHTML = urun.subtitle;
    document.getElementById('urunbaslik2').innerHTML = urun.title;
    document.getElementById('urunaltbaslik2').innerHTML = urun.subtitle;
    document.getElementById('uruncozunurluk').innerHTML = urun.cozunurluk;
    document.getElementById('uruncozunurluk2').innerHTML = urun.cozunurluk;
    document.getElementById('urunsicaklik2').innerHTML = urun.sicaklik;



    document.getElementById('urunpanel').innerHTML = urun.panel;
  
  
    document.getElementById('urunpower').innerHTML = urun.power;
    document.getElementById('urunaktifalan').innerHTML = urun.aktifalan;
    document.getElementById('urunenboyorani').innerHTML = urun.enboyorani;
    document.getElementById('urunpikselalani').innerHTML = urun.pikselalani;
    document.getElementById('urunparlaklik').innerHTML = urun.parlaklik;
    document.getElementById('urunkontrast').innerHTML = urun.kontrast;
    document.getElementById('urungorusacisi').innerHTML = urun.gorusacisi;
    document.getElementById('urunsicaklik').innerHTML = urun.sicaklik;
    document.getElementById('urunlambaomru').innerHTML = urun.lambaomru;
    document.getElementById('urunmenuislem').innerHTML = urun.menuislem;
    document.getElementById('urunarayuz').innerHTML = urun.arayuz;
    document.getElementById('urunpower').innerHTML = urun.power;
    document.getElementById('urunyenilemehizi').innerHTML = urun.yenilemehizi;
   

    document.querySelector("#sayfaisim").innerHTML = urun.title;
    document.querySelector("#sayfasubtitle").innerHTML = urun.subtitle;
    document.querySelector("#uruncizim").src = urun.uruncizim;
   




    
    

  
    $ ( document ).ready(function() {
      var urunimg = document.getElementById("urunresim");
      urunimg.src = urun.urunresim;
      console.log(urunimg);
      console.log(urun.urunresim);
      var urunczm = document.getElementById("uruncizim");
      urunczm.src = urun.uruncizim;
      var  urunilkresim = document.getElementById("urunilkresim");
      urunilkresim.src = urun.urunilkresim;
      var  urunikinciresim = document.getElementById("urunikinciresim");
      urunikinciresim.src = urun.urunikinciresim;

      });
     
      teknikoz(urun);  

  
  };
  
function teknikoz(urun){
    console.log("teknikoz fonk. çalışıyor");
    console.log("teknikoz() fonk :" + urun.cpu);
  
    
     //alert(uruncpu);
    document.getElementById('urunintmemory').innerHTML = urun.intmemory;
    document.getElementById('urundahilirom').innerHTML = urun.dahilirom;
    document.getElementById('urundecodecozunurluk').innerHTML = urun.decodecozunurluk;
    document.getElementById('urunisletimsistemi').innerHTML = urun.isletimsistemi;
    document.getElementById('urunagdestegi').innerHTML = urun.agdestegi;
    document.getElementById('urungoruntuformati').innerHTML = urun.goruntuformati;
    document.getElementById('urunusbport').innerHTML = urun.usbport;
    document.getElementById('urunsistemguncellemesi').innerHTML = urun.sistemguncellemesi;
    document.getElementById('urungps').innerHTML = urun.gps;
    document.getElementById('urunwifibt').innerHTML = urun.wifibt;
    document.getElementById('urunenternet').innerHTML = urun.enternet;
    document.getElementById('urunsdkart').innerHTML = urun.sdkart;
    document.getElementById('urunarayuz').innerHTML = urun.arayuz;
    document.getElementById('urunlvdscikisi').innerHTML = urun.lvdscikisi;
    document.getElementById('urunhdmicikisi').innerHTML = urun.hdmicikisi;
    document.getElementById('urunsesvevideocikisi').innerHTML = urun.sesvevideocikisi;
    document.getElementById('urunrtc').innerHTML = urun.rtc;
    document.getElementById('urunzamanlama').innerHTML = urun.zamanlama;
    document.getElementById('urunseriport').innerHTML = urun.seriport;
    

}







}

  fetch('urunbilgi.json').then(response =>
    response.json()).then(data => urunbilgi(data));
  
































