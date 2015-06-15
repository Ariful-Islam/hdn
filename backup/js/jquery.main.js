(function(){
    $(function(){

        $.each($('.projects'), function () {
            new Projects($(this));
        });
        $.each($('.map'), function () {
            new Map($(this));
        });
        $.each($('.text-field, .text-area'), function () {
            new TextField($(this));
        });
        $.each($('.services__gallery'), function () {
            new ServicesGallery($(this));
        });
        $.each($('.realisation-items'), function () {
            new RealisationGallery($(this));
        });

    } );

    var MenuLine = function (obj) {
        this.obj = obj;
        this.activeMenu = obj.find('li.active');
        this.hoverMenu = obj.find('li');
        this.menuBtn = obj.find('li a');
        this.menuLine = obj.find('.active-line');

        this.init();
    };
    MenuLine.prototype = {
        init: function () {
            var self = this;

            self.core = self.core();
            self.core.build();
        },
        core: function () {
            var self = this;

            return {
                addEvents: function () {

                    self.hoverMenu.on('mouseover', function(){

                        var curElem = $(this);

                        if(!curElem.hasClass('pof-btn')){

                            self.core.activeLine(curElem);

                        }

                    });



                    self.menuBtn.on('click', function(e){

                        var curElem = $(this);

                        if(!curElem.hasClass('pof-btn')){

                            self.hoverMenu.removeClass('active');
                            curElem.parent().addClass('active');
                            self.activeMenu = curElem.parent();
                            self.core.activeLine(curElem.parent());

                            console.log($(window).width());


                            $('html, body').stop().animate({
                                scrollTop: $(curElem.attr('href')).offset().top - 200
                            }, 1000);
                            e.preventDefault();
                            return false;

                        }
                    });

                    self.hoverMenu.on('mouseleave', function(){

                        self.core.activeLine(self.activeMenu);

                    });

                    $(window).on('resize', function(){
                        self.core.activeLine(self.activeMenu);
                    })

                },
                build: function () {
                    self.core.addEvents();
                    self.core.activeLine(self.activeMenu);
                },
                activeLine: function(curElem){

                    self.menuLine.width(curElem.find('span').width());
                    if($(window).width()<1300){
                        self.menuLine.css({
                            left: curElem.position().left+9
                        });
                    }
                    else{
                        self.menuLine.css({
                            left: curElem.position().left+57
                        });
                    }


                }
            };
        }
    };

    $(window).on({
        load: function () {

            if($(window).width()>768) {

                var menu = $('.main-nav');
                new MenuLine(menu);

            }
            else{
                $('.navbar-collapse a').click(function (e) {

                    var curElem = $(this);

                    if(!curElem.parent().hasClass('pof-btn')) {

                        $('html, body').stop().animate({
                            scrollTop: $(curElem.attr('href')).offset().top - 100
                        }, 1000);
                        e.preventDefault();
                        $('.navbar-collapse').collapse('toggle');
                        return false;

                    }

                });
            }


        }
    });

    var Map = function (obj) {

        //private properties
        var _self = this,
            _window = $(window),
            _mapData = obj.data('map'),
            _map = null,
            _obj = obj;

        //private methods
        var _addEvents = function () {

            },
            _getMapData = function(){
                _mapData.center = new google.maps.LatLng(_mapData.center[0], _mapData.center[1]);

                $.each(_mapData.points, function (i) {
                    _mapData.points[i] = new google.maps.LatLng(this[0], this[1]);

                });
            },
            _init = function () {
                _getMapData();

                google.maps.event.addDomListener(window, 'load', _initMap);

                _addEvents();
            },
            _initMap= function(){

                var MY_MAPTYPE_ID = 'custom_style',
                    featureOpts = [
                        {
                            featureType: "administrative",
                            elementType: "geometry",
                            stylers: [
                                { saturation: -100 }
                            ]
                        },{
                            featureType: "landscape",
                            stylers: [
                                { saturation: -100 }
                            ]
                        },{
                            featureType: "poi",
                            stylers: [
                                { saturation: -100 }
                            ]
                        },{
                            featureType: "road",
                            stylers: [
                                { saturation: -100 }
                            ]
                        },{
                            featureType: "transit",
                            stylers: [
                                { saturation: -100 }
                            ]
                        },{
                            featureType: "water",
                            stylers: [
                                { hue: "#ef8d66" },
                                { gamma: 0.26 },
                            ]
                        }
                    ],
                    mapOptions = {
                        zoom: _mapData.zoom,
                        scrollwheel: false,
                        center: _mapData.center,
                        disableDefaultUI: true,
                        mapTypeControlOptions: {
                            mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
                        },
                        mapTypeId: MY_MAPTYPE_ID
                    },
                    styledMapOptions = {
                        name: 'Custom Style'
                    },
                    customMapType = null,
                    image = {
                        url: 'img/map.png',
                        size: new google.maps.Size(36, 50),
                        origin: new google.maps.Point(0,0),
                        anchor: new google.maps.Point(3, 50)
                    };;

                _map = new google.maps.Map(_obj[0], mapOptions);

                customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

                _map.mapTypes.set(MY_MAPTYPE_ID, customMapType);

                $.each(_mapData.points, function () {
                    new google.maps.Marker({
                        position: this,
                        map: _map,
                        icon: image
                    });
                });

            };

        //public properties

        //public methods


        _init();
    };

    var TextField = function (obj) {

        //private properties
        var _self = this,
            _input = obj.find('input, textarea'),
            _obj = obj;

        //private methods
        var _addEvents = function () {
                _input.on({
                    blur: function () {
                        _checkFullness();
                    },
                    keyup: function () {
                        _checkFullness();
                    }
                });
            },
            _checkFullness = function(){
                if(_input.val() == ''){
                    _obj.removeClass('full');
                } else {
                    _obj.addClass('full');
                }
            },
            _init = function () {
                _addEvents();
            };

        //public properties

        //public methods


        _init();
    };

    var ServicesGallery = function (obj) {

        //private properties
        var _self = this,
            _btnPrev = obj.find('.services__gallery-btn-prev'),
            _btnNext = obj.find('.services__gallery-btn-next'),
            _slides = obj.find('.services__gallery-content > li'),
            _points = obj.find('.services__gallery-points li'),
            _title = $('<div class="services__gallery-title"></div>'),
            _pointsWrap = obj.find('.services__gallery-points'),
            _window = $(window),
            _obj = obj,
            _duration = 1000,
            _active = 0,
            _action = false;

        //private methods
        var _addEvents = function () {
                _window.on( {
                    resize: function(){
                        _pointsWrap.removeClass('active');
                    }
                } );
                _pointsWrap.on({
                    click: function () {
                        if( _pointsWrap.hasClass('active') ){
                            _pointsWrap.removeClass('active');
                        } else {
                            _pointsWrap.addClass('active');
                        }
                    }
                });
                _points.on({
                    click: function () {
                        var curPoint = $(this);

                        if (!curPoint.hasClass('active') && !_action) {
                            _pointsWrap.removeClass('active');
                            _self.slideTo(curPoint.index());
                            _points.removeClass('active');
                            curPoint.addClass('active');
                        }


                        return false;
                    }
                });
                _btnNext.on({
                    click: function () {
                        if (!_action) {
                            _pointsWrap.removeClass('active');
                            _self.slideTo(_active + 1, 1);
                        }

                        return false;
                    }
                });
                _btnPrev.on({
                    click: function () {
                        if (!_action) {
                            _pointsWrap.removeClass('active');
                            _self.slideTo((_active - 1), -1);
                        }

                        return false;
                    }
                });
            },
            _init = function () {
                _obj.append(_title);
                _title.html(_points.eq(_active).html());
                _addEvents();
            };

        //public properties

        //public methods
        _self.slideTo = function (index, direction) {
            var newIndex = index,
                nextItem = null,
                activeItem = _slides.eq(_active),
                direction = direction || undefined,
                count1 = 0,
                count2 = 0;

            if (direction == -1) {
                direction = 0;
            }

            _action = true;

            if (index < 0) {
                newIndex = _slides.length - 1;
            } else if (index == _slides.length) {
                newIndex = 0;
            }

            nextItem = _slides.eq(newIndex);

            count1 = Math.abs(newIndex - _active);

            if (direction === undefined) {
                direction = ( newIndex > _active );

                if (newIndex > _active) {
                    count2 = ( _slides.length - newIndex ) + ( _active - 1 );

                    if (count1 > count2) {
                        direction = 0;
                    } else if (count1 < count2) {
                        direction = 1;
                    }
                } else {
                    count2 = ( _slides.length - _active ) + ( newIndex - 1 );

                    if (count1 > count2) {
                        direction = 1;
                    } else if (count1 < count2) {
                        direction = 0;
                    }
                }
            }

            _slides.removeAttr('class');
            if (direction) {
                nextItem.addClass('slide-forward_next');
                activeItem.addClass('slide-forward_cur');
            } else {
                nextItem.addClass('slide-backward_next');
                activeItem.addClass('slide-backward_cur');
            }
            _points.removeClass('active');
            _points.eq(newIndex).addClass('active');
            _title.html(_points.eq(newIndex).html());


            setTimeout(function () {
                _action = false;
                _active = newIndex;

            }, _duration+1);

        };


        _init();
    };

    var RealisationGallery = function (obj) {

        //private properties
        var _self = this,
            _window = $( window ),
            _obj = obj,
            _items = obj.find('li'),
            _swiper = null,
            _swiperContainer = null,
            _swiperPagination = null,
            _swiperBtnNext = null,
            _swiperBtnPrev = null,
            _swiperWrapper = null;

        //private methods
        var _addEvents = function () {
                _window.on({
                    resize: function () {
                        $('.swiper-container').remove();
                        $('.swiper-button-prev').remove();
                        $('.swiper-button-next').remove();
                        $('.swiper-pagination').remove();
                        _createSwiper();
                    }
                });
            },
            _createSwiper = function(){
                var countCells = 2,
                    countRows = 2,
                    i = null, j = null, k = null,
                    wrapper = null,
                    row = null,
                    cell = null,
                    counter = null;

                if(_window.width() < 641){
                    countCells = 1;
                    countRows = 1;
                }

                _swiperContainer = $('<div class="swiper-container"></div>');
                _swiperPagination = $('<div class="swiper-pagination"></div>');
                _swiperBtnNext = $('<div class="swiper-button-next"></div>');
                _swiperBtnPrev = $('<div class="swiper-button-prev"></div>');
                _swiperWrapper = $('<div class="swiper-wrapper"></div>');


                for( k = 0; k< _items.length; k+=(countCells*countRows) ){
                    wrapper = $('<div class="swiper-slide"><div class="slider__table"></div></div>');


                    counter = 0;
                    for(i=0;i<countRows; i++){
                        row = $('<div class="slider__row"></div>');

                        for(j=0;j<countCells; j++){
                            cell = $('<div class="slider__cell"></div>');

                            if(k+counter < _items.length){
                                cell.append(_items.eq(k+counter).find('>*').clone());
                            }
                            row.append(cell);
                            counter++;
                            //
                        }

                        wrapper.find('.slider__table').append(row);
                    }
                    _swiperWrapper.append(wrapper);

                }

                _swiperContainer.append(_swiperWrapper);



                _obj.after(_swiperContainer);
                _swiperContainer.after(_swiperPagination);
                _swiperContainer.after(_swiperBtnPrev);
                _swiperContainer.after(_swiperBtnNext);

                _swiper = new Swiper (_swiperContainer, {
                    pagination: _swiperPagination,
                    nextButton: _swiperBtnNext,
                    prevButton: _swiperBtnPrev,
                    slidesPerView: 1,
                    paginationClickable: true,
                    spaceBetween: 30,
                    loop: true
                });

                _swiperContainer.on( 'click', '.slider__cell', function(e){
                    var slideIndex = $('.swiper-pagination-bullet').index($('.swiper-pagination-bullet-active')),
                        neibors = $(this).parents('.slider__table').eq(0).find('.slider__cell'),
                        cellIndex = null;

                    if(_window.width() > 640){
                        cellIndex = neibors.index(this);

                        slideIndex = (slideIndex * 4)+cellIndex;
                    }

                    _items.eq(slideIndex).trigger('click');
                } );
            },
            _init = function () {

                _createSwiper();
                _addEvents();
            };

        //public properties

        //public methods


        _init();
    };
    var Projects = function (obj) {

        //private properties
        var _self = this,
            _obj = obj,
            _catBtns = $( '.realisation-items li'),
            _info = _obj.find('.projects__info'),
            _data = null,
            _gallery = _obj.find('.projects__gallery'),
            _gal = null,
            _request = new XMLHttpRequest(),
            _sriptUrl = _obj.data('action');

        //private methods
        var _addEvents = function () {
                _catBtns.on({
                    click: function () {
                        _show($(this).data('category'));
                    }
                });
            },
            _createContent = function(){
                var galleryItems = $('<ul class="projects__gallery-controls"></ul>');

                $.each(_data.images, function () {
                    galleryItems.append(' <li>\
                                            <a href="#" data-pic="' + this.bigImg + '">\
                                                <img src="'+ this.preview +'" alt=""/>\
                                            </a> \
                                        </li>');
                });

                _gallery.append(galleryItems);
                _info.append(_data.info);
                _gal = new ProjectsGallery(_gallery);

                setTimeout(function(){
                    _obj.removeClass('projects_preloader');
                    _obj.addClass('projects_preloader-hide');

                    setTimeout(function(){
                        _obj.removeClass('projects_preloader-hide');
                    }, 300);
                }, 300);
            },
            _getData = function( projectId ){

                var data = sessionStorage.getItem('project_'+projectId);

                if( !data ){
                    _getDataFromServer( projectId );
                } else {
                    _data = JSON.parse( data );
                    _createContent();
                }

            },
            _getDataFromServer = function(projectId){

                _request.abort();
                _request = $.ajax({
                    url: _sriptUrl,
                    data: {
                        projectId: projectId
                    },
                    dataType: 'json',
                    timeout: 20000,
                    type: 'GET',
                    success: function (msg) {
                        sessionStorage.setItem('project_' + projectId, JSON.stringify(msg));
                        _data = msg;
                        _createContent();
                    },
                    error: function (XMLHttpRequest) {
                        if (XMLHttpRequest.statusText != "abort") {

                        }
                    }
                });

            },
            _init = function () {
                _addEvents();
            },
            _show =  function(projectId){
                _obj.addClass('projects_preloader');
                _info.html('');
                _gallery.html('');
                _getData(projectId);
            };

        //public properties

        //public methods


        _init();
    };

    var ProjectsGallery = function (obj) {

        //private properties
        var _self = this,
            _btnPrev = null,
            _btnNext = null,
            _slides = null,
            _points = obj.find('.projects__gallery-controls li'),
            _pointsWrap = obj.find('.projects__gallery-controls'),
            _sliderWrap = $('<ul class="projects__gallery-content"></ul>'),
            _window = $(window),
            _obj = obj,
            _duration = 1000,
            _active = 0,
            _action = false;

        //private methods
        var _addControls = function(){
                _btnPrev = $('<div class="projects__gallery-btn projects__gallery-btn-prev"></div>');
                _btnNext = $('<div class="projects__gallery-btn projects__gallery-btn-next"></div>');

                _obj.append(_btnPrev);
                _obj.append(_btnNext);
            },
            _addEvents = function () {
                _window.on( {
                    resize: function(){
                        _setSize();
                    }
                } );
                _pointsWrap.on({
                    click: function () {
                        if( _pointsWrap.hasClass('active') ){
                            _pointsWrap.removeClass('active');
                        } else {
                            _pointsWrap.addClass('active');
                        }
                    }
                });
                _points.on({
                    click: function () {
                        var curPoint = $(this);

                        if (!curPoint.hasClass('active') && !_action) {
                            _pointsWrap.removeClass('active');
                            _self.slideTo(curPoint.index());
                            _points.removeClass('active');
                            curPoint.addClass('active');
                        }


                        return false;
                    }
                });
                _btnNext.on({
                    click: function () {
                        if (!_action) {
                            _pointsWrap.removeClass('active');
                            _self.slideTo(_active + 1, 1);
                        }

                        return false;
                    }
                });
                _btnPrev.on({
                    click: function () {
                        if (!_action) {
                            _pointsWrap.removeClass('active');
                            _self.slideTo((_active - 1), -1);
                        }

                        return false;
                    }
                });
            },
            _addSlides = function(){
                _obj.append(_sliderWrap);

                $.each(_points, function () {
                    var curItem = $(this).find('a');

                    _sliderWrap.append( '<li><img src="' + curItem.data('pic') + '"></li>' );

                    _slides = _sliderWrap.find('li');
                });
                _slides.eq(0).addClass('active');
                _points.eq(0).addClass('active');
            },
            _init = function () {
                _addSlides();

                if( _points.length > 1 ){
                    _addControls();
                    _addEvents();
                }
                _setSize();


            },
            _setSize = function(){
                if(_window.width() < 600){

                    var newH = (400/570)*_obj.width();

                    _slides.find('img').css({
                        height: newH,
                        width: _obj.width()
                    });

                    _sliderWrap.css( {
                        height: newH
                    } );
                    _slides.css( {
                        height: newH
                    } );
                    _obj.css( {
                        paddingTop: newH
                    } );
                    _obj.find('.projects__gallery-btn').css({
                        top: newH/2 -30
                    });
                } else {

                    _slides.find('img').removeAttr('style');
                    _sliderWrap.removeAttr('style');
                    _slides.removeAttr('style');
                    _obj.removeAttr('style');
                    _obj.find('.projects__gallery-btn').removeAttr('style');
                }
            };

        //public properties

        //public methods
        _self.slideTo = function (index, direction) {
            var newIndex = index,
                nextItem = null,
                activeItem = _slides.eq(_active),
                direction = direction || undefined,
                count1 = 0,
                count2 = 0;

            if (direction == -1) {
                direction = 0;
            }

            _action = true;

            if (index < 0) {
                newIndex = _slides.length - 1;
            } else if (index == _slides.length) {
                newIndex = 0;
            }

            nextItem = _slides.eq(newIndex);

            count1 = Math.abs(newIndex - _active);

            if (direction === undefined) {
                direction = ( newIndex > _active );

                if (newIndex > _active) {
                    count2 = ( _slides.length - newIndex ) + ( _active - 1 );

                    if (count1 > count2) {
                        direction = 0;
                    } else if (count1 < count2) {
                        direction = 1;
                    }
                } else {
                    count2 = ( _slides.length - _active ) + ( newIndex - 1 );

                    if (count1 > count2) {
                        direction = 1;
                    } else if (count1 < count2) {
                        direction = 0;
                    }
                }
            }

            _slides.removeAttr('class');
            if (direction) {
                nextItem.addClass('projects__gallery-forward_next');
                activeItem.addClass('projects__gallery-forward_cur');
            } else {
                nextItem.addClass('projects__gallery-backward_next');
                activeItem.addClass('projects__gallery-backward_cur');
            }
            _points.removeClass('active');
            _points.eq(newIndex).addClass('active');


            setTimeout(function () {
                _action = false;
                _active = newIndex;

            }, _duration+1);

        };


        _init();
    };
})();
