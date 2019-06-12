<?php
// FROM HASH: f4c5c5b09c9c229650f6c68b5cee01c6
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '/* Introduce */

.inner-grid-3 {
	.porta-masonry .porta-article-item {
		width: ~"calc(100% / 3)";
	}
}
.inner-grid-4 {
	.porta-masonry .porta-article-item {
		width: 25%;
	}
}
.inner-grid-5 {
	.porta-masonry .porta-article-item {
		width: 20%;
	}
}
.inner-grid-6 {
	.porta-masonry .porta-article-item {
		width: ~"calc(100% / 6)";
	}
}

/* General */

.p-body {
	h1, h2, h3, h4, h5 {
		&.h-300 {
			font-weight: 300;
		}
		&.h-400 {
			font-weight: 400;
		}
		&.h-700 {
			font-weight: 700;
		}
		&.h-800 {
			font-weight: 800;
		}
		&.h-900 {
			font-weight: 900;
		}

		&.h-large {
			font-size: 2.4em;
			line-height: normal;
		}
	}
}

/* Set ratings */

.generate-min-height(800);

.generate-min-height(@n, @i: 100) when (@i =< @n) {
  .min-height-@{i} {
    min-height: (1px * @i);
  }
  .generate-min-height(@n, (@i + 100));
}


/* Section rows */

.p-row {
	margin: 0 0 @xf-elementSpacer;
    clear: both;
	
	.m-clearFix();
	
	.generate-width(100);

	.generate-width(@n, @i: 20) when (@i =< @n) {
		.width-@{i} {
			width: (1% * @i);
			max-width: (1% * @i);
		}
		.generate-width(@n, (@i + 5));
	}
	
	&.spacer-s > *:not(.p-row-inner):not(:last-child), .p-xrow-inner > *:not(:last-child) {
		margin-bottom: 10px;
	}
	&.spacer-m > *:not(.p-row-inner):not(:last-child), .p-xrow-inner > *:not(:last-child) {
		margin-bottom: 20px;
	}
	&.spacer-l > *:not(.p-row-inner):not(:last-child), .p-xrow-inner > *:not(:last-child) {
		margin-bottom: 30px;
	}

	&.padding-s,
	.padding-s {
		padding: 10px 0;
	}
	&.padding-m,
	.padding-m {
		padding: 20px 0;
	}
	&.padding-l,
	.padding-l {
		padding: 30px 0;
	}
	
	&.wide {
		margin-left: -50vw;
		position: relative;
		left: 50%;
		width: 100vw;
		box-sizing: border-box;
		clear: both;
		/* z-index: 1; */
	}
	&.parallax-window {
		/* min-height: 300px; */
		background: transparent;
	}
	&.matte,
	.matte {
		background: #f5f5f5;
	}
	&.inline,
	.inline {
		margin-top: 0;
		margin-bottom: 0;
	}
	&.matte-dark,
	.matte-dark {
		background: #333;
	}
	&.dark *,
	.dark * {
		color: #fff;
	}
	&.img-bg {
		background-repeat: no-repeat;
		background-position: center center;
		background-size: cover;
	}
	&.img-align-top {
		background-position-y: top !important;
	}
	&.img-align-bottom {
		background-position-y: bottom !important;
	}
	&.img-align-left {
		background-position-x: left !important;
	}
	&.img-align-right {
		background-position-x: right !important;
	}
	&.f-v-stretch {
		
		/*
		.p-row-inner {
			flex: 1;
			display: flex;
			justify-content: center;
		}
		*/
	}
	&.f-align-right .p-row-inner {
		align-items: flex-end;
	}
	
	.float-caption {
		position: absolute;
		padding:  20px;
	}

	.float-caption.top-right {
		top: 0;
		right: 0;
	}

}
.p-row-inner {
		.xf-nlPageWidth();
		width: 100%;
		position: relative;
	}
.t-align-center {
	text-align: center;
}
.t-align-right {
	text-align: right;
}
.flex.f-v-stretch {
    align-items: center;
}
.f-v-stretch > * {
	
}

/* Flex layouts */

.flex {
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
}
.flex > * {
	flex: 1;
}

