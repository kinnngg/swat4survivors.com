<?php
// FROM HASH: 14e8b0a5a2d92eb77a0f6dd43dc194b4
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.lbContainer
{
	&.lbContainer--inline
	{
		display: inline-block;
		max-width: 100%;
	}

	.lbContainer-zoomer
	{
		display: none;
	}

	&.lbContainer--canZoom
	{
		position: relative;

		.lbContainer-zoomer
		{
			display: block;

			cursor: pointer;
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
		}
	}
}

/* Some overrides by XF for lightGallery */
.lg-on
{
	// workaround for scrollbars being visible in the lightbox
	overflow: hidden !important;
}

.xfLb
{
	&.lg-outer .lg-item
	{
		background: none;

		&.lg-complete
		{
			&:after
			{
				display: none;
			}
		}

		&:after
		{
			font-family: \'Font Awesome 5 Pro\';
			font-size: 3em;
			.m-faContent(@fa-var-spinner);
			color: white;

			position: absolute;
			left: 0;
			top: 45%;
			width: 100%;

			-webkit-animation: fa-spin 1s infinite steps(8);
			animation: fa-spin 1s infinite steps(8);
		}
	}

	&.lg-zoomed
	{
		.lg-icon
		{
			&#lg-actual-size:after
			{
				.m-faContent(@fa-var-search-minus)
			}
		}
	}

	&.lg-fullscreen-on
	{
		.lg-icon
		{
			&.lg-fullscreen:after
			{
				.m-faContent(@fa-var-compress);
			}
		}
	}

	.lg-icon
	{
		color: #c8c8c8;
		text-shadow: 0 0 2px rgba(0, 0, 0, 0.8);

		.m-faBase();

		&.lg-next:before
		{
			.m-faContent(@fa-var-chevron-right, false, ltr);
			.m-faContent(@fa-var-chevron-left, false, rtl);
		}

		&.lg-prev:after
		{
			.m-faContent(@fa-var-chevron-left, false, ltr);
			.m-faContent(@fa-var-chevron-right, false, rtl);
		}

		&.lg-toogle-thumb:after
		{
			.m-faContent(@fa-var-th);
		}

		&#lg-actual-size
		{
			&.lg-icon--dimmed
			{
				opacity: 0.5;
				pointer-events: none;
			}

			&:after
			{
				.m-faContent(@fa-var-search-plus);
			}
		}

		&#lg-new-window
		{
			&:after
			{
				.m-faContent(@fa-var-external-link);
			}
		}

		&#lg-zoom-in
		{
			display: none;

			&:after
			{
				.m-faContent(@fa-var-search-plus)
			}
		}

		&#lg-zoom-out
		{
			display: none;

			&:after
			{
				.m-faContent(@fa-var-search-minus)
			}
		}

		&.lg-fullscreen:after
		{
			.m-faContent(@fa-var-expand);
		}

		.lg-show-autoplay&
		{
			&.lg-autoplay-button:after
			{
				.m-faContent(@fa-var-pause-circle);
			}
		}

		&.lg-autoplay-button:after
		{
			.m-faContent(@fa-var-play-circle);
		}

		&#lg-download:after
		{
			.m-faContent(@fa-var-download);
		}

		&.lg-close:after
		{
			.m-faContent(@fa-var-times);
		}
	}

	.lg-sub-html
	{
		h4, p
		{
			.m-textColoredLinks();
		}
	}
}

.lg-sub-html {
	opacity: 1;
	-webkit-transition: -webkit-transform 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, color 0.2s linear;
	-moz-transition: -moz-transform 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, color 0.2s linear;
	-o-transition: -o-transform 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, color 0.2s linear;
	transition: transform 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, color 0.2s linear;
}

.lg-hide-items .lg-sub-html {
	opacity: 0;
	-webkit-transform: translate3d(0, 10px, 0);
	transform: translate3d(0, 10px, 0);
}

/*! lightgallery - v1.6.0 - 2017-08-08
* http://sachinchoolur.github.io/lightGallery/
* Copyright (c) 2017 Sachin N; Licensed GPLv3 */
//@font-face {
//	font-family: \'lg\';
//	src: url("../fonts/lg.eot?n1z373");
//	src: url("../fonts/lg.eot?#iefixn1z373") format("embedded-opentype"), url("../fonts/lg.woff?n1z373") format("woff"), url("../fonts/lg.ttf?n1z373") format("truetype"), url("../fonts/lg.svg?n1z373#lg") format("svg");
//	font-weight: normal;
//	font-style: normal;
//}
//.lg-icon {
//	font-family: \'lg\';
//	speak: none;
//	font-style: normal;
//	font-weight: normal;
//	font-variant: normal;
//	text-transform: none;
//	line-height: 1;
//	/* Better Font Rendering =========== */
//	-webkit-font-smoothing: antialiased;
//	-moz-osx-font-smoothing: grayscale;
//}

