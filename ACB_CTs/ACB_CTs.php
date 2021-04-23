<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include("../inc/head.php") ?>
    <link rel="stylesheet" type="text/css" href="../css/Zero-Phase_CT/Zero-Phase_CT.css">
</head>

<body>
    <!--<h1>0</h1>-->
    <!-- header -->
    <?php include("../inc/header.php") ?>
    <!-- //header -->
    <!-- container -->
    <container id="container" class="depth_02 rgsk_ci">
        <div class="spl_search_wrap cf">
            <div class="spl_search_box tab-content">
                <div class="spl_select_box first-child cf">
                    <a class="icon_home" href="/index.php">
                        <img src="/img/icon-home.png" alt="홈 버튼">
                    </a>
                    <form action="#" method="get" class="spl_select_form ml_550_n">
                        <fieldset>
                            <legend class="blind">제품군</legend>
                            <p>
                                <select name="select" id="select" style="width: 270px; height: 44px; float: left; color: #666; padding: 7px;" title="선택해 주세요." onchange="if(this.value) location.href=(this.value);">
                                    <option value="/Solid_CT/Solid_CT.php">Solid CTs for Metering &amp; monitoring</option>
                                    <option value="/Split-core_CT/Split-core_CT.php">Split-core CT</option>
                                    <option value="/Zero-Phase_CT/Zero-Phase_CT.php">Zero Phase CT</option>
                                    <option value="/Rogowski_Coils/Rogowski_Coils.php" selected="select">Rogowski Coils</option>
                                    <option value="/ACB_CTs/ACB_CTs.php">ACB &amp; GIS Current Transformer</option>
                                </select>
                            </p>
                        </fieldset>
                    </form>
                    <form action="#" method="get" class="spl_select_form">
                        <fieldset>
                            <legend class="blind">카테고리</legend>
                            <p>
                                <select name="select" id="select" style="width: 270px; height: 44px; float: left; color: #666; padding: 7px;" title="선택해 주세요." onchange="if(this.value) location.href=(this.value);">
                                    <option value="/Rogowski_Coils/Rogowski_Coils.php" selected="select">Main</option>
                                    <option value="/Rogowski_Coils/Rigid_Rogowski_Coils.php">Rigid Rogowski Coils</option>
                                    <option value="/Rogowski_Coils/Flexible_Rogowski_Coils.php">UL Listed R-Coil / High Frequency R-Coil</option>
                                    <option value="/Rogowski_Coils/MV_Flexible_Rogowski_Coils.php">MV Flexible Rogowski Coils</option>
                                    <option value="/Rogowski_Coils/Clamp-on_Rogowski_Coils.php">Clamp-on Rogowski Coils</option>
                                </select>
                            </p>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="spot_solct_allbox" style="background-color: #fff; border-bottom: 1px solid #e6e6e6">
            <div class="spot_solct_box ssb_03">
                <div class="spot_txt_box">
                    <h3>Rogowski Coils</h3><br>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="dep02_introduce_txt">
            <!--<div class="ftrs_box cf">
                <img src="../img/rc_features_01.jpg" alt="Rogowski coil Sensors Features Image" style="width: 100%; max-width: 420px; display: block; margin: 0 auto;">
            </div>-->
            <p style="margin: 50px auto 50px;"><strong>Rogowski coil Sensors</strong> are applied to electrical devices that measure up to thousands of amp AC (alternating current) for power meters, energy sub meters, condition monitoring, power quality monitoring as well as distributed measurement systems and current spike detection. No iron or other metal core is involved in the construction. What is critical is the diameter of the coil, the winding density and the rigidity of the winding, which help to preserve immunity to the various external fields.</p>
            <div class="ftrs_box cf">
                <!--<div class="ft_imgbox">
                    <img src="../img/rc_features_01.jpg" alt="Rogowski coil Sensors Features Image">
                </div>-->
                <div class="ft_txtbox">
                    <p><strong>Rogowski Coil Sensors Application</strong><br><br>
                        - Smart Recloser on Distribution Line<br>
                        - Electronic Sectionalizer<br>
                        - Smart Grid Application<br>
                        - High Current Energy Meters &amp; Protection Relay<br>
                        - Harmonics Measurement Sensors<br>
                        - Air Circuit Breakers &amp; Smart Reclosers<br>
                        - Gas Insulation Switch Gear<br>
                        - AC Component Fault Detector out of DC Current<br>
                        - High Frequency High Current Measurements<br>
                        - High Current Welding Machines<br><br><br>
                        <strong>General Features</strong><br><br>
                        - Meeting International Standard IEC 61869-10<br>
                        - Excellent Linearity &amp; Precision<br>
                        - Steady Phase Shift &amp; No Saturation in DC factor<br>
                        - Stability from External Magnetic Field<br>
                        - Possible to adopt the immunity of DC Magnets<br>
                        - High Potential Voltage unto 4.0 kV per min<br>
                        - RoHS Compliant<br><br><br>
                    </p>
                </div>
            </div>
        </div>
        <div class="content_sol_allbox cf">
            <div class="content_sol_box ml_0">
                <div class="sol_padding_box">
                    <div class="sol_img sol_ct_01">
                        <a href="/Rogowski_Coils/Rigid_Rogowski_Coils.php"><img src="/img/rc_ctt_img_01.jpg" alt="ctt_img"></a>
                    </div>
                    <div class="sol_txt">
                        <h4>Rigid Rogowski Coils</h4>
                    </div>
                    <div class="sol_btn_box">
                        <a class="sol_btn" href="/Rogowski_Coils/Rigid_Rogowski_Coils.php">VIEW MORE</a>
                    </div>
                </div>
            </div>

            <div class="content_sol_box ml_480_n">
                <div class="sol_padding_box">
                    <div class="sol_img sol_ct_02">
                        <a href="/Rogowski_Coils/Flexible_Rogowski_Coils.php"><img src="/img/rc_ctt_img_02.jpg" alt="ctt_img"></a>
                    </div>
                    <div class="sol_txt">
                        <h4>Flexible Rogowski Coils</h4>
                        <!--<h4>UL Listed R-Coils / High Frequency R-Coil</h4>-->
                    </div>
                    <div class="sol_btn_box">
                        <a class="sol_btn" href="/Rogowski_Coils/Flexible_Rogowski_Coils.php">VIEW MORE</a>
                    </div>
                </div>
            </div>
            <div class="content_sol_box ml_1024_n">
                <div class="sol_padding_box">
                    <div class="sol_img sol_ct_03">
                        <a href="/Rogowski_Coils/MV_Flexible_Rogowski_Coils.php"><img src="/img/rc_ctt_img_03.jpg" alt="ctt_img"></a>
                    </div>
                    <div class="sol_txt">
                        <h4>MV Flexible Rogowski coils</h4>
                    </div>
                    <div class="sol_btn_box">
                        <a class="sol_btn" href="/Rogowski_Coils/MV_Flexible_Rogowski_Coils.php">VIEW MORE</a>
                    </div>
                </div>
            </div>
            <div class="content_sol_box ml_0 ml_1024_y ml_1024_2p ml_480_n">
                <div class="sol_padding_box">
                    <div class="sol_img sol_ct_04">
                        <a href="/Rogowski_Coils/Clamp-on_Rogowski_Coils.php"><img src="/img/rc_ctt_img_04.jpg" alt="ctt_img"></a>
                    </div>
                    <div class="sol_txt">
                        <h4>Clamp-on Rogowski Coils</h4>
                        <p>Best in class accuracy with winding isolation.</p>
                    </div>
                    <div class="sol_btn_box">
                        <a class="sol_btn" href="/Rogowski_Coils/Clamp-on_Rogowski_Coils.php">VIEW MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </container>
    <!-- //container -->
    <!-- footer -->
    <?php include("../inc/footer.php") ?>
    <!-- //footer -->
    <?php include("../inc/btn-up.php") ?>
</body>

</html>
