<?php include('header.php');



?>
        <div class="right_col" role="main">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Genel Ayarlar<small>

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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Başlık </span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="title" name = "ayar_title" value="<?php echo $ayarcek['ayar_title'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Açıklama </span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="description" name="ayar_description" value="<?php echo $ayarcek['ayar_description'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="keywords" class="control-label col-md-3 col-sm-3 col-xs-12">Anahtar Kelimeler</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="keywords" class="form-control col-md-7 col-xs-12" type="text" name="ayar_keywords"value="<?php echo $ayarcek['ayar_keywords'] ?>" >
                        </div>
                      </div> 
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Site Yazar</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="auth" name ="ayar_author" value="<?php echo $ayarcek['ayar_author'] ?>" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
  
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="genelayarkaydet" class="btn btn-success">Güncelle</button> 
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
                  </div>
                </div>
   
<?php include('footer.php'); ?>