.lg-actions .lg-next, .lg-actions .lg-prev {
	background-color: rgba(0, 0, 0, 0.45);
	border-radius: 2px;
	color: #999;
	cursor: pointer;
	display: block;
	font-size: 22px;
	margin-top: -10px;
	padding: 8px 10px 9px;
	position: absolute;
	top: 50%;
	z-index: 1080;
	border: none;
	outline: none;
}
.lg-actions .lg-next.disabled, .lg-actions .lg-prev.disabled {
	pointer-events: none;
	opacity: 0.5;
}
.lg-actions .lg-next:hover, .lg-actions .lg-prev:hover {
	color: #FFF;
}
.lg-actions .lg-next {
	right: 20px;
}
.lg-actions .lg-next:before {
	content: "\\e095";
}
.lg-actions .lg-prev {
	left: 20px;
}
.lg-actions .lg-prev:after {
	content: "\\e094";
}

@-webkit-keyframes lg-right-end {
	0% {
		left: 0;
	}
	50% {
		left: -30px;
	}
	100% {
		left: 0;
	}
}
@-moz-keyframes lg-right-end {
	0% {
		left: 0;
	}
	50% {
		left: -30px;
	}
	100% {
		left: 0;
	}
}
@-ms-keyframes lg-right-end {
	0% {
		left: 0;
	}
	50% {
		left: -30px;
	}
	100% {
		left: 0;
	}
}
@keyframes lg-right-end {
	0% {
		left: 0;
	}
	50% {
		left: -30px;
	}
	100% {
		left: 0;
	}
}
@-webkit-keyframes lg-left-end {
	0% {
		left: 0;
	}
	50% {
		left: 30px;
	}
	100% {
		left: 0;
	}
}
@-moz-keyframes lg-left-end {
	0% {
		left: 0;
	}
	50% {
		left: 30px;
	}
	100% {
		left: 0;
	}
}
@-ms-keyframes lg-left-end {
	0% {
		left: 0;
	}
	50% {
		left: 30px;
	}
	100% {
		left: 0;
	}
}
@keyframes lg-left-end {
	0% {
		left: 0;
	}
	50% {
		left: 30px;
	}
	100% {
		left: 0;
	}
}
.lg-outer.lg-right-end .lg-object {
	-webkit-animation: lg-right-end 0.3s;
	-o-animation: lg-right-end 0.3s;
	animation: lg-right-end 0.3s;
	position: relative;
}
.lg-outer.lg-left-end .lg-object {
	-webkit-animation: lg-left-end 0.3s;
	-o-animation: lg-left-end 0.3s;
	animation: lg-left-end 0.3s;
	position: relative;
}

.lg-toolbar {
	z-index: 1082;
	left: 0;
	position: absolute;
	top: 0;
	width: 100%;
	background-color: rgba(0, 0, 0, 0.45);
}
.lg-toolbar .lg-icon {
	color: #999;
	cursor: pointer;
	float: right;
	font-size: 24px;
	height: 47px;
	line-height: 27px;
	padding: 10px 0;
	text-align: center;
	width: 50px;
	text-decoration: none !important;
	outline: medium none;
	-webkit-transition: color 0.2s linear;
	-o-transition: color 0.2s linear;
	transition: color 0.2s linear;
}
.lg-toolbar .lg-icon:hover {
	color: #FFF;
}
.lg-toolbar .lg-close:after {
	content: "\\e070";
}
.lg-toolbar .lg-download:after {
	content: "\\e0f2";
}

.lg-sub-html {
	background-color: rgba(0, 0, 0, 0.45);
	bottom: 0;
	color: #EEE;
	font-size: 16px;
	left: 0;
	padding: 10px 40px;
	position: fixed;
	right: 0;
	text-align: center;
	z-index: 1080;
}
.lg-sub-html h4 {
	margin: 0;
	font-size: 13px;
	font-weight: bold;
}
.lg-sub-html p {
	font-size: 12px;
	margin: 5px 0 0;
}

#lg-counter {
	color: #999;
	display: inline-block;
	font-size: 16px;
	padding-left: 20px;
	padding-top: 12px;
	vertical-align: middle;
}

