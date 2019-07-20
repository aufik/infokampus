<?php foreach($profile as $lo): ?>
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
                    Profile
                    <small>Dashboard /  Ubah Profile</small>
                </h2>
            </div>

            <!-- Advanced Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Ubah Profile Start-Up</h2>
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
                                
                            <form id="form_advanced_validation frmFileUpload" method="POST" action="<?=base_url();?>index.php/admin/profile/update/<?=$lo->id_pt?>/do"  enctype="multipart/form-data">
                                <input type="hidden" placeholder="id_bimbel" name="id_pt" value="<?=$lo->id_pt?>" class="form-control">
                                <div class="form-group form-float">
                                <label class="form-label">Nama Perusahaan</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama_pt" value="<?=$lo->nama_pt?>" maxlength="255" minlength="1" required>
                                        
                                    </div>
                                    <div class="help-info">Min. 1, Max. 255 characters</div>
                                </div>
                                 <div class="form-group form-float">
                                <label class="form-label">No. Hp</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="no_telp" value="<?=$lo->no_telp?>" maxlength="255" minlength="1" required>
                                        
                                    </div>
                                    <div class="help-info">Min. 1, Max. 255 characters</div>
                                </div>
                                 <div class="form-group form-float">
                                <label class="form-label">E-Mail</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="email" value="<?=$lo->email?>" maxlength="255" minlength="1" required>
                                        
                                    </div>
                                    <div class="help-info">Min. 1, Max. 255 characters</div>
                                </div>
                                  <div class="form-group form-float">
                                <label class="form-label">Alamat</label>
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="alamat" value="<?=$lo->alamat?>" maxlength="255" minlength="1" required>
                                        
                                    </div>
                                    <div class="help-info">Min. 1, Max. 255 characters</div>
                                </div>
                                <div class="form-group form-float">
                                <label class="form-label">Tentang Kami</label>
                                    <div class="form-line">
                                        <textarea id="ckeditor" Value="Isi" name="tentang"><?=$lo->tentang?>
                                        </textarea>

                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                <label class="form-label">Visi</label>
                                    <div class="form-line">
                                        <textarea id="ckeditor2" Value="Isi" name="visi"><?=$lo->visi?>
                                        </textarea>

                                    </div>
                                </div>
                                 <div class="form-group form-float">
                                <label class="form-label">Misi</label>
                                    <div class="form-line">
                                        <textarea id="ckeditor3" Value="Isi" name="misi"><?=$lo->misi?>
                                        </textarea>

                                    </div>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">UBAH</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Validation -->
            <div id="images"></div>
        </div>
    </section
<?php endforeach; ?>    
