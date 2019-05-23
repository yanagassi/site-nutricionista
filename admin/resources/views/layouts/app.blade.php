<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="{{ asset('img/logoPequenoAzul.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Painel Administrativo</title>

    <link href="{{ asset('css/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/plugins/datatables/select.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/plugins/jquery-circliful/css/jquery.circliful.css') }}" rel="stylesheet" type="text/css" />
    
    <link href="{{ asset('css/blue/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/blue/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/blue/assets/css/style.css') }}" rel="stylesheet" type="text/css">

    <script src="{{ asset('css/blue/assets/js/modernizr.css') }}"></script>
    <style>
        .logo{
            line-height: 70px!important;
        }
    </style>

</head>
    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo">
                            <img src="{{ asset('img/logoPequeno.png') }}" class="img-fluid" alt="" style="width: 45px;"> <span>Painel</span>
                        </a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">

                        <li class="list-inline-item notification-list">
                            <a class="nav-link waves-light waves-effect" href="#" id="btn-fullscreen">
                                <i class="mdi mdi-crop-free noti-icon"></i>
                            </a>
                        </li>

                        <!-- <li class="list-inline-item notification-list">
                            <a class="nav-link right-bar-toggle waves-light waves-effect" href="#">
                                <i class="mdi mdi-dots-horizontal noti-icon"></i>
                            </a>
                        </li> -->

                        <!-- <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-bell noti-icon"></i>
                                <span class="badge badge-pink noti-icon-badge">4</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg" aria-labelledby="Preview">
                                <div class="dropdown-item noti-title">
                                    <h5 class="font-16"><span class="badge badge-danger float-right">5</span>Notification</h5>
                                </div>

                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-comment-account"></i></div>
                                    <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1 min ago</small></p>
                                </a>

                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-account"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">1 min ago</small></p>
                                </a>

                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="mdi mdi-airplane"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1 min ago</small></p>
                                </a>

                                <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li> -->

