<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="/css/reset.css">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  <script src="/js/bootstrap.min.js"> </script>

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
  <link rel="icon" type="image/png" sizes="32x32" href="https://kiliassets.speetra.com/favicon/favicon-32x32.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pulseM</title>
  <script async="" src="https://cdn.pendo.io/agent/static/6d51476c-08e2-444e-6fe4-beeaa484b62a/pendo-staging.js"></script>
  <script async="" src="https://cdn.pendo.io/agent/static/6d51476c-08e2-444e-6fe4-beeaa484b62a/pendo.js"></script>
  <script src="https://accounts.google.com/gsi/client" async=""></script>
  <script async="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC_9G82Fa3wdn-p4QID43b_RVrJme66fQ&amp;libraries=places">
  </script>
  <style>
    * {
      font-size: 14px;
    }

    html {
      height: 100%;
      margin: 0;
    }

    body,
    #app {
      height: 100%;
      margin: 0;
    }
  </style>
  <script type="module" crossorigin="" src="/assets/index-71f3fe91.js"></script>
  <link rel="stylesheet" href="/assets/index-852eb787.css">
  <style id="googleidentityservice_button_styles">
    .qJTHM {
      -webkit-user-select: none;
      color: #202124;
      direction: ltr;
      -webkit-touch-callout: none;
      font-family: "Roboto-Regular", arial, sans-serif;
      -webkit-font-smoothing: antialiased;
      font-weight: 400;
      margin: 0;
      overflow: hidden;
      -webkit-text-size-adjust: 100%
    }

    .ynRLnc {
      left: -9999px;
      position: absolute;
      top: -9999px
    }

    .L6cTce {
      display: none
    }

    .bltWBb {
      word-break: break-all
    }

    .hSRGPd {
      color: #1a73e8;
      cursor: pointer;
      font-weight: 500;
      text-decoration: none
    }

    .Bz112c-W3lGp {
      height: 16px;
      width: 16px
    }

    .Bz112c-E3DyYd {
      height: 20px;
      width: 20px
    }

    .Bz112c-r9oPif {
      height: 24px;
      width: 24px
    }

    .Bz112c-uaxL4e {
      -webkit-border-radius: 10px;
      border-radius: 10px
    }

    .LgbsSe-Bz112c {
      display: block
    }

    .S9gUrf-YoZ4jf,
    .S9gUrf-YoZ4jf * {
      border: none;
      margin: 0;
      padding: 0
    }

    .fFW7wc-ibnC6b>.aZ2wEe>div {
      border-color: #4285f4
    }

    .P1ekSe-ZMv3u>div:nth-child(1) {
      background-color: #1a73e8 !important
    }

    .P1ekSe-ZMv3u>div:nth-child(2),
    .P1ekSe-ZMv3u>div:nth-child(3) {
      background-image: linear-gradient(to right, rgba(255, 255, 255, .7), rgba(255, 255, 255, .7)), linear-gradient(to right, #1a73e8, #1a73e8) !important
    }

    .haAclf {
      display: inline-block
    }

    .nsm7Bb-HzV7m-LgbsSe {
      -webkit-border-radius: 4px;
      border-radius: 4px;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      -webkit-transition: background-color .218s, border-color .218s;
      transition: background-color .218s, border-color .218s;
      -webkit-user-select: none;
      -webkit-appearance: none;
      background-color: #fff;
      background-image: none;
      border: 1px solid #dadce0;
      color: #3c4043;
      cursor: pointer;
      font-family: "Google Sans", arial, sans-serif;
      font-size: 14px;
      height: 40px;
      letter-spacing: 0.25px;
      outline: none;
      overflow: hidden;
      padding: 0 12px;
      position: relative;
      text-align: center;
      vertical-align: middle;
      white-space: nowrap;
      width: auto
    }

    @media screen and (-ms-high-contrast:active) {
      .nsm7Bb-HzV7m-LgbsSe {
        border: 2px solid windowText;
        color: windowText
      }
    }

    .nsm7Bb-HzV7m-LgbsSe.pSzOP-SxQuSe {
      font-size: 14px;
      height: 32px;
      letter-spacing: 0.25px;
      padding: 0 10px
    }

    .nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe {
      font-size: 11px;
      height: 20px;
      letter-spacing: 0.3px;
      padding: 0 8px
    }

    .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe {
      padding: 0;
      width: 40px
    }

    .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe.pSzOP-SxQuSe {
      width: 32px
    }

    .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe.purZT-SxQuSe {
      width: 20px
    }

    .nsm7Bb-HzV7m-LgbsSe.JGcpL-RbRzK {
      -webkit-border-radius: 20px;
      border-radius: 20px
    }

    .nsm7Bb-HzV7m-LgbsSe.JGcpL-RbRzK.pSzOP-SxQuSe {
      -webkit-border-radius: 16px;
      border-radius: 16px
    }

    .nsm7Bb-HzV7m-LgbsSe.JGcpL-RbRzK.purZT-SxQuSe {
      -webkit-border-radius: 10px;
      border-radius: 10px
    }

    .nsm7Bb-HzV7m-LgbsSe.MFS4be-Ia7Qfc {
      border: none;
      color: #fff
    }

    .nsm7Bb-HzV7m-LgbsSe.MFS4be-v3pZbf-Ia7Qfc {
      background-color: #1a73e8
    }

    .nsm7Bb-HzV7m-LgbsSe.MFS4be-JaPV2b-Ia7Qfc {
      background-color: #202124;
      color: #e8eaed
    }

    .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
      height: 18px;
      margin-right: 8px;
      min-width: 18px;
      width: 18px
    }

    .nsm7Bb-HzV7m-LgbsSe.pSzOP-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
      height: 14px;
      min-width: 14px;
      width: 14px
    }

    .nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
      height: 10px;
      min-width: 10px;
      width: 10px
    }

    .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
      margin-left: 8px;
      margin-right: -4px
    }

    .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
      margin: 0;
      padding: 10px
    }

    .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe.pSzOP-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
      padding: 8px
    }

    .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe.purZT-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c {
      padding: 4px
    }

    .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
      -webkit-border-top-left-radius: 3px;
      border-top-left-radius: 3px;
      -webkit-border-bottom-left-radius: 3px;
      border-bottom-left-radius: 3px;
      display: -webkit-box;
      display: -webkit-flex;
      display: flex;
      justify-content: center;
      -webkit-align-items: center;
      align-items: center;
      background-color: #fff;
      height: 36px;
      margin-left: -10px;
      margin-right: 12px;
      min-width: 36px;
      width: 36px
    }

    .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf .nsm7Bb-HzV7m-LgbsSe-Bz112c,
    .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf .nsm7Bb-HzV7m-LgbsSe-Bz112c {
      margin: 0;
      padding: 0
    }

    .nsm7Bb-HzV7m-LgbsSe.pSzOP-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
      height: 28px;
      margin-left: -8px;
      margin-right: 10px;
      min-width: 28px;
      width: 28px
    }

    .nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
      height: 16px;
      margin-left: -6px;
      margin-right: 8px;
      min-width: 16px;
      width: 16px
    }

    .nsm7Bb-HzV7m-LgbsSe.Bz112c-LgbsSe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
      -webkit-border-radius: 3px;
      border-radius: 3px;
      margin-left: 2px;
      margin-right: 0;
      padding: 0
    }

    .nsm7Bb-HzV7m-LgbsSe.JGcpL-RbRzK .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
      -webkit-border-radius: 18px;
      border-radius: 18px
    }

    .nsm7Bb-HzV7m-LgbsSe.pSzOP-SxQuSe.JGcpL-RbRzK .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
      -webkit-border-radius: 14px;
      border-radius: 14px
    }

    .nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe.JGcpL-RbRzK .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
      -webkit-border-radius: 8px;
      border-radius: 8px
    }

    .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-bN97Pc-sM5MNb {
      display: -webkit-box;
      display: -webkit-flex;
      display: flex;
      -webkit-align-items: center;
      align-items: center;
      -webkit-flex-direction: row;
      flex-direction: row;
      justify-content: space-between;
      -webkit-flex-wrap: nowrap;
      flex-wrap: nowrap;
      height: 100%;
      position: relative;
      width: 100%
    }

    .nsm7Bb-HzV7m-LgbsSe .oXtfBe-l4eHX {
      justify-content: center
    }

    .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-BPrWId {
      -webkit-flex-grow: 1;
      flex-grow: 1;
      font-family: "Google Sans", arial, sans-serif;
      font-weight: 500;
      overflow: hidden;
      text-overflow: ellipsis;
      vertical-align: top
    }

    .nsm7Bb-HzV7m-LgbsSe.purZT-SxQuSe .nsm7Bb-HzV7m-LgbsSe-BPrWId {
      font-weight: 300
    }

    .nsm7Bb-HzV7m-LgbsSe .oXtfBe-l4eHX .nsm7Bb-HzV7m-LgbsSe-BPrWId {
      -webkit-flex-grow: 0;
      flex-grow: 0
    }

    .nsm7Bb-HzV7m-LgbsSe .nsm7Bb-HzV7m-LgbsSe-MJoBVe {
      -webkit-transition: background-color .218s;
      transition: background-color .218s;
      bottom: 0;
      left: 0;
      position: absolute;
      right: 0;
      top: 0
    }

    .nsm7Bb-HzV7m-LgbsSe:hover,
    .nsm7Bb-HzV7m-LgbsSe:focus {
      -webkit-box-shadow: none;
      box-shadow: none;
      border-color: #d2e3fc;
      outline: none
    }

    .nsm7Bb-HzV7m-LgbsSe:hover .nsm7Bb-HzV7m-LgbsSe-MJoBVe,
    .nsm7Bb-HzV7m-LgbsSe:focus .nsm7Bb-HzV7m-LgbsSe-MJoBVe {
      background: rgba(66, 133, 244, .04)
    }

    .nsm7Bb-HzV7m-LgbsSe:active .nsm7Bb-HzV7m-LgbsSe-MJoBVe {
      background: rgba(66, 133, 244, .1)
    }

    .nsm7Bb-HzV7m-LgbsSe.MFS4be-Ia7Qfc:hover .nsm7Bb-HzV7m-LgbsSe-MJoBVe,
    .nsm7Bb-HzV7m-LgbsSe.MFS4be-Ia7Qfc:focus .nsm7Bb-HzV7m-LgbsSe-MJoBVe {
      background: rgba(255, 255, 255, .24)
    }

    .nsm7Bb-HzV7m-LgbsSe.MFS4be-Ia7Qfc:active .nsm7Bb-HzV7m-LgbsSe-MJoBVe {
      background: rgba(255, 255, 255, .32)
    }

    .nsm7Bb-HzV7m-LgbsSe .n1UuX-DkfjY {
      -webkit-border-radius: 50%;
      border-radius: 50%;
      display: -webkit-box;
      display: -webkit-flex;
      display: flex;
      height: 20px;
      margin-left: -4px;
      margin-right: 8px;
      min-width: 20px;
      width: 20px
    }

    .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId {
      font-family: "Roboto";
      font-size: 12px;
      text-align: left
    }

    .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId .ssJRIf,
    .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId .K4efff .fmcmS {
      overflow: hidden;
      text-overflow: ellipsis
    }

    .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId .K4efff {
      display: -webkit-box;
      display: -webkit-flex;
      display: flex;
      -webkit-align-items: center;
      align-items: center;
      color: #5f6368;
      fill: #5f6368;
      font-size: 11px;
      font-weight: 400
    }

    .nsm7Bb-HzV7m-LgbsSe.jVeSEe.MFS4be-Ia7Qfc .nsm7Bb-HzV7m-LgbsSe-BPrWId .K4efff {
      color: #e8eaed;
      fill: #e8eaed
    }

    .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-BPrWId .K4efff .Bz112c {
      height: 18px;
      margin: -3px -3px -3px 2px;
      min-width: 18px;
      width: 18px
    }

    .nsm7Bb-HzV7m-LgbsSe.jVeSEe .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
      -webkit-border-top-left-radius: 0;
      border-top-left-radius: 0;
      -webkit-border-bottom-left-radius: 0;
      border-bottom-left-radius: 0;
      -webkit-border-top-right-radius: 3px;
      border-top-right-radius: 3px;
      -webkit-border-bottom-right-radius: 3px;
      border-bottom-right-radius: 3px;
      margin-left: 12px;
      margin-right: -10px
    }

    .nsm7Bb-HzV7m-LgbsSe.jVeSEe.JGcpL-RbRzK .nsm7Bb-HzV7m-LgbsSe-Bz112c-haAclf {
      -webkit-border-radius: 18px;
      border-radius: 18px
    }

    .L5Fo6c-sM5MNb {
      border: 0;
      display: block;
      left: 0;
      position: relative;
      top: 0
    }

    .L5Fo6c-bF1uUb {
      -webkit-border-radius: 4px;
      border-radius: 4px;
      bottom: 0;
      cursor: pointer;
      left: 0;
      position: absolute;
      right: 0;
      top: 0
    }

    .L5Fo6c-bF1uUb:focus {
      border: none;
      outline: none
    }

    sentinel {}
  </style>
  <script src="https://accounts.google.com/gsi/client" async="" defer=""></script>
  <style type="text/css">
    .g-btn-wrapper[data-v-5e610566] {
      display: inline-block;
    }
  </style>
  <style type="text/css">
    .vacp-color-picker {
      --vacp-color: hsl(calc(var(--vacp-hsl-h)*360) calc(var(--vacp-hsl-s)*100%) calc(var(--vacp-hsl-l)*100%)/var(--vacp-hsl-a));
      --vacp-focus-color: #19f;
      --vacp-focus-outline: 2px solid var(--vacp-focus-color);
      --vacp-border-width: 1px;
      --vacp-border-color: #000;
      --vacp-border: var(--vacp-border-width) solid var(--vacp-border-color);
      --vacp-color-space-width: 300px;
      --vacp-spacing: 6px;
      grid-gap: var(--vacp-spacing);
      background-color: #fff;
      display: grid;
      font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
      font-size: .8em;
      grid-template-columns: 1fr min-content;
      max-width: var(--vacp-color-space-width);
      padding: var(--vacp-spacing)
    }

    .vacp-color-picker,
    .vacp-color-picker *,
    .vacp-color-picker :after,
    .vacp-color-picker :before {
      box-sizing: border-box
    }

    .vacp-color-picker button::-moz-focus-inner {
      border: none;
      padding: 0
    }

    .vacp-color-picker :focus {
      outline: var(--vacp-focus-outline)
    }

    .vacp-color-space {
      grid-column: 1/-1;
      height: calc(var(--vacp-color-space-width)*.6);
      overflow: hidden
    }

    .vacp-color-space-thumb {
      --vacp-thumb-size: calc(var(--vacp-spacing)*4);
      border: 3px solid #fff;
      border-radius: 50%;
      box-shadow: 0 0 0 var(--vacp-border-width) var(--vacp-border-color);
      height: var(--vacp-thumb-size);
      margin-bottom: calc(var(--vacp-thumb-size)*-1/2);
      margin-left: calc(var(--vacp-thumb-size)*-1/2);
      transform: rotate(0);
      width: var(--vacp-thumb-size)
    }

    .vacp-color-space-thumb:focus {
      box-shadow: 0 0 0 var(--vacp-border-width) var(--vacp-border-color), 0 0 0 3px var(--vacp-focus-color);
      outline-color: transparent
    }

    .vacp-range-input-label {
      --vacp-slider-track-width: 100%;
      --vacp-slider-track-height: calc(var(--vacp-spacing)*3);
      display: block
    }

    .vacp-range-input-group {
      display: flex;
      flex-direction: column;
      justify-content: center
    }

    .vacp-range-input-group>:not(:first-child) {
      margin-top: var(--vacp-spacing)
    }

    .vacp-range-input,
    .vacp-range-input::-webkit-slider-thumb {
      -webkit-appearance: none
    }

    .vacp-range-input {
      background: none;
      border: none;
      display: block;
      height: var(--vacp-slider-track-height);
      margin-bottom: calc(var(--vacp-spacing)/2 + 1px);
      margin-left: 0;
      margin-right: 0;
      margin-top: calc(var(--vacp-spacing)/2 + 1px);
      padding: 0;
      width: var(--vacp-slider-track-width)
    }

    .vacp-range-input:focus {
      outline: none
    }

    .vacp-range-input::-moz-focus-outer {
      border: none
    }

    .vacp-range-input--alpha {
      background-color: #fff;
      background-image: linear-gradient(45deg, #eee 25%, transparent 0, transparent 75%, #eee 0, #eee), linear-gradient(45deg, #eee 25%, transparent 0, transparent 75%, #eee 0, #eee);
      background-position: 0 0, var(--vacp-spacing) var(--vacp-spacing);
      background-size: calc(var(--vacp-spacing)*2) calc(var(--vacp-spacing)*2)
    }

    .vacp-range-input::-moz-range-track {
      border: var(--vacp-border);
      box-sizing: content-box;
      height: var(--vacp-slider-track-height);
      width: var(--vacp-slider-track-width)
    }

    .vacp-range-input::-webkit-slider-runnable-track {
      border: var(--vacp-border);
      box-sizing: content-box;
      height: var(--vacp-slider-track-height);
      width: var(--vacp-slider-track-width)
    }

    .vacp-range-input::-ms-track {
      border: var(--vacp-border);
      box-sizing: content-box;
      height: var(--vacp-slider-track-height);
      width: var(--vacp-slider-track-width)
    }

    .vacp-range-input:focus::-moz-range-track {
      outline: var(--vacp-focus-outline)
    }

    .vacp-range-input:focus::-webkit-slider-runnable-track {
      outline: var(--vacp-focus-outline)
    }

    .vacp-range-input:focus::-ms-track {
      outline: var(--vacp-focus-outline)
    }

    .vacp-range-input--alpha::-moz-range-track {
      background-image: linear-gradient(to right, transparent, var(--vacp-color))
    }

    .vacp-range-input--alpha::-webkit-slider-runnable-track {
      background-image: linear-gradient(to right, transparent, var(--vacp-color))
    }

    .vacp-range-input--alpha::-ms-track {
      background-image: linear-gradient(to right, transparent, var(--vacp-color))
    }

    .vacp-range-input--hue::-moz-range-track {
      background-image: linear-gradient(90deg, red 0, #ff0 16.66667%, #0f0 33.33333%, #0ff 50%, #00f 66.66667%, #f0f 83.33333%, red 100%)
    }

    .vacp-range-input--hue::-webkit-slider-runnable-track {
      background-image: linear-gradient(90deg, red 0, #ff0 16.66667%, #0f0 33.33333%, #0ff 50%, #00f 66.66667%, #f0f 83.33333%, red 100%)
    }

    .vacp-range-input--hue::-ms-track {
      background-image: linear-gradient(90deg, red 0, #ff0 16.66667%, #0f0 33.33333%, #0ff 50%, #00f 66.66667%, #f0f 83.33333%, red 100%)
    }

    .vacp-range-input::-moz-range-thumb {
      background-color: transparent;
      border: 3px solid #fff;
      border-radius: 50%;
      box-shadow: 0 0 0 var(--vacp-border-width) var(--vacp-border-color);
      box-sizing: content-box;
      height: var(--vacp-slider-track-height);
      isolation: isolate;
      width: var(--vacp-slider-track-height)
    }

    .vacp-range-input::-webkit-slider-thumb {
      background-color: transparent;
      border: 3px solid #fff;
      border-radius: 50%;
      box-shadow: 0 0 0 var(--vacp-border-width) var(--vacp-border-color);
      box-sizing: content-box;
      height: var(--vacp-slider-track-height);
      isolation: isolate;
      margin-top: calc((var(--vacp-spacing)/2)*-1);
      width: var(--vacp-slider-track-height)
    }

    .vacp-range-input::-ms-thumb {
      background-color: transparent;
      border: 3px solid #fff;
      border-radius: 50%;
      box-shadow: 0 0 0 var(--vacp-border-width) var(--vacp-border-color);
      box-sizing: content-box;
      height: var(--vacp-slider-track-height);
      isolation: isolate;
      margin-top: calc((var(--vacp-spacing)/2)*-1);
      width: var(--vacp-slider-track-height)
    }

    .vacp-copy-button {
      align-items: center;
      align-self: center;
      background-color: #fff;
      border: var(--vacp-border-width) solid transparent;
      border-radius: 50%;
      display: flex;
      height: calc(var(--vacp-spacing)*6);
      justify-content: center;
      justify-self: center;
      overflow: hidden;
      position: relative;
      width: calc(var(--vacp-spacing)*6)
    }

    .vacp-copy-button:enabled:focus {
      border-color: var(--vacp-border-color);
      box-shadow: 0 0 0 2px var(--vacp-focus-color);
      outline: none
    }

    .vacp-copy-button:enabled:hover {
      background-color: #0002
    }

    .vacp-color-inputs {
      align-items: center;
      display: flex;
      grid-column: 1/-1
    }

    .vacp-color-inputs>:not(:first-child) {
      margin-left: var(--vacp-spacing)
    }

    .vacp-color-input-group {
      column-gap: var(--vacp-spacing);
      display: grid;
      flex-grow: 1;
      grid-auto-flow: column
    }

    .vacp-color-input-label {
      text-align: center
    }

    .vacp-color-input {
      border: var(--vacp-border);
      margin: 0;
      margin-top: calc(var(--vacp-spacing)/2);
      text-align: center;
      width: 100%
    }

    .vacp-color-input,
    .vacp-format-switch-button {
      background-color: #fff;
      color: inherit;
      font: inherit;
      padding: var(--vacp-spacing)
    }

    .vacp-format-switch-button {
      align-items: center;
      border: var(--vacp-border-width) solid transparent;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      margin: 0
    }

    .vacp-format-switch-button:enabled:focus {
      border-color: var(--vacp-border-color)
    }

    .vacp-format-switch-button:enabled:hover {
      background-color: #0002
    }

    .vacp-visually-hidden {
      clip: rect(0 0 0 0);
      border: 0;
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      white-space: nowrap;
      width: 1px
    }
  </style>
  <link id="googleidentityservice" type="text/css" media="all" rel="stylesheet" href="https://accounts.google.com/gsi/style">
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/57/6a/common.js"></script>
  <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/57/6a/util.js"></script>
</head>

<body>
  <div id="app" data-v-app="">
    <div class="flex flex-col h-auto min-h-screen">
      <div data-v-d3317e7c="" id="main-container" class="w-full flex flex-col items-stretch"><!----><!----><!----><!---->
        <div data-v-d3317e7c="" id="menu-bg-light" class="menu-bg-light flex justify-between items-stretch !text-white">
          <div data-v-d3317e7c="" id="logo-container" class="w-200px py-10px px-20px flex justify-center items-center"><a data-v-d3317e7c="" href="/analyze/overview" class="" id="analyze-overview-link"><img data-v-d3317e7c="" id="logo" src="/assets/pulsem-logo-white-0afed095.svg" alt="pulseM logo"></a></div>
          <div data-v-d3317e7c="" id="menu-items" class="flex flex-grow justify-start items-center relative"><a data-v-d3317e7c="" href="/operate" class="menu-link text-white cursor-pointer hover:menu-bg-dark h-full w-auto flex justify-center items-center px-20px" id="operate-link"> Operate </a><!---->
            <div data-v-d3317e7c="" id="analyze-dropdown" class="dropdown text-white cursor-pointer hover:menu-bg-dark h-full w-auto flex justify-center items-center px-20px"><span data-v-d3317e7c="">Analyze <svg data-v-d3317e7c="" class="svg-inline--fa fa-angle-down" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path class="" fill="currentColor" d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                </svg></span>
              <div data-v-d3317e7c="" id="analyze-dropdown-menu" class="dropdown-menu z-9999 grid grid-flow-row menu-bg-dark rounded-b-4px absolute left-0 p-10px top-full min-w-700px w-full grid-cols-2" style="display: none;"><a data-v-d3317e7c="" href="/analyze/overview" class="flex justify-start items-stretch px-10px py-25px rounded hover:menu-bg-light" id="analyze-overview-link">
                  <div data-v-d3317e7c="" class="icon flex justify-center items-start py-5px px-10px mr-5px"><img data-v-d3317e7c="" id="analyze-overview-icon" class="w-25px h-auto" src="/assets/analyze-overview-e2b6af23.svg" alt=""></div>
                  <div data-v-d3317e7c="" class="body flex flex-col justify-start items-stretch">
                    <p data-v-d3317e7c="" class="name font-bold text-lg">Overview</p>
                    <p data-v-d3317e7c="" class="blurb">View your social reviews and ratings</p>
                  </div>
                </a><a data-v-d3317e7c="" href="/analyze/reviews" class="router-link-active flex justify-start items-stretch px-10px py-25px rounded hover:menu-bg-light" id="analyze-reviews-link">
                  <div data-v-d3317e7c="" class="icon flex justify-center items-start py-5px px-10px mr-5px"><img data-v-d3317e7c="" class="w-25px h-auto" src="/assets/analyze-reviews-4441cadf.svg" alt="analyze reviews icon" id="analyze-reviews-icon"></div>
                  <div data-v-d3317e7c="" class="body flex flex-col justify-start items-stretch">
                    <p data-v-d3317e7c="" class="name font-bold text-lg">Reviews</p>
                    <p data-v-d3317e7c="" class="blurb">View and manage all of your reviews</p>
                  </div>
                </a><a data-v-d3317e7c="" href="/analyze/competitor-analysis" class="flex justify-start items-stretch px-10px py-25px rounded hover:menu-bg-light" id="analyze-comp-analysis-link">
                  <div data-v-d3317e7c="" class="icon flex justify-center items-start py-5px px-10px mr-5px"><img data-v-d3317e7c="" class="w-25px h-auto" src="/assets/analyze-competitor-analysis-871108f4.svg" alt="analyze comp analysis link icon" id="analyze-comp-analysis-link-icon"></div>
                  <div data-v-d3317e7c="" class="body flex flex-col justify-start items-stretch">
                    <p data-v-d3317e7c="" class="name font-bold text-lg">Competitor Analysis</p>
                    <p data-v-d3317e7c="" class="blurb">View your review comparison</p>
                  </div>
                </a><a data-v-d3317e7c="" href="/analyze/dispatching" class="flex justify-start items-stretch px-10px py-25px rounded hover:menu-bg-light" id="analyze-dispatching-link">
                  <div data-v-d3317e7c="" class="icon flex justify-center items-start py-5px px-10px mr-5px"><img data-v-d3317e7c="" class="w-25px h-auto" src="/assets/analyze-dispatching-bf9a159a.svg" alt="analyze dispatching link icon" id="analyze-comp-analysis-link-icon"></div>
                  <div data-v-d3317e7c="" class="body flex flex-col justify-start items-stretch">
                    <p data-v-d3317e7c="" class="name font-bold text-lg">Dispatching</p>
                    <p data-v-d3317e7c="" class="blurb">View your pulseM performance indicators</p>
                  </div>
                </a><!----><!----></div>
            </div>
            <div data-v-d3317e7c="" id="leaderboard-dropdown" class="dropdown text-white cursor-pointer hover:menu-bg-dark h-full w-auto flex justify-center items-center px-20px"><span data-v-d3317e7c="" id="leaderboard-label">Leaderboard <svg data-v-d3317e7c="" class="svg-inline--fa fa-angle-down" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path class="" fill="currentColor" d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                </svg></span>
              <div data-v-d3317e7c="" id="leaderboard-dropdown-menu" class="dropdown-menu z-9999 grid grid-flow-row menu-bg-dark rounded-b-4px absolute left-0 p-10px top-full min-w-700px w-full grid-cols-1" style="display: none;"><a data-v-d3317e7c="" href="/leaderboard/summary" class="flex justify-start items-stretch px-10px py-25px rounded hover:menu-bg-light" id="leaderboard-summary-link">
                  <div data-v-d3317e7c="" class="icon flex justify-center items-start py-5px px-10px mr-5px"><img data-v-d3317e7c="" id="leaderboard-summary-icon" class="w-25px h-auto" src="/assets/leaderboard-summary-37cc6b0e.svg" alt=""></div>
                  <div data-v-d3317e7c="" class="body flex flex-col justify-start items-stretch">
                    <p data-v-d3317e7c="" class="name font-bold text-lg">Summary</p>
                    <p data-v-d3317e7c="" class="blurb">View your overall rankings and performance</p>
                  </div>
                </a><a data-v-d3317e7c="" href="/leaderboard/reports" class="flex justify-start items-stretch px-10px py-25px rounded hover:menu-bg-light" id="leaderboard-reports-link">
                  <div data-v-d3317e7c="" class="icon flex justify-center items-start py-5px px-10px mr-5px"><img data-v-d3317e7c="" id="leaderboard-reports-icon" class="w-25px h-auto" src="/assets/leaderboard-reports-0f9019c1.svg" alt=""></div>
                  <div data-v-d3317e7c="" class="body flex flex-col justify-start items-stretch">
                    <p data-v-d3317e7c="" class="name font-bold text-lg">Reports</p>
                    <p data-v-d3317e7c="" class="blurb">View your detailed performance reports</p>
                  </div>
                </a></div>
            </div>
            <div data-v-d3317e7c="" id="marketplace-dropdown" class="dropdown text-white cursor-pointer hover:menu-bg-dark h-full w-auto flex justify-center items-center px-20px"><span data-v-d3317e7c="">Marketplace <svg data-v-d3317e7c="" class="svg-inline--fa fa-angle-down" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path class="" fill="currentColor" d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                </svg></span>
              <div data-v-d3317e7c="" id="marketplace-dropdown-menu" class="dropdown-menu grid min-w-750px z-9999 absolute left-0 top-full menu-bg-dark rounded-b-4px p-10px" style="display: none;"><!---->
                <div data-v-d3317e7c="" class="flex justify-start items-stretch px-10px py-25px rounded-l hover:menu-bg-light">
                  <div class="icon flex justify-center items-start py-5px px-10px mr-5px" data-v-d3317e7c=""><img class="w-25px h-auto" src="/assets/marketplace-lead-generation-7bc58ea4.svg" alt="" data-v-d3317e7c=""></div>
                  <div class="body flex flex-col justify-start items-stretch" data-v-d3317e7c="">
                    <p class="name font-bold text-lg" data-v-d3317e7c="">Lead Generation</p>
                    <p class="blurb" data-v-d3317e7c="">View feature that helps you get leads</p>
                  </div><!---->
                </div><a data-v-d3317e7c="" href="https://know.pulsem.me/employee-rewards" target="_blank" class="flex justify-start items-stretch px-10px py-25px rounded-l hover:menu-bg-light">
                  <div class="icon flex justify-center items-start py-5px px-10px mr-5px" data-v-d3317e7c=""><img class="w-25px h-auto" src="/assets/marketplace-employee-retention-f17bc30a.svg" alt="" data-v-d3317e7c=""></div>
                  <div class="body flex flex-col justify-start items-stretch" data-v-d3317e7c="">
                    <p class="name font-bold text-lg" data-v-d3317e7c="">Employee Retention</p>
                    <p class="blurb" data-v-d3317e7c=""> View feature that helps you retain Employees </p>
                  </div>
                </a>
              </div>
            </div><a data-v-d3317e7c="" href="https://know.pulsem.me/send-referral?email_from=st.tech321@gmail.com" id="referrals-link" target="_blank" class="menu-link text-white cursor-pointer hover:menu-bg-dark h-full w-auto flex justify-center items-center px-20px"> Referrals </a>
          </div>
          <div data-v-d3317e7c="" id="location-dropdown" class="location-dropdown flex justify-between items-center px-20px py-10px">
            <div data-v-d3317e7c="" class="location-info flex flex-col justify-center items-end mr-10px">
              <p data-v-d3317e7c="" class="leading-tight whitespace-nowrap font-bold" id="Hales-AC-Service">Hales AC Service</p>
              <p data-v-d3317e7c="" class="leading-tight whitespace-nowrap text-gray-400">4700 95Th St N</p>
              <p data-v-d3317e7c="" class="leading-tight whitespace-nowrap text-gray-400">Saint Petersburg, FL US 33708-3728</p>
            </div>
          </div>
          <div data-v-d3317e7c="" class="relative flex items-stretch hover:menu-bg-dark px-20px cursor-pointer">
            <div data-v-d3317e7c="" class="profile-pic mr-10px flex justify-center items-center"><svg data-v-d3317e7c="" class="svg-inline--fa fa-circle-user text-25px" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="circle-user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <g class="fa-duotone-group">
                  <path class="fa-secondary" fill="currentColor" d="M399 384.2C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z"></path>
                  <path class="fa-primary" fill="currentColor" d="M256 272a72 72 0 1 0 0-144 72 72 0 1 0 0 144zm0 176c56.8 0 107.8-24.7 143-63.8C376.9 345.8 335.4 320 288 320H224c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8z"></path>
                </g>
              </svg></div>
            <div data-v-d3317e7c="" class="account-dropdown flex justify-center items-center">
              <p data-v-d3317e7c="" class="whitespace-nowrap" id="null-null">
                <svg data-v-d3317e7c="" class="svg-inline--fa fa-angle-down" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path class="" fill="currentColor" d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"></path>
                </svg>
              </p>
            </div><!---->
          </div><!---->
        </div>
      </div>
      <div class="flex-grow flex flex-col items-stretch bg-gray-100 h-auto">
        <div class="sub-menu-bar flex flex-col items-stretch h-full">
          <div class="p-20px bg-white">
            <h2 class="text-2xl">Reviews</h2>
          </div>
          <div class="px-15px bg-white flex justify-start items-center"><a aria-current="page" href="/analyze/reviews/reviews" class="border-b-2 border-blue-500 router-link-exact-active p-10px">Reviews</a><a href="/analyze/reviews/social-reviews" class="p-10px">Social Reviews</a></div>
          <div class="flex-grow">
            <div data-v-428084ba="" class="p-25px">
              <div data-v-428084ba="" class="bg-white rounded-4px shadow p-10px">
                <div data-v-428084ba="" class="row flex justify-end p-10px">
                  <div data-v-428084ba="" class="relative w-full flex justify-end items-center"><button><svg class="svg-inline--fa fa-bars text-xl text-gray-400 hover:text-blue-500" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path class="" fill="currentColor" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"></path>
                      </svg></button><!----><!----></div>
                </div>
                <div data-v-428084ba="" class="row flex justify-between items-center p-10px"><button data-v-428084ba="" class="btn btn-blue"> + Add Review </button>
                  <div data-v-428084ba="" class="filter flex justify-end items-baseline"><svg class="svg-inline--fa fa-calendar-day" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="calendar-day" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                      <path class="" fill="currentColor" d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm80 64c-8.8 0-16 7.2-16 16v96c0 8.8 7.2 16 16 16h96c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80z"></path>
                    </svg>
                    <p class="font-bold">From</p><input min="2021-05-31" class="p-1" type="date" name="" id="">
                    <p class="font-bold">To</p><input class="p-1" type="date" name="" id=""><button class="btn btn-blue"><svg class="svg-inline--fa fa-rotate pr-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="rotate" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path class="" fill="currentColor" d="M142.9 142.9c62.2-62.2 162.7-62.5 225.3-1L327 183c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8H463.5c0 0 0 0 0 0H472c13.3 0 24-10.7 24-24V72c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2L413.4 96.6c-87.6-86.5-228.7-86.2-315.8 1C73.2 122 55.6 150.7 44.8 181.4c-5.9 16.7 2.9 34.9 19.5 40.8s34.9-2.9 40.8-19.5c7.7-21.8 20.2-42.3 37.8-59.8zM16 312v7.6 .7V440c0 9.7 5.8 18.5 14.8 22.2s19.3 1.7 26.2-5.2l41.6-41.6c87.6 86.5 228.7 86.2 315.8-1c24.4-24.4 42.1-53.1 52.9-83.7c5.9-16.7-2.9-34.9-19.5-40.8s-34.9 2.9-40.8 19.5c-7.7 21.8-20.2 42.3-37.8 59.8c-62.2 62.2-162.7 62.5-225.3 1L185 329c6.9-6.9 8.9-17.2 5.2-26.2s-12.5-14.8-22.2-14.8H48.4h-.7H40c-13.3 0-24 10.7-24 24z"></path>
                      </svg>Update </button>
                  </div>
                </div>
                <div data-v-428084ba="" class="row p-10px flex <xl:flex-col <xl:items-start justify-start items-center">
                  <div data-v-428084ba="" class="flex items-center <xl:mb-10px">
                    <div data-v-428084ba="" class="flex items-center border border-gray-300 rounded-4px">
                      <div data-v-428084ba="" class="filter flex items-center p-10px max-w-300px cursor-pointer"><svg data-v-428084ba="" class="svg-inline--fa fa-magnifying-glass mr-10px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="magnifying-glass" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path class="" fill="currentColor" d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"></path>
                        </svg><select data-v-428084ba="" class="border-0 !ring-transparent !outline-none min-w-250px ml-10px w-full" name="filter-campaings" id="filter-campaings">
                          <option data-v-428084ba="" value="">All Campaigns</option>
                          <option data-v-428084ba="" value="1B85A09AA6CF1">Aaron Krasnow</option>
                          <option data-v-428084ba="" value="1D80335319151">Angel Torres</option>
                          <option data-v-428084ba="" value="1D24325B63641">Angelo Vazquez</option>
                          <option data-v-428084ba="" value="1C14AED7C0389">Austin Harper</option>
                          <option data-v-428084ba="" value="1D42E41457559">Casey Evett</option>
                          <option data-v-428084ba="" value="1C12F272792B9">Chad Carncross</option>
                          <option data-v-428084ba="" value="1D42F8477D791">Christopher Maggiolo</option>
                          <option data-v-428084ba="" value="1DE1BA473C7B1">Dave Smith</option>
                          <option data-v-428084ba="" value="1D5FD968043A1">Derek Kijowski</option>
                          <option data-v-428084ba="" value="1B8877CC03CD1">George McPherson</option>
                          <option data-v-428084ba="" value="1DAE0B68A7A69">Greg Bark </option>
                          <option data-v-428084ba="" value="1B7EFFD223291">Hales AC Service</option>
                          <option data-v-428084ba="" value="1DD593824B201">Johnathan Jordan</option>
                          <option data-v-428084ba="" value="1D430C7AA39C9">Kiefer Hutcheson</option>
                          <option data-v-428084ba="" value="1C13D0A51CB21">Paul Hoang</option>
                          <option data-v-428084ba="" value="1D8A897F9D3F9">Scott Neubert</option>
                        </select></div>
                      <div data-v-428084ba="" class="filter flex justify-center items-center border-x border-gray-300 p-10px"><select data-v-428084ba="" name="" id="limit" class="!border-0 !ring-transparent !outline-none m-0 w-30px p-0">
                          <option data-v-428084ba="" value="10">10</option>
                          <option data-v-428084ba="" value="25">25</option>
                          <option data-v-428084ba="" value="50">50</option>
                          <option data-v-428084ba="" value="100">100</option>
                        </select></div>
                      <div data-v-428084ba="" class="filter py-10px px-30px flex items-center relative"><button data-v-428084ba=""> Filter Approved <svg data-v-428084ba="" class="svg-inline--fa fa-filter" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="filter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path class="" fill="currentColor" d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z"></path>
                          </svg></button><!----></div>
                    </div>
                    <div data-v-428084ba="" class="mx-10px flex justify-evenly items-center w-150px"><button data-v-428084ba=""><svg data-v-428084ba="" class="svg-inline--fa fa-face-grin text-4xl text-lime-500 opacity-50" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                        </svg></button><button data-v-428084ba=""><svg data-v-428084ba="" class="svg-inline--fa fa-face-meh text-4xl text-sky-500 opacity-50" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-meh" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM176.4 176a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm128 32a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM160 336H352c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"></path>
                        </svg></button><button data-v-428084ba=""><svg data-v-428084ba="" class="svg-inline--fa fa-face-frown text-4xl text-red-500 opacity-50" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-frown" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM159.3 388.7c-2.6 8.4-11.6 13.2-20 10.5s-13.2-11.6-10.5-20C145.2 326.1 196.3 288 256 288s110.8 38.1 127.3 91.3c2.6 8.4-2.1 17.4-10.5 20s-17.4-2.1-20-10.5C340.5 349.4 302.1 320 256 320s-84.5 29.4-96.7 68.7zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                        </svg></button></div>
                  </div>
                  <div data-v-428084ba="" class="buttons flex"><button data-v-428084ba="" class="btn btn-blue mr-5px"><svg data-v-428084ba="" class="svg-inline--fa fa-box-archive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path class="" fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>
                      </svg> Show Archived</button><button data-v-428084ba="" class="btn btn-blue mr-5px"><svg data-v-428084ba="" class="svg-inline--fa fa-music" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="music" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path class="" fill="currentColor" d="M499.1 6.3c8.1 6 12.9 15.6 12.9 25.7v72V368c0 44.2-43 80-96 80s-96-35.8-96-80s43-80 96-80c11.2 0 22 1.6 32 4.6V147L192 223.8V432c0 44.2-43 80-96 80s-96-35.8-96-80s43-80 96-80c11.2 0 22 1.6 32 4.6V200 128c0-14.1 9.3-26.6 22.8-30.7l320-96c9.7-2.9 20.2-1.1 28.3 5z"></path>
                      </svg> Audio &amp; Text</button><button data-v-428084ba="" class="btn btn-green mr-5px"> Reset Filters </button></div>
                </div><!---->
                <div data-v-428084ba="" class="row table p-10px w-full">
                  <table data-v-428084ba="" class="w-full">
                    <tr data-v-428084ba="" class="flex w-full">
                      <th data-v-428084ba="" class="p-10px w-auto">
                        <div data-v-428084ba="" class="flex justify-start items-center col-span-3 cursor-pointer"><svg class="svg-inline--fa fa-square mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="far" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path class="" fill="currentColor" d="M384 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H384zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"></path>
                          </svg>
                          <p></p>
                        </div>
                      </th>
                      <th data-v-428084ba="" class="p-10px w-60px"></th>
                      <th data-v-428084ba="" class="p-10px w-full"></th>
                      <th data-v-428084ba="" class="p-10px w-150px"></th>
                    </tr>
                    <tr data-v-f15ab7a3="" data-v-428084ba="" class="flex w-full">
                      <td data-v-f15ab7a3="" class="p-10px w-auto">
                        <div data-v-f15ab7a3="" class="flex justify-start items-center col-span-3 cursor-pointer"><svg class="svg-inline--fa fa-square mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="far" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path class="" fill="currentColor" d="M384 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H384zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"></path>
                          </svg>
                          <p></p>
                        </div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px flex flex-col items-center justify-start w-60px"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-face-grin text-lime-500 text-40px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                        </svg>
                        <div data-v-f15ab7a3="" class="w-40px h-40px rounded-full mt-10px text-white flex justify-center items-center bg-green-500">
                          <p data-v-f15ab7a3="">9.9</p>
                        </div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px w-full"><!---->
                        <div data-v-f15ab7a3="" class="comment border-l-5 border-blue-500 py-9px px-18px mb-5px">
                          <p data-v-f15ab7a3="">Aaron did a good job and kept me in the loop as he inspected the drain system of our AC unit. This was important since we live in Virginia and the condo is in St. Pete, so him keeping us posted along the way was good.</p>
                        </div>
                        <div data-v-f15ab7a3="" class="info flex flex-wrap">
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer:</span> David Bell</p>
                          </div><!---->
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer Email:</span> Dbell005@shentel.net</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer Address:</span> 6190 80th Street North</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Date:</span> 2024-06-27</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Campaign:</span> Aaron Krasnow</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Department:</span> Service Technician</p>
                          </div>
                        </div>
                        <div data-v-f15ab7a3="" class="ratings flex flex-wrap">
                          <div data-v-f15ab7a3="" class="info-tag bg-white py-5px px-15px rounded-full m-5px shadow border flex items-center">
                            <p data-v-f15ab7a3="">How likely are you to recommend us to your friends and family?</p>
                            <div data-v-f15ab7a3="" class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">10</div>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white py-5px px-15px rounded-full m-5px shadow border flex items-center">
                            <p data-v-f15ab7a3="">Professionalism</p>
                            <div data-v-f15ab7a3="" class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">10</div>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white py-5px px-15px rounded-full m-5px shadow border flex items-center">
                            <p data-v-f15ab7a3="">Quality of Service</p>
                            <div data-v-f15ab7a3="" class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">10</div>
                          </div>
                        </div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px w-200px">
                        <div data-v-f15ab7a3="" class="flex flex-col items-center justify-center h-full"><button data-v-f15ab7a3="" class="btn w-full mb-5px btn-green"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> Approve</button><button data-v-f15ab7a3="" class="btn btn-blue w-full mb-5px"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-box-archive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="" fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>
                            </svg> Archive</button><button data-v-f15ab7a3="" class="btn btn-blue w-full"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="" fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>
                            </svg> Edit</button></div>
                      </td><!----><!----><!---->
                    </tr>
                    <tr data-v-f15ab7a3="" data-v-428084ba="" class="flex w-full">
                      <td data-v-f15ab7a3="" class="p-10px w-auto">
                        <div data-v-f15ab7a3="" class="flex justify-start items-center col-span-3 cursor-pointer"><svg class="svg-inline--fa fa-square mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="far" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path class="" fill="currentColor" d="M384 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H384zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"></path>
                          </svg>
                          <p></p>
                        </div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px flex flex-col items-center justify-start w-60px">
                        <div data-v-f15ab7a3="" class="sm-badge sm-google"><i data-v-f15ab7a3=""></i></div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px w-full"><!---->
                        <div data-v-f15ab7a3="" class="comment border-l-5 border-blue-500 py-9px px-18px mb-5px">
                          <p data-v-f15ab7a3="">Derek explained the situation clearly and we were able to correctly move forward.</p>
                        </div>
                        <div data-v-f15ab7a3="" class="info flex flex-wrap"><!----><!----><!----><!---->
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Date:</span> 2024-06-27</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Campaign:</span> Hales AC Service</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Department:</span> General</p>
                          </div>
                        </div>
                        <div data-v-f15ab7a3="" class="ratings flex flex-wrap"></div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px w-200px">
                        <div data-v-f15ab7a3="" class="flex flex-col items-center justify-center h-full"><button data-v-f15ab7a3="" class="btn w-full mb-5px btn-green"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> Approve</button><button data-v-f15ab7a3="" class="btn btn-blue w-full mb-5px"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-box-archive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="" fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>
                            </svg> Archive</button><button data-v-f15ab7a3="" class="btn btn-blue w-full"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="" fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>
                            </svg> Edit</button></div>
                      </td><!----><!----><!---->
                    </tr>
                    <tr data-v-f15ab7a3="" data-v-428084ba="" class="flex w-full">
                      <td data-v-f15ab7a3="" class="p-10px w-auto">
                        <div data-v-f15ab7a3="" class="flex justify-start items-center col-span-3 cursor-pointer"><svg class="svg-inline--fa fa-square mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="far" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path class="" fill="currentColor" d="M384 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H384zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"></path>
                          </svg>
                          <p></p>
                        </div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px flex flex-col items-center justify-start w-60px"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-face-grin text-lime-500 text-40px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                        </svg>
                        <div data-v-f15ab7a3="" class="w-40px h-40px rounded-full mt-10px text-white flex justify-center items-center bg-green-500">
                          <p data-v-f15ab7a3="">9.9</p>
                        </div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px w-full"><!---->
                        <div data-v-f15ab7a3="" class="comment border-l-5 border-blue-500 py-9px px-18px mb-5px">
                          <p data-v-f15ab7a3="">Great people</p>
                        </div>
                        <div data-v-f15ab7a3="" class="info flex flex-wrap">
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer:</span> None None</p>
                          </div><!---->
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer Email:</span> kathleenkniskern@nycap.rr.com</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer Address:</span> 4705 1st ST NE #139</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Date:</span> 2024-06-27</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Campaign:</span> Angelo Vazquez</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Department:</span> Service Technician</p>
                          </div>
                        </div>
                        <div data-v-f15ab7a3="" class="ratings flex flex-wrap">
                          <div data-v-f15ab7a3="" class="info-tag bg-white py-5px px-15px rounded-full m-5px shadow border flex items-center">
                            <p data-v-f15ab7a3="">How likely are you to recommend us to your friends and family?</p>
                            <div data-v-f15ab7a3="" class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">10</div>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white py-5px px-15px rounded-full m-5px shadow border flex items-center">
                            <p data-v-f15ab7a3="">Professionalism</p>
                            <div data-v-f15ab7a3="" class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">10</div>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white py-5px px-15px rounded-full m-5px shadow border flex items-center">
                            <p data-v-f15ab7a3="">Quality of Service</p>
                            <div data-v-f15ab7a3="" class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">10</div>
                          </div>
                        </div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px w-200px">
                        <div data-v-f15ab7a3="" class="flex flex-col items-center justify-center h-full"><button data-v-f15ab7a3="" class="btn w-full mb-5px btn-green"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> Approve</button><button data-v-f15ab7a3="" class="btn btn-blue w-full mb-5px"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-box-archive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="" fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>
                            </svg> Archive</button><button data-v-f15ab7a3="" class="btn btn-blue w-full"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="" fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>
                            </svg> Edit</button></div>
                      </td><!----><!----><!---->
                    </tr>
                    <tr data-v-f15ab7a3="" data-v-428084ba="" class="flex w-full">
                      <td data-v-f15ab7a3="" class="p-10px w-auto">
                        <div data-v-f15ab7a3="" class="flex justify-start items-center col-span-3 cursor-pointer"><svg class="svg-inline--fa fa-square mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="far" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path class="" fill="currentColor" d="M384 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H384zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"></path>
                          </svg>
                          <p></p>
                        </div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px flex flex-col items-center justify-start w-60px">
                        <div data-v-f15ab7a3="" class="sm-badge sm-google"><i data-v-f15ab7a3=""></i></div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px w-full"><!---->
                        <div data-v-f15ab7a3="" class="comment border-l-5 border-blue-500 py-9px px-18px mb-5px">
                          <p data-v-f15ab7a3="">Great experience with Hales AC and with Chad and team. A/C unit failed and Hales was able to quickly provide a quote and schedule a super quick installation. Very efficient and professional.</p>
                        </div>
                        <div data-v-f15ab7a3="" class="info flex flex-wrap"><!----><!----><!----><!---->
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Date:</span> 2024-06-26</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Campaign:</span> Hales AC Service</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Department:</span> General</p>
                          </div>
                        </div>
                        <div data-v-f15ab7a3="" class="ratings flex flex-wrap"></div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px w-200px">
                        <div data-v-f15ab7a3="" class="flex flex-col items-center justify-center h-full"><button data-v-f15ab7a3="" class="btn w-full mb-5px btn-green"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> Approve</button><button data-v-f15ab7a3="" class="btn btn-blue w-full mb-5px"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-box-archive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="" fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>
                            </svg> Archive</button><button data-v-f15ab7a3="" class="btn btn-blue w-full"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="" fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>
                            </svg> Edit</button></div>
                      </td><!----><!----><!---->
                    </tr>
                    <tr data-v-f15ab7a3="" data-v-428084ba="" class="flex w-full">
                      <td data-v-f15ab7a3="" class="p-10px w-auto">
                        <div data-v-f15ab7a3="" class="flex justify-start items-center col-span-3 cursor-pointer"><svg class="svg-inline--fa fa-square mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="far" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path class="" fill="currentColor" d="M384 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H384zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"></path>
                          </svg>
                          <p></p>
                        </div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px flex flex-col items-center justify-start w-60px">
                        <div data-v-f15ab7a3="" class="sm-badge sm-google"><i data-v-f15ab7a3=""></i></div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px w-full"><!---->
                        <div data-v-f15ab7a3="" class="comment border-l-5 border-blue-500 py-9px px-18px mb-5px">
                          <p data-v-f15ab7a3="">Angelo was very friendly and efficient! Thank you!</p>
                        </div>
                        <div data-v-f15ab7a3="" class="info flex flex-wrap"><!----><!----><!----><!---->
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Date:</span> 2024-06-26</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Campaign:</span> Hales AC Service</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Department:</span> General</p>
                          </div>
                        </div>
                        <div data-v-f15ab7a3="" class="ratings flex flex-wrap"></div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px w-200px">
                        <div data-v-f15ab7a3="" class="flex flex-col items-center justify-center h-full"><button data-v-f15ab7a3="" class="btn w-full mb-5px btn-green"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> Approve</button><button data-v-f15ab7a3="" class="btn btn-blue w-full mb-5px"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-box-archive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="" fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>
                            </svg> Archive</button><button data-v-f15ab7a3="" class="btn btn-blue w-full"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="" fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>
                            </svg> Edit</button></div>
                      </td><!----><!----><!---->
                    </tr>
                    <tr data-v-f15ab7a3="" data-v-428084ba="" class="flex w-full">
                      <td data-v-f15ab7a3="" class="p-10px w-auto">
                        <div data-v-f15ab7a3="" class="flex justify-start items-center col-span-3 cursor-pointer"><svg class="svg-inline--fa fa-square mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="far" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path class="" fill="currentColor" d="M384 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H384zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"></path>
                          </svg>
                          <p></p>
                        </div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px flex flex-col items-center justify-start w-60px"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-face-grin text-lime-500 text-40px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                        </svg>
                        <div data-v-f15ab7a3="" class="w-40px h-40px rounded-full mt-10px text-white flex justify-center items-center bg-green-500">
                          <p data-v-f15ab7a3="">9.9</p>
                        </div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px w-full"><!---->
                        <div data-v-f15ab7a3="" class="comment border-l-5 border-blue-500 py-9px px-18px mb-5px">
                          <p data-v-f15ab7a3="">Great service! Very professional and knowledgeable</p>
                        </div>
                        <div data-v-f15ab7a3="" class="info flex flex-wrap">
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer:</span> Aadil Mohammed</p>
                          </div><!---->
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer Email:</span> 727trident@gmail.com</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer Address:</span> 7601 49th Street North</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Date:</span> 2024-06-26</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Campaign:</span> Derek Kijowski</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Department:</span> Service Technician</p>
                          </div>
                        </div>
                        <div data-v-f15ab7a3="" class="ratings flex flex-wrap">
                          <div data-v-f15ab7a3="" class="info-tag bg-white py-5px px-15px rounded-full m-5px shadow border flex items-center">
                            <p data-v-f15ab7a3="">How likely are you to recommend us to your friends and family?</p>
                            <div data-v-f15ab7a3="" class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">10</div>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white py-5px px-15px rounded-full m-5px shadow border flex items-center">
                            <p data-v-f15ab7a3="">Professionalism</p>
                            <div data-v-f15ab7a3="" class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">10</div>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white py-5px px-15px rounded-full m-5px shadow border flex items-center">
                            <p data-v-f15ab7a3="">Quality of Service</p>
                            <div data-v-f15ab7a3="" class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">10</div>
                          </div>
                        </div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px w-200px">
                        <div data-v-f15ab7a3="" class="flex flex-col items-center justify-center h-full"><button data-v-f15ab7a3="" class="btn w-full mb-5px btn-green"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> Approve</button><button data-v-f15ab7a3="" class="btn btn-blue w-full mb-5px"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-box-archive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="" fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>
                            </svg> Archive</button><button data-v-f15ab7a3="" class="btn btn-blue w-full"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="" fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>
                            </svg> Edit</button></div>
                      </td><!----><!----><!---->
                    </tr>
                    <tr data-v-f15ab7a3="" data-v-428084ba="" class="flex w-full">
                      <td data-v-f15ab7a3="" class="p-10px w-auto">
                        <div data-v-f15ab7a3="" class="flex justify-start items-center col-span-3 cursor-pointer"><svg class="svg-inline--fa fa-square mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="far" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path class="" fill="currentColor" d="M384 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H384zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"></path>
                          </svg>
                          <p></p>
                        </div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px flex flex-col items-center justify-start w-60px">
                        <div data-v-f15ab7a3="" class="sm-badge sm-google"><i data-v-f15ab7a3=""></i></div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px w-full"><!---->
                        <div data-v-f15ab7a3="" class="comment border-l-5 border-blue-500 py-9px px-18px mb-5px">
                          <p data-v-f15ab7a3="">Beware of this company, they are not honest .They lied to me about my unit not being under warranty when it was still under warranty so they could charge me money for part that should have been covered, but worse than that that they did not even install the part they charged me for. Also, , the technician was trying to sell me a new unit when my unit was fine .</p>
                        </div>
                        <div data-v-f15ab7a3="" class="info flex flex-wrap"><!----><!----><!----><!---->
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Date:</span> 2024-06-26</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Campaign:</span> Hales AC Service</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Department:</span> General</p>
                          </div>
                        </div>
                        <div data-v-f15ab7a3="" class="ratings flex flex-wrap"></div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px w-200px">
                        <div data-v-f15ab7a3="" class="flex flex-col items-center justify-center h-full"><button data-v-f15ab7a3="" class="btn w-full mb-5px btn-green"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> Approve</button><button data-v-f15ab7a3="" class="btn btn-blue w-full mb-5px"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-box-archive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="" fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>
                            </svg> Archive</button><button data-v-f15ab7a3="" class="btn btn-blue w-full"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="" fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>
                            </svg> Edit</button></div>
                      </td><!----><!----><!---->
                    </tr>
                    <tr data-v-f15ab7a3="" data-v-428084ba="" class="flex w-full">
                      <td data-v-f15ab7a3="" class="p-10px w-auto">
                        <div data-v-f15ab7a3="" class="flex justify-start items-center col-span-3 cursor-pointer"><svg class="svg-inline--fa fa-square mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="far" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path class="" fill="currentColor" d="M384 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H384zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"></path>
                          </svg>
                          <p></p>
                        </div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px flex flex-col items-center justify-start w-60px"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-face-grin text-lime-500 text-40px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                        </svg>
                        <div data-v-f15ab7a3="" class="w-40px h-40px rounded-full mt-10px text-white flex justify-center items-center bg-green-500">
                          <p data-v-f15ab7a3="">9.9</p>
                        </div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px w-full"><!---->
                        <div data-v-f15ab7a3="" class="comment border-l-5 border-blue-500 py-9px px-18px mb-5px">
                          <p data-v-f15ab7a3="">Aaron is outstanding! Attentive and communicates!</p>
                        </div>
                        <div data-v-f15ab7a3="" class="info flex flex-wrap">
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer:</span> Norm Norton</p>
                          </div><!---->
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer Email:</span> normnorton66@aol.com</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer Address:</span> 11473 Imperial Grove Dr W</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Date:</span> 2024-06-26</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Campaign:</span> Aaron Krasnow</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Department:</span> Service Technician</p>
                          </div>
                        </div>
                        <div data-v-f15ab7a3="" class="ratings flex flex-wrap">
                          <div data-v-f15ab7a3="" class="info-tag bg-white py-5px px-15px rounded-full m-5px shadow border flex items-center">
                            <p data-v-f15ab7a3="">How likely are you to recommend us to your friends and family?</p>
                            <div data-v-f15ab7a3="" class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">10</div>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white py-5px px-15px rounded-full m-5px shadow border flex items-center">
                            <p data-v-f15ab7a3="">Professionalism</p>
                            <div data-v-f15ab7a3="" class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">10</div>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white py-5px px-15px rounded-full m-5px shadow border flex items-center">
                            <p data-v-f15ab7a3="">Quality of Service</p>
                            <div data-v-f15ab7a3="" class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">10</div>
                          </div>
                        </div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px w-200px">
                        <div data-v-f15ab7a3="" class="flex flex-col items-center justify-center h-full"><button data-v-f15ab7a3="" class="btn w-full mb-5px btn-green"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> Approve</button><button data-v-f15ab7a3="" class="btn btn-blue w-full mb-5px"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-box-archive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="" fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>
                            </svg> Archive</button><button data-v-f15ab7a3="" class="btn btn-blue w-full"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="" fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>
                            </svg> Edit</button></div>
                      </td><!----><!----><!---->
                    </tr>
                    <tr data-v-f15ab7a3="" data-v-428084ba="" class="flex w-full">
                      <td data-v-f15ab7a3="" class="p-10px w-auto">
                        <div data-v-f15ab7a3="" class="flex justify-start items-center col-span-3 cursor-pointer"><svg class="svg-inline--fa fa-square mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="far" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path class="" fill="currentColor" d="M384 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H384zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"></path>
                          </svg>
                          <p></p>
                        </div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px flex flex-col items-center justify-start w-60px"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-face-grin text-lime-500 text-40px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                        </svg>
                        <div data-v-f15ab7a3="" class="w-40px h-40px rounded-full mt-10px text-white flex justify-center items-center bg-green-500">
                          <p data-v-f15ab7a3="">9.9</p>
                        </div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px w-full"><!---->
                        <div data-v-f15ab7a3="" class="comment border-l-5 border-blue-500 py-9px px-18px mb-5px">
                          <p data-v-f15ab7a3="">Yea Chad Carncross did a very nice job. Very nice and efficient. Thank you</p>
                        </div>
                        <div data-v-f15ab7a3="" class="info flex flex-wrap">
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer:</span> Barbara King</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer Phone:</span> +1 (727) 656-8372</p>
                          </div><!---->
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer Address:</span> 4811 17th Avenue North</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Date:</span> 2024-06-26</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Campaign:</span> Chad Carncross</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Department:</span> Install Team</p>
                          </div>
                        </div>
                        <div data-v-f15ab7a3="" class="ratings flex flex-wrap">
                          <div data-v-f15ab7a3="" class="info-tag bg-white py-5px px-15px rounded-full m-5px shadow border flex items-center">
                            <p data-v-f15ab7a3="">How likely are you to recommend us to your friends and family?</p>
                            <div data-v-f15ab7a3="" class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">10</div>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white py-5px px-15px rounded-full m-5px shadow border flex items-center">
                            <p data-v-f15ab7a3="">Professionalism</p>
                            <div data-v-f15ab7a3="" class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">10</div>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white py-5px px-15px rounded-full m-5px shadow border flex items-center">
                            <p data-v-f15ab7a3="">Quality of Service</p>
                            <div data-v-f15ab7a3="" class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">10</div>
                          </div>
                        </div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px w-200px">
                        <div data-v-f15ab7a3="" class="flex flex-col items-center justify-center h-full"><button data-v-f15ab7a3="" class="btn w-full mb-5px btn-green"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> Approve</button><button data-v-f15ab7a3="" class="btn btn-blue w-full mb-5px"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-box-archive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="" fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>
                            </svg> Archive</button><button data-v-f15ab7a3="" class="btn btn-blue w-full"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="" fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>
                            </svg> Edit</button></div>
                      </td><!----><!----><!---->
                    </tr>
                    <tr data-v-f15ab7a3="" data-v-428084ba="" class="flex w-full">
                      <td data-v-f15ab7a3="" class="p-10px w-auto">
                        <div data-v-f15ab7a3="" class="flex justify-start items-center col-span-3 cursor-pointer"><svg class="svg-inline--fa fa-square mr-5px text-17px" aria-hidden="true" focusable="false" data-prefix="far" data-icon="square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path class="" fill="currentColor" d="M384 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H384zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z"></path>
                          </svg>
                          <p></p>
                        </div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px flex flex-col items-center justify-start w-60px"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-face-grin text-lime-500 text-40px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="face-grin" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path class="" fill="currentColor" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM388.1 312.8c12.3-3.8 24.3 6.9 19.3 18.7C382.4 390.6 324.2 432 256.3 432s-126.2-41.4-151.1-100.5c-5-11.8 7-22.5 19.3-18.7c39.7 12.2 84.5 19 131.8 19s92.1-6.8 131.8-19zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                        </svg>
                        <div data-v-f15ab7a3="" class="w-40px h-40px rounded-full mt-10px text-white flex justify-center items-center bg-green-500">
                          <p data-v-f15ab7a3="">9.9</p>
                        </div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px w-full"><!---->
                        <div data-v-f15ab7a3="" class="comment border-l-5 border-blue-500 py-9px px-18px mb-5px">
                          <p data-v-f15ab7a3="">The technicians that were here were very nice they did a excellent job. And I would recommend Hales AC to anybody because you people are awesome all you people at Hales air conditioning. I am very happy my AC is working fantastic. Thank you</p>
                        </div>
                        <div data-v-f15ab7a3="" class="info flex flex-wrap">
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer:</span> Barbara King</p>
                          </div><!---->
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer Email:</span> bking2248@gmail.com</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Customer Address:</span> 4811 17th Avenue North</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Date:</span> 2024-06-25</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Campaign:</span> Hales AC Service</p>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white opacity-40 py-5px px-10px rounded-full m-5px shadow border">
                            <p data-v-f15ab7a3=""><span data-v-f15ab7a3="" class="font-bold">Department:</span> General</p>
                          </div>
                        </div>
                        <div data-v-f15ab7a3="" class="ratings flex flex-wrap">
                          <div data-v-f15ab7a3="" class="info-tag bg-white py-5px px-15px rounded-full m-5px shadow border flex items-center">
                            <p data-v-f15ab7a3="">How likely are you to recommend us to your friends and family?</p>
                            <div data-v-f15ab7a3="" class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">10</div>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white py-5px px-15px rounded-full m-5px shadow border flex items-center">
                            <p data-v-f15ab7a3="">Professionalism</p>
                            <div data-v-f15ab7a3="" class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">10</div>
                          </div>
                          <div data-v-f15ab7a3="" class="info-tag bg-white py-5px px-15px rounded-full m-5px shadow border flex items-center">
                            <p data-v-f15ab7a3="">Quality of Service</p>
                            <div data-v-f15ab7a3="" class="rating rounded-1/2 w-20px h-20px text-white flex justify-center items-center p-13px ml-10px bg-green-500">10</div>
                          </div>
                        </div>
                      </td>
                      <td data-v-f15ab7a3="" class="p-10px w-200px">
                        <div data-v-f15ab7a3="" class="flex flex-col items-center justify-center h-full"><button data-v-f15ab7a3="" class="btn w-full mb-5px btn-green"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-check" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path class="" fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path>
                            </svg> Approve</button><button data-v-f15ab7a3="" class="btn btn-blue w-full mb-5px"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-box-archive" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="box-archive" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="" fill="currentColor" d="M32 32H480c17.7 0 32 14.3 32 32V96c0 17.7-14.3 32-32 32H32C14.3 128 0 113.7 0 96V64C0 46.3 14.3 32 32 32zm0 128H480V416c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V160zm128 80c0 8.8 7.2 16 16 16H336c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"></path>
                            </svg> Archive</button><button data-v-f15ab7a3="" class="btn btn-blue w-full"><svg data-v-f15ab7a3="" class="svg-inline--fa fa-pen" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path class="" fill="currentColor" d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z"></path>
                            </svg> Edit</button></div>
                      </td><!----><!----><!---->
                    </tr>
                  </table>
                  <div data-v-428084ba="" class="pagination flex justify-between items-center">
                    <div data-v-428084ba="" class="pagination-links grid grid-rows-1 grid-flow-col gap-5px"><button data-v-428084ba="" class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100"><svg data-v-428084ba="" class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path class="" fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                        </svg></button><button data-v-428084ba="" class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100" disabled=""><svg data-v-428084ba="" class="svg-inline--fa fa-caret-left" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                          <path class="" fill="currentColor" d="M9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l128-128c9.2-9.2 22.9-11.9 34.9-6.9s19.8 16.6 19.8 29.6l0 256c0 12.9-7.8 24.6-19.8 29.6s-25.7 2.2-34.9-6.9l-128-128z"></path>
                        </svg></button><button data-v-428084ba="" class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-blue-500 text-white">1</button><button data-v-428084ba="" class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100">2</button><button data-v-428084ba="" class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100">3</button><button data-v-428084ba="" class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100">4</button><button data-v-428084ba="" class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100">5</button><button data-v-428084ba="" class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100"><svg data-v-428084ba="" class="svg-inline--fa fa-caret-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                          <path class="" fill="currentColor" d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6l0 256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9l128-128z"></path>
                        </svg></button><button data-v-428084ba="" class="h-50px w-50px flex justify-center items-center rounded-1/2 bg-gray-100"><svg data-v-428084ba="" class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                          <path class="" fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                        </svg></button></div>
                  </div>
                </div><!----><!---->
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer bg-gray-100 p-20px text-center">
        <div class="text-gray-400">
          <p>© 2024 2.0.9 | v49.0.17</p>
          <div class="flex justify-center"><a href="/" target="_blank" class="hover:text-blue-300">pulseM</a><span class="mx-2">|</span><a href="https://legal.pulsem.me/privacy-policy" target="_blank" class="hover:text-blue-300">Privacy Policy</a><span class="mx-2">|</span><a href="https://legal.pulsem.me/terms-and-conditions" target="_blank" class="hover:text-blue-300">Terms and Conditions</a><!----></div>
        </div>
      </footer>
    </div>
  </div>



  <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
    <defs id="SvgjsDefs1002"></defs>
    <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
    <path id="SvgjsPath1004" d="M0 0 "></path>
  </svg>
</body>

</html>