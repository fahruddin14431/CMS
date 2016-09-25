<br><br><br>
    <hr class="hidden-lg hidden-md hidden-xs">
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4 hidden-xs">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Kategori CMS</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <?php 
                                    include 'Config/koneksi.php';
                                    $result1 = $koneksi->query("SELECT * FROM tb_kategori");
                                    while ($row = $result1->fetch_object()){ ?>
                                    <li>                                    
                                        <a href="#"><?php echo $row->nama_kategori; ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>