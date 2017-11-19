<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>




 <form>
    <div class="form-group row has-success">
      <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control form-control-success" id="inputHorizontalSuccess" placeholder="name@example.com">
        <div class="form-control-feedback">Success! You've done it.</div>
        <small class="form-text text-muted">Example help text that remains unchanged.</small>
      </div>
    </div>
    <div class="form-group row has-warning">
      <label for="inputHorizontalWarning" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control form-control-warning" id="inputHorizontalWarning" placeholder="name@example.com">
        <div class="form-control-feedback">Shucks, check the formatting of that and try again.</div>
        <small class="form-text text-muted">Example help text that remains unchanged.</small>
      </div>
    </div>
    <div class="form-group row has-danger">
      <label for="inputHorizontalDnger" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control form-control-danger" id="inputHorizontalDnger" placeholder="name@example.com">
        <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
        <small class="form-text text-muted">Example help text that remains unchanged.</small>
      </div>
    </div>



      <label class="custom-file">
        <input type="file" id="file" class="custom-file-input">
        <span class="custom-file-control"></span>
      </label>

<script type="text/javascript">
  $('.custom-file-input').on('change',function(){
  $(this).next('.form-control-file').addClass("selected").html($(this).val());

</script>
<style type="text/css">
  #customFile .custom-file-control:lang(en)::after {
  content: "Select file...";
}
</style>


<div class="container">
    <label class="custom-file" id="customFile">
        <input type="file" class="custom-file-input" id="exampleInputFile" aria-describedby="fileHelp">
        <span class="custom-file-control form-control-file"></span>
    </label>
</div>





  </form>





  </body>
</html>