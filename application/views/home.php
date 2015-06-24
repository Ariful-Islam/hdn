<?php $this->load->view('header'); ?>

        <div class="site__content">

            <div class="wellcome">
                <h2><?php echo $this->lang->line('common_welcome1'); ?>
                    <span><?php echo $this->lang->line('common_welcome2'); ?></span></h2>
            </div><!-- wellcome -->

            <div class="gray about-us" id="about">
                <div class="container">
                    <h2><span><?php echo $this->lang->line('common_about'); ?></span> <?php echo $this->lang->line('common_us'); ?></h2>
                    <div class="row about-us__text">
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                            <p class="orange-text"><?php echo $this->lang->line('common_about_orrange'); ?></p>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                            <p><?php echo $this->lang->line('common_about_normal'); ?></p>
                        </div>
                    </div>

                    <div class="row about-us__links">
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <a href="#" class="funded">

                                <div>
                                    <b>1990.</b>
                                    <span><?php echo $this->lang->line('common_about_f1'); ?></span>
                                </div>

                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <a href="#" class="proffesional">

                                <div>
                                    <b>25</b>
                                    <span><?php echo $this->lang->line('common_about_f2'); ?></span>
                                </div>

                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <a href="#" class="five">

                                <div>
                                    <b>25</b>
                                    <span><?php echo $this->lang->line('common_about_f3'); ?> </span>
                                </div>

                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <a href="#" class="mailto">

                                <div>
                                    <span><b><?php echo $this->lang->line('common_about_f41'); ?></b>
    <?php echo $this->lang->line('common_about_f42'); ?></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- /gray -->

            <div class="container services" id="services">

                <h2><span><?php echo $this->lang->line('common_our'); ?></span> <?php echo $this->lang->line('common_services'); ?></h2>

                <!-- services__gallery -->
                <div class="services__gallery">

                    <!-- services__gallery-points -->
                    <div class="services__gallery-points">
                        <div>
                            <ul>
                                <li class="active">
                                    <span><span><?php echo $this->lang->line('common_services_g1'); ?></span></span></li>
                                <li><span><span><?php echo $this->lang->line('common_services_g2'); ?></span></span></li>
                                <li><span><span><?php echo $this->lang->line('common_services_g3'); ?></span></span></li>
                                <li><span><span><?php echo $this->lang->line('common_services_g4'); ?></span></span></li>
                                <li><span><span><?php echo $this->lang->line('common_services_g5'); ?></span></span></li>
                                <li><span><span><?php echo $this->lang->line('common_services_g6'); ?></span></span></li>
                                <li><span><span><?php echo $this->lang->line('common_services_g7'); ?></span></span></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /services__gallery-points -->

                    <!-- services__gallery-content -->
                    <ul class="services__gallery-content">
                        <li class="active">
                            <img src="<?php echo base_url(); ?>assets/pic/services__gallery1.jpg" alt=""/>
                        </li>
                        <li>
                            <img src="<?php echo base_url(); ?>assets/pic/services__gallery2.jpg" alt=""/>
                        </li>
                        <li>
                            <img src="<?php echo base_url(); ?>assets/pic/services__gallery1.jpg" alt=""/>
                        </li>
                        <li>
                            <img src="<?php echo base_url(); ?>assets/pic/services__gallery2.jpg" alt=""/>
                        </li>
                        <li>
                            <img src="<?php echo base_url(); ?>assets/pic/services__gallery1.jpg" alt=""/>
                        </li>
                        <li>
                            <img src="<?php echo base_url(); ?>assets/pic/services__gallery2.jpg" alt=""/>
                        </li>
                        <li>
                            <img src="<?php echo base_url(); ?>assets/pic/services__gallery1.jpg" alt=""/>
                        </li>
                    </ul>
                    <!-- /services__gallery-content -->

                    <!-- services__gallery-btns -->
                    <div class="services__gallery-btns">

                        <!-- services__gallery-btn -->
                        <button class="services__gallery-btn services__gallery-btn-prev"></button>
                        <!-- /services__gallery-btn -->

                        <!-- services__gallery-btn -->
                        <button class="services__gallery-btn services__gallery-btn-next"></button>
                        <!-- /services__gallery-btn -->

                    </div>
                    <!-- /services__gallery-btns -->

                </div>
                <!-- /services__gallery -->

            </div><!-- /services -->


            <div class="gray metedology" id="methodology">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                            <h2><span><?php echo $this->lang->line('common_our'); ?></span>
                                <?php echo $this->lang->line('common_methodology'); ?></h2>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                            <p><?php echo $this->lang->line('common_methodology_text'); ?></p>
                        </div>
                    </div>

                </div>

                <!-- metedology__wrap -->
                <div class="metedology__wrap">

                    <!-- metedology__links -->
                    <div class="metedology__links">
                        <a href="#"><span><?php echo $this->lang->line('common_methodology_f1'); ?></span></a>
                        <a href="#"><span><?php echo $this->lang->line('common_methodology_f2'); ?></span></a>
                        <a href="#"><span><?php echo $this->lang->line('common_methodology_f3'); ?></span></a>
                        <a href="#"><span><?php echo $this->lang->line('common_methodology_f4'); ?></span></a>
                        <a href="#"><span><?php echo $this->lang->line('common_methodology_f5'); ?></span></a>
                    </div>
                    <!-- /metedology__links -->

                </div>
                <!-- /metedology__wrap -->



            </div><!-- /metedology -->

            <!-- contact -->
            <div class="contact" id="contact">

                <!-- container -->
                <div class="container">

                    <!-- row -->
                    <div class="row">
                        <div class="col-xs-12">

                            <!-- contact__title -->
                            <h2 class="contact__title"><?php echo $this->lang->line('common_contact'); ?> <span><?php echo $this->lang->line('common_us'); ?></span></h2>
                            <!-- /contact__title -->

                        </div>
                    </div>
                    <!-- /row -->
					<!-- row -->
					<?php
						$show = 'hide';
						if($this->session->userdata('show'))
						{
							$show = 'show';
						}
						
						$this->session->unset_userdata('show');
					?>
                    <div class="row <?php echo $show; ?>">
                        <div class="col-xs-12">

                            <!-- contact__title -->
                            <div class="alert alert-success col-md-6">Thank you for your email, we'll get back to you asap</div>
                            <!-- /contact__title -->

                        </div>
                    </div>
                    <!-- row -->
                    <div class="row">
                        <div class="col-xs-12 col-md-7">

                            <!-- contact__form -->
                            <form class="contact__form" method="post" action="<?php echo base_url(); ?><?php echo $this->config->item('language_abbr');?>/contact/contact_us">

                                <!-- text-field -->
                                <div class="text-field">
                                    <input type="text" id="contact__name" name="contact__name" />
                                    <label for="contact__name"><?php echo $this->lang->line('common_contact_name'); ?></label>
                                </div>
                                <!-- /text-field -->

                                <!-- text-field -->
                                <div class="text-field">
                                    <input type="tel" id="contact__phone" name="contact__phone"/>
                                    <label for="contact__phone"><?php echo $this->lang->line('common_contact_phone'); ?></label>
                                </div>
                                <!-- /text-field -->

                                <!-- text-field -->
                                <div class="text-field">
                                    <input type="email" id="contact__mail" name="contact__mail"/>
                                    <label for="contact__mail"><?php echo $this->lang->line('common_contact_mail'); ?></label>
                                </div>
                                <!-- /text-field -->

                                <!-- text-field -->
                                <div class="text-field">
                                    <input type="text" id="contact__company" name="contact__company"/>
                                    <label for="contact__company"><?php echo $this->lang->line('common_contact_company'); ?></label>
                                </div>
                                <!-- /text-field -->

                                <!-- text-area -->
                                <div class="text-area">
                                    <textarea id="contact__message" name="contact__message"></textarea>
                                    <label for="contact__message"><?php echo $this->lang->line('common_contact_message'); ?></label>
                                </div>
                                <!-- /text-area -->

                                <!-- btn -->
                                <button class="btn" type="submit"><?php echo $this->lang->line('common_contact_submit'); ?></button>
                                <!-- /btn -->

                            </form>
                            <!-- /contact__form -->

                        </div>
                        <div class="col-xs-12 col-md-5">

                            <!-- contact__info -->
                            <address class="contact__info">
                                <h3>H.D.N. SPRL</h3>
                                <p>Rue Elskamp 14 -  B-1070 Anderlecht</p>
                                <dl>

                                    <dt><?php echo $this->lang->line('common_contact_tel_fax'); ?></dt>

                                    <dd><a href="tel:+32024282561">+32 (0)2 4282561</a></dd>

                                    <dt>Mobile:</dt>

                                    <dd>
                                        <div>
                                            <a href="tel:+320484607507">+32 (0)484607 507</a>
                                        </div>
                                        <div>
                                            <a href="tel:+320495693">+32(0)495 693</a>
                                        </div>
                                    </dd>

                                    <dt>Email:</dt>

                                    <dd><a href="mailto:info@teamhdn.be">info@teamhdn.be</a></dd>

                                </dl>
                                <p>N°TVA: BE0864.041.158</p>
                            </address>
                            <!-- /contact__info -->

                        </div>
                    </div>
                    <!-- /row -->

                </div>
                <!-- /container -->

            </div>
            <!-- /contact -->

            <!-- map -->
            <div class="map" data-map='{
                                        "center":[50.836248, 4.292323],
                                        "zoom": 15,
                                        "points": [
                                            [50.836248, 4.292323]
                                        ]
                                    }'>

            </div>
            <!-- /map -->

        </div><!-- /site__content -->

<?php $this->load->view('footer'); ?>