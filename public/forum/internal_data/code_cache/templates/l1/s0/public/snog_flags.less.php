<?php
// FROM HASH: 3ec71408b7f9effa9fd652f239376a0d
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '#sprites {     
        .background(@image,@repeat: no-repeat,@background: transparent) {
             background-image: url("data/countryflags/flags/@{image}");
             background-color: @background;
             background-repeat: @repeat;
        }
       .position(@horizontal, @vertical) {
             background-position: @horizontal @vertical;
       } 
}

.userflag-m
{
	position: absolute;
	top: ~"calc(@{avatar-m} - 17px)";
	left: ~"calc(@{avatar-m} - 27px)";
	width: 25px;
	height: 15px;
	z-index: 2;
}

.userflag-s
{
	position: absolute;
	top: ~"calc(@{avatar-s} - 15px)";
	left: ~"calc(@{avatar-s} - 7px)";
	width: 25px;
	height: 15px;
	z-index: 2;
}

.userflag-name
{
	margin-left:auto;
	margin-right:auto;
	width: 25px;
	height: 15px;
}

.userflag-info
{
	margin: 2px auto 2px auto;
	width: 25px;
	height: 15px;
}

.userflag-view
{
	display: inline-block;
	position: relative;
	width: 25px;
	height: 15px;
}

.userflag-tool
{
	display: block;
	width: 25px;
	height: 15px;
}

.userflag-tooltip
{
	margin-left: ~"calc(@{avatar-s} /4)";
	margin-top: 5px;
	width: 27px;
	height: 18px;
}

.userflag-tooltip-m
{
	margin-left: ~"calc(@{xf-paddingMedium} * 2 + (@{avatar-m} /4))";
	margin-top: 5px;
	width: 27px;
	height: 18px;
}

