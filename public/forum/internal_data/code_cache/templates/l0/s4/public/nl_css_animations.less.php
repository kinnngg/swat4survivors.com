<?php
// FROM HASH: 78f95927dc316b0696ea0c5d30f87b05
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '/* Vertical Sliding */

 .slidingVertica l {
     display: inline;
     text-indent: 8px;
}
 .slidingVertical span  {
     animation: topToBottom 12.5s linear infinite 0s;
     color: #00abe9;
     opacity: 0;
     overflow: hidden;
     position: absolute;
}
 .slidingVertical span:nth-child(2) {
     animation-delay: 2.5s;
}
 .slidingVertical span:nth-child(3) {
     animation-delay: 5s;
}
 .slidingVertical span:nth-child(4) {
     animation-delay: 7.5s;
}
 .slidingVertical span:nth-child(5) {
     animation-delay: 10s;
}

/* topToBottom Animation */

 @keyframes topToBottom {
     0%  {
         opacity: 0;
    }
     5%  {
         opacity: 0;
         transform: translateY(-50px);
    }
     10%  {
         opacity: 1;
         transform: translateY(0px);
    }
     25%  {
         opacity: 1;
         transform: translateY(0px);
    }
     30%  {
         opacity: 0;
         transform: translateY(50px);
    }
     80%  {
         opacity: 0;
    }
     100%  {
         opacity: 0;
    }
}

/* Horizontal Sliding */

 .slidingHorizontal {
     display: inline;
     text-indent: 8px;
}
 .slidingHorizontal span {
     animation: leftToRight 12.5s linear infinite 0s;
     color: #00abe9;
     opacity: 0;
     overflow: hidden;
     position: absolute;
}
 .slidingHorizontal span:nth-child(2) {
     animation-delay: 2.5s;
}
 .slidingHorizontal span:nth-child(3) {
     animation-delay: 5s;
}
 .slidingHorizontal span:nth-child(4) {
     animation-delay: 7.5s;
}
 .slidingHorizontal span:nth-child(5) {
     animation-delay: 10s;
}

/* leftToRight Animation */

@keyframes leftToRight {
     0%  {
         opacity: 0;
    }
     5%  {
         opacity: 0;
         transform: translateX(-50px);
    }
     10%  {
         opacity: 1;
         transform: translateX(0px);
    }
     25%  {
         opacity: 1;
         transform: translateX(0px);
    }
     30%  {
         opacity: 0;
         transform: translateX(50px);
    }
     80%  {
         opacity: 0;
    }
     100%  {
         opacity: 0;
    }
}

/* FadeIn */

 .fadeIn {
     display: inline;
     text-indent: 8px;
}
 .fadeIn span {
     animation: fadeEffect 12.5s linear infinite 0s;
     color: #00abe9;
     opacity: 0;
     overflow: hidden;
     position: absolute;
}
 .fadeIn span:nth-child(2) {
     animation-delay: 2.5s;
}
 .fadeIn span:nth-child(3) {
     animation-delay: 5s;
}
 .fadeIn span:nth-child(4) {
     animation-delay: 7.5s;
}
 .fadeIn span:nth-child(5) {
     animation-delay: 10s;
}

/*FadeIn Animation*/

 @keyframes fadeEffect {
     0%  {
         opacity: 0;
    }
     5%  {
         opacity: 0;
         transform: translateY(0px);
    }
     10%  {
         opacity: 1;
         transform: translateY(0px);
    }
     25%  {
         opacity: 1;
         transform: translateY(0px);
    }
     30%  {
         opacity: 0;
         transform: translateY(0px);
    }
     80%  {
         opacity: 0;
    }
     100%  {
         opacity: 0;
    }
}

/* Vertical Flip */

 .verticalFlip {
     display: inline;
     text-indent: 8px;
}
 .verticalFlip span {
     animation: vertical 12.5s linear infinite 0s;
     color: #00abe9;
     opacity: 0;
     overflow: hidden;
     position: absolute;
}
 .verticalFlip span:nth-child(2) {
     animation-delay: 2.5s;
}
 .verticalFlip span:nth-child(3) {
     animation-delay: 5s;
}
 .verticalFlip span:nth-child(4) {
     animation-delay: 7.5s;
}
 .verticalFlip span:nth-child(5) {
     animation-delay: 10s;
}

/* Vertical Flip Animation */

 @keyframes vertical {
     0%  {
         opacity: 0;
    }
     5%  {
         opacity: 0;
         transform: rotateX(180deg);
    }
     10%  {
         opacity: 1;
         transform: translateY(0px);
    }
     25%  {
         opacity: 1;
         transform: translateY(0px);
    }
     30%  {
         opacity: 0;
         transform: translateY(0px);
    }
     80%  {
         opacity: 0;
    }
     100%  {
         opacity: 0;
    }
}

