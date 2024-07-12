<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>summitRA</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="/image/summitRA.jpeg">
    <link rel="stylesheet" type="text/css" href="/css/header.css">
    <link rel="stylesheet" type="text/css" href="/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/css/reviews.css">
    <link rel="stylesheet" type="text/css" href="/css/analysis.css">
    <link rel="stylesheet" type="text/css" href="/css/variables.css">
    <!-- <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"> -->
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
                    <a href="#"> <img data-v-139b8be6="" width="120" src="../image/login-img.png"></a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header flexBetween">
                    <div class="leftSec">
                        <div class="user-pic">
                            <img data-v-139b8be6="" width="230" src="../image/person.jpg" alt="user picture">
                        </div>
                        <div class="user-info">
                            <span class="user-name">Jhon
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
                                                <img data-v-139b8be6="" width="230" src="../image/person.jpg" alt="user picture">
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
                                <li><a class="menuListItem" href="#"><i class="fa fa-cog" aria-hidden="true"></i>Settings</a> </li>
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
                            <a href="#">
                                <div class="imgIconWrap">
                                    <img width="20" height="20" src="../image/operate.png" alt="sidebar icon">
                                </div>
                                <span> Operate </span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <div class="imgIconWrap">
                                    <img width="20" height="20" src="../image/analyze.png" alt="sidebar icon">
                                </div>
                                <span>Analyze</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#"><img width="15" src="../image/overview.svg" alt="sidebar icon">Overview </a>
                                    </li>
                                    <li>
                                        <a href="/analyze/reviews"><img width="15" src="../image/reviews.svg" alt="sidebar icon">Reviews</a>
                                    </li>
                                    <li>
                                        <a href="#"><img width="15" src="../image/competitor.svg" alt="sidebar icon">Competitor Analysis</a>
                                    </li>
                                    <li>
                                        <a href="#"><img width="15" src="../image/dispatching.svg" alt="sidebar icon">Dispatching</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class=" sidebar-dropdown">
                            <a href="#">
                                <div class="imgIconWrap">
                                    <img width="20" height="20" src="../image/leaderboard.png" alt="sidebar icon">
                                </div>
                                <span>Leaderboard</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#"><img width="15" src="../image/summary.svg" alt="sidebar icon">Summary</a>
                                    </li>
                                    <li>
                                        <a href="#"><img width="15" src="../image/reports.svg" alt="sidebar icon">Reports</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <div class="imgIconWrap">
                                    <img width="20" height="20" src="../image/marketplace.png" alt="sidebar icon">
                                </div>
                                <span>Marketplace</span>
                            </a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img width="15" src="../image/lead-generation.svg" alt="sidebar icon">
                                            Lead Generation
                                        </a>
                                        <!-- <div class="sidebar-submenu-inner">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <div class="imgIconWrap">
                                                            <img width="20" height="20" src="../image/two-way-communication.png" alt="sidebar icon">
                                                        </div>
                                                        Two Way Messaging
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="imgIconWrap">
                                                            <img width="20" height="20" src="../image/chat.png" alt="sidebar icon">
                                                        </div>
                                                        Chat Widget
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> -->
                                    </li>
                                    <!-- <li>
                                        <a href="#"><img width="15" src="../image/employee-retention.svg" alt="sidebar icon">Employee Retention</a>
                                    </li> -->
                                </ul>
                            </div>

                        </li>
                        <li>
                            <a href="#">
                                <div class="imgIconWrap">
                                    <img width="20" height="20" src="../image/referrals.png" alt="sidebar icon">
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
                    <div class="sub-menu-bar flex flex-col items-stretch h-full">
                        <div class="p-20px bg-white">
                            <h2 class="text-2xl">Logs</h2>
                        </div>
                        <div class="px-15px bg-white flex justify-start items-center"><a href="/logs/outbound" class="border-b-2 border-blue-500 router-link-exact-active p-10px" aria-current="page">Outbound</a><a href="/logs/opt-outs" class="p-10px">Opt-Outs</a><a href="/logs/api-tasks" class="p-10px">Api Tasks</a><a href="/logs/api-tasks-v2" class="p-10px">Api Tasks v2</a><a href="/logs/email-jobs" class="p-10px">Email Jobs</a><a href="/logs/sms-jobs" class="p-10px">SMS Jobs</a></div>
                        <div class="flex-grow pt-3">
                            <div class="p-20px bg-white rounded-4px shadow w-full">
                                <div class="relative w-full flex justify-end items-center mb-20px" filename="outbound_logs_2024-07-05T15:14:00.667Z"><button><svg class="svg-inline--fa fa-bars text-xl text-gray-400 hover:text-blue-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path class="" fill="currentColor" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"></path>
                                        </svg></button><!----></div>
                                <div class="filter flex justify-end items-baseline mb-20px"><svg class="svg-inline--fa fa-calendar-day" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar-day" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path class="" fill="currentColor" d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm80 64c-8.8 0-16 7.2-16 16v96c0 8.8 7.2 16 16 16h96c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80z"></path>
                                    </svg>
                                    <p class="font-bold">From</p><input min="2021-06-30" class="p-1" type="date" name="" id="">
                                    <p class="font-bold">To</p><input class="p-1" type="date" name="" id=""><button class="btn btn-blue"><svg class="svg-inline--fa fa-rotate pr-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="rotate" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path class="" fill="currentColor" d="M142.9 142.9c62.2-62.2 162.7-62.5 225.3-1L327 183c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8H463.5c0 0 0 0 0 0H472c13.3 0 24-10.7 24-24V72c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2L413.4 96.6c-87.6-86.5-228.7-86.2-315.8 1C73.2 122 55.6 150.7 44.8 181.4c-5.9 16.7 2.9 34.9 19.5 40.8s34.9-2.9 40.8-19.5c7.7-21.8 20.2-42.3 37.8-59.8zM16 312v7.6 .7V440c0 9.7 5.8 18.5 14.8 22.2s19.3 1.7 26.2-5.2l41.6-41.6c87.6 86.5 228.7 86.2 315.8-1c24.4-24.4 42.1-53.1 52.9-83.7c5.9-16.7-2.9-34.9-19.5-40.8s-34.9 2.9-40.8 19.5c-7.7 21.8-20.2 42.3-37.8 59.8c-62.2 62.2-162.7 62.5-225.3 1L185 329c6.9-6.9 8.9-17.2 5.2-26.2s-12.5-14.8-22.2-14.8H48.4h-.7H40c-13.3 0-24 10.7-24 24z"></path>
                                        </svg>Update </button>
                                </div>
                                <div class="flex justify-between items-center mb-20px">
                                    <div class="flex justify-start items-center p-10px border border-gray-300 rounded-4px w-300px"><svg class="svg-inline--fa fa-magnifying-glass mr-10px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path class="" fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                                        </svg><input class="!outline-none !border-none w-full !ring-transparent p-0" type="search" name="search" id="search" placeholder="Search"></div>
                                    <div class="flex justify-between items-center"><button class="btn btn-blue mr-10px">Pull next 500 logs</button>
                                        <p class="px-16px py-8px border rounded-4px">Loaded 500 of 750 entries</p>
                                    </div>
                                </div>
                                <div class="flex flex-col w-full overflow-x-auto items-stretch">
                                    <table class="mb-15px">
                                        <thead>
                                            <tr>
                                                <th class="text-left px-20px py-10px cursor-pointer">ID <!----></th>
                                                <th class="text-left px-20px py-10px cursor-pointer">Date <svg class="svg-inline--fa fa-angle-down" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path class="" fill="currentColor" d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                                                    </svg></th>
                                                <th class="text-left px-20px py-10px cursor-pointer">Customer <!----></th>
                                                <th class="text-left px-20px py-10px cursor-pointer">Channel <!----></th>
                                                <th class="text-left px-20px py-10px cursor-pointer">Service <!----></th>
                                                <th class="text-left px-20px py-10px cursor-pointer">Status <!----></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="!bg-opacity-50 odd:bg-sky-100">
                                                <td class="px-20px py-15px">e_77374799</td>
                                                <td class="px-20px py-15px">Fri, 05 Jul 2024 15:58:51 GMT</td>
                                                <td class="px-20px py-15px">Tara Eisenbeis</td>
                                                <td class="px-20px py-15px">tarakastnerm@hotmail.com</td>
                                                <td class="px-20px py-15px">pulseCheck</td>
                                                <td class="px-20px py-15px">Not Sent</td>
                                            </tr>
                                            <tr class="!bg-opacity-50 odd:bg-sky-100">
                                                <td class="px-20px py-15px">s_77745610</td>
                                                <td class="px-20px py-15px">Fri, 05 Jul 2024 15:58:51 GMT</td>
                                                <td class="px-20px py-15px">Tara Eisenbeis</td>
                                                <td class="px-20px py-15px">+17273326960</td>
                                                <td class="px-20px py-15px">pulseCheck</td>
                                                <td class="px-20px py-15px">Sent</td>
                                            </tr>
                                            <tr class="!bg-opacity-50 odd:bg-sky-100">
                                                <td class="px-20px py-15px">s_77742294</td>
                                                <td class="px-20px py-15px">Fri, 05 Jul 2024 15:30:45 GMT</td>
                                                <td class="px-20px py-15px">Beachtime Rentals</td>
                                                <td class="px-20px py-15px">+18134847433</td>
                                                <td class="px-20px py-15px">Contact Card After pulseCheck</td>
                                                <td class="px-20px py-15px">Sent</td>
                                            </tr>
                                            <tr class="!bg-opacity-50 odd:bg-sky-100">
                                                <td class="px-20px py-15px">s_77741811</td>
                                                <td class="px-20px py-15px">Fri, 05 Jul 2024 15:25:20 GMT</td>
                                                <td class="px-20px py-15px">Debbie Morroney</td>
                                                <td class="px-20px py-15px">+19417302572</td>
                                                <td class="px-20px py-15px">Contact Card After pulseCheck</td>
                                                <td class="px-20px py-15px">Sent</td>
                                            </tr>
                                            <tr class="!bg-opacity-50 odd:bg-sky-100">
                                                <td class="px-20px py-15px">e_77371614</td>
                                                <td class="px-20px py-15px">Fri, 05 Jul 2024 15:25:19 GMT</td>
                                                <td class="px-20px py-15px"></td>
                                                <td class="px-20px py-15px">caitlyn.seidel@halesac.com</td>
                                                <td class="px-20px py-15px">pulseCheck Notification</td>
                                                <td class="px-20px py-15px">Sent</td>
                                            </tr>
                                            <tr class="!bg-opacity-50 odd:bg-sky-100">
                                                <td class="px-20px py-15px">s_77741546</td>
                                                <td class="px-20px py-15px">Fri, 05 Jul 2024 15:23:53 GMT</td>
                                                <td class="px-20px py-15px">Debbie Morroney</td>
                                                <td class="px-20px py-15px">+19417302572</td>
                                                <td class="px-20px py-15px">Adhoc</td>
                                                <td class="px-20px py-15px">Sent</td>
                                            </tr>
                                            <tr class="!bg-opacity-50 odd:bg-sky-100">
                                                <td class="px-20px py-15px">e_77371297</td>
                                                <td class="px-20px py-15px">Fri, 05 Jul 2024 15:23:23 GMT</td>
                                                <td class="px-20px py-15px"></td>
                                                <td class="px-20px py-15px">caitlyn.seidel@halesac.com</td>
                                                <td class="px-20px py-15px">Social Media Notification</td>
                                                <td class="px-20px py-15px">Sent</td>
                                            </tr>
                                            <tr class="!bg-opacity-50 odd:bg-sky-100">
                                                <td class="px-20px py-15px">s_77741035</td>
                                                <td class="px-20px py-15px">Fri, 05 Jul 2024 15:19:19 GMT</td>
                                                <td class="px-20px py-15px">Larry morroney </td>
                                                <td class="px-20px py-15px">+19417302568</td>
                                                <td class="px-20px py-15px">Contact Card After pulseCheck</td>
                                                <td class="px-20px py-15px">Sent</td>
                                            </tr>
                                            <tr class="!bg-opacity-50 odd:bg-sky-100">
                                                <td class="px-20px py-15px">s_77738995</td>
                                                <td class="px-20px py-15px">Fri, 05 Jul 2024 14:59:38 GMT</td>
                                                <td class="px-20px py-15px">Beachtime Rentals</td>
                                                <td class="px-20px py-15px">+18134847433</td>
                                                <td class="px-20px py-15px">pulseCheck</td>
                                                <td class="px-20px py-15px">Sent</td>
                                            </tr>
                                            <tr class="!bg-opacity-50 odd:bg-sky-100">
                                                <td class="px-20px py-15px">e_77369319</td>
                                                <td class="px-20px py-15px">Fri, 05 Jul 2024 14:59:38 GMT</td>
                                                <td class="px-20px py-15px">Beachtime Rentals</td>
                                                <td class="px-20px py-15px">reservations@beachtimerentals.com</td>
                                                <td class="px-20px py-15px">pulseCheck</td>
                                                <td class="px-20px py-15px">Sent</td>
                                            </tr>
                                            <tr class="!bg-opacity-50 odd:bg-sky-100">
                                                <td class="px-20px py-15px">s_77738743</td>
                                                <td class="px-20px py-15px">Fri, 05 Jul 2024 14:57:20 GMT</td>
                                                <td class="px-20px py-15px">Tom Byerbic</td>
                                                <td class="px-20px py-15px">+17279340323</td>
                                                <td class="px-20px py-15px">Contact Card After pulseCheck</td>
                                                <td class="px-20px py-15px">Sent</td>
                                            </tr>
                                            <tr class="!bg-opacity-50 odd:bg-sky-100">
                                                <td class="px-20px py-15px">e_77369007</td>
                                                <td class="px-20px py-15px">Fri, 05 Jul 2024 14:55:37 GMT</td>
                                                <td class="px-20px py-15px">Rick Hendrickson</td>
                                                <td class="px-20px py-15px">rick_hendrickson@msn.com</td>
                                                <td class="px-20px py-15px">Bio</td>
                                                <td class="px-20px py-15px">Sent</td>
                                            </tr>
                                            <tr class="!bg-opacity-50 odd:bg-sky-100">
                                                <td class="px-20px py-15px">s_77738606</td>
                                                <td class="px-20px py-15px">Fri, 05 Jul 2024 14:55:37 GMT</td>
                                                <td class="px-20px py-15px">Rick Hendrickson</td>
                                                <td class="px-20px py-15px">+17274805641</td>
                                                <td class="px-20px py-15px">Bio</td>
                                                <td class="px-20px py-15px">Sent</td>
                                            </tr>
                                            <tr class="!bg-opacity-50 odd:bg-sky-100">
                                                <td class="px-20px py-15px">e_77368860</td>
                                                <td class="px-20px py-15px">Fri, 05 Jul 2024 14:54:20 GMT</td>
                                                <td class="px-20px py-15px">Debbie Morroney</td>
                                                <td class="px-20px py-15px">morroney@aol.com</td>
                                                <td class="px-20px py-15px">pulseCheck</td>
                                                <td class="px-20px py-15px">Sent</td>
                                            </tr>
                                            <tr class="!bg-opacity-50 odd:bg-sky-100">
                                                <td class="px-20px py-15px">s_77738447</td>
                                                <td class="px-20px py-15px">Fri, 05 Jul 2024 14:54:19 GMT</td>
                                                <td class="px-20px py-15px">Debbie Morroney</td>
                                                <td class="px-20px py-15px">+19417302572</td>
                                                <td class="px-20px py-15px">pulseCheck</td>
                                                <td class="px-20px py-15px">Sent</td>
                                            </tr>
                                            <tr class="!bg-opacity-50 odd:bg-sky-100">
                                                <td class="px-20px py-15px">e_77368510</td>
                                                <td class="px-20px py-15px">Fri, 05 Jul 2024 14:52:13 GMT</td>
                                                <td class="px-20px py-15px"></td>
                                                <td class="px-20px py-15px">caitlyn.seidel@halesac.com</td>
                                                <td class="px-20px py-15px">pulseCheck Notification</td>
                                                <td class="px-20px py-15px">Sent</td>
                                            </tr>
                                            <tr class="!bg-opacity-50 odd:bg-sky-100">
                                                <td class="px-20px py-15px">e_77368340</td>
                                                <td class="px-20px py-15px">Fri, 05 Jul 2024 14:50:16 GMT</td>
                                                <td class="px-20px py-15px"></td>
                                                <td class="px-20px py-15px">caitlyn.seidel@halesac.com</td>
                                                <td class="px-20px py-15px">Social Media Notification</td>
                                                <td class="px-20px py-15px">Sent</td>
                                            </tr>
                                            <tr class="!bg-opacity-50 odd:bg-sky-100">
                                                <td class="px-20px py-15px">s_77737649</td>
                                                <td class="px-20px py-15px">Fri, 05 Jul 2024 14:48:06 GMT</td>
                                                <td class="px-20px py-15px">Larry morroney </td>
                                                <td class="px-20px py-15px">+19417302568</td>
                                                <td class="px-20px py-15px">pulseCheck</td>
                                                <td class="px-20px py-15px">Sent</td>
                                            </tr>
                                            <tr class="!bg-opacity-50 odd:bg-sky-100">
                                                <td class="px-20px py-15px">s_77735665</td>
                                                <td class="px-20px py-15px">Fri, 05 Jul 2024 14:26:33 GMT</td>
                                                <td class="px-20px py-15px">Terry Cross</td>
                                                <td class="px-20px py-15px">+19412430242</td>
                                                <td class="px-20px py-15px">Bio</td>
                                                <td class="px-20px py-15px">Sent</td>
                                            </tr>
                                            <tr class="!bg-opacity-50 odd:bg-sky-100">
                                                <td class="px-20px py-15px">e_77366593</td>
                                                <td class="px-20px py-15px">Fri, 05 Jul 2024 14:26:33 GMT</td>
                                                <td class="px-20px py-15px">Terry Cross</td>
                                                <td class="px-20px py-15px">terryc@wcmanagment.info</td>
                                                <td class="px-20px py-15px">Bio</td>
                                                <td class="px-20px py-15px">Sent</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="pagination flex justify-between items-center">
                                        <div class="pagination-links grid grid-rows-1 grid-flow-col gap-5px"><button class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100"><svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path class="" fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                </svg></button><button class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100" disabled=""><svg class="svg-inline--fa fa-caret-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                                    <path class="" fill="currentColor" d="M9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l128-128c9.2-9.2 22.9-11.9 34.9-6.9s19.8 16.6 19.8 29.6l0 256c0 12.9-7.8 24.6-19.8 29.6s-25.7 2.2-34.9-6.9l-128-128z"></path>
                                                </svg></button><button class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-blue-500 text-white">1</button><button class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100">2</button><button class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100">3</button><button class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100">4</button><button class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100">5</button><button class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100"><svg class="svg-inline--fa fa-caret-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                                    <path class="" fill="currentColor" d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"></path>
                                                </svg></button><button class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100"><svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path class="" fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                                </svg></button></div>
                                        <div class="display-pages px-30px py-7px border rounded-full"> Showing 1 to 20 of 500 entries </div>
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
    <script src="/js/main.js"></script>
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