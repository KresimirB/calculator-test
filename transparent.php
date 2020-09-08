<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
<div id="logo" class="col-xs-12 col-sm-offset-1 col-sm-10">
<img src="images/nezavisni_logo2.gif" style="width:5%;height:5%;">
            <span>Kruševo</span>
        </div>
    <nav class="col-xs-12 navbar-fixed-top">
        <ul class="nav nav-pills ">
        <li role="presentation"><a href="index.php">Naslovna</a></li>
            <li role="presentation"><a href="nezavisni.php">Nezavisni Kandidat</a></li>
            <li role="presentation"><a href="plan.php">Plan i Program</a></li>
            <li role="presentation"><a href="clanci.php">Članci</a></li>
           <li role="presentation"><a href="mostar.php">Grad Mostar</a></li>
           <li role="presentation">
                <img src="images/nezavisni_logo2.gif">
            </li>
            <li role="presentation"><a href="#">Kontakt</a></li>
            <li role="presentation"><a  data-toggle='modal' data-target='#myModal1'>Transparentni Mostar</a></li>
            <li role="presentation"><a  data-toggle='modal' data-target='#myModal'>Anketa</a></li>
           
           
                        <!-- <li role="presentation"><a href="#">Kako postati lovac</a></li>
                        <li role="presentation"><a href="#">Kako do lovačke iskaznice</a></li>
                        <li role="presentation"><a href="#">Oružani list</a></li> -->

        </ul>
    </nav>
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Aplikacija Transparentni Mostar!</h4>
      </div>
      <div class="modal-body">
       
        
      <form method='POST' action='#' autocomplete='off' >

<label for='zapromjene' class='label label-primary'>Korisničko ime</label>
<input type='text' name='vote' id='zapromjene'  class='form form-control'/>
<label for='nepromjene' class='label label-primary'>Lozinka</label>
<input type='text' name='vote' id='nepromjene' class='form form-control'/>



      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-danger" data-dismiss="modal">Odustani</button>
        <input type="submit" class="btn btn-primary" value="Prijavi se"/>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Anketa za lokalne izbore u MZ Kruševo!</h4>
      </div>
      <div class="modal-body">
       
        
      <form method='POST' action='../nezavisni1/grafika1.php' class='aleert alert-warning'>
  <label class='label label-primary'>Da li ste za promjene vlasti u MZ Kruševo?</label></br>
  <input type='radio' name='vote' id='zapromjene' value='zapromjene'  />
  <label for='zapromjene' >Ja sam za promjene</label><br/>
  <input type='radio' name='vote' id='nepromjene' value='nepromjene' />
  <label for='nepromjene'>Ja nisam za promjene</label><br/>


      </div>
      <div class="modal-footer">
      
        <button type="button" class="btn btn-default" data-dismiss="modal">Odustani</button>
        <input type="submit" class="btn btn-primary" value="Glasaj"/>
        </form>
        
      </div>
    </div>
  </div>
</div>
<div id="slide" class="col-xs-12 carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#slide" data-slide-to="0" class="active"></li>
            <li data-target="#slide" data-slide-to="1"></li>
            <li data-target="#slide" data-slide-to="2"></li>
            <li data-target="#slide" data-slide-to="3"></li>
            <li data-target="#slide" data-slide-to="4"></li>
            <li data-target="#slide" data-slide-to="5"></li>
            
    
            
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/naslovna.jpg" alt="...">
                <div class="carousel-caption" style="color:yellow;">
                    Spomenik!
                </div>
            </div>
            <div class="item">
                <img src="images/slika1.jpg" alt="...">
                <div class="carousel-caption">
                    Predstavljanje Nezavisnog Kandidata
                </div>
            </div>

            <div class="item">
                <img src="images/slika2.gif" alt="...">
                <div class="carousel-caption" style="color:red;">
                    Plan i Program 
                </div>
            </div>

            <div class="item">
                <img src="images/republikanci3.gif" alt="...">
                <div class="carousel-caption">
                    Nezavisni Kruševo na listi HRS-a
                </div>
            </div>

            <div class="item">
                <img src="images/slika4.gif" alt="...">
                <div class="carousel-caption">
                    Kultura i obrazovanje
                </div>
            </div>
            <div class="item">
                <img src="images/slika3.gif" alt="...">
                <div class="carousel-caption" style="color:yellow;">
                    Briga za socijalno ugrožene članove
                </div>
            </div>

   
        <a class="left carousel-control" href="#slide" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#slide" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>




