<?php
// FROM HASH: 866c98afcc415ac7f4524f7e76de2c64
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '/* Layout */

.collapseNodes {
	
}
.gridNodes.separateNodes {
	.block--category .block-container,
	> .block-container,
	.block-container--subforums {
		.m-stripElement();
	}
}
.hideIcon .node-icon {
	display: none !important;
}
.hideStatsBlock .node-stats {
	display: none !important;
}
.hideLastPost .node-extra {
	display: none !important;
}
.node-iconStats .pairs.pairs--inline {
	margin-right: 10px;
	
	> dt:after {
		display: none;
	}
}

/* Node grid */

#nodeList.gridNodes,
#subForumsList.gridSubForums {
    .block-body {
        display: flex !important;
        flex-wrap: wrap;
        margin: @xf-nlGridNodeSpacing -(@xf-nlGridNodeSpacing / 2) -@xf-nlGridNodeSpacing -(@xf-nlGridNodeSpacing / 2);
        background: transparent none;
        box-shadow: none;
        border: none;
    }
    .node {
        display: flex;
		flex: 1;
		min-width: @xf-nlNodeGridNodeMinWidth;
    }
    .node-wrapper {
        display: flex;
        flex-direction: column;
        width: 100%;
        width: -webkit-fill-available;
        /* margin: 0 (@xf-nlGridNodeSpacing / 2) @xf-nlGridNodeSpacing (@xf-nlGridNodeSpacing / 2); */
    }
    .node-body {
        display: flex;
        flex-wrap: wrap;
        height: 100%;
        table-layout: unset;
        width: auto;
        flex-direction: row;
        position: relative;
        .xf-nlGridNode();
		
		.collapseNodes& {
			border-radius: 0 !important;
		}
        > * {
            display: block;
            flex: 1;
        }
        .node-icon {
            flex: 0 1 @xf-nlNodeIconBlockWidth;
            .xf-nlGridNodeIconBlock();
        }
        .node-main {
            .xf-nlGridNodeMainBlock();
        }
        h3.node-title a {
            ';
	if ($__templater->fn('property', array('nlImgNodeTitleOverflow', ), false) == 'ellipsis') {
		$__finalCompiled .= '
			.m-overflowEllipsis();
            ';
	}
	$__finalCompiled .= ';
        }
        .node-stats {
            flex: 1 0 100%;
            clear: both;
            width: auto;
            .xf-nlGridNodeStatsBlock();
        }
        .node-extra {
            flex: 1 0 100%;
            clear: both;
            min-width: 0;
			width: auto;
            .xf-nlGridNodeLastPost();
        }
    }
    > .block-container .block-body {
        margin-top: 0;
    }
	
	/* Border radius */
	
	&.separateNodes.imgNodes.nodeImgAbove {
		.node-wrapper {
			border-radius: @xf-nlGridNode--border-radius;
			overflow: hidden;
		}
		.node-body {
			border-top-left-radius: 0;
			border-top-right-radius: 0;
		}
	}
}

@media (min-width: @xf-nlNodeGridMinWidth) {
	#nodeList.gridNodes,
	#subForumsList.gridSubForums {
		.node {
			
			.node-wrapper {
				margin: 0 (@xf-nlGridNodeSpacing / 2) @xf-nlGridNodeSpacing (@xf-nlGridNodeSpacing / 2);
			}
		}
		&.gridNodes-2 {
			.node {
				flex: 1 0 50%;
			}
		}
		&.gridNodes-3 {
			.node {
				flex: 1 0 33.33%;
			}
		}
		&.gridNodes-4 {
			.node {
				flex: 1 0 25%;
				min-width: 250px;
			}
		}
		&.fixedNodes .node {
			flex-grow: 0;
		}
	}
}
@media (max-width: @xf-nlNodeGridMinWidth) {
	#nodeList.gridNodes,
	#subForumsList.gridSubForums {
		.block-body {
			margin: 0;
		}
		.node {
			flex: 1 0 100%;
		}
		.node-wrapper {
			margin: 0 auto @xf-nlGridNodeSpacing;
		}
		.node:nth-of-type(1) .node-wrapper {
			margin-top: @xf-nlGridNodeSpacing;
		}
		.node:last-of-type .node-wrapper {
			margin-bottom: 0;
		}
	}
}

