<!-- NAVBAR START -->
<div class="container">
   <nav class="row navbar navbar-inverse navbar-main">
  <div class="container-fluid">
    <div class="row">
            <ul class="nav dis-none-li navbar-nav">
                    <li class="nav-menu-close"><span onClick="deyis()">Menu &nbsp;<span class="glyphicon glyphicon-menu-down at-span"></span></span></li>
                    <script type="text/javascript">
                    function deyis(){
                      if(document.getElementsByClassName('dis-none-li')[0]){
                        document.getElementsByClassName('dis-none-li')[0].setAttribute("class","dis-block-li nav navbar-nav");
                      }else{
                        document.getElementsByClassName('dis-block-li')[0].setAttribute("class","dis-none-li nav navbar-nav");
                      }
                    }
                    </script>
                    <li><a href="index.php">Ana Səhifə</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Kung Fu<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="kung_fu_nedir.php">Kunq Fu Nədir?</a></li>
                        <li><a href="ackf_tarixi.php">ACKF Tarixi</a></li>
                        <li><a href="kung_fu_derece_sistemi.php">Dərəcə Sistemi</a></li>
                        <li><a href="taolu.php">Taolu</a></li>
                      </ul>
                    </li>


                    <li><a href="taichi.php">Tai Chi</a></li>


                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Qaydalar<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="lightsanda.php">Kung Fu Light</a></li>
                        <li><a href="fullsanda.php">Kung Fu Full</a></li>
                        <li><a href="#">Kung Fu Extra Full</a></li>
                        <li><a href="taolu_qaydalar.php">Taolu</a></li>
                        <li><a href="#">Tuesho</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Qalereya<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="photogalery.php">Şəkillər</a></li>
                        <li><a href="videogalery.php">Videolar</a></li>
                      </ul>
                    </li>




                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Rəhbərlik<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="rehberlik.php">Rəhbərlər</a></li>
                        <li><a href="hakimler.php">Hakimlər</a></li>
                        <li><a href="regionlar.php">Regionlar</a></li>
                      </ul>
                    </li>





                    <li><a href="yigma-komanda.php">Yığma Komanda</a></li>


                    <li><a href="uzvluk.php">Üzvlük</a></li>


                    <li><a href="tedbirler.php">Tədbirlər</a></li>


                    <li><a href="sponsorluq.php">Sponsorluq</a></li>


                    <li><a href="elaqe.php">Əlaqə</a></li>

            </ul>
    </div>
  </div>
</nav>
</div>
<!-- NAVBAR FINISH -->