<?php
// FROM HASH: d65a0f2dcd54694049c04b655e355ceb
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	if ($__templater->fn('property', array('FTSlider_hide_mobile', ), false) == 'hide') {
		$__finalCompiled .= '
@media (max-width: @xf-responsiveMedium) {	
.FTSlider_Body {
    display: none !important;
  }
}
';
	}
	$__finalCompiled .= '

.FTSlider_Body .everslider {
    min-height: auto;
}

.FTSlider_Body { 
    margin-bottom:10px;
	display: block;
}
/*
.FTSlider_Header {
    background: @xf-FTSlider_header;
    color: @xf-FTSlider_content_color; 
}
*/

.FTSlider_BlockBody {
    background: @xf-FTSlider_bg;
}
/*
.block-body {
	padding: 5px;
}
*/

';
	if ($__templater->fn('property', array('FTSlider_avatar', ), false) == 'cycle') {
		$__finalCompiled .= '
.FTSlider_Avatar {
	border-radius: 50%;
	margin-top: -5px;
	margin-right: 5px;
}
';
	}
	$__finalCompiled .= '

';
	if ($__templater->fn('property', array('FTSlider_avatar', ), false) == 'square') {
		$__finalCompiled .= '
.FTSlider_Avatar {
	border-radius: 5%;
	margin-top: -5px;
	margin-right: 5px;
}
';
	}
	$__finalCompiled .= '

.fullwidth-title > span > a { 
	color: @xf-FTSlider_excerpts_color!important; 
	text-decoration: none; 
}

.FTSlider_Date { float: right;}
	
.everslider {
	position: relative;
	width: 100%;
	overflow: hidden;

.es-slides {
	position: relative;
	width: 100000px;
	margin: 0;
	padding: 0;
	list-style: none;
	-webkit-transform: translate3d(0,0,0);
  
> img {
	width: 100%;
	height: auto;
	max-width: none;
}

> li {
	position: relative;
	float: left;
	padding: 0!important;
	border: 0!important;
	width: 500px;
	height: 300px;
	margin: 0 10px 0 0;
	cursor: default; 
	cursor: -webkit-grab; 
	cursor: -moz-grab;
	-webkit-transform: translate3d(0,0,0);
	 }
   }	
}

.es-swipe-grab .es-slides {
> li {
	cursor: default; 
	cursor: -webkit-grabbing; 
	cursor: -moz-grabbing; 
   }
}

.everslider.es-slides-ready {
	background: none;
}

.es-slides { visibility: hidden; }

.es-slides-ready .es-slides { visibility: visible; }
	
.es-navigation {
	
	> a {
	position: absolute;
	top: 40%;
	padding: 7px;
	background-color: #eeeeee;
}
 
.fullwidth-slider .es-ticker {
    bottom: auto;
    top: 0;
    margin-right: 34px;
}	

.es-ticker {
    position: absolute;
    bottom: 0;
    right: 0;
}
		
.es-prev { 
	left: 0;
	border-top-right-radius: 6px;
	border-bottom-right-radius: 6px;
}
	
.es-next { 
	right: 0; 
	border-top-left-radius: 6px;
	border-bottom-left-radius: 6px;
} 
       
.es-first,
.es-last {
	opacity: 0.5;
	filter: alpha(opacity=50);
	cursor: default;
		}
}

.es-pagination {
    position: absolute;
    left: 50%;
    bottom: 10px;
    
> a {
	position: relative;
	right: 50%;
	float: left;
	width: 13px;
	height: 13px;
	overflow: hidden;
	margin: 0 5px 0;
}
}
/* es-pagination */

.image-slider .es-slides {
 > li { position: relative;}
}

