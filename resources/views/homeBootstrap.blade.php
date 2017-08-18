<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }} ">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    
    <div id="app">

        <input type="checkbox" id="sidebar-toggle">

        <div id="page-container">

            <div id="main-sidebar">
                <ul class="menu">
                    <li><a href="#">Home</a></li>
                    <li>
                        <a href="#">Opções 1</a>
                        <ul class="menu">
                            <li><a href="#">Item 1</a></li>
                            <li><a href="#">Item 2</a></li>
                            <li><a href="#">Item 3</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div id="main-navbar">
                <div class="d-flex flex-row align-items-center">
                    <label for="sidebar-toggle"><i class="fa fa-bars"></i></label>
                </div>
            </div>

            <div id="page-content">

                <p>Conteúdo aqui</p>

                {{--  <div class="container-fluid">
        
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#basicExample">
                        Launch demo modal
                    </button>

                    <!-- Modal -->
                    <div class="modal fade right" id="basicExample" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-side modal-top-right modal-notify modal-success" role="document">
                            <!--Content-->
                            <div class="modal-content">
                                <!--Header-->
                                <div class="modal-header">
                                    <h4 class="modal-title w-100" id="myModalLabel">Modal title</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!--Body-->
                                <div class="modal-body">
                                    ...
                                </div>
                                <!--Footer-->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            <!--/.Content-->
                        </div>
                    </div>
                    <!-- Modal -->

                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                        Tooltip on top
                    </button>

                </div>  --}}

            </div>


        </div>


    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>