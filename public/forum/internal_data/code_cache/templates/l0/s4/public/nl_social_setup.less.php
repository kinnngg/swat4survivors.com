<?php
// FROM HASH: 1bce48cee3b6b817ec21627125d81aad
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '@color_facebook: #3b5998;
@color_twitter: #55acee;
@color_googleplus: #dc4e41;
@color_youtube: #b31217;
@color_reddit: #bd081c;
@color_pinterest: #bd081c;
@color_tumblr: #35465c;
@color_instagram: #517fa4;
@color_dribbble: #ea4c89;
@color_linkedin: #0077b5;
@color_deviantart: #4e6252;
@color_telegram: #0088cc;
@color_discord: #7289da;
@color_twitch: #6441a5;
@color_steam: #00adee;
@color_xbox: #52b043;
@color_playstation: #2E6DB4;

/* Social links */

ul.social_icons {
    list-style: none;
    margin: 0;
    padding: 0;
	.m-clearFix();

	li {
		display: inline-block;
		float: left;
		
		a {
			display: block;
			width: @xf-nlSocialIconSize;
			height: @xf-nlSocialIconSize;
			line-height: @xf-nlSocialIconSize;
			text-align: center;
			white-space: nowrap;
		}
		i {
			line-height: inherit;
		}
		&:last-of-type {
			margin-right: 0;
		}
	}
}
#p-topBar, header {
	ul.social_icons {
		.xf-nlHeaderSocialLinksWrapper();
		
		li a {
			display: block;
			text-align: center;
			margin-right: 2px;
			.xf-nlHeaderSocialLinks();
		}
		li a:hover {
			.xf-nlHeaderSocialLinksHover();
		}
	}
}
#p-topBar ul.social_icons li a {
	width: @xf-nlTopBarElementHeight;
	height: @xf-nlTopBarElementHeight;
	line-height: @xf-nlTopBarElementHeight;
}
.p-body, .p-footer {
	ul.social_icons li a {
		width: @xf-nlSocialIconSize;
		height: @xf-nlSocialIconSize;
		line-height: @xf-nlSocialIconSize;
		margin: 0 2px 2px 0;
	}
}
footer ul.social_icons {
	.xf-nlFooterSocialLinksWrapper();

	li a {
		.xf-nlFooterSocialLinksStyle();

		&:hover {
			.xf-nlFooterSocialLinksHover();
		}
	}
}

/* Style setup */

ul.social_icons.style-default a {
	color: @xf-textColorMuted;
	font-size: 20px;
	border-radius: @xf-borderRadiusSmall;
	background-color: transparent;
	
	&:hover {
		color: #fff !important;
	}
	&.follow-fa-facebook-f {
		&:hover {
			background: @color_facebook !important;
		}
	}
	&.follow-fa-twitter {
		&:hover {
			background: @color_twitter !important;
		}
	}
	&.follow-fa-google-plus-g {
		&:hover {
			background: @color_facebook !important;
		}
	}
	&.follow-fa-youtube {
		&:hover {
			background: @color_youtube !important;
		}
	}
	&.follow-fa-reddit-alien {
		&:hover {
			background: @color_reddit !important;
		}
	}
	&.follow-fa-pinterest-p {
		&:hover {
			background: @color_pinterest !important;
		}
	}
	&.follow-fa-tumblr {
		&:hover {
			background: @color_tumblr !important;
		}
	}
	&.follow-fa-instagram {
		&:hover {
			background: @color_instagram !important;
		}
	}
	&.follow-fa-dribbble {
		&:hover {
			background: @color_dribbble !important;
		}
	}
	&.follow-fa-linkedin-in {
		&:hover {
			background: @color_linkedin !important;
		}
	}
	&.follow-fa-deviantart {
		&:hover {
			background: @color_deviantart !important;
		}
	}
	&.follow-fa-telegram-plane {
		&:hover {
			background: @color_telegram !important;
		}
	}
	&.follow-fa-discord {
		&:hover {
			background: @color_discord !important;
		}
	}
	&.follow-fa-twitch {
		&:hover {
			background: @color_twitch !important;
		}
	}
	&.follow-fa-steam {
		&:hover {
			background: @color_steam !important;
		}
	}
	&.follow-fa-xbox {
		&:hover {
			background: @color_xbox !important;
		}
	}
	&.follow-fa-playstation {
		&:hover {
			background: @color_playstation !important;
		}
	}
}

ul.social_icons.style-brand a {
	color: #fff !important;
	
	&.follow-fa-facebook-f {
		background: @color_facebook;
		&:hover {
			background-color: xf-intensify(@color_facebook, 10%) !important;
		}
	}
	&.follow-fa-twitter {
		background: @color_twitter;
		&:hover {
			background-color: xf-intensify(@color_twitter, 10%) !important;
		}
	}
	&.follow-fa-google-plus-g {
		background: @color_facebook;
		&:hover {
			background-color: xf-intensify(@color_facebook, 10%) !important;
		}
	}
	&.follow-fa-youtube {
		background: @color_youtube;
		&:hover {
			background-color: xf-intensify(@color_youtube, 10%) !important;
		}
	}
	&.follow-fa-reddit-alien {
		background: @color_reddit;
		&:hover {
			background-color: xf-intensify(@color_reddit, 10%) !important;
		}
	}
	&.follow-fa-pinterest-p {
		background: @color_pinterest;
		&:hover {
			background-color: xf-intensify(@color_pinterest, 10%) !important;
		}
	}
	&.follow-fa-tumblr {
		background: @color_tumblr;
		&:hover {
			background-color: xf-intensify(@color_tumblr, 10%) !important;
		}
	}
	&.follow-fa-instagram {
		background: @color_instagram;
		&:hover {
			background-color: xf-intensify(@color_instagram, 10%) !important;
		}
	}
	&.follow-fa-dribbble {
		background: @color_dribbble;
		&:hover {
			background-color: xf-intensify(@color_dribbble, 10%) !important;
		}
	}
	&.follow-fa-linkedin-in {
		background: @color_linkedin;
		&:hover {
			background-color: xf-intensify(@color_linkedin, 10%) !important;
		}
	}
	&.follow-fa-deviantart {
		background: @color_deviantart;
		&:hover {
			background-color: xf-intensify(@color_deviantart, 10%) !important;
		}
	}
	&.follow-fa-telegram-plane {
		background: @color_telegram;
		&:hover {
			background-color: xf-intensify(@color_telegram, 10%) !important;
		}
	}
	&.follow-fa-discord {
		background: @color_discord;
		&:hover {
			background-color: xf-intensify(@color_discord, 10%) !important;
		}
	}
	&.follow-fa-twitch {
		background: @color_twitch;
		&:hover {
			background-color: xf-intensify(@color_twitch, 10%) !important;
		}
	}
	&.follow-fa-steam {
		background: @color_steam;
		&:hover {
			background-color: xf-intensify(@color_steam, 10%) !important;
		}
	}
	&.follow-fa-xbox {
		background: @color_xbox;
		&:hover {
			background-color: xf-intensify(@color_xbox, 10%) !important;
		}
	}
	&.follow-fa-playstation {
		background: @color_playstation;
		&:hover {
			background-color: xf-intensify(@color_playstation, 10%) !important;
		}
	}
}
ul.social_icons a.follow-img {
	font-size: inherit !important;
	
	img {
		vertical-align: middle;
	}
}';
	return $__finalCompiled;
});