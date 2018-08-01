<!DOCTYPE HTML>
<html>

<head>
    <title>Family Fun Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />

    <link href="/ad/css/bootstrap.css" rel="stylesheet">
    <link href="/ad/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/ad/fonts/fontello/css/fontello.css" rel="stylesheet">
    <link href="/ad/plugins/select2/select2.min.css" rel="stylesheet">
    <link href="/ad/css/style.css" rel='stylesheet' type='text/css' />
    <link href="/ad/css/custom.css" rel="stylesheet">


</head>

<body>

    <div id="wrapper">

        <nav class="navbar-default navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1>
                    <a class="navbar-brand" href="/admin" target="_blank">Family Fun</a>
                </h1>


            </div>


            <a href="<?php echo e(route('logout')); ?>" class="btn pull-right" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                Logout
            </a>

            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo e(csrf_field()); ?>

            </form>
            <div class=" border-bottom">

                <div class="clearfix"></div>

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">

                            <li>
                                <a href="/admin" class=" hvr-bounce-to-right">
                                    <i class="fa fa-dashboard nav_icon "></i>
                                    <span class="nav-label black">Dashboards</span>
                                </a>
                            </li>
                            <li>
                                <a href="/admin/menu" class=" hvr-bounce-to-right">
                                    <i class="fa fa-sliders nav_icon "></i>
                                    <span class="nav-label black">Menu</span>
                                </a>
                            </li>
                            <li>
                                <a href="/admin/account" class=" hvr-bounce-to-right">
                                    <i class="fa fa-clone nav_icon"></i>
                                    <span class="nav-label black">Enter User Account</span>
                                </a>
                            </li>
                            <li>
                                <a href="/admin/saved-posts" class=" hvr-bounce-to-right">
                                    <i class="fa fa-clone nav_icon"></i>
                                    <span class="nav-label black">Saved Posts</span>
                                </a>
                            </li>




                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">

            <div class="content-main">
                <div class="banner">
                    <h2>
                        <a href="/admin">Home</a>
                        <i class="fa fa-angle-right"></i>
                        <span>Dashboard</span>

                    </h2>
                    <?php if($flash=session('message')): ?>
                    <div class="alert alert-success" id="flash-message">
                        <?php echo e($flash); ?>

                    </div>
                    <?php endif; ?>
                </div>
                <div class="content-top">


                    <?php echo $__env->yieldContent('content'); ?>




                </div>

                <div class="copy">
                    <p>&copy; 2016. All Rights Reserved</p>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>



    <script type="text/javascript" src="/ad/plugins/jquery.min.js"></script>
    <script type="text/javascript" src="/ad/js/bootstrap.min.js"></script>

    <!-- Modernizr javascript -->
    <script type="text/javascript" src="/ad/plugins/modernizr.js"></script>

    <!-- jQuery REVOLUTION Slider  -->
    <script type="text/javascript" src="/ad/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="/ad/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Isotope javascript -->

    <!-- Owl carousel javascript -->
    <script type="text/javascript" src="/ad/plugins/owl-carousel/owl.carousel.js"></script>

    <!-- Magnific Popup javascript -->
    <script type="text/javascript" src="/ad/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Appear javascript -->
    <script type="text/javascript" src="/ad/plugins/jquery.appear.js"></script>

    <!-- Parallax javascript -->
    <script src="/ad/plugins/jquery.parallax-1.1.3.js"></script>

    <!-- Contact form -->
    <script src="/ad/plugins/jquery.validate.js"></script>

    <!-- SmoothScroll javascript -->
    <script type="text/javascript" src="/ad/plugins/jquery.browser.js"></script>
    <script type="text/javascript" src="/ad/plugins/SmoothScroll.js"></script>

    <script src="/ad/plugins/select2/select2.full.min.js"></script>
    <script src="/ad/plugins/tinymce/tinymce.jquery.min.js"></script>
    <script type="text/javascript" src="/ad/plugins/tinymce/tinymce.min.js"></script>
    <script src="<?php echo e(url('http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js')); ?>"></script>

    <!-- Initialization of Plugins -->
    <script type="text/javascript" src="/ad/js/template.js"></script>

    <!-- Custom Scripts -->
    <script type="text/javascript" src="/ad/js/custom.js"></script>
    <!-- Color Switcher (Remove these lines) -->


    <script>
        $(document).ready(function () {
            $(".select2").select2();
            $("[data-toggle=tooltip]").tooltip();
        });

        $(document).on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            if ($("#deleteModal").length) {
                var link = button.data('link'); // Extract info from data-* attributes
                $("#deleteModal").attr("action", link);
            }
        });


        tinymce.init({
            selector: '#editor',
            plugins: 'image code',
            toolbar: 'undo redo | link image | code',
            // enable title field in the Image dialog
            image_title: true,
            // enable automatic uploads of images represented by blob or data URIs
            automatic_uploads: true,
            // URL of our upload handler (for more details check: https://www.tinymce.com/docs/configure/file-image-upload/#images_upload_url)
            // images_upload_url: 'postAcceptor.php',
            // here we add custom filepicker only to Image dialog
            file_picker_types: 'image',
            // and here's our custom image picker
            file_picker_callback: function (cb, value, meta) {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');

                // Note: In modern browsers input[type="file"] is functional without 
                // even adding it to the DOM, but that might not be the case in some older
                // or quirky browsers like IE, so you might want to add it to the DOM
                // just in case, and visually hide it. And do not forget do remove it
                // once you do not need it anymore.

                input.onchange = function () {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.onload = function () {
                        // Note: Now we need to register the blob in TinyMCEs image blob
                        // registry. In the next release this part hopefully won't be
                        // necessary, as we are looking to handle it internally.
                        var id = 'blobid' + (new Date()).getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(',')[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);

                        // call the callback and populate the Title field with the file name
                        cb(blobInfo.blobUri(), {
                            title: file.name
                        });
                    };
                    reader.readAsDataURL(file);
                };

                input.click();
            }
        });
    </script>










    <script>
        $(document).ready(function () {
            $(".select2").select2();
            $("[data-toggle=tooltip]").tooltip();
        });

        $(document).on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            if ($("#deleteModal").length) {
                var link = button.data('link'); // Extract info from data-* attributes
                $("#deleteModal").attr("action", link);
            }
        });
    </script>


    <script>
        $(".delete").on("submit", function () {
            return confirm("Do you want to delete this item?");
        });
    </script>


</body>

</html>