.col-has-gutter {
    margin-left: -(@xf-elementSpacer * .5);
    margin-right: -(@xf-elementSpacer * .5);
	
	.flex-col {
		padding: 0 (@xf-elementSpacer * .5);
	}
}
.col-has-gutter.gutter-s {
    margin-left: -(@xf-elementSpacer * .25);
    margin-right: -(@xf-elementSpacer * .25);
	
	.flex-col {
		padding: 0 (@xf-elementSpacer * .25);
	}
}
.col-has-gutter.gutter-m {
    margin-left: -(@xf-elementSpacer * .75);
    margin-right: -(@xf-elementSpacer * .75);
	
	.flex-col {
		padding: 0 (@xf-elementSpacer * .75);
	}
}
.col-has-gutter.gutter-l {
    margin-left: -@xf-elementSpacer;
    margin-right: -@xf-elementSpacer;
	
	.flex-col {
		padding: 0 @xf-elementSpacer;
	}
}

.col-1 {
    flex: 1 0 100%;
}
.col-2 {
    flex: 1 0 50%;
}
.col-3 {
	flex: 1 0 33%;
}
.col-4 {
	flex: 1 0 25%;
}
.col-5 {
	flex: 1 0 20%;
}
.col-6 {
	flex: 1 0 16%;
}

/* Deprecate
.flex.space-around {
    margin: 0 -@xf-elementSpacer;
}

.flex.space-around > * {
    padding: 0 @xf-elementSpacer;
}
*/

.flex .block {
    height: 100%;
    display: flex;
    margin-bottom: 0;
}
.flex .block-container {
	width: 100%;
}

/* Misc */

.img-preview img {
    max-width: 100%;
    width: 100%;
	display: block;
}
.image-fit > img {
    width: 100%;
}
a.button.wide,
a.button.full-width {
    width: 100%;
}

.flex-col {
    margin-bottom: 14px;
}

/* Palette Colors */

@_blend-mode: xf-intensify;
@_blend-amount: 10%; 

@_palette--blue: #0096de;
@_palette--indigo: #1f44d1;
@_palette--navy: #1f44d1;
@_palette--sky-blue: #43c2fb;
@_palette--aqua: #00BCD4;
@_palette--sea-green: #009688;
@_palette--forest: #0c790c;
@_palette--green: #62a51b;
@_palette--lime: #a9c516;
@_palette--yellow: #efd80f;
@_palette--saffron: #F4C430;
@_palette--orange: #ff9800;
@_palette--burnt-orange: #a25203;
@_palette--brown: #965d2a;
@_palette--red: #e00f00;
@_palette--magenta: #9e0621;
@_palette--brick: #795548;
@_palette--purple: #673AB7;
@_palette--pink: #e45683;
@_palette--neon-pink: #E91E63;
@_palette--pear: #CDDC39;
@_palette--coffee: #a96c36;
@_palette--slate: #607D8B;
@_palette--gray: #9E9E9E;
@_palette--blue-gray: #9E9E9E;
@_palette--teal: #00c9d4;
@_palette--teal-gray: #5c898c;
@_palette--silver: #9E9E9E;
@_palette--gold: #d6a921;
@_palette--charcoal: #464646;
@_palette--black: #1b1b1b;
@_palette--periwinkle: #637dbb;
@_palette--violet: #9C27B0;
@_palette--cherry-red: #ce0e00;
@_palette--plum: #893F62;
@_palette--navy: #1f78d1;
@_palette--yoga-green: #818E6D;

