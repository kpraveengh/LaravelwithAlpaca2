<!DOCTYPE html>
<html>
    <head>
        <title>Praveen-Laravel</title>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- jQuery -->
        <script type="text/javascript" src="lib/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap -->
        <link href="lib/bootstrap/dist/css/bootstrap.css" rel="stylesheet" media="screen">
        <link type="text/css" href="lib/bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet" />
        <script type="text/javascript" src="lib/bootstrap/dist/js/bootstrap.js"></script>

        <!-- Handlebars -->
        <script type="text/javascript" src="lib/handlebars/handlebars.min.js"></script>

        <!-- Alpaca -->
        <link type="text/css" href="//code.cloudcms.com/alpaca/1.5.22/bootstrap/alpaca.min.css" rel="stylesheet" />
        <script type="text/javascript" src="//code.cloudcms.com/alpaca/1.5.22/bootstrap/alpaca.min.js"></script>


        <!-- Beautify (used by EditorField) -->
        <script src="lib/js-beautify/js/lib/beautify.js" type="text/javascript" charset="utf-8"></script>
        <script src="lib/js-beautify/js/lib/beautify-css.js" type="text/javascript" charset="utf-8"></script>
        <script src="lib/js-beautify/js/lib/beautify-html.js" type="text/javascript" charset="utf-8"></script>

        <!-- typeahead.js -->
        <script src="lib/typeahead.js/dist/bloodhound.min.js" type="text/javascript"></script>
        <script src="lib/typeahead.js/dist/typeahead.bundle.min.js" type="text/javascript"></script>

        <!-- datatables (for TableField) -->
        <script src="lib/datatables.net/js/jquery.dataTables.js" type="text/javascript"></script>
        <script src="lib/datatables.net-bs/js/dataTables.bootstrap.js" type="text/javascript"></script>
        <script src="lib/datatables.net-rowreorder/js/dataTables.rowReorder.js" type="text/javascript"></script>
        <link type="text/css" href="lib/datatables.net-bs/css/dataTables.bootstrap.css" rel="stylesheet"/>

        <!-- ckeditor (for the ckeditor field) -->
        <script src="lib/ckeditor/ckeditor.js" type="text/javascript"></script>

        <!-- fileupload control (for UploadField) -->
        <link rel="stylesheet" type="text/css" href="lib/blueimp-file-upload/css/jquery.fileupload.css"/>
        <link rel="stylesheet" type="text/css" href="lib/blueimp-file-upload/css/jquery.fileupload-ui.css"/>
        <script src="lib/blueimp-file-upload/js/vendor/jquery.ui.widget.js"></script>
        <script src="lib/blueimp-file-upload/js/jquery.iframe-transport.js"></script>
        <script src="lib/blueimp-file-upload/js/jquery.fileupload.js"></script>
        <script src="lib/blueimp-file-upload/js/jquery.fileupload-process.js"></script>
        <script src="lib/blueimp-file-upload/js/jquery.fileupload-ui.js"></script>

        <!-- handsontable (for GridField) -->
        <script src="lib/handsontable/dist/jquery.handsontable.full.js"></script>
        <link rel="stylesheet" media="screen" href="lib/handsontable/dist/jquery.handsontable.full.css"/>

        <!-- moment for date and datetime controls -->
        <script src="lib/moment/min/moment-with-locales.min.js"></script>
        <!-- bootstrap datetimepicker for date and datetime controls -->
        <script src="lib/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
        <link rel="stylesheet" media="screen" href="lib/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css"/>

        <!-- bootstrap-multiselect for time field -->
        <script src="lib/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>
        <link rel="stylesheet" media="screen" href="lib/bootstrap-multiselect/css/bootstrap-multiselect.css"/>

        <!-- jQuery Price Format for currency field -->
        <script type="text/javascript" src="lib/jquery-price-format2/jquery.price_format.min.js"></script>

        <!-- ACE editor -->
        <script src="lib/ace-builds/src-min-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>

        <!-- jQuery UI for draggable support -->
        <script src="lib/jquery-ui/jquery-ui.js" type="text/javascript" charset="utf-8"></script>

        <!-- START - Google Analytics -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-74723052-1', 'auto');
            ga('send', 'pageview');

        </script>
        <!-- END - Google Analytics -->

        <script type="text/javascript" src="lib/form-builder.js"></script>
        <link type="text/css" href="lib/form-builder.css" rel="stylesheet" />

    </head>
    <body data-spy="scroll" data-target=".demo-nav">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Praveen-Laravel</a>
            </div>
            <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('post/') }}">Home</a></li>
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} 
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li><a href="{{ url('post/create') }}">Create post</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#source" data-toggle="tab" class="tab-item tab-item-source">Source</a></li>
                            <li><a href="#designer" data-toggle="tab" class="tab-item tab-item-designer">Designer</a></li>
                            <li><a href="#view" data-toggle="tab" class="tab-item tab-item-view">View</a></li>
                            <li><a href="#code" data-toggle="tab" class="tab-item tab-item-code">Code</a></li>
                            <li><a href="#loadsave" data-toggle="tab" class="tab-item tab-item-loadsave">Load / Save</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="source">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#schema" data-toggle="tab" class="tab-source-schema">Schema</a></li>
                                            <li><a href="#options" data-toggle="tab" class="tab-source-options">Options</a></li>
                                            <li><a href="#data" data-toggle="tab" class="tab-source-data">Data</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="schema">
                                        </div>
                                        <div class="tab-pane" id="options">
                                        </div>
                                        <div class="tab-pane" id="data">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#preview" data-toggle="tab">Preview</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="preview">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="previewDiv"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="designer">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="designerDiv"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#types" data-toggle="tab">Types</a></li>
                                                    <li><a href="#basic" data-toggle="tab">Basic</a></li>
                                                    <li><a href="#advanced" data-toggle="tab">Advanced</a></li>
                                                </ul>
                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="types"></div>
                                                <div class="tab-pane" id="basic"></div>
                                                <div class="tab-pane" id="advanced"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="view">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="viewDiv"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="code">
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="codeDiv"></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="loadsave">
                            <div class="row">
                                <div class="col-md-12">

                                    <button class="btn btn-default load-button">Load Form</button>
                                    <br/>
                                    <br/>
                                    <button class="btn btn-default save-button">Save Form</button>
                                    <br/>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