.image-caption {
	position: absolute;
	top: 8%;
	right: 5%;
	height: 35px;
	overflow: hidden;

.fullwidth-title > span > a { color: #fff; }	
	
> span {
	display: block;
	line-height: 15px;
	padding: 10px;
	color: #ddd;
	text-transform: uppercase;
	font-weight: bold;
	background: #222;
	opacity: 0;
	-webkit-transition: -webkit-transform 0.3s, opacity 0.3s;
	-moz-transition: -moz-transform 0.3s, opacity 0.3s;
	-o-transition: -o-transform 0.3s, opacity 0.3s;
	transition: transform 0.3s, opacity 0.3s;	
        }
}

.image-slider {
.es-before-slide .image-caption span {
	opacity: 0;
	-webkit-transform: translate(0, -35px);
	-moz-transform: translate(0, -35px);
	-o-transform: translate(0, -35px);
	transform: translate(0, -35px);
	-webkit-transition-duration: 0;
	-moz-transition-duration: 0;
	-o-transition-duration: 0;
    transition-duration: 0;
}

.image-slider .es-after-slide .image-caption span {
	opacity: 1;
	-webkit-transform: translate(0, 0);
	-moz-transform: translate(0, 0);
	-o-transform: translate(0, 0);
	transform: translate(0, 0);
			}
}
/* image-slider  */

.featured-slider {
	padding-top: 20px;
.es-pagination {
	left: 0;
	top: 0;
	bottom: auto;
	   
> a {
	right: auto;
	margin: 0 10px 0 0;
	}
}

.es-slides > li {
	width: 200px;
	margin-right: 5px;
}

.featured-pic {
	position: relative;
	background: #fff;
        
> img  {
	opacity: 1;
	-webkit-transition: opacity .3s;
	-moz-transition: opacity .3s;
	-o-transition: opacity .3s;
	transition: opacity .3s;
}
		 
&:hover img {
   opacity: 0.7;
}

> a {
    position: absolute;
    visibility: hidden;
    top: 50%;
    left: 0;
    right: 0;
	margin: 0 auto;
	width: 65px;
	padding: 5px 0;
	margin-top: -15px;
	text-align: center;
	text-decoration: none;
	font-style: italic;
	line-height: 20px;
	color: #fff;
	background: #ff5452;
	z-index: 1;
			 
&hover {visibility: visible;}
    }
}}
/* featured-pic */
	
/* featured-slider */

.featured-title {
	padding: 8px 15px 8px;
	color: #666;
	background: #eee;
	border-top: 2px solid #ccc;
	border-bottom: 2px solid #ddd;
     

> a {
	display: block;
	text-decoration: none;
	font-style: normal;
	font-weight: bold;
	color: #444;
	font-size: 13px;
	line-height: 15px;
	margin-bottom: 3px;
	text-shadow: 0 1px 0 #fff;
		
> a:hover {	color: #666;}
}

> span {
	font-size: 11px;
	font-style: italic;
	line-height: 15px;
	color: #666;
		}
}
/* featured-title */

.fullwidth-slider {
.es-slides > li {
	width: 300px;	
	height: 187px;
	overflow: hidden;
	border-radius: 4px;
		 
> img  {
	opacity: 1;
	-webkit-transition: opacity .3s;
	-moz-transition: opacity .3s;
	-o-transition: opacity .3s;
	transition: opacity .3s;

	&:hover { opacity: 0.8; }
			} 
}

.es-navigation a {
	background: rgba(0, 0, 0,0.4);
	color: #fff;
	width: 20px;
	height: 30px;
	text-align: center;
	line-height: 13px;
   
&:hover { 
    background: rgba(0, 0, 0,0.5); 
    width: 30px;
         }
	 }
}

.fullwidth-title {
	background: rgbA(0, 0, 0,0.7);
	border-bottom: 2px solid #000000;
	box-sizing: border-box;
	box-shadow: 0px -5px 10px 5px rgba(0, 0, 0, 0.7);
	bottom: 0;
	color: #FFFFFF;
	position: absolute;
	left: 0;
	width: 100%;
	padding:  0px 10px 10px 10px;
	-moz-box-sizing: border-box;
	font-size: 11px;
	font-family: @xf-fontFamilyUi;
	line-height: 15px;

.FTSlider_Title { 
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;

> a {
	display: block;
	color: @xf-FTSlider_post_title_color;
	font-style: normal;
	text-decoration: none;
	text-transform: ' . $__templater->fn('property', array('FTSlider_text_transform', ), true) . ';
	font-size: 13px;
	font-family: @xf-FTSlider_titlefont;
    
&:after {
	content: "\\2192";
	margin-left: 5px;
}

&:hover {
	color: rgb(255, 255, 255);
	 text-decoration: underline;
		 }
	  }
}

> span {
	display: none;
	margin-top: 5px;
	color: rgba(255, 255, 255,0.7);
}

.FTSlider_title_detail {
	color: @xf-FTSlider_userdate_color;
	background: @xf-FTSlider_userdate_backcolor;
	padding: 2px 5px;
	border-radius: 2px;
	border: solid 1px rgba(255, 255, 255, 0.1);
	height: 20px;
	padding: 0px 5px;
	display: ' . $__templater->fn('property', array('FTSlider_title_detail', ), true) . ';
    font-family: @xf-FTSlider_infofont ;
}}
	
/* fullwidth-title  */

.fullwidth-slider .es-slides > li:hover .fullwidth-title span {
	display: ' . $__templater->fn('property', array('FTSlider_hide_excerpts', ), true) . ';
	height: auto;
	max-height: 65px;
    font-family: @xf-FTSlider_excerptsfont;
}';
	return $__finalCompiled;
});