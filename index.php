<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Get your dummy image</title>
  </head>
  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/base-min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:200">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <style>
  body{
    padding-top: 20px;
    padding-left: 50px;
  }
  h2{
    font-family: raleway;
  }
  </style>

  <body>
    <h2>Get your dummy image!</h2>
    <form action="proceed.php" method="post" class="pure-form pure-form-aligned" style="font-family:roboto;">
    <fieldset>
        <div class="pure-control-group">
            <label>Size</label>
            <input type="number" placeholder="Width" name="width" required="true"> x
            <input type="number" placeholder="Height" name="height" required="true">
            <!-- <span class="pure-form-message-inline">This is a required field.</span> -->
        </div>

        <div class="pure-control-group">
            <label>background color</label>
            <input type="color" name="bg-color">
        </div>

        <div class="pure-control-group">
            <label>Text color</label>
            <input type="color" name="text-color">
        </div>

        <div class="pure-control-group">
            <label>Text <sup>optional</sup></label>
            <input type="text" placeholder="Enter something here..." name="text">

        </div>

        <div class="pure-control-group">
          <label>Type</label>
            <select name="type" required="true">
              <option value="jpg">Jpeg</option>
              <option value="png">Png</option>
            </select>
        </div>

        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Submit</button>
        </div>


    </fieldset>
</form>
  </body>
</html>
