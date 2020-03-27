<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161839879-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-161839879-1');
    </script>

<?php

 include 'menu_sup.php';

?>
    <!-- offers_area_start -->
    <div class="our_department_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-55">
                        <h2>Leitura</h2>
                        <p><a href="contato.php">Clique aqui</a> para enviar uma sugestão!</p>
                    </div>
                </div>
            </div>

            <div class="row" id="servicos">

                 <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <a href="https://www.amazon.com.br/s?bbn=6740748011&rh=n%3A6740748011%2Cp_n_feature_browse-bin%3A8561254011&dc&fst=as%3Aoff&qid=1585154051&rnid=8561249011&ref=lp_6740748011_nr_p_n_feature_browse-b_2" target="_blank">
                                <img src="img/servicos/amazon.png" alt="">
                            </a>
                        </div>
                        <div class="department_content">
                            <h3><a href="https://www.amazon.com.br/s?bbn=6740748011&rh=n%3A6740748011%2Cp_n_feature_browse-bin%3A8561254011&dc&fst=as%3Aoff&qid=1585154051&rnid=8561249011&ref=lp_6740748011_nr_p_n_feature_browse-b_2">Amazon</a></h3>
                            <p>A Amazon liberou centenas de livros digitais gratuitamente.</p>
                            <a href="https://www.amazon.com.br/s?bbn=6740748011&rh=n%3A6740748011%2Cp_n_feature_browse-bin%3A8561254011&dc&fst=as%3Aoff&qid=1585154051&rnid=8561249011&ref=lp_6740748011_nr_p_n_feature_browse-b_2" class="learn_more" target="_blank">Acessar</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <a href="https://www.lpm.com.br/site/default.asp" target="_blank">
                                <img src="img/servicos/lpm.jpg" height="263" alt="">
                            </a>
                        </div>
                        <div class="department_content">
                            <h3><a href="https://www.lpm.com.br/site/default.asp">L&PM Editores</a></h3>
                            <p>A L&PM está disponibilizando um Ebook gratuito por dia.</p>
                            <a href="https://www.lpm.com.br/site/default.asp" class="learn_more" target="_blank">Acessar</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <a href="https://pt.scribd.com/?lohp=2" target="_blank">
                                <img src="img/servicos/scribd.jpg" height="263" alt="">
                            </a>
                        </div>
                        <div class="department_content">
                            <h3><a href="https://pt.scribd.com/?lohp=2">Scribd</a></h3>
                            <p>O Scribd disponibilizou todo o seu acervo gratuitamente por 30 dias.
                            </p>
                            <a href="https://pt.scribd.com/?lohp=2" class="learn_more" target="_blank">Acessar</a>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

<!-- footer start -->
    <footer class="footer">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-4 col-lg-4">
                            <div class="footer_widget">
                                
                                <p> <b>Núcleo de Inovação em Computação</b><br/><strong>Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Norte, Campus Canguaretama</strong></p>
                                <p><i class="fas fa-map-marked-alt"></i> BR-101, Km 160, S/N, Areia Branca<br />
                                Canguaretama - RN, CEP: 59190-000. </p>
                                
              <p>
                <i class="fas fa-phone"></i> (84) 4005-4114<br>
                <i class="fas fa-envelope-square"></i> gabin.cang@ifrn.edu.br
              </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right_text">
                <div class="container">
                    <div class="footer_border"></div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy_right text-center">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
<!-- footer end  -->
    <!-- link that opens popup -->

    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>Make an Appointment</h3>
                <form action="#">
                    <div class="row">
                        <div class="col-xl-6">
                            <input id="datepicker" placeholder="Pick date">
                        </div>
                        <div class="col-xl-6">
                            <input id="datepicker2" placeholder="Suitable time">
                        </div>
                        <div class="col-xl-6">
                            <select class="form-select wide" id="default-select" class="">
                                <option data-display="Select Department">Department</option>
                                <option value="1">Eye Care</option>
                                <option value="2">Physical Therapy</option>
                                <option value="3">Dental Care</option>
                            </select>
                        </div>
                        <div class="col-xl-6">
                            <select class="form-select wide" id="default-select" class="">
                                <option data-display="Doctors">Doctors</option>
                                <option value="1">Mirazul Alom</option>
                                <option value="2">Monzul Alom</option>
                                <option value="3">Azizul Isalm</option>
                            </select>
                        </div>
                        <div class="col-xl-6">
                            <input type="text"  placeholder="Name">
                        </div>
                        <div class="col-xl-6">
                            <input type="text"  placeholder="Phone no.">
                        </div>
                        <div class="col-xl-12">
                            <input type="email"  placeholder="Email">
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="boxed-btn3">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <!-- form itself end -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>'
            }

        });
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    </script>
</body>

</html>