<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WebTrainer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {

                background-color: #e4e4e4;
                color: #37036f;
                font-family: "Century Gothic";
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-left {
                position: absolute;
                left: 60px;
                top: 18px;
            }

            .content {
                text-align: center;
            }


            .title {
                font-size: 100px;
            }

            .links > a {
                color: #37036f;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>



    <div class="flex-center position-ref full-height">

                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Inicia sesión</a>
                        <a href="{{ url('/register') }}">Regístrate</a>

                </div>
                  <div class="top-left links">
                    <table>
                        <tr>
                         <th><img src="http://k30.kn3.net/taringa/5/A/F/6/A/0/soiuniko/749.gif" alt="HTML5 Icon"
                             style="width:128px;height:128px"></th>
                         </tr>
                     </table>
                     <table>
                         <tr>
                         <th><img src="https://k33.kn3.net/taringa/B/1/6/D/5/6/barcej10/224.gif" alt="HTML5 Icon"
                             style="width:128px;height:128px"></th>
                      </tr>
                    </table>
                    <table>
                        <tr>
                            <th><img src="https://ugc.kn3.net/i/origin/http://www.gimnasiototal.com/animaciones/ejerciciosparapecho2.gif" alt="HTML5 Icon"
                                     style="width:128px;height:128px"></th>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <th><img src="https://k37.kn3.net/taringa/1/5/9/1/2/1/98/psrfyankee/0FD.gif?8685" alt="HTML5 Icon"
                                     style="width:128px;height:128px"></th>
                        </tr>
                    </table>

        </div>




            @endif


        <div class="content">


                <div class="title m-b-md">
                Web Trainer

                </div>



                <div class="links">
                    <a target="_blank" href="http://www.abc.es/familia-vida-sana/20141007/abci-ejercicio-casa-deporte-201410061505.html">Objetivos</a>
                    <a href="https://laracasts.com">Lidia de la Cruz & Marina Perea </a>


                </div>
            <div class="flex-center position-ref">
                <br>
                Nuestro objetivo es fomentar y animar a la gente a practicar deporte y llevar una vida sana de forma práctica</br>
                y cómoda, sin necesidad de ir al gimnasio. Facilitamos a usuarios de todas las edades y en cualquier tipo de</br>
                condición física un modelo de entrenamiento para tener una rutina de trabajo diario adecuado según sus condiciones,</br>
                y también dispondrán de una dieta acorde a sus necesidades si así lo desean.</br>



            </div>
            </div>
        </div>
    </body>
</html>