.lg-toolbar, .lg-prev, .lg-next {
	opacity: 1;
	-webkit-transition: -webkit-transform 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, color 0.2s linear;
	-moz-transition: -moz-transform 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, color 0.2s linear;
	-o-transition: -o-transform 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, color 0.2s linear;
	transition: transform 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, color 0.2s linear;
}

.lg-hide-items .lg-prev {
	opacity: 0;
	-webkit-transform: translate3d(-10px, 0, 0);
	transform: translate3d(-10px, 0, 0);
}
.lg-hide-items .lg-next {
	opacity: 0;
	-webkit-transform: translate3d(10px, 0, 0);
	transform: translate3d(10px, 0, 0);
}
.lg-hide-items .lg-toolbar {
	opacity: 0;
	-webkit-transform: translate3d(0, -10px, 0);
	transform: translate3d(0, -10px, 0);
}

body:not(.lg-from-hash) .lg-outer.lg-start-zoom .lg-object {
	-webkit-transform: scale3d(0.5, 0.5, 0.5);
	transform: scale3d(0.5, 0.5, 0.5);
	opacity: 0;
	-webkit-transition: -webkit-transform 250ms cubic-bezier(0, 0, 0.25, 1) 0s, opacity 250ms cubic-bezier(0, 0, 0.25, 1) !important;
	-moz-transition: -moz-transform 250ms cubic-bezier(0, 0, 0.25, 1) 0s, opacity 250ms cubic-bezier(0, 0, 0.25, 1) !important;
	-o-transition: -o-transform 250ms cubic-bezier(0, 0, 0.25, 1) 0s, opacity 250ms cubic-bezier(0, 0, 0.25, 1) !important;
	transition: transform 250ms cubic-bezier(0, 0, 0.25, 1) 0s, opacity 250ms cubic-bezier(0, 0, 0.25, 1) !important;
	-webkit-transform-origin: 50% 50%;
	-moz-transform-origin: 50% 50%;
	-ms-transform-origin: 50% 50%;
	transform-origin: 50% 50%;
}
body:not(.lg-from-hash) .lg-outer.lg-start-zoom .lg-item.lg-complete .lg-object {
	-webkit-transform: scale3d(1, 1, 1);
	transform: scale3d(1, 1, 1);
	opacity: 1;
}

.lg-outer .lg-thumb-outer {
	background-color: #0D0A0A;
	bottom: 0;
	position: absolute;
	width: 100%;
	z-index: 1080;
	max-height: 350px;
	-webkit-transform: translate3d(0, 100%, 0);
	transform: translate3d(0, 100%, 0);
	-webkit-transition: -webkit-transform 0.25s cubic-bezier(0, 0, 0.25, 1) 0s;
	-moz-transition: -moz-transform 0.25s cubic-bezier(0, 0, 0.25, 1) 0s;
	-o-transition: -o-transform 0.25s cubic-bezier(0, 0, 0.25, 1) 0s;
	transition: transform 0.25s cubic-bezier(0, 0, 0.25, 1) 0s;
}
.lg-outer .lg-thumb-outer.lg-grab .lg-thumb-item {
	cursor: -webkit-grab;
	cursor: -moz-grab;
	cursor: -o-grab;
	cursor: -ms-grab;
	cursor: grab;
}
.lg-outer .lg-thumb-outer.lg-grabbing .lg-thumb-item {
	cursor: move;
	cursor: -webkit-grabbing;
	cursor: -moz-grabbing;
	cursor: -o-grabbing;
	cursor: -ms-grabbing;
	cursor: grabbing;
}
.lg-outer .lg-thumb-outer.lg-dragging .lg-thumb {
	-webkit-transition-duration: 0s !important;
	transition-duration: 0s !important;
}
.lg-outer.lg-thumb-open .lg-thumb-outer {
	-webkit-transform: translate3d(0, 0%, 0);
	transform: translate3d(0, 0%, 0);
}
.lg-outer .lg-thumb {
	padding: 10px 0;
	height: 100%;
	margin-bottom: -5px;
}
.lg-outer .lg-thumb-item {
	border-radius: 5px;
	cursor: pointer;
	float: left;
	overflow: hidden;
	height: 100%;
	border: 2px solid #FFF;
	border-radius: 4px;
	margin-bottom: 5px;
}
@media (min-width: 1025px) {
	.lg-outer .lg-thumb-item {
		-webkit-transition: border-color 0.25s ease;
		-o-transition: border-color 0.25s ease;
		transition: border-color 0.25s ease;
	}
}
.lg-outer .lg-thumb-item.active, .lg-outer .lg-thumb-item:hover {
	border-color: #a90707;
}
.lg-outer .lg-thumb-item img {
	width: 100%;
	height: 100%;
	object-fit: cover;
}
.lg-outer.lg-has-thumb .lg-item {
	padding-bottom: 120px;
}
.lg-outer.lg-can-toggle .lg-item {
	padding-bottom: 0;
}
.lg-outer.lg-pull-caption-up .lg-sub-html {
	-webkit-transition: bottom 0.25s ease;
	-o-transition: bottom 0.25s ease;
	transition: bottom 0.25s ease;
}
.lg-outer.lg-pull-caption-up.lg-thumb-open .lg-sub-html {
	bottom: 100px;
}
.lg-outer .lg-toogle-thumb {
	background-color: #0D0A0A;
	border-radius: 2px 2px 0 0;
	color: #999;
	cursor: pointer;
	font-size: 24px;
	height: 39px;
	line-height: 27px;
	padding: 5px 0;
	position: absolute;
	right: 20px;
	text-align: center;
	top: -39px;
	width: 50px;
}
.lg-outer .lg-toogle-thumb:after {
	content: "\\e1ff";
}
.lg-outer .lg-toogle-thumb:hover {
	color: #FFF;
}