a.button--blue,
.colorTheme--blue a.button {
	background-color: @_palette--blue;
	
	&:hover {
		background-color: xf-intensify(@_palette--blue, @_blend-amount) !important;
	}
}
a.button--indigo,
.colorTheme--indigo a.button {
  background-color: @_palette--indigo;
	
	&:hover {
		background-color: xf-intensify(@_palette--indigo, @_blend-amount) !important;
	}
}
a.button--navy,
.colorTheme--navy a.button {
  background-color: @_palette--navy;
	
	&:hover {
		background-color: xf-intensify(@_palette--navy, @_blend-amount) !important;
	}
}
a.button--sky-blue,
.colorTheme--sky-blue a.button {
  background-color: @_palette--sky-blue;
	
	&:hover {
		background-color: xf-intensify(@_palette--sky-blue, @_blend-amount) !important;
	}
}
a.button--aqua,
.colorTheme--aqua a.button {
  background-color: @_palette--aqua;
	
	&:hover {
		background-color: xf-intensify(@_palette--aqua, @_blend-amount) !important;
	}
}
a.button--sea-green,
.colorTheme--sea-green a.button {
  background-color: @_palette--sea-green;
	
	&:hover {
		background-color: xf-intensify(@_palette--sea-green, @_blend-amount) !important;
	}
}
a.button--forest,
.colorTheme--forest a.button {
  background-color: @_palette--forest;
	
	&:hover {
		background-color: xf-intensify(@_palette--forest, @_blend-amount) !important;
	}
}
a.button--green,
.colorTheme--green a.button {
  background-color: @_palette--green;
	
	&:hover {
		background-color: xf-intensify(@_palette--green, @_blend-amount) !important;
	}
}
a.button--lime,
.colorTheme--lime a.button {
  background-color: @_palette--lime;
	
	&:hover {
		background-color: xf-intensify(@_palette--lime, @_blend-amount) !important;
	}
}
a.button--yellow,
.colorTheme--yellow a.button {
  background-color: @_palette--yellow;
	
	&:hover {
		background-color: xf-intensify(@_palette--yellow, @_blend-amount) !important;
	}
}
a.button--saffron,
.colorTheme--saffron a.button {
  background-color: @_palette--saffron;
	
	&:hover {
		background-color: xf-intensify(@_palette--saffron, @_blend-amount) !important;
	}
}
a.button--orange,
.colorTheme--orange a.button {
  background-color: @_palette--orange;
	
	&:hover {
		background-color: xf-intensify(@_palette--orange, @_blend-amount) !important;
	}
}
a.button--burnt-orange,
.colorTheme--burnt-orange a.button {
  background-color: @_palette--burnt-orange;
	
	&:hover {
		background-color: xf-intensify(@_palette--burnt-orange, @_blend-amount) !important;
	}
}
a.button--brown,
.colorTheme--brown a.button {
  background-color: @_palette--brown;
	
	&:hover {
		background-color: xf-intensify(@_palette--brown, @_blend-amount) !important;
	}
}
a.button--red,
.colorTheme--red a.button {
  background-color: @_palette--red;
	
	&:hover {
		background-color: xf-intensify(@_palette--red, @_blend-amount) !important;
	}
}
a.button--magenta,
.colorTheme--magenta a.button {
  background-color: @_palette--magenta;
	
	&:hover {
		background-color: xf-intensify(@_palette--magenta, @_blend-amount) !important;
	}
}
a.button--brick,
.colorTheme--brick a.button {
  background-color: @_palette--brick;
	
	&:hover {
		background-color: xf-intensify(@_palette--brick, @_blend-amount) !important;
	}
}
a.button--purple,
.colorTheme--purple a.button {
  background-color: @_palette--purple;
	
	&:hover {
		background-color: xf-intensify(@_palette--purple, @_blend-amount) !important;
	}
}
a.button--pink,
.colorTheme--pink a.button {
  background-color: @_palette--pink;
	
	&:hover {
		background-color: xf-intensify(@_palette--pink, @_blend-amount) !important;
	}
}
a.button--neon-pink,
.colorTheme--neon-pink a.button {
  background-color: @_palette--neon-pink;
	
	&:hover {
		background-color: xf-intensify(@_palette--neon-pink, @_blend-amount) !important;
	}
}
a.button--pear,
.colorTheme--pear a.button {
  background-color: @_palette--pear;
	
	&:hover {
		background-color: xf-intensify(@_palette--pear, @_blend-amount) !important;
	}
}
a.button--coffee,
.colorTheme--coffee a.button {
  background-color: @_palette--coffee;
	
	&:hover {
		background-color: xf-intensify(@_palette--coffee, @_blend-amount) !important;
	}
}
a.button--slate,
.colorTheme--slate a.button {
  background-color: @_palette--slate;
	
	&:hover {
		background-color: xf-intensify(@_palette--slate, @_blend-amount) !important;
	}
}
a.button--gray,
.colorTheme--gray a.button {
  background-color: @_palette--gray;
	
	&:hover {
		background-color: xf-intensify(@_palette--gray, @_blend-amount) !important;
	}
}
a.button--blue-gray,
.colorTheme--blue-gray a.button {
  background-color: @_palette--blue-gray;
	
	&:hover {
		background-color: xf-intensify(@_palette--blue-gray, @_blend-amount) !important;
	}
}
a.button--teal,
.colorTheme--teal a.button {
  background-color: @_palette--teal;
	
	&:hover {
		background-color: xf-intensify(@_palette--teal, @_blend-amount) !important;
	}
}
a.button--teal-gray,
.colorTheme--teal-gray a.button {
  background-color: @_palette--teal-gray;
	
	&:hover {
		background-color: xf-intensify(@_palette--teal-gray, @_blend-amount) !important;
	}
}
a.button--silver,
.colorTheme--silver a.button {
  background-color: @_palette--silver;
	
	&:hover {
		background-color: xf-intensify(@_palette--silver, @_blend-amount) !important;
	}
}
a.button--gold,
.colorTheme--gold a.button {
  background-color: @_palette--gold;
	
	&:hover {
		background-color: xf-intensify(@_palette--gold, @_blend-amount) !important;
	}
}
a.button--charcoal,
.colorTheme--charcoal a.button {
  background-color: @_palette--charcoal;
	
	&:hover {
		background-color: xf-intensify(@_palette--charcoal, @_blend-amount) !important;
	}
}
a.button--black,
.colorTheme--black a.button {
  background-color: @_palette--black;
	
	&:hover {
		background-color: xf-intensify(@_palette--black, @_blend-amount) !important;
	}
}
a.button--periwinkle,
.colorTheme--periwinkle a.button {
  background-color: @_palette--periwinkle;
	
	&:hover {
		background-color: xf-intensify(@_palette--periwinkle, @_blend-amount) !important;
	}
}
a.button--violet,
.colorTheme--violet a.button {
  background-color: @_palette--violet;
	
	&:hover {
		background-color: xf-intensify(@_palette--violet, @_blend-amount) !important;
	}
}
a.button--cherry-red,
.colorTheme--cherry-red a.button {
  background-color: @_palette--cherry-red;
	
	&:hover {
		background-color: xf-intensify(@_palette--cherry-red, @_blend-amount) !important;
	}
}
a.button--plum,
.colorTheme--plum a.button {
  background-color: @_palette--plum;
	
	&:hover {
		background-color: xf-intensify(@_palette--plum, @_blend-amount) !important;
	}
}
a.button--navy,
.colorTheme--navy a.button {
  background-color: @_palette--navy;
	
	&:hover {
		background-color: xf-intensify(@_palette--navy, @_blend-amount) !important;
	}
}
a.button--yoga-green,
.colorTheme--yoga-green a.button {
  background-color: @_palette--yoga-green;
	
	&:hover {
		background-color: xf-intensify(@_palette--yoga-green, @_blend-amount) !important;
	}
}

