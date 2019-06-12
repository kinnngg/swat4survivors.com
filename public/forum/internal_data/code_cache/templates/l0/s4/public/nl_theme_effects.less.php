<?php
// FROM HASH: 93dee5f4bc307dd337ee522f6e6d5e09
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '@media (min-width:@xf-responsiveWide)
{
	.enableThemeEffects {

		.nodeList-header h2.nodeList-title:before {
			content: " ";
			height: 75%;
			width: 75%;
			display: block;
			position:  absolute;
			margin: auto;
			left: 0;
			right: 0;
			background: radial-gradient(at bottom,rgb(255,255,255),rgba(255,255,255,0) 75%);
			bottom: 6px;
			mix-blend-mode: overlay;
			pointer-events:  none;
			transition: .3s opacity;
			opacity: 0;
		}
		.block:hover .nodeList-header h2.nodeList-title:before {
			opacity: 0.5;
		}
		.p-header-content, .p-header-logo, .p-header-logo a, .tableft {
			position: relative;
		}
		.p-header-logo:before {
			content: " ";
			display: inline-block;
			position: absolute;
			width: 100%;
			height: 100%;
			background: radial-gradient(circle, rgba(255,255,255,0), rgba(255,255,255,1));
			mix-blend-mode:  overlay;
			transition: .3s background-size, .3s opacity;
			background-position:  center center;
			background-size: 200% 200%;
			opacity: 0;
			left: 0;
			will-change: opacity;
		}
		.p-header-logo:hover:before {
			background-size: 100% 100%;
			opacity: 0.6;
		}
		.p-header-content:before, .tableft:before, .tableft:after, #avwrap_left:after, #avwrap_right:after {
			content: " ";
			display: inline-block;
			position: absolute;
			background: radial-gradient(circle, rgba(255,255,255,1),rgba(255,255,255,0) 80%);
			animation-iteration-count: infinite;
			animation-timing-function: linear;
			animation-duration: 2s;
			mix-blend-mode:  overlay;
		}
		.p-header-content:before {
			left: 28px;
			top: 47px;
			width: 28px;
			height: 28px;
			animation-name: anim-hleft;
		}
		&.fullWidth .p-header-content:before {
			left: -40px;
		}
		.tableft:before {
			width: 28px;
			height: 28px;
			animation-name: anim-tableft;
			left: 40px;
			top: 44px;
		}
		.tableft:after {
			width: 14px;
			height: 14px;
			animation-name: anim-tableft2;
		}
		#avwrap_left:after {
			width: 14px;
			height: 14px;
			animation-name: avwrap_left;
			animation-duration: 3s;
		}
		#avwrap_right:after {
			width: 14px;
			height: 14px;
			animation-name: avwrap_right;
			animation-duration: 3s;
		}
	}
}

@keyframes anim-hleft {
     0% {
         opacity:.1;
    }
     50% {
         opacity:1;
    }
     100% {
         opacity:.1;
    }
}
 @keyframes anim-tableft {
     0% {
         opacity:.1;
    }
     50% {
         opacity:1;
    }
     100% {
         opacity:.1;
    }
}
 @keyframes anim-tableft2 {
     0% {
         left: 10px;
         top: 12px;
         opacity: 0;
    }
     35% {
         left: 24px;
         top: 5px;
         opacity: 75%;
    }
     70% {
         left: 60px;
         top: 5px;
         opacity: 1;
    }
     100% {
         left: 75px;
         top: 13px;
         opacity: 0;
    }
}
 @keyframes avwrap_left {
     0% {
         opacity:.1;
         left: 20px;
         top: 14px;
    }
     20% {
         opacity:1;
    }
     30% {
         opacity:.1;
         left: 40px;
         top: 34px;
    }
     31% {
         opacity:.1;
         left: 20px;
         top: 14px;
    }
     40% {
         opacity:1;
    }
     50% {
         opacity:.1;
         left: 40px;
         top: 34px;
    }
     100% {
         opacity:.1;
    }
}
 @keyframes avwrap_right {
     0% {
         opacity:.1;
         right: 20px;
         top: 14px;
    }
     20% {
         opacity:1;
    }
     30% {
         opacity:.1;
         right: 40px;
         top: 34px;
    }
     31% {
         opacity:.1;
         right: 20px;
         top: 14px;
    }
     40% {
         opacity:1;
    }
     50% {
         opacity:.1;
         right: 40px;
         top: 34px;
    }
     100% {
         opacity:.1;
    }
}
 @keyframes anim-hleft {
     0% {
         opacity:.1;
    }
     50% {
         opacity:1;
    }
     100% {
         opacity:.1;
    }
}


/* Internet Explorer 10+, Microsoft Edge Browser */
_:-ms-lang(x),
.nodeList-header h2.nodeList-title:before,
.p-header-logo:before,
.p-header-content:before,
.tableft:before,
.tableft:after,
#avwrap_left:after,
#avwrap_right:after {
  display: none !important;
	border: 4px solid #ff0000;
}';
	return $__finalCompiled;
});