.lg-outer .lg-video-cont {
	display: inline-block;
	vertical-align: middle;
	max-width: 1140px;
	max-height: 100%;
	width: 100%;
	padding: 0 5px;
}
.lg-outer .lg-video {
	width: 100%;
	height: 0;
	padding-bottom: 56.25%;
	overflow: hidden;
	position: relative;
}
.lg-outer .lg-video .lg-object {
	display: inline-block;
	position: absolute;
	top: 0;
	left: 0;
	width: 100% !important;
	height: 100% !important;
}
.lg-outer .lg-video .lg-video-play {
	width: 84px;
	height: 59px;
	position: absolute;
	left: 50%;
	top: 50%;
	margin-left: -42px;
	margin-top: -30px;
	z-index: 1080;
	cursor: pointer;
}
.lg-outer .lg-has-vimeo .lg-video-play {
	//background: url("../img/vimeo-play.png") no-repeat scroll 0 0 transparent;
}
.lg-outer .lg-has-vimeo:hover .lg-video-play {
	//background: url("../img/vimeo-play.png") no-repeat scroll 0 -58px transparent;
}
.lg-outer .lg-has-html5 .lg-video-play {
	//background: transparent url("../img/video-play.png") no-repeat scroll 0 0;
	height: 64px;
	margin-left: -32px;
	margin-top: -32px;
	width: 64px;
	opacity: 0.8;
}
.lg-outer .lg-has-html5:hover .lg-video-play {
	opacity: 1;
}
.lg-outer .lg-has-youtube .lg-video-play {
	//background: url("../img/youtube-play.png") no-repeat scroll 0 0 transparent;
}
.lg-outer .lg-has-youtube:hover .lg-video-play {
	//background: url("../img/youtube-play.png") no-repeat scroll 0 -60px transparent;
}
.lg-outer .lg-video-object {
	width: 100% !important;
	height: 100% !important;
	position: absolute;
	top: 0;
	left: 0;
}
.lg-outer .lg-has-video .lg-video-object {
	visibility: hidden;
}
.lg-outer .lg-has-video.lg-video-playing .lg-object, .lg-outer .lg-has-video.lg-video-playing .lg-video-play {
	display: none;
}
.lg-outer .lg-has-video.lg-video-playing .lg-video-object {
	visibility: visible;
}

.lg-progress-bar {
	background-color: #333;
	height: 5px;
	left: 0;
	position: absolute;
	top: 0;
	width: 100%;
	z-index: 1083;
	opacity: 0;
	-webkit-transition: opacity 0.08s ease 0s;
	-moz-transition: opacity 0.08s ease 0s;
	-o-transition: opacity 0.08s ease 0s;
	transition: opacity 0.08s ease 0s;
}
.lg-progress-bar .lg-progress {
	background-color: #a90707;
	height: 5px;
	width: 0;
}
.lg-progress-bar.lg-start .lg-progress {
	width: 100%;
}
.lg-show-autoplay .lg-progress-bar {
	opacity: 1;
}

.lg-autoplay-button:after {
	content: "\\e01d";
}
.lg-show-autoplay .lg-autoplay-button:after {
	content: "\\e01a";
}

