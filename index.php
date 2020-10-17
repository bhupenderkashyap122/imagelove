<!DOCTYPE html>
<html>
  <head>
    <title>Image Converter in Javascript</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
  </head>
  <body>
      <div class="container">
          <br>
          <h1 class="text-center">Image Converter in Javascript</h1>
          <br>
          <form id="myForm" enctype="multipart/form-data">
              <div class="form-group">
                  <label for="fileurl">Image URL:</label>
                  <input type="text" id="url" placeholder="URL" class="form-control">
              </div>
              <div class="form-group">
                  <label for="image">Select Image:</label>
                  <input type="file" id="image" class="form-control">
                  <img style="display: none;" id="selectedImage"/>
              </div>
              <div class="form-group">
                <label for="format">Select Format:</label>
                <select class="form-control" id="format">
                  <option>JPEG</option>
                  <option>PNG</option>
                  <option>GIF</option>
                </select>
              </div>
              <div class="form-group">
                  <button class="btn btn-danger btn-block">
                      Convert Image
                  </button>
              </div>
          </form>
      </div>
</body>
  <script src="https://cdn.jsdelivr.net/npm/browser-image-converter@0.1.1/dist/index.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="script.js"></script>
  <script>
  
  
  
  
  $(document).ready(function () {
  let imageUrl;

  $("#image").change(function (e) {
    var file= e.target.files[0];
    readImage(file)
  });

  function readImage(file){
    if (file.type && file.type.indexOf('image') === -1) {
        alert("file is not an image")
        return;
      }
    
      const reader = new FileReader();
      reader.addEventListener('load', (event) => {
        imageUrl = event.target.result;
        console.log(imageUrl)
      });
      reader.readAsDataURL(file);
  }

  $("#myForm").submit(function (e) {
    e.preventDefault();

    if ($("#url").val() !== "") {
      imageUrl = $("#url").val();
      convertImage(imageUrl);
    } else {
      convertImage(imageUrl);
    }
  });

  function convertImage(imageUrl) {
    var imageType = $("#format option:selected").text();
    if (browserImageCoverter.downloadImageWithType(imageUrl, imageType)) {
    } 
  }
});
  
  
  
  
  
  </script>
  
  
</html>
