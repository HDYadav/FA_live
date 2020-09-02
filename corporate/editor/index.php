<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>A Simple Page with CKEditor</title>
        <!-- Make sure the path to CKEditor is correct. -->
        <script src="ckeditor/ckeditor.js"></script>
        <script type="text/javascript">
			$(document).ready(function() {
				CKEDITOR.replace( 'editor1',
				{

					fullPage : true,
					uiColor : '#9AB8F3',
					toolbar : 'MyToolbar'

				});
				
				
			});
			CKEDITOR.instances['editor'].setData(abch);
		</script>
    </head>
    <body>
        <form>
            <textarea name="editor1" id="editor1" rows="10" cols="80">
                
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
        </form>
    </body>
</html>