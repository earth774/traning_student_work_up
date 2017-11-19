<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



<script type = "text/javascript" src = "//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.js"></script>
<script type = "text/javascript" src = "//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.js"></script>
<title>Upload Form</title>
</head>
<body>
    <!-- AJAX Response will be outputted on this DIV container -->
    <div class = "upload-image-messages"></div>

    <div class = "col-md-6">
        <!-- Generate the form using form helper function: form_open_multipart(); -->
        <?php echo form_open_multipart('upload/do_upload', array('class' => 'upload-image-form'));?>
        <?PHP for($i=1;$i<=5;$i++){ ?>
            <input type="file" multiple = "multiple" accept = "image/*" class = "form-control" name="uploadfile[]" size="20" /><br />
            <?PHP } ?>
            <input type="submit" name = "submit" value="Upload" class = "btn btn-primary" />
        

            <label class="custom-file">
              <input type="file" id="file" class="custom-file-input">
              <span class="custom-file-control"></span>
            </label>

        </form>

        <script>                   
        jQuery(document).ready(function($) {

            var options = {
                beforeSend: function(){
                    // Replace this with your loading gif image
                    $(".upload-image-messages").html('<p><img src = "<?php echo base_url() ?>images/loading.gif" class = "loader" /></p>');
                },
                complete: function(response){
                    // Output AJAX response to the div container
                    $(".upload-image-messages").html(response.responseText);
                    $('html, body').animate({scrollTop: $(".upload-image-messages").offset().top-100}, 150);
                   
                }
            }; 
            // Submit the form
            $(".upload-image-form").ajaxForm(options); 

            return false;
           
        });
        </script>
    </div>
</body>
</html>