.lg-outer.lg-css3.lg-zoom-dragging .lg-item.lg-complete.lg-zoomable .lg-img-wrap, .lg-outer.lg-css3.lg-zoom-dragging .lg-item.lg-complete.lg-zoomable .lg-image {
	-webkit-transition-duration: 0s;
	transition-duration: 0s;
}
.lg-outer.lg-use-transition-for-zoom .lg-item.lg-complete.lg-zoomable .lg-img-wrap {
	-webkit-transition: -webkit-transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s;
	-moz-transition: -moz-transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s;
	-o-transition: -o-transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s;
	transition: transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s;
}
.lg-outer.lg-use-left-for-zoom .lg-item.lg-complete.lg-zoomable .lg-img-wrap {
	-webkit-transition: left 0.3s cubic-bezier(0, 0, 0.25, 1) 0s, top 0.3s cubic-bezier(0, 0, 0.25, 1) 0s;
	-moz-transition: left 0.3s cubic-bezier(0, 0, 0.25, 1) 0s, top 0.3s cubic-bezier(0, 0, 0.25, 1) 0s;
	-o-transition: left 0.3s cubic-bezier(0, 0, 0.25, 1) 0s, top 0.3s cubic-bezier(0, 0, 0.25, 1) 0s;
	transition: left 0.3s cubic-bezier(0, 0, 0.25, 1) 0s, top 0.3s cubic-bezier(0, 0, 0.25, 1) 0s;
}
.lg-outer .lg-item.lg-complete.lg-zoomable .lg-img-wrap {
	-webkit-transform: translate3d(0, 0, 0);
	transform: translate3d(0, 0, 0);
	-webkit-backface-visibility: hidden;
	-moz-backface-visibility: hidden;
	backface-visibility: hidden;
}
.lg-outer .lg-item.lg-complete.lg-zoomable .lg-image {
	-webkit-transform: scale3d(1, 1, 1);
	transform: scale3d(1, 1, 1);
	-webkit-transition: -webkit-transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.15s !important;
	-moz-transition: -moz-transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.15s !important;
	-o-transition: -o-transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.15s !important;
	transition: transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.15s !important;
	-webkit-transform-origin: 0 0;
	-moz-transform-origin: 0 0;
	-ms-transform-origin: 0 0;
	transform-origin: 0 0;
	-webkit-backface-visibility: hidden;
	-moz-backface-visibility: hidden;
	backface-visibility: hidden;
}

#lg-zoom-in:after {
	content: "\\e311";
}

#lg-actual-size {
	font-size: 20px;
}
#lg-actual-size:after {
	content: "\\e033";
}

#lg-zoom-out {
	opacity: 0.5;
	pointer-events: none;
}
#lg-zoom-out:after {
	content: "\\e312";
}
.lg-zoomed #lg-zoom-out {
	opacity: 1;
	pointer-events: auto;
}

.lg-outer .lg-pager-outer {
	bottom: 60px;
	left: 0;
	position: absolute;
	right: 0;
	text-align: center;
	z-index: 1080;
	height: 10px;
}
.lg-outer .lg-pager-outer.lg-pager-hover .lg-pager-cont {
	overflow: visible;
}
.lg-outer .lg-pager-cont {
	cursor: pointer;
	display: inline-block;
	overflow: hidden;
	position: relative;
	vertical-align: top;
	margin: 0 5px;
}
.lg-outer .lg-pager-cont:hover .lg-pager-thumb-cont {
	opacity: 1;
	-webkit-transform: translate3d(0, 0, 0);
	transform: translate3d(0, 0, 0);
}
.lg-outer .lg-pager-cont.lg-pager-active .lg-pager {
	box-shadow: 0 0 0 2px white inset;
}
.lg-outer .lg-pager-thumb-cont {
	background-color: #fff;
	color: #FFF;
	bottom: 100%;
	height: 83px;
	left: 0;
	margin-bottom: 20px;
	margin-left: -60px;
	opacity: 0;
	padding: 5px;
	position: absolute;
	width: 120px;
	border-radius: 3px;
	-webkit-transition: opacity 0.15s ease 0s, -webkit-transform 0.15s ease 0s;
	-moz-transition: opacity 0.15s ease 0s, -moz-transform 0.15s ease 0s;
	-o-transition: opacity 0.15s ease 0s, -o-transform 0.15s ease 0s;
	transition: opacity 0.15s ease 0s, transform 0.15s ease 0s;
	-webkit-transform: translate3d(0, 5px, 0);
	transform: translate3d(0, 5px, 0);
}
.lg-outer .lg-pager-thumb-cont img {
	width: 100%;
	height: 100%;
}
.lg-outer .lg-pager {
	background-color: rgba(255, 255, 255, 0.5);
	border-radius: 50%;
	box-shadow: 0 0 0 8px rgba(255, 255, 255, 0.7) inset;
	display: block;
	height: 12px;
	-webkit-transition: box-shadow 0.3s ease 0s;
	-o-transition: box-shadow 0.3s ease 0s;
	transition: box-shadow 0.3s ease 0s;
	width: 12px;
}
.lg-outer .lg-pager:hover, .lg-outer .lg-pager:focus {
	box-shadow: 0 0 0 8px white inset;
}
.lg-outer .lg-caret {
	border-left: 10px solid transparent;
	border-right: 10px solid transparent;
	border-top: 10px dashed;
	bottom: -10px;
	display: inline-block;
	height: 0;
	left: 50%;
	margin-left: -5px;
	position: absolute;
	vertical-align: middle;
	width: 0;
}

