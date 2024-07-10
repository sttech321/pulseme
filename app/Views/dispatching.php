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
                                        <a href="/analyze/reviews/reviews"><img width="15" src="../image/reviews.svg" alt="sidebar icon">Reviews</a>
                                    </li>
                                    <li>
                                        <a href="#"><img width="15" src="../image/competitor.svg" alt="sidebar icon">Competitor Analysis</a>
                                    </li>
                                    <li>
                                        <a href="/analyze/dispatching"><img width="15" src="../image/dispatching.svg" alt="sidebar icon">Dispatching</a>
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
        <div class="bg-white p-20px">
            <h2 class="text-2xl">Operate</h2>
        </div>
        <div class="bg-white px-15px flex justify-start items-center"><a aria-current="page" href="/operate/dispatch"
                class="border-b-2 border-blue-500 router-link-exact-active p-10px" id="dispatch-link">Dispatch</a><a
                href="/operate/contact-card" class="p-10px" id="contact-card-link">Contact Card</a><a
                href="/operate/quick-actions" class="p-10px" id="quick-actions-link">Quick Actions</a></div>
                <!-- <form action="UploadContent.php" method="POST" enctype="multipart/form-data">
                Technician Image:
                    <input type="file" name="image"> <input type="submit" value="Upload">
                </form> -->
        <div class="flex-grow">
            <div class="p-25px">
                <div class="main p-2rem bg-white rounded">
                    <div class="menu flex w-full justify-end mb-2rem">
                        <div class="dropdown relative"><button><svg class="svg-inline--fa fa-bars" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="bars" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path class="" fill="currentColor"
                                        d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z">
                                    </path>
                                </svg></button><!----></div>
                    </div><!----><!----><!---->
                    <div class="search flex w-full mb-10px flex justify-between items-center">
                        <div class="search-input border border-gray-300 rounded-4px px-10px py-5px flex items-center">
                            <svg class="svg-inline--fa fa-magnifying-glass" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="magnifying-glass" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path class="" fill="currentColor"
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                                </path>
                            </svg><input class="border-0 ml-10px w-300px outline-none" type="search" name="search"
                                id="search" placeholder="Search by name or department">
                        </div>
                        <div class="batch-send"><button class="btn btn-blue"><svg class="svg-inline--fa fa-reply-all"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="reply-all"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path class="" fill="currentColor"
                                        d="M209.4 39.5c-9.1-9.6-24.3-10-33.9-.9L33.8 173.2c-19.9 18.9-19.9 50.7 0 69.6L175.5 377.4c9.6 9.1 24.8 8.7 33.9-.9s8.7-24.8-.9-33.9L66.8 208 208.5 73.4c9.6-9.1 10-24.3 .9-33.9zM352 64c0-12.6-7.4-24.1-19-29.2s-25-3-34.4 5.4l-160 144c-6.7 6.1-10.6 14.7-10.6 23.8s3.9 17.7 10.6 23.8l160 144c9.4 8.5 22.9 10.6 34.4 5.4s19-16.6 19-29.2V288h32c53 0 96 43 96 96c0 30.4-12.8 47.9-22.2 56.7c-5.5 5.1-9.8 12-9.8 19.5c0 10.9 8.8 19.7 19.7 19.7c2.8 0 5.6-.6 8.1-1.9C494.5 467.9 576 417.3 576 304c0-97.2-78.8-176-176-176H352V64z">
                                    </path>
                                </svg> Send to Multiple Customers</button></div>
                    </div>
                    <?php if (!empty($technicians)): ?>
                    <div class="list">
                        <table class="w-full">
                            <?php foreach ($technicians as $technician): ?>
                            <tr class="flex p-20px odd:bg-sky-50">
                                <td class="employee flex items-center w-1/4">
                                <div class="profile-img w-100px h-100px rounded-1/2 bg-center bg-contain bg-no-repeat min-h-50px mr-10px flex-shrink-0"
                                        style="position: relative; background-image: url('<?= $technician['technician_image'] ?>');">

                                        <!-- Example form snippet for uploading profile images --> 
                                        <form method="post" action="<?= base_url('technician/uploadImage') ?>" enctype="multipart/form-data">
                                            <input type="hidden" name="technician_id" value="<?= $technician['id'] ?>">
                                            <label for="profile-image-upload-<?= $technician['id'] ?>" class="upload-icon">
                                            <i class="fa fa-pencil editProfile">*</i>
                                            </label>
                                            <input type="file" id="profile-image-upload-<?= $technician['id'] ?>" name="profile_image" style="display: none;" accept="image/*">
                                            <button type="submit">upload image</button>
                                        </form>

                                    </div>
                                    <div class="flex-grow">
                                        <p class="name"><?= $technician['technician_name'] ?></p>
                                      <!-- <p class="department text-gray-400">Service Technician</p>  -->
                                        <p class="department text-gray-400"><?= $technician['technician_code'] ?></p>
                                    </div>
                                </td>
                                <td class="recipient-info grid grid-cols-6 gap-5px flex-grow">
                                    <div class="input-group col-span-3 flex items-center">
                                        <div class="mr-10px flex justify-center items-center"><svg
                                                class="svg-inline--fa fa-phone text-15px" aria-hidden="true"
                                                focusable="false" data-prefix="fas" data-icon="phone" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path class="" fill="currentColor"
                                                    d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z">
                                                </path>
                                            </svg></div><input
                                            class="w-full bg-transparent outline-none border-b-1 focus:border-blue-500 py-7px"
                                            type="tel" name="phone" id="phone-1B85A09AA6CF1" placeholder="Phone Number">
                                    </div>
                                    <div class="input-group col-span-3 flex items-center">
                                        <div class="mr-10px flex justify-center items-center"><svg
                                                class="svg-inline--fa fa-envelope text-15px" aria-hidden="true"
                                                focusable="false" data-prefix="fas" data-icon="envelope" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path class="" fill="currentColor"
                                                    d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z">
                                                </path>
                                            </svg></div><input
                                            class="w-full bg-transparent outline-none border-b-1 focus:border-blue-500 py-7px"
                                            type="email" name="email" id="email-1B85A09AA6CF1" placeholder="Email">
                                    </div>
                                    <div class="input-group col-span-3 lg:col-span-2 flex items-center">
                                        <div class="mr-10px flex justify-center items-center"><svg
                                                class="svg-inline--fa fa-circle-user text-15px" aria-hidden="true"
                                                focusable="false" data-prefix="fas" data-icon="circle-user" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path class="" fill="currentColor"
                                                    d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z">
                                                </path>
                                            </svg></div><input
                                            class="w-full bg-transparent outline-none border-b-1 focus:border-blue-500 py-7px"
                                            type="text" name="name" id="name-1B85A09AA6CF1"
                                            placeholder="Name (Optional)">
                                    </div>
                                    <div class="input-group col-span-3 lg:col-span-4 flex items-center">
                                        <div class="mr-10px flex justify-center items-center"><svg
                                                class="svg-inline--fa fa-location-dot text-15px" aria-hidden="true"
                                                focusable="false" data-prefix="fas" data-icon="location-dot" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <path class="" fill="currentColor"
                                                    d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z">
                                                </path>
                                            </svg></div><input
                                            class="w-full bg-transparent outline-none border-b-1 focus:border-blue-500 py-7px"
                                            type="text" name="address" id="address-1B85A09AA6CF1"
                                            placeholder="Address (Optional)">
                                    </div>
                                    <div class="flex justify-start items-center py-5px col-span-6">
                                        <div class="flex justify-start items-center col-span-3 cursor-pointer"><svg
                                                class="svg-inline--fa fa-square mr-5px text-17px" aria-hidden="true"
                                                focusable="false" data-prefix="far" data-icon="square" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path class="" fill="currentColor"
                                                    d="M384 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H384zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z">
                                                </path>
                                            </svg>
                                            <p>Mark as test</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="buttons flex flex-col justify-center items-end px-4 w-1/4"><button
                                        class="btn btn-blue max-w-200px w-full rounded-2px mb-2"
                                        id="sendBio-1B85A09AA6CF1"><svg class="svg-inline--fa fa-user text-15px"
                                            aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user"
                                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path class="" fill="currentColor"
                                                d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                                            </path>
                                        </svg> Send Bio</button><button
                                        class="btn btn-green max-w-200px w-full rounded-2px"
                                        id="sendPulseCheck-1B85A09AA6CF1"><svg
                                            class="svg-inline--fa fa-face-grin text-15px" aria-hidden="true"
                                            focusable="false" data-prefix="fas" data-icon="face-grin" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path class="" fill="currentColor"
                                                d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z">
                                            </path>
                                        </svg> Send pulseCheck</button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                    <?php else: ?>
                        <p>No technician data available.</p>
                    <?php endif; ?> 
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var uploadIcon = document.getElementById('upload-icon-<?= $technician['id'] ?>');
        var fileInput = document.getElementById('profile-image-upload-<?= $technician['id'] ?>');
        var form = document.getElementById('upload-form-<?= $technician['id'] ?>');

        var fileSelected = false;

        uploadIcon.addEventListener('click', function(e) {
            e.preventDefault();
            if (fileSelected) {
                form.submit();
            } else {
                fileInput.click();
            }
        });

        fileInput.addEventListener('change', function() {
            if (fileInput.files.length > 0) {
                fileSelected = true;
                // Optionally, change the icon to indicate a file has been selected
                // uploadIcon.innerHTML = '<i class="fa fa-upload"></i>';
            }
        });
    });
</script>
</body>

</html>