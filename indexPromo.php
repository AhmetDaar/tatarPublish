<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ЯҢА ТАТАР КИТАП НӘШРИЯТЫ</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/back2.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Сугыш сәнгате</h1>
                        <hr class="small">
                        <span class="subheading">Сунь-Цзы</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Books -->
    <div class="wrapper"><img id="fBook" src="img/bit1.png"><img id="mainBook" src="img/cover.png"> <img id="sBook" src="img/bit2.png"></div>
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
<!--                     <h2 class="section-heading">Сугыш сәнгате</h2>
 -->                    
                    <p>Хәрби стратегия һәм сәясәткә багышланган борынгы Кытай трактаты хәзер татар телендә. Сугыш-көрәшсез дә җиңәргә өйрәтә торган әсәр инде күптәннән үзеңне камилләштерү әдәбияты буларак та кулланыла. АКШ гаскәриләре исә аны мәҗбүри өйрәнә. 2500 ел элек язылган китапның сезгә дә файдасы тияр.</p>
                    <br>
                    <div id="results"></div>
                    <br>
                    <form id="contactForm" name="sentMessage" method="post" action="javascript:void(null);" onsubmit="call()" >
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Промо-код</label>
                            <input type="text" class="form-control" id="code" name="code" placeholder="KITAP#####" required data-validation-required-message="Зинһар өчен сездә булган серсүзне языгыз">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    
                    <br>
                    
                    <div class="row">
                        <center><div class="form-group col-xs-12">
                            <input value="Йөкләргә" type="submit" class="btn btn-default"n>
                        </div></center>
                    </div>
                    </form>
                        <script type="text/javascript" language="javascript">
                            function call() {
                                var msg = $('#contactForm').serialize();
                                $.ajax({
                                  type: 'POST',
                                  url: 'process.php',
                                  data: msg,
                                  success: function(data) {
                                    $('#results').html(data);
                                  },
                                error:  function(xhr, str){
                                    alert('Возникла ошибка: ' + xhr.responseCode);
                                }

                            }); 
                            contactForm.style.display = (contactForm.style.display == 'none') ? 'block' : 'none';

                         }

                         function refresh()
                            {
                                window.location.reload();
                            }
                    </script>

                </div>
            </div>
        </div>
    </article>

    <hr>

    <!-- Footer -->
     <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <img src="img/group.jpg" width="300" height="200" style="
    margin-top: -277px;">
                        </li>
                        <li>
                            <script type="text/javascript" src="//vk.com/js/api/openapi.js?146"></script>

                                <!-- VK Widget -->
                                <div id="vk_groups"></div>
                                <script type="text/javascript">
                                VK.Widgets.Group("vk_groups", {mode: 3, width: "300"}, 57720);
                            </script>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; "Яңа нәшрият" 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
