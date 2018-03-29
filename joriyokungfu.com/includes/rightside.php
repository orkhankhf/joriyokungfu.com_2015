<!-- RIGHT SIDE START -->
  <div class="right-side-main col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding:0px;">

  <div class="panel panel-default">
            <div class="panel-heading my-panel-heading-on-rightside"><span class="glyphicon glyphicon-list-alt my-glpstyle"></span><b>ƏN SON YENİLİKLƏR</b></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12">
                        <ul id="demo3">
  <?php
include "DB/db.php";
$select = "SELECT * FROM yenilikler order by tarix desc limit 15";
$result=mysqli_query($conn,$select);
while($row =mysqli_fetch_assoc($result)){
                            $if_tmp="";
                            if($row['tmp']!=""){
                              $if_tmp="<strong> - FOTO</strong>";
                             }else{
                               $if_tmp="";
                             }
                            echo "<li class='news-item'>";
                              echo "<a class='top-xeber-basligi' href='xeber.php?page".$row['id']."'>".$row['basliq'].$if_tmp."</a>";
                              echo "<div class='qisa-xeber-div'>";
                                echo $row['text'];
                              echo "</div>";
                              echo "<a class='read-more' href='xeber.php?page".$row['id']."'>Ardını Oxu...</a>";
                            echo "</li>";
}
?>                      </ul>
                    </div>
                </div>
            </div>
             <div class="panel-footer"><a class="btn btn-primary" href="ensonyenilikler.php">Hamısına bax</a></div>
  </div>
  <script type="text/javascript">
      $(function () {
          $("#demo3").bootstrapNews({
              newsPerPage: 5,
              autoplay: true,
              direction: 'down',
              newsTickerInterval: 3500,
              pauseOnHover: true,
              onToDo: function () {
                  //console.log(this);
              }
          });
      });
  </script>
  </div>
<!-- RIGHT SIDE FINISH -->