</head>
<body>
<div class="container col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:15px;">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title">Daj svoj komentar ili stupi u online kontakt sa nezavisnim kandidatom!</h2>
            </div>
            <div class="panel-body" id="chatPanel">
            </div>
            <div class="panel-footer">
                <div class="input-group">
                    <input type="text" class="form-control" id="chatMessage" placeholder="Upisi komentar ovdje i posalji..."/>
                    <span class="input-group-btn">
                        <button id="sendMessageBtn" class="btn btn-primary has-spinner" type="button">
                            <span class="spinner"><i class="icon-spin icon-refresh"></i></span>
                            Posalji
                        </button>
                    </span>
                </div>
            </div>
        </div>
      
 
</div>
<script src="client.js"></script>
<div class='col-lg-12 col-md-12' style="h5{font-weight: bold;}">
<div class="page-header ">

</div>
</div>

<div class="page-header col-lg-12 col-md-12 col-xs-12 col-sm-12" style="text-align:center;">
  <h1>Kruševo Nezavisni <small>Krešimir Božić </small><small>nezavisnikandidat@gmail.com</small></h1>
</div>
<div class="jumbotron col-lg-12 col-md-12 col-xs-12 col-sm-12">
  <div class="container">
    Dragi moji u ovom priopćenju za javnost želim istaknuti sljedeće.Ja se zovem Krešimir Božić i neovisni sam kandidat na listi Hrvatske Republikanske Stranke (HRS-a) na sljedećim lokalnim izborima za grad Mostar koji će se održati 20.12.20120 godine.
    U mom planu i programu stoje dvije točke za koje ću se boriti ako dobijem povjerenje birača grada Mostara.Te dvije točke su transparentnost i poštenje.Kao gradski vjećnik ću se zalagati da Mostar postane transparentni grad.Ja ću napraviti aplikaciju "Transparentni Mostar" potpuno besplatno i darovat je gradu u kojem sunce najtoplije sja a to zna sva raja Mostarska.Detaljnije informacije o ovoj aplikaciji možete pronaći na ovoj stranici.Ako uđem u gradsko vjeće grada Mostara plaću vjećnika dajem za MZ Kruševo pod uvjetom da MZ Kruševo prihvati transparentni način rada koji nalažem u planu i programu za MZ Kruševo.Ako ne dobijem povjerenje birača grada Mostara na lokalnim izborima ova ponuda za besplatnu aplikaciju mom gradu i dalje stoji.Ako ovo priopćenje dopre do ušiju rukovodećih ljudi u gradu Mostaru da znaju da sam ja tu za svoj grad.Neka nas sve skupa dragi Bog čuva i sretno!
  </div>
</div>

<footer class="col-xs-12" style="text-align: center">

<p class="col-xs-12">2020 (c) Nezavisni Kruševo</p>
</footer>  


</body>


    
<style>
body{
    height: 1200px;
}
nav{
    background-color: rgba(0,0,0,.5);
}
.nav-pills>li{
    float: none;
    display: inline-block;
    vertical-align: middle;
    color:#6f5e91;
}
.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover{
    background-color: #7d42f4;
}
nav ul{
    text-align: center;
    /*float: none;*/
    /*display: inline-block;*/
    /*vertical-align: middle;*/
}
nav li a{
    color:#f2d207;
}
.nav>li>a{
    padding: 0px 10px;
}
nav img {
    height: 80px;
}
#slide{
    height: 450px;
    padding: 0px;
}
#slide .carousel-inner{
    height: 100%;
}
#slide .item{
    height: 100%;
    width: 100%;
}
#slide img{
    height: 100%;
    width: 100%;
}
.circles{
    margin-top: 40px;
    padding-left: 60px;
    padding-right: 60px;
}
.circles > div:hover{
    cursor: pointer;
    background-color: whitesmoke;
    box-shadow: 5px 5px 10px #8d8d8d;
}
.circles div{
    padding: 0px !important;
    transition: box-shadow 0.3s ease-in-out, background-color 0.3s ease-in-out;
}
.circles div{
    text-align: center;
}
/*.circles p{*/
    /*text-align: left;*/