.icon-tab i {
    background: rgba(0, 0, 0, 0.1);
    border-radius: 100px;
    min-height: 40px;
    min-width: 40px;
    text-align: center;
    line-height: 40px;
    font-size: 115%;
}

.text-tab {
    /* display: inline-block; */
    margin: 0 0 30px 47px;
}

span.icon-tab {
    display: inline-block;
    float: left;
}

.text-icon-block {
    /* vertical-align: top; */
    position: relative;
}

.text-icon-block > * {
    /* float: left; */
}

.icon-tab {
    position: absolute;
}

.flex-col h2 {
    margin-top: 0;
    line-height: normal;
}

section.p-row h2, section.p-row h3 {
    margin-top: 0;
    display: block;
}

.gaming-promo-twitch {
    min-height: 480px;
}
/*
.flex > .p-row-inner {
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
}
*/

.f-no-grow {
    flex-grow: 0 !important;
    /* flex-basis: 0; */
}

.f-push-right > *, .f-push-right .p-row-inner > * {
    justify-content: flex-end;
}

.flex.f-push-right {
    justify-content: flex-end;
}

section.p-row.wide-spacer-l {
    padding-left: 60px;
    padding-right: 60px;
}

a.button--large {
	.xf-nlButtonLarge();
}
.f-align-right {
    justify-content: flex-end;
}
.float-left {
    float: left;
}

.float-right {
    float: right;
}

.t-uppercase {
    text-transform: uppercase;
}

.table-row {
    display: table;
    vertical-align: middle;
	
	> * {
		display: table-cell !important;
	}
}
a.button--outline {
    background: transparent none !important;
    border: none;
    transition: .3s all;
	.xf-nlButtonOutline();
}

a.button.button--outline:hover {
    .xf-nlButtonOutlineHover();
}

a.button {
	> i {
		margin-right: 8px;
	}
	&.icon--right {
		direction: rtl;
	}
	&.icon--right > i {
		margin-right: 0;
		margin-left: 8px;
	}
	&.icon--large > i {
		font-size: 114%;
	}
}

