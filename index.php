<?php
define('DOT', '.');
require_once DOT . "/bootstrap.php";

//Home page//
$Route->add('/hilcot/', function () {
    
    $Core = new Apps\Core;
    $Template = new Apps\Template
    ;
    $Template->assign("title", "Hilcot Energy Services | Oil & Gas");

    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");

    $PageParts = $Core->PageWebParts(1000);
    $Template->assign("PageParts", $PageParts);
    $Template->assign("homepage", true);
    
    $PageInfo = $Core->PageInfo("home");
    $Template->assign("title", $PageInfo->title);
    $Template->assign("PageInfo", $PageInfo);


    $Template->render("home");
}, 'GET');


$Route->add('/hilcot/info/{slug}', function ($slug) {

    $Core = new Apps\Core;
    $Template = new Apps\Template;

    $PageInfo = $Core->PageInfo($slug);
    $Template->assign("title", $PageInfo->title);
    $Template->assign("menutitle", $PageInfo->menutitle);
    $Template->assign("PageInfo", $PageInfo);
    $Template->assign("slug", $slug);

    $PageParts = $Core->PageWebParts($PageInfo->id);
    $Template->assign("PageParts", $PageParts);

    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");

    $Template->render("pageinfo");
}, 'GET');

$Route->add('/hilcot/news/{slug}', function ($slug) {

    $Core = new Apps\Core;
    $Template = new Apps\Template;

    $PageInfo = $Core->PageInfo($slug);

    $Template->assign("title", $PageInfo->title);
    $Template->assign("menutitle", $PageInfo->menutitle);

    $Template->assign("PageInfo", $PageInfo);
    $Template->assign("slug", $slug);

    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");

    $Template->render("newsinfo");
}, 'GET');


$Route->add('/hilcot/dashboard/{action}', function ($action) {

    $Core = new Apps\Core;
    $Template = new Apps\Template("/");
    $Template->assign("title", "Hilcot Admin");

    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");

    $Template->robot("robots", "NOINDEX,NOFOLLOW");

    if ($action == "pages") {
        $Template->assign("title", "Manage Pages & Blog");
        $Template->assign("pages", $Core->AdminListPages());
    } elseif ($action == "addpage") {
        $Template->assign("title", "Add Page or Blog");
    } elseif ($action == "sliders") {
        $Template->assign("slides", $Core->Sliders());
        $Template->assign("title", "Manage Slides");
    } elseif ($action == "products") {
        $Template->assign("products", $Core->Products());
        $Template->assign("title", "Manage Products");
    } elseif ($action == "testimonies") {
        $Template->assign("testimonies", $Core->Testimonies());
        $Template->assign("title", "Manage Testimonies");
    } elseif ($action == "settings") {
        $Template->assign("SiteInfos", $Core->SiteInfos());
        $Template->assign("title", "Manage Site Settings");
    } else {
        $Template->assign("title", "Skin Achiver: Admin Area");
    }
    $Template->render("dashboard.{$action}");
}, 'GET');

$Route->add('/hilcot/dashboard', function () {
    $Core = new Apps\Core;
    $Template = new Apps\Template("/");
    $Template->assign("title", "Hilcot Admin");
    $Template->robot("robots", "NOINDEX,NOFOLLOW");
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->assign("homepage", true);

    $PageParts = $Core->PageWebParts(1000);
    $Template->assign("PageParts", $PageParts);

    $PageInfo = $Core->PageInfo("home");
    $Template->assign("title", $PageInfo->title);
    $Template->assign("PageInfo", $PageInfo);

    $Template->render("dashboard");
}, 'GET');



$Route->add('/hilcot/dashboard/pages/{slug}/{action}', function ($slug, $action) {

    $Core = new Apps\Core;
    $Template = new Apps\Template("/");
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->robot("robots", "NOINDEX,NOFOLLOW");

    $PageInfo = $Core->PageInfo($slug);
    $Template->assign("PageInfo", $PageInfo);

    $Template->assign("title", "{$PageInfo->title} | Edit");
    $Template->assign("slug", "{$PageInfo->slug}");
    $Template->assign("menutitle", "{$PageInfo->menutitle}");
    
    if ($action == "webparts") {
        $directory = './templates/webparts/';
        $WebParts = array_diff(scandir($directory), array('..', '.'));
        $Template->assign("WebParts", $WebParts);
    } elseif ($action == "editpage") {


        $PageParts = $Core->PageWebParts($slug);
        $Template->assign("PageParts", $PageParts);

        //$Core->debug($slug);
    }

    $Template->render("dashboard.{$action}");
}, 'GET');


