
        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    <?=gila::config('title')?>
                    <small></small>
                </h1>

                <!-- Posts -->
                <?php foreach ($c->posts as $r) { ?>
                <h2>
                    <a href="<?=blog::get_url($r['id'],$r['slug'])?>"><?=$r['title']?></a>
                </h2>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?=date('F j, Y',strtotime($r['updated']))?></p>
                <hr>
                <?php  if($img=view::thumb_lg($r['img'],$r['id'].'__lg.jpg'))
                  echo '<img class="img-responsive" src="'.$img.'" alt=""><hr>'; ?>
                <?=strip_tags($r['post'])?><br>
                <a class="btn btn-primary" href="<?=blog::get_url($r['id'],$r['slug'])?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>
                <?php } ?>

                <!-- Pager -->
                <!-- Pagination -->
                <ul class="g-nav pagination">
                    <?php
                    $totalpages = blog::totalpages();
                    for($pl=0;$pl<$totalpages;$pl++) { ?>
                    <li class="">
                        <a href="?page=<?=$pl+1?>"><?=($pl+1)?></a>
                    </li>
                    <?php } ?>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">
                <?php view::widget_area('sidebar'); ?>
            </div>

        </div>
        <!-- /.row -->