<!--                         <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Welcome ! John</small> </h5>
                                </div>

                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account"></i> <span>Profile</span>
                                </a>

                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-settings"></i> <span>Settings</span>
                                </a>

                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lock-open"></i> <span>Lock Screen</span>
                                </a>

                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li> -->

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <!-- <li class="hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li> -->
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Menu</li>
                            <li>
                                <a href="{{ url('home') }}" class="waves-effect waves-primary"><i
                                        class="ti-home"></i><span> Dashboard </span></a>
                            </li>
                            @if(Auth::user()->idPermissao == 1)
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="ti-layers"></i> <span> Blog </span>
                                    <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ url('/blog/cadastroBlog') }}">Adicionar matéria</a></li>
                                    <li><a href="{{ url('/blog/listaBlog') }}">Editar matéria</a></li>
                                    <li><a href="{{ url('/blog/cadastroLink') }}">Adicionar Links</a></li>
                                    <li><a href="{{ url('/blog/listaLink') }}">Todos os Links</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="ti-user"></i> <span> Pacientes </span>
                                    <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ url('/pacientes/cadastro') }}">Cadastrar paciente</a></li>
                                    <li><a href="{{ url('/consulta/evolucao') }}">Cadastro de Evolução</a></li>
                                    <li><a href="{{ url('/pacientes/lista') }}">Ver todos</a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                          
                                <a href="javascript:void(0);" class="waves-effect waves-primary"><i class="ti-heart-broken"></i> <span> Consultas </span>
                                    <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ url('/consulta/agendar') }}">Agendar consulta</a></li>
                                    <li><a href="{{ url('/consulta/lista') }}">Lista de consultas</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('/recordatorio/lista') }}" class="waves-effect waves-primary">
                                    <i class="ti-pie-chart"></i> <span> Recordatório pacientes </span>
                                </a>
                            </li>
                            @elseif(Auth::user()->idPermissao == 3)
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class="ti-pie-chart"></i> <span> INQUÉRITOS ALIMENTARES PROSPECTIVOS </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ url('/recordatorio/cadastro') }}">Recordatório 24 horas</a></li>
                                    <li><a href="https://www.ludgerosangaletti.com.br/admin/public/recordatorio/ver">Meu recordatório</a></li>
                                    <!-- <li><a href="ui-cards.html">Diário alimentar</a></li> -->
                                </ul>
                            </li>
                            @endif
                            <li><a href="https://www.ludgerosangaletti.com.br/admin/public/consulta/meuPerfil?id=<?=Auth::user()->id?>">Meu perfil</a></li>
                            <li><a href="https://www.ludgerosangaletti.com.br/admin/public/consulta/acompanhamento?id=<?=Auth::user()->id?>">Minha evolução</a></li>
                            <li>
                                <a href="{{ url('/alterarSenha') }}">
                                    Alterar Senha
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" 
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Sair
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>


                        </ul>

                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->
    </div>

    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>


            <script>
            var resizefunc = [];
        </script>
        <!-- Plugins  -->
        <script src="{{ asset('css/blue/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('css/blue/assets/js/popper.min.js') }}"></script><!-- Popper for Bootstrap -->
        <script src="{{ asset('css/blue/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('css/blue/assets/js/detect.js') }}"></script>
        <script src="{{ asset('css/blue/assets/js/fastclick.js') }}"></script>
        <script src="{{ asset('css/blue/assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('css/blue/assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('css/blue/assets/js/waves.js') }}"></script>
        <script src="{{ asset('css/blue/assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('css/blue/assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('css/blue/assets/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('css/plugins/switchery/switchery.min.js') }}"></script>

        <!-- Required datatable js -->
        <script src="{{ asset('css/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('css/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <!-- Buttons examples -->
        <script src="{{ asset('css/plugins/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('css/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('css/plugins/datatables/jszip.min.js') }}"></script>
        <script src="{{ asset('css/plugins/datatables/pdfmake.min.js') }}"></script>
        <script src="{{ asset('css/plugins/datatables/vfs_fonts.js') }}"></script>
        <script src="{{ asset('css/plugins/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('css/plugins/datatables/buttons.print.min.js') }}"></script>

        <!-- Key Tables -->
        <script src="{{ asset('css/plugins/datatables/dataTables.keyTable.min.js') }}"></script>

        <!-- Responsive examples -->
        <script src="{{ asset('css/plugins/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('css/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

        <!-- Selection table -->
        <script src="{{ asset('css/plugins/datatables/dataTables.select.min.js') }}"></script>

        <!-- Counter Up  -->
        <script src="{{ asset('css/plugins/waypoints/lib/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('css/plugins/counterup/jquery.counterup.min.js') }}"></script>

        <!-- circliful Chart -->
        <script src="{{ asset('css/plugins/jquery-circliful/js/jquery.circliful.min.js') }}"></script>
        <script src="{{ asset('css/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

        <!-- skycons -->
        <script src="{{ asset('css/plugins/skyicons/skycons.min.js') }}" type="text/javascript"></script>

        <!-- Page js  -->
        <script src="{{ asset('css/blue/assets/pages/jquery.dashboard.js') }}"></script>

        <!-- Custom main Js -->
        <script src="{{ asset('css/blue/assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('css/blue/assets/js/jquery.app.js') }}"></script>

        <script src="{{ asset('css/plugins/tinymce/tinymce.min.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                if($("#elm1").length > 0){
                    tinymce.init({
                        selector: "textarea#elm1",
                        theme: "modern",
                        height:300,
                        plugins: [
                            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                            "save table contextmenu directionality emoticons template paste textcolor"
                        ],
                        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                        style_formats: [
                            {title: 'Bold text', inline: 'b'},
                            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                            {title: 'Example 1', inline: 'span', classes: 'example1'},
                            {title: 'Example 2', inline: 'span', classes: 'example2'},
                            {title: 'Table styles'},
                            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                        ]
                    });
                }
            });
        </script>


        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
                $('.circliful-chart').circliful();
            });

            // BEGIN SVG WEATHER ICON
            if (typeof Skycons !== 'undefined'){
                var icons = new Skycons(
                        {"color": "#3bafda"},
                        {"resizeClear": true}
                        ),
                        list  = [
                            "clear-day", "clear-night", "partly-cloudy-day",
                            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                            "fog"
                        ],
                        i;

                for(i = list.length; i--; )
                    icons.set(list[i], list[i]);
                icons.play();
            };

        </script>

        <script type="text/javascript">
            $(document).ready(function() {

                // Default Datatable
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>
</body>
</html>