$Route->add('/hilcot/dashboard/page/{page}/webpart/{webpart}/add', function ($page, $webpart) {
    $Core = new Apps\Core;
    $Template = new Apps\Template("/");
    $Core->mysqli("INSERT INTO hilc_webparts(page,webpart) VALUES('$page','$webpart')");
    $part = $Core->getLastId();
    $PageInfo = $Core->PageInfo($page);
    if ($part) {
        if ($PageInfo->homepage == 1) {
            $Template->redirect("/dashboard");
        }
        $Template->redirect("/hilcot/dashboard/pages/{$page}/editpage");
    }
    $Template->redirect("/hilcot/dashboard/pages/{$page}/webparts");
}, 'GET');




//Home page//

$Route->add('/hilcot/search', function () {
    $Core = new Apps\Core;
    $Template = new Apps\Template;
    $data = $Core->post($_POST);
    $query = $data->query;

    $query_arr = explode("/", $query);
    $cnt_qr = count($query_arr);
    if ($cnt_qr == 2) {
        $username = $query_arr[0];
        $password = $query_arr[1];
        if ($username == $Core->getSiteInfo("username") && $password == $Core->getSiteInfo("password")) {

            $Template->auth = true;
            $Template->data['auth_time'] = date('d-m-Y H:i:s');
            $Template->data[auth_session_key] = true;
            $Template->save();
            $Template->redirect("/hilcot/");
        }
    }
    $Template->redirect("/hilcot/");
}, 'POST');






$Route->add('/hilcot/dashboard/sliders/{slide}/{action}', function ($slide, $action) {

    $Core = new Apps\Core;
    $Template = new Apps\Template("/");
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->robot("robots", "NOINDEX,NOFOLLOW");

    $SliderInfo = $Core->SliderInfo($slide);
    $Template->assign("SliderInfo", $SliderInfo);

    $Template->assign("title", "{$SliderInfo->top_title} | Edit");


    $Template->render("dashboard.{$action}");
}, 'GET');

$Route->add('/hilcot/dashboard/testimonies/{testimony}/{action}', function ($testimony, $action) {

    $Core = new Apps\Core;
    $Template = new Apps\Template("/");
    $Template->addheader("layouts.header");
    $Template->addfooter("layouts.footer");
    $Template->robot("robots", "NOINDEX,NOFOLLOW");

    $TestimonyInfo = $Core->TestimonyInfo($testimony);
    $Template->assign("TestimonyInfo", $TestimonyInfo);

    $Template->assign("title", "{$TestimonyInfo->client} | Testimony");

    $Template->render("dashboard.{$action}");
}, 'GET');






$Route->add('/hilcot/forms/editpage/homepage', function () {

    $Core = new Apps\Core;
    $Template = new Apps\Template;
    $Template->token($Template->data['token']);
    $data = $Core->post($_POST);

    $sorts = $data->sorts;
    foreach ($sorts as $webpartid => $sortval) {
        $Core->setWebPartInfo($webpartid, "sort", $sortval);
    }

    $Template->redirect("/hilcot/dashboard");
}, 'POST');



$Route->add('/hilcot/dashboard/page/{page}/webpart/{part}/delete', function ($page, $part) {
    $Core = new Apps\Core;
    $Template = new Apps\Template;
    $Core->mysqli("DELETE `hilc_webparts`.* FROM hilc_webparts  WHERE id='$part'");
    $PageInfo = $Core->PageInfo($page);
    if ((int) $PageInfo->homepage) {
        $Template->redirect("/hilcot/dashboard");
    }
    $Template->redirect("/dashboard/pages/{$page}/editpage");
}, 'GET');