.flags
{
	width: 25px;
	height: 15px;
	z-index: 2;
	
	#sprites > .background(\'flagsprite.png\');
		&.flag-A1 { #sprites > .position(-2px, -0px); }
		&.flag-A2 { #sprites > .position(-29px, -0px); }
		&.flag-AD { #sprites > .position(-56px, -0px); }
		&.flag-AE { #sprites > .position(-83px, -0px); }
		&.flag-AF { #sprites > .position(-110px, -0px); }
		&.flag-AG { #sprites > .position(-137px, -0px); }
		&.flag-AI { #sprites > .position(-164px, -0px); }
		&.flag-AL { #sprites > .position(-191px, -0px); }
		&.flag-AM { #sprites > .position(-218px, -0px); }
		&.flag-AO { #sprites > .position(-245px, -0px); }
		&.flag-AP { #sprites > .position(-272px, -0px); }
		&.flag-AQ { #sprites > .position(-299px, -0px); }
		&.flag-AR { #sprites > .position(-326px, -0px); }
		&.flag-AS { #sprites > .position(-353px, -0px); }
		&.flag-AT { #sprites > .position(-380px, -0px); }
		&.flag-AU { #sprites > .position(-2px, -17px); }
		&.flag-AW { #sprites > .position(-29px, -17px); }
		&.flag-AX { #sprites > .position(-56px, -17px); }
		&.flag-AZ { #sprites > .position(-83px, -17px); }
		&.flag-BA { #sprites > .position(-110px, -17px); }
		&.flag-BB { #sprites > .position(-137px, -17px); }
		&.flag-BD { #sprites > .position(-164px, -17px); }
		&.flag-BE { #sprites > .position(-191px, -17px); }
		&.flag-BF { #sprites > .position(-218px, -17px); }
		&.flag-BG { #sprites > .position(-245px, -17px); }
		&.flag-BH { #sprites > .position(-272px, -17px); }
		&.flag-BI { #sprites > .position(-299px, -17px); }
		&.flag-BJ { #sprites > .position(-326px, -17px); }
		&.flag-BL { #sprites > .position(-353px, -17px); }
		&.flag-BM { #sprites > .position(-380px, -17px); }
		&.flag-BN { #sprites > .position(-2px, -34px); }
		&.flag-BO { #sprites > .position(-29px, -34px); }
		&.flag-BQ { #sprites > .position(-56px, -34px); }
		&.flag-BR { #sprites > .position(-83px, -34px); }
		&.flag-BS { #sprites > .position(-110px, -34px); }
		&.flag-BT { #sprites > .position(-137px, -34px); }
		&.flag-BV { #sprites > .position(-164px, -34px); }
		&.flag-BW { #sprites > .position(-191px, -34px); }
		&.flag-BY { #sprites > .position(-218px, -34px); }
		&.flag-BZ { #sprites > .position(-245px, -34px); }
		&.flag-CA { #sprites > .position(-272px, -34px); }
		&.flag-CC { #sprites > .position(-299px, -34px); }
		&.flag-CD { #sprites > .position(-326px, -34px); }
		&.flag-CF { #sprites > .position(-353px, -34px); }
		&.flag-CG { #sprites > .position(-380px, -34px); }
		&.flag-CH { #sprites > .position(-2px, -51px); }
		&.flag-CI { #sprites > .position(-29px, -51px); }
		&.flag-CK { #sprites > .position(-56px, -51px); }
		&.flag-CL { #sprites > .position(-83px, -51px); }
		&.flag-CM { #sprites > .position(-110px, -51px); }
		&.flag-CN { #sprites > .position(-137px, -51px); }
		&.flag-CO { #sprites > .position(-164px, -51px); }
		&.flag-CR { #sprites > .position(-191px, -51px); }
		&.flag-CU { #sprites > .position(-218px, -51px); }
		&.flag-CV { #sprites > .position(-245px, -51px); }
		&.flag-CW { #sprites > .position(-272px, -51px); }
		&.flag-CX { #sprites > .position(-299px, -51px); }
		&.flag-CY { #sprites > .position(-326px, -51px); }
		&.flag-CZ { #sprites > .position(-353px, -51px); }
		&.flag-DE { #sprites > .position(-380px, -51px); }
		&.flag-DJ { #sprites > .position(-2px, -68px); }
		&.flag-DK { #sprites > .position(-29px, -68px); }
		&.flag-DM { #sprites > .position(-56px, -68px); }
		&.flag-DO { #sprites > .position(-83px, -68px); }
		&.flag-DZ { #sprites > .position(-110px, -68px); }
		&.flag-EC { #sprites > .position(-137px, -68px); }
		&.flag-EE { #sprites > .position(-164px, -68px); }
		&.flag-EG { #sprites > .position(-191px, -68px); }
		&.flag-EH { #sprites > .position(-218px, -68px); }
		&.flag-ER { #sprites > .position(-245px, -68px); }
		&.flag-ES { #sprites > .position(-272px, -68px); }
		&.flag-ET { #sprites > .position(-299px, -68px); }
		&.flag-EU { #sprites > .position(-326px, -68px); }
		&.flag-FI { #sprites > .position(-353px, -68px); }
		&.flag-FJ { #sprites > .position(-380px, -68px); }
		&.flag-FK { #sprites > .position(-2px, -85px); }
		&.flag-FM { #sprites > .position(-29px, -85px); }
		&.flag-FO { #sprites > .position(-56px, -85px); }
		&.flag-FR { #sprites > .position(-83px, -85px); }
		&.flag-GA { #sprites > .position(-110px, -85px); }
		&.flag-GB { #sprites > .position(-137px, -85px); }
		&.flag-GD { #sprites > .position(-164px, -85px); }
		&.flag-GE { #sprites > .position(-191px, -85px); }
		&.flag-GF { #sprites > .position(-218px, -85px); }
		&.flag-GG { #sprites > .position(-245px, -85px); }
		&.flag-GH { #sprites > .position(-272px, -85px); }
		&.flag-GI { #sprites > .position(-299px, -85px); }
		&.flag-GL { #sprites > .position(-326px, -85px); }
		&.flag-GM { #sprites > .position(-353px, -85px); }
		&.flag-GN { #sprites > .position(-380px, -85px); }
		&.flag-GP { #sprites > .position(-2px, -102px); }
		&.flag-GQ { #sprites > .position(-29px, -102px); }
		&.flag-GR { #sprites > .position(-56px, -102px); }
		&.flag-GS { #sprites > .position(-83px, -102px); }
		&.flag-GT { #sprites > .position(-110px, -102px); }
		&.flag-GU { #sprites > .position(-137px, -102px); }
		&.flag-GW { #sprites > .position(-164px, -102px); }
		&.flag-GY { #sprites > .position(-191px, -102px); }
		&.flag-HK { #sprites > .position(-218px, -102px); }
		&.flag-HM { #sprites > .position(-245px, -102px); }
		&.flag-HN { #sprites > .position(-272px, -102px); }
		&.flag-HR { #sprites > .position(-299px, -102px); }
		&.flag-HT { #sprites > .position(-326px, -102px); }
		&.flag-HU { #sprites > .position(-353px, -102px); }
		&.flag-ID { #sprites > .position(-380px, -102px); }
		&.flag-IE { #sprites > .position(-2px, -119px); }
		&.flag-IL { #sprites > .position(-29px, -119px); }
		&.flag-IM { #sprites > .position(-56px, -119px); }
		&.flag-IN { #sprites > .position(-83px, -119px); }
		&.flag-IO { #sprites > .position(-110px, -119px); }
		&.flag-IQ { #sprites > .position(-137px, -119px); }
		&.flag-IR { #sprites > .position(-164px, -119px); }
		&.flag-IS { #sprites > .position(-191px, -119px); }
		&.flag-IT { #sprites > .position(-218px, -119px); }
		&.flag-JE { #sprites > .position(-245px, -119px); }
		&.flag-JM { #sprites > .position(-272px, -119px); }
		&.flag-JO { #sprites > .position(-299px, -119px); }
		&.flag-JP { #sprites > .position(-326px, -119px); }
		&.flag-KE { #sprites > .position(-353px, -119px); }
		&.flag-KG { #sprites > .position(-380px, -119px); }
		&.flag-KH { #sprites > .position(-2px, -136px); }
		&.flag-KI { #sprites > .position(-29px, -136px); }
		&.flag-KM { #sprites > .position(-56px, -136px); }
		&.flag-KN { #sprites > .position(-83px, -136px); }
		&.flag-KP { #sprites > .position(-110px, -136px); }
		&.flag-KR { #sprites > .position(-137px, -136px); }
		&.flag-KW { #sprites > .position(-164px, -136px); }
		&.flag-KY { #sprites > .position(-191px, -136px); }
		&.flag-KZ { #sprites > .position(-218px, -136px); }
		&.flag-LA { #sprites > .position(-245px, -136px); }
		&.flag-LB { #sprites > .position(-272px, -136px); }
		&.flag-LC { #sprites > .position(-299px, -136px); }
		&.flag-LI { #sprites > .position(-326px, -136px); }
		&.flag-LK { #sprites > .position(-353px, -136px); }
		&.flag-LO { #sprites > .position(-380px, -136px); }
		&.flag-LR { #sprites > .position(-2px, -153px); }
		&.flag-LS { #sprites > .position(-29px, -153px); }
		&.flag-LT { #sprites > .position(-56px, -153px); }
		&.flag-LU { #sprites > .position(-83px, -153px); }
		&.flag-LV { #sprites > .position(-110px, -153px); }
		&.flag-LY { #sprites > .position(-137px, -153px); }
		&.flag-MA { #sprites > .position(-164px, -153px); }
		&.flag-MC { #sprites > .position(-191px, -153px); }
		&.flag-MD { #sprites > .position(-218px, -153px); }
		&.flag-ME { #sprites > .position(-245px, -153px); }
		&.flag-MF { #sprites > .position(-272px, -153px); }
		&.flag-MG { #sprites > .position(-299px, -153px); }
		&.flag-MH { #sprites > .position(-326px, -153px); }
		&.flag-MK { #sprites > .position(-353px, -153px); }
		&.flag-ML { #sprites > .position(-380px, -153px); }
		&.flag-MM { #sprites > .position(-2px, -170px); }
		&.flag-MN { #sprites > .position(-29px, -170px); }
		&.flag-MO { #sprites > .position(-56px, -170px); }
		&.flag-MP { #sprites > .position(-83px, -170px); }
		&.flag-MQ { #sprites > .position(-110px, -170px); }
		&.flag-MR { #sprites > .position(-137px, -170px); }
		&.flag-MS { #sprites > .position(-164px, -170px); }
		&.flag-MT { #sprites > .position(-191px, -170px); }
		&.flag-MU { #sprites > .position(-218px, -170px); }
		&.flag-MV { #sprites > .position(-245px, -170px); }
		&.flag-MW { #sprites > .position(-272px, -170px); }
		&.flag-MX { #sprites > .position(-299px, -170px); }
		&.flag-MY { #sprites > .position(-326px, -170px); }
		&.flag-MZ { #sprites > .position(-353px, -170px); }
		&.flag-NA { #sprites > .position(-380px, -170px); }
		&.flag-NC { #sprites > .position(-2px, -187px); }
		&.flag-NE { #sprites > .position(-29px, -187px); }
		&.flag-NF { #sprites > .position(-56px, -187px); }
		&.flag-NG { #sprites > .position(-83px, -187px); }
		&.flag-NI { #sprites > .position(-110px, -187px); }
		&.flag-NL { #sprites > .position(-137px, -187px); }
		&.flag-NO { #sprites > .position(-164px, -187px); }
		&.flag-NP { #sprites > .position(-191px, -187px); }
		&.flag-NR { #sprites > .position(-218px, -187px); }
		&.flag-NU { #sprites > .position(-245px, -187px); }
		&.flag-NZ { #sprites > .position(-272px, -187px); }
		&.flag-OM { #sprites > .position(-299px, -187px); }
		&.flag-PA { #sprites > .position(-326px, -187px); }
		&.flag-PE { #sprites > .position(-353px, -187px); }
		&.flag-PF { #sprites > .position(-380px, -187px); }
		&.flag-PG { #sprites > .position(-2px, -204px); }
		&.flag-PH { #sprites > .position(-29px, -204px); }
		&.flag-PK { #sprites > .position(-56px, -204px); }
		&.flag-PL { #sprites > .position(-83px, -204px); }
		&.flag-PM { #sprites > .position(-110px, -204px); }
		&.flag-PN { #sprites > .position(-137px, -204px); }
		&.flag-PR { #sprites > .position(-164px, -204px); }
		&.flag-PS { #sprites > .position(-191px, -204px); }
		&.flag-PT { #sprites > .position(-218px, -204px); }
		&.flag-PW { #sprites > .position(-245px, -204px); }
		&.flag-PY { #sprites > .position(-272px, -204px); }
		&.flag-QA { #sprites > .position(-299px, -204px); }
		&.flag-RE { #sprites > .position(-326px, -204px); }
		&.flag-RO { #sprites > .position(-353px, -204px); }
		&.flag-RS { #sprites > .position(-380px, -204px); }
		&.flag-RU { #sprites > .position(-2px, -221px); }
		&.flag-RW { #sprites > .position(-29px, -221px); }
		&.flag-SA { #sprites > .position(-56px, -221px); }
		&.flag-SB { #sprites > .position(-83px, -221px); }
		&.flag-SC { #sprites > .position(-110px, -221px); }
		&.flag-SD { #sprites > .position(-137px, -221px); }
		&.flag-SE { #sprites > .position(-164px, -221px); }
		&.flag-SG { #sprites > .position(-191px, -221px); }
		&.flag-SH { #sprites > .position(-218px, -221px); }
		&.flag-SI { #sprites > .position(-245px, -221px); }
		&.flag-SJ { #sprites > .position(-272px, -221px); }
		&.flag-SK { #sprites > .position(-299px, -221px); }
		&.flag-SL { #sprites > .position(-326px, -221px); }
		&.flag-SM { #sprites > .position(-353px, -221px); }
		&.flag-SN { #sprites > .position(-380px, -221px); }
		&.flag-SO { #sprites > .position(-2px, -238px); }
		&.flag-SR { #sprites > .position(-29px, -238px); }
		&.flag-SS { #sprites > .position(-56px, -238px); }
		&.flag-ST { #sprites > .position(-83px, -238px); }
		&.flag-SV { #sprites > .position(-110px, -238px); }
		&.flag-SX { #sprites > .position(-137px, -238px); }
		&.flag-SY { #sprites > .position(-164px, -238px); }
		&.flag-SZ { #sprites > .position(-191px, -238px); }
		&.flag-TC { #sprites > .position(-218px, -238px); }
		&.flag-TD { #sprites > .position(-245px, -238px); }
		&.flag-TF { #sprites > .position(-272px, -238px); }
		&.flag-TG { #sprites > .position(-299px, -238px); }
		&.flag-TH { #sprites > .position(-326px, -238px); }
		&.flag-TJ { #sprites > .position(-353px, -238px); }
		&.flag-TK { #sprites > .position(-380px, -238px); }
		&.flag-TL { #sprites > .position(-2px, -255px); }
		&.flag-TM { #sprites > .position(-29px, -255px); }
		&.flag-TN { #sprites > .position(-56px, -255px); }
		&.flag-TO { #sprites > .position(-83px, -255px); }
		&.flag-TR { #sprites > .position(-110px, -255px); }
		&.flag-TT { #sprites > .position(-137px, -255px); }
		&.flag-TV { #sprites > .position(-164px, -255px); }
		&.flag-TW { #sprites > .position(-191px, -255px); }
		&.flag-TZ { #sprites > .position(-218px, -255px); }
		&.flag-UA { #sprites > .position(-245px, -255px); }
		&.flag-UG { #sprites > .position(-272px, -255px); }
		&.flag-UM { #sprites > .position(-299px, -255px); }
		&.flag-US { #sprites > .position(-326px, -255px); }
		&.flag-UY { #sprites > .position(-353px, -255px); }
		&.flag-UZ { #sprites > .position(-380px, -255px); }
		&.flag-VA { #sprites > .position(-2px, -272px); }
		&.flag-VC { #sprites > .position(-29px, -272px); }
		&.flag-VE { #sprites > .position(-56px, -272px); }
		&.flag-VG { #sprites > .position(-83px, -272px); }
		&.flag-VI { #sprites > .position(-110px, -272px); }
		&.flag-VN { #sprites > .position(-137px, -272px); }
		&.flag-VU { #sprites > .position(-164px, -272px); }
		&.flag-WF { #sprites > .position(-191px, -272px); }
		&.flag-WS { #sprites > .position(-218px, -272px); }
		&.flag-YE { #sprites > .position(-245px, -272px); }
		&.flag-YT { #sprites > .position(-272px, -272px); }
		&.flag-ZA { #sprites > .position(-299px,-272px); }
		&.flag-ZM { #sprites > .position(-326px, -272px); }
		&.flag-ZW { #sprites > .position(-353px, -272px); }
		&.flag-ZZ { #sprites > .position(-380px, -272px); }
}

.flags .data-original-title
{
   	position: absolute;
   	top: 20px;
   	white-space: nowrap;
	.xf-tooltip();
}

@media (max-width: @xf-responsiveMedium)
{
	.userflag-m
	{
		position: absolute;
		top: ~"calc(@{avatar-s} - 8px)";
		left: ~"calc(@{avatar-s} - 18px)";
		width: 25px;
		height: 15px;
		z-index: 2;
	}
	
	.userflag-s
	{
		position: absolute;
		top: ~"calc(@{avatar-s} - 8px)";
		left: ~"calc(@{avatar-s} - 18px)";
		width: 25px;
		height: 15px;
		z-index: 2;
	}
	
	.userflag-name
	{
		position: absolute;
		top: ~"calc(@{avatar-s} + 2px)";
		left: ~"calc(@{avatar-s} - 8px)";
		width: 25px;
		height: 15px;
		z-index: 2;
	}
}

@media (max-width: @xf-messageSingleColumnWidth)
{
	.userflag-m
	{
		position: absolute;
		top: ~"calc(@{avatar-s} - 12px)";
		left: ~"calc(@{avatar-s} - 48px)";
		width: 25px;
		height: 15px;
		z-index: 2;
	}
	
	.userflag-s
	{
		position: absolute;
		top: ~"calc(@{avatar-s} - 12px)";
		left: ~"calc(@{avatar-s} - 48px)";
		width: 25px;
		height: 15px;
		z-index: 2;
	}
}';
	return $__finalCompiled;
});