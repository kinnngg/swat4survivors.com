<?php
// FROM HASH: e38943ac5b7821d4f9cdab9d42f369c2
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '/* Ticker CSS */

.ticker_container * {
	box-sizing: unset;
}

@-webkit-keyframes ticker {
  0% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    visibility: visible;
  }

  100% {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }
}

@keyframes ticker {
  0% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    visibility: visible;
  }

  100% {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }
}

.ticker_container {
.xf-nlTickerContainer();
}
.ticker_wrap {
  width: 100%;
  /* overflow: hidden; */
  padding-left: 100%;
}
#ticker {
  display: inline-block;
  white-space: nowrap;
  padding-right: 100%;
}
#ticker.animate:hover {
    animation-play-state: paused;
}
.animate {
  -webkit-animation-iteration-count: infinite; 
          animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
          animation-timing-function: linear;
 -webkit-animation-name: ticker;
         animation-name: ticker;
	-webkit-animation-duration: ' . $__templater->fn('property', array('nlCSSTickerSpeed', ), true) . ';
          animation-duration: ' . $__templater->fn('property', array('nlCSSTickerSpeed', ), true) . ';
}
  
.ticker_item {
  display: inline-block;
    .xf-nlTickerItem();
}
.ticker_item:after {
	content: "\\f0da";
	font-family: \'Font Awesome 5 Pro\';
	font-style: normal;
	font-weight: 900;
	text-rendering: auto;
	-webkit-font-smoothing: antialiased;
	display: inline-block;
	margin: 0 4px;
    .xf-nlTickerItemSeparator();
}
.ticker_item:last-child:after {
    display: none;
}
.ticker_item a {
	.xf-nlTickerLink();
}

/* Mobile Styling */


@media (max-width:@xf-responsiveWide)
{
	.tickerShowAll {
		
	}
}
@media (max-width:@xf-responsiveMedium)
{
	.tickerHideTablet .ticker_container {
		display: none;
	}
}
@media (max-width:@xf-responsiveNarrow)
{
	.tickerHideMobile .ticker_container {
		display: none;
	}
}';
	return $__finalCompiled;
});