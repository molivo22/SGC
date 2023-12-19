<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    PROLICOR - Sistema de Gestion de Compras
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
        <div class="sidebar" data-color="orange">
        <!-- Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"  -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                SGC
                </a>
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                PROLICOR
                </a>
            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                <li>
                    <a href="./dashboard.php">
                    <i class="now-ui-icons design_app"></i>
                    <p>Dashboard</p>
                    </a>
                </li>
                <li class="active ">
                    <a href="./Compras.php">
                    <i class="now-ui-icons education_atom"></i><p>Compras</p></a>
                </li>
                <!-- <li>
                    <a href="./map.html">
                    <i class="now-ui-icons location_map-big"></i>
                    <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="./notifications.html">
                    <i class="now-ui-icons ui-1_bell-53"></i>
                    <p>Notifications</p>
                    </a>
                </li>
                <li>
                    <a href="./user.html">
                    <i class="now-ui-icons users_single-02"></i>
                    <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="./tables.html">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p>Table List</p>
                    </a>
                </li>
                <li>
                    <a href="./typography.html">
                    <i class="now-ui-icons text_caps-small"></i>
                    <p>Typography</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="./upgrade.html">
                    <i class="now-ui-icons arrows-1_cloud-download-93"></i><p>Upgrade to PRO</p></a>
                </li> -->
                </ul>
            </div>
        </div>
        <div class="main-panel" id="main-panel">
        <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
                <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">Compras Automatizadas</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#pablo">
                        <i class="now-ui-icons media-2_sound-wave"></i>
                        <p>
                            <span class="d-lg-none d-md-block">Stats</span>
                        </p>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="now-ui-icons location_world"></i>
                        <p>
                            <span class="d-lg-none d-md-block">Some Actions</span>
                        </p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pablo">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>
                            <span class="d-lg-none d-md-block">Account</span>
                        </p>
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>
        <!-- End Navbar -->

            <div class="panel-header panel-header-sm">
            </div>


            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Proceso de Compras Automatizada - Stellar</h5>
                                <p class="category">Carga de Archivo TXT a ser procesado</a></p>
                            </div>
                            <div class="row">
                                    <div class="col-md-12">
                                        <!-- <div class="card  card-tasks"> -->
                                            <div class="card-header ">
                                                <!-- <h5 class="card-category"></h5>
                                                <h4 class="card-title">Seleccione el Archivo TXT para la carga Automatizada</h4> -->
                                            </div>
                                            <div class="card-body ">
                                                <form method="post" action="<?= $_SERVER["PHP_SELF"]?>" enctype="multipart/form-data" name="txt">
                                                    <div class="table-full-width table-responsive">
                                                    
                                                        <div class="form-group row align-items-center">
                                                            <div class="col-sm-6">
                                                                <input type="file" id="archivo" class="form-control" placeholder="COMPRAS.TXT" name="archivo">  
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <button type="submit" class="btn btn-primary">Procesar TXT</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>





                                                <?php 

                                                    if (isset($_FILES["archivo"])){
                                                        //SE CARGO UN ARCHIVO PARA SU PROCESAMIENTO
                                                        $conn = new PDO("sqlsrv:Server=STEOP1\SQLSERVER;"."Database=VAD10", "sa", "");              //DESARROLLO
                                                        //$conn = new PDO("sqlsrv:Server=STEOP1\OP;"."Database=VAD10", "SA", "");                     //PRODUCCION    
                                                        
                                                        $files = array();                                                                           //Variable que almacena los archivos pendientes por enviar en el correo 
                                                        $arrDoc = array();
                                                        $ContadorTR = null;
                                                        $Message = NULL;
                                                        $fallo = NULL;

                                                        //UBICACION DEL ARCHIVO TXT 
                                                        $DirCurrent = $_FILES["archivo"]["tmp_name"];
                                                        $DirDestino = "C:/wamp64/www/SGC/COMPRAS/" . "COMPRAS.txt";
                                                        rename($DirCurrent, $DirDestino);

                                                        //LECTURA DEL ARCHIVO
                                                        $ruta_archivo = "C:/wamp64/www/SGC/COMPRAS/COMPRAS.txt";
                                                        $archivo = fopen($ruta_archivo, 'r');
                                                        $fechaActual = date('Ymd'); 
                                                        $linea = 0;
                                                        $porcentajeIVA = 16;

                                                   
                                                        //INICIO DE PROCESO DE CARGA Y VALIDACION INICIAL DEL TXT EN BD
                                                        while(!feof($archivo)) {
                                                                
                                                            $producto = explode("|", fgets($archivo));   
                                                            $rif_proveedor = trim($producto[0]);
                                                            
                                                            if (strlen(trim($producto[1])) == 6){
                                                                $articulo = trim($producto[1]);
                                                            }else {
                                                                //echo '1';
                                                                //unlink($ruta_archivo);
                                                                $Message = "El Articulo " . trim($producto[1]) . " no posee la longitud correcta para ser procesado.";
                                                                fseek($archivo, 0, SEEK_END);
                                                                $fallo = "ERROR";
                                                                $SQL_INS_TR_ODC_FALLO  = "DELETE FROM [VAD10].[dbo].[PROLICOR_TR_ODC_MULTIPLE] WHERE [STATUS] = 1";
                                                                $stmt_fallo = $conn->prepare($SQL_INS_TR_ODC_FALLO);
                                                                //$stmt_fallo->execute(); 
                                                            }

                                                            if (ctype_digit(trim($producto[2]))) {
                                                                $cantidad = trim($producto[2]);
                                                            } else{
                                                                //echo '2';
                                                                $Message = "El valor Introducido para la cantidad solicitada (" . trim($producto[2]) . ") no es valido."; 
                                                                $fallo = "ERROR";
                                                                fseek($archivo, 0, SEEK_END);
                                                                $SQL_INS_TR_ODC_FALLO  = "DELETE FROM [VAD10].[dbo].[PROLICOR_TR_ODC_MULTIPLE] WHERE [STATUS] = 1";
                                                                $stmt_fallo = $conn->prepare($SQL_INS_TR_ODC_FALLO);
                                                                //$stmt_fallo->execute(); 
                                                            } 

                                                            if (strlen(trim($producto[3])) == 2){
                                                                $agencia = trim($producto[3]);
                                                            } else {
                                                                //echo '3';
                                                                $Message = "El Nro " . trim($producto[3]) . " no fue reconocido como una agencia Valida."; 
                                                                $fallo = "ERROR";
                                                                fseek($archivo, 0, SEEK_END);
                                                                $SQL_INS_TR_ODC_FALLO  = "DELETE FROM [VAD10].[dbo].[PROLICOR_TR_ODC_MULTIPLE] WHERE [STATUS] = 1";
                                                                $stmt_fallo = $conn->prepare($SQL_INS_TR_ODC_FALLO);
                                                                $stmt_fallo->execute(); 
                                                            }  
                                                            
                                                            if (ctype_digit(trim($producto[4]))){ 
                                                                $comprador = trim($producto[4]);
                                                            } else {
                                                                //echo '4';
                                                                $Message = "El valor indicado para el campo COMPRADOR " . trim($producto[3]) . " no  es Valido.";
                                                                $fallo = "ERROR";
                                                                fseek($archivo, 0, SEEK_END);
                                                                $SQL_INS_TR_ODC_FALLO  = "DELETE FROM [VAD10].[dbo].[PROLICOR_TR_ODC_MULTIPLE] WHERE [STATUS] = 1";
                                                                $stmt_fallo = $conn->prepare($SQL_INS_TR_ODC_FALLO);
                                                                //$stmt_fallo->execute(); 
                                                            }

                                                            if ($fallo != "ERROR") {
                                                                $linea = $linea + 1;
                                                                
                                                                $SQL_INS_TR_ODC_MULTIPLES = "INSERT INTO [VAD10].[dbo].[PROLICOR_TR_ODC_MULTIPLE]  ([LOCALIDAD] , [PROVEEDOR] , [COMPRADOR], [STATUS], [c_DOCUMENTO]  ,[c_LINEA]  ,[c_CODARTICULO] ,[n_CANTIDAD]  ,[n_COSTO]  ,[n_subtotal] ,[n_impuesto]  ,[n_total] ,[n_CANT_RECIBIDA] ,[n_porcentajeimp] ,[n_porcentajeimp1] ,[n_porcentajeimp2] ,[c_codprincipal] ,[n_costooriginal] ,[N_DESC1]  ,[N_DESC2] ,[N_DESC3] ,[C_CAMXREP] ,[N_PRECIO_REP1] ,[N_PRECIO_REP2] ,[N_PRECIO_REP3] ,[N_COSTOREP] ,[C_MONEDA] ,[N_DECIMALES] ,[N_PROD_EXT] ,[c_descripcion] ,[n_descuentoespecifico] ,[n_descuentogeneral]  ,[ns_cantidadempaque] ,[cs_codlocalidad]  ,[n_ImpuestoPercibido]) VALUES 
                                                                ('" . $agencia . "' , '" . $rif_proveedor . "', RTRIM('" . $comprador . "'), '1' , (SELECT MAX(c_Documento)  FROM [VAD10].[dbo].[MA_ODC]) , '" . $linea . "', '" . $articulo . "', " . $cantidad . ", (SELECT n_CostoRep FROM [VAD10].[dbo].MA_PRODUCTOS where c_Codigo = '" . $articulo . "') ,  ((SELECT n_CostoRep FROM [VAD10].[dbo].MA_PRODUCTOS where c_Codigo = '" . $articulo . "') * " . $cantidad . ") , (((SELECT n_CostoRep FROM [VAD10].[dbo].MA_PRODUCTOS where c_Codigo = '" . $articulo . "') * " . $cantidad . ") * 0.16) , ((SELECT n_CostoRep FROM [VAD10].[dbo].MA_PRODUCTOS where c_Codigo = '" . $articulo . "') * " . $cantidad . ")  +  (((SELECT n_CostoRep FROM [VAD10].[dbo].MA_PRODUCTOS where c_Codigo = '" . $articulo . "') * " . $cantidad . ") * 0.16) , 0, " . $porcentajeIVA . ", 0,  0, '" . $articulo . "', (SELECT n_CostoAct FROM [VAD10].[dbo].MA_PRODUCTOS where c_Codigo = '" . $articulo . "') , 0, 0, 0, 0, (SELECT n_Precio1 FROM [VAD10].[dbo].MA_PRODUCTOS where c_Codigo = '" . $articulo . "'), (SELECT n_Precio2 FROM [VAD10].[dbo].MA_PRODUCTOS where c_Codigo = '" . $articulo . "'), (SELECT n_Precio3 FROM [VAD10].[dbo].MA_PRODUCTOS where c_Codigo = '" . $articulo . "') , (SELECT n_CostoRep FROM [VAD10].[dbo].MA_PRODUCTOS where c_Codigo = '" . $articulo . "') , 'USD', 0, ' ',  '',  0,  0, (SELECT n_CantiBul FROM [VAD10].[dbo].MA_PRODUCTOS WHERE c_Codigo = '" . $articulo . "') ,'00', 0)";
                                                                $stmt = $conn->prepare($SQL_INS_TR_ODC_MULTIPLES);
                                                                echo $SQL_INS_TR_ODC_MULTIPLES . "</br></br>";
                                                               
                                                                $stmt->execute();       
                                                             
                                                            } else {
                                                                echo "TUVO UNA FALLA Y ES EL PRIMER CICLO ";
                                                                echo "</br>";
                                                                $Contenido = fgets($archivo);
                                                                
                                                            }
                                                            
                                                        }
                                                        fclose($archivo);  //cierro el archivo 
                                                         
                                                        echo "<div class='col-sm-6'>";
                                                        echo "<small class='form-text text-muted'>" . $Message . "</small>";
                                                        echo "</div>";
                                                        //include "ProcesoComprasAuto.php"; 
                                                    } //FIN DE PROCESAMIENTO DE ORDEN

                                                ?>

                                            </div>
                                            <div class="card-footer ">
                                                <hr>
                                                <div class="stats"><i class="now-ui-icons loader_refresh spin"></i> Horario de Procesamiento 9am / 12pm / 2pm / 4pm</div>
                                            </div>
                                        <!-- </div> -->
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <footer class="footer">
                <div class=" container-fluid ">
                    <div class="copyright" id="copyright">
                        &copy; <script> document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                        </script>, Diseñado por <a href="https://www.invisionapp.com" target="_blank">MOLIVO</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">MOLIVO</a>.
                    </div>
                </div>
            </footer>
        </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
  <!-- Chart JS -->
  <!-- <script src="assets/js/plugins/chartjs.min.js"></script> -->
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>
