﻿<?php foreach($lomba as $lo): ?>
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Lomba
                    <small>Lomba / Permintaan Lomba / Tambah Lomba</small>
                </h2>
            </div>

            <!-- Advanced Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Update Formulir Lomba</h2>
                            <!-- <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>
                        <div class="body">
                        <!-- class="dropzone" -->
                        <!-- <div class="form-group form-float "  class="">
                                    <div class="form-line">
                                            <div class="dz-message">
                                            <div class="drag-icon-cph">
                                                <i class="material-icons">touch_app</i>
                                            </div>
                                            <h3>Drop files here or click to upload.</h3>
                                            <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em>
                                        </div>
                                        <div class="fallback ">
                                            <input name="file" type="file" multiple />
                                        </div>
                                        
                                    </div>
                                    <div class="help-info">Min. 1, Max. 255 characters</div>
                                </div> -->
                            <form id="form_advanced_validation frmFileUpload" method="POST" action="<?=base_url();?>index.php/member/lomba/update_proses/<?=$lo->lomba_id?>"  enctype="multipart/form-data">
                            <script>
                                function tampilkanPreview(gambar,idpreview){
                    //                membuat objek gambar
                                    var gb = gambar.files;
                    //                loop untuk merender gambar
                                    for (var i = 0; i < gb.length; i++){
                    //                    bikin variabel
                                        var gbPreview = gb[i];
                                        var imageType = /image.*/;
                                        var preview=document.getElementById(idpreview);
                                        var reader = new FileReader();
                                        if (gbPreview.type.match(imageType)) {
                    //                        jika tipe data sesuai
                                            preview.file = gbPreview;
                                            reader.onload = (function(element) {
                                                return function(e) {
                                                    element.src = e.target.result;
                                                };
                                            })(preview);
                        //                    membaca data URL gambar
                                            reader.readAsDataURL(gbPreview);
                                        }else{
                    //                        jika tipe data tidak sesuai
                                            alert("Type file tidak sesuai. Khusus image.");
                                        }
                                    }
                                }
                            </script>
                            <img id="preview" src="<?=base_url();?>assets/img/poster/<?=$lo->lomba_gambar;?>" alt="" width="150px" style="border:2px solid black;display: block;margin-left: auto;margin-right: auto;"/>
                            <input type="hidden" value="<?=$lo->lomba_gambar;?>" name="poster_lama">
                            <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" name="poster" class="form-control" value="<?=$lo->lomba_gambar?>"  onchange="tampilkanPreview(this,'preview')"> 
                                    </div>
                                    <div class="help-info">Min. 1, Max. 255 characters</div>
                                </div>
                                <div class="form-group form-float">
                                <label class="form-label">Judul</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="lomba_judul" maxlength="255" minlength="1" value="<?=$lo->lomba_judul?>" required>
                                        
                                    </div>
                                    <div class="help-info">Min. 1, Max. 255 characters</div>
                                </div>
                                <div class="form-group form-float">
                                <label class="form-label">Katergori Lomba</label>
                                    <div class="form-line">
                                        <select class="form-control show-tick" data-live-search="true" name="lomba_kat_id">
                                        <?php foreach($kategori as $kat):
                                        
                                            if($kat->lomba_kategori_id == $lo->lomba_kat_id){ 
                                        ?>
                                            <option value="<?=$kat->lomba_kategori_id?>" selected><?=$kat->lomba_kategori_nama?></option>
                                        <?php
                                            }else{
                                        ?>
                                            <option value="<?=$kat->lomba_kategori_id?>"><?=$kat->lomba_kategori_nama?></option>
                                        <?php
                                            }
                                        ?>
                                        <?php endforeach;?>
                                    </select>
                                    
                                    </div>
                                    <div class="help-info">Min. 1, Max. 255 characters</div>
                                </div>
                                <div class="form-group form-float">
                                <label class="form-label">LINK</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="lomba_link" maxlength="255" minlength="1" value="<?=$lo->lomba_link?>">
                                        
                                    </div>
                                    <div class="help-info">Min. 1, Max. 255 characters</div>
                                </div>
                                <div class="form-group form-float">
                                <label class="form-label">Alamat</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="lomba_alamat" maxlength="255" minlength="1"  value="<?=$lo->lomba_alamat?>" required>
                                        
                                    </div>
                                    <div class="help-info">Min. 1, Max. 255 characters</div>
                                </div>
                                <div class="form-group form-float">
                                <label class="form-label">Deadline</label>
                                    <div class="form-line">
                                        <input id='datetimepicker4' type="text" class="form-control" name="lomba_deadline"  value="<?=$lo->lomba_deadline?>" required>
                                        
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                <label class="form-label">Keterangan / Isi</label>
                                    <div class="form-line">
                                        <textarea id="ckeditor" Value="Isi" name="lomba_isi">
                                        <?=$lo->lomba_isi?>
                                        </textarea>

                                    </div>
                                </div>
                                
                                
                                    
                                <button class="btn btn-primary waves-effect" type="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Validation -->
        </div>
    </section>
<?php endforeach; ?>

<script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datetimepicker();
            });
        </script>