.lg-fullscreen:after {
	content: "\\e20c";
}
.lg-fullscreen-on .lg-fullscreen:after {
	content: "\\e20d";
}

.lg-outer #lg-dropdown-overlay {
	background-color: rgba(0, 0, 0, 0.25);
	bottom: 0;
	cursor: default;
	left: 0;
	position: fixed;
	right: 0;
	top: 0;
	z-index: 1081;
	opacity: 0;
	visibility: hidden;
	-webkit-transition: visibility 0s linear 0.18s, opacity 0.18s linear 0s;
	-o-transition: visibility 0s linear 0.18s, opacity 0.18s linear 0s;
	transition: visibility 0s linear 0.18s, opacity 0.18s linear 0s;
}
.lg-outer.lg-dropdown-active .lg-dropdown, .lg-outer.lg-dropdown-active #lg-dropdown-overlay {
	-webkit-transition-delay: 0s;
	transition-delay: 0s;
	-moz-transform: translate3d(0, 0px, 0);
	-o-transform: translate3d(0, 0px, 0);
	-ms-transform: translate3d(0, 0px, 0);
	-webkit-transform: translate3d(0, 0px, 0);
	transform: translate3d(0, 0px, 0);
	opacity: 1;
	visibility: visible;
}
.lg-outer.lg-dropdown-active #lg-share {
	color: #FFF;
}
.lg-outer .lg-dropdown {
	background-color: #fff;
	border-radius: 2px;
	font-size: 14px;
	list-style-type: none;
	margin: 0;
	padding: 10px 0;
	position: absolute;
	right: 0;
	text-align: left;
	top: 50px;
	opacity: 0;
	visibility: hidden;
	-moz-transform: translate3d(0, 5px, 0);
	-o-transform: translate3d(0, 5px, 0);
	-ms-transform: translate3d(0, 5px, 0);
	-webkit-transform: translate3d(0, 5px, 0);
	transform: translate3d(0, 5px, 0);
	-webkit-transition: -webkit-transform 0.18s linear 0s, visibility 0s linear 0.5s, opacity 0.18s linear 0s;
	-moz-transition: -moz-transform 0.18s linear 0s, visibility 0s linear 0.5s, opacity 0.18s linear 0s;
	-o-transition: -o-transform 0.18s linear 0s, visibility 0s linear 0.5s, opacity 0.18s linear 0s;
	transition: transform 0.18s linear 0s, visibility 0s linear 0.5s, opacity 0.18s linear 0s;
}
.lg-outer .lg-dropdown:after {
	content: "";
	display: block;
	height: 0;
	width: 0;
	position: absolute;
	border: 8px solid transparent;
	border-bottom-color: #FFF;
	right: 16px;
	top: -16px;
}
.lg-outer .lg-dropdown > li:last-child {
	margin-bottom: 0px;
}
.lg-outer .lg-dropdown > li:hover a, .lg-outer .lg-dropdown > li:hover .lg-icon {
	color: #333;
}
.lg-outer .lg-dropdown a {
	color: #333;
	display: block;
	white-space: pre;
	padding: 4px 12px;
	font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
	font-size: 12px;
}
.lg-outer .lg-dropdown a:hover {
	background-color: rgba(0, 0, 0, 0.07);
}
.lg-outer .lg-dropdown .lg-dropdown-text {
	display: inline-block;
	line-height: 1;
	margin-top: -3px;
	vertical-align: middle;
}
.lg-outer .lg-dropdown .lg-icon {
	color: #333;
	display: inline-block;
	float: none;
	font-size: 20px;
	height: auto;
	line-height: 1;
	margin-right: 8px;
	padding: 0;
	vertical-align: middle;
	width: auto;
}
.lg-outer #lg-share {
	position: relative;
}
.lg-outer #lg-share:after {
	content: "\\e80d";
}
.lg-outer #lg-share-facebook .lg-icon {
	color: #3b5998;
}
.lg-outer #lg-share-facebook .lg-icon:after {
	content: "\\e901";
}
.lg-outer #lg-share-twitter .lg-icon {
	color: #00aced;
}
.lg-outer #lg-share-twitter .lg-icon:after {
	content: "\\e904";
}
.lg-outer #lg-share-googleplus .lg-icon {
	color: #dd4b39;
}
.lg-outer #lg-share-googleplus .lg-icon:after {
	content: "\\e902";
}
.lg-outer #lg-share-pinterest .lg-icon {
	color: #cb2027;
}
.lg-outer #lg-share-pinterest .lg-icon:after {
	content: "\\e903";
}