.floatingContent {
	.p-row {
		
	}
}

.no-headers .block-header {
    display: none;
}

/* Page settings */

.page-blank {
	.p-body-header,
	.p-page-header,
	.noticeScrollContainer,
	.notices,
	.p-breadcrumbs,
	.p-sideBar,
	.p-sideNav,
	.blockMessage--share {
		display: none;
	}
}
.page-blank-with-sidebar {
	.p-body-header,
	.noticeScrollContainer,
	.notices,
	.p-breadcrumbs,
	.blockMessage--share {
		display: none;
	}
}
.pagetitle-hide .p-body-header {
    display: none;
}
.notices-hide .noticeScrollContainer,
.notices-hide .notices {
	display: none;
}
.breadcrumb-hide .p-breadcrumbs {
	display: none;
}
.sidebar-hide {
	.p-body-sidebar {
		display: none;
	}
	.p-body-content {
		padding: 0;
	}
}
.sidenav-hide {
	.p-body-sidenav {
		display: none;
	}
	.p-body-content {
		padding: 0;
	}
}
.padding-none .p-body-inner {
    padding-top: 0;
    padding-bottom: 0;
}
.share-hide .blockMessage--share {
    display: none;
}

/* Pricing tables */

.pricing-tables {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
	.m-clearFix();
	
	&.has--primary {
		
		&:before, &:after {
			width: 100%;
			height: @xf-elementSpacer;
		}
	}
}

.pricing-table {
    flex: 1;
	
	> * {
		/* flex: 1 !important; */
		/* align-items: center; */
		/* align-content: center; */
	}
}

.pricing-table {
    background: @xf-contentBg;
    /* display: flex; */
    /* flex-direction: column; */
}

.p-table-header {
    background: @xf-nlElement1;
    display: block;
    padding: 18px;
    text-align: center;
    text-transform: uppercase;
    font-weight: bold;
    color: #fff;
    line-height: normal;
    font-size: 18px;
}
.p-table-description {
    display: block;
    font-size: @xf-fontSizeSmall;
    text-transform: initial;
    opacity: 0.7;
    font-weight: normal;
    margin-top: 6px;
}
.p-table-price {
    display: block;
    text-align: center;
    padding: 30px;
    font-size: 36px;
    font-weight: bold;
    line-height: normal;
}
.p-table-header h3 {
    margin: 0;
}

/* Border setup */
.p-table-price,
.pricing-tables ul,
.p-table-footer {
	border-left: 1px solid @xf-borderColor;
    border-right: 1px solid @xf-borderColor;
}
.pricing-tables ul,
.p-table-footer {
	border-bottom: 1px solid @xf-borderColor;
}

.pricing-tables ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.pricing-table li {
    display: block;
    padding: 8px @xf-nlContentPadding;
    color: #888;
}

.pricing-table li:nth-of-type(odd) {
    background: rgba(0,0,0,0.02);
}

.p-table-footer {
    padding: @xf-nlContentPadding;
    text-align: center;
}

.pricing-table.primary {
    z-index: 99;
    margin: -@xf-nlContentPadding 0;
	.m-dropShadow();
	
	.p-table-header {
		padding: 25px @xf-nlContentPadding !important;
	}
	.p-table-footer {
		padding: 30px;
	}
}

/* Color themes */

