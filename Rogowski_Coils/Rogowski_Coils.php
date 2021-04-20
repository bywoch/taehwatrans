<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include("../inc/head.php") ?>
    <link rel="stylesheet" type="text/css" href="../css/Rogowski_Coils/Rogowski_Coils.css">
    <link rel="stylesheet" type="text/css" href="../css/depth_03_common.css">
</head>

<body>
    <!--<h1>0</h1>-->
    <!-- header -->
    <?php include("../inc/header.php") ?>
    <!-- //header -->
    <!-- container -->
    <container id="container" class="depth_02 rgsk_ci">
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
                                    <option value="/Split-core_CT/Split-core_CT.php">Split-core CT</option>
                                    <option value="/Rogowski_Coils/Rogowski_Coils.php" selected="select">Rogowski Coils</option>
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
                                    <option value="#">Solid / Leadwire Rogowski coils</option>
                                    <option value="#">Flexible Rogowski coils</option>
                                    <option value="#">Ruggedized Clamp-on Rogowski coils</option>
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
                    <h3>Rogowski Coils</h3><br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="dep02_introduce_txt">
            <p>Taehwatrans offers an extensive line of toroidal current transformers for power metering and monitoring applications. Product portfolio includes revenue grade metering CTs, DC immune CTs, Protection &amp; Monitoring CTs, High Frequency Monitoring CTs, Multi-Harmonics Monitoring CTs and Voltage Measurement CTs. This vertically deep and horizontally wide categories of CTs are attributed by Taehwatrans’ 40 years of application engineering. Our products are UL Recognized for both US and Canada and Measurement Canada certified. RoHs compliant. They are epoxy encapsulated to provide protection from the environment.<br><br>Supreme Accuracy current transformers consist of a variety of CTs, for example, HVCT / MVCT Revenue Grade Metering CTs, Multi Harmonics CTs, Smart Metering CTs, Isolation CTs and Arc Plasma CTs. They are widely utilized in 0.1/0.2 class meters and different types of energy measurement devices that require the highest accuracy class in the market. Taehwatrans is a power house capable of providing all sizes of current transformers for a variety of smart grid applications.</p>
            <p style="margin-top: 80px;"><strong>Rogowski coil Sensors</strong> are applied to electrical devices that measure up to thousands of amp AC (alternating current) for power meters, energy sub meters, condition monitoring, power quality monitoring as well as distributed measurement systems and current spike detection. No iron or other metal core is involved in the construction. What is critical is the diameter of the coil, the winding density and the rigidity of the winding, which help to preserve immunity to the various external fields</p>
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
                - Meeting International Standard IEC 61869-2<br>
                - Excellent Linearity &amp; Precision<br>
                - Steady Phase Shift &amp; No Saturation in DC factor<br>
                - Stability from External Magnetic Field<br>
                - Possible to adopt the immunity of DC Magnets<br>
                - High Potential Voltage unto 4.0 kV per min<br>
                - RoHS Compliant<br><br><br>
            </p>
        </div>
        <div class="content_sol_allbox cf">
           
            <div class="content_sol_box ml_0">
                <div class="sol_padding_box">
                    <div class="sol_img sol_ct_01">
                        <a href="/Rogowski_Coils/Rigid_Rogowski_Coils.php"><img src="/img/ctt_img_01.png" alt="ctt_img"></a>
                    </div>
                    <div class="sol_txt">
                        <h4>Rigid Rogowski Coils</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="sol_btn_box">
                        <a class="sol_btn" href="/Rogowski_Coils/Rigid_Rogowski_Coils.php">VIEW MORE</a>
                    </div>
                </div>
            </div>
            
            <div class="content_sol_box ml_480_n">
                <div class="sol_padding_box">
                    <div class="sol_img sol_ct_02">
                        <a href="/Rogowski_Coils/Flexible_Rogowski_Coils.php"><img src="/img/ctt_img_02.png" alt="ctt_img"></a>
                    </div>
                    <div class="sol_txt">
                        <h4>Flexible Rogowski Coils</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="sol_btn_box">
                        <a class="sol_btn" href="/Rogowski_Coils/Flexible_Rogowski_Coils.php">VIEW MORE</a>
                    </div>
                </div>
            </div>
            
            <div class="content_sol_box ml_1024_n">
                <div class="sol_padding_box">
                    <div class="sol_img sol_ct_03">
                        <a href="/Rogowski_Coils/MV_Flexible_Rogowski_Coils.php"><img src="/img/ctt_img_03.png" alt="ctt_img"></a>
                    </div>
                    <div class="sol_txt">
                        <h4>MV Flexible Rogowski coils</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="sol_btn_box">
                        <a class="sol_btn" href="/Rogowski_Coils/MV_Flexible_Rogowski_Coils.php">VIEW MORE</a>
                    </div>
                </div>
            </div>
            
            <div class="content_sol_box ml_0 ml_1024_2p ml_480_n">
                <div class="sol_padding_box">
                    <div class="sol_img sol_ct_04">
                        <a href="/Rogowski_Coils/Clamp-on_Rogowski_Coils.php"><img src="/img/ctt_img_04.png" alt="ctt_img"></a>
                    </div>
                    <div class="sol_txt">
                        <h4>Clamp on Rogowski Coils</h4>
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
