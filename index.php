<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Oluşturucu</title>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>  
          <center>
          <h1> PDF Oluşturucu</h1>
          </center>
              
    <div class="container">

      <?php include 'yukleme.php';?>





    <form enctype="multipart/form-data" method="POST" action="func.php">
      <div class="container">
        <div class="row">
          <div class="col">

                     <?php include 'genelozellik.php';?>

          <div class="col">
           

                     <?php include 'teknikozellik.php';?>


           
              <div class="input-group mb-3">
                      <?php include 'ozellikicon.php' ;?>

</div>

               <input type="text" class="form-control" style="display: none;" id="inputOzellik-cizimfile" name="inputOzellik-cizimfile">
               <input type="text" class="form-control" style="display: none;" id="inputOzellik-resimilkfile" name="inputOzellik-resimilkfile">
               <input type="text" class="form-control" style="display: none;" id="inputOzellik-resimikincifile" name="inputOzellik-resimikincifile">


               <h3>Ürün Resimi Yükle</h3>
              <input type="text" id="inputOzellik-urunresim" name="inputOzellik-urunresim">

              <input type='file' id="imgInp" />

                     <img id="blah" src="#" width="20%" alt="your image" /> 


       
    </div>
                  <input type="submit" name="submit"  class="btn btn-primary btn-lg" value="Oluştur">

    
</body>

<script>
    
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    console.log("deneme" + input.files[0]);
    
    reader.onload = function(e) {
      console.log(e);
      $('#blah').attr('src', e.target.result);
      console.log(e.target.result);
      document.getElementById("inputOzellik-urunresim").value = e.target.result;
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imgInp").change(function() {
  readURL(this);
});

</script>

<div>
</div>
</html>

