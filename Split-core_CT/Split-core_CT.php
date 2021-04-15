<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include("../inc/head.php") ?>
    <link rel="stylesheet" type="text/css" href="../css/Split-core_CT/Split-core_CT.css">
</head>

<body>
    <!--<h1>0</h1>-->
    <!-- header -->
    <?php include("../inc/header.php") ?>
    <!-- //header -->
    <!-- container -->
    <container id="container" class="depth_02 split-core_ct">
        <div class="spl_serch_wrap cf">
            <div class="spl_serch_box tab-content">
                <div class="spl_select_box first-child cf">
                    <!--<p>제품군</p>-->
                    <a class="icon_home" href="/index.php">
                        <img src="/img/icon-home.png" alt="홈 버튼">
                    </a>
                    <form action="#" method="get" class="spl_select_form ml_550_n">
                        <fieldset>
                            <legend class="blind">제품군</legend>
                            <p>
                                <select name="select" id="select" class="spl_select" title="선택해 주세요." onchange="if(this.value) location.href=(this.value);">
                                    <option value="/Solid_CT/Solid_CT.php">Solid CT for Energy Meters</option>
                                    <option value="/Split-core_CT/Split-core_CT.php" selected="select">Split-core CT</option>
                                    <option value="/Rogowski_Coils/Rogowski_Coils.php">Rogowski Coils</option>
                                    <option value="/Zero-Phase_CT/Zero-Phase_CT.php">Zero Phase CT</option>
                                    <option value="/Custom_Current_Sensors/Custom_Current_Sensors.php">Custom Current Sensors</option>
                                </select>
                            </p>
                        </fieldset>
                    </form>
                    <!--<p>카테고리</p>-->
                    <form action="#" method="get" class="spl_select_form">
                        <fieldset>
                            <legend class="blind">카테고리</legend>
                            <p>
                                <select name="select" id="select" class="spl_select" title="선택해 주세요.">
                                    <option value="" selected="select">Main</option>
                                    <option value="#">Miniature Split-core CT</option>
                                    <option value="#">Busbar Split-core CT</option>
                                    <option value="#">Outdoor Split-core CT</option>
                                    <!--
                                    <option value="#">Voltage Measurement CT</option>
                                    <option value="#">Multi-Harmonics Monitoring CT</option>
                                    <option value="#">High Frequency Monitoring CT</option>
                                    -->
                                </select>
                            </p>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="spot_solct_allbox">
            <div class="spot_solct_box">
                <div class="spot_txt_box">
                    <h3>Split-core CT</h3><br>
                    <p>Outdoor split core series includes 5A, 1A, and mA secondary outputfor varieties of user application</p>
                </div>
            </div>
        </div>
        <div class="content_sol_allbox cf">
            <div class="content_sol_box ml_0">
                <div class="sol_padding_box">
                    <div class="sol_img sol_ct_01">
                        <a href="/Split-core_CT/Miniature-Split-core_CT.php"><img src="/img/ctt_img_01.png" alt="ctt_img"></a>
                    </div>
                    <div class="sol_txt">
                        <h4>Miniature Split-core CT</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="sol_btn_box">
                        <a class="sol_btn" href="/Split-core_CT/Miniature-Split-core_CT.php">VIEW MORE</a>
                    </div>
                </div>
            </div>
            <div class="content_sol_box ml_480_n">
                <div class="sol_padding_box">
                    <div class="sol_img sol_ct_02">
                        <a href="/Split-core_CT/Busbar-Split-core_CT.php"><img src="/img/ctt_img_02.png" alt="ctt_img"></a>
                    </div>
                    <div class="sol_txt">
                        <h4>Busbar Split-core CT</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="sol_btn_box">
                        <a class="sol_btn" href="/Split-core_CT/Busbar-Split-core_CT.php">VIEW MORE</a>
                    </div>
                </div>
            </div>
            <div class="content_sol_box ml_1024_n">
                <div class="sol_padding_box">
                    <div class="sol_img sol_ct_03">
                        <a href="/Split-core_CT/Outdoor-Split-Core-transformer.php"><img src="/img/ctt_img_03.png" alt="ctt_img"></a>
                    </div>
                    <div class="sol_txt">
                        <h4>Outdoor Split-core CT</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="sol_btn_box">
                        <a class="sol_btn" href="/Split-core_CT/Outdoor-Split-Core-transformer.php">VIEW MORE</a>
                    </div>
                </div>
            </div>
            <!--
            <div class="content_sol_box ml_0 ml_1024_2p ml_480_n">
                <div class="sol_padding_box">
                    <div class="sol_img sol_ct_04">
                        <a href=""><img src="/img/ctt_img_04.png" alt="ctt_img"></a>
                    </div>
                    <div class="sol_txt">
                        <h4>Voltage Measurement CT</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="sol_btn_box">
                        <a class="sol_btn" href="/Split-core_CT/Outdoor-Split-Core-transformer.php">VIEW MORE</a>
                    </div>
                </div>
            </div>
            <div class="content_sol_box ml_1024_n">
                <div class="sol_padding_box">
                    <div class="sol_img sol_ct_05">
                        <a href=""><img src="/img/ctt_img_05.png" alt="ctt_img"></a>
                    </div>
                    <div class="sol_txt">
                        <h4>Multi-Harmonics Monitoring CT</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="sol_btn_box">
                        <a class="sol_btn" href="/Split-core_CT/Outdoor-Split-Core-transformer.php">VIEW MORE</a>
                    </div>
                </div>
            </div>
            <div class="content_sol_box ml_480_n">
                <div class="sol_padding_box">
                    <div class="sol_img sol_ct_06">
                        <a href=""><img src="/img/ctt_img_06.png" alt="ctt_img"></a>
                    </div>
                    <div class="sol_txt">
                        <h4>High Frequency Monitoring CT</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="sol_btn_box">
                        <a class="sol_btn" href="/Split-core_CT/Outdoor-Split-Core-transformer.php">VIEW MORE</a>
                    </div>
                </div>
            </div>
            -->
        </div>
    </container>
    <!-- //container -->
    <!-- footer -->
    <?php include("../inc/footer.php") ?>
    <!-- //footer -->
    <?php include("../inc/btn-up.php") ?>
</body>

</html>
