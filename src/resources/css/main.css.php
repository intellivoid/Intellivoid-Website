/*!
 *
 *   Template Name: Opalin HTML Template
 *   Template URI: https://uiuxassets.com/assets/opalin-html-template/
 *   Author: UI/UX Assets <hello@uiuxassets.com>
 *   Author URI: https://uiuxassets.com/
 *   Version: v1.0.0
 *   License: GNU General Public License, Version 2
 *   License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *   Copyright (C) 2018 UI/UX Assets
 *
*/
/* -----------------------------------------------------------------------------

Table Of Contents

1.0 - Base
  1.1 - Reset
  1.2 - Typography
  1.3 - Grid

2.0 - Tools
  2.1 - Align
  2.2 - Background
  2.3 - Divider
  2.4 - Full Screen
  2.5 - Full Width
  2.6 - Max Width
  2.7 - Min Width
  2.8 - Opacity
  2.9 - Rounded
  2.10 - Shadow
  2.11 - Spacing

3.0 - Components
  3.1 - Alerts
  3.2 - Buttons
  3.3 - Card
  3.4 - Footer
  3.5 - Forms
  3.6 - Header
  3.7 - Icons
  3.8 - List
  3.9 - Logo
  3.10 - Pricing
  3.11 - Table
  3.12 - Timeline

4.0 - Pages
  4.1 - Onboarding

----------------------------------------------------------------------------- */
@import url("https://fonts.googleapis.com/css?family=Lato:300,400,700,900");
@import url("https://fonts.googleapis.com/css?family=PT+Serif:400,700");
@import url("https://fonts.googleapis.com/icon?family=Material+Icons");
/* -----------------------------------------------------------------------------

# Base - Reset

----------------------------------------------------------------------------- */
/*! normalize.css v7.0.0 | MIT License | github.com/necolas/normalize.css */
html button, html hr, html input {
  overflow: visible;
}

html audio, html canvas, html progress, html video {
  display: inline-block;
}

html progress, html sub, html sup {
  vertical-align: baseline;
}

html [type=checkbox], html [type=radio], html legend {
  box-sizing: border-box;
  padding: 0;
}

html html {
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}

html body {
  margin: 0;
}

html article, html aside, html details, html figcaption, html figure, html footer, html header, html main, html menu, html nav, html section {
  display: block;
}

html figure {
  margin: 1em 40px;
}

html hr {
  box-sizing: content-box;
  height: 0;
}

html code, html kbd, html pre, html samp {
  font-family: monospace,monospace;
  font-size: 1em;
}

html a {
  background-color: transparent;
  -webkit-text-decoration-skip: objects;
}

html abbr[title] {
  border-bottom: none;
  text-decoration: underline;
  text-decoration: underline dotted;
}

html b, html strong {
  font-weight: bolder;
}

html dfn {
  font-style: italic;
}

html mark {
  background-color: #ff0;
  color: #000;
}

html small {
  font-size: 80%;
}

html sub, html sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
}

html sub {
  bottom: -.25em;
}

html sup {
  top: -.5em;
}

html audio:not([controls]) {
  display: none;
  height: 0;
}

html img {
  border-style: none;
}

html svg:not(:root) {
  overflow: hidden;
}

html button, html input, html optgroup, html select, html textarea {
  font-family: sans-serif;
  font-size: 100%;
  margin: 0;
}

html button, html select {
  text-transform: none;
}

html [type=reset], html [type=submit], html button, html html [type=button] {
  -webkit-appearance: button;
}

html [type=button]::-moz-focus-inner, html [type=reset]::-moz-focus-inner, html [type=submit]::-moz-focus-inner, html button::-moz-focus-inner {
  border-style: none;
  padding: 0;
}

html [type=button]:-moz-focusring, html [type=reset]:-moz-focusring, html [type=submit]:-moz-focusring, html button:-moz-focusring {
  outline: ButtonText dotted 1px;
}

html fieldset {
  padding: .35em .75em .625em;
}

html legend {
  color: inherit;
  display: table;
  max-width: 100%;
  white-space: normal;
}

html textarea {
  overflow: auto;
}

html [type=number]::-webkit-inner-spin-button, html [type=number]::-webkit-outer-spin-button {
  height: auto;
}

html [type=search] {
  -webkit-appearance: textfield;
  outline-offset: -2px;
}

html [type=search]::-webkit-search-cancel-button, html [type=search]::-webkit-search-decoration {
  -webkit-appearance: none;
}

html ::-webkit-file-upload-button {
  -webkit-appearance: button;
  font: inherit;
}

html summary {
  display: list-item;
}

html [hidden], html template {
  display: none;
}

