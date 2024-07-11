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
                                <div class="links flex flex-col border-l border-gray-400"><a href="/settings/general" class="border-blue-500 text-blue-500 border-l-2 p-15px"><svg class="svg-inline--fa fa-chart-line mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chart-line" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path class="" fill="currentColor" d="M64 64c0-17.7-14.3-32-32-32S0 46.3 0 64V400c0 44.2 35.8 80 80 80H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H80c-8.8 0-16-7.2-16-16V64zm406.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L320 210.7l-57.4-57.4c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L240 221.3l57.4 57.4c12.5 12.5 32.8 12.5 45.3 0l128-128z"></path>
                                        </svg> General </a><a href="/settings/dispatch" class="p-15px" tabindex="0"><svg class="svg-inline--fa fa-arrow-right-arrow-left mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right-arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path class="" fill="currentColor" d="M438.6 150.6c12.5-12.5 12.5-32.8 0-45.3l-96-96c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.7 96 32 96C14.3 96 0 110.3 0 128s14.3 32 32 32l306.7 0-41.4 41.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l96-96zm-333.3 352c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 416 416 416c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0 41.4-41.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-96 96c-12.5 12.5-12.5 32.8 0 45.3l96 96z"></path>
                                        </svg> Dispatch </a><!----><a href="/settings/contact-card/contact-information" class="p-15px"><svg class="svg-inline--fa fa-address-card mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="address-card" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm-32-96a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zm256-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                                        </svg> Contact Card </a><!----><a href="/settings/billing" class="p-15px"><svg class="svg-inline--fa fa-credit-card mr-5px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="credit-card" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path class="" fill="currentColor" d="M64 32C28.7 32 0 60.7 0 96v32H576V96c0-35.3-28.7-64-64-64H64zM576 224H0V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V224zM112 352h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16z"></path>
                                        </svg> Billing </a></div>
                            </div>
                        </div>
                        <div class="flex-grow pt-20px">
                            <div class="flex flex-col">
                                <div class="sub-menu-bar pl-25px">
                                    <div class="flex justify-start items-center border-b border-gray-300"><a aria-current="page" href="/settings/general/connect-social-media" class="border-b-2 border-blue-500 text-blue-500 router-link-exact-active p-15px">Connect Social Media</a><a href="/settings/general/branding" class="p-15px">Branding</a><a href="/settings/general/users" class="p-15px">Users</a><a href="/settings/general/reporting" class="p-15px">Reporting</a></div>
                                </div>
                                <div class="p-25px">
                                    <div class="main grid grid-cols-2 <xl:grid-cols-1 gap-20px">
                                        <div data-v-29953f45="" class="card p-20px bg-white rounded-4px shadow xl:row-span-3">
                                            <h2 data-v-29953f45="" class="text-28px font-light">Google Place ID</h2>
                                            <div data-v-29953f45="" class="map w-full bg-gray-500 my-20px -z-1">
                                                <div data-v-29953f45="" class="relative h-400px"><input class="absolute top-3 left-3 w-3/4 border-gray-500 rounded-full p-2 z-1 pac-target-input" placeholder="Search for a location..." autocomplete="off">
                                                    <div class="vue-map-container w-full h-full">
                                                        <div class="vue-map" style="position: relative; overflow: hidden;">
                                                            <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                                                <div><button draggable="false" aria-label="Keyboard shortcuts" title="Keyboard shortcuts" type="button" style="background: none transparent; display: block; border: none; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; z-index: 1000002; outline-offset: 3px; right: 0px; bottom: 0px; transform: translateX(100%);"></button></div>
                                                                <div tabindex="0" aria-label="Map" aria-roledescription="map" role="region" aria-describedby="6C4ECF98-7DC4-4269-AAC5-8DE7517BD962" style="position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;">
                                                                    <div id="6C4ECF98-7DC4-4269-AAC5-8DE7517BD962" style="display: none;">
                                                                        <div class="LGLeeN-keyboard-shortcuts-view">
                                                                            <table>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td><kbd aria-label="Left arrow">←</kbd></td>
                                                                                        <td aria-label="Move left.">Move left</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><kbd aria-label="Right arrow">→</kbd></td>
                                                                                        <td aria-label="Move right.">Move right</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><kbd aria-label="Up arrow">↑</kbd></td>
                                                                                        <td aria-label="Move up.">Move up</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><kbd aria-label="Down arrow">↓</kbd></td>
                                                                                        <td aria-label="Move down.">Move down</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><kbd>+</kbd></td>
                                                                                        <td aria-label="Zoom in.">Zoom in</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><kbd>-</kbd></td>
                                                                                        <td aria-label="Zoom out.">Zoom out</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><kbd>Home</kbd></td>
                                                                                        <td aria-label="Jump left by 75%.">Jump left by 75%</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><kbd>End</kbd></td>
                                                                                        <td aria-label="Jump right by 75%.">Jump right by 75%</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><kbd>Page Up</kbd></td>
                                                                                        <td aria-label="Jump up by 75%.">Jump up by 75%</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><kbd>Page Down</kbd></td>
                                                                                        <td aria-label="Jump down by 75%.">Jump down by 75%</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                                                    <div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: default; touch-action: pan-x pan-y;">
                                                                        <div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform; transform: translate(0px, 0px);">
                                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                                    <div style="position: absolute; z-index: 985; transform: matrix(1, 0, 0, 1, -250, -79);">
                                                                                        <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                                                                                            <div style="width: 256px; height: 256px;"></div>
                                                                                        </div>
                                                                                        <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                                                                            <div style="width: 256px; height: 256px;"></div>
                                                                                        </div>
                                                                                        <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;">
                                                                                            <div style="width: 256px; height: 256px;"></div>
                                                                                        </div>
                                                                                        <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;">
                                                                                            <div style="width: 256px; height: 256px;"></div>
                                                                                        </div>
                                                                                        <div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px;">
                                                                                            <div style="width: 256px; height: 256px;"></div>
                                                                                        </div>
                                                                                        <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;">
                                                                                            <div style="width: 256px; height: 256px;"></div>
                                                                                        </div>
                                                                                        <div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px;">
                                                                                            <div style="width: 256px; height: 256px;"></div>
                                                                                        </div>
                                                                                        <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;">
                                                                                            <div style="width: 256px; height: 256px;"></div>
                                                                                        </div>
                                                                                        <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;">
                                                                                            <div style="width: 256px; height: 256px;"></div>
                                                                                        </div>
                                                                                        <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;">
                                                                                            <div style="width: 256px; height: 256px;"></div>
                                                                                        </div>
                                                                                        <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                                                                                            <div style="width: 256px; height: 256px;"></div>
                                                                                        </div>
                                                                                        <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;">
                                                                                            <div style="width: 256px; height: 256px;"></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                                                    <div style="position: absolute; z-index: 985; transform: matrix(1, 0, 0, 1, -250, -79);">
                                                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;"></div>
                                                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div>
                                                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;"></div>
                                                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -256px;"></div>
                                                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: -256px;"></div>
                                                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 0px;"></div>
                                                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 256px;"></div>
                                                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;"></div>
                                                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;"></div>
                                                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;"></div>
                                                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div>
                                                                                        <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div style="width: 26px; height: 37px; overflow: hidden; position: absolute; left: -13px; top: -18px; z-index: 19;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi3.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 26px; height: 37px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; opacity: 1;"></div>
                                                                            </div>
                                                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                                <div style="position: absolute; z-index: 985; transform: matrix(1, 0, 0, 1, -250, -79);">
                                                                                    <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i8850!3i13746!4i256!2m3!1e4!2st!3i697!2m3!1e0!2sr!3i697446505!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sTerrain!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!1e3&amp;key=AIzaSyDC_9G82Fa3wdn-p4QID43b_RVrJme66fQ&amp;token=73958" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                                    <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i8849!3i13746!4i256!2m3!1e4!2st!3i697!2m3!1e0!2sr!3i697446505!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sTerrain!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!1e3&amp;key=AIzaSyDC_9G82Fa3wdn-p4QID43b_RVrJme66fQ&amp;token=36108" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                                    <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i8849!3i13745!4i256!2m3!1e4!2st!3i697!2m3!1e0!2sr!3i697446505!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sTerrain!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!1e3&amp;key=AIzaSyDC_9G82Fa3wdn-p4QID43b_RVrJme66fQ&amp;token=39041" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                                    <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i8850!3i13745!4i256!2m3!1e4!2st!3i697!2m3!1e0!2sr!3i697446505!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sTerrain!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!1e3&amp;key=AIzaSyDC_9G82Fa3wdn-p4QID43b_RVrJme66fQ&amp;token=76891" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                                    <div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i8851!3i13745!4i256!2m3!1e4!2st!3i697!2m3!1e0!2sr!3i697446505!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sTerrain!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!1e3&amp;key=AIzaSyDC_9G82Fa3wdn-p4QID43b_RVrJme66fQ&amp;token=114253" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                                    <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i8851!3i13746!4i256!2m3!1e4!2st!3i697!2m3!1e0!2sr!3i697446505!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sTerrain!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!1e3&amp;key=AIzaSyDC_9G82Fa3wdn-p4QID43b_RVrJme66fQ&amp;token=111320" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                                    <div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i8851!3i13747!4i256!2m3!1e4!2st!3i697!2m3!1e0!2sr!3i697446505!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sTerrain!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!1e3&amp;key=AIzaSyDC_9G82Fa3wdn-p4QID43b_RVrJme66fQ&amp;token=108387" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                                    <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i8850!3i13747!4i256!2m3!1e4!2st!3i697!2m3!1e0!2sr!3i697446505!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sTerrain!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!1e3&amp;key=AIzaSyDC_9G82Fa3wdn-p4QID43b_RVrJme66fQ&amp;token=71025" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                                    <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i8849!3i13747!4i256!2m3!1e4!2st!3i697!2m3!1e0!2sr!3i697446505!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sTerrain!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!1e3&amp;key=AIzaSyDC_9G82Fa3wdn-p4QID43b_RVrJme66fQ&amp;token=33175" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                                    <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i8848!3i13747!4i256!2m3!1e4!2st!3i697!2m3!1e0!2sr!3i697446505!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sTerrain!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!1e3&amp;key=AIzaSyDC_9G82Fa3wdn-p4QID43b_RVrJme66fQ&amp;token=126884" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                                    <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i8848!3i13746!4i256!2m3!1e4!2st!3i697!2m3!1e0!2sr!3i697446505!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sTerrain!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!1e3&amp;key=AIzaSyDC_9G82Fa3wdn-p4QID43b_RVrJme66fQ&amp;token=129817" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                                    <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i8848!3i13745!4i256!2m3!1e4!2st!3i697!2m3!1e0!2sr!3i697446505!3m12!2sen-US!3sUS!5e18!12m4!1e68!2m2!1sset!2sTerrain!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!1e3&amp;key=AIzaSyDC_9G82Fa3wdn-p4QID43b_RVrJme66fQ&amp;token=1679" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                                                            <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform; transform: translate(0px, 0px);">
                                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><span id="A1A40344-5D17-473F-809A-26E8D0AD1172" style="display: none;">To navigate, press the arrow keys.</span>
                                                                                    <div role="button" style="width: 26px; height: 37px; overflow: hidden; position: absolute; left: -13px; top: -18px; z-index: 19;" tabindex="0" aria-describedby="A1A40344-5D17-473F-809A-26E8D0AD1172"><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" usemap="#gmimap6" style="width: 26px; height: 37px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"><map name="gmimap6" id="gmimap6"><area log="miw" coords="13,0,4,3.5,0,12,2.75,21,13,37,23.5,21,26,12,22,3.5" shape="poly" tabindex="-1" title="" style="display: inline; position: absolute; left: 0px; top: 0px; cursor: pointer; touch-action: none;"></map></div>
                                                                                </div>
                                                                                <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;">
                                                                                    <div style="cursor: default; position: absolute; top: 0px; left: 0px; z-index: -140;">
                                                                                        <div class="gm-style-iw-a" style="position: absolute; left: 0px; top: 19px;">
                                                                                            <div class="gm-style-iw-t" style="right: 0px; bottom: 48px;">
                                                                                                <div role="dialog" tabindex="-1" class="gm-style-iw gm-style-iw-c" aria-labelledby="F78E5576-E2CE-4717-9F27-856AADB7E7D7" style="padding-inline-end: 0px; padding-bottom: 0px; padding-top: 0px; max-width: 648px; max-height: 232px; min-width: 0px;">
                                                                                                    <div class="gm-style-iw-chr">
                                                                                                        <div class="gm-style-iw-ch" id="F78E5576-E2CE-4717-9F27-856AADB7E7D7"></div><button draggable="false" aria-label="Close" title="Close" type="button" class="gm-ui-hover-effect" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; width: 48px; height: 48px;" tabindex="0"><span style="mask-image: url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22/%3E%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22/%3E%3C/svg%3E&quot;); pointer-events: none; display: block; width: 24px; height: 24px; margin: 12px;"></span></button>
                                                                                                    </div>
                                                                                                    <div class="gm-style-iw-d" style="overflow: scroll; max-height: 214px;">
                                                                                                        <div class="!max-w-200px">
                                                                                                            <div class="name font-bold">Hales AC</div>
                                                                                                            <div class="address">4700 95th St N, St. Petersburg, FL 33708, USA</div><!---->
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="gm-style-iw-tc"></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="gm-style-moc" style="z-index: 4; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                                                                            <p class="gm-style-mot"></p>
                                                                        </div>
                                                                    </div><iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none; opacity: 0;"></iframe>
                                                                    <div style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"></div>
                                                                    <div></div>
                                                                    <div></div>
                                                                    <div></div>
                                                                    <div></div>
                                                                    <div><button draggable="false" aria-label="Toggle fullscreen view" title="Toggle fullscreen view" type="button" aria-pressed="false" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; display: none; top: 0px; right: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E" alt="" style="height: 18px; width: 18px;"></button></div>
                                                                    <div></div>
                                                                    <div></div>
                                                                    <div></div>
                                                                    <div></div>
                                                                    <div></div>
                                                                    <div>
                                                                        <div style="margin: 0px 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" rel="noopener" title="Open this area in Google Maps (opens a new window)" aria-label="Open this area in Google Maps (opens a new window)" href="https://maps.google.com/maps?ll=27.816652,-82.771245&amp;z=15&amp;t=p&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" style="display: inline;">
                                                                                <div style="width: 66px; height: 26px;"><img alt="Google" src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2069%2029%22%3E%3Cg%20opacity%3D%22.6%22%20fill%3D%22%23fff%22%20stroke%3D%22%23fff%22%20stroke-width%3D%221.5%22%3E%3Cpath%20d%3D%22M17.4706%207.33616L18.0118%206.79504%2017.4599%206.26493C16.0963%204.95519%2014.2582%203.94522%2011.7008%203.94522c-4.613699999999999%200-8.50262%203.7551699999999997-8.50262%208.395779999999998C3.19818%2016.9817%207.0871%2020.7368%2011.7008%2020.7368%2014.1712%2020.7368%2016.0773%2019.918%2017.574%2018.3689%2019.1435%2016.796%2019.5956%2014.6326%2019.5956%2012.957%2019.5956%2012.4338%2019.5516%2011.9316%2019.4661%2011.5041L19.3455%2010.9012H10.9508V14.4954H15.7809C15.6085%2015.092%2015.3488%2015.524%2015.0318%2015.8415%2014.403%2016.4629%2013.4495%2017.1509%2011.7008%2017.1509%209.04835%2017.1509%206.96482%2015.0197%206.96482%2012.341%206.96482%209.66239%209.04835%207.53119%2011.7008%207.53119%2013.137%207.53119%2014.176%208.09189%2014.9578%208.82348L15.4876%209.31922%2016.0006%208.80619%2017.4706%207.33616z%22/%3E%3Cpath%20d%3D%22M24.8656%2020.7286C27.9546%2020.7286%2030.4692%2018.3094%2030.4692%2015.0594%2030.4692%2011.7913%2027.953%209.39011%2024.8656%209.39011%2021.7783%209.39011%2019.2621%2011.7913%2019.2621%2015.0594c0%203.25%202.514499999999998%205.6692%205.6035%205.6692zM24.8656%2012.8282C25.8796%2012.8282%2026.8422%2013.6652%2026.8422%2015.0594%2026.8422%2016.4399%2025.8769%2017.2905%2024.8656%2017.2905%2023.8557%2017.2905%2022.8891%2016.4331%2022.8891%2015.0594%2022.8891%2013.672%2023.853%2012.8282%2024.8656%2012.8282z%22/%3E%3Cpath%20d%3D%22M35.7511%2017.2905v0H35.7469C34.737%2017.2905%2033.7703%2016.4331%2033.7703%2015.0594%2033.7703%2013.672%2034.7343%2012.8282%2035.7469%2012.8282%2036.7608%2012.8282%2037.7234%2013.6652%2037.7234%2015.0594%2037.7234%2016.4439%2036.7554%2017.2962%2035.7511%2017.2905zM35.7387%2020.7286C38.8277%2020.7286%2041.3422%2018.3094%2041.3422%2015.0594%2041.3422%2011.7913%2038.826%209.39011%2035.7387%209.39011%2032.6513%209.39011%2030.1351%2011.7913%2030.1351%2015.0594%2030.1351%2018.3102%2032.6587%2020.7286%2035.7387%2020.7286z%22/%3E%3Cpath%20d%3D%22M51.953%2010.4357V9.68573H48.3999V9.80826C47.8499%209.54648%2047.1977%209.38187%2046.4808%209.38187%2043.5971%209.38187%2041.0168%2011.8998%2041.0168%2015.0758%2041.0168%2017.2027%2042.1808%2019.0237%2043.8201%2019.9895L43.7543%2020.0168%2041.8737%2020.797%2041.1808%2021.0844%2041.4684%2021.7772C42.0912%2023.2776%2043.746%2025.1469%2046.5219%2025.1469%2047.9324%2025.1469%2049.3089%2024.7324%2050.3359%2023.7376%2051.3691%2022.7367%2051.953%2021.2411%2051.953%2019.2723v-8.8366zm-7.2194%209.9844L44.7334%2020.4196C45.2886%2020.6201%2045.878%2020.7286%2046.4808%2020.7286%2047.1616%2020.7286%2047.7866%2020.5819%2048.3218%2020.3395%2048.2342%2020.7286%2048.0801%2021.0105%2047.8966%2021.2077%2047.6154%2021.5099%2047.1764%2021.7088%2046.5219%2021.7088%2045.61%2021.7088%2045.0018%2021.0612%2044.7336%2020.4201zM46.6697%2012.8282C47.6419%2012.8282%2048.5477%2013.6765%2048.5477%2015.084%2048.5477%2016.4636%2047.6521%2017.2987%2046.6697%2017.2987%2045.6269%2017.2987%2044.6767%2016.4249%2044.6767%2015.084%2044.6767%2013.7086%2045.6362%2012.8282%2046.6697%2012.8282zM55.7387%205.22083v-.75H52.0788V20.4412H55.7387V5.220829999999999z%22/%3E%3Cpath%20d%3D%22M63.9128%2016.0614L63.2945%2015.6492%2062.8766%2016.2637C62.4204%2016.9346%2061.8664%2017.3069%2061.0741%2017.3069%2060.6435%2017.3069%2060.3146%2017.2088%2060.0544%2017.0447%2059.9844%2017.0006%2059.9161%2016.9496%2059.8498%2016.8911L65.5497%2014.5286%2066.2322%2014.2456%2065.9596%2013.5589%2065.7406%2013.0075C65.2878%2011.8%2063.8507%209.39832%2060.8278%209.39832%2057.8445%209.39832%2055.5034%2011.7619%2055.5034%2015.0676%2055.5034%2018.2151%2057.8256%2020.7369%2061.0659%2020.7369%2063.6702%2020.7369%2065.177%2019.1378%2065.7942%2018.2213L66.2152%2017.5963%2065.5882%2017.1783%2063.9128%2016.0614zM61.3461%2012.8511L59.4108%2013.6526C59.7903%2013.0783%2060.4215%2012.7954%2060.9017%2012.7954%2061.067%2012.7954%2061.2153%2012.8161%2061.3461%2012.8511z%22/%3E%3C/g%3E%3Cpath%20d%3D%22M11.7008%2019.9868C7.48776%2019.9868%203.94818%2016.554%203.94818%2012.341%203.94818%208.12803%207.48776%204.69522%2011.7008%204.69522%2014.0331%204.69522%2015.692%205.60681%2016.9403%206.80583L15.4703%208.27586C14.5751%207.43819%2013.3597%206.78119%2011.7008%206.78119%208.62108%206.78119%206.21482%209.26135%206.21482%2012.341%206.21482%2015.4207%208.62108%2017.9009%2011.7008%2017.9009%2013.6964%2017.9009%2014.8297%2017.0961%2015.5606%2016.3734%2016.1601%2015.7738%2016.5461%2014.9197%2016.6939%2013.7454h-4.9931V11.6512h7.0298C18.8045%2012.0207%2018.8456%2012.4724%2018.8456%2012.957%2018.8456%2014.5255%2018.4186%2016.4637%2017.0389%2017.8434%2015.692%2019.2395%2013.9838%2019.9868%2011.7008%2019.9868z%22%20fill%3D%22%234285F4%22/%3E%3Cpath%20d%3D%22M29.7192%2015.0594C29.7192%2017.8927%2027.5429%2019.9786%2024.8656%2019.9786%2022.1884%2019.9786%2020.0121%2017.8927%2020.0121%2015.0594%2020.0121%2012.2096%2022.1884%2010.1401%2024.8656%2010.1401%2027.5429%2010.1401%2029.7192%2012.2096%2029.7192%2015.0594zM27.5922%2015.0594C27.5922%2013.2855%2026.3274%2012.0782%2024.8656%2012.0782S22.1391%2013.2937%2022.1391%2015.0594C22.1391%2016.8086%2023.4038%2018.0405%2024.8656%2018.0405S27.5922%2016.8168%2027.5922%2015.0594z%22%20fill%3D%22%23E94235%22/%3E%3Cpath%20d%3D%22M40.5922%2015.0594C40.5922%2017.8927%2038.4159%2019.9786%2035.7387%2019.9786%2033.0696%2019.9786%2030.8851%2017.8927%2030.8851%2015.0594%2030.8851%2012.2096%2033.0614%2010.1401%2035.7387%2010.1401%2038.4159%2010.1401%2040.5922%2012.2096%2040.5922%2015.0594zM38.4734%2015.0594C38.4734%2013.2855%2037.2087%2012.0782%2035.7469%2012.0782%2034.2851%2012.0782%2033.0203%2013.2937%2033.0203%2015.0594%2033.0203%2016.8086%2034.2851%2018.0405%2035.7469%2018.0405%2037.2087%2018.0487%2038.4734%2016.8168%2038.4734%2015.0594z%22%20fill%3D%22%23FABB05%22/%3E%3Cpath%20d%3D%22M51.203%2010.4357v8.8366C51.203%2022.9105%2049.0595%2024.3969%2046.5219%2024.3969%2044.132%2024.3969%2042.7031%2022.7955%2042.161%2021.4897L44.0417%2020.7095C44.3784%2021.5143%2045.1997%2022.4588%2046.5219%2022.4588%2048.1479%2022.4588%2049.1499%2021.4487%2049.1499%2019.568V18.8617H49.0759C48.5914%2019.4612%2047.6552%2019.9786%2046.4808%2019.9786%2044.0171%2019.9786%2041.7668%2017.8352%2041.7668%2015.0758%2041.7668%2012.3%2044.0253%2010.1319%2046.4808%2010.1319%2047.6552%2010.1319%2048.5914%2010.6575%2049.0759%2011.2323H49.1499V10.4357H51.203zM49.2977%2015.084C49.2977%2013.3512%2048.1397%2012.0782%2046.6697%2012.0782%2045.175%2012.0782%2043.9267%2013.3429%2043.9267%2015.084%2043.9267%2016.8004%2045.175%2018.0487%2046.6697%2018.0487%2048.1397%2018.0487%2049.2977%2016.8004%2049.2977%2015.084z%22%20fill%3D%22%234285F4%22/%3E%3Cpath%20d%3D%22M54.9887%205.22083V19.6912H52.8288V5.220829999999999H54.9887z%22%20fill%3D%22%2334A853%22/%3E%3Cpath%20d%3D%22M63.4968%2016.6854L65.1722%2017.8023C64.6301%2018.6072%2063.3244%2019.9869%2061.0659%2019.9869%2058.2655%2019.9869%2056.2534%2017.827%2056.2534%2015.0676%2056.2534%2012.1439%2058.2901%2010.1483%2060.8278%2010.1483%2063.3818%2010.1483%2064.6301%2012.1768%2065.0408%2013.2773L65.2625%2013.8357%2058.6843%2016.5623C59.1853%2017.5478%2059.9737%2018.0569%2061.0741%2018.0569%2062.1746%2018.0569%2062.9384%2017.5067%2063.4968%2016.6854zM58.3312%2014.9115L62.7331%2013.0884C62.4867%2012.4724%2061.764%2012.0454%2060.9017%2012.0454%2059.8012%2012.0454%2058.2737%2013.0145%2058.3312%2014.9115z%22%20fill%3D%22%23E94235%22/%3E%3C/svg%3E" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
                                                                            </a></div>
                                                                    </div>
                                                                    <div></div>
                                                                    <div>
                                                                        <div style="display: inline-flex; position: absolute; right: 0px; bottom: 0px;">
                                                                            <div class="gmnoprint" style="z-index: 1000001;">
                                                                                <div draggable="false" class="gm-style-cc" style="user-select: none; position: relative; height: 14px; line-height: 14px;">
                                                                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                                        <div style="width: 1px;"></div>
                                                                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                                                    </div>
                                                                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><button draggable="false" aria-label="Keyboard shortcuts" title="Keyboard shortcuts" type="button" style="background: none; display: inline-block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: inherit;">Keyboard shortcuts</button></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="gmnoprint" style="z-index: 1000001;">
                                                                                <div draggable="false" class="gm-style-cc" style="user-select: none; position: relative; height: 14px; line-height: 14px;">
                                                                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                                        <div style="width: 1px;"></div>
                                                                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                                                    </div>
                                                                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><button draggable="false" aria-label="Map Data" title="Map Data" type="button" style="background: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: inherit; display: none;">Map Data</button><span style="">Map data ©2024 Google, INEGI</span></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="gmnoscreen">
                                                                                <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(0, 0, 0); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2024 Google, INEGI</div>
                                                                            </div><button draggable="false" aria-label="Map Scale: 200 m per 47 pixels" title="Map Scale: 200 m per 47 pixels" type="button" class="gm-style-cc" aria-describedby="A62E4379-2050-45D9-A399-6FE302963BCB" style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; height: 14px; line-height: 14px;">
                                                                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                                    <div style="width: 1px;"></div>
                                                                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                                                </div>
                                                                                <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><span>200 m&nbsp;</span>
                                                                                    <div style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 51px;">
                                                                                        <div style="width: 100%; height: 4px; position: absolute; left: 0px; top: 0px;"></div>
                                                                                        <div style="width: 4px; height: 8px; left: 0px; top: 0px; background-color: rgb(255, 255, 255);"></div>
                                                                                        <div style="width: 4px; height: 8px; position: absolute; background-color: rgb(255, 255, 255); right: 0px; bottom: 0px;"></div>
                                                                                        <div style="position: absolute; background-color: rgb(102, 102, 102); height: 2px; left: 1px; bottom: 1px; right: 1px;"></div>
                                                                                        <div style="position: absolute; width: 2px; height: 6px; left: 1px; top: 1px; background-color: rgb(102, 102, 102);"></div>
                                                                                        <div style="width: 2px; height: 6px; position: absolute; background-color: rgb(102, 102, 102); bottom: 1px; right: 1px;"></div>
                                                                                    </div>
                                                                                </div><span id="A62E4379-2050-45D9-A399-6FE302963BCB" style="display: none;">Click to toggle between metric and imperial units</span>
                                                                            </button>
                                                                            <div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; position: relative; height: 14px; line-height: 14px;">
                                                                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                                    <div style="width: 1px;"></div>
                                                                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                                                </div>
                                                                                <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(0, 0, 0);">Terms</a></div>
                                                                            </div>
                                                                            <div draggable="false" class="gm-style-cc" style="user-select: none; position: relative; height: 14px; line-height: 14px;">
                                                                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                                    <div style="width: 1px;"></div>
                                                                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                                                </div>
                                                                                <div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_blank" rel="noopener" title="Report errors in the road map or imagery to Google" dir="ltr" href="https://www.google.com/maps/@27.8166521,-82.7712451,15z/data=!5m1!1e4!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); text-decoration: none; position: relative;">Report a map error</a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="vue-map-hidden">
                                                            <div></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p data-v-29953f45="" class="mb-4"><svg data-v-29953f45="" class="svg-inline--fa fa-circle" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512z"></path>
                                                </svg> Google Place ID: <span data-v-29953f45="" class="font-bold">ChIJV-VOPI_8wogRTehQ26NNi1U</span></p>
                                            <p data-v-29953f45="" class="mb-4"><svg data-v-29953f45="" class="svg-inline--fa fa-shop" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shop" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                                    <path class="" fill="currentColor" d="M36.8 192H603.2c20.3 0 36.8-16.5 36.8-36.8c0-7.3-2.2-14.4-6.2-20.4L558.2 21.4C549.3 8 534.4 0 518.3 0H121.7c-16 0-31 8-39.9 21.4L6.2 134.7c-4 6.1-6.2 13.2-6.2 20.4C0 175.5 16.5 192 36.8 192zM64 224V384v80c0 26.5 21.5 48 48 48H336c26.5 0 48-21.5 48-48V384 224H320V384H128V224H64zm448 0V480c0 17.7 14.3 32 32 32s32-14.3 32-32V224H512z"></path>
                                                </svg> Google Place Name: <span data-v-29953f45="" class="font-bold">Hales AC</span></p>
                                            <p data-v-29953f45="" class="mb-4"><svg data-v-29953f45="" class="svg-inline--fa fa-location-dot" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                    <path class="" fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path>
                                                </svg> Google Place Address: <span data-v-29953f45="" class="font-bold">4700 95th St N, St. Petersburg, FL 33708, USA</span></p>
                                            <div data-v-29953f45="" class="buttons flex justify-between items-center"><button data-v-29953f45="" class="px-15px py-10px rounded-2px text-white text-14px" id="saveButton" style="background-color: rgb(23, 190, 107);"><svg data-v-29953f45="" class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <path class="" fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                                                    </svg> Save Google Data </button><button data-v-29953f45="" class="text-blue-400 text-14px" id="cantFindBusinessButton"> Can't find your business? </button><!----></div>
                                        </div>
                                        <div data-v-1549dcc2="" class="card p-20px bg-white rounded-4px shadow">
                                            <h2 data-v-1549dcc2="" class="text-28px font-light pb-20px">Google Business Profile</h2>
                                            <div data-v-1549dcc2="" class="card-body flex flex-col justify-start items-center text-center py-20px">
                                                <h3 data-v-1549dcc2="" class="text-18px mb-10px"> Location: <strong data-v-1549dcc2="" class="font-bold text-18px">Hales AC Service</strong></h3>
                                                <p data-v-1549dcc2="" class="text-11px mb-10px">4700 95th St N</p><button data-v-1549dcc2="" class="btn btn-blue">Change</button>
                                            </div><!---->
                                        </div>
                                        <div data-v-ad0ff143="" class="card p-20px bg-white rounded-4px shadow">
                                            <h2 data-v-ad0ff143="" class="text-28px font-light pb-20px">Connect Facebook</h2>
                                            <div data-v-ad0ff143="" class="flex flex-col justify-start items-center py-20px">
                                                <p data-v-ad0ff143="" class="mb-10px">Please connect to your corporate Facebook account.</p><button data-v-ad0ff143="" id="connect-button" class="btn btn-blue"><svg data-v-ad0ff143="" class="svg-inline--fa fa-facebook fa-lg" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path class="" fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path>
                                                    </svg> Connect to Facebook</button>
                                            </div><!---->
                                        </div>
                                        <div data-v-a8051deb="" class="xl:row-span-4 card p-25px bg-white rounded-4px shadow">
                                            <h2 class="text-2rem font-light pb-20px">Social Media Review &amp; Home Pages</h2>
                                            <div data-v-a8051deb="" class="card-body">
                                                <table data-v-a8051deb="" class="w-full">
                                                    <tr data-v-a8051deb="" class="flex row py-15px">
                                                        <td data-v-a8051deb="" class="sm-icon sm-google"><i data-v-a8051deb=""></i></td>
                                                        <td data-v-a8051deb="" class="buttons w-full flex justify-end"><a data-v-a8051deb="" href="https://maps.google.com/?cid=6164105881141176397" target="_blank" class="ml-10px btn btn-blue">Visit Homepage</a><a data-v-a8051deb="" href="https://search.google.com/local/writereview?placeid=ChIJV-VOPI_8wogRTehQ26NNi1U" target="_blank" class="ml-10px btn btn-blue">Visit Review Page</a><button data-v-a8051deb="" class="ml-10px btn btn-blue"> Edit </button><button data-v-a8051deb="" class="ml-10px btn btn-red"><svg data-v-a8051deb="" class="svg-inline--fa fa-trash-can" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash-can" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                    <path class="" fill="currentColor" d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z"></path>
                                                                </svg></button></td>
                                                    </tr>
                                                    <tr data-v-a8051deb="" class="flex row py-15px">
                                                        <td data-v-a8051deb="" class="sm-icon sm-facebook"><i data-v-a8051deb=""></i></td>
                                                        <td data-v-a8051deb="" class="buttons w-full flex justify-end"><a data-v-a8051deb="" href="https://www.facebook.com/HalesACSvc/" target="_blank" class="ml-10px btn btn-blue">Visit Homepage</a><a data-v-a8051deb="" href="https://www.facebook.com/HalesACSvc/reviews/" target="_blank" class="ml-10px btn btn-blue">Visit Review Page</a><button data-v-a8051deb="" class="ml-10px btn btn-blue"> Edit </button><button data-v-a8051deb="" class="ml-10px btn btn-red"><svg data-v-a8051deb="" class="svg-inline--fa fa-trash-can" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash-can" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                    <path class="" fill="currentColor" d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z"></path>
                                                                </svg></button></td>
                                                    </tr>
                                                    <tr data-v-a8051deb="" class="flex row py-15px">
                                                        <td data-v-a8051deb="" class="sm-icon sm-homestar"><i data-v-a8051deb=""></i></td>
                                                        <td data-v-a8051deb="" class="buttons w-full flex justify-end"><button data-v-a8051deb="" class="btn btn-blue ml-10px w-full"> Add Social Media </button></td>
                                                    </tr>
                                                    <tr data-v-a8051deb="" class="flex row py-15px">
                                                        <td data-v-a8051deb="" class="sm-icon sm-homeadvisor"><i data-v-a8051deb=""></i></td>
                                                        <td data-v-a8051deb="" class="buttons w-full flex justify-end"><button data-v-a8051deb="" class="btn btn-blue ml-10px w-full"> Add Social Media </button></td>
                                                    </tr>
                                                    <tr data-v-a8051deb="" class="flex row py-15px">
                                                        <td data-v-a8051deb="" class="sm-icon sm-bbb"><i data-v-a8051deb=""></i></td>
                                                        <td data-v-a8051deb="" class="buttons w-full flex justify-end"><a data-v-a8051deb="" href="https://www.bbb.org/us/fl/saint-petersburg/profile/air-conditioning-contractor/hales-air-conditioning-service-inc-0653-11000579" target="_blank" class="ml-10px btn btn-blue">Visit Homepage</a><!----><button data-v-a8051deb="" class="ml-10px btn btn-blue"> Edit </button><button data-v-a8051deb="" class="ml-10px btn btn-red"><svg data-v-a8051deb="" class="svg-inline--fa fa-trash-can" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash-can" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                    <path class="" fill="currentColor" d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z"></path>
                                                                </svg></button></td>
                                                    </tr>
                                                    <tr data-v-a8051deb="" class="flex row py-15px">
                                                        <td data-v-a8051deb="" class="sm-icon sm-houzz"><i data-v-a8051deb=""></i></td>
                                                        <td data-v-a8051deb="" class="buttons w-full flex justify-end"><button data-v-a8051deb="" class="btn btn-blue ml-10px w-full"> Add Social Media </button></td>
                                                    </tr>
                                                    <tr data-v-a8051deb="" class="flex row py-15px">
                                                        <td data-v-a8051deb="" class="sm-icon sm-nextdoor"><i data-v-a8051deb=""></i></td>
                                                        <td data-v-a8051deb="" class="buttons w-full flex justify-end"><button data-v-a8051deb="" class="btn btn-blue ml-10px w-full"> Add Social Media </button></td>
                                                    </tr>
                                                    <tr data-v-a8051deb="" class="flex row py-15px">
                                                        <td data-v-a8051deb="" class="sm-icon sm-yp"><i data-v-a8051deb=""></i></td>
                                                        <td data-v-a8051deb="" class="buttons w-full flex justify-end"><button data-v-a8051deb="" class="btn btn-blue ml-10px w-full"> Add Social Media </button></td>
                                                    </tr>
                                                    <tr data-v-a8051deb="" class="flex row py-15px">
                                                        <td data-v-a8051deb="" class="sm-icon sm-angieslist"><i data-v-a8051deb=""></i></td>
                                                        <td data-v-a8051deb="" class="buttons w-full flex justify-end"><button data-v-a8051deb="" class="btn btn-blue ml-10px w-full"> Add Social Media </button></td>
                                                    </tr>
                                                    <tr data-v-a8051deb="" class="flex row py-15px">
                                                        <td data-v-a8051deb="" class="sm-icon sm-porch"><i data-v-a8051deb=""></i></td>
                                                        <td data-v-a8051deb="" class="buttons w-full flex justify-end"><button data-v-a8051deb="" class="btn btn-blue ml-10px w-full"> Add Social Media </button></td>
                                                    </tr>
                                                    <tr data-v-a8051deb="" class="flex row py-15px">
                                                        <td data-v-a8051deb="" class="icon w-40px h-40px flex justify-center items-center rounded-4px" title="Custom"></td>
                                                        <td data-v-a8051deb="" class="buttons w-full flex justify-end"><a data-v-a8051deb="" href="https://g.page/r/CdSpGtFWO5SPEBM/review" target="_blank" class="ml-10px btn btn-blue">Tampa Google Listing</a><button data-v-a8051deb="" class="ml-10px btn btn-blue"> Edit </button><button data-v-a8051deb="" class="ml-10px btn btn-red"><svg data-v-a8051deb="" class="svg-inline--fa fa-trash-can" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash-can" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                                    <path class="" fill="currentColor" d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z"></path>
                                                                </svg></button></td>
                                                    </tr>
                                                </table>
                                            </div><!----><!----><!----><!---->
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
    <!-- <script src="/js/bootstrap.bundle.min.js"></script> -->

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