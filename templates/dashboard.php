           <!-- BANNER -->
           <div class="section banner-page about">
               <div class="container" style="padding-top: 80px;">
                   <div class="row">
                       <div class="col-sm-12 col-md-12">
                           <div class="title-page">Administrator</div>
                           <ol class="breadcrumb">
                               <li><a href="/hilcot/dashboard">Admin</a></li>
                               <li class="active">Area</li>
                           </ol>
                       </div>
                   </div>
               </div>
           </div>

           <div class="section overlap info">
               <div class="container">


                   <legend class="mb-3">Edit Home Page
                       <a class="pull-right btn btn-mini btn-success" href="/dashboard/pages/1000/webparts"><span>+Add Web Parts</span></a>
                   </legend>
                   <hr />


                   <form action="/hilcot/forms/editpage/homepage" method="POST" enctype="multipart/form-data">
                       <?= $Me->tokenize() ?>
                       <input type="hidden" name="page" value="<?= $PageInfo->id ?>">
                       <div class="row">
                           <?php
                            $i = 0;
                            while ($page_part = mysqli_fetch_object($PageParts)) : ?>
                               <div class="col-12 col-md-12">
                                   <?php require("./templates/webparts/{$page_part->webpart}/index.php"); ?>
                               </div>
                               <div class="col-12 col-md-12">

                                   <div class="alert alert-info">
                                       <div class="row">
                                           <div class="col-12 col-md-12">

                                               <div class="input-group">
                                                   <span class="input-group-addon">SORT NUMBER</span>
                                                   <input required name="sorts[<?= $page_part->id ?>]" id="sorts" class="form-control form-control-lg" style="font-weight: 900; padding:2px 10px;" type="number" min="0" placeholder="0" value="<?= $page_part->sort ?>">
                                                   <a class="input-group-addon btn btn-primary btn-sm" href="/dashboard/page/<?= $PageInfo->id ?>/webpart/<?= $page_part->id ?>/delete">Delete</a>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           <?php
                            endwhile; ?>
                       </div>

                       <div class="row-flud clearfix">
                           <div class="col-12 col-md-12 mt-5">
                               <button type="submit" class="btn btn-primary btn-lg btn-span">Update Home Page</button>
                           </div>
                       </div>

                   </form>

               </div>
           </div>