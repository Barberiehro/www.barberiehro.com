<!DOCTYPE html>
<html>

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>BARBERI'E HRO.</title>

 <!-- Bootstrap Css -->
    <link href="bootstrap-assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="menu/css/simple-sidebar.css" rel="stylesheet">

    <!-- Style -->
    <link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="plugins/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="plugins/Lightbox/dist/css/lightbox.css" rel="stylesheet">
    <link href="plugins/Icons/et-line-font/style.css" rel="stylesheet">
    <link href="plugins/animate.css/animate.css" rel="stylesheet">
    <link href="css/main3.css" rel="stylesheet">
    <!-- Icons Font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="shortcut icon" type="text/css" href="img/logo/logo.png">

</head>

<body>

<div style="margin-top: 90px; margin-bottom: 30px;">
<section>
        <div class="container">
            <div style="margin-left: 210px;"><img src="img/citas/titulo.png"></div>
            <div class="col-md-6 col-md-offset-3 wow fadeInUp" data-wow-delay=".3s">
               
                    
                    

                    <form method="post" action="pages/registro2.php" id="formulario">
    <p>
    <label for="fecha"> Selecciona la fecha 
    <input type="text" name="fecha" id="fecha"> <a onclick="show_calendar()" style="cursor: pointer;"><small>(calendario)</small></a>
    </label></p><div id="calendario" style="display: none;">
        <table style="width:200px;text-align:center;border:1px solid #808080;border-bottom:0px;" cellpadding="0" cellspacing="0">
     <tbody><tr>
      <td colspan="4">
        <select id="calendar_mes" onchange="update_calendar()">
         <option value="1">Enero</option> 
<option value="2">Febrero</option> 
<option value="3">Marzo</option> 
<option value="4" selected="selected">Abril</option> 
<option value="5">Mayo</option> 
<option value="6">Junio</option> 
<option value="7">Julio</option> 
<option value="8">Agosto</option> 
<option value="9">Septiembre</option> 
<option value="10">Octubre</option> 
<option value="11">Noviembre</option> 
<option value="12">Diciembre</option> 
        </select>
      </td>
      <td colspan="3">
        <select style="width:70px;" id="calendar_anio" onchange="update_calendar()">
         <option value="2017">2017</option> 
<option value="1988">1988</option> 
<option value="1989">1989</option> 
<option value="1990">1990</option> 
<option value="1991">1991</option> 
<option value="1992">1992</option> 
<option value="1993">1993</option> 
<option value="1994">1994</option> 
<option value="1995">1995</option> 
<option value="1996">1996</option> 
<option value="1997">1997</option> 
<option value="1998">1998</option> 
<option value="1999">1999</option> 
<option value="2000">2000</option> 
<option value="2001">2001</option> 
<option value="2002">2002</option> 
<option value="2003">2003</option> 
<option value="2004">2004</option> 
<option value="2005">2005</option> 
<option value="2006">2006</option> 
<option value="2007">2007</option> 
<option value="2008">2008</option> 
<option value="2009">2009</option> 
<option value="2010">2010</option> 
<option value="2011">2011</option> 
<option value="2012">2012</option> 
<option value="2013">2013</option> 
<option value="2014">2014</option> 
<option value="2015">2015</option> 
<option value="2016">2016</option> 
<option value="2017">2017</option> 
        </select>
      </td>
     </tr>
    </tbody></table>
    <div id="calendario_dias">
        <table style="width:200px;text-align:center;border:1px solid #808080;border-top:0px;" cellpadding="0" cellspacing="0">
     <tbody><tr style="background-color:#CCCCCC;">
      <td>D</td>
      <td>L</td>
      <td>M</td>
      <td>M</td>
      <td>J</td>
      <td>V</td>
      <td>S</td>
     </tr>
    <tr> 
 <td></td> 
 <td></td> 
 <td></td> 
 <td></td> 
 <td></td> 
 <td></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-01&#39;)">1</a></td> 
</tr> 
<tr> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-02&#39;)">2</a></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-03&#39;)">3</a></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-04&#39;)">4</a></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-05&#39;)">5</a></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-06&#39;)">6</a></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-07&#39;)">7</a></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-08&#39;)">8</a></td> 
</tr> 
<tr> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-09&#39;)">9</a></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-10&#39;)">10</a></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-11&#39;)">11</a></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-12&#39;)">12</a></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-13&#39;)">13</a></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-14&#39;)">14</a></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-15&#39;)">15</a></td> 
</tr> 
<tr> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-16&#39;)">16</a></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-17&#39;)">17</a></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-18&#39;)">18</a></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-19&#39;)">19</a></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-20&#39;)">20</a></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-21&#39;)">21</a></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-22&#39;)">22</a></td> 
</tr> 
<tr> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-23&#39;)">23</a></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-24&#39;)">24</a></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-25&#39;)">25</a></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-26&#39;)">26</a></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-27&#39;)">27</a></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-28&#39;)">28</a></td> 
 <td><a style="display:block;cursor:pointer;" onclick="set_date(&#39;2017-04-29&#39;)">29</a></td> 
</tr> 
    </tbody></table>
        </div>
        </div>
    
    <p></p>

                    <div style="overflow:hidden;">
    <div class="form-group">
        <div class="row">
            <div class="col-md-8">
                <div id="datetimepicker12"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker12').datetimepicker({
                inline: true,
                sideBySide: true
            });
        });
    </script>
</div>
                    <div class="form-group" style="margin-bottom: 50px;">
                        <select name="servicio" style="width:540px; font-size: 16pt;">
                            <option value="null">Hora</option>                     
                            <option value="10:00 A.M.">10:00 A.M.</option>
                            <option value="11:00 A.M.">11:00 A.M.</option>
                            <option value="12:00 A.M.">12:00 A.M.</option>
                            <option value="1:00 P.M.">1:00 P.M.</option>
                            <option value="2:00 P.M.">2:00 P.M.</option>
                            <option value="4:00 P.M.">4:00 P.M.</option>
                            <option value="Op7">5:00 P.M.</option>
                            <option value="Op8">6:00 P.M.</option>
                            <option value="Op9">7:00 P.M.</option>
                            <option value="Op10">8:00 P.M.</option>

                           
                        </select>
                    </div>
   
                    <input class="btn btn-block" type="submit" name="submit" value="Agendar"/>

                </form>
            </div>
        </div>
        
    </div>
    </section>
</div>


	
    
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="jquery-1.11.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-assets/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- JS PLUGINS -->
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="plugins/countTo/jquery.countTo.js"></script>
    <script src="plugins/inview/jquery.inview.min.js"></script>
    <script src="plugins/Lightbox/dist/js/lightbox.min.js"></script>
    <script src="plugins/WOW/dist/wow.min.js"></script>
    <!-- GOOGLE MAP -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>

    <script type="text/javascript" src="calendario/js/jquery-1.3.1.min.js"></script>
<script type="text/javascript" src="calendario/js/jquery.functions.js"></script>
<script src="menu/js/bootstrap.min.js"></script>
<script src="menu/js/jquery.js"></script>    

</body>

</html>