<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Working with TinyMCE and Responsive File Manager</title>
    <script src="tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        var BASE_URL = "http://localhost/tinymce_6.5.1/"; // use your own base url
        tinymce.init({
            selector: '.editor',
            promotion: false,
            height: 900,
            relative_urls: false,
            remove_script_host: false,
            // document_base_url: BASE_URL,
            content_css: "document",
            content_style: "body { margin: 2rem auto; max-width: 900px; }",
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
            ],
            toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
            toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
            image_advtab: true,

            external_filemanager_path: BASE_URL + "/filemanager/",
            filemanager_title: "Media Gallery",
            external_plugins: {
                "filemanager": BASE_URL + "/filemanager/plugin.min.js"
            }
        })
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <center>
                            <h2>TinyMCE integration with responsive filemanager</h2>
                            <small>TinyMCE version 6.5.1 and Responsive Filemanager version 9.14.0</small>
                        </center>
                        <br>
                    </div>
                    <div class="panel-body">
                        <textarea name="tinymce" class="editor" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>