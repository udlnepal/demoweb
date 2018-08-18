
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                         <div class="card">
                            <div class="header">
                                <h4 class="title">Header and Navigation(Menu) Setup</h4>
                                <?php echo form_open('admin/site_title_setup/set_site_title'); ?>
                               <div class="input-group bg-info">
                                <span class="input-group-addon" style="min-width: 238px;">Site Title:</span>
                                   <?php foreach ($header_title as $ht): ?>
                                    <input type="text" class="form-control"  name="site_title"value="<?php echo $ht['site_title'];?>" required= >
                                </div>
                                <div class="input-group bg-info mar-5-top">
 <span class="input-group-addon">Additional Info (Optional For SEO):</span>                               
                                    <input type="text" class="form-control" name="add_info" value="<?php echo $ht['add_info']; ?>">
                                     <?php endforeach; ?>                                  
                               </div>
                               <div class="col-lg-12 mar-5-top text-right"><button type="submit"  class="btn  btn-success">Update</button>&nbsp;</div>
<?php echo form_close(); ?>
                            </div>

                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Menu List Title</th>
                                        <th>Menu Link</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Dakota Rice</td>
                                            <td>$36,738</td>
                                            <td>Niger</td>
                                            <td>Oud-Turnhout</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Minerva Hooper</td>
                                            <td>$23,789</td>
                                            <td>Curaçao</td>
                                            <td>Sinaai-Waas</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Sage Rodriguez</td>
                                            <td>$56,142</td>
                                            <td>Netherlands</td>
                                            <td>Baileux</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Philip Chaney</td>
                                            <td>$38,735</td>
                                            <td>Korea, South</td>
                                            <td>Overland Park</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Doris Greene</td>
                                            <td>$63,542</td>
                                            <td>Malawi</td>
                                            <td>Feldkirchen in Kärnten</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Mason Porter</td>
                                            <td>$78,615</td>
                                            <td>Chile</td>
                                            <td>Gloucester</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                  
                </div>

        </div>