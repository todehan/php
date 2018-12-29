<?php
 include "header.php";

 $menusor=$db->prepare("SELECT * FROM menu where menu_id=:id");
 $menusor->execute(array(
   'id' => $_GET['menu_id']
 ));
 $say=$menusor->rowCount();
 $menucek=$menusor->fetch(PDO::FETCH_ASSOC);



?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel"> 
                  <div class="x_title">

                  <h2>Menü Düzenle <small>

              <?php 

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif ($_GET['durum']=="no") {?>

              <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>


            </small></h2>

                   <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Adı <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="ayar_title" required="required" name="menu_ad" value="<?php echo $menucek['menu_ad'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Menü Detayı <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="ckeditor" id="editor1" name="menu_detay"><?php echo $hakkimizdacek['menu_detay']; ?></textarea>
                        </div>
                      </div>

                      

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Url <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="ayar_title" required="required" name="menu_url" value="<?php echo $menucek['menu_url'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      

                      
                      <input type="hidden" id="ayar_title" required="required" name="menu_seourl" value="<?php echo $menucek['menu_seourl'] ?>" class="form-control col-md-7 col-xs-12">
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Sırası <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="ayar_title" required="required" name="menu_sira" value="<?php echo $menucek['menu_sira'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><br>Menü Durumu<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p style="color:blue"> Menüyü devre dışı bırakmak için 0, aktif etmek için 1 girin. </p>
                          <input type="text" id="ayar_title" required="required" name="menu_durum" value="<?php echo $menucek['menu_durum'] ?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      

                      <input type="hidden" name="menu_id" value="<?php echo $menucek['menu_id'] ?>">

                      <script type="text/javascript">
                          
                          CKEDITOR.replace( 'editor1',{

                            filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
                            filebrowserImageBrowserUrl : 'ckfinder/ckfinder.html?type=Images',
                            filebrowserFlashBrowserUrl : 'ckfinder/ckfinder.html?type=Flash',
                            filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                            filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                            filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                            forcePasteAsPlainText : true

                          });
                          
                      
                      
                      </script>

                      
                      
                       
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          
                          <button type="submit" name="menuduzenle" value="ok" class="btn btn-success">Güncelle</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
         </div>
        </div>
        <!-- /page content -->

<?php include "footer.php" ?>