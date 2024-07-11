<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>pulseM</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="https://kiliassets.speetra.com/favicon/favicon-32x32.png">
    <link rel="stylesheet" type="text/css" href="/css/header.css">
    <link rel="stylesheet" type="text/css" href="/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/css/reviews.css">
    <link rel="stylesheet" type="text/css" href="/css/analysis.css">
    <link rel="stylesheet" type="text/css" href="/css/variables.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/all.min.css">
</head>
<style type="text/css">
    :root,
    :host {
        --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Solid";
        --fa-font-regular: normal 400 1em/1 "Font Awesome 6 Regular";
        --fa-font-light: normal 300 1em/1 "Font Awesome 6 Light";
        --fa-font-thin: normal 100 1em/1 "Font Awesome 6 Thin";
        --fa-font-duotone: normal 900 1em/1 "Font Awesome 6 Duotone";
        --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands";
    }

    svg:not(:root).svg-inline--fa,
    svg:not(:host).svg-inline--fa {
        overflow: visible;
        box-sizing: content-box;
    }

    i.editProfile {
        right: 17px;
        top: 15px;
        position: absolute;
    }

    .svg-inline--fa {
        display: var(--fa-display, inline-block);
        height: 1em;
        overflow: visible;
        vertical-align: -0.125em;
    }

    .svg-inline--fa.fa-2xs {
        vertical-align: 0.1em;
    }

    .svg-inline--fa.fa-xs {
        vertical-align: 0em;
    }

    .svg-inline--fa.fa-sm {
        vertical-align: -0.0714285705em;
    }

    .svg-inline--fa.fa-lg {
        vertical-align: -0.2em;
    }

    .svg-inline--fa.fa-xl {
        vertical-align: -0.25em;
    }

    .svg-inline--fa.fa-2xl {
        vertical-align: -0.3125em;
    }

    .svg-inline--fa.fa-pull-left {
        margin-right: var(--fa-pull-margin, 0.3em);
        width: auto;
    }

    .svg-inline--fa.fa-pull-right {
        margin-left: var(--fa-pull-margin, 0.3em);
        width: auto;
    }

    .svg-inline--fa.fa-li {
        width: var(--fa-li-width, 2em);
        top: 0.25em;
    }

    .svg-inline--fa.fa-fw {
        width: var(--fa-fw-width, 1.25em);
    }

    .fa-layers svg.svg-inline--fa {
        bottom: 0;
        left: 0;
        margin: auto;
        position: absolute;
        right: 0;
        top: 0;
    }

    .fa-layers-counter,
    .fa-layers-text {
        display: inline-block;
        position: absolute;
        text-align: center;
    }

    .fa-layers {
        display: inline-block;
        height: 1em;
        position: relative;
        text-align: center;
        vertical-align: -0.125em;
        width: 1em;
    }

    .fa-layers svg.svg-inline--fa {
        -webkit-transform-origin: center center;
        transform-origin: center center;
    }

    .fa-layers-text {
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-transform-origin: center center;
        transform-origin: center center;
    }

    .fa-layers-counter {
        background-color: var(--fa-counter-background-color, #ff253a);
        border-radius: var(--fa-counter-border-radius, 1em);
        box-sizing: border-box;
        color: var(--fa-inverse, #fff);
        line-height: var(--fa-counter-line-height, 1);
        max-width: var(--fa-counter-max-width, 5em);
        min-width: var(--fa-counter-min-width, 1.5em);
        overflow: hidden;
        padding: var(--fa-counter-padding, 0.25em 0.5em);
        right: var(--fa-right, 0);
        text-overflow: ellipsis;
        top: var(--fa-top, 0);
        -webkit-transform: scale(var(--fa-counter-scale, 0.25));
        transform: scale(var(--fa-counter-scale, 0.25));
        -webkit-transform-origin: top right;
        transform-origin: top right;
    }

    .fa-layers-bottom-right {
        bottom: var(--fa-bottom, 0);
        right: var(--fa-right, 0);
        top: auto;
        -webkit-transform: scale(var(--fa-layers-scale, 0.25));
        transform: scale(var(--fa-layers-scale, 0.25));
        -webkit-transform-origin: bottom right;
        transform-origin: bottom right;
    }

    .fa-layers-bottom-left {
        bottom: var(--fa-bottom, 0);
        left: var(--fa-left, 0);
        right: auto;
        top: auto;
        -webkit-transform: scale(var(--fa-layers-scale, 0.25));
        transform: scale(var(--fa-layers-scale, 0.25));
        -webkit-transform-origin: bottom left;
        transform-origin: bottom left;
    }

    .fa-layers-top-right {
        top: var(--fa-top, 0);
        right: var(--fa-right, 0);
        -webkit-transform: scale(var(--fa-layers-scale, 0.25));
        transform: scale(var(--fa-layers-scale, 0.25));
        -webkit-transform-origin: top right;
        transform-origin: top right;
    }

    .fa-layers-top-left {
        left: var(--fa-left, 0);
        right: auto;
        top: var(--fa-top, 0);
        -webkit-transform: scale(var(--fa-layers-scale, 0.25));
        transform: scale(var(--fa-layers-scale, 0.25));
        -webkit-transform-origin: top left;
        transform-origin: top left;
    }

    .fa-1x {
        font-size: 1em;
    }

    .fa-2x {
        font-size: 2em;
    }

    .fa-3x {
        font-size: 3em;
    }

    .fa-4x {
        font-size: 4em;
    }

    .fa-5x {
        font-size: 5em;
    }

    .fa-6x {
        font-size: 6em;
    }

    .fa-7x {
        font-size: 7em;
    }

    .fa-8x {
        font-size: 8em;
    }

    .fa-9x {
        font-size: 9em;
    }

    .fa-10x {
        font-size: 10em;
    }

    .fa-2xs {
        font-size: 0.625em;
        line-height: 0.1em;
        vertical-align: 0.225em;
    }

    .fa-xs {
        font-size: 0.75em;
        line-height: 0.0833333337em;
        vertical-align: 0.125em;
    }

    .fa-sm {
        font-size: 0.875em;
        line-height: 0.0714285718em;
        vertical-align: 0.0535714295em;
    }

    .fa-lg {
        font-size: 1.25em;
        line-height: 0.05em;
        vertical-align: -0.075em;
    }

    .fa-xl {
        font-size: 1.5em;
        line-height: 0.0416666682em;
        vertical-align: -0.125em;
    }

    .fa-2xl {
        font-size: 2em;
        line-height: 0.03125em;
        vertical-align: -0.1875em;
    }

    .fa-fw {
        text-align: center;
        width: 1.25em;
    }

    .fa-ul {
        list-style-type: none;
        margin-left: var(--fa-li-margin, 2.5em);
        padding-left: 0;
    }

    .fa-ul>li {
        position: relative;
    }

    .fa-li {
        left: calc(var(--fa-li-width, 2em) * -1);
        position: absolute;
        text-align: center;
        width: var(--fa-li-width, 2em);
        line-height: inherit;
    }

    .fa-border {
        border-color: var(--fa-border-color, #eee);
        border-radius: var(--fa-border-radius, 0.1em);
        border-style: var(--fa-border-style, solid);
        border-width: var(--fa-border-width, 0.08em);
        padding: var(--fa-border-padding, 0.2em 0.25em 0.15em);
    }

    .fa-pull-left {
        float: left;
        margin-right: var(--fa-pull-margin, 0.3em);
    }

    .fa-pull-right {
        float: right;
        margin-left: var(--fa-pull-margin, 0.3em);
    }

    .fa-beat {
        -webkit-animation-name: fa-beat;
        animation-name: fa-beat;
        -webkit-animation-delay: var(--fa-animation-delay, 0);
        animation-delay: var(--fa-animation-delay, 0);
        -webkit-animation-direction: var(--fa-animation-direction, normal);
        animation-direction: var(--fa-animation-direction, normal);
        -webkit-animation-duration: var(--fa-animation-duration, 1s);
        animation-duration: var(--fa-animation-duration, 1s);
        -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
        animation-iteration-count: var(--fa-animation-iteration-count, infinite);
        -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
        animation-timing-function: var(--fa-animation-timing, ease-in-out);
    }

    .fa-bounce {
        -webkit-animation-name: fa-bounce;
        animation-name: fa-bounce;
        -webkit-animation-delay: var(--fa-animation-delay, 0);
        animation-delay: var(--fa-animation-delay, 0);
        -webkit-animation-direction: var(--fa-animation-direction, normal);
        animation-direction: var(--fa-animation-direction, normal);
        -webkit-animation-duration: var(--fa-animation-duration, 1s);
        animation-duration: var(--fa-animation-duration, 1s);
        -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
        animation-iteration-count: var(--fa-animation-iteration-count, infinite);
        -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.28, 0.84, 0.42, 1));
        animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.28, 0.84, 0.42, 1));
    }

    .fa-fade {
        -webkit-animation-name: fa-fade;
        animation-name: fa-fade;
        -webkit-animation-delay: var(--fa-animation-delay, 0);
        animation-delay: var(--fa-animation-delay, 0);
        -webkit-animation-direction: var(--fa-animation-direction, normal);
        animation-direction: var(--fa-animation-direction, normal);
        -webkit-animation-duration: var(--fa-animation-duration, 1s);
        animation-duration: var(--fa-animation-duration, 1s);
        -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
        animation-iteration-count: var(--fa-animation-iteration-count, infinite);
        -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
        animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
    }

    .fa-beat-fade {
        -webkit-animation-name: fa-beat-fade;
        animation-name: fa-beat-fade;
        -webkit-animation-delay: var(--fa-animation-delay, 0);
        animation-delay: var(--fa-animation-delay, 0);
        -webkit-animation-direction: var(--fa-animation-direction, normal);
        animation-direction: var(--fa-animation-direction, normal);
        -webkit-animation-duration: var(--fa-animation-duration, 1s);
        animation-duration: var(--fa-animation-duration, 1s);
        -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
        animation-iteration-count: var(--fa-animation-iteration-count, infinite);
        -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
        animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
    }

    .fa-flip {
        -webkit-animation-name: fa-flip;
        animation-name: fa-flip;
        -webkit-animation-delay: var(--fa-animation-delay, 0);
        animation-delay: var(--fa-animation-delay, 0);
        -webkit-animation-direction: var(--fa-animation-direction, normal);
        animation-direction: var(--fa-animation-direction, normal);
        -webkit-animation-duration: var(--fa-animation-duration, 1s);
        animation-duration: var(--fa-animation-duration, 1s);
        -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
        animation-iteration-count: var(--fa-animation-iteration-count, infinite);
        -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
        animation-timing-function: var(--fa-animation-timing, ease-in-out);
    }

    .fa-shake {
        -webkit-animation-name: fa-shake;
        animation-name: fa-shake;
        -webkit-animation-delay: var(--fa-animation-delay, 0);
        animation-delay: var(--fa-animation-delay, 0);
        -webkit-animation-direction: var(--fa-animation-direction, normal);
        animation-direction: var(--fa-animation-direction, normal);
        -webkit-animation-duration: var(--fa-animation-duration, 1s);
        animation-duration: var(--fa-animation-duration, 1s);
        -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
        animation-iteration-count: var(--fa-animation-iteration-count, infinite);
        -webkit-animation-timing-function: var(--fa-animation-timing, linear);
        animation-timing-function: var(--fa-animation-timing, linear);
    }

    .fa-spin {
        -webkit-animation-name: fa-spin;
        animation-name: fa-spin;
        -webkit-animation-delay: var(--fa-animation-delay, 0);
        animation-delay: var(--fa-animation-delay, 0);
        -webkit-animation-direction: var(--fa-animation-direction, normal);
        animation-direction: var(--fa-animation-direction, normal);
        -webkit-animation-duration: var(--fa-animation-duration, 2s);
        animation-duration: var(--fa-animation-duration, 2s);
        -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
        animation-iteration-count: var(--fa-animation-iteration-count, infinite);
        -webkit-animation-timing-function: var(--fa-animation-timing, linear);
        animation-timing-function: var(--fa-animation-timing, linear);
    }

    .fa-spin-reverse {
        --fa-animation-direction: reverse;
    }

    .fa-pulse,
    .fa-spin-pulse {
        -webkit-animation-name: fa-spin;
        animation-name: fa-spin;
        -webkit-animation-direction: var(--fa-animation-direction, normal);
        animation-direction: var(--fa-animation-direction, normal);
        -webkit-animation-duration: var(--fa-animation-duration, 1s);
        animation-duration: var(--fa-animation-duration, 1s);
        -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
        animation-iteration-count: var(--fa-animation-iteration-count, infinite);
        -webkit-animation-timing-function: var(--fa-animation-timing, steps(8));
        animation-timing-function: var(--fa-animation-timing, steps(8));
    }

    @media (prefers-reduced-motion: reduce) {

        .fa-beat,
        .fa-bounce,
        .fa-fade,
        .fa-beat-fade,
        .fa-flip,
        .fa-pulse,
        .fa-shake,
        .fa-spin,
        .fa-spin-pulse {
            -webkit-animation-delay: -1ms;
            animation-delay: -1ms;
            -webkit-animation-duration: 1ms;
            animation-duration: 1ms;
            -webkit-animation-iteration-count: 1;
            animation-iteration-count: 1;
            transition-delay: 0s;
            transition-duration: 0s;
        }
    }

    @-webkit-keyframes fa-beat {

        0%,
        90% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        45% {
            -webkit-transform: scale(var(--fa-beat-scale, 1.25));
            transform: scale(var(--fa-beat-scale, 1.25));
        }
    }

    @keyframes fa-beat {

        0%,
        90% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        45% {
            -webkit-transform: scale(var(--fa-beat-scale, 1.25));
            transform: scale(var(--fa-beat-scale, 1.25));
        }
    }

    @-webkit-keyframes fa-bounce {
        0% {
            -webkit-transform: scale(1, 1) translateY(0);
            transform: scale(1, 1) translateY(0);
        }

        10% {
            -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
            transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
        }

        30% {
            -webkit-transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
            transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
        }

        50% {
            -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
            transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
        }

        57% {
            -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
            transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
        }

        64% {
            -webkit-transform: scale(1, 1) translateY(0);
            transform: scale(1, 1) translateY(0);
        }

        100% {
            -webkit-transform: scale(1, 1) translateY(0);
            transform: scale(1, 1) translateY(0);
        }
    }

    @keyframes fa-bounce {
        0% {
            -webkit-transform: scale(1, 1) translateY(0);
            transform: scale(1, 1) translateY(0);
        }

        10% {
            -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
            transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
        }

        30% {
            -webkit-transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
            transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
        }

        50% {
            -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
            transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
        }

        57% {
            -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
            transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
        }

        64% {
            -webkit-transform: scale(1, 1) translateY(0);
            transform: scale(1, 1) translateY(0);
        }

        100% {
            -webkit-transform: scale(1, 1) translateY(0);
            transform: scale(1, 1) translateY(0);
        }
    }

    @-webkit-keyframes fa-fade {
        50% {
            opacity: var(--fa-fade-opacity, 0.4);
        }
    }

    @keyframes fa-fade {
        50% {
            opacity: var(--fa-fade-opacity, 0.4);
        }
    }

    @-webkit-keyframes fa-beat-fade {

        0%,
        100% {
            opacity: var(--fa-beat-fade-opacity, 0.4);
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        50% {
            opacity: 1;
            -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
            transform: scale(var(--fa-beat-fade-scale, 1.125));
        }
    }

    @keyframes fa-beat-fade {

        0%,
        100% {
            opacity: var(--fa-beat-fade-opacity, 0.4);
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        50% {
            opacity: 1;
            -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
            transform: scale(var(--fa-beat-fade-scale, 1.125));
        }
    }

    @-webkit-keyframes fa-flip {
        50% {
            -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
            transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
        }
    }

    @keyframes fa-flip {
        50% {
            -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
            transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
        }
    }

    @-webkit-keyframes fa-shake {
        0% {
            -webkit-transform: rotate(-15deg);
            transform: rotate(-15deg);
        }

        4% {
            -webkit-transform: rotate(15deg);
            transform: rotate(15deg);
        }

        8%,
        24% {
            -webkit-transform: rotate(-18deg);
            transform: rotate(-18deg);
        }

        12%,
        28% {
            -webkit-transform: rotate(18deg);
            transform: rotate(18deg);
        }

        16% {
            -webkit-transform: rotate(-22deg);
            transform: rotate(-22deg);
        }

        20% {
            -webkit-transform: rotate(22deg);
            transform: rotate(22deg);
        }

        32% {
            -webkit-transform: rotate(-12deg);
            transform: rotate(-12deg);
        }

        36% {
            -webkit-transform: rotate(12deg);
            transform: rotate(12deg);
        }

        40%,
        100% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
    }

    @keyframes fa-shake {
        0% {
            -webkit-transform: rotate(-15deg);
            transform: rotate(-15deg);
        }

        4% {
            -webkit-transform: rotate(15deg);
            transform: rotate(15deg);
        }

        8%,
        24% {
            -webkit-transform: rotate(-18deg);
            transform: rotate(-18deg);
        }

        12%,
        28% {
            -webkit-transform: rotate(18deg);
            transform: rotate(18deg);
        }

        16% {
            -webkit-transform: rotate(-22deg);
            transform: rotate(-22deg);
        }

        20% {
            -webkit-transform: rotate(22deg);
            transform: rotate(22deg);
        }

        32% {
            -webkit-transform: rotate(-12deg);
            transform: rotate(-12deg);
        }

        36% {
            -webkit-transform: rotate(12deg);
            transform: rotate(12deg);
        }

        40%,
        100% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
    }

    @-webkit-keyframes fa-spin {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes fa-spin {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    .fa-rotate-90 {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    .fa-rotate-180 {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }

    .fa-rotate-270 {
        -webkit-transform: rotate(270deg);
        transform: rotate(270deg);
    }

    .fa-flip-horizontal {
        -webkit-transform: scale(-1, 1);
        transform: scale(-1, 1);
    }

    .fa-flip-vertical {
        -webkit-transform: scale(1, -1);
        transform: scale(1, -1);
    }

    .fa-flip-both,
    .fa-flip-horizontal.fa-flip-vertical {
        -webkit-transform: scale(-1, -1);
        transform: scale(-1, -1);
    }

    .fa-rotate-by {
        -webkit-transform: rotate(var(--fa-rotate-angle, none));
        transform: rotate(var(--fa-rotate-angle, none));
    }

    .fa-stack {
        display: inline-block;
        vertical-align: middle;
        height: 2em;
        position: relative;
        width: 2.5em;
    }

    .fa-stack-1x,
    .fa-stack-2x {
        bottom: 0;
        left: 0;
        margin: auto;
        position: absolute;
        right: 0;
        top: 0;
        z-index: var(--fa-stack-z-index, auto);
    }

    .svg-inline--fa.fa-stack-1x {
        height: 1em;
        width: 1.25em;
    }

    .svg-inline--fa.fa-stack-2x {
        height: 2em;
        width: 2.5em;
    }

    .fa-inverse {
        color: var(--fa-inverse, #fff);
    }

    .sr-only,
    .fa-sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border-width: 0;
    }

    .sr-only-focusable:not(:focus),
    .fa-sr-only-focusable:not(:focus) {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border-width: 0;
    }

    .svg-inline--fa .fa-primary {
        fill: var(--fa-primary-color, currentColor);
        opacity: var(--fa-primary-opacity, 1);
    }

    .svg-inline--fa .fa-secondary {
        fill: var(--fa-secondary-color, currentColor);
        opacity: var(--fa-secondary-opacity, 0.4);
    }

    .svg-inline--fa.fa-swap-opacity .fa-primary {
        opacity: var(--fa-secondary-opacity, 0.4);
    }

    .svg-inline--fa.fa-swap-opacity .fa-secondary {
        opacity: var(--fa-primary-opacity, 1);
    }

    .svg-inline--fa mask .fa-primary,
    .svg-inline--fa mask .fa-secondary {
        fill: black;
    }

    .fad.fa-inverse,
    .fa-duotone.fa-inverse {
        color: var(--fa-inverse, #fff);
    }
</style>

<body>
    <!-- loading -->
    <!-- <div class="loading">
        <div class="dots-loader"></div>
    </div> -->
    <!-- closed -->
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#"> <img data-v-139b8be6="" width="120" src="/image/login-img.png"></a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header flexBetween">
                    <div class="leftSec">
                        <div class="user-pic">
                            <img data-v-139b8be6="" width="230" src="/image/person.jpg" alt="user picture">
                        </div>
                        <div class="user-info">
                            <span class="user-name">Jhon dgfg
                                <strong>Smith</strong>
                            </span>
                            <span class="user-role">Administrator</span>
                        </div>
                    </div>
                    <div class="rightSec">
                        <div class="dropdown toggle">
                            <input id="t1" type="checkbox">
                            <label for="t1" class="cursorPointer"><i class="fa fa-ellipsis-v whiteText" aria-hidden="true"></i></label>
                            <ul class="dropdown-menu-field">
                                <li class="autoHeight">
                                    <div class="dropdown-top flexBetween">
                                        <div class="leftSec">
                                            <div class="user-pic">
                                                <img data-v-139b8be6="" width="230" src="/image/person.jpg" alt="user picture">
                                            </div>
                                            <div class="user-info">
                                                <span class="user-name">Jhon
                                                    <strong>Smith</strong>
                                                </span>
                                                <span class="user-role">Administrator</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a class="menuListItem" href="#"><i class="fa fa-user" aria-hidden="true"></i>My Profile</a></li>
                                <li><a class="menuListItem" href="/settings/dispatch/campaigns"><i class="fa fa-cog" aria-hidden="true"></i>Settings</a> </li>
                                <li><a class="menuListItem" href="/logs/outbound"><i class="fa fa-envelope" aria-hidden="true"></i>Logs</a></li>
                                <li><a class="menuListItem" href="#"><i class="fa-solid fa-right-from-bracket"></i>Logout</a></li>

                            </ul>
                        </div>

                    </div>

                </div>

                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>General</span>
                        </li>
                        <li>
                            <a href="/operate/dispatch">
                                <div class="imgIconWrap">
                                    <img width="20" height="20" src="/image/operate.png" alt="sidebar icon">
                                </div>
                                <span> Operate </span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <div class="imgIconWrap">
                                    <img width="20" height="20" src="/image/analyze.png" alt="sidebar icon">
                                </div>
                                <span>Analyze</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#"><img width="15" src="/image/overview.svg" alt="sidebar icon">Overview </a>
                                    </li>
                                    <li>
                                        <a href="/analyze/reviews/reviews"><img width="15" src="/image/reviews.svg" alt="sidebar icon">Reviews</a>
                                    </li>
                                    <li>
                                        <a href="#"><img width="15" src="/image/competitor.svg" alt="sidebar icon">Competitor Analysis</a>
                                    </li>
                                    <li>
                                        <a href="#"><img width="15" src="/image/dispatching.svg" alt="sidebar icon">Dispatching</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=" sidebar-dropdown">
                            <a href="#">
                                <div class="imgIconWrap">
                                    <img width="20" height="20" src="/image/leaderboard.png" alt="sidebar icon">
                                </div>
                                <span>Leaderboard</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#"><img width="15" src="/image/summary.svg" alt="sidebar icon">Summary</a>
                                    </li>
                                    <li>
                                        <a href="#"><img width="15" src="/image/reports.svg" alt="sidebar icon">Reports</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <div class="imgIconWrap">
                                    <img width="20" height="20" src="/image/marketplace.png" alt="sidebar icon">
                                </div>
                                <span>Marketplace</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img width="15" src="/image/lead-generation.svg" alt="sidebar icon">
                                            Lead Generation
                                        </a>
                                        <!-- <div class="sidebar-submenu-inner">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <div class="imgIconWrap">
                                                            <img width="20" height="20" src="/image/two-way-communication.png" alt="sidebar icon">
                                                        </div>
                                                        Two Way Messaging
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="imgIconWrap">
                                                            <img width="20" height="20" src="/image/chat.png" alt="sidebar icon">
                                                        </div>
                                                        Chat Widget
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> -->
                                    </li>
                                    <!-- <li>
                                        <a href="#"><img width="15" src="/image/employee-retention.svg" alt="sidebar icon">Employee Retention</a>
                                    </li> -->
                                </ul>
                            </div>

                        </li>
                        <li>
                            <a href="#">
                                <div class="imgIconWrap">
                                    <img width="20" height="20" src="/image/referrals.png" alt="sidebar icon">
                                </div>
                                <span>Referrals</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->

        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="headerTop">
                <div class="dropMenuWrap flexBetween">
                    <div class="pageNameWrap">
                        <h3 class="secTitle">Operate</h3>
                    </div>
                    <div class="rightWrap">
                        <div class="location-info flex flex-col justify-center items-end mr-10px">
                            <p class="leading-tight" id="Hales-AC-Service">Hales AC Service</p>
                            <p class="leading-tight">4700 95Th St N</p>
                            <p class="leading-tight">Saint Petersburg, FL US 33708-3728</p>
                        </div>
                    </div>
                </div>
            </div> <!-- <div class="container-fluid"> -->
            <div class="sidebarRightContent">
                <div class="flex-grow flex flex-col items-stretch bg-gray-100 h-auto">
                    <div class="headline bg-white p-20px border-b border-gray-200">
                        <h1 class="text-2xl">Manage Your Account</h1>
                    </div>
                    <div class="flex flex-grow justify-start">
                        <div class="w-1/4 max-w-200px flex flex-shrink-0 justify-start items-start flex-col">
                            <h2 class="text-xl p-15px pt-30px">Company Settings</h2>
                            <div class="p-15px">
                                <div class="links flex flex-col border-l border-gray-400"><a href="/settings/general" class="p-15px">
                                        <svg class="svg-inline--fa fa-chart-line mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chart-line" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path class="" fill="currentColor" d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z">
                                            </path>
                                        </svg> General </a><a href="/settings/dispatch" class="border-blue-500 text-blue-500 border-l-2 p-15px"><svg class="svg-inline--fa fa-arrow-right-arrow-left mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path class="" fill="currentColor" d="M438.6 150.6c12.5-12.5 12.5-32.8 0-45.3l-96-96c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.7 96 32 96C14.3 96 0 110.3 0 128s14.3 32 32 32l306.7 0-41.4 41.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l96-96zm-333.3 352c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 416 416 416c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0 41.4-41.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-96 96c-12.5 12.5-12.5 32.8 0 45.3l96 96z">
                                            </path>
                                        </svg> Dispatch </a><!----><a href="/settings/contact-card" class="p-15px"><svg class="svg-inline--fa fa-address-card mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="address-card" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zm256-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z">
                                            </path>
                                        </svg> Contact Card </a><!----><a href="/settings/billing" class="p-15px"><svg class="svg-inline--fa fa-credit-card mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="credit-card" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96v32H576V96c0-35.3-28.7-64-64-64H64zM576 224H0V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V224zM112 352h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16z">
                                            </path>
                                        </svg> Billing </a></div>
                            </div>
                        </div>
                        <div class="flex-grow pt-20px">
                            <div class="flex flex-col">
                                <div class="sub-menu-bar pl-25px">
                                    <div class="flex justify-start items-center border-b border-gray-300"><a href="/settings/dispatch/campaigns" class="border-b-2 border-blue-500 text-blue-500 router-link-exact-active p-15px" aria-current="page">Campaigns</a><a href="/settings/dispatch/notifications" class="p-15px">Notifications</a><a href="/settings/dispatch/web-widget" class="p-15px">Web
                                            Widget</a><a href="/settings/dispatch/review-widget" class="p-15px">Review Widget</a></div>
                                </div>
                                <div class="p-25px campaigns">
                                    <div data-v-24df4780="" class="flex flex-col items-stretch"><!---->
                                        <div data-v-24df4780="" class="main p-20px bg-white rounded"><!----><!---->
                                            <div data-v-24df4780="" class="search flex w-full mb-20px flex justify-between items-center">
                                                <div data-v-24df4780="" class="search-input border border-gray-400 rounded-4px p-10px flex items-center">
                                                    <svg data-v-24df4780="" class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path class="" fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                                                        </path>
                                                    </svg><input data-v-24df4780="" class="border-0 ml-10px w-300px outline-none" type="search" name="search" id="search" placeholder="Search by name or department">
                                                </div>
                                                <div data-v-24df4780="" class="batch-send flex-center">
                                                    <div class="leftSec">
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <i class="fa fa-plus mr-3" aria-hidden="true"></i> Create Campaign
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modalContent mx-700">
                                                                <div class="modal-content">
                                                                    <form method="post" action="/insert_campaign" enctype="multipart/form-data">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Create campaign</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="grid grid-cols-2 gap-20px auto-rows-auto">
                                                                                <div class="flex w-full flex-col row-span-3">
                                                                                    <img class="w-200px h-auto" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1B85A09AA6CF1/1711571243_original.jpg" alt="Aaron Krasnow">
                                                                                    <p class="text-md">Upload your image</p>
                                                                                    <p class="text-sm mb-3">The preferred size is 200x200</p>
                                                                                    <input id="logo-upload" hidden="" type="file">
                                                                                    <button class="btn btn-blue w-full mb-2">
                                                                                        <input type="file" id="profile-image-upload-1" name="image" style="display: block;" accept="image/*">
                                                                                    </button>
                                                                                </div>
                                                                                <div class="input-group">
                                                                                    <label class="font-bold text-sm" for="campaignName">Campaign Name</label>
                                                                                    <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="Campaign_name" id="campaignName">
                                                                                </div>
                                                                                <div class="input-group row-span-2">
                                                                                    <label class="font-bold text-sm" for="description">Campaign Description</label>
                                                                                    <textarea class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="campaign_description" rows="5" id="description"></textarea>
                                                                                </div>
                                                                                <div class="input-group">
                                                                                    <label class="font-bold text-sm" for="department">Department</label>
                                                                                    <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="campaign_department" id="department">
                                                                                </div>
                                                                                <div class="input-group">
                                                                                    <label class="font-bold text-sm" for="license">License</label>
                                                                                    <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="license" id="license">
                                                                                </div>
                                                                                <div class="input-group">
                                                                                    <label class="font-bold text-sm" for="employeeID">Employee ID <span class="text-xs">(Useful for API Integrations)</span></label>
                                                                                    <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="employee_id" id="employeeID">
                                                                                </div>
                                                                                <div class="input-group">
                                                                                    <label class="font-bold text-sm" for="email">Email <span class="text-xs">(descriptor)</span></label>
                                                                                    <input class="w-full p-5px outline-none border-b focus:border-blue-500" type="text" name="email" id="email">
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary btn-md" data-bs-dismiss="modal">Cancel</button>
                                                                                <button type="submit" class="btn btn-primary btn-md">Submit changes</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- <button data-v-24df4780="" class="btn btn-green ml-2"><svg data-v-24df4780="" class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path class="" fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z">
                                                            </path>
                                                        </svg> </button> -->

                                                    <button type="button" class="btn btn-secondary btn-md ml-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa fa-plus mr-3" aria-hidden="true"></i> Edit Defaults
                                                    </button>

                                                </div>
                                            </div>
                                            <div data-v-24df4780="" class="list">
                                                <table data-v-24df4780="" class="campaigns w-full">
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1B85A09AA6CF1/1711571243_original.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Aaron Krasnow</p>
                                                                <p class="department font-14px text-gray-500">Service Technician</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">With over 15 years of experience and a passion for
                                                                being a great dad and husband, Aaron is not just any technician; he is
                                                                an HVAC wizard, ready to tackle your home comfort challenges. Known for
                                                                his expert skills in indoor air quality improvements. Whether it’s
                                                                maintaining optimal temperature or ensuring your system’s efficiency,
                                                                Aaron is excited to bring his wealth of knowledge and friendly advice
                                                                right to your doorstep. Welcome him into your home for a service
                                                                experience that’s not only reliable but also genuinely cares about your
                                                                comfort and safety.</p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-AARON"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-AARON"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-AARON"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1D24325B63641/1715613782_original.png" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Angelo Vazquez</p>
                                                                <p class="department font-14px text-gray-500">Service Technician</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">Meet Angelo, your go-to service technician at Hales
                                                                AC! With a toolbox in one hand and a fishing rod in the other, Angelo
                                                                has been keeping homes cozy and cool for over six years. A proud father
                                                                of two energetic boys, he’s mastered the art of turning up the fun
                                                                whether he’s striking out at the bowling alley or reeling in a big
                                                                catch. Angelo's passion for making families comfortable shines through
                                                                in every service call. He’s not just about fixing problems—Angelo is
                                                                dedicated to bringing smiles and ensuring every family feels like
                                                                they're in good hands. When Angelo knocks on your door, rest assured,
                                                                comfort is on the way!</p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-AARON"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-AARON"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-AARON"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1C14AED7C0389/1711655622_original.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Austin Harper</p>
                                                                <p class="department font-14px text-gray-500">Install Team</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">With over 6 years of experience and a passion for
                                                                cars, Austin is not just any technician; he is an HVAC wizard, ready to
                                                                tackle your home comfort challenges. Known for his expert skills in
                                                                energy-efficient installations. Whether it’s maintaining optimal
                                                                temperature or ensuring your system’s efficiency, Austin is excited to
                                                                bring his wealth of knowledge and friendly advice right to your
                                                                doorstep. Welcome him into your home for a service experience that’s not
                                                                only reliable but also genuinely cares about your comfort and safety.
                                                            </p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-Austin"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-Austin"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-Austin"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1D42E41457559/1716232132_original.png" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Casey Evett</p>
                                                                <p class="department font-14px text-gray-500">Install Team</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">New to the HVAC world, Casey came from working in
                                                                Solar. </p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-CASEVE"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-CASEVE"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-CASEVE"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1C12F272792B9/1711655796_original.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Chad Carncross</p>
                                                                <p class="department font-14px text-gray-500">Install Team</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">With 10+ years of experience and a passion for the
                                                                outdoors, Chad is not just any technician; he is an HVAC wizard, ready
                                                                to tackle your home comfort challenges. Known for his expert skills in
                                                                energy-efficient installations. Whether it’s maintaining optimal
                                                                temperature or ensuring your system’s efficiency, Chad is excited to
                                                                bring his wealth of knowledge and friendly advice right to your
                                                                doorstep. Welcome him into your home for a service experience that’s not
                                                                only reliable but also genuinely cares about your comfort and safety.
                                                            </p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-CHACAR"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-CHACAR"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-CHACAR"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1DE1BA473C7B1/1718740314_original.png" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Dave Smith</p>
                                                                <p class="department font-14px text-gray-500">Service Technician</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">With almost 30 years of experience in the HVAC
                                                                industry, Dave is a dedicated Service Technician at Hales AC. With a
                                                                passion for Indoor Air Quality (IAQ) and a genuine love for helping
                                                                customers, Dave brings a wealth of experience and enthusiasm to every
                                                                service call. His commitment to ensuring customer satisfaction and
                                                                improving air quality in homes makes him a valued member of the Hales AC
                                                                team. Dave is always ready to assist and provide top-notch service with
                                                                a smile.</p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-DAVSMI"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-DAVSMI"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-DAVSMI"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1D5FD968043A1/1717791207_original.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Derek Kijowski</p>
                                                                <p class="department font-14px text-gray-500">Service Technician</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">With over 4 years of experience and a passion for
                                                                being a great dad, Derek is not just any technician; he is an HVAC
                                                                wizard, ready to tackle your home comfort challenges. Known for his
                                                                expert skills in indoor air quality improvements. Whether it’s
                                                                maintaining optimal temperature or ensuring your system’s efficiency,
                                                                Derek is excited to bring his wealth of knowledge and friendly advice
                                                                right to your doorstep. Welcome him into your home for a service
                                                                experience that’s not only reliable but also genuinely cares about your
                                                                comfort and safety.</p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-DERKIJ"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-DERKIJ"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-DERKIJ"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1B8877CC03CD1/1713973037_original.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">George McPherson</p>
                                                                <p class="department font-14px text-gray-500">Management</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">George is a dedicated and skilled Florida Licensed
                                                                Refrigeration Contractor with over a decade of experience in the field.
                                                                At Hales AC, he brings a wealth of knowledge and expertise in cooling
                                                                systems, ensuring optimal performance and reliability for every project.
                                                                Outside of work, George is a proud father of two boys, an enthusiastic
                                                                amateur chef, an avid hockey player, and a passionate lover of all
                                                                water-related activities. His diverse interests and commitment to
                                                                excellence make him a valuable member of the Hales AC team.</p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-GEOMCP"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-GEOMCP"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-GEOMCP"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1DAE0B68A7A69/1718124834_original.png" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Greg Bark </p>
                                                                <p class="department font-14px text-gray-500">Management</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">Greg has been in the HVAC business for over 18 years!
                                                                On his downtime, he likes to ride his mountain bike, go to the beach,
                                                                and anything sports!</p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-GREBAR"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-GREBAR"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-GREBAR"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px !bg-gray-300">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/logo/1709862934_original.png" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Hales AC Service</p>
                                                                <p class="department font-14px text-gray-500">General</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">We are looking forward to serving you.</p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-null"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><!----><button class="btn btn-blue rounded-2px" id="showSample-null"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1E3CDD0C4EA59/1720630025_original.png" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Jesse Smith</p>
                                                                <p class="department font-14px text-gray-500">Service Technician </p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">Jesse is not just any technician; he is an HVAC
                                                                wizard, ready to tackle your home comfort challenges. Known for his
                                                                expert skills in indoor air quality improvements. Whether it’s
                                                                maintaining optimal temperature or ensuring your system’s efficiency,
                                                                Jesse is excited to bring his wealth of knowledge and friendly advice
                                                                right to your doorstep. Welcome him into your home for a service
                                                                experience that’s not only reliable but also genuinely cares about your
                                                                comfort and safety.
                                                            </p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-JESSMI"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-JESSMI"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-JESSMI"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1DD593824B201/1718547772_original.png" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Johnathan Jordan</p>
                                                                <p class="department font-14px text-gray-500">Service Technician</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">Johnathan (JJ) is a dedicated Service Technician at
                                                                Hales AC. With a passion for Indoor Air Quality (IAQ) and a genuine love
                                                                for helping customers, JJ brings a wealth of experience and enthusiasm
                                                                to every service call. His commitment to ensuring customer satisfaction
                                                                and improving air quality in homes makes him a valued member of the
                                                                Hales AC team. JJ is always ready to assist and provide top-notch
                                                                service with a smile.</p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-JOHJOR"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-JOHJOR"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-JOHJOR"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1D430C7AA39C9/1716232747_original.png" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Kiefer Hutcheson</p>
                                                                <p class="department font-14px text-gray-500">Duct Cleaning </p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">Kiefer has been doing duct cleanings for over a year,
                                                                previously working in the carpet cleaning industry. he has an eye for
                                                                cleanliness.</p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-KIEHUT"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-KIEHUT"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-KIEHUT"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1C13D0A51CB21/1711652566_original.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Paul Hoang</p>
                                                                <p class="department font-14px text-gray-500">Service Technician</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">Paul is not just any technician; he is an HVAC
                                                                wizard, ready to tackle your home comfort challenges. Known for his
                                                                expert skills in .indoor air quality. Whether it’s maintaining optimal
                                                                temperature or ensuring your system’s efficiency, Paul is excited to
                                                                bring his wealth of knowledge and friendly advice right to your
                                                                doorstep. Welcome him into your home for a service experience that’s not
                                                                only reliable but also genuinely cares about your comfort and safety.
                                                            </p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-PAUHOA"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-PAUHOA"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-PAUHOA"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                    <tr class="flex odd:bg-sky-100 odd:bg-opacity-50 py-15px px-10px">
                                                        <td class="employee flex items-center px-10px py-20px flex-shrink-0 w-1/12">
                                                            <div class="profile-img w-full h-auto mr-10px flex justify-center items-center">
                                                                <img w-full="" src="https://kiliassets.speetra.com/prod/account_images/15407/campaign/1D8A897F9D3F9/1717590783_original.jpg" alt="">
                                                            </div>
                                                        </td>
                                                        <td class="employee flex items-center px-10px flex-shrink-0 w-1/6">
                                                            <div class="">
                                                                <p class="name font-17px font-bold">Scott Neubert</p>
                                                                <p class="department font-14px text-gray-500">Service Technician</p>
                                                            </div>
                                                        </td>
                                                        <td class="recipient-info col-span-6 flex flex-col w-1/2 justify-center items-start px-10px">
                                                            <p class="description">Scott Neubert is a dedicated Service Technician at
                                                                Hales AC. With a passion for Indoor Air Quality (IAQ) and a genuine love
                                                                for helping customers, Scott brings a wealth of experience and
                                                                enthusiasm to every service call. His commitment to ensuring customer
                                                                satisfaction and improving air quality in homes makes him a valued
                                                                member of the Hales AC team. Scott is always ready to assist and provide
                                                                top-notch service with a smile.</p>
                                                        </td>
                                                        <td class="flex flex-col justify-center items-end col-span-3 flex-shrink-0 px-10px w-1/4">
                                                            <div class="grid grid-rows-2 grid-flow-col gap-10px"><button class="btn btn-blue w-full rounded-2px" id="editCampaign-undefined"><svg class="svg-inline--fa fa-face-grin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                                        <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                                                        </path>
                                                                    </svg> Edit Campaign </button><button class="btn btn-blue w-full rounded-2px" id="showFieldOps-SCONEU"><svg class="svg-inline--fa fa-mobile-screen-button" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                        <path class="" fill="currentColor" d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                                                        </path>
                                                                    </svg> FieldOps App </button><button class="btn btn-red rounded-2px" id="showFieldOps-SCONEU"><svg class="svg-inline--fa fa-trash" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                                        </path>
                                                                    </svg></button><button class="btn btn-blue rounded-2px" id="showSample-SCONEU"><svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                        <path class="" fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                                                        </path>
                                                                    </svg></button></div>
                                                        </td>
                                                    </tr><!----><!----><!----><!---->
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </div>
    </div>
    </main>
    <!-- page-content" -->
    </div>
    <!-- page-wrapper -->
    <script src="/js/jquery.js"></script>
    <!-- <script src="/js/main.js"></script> -->
    <script src="/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $(".sidebar-dropdown > a").click(function() {
                $(".sidebar-submenu").slideUp(200);
                if ($(this).parent().hasClass("active")) {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this).parent().removeClass("active");
                } else {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this).next(".sidebar-submenu").slideDown(200);
                    $(this).parent().addClass("active");
                }
            });
            $(".sidebar-dropdown-inner > a").click(function() {
                $(".sidebar-submenu-inner").slideUp(200);
                if ($(this).parent().hasClass("active")) {
                    $(".sidebar-dropdown-inner").removeClass("active");
                    $(this).parent().removeClass("active");
                } else {
                    $(".sidebar-dropdown-inner").removeClass("active");
                    $(this).next(".sidebar-submenu-inner").slideDown(200);
                    $(this).parent().addClass("active");
                }
            });

            $("#close-sidebar").click(function() {
                $(".page-wrapper").removeClass("toggled");
            });

            $("#show-sidebar").click(function() {
                $(".page-wrapper").addClass("toggled");
            });
        });
    </script>
    <script>
        $(document).click(function(event) {
            if (
                $('.toggle > input').is(':checked') &&
                !$(event.target).parents('.toggle').is('.toggle')
            ) {
                $('.toggle > input').prop('checked', false);
            }
        })
    </script>
    <script>
        // Initialize tooltips
        $(document).ready(function() {
            $('[data-bs-toggle="tooltip"]').tooltip();
        });
    </script>
    <script>
        $(document).click(function(event) {
            setTimeout(function() {
                $('body')
                    .removeClass('loading')
                    .addClass('loaded');
            }, 3000);
        })
    </script>

</body>

</html>