$Route->add('/hilcot/forms/{action}', function ($action) {
    $Core = new Apps\Core;
    $Template = new Apps\Template;
    $Template->token($Template->data['token']);
    $data = $Core->post($_POST);

    if ($action == "login") {
        $username = $data->username;
        $password = $data->password;
        if (($Core->getSiteInfo("username") == $username) && ($Core->getSiteInfo("password") == $password)) {

            $Template->auth = true;
            $Template->data['auth_time'] = date('d-m-Y H:i:s');
            $Template->data[auth_session_key] = true;
            $Template->save();
        }
        $Template->redirect("/hilcot/");
    } elseif ($action == "settings") {

        $SiteInfos = $Core->SiteInfos();
        while ($site = mysqli_fetch_object($SiteInfos)) {
            $_name = $site->name;
            $Core->setSiteInfo("{$site->name}", $data->$_name);
        }
        $Template->redirect("/hilcot/dashboard/settings");

    } elseif ($action == "getaquote") {

        $p_name = $data->p_name;
        $p_email = $data->p_email;
        $p_subject = $data->p_subject;
        $p_message = $data->p_message;

        $Template->redirect("/hilcot/info/contact-us?done=+");


    } elseif ($action == "edittestimony") {

        $testid = $data->testid;

        $client = $data->client;
        $Core->setTestimonyInfo($testid, "client", $client);

        $title = $data->title;
        $Core->setTestimonyInfo($testid, "title", $title);

        $testimony = $data->testimony;
        $Core->setTestimonyInfo($testid, "testimony", $testimony);

        if ($_FILES["photo"]['size'] > 0) {
            $handle = new \Verot\Upload\Upload($_FILES["photo"]);
            $handle->file_new_name_body = sha1(time());
            $handle->image_resize   = true;
            $handle->image_y    = 300;
            $handle->image_x    = 300;
            $FileDir = "./_store/testimonies/photos/";
            $handle->process($FileDir);
            if ($handle->processed) {
                $photo = $handle->file_dst_pathname;
                $handle->clean();
                $Core->setTestimonyInfo($testid, "photo", $photo);
                $Template->redirect("/hilcot/dashboard/testimonies/{$testid}/edittestimony");
            }
        }
        $Template->redirect("/hilcot/dashboard/testimonies/{$testid}/edittestimony");
    } elseif ($action == "addtestimony") {

        $client = $data->client;
        $title = $data->title;
        $testimony = $data->testimony;
        if ($_FILES["photo"]['size'] > 0) {
            $handle = new \Verot\Upload\Upload($_FILES["photo"]);
            $handle->file_new_name_body = sha1(time());
            $handle->image_resize   = true;
            $handle->image_y    = 300;
            $handle->image_x    = 300;
            $FileDir = "./_store/testimonies/photos/";
            $handle->process($FileDir);
            if ($handle->processed) {
                $photo = $handle->file_dst_pathname;
                $handle->clean();
                $Core->mysqli("INSERT INTO hilc_testimonies(client,title,testimony,photo) VALUES('$client','$title','$testimony','$photo')");
                $testimony = $Core->getLastId();
                $Template->redirect("/hilcot/dashboard/testimonies/{$testimony}/edittestimony");
            }
        }
        $Template->redirect("/hilcot/dashboard/testimonies");
    } elseif ($action == "addpage") {

        $title = $data->title;

        $menutitle = $data->menutitle;
        $slug = $Core->slugify($menutitle);

        $parent = $data->parent;
        $sort = $data->sort;
        $type = $data->type;

        if(isset($data->category)){
            $category = json_encode($data->category);
        }

        if ($_FILES["photo"]['size'] > 0) {

            $handle = new \Verot\Upload\Upload($_FILES["photo"]);
            $FileDir = "./_store/pages/photos/";

            $handle->image_resize   = true;
            $handle->image_y    = 500;
            $handle->image_x    = 800;

            $handle->process($FileDir);
            if ($handle->processed) {
                $photo = $handle->file_dst_pathname;
                $handle->clean();
                $Core->mysqli("INSERT INTO hilc_pages(slug,menutitle,title,type,parent,sort,page_photo,category) VALUES('$slug','$menutitle','$title','$type','$parent','$sort','$photo','$category')");
                $page = $Core->getLastId();
            } else {
                $Core->mysqli("INSERT INTO hilc_pages(slug,menutitle,title,type,parent,sort) VALUES('$slug','$menutitle','$title','$type','$parent','$sort')");
                $page = $Core->getLastId();
            }
            $Template->redirect("/hilcot/dashboard/pages/{$page}/editpage");
        }
    } elseif ($action == "editpage") {


        $page = $data->page;

        $title = $data->title;
        $Core->setPageInfo($page, "title", $title);


        $menutitle = $data->menutitle;
        $Core->setPageInfo($page, "menutitle", $menutitle);

        $slug = $Core->slugify($menutitle);
        $Core->setPageInfo($page, "slug", $slug);

        $parent = $data->parent;
        $Core->setPageInfo($page, "parent", $parent);

        $sort = $data->sort;
        $Core->setPageInfo($page, "sort", $sort);

        $type = $data->type;
        $Core->setPageInfo($page, "type", $type);

        $sorts = $data->sorts;
        foreach ($sorts as $webpartid => $sortval) {
            $Core->setWebPartInfo($webpartid, "sort", $sortval);
        }

        if(isset($data->category)){
            $category = json_encode($data->category);
            $Core->setPageInfo($page, "category", $category); 
        }

        if ($_FILES["photo"]['size'] > 0) {

            $handle = new \Verot\Upload\Upload($_FILES["photo"]);
            //$phototype = $handle->file_src_mime;
            //$photosize = $handle->file_src_size;
            $FileDir = "./_store/pages/photos/";

            $handle->image_resize   = true;
            $handle->image_y    = 500;
            $handle->image_x    = 800;
            
         $handle->process($FileDir);
            if ($handle->processed) {
                $photo = $handle->file_dst_pathname;
                $handle->clean();
                $Core->setPageInfo($page, "page_photo", $photo);
            }
        }
        $Template->redirect("/hilcot/hilcot/dashboard/pages/{$page}/editpage");
    } elseif ($action == "deleteproduct") {
        $product = $data->product;
        $Core->mysqli("DELETE hilc_products.* FROM hilc_products WHERE id='$product'");
        $Template->redirect("/hilcot/dashboard/products/");
    } elseif ($action == "deletepage") {
        $page = $data->page;
        $Core->mysqli("DELETE hilc_pages.* FROM hilc_pages WHERE id='$page'");
        $Template->redirect("/hilcot/hilcot/dashboard/pages/");
    } elseif ($action == "deletetestimony") {

        $testid = $data->testid;
        $Core->mysqli("DELETE hilc_testimonies.* FROM hilc_testimonies WHERE id='$testid'");
        $Template->redirect("/hilcot/dashboard/testimonies/");
        
    } elseif ($action == "deleteslider") {

        $slide = $data->slide;
        $Core->mysqli("DELETE hilc_slides.* FROM hilc_slides WHERE id='$slide'");
        $Template->redirect("/hilcot/dashboard/sliders/");
    } elseif ($action == "addslider") {

        $toptitle = $data->toptitle;
        $maintitle = $data->maintitle;
        $subtitle = $data->subtitle;
        $buttontext = $data->buttontext;
        $pagelink = $data->pagelink;

        if ($_FILES["photo"]['size'] > 0) {

            $handle = new \Verot\Upload\Upload($_FILES["photo"]);
            //$phototype = $handle->file_src_mime;
            //$photosize = $handle->file_src_size;
            $FileDir = "./_store/sliders/photos/";
            $handle->process($FileDir);
            if ($handle->processed) {
                $slide = $handle->file_dst_pathname;
                $Core->mysqli("INSERT INTO hilc_slides(top_title,main_title,sub_title,button_text,page_link,slide) VALUES('$toptitle','$maintitle','$subtitle','$buttontext','$pagelink','$slide')");
                $slider = $Core->getLastId();
                $Template->redirect("/hilcot/dashboard/sliders/{$slider}/editslider");
                $handle->clean();
            }
        }
        $Template->redirect("/hilcot/dashboard/sliders");
    } elseif ($action == "editslider") {

        $slide = $data->slide;

        $toptitle = $data->toptitle;
        $Core->setSliderInfo($slide, "top_title", $toptitle);

        $maintitle = $data->maintitle;
        $Core->setSliderInfo($slide, "main_title", $maintitle);

        $subtitle = $data->subtitle;
        $Core->setSliderInfo($slide, "sub_title", $subtitle);

        $buttontext = $data->buttontext;
        $Core->setSliderInfo($slide, "button_text", $buttontext);

        $pagelink = $data->pagelink;
        $Core->setSliderInfo($slide, "page_link", $pagelink);

        if ($_FILES["photo"]['size'] > 0) {

            $handle = new \Verot\Upload\Upload($_FILES["photo"]);
            //$phototype = $handle->file_src_mime;
            //$photosize = $handle->file_src_size;
            $FileDir = "./_store/sliders/photos/";
            $handle->process($FileDir);
            if ($handle->processed) {
                $slideimg = $handle->file_dst_pathname;
                $Core->setSliderInfo($slide, "slide", $slideimg);
                $handle->clean();
            }
        }
        $Template->redirect("/hilcot/dashboard/sliders/{$slide}/editslider");
    } elseif ($action == "addproduct") {


        $title = $data->title;
        $description = $data->description;
        $price = $data->price;
        $tags = $data->tags;

        if ($_FILES["photo"]['size'] > 0) {

            $handle = new \Verot\Upload\Upload($_FILES["photo"]);
            $FileDir = "./_store/products/photos/";

            $handle->file_new_name_body = sha1($FileDir  . $title  . $description  . $price  . $tags .  time());

            $handle->image_resize   = true;
            $handle->image_y    = 500;
            $handle->image_x    = 500;

            $handle->process($FileDir);
            if ($handle->processed) {
                $photourl = $handle->file_dst_pathname;
                $Core->mysqli("INSERT INTO hilc_products(name,description,price,tags,photos) VALUES('$title','$description','$price','$tags','$photourl')");
                $product = $Core->getLastId();
                $Template->redirect("/hilcot/dashboard/products/{$product}/editproduct");
                $handle->clean();
            }
        }
        $Template->redirect("/hilcot/dashboard/products");
    } elseif ($action == "editproduct") {

        $product = $data->product;

        $title = $data->title;
        $Core->setProductInfo($product, "name", $title);

        $description = $data->description;
        $Core->setProductInfo($product, "description", $description);

        $price = $data->price;
        $Core->setProductInfo($product, "price", $price);

        $tags = $data->tags;
        $Core->setProductInfo($product, "tags", $tags);


        if ($_FILES["photo"]['size'] > 0) {

            $handle = new \Verot\Upload\Upload($_FILES["photo"]);
            $FileDir = "./_store/products/photos/";

            $handle->file_new_name_body = sha1($FileDir  . $title  . $description  . $price  . $tags .  time());

            $handle->image_resize   = true;
            $handle->image_y    = 500;
            $handle->image_x    = 500;

            $handle->process($FileDir);
            if ($handle->processed) {
                $photourl = $handle->file_dst_pathname;
                $Core->setProductInfo($product, "photos", $photourl);
                $handle->clean();
            }
        }
        $Template->redirect("/hilcot/dashboard/products/{$product}/editproduct");
    }
}, 'POST');