.lg-group:after {
	content: "";
	display: table;
	clear: both;
}

.lg-outer {
	width: 100%;
	height: 100%;
	position: fixed;
	top: 0;
	left: 0;
	z-index: 1050;
	text-align: left;
	opacity: 0;
	-webkit-transition: opacity 0.15s ease 0s;
	-o-transition: opacity 0.15s ease 0s;
	transition: opacity 0.15s ease 0s;
}
.lg-outer * {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
.lg-outer.lg-visible {
	opacity: 1;
}
.lg-outer.lg-css3 .lg-item.lg-prev-slide, .lg-outer.lg-css3 .lg-item.lg-next-slide, .lg-outer.lg-css3 .lg-item.lg-current {
	-webkit-transition-duration: inherit !important;
	transition-duration: inherit !important;
	-webkit-transition-timing-function: inherit !important;
	transition-timing-function: inherit !important;
}
.lg-outer.lg-css3.lg-dragging .lg-item.lg-prev-slide, .lg-outer.lg-css3.lg-dragging .lg-item.lg-next-slide, .lg-outer.lg-css3.lg-dragging .lg-item.lg-current {
	-webkit-transition-duration: 0s !important;
	transition-duration: 0s !important;
	opacity: 1;
}
.lg-outer.lg-grab img.lg-object {
	cursor: -webkit-grab;
	cursor: -moz-grab;
	cursor: -o-grab;
	cursor: -ms-grab;
	cursor: grab;
}
.lg-outer.lg-grabbing img.lg-object {
	cursor: move;
	cursor: -webkit-grabbing;
	cursor: -moz-grabbing;
	cursor: -o-grabbing;
	cursor: -ms-grabbing;
	cursor: grabbing;
}
.lg-outer .lg {
	height: 100%;
	width: 100%;
	position: relative;
	overflow: hidden;
	margin-left: auto;
	margin-right: auto;
	max-width: 100%;
	max-height: 100%;
}
.lg-outer .lg-inner {
	width: 100%;
	height: 100%;
	position: absolute;
	left: 0;
	top: 0;
	white-space: nowrap;
}
.lg-outer .lg-item {
	//background: url("../img/loading.gif") no-repeat scroll center center transparent;
	display: none !important;
}
.lg-outer.lg-css3 .lg-prev-slide, .lg-outer.lg-css3 .lg-current, .lg-outer.lg-css3 .lg-next-slide {
	display: inline-block !important;
}
.lg-outer.lg-css .lg-current {
	display: inline-block !important;
}
.lg-outer .lg-item, .lg-outer .lg-img-wrap {
	display: inline-block;
	text-align: center;
	position: absolute;
	width: 100%;
	height: 100%;
}
.lg-outer .lg-item:before, .lg-outer .lg-img-wrap:before {
	content: "";
	display: inline-block;
	height: 50%;
	width: 1px;
	margin-right: -1px;
}
.lg-outer .lg-img-wrap {
	position: absolute;
	padding: 0 5px;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
}
.lg-outer .lg-item.lg-complete {
	background-image: none;
}
.lg-outer .lg-item.lg-current {
	z-index: 1060;
}
.lg-outer .lg-image {
	display: inline-block;
	vertical-align: middle;
	max-width: 100%;
	max-height: 100%;
	width: auto !important;
	height: auto !important;
}
.lg-outer.lg-show-after-load .lg-item .lg-object, .lg-outer.lg-show-after-load .lg-item .lg-video-play {
	opacity: 0;
	-webkit-transition: opacity 0.15s ease 0s;
	-o-transition: opacity 0.15s ease 0s;
	transition: opacity 0.15s ease 0s;
}
.lg-outer.lg-show-after-load .lg-item.lg-complete .lg-object, .lg-outer.lg-show-after-load .lg-item.lg-complete .lg-video-play {
	opacity: 1;
}
.lg-outer .lg-empty-html {
	display: none;
}
.lg-outer.lg-hide-download #lg-download {
	display: none;
}

