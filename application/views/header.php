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
                            <li class="active"><a href="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>"><span><?php echo $this->lang->line('common_home'); ?></span></a></li>
                            <li><a href="#about"><span><?php echo $this->lang->line('common_about'); ?></span></a></li>
                            <li><a href="#services"><span><?php echo $this->lang->line('common_services'); ?></span></a></li>
                            <li><a href="#methodology"><span><?php echo $this->lang->line('common_methodology'); ?></span></a></li>
                            <li><a href="#contact"><span><?php echo $this->lang->line('common_contact'); ?></span></a></li>
                            <li class="pof-btn"><a href="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/professionals"><?php echo $this->lang->line('common_professionals'); ?></a></li>
                        </ul>
                    </div><!-- /navbar-collapse -->

                </div><!-- /container-fluid -->
            </nav>

        </header><!-- /site__header -->