/* Defaults */
html {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-rendering: optimizeLegibility;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

.preload * {
  -webkit-transition: none !important;
  -moz-transition: none !important;
  -ms-transition: none !important;
  -o-transition: none !important;
  transition: none !important;
}

img {
  -webkit-flex-shrink: 0;
  -moz-flex-shrink: 0;
  -ms-flex-shrink: 0;
  flex-shrink: 0;
  max-width: 100%;
  vertical-align: bottom;
}

section {
  overflow: hidden;
}

::selection {
  background: #575bde;
  color: #fff;
}

::-moz-selection {
  background: #575bde;
  color: #fff;
}

/* -----------------------------------------------------------------------------

# Base - Typography

----------------------------------------------------------------------------- */
html {
  font-size: 16px;
  font-weight: 400;
  line-height: 24px;
}

body {
  color: #110f24;
  font-family: "Lato", Helvetica, sans-serif;
  font-size: 1rem;
  line-height: 1.5rem;
  overflow-x: hidden;
}

a {
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -ms-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  color: #575bde;
  cursor: pointer;
  text-decoration: none;
}

a:hover:not(.button) {
  color: #110f24;
  opacity: 0.9;
}

blockquote {
  font-size: 1.25rem;
  font-weight: 400;
  letter-spacing: 0.3px;
  line-height: 2rem;
  -webkit-border-radius: 0.1875rem;
  -moz-border-radius: 0.1875rem;
  border-radius: 0.1875rem;
  background: #f6f6f9;
  border-left: 3px solid #ccced0;
  font-style: italic;
  margin: 0 0 1rem 0;
  padding: 1rem;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  margin: 0 0 1rem 0;
}

h1:last-child,
h2:last-child,
h3:last-child,
h4:last-child,
h5:last-child,
h6:last-child {
  margin: 0;
}

h1,
h2,
h3 {
  font-family: "PT Serif", Georgia, serif;
}

h4,
h5,
h6 {
  font-family: "Lato", Helvetica, sans-serif;
}

h1 {
  font-size: 4rem;
  font-weight: 900;
  line-height: 5.25rem;
}

h1.hero {
  font-size: 3rem;
  font-weight: 900;
  line-height: 3.75rem;
}

@media only screen and (max-width: 479px) {
  h1 {
    font-size: 3rem;
    line-height: 3.75rem;
  }
  h1.hero {
    font-size: 2.5rem;
    line-height: 3.25rem;
  }
}

h2 {
  font-size: 3rem;
  font-weight: 900;
  line-height: 3.75rem;
}

@media only screen and (max-width: 479px) {
  h2 {
    font-size: 2.5rem;
    line-height: 3.25rem;
  }
}

h3 {
  font-size: 2rem;
  font-weight: 900;
  line-height: 2.75rem;
}

@media only screen and (max-width: 479px) {
  h3 {
    font-size: 1.75rem;
    line-height: 2.25rem;
  }
}

h4 {
  font-size: 1.5rem;
  font-weight: 700;
  line-height: 2.25rem;
}

h5 {
  font-size: 1.25rem;
  font-weight: 700;
  line-height: 1.75rem;
}

h6 {
  font-size: 1rem;
  font-weight: 700;
  line-height: 1.5rem;
  margin: 0 0 0.5rem 0;
}

p {
  margin: 0 0 1rem 0;
}

p:last-child {
  margin: 0;
}

.lead {
  font-size: 1.5rem;
  font-weight: 400;
  line-height: 2rem;
}

@media only screen and (max-width: 479px) {
  .lead {
    font-size: 1.5rem;
    line-height: 2rem;
  }
}

.paragraph {
  font-size: 1.25rem;
  font-weight: 400;
  letter-spacing: 0.3px;
  line-height: 2rem;
}

.paragraph.serif {
  font-family: "PT Serif", Georgia, serif;
}

@media only screen and (max-width: 479px) {
  .paragraph {
    font-size: 1.125rem;
    letter-spacing: normal;
    line-height: 1.75rem;
  }
}

.muted {
  opacity: 0.4;
}

.dark {
  color: #fff;
}

.dark a:not(.button) {
  color: #fff;
}

.dark blockquote {
  background: #110f24;
}

.dark p {
  opacity: 0.9;
}

/* -----------------------------------------------------------------------------

# Base - Grid

----------------------------------------------------------------------------- */
.row {
  display: table;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: flex;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  width: 100%;
}

.row .col-one-half {
  width: 48%;
}

.row .col-one-third {
  width: 30.6666666667%;
}

.row .col-one-fourth {
  width: 22%;
}

.row .col-one-fifth {
  width: 16.8%;
}

.row .col-two-thirds {
  width: 65.3333333333%;
}

.row .col-two-fourths {
  width: 48%;
}

.row .col-two-fifths {
  width: 37.6%;
}

.row .col-three-fourths {
  width: 74%;
}

.row .col-three-fifths {
  width: 58.4%;
}

.row .col-four-fifths {
  width: 79.2%;
}

.row [class^="col-"] {
  float: left;
  margin: 0 2%;
}

.row [class^="col-"]:first-child {
  margin-left: 0;
}

.row [class^="col-"]:last-child {
  margin-right: 0;
}

@media only screen and (max-width: 1023px) {
  .row [class^="col-"] {
    margin: 3rem 2% 0 2%;
    width: 48%;
  }
  .row [class^="col-"]:nth-child(-n+2) {
    margin-top: 0;
  }
  .row [class^="col-"]:nth-child(odd) {
    margin-left: 0;
  }
  .row [class^="col-"]:nth-child(even) {
    margin-right: 0;
  }
  .row [class^="col-"]:last-child:nth-child(odd) {
    width: 100%;
  }
  .row [class*="-fifth"] {
    margin: 3rem 0 0 0;
    width: 100%;
  }
  .row [class*="-fifth"]:nth-child(2) {
    margin-top: 3rem;
  }
}

@media only screen and (max-width: 767px) {
  .row [class^="col-"] {
    margin: 3rem 0 0 0;
    width: 100%;
  }
  .row [class^="col-"]:nth-child(2) {
    margin-top: 3rem;
  }
}

/* Reduce spacing between rows */
@media only screen and (max-width: 1023px) {
  .row.reduce-spacing [class^="col-"] {
    margin: 1rem 2% 0 2%;
  }
  .row.reduce-spacing [class^="col-"]:last-child {
    margin-right: 0;
  }
  .row.reduce-spacing [class^="col-"]:nth-child(-n+2) {
    margin-top: 0;
  }
  .row.reduce-spacing [class^="col-"]:nth-child(odd) {
    margin-left: 0;
  }
  .row.reduce-spacing [class^="col-"]:nth-child(even) {
    margin-right: 0;
  }
  .row.reduce-spacing [class*="-fifth"] {
    margin: 1rem 0 0 0;
  }
  .row.reduce-spacing [class*="-fifth"]:nth-child(2) {
    margin-top: 1rem;
  }
}

@media only screen and (max-width: 767px) {
  .row.reduce-spacing [class^="col-"] {
    margin: 1rem 0 0 0;
  }
  .row.reduce-spacing [class^="col-"]:nth-child(2) {
    margin-top: 1rem;
  }
}

/* Reverse the order of columns when going full-width */
@media only screen and (max-width: 767px) {
  .row.reverse-order [class^="col-"] {
    margin: 3rem 0 0 0;
  }
  .row.reverse-order [class^="col-"]:last-child {
    margin-top: 0;
  }
  .row.reverse-order [class^="col-"]:nth-child(1) {
    -webkit-order: 5;
    -moz-order: 5;
    order: 5;
  }
  .row.reverse-order [class^="col-"]:nth-child(2) {
    -webkit-order: 4;
    -moz-order: 4;
    order: 4;
  }
  .row.reverse-order [class^="col-"]:nth-child(3) {
    -webkit-order: 3;
    -moz-order: 3;
    order: 3;
  }
  .row.reverse-order [class^="col-"]:nth-child(4) {
    -webkit-order: 2;
    -moz-order: 2;
    order: 2;
  }
  .row.reverse-order [class^="col-"]:nth-child(5) {
    -webkit-order: 1;
    -moz-order: 1;
    order: 1;
  }
  .row.reverse-order.reduce-spacing [class^="col-"] {
    margin: 1rem 0 0 0;
  }
  .row.reverse-order.reduce-spacing [class^="col-"]:last-child {
    margin-top: 0;
  }
}

/* Force a minimum of two columns */
@media only screen and (max-width: 1023px) {
  .row.min-two-columns:not(.reverse-order) [class^="col-"] {
    margin: 3rem 2% 0 2%;
    width: 48%;
  }
  .row.min-two-columns:not(.reverse-order) [class^="col-"]:last-child {
    margin-right: 0;
  }
  .row.min-two-columns:not(.reverse-order) [class^="col-"]:nth-child(-n+2) {
    margin-top: 0;
  }
  .row.min-two-columns:not(.reverse-order) [class^="col-"]:nth-child(odd) {
    margin-left: 0;
  }
  .row.min-two-columns:not(.reverse-order) [class^="col-"]:nth-child(even) {
    margin-right: 0;
  }
  .row.min-two-columns:not(.reverse-order) [class^="col-"]:last-child:nth-child(odd) {
    width: 100%;
  }
  .row.min-two-columns:not(.reverse-order).reduce-spacing [class^="col-"] {
    margin: 1rem 2% 0 2%;
  }
  .row.min-two-columns:not(.reverse-order).reduce-spacing [class^="col-"]:last-child {
    margin-right: 0;
  }
  .row.min-two-columns:not(.reverse-order).reduce-spacing [class^="col-"]:nth-child(-n+2) {
    margin-top: 0;
  }
  .row.min-two-columns:not(.reverse-order).reduce-spacing [class^="col-"]:nth-child(odd) {
    margin-left: 0;
  }
  .row.min-two-columns:not(.reverse-order).reduce-spacing [class^="col-"]:nth-child(even) {
    margin-right: 0;
  }
}

/* Remove gutter between columns */
.row.no-gutter .col-one-half {
  width: 50%;
}

.row.no-gutter .col-one-third {
  width: 33.3333333333%;
}

.row.no-gutter .col-one-fourth {
  width: 25%;
}

.row.no-gutter .col-one-fifth {
  width: 20%;
}

.row.no-gutter .col-two-thirds {
  width: 66.6666666667%;
}

.row.no-gutter .col-two-fourths {
  width: 50%;
}

.row.no-gutter .col-two-fifths {
  width: 40%;
}

.row.no-gutter .col-three-fourths {
  width: 75%;
}

.row.no-gutter .col-three-fifths {
  width: 60%;
}

.row.no-gutter .col-four-fifths {
  width: 80%;
}

.row.no-gutter [class^="col-"] {
  margin: 0 !important;
}

@media only screen and (max-width: 1023px) {
  .row.no-gutter [class^="col-"] {
    width: 50%;
  }
  .row.no-gutter [class*="-fifth"] {
    width: 100%;
  }
}

@media only screen and (max-width: 767px) {
  .row.no-gutter [class^="col-"] {
    width: 100%;
  }
}

/* -----------------------------------------------------------------------------

# Tools - Align

----------------------------------------------------------------------------- */
.center {
  text-align: center;
}

.left {
  float: left;
  text-align: left;
}

.right {
  float: right;
  text-align: right;
}

.middle {
  display: table;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: flex;
  -webkit-flex-direction: column;
  -moz-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  -webkit-justify-content: center;
  -moz-justify-content: center;
  -ms-justify-content: center;
  justify-content: center;
}

@media only screen and (max-width: 1023px) {
  .center-desktop {
    text-align: center;
  }
}

@media only screen and (max-width: 767px) {
  .center-tablet {
    text-align: center;
  }
}

@media only screen and (max-width: 479px) {
  .center-mobile {
    text-align: center;
  }
}

/* -----------------------------------------------------------------------------

# Tools - Background

----------------------------------------------------------------------------- */
.bg-dark {
  background: #110f24;
}

.bg-light {
  background: #f6f6f9;
}

.bg-primary {
  background: #575bde;
}

.bg-white {
  background: #fff;
}

/* Gradients */
.bg-gradient-dark {
  background: #05050b;
  background: -webkit-linear-gradient(#110f24 0%, #05050b 100%);
  background: -moz-linear-gradient(#110f24 0%, #05050b 100%);
  background: -ms-linear-gradient(#110f24 0%, #05050b 100%);
  background: -o-linear-gradient(#110f24 0%, #05050b 100%);
  background: linear-gradient(#110f24 0%, #05050b 100%);
}

.bg-gradient-light {
  background: #f6f6f9;
  background: -webkit-linear-gradient(#fff 0%, #f6f6f9 100%);
  background: -moz-linear-gradient(#fff 0%, #f6f6f9 100%);
  background: -ms-linear-gradient(#fff 0%, #f6f6f9 100%);
  background: -o-linear-gradient(#fff 0%, #f6f6f9 100%);
  background: linear-gradient(#fff 0%, #f6f6f9 100%);
}

.bg-gradient-primary {
  background: #575bde;
  background: -webkit-linear-gradient(140deg, #00d7af 25%, #575bde 100%);
  background: -moz-linear-gradient(140deg, #00d7af 25%, #575bde 100%);
  background: -ms-linear-gradient(140deg, #00d7af 25%, #575bde 100%);
  background: -o-linear-gradient(140deg, #00d7af 25%, #575bde 100%);
  background: linear-gradient(140deg, #00d7af 25%, #575bde 100%);
}

.bg-gradient-blue {
  background: #0957d9;
  background: -webkit-linear-gradient(#2584e0 0%, #0957d9 100%);
  background: -moz-linear-gradient(#2584e0 0%, #0957d9 100%);
  background: -ms-linear-gradient(#2584e0 0%, #0957d9 100%);
  background: -o-linear-gradient(#2584e0 0%, #0957d9 100%);
  background: linear-gradient(#2584e0 0%, #0957d9 100%);
}

.bg-gradient-cyan {
  background: #04b2db;
  background: -webkit-linear-gradient(#1ac8e2 0%, #04b2db 100%);
  background: -moz-linear-gradient(#1ac8e2 0%, #04b2db 100%);
  background: -ms-linear-gradient(#1ac8e2 0%, #04b2db 100%);
  background: -o-linear-gradient(#1ac8e2 0%, #04b2db 100%);
  background: linear-gradient(#1ac8e2 0%, #04b2db 100%);
}

.bg-gradient-green {
  background: #39cfa2;
  background: -webkit-linear-gradient(#67dbb8 0%, #39cfa2 100%);
  background: -moz-linear-gradient(#67dbb8 0%, #39cfa2 100%);
  background: -ms-linear-gradient(#67dbb8 0%, #39cfa2 100%);
  background: -o-linear-gradient(#67dbb8 0%, #39cfa2 100%);
  background: linear-gradient(#67dbb8 0%, #39cfa2 100%);
}

.bg-gradient-indigo {
  background: #313fae;
  background: -webkit-linear-gradient(#606cc3 0%, #313fae 100%);
  background: -moz-linear-gradient(#606cc3 0%, #313fae 100%);
  background: -ms-linear-gradient(#606cc3 0%, #313fae 100%);
  background: -o-linear-gradient(#606cc3 0%, #313fae 100%);
  background: linear-gradient(#606cc3 0%, #313fae 100%);
}

.bg-gradient-olive {
  background: #85b99e;
  background: -webkit-linear-gradient(#aacdb5 0%, #85b99e 100%);
  background: -moz-linear-gradient(#aacdb5 0%, #85b99e 100%);
  background: -ms-linear-gradient(#aacdb5 0%, #85b99e 100%);
  background: -o-linear-gradient(#aacdb5 0%, #85b99e 100%);
  background: linear-gradient(#aacdb5 0%, #85b99e 100%);
}

.bg-gradient-pink {
  background: #dc60a3;
  background: -webkit-linear-gradient(#e58cba 0%, #dc60a3 100%);
  background: -moz-linear-gradient(#e58cba 0%, #dc60a3 100%);
  background: -ms-linear-gradient(#e58cba 0%, #dc60a3 100%);
  background: -o-linear-gradient(#e58cba 0%, #dc60a3 100%);
  background: linear-gradient(#e58cba 0%, #dc60a3 100%);
}

.bg-gradient-sienna {
  background: #c4a495;
  background: -webkit-linear-gradient(#d5bfab 0%, #c4a495 100%);
  background: -moz-linear-gradient(#d5bfab 0%, #c4a495 100%);
  background: -ms-linear-gradient(#d5bfab 0%, #c4a495 100%);
  background: -o-linear-gradient(#d5bfab 0%, #c4a495 100%);
  background: linear-gradient(#d5bfab 0%, #c4a495 100%);
}

.bg-gradient-violet {
  background: #7421db;
  background: -webkit-linear-gradient(#9e3ee2 0%, #7421db 100%);
  background: -moz-linear-gradient(#9e3ee2 0%, #7421db 100%);
  background: -ms-linear-gradient(#9e3ee2 0%, #7421db 100%);
  background: -o-linear-gradient(#9e3ee2 0%, #7421db 100%);
  background: linear-gradient(#9e3ee2 0%, #7421db 100%);
}

/* Advanced backgrounds */
[class*="bg-image-"],
[class*="overlay-"] {
  overflow: hidden;
  position: relative;
  z-index: 0;
}

[class*="bg-image-"]:before, [class*="bg-image-"]:after,
[class*="overlay-"]:before,
[class*="overlay-"]:after {
  background-position: center !important;
  background-repeat: no-repeat !important;
  background-size: cover !important;
  bottom: -1px;
  content: "";
  height: 101%;
  left: -1%;
  position: absolute;
  top: -1px;
  width: 102%;
}

[class*="bg-image-"]:before,
[class*="overlay-"]:before {
  z-index: -1;
}

[class*="bg-image-"]:after,
[class*="overlay-"]:after {
  z-index: -2;
}

/* Overlays */
.overlay:before {
  background: rgba(255, 255, 255, 0.7);
}

.dark.overlay:before {
  background: rgba(17, 15, 36, 0.7);
}

.overlay-shape-01:before {
  background: url(../../assets/media/bg/shape-01.svg);
}

.dark.overlay-shape-01:before {
  background: url(../../assets/media/bg/shape-dark-01.svg);
}

.overlay-shape-02:before {
  background: url(../../assets/media/bg/shape-02.svg);
}

.dark.overlay-shape-02:before {
  background: url(../../assets/media/bg/shape-dark-02.svg);
}

.overlay-shape-03:before {
  background: url(../../assets/media/bg/shape-03.svg);
}

.dark.overlay-shape-03:before {
  background: url(../../assets/media/bg/shape-dark-03.svg);
}

.overlay-shape-04:before {
  background: url(../../assets/media/bg/shape-04.svg);
}

.dark.overlay-shape-04:before {
  background: url(../../assets/media/bg/shape-dark-04.svg);
}

.overlay-shape-05:before {
  background: url(../../assets/media/bg/shape-05.svg);
}

.dark.overlay-shape-05:before {
  background: url(../../assets/media/bg/shape-dark-05.svg);
}

.overlay-shape-06:before {
  background: url(../../assets/media/bg/shape-06.svg);
}

.dark.overlay-shape-06:before {
  background: url(../../assets/media/bg/shape-dark-06.svg);
}

/* Images */
.bg-image-01:after {
  background: url(../../assets/media/bg/image-01@2x.jpg);
}

@media only screen and (max-width: 479px) {
  .bg-image-01:after {
    background: url(../../assets/media/bg/image-01.jpg);
  }
}

.bg-image-02:after {
  background: url(../../assets/media/bg/image-02@2x.jpg);
}

@media only screen and (max-width: 479px) {
  .bg-image-02:after {
    background: url(../../assets/media/bg/image-02.jpg);
  }
}

.bg-image-03:after {
  background: url(../../assets/media/bg/image-03@2x.jpg);
}

@media only screen and (max-width: 479px) {
  .bg-image-03:after {
    background: url(../../assets/media/bg/image-03.jpg);
  }
}

.bg-image-04:after {
  background: url(../../assets/media/bg/image-04@2x.jpg);
}

@media only screen and (max-width: 479px) {
  .bg-image-04:after {
    background: url(../../assets/media/bg/image-04.jpg);
  }
}

.bg-image-05:after {
  background: url(../../assets/media/bg/image-05@2x.jpg);
}

@media only screen and (max-width: 479px) {
  .bg-image-05:after {
    background: url(../../assets/media/bg/image-05.jpg);
  }
}

.bg-image-06:after {
  background: url(../../assets/media/bg/image-06@2x.jpg);
}

@media only screen and (max-width: 479px) {
  .bg-image-06:after {
    background: url(../../assets/media/bg/image-06.jpg);
  }
}

.bg-image-07:after {
  background: url(../../assets/media/bg/image-07@2x.jpg);
}

@media only screen and (max-width: 479px) {
  .bg-image-07:after {
    background: url(../../assets/media/bg/image-07.jpg);
  }
}

.bg-image-08:after {
  background: url(../../assets/media/bg/image-08@2x.jpg);
}

@media only screen and (max-width: 479px) {
  .bg-image-08:after {
    background: url(../../assets/media/bg/image-08.jpg);
  }
}

.bg-image-hero:after {
  background: #05050b;
  background: -webkit-linear-gradient(#110f24 0%, #05050b 100%);
  background: -moz-linear-gradient(#110f24 0%, #05050b 100%);
  background: -ms-linear-gradient(#110f24 0%, #05050b 100%);
  background: -o-linear-gradient(#110f24 0%, #05050b 100%);
  background: linear-gradient(#110f24 0%, #05050b 100%);
}

.overlay-hero:before {
  background: url(../../assets/media/bg/shape-hero.svg);
}

/* -----------------------------------------------------------------------------

# Tools - Divider

----------------------------------------------------------------------------- */
.divider {
  border-bottom: 1px solid #ececee;
  margin: 3rem 0;
  width: 100%;
}

.dark .divider {
  border-bottom: 1px solid #110f24;
}

/* -----------------------------------------------------------------------------

# Tools - Full Screen

----------------------------------------------------------------------------- */
.full-screen {
  min-height: calc(100vh);
  width: 100%;
}

@media all and (-ms-high-contrast: none) {
  .full-screen {
    display: block;
    min-height: 0;
    padding-bottom: 8rem !important;
    padding-top: 8rem !important;
  }
}

/* -----------------------------------------------------------------------------

# Tools - Full Width

----------------------------------------------------------------------------- */
.full-width {
  width: 100% !important;
}

@media only screen and (max-width: 767px) {
  .full-width-tablet {
    width: 100% !important;
  }
}

@media only screen and (max-width: 479px) {
  .full-width-mobile {
    width: 100% !important;
  }
}

/* -----------------------------------------------------------------------------

# Tools - Max Width

----------------------------------------------------------------------------- */
[class*="max-width-"] {
  margin: 0 auto;
  width: 100%;
}

.max-width-s {
  max-width: 400px;
}

.max-width-m {
  max-width: 800px;
}

.max-width-l {
  max-width: 1200px;
}

/* -----------------------------------------------------------------------------

# Tools - Min Width

----------------------------------------------------------------------------- */
[class*="min-width-"] {
  margin: 0 auto;
}

.min-width-s {
  min-width: 400px;
}

.min-width-m {
  min-width: 800px;
}

.min-width-l {
  min-width: 1200px;
}

/* -----------------------------------------------------------------------------

# Tools - Opacity

----------------------------------------------------------------------------- */
.opacity-s {
  opacity: 0.9 !important;
}

.opacity-m {
  opacity: 0.4 !important;
}

.opacity-l {
  opacity: 0.1 !important;
}

/* -----------------------------------------------------------------------------

# Tools - Rounded

----------------------------------------------------------------------------- */
.rounded {
  -webkit-border-radius: 0.5rem;
  -moz-border-radius: 0.5rem;
  border-radius: 0.5rem;
}

.rounded-bottom {
  -webkit-border-bottom-left-radius: 0.5rem;
  -moz-border-radius-bottomleft: 0.5rem;
  border-bottom-left-radius: 0.5rem;
  -webkit-border-bottom-right-radius: 0.5rem;
  -moz-border-radius-bottomright: 0.5rem;
  border-bottom-right-radius: 0.5rem;
}

.rounded-top {
  -webkit-border-top-left-radius: 0.5rem;
  -moz-border-radius-topleft: 0.5rem;
  border-top-left-radius: 0.5rem;
  -webkit-border-top-right-radius: 0.5rem;
  -moz-border-radius-topright: 0.5rem;
  border-top-right-radius: 0.5rem;
}

/* -----------------------------------------------------------------------------

# Tools - Shadow

----------------------------------------------------------------------------- */
.shadow-s {
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
}

.shadow-m {
  -webkit-box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}

.shadow-l {
  -webkit-box-shadow: 0 32px 40px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 32px 40px rgba(0, 0, 0, 0.1);
  box-shadow: 0 32px 40px rgba(0, 0, 0, 0.1);
}

.shadow-none {
  -webkit-box-shadow: none !important;
  -moz-box-shadow: none !important;
  box-shadow: none !important;
}

/* -----------------------------------------------------------------------------

# Tools - Spacing

----------------------------------------------------------------------------- */
.padding {
  padding: 5rem;
}

@media only screen and (max-width: 1023px) {
  .padding {
    padding: 3rem;
  }
}

@media only screen and (max-width: 767px) {
  .padding {
    padding: 3rem 1rem;
  }
}

.padding-bottom {
  padding-bottom: 12rem;
}

@media only screen and (max-width: 1023px) {
  .padding-bottom {
    padding-bottom: 10rem;
  }
}

@media only screen and (max-width: 767px) {
  .padding-bottom {
    padding-bottom: 8rem;
  }
}

.padding-top {
  padding-top: 12rem;
}

@media only screen and (max-width: 1023px) {
  .padding-top {
    padding-top: 10rem;
  }
}

@media only screen and (max-width: 767px) {
  .padding-top {
    padding-top: 8rem;
  }
}

/* Add spacing above content */
@media only screen and (max-width: 767px) {
  .padding-top-tablet {
    padding-top: 8rem;
  }
}

/* Add spacing above or below content */
.margin-bottom {
  margin-bottom: 5rem;
}

@media only screen and (max-width: 1023px) {
  .margin-bottom {
    margin-bottom: 3rem;
  }
}

.margin-top {
  margin-top: 5rem;
}

@media only screen and (max-width: 1023px) {
  .margin-top {
    margin-top: 3rem;
  }
}

/* Negative spacing */
.-margin-bottom {
  margin-bottom: -5rem;
}

@media only screen and (max-width: 1023px) {
  .-margin-bottom {
    margin-bottom: -3rem;
  }
}

.-margin-bottom-2 {
  margin-bottom: -10rem;
}

@media only screen and (max-width: 1023px) {
  .-margin-bottom-2 {
    margin-bottom: -6rem;
  }
}

/* Default spacing */
.space {
  margin: 1rem;
}

.space-bottom {
  margin-bottom: 1rem;
}

.space-left {
  padding-left: 1rem;
}

.space-right {
  padding-right: 1rem;
}

.space-top {
  margin-top: 1rem;
}

/* Remove spacing */
.space-none {
  margin: 0;
}

.space-bottom-none {
  margin-bottom: 0;
}

.space-left-none {
  padding-left: 0;
}

.space-right-none {
  padding-right: 0;
}

.space-top-none {
  margin-top: 0;
}

/* -----------------------------------------------------------------------------

# Components - Alerts

----------------------------------------------------------------------------- */
.alert {
  -webkit-border-radius: 0.1875rem;
  -moz-border-radius: 0.1875rem;
  border-radius: 0.1875rem;
  background: #f6f6f9;
  margin-bottom: 1rem;
  padding: 1rem;
}

.alert.alert-default {
  border-left: 3px solid #ccced0;
}

.alert.alert-error {
  border-left: 3px solid #e52b20;
}

.alert.alert-success {
  border-left: 3px solid #63ce63;
}

.alert.alert-warning {
  border-left: 3px solid #ffbf2f;
}

.dark .alert {
  background: #110f24;
}

/* -----------------------------------------------------------------------------

# Components - Buttons

----------------------------------------------------------------------------- */
.button {
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5rem;
  font-weight: 700;
  -webkit-border-radius: 3rem;
  -moz-border-radius: 3rem;
  border-radius: 3rem;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -ms-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  display: inline-block;
  height: 3rem;
  line-height: 3rem;
  padding: 0 1.25rem;
  text-align: center;
}

.button.button-s {
  font-size: 0.75rem;
  font-weight: 400;
  line-height: 1rem;
  font-weight: 700;
  height: 2rem;
  line-height: 2rem;
  padding: 0 0.75rem;
}

.button.button-m {
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1rem;
  font-weight: 700;
  height: 2.5rem;
  line-height: 2.5rem;
  padding: 0 1rem;
}

.button.button-l {
  font-size: 1.125rem;
  font-weight: 400;
  line-height: 1.5rem;
  font-weight: 700;
  height: 3.5rem;
  line-height: 3.5rem;
  padding: 0 1.5rem;
}

.button.button-primary {
  background: #393ed8;
  background: -webkit-linear-gradient(140deg, #575bde 25%, #393ed8 100%);
  background: -moz-linear-gradient(140deg, #575bde 25%, #393ed8 100%);
  background: -ms-linear-gradient(140deg, #575bde 25%, #393ed8 100%);
  background: -o-linear-gradient(140deg, #575bde 25%, #393ed8 100%);
  background: linear-gradient(140deg, #575bde 25%, #393ed8 100%);
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  color: #fff;
}

.button.button-primary:hover {
  background: #575bde;
  background: -webkit-linear-gradient(140deg, #575bde 25%, #575bde 100%);
  background: -moz-linear-gradient(140deg, #575bde 25%, #575bde 100%);
  background: -ms-linear-gradient(140deg, #575bde 25%, #575bde 100%);
  background: -o-linear-gradient(140deg, #575bde 25%, #575bde 100%);
  background: linear-gradient(140deg, #575bde 25%, #575bde 100%);
  -webkit-box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
  -webkit-transform: translateY(-1px);
  -moz-transform: translateY(-1px);
  -ms-transform: translateY(-1px);
  -o-transform: translateY(-1px);
  transform: translateY(-1px);
}

.button.button-secondary {
  background: #ececee;
  color: #110f24;
}

.button.button-secondary:hover {
  -webkit-transform: translateY(-1px);
  -moz-transform: translateY(-1px);
  -ms-transform: translateY(-1px);
  -o-transform: translateY(-1px);
  transform: translateY(-1px);
  background: #f6f6f9;
  color: #575bde;
}

.dark .button.button-secondary {
  background: rgba(255, 255, 255, 0.1);
  color: #fff;
}

.dark .button.button-secondary:hover {
  background: rgba(255, 255, 255, 0.4);
}

.button.button-disabled {
  background: #ccced0;
  color: #110f24;
  cursor: default;
  opacity: 0.4;
  pointer-events: none;
}

.button.button-close {
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  background: #fff;
  display: block;
  height: 4rem;
  line-height: 2rem;
  opacity: 0.9;
  padding: 1rem;
  position: fixed;
  right: 1rem;
  text-align: center;
  top: 1rem;
  width: 4rem;
  z-index: 10;
}

.button.button-close:before {
  direction: ltr;
  display: inline-block;
  font-family: "Material Icons";
  font-feature-settings: "liga";
  font-size: 1.5rem;
  font-style: normal;
  font-weight: normal;
  letter-spacing: normal;
  line-height: 1;
  text-rendering: optimizeLegibility;
  text-transform: none;
  white-space: nowrap;
  word-wrap: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #110f24;
  content: "close";
  line-height: 2rem;
  /* Prevent text from icon name to show up before load */
}

.preload .button.button-close:before {
  font-size: 0;
}

.button.button-close:hover {
  opacity: 1;
}

@media only screen and (max-width: 767px) {
  .button.button-primary:hover, .button.button-secondary:hover {
    -webkit-box-shadow: none !important;
    -moz-box-shadow: none !important;
    box-shadow: none !important;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -o-transform: translateY(0);
    transform: translateY(0);
  }
  .button.button-close {
    position: absolute;
  }
}

@media only screen and (max-width: 479px) {
  .button {
    height: 3.5rem;
    line-height: 3.5rem;
  }
  .button.button-s {
    height: 2.5rem;
    line-height: 2.5rem;
  }
  .button.button-m {
    height: 3rem;
    line-height: 3rem;
  }
  .button.button-l {
    height: 4rem;
    line-height: 4rem;
  }
}

/* -----------------------------------------------------------------------------

# Components - Card

----------------------------------------------------------------------------- */
.card {
  -webkit-border-radius: 0.5rem;
  -moz-border-radius: 0.5rem;
  border-radius: 0.5rem;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  background: #fff;
}

.card.dark {
  background: #1d1a3d;
}

.card-content {
  padding: 2rem;
}

@media only screen and (max-width: 479px) {
  .card-content {
    padding: 1.5rem;
  }
}

/* -----------------------------------------------------------------------------

# Components - Footer

----------------------------------------------------------------------------- */
.footer-main a:not(.button) {
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1rem;
  color: #110f24;
  opacity: 0.9;
}

.footer-main a:not(.button):hover {
  color: #575bde;
  opacity: 1;
}

.footer-main p {
  opacity: 0.9;
}

.footer-main input[type="email"] {
  background: #fff;
}

.footer-main .copyright {
  font-size: 0.75rem;
  font-weight: 400;
  line-height: 1rem;
  opacity: 0.4;
  padding-bottom: 3rem;
  text-align: center;
}

.footer-main .copyright a {
  font-size: 0.75rem;
  font-weight: 400;
  line-height: 1rem;
  opacity: 1;
}

.footer-main .copyright a:hover {
  color: inherit;
}

.footer-main.dark a:not(.button) {
  color: #fff;
}

@media only screen and (max-width: 1023px) {
  .footer-main a:not(.button) {
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5rem;
  }
  .footer-main .copyright a {
    font-size: 0.75rem;
    font-weight: 400;
    line-height: 1rem;
  }
}

/* -----------------------------------------------------------------------------

# Components - Forms

----------------------------------------------------------------------------- */
form {
  /* Checkboxes and radio buttons */
  /* Switch */
}

form label {
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5rem;
  font-weight: 700;
  line-height: 2.5rem;
}

form input[type="email"],
form input[type="password"],
form input[type="text"],
form select,
form textarea {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5rem;
  -webkit-border-radius: 0.1875rem;
  -moz-border-radius: 0.1875rem;
  border-radius: 0.1875rem;
  background: #f6f6f9;
  border: 1px solid #ececee;
  color: #110f24;
  padding: 0.5rem 0.75rem;
  width: 100%;
}

form input[type="email"]:focus,
form input[type="password"]:focus,
form input[type="text"]:focus,
form select:focus,
form textarea:focus {
  border: 1px solid #ccced0;
  outline: none;
}

form input[type="email"],
form input[type="password"],
form input[type="text"],
form select,
form .select-wrapper {
  height: 2.5rem;
}

form .select-wrapper {
  position: relative;
}

form .select-wrapper:before {
  direction: ltr;
  display: inline-block;
  font-family: "Material Icons";
  font-feature-settings: "liga";
  font-size: 1.5rem;
  font-style: normal;
  font-weight: normal;
  letter-spacing: normal;
  line-height: 1;
  text-rendering: optimizeLegibility;
  text-transform: none;
  white-space: nowrap;
  word-wrap: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #110f24;
  content: "keyboard_arrow_down";
  height: 2.5rem;
  line-height: 2.5rem;
  pointer-events: none;
  position: absolute;
  right: 0;
  text-align: center;
  top: 0;
  width: 2.5rem;
}

form .select-wrapper select {
  cursor: pointer;
}

form .select-wrapper select::-ms-expand {
  display: none;
}

form textarea {
  min-height: 10rem;
}

form input[type="checkbox"],
form input[type="radio"] {
  display: none;
}

form input[type="checkbox"]:checked + label.checkbox:before,
form input[type="checkbox"]:checked + label.radio:before,
form input[type="radio"]:checked + label.checkbox:before,
form input[type="radio"]:checked + label.radio:before {
  background: #575bde;
}

form input[type="checkbox"]:checked + label.checkbox:after,
form input[type="checkbox"]:checked + label.radio:after,
form input[type="radio"]:checked + label.checkbox:after,
form input[type="radio"]:checked + label.radio:after {
  color: #fff;
}

form label.checkbox,
form label.radio {
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5rem;
  cursor: pointer;
  display: block;
  line-height: 2.5rem;
  padding-left: 2rem;
  position: relative;
  width: fit-content;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

form label.checkbox:before,
form label.radio:before {
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -ms-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  background: #ececee;
  content: "";
  height: 1.5rem;
  left: 0;
  position: absolute;
  top: 0.5rem;
  width: 1.5rem;
}

.dark form label.checkbox:before, .dark
form label.radio:before {
  background: #fff;
}

form label.checkbox:after,
form label.radio:after {
  direction: ltr;
  display: inline-block;
  font-family: "Material Icons";
  font-feature-settings: "liga";
  font-size: 1.5rem;
  font-style: normal;
  font-weight: normal;
  letter-spacing: normal;
  line-height: 1;
  text-rendering: optimizeLegibility;
  text-transform: none;
  white-space: nowrap;
  word-wrap: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -ms-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  color: transparent;
  content: "check";
  font-size: 1.25rem;
  height: 1.5rem;
  left: 0;
  line-height: 1.5rem;
  pointer-events: none;
  position: absolute;
  text-align: center;
  top: 0.5rem;
  width: 1.5rem;
}

form label.checkbox:last-child,
form label.radio:last-child {
  margin-bottom: 0;
}

form label.checkbox:before {
  -webkit-border-radius: 0.1875rem;
  -moz-border-radius: 0.1875rem;
  border-radius: 0.1875rem;
}

form label.radio:before {
  -webkit-border-radius: 0.75rem;
  -moz-border-radius: 0.75rem;
  border-radius: 0.75rem;
}

form input.switch {
  display: none;
}

form input.switch:checked + label.switch:before {
  background: #575bde;
}

form input.switch:checked + label.switch:after {
  left: 26px;
}

form label.switch {
  cursor: pointer;
  display: block;
  height: 32px;
  width: fit-content;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

form label.switch:before {
  -webkit-border-radius: 16px;
  -moz-border-radius: 16px;
  border-radius: 16px;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -ms-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  background: #ececee;
  content: "";
  display: block;
  height: 32px;
  width: 56px;
}

.dark form label.switch:before {
  background: rgba(255, 255, 255, 0.1);
}

form label.switch:after {
  -webkit-border-radius: 14px;
  -moz-border-radius: 14px;
  border-radius: 14px;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -ms-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  background: #fff;
  content: "";
  display: block;
  height: 28px;
  left: 2px;
  position: relative;
  top: -30px;
  width: 28px;
}

form .form-group {
  margin-bottom: 1rem;
  position: relative;
}

form .form-help {
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1rem;
  color: #110f24;
  opacity: 0.4;
}

@media only screen and (max-width: 767px) {
  form .row.unequal [class^="col-"].unequal {
    margin: 0;
  }
}

@media only screen and (max-width: 479px) {
  form input[type="email"],
  form input[type="password"],
  form input[type="text"],
  form select,
  form .select-wrapper {
    height: 3rem;
  }
  form .select-wrapper:before {
    height: 3rem;
    line-height: 3rem;
    width: 3rem;
  }
}

/* -----------------------------------------------------------------------------

# Components - Header

----------------------------------------------------------------------------- */
.no-scroll {
  overflow: hidden;
}

.header-main {
  background: transparent;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 1;
}

.header-main nav {
  display: inline-block;
  padding: 2rem;
  width: 100%;
}

.header-main a {
  -webkit-transition: none !important;
  -moz-transition: none !important;
  -ms-transition: none !important;
  -o-transition: none !important;
  transition: none !important;
}

.header-main a:not(.button) {
  color: #110f24;
  font-weight: 600;
  height: 2.5rem;
  line-height: 2.5rem;
}

.header-main a:not(.button):hover {
  color: #575bde;
}

.header-main ul.inline {
  display: inline-block;
  margin: 0;
}

.header-main ul.inline li {
  margin-bottom: 0;
  padding-right: 2rem;
}

.header-main .nav-toggle {
  display: none;
}

.header-main.dark a:not(.button) {
  color: #fff;
}

.header-main.dark a:not(.button):hover {
  color: #fff;
}

.header-main.dark .nav-toggle:before {
  color: #fff;
}

@media only screen and (max-width: 767px) {
  .header-main {
    position: fixed;
  }
  .header-main nav {
    padding: 0.5rem 0.75rem;
  }
  .header-main a:not(.button):hover {
    color: #110f24;
  }
  .header-main ul.inline {
    display: none;
  }
  .header-main .nav-toggle {
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -ms-transition: all 0.2s;
    -o-transition: all 0.2s;
    transition: all 0.2s;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    cursor: pointer;
    display: inline-block;
    float: right;
    height: 2.5rem;
    text-align: center;
    width: 1.5rem;
  }
  .header-main .nav-toggle:before {
    direction: ltr;
    display: inline-block;
    font-family: "Material Icons";
    font-feature-settings: "liga";
    font-size: 1.5rem;
    font-style: normal;
    font-weight: normal;
    letter-spacing: normal;
    line-height: 1;
    text-rendering: optimizeLegibility;
    text-transform: none;
    white-space: nowrap;
    word-wrap: normal;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    color: #110f24;
    content: "menu";
    line-height: 2.5rem;
    /* Prevent text from icon name to show up before load */
  }
  .preload .header-main .nav-toggle:before {
    font-size: 0;
  }
  .header-main.fade-in nav {
    -webkit-box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    background: rgba(17, 15, 36, 0.94);
  }
  .header-main.fade-in a:not(.button) {
    color: #fff;
  }
  .header-main.fade-in a:not(.button):hover {
    color: #fff;
  }
  .header-main.fade-in .nav-toggle:before {
    color: #fff;
  }
  .header-main.active {
    height: 100%;
  }
  .header-main.active nav {
    -webkit-box-shadow: none !important;
    -moz-box-shadow: none !important;
    box-shadow: none !important;
    -webkit-transition: none !important;
    -moz-transition: none !important;
    -ms-transition: none !important;
    -o-transition: none !important;
    transition: none !important;
    background: #05050b;
    height: 100%;
    overflow-y: scroll;
    -webkit-overflow-scrolling: touch;
  }
  .header-main.active a:not(.button) {
    color: #fff;
  }
  .header-main.active a:not(.button):hover {
    color: #fff;
  }
  .header-main.active ul.inline {
    display: block;
    width: 100%;
  }
  .header-main.active ul.inline li {
    font-size: 1.5rem;
    font-weight: 400;
    line-height: 2rem;
    margin-bottom: 1rem;
    padding: 0;
    text-align: center;
    width: 100%;
  }
  .header-main.active ul.inline li a:not(.button) {
    font-weight: 400;
    line-height: 3rem;
  }
  .header-main.active .nav-toggle {
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
  }
  .header-main.active .nav-toggle:before {
    color: #fff;
    content: "close";
  }
  .header-main.active .button {
    font-size: 1.5rem;
    font-weight: 400;
    line-height: 2rem;
    height: 4rem;
    line-height: 4rem;
    margin-top: 1rem;
  }
  .header-main.active .button-secondary {
    background: rgba(255, 255, 255, 0.1);
    color: #fff;
  }
  .header-main.active .button-secondary:hover {
    background: rgba(255, 255, 255, 0.1);
  }
}

/* -----------------------------------------------------------------------------

# Components - Icons

----------------------------------------------------------------------------- */
.feature-icons {
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
  background: rgba(17, 15, 36, 0.04);
  color: #110f24;
  font-size: 3rem;
  height: 6rem;
  line-height: 6rem;
  margin-bottom: 1rem;
  text-align: center;
  width: 6rem;
}

.dark .feature-icons {
  background: rgba(255, 255, 255, 0.1);
  color: #fff;
}

.preload .feature-icons {
  font-size: 0;
}

/* -----------------------------------------------------------------------------

# Components - List

----------------------------------------------------------------------------- */
ol,
ul {
  margin: 0 0 1rem 0;
  padding-left: 1.25rem;
}

ol.blank,
ul.blank {
  list-style: none;
  padding: 0;
}

ol.inline,
ul.inline {
  padding-left: 0;
}

ol.inline li,
ul.inline li {
  display: inline-block;
  padding-right: 1rem;
  vertical-align: top;
}

ol.inline li:last-child,
ul.inline li:last-child {
  padding-right: 0;
}

/* -----------------------------------------------------------------------------

# Components - Logo

----------------------------------------------------------------------------- */
.logo {
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -ms-transition: all 0.2s;
  -o-transition: all 0.2s;
  transition: all 0.2s;
  color: #110f24;
  display: block;
  float: left;
  font-size: 1.5rem;
  font-weight: 900;
  height: 2.5rem;
  letter-spacing: 0.5px;
  line-height: 2.5rem;
  margin-right: 2.5rem;
  opacity: 1 !important;
}

.logo span {
  display: inline-block;
  font-family: "PT Serif", Georgia, serif;
  vertical-align: top;
}

.logo img,
.logo svg {
  height: 2rem;
  margin: 0.25rem;
}

.dark .logo {
  color: #fff;
}

@media only screen and (max-width: 767px) {
  .logo {
    -webkit-transition: none !important;
    -moz-transition: none !important;
    -ms-transition: none !important;
    -o-transition: none !important;
    transition: none !important;
  }
}

/* -----------------------------------------------------------------------------

# Components - Pricing

----------------------------------------------------------------------------- */
.pricing-price {
  font-weight: 400;
}

.pricing-duration {
  font-size: 0.75rem;
  font-weight: 400;
  line-height: 1rem;
}

/* -----------------------------------------------------------------------------

# Components - Table

----------------------------------------------------------------------------- */
table {
  -webkit-border-radius: 0.1875rem;
  -moz-border-radius: 0.1875rem;
  border-radius: 0.1875rem;
  background: #f6f6f9;
  border-collapse: collapse;
  margin-bottom: 1rem;
  width: 100%;
}

table tr {
  border-bottom: 1px solid #ececee;
}

table tr:last-child {
  border-bottom: none;
}

table th {
  -webkit-border-top-left-radius: 0.1875rem;
  -moz-border-radius-topleft: 0.1875rem;
  border-top-left-radius: 0.1875rem;
  -webkit-border-top-right-radius: 0.1875rem;
  -moz-border-radius-topright: 0.1875rem;
  border-top-right-radius: 0.1875rem;
  padding: 1rem;
  text-align: left;
}

table td {
  padding: 1rem;
}

.dark table {
  background: #110f24;
}

.dark table tr {
  border-bottom: 1px solid #05050b;
}

.dark table tr:last-child {
  border-bottom: none;
}

/* -----------------------------------------------------------------------------

# Components - Timeline

----------------------------------------------------------------------------- */
.timeline {
  border-top: 2px solid #ccced0;
  padding-top: 1.5rem;
  position: relative;
}

.timeline:before, .timeline:after {
  background: #ccced0;
  content: "";
  height: 2px;
  position: absolute;
  top: -2px;
  width: 1rem;
}

.timeline:before {
  -webkit-border-bottom-left-radius: 50%;
  -moz-border-radius-bottomleft: 50%;
  border-bottom-left-radius: 50%;
  -webkit-border-top-left-radius: 50%;
  -moz-border-radius-topleft: 50%;
  border-top-left-radius: 50%;
  left: -1rem;
}

.timeline:after {
  -webkit-border-bottom-right-radius: 50%;
  -moz-border-radius-bottomright: 50%;
  border-bottom-right-radius: 50%;
  -webkit-border-top-right-radius: 50%;
  -moz-border-radius-topright: 50%;
  border-top-right-radius: 50%;
  right: -1rem;
}

.timeline [class^="col-"] {
  position: relative;
}

.timeline [class^="col-"]:before {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  background: #575bde;
  border: 4px solid #fff;
  content: "";
  height: 1rem;
  left: -3px;
  position: absolute;
  top: -33px;
  width: 1rem;
}

@media only screen and (max-width: 1023px) {
  .timeline {
    border-left: 2px solid #ccced0;
    border-top: none;
    padding-left: 1.5rem;
    padding-top: 0;
  }
  .timeline:before, .timeline:after {
    height: 1rem;
    left: -2px;
    width: 2px;
  }
  .timeline:before {
    -webkit-border-bottom-left-radius: 0;
    -moz-border-radius-bottomleft: 0;
    border-bottom-left-radius: 0;
    -webkit-border-top-left-radius: 0;
    -moz-border-radius-topleft: 0;
    border-top-left-radius: 0;
    -webkit-border-top-left-radius: 50%;
    -moz-border-radius-topleft: 50%;
    border-top-left-radius: 50%;
    -webkit-border-top-right-radius: 50%;
    -moz-border-radius-topright: 50%;
    border-top-right-radius: 50%;
    top: -1rem;
  }
  .timeline:after {
    -webkit-border-bottom-right-radius: 0;
    -moz-border-radius-bottomright: 0;
    border-bottom-right-radius: 0;
    -webkit-border-top-right-radius: 0;
    -moz-border-radius-topright: 0;
    border-top-right-radius: 0;
    -webkit-border-bottom-left-radius: 50%;
    -moz-border-radius-bottomleft: 50%;
    border-bottom-left-radius: 50%;
    -webkit-border-bottom-right-radius: 50%;
    -moz-border-radius-bottomright: 50%;
    border-bottom-right-radius: 50%;
    bottom: -1rem;
    top: auto;
  }
  .timeline [class^="col-"] {
    margin: 3rem 0 0 0;
    width: 100%;
  }
  .timeline [class^="col-"]:nth-child(2) {
    margin-top: 3rem;
  }
  .timeline [class^="col-"]:before {
    left: -33px;
    top: 7px;
  }
}

/* -----------------------------------------------------------------------------

# Pages - Onboarding

----------------------------------------------------------------------------- */
.page-onboarding .form-help {
  line-height: 2.5rem;
  position: absolute;
  right: 0;
  top: 0;
}

.page-onboarding .featured-image {
  height: 100%;
  position: fixed;
  right: 0;
}

@media only screen and (max-width: 767px) {
  .page-onboarding .featured-image {
    height: 12rem;
    position: relative;
  }
}
