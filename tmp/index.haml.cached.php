<!DOCTYPE html>
<html>
 <meta charset="utf-8"></meta>
 <meta name="viewport" content="width=(device-width, initial-scale=1.0)"></meta>
 <title>Chat</title>
 <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"></link>
 <link href="css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css"></link>
 <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"></link>
 <link href="css/jquery.mCustomScrollbar.min.css" rel="stylesheet" type="text/css"></link>
 <link href="css/style.css" rel="stylesheet" type="text/css"></link>
 <link href="css/style-s.css" rel="stylesheet" media="only screen and (max-width:480px)" type="text/css"></link>
 <link href="css/style-m.css" rel="stylesheet" media="only screen and (min-width:481px) and (max-width:800px)" type="text/css"></link>
 <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
 <script src="js/jquery.mCustomScrollbar.min.js" type="text/javascript"></script>
 <script src="js/moment-with-locales.js" type="text/javascript"></script>
 <script src="js/bootstrap-datetimepicker.js" type="text/javascript"></script>
 <script src="js/bootstrap.min.js" type="text/javascript"></script>
 <script src="js/main.js" type="text/javascript"></script>
 <body>
  <!-- Start Header -->
  <header <?php atts(array('id' => 'header')); ?>>
   <div <?php atts(array('class' => 'container')); ?>>
    <!-- Start Menu Top -->
    <div <?php atts(array('id' => 'menu-top')); ?>>
     <ul <?php atts(array('class' => 'clearfix')); ?>>
      <li>
       <span <?php atts(array('class' => 'fa fa-caret-right')); ?>></span>
       <a>Menu1</a>
      </li>
      <li>
       <span <?php atts(array('class' => 'fa fa-caret-right')); ?>></span>
       <a>Menu2</a>
      </li>
      <li>
       <span <?php atts(array('class' => 'fa fa-caret-right')); ?>></span>
       <a>Menu3 (description menu)</a>
      </li>
     </ul>
    </div>
    <!-- End Menu Top -->
    <!-- Start Logo -->
    <div <?php atts(array('id' => 'logo')); ?>>
     <h2>
      <span <?php atts(array('class' => 'icon-caret')); ?>></span>
     </h2>
     <a <?php atts(array('id' => 'btn-home', 'href' => "#")); ?>>
      <span <?php atts(array('class' => 'fa fa-home')); ?>></span>
      <span>HOME</span>
     </a>
    </div>
    <!-- End Logo -->
   </div>
  </header>
  <!-- End Header -->
  <!-- Start Menu Middle -->
  <div <?php atts(array('id' => 'menu-middle')); ?>>
   <ul>
    <li>
     <a href="#">
      <span <?php atts(array('id' => 'star-icon', 'class' => 'icon')); ?>></span>
      <span <?php atts(array('class' => 'text-icon')); ?>>Star</span>
     </a>
    </li>
    <li>
     <a href="#">
      <span <?php atts(array('id' => 'group-icon', 'class' => 'icon')); ?>></span>
      <span <?php atts(array('class' => 'text-icon')); ?>>Group</span>
     </a>
    </li>
    <li>
     <a href="#">
      <span <?php atts(array('id' => 'couple-icon', 'class' => 'icon')); ?>></span>
      <span <?php atts(array('class' => 'text-icon')); ?>>Couple</span>
     </a>
    </li>
    <li>
     <a href="#">
      <span <?php atts(array('id' => 'hand-icon', 'class' => 'icon')); ?>></span>
      <span <?php atts(array('class' => 'text-icon')); ?>>Hand</span>
     </a>
    </li>
    <li>
     <a href="#">
      <span <?php atts(array('id' => 'calendar-icon', 'class' => 'icon')); ?>></span>
      <span <?php atts(array('class' => 'text-icon')); ?>>Calendar</span>
     </a>
    </li>
    <li>
     <a href="#">
      <span <?php atts(array('id' => 'clap-icon', 'class' => 'icon')); ?>></span>
      <span <?php atts(array('class' => 'text-icon')); ?>>Clap & Walk</span>
     </a>
    </li>
    <li>
     <a href="#">
      <span <?php atts(array('id' => 'question-icon', 'class' => 'icon')); ?>></span>
      <span <?php atts(array('class' => 'text-icon')); ?>>Question</span>
     </a>
    </li>
    <li>
     <a href="#">
      <span <?php atts(array('id' => 'camera-icon', 'class' => 'icon')); ?>></span>
      <span <?php atts(array('class' => 'text-icon')); ?>>Camera</span>
     </a>
    </li>
   </ul>
  </div>
  <!-- End Menu Middle -->
  <!-- Start Menu Bottom -->
  <div <?php atts(array('id' => 'menu-bottom')); ?>>
   <div <?php atts(array('class' => 'container')); ?>>
    <div <?php atts(array('id' => 'guest')); ?>></div>
    <p>
     <span <?php atts(array('class' => 'icon-guest')); ?>></span>
     <span>Hello Guest!! Welcome to my site!</span>
    </p>
    <a <?php atts(array('id' => 'signin', 'href' => "#")); ?>>
     <span <?php atts(array('class' => 'fa fa-angle-right')); ?>></span>
     <span>Sign In</span>
    </a>
    <a <?php atts(array('id' => 'login', 'href' => "#")); ?>>
     <span <?php atts(array('class' => 'fa fa-angle-right')); ?>></span>
     <span>Login</span>
    </a>
   </div>
  </div>
  <!-- End Menu Bottom -->
  <div <?php atts(array('class' => 'container')); ?>>
   <!-- Start Slider -->
   <div <?php atts(array('id' => 'slider', 'class' => 'carousel slide', 'data-ride' => "carosel")); ?>>
    <ol <?php atts(array('class' => 'carousel-indicators')); ?>>
     <li <?php atts(array('class' => 'active', 'data-target' => "#slider", 'data-slide-to' => "0")); ?>></li>
     <li data-target="#slider" data-slide-to="1"></li>
     <li data-target="#slider" data-slide-to="2"></li>
     <li data-target="#slider" data-slide-to="3"></li>
     <li data-target="#slider" data-slide-to="4"></li>
    </ol>
    <div <?php atts(array('class' => 'carousel-inner', 'role' => "listbox")); ?>>
     <div <?php atts(array('class' => 'item active')); ?>>
      <img src="images/slide/slide1.jpg"></img>
     </div>
     <div <?php atts(array('class' => 'item')); ?>>
      <img src="images/slide/slide2.jpg"></img>
     </div>
     <div <?php atts(array('class' => 'item')); ?>>
      <img src="images/slide/slide3.jpg"></img>
     </div>
     <div <?php atts(array('class' => 'item')); ?>>
      <img src="images/slide/slide4.jpeg"></img>
     </div>
     <div <?php atts(array('class' => 'item')); ?>>
      <img src="images/slide/slide5.jpg"></img>
     </div>
    </div>
    <!-- Control -->
    <a <?php atts(array('class' => 'left carousel-control', 'href' => "#slider", 'role' => "button", 'data-slide' => "prev")); ?>>
     <span <?php atts(array('class' => 'fa fa-angle-left', 'aria-hidden' => "true")); ?>></span>
     <span <?php atts(array('class' => 'sr-only')); ?>>Previous</span>
    </a>
    <a <?php atts(array('class' => 'right carousel-control', 'href' => "#slider", 'role' => "button", 'data-slide' => "next")); ?>>
     <span <?php atts(array('class' => 'fa fa-angle-right', 'aria-hidden' => "true")); ?>></span>
     <span <?php atts(array('class' => 'sr-only')); ?>>Next</span>
    </a>
   </div>
   <!-- End Slider -->
  </div>
  <!-- Start Main Content -->
  <div <?php atts(array('class' => 'main-content container')); ?>>
   <!-- Start Header Main Content -->
   <header <?php atts(array('class' => 'clearfix')); ?>>
    <p <?php atts(array('id' => 'title-header', 'class' => 'col-sm-3 col-xs-4')); ?>>
     <span <?php atts(array('class' => 'icon-commad')); ?>></span>
     <span>header sidebar hear</span>
    </p>
    <div <?php atts(array('id' => 'time', 'class' => 'col-sm-9 col-xs-8')); ?>>
     <span <?php atts(array('class' => 'fa fa-caret-right')); ?>></span>
     <span>15.02.14</span>
     <a href="#">
      Click me to show
     </a>
     <span <?php atts(array('class' => 'fa fa-angle-right')); ?>></span>
    </div>
   </header>
   <!-- End Header Main Content -->
   <div <?php atts(array('class' => 'clearfix')); ?>></div>
   <div <?php atts(array('id' => 'sidebar', 'class' => 'col-sm-3 col-xs-4')); ?>>
    <!-- Start calender -->
    <div <?php atts(array('id' => 'calender')); ?>>
     <p <?php atts(array('id' => 'header-calender')); ?>>
      <span <?php atts(array('class' => 'fa fa-calendar')); ?>></span>
      <span>Header Sider bar</span>
      <span <?php atts(array('class' => 'icon-caret')); ?>></span>
     </p>
     <div <?php atts(array('id' => 'wrap-calendar')); ?>></div>
    </div>
    <!-- End calender -->
    <img <?php atts(array('class' => 'img-responsive', 'src' => "images/sb.jpg")); ?>></img>
    <img <?php atts(array('class' => 'img-responsive', 'src' => "images/sb1.jpg")); ?>></img>
    <img <?php atts(array('class' => 'img-responsive', 'src' => "images/sb2.jpg")); ?>></img>
   </div>
   <!-- Start Content Right -->
   <div <?php atts(array('id' => 'content-right', 'class' => 'col-sm-9 col-xs-8')); ?>>
    <!-- Start Tab -->
    <div <?php atts(array('class' => 'wrap-tab')); ?>>
     <ul <?php atts(array('id' => 'header-tab', 'class' => 'nav nav-tabs', 'role' => "tablist")); ?>>
      <li <?php atts(array('class' => 'active', 'role' => "presentation")); ?>>
       <a <?php atts(array('id' => 'tab1', 'href' => "#content-tab1", 'data-toggle' => "tab", 'aria-controls' => "content-tab1", 'aria-expanded' => "true", 'role' => "tab")); ?>>
        Tab1
       </a>
      </li>
      <li role="presentation">
       <a <?php atts(array('id' => 'tab2', 'href' => "#content-tab2", 'data-toggle' => "tab", 'aria-controls' => "content-tab2", 'aria-expanded' => "false", 'role' => "tab")); ?>>
        Tab2
       </a>
      </li>
      <li role="presentation">
       <a <?php atts(array('id' => 'tab3', 'href' => "#content-tab3", 'data-toggle' => "tab", 'aria-controls' => "content-tab3", 'aria-expanded' => "false", 'role' => "tab")); ?>>
        Tab3
       </a>
      </li>
      <li role="presentation">
       <a <?php atts(array('id' => 'tab4', 'href' => "#content-tab4", 'data-toggle' => "tab", 'aria-controls' => "content-tab4", 'aria-expanded' => "false", 'role' => "tab")); ?>>
        Tab4
       </a>
      </li>
     </ul>
     <div <?php atts(array('class' => 'tab-content')); ?>>
      <!-- Start Content Tab1 -->
      <div <?php atts(array('id' => 'content-tab1', 'class' => 'tab-pane fade active in', 'role' => "tabpanel", 'aria-labelledby' => "tab1")); ?>>
       <!-- item 1 -->
       <div <?php atts(array('class' => 'col-sm-5 col-xs-12 item-list')); ?>>
        <img src="images/content/1.jpg"></img>
        <p <?php atts(array('class' => 'header-item')); ?>>
         <span <?php atts(array('class' => 'time')); ?>>
          15.7.09
         </span>
         <span <?php atts(array('class' => 'order')); ?>>
          order
         </span>
        </p>
        <a <?php atts(array('class' => 'content-item')); ?>>
         Shopping | Minneapolis Shopping
        </a>
       </div>
       <!-- item 2 -->
       <div <?php atts(array('class' => 'col-sm-5 col-xs-12 item-list')); ?>>
        <img src="images/content/2.jpg"></img>
        <p <?php atts(array('class' => 'header-item')); ?>>
         <span <?php atts(array('class' => 'time')); ?>>
          15.7.10
         </span>
         <span <?php atts(array('class' => 'pink buy')); ?>>
          buy
         </span>
         <span <?php atts(array('class' => 'order')); ?>>
          order
         </span>
        </p>
        <a <?php atts(array('class' => 'content-item')); ?>>
         Where to shop in Paris
        </a>
       </div>
       <!-- item 3 -->
       <div <?php atts(array('class' => 'col-sm-5 col-xs-12 item-list')); ?>>
        <img src="images/content/3.jpg"></img>
        <p <?php atts(array('class' => 'header-item')); ?>>
         <span <?php atts(array('class' => 'time')); ?>>
          15.7.09
         </span>
         <span <?php atts(array('class' => 'order')); ?>>
          order
         </span>
        </p>
        <a <?php atts(array('class' => 'content-item')); ?>>
         Shopping woman silhouette
        </a>
       </div>
       <!-- item 4 -->
       <div <?php atts(array('class' => 'col-sm-5 col-xs-12 item-list')); ?>>
        <img src="images/content/4.jpg"></img>
        <p <?php atts(array('class' => 'header-item')); ?>>
         <span <?php atts(array('class' => 'time')); ?>>
          15.7.11
         </span>
         <span <?php atts(array('class' => 'order')); ?>>
          order
         </span>
        </p>
        <a <?php atts(array('class' => 'content-item')); ?>>
         Shopping in Nassau Paradise Island
        </a>
       </div>
       <!-- item 5 -->
       <div <?php atts(array('class' => 'col-sm-5 col-xs-12 item-list')); ?>>
        <img src="images/content/5.jpg"></img>
        <p <?php atts(array('class' => 'header-item')); ?>>
         <span <?php atts(array('class' => 'time')); ?>>
          15.7.10
         </span>
         <span <?php atts(array('class' => 'pink order')); ?>>
          order
         </span>
        </p>
        <a <?php atts(array('class' => 'content-item')); ?>>
         150+ Beautiful Fashion Shopping Girls Vector Art For Designers
        </a>
       </div>
       <!-- item 6 -->
       <div <?php atts(array('class' => 'col-sm-5 col-xs-12 item-list')); ?>>
        <img src="images/content/6.jpg"></img>
        <p <?php atts(array('class' => 'header-item')); ?>>
         <span <?php atts(array('class' => 'time')); ?>>
          15.7.20
         </span>
         <span <?php atts(array('class' => 'order')); ?>>
          order
         </span>
        </p>
        <a <?php atts(array('class' => 'content-item')); ?>>
         Shopping tours - Kristel Car renting | Kristel Car renting
        </a>
       </div>
       <div <?php atts(array('class' => 'clearfix')); ?>>
        <a <?php atts(array('class' => 'btn-show', 'href' => "#")); ?>>
         <span <?php atts(array('class' => 'fa fa-angle-right')); ?>></span>
         Show more
        </a>
       </div>
      </div>
      <!-- End Content Tab 1 -->
      <!-- Start Content Tab 2 -->
      <div <?php atts(array('id' => 'content-tab2', 'class' => 'tab-pane fade', 'role' => "tabpanel", 'aria-labelledby' => "tab2")); ?>>
       <!-- item 1 -->
       <div <?php atts(array('class' => 'col-sm-5 col-xs-12 item-list')); ?>>
        <img src="images/content/1.jpg"></img>
        <p <?php atts(array('class' => 'header-item')); ?>>
         <span <?php atts(array('class' => 'time')); ?>>
          15.7.09
         </span>
         <span <?php atts(array('class' => 'order')); ?>>
          order
         </span>
        </p>
        <a <?php atts(array('class' => 'content-item')); ?>>
         Shopping | Minneapolis Shopping
        </a>
       </div>
       <!-- item 2 -->
       <div <?php atts(array('class' => 'col-sm-5 col-xs-12 item-list')); ?>>
        <img src="images/content/10.jpg"></img>
        <p <?php atts(array('class' => 'header-item')); ?>>
         <span <?php atts(array('class' => 'time')); ?>>
          15.7.10
         </span>
         <span <?php atts(array('class' => 'pink buy')); ?>>
          buy
         </span>
         <span <?php atts(array('class' => 'order')); ?>>
          order
         </span>
        </p>
        <a <?php atts(array('class' => 'content-item')); ?>>
         Where to shop in Paris
        </a>
       </div>
       <!-- item 3 -->
       <div <?php atts(array('class' => 'col-sm-5 col-xs-12 item-list')); ?>>
        <img src="images/content/11.jpg"></img>
        <p <?php atts(array('class' => 'header-item')); ?>>
         <span <?php atts(array('class' => 'time')); ?>>
          15.7.09
         </span>
         <span <?php atts(array('class' => 'order')); ?>>
          order
         </span>
        </p>
        <a <?php atts(array('class' => 'content-item')); ?>>
         Shopping woman silhouette
        </a>
       </div>
       <!-- item 4 -->
       <div <?php atts(array('class' => 'col-sm-5 col-xs-12 item-list')); ?>>
        <img src="images/content/9.jpg"></img>
        <p <?php atts(array('class' => 'header-item')); ?>>
         <span <?php atts(array('class' => 'time')); ?>>
          15.7.11
         </span>
         <span <?php atts(array('class' => 'order')); ?>>
          order
         </span>
        </p>
        <a <?php atts(array('class' => 'content-item')); ?>>
         Shopping in Nassau Paradise Island
        </a>
       </div>
       <!-- item 5 -->
       <div <?php atts(array('class' => 'col-sm-5 col-xs-12 item-list')); ?>>
        <img src="images/content/8.jpg"></img>
        <p <?php atts(array('class' => 'header-item')); ?>>
         <span <?php atts(array('class' => 'time')); ?>>
          15.7.10
         </span>
         <span <?php atts(array('class' => 'pink order')); ?>>
          order
         </span>
        </p>
        <a <?php atts(array('class' => 'content-item')); ?>>
         150+ Beautiful Fashion Shopping Girls Vector Art For Designers
        </a>
       </div>
       <!-- item 6 -->
       <div <?php atts(array('class' => 'col-sm-5 col-xs-12 item-list')); ?>>
        <img src="images/content/7.jpg"></img>
        <p <?php atts(array('class' => 'header-item')); ?>>
         <span <?php atts(array('class' => 'time')); ?>>
          15.7.20
         </span>
         <span <?php atts(array('class' => 'order')); ?>>
          order
         </span>
        </p>
        <a <?php atts(array('class' => 'content-item')); ?>>
         Shopping tours - Kristel Car renting | Kristel Car renting
        </a>
       </div>
       <div <?php atts(array('class' => 'clearfix')); ?>>
        <a <?php atts(array('class' => 'btn-show', 'href' => "#")); ?>>
         <span <?php atts(array('class' => 'fa fa-angle-right')); ?>></span>
         Show more
        </a>
       </div>
      </div>
      <!-- End Content Tab 2 -->
      <!-- Start Content Tab 3 -->
      <div <?php atts(array('id' => 'content-tab3', 'class' => 'tab-pane fade', 'role' => "tabpanel", 'aria-labelledby' => "tab3")); ?>>
       <!-- item 1 -->
       <div <?php atts(array('class' => 'col-sm-5 col-xs-12 item-list')); ?>>
        <img src="images/content/1.jpg"></img>
        <p <?php atts(array('class' => 'header-item')); ?>>
         <span <?php atts(array('class' => 'time')); ?>>
          15.7.09
         </span>
         <span <?php atts(array('class' => 'order')); ?>>
          order
         </span>
        </p>
        <a <?php atts(array('class' => 'content-item')); ?>>
         Shopping | Minneapolis Shopping
        </a>
       </div>
       <!-- item 2 -->
       <div <?php atts(array('class' => 'col-sm-5 col-xs-12 item-list')); ?>>
        <img src="images/content/2.jpg"></img>
        <p <?php atts(array('class' => 'header-item')); ?>>
         <span <?php atts(array('class' => 'time')); ?>>
          15.7.10
         </span>
         <span <?php atts(array('class' => 'pink buy')); ?>>
          buy
         </span>
         <span <?php atts(array('class' => 'order')); ?>>
          order
         </span>
        </p>
        <a <?php atts(array('class' => 'content-item')); ?>>
         Where to shop in Paris
        </a>
       </div>
       <!-- item 3 -->
       <div <?php atts(array('class' => 'col-sm-5 col-xs-12 item-list')); ?>>
        <img src="images/content/3.jpg"></img>
        <p <?php atts(array('class' => 'header-item')); ?>>
         <span <?php atts(array('class' => 'time')); ?>>
          15.7.09
         </span>
         <span <?php atts(array('class' => 'order')); ?>>
          order
         </span>
        </p>
        <a <?php atts(array('class' => 'content-item')); ?>>
         Shopping woman silhouette
        </a>
       </div>
       <!-- item 4 -->
       <div <?php atts(array('class' => 'col-sm-5 col-xs-12 item-list')); ?>>
        <img src="images/content/4.jpg"></img>
        <p <?php atts(array('class' => 'header-item')); ?>>
         <span <?php atts(array('class' => 'time')); ?>>
          15.7.11
         </span>
         <span <?php atts(array('class' => 'order')); ?>>
          order
         </span>
        </p>
        <a <?php atts(array('class' => 'content-item')); ?>>
         Shopping in Nassau Paradise Island
        </a>
       </div>
       <!-- item 5 -->
       <div <?php atts(array('class' => 'col-sm-5 col-xs-12 item-list')); ?>>
        <img src="images/content/5.jpg"></img>
        <p <?php atts(array('class' => 'header-item')); ?>>
         <span <?php atts(array('class' => 'time')); ?>>
          15.7.10
         </span>
         <span <?php atts(array('class' => 'pink order')); ?>>
          order
         </span>
        </p>
        <a <?php atts(array('class' => 'content-item')); ?>>
         150+ Beautiful Fashion Shopping Girls Vector Art For Designers
        </a>
       </div>
       <!-- item 6 -->
       <div <?php atts(array('class' => 'col-sm-5 col-xs-12 item-list')); ?>>
        <img src="images/content/6.jpg"></img>
        <p <?php atts(array('class' => 'header-item')); ?>>
         <span <?php atts(array('class' => 'time')); ?>>
          15.7.20
         </span>
         <span <?php atts(array('class' => 'order')); ?>>
          order
         </span>
        </p>
        <a <?php atts(array('class' => 'content-item')); ?>>
         Shopping tours - Kristel Car renting | Kristel Car renting
        </a>
       </div>
       <div <?php atts(array('class' => 'clearfix')); ?>>
        <a <?php atts(array('class' => 'btn-show', 'href' => "#")); ?>>
         <span <?php atts(array('class' => 'fa fa-angle-right')); ?>></span>
         Show more
        </a>
       </div>
      </div>
      <!-- End Content Tab 3 -->
      <!-- Start Content Tab 4 -->
      <div <?php atts(array('id' => 'content-tab4', 'class' => 'tab-pane fade', 'role' => "tabpanel", 'aria-labelledby' => "tab4")); ?>>
       <!-- item 1 -->
       <div <?php atts(array('class' => 'col-sm-5 col-xs-12 item-list')); ?>>
        <img src="images/content/1.jpg"></img>
        <p <?php atts(array('class' => 'header-item')); ?>>
         <span <?php atts(array('class' => 'time')); ?>>
          15.7.09
         </span>
         <span <?php atts(array('class' => 'order')); ?>>
          order
         </span>
        </p>
        <a <?php atts(array('class' => 'content-item')); ?>>
         Shopping | Minneapolis Shopping
        </a>
       </div>
       <!-- item 2 -->
       <div <?php atts(array('class' => 'col-sm-5 col-xs-12 item-list')); ?>>
        <img src="images/content/2.jpg"></img>
        <p <?php atts(array('class' => 'header-item')); ?>>
         <span <?php atts(array('class' => 'time')); ?>>
          15.7.10
         </span>
         <span <?php atts(array('class' => 'pink buy')); ?>>
          buy
         </span>
         <span <?php atts(array('class' => 'order')); ?>>
          order
         </span>
        </p>
        <a <?php atts(array('class' => 'content-item')); ?>>
         Where to shop in Paris
        </a>
       </div>
       <!-- item 3 -->
       <div <?php atts(array('class' => 'col-sm-5 col-xs-12 item-list')); ?>>
        <img src="images/content/3.jpg"></img>
        <p <?php atts(array('class' => 'header-item')); ?>>
         <span <?php atts(array('class' => 'time')); ?>>
          15.7.09
         </span>
         <span <?php atts(array('class' => 'order')); ?>>
          order
         </span>
        </p>
        <a <?php atts(array('class' => 'content-item')); ?>>
         Shopping woman silhouette
        </a>
       </div>
       <!-- item 4 -->
       <div <?php atts(array('class' => 'col-sm-5 col-xs-12 item-list')); ?>>
        <img src="images/content/4.jpg"></img>
        <p <?php atts(array('class' => 'header-item')); ?>>
         <span <?php atts(array('class' => 'time')); ?>>
          15.7.11
         </span>
         <span <?php atts(array('class' => 'order')); ?>>
          order
         </span>
        </p>
        <a <?php atts(array('class' => 'content-item')); ?>>
         Shopping in Nassau Paradise Island
        </a>
       </div>
       <!-- item 5 -->
       <div <?php atts(array('class' => 'col-sm-5 col-xs-12 item-list')); ?>>
        <img src="images/content/5.jpg"></img>
        <p <?php atts(array('class' => 'header-item')); ?>>
         <span <?php atts(array('class' => 'time')); ?>>
          15.7.10
         </span>
         <span <?php atts(array('class' => 'pink order')); ?>>
          order
         </span>
        </p>
        <a <?php atts(array('class' => 'content-item')); ?>>
         150+ Beautiful Fashion Shopping Girls Vector Art For Designers
        </a>
       </div>
       <!-- item 6 -->
       <div <?php atts(array('class' => 'col-sm-5 col-xs-12 item-list')); ?>>
        <img src="images/content/6.jpg"></img>
        <p <?php atts(array('class' => 'header-item')); ?>>
         <span <?php atts(array('class' => 'time')); ?>>
          15.7.20
         </span>
         <span <?php atts(array('class' => 'order')); ?>>
          order
         </span>
        </p>
        <a <?php atts(array('class' => 'content-item')); ?>>
         Shopping tours - Kristel Car renting | Kristel Car renting
        </a>
       </div>
       <div <?php atts(array('class' => 'clearfix')); ?>>
        <a <?php atts(array('class' => 'btn-show', 'href' => "#")); ?>>
         <span <?php atts(array('class' => 'fa fa-angle-right')); ?>></span>
         Show more
        </a>
       </div>
      </div>
      <!-- End Content Tab 4 -->
     </div>
     <!-- End Tab Content -->
    </div>
    <!-- End Wrap Tab -->
    <div <?php atts(array('class' => 'clearfix')); ?>></div>
    <!-- Start News -->
    <div <?php atts(array('id' => 'news', 'class' => 'clearfix')); ?>>
     <div <?php atts(array('id' => 'news-box-left')); ?>>
      <h2>News</h2>
      <a <?php atts(array('id' => 'readmore', 'href' => "#")); ?>>
       <span <?php atts(array('class' => 'fa fa-angle-right')); ?>></span>
       <span>Readmore</span>
      </a>
     </div>
     <div <?php atts(array('id' => 'news-box-right')); ?>>
      <ul>
       <li>
        <span <?php atts(array('class' => 'fa fa-caret-right')); ?>></span>
        <span>15.02.05</span>
        <a href="#">
         Shop in these great London January sales
        </a>
       </li>
       <li>
        <span <?php atts(array('class' => 'fa fa-caret-right')); ?>></span>
        <span>15.05.05</span>
        <a href="#">
         Online shopping « A Shade Of Pen
        </a>
       </li>
       <li>
        <span <?php atts(array('class' => 'fa fa-caret-right')); ?>></span>
        <span>15.15.05</span>
        <a href="#">
         Get Ahead on Google Shopping Campaigns
        </a>
       </li>
       <li>
        <span <?php atts(array('class' => 'fa fa-caret-right')); ?>></span>
        <span>15.20.05</span>
        <a href="#">
         FMA RedDot Shopping Week 2005
        </a>
       </li>
      </ul>
     </div>
    </div>
    <!-- End News -->
   </div>
   <!-- End Main Content -->
   <!-- Start footer -->
  </div>
  <footer>
   <div <?php atts(array('id' => 'company')); ?>>
    <!-- Start Company -->
    <div <?php atts(array('class' => 'container')); ?>>
     <ul>
      <li <?php atts(array('class' => 'col-sm-2')); ?>>
       <a>
        <img <?php atts(array('class' => 'img-responsive', 'src' => "images/1.jpg")); ?>></img>
       </a>
      </li>
      <li <?php atts(array('class' => 'col-sm-2')); ?>>
       <a>
        <img <?php atts(array('class' => 'img-responsive', 'src' => "images/3.jpg")); ?>></img>
       </a>
      </li>
      <li <?php atts(array('class' => 'col-sm-2')); ?>>
       <a>
        <img <?php atts(array('class' => 'img-responsive', 'src' => "images/4.jpg")); ?>></img>
       </a>
      </li>
      <li <?php atts(array('class' => 'col-sm-2')); ?>>
       <a>
        <img <?php atts(array('class' => 'img-responsive', 'src' => "images/5.jpg")); ?>></img>
       </a>
      </li>
      <li <?php atts(array('class' => 'col-sm-2')); ?>>
       <a>
        <img <?php atts(array('class' => 'img-responsive', 'src' => "images/6.jpg")); ?>></img>
       </a>
      </li>
      <li <?php atts(array('class' => 'col-sm-2')); ?>>
       <a></a>
       <img <?php atts(array('class' => 'img-responsive', 'src' => "images/7.jpg")); ?>></img>
      </li>
     </ul>
    </div>
    <!-- End Company -->
   </div>
   <div <?php atts(array('class' => 'container')); ?>>
    <!-- Start Tags -->
    <div <?php atts(array('id' => 'tag', 'class' => 'col-sm-6 col-xs-12')); ?>>
     <ul <?php atts(array('class' => 'content-tag')); ?>>
      <li>
       <a href="#">HOME</a>
      </li>
      <li>
       <a href="#">Shose</a>
      </li>
      <li>
       <a href="#">Mouse</a>
      </li>
      <li>
       <a href="#">Pant</a>
      </li>
      <li>
       <a href="#">Jeans</a>
      </li>
      <li>
       <a href="#">TShirt</a>
      </li>
      <li>
       <a href="#">Heat</a>
      </li>
      <li>
       <a href="#">Pan</a>
      </li>
      <li>
       <a href="#">Cupper</a>
      </li>
      <li>
       <a href="#">Car</a>
      </li>
      <li>
       <a href="#">DVD</a>
      </li>
     </ul>
    </div>
    <!-- End Tags -->
    <!-- Start Contact -->
    <div <?php atts(array('id' => 'contact', 'class' => 'col-sm-6 col-xs-12')); ?>>
     <img <?php atts(array('id' => 'img-contact', 'class' => 'img-responsive', 'src' => "images/contact.jpg")); ?>></img>
     <p>
      London is one of the world's greatest shopping capitals.
     </p>
     <p>
       And the joy of retail therapy becomes even greater when.
     </p>
     <p>
      There are some of the biggest bargains
     </p>
    </div>
    <!-- End Contact -->
   </div>
   <div <?php atts(array('id' => 'copyright')); ?>>
    <div <?php atts(array('class' => 'container')); ?>>
     <p>© 2015 VTDVN Company</p>
     <a <?php atts(array('id' => 'top-page', 'href' => "#header")); ?>>
      <span <?php atts(array('class' => 'fa fa-angle-up')); ?>></span>
      <span>PAGETOP</span>
     </a>
    </div>
   </div>
  </footer>
 </body>
</html>
