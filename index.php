<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include("inc/head.php") ?>
    <link rel="stylesheet" href="css/main.css">
</head>

<body id="main_body">
    <!-- header -->
    <?php include("inc/header.php") ?>
    <!-- //header -->
    <!-- container -->
    <container id="container" class="main">
        <h1 class="blind">container Area</h1>
        <div class="slider_box">
            <ul class="slider">
                <li>
                    <div class="slider_img">
                        <div class="slider_txt_box cf">
                            <p style="text-shadow: 2px 2px 2px #3b6280;">Current Transformers and Rogowski coils<br>
                                Energy Metering and Monitoring Solutions since 1980</p>
                            <a href="/aboutus">More</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="select_wrap">
            <div class="search_allbox">
                <div class="search_title cf">
                    <div class="sc_tt_01 active" data-tab="tab-1" style="width: 70%;">
                        <p class="tt_01_l_txt ds_n_768"><strong>Search</strong> | Search for the right product</p>
                        <p class="tt_01_s_txt ds_n_768" style="display: none;">Search</p>
                        <p class="sc_tt_01_768 ds_bl_768">Search</p>
                    </div>
                    <div class="sc_tt_02 ds_n_768" data-tab="tab-2" style="width: 30%;">
                        <p class="tt_02_l_txt" style="display: none;">Taehwatrans for all of you |
                            <strong>Information</strong>
                        </p>
                        <p class="tt_02_s_txt">Information</p>
                    </div>
                </div>
                <div class="search_box tab-content">
                    <div class="select_box first-child">
                        <br>
                        <br>
                        <br>
                        <form name="select_machine" action="#" method="get" class="select_form cf">
                            <fieldset style="margin-left: none;">
                                <p>Product</p>
                                <legend class="blind">Product</legend>
                                <p>
                                    <select name=" " class="select"
                                        onchange="showSub(this.options[this.selectedIndex].value);">
                                        <option value="0" selected="select">Product</option>
                                        <option value="1">Solid CTs for Metering &amp; monitoring</option>
                                        <option value="2">Split-core CTs</option>
                                        <option value="3">Zero Phase CT</option>
                                        <option value="4">Rogowski Coils</option>
                                        <option value="5">ACB &amp; GIS Current Transformer</option>
                                    </select>

                                </p>
                            </fieldset>
                            <fieldset>
                                <p>Category</p>
                                <legend class="blind">Category</legend>
                                <p>
                                    <select name="SUB0" class="select" style="">
                                        <option value="">------------------------------ Category
                                            ------------------------------</option>
                                    </select>
                                    <select name="SUB1" class="select1 select" style="display: none;"
                                        onchange="if(this.value) location.href=(this.value);">
                                        <option value="">------------------------------ Category
                                            ------------------------------</option>
                                        <option value="/Solid_CT/Solid_CT.php">Main</option>
                                        <option value="/Solid_CT/Revenue_Grade_Metering_CT.php">Revenue Grade Metering
                                            CT</option>
                                        <option value="/Solid_CT/Protection&amp;Monitoring_CT.php">
                                            Protection&amp;Monitoring CT</option>
                                        <option value="/Solid_CT/DC_Immune_CT.php">DC Immune CT</option>
                                        <option value="/Solid_CT/Voltage_Measurement_CT.php">Voltage Measurement CT
                                        </option>
                                        <option value="/Solid_CT/Multi-Harmonics_Monitoring_CT.php">Multi-Harmonics
                                            Monitoring CT</option>
                                        <option value="/Solid_CT/Multi-Harmonics_Monitoring_CT.php">High Frequency
                                            Monitoring CT</option>
                                    </select>
                                    <select name="SUB2" class="select1 select" style="display: none;"
                                        onchange="if(this.value) location.href=(this.value);">
                                        <option value="">------------------------------ Category
                                            ------------------------------</option>
                                        <option value="/Split-core_CT/Split-core_CT.php">Main</option>
                                        <option value="/Split-core_CT/Miniature-Split-core_CT.php">Miniature Split-core
                                            CT</option>
                                        <option value="/Split-core_CT/Busbar-Split-core_CT.php">Busbar Split-core CT
                                        </option>
                                        <option value="/Split-core_CT/Outdoor-Split-Core-transformer.php">Outdoor
                                            Split-Core CT</option>
                                    </select>
                                    <select name="SUB3" class="select1 select" style="display: none;"
                                        onchange="if(this.value) location.href=(this.value);">
                                        <option value="">------------------------------ Category
                                            ------------------------------</option>
                                        <option value="/Zero-Phase_CT/Zero-Phase_CT.php">Zero Phase CT</option>
                                    </select>
                                    <select name="SUB4" class="select1 select" style="display: none;"
                                        onchange="if(this.value) location.href=(this.value);">
                                        <option value="">------------------------------ Category
                                            ------------------------------</option>
                                        <option value="/Rogowski_Coils/Rogowski_Coils.php">Main</option>
                                        <option value="/Rogowski_Coils/Rigid_Rogowski_Coils.php">Rigid Rogowski Coils
                                        </option>
                                        <option value="/Rogowski_Coils/Flexible_Rogowski_Coils.php">Flexible Rogowski
                                            Coils</option>
                                        <option value="/Rogowski_Coils/MV_Flexible_Rogowski_Coils.php">MV Flexible
                                            Rogowski Coils</option>
                                        <option value="/Rogowski_Coils/Clamp-on_Rogowski_Coils.php">Clamp on Rogowski
                                            Coils</option>
                                    </select>
                                    <select name="SUB5" class="select1 select" style="display: none;"
                                        onchange="if(this.value) location.href=(this.value);">
                                        <option value="">------------------------------ Category
                                            ------------------------------</option>
                                        <option value="/ACB_CTs/ACB_CTs.php">ACB &amp; GIS Current Transformer</option>
                                    </select>
                                </p>
                            </fieldset>
                        </form>
                    </div>
                    <div class="select_box">

                        <form action="#" method="get" class="select_form">

                        </form>
                    </div>
                    <div class="sc_button" style="display: none;">
                        <button type="button" onclick="location.href='' ">Choose</button>
                    </div>
                </div>
                <div class="md_slt_box tab-content" style="display: none;">
                    <div class="md_slt_ctt bd_l_n cf">
                        <div class="md_slt_txt">
                            <a href="/aboutus">About us</a>
                        </div>
                        <a href="/aboutus" class="md_slt_img mdslt_01">
                            <img src="" alt="">
                        </a>
                    </div>
                    <div class="md_slt_ctt cf">
                        <div class="md_slt_txt">
                            <a href="/contacts">Contacts</a>
                        </div>
                        <a href="/contacts" class="md_slt_img mdslt_02">
                            <img src="" alt="">
                        </a>
                    </div>
                    <div class="md_slt_ctt cf">
                        <div class="md_slt_txt">
                            <a href="/inquiry">Inquiry</a>
                        </div>
                        <a href="/inquiry" class="md_slt_img mdslt_03">
                            <img src="" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="md_slt_768 tab-content cf">
            <div class="sc_tt_03 active" data-tab="tab-1">
                <p><strong>Model Selection</strong></p>
            </div>
            <div class="md_slt_ctt bd_l_n cf">
                <div class="md_slt_txt">
                    <a href="/aboutus">About us</a>
                </div>
                <a href="/aboutus" class="md_slt_img mdslt_01">
                    <img src="" alt="">
                </a>
            </div>
            <div class="md_slt_ctt cf">
                <div class="md_slt_txt">
                    <a href="/contacts">Contacts</a>
                </div>
                <a href="/contacts" class="md_slt_img mdslt_02">
                    <img src="" alt="">
                </a>
            </div>
            <div class="md_slt_ctt cf">
                <div class="md_slt_txt">
                    <a href="/inquiry">Inquiry</a>
                </div>
                <a href="/inquiry" class="md_slt_img mdslt_03">
                    <img src="" alt="">
                </a>
            </div>
        </div>
        <div class="all_box cf">
            <div class="contents_title">
                <h2>Solid CTs for Metering &amp; monitoring</h2>
                <span></span>
            </div>
            <ul class="contents_allbox ctt_scem cf">
                <li class="contents_box ml_n bd_l_n">
                    <a href="/Solid_CT/Revenue_Grade_Metering_CT.php" class="contents">
                        <div class="ctt_img">
                            <img src="/img/main_ctt_img_01.jpg" alt="ctt_img">
                        </div>
                        <div class="ctt_bx_txt">
                            <h3>Revenue Grade Metering CT</h3>
                            <p>0.1 and 0.2 Class CTs with excellent linearity and low current sensitivity.</p>
                        </div>
                    </a>
                </li>
                <li class="contents_box ml_n_480">
                    <a href="/Solid_CT/Protection&amp;Monitoring_CT.php" class="contents">
                        <div class="ctt_img">
                            <img src="/img/main_ctt_img_02.jpg" alt="ctt_img">
                        </div>
                        <div class="ctt_bx_txt">
                            <h3>Protection&amp;Monitoring CT</h3>
                            <p>Supreme accuracy for Monitoring &amp; Relay.</p>
                        </div>
                    </a>
                </li>
                <li class="contents_box ml_n_1024">
                    <a href="/Solid_CT/DC_Immune_CT.php" class="contents">
                        <div class="ctt_img">
                            <img src="/img/main_ctt_img_03.jpg" alt="ctt_img">
                        </div>
                        <div class="ctt_bx_txt">
                            <h3>DC Immune CT</h3>
                            <p>Metering of DC component and AC current .</p>
                        </div>
                    </a>
                </li>
                <li class="contents_box ml_n ml_y_1024 bd_l_n bd_l_y ml_n_480">
                    <a href="/Solid_CT/Voltage_Measurement_CT.php" class="contents">
                        <div class="ctt_img">
                            <img src="/img/main_ctt_img_04.jpg" alt="ctt_img">
                        </div>
                        <div class="ctt_bx_txt">
                            <h3>Voltage Measurement CT</h3>
                            <p>Best-in-Class accuracy with winding isolation.</p>
                        </div>
                    </a>
                </li>
                <li class="contents_box ml_n_1024">
                    <a href="/Solid_CT/Multi-Harmonics_Monitoring_CT.php" class="contents">
                        <div class="ctt_img">
                            <img src="/img/main_ctt_img_05.jpg" alt="ctt_img">
                        </div>
                        <div class="ctt_bx_txt">
                            <h3 class="cbt_h3">Multi-Harmonics/ High Frequency Monitoring CTs</h3>
                            <p>Accurate multiple harmonics and high frequency measurement.</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="all_box cf">
            <div class="contents_title">
                <h2>Split-core CT</h2>
                <span></span>
            </div>
            <ul class="contents_allbox cf">
                <li class="contents_box ml_n bd_l_n">
                    <a href="/Split-core_CT/Miniature-Split-core_CT.php" class="contents">
                        <div class="ctt_img">
                            <img src="/img/main_ctt_img_06.jpg" alt="ctt_img">
                        </div>
                        <div class="ctt_bx_txt">
                            <h3>Miniature Split-core CT</h3>
                        </div>
                    </a>
                </li>
                <li class="contents_box ml_n_480">
                    <a href="/Split-core_CT/Busbar-Split-core_CT.php" class="contents">
                        <div class="ctt_img">
                            <img src="/img/main_ctt_img_07.jpg" alt="ctt_img">
                        </div>
                        <div class="ctt_bx_txt">
                            <h3>Busbar Split-core CT</h3>
                        </div>
                    </a>
                </li>
                <li class="contents_box ml_n_1024">
                    <a href="/Split-core_CT/Outdoor-Split-Core-transformer.php" class="contents">
                        <div class="ctt_img">
                            <img src="/img/main_ctt_img_08.jpg" alt="ctt_img">
                        </div>
                        <div class="ctt_bx_txt">
                            <h3>Outdoor Split-Core<br>CT</h3>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="all_box cf">
            <div class="contents_title">
                <h2>Zero Phase CT<br>(ZCT)</h2>
                <span></span>
            </div>
            <ul class="contents_allbox cf">
                <li class="contents_box ml_n bd_l_n">
                    <a href="/Zero-Phase_CT/Zero-Phase_CT.php" class="contents">
                        <div class="ctt_img">
                            <img src="/img/main_ctt_img_13.jpg" alt="ctt_img">
                        </div>
                        <div class="ctt_bx_txt">
                            <h3>Zero Phase CT<br>(ZCT)</h3>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="all_box cf">
            <div class="contents_title">
                <h2>Rogowski Coils</h2>
                <span></span>
            </div>
            <ul class="contents_allbox cf">
                <li class="contents_box ml_n bd_l_n">
                    <a href="/Rogowski_Coils/Rigid_Rogowski_Coils.php" class="contents">
                        <div class="ctt_img">
                            <img src="/img/main_ctt_img_09.jpg" alt="ctt_img">
                        </div>
                        <div class="ctt_bx_txt">
                            <h3>Rigid Rogowski Coils</h3>
                        </div>
                    </a>
                </li>
                <li class="contents_box ml_n_480">
                    <a href="/Rogowski_Coils/Flexible_Rogowski_Coils.php" class="contents">
                        <div class="ctt_img">
                            <img src="/img/main_ctt_img_10.jpg" alt="ctt_img">
                        </div>
                        <div class="ctt_bx_txt">
                            <h3>Flexible Rogowski Coils</h3>
                        </div>
                    </a>
                </li>
                <li class="contents_box ml_n_1024">
                    <a href="/Rogowski_Coils/MV_Flexible_Rogowski_Coils.php" class="contents">
                        <div class="ctt_img">
                            <img src="/img/main_ctt_img_11.jpg" alt="ctt_img">
                        </div>
                        <div class="ctt_bx_txt">
                            <h3>MV Flexible Rogowski coils</h3>
                        </div>
                    </a>
                </li>
                <li class="contents_box ml_n ml_y_1024 bd_l_n bd_l_y ml_n_480">
                    <a href="/Rogowski_Coils/Clamp-on_Rogowski_Coils.php" class="contents">
                        <div class="ctt_img">
                            <img src="/img/main_ctt_img_12.jpg" alt="ctt_img">
                        </div>
                        <div class="ctt_bx_txt">
                            <h3>Clamp-on Rogowski Coils</h3>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div class="all_box cf">
            <div class="contents_title">
                <h2>ACB &amp; GIS Current Transformer</h2>
                <span></span>
            </div>
            <ul class="contents_allbox cf">
                <li class="contents_box ml_n bd_l_n">
                    <a href="/ACB_CTs/ACB_CTs.php" class="contents">
                        <div class="ctt_img">
                            <img src="/img/main_ctt_img_14.jpg" alt="ctt_img">
                        </div>
                        <div class="ctt_bx_txt">
                            <h3>ACB &amp; GIS Current Transformer</h3>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </container>
    <!-- //container -->
    <!-- footer -->
    <?php include("inc/footer.php") ?>
    <!-- //footer -->
    <?php include("inc/btn-up.php") ?>
