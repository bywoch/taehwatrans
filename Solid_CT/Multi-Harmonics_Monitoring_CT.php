<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include("../inc/head.php") ?>
    <link rel="stylesheet" type="text/css" href="../css/Solid_CT/Multi-Harmonics_Monitoring_CT.css">
</head>

<body>
    <!--<h1>0</h1>-->
    <!-- header -->
    <?php include("../inc/header.php") ?>
    <!-- //header -->
    <!-- container -->
    <container id="container" class="depth_03 mhm_ct">
        <h1 class="blind">container Area</h1>
        <div class="spl_search_wrap">
            <div class="spl_search_box tab-content">
                <div class="spl_select_box first-child cf">
                    <a class="icon_home" href="/index.php">
                        <img src="/img/icon-home.png" alt="홈 버튼">
                    </a>
                    <form action="#" method="get" class="spl_select_form ml_550_n">
                        <fieldset>
                            <legend class="blind">제품군</legend>
                            <p>
                                <select name="select" id="select"
                                    style="width: 270px; height: 44px; float: left; color: #666; padding: 7px;"
                                    title="선택해 주세요." onchange="if(this.value) location.href=(this.value);">
                                    <option value="/Solid_CT/Solid_CT.php" selected="select">Solid CTs for Metering
                                        &amp; monitoring</option>
                                    <option value="/Split-core_CT/Split-core_CT.php">Split-core CT</option>
                                    <option value="/Zero-Phase_CT/Zero-Phase_CT.php">Zero Phase CT</option>
                                    <option value="/Rogowski_Coils/Rogowski_Coils.php">Rogowski Coils</option>
                                    <option value="/ACB_CTs/ACB_CTs.php">ACB &amp; GIS Current Transformer</option>
                                </select>
                            </p>
                        </fieldset>
                    </form>
                    <form action="#" method="get" class="spl_select_form">
                        <fieldset>
                            <legend class="blind">카테고리</legend>
                            <p>
                                <select name="select" id="select"
                                    style="width: 270px; height: 44px; float: left; color: #666; padding: 7px;"
                                    title="선택해 주세요." onchange="if(this.value) location.href=(this.value);">
                                    <option value="/Solid_CT/Solid_CT.php" selected="select">Main</option>
                                    <option value="/Solid_CT/Revenue_Grade_Metering_CT.php">Revenue Grade Metering CT
                                    </option>
                                    <option value="/Solid_CT/Protection&Monitoring_CT.php">Protection&amp;Monitoring CT
                                    </option>
                                    <option value="/Solid_CT/DC_Immune_CT.php">DC Immune CT</option>
                                    <option value="/Solid_CT/Voltage_Measurement_CT.php">Voltage Measurement CT</option>
                                    <option value="/Solid_CT/Multi-Harmonics_Monitoring_CT.php" selected="select">
                                        Multi-Harmonics Monitoring CT</option>
                                    <option value="/Solid_CT/Multi-Harmonics_Monitoring_CT.php">High Frequency
                                        Monitoring CT</option>
                                </select>
                            </p>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="prdt_dscrt">
            <div class="dscrt_txt_wrap">
                <div class="dscrt_txt_box">
                    <h2>Multi-Harmonics <br>/ High Frequency Monitoring CTs</h2>
                    <p></p>
                    <a href="/inquiry">Inquiry</a>
                </div>
            </div>
        </div>
        <div class="content_allbox cf">
            <div class="content_box_01">
                <div id="scroll1" class="dep03_introduce_txt">
                    <p>The purpose is to measure multi-harmonics from fundamental frequency. The harmonics is the
                        multiple of fundamental and the measurement of the harmonics means reading the total current
                        even derived from varieties of distortion. Taehwatrans CTs cover up to 130th harmonics in the
                        customized models. High frequency monitoring CTs are used in the applications, including Arc
                        plasma, inverter and supersonic welding machine, IGBT output sensing, which require to read in
                        the frequency bandwidth of from 20 kHz to 100 kHz and in high current amplitude with minimal
                        loss. Another benefit of Taehwatrans multi-harmonics / high frequency monitoring CTs is compact
                        size to be PCB design friendly.</p>
                </div>
                <div id="scroll2" class="ftrs_box cf">
                    <div class="ft_imgbox">
                        <img src="../img/mhm_ct_features_01.jpg"
                            alt="Multi-Harmonics and High Frequency Monitoring CTs Features Image">
                    </div>
                    <div class="ft_txtbox">
                        <p><strong>Application</strong><br><br>
                            - High-end electricity meters to read the whole energy consumption including harmonics<br>
                            - Prestige electricity energy meters<br>
                            - Arc plasma power supply<br>
                            - Inverter &amp; supersonic welding machines<br>
                            - IGBT Control<br><br><br>
                            <strong>Features</strong><br><br>
                            - Compliant to IEC 61869-2 <br>
                            - Accurate measurement and control up to 100kHz<br>
                            - Compact and minimal phase shift<br>
                            - Excellent accuracy &amp; minimal loss<br>
                            - UL Recognized<br>
                            - RoHS compliant<br><br><br>
                        </p>
                    </div>
                </div>
                <div id="scroll3" class="od_spl_title">
                    <h2>Electrical Property &amp; Dimension</h2>
                    <span></span>
                </div>
                <div id="spcfct_wrap" class="spcfct_wrap">
                    <div class="spcfct_box">
                        <div class="tabs">
                            <button class="tab_btn tab_btn_left"></button>
                            <button class="tab_btn tab_btn_right"></button>
                            <div class="tabs-content">
                                <p style="margin: 10px 0;"></p>
                                <div class="tc_txtbox cf" style="width: 100%;">
                                    <p style="float: left; width:50%; text-align: left;">Multi-Harmonics CTs</p>
                                    <p style="float: left; width:50%; text-align: right; padding-right: 6px;">F : 50Hz
                                    </p>
                                </div>
                                <div tab-id="1" class="tab active">
                                    <table>
                                        <caption>Specification Spec</caption>
                                        <thead></thead>
                                        <tbody>
                                            <tr>
                                                <th rowspan="2" class="table_head">Model NO</th>
                                                <th rowspan="2" class="table_head">Current Ratio</th>
                                                <th colspan="2" class="table_head">Amplitude Error(%)</th>
                                                <th colspan="2" class="table_head">Phase Shift (min)</th>
                                                <th class="table_head">DCR(Ω)</th>
                                                <th rowspan="2" class="table_head">Imax</th>
                                                <th colspan="4" class="table_head">Dimensions(mm)</th>
                                            </tr>
                                            <tr>
                                                <td class="table_head">0.25A</td>
                                                <td class="table_head">5A</td>
                                                <td class="table_head">0.25A</td>
                                                <td class="table_head">5A</td>
                                                <td class="table_head">(±6%)</td>
                                                <td class="table_head">Window</td>
                                                <td class="table_head">Width</td>
                                                <td class="table_head">Height</td>
                                                <td class="table_head">Thickness</td>
                                            </tr>
                                            <tr>
                                                <td class="c_234c63">TD35V/L</td>
                                                <td>5A / 2mA</td>
                                                <td>-0.03±0.05</td>
                                                <td>-0.03±0.03</td>
                                                <td>420'±30'</td>
                                                <td>417'±30'</td>
                                                <td>107</td>
                                                <td>72A</td>
                                                <td>6.8</td>
                                                <td>23.5</td>
                                                <td>25.0</td>
                                                <td>11.0</td>
                                            </tr>
                                            <tr>
                                                <td class="c_234c63">TD61L</td>
                                                <td>5A / 2mA</td>
                                                <td>-0.03±0.05</td>
                                                <td>-0.03±0.03</td>
                                                <td>250'±20'</td>
                                                <td>250'±20'</td>
                                                <td>61</td>
                                                <td>130A</td>
                                                <td>8.0</td>
                                                <td>31.5</td>
                                                <td>30.5</td>
                                                <td>14.0</td>
                                            </tr>
                                            <tr>
                                                <td class="c_234c63">TD120V/L</td>
                                                <td>5A / 2mA</td>
                                                <td>-0.25±0.25</td>
                                                <td>-0.25±0.25</td>
                                                <td>200'±25'</td>
                                                <td>200'±25'</td>
                                                <td>51</td>
                                                <td>180A</td>
                                                <td>12.9</td>
                                                <td>41.3</td>
                                                <td>37.5</td>
                                                <td>14.0</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>* V : PCB Mountable<br>* L : Lead Wire</p>
                                </div>
                            </div>
                        </div>
                        <link rel="stylesheet" type="text/css" href="../css/jquery.scrolling-tabs.css">
                        <script type="text/javascript" src="../js/jquery.scrolling-tabs.js"></script>
                    </div>
                </div>
                <div id="scroll4" class="od_spl_title"></div>
                <div id="spcfct_wrap" class="spcfct_wrap">
                    <div class="spcfct_box">
                        <div class="tabs">
                            <div class="tabs-content">
                                <p style="margin: 10px 0;">High Frequency Monitoring CTs</p>
                                <div tab-id="2" class="tab">
                                    <table>
                                        <caption>Specification Spec</caption>
                                        <thead></thead>
                                        <tbody>
                                            <tr>
                                                <th rowspan="2" class="table_head">Model NO</th>
                                                <th rowspan="2" class="table_head">Current Ratio</th>
                                                <th class="table_head">DCR(Ω)</th>
                                                <th rowspan="2" class="table_head">Rated Current</th>
                                                <th rowspan="2" class="table_head">Imax</th>
                                                <th colspan="2" class="table_head">Phase Shift @ 1V</th>
                                                <th colspan="2" class="table_head">Ratio Error @ 1V </th>
                                                <th rowspan="2" class="table_head">Self Resonant Frequency</th>
                                            </tr>
                                            <tr>
                                                <td class="table_head">(±6%)</td>
                                                <td class="table_head">10kHz</td>
                                                <td class="table_head">100kHz</td>
                                                <td class="table_head">10kHz</td>
                                                <td class="table_head">100kHz</td>
                                            </tr>
                                            <tr>
                                                <td class="c_234c63">TF68V/L</td>
                                                <td>100:1</td>
                                                <td>1.1</td>
                                                <td>5A</td>
                                                <td>5A</td>
                                                <td>1.5±1.5'</td>
                                                <td>0.5±0.5'</td>
                                                <td>-0.3±0.7%</td>
                                                <td>-0.3±0.7%</td>
                                                <td>190kHz</td>
                                            </tr>
                                            <tr>
                                                <td class="c_234c63">TF77V/L</td>
                                                <td>300:1</td>
                                                <td>2.95</td>
                                                <td>50A</td>
                                                <td>55A</td>
                                                <td>5±3'</td>
                                                <td>0.5±0.5'</td>
                                                <td>-0.3±0.7%</td>
                                                <td>-0.3±0.7%</td>
                                                <td>110kHz</td>
                                            </tr>
                                            <tr>
                                                <td class="c_234c63">TF120V/L</td>
                                                <td>300:1</td>
                                                <td>2.98</td>
                                                <td>50A</td>
                                                <td>70A</td>
                                                <td>4±3'</td>
                                                <td>0.5±0.5'</td>
                                                <td>-0.3±0.7%</td>
                                                <td>-0.3±0.7%</td>
                                                <td>120kHz</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>* V : PCB Mountable<br>* L : Lead Wire</p>
                                </div>
                            </div>
                        </div>
                        <link rel="stylesheet" type="text/css" href="../css/jquery.scrolling-tabs.css">
                        <script type="text/javascript" src="../js/jquery.scrolling-tabs.js"></script>
                    </div>
                </div>
                <br>
                <br>
                <br>
            </div>
            <div class="content_box_02">
                <p>Multi-Harmonics <br>/ High Frequency Monitoring CTs</p>
                <ul>
                    <li><a href="#scroll1">Products</a></li>
                    <li><a href="#scroll2">Features</a></li>
                    <li><a href="#scroll3">Multi-Harmonics CTs</a></li>
                    <li><a href="#scroll3">High Frequency Monitoring CTs</a></li>
                    <li><a href="/inquiry">Inquiry</a></li>
                </ul>
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