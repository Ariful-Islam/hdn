<!DOCTYPE html> 
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">

    <title>Title</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/swiper.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/popup.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css" />

</head>
<body>

    <div class="site">

        <header class="site__header">

            <h1 class="logo"><img src="<?php echo base_url(); ?>assets/img/logo.png"  alt=""></h1><!-- /logo -->
			
            <ul class="select-language">
                <li class="<?php echo $this->config->item('language')=='french'?'active':''; ?>"><a href="<?php echo base_url(); ?>init/set_language/french/<?php echo $this->router->class; ?>">FR</a> </li>
                <li class="<?php echo $this->config->item('language')=='dutch'?'active':''; ?>"><a href="<?php echo base_url(); ?>init/set_language/dutch/<?php echo $this->router->class; ?>">NL</a> </li>
            </ul><!-- /select-language -->

            <nav class="main-nav navbar navbar-default " role="navigation">
                <div class="active-line"></div>
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav pull-right">
                            <li class="active"><a href="<?php echo base_url(); ?>"><span><?php echo $this->lang->line('common_home'); ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>#about"><span><?php echo $this->lang->line('common_about'); ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>#services"><span><?php echo $this->lang->line('common_services'); ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>#methodology"><span><?php echo $this->lang->line('common_methodology'); ?></span></a></li>
                            <li><a href="<?php echo base_url(); ?>#contact"><span><?php echo $this->lang->line('common_contact'); ?></span></a></li>
                            <li class="pof-btn"><a href="<?php echo base_url(); ?>professionals"><?php echo $this->lang->line('common_professionals'); ?></a></li>
                        </ul>
                    </div><!-- /navbar-collapse -->

                </div><!-- /container-fluid -->
            </nav>

        </header><!-- /site__header -->

        <div class="site__content">

            <!-- professionals-title -->
            <div class="professionals-title">
                <h1><?php echo $this->lang->line('prof_title1'); ?>
                    <span><?php echo $this->lang->line('prof_title2'); ?></span></h1>
            </div>
            <!-- /professionals-title -->

            <!-- realisation -->
            <div class="realisation">
                <h2><?php echo $this->lang->line('prof_realisation_h1'); ?> <span><?php echo $this->lang->line('prof_realisation_h2'); ?></span></h2>

                <!-- realisation__wrap -->
                <div class="realisation__wrap">
                    <div>
                        <!-- realisation-items -->
                        <ul class="realisation-items">
                            <li class="popup__open" data-popup="projects" data-category="1">
                                <div class="for_hover">
                                    <img src="<?php echo base_url();?>assets/pic/realisation-items1.jpg" alt=""/>
                                    <div class="realisation__hover overlay">
                                        <div>
                                            <div class="rel_con">
                                                <p class="rel_h2"><?php echo $this->lang->line('prof_modern_office'); ?></p>
                                                <p class="rel_mc"><?php echo $this->lang->line('prof_modern_office_text'); ?></p>

                                                <!-- btn -->
                                                <button class="btn rel_btn"><?php echo $this->lang->line('prof_btng'); ?></button>
                                                <!-- /btn -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="popup__open" data-popup="projects" data-category="2">
                                <img src="<?php echo base_url(); ?>assets/pic/realisation-items2.jpg" alt=""/>
                            </li>
                            <li class="popup__open" data-popup="projects" data-category="3">
                                <img src="<?php echo base_url(); ?>assets/pic/realisation-items3.jpg" alt=""/>
                            </li>
                            <li class="popup__open" data-popup="projects" data-category="4">
                                <img src="<?php echo base_url(); ?>assets/pic/realisation-items4.jpg" alt=""/>
                            </li>
                            <li class="popup__open" data-popup="projects" data-category="5">
                                <img src="<?php echo base_url(); ?>assets/pic/realisation-items3.jpg" alt=""/>
                            </li>
                            <li class="popup__open" data-popup="projects" data-category="6">
                                <img src="<?php echo base_url(); ?>assets/pic/realisation-items1.jpg" alt=""/>
                            </li>
                            <li class="popup__open" data-popup="projects" data-category="7">
                                <img src="<?php echo base_url(); ?>assets/pic/realisation-items4.jpg" alt=""/>
                            </li>
                            <li class="popup__open" data-popup="projects" data-category="8">
                                <img src="<?php echo base_url(); ?>assets/pic/realisation-items2.jpg" alt=""/>
                            </li>
                        </ul>
                        <!-- /realisation-items -->
                    </div>
                </div>
                <!-- /realisation__wrap -->

            </div>
            <!-- /realisation -->

            <!-- have-project -->
            <div class="have-project">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2><?php echo $this->lang->line('prof_have_project'); ?></h2>


                            <a href="#" class="btn"><?php echo $this->lang->line('prof_btnc'); ?></a>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /have-project -->


        </div><!-- /site__content -->
		
	<div class="popup">

        <div class="popup__wrap">

            <div class="popup__content popup__projects">

                <!-- popup__close -->
                <button class="popup__close"></button>
                <!-- /popup__close -->

                <!-- projects -->
                <div class="projects" data-action="<?php echo base_url(); ?>assets/php/projects_p.php">

                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-lg-7">

                                <!-- projects__gallery -->
                                <div class="projects__gallery"></div>
                                <!-- /projects__gallery -->

                            </div>
                            <div class="col-xs-12 col-lg-5">

                                <!-- projects__info -->
                                <div class="projects__info"></div>
                                <!-- /projects__info -->

                            </div>

                        </div>
                    </div>


                </div>
                <!-- /projects -->

            </div><!-- /popup__content -->

        </div><!-- /popup__wrap -->

    </div><!-- /popup -->

<?php $this->load->view('footer'); ?>