</body>

</html>

<script type="text/javascript">
    function showSub(obj) {

        f = document.forms.select_machine;

        if (obj == 1) {

            f.SUB0.style.display = "none";
            f.SUB1.style.display = "";
            f.SUB2.style.display = "none";
            f.SUB3.style.display = "none";
            f.SUB4.style.display = "none";
            f.SUB5.style.display = "none";

        } else if (obj == 2) {

            f.SUB0.style.display = "none";
            f.SUB1.style.display = "none";
            f.SUB2.style.display = "";
            f.SUB3.style.display = "none";
            f.SUB4.style.display = "none";
            f.SUB5.style.display = "none";

        } else if (obj == 3) {

            f.SUB0.style.display = "none";
            f.SUB1.style.display = "none";
            f.SUB2.style.display = "none";
            f.SUB3.style.display = "";
            f.SUB4.style.display = "none";
            f.SUB5.style.display = "none";

        } else if (obj == 4) {

            f.SUB0.style.display = "none";
            f.SUB1.style.display = "none";
            f.SUB2.style.display = "none";
            f.SUB3.style.display = "none";
            f.SUB4.style.display = "";
            f.SUB5.style.display = "none";

        } else if (obj == 5) {

            f.SUB0.style.display = "none";
            f.SUB1.style.display = "none";
            f.SUB2.style.display = "none";
            f.SUB3.style.display = "none";
            f.SUB4.style.display = "none";
            f.SUB5.style.display = "";

        } else if (obj == 0) {

            f.SUB0.style.display = "";
            f.SUB1.style.display = "none";
            f.SUB2.style.display = "none";
            f.SUB3.style.display = "none";
            f.SUB4.style.display = "none";

        }
        return false
    }
</script>