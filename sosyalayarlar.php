<?php include('header.php');



?>
        <div class="right_col" role="main">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Sosyal Ayarlar<small>

                      <?php
                      if(isset($_GET['durum'])){
                      if($_GET['durum']=="no"){ ?>

                        <b style="color:green;">İşlem Başarılı...</b>

                      <?php } elseif($_GET['durum']=="ok"){?>
                        <b style="color:red;">İşlem Başarısız...</b>
                      <?php } }
                      ?>

                    </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content"> 
                    <br>
                    <!--[/ en yukarı cık][../ bir üst dizine cık] -->
                    <form action="islem.php" method="POST"  id="demo-form2"  class="form-horizontal form-label-left" >

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Facebook </span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="title" name = "ayar_facebook" value="<?php echo $ayarcek['ayar_facebook'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Twitter</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="description" name="ayar_twitter" value="<?php echo $ayarcek['ayar_twitter'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Google</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="description" name="ayar_google" value="<?php echo $ayarcek['ayar_google'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Youtube</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="description" name="ayar_youtube" value="<?php echo $ayarcek['ayar_youtube'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="sosyalayarkaydet" class="btn btn-success">Güncelle</button> 
                        </div>
                      </div>

                </form>
              </div>
            </div>
          </div>
        </div>
   
<?php include('footer.php'); ?>