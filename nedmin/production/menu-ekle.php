<?php
 include "header.php";
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel"> 
                  <div class="x_title">

                  <h2>Menü Ekleme <small>

             


            </small></h2>

                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" >Menü Adı <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="ayar_title" required="required" name="menu_ad" placeholder="Menü adını giriniz" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Menü Detayı <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="ckeditor" id="editor1" name="menu_detay" ></textarea>
                        </div>
                      </div>

                      

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Url <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="ayar_title"  name="menu_url"  placeholder="Menü url giriniz"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      

                      
                      
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menü Sırası <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="ayar_title" required="required" name="menu_sira"  placeholder="Menü sırasını giriniz" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"><br>Menü Durumu<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <p style="color:blue"> Menüyü pasif eklemek için 0, aktif eklemek için 1 girin. </p>
                          <input type="text" id="ayar_title" required="required" name="menu_durum"  placeholder="Menü durumunu giriniz" class="form-control col-md-7 col-xs-12">
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
                          
                          <button type="submit" name="menuekle" value="ok" class="btn btn-success">Ekle</button>
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