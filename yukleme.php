    <!-- Çizim Image Yukle -->
    <div>
      <div style="display: flex;">
        <div>
          <h1>Çizim Yükle</h1>
    <input id="cizimfile" type="file"/>
  <br/>
  <br/>
  <a class="btn btn-info" id="cizimresim">Çizim Yükle
</a>
        </div>
        <div>
          <h1>1.Resim  Yükle</h1>
    <input id="resim1file" type="file"/>
  <br/>
  <br/>
  <a class="btn btn-danger" id="resim1resim">Çizim Yükle
</a>
        </div>
        <div>

          <h1>2.Resim  Yükle</h1>
    <input id="resim2file" type="file"/>
  <br/>
  <br/>
  <a class="btn btn-warning" id="resim2resim">Çizim Yükle
</a>

        </div>
</div>
        


<script>


console.log("çalışıyor mu");

document.getElementById('resim2resim').addEventListener('click', function() {
console.log("calisiyor"); 

var files = document.getElementById('resim2file').files;
if (files.length > 0) {
resimikinci(files[0]);
}
});

function resimikinci(file) {
var reader = new FileReader();
reader.readAsDataURL(file);
reader.onload = function () {
 var resimikincib64 = reader.result;
 document.getElementById("inputOzellik-resimikincifile").value = resimikincib64;
 console.log("resimikincibase64"+ resimikincib64);
 
 
};
reader.onerror = function (error) {
 console.log('Error: ', error);
 console.log("hata");
};
}

document.getElementById('resim1resim').addEventListener('click', function() {
console.log("calisiyor"); 

var files = document.getElementById('resim1file').files;
if (files.length > 0) {
resimilk(files[0]);
}
});

function resimilk(file) {
var reader = new FileReader();
reader.readAsDataURL(file);
reader.onload = function () {
 var resimilkb64 = reader.result;
 document.getElementById("inputOzellik-resimilkfile").value = resimilkb64;
 console.log("resimilkbase64"+ resimilkb64);
 
 
};
reader.onerror = function (error) {
 console.log('Error: ', error);
 console.log("hata");
};
}

document.getElementById('cizimresim').addEventListener('click', function() {
console.log("calisiyor"); 

var files = document.getElementById('cizimfile').files;
if (files.length > 0) {
cizim(files[0]);
}
});

function cizim(file) {
var reader = new FileReader();
reader.readAsDataURL(file);
reader.onload = function () {
 var cizimb64 = reader.result;
 document.getElementById("inputOzellik-cizimfile").value = cizimb64;
 console.log("cizimbase64"+ cizimb64);
 
 
};
reader.onerror = function (error) {
 console.log('Error: ', error);
 console.log("hata");
};
}
</script>
  
       
</div>  