$Route->add('/hilcot/quickedit/{cmskey}', function ($cmskey) {
    $Core = new Apps\Core;
    $data = $Core->post($_POST);
    $text = $data->cmskey;    
    $done = $Core->CMSkey($cmskey, $text);
    $result = array(
        "status" => $done,
        "text" => $text
    );
    $result = json_encode($result);
    echo $result;
}, 'POST');


$Route->add('/hilcot/quickupload/{cmskey}/w/{w}/h/{h}', function ($cmskey,$w,$h) {
    $Core = new Apps\Core;

    if ($_FILES["file"]['size'] > 0) {

        $handle = new \Verot\Upload\Upload($_FILES["file"]);
        $FileDir = "./_store/cms/photos/";

        $handle->file_new_name_body = $cmskey;

        $handle->image_resize = true;
        $handle->image_y = $h;
        $handle->image_x = $w;

        $handle->process($FileDir);
        if ($handle->processed) {
            $photourl = $handle->file_dst_pathname;
            $handle->clean();
        }

    }
    $done = $Core->CMSkey($cmskey, $photourl);
    $result = array(
        "status" => $done,
        "text" => $photourl
    );
    $result = json_encode($result);
    echo $result;
}, 'POST');





$Route->add('/hilcot/login', function () {
    $Template = new Apps\Template;
    $Template->authorize();
    $Template->redirect("/");
}, 'POST');

$Route->add('/hilcot/site', function () {
    $Template = new Apps\Template;
    $Template->assign("title", "Hilcot Energy Services | Oil & Gas");
    $Template->render("working");
}, 'GET');

$Route->add('/hilcot/auth/logout', function () {
    $Core = new Apps\Core;
    $Template = new Apps\Template;
    $Template->expire();
    $Template->cleanAll(360);
    $Template->redirect("/hilcot/");
}, 'GET');




$Route->run('/');