/* Horizontal Flip */

 .horizontalFlip {
     display: inline;
     text-indent: 8px;
}
 .horizontalFlip span {
     animation: horizontal 12.5s linear infinite 0s;
     color: #00abe9;
     opacity: 0;
     overflow: hidden;
     position: absolute;
}
 .horizontalFlip span:nth-child(2) {
     animation-delay: 2.5s;
}
 .horizontalFlip span:nth-child(3) {
     animation-delay: 5s;
}
 .horizontalFlip span:nth-child(4) {
     animation-delay: 7.5s;
}
 .horizontalFlip span:nth-child(5) {
     animation-delay: 10s;
}

/* Horizontal Flip Animation */

 @keyframes horizontal {
     0%  {
         opacity: 0;
    }
     5%  {
         opacity: 0;
         transform: rotateY(180deg);
    }
     10%  {
         opacity: 1;
         transform: translateX(0px);
    }
     25%  {
         opacity: 1;
         transform: translateX(0px);
    }
     30%  {
         opacity: 0;
         transform: translateX(0px);
    }
     80%  {
         opacity: 0;
    }
     100%  {
         opacity: 0;
    }
}

/* AntiClockWise Effect */

 .antiClock {
     display: inline;
     text-indent: 8px;
}
 .antiClock span {
     animation: anti 12.5s linear infinite 0s;
     color: #00abe9;
     opacity: 0;
     overflow: hidden;
     position: absolute;
}
 .antiClock span:nth-child(2) {
     animation-delay: 2.5s;
}
 .antiClock span:nth-child(3) {
     animation-delay: 5s;
}
 .antiClock span:nth-child(4) {
     animation-delay: 7.5s;
}
 .antiClock span:nth-child(5) {
     animation-delay: 10s;
}

/* AntiClockWise Effect Animation */

 @keyframes anti {
     0%  {
         opacity: 0;
    }
     5%  {
         opacity: 0;
         transform: rotate(180deg);
    }
     10%  {
         opacity: 1;
         transform: translateY(0px);
    }
     25%  {
         opacity: 1;
         transform: translateY(0px);
    }
     30%  {
         opacity: 0;
         transform: translateY(0px);
    }
     80%  {
         opacity: 0;
    }
     100%  {
         opacity: 0;
    }
}

/* Pop Effect */

 .popEffect {
     display: inline;
     text-indent: 8px;
}
 .popEffect span {
     animation: pop 12.5s linear infinite 0s;
     color: #00abe9;
     opacity: 0;
     overflow: hidden;
     position: absolute;
}
 .popEffect span:nth-child(2) {
     animation-delay: 2.5s;
}
 .popEffect span:nth-child(3) {
     animation-delay: 5s;
}
 .popEffect span:nth-child(4) {
     animation-delay: 7.5s;
}
 .popEffect span:nth-child(5) {
     animation-delay: 10s;
}

/* Pop Effect Animation */

 @keyframes pop {
     0%  {
         opacity: 0;
    }
     5%  {
         opacity: 0;
         transform: rotate(0deg) scale(0.10) skew(0deg) translate(0px);
    }
     10%  {
         opacity: 1;
         transform: translateY(0px);
    }
     25%  {
         opacity: 1;
         transform: translateY(0px);
    }
     30%  {
         opacity: 0;
         transform: translateY(0px);
    }
     80%  {
         opacity: 0;
    }
     100%  {
         opacity: 0;
    }
}

/* Push Effect */

 .pushEffect {
     display: inline;
     text-indent: 8px;
}
 .pushEffect span {
     animation: push 12.5s linear infinite 0s;
     color: #00abe9;
     opacity: 0;
     overflow: hidden;
     position: absolute;
}
 .pushEffect span:nth-child(2) {
     animation-delay: 2.5s;
}
 .pushEffect span:nth-child(3) {
     animation-delay: 5s;
}
 .pushEffect span:nth-child(4) {
     animation-delay: 7.5s;
}
 .pushEffect span:nth-child(5) {
     animation-delay: 10s;
}

/* Push Effect Animation */

 @keyframes push {
     0%  {
         opacity: 0;
    }
     5%  {
         opacity: 0;
         transform:rotate(0deg) scale(2) skew(0deg) translate(0px);
    }
     10%  {
         opacity: 1;
         transform: translateX(0px);
    }
     25%  {
         opacity: 1;
         transform: translateX(0px);
    }
     30%  {
         opacity: 0;
         transform: translateX(0px);
    }
     80%  {
         opacity: 0;
    }
     100%  {
         opacity: 0;
    }
}';
	return $__finalCompiled;
});