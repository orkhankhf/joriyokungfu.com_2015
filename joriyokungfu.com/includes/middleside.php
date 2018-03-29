<!-- MIDDLE SIDE START -->
  <div class="col-lg-7 col-md-7 col-sm-9" style="padding:0px;">
            <!-- SLIDER START -->
          <script type="text/javascript" src="js/jssor.slider.min.js"></script>
          <script type="text/javascript" src="js/slider.js"></script>
          <div id="jssor_1" class="jssor_1">
          <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('sliderimg/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
          </div>
          <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 500px; overflow: hidden;">
            <!-- <div data-p="144.50" style="display: none;">
              <img data-u="image" src="sliderimg/IMG125867.jpg" />
                 sekile yazi elave etmek istesem<div style="font-size:30px; position:relative; z-index:0;">Xeber 1</div>
              <img data-u="thumb" src="sliderimg/alt-1.jpg" />
            </div> -->
            <?php
            include "DB/db.php";
            if($conn){
              $select = "SELECT * FROM slider order by tarix";
              $result = mysqli_query($conn,$select);
              while($row = mysqli_fetch_assoc($result)){
                echo "<div data-p='144.50' style='display: none;'>";
                echo "<img data-u='image' src='".$row['tmp']."'/>";
                echo "</div>";
              }
            }
            ?>
          </div>
          <!-- Thumbnail Navigator -->
          <!-- <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1"> --><!-- Thumbnail Item Skin Begin -->
            <!-- <div data-u="slides" style="cursor: default;">
              <div data-u="prototype" class="p">
                <div class="w">
                  <div data-u="thumbnailtemplate" class="t"></div>
                </div>
                <div class="c"></div>
              </div>
            </div>
          </div> -->
            <span data-u="arrowleft" class="jssora05l" style="top:205px;left:8px;width:40px;height:40px;"></span>
            <span data-u="arrowright" class="jssora05r" style="top:205px;right:8px;width:40px;height:40px;"></span>
          </div>
          <script>jssor_1_slider_init();</script>
          <!-- SLIDER FINISH -->



<div class="under-slider col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <!-- VIDEO PLAYER START -->
          <div class="logo-of-ackf col-md-4 col-sm-12 col-xs-12" style="margin-top:50px;">
            <img src="logo/2016_World_Kung_Fu_Tai_Chi_Championships.jpg" class="img-responsive" alt="2016 World Kung Fu & Tai Chi Championships">
            <div>
              <a href="http://joriyokungfu.com/xeber.php?page718957" title="2016 World Kung Fu & Tai Chi Championships" target="_blank">
                <span>2016 World Kung Fu &</span>
                <span>Tai Chi Championships</span>
              </a>
            </div>
          </div>
          <div class="videoplayer-div col-md-7 col-md-push-1 col-sm-12 col-xs-12">
          <h2></h2>
            <video autoplay controls>
              <source src="mp4/Azerbaijan-Joriyo-Kung-Fu-Federation.mp4" type="video/mp4">
              <source src="mov_bbb.ogg" type="video/ogg">
            </video>
          </div>
          <!-- VIDEO PLAYER FINISH -->

          <!--RESMI LOGOLAR START-->
            <div class="col-xs-12 resmi-logolar-main">
              <a href="http://www.mys.gov.az/" target="_blank"><div class="col-xs-3"><img src="logo/genclerveidmannazirliyi.gif" class="col-md-12 img-responsive"><span>Gənclər və İdman Nazirliyi</span></div></a>
              <a href="http://www.dysbaku.az/" target="_blank"><div class="col-xs-6"><img src="logo/dysbaku.png" class="col-md-12 img-responsive"></div></a>
              <a href="https://www.noc-aze.org/az/" target="_blank"><div class="col-xs-3"><img src="logo/milliolimpiyakomitesi.png" class="col-md-12 img-responsive"><span>Milli Olimpiya Komitəsi</span></div></a>
            </div>
          <!--RESMI LOGOLAR FINISH-->

</div>
  </div>
<!-- MIDDLE SIDE FINISH -->