/*}*/
.circles img{
    width: 100%;
    padding-top: 10px;
}
.circles a{
    /*float: left;*/
    text-align:center;
}
.parallax {
    /* The image used */
    /*background-image: url("images/ref1.jpg");*/

    /* Set a specific height */
    /*min-height: 600px;*/

    /* Create the parallax scrolling effect */

    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 20px;
    margin: 40px 0px 40px 0px;
}
/*.parallax-div{*/
    /*height:300px;*/
    /*font-size:22px;*/
/*}*/
.hunter img{
    padding: 5px;
    background-color: transparent;
    box-shadow: 5px 5px 20px #888888;
}
hr{
    margin: 40px 0px 40px 0px;
    padding: 0px !important;
}
/*
    news section
*/
#news{
    background-color: #f1f1f1;
    padding: 20px;
    margin-bottom: 20px;
}
.news-wrap{
    margin-bottom: 10px;
    background-color: #f9f9f9;
    padding-left: 0px;
    box-shadow: 5px 5px 10px #8d8d8d;
    transition: box-shadow 0.3s ease-in-out;
    color: black;
}
.news-wrap:hover{
    box-shadow: none;
    cursor: pointer;
}
.news-wrap img, .text-wrap, .text-wrap h3, .text-wrap p{
    padding-left: 0px;
}
.text-wrap h3{
    margin: 0px;
}
/*.text-wrap, {*/
    /*padding-left: 0px;*/
/*}*/
/*
calendar css
 */

.table-condensed{
    /*text-align: center;*/
    width: 100%;
    /*height: 80px;*/
}
.table-condensed>thead>tr>th{
    text-align: center;
}
.table-condensed>tbody>tr>td{
    /*width: 17%;*/
    height: 80px;
}
.table-condensed .day{
    background-color: #9acfea;
    border: 1px solid white;
}

    .bubble-recv{
        position:relative;
        width:330px;
        height:75px;
        padding:10px;
        background:#AEE5FF;
        -webkit-border-radius:10px;
        -moz-border-radius:10px;
        border-radius:10px;
        border:#000000 solid 1px;
        margin-bottom:10px;
    }
    .bubble-recv:after {
        content:'';
        position:absolute;
        border-style:solid;
        border-width:15px 15px 15px 0;
        border-color:transparent #AEE5FF;
        display:block;
        width:0;
        z-index:1;
        left:-15px;
        top:12px;
    }
    .bubble-recv:before{
        content:'';
        position:absolute;
        border-style:solid;
        border-width:15px 15px 15px 0;
        border-color:transparent #000000;
        display:block;
        width:0;
        z-index:0;
        left:-16px;
        top:12px;
    }
    .bubble-sent{
        position:relative;
        width:330px;
        height:75px;
        padding:10px;
        background:#00E500;
        -webkit-border-radius:10px;
        -moz-border-radius:10px;
        border-radius:10px;
        border:#000000 solid 1px;
        margin-bottom:10px;
    }

    .bubble-sent:after{
        content:'';
        position:absolute;
        border-style:solid;
        border-width:15px 0 15px 15px;
        border-color:transparent #00E500;
        display:block;
        width:0;
        z-index:1;
        right:-15px;
        top:12px;
    }
    .bubble-sent:before{
        content:'';
        position:absolute;
        border-style:solid;
        border-width:15px 0 15px 15px;
        border-color:transparent #000000;
        display:block;
        width:0;
        z-index:0;
        right:-16px;
        top:12px;
    }
    .spinner{
        display:inline-block;
        opacity:0;
        width:0;
        -webkit-transition: opacity 0.25s,width 0.25s;
        -moz-transition:opacity 0.25s,width 0.25s;
        -o-transition:opacity 0.25s,width 0.25s;
        transition:opacity 0.25s,width 0.25s;
    }
    .has-spinner.active{
        cursor:progress;
    }
    .has-spinner.active.spinner{
        opacity:1;
        width:auto;
    }
    .has-spinner.btn-mini.active.spinner{
        width:10px;
    }

    .has-spinner.btn-small.active.spinner{
        width:13px;
    }
    .has-spinner.btn.active.spinner{
        
        width:16px;
    }
    .has-spinner.btn-large.active.spinner{
        
        width:19px;
    }
    .panel-body{
        padding-right:35px;
        padding-left:35px;
    }
</style>

