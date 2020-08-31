<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="id">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta property="title" content="Nirwana Course" />
    <meta property="type" content="advertisment" />
    <meta property="url" content="http://www.nirwana-course.com/" />
    <meta property="site_name" content="Nirwana Course" />
    <title><?php echo $shang;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url('assets/panel/Books.ico')?>' />
    <link href="<?php echo base_url('assets/core/css/main.css')?>" rel="stylesheet">
    <script type="text/javascript">var base_url = '<?php echo base_url()?>'; site_url = '<?php echo site_url()?>';</script>
</head>

<body>
    <!-- <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header"> -->
        <div class="app-header header-shadow <?php echo $this->session->userdata("Header");?>" ; style=text-align:right>
            <div class="app-header__logo" ; style=margin-left:75px>
                  <h4>  PT  
                <b>Kanisius</b></h4>  

                  <!-- <h5><small>media</small><h5> -->
                <!-- <div class="logo-src"></div> -->
                <div class="header__pane ml-auto">
                    <div>
                        
                            <span class="">
                                <span class=""></span>
                            </span>
                      
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                   
                        <span class="">
                            <span class=""></span>
                        </span>
                    
                </div>
            </div>
            <div class="app-header__menu"; style=align:center>
                   
                            <a href=<?= base_url('dashboard')?>> Home </a>
                            <li>
                            <a href=<?= base_url('input')?>> Input </a>
                            <li>
                            <a href=<?= base_url('report')?> > Report </a>
                            <li>
                            <a href=<?= base_url('panel/logout')?> > Logout </a>
                            <li>
                           
            </div>

            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <!-- <input type="text" class="search-input" placeholder="Type to search"> -->
                            <!-- <button class="search-icon"><span></span></button> -->
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-menu nav"; style=margin-left:100px>
                        <li class="nav-item">
                            <a href= <?= base_url('dashboard')?> class="nav-link">
                                <i class="nav-link-icon fa fa-home fa-spin"> </i>
                                Home
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href= <?= base_url('input')?> class="nav-link">
                                <i class="nav-link-icon fa fa-magic fa-spin"></i>
                                Input Logbook
                            </a>
                        </li>
                        <li class="btn-group nav-item">
                            <a href= <?= base_url('report')?> class="nav-link">
                                <i class="nav-link-icon fa fa-book fa-spin"></i>
                                Report Logbook
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href= <?= base_url('panel/logout')?> class="nav-link">
                                <i class="nav-link-icon	fa fa-asterisk fa-spin"></i>
                                Logout
                            </a>
                        </li>
                    </ul>        </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group ">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="<?php echo base_url()."assets/panel/Books.ico"?>" alt="">
                                           
                                        </a>
                                        
                                    </div>
                                </div><input type='text' id='nama' name='nama' value='<?= $_SESSION['userId']; ?>' hidden>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        <?php echo $this->session->userdata("DisplayName")?>
                                    </div>
                                    <div class="widget-subheading" ; style=color:blue>
                                       <b> W E L C O M E ! , <?= $user['pegNamaLengkap']; ?><b>
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <!-- <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button> -->
                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>

        <div class="ui-theme-settings">
            <!-- <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button> -->
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    <div class="theme-settings__options-wrapper">
                        <h3 class="themeoptions-heading">Layout Options
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Header
                                                </div>
                                                <div class="widget-subheading">Makes the header top fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Sidebar
                                                </div>
                                                <div class="widget-subheading">Makes the sidebar left fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                                    <div class="switch-animate switch-off">
                                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Footer
                                                </div>
                                                <div class="widget-subheading">Makes the app footer bottom fixed, always visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>
                                Header Options
                            </div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-header-cs-class" data-class="bg-primary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-header-cs-class" data-class="bg-secondary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-header-cs-class" data-class="bg-success header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-header-cs-class" data-class="bg-info header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-header-cs-class" data-class="bg-warning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-header-cs-class" data-class="bg-danger header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-header-cs-class" data-class="bg-light header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-header-cs-class" data-class="bg-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-header-cs-class" data-class="bg-alternate header-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-header-cs-class" data-class="bg-vicious-stance header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-header-cs-class" data-class="bg-midnight-bloom header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-header-cs-class" data-class="bg-night-sky header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-header-cs-class" data-class="bg-slick-carbon header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-header-cs-class" data-class="bg-asteroid header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-header-cs-class" data-class="bg-royal header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-header-cs-class" data-class="bg-warm-flame header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-header-cs-class" data-class="bg-night-fade header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-header-cs-class" data-class="bg-sunny-morning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-header-cs-class" data-class="bg-tempting-azure header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-header-cs-class" data-class="bg-amy-crisp header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-header-cs-class" data-class="bg-heavy-rain header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-header-cs-class" data-class="bg-mean-fruit header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-header-cs-class" data-class="bg-malibu-beach header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-header-cs-class" data-class="bg-deep-blue header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-header-cs-class" data-class="bg-ripe-malin header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-header-cs-class" data-class="bg-arielle-smile header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-header-cs-class" data-class="bg-plum-plate header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-header-cs-class" data-class="bg-happy-fisher header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-header-cs-class" data-class="bg-happy-itmeo header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-header-cs-class" data-class="bg-mixed-hopes header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-header-cs-class" data-class="bg-strong-bliss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-header-cs-class" data-class="bg-grow-early header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-header-cs-class" data-class="bg-love-kiss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-header-cs-class" data-class="bg-premium-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-header-cs-class" data-class="bg-happy-green header-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Sidebar Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-sidebar-cs-class" data-class="bg-success sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-sidebar-cs-class" data-class="bg-warning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-sidebar-cs-class" data-class="bg-danger sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-sidebar-cs-class" data-class="bg-focus sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-sidebar-cs-class" data-class="bg-alternate sidebar-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class" data-class="bg-midnight-bloom sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-sidebar-cs-class" data-class="bg-night-sky sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class" data-class="bg-slick-carbon sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-sidebar-cs-class" data-class="bg-asteroid sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-sidebar-cs-class" data-class="bg-royal sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class" data-class="bg-warm-flame sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-sidebar-cs-class" data-class="bg-night-fade sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class" data-class="bg-sunny-morning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class" data-class="bg-tempting-azure sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class" data-class="bg-amy-crisp sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class" data-class="bg-heavy-rain sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class" data-class="bg-mean-fruit sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class" data-class="bg-malibu-beach sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class" data-class="bg-deep-blue sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class" data-class="bg-ripe-malin sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class" data-class="bg-arielle-smile sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class" data-class="bg-plum-plate sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class" data-class="bg-happy-fisher sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class" data-class="bg-happy-itmeo sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class" data-class="bg-mixed-hopes sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class" data-class="bg-strong-bliss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-sidebar-cs-class" data-class="bg-grow-early sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class" data-class="bg-love-kiss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class" data-class="bg-premium-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-sidebar-cs-class" data-class="bg-happy-green sidebar-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Main Content Options</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto active btn btn-focus btn-sm">Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Page Section Tabs
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div role="group" class="mt-2 btn-group">
                                            <button type="button" class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class" data-class="body-tabs-line">
                                                Line
                                            </button>
                                            <button type="button" class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class" data-class="body-tabs-shadow">
                                                Shadow
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>        

        <div class="app-main"; style=background:full;background-image:url(https://previews.123rf.com/images/ninalisitsyna/ninalisitsyna1803/ninalisitsyna180300432/96845145-abstract-flying-confetti-star-a-falling-star-background-casual-black-stars-shine-on-a-white-backgrou.jpg)>
            <!-- <div class="app-sidebar sidebar-shadow <?php echo $this->session->userdata("Sidebar");?>"> -->
                <div class="app-header__logo">
                    <!-- <div class="logo-src"></div> -->
                    <div class="header__pane ml-auto">
                        
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                       
                            <span class="">
                                <span class=""></span>
                            </span>
                     
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                                <div class="btn-group ">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="<?php echo base_url()."assets/panel/Books.ico"?>" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <!-- <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu ">
                                          
                                            <div tabindex="0" class="dropdown-item" onclick="window.open('<?php echo base_url('dashboard')?>','_self');">Home</div>
                                            <div tabindex="0" class="dropdown-item" onclick="window.open('<?php echo base_url('Input')?>','_self');">Input LogBook</div>
                                            <div tabindex="0" class="dropdown-item" onclick="window.open('<?php echo base_url('panel/logout')?>','_self');">LOGOUT</div>
                                        </div> -->
                                    </div>
                            </span>
                        </button>
                    </span>
                </div>    

                <!-- <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Dashboards</li>
                            <li>
                                <a href="index.html" class="mm-active">
                                    <i class="metismenu-icon pe-7s-rocket"></i>
                                    Dashboard Example 1
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Settings</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-users"></i>
                                    User Management
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="elements-buttons-standard.html">
                                            <i class="metismenu-icon"></i>
                                            Add Member
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('gwanrija/sayongja')?>">
                                            <i class="metismenu-icon"></i>
                                            List Member
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-dropdowns.html">
                                            <i class="metismenu-icon"></i>
                                            Edit Type Member
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="tables-regular.html">
                                    <i class="metismenu-icon pe-7s-id"></i>
                                    Profile
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Content</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    Package
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="elements-buttons-standard.html">
                                            <i class="metismenu-icon"></i>
                                            A
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-dropdowns.html">
                                            <i class="metismenu-icon"></i>
                                            B
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-dropdowns.html">
                                            <i class="metismenu-icon"></i>
                                            C
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-video"></i>
                                    Video
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="elements-buttons-standard.html">
                                            <i class="metismenu-icon"></i>
                                            A
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-dropdowns.html">
                                            <i class="metismenu-icon"></i>
                                            B
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-dropdowns.html">
                                            <i class="metismenu-icon"></i>
                                            C
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-photo"></i>
                                    Photo
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="elements-buttons-standard.html">
                                            <i class="metismenu-icon"></i>
                                            A
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-dropdowns.html">
                                            <i class="metismenu-icon"></i>
                                            B
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-dropdowns.html">
                                            <i class="metismenu-icon"></i>
                                            C
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-global"></i>
                                    Blog
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="elements-buttons-standard.html">
                                            <i class="metismenu-icon"></i>
                                            A
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-dropdowns.html">
                                            <i class="metismenu-icon"></i>
                                            B
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-dropdowns.html">
                                            <i class="metismenu-icon"></i>
                                            C
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div> 