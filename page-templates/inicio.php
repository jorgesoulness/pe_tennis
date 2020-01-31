              <article class="bg-gen">
                <section class="hero-sec">
                  <div class="contHero">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-12">
                          <div class="infohero">
                            <div class="titleHeroHome wow fadeInUp" data-wow-delay="0.40s" data-wow-duration="0.80s">
                              <h2>Así de simple,<br>nosotros nos<br>en<span>carga</span>mos.</h2>
                              <p>Logística internacional en tiempo y forma.</p>
                            </div><!-- end.TitleHeroHome -->
                          </div><!-- end.infoHero -->
                        </div>
                      </div>
                    </div>
                  </div><!-- endHeroSec -->
                  <video id="videoHome" autoplay loop muted poster="<?php echo get_template_directory_uri(); ?>assets/img/bgs/bg_video.png">
                    <source src="<?php echo get_template_directory_uri(); ?>assets/img/imgPrueba/recorte_puerto.mp4" type="video/mp4">
                  </video>
                  <a href="#entrenamiento" class="scrollNext"><i class="fa fa-angle-down"></i></a>
                  <div class="header-title" style="opacity: 0.0"></div>
                  <div class="overlayHero"></div>
                </section>

                <section id="unicos" class="modulo-one-home">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="descGen">
                          <h2>
                            <strong class="wow slideInLeft" data-wow-delay="0.30s" data-wow-duration="0.40s">que es lo que nos hace</strong>
                            <span class="wow slideInRight" data-wow-delay="0.30s" data-wow-duration="0.40s">únicos</span>
                          </h2><!-- end.titleSection -->
                        </div>
                      </div><!-- end.colLg -->
                      <div class="col-12">
                        <div class="ContUnique">

                          <div class="boxUnique">
                            <div class="imageUnique">
                            <canvas id="bubble0" class="hero-canvas" resize="true"></canvas>
									            <script type="text/paperscript" canvas="bubble0">
                                var deltaTime = 0;
                                
                                
                                var raster = new Raster({
                                  source: siteURL+'assets/img/bgs/depth-of-field-photo-of-man-sitting-on-chair-while-holding-927451.jpg',
                                  opacity: 1
                                });
                                
                                var windowWidth = jQuery(window).width();
                                var scaleVal = 0.70;
                                
                                if (windowWidth < 1599) {
                                                        scaleVal = 0.65;
                                                      }
                                
                                if (windowWidth < 1199) {
                                                        scaleVal = 0.55;
                                                      }
                                
                                if (windowWidth < 991) {
                                                        scaleVal = 0.45;
                                                      }
                                
                                if (windowWidth < 767) {
                                                        scaleVal = 0.33;
                                                      }
                                
                                raster.onLoad = function() {
                                  //raster.scale(scaleVal);
                                  raster.position = view.center;

                                  var polygon = new Path('M3.000,279.000 C-2.504,296.914 -7.495,348.052 58.000,435.000 C123.495,521.948 197.052,585.000 314.000,550.000 C430.948,515.000 613.219,401.976 641.000,300.000 C675.268,174.210 677.283,11.028 505.000,1.000 C340.115,-8.598 291.841,68.743 279.000,92.000 C266.159,115.257 233.365,180.231 137.000,193.000 C40.635,205.768 8.504,261.086 3.000,279.000 Z');
                                                        resizeDimensions(polygon,700,750);
                                                        polygon.scale(scaleVal);
                                  polygon.position = view.center;
                                  
                                  
                                  var clipgrp = new Group(polygon);
                                  clipgrp.addChild(raster);
                                  raster.fitBounds(view.bounds, true);

                                  clipgrp.clipped = true;
                                  
                                  polygon.smooth();
                                  
                                  var direction = 1;

                                  view.onFrame = function(event) {
                                    if (direction > 0){
                                      deltaTime++;
                                    }
                                    else {
                                      deltaTime--;
                                    }
                                    
                                    if (deltaTime == 300) {
                                      direction = -1;
                                    }

                                    if (deltaTime == 0) {
                                      direction = 1;
                                    }
                                    
                                    for (var i = 0; i < polygon.segments.length; i++) {
                                      polygon.segments[i].point.x += 0.3 * direction * Math.cos(0.009 * polygon.segments[i].point.y + deltaTime / 20);
                                      polygon.segments[i].point.y += 0.3 * direction * Math.sin(0.009 * polygon.segments[i].point.x + deltaTime / 20);
                                    }
                                  }
                                  
                                  function resizeDimensions(elem,width,height){
                                    //calc scale coefficients and store current position
                                    var scaleX = width/elem.bounds.width;
                                    var scaleY = height/elem.bounds.height;
                                    var prevPos = new Point(elem.bounds.x,elem.bounds.y);

                                    //apply calc scaling
                                    elem.scale(scaleX,scaleY);

                                    //reposition the elem to previous pos(scaling moves the elem so we reset it's position);
                                    var newPos = prevPos + new Point(elem.bounds.width/2,elem.bounds.height/2);
                                    elem.position = newPos;
                                  }
                                  
                                  view.onResize = function(event) {
                                    var windowWidth = jQuery(window).width();
                                                            resizeDimensions(polygon,700,750);
                                                            var scaleVal = 0.80;
                                
                                    if (windowWidth < 1599) {
                                                                scaleVal = 0.65;
                                                              }

                                    if (windowWidth < 1199) {
                                                                scaleVal = 0.55;
                                                              }

                                    if (windowWidth < 991) {
                                                                scaleVal = 0.45;
                                                              }
                                    
                                    if (windowWidth < 767) {
                                                                scaleVal = 0.33;
                                                              }
                                    polygon.scale(scaleVal);
                                    polygon.position = view.center;
                                    
                                  };
                                }

									            </script>
                            </div>
                            <div class="textUnique">
                              <h3 class="wow slideInRight" data-wow-delay="0.30s" data-wow-duration="0.60s">La confianza <span class="wow fadeInLeft" data-wow-delay="0.50s" data-wow-duration="0.60s">lo es todo</span></h3>
                              <p>Tenemos experiencia, somos honestos, somo leales, no especulamos, no inflamos tus cuentas. Podemos ayudarte a eficientar tus operaciones en comercio exterior, menos tiempo, menos gastos, menos dolores de cabeza.</p>
                              <div class="boxUniqueCount">1</div>
                            </div>
                          </div><!-- end.boxUnique -->
                          <div class="boxUnique">
                            <div class="imageUnique">
                              <canvas id="bubble1" class="hero-canvas" resize="true"></canvas>
									            <script type="text/paperscript" canvas="bubble1">
                                var deltaTime = 0;
                                
                                
                                var raster = new Raster({
                                  source: siteURL+'assets/img/bgs/tercerimagenexterior.jpg',
                                  opacity: 1
                                });
                                
                                var windowWidth = jQuery(window).width();
                                var scaleVal = 0.70;
                                
                                if (windowWidth < 1599) {
                                                        scaleVal = 0.65;
                                                      }
                                
                                if (windowWidth < 1199) {
                                                        scaleVal = 0.55;
                                                      }
                                
                                if (windowWidth < 991) {
                                                        scaleVal = 0.45;
                                                      }
                                
                                if (windowWidth < 767) {
                                                        scaleVal = 0.33;
                                                      }
                                
                                raster.onLoad = function() {
                                  //raster.scale(scaleVal);
                                  raster.position = view.center;

                                  var polygon = new Path('M3.000,279.000 C-2.504,296.914 -7.495,348.052 58.000,435.000 C123.495,521.948 197.052,585.000 314.000,550.000 C430.948,515.000 613.219,401.976 641.000,300.000 C675.268,174.210 677.283,11.028 505.000,1.000 C340.115,-8.598 291.841,68.743 279.000,92.000 C266.159,115.257 233.365,180.231 137.000,193.000 C40.635,205.768 8.504,261.086 3.000,279.000 Z');
                                                        resizeDimensions(polygon,700,750);
                                                        polygon.scale(scaleVal);
                                  polygon.position = view.center;
                                  
                                  
                                  var clipgrp = new Group(polygon);
                                  clipgrp.addChild(raster);
                                  raster.fitBounds(view.bounds, true);

                                  clipgrp.clipped = true;
                                  
                                  polygon.smooth();
                                  
                                  var direction = 1;

                                  view.onFrame = function(event) {
                                    if (direction > 0){
                                      deltaTime++;
                                    }
                                    else {
                                      deltaTime--;
                                    }
                                    
                                    if (deltaTime == 300) {
                                      direction = -1;
                                    }

                                    if (deltaTime == 0) {
                                      direction = 1;
                                    }
                                    
                                    for (var i = 0; i < polygon.segments.length; i++) {
                                      polygon.segments[i].point.x += 0.3 * direction * Math.cos(0.009 * polygon.segments[i].point.y + deltaTime / 20);
                                      polygon.segments[i].point.y += 0.3 * direction * Math.sin(0.009 * polygon.segments[i].point.x + deltaTime / 20);
                                    }
                                  }
                                  
                                  function resizeDimensions(elem,width,height){
                                    //calc scale coefficients and store current position
                                    var scaleX = width/elem.bounds.width;
                                    var scaleY = height/elem.bounds.height;
                                    var prevPos = new Point(elem.bounds.x,elem.bounds.y);

                                    //apply calc scaling
                                    elem.scale(scaleX,scaleY);

                                    //reposition the elem to previous pos(scaling moves the elem so we reset it's position);
                                    var newPos = prevPos + new Point(elem.bounds.width/2,elem.bounds.height/2);
                                    elem.position = newPos;
                                  }
                                  
                                  view.onResize = function(event) {
                                    var windowWidth = jQuery(window).width();
                                                            resizeDimensions(polygon,700,750);
                                                            var scaleVal = 0.80;
                                
                                    if (windowWidth < 1599) {
                                                                scaleVal = 0.65;
                                                              }

                                    if (windowWidth < 1199) {
                                                                scaleVal = 0.55;
                                                              }

                                    if (windowWidth < 991) {
                                                                scaleVal = 0.45;
                                                              }
                                    
                                    if (windowWidth < 767) {
                                                                scaleVal = 0.33;
                                                              }
                                    polygon.scale(scaleVal);
                                    polygon.position = view.center;
                                    
                                  };
                                }

									            </script>
                            </div>
                            <div class="textUnique">
                              <h3 class="wow slideInRight" data-wow-delay="0.30s" data-wow-duration="0.60s">El tiempo <span class="wow fadeInLeft" data-wow-delay="0.50s" data-wow-duration="0.60s">no espera a nadie</span></h3>
                              <p>Servicio 24/7, Si dormimos obviamente, pero cuando se trata de atenderte tenemos nuestro timbre a todo volumne. Cada embarque que envíe o resiva es importante y nuestra misión es asegurarnos de que su producto se entregue de manera segura y a tiempo.</p>
                              <div class="boxUniqueCount">2</div>
                            </div>
                          </div><!-- end.boxUnique -->
                          <div class="boxUnique">
                            <div class="imageUnique">
                              <canvas id="bubble2" class="hero-canvas" resize="true"></canvas>
									            <script type="text/paperscript" canvas="bubble2">
                                var deltaTime = 0;
                                
                                
                                var raster = new Raster({
                                  source: siteURL+'assets/img/bgs/port-with-cranes-2326876.jpg',
                                  opacity: 1
                                });
                                
                                var windowWidth = jQuery(window).width();
                                var scaleVal = 0.70;
                                
                                if (windowWidth < 1599) {
                                                        scaleVal = 0.65;
                                                      }
                                
                                if (windowWidth < 1199) {
                                                        scaleVal = 0.55;
                                                      }
                                
                                if (windowWidth < 991) {
                                                        scaleVal = 0.45;
                                                      }
                                
                                if (windowWidth < 767) {
                                                        scaleVal = 0.33;
                                                      }
                                
                                raster.onLoad = function() {
                                  //raster.scale(scaleVal);
                                  raster.position = view.center;

                                  var polygon = new Path('M3.000,279.000 C-2.504,296.914 -7.495,348.052 58.000,435.000 C123.495,521.948 197.052,585.000 314.000,550.000 C430.948,515.000 613.219,401.976 641.000,300.000 C675.268,174.210 677.283,11.028 505.000,1.000 C340.115,-8.598 291.841,68.743 279.000,92.000 C266.159,115.257 233.365,180.231 137.000,193.000 C40.635,205.768 8.504,261.086 3.000,279.000 Z');
                                                        resizeDimensions(polygon,700,750);
                                                        polygon.scale(scaleVal);
                                  polygon.position = view.center;
                                  
                                  
                                  var clipgrp = new Group(polygon);
                                  clipgrp.addChild(raster);
                                  raster.fitBounds(view.bounds, true);

                                  clipgrp.clipped = true;
                                  
                                  polygon.smooth();
                                  
                                  var direction = 1;

                                  view.onFrame = function(event) {
                                    if (direction > 0){
                                      deltaTime++;
                                    }
                                    else {
                                      deltaTime--;
                                    }
                                    
                                    if (deltaTime == 300) {
                                      direction = -1;
                                    }

                                    if (deltaTime == 0) {
                                      direction = 1;
                                    }
                                    
                                    for (var i = 0; i < polygon.segments.length; i++) {
                                      polygon.segments[i].point.x += 0.3 * direction * Math.cos(0.009 * polygon.segments[i].point.y + deltaTime / 20);
                                      polygon.segments[i].point.y += 0.3 * direction * Math.sin(0.009 * polygon.segments[i].point.x + deltaTime / 20);
                                    }
                                  }
                                  
                                  function resizeDimensions(elem,width,height){
                                    //calc scale coefficients and store current position
                                    var scaleX = width/elem.bounds.width;
                                    var scaleY = height/elem.bounds.height;
                                    var prevPos = new Point(elem.bounds.x,elem.bounds.y);

                                    //apply calc scaling
                                    elem.scale(scaleX,scaleY);

                                    //reposition the elem to previous pos(scaling moves the elem so we reset it's position);
                                    var newPos = prevPos + new Point(elem.bounds.width/2,elem.bounds.height/2);
                                    elem.position = newPos;
                                  }
                                  
                                  view.onResize = function(event) {
                                    var windowWidth = jQuery(window).width();
                                                            resizeDimensions(polygon,700,750);
                                                            var scaleVal = 0.80;
                                
                                    if (windowWidth < 1599) {
                                                                scaleVal = 0.65;
                                                              }

                                    if (windowWidth < 1199) {
                                                                scaleVal = 0.55;
                                                              }

                                    if (windowWidth < 991) {
                                                                scaleVal = 0.45;
                                                              }
                                    
                                    if (windowWidth < 767) {
                                                                scaleVal = 0.33;
                                                              }
                                    polygon.scale(scaleVal);
                                    polygon.position = view.center;
                                    
                                  };
                                }

									            </script>
                            </div>
                            <div class="textUnique">
                              <h3 class="wow slideInRight" data-wow-delay="0.30s" data-wow-duration="0.60s">Listos para despachar <span class="wow fadeInLeft" data-wow-delay="0.50s" data-wow-duration="0.60s">tu mercancía</span></h3>
                              <p>¿Te imagínas poder despachar un contenedor en menos de 12 hrs? Sabemos que el tiempo vale oro, es por eso por lo que con trabajo en equipo specializado lograremos aprovechar el tiempo al máximo.</p>
                              <div class="boxUniqueCount">3</div>
                            </div>
                          </div><!-- end.boxUnique -->

                        </div><!-- end.contentUnique -->
                      </div><!-- end.collg12 -->
                    </div>
                  </div>
                </section>

                <section id="estudio" class="modulo-two-home">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="descGen">
                          <h2>
                            <strong class="wow slideInLeft" data-wow-delay="0.30s" data-wow-duration="0.40s">estos son nuestros</strong>
                            <span class="wow slideInRight" data-wow-delay="0.30s" data-wow-duration="0.40s">servicios</span>
                          </h2><!-- end.titleSection -->
                        </div>
                      </div><!-- end.colLg -->
                    </div>
                  </div>
                  <div class="container-fluid no-padding">
                    <div class="row no-gutters">
                      <div class="col-12">
                        <div class="homepage-studies">

                          <div class="contItemStudies">
                            <div class="caseStudy-normal" style="background-image: url(<?php echo get_template_directory_uri(''); ?>assets/img/bgs/aerial-shot-of-ship-on-body-of-water-844426.jpg);">
                              <div class="titileStudy">
                                <h3 class="wow slideInUp" data-wow-delay="0.30s" data-wow-duration="0.60s">Desde el origen</h3>
                              </div>
                            </div><!-- end.studyNormal -->
                            <div class="caseStudy-hover">
                              <div class="container">
                                <div class="row">
                                  <div class="col-12 col-md-5 col-lg-5">
                                    <div class="descCase animated fadeInUp">
                                      <h4>Desde el origen</h4>
                                      <h5>Previo en origen</h5>
                                      <p>Garantiza despachos en tiempo mínimo</p>
                                      <h5>Seguro de carga</h5>
                                      <p>Emisión de certificados inmediata</p>
                                      <p><small>Contratación inmediata</small></p>
                                    </div>
                                  </div>
                                  <div class="col-5 col-md-7 col-lg-7 d-none d-md-block">
                                    <div class="imageCan animated">
                                      <canvas id="caseimg0" class="hero-canvas" resize></canvas>
                                      <script type="text/paperscript" canvas="caseimg0">
                                        var deltaTime = 0;

                                        var raster = new Raster({
                                          source: siteURL+'assets/img/bgs/imagen_interior_primer_seccion_de_servicios.jpg',
                                          opacity: 1
                                        });
                                        
                                        var windowWidth = jQuery(window).width();
                                        var scaleVal = 0.9;

                                        if (windowWidth < 1599) {
                                          scaleVal = 0.6;
                                        }

                                        if (windowWidth < 1199) {
                                          scaleVal = 0.5;
                                        }
                                        
                                        if (windowWidth < 991) {
                                          scaleVal = 0.41;
                                        }

                                        raster.onLoad = function() {
                                          raster.position = view.center;
                                          raster.scale(scaleVal);

                                          var polygon = new Path('M957.000,107.000 C957.000,107.000 1051.000,403.434 967.000,600.000 C883.000,796.566 961.133,810.036 1006.000,884.000 C1049.751,956.124 1083.542,1205.493 1005.000,1398.000 C926.458,1590.507 816.889,1407.083 736.000,1415.000 C655.111,1422.918 446.714,1425.517 395.000,1433.000 C343.286,1440.483 131.000,1454.000 131.000,1454.000 C131.000,1454.000 -16.583,1090.787 28.000,898.000 C72.583,705.213 132.000,635.190 80.000,516.000 C28.000,396.810 -38.486,238.048 28.000,67.000 C94.486,-104.048 957.000,107.000 957.000,107.000 Z');
                                          polygon.scale(scaleVal);
                                          polygon.position = view.center;
                                          
                                          jQuery('.case-study-hover-state .image canvas').addClass('loaded');

                                          var clipgrp = new Group(polygon);
                                          clipgrp.addChild(raster);
                                          raster.fitBounds(view.bounds, true);

                                          clipgrp.clipped = true;

                                          polygon.smooth();

                                          var direction = 1;

                                          view.onFrame = function(event) {
                                            if (direction > 0){
                                              deltaTime++;
                                            }
                                            else {
                                              deltaTime--;
                                            }
                                            
                                            if (deltaTime == 300) {
                                              direction = -1;
                                            }

                                            if (deltaTime == 0) {
                                              direction = 1;
                                            }
                                            
                                            for (var i = 0; i < polygon.segments.length; i++) {
                                              polygon.segments[i].point.x += 0.3 * direction * Math.cos(0.009 * polygon.segments[i].point.y + deltaTime / 20);
                                              polygon.segments[i].point.y += 0.3 * direction * Math.sin(0.009 * polygon.segments[i].point.x + deltaTime / 20);
                                            }
                                          }

                                          view.onResize = function(event) {
                                            var windowWidth = jQuery(window).width();
                                            polygon.scale(1/scaleVal);

                                            scaleVal = 0.9;

                                            if (windowWidth < 1599) {
                                              scaleVal = 0.6;
                                            }

                                            if (windowWidth < 1199) {
                                              scaleVal = 0.5;
                                            }
                                            
                                            if (windowWidth < 991) {
                                              scaleVal = 0.41;
                                            }
                                            
                                            polygon.scale(scaleVal);
                                            polygon.position = view.center;
                                          }
                                        }

                                      </script>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div><!-- end.studyHover -->
                          </div><!-- end.loopdstudies -->
                          <div class="contItemStudies">
                            <div class="caseStudy-normal" style="background-image: url(<?php echo get_template_directory_uri(''); ?>assets/img/bgs/segunga_imagen_exterior_servicios.jpg);">
                              <div class="titileStudy">
                                <h3 class="wow slideInUp" data-wow-delay="0.30s" data-wow-duration="0.60s">Durante el traslado</h3>
                              </div>
                            </div><!-- end.studyNormal -->
                            <div class="caseStudy-hover">
                              <div class="container">
                                <div class="row">
                                  <div class="col-12 col-md-5 col-lg-5 order-md-2">
                                    <div class="descCase animated fadeInUp">
                                      <h4>Durante el traslado</h4>
                                      <h5>Facturación de cuenta de gastos inmediata</h5>
                                      <p>Maniobristas en puerto</p>
                                      <h5>Recinto Fiscal Estratégico</h5>
                                      <h5>Transporte terrestre</h5>
                                    </div>
                                  </div>
                                  <div class="col-7 col-md-7 col-lg-7 d-none d-md-block">
                                    <div class="imageCan animated">
                                      <canvas id="caseimg1" class="hero-canvas" resize></canvas>
                                      <script type="text/paperscript" canvas="caseimg1">
                                        var deltaTime = 0;

                                        var raster = new Raster({
                                          source: siteURL+'assets/img/bgs/aerial-shot-of-ship-on-body-of-water-844426.jpg',
                                          opacity: 1
                                        });
                                        
                                        var windowWidth = jQuery(window).width();
                                        var scaleVal = 0.9;

                                        if (windowWidth < 1599) {
                                          scaleVal = 0.6;
                                        }

                                        if (windowWidth < 1199) {
                                          scaleVal = 0.5;
                                        }
                                        
                                        if (windowWidth < 991) {
                                          scaleVal = 0.41;
                                        }

                                        raster.onLoad = function() {
                                          raster.position = view.center;
                                          raster.scale(scaleVal);

                                          var polygon = new Path('M957.000,107.000 C957.000,107.000 1051.000,403.434 967.000,600.000 C883.000,796.566 961.133,810.036 1006.000,884.000 C1049.751,956.124 1083.542,1205.493 1005.000,1398.000 C926.458,1590.507 816.889,1407.083 736.000,1415.000 C655.111,1422.918 446.714,1425.517 395.000,1433.000 C343.286,1440.483 131.000,1454.000 131.000,1454.000 C131.000,1454.000 -16.583,1090.787 28.000,898.000 C72.583,705.213 132.000,635.190 80.000,516.000 C28.000,396.810 -38.486,238.048 28.000,67.000 C94.486,-104.048 957.000,107.000 957.000,107.000 Z');
                                          polygon.scale(scaleVal);
                                          polygon.position = view.center;
                                          
                                          jQuery('.case-study-hover-state .image canvas').addClass('loaded');

                                          var clipgrp = new Group(polygon);
                                          clipgrp.addChild(raster);
                                          raster.fitBounds(view.bounds, true);

                                          clipgrp.clipped = true;

                                          polygon.smooth();

                                          var direction = 1;

                                          view.onFrame = function(event) {
                                            if (direction > 0){
                                              deltaTime++;
                                            }
                                            else {
                                              deltaTime--;
                                            }
                                            
                                            if (deltaTime == 300) {
                                              direction = -1;
                                            }

                                            if (deltaTime == 0) {
                                              direction = 1;
                                            }
                                            
                                            for (var i = 0; i < polygon.segments.length; i++) {
                                              polygon.segments[i].point.x += 0.3 * direction * Math.cos(0.009 * polygon.segments[i].point.y + deltaTime / 20);
                                              polygon.segments[i].point.y += 0.3 * direction * Math.sin(0.009 * polygon.segments[i].point.x + deltaTime / 20);
                                            }
                                          }

                                          view.onResize = function(event) {
                                            var windowWidth = jQuery(window).width();
                                            polygon.scale(1/scaleVal);

                                            scaleVal = 0.9;

                                            if (windowWidth < 1599) {
                                              scaleVal = 0.6;
                                            }

                                            if (windowWidth < 1199) {
                                              scaleVal = 0.5;
                                            }
                                            
                                            if (windowWidth < 991) {
                                              scaleVal = 0.41;
                                            }
                                            
                                            polygon.scale(scaleVal);
                                            polygon.position = view.center;
                                          }
                                        }

                                      </script>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div><!-- end.studyHover -->
                          </div><!-- end.loopdstudies -->
                          <div class="contItemStudies">
                            <div class="caseStudy-normal" style="background-image: url(<?php echo get_template_directory_uri(''); ?>assets/img/bgs/tercerimagenexterior.jpg);">
                              <div class="titileStudy">
                                <h3 class="wow slideInUp" data-wow-delay="0.30s" data-wow-duration="0.60s">Ya en destino</h3>
                              </div>
                            </div><!-- end.studyNormal -->
                            <div class="caseStudy-hover">
                              <div class="container">
                                <div class="row">
                                  <div class="col-12 col-md-5 col-lg-5">
                                    <div class="descCase animated fadeInUp">
                                      <h4>Ya en destino</h4>
                                      <h5>Despacho aduanal</h5>
                                      <p>a.	Maquinaria industrial</p>
                                      <p>b.	Acero</p>
                                      <p>c.	Automotriz</p>
                                      <p>d.	Textil</p>
                                      <p>e.	Calzado</p>
                                      <p>f.	Juguetes</p>
                                      <h5>Gestión de embarques Online</h5>
                                      <h5>Asesoría en comercio</h5>
                                    </div>
                                  </div>
                                  <div class="col-7 col-md-7 col-lg-7 d-none d-md-block">
                                    <div class="imageCan animated">
                                      <canvas id="caseimg2" class="hero-canvas" resize></canvas>
                                      <script type="text/paperscript" canvas="caseimg2">
                                        var deltaTime = 0;

                                        var raster = new Raster({
                                          source: siteURL+'assets/img/bgs/imagen_interior_tercer_bloque.jpg',
                                          opacity: 1
                                        });
                                        
                                        var windowWidth = jQuery(window).width();
                                        var scaleVal = 0.9;

                                        if (windowWidth < 1599) {
                                          scaleVal = 0.6;
                                        }

                                        if (windowWidth < 1199) {
                                          scaleVal = 0.5;
                                        }
                                        
                                        if (windowWidth < 991) {
                                          scaleVal = 0.41;
                                        }

                                        raster.onLoad = function() {
                                          raster.position = view.center;
                                          raster.scale(scaleVal);

                                          var polygon = new Path('M957.000,107.000 C957.000,107.000 1051.000,403.434 967.000,600.000 C883.000,796.566 961.133,810.036 1006.000,884.000 C1049.751,956.124 1083.542,1205.493 1005.000,1398.000 C926.458,1590.507 816.889,1407.083 736.000,1415.000 C655.111,1422.918 446.714,1425.517 395.000,1433.000 C343.286,1440.483 131.000,1454.000 131.000,1454.000 C131.000,1454.000 -16.583,1090.787 28.000,898.000 C72.583,705.213 132.000,635.190 80.000,516.000 C28.000,396.810 -38.486,238.048 28.000,67.000 C94.486,-104.048 957.000,107.000 957.000,107.000 Z');
                                          polygon.scale(scaleVal);
                                          polygon.position = view.center;
                                          
                                          jQuery('.case-study-hover-state .image canvas').addClass('loaded');

                                          var clipgrp = new Group(polygon);
                                          clipgrp.addChild(raster);
                                          raster.fitBounds(view.bounds, true);

                                          clipgrp.clipped = true;

                                          polygon.smooth();

                                          var direction = 1;

                                          view.onFrame = function(event) {
                                            if (direction > 0){
                                              deltaTime++;
                                            }
                                            else {
                                              deltaTime--;
                                            }
                                            
                                            if (deltaTime == 300) {
                                              direction = -1;
                                            }

                                            if (deltaTime == 0) {
                                              direction = 1;
                                            }
                                            
                                            for (var i = 0; i < polygon.segments.length; i++) {
                                              polygon.segments[i].point.x += 0.3 * direction * Math.cos(0.009 * polygon.segments[i].point.y + deltaTime / 20);
                                              polygon.segments[i].point.y += 0.3 * direction * Math.sin(0.009 * polygon.segments[i].point.x + deltaTime / 20);
                                            }
                                          }

                                          view.onResize = function(event) {
                                            var windowWidth = jQuery(window).width();
                                            polygon.scale(1/scaleVal);

                                            scaleVal = 0.9;

                                            if (windowWidth < 1599) {
                                              scaleVal = 0.6;
                                            }

                                            if (windowWidth < 1199) {
                                              scaleVal = 0.5;
                                            }
                                            
                                            if (windowWidth < 991) {
                                              scaleVal = 0.41;
                                            }
                                            
                                            polygon.scale(scaleVal);
                                            polygon.position = view.center;
                                          }
                                        }

                                      </script>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div><!-- end.studyHover -->
                          </div><!-- end.loopdstudies -->

                        </div><!-- end.contentStudies -->
                      </div><!-- end.col-12 -->
                    </div>
                  </div>
                </section>

                <section id="contacto" class="modulo-three-home">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-6 col-lg-4">
                        <div class="contactDetail">
                          <h3>Contáctanos <span></span></h3>
                          <p>
                            <strong>CIE Logistics</strong><br>
                            dirección
                          </p>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-6">
                        <div class="contactForm">
                          <form action="" method="POST" name="frmContact" id="frmContact">
                            <div class="inpLay">
                              <textarea name="motivo" id="motivo" cols="30" rows="10" placeholder="¡Deja tus datos!"></textarea>
                            </div>
                            <button class="btnSend" type="submit" name="submit" id="submit">Enviar</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                

              </article><!-- end.article inicio --> 