/*
.p-table-header, a.button {
		
	.colorTheme--indigo &,
	.pricing-table.colorTheme--indigo &  {
		background-color: @_palette--indigo;
	}
	.colorTheme--slate &, .pricing-table.colorTheme--slate & {
		background-color: @_palette--slate;
	}
}
*/
.p-table-header {
		
	.colorTheme--blue & {
	  background-color: @_palette--blue;
	}
	.colorTheme--indigo & {
	  background-color: @_palette--indigo;
	}
	.colorTheme--navy & {
	  background-color: @_palette--navy;
	}
	.colorTheme--sky-blue & {
	  background-color: @_palette--sky-blue;
	}
	.colorTheme--aqua & {
	  background-color: @_palette--aqua;
	}
	.colorTheme--sea-green & {
	  background-color: @_palette--sea-green;
	}
	.colorTheme--forest & {
	  background-color: @_palette--forest;
	}
	.colorTheme--green & {
	  background-color: @_palette--green;
	}
	.colorTheme--lime & {
	  background-color: @_palette--lime;
	}
	.colorTheme--yellow & {
	  background-color: @_palette--yellow;
	}
	.colorTheme--saffron & {
	  background-color: @_palette--saffron;
	}
	.colorTheme--orange & {
	  background-color: @_palette--orange;
	}
	.colorTheme--burnt-orange & {
	  background-color: @_palette--burnt-orange;
	}
	.colorTheme--brown & {
	  background-color: @_palette--brown;
	}
	.colorTheme--red & {
	  background-color: @_palette--red;
	}
	.colorTheme--magenta & {
	  background-color: @_palette--magenta;
	}
	.colorTheme--brick & {
	  background-color: @_palette--brick;
	}
	.colorTheme--purple & {
	  background-color: @_palette--purple;
	}
	.colorTheme--pink & {
	  background-color: @_palette--pink;
	}
	.colorTheme--neon-pink & {
	  background-color: @_palette--neon-pink;
	}
	.colorTheme--pear & {
	  background-color: @_palette--pear;
	}
	.colorTheme--coffee & {
	  background-color: @_palette--coffee;
	}
	.colorTheme--slate & {
	  background-color: @_palette--slate;
	}
	.colorTheme--gray & {
	  background-color: @_palette--gray;
	}
	.colorTheme--blue-gray & {
	  background-color: @_palette--blue-gray;
	}
	.colorTheme--teal & {
	  background-color: @_palette--teal;
	}
	.colorTheme--teal-gray & {
	  background-color: @_palette--teal-gray;
	}
	.colorTheme--silver & {
	  background-color: @_palette--silver;
	}
	.colorTheme--gold & {
	  background-color: @_palette--gold;
	}
	.colorTheme--charcoal & {
	  background-color: @_palette--charcoal;
	}
	.colorTheme--black & {
	  background-color: @_palette--black;
	}
	.colorTheme--periwinkle & {
	  background-color: @_palette--periwinkle;
	}
	.colorTheme--violet & {
	  background-color: @_palette--violet;
	}
	.colorTheme--cherry-red & {
	  background-color: @_palette--cherry-red;
	}
	.colorTheme--plum & {
	  background-color: @_palette--plum;
	}
	.colorTheme--navy & {
	  background-color: @_palette--navy;
	}
	.colorTheme--yoga-green & {
	  background-color: @_palette--yoga-green;
	}
	
}

/*
.pricing-tables--slate,
.pricing-tables .pricing-table--slate {
	.p-table-header,
	a.button {
		background-color: @_palette--slate;
	}
}
*/

/* Tabbed panels */

.tab-panels {
  margin: auto;

	h2 {
		text-transform: capitalize;
	}
	> input[type="radio"] {
	  position: absolute;
	  left: -200vw;
	}
	> label {
	  position: relative;
	  padding: 14px;
	  border-bottom: 0;
	  cursor: pointer;
	  font-weight: 600;
	  float: left;
		.xf-nlBlockTabHeaderTab();
	}
	> label:hover,
	> input:focus + label,
	> input:checked + label {
		background: @xf-nlElement1;
		color: @xf-nlElement3;
	}
	.tab-panel {
	  display: none;
	}
	> input:first-child:checked ~ .panels > .tab-panel:first-child,
	> input:nth-child(3):checked ~ .panels > .tab-panel:nth-child(2),
	> input:nth-child(5):checked ~ .panels > .tab-panel:nth-child(3),
	> input:nth-child(7):checked ~ .panels > .tab-panel:nth-child(4),
	> input:nth-child(9):checked ~ .panels > .tab-panel:nth-child(5),
	> input:nth-child(11):checked ~ .panels > .tab-panel:nth-child(6) {
	  display: block;
	}
	.panels {
		clear: both;
	}
	.tab-panel {
	}
}

ul.checkList--icon {
    margin: 0;
    padding: 0;
    list-style: none;
	
	i {
		vertical-align: middle;
	}
	&.xxl i {
		font-size: 32px;
	}
	&.xl i {
		font-size: 26px;
	}
	&.l i {
		font-size: 20px;
	}
	&.blue i {
		color: @_palette--blue;
	}
	&.red i {
		color: @_palette--red;
	}
	&.aqua i {
		color: @_palette--aqua;
	}
	&.coffee i {
		color: @_palette--coffee;
	}
	&.slate i {
		color: @_palette--slate;
	}
}';
	return $__finalCompiled;
});