.lg-backdrop {
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 1040;
	background-color: #000;
	opacity: 0;
	-webkit-transition: opacity 0.15s ease 0s;
	-o-transition: opacity 0.15s ease 0s;
	transition: opacity 0.15s ease 0s;
}
.lg-backdrop.in {
	opacity: 1;
}

.lg-css3.lg-no-trans .lg-prev-slide, .lg-css3.lg-no-trans .lg-next-slide, .lg-css3.lg-no-trans .lg-current {
	-webkit-transition: none 0s ease 0s !important;
	-moz-transition: none 0s ease 0s !important;
	-o-transition: none 0s ease 0s !important;
	transition: none 0s ease 0s !important;
}
.lg-css3.lg-use-css3 .lg-item {
	-webkit-backface-visibility: hidden;
	-moz-backface-visibility: hidden;
	backface-visibility: hidden;
}
.lg-css3.lg-use-left .lg-item {
	-webkit-backface-visibility: hidden;
	-moz-backface-visibility: hidden;
	backface-visibility: hidden;
}
.lg-css3.lg-fade .lg-item {
	opacity: 0;
}
.lg-css3.lg-fade .lg-item.lg-current {
	opacity: 1;
}
.lg-css3.lg-fade .lg-item.lg-prev-slide, .lg-css3.lg-fade .lg-item.lg-next-slide, .lg-css3.lg-fade .lg-item.lg-current {
	-webkit-transition: opacity 0.1s ease 0s;
	-moz-transition: opacity 0.1s ease 0s;
	-o-transition: opacity 0.1s ease 0s;
	transition: opacity 0.1s ease 0s;
}
.lg-css3.lg-slide.lg-use-css3 .lg-item {
	opacity: 0;
}
.lg-css3.lg-slide.lg-use-css3 .lg-item.lg-prev-slide {
	-webkit-transform: translate3d(-100%, 0, 0);
	transform: translate3d(-100%, 0, 0);
}
.lg-css3.lg-slide.lg-use-css3 .lg-item.lg-next-slide {
	-webkit-transform: translate3d(100%, 0, 0);
	transform: translate3d(100%, 0, 0);
}
.lg-css3.lg-slide.lg-use-css3 .lg-item.lg-current {
	-webkit-transform: translate3d(0, 0, 0);
	transform: translate3d(0, 0, 0);
	opacity: 1;
}
.lg-css3.lg-slide.lg-use-css3 .lg-item.lg-prev-slide, .lg-css3.lg-slide.lg-use-css3 .lg-item.lg-next-slide, .lg-css3.lg-slide.lg-use-css3 .lg-item.lg-current {
	-webkit-transition: -webkit-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.1s ease 0s;
	-moz-transition: -moz-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.1s ease 0s;
	-o-transition: -o-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.1s ease 0s;
	transition: transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.1s ease 0s;
}
.lg-css3.lg-slide.lg-use-left .lg-item {
	opacity: 0;
	position: absolute;
	left: 0;
}
.lg-css3.lg-slide.lg-use-left .lg-item.lg-prev-slide {
	left: -100%;
}
.lg-css3.lg-slide.lg-use-left .lg-item.lg-next-slide {
	left: 100%;
}
.lg-css3.lg-slide.lg-use-left .lg-item.lg-current {
	left: 0;
	opacity: 1;
}
.lg-css3.lg-slide.lg-use-left .lg-item.lg-prev-slide, .lg-css3.lg-slide.lg-use-left .lg-item.lg-next-slide, .lg-css3.lg-slide.lg-use-left .lg-item.lg-current {
	-webkit-transition: left 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.1s ease 0s;
	-moz-transition: left 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.1s ease 0s;
	-o-transition: left 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.1s ease 0s;
	transition: left 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.1s ease 0s;
}';
	return $__finalCompiled;
});