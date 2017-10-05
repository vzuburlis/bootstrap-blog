

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

              <!-- Blog Post -->
                <h1><?=$title?></h1>
                <p class="lead">by <a href="#"><?=$author?></a></p>
                <hr>
                <p>Posted on <?=date('F j, Y',strtotime($updated))?></p>
                <hr>
                <?php  if($_img=view::thumb_lg($img,$id.'__lg.jpg'))
                  echo '<img class="img-responsive" src="'.$_img.'" alt=""><hr>'; ?>
                <?=$text?>
                <hr>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
                <?php view::widget_area('sidebar'); ?>
                <!-- Blog Search Well >
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

                </div>
            </div-->

        </div>
        <!-- /.row -->
