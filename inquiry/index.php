<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include("../inc/head.php");?>
    <link rel="stylesheet" type="text/css" href="../css/Solid_CT/Revenue_Grade_Metering_CT.css">


<style type="text/css">
.content_allbox .inquiry-wrap{
	position:relative;
	top:0px;
	/*margin-left:380px;*/
	color:#00304A;
	font-size:16px;
	text-align:left;
	width:620px;
	padding:50px 0 20px 0;
	transition:all .3s ease-out;
    margin: 0 auto;
}

.content_allbox .inquiry-wrap .title{
	font-size:18px;
	font-weight:bold;
	border-bottom:1px solid #605E5E;
	padding-bottom:5px;
	display:block;
}

.content_allbox .inquiry-wrap .select{
	width:100%;
	margin-top:15px;
}

.content_allbox .inquiry-wrap p{
	font-size:14px;
	line-height:18px;
}
.content_allbox .inquiry-wrap .radio{
	font-size:15px;
}
.content_allbox .inquiry-wrap .input{
	margin-top:15px;
}
.content_allbox .inquiry-wrap label{
	font-weight:400;
}
.content_allbox .inquiry-wrap .inputbox{
	color:#2F2E2E;
	background-color:#fff;
	width:100%;
	height:34px;
	border:1px solid #cccccc;
	border-radius:5px;
	padding:0 10px;
}
.content_allbox .inquiry-wrap .messagebox{
	color:#2F2E2E;
	background-color:#fff;
	width:100%;
	border:1px solid #cccccc;
	border-radius:5px;
		padding:0 10px;
}
.content_allbox .inquiry-wrap .btn{
	width:100%;
	height:50px;
	border-radius:5px;
	background-color:#00304a;	
	color:#fff;
	font-size:18px;
	text-align:top;
}
</style>

</head>

<body>
    <!--<h1>0</h1>-->
    <!-- header -->
    <?php include("../inc/header.php");
	$str_01 = explode( $_SERVER[HTTP_HOST]."/" , $_SERVER["HTTP_REFERER"]);
	$str_02 = explode( "/", $str_01[1]);
	$str_03 = explode( ".", $str_02[1]);
	?>
    <!-- //header -->
    <!-- container -->
    <container id="container" class="depth_03 rgm_ct">

<div class="content_allbox">
				<div class="inquiry-wrap">
					<span class="title">Inquiry</span>
					<div class="row">
					<div class="col-md-12">  
						<form id="myform" method="post" action="mail.php">  
						
						<div class="select">
							<select >
								<option <?=($str_03[0] == "Revenue_Grade_Metering_CT")?"selected":""?>>Revenue Grade Metering CT</option>
								<option <?=($str_03[0] == "Protection&Monitoring_CT")?"selected":""?>>Protection&Monitoring CT</option>
								<option <?=($str_03[0] == "DC_Immune_CT")?"selected":""?>>DC Immune CT</option>
								<option <?=($str_03[0] == "Voltage_Measurement_CT")?"selected":""?>>Voltage Measurement CT </option>
								<option <?=($str_03[0] == "Multi-Harmonics_Monitoring_CT")?"selected":""?>>Multi-Harmonics Monitoring CT </option>
								<option <?=($str_03[0] == "Miniature-Split-core_CT")?"selected":""?>>Miniature-Split-core CT</option>
								<option <?=($str_03[0] == "Busbar-Split-core_CT")?"selected":""?>>Busbar-Split-core CT</option>
								<option <?=($str_03[0] == "Outdoor-Split-Core-transformer")?"selected":""?>>Outdoor-Split-Core-transformer</option>
								<option <?=($str_03[0] == "Zero-Phase_CT")?"selected":""?>>Zero-Phase CT</option>
								<option <?=($str_03[0] == "Rogowski_Coils")?"selected":""?>>Rogowski Coils</option>
								<option <?=($str_03[0] == "Rigid_Rogowski_Coils")?"selected":""?>>Rigid Rogowski Coils</option>
								<option <?=($str_03[0] == "Flexible_Rogowski_Coils")?"selected":""?>>Flexible Rogowski Coils</option>
								<option <?=($str_03[0] == "MV_Flexible_Rogowski_Coils")?"selected":""?>>MV Flexible Rogowski Coils</option>
								<option <?=($str_03[0] == "Clamp-on_Rogowski_Coils")?"selected":""?>>Clamp-on Rogowski Coils</option>
							</select>
						</div>
						<div class="input">
							<label>Company</label>
							<input type="text" class="inputbox" name="company" required="">
						</div>
						<div class="input">
							<label>Department</label>
							<input type="text" class="inputbox" name="department">
						</div>		
						<div class="input">
							<label>Name</label>
							<input type="text" class="inputbox" name="name" required="">
						</div>		
						<div class="input">
							<label>Email</label>
							<input type="email" class="inputbox" name="email" id="email" required="">
						</div>	
						<div class="input">
							<label>Phone</label>
							<input type="number" class="inputbox" name="phone" required="">
						</div>			
						<div class="input">
							<label>Website</label>
							<input type="text" class="inputbox" name="site" placeholder="http://">
						</div>		
						<div class="input">
							<label>Message</label>
							<textarea class="messagebox" name="message" rows="8" required=""></textarea>
						</div>	
						<div class="input">
							<input type="submit" class="btn" value="Inquiry">
						</div>
						</form>
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