/* Image nodes */

#nodeList.imgNodes,
#subForumsList.imgNodes {
	.nodeImgPreview {
		position: relative;
		background-repeat: no-repeat;
		background-position: @xf-nlImgNodeBgOrigin;
		background-size: cover;
		
		&.has-overlay:before {
			content: " ";
			display: inline-block;
			position: absolute;
			width: 100%;
			height: 100%;
			left: 0;
			top: 0;
			right: 0;
			bottom: 0;
			transition: .3s all;
			opacity: 1;
			.xf-nlImgNodeOverlay();
		}
		&.has-overlay > * {
			position: relative;
		}
	}
	&.nodeImgAbove .nodeImgPreview.has-overlay:before {
		.xf-nlImgNodeOverlayAbove();
	}
	&.nodeImgAbove .node:hover .nodeImgPreview.has-overlay:before {
		.xf-nlImgNodeOverlayAboveHover();
	}
	&.nodeImgBehind .nodeImgPreview.has-overlay:before {
		.xf-nlImgNodeOverlayBehind();
	}
	&.nodeImgBehind .node:hover .nodeImgPreview.has-overlay:before {
		.xf-nlImgNodeOverlayBehindHover();
	}
	&.nodeImgBehind {
		h3.node-title {
			.xf-nlImgNodeTitle();
			
			a {
				color: inherit;
			}
		}
		.node-main a, .node-extra a, .node-stats a {
			.xf-nlImgNodeLink();
		}
		.node-icon {
			.xf-nlImgNodeIconBlock();
							
			i {
				// .xf-nlImgNodeIconWrapper();
								
				&:before {
					.xf-nlImgNodeIcon();
				}
			}
		}
		.node--unread .node-icon i:before {
			.xf-nlImgNodeIconUnread();
		}
		.node-main {
			.xf-nlImgNodeMainBlock();

			.pairs > dt, .node-description, .subNodeLink:before {
				color: @xf-nlImgNodeMainBlock--color;
			}
		}
		.node-stats {
			.xf-nlImgNodeStatsBlock();
							
			.pairs > dt, dl.pairs, dl.pairs i {
				color: @xf-nlImgNodeStatsBlock--color;
			}
		}
		.node-extra {
			.xf-nlImgNodeLastPost();
			
			.node-extra-row {
				color: @xf-nlImgNodeLastPost--color;
			}
		}
	}
	&.nodeImgAbove {
		.nodeImgPreview {
			min-height: @xf-nlNodeImgMinHeight;
			z-index: 50;
		}
	}
}
#subForumsList:not(.gridSubForums).imgNodes.nodeImgAbove .nodeImgPreview {
	display: none !important;
}

';
	if ($__templater->fn('property', array('nlUseImgNodes', ), false) == true) {
		$__finalCompiled .= '
' . $__templater->includeTemplate('nl_node_backgrounds.less', $__vars) . '
';
	}
	$__finalCompiled .= '

/* Misc */

.node-main .node-stats {
	
	font-size: @xf-fontSizeSmall;
	color: @xf-textColorDimmed;
	
	padding: 6px 0;
	flex: none;
	text-align:  left;
	background: transparent none;
	/* Give block type when moved under node description */
	display: block;
	width: 100%;
	
	dl.pairs > *,
	dl.pairs {
		display: inline-block !important;
		margin-right: 2px;
	}
	&.node-stats--iconify .pairs > dt:after {
		content: "";
	}
}

@media (max-width: @xf-responsiveMedium)
{
	#nodeList.gridNodes .node-extra {
		width: 280px;
	}
	#nodeList.imgNodes,
	#subForumsList.imgNodes {
		&.nodeImgBehind .node-body {
			table-layout: auto;
		}
	}
}';
	return $__finalCompiled;
});