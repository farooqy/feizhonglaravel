<style>
/*!
 * Bootstrap v4.3.1 (https://getbootstrap.com/)
 * Copyright 2011-2019 The Bootstrap Authors
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
 :root {
  --blue: #007bff;
  --indigo: #6610f2;
  --purple: #6f42c1;
  --pink: #e83e8c;
  --red: #dc3545;
  --orange: #fd7e14;
  --yellow: #ffc107;
  --green: #28a745;
  --teal: #20c997;
  --cyan: #17a2b8;
  --white: #fff;
  --gray: #6c757d;
  --gray-dark: #343a40;
  --primary: #007bff;
  --secondary: #6c757d;
  --success: #28a745;
  --info: #17a2b8;
  --warning: #ffc107;
  --danger: #dc3545;
  --light: #f8f9fa;
  --dark: #343a40;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block;
}

body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color: #fff;
}

[tabindex="-1"]:focus {
  outline: 0 !important;
}

hr {
  box-sizing: content-box;
  height: 0;
  overflow: visible;
}

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.5rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  -webkit-text-decoration: underline dotted;
  text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0;
  -webkit-text-decoration-skip-ink: none;
  text-decoration-skip-ink: none;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 700;
}

dd {
  margin-bottom: .5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

b,
strong {
  font-weight: bolder;
}

small {
  font-size: 80%;
}

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -.25em;
}

sup {
  top: -.5em;
}

a {
  color: #007bff;
  text-decoration: none;
  background-color: transparent;
}

a:hover {
  color: #0056b3;
  text-decoration: underline;
}

a:not([href]):not([tabindex]) {
  color: inherit;
  text-decoration: none;
}

a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
  color: inherit;
  text-decoration: none;
}

a:not([href]):not([tabindex]):focus {
  outline: 0;
}

pre,
code,
kbd,
samp {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  font-size: 1em;
}

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
}

figure {
  margin: 0 0 1rem;
}

img {
  vertical-align: middle;
  border-style: none;
}

svg {
  overflow: hidden;
  vertical-align: middle;
}

table {
  border-collapse: collapse;
}

caption {
  padding-top: 0.75rem;
  padding-bottom: 0.75rem;
  color: #6c757d;
  text-align: left;
  caption-side: bottom;
}

th {
  text-align: inherit;
}

label {
  display: inline-block;
  margin-bottom: 0.5rem;
}

button {
  border-radius: 0;
}

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
input {
  overflow: visible;
}

button,
select {
  text-transform: none;
}

select {
  word-wrap: normal;
}

button,
[type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
}

button:not(:disabled),
[type="button"]:not(:disabled),
[type="reset"]:not(:disabled),
[type="submit"]:not(:disabled) {
  cursor: pointer;
}

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

input[type="radio"],
input[type="checkbox"] {
  box-sizing: border-box;
  padding: 0;
}

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
  -webkit-appearance: listbox;
}

textarea {
  overflow: auto;
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal;
}

progress {
  vertical-align: baseline;
}

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none;
}

[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

summary {
  display: list-item;
  cursor: pointer;
}

template {
  display: none;
}

[hidden] {
  display: none !important;
}

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 0.5rem;
  font-weight: 500;
  line-height: 1.2;
}

h1, .h1 {
  font-size: 2.5rem;
}

h2, .h2 {
  font-size: 2rem;
}

h3, .h3 {
  font-size: 1.75rem;
}

h4, .h4 {
  font-size: 1.5rem;
}

h5, .h5 {
  font-size: 1.25rem;
}

h6, .h6 {
  font-size: 1rem;
}

.lead {
  font-size: 1.25rem;
  font-weight: 300;
}

.display-1 {
  font-size: 6rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-2 {
  font-size: 5.5rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-3 {
  font-size: 4.5rem;
  font-weight: 300;
  line-height: 1.2;
}

.display-4 {
  font-size: 3.5rem;
  font-weight: 300;
  line-height: 1.2;
}

hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}

small,
.small {
  font-size: 80%;
  font-weight: 400;
}

mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3;
}

.list-unstyled {
  padding-left: 0;
  list-style: none;
}

.list-inline {
  padding-left: 0;
  list-style: none;
}

.list-inline-item {
  display: inline-block;
}

.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}

.initialism {
  font-size: 90%;
  text-transform: uppercase;
}

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem;
}

.blockquote-footer {
  display: block;
  font-size: 80%;
  color: #6c757d;
}

.blockquote-footer::before {
  content: "\2014\00A0";
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.img-thumbnail {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto;
}

.figure {
  display: inline-block;
}

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}

.figure-caption {
  font-size: 90%;
  color: #6c757d;
}

code {
  font-size: 87.5%;
  color: #e83e8c;
  word-break: break-word;
}

a > code {
  color: inherit;
}

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 87.5%;
  color: #fff;
  background-color: #212529;
  border-radius: 0.2rem;
}

kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: 700;
}

pre {
  display: block;
  font-size: 87.5%;
  color: #212529;
}

pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}

.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}

@media (min-width: 992px) {
  .container {
    max-width: 960px;
  }
}

@media (min-width: 1200px) {
  .container {
    max-width: 1140px;
  }
}

.container-fluid {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}

.no-gutters {
  margin-right: 0;
  margin-left: 0;
}

.no-gutters > .col,
.no-gutters > [class*="col-"] {
  padding-right: 0;
  padding-left: 0;
}

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
}

.col {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -ms-flex-positive: 1;
  flex-grow: 1;
  max-width: 100%;
}

.col-auto {
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto;
  max-width: 100%;
}

.col-1 {
  -ms-flex: 0 0 8.333333%;
  flex: 0 0 8.333333%;
  max-width: 8.333333%;
}

.col-2 {
  -ms-flex: 0 0 16.666667%;
  flex: 0 0 16.666667%;
  max-width: 16.666667%;
}

.col-3 {
  -ms-flex: 0 0 25%;
  flex: 0 0 25%;
  max-width: 25%;
}

.col-4 {
  -ms-flex: 0 0 33.333333%;
  flex: 0 0 33.333333%;
  max-width: 33.333333%;
}

.col-5 {
  -ms-flex: 0 0 41.666667%;
  flex: 0 0 41.666667%;
  max-width: 41.666667%;
}

.col-6 {
  -ms-flex: 0 0 50%;
  flex: 0 0 50%;
  max-width: 50%;
}

.col-7 {
  -ms-flex: 0 0 58.333333%;
  flex: 0 0 58.333333%;
  max-width: 58.333333%;
}

.col-8 {
  -ms-flex: 0 0 66.666667%;
  flex: 0 0 66.666667%;
  max-width: 66.666667%;
}

.col-9 {
  -ms-flex: 0 0 75%;
  flex: 0 0 75%;
  max-width: 75%;
}

.col-10 {
  -ms-flex: 0 0 83.333333%;
  flex: 0 0 83.333333%;
  max-width: 83.333333%;
}

.col-11 {
  -ms-flex: 0 0 91.666667%;
  flex: 0 0 91.666667%;
  max-width: 91.666667%;
}

.col-12 {
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%;
}

.order-first {
  -ms-flex-order: -1;
  order: -1;
}

.order-last {
  -ms-flex-order: 13;
  order: 13;
}

.order-0 {
  -ms-flex-order: 0;
  order: 0;
}

.order-1 {
  -ms-flex-order: 1;
  order: 1;
}

.order-2 {
  -ms-flex-order: 2;
  order: 2;
}

.order-3 {
  -ms-flex-order: 3;
  order: 3;
}

.order-4 {
  -ms-flex-order: 4;
  order: 4;
}

.order-5 {
  -ms-flex-order: 5;
  order: 5;
}

.order-6 {
  -ms-flex-order: 6;
  order: 6;
}

.order-7 {
  -ms-flex-order: 7;
  order: 7;
}

.order-8 {
  -ms-flex-order: 8;
  order: 8;
}

.order-9 {
  -ms-flex-order: 9;
  order: 9;
}

.order-10 {
  -ms-flex-order: 10;
  order: 10;
}

.order-11 {
  -ms-flex-order: 11;
  order: 11;
}

.order-12 {
  -ms-flex-order: 12;
  order: 12;
}

.offset-1 {
  margin-left: 8.333333%;
}

.offset-2 {
  margin-left: 16.666667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.333333%;
}

.offset-5 {
  margin-left: 41.666667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.333333%;
}

.offset-8 {
  margin-left: 66.666667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.333333%;
}

.offset-11 {
  margin-left: 91.666667%;
}

@media (min-width: 576px) {
  .col-sm {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-sm-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-sm-1 {
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-sm-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-sm-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-sm-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-sm-5 {
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-sm-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-sm-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-sm-8 {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-sm-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-sm-10 {
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-sm-11 {
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-sm-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-sm-first {
    -ms-flex-order: -1;
    order: -1;
  }
  .order-sm-last {
    -ms-flex-order: 13;
    order: 13;
  }
  .order-sm-0 {
    -ms-flex-order: 0;
    order: 0;
  }
  .order-sm-1 {
    -ms-flex-order: 1;
    order: 1;
  }
  .order-sm-2 {
    -ms-flex-order: 2;
    order: 2;
  }
  .order-sm-3 {
    -ms-flex-order: 3;
    order: 3;
  }
  .order-sm-4 {
    -ms-flex-order: 4;
    order: 4;
  }
  .order-sm-5 {
    -ms-flex-order: 5;
    order: 5;
  }
  .order-sm-6 {
    -ms-flex-order: 6;
    order: 6;
  }
  .order-sm-7 {
    -ms-flex-order: 7;
    order: 7;
  }
  .order-sm-8 {
    -ms-flex-order: 8;
    order: 8;
  }
  .order-sm-9 {
    -ms-flex-order: 9;
    order: 9;
  }
  .order-sm-10 {
    -ms-flex-order: 10;
    order: 10;
  }
  .order-sm-11 {
    -ms-flex-order: 11;
    order: 11;
  }
  .order-sm-12 {
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.333333%;
  }
  .offset-sm-2 {
    margin-left: 16.666667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.333333%;
  }
  .offset-sm-5 {
    margin-left: 41.666667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.333333%;
  }
  .offset-sm-8 {
    margin-left: 66.666667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.333333%;
  }
  .offset-sm-11 {
    margin-left: 91.666667%;
  }
}

@media (min-width: 768px) {
  .col-md {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-md-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-md-1 {
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-md-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-md-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-md-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-md-5 {
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-md-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-md-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-md-8 {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-md-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-md-10 {
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-md-11 {
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-md-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-md-first {
    -ms-flex-order: -1;
    order: -1;
  }
  .order-md-last {
    -ms-flex-order: 13;
    order: 13;
  }
  .order-md-0 {
    -ms-flex-order: 0;
    order: 0;
  }
  .order-md-1 {
    -ms-flex-order: 1;
    order: 1;
  }
  .order-md-2 {
    -ms-flex-order: 2;
    order: 2;
  }
  .order-md-3 {
    -ms-flex-order: 3;
    order: 3;
  }
  .order-md-4 {
    -ms-flex-order: 4;
    order: 4;
  }
  .order-md-5 {
    -ms-flex-order: 5;
    order: 5;
  }
  .order-md-6 {
    -ms-flex-order: 6;
    order: 6;
  }
  .order-md-7 {
    -ms-flex-order: 7;
    order: 7;
  }
  .order-md-8 {
    -ms-flex-order: 8;
    order: 8;
  }
  .order-md-9 {
    -ms-flex-order: 9;
    order: 9;
  }
  .order-md-10 {
    -ms-flex-order: 10;
    order: 10;
  }
  .order-md-11 {
    -ms-flex-order: 11;
    order: 11;
  }
  .order-md-12 {
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.333333%;
  }
  .offset-md-2 {
    margin-left: 16.666667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.333333%;
  }
  .offset-md-5 {
    margin-left: 41.666667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.333333%;
  }
  .offset-md-8 {
    margin-left: 66.666667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.333333%;
  }
  .offset-md-11 {
    margin-left: 91.666667%;
  }
}

@media (min-width: 992px) {
  .col-lg {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-lg-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-lg-1 {
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-lg-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-lg-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-lg-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-lg-5 {
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-lg-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-lg-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-lg-8 {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-lg-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-lg-10 {
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-lg-11 {
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-lg-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-lg-first {
    -ms-flex-order: -1;
    order: -1;
  }
  .order-lg-last {
    -ms-flex-order: 13;
    order: 13;
  }
  .order-lg-0 {
    -ms-flex-order: 0;
    order: 0;
  }
  .order-lg-1 {
    -ms-flex-order: 1;
    order: 1;
  }
  .order-lg-2 {
    -ms-flex-order: 2;
    order: 2;
  }
  .order-lg-3 {
    -ms-flex-order: 3;
    order: 3;
  }
  .order-lg-4 {
    -ms-flex-order: 4;
    order: 4;
  }
  .order-lg-5 {
    -ms-flex-order: 5;
    order: 5;
  }
  .order-lg-6 {
    -ms-flex-order: 6;
    order: 6;
  }
  .order-lg-7 {
    -ms-flex-order: 7;
    order: 7;
  }
  .order-lg-8 {
    -ms-flex-order: 8;
    order: 8;
  }
  .order-lg-9 {
    -ms-flex-order: 9;
    order: 9;
  }
  .order-lg-10 {
    -ms-flex-order: 10;
    order: 10;
  }
  .order-lg-11 {
    -ms-flex-order: 11;
    order: 11;
  }
  .order-lg-12 {
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.333333%;
  }
  .offset-lg-2 {
    margin-left: 16.666667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.333333%;
  }
  .offset-lg-5 {
    margin-left: 41.666667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.333333%;
  }
  .offset-lg-8 {
    margin-left: 66.666667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.333333%;
  }
  .offset-lg-11 {
    margin-left: 91.666667%;
  }
}

@media (min-width: 1200px) {
  .col-xl {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%;
  }
  .col-xl-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%;
  }
  .col-xl-1 {
    -ms-flex: 0 0 8.333333%;
    flex: 0 0 8.333333%;
    max-width: 8.333333%;
  }
  .col-xl-2 {
    -ms-flex: 0 0 16.666667%;
    flex: 0 0 16.666667%;
    max-width: 16.666667%;
  }
  .col-xl-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-xl-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
  .col-xl-5 {
    -ms-flex: 0 0 41.666667%;
    flex: 0 0 41.666667%;
    max-width: 41.666667%;
  }
  .col-xl-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
  }
  .col-xl-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
  }
  .col-xl-8 {
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
  .col-xl-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
  }
  .col-xl-10 {
    -ms-flex: 0 0 83.333333%;
    flex: 0 0 83.333333%;
    max-width: 83.333333%;
  }
  .col-xl-11 {
    -ms-flex: 0 0 91.666667%;
    flex: 0 0 91.666667%;
    max-width: 91.666667%;
  }
  .col-xl-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
  }
  .order-xl-first {
    -ms-flex-order: -1;
    order: -1;
  }
  .order-xl-last {
    -ms-flex-order: 13;
    order: 13;
  }
  .order-xl-0 {
    -ms-flex-order: 0;
    order: 0;
  }
  .order-xl-1 {
    -ms-flex-order: 1;
    order: 1;
  }
  .order-xl-2 {
    -ms-flex-order: 2;
    order: 2;
  }
  .order-xl-3 {
    -ms-flex-order: 3;
    order: 3;
  }
  .order-xl-4 {
    -ms-flex-order: 4;
    order: 4;
  }
  .order-xl-5 {
    -ms-flex-order: 5;
    order: 5;
  }
  .order-xl-6 {
    -ms-flex-order: 6;
    order: 6;
  }
  .order-xl-7 {
    -ms-flex-order: 7;
    order: 7;
  }
  .order-xl-8 {
    -ms-flex-order: 8;
    order: 8;
  }
  .order-xl-9 {
    -ms-flex-order: 9;
    order: 9;
  }
  .order-xl-10 {
    -ms-flex-order: 10;
    order: 10;
  }
  .order-xl-11 {
    -ms-flex-order: 11;
    order: 11;
  }
  .order-xl-12 {
    -ms-flex-order: 12;
    order: 12;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.333333%;
  }
  .offset-xl-2 {
    margin-left: 16.666667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.333333%;
  }
  .offset-xl-5 {
    margin-left: 41.666667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.333333%;
  }
  .offset-xl-8 {
    margin-left: 66.666667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.333333%;
  }
  .offset-xl-11 {
    margin-left: 91.666667%;
  }
}

.table {
  width: 100%;
  margin-bottom: 1rem;
  color: #212529;
}

.table th,
.table td {
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
}

.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
}

.table tbody + tbody {
  border-top: 2px solid #dee2e6;
}

.table-sm th,
.table-sm td {
  padding: 0.3rem;
}

.table-bordered {
  border: 1px solid #dee2e6;
}

.table-bordered th,
.table-bordered td {
  border: 1px solid #dee2e6;
}

.table-bordered thead th,
.table-bordered thead td {
  border-bottom-width: 2px;
}

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
  border: 0;
}

.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(0, 0, 0, 0.05);
}

.table-hover tbody tr:hover {
  color: #212529;
  background-color: rgba(0, 0, 0, 0.075);
}

.table-primary,
.table-primary > th,
.table-primary > td {
  background-color: #b8daff;
}

.table-primary th,
.table-primary td,
.table-primary thead th,
.table-primary tbody + tbody {
  border-color: #7abaff;
}

.table-hover .table-primary:hover {
  background-color: #9fcdff;
}

.table-hover .table-primary:hover > td,
.table-hover .table-primary:hover > th {
  background-color: #9fcdff;
}

.table-secondary,
.table-secondary > th,
.table-secondary > td {
  background-color: #d6d8db;
}

.table-secondary th,
.table-secondary td,
.table-secondary thead th,
.table-secondary tbody + tbody {
  border-color: #b3b7bb;
}

.table-hover .table-secondary:hover {
  background-color: #c8cbcf;
}

.table-hover .table-secondary:hover > td,
.table-hover .table-secondary:hover > th {
  background-color: #c8cbcf;
}

.table-success,
.table-success > th,
.table-success > td {
  background-color: #c3e6cb;
}

.table-success th,
.table-success td,
.table-success thead th,
.table-success tbody + tbody {
  border-color: #8fd19e;
}

.table-hover .table-success:hover {
  background-color: #b1dfbb;
}

.table-hover .table-success:hover > td,
.table-hover .table-success:hover > th {
  background-color: #b1dfbb;
}

.table-info,
.table-info > th,
.table-info > td {
  background-color: #bee5eb;
}

.table-info th,
.table-info td,
.table-info thead th,
.table-info tbody + tbody {
  border-color: #86cfda;
}

.table-hover .table-info:hover {
  background-color: #abdde5;
}

.table-hover .table-info:hover > td,
.table-hover .table-info:hover > th {
  background-color: #abdde5;
}

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #ffeeba;
}

.table-warning th,
.table-warning td,
.table-warning thead th,
.table-warning tbody + tbody {
  border-color: #ffdf7e;
}

.table-hover .table-warning:hover {
  background-color: #ffe8a1;
}

.table-hover .table-warning:hover > td,
.table-hover .table-warning:hover > th {
  background-color: #ffe8a1;
}

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #f5c6cb;
}

.table-danger th,
.table-danger td,
.table-danger thead th,
.table-danger tbody + tbody {
  border-color: #ed969e;
}

.table-hover .table-danger:hover {
  background-color: #f1b0b7;
}

.table-hover .table-danger:hover > td,
.table-hover .table-danger:hover > th {
  background-color: #f1b0b7;
}

.table-light,
.table-light > th,
.table-light > td {
  background-color: #fdfdfe;
}

.table-light th,
.table-light td,
.table-light thead th,
.table-light tbody + tbody {
  border-color: #fbfcfc;
}

.table-hover .table-light:hover {
  background-color: #ececf6;
}

.table-hover .table-light:hover > td,
.table-hover .table-light:hover > th {
  background-color: #ececf6;
}

.table-dark,
.table-dark > th,
.table-dark > td {
  background-color: #c6c8ca;
}

.table-dark th,
.table-dark td,
.table-dark thead th,
.table-dark tbody + tbody {
  border-color: #95999c;
}

.table-hover .table-dark:hover {
  background-color: #b9bbbe;
}

.table-hover .table-dark:hover > td,
.table-hover .table-dark:hover > th {
  background-color: #b9bbbe;
}

.table-active,
.table-active > th,
.table-active > td {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-hover .table-active:hover > td,
.table-hover .table-active:hover > th {
  background-color: rgba(0, 0, 0, 0.075);
}

.table .thead-dark th {
  color: #fff;
  background-color: #343a40;
  border-color: #454d55;
}

.table .thead-light th {
  color: #495057;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.table-dark {
  color: #fff;
  background-color: #343a40;
}

.table-dark th,
.table-dark td,
.table-dark thead th {
  border-color: #454d55;
}

.table-dark.table-bordered {
  border: 0;
}

.table-dark.table-striped tbody tr:nth-of-type(odd) {
  background-color: rgba(255, 255, 255, 0.05);
}

.table-dark.table-hover tbody tr:hover {
  color: #fff;
  background-color: rgba(255, 255, 255, 0.075);
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-sm > .table-bordered {
    border: 0;
  }
}

@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-md > .table-bordered {
    border: 0;
  }
}

@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-lg > .table-bordered {
    border: 0;
  }
}

@media (max-width: 1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  .table-responsive-xl > .table-bordered {
    border: 0;
  }
}

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

.table-responsive > .table-bordered {
  border: 0;
}

.form-control {
  display: block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .form-control {
    transition: none;
  }
}

.form-control::-ms-expand {
  background-color: transparent;
  border: 0;
}

.form-control:focus {
  color: #495057;
  background-color: #fff;
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.form-control::-webkit-input-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control::-moz-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control:-ms-input-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control::-ms-input-placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control::placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control:disabled, .form-control[readonly] {
  background-color: #e9ecef;
  opacity: 1;
}

select.form-control:focus::-ms-value {
  color: #495057;
  background-color: #fff;
}

.form-control-file,
.form-control-range {
  display: block;
  width: 100%;
}

.col-form-label {
  padding-top: calc(0.375rem + 1px);
  padding-bottom: calc(0.375rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5;
}

.col-form-label-lg {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 1.25rem;
  line-height: 1.5;
}

.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.875rem;
  line-height: 1.5;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  margin-bottom: 0;
  line-height: 1.5;
  color: #212529;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}

.form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm {
  height: calc(1.5em + 0.5rem + 2px);
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

.form-control-lg {
  height: calc(1.5em + 1rem + 2px);
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

select.form-control[size], select.form-control[multiple] {
  height: auto;
}

textarea.form-control {
  height: auto;
}

.form-group {
  margin-bottom: 1rem;
}

.form-text {
  display: block;
  margin-top: 0.25rem;
}

.form-row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px;
}

.form-row > .col,
.form-row > [class*="col-"] {
  padding-right: 5px;
  padding-left: 5px;
}

.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem;
}

.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem;
}

.form-check-input:disabled ~ .form-check-label {
  color: #6c757d;
}

.form-check-label {
  margin-bottom: 0;
}

.form-check-inline {
  display: -ms-inline-flexbox;
  display: inline-flex;
  -ms-flex-align: center;
  align-items: center;
  padding-left: 0;
  margin-right: 0.75rem;
}

.form-check-inline .form-check-input {
  position: static;
  margin-top: 0;
  margin-right: 0.3125rem;
  margin-left: 0;
}

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #28a745;
}

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  line-height: 1.5;
  color: #fff;
  background-color: rgba(40, 167, 69, 0.9);
  border-radius: 0.25rem;
}

.was-validated .form-control:valid, .form-control.is-valid {
  border-color: #28a745;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: center right calc(0.375em + 0.1875rem);
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .form-control:valid:focus, .form-control.is-valid:focus {
  border-color: #28a745;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.was-validated .form-control:valid ~ .valid-feedback,
.was-validated .form-control:valid ~ .valid-tooltip, .form-control.is-valid ~ .valid-feedback,
.form-control.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated textarea.form-control:valid, textarea.form-control.is-valid {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

.was-validated .custom-select:valid, .custom-select.is-valid {
  border-color: #28a745;
  padding-right: calc((1em + 0.75rem) * 3 / 4 + 1.75rem);
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .custom-select:valid:focus, .custom-select.is-valid:focus {
  border-color: #28a745;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.was-validated .custom-select:valid ~ .valid-feedback,
.was-validated .custom-select:valid ~ .valid-tooltip, .custom-select.is-valid ~ .valid-feedback,
.custom-select.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .form-control-file:valid ~ .valid-feedback,
.was-validated .form-control-file:valid ~ .valid-tooltip, .form-control-file.is-valid ~ .valid-feedback,
.form-control-file.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #28a745;
}

.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
  color: #28a745;
}

.was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
  border-color: #28a745;
}

.was-validated .custom-control-input:valid ~ .valid-feedback,
.was-validated .custom-control-input:valid ~ .valid-tooltip, .custom-control-input.is-valid ~ .valid-feedback,
.custom-control-input.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  border-color: #34ce57;
  background-color: #34ce57;
}

.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.was-validated .custom-control-input:valid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-valid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #28a745;
}

.was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #28a745;
}

.was-validated .custom-file-input:valid ~ .valid-feedback,
.was-validated .custom-file-input:valid ~ .valid-tooltip, .custom-file-input.is-valid ~ .valid-feedback,
.custom-file-input.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
  border-color: #28a745;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #dc3545;
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  line-height: 1.5;
  color: #fff;
  background-color: rgba(220, 53, 69, 0.9);
  border-radius: 0.25rem;
}

.was-validated .form-control:invalid, .form-control.is-invalid {
  border-color: #dc3545;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E");
  background-repeat: no-repeat;
  background-position: center right calc(0.375em + 0.1875rem);
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated .form-control:invalid ~ .invalid-feedback,
.was-validated .form-control:invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback,
.form-control.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

.was-validated .custom-select:invalid, .custom-select.is-invalid {
  border-color: #dc3545;
  padding-right: calc((1em + 0.75rem) * 3 / 4 + 1.75rem);
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .custom-select:invalid:focus, .custom-select.is-invalid:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated .custom-select:invalid ~ .invalid-feedback,
.was-validated .custom-select:invalid ~ .invalid-tooltip, .custom-select.is-invalid ~ .invalid-feedback,
.custom-select.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-control-file:invalid ~ .invalid-feedback,
.was-validated .form-control-file:invalid ~ .invalid-tooltip, .form-control-file.is-invalid ~ .invalid-feedback,
.form-control-file.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #dc3545;
}

.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
  color: #dc3545;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
  border-color: #dc3545;
}

.was-validated .custom-control-input:invalid ~ .invalid-feedback,
.was-validated .custom-control-input:invalid ~ .invalid-tooltip, .custom-control-input.is-invalid ~ .invalid-feedback,
.custom-control-input.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
  border-color: #e4606d;
  background-color: #e4606d;
}

.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #dc3545;
}

.was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
  border-color: #dc3545;
}

.was-validated .custom-file-input:invalid ~ .invalid-feedback,
.was-validated .custom-file-input:invalid ~ .invalid-tooltip, .custom-file-input.is-invalid ~ .invalid-feedback,
.custom-file-input.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.form-inline {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
  flex-flow: row wrap;
  -ms-flex-align: center;
  align-items: center;
}

.form-inline .form-check {
  width: 100%;
}

@media (min-width: 576px) {
  .form-inline label {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin-bottom: 0;
  }
  .form-inline .form-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    -ms-flex-align: center;
    align-items: center;
    margin-bottom: 0;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .form-control-plaintext {
    display: inline-block;
  }
  .form-inline .input-group,
  .form-inline .custom-select {
    width: auto;
  }
  .form-inline .form-check {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: auto;
    padding-left: 0;
  }
  .form-inline .form-check-input {
    position: relative;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    margin-top: 0;
    margin-right: 0.25rem;
    margin-left: 0;
  }
  .form-inline .custom-control {
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
  }
  .form-inline .custom-control-label {
    margin-bottom: 0;
  }
}

.btn {
  display: inline-block;
  font-weight: 400;
  color: #212529;
  text-align: center;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .btn {
    transition: none;
  }
}

.btn:hover {
  color: #212529;
  text-decoration: none;
}

.btn:focus, .btn.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.btn.disabled, .btn:disabled {
  opacity: 0.65;
}

a.btn.disabled,
fieldset:disabled a.btn {
  pointer-events: none;
}

.btn-primary {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
}

.btn-primary:focus, .btn-primary.focus {
  box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
}

.btn-primary.disabled, .btn-primary:disabled {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
.show > .btn-primary.dropdown-toggle {
  color: #fff;
  background-color: #0062cc;
  border-color: #005cbf;
}

.btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
}

.btn-secondary {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-secondary:hover {
  color: #fff;
  background-color: #5a6268;
  border-color: #545b62;
}

.btn-secondary:focus, .btn-secondary.focus {
  box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
}

.btn-secondary.disabled, .btn-secondary:disabled {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
.show > .btn-secondary.dropdown-toggle {
  color: #fff;
  background-color: #545b62;
  border-color: #4e555b;
}

.btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
.show > .btn-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
}

.btn-success {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}

.btn-success:hover {
  color: #fff;
  background-color: #218838;
  border-color: #1e7e34;
}

.btn-success:focus, .btn-success.focus {
  box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
}

.btn-success.disabled, .btn-success:disabled {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}

.btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
.show > .btn-success.dropdown-toggle {
  color: #fff;
  background-color: #1e7e34;
  border-color: #1c7430;
}

.btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
.show > .btn-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
}

.btn-info {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
}

.btn-info:hover {
  color: #fff;
  background-color: #138496;
  border-color: #117a8b;
}

.btn-info:focus, .btn-info.focus {
  box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
}

.btn-info.disabled, .btn-info:disabled {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
}

.btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
.show > .btn-info.dropdown-toggle {
  color: #fff;
  background-color: #117a8b;
  border-color: #10707f;
}

.btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
.show > .btn-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
}

.btn-warning {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107;
}

.btn-warning:hover {
  color: #212529;
  background-color: #e0a800;
  border-color: #d39e00;
}

.btn-warning:focus, .btn-warning.focus {
  box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
}

.btn-warning.disabled, .btn-warning:disabled {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107;
}

.btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
.show > .btn-warning.dropdown-toggle {
  color: #212529;
  background-color: #d39e00;
  border-color: #c69500;
}

.btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
.show > .btn-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
}

.btn-danger {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-danger:hover {
  color: #fff;
  background-color: #c82333;
  border-color: #bd2130;
}

.btn-danger:focus, .btn-danger.focus {
  box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
}

.btn-danger.disabled, .btn-danger:disabled {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
.show > .btn-danger.dropdown-toggle {
  color: #fff;
  background-color: #bd2130;
  border-color: #b21f2d;
}

.btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
.show > .btn-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
}

.btn-light {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-light:hover {
  color: #212529;
  background-color: #e2e6ea;
  border-color: #dae0e5;
}

.btn-light:focus, .btn-light.focus {
  box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
}

.btn-light.disabled, .btn-light:disabled {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
.show > .btn-light.dropdown-toggle {
  color: #212529;
  background-color: #dae0e5;
  border-color: #d3d9df;
}

.btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
.show > .btn-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
}

.btn-dark {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-dark:hover {
  color: #fff;
  background-color: #23272b;
  border-color: #1d2124;
}

.btn-dark:focus, .btn-dark.focus {
  box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
}

.btn-dark.disabled, .btn-dark:disabled {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
.show > .btn-dark.dropdown-toggle {
  color: #fff;
  background-color: #1d2124;
  border-color: #171a1d;
}

.btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
.show > .btn-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
}

.btn-outline-primary {
  color: #007bff;
  border-color: #007bff;
}

.btn-outline-primary:hover {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-outline-primary:focus, .btn-outline-primary.focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}

.btn-outline-primary.disabled, .btn-outline-primary:disabled {
  color: #007bff;
  background-color: transparent;
}

.btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
.show > .btn-outline-primary.dropdown-toggle {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-primary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}

.btn-outline-secondary {
  color: #6c757d;
  border-color: #6c757d;
}

.btn-outline-secondary:hover {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-outline-secondary:focus, .btn-outline-secondary.focus {
  box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}

.btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
  color: #6c757d;
  background-color: transparent;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
.show > .btn-outline-secondary.dropdown-toggle {
  color: #fff;
  background-color: #6c757d;
  border-color: #6c757d;
}

.btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-secondary.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}

.btn-outline-success {
  color: #28a745;
  border-color: #28a745;
}

.btn-outline-success:hover {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}

.btn-outline-success:focus, .btn-outline-success.focus {
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
}

.btn-outline-success.disabled, .btn-outline-success:disabled {
  color: #28a745;
  background-color: transparent;
}

.btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
.show > .btn-outline-success.dropdown-toggle {
  color: #fff;
  background-color: #28a745;
  border-color: #28a745;
}

.btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-success.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
}

.btn-outline-info {
  color: #17a2b8;
  border-color: #17a2b8;
}

.btn-outline-info:hover {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
}

.btn-outline-info:focus, .btn-outline-info.focus {
  box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
}

.btn-outline-info.disabled, .btn-outline-info:disabled {
  color: #17a2b8;
  background-color: transparent;
}

.btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
.show > .btn-outline-info.dropdown-toggle {
  color: #fff;
  background-color: #17a2b8;
  border-color: #17a2b8;
}

.btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
}

.btn-outline-warning {
  color: #ffc107;
  border-color: #ffc107;
}

.btn-outline-warning:hover {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107;
}

.btn-outline-warning:focus, .btn-outline-warning.focus {
  box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
}

.btn-outline-warning.disabled, .btn-outline-warning:disabled {
  color: #ffc107;
  background-color: transparent;
}

.btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
.show > .btn-outline-warning.dropdown-toggle {
  color: #212529;
  background-color: #ffc107;
  border-color: #ffc107;
}

.btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-warning.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
}

.btn-outline-danger {
  color: #dc3545;
  border-color: #dc3545;
}

.btn-outline-danger:hover {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-outline-danger:focus, .btn-outline-danger.focus {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}

.btn-outline-danger.disabled, .btn-outline-danger:disabled {
  color: #dc3545;
  background-color: transparent;
}

.btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
.show > .btn-outline-danger.dropdown-toggle {
  color: #fff;
  background-color: #dc3545;
  border-color: #dc3545;
}

.btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-danger.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}

.btn-outline-light {
  color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-outline-light:hover {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-outline-light:focus, .btn-outline-light.focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.btn-outline-light.disabled, .btn-outline-light:disabled {
  color: #f8f9fa;
  background-color: transparent;
}

.btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
.show > .btn-outline-light.dropdown-toggle {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa;
}

.btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-light.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.btn-outline-dark {
  color: #343a40;
  border-color: #343a40;
}

.btn-outline-dark:hover {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-outline-dark:focus, .btn-outline-dark.focus {
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}

.btn-outline-dark.disabled, .btn-outline-dark:disabled {
  color: #343a40;
  background-color: transparent;
}

.btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
.show > .btn-outline-dark.dropdown-toggle {
  color: #fff;
  background-color: #343a40;
  border-color: #343a40;
}

.btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-dark.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}

.btn-link {
  font-weight: 400;
  color: #007bff;
  text-decoration: none;
}

.btn-link:hover {
  color: #0056b3;
  text-decoration: underline;
}

.btn-link:focus, .btn-link.focus {
  text-decoration: underline;
  box-shadow: none;
}

.btn-link:disabled, .btn-link.disabled {
  color: #6c757d;
  pointer-events: none;
}

.btn-lg, .btn-group-lg > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

.btn-sm, .btn-group-sm > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

.btn-block {
  display: block;
  width: 100%;
}

.btn-block + .btn-block {
  margin-top: 0.5rem;
}

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}

.fade {
  transition: opacity 0.15s linear;
}

@media (prefers-reduced-motion: reduce) {
  .fade {
    transition: none;
  }
}

.fade:not(.show) {
  opacity: 0;
}

.collapse:not(.show) {
  display: none;
}

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}

@media (prefers-reduced-motion: reduce) {
  .collapsing {
    transition: none;
  }
}

.dropup,
.dropright,
.dropdown,
.dropleft {
  position: relative;
}

.dropdown-toggle {
  white-space: nowrap;
}

.dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid;
  border-right: 0.3em solid transparent;
  border-bottom: 0;
  border-left: 0.3em solid transparent;
}

.dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0.125rem 0 0;
  font-size: 1rem;
  color: #212529;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem;
}

.dropdown-menu-left {
  right: auto;
  left: 0;
}

.dropdown-menu-right {
  right: 0;
  left: auto;
}

@media (min-width: 576px) {
  .dropdown-menu-sm-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-sm-right {
    right: 0;
    left: auto;
  }
}

@media (min-width: 768px) {
  .dropdown-menu-md-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-md-right {
    right: 0;
    left: auto;
  }
}

@media (min-width: 992px) {
  .dropdown-menu-lg-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-lg-right {
    right: 0;
    left: auto;
  }
}

@media (min-width: 1200px) {
  .dropdown-menu-xl-left {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xl-right {
    right: 0;
    left: auto;
  }
}

.dropup .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0.125rem;
}

.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent;
}

.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropright .dropdown-menu {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0.125rem;
}

.dropright .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid;
}

.dropright .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropright .dropdown-toggle::after {
  vertical-align: 0;
}

.dropleft .dropdown-menu {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0.125rem;
}

.dropleft .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
}

.dropleft .dropdown-toggle::after {
  display: none;
}

.dropleft .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent;
}

.dropleft .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropleft .dropdown-toggle::before {
  vertical-align: 0;
}

.dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
  right: auto;
  bottom: auto;
}

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #e9ecef;
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1.5rem;
  clear: both;
  font-weight: 400;
  color: #212529;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
}

.dropdown-item:hover, .dropdown-item:focus {
  color: #16181b;
  text-decoration: none;
  background-color: #f8f9fa;
}

.dropdown-item.active, .dropdown-item:active {
  color: #fff;
  text-decoration: none;
  background-color: #007bff;
}

.dropdown-item.disabled, .dropdown-item:disabled {
  color: #6c757d;
  pointer-events: none;
  background-color: transparent;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-header {
  display: block;
  padding: 0.5rem 1.5rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #6c757d;
  white-space: nowrap;
}

.dropdown-item-text {
  display: block;
  padding: 0.25rem 1.5rem;
  color: #212529;
}

.btn-group,
.btn-group-vertical {
  position: relative;
  display: -ms-inline-flexbox;
  display: inline-flex;
  vertical-align: middle;
}

.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
}

.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover {
  z-index: 1;
}

.btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
.btn-group-vertical > .btn:focus,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn.active {
  z-index: 1;
}

.btn-toolbar {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-pack: start;
  justify-content: flex-start;
}

.btn-toolbar .input-group {
  width: auto;
}

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) {
  margin-left: -1px;
}

.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.btn-group > .btn:not(:first-child),
.btn-group > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
  padding-right: 0.5625rem;
  padding-left: 0.5625rem;
}

.dropdown-toggle-split::after,
.dropup .dropdown-toggle-split::after,
.dropright .dropdown-toggle-split::after {
  margin-left: 0;
}

.dropleft .dropdown-toggle-split::before {
  margin-right: 0;
}

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 0.375rem;
  padding-left: 0.375rem;
}

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 0.75rem;
  padding-left: 0.75rem;
}

.btn-group-vertical {
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-align: start;
  align-items: flex-start;
  -ms-flex-pack: center;
  justify-content: center;
}

.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group {
  width: 100%;
}

.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) {
  margin-top: -1px;
}

.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.btn-group-toggle > .btn,
.btn-group-toggle > .btn-group > .btn {
  margin-bottom: 0;
}

.btn-group-toggle > .btn input[type="radio"],
.btn-group-toggle > .btn input[type="checkbox"],
.btn-group-toggle > .btn-group > .btn input[type="radio"],
.btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}

.input-group {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-align: stretch;
  align-items: stretch;
  width: 100%;
}

.input-group > .form-control,
.input-group > .form-control-plaintext,
.input-group > .custom-select,
.input-group > .custom-file {
  position: relative;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  width: 1%;
  margin-bottom: 0;
}

.input-group > .form-control + .form-control,
.input-group > .form-control + .custom-select,
.input-group > .form-control + .custom-file,
.input-group > .form-control-plaintext + .form-control,
.input-group > .form-control-plaintext + .custom-select,
.input-group > .form-control-plaintext + .custom-file,
.input-group > .custom-select + .form-control,
.input-group > .custom-select + .custom-select,
.input-group > .custom-select + .custom-file,
.input-group > .custom-file + .form-control,
.input-group > .custom-file + .custom-select,
.input-group > .custom-file + .custom-file {
  margin-left: -1px;
}

.input-group > .form-control:focus,
.input-group > .custom-select:focus,
.input-group > .custom-file .custom-file-input:focus ~ .custom-file-label {
  z-index: 3;
}

.input-group > .custom-file .custom-file-input:focus {
  z-index: 4;
}

.input-group > .form-control:not(:last-child),
.input-group > .custom-select:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .form-control:not(:first-child),
.input-group > .custom-select:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.input-group > .custom-file {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
}

.input-group > .custom-file:not(:last-child) .custom-file-label,
.input-group > .custom-file:not(:last-child) .custom-file-label::after {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .custom-file:not(:first-child) .custom-file-label {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.input-group-prepend,
.input-group-append {
  display: -ms-flexbox;
  display: flex;
}

.input-group-prepend .btn,
.input-group-append .btn {
  position: relative;
  z-index: 2;
}

.input-group-prepend .btn:focus,
.input-group-append .btn:focus {
  z-index: 3;
}

.input-group-prepend .btn + .btn,
.input-group-prepend .btn + .input-group-text,
.input-group-prepend .input-group-text + .input-group-text,
.input-group-prepend .input-group-text + .btn,
.input-group-append .btn + .btn,
.input-group-append .btn + .input-group-text,
.input-group-append .input-group-text + .input-group-text,
.input-group-append .input-group-text + .btn {
  margin-left: -1px;
}

.input-group-prepend {
  margin-right: -1px;
}

.input-group-append {
  margin-left: -1px;
}

.input-group-text {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding: 0.375rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  text-align: center;
  white-space: nowrap;
  background-color: #e9ecef;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
}

.input-group-text input[type="radio"],
.input-group-text input[type="checkbox"] {
  margin-top: 0;
}

.input-group-lg > .form-control:not(textarea),
.input-group-lg > .custom-select {
  height: calc(1.5em + 1rem + 2px);
}

.input-group-lg > .form-control,
.input-group-lg > .custom-select,
.input-group-lg > .input-group-prepend > .input-group-text,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.input-group-lg > .input-group-append > .btn {
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

.input-group-sm > .form-control:not(textarea),
.input-group-sm > .custom-select {
  height: calc(1.5em + 0.5rem + 2px);
}

.input-group-sm > .form-control,
.input-group-sm > .custom-select,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.input-group-sm > .input-group-append > .btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

.input-group-lg > .custom-select,
.input-group-sm > .custom-select {
  padding-right: 1.75rem;
}

.input-group > .input-group-prepend > .btn,
.input-group > .input-group-prepend > .input-group-text,
.input-group > .input-group-append:not(:last-child) > .btn,
.input-group > .input-group-append:not(:last-child) > .input-group-text,
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}

.input-group > .input-group-append > .btn,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.custom-control {
  position: relative;
  display: block;
  min-height: 1.5rem;
  padding-left: 1.5rem;
}

.custom-control-inline {
  display: -ms-inline-flexbox;
  display: inline-flex;
  margin-right: 1rem;
}

.custom-control-input {
  position: absolute;
  z-index: -1;
  opacity: 0;
}

.custom-control-input:checked ~ .custom-control-label::before {
  color: #fff;
  border-color: #007bff;
  background-color: #007bff;
}

.custom-control-input:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #80bdff;
}

.custom-control-input:not(:disabled):active ~ .custom-control-label::before {
  color: #fff;
  background-color: #b3d7ff;
  border-color: #b3d7ff;
}

.custom-control-input:disabled ~ .custom-control-label {
  color: #6c757d;
}

.custom-control-input:disabled ~ .custom-control-label::before {
  background-color: #e9ecef;
}

.custom-control-label {
  position: relative;
  margin-bottom: 0;
  vertical-align: top;
}

.custom-control-label::before {
  position: absolute;
  top: 0.25rem;
  left: -1.5rem;
  display: block;
  width: 1rem;
  height: 1rem;
  pointer-events: none;
  content: "";
  background-color: #fff;
  border: #adb5bd solid 1px;
}

.custom-control-label::after {
  position: absolute;
  top: 0.25rem;
  left: -1.5rem;
  display: block;
  width: 1rem;
  height: 1rem;
  content: "";
  background: no-repeat 50% / 50% 50%;
}

.custom-checkbox .custom-control-label::before {
  border-radius: 0.25rem;
}

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e");
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
  border-color: #007bff;
  background-color: #007bff;
}

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e");
}

.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-radio .custom-control-label::before {
  border-radius: 50%;
}

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}

.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-switch {
  padding-left: 2.25rem;
}

.custom-switch .custom-control-label::before {
  left: -2.25rem;
  width: 1.75rem;
  pointer-events: all;
  border-radius: 0.5rem;
}

.custom-switch .custom-control-label::after {
  top: calc(0.25rem + 2px);
  left: calc(-2.25rem + 2px);
  width: calc(1rem - 4px);
  height: calc(1rem - 4px);
  background-color: #adb5bd;
  border-radius: 0.5rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out;
  transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .custom-switch .custom-control-label::after {
    transition: none;
  }
}

.custom-switch .custom-control-input:checked ~ .custom-control-label::after {
  background-color: #fff;
  -webkit-transform: translateX(0.75rem);
  transform: translateX(0.75rem);
}

.custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5);
}

.custom-select {
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 1.75rem 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  vertical-align: middle;
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px;
  background-color: #fff;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

.custom-select:focus {
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-select:focus::-ms-value {
  color: #495057;
  background-color: #fff;
}

.custom-select[multiple], .custom-select[size]:not([size="1"]) {
  height: auto;
  padding-right: 0.75rem;
  background-image: none;
}

.custom-select:disabled {
  color: #6c757d;
  background-color: #e9ecef;
}

.custom-select::-ms-expand {
  display: none;
}

.custom-select-sm {
  height: calc(1.5em + 0.5rem + 2px);
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  padding-left: 0.5rem;
  font-size: 0.875rem;
}

.custom-select-lg {
  height: calc(1.5em + 1rem + 2px);
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1rem;
  font-size: 1.25rem;
}

.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  margin-bottom: 0;
}

.custom-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  margin: 0;
  opacity: 0;
}

.custom-file-input:focus ~ .custom-file-label {
  border-color: #80bdff;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-file-input:disabled ~ .custom-file-label {
  background-color: #e9ecef;
}

.custom-file-input:lang(en) ~ .custom-file-label::after {
  content: "Browse";
}

.custom-file-input ~ .custom-file-label[data-browse]::after {
  content: attr(data-browse);
}

.custom-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
}

.custom-file-label::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 3;
  display: block;
  height: calc(1.5em + 0.75rem);
  padding: 0.375rem 0.75rem;
  line-height: 1.5;
  color: #495057;
  content: "Browse";
  background-color: #e9ecef;
  border-left: inherit;
  border-radius: 0 0.25rem 0.25rem 0;
}

.custom-range {
  width: 100%;
  height: calc(1rem + 0.4rem);
  padding: 0;
  background-color: transparent;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

.custom-range:focus {
  outline: none;
}

.custom-range:focus::-webkit-slider-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-range:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-range:focus::-ms-thumb {
  box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.custom-range::-moz-focus-outer {
  border: 0;
}

.custom-range::-webkit-slider-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: -0.25rem;
  background-color: #007bff;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -webkit-appearance: none;
  appearance: none;
}

@media (prefers-reduced-motion: reduce) {
  .custom-range::-webkit-slider-thumb {
    transition: none;
  }
}

.custom-range::-webkit-slider-thumb:active {
  background-color: #b3d7ff;
}

.custom-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}

.custom-range::-moz-range-thumb {
  width: 1rem;
  height: 1rem;
  background-color: #007bff;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  -moz-appearance: none;
  appearance: none;
}

@media (prefers-reduced-motion: reduce) {
  .custom-range::-moz-range-thumb {
    transition: none;
  }
}

.custom-range::-moz-range-thumb:active {
  background-color: #b3d7ff;
}

.custom-range::-moz-range-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: #dee2e6;
  border-color: transparent;
  border-radius: 1rem;
}

.custom-range::-ms-thumb {
  width: 1rem;
  height: 1rem;
  margin-top: 0;
  margin-right: 0.2rem;
  margin-left: 0.2rem;
  background-color: #007bff;
  border: 0;
  border-radius: 1rem;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  appearance: none;
}

@media (prefers-reduced-motion: reduce) {
  .custom-range::-ms-thumb {
    transition: none;
  }
}

.custom-range::-ms-thumb:active {
  background-color: #b3d7ff;
}

.custom-range::-ms-track {
  width: 100%;
  height: 0.5rem;
  color: transparent;
  cursor: pointer;
  background-color: transparent;
  border-color: transparent;
  border-width: 0.5rem;
}

.custom-range::-ms-fill-lower {
  background-color: #dee2e6;
  border-radius: 1rem;
}

.custom-range::-ms-fill-upper {
  margin-right: 15px;
  background-color: #dee2e6;
  border-radius: 1rem;
}

.custom-range:disabled::-webkit-slider-thumb {
  background-color: #adb5bd;
}

.custom-range:disabled::-webkit-slider-runnable-track {
  cursor: default;
}

.custom-range:disabled::-moz-range-thumb {
  background-color: #adb5bd;
}

.custom-range:disabled::-moz-range-track {
  cursor: default;
}

.custom-range:disabled::-ms-thumb {
  background-color: #adb5bd;
}

.custom-control-label::before,
.custom-file-label,
.custom-select {
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .custom-control-label::before,
  .custom-file-label,
  .custom-select {
    transition: none;
  }
}

.nav {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: 0.5rem 1rem;
}

.nav-link:hover, .nav-link:focus {
  text-decoration: none;
}

.nav-link.disabled {
  color: #6c757d;
  pointer-events: none;
  cursor: default;
}

.nav-tabs {
  border-bottom: 1px solid #dee2e6;
}

.nav-tabs .nav-item {
  margin-bottom: -1px;
}

.nav-tabs .nav-link {
  border: 1px solid transparent;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
  border-color: #e9ecef #e9ecef #dee2e6;
}

.nav-tabs .nav-link.disabled {
  color: #6c757d;
  background-color: transparent;
  border-color: transparent;
}

.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: #495057;
  background-color: #fff;
  border-color: #dee2e6 #dee2e6 #fff;
}

.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav-pills .nav-link {
  border-radius: 0.25rem;
}

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #007bff;
}

.nav-fill .nav-item {
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  text-align: center;
}

.nav-justified .nav-item {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -ms-flex-positive: 1;
  flex-grow: 1;
  text-align: center;
}

.tab-content > .tab-pane {
  display: none;
}

.tab-content > .active {
  display: block;
}

.navbar {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 0.5rem 1rem;
}

.navbar > .container,
.navbar > .container-fluid {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

.navbar-brand {
  display: inline-block;
  padding-top: 0.3125rem;
  padding-bottom: 0.3125rem;
  margin-right: 1rem;
  font-size: 1.25rem;
  line-height: inherit;
  white-space: nowrap;
}

.navbar-brand:hover, .navbar-brand:focus {
  text-decoration: none;
}

.navbar-nav {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.navbar-nav .nav-link {
  padding-right: 0;
  padding-left: 0;
}

.navbar-nav .dropdown-menu {
  position: static;
  float: none;
}

.navbar-text {
  display: inline-block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
}

.navbar-collapse {
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  -ms-flex-positive: 1;
  flex-grow: 1;
  -ms-flex-align: center;
  align-items: center;
}

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

.navbar-toggler:hover, .navbar-toggler:focus {
  text-decoration: none;
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: no-repeat center center;
  background-size: 100% 100%;
}

@media (max-width: 575.98px) {
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 576px) {
  .navbar-expand-sm {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .navbar-expand-sm .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
}

@media (max-width: 767.98px) {
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 768px) {
  .navbar-expand-md {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .navbar-expand-md .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
}

@media (max-width: 991.98px) {
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 992px) {
  .navbar-expand-lg {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .navbar-expand-lg .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
}

@media (max-width: 1199.98px) {
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid {
    padding-right: 0;
    padding-left: 0;
  }
}

@media (min-width: 1200px) {
  .navbar-expand-xl {
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -ms-flex-pack: start;
    justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
  }
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }
  .navbar-expand-xl .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
}

.navbar-expand {
  -ms-flex-flow: row nowrap;
  flex-flow: row nowrap;
  -ms-flex-pack: start;
  justify-content: flex-start;
}

.navbar-expand > .container,
.navbar-expand > .container-fluid {
  padding-right: 0;
  padding-left: 0;
}

.navbar-expand .navbar-nav {
  -ms-flex-direction: row;
  flex-direction: row;
}

.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}

.navbar-expand .navbar-nav .nav-link {
  padding-right: 0.5rem;
  padding-left: 0.5rem;
}

.navbar-expand > .container,
.navbar-expand > .container-fluid {
  -ms-flex-wrap: nowrap;
  flex-wrap: nowrap;
}

.navbar-expand .navbar-collapse {
  display: -ms-flexbox !important;
  display: flex !important;
  -ms-flex-preferred-size: auto;
  flex-basis: auto;
}

.navbar-expand .navbar-toggler {
  display: none;
}

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
  color: rgba(0, 0, 0, 0.7);
}

.navbar-light .navbar-nav .nav-link.disabled {
  color: rgba(0, 0, 0, 0.3);
}

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.5);
  border-color: rgba(0, 0, 0, 0.1);
}

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.5);
}

.navbar-light .navbar-text a {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
  color: rgba(0, 0, 0, 0.9);
}

.navbar-dark .navbar-brand {
  color: #fff;
}

.navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
  color: #fff;
}

.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
  color: rgba(255, 255, 255, 0.75);
}

.navbar-dark .navbar-nav .nav-link.disabled {
  color: rgba(255, 255, 255, 0.25);
}

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff;
}

.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.5);
  border-color: rgba(255, 255, 255, 0.1);
}

.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.5);
}

.navbar-dark .navbar-text a {
  color: #fff;
}

.navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
  color: #fff;
}

.card {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
}

.card > hr {
  margin-right: 0;
  margin-left: 0;
}

.card > .list-group:first-child .list-group-item:first-child {
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.card > .list-group:last-child .list-group-item:last-child {
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.card-body {
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1.25rem;
}

.card-title {
  margin-bottom: 0.75rem;
}

.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0;
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link:hover {
  text-decoration: none;
}

.card-link + .card-link {
  margin-left: 1.25rem;
}

.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}

.card-header:first-child {
  border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
}

.card-header + .list-group .list-group-item:first-child {
  border-top: 0;
}

.card-footer {
  padding: 0.75rem 1.25rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid rgba(0, 0, 0, 0.125);
}

.card-footer:last-child {
  border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);
}

.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -0.75rem;
  margin-left: -0.625rem;
  border-bottom: 0;
}

.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem;
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem;
}

.card-img {
  width: 100%;
  border-radius: calc(0.25rem - 1px);
}

.card-img-top {
  width: 100%;
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px);
}

.card-img-bottom {
  width: 100%;
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px);
}

.card-deck {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
}

.card-deck .card {
  margin-bottom: 15px;
}

@media (min-width: 576px) {
  .card-deck {
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
    margin-right: -15px;
    margin-left: -15px;
  }
  .card-deck .card {
    display: -ms-flexbox;
    display: flex;
    -ms-flex: 1 0 0%;
    flex: 1 0 0%;
    -ms-flex-direction: column;
    flex-direction: column;
    margin-right: 15px;
    margin-bottom: 0;
    margin-left: 15px;
  }
}

.card-group {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
}

.card-group > .card {
  margin-bottom: 15px;
}

@media (min-width: 576px) {
  .card-group {
    -ms-flex-flow: row wrap;
    flex-flow: row wrap;
  }
  .card-group > .card {
    -ms-flex: 1 0 0%;
    flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group > .card:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-top,
  .card-group > .card:not(:last-child) .card-header {
    border-top-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-bottom,
  .card-group > .card:not(:last-child) .card-footer {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-top,
  .card-group > .card:not(:first-child) .card-header {
    border-top-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-bottom,
  .card-group > .card:not(:first-child) .card-footer {
    border-bottom-left-radius: 0;
  }
}

.card-columns .card {
  margin-bottom: 0.75rem;
}

@media (min-width: 576px) {
  .card-columns {
    -webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 3;
    -webkit-column-gap: 1.25rem;
    -moz-column-gap: 1.25rem;
    column-gap: 1.25rem;
    orphans: 1;
    widows: 1;
  }
  .card-columns .card {
    display: inline-block;
    width: 100%;
  }
}

.accordion > .card {
  overflow: hidden;
}

.accordion > .card:not(:first-of-type) .card-header:first-child {
  border-radius: 0;
}

.accordion > .card:not(:first-of-type):not(:last-of-type) {
  border-bottom: 0;
  border-radius: 0;
}

.accordion > .card:first-of-type {
  border-bottom: 0;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.accordion > .card:last-of-type {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.accordion > .card .card-header {
  margin-bottom: -1px;
}

.breadcrumb {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: 0.75rem 1rem;
  margin-bottom: 1rem;
  list-style: none;
  background-color: #e9ecef;
  border-radius: 0.25rem;
}

.breadcrumb-item + .breadcrumb-item {
  padding-left: 0.5rem;
}

.breadcrumb-item + .breadcrumb-item::before {
  display: inline-block;
  padding-right: 0.5rem;
  color: #6c757d;
  content: "/";
}

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: underline;
}

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: none;
}

.breadcrumb-item.active {
  color: #6c757d;
}

.pagination {
  display: -ms-flexbox;
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0.25rem;
}

.page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #007bff;
  background-color: #fff;
  border: 1px solid #dee2e6;
}

.page-link:hover {
  z-index: 2;
  color: #0056b3;
  text-decoration: none;
  background-color: #e9ecef;
  border-color: #dee2e6;
}

.page-link:focus {
  z-index: 2;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.page-item:first-child .page-link {
  margin-left: 0;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.page-item:last-child .page-link {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}

.page-item.active .page-link {
  z-index: 1;
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.page-item.disabled .page-link {
  color: #6c757d;
  pointer-events: none;
  cursor: auto;
  background-color: #fff;
  border-color: #dee2e6;
}

.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
  line-height: 1.5;
}

.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem;
}

.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem;
}

.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
}

.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem;
}

.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem;
}

.badge {
  display: inline-block;
  padding: 0.25em 0.4em;
  font-size: 75%;
  font-weight: 700;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .badge {
    transition: none;
  }
}

a.badge:hover, a.badge:focus {
  text-decoration: none;
}

.badge:empty {
  display: none;
}

.btn .badge {
  position: relative;
  top: -1px;
}

.badge-pill {
  padding-right: 0.6em;
  padding-left: 0.6em;
  border-radius: 10rem;
}

.badge-primary {
  color: #fff;
  background-color: #007bff;
}

a.badge-primary:hover, a.badge-primary:focus {
  color: #fff;
  background-color: #0062cc;
}

a.badge-primary:focus, a.badge-primary.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}

.badge-secondary {
  color: #fff;
  background-color: #6c757d;
}

a.badge-secondary:hover, a.badge-secondary:focus {
  color: #fff;
  background-color: #545b62;
}

a.badge-secondary:focus, a.badge-secondary.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}

.badge-success {
  color: #fff;
  background-color: #28a745;
}

a.badge-success:hover, a.badge-success:focus {
  color: #fff;
  background-color: #1e7e34;
}

a.badge-success:focus, a.badge-success.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
}

.badge-info {
  color: #fff;
  background-color: #17a2b8;
}

a.badge-info:hover, a.badge-info:focus {
  color: #fff;
  background-color: #117a8b;
}

a.badge-info:focus, a.badge-info.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
}

.badge-warning {
  color: #212529;
  background-color: #ffc107;
}

a.badge-warning:hover, a.badge-warning:focus {
  color: #212529;
  background-color: #d39e00;
}

a.badge-warning:focus, a.badge-warning.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
}

.badge-danger {
  color: #fff;
  background-color: #dc3545;
}

a.badge-danger:hover, a.badge-danger:focus {
  color: #fff;
  background-color: #bd2130;
}

a.badge-danger:focus, a.badge-danger.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
}

.badge-light {
  color: #212529;
  background-color: #f8f9fa;
}

a.badge-light:hover, a.badge-light:focus {
  color: #212529;
  background-color: #dae0e5;
}

a.badge-light:focus, a.badge-light.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
}

.badge-dark {
  color: #fff;
  background-color: #343a40;
}

a.badge-dark:hover, a.badge-dark:focus {
  color: #fff;
  background-color: #1d2124;
}

a.badge-dark:focus, a.badge-dark.focus {
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
}

.jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-color: #e9ecef;
  border-radius: 0.3rem;
}

@media (min-width: 576px) {
  .jumbotron {
    padding: 4rem 2rem;
  }
}

.jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  border-radius: 0;
}

.alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem;
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 700;
}

.alert-dismissible {
  padding-right: 4rem;
}

.alert-dismissible .close {
  position: absolute;
  top: 0;
  right: 0;
  padding: 0.75rem 1.25rem;
  color: inherit;
}

.alert-primary {
  color: #004085;
  background-color: #cce5ff;
  border-color: #b8daff;
}

.alert-primary hr {
  border-top-color: #9fcdff;
}

.alert-primary .alert-link {
  color: #002752;
}

.alert-secondary {
  color: #383d41;
  background-color: #e2e3e5;
  border-color: #d6d8db;
}

.alert-secondary hr {
  border-top-color: #c8cbcf;
}

.alert-secondary .alert-link {
  color: #202326;
}

.alert-success {
  color: #155724;
  background-color: #d4edda;
  border-color: #c3e6cb;
}

.alert-success hr {
  border-top-color: #b1dfbb;
}

.alert-success .alert-link {
  color: #0b2e13;
}

.alert-info {
  color: #0c5460;
  background-color: #d1ecf1;
  border-color: #bee5eb;
}

.alert-info hr {
  border-top-color: #abdde5;
}

.alert-info .alert-link {
  color: #062c33;
}

.alert-warning {
  color: #856404;
  background-color: #fff3cd;
  border-color: #ffeeba;
}

.alert-warning hr {
  border-top-color: #ffe8a1;
}

.alert-warning .alert-link {
  color: #533f03;
}

.alert-danger {
  color: #721c24;
  background-color: #f8d7da;
  border-color: #f5c6cb;
}

.alert-danger hr {
  border-top-color: #f1b0b7;
}

.alert-danger .alert-link {
  color: #491217;
}

.alert-light {
  color: #818182;
  background-color: #fefefe;
  border-color: #fdfdfe;
}

.alert-light hr {
  border-top-color: #ececf6;
}

.alert-light .alert-link {
  color: #686868;
}

.alert-dark {
  color: #1b1e21;
  background-color: #d6d8d9;
  border-color: #c6c8ca;
}

.alert-dark hr {
  border-top-color: #b9bbbe;
}

.alert-dark .alert-link {
  color: #040505;
}

@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0;
  }
  to {
    background-position: 0 0;
  }
}

@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0;
  }
  to {
    background-position: 0 0;
  }
}

.progress {
  display: -ms-flexbox;
  display: flex;
  height: 1rem;
  overflow: hidden;
  font-size: 0.75rem;
  background-color: #e9ecef;
  border-radius: 0.25rem;
}

.progress-bar {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #007bff;
  transition: width 0.6s ease;
}

@media (prefers-reduced-motion: reduce) {
  .progress-bar {
    transition: none;
  }
}

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem;
}

.progress-bar-animated {
  -webkit-animation: progress-bar-stripes 1s linear infinite;
  animation: progress-bar-stripes 1s linear infinite;
}

@media (prefers-reduced-motion: reduce) {
  .progress-bar-animated {
    -webkit-animation: none;
    animation: none;
  }
}

.media {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: start;
  align-items: flex-start;
}

.media-body {
  -ms-flex: 1;
  flex: 1;
}

.list-group {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
}

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit;
}

.list-group-item-action:hover, .list-group-item-action:focus {
  z-index: 1;
  color: #495057;
  text-decoration: none;
  background-color: #f8f9fa;
}

.list-group-item-action:active {
  color: #212529;
  background-color: #e9ecef;
}

.list-group-item {
  position: relative;
  display: block;
  padding: 0.75rem 1.25rem;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125);
}

.list-group-item:first-child {
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.list-group-item.disabled, .list-group-item:disabled {
  color: #6c757d;
  pointer-events: none;
  background-color: #fff;
}

.list-group-item.active {
  z-index: 2;
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.list-group-horizontal {
  -ms-flex-direction: row;
  flex-direction: row;
}

.list-group-horizontal .list-group-item {
  margin-right: -1px;
  margin-bottom: 0;
}

.list-group-horizontal .list-group-item:first-child {
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
  border-top-right-radius: 0;
}

.list-group-horizontal .list-group-item:last-child {
  margin-right: 0;
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
  border-bottom-left-radius: 0;
}

@media (min-width: 576px) {
  .list-group-horizontal-sm {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .list-group-horizontal-sm .list-group-item {
    margin-right: -1px;
    margin-bottom: 0;
  }
  .list-group-horizontal-sm .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-sm .list-group-item:last-child {
    margin-right: 0;
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
}

@media (min-width: 768px) {
  .list-group-horizontal-md {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .list-group-horizontal-md .list-group-item {
    margin-right: -1px;
    margin-bottom: 0;
  }
  .list-group-horizontal-md .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-md .list-group-item:last-child {
    margin-right: 0;
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
}

@media (min-width: 992px) {
  .list-group-horizontal-lg {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .list-group-horizontal-lg .list-group-item {
    margin-right: -1px;
    margin-bottom: 0;
  }
  .list-group-horizontal-lg .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-lg .list-group-item:last-child {
    margin-right: 0;
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
}

@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .list-group-horizontal-xl .list-group-item {
    margin-right: -1px;
    margin-bottom: 0;
  }
  .list-group-horizontal-xl .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xl .list-group-item:last-child {
    margin-right: 0;
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0;
  }
}

.list-group-flush .list-group-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0;
}

.list-group-flush .list-group-item:last-child {
  margin-bottom: -1px;
}

.list-group-flush:first-child .list-group-item:first-child {
  border-top: 0;
}

.list-group-flush:last-child .list-group-item:last-child {
  margin-bottom: 0;
  border-bottom: 0;
}

.list-group-item-primary {
  color: #004085;
  background-color: #b8daff;
}

.list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
  color: #004085;
  background-color: #9fcdff;
}

.list-group-item-primary.list-group-item-action.active {
  color: #fff;
  background-color: #004085;
  border-color: #004085;
}

.list-group-item-secondary {
  color: #383d41;
  background-color: #d6d8db;
}

.list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
  color: #383d41;
  background-color: #c8cbcf;
}

.list-group-item-secondary.list-group-item-action.active {
  color: #fff;
  background-color: #383d41;
  border-color: #383d41;
}

.list-group-item-success {
  color: #155724;
  background-color: #c3e6cb;
}

.list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
  color: #155724;
  background-color: #b1dfbb;
}

.list-group-item-success.list-group-item-action.active {
  color: #fff;
  background-color: #155724;
  border-color: #155724;
}

.list-group-item-info {
  color: #0c5460;
  background-color: #bee5eb;
}

.list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
  color: #0c5460;
  background-color: #abdde5;
}

.list-group-item-info.list-group-item-action.active {
  color: #fff;
  background-color: #0c5460;
  border-color: #0c5460;
}

.list-group-item-warning {
  color: #856404;
  background-color: #ffeeba;
}

.list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
  color: #856404;
  background-color: #ffe8a1;
}

.list-group-item-warning.list-group-item-action.active {
  color: #fff;
  background-color: #856404;
  border-color: #856404;
}

.list-group-item-danger {
  color: #721c24;
  background-color: #f5c6cb;
}

.list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
  color: #721c24;
  background-color: #f1b0b7;
}

.list-group-item-danger.list-group-item-action.active {
  color: #fff;
  background-color: #721c24;
  border-color: #721c24;
}

.list-group-item-light {
  color: #818182;
  background-color: #fdfdfe;
}

.list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
  color: #818182;
  background-color: #ececf6;
}

.list-group-item-light.list-group-item-action.active {
  color: #fff;
  background-color: #818182;
  border-color: #818182;
}

.list-group-item-dark {
  color: #1b1e21;
  background-color: #c6c8ca;
}

.list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
  color: #1b1e21;
  background-color: #b9bbbe;
}

.list-group-item-dark.list-group-item-action.active {
  color: #fff;
  background-color: #1b1e21;
  border-color: #1b1e21;
}

.close {
  float: right;
  font-size: 1.5rem;
  font-weight: 700;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: .5;
}

.close:hover {
  color: #000;
  text-decoration: none;
}

.close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {
  opacity: .75;
}

button.close {
  padding: 0;
  background-color: transparent;
  border: 0;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
}

a.close.disabled {
  pointer-events: none;
}

.toast {
  max-width: 350px;
  overflow: hidden;
  font-size: 0.875rem;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.1);
  box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
  -webkit-backdrop-filter: blur(10px);
  backdrop-filter: blur(10px);
  opacity: 0;
  border-radius: 0.25rem;
}

.toast:not(:last-child) {
  margin-bottom: 0.75rem;
}

.toast.showing {
  opacity: 1;
}

.toast.show {
  display: block;
  opacity: 1;
}

.toast.hide {
  display: none;
}

.toast-header {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding: 0.25rem 0.75rem;
  color: #6c757d;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
}

.toast-body {
  padding: 0.75rem;
}

.modal-open {
  overflow: hidden;
}

.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}

.modal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050;
  display: none;
  width: 100%;
  height: 100%;
  overflow: hidden;
  outline: 0;
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none;
}

.modal.fade .modal-dialog {
  transition: -webkit-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
  transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
  -webkit-transform: translate(0, -50px);
  transform: translate(0, -50px);
}

@media (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
    transition: none;
  }
}

.modal.show .modal-dialog {
  -webkit-transform: none;
  transform: none;
}

.modal-dialog-scrollable {
  display: -ms-flexbox;
  display: flex;
  max-height: calc(100% - 1rem);
}

.modal-dialog-scrollable .modal-content {
  max-height: calc(100vh - 1rem);
  overflow: hidden;
}

.modal-dialog-scrollable .modal-header,
.modal-dialog-scrollable .modal-footer {
  -ms-flex-negative: 0;
  flex-shrink: 0;
}

.modal-dialog-scrollable .modal-body {
  overflow-y: auto;
}

.modal-dialog-centered {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  min-height: calc(100% - 1rem);
}

.modal-dialog-centered::before {
  display: block;
  height: calc(100vh - 1rem);
  content: "";
}

.modal-dialog-centered.modal-dialog-scrollable {
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
  height: 100%;
}

.modal-dialog-centered.modal-dialog-scrollable .modal-content {
  max-height: none;
}

.modal-dialog-centered.modal-dialog-scrollable::before {
  content: none;
}

.modal-content {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  outline: 0;
}

.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: #000;
}

.modal-backdrop.fade {
  opacity: 0;
}

.modal-backdrop.show {
  opacity: 0.5;
}

.modal-header {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: start;
  align-items: flex-start;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 1rem 1rem;
  border-bottom: 1px solid #dee2e6;
  border-top-left-radius: 0.3rem;
  border-top-right-radius: 0.3rem;
}

.modal-header .close {
  padding: 1rem 1rem;
  margin: -1rem -1rem -1rem auto;
}

.modal-title {
  margin-bottom: 0;
  line-height: 1.5;
}

.modal-body {
  position: relative;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1rem;
}

.modal-footer {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: end;
  justify-content: flex-end;
  padding: 1rem;
  border-top: 1px solid #dee2e6;
  border-bottom-right-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem;
}

.modal-footer > :not(:first-child) {
  margin-left: .25rem;
}

.modal-footer > :not(:last-child) {
  margin-right: .25rem;
}

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto;
  }
  .modal-dialog-scrollable {
    max-height: calc(100% - 3.5rem);
  }
  .modal-dialog-scrollable .modal-content {
    max-height: calc(100vh - 3.5rem);
  }
  .modal-dialog-centered {
    min-height: calc(100% - 3.5rem);
  }
  .modal-dialog-centered::before {
    height: calc(100vh - 3.5rem);
  }
  .modal-sm {
    max-width: 300px;
  }
}

@media (min-width: 992px) {
  .modal-lg,
  .modal-xl {
    max-width: 800px;
  }
}

@media (min-width: 1200px) {
  .modal-xl {
    max-width: 1140px;
  }
}

.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  opacity: 0;
}

.tooltip.show {
  opacity: 0.9;
}

.tooltip .arrow {
  position: absolute;
  display: block;
  width: 0.8rem;
  height: 0.4rem;
}

.tooltip .arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
  padding: 0.4rem 0;
}

.bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
  bottom: 0;
}

.bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
  top: 0;
  border-width: 0.4rem 0.4rem 0;
  border-top-color: #000;
}

.bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
  padding: 0 0.4rem;
}

.bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
  left: 0;
  width: 0.4rem;
  height: 0.8rem;
}

.bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
  right: 0;
  border-width: 0.4rem 0.4rem 0.4rem 0;
  border-right-color: #000;
}

.bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
  padding: 0.4rem 0;
}

.bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
  top: 0;
}

.bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  bottom: 0;
  border-width: 0 0.4rem 0.4rem;
  border-bottom-color: #000;
}

.bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
  padding: 0 0.4rem;
}

.bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
  right: 0;
  width: 0.4rem;
  height: 0.8rem;
}

.bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
  left: 0;
  border-width: 0.4rem 0 0.4rem 0.4rem;
  border-left-color: #000;
}

.tooltip-inner {
  max-width: 200px;
  padding: 0.25rem 0.5rem;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 0.25rem;
}

.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: block;
  max-width: 276px;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
}

.popover .arrow {
  position: absolute;
  display: block;
  width: 1rem;
  height: 0.5rem;
  margin: 0 0.3rem;
}

.popover .arrow::before, .popover .arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-popover-top, .bs-popover-auto[x-placement^="top"] {
  margin-bottom: 0.5rem;
}

.bs-popover-top > .arrow, .bs-popover-auto[x-placement^="top"] > .arrow {
  bottom: calc((0.5rem + 1px) * -1);
}

.bs-popover-top > .arrow::before, .bs-popover-auto[x-placement^="top"] > .arrow::before {
  bottom: 0;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-top > .arrow::after, .bs-popover-auto[x-placement^="top"] > .arrow::after {
  bottom: 1px;
  border-width: 0.5rem 0.5rem 0;
  border-top-color: #fff;
}

.bs-popover-right, .bs-popover-auto[x-placement^="right"] {
  margin-left: 0.5rem;
}

.bs-popover-right > .arrow, .bs-popover-auto[x-placement^="right"] > .arrow {
  left: calc((0.5rem + 1px) * -1);
  width: 0.5rem;
  height: 1rem;
  margin: 0.3rem 0;
}

.bs-popover-right > .arrow::before, .bs-popover-auto[x-placement^="right"] > .arrow::before {
  left: 0;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-right > .arrow::after, .bs-popover-auto[x-placement^="right"] > .arrow::after {
  left: 1px;
  border-width: 0.5rem 0.5rem 0.5rem 0;
  border-right-color: #fff;
}

.bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
  margin-top: 0.5rem;
}

.bs-popover-bottom > .arrow, .bs-popover-auto[x-placement^="bottom"] > .arrow {
  top: calc((0.5rem + 1px) * -1);
}

.bs-popover-bottom > .arrow::before, .bs-popover-auto[x-placement^="bottom"] > .arrow::before {
  top: 0;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-bottom > .arrow::after, .bs-popover-auto[x-placement^="bottom"] > .arrow::after {
  top: 1px;
  border-width: 0 0.5rem 0.5rem 0.5rem;
  border-bottom-color: #fff;
}

.bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: 1rem;
  margin-left: -0.5rem;
  content: "";
  border-bottom: 1px solid #f7f7f7;
}

.bs-popover-left, .bs-popover-auto[x-placement^="left"] {
  margin-right: 0.5rem;
}

.bs-popover-left > .arrow, .bs-popover-auto[x-placement^="left"] > .arrow {
  right: calc((0.5rem + 1px) * -1);
  width: 0.5rem;
  height: 1rem;
  margin: 0.3rem 0;
}

.bs-popover-left > .arrow::before, .bs-popover-auto[x-placement^="left"] > .arrow::before {
  right: 0;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: rgba(0, 0, 0, 0.25);
}

.bs-popover-left > .arrow::after, .bs-popover-auto[x-placement^="left"] > .arrow::after {
  right: 1px;
  border-width: 0.5rem 0 0.5rem 0.5rem;
  border-left-color: #fff;
}

.popover-header {
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px);
}

.popover-header:empty {
  display: none;
}

.popover-body {
  padding: 0.5rem 0.75rem;
  color: #212529;
}

.carousel {
  position: relative;
}

.carousel.pointer-event {
  -ms-touch-action: pan-y;
  touch-action: pan-y;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.carousel-inner::after {
  display: block;
  clear: both;
  content: "";
}

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  transition: -webkit-transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-item {
    transition: none;
  }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}

.carousel-item-next:not(.carousel-item-left),
.active.carousel-item-right {
  -webkit-transform: translateX(100%);
  transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-right),
.active.carousel-item-left {
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%);
}

.carousel-fade .carousel-item {
  opacity: 0;
  transition-property: opacity;
  -webkit-transform: none;
  transform: none;
}

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
  z-index: 1;
  opacity: 1;
}

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
  z-index: 0;
  opacity: 0;
  transition: 0s 0.6s opacity;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-fade .active.carousel-item-left,
  .carousel-fade .active.carousel-item-right {
    transition: none;
  }
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 15%;
  color: #fff;
  text-align: center;
  opacity: 0.5;
  transition: opacity 0.15s ease;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-control-prev,
  .carousel-control-next {
    transition: none;
  }
}

.carousel-control-prev:hover, .carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}

.carousel-control-prev {
  left: 0;
}

.carousel-control-next {
  right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: no-repeat 50% / 100% 100%;
}

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3e%3c/svg%3e");
}

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 15;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
  justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none;
}

.carousel-indicators li {
  box-sizing: content-box;
  -ms-flex: 0 1 auto;
  flex: 0 1 auto;
  width: 30px;
  height: 3px;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #fff;
  background-clip: padding-box;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  opacity: .5;
  transition: opacity 0.6s ease;
}

@media (prefers-reduced-motion: reduce) {
  .carousel-indicators li {
    transition: none;
  }
}

.carousel-indicators .active {
  opacity: 1;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
}

@-webkit-keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

@keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

.spinner-border {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: text-bottom;
  border: 0.25em solid currentColor;
  border-right-color: transparent;
  border-radius: 50%;
  -webkit-animation: spinner-border .75s linear infinite;
  animation: spinner-border .75s linear infinite;
}

.spinner-border-sm {
  width: 1rem;
  height: 1rem;
  border-width: 0.2em;
}

@-webkit-keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  50% {
    opacity: 1;
  }
}

@keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0);
  }
  50% {
    opacity: 1;
  }
}

.spinner-grow {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: text-bottom;
  background-color: currentColor;
  border-radius: 50%;
  opacity: 0;
  -webkit-animation: spinner-grow .75s linear infinite;
  animation: spinner-grow .75s linear infinite;
}

.spinner-grow-sm {
  width: 1rem;
  height: 1rem;
}

.align-baseline {
  vertical-align: baseline !important;
}

.align-top {
  vertical-align: top !important;
}

.align-middle {
  vertical-align: middle !important;
}

.align-bottom {
  vertical-align: bottom !important;
}

.align-text-bottom {
  vertical-align: text-bottom !important;
}

.align-text-top {
  vertical-align: text-top !important;
}

.bg-primary {
  background-color: #007bff !important;
}

a.bg-primary:hover, a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
  background-color: #0062cc !important;
}

.bg-secondary {
  background-color: #6c757d !important;
}

a.bg-secondary:hover, a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #545b62 !important;
}

.bg-success {
  background-color: #28a745 !important;
}

a.bg-success:hover, a.bg-success:focus,
button.bg-success:hover,
button.bg-success:focus {
  background-color: #1e7e34 !important;
}

.bg-info {
  background-color: #17a2b8 !important;
}

a.bg-info:hover, a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #117a8b !important;
}

.bg-warning {
  background-color: #ffc107 !important;
}

a.bg-warning:hover, a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #d39e00 !important;
}

.bg-danger {
  background-color: #dc3545 !important;
}

a.bg-danger:hover, a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #bd2130 !important;
}

.bg-light {
  background-color: #f8f9fa !important;
}

a.bg-light:hover, a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: #dae0e5 !important;
}

.bg-dark {
  background-color: #343a40 !important;
}

a.bg-dark:hover, a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
  background-color: #1d2124 !important;
}

.bg-white {
  background-color: #fff !important;
}

.bg-transparent {
  background-color: transparent !important;
}

.border {
  border: 1px solid #dee2e6 !important;
}

.border-top {
  border-top: 1px solid #dee2e6 !important;
}

.border-right {
  border-right: 1px solid #dee2e6 !important;
}

.border-bottom {
  border-bottom: 1px solid #dee2e6 !important;
}

.border-left {
  border-left: 1px solid #dee2e6 !important;
}

.border-0 {
  border: 0 !important;
}

.border-top-0 {
  border-top: 0 !important;
}

.border-right-0 {
  border-right: 0 !important;
}

.border-bottom-0 {
  border-bottom: 0 !important;
}

.border-left-0 {
  border-left: 0 !important;
}

.border-primary {
  border-color: #007bff !important;
}

.border-secondary {
  border-color: #6c757d !important;
}

.border-success {
  border-color: #28a745 !important;
}

.border-info {
  border-color: #17a2b8 !important;
}

.border-warning {
  border-color: #ffc107 !important;
}

.border-danger {
  border-color: #dc3545 !important;
}

.border-light {
  border-color: #f8f9fa !important;
}

.border-dark {
  border-color: #343a40 !important;
}

.border-white {
  border-color: #fff !important;
}

.rounded-sm {
  border-radius: 0.2rem !important;
}

.rounded {
  border-radius: 0.25rem !important;
}

.rounded-top {
  border-top-left-radius: 0.25rem !important;
  border-top-right-radius: 0.25rem !important;
}

.rounded-right {
  border-top-right-radius: 0.25rem !important;
  border-bottom-right-radius: 0.25rem !important;
}

.rounded-bottom {
  border-bottom-right-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}

.rounded-left {
  border-top-left-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important;
}

.rounded-lg {
  border-radius: 0.3rem !important;
}

.rounded-circle {
  border-radius: 50% !important;
}

.rounded-pill {
  border-radius: 50rem !important;
}

.rounded-0 {
  border-radius: 0 !important;
}

.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

.d-none {
  display: none !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.d-table {
  display: table !important;
}

.d-table-row {
  display: table-row !important;
}

.d-table-cell {
  display: table-cell !important;
}

.d-flex {
  display: -ms-flexbox !important;
  display: flex !important;
}

.d-inline-flex {
  display: -ms-inline-flexbox !important;
  display: inline-flex !important;
}

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media (min-width: 768px) {
  .d-md-none {
    display: none !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-md-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

@media print {
  .d-print-none {
    display: none !important;
  }
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-print-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
}

.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden;
}

.embed-responsive::before {
  display: block;
  content: "";
}

.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}

.embed-responsive-21by9::before {
  padding-top: 42.857143%;
}

.embed-responsive-16by9::before {
  padding-top: 56.25%;
}

.embed-responsive-4by3::before {
  padding-top: 75%;
}

.embed-responsive-1by1::before {
  padding-top: 100%;
}

.flex-row {
  -ms-flex-direction: row !important;
  flex-direction: row !important;
}

.flex-column {
  -ms-flex-direction: column !important;
  flex-direction: column !important;
}

.flex-row-reverse {
  -ms-flex-direction: row-reverse !important;
  flex-direction: row-reverse !important;
}

.flex-column-reverse {
  -ms-flex-direction: column-reverse !important;
  flex-direction: column-reverse !important;
}

.flex-wrap {
  -ms-flex-wrap: wrap !important;
  flex-wrap: wrap !important;
}

.flex-nowrap {
  -ms-flex-wrap: nowrap !important;
  flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  -ms-flex-wrap: wrap-reverse !important;
  flex-wrap: wrap-reverse !important;
}

.flex-fill {
  -ms-flex: 1 1 auto !important;
  flex: 1 1 auto !important;
}

.flex-grow-0 {
  -ms-flex-positive: 0 !important;
  flex-grow: 0 !important;
}

.flex-grow-1 {
  -ms-flex-positive: 1 !important;
  flex-grow: 1 !important;
}

.flex-shrink-0 {
  -ms-flex-negative: 0 !important;
  flex-shrink: 0 !important;
}

.flex-shrink-1 {
  -ms-flex-negative: 1 !important;
  flex-shrink: 1 !important;
}

.justify-content-start {
  -ms-flex-pack: start !important;
  justify-content: flex-start !important;
}

.justify-content-end {
  -ms-flex-pack: end !important;
  justify-content: flex-end !important;
}

.justify-content-center {
  -ms-flex-pack: center !important;
  justify-content: center !important;
}

.justify-content-between {
  -ms-flex-pack: justify !important;
  justify-content: space-between !important;
}

.justify-content-around {
  -ms-flex-pack: distribute !important;
  justify-content: space-around !important;
}

.align-items-start {
  -ms-flex-align: start !important;
  align-items: flex-start !important;
}

.align-items-end {
  -ms-flex-align: end !important;
  align-items: flex-end !important;
}

.align-items-center {
  -ms-flex-align: center !important;
  align-items: center !important;
}

.align-items-baseline {
  -ms-flex-align: baseline !important;
  align-items: baseline !important;
}

.align-items-stretch {
  -ms-flex-align: stretch !important;
  align-items: stretch !important;
}

.align-content-start {
  -ms-flex-line-pack: start !important;
  align-content: flex-start !important;
}

.align-content-end {
  -ms-flex-line-pack: end !important;
  align-content: flex-end !important;
}

.align-content-center {
  -ms-flex-line-pack: center !important;
  align-content: center !important;
}

.align-content-between {
  -ms-flex-line-pack: justify !important;
  align-content: space-between !important;
}

.align-content-around {
  -ms-flex-line-pack: distribute !important;
  align-content: space-around !important;
}

.align-content-stretch {
  -ms-flex-line-pack: stretch !important;
  align-content: stretch !important;
}

.align-self-auto {
  -ms-flex-item-align: auto !important;
  align-self: auto !important;
}

.align-self-start {
  -ms-flex-item-align: start !important;
  align-self: flex-start !important;
}

.align-self-end {
  -ms-flex-item-align: end !important;
  align-self: flex-end !important;
}

.align-self-center {
  -ms-flex-item-align: center !important;
  align-self: center !important;
}

.align-self-baseline {
  -ms-flex-item-align: baseline !important;
  align-self: baseline !important;
}

.align-self-stretch {
  -ms-flex-item-align: stretch !important;
  align-self: stretch !important;
}

@media (min-width: 576px) {
  .flex-sm-row {
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-sm-column {
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-sm-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .flex-sm-fill {
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
  }
  .flex-sm-grow-0 {
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
  }
  .flex-sm-grow-1 {
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
  }
  .flex-sm-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
  }
  .flex-sm-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
  }
  .justify-content-sm-start {
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-sm-between {
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-sm-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-sm-start {
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-sm-end {
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-sm-center {
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-sm-baseline {
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-sm-stretch {
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-sm-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-sm-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-sm-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-sm-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-sm-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-sm-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-sm-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-sm-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-sm-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-sm-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-sm-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-sm-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

@media (min-width: 768px) {
  .flex-md-row {
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-md-column {
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-md-row-reverse {
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-md-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .flex-md-fill {
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
  }
  .flex-md-grow-0 {
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
  }
  .flex-md-grow-1 {
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
  }
  .flex-md-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
  }
  .flex-md-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
  }
  .justify-content-md-start {
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-md-end {
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-md-center {
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-md-between {
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-md-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-md-start {
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-md-end {
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-md-center {
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-md-baseline {
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-md-stretch {
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-md-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-md-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-md-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-md-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-md-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-md-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-md-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-md-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-md-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-md-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-md-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-md-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

@media (min-width: 992px) {
  .flex-lg-row {
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-lg-column {
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-lg-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .flex-lg-fill {
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
  }
  .flex-lg-grow-0 {
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
  }
  .flex-lg-grow-1 {
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
  }
  .flex-lg-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
  }
  .flex-lg-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
  }
  .justify-content-lg-start {
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-lg-between {
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-lg-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-lg-start {
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-lg-end {
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-lg-center {
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-lg-baseline {
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-lg-stretch {
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-lg-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-lg-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-lg-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-lg-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-lg-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-lg-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-lg-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-lg-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-lg-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-lg-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-lg-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-lg-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

@media (min-width: 1200px) {
  .flex-xl-row {
    -ms-flex-direction: row !important;
    flex-direction: row !important;
  }
  .flex-xl-column {
    -ms-flex-direction: column !important;
    flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important;
  }
  .flex-xl-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important;
  }
  .flex-xl-fill {
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important;
  }
  .flex-xl-grow-0 {
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important;
  }
  .flex-xl-grow-1 {
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important;
  }
  .flex-xl-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important;
  }
  .flex-xl-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important;
  }
  .justify-content-xl-start {
    -ms-flex-pack: start !important;
    justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    -ms-flex-pack: end !important;
    justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    -ms-flex-pack: center !important;
    justify-content: center !important;
  }
  .justify-content-xl-between {
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
  }
  .justify-content-xl-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important;
  }
  .align-items-xl-start {
    -ms-flex-align: start !important;
    align-items: flex-start !important;
  }
  .align-items-xl-end {
    -ms-flex-align: end !important;
    align-items: flex-end !important;
  }
  .align-items-xl-center {
    -ms-flex-align: center !important;
    align-items: center !important;
  }
  .align-items-xl-baseline {
    -ms-flex-align: baseline !important;
    align-items: baseline !important;
  }
  .align-items-xl-stretch {
    -ms-flex-align: stretch !important;
    align-items: stretch !important;
  }
  .align-content-xl-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important;
  }
  .align-content-xl-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important;
  }
  .align-content-xl-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important;
  }
  .align-content-xl-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important;
  }
  .align-content-xl-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important;
  }
  .align-content-xl-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important;
  }
  .align-self-xl-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important;
  }
  .align-self-xl-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important;
  }
  .align-self-xl-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important;
  }
  .align-self-xl-center {
    -ms-flex-item-align: center !important;
    align-self: center !important;
  }
  .align-self-xl-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important;
  }
  .align-self-xl-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important;
  }
}

.float-left {
  float: left !important;
}

.float-right {
  float: right !important;
}

.float-none {
  float: none !important;
}

@media (min-width: 576px) {
  .float-sm-left {
    float: left !important;
  }
  .float-sm-right {
    float: right !important;
  }
  .float-sm-none {
    float: none !important;
  }
}

@media (min-width: 768px) {
  .float-md-left {
    float: left !important;
  }
  .float-md-right {
    float: right !important;
  }
  .float-md-none {
    float: none !important;
  }
}

@media (min-width: 992px) {
  .float-lg-left {
    float: left !important;
  }
  .float-lg-right {
    float: right !important;
  }
  .float-lg-none {
    float: none !important;
  }
}

@media (min-width: 1200px) {
  .float-xl-left {
    float: left !important;
  }
  .float-xl-right {
    float: right !important;
  }
  .float-xl-none {
    float: none !important;
  }
}

.overflow-auto {
  overflow: auto !important;
}

.overflow-hidden {
  overflow: hidden !important;
}

.position-static {
  position: static !important;
}

.position-relative {
  position: relative !important;
}

.position-absolute {
  position: absolute !important;
}

.position-fixed {
  position: fixed !important;
}

.position-sticky {
  position: -webkit-sticky !important;
  position: sticky !important;
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}

@supports ((position: -webkit-sticky) or (position: sticky)) {
  .sticky-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
  }
}

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0;
}

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal;
}

.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
}

.shadow {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.shadow-lg {
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}

.shadow-none {
  box-shadow: none !important;
}

.w-25 {
  width: 25% !important;
}

.w-50 {
  width: 50% !important;
}

.w-75 {
  width: 75% !important;
}

.w-100 {
  width: 100% !important;
}

.w-auto {
  width: auto !important;
}

.h-25 {
  height: 25% !important;
}

.h-50 {
  height: 50% !important;
}

.h-75 {
  height: 75% !important;
}

.h-100 {
  height: 100% !important;
}

.h-auto {
  height: auto !important;
}

.mw-100 {
  max-width: 100% !important;
}

.mh-100 {
  max-height: 100% !important;
}

.min-vw-100 {
  min-width: 100vw !important;
}

.min-vh-100 {
  min-height: 100vh !important;
}

.vw-100 {
  width: 100vw !important;
}

.vh-100 {
  height: 100vh !important;
}

.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  pointer-events: auto;
  content: "";
  background-color: rgba(0, 0, 0, 0);
}

.m-0 {
  margin: 0 !important;
}

.mt-0,
.my-0 {
  margin-top: 0 !important;
}

.mr-0,
.mx-0 {
  margin-right: 0 !important;
}

.mb-0,
.my-0 {
  margin-bottom: 0 !important;
}

.ml-0,
.mx-0 {
  margin-left: 0 !important;
}

.m-1 {
  margin: 0.25rem !important;
}

.mt-1,
.my-1 {
  margin-top: 0.25rem !important;
}

.mr-1,
.mx-1 {
  margin-right: 0.25rem !important;
}

.mb-1,
.my-1 {
  margin-bottom: 0.25rem !important;
}

.ml-1,
.mx-1 {
  margin-left: 0.25rem !important;
}

.m-2 {
  margin: 0.5rem !important;
}

.mt-2,
.my-2 {
  margin-top: 0.5rem !important;
}

.mr-2,
.mx-2 {
  margin-right: 0.5rem !important;
}

.mb-2,
.my-2 {
  margin-bottom: 0.5rem !important;
}

.ml-2,
.mx-2 {
  margin-left: 0.5rem !important;
}

.m-3 {
  margin: 1rem !important;
}

.mt-3,
.my-3 {
  margin-top: 1rem !important;
}

.mr-3,
.mx-3 {
  margin-right: 1rem !important;
}

.mb-3,
.my-3 {
  margin-bottom: 1rem !important;
}

.ml-3,
.mx-3 {
  margin-left: 1rem !important;
}

.m-4 {
  margin: 1.5rem !important;
}

.mt-4,
.my-4 {
  margin-top: 1.5rem !important;
}

.mr-4,
.mx-4 {
  margin-right: 1.5rem !important;
}

.mb-4,
.my-4 {
  margin-bottom: 1.5rem !important;
}

.ml-4,
.mx-4 {
  margin-left: 1.5rem !important;
}

.m-5 {
  margin: 3rem !important;
}

.mt-5,
.my-5 {
  margin-top: 3rem !important;
}

.mr-5,
.mx-5 {
  margin-right: 3rem !important;
}

.mb-5,
.my-5 {
  margin-bottom: 3rem !important;
}

.ml-5,
.mx-5 {
  margin-left: 3rem !important;
}

.p-0 {
  padding: 0 !important;
}

.pt-0,
.py-0 {
  padding-top: 0 !important;
}

.pr-0,
.px-0 {
  padding-right: 0 !important;
}

.pb-0,
.py-0 {
  padding-bottom: 0 !important;
}

.pl-0,
.px-0 {
  padding-left: 0 !important;
}

.p-1 {
  padding: 0.25rem !important;
}

.pt-1,
.py-1 {
  padding-top: 0.25rem !important;
}

.pr-1,
.px-1 {
  padding-right: 0.25rem !important;
}

.pb-1,
.py-1 {
  padding-bottom: 0.25rem !important;
}

.pl-1,
.px-1 {
  padding-left: 0.25rem !important;
}

.p-2 {
  padding: 0.5rem !important;
}

.pt-2,
.py-2 {
  padding-top: 0.5rem !important;
}

.pr-2,
.px-2 {
  padding-right: 0.5rem !important;
}

.pb-2,
.py-2 {
  padding-bottom: 0.5rem !important;
}

.pl-2,
.px-2 {
  padding-left: 0.5rem !important;
}

.p-3 {
  padding: 1rem !important;
}

.pt-3,
.py-3 {
  padding-top: 1rem !important;
}

.pr-3,
.px-3 {
  padding-right: 1rem !important;
}

.pb-3,
.py-3 {
  padding-bottom: 1rem !important;
}

.pl-3,
.px-3 {
  padding-left: 1rem !important;
}

.p-4 {
  padding: 1.5rem !important;
}

.pt-4,
.py-4 {
  padding-top: 1.5rem !important;
}

.pr-4,
.px-4 {
  padding-right: 1.5rem !important;
}

.pb-4,
.py-4 {
  padding-bottom: 1.5rem !important;
}

.pl-4,
.px-4 {
  padding-left: 1.5rem !important;
}

.p-5 {
  padding: 3rem !important;
}

.pt-5,
.py-5 {
  padding-top: 3rem !important;
}

.pr-5,
.px-5 {
  padding-right: 3rem !important;
}

.pb-5,
.py-5 {
  padding-bottom: 3rem !important;
}

.pl-5,
.px-5 {
  padding-left: 3rem !important;
}

.m-n1 {
  margin: -0.25rem !important;
}

.mt-n1,
.my-n1 {
  margin-top: -0.25rem !important;
}

.mr-n1,
.mx-n1 {
  margin-right: -0.25rem !important;
}

.mb-n1,
.my-n1 {
  margin-bottom: -0.25rem !important;
}

.ml-n1,
.mx-n1 {
  margin-left: -0.25rem !important;
}

.m-n2 {
  margin: -0.5rem !important;
}

.mt-n2,
.my-n2 {
  margin-top: -0.5rem !important;
}

.mr-n2,
.mx-n2 {
  margin-right: -0.5rem !important;
}

.mb-n2,
.my-n2 {
  margin-bottom: -0.5rem !important;
}

.ml-n2,
.mx-n2 {
  margin-left: -0.5rem !important;
}

.m-n3 {
  margin: -1rem !important;
}

.mt-n3,
.my-n3 {
  margin-top: -1rem !important;
}

.mr-n3,
.mx-n3 {
  margin-right: -1rem !important;
}

.mb-n3,
.my-n3 {
  margin-bottom: -1rem !important;
}

.ml-n3,
.mx-n3 {
  margin-left: -1rem !important;
}

.m-n4 {
  margin: -1.5rem !important;
}

.mt-n4,
.my-n4 {
  margin-top: -1.5rem !important;
}

.mr-n4,
.mx-n4 {
  margin-right: -1.5rem !important;
}

.mb-n4,
.my-n4 {
  margin-bottom: -1.5rem !important;
}

.ml-n4,
.mx-n4 {
  margin-left: -1.5rem !important;
}

.m-n5 {
  margin: -3rem !important;
}

.mt-n5,
.my-n5 {
  margin-top: -3rem !important;
}

.mr-n5,
.mx-n5 {
  margin-right: -3rem !important;
}

.mb-n5,
.my-n5 {
  margin-bottom: -3rem !important;
}

.ml-n5,
.mx-n5 {
  margin-left: -3rem !important;
}

.m-auto {
  margin: auto !important;
}

.mt-auto,
.my-auto {
  margin-top: auto !important;
}

.mr-auto,
.mx-auto {
  margin-right: auto !important;
}

.mb-auto,
.my-auto {
  margin-bottom: auto !important;
}

.ml-auto,
.mx-auto {
  margin-left: auto !important;
}

@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important;
  }
  .mt-sm-0,
  .my-sm-0 {
    margin-top: 0 !important;
  }
  .mr-sm-0,
  .mx-sm-0 {
    margin-right: 0 !important;
  }
  .mb-sm-0,
  .my-sm-0 {
    margin-bottom: 0 !important;
  }
  .ml-sm-0,
  .mx-sm-0 {
    margin-left: 0 !important;
  }
  .m-sm-1 {
    margin: 0.25rem !important;
  }
  .mt-sm-1,
  .my-sm-1 {
    margin-top: 0.25rem !important;
  }
  .mr-sm-1,
  .mx-sm-1 {
    margin-right: 0.25rem !important;
  }
  .mb-sm-1,
  .my-sm-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-sm-1,
  .mx-sm-1 {
    margin-left: 0.25rem !important;
  }
  .m-sm-2 {
    margin: 0.5rem !important;
  }
  .mt-sm-2,
  .my-sm-2 {
    margin-top: 0.5rem !important;
  }
  .mr-sm-2,
  .mx-sm-2 {
    margin-right: 0.5rem !important;
  }
  .mb-sm-2,
  .my-sm-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-sm-2,
  .mx-sm-2 {
    margin-left: 0.5rem !important;
  }
  .m-sm-3 {
    margin: 1rem !important;
  }
  .mt-sm-3,
  .my-sm-3 {
    margin-top: 1rem !important;
  }
  .mr-sm-3,
  .mx-sm-3 {
    margin-right: 1rem !important;
  }
  .mb-sm-3,
  .my-sm-3 {
    margin-bottom: 1rem !important;
  }
  .ml-sm-3,
  .mx-sm-3 {
    margin-left: 1rem !important;
  }
  .m-sm-4 {
    margin: 1.5rem !important;
  }
  .mt-sm-4,
  .my-sm-4 {
    margin-top: 1.5rem !important;
  }
  .mr-sm-4,
  .mx-sm-4 {
    margin-right: 1.5rem !important;
  }
  .mb-sm-4,
  .my-sm-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-sm-4,
  .mx-sm-4 {
    margin-left: 1.5rem !important;
  }
  .m-sm-5 {
    margin: 3rem !important;
  }
  .mt-sm-5,
  .my-sm-5 {
    margin-top: 3rem !important;
  }
  .mr-sm-5,
  .mx-sm-5 {
    margin-right: 3rem !important;
  }
  .mb-sm-5,
  .my-sm-5 {
    margin-bottom: 3rem !important;
  }
  .ml-sm-5,
  .mx-sm-5 {
    margin-left: 3rem !important;
  }
  .p-sm-0 {
    padding: 0 !important;
  }
  .pt-sm-0,
  .py-sm-0 {
    padding-top: 0 !important;
  }
  .pr-sm-0,
  .px-sm-0 {
    padding-right: 0 !important;
  }
  .pb-sm-0,
  .py-sm-0 {
    padding-bottom: 0 !important;
  }
  .pl-sm-0,
  .px-sm-0 {
    padding-left: 0 !important;
  }
  .p-sm-1 {
    padding: 0.25rem !important;
  }
  .pt-sm-1,
  .py-sm-1 {
    padding-top: 0.25rem !important;
  }
  .pr-sm-1,
  .px-sm-1 {
    padding-right: 0.25rem !important;
  }
  .pb-sm-1,
  .py-sm-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-sm-1,
  .px-sm-1 {
    padding-left: 0.25rem !important;
  }
  .p-sm-2 {
    padding: 0.5rem !important;
  }
  .pt-sm-2,
  .py-sm-2 {
    padding-top: 0.5rem !important;
  }
  .pr-sm-2,
  .px-sm-2 {
    padding-right: 0.5rem !important;
  }
  .pb-sm-2,
  .py-sm-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-sm-2,
  .px-sm-2 {
    padding-left: 0.5rem !important;
  }
  .p-sm-3 {
    padding: 1rem !important;
  }
  .pt-sm-3,
  .py-sm-3 {
    padding-top: 1rem !important;
  }
  .pr-sm-3,
  .px-sm-3 {
    padding-right: 1rem !important;
  }
  .pb-sm-3,
  .py-sm-3 {
    padding-bottom: 1rem !important;
  }
  .pl-sm-3,
  .px-sm-3 {
    padding-left: 1rem !important;
  }
  .p-sm-4 {
    padding: 1.5rem !important;
  }
  .pt-sm-4,
  .py-sm-4 {
    padding-top: 1.5rem !important;
  }
  .pr-sm-4,
  .px-sm-4 {
    padding-right: 1.5rem !important;
  }
  .pb-sm-4,
  .py-sm-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-sm-4,
  .px-sm-4 {
    padding-left: 1.5rem !important;
  }
  .p-sm-5 {
    padding: 3rem !important;
  }
  .pt-sm-5,
  .py-sm-5 {
    padding-top: 3rem !important;
  }
  .pr-sm-5,
  .px-sm-5 {
    padding-right: 3rem !important;
  }
  .pb-sm-5,
  .py-sm-5 {
    padding-bottom: 3rem !important;
  }
  .pl-sm-5,
  .px-sm-5 {
    padding-left: 3rem !important;
  }
  .m-sm-n1 {
    margin: -0.25rem !important;
  }
  .mt-sm-n1,
  .my-sm-n1 {
    margin-top: -0.25rem !important;
  }
  .mr-sm-n1,
  .mx-sm-n1 {
    margin-right: -0.25rem !important;
  }
  .mb-sm-n1,
  .my-sm-n1 {
    margin-bottom: -0.25rem !important;
  }
  .ml-sm-n1,
  .mx-sm-n1 {
    margin-left: -0.25rem !important;
  }
  .m-sm-n2 {
    margin: -0.5rem !important;
  }
  .mt-sm-n2,
  .my-sm-n2 {
    margin-top: -0.5rem !important;
  }
  .mr-sm-n2,
  .mx-sm-n2 {
    margin-right: -0.5rem !important;
  }
  .mb-sm-n2,
  .my-sm-n2 {
    margin-bottom: -0.5rem !important;
  }
  .ml-sm-n2,
  .mx-sm-n2 {
    margin-left: -0.5rem !important;
  }
  .m-sm-n3 {
    margin: -1rem !important;
  }
  .mt-sm-n3,
  .my-sm-n3 {
    margin-top: -1rem !important;
  }
  .mr-sm-n3,
  .mx-sm-n3 {
    margin-right: -1rem !important;
  }
  .mb-sm-n3,
  .my-sm-n3 {
    margin-bottom: -1rem !important;
  }
  .ml-sm-n3,
  .mx-sm-n3 {
    margin-left: -1rem !important;
  }
  .m-sm-n4 {
    margin: -1.5rem !important;
  }
  .mt-sm-n4,
  .my-sm-n4 {
    margin-top: -1.5rem !important;
  }
  .mr-sm-n4,
  .mx-sm-n4 {
    margin-right: -1.5rem !important;
  }
  .mb-sm-n4,
  .my-sm-n4 {
    margin-bottom: -1.5rem !important;
  }
  .ml-sm-n4,
  .mx-sm-n4 {
    margin-left: -1.5rem !important;
  }
  .m-sm-n5 {
    margin: -3rem !important;
  }
  .mt-sm-n5,
  .my-sm-n5 {
    margin-top: -3rem !important;
  }
  .mr-sm-n5,
  .mx-sm-n5 {
    margin-right: -3rem !important;
  }
  .mb-sm-n5,
  .my-sm-n5 {
    margin-bottom: -3rem !important;
  }
  .ml-sm-n5,
  .mx-sm-n5 {
    margin-left: -3rem !important;
  }
  .m-sm-auto {
    margin: auto !important;
  }
  .mt-sm-auto,
  .my-sm-auto {
    margin-top: auto !important;
  }
  .mr-sm-auto,
  .mx-sm-auto {
    margin-right: auto !important;
  }
  .mb-sm-auto,
  .my-sm-auto {
    margin-bottom: auto !important;
  }
  .ml-sm-auto,
  .mx-sm-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important;
  }
  .mt-md-0,
  .my-md-0 {
    margin-top: 0 !important;
  }
  .mr-md-0,
  .mx-md-0 {
    margin-right: 0 !important;
  }
  .mb-md-0,
  .my-md-0 {
    margin-bottom: 0 !important;
  }
  .ml-md-0,
  .mx-md-0 {
    margin-left: 0 !important;
  }
  .m-md-1 {
    margin: 0.25rem !important;
  }
  .mt-md-1,
  .my-md-1 {
    margin-top: 0.25rem !important;
  }
  .mr-md-1,
  .mx-md-1 {
    margin-right: 0.25rem !important;
  }
  .mb-md-1,
  .my-md-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-md-1,
  .mx-md-1 {
    margin-left: 0.25rem !important;
  }
  .m-md-2 {
    margin: 0.5rem !important;
  }
  .mt-md-2,
  .my-md-2 {
    margin-top: 0.5rem !important;
  }
  .mr-md-2,
  .mx-md-2 {
    margin-right: 0.5rem !important;
  }
  .mb-md-2,
  .my-md-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-md-2,
  .mx-md-2 {
    margin-left: 0.5rem !important;
  }
  .m-md-3 {
    margin: 1rem !important;
  }
  .mt-md-3,
  .my-md-3 {
    margin-top: 1rem !important;
  }
  .mr-md-3,
  .mx-md-3 {
    margin-right: 1rem !important;
  }
  .mb-md-3,
  .my-md-3 {
    margin-bottom: 1rem !important;
  }
  .ml-md-3,
  .mx-md-3 {
    margin-left: 1rem !important;
  }
  .m-md-4 {
    margin: 1.5rem !important;
  }
  .mt-md-4,
  .my-md-4 {
    margin-top: 1.5rem !important;
  }
  .mr-md-4,
  .mx-md-4 {
    margin-right: 1.5rem !important;
  }
  .mb-md-4,
  .my-md-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-md-4,
  .mx-md-4 {
    margin-left: 1.5rem !important;
  }
  .m-md-5 {
    margin: 3rem !important;
  }
  .mt-md-5,
  .my-md-5 {
    margin-top: 3rem !important;
  }
  .mr-md-5,
  .mx-md-5 {
    margin-right: 3rem !important;
  }
  .mb-md-5,
  .my-md-5 {
    margin-bottom: 3rem !important;
  }
  .ml-md-5,
  .mx-md-5 {
    margin-left: 3rem !important;
  }
  .p-md-0 {
    padding: 0 !important;
  }
  .pt-md-0,
  .py-md-0 {
    padding-top: 0 !important;
  }
  .pr-md-0,
  .px-md-0 {
    padding-right: 0 !important;
  }
  .pb-md-0,
  .py-md-0 {
    padding-bottom: 0 !important;
  }
  .pl-md-0,
  .px-md-0 {
    padding-left: 0 !important;
  }
  .p-md-1 {
    padding: 0.25rem !important;
  }
  .pt-md-1,
  .py-md-1 {
    padding-top: 0.25rem !important;
  }
  .pr-md-1,
  .px-md-1 {
    padding-right: 0.25rem !important;
  }
  .pb-md-1,
  .py-md-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-md-1,
  .px-md-1 {
    padding-left: 0.25rem !important;
  }
  .p-md-2 {
    padding: 0.5rem !important;
  }
  .pt-md-2,
  .py-md-2 {
    padding-top: 0.5rem !important;
  }
  .pr-md-2,
  .px-md-2 {
    padding-right: 0.5rem !important;
  }
  .pb-md-2,
  .py-md-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-md-2,
  .px-md-2 {
    padding-left: 0.5rem !important;
  }
  .p-md-3 {
    padding: 1rem !important;
  }
  .pt-md-3,
  .py-md-3 {
    padding-top: 1rem !important;
  }
  .pr-md-3,
  .px-md-3 {
    padding-right: 1rem !important;
  }
  .pb-md-3,
  .py-md-3 {
    padding-bottom: 1rem !important;
  }
  .pl-md-3,
  .px-md-3 {
    padding-left: 1rem !important;
  }
  .p-md-4 {
    padding: 1.5rem !important;
  }
  .pt-md-4,
  .py-md-4 {
    padding-top: 1.5rem !important;
  }
  .pr-md-4,
  .px-md-4 {
    padding-right: 1.5rem !important;
  }
  .pb-md-4,
  .py-md-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-md-4,
  .px-md-4 {
    padding-left: 1.5rem !important;
  }
  .p-md-5 {
    padding: 3rem !important;
  }
  .pt-md-5,
  .py-md-5 {
    padding-top: 3rem !important;
  }
  .pr-md-5,
  .px-md-5 {
    padding-right: 3rem !important;
  }
  .pb-md-5,
  .py-md-5 {
    padding-bottom: 3rem !important;
  }
  .pl-md-5,
  .px-md-5 {
    padding-left: 3rem !important;
  }
  .m-md-n1 {
    margin: -0.25rem !important;
  }
  .mt-md-n1,
  .my-md-n1 {
    margin-top: -0.25rem !important;
  }
  .mr-md-n1,
  .mx-md-n1 {
    margin-right: -0.25rem !important;
  }
  .mb-md-n1,
  .my-md-n1 {
    margin-bottom: -0.25rem !important;
  }
  .ml-md-n1,
  .mx-md-n1 {
    margin-left: -0.25rem !important;
  }
  .m-md-n2 {
    margin: -0.5rem !important;
  }
  .mt-md-n2,
  .my-md-n2 {
    margin-top: -0.5rem !important;
  }
  .mr-md-n2,
  .mx-md-n2 {
    margin-right: -0.5rem !important;
  }
  .mb-md-n2,
  .my-md-n2 {
    margin-bottom: -0.5rem !important;
  }
  .ml-md-n2,
  .mx-md-n2 {
    margin-left: -0.5rem !important;
  }
  .m-md-n3 {
    margin: -1rem !important;
  }
  .mt-md-n3,
  .my-md-n3 {
    margin-top: -1rem !important;
  }
  .mr-md-n3,
  .mx-md-n3 {
    margin-right: -1rem !important;
  }
  .mb-md-n3,
  .my-md-n3 {
    margin-bottom: -1rem !important;
  }
  .ml-md-n3,
  .mx-md-n3 {
    margin-left: -1rem !important;
  }
  .m-md-n4 {
    margin: -1.5rem !important;
  }
  .mt-md-n4,
  .my-md-n4 {
    margin-top: -1.5rem !important;
  }
  .mr-md-n4,
  .mx-md-n4 {
    margin-right: -1.5rem !important;
  }
  .mb-md-n4,
  .my-md-n4 {
    margin-bottom: -1.5rem !important;
  }
  .ml-md-n4,
  .mx-md-n4 {
    margin-left: -1.5rem !important;
  }
  .m-md-n5 {
    margin: -3rem !important;
  }
  .mt-md-n5,
  .my-md-n5 {
    margin-top: -3rem !important;
  }
  .mr-md-n5,
  .mx-md-n5 {
    margin-right: -3rem !important;
  }
  .mb-md-n5,
  .my-md-n5 {
    margin-bottom: -3rem !important;
  }
  .ml-md-n5,
  .mx-md-n5 {
    margin-left: -3rem !important;
  }
  .m-md-auto {
    margin: auto !important;
  }
  .mt-md-auto,
  .my-md-auto {
    margin-top: auto !important;
  }
  .mr-md-auto,
  .mx-md-auto {
    margin-right: auto !important;
  }
  .mb-md-auto,
  .my-md-auto {
    margin-bottom: auto !important;
  }
  .ml-md-auto,
  .mx-md-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important;
  }
  .mt-lg-0,
  .my-lg-0 {
    margin-top: 0 !important;
  }
  .mr-lg-0,
  .mx-lg-0 {
    margin-right: 0 !important;
  }
  .mb-lg-0,
  .my-lg-0 {
    margin-bottom: 0 !important;
  }
  .ml-lg-0,
  .mx-lg-0 {
    margin-left: 0 !important;
  }
  .m-lg-1 {
    margin: 0.25rem !important;
  }
  .mt-lg-1,
  .my-lg-1 {
    margin-top: 0.25rem !important;
  }
  .mr-lg-1,
  .mx-lg-1 {
    margin-right: 0.25rem !important;
  }
  .mb-lg-1,
  .my-lg-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-lg-1,
  .mx-lg-1 {
    margin-left: 0.25rem !important;
  }
  .m-lg-2 {
    margin: 0.5rem !important;
  }
  .mt-lg-2,
  .my-lg-2 {
    margin-top: 0.5rem !important;
  }
  .mr-lg-2,
  .mx-lg-2 {
    margin-right: 0.5rem !important;
  }
  .mb-lg-2,
  .my-lg-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-lg-2,
  .mx-lg-2 {
    margin-left: 0.5rem !important;
  }
  .m-lg-3 {
    margin: 1rem !important;
  }
  .mt-lg-3,
  .my-lg-3 {
    margin-top: 1rem !important;
  }
  .mr-lg-3,
  .mx-lg-3 {
    margin-right: 1rem !important;
  }
  .mb-lg-3,
  .my-lg-3 {
    margin-bottom: 1rem !important;
  }
  .ml-lg-3,
  .mx-lg-3 {
    margin-left: 1rem !important;
  }
  .m-lg-4 {
    margin: 1.5rem !important;
  }
  .mt-lg-4,
  .my-lg-4 {
    margin-top: 1.5rem !important;
  }
  .mr-lg-4,
  .mx-lg-4 {
    margin-right: 1.5rem !important;
  }
  .mb-lg-4,
  .my-lg-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-lg-4,
  .mx-lg-4 {
    margin-left: 1.5rem !important;
  }
  .m-lg-5 {
    margin: 3rem !important;
  }
  .mt-lg-5,
  .my-lg-5 {
    margin-top: 3rem !important;
  }
  .mr-lg-5,
  .mx-lg-5 {
    margin-right: 3rem !important;
  }
  .mb-lg-5,
  .my-lg-5 {
    margin-bottom: 3rem !important;
  }
  .ml-lg-5,
  .mx-lg-5 {
    margin-left: 3rem !important;
  }
  .p-lg-0 {
    padding: 0 !important;
  }
  .pt-lg-0,
  .py-lg-0 {
    padding-top: 0 !important;
  }
  .pr-lg-0,
  .px-lg-0 {
    padding-right: 0 !important;
  }
  .pb-lg-0,
  .py-lg-0 {
    padding-bottom: 0 !important;
  }
  .pl-lg-0,
  .px-lg-0 {
    padding-left: 0 !important;
  }
  .p-lg-1 {
    padding: 0.25rem !important;
  }
  .pt-lg-1,
  .py-lg-1 {
    padding-top: 0.25rem !important;
  }
  .pr-lg-1,
  .px-lg-1 {
    padding-right: 0.25rem !important;
  }
  .pb-lg-1,
  .py-lg-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-lg-1,
  .px-lg-1 {
    padding-left: 0.25rem !important;
  }
  .p-lg-2 {
    padding: 0.5rem !important;
  }
  .pt-lg-2,
  .py-lg-2 {
    padding-top: 0.5rem !important;
  }
  .pr-lg-2,
  .px-lg-2 {
    padding-right: 0.5rem !important;
  }
  .pb-lg-2,
  .py-lg-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-lg-2,
  .px-lg-2 {
    padding-left: 0.5rem !important;
  }
  .p-lg-3 {
    padding: 1rem !important;
  }
  .pt-lg-3,
  .py-lg-3 {
    padding-top: 1rem !important;
  }
  .pr-lg-3,
  .px-lg-3 {
    padding-right: 1rem !important;
  }
  .pb-lg-3,
  .py-lg-3 {
    padding-bottom: 1rem !important;
  }
  .pl-lg-3,
  .px-lg-3 {
    padding-left: 1rem !important;
  }
  .p-lg-4 {
    padding: 1.5rem !important;
  }
  .pt-lg-4,
  .py-lg-4 {
    padding-top: 1.5rem !important;
  }
  .pr-lg-4,
  .px-lg-4 {
    padding-right: 1.5rem !important;
  }
  .pb-lg-4,
  .py-lg-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-lg-4,
  .px-lg-4 {
    padding-left: 1.5rem !important;
  }
  .p-lg-5 {
    padding: 3rem !important;
  }
  .pt-lg-5,
  .py-lg-5 {
    padding-top: 3rem !important;
  }
  .pr-lg-5,
  .px-lg-5 {
    padding-right: 3rem !important;
  }
  .pb-lg-5,
  .py-lg-5 {
    padding-bottom: 3rem !important;
  }
  .pl-lg-5,
  .px-lg-5 {
    padding-left: 3rem !important;
  }
  .m-lg-n1 {
    margin: -0.25rem !important;
  }
  .mt-lg-n1,
  .my-lg-n1 {
    margin-top: -0.25rem !important;
  }
  .mr-lg-n1,
  .mx-lg-n1 {
    margin-right: -0.25rem !important;
  }
  .mb-lg-n1,
  .my-lg-n1 {
    margin-bottom: -0.25rem !important;
  }
  .ml-lg-n1,
  .mx-lg-n1 {
    margin-left: -0.25rem !important;
  }
  .m-lg-n2 {
    margin: -0.5rem !important;
  }
  .mt-lg-n2,
  .my-lg-n2 {
    margin-top: -0.5rem !important;
  }
  .mr-lg-n2,
  .mx-lg-n2 {
    margin-right: -0.5rem !important;
  }
  .mb-lg-n2,
  .my-lg-n2 {
    margin-bottom: -0.5rem !important;
  }
  .ml-lg-n2,
  .mx-lg-n2 {
    margin-left: -0.5rem !important;
  }
  .m-lg-n3 {
    margin: -1rem !important;
  }
  .mt-lg-n3,
  .my-lg-n3 {
    margin-top: -1rem !important;
  }
  .mr-lg-n3,
  .mx-lg-n3 {
    margin-right: -1rem !important;
  }
  .mb-lg-n3,
  .my-lg-n3 {
    margin-bottom: -1rem !important;
  }
  .ml-lg-n3,
  .mx-lg-n3 {
    margin-left: -1rem !important;
  }
  .m-lg-n4 {
    margin: -1.5rem !important;
  }
  .mt-lg-n4,
  .my-lg-n4 {
    margin-top: -1.5rem !important;
  }
  .mr-lg-n4,
  .mx-lg-n4 {
    margin-right: -1.5rem !important;
  }
  .mb-lg-n4,
  .my-lg-n4 {
    margin-bottom: -1.5rem !important;
  }
  .ml-lg-n4,
  .mx-lg-n4 {
    margin-left: -1.5rem !important;
  }
  .m-lg-n5 {
    margin: -3rem !important;
  }
  .mt-lg-n5,
  .my-lg-n5 {
    margin-top: -3rem !important;
  }
  .mr-lg-n5,
  .mx-lg-n5 {
    margin-right: -3rem !important;
  }
  .mb-lg-n5,
  .my-lg-n5 {
    margin-bottom: -3rem !important;
  }
  .ml-lg-n5,
  .mx-lg-n5 {
    margin-left: -3rem !important;
  }
  .m-lg-auto {
    margin: auto !important;
  }
  .mt-lg-auto,
  .my-lg-auto {
    margin-top: auto !important;
  }
  .mr-lg-auto,
  .mx-lg-auto {
    margin-right: auto !important;
  }
  .mb-lg-auto,
  .my-lg-auto {
    margin-bottom: auto !important;
  }
  .ml-lg-auto,
  .mx-lg-auto {
    margin-left: auto !important;
  }
}

@media (min-width: 1200px) {
  .m-xl-0 {
    margin: 0 !important;
  }
  .mt-xl-0,
  .my-xl-0 {
    margin-top: 0 !important;
  }
  .mr-xl-0,
  .mx-xl-0 {
    margin-right: 0 !important;
  }
  .mb-xl-0,
  .my-xl-0 {
    margin-bottom: 0 !important;
  }
  .ml-xl-0,
  .mx-xl-0 {
    margin-left: 0 !important;
  }
  .m-xl-1 {
    margin: 0.25rem !important;
  }
  .mt-xl-1,
  .my-xl-1 {
    margin-top: 0.25rem !important;
  }
  .mr-xl-1,
  .mx-xl-1 {
    margin-right: 0.25rem !important;
  }
  .mb-xl-1,
  .my-xl-1 {
    margin-bottom: 0.25rem !important;
  }
  .ml-xl-1,
  .mx-xl-1 {
    margin-left: 0.25rem !important;
  }
  .m-xl-2 {
    margin: 0.5rem !important;
  }
  .mt-xl-2,
  .my-xl-2 {
    margin-top: 0.5rem !important;
  }
  .mr-xl-2,
  .mx-xl-2 {
    margin-right: 0.5rem !important;
  }
  .mb-xl-2,
  .my-xl-2 {
    margin-bottom: 0.5rem !important;
  }
  .ml-xl-2,
  .mx-xl-2 {
    margin-left: 0.5rem !important;
  }
  .m-xl-3 {
    margin: 1rem !important;
  }
  .mt-xl-3,
  .my-xl-3 {
    margin-top: 1rem !important;
  }
  .mr-xl-3,
  .mx-xl-3 {
    margin-right: 1rem !important;
  }
  .mb-xl-3,
  .my-xl-3 {
    margin-bottom: 1rem !important;
  }
  .ml-xl-3,
  .mx-xl-3 {
    margin-left: 1rem !important;
  }
  .m-xl-4 {
    margin: 1.5rem !important;
  }
  .mt-xl-4,
  .my-xl-4 {
    margin-top: 1.5rem !important;
  }
  .mr-xl-4,
  .mx-xl-4 {
    margin-right: 1.5rem !important;
  }
  .mb-xl-4,
  .my-xl-4 {
    margin-bottom: 1.5rem !important;
  }
  .ml-xl-4,
  .mx-xl-4 {
    margin-left: 1.5rem !important;
  }
  .m-xl-5 {
    margin: 3rem !important;
  }
  .mt-xl-5,
  .my-xl-5 {
    margin-top: 3rem !important;
  }
  .mr-xl-5,
  .mx-xl-5 {
    margin-right: 3rem !important;
  }
  .mb-xl-5,
  .my-xl-5 {
    margin-bottom: 3rem !important;
  }
  .ml-xl-5,
  .mx-xl-5 {
    margin-left: 3rem !important;
  }
  .p-xl-0 {
    padding: 0 !important;
  }
  .pt-xl-0,
  .py-xl-0 {
    padding-top: 0 !important;
  }
  .pr-xl-0,
  .px-xl-0 {
    padding-right: 0 !important;
  }
  .pb-xl-0,
  .py-xl-0 {
    padding-bottom: 0 !important;
  }
  .pl-xl-0,
  .px-xl-0 {
    padding-left: 0 !important;
  }
  .p-xl-1 {
    padding: 0.25rem !important;
  }
  .pt-xl-1,
  .py-xl-1 {
    padding-top: 0.25rem !important;
  }
  .pr-xl-1,
  .px-xl-1 {
    padding-right: 0.25rem !important;
  }
  .pb-xl-1,
  .py-xl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pl-xl-1,
  .px-xl-1 {
    padding-left: 0.25rem !important;
  }
  .p-xl-2 {
    padding: 0.5rem !important;
  }
  .pt-xl-2,
  .py-xl-2 {
    padding-top: 0.5rem !important;
  }
  .pr-xl-2,
  .px-xl-2 {
    padding-right: 0.5rem !important;
  }
  .pb-xl-2,
  .py-xl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pl-xl-2,
  .px-xl-2 {
    padding-left: 0.5rem !important;
  }
  .p-xl-3 {
    padding: 1rem !important;
  }
  .pt-xl-3,
  .py-xl-3 {
    padding-top: 1rem !important;
  }
  .pr-xl-3,
  .px-xl-3 {
    padding-right: 1rem !important;
  }
  .pb-xl-3,
  .py-xl-3 {
    padding-bottom: 1rem !important;
  }
  .pl-xl-3,
  .px-xl-3 {
    padding-left: 1rem !important;
  }
  .p-xl-4 {
    padding: 1.5rem !important;
  }
  .pt-xl-4,
  .py-xl-4 {
    padding-top: 1.5rem !important;
  }
  .pr-xl-4,
  .px-xl-4 {
    padding-right: 1.5rem !important;
  }
  .pb-xl-4,
  .py-xl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pl-xl-4,
  .px-xl-4 {
    padding-left: 1.5rem !important;
  }
  .p-xl-5 {
    padding: 3rem !important;
  }
  .pt-xl-5,
  .py-xl-5 {
    padding-top: 3rem !important;
  }
  .pr-xl-5,
  .px-xl-5 {
    padding-right: 3rem !important;
  }
  .pb-xl-5,
  .py-xl-5 {
    padding-bottom: 3rem !important;
  }
  .pl-xl-5,
  .px-xl-5 {
    padding-left: 3rem !important;
  }
  .m-xl-n1 {
    margin: -0.25rem !important;
  }
  .mt-xl-n1,
  .my-xl-n1 {
    margin-top: -0.25rem !important;
  }
  .mr-xl-n1,
  .mx-xl-n1 {
    margin-right: -0.25rem !important;
  }
  .mb-xl-n1,
  .my-xl-n1 {
    margin-bottom: -0.25rem !important;
  }
  .ml-xl-n1,
  .mx-xl-n1 {
    margin-left: -0.25rem !important;
  }
  .m-xl-n2 {
    margin: -0.5rem !important;
  }
  .mt-xl-n2,
  .my-xl-n2 {
    margin-top: -0.5rem !important;
  }
  .mr-xl-n2,
  .mx-xl-n2 {
    margin-right: -0.5rem !important;
  }
  .mb-xl-n2,
  .my-xl-n2 {
    margin-bottom: -0.5rem !important;
  }
  .ml-xl-n2,
  .mx-xl-n2 {
    margin-left: -0.5rem !important;
  }
  .m-xl-n3 {
    margin: -1rem !important;
  }
  .mt-xl-n3,
  .my-xl-n3 {
    margin-top: -1rem !important;
  }
  .mr-xl-n3,
  .mx-xl-n3 {
    margin-right: -1rem !important;
  }
  .mb-xl-n3,
  .my-xl-n3 {
    margin-bottom: -1rem !important;
  }
  .ml-xl-n3,
  .mx-xl-n3 {
    margin-left: -1rem !important;
  }
  .m-xl-n4 {
    margin: -1.5rem !important;
  }
  .mt-xl-n4,
  .my-xl-n4 {
    margin-top: -1.5rem !important;
  }
  .mr-xl-n4,
  .mx-xl-n4 {
    margin-right: -1.5rem !important;
  }
  .mb-xl-n4,
  .my-xl-n4 {
    margin-bottom: -1.5rem !important;
  }
  .ml-xl-n4,
  .mx-xl-n4 {
    margin-left: -1.5rem !important;
  }
  .m-xl-n5 {
    margin: -3rem !important;
  }
  .mt-xl-n5,
  .my-xl-n5 {
    margin-top: -3rem !important;
  }
  .mr-xl-n5,
  .mx-xl-n5 {
    margin-right: -3rem !important;
  }
  .mb-xl-n5,
  .my-xl-n5 {
    margin-bottom: -3rem !important;
  }
  .ml-xl-n5,
  .mx-xl-n5 {
    margin-left: -3rem !important;
  }
  .m-xl-auto {
    margin: auto !important;
  }
  .mt-xl-auto,
  .my-xl-auto {
    margin-top: auto !important;
  }
  .mr-xl-auto,
  .mx-xl-auto {
    margin-right: auto !important;
  }
  .mb-xl-auto,
  .my-xl-auto {
    margin-bottom: auto !important;
  }
  .ml-xl-auto,
  .mx-xl-auto {
    margin-left: auto !important;
  }
}

.text-monospace {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important;
}

.text-justify {
  text-align: justify !important;
}

.text-wrap {
  white-space: normal !important;
}

.text-nowrap {
  white-space: nowrap !important;
}

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.text-left {
  text-align: left !important;
}

.text-right {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important;
  }
  .text-sm-right {
    text-align: right !important;
  }
  .text-sm-center {
    text-align: center !important;
  }
}

@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important;
  }
  .text-md-right {
    text-align: right !important;
  }
  .text-md-center {
    text-align: center !important;
  }
}

@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important;
  }
  .text-lg-right {
    text-align: right !important;
  }
  .text-lg-center {
    text-align: center !important;
  }
}

@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important;
  }
  .text-xl-right {
    text-align: right !important;
  }
  .text-xl-center {
    text-align: center !important;
  }
}

.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.font-weight-light {
  font-weight: 300 !important;
}

.font-weight-lighter {
  font-weight: lighter !important;
}

.font-weight-normal {
  font-weight: 400 !important;
}

.font-weight-bold {
  font-weight: 700 !important;
}

.font-weight-bolder {
  font-weight: bolder !important;
}

.font-italic {
  font-style: italic !important;
}

.text-white {
  color: #fff !important;
}

.text-primary {
  color: #007bff !important;
}

a.text-primary:hover, a.text-primary:focus {
  color: #0056b3 !important;
}

.text-secondary {
  color: #6c757d !important;
}

a.text-secondary:hover, a.text-secondary:focus {
  color: #494f54 !important;
}

.text-success {
  color: #28a745 !important;
}

a.text-success:hover, a.text-success:focus {
  color: #19692c !important;
}

.text-info {
  color: #17a2b8 !important;
}

a.text-info:hover, a.text-info:focus {
  color: #0f6674 !important;
}

.text-warning {
  color: #ffc107 !important;
}

a.text-warning:hover, a.text-warning:focus {
  color: #ba8b00 !important;
}

.text-danger {
  color: #dc3545 !important;
}

a.text-danger:hover, a.text-danger:focus {
  color: #a71d2a !important;
}

.text-light {
  color: #f8f9fa !important;
}

a.text-light:hover, a.text-light:focus {
  color: #cbd3da !important;
}

.text-dark {
  color: #343a40 !important;
}

a.text-dark:hover, a.text-dark:focus {
  color: #121416 !important;
}

.text-body {
  color: #212529 !important;
}

.text-muted {
  color: #6c757d !important;
}

.text-black-50 {
  color: rgba(0, 0, 0, 0.5) !important;
}

.text-white-50 {
  color: rgba(255, 255, 255, 0.5) !important;
}

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.text-decoration-none {
  text-decoration: none !important;
}

.text-break {
  word-break: break-word !important;
  overflow-wrap: break-word !important;
}

.text-reset {
  color: inherit !important;
}

.visible {
  visibility: visible !important;
}

.invisible {
  visibility: hidden !important;
}

@media print {
  *,
  *::before,
  *::after {
    text-shadow: none !important;
    box-shadow: none !important;
  }
  a:not(.btn) {
    text-decoration: underline;
  }
  abbr[title]::after {
    content: " (" attr(title) ")";
  }
  pre {
    white-space: pre-wrap !important;
  }
  pre,
  blockquote {
    border: 1px solid #adb5bd;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  @page {
    size: a3;
  }
  body {
    min-width: 992px !important;
  }
  .container {
    min-width: 992px !important;
  }
  .navbar {
    display: none;
  }
  .badge {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #dee2e6 !important;
  }
  .table-dark {
    color: inherit;
  }
  .table-dark th,
  .table-dark td,
  .table-dark thead th,
  .table-dark tbody + tbody {
    border-color: #dee2e6;
  }
  .table .thead-dark th {
    color: inherit;
    border-color: #dee2e6;
  }
}
/* PrismJS 1.14.0
http://prismjs.com/download.html#themes=prism&languages=markup+css+clike+javascript+markup-templating+json+php+jsx+typescript+scss&plugins=line-numbers+toolbar+previewers+normalize-whitespace+copy-to-clipboard */
/**
 * prism.js default theme for JavaScript, CSS and HTML
 * Based on dabblet (http://dabblet.com)
 * @author Lea Verou
 */

code[class*="language-"],
pre[class*="language-"] {
  color: black;
  background: none;
  text-shadow: 0 1px white;
  font-family: Consolas, Monaco, 'Andale Mono', 'Ubuntu Mono', monospace;
  text-align: left;
  white-space: pre;
  word-spacing: normal;
  word-break: normal;
  word-wrap: normal;
  line-height: 1.5;

  -moz-tab-size: 4;
  -o-tab-size: 4;
  tab-size: 4;

  -webkit-hyphens: none;
  -moz-hyphens: none;
  -ms-hyphens: none;
  hyphens: none;
}

pre[class*="language-"]::-moz-selection, pre[class*="language-"] ::-moz-selection,
code[class*="language-"]::-moz-selection, code[class*="language-"] ::-moz-selection {
  text-shadow: none;
  background: #b3d4fc;
}

pre[class*="language-"]::selection, pre[class*="language-"] ::selection,
code[class*="language-"]::selection, code[class*="language-"] ::selection {
  text-shadow: none;
  background: #b3d4fc;
}

@media print {
  code[class*="language-"],
  pre[class*="language-"] {
    text-shadow: none;
  }
}

/* Code blocks */
pre[class*="language-"] {
  padding: 1em;
  margin: .5em 0;
  overflow: auto;
}

:not(pre) > code[class*="language-"],
pre[class*="language-"] {
  background: #f5f2f0;
}

/* Inline code */
:not(pre) > code[class*="language-"] {
  padding: .1em;
  border-radius: .3em;
  white-space: normal;
}

.token.comment,
.token.prolog,
.token.doctype,
.token.cdata {
  color: slategray;
}

.token.punctuation {
  color: #999;
}

.namespace {
  opacity: .7;
}

.token.property,
.token.tag,
.token.boolean,
.token.number,
.token.constant,
.token.symbol,
.token.deleted {
  color: #905;
}

.token.selector,
.token.attr-name,
.token.string,
.token.char,
.token.builtin,
.token.inserted {
  color: #690;
}

.token.operator,
.token.entity,
.token.url,
.language-css .token.string,
.style .token.string {
  color: #9a6e3a;
  background: hsla(0, 0%, 100%, .5);
}

.token.atrule,
.token.attr-value,
.token.keyword {
  color: #07a;
}

.token.function,
.token.class-name {
  color: #DD4A68;
}

.token.regex,
.token.important,
.token.variable {
  color: #e90;
}

.token.important,
.token.bold {
  font-weight: bold;
}
.token.italic {
  font-style: italic;
}

.token.entity {
  cursor: help;
}

pre.line-numbers {
  position: relative;
  padding-left: 3.8em;
  counter-reset: linenumber;
}

pre.line-numbers > code {
  position: relative;
    white-space: inherit;
}

.line-numbers .line-numbers-rows {
  position: absolute;
  pointer-events: none;
  top: 0;
  font-size: 100%;
  left: -3.8em;
  width: 3em; /* works for line-numbers below 1000 lines */
  letter-spacing: -1px;
  border-right: 1px solid #999;

  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;

}

  .line-numbers-rows > span {
    pointer-events: none;
    display: block;
    counter-increment: linenumber;
  }

    .line-numbers-rows > span:before {
      content: counter(linenumber);
      color: #999;
      display: block;
      padding-right: 0.8em;
      text-align: right;
    }

.prism-previewer,
.prism-previewer:before,
.prism-previewer:after {
  position: absolute;
  pointer-events: none;
}
.prism-previewer,
.prism-previewer:after {
  left: 50%;
}
.prism-previewer {
  margin-top: -48px;
  width: 32px;
  height: 32px;
  margin-left: -16px;

  opacity: 0;
  -webkit-transition: opacity .25s;
  -o-transition: opacity .25s;
  transition: opacity .25s;
}
.prism-previewer.flipped {
  margin-top: 0;
  margin-bottom: -48px;
}
.prism-previewer:before,
.prism-previewer:after {
  content: '';
  position: absolute;
  pointer-events: none;
}
.prism-previewer:before {
  top: -5px;
  right: -5px;
  left: -5px;
  bottom: -5px;
  border-radius: 10px;
  border: 5px solid #fff;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.5) inset, 0 0 10px rgba(0, 0, 0, 0.75);
}
.prism-previewer:after {
  top: 100%;
  width: 0;
  height: 0;
  margin: 5px 0 0 -7px;
  border: 7px solid transparent;
  border-color: rgba(255, 0, 0, 0);
  border-top-color: #fff;
}
.prism-previewer.flipped:after {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 5px;
  border-top-color: rgba(255, 0, 0, 0);
  border-bottom-color: #fff;
}
.prism-previewer.active {
  opacity: 1;
}

.prism-previewer-angle:before {
  border-radius: 50%;
  background: #fff;
}
.prism-previewer-angle:after {
  margin-top: 4px;
}
.prism-previewer-angle svg {
  width: 32px;
  height: 32px;
  -webkit-transform: rotate(-90deg);
  -moz-transform: rotate(-90deg);
  -ms-transform: rotate(-90deg);
  -o-transform: rotate(-90deg);
  transform: rotate(-90deg);
}
.prism-previewer-angle[data-negative] svg {
  -webkit-transform: scaleX(-1) rotate(-90deg);
  -moz-transform: scaleX(-1) rotate(-90deg);
  -ms-transform: scaleX(-1) rotate(-90deg);
  -o-transform: scaleX(-1) rotate(-90deg);
  transform: scaleX(-1) rotate(-90deg);
}
.prism-previewer-angle circle {
  fill: transparent;
  stroke: hsl(200, 10%, 20%);
  stroke-opacity: 0.9;
  stroke-width: 32;
  stroke-dasharray: 0, 500;
}

.prism-previewer-gradient {
  background-image: linear-gradient(45deg, #bbb 25%, transparent 25%, transparent 75%, #bbb 75%, #bbb), linear-gradient(45deg, #bbb 25%, #eee 25%, #eee 75%, #bbb 75%, #bbb);
  background-size: 10px 10px;
  background-position: 0 0, 5px 5px;

  width: 64px;
  margin-left: -32px;
}
.prism-previewer-gradient:before {
  content: none;
}
.prism-previewer-gradient div {
  position: absolute;
  top: -5px;
  left: -5px;
  right: -5px;
  bottom: -5px;
  border-radius: 10px;
  border: 5px solid #fff;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.5) inset, 0 0 10px rgba(0, 0, 0, 0.75);
}

.prism-previewer-color {
  background-image: linear-gradient(45deg, #bbb 25%, transparent 25%, transparent 75%, #bbb 75%, #bbb), linear-gradient(45deg, #bbb 25%, #eee 25%, #eee 75%, #bbb 75%, #bbb);
  background-size: 10px 10px;
  background-position: 0 0, 5px 5px;
}
.prism-previewer-color:before {
  background-color: inherit;
  background-clip: padding-box;
}

.prism-previewer-easing {
  margin-top: -76px;
  margin-left: -30px;
  width: 60px;
  height: 60px;
  background: #333;
}
.prism-previewer-easing.flipped {
  margin-bottom: -116px;
}
.prism-previewer-easing svg {
  width: 60px;
  height: 60px;
}
.prism-previewer-easing circle {
  fill: hsl(200, 10%, 20%);
  stroke: white;
}
.prism-previewer-easing path {
  fill: none;
  stroke: white;
  stroke-linecap: round;
  stroke-width: 4;
}
.prism-previewer-easing line {
  stroke: white;
  stroke-opacity: 0.5;
  stroke-width: 2;
}

@-webkit-keyframes prism-previewer-time {
  0% {
    stroke-dasharray: 0, 500;
    stroke-dashoffset: 0;
  }
  50% {
    stroke-dasharray: 100, 500;
    stroke-dashoffset: 0;
  }
  100% {
    stroke-dasharray: 0, 500;
    stroke-dashoffset: -100;
  }
}

@-o-keyframes prism-previewer-time {
  0% {
    stroke-dasharray: 0, 500;
    stroke-dashoffset: 0;
  }
  50% {
    stroke-dasharray: 100, 500;
    stroke-dashoffset: 0;
  }
  100% {
    stroke-dasharray: 0, 500;
    stroke-dashoffset: -100;
  }
}

@-moz-keyframes prism-previewer-time {
  0% {
    stroke-dasharray: 0, 500;
    stroke-dashoffset: 0;
  }
  50% {
    stroke-dasharray: 100, 500;
    stroke-dashoffset: 0;
  }
  100% {
    stroke-dasharray: 0, 500;
    stroke-dashoffset: -100;
  }
}

@keyframes prism-previewer-time {
  0% {
    stroke-dasharray: 0, 500;
    stroke-dashoffset: 0;
  }
  50% {
    stroke-dasharray: 100, 500;
    stroke-dashoffset: 0;
  }
  100% {
    stroke-dasharray: 0, 500;
    stroke-dashoffset: -100;
  }
}

.prism-previewer-time:before {
  border-radius: 50%;
  background: #fff;
}
.prism-previewer-time:after {
  margin-top: 4px;
}
.prism-previewer-time svg {
  width: 32px;
  height: 32px;
  -webkit-transform: rotate(-90deg);
  -moz-transform: rotate(-90deg);
  -ms-transform: rotate(-90deg);
  -o-transform: rotate(-90deg);
  transform: rotate(-90deg);
}
.prism-previewer-time circle {
  fill: transparent;
  stroke: hsl(200, 10%, 20%);
  stroke-opacity: 0.9;
  stroke-width: 32;
  stroke-dasharray: 0, 500;
  stroke-dashoffset: 0;
  -webkit-animation: prism-previewer-time linear infinite 3s;
  -moz-animation: prism-previewer-time linear infinite 3s;
  -o-animation: prism-previewer-time linear infinite 3s;
  animation: prism-previewer-time linear infinite 3s;
}

/* custom */
.docs-pills .btn-copy-code, .docs-tab-content .btn-copy-code {
  position: absolute !important;
    top: 8px;
    right: .6rem;
}

.docs-pills .btn-copy-code, .docs-tab-content .export-to-snippet {
  position: absolute;
  top: 8px;
  right: 20px;
  background-color: transparent!important;
}

.docs-pills {
  position:relative !important;
}

.docs-pills pre[class*="language-"] {
  margin-top: 0;
}

pre.line-numbers {
  position: relative;
  padding-left: 3.8em !important; /* It's important to overwrite px-3 class which breaks showing numbers */
  counter-reset: linenumber;
}

pre.line-numbers > code {
  position: relative;
    white-space: inherit;
}

.line-numbers .line-numbers-rows {
  position: absolute;
  pointer-events: none;
  top: 0;
  font-size: 100%;
  left: -3.8em;
  width: 3em; /* works for line-numbers below 1000 lines */
  letter-spacing: -1px;
  border-right: 1px solid #999;

  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;

}

.line-numbers-rows > span {
pointer-events: none;
display: block;
counter-increment: linenumber;
}

.line-numbers-rows > span:before {
  content: counter(linenumber);
  color: #999;
  display: block;
  padding-right: 0.8em;
  text-align: right;
}

.code-toolbar {
  margin-top: 1.5rem;
  margin-bottom: 1.5rem;
}

.text-sm {
  font-size: .785rem;
  line-height: 1rem; }

.card-intro {
  padding-left: 0 !important;
  margin-top: 67px; }
  @media (min-width: 1441px) {
    .card-intro {
      padding-left: 240px !important; } }

.hidden-sn .card-intro {
  padding-left: 0 !important; }

.card-body {
  padding-top: 1.5rem;
  padding-bottom: 1.5rem;
  -webkit-border-radius: 0 !important;
  border-radius: 0 !important; }
  .card-body h1 {
    margin-bottom: 0; }

@media (max-width: 992px) {
  .navbar {
    position: relative; }
  .card-intro {
    margin-top: 0; }
  .fixed-sn main {
    padding-top: 21px; } }

.sky-gradient {
  background: -webkit-gradient(linear, left top, right top, from(#0acffe), to(#495aff));
  background: -webkit-linear-gradient(left, #0acffe 0%, #495aff 100%);
  background: -o-linear-gradient(left, #0acffe 0%, #495aff 100%);
  background: linear-gradient(to right, #0acffe 0%, #495aff 100%); }

.users-listing-small img {
  width: 30px;
  -webkit-border-radius: 50%;
  border-radius: 50%; }

.users-listing-small .media h5 {
  font-size: 16px; }

.title,
.secondary-heading,
.primary-heading,
.section-heading,
.main-title {
  margin-bottom: 1rem; }
  .title::before,
  .secondary-heading::before,
  .primary-heading::before,
  .section-heading::before,
  .main-title::before {
    z-index: -1;
    display: block;
    visibility: hidden;
    content: ""; }

.title::before,
.secondary-heading::before,
.main-title::before {
  height: 6rem;
  margin-top: -6rem; }

.primary-heading::before,
.section-heading::before {
  height: 4rem;
  margin-top: -4rem; }

.customer-logo-carousel.customer-logo-carousel {
  display: block;
  width: 117px;
  height: 40px;
  margin: auto;
  overflow: hidden;
  text-indent: -666px;
  background-image: url("https://mdbootstrap.com/img/sprites/customers.png");
  background-repeat: no-repeat;
  -webkit-background-size: 1402px 40px;
  background-size: 1402px 40px; }
  .customer-logo-carousel.customer-logo-carousel.nike {
    background-position: 0 0; }
  .customer-logo-carousel.customer-logo-carousel.amazon {
    background-position: -117px 0; }
  .customer-logo-carousel.customer-logo-carousel.sony {
    background-position: -234px 0; }
  .customer-logo-carousel.customer-logo-carousel.samsung {
    background-position: -351px 0; }
  .customer-logo-carousel.customer-logo-carousel.airbus {
    background-position: -468px 0; }
  .customer-logo-carousel.customer-logo-carousel.yahoo {
    background-position: -585px 0; }
  .customer-logo-carousel.customer-logo-carousel.deloitte {
    background-position: -702px 0; }
  .customer-logo-carousel.customer-logo-carousel.ge {
    background-position: -819px 0; }
  .customer-logo-carousel.customer-logo-carousel.kpmg {
    background-position: -936px 0; }
  .customer-logo-carousel.customer-logo-carousel.unity {
    background-position: -1053px 0; }
  .customer-logo-carousel.customer-logo-carousel.ikea {
    background-position: -1170px 0; }
  .customer-logo-carousel.customer-logo-carousel.aegon {
    background-position: -1287px 0; }

.error404 {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  -ms-flex-pack: justify;
  justify-content: space-between;
  min-height: 100vh; }
  .error404 main {
    -webkit-box-flex: 2;
    -webkit-flex: 2 0 auto;
    -ms-flex: 2 0 auto;
    flex: 2 0 auto; }

.switch-version {
  position: fixed;
  top: 300px;
  right: 0;
  width: 40px;
  background: #fff;
  -webkit-border-radius: 4px 0 0 4px;
  border-radius: 4px 0 0 4px;
  -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12); }
  .switch-version a:first-child > .switch-to {
    -webkit-border-top-left-radius: 4px;
    border-top-left-radius: 4px; }
  .switch-version a:last-child > .switch-to {
    -webkit-border-bottom-left-radius: 4px;
    border-bottom-left-radius: 4px; }

.switch-to {
  display: block;
  width: 40px;
  height: 40px;
  background-image: url("https://mdbootstrap.com/img/logo/mdb-angular.png");
  background-repeat: no-repeat; }
  .switch-to.active {
    background-color: rgba(0, 0, 0, 0.15); }
  .switch-to.mdb-jquery {
    background-position: 0 -40px; }
  .switch-to.mdb-angular {
    background-position: 0 0; }
  .switch-to.mdb-vue {
    background-position: 0 -80px; }
  .switch-to.mdb-react {
    background-position: 0 -120px; }

#scrollspy .nav-item {
  width: 100%; }

#scrollspy a {
  font-size: .8rem;
  font-weight: 400;
  line-height: 1.1rem;
  padding: 0 5px;
  margin-top: 3px;
  margin-bottom: 3px;
  color: black; }

#scrollspy li .active {
  font-weight: 600; }

.tag-common {
  background-color: #eee;
  color: #212529 !important;
  font-weight: 500; }

.product_meta {
  position: absolute;
  top: -1000px; }

.checkout-preloader-container {
  position: absolute;
  z-index: 999;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.5); }

#tabCheckoutAddons,
#order_cart_content {
  position: relative; }

.shrink {
  width: 0;
  height: 0;
  padding: 0 !important;
  margin-bottom: 0 !important; }

.woocommerce label[for="mailchimp_woocommerce_newsletter"] {
  display: none !important; }

#license-type-tabs .nav-item .nav-link:not(.active) {
  border: 1px solid rgba(0, 0, 0, 0.25); }

#individuals_radio .fa-check {
  display: none; }

#individuals_radio label.active .fa-check {
  display: inline-block;
  color: #fff; }

.table-products img {
  max-width: 100px;
  max-height: 100px; }

.table-products tr th,
.table-products tr td {
  vertical-align: middle; }

.documentation .docs-section {
  padding-bottom: 2.5rem;
  margin-bottom: 3rem;
  border-bottom: 1px solid #666; }

.documentation .main-title {
  font-size: 2rem;
  font-weight: 700 !important; }

.documentation .section-title {
  font-size: 1.4rem;
  font-weight: 500 !important; }

.documentation section .code-toolbar {
  position: relative; }
  .documentation section .code-toolbar .btn-copy-code {
    position: absolute;
    top: 8px;
    right: .6rem;
    background: #f5f2f0 !important; }
  .documentation section .code-toolbar .export-to-snippet {
    position: absolute;
    top: 8px;
    right: 20px;
    background-color: transparent !important; }

.documentation section .docs-pills .code-toolbar {
  position: static !important; }

.documentation section .docs-pills .btn-copy-code {
  background-color: transparent !important; }

.documentation .doc-title {
  border-top: 1px solid #e0e0e0;
  border-bottom: 1px solid #e0e0e0;
  padding: 2rem 0;
  margin: 5rem 0 2rem;
  text-transform: uppercase;
  font-size: 2rem; }
  .documentation .doc-title.doc-first {
    border-top: none;
    margin-top: 0;
    padding-top: 1.2rem; }
  .documentation .doc-title.doc-subtitle {
    text-transform: none;
    border-top: none;
    font-size: 1.7rem;
    margin-top: 2rem; }
  .documentation .doc-title .btn {
    margin-top: -2px; }
    @media (max-width: 776px) {
      .documentation .doc-title .btn {
        margin-top: 1rem;
        display: block; } }

.documentation .col-example {
  padding: 1rem;
  background-color: #33b5e5;
  border: 2px solid #fff;
  color: #fff;
  text-align: center; }

.documentation .example-td {
  padding: 1rem;
  background-color: #33b5e5 !important;
  border: 2px solid #fff !important;
  color: #fff; }

.documentation .example-parent {
  background-color: #eee !important; }

.documentation li.circle-li {
  list-style-type: disc; }

.documentation ul.ul-flex {
  padding-left: 3rem; }

.documentation .is-visible {
  background-color: #bbdefb; }

.documentation .is-hidden {
  color: #9e9e9e; }

.documentation .scroll-box {
  position: relative; }

.documentation .scrollspy-example {
  overflow-y: scroll;
  position: relative;
  height: 200px;
  padding: 1rem; }

.documentation .dzik:after {
  content: "Wrrr. jestem wielkim strasznym dzikiem"; }

.documentation footer {
  padding-left: 0; }

.color-block {
  text-align: center;
  height: 130px;
  color: #fff;
  padding: 40px; }
  .color-block-dark {
    height: 130px;
    text-align: center;
    color: #fff;
    padding: 40px; }
    .color-block-dark h5 {
      font-size: 1rem; }

.dynamic-color .col-md-4 {
  margin-bottom: 2rem; }
  .dynamic-color .col-md-4 div {
    padding: 7px 20px 7px 20px; }

.docs-pills {
  padding: 0;
  margin: 1.5rem 0;
  border: 1px solid #e0e0e0;
  -webkit-border-radius: 2px;
  border-radius: 2px; }
  .docs-pills .nav {
    border-bottom: 1px solid #e0e0e0; }
  .docs-pills .tab-content {
    padding: 0; }
  .docs-pills .code-toolbar {
    margin-top: 0 !important;
    margin-bottom: 0 !important; }

.docs-tabs {
  margin-top: 1rem; }
  .docs-tabs .nav-link {
    margin-right: 8px;
    margin-bottom: -1px;
    color: #212529;
    border-color: rgba(0, 0, 0, 0.15);
    border-style: solid;
    border-width: 1px 1px 0 1px;
    -webkit-border-radius: 5px 5px 0 0;
    border-radius: 5px 5px 0 0; }
    .docs-tabs .nav-link.active {
      font-weight: 600;
      background: #eaeaea; }

.docs-tab-content {
  position: relative;
  border: 1px solid rgba(0, 0, 0, 0.15);
  padding: 0; }
  .docs-tab-content pre[class*=language-] {
    margin: 0 !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important; }
  .docs-tab-content .code-toolbar {
    margin-top: 0 !important;
    margin-bottom: 0 !important; }

.mdbsh-live-example {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 1px solid #e0e0e0;
  -webkit-box-shadow: none !important;
  box-shadow: none !important; }

.mdbsh-live-example .card-header {
  background-color: rgba(0, 0, 0, 0.03);
  color: black; }

code[class*=language-],
pre[class*=language-] {
  max-height: 450px; }

ul.search-dropdown li a {
  line-height: 28px;
  height: 28px;
  width: 230px;
  white-space: nowrap;
  overflow: hidden;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis; }

.mdb-skin-custom .side-nav {
  background-color: #F9F9F9; }

.mdb-skin-custom .side-nav .logo-wrapper > div {
  background-color: transparent !important; }

.mdb-skin-custom .side-nav .search-form .md-form input {
  color: #424242 !important;
  border-bottom: 1px solid rgba(153, 153, 153, 0.3); }

.mdb-skin-custom .side-nav .search-form .md-form input::-webkit-input-placeholder {
  color: rgba(66, 66, 66, 0.5) !important; }

.mdb-skin-custom .side-nav .search-form .md-form input:-ms-input-placeholder {
  color: rgba(66, 66, 66, 0.5) !important; }

.mdb-skin-custom .side-nav .search-form .md-form input::-ms-input-placeholder {
  color: rgba(66, 66, 66, 0.5) !important; }

.mdb-skin-custom .side-nav .search-form .md-form input::placeholder {
  color: rgba(66, 66, 66, 0.5) !important; }

.mdb-skin-custom .side-nav .collapsible li {
  background-color: transparent; }

.mdb-skin-custom .side-nav .collapsible li a {
  font-weight: 400; }

.mdb-skin-custom .side-nav .collapsible li .collapsible-header {
  color: #424242;
  -webkit-transition: all 0.3s linear;
  -o-transition: all 0.3s linear;
  transition: all 0.3s linear; }

.mdb-skin-custom .side-nav .collapsible li .collapsible-header.active {
  color: #4285F4;
  background-color: transparent; }

.mdb-skin-custom .side-nav .collapsible li .collapsible-header:hover {
  background-color: rgba(0, 0, 0, 0.05); }

.mdb-skin-custom .side-nav .collapsible li .collapsible-body a {
  color: #424242;
  font-size: .78rem;
  height: 28px;
  line-height: 28px;
  background-color: rgba(95, 93, 93, 0.15); }

.mdb-skin-custom .side-nav .collapsible li .collapsible-body a:hover {
  color: #4285F4; }

.mdb-skin-custom .side-nav .fa {
  color: #424242; }

.mdb-skin-custom .side-nav .sidenav-bg:after, .mdb-skin-custom .side-nav .sidenav-bg.mask-strong:after {
  background: rgba(255, 255, 255, 0.8); }

.mdb-skin-custom .side-nav .sidenav-bg.mask-light:after {
  background: rgba(255, 255, 255, 0.65); }

.mdb-skin-custom .side-nav .sidenav-bg.mask-slight:after {
  background: rgba(255, 255, 255, 0.5); }

.mdb-skin-custom .btn-ptc {
  background-color: #4285F4 !important;
  color: #fff !important; }

.mdb-skin-custom .btn-ptc:hover {
  background-color: #5a95f5; }

.mdb-skin-custom .btn-ptc:focus, .mdb-skin-custom .btn-ptc.focus {
  -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
  box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.mdb-skin-custom .btn-ptc:focus, .mdb-skin-custom .btn-ptc:active, .mdb-skin-custom .btn-ptc.active {
  background-color: #0b51c5; }

.mdb-skin-custom .btn-ptc.dropdown-toggle {
  background-color: #4285F4 !important; }

.mdb-skin-custom .btn-ptc.dropdown-toggle:hover, .mdb-skin-custom .btn-ptc.dropdown-toggle:focus {
  background-color: #5a95f5 !important; }

.mdb-skin-custom .btn-ptc:not([disabled]):not(.disabled):active, .mdb-skin-custom .btn-ptc:not([disabled]):not(.disabled).active,
.show > .mdb-skin-custom .btn-ptc.dropdown-toggle {
  -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
  box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
  background-color: #0b51c5 !important; }

.mdb-skin-custom .btn-ptc:not([disabled]):not(.disabled):active:focus, .mdb-skin-custom .btn-ptc:not([disabled]):not(.disabled).active:focus,
.show > .mdb-skin-custom .btn-ptc.dropdown-toggle:focus {
  -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
  box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.mdb-skin-custom .btn-stc {
  background-color: #fc685f !important;
  color: #fff !important; }

.mdb-skin-custom .btn-stc:hover {
  background-color: #fc8078; }

.mdb-skin-custom .btn-stc:focus, .mdb-skin-custom .btn-stc.focus {
  -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
  box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.mdb-skin-custom .btn-stc:focus, .mdb-skin-custom .btn-stc:active, .mdb-skin-custom .btn-stc.active {
  background-color: #f01205; }

.mdb-skin-custom .btn-stc.dropdown-toggle {
  background-color: #fc685f !important; }

.mdb-skin-custom .btn-stc.dropdown-toggle:hover, .mdb-skin-custom .btn-stc.dropdown-toggle:focus {
  background-color: #fc8078 !important; }

.mdb-skin-custom .btn-stc:not([disabled]):not(.disabled):active, .mdb-skin-custom .btn-stc:not([disabled]):not(.disabled).active,
.show > .mdb-skin-custom .btn-stc.dropdown-toggle {
  -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
  box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
  background-color: #f01205 !important; }

.mdb-skin-custom .btn-stc:not([disabled]):not(.disabled):active:focus, .mdb-skin-custom .btn-stc:not([disabled]):not(.disabled).active:focus,
.show > .mdb-skin-custom .btn-stc.dropdown-toggle:focus {
  -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
  box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.mdb-skin-custom .btn-dtc {
  background-color: #454545 !important;
  color: #fff !important; }

.mdb-skin-custom .btn-dtc:hover {
  background-color: #525252; }

.mdb-skin-custom .btn-dtc:focus, .mdb-skin-custom .btn-dtc.focus {
  -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
  box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.mdb-skin-custom .btn-dtc:focus, .mdb-skin-custom .btn-dtc:active, .mdb-skin-custom .btn-dtc.active {
  background-color: #121212; }

.mdb-skin-custom .btn-dtc.dropdown-toggle {
  background-color: #454545 !important; }

.mdb-skin-custom .btn-dtc.dropdown-toggle:hover, .mdb-skin-custom .btn-dtc.dropdown-toggle:focus {
  background-color: #525252 !important; }

.mdb-skin-custom .btn-dtc:not([disabled]):not(.disabled):active, .mdb-skin-custom .btn-dtc:not([disabled]):not(.disabled).active,
.show > .mdb-skin-custom .btn-dtc.dropdown-toggle {
  -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
  box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
  background-color: #121212 !important; }

.mdb-skin-custom .btn-dtc:not([disabled]):not(.disabled):active:focus, .mdb-skin-custom .btn-dtc:not([disabled]):not(.disabled).active:focus,
.show > .mdb-skin-custom .btn-dtc.dropdown-toggle:focus {
  -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
  box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

.mdb-skin-custom a.button-collapse {
  color: #007bff; }

.side-nav .current-menu-item > a {
  color: #4285f4 !important; }

.hidden-sn main {
  padding-top: 1.5rem; }

.navbar .navbar-brand img {
  height: 20px; }

.navbar .button-collapse {
  padding-top: 1px; }

.side-nav .search-form {
  border-top: 1px solid rgba(153, 153, 153, 0.3); }

.side-nav ul .logo-sn {
  padding-bottom: 1rem !important;
  padding-top: 1rem;
  background-color: rem !important; }

.double-nav .breadcrumb-dn {
  padding-left: 1rem;
  color: #424242; }

.double-nav .breadcrumb-dn a {
  font-weight: 400;
  color: #0099CC; }

.double-nav .nav-link {
  padding-top: 11px; }

.double-nav .nav-link .badge {
  height: 15px;
  padding-top: 2px; }

.nav li {
  list-style: none; }

.mdb-skin-custom .side-nav .collapsible li .collapsible-body a {
  font-size: .78rem; }

.side-nav .collapsible-body a {
  height: 28px;
  line-height: 28px;
  background-color: rgba(95, 93, 93, 0.15); }

.mdb-com-snippets::after {
  content: ""; }

.card-snippet a {
  font-weight: 500;
  color: #3f3e3e !important;
  -webkit-transition: .2s !important;
  -o-transition: .2s !important;
  transition: .2s !important; }
  .card-snippet a:hover {
    color: #6d6a6a !important; }
    .card-snippet a:hover .active {
      color: #a00b0b; }
  .card-snippet a .card-snippet-title {
    padding-bottom: 13px;
    margin-bottom: 12px;
    border-bottom: 1px solid #eee; }

.miniature-wrapper {
  position: relative;
  height: 185.109px; }

iframe.minature {
  position: absolute;
  top: 0;
  left: 0;
  -webkit-transform: scale(0.25);
  -ms-transform: scale(0.25);
  transform: scale(0.25);
  width: 400%;
  height: 400%;
  -webkit-transform-origin: top left;
  -ms-transform-origin: top left;
  transform-origin: top left; }

.mdb-com-support::after {
  content: ""; }

.card-img-100 img {
  width: 100px; }

.card-img-64 img {
  width: 64px; }

.card-img-30 img {
  width: 30px; }

.forum-card-img-64 img {
  width: 64px;
  height: 64px; }

.forum-card-img-30 img {
  width: 30px;
  height: 30px; }

.img-25 {
  width: 25px; }

.card-tabs .card-header {
  padding: 0; }
  .card-tabs .card-header .nav-item {
    border-right: 1px solid #bdbdbd; }
    .card-tabs .card-header .nav-item .nav-link {
      padding: 1rem; }
      .card-tabs .card-header .nav-item .nav-link.active {
        background-color: #bdbdbd; }

.question-card img {
  max-width: 100%;
  height: auto; }

.mdb-com-tutorial .card-progress .accordion .card-header {
  padding-right: 1.2rem;
  padding-left: 1.2rem; }
  .mdb-com-tutorial .card-progress .accordion .card-header a h5 {
    font-size: 1rem;
    font-weight: 400; }

.mdb-com-tutorial .card-progress .list-naked .list-group-item {
  padding-top: 5px;
  padding-bottom: 5px;
  border-right: 0;
  border-left: 0; }
  .mdb-com-tutorial .card-progress .list-naked .list-group-item:first-of-type {
    border-top: 0; }
  .mdb-com-tutorial .card-progress .list-naked .list-group-item:last-of-type {
    border-bottom: 0; }

.mdb-com-tutorial .card-progress .list-naked .completed {
  color: #000;
  background-color: rgba(76, 175, 80, 0.2);
  border-color: #bdbdbd; }

.mdb-com-tutorial .card-progress .list-naked .active {
  color: #000;
  background-color: rgba(3, 168, 244, 0.151);
  border-color: #bdbdbd; }

.mdb-com-tutorial .pagination .page-item.active .page-link {
  background-color: #09c; }

form.ajax-auth {
    display: none;
    z-index: 999;
    position: fixed;
    top: 10%;
    left: 50%;
    transform:translateX(-50%);
    width: 450px;
    padding: 20px 25px 15px 25px;
    background-color: #FFFFFF;
    box-shadow: 0 0 6px rgba(0, 0, 0, 0.2);
}

.login_overlay {
    height: 100%;
    width: 100%;
    background-color: #F6F6F6;
    opacity: 0.9;
    position: fixed;
    z-index: 94;
}

.login-font-small, .wp-social-login-connect-with {
    font-size:0.8rem;
}

.wp-social-login-connect-with {
    color:#4f4f4f !important;
}

@media (max-height: 700px) {
    form.ajax-auth input {
        height: 50%;
        margin-bottom: 10px;
    }
    form.ajax-auth {
        font-size: 1rem;
    }
}

@media only screen and (max-width: 1100px) {
    form.ajax-auth {
        top: 90px;
        width: 350px;
    }
}

@media only screen and (max-width: 800px) {
    form.ajax-auth {
        top: 90px;
    }
}

.ajax-auth .wp-social-login-provider {
    font: normal normal normal 1rem/1 FontAwesome;
    color: #2196F3 !important;
    max-width: 70px;
    border-radius:10em;
    box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25);
    background:none;
    padding: 0.85rem 2.13rem;
    overflow:hidden;
    text-indent: -9999px;
    display:inline-block;
}

.ajax-auth .wp-social-login-provider:before {
    float: left;
    text-indent: 0;
}

.ajax-auth .wp-social-login-provider-facebook:before {
    content: "\f09a";
}
.ajax-auth .wp-social-login-provider-twitter:before {
    content: "\f099";
    margin-left: -5px;
}
.ajax-auth .wp-social-login-provider-google:before {
    content: "\f0d5";
    margin-left:-3px;
}
/*!
 * Font Awesome Free 5.11.2 by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
 */
 .fa,
 .fab,
 .fad,
 .fal,
 .far,
 .fas {
   -moz-osx-font-smoothing: grayscale;
   -webkit-font-smoothing: antialiased;
   display: inline-block;
   font-style: normal;
   font-variant: normal;
   text-rendering: auto;
   line-height: 1
 }
 
 .fa-lg {
   font-size: 1.33333em;
   line-height: .75em;
   vertical-align: -.0667em
 }
 
 .fa-xs {
   font-size: .75em
 }
 
 .fa-sm {
   font-size: .875em
 }
 
 .fa-1x {
   font-size: 1em
 }
 
 .fa-2x {
   font-size: 2em
 }
 
 .fa-3x {
   font-size: 3em
 }
 
 .fa-4x {
   font-size: 4em
 }
 
 .fa-5x {
   font-size: 5em
 }
 
 .fa-6x {
   font-size: 6em
 }
 
 .fa-7x {
   font-size: 7em
 }
 
 .fa-8x {
   font-size: 8em
 }
 
 .fa-9x {
   font-size: 9em
 }
 
 .fa-10x {
   font-size: 10em
 }
 
 .fa-fw {
   text-align: center;
   width: 1.25em
 }
 
 .fa-ul {
   list-style-type: none;
   margin-left: 2.5em;
   padding-left: 0
 }
 
 .fa-ul>li {
   position: relative
 }
 
 .fa-li {
   left: -2em;
   position: absolute;
   text-align: center;
   width: 2em;
   line-height: inherit
 }
 
 .fa-border {
   border: .08em solid #eee;
   border-radius: .1em;
   padding: .2em .25em .15em
 }
 
 .fa-pull-left {
   float: left
 }
 
 .fa-pull-right {
   float: right
 }
 
 .fa.fa-pull-left,
 .fab.fa-pull-left,
 .fal.fa-pull-left,
 .far.fa-pull-left,
 .fas.fa-pull-left {
   margin-right: .3em
 }
 
 .fa.fa-pull-right,
 .fab.fa-pull-right,
 .fal.fa-pull-right,
 .far.fa-pull-right,
 .fas.fa-pull-right {
   margin-left: .3em
 }
 
 .fa-spin {
   -webkit-animation: fa-spin 2s linear infinite;
   animation: fa-spin 2s linear infinite
 }
 
 .fa-pulse {
   -webkit-animation: fa-spin 1s steps(8) infinite;
   animation: fa-spin 1s steps(8) infinite
 }
 
 @-webkit-keyframes fa-spin {
   0% {
     -webkit-transform: rotate(0deg);
     transform: rotate(0deg)
   }
 
   to {
     -webkit-transform: rotate(1turn);
     transform: rotate(1turn)
   }
 }
 
 @keyframes fa-spin {
   0% {
     -webkit-transform: rotate(0deg);
     transform: rotate(0deg)
   }
 
   to {
     -webkit-transform: rotate(1turn);
     transform: rotate(1turn)
   }
 }
 
 .fa-rotate-90 {
   -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
   -webkit-transform: rotate(90deg);
   transform: rotate(90deg)
 }
 
 .fa-rotate-180 {
   -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
   -webkit-transform: rotate(180deg);
   transform: rotate(180deg)
 }
 
 .fa-rotate-270 {
   -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
   -webkit-transform: rotate(270deg);
   transform: rotate(270deg)
 }
 
 .fa-flip-horizontal {
   -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
   -webkit-transform: scaleX(-1);
   transform: scaleX(-1)
 }
 
 .fa-flip-vertical {
   -webkit-transform: scaleY(-1);
   transform: scaleY(-1)
 }
 
 .fa-flip-both,
 .fa-flip-horizontal.fa-flip-vertical,
 .fa-flip-vertical {
   -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)"
 }
 
 .fa-flip-both,
 .fa-flip-horizontal.fa-flip-vertical {
   -webkit-transform: scale(-1);
   transform: scale(-1)
 }
 
 :root .fa-flip-both,
 :root .fa-flip-horizontal,
 :root .fa-flip-vertical,
 :root .fa-rotate-90,
 :root .fa-rotate-180,
 :root .fa-rotate-270 {
   -webkit-filter: none;
   filter: none
 }
 
 .fa-stack {
   display: inline-block;
   height: 2em;
   line-height: 2em;
   position: relative;
   vertical-align: middle;
   width: 2.5em
 }
 
 .fa-stack-1x,
 .fa-stack-2x {
   left: 0;
   position: absolute;
   text-align: center;
   width: 100%
 }
 
 .fa-stack-1x {
   line-height: inherit
 }
 
 .fa-stack-2x {
   font-size: 2em
 }
 
 .fa-inverse {
   color: #fff
 }
 
 .fa-500px:before {
   content: "\f26e"
 }
 
 .fa-accessible-icon:before {
   content: "\f368"
 }
 
 .fa-accusoft:before {
   content: "\f369"
 }
 
 .fa-acquisitions-incorporated:before {
   content: "\f6af"
 }
 
 .fa-ad:before {
   content: "\f641"
 }
 
 .fa-address-book:before {
   content: "\f2b9"
 }
 
 .fa-address-card:before {
   content: "\f2bb"
 }
 
 .fa-adjust:before {
   content: "\f042"
 }
 
 .fa-adn:before {
   content: "\f170"
 }
 
 .fa-adobe:before {
   content: "\f778"
 }
 
 .fa-adversal:before {
   content: "\f36a"
 }
 
 .fa-affiliatetheme:before {
   content: "\f36b"
 }
 
 .fa-air-freshener:before {
   content: "\f5d0"
 }
 
 .fa-airbnb:before {
   content: "\f834"
 }
 
 .fa-algolia:before {
   content: "\f36c"
 }
 
 .fa-align-center:before {
   content: "\f037"
 }
 
 .fa-align-justify:before {
   content: "\f039"
 }
 
 .fa-align-left:before {
   content: "\f036"
 }
 
 .fa-align-right:before {
   content: "\f038"
 }
 
 .fa-alipay:before {
   content: "\f642"
 }
 
 .fa-allergies:before {
   content: "\f461"
 }
 
 .fa-amazon:before {
   content: "\f270"
 }
 
 .fa-amazon-pay:before {
   content: "\f42c"
 }
 
 .fa-ambulance:before {
   content: "\f0f9"
 }
 
 .fa-american-sign-language-interpreting:before {
   content: "\f2a3"
 }
 
 .fa-amilia:before {
   content: "\f36d"
 }
 
 .fa-anchor:before {
   content: "\f13d"
 }
 
 .fa-android:before {
   content: "\f17b"
 }
 
 .fa-angellist:before {
   content: "\f209"
 }
 
 .fa-angle-double-down:before {
   content: "\f103"
 }
 
 .fa-angle-double-left:before {
   content: "\f100"
 }
 
 .fa-angle-double-right:before {
   content: "\f101"
 }
 
 .fa-angle-double-up:before {
   content: "\f102"
 }
 
 .fa-angle-down:before {
   content: "\f107"
 }
 
 .fa-angle-left:before {
   content: "\f104"
 }
 
 .fa-angle-right:before {
   content: "\f105"
 }
 
 .fa-angle-up:before {
   content: "\f106"
 }
 
 .fa-angry:before {
   content: "\f556"
 }
 
 .fa-angrycreative:before {
   content: "\f36e"
 }
 
 .fa-angular:before {
   content: "\f420"
 }
 
 .fa-ankh:before {
   content: "\f644"
 }
 
 .fa-app-store:before {
   content: "\f36f"
 }
 
 .fa-app-store-ios:before {
   content: "\f370"
 }
 
 .fa-apper:before {
   content: "\f371"
 }
 
 .fa-apple:before {
   content: "\f179"
 }
 
 .fa-apple-alt:before {
   content: "\f5d1"
 }
 
 .fa-apple-pay:before {
   content: "\f415"
 }
 
 .fa-archive:before {
   content: "\f187"
 }
 
 .fa-archway:before {
   content: "\f557"
 }
 
 .fa-arrow-alt-circle-down:before {
   content: "\f358"
 }
 
 .fa-arrow-alt-circle-left:before {
   content: "\f359"
 }
 
 .fa-arrow-alt-circle-right:before {
   content: "\f35a"
 }
 
 .fa-arrow-alt-circle-up:before {
   content: "\f35b"
 }
 
 .fa-arrow-circle-down:before {
   content: "\f0ab"
 }
 
 .fa-arrow-circle-left:before {
   content: "\f0a8"
 }
 
 .fa-arrow-circle-right:before {
   content: "\f0a9"
 }
 
 .fa-arrow-circle-up:before {
   content: "\f0aa"
 }
 
 .fa-arrow-down:before {
   content: "\f063"
 }
 
 .fa-arrow-left:before {
   content: "\f060"
 }
 
 .fa-arrow-right:before {
   content: "\f061"
 }
 
 .fa-arrow-up:before {
   content: "\f062"
 }
 
 .fa-arrows-alt:before {
   content: "\f0b2"
 }
 
 .fa-arrows-alt-h:before {
   content: "\f337"
 }
 
 .fa-arrows-alt-v:before {
   content: "\f338"
 }
 
 .fa-artstation:before {
   content: "\f77a"
 }
 
 .fa-assistive-listening-systems:before {
   content: "\f2a2"
 }
 
 .fa-asterisk:before {
   content: "\f069"
 }
 
 .fa-asymmetrik:before {
   content: "\f372"
 }
 
 .fa-at:before {
   content: "\f1fa"
 }
 
 .fa-atlas:before {
   content: "\f558"
 }
 
 .fa-atlassian:before {
   content: "\f77b"
 }
 
 .fa-atom:before {
   content: "\f5d2"
 }
 
 .fa-audible:before {
   content: "\f373"
 }
 
 .fa-audio-description:before {
   content: "\f29e"
 }
 
 .fa-autoprefixer:before {
   content: "\f41c"
 }
 
 .fa-avianex:before {
   content: "\f374"
 }
 
 .fa-aviato:before {
   content: "\f421"
 }
 
 .fa-award:before {
   content: "\f559"
 }
 
 .fa-aws:before {
   content: "\f375"
 }
 
 .fa-baby:before {
   content: "\f77c"
 }
 
 .fa-baby-carriage:before {
   content: "\f77d"
 }
 
 .fa-backspace:before {
   content: "\f55a"
 }
 
 .fa-backward:before {
   content: "\f04a"
 }
 
 .fa-bacon:before {
   content: "\f7e5"
 }
 
 .fa-balance-scale:before {
   content: "\f24e"
 }
 
 .fa-balance-scale-left:before {
   content: "\f515"
 }
 
 .fa-balance-scale-right:before {
   content: "\f516"
 }
 
 .fa-ban:before {
   content: "\f05e"
 }
 
 .fa-band-aid:before {
   content: "\f462"
 }
 
 .fa-bandcamp:before {
   content: "\f2d5"
 }
 
 .fa-barcode:before {
   content: "\f02a"
 }
 
 .fa-bars:before {
   content: "\f0c9"
 }
 
 .fa-baseball-ball:before {
   content: "\f433"
 }
 
 .fa-basketball-ball:before {
   content: "\f434"
 }
 
 .fa-bath:before {
   content: "\f2cd"
 }
 
 .fa-battery-empty:before {
   content: "\f244"
 }
 
 .fa-battery-full:before {
   content: "\f240"
 }
 
 .fa-battery-half:before {
   content: "\f242"
 }
 
 .fa-battery-quarter:before {
   content: "\f243"
 }
 
 .fa-battery-three-quarters:before {
   content: "\f241"
 }
 
 .fa-battle-net:before {
   content: "\f835"
 }
 
 .fa-bed:before {
   content: "\f236"
 }
 
 .fa-beer:before {
   content: "\f0fc"
 }
 
 .fa-behance:before {
   content: "\f1b4"
 }
 
 .fa-behance-square:before {
   content: "\f1b5"
 }
 
 .fa-bell:before {
   content: "\f0f3"
 }
 
 .fa-bell-slash:before {
   content: "\f1f6"
 }
 
 .fa-bezier-curve:before {
   content: "\f55b"
 }
 
 .fa-bible:before {
   content: "\f647"
 }
 
 .fa-bicycle:before {
   content: "\f206"
 }
 
 .fa-biking:before {
   content: "\f84a"
 }
 
 .fa-bimobject:before {
   content: "\f378"
 }
 
 .fa-binoculars:before {
   content: "\f1e5"
 }
 
 .fa-biohazard:before {
   content: "\f780"
 }
 
 .fa-birthday-cake:before {
   content: "\f1fd"
 }
 
 .fa-bitbucket:before {
   content: "\f171"
 }
 
 .fa-bitcoin:before {
   content: "\f379"
 }
 
 .fa-bity:before {
   content: "\f37a"
 }
 
 .fa-black-tie:before {
   content: "\f27e"
 }
 
 .fa-blackberry:before {
   content: "\f37b"
 }
 
 .fa-blender:before {
   content: "\f517"
 }
 
 .fa-blender-phone:before {
   content: "\f6b6"
 }
 
 .fa-blind:before {
   content: "\f29d"
 }
 
 .fa-blog:before {
   content: "\f781"
 }
 
 .fa-blogger:before {
   content: "\f37c"
 }
 
 .fa-blogger-b:before {
   content: "\f37d"
 }
 
 .fa-bluetooth:before {
   content: "\f293"
 }
 
 .fa-bluetooth-b:before {
   content: "\f294"
 }
 
 .fa-bold:before {
   content: "\f032"
 }
 
 .fa-bolt:before {
   content: "\f0e7"
 }
 
 .fa-bomb:before {
   content: "\f1e2"
 }
 
 .fa-bone:before {
   content: "\f5d7"
 }
 
 .fa-bong:before {
   content: "\f55c"
 }
 
 .fa-book:before {
   content: "\f02d"
 }
 
 .fa-book-dead:before {
   content: "\f6b7"
 }
 
 .fa-book-medical:before {
   content: "\f7e6"
 }
 
 .fa-book-open:before {
   content: "\f518"
 }
 
 .fa-book-reader:before {
   content: "\f5da"
 }
 
 .fa-bookmark:before {
   content: "\f02e"
 }
 
 .fa-bootstrap:before {
   content: "\f836"
 }
 
 .fa-border-all:before {
   content: "\f84c"
 }
 
 .fa-border-none:before {
   content: "\f850"
 }
 
 .fa-border-style:before {
   content: "\f853"
 }
 
 .fa-bowling-ball:before {
   content: "\f436"
 }
 
 .fa-box:before {
   content: "\f466"
 }
 
 .fa-box-open:before {
   content: "\f49e"
 }
 
 .fa-boxes:before {
   content: "\f468"
 }
 
 .fa-braille:before {
   content: "\f2a1"
 }
 
 .fa-brain:before {
   content: "\f5dc"
 }
 
 .fa-bread-slice:before {
   content: "\f7ec"
 }
 
 .fa-briefcase:before {
   content: "\f0b1"
 }
 
 .fa-briefcase-medical:before {
   content: "\f469"
 }
 
 .fa-broadcast-tower:before {
   content: "\f519"
 }
 
 .fa-broom:before {
   content: "\f51a"
 }
 
 .fa-brush:before {
   content: "\f55d"
 }
 
 .fa-btc:before {
   content: "\f15a"
 }
 
 .fa-buffer:before {
   content: "\f837"
 }
 
 .fa-bug:before {
   content: "\f188"
 }
 
 .fa-building:before {
   content: "\f1ad"
 }
 
 .fa-bullhorn:before {
   content: "\f0a1"
 }
 
 .fa-bullseye:before {
   content: "\f140"
 }
 
 .fa-burn:before {
   content: "\f46a"
 }
 
 .fa-buromobelexperte:before {
   content: "\f37f"
 }
 
 .fa-bus:before {
   content: "\f207"
 }
 
 .fa-bus-alt:before {
   content: "\f55e"
 }
 
 .fa-business-time:before {
   content: "\f64a"
 }
 
 .fa-buy-n-large:before {
   content: "\f8a6"
 }
 
 .fa-buysellads:before {
   content: "\f20d"
 }
 
 .fa-calculator:before {
   content: "\f1ec"
 }
 
 .fa-calendar:before {
   content: "\f133"
 }
 
 .fa-calendar-alt:before {
   content: "\f073"
 }
 
 .fa-calendar-check:before {
   content: "\f274"
 }
 
 .fa-calendar-day:before {
   content: "\f783"
 }
 
 .fa-calendar-minus:before {
   content: "\f272"
 }
 
 .fa-calendar-plus:before {
   content: "\f271"
 }
 
 .fa-calendar-times:before {
   content: "\f273"
 }
 
 .fa-calendar-week:before {
   content: "\f784"
 }
 
 .fa-camera:before {
   content: "\f030"
 }
 
 .fa-camera-retro:before {
   content: "\f083"
 }
 
 .fa-campground:before {
   content: "\f6bb"
 }
 
 .fa-canadian-maple-leaf:before {
   content: "\f785"
 }
 
 .fa-candy-cane:before {
   content: "\f786"
 }
 
 .fa-cannabis:before {
   content: "\f55f"
 }
 
 .fa-capsules:before {
   content: "\f46b"
 }
 
 .fa-car:before {
   content: "\f1b9"
 }
 
 .fa-car-alt:before {
   content: "\f5de"
 }
 
 .fa-car-battery:before {
   content: "\f5df"
 }
 
 .fa-car-crash:before {
   content: "\f5e1"
 }
 
 .fa-car-side:before {
   content: "\f5e4"
 }
 
 .fa-caret-down:before {
   content: "\f0d7"
 }
 
 .fa-caret-left:before {
   content: "\f0d9"
 }
 
 .fa-caret-right:before {
   content: "\f0da"
 }
 
 .fa-caret-square-down:before {
   content: "\f150"
 }
 
 .fa-caret-square-left:before {
   content: "\f191"
 }
 
 .fa-caret-square-right:before {
   content: "\f152"
 }
 
 .fa-caret-square-up:before {
   content: "\f151"
 }
 
 .fa-caret-up:before {
   content: "\f0d8"
 }
 
 .fa-carrot:before {
   content: "\f787"
 }
 
 .fa-cart-arrow-down:before {
   content: "\f218"
 }
 
 .fa-cart-plus:before {
   content: "\f217"
 }
 
 .fa-cash-register:before {
   content: "\f788"
 }
 
 .fa-cat:before {
   content: "\f6be"
 }
 
 .fa-cc-amazon-pay:before {
   content: "\f42d"
 }
 
 .fa-cc-amex:before {
   content: "\f1f3"
 }
 
 .fa-cc-apple-pay:before {
   content: "\f416"
 }
 
 .fa-cc-diners-club:before {
   content: "\f24c"
 }
 
 .fa-cc-discover:before {
   content: "\f1f2"
 }
 
 .fa-cc-jcb:before {
   content: "\f24b"
 }
 
 .fa-cc-mastercard:before {
   content: "\f1f1"
 }
 
 .fa-cc-paypal:before {
   content: "\f1f4"
 }
 
 .fa-cc-stripe:before {
   content: "\f1f5"
 }
 
 .fa-cc-visa:before {
   content: "\f1f0"
 }
 
 .fa-centercode:before {
   content: "\f380"
 }
 
 .fa-centos:before {
   content: "\f789"
 }
 
 .fa-certificate:before {
   content: "\f0a3"
 }
 
 .fa-chair:before {
   content: "\f6c0"
 }
 
 .fa-chalkboard:before {
   content: "\f51b"
 }
 
 .fa-chalkboard-teacher:before {
   content: "\f51c"
 }
 
 .fa-charging-station:before {
   content: "\f5e7"
 }
 
 .fa-chart-area:before {
   content: "\f1fe"
 }
 
 .fa-chart-bar:before {
   content: "\f080"
 }
 
 .fa-chart-line:before {
   content: "\f201"
 }
 
 .fa-chart-pie:before {
   content: "\f200"
 }
 
 .fa-check:before {
   content: "\f00c"
 }
 
 .fa-check-circle:before {
   content: "\f058"
 }
 
 .fa-check-double:before {
   content: "\f560"
 }
 
 .fa-check-square:before {
   content: "\f14a"
 }
 
 .fa-cheese:before {
   content: "\f7ef"
 }
 
 .fa-chess:before {
   content: "\f439"
 }
 
 .fa-chess-bishop:before {
   content: "\f43a"
 }
 
 .fa-chess-board:before {
   content: "\f43c"
 }
 
 .fa-chess-king:before {
   content: "\f43f"
 }
 
 .fa-chess-knight:before {
   content: "\f441"
 }
 
 .fa-chess-pawn:before {
   content: "\f443"
 }
 
 .fa-chess-queen:before {
   content: "\f445"
 }
 
 .fa-chess-rook:before {
   content: "\f447"
 }
 
 .fa-chevron-circle-down:before {
   content: "\f13a"
 }
 
 .fa-chevron-circle-left:before {
   content: "\f137"
 }
 
 .fa-chevron-circle-right:before {
   content: "\f138"
 }
 
 .fa-chevron-circle-up:before {
   content: "\f139"
 }
 
 .fa-chevron-down:before {
   content: "\f078"
 }
 
 .fa-chevron-left:before {
   content: "\f053"
 }
 
 .fa-chevron-right:before {
   content: "\f054"
 }
 
 .fa-chevron-up:before {
   content: "\f077"
 }
 
 .fa-child:before {
   content: "\f1ae"
 }
 
 .fa-chrome:before {
   content: "\f268"
 }
 
 .fa-chromecast:before {
   content: "\f838"
 }
 
 .fa-church:before {
   content: "\f51d"
 }
 
 .fa-circle:before {
   content: "\f111"
 }
 
 .fa-circle-notch:before {
   content: "\f1ce"
 }
 
 .fa-city:before {
   content: "\f64f"
 }
 
 .fa-clinic-medical:before {
   content: "\f7f2"
 }
 
 .fa-clipboard:before {
   content: "\f328"
 }
 
 .fa-clipboard-check:before {
   content: "\f46c"
 }
 
 .fa-clipboard-list:before {
   content: "\f46d"
 }
 
 .fa-clock:before {
   content: "\f017"
 }
 
 .fa-clone:before {
   content: "\f24d"
 }
 
 .fa-closed-captioning:before {
   content: "\f20a"
 }
 
 .fa-cloud:before {
   content: "\f0c2"
 }
 
 .fa-cloud-download-alt:before {
   content: "\f381"
 }
 
 .fa-cloud-meatball:before {
   content: "\f73b"
 }
 
 .fa-cloud-moon:before {
   content: "\f6c3"
 }
 
 .fa-cloud-moon-rain:before {
   content: "\f73c"
 }
 
 .fa-cloud-rain:before {
   content: "\f73d"
 }
 
 .fa-cloud-showers-heavy:before {
   content: "\f740"
 }
 
 .fa-cloud-sun:before {
   content: "\f6c4"
 }
 
 .fa-cloud-sun-rain:before {
   content: "\f743"
 }
 
 .fa-cloud-upload-alt:before {
   content: "\f382"
 }
 
 .fa-cloudscale:before {
   content: "\f383"
 }
 
 .fa-cloudsmith:before {
   content: "\f384"
 }
 
 .fa-cloudversify:before {
   content: "\f385"
 }
 
 .fa-cocktail:before {
   content: "\f561"
 }
 
 .fa-code:before {
   content: "\f121"
 }
 
 .fa-code-branch:before {
   content: "\f126"
 }
 
 .fa-codepen:before {
   content: "\f1cb"
 }
 
 .fa-codiepie:before {
   content: "\f284"
 }
 
 .fa-coffee:before {
   content: "\f0f4"
 }
 
 .fa-cog:before {
   content: "\f013"
 }
 
 .fa-cogs:before {
   content: "\f085"
 }
 
 .fa-coins:before {
   content: "\f51e"
 }
 
 .fa-columns:before {
   content: "\f0db"
 }
 
 .fa-comment:before {
   content: "\f075"
 }
 
 .fa-comment-alt:before {
   content: "\f27a"
 }
 
 .fa-comment-dollar:before {
   content: "\f651"
 }
 
 .fa-comment-dots:before {
   content: "\f4ad"
 }
 
 .fa-comment-medical:before {
   content: "\f7f5"
 }
 
 .fa-comment-slash:before {
   content: "\f4b3"
 }
 
 .fa-comments:before {
   content: "\f086"
 }
 
 .fa-comments-dollar:before {
   content: "\f653"
 }
 
 .fa-compact-disc:before {
   content: "\f51f"
 }
 
 .fa-compass:before {
   content: "\f14e"
 }
 
 .fa-compress:before {
   content: "\f066"
 }
 
 .fa-compress-arrows-alt:before {
   content: "\f78c"
 }
 
 .fa-concierge-bell:before {
   content: "\f562"
 }
 
 .fa-confluence:before {
   content: "\f78d"
 }
 
 .fa-connectdevelop:before {
   content: "\f20e"
 }
 
 .fa-contao:before {
   content: "\f26d"
 }
 
 .fa-cookie:before {
   content: "\f563"
 }
 
 .fa-cookie-bite:before {
   content: "\f564"
 }
 
 .fa-copy:before {
   content: "\f0c5"
 }
 
 .fa-copyright:before {
   content: "\f1f9"
 }
 
 .fa-cotton-bureau:before {
   content: "\f89e"
 }
 
 .fa-couch:before {
   content: "\f4b8"
 }
 
 .fa-cpanel:before {
   content: "\f388"
 }
 
 .fa-creative-commons:before {
   content: "\f25e"
 }
 
 .fa-creative-commons-by:before {
   content: "\f4e7"
 }
 
 .fa-creative-commons-nc:before {
   content: "\f4e8"
 }
 
 .fa-creative-commons-nc-eu:before {
   content: "\f4e9"
 }
 
 .fa-creative-commons-nc-jp:before {
   content: "\f4ea"
 }
 
 .fa-creative-commons-nd:before {
   content: "\f4eb"
 }
 
 .fa-creative-commons-pd:before {
   content: "\f4ec"
 }
 
 .fa-creative-commons-pd-alt:before {
   content: "\f4ed"
 }
 
 .fa-creative-commons-remix:before {
   content: "\f4ee"
 }
 
 .fa-creative-commons-sa:before {
   content: "\f4ef"
 }
 
 .fa-creative-commons-sampling:before {
   content: "\f4f0"
 }
 
 .fa-creative-commons-sampling-plus:before {
   content: "\f4f1"
 }
 
 .fa-creative-commons-share:before {
   content: "\f4f2"
 }
 
 .fa-creative-commons-zero:before {
   content: "\f4f3"
 }
 
 .fa-credit-card:before {
   content: "\f09d"
 }
 
 .fa-critical-role:before {
   content: "\f6c9"
 }
 
 .fa-crop:before {
   content: "\f125"
 }
 
 .fa-crop-alt:before {
   content: "\f565"
 }
 
 .fa-cross:before {
   content: "\f654"
 }
 
 .fa-crosshairs:before {
   content: "\f05b"
 }
 
 .fa-crow:before {
   content: "\f520"
 }
 
 .fa-crown:before {
   content: "\f521"
 }
 
 .fa-crutch:before {
   content: "\f7f7"
 }
 
 .fa-css3:before {
   content: "\f13c"
 }
 
 .fa-css3-alt:before {
   content: "\f38b"
 }
 
 .fa-cube:before {
   content: "\f1b2"
 }
 
 .fa-cubes:before {
   content: "\f1b3"
 }
 
 .fa-cut:before {
   content: "\f0c4"
 }
 
 .fa-cuttlefish:before {
   content: "\f38c"
 }
 
 .fa-d-and-d:before {
   content: "\f38d"
 }
 
 .fa-d-and-d-beyond:before {
   content: "\f6ca"
 }
 
 .fa-dashcube:before {
   content: "\f210"
 }
 
 .fa-database:before {
   content: "\f1c0"
 }
 
 .fa-deaf:before {
   content: "\f2a4"
 }
 
 .fa-delicious:before {
   content: "\f1a5"
 }
 
 .fa-democrat:before {
   content: "\f747"
 }
 
 .fa-deploydog:before {
   content: "\f38e"
 }
 
 .fa-deskpro:before {
   content: "\f38f"
 }
 
 .fa-desktop:before {
   content: "\f108"
 }
 
 .fa-dev:before {
   content: "\f6cc"
 }
 
 .fa-deviantart:before {
   content: "\f1bd"
 }
 
 .fa-dharmachakra:before {
   content: "\f655"
 }
 
 .fa-dhl:before {
   content: "\f790"
 }
 
 .fa-diagnoses:before {
   content: "\f470"
 }
 
 .fa-diaspora:before {
   content: "\f791"
 }
 
 .fa-dice:before {
   content: "\f522"
 }
 
 .fa-dice-d20:before {
   content: "\f6cf"
 }
 
 .fa-dice-d6:before {
   content: "\f6d1"
 }
 
 .fa-dice-five:before {
   content: "\f523"
 }
 
 .fa-dice-four:before {
   content: "\f524"
 }
 
 .fa-dice-one:before {
   content: "\f525"
 }
 
 .fa-dice-six:before {
   content: "\f526"
 }
 
 .fa-dice-three:before {
   content: "\f527"
 }
 
 .fa-dice-two:before {
   content: "\f528"
 }
 
 .fa-digg:before {
   content: "\f1a6"
 }
 
 .fa-digital-ocean:before {
   content: "\f391"
 }
 
 .fa-digital-tachograph:before {
   content: "\f566"
 }
 
 .fa-directions:before {
   content: "\f5eb"
 }
 
 .fa-discord:before {
   content: "\f392"
 }
 
 .fa-discourse:before {
   content: "\f393"
 }
 
 .fa-divide:before {
   content: "\f529"
 }
 
 .fa-dizzy:before {
   content: "\f567"
 }
 
 .fa-dna:before {
   content: "\f471"
 }
 
 .fa-dochub:before {
   content: "\f394"
 }
 
 .fa-docker:before {
   content: "\f395"
 }
 
 .fa-dog:before {
   content: "\f6d3"
 }
 
 .fa-dollar-sign:before {
   content: "\f155"
 }
 
 .fa-dolly:before {
   content: "\f472"
 }
 
 .fa-dolly-flatbed:before {
   content: "\f474"
 }
 
 .fa-donate:before {
   content: "\f4b9"
 }
 
 .fa-door-closed:before {
   content: "\f52a"
 }
 
 .fa-door-open:before {
   content: "\f52b"
 }
 
 .fa-dot-circle:before {
   content: "\f192"
 }
 
 .fa-dove:before {
   content: "\f4ba"
 }
 
 .fa-download:before {
   content: "\f019"
 }
 
 .fa-draft2digital:before {
   content: "\f396"
 }
 
 .fa-drafting-compass:before {
   content: "\f568"
 }
 
 .fa-dragon:before {
   content: "\f6d5"
 }
 
 .fa-draw-polygon:before {
   content: "\f5ee"
 }
 
 .fa-dribbble:before {
   content: "\f17d"
 }
 
 .fa-dribbble-square:before {
   content: "\f397"
 }
 
 .fa-dropbox:before {
   content: "\f16b"
 }
 
 .fa-drum:before {
   content: "\f569"
 }
 
 .fa-drum-steelpan:before {
   content: "\f56a"
 }
 
 .fa-drumstick-bite:before {
   content: "\f6d7"
 }
 
 .fa-drupal:before {
   content: "\f1a9"
 }
 
 .fa-dumbbell:before {
   content: "\f44b"
 }
 
 .fa-dumpster:before {
   content: "\f793"
 }
 
 .fa-dumpster-fire:before {
   content: "\f794"
 }
 
 .fa-dungeon:before {
   content: "\f6d9"
 }
 
 .fa-dyalog:before {
   content: "\f399"
 }
 
 .fa-earlybirds:before {
   content: "\f39a"
 }
 
 .fa-ebay:before {
   content: "\f4f4"
 }
 
 .fa-edge:before {
   content: "\f282"
 }
 
 .fa-edit:before {
   content: "\f044"
 }
 
 .fa-egg:before {
   content: "\f7fb"
 }
 
 .fa-eject:before {
   content: "\f052"
 }
 
 .fa-elementor:before {
   content: "\f430"
 }
 
 .fa-ellipsis-h:before {
   content: "\f141"
 }
 
 .fa-ellipsis-v:before {
   content: "\f142"
 }
 
 .fa-ello:before {
   content: "\f5f1"
 }
 
 .fa-ember:before {
   content: "\f423"
 }
 
 .fa-empire:before {
   content: "\f1d1"
 }
 
 .fa-envelope:before {
   content: "\f0e0"
 }
 
 .fa-envelope-open:before {
   content: "\f2b6"
 }
 
 .fa-envelope-open-text:before {
   content: "\f658"
 }
 
 .fa-envelope-square:before {
   content: "\f199"
 }
 
 .fa-envira:before {
   content: "\f299"
 }
 
 .fa-equals:before {
   content: "\f52c"
 }
 
 .fa-eraser:before {
   content: "\f12d"
 }
 
 .fa-erlang:before {
   content: "\f39d"
 }
 
 .fa-ethereum:before {
   content: "\f42e"
 }
 
 .fa-ethernet:before {
   content: "\f796"
 }
 
 .fa-etsy:before {
   content: "\f2d7"
 }
 
 .fa-euro-sign:before {
   content: "\f153"
 }
 
 .fa-evernote:before {
   content: "\f839"
 }
 
 .fa-exchange-alt:before {
   content: "\f362"
 }
 
 .fa-exclamation:before {
   content: "\f12a"
 }
 
 .fa-exclamation-circle:before {
   content: "\f06a"
 }
 
 .fa-exclamation-triangle:before {
   content: "\f071"
 }
 
 .fa-expand:before {
   content: "\f065"
 }
 
 .fa-expand-arrows-alt:before {
   content: "\f31e"
 }
 
 .fa-expeditedssl:before {
   content: "\f23e"
 }
 
 .fa-external-link-alt:before {
   content: "\f35d"
 }
 
 .fa-external-link-square-alt:before {
   content: "\f360"
 }
 
 .fa-eye:before {
   content: "\f06e"
 }
 
 .fa-eye-dropper:before {
   content: "\f1fb"
 }
 
 .fa-eye-slash:before {
   content: "\f070"
 }
 
 .fa-facebook:before {
   content: "\f09a"
 }
 
 .fa-facebook-f:before {
   content: "\f39e"
 }
 
 .fa-facebook-messenger:before {
   content: "\f39f"
 }
 
 .fa-facebook-square:before {
   content: "\f082"
 }
 
 .fa-fan:before {
   content: "\f863"
 }
 
 .fa-fantasy-flight-games:before {
   content: "\f6dc"
 }
 
 .fa-fast-backward:before {
   content: "\f049"
 }
 
 .fa-fast-forward:before {
   content: "\f050"
 }
 
 .fa-fax:before {
   content: "\f1ac"
 }
 
 .fa-feather:before {
   content: "\f52d"
 }
 
 .fa-feather-alt:before {
   content: "\f56b"
 }
 
 .fa-fedex:before {
   content: "\f797"
 }
 
 .fa-fedora:before {
   content: "\f798"
 }
 
 .fa-female:before {
   content: "\f182"
 }
 
 .fa-fighter-jet:before {
   content: "\f0fb"
 }
 
 .fa-figma:before {
   content: "\f799"
 }
 
 .fa-file:before {
   content: "\f15b"
 }
 
 .fa-file-alt:before {
   content: "\f15c"
 }
 
 .fa-file-archive:before {
   content: "\f1c6"
 }
 
 .fa-file-audio:before {
   content: "\f1c7"
 }
 
 .fa-file-code:before {
   content: "\f1c9"
 }
 
 .fa-file-contract:before {
   content: "\f56c"
 }
 
 .fa-file-csv:before {
   content: "\f6dd"
 }
 
 .fa-file-download:before {
   content: "\f56d"
 }
 
 .fa-file-excel:before {
   content: "\f1c3"
 }
 
 .fa-file-export:before {
   content: "\f56e"
 }
 
 .fa-file-image:before {
   content: "\f1c5"
 }
 
 .fa-file-import:before {
   content: "\f56f"
 }
 
 .fa-file-invoice:before {
   content: "\f570"
 }
 
 .fa-file-invoice-dollar:before {
   content: "\f571"
 }
 
 .fa-file-medical:before {
   content: "\f477"
 }
 
 .fa-file-medical-alt:before {
   content: "\f478"
 }
 
 .fa-file-pdf:before {
   content: "\f1c1"
 }
 
 .fa-file-powerpoint:before {
   content: "\f1c4"
 }
 
 .fa-file-prescription:before {
   content: "\f572"
 }
 
 .fa-file-signature:before {
   content: "\f573"
 }
 
 .fa-file-upload:before {
   content: "\f574"
 }
 
 .fa-file-video:before {
   content: "\f1c8"
 }
 
 .fa-file-word:before {
   content: "\f1c2"
 }
 
 .fa-fill:before {
   content: "\f575"
 }
 
 .fa-fill-drip:before {
   content: "\f576"
 }
 
 .fa-film:before {
   content: "\f008"
 }
 
 .fa-filter:before {
   content: "\f0b0"
 }
 
 .fa-fingerprint:before {
   content: "\f577"
 }
 
 .fa-fire:before {
   content: "\f06d"
 }
 
 .fa-fire-alt:before {
   content: "\f7e4"
 }
 
 .fa-fire-extinguisher:before {
   content: "\f134"
 }
 
 .fa-firefox:before {
   content: "\f269"
 }
 
 .fa-first-aid:before {
   content: "\f479"
 }
 
 .fa-first-order:before {
   content: "\f2b0"
 }
 
 .fa-first-order-alt:before {
   content: "\f50a"
 }
 
 .fa-firstdraft:before {
   content: "\f3a1"
 }
 
 .fa-fish:before {
   content: "\f578"
 }
 
 .fa-fist-raised:before {
   content: "\f6de"
 }
 
 .fa-flag:before {
   content: "\f024"
 }
 
 .fa-flag-checkered:before {
   content: "\f11e"
 }
 
 .fa-flag-usa:before {
   content: "\f74d"
 }
 
 .fa-flask:before {
   content: "\f0c3"
 }
 
 .fa-flickr:before {
   content: "\f16e"
 }
 
 .fa-flipboard:before {
   content: "\f44d"
 }
 
 .fa-flushed:before {
   content: "\f579"
 }
 
 .fa-fly:before {
   content: "\f417"
 }
 
 .fa-folder:before {
   content: "\f07b"
 }
 
 .fa-folder-minus:before {
   content: "\f65d"
 }
 
 .fa-folder-open:before {
   content: "\f07c"
 }
 
 .fa-folder-plus:before {
   content: "\f65e"
 }
 
 .fa-font:before {
   content: "\f031"
 }
 
 .fa-font-awesome:before {
   content: "\f2b4"
 }
 
 .fa-font-awesome-alt:before {
   content: "\f35c"
 }
 
 .fa-font-awesome-flag:before {
   content: "\f425"
 }
 
 .fa-font-awesome-logo-full:before {
   content: "\f4e6"
 }
 
 .fa-fonticons:before {
   content: "\f280"
 }
 
 .fa-fonticons-fi:before {
   content: "\f3a2"
 }
 
 .fa-football-ball:before {
   content: "\f44e"
 }
 
 .fa-fort-awesome:before {
   content: "\f286"
 }
 
 .fa-fort-awesome-alt:before {
   content: "\f3a3"
 }
 
 .fa-forumbee:before {
   content: "\f211"
 }
 
 .fa-forward:before {
   content: "\f04e"
 }
 
 .fa-foursquare:before {
   content: "\f180"
 }
 
 .fa-free-code-camp:before {
   content: "\f2c5"
 }
 
 .fa-freebsd:before {
   content: "\f3a4"
 }
 
 .fa-frog:before {
   content: "\f52e"
 }
 
 .fa-frown:before {
   content: "\f119"
 }
 
 .fa-frown-open:before {
   content: "\f57a"
 }
 
 .fa-fulcrum:before {
   content: "\f50b"
 }
 
 .fa-funnel-dollar:before {
   content: "\f662"
 }
 
 .fa-futbol:before {
   content: "\f1e3"
 }
 
 .fa-galactic-republic:before {
   content: "\f50c"
 }
 
 .fa-galactic-senate:before {
   content: "\f50d"
 }
 
 .fa-gamepad:before {
   content: "\f11b"
 }
 
 .fa-gas-pump:before {
   content: "\f52f"
 }
 
 .fa-gavel:before {
   content: "\f0e3"
 }
 
 .fa-gem:before {
   content: "\f3a5"
 }
 
 .fa-genderless:before {
   content: "\f22d"
 }
 
 .fa-get-pocket:before {
   content: "\f265"
 }
 
 .fa-gg:before {
   content: "\f260"
 }
 
 .fa-gg-circle:before {
   content: "\f261"
 }
 
 .fa-ghost:before {
   content: "\f6e2"
 }
 
 .fa-gift:before {
   content: "\f06b"
 }
 
 .fa-gifts:before {
   content: "\f79c"
 }
 
 .fa-git:before {
   content: "\f1d3"
 }
 
 .fa-git-alt:before {
   content: "\f841"
 }
 
 .fa-git-square:before {
   content: "\f1d2"
 }
 
 .fa-github:before {
   content: "\f09b"
 }
 
 .fa-github-alt:before {
   content: "\f113"
 }
 
 .fa-github-square:before {
   content: "\f092"
 }
 
 .fa-gitkraken:before {
   content: "\f3a6"
 }
 
 .fa-gitlab:before {
   content: "\f296"
 }
 
 .fa-gitter:before {
   content: "\f426"
 }
 
 .fa-glass-cheers:before {
   content: "\f79f"
 }
 
 .fa-glass-martini:before {
   content: "\f000"
 }
 
 .fa-glass-martini-alt:before {
   content: "\f57b"
 }
 
 .fa-glass-whiskey:before {
   content: "\f7a0"
 }
 
 .fa-glasses:before {
   content: "\f530"
 }
 
 .fa-glide:before {
   content: "\f2a5"
 }
 
 .fa-glide-g:before {
   content: "\f2a6"
 }
 
 .fa-globe:before {
   content: "\f0ac"
 }
 
 .fa-globe-africa:before {
   content: "\f57c"
 }
 
 .fa-globe-americas:before {
   content: "\f57d"
 }
 
 .fa-globe-asia:before {
   content: "\f57e"
 }
 
 .fa-globe-europe:before {
   content: "\f7a2"
 }
 
 .fa-gofore:before {
   content: "\f3a7"
 }
 
 .fa-golf-ball:before {
   content: "\f450"
 }
 
 .fa-goodreads:before {
   content: "\f3a8"
 }
 
 .fa-goodreads-g:before {
   content: "\f3a9"
 }
 
 .fa-google:before {
   content: "\f1a0"
 }
 
 .fa-google-drive:before {
   content: "\f3aa"
 }
 
 .fa-google-play:before {
   content: "\f3ab"
 }
 
 .fa-google-plus:before {
   content: "\f2b3"
 }
 
 .fa-google-plus-g:before {
   content: "\f0d5"
 }
 
 .fa-google-plus-square:before {
   content: "\f0d4"
 }
 
 .fa-google-wallet:before {
   content: "\f1ee"
 }
 
 .fa-gopuram:before {
   content: "\f664"
 }
 
 .fa-graduation-cap:before {
   content: "\f19d"
 }
 
 .fa-gratipay:before {
   content: "\f184"
 }
 
 .fa-grav:before {
   content: "\f2d6"
 }
 
 .fa-greater-than:before {
   content: "\f531"
 }
 
 .fa-greater-than-equal:before {
   content: "\f532"
 }
 
 .fa-grimace:before {
   content: "\f57f"
 }
 
 .fa-grin:before {
   content: "\f580"
 }
 
 .fa-grin-alt:before {
   content: "\f581"
 }
 
 .fa-grin-beam:before {
   content: "\f582"
 }
 
 .fa-grin-beam-sweat:before {
   content: "\f583"
 }
 
 .fa-grin-hearts:before {
   content: "\f584"
 }
 
 .fa-grin-squint:before {
   content: "\f585"
 }
 
 .fa-grin-squint-tears:before {
   content: "\f586"
 }
 
 .fa-grin-stars:before {
   content: "\f587"
 }
 
 .fa-grin-tears:before {
   content: "\f588"
 }
 
 .fa-grin-tongue:before {
   content: "\f589"
 }
 
 .fa-grin-tongue-squint:before {
   content: "\f58a"
 }
 
 .fa-grin-tongue-wink:before {
   content: "\f58b"
 }
 
 .fa-grin-wink:before {
   content: "\f58c"
 }
 
 .fa-grip-horizontal:before {
   content: "\f58d"
 }
 
 .fa-grip-lines:before {
   content: "\f7a4"
 }
 
 .fa-grip-lines-vertical:before {
   content: "\f7a5"
 }
 
 .fa-grip-vertical:before {
   content: "\f58e"
 }
 
 .fa-gripfire:before {
   content: "\f3ac"
 }
 
 .fa-grunt:before {
   content: "\f3ad"
 }
 
 .fa-guitar:before {
   content: "\f7a6"
 }
 
 .fa-gulp:before {
   content: "\f3ae"
 }
 
 .fa-h-square:before {
   content: "\f0fd"
 }
 
 .fa-hacker-news:before {
   content: "\f1d4"
 }
 
 .fa-hacker-news-square:before {
   content: "\f3af"
 }
 
 .fa-hackerrank:before {
   content: "\f5f7"
 }
 
 .fa-hamburger:before {
   content: "\f805"
 }
 
 .fa-hammer:before {
   content: "\f6e3"
 }
 
 .fa-hamsa:before {
   content: "\f665"
 }
 
 .fa-hand-holding:before {
   content: "\f4bd"
 }
 
 .fa-hand-holding-heart:before {
   content: "\f4be"
 }
 
 .fa-hand-holding-usd:before {
   content: "\f4c0"
 }
 
 .fa-hand-lizard:before {
   content: "\f258"
 }
 
 .fa-hand-middle-finger:before {
   content: "\f806"
 }
 
 .fa-hand-paper:before {
   content: "\f256"
 }
 
 .fa-hand-peace:before {
   content: "\f25b"
 }
 
 .fa-hand-point-down:before {
   content: "\f0a7"
 }
 
 .fa-hand-point-left:before {
   content: "\f0a5"
 }
 
 .fa-hand-point-right:before {
   content: "\f0a4"
 }
 
 .fa-hand-point-up:before {
   content: "\f0a6"
 }
 
 .fa-hand-pointer:before {
   content: "\f25a"
 }
 
 .fa-hand-rock:before {
   content: "\f255"
 }
 
 .fa-hand-scissors:before {
   content: "\f257"
 }
 
 .fa-hand-spock:before {
   content: "\f259"
 }
 
 .fa-hands:before {
   content: "\f4c2"
 }
 
 .fa-hands-helping:before {
   content: "\f4c4"
 }
 
 .fa-handshake:before {
   content: "\f2b5"
 }
 
 .fa-hanukiah:before {
   content: "\f6e6"
 }
 
 .fa-hard-hat:before {
   content: "\f807"
 }
 
 .fa-hashtag:before {
   content: "\f292"
 }
 
 .fa-hat-cowboy:before {
   content: "\f8c0"
 }
 
 .fa-hat-cowboy-side:before {
   content: "\f8c1"
 }
 
 .fa-hat-wizard:before {
   content: "\f6e8"
 }
 
 .fa-haykal:before {
   content: "\f666"
 }
 
 .fa-hdd:before {
   content: "\f0a0"
 }
 
 .fa-heading:before {
   content: "\f1dc"
 }
 
 .fa-headphones:before {
   content: "\f025"
 }
 
 .fa-headphones-alt:before {
   content: "\f58f"
 }
 
 .fa-headset:before {
   content: "\f590"
 }
 
 .fa-heart:before {
   content: "\f004"
 }
 
 .fa-heart-broken:before {
   content: "\f7a9"
 }
 
 .fa-heartbeat:before {
   content: "\f21e"
 }
 
 .fa-helicopter:before {
   content: "\f533"
 }
 
 .fa-highlighter:before {
   content: "\f591"
 }
 
 .fa-hiking:before {
   content: "\f6ec"
 }
 
 .fa-hippo:before {
   content: "\f6ed"
 }
 
 .fa-hips:before {
   content: "\f452"
 }
 
 .fa-hire-a-helper:before {
   content: "\f3b0"
 }
 
 .fa-history:before {
   content: "\f1da"
 }
 
 .fa-hockey-puck:before {
   content: "\f453"
 }
 
 .fa-holly-berry:before {
   content: "\f7aa"
 }
 
 .fa-home:before {
   content: "\f015"
 }
 
 .fa-hooli:before {
   content: "\f427"
 }
 
 .fa-hornbill:before {
   content: "\f592"
 }
 
 .fa-horse:before {
   content: "\f6f0"
 }
 
 .fa-horse-head:before {
   content: "\f7ab"
 }
 
 .fa-hospital:before {
   content: "\f0f8"
 }
 
 .fa-hospital-alt:before {
   content: "\f47d"
 }
 
 .fa-hospital-symbol:before {
   content: "\f47e"
 }
 
 .fa-hot-tub:before {
   content: "\f593"
 }
 
 .fa-hotdog:before {
   content: "\f80f"
 }
 
 .fa-hotel:before {
   content: "\f594"
 }
 
 .fa-hotjar:before {
   content: "\f3b1"
 }
 
 .fa-hourglass:before {
   content: "\f254"
 }
 
 .fa-hourglass-end:before {
   content: "\f253"
 }
 
 .fa-hourglass-half:before {
   content: "\f252"
 }
 
 .fa-hourglass-start:before {
   content: "\f251"
 }
 
 .fa-house-damage:before {
   content: "\f6f1"
 }
 
 .fa-houzz:before {
   content: "\f27c"
 }
 
 .fa-hryvnia:before {
   content: "\f6f2"
 }
 
 .fa-html5:before {
   content: "\f13b"
 }
 
 .fa-hubspot:before {
   content: "\f3b2"
 }
 
 .fa-i-cursor:before {
   content: "\f246"
 }
 
 .fa-ice-cream:before {
   content: "\f810"
 }
 
 .fa-icicles:before {
   content: "\f7ad"
 }
 
 .fa-icons:before {
   content: "\f86d"
 }
 
 .fa-id-badge:before {
   content: "\f2c1"
 }
 
 .fa-id-card:before {
   content: "\f2c2"
 }
 
 .fa-id-card-alt:before {
   content: "\f47f"
 }
 
 .fa-igloo:before {
   content: "\f7ae"
 }
 
 .fa-image:before {
   content: "\f03e"
 }
 
 .fa-images:before {
   content: "\f302"
 }
 
 .fa-imdb:before {
   content: "\f2d8"
 }
 
 .fa-inbox:before {
   content: "\f01c"
 }
 
 .fa-indent:before {
   content: "\f03c"
 }
 
 .fa-industry:before {
   content: "\f275"
 }
 
 .fa-infinity:before {
   content: "\f534"
 }
 
 .fa-info:before {
   content: "\f129"
 }
 
 .fa-info-circle:before {
   content: "\f05a"
 }
 
 .fa-instagram:before {
   content: "\f16d"
 }
 
 .fa-intercom:before {
   content: "\f7af"
 }
 
 .fa-internet-explorer:before {
   content: "\f26b"
 }
 
 .fa-invision:before {
   content: "\f7b0"
 }
 
 .fa-ioxhost:before {
   content: "\f208"
 }
 
 .fa-italic:before {
   content: "\f033"
 }
 
 .fa-itch-io:before {
   content: "\f83a"
 }
 
 .fa-itunes:before {
   content: "\f3b4"
 }
 
 .fa-itunes-note:before {
   content: "\f3b5"
 }
 
 .fa-java:before {
   content: "\f4e4"
 }
 
 .fa-jedi:before {
   content: "\f669"
 }
 
 .fa-jedi-order:before {
   content: "\f50e"
 }
 
 .fa-jenkins:before {
   content: "\f3b6"
 }
 
 .fa-jira:before {
   content: "\f7b1"
 }
 
 .fa-joget:before {
   content: "\f3b7"
 }
 
 .fa-joint:before {
   content: "\f595"
 }
 
 .fa-joomla:before {
   content: "\f1aa"
 }
 
 .fa-journal-whills:before {
   content: "\f66a"
 }
 
 .fa-js:before {
   content: "\f3b8"
 }
 
 .fa-js-square:before {
   content: "\f3b9"
 }
 
 .fa-jsfiddle:before {
   content: "\f1cc"
 }
 
 .fa-kaaba:before {
   content: "\f66b"
 }
 
 .fa-kaggle:before {
   content: "\f5fa"
 }
 
 .fa-key:before {
   content: "\f084"
 }
 
 .fa-keybase:before {
   content: "\f4f5"
 }
 
 .fa-keyboard:before {
   content: "\f11c"
 }
 
 .fa-keycdn:before {
   content: "\f3ba"
 }
 
 .fa-khanda:before {
   content: "\f66d"
 }
 
 .fa-kickstarter:before {
   content: "\f3bb"
 }
 
 .fa-kickstarter-k:before {
   content: "\f3bc"
 }
 
 .fa-kiss:before {
   content: "\f596"
 }
 
 .fa-kiss-beam:before {
   content: "\f597"
 }
 
 .fa-kiss-wink-heart:before {
   content: "\f598"
 }
 
 .fa-kiwi-bird:before {
   content: "\f535"
 }
 
 .fa-korvue:before {
   content: "\f42f"
 }
 
 .fa-landmark:before {
   content: "\f66f"
 }
 
 .fa-language:before {
   content: "\f1ab"
 }
 
 .fa-laptop:before {
   content: "\f109"
 }
 
 .fa-laptop-code:before {
   content: "\f5fc"
 }
 
 .fa-laptop-medical:before {
   content: "\f812"
 }
 
 .fa-laravel:before {
   content: "\f3bd"
 }
 
 .fa-lastfm:before {
   content: "\f202"
 }
 
 .fa-lastfm-square:before {
   content: "\f203"
 }
 
 .fa-laugh:before {
   content: "\f599"
 }
 
 .fa-laugh-beam:before {
   content: "\f59a"
 }
 
 .fa-laugh-squint:before {
   content: "\f59b"
 }
 
 .fa-laugh-wink:before {
   content: "\f59c"
 }
 
 .fa-layer-group:before {
   content: "\f5fd"
 }
 
 .fa-leaf:before {
   content: "\f06c"
 }
 
 .fa-leanpub:before {
   content: "\f212"
 }
 
 .fa-lemon:before {
   content: "\f094"
 }
 
 .fa-less:before {
   content: "\f41d"
 }
 
 .fa-less-than:before {
   content: "\f536"
 }
 
 .fa-less-than-equal:before {
   content: "\f537"
 }
 
 .fa-level-down-alt:before {
   content: "\f3be"
 }
 
 .fa-level-up-alt:before {
   content: "\f3bf"
 }
 
 .fa-life-ring:before {
   content: "\f1cd"
 }
 
 .fa-lightbulb:before {
   content: "\f0eb"
 }
 
 .fa-line:before {
   content: "\f3c0"
 }
 
 .fa-link:before {
   content: "\f0c1"
 }
 
 .fa-linkedin:before {
   content: "\f08c"
 }
 
 .fa-linkedin-in:before {
   content: "\f0e1"
 }
 
 .fa-linode:before {
   content: "\f2b8"
 }
 
 .fa-linux:before {
   content: "\f17c"
 }
 
 .fa-lira-sign:before {
   content: "\f195"
 }
 
 .fa-list:before {
   content: "\f03a"
 }
 
 .fa-list-alt:before {
   content: "\f022"
 }
 
 .fa-list-ol:before {
   content: "\f0cb"
 }
 
 .fa-list-ul:before {
   content: "\f0ca"
 }
 
 .fa-location-arrow:before {
   content: "\f124"
 }
 
 .fa-lock:before {
   content: "\f023"
 }
 
 .fa-lock-open:before {
   content: "\f3c1"
 }
 
 .fa-long-arrow-alt-down:before {
   content: "\f309"
 }
 
 .fa-long-arrow-alt-left:before {
   content: "\f30a"
 }
 
 .fa-long-arrow-alt-right:before {
   content: "\f30b"
 }
 
 .fa-long-arrow-alt-up:before {
   content: "\f30c"
 }
 
 .fa-low-vision:before {
   content: "\f2a8"
 }
 
 .fa-luggage-cart:before {
   content: "\f59d"
 }
 
 .fa-lyft:before {
   content: "\f3c3"
 }
 
 .fa-magento:before {
   content: "\f3c4"
 }
 
 .fa-magic:before {
   content: "\f0d0"
 }
 
 .fa-magnet:before {
   content: "\f076"
 }
 
 .fa-mail-bulk:before {
   content: "\f674"
 }
 
 .fa-mailchimp:before {
   content: "\f59e"
 }
 
 .fa-male:before {
   content: "\f183"
 }
 
 .fa-mandalorian:before {
   content: "\f50f"
 }
 
 .fa-map:before {
   content: "\f279"
 }
 
 .fa-map-marked:before {
   content: "\f59f"
 }
 
 .fa-map-marked-alt:before {
   content: "\f5a0"
 }
 
 .fa-map-marker:before {
   content: "\f041"
 }
 
 .fa-map-marker-alt:before {
   content: "\f3c5"
 }
 
 .fa-map-pin:before {
   content: "\f276"
 }
 
 .fa-map-signs:before {
   content: "\f277"
 }
 
 .fa-markdown:before {
   content: "\f60f"
 }
 
 .fa-marker:before {
   content: "\f5a1"
 }
 
 .fa-mars:before {
   content: "\f222"
 }
 
 .fa-mars-double:before {
   content: "\f227"
 }
 
 .fa-mars-stroke:before {
   content: "\f229"
 }
 
 .fa-mars-stroke-h:before {
   content: "\f22b"
 }
 
 .fa-mars-stroke-v:before {
   content: "\f22a"
 }
 
 .fa-mask:before {
   content: "\f6fa"
 }
 
 .fa-mastodon:before {
   content: "\f4f6"
 }
 
 .fa-maxcdn:before {
   content: "\f136"
 }
 
 .fa-mdb:before {
   content: "\f8ca"
 }
 
 .fa-medal:before {
   content: "\f5a2"
 }
 
 .fa-medapps:before {
   content: "\f3c6"
 }
 
 .fa-medium:before {
   content: "\f23a"
 }
 
 .fa-medium-m:before {
   content: "\f3c7"
 }
 
 .fa-medkit:before {
   content: "\f0fa"
 }
 
 .fa-medrt:before {
   content: "\f3c8"
 }
 
 .fa-meetup:before {
   content: "\f2e0"
 }
 
 .fa-megaport:before {
   content: "\f5a3"
 }
 
 .fa-meh:before {
   content: "\f11a"
 }
 
 .fa-meh-blank:before {
   content: "\f5a4"
 }
 
 .fa-meh-rolling-eyes:before {
   content: "\f5a5"
 }
 
 .fa-memory:before {
   content: "\f538"
 }
 
 .fa-mendeley:before {
   content: "\f7b3"
 }
 
 .fa-menorah:before {
   content: "\f676"
 }
 
 .fa-mercury:before {
   content: "\f223"
 }
 
 .fa-meteor:before {
   content: "\f753"
 }
 
 .fa-microchip:before {
   content: "\f2db"
 }
 
 .fa-microphone:before {
   content: "\f130"
 }
 
 .fa-microphone-alt:before {
   content: "\f3c9"
 }
 
 .fa-microphone-alt-slash:before {
   content: "\f539"
 }
 
 .fa-microphone-slash:before {
   content: "\f131"
 }
 
 .fa-microscope:before {
   content: "\f610"
 }
 
 .fa-microsoft:before {
   content: "\f3ca"
 }
 
 .fa-minus:before {
   content: "\f068"
 }
 
 .fa-minus-circle:before {
   content: "\f056"
 }
 
 .fa-minus-square:before {
   content: "\f146"
 }
 
 .fa-mitten:before {
   content: "\f7b5"
 }
 
 .fa-mix:before {
   content: "\f3cb"
 }
 
 .fa-mixcloud:before {
   content: "\f289"
 }
 
 .fa-mizuni:before {
   content: "\f3cc"
 }
 
 .fa-mobile:before {
   content: "\f10b"
 }
 
 .fa-mobile-alt:before {
   content: "\f3cd"
 }
 
 .fa-modx:before {
   content: "\f285"
 }
 
 .fa-monero:before {
   content: "\f3d0"
 }
 
 .fa-money-bill:before {
   content: "\f0d6"
 }
 
 .fa-money-bill-alt:before {
   content: "\f3d1"
 }
 
 .fa-money-bill-wave:before {
   content: "\f53a"
 }
 
 .fa-money-bill-wave-alt:before {
   content: "\f53b"
 }
 
 .fa-money-check:before {
   content: "\f53c"
 }
 
 .fa-money-check-alt:before {
   content: "\f53d"
 }
 
 .fa-monument:before {
   content: "\f5a6"
 }
 
 .fa-moon:before {
   content: "\f186"
 }
 
 .fa-mortar-pestle:before {
   content: "\f5a7"
 }
 
 .fa-mosque:before {
   content: "\f678"
 }
 
 .fa-motorcycle:before {
   content: "\f21c"
 }
 
 .fa-mountain:before {
   content: "\f6fc"
 }
 
 .fa-mouse:before {
   content: "\f8cc"
 }
 
 .fa-mouse-pointer:before {
   content: "\f245"
 }
 
 .fa-mug-hot:before {
   content: "\f7b6"
 }
 
 .fa-music:before {
   content: "\f001"
 }
 
 .fa-napster:before {
   content: "\f3d2"
 }
 
 .fa-neos:before {
   content: "\f612"
 }
 
 .fa-network-wired:before {
   content: "\f6ff"
 }
 
 .fa-neuter:before {
   content: "\f22c"
 }
 
 .fa-newspaper:before {
   content: "\f1ea"
 }
 
 .fa-nimblr:before {
   content: "\f5a8"
 }
 
 .fa-node:before {
   content: "\f419"
 }
 
 .fa-node-js:before {
   content: "\f3d3"
 }
 
 .fa-not-equal:before {
   content: "\f53e"
 }
 
 .fa-notes-medical:before {
   content: "\f481"
 }
 
 .fa-npm:before {
   content: "\f3d4"
 }
 
 .fa-ns8:before {
   content: "\f3d5"
 }
 
 .fa-nutritionix:before {
   content: "\f3d6"
 }
 
 .fa-object-group:before {
   content: "\f247"
 }
 
 .fa-object-ungroup:before {
   content: "\f248"
 }
 
 .fa-odnoklassniki:before {
   content: "\f263"
 }
 
 .fa-odnoklassniki-square:before {
   content: "\f264"
 }
 
 .fa-oil-can:before {
   content: "\f613"
 }
 
 .fa-old-republic:before {
   content: "\f510"
 }
 
 .fa-om:before {
   content: "\f679"
 }
 
 .fa-opencart:before {
   content: "\f23d"
 }
 
 .fa-openid:before {
   content: "\f19b"
 }
 
 .fa-opera:before {
   content: "\f26a"
 }
 
 .fa-optin-monster:before {
   content: "\f23c"
 }
 
 .fa-orcid:before {
   content: "\f8d2"
 }
 
 .fa-osi:before {
   content: "\f41a"
 }
 
 .fa-otter:before {
   content: "\f700"
 }
 
 .fa-outdent:before {
   content: "\f03b"
 }
 
 .fa-page4:before {
   content: "\f3d7"
 }
 
 .fa-pagelines:before {
   content: "\f18c"
 }
 
 .fa-pager:before {
   content: "\f815"
 }
 
 .fa-paint-brush:before {
   content: "\f1fc"
 }
 
 .fa-paint-roller:before {
   content: "\f5aa"
 }
 
 .fa-palette:before {
   content: "\f53f"
 }
 
 .fa-palfed:before {
   content: "\f3d8"
 }
 
 .fa-pallet:before {
   content: "\f482"
 }
 
 .fa-paper-plane:before {
   content: "\f1d8"
 }
 
 .fa-paperclip:before {
   content: "\f0c6"
 }
 
 .fa-parachute-box:before {
   content: "\f4cd"
 }
 
 .fa-paragraph:before {
   content: "\f1dd"
 }
 
 .fa-parking:before {
   content: "\f540"
 }
 
 .fa-passport:before {
   content: "\f5ab"
 }
 
 .fa-pastafarianism:before {
   content: "\f67b"
 }
 
 .fa-paste:before {
   content: "\f0ea"
 }
 
 .fa-patreon:before {
   content: "\f3d9"
 }
 
 .fa-pause:before {
   content: "\f04c"
 }
 
 .fa-pause-circle:before {
   content: "\f28b"
 }
 
 .fa-paw:before {
   content: "\f1b0"
 }
 
 .fa-paypal:before {
   content: "\f1ed"
 }
 
 .fa-peace:before {
   content: "\f67c"
 }
 
 .fa-pen:before {
   content: "\f304"
 }
 
 .fa-pen-alt:before {
   content: "\f305"
 }
 
 .fa-pen-fancy:before {
   content: "\f5ac"
 }
 
 .fa-pen-nib:before {
   content: "\f5ad"
 }
 
 .fa-pen-square:before {
   content: "\f14b"
 }
 
 .fa-pencil-alt:before {
   content: "\f303"
 }
 
 .fa-pencil-ruler:before {
   content: "\f5ae"
 }
 
 .fa-penny-arcade:before {
   content: "\f704"
 }
 
 .fa-people-carry:before {
   content: "\f4ce"
 }
 
 .fa-pepper-hot:before {
   content: "\f816"
 }
 
 .fa-percent:before {
   content: "\f295"
 }
 
 .fa-percentage:before {
   content: "\f541"
 }
 
 .fa-periscope:before {
   content: "\f3da"
 }
 
 .fa-person-booth:before {
   content: "\f756"
 }
 
 .fa-phabricator:before {
   content: "\f3db"
 }
 
 .fa-phoenix-framework:before {
   content: "\f3dc"
 }
 
 .fa-phoenix-squadron:before {
   content: "\f511"
 }
 
 .fa-phone:before {
   content: "\f095"
 }
 
 .fa-phone-alt:before {
   content: "\f879"
 }
 
 .fa-phone-slash:before {
   content: "\f3dd"
 }
 
 .fa-phone-square:before {
   content: "\f098"
 }
 
 .fa-phone-square-alt:before {
   content: "\f87b"
 }
 
 .fa-phone-volume:before {
   content: "\f2a0"
 }
 
 .fa-photo-video:before {
   content: "\f87c"
 }
 
 .fa-php:before {
   content: "\f457"
 }
 
 .fa-pied-piper:before {
   content: "\f2ae"
 }
 
 .fa-pied-piper-alt:before {
   content: "\f1a8"
 }
 
 .fa-pied-piper-hat:before {
   content: "\f4e5"
 }
 
 .fa-pied-piper-pp:before {
   content: "\f1a7"
 }
 
 .fa-piggy-bank:before {
   content: "\f4d3"
 }
 
 .fa-pills:before {
   content: "\f484"
 }
 
 .fa-pinterest:before {
   content: "\f0d2"
 }
 
 .fa-pinterest-p:before {
   content: "\f231"
 }
 
 .fa-pinterest-square:before {
   content: "\f0d3"
 }
 
 .fa-pizza-slice:before {
   content: "\f818"
 }
 
 .fa-place-of-worship:before {
   content: "\f67f"
 }
 
 .fa-plane:before {
   content: "\f072"
 }
 
 .fa-plane-arrival:before {
   content: "\f5af"
 }
 
 .fa-plane-departure:before {
   content: "\f5b0"
 }
 
 .fa-play:before {
   content: "\f04b"
 }
 
 .fa-play-circle:before {
   content: "\f144"
 }
 
 .fa-playstation:before {
   content: "\f3df"
 }
 
 .fa-plug:before {
   content: "\f1e6"
 }
 
 .fa-plus:before {
   content: "\f067"
 }
 
 .fa-plus-circle:before {
   content: "\f055"
 }
 
 .fa-plus-square:before {
   content: "\f0fe"
 }
 
 .fa-podcast:before {
   content: "\f2ce"
 }
 
 .fa-poll:before {
   content: "\f681"
 }
 
 .fa-poll-h:before {
   content: "\f682"
 }
 
 .fa-poo:before {
   content: "\f2fe"
 }
 
 .fa-poo-storm:before {
   content: "\f75a"
 }
 
 .fa-poop:before {
   content: "\f619"
 }
 
 .fa-portrait:before {
   content: "\f3e0"
 }
 
 .fa-pound-sign:before {
   content: "\f154"
 }
 
 .fa-power-off:before {
   content: "\f011"
 }
 
 .fa-pray:before {
   content: "\f683"
 }
 
 .fa-praying-hands:before {
   content: "\f684"
 }
 
 .fa-prescription:before {
   content: "\f5b1"
 }
 
 .fa-prescription-bottle:before {
   content: "\f485"
 }
 
 .fa-prescription-bottle-alt:before {
   content: "\f486"
 }
 
 .fa-print:before {
   content: "\f02f"
 }
 
 .fa-procedures:before {
   content: "\f487"
 }
 
 .fa-product-hunt:before {
   content: "\f288"
 }
 
 .fa-project-diagram:before {
   content: "\f542"
 }
 
 .fa-pushed:before {
   content: "\f3e1"
 }
 
 .fa-puzzle-piece:before {
   content: "\f12e"
 }
 
 .fa-python:before {
   content: "\f3e2"
 }
 
 .fa-qq:before {
   content: "\f1d6"
 }
 
 .fa-qrcode:before {
   content: "\f029"
 }
 
 .fa-question:before {
   content: "\f128"
 }
 
 .fa-question-circle:before {
   content: "\f059"
 }
 
 .fa-quidditch:before {
   content: "\f458"
 }
 
 .fa-quinscape:before {
   content: "\f459"
 }
 
 .fa-quora:before {
   content: "\f2c4"
 }
 
 .fa-quote-left:before {
   content: "\f10d"
 }
 
 .fa-quote-right:before {
   content: "\f10e"
 }
 
 .fa-quran:before {
   content: "\f687"
 }
 
 .fa-r-project:before {
   content: "\f4f7"
 }
 
 .fa-radiation:before {
   content: "\f7b9"
 }
 
 .fa-radiation-alt:before {
   content: "\f7ba"
 }
 
 .fa-rainbow:before {
   content: "\f75b"
 }
 
 .fa-random:before {
   content: "\f074"
 }
 
 .fa-raspberry-pi:before {
   content: "\f7bb"
 }
 
 .fa-ravelry:before {
   content: "\f2d9"
 }
 
 .fa-react:before {
   content: "\f41b"
 }
 
 .fa-reacteurope:before {
   content: "\f75d"
 }
 
 .fa-readme:before {
   content: "\f4d5"
 }
 
 .fa-rebel:before {
   content: "\f1d0"
 }
 
 .fa-receipt:before {
   content: "\f543"
 }
 
 .fa-record-vinyl:before {
   content: "\f8d9"
 }
 
 .fa-recycle:before {
   content: "\f1b8"
 }
 
 .fa-red-river:before {
   content: "\f3e3"
 }
 
 .fa-reddit:before {
   content: "\f1a1"
 }
 
 .fa-reddit-alien:before {
   content: "\f281"
 }
 
 .fa-reddit-square:before {
   content: "\f1a2"
 }
 
 .fa-redhat:before {
   content: "\f7bc"
 }
 
 .fa-redo:before {
   content: "\f01e"
 }
 
 .fa-redo-alt:before {
   content: "\f2f9"
 }
 
 .fa-registered:before {
   content: "\f25d"
 }
 
 .fa-remove-format:before {
   content: "\f87d"
 }
 
 .fa-renren:before {
   content: "\f18b"
 }
 
 .fa-reply:before {
   content: "\f3e5"
 }
 
 .fa-reply-all:before {
   content: "\f122"
 }
 
 .fa-replyd:before {
   content: "\f3e6"
 }
 
 .fa-republican:before {
   content: "\f75e"
 }
 
 .fa-researchgate:before {
   content: "\f4f8"
 }
 
 .fa-resolving:before {
   content: "\f3e7"
 }
 
 .fa-restroom:before {
   content: "\f7bd"
 }
 
 .fa-retweet:before {
   content: "\f079"
 }
 
 .fa-rev:before {
   content: "\f5b2"
 }
 
 .fa-ribbon:before {
   content: "\f4d6"
 }
 
 .fa-ring:before {
   content: "\f70b"
 }
 
 .fa-road:before {
   content: "\f018"
 }
 
 .fa-robot:before {
   content: "\f544"
 }
 
 .fa-rocket:before {
   content: "\f135"
 }
 
 .fa-rocketchat:before {
   content: "\f3e8"
 }
 
 .fa-rockrms:before {
   content: "\f3e9"
 }
 
 .fa-route:before {
   content: "\f4d7"
 }
 
 .fa-rss:before {
   content: "\f09e"
 }
 
 .fa-rss-square:before {
   content: "\f143"
 }
 
 .fa-ruble-sign:before {
   content: "\f158"
 }
 
 .fa-ruler:before {
   content: "\f545"
 }
 
 .fa-ruler-combined:before {
   content: "\f546"
 }
 
 .fa-ruler-horizontal:before {
   content: "\f547"
 }
 
 .fa-ruler-vertical:before {
   content: "\f548"
 }
 
 .fa-running:before {
   content: "\f70c"
 }
 
 .fa-rupee-sign:before {
   content: "\f156"
 }
 
 .fa-sad-cry:before {
   content: "\f5b3"
 }
 
 .fa-sad-tear:before {
   content: "\f5b4"
 }
 
 .fa-safari:before {
   content: "\f267"
 }
 
 .fa-salesforce:before {
   content: "\f83b"
 }
 
 .fa-sass:before {
   content: "\f41e"
 }
 
 .fa-satellite:before {
   content: "\f7bf"
 }
 
 .fa-satellite-dish:before {
   content: "\f7c0"
 }
 
 .fa-save:before {
   content: "\f0c7"
 }
 
 .fa-schlix:before {
   content: "\f3ea"
 }
 
 .fa-school:before {
   content: "\f549"
 }
 
 .fa-screwdriver:before {
   content: "\f54a"
 }
 
 .fa-scribd:before {
   content: "\f28a"
 }
 
 .fa-scroll:before {
   content: "\f70e"
 }
 
 .fa-sd-card:before {
   content: "\f7c2"
 }
 
 .fa-search:before {
   content: "\f002"
 }
 
 .fa-search-dollar:before {
   content: "\f688"
 }
 
 .fa-search-location:before {
   content: "\f689"
 }
 
 .fa-search-minus:before {
   content: "\f010"
 }
 
 .fa-search-plus:before {
   content: "\f00e"
 }
 
 .fa-searchengin:before {
   content: "\f3eb"
 }
 
 .fa-seedling:before {
   content: "\f4d8"
 }
 
 .fa-sellcast:before {
   content: "\f2da"
 }
 
 .fa-sellsy:before {
   content: "\f213"
 }
 
 .fa-server:before {
   content: "\f233"
 }
 
 .fa-servicestack:before {
   content: "\f3ec"
 }
 
 .fa-shapes:before {
   content: "\f61f"
 }
 
 .fa-share:before {
   content: "\f064"
 }
 
 .fa-share-alt:before {
   content: "\f1e0"
 }
 
 .fa-share-alt-square:before {
   content: "\f1e1"
 }
 
 .fa-share-square:before {
   content: "\f14d"
 }
 
 .fa-shekel-sign:before {
   content: "\f20b"
 }
 
 .fa-shield-alt:before {
   content: "\f3ed"
 }
 
 .fa-ship:before {
   content: "\f21a"
 }
 
 .fa-shipping-fast:before {
   content: "\f48b"
 }
 
 .fa-shirtsinbulk:before {
   content: "\f214"
 }
 
 .fa-shoe-prints:before {
   content: "\f54b"
 }
 
 .fa-shopping-bag:before {
   content: "\f290"
 }
 
 .fa-shopping-basket:before {
   content: "\f291"
 }
 
 .fa-shopping-cart:before {
   content: "\f07a"
 }
 
 .fa-shopware:before {
   content: "\f5b5"
 }
 
 .fa-shower:before {
   content: "\f2cc"
 }
 
 .fa-shuttle-van:before {
   content: "\f5b6"
 }
 
 .fa-sign:before {
   content: "\f4d9"
 }
 
 .fa-sign-in-alt:before {
   content: "\f2f6"
 }
 
 .fa-sign-language:before {
   content: "\f2a7"
 }
 
 .fa-sign-out-alt:before {
   content: "\f2f5"
 }
 
 .fa-signal:before {
   content: "\f012"
 }
 
 .fa-signature:before {
   content: "\f5b7"
 }
 
 .fa-sim-card:before {
   content: "\f7c4"
 }
 
 .fa-simplybuilt:before {
   content: "\f215"
 }
 
 .fa-sistrix:before {
   content: "\f3ee"
 }
 
 .fa-sitemap:before {
   content: "\f0e8"
 }
 
 .fa-sith:before {
   content: "\f512"
 }
 
 .fa-skating:before {
   content: "\f7c5"
 }
 
 .fa-sketch:before {
   content: "\f7c6"
 }
 
 .fa-skiing:before {
   content: "\f7c9"
 }
 
 .fa-skiing-nordic:before {
   content: "\f7ca"
 }
 
 .fa-skull:before {
   content: "\f54c"
 }
 
 .fa-skull-crossbones:before {
   content: "\f714"
 }
 
 .fa-skyatlas:before {
   content: "\f216"
 }
 
 .fa-skype:before {
   content: "\f17e"
 }
 
 .fa-slack:before {
   content: "\f198"
 }
 
 .fa-slack-hash:before {
   content: "\f3ef"
 }
 
 .fa-slash:before {
   content: "\f715"
 }
 
 .fa-sleigh:before {
   content: "\f7cc"
 }
 
 .fa-sliders-h:before {
   content: "\f1de"
 }
 
 .fa-slideshare:before {
   content: "\f1e7"
 }
 
 .fa-smile:before {
   content: "\f118"
 }
 
 .fa-smile-beam:before {
   content: "\f5b8"
 }
 
 .fa-smile-wink:before {
   content: "\f4da"
 }
 
 .fa-smog:before {
   content: "\f75f"
 }
 
 .fa-smoking:before {
   content: "\f48d"
 }
 
 .fa-smoking-ban:before {
   content: "\f54d"
 }
 
 .fa-sms:before {
   content: "\f7cd"
 }
 
 .fa-snapchat:before {
   content: "\f2ab"
 }
 
 .fa-snapchat-ghost:before {
   content: "\f2ac"
 }
 
 .fa-snapchat-square:before {
   content: "\f2ad"
 }
 
 .fa-snowboarding:before {
   content: "\f7ce"
 }
 
 .fa-snowflake:before {
   content: "\f2dc"
 }
 
 .fa-snowman:before {
   content: "\f7d0"
 }
 
 .fa-snowplow:before {
   content: "\f7d2"
 }
 
 .fa-socks:before {
   content: "\f696"
 }
 
 .fa-solar-panel:before {
   content: "\f5ba"
 }
 
 .fa-sort:before {
   content: "\f0dc"
 }
 
 .fa-sort-alpha-down:before {
   content: "\f15d"
 }
 
 .fa-sort-alpha-down-alt:before {
   content: "\f881"
 }
 
 .fa-sort-alpha-up:before {
   content: "\f15e"
 }
 
 .fa-sort-alpha-up-alt:before {
   content: "\f882"
 }
 
 .fa-sort-amount-down:before {
   content: "\f160"
 }
 
 .fa-sort-amount-down-alt:before {
   content: "\f884"
 }
 
 .fa-sort-amount-up:before {
   content: "\f161"
 }
 
 .fa-sort-amount-up-alt:before {
   content: "\f885"
 }
 
 .fa-sort-down:before {
   content: "\f0dd"
 }
 
 .fa-sort-numeric-down:before {
   content: "\f162"
 }
 
 .fa-sort-numeric-down-alt:before {
   content: "\f886"
 }
 
 .fa-sort-numeric-up:before {
   content: "\f163"
 }
 
 .fa-sort-numeric-up-alt:before {
   content: "\f887"
 }
 
 .fa-sort-up:before {
   content: "\f0de"
 }
 
 .fa-soundcloud:before {
   content: "\f1be"
 }
 
 .fa-sourcetree:before {
   content: "\f7d3"
 }
 
 .fa-spa:before {
   content: "\f5bb"
 }
 
 .fa-space-shuttle:before {
   content: "\f197"
 }
 
 .fa-speakap:before {
   content: "\f3f3"
 }
 
 .fa-speaker-deck:before {
   content: "\f83c"
 }
 
 .fa-spell-check:before {
   content: "\f891"
 }
 
 .fa-spider:before {
   content: "\f717"
 }
 
 .fa-spinner:before {
   content: "\f110"
 }
 
 .fa-splotch:before {
   content: "\f5bc"
 }
 
 .fa-spotify:before {
   content: "\f1bc"
 }
 
 .fa-spray-can:before {
   content: "\f5bd"
 }
 
 .fa-square:before {
   content: "\f0c8"
 }
 
 .fa-square-full:before {
   content: "\f45c"
 }
 
 .fa-square-root-alt:before {
   content: "\f698"
 }
 
 .fa-squarespace:before {
   content: "\f5be"
 }
 
 .fa-stack-exchange:before {
   content: "\f18d"
 }
 
 .fa-stack-overflow:before {
   content: "\f16c"
 }
 
 .fa-stackpath:before {
   content: "\f842"
 }
 
 .fa-stamp:before {
   content: "\f5bf"
 }
 
 .fa-star:before {
   content: "\f005"
 }
 
 .fa-star-and-crescent:before {
   content: "\f699"
 }
 
 .fa-star-half:before {
   content: "\f089"
 }
 
 .fa-star-half-alt:before {
   content: "\f5c0"
 }
 
 .fa-star-of-david:before {
   content: "\f69a"
 }
 
 .fa-star-of-life:before {
   content: "\f621"
 }
 
 .fa-staylinked:before {
   content: "\f3f5"
 }
 
 .fa-steam:before {
   content: "\f1b6"
 }
 
 .fa-steam-square:before {
   content: "\f1b7"
 }
 
 .fa-steam-symbol:before {
   content: "\f3f6"
 }
 
 .fa-step-backward:before {
   content: "\f048"
 }
 
 .fa-step-forward:before {
   content: "\f051"
 }
 
 .fa-stethoscope:before {
   content: "\f0f1"
 }
 
 .fa-sticker-mule:before {
   content: "\f3f7"
 }
 
 .fa-sticky-note:before {
   content: "\f249"
 }
 
 .fa-stop:before {
   content: "\f04d"
 }
 
 .fa-stop-circle:before {
   content: "\f28d"
 }
 
 .fa-stopwatch:before {
   content: "\f2f2"
 }
 
 .fa-store:before {
   content: "\f54e"
 }
 
 .fa-store-alt:before {
   content: "\f54f"
 }
 
 .fa-strava:before {
   content: "\f428"
 }
 
 .fa-stream:before {
   content: "\f550"
 }
 
 .fa-street-view:before {
   content: "\f21d"
 }
 
 .fa-strikethrough:before {
   content: "\f0cc"
 }
 
 .fa-stripe:before {
   content: "\f429"
 }
 
 .fa-stripe-s:before {
   content: "\f42a"
 }
 
 .fa-stroopwafel:before {
   content: "\f551"
 }
 
 .fa-studiovinari:before {
   content: "\f3f8"
 }
 
 .fa-stumbleupon:before {
   content: "\f1a4"
 }
 
 .fa-stumbleupon-circle:before {
   content: "\f1a3"
 }
 
 .fa-subscript:before {
   content: "\f12c"
 }
 
 .fa-subway:before {
   content: "\f239"
 }
 
 .fa-suitcase:before {
   content: "\f0f2"
 }
 
 .fa-suitcase-rolling:before {
   content: "\f5c1"
 }
 
 .fa-sun:before {
   content: "\f185"
 }
 
 .fa-superpowers:before {
   content: "\f2dd"
 }
 
 .fa-superscript:before {
   content: "\f12b"
 }
 
 .fa-supple:before {
   content: "\f3f9"
 }
 
 .fa-surprise:before {
   content: "\f5c2"
 }
 
 .fa-suse:before {
   content: "\f7d6"
 }
 
 .fa-swatchbook:before {
   content: "\f5c3"
 }
 
 .fa-swift:before {
   content: "\f8e1"
 }
 
 .fa-swimmer:before {
   content: "\f5c4"
 }
 
 .fa-swimming-pool:before {
   content: "\f5c5"
 }
 
 .fa-symfony:before {
   content: "\f83d"
 }
 
 .fa-synagogue:before {
   content: "\f69b"
 }
 
 .fa-sync:before {
   content: "\f021"
 }
 
 .fa-sync-alt:before {
   content: "\f2f1"
 }
 
 .fa-syringe:before {
   content: "\f48e"
 }
 
 .fa-table:before {
   content: "\f0ce"
 }
 
 .fa-table-tennis:before {
   content: "\f45d"
 }
 
 .fa-tablet:before {
   content: "\f10a"
 }
 
 .fa-tablet-alt:before {
   content: "\f3fa"
 }
 
 .fa-tablets:before {
   content: "\f490"
 }
 
 .fa-tachometer-alt:before {
   content: "\f3fd"
 }
 
 .fa-tag:before {
   content: "\f02b"
 }
 
 .fa-tags:before {
   content: "\f02c"
 }
 
 .fa-tape:before {
   content: "\f4db"
 }
 
 .fa-tasks:before {
   content: "\f0ae"
 }
 
 .fa-taxi:before {
   content: "\f1ba"
 }
 
 .fa-teamspeak:before {
   content: "\f4f9"
 }
 
 .fa-teeth:before {
   content: "\f62e"
 }
 
 .fa-teeth-open:before {
   content: "\f62f"
 }
 
 .fa-telegram:before {
   content: "\f2c6"
 }
 
 .fa-telegram-plane:before {
   content: "\f3fe"
 }
 
 .fa-temperature-high:before {
   content: "\f769"
 }
 
 .fa-temperature-low:before {
   content: "\f76b"
 }
 
 .fa-tencent-weibo:before {
   content: "\f1d5"
 }
 
 .fa-tenge:before {
   content: "\f7d7"
 }
 
 .fa-terminal:before {
   content: "\f120"
 }
 
 .fa-text-height:before {
   content: "\f034"
 }
 
 .fa-text-width:before {
   content: "\f035"
 }
 
 .fa-th:before {
   content: "\f00a"
 }
 
 .fa-th-large:before {
   content: "\f009"
 }
 
 .fa-th-list:before {
   content: "\f00b"
 }
 
 .fa-the-red-yeti:before {
   content: "\f69d"
 }
 
 .fa-theater-masks:before {
   content: "\f630"
 }
 
 .fa-themeco:before {
   content: "\f5c6"
 }
 
 .fa-themeisle:before {
   content: "\f2b2"
 }
 
 .fa-thermometer:before {
   content: "\f491"
 }
 
 .fa-thermometer-empty:before {
   content: "\f2cb"
 }
 
 .fa-thermometer-full:before {
   content: "\f2c7"
 }
 
 .fa-thermometer-half:before {
   content: "\f2c9"
 }
 
 .fa-thermometer-quarter:before {
   content: "\f2ca"
 }
 
 .fa-thermometer-three-quarters:before {
   content: "\f2c8"
 }
 
 .fa-think-peaks:before {
   content: "\f731"
 }
 
 .fa-thumbs-down:before {
   content: "\f165"
 }
 
 .fa-thumbs-up:before {
   content: "\f164"
 }
 
 .fa-thumbtack:before {
   content: "\f08d"
 }
 
 .fa-ticket-alt:before {
   content: "\f3ff"
 }
 
 .fa-times:before {
   content: "\f00d"
 }
 
 .fa-times-circle:before {
   content: "\f057"
 }
 
 .fa-tint:before {
   content: "\f043"
 }
 
 .fa-tint-slash:before {
   content: "\f5c7"
 }
 
 .fa-tired:before {
   content: "\f5c8"
 }
 
 .fa-toggle-off:before {
   content: "\f204"
 }
 
 .fa-toggle-on:before {
   content: "\f205"
 }
 
 .fa-toilet:before {
   content: "\f7d8"
 }
 
 .fa-toilet-paper:before {
   content: "\f71e"
 }
 
 .fa-toolbox:before {
   content: "\f552"
 }
 
 .fa-tools:before {
   content: "\f7d9"
 }
 
 .fa-tooth:before {
   content: "\f5c9"
 }
 
 .fa-torah:before {
   content: "\f6a0"
 }
 
 .fa-torii-gate:before {
   content: "\f6a1"
 }
 
 .fa-tractor:before {
   content: "\f722"
 }
 
 .fa-trade-federation:before {
   content: "\f513"
 }
 
 .fa-trademark:before {
   content: "\f25c"
 }
 
 .fa-traffic-light:before {
   content: "\f637"
 }
 
 .fa-train:before {
   content: "\f238"
 }
 
 .fa-tram:before {
   content: "\f7da"
 }
 
 .fa-transgender:before {
   content: "\f224"
 }
 
 .fa-transgender-alt:before {
   content: "\f225"
 }
 
 .fa-trash:before {
   content: "\f1f8"
 }
 
 .fa-trash-alt:before {
   content: "\f2ed"
 }
 
 .fa-trash-restore:before {
   content: "\f829"
 }
 
 .fa-trash-restore-alt:before {
   content: "\f82a"
 }
 
 .fa-tree:before {
   content: "\f1bb"
 }
 
 .fa-trello:before {
   content: "\f181"
 }
 
 .fa-tripadvisor:before {
   content: "\f262"
 }
 
 .fa-trophy:before {
   content: "\f091"
 }
 
 .fa-truck:before {
   content: "\f0d1"
 }
 
 .fa-truck-loading:before {
   content: "\f4de"
 }
 
 .fa-truck-monster:before {
   content: "\f63b"
 }
 
 .fa-truck-moving:before {
   content: "\f4df"
 }
 
 .fa-truck-pickup:before {
   content: "\f63c"
 }
 
 .fa-tshirt:before {
   content: "\f553"
 }
 
 .fa-tty:before {
   content: "\f1e4"
 }
 
 .fa-tumblr:before {
   content: "\f173"
 }
 
 .fa-tumblr-square:before {
   content: "\f174"
 }
 
 .fa-tv:before {
   content: "\f26c"
 }
 
 .fa-twitch:before {
   content: "\f1e8"
 }
 
 .fa-twitter:before {
   content: "\f099"
 }
 
 .fa-twitter-square:before {
   content: "\f081"
 }
 
 .fa-typo3:before {
   content: "\f42b"
 }
 
 .fa-uber:before {
   content: "\f402"
 }
 
 .fa-ubuntu:before {
   content: "\f7df"
 }
 
 .fa-uikit:before {
   content: "\f403"
 }
 
 .fa-umbraco:before {
   content: "\f8e8"
 }
 
 .fa-umbrella:before {
   content: "\f0e9"
 }
 
 .fa-umbrella-beach:before {
   content: "\f5ca"
 }
 
 .fa-underline:before {
   content: "\f0cd"
 }
 
 .fa-undo:before {
   content: "\f0e2"
 }
 
 .fa-undo-alt:before {
   content: "\f2ea"
 }
 
 .fa-uniregistry:before {
   content: "\f404"
 }
 
 .fa-universal-access:before {
   content: "\f29a"
 }
 
 .fa-university:before {
   content: "\f19c"
 }
 
 .fa-unlink:before {
   content: "\f127"
 }
 
 .fa-unlock:before {
   content: "\f09c"
 }
 
 .fa-unlock-alt:before {
   content: "\f13e"
 }
 
 .fa-untappd:before {
   content: "\f405"
 }
 
 .fa-upload:before {
   content: "\f093"
 }
 
 .fa-ups:before {
   content: "\f7e0"
 }
 
 .fa-usb:before {
   content: "\f287"
 }
 
 .fa-user:before {
   content: "\f007"
 }
 
 .fa-user-alt:before {
   content: "\f406"
 }
 
 .fa-user-alt-slash:before {
   content: "\f4fa"
 }
 
 .fa-user-astronaut:before {
   content: "\f4fb"
 }
 
 .fa-user-check:before {
   content: "\f4fc"
 }
 
 .fa-user-circle:before {
   content: "\f2bd"
 }
 
 .fa-user-clock:before {
   content: "\f4fd"
 }
 
 .fa-user-cog:before {
   content: "\f4fe"
 }
 
 .fa-user-edit:before {
   content: "\f4ff"
 }
 
 .fa-user-friends:before {
   content: "\f500"
 }
 
 .fa-user-graduate:before {
   content: "\f501"
 }
 
 .fa-user-injured:before {
   content: "\f728"
 }
 
 .fa-user-lock:before {
   content: "\f502"
 }
 
 .fa-user-md:before {
   content: "\f0f0"
 }
 
 .fa-user-minus:before {
   content: "\f503"
 }
 
 .fa-user-ninja:before {
   content: "\f504"
 }
 
 .fa-user-nurse:before {
   content: "\f82f"
 }
 
 .fa-user-plus:before {
   content: "\f234"
 }
 
 .fa-user-secret:before {
   content: "\f21b"
 }
 
 .fa-user-shield:before {
   content: "\f505"
 }
 
 .fa-user-slash:before {
   content: "\f506"
 }
 
 .fa-user-tag:before {
   content: "\f507"
 }
 
 .fa-user-tie:before {
   content: "\f508"
 }
 
 .fa-user-times:before {
   content: "\f235"
 }
 
 .fa-users:before {
   content: "\f0c0"
 }
 
 .fa-users-cog:before {
   content: "\f509"
 }
 
 .fa-usps:before {
   content: "\f7e1"
 }
 
 .fa-ussunnah:before {
   content: "\f407"
 }
 
 .fa-utensil-spoon:before {
   content: "\f2e5"
 }
 
 .fa-utensils:before {
   content: "\f2e7"
 }
 
 .fa-vaadin:before {
   content: "\f408"
 }
 
 .fa-vector-square:before {
   content: "\f5cb"
 }
 
 .fa-venus:before {
   content: "\f221"
 }
 
 .fa-venus-double:before {
   content: "\f226"
 }
 
 .fa-venus-mars:before {
   content: "\f228"
 }
 
 .fa-viacoin:before {
   content: "\f237"
 }
 
 .fa-viadeo:before {
   content: "\f2a9"
 }
 
 .fa-viadeo-square:before {
   content: "\f2aa"
 }
 
 .fa-vial:before {
   content: "\f492"
 }
 
 .fa-vials:before {
   content: "\f493"
 }
 
 .fa-viber:before {
   content: "\f409"
 }
 
 .fa-video:before {
   content: "\f03d"
 }
 
 .fa-video-slash:before {
   content: "\f4e2"
 }
 
 .fa-vihara:before {
   content: "\f6a7"
 }
 
 .fa-vimeo:before {
   content: "\f40a"
 }
 
 .fa-vimeo-square:before {
   content: "\f194"
 }
 
 .fa-vimeo-v:before {
   content: "\f27d"
 }
 
 .fa-vine:before {
   content: "\f1ca"
 }
 
 .fa-vk:before {
   content: "\f189"
 }
 
 .fa-vnv:before {
   content: "\f40b"
 }
 
 .fa-voicemail:before {
   content: "\f897"
 }
 
 .fa-volleyball-ball:before {
   content: "\f45f"
 }
 
 .fa-volume-down:before {
   content: "\f027"
 }
 
 .fa-volume-mute:before {
   content: "\f6a9"
 }
 
 .fa-volume-off:before {
   content: "\f026"
 }
 
 .fa-volume-up:before {
   content: "\f028"
 }
 
 .fa-vote-yea:before {
   content: "\f772"
 }
 
 .fa-vr-cardboard:before {
   content: "\f729"
 }
 
 .fa-vuejs:before {
   content: "\f41f"
 }
 
 .fa-walking:before {
   content: "\f554"
 }
 
 .fa-wallet:before {
   content: "\f555"
 }
 
 .fa-warehouse:before {
   content: "\f494"
 }
 
 .fa-water:before {
   content: "\f773"
 }
 
 .fa-wave-square:before {
   content: "\f83e"
 }
 
 .fa-waze:before {
   content: "\f83f"
 }
 
 .fa-weebly:before {
   content: "\f5cc"
 }
 
 .fa-weibo:before {
   content: "\f18a"
 }
 
 .fa-weight:before {
   content: "\f496"
 }
 
 .fa-weight-hanging:before {
   content: "\f5cd"
 }
 
 .fa-weixin:before {
   content: "\f1d7"
 }
 
 .fa-whatsapp:before {
   content: "\f232"
 }
 
 .fa-whatsapp-square:before {
   content: "\f40c"
 }
 
 .fa-wheelchair:before {
   content: "\f193"
 }
 
 .fa-whmcs:before {
   content: "\f40d"
 }
 
 .fa-wifi:before {
   content: "\f1eb"
 }
 
 .fa-wikipedia-w:before {
   content: "\f266"
 }
 
 .fa-wind:before {
   content: "\f72e"
 }
 
 .fa-window-close:before {
   content: "\f410"
 }
 
 .fa-window-maximize:before {
   content: "\f2d0"
 }
 
 .fa-window-minimize:before {
   content: "\f2d1"
 }
 
 .fa-window-restore:before {
   content: "\f2d2"
 }
 
 .fa-windows:before {
   content: "\f17a"
 }
 
 .fa-wine-bottle:before {
   content: "\f72f"
 }
 
 .fa-wine-glass:before {
   content: "\f4e3"
 }
 
 .fa-wine-glass-alt:before {
   content: "\f5ce"
 }
 
 .fa-wix:before {
   content: "\f5cf"
 }
 
 .fa-wizards-of-the-coast:before {
   content: "\f730"
 }
 
 .fa-wolf-pack-battalion:before {
   content: "\f514"
 }
 
 .fa-won-sign:before {
   content: "\f159"
 }
 
 .fa-wordpress:before {
   content: "\f19a"
 }
 
 .fa-wordpress-simple:before {
   content: "\f411"
 }
 
 .fa-wpbeginner:before {
   content: "\f297"
 }
 
 .fa-wpexplorer:before {
   content: "\f2de"
 }
 
 .fa-wpforms:before {
   content: "\f298"
 }
 
 .fa-wpressr:before {
   content: "\f3e4"
 }
 
 .fa-wrench:before {
   content: "\f0ad"
 }
 
 .fa-x-ray:before {
   content: "\f497"
 }
 
 .fa-xbox:before {
   content: "\f412"
 }
 
 .fa-xing:before {
   content: "\f168"
 }
 
 .fa-xing-square:before {
   content: "\f169"
 }
 
 .fa-y-combinator:before {
   content: "\f23b"
 }
 
 .fa-yahoo:before {
   content: "\f19e"
 }
 
 .fa-yammer:before {
   content: "\f840"
 }
 
 .fa-yandex:before {
   content: "\f413"
 }
 
 .fa-yandex-international:before {
   content: "\f414"
 }
 
 .fa-yarn:before {
   content: "\f7e3"
 }
 
 .fa-yelp:before {
   content: "\f1e9"
 }
 
 .fa-yen-sign:before {
   content: "\f157"
 }
 
 .fa-yin-yang:before {
   content: "\f6ad"
 }
 
 .fa-yoast:before {
   content: "\f2b1"
 }
 
 .fa-youtube:before {
   content: "\f167"
 }
 
 .fa-youtube-square:before {
   content: "\f431"
 }
 
 .fa-zhihu:before {
   content: "\f63f"
 }
 
 .sr-only {
   border: 0;
   clip: rect(0, 0, 0, 0);
   height: 1px;
   margin: -1px;
   overflow: hidden;
   padding: 0;
   position: absolute;
   width: 1px
 }
 
 .sr-only-focusable:active,
 .sr-only-focusable:focus {
   clip: auto;
   height: auto;
   margin: 0;
   overflow: visible;
   position: static;
   width: auto
 }
 
 @font-face {
   font-family: "Font Awesome 5 Brands";
   font-style: normal;
   font-weight: normal;
   font-display: auto;
   src: url(../font/fa5/fa-brands-400.eot);
   src: url(../font/fa5/fa-brands-400.eot?#iefix) format("embedded-opentype"), url(../font/fa5/fa-brands-400.woff2) format("woff2"), url(../font/fa5/fa-brands-400.woff) format("woff"), url(../font/fa5/fa-brands-400.ttf) format("truetype"), url(../font/fa5/fa-brands-400.svg#fontawesome) format("svg")
 }
 
 .fab {
   font-family: "Font Awesome 5 Brands"
 }
 
 @font-face {
   font-family: "Font Awesome 5 Free";
   font-style: normal;
   font-weight: 400;
   font-display: auto;
   src: url(../font/fa5/fa-regular-400.eot);
   src: url(../font/fa5/fa-regular-400.eot?#iefix) format("embedded-opentype"), url(../font/fa5/fa-regular-400.woff2) format("woff2"), url(../font/fa5/fa-regular-400.woff) format("woff"), url(../font/fa5/fa-regular-400.ttf) format("truetype"), url(../font/fa5/fa-regular-400.svg#fontawesome) format("svg")
 }
 
 .far {
   font-weight: 400
 }
 
 @font-face {
   font-family: "Font Awesome 5 Free";
   font-style: normal;
   font-weight: 900;
   font-display: auto;
   src: url(../font/fa5/fa-solid-900.eot);
   src: url(../font/fa5/fa-solid-900.eot?#iefix) format("embedded-opentype"), url(../font/fa5/fa-solid-900.woff2) format("woff2"), url(../font/fa5/fa-solid-900.woff) format("woff"), url(../font/fa5/fa-solid-900.ttf) format("truetype"), url(../font/fa5/fa-solid-900.svg#fontawesome) format("svg")
 }
 
 .fa,
 .far,
 .fas {
   font-family: "Font Awesome 5 Free"
 }
 
 .fa,
 .fas {
   font-weight: 900
 }
 
.mdb-color.lighten-5{background-color:#d0d6e2 !important}.mdb-color.lighten-4{background-color:#b1bace !important}.mdb-color.lighten-3{background-color:#929fba !important}.mdb-color.lighten-2{background-color:#7283a7 !important}.mdb-color.lighten-1{background-color:#59698d !important}.mdb-color{background-color:#45526e !important}.mdb-color-text{color:#45526e !important}.rgba-mdb-color-slight,.rgba-mdb-color-slight:after{background-color:rgba(69,82,110,0.1)}.rgba-mdb-color-light,.rgba-mdb-color-light:after{background-color:rgba(69,82,110,0.3)}.rgba-mdb-color-strong,.rgba-mdb-color-strong:after{background-color:rgba(69,82,110,0.7)}.mdb-color.darken-1{background-color:#3b465e !important}.mdb-color.darken-2{background-color:#2e3951 !important}.mdb-color.darken-3{background-color:#1c2a48 !important}.mdb-color.darken-4{background-color:#1c2331 !important}.red.lighten-5{background-color:#ffebee !important}.red.lighten-4{background-color:#ffcdd2 !important}.red.lighten-3{background-color:#ef9a9a !important}.red.lighten-2{background-color:#e57373 !important}.red.lighten-1{background-color:#ef5350 !important}.red{background-color:#f44336 !important}.red-text{color:#f44336 !important}.rgba-red-slight,.rgba-red-slight:after{background-color:rgba(244,67,54,0.1)}.rgba-red-light,.rgba-red-light:after{background-color:rgba(244,67,54,0.3)}.rgba-red-strong,.rgba-red-strong:after{background-color:rgba(244,67,54,0.7)}.red.darken-1{background-color:#e53935 !important}.red.darken-2{background-color:#d32f2f !important}.red.darken-3{background-color:#c62828 !important}.red.darken-4{background-color:#b71c1c !important}.red.accent-1{background-color:#ff8a80 !important}.red.accent-2{background-color:#ff5252 !important}.red.accent-3{background-color:#ff1744 !important}.red.accent-4{background-color:#d50000 !important}.pink.lighten-5{background-color:#fce4ec !important}.pink.lighten-4{background-color:#f8bbd0 !important}.pink.lighten-3{background-color:#f48fb1 !important}.pink.lighten-2{background-color:#f06292 !important}.pink.lighten-1{background-color:#ec407a !important}.pink{background-color:#e91e63 !important}.pink-text{color:#e91e63 !important}.rgba-pink-slight,.rgba-pink-slight:after{background-color:rgba(233,30,99,0.1)}.rgba-pink-light,.rgba-pink-light:after{background-color:rgba(233,30,99,0.3)}.rgba-pink-strong,.rgba-pink-strong:after{background-color:rgba(233,30,99,0.7)}.pink.darken-1{background-color:#d81b60 !important}.pink.darken-2{background-color:#c2185b !important}.pink.darken-3{background-color:#ad1457 !important}.pink.darken-4{background-color:#880e4f !important}.pink.accent-1{background-color:#ff80ab !important}.pink.accent-2{background-color:#ff4081 !important}.pink.accent-3{background-color:#f50057 !important}.pink.accent-4{background-color:#c51162 !important}.purple.lighten-5{background-color:#f3e5f5 !important}.purple.lighten-4{background-color:#e1bee7 !important}.purple.lighten-3{background-color:#ce93d8 !important}.purple.lighten-2{background-color:#ba68c8 !important}.purple.lighten-1{background-color:#ab47bc !important}.purple{background-color:#9c27b0 !important}.purple-text{color:#9c27b0 !important}.rgba-purple-slight,.rgba-purple-slight:after{background-color:rgba(156,39,176,0.1)}.rgba-purple-light,.rgba-purple-light:after{background-color:rgba(156,39,176,0.3)}.rgba-purple-strong,.rgba-purple-strong:after{background-color:rgba(156,39,176,0.7)}.purple.darken-1{background-color:#8e24aa !important}.purple.darken-2{background-color:#7b1fa2 !important}.purple.darken-3{background-color:#6a1b9a !important}.purple.darken-4{background-color:#4a148c !important}.purple.accent-1{background-color:#ea80fc !important}.purple.accent-2{background-color:#e040fb !important}.purple.accent-3{background-color:#d500f9 !important}.purple.accent-4{background-color:#a0f !important}.deep-purple.lighten-5{background-color:#ede7f6 !important}.deep-purple.lighten-4{background-color:#d1c4e9 !important}.deep-purple.lighten-3{background-color:#b39ddb !important}.deep-purple.lighten-2{background-color:#9575cd !important}.deep-purple.lighten-1{background-color:#7e57c2 !important}.deep-purple{background-color:#673ab7 !important}.deep-purple-text{color:#673ab7 !important}.rgba-deep-purple-slight,.rgba-deep-purple-slight:after{background-color:rgba(103,58,183,0.1)}.rgba-deep-purple-light,.rgba-deep-purple-light:after{background-color:rgba(103,58,183,0.3)}.rgba-deep-purple-strong,.rgba-deep-purple-strong:after{background-color:rgba(103,58,183,0.7)}.deep-purple.darken-1{background-color:#5e35b1 !important}.deep-purple.darken-2{background-color:#512da8 !important}.deep-purple.darken-3{background-color:#4527a0 !important}.deep-purple.darken-4{background-color:#311b92 !important}.deep-purple.accent-1{background-color:#b388ff !important}.deep-purple.accent-2{background-color:#7c4dff !important}.deep-purple.accent-3{background-color:#651fff !important}.deep-purple.accent-4{background-color:#6200ea !important}.indigo.lighten-5{background-color:#e8eaf6 !important}.indigo.lighten-4{background-color:#c5cae9 !important}.indigo.lighten-3{background-color:#9fa8da !important}.indigo.lighten-2{background-color:#7986cb !important}.indigo.lighten-1{background-color:#5c6bc0 !important}.indigo{background-color:#3f51b5 !important}.indigo-text{color:#3f51b5 !important}.rgba-indigo-slight,.rgba-indigo-slight:after{background-color:rgba(63,81,181,0.1)}.rgba-indigo-light,.rgba-indigo-light:after{background-color:rgba(63,81,181,0.3)}.rgba-indigo-strong,.rgba-indigo-strong:after{background-color:rgba(63,81,181,0.7)}.indigo.darken-1{background-color:#3949ab !important}.indigo.darken-2{background-color:#303f9f !important}.indigo.darken-3{background-color:#283593 !important}.indigo.darken-4{background-color:#1a237e !important}.indigo.accent-1{background-color:#8c9eff !important}.indigo.accent-2{background-color:#536dfe !important}.indigo.accent-3{background-color:#3d5afe !important}.indigo.accent-4{background-color:#304ffe !important}.blue.lighten-5{background-color:#e3f2fd !important}.blue.lighten-4{background-color:#bbdefb !important}.blue.lighten-3{background-color:#90caf9 !important}.blue.lighten-2{background-color:#64b5f6 !important}.blue.lighten-1{background-color:#42a5f5 !important}.blue{background-color:#2196f3 !important}.blue-text{color:#2196f3 !important}.rgba-blue-slight,.rgba-blue-slight:after{background-color:rgba(33,150,243,0.1)}.rgba-blue-light,.rgba-blue-light:after{background-color:rgba(33,150,243,0.3)}.rgba-blue-strong,.rgba-blue-strong:after{background-color:rgba(33,150,243,0.7)}.blue.darken-1{background-color:#1e88e5 !important}.blue.darken-2{background-color:#1976d2 !important}.blue.darken-3{background-color:#1565c0 !important}.blue.darken-4{background-color:#0d47a1 !important}.blue.accent-1{background-color:#82b1ff !important}.blue.accent-2{background-color:#448aff !important}.blue.accent-3{background-color:#2979ff !important}.blue.accent-4{background-color:#2962ff !important}.light-blue.lighten-5{background-color:#e1f5fe !important}.light-blue.lighten-4{background-color:#b3e5fc !important}.light-blue.lighten-3{background-color:#81d4fa !important}.light-blue.lighten-2{background-color:#4fc3f7 !important}.light-blue.lighten-1{background-color:#29b6f6 !important}.light-blue{background-color:#03a9f4 !important}.light-blue-text{color:#03a9f4 !important}.rgba-light-blue-slight,.rgba-light-blue-slight:after{background-color:rgba(3,169,244,0.1)}.rgba-light-blue-light,.rgba-light-blue-light:after{background-color:rgba(3,169,244,0.3)}.rgba-light-blue-strong,.rgba-light-blue-strong:after{background-color:rgba(3,169,244,0.7)}.light-blue.darken-1{background-color:#039be5 !important}.light-blue.darken-2{background-color:#0288d1 !important}.light-blue.darken-3{background-color:#0277bd !important}.light-blue.darken-4{background-color:#01579b !important}.light-blue.accent-1{background-color:#80d8ff !important}.light-blue.accent-2{background-color:#40c4ff !important}.light-blue.accent-3{background-color:#00b0ff !important}.light-blue.accent-4{background-color:#0091ea !important}.cyan.lighten-5{background-color:#e0f7fa !important}.cyan.lighten-4{background-color:#b2ebf2 !important}.cyan.lighten-3{background-color:#80deea !important}.cyan.lighten-2{background-color:#4dd0e1 !important}.cyan.lighten-1{background-color:#26c6da !important}.cyan{background-color:#00bcd4 !important}.cyan-text{color:#00bcd4 !important}.rgba-cyan-slight,.rgba-cyan-slight:after{background-color:rgba(0,188,212,0.1)}.rgba-cyan-light,.rgba-cyan-light:after{background-color:rgba(0,188,212,0.3)}.rgba-cyan-strong,.rgba-cyan-strong:after{background-color:rgba(0,188,212,0.7)}.cyan.darken-1{background-color:#00acc1 !important}.cyan.darken-2{background-color:#0097a7 !important}.cyan.darken-3{background-color:#00838f !important}.cyan.darken-4{background-color:#006064 !important}.cyan.accent-1{background-color:#84ffff !important}.cyan.accent-2{background-color:#18ffff !important}.cyan.accent-3{background-color:#00e5ff !important}.cyan.accent-4{background-color:#00b8d4 !important}.teal.lighten-5{background-color:#e0f2f1 !important}.teal.lighten-4{background-color:#b2dfdb !important}.teal.lighten-3{background-color:#80cbc4 !important}.teal.lighten-2{background-color:#4db6ac !important}.teal.lighten-1{background-color:#26a69a !important}.teal{background-color:#009688 !important}.teal-text{color:#009688 !important}.rgba-teal-slight,.rgba-teal-slight:after{background-color:rgba(0,150,136,0.1)}.rgba-teal-light,.rgba-teal-light:after{background-color:rgba(0,150,136,0.3)}.rgba-teal-strong,.rgba-teal-strong:after{background-color:rgba(0,150,136,0.7)}.teal.darken-1{background-color:#00897b !important}.teal.darken-2{background-color:#00796b !important}.teal.darken-3{background-color:#00695c !important}.teal.darken-4{background-color:#004d40 !important}.teal.accent-1{background-color:#a7ffeb !important}.teal.accent-2{background-color:#64ffda !important}.teal.accent-3{background-color:#1de9b6 !important}.teal.accent-4{background-color:#00bfa5 !important}.green.lighten-5{background-color:#e8f5e9 !important}.green.lighten-4{background-color:#c8e6c9 !important}.green.lighten-3{background-color:#a5d6a7 !important}.green.lighten-2{background-color:#81c784 !important}.green.lighten-1{background-color:#66bb6a !important}.green{background-color:#4caf50 !important}.green-text{color:#4caf50 !important}.rgba-green-slight,.rgba-green-slight:after{background-color:rgba(76,175,80,0.1)}.rgba-green-light,.rgba-green-light:after{background-color:rgba(76,175,80,0.3)}.rgba-green-strong,.rgba-green-strong:after{background-color:rgba(76,175,80,0.7)}.green.darken-1{background-color:#43a047 !important}.green.darken-2{background-color:#388e3c !important}.green.darken-3{background-color:#2e7d32 !important}.green.darken-4{background-color:#1b5e20 !important}.green.accent-1{background-color:#b9f6ca !important}.green.accent-2{background-color:#69f0ae !important}.green.accent-3{background-color:#00e676 !important}.green.accent-4{background-color:#00c853 !important}.light-green.lighten-5{background-color:#f1f8e9 !important}.light-green.lighten-4{background-color:#dcedc8 !important}.light-green.lighten-3{background-color:#c5e1a5 !important}.light-green.lighten-2{background-color:#aed581 !important}.light-green.lighten-1{background-color:#9ccc65 !important}.light-green{background-color:#8bc34a !important}.light-green-text{color:#8bc34a !important}.rgba-light-green-slight,.rgba-light-green-slight:after{background-color:rgba(139,195,74,0.1)}.rgba-light-green-light,.rgba-light-green-light:after{background-color:rgba(139,195,74,0.3)}.rgba-light-green-strong,.rgba-light-green-strong:after{background-color:rgba(139,195,74,0.7)}.light-green.darken-1{background-color:#7cb342 !important}.light-green.darken-2{background-color:#689f38 !important}.light-green.darken-3{background-color:#558b2f !important}.light-green.darken-4{background-color:#33691e !important}.light-green.accent-1{background-color:#ccff90 !important}.light-green.accent-2{background-color:#b2ff59 !important}.light-green.accent-3{background-color:#76ff03 !important}.light-green.accent-4{background-color:#64dd17 !important}.lime.lighten-5{background-color:#f9fbe7 !important}.lime.lighten-4{background-color:#f0f4c3 !important}.lime.lighten-3{background-color:#e6ee9c !important}.lime.lighten-2{background-color:#dce775 !important}.lime.lighten-1{background-color:#d4e157 !important}.lime{background-color:#cddc39 !important}.lime-text{color:#cddc39 !important}.rgba-lime-slight,.rgba-lime-slight:after{background-color:rgba(205,220,57,0.1)}.rgba-lime-light,.rgba-lime-light:after{background-color:rgba(205,220,57,0.3)}.rgba-lime-strong,.rgba-lime-strong:after{background-color:rgba(205,220,57,0.7)}.lime.darken-1{background-color:#c0ca33 !important}.lime.darken-2{background-color:#afb42b !important}.lime.darken-3{background-color:#9e9d24 !important}.lime.darken-4{background-color:#827717 !important}.lime.accent-1{background-color:#f4ff81 !important}.lime.accent-2{background-color:#eeff41 !important}.lime.accent-3{background-color:#c6ff00 !important}.lime.accent-4{background-color:#aeea00 !important}.yellow.lighten-5{background-color:#fffde7 !important}.yellow.lighten-4{background-color:#fff9c4 !important}.yellow.lighten-3{background-color:#fff59d !important}.yellow.lighten-2{background-color:#fff176 !important}.yellow.lighten-1{background-color:#ffee58 !important}.yellow{background-color:#ffeb3b !important}.yellow-text{color:#ffeb3b !important}.rgba-yellow-slight,.rgba-yellow-slight:after{background-color:rgba(255,235,59,0.1)}.rgba-yellow-light,.rgba-yellow-light:after{background-color:rgba(255,235,59,0.3)}.rgba-yellow-strong,.rgba-yellow-strong:after{background-color:rgba(255,235,59,0.7)}.yellow.darken-1{background-color:#fdd835 !important}.yellow.darken-2{background-color:#fbc02d !important}.yellow.darken-3{background-color:#f9a825 !important}.yellow.darken-4{background-color:#f57f17 !important}.yellow.accent-1{background-color:#ffff8d !important}.yellow.accent-2{background-color:#ff0 !important}.yellow.accent-3{background-color:#ffea00 !important}.yellow.accent-4{background-color:#ffd600 !important}.amber.lighten-5{background-color:#fff8e1 !important}.amber.lighten-4{background-color:#ffecb3 !important}.amber.lighten-3{background-color:#ffe082 !important}.amber.lighten-2{background-color:#ffd54f !important}.amber.lighten-1{background-color:#ffca28 !important}.amber{background-color:#ffc107 !important}.amber-text{color:#ffc107 !important}.rgba-amber-slight,.rgba-amber-slight:after{background-color:rgba(255,193,7,0.1)}.rgba-amber-light,.rgba-amber-light:after{background-color:rgba(255,193,7,0.3)}.rgba-amber-strong,.rgba-amber-strong:after{background-color:rgba(255,193,7,0.7)}.amber.darken-1{background-color:#ffb300 !important}.amber.darken-2{background-color:#ffa000 !important}.amber.darken-3{background-color:#ff8f00 !important}.amber.darken-4{background-color:#ff6f00 !important}.amber.accent-1{background-color:#ffe57f !important}.amber.accent-2{background-color:#ffd740 !important}.amber.accent-3{background-color:#ffc400 !important}.amber.accent-4{background-color:#ffab00 !important}.orange.lighten-5{background-color:#fff3e0 !important}.orange.lighten-4{background-color:#ffe0b2 !important}.orange.lighten-3{background-color:#ffcc80 !important}.orange.lighten-2{background-color:#ffb74d !important}.orange.lighten-1{background-color:#ffa726 !important}.orange{background-color:#ff9800 !important}.orange-text{color:#ff9800 !important}.rgba-orange-slight,.rgba-orange-slight:after{background-color:rgba(255,152,0,0.1)}.rgba-orange-light,.rgba-orange-light:after{background-color:rgba(255,152,0,0.3)}.rgba-orange-strong,.rgba-orange-strong:after{background-color:rgba(255,152,0,0.7)}.orange.darken-1{background-color:#fb8c00 !important}.orange.darken-2{background-color:#f57c00 !important}.orange.darken-3{background-color:#ef6c00 !important}.orange.darken-4{background-color:#e65100 !important}.orange.accent-1{background-color:#ffd180 !important}.orange.accent-2{background-color:#ffab40 !important}.orange.accent-3{background-color:#ff9100 !important}.orange.accent-4{background-color:#ff6d00 !important}.deep-orange.lighten-5{background-color:#fbe9e7 !important}.deep-orange.lighten-4{background-color:#ffccbc !important}.deep-orange.lighten-3{background-color:#ffab91 !important}.deep-orange.lighten-2{background-color:#ff8a65 !important}.deep-orange.lighten-1{background-color:#ff7043 !important}.deep-orange{background-color:#ff5722 !important}.deep-orange-text{color:#ff5722 !important}.rgba-deep-orange-slight,.rgba-deep-orange-slight:after{background-color:rgba(255,87,34,0.1)}.rgba-deep-orange-light,.rgba-deep-orange-light:after{background-color:rgba(255,87,34,0.3)}.rgba-deep-orange-strong,.rgba-deep-orange-strong:after{background-color:rgba(255,87,34,0.7)}.deep-orange.darken-1{background-color:#f4511e !important}.deep-orange.darken-2{background-color:#e64a19 !important}.deep-orange.darken-3{background-color:#d84315 !important}.deep-orange.darken-4{background-color:#bf360c !important}.deep-orange.accent-1{background-color:#ff9e80 !important}.deep-orange.accent-2{background-color:#ff6e40 !important}.deep-orange.accent-3{background-color:#ff3d00 !important}.deep-orange.accent-4{background-color:#dd2c00 !important}.brown.lighten-5{background-color:#efebe9 !important}.brown.lighten-4{background-color:#d7ccc8 !important}.brown.lighten-3{background-color:#bcaaa4 !important}.brown.lighten-2{background-color:#a1887f !important}.brown.lighten-1{background-color:#8d6e63 !important}.brown{background-color:#795548 !important}.brown-text{color:#795548 !important}.rgba-brown-slight,.rgba-brown-slight:after{background-color:rgba(121,85,72,0.1)}.rgba-brown-light,.rgba-brown-light:after{background-color:rgba(121,85,72,0.3)}.rgba-brown-strong,.rgba-brown-strong:after{background-color:rgba(121,85,72,0.7)}.brown.darken-1{background-color:#6d4c41 !important}.brown.darken-2{background-color:#5d4037 !important}.brown.darken-3{background-color:#4e342e !important}.brown.darken-4{background-color:#3e2723 !important}.blue-grey.lighten-5{background-color:#eceff1 !important}.blue-grey.lighten-4{background-color:#cfd8dc !important}.blue-grey.lighten-3{background-color:#b0bec5 !important}.blue-grey.lighten-2{background-color:#90a4ae !important}.blue-grey.lighten-1{background-color:#78909c !important}.blue-grey{background-color:#607d8b !important}.blue-grey-text{color:#607d8b !important}.rgba-blue-grey-slight,.rgba-blue-grey-slight:after{background-color:rgba(96,125,139,0.1)}.rgba-blue-grey-light,.rgba-blue-grey-light:after{background-color:rgba(96,125,139,0.3)}.rgba-blue-grey-strong,.rgba-blue-grey-strong:after{background-color:rgba(96,125,139,0.7)}.blue-grey.darken-1{background-color:#546e7a !important}.blue-grey.darken-2{background-color:#455a64 !important}.blue-grey.darken-3{background-color:#37474f !important}.blue-grey.darken-4{background-color:#263238 !important}.grey.lighten-5{background-color:#fafafa !important}.grey.lighten-4{background-color:#f5f5f5 !important}.grey.lighten-3{background-color:#eee !important}.grey.lighten-2{background-color:#e0e0e0 !important}.grey.lighten-1{background-color:#bdbdbd !important}.grey{background-color:#9e9e9e !important}.grey-text{color:#9e9e9e !important}.rgba-grey-slight,.rgba-grey-slight:after{background-color:rgba(158,158,158,0.1)}.rgba-grey-light,.md-pills .nav-link:hover,.rgba-grey-light:after,.md-pills .nav-link:hover:after{background-color:rgba(158,158,158,0.3)}.rgba-grey-strong,.rgba-grey-strong:after{background-color:rgba(158,158,158,0.7)}.grey.darken-1{background-color:#757575 !important}.grey.darken-2{background-color:#616161 !important}.grey.darken-3{background-color:#424242 !important}.grey.darken-4{background-color:#212121 !important}.black,.picker__list-item:hover{background-color:#000 !important}.black-text,.md-toast-close-button:hover,.md-toast-close-button:focus{color:#000 !important}.rgba-black-slight,.rgba-black-slight:after{background-color:rgba(0,0,0,0.1)}.rgba-black-light,.rgba-black-light:after{background-color:rgba(0,0,0,0.3)}.rgba-black-strong,.rgba-black-strong:after{background-color:rgba(0,0,0,0.7)}.white,.picker__list-item,.picker__box .picker__header .picker__select--month.browser-default,.picker__box .picker__header .picker__select--year.browser-default{background-color:#fff !important}.white-text,.dropdown .dropdown-menu .dropdown-item:hover,.dropdown .dropdown-menu .dropdown-item:active,.dropup .dropdown-menu .dropdown-item:hover,.dropup .dropdown-menu .dropdown-item:active,.dropleft .dropdown-menu .dropdown-item:hover,.dropleft .dropdown-menu .dropdown-item:active,.dropright .dropdown-menu .dropdown-item:hover,.dropright .dropdown-menu .dropdown-item:active,.side-nav,.side-nav .search-form .form-control,.md-toast-message a,.md-toast-message label,.md-toast-close-button,#toast-container>div,.picker__list-item--selected,.picker__list-item--selected:hover,.picker--focused .picker__list-item--selected,.picker--time .picker__button--clear:hover,.picker--time .picker__button--clear:focus,.picker--time .picker__button--clear:hover::before,.picker--time .picker__button--clear:focus::before,.picker__date-display,.picker__date-display .clockpicker-display .clockpicker-display-column .clockpicker-span-hours.text-primary,.picker__date-display .clockpicker-display .clockpicker-display-column .clockpicker-span-minutes.text-primary,.picker__date-display .clockpicker-display .clockpicker-display-column #click-am.text-primary,.picker__date-display .clockpicker-display .clockpicker-display-column #click-pm.text-primary,.clockpicker-display .clockpicker-display-column .clockpicker-span-hours.text-primary,.clockpicker-display .clockpicker-display-column .clockpicker-span-minutes.text-primary,.clockpicker-display .clockpicker-display-column #click-am.text-primary,.clockpicker-display .clockpicker-display-column #click-pm.text-primary,.darktheme .picker__box .picker__date-display .clockpicker-display,.darktheme .picker__box .picker__date-display .clockpicker-display .clockpicker-span-am-pm,.darktheme .picker__box .picker__calendar-container .clockpicker-plate .clockpicker-tick,.darktheme .picker__box .picker__footer button,.picker__box .picker__header .picker__date-display,.picker__box .picker__table .picker__day--outfocus,.picker__box .picker__table .picker__day--selected,.picker__box .picker__table .picker__day--selected:hover,.picker__box .picker__table .picker--focused{color:#fff !important}.rgba-white-slight,.rgba-white-slight:after{background-color:rgba(255,255,255,0.1)}.rgba-white-light,.rgba-white-light:after{background-color:rgba(255,255,255,0.3)}.rgba-white-strong,.rgba-white-strong:after{background-color:rgba(255,255,255,0.7)}.rgba-stylish-slight{background-color:rgba(62,69,81,0.1)}.rgba-stylish-light{background-color:rgba(62,69,81,0.3)}.rgba-stylish-strong{background-color:rgba(62,69,81,0.7)}.primary-color,ul.stepper li.active a .circle,ul.stepper li.completed a .circle{background-color:#4285f4 !important}.primary-color-dark{background-color:#0d47a1 !important}.secondary-color{background-color:#a6c !important}.secondary-color-dark{background-color:#93c !important}.default-color{background-color:#2bbbad !important}.default-color-dark{background-color:#00695c !important}.info-color{background-color:#33b5e5 !important}.info-color-dark{background-color:#09c !important}.success-color{background-color:#00c851 !important}.success-color-dark{background-color:#007e33 !important}.warning-color{background-color:#fb3 !important}.warning-color-dark{background-color:#f80 !important}.danger-color,ul.stepper li.warning a .circle{background-color:#ff3547 !important}.danger-color-dark{background-color:#c00 !important}.elegant-color{background-color:#2e2e2e !important}.elegant-color-dark{background-color:#212121 !important}.stylish-color{background-color:#4b515d !important}.stylish-color-dark{background-color:#3e4551 !important}.unique-color{background-color:#3f729b !important}.unique-color-dark{background-color:#1c2331 !important}.special-color{background-color:#37474f !important}.special-color-dark{background-color:#263238 !important}.purple-gradient{background:linear-gradient(40deg, #ff6ec4, #7873f5) !important}.peach-gradient{background:linear-gradient(40deg, #ffd86f, #fc6262) !important}.aqua-gradient{background:linear-gradient(40deg, #2096ff, #05ffa3) !important}.blue-gradient{background:linear-gradient(40deg, #45cafc, #303f9f) !important}.purple-gradient-rgba{background:linear-gradient(40deg, rgba(255,110,196,0.9), rgba(120,115,245,0.9)) !important}.peach-gradient-rgba{background:linear-gradient(40deg, rgba(255,216,111,0.9), rgba(252,98,98,0.9)) !important}.aqua-gradient-rgba{background:linear-gradient(40deg, rgba(32,150,255,0.9), rgba(5,255,163,0.9)) !important}.blue-gradient-rgba{background:linear-gradient(40deg, rgba(69,202,252,0.9), rgba(48,63,159,0.9)) !important}.dark-grey-text{color:#4f4f4f !important}.dark-grey-text:hover,.dark-grey-text:focus{color:#4f4f4f !important}.hoverable{-webkit-box-shadow:none;box-shadow:none;-webkit-transition:all 0.55s ease-in-out;transition:all 0.55s ease-in-out}.hoverable:hover{-webkit-box-shadow:0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);box-shadow:0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);-webkit-transition:all 0.55s ease-in-out;transition:all 0.55s ease-in-out}.z-depth-0{-webkit-box-shadow:none !important;box-shadow:none !important}.z-depth-1,.chip:active{-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12) !important;box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12) !important}.z-depth-1-half{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15) !important;box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15) !important}.z-depth-2{-webkit-box-shadow:0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important;box-shadow:0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19) !important}.z-depth-3{-webkit-box-shadow:0 12px 15px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19) !important;box-shadow:0 12px 15px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19) !important}.z-depth-4{-webkit-box-shadow:0 16px 28px 0 rgba(0,0,0,0.22),0 25px 55px 0 rgba(0,0,0,0.21) !important;box-shadow:0 16px 28px 0 rgba(0,0,0,0.22),0 25px 55px 0 rgba(0,0,0,0.21) !important}.z-depth-5{-webkit-box-shadow:0 27px 24px 0 rgba(0,0,0,0.2),0 40px 77px 0 rgba(0,0,0,0.22) !important;box-shadow:0 27px 24px 0 rgba(0,0,0,0.2),0 40px 77px 0 rgba(0,0,0,0.22) !important}.disabled,:disabled{pointer-events:none !important}a{color:#007bff;text-decoration:none;cursor:pointer;-webkit-transition:all 0.2s ease-in-out;transition:all 0.2s ease-in-out}a:hover{color:#0056b3;text-decoration:none;-webkit-transition:all 0.2s ease-in-out;transition:all 0.2s ease-in-out}a.disabled:hover,a:disabled:hover{color:#007bff}a:not([href]):not([tabindex]),a:not([href]):not([tabindex]):focus,a:not([href]):not([tabindex]):hover{color:inherit;text-decoration:none}.divider-new{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;margin-top:2.8rem;margin-bottom:2.8rem}.divider-new>h1,.divider-new h2,.divider-new h3,.divider-new h4,.divider-new h5,.divider-new h6{margin-bottom:0}.divider-new:before,.divider-new:after{-webkit-box-flex:1;-ms-flex:1;flex:1;height:1.5px;height:2px;content:"";background:#c6c6c6}.divider-new:before{margin:0 .5rem 0 0}.divider-new:after{margin:0 0 0 .5rem}.img-fluid,.modal-dialog.cascading-modal.modal-avatar .modal-header,.video-fluid{max-width:100%;height:auto}.flex-center{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;height:100%}.flex-center p{margin:0}.flex-center ul{text-align:center}.flex-center ul li{margin-bottom:1rem}.flex-center ul li:last-of-type{margin-bottom:0}.hr-light{border-top:1px solid #fff}.hr-dark{border-top:1px solid #666}.w-responsive{width:75%}@media (max-width: 740px){.w-responsive{width:100%}}.w-header{width:3.2rem}.collapsible-body{display:none}.jumbotron{background-color:#fff;border-radius:.125rem;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)}.bg-primary{background-color:#4285f4 !important}a.bg-primary:hover,a.bg-primary:focus,button.bg-primary:hover,button.bg-primary:focus{background-color:#1266f1 !important}.border-primary{border-color:#4285f4 !important}.bg-danger{background-color:#ff3547 !important}a.bg-danger:hover,a.bg-danger:focus,button.bg-danger:hover,button.bg-danger:focus{background-color:#ff0219 !important}.border-danger{border-color:#ff3547 !important}.bg-warning{background-color:#fb3 !important}a.bg-warning:hover,a.bg-warning:focus,button.bg-warning:hover,button.bg-warning:focus{background-color:#fa0 !important}.border-warning{border-color:#fb3 !important}.bg-success{background-color:#00c851 !important}a.bg-success:hover,a.bg-success:focus,button.bg-success:hover,button.bg-success:focus{background-color:#00953c !important}.border-success{border-color:#00c851 !important}.bg-info{background-color:#33b5e5 !important}a.bg-info:hover,a.bg-info:focus,button.bg-info:hover,button.bg-info:focus{background-color:#1a9bcb !important}.border-info{border-color:#33b5e5 !important}.bg-default{background-color:#2bbbad !important}a.bg-default:hover,a.bg-default:focus,button.bg-default:hover,button.bg-default:focus{background-color:#219287 !important}.border-default{border-color:#2bbbad !important}.bg-secondary{background-color:#a6c !important}a.bg-secondary:hover,a.bg-secondary:focus,button.bg-secondary:hover,button.bg-secondary:focus{background-color:#9540bf !important}.border-secondary{border-color:#a6c !important}.bg-dark{background-color:#212121 !important}a.bg-dark:hover,a.bg-dark:focus,button.bg-dark:hover,button.bg-dark:focus{background-color:#080808 !important}.border-dark{border-color:#212121 !important}.bg-light{background-color:#e0e0e0 !important}a.bg-light:hover,a.bg-light:focus,button.bg-light:hover,button.bg-light:focus{background-color:#c7c7c7 !important}.border-light{border-color:#e0e0e0 !important}.card-img-100{width:100px;height:100px}.card-img-64{width:64px;height:64px}.mml-1{margin-left:-0.25rem !important}.flex-1{-webkit-box-flex:1;-ms-flex:1;flex:1}@font-face{font-family:Roboto;font-weight:200;src:local(Roboto Thin),url(../font/roboto/Roboto-Thin.eot);src:url(../font/roboto/Roboto-Thin.eot?#iefix) format("embedded-opentype"),url(../font/roboto/Roboto-Thin.woff2) format("woff2"),url(../font/roboto/Roboto-Thin.woff) format("woff"),url(../font/roboto/Roboto-Thin.ttf) format("truetype")}@font-face{font-family:Roboto;font-weight:300;src:local(Roboto Light),url(../font/roboto/Roboto-Light.eot);src:url(../font/roboto/Roboto-Light.eot?#iefix) format("embedded-opentype"),url(../font/roboto/Roboto-Light.woff2) format("woff2"),url(../font/roboto/Roboto-Light.woff) format("woff"),url(../font/roboto/Roboto-Light.ttf) format("truetype")}@font-face{font-family:Roboto;font-weight:400;src:local(Roboto Regular),url(../font/roboto/Roboto-Regular.eot);src:url(../font/roboto/Roboto-Regular.eot?#iefix) format("embedded-opentype"),url(../font/roboto/Roboto-Regular.woff2) format("woff2"),url(../font/roboto/Roboto-Regular.woff) format("woff"),url(../font/roboto/Roboto-Regular.ttf) format("truetype")}@font-face{font-family:Roboto;font-weight:500;src:url(../font/roboto/Roboto-Medium.eot);src:url(../font/roboto/Roboto-Medium.eot?#iefix) format("embedded-opentype"),url(../font/roboto/Roboto-Medium.woff2) format("woff2"),url(../font/roboto/Roboto-Medium.woff) format("woff"),url(../font/roboto/Roboto-Medium.ttf) format("truetype")}@font-face{font-family:Roboto;font-weight:700;src:url(../font/roboto/Roboto-Bold.eot);src:url(../font/roboto/Roboto-Bold.eot?#iefix) format("embedded-opentype"),url(../font/roboto/Roboto-Bold.woff2) format("woff2"),url(../font/roboto/Roboto-Bold.woff) format("woff"),url(../font/roboto/Roboto-Bold.ttf) format("truetype")}body{font-family:"Roboto",sans-serif;font-weight:300}h1,h2,h3,h4,h5,h6{font-weight:300}.blockquote{padding:.5rem 1rem;border-left:.25rem solid #eceeef}.blockquote.text-right{border-right:.25rem solid #eceeef;border-left:none}.blockquote .bq-title{margin-bottom:0;font-size:1.5rem;font-weight:400}.blockquote p{padding:1rem 0;font-size:1.1rem}.bq-primary{border-left:3px solid #4285f4 !important}.bq-primary .bq-title{color:#4285f4 !important}.bq-danger{border-left:3px solid #ff3547 !important}.bq-danger .bq-title{color:#ff3547 !important}.bq-warning{border-left:3px solid #fb3 !important}.bq-warning .bq-title{color:#fb3 !important}.bq-success{border-left:3px solid #00c851 !important}.bq-success .bq-title{color:#00c851 !important}.bq-info{border-left:3px solid #33b5e5 !important}.bq-info .bq-title{color:#33b5e5 !important}.h1-responsive{font-size:150%}.h2-responsive{font-size:145%}.h3-responsive{font-size:135%}.h4-responsive{font-size:135%}.h5-responsive{font-size:135%}@media (min-width: 576px){.h1-responsive{font-size:170%}.h2-responsive{font-size:140%}.h3-responsive{font-size:125%}.h4-responsive{font-size:125%}.h5-responsive{font-size:125%}}@media (min-width: 768px){.h1-responsive{font-size:200%}.h2-responsive{font-size:170%}.h3-responsive{font-size:140%}.h4-responsive{font-size:125%}.h5-responsive{font-size:125%}}@media (min-width: 992px){.h1-responsive{font-size:200%}.h2-responsive{font-size:170%}.h3-responsive{font-size:140%}.h4-responsive{font-size:125%}.h5-responsive{font-size:125%}}@media (min-width: 1200px){.h1-responsive{font-size:250%}.h2-responsive{font-size:200%}.h3-responsive{font-size:170%}.h4-responsive{font-size:140%}.h5-responsive{font-size:125%}}.text-primary{color:#4285f4 !important}a.text-primary:hover,a.text-primary:focus{color:#1266f1 !important}.text-danger{color:#ff3547 !important}a.text-danger:hover,a.text-danger:focus{color:#ff0219 !important}.text-warning{color:#fb3 !important}a.text-warning:hover,a.text-warning:focus{color:#fa0 !important}.text-success{color:#00c851 !important}a.text-success:hover,a.text-success:focus{color:#00953c !important}.text-info{color:#33b5e5 !important}a.text-info:hover,a.text-info:focus{color:#1a9bcb !important}.text-default{color:#2bbbad !important}a.text-default:hover,a.text-default:focus{color:#219287 !important}.text-secondary{color:#a6c !important}a.text-secondary:hover,a.text-secondary:focus{color:#9540bf !important}.text-dark{color:#212121 !important}a.text-dark:hover,a.text-dark:focus{color:#080808 !important}.text-light{color:#e0e0e0 !important}a.text-light:hover,a.text-light:focus{color:#c7c7c7 !important}.font-small{font-size:.9rem}.view{position:relative;overflow:hidden;cursor:default}.view .mask{position:absolute;top:0;right:0;bottom:0;left:0;width:100%;height:100%;overflow:hidden;background-attachment:fixed}.view img,.view video{position:relative;display:block}.view video.video-intro{top:50%;left:50%;z-index:-100;width:auto;min-width:100%;height:auto;min-height:100%;-webkit-transition:1s opacity;transition:1s opacity;-webkit-transform:translateX(-50%) translateY(-50%);transform:translateX(-50%) translateY(-50%)}.overlay .mask{opacity:0;-webkit-transition:all 0.4s ease-in-out;transition:all 0.4s ease-in-out}.overlay .mask:hover{opacity:1}.zoom img,.zoom video{-webkit-transition:all 0.2s linear;transition:all 0.2s linear}.zoom:hover img,.zoom:hover video{-webkit-transform:scale(1.1);transform:scale(1.1)}.pattern-1{background:url(../img/overlays/01.png);background-attachment:fixed}.pattern-2{background:url(../img/overlays/02.png);background-attachment:fixed}.pattern-3{background:url(../img/overlays/03.png);background-attachment:fixed}.pattern-4{background:url(../img/overlays/04.png);background-attachment:fixed}.pattern-5{background:url(../img/overlays/05.png);background-attachment:fixed}.pattern-6{background:url(../img/overlays/06.png);background-attachment:fixed}.pattern-7{background:url(../img/overlays/07.png);background-attachment:fixed}.pattern-8{background:url(../img/overlays/08.png);background-attachment:fixed}.pattern-9{background:url(../img/overlays/09.png);background-attachment:fixed}/*!
 * Waves v0.7.6
 * http://fian.my.id/Waves
 *
 * Copyright 2014-2018 Alfiana E. Sibuea and other contributors
 * Released under the MIT license
 * https://github.com/fians/Waves/blob/master/LICENSE */.waves-effect{position:relative;overflow:hidden;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-tap-highlight-color:transparent}.waves-effect .waves-ripple{position:absolute;width:100px;height:100px;margin-top:-50px;margin-left:-50px;pointer-events:none;background:rgba(0,0,0,0.2);background:radial-gradient(rgba(0,0,0,0.2) 0,rgba(0,0,0,0.3) 40%,rgba(0,0,0,0.4) 50%,rgba(0,0,0,0.5) 60%,rgba(255,255,255,0) 70%);border-radius:50%;opacity:0;-webkit-transition-property:-webkit-transform, opacity;-webkit-transition-property:opacity, -webkit-transform;transition-property:opacity, -webkit-transform;transition-property:transform, opacity;transition-property:transform, opacity, -webkit-transform;-webkit-transition:all 0.5s ease-out;transition:all 0.5s ease-out;-webkit-transform:scale(0) translate(0, 0);transform:scale(0) translate(0, 0)}.waves-effect.waves-light .waves-ripple{background:rgba(255,255,255,0.4);background:radial-gradient(rgba(255,255,255,0.2) 0,rgba(255,255,255,0.3) 40%,rgba(255,255,255,0.4) 50%,rgba(255,255,255,0.5) 60%,rgba(255,255,255,0) 70%)}.waves-effect.waves-classic .waves-ripple{background:rgba(0,0,0,0.2)}.waves-effect.waves-classic.waves-light .waves-ripple{background:rgba(255,255,255,0.4)}.waves-notransition{-webkit-transition:none !important;transition:none !important}.waves-button,.waves-circle{-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-mask-image:-webkit-radial-gradient(circle, #fff 100%, #000 100%)}.waves-button,.waves-button:hover,.waves-button:visited,.waves-button-input{z-index:1;font-size:1em;line-height:1em;color:inherit;text-align:center;text-decoration:none;white-space:nowrap;vertical-align:middle;cursor:pointer;background-color:rgba(0,0,0,0);border:none;outline:none}.waves-button{padding:.85em 1.1em;border-radius:.2em}.waves-button-input{padding:.85em 1.1em;margin:0}.waves-input-wrapper{position:relative;display:inline-block;vertical-align:middle;border-radius:.2em}.waves-input-wrapper.waves-button{padding:0}.waves-input-wrapper .waves-button-input{position:relative;top:0;left:0;z-index:1}.waves-circle{width:2.5em;height:2.5em;line-height:2.5em;text-align:center;border-radius:50%}.waves-float{-webkit-mask-image:none;-webkit-box-shadow:0 1px 1.5px 1px rgba(0,0,0,0.12);box-shadow:0 1px 1.5px 1px rgba(0,0,0,0.12);-webkit-transition:all 300ms;transition:all 300ms}.waves-float:active{-webkit-box-shadow:0 8px 20px 1px rgba(0,0,0,0.3);box-shadow:0 8px 20px 1px rgba(0,0,0,0.3)}.waves-block{display:block}a.waves-effect,a.waves-light{display:inline-block}/*!
 * animate.css -http://daneden.me/animate
 * Version - 3.7.0
 * Licensed under the MIT license - http://opensource.org/licenses/MIT
 *
 * Copyright (c) 2018 Daniel Eden
 */.animated{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both}.animated.infinite{-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}.animated.delay-1s{-webkit-animation-delay:1s;animation-delay:1s}.animated.delay-2s{-webkit-animation-delay:2s;animation-delay:2s}.animated.delay-3s{-webkit-animation-delay:3s;animation-delay:3s}.animated.delay-4s{-webkit-animation-delay:4s;animation-delay:4s}.animated.delay-5s{-webkit-animation-delay:5s;animation-delay:5s}.animated.fast{-webkit-animation-duration:800ms;animation-duration:800ms}.animated.faster{-webkit-animation-duration:500ms;animation-duration:500ms}.animated.slow{-webkit-animation-duration:2s;animation-duration:2s}.animated.slower{-webkit-animation-duration:3s;animation-duration:3s}@media (prefers-reduced-motion){.animated{-webkit-transition:none !important;transition:none !important;-webkit-animation:unset !important;animation:unset !important}}@-webkit-keyframes fadeIn{from{opacity:0}to{opacity:1}}@keyframes fadeIn{from{opacity:0}to{opacity:1}}.fadeIn{-webkit-animation-name:fadeIn;animation-name:fadeIn}@-webkit-keyframes fadeInDown{from{opacity:0;-webkit-transform:translate3d(0, -100%, 0);transform:translate3d(0, -100%, 0)}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}@keyframes fadeInDown{from{opacity:0;-webkit-transform:translate3d(0, -100%, 0);transform:translate3d(0, -100%, 0)}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}.fadeInDown{-webkit-animation-name:fadeInDown;animation-name:fadeInDown}@-webkit-keyframes fadeInLeft{from{opacity:0;-webkit-transform:translate3d(-100%, 0, 0);transform:translate3d(-100%, 0, 0)}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}@keyframes fadeInLeft{from{opacity:0;-webkit-transform:translate3d(-100%, 0, 0);transform:translate3d(-100%, 0, 0)}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}.fadeInLeft{-webkit-animation-name:fadeInLeft;animation-name:fadeInLeft}@-webkit-keyframes fadeInRight{from{opacity:0;-webkit-transform:translate3d(100%, 0, 0);transform:translate3d(100%, 0, 0)}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}@keyframes fadeInRight{from{opacity:0;-webkit-transform:translate3d(100%, 0, 0);transform:translate3d(100%, 0, 0)}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}.fadeInRight{-webkit-animation-name:fadeInRight;animation-name:fadeInRight}@-webkit-keyframes fadeInUp{from{opacity:0;-webkit-transform:translate3d(0, 100%, 0);transform:translate3d(0, 100%, 0)}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}@keyframes fadeInUp{from{opacity:0;-webkit-transform:translate3d(0, 100%, 0);transform:translate3d(0, 100%, 0)}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}.fadeInUp{-webkit-animation-name:fadeInUp;animation-name:fadeInUp}@-webkit-keyframes fadeOut{from{opacity:1}to{opacity:0}}@keyframes fadeOut{from{opacity:1}to{opacity:0}}.fadeOut{-webkit-animation-name:fadeOut;animation-name:fadeOut}@-webkit-keyframes fadeOutDown{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(0, 100%, 0);transform:translate3d(0, 100%, 0)}}@keyframes fadeOutDown{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(0, 100%, 0);transform:translate3d(0, 100%, 0)}}.fadeOutDown{-webkit-animation-name:fadeOutDown;animation-name:fadeOutDown}@-webkit-keyframes fadeOutLeft{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(-100%, 0, 0);transform:translate3d(-100%, 0, 0)}}@keyframes fadeOutLeft{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(-100%, 0, 0);transform:translate3d(-100%, 0, 0)}}.fadeOutLeft{-webkit-animation-name:fadeOutLeft;animation-name:fadeOutLeft}@-webkit-keyframes fadeOutRight{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(100%, 0, 0);transform:translate3d(100%, 0, 0)}}@keyframes fadeOutRight{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(100%, 0, 0);transform:translate3d(100%, 0, 0)}}.fadeOutRight{-webkit-animation-name:fadeOutRight;animation-name:fadeOutRight}@-webkit-keyframes fadeOutUp{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(0, -100%, 0);transform:translate3d(0, -100%, 0)}}@keyframes fadeOutUp{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(0, -100%, 0);transform:translate3d(0, -100%, 0)}}.fadeOutUp{-webkit-animation-name:fadeOutUp;animation-name:fadeOutUp}/*!
 * animate.css -http://daneden.me/animate
 * Version - 3.7.0
 * Licensed under the MIT license - http://opensource.org/licenses/MIT
 *
 * Copyright (c) 2018 Daniel Eden
 */@-webkit-keyframes bounce{from,20%,53%,80%,to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0);-webkit-animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1);animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1)}40%,43%{-webkit-transform:translate3d(0, -30px, 0);transform:translate3d(0, -30px, 0);-webkit-animation-timing-function:cubic-bezier(0.755, 0.05, 0.855, 0.06);animation-timing-function:cubic-bezier(0.755, 0.05, 0.855, 0.06)}70%{-webkit-transform:translate3d(0, -15px, 0);transform:translate3d(0, -15px, 0);-webkit-animation-timing-function:cubic-bezier(0.755, 0.05, 0.855, 0.06);animation-timing-function:cubic-bezier(0.755, 0.05, 0.855, 0.06)}90%{-webkit-transform:translate3d(0, -4px, 0);transform:translate3d(0, -4px, 0)}}@keyframes bounce{from,20%,53%,80%,to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0);-webkit-animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1);animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1)}40%,43%{-webkit-transform:translate3d(0, -30px, 0);transform:translate3d(0, -30px, 0);-webkit-animation-timing-function:cubic-bezier(0.755, 0.05, 0.855, 0.06);animation-timing-function:cubic-bezier(0.755, 0.05, 0.855, 0.06)}70%{-webkit-transform:translate3d(0, -15px, 0);transform:translate3d(0, -15px, 0);-webkit-animation-timing-function:cubic-bezier(0.755, 0.05, 0.855, 0.06);animation-timing-function:cubic-bezier(0.755, 0.05, 0.855, 0.06)}90%{-webkit-transform:translate3d(0, -4px, 0);transform:translate3d(0, -4px, 0)}}.bounce{-webkit-transform-origin:center bottom;transform-origin:center bottom;-webkit-animation-name:bounce;animation-name:bounce}@-webkit-keyframes flash{from,50%,to{opacity:1}25%,75%{opacity:0}}@keyframes flash{from,50%,to{opacity:1}25%,75%{opacity:0}}.flash{-webkit-animation-name:flash;animation-name:flash}@-webkit-keyframes pulse{from{-webkit-transform:scale3d(1, 1, 1);transform:scale3d(1, 1, 1)}50%{-webkit-transform:scale3d(1.05, 1.05, 1.05);transform:scale3d(1.05, 1.05, 1.05)}to{-webkit-transform:scale3d(1, 1, 1);transform:scale3d(1, 1, 1)}}@keyframes pulse{from{-webkit-transform:scale3d(1, 1, 1);transform:scale3d(1, 1, 1)}50%{-webkit-transform:scale3d(1.05, 1.05, 1.05);transform:scale3d(1.05, 1.05, 1.05)}to{-webkit-transform:scale3d(1, 1, 1);transform:scale3d(1, 1, 1)}}.pulse{-webkit-animation-name:pulse;animation-name:pulse}@-webkit-keyframes rubberBand{from{-webkit-transform:scale3d(1, 1, 1);transform:scale3d(1, 1, 1)}30%{-webkit-transform:scale3d(1.25, 0.75, 1);transform:scale3d(1.25, 0.75, 1)}40%{-webkit-transform:scale3d(0.75, 1.25, 1);transform:scale3d(0.75, 1.25, 1)}50%{-webkit-transform:scale3d(1.15, 0.85, 1);transform:scale3d(1.15, 0.85, 1)}65%{-webkit-transform:scale3d(0.95, 1.05, 1);transform:scale3d(0.95, 1.05, 1)}75%{-webkit-transform:scale3d(1.05, 0.95, 1);transform:scale3d(1.05, 0.95, 1)}to{-webkit-transform:scale3d(1, 1, 1);transform:scale3d(1, 1, 1)}}@keyframes rubberBand{from{-webkit-transform:scale3d(1, 1, 1);transform:scale3d(1, 1, 1)}30%{-webkit-transform:scale3d(1.25, 0.75, 1);transform:scale3d(1.25, 0.75, 1)}40%{-webkit-transform:scale3d(0.75, 1.25, 1);transform:scale3d(0.75, 1.25, 1)}50%{-webkit-transform:scale3d(1.15, 0.85, 1);transform:scale3d(1.15, 0.85, 1)}65%{-webkit-transform:scale3d(0.95, 1.05, 1);transform:scale3d(0.95, 1.05, 1)}75%{-webkit-transform:scale3d(1.05, 0.95, 1);transform:scale3d(1.05, 0.95, 1)}to{-webkit-transform:scale3d(1, 1, 1);transform:scale3d(1, 1, 1)}}.rubberBand{-webkit-animation-name:rubberBand;animation-name:rubberBand}@-webkit-keyframes shake{from,to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}10%,30%,50%,70%,90%{-webkit-transform:translate3d(-10px, 0, 0);transform:translate3d(-10px, 0, 0)}20%,40%,60%,80%{-webkit-transform:translate3d(10px, 0, 0);transform:translate3d(10px, 0, 0)}}@keyframes shake{from,to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}10%,30%,50%,70%,90%{-webkit-transform:translate3d(-10px, 0, 0);transform:translate3d(-10px, 0, 0)}20%,40%,60%,80%{-webkit-transform:translate3d(10px, 0, 0);transform:translate3d(10px, 0, 0)}}.shake{-webkit-animation-name:shake;animation-name:shake}@-webkit-keyframes headShake{0%{-webkit-transform:translateX(0);transform:translateX(0)}6.5%{-webkit-transform:translateX(-6px) rotateY(-9deg);transform:translateX(-6px) rotateY(-9deg)}18.5%{-webkit-transform:translateX(5px) rotateY(7deg);transform:translateX(5px) rotateY(7deg)}31.5%{-webkit-transform:translateX(-3px) rotateY(-5deg);transform:translateX(-3px) rotateY(-5deg)}43.5%{-webkit-transform:translateX(2px) rotateY(3deg);transform:translateX(2px) rotateY(3deg)}50%{-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes headShake{0%{-webkit-transform:translateX(0);transform:translateX(0)}6.5%{-webkit-transform:translateX(-6px) rotateY(-9deg);transform:translateX(-6px) rotateY(-9deg)}18.5%{-webkit-transform:translateX(5px) rotateY(7deg);transform:translateX(5px) rotateY(7deg)}31.5%{-webkit-transform:translateX(-3px) rotateY(-5deg);transform:translateX(-3px) rotateY(-5deg)}43.5%{-webkit-transform:translateX(2px) rotateY(3deg);transform:translateX(2px) rotateY(3deg)}50%{-webkit-transform:translateX(0);transform:translateX(0)}}.headShake{-webkit-animation-name:headShake;animation-name:headShake;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}@-webkit-keyframes swing{20%{-webkit-transform:rotate3d(0, 0, 1, 15deg);transform:rotate3d(0, 0, 1, 15deg)}40%{-webkit-transform:rotate3d(0, 0, 1, -10deg);transform:rotate3d(0, 0, 1, -10deg)}60%{-webkit-transform:rotate3d(0, 0, 1, 5deg);transform:rotate3d(0, 0, 1, 5deg)}80%{-webkit-transform:rotate3d(0, 0, 1, -5deg);transform:rotate3d(0, 0, 1, -5deg)}to{-webkit-transform:rotate3d(0, 0, 1, 0deg);transform:rotate3d(0, 0, 1, 0deg)}}@keyframes swing{20%{-webkit-transform:rotate3d(0, 0, 1, 15deg);transform:rotate3d(0, 0, 1, 15deg)}40%{-webkit-transform:rotate3d(0, 0, 1, -10deg);transform:rotate3d(0, 0, 1, -10deg)}60%{-webkit-transform:rotate3d(0, 0, 1, 5deg);transform:rotate3d(0, 0, 1, 5deg)}80%{-webkit-transform:rotate3d(0, 0, 1, -5deg);transform:rotate3d(0, 0, 1, -5deg)}to{-webkit-transform:rotate3d(0, 0, 1, 0deg);transform:rotate3d(0, 0, 1, 0deg)}}.swing{-webkit-transform-origin:top center;transform-origin:top center;-webkit-animation-name:swing;animation-name:swing}@-webkit-keyframes tada{from{-webkit-transform:scale3d(1, 1, 1);transform:scale3d(1, 1, 1)}10%,20%{-webkit-transform:scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);transform:scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg)}30%,50%,70%,90%{-webkit-transform:scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);transform:scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg)}40%,60%,80%{-webkit-transform:scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);transform:scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg)}to{-webkit-transform:scale3d(1, 1, 1);transform:scale3d(1, 1, 1)}}@keyframes tada{from{-webkit-transform:scale3d(1, 1, 1);transform:scale3d(1, 1, 1)}10%,20%{-webkit-transform:scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);transform:scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg)}30%,50%,70%,90%{-webkit-transform:scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);transform:scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg)}40%,60%,80%{-webkit-transform:scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);transform:scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg)}to{-webkit-transform:scale3d(1, 1, 1);transform:scale3d(1, 1, 1)}}.tada{-webkit-animation-name:tada;animation-name:tada}@-webkit-keyframes wobble{from{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}15%{-webkit-transform:translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);transform:translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg)}30%{-webkit-transform:translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);transform:translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg)}45%{-webkit-transform:translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);transform:translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg)}60%{-webkit-transform:translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);transform:translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg)}75%{-webkit-transform:translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);transform:translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg)}to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}@keyframes wobble{from{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}15%{-webkit-transform:translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);transform:translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg)}30%{-webkit-transform:translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);transform:translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg)}45%{-webkit-transform:translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);transform:translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg)}60%{-webkit-transform:translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);transform:translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg)}75%{-webkit-transform:translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);transform:translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg)}to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}.wobble{-webkit-animation-name:wobble;animation-name:wobble}@-webkit-keyframes jello{from,11.1%,to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}22.2%{-webkit-transform:skewX(-12.5deg) skewY(-12.5deg);transform:skewX(-12.5deg) skewY(-12.5deg)}33.3%{-webkit-transform:skewX(6.25deg) skewY(6.25deg);transform:skewX(6.25deg) skewY(6.25deg)}44.4%{-webkit-transform:skewX(-3.125deg) skewY(-3.125deg);transform:skewX(-3.125deg) skewY(-3.125deg)}55.5%{-webkit-transform:skewX(1.5625deg) skewY(1.5625deg);transform:skewX(1.5625deg) skewY(1.5625deg)}66.6%{-webkit-transform:skewX(-0.78125deg) skewY(-0.78125deg);transform:skewX(-0.78125deg) skewY(-0.78125deg)}77.7%{-webkit-transform:skewX(0.39063deg) skewY(0.39063deg);transform:skewX(0.39063deg) skewY(0.39063deg)}88.8%{-webkit-transform:skewX(-0.19531deg) skewY(-0.19531deg);transform:skewX(-0.19531deg) skewY(-0.19531deg)}}@keyframes jello{from,11.1%,to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}22.2%{-webkit-transform:skewX(-12.5deg) skewY(-12.5deg);transform:skewX(-12.5deg) skewY(-12.5deg)}33.3%{-webkit-transform:skewX(6.25deg) skewY(6.25deg);transform:skewX(6.25deg) skewY(6.25deg)}44.4%{-webkit-transform:skewX(-3.125deg) skewY(-3.125deg);transform:skewX(-3.125deg) skewY(-3.125deg)}55.5%{-webkit-transform:skewX(1.5625deg) skewY(1.5625deg);transform:skewX(1.5625deg) skewY(1.5625deg)}66.6%{-webkit-transform:skewX(-0.78125deg) skewY(-0.78125deg);transform:skewX(-0.78125deg) skewY(-0.78125deg)}77.7%{-webkit-transform:skewX(0.39063deg) skewY(0.39063deg);transform:skewX(0.39063deg) skewY(0.39063deg)}88.8%{-webkit-transform:skewX(-0.19531deg) skewY(-0.19531deg);transform:skewX(-0.19531deg) skewY(-0.19531deg)}}.jello{-webkit-transform-origin:center;transform-origin:center;-webkit-animation-name:jello;animation-name:jello}@-webkit-keyframes heartBeat{0%{-webkit-transform:scale(1);transform:scale(1)}14%{-webkit-transform:scale(1.3);transform:scale(1.3)}28%{-webkit-transform:scale(1);transform:scale(1)}42%{-webkit-transform:scale(1.3);transform:scale(1.3)}70%{-webkit-transform:scale(1);transform:scale(1)}}@keyframes heartBeat{0%{-webkit-transform:scale(1);transform:scale(1)}14%{-webkit-transform:scale(1.3);transform:scale(1.3)}28%{-webkit-transform:scale(1);transform:scale(1)}42%{-webkit-transform:scale(1.3);transform:scale(1.3)}70%{-webkit-transform:scale(1);transform:scale(1)}}.heartBeat{-webkit-animation-name:heartBeat;animation-name:heartBeat;-webkit-animation-duration:1.3s;animation-duration:1.3s;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}@-webkit-keyframes bounceIn{from,20%,40%,60%,80%,to{-webkit-animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1);animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1)}0%{opacity:0;-webkit-transform:scale3d(0.3, 0.3, 0.3);transform:scale3d(0.3, 0.3, 0.3)}20%{-webkit-transform:scale3d(1.1, 1.1, 1.1);transform:scale3d(1.1, 1.1, 1.1)}40%{-webkit-transform:scale3d(0.9, 0.9, 0.9);transform:scale3d(0.9, 0.9, 0.9)}60%{opacity:1;-webkit-transform:scale3d(1.03, 1.03, 1.03);transform:scale3d(1.03, 1.03, 1.03)}80%{-webkit-transform:scale3d(0.97, 0.97, 0.97);transform:scale3d(0.97, 0.97, 0.97)}to{opacity:1;-webkit-transform:scale3d(1, 1, 1);transform:scale3d(1, 1, 1)}}@keyframes bounceIn{from,20%,40%,60%,80%,to{-webkit-animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1);animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1)}0%{opacity:0;-webkit-transform:scale3d(0.3, 0.3, 0.3);transform:scale3d(0.3, 0.3, 0.3)}20%{-webkit-transform:scale3d(1.1, 1.1, 1.1);transform:scale3d(1.1, 1.1, 1.1)}40%{-webkit-transform:scale3d(0.9, 0.9, 0.9);transform:scale3d(0.9, 0.9, 0.9)}60%{opacity:1;-webkit-transform:scale3d(1.03, 1.03, 1.03);transform:scale3d(1.03, 1.03, 1.03)}80%{-webkit-transform:scale3d(0.97, 0.97, 0.97);transform:scale3d(0.97, 0.97, 0.97)}to{opacity:1;-webkit-transform:scale3d(1, 1, 1);transform:scale3d(1, 1, 1)}}.bounceIn{-webkit-animation-name:bounceIn;animation-name:bounceIn;-webkit-animation-duration:.75s;animation-duration:.75s}@-webkit-keyframes bounceInDown{from,60%,75%,90%,to{-webkit-animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1);animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1)}0%{opacity:0;-webkit-transform:translate3d(0, -3000px, 0);transform:translate3d(0, -3000px, 0)}60%{opacity:1;-webkit-transform:translate3d(0, 25px, 0);transform:translate3d(0, 25px, 0)}75%{-webkit-transform:translate3d(0, -10px, 0);transform:translate3d(0, -10px, 0)}90%{-webkit-transform:translate3d(0, 5px, 0);transform:translate3d(0, 5px, 0)}to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}@keyframes bounceInDown{from,60%,75%,90%,to{-webkit-animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1);animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1)}0%{opacity:0;-webkit-transform:translate3d(0, -3000px, 0);transform:translate3d(0, -3000px, 0)}60%{opacity:1;-webkit-transform:translate3d(0, 25px, 0);transform:translate3d(0, 25px, 0)}75%{-webkit-transform:translate3d(0, -10px, 0);transform:translate3d(0, -10px, 0)}90%{-webkit-transform:translate3d(0, 5px, 0);transform:translate3d(0, 5px, 0)}to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}.bounceInDown{-webkit-animation-name:bounceInDown;animation-name:bounceInDown}@-webkit-keyframes bounceInLeft{from,60%,75%,90%,to{-webkit-animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1);animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1)}0%{opacity:0;-webkit-transform:translate3d(-3000px, 0, 0);transform:translate3d(-3000px, 0, 0)}60%{opacity:1;-webkit-transform:translate3d(25px, 0, 0);transform:translate3d(25px, 0, 0)}75%{-webkit-transform:translate3d(-10px, 0, 0);transform:translate3d(-10px, 0, 0)}90%{-webkit-transform:translate3d(5px, 0, 0);transform:translate3d(5px, 0, 0)}to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}@keyframes bounceInLeft{from,60%,75%,90%,to{-webkit-animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1);animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1)}0%{opacity:0;-webkit-transform:translate3d(-3000px, 0, 0);transform:translate3d(-3000px, 0, 0)}60%{opacity:1;-webkit-transform:translate3d(25px, 0, 0);transform:translate3d(25px, 0, 0)}75%{-webkit-transform:translate3d(-10px, 0, 0);transform:translate3d(-10px, 0, 0)}90%{-webkit-transform:translate3d(5px, 0, 0);transform:translate3d(5px, 0, 0)}to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}.bounceInLeft{-webkit-animation-name:bounceInLeft;animation-name:bounceInLeft}@-webkit-keyframes bounceInRight{from,60%,75%,90%,to{-webkit-animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1);animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1)}from{opacity:0;-webkit-transform:translate3d(3000px, 0, 0);transform:translate3d(3000px, 0, 0)}60%{opacity:1;-webkit-transform:translate3d(-25px, 0, 0);transform:translate3d(-25px, 0, 0)}75%{-webkit-transform:translate3d(10px, 0, 0);transform:translate3d(10px, 0, 0)}90%{-webkit-transform:translate3d(-5px, 0, 0);transform:translate3d(-5px, 0, 0)}to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}@keyframes bounceInRight{from,60%,75%,90%,to{-webkit-animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1);animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1)}from{opacity:0;-webkit-transform:translate3d(3000px, 0, 0);transform:translate3d(3000px, 0, 0)}60%{opacity:1;-webkit-transform:translate3d(-25px, 0, 0);transform:translate3d(-25px, 0, 0)}75%{-webkit-transform:translate3d(10px, 0, 0);transform:translate3d(10px, 0, 0)}90%{-webkit-transform:translate3d(-5px, 0, 0);transform:translate3d(-5px, 0, 0)}to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}.bounceInRight{-webkit-animation-name:bounceInRight;animation-name:bounceInRight}@-webkit-keyframes bounceInUp{from,60%,75%,90%,to{-webkit-animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1);animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1)}from{opacity:0;-webkit-transform:translate3d(0, 3000px, 0);transform:translate3d(0, 3000px, 0)}60%{opacity:1;-webkit-transform:translate3d(0, -20px, 0);transform:translate3d(0, -20px, 0)}75%{-webkit-transform:translate3d(0, 10px, 0);transform:translate3d(0, 10px, 0)}90%{-webkit-transform:translate3d(0, -5px, 0);transform:translate3d(0, -5px, 0)}to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}@keyframes bounceInUp{from,60%,75%,90%,to{-webkit-animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1);animation-timing-function:cubic-bezier(0.215, 0.61, 0.355, 1)}from{opacity:0;-webkit-transform:translate3d(0, 3000px, 0);transform:translate3d(0, 3000px, 0)}60%{opacity:1;-webkit-transform:translate3d(0, -20px, 0);transform:translate3d(0, -20px, 0)}75%{-webkit-transform:translate3d(0, 10px, 0);transform:translate3d(0, 10px, 0)}90%{-webkit-transform:translate3d(0, -5px, 0);transform:translate3d(0, -5px, 0)}to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}.bounceInUp{-webkit-animation-name:bounceInUp;animation-name:bounceInUp}@-webkit-keyframes bounceOut{20%{-webkit-transform:scale3d(0.9, 0.9, 0.9);transform:scale3d(0.9, 0.9, 0.9)}50%,55%{opacity:1;-webkit-transform:scale3d(1.1, 1.1, 1.1);transform:scale3d(1.1, 1.1, 1.1)}to{opacity:0;-webkit-transform:scale3d(0.3, 0.3, 0.3);transform:scale3d(0.3, 0.3, 0.3)}}@keyframes bounceOut{20%{-webkit-transform:scale3d(0.9, 0.9, 0.9);transform:scale3d(0.9, 0.9, 0.9)}50%,55%{opacity:1;-webkit-transform:scale3d(1.1, 1.1, 1.1);transform:scale3d(1.1, 1.1, 1.1)}to{opacity:0;-webkit-transform:scale3d(0.3, 0.3, 0.3);transform:scale3d(0.3, 0.3, 0.3)}}.bounceOut{-webkit-animation-name:bounceOut;animation-name:bounceOut;-webkit-animation-duration:.75s;animation-duration:.75s}@-webkit-keyframes bounceOutDown{20%{-webkit-transform:translate3d(0, 10px, 0);transform:translate3d(0, 10px, 0)}40%,45%{opacity:1;-webkit-transform:translate3d(0, -20px, 0);transform:translate3d(0, -20px, 0)}to{opacity:0;-webkit-transform:translate3d(0, 2000px, 0);transform:translate3d(0, 2000px, 0)}}@keyframes bounceOutDown{20%{-webkit-transform:translate3d(0, 10px, 0);transform:translate3d(0, 10px, 0)}40%,45%{opacity:1;-webkit-transform:translate3d(0, -20px, 0);transform:translate3d(0, -20px, 0)}to{opacity:0;-webkit-transform:translate3d(0, 2000px, 0);transform:translate3d(0, 2000px, 0)}}.bounceOutDown{-webkit-animation-name:bounceOutDown;animation-name:bounceOutDown}@-webkit-keyframes bounceOutLeft{20%{opacity:1;-webkit-transform:translate3d(20px, 0, 0);transform:translate3d(20px, 0, 0)}to{opacity:0;-webkit-transform:translate3d(-2000px, 0, 0);transform:translate3d(-2000px, 0, 0)}}@keyframes bounceOutLeft{20%{opacity:1;-webkit-transform:translate3d(20px, 0, 0);transform:translate3d(20px, 0, 0)}to{opacity:0;-webkit-transform:translate3d(-2000px, 0, 0);transform:translate3d(-2000px, 0, 0)}}.bounceOutLeft{-webkit-animation-name:bounceOutLeft;animation-name:bounceOutLeft}@-webkit-keyframes bounceOutRight{20%{opacity:1;-webkit-transform:translate3d(-20px, 0, 0);transform:translate3d(-20px, 0, 0)}to{opacity:0;-webkit-transform:translate3d(2000px, 0, 0);transform:translate3d(2000px, 0, 0)}}@keyframes bounceOutRight{20%{opacity:1;-webkit-transform:translate3d(-20px, 0, 0);transform:translate3d(-20px, 0, 0)}to{opacity:0;-webkit-transform:translate3d(2000px, 0, 0);transform:translate3d(2000px, 0, 0)}}.bounceOutRight{-webkit-animation-name:bounceOutRight;animation-name:bounceOutRight}@-webkit-keyframes bounceOutUp{20%{-webkit-transform:translate3d(0, -10px, 0);transform:translate3d(0, -10px, 0)}40%,45%{opacity:1;-webkit-transform:translate3d(0, 20px, 0);transform:translate3d(0, 20px, 0)}to{opacity:0;-webkit-transform:translate3d(0, -2000px, 0);transform:translate3d(0, -2000px, 0)}}@keyframes bounceOutUp{20%{-webkit-transform:translate3d(0, -10px, 0);transform:translate3d(0, -10px, 0)}40%,45%{opacity:1;-webkit-transform:translate3d(0, 20px, 0);transform:translate3d(0, 20px, 0)}to{opacity:0;-webkit-transform:translate3d(0, -2000px, 0);transform:translate3d(0, -2000px, 0)}}.bounceOutUp{-webkit-animation-name:bounceOutUp;animation-name:bounceOutUp}@-webkit-keyframes fadeInDownBig{from{opacity:0;-webkit-transform:translate3d(0, -2000px, 0);transform:translate3d(0, -2000px, 0)}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}@keyframes fadeInDownBig{from{opacity:0;-webkit-transform:translate3d(0, -2000px, 0);transform:translate3d(0, -2000px, 0)}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}.fadeInDownBig{-webkit-animation-name:fadeInDownBig;animation-name:fadeInDownBig}@-webkit-keyframes fadeInLeftBig{from{opacity:0;-webkit-transform:translate3d(-2000px, 0, 0);transform:translate3d(-2000px, 0, 0)}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}@keyframes fadeInLeftBig{from{opacity:0;-webkit-transform:translate3d(-2000px, 0, 0);transform:translate3d(-2000px, 0, 0)}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}.fadeInLeftBig{-webkit-animation-name:fadeInLeftBig;animation-name:fadeInLeftBig}@-webkit-keyframes fadeInRightBig{from{opacity:0;-webkit-transform:translate3d(2000px, 0, 0);transform:translate3d(2000px, 0, 0)}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}@keyframes fadeInRightBig{from{opacity:0;-webkit-transform:translate3d(2000px, 0, 0);transform:translate3d(2000px, 0, 0)}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}.fadeInRightBig{-webkit-animation-name:fadeInRightBig;animation-name:fadeInRightBig}@-webkit-keyframes fadeInUpBig{from{opacity:0;-webkit-transform:translate3d(0, 2000px, 0);transform:translate3d(0, 2000px, 0)}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}@keyframes fadeInUpBig{from{opacity:0;-webkit-transform:translate3d(0, 2000px, 0);transform:translate3d(0, 2000px, 0)}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}.fadeInUpBig{-webkit-animation-name:fadeInUpBig;animation-name:fadeInUpBig}@-webkit-keyframes fadeOutDownBig{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(0, 2000px, 0);transform:translate3d(0, 2000px, 0)}}@keyframes fadeOutDownBig{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(0, 2000px, 0);transform:translate3d(0, 2000px, 0)}}.fadeOutDownBig{-webkit-animation-name:fadeOutDownBig;animation-name:fadeOutDownBig}@-webkit-keyframes fadeOutLeftBig{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(-2000px, 0, 0);transform:translate3d(-2000px, 0, 0)}}@keyframes fadeOutLeftBig{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(-2000px, 0, 0);transform:translate3d(-2000px, 0, 0)}}.fadeOutLeftBig{-webkit-animation-name:fadeOutLeftBig;animation-name:fadeOutLeftBig}@-webkit-keyframes fadeOutRightBig{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(2000px, 0, 0);transform:translate3d(2000px, 0, 0)}}@keyframes fadeOutRightBig{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(2000px, 0, 0);transform:translate3d(2000px, 0, 0)}}.fadeOutRightBig{-webkit-animation-name:fadeOutRightBig;animation-name:fadeOutRightBig}@-webkit-keyframes fadeOutUpBig{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(0, -2000px, 0);transform:translate3d(0, -2000px, 0)}}@keyframes fadeOutUpBig{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(0, -2000px, 0);transform:translate3d(0, -2000px, 0)}}.fadeOutUpBig{-webkit-animation-name:fadeOutUpBig;animation-name:fadeOutUpBig}@-webkit-keyframes flip{from{-webkit-transform:perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);transform:perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}40%{-webkit-transform:perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);transform:perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}50%{-webkit-transform:perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);transform:perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}80%{-webkit-transform:perspective(400px) scale3d(0.95, 0.95, 0.95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);transform:perspective(400px) scale3d(0.95, 0.95, 0.95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}to{-webkit-transform:perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);transform:perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}}@keyframes flip{from{-webkit-transform:perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);transform:perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, -360deg);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}40%{-webkit-transform:perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);transform:perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}50%{-webkit-transform:perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);transform:perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}80%{-webkit-transform:perspective(400px) scale3d(0.95, 0.95, 0.95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);transform:perspective(400px) scale3d(0.95, 0.95, 0.95) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}to{-webkit-transform:perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);transform:perspective(400px) scale3d(1, 1, 1) translate3d(0, 0, 0) rotate3d(0, 1, 0, 0deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}}.flip{-webkit-backface-visibility:visible;backface-visibility:visible;-webkit-animation-name:flip;animation-name:flip}@-webkit-keyframes flipInX{from{opacity:0;-webkit-transform:perspective(400px) rotate3d(1, 0, 0, 90deg);transform:perspective(400px) rotate3d(1, 0, 0, 90deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}40%{-webkit-transform:perspective(400px) rotate3d(1, 0, 0, -20deg);transform:perspective(400px) rotate3d(1, 0, 0, -20deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}60%{opacity:1;-webkit-transform:perspective(400px) rotate3d(1, 0, 0, 10deg);transform:perspective(400px) rotate3d(1, 0, 0, 10deg)}80%{-webkit-transform:perspective(400px) rotate3d(1, 0, 0, -5deg);transform:perspective(400px) rotate3d(1, 0, 0, -5deg)}to{-webkit-transform:perspective(400px);transform:perspective(400px)}}@keyframes flipInX{from{opacity:0;-webkit-transform:perspective(400px) rotate3d(1, 0, 0, 90deg);transform:perspective(400px) rotate3d(1, 0, 0, 90deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}40%{-webkit-transform:perspective(400px) rotate3d(1, 0, 0, -20deg);transform:perspective(400px) rotate3d(1, 0, 0, -20deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}60%{opacity:1;-webkit-transform:perspective(400px) rotate3d(1, 0, 0, 10deg);transform:perspective(400px) rotate3d(1, 0, 0, 10deg)}80%{-webkit-transform:perspective(400px) rotate3d(1, 0, 0, -5deg);transform:perspective(400px) rotate3d(1, 0, 0, -5deg)}to{-webkit-transform:perspective(400px);transform:perspective(400px)}}.flipInX{-webkit-backface-visibility:visible;backface-visibility:visible;-webkit-animation-name:flipInX;animation-name:flipInX}@-webkit-keyframes flipInY{from{opacity:0;-webkit-transform:perspective(400px) rotate3d(0, 1, 0, 90deg);transform:perspective(400px) rotate3d(0, 1, 0, 90deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}40%{-webkit-transform:perspective(400px) rotate3d(0, 1, 0, -20deg);transform:perspective(400px) rotate3d(0, 1, 0, -20deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}60%{opacity:1;-webkit-transform:perspective(400px) rotate3d(0, 1, 0, 10deg);transform:perspective(400px) rotate3d(0, 1, 0, 10deg)}80%{-webkit-transform:perspective(400px) rotate3d(0, 1, 0, -5deg);transform:perspective(400px) rotate3d(0, 1, 0, -5deg)}to{-webkit-transform:perspective(400px);transform:perspective(400px)}}@keyframes flipInY{from{opacity:0;-webkit-transform:perspective(400px) rotate3d(0, 1, 0, 90deg);transform:perspective(400px) rotate3d(0, 1, 0, 90deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}40%{-webkit-transform:perspective(400px) rotate3d(0, 1, 0, -20deg);transform:perspective(400px) rotate3d(0, 1, 0, -20deg);-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}60%{opacity:1;-webkit-transform:perspective(400px) rotate3d(0, 1, 0, 10deg);transform:perspective(400px) rotate3d(0, 1, 0, 10deg)}80%{-webkit-transform:perspective(400px) rotate3d(0, 1, 0, -5deg);transform:perspective(400px) rotate3d(0, 1, 0, -5deg)}to{-webkit-transform:perspective(400px);transform:perspective(400px)}}.flipInY{-webkit-backface-visibility:visible;backface-visibility:visible;-webkit-animation-name:flipInY;animation-name:flipInY}@-webkit-keyframes flipOutX{from{-webkit-transform:perspective(400px);transform:perspective(400px)}30%{opacity:1;-webkit-transform:perspective(400px) rotate3d(1, 0, 0, -20deg);transform:perspective(400px) rotate3d(1, 0, 0, -20deg)}to{opacity:0;-webkit-transform:perspective(400px) rotate3d(1, 0, 0, 90deg);transform:perspective(400px) rotate3d(1, 0, 0, 90deg)}}@keyframes flipOutX{from{-webkit-transform:perspective(400px);transform:perspective(400px)}30%{opacity:1;-webkit-transform:perspective(400px) rotate3d(1, 0, 0, -20deg);transform:perspective(400px) rotate3d(1, 0, 0, -20deg)}to{opacity:0;-webkit-transform:perspective(400px) rotate3d(1, 0, 0, 90deg);transform:perspective(400px) rotate3d(1, 0, 0, 90deg)}}.flipOutX{-webkit-animation-name:flipOutX;animation-name:flipOutX;-webkit-animation-duration:.75s;animation-duration:.75s;-webkit-backface-visibility:visible;backface-visibility:visible}@-webkit-keyframes flipOutY{from{-webkit-transform:perspective(400px);transform:perspective(400px)}30%{opacity:1;-webkit-transform:perspective(400px) rotate3d(0, 1, 0, -15deg);transform:perspective(400px) rotate3d(0, 1, 0, -15deg)}to{opacity:0;-webkit-transform:perspective(400px) rotate3d(0, 1, 0, 90deg);transform:perspective(400px) rotate3d(0, 1, 0, 90deg)}}@keyframes flipOutY{from{-webkit-transform:perspective(400px);transform:perspective(400px)}30%{opacity:1;-webkit-transform:perspective(400px) rotate3d(0, 1, 0, -15deg);transform:perspective(400px) rotate3d(0, 1, 0, -15deg)}to{opacity:0;-webkit-transform:perspective(400px) rotate3d(0, 1, 0, 90deg);transform:perspective(400px) rotate3d(0, 1, 0, 90deg)}}.flipOutY{-webkit-animation-name:flipOutY;animation-name:flipOutY;-webkit-animation-duration:.75s;animation-duration:.75s;-webkit-backface-visibility:visible;backface-visibility:visible}@-webkit-keyframes lightSpeedIn{from{opacity:0;-webkit-transform:translate3d(100%, 0, 0) skewX(-30deg);transform:translate3d(100%, 0, 0) skewX(-30deg)}60%{opacity:1;-webkit-transform:skewX(20deg);transform:skewX(20deg)}80%{-webkit-transform:skewX(-5deg);transform:skewX(-5deg)}to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}@keyframes lightSpeedIn{from{opacity:0;-webkit-transform:translate3d(100%, 0, 0) skewX(-30deg);transform:translate3d(100%, 0, 0) skewX(-30deg)}60%{opacity:1;-webkit-transform:skewX(20deg);transform:skewX(20deg)}80%{-webkit-transform:skewX(-5deg);transform:skewX(-5deg)}to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}.lightSpeedIn{-webkit-animation-name:lightSpeedIn;animation-name:lightSpeedIn;-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out}@-webkit-keyframes lightSpeedOut{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(100%, 0, 0) skewX(30deg);transform:translate3d(100%, 0, 0) skewX(30deg)}}@keyframes lightSpeedOut{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(100%, 0, 0) skewX(30deg);transform:translate3d(100%, 0, 0) skewX(30deg)}}.lightSpeedOut{-webkit-animation-name:lightSpeedOut;animation-name:lightSpeedOut;-webkit-animation-timing-function:ease-in;animation-timing-function:ease-in}@-webkit-keyframes rotateIn{from{opacity:0;-webkit-transform:rotate3d(0, 0, 1, -200deg);transform:rotate3d(0, 0, 1, -200deg);-webkit-transform-origin:center;transform-origin:center}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0);-webkit-transform-origin:center;transform-origin:center}}@keyframes rotateIn{from{opacity:0;-webkit-transform:rotate3d(0, 0, 1, -200deg);transform:rotate3d(0, 0, 1, -200deg);-webkit-transform-origin:center;transform-origin:center}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0);-webkit-transform-origin:center;transform-origin:center}}.rotateIn{-webkit-animation-name:rotateIn;animation-name:rotateIn}@-webkit-keyframes rotateInDownLeft{from{opacity:0;-webkit-transform:rotate3d(0, 0, 1, -45deg);transform:rotate3d(0, 0, 1, -45deg);-webkit-transform-origin:left bottom;transform-origin:left bottom}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0);-webkit-transform-origin:left bottom;transform-origin:left bottom}}@keyframes rotateInDownLeft{from{opacity:0;-webkit-transform:rotate3d(0, 0, 1, -45deg);transform:rotate3d(0, 0, 1, -45deg);-webkit-transform-origin:left bottom;transform-origin:left bottom}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0);-webkit-transform-origin:left bottom;transform-origin:left bottom}}.rotateInDownLeft{-webkit-animation-name:rotateInDownLeft;animation-name:rotateInDownLeft}@-webkit-keyframes rotateInDownRight{from{opacity:0;-webkit-transform:rotate3d(0, 0, 1, 45deg);transform:rotate3d(0, 0, 1, 45deg);-webkit-transform-origin:right bottom;transform-origin:right bottom}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0);-webkit-transform-origin:right bottom;transform-origin:right bottom}}@keyframes rotateInDownRight{from{opacity:0;-webkit-transform:rotate3d(0, 0, 1, 45deg);transform:rotate3d(0, 0, 1, 45deg);-webkit-transform-origin:right bottom;transform-origin:right bottom}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0);-webkit-transform-origin:right bottom;transform-origin:right bottom}}.rotateInDownRight{-webkit-animation-name:rotateInDownRight;animation-name:rotateInDownRight}@-webkit-keyframes rotateInUpLeft{from{opacity:0;-webkit-transform:rotate3d(0, 0, 1, 45deg);transform:rotate3d(0, 0, 1, 45deg);-webkit-transform-origin:left bottom;transform-origin:left bottom}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0);-webkit-transform-origin:left bottom;transform-origin:left bottom}}@keyframes rotateInUpLeft{from{opacity:0;-webkit-transform:rotate3d(0, 0, 1, 45deg);transform:rotate3d(0, 0, 1, 45deg);-webkit-transform-origin:left bottom;transform-origin:left bottom}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0);-webkit-transform-origin:left bottom;transform-origin:left bottom}}.rotateInUpLeft{-webkit-animation-name:rotateInUpLeft;animation-name:rotateInUpLeft}@-webkit-keyframes rotateInUpRight{from{opacity:0;-webkit-transform:rotate3d(0, 0, 1, -90deg);transform:rotate3d(0, 0, 1, -90deg);-webkit-transform-origin:right bottom;transform-origin:right bottom}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0);-webkit-transform-origin:right bottom;transform-origin:right bottom}}@keyframes rotateInUpRight{from{opacity:0;-webkit-transform:rotate3d(0, 0, 1, -90deg);transform:rotate3d(0, 0, 1, -90deg);-webkit-transform-origin:right bottom;transform-origin:right bottom}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0);-webkit-transform-origin:right bottom;transform-origin:right bottom}}.rotateInUpRight{-webkit-animation-name:rotateInUpRight;animation-name:rotateInUpRight}@-webkit-keyframes rotateOut{from{opacity:1;-webkit-transform-origin:center;transform-origin:center}to{opacity:0;-webkit-transform:rotate3d(0, 0, 1, 200deg);transform:rotate3d(0, 0, 1, 200deg);-webkit-transform-origin:center;transform-origin:center}}@keyframes rotateOut{from{opacity:1;-webkit-transform-origin:center;transform-origin:center}to{opacity:0;-webkit-transform:rotate3d(0, 0, 1, 200deg);transform:rotate3d(0, 0, 1, 200deg);-webkit-transform-origin:center;transform-origin:center}}.rotateOut{-webkit-animation-name:rotateOut;animation-name:rotateOut}@-webkit-keyframes rotateOutDownLeft{from{opacity:1;-webkit-transform-origin:left bottom;transform-origin:left bottom}to{opacity:0;-webkit-transform:rotate3d(0, 0, 1, 45deg);transform:rotate3d(0, 0, 1, 45deg);-webkit-transform-origin:left bottom;transform-origin:left bottom}}@keyframes rotateOutDownLeft{from{opacity:1;-webkit-transform-origin:left bottom;transform-origin:left bottom}to{opacity:0;-webkit-transform:rotate3d(0, 0, 1, 45deg);transform:rotate3d(0, 0, 1, 45deg);-webkit-transform-origin:left bottom;transform-origin:left bottom}}.rotateOutDownLeft{-webkit-animation-name:rotateOutDownLeft;animation-name:rotateOutDownLeft}@-webkit-keyframes rotateOutDownRight{from{opacity:1;-webkit-transform-origin:right bottom;transform-origin:right bottom}to{opacity:0;-webkit-transform:rotate3d(0, 0, 1, -45deg);transform:rotate3d(0, 0, 1, -45deg);-webkit-transform-origin:right bottom;transform-origin:right bottom}}@keyframes rotateOutDownRight{from{opacity:1;-webkit-transform-origin:right bottom;transform-origin:right bottom}to{opacity:0;-webkit-transform:rotate3d(0, 0, 1, -45deg);transform:rotate3d(0, 0, 1, -45deg);-webkit-transform-origin:right bottom;transform-origin:right bottom}}.rotateOutDownRight{-webkit-animation-name:rotateOutDownRight;animation-name:rotateOutDownRight}@-webkit-keyframes rotateOutUpLeft{from{opacity:1;-webkit-transform-origin:left bottom;transform-origin:left bottom}to{opacity:0;-webkit-transform:rotate3d(0, 0, 1, -45deg);transform:rotate3d(0, 0, 1, -45deg);-webkit-transform-origin:left bottom;transform-origin:left bottom}}@keyframes rotateOutUpLeft{from{opacity:1;-webkit-transform-origin:left bottom;transform-origin:left bottom}to{opacity:0;-webkit-transform:rotate3d(0, 0, 1, -45deg);transform:rotate3d(0, 0, 1, -45deg);-webkit-transform-origin:left bottom;transform-origin:left bottom}}.rotateOutUpLeft{-webkit-animation-name:rotateOutUpLeft;animation-name:rotateOutUpLeft}@-webkit-keyframes rotateOutUpRight{from{opacity:1;-webkit-transform-origin:right bottom;transform-origin:right bottom}to{opacity:0;-webkit-transform:rotate3d(0, 0, 1, 90deg);transform:rotate3d(0, 0, 1, 90deg);-webkit-transform-origin:right bottom;transform-origin:right bottom}}@keyframes rotateOutUpRight{from{opacity:1;-webkit-transform-origin:right bottom;transform-origin:right bottom}to{opacity:0;-webkit-transform:rotate3d(0, 0, 1, 90deg);transform:rotate3d(0, 0, 1, 90deg);-webkit-transform-origin:right bottom;transform-origin:right bottom}}.rotateOutUpRight{-webkit-animation-name:rotateOutUpRight;animation-name:rotateOutUpRight}@-webkit-keyframes hinge{0%{-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}20%,60%{-webkit-transform:rotate3d(0, 0, 1, 80deg);transform:rotate3d(0, 0, 1, 80deg);-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}40%,80%{opacity:1;-webkit-transform:rotate3d(0, 0, 1, 60deg);transform:rotate3d(0, 0, 1, 60deg);-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}to{opacity:0;-webkit-transform:translate3d(0, 700px, 0);transform:translate3d(0, 700px, 0)}}@keyframes hinge{0%{-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}20%,60%{-webkit-transform:rotate3d(0, 0, 1, 80deg);transform:rotate3d(0, 0, 1, 80deg);-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}40%,80%{opacity:1;-webkit-transform:rotate3d(0, 0, 1, 60deg);transform:rotate3d(0, 0, 1, 60deg);-webkit-transform-origin:top left;transform-origin:top left;-webkit-animation-timing-function:ease-in-out;animation-timing-function:ease-in-out}to{opacity:0;-webkit-transform:translate3d(0, 700px, 0);transform:translate3d(0, 700px, 0)}}.hinge{-webkit-animation-name:hinge;animation-name:hinge;-webkit-animation-duration:2s;animation-duration:2s}@-webkit-keyframes jackInTheBox{from{opacity:0;-webkit-transform:scale(0.1) rotate(30deg);transform:scale(0.1) rotate(30deg);-webkit-transform-origin:center bottom;transform-origin:center bottom}50%{-webkit-transform:rotate(-10deg);transform:rotate(-10deg)}70%{-webkit-transform:rotate(3deg);transform:rotate(3deg)}to{opacity:1;-webkit-transform:scale(1);transform:scale(1)}}@keyframes jackInTheBox{from{opacity:0;-webkit-transform:scale(0.1) rotate(30deg);transform:scale(0.1) rotate(30deg);-webkit-transform-origin:center bottom;transform-origin:center bottom}50%{-webkit-transform:rotate(-10deg);transform:rotate(-10deg)}70%{-webkit-transform:rotate(3deg);transform:rotate(3deg)}to{opacity:1;-webkit-transform:scale(1);transform:scale(1)}}.jackInTheBox{-webkit-animation-name:jackInTheBox;animation-name:jackInTheBox}@-webkit-keyframes rollIn{from{opacity:0;-webkit-transform:translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);transform:translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}@keyframes rollIn{from{opacity:0;-webkit-transform:translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);transform:translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)}to{opacity:1;-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}.rollIn{-webkit-animation-name:rollIn;animation-name:rollIn}@-webkit-keyframes rollOut{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);transform:translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg)}}@keyframes rollOut{from{opacity:1}to{opacity:0;-webkit-transform:translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);transform:translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg)}}.rollOut{-webkit-animation-name:rollOut;animation-name:rollOut}@-webkit-keyframes zoomIn{from{opacity:0;-webkit-transform:scale3d(0.3, 0.3, 0.3);transform:scale3d(0.3, 0.3, 0.3)}50%{opacity:1}}@keyframes zoomIn{from{opacity:0;-webkit-transform:scale3d(0.3, 0.3, 0.3);transform:scale3d(0.3, 0.3, 0.3)}50%{opacity:1}}.zoomIn{-webkit-animation-name:zoomIn;animation-name:zoomIn}@-webkit-keyframes zoomInDown{from{opacity:0;-webkit-transform:scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);transform:scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);-webkit-animation-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19);animation-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19)}60%{opacity:1;-webkit-transform:scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);transform:scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);-webkit-animation-timing-function:cubic-bezier(0.175, 0.885, 0.32, 1);animation-timing-function:cubic-bezier(0.175, 0.885, 0.32, 1)}}@keyframes zoomInDown{from{opacity:0;-webkit-transform:scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);transform:scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);-webkit-animation-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19);animation-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19)}60%{opacity:1;-webkit-transform:scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);transform:scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);-webkit-animation-timing-function:cubic-bezier(0.175, 0.885, 0.32, 1);animation-timing-function:cubic-bezier(0.175, 0.885, 0.32, 1)}}.zoomInDown{-webkit-animation-name:zoomInDown;animation-name:zoomInDown}@-webkit-keyframes zoomInLeft{from{opacity:0;-webkit-transform:scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);transform:scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);-webkit-animation-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19);animation-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19)}60%{opacity:1;-webkit-transform:scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);transform:scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);-webkit-animation-timing-function:cubic-bezier(0.175, 0.885, 0.32, 1);animation-timing-function:cubic-bezier(0.175, 0.885, 0.32, 1)}}@keyframes zoomInLeft{from{opacity:0;-webkit-transform:scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);transform:scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);-webkit-animation-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19);animation-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19)}60%{opacity:1;-webkit-transform:scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);transform:scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);-webkit-animation-timing-function:cubic-bezier(0.175, 0.885, 0.32, 1);animation-timing-function:cubic-bezier(0.175, 0.885, 0.32, 1)}}.zoomInLeft{-webkit-animation-name:zoomInLeft;animation-name:zoomInLeft}@-webkit-keyframes zoomInRight{from{opacity:0;-webkit-transform:scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);transform:scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);-webkit-animation-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19);animation-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19)}60%{opacity:1;-webkit-transform:scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);transform:scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);-webkit-animation-timing-function:cubic-bezier(0.175, 0.885, 0.32, 1);animation-timing-function:cubic-bezier(0.175, 0.885, 0.32, 1)}}@keyframes zoomInRight{from{opacity:0;-webkit-transform:scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);transform:scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);-webkit-animation-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19);animation-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19)}60%{opacity:1;-webkit-transform:scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);transform:scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);-webkit-animation-timing-function:cubic-bezier(0.175, 0.885, 0.32, 1);animation-timing-function:cubic-bezier(0.175, 0.885, 0.32, 1)}}.zoomInRight{-webkit-animation-name:zoomInRight;animation-name:zoomInRight}@-webkit-keyframes zoomInUp{from{opacity:0;-webkit-transform:scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);transform:scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);-webkit-animation-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19);animation-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19)}60%{opacity:1;-webkit-transform:scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);transform:scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);-webkit-animation-timing-function:cubic-bezier(0.175, 0.885, 0.32, 1);animation-timing-function:cubic-bezier(0.175, 0.885, 0.32, 1)}}@keyframes zoomInUp{from{opacity:0;-webkit-transform:scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);transform:scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);-webkit-animation-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19);animation-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19)}60%{opacity:1;-webkit-transform:scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);transform:scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);-webkit-animation-timing-function:cubic-bezier(0.175, 0.885, 0.32, 1);animation-timing-function:cubic-bezier(0.175, 0.885, 0.32, 1)}}.zoomInUp{-webkit-animation-name:zoomInUp;animation-name:zoomInUp}@-webkit-keyframes zoomOut{from{opacity:1}50%{opacity:0;-webkit-transform:scale3d(0.3, 0.3, 0.3);transform:scale3d(0.3, 0.3, 0.3)}to{opacity:0}}@keyframes zoomOut{from{opacity:1}50%{opacity:0;-webkit-transform:scale3d(0.3, 0.3, 0.3);transform:scale3d(0.3, 0.3, 0.3)}to{opacity:0}}.zoomOut{-webkit-animation-name:zoomOut;animation-name:zoomOut}@-webkit-keyframes zoomOutDown{40%{opacity:1;-webkit-transform:scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);transform:scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);-webkit-animation-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19);animation-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19)}to{opacity:0;-webkit-transform:scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);transform:scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);-webkit-transform-origin:center bottom;transform-origin:center bottom;-webkit-animation-timing-function:cubic-bezier(0.175, 0.885, 0.32, 1);animation-timing-function:cubic-bezier(0.175, 0.885, 0.32, 1)}}@keyframes zoomOutDown{40%{opacity:1;-webkit-transform:scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);transform:scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);-webkit-animation-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19);animation-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19)}to{opacity:0;-webkit-transform:scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);transform:scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);-webkit-transform-origin:center bottom;transform-origin:center bottom;-webkit-animation-timing-function:cubic-bezier(0.175, 0.885, 0.32, 1);animation-timing-function:cubic-bezier(0.175, 0.885, 0.32, 1)}}.zoomOutDown{-webkit-animation-name:zoomOutDown;animation-name:zoomOutDown}@-webkit-keyframes zoomOutLeft{40%{opacity:1;-webkit-transform:scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);transform:scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0)}to{opacity:0;-webkit-transform:scale(0.1) translate3d(-2000px, 0, 0);transform:scale(0.1) translate3d(-2000px, 0, 0);-webkit-transform-origin:left center;transform-origin:left center}}@keyframes zoomOutLeft{40%{opacity:1;-webkit-transform:scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);transform:scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0)}to{opacity:0;-webkit-transform:scale(0.1) translate3d(-2000px, 0, 0);transform:scale(0.1) translate3d(-2000px, 0, 0);-webkit-transform-origin:left center;transform-origin:left center}}.zoomOutLeft{-webkit-animation-name:zoomOutLeft;animation-name:zoomOutLeft}@-webkit-keyframes zoomOutRight{40%{opacity:1;-webkit-transform:scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);transform:scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0)}to{opacity:0;-webkit-transform:scale(0.1) translate3d(2000px, 0, 0);transform:scale(0.1) translate3d(2000px, 0, 0);-webkit-transform-origin:right center;transform-origin:right center}}@keyframes zoomOutRight{40%{opacity:1;-webkit-transform:scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);transform:scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0)}to{opacity:0;-webkit-transform:scale(0.1) translate3d(2000px, 0, 0);transform:scale(0.1) translate3d(2000px, 0, 0);-webkit-transform-origin:right center;transform-origin:right center}}.zoomOutRight{-webkit-animation-name:zoomOutRight;animation-name:zoomOutRight}@-webkit-keyframes zoomOutUp{40%{opacity:1;-webkit-transform:scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);transform:scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);-webkit-animation-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19);animation-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19)}to{opacity:0;-webkit-transform:scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);transform:scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);-webkit-transform-origin:center bottom;transform-origin:center bottom;-webkit-animation-timing-function:cubic-bezier(0.175, 0.885, 0.32, 1);animation-timing-function:cubic-bezier(0.175, 0.885, 0.32, 1)}}@keyframes zoomOutUp{40%{opacity:1;-webkit-transform:scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);transform:scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);-webkit-animation-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19);animation-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19)}to{opacity:0;-webkit-transform:scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);transform:scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);-webkit-transform-origin:center bottom;transform-origin:center bottom;-webkit-animation-timing-function:cubic-bezier(0.175, 0.885, 0.32, 1);animation-timing-function:cubic-bezier(0.175, 0.885, 0.32, 1)}}.zoomOutUp{-webkit-animation-name:zoomOutUp;animation-name:zoomOutUp}@-webkit-keyframes slideInDown{from{visibility:visible;-webkit-transform:translate3d(0, -100%, 0);transform:translate3d(0, -100%, 0)}to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}@keyframes slideInDown{from{visibility:visible;-webkit-transform:translate3d(0, -100%, 0);transform:translate3d(0, -100%, 0)}to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}.slideInDown{-webkit-animation-name:slideInDown;animation-name:slideInDown}@-webkit-keyframes slideInLeft{from{visibility:visible;-webkit-transform:translate3d(-100%, 0, 0);transform:translate3d(-100%, 0, 0)}to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}@keyframes slideInLeft{from{visibility:visible;-webkit-transform:translate3d(-100%, 0, 0);transform:translate3d(-100%, 0, 0)}to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}.slideInLeft{-webkit-animation-name:slideInLeft;animation-name:slideInLeft}@-webkit-keyframes slideInRight{from{visibility:visible;-webkit-transform:translate3d(100%, 0, 0);transform:translate3d(100%, 0, 0)}to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}@keyframes slideInRight{from{visibility:visible;-webkit-transform:translate3d(100%, 0, 0);transform:translate3d(100%, 0, 0)}to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}.slideInRight{-webkit-animation-name:slideInRight;animation-name:slideInRight}@-webkit-keyframes slideInUp{from{visibility:visible;-webkit-transform:translate3d(0, 100%, 0);transform:translate3d(0, 100%, 0)}to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}@keyframes slideInUp{from{visibility:visible;-webkit-transform:translate3d(0, 100%, 0);transform:translate3d(0, 100%, 0)}to{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}.slideInUp{-webkit-animation-name:slideInUp;animation-name:slideInUp}@-webkit-keyframes slideOutDown{from{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}to{visibility:hidden;-webkit-transform:translate3d(0, 100%, 0);transform:translate3d(0, 100%, 0)}}@keyframes slideOutDown{from{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}to{visibility:hidden;-webkit-transform:translate3d(0, 100%, 0);transform:translate3d(0, 100%, 0)}}.slideOutDown{-webkit-animation-name:slideOutDown;animation-name:slideOutDown}@-webkit-keyframes slideOutLeft{from{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}to{visibility:hidden;-webkit-transform:translate3d(-100%, 0, 0);transform:translate3d(-100%, 0, 0)}}@keyframes slideOutLeft{from{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}to{visibility:hidden;-webkit-transform:translate3d(-100%, 0, 0);transform:translate3d(-100%, 0, 0)}}.slideOutLeft{-webkit-animation-name:slideOutLeft;animation-name:slideOutLeft}@-webkit-keyframes slideOutRight{from{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}to{visibility:hidden;-webkit-transform:translate3d(100%, 0, 0);transform:translate3d(100%, 0, 0)}}@keyframes slideOutRight{from{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}to{visibility:hidden;-webkit-transform:translate3d(100%, 0, 0);transform:translate3d(100%, 0, 0)}}.slideOutRight{-webkit-animation-name:slideOutRight;animation-name:slideOutRight}@-webkit-keyframes slideOutUp{from{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}to{visibility:hidden;-webkit-transform:translate3d(0, -100%, 0);transform:translate3d(0, -100%, 0)}}@keyframes slideOutUp{from{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}to{visibility:hidden;-webkit-transform:translate3d(0, -100%, 0);transform:translate3d(0, -100%, 0)}}.slideOutUp{-webkit-animation-name:slideOutUp;animation-name:slideOutUp}.btn{margin:.375rem;color:inherit;text-transform:uppercase;word-wrap:break-word;white-space:normal;cursor:pointer;border:0;border-radius:.125rem;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);-webkit-transition:color 0.15s ease-in-out,background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out;transition:color 0.15s ease-in-out,background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out;transition:color 0.15s ease-in-out,background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;transition:color 0.15s ease-in-out,background-color 0.15s ease-in-out,border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out;padding:.84rem 2.14rem;font-size:.81rem}.btn:hover,.btn:focus,.btn:active{outline:0;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn.btn-block{margin:inherit}.btn .fas.right,.btn .fab.right,.btn .far.right{margin-left:.3rem}.btn .fas.left,.btn .fab.left,.btn .far.left{margin-right:.3rem}.btn.btn-lg{padding:1rem 2.4rem;font-size:.94rem}.btn.btn-md{padding:.7rem 1.6rem;font-size:.7rem}.btn.btn-sm{padding:.5rem 1.6rem;font-size:.64rem}.btn.disabled:hover,.btn.disabled:focus,.btn.disabled:active,.btn:disabled:hover,.btn:disabled:focus,.btn:disabled:active{-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)}.btn[class*="btn-outline-"]{padding-top:.7rem;padding-bottom:.7rem}.btn[class*="btn-outline-"].btn-lg{padding-top:.88rem;padding-bottom:.88rem}.btn[class*="btn-outline-"].btn-md{padding-top:.58rem;padding-bottom:.58rem}.btn[class*="btn-outline-"].btn-sm{padding-top:.38rem;padding-bottom:.38rem}.btn-link{color:#000;background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.btn-link:hover,.btn-link:focus,.btn-link:active{color:#000;background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.btn-group>.btn:not(:first-child),.btn-group>.btn-group:not(:first-child){margin-left:-.375rem}.btn-primary{color:#fff;background-color:#4285f4 !important}.btn-primary:hover{color:#fff;background-color:#5a95f5}.btn-primary:focus,.btn-primary.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-primary:focus,.btn-primary:active,.btn-primary.active{background-color:#0b51c5}.btn-primary.dropdown-toggle{background-color:#4285f4 !important}.btn-primary.dropdown-toggle:hover,.btn-primary.dropdown-toggle:focus{background-color:#5a95f5 !important}.btn-primary:not([disabled]):not(.disabled):active,.btn-primary:not([disabled]):not(.disabled).active,.show>.btn-primary.dropdown-toggle{background-color:#0b51c5 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-primary:not([disabled]):not(.disabled):active:focus,.btn-primary:not([disabled]):not(.disabled).active:focus,.show>.btn-primary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.primary-ic{color:#4285f4 !important}.primary-ic:hover,.primary-ic:focus{color:#4285f4}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-primary{color:#fff}.btn-outline-primary{color:#4285f4 !important;background-color:transparent !important;border:2px solid #4285f4 !important}.btn-outline-primary:hover,.btn-outline-primary:focus,.btn-outline-primary:active,.btn-outline-primary:active:focus,.btn-outline-primary.active{color:#4285f4 !important;background-color:transparent !important;border-color:#4285f4 !important}.btn-outline-primary:not([disabled]):not(.disabled):active,.btn-outline-primary:not([disabled]):not(.disabled).active,.show>.btn-outline-primary.dropdown-toggle{background-color:transparent !important;border-color:#4285f4 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-primary:not([disabled]):not(.disabled):active:focus,.btn-outline-primary:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-primary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-danger{color:#fff;background-color:#ff3547 !important}.btn-danger:hover{color:#fff;background-color:#ff4f5e}.btn-danger:focus,.btn-danger.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-danger:focus,.btn-danger:active,.btn-danger.active{background-color:#ce0012}.btn-danger.dropdown-toggle{background-color:#ff3547 !important}.btn-danger.dropdown-toggle:hover,.btn-danger.dropdown-toggle:focus{background-color:#ff4f5e !important}.btn-danger:not([disabled]):not(.disabled):active,.btn-danger:not([disabled]):not(.disabled).active,.show>.btn-danger.dropdown-toggle{background-color:#ce0012 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-danger:not([disabled]):not(.disabled):active:focus,.btn-danger:not([disabled]):not(.disabled).active:focus,.show>.btn-danger.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.danger-ic{color:#ff3547 !important}.danger-ic:hover,.danger-ic:focus{color:#ff3547}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-danger{color:#fff}.btn-outline-danger{color:#ff3547 !important;background-color:transparent !important;border:2px solid #ff3547 !important}.btn-outline-danger:hover,.btn-outline-danger:focus,.btn-outline-danger:active,.btn-outline-danger:active:focus,.btn-outline-danger.active{color:#ff3547 !important;background-color:transparent !important;border-color:#ff3547 !important}.btn-outline-danger:not([disabled]):not(.disabled):active,.btn-outline-danger:not([disabled]):not(.disabled).active,.show>.btn-outline-danger.dropdown-toggle{background-color:transparent !important;border-color:#ff3547 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-danger:not([disabled]):not(.disabled):active:focus,.btn-outline-danger:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-danger.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-warning{color:#fff;background-color:#fb3 !important}.btn-warning:hover{color:#fff;background-color:#ffc44d}.btn-warning:focus,.btn-warning.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-warning:focus,.btn-warning:active,.btn-warning.active{background-color:#c80}.btn-warning.dropdown-toggle{background-color:#fb3 !important}.btn-warning.dropdown-toggle:hover,.btn-warning.dropdown-toggle:focus{background-color:#ffc44d !important}.btn-warning:not([disabled]):not(.disabled):active,.btn-warning:not([disabled]):not(.disabled).active,.show>.btn-warning.dropdown-toggle{background-color:#c80 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-warning:not([disabled]):not(.disabled):active:focus,.btn-warning:not([disabled]):not(.disabled).active:focus,.show>.btn-warning.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.warning-ic{color:#fb3 !important}.warning-ic:hover,.warning-ic:focus{color:#fb3}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-warning{color:#fff}.btn-outline-warning{color:#fb3 !important;background-color:transparent !important;border:2px solid #fb3 !important}.btn-outline-warning:hover,.btn-outline-warning:focus,.btn-outline-warning:active,.btn-outline-warning:active:focus,.btn-outline-warning.active{color:#fb3 !important;background-color:transparent !important;border-color:#fb3 !important}.btn-outline-warning:not([disabled]):not(.disabled):active,.btn-outline-warning:not([disabled]):not(.disabled).active,.show>.btn-outline-warning.dropdown-toggle{background-color:transparent !important;border-color:#fb3 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-warning:not([disabled]):not(.disabled):active:focus,.btn-outline-warning:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-warning.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-success{color:#fff;background-color:#00c851 !important}.btn-success:hover{color:#fff;background-color:#00e25b}.btn-success:focus,.btn-success.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-success:focus,.btn-success:active,.btn-success.active{background-color:#006228}.btn-success.dropdown-toggle{background-color:#00c851 !important}.btn-success.dropdown-toggle:hover,.btn-success.dropdown-toggle:focus{background-color:#00e25b !important}.btn-success:not([disabled]):not(.disabled):active,.btn-success:not([disabled]):not(.disabled).active,.show>.btn-success.dropdown-toggle{background-color:#006228 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-success:not([disabled]):not(.disabled):active:focus,.btn-success:not([disabled]):not(.disabled).active:focus,.show>.btn-success.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.success-ic{color:#00c851 !important}.success-ic:hover,.success-ic:focus{color:#00c851}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-success{color:#fff}.btn-outline-success{color:#00c851 !important;background-color:transparent !important;border:2px solid #00c851 !important}.btn-outline-success:hover,.btn-outline-success:focus,.btn-outline-success:active,.btn-outline-success:active:focus,.btn-outline-success.active{color:#00c851 !important;background-color:transparent !important;border-color:#00c851 !important}.btn-outline-success:not([disabled]):not(.disabled):active,.btn-outline-success:not([disabled]):not(.disabled).active,.show>.btn-outline-success.dropdown-toggle{background-color:transparent !important;border-color:#00c851 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-success:not([disabled]):not(.disabled):active:focus,.btn-outline-success:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-success.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-info{color:#fff;background-color:#33b5e5 !important}.btn-info:hover{color:#fff;background-color:#4abde8}.btn-info:focus,.btn-info.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-info:focus,.btn-info:active,.btn-info.active{background-color:#14799e}.btn-info.dropdown-toggle{background-color:#33b5e5 !important}.btn-info.dropdown-toggle:hover,.btn-info.dropdown-toggle:focus{background-color:#4abde8 !important}.btn-info:not([disabled]):not(.disabled):active,.btn-info:not([disabled]):not(.disabled).active,.show>.btn-info.dropdown-toggle{background-color:#14799e !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-info:not([disabled]):not(.disabled):active:focus,.btn-info:not([disabled]):not(.disabled).active:focus,.show>.btn-info.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.info-ic{color:#33b5e5 !important}.info-ic:hover,.info-ic:focus{color:#33b5e5}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-info{color:#fff}.btn-outline-info{color:#33b5e5 !important;background-color:transparent !important;border:2px solid #33b5e5 !important}.btn-outline-info:hover,.btn-outline-info:focus,.btn-outline-info:active,.btn-outline-info:active:focus,.btn-outline-info.active{color:#33b5e5 !important;background-color:transparent !important;border-color:#33b5e5 !important}.btn-outline-info:not([disabled]):not(.disabled):active,.btn-outline-info:not([disabled]):not(.disabled).active,.show>.btn-outline-info.dropdown-toggle{background-color:transparent !important;border-color:#33b5e5 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-info:not([disabled]):not(.disabled):active:focus,.btn-outline-info:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-info.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-default{color:#fff;background-color:#2bbbad !important}.btn-default:hover{color:#fff;background-color:#30cfc0}.btn-default:focus,.btn-default.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-default:focus,.btn-default:active,.btn-default.active{background-color:#186860}.btn-default.dropdown-toggle{background-color:#2bbbad !important}.btn-default.dropdown-toggle:hover,.btn-default.dropdown-toggle:focus{background-color:#30cfc0 !important}.btn-default:not([disabled]):not(.disabled):active,.btn-default:not([disabled]):not(.disabled).active,.show>.btn-default.dropdown-toggle{background-color:#186860 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-default:not([disabled]):not(.disabled):active:focus,.btn-default:not([disabled]):not(.disabled).active:focus,.show>.btn-default.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.default-ic{color:#2bbbad !important}.default-ic:hover,.default-ic:focus{color:#2bbbad}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-default{color:#fff}.btn-outline-default{color:#2bbbad !important;background-color:transparent !important;border:2px solid #2bbbad !important}.btn-outline-default:hover,.btn-outline-default:focus,.btn-outline-default:active,.btn-outline-default:active:focus,.btn-outline-default.active{color:#2bbbad !important;background-color:transparent !important;border-color:#2bbbad !important}.btn-outline-default:not([disabled]):not(.disabled):active,.btn-outline-default:not([disabled]):not(.disabled).active,.show>.btn-outline-default.dropdown-toggle{background-color:transparent !important;border-color:#2bbbad !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-default:not([disabled]):not(.disabled):active:focus,.btn-outline-default:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-default.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-secondary{color:#fff;background-color:#a6c !important}.btn-secondary:hover{color:#fff;background-color:#b579d2}.btn-secondary:focus,.btn-secondary.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-secondary:focus,.btn-secondary:active,.btn-secondary.active{background-color:#739}.btn-secondary.dropdown-toggle{background-color:#a6c !important}.btn-secondary.dropdown-toggle:hover,.btn-secondary.dropdown-toggle:focus{background-color:#b579d2 !important}.btn-secondary:not([disabled]):not(.disabled):active,.btn-secondary:not([disabled]):not(.disabled).active,.show>.btn-secondary.dropdown-toggle{background-color:#739 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-secondary:not([disabled]):not(.disabled):active:focus,.btn-secondary:not([disabled]):not(.disabled).active:focus,.show>.btn-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.secondary-ic{color:#a6c !important}.secondary-ic:hover,.secondary-ic:focus{color:#a6c}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-secondary{color:#fff}.btn-outline-secondary{color:#a6c !important;background-color:transparent !important;border:2px solid #a6c !important}.btn-outline-secondary:hover,.btn-outline-secondary:focus,.btn-outline-secondary:active,.btn-outline-secondary:active:focus,.btn-outline-secondary.active{color:#a6c !important;background-color:transparent !important;border-color:#a6c !important}.btn-outline-secondary:not([disabled]):not(.disabled):active,.btn-outline-secondary:not([disabled]):not(.disabled).active,.show>.btn-outline-secondary.dropdown-toggle{background-color:transparent !important;border-color:#a6c !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-secondary:not([disabled]):not(.disabled):active:focus,.btn-outline-secondary:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-elegant{color:#fff;background-color:#2e2e2e !important}.btn-elegant:hover{color:#fff;background-color:#3b3b3b}.btn-elegant:focus,.btn-elegant.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-elegant:focus,.btn-elegant:active,.btn-elegant.active{background-color:#000}.btn-elegant.dropdown-toggle{background-color:#2e2e2e !important}.btn-elegant.dropdown-toggle:hover,.btn-elegant.dropdown-toggle:focus{background-color:#3b3b3b !important}.btn-elegant:not([disabled]):not(.disabled):active,.btn-elegant:not([disabled]):not(.disabled).active,.show>.btn-elegant.dropdown-toggle{background-color:#000 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-elegant:not([disabled]):not(.disabled):active:focus,.btn-elegant:not([disabled]):not(.disabled).active:focus,.show>.btn-elegant.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.elegant-ic{color:#2e2e2e !important}.elegant-ic:hover,.elegant-ic:focus{color:#2e2e2e}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-elegant{color:#fff}.btn-outline-elegant{color:#2e2e2e !important;background-color:transparent !important;border:2px solid #2e2e2e !important}.btn-outline-elegant:hover,.btn-outline-elegant:focus,.btn-outline-elegant:active,.btn-outline-elegant:active:focus,.btn-outline-elegant.active{color:#2e2e2e !important;background-color:transparent !important;border-color:#2e2e2e !important}.btn-outline-elegant:not([disabled]):not(.disabled):active,.btn-outline-elegant:not([disabled]):not(.disabled).active,.show>.btn-outline-elegant.dropdown-toggle{background-color:transparent !important;border-color:#2e2e2e !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-elegant:not([disabled]):not(.disabled):active:focus,.btn-outline-elegant:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-elegant.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-unique{color:#fff;background-color:#880e4f !important}.btn-unique:hover{color:#fff;background-color:#9f105c}.btn-unique:focus,.btn-unique.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-unique:focus,.btn-unique:active,.btn-unique.active{background-color:#2c0419}.btn-unique.dropdown-toggle{background-color:#880e4f !important}.btn-unique.dropdown-toggle:hover,.btn-unique.dropdown-toggle:focus{background-color:#9f105c !important}.btn-unique:not([disabled]):not(.disabled):active,.btn-unique:not([disabled]):not(.disabled).active,.show>.btn-unique.dropdown-toggle{background-color:#2c0419 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-unique:not([disabled]):not(.disabled):active:focus,.btn-unique:not([disabled]):not(.disabled).active:focus,.show>.btn-unique.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.unique-ic{color:#880e4f !important}.unique-ic:hover,.unique-ic:focus{color:#880e4f}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-unique{color:#fff}.btn-outline-unique{color:#880e4f !important;background-color:transparent !important;border:2px solid #880e4f !important}.btn-outline-unique:hover,.btn-outline-unique:focus,.btn-outline-unique:active,.btn-outline-unique:active:focus,.btn-outline-unique.active{color:#880e4f !important;background-color:transparent !important;border-color:#880e4f !important}.btn-outline-unique:not([disabled]):not(.disabled):active,.btn-outline-unique:not([disabled]):not(.disabled).active,.show>.btn-outline-unique.dropdown-toggle{background-color:transparent !important;border-color:#880e4f !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-unique:not([disabled]):not(.disabled):active:focus,.btn-outline-unique:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-unique.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-dark-green{color:#fff;background-color:#388e3c !important}.btn-dark-green:hover{color:#fff;background-color:#3fa044}.btn-dark-green:focus,.btn-dark-green.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-dark-green:focus,.btn-dark-green:active,.btn-dark-green.active{background-color:#1b451d}.btn-dark-green.dropdown-toggle{background-color:#388e3c !important}.btn-dark-green.dropdown-toggle:hover,.btn-dark-green.dropdown-toggle:focus{background-color:#3fa044 !important}.btn-dark-green:not([disabled]):not(.disabled):active,.btn-dark-green:not([disabled]):not(.disabled).active,.show>.btn-dark-green.dropdown-toggle{background-color:#1b451d !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-dark-green:not([disabled]):not(.disabled):active:focus,.btn-dark-green:not([disabled]):not(.disabled).active:focus,.show>.btn-dark-green.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.dark-green-ic{color:#388e3c !important}.dark-green-ic:hover,.dark-green-ic:focus{color:#388e3c}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-dark-green{color:#fff}.btn-outline-dark-green{color:#388e3c !important;background-color:transparent !important;border:2px solid #388e3c !important}.btn-outline-dark-green:hover,.btn-outline-dark-green:focus,.btn-outline-dark-green:active,.btn-outline-dark-green:active:focus,.btn-outline-dark-green.active{color:#388e3c !important;background-color:transparent !important;border-color:#388e3c !important}.btn-outline-dark-green:not([disabled]):not(.disabled):active,.btn-outline-dark-green:not([disabled]):not(.disabled).active,.show>.btn-outline-dark-green.dropdown-toggle{background-color:transparent !important;border-color:#388e3c !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-dark-green:not([disabled]):not(.disabled):active:focus,.btn-outline-dark-green:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-dark-green.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-mdb-color{color:#fff;background-color:#59698d !important}.btn-mdb-color:hover{color:#fff;background-color:#63759d}.btn-mdb-color:focus,.btn-mdb-color.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-mdb-color:focus,.btn-mdb-color:active,.btn-mdb-color.active{background-color:#323a4e}.btn-mdb-color.dropdown-toggle{background-color:#59698d !important}.btn-mdb-color.dropdown-toggle:hover,.btn-mdb-color.dropdown-toggle:focus{background-color:#63759d !important}.btn-mdb-color:not([disabled]):not(.disabled):active,.btn-mdb-color:not([disabled]):not(.disabled).active,.show>.btn-mdb-color.dropdown-toggle{background-color:#323a4e !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-mdb-color:not([disabled]):not(.disabled):active:focus,.btn-mdb-color:not([disabled]):not(.disabled).active:focus,.show>.btn-mdb-color.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-color-ic{color:#59698d !important}.mdb-color-ic:hover,.mdb-color-ic:focus{color:#59698d}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-mdb-color{color:#fff}.btn-outline-mdb-color{color:#59698d !important;background-color:transparent !important;border:2px solid #59698d !important}.btn-outline-mdb-color:hover,.btn-outline-mdb-color:focus,.btn-outline-mdb-color:active,.btn-outline-mdb-color:active:focus,.btn-outline-mdb-color.active{color:#59698d !important;background-color:transparent !important;border-color:#59698d !important}.btn-outline-mdb-color:not([disabled]):not(.disabled):active,.btn-outline-mdb-color:not([disabled]):not(.disabled).active,.show>.btn-outline-mdb-color.dropdown-toggle{background-color:transparent !important;border-color:#59698d !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-mdb-color:not([disabled]):not(.disabled):active:focus,.btn-outline-mdb-color:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-mdb-color.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-red{color:#fff;background-color:#d32f2f !important}.btn-red:hover{color:#fff;background-color:#d74444}.btn-red:focus,.btn-red.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-red:focus,.btn-red:active,.btn-red.active{background-color:#811b1b}.btn-red.dropdown-toggle{background-color:#d32f2f !important}.btn-red.dropdown-toggle:hover,.btn-red.dropdown-toggle:focus{background-color:#d74444 !important}.btn-red:not([disabled]):not(.disabled):active,.btn-red:not([disabled]):not(.disabled).active,.show>.btn-red.dropdown-toggle{background-color:#811b1b !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-red:not([disabled]):not(.disabled):active:focus,.btn-red:not([disabled]):not(.disabled).active:focus,.show>.btn-red.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.red-ic{color:#d32f2f !important}.red-ic:hover,.red-ic:focus{color:#d32f2f}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-red{color:#fff}.btn-outline-red{color:#d32f2f !important;background-color:transparent !important;border:2px solid #d32f2f !important}.btn-outline-red:hover,.btn-outline-red:focus,.btn-outline-red:active,.btn-outline-red:active:focus,.btn-outline-red.active{color:#d32f2f !important;background-color:transparent !important;border-color:#d32f2f !important}.btn-outline-red:not([disabled]):not(.disabled):active,.btn-outline-red:not([disabled]):not(.disabled).active,.show>.btn-outline-red.dropdown-toggle{background-color:transparent !important;border-color:#d32f2f !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-red:not([disabled]):not(.disabled):active:focus,.btn-outline-red:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-red.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-pink{color:#fff;background-color:#ec407a !important}.btn-pink:hover{color:#fff;background-color:#ee578a}.btn-pink:focus,.btn-pink.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-pink:focus,.btn-pink:active,.btn-pink.active{background-color:#b41249}.btn-pink.dropdown-toggle{background-color:#ec407a !important}.btn-pink.dropdown-toggle:hover,.btn-pink.dropdown-toggle:focus{background-color:#ee578a !important}.btn-pink:not([disabled]):not(.disabled):active,.btn-pink:not([disabled]):not(.disabled).active,.show>.btn-pink.dropdown-toggle{background-color:#b41249 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-pink:not([disabled]):not(.disabled):active:focus,.btn-pink:not([disabled]):not(.disabled).active:focus,.show>.btn-pink.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.pink-ic{color:#ec407a !important}.pink-ic:hover,.pink-ic:focus{color:#ec407a}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-pink{color:#fff}.btn-outline-pink{color:#ec407a !important;background-color:transparent !important;border:2px solid #ec407a !important}.btn-outline-pink:hover,.btn-outline-pink:focus,.btn-outline-pink:active,.btn-outline-pink:active:focus,.btn-outline-pink.active{color:#ec407a !important;background-color:transparent !important;border-color:#ec407a !important}.btn-outline-pink:not([disabled]):not(.disabled):active,.btn-outline-pink:not([disabled]):not(.disabled).active,.show>.btn-outline-pink.dropdown-toggle{background-color:transparent !important;border-color:#ec407a !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-pink:not([disabled]):not(.disabled):active:focus,.btn-outline-pink:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-pink.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-purple{color:#fff;background-color:#8e24aa !important}.btn-purple:hover{color:#fff;background-color:#a028bf}.btn-purple:focus,.btn-purple.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-purple:focus,.btn-purple:active,.btn-purple.active{background-color:#481256}.btn-purple.dropdown-toggle{background-color:#8e24aa !important}.btn-purple.dropdown-toggle:hover,.btn-purple.dropdown-toggle:focus{background-color:#a028bf !important}.btn-purple:not([disabled]):not(.disabled):active,.btn-purple:not([disabled]):not(.disabled).active,.show>.btn-purple.dropdown-toggle{background-color:#481256 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-purple:not([disabled]):not(.disabled):active:focus,.btn-purple:not([disabled]):not(.disabled).active:focus,.show>.btn-purple.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.purple-ic{color:#8e24aa !important}.purple-ic:hover,.purple-ic:focus{color:#8e24aa}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-purple{color:#fff}.btn-outline-purple{color:#8e24aa !important;background-color:transparent !important;border:2px solid #8e24aa !important}.btn-outline-purple:hover,.btn-outline-purple:focus,.btn-outline-purple:active,.btn-outline-purple:active:focus,.btn-outline-purple.active{color:#8e24aa !important;background-color:transparent !important;border-color:#8e24aa !important}.btn-outline-purple:not([disabled]):not(.disabled):active,.btn-outline-purple:not([disabled]):not(.disabled).active,.show>.btn-outline-purple.dropdown-toggle{background-color:transparent !important;border-color:#8e24aa !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-purple:not([disabled]):not(.disabled):active:focus,.btn-outline-purple:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-purple.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-deep-purple{color:#fff;background-color:#512da8 !important}.btn-deep-purple:hover{color:#fff;background-color:#5b32bc}.btn-deep-purple:focus,.btn-deep-purple.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-deep-purple:focus,.btn-deep-purple:active,.btn-deep-purple.active{background-color:#2a1758}.btn-deep-purple.dropdown-toggle{background-color:#512da8 !important}.btn-deep-purple.dropdown-toggle:hover,.btn-deep-purple.dropdown-toggle:focus{background-color:#5b32bc !important}.btn-deep-purple:not([disabled]):not(.disabled):active,.btn-deep-purple:not([disabled]):not(.disabled).active,.show>.btn-deep-purple.dropdown-toggle{background-color:#2a1758 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-deep-purple:not([disabled]):not(.disabled):active:focus,.btn-deep-purple:not([disabled]):not(.disabled).active:focus,.show>.btn-deep-purple.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.deep-purple-ic{color:#512da8 !important}.deep-purple-ic:hover,.deep-purple-ic:focus{color:#512da8}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-deep-purple{color:#fff}.btn-outline-deep-purple{color:#512da8 !important;background-color:transparent !important;border:2px solid #512da8 !important}.btn-outline-deep-purple:hover,.btn-outline-deep-purple:focus,.btn-outline-deep-purple:active,.btn-outline-deep-purple:active:focus,.btn-outline-deep-purple.active{color:#512da8 !important;background-color:transparent !important;border-color:#512da8 !important}.btn-outline-deep-purple:not([disabled]):not(.disabled):active,.btn-outline-deep-purple:not([disabled]):not(.disabled).active,.show>.btn-outline-deep-purple.dropdown-toggle{background-color:transparent !important;border-color:#512da8 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-deep-purple:not([disabled]):not(.disabled):active:focus,.btn-outline-deep-purple:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-deep-purple.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-indigo{color:#fff;background-color:#3f51b5 !important}.btn-indigo:hover{color:#fff;background-color:#4d5ec1}.btn-indigo:focus,.btn-indigo.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-indigo:focus,.btn-indigo:active,.btn-indigo.active{background-color:#252f69}.btn-indigo.dropdown-toggle{background-color:#3f51b5 !important}.btn-indigo.dropdown-toggle:hover,.btn-indigo.dropdown-toggle:focus{background-color:#4d5ec1 !important}.btn-indigo:not([disabled]):not(.disabled):active,.btn-indigo:not([disabled]):not(.disabled).active,.show>.btn-indigo.dropdown-toggle{background-color:#252f69 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-indigo:not([disabled]):not(.disabled):active:focus,.btn-indigo:not([disabled]):not(.disabled).active:focus,.show>.btn-indigo.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.indigo-ic{color:#3f51b5 !important}.indigo-ic:hover,.indigo-ic:focus{color:#3f51b5}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-indigo{color:#fff}.btn-outline-indigo{color:#3f51b5 !important;background-color:transparent !important;border:2px solid #3f51b5 !important}.btn-outline-indigo:hover,.btn-outline-indigo:focus,.btn-outline-indigo:active,.btn-outline-indigo:active:focus,.btn-outline-indigo.active{color:#3f51b5 !important;background-color:transparent !important;border-color:#3f51b5 !important}.btn-outline-indigo:not([disabled]):not(.disabled):active,.btn-outline-indigo:not([disabled]):not(.disabled).active,.show>.btn-outline-indigo.dropdown-toggle{background-color:transparent !important;border-color:#3f51b5 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-indigo:not([disabled]):not(.disabled):active:focus,.btn-outline-indigo:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-indigo.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-blue{color:#fff;background-color:#1976d2 !important}.btn-blue:hover{color:#fff;background-color:#2083e4}.btn-blue:focus,.btn-blue.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-blue:focus,.btn-blue:active,.btn-blue.active{background-color:#0e4377}.btn-blue.dropdown-toggle{background-color:#1976d2 !important}.btn-blue.dropdown-toggle:hover,.btn-blue.dropdown-toggle:focus{background-color:#2083e4 !important}.btn-blue:not([disabled]):not(.disabled):active,.btn-blue:not([disabled]):not(.disabled).active,.show>.btn-blue.dropdown-toggle{background-color:#0e4377 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-blue:not([disabled]):not(.disabled):active:focus,.btn-blue:not([disabled]):not(.disabled).active:focus,.show>.btn-blue.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.blue-ic{color:#1976d2 !important}.blue-ic:hover,.blue-ic:focus{color:#1976d2}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-blue{color:#fff}.btn-outline-blue{color:#1976d2 !important;background-color:transparent !important;border:2px solid #1976d2 !important}.btn-outline-blue:hover,.btn-outline-blue:focus,.btn-outline-blue:active,.btn-outline-blue:active:focus,.btn-outline-blue.active{color:#1976d2 !important;background-color:transparent !important;border-color:#1976d2 !important}.btn-outline-blue:not([disabled]):not(.disabled):active,.btn-outline-blue:not([disabled]):not(.disabled).active,.show>.btn-outline-blue.dropdown-toggle{background-color:transparent !important;border-color:#1976d2 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-blue:not([disabled]):not(.disabled):active:focus,.btn-outline-blue:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-blue.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-light-blue{color:#fff;background-color:#82b1ff !important}.btn-light-blue:hover{color:#fff;background-color:#9cc1ff}.btn-light-blue:focus,.btn-light-blue.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-light-blue:focus,.btn-light-blue:active,.btn-light-blue.active{background-color:#1c71ff}.btn-light-blue.dropdown-toggle{background-color:#82b1ff !important}.btn-light-blue.dropdown-toggle:hover,.btn-light-blue.dropdown-toggle:focus{background-color:#9cc1ff !important}.btn-light-blue:not([disabled]):not(.disabled):active,.btn-light-blue:not([disabled]):not(.disabled).active,.show>.btn-light-blue.dropdown-toggle{background-color:#1c71ff !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-light-blue:not([disabled]):not(.disabled):active:focus,.btn-light-blue:not([disabled]):not(.disabled).active:focus,.show>.btn-light-blue.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.light-blue-ic{color:#82b1ff !important}.light-blue-ic:hover,.light-blue-ic:focus{color:#82b1ff}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-light-blue{color:#fff}.btn-outline-light-blue{color:#82b1ff !important;background-color:transparent !important;border:2px solid #82b1ff !important}.btn-outline-light-blue:hover,.btn-outline-light-blue:focus,.btn-outline-light-blue:active,.btn-outline-light-blue:active:focus,.btn-outline-light-blue.active{color:#82b1ff !important;background-color:transparent !important;border-color:#82b1ff !important}.btn-outline-light-blue:not([disabled]):not(.disabled):active,.btn-outline-light-blue:not([disabled]):not(.disabled).active,.show>.btn-outline-light-blue.dropdown-toggle{background-color:transparent !important;border-color:#82b1ff !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-light-blue:not([disabled]):not(.disabled):active:focus,.btn-outline-light-blue:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-light-blue.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-cyan{color:#fff;background-color:#00bcd4 !important}.btn-cyan:hover{color:#fff;background-color:#00d3ee}.btn-cyan:focus,.btn-cyan.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-cyan:focus,.btn-cyan:active,.btn-cyan.active{background-color:#00626e}.btn-cyan.dropdown-toggle{background-color:#00bcd4 !important}.btn-cyan.dropdown-toggle:hover,.btn-cyan.dropdown-toggle:focus{background-color:#00d3ee !important}.btn-cyan:not([disabled]):not(.disabled):active,.btn-cyan:not([disabled]):not(.disabled).active,.show>.btn-cyan.dropdown-toggle{background-color:#00626e !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-cyan:not([disabled]):not(.disabled):active:focus,.btn-cyan:not([disabled]):not(.disabled).active:focus,.show>.btn-cyan.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.cyan-ic{color:#00bcd4 !important}.cyan-ic:hover,.cyan-ic:focus{color:#00bcd4}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-cyan{color:#fff}.btn-outline-cyan{color:#00bcd4 !important;background-color:transparent !important;border:2px solid #00bcd4 !important}.btn-outline-cyan:hover,.btn-outline-cyan:focus,.btn-outline-cyan:active,.btn-outline-cyan:active:focus,.btn-outline-cyan.active{color:#00bcd4 !important;background-color:transparent !important;border-color:#00bcd4 !important}.btn-outline-cyan:not([disabled]):not(.disabled):active,.btn-outline-cyan:not([disabled]):not(.disabled).active,.show>.btn-outline-cyan.dropdown-toggle{background-color:transparent !important;border-color:#00bcd4 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-cyan:not([disabled]):not(.disabled):active:focus,.btn-outline-cyan:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-cyan.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-teal{color:#fff;background-color:#00796b !important}.btn-teal:hover{color:#fff;background-color:#009382}.btn-teal:focus,.btn-teal.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-teal:focus,.btn-teal:active,.btn-teal.active{background-color:#001311}.btn-teal.dropdown-toggle{background-color:#00796b !important}.btn-teal.dropdown-toggle:hover,.btn-teal.dropdown-toggle:focus{background-color:#009382 !important}.btn-teal:not([disabled]):not(.disabled):active,.btn-teal:not([disabled]):not(.disabled).active,.show>.btn-teal.dropdown-toggle{background-color:#001311 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-teal:not([disabled]):not(.disabled):active:focus,.btn-teal:not([disabled]):not(.disabled).active:focus,.show>.btn-teal.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.teal-ic{color:#00796b !important}.teal-ic:hover,.teal-ic:focus{color:#00796b}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-teal{color:#fff}.btn-outline-teal{color:#00796b !important;background-color:transparent !important;border:2px solid #00796b !important}.btn-outline-teal:hover,.btn-outline-teal:focus,.btn-outline-teal:active,.btn-outline-teal:active:focus,.btn-outline-teal.active{color:#00796b !important;background-color:transparent !important;border-color:#00796b !important}.btn-outline-teal:not([disabled]):not(.disabled):active,.btn-outline-teal:not([disabled]):not(.disabled).active,.show>.btn-outline-teal.dropdown-toggle{background-color:transparent !important;border-color:#00796b !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-teal:not([disabled]):not(.disabled):active:focus,.btn-outline-teal:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-teal.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-green{color:#fff;background-color:#388e3c !important}.btn-green:hover{color:#fff;background-color:#3fa044}.btn-green:focus,.btn-green.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-green:focus,.btn-green:active,.btn-green.active{background-color:#1b451d}.btn-green.dropdown-toggle{background-color:#388e3c !important}.btn-green.dropdown-toggle:hover,.btn-green.dropdown-toggle:focus{background-color:#3fa044 !important}.btn-green:not([disabled]):not(.disabled):active,.btn-green:not([disabled]):not(.disabled).active,.show>.btn-green.dropdown-toggle{background-color:#1b451d !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-green:not([disabled]):not(.disabled):active:focus,.btn-green:not([disabled]):not(.disabled).active:focus,.show>.btn-green.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.green-ic{color:#388e3c !important}.green-ic:hover,.green-ic:focus{color:#388e3c}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-green{color:#fff}.btn-outline-green{color:#388e3c !important;background-color:transparent !important;border:2px solid #388e3c !important}.btn-outline-green:hover,.btn-outline-green:focus,.btn-outline-green:active,.btn-outline-green:active:focus,.btn-outline-green.active{color:#388e3c !important;background-color:transparent !important;border-color:#388e3c !important}.btn-outline-green:not([disabled]):not(.disabled):active,.btn-outline-green:not([disabled]):not(.disabled).active,.show>.btn-outline-green.dropdown-toggle{background-color:transparent !important;border-color:#388e3c !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-green:not([disabled]):not(.disabled):active:focus,.btn-outline-green:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-green.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-light-green{color:#fff;background-color:#8bc34a !important}.btn-light-green:hover{color:#fff;background-color:#97c95d}.btn-light-green:focus,.btn-light-green.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-light-green:focus,.btn-light-green:active,.btn-light-green.active{background-color:#577d2a}.btn-light-green.dropdown-toggle{background-color:#8bc34a !important}.btn-light-green.dropdown-toggle:hover,.btn-light-green.dropdown-toggle:focus{background-color:#97c95d !important}.btn-light-green:not([disabled]):not(.disabled):active,.btn-light-green:not([disabled]):not(.disabled).active,.show>.btn-light-green.dropdown-toggle{background-color:#577d2a !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-light-green:not([disabled]):not(.disabled):active:focus,.btn-light-green:not([disabled]):not(.disabled).active:focus,.show>.btn-light-green.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.light-green-ic{color:#8bc34a !important}.light-green-ic:hover,.light-green-ic:focus{color:#8bc34a}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-light-green{color:#fff}.btn-outline-light-green{color:#8bc34a !important;background-color:transparent !important;border:2px solid #8bc34a !important}.btn-outline-light-green:hover,.btn-outline-light-green:focus,.btn-outline-light-green:active,.btn-outline-light-green:active:focus,.btn-outline-light-green.active{color:#8bc34a !important;background-color:transparent !important;border-color:#8bc34a !important}.btn-outline-light-green:not([disabled]):not(.disabled):active,.btn-outline-light-green:not([disabled]):not(.disabled).active,.show>.btn-outline-light-green.dropdown-toggle{background-color:transparent !important;border-color:#8bc34a !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-light-green:not([disabled]):not(.disabled):active:focus,.btn-outline-light-green:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-light-green.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-lime{color:#fff;background-color:#afb42b !important}.btn-lime:hover{color:#fff;background-color:#c3c930}.btn-lime:focus,.btn-lime.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-lime:focus,.btn-lime:active,.btn-lime.active{background-color:#5f6217}.btn-lime.dropdown-toggle{background-color:#afb42b !important}.btn-lime.dropdown-toggle:hover,.btn-lime.dropdown-toggle:focus{background-color:#c3c930 !important}.btn-lime:not([disabled]):not(.disabled):active,.btn-lime:not([disabled]):not(.disabled).active,.show>.btn-lime.dropdown-toggle{background-color:#5f6217 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-lime:not([disabled]):not(.disabled):active:focus,.btn-lime:not([disabled]):not(.disabled).active:focus,.show>.btn-lime.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.lime-ic{color:#afb42b !important}.lime-ic:hover,.lime-ic:focus{color:#afb42b}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-lime{color:#fff}.btn-outline-lime{color:#afb42b !important;background-color:transparent !important;border:2px solid #afb42b !important}.btn-outline-lime:hover,.btn-outline-lime:focus,.btn-outline-lime:active,.btn-outline-lime:active:focus,.btn-outline-lime.active{color:#afb42b !important;background-color:transparent !important;border-color:#afb42b !important}.btn-outline-lime:not([disabled]):not(.disabled):active,.btn-outline-lime:not([disabled]):not(.disabled).active,.show>.btn-outline-lime.dropdown-toggle{background-color:transparent !important;border-color:#afb42b !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-lime:not([disabled]):not(.disabled):active:focus,.btn-outline-lime:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-lime.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-yellow{color:#fff;background-color:#fbc02d !important}.btn-yellow:hover{color:#fff;background-color:#fbc846}.btn-yellow:focus,.btn-yellow.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-yellow:focus,.btn-yellow:active,.btn-yellow.active{background-color:#be8904}.btn-yellow.dropdown-toggle{background-color:#fbc02d !important}.btn-yellow.dropdown-toggle:hover,.btn-yellow.dropdown-toggle:focus{background-color:#fbc846 !important}.btn-yellow:not([disabled]):not(.disabled):active,.btn-yellow:not([disabled]):not(.disabled).active,.show>.btn-yellow.dropdown-toggle{background-color:#be8904 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-yellow:not([disabled]):not(.disabled):active:focus,.btn-yellow:not([disabled]):not(.disabled).active:focus,.show>.btn-yellow.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.yellow-ic{color:#fbc02d !important}.yellow-ic:hover,.yellow-ic:focus{color:#fbc02d}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-yellow{color:#fff}.btn-outline-yellow{color:#fbc02d !important;background-color:transparent !important;border:2px solid #fbc02d !important}.btn-outline-yellow:hover,.btn-outline-yellow:focus,.btn-outline-yellow:active,.btn-outline-yellow:active:focus,.btn-outline-yellow.active{color:#fbc02d !important;background-color:transparent !important;border-color:#fbc02d !important}.btn-outline-yellow:not([disabled]):not(.disabled):active,.btn-outline-yellow:not([disabled]):not(.disabled).active,.show>.btn-outline-yellow.dropdown-toggle{background-color:transparent !important;border-color:#fbc02d !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-yellow:not([disabled]):not(.disabled):active:focus,.btn-outline-yellow:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-yellow.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-amber{color:#fff;background-color:#ffa000 !important}.btn-amber:hover{color:#fff;background-color:#ffaa1a}.btn-amber:focus,.btn-amber.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-amber:focus,.btn-amber:active,.btn-amber.active{background-color:#996000}.btn-amber.dropdown-toggle{background-color:#ffa000 !important}.btn-amber.dropdown-toggle:hover,.btn-amber.dropdown-toggle:focus{background-color:#ffaa1a !important}.btn-amber:not([disabled]):not(.disabled):active,.btn-amber:not([disabled]):not(.disabled).active,.show>.btn-amber.dropdown-toggle{background-color:#996000 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-amber:not([disabled]):not(.disabled):active:focus,.btn-amber:not([disabled]):not(.disabled).active:focus,.show>.btn-amber.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.amber-ic{color:#ffa000 !important}.amber-ic:hover,.amber-ic:focus{color:#ffa000}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-amber{color:#fff}.btn-outline-amber{color:#ffa000 !important;background-color:transparent !important;border:2px solid #ffa000 !important}.btn-outline-amber:hover,.btn-outline-amber:focus,.btn-outline-amber:active,.btn-outline-amber:active:focus,.btn-outline-amber.active{color:#ffa000 !important;background-color:transparent !important;border-color:#ffa000 !important}.btn-outline-amber:not([disabled]):not(.disabled):active,.btn-outline-amber:not([disabled]):not(.disabled).active,.show>.btn-outline-amber.dropdown-toggle{background-color:transparent !important;border-color:#ffa000 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-amber:not([disabled]):not(.disabled):active:focus,.btn-outline-amber:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-amber.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-orange{color:#fff;background-color:#f57c00 !important}.btn-orange:hover{color:#fff;background-color:#ff8910}.btn-orange:focus,.btn-orange.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-orange:focus,.btn-orange:active,.btn-orange.active{background-color:#8f4800}.btn-orange.dropdown-toggle{background-color:#f57c00 !important}.btn-orange.dropdown-toggle:hover,.btn-orange.dropdown-toggle:focus{background-color:#ff8910 !important}.btn-orange:not([disabled]):not(.disabled):active,.btn-orange:not([disabled]):not(.disabled).active,.show>.btn-orange.dropdown-toggle{background-color:#8f4800 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-orange:not([disabled]):not(.disabled):active:focus,.btn-orange:not([disabled]):not(.disabled).active:focus,.show>.btn-orange.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.orange-ic{color:#f57c00 !important}.orange-ic:hover,.orange-ic:focus{color:#f57c00}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-orange{color:#fff}.btn-outline-orange{color:#f57c00 !important;background-color:transparent !important;border:2px solid #f57c00 !important}.btn-outline-orange:hover,.btn-outline-orange:focus,.btn-outline-orange:active,.btn-outline-orange:active:focus,.btn-outline-orange.active{color:#f57c00 !important;background-color:transparent !important;border-color:#f57c00 !important}.btn-outline-orange:not([disabled]):not(.disabled):active,.btn-outline-orange:not([disabled]):not(.disabled).active,.show>.btn-outline-orange.dropdown-toggle{background-color:transparent !important;border-color:#f57c00 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-orange:not([disabled]):not(.disabled):active:focus,.btn-outline-orange:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-orange.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-deep-orange{color:#fff;background-color:#ff7043 !important}.btn-deep-orange:hover{color:#fff;background-color:#ff835d}.btn-deep-orange:focus,.btn-deep-orange.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-deep-orange:focus,.btn-deep-orange:active,.btn-deep-orange.active{background-color:#dc3500}.btn-deep-orange.dropdown-toggle{background-color:#ff7043 !important}.btn-deep-orange.dropdown-toggle:hover,.btn-deep-orange.dropdown-toggle:focus{background-color:#ff835d !important}.btn-deep-orange:not([disabled]):not(.disabled):active,.btn-deep-orange:not([disabled]):not(.disabled).active,.show>.btn-deep-orange.dropdown-toggle{background-color:#dc3500 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-deep-orange:not([disabled]):not(.disabled):active:focus,.btn-deep-orange:not([disabled]):not(.disabled).active:focus,.show>.btn-deep-orange.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.deep-orange-ic{color:#ff7043 !important}.deep-orange-ic:hover,.deep-orange-ic:focus{color:#ff7043}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-deep-orange{color:#fff}.btn-outline-deep-orange{color:#ff7043 !important;background-color:transparent !important;border:2px solid #ff7043 !important}.btn-outline-deep-orange:hover,.btn-outline-deep-orange:focus,.btn-outline-deep-orange:active,.btn-outline-deep-orange:active:focus,.btn-outline-deep-orange.active{color:#ff7043 !important;background-color:transparent !important;border-color:#ff7043 !important}.btn-outline-deep-orange:not([disabled]):not(.disabled):active,.btn-outline-deep-orange:not([disabled]):not(.disabled).active,.show>.btn-outline-deep-orange.dropdown-toggle{background-color:transparent !important;border-color:#ff7043 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-deep-orange:not([disabled]):not(.disabled):active:focus,.btn-outline-deep-orange:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-deep-orange.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-brown{color:#fff;background-color:#795548 !important}.btn-brown:hover{color:#fff;background-color:#896052}.btn-brown:focus,.btn-brown.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-brown:focus,.btn-brown:active,.btn-brown.active{background-color:#392822}.btn-brown.dropdown-toggle{background-color:#795548 !important}.btn-brown.dropdown-toggle:hover,.btn-brown.dropdown-toggle:focus{background-color:#896052 !important}.btn-brown:not([disabled]):not(.disabled):active,.btn-brown:not([disabled]):not(.disabled).active,.show>.btn-brown.dropdown-toggle{background-color:#392822 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-brown:not([disabled]):not(.disabled):active:focus,.btn-brown:not([disabled]):not(.disabled).active:focus,.show>.btn-brown.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.brown-ic{color:#795548 !important}.brown-ic:hover,.brown-ic:focus{color:#795548}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-brown{color:#fff}.btn-outline-brown{color:#795548 !important;background-color:transparent !important;border:2px solid #795548 !important}.btn-outline-brown:hover,.btn-outline-brown:focus,.btn-outline-brown:active,.btn-outline-brown:active:focus,.btn-outline-brown.active{color:#795548 !important;background-color:transparent !important;border-color:#795548 !important}.btn-outline-brown:not([disabled]):not(.disabled):active,.btn-outline-brown:not([disabled]):not(.disabled).active,.show>.btn-outline-brown.dropdown-toggle{background-color:transparent !important;border-color:#795548 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-brown:not([disabled]):not(.disabled):active:focus,.btn-outline-brown:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-brown.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-grey{color:#fff;background-color:#616161 !important}.btn-grey:hover{color:#fff;background-color:#6e6e6e}.btn-grey:focus,.btn-grey.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-grey:focus,.btn-grey:active,.btn-grey.active{background-color:#2e2e2e}.btn-grey.dropdown-toggle{background-color:#616161 !important}.btn-grey.dropdown-toggle:hover,.btn-grey.dropdown-toggle:focus{background-color:#6e6e6e !important}.btn-grey:not([disabled]):not(.disabled):active,.btn-grey:not([disabled]):not(.disabled).active,.show>.btn-grey.dropdown-toggle{background-color:#2e2e2e !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-grey:not([disabled]):not(.disabled):active:focus,.btn-grey:not([disabled]):not(.disabled).active:focus,.show>.btn-grey.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.grey-ic{color:#616161 !important}.grey-ic:hover,.grey-ic:focus{color:#616161}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-grey{color:#fff}.btn-outline-grey{color:#616161 !important;background-color:transparent !important;border:2px solid #616161 !important}.btn-outline-grey:hover,.btn-outline-grey:focus,.btn-outline-grey:active,.btn-outline-grey:active:focus,.btn-outline-grey.active{color:#616161 !important;background-color:transparent !important;border-color:#616161 !important}.btn-outline-grey:not([disabled]):not(.disabled):active,.btn-outline-grey:not([disabled]):not(.disabled).active,.show>.btn-outline-grey.dropdown-toggle{background-color:transparent !important;border-color:#616161 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-grey:not([disabled]):not(.disabled):active:focus,.btn-outline-grey:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-grey.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-blue-grey{color:#fff;background-color:#78909c !important}.btn-blue-grey:hover{color:#fff;background-color:#879ca7}.btn-blue-grey:focus,.btn-blue-grey.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-blue-grey:focus,.btn-blue-grey:active,.btn-blue-grey.active{background-color:#4a5b64}.btn-blue-grey.dropdown-toggle{background-color:#78909c !important}.btn-blue-grey.dropdown-toggle:hover,.btn-blue-grey.dropdown-toggle:focus{background-color:#879ca7 !important}.btn-blue-grey:not([disabled]):not(.disabled):active,.btn-blue-grey:not([disabled]):not(.disabled).active,.show>.btn-blue-grey.dropdown-toggle{background-color:#4a5b64 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-blue-grey:not([disabled]):not(.disabled):active:focus,.btn-blue-grey:not([disabled]):not(.disabled).active:focus,.show>.btn-blue-grey.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.blue-grey-ic{color:#78909c !important}.blue-grey-ic:hover,.blue-grey-ic:focus{color:#78909c}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-blue-grey{color:#fff}.btn-outline-blue-grey{color:#78909c !important;background-color:transparent !important;border:2px solid #78909c !important}.btn-outline-blue-grey:hover,.btn-outline-blue-grey:focus,.btn-outline-blue-grey:active,.btn-outline-blue-grey:active:focus,.btn-outline-blue-grey.active{color:#78909c !important;background-color:transparent !important;border-color:#78909c !important}.btn-outline-blue-grey:not([disabled]):not(.disabled):active,.btn-outline-blue-grey:not([disabled]):not(.disabled).active,.show>.btn-outline-blue-grey.dropdown-toggle{background-color:transparent !important;border-color:#78909c !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-blue-grey:not([disabled]):not(.disabled):active:focus,.btn-outline-blue-grey:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-blue-grey.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-dark{color:#fff;background-color:#212121 !important}.btn-dark:hover{color:#fff;background-color:#2e2e2e}.btn-dark:focus,.btn-dark.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-dark:focus,.btn-dark:active,.btn-dark.active{background-color:#000}.btn-dark.dropdown-toggle{background-color:#212121 !important}.btn-dark.dropdown-toggle:hover,.btn-dark.dropdown-toggle:focus{background-color:#2e2e2e !important}.btn-dark:not([disabled]):not(.disabled):active,.btn-dark:not([disabled]):not(.disabled).active,.show>.btn-dark.dropdown-toggle{background-color:#000 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-dark:not([disabled]):not(.disabled):active:focus,.btn-dark:not([disabled]):not(.disabled).active:focus,.show>.btn-dark.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.dark-ic{color:#212121 !important}.dark-ic:hover,.dark-ic:focus{color:#212121}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-dark{color:#fff}.btn-outline-dark{color:#212121 !important;background-color:transparent !important;border:2px solid #212121 !important}.btn-outline-dark:hover,.btn-outline-dark:focus,.btn-outline-dark:active,.btn-outline-dark:active:focus,.btn-outline-dark.active{color:#212121 !important;background-color:transparent !important;border-color:#212121 !important}.btn-outline-dark:not([disabled]):not(.disabled):active,.btn-outline-dark:not([disabled]):not(.disabled).active,.show>.btn-outline-dark.dropdown-toggle{background-color:transparent !important;border-color:#212121 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-dark:not([disabled]):not(.disabled):active:focus,.btn-outline-dark:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-dark.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-light{color:#000;background-color:#e0e0e0 !important}.btn-light:hover{color:#000;background-color:#ededed}.btn-light:focus,.btn-light.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-light:focus,.btn-light:active,.btn-light.active{background-color:#adadad}.btn-light.dropdown-toggle{background-color:#e0e0e0 !important}.btn-light.dropdown-toggle:hover,.btn-light.dropdown-toggle:focus{background-color:#ededed !important}.btn-light:not([disabled]):not(.disabled):active,.btn-light:not([disabled]):not(.disabled).active,.show>.btn-light.dropdown-toggle{background-color:#adadad !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-light:not([disabled]):not(.disabled):active:focus,.btn-light:not([disabled]):not(.disabled).active:focus,.show>.btn-light.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.light-ic{color:#e0e0e0 !important}.light-ic:hover,.light-ic:focus{color:#e0e0e0}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#000}table.table a.btn.btn-light{color:#000}.btn-outline-light{color:#e0e0e0 !important;background-color:transparent !important;border:2px solid #e0e0e0 !important}.btn-outline-light:hover,.btn-outline-light:focus,.btn-outline-light:active,.btn-outline-light:active:focus,.btn-outline-light.active{color:#e0e0e0 !important;background-color:transparent !important;border-color:#e0e0e0 !important}.btn-outline-light:not([disabled]):not(.disabled):active,.btn-outline-light:not([disabled]):not(.disabled).active,.show>.btn-outline-light.dropdown-toggle{background-color:transparent !important;border-color:#e0e0e0 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-light:not([disabled]):not(.disabled):active:focus,.btn-outline-light:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-light.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-white{color:#000;background-color:#fff !important}.btn-white:hover{color:#000;background-color:#fff}.btn-white:focus,.btn-white.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-white:focus,.btn-white:active,.btn-white.active{background-color:#ccc}.btn-white.dropdown-toggle{background-color:#fff !important}.btn-white.dropdown-toggle:hover,.btn-white.dropdown-toggle:focus{background-color:#fff !important}.btn-white:not([disabled]):not(.disabled):active,.btn-white:not([disabled]):not(.disabled).active,.show>.btn-white.dropdown-toggle{background-color:#ccc !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-white:not([disabled]):not(.disabled):active:focus,.btn-white:not([disabled]):not(.disabled).active:focus,.show>.btn-white.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.white-ic{color:#fff !important}.white-ic:hover,.white-ic:focus{color:#fff}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#000}table.table a.btn.btn-white{color:#000}.btn-outline-white{color:#fff !important;background-color:transparent !important;border:2px solid #fff !important}.btn-outline-white:hover,.btn-outline-white:focus,.btn-outline-white:active,.btn-outline-white:active:focus,.btn-outline-white.active{color:#fff !important;background-color:transparent !important;border-color:#fff !important}.btn-outline-white:not([disabled]):not(.disabled):active,.btn-outline-white:not([disabled]):not(.disabled).active,.show>.btn-outline-white.dropdown-toggle{background-color:transparent !important;border-color:#fff !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-white:not([disabled]):not(.disabled):active:focus,.btn-outline-white:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-white.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-black{color:#fff;background-color:#000 !important}.btn-black:hover{color:#fff;background-color:#0d0d0d}.btn-black:focus,.btn-black.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-black:focus,.btn-black:active,.btn-black.active{background-color:#000}.btn-black.dropdown-toggle{background-color:#000 !important}.btn-black.dropdown-toggle:hover,.btn-black.dropdown-toggle:focus{background-color:#0d0d0d !important}.btn-black:not([disabled]):not(.disabled):active,.btn-black:not([disabled]):not(.disabled).active,.show>.btn-black.dropdown-toggle{background-color:#000 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-black:not([disabled]):not(.disabled):active:focus,.btn-black:not([disabled]):not(.disabled).active:focus,.show>.btn-black.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.black-ic{color:#000 !important}.black-ic:hover,.black-ic:focus{color:#000}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-black{color:#fff}.btn-outline-black{color:#000 !important;background-color:transparent !important;border:2px solid #000 !important}.btn-outline-black:hover,.btn-outline-black:focus,.btn-outline-black:active,.btn-outline-black:active:focus,.btn-outline-black.active{color:#000 !important;background-color:transparent !important;border-color:#000 !important}.btn-outline-black:not([disabled]):not(.disabled):active,.btn-outline-black:not([disabled]):not(.disabled).active,.show>.btn-outline-black.dropdown-toggle{background-color:transparent !important;border-color:#000 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-outline-black:not([disabled]):not(.disabled):active:focus,.btn-outline-black:not([disabled]):not(.disabled).active:focus,.show>.btn-outline-black.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn.purple-gradient{color:#fff;-webkit-transition:.5s ease;transition:.5s ease}.btn.purple-gradient:hover,.btn.purple-gradient:focus,.btn.purple-gradient:active,.btn.purple-gradient:active:focus .btn.purple-gradient.active{background:-webkit-gradient(linear, left top, left bottom, from(#ff88ce), to(#8f8bf7));background:linear-gradient(#ff88ce, #8f8bf7)}.btn.peach-gradient{color:#fff;-webkit-transition:.5s ease;transition:.5s ease}.btn.peach-gradient:hover,.btn.peach-gradient:focus,.btn.peach-gradient:active,.btn.peach-gradient:active:focus .btn.peach-gradient.active{background:-webkit-gradient(linear, left top, left bottom, from(#ffdf89), to(#fc7b7b));background:linear-gradient(#ffdf89, #fc7b7b)}.btn.aqua-gradient{color:#fff;-webkit-transition:.5s ease;transition:.5s ease}.btn.aqua-gradient:hover,.btn.aqua-gradient:focus,.btn.aqua-gradient:active,.btn.aqua-gradient:active:focus .btn.aqua-gradient.active{background:-webkit-gradient(linear, left top, left bottom, from(#3aa2ff), to(#1fffac));background:linear-gradient(#3aa2ff, #1fffac)}.btn.blue-gradient{color:#fff;-webkit-transition:.5s ease;transition:.5s ease}.btn.blue-gradient:hover,.btn.blue-gradient:focus,.btn.blue-gradient:active,.btn.blue-gradient:active:focus .btn.blue-gradient.active{background:-webkit-gradient(linear, left top, left bottom, from(#5ed1fc), to(#3647b3));background:linear-gradient(#5ed1fc, #3647b3)}.btn-warning:not(:disabled):not(.disabled).active,.btn-warning:not(:disabled):not(.disabled):active,.show>.btn-warning.dropdown-toggle{color:#fff}.card{font-weight:400;border:0;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)}.card[class*="border"]{border:1px solid #9e9e9e;-webkit-box-shadow:none;box-shadow:none}.card .card-body h1,.card .card-body h2,.card .card-body h3,.card .card-body h4,.card .card-body h5,.card .card-body h6{font-weight:400}.card .card-body .card-title a{-webkit-transition:0.2s ease-in-out;transition:0.2s ease-in-out}.card .card-body .card-title a:hover{-webkit-transition:0.2s ease-in-out;transition:0.2s ease-in-out}.card .card-body .card-text{font-size:.9rem;font-weight:400;color:#747373}.card .md-form label{font-weight:300}.dropdown .dropdown-menu .dropdown-item:active{background-color:#757575}.md-form.input-group label{top:0;margin-bottom:0}.md-form.input-group .input-group-text{background-color:#e0e0e0}.md-form.input-group .input-group-text.md-addon{font-weight:500;background-color:transparent;border:none}.md-form.input-group .form-control{padding:.375rem .75rem;margin:0}.navbar{font-weight:300;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)}.navbar form .md-form input{margin:0 5px 1px 8px}.navbar .breadcrumb{padding:.3rem 0 0 1rem;margin:0;font-size:15px;font-weight:300;background-color:inherit}.navbar .breadcrumb .breadcrumb-item{color:#fff}.navbar .breadcrumb .breadcrumb-item.active{color:rgba(255,255,255,0.65)}.navbar .breadcrumb .breadcrumb-item:before{color:rgba(255,255,255,0.65)}.navbar .navbar-toggler{border-width:0;outline:0}.navbar .nav-flex-icons{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row}@media (max-width: 992px){.navbar .container{width:100%}.navbar .container .navbar-toggler-right{right:0}}.navbar .nav-item .nav-link{display:block}.navbar .nav-item .nav-link.disabled:active{pointer-events:none}.navbar .nav-item .nav-link .fas,.navbar .nav-item .nav-link .fab,.navbar .nav-item .nav-link .far{padding-right:3px;padding-left:3px}@media (max-width: 992px){.navbar .nav-item .nav-link{padding-right:6px;padding-left:6px}}.navbar .dropdown-menu{position:absolute !important;margin-top:0}.navbar .dropdown-menu a{padding:10px;font-size:.9375rem;font-weight:300}.navbar .dropdown-menu a:not(.active){color:#000}@media (max-width: 600px){.navbar .dropdown-menu form{width:17rem}}@media (min-width: 600px){.navbar .dropdown-menu form{width:22rem}}.navbar.navbar-light .navbar-nav .nav-item .nav-link.disbled{color:rgba(0,0,0,0.3)}.navbar.navbar-light .navbar-nav .nav-item .nav-link.disbled:hover{color:rgba(0,0,0,0.3)}.navbar.navbar-light .navbar-toggler-icon{cursor:pointer;background-image:url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.9)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E")}.navbar.navbar-light .breadcrumb .nav-item .nav-link,.navbar.navbar-light .navbar-nav .nav-item .nav-link{color:#000;-webkit-transition:.35s;transition:.35s}.navbar.navbar-light .breadcrumb .nav-item .nav-link:hover,.navbar.navbar-light .navbar-nav .nav-item .nav-link:hover{color:rgba(0,0,0,0.7)}.navbar.navbar-light .breadcrumb .nav-item.active>.nav-link,.navbar.navbar-light .navbar-nav .nav-item.active>.nav-link{background-color:rgba(0,0,0,0.1)}.navbar.navbar-light .breadcrumb .nav-item.active>.nav-link:hover,.navbar.navbar-light .navbar-nav .nav-item.active>.nav-link:hover{color:#000}.navbar.navbar-light .navbar-toggler{color:#000}.navbar.navbar-light form .md-form input{border-bottom:1px solid #000}.navbar.navbar-light form .md-form input:focus:not([readonly]){border-color:#4285f4}.navbar.navbar-light form .md-form .form-control{color:#000}.navbar.navbar-light form .md-form .form-control::-webkit-input-placeholder{font-weight:300;color:#000}.navbar.navbar-light form .md-form .form-control::-moz-placeholder{font-weight:300;color:#000}.navbar.navbar-light form .md-form .form-control:-ms-input-placeholder{font-weight:300;color:#000}.navbar.navbar-light form .md-form .form-control::-ms-input-placeholder{font-weight:300;color:#000}.navbar.navbar-light form .md-form .form-control::placeholder{font-weight:300;color:#000}.navbar.navbar-dark .navbar-nav .nav-item .nav-link.disbled{color:rgba(255,255,255,0.25)}.navbar.navbar-dark .navbar-nav .nav-item .nav-link.disbled:hover{color:rgba(255,255,255,0.25)}.navbar.navbar-dark .navbar-toggler-icon{cursor:pointer;background-image:url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 0.9)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E")}.navbar.navbar-dark .breadcrumb .nav-item .nav-link,.navbar.navbar-dark .navbar-nav .nav-item .nav-link{color:#fff;-webkit-transition:.35s;transition:.35s}.navbar.navbar-dark .breadcrumb .nav-item .nav-link:hover,.navbar.navbar-dark .navbar-nav .nav-item .nav-link:hover{color:rgba(255,255,255,0.75)}.navbar.navbar-dark .breadcrumb .nav-item.active>.nav-link,.navbar.navbar-dark .navbar-nav .nav-item.active>.nav-link{background-color:rgba(255,255,255,0.1)}.navbar.navbar-dark .breadcrumb .nav-item.active>.nav-link:hover,.navbar.navbar-dark .navbar-nav .nav-item.active>.nav-link:hover{color:#fff}.navbar.navbar-dark .navbar-toggler{color:#fff}.navbar.navbar-dark form .md-form input{border-bottom:1px solid #fff}.navbar.navbar-dark form .md-form input:focus:not([readonly]){border-color:#4285f4}.navbar.navbar-dark form .md-form .form-control{color:#fff}.navbar.navbar-dark form .md-form .form-control::-webkit-input-placeholder{font-weight:300;color:#fff}.navbar.navbar-dark form .md-form .form-control::-moz-placeholder{font-weight:300;color:#fff}.navbar.navbar-dark form .md-form .form-control:-ms-input-placeholder{font-weight:300;color:#fff}.navbar.navbar-dark form .md-form .form-control::-ms-input-placeholder{font-weight:300;color:#fff}.navbar.navbar-dark form .md-form .form-control::placeholder{font-weight:300;color:#fff}@media (min-width: 600px){.navbar.scrolling-navbar{padding-top:12px;padding-bottom:12px;-webkit-transition:background 0.5s ease-in-out,padding 0.5s ease-in-out;transition:background 0.5s ease-in-out,padding 0.5s ease-in-out}.navbar.scrolling-navbar .navbar-nav>li{-webkit-transition-duration:1s;transition-duration:1s}.navbar.scrolling-navbar.top-nav-collapse{padding-top:5px;padding-bottom:5px}}.pagination .page-item.active .page-link{color:#fff;background-color:#4285f4;border-radius:.125rem;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);-webkit-transition:all 0.2s linear;transition:all 0.2s linear}.pagination .page-item.active .page-link:hover{background-color:#4285f4}.pagination .page-item.disabled .page-link{color:#868e96}.pagination .page-item .page-link{font-size:.9rem;color:#212529;background-color:transparent;border:0;outline:0;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.pagination .page-item .page-link:hover{background-color:#eee;border-radius:.125rem;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.pagination .page-item .page-link:focus{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.pagination.pagination-lg .page-item .page-link{font-size:1rem}.pagination.pagination-sm .page-item .page-link{font-size:.8rem}.pagination.pagination-circle .page-item .page-link{margin-right:2px;margin-left:2px;border-radius:50%}.pagination.pagination-circle .page-item .page-link:hover{border-radius:50%}.pagination.pagination-circle .page-item.active .page-link{border-radius:50%}.pagination.pg-blue .page-item.active .page-link{background-color:#4285f4}.pagination.pg-blue .page-item.active .page-link:hover{background-color:#4285f4}.pagination.pg-red .page-item.active .page-link{background-color:#ff3547}.pagination.pg-red .page-item.active .page-link:hover{background-color:#ff3547}.pagination.pg-teal .page-item.active .page-link{background-color:#2bbbad}.pagination.pg-teal .page-item.active .page-link:hover{background-color:#2bbbad}.pagination.pg-dark-grey .page-item.active .page-link{background-color:#37474f}.pagination.pg-dark-grey .page-item.active .page-link:hover{background-color:#37474f}.pagination.pg-dark .page-item.active .page-link{background-color:#2e2e2e}.pagination.pg-dark .page-item.active .page-link:hover{background-color:#2e2e2e}.pagination.pg-blue-grey .page-item.active .page-link{background-color:#3f729b}.pagination.pg-blue-grey .page-item.active .page-link:hover{background-color:#3f729b}.pagination.pg-amber .page-item.active .page-link{background-color:#ff6f00}.pagination.pg-amber .page-item.active .page-link:hover{background-color:#ff6f00}.pagination.pg-purple .page-item.active .page-link{background-color:#5e35b1}.pagination.pg-purple .page-item.active .page-link:hover{background-color:#5e35b1}.badge{color:#fff !important;border-radius:.125rem;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)}.badge-pill{padding-right:.6em;padding-left:.6em;border-radius:10rem}.badge-primary{color:#fff !important;background-color:#4285f4 !important}.badge-danger{color:#fff !important;background-color:#ff3547 !important}.badge-warning{color:#fff !important;background-color:#fb3 !important}.badge-success{color:#fff !important;background-color:#00c851 !important}.badge-info{color:#fff !important;background-color:#33b5e5 !important}.badge-default{color:#fff !important;background-color:#2bbbad !important}.badge-secondary{color:#fff !important;background-color:#a6c !important}.badge-dark{color:#fff !important;background-color:#212121 !important}.badge-light{color:#000 !important;background-color:#e0e0e0 !important}body.modal-open{padding-right:0 !important;overflow:auto}body.scrollable{overflow-y:auto}.modal-dialog .modal-content{border:0;border-radius:.125rem;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.modal-dialog .modal-content .modal-header{border-top-left-radius:.125rem;border-top-right-radius:.125rem}.modal-dialog.cascading-modal{margin-top:10%}.modal-dialog.cascading-modal .close{color:#fff;text-shadow:none;outline:0;opacity:1}.modal-dialog.cascading-modal .modal-header{padding:1.5rem;margin:-2rem 1rem 1rem 1rem;text-align:center;border:none;border-radius:.125rem;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.modal-dialog.cascading-modal .modal-header .close{margin-right:1rem}.modal-dialog.cascading-modal .modal-header .title{width:100%;margin-bottom:0;font-size:1.25rem}.modal-dialog.cascading-modal .modal-header .title .fas,.modal-dialog.cascading-modal .modal-header .title .fab,.modal-dialog.cascading-modal .modal-header .title .far{margin-right:9px}.modal-dialog.cascading-modal .modal-header .social-buttons{margin-top:1.5rem}.modal-dialog.cascading-modal .modal-header .social-buttons a{font-size:1rem}.modal-dialog.cascading-modal .modal-c-tabs .md-tabs{display:-webkit-box;display:-ms-flexbox;display:flex;margin:-1.5rem 1rem 0 1rem;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)}.modal-dialog.cascading-modal .modal-c-tabs .md-tabs li{-webkit-box-flex:1;-ms-flex:1;flex:1}.modal-dialog.cascading-modal .modal-c-tabs .md-tabs li a{text-align:center}.modal-dialog.cascading-modal .modal-c-tabs .tab-content{padding:1.7rem 0 0 0}.modal-dialog.cascading-modal .modal-body,.modal-dialog.cascading-modal .modal-footer{padding-right:2rem;padding-left:2rem;color:#616161}.modal-dialog.cascading-modal .modal-body .additional-option,.modal-dialog.cascading-modal .modal-footer .additional-option{margin-top:1rem;text-align:center}.modal-dialog.cascading-modal.modal-avatar{margin-top:6rem}.modal-dialog.cascading-modal.modal-avatar .modal-header{margin:-6rem 0 -1rem;-webkit-box-shadow:none;box-shadow:none}.modal-dialog.cascading-modal.modal-avatar .modal-header img{width:130px;margin-right:auto;margin-left:auto;-webkit-box-shadow:0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);box-shadow:0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19)}.modal-dialog.modal-notify .heading{padding:.3rem;margin:0;font-size:1.15rem;color:#fff}.modal-dialog.modal-notify .modal-header{border:0;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)}.modal-dialog.modal-notify .close{opacity:1}.modal-dialog.modal-notify .modal-body{padding:1.5rem;color:#616161}.modal-dialog.modal-notify.modal-primary .modal-header{background-color:#4285f4}.modal-dialog.modal-notify.modal-primary .fas,.modal-dialog.modal-notify.modal-primary .fab,.modal-dialog.modal-notify.modal-primary .far{color:#4285f4}.modal-dialog.modal-notify.modal-primary .badge{background-color:#4285f4}.modal-dialog.modal-notify.modal-primary .btn .fas,.modal-dialog.modal-notify.modal-primary .btn .fab,.modal-dialog.modal-notify.modal-primary .btn .far{color:#fff}.modal-dialog.modal-notify.modal-primary .btn.btn-outline-primary .fas,.modal-dialog.modal-notify.modal-primary .btn.btn-outline-primary .fab,.modal-dialog.modal-notify.modal-primary .btn.btn-outline-primary .far{color:#4285f4}.modal-dialog.modal-notify.modal-danger .modal-header{background-color:#ff3547}.modal-dialog.modal-notify.modal-danger .fas,.modal-dialog.modal-notify.modal-danger .fab,.modal-dialog.modal-notify.modal-danger .far{color:#ff3547}.modal-dialog.modal-notify.modal-danger .badge{background-color:#ff3547}.modal-dialog.modal-notify.modal-danger .btn .fas,.modal-dialog.modal-notify.modal-danger .btn .fab,.modal-dialog.modal-notify.modal-danger .btn .far{color:#fff}.modal-dialog.modal-notify.modal-danger .btn.btn-outline-danger .fas,.modal-dialog.modal-notify.modal-danger .btn.btn-outline-danger .fab,.modal-dialog.modal-notify.modal-danger .btn.btn-outline-danger .far{color:#ff3547}.modal-dialog.modal-notify.modal-warning .modal-header{background-color:#fb3}.modal-dialog.modal-notify.modal-warning .fas,.modal-dialog.modal-notify.modal-warning .fab,.modal-dialog.modal-notify.modal-warning .far{color:#fb3}.modal-dialog.modal-notify.modal-warning .badge{background-color:#fb3}.modal-dialog.modal-notify.modal-warning .btn .fas,.modal-dialog.modal-notify.modal-warning .btn .fab,.modal-dialog.modal-notify.modal-warning .btn .far{color:#fff}.modal-dialog.modal-notify.modal-warning .btn.btn-outline-warning .fas,.modal-dialog.modal-notify.modal-warning .btn.btn-outline-warning .fab,.modal-dialog.modal-notify.modal-warning .btn.btn-outline-warning .far{color:#fb3}.modal-dialog.modal-notify.modal-success .modal-header{background-color:#00c851}.modal-dialog.modal-notify.modal-success .fas,.modal-dialog.modal-notify.modal-success .fab,.modal-dialog.modal-notify.modal-success .far{color:#00c851}.modal-dialog.modal-notify.modal-success .badge{background-color:#00c851}.modal-dialog.modal-notify.modal-success .btn .fas,.modal-dialog.modal-notify.modal-success .btn .fab,.modal-dialog.modal-notify.modal-success .btn .far{color:#fff}.modal-dialog.modal-notify.modal-success .btn.btn-outline-success .fas,.modal-dialog.modal-notify.modal-success .btn.btn-outline-success .fab,.modal-dialog.modal-notify.modal-success .btn.btn-outline-success .far{color:#00c851}.modal-dialog.modal-notify.modal-info .modal-header{background-color:#33b5e5}.modal-dialog.modal-notify.modal-info .fas,.modal-dialog.modal-notify.modal-info .fab,.modal-dialog.modal-notify.modal-info .far{color:#33b5e5}.modal-dialog.modal-notify.modal-info .badge{background-color:#33b5e5}.modal-dialog.modal-notify.modal-info .btn .fas,.modal-dialog.modal-notify.modal-info .btn .fab,.modal-dialog.modal-notify.modal-info .btn .far{color:#fff}.modal-dialog.modal-notify.modal-info .btn.btn-outline-info .fas,.modal-dialog.modal-notify.modal-info .btn.btn-outline-info .fab,.modal-dialog.modal-notify.modal-info .btn.btn-outline-info .far{color:#33b5e5}.modal{padding-right:0 !important}@media (min-width: 768px){.modal .modal-dialog.modal-top{top:0}.modal .modal-dialog.modal-left{left:0}.modal .modal-dialog.modal-right{right:0}.modal .modal-dialog.modal-bottom{bottom:0}.modal .modal-dialog.modal-top-left{top:10px;left:10px}.modal .modal-dialog.modal-top-right{top:10px;right:10px}.modal .modal-dialog.modal-bottom-left{bottom:10px;left:10px}.modal .modal-dialog.modal-bottom-right{right:10px;bottom:10px}}.modal.fade.top:not(.show) .modal-dialog{-webkit-transform:translate3d(0, -25%, 0);transform:translate3d(0, -25%, 0)}.modal.fade.left:not(.show) .modal-dialog{-webkit-transform:translate3d(-25%, 0, 0);transform:translate3d(-25%, 0, 0)}.modal.fade.right:not(.show) .modal-dialog{-webkit-transform:translate3d(25%, 0, 0);transform:translate3d(25%, 0, 0)}.modal.fade.bottom:not(.show) .modal-dialog{-webkit-transform:translate3d(0, 25%, 0);transform:translate3d(0, 25%, 0)}@media (min-width: 992px){.modal.modal-scrolling{position:relative}.modal.modal-scrolling .modal-dialog{position:fixed;z-index:1050}.modal.modal-content-clickable{top:auto;bottom:auto}.modal.modal-content-clickable .modal-dialog{position:fixed}.modal .modal-fluid{width:100%;max-width:100%}.modal .modal-fluid .modal-content{width:100%}.modal .modal-frame{position:absolute;width:100%;max-width:100% !important;margin:0 !important}.modal .modal-frame.modal-bottom{bottom:0}.modal .modal-full-height{position:absolute;top:0;right:0;display:-webkit-box;display:-ms-flexbox;display:flex;width:400px;height:auto;min-height:100%;margin:0}.modal .modal-full-height.modal-top,.modal .modal-full-height.modal-bottom{display:block;width:100%;max-width:100%;height:auto}.modal .modal-full-height.modal-top{bottom:auto}.modal .modal-full-height.modal-bottom{top:auto;min-height:0}.modal .modal-full-height .modal-content{width:100%}.modal .modal-full-height.modal-lg{width:90%;max-width:90%}}@media (min-width: 992px) and (min-width: 992px){.modal .modal-full-height.modal-lg{width:800px;max-width:800px}}@media (min-width: 992px) and (min-width: 1200px){.modal .modal-full-height.modal-lg{width:1000px;max-width:1000px}}@media (min-width: 992px){.modal .modal-side{position:absolute;right:10px;bottom:10px;width:400px;margin:0}}.carousel .carousel-control-prev-icon,.carousel .carousel-control-next-icon{width:20px;height:20px}.carousel .carousel-control-prev-icon{background-image:url(../img/svg/arrow_left.svg)}.carousel .carousel-control-next-icon{background-image:url(../img/svg/arrow_right.svg)}.carousel .carousel-indicators li{width:.625rem;height:.625rem;cursor:pointer;border-radius:50%}.carousel-fade .carousel-item{opacity:0;-webkit-transition-duration:.6s;transition-duration:.6s;-webkit-transition-property:opacity;transition-property:opacity}.carousel-fade .carousel-item.active,.carousel-fade .carousel-item-next.carousel-item-left,.carousel-fade .carousel-item-prev.carousel-item-right{opacity:1}.carousel-fade .carousel-item-left.active,.carousel-fade .carousel-item-right.active{opacity:0}.carousel-fade .carousel-item-next,.carousel-fade .carousel-item-prev,.carousel-fade .carousel-item.active,.carousel-fade .carousel-item-left.active,.carousel-fade .carousel-item-prev.active{-webkit-transform:translateX(0);transform:translateX(0)}@supports (transform-style: preserve-3d){.carousel-fade .carousel-item-next,.carousel-fade .carousel-item-prev,.carousel-fade .carousel-item.active,.carousel-fade .carousel-item-left.active,.carousel-fade .carousel-item-prev.active{-webkit-transform:translate3d(0, 0, 0);transform:translate3d(0, 0, 0)}}.md-form{position:relative;margin-top:1.5rem;margin-bottom:1.5rem}.md-form input:not([type]),.md-form input[type="text"]:not(.browser-default),.md-form input[type="password"]:not(.browser-default),.md-form input[type="email"]:not(.browser-default),.md-form input[type="url"]:not(.browser-default),.md-form input[type="time"]:not(.browser-default),.md-form input[type="date"]:not(.browser-default),.md-form input[type="datetime"]:not(.browser-default),.md-form input[type="datetime-local"]:not(.browser-default),.md-form input[type="tel"]:not(.browser-default),.md-form input[type="number"]:not(.browser-default),.md-form input[type="search"]:not(.browser-default),.md-form input[type="search-md"],.md-form textarea.md-textarea{-webkit-box-sizing:content-box;box-sizing:content-box;background-color:transparent;border:none;border-bottom:1px solid #ced4da;border-radius:0;outline:none;-webkit-box-shadow:none;box-shadow:none;-webkit-transition:border-color 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out;transition:border-color 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out;transition:border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;transition:border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out}.md-form input:not([type]):focus:not([readonly]),.md-form input[type="text"]:not(.browser-default):focus:not([readonly]),.md-form input[type="password"]:not(.browser-default):focus:not([readonly]),.md-form input[type="email"]:not(.browser-default):focus:not([readonly]),.md-form input[type="url"]:not(.browser-default):focus:not([readonly]),.md-form input[type="time"]:not(.browser-default):focus:not([readonly]),.md-form input[type="date"]:not(.browser-default):focus:not([readonly]),.md-form input[type="datetime"]:not(.browser-default):focus:not([readonly]),.md-form input[type="datetime-local"]:not(.browser-default):focus:not([readonly]),.md-form input[type="tel"]:not(.browser-default):focus:not([readonly]),.md-form input[type="number"]:not(.browser-default):focus:not([readonly]),.md-form input[type="search"]:not(.browser-default):focus:not([readonly]),.md-form input[type="search-md"]:focus:not([readonly]),.md-form textarea.md-textarea:focus:not([readonly]){border-bottom:1px solid #4285f4;-webkit-box-shadow:0 1px 0 0 #4285f4;box-shadow:0 1px 0 0 #4285f4}.md-form input:not([type]):focus:not([readonly])+label,.md-form input[type="text"]:not(.browser-default):focus:not([readonly])+label,.md-form input[type="password"]:not(.browser-default):focus:not([readonly])+label,.md-form input[type="email"]:not(.browser-default):focus:not([readonly])+label,.md-form input[type="url"]:not(.browser-default):focus:not([readonly])+label,.md-form input[type="time"]:not(.browser-default):focus:not([readonly])+label,.md-form input[type="date"]:not(.browser-default):focus:not([readonly])+label,.md-form input[type="datetime"]:not(.browser-default):focus:not([readonly])+label,.md-form input[type="datetime-local"]:not(.browser-default):focus:not([readonly])+label,.md-form input[type="tel"]:not(.browser-default):focus:not([readonly])+label,.md-form input[type="number"]:not(.browser-default):focus:not([readonly])+label,.md-form input[type="search"]:not(.browser-default):focus:not([readonly])+label,.md-form input[type="search-md"]:focus:not([readonly])+label,.md-form textarea.md-textarea:focus:not([readonly])+label{color:#4285f4}.md-form input:not([type])+label::after,.md-form input[type="text"]:not(.browser-default)+label::after,.md-form input[type="password"]:not(.browser-default)+label::after,.md-form input[type="email"]:not(.browser-default)+label::after,.md-form input[type="url"]:not(.browser-default)+label::after,.md-form input[type="time"]:not(.browser-default)+label::after,.md-form input[type="date"]:not(.browser-default)+label::after,.md-form input[type="datetime"]:not(.browser-default)+label::after,.md-form input[type="datetime-local"]:not(.browser-default)+label::after,.md-form input[type="tel"]:not(.browser-default)+label::after,.md-form input[type="number"]:not(.browser-default)+label::after,.md-form input[type="search"]:not(.browser-default)+label::after,.md-form input[type="search-md"]+label::after,.md-form textarea.md-textarea+label::after{position:absolute;top:65px;display:block;content:"";opacity:0;-webkit-transition:0.2s opacity ease-out,0.2s color ease-out;transition:0.2s opacity ease-out,0.2s color ease-out}.md-form input:not([type]).valid,.md-form input:not([type]):focus.valid,.md-form input[type="text"]:not(.browser-default).valid,.md-form input[type="text"]:not(.browser-default):focus.valid,.md-form input[type="password"]:not(.browser-default).valid,.md-form input[type="password"]:not(.browser-default):focus.valid,.md-form input[type="email"]:not(.browser-default).valid,.md-form input[type="email"]:not(.browser-default):focus.valid,.md-form input[type="url"]:not(.browser-default).valid,.md-form input[type="url"]:not(.browser-default):focus.valid,.md-form input[type="time"]:not(.browser-default).valid,.md-form input[type="time"]:not(.browser-default):focus.valid,.md-form input[type="date"]:not(.browser-default).valid,.md-form input[type="date"]:not(.browser-default):focus.valid,.md-form input[type="datetime"]:not(.browser-default).valid,.md-form input[type="datetime"]:not(.browser-default):focus.valid,.md-form input[type="datetime-local"]:not(.browser-default).valid,.md-form input[type="datetime-local"]:not(.browser-default):focus.valid,.md-form input[type="tel"]:not(.browser-default).valid,.md-form input[type="tel"]:not(.browser-default):focus.valid,.md-form input[type="number"]:not(.browser-default).valid,.md-form input[type="number"]:not(.browser-default):focus.valid,.md-form input[type="search"]:not(.browser-default).valid,.md-form input[type="search"]:not(.browser-default):focus.valid,.md-form input[type="search-md"].valid,.md-form input[type="search-md"]:focus.valid,.md-form textarea.md-textarea.valid,.md-form textarea.md-textarea:focus.valid{border-bottom:1px solid #00c851;-webkit-box-shadow:0 1px 0 0 #00c851;box-shadow:0 1px 0 0 #00c851}.md-form input:not([type]).valid+label:after,.md-form input:not([type]):focus.valid+label:after,.md-form input[type="text"]:not(.browser-default).valid+label:after,.md-form input[type="text"]:not(.browser-default):focus.valid+label:after,.md-form input[type="password"]:not(.browser-default).valid+label:after,.md-form input[type="password"]:not(.browser-default):focus.valid+label:after,.md-form input[type="email"]:not(.browser-default).valid+label:after,.md-form input[type="email"]:not(.browser-default):focus.valid+label:after,.md-form input[type="url"]:not(.browser-default).valid+label:after,.md-form input[type="url"]:not(.browser-default):focus.valid+label:after,.md-form input[type="time"]:not(.browser-default).valid+label:after,.md-form input[type="time"]:not(.browser-default):focus.valid+label:after,.md-form input[type="date"]:not(.browser-default).valid+label:after,.md-form input[type="date"]:not(.browser-default):focus.valid+label:after,.md-form input[type="datetime"]:not(.browser-default).valid+label:after,.md-form input[type="datetime"]:not(.browser-default):focus.valid+label:after,.md-form input[type="datetime-local"]:not(.browser-default).valid+label:after,.md-form input[type="datetime-local"]:not(.browser-default):focus.valid+label:after,.md-form input[type="tel"]:not(.browser-default).valid+label:after,.md-form input[type="tel"]:not(.browser-default):focus.valid+label:after,.md-form input[type="number"]:not(.browser-default).valid+label:after,.md-form input[type="number"]:not(.browser-default):focus.valid+label:after,.md-form input[type="search"]:not(.browser-default).valid+label:after,.md-form input[type="search"]:not(.browser-default):focus.valid+label:after,.md-form input[type="search-md"].valid+label:after,.md-form input[type="search-md"]:focus.valid+label:after,.md-form textarea.md-textarea.valid+label:after,.md-form textarea.md-textarea:focus.valid+label:after{color:#00c851;content:attr(data-success);opacity:1}.md-form input:not([type]).invalid,.md-form input:not([type]):focus.invalid,.md-form input[type="text"]:not(.browser-default).invalid,.md-form input[type="text"]:not(.browser-default):focus.invalid,.md-form input[type="password"]:not(.browser-default).invalid,.md-form input[type="password"]:not(.browser-default):focus.invalid,.md-form input[type="email"]:not(.browser-default).invalid,.md-form input[type="email"]:not(.browser-default):focus.invalid,.md-form input[type="url"]:not(.browser-default).invalid,.md-form input[type="url"]:not(.browser-default):focus.invalid,.md-form input[type="time"]:not(.browser-default).invalid,.md-form input[type="time"]:not(.browser-default):focus.invalid,.md-form input[type="date"]:not(.browser-default).invalid,.md-form input[type="date"]:not(.browser-default):focus.invalid,.md-form input[type="datetime"]:not(.browser-default).invalid,.md-form input[type="datetime"]:not(.browser-default):focus.invalid,.md-form input[type="datetime-local"]:not(.browser-default).invalid,.md-form input[type="datetime-local"]:not(.browser-default):focus.invalid,.md-form input[type="tel"]:not(.browser-default).invalid,.md-form input[type="tel"]:not(.browser-default):focus.invalid,.md-form input[type="number"]:not(.browser-default).invalid,.md-form input[type="number"]:not(.browser-default):focus.invalid,.md-form input[type="search"]:not(.browser-default).invalid,.md-form input[type="search"]:not(.browser-default):focus.invalid,.md-form input[type="search-md"].invalid,.md-form input[type="search-md"]:focus.invalid,.md-form textarea.md-textarea.invalid,.md-form textarea.md-textarea:focus.invalid{border-bottom:1px solid #f44336;-webkit-box-shadow:0 1px 0 0 #f44336;box-shadow:0 1px 0 0 #f44336}.md-form input:not([type]).invalid+label:after,.md-form input:not([type]):focus.invalid+label:after,.md-form input[type="text"]:not(.browser-default).invalid+label:after,.md-form input[type="text"]:not(.browser-default):focus.invalid+label:after,.md-form input[type="password"]:not(.browser-default).invalid+label:after,.md-form input[type="password"]:not(.browser-default):focus.invalid+label:after,.md-form input[type="email"]:not(.browser-default).invalid+label:after,.md-form input[type="email"]:not(.browser-default):focus.invalid+label:after,.md-form input[type="url"]:not(.browser-default).invalid+label:after,.md-form input[type="url"]:not(.browser-default):focus.invalid+label:after,.md-form input[type="time"]:not(.browser-default).invalid+label:after,.md-form input[type="time"]:not(.browser-default):focus.invalid+label:after,.md-form input[type="date"]:not(.browser-default).invalid+label:after,.md-form input[type="date"]:not(.browser-default):focus.invalid+label:after,.md-form input[type="datetime"]:not(.browser-default).invalid+label:after,.md-form input[type="datetime"]:not(.browser-default):focus.invalid+label:after,.md-form input[type="datetime-local"]:not(.browser-default).invalid+label:after,.md-form input[type="datetime-local"]:not(.browser-default):focus.invalid+label:after,.md-form input[type="tel"]:not(.browser-default).invalid+label:after,.md-form input[type="tel"]:not(.browser-default):focus.invalid+label:after,.md-form input[type="number"]:not(.browser-default).invalid+label:after,.md-form input[type="number"]:not(.browser-default):focus.invalid+label:after,.md-form input[type="search"]:not(.browser-default).invalid+label:after,.md-form input[type="search"]:not(.browser-default):focus.invalid+label:after,.md-form input[type="search-md"].invalid+label:after,.md-form input[type="search-md"]:focus.invalid+label:after,.md-form textarea.md-textarea.invalid+label:after,.md-form textarea.md-textarea:focus.invalid+label:after{color:#f44336;content:attr(data-error);opacity:1}.md-form input:not([type]).form-control.valid+label:after,.md-form input:not([type]).form-control:focus.valid+label:after,.md-form input[type="text"]:not(.browser-default).form-control.valid+label:after,.md-form input[type="text"]:not(.browser-default).form-control:focus.valid+label:after,.md-form input[type="password"]:not(.browser-default).form-control.valid+label:after,.md-form input[type="password"]:not(.browser-default).form-control:focus.valid+label:after,.md-form input[type="email"]:not(.browser-default).form-control.valid+label:after,.md-form input[type="email"]:not(.browser-default).form-control:focus.valid+label:after,.md-form input[type="url"]:not(.browser-default).form-control.valid+label:after,.md-form input[type="url"]:not(.browser-default).form-control:focus.valid+label:after,.md-form input[type="time"]:not(.browser-default).form-control.valid+label:after,.md-form input[type="time"]:not(.browser-default).form-control:focus.valid+label:after,.md-form input[type="date"]:not(.browser-default).form-control.valid+label:after,.md-form input[type="date"]:not(.browser-default).form-control:focus.valid+label:after,.md-form input[type="datetime"]:not(.browser-default).form-control.valid+label:after,.md-form input[type="datetime"]:not(.browser-default).form-control:focus.valid+label:after,.md-form input[type="datetime-local"]:not(.browser-default).form-control.valid+label:after,.md-form input[type="datetime-local"]:not(.browser-default).form-control:focus.valid+label:after,.md-form input[type="tel"]:not(.browser-default).form-control.valid+label:after,.md-form input[type="tel"]:not(.browser-default).form-control:focus.valid+label:after,.md-form input[type="number"]:not(.browser-default).form-control.valid+label:after,.md-form input[type="number"]:not(.browser-default).form-control:focus.valid+label:after,.md-form input[type="search"]:not(.browser-default).form-control.valid+label:after,.md-form input[type="search"]:not(.browser-default).form-control:focus.valid+label:after,.md-form input[type="search-md"].form-control.valid+label:after,.md-form input[type="search-md"].form-control:focus.valid+label:after,.md-form textarea.md-textarea.form-control.valid+label:after,.md-form textarea.md-textarea.form-control:focus.valid+label:after{top:4.1rem}.md-form input:not([type]).form-control.invalid+label:after,.md-form input:not([type]).form-control:focus.invalid+label:after,.md-form input[type="text"]:not(.browser-default).form-control.invalid+label:after,.md-form input[type="text"]:not(.browser-default).form-control:focus.invalid+label:after,.md-form input[type="password"]:not(.browser-default).form-control.invalid+label:after,.md-form input[type="password"]:not(.browser-default).form-control:focus.invalid+label:after,.md-form input[type="email"]:not(.browser-default).form-control.invalid+label:after,.md-form input[type="email"]:not(.browser-default).form-control:focus.invalid+label:after,.md-form input[type="url"]:not(.browser-default).form-control.invalid+label:after,.md-form input[type="url"]:not(.browser-default).form-control:focus.invalid+label:after,.md-form input[type="time"]:not(.browser-default).form-control.invalid+label:after,.md-form input[type="time"]:not(.browser-default).form-control:focus.invalid+label:after,.md-form input[type="date"]:not(.browser-default).form-control.invalid+label:after,.md-form input[type="date"]:not(.browser-default).form-control:focus.invalid+label:after,.md-form input[type="datetime"]:not(.browser-default).form-control.invalid+label:after,.md-form input[type="datetime"]:not(.browser-default).form-control:focus.invalid+label:after,.md-form input[type="datetime-local"]:not(.browser-default).form-control.invalid+label:after,.md-form input[type="datetime-local"]:not(.browser-default).form-control:focus.invalid+label:after,.md-form input[type="tel"]:not(.browser-default).form-control.invalid+label:after,.md-form input[type="tel"]:not(.browser-default).form-control:focus.invalid+label:after,.md-form input[type="number"]:not(.browser-default).form-control.invalid+label:after,.md-form input[type="number"]:not(.browser-default).form-control:focus.invalid+label:after,.md-form input[type="search"]:not(.browser-default).form-control.invalid+label:after,.md-form input[type="search"]:not(.browser-default).form-control:focus.invalid+label:after,.md-form input[type="search-md"].form-control.invalid+label:after,.md-form input[type="search-md"].form-control:focus.invalid+label:after,.md-form textarea.md-textarea.form-control.invalid+label:after,.md-form textarea.md-textarea.form-control:focus.invalid+label:after{top:4rem}.md-form input:not([type]).form-control-lg.valid+label:after,.md-form input:not([type]).form-control-lg:focus.valid+label:after,.md-form input[type="text"]:not(.browser-default).form-control-lg.valid+label:after,.md-form input[type="text"]:not(.browser-default).form-control-lg:focus.valid+label:after,.md-form input[type="password"]:not(.browser-default).form-control-lg.valid+label:after,.md-form input[type="password"]:not(.browser-default).form-control-lg:focus.valid+label:after,.md-form input[type="email"]:not(.browser-default).form-control-lg.valid+label:after,.md-form input[type="email"]:not(.browser-default).form-control-lg:focus.valid+label:after,.md-form input[type="url"]:not(.browser-default).form-control-lg.valid+label:after,.md-form input[type="url"]:not(.browser-default).form-control-lg:focus.valid+label:after,.md-form input[type="time"]:not(.browser-default).form-control-lg.valid+label:after,.md-form input[type="time"]:not(.browser-default).form-control-lg:focus.valid+label:after,.md-form input[type="date"]:not(.browser-default).form-control-lg.valid+label:after,.md-form input[type="date"]:not(.browser-default).form-control-lg:focus.valid+label:after,.md-form input[type="datetime"]:not(.browser-default).form-control-lg.valid+label:after,.md-form input[type="datetime"]:not(.browser-default).form-control-lg:focus.valid+label:after,.md-form input[type="datetime-local"]:not(.browser-default).form-control-lg.valid+label:after,.md-form input[type="datetime-local"]:not(.browser-default).form-control-lg:focus.valid+label:after,.md-form input[type="tel"]:not(.browser-default).form-control-lg.valid+label:after,.md-form input[type="tel"]:not(.browser-default).form-control-lg:focus.valid+label:after,.md-form input[type="number"]:not(.browser-default).form-control-lg.valid+label:after,.md-form input[type="number"]:not(.browser-default).form-control-lg:focus.valid+label:after,.md-form input[type="search"]:not(.browser-default).form-control-lg.valid+label:after,.md-form input[type="search"]:not(.browser-default).form-control-lg:focus.valid+label:after,.md-form input[type="search-md"].form-control-lg.valid+label:after,.md-form input[type="search-md"].form-control-lg:focus.valid+label:after,.md-form textarea.md-textarea.form-control-lg.valid+label:after,.md-form textarea.md-textarea.form-control-lg:focus.valid+label:after{top:4.6rem}.md-form input:not([type]).form-control-lg.invalid+label:after,.md-form input:not([type]).form-control-lg:focus.invalid+label:after,.md-form input[type="text"]:not(.browser-default).form-control-lg.invalid+label:after,.md-form input[type="text"]:not(.browser-default).form-control-lg:focus.invalid+label:after,.md-form input[type="password"]:not(.browser-default).form-control-lg.invalid+label:after,.md-form input[type="password"]:not(.browser-default).form-control-lg:focus.invalid+label:after,.md-form input[type="email"]:not(.browser-default).form-control-lg.invalid+label:after,.md-form input[type="email"]:not(.browser-default).form-control-lg:focus.invalid+label:after,.md-form input[type="url"]:not(.browser-default).form-control-lg.invalid+label:after,.md-form input[type="url"]:not(.browser-default).form-control-lg:focus.invalid+label:after,.md-form input[type="time"]:not(.browser-default).form-control-lg.invalid+label:after,.md-form input[type="time"]:not(.browser-default).form-control-lg:focus.invalid+label:after,.md-form input[type="date"]:not(.browser-default).form-control-lg.invalid+label:after,.md-form input[type="date"]:not(.browser-default).form-control-lg:focus.invalid+label:after,.md-form input[type="datetime"]:not(.browser-default).form-control-lg.invalid+label:after,.md-form input[type="datetime"]:not(.browser-default).form-control-lg:focus.invalid+label:after,.md-form input[type="datetime-local"]:not(.browser-default).form-control-lg.invalid+label:after,.md-form input[type="datetime-local"]:not(.browser-default).form-control-lg:focus.invalid+label:after,.md-form input[type="tel"]:not(.browser-default).form-control-lg.invalid+label:after,.md-form input[type="tel"]:not(.browser-default).form-control-lg:focus.invalid+label:after,.md-form input[type="number"]:not(.browser-default).form-control-lg.invalid+label:after,.md-form input[type="number"]:not(.browser-default).form-control-lg:focus.invalid+label:after,.md-form input[type="search"]:not(.browser-default).form-control-lg.invalid+label:after,.md-form input[type="search"]:not(.browser-default).form-control-lg:focus.invalid+label:after,.md-form input[type="search-md"].form-control-lg.invalid+label:after,.md-form input[type="search-md"].form-control-lg:focus.invalid+label:after,.md-form textarea.md-textarea.form-control-lg.invalid+label:after,.md-form textarea.md-textarea.form-control-lg:focus.invalid+label:after{top:4.6rem}.md-form input:not([type]).form-control-sm.valid+label:after,.md-form input:not([type]).form-control-sm:focus.valid+label:after,.md-form input[type="text"]:not(.browser-default).form-control-sm.valid+label:after,.md-form input[type="text"]:not(.browser-default).form-control-sm:focus.valid+label:after,.md-form input[type="password"]:not(.browser-default).form-control-sm.valid+label:after,.md-form input[type="password"]:not(.browser-default).form-control-sm:focus.valid+label:after,.md-form input[type="email"]:not(.browser-default).form-control-sm.valid+label:after,.md-form input[type="email"]:not(.browser-default).form-control-sm:focus.valid+label:after,.md-form input[type="url"]:not(.browser-default).form-control-sm.valid+label:after,.md-form input[type="url"]:not(.browser-default).form-control-sm:focus.valid+label:after,.md-form input[type="time"]:not(.browser-default).form-control-sm.valid+label:after,.md-form input[type="time"]:not(.browser-default).form-control-sm:focus.valid+label:after,.md-form input[type="date"]:not(.browser-default).form-control-sm.valid+label:after,.md-form input[type="date"]:not(.browser-default).form-control-sm:focus.valid+label:after,.md-form input[type="datetime"]:not(.browser-default).form-control-sm.valid+label:after,.md-form input[type="datetime"]:not(.browser-default).form-control-sm:focus.valid+label:after,.md-form input[type="datetime-local"]:not(.browser-default).form-control-sm.valid+label:after,.md-form input[type="datetime-local"]:not(.browser-default).form-control-sm:focus.valid+label:after,.md-form input[type="tel"]:not(.browser-default).form-control-sm.valid+label:after,.md-form input[type="tel"]:not(.browser-default).form-control-sm:focus.valid+label:after,.md-form input[type="number"]:not(.browser-default).form-control-sm.valid+label:after,.md-form input[type="number"]:not(.browser-default).form-control-sm:focus.valid+label:after,.md-form input[type="search"]:not(.browser-default).form-control-sm.valid+label:after,.md-form input[type="search"]:not(.browser-default).form-control-sm:focus.valid+label:after,.md-form input[type="search-md"].form-control-sm.valid+label:after,.md-form input[type="search-md"].form-control-sm:focus.valid+label:after,.md-form textarea.md-textarea.form-control-sm.valid+label:after,.md-form textarea.md-textarea.form-control-sm:focus.valid+label:after{top:3.7rem}.md-form input:not([type]).form-control-sm.invalid+label:after,.md-form input:not([type]).form-control-sm:focus.invalid+label:after,.md-form input[type="text"]:not(.browser-default).form-control-sm.invalid+label:after,.md-form input[type="text"]:not(.browser-default).form-control-sm:focus.invalid+label:after,.md-form input[type="password"]:not(.browser-default).form-control-sm.invalid+label:after,.md-form input[type="password"]:not(.browser-default).form-control-sm:focus.invalid+label:after,.md-form input[type="email"]:not(.browser-default).form-control-sm.invalid+label:after,.md-form input[type="email"]:not(.browser-default).form-control-sm:focus.invalid+label:after,.md-form input[type="url"]:not(.browser-default).form-control-sm.invalid+label:after,.md-form input[type="url"]:not(.browser-default).form-control-sm:focus.invalid+label:after,.md-form input[type="time"]:not(.browser-default).form-control-sm.invalid+label:after,.md-form input[type="time"]:not(.browser-default).form-control-sm:focus.invalid+label:after,.md-form input[type="date"]:not(.browser-default).form-control-sm.invalid+label:after,.md-form input[type="date"]:not(.browser-default).form-control-sm:focus.invalid+label:after,.md-form input[type="datetime"]:not(.browser-default).form-control-sm.invalid+label:after,.md-form input[type="datetime"]:not(.browser-default).form-control-sm:focus.invalid+label:after,.md-form input[type="datetime-local"]:not(.browser-default).form-control-sm.invalid+label:after,.md-form input[type="datetime-local"]:not(.browser-default).form-control-sm:focus.invalid+label:after,.md-form input[type="tel"]:not(.browser-default).form-control-sm.invalid+label:after,.md-form input[type="tel"]:not(.browser-default).form-control-sm:focus.invalid+label:after,.md-form input[type="number"]:not(.browser-default).form-control-sm.invalid+label:after,.md-form input[type="number"]:not(.browser-default).form-control-sm:focus.invalid+label:after,.md-form input[type="search"]:not(.browser-default).form-control-sm.invalid+label:after,.md-form input[type="search"]:not(.browser-default).form-control-sm:focus.invalid+label:after,.md-form input[type="search-md"].form-control-sm.invalid+label:after,.md-form input[type="search-md"].form-control-sm:focus.invalid+label:after,.md-form textarea.md-textarea.form-control-sm.invalid+label:after,.md-form textarea.md-textarea.form-control-sm:focus.invalid+label:after{top:3.6rem}.md-form>input[type="date"]:not(.browser-default)+label{-webkit-transform:translateY(-27px) scale(0.8);transform:translateY(-27px) scale(0.8);-webkit-transform-origin:0 0;transform-origin:0 0}.md-form>input[type]:-webkit-autofill:not(.browser-default):not([type="search"])+label,.md-form>input[type="time"]:not(.browser-default)+label{font-size:.8rem;-webkit-transform:translateY(-25px);transform:translateY(-25px);-webkit-transform-origin:0 0;transform-origin:0 0}.md-form .was-validated input[type="text"]:valid+label{color:#00c851 !important}.md-form .was-validated input[type="text"]:invalid+label{color:#f44336 !important}.md-form .was-validated .form-control:valid:focus{-webkit-box-shadow:0 1px 0 0 #00c851 !important;box-shadow:0 1px 0 0 #00c851 !important}.md-form .was-validated .form-control:valid{border-color:#00c851 !important}.md-form .was-validated .form-control:invalid:focus{-webkit-box-shadow:0 1px 0 0 #f44336 !important;box-shadow:0 1px 0 0 #f44336 !important}.md-form .was-validated .form-control:invalid{border-color:#f44336 !important}.md-form .form-control{height:auto;padding:.6rem 0 .4rem 0;margin:0 0 .5rem 0;background-color:transparent;border-radius:0}.md-form .form-control:focus{-webkit-box-shadow:none;box-shadow:none}.md-form .form-control:disabled,.md-form .form-control[readonly]{background-color:transparent;border-bottom:1px solid #bdbdbd}.md-form .form-control.is-valid{border-color:#00c851}.md-form .form-control.is-valid:focus{border-color:#00c851 !important;-webkit-box-shadow:0 1px 0 0 #00c851 !important;box-shadow:0 1px 0 0 #00c851 !important}.md-form .form-control.is-invalid{border-color:#f44336}.md-form .form-control.is-invalid:focus{border-color:#f44336 !important;-webkit-box-shadow:0 1px 0 0 #f44336 !important;box-shadow:0 1px 0 0 #f44336 !important}.md-form .form-control.is-valid,.md-form .form-control.is-invalid{background-position:center right !important}.md-form .validate{margin-bottom:2.5rem}.md-form label{font-size:1rem}.md-form label.active{font-size:1rem}.md-form .prefix{top:.25rem;font-size:1.75rem}.md-form .prefix ~ input,.md-form .prefix ~ textarea{width:calc(100% - 2.5rem);margin-left:2.5rem}.md-form .prefix ~ label{margin-left:2.5rem}.md-form .prefix ~ .form-text{margin-left:2.6rem}.md-form label{position:absolute;top:0;left:0;font-size:1rem;color:#757575;cursor:text;-webkit-transition:color .2s ease-out, -webkit-transform .2s ease-out;transition:color .2s ease-out, -webkit-transform .2s ease-out;transition:transform .2s ease-out, color .2s ease-out;transition:transform .2s ease-out, color .2s ease-out, -webkit-transform .2s ease-out;-webkit-transform:translateY(12px);transform:translateY(12px);-webkit-transform-origin:0% 100%;transform-origin:0% 100%}.md-form label.active{-webkit-transform:translateY(-14px) scale(0.8);transform:translateY(-14px) scale(0.8)}.md-form .prefix{position:absolute;-webkit-transition:color 0.2s;transition:color 0.2s}.md-form .prefix.active{color:#4285f4}.md-form.form-lg .validate{margin-bottom:2.8rem}.md-form.form-lg label{font-size:1.25rem}.md-form.form-lg label.active{font-size:1.15rem}.md-form.form-lg .prefix{top:.4rem;font-size:2rem}.md-form.form-lg .prefix ~ input,.md-form.form-lg .prefix ~ textarea{width:calc(100% - 3rem);margin-left:3rem}.md-form.form-lg .prefix ~ label{margin-left:3rem}.md-form.form-lg .prefix ~ .form-text{margin-left:3.1rem}.md-form.form-sm .validate{margin-bottom:2.3rem}.md-form.form-sm label{font-size:.875rem}.md-form.form-sm label.active{font-size:.95rem}.md-form.form-sm .prefix{top:.35rem;font-size:1.5rem}.md-form.form-sm .prefix ~ input,.md-form.form-sm .prefix ~ textarea{width:calc(100% - 2rem);margin-left:2rem}.md-form.form-sm .prefix ~ label{margin-left:2rem}.md-form.form-sm .prefix ~ .form-text{margin-left:2rem}.md-form textarea.md-textarea{padding:1.5rem 0;overflow-y:hidden}.md-form textarea.md-textarea-auto{padding:0;padding-top:1.5rem}.md-form.md-outline{position:relative;margin-top:1.5rem;margin-bottom:1.5rem}.md-form.md-outline input[type="text"],.md-form.md-outline input[type="password"],.md-form.md-outline input[type="email"],.md-form.md-outline input[type="url"],.md-form.md-outline input[type="time"],.md-form.md-outline input[type="date"],.md-form.md-outline input[type="datetime-local"],.md-form.md-outline input[type="tel"],.md-form.md-outline input[type="number"],.md-form.md-outline input[type="search-md"],.md-form.md-outline input[type="search"],.md-form.md-outline textarea.md-textarea{-webkit-box-sizing:border-box;box-sizing:border-box;background-color:transparent;border:1px solid #dadce0;border-radius:4px;outline:none;-webkit-box-shadow:none;box-shadow:none;-webkit-transition:all .3s;transition:all .3s}.md-form.md-outline input[type="text"]:focus:not([readonly]),.md-form.md-outline input[type="password"]:focus:not([readonly]),.md-form.md-outline input[type="email"]:focus:not([readonly]),.md-form.md-outline input[type="url"]:focus:not([readonly]),.md-form.md-outline input[type="time"]:focus:not([readonly]),.md-form.md-outline input[type="date"]:focus:not([readonly]),.md-form.md-outline input[type="datetime-local"]:focus:not([readonly]),.md-form.md-outline input[type="tel"]:focus:not([readonly]),.md-form.md-outline input[type="number"]:focus:not([readonly]),.md-form.md-outline input[type="search-md"]:focus:not([readonly]),.md-form.md-outline input[type="search"]:focus:not([readonly]),.md-form.md-outline textarea.md-textarea:focus:not([readonly]){border-color:#4285f4;-webkit-box-shadow:inset 0 0 0 1px #4285f4;box-shadow:inset 0 0 0 1px #4285f4}.md-form.md-outline input[type="text"]:focus:not([readonly])+label,.md-form.md-outline input[type="password"]:focus:not([readonly])+label,.md-form.md-outline input[type="email"]:focus:not([readonly])+label,.md-form.md-outline input[type="url"]:focus:not([readonly])+label,.md-form.md-outline input[type="time"]:focus:not([readonly])+label,.md-form.md-outline input[type="date"]:focus:not([readonly])+label,.md-form.md-outline input[type="datetime-local"]:focus:not([readonly])+label,.md-form.md-outline input[type="tel"]:focus:not([readonly])+label,.md-form.md-outline input[type="number"]:focus:not([readonly])+label,.md-form.md-outline input[type="search-md"]:focus:not([readonly])+label,.md-form.md-outline input[type="search"]:focus:not([readonly])+label,.md-form.md-outline textarea.md-textarea:focus:not([readonly])+label{color:#4285f4}.md-form.md-outline input[type="text"].valid,.md-form.md-outline input[type="text"]:focus.valid,.md-form.md-outline input[type="password"].valid,.md-form.md-outline input[type="password"]:focus.valid,.md-form.md-outline input[type="email"].valid,.md-form.md-outline input[type="email"]:focus.valid,.md-form.md-outline input[type="url"].valid,.md-form.md-outline input[type="url"]:focus.valid,.md-form.md-outline input[type="time"].valid,.md-form.md-outline input[type="time"]:focus.valid,.md-form.md-outline input[type="date"].valid,.md-form.md-outline input[type="date"]:focus.valid,.md-form.md-outline input[type="datetime-local"].valid,.md-form.md-outline input[type="datetime-local"]:focus.valid,.md-form.md-outline input[type="tel"].valid,.md-form.md-outline input[type="tel"]:focus.valid,.md-form.md-outline input[type="number"].valid,.md-form.md-outline input[type="number"]:focus.valid,.md-form.md-outline input[type="search-md"].valid,.md-form.md-outline input[type="search-md"]:focus.valid,.md-form.md-outline input[type="search"].valid,.md-form.md-outline input[type="search"]:focus.valid,.md-form.md-outline textarea.md-textarea.valid,.md-form.md-outline textarea.md-textarea:focus.valid{border-color:#00c851;-webkit-box-shadow:inset 0 0 0 1px #00c851;box-shadow:inset 0 0 0 1px #00c851}.md-form.md-outline input[type="text"]:focus:not([readonly]).valid+label,.md-form.md-outline input[type="text"].valid+label:after,.md-form.md-outline input[type="text"]:focus.valid+label:after,.md-form.md-outline input[type="password"]:focus:not([readonly]).valid+label,.md-form.md-outline input[type="password"].valid+label:after,.md-form.md-outline input[type="password"]:focus.valid+label:after,.md-form.md-outline input[type="email"]:focus:not([readonly]).valid+label,.md-form.md-outline input[type="email"].valid+label:after,.md-form.md-outline input[type="email"]:focus.valid+label:after,.md-form.md-outline input[type="url"]:focus:not([readonly]).valid+label,.md-form.md-outline input[type="url"].valid+label:after,.md-form.md-outline input[type="url"]:focus.valid+label:after,.md-form.md-outline input[type="time"]:focus:not([readonly]).valid+label,.md-form.md-outline input[type="time"].valid+label:after,.md-form.md-outline input[type="time"]:focus.valid+label:after,.md-form.md-outline input[type="date"]:focus:not([readonly]).valid+label,.md-form.md-outline input[type="date"].valid+label:after,.md-form.md-outline input[type="date"]:focus.valid+label:after,.md-form.md-outline input[type="datetime-local"]:focus:not([readonly]).valid+label,.md-form.md-outline input[type="datetime-local"].valid+label:after,.md-form.md-outline input[type="datetime-local"]:focus.valid+label:after,.md-form.md-outline input[type="tel"]:focus:not([readonly]).valid+label,.md-form.md-outline input[type="tel"].valid+label:after,.md-form.md-outline input[type="tel"]:focus.valid+label:after,.md-form.md-outline input[type="number"]:focus:not([readonly]).valid+label,.md-form.md-outline input[type="number"].valid+label:after,.md-form.md-outline input[type="number"]:focus.valid+label:after,.md-form.md-outline input[type="search-md"]:focus:not([readonly]).valid+label,.md-form.md-outline input[type="search-md"].valid+label:after,.md-form.md-outline input[type="search-md"]:focus.valid+label:after,.md-form.md-outline input[type="search"]:focus:not([readonly]).valid+label,.md-form.md-outline input[type="search"].valid+label:after,.md-form.md-outline input[type="search"]:focus.valid+label:after,.md-form.md-outline textarea.md-textarea:focus:not([readonly]).valid+label,.md-form.md-outline textarea.md-textarea.valid+label:after,.md-form.md-outline textarea.md-textarea:focus.valid+label:after{color:#00c851;content:attr(data-success);opacity:1}.md-form.md-outline input[type="text"].invalid,.md-form.md-outline input[type="text"]:focus.invalid,.md-form.md-outline input[type="password"].invalid,.md-form.md-outline input[type="password"]:focus.invalid,.md-form.md-outline input[type="email"].invalid,.md-form.md-outline input[type="email"]:focus.invalid,.md-form.md-outline input[type="url"].invalid,.md-form.md-outline input[type="url"]:focus.invalid,.md-form.md-outline input[type="time"].invalid,.md-form.md-outline input[type="time"]:focus.invalid,.md-form.md-outline input[type="date"].invalid,.md-form.md-outline input[type="date"]:focus.invalid,.md-form.md-outline input[type="datetime-local"].invalid,.md-form.md-outline input[type="datetime-local"]:focus.invalid,.md-form.md-outline input[type="tel"].invalid,.md-form.md-outline input[type="tel"]:focus.invalid,.md-form.md-outline input[type="number"].invalid,.md-form.md-outline input[type="number"]:focus.invalid,.md-form.md-outline input[type="search-md"].invalid,.md-form.md-outline input[type="search-md"]:focus.invalid,.md-form.md-outline input[type="search"].invalid,.md-form.md-outline input[type="search"]:focus.invalid,.md-form.md-outline textarea.md-textarea.invalid,.md-form.md-outline textarea.md-textarea:focus.invalid{border-color:#f44336;-webkit-box-shadow:inset 0 0 0 1px #f44336;box-shadow:inset 0 0 0 1px #f44336}.md-form.md-outline input[type="text"]:focus:not([readonly]).invalid+label,.md-form.md-outline input[type="text"].invalid+label:after,.md-form.md-outline input[type="text"]:focus.invalid+label:after,.md-form.md-outline input[type="password"]:focus:not([readonly]).invalid+label,.md-form.md-outline input[type="password"].invalid+label:after,.md-form.md-outline input[type="password"]:focus.invalid+label:after,.md-form.md-outline input[type="email"]:focus:not([readonly]).invalid+label,.md-form.md-outline input[type="email"].invalid+label:after,.md-form.md-outline input[type="email"]:focus.invalid+label:after,.md-form.md-outline input[type="url"]:focus:not([readonly]).invalid+label,.md-form.md-outline input[type="url"].invalid+label:after,.md-form.md-outline input[type="url"]:focus.invalid+label:after,.md-form.md-outline input[type="time"]:focus:not([readonly]).invalid+label,.md-form.md-outline input[type="time"].invalid+label:after,.md-form.md-outline input[type="time"]:focus.invalid+label:after,.md-form.md-outline input[type="date"]:focus:not([readonly]).invalid+label,.md-form.md-outline input[type="date"].invalid+label:after,.md-form.md-outline input[type="date"]:focus.invalid+label:after,.md-form.md-outline input[type="datetime-local"]:focus:not([readonly]).invalid+label,.md-form.md-outline input[type="datetime-local"].invalid+label:after,.md-form.md-outline input[type="datetime-local"]:focus.invalid+label:after,.md-form.md-outline input[type="tel"]:focus:not([readonly]).invalid+label,.md-form.md-outline input[type="tel"].invalid+label:after,.md-form.md-outline input[type="tel"]:focus.invalid+label:after,.md-form.md-outline input[type="number"]:focus:not([readonly]).invalid+label,.md-form.md-outline input[type="number"].invalid+label:after,.md-form.md-outline input[type="number"]:focus.invalid+label:after,.md-form.md-outline input[type="search-md"]:focus:not([readonly]).invalid+label,.md-form.md-outline input[type="search-md"].invalid+label:after,.md-form.md-outline input[type="search-md"]:focus.invalid+label:after,.md-form.md-outline input[type="search"]:focus:not([readonly]).invalid+label,.md-form.md-outline input[type="search"].invalid+label:after,.md-form.md-outline input[type="search"]:focus.invalid+label:after,.md-form.md-outline textarea.md-textarea:focus:not([readonly]).invalid+label,.md-form.md-outline textarea.md-textarea.invalid+label:after,.md-form.md-outline textarea.md-textarea:focus.invalid+label:after{color:#f44336;content:attr(data-error);opacity:1}.md-form.md-outline input[type="text"].form-control.valid+label:after,.md-form.md-outline input[type="text"].form-control:focus.valid+label:after,.md-form.md-outline input[type="password"].form-control.valid+label:after,.md-form.md-outline input[type="password"].form-control:focus.valid+label:after,.md-form.md-outline input[type="email"].form-control.valid+label:after,.md-form.md-outline input[type="email"].form-control:focus.valid+label:after,.md-form.md-outline input[type="url"].form-control.valid+label:after,.md-form.md-outline input[type="url"].form-control:focus.valid+label:after,.md-form.md-outline input[type="time"].form-control.valid+label:after,.md-form.md-outline input[type="time"].form-control:focus.valid+label:after,.md-form.md-outline input[type="date"].form-control.valid+label:after,.md-form.md-outline input[type="date"].form-control:focus.valid+label:after,.md-form.md-outline input[type="datetime-local"].form-control.valid+label:after,.md-form.md-outline input[type="datetime-local"].form-control:focus.valid+label:after,.md-form.md-outline input[type="tel"].form-control.valid+label:after,.md-form.md-outline input[type="tel"].form-control:focus.valid+label:after,.md-form.md-outline input[type="number"].form-control.valid+label:after,.md-form.md-outline input[type="number"].form-control:focus.valid+label:after,.md-form.md-outline input[type="search-md"].form-control.valid+label:after,.md-form.md-outline input[type="search-md"].form-control:focus.valid+label:after,.md-form.md-outline input[type="search"].form-control.valid+label:after,.md-form.md-outline input[type="search"].form-control:focus.valid+label:after,.md-form.md-outline textarea.md-textarea.form-control.valid+label:after,.md-form.md-outline textarea.md-textarea.form-control:focus.valid+label:after{position:absolute;top:4rem;left:0}.md-form.md-outline input[type="text"].form-control.invalid+label:after,.md-form.md-outline input[type="text"].form-control:focus.invalid+label:after,.md-form.md-outline input[type="password"].form-control.invalid+label:after,.md-form.md-outline input[type="password"].form-control:focus.invalid+label:after,.md-form.md-outline input[type="email"].form-control.invalid+label:after,.md-form.md-outline input[type="email"].form-control:focus.invalid+label:after,.md-form.md-outline input[type="url"].form-control.invalid+label:after,.md-form.md-outline input[type="url"].form-control:focus.invalid+label:after,.md-form.md-outline input[type="time"].form-control.invalid+label:after,.md-form.md-outline input[type="time"].form-control:focus.invalid+label:after,.md-form.md-outline input[type="date"].form-control.invalid+label:after,.md-form.md-outline input[type="date"].form-control:focus.invalid+label:after,.md-form.md-outline input[type="datetime-local"].form-control.invalid+label:after,.md-form.md-outline input[type="datetime-local"].form-control:focus.invalid+label:after,.md-form.md-outline input[type="tel"].form-control.invalid+label:after,.md-form.md-outline input[type="tel"].form-control:focus.invalid+label:after,.md-form.md-outline input[type="number"].form-control.invalid+label:after,.md-form.md-outline input[type="number"].form-control:focus.invalid+label:after,.md-form.md-outline input[type="search-md"].form-control.invalid+label:after,.md-form.md-outline input[type="search-md"].form-control:focus.invalid+label:after,.md-form.md-outline input[type="search"].form-control.invalid+label:after,.md-form.md-outline input[type="search"].form-control:focus.invalid+label:after,.md-form.md-outline textarea.md-textarea.form-control.invalid+label:after,.md-form.md-outline textarea.md-textarea.form-control:focus.invalid+label:after{position:absolute;top:4rem;left:0}.md-form.md-outline>input[type]:-webkit-autofill:not(.browser-default):not([type="search"])+label,.md-form.md-outline>input[type="time"]:not(.browser-default)+label{left:8px;padding-right:5px;padding-left:5px;font-size:1rem;font-weight:500;background:#fff;-webkit-transform:translateY(-9px) scale(0.8);transform:translateY(-9px) scale(0.8);-webkit-transform-origin:0 0;transform-origin:0 0}.md-form.md-outline>input[type]:-webkit-autofill:not(.browser-default):not([type="search"])+label.active,.md-form.md-outline>input[type="time"]:not(.browser-default)+label.active{-webkit-transform:translateY(-9px) scale(0.8);transform:translateY(-9px) scale(0.8);-webkit-transform-origin:0 0;transform-origin:0 0}@-webkit-keyframes autofill{to{color:#495057;background:transparent}}@keyframes autofill{to{color:#495057;background:transparent}}.md-form.md-outline input:-webkit-autofill{-webkit-animation-name:autofill;animation-name:autofill;-webkit-animation-fill-mode:both;animation-fill-mode:both}.md-form.md-outline .form-control{padding:.375rem .75rem}.md-form.md-outline label{position:absolute;top:0;left:0;padding-left:10px;font-size:1rem;color:#757575;cursor:text;-webkit-transition:color .2s ease-out, -webkit-transform .2s ease-out;transition:color .2s ease-out, -webkit-transform .2s ease-out;transition:transform .2s ease-out, color .2s ease-out;transition:transform .2s ease-out, color .2s ease-out, -webkit-transform .2s ease-out;-webkit-transform:translateY(9px);transform:translateY(9px);-webkit-transform-origin:0% 100%;transform-origin:0% 100%}.md-form.md-outline label.active{left:8px;padding-right:5px;padding-left:5px;font-weight:500;background:#fff;-webkit-transform:translateY(-13px) scale(0.8);transform:translateY(-13px) scale(0.8)}.md-form.md-outline.form-lg .form-control.form-control-lg{padding:.5rem .725rem}.md-form.md-outline.form-lg label{font-size:1.25rem;-webkit-transform:translateY(10px);transform:translateY(10px)}.md-form.md-outline.form-lg label.active{font-size:1.1rem;-webkit-transform:translateY(-14px) scale(0.8);transform:translateY(-14px) scale(0.8)}.md-form.md-outline.form-lg .prefix{top:.65rem;font-size:25px}.md-form.md-outline.form-lg .prefix ~ input,.md-form.md-outline.form-lg .prefix ~ textarea{width:calc(100% - 2.2rem);margin-left:2.2rem}.md-form.md-outline.form-lg .prefix ~ label{margin-left:2.2rem}.md-form.md-outline.form-lg .prefix ~ .form-text{margin-left:2.3rem}.md-form.md-outline.form-sm .form-control.form-control-sm{padding:.25rem .625rem}.md-form.md-outline.form-sm label{font-size:.8rem;-webkit-transform:translateY(8px);transform:translateY(8px)}.md-form.md-outline.form-sm label.active{font-size:.85rem;-webkit-transform:translateY(-12px) scale(0.8);transform:translateY(-12px) scale(0.8)}.md-form.md-outline.form-sm .prefix{top:.5rem;font-size:15px}.md-form.md-outline.form-sm .prefix ~ input,.md-form.md-outline.form-sm .prefix ~ textarea{width:calc(100% - 1.6rem);margin-left:1.6rem}.md-form.md-outline.form-sm .prefix ~ label{margin-left:1.6rem}.md-form.md-outline.form-sm .prefix ~ .form-text{margin-left:1.7rem}.md-form.md-outline .prefix{position:absolute;top:.6rem;font-size:20px;-webkit-transition:color .2s;transition:color .2s}.md-form.md-outline .prefix:focus{color:#4285f4}.md-form.md-outline .prefix ~ input,.md-form.md-outline .prefix ~ textarea{width:calc(100% - 2rem);margin-left:2rem}.md-form.md-outline .prefix ~ label{margin-left:2rem}.md-form.md-outline .prefix ~ .form-text{margin-left:2.1rem}.md-form.md-outline .character-counter{margin-top:-.5rem}.md-form.md-bg input[type="text"],.md-form.md-bg input[type="password"],.md-form.md-bg input[type="email"],.md-form.md-bg input[type="url"],.md-form.md-bg input[type="time"],.md-form.md-bg input[type="date"],.md-form.md-bg input[type="datetime-local"],.md-form.md-bg input[type="tel"],.md-form.md-bg input[type="number"],.md-form.md-bg input[type="search-md"],.md-form.md-bg input[type="search"],.md-form.md-bg textarea.md-textarea{-webkit-box-sizing:border-box;box-sizing:border-box;padding:10px 5px;background:#f5f5f5 no-repeat;background-image:-webkit-gradient(linear, left top, left bottom, from(#4285f4), to(#4285f4)),-webkit-gradient(linear, left top, left bottom, from(#ced4da), to(#ced4da));background-image:linear-gradient(to bottom, #4285f4, #4285f4),linear-gradient(to bottom, #ced4da, #ced4da);background-position:50% 100%, 50% 100%;background-size:0 2px, 100% 1px;border:0;border-top-left-radius:.3rem;border-top-right-radius:.3rem;-webkit-transition:background-size 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);transition:background-size 0.3s cubic-bezier(0.64, 0.09, 0.08, 1)}.md-form.md-bg input[type="text"]:focus:not([readonly]),.md-form.md-bg input[type="password"]:focus:not([readonly]),.md-form.md-bg input[type="email"]:focus:not([readonly]),.md-form.md-bg input[type="url"]:focus:not([readonly]),.md-form.md-bg input[type="time"]:focus:not([readonly]),.md-form.md-bg input[type="date"]:focus:not([readonly]),.md-form.md-bg input[type="datetime-local"]:focus:not([readonly]),.md-form.md-bg input[type="tel"]:focus:not([readonly]),.md-form.md-bg input[type="number"]:focus:not([readonly]),.md-form.md-bg input[type="search-md"]:focus:not([readonly]),.md-form.md-bg input[type="search"]:focus:not([readonly]),.md-form.md-bg textarea.md-textarea:focus:not([readonly]){border-bottom:none;-webkit-box-shadow:none;box-shadow:none}.md-form.md-bg input[type="text"]:focus,.md-form.md-bg input[type="password"]:focus,.md-form.md-bg input[type="email"]:focus,.md-form.md-bg input[type="url"]:focus,.md-form.md-bg input[type="time"]:focus,.md-form.md-bg input[type="date"]:focus,.md-form.md-bg input[type="datetime-local"]:focus,.md-form.md-bg input[type="tel"]:focus,.md-form.md-bg input[type="number"]:focus,.md-form.md-bg input[type="search-md"]:focus,.md-form.md-bg input[type="search"]:focus,.md-form.md-bg textarea.md-textarea:focus{background-color:#dcdcdc;background-size:100% 2px, 100% 1px;outline:none}.md-form.md-bg>input[type="date"]:not(.browser-default)+label{-webkit-transform:translateY(-12px) scale(0.8);transform:translateY(-12px) scale(0.8);-webkit-transform-origin:0 0;transform-origin:0 0}.md-form.md-bg>input[type]:-webkit-autofill:not(.browser-default):not([type="search"])+label,.md-form.md-bg>input[type="time"]:not(.browser-default)+label{font-size:.8rem;-webkit-transform:translateY(-12px);transform:translateY(-12px);-webkit-transform-origin:0 0;transform-origin:0 0}.md-form.md-bg .form-control{padding:1.1rem .7rem .4rem !important}.md-form.md-bg label{top:0;padding-left:.7rem;font-size:1rem;-webkit-transition:color .2s ease-out, -webkit-transform .2s ease-out;transition:color .2s ease-out, -webkit-transform .2s ease-out;transition:transform .2s ease-out, color .2s ease-out;transition:transform .2s ease-out, color .2s ease-out, -webkit-transform .2s ease-out;-webkit-transform:translateY(13px);transform:translateY(13px);-webkit-transform-origin:0% 100%;transform-origin:0% 100%}.md-form.md-bg label.active{padding-left:.75rem;font-weight:500;-webkit-transform:translateY(-3px) scale(0.8);transform:translateY(-3px) scale(0.8)}.md-form.md-bg.form-lg label{-webkit-transform:translateY(16px);transform:translateY(16px)}.md-form.md-bg.form-lg label.active{-webkit-transform:translateY(-4px) scale(0.8);transform:translateY(-4px) scale(0.8)}.md-form.md-bg.form-sm label{-webkit-transform:translateY(11px);transform:translateY(11px)}.md-form.md-bg.form-sm label.active{-webkit-transform:translateY(-2px) scale(0.8);transform:translateY(-2px) scale(0.8)}.md-form .form-control.is-invalid,.was-validated .md-form .form-control:invalid{padding-right:0}.md-form .form-control.is-valid,.was-validated .md-form .form-control:valid{padding-right:0}.needs-validation .md-form label{left:.3rem}.custom-file-input:lang(es) ~ .custom-file-label::after{content:"Elegir"}.custom-file-input:lang(pl-pl) ~ .custom-file-label::after{content:"Wybierz"}.custom-file-input:lang(fr) ~ .custom-file-label::after{content:"Choisir"}.custom-file-input:lang(in) ~ .custom-file-label::after{content:"Pilih"}.custom-file-input:lang(zh) ~ .custom-file-label::after{content:"é¸æ“‡"}.custom-file-input:lang(de) ~ .custom-file-label::after{content:"WÃ¤hlen"}.custom-file-input:lang(ru) ~ .custom-file-label::after{content:"Ð²Ñ‹Ð±Ð¸Ñ€Ð°Ñ‚ÑŒ"}.edge-header{display:block;height:278px;background-color:#ccc}.free-bird{margin-top:-100px}.juicy-peach-gradient{background-image:-webkit-gradient(linear, left top, right top, from(#ffecd2), to(#fcb69f));background-image:linear-gradient(to right, #ffecd2 0%, #fcb69f 100%)}.young-passion-gradient{background-image:-webkit-gradient(linear, left top, right top, from(#ff8177), color-stop(0%, #ff867a), color-stop(21%, #ff8c7f), color-stop(52%, #f99185), color-stop(78%, #cf556c), to(#b12a5b));background-image:linear-gradient(to right, #ff8177 0%, #ff867a 0%, #ff8c7f 21%, #f99185 52%, #cf556c 78%, #b12a5b 100%)}.lady-lips-gradient{background-image:-webkit-gradient(linear, left bottom, left top, from(#ff9a9e), color-stop(99%, #fecfef), to(#fecfef));background-image:linear-gradient(to top, #ff9a9e 0%, #fecfef 99%, #fecfef 100%)}.sunny-morning-gradient{background-image:linear-gradient(120deg, #f6d365 0%, #fda085 100%)}.rainy-ashville-gradient{background-image:-webkit-gradient(linear, left bottom, left top, from(#fbc2eb), to(#a6c1ee));background-image:linear-gradient(to top, #fbc2eb 0%, #a6c1ee 100%)}.frozen-dreams-gradient{background-image:-webkit-gradient(linear, left bottom, left top, from(#fdcbf1), color-stop(1%, #fdcbf1), to(#e6dee9));background-image:linear-gradient(to top, #fdcbf1 0%, #fdcbf1 1%, #e6dee9 100%)}.warm-flame-gradient{background-image:linear-gradient(45deg, #ff9a9e 0%, #fad0c4 99%, #fad0c4 100%)}.night-fade-gradient{background-image:-webkit-gradient(linear, left bottom, left top, from(#a18cd1), to(#fbc2eb));background-image:linear-gradient(to top, #a18cd1 0%, #fbc2eb 100%)}.spring-warmth-gradient{background-image:-webkit-gradient(linear, left bottom, left top, from(#fad0c4), to(#ffd1ff));background-image:linear-gradient(to top, #fad0c4 0%, #ffd1ff 100%)}.winter-neva-gradient{background-image:linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%)}.dusty-grass-gradient{background-image:linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%)}.tempting-azure-gradient{background-image:linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%)}.heavy-rain-gradient{background-image:-webkit-gradient(linear, left bottom, left top, from(#cfd9df), to(#e2ebf0));background-image:linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%)}.amy-crisp-gradient{background-image:linear-gradient(120deg, #a6c0fe 0%, #f68084 100%)}.mean-fruit-gradient{background-image:linear-gradient(120deg, #fccb90 0%, #d57eeb 100%)}.deep-blue-gradient{background-image:linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%)}.ripe-malinka-gradient{background-image:linear-gradient(120deg, #f093fb 0%, #f5576c 100%)}.cloudy-knoxville-gradient{background-image:linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%)}.morpheus-den-gradient{background-image:-webkit-gradient(linear, left bottom, left top, from(#30cfd0), to(#330867));background-image:linear-gradient(to top, #30cfd0 0%, #330867 100%)}.rare-wind-gradient{background-image:-webkit-gradient(linear, left bottom, left top, from(#a8edea), to(#fed6e3));background-image:linear-gradient(to top, #a8edea 0%, #fed6e3 100%)}.near-moon-gradient{background-image:-webkit-gradient(linear, left bottom, left top, from(#5ee7df), to(#b490ca));background-image:linear-gradient(to top, #5ee7df 0%, #b490ca 100%)}.schedule-list .hr-bold{border-top:2px solid #212529}.schedule-list .font-smaller{font-size:.8rem}.note{padding:10px;border-left:6px solid;border-radius:5px}.note strong{font-weight:600}.note p{font-weight:500}.note-primary{background-color:#dfeefd;border-color:#176ac4}.note-secondary{background-color:#e2e3e5;border-color:#58595a}.note-success{background-color:#e2f0e5;border-color:#49a75f}.note-danger{background-color:#fae7e8;border-color:#e45460}.note-warning{background-color:#faf4e0;border-color:#c2a442}.note-info{background-color:#e4f2f5;border-color:#2492a5}.note-light{background-color:#fefefe;border-color:#0f0f0f}footer.page-footer{bottom:0;color:#fff}footer.page-footer .container-fluid{width:auto}footer.page-footer .footer-copyright{overflow:hidden;color:rgba(255,255,255,0.6);background-color:rgba(0,0,0,0.2)}footer.page-footer a{color:#fff}.media .media-left{padding:0 10px 10px 0}.media .media-left img{-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)}.list-group .list-group-item:first-child{border-top-left-radius:.125rem;border-top-right-radius:.125rem}.list-group .list-group-item:last-child{border-bottom-right-radius:.125rem;border-bottom-left-radius:.125rem}.list-group a,.list-group button{-webkit-transition:.5s;transition:.5s}.list-group a:hover,.list-group button:hover{-webkit-transition:.5s;transition:.5s}table th{font-size:.9rem;font-weight:400}table td{font-size:.9rem;font-weight:300}table.table thead th{border-top:none}table.table th,table.table td{padding-top:1.1rem;padding-bottom:1rem}table.table a{margin:0;color:#212529}table.table .label-table{height:.94rem;padding:0;margin:0;line-height:.94rem}table.table.btn-table td{vertical-align:middle}table.table-hover tbody tr:hover{background-color:rgba(0,0,0,0.075);-webkit-transition:.5s;transition:.5s}table .th-lg{min-width:9rem}table .th-sm{min-width:6rem}table.table-sm th,table.table-sm td{padding-top:.6rem;padding-bottom:.6rem}.table-scroll-vertical{max-height:300px;overflow-y:auto}.table-fixed{table-layout:fixed}.table-responsive>.table-bordered,.table-responsive-sm>.table-bordered,.table-responsive-md>.table-bordered,.table-responsive-lg>.table-bordered,.table-responsive-xl>.table-bordered{border-top:1px solid #dee2e6}ul.stepper{padding:0 1.5rem;padding:1.5rem;margin:1em -1.5rem;overflow-x:hidden;overflow-y:auto;counter-reset:section}ul.stepper li a{padding:1.5rem;text-align:center}ul.stepper li a .circle{display:inline-block;width:1.75rem;height:1.75rem;margin-right:.5rem;line-height:1.7rem;color:#fff;text-align:center;background:rgba(0,0,0,0.38);border-radius:50%}ul.stepper li a .label{display:inline-block;color:rgba(0,0,0,0.38)}ul.stepper li.active a .label,ul.stepper li.completed a .label{font-weight:600;color:rgba(0,0,0,0.87)}.stepper-horizontal{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.stepper-horizontal li{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-flex:1;-ms-flex:1;flex:1;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-transition:.5s;transition:.5s}.stepper-horizontal li a .label{margin-top:.63rem}.stepper-horizontal li:not(:last-child):after{position:relative;-webkit-box-flex:1;-ms-flex:1;flex:1;height:1px;margin:.5rem 0 0 0;content:"";background-color:rgba(0,0,0,0.1)}.stepper-horizontal li:not(:first-child):before{position:relative;-webkit-box-flex:1;-ms-flex:1;flex:1;height:1px;margin:.5rem 0 0 0;content:"";background-color:rgba(0,0,0,0.1)}.stepper-horizontal li:hover{background-color:rgba(0,0,0,0.06)}@media (max-width: 47.9375rem){.stepper-horizontal{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}.stepper-horizontal li{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start}.stepper-horizontal li a .label{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-flow:column nowrap;flex-flow:column nowrap;-webkit-box-ordinal-group:3;-ms-flex-order:2;order:2;margin-top:.2rem}.stepper-horizontal li:not(:last-child):after{position:absolute;top:3.75rem;left:2.19rem;width:1px;height:calc(100% - 40px);content:""}}.stepper-horizontal>li:not(:last-of-type){margin-bottom:0 !important}.stepper-vertical{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.stepper-vertical li{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-flex:1;-ms-flex:1;flex:1;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start}.stepper-vertical li a{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-item-align:start;align-self:flex-start}.stepper-vertical li a .circle{-webkit-box-ordinal-group:2;-ms-flex-order:1;order:1}.stepper-vertical li a .label{-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-flow:column nowrap;flex-flow:column nowrap;-webkit-box-ordinal-group:3;-ms-flex-order:2;order:2;margin-top:.2rem}.stepper-vertical li.completed a .label{font-weight:500}.stepper-vertical li .step-content{display:block;padding:.94rem;margin-top:0;margin-left:3.13rem}.stepper-vertical li .step-content p{font-size:.88rem}.stepper-vertical li:not(:last-child):after{position:absolute;top:3.44rem;left:2.19rem;width:1px;height:calc(100% - 40px);content:"";background-color:rgba(0,0,0,0.1)}.fast.spinner-border{-webkit-animation:spinner-border 0.4s linear infinite;animation:spinner-border 0.4s linear infinite}.fast.spinner-grow{-webkit-animation:spinner-grow 0.4s linear infinite;animation:spinner-grow 0.4s linear infinite}.treeview.w-20{width:20rem}.treeview .rotate{margin-top:.2rem;font-size:.8rem;vertical-align:text-top;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-transition:all .1s linear;transition:all .1s linear}.treeview .rotate.down{-webkit-transform:rotate(90deg);transform:rotate(90deg)}.treeview .nested{display:none}.treeview .active{display:block}.treeview ul{list-style-type:none}.treeview .ic-w{width:1.3rem}.treeview-animated.w-20{width:20rem}.treeview-animated ul{position:relative;padding-left:1em;list-style:none}.treeview-animated .treeview-animated-list li{padding:.2em 0 0 .2em}.treeview-animated .treeview-animated-list .treeview-animated-items .nested::before{position:absolute;left:5px;display:block;width:5px;height:100%;content:"";background-color:#808080}.treeview-animated .treeview-animated-list .treeview-animated-items .closed{display:block;padding:.2em .2em .2em .4em;margin-right:0;border-top-left-radius:.3em;border-bottom-left-radius:.3em}.treeview-animated .treeview-animated-list .treeview-animated-items .closed:hover{background-color:#8cb9ff}.treeview-animated .treeview-animated-list .treeview-animated-items .closed .fa-angle-right{font-size:.8rem;-webkit-transition:all .1s linear;transition:all .1s linear}.treeview-animated .treeview-animated-list .treeview-animated-items .closed .fa-angle-right.down{position:relative;color:#f8f9fa;-webkit-transform:rotate(90deg);transform:rotate(90deg)}.treeview-animated .treeview-animated-list .treeview-animated-items .open{background-color:#32a0ff;-webkit-transition:all .1s linear;transition:all .1s linear}.treeview-animated .treeview-animated-list .treeview-animated-items .open:hover{color:#f8f9fa;background-color:#32a0ff}.treeview-animated .treeview-animated-list .treeview-animated-items .open span{color:#f8f9fa}.treeview-animated .treeview-animated-list .treeview-animated-element{padding:.2em .2em .2em .6em;cursor:pointer;border-top-left-radius:4px;border-bottom-left-radius:4px;-webkit-transition:all .1s linear;transition:all .1s linear}.treeview-animated .treeview-animated-list .treeview-animated-element:hover{background-color:#8cb9ff}.treeview-animated .treeview-animated-list .treeview-animated-element.opened{color:#f8f9fa;background-color:#32a0ff}.treeview-animated .treeview-animated-list .treeview-animated-element.opened:hover{color:#f8f9fa;background-color:#32a0ff}.treeview-colorful{font-size:16px;font-weight:400;background:rgba(224,127,178,0.2)}.treeview-colorful.w-20{width:20rem}.treeview-colorful hr{border-color:#a2127a}.treeview-colorful h6{font-size:1.4em;font-weight:500;color:#a2127a}.treeview-colorful ul{position:relative;padding-left:0;list-style:none}.treeview-colorful .treeview-colorful-list ul{padding-left:1em;margin-top:.1em;background:rgba(224,127,178,0.2)}.treeview-colorful .treeview-colorful-element{padding:.2em .2em .2em 1em;cursor:pointer;border:2px solid transparent;border-right:0 solid transparent;-webkit-transition:all .1s linear;transition:all .1s linear}.treeview-colorful .treeview-colorful-element:hover{background-color:#e07fb2}.treeview-colorful .treeview-colorful-element.opened{color:#ffac47;background-color:#a2127a;border:2px solid #ffac47;border-right:0 solid transparent}.treeview-colorful .treeview-colorful-element.opened:hover{color:#ffac47;background-color:#a2127a}.treeview-colorful .treeview-colorful-items-header{display:block;padding:.4em;margin-right:0;border-bottom:2px solid transparent;-webkit-transition:all .1s linear;transition:all .1s linear}.treeview-colorful .treeview-colorful-items-header:hover{background-color:#e07fb2}.treeview-colorful .treeview-colorful-items-header.open{background-color:#a2127a;border-bottom:2px solid #ffac47;-webkit-transition:all .1s linear;transition:all .1s linear}.treeview-colorful .treeview-colorful-items-header.open span{color:#ffac47}.treeview-colorful .treeview-colorful-items-header.open:hover{color:#ffac47;background-color:#a2127a}.treeview-colorful .treeview-colorful-items-header.open div:hover{background-color:#a2127a}.treeview-colorful .treeview-colorful-items-header .fa-angle-right{font-size:.8rem;-webkit-transition:all .2s linear;transition:all .2s linear}.treeview-colorful .treeview-colorful-items-header .fas{position:relative;color:#ffac47;-webkit-transition:all .2s linear;transition:all .2s linear;-webkit-transform:rotate(90deg);transform:rotate(90deg)}.treeview-colorful .treeview-colorful-items-header .fa-minus-circle{position:relative;color:#ffac47;-webkit-transition:all .2s linear;transition:all .2s linear;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.btn.btn-flat{font-weight:500;color:inherit;background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.btn.btn-flat:not([disabled]):not(.disabled):active{-webkit-box-shadow:none;box-shadow:none}.btn-floating{position:relative;z-index:1;display:inline-block;padding:0;margin:10px;overflow:hidden;vertical-align:middle;cursor:pointer;border-radius:50%;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);-webkit-transition:all 0.2s ease-in-out;transition:all 0.2s ease-in-out;width:47px;height:47px}.btn-floating i{font-size:1.25rem;line-height:47px}.btn-floating i{display:inline-block;width:inherit;color:#fff;text-align:center}.btn-floating:hover{-webkit-box-shadow:0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);box-shadow:0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19)}.btn-floating:before{border-radius:0}.btn-floating.btn-sm{width:36.15385px;height:36.15385px}.btn-floating.btn-sm i{font-size:.96154rem;line-height:36.15385px}.btn-floating.btn-lg{width:61.1px;height:61.1px}.btn-floating.btn-lg i{font-size:1.625rem;line-height:61.1px}.fixed-action-btn{position:fixed;right:35px;bottom:35px;z-index:998;padding-top:15px;margin-bottom:0}.fixed-action-btn ul{position:absolute;right:0;bottom:64px;left:0;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;height:64px;padding:0;margin:0 0 15px;text-align:center;-webkit-transition:400ms height;transition:400ms height}.fixed-action-btn ul li{z-index:0;display:-webkit-box;display:-ms-flexbox;display:flex;margin-right:auto;margin-bottom:15px;margin-left:auto}.fixed-action-btn ul a.btn-floating{opacity:0;-webkit-transition-duration:.4s;transition-duration:.4s;-webkit-transform:scale(0.4) translate(0);transform:scale(0.4) translate(0)}.fixed-action-btn ul a.btn-floating.shown{opacity:1;-webkit-transform:scale(1) translate(0);transform:scale(1) translate(0)}.fixed-action-btn.active ul{height:300px}button,html [type="button"],[type="reset"],[type="submit"]{-webkit-appearance:none;-moz-appearance:none;appearance:none}.btn-rounded{border-radius:10em}.counter{position:relative;top:-23px;left:auto;z-index:2;padding:1px 7px;margin-left:-23px;font-size:11px;color:#fff;background-color:#fe1212;border-radius:10em;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)}.counter.counter-lg{top:-27px}.counter.counter-md{top:-19px}.counter.counter-sm{top:-15px}.btn-fb{color:#fff;background-color:#3b5998 !important}.btn-fb:hover{color:#fff;background-color:#4264aa}.btn-fb:focus,.btn-fb.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-fb:focus,.btn-fb:active,.btn-fb.active{background-color:#1e2e4f}.btn-fb.dropdown-toggle{background-color:#3b5998 !important}.btn-fb.dropdown-toggle:hover,.btn-fb.dropdown-toggle:focus{background-color:#4264aa !important}.btn-fb:not([disabled]):not(.disabled):active,.btn-fb:not([disabled]):not(.disabled).active,.show>.btn-fb.dropdown-toggle{background-color:#1e2e4f !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-fb:not([disabled]):not(.disabled):active:focus,.btn-fb:not([disabled]):not(.disabled).active:focus,.show>.btn-fb.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.fb-ic{color:#3b5998 !important}.fb-ic:hover,.fb-ic:focus{color:#3b5998}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-fb{color:#fff}.btn-tw{color:#fff;background-color:#55acee !important}.btn-tw:hover{color:#fff;background-color:#6cb7f0}.btn-tw:focus,.btn-tw.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-tw:focus,.btn-tw:active,.btn-tw.active{background-color:#147bc9}.btn-tw.dropdown-toggle{background-color:#55acee !important}.btn-tw.dropdown-toggle:hover,.btn-tw.dropdown-toggle:focus{background-color:#6cb7f0 !important}.btn-tw:not([disabled]):not(.disabled):active,.btn-tw:not([disabled]):not(.disabled).active,.show>.btn-tw.dropdown-toggle{background-color:#147bc9 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-tw:not([disabled]):not(.disabled):active:focus,.btn-tw:not([disabled]):not(.disabled).active:focus,.show>.btn-tw.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.tw-ic{color:#55acee !important}.tw-ic:hover,.tw-ic:focus{color:#55acee}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-tw{color:#fff}.btn-gplus{color:#fff;background-color:#dd4b39 !important}.btn-gplus:hover{color:#fff;background-color:#e15f4f}.btn-gplus:focus,.btn-gplus.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-gplus:focus,.btn-gplus:active,.btn-gplus.active{background-color:#96271a}.btn-gplus.dropdown-toggle{background-color:#dd4b39 !important}.btn-gplus.dropdown-toggle:hover,.btn-gplus.dropdown-toggle:focus{background-color:#e15f4f !important}.btn-gplus:not([disabled]):not(.disabled):active,.btn-gplus:not([disabled]):not(.disabled).active,.show>.btn-gplus.dropdown-toggle{background-color:#96271a !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-gplus:not([disabled]):not(.disabled):active:focus,.btn-gplus:not([disabled]):not(.disabled).active:focus,.show>.btn-gplus.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.gplus-ic{color:#dd4b39 !important}.gplus-ic:hover,.gplus-ic:focus{color:#dd4b39}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-gplus{color:#fff}.btn-yt{color:#fff;background-color:#ed302f !important}.btn-yt:hover{color:#fff;background-color:#ef4746}.btn-yt:focus,.btn-yt.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-yt:focus,.btn-yt:active,.btn-yt.active{background-color:#a80f0e}.btn-yt.dropdown-toggle{background-color:#ed302f !important}.btn-yt.dropdown-toggle:hover,.btn-yt.dropdown-toggle:focus{background-color:#ef4746 !important}.btn-yt:not([disabled]):not(.disabled):active,.btn-yt:not([disabled]):not(.disabled).active,.show>.btn-yt.dropdown-toggle{background-color:#a80f0e !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-yt:not([disabled]):not(.disabled):active:focus,.btn-yt:not([disabled]):not(.disabled).active:focus,.show>.btn-yt.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.yt-ic{color:#ed302f !important}.yt-ic:hover,.yt-ic:focus{color:#ed302f}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-yt{color:#fff}.btn-li{color:#fff;background-color:#0082ca !important}.btn-li:hover{color:#fff;background-color:#0092e4}.btn-li:focus,.btn-li.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-li:focus,.btn-li:active,.btn-li.active{background-color:#004064}.btn-li.dropdown-toggle{background-color:#0082ca !important}.btn-li.dropdown-toggle:hover,.btn-li.dropdown-toggle:focus{background-color:#0092e4 !important}.btn-li:not([disabled]):not(.disabled):active,.btn-li:not([disabled]):not(.disabled).active,.show>.btn-li.dropdown-toggle{background-color:#004064 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-li:not([disabled]):not(.disabled):active:focus,.btn-li:not([disabled]):not(.disabled).active:focus,.show>.btn-li.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.li-ic{color:#0082ca !important}.li-ic:hover,.li-ic:focus{color:#0082ca}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-li{color:#fff}.btn-pin{color:#fff;background-color:#c61118 !important}.btn-pin:hover{color:#fff;background-color:#dd131b}.btn-pin:focus,.btn-pin.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-pin:focus,.btn-pin:active,.btn-pin.active{background-color:#68090d}.btn-pin.dropdown-toggle{background-color:#c61118 !important}.btn-pin.dropdown-toggle:hover,.btn-pin.dropdown-toggle:focus{background-color:#dd131b !important}.btn-pin:not([disabled]):not(.disabled):active,.btn-pin:not([disabled]):not(.disabled).active,.show>.btn-pin.dropdown-toggle{background-color:#68090d !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-pin:not([disabled]):not(.disabled):active:focus,.btn-pin:not([disabled]):not(.disabled).active:focus,.show>.btn-pin.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.pin-ic{color:#c61118 !important}.pin-ic:hover,.pin-ic:focus{color:#c61118}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-pin{color:#fff}.btn-ins{color:#fff;background-color:#2e5e86 !important}.btn-ins:hover{color:#fff;background-color:#356b99}.btn-ins:focus,.btn-ins.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-ins:focus,.btn-ins:active,.btn-ins.active{background-color:#14293a}.btn-ins.dropdown-toggle{background-color:#2e5e86 !important}.btn-ins.dropdown-toggle:hover,.btn-ins.dropdown-toggle:focus{background-color:#356b99 !important}.btn-ins:not([disabled]):not(.disabled):active,.btn-ins:not([disabled]):not(.disabled).active,.show>.btn-ins.dropdown-toggle{background-color:#14293a !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-ins:not([disabled]):not(.disabled):active:focus,.btn-ins:not([disabled]):not(.disabled).active:focus,.show>.btn-ins.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.ins-ic{color:#2e5e86 !important}.ins-ic:hover,.ins-ic:focus{color:#2e5e86}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-ins{color:#fff}.btn-git{color:#fff;background-color:#333 !important}.btn-git:hover{color:#fff;background-color:#404040}.btn-git:focus,.btn-git.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-git:focus,.btn-git:active,.btn-git.active{background-color:#000}.btn-git.dropdown-toggle{background-color:#333 !important}.btn-git.dropdown-toggle:hover,.btn-git.dropdown-toggle:focus{background-color:#404040 !important}.btn-git:not([disabled]):not(.disabled):active,.btn-git:not([disabled]):not(.disabled).active,.show>.btn-git.dropdown-toggle{background-color:#000 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-git:not([disabled]):not(.disabled):active:focus,.btn-git:not([disabled]):not(.disabled).active:focus,.show>.btn-git.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.git-ic{color:#333 !important}.git-ic:hover,.git-ic:focus{color:#333}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-git{color:#fff}.btn-comm{color:#fff;background-color:#30cfc0 !important}.btn-comm:hover{color:#fff;background-color:#45d4c6}.btn-comm:focus,.btn-comm.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-comm:focus,.btn-comm:active,.btn-comm.active{background-color:#1d7c73}.btn-comm.dropdown-toggle{background-color:#30cfc0 !important}.btn-comm.dropdown-toggle:hover,.btn-comm.dropdown-toggle:focus{background-color:#45d4c6 !important}.btn-comm:not([disabled]):not(.disabled):active,.btn-comm:not([disabled]):not(.disabled).active,.show>.btn-comm.dropdown-toggle{background-color:#1d7c73 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-comm:not([disabled]):not(.disabled):active:focus,.btn-comm:not([disabled]):not(.disabled).active:focus,.show>.btn-comm.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.comm-ic{color:#30cfc0 !important}.comm-ic:hover,.comm-ic:focus{color:#30cfc0}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-comm{color:#fff}.btn-vk{color:#fff;background-color:#4c75a3 !important}.btn-vk:hover{color:#fff;background-color:#5882b1}.btn-vk:focus,.btn-vk.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-vk:focus,.btn-vk:active,.btn-vk.active{background-color:#2c435d}.btn-vk.dropdown-toggle{background-color:#4c75a3 !important}.btn-vk.dropdown-toggle:hover,.btn-vk.dropdown-toggle:focus{background-color:#5882b1 !important}.btn-vk:not([disabled]):not(.disabled):active,.btn-vk:not([disabled]):not(.disabled).active,.show>.btn-vk.dropdown-toggle{background-color:#2c435d !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-vk:not([disabled]):not(.disabled):active:focus,.btn-vk:not([disabled]):not(.disabled).active:focus,.show>.btn-vk.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.vk-ic{color:#4c75a3 !important}.vk-ic:hover,.vk-ic:focus{color:#4c75a3}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-vk{color:#fff}.btn-dribbble{color:#fff;background-color:#ec4a89 !important}.btn-dribbble:hover{color:#fff;background-color:#ee6198}.btn-dribbble:focus,.btn-dribbble.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-dribbble:focus,.btn-dribbble:active,.btn-dribbble.active{background-color:#bc1455}.btn-dribbble.dropdown-toggle{background-color:#ec4a89 !important}.btn-dribbble.dropdown-toggle:hover,.btn-dribbble.dropdown-toggle:focus{background-color:#ee6198 !important}.btn-dribbble:not([disabled]):not(.disabled):active,.btn-dribbble:not([disabled]):not(.disabled).active,.show>.btn-dribbble.dropdown-toggle{background-color:#bc1455 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-dribbble:not([disabled]):not(.disabled):active:focus,.btn-dribbble:not([disabled]):not(.disabled).active:focus,.show>.btn-dribbble.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.dribbble-ic{color:#ec4a89 !important}.dribbble-ic:hover,.dribbble-ic:focus{color:#ec4a89}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-dribbble{color:#fff}.btn-so{color:#fff;background-color:#ffac44 !important}.btn-so:hover{color:#fff;background-color:#ffb75e}.btn-so:focus,.btn-so.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-so:focus,.btn-so:active,.btn-so.active{background-color:#dd7b00}.btn-so.dropdown-toggle{background-color:#ffac44 !important}.btn-so.dropdown-toggle:hover,.btn-so.dropdown-toggle:focus{background-color:#ffb75e !important}.btn-so:not([disabled]):not(.disabled):active,.btn-so:not([disabled]):not(.disabled).active,.show>.btn-so.dropdown-toggle{background-color:#dd7b00 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-so:not([disabled]):not(.disabled):active:focus,.btn-so:not([disabled]):not(.disabled).active:focus,.show>.btn-so.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.so-ic{color:#ffac44 !important}.so-ic:hover,.so-ic:focus{color:#ffac44}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-so{color:#fff}.btn-slack{color:#fff;background-color:#56b68b !important}.btn-slack:hover{color:#fff;background-color:#68be97}.btn-slack:focus,.btn-slack.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-slack:focus,.btn-slack:active,.btn-slack.active{background-color:#327456}.btn-slack.dropdown-toggle{background-color:#56b68b !important}.btn-slack.dropdown-toggle:hover,.btn-slack.dropdown-toggle:focus{background-color:#68be97 !important}.btn-slack:not([disabled]):not(.disabled):active,.btn-slack:not([disabled]):not(.disabled).active,.show>.btn-slack.dropdown-toggle{background-color:#327456 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-slack:not([disabled]):not(.disabled):active:focus,.btn-slack:not([disabled]):not(.disabled).active:focus,.show>.btn-slack.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.slack-ic{color:#56b68b !important}.slack-ic:hover,.slack-ic:focus{color:#56b68b}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-slack{color:#fff}.btn-email{color:#fff;background-color:#4b515d !important}.btn-email:hover{color:#fff;background-color:#565d6b}.btn-email:focus,.btn-email.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-email:focus,.btn-email:active,.btn-email.active{background-color:#1d2025}.btn-email.dropdown-toggle{background-color:#4b515d !important}.btn-email.dropdown-toggle:hover,.btn-email.dropdown-toggle:focus{background-color:#565d6b !important}.btn-email:not([disabled]):not(.disabled):active,.btn-email:not([disabled]):not(.disabled).active,.show>.btn-email.dropdown-toggle{background-color:#1d2025 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-email:not([disabled]):not(.disabled):active:focus,.btn-email:not([disabled]):not(.disabled).active:focus,.show>.btn-email.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.email-ic{color:#4b515d !important}.email-ic:hover,.email-ic:focus{color:#4b515d}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-email{color:#fff}.btn-reddit{color:#fff;background-color:#ff4500 !important}.btn-reddit:hover{color:#fff;background-color:#ff581a}.btn-reddit:focus,.btn-reddit.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-reddit:focus,.btn-reddit:active,.btn-reddit.active{background-color:#992900}.btn-reddit.dropdown-toggle{background-color:#ff4500 !important}.btn-reddit.dropdown-toggle:hover,.btn-reddit.dropdown-toggle:focus{background-color:#ff581a !important}.btn-reddit:not([disabled]):not(.disabled):active,.btn-reddit:not([disabled]):not(.disabled).active,.show>.btn-reddit.dropdown-toggle{background-color:#992900 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-reddit:not([disabled]):not(.disabled):active:focus,.btn-reddit:not([disabled]):not(.disabled).active:focus,.show>.btn-reddit.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.reddit-ic{color:#ff4500 !important}.reddit-ic:hover,.reddit-ic:focus{color:#ff4500}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-reddit{color:#fff}.btn-twitch{color:#fff;background-color:#6441a4 !important}.btn-twitch:hover{color:#fff;background-color:#6f48b6}.btn-twitch:focus,.btn-twitch.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-twitch:focus,.btn-twitch:active,.btn-twitch.active{background-color:#37245b}.btn-twitch.dropdown-toggle{background-color:#6441a4 !important}.btn-twitch.dropdown-toggle:hover,.btn-twitch.dropdown-toggle:focus{background-color:#6f48b6 !important}.btn-twitch:not([disabled]):not(.disabled):active,.btn-twitch:not([disabled]):not(.disabled).active,.show>.btn-twitch.dropdown-toggle{background-color:#37245b !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-twitch:not([disabled]):not(.disabled):active:focus,.btn-twitch:not([disabled]):not(.disabled).active:focus,.show>.btn-twitch.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.twitch-ic{color:#6441a4 !important}.twitch-ic:hover,.twitch-ic:focus{color:#6441a4}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-twitch{color:#fff}.btn-discord{color:#fff;background-color:#7289da !important}.btn-discord:hover{color:#fff;background-color:#869adf}.btn-discord:focus,.btn-discord.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-discord:focus,.btn-discord:active,.btn-discord.active{background-color:#304eb6}.btn-discord.dropdown-toggle{background-color:#7289da !important}.btn-discord.dropdown-toggle:hover,.btn-discord.dropdown-toggle:focus{background-color:#869adf !important}.btn-discord:not([disabled]):not(.disabled):active,.btn-discord:not([disabled]):not(.disabled).active,.show>.btn-discord.dropdown-toggle{background-color:#304eb6 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-discord:not([disabled]):not(.disabled):active:focus,.btn-discord:not([disabled]):not(.disabled).active:focus,.show>.btn-discord.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.discord-ic{color:#7289da !important}.discord-ic:hover,.discord-ic:focus{color:#7289da}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-discord{color:#fff}.btn-whatsapp{color:#fff;background-color:#25d366 !important}.btn-whatsapp:hover{color:#fff;background-color:#36dc74}.btn-whatsapp:focus,.btn-whatsapp.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-whatsapp:focus,.btn-whatsapp:active,.btn-whatsapp.active{background-color:#167c3c}.btn-whatsapp.dropdown-toggle{background-color:#25d366 !important}.btn-whatsapp.dropdown-toggle:hover,.btn-whatsapp.dropdown-toggle:focus{background-color:#36dc74 !important}.btn-whatsapp:not([disabled]):not(.disabled):active,.btn-whatsapp:not([disabled]):not(.disabled).active,.show>.btn-whatsapp.dropdown-toggle{background-color:#167c3c !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.btn-whatsapp:not([disabled]):not(.disabled):active:focus,.btn-whatsapp:not([disabled]):not(.disabled).active:focus,.show>.btn-whatsapp.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.whatsapp-ic{color:#25d366 !important}.whatsapp-ic:hover,.whatsapp-ic:focus{color:#25d366}a.btn:not([href]):not([tabindex]),a.btn:not([href]):not([tabindex]):focus,a.btn:not([href]):not([tabindex]):hover{color:#fff}table.table a.btn.btn-whatsapp{color:#fff}.md-tabs{position:relative;z-index:1;padding:.7rem;margin-right:1rem;margin-bottom:-20px;margin-left:1rem;background-color:#2bbbad;border:0;border-radius:.25rem;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.md-tabs .nav-item+.nav-item{margin-left:0}.md-tabs .nav-item.disabled{pointer-events:none !important}.md-tabs .nav-item.disabled .nav-link{color:#6c757d}.md-tabs .nav-link{color:#fff;border:0;-webkit-transition:all 0.4s;transition:all 0.4s}.md-tabs .nav-link.active,.md-tabs .nav-item.open .nav-link{color:#fff;background-color:rgba(0,0,0,0.2);border-radius:.25rem;-webkit-transition:all 1s;transition:all 1s}.md-tabs .nav-item.show .nav-link{color:#fff;background-color:#2bbbad;border-radius:.25rem;-webkit-transition:all 1s;transition:all 1s}.md-tabs .nav-item.show .nav-link.dropdown-toggle{background-color:rgba(0,0,0,0.2)}.tab-content{padding:1rem;padding-top:2rem}.tab-content.vertical{padding-top:0}.md-pills{border:0}.md-pills li{padding:.6rem}.md-pills .show>.nav-link{color:#fff;background-color:#2bbbad;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)}.md-pills .nav-link{color:#666;text-align:center;border-radius:2px;-webkit-transition:all 0.4s;transition:all 0.4s}.md-pills .nav-link.active{color:#fff;background-color:#2bbbad;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)}.md-pills .nav-link.active:hover{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.pills-primary .show>.nav-link{background-color:#4285f4 !important}.pills-primary .nav-link.active{background-color:#4285f4 !important}.tabs-primary{background-color:#4285f4 !important}.pills-danger .show>.nav-link{background-color:#ff3547 !important}.pills-danger .nav-link.active{background-color:#ff3547 !important}.tabs-danger{background-color:#ff3547 !important}.pills-warning .show>.nav-link{background-color:#fb3 !important}.pills-warning .nav-link.active{background-color:#fb3 !important}.tabs-warning{background-color:#fb3 !important}.pills-success .show>.nav-link{background-color:#00c851 !important}.pills-success .nav-link.active{background-color:#00c851 !important}.tabs-success{background-color:#00c851 !important}.pills-info .show>.nav-link{background-color:#33b5e5 !important}.pills-info .nav-link.active{background-color:#33b5e5 !important}.tabs-info{background-color:#33b5e5 !important}.pills-default .show>.nav-link{background-color:#2bbbad !important}.pills-default .nav-link.active{background-color:#2bbbad !important}.tabs-default{background-color:#2bbbad !important}.pills-secondary .show>.nav-link{background-color:#a6c !important}.pills-secondary .nav-link.active{background-color:#a6c !important}.tabs-secondary{background-color:#a6c !important}.pills-elegant .show>.nav-link{background-color:#2e2e2e !important}.pills-elegant .nav-link.active{background-color:#2e2e2e !important}.tabs-elegant{background-color:#2e2e2e !important}.pills-unique .show>.nav-link{background-color:#880e4f !important}.pills-unique .nav-link.active{background-color:#880e4f !important}.tabs-unique{background-color:#880e4f !important}.pills-dark-green .show>.nav-link{background-color:#388e3c !important}.pills-dark-green .nav-link.active{background-color:#388e3c !important}.tabs-dark-green{background-color:#388e3c !important}.pills-mdb-color .show>.nav-link{background-color:#59698d !important}.pills-mdb-color .nav-link.active{background-color:#59698d !important}.tabs-mdb-color{background-color:#59698d !important}.pills-red .show>.nav-link{background-color:#d32f2f !important}.pills-red .nav-link.active{background-color:#d32f2f !important}.tabs-red{background-color:#d32f2f !important}.pills-pink .show>.nav-link{background-color:#ec407a !important}.pills-pink .nav-link.active{background-color:#ec407a !important}.tabs-pink{background-color:#ec407a !important}.pills-purple .show>.nav-link{background-color:#8e24aa !important}.pills-purple .nav-link.active{background-color:#8e24aa !important}.tabs-purple{background-color:#8e24aa !important}.pills-deep-purple .show>.nav-link{background-color:#512da8 !important}.pills-deep-purple .nav-link.active{background-color:#512da8 !important}.tabs-deep-purple{background-color:#512da8 !important}.pills-indigo .show>.nav-link{background-color:#3f51b5 !important}.pills-indigo .nav-link.active{background-color:#3f51b5 !important}.tabs-indigo{background-color:#3f51b5 !important}.pills-blue .show>.nav-link{background-color:#1976d2 !important}.pills-blue .nav-link.active{background-color:#1976d2 !important}.tabs-blue{background-color:#1976d2 !important}.pills-light-blue .show>.nav-link{background-color:#82b1ff !important}.pills-light-blue .nav-link.active{background-color:#82b1ff !important}.tabs-light-blue{background-color:#82b1ff !important}.pills-cyan .show>.nav-link{background-color:#00bcd4 !important}.pills-cyan .nav-link.active{background-color:#00bcd4 !important}.tabs-cyan{background-color:#00bcd4 !important}.pills-teal .show>.nav-link{background-color:#00796b !important}.pills-teal .nav-link.active{background-color:#00796b !important}.tabs-teal{background-color:#00796b !important}.pills-green .show>.nav-link{background-color:#388e3c !important}.pills-green .nav-link.active{background-color:#388e3c !important}.tabs-green{background-color:#388e3c !important}.pills-light-green .show>.nav-link{background-color:#8bc34a !important}.pills-light-green .nav-link.active{background-color:#8bc34a !important}.tabs-light-green{background-color:#8bc34a !important}.pills-lime .show>.nav-link{background-color:#afb42b !important}.pills-lime .nav-link.active{background-color:#afb42b !important}.tabs-lime{background-color:#afb42b !important}.pills-yellow .show>.nav-link{background-color:#fbc02d !important}.pills-yellow .nav-link.active{background-color:#fbc02d !important}.tabs-yellow{background-color:#fbc02d !important}.pills-amber .show>.nav-link{background-color:#ffa000 !important}.pills-amber .nav-link.active{background-color:#ffa000 !important}.tabs-amber{background-color:#ffa000 !important}.pills-orange .show>.nav-link{background-color:#f57c00 !important}.pills-orange .nav-link.active{background-color:#f57c00 !important}.tabs-orange{background-color:#f57c00 !important}.pills-deep-orange .show>.nav-link{background-color:#ff7043 !important}.pills-deep-orange .nav-link.active{background-color:#ff7043 !important}.tabs-deep-orange{background-color:#ff7043 !important}.pills-brown .show>.nav-link{background-color:#795548 !important}.pills-brown .nav-link.active{background-color:#795548 !important}.tabs-brown{background-color:#795548 !important}.pills-grey .show>.nav-link{background-color:#616161 !important}.pills-grey .nav-link.active{background-color:#616161 !important}.tabs-grey{background-color:#616161 !important}.pills-blue-grey .show>.nav-link{background-color:#78909c !important}.pills-blue-grey .nav-link.active{background-color:#78909c !important}.tabs-blue-grey{background-color:#78909c !important}.pills-dark .show>.nav-link{background-color:#212121 !important}.pills-dark .nav-link.active{background-color:#212121 !important}.tabs-dark{background-color:#212121 !important}.pills-light .show>.nav-link{background-color:#e0e0e0 !important}.pills-light .nav-link.active{background-color:#e0e0e0 !important}.tabs-light{background-color:#e0e0e0 !important}.pills-white .show>.nav-link{background-color:#fff !important}.pills-white .nav-link.active{background-color:#fff !important}.tabs-white{background-color:#fff !important}.pills-black .show>.nav-link{background-color:#000 !important}.pills-black .nav-link.active{background-color:#000 !important}.tabs-black{background-color:#000 !important}.classic-tabs .nav{position:relative;overflow-x:auto;white-space:nowrap;border-radius:.3rem .3rem 0 0}@media (min-width: 62rem){.classic-tabs .nav{overflow-x:hidden}}.classic-tabs .nav li a{display:block;padding:20px 24px;font-size:13px;color:rgba(255,255,255,0.7);text-align:center;text-transform:uppercase;border-radius:0}.classic-tabs .nav li a:not(.active){margin-bottom:3px}.classic-tabs .nav li a.active{color:#fff;border-bottom:3px solid}@media (min-width: 62em){.classic-tabs .nav li:first-child{margin-left:56px}}.classic-tabs .nav.tabs-cyan li a.active{border-color:#ffeb3b}.classic-tabs .nav.tabs-orange li a.active{border-color:#e53935}.classic-tabs .nav.tabs-grey li a.active{border-color:#fff}.classic-tabs .nav.tabs-pink li a.active{border-color:#673ab7}.classic-tabs .nav.tabs-green li a.active{border-color:#1565c0}.classic-tabs .nav.tabs-primary li a.active{border-color:#fff}.classic-tabs .nav.tabs-animated li a.active{border:none}.classic-tabs .nav.tabs-animated.tabs-cyan .floor{background-color:#ffeb3b}.classic-tabs .nav.tabs-animated.tabs-orange .floor{background-color:#e53935}.classic-tabs .nav.tabs-animated.tabs-grey .floor{background-color:#fff}.classic-tabs .nav.tabs-animated.tabs-pink .floor{background-color:#673ab7}.classic-tabs .nav.tabs-animated.tabs-green .floor{background-color:#1565c0}.classic-tabs .nav.tabs-animated.tabs-primary .floor{background-color:#fff}.classic-tabs .nav.tabs-animated .floor{position:absolute;bottom:0;z-index:1200;display:inline-block;width:30px;height:3px;-webkit-transition:all .4s linear;transition:all .4s linear}.classic-tabs .tab-content.card{border-top-left-radius:0;border-top-right-radius:0}.card.card-image{width:100%;background-position:center;background-size:cover}.card.card-image [class*="rgba-"]{border-radius:.25rem}.card.card-cascade .view.view-cascade{border-radius:.25rem;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.card.card-cascade .view.view-cascade.gradient-card-header{padding:1.6rem 1rem;color:#fff;text-align:center}.card.card-cascade .view.view-cascade.gradient-card-header .card-header-title{font-weight:500}.card.card-cascade .view.view-cascade.gradient-card-header .btn-floating{background-color:rgba(255,255,255,0.2)}.card.card-cascade.wider{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.card.card-cascade.wider .view.view-cascade{z-index:2}.card.card-cascade.wider .card-body.card-body-cascade{z-index:1;margin-right:4%;margin-left:4%;background:#fff;border-radius:0 0 .25rem .25rem;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)}.card.card-cascade.wider .card-body.card-body-cascade .card-footer{margin-right:-1.25rem;margin-left:-1.25rem}.card.card-cascade.wider.reverse .card-body.card-body-cascade{z-index:3;margin-top:-1rem;border-radius:.25rem;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.card.card-cascade.narrower{margin-top:1.25rem}.card.card-cascade.narrower .view.view-cascade{margin-top:-1.25rem;margin-right:4%;margin-left:4%}.card .btn-action{margin-top:-1.44rem;margin-bottom:-1.44rem}.card .activator{position:absolute;right:0;font-size:1.2rem}.card .card-reveal{position:absolute;top:100%;z-index:1;display:none;width:100%;height:100%;overflow-y:auto}.card .card-reveal .content{position:relative}.card.ovf-hidden{overflow:hidden}.card .card-share{position:relative}.card .card-share .social-reveal{position:absolute;top:-1.44rem;right:1.88rem;width:auto;opacity:0;-webkit-transition:opacity 0.35s ease,-webkit-transform 0.35s ease;transition:opacity 0.35s ease,-webkit-transform 0.35s ease;transition:transform 0.35s ease,opacity 0.35s ease;transition:transform 0.35s ease,opacity 0.35s ease,-webkit-transform 0.35s ease;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transform:translateX(80px);transform:translateX(80px)}.card .card-share .social-reveal-active{z-index:11;opacity:1;-webkit-transition:opacity 0.35s ease,-webkit-transform 0.35s ease;transition:opacity 0.35s ease,-webkit-transform 0.35s ease;transition:transform 0.35s ease,opacity 0.35s ease;transition:transform 0.35s ease,opacity 0.35s ease,-webkit-transform 0.35s ease;-webkit-transform:translateZ(0);transform:translateZ(0);-webkit-transform:translateX(-48px);transform:translateX(-48px)}.card .card-reveal .card-title,.card-wrapper .card-rotating .card-title{cursor:pointer}.card .card-reveal .card-title i,.card-wrapper .card-rotating .card-title i{position:absolute;right:.63rem;color:#9e9e9e}.card-wrapper{position:relative;width:100%;margin:0;-webkit-perspective:800px;perspective:800px}.card-wrapper .card-up{height:200px;overflow:hidden}.card-wrapper .card-up img{vertical-align:middle}.card-wrapper .avatar{display:block;width:120px;margin-top:-60px;overflow:hidden}.card-wrapper .avatar img{width:100%;background:none repeat scroll 0 0 #fff;border:5px solid #fff}.card-wrapper .card-rotating{height:100%;-webkit-transition:.5s;transition:.5s;-webkit-transform-style:preserve-3d;transform-style:preserve-3d}.card-wrapper .card-rotating .face{position:absolute;z-index:2;width:100%;background:#fff;-webkit-backface-visibility:hidden;backface-visibility:hidden}.card-wrapper .card-rotating.flipped{-webkit-transform:rotateY(180deg);transform:rotateY(180deg)}.card-wrapper .card-rotating .front{z-index:1}.card-wrapper .card-rotating .back{-webkit-transform:rotateY(-180deg);transform:rotateY(-180deg)}.card-wrapper .card-rotating .front,.card-wrapper .card-rotating .back{-webkit-transition:1s;transition:1s}.testimonial-card .card-up{height:120px;overflow:hidden;border-top-left-radius:.25rem;border-top-right-radius:.25rem}.testimonial-card .avatar{width:120px;margin-top:-60px;overflow:hidden;border:5px solid #fff;border-radius:50%}.testimonial-card .avatar img{width:100%}.testimonial-card .card-body{text-align:center}.dropdown .dropdown-menu,.dropup .dropdown-menu,.dropleft .dropdown-menu,.dropright .dropdown-menu{padding:.5rem}.dropdown .dropdown-menu.dropdown-primary .dropdown-item:hover,.dropdown .dropdown-menu.dropdown-primary .dropdown-item:active,.dropdown .dropdown-menu.dropdown-primary .dropdown-item.active,.dropup .dropdown-menu.dropdown-primary .dropdown-item:hover,.dropup .dropdown-menu.dropdown-primary .dropdown-item:active,.dropup .dropdown-menu.dropdown-primary .dropdown-item.active,.dropleft .dropdown-menu.dropdown-primary .dropdown-item:hover,.dropleft .dropdown-menu.dropdown-primary .dropdown-item:active,.dropleft .dropdown-menu.dropdown-primary .dropdown-item.active,.dropright .dropdown-menu.dropdown-primary .dropdown-item:hover,.dropright .dropdown-menu.dropdown-primary .dropdown-item:active,.dropright .dropdown-menu.dropdown-primary .dropdown-item.active{background-color:#4285f4 !important;border-radius:.125rem;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.dropdown .dropdown-menu.dropdown-primary .dropdown-item:hover.disabled,.dropdown .dropdown-menu.dropdown-primary .dropdown-item:active.disabled,.dropdown .dropdown-menu.dropdown-primary .dropdown-item.active.disabled,.dropup .dropdown-menu.dropdown-primary .dropdown-item:hover.disabled,.dropup .dropdown-menu.dropdown-primary .dropdown-item:active.disabled,.dropup .dropdown-menu.dropdown-primary .dropdown-item.active.disabled,.dropleft .dropdown-menu.dropdown-primary .dropdown-item:hover.disabled,.dropleft .dropdown-menu.dropdown-primary .dropdown-item:active.disabled,.dropleft .dropdown-menu.dropdown-primary .dropdown-item.active.disabled,.dropright .dropdown-menu.dropdown-primary .dropdown-item:hover.disabled,.dropright .dropdown-menu.dropdown-primary .dropdown-item:active.disabled,.dropright .dropdown-menu.dropdown-primary .dropdown-item.active.disabled{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.dropdown .dropdown-menu.dropdown-danger .dropdown-item:hover,.dropdown .dropdown-menu.dropdown-danger .dropdown-item:active,.dropdown .dropdown-menu.dropdown-danger .dropdown-item.active,.dropup .dropdown-menu.dropdown-danger .dropdown-item:hover,.dropup .dropdown-menu.dropdown-danger .dropdown-item:active,.dropup .dropdown-menu.dropdown-danger .dropdown-item.active,.dropleft .dropdown-menu.dropdown-danger .dropdown-item:hover,.dropleft .dropdown-menu.dropdown-danger .dropdown-item:active,.dropleft .dropdown-menu.dropdown-danger .dropdown-item.active,.dropright .dropdown-menu.dropdown-danger .dropdown-item:hover,.dropright .dropdown-menu.dropdown-danger .dropdown-item:active,.dropright .dropdown-menu.dropdown-danger .dropdown-item.active{background-color:#c00 !important;border-radius:.125rem;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.dropdown .dropdown-menu.dropdown-danger .dropdown-item:hover.disabled,.dropdown .dropdown-menu.dropdown-danger .dropdown-item:active.disabled,.dropdown .dropdown-menu.dropdown-danger .dropdown-item.active.disabled,.dropup .dropdown-menu.dropdown-danger .dropdown-item:hover.disabled,.dropup .dropdown-menu.dropdown-danger .dropdown-item:active.disabled,.dropup .dropdown-menu.dropdown-danger .dropdown-item.active.disabled,.dropleft .dropdown-menu.dropdown-danger .dropdown-item:hover.disabled,.dropleft .dropdown-menu.dropdown-danger .dropdown-item:active.disabled,.dropleft .dropdown-menu.dropdown-danger .dropdown-item.active.disabled,.dropright .dropdown-menu.dropdown-danger .dropdown-item:hover.disabled,.dropright .dropdown-menu.dropdown-danger .dropdown-item:active.disabled,.dropright .dropdown-menu.dropdown-danger .dropdown-item.active.disabled{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.dropdown .dropdown-menu.dropdown-default .dropdown-item:hover,.dropdown .dropdown-menu.dropdown-default .dropdown-item:active,.dropdown .dropdown-menu.dropdown-default .dropdown-item.active,.dropup .dropdown-menu.dropdown-default .dropdown-item:hover,.dropup .dropdown-menu.dropdown-default .dropdown-item:active,.dropup .dropdown-menu.dropdown-default .dropdown-item.active,.dropleft .dropdown-menu.dropdown-default .dropdown-item:hover,.dropleft .dropdown-menu.dropdown-default .dropdown-item:active,.dropleft .dropdown-menu.dropdown-default .dropdown-item.active,.dropright .dropdown-menu.dropdown-default .dropdown-item:hover,.dropright .dropdown-menu.dropdown-default .dropdown-item:active,.dropright .dropdown-menu.dropdown-default .dropdown-item.active{background-color:#2bbbad !important;border-radius:.125rem;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.dropdown .dropdown-menu.dropdown-default .dropdown-item:hover.disabled,.dropdown .dropdown-menu.dropdown-default .dropdown-item:active.disabled,.dropdown .dropdown-menu.dropdown-default .dropdown-item.active.disabled,.dropup .dropdown-menu.dropdown-default .dropdown-item:hover.disabled,.dropup .dropdown-menu.dropdown-default .dropdown-item:active.disabled,.dropup .dropdown-menu.dropdown-default .dropdown-item.active.disabled,.dropleft .dropdown-menu.dropdown-default .dropdown-item:hover.disabled,.dropleft .dropdown-menu.dropdown-default .dropdown-item:active.disabled,.dropleft .dropdown-menu.dropdown-default .dropdown-item.active.disabled,.dropright .dropdown-menu.dropdown-default .dropdown-item:hover.disabled,.dropright .dropdown-menu.dropdown-default .dropdown-item:active.disabled,.dropright .dropdown-menu.dropdown-default .dropdown-item.active.disabled{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.dropdown .dropdown-menu.dropdown-secondary .dropdown-item:hover,.dropdown .dropdown-menu.dropdown-secondary .dropdown-item:active,.dropdown .dropdown-menu.dropdown-secondary .dropdown-item.active,.dropup .dropdown-menu.dropdown-secondary .dropdown-item:hover,.dropup .dropdown-menu.dropdown-secondary .dropdown-item:active,.dropup .dropdown-menu.dropdown-secondary .dropdown-item.active,.dropleft .dropdown-menu.dropdown-secondary .dropdown-item:hover,.dropleft .dropdown-menu.dropdown-secondary .dropdown-item:active,.dropleft .dropdown-menu.dropdown-secondary .dropdown-item.active,.dropright .dropdown-menu.dropdown-secondary .dropdown-item:hover,.dropright .dropdown-menu.dropdown-secondary .dropdown-item:active,.dropright .dropdown-menu.dropdown-secondary .dropdown-item.active{background-color:#a6c !important;border-radius:.125rem;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.dropdown .dropdown-menu.dropdown-secondary .dropdown-item:hover.disabled,.dropdown .dropdown-menu.dropdown-secondary .dropdown-item:active.disabled,.dropdown .dropdown-menu.dropdown-secondary .dropdown-item.active.disabled,.dropup .dropdown-menu.dropdown-secondary .dropdown-item:hover.disabled,.dropup .dropdown-menu.dropdown-secondary .dropdown-item:active.disabled,.dropup .dropdown-menu.dropdown-secondary .dropdown-item.active.disabled,.dropleft .dropdown-menu.dropdown-secondary .dropdown-item:hover.disabled,.dropleft .dropdown-menu.dropdown-secondary .dropdown-item:active.disabled,.dropleft .dropdown-menu.dropdown-secondary .dropdown-item.active.disabled,.dropright .dropdown-menu.dropdown-secondary .dropdown-item:hover.disabled,.dropright .dropdown-menu.dropdown-secondary .dropdown-item:active.disabled,.dropright .dropdown-menu.dropdown-secondary .dropdown-item.active.disabled{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.dropdown .dropdown-menu.dropdown-success .dropdown-item:hover,.dropdown .dropdown-menu.dropdown-success .dropdown-item:active,.dropdown .dropdown-menu.dropdown-success .dropdown-item.active,.dropup .dropdown-menu.dropdown-success .dropdown-item:hover,.dropup .dropdown-menu.dropdown-success .dropdown-item:active,.dropup .dropdown-menu.dropdown-success .dropdown-item.active,.dropleft .dropdown-menu.dropdown-success .dropdown-item:hover,.dropleft .dropdown-menu.dropdown-success .dropdown-item:active,.dropleft .dropdown-menu.dropdown-success .dropdown-item.active,.dropright .dropdown-menu.dropdown-success .dropdown-item:hover,.dropright .dropdown-menu.dropdown-success .dropdown-item:active,.dropright .dropdown-menu.dropdown-success .dropdown-item.active{background-color:#00c851 !important;border-radius:.125rem;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.dropdown .dropdown-menu.dropdown-success .dropdown-item:hover.disabled,.dropdown .dropdown-menu.dropdown-success .dropdown-item:active.disabled,.dropdown .dropdown-menu.dropdown-success .dropdown-item.active.disabled,.dropup .dropdown-menu.dropdown-success .dropdown-item:hover.disabled,.dropup .dropdown-menu.dropdown-success .dropdown-item:active.disabled,.dropup .dropdown-menu.dropdown-success .dropdown-item.active.disabled,.dropleft .dropdown-menu.dropdown-success .dropdown-item:hover.disabled,.dropleft .dropdown-menu.dropdown-success .dropdown-item:active.disabled,.dropleft .dropdown-menu.dropdown-success .dropdown-item.active.disabled,.dropright .dropdown-menu.dropdown-success .dropdown-item:hover.disabled,.dropright .dropdown-menu.dropdown-success .dropdown-item:active.disabled,.dropright .dropdown-menu.dropdown-success .dropdown-item.active.disabled{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.dropdown .dropdown-menu.dropdown-info .dropdown-item:hover,.dropdown .dropdown-menu.dropdown-info .dropdown-item:active,.dropdown .dropdown-menu.dropdown-info .dropdown-item.active,.dropup .dropdown-menu.dropdown-info .dropdown-item:hover,.dropup .dropdown-menu.dropdown-info .dropdown-item:active,.dropup .dropdown-menu.dropdown-info .dropdown-item.active,.dropleft .dropdown-menu.dropdown-info .dropdown-item:hover,.dropleft .dropdown-menu.dropdown-info .dropdown-item:active,.dropleft .dropdown-menu.dropdown-info .dropdown-item.active,.dropright .dropdown-menu.dropdown-info .dropdown-item:hover,.dropright .dropdown-menu.dropdown-info .dropdown-item:active,.dropright .dropdown-menu.dropdown-info .dropdown-item.active{background-color:#33b5e5 !important;border-radius:.125rem;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.dropdown .dropdown-menu.dropdown-info .dropdown-item:hover.disabled,.dropdown .dropdown-menu.dropdown-info .dropdown-item:active.disabled,.dropdown .dropdown-menu.dropdown-info .dropdown-item.active.disabled,.dropup .dropdown-menu.dropdown-info .dropdown-item:hover.disabled,.dropup .dropdown-menu.dropdown-info .dropdown-item:active.disabled,.dropup .dropdown-menu.dropdown-info .dropdown-item.active.disabled,.dropleft .dropdown-menu.dropdown-info .dropdown-item:hover.disabled,.dropleft .dropdown-menu.dropdown-info .dropdown-item:active.disabled,.dropleft .dropdown-menu.dropdown-info .dropdown-item.active.disabled,.dropright .dropdown-menu.dropdown-info .dropdown-item:hover.disabled,.dropright .dropdown-menu.dropdown-info .dropdown-item:active.disabled,.dropright .dropdown-menu.dropdown-info .dropdown-item.active.disabled{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.dropdown .dropdown-menu.dropdown-warning .dropdown-item:hover,.dropdown .dropdown-menu.dropdown-warning .dropdown-item:active,.dropdown .dropdown-menu.dropdown-warning .dropdown-item.active,.dropup .dropdown-menu.dropdown-warning .dropdown-item:hover,.dropup .dropdown-menu.dropdown-warning .dropdown-item:active,.dropup .dropdown-menu.dropdown-warning .dropdown-item.active,.dropleft .dropdown-menu.dropdown-warning .dropdown-item:hover,.dropleft .dropdown-menu.dropdown-warning .dropdown-item:active,.dropleft .dropdown-menu.dropdown-warning .dropdown-item.active,.dropright .dropdown-menu.dropdown-warning .dropdown-item:hover,.dropright .dropdown-menu.dropdown-warning .dropdown-item:active,.dropright .dropdown-menu.dropdown-warning .dropdown-item.active{background-color:#fb3 !important;border-radius:.125rem;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.dropdown .dropdown-menu.dropdown-warning .dropdown-item:hover.disabled,.dropdown .dropdown-menu.dropdown-warning .dropdown-item:active.disabled,.dropdown .dropdown-menu.dropdown-warning .dropdown-item.active.disabled,.dropup .dropdown-menu.dropdown-warning .dropdown-item:hover.disabled,.dropup .dropdown-menu.dropdown-warning .dropdown-item:active.disabled,.dropup .dropdown-menu.dropdown-warning .dropdown-item.active.disabled,.dropleft .dropdown-menu.dropdown-warning .dropdown-item:hover.disabled,.dropleft .dropdown-menu.dropdown-warning .dropdown-item:active.disabled,.dropleft .dropdown-menu.dropdown-warning .dropdown-item.active.disabled,.dropright .dropdown-menu.dropdown-warning .dropdown-item:hover.disabled,.dropright .dropdown-menu.dropdown-warning .dropdown-item:active.disabled,.dropright .dropdown-menu.dropdown-warning .dropdown-item.active.disabled{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.dropdown .dropdown-menu.dropdown-dark .dropdown-item:hover,.dropdown .dropdown-menu.dropdown-dark .dropdown-item:active,.dropdown .dropdown-menu.dropdown-dark .dropdown-item.active,.dropup .dropdown-menu.dropdown-dark .dropdown-item:hover,.dropup .dropdown-menu.dropdown-dark .dropdown-item:active,.dropup .dropdown-menu.dropdown-dark .dropdown-item.active,.dropleft .dropdown-menu.dropdown-dark .dropdown-item:hover,.dropleft .dropdown-menu.dropdown-dark .dropdown-item:active,.dropleft .dropdown-menu.dropdown-dark .dropdown-item.active,.dropright .dropdown-menu.dropdown-dark .dropdown-item:hover,.dropright .dropdown-menu.dropdown-dark .dropdown-item:active,.dropright .dropdown-menu.dropdown-dark .dropdown-item.active{background-color:#2e2e2e !important;border-radius:.125rem;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.dropdown .dropdown-menu.dropdown-dark .dropdown-item:hover.disabled,.dropdown .dropdown-menu.dropdown-dark .dropdown-item:active.disabled,.dropdown .dropdown-menu.dropdown-dark .dropdown-item.active.disabled,.dropup .dropdown-menu.dropdown-dark .dropdown-item:hover.disabled,.dropup .dropdown-menu.dropdown-dark .dropdown-item:active.disabled,.dropup .dropdown-menu.dropdown-dark .dropdown-item.active.disabled,.dropleft .dropdown-menu.dropdown-dark .dropdown-item:hover.disabled,.dropleft .dropdown-menu.dropdown-dark .dropdown-item:active.disabled,.dropleft .dropdown-menu.dropdown-dark .dropdown-item.active.disabled,.dropright .dropdown-menu.dropdown-dark .dropdown-item:hover.disabled,.dropright .dropdown-menu.dropdown-dark .dropdown-item:active.disabled,.dropright .dropdown-menu.dropdown-dark .dropdown-item.active.disabled{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.dropdown .dropdown-menu.dropdown-ins .dropdown-item:hover,.dropdown .dropdown-menu.dropdown-ins .dropdown-item:active,.dropdown .dropdown-menu.dropdown-ins .dropdown-item.active,.dropup .dropdown-menu.dropdown-ins .dropdown-item:hover,.dropup .dropdown-menu.dropdown-ins .dropdown-item:active,.dropup .dropdown-menu.dropdown-ins .dropdown-item.active,.dropleft .dropdown-menu.dropdown-ins .dropdown-item:hover,.dropleft .dropdown-menu.dropdown-ins .dropdown-item:active,.dropleft .dropdown-menu.dropdown-ins .dropdown-item.active,.dropright .dropdown-menu.dropdown-ins .dropdown-item:hover,.dropright .dropdown-menu.dropdown-ins .dropdown-item:active,.dropright .dropdown-menu.dropdown-ins .dropdown-item.active{background-color:#2e5e86 !important;border-radius:.125rem;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.dropdown .dropdown-menu.dropdown-ins .dropdown-item:hover.disabled,.dropdown .dropdown-menu.dropdown-ins .dropdown-item:active.disabled,.dropdown .dropdown-menu.dropdown-ins .dropdown-item.active.disabled,.dropup .dropdown-menu.dropdown-ins .dropdown-item:hover.disabled,.dropup .dropdown-menu.dropdown-ins .dropdown-item:active.disabled,.dropup .dropdown-menu.dropdown-ins .dropdown-item.active.disabled,.dropleft .dropdown-menu.dropdown-ins .dropdown-item:hover.disabled,.dropleft .dropdown-menu.dropdown-ins .dropdown-item:active.disabled,.dropleft .dropdown-menu.dropdown-ins .dropdown-item.active.disabled,.dropright .dropdown-menu.dropdown-ins .dropdown-item:hover.disabled,.dropright .dropdown-menu.dropdown-ins .dropdown-item:active.disabled,.dropright .dropdown-menu.dropdown-ins .dropdown-item.active.disabled{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}.dropdown .dropdown-menu .dropdown-item,.dropup .dropdown-menu .dropdown-item,.dropleft .dropdown-menu .dropdown-item,.dropright .dropdown-menu .dropdown-item{padding:.5rem;margin-left:0;font-size:.9rem}.dropdown .dropdown-menu .dropdown-item.disabled,.dropup .dropdown-menu .dropdown-item.disabled,.dropleft .dropdown-menu .dropdown-item.disabled,.dropright .dropdown-menu .dropdown-item.disabled{color:#868e96}.dropdown .dropdown-menu .dropdown-item.disabled:hover,.dropdown .dropdown-menu .dropdown-item.disabled:active,.dropdown .dropdown-menu .dropdown-item.disabled:focus,.dropup .dropdown-menu .dropdown-item.disabled:hover,.dropup .dropdown-menu .dropdown-item.disabled:active,.dropup .dropdown-menu .dropdown-item.disabled:focus,.dropleft .dropdown-menu .dropdown-item.disabled:hover,.dropleft .dropdown-menu .dropdown-item.disabled:active,.dropleft .dropdown-menu .dropdown-item.disabled:focus,.dropright .dropdown-menu .dropdown-item.disabled:hover,.dropright .dropdown-menu .dropdown-item.disabled:active,.dropright .dropdown-menu .dropdown-item.disabled:focus{color:#868e96 !important;background-color:transparent !important;-webkit-box-shadow:none;box-shadow:none}.dropdown .dropdown-menu .dropdown-item:hover,.dropdown .dropdown-menu .dropdown-item:active,.dropup .dropdown-menu .dropdown-item:hover,.dropup .dropdown-menu .dropdown-item:active,.dropleft .dropdown-menu .dropdown-item:hover,.dropleft .dropdown-menu .dropdown-item:active,.dropright .dropdown-menu .dropdown-item:hover,.dropright .dropdown-menu .dropdown-item:active{background-color:#4285f4;border-radius:.125rem;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);-webkit-transition:all 0.1s linear;transition:all 0.1s linear}.navbar-nav .dropdown-menu-right{right:0;left:auto}.dropdown-menu.animated{-webkit-animation-duration:.55s;animation-duration:.55s;-webkit-animation-timing-function:ease;animation-timing-function:ease}.navbar .nav-item.avatar{padding:0}.navbar .nav-item.avatar.active{background-color:transparent !important}.navbar .nav-item.avatar .dropdown-toggle{padding:0}.navbar .nav-item.avatar .dropdown-toggle img{height:35px}.navbar .nav-item.avatar .dropdown-toggle:after{display:none}@media (max-width: 992px){.double-nav{padding-top:4px;padding-bottom:4px}}@media (max-width: 768px){.double-nav .container{padding-right:0;padding-left:0}}.double-nav a{font-size:15px;color:#fff}.double-nav .breadcrumb-dn p{padding-top:0;padding-left:1rem;margin:0}@media (max-width: 993px){.double-nav .breadcrumb-dn{display:none}}.double-nav .button-collapse{position:absolute;left:10px;font-size:1.5rem}@media (min-width: 1440px){.double-nav .button-collapse{display:none}}@media (max-width: 1440px){.double-nav .button-collapse{position:relative;display:block;margin-right:10px;margin-left:10px;font-size:1.4rem}}.nav-pills.default-pills .nav-item a{color:#666;text-align:left;border-radius:0}.nav-pills.default-pills .nav-item a:hover{color:#45526e;background-color:transparent;border-left:.0625rem solid #45526e;font-weight:500}.nav-pills.default-pills .nav-item a.active{color:#45526e;background-color:transparent;border-left:.125rem solid #45526e;-webkit-box-shadow:none;box-shadow:none;font-weight:500}.nav-pills.default-pills .nav-item a.active:hover,.nav-pills.default-pills .nav-item a.active:active,.nav-pills.default-pills .nav-item a.active:focus{color:#45526e;background-color:transparent;font-weight:500}.nav-pills .nav-item+.nav-item{margin-left:0}@media only screen and (max-width: 991px){.sticky,.sticky-placeholder{display:none}}#scrollspy{width:100%}@media only screen and (max-width: 992px){.col-md-4 .sticky,.col-lg-4 .sticky,.col-xl-4 .sticky{width:12.5rem}}@media only screen and (min-width: 992px){.col-md-4 .sticky .col-lg-4 .sticky,.col-xl-4 .sticky{width:25rem}}@media only screen and (min-width: 1200px){.col-md-4 .sticky{width:18.75rem}}@media only screen and (min-width: 1440px){.col-md-4 .sticky{width:21.875rem}}.dotted-scrollspy{position:fixed;top:50%;right:0;display:block;background:rgba(0,0,0,0.55);-webkit-transform:translateY(-50%);transform:translateY(-50%);border-radius:.125rem 0 0 .125rem}.dotted-scrollspy li{display:block;padding:0 1rem}.dotted-scrollspy li:first-child{padding-top:.625rem}.dotted-scrollspy li:last-child{padding-bottom:.625rem}.dotted-scrollspy li a{padding:.5rem}.dotted-scrollspy li a span{display:block;background-color:rgba(255,255,255,0.54);width:.5rem;height:.5rem;border-radius:50%}.dotted-scrollspy li a.active span{background:#fff}.scrollspy-example{position:relative;padding:1rem;overflow-y:scroll;height:12.5rem}/*! PhotoSwipe main cSS by dmitry Semenov | photoswipe.com | MIT license */.pswp{position:absolute;top:0;left:0;z-index:1500;display:none;width:100%;height:100%;overflow:hidden;-ms-touch-action:none;touch-action:none;outline:none}.pswp *{-webkit-box-sizing:border-box;box-sizing:border-box}.pswp img{max-width:none}.pswp--animate_opacity{opacity:.001;will-change:opacity;-webkit-transition:opacity 333ms cubic-bezier(0.4, 0, 0.22, 1);transition:opacity 333ms cubic-bezier(0.4, 0, 0.22, 1)}.pswp--open{display:block}.pswp--zoom-allowed .pswp__img{cursor:-webkit-zoom-in;cursor:zoom-in}.pswp--zoomed-in .pswp__img{cursor:-webkit-grab;cursor:grab}.pswp--dragging .pswp__img{cursor:-webkit-grabbing;cursor:grabbing}.pswp__bg{position:absolute;top:0;left:0;width:100%;height:100%;background:#000;opacity:0;will-change:opacity;-webkit-transition:opacity 333ms cubic-bezier(0.4, 0, 0.22, 1);transition:opacity 333ms cubic-bezier(0.4, 0, 0.22, 1)}.pswp__scroll-wrap{position:absolute;top:0;left:0;width:100%;height:100%;overflow:hidden}.pswp__container,.pswp__zoom-wrap{position:absolute;top:0;right:0;bottom:0;left:0;-ms-touch-action:none;touch-action:none}.pswp__container,.pswp__img{-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.pswp__zoom-wrap{position:absolute;width:100%;-webkit-transition:-webkit-transform 333ms cubic-bezier(0.4, 0, 0.22, 1);transition:-webkit-transform 333ms cubic-bezier(0.4, 0, 0.22, 1);transition:transform 333ms cubic-bezier(0.4, 0, 0.22, 1);transition:transform 333ms cubic-bezier(0.4, 0, 0.22, 1), -webkit-transform 333ms cubic-bezier(0.4, 0, 0.22, 1);-webkit-transform-origin:left top;transform-origin:left top}.pswp--animated-in .pswp__bg,.pswp--animated-in .pswp__zoom-wrap{-webkit-transition:none;transition:none}.pswp__item{position:absolute;top:0;right:0;bottom:0;left:0;overflow:hidden}.pswp__img{position:absolute;top:0;left:0;width:auto;height:auto}.pswp__img--placeholder--blank{background:#222}.pswp--ie .pswp__img{top:0;left:0;width:100%;height:auto}.pswp__error-msg{position:absolute;top:50%;left:0;width:100%;margin-top:-8px;font-size:14px;line-height:16px;color:#ccc;text-align:center}.pswp__error-msg a{color:#ccc;text-decoration:underline}/*! PhotoSwipe default UI cSS by dmitry Semenov | photoswipe.com | MIT license */.pswp__button{position:relative;display:block;float:right;width:44px;height:44px;padding:0;margin:0;overflow:visible;cursor:pointer;background:none;border:0;-webkit-box-shadow:none;box-shadow:none;opacity:.75;-webkit-transition:opacity .2s;transition:opacity .2s}.pswp__button:focus,.pswp__button:hover{opacity:1}.pswp__button:active{outline:none;opacity:.9}.pswp__button::-moz-focus-inner{padding:0;border:0}.pswp__ui--over-close .pswp__button--close{opacity:1}.pswp__button,.pswp__button--arrow--left::before,.pswp__button--arrow--right::before{width:44px;height:44px;background:url(../img/lightbox/default-skin.png) 0 0 no-repeat;background-size:264px 88px}@media (-webkit-min-device-pixel-ratio: 1.1), (-webkit-min-device-pixel-ratio: 1.09375), (min-resolution: 105dpi), (min-resolution: 1.1dppx){.pswp--svg .pswp__button,.pswp--svg .pswp__button--arrow--left::before,.pswp--svg .pswp__button--arrow--right::before{background-image:url(../img/lightbox/default-skin.svg)}.pswp--svg .pswp__button--arrow--left,.pswp--svg .pswp__button--arrow--right{background:none}}.pswp__button--close{background-position:0 -44px}.pswp__button--share{background-position:-44px -44px}.pswp__button--fs{display:none}.pswp--supports-fs .pswp__button--fs{display:block}.pswp--fs .pswp__button--fs{background-position:-44px 0}.pswp__button--zoom{display:none;background-position:-88px 0}.pswp--zoom-allowed .pswp__button--zoom{display:block}.pswp--zoomed-in .pswp__button--zoom{background-position:-132px 0}.pswp--touch .pswp__button--arrow--left,.pswp--touch .pswp__button--arrow--right{visibility:hidden}.pswp__button--arrow--left,.pswp__button--arrow--right{position:absolute;top:50%;width:70px;height:100px;margin-top:-50px;background:none}.pswp__button--arrow--left{left:0}.pswp__button--arrow--right{right:0}.pswp__button--arrow--left::before,.pswp__button--arrow--right::before{position:absolute;top:35px;width:32px;height:30px;content:"";background-color:rgba(0,0,0,0.3)}.pswp__button--arrow--left::before{left:6px;background-position:-138px -44px}.pswp__button--arrow--right::before{right:6px;background-position:-94px -44px}.pswp__counter,.pswp__share-modal{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.pswp__share-modal{position:absolute;top:0;left:0;z-index:1600;display:block;width:100%;height:100%;padding:10px;background:rgba(0,0,0,0.5);opacity:0;-webkit-transition:opacity .25s ease-out;transition:opacity .25s ease-out;will-change:opacity}.pswp__share-modal--hidden{display:none}.pswp__share-tooltip{position:absolute;top:56px;right:44px;z-index:1620;display:block;width:auto;background:#fff;border-radius:2px;-webkit-box-shadow:0 2px 5px rgba(0,0,0,0.25);box-shadow:0 2px 5px rgba(0,0,0,0.25);-webkit-transition:-webkit-transform .25s;transition:-webkit-transform .25s;transition:transform .25s;transition:transform .25s, -webkit-transform .25s;-webkit-transform:translateY(6px);transform:translateY(6px);will-change:transform}.pswp__share-tooltip a{display:block;padding:8px 12px;font-size:14px;line-height:18px;color:#000;text-decoration:none}.pswp__share-tooltip a:hover{color:#000;text-decoration:none}.pswp__share-tooltip a:first-child{border-radius:2px 2px 0 0}.pswp__share-tooltip a:last-child{border-radius:0 0 2px 2px}.pswp__share-modal--fade-in{opacity:1}.pswp__share-modal--fade-in .pswp__share-tooltip{-webkit-transform:translateY(0);transform:translateY(0)}.pswp--touch .pswp__share-tooltip a{padding:16px 12px}.pswp__share--facebook::before{position:absolute;top:-12px;right:15px;display:block;width:0;height:0;pointer-events:none;content:"";border:6px solid rgba(0,0,0,0);border-bottom-color:#fff}.pswp__share--facebook:hover{color:#fff;background:#3e5c9a}.pswp__share--facebook:hover::before{border-bottom-color:#3e5c9a}.pswp__share--twitter:hover{color:#fff;background:#55acee}.pswp__share--pinterest:hover{color:#ce272d;background:#ccc}.pswp__share--download:hover{background:#ddd}.pswp__counter{position:absolute;top:0;left:0;height:44px;padding:0 10px;font-size:13px;line-height:44px;color:#fff;opacity:.75}.pswp__caption{position:absolute;bottom:0;left:0;width:100%;min-height:44px}.pswp__caption small{font-size:11px;color:#bbb}.pswp__caption__center{max-width:500px;padding:10px;margin:0 auto;font-size:13px;line-height:20px;color:#ccc;text-align:center}.pswp__caption--empty{display:none}.pswp__caption--fake{visibility:hidden}.pswp__preloader{position:absolute;top:0;left:50%;width:44px;height:44px;margin-left:-22px;direction:ltr;opacity:0;-webkit-transition:opacity .25s ease-out;transition:opacity .25s ease-out;will-change:opacity}.pswp__preloader__icn{width:20px;height:20px;margin:12px}.pswp__preloader--active{opacity:1}.pswp__preloader--active .pswp__preloader__icn{background:url(../img/lightbox/preloader.gif) 0 0 no-repeat}.pswp--css_animation .pswp__preloader--active{opacity:1}.pswp--css_animation .pswp__preloader--active .pswp__preloader__icn{-webkit-animation:clockwise 500ms linear infinite;animation:clockwise 500ms linear infinite}.pswp--css_animation .pswp__preloader--active .pswp__preloader__donut{-webkit-animation:donut-rotate 1000ms cubic-bezier(0.4, 0, 0.22, 1) infinite;animation:donut-rotate 1000ms cubic-bezier(0.4, 0, 0.22, 1) infinite}.pswp--css_animation .pswp__preloader__icn{position:absolute;top:15px;left:15px;width:14px;height:14px;margin:0;background:none;opacity:.75}.pswp--css_animation .pswp__preloader__cut{position:relative;width:7px;height:14px;overflow:hidden}.pswp--css_animation .pswp__preloader__donut{position:absolute;top:0;left:0;-webkit-box-sizing:border-box;box-sizing:border-box;width:14px;height:14px;margin:0;background:none;border:2px solid #fff;border-bottom-color:transparent;border-left-color:transparent;border-radius:50%}@media screen and (max-width: 1024px){.pswp__preloader{position:relative;top:auto;left:auto;float:right;margin:0}}@-webkit-keyframes clockwise{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes clockwise{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@-webkit-keyframes donut-rotate{0%{-webkit-transform:rotate(0);transform:rotate(0)}50%{-webkit-transform:rotate(-140deg);transform:rotate(-140deg)}100%{-webkit-transform:rotate(0);transform:rotate(0)}}@keyframes donut-rotate{0%{-webkit-transform:rotate(0);transform:rotate(0)}50%{-webkit-transform:rotate(-140deg);transform:rotate(-140deg)}100%{-webkit-transform:rotate(0);transform:rotate(0)}}.pswp__ui{z-index:1550;visibility:visible;opacity:1;-webkit-font-smoothing:auto}.pswp__top-bar{position:absolute;top:0;left:0;width:100%;height:44px}.pswp__caption,.pswp__top-bar,.pswp--has_mouse .pswp__button--arrow--left,.pswp--has_mouse .pswp__button--arrow--right{will-change:opacity;-webkit-transition:opacity 333ms cubic-bezier(0.4, 0, 0.22, 1);transition:opacity 333ms cubic-bezier(0.4, 0, 0.22, 1)}.pswp--has_mouse .pswp__button--arrow--left,.pswp--has_mouse .pswp__button--arrow--right{visibility:visible}.pswp__top-bar,.pswp__caption{background-color:rgba(0,0,0,0.5)}.pswp__ui--fit .pswp__top-bar,.pswp__ui--fit .pswp__caption{background-color:rgba(0,0,0,0.3)}.pswp__ui--idle .pswp__top-bar{opacity:0}.pswp__ui--idle .pswp__button--arrow--left,.pswp__ui--idle .pswp__button--arrow--right{opacity:0}.pswp__ui--hidden .pswp__top-bar,.pswp__ui--hidden .pswp__caption,.pswp__ui--hidden .pswp__button--arrow--left,.pswp__ui--hidden .pswp__button--arrow--right{opacity:.001}.pswp__ui--one-slide .pswp__button--arrow--left,.pswp__ui--one-slide .pswp__button--arrow--right,.pswp__ui--one-slide .pswp__counter{display:none}.pswp__element--disabled{display:none}.pswp--minimal--dark .pswp__top-bar{background:none}.mdb-lightbox figure{float:left;margin:0}.mdb-lightbox figure .img-fluid,.mdb-lightbox figure .modal-dialog.cascading-modal.modal-avatar .modal-header,.modal-dialog.cascading-modal.modal-avatar .mdb-lightbox figure .modal-header{display:inline}.mdb-lightbox figure img{cursor:-webkit-zoom-in;cursor:zoom-in;border-radius:0;-webkit-transition:opacity 0.4s;transition:opacity 0.4s}.mdb-lightbox figure img:hover{opacity:.8}.mdb-lightbox figure figcaption{display:none}.mdb-lightbox.no-margin [class*="col-"]{padding:0}.mdb-lightbox [class*="col-"]{padding:.5rem}.chip{display:inline-block;height:32px;padding:0 12px;margin-right:1rem;margin-bottom:1rem;font-size:13px;font-weight:500;line-height:32px;color:rgba(0,0,0,0.6);cursor:pointer;background-color:#eceff1;border-radius:16px;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.chip:hover{background-color:#e0e0e0;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.chip:focus{background-color:#bdbdbd;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.chip:active{-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.chip img{float:left;width:32px;height:32px;margin:0 8px 0 -12px;border-radius:50%}.chip .close{float:right;padding-left:8px;font-size:16px;line-height:32px;cursor:pointer;-webkit-transition:all .1s linear;transition:all .1s linear}.chips{min-height:45px;padding-bottom:1rem;margin-bottom:30px;border:none;border-bottom:1px solid #ced4da;outline:none;-webkit-box-shadow:none;box-shadow:none;-webkit-transition:all .3s;transition:all .3s}.chips.focus{border-bottom:1px solid #4285f4;-webkit-box-shadow:0 1px 0 0 #4285f4;box-shadow:0 1px 0 0 #4285f4}.chips:hover{cursor:text}.chips .tag.selected{color:#fff;border-bottom:1px solid #4285f4}.chips .input{display:inline-block;width:120px !important;height:32px;padding:0 !important;margin-right:20px;font-size:13px;font-weight:500;line-height:32px;color:rgba(0,0,0,0.6);background:none;border:0;outline:0}.chips .input:focus{border:0 !important;-webkit-box-shadow:none !important;box-shadow:none !important}.chips-autocomplete .chips{padding-bottom:unset}.chips-autocomplete .chip-span{position:relative;left:-15px}.chips-autocomplete .chip-ul{position:absolute;right:0;z-index:100;width:140px;max-height:210px;padding-left:0;overflow-y:auto;list-style-type:none;background:#fff;outline:none}.chips-autocomplete .chip-ul li{padding:12px 15px;font-size:.875rem;cursor:pointer}.chips-autocomplete .chip-ul li:hover{background:#eee}.table fieldset.form-check{margin-bottom:0}.table fieldset label.form-check-label{height:.94rem}.product-table img{min-width:50px;max-height:150px}.product-table td{vertical-align:middle}.streak{position:relative;display:block;height:250px;overflow:hidden}.streak.streak-md{height:400px}@media (max-width: 736px){.streak.streak-md{height:300px}}.streak.streak-lg{height:650px}@media (max-width: 450px){.streak.streak-lg{height:900px}}.streak.streak-long{height:200px}@media (max-width: 450px){.streak.streak-long{height:620px}}.streak.streak-long-2{height:400px}@media (max-width: 450px){.streak.streak-long-2{height:700px}}.streak.streak-photo{background-repeat:no-repeat;background-position:center;background-size:cover}@media (min-width: 1366px){.streak.streak-photo{background-attachment:fixed}}.streak.no-flex{height:auto;padding-top:3.125rem;padding-bottom:3.125rem}.collapse-content table.collapse:not(.show),.collapse-content p.collapse:not(.show){display:-webkit-box;display:-ms-flexbox;display:flex;height:2.65rem;overflow:hidden;-webkit-line-clamp:2;-webkit-box-orient:vertical}.collapse-content table.collapsing,.collapse-content p.collapsing{min-height:2.65rem}.collapse-content a.collapsed:after{content:"Read More"}.collapse-content a:not(.collapsed):after{content:"Read Less"}.form-header{padding:1rem;margin-top:-3.13rem;margin-bottom:3rem;color:#fff;text-align:center;border-radius:.125rem;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}[type="radio"]:not(:checked),[type="radio"]:checked{position:absolute;pointer-events:none;opacity:0}.form-check-input[type="radio"]:not(:checked)+label,.form-check-input[type="radio"]:checked+label,label.btn input[type="radio"]:not(:checked)+label,label.btn input[type="radio"]:checked+label{position:relative;display:inline-block;height:1.5625rem;padding-left:35px;line-height:1.5625rem;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-transition:0.28s ease;transition:0.28s ease}.form-check-input[type="radio"]+label:before,.form-check-input[type="radio"]+label:after,label.btn input[type="radio"]+label:before,label.btn input[type="radio"]+label:after{position:absolute;top:0;left:0;z-index:0;width:16px;height:16px;margin:4px;content:"";-webkit-transition:0.28s ease;transition:0.28s ease}.form-check-input[type="radio"]:not(:checked)+label:before,.form-check-input[type="radio"]:not(:checked)+label:after,.form-check-input[type="radio"]:checked+label:before,.form-check-input[type="radio"]:checked+label:after,.form-check-input[type="radio"].with-gap:checked+label:before,.form-check-input[type="radio"].with-gap:checked+label:after,label.btn input[type="radio"]:not(:checked)+label:before,label.btn input[type="radio"]:not(:checked)+label:after,label.btn input[type="radio"]:checked+label:before,label.btn input[type="radio"]:checked+label:after,label.btn input[type="radio"].with-gap:checked+label:before,label.btn input[type="radio"].with-gap:checked+label:after{border-radius:50%}.form-check-input[type="radio"]:not(:checked)+label:before,.form-check-input[type="radio"]:not(:checked)+label:after,label.btn input[type="radio"]:not(:checked)+label:before,label.btn input[type="radio"]:not(:checked)+label:after{border:2px solid #5a5a5a}.form-check-input[type="radio"]:not(:checked)+label:after,label.btn input[type="radio"]:not(:checked)+label:after{-webkit-transform:scale(0);transform:scale(0)}.form-check-input[type="radio"]:checked+label:before,label.btn input[type="radio"]:checked+label:before{border:2px solid transparent}.form-check-input[type="radio"]:checked+label:after,.form-check-input[type="radio"].with-gap:checked+label:before,.form-check-input[type="radio"].with-gap:checked+label:after,label.btn input[type="radio"]:checked+label:after,label.btn input[type="radio"].with-gap:checked+label:before,label.btn input[type="radio"].with-gap:checked+label:after{border:2px solid #4285f4}.form-check-input[type="radio"]:checked+label:after,.form-check-input[type="radio"].with-gap:checked+label:after,label.btn input[type="radio"]:checked+label:after,label.btn input[type="radio"].with-gap:checked+label:after{background-color:#4285f4}.form-check-input[type="radio"]:checked+label:after,label.btn input[type="radio"]:checked+label:after{-webkit-transform:scale(1.02);transform:scale(1.02)}.form-check-input[type="radio"].with-gap:checked+label:after,label.btn input[type="radio"].with-gap:checked+label:after{-webkit-transform:scale(0.5);transform:scale(0.5)}.form-check-input[type="radio"].with-gap:disabled:checked+label:before,label.btn input[type="radio"].with-gap:disabled:checked+label:before{border:2px solid rgba(0,0,0,0.46)}.form-check-input[type="radio"].with-gap:disabled:checked+label:after,label.btn input[type="radio"].with-gap:disabled:checked+label:after{background-color:rgba(0,0,0,0.46);border:none}.form-check-input[type="radio"]:disabled:not(:checked)+label:before,.form-check-input[type="radio"]:disabled:checked+label:before,label.btn input[type="radio"]:disabled:not(:checked)+label:before,label.btn input[type="radio"]:disabled:checked+label:before{background-color:transparent;border-color:rgba(0,0,0,0.46)}.form-check-input[type="radio"]:disabled+span,label.btn input[type="radio"]:disabled+span{color:rgba(0,0,0,0.46)}.form-check-input[type="radio"]:disabled:not(:checked)+span:before,label.btn input[type="radio"]:disabled:not(:checked)+span:before{border-color:rgba(0,0,0,0.46)}.form-check-input[type="radio"]:disabled:checked+span:after,label.btn input[type="radio"]:disabled:checked+span:after{background-color:rgba(0,0,0,0.46);border-color:#bdbdbd}.form-check-input[type="radio"]:checked+label:after .disabled-material,label.btn input[type="radio"]:checked+label:after .disabled-material{background-color:rgba(66,133,244,0.2)}.md-disabled::after{background-color:rgba(66,133,244,0.5) !important;border-color:rgba(66,133,244,0.2) !important}.md-disabled::before{border-color:rgba(66,133,244,0.25) !important}[type="checkbox"]:not(:checked),[type="checkbox"]:checked{position:absolute;pointer-events:none;opacity:0}.form-check-input[type="checkbox"]+label,label.btn input[type="checkbox"]+label{position:relative;display:inline-block;height:1.5625rem;padding-left:35px;line-height:1.5625rem;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.form-check-input[type="checkbox"]+label.form-check-label-left,label.btn input[type="checkbox"]+label.form-check-label-left{padding:0 35px 0 0 !important}.form-check-input[type="checkbox"]+label.form-check-label-left:before,label.btn input[type="checkbox"]+label.form-check-label-left:before{right:0;left:100% !important;-webkit-transform:translateX(-100%);transform:translateX(-100%)}.form-check-input[type="checkbox"]+label:before,.form-check-input[type="checkbox"]:not(.filled-in)+label:after,label.btn input[type="checkbox"]+label:before,label.btn input[type="checkbox"]:not(.filled-in)+label:after{position:absolute;top:0;left:0;z-index:0;width:18px;height:18px;margin-top:3px;content:"";border:2px solid #8a8a8a;border-radius:1px;-webkit-transition:.2s;transition:.2s}.form-check-input[type="checkbox"]:not(.filled-in)+label:after,label.btn input[type="checkbox"]:not(.filled-in)+label:after{border:0;-webkit-transform:scale(0);transform:scale(0)}.form-check-input[type="checkbox"]:not(:checked):disabled+label:before,label.btn input[type="checkbox"]:not(:checked):disabled+label:before{background-color:#bdbdbd;border:none}.form-check-input[type="checkbox"]:checked+label:before,label.btn input[type="checkbox"]:checked+label:before{top:-4px;left:-5px;width:12px;height:1.375rem;border-top:2px solid transparent;border-right:2px solid #4285f4;border-bottom:2px solid #4285f4;border-left:2px solid transparent;-webkit-transform:rotate(40deg);transform:rotate(40deg);-webkit-transform-origin:100% 100%;transform-origin:100% 100%;-webkit-backface-visibility:hidden;backface-visibility:hidden}.form-check-input[type="checkbox"]:checked+label.form-check-label-left:before,label.btn input[type="checkbox"]:checked+label.form-check-label-left:before{-webkit-transform:translateX(0) rotateZ(40deg);transform:translateX(0) rotateZ(40deg);-webkit-transform-origin:0 0;transform-origin:0 0}.form-check-input[type="checkbox"]:checked:disabled+label:before,label.btn input[type="checkbox"]:checked:disabled+label:before{border-right:2px solid #bdbdbd;border-bottom:2px solid #bdbdbd}.form-check-input[type="checkbox"]:indeterminate+label:before,label.btn input[type="checkbox"]:indeterminate+label:before{top:-11px;left:-12px;width:10px;height:1.375rem;border-top:none;border-right:2px solid #4285f4;border-bottom:none;border-left:none;-webkit-transform:rotate(90deg);transform:rotate(90deg);-webkit-transform-origin:100% 100%;transform-origin:100% 100%;-webkit-backface-visibility:hidden;backface-visibility:hidden}.form-check-input[type="checkbox"]:indeterminate+label.form-check-label-left:before,label.btn input[type="checkbox"]:indeterminate+label.form-check-label-left:before{top:0;-webkit-transform-origin:0 0;transform-origin:0 0}.form-check-input[type="checkbox"]:indeterminate:disabled+label:before,label.btn input[type="checkbox"]:indeterminate:disabled+label:before{background-color:transparent;border-right:2px solid rgba(0,0,0,0.46)}.form-check-input[type="checkbox"].filled-in+label:after,label.btn input[type="checkbox"].filled-in+label:after{border-radius:.125rem}.form-check-input[type="checkbox"].filled-in+label:before,.form-check-input[type="checkbox"].filled-in+label:after,label.btn input[type="checkbox"].filled-in+label:before,label.btn input[type="checkbox"].filled-in+label:after{position:absolute;left:0;z-index:1;content:"";-webkit-transition:border 0.25s,background-color 0.25s,width 0.2s .1s,height 0.2s .1s,top 0.2s .1s,left 0.2s .1s;transition:border 0.25s,background-color 0.25s,width 0.2s .1s,height 0.2s .1s,top 0.2s .1s,left 0.2s .1s}.form-check-input[type="checkbox"].filled-in:not(:checked)+label:before,label.btn input[type="checkbox"].filled-in:not(:checked)+label:before{top:10px;left:6px;width:0;height:0;border:3px solid transparent;-webkit-transform:rotateZ(37deg);transform:rotateZ(37deg);-webkit-transform-origin:100% 100%;transform-origin:100% 100%}.form-check-input[type="checkbox"].filled-in:not(:checked)+label:after,label.btn input[type="checkbox"].filled-in:not(:checked)+label:after{top:0;z-index:0;width:20px;height:20px;background-color:transparent;border:2px solid #5a5a5a}.form-check-input[type="checkbox"].filled-in:checked+label:before,label.btn input[type="checkbox"].filled-in:checked+label:before{top:0;left:1px;width:8px;height:13px;border-top:2px solid transparent;border-right:2px solid #fff;border-bottom:2px solid #fff;border-left:2px solid transparent;-webkit-transform:rotateZ(37deg);transform:rotateZ(37deg);-webkit-transform-origin:100% 100%;transform-origin:100% 100%}.form-check-input[type="checkbox"].filled-in:checked+label:after,label.btn input[type="checkbox"].filled-in:checked+label:after{top:0;z-index:0;width:20px;height:20px;background-color:#a6c;border:2px solid #a6c}.form-check-input[type="checkbox"].filled-in.filled-in-danger:checked+label:after,label.btn input[type="checkbox"].filled-in.filled-in-danger:checked+label:after{background-color:#f44336;border-color:#f44336}.form-check-input[type="checkbox"]:disabled:not(:checked)+label:before,label.btn input[type="checkbox"]:disabled:not(:checked)+label:before{background-color:#bdbdbd;border-color:#bdbdbd}.form-check-input[type="checkbox"]:disabled:not(:checked)+label:after,label.btn input[type="checkbox"]:disabled:not(:checked)+label:after{background-color:#bdbdbd;border-color:#bdbdbd}.form-check-input[type="checkbox"]:disabled:checked+label:before,label.btn input[type="checkbox"]:disabled:checked+label:before{background-color:transparent}.form-check-input[type="checkbox"]:disabled:checked+label:after,label.btn input[type="checkbox"]:disabled:checked+label:after{background-color:#bdbdbd;border-color:#bdbdbd}.select-wrapper .select-dropdown{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.select-label{position:absolute}.select-wrapper{position:relative}.select-wrapper input.select-dropdown{position:relative;z-index:2;display:block;width:100%;height:38px;padding:0;margin:0 0 .94rem 0;font-size:1rem;line-height:2.9rem;text-overflow:ellipsis;cursor:pointer;background-color:transparent;border:none;border-bottom:1px solid #ced4da;outline:none}.select-wrapper input.select-dropdown:disabled{color:rgba(0,0,0,0.3);cursor:default;border-bottom-color:rgba(0,0,0,0.2)}.select-wrapper input.select-dropdown .selected,.select-wrapper input.select-dropdown li:focus{background-color:rgba(0,0,0,0.15)}.select-wrapper input.select-dropdown li.active{background:transparent}.select-wrapper input.select-dropdown .fas,.select-wrapper input.select-dropdown .fab,.select-wrapper input.select-dropdown .far{color:inherit}.select-wrapper input.active{border-bottom:1px solid #4285f4;-webkit-box-shadow:0 1px 0 0 #4285f4;box-shadow:0 1px 0 0 #4285f4}.select-wrapper .search-wrap{display:block;padding:1rem 0 0;margin:0 .7rem}.select-wrapper .search-wrap .md-form{margin-top:0;margin-bottom:1rem}.select-wrapper .search-wrap .md-form input{padding-bottom:.4rem;margin-bottom:0}.select-wrapper span.caret{position:absolute;top:.8rem;right:0;font-size:.63rem;color:initial}.select-wrapper span.caret.disabled{color:rgba(0,0,0,0.3)}.select-wrapper+label{position:absolute;top:2.125rem;font-weight:300;color:#757575;-webkit-transition:0.2s ease-out;transition:0.2s ease-out}.select-wrapper+label.active{top:1.5rem;left:15px;font-size:.8rem;-webkit-transform:translateY(-14px);transform:translateY(-14px)}.select-wrapper+label.active-check{color:#4285f4}.select-wrapper+label.mdb-main-label{z-index:1}.select-wrapper+label.disabled{color:rgba(0,0,0,0.3)}.select-wrapper>label.mdb-main-label{position:absolute;top:0.5rem;left:0;font-weight:300;color:#757575;-webkit-transition:.2s ease-out;transition:.2s ease-out;text-overflow:ellipsis;white-space:nowrap;overflow:hidden;width:100%;z-index:1}.select-wrapper>label.mdb-main-label.active{top:0;left:0;font-size:.8rem;-webkit-transform:translateY(-14px);transform:translateY(-14px);color:#4285f4}.select-wrapper>label.mdb-main-label.disabled{color:rgba(0,0,0,0.3)}.select-wrapper.dropdown-primary>label.mdb-main-label.active{color:#4285f4}.select-wrapper.dropdown-danger>label.mdb-main-label.active{color:#c00}.select-wrapper.dropdown-default>label.mdb-main-label.active{color:#2bbbad}.select-wrapper.dropdown-secondary>label.mdb-main-label.active{color:#a6c}.select-wrapper.dropdown-success>label.mdb-main-label.active{color:#00c851}.select-wrapper.dropdown-info>label.mdb-main-label.active{color:#33b5e5}.select-wrapper.dropdown-warning>label.mdb-main-label.active{color:#fb3}.select-wrapper.dropdown-ins>label.mdb-main-label.active{color:#2e5e86}.select-wrapper.dropdown-dark>label.mdb-main-label.active{color:#2e2e2e}.select-wrapper i{color:rgba(0,0,0,0.3)}.select-wrapper ul{padding-left:0;list-style-type:none}.select-wrapper.md-form>ul li label{top:0;font-size:.9rem;color:#4285f4;-webkit-transform:none;transform:none}.select-wrapper.md-form>ul li.select-toggle-all label{padding-left:38px}.select-wrapper.md-form.colorful-select>ul li.select-toggle-all:hover label{color:#fff}.select-wrapper.md-form.md-outline span.caret{padding-right:.75rem;padding-left:.75rem;color:#495057 !important}.select-wrapper.md-form.md-outline span.caret.active{color:#4285f4 !important}.select-wrapper.md-form.md-outline .dropdown-content{top:2.7rem !important}.select-wrapper.md-form.md-outline input.select-dropdown{padding:.375rem .75rem;color:#495057}.select-wrapper.md-form.md-outline input.select-dropdown:focus{border-color:#4285f4;-webkit-box-shadow:inset 0 0 0 1px #4285f4;box-shadow:inset 0 0 0 1px #4285f4}.select-wrapper.md-form.md-outline+label{position:absolute;top:.5em !important;left:23px;z-index:2 !important;padding-right:5px;padding-left:5px;font-size:13px;font-weight:500;color:#757575;background:#fff;-webkit-transform:translateY(40%);transform:translateY(40%)}.select-wrapper.md-form.md-outline+label.active{color:#4285f4}.select-wrapper .select-add-option{position:absolute;top:1.5rem;right:1rem;display:none;color:#4285f4;cursor:pointer}.select-wrapper ~ .invalid-feedback,.select-wrapper ~ .valid-feedback{margin-top:-1rem}select{font-family:"Helvetica Neue", Helvetica, Arial, sans-serif}select.mdb-select{display:none !important}select.browser-default{display:block !important}select:disabled{color:rgba(0,0,0,0.3)}.select-dropdown [type="checkbox"]:disabled:not(:checked)+label:before{margin-top:3px;margin-left:0}.select-dropdown ul{padding:0;list-style-type:none}.select-dropdown li img{float:right;width:30px;height:30px;margin:.3rem .75rem}.select-dropdown li.disabled,.select-dropdown li.disabled>span,.select-dropdown li.optgroup{color:rgba(0,0,0,0.3);cursor:context-menu;background-color:transparent !important}.select-dropdown li.optgroup{border-top:1px solid #eee}.select-dropdown li.optgroup.selected>span{color:rgba(0,0,0,0.7)}.select-dropdown li.optgroup>span{color:rgba(0,0,0,0.4)}.multiple-select-dropdown li [type="checkbox"]+label{height:.63rem}.dropdown-content{position:absolute;z-index:1021;display:none;min-width:6.25rem;max-height:40.625rem;margin:0;overflow-y:auto;background-color:#fff;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);opacity:0;will-change:width, height}.dropdown-content li{width:100%;clear:both;line-height:1.3rem;color:#000;text-align:left;text-transform:none;cursor:pointer}.dropdown-content li:hover,.dropdown-content li.active{background-color:#eee}.dropdown-content li>a,.dropdown-content li>span{display:block;padding:.5rem;font-size:.9rem;color:#4285f4}.dropdown-content li>a>i{height:inherit;line-height:inherit}.colorful-select .dropdown-content{padding:.5rem}.colorful-select .dropdown-content li.active span{color:#fff !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.colorful-select .dropdown-content li.active span [type="checkbox"]:checked+label:before{border-color:transparent #fff #fff transparent}.colorful-select .dropdown-content li a:hover,.colorful-select .dropdown-content li span:hover{color:#fff !important;border-radius:.125rem;-webkit-box-shadow:0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);box-shadow:0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);-webkit-transition:.15s;transition:.15s}.colorful-select .dropdown-content li a:hover [type="checkbox"]+label:before,.colorful-select .dropdown-content li span:hover [type="checkbox"]+label:before{border-color:#fff}.colorful-select .dropdown-content li a:hover [type="checkbox"]:checked+label:before,.colorful-select .dropdown-content li span:hover [type="checkbox"]:checked+label:before{border-color:transparent #fff #fff transparent}.colorful-select .dropdown-content li.disabled.active span,.colorful-select .dropdown-content li:disabled.active span,.colorful-select .dropdown-content li.optgroup.active span{color:rgba(0,0,0,0.3) !important;cursor:default;border-bottom-color:rgba(0,0,0,0.3);-webkit-box-shadow:none;box-shadow:none}.colorful-select .dropdown-content li.disabled a:hover,.colorful-select .dropdown-content li.disabled span:hover,.colorful-select .dropdown-content li:disabled a:hover,.colorful-select .dropdown-content li:disabled span:hover,.colorful-select .dropdown-content li.optgroup a:hover,.colorful-select .dropdown-content li.optgroup span:hover{color:rgba(0,0,0,0.3) !important;cursor:default;background-color:#fff !important;border-bottom-color:rgba(0,0,0,0.3);-webkit-box-shadow:none;box-shadow:none}.colorful-select .dropdown-content li.disabled label,.colorful-select .dropdown-content li:disabled label,.colorful-select .dropdown-content li.optgroup label{cursor:default}.dropdown-primary .dropdown-content li.active,.dropdown-primary .dropdown-content li a,.dropdown-primary .dropdown-content li span:hover{background-color:#4285f4 !important}.dropdown-primary .dropdown-content li.disabled.active{background-color:transparent !important}.dropdown-primary .search-wrap input:focus{border-bottom:1px solid #4285f4;-webkit-box-shadow:0 1px 0 0 #4285f4;box-shadow:0 1px 0 0 #4285f4}.dropdown-danger .dropdown-content li.active,.dropdown-danger .dropdown-content li a,.dropdown-danger .dropdown-content li span:hover{background-color:#c00 !important}.dropdown-danger .dropdown-content li.disabled.active{background-color:transparent !important}.dropdown-danger .search-wrap input:focus{border-bottom:1px solid #c00;-webkit-box-shadow:0 1px 0 0 #c00;box-shadow:0 1px 0 0 #c00}.dropdown-default .dropdown-content li.active,.dropdown-default .dropdown-content li a,.dropdown-default .dropdown-content li span:hover{background-color:#2bbbad !important}.dropdown-default .dropdown-content li.disabled.active{background-color:transparent !important}.dropdown-default .search-wrap input:focus{border-bottom:1px solid #2bbbad;-webkit-box-shadow:0 1px 0 0 #2bbbad;box-shadow:0 1px 0 0 #2bbbad}.dropdown-secondary .dropdown-content li.active,.dropdown-secondary .dropdown-content li a,.dropdown-secondary .dropdown-content li span:hover{background-color:#a6c !important}.dropdown-secondary .dropdown-content li.disabled.active{background-color:transparent !important}.dropdown-secondary .search-wrap input:focus{border-bottom:1px solid #a6c;-webkit-box-shadow:0 1px 0 0 #a6c;box-shadow:0 1px 0 0 #a6c}.dropdown-success .dropdown-content li.active,.dropdown-success .dropdown-content li a,.dropdown-success .dropdown-content li span:hover{background-color:#00c851 !important}.dropdown-success .dropdown-content li.disabled.active{background-color:transparent !important}.dropdown-success .search-wrap input:focus{border-bottom:1px solid #00c851;-webkit-box-shadow:0 1px 0 0 #00c851;box-shadow:0 1px 0 0 #00c851}.dropdown-info .dropdown-content li.active,.dropdown-info .dropdown-content li a,.dropdown-info .dropdown-content li span:hover{background-color:#33b5e5 !important}.dropdown-info .dropdown-content li.disabled.active{background-color:transparent !important}.dropdown-info .search-wrap input:focus{border-bottom:1px solid #33b5e5;-webkit-box-shadow:0 1px 0 0 #33b5e5;box-shadow:0 1px 0 0 #33b5e5}.dropdown-warning .dropdown-content li.active,.dropdown-warning .dropdown-content li a,.dropdown-warning .dropdown-content li span:hover{background-color:#fb3 !important}.dropdown-warning .dropdown-content li.disabled.active{background-color:transparent !important}.dropdown-warning .search-wrap input:focus{border-bottom:1px solid #fb3;-webkit-box-shadow:0 1px 0 0 #fb3;box-shadow:0 1px 0 0 #fb3}.dropdown-dark .dropdown-content li.active,.dropdown-dark .dropdown-content li a,.dropdown-dark .dropdown-content li span:hover{background-color:#2e2e2e !important}.dropdown-dark .dropdown-content li.disabled.active{background-color:transparent !important}.dropdown-dark .search-wrap input:focus{border-bottom:1px solid #2e2e2e;-webkit-box-shadow:0 1px 0 0 #2e2e2e;box-shadow:0 1px 0 0 #2e2e2e}.dropdown-ins .dropdown-content li.active,.dropdown-ins .dropdown-content li a,.dropdown-ins .dropdown-content li span:hover{background-color:#2e5e86 !important}.dropdown-ins .dropdown-content li.disabled.active{background-color:transparent !important}.dropdown-ins .search-wrap input:focus{border-bottom:1px solid #2e5e86;-webkit-box-shadow:0 1px 0 0 #2e5e86;box-shadow:0 1px 0 0 #2e5e86}.md-dropdown li.disabled.active{background-color:transparent !important}@media not all and (min-resolution: 0.001dpcm){@supports (-webkit-appearance: none) and (stroke-color: transparent){.select-wrapper.md-form.md-outline input.select-dropdown{padding:0 .75rem}.select-wrapper input.select-dropdown{line-height:2.5rem}}}.switch label{cursor:pointer}.switch label input[type="checkbox"]{opacity:0;width:0;height:0}.switch label input[type="checkbox"]:checked+.lever{background-color:#dccfe2}.switch label input[type="checkbox"]:checked+.lever:after{left:1.5rem;background-color:#a6c}.switch label input[type="checkbox"]:checked:not(:disabled) ~ .lever:active:after{-webkit-box-shadow:0 0.0625rem 0.1875rem 0.0625rem rgba(0,0,0,0.4),0 0 0 0.9375rem rgba(170,102,204,0.1);box-shadow:0 0.0625rem 0.1875rem 0.0625rem rgba(0,0,0,0.4),0 0 0 0.9375rem rgba(170,102,204,0.1)}.switch label input[type="checkbox"]:not(:disabled) ~ .lever:active:after{-webkit-box-shadow:0 0.0625rem 0.1875rem 0.0625rem rgba(0,0,0,0.4),0 0 0 0.9375rem rgba(0,0,0,0.08);box-shadow:0 0.0625rem 0.1875rem 0.0625rem rgba(0,0,0,0.4),0 0 0 0.9375rem rgba(0,0,0,0.08)}.switch label input[type="checkbox"]:disabled+.lever{cursor:default}.switch label input[type="checkbox"]:disabled+.lever:after,.switch label input[type="checkbox"]:disabled:checked+.lever:after{background-color:#bdbdbd}.switch label .lever{position:relative;display:inline-block;margin:0 1rem;margin-right:.625rem;vertical-align:middle;content:"";background-color:#818181;border-radius:.9375rem;width:2.5rem;height:.9375rem;-webkit-transition:background 0.3s ease;transition:background 0.3s ease}.switch label .lever:after{position:absolute;top:-.1875rem;left:-.3125rem;display:inline-block;content:"";background-color:#f1f1f1;border-radius:1.3125rem;-webkit-box-shadow:0 0.0625rem 0.1875rem 0.0625rem rgba(0,0,0,0.4);box-shadow:0 0.0625rem 0.1875rem 0.0625rem rgba(0,0,0,0.4);width:1.3125rem;height:1.3125rem;-webkit-transition:left 0.3s ease,background 0.3s ease,-webkit-box-shadow 1s ease;transition:left 0.3s ease,background 0.3s ease,-webkit-box-shadow 1s ease;transition:left 0.3s ease,background 0.3s ease,box-shadow 1s ease;transition:left 0.3s ease,background 0.3s ease,box-shadow 1s ease,-webkit-box-shadow 1s ease}.file-field{position:relative}.file-field .file-path-wrapper{height:2.5rem;padding-left:10px;overflow:hidden}.file-field input.file-path{width:100%;height:36px}.file-field .btn{float:left}.file-field span{cursor:pointer}.file-field input[type="file"]{position:absolute;top:0;right:0;bottom:0;left:0;width:100%;padding:0;margin:0;cursor:pointer;filter:alpha(opacity=0);opacity:0}.file-field input[type="file"]::-webkit-file-upload-button{display:none}.range-field{position:relative}.range-field input[type="range"]{position:relative;width:100%;padding:0;margin:15px 0;cursor:pointer;background-color:transparent;border:none;border:1px solid #fff;outline:none;-webkit-appearance:none;-moz-appearance:none;appearance:none}.range-field input[type="range"]:focus{outline:none}.range-field input[type="range"]+.thumb{position:absolute;top:10px;width:0;height:0;margin-left:-6px;background-color:#4285f4;border:none;border-radius:50%;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:50% 50%;transform-origin:50% 50%}.range-field input[type="range"]+.thumb .value{display:block;width:30px;font-size:0;color:#4285f4;text-align:center;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.range-field input[type="range"]+.thumb.active{border-radius:50% 50% 50% 0}.range-field input[type="range"]+.thumb.active .value{margin-top:8px;margin-left:-1px;font-size:10px;color:#fff}.range-field input[type="range"]::-webkit-slider-runnable-track{height:3px;background:#c2c0c2;border:none}.range-field input[type="range"]::-webkit-slider-thumb{width:14px;height:14px;margin:-5px 0 0 0;background-color:#4285f4;border:none;border-radius:50%;-webkit-transition:.3s;transition:.3s;-webkit-transform-origin:50% 50%;transform-origin:50% 50%;-webkit-appearance:none;appearance:none}.range-field input[type="range"]:focus::-webkit-slider-runnable-track{background:#ccc}.range-field input[type="range"]::-moz-range-track{height:3px;background:#c2c0c2;border:none}.range-field input[type="range"]::-moz-range-thumb{width:14px;height:14px;margin-top:-5px;background:#4285f4;border:none;border-radius:50%}.range-field input[type="range"]:-moz-focusring{outline:1px solid #fff;outline-offset:-1px}.range-field input[type="range"]:focus::-moz-range-track{background:#c2c0c2}.range-field input[type="range"]::-ms-track{height:3px;color:transparent;background:transparent;border-color:transparent;border-width:6px 0}.range-field input[type="range"]::-ms-fill-lower{background:#c2c0c2}.range-field input[type="range"]::-ms-fill-upper{background:#c2c0c2}.range-field input[type="range"]::-ms-thumb{width:14px;height:14px;background:#4285f4;border:none;border-radius:50%}.range-field input[type="range"]:focus::-ms-fill-lower{background:#c2c0c2}.range-field input[type="range"]:focus::-ms-fill-upper{background:#c2c0c2}.md-form.input-group .input-group-text [type="checkbox"]+label,.input-group .input-group-text [type="checkbox"]+label{padding-left:18px}.md-form.input-group .input-group-text .filled-in[type="checkbox"]+label,.input-group .input-group-text .filled-in[type="checkbox"]+label{height:20px}.md-form.input-group .input-group-text [type="radio"]+label,.input-group .input-group-text [type="radio"]+label{height:24px;padding-left:24px}.mdb-autocomplete{margin-bottom:1px}.mdb-autocomplete::-webkit-search-decoration,.mdb-autocomplete::-webkit-search-cancel-button,.mdb-autocomplete::-webkit-search-results-button,.mdb-autocomplete::-webkit-search-results-decoration{-webkit-appearance:none}button:focus{outline:0 !important}button.mdb-autocomplete-clear{position:absolute;top:.5rem;right:0;z-index:2;cursor:pointer;visibility:hidden;background:transparent;border:none}button.mdb-autocomplete-clear svg{fill:#a6a6a6}.mdb-autocomplete-wrap{position:absolute;right:0;left:0;z-index:100;max-height:210px;padding-left:0;overflow-y:auto;list-style-type:none;background:#fff;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)}.mdb-autocomplete-wrap li{padding:12px 15px;font-size:.875rem;cursor:pointer}.mdb-autocomplete-wrap li:hover{background:#eee}.mdb-autocomplete-wrap li.selected{background-color:#eee}.form-inline .md-form .form-control.mdb-autocomplete{width:15rem}.md-accordion .card{overflow:visible;border-bottom:1px solid #e0e0e0;border-radius:0;-webkit-box-shadow:none;box-shadow:none}.md-accordion .card:first-of-type,.md-accordion .card:not(:first-of-type):not(:last-of-type){border-bottom:1px solid #e0e0e0}.md-accordion .card .card-header{padding:1rem 1.5rem;background:transparent;border-bottom:0}.md-accordion .card .card-header .card-title{font-weight:400}.md-accordion .card .card-header a{-webkit-transition:ease-in-out 0.3s;transition:ease-in-out 0.3s}.md-accordion .card .card-header a:not(.collapsed) .rotate-icon{-webkit-transform:rotate(180deg);transform:rotate(180deg)}.md-accordion .card .fa-angle-down{float:right}.md-accordion .card .card-body{font-size:.9rem;font-weight:300;line-height:1.7;color:#626262}.accordion-gradient-bcg{background:linear-gradient(45deg, rgba(234,21,129,0.6), rgba(10,23,187,0.6) 100%)}.accordion.md-accordion.accordion-1 p,.accordion.md-accordion.accordion-2 p,.accordion.md-accordion.accordion-3 p,.accordion.md-accordion.accordion-4 p,.accordion.md-accordion.accordion-5 p{font-size:1rem}.accordion.md-accordion.accordion-1 .card,.accordion.md-accordion.accordion-2 .card,.accordion.md-accordion.accordion-4 .card,.accordion.md-accordion.accordion-5 .card{border:0}.accordion.md-accordion.accordion-1 .card .card-header,.accordion.md-accordion.accordion-2 .card .card-header,.accordion.md-accordion.accordion-4 .card .card-header,.accordion.md-accordion.accordion-5 .card .card-header{border:0}.accordion.md-accordion.accordion-1 .card .card-body{line-height:1.4}.accordion.md-accordion.accordion-2 .card{background-color:transparent}.accordion.md-accordion.accordion-2 .card .card-body{border:0;border-radius:3px}.accordion.md-accordion.accordion-3{border-radius:3px}.accordion.md-accordion.accordion-3 .fas.fa-angle-down,.accordion.md-accordion.accordion-3 .fab.fa-angle-down,.accordion.md-accordion.accordion-3 .far.fa-angle-down{margin-top:-10px}.accordion.md-accordion.accordion-4 .card:last-of-type .card-body{border-bottom-right-radius:3px;border-bottom-left-radius:3px}.accordion.md-accordion.accordion-5 .card{background-color:transparent}.accordion.md-accordion.accordion-5 .card .card-header{background-color:#f44336;-webkit-transition:.3s;transition:.3s}.accordion.md-accordion.accordion-5 .card .card-header:hover{background-color:#455a64;-webkit-transition:.3s;transition:.3s}.accordion.md-accordion.accordion-5 .card .card-header .fas,.accordion.md-accordion.accordion-5 .card .card-header .fab,.accordion.md-accordion.accordion-5 .card .card-header .far{background-color:#fff;border-top-left-radius:3px}.accordion.md-accordion.accordion-5 .card .card-body{border-bottom-right-radius:3px;border-bottom-left-radius:3px}.accordion.md-accordion.accordion-blocks .card{margin-bottom:1.2rem;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)}.accordion.md-accordion.accordion-blocks .card .card-body{border-top:1px solid #eee}.jarallax-keep-img{position:relative;z-index:0}.jarallax-keep-img>.jarallax-img{position:relative;z-index:-100;display:block;max-width:100%;height:auto}.jarallax{min-height:600px}.jarallax>.jarallax-img{position:absolute;top:0;left:0;z-index:-1;width:100%;height:100%;-o-object-fit:cover;object-fit:cover;font-family:"object-fit: cover;"}.sn-bg-1{background-image:url("https://mdbootstrap.com/img/Photos/Others/sidenav1.jpg")}.sn-bg-2{background-image:url("https://mdbootstrap.com/img/Photos/Others/sidenav2.jpg")}.sn-bg-3{background-image:url("https://mdbootstrap.com/img/Photos/Others/sidenav3.jpg")}.sn-bg-4{background-image:url("https://mdbootstrap.com/img/Photos/Others/sidenav4.jpg")}.side-nav{position:fixed;top:0;left:0;z-index:1040;width:15rem;height:100%;padding:0;padding-bottom:3.75rem;margin:0;overflow:hidden;list-style-type:none;background-color:#2c2f34;background-repeat:no-repeat;background-position:center;background-size:cover;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);-webkit-transform:translateX(-100%);transform:translateX(-100%);-webkit-backface-visibility:hidden;backface-visibility:hidden;will-change:transform}.side-nav.wide{width:15rem;-webkit-transition-timing-function:linear, linear, ease;transition-timing-function:linear, linear, ease;-webkit-transition-duration:.2s, .2s, .35s;transition-duration:.2s, .2s, .35s;-webkit-transition-property:top, bottom, width;transition-property:top, bottom, width}.side-nav.wide .logo-wrapper.sn-ad-avatar-wrapper{height:5rem;padding:19px 10px;border-bottom:1px solid rgba(255,255,255,0.65)}.side-nav.wide .logo-wrapper.sn-ad-avatar-wrapper a{line-height:2.6rem;color:#fff}.side-nav.wide .logo-wrapper.sn-ad-avatar-wrapper a span{padding-left:.7rem;margin-top:-1rem}.side-nav.wide .logo-wrapper.sn-ad-avatar-wrapper a img{max-width:2.5rem;padding:0}.side-nav.wide .collapsible a{padding-left:23px;-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.side-nav.wide .collapsible a .sv-normal{opacity:1;-webkit-transition:all .1s linear;transition:all .1s linear}.side-nav.wide .collapsible a .sv-slim{display:none;opacity:0;-webkit-transition:all .1s linear;transition:all .1s linear}.side-nav.wide .collapsible .sv-slim-icon{width:30px;height:36px;padding-left:0;margin-right:0;text-align:left}.side-nav.wide .collapsible-body a{padding-left:47px}.side-nav.wide .fa-angle-down.rotate-icon{display:block;opacity:1}.side-nav.wide.slim{right:3.75rem;width:3.75rem;-webkit-transition-timing-function:linear, linear, ease;transition-timing-function:linear, linear, ease;-webkit-transition-duration:.2s, .2s, .35s;transition-duration:.2s, .2s, .35s;-webkit-transition-property:top, bottom, width;transition-property:top, bottom, width}.side-nav.wide.slim .collapsible a{padding-left:23px;-webkit-transition:all .3s ease-in-out;transition:all .3s ease-in-out}.side-nav.wide.slim .collapsible a .sv-normal{opacity:0;-webkit-transition:all .1s linear;transition:all .1s linear}.side-nav.wide.slim .collapsible a .sv-slim{display:block;opacity:1;-webkit-transition:all .1s linear;transition:all .1s linear}.side-nav.wide.slim .collapsible .sv-slim-icon{width:30px;height:36px;padding-left:0;margin-right:0;text-align:left}.side-nav.wide.slim .fa-angle-down.rotate-icon{display:none;opacity:0}.side-nav>ul{max-height:100vh}.side-nav ul{padding-left:0;list-style:none;list-style-type:none}.side-nav ul li{padding:0}.side-nav.right-aligned{right:0;left:auto;-webkit-transform:translateX(100%);transform:translateX(100%)}.side-nav.side-nav-light{background-color:#e5e5e5}.side-nav.side-nav-light .logo-wrapper{border-bottom:1px solid rgba(153,153,153,0.3)}.side-nav.side-nav-light .logo-wrapper.sn-ad-avatar-wrapper{color:#555}.side-nav.side-nav-light .about{border-bottom:1px solid rgba(153,153,153,0.3)}.side-nav.side-nav-light .about p{color:#555}.side-nav.side-nav-light .social{border-bottom:1px solid rgba(153,153,153,0.3)}.side-nav.side-nav-light .social .fas,.side-nav.side-nav-light .social .fab,.side-nav.side-nav-light .social .far{color:#555}.side-nav.side-nav-light .search-form input[type="text"]{color:#555 !important;border-bottom-color:rgba(153,153,153,0.3)}.side-nav.side-nav-light .search-form input[type="text"]::-webkit-input-placeholder{color:#555 !important}.side-nav.side-nav-light .search-form input[type="text"]::-moz-placeholder{color:#555 !important}.side-nav.side-nav-light .search-form input[type="text"]:-ms-input-placeholder{color:#555 !important}.side-nav.side-nav-light .search-form input[type="text"]::-ms-input-placeholder{color:#555 !important}.side-nav.side-nav-light .search-form input[type="text"]::placeholder{color:#555 !important}.side-nav.side-nav-light .collapsible a{color:#555}.side-nav.side-nav-light .collapsible-body a{background-color:rgba(0,0,0,0.1)}.side-nav.side-nav-light .collapsible li .collapsible-header:hover{background-color:rgba(0,0,0,0.05)}.side-nav.side-nav-light .collapsible li .collapsible-header.active{color:#4285f4;background-color:transparent}.side-nav.fixed{position:fixed;left:0;-webkit-transform:translateX(0);transform:translateX(0)}.side-nav.fixed.right-aligned{right:0;left:auto}@media only screen and (max-width: 1440px){.side-nav.fixed{-webkit-transform:translateX(-105%);transform:translateX(-105%)}.side-nav.fixed.right-aligned{-webkit-transform:translateX(105%);transform:translateX(105%)}}.side-nav .collapsible{padding:0;margin:0;margin-top:1rem}.side-nav .collapsible li a:hover{background-color:rgba(0,0,0,0.15)}.side-nav .collapsible>li{border-radius:2px}.side-nav .collapsible>li a.collapsible-header:hover{background-color:rgba(255,255,255,0.15)}.side-nav .collapsible>li a.collapsible-header.active{background-color:rgba(255,255,255,0.15)}.side-nav .collapsible ul{padding:0;list-style-type:none}.side-nav .collapsible a{height:36px;font-size:.8rem;font-weight:300;line-height:36px;color:#fff}.side-nav .collapsible a.active,.side-nav .collapsible a:hover{border-radius:2px}.side-nav .collapsible .fas,.side-nav .collapsible .fab,.side-nav .collapsible .far{margin-right:13px;font-size:.8rem}.side-nav .collapsible-body a{height:36px;padding-left:47px;line-height:36px;background-color:rgba(0,0,0,0.15)}.side-nav a{display:block;height:56px;padding-left:20px;font-size:1rem;line-height:56px}.side-nav .fa-angle-down.rotate-icon{position:absolute;top:.8rem;right:0;margin-right:1.25rem}.side-nav .sidenav-bg{top:0;right:0;bottom:0;left:0;z-index:-1;width:15rem;background-attachment:fixed}.side-nav .sidenav-bg:after{position:absolute;top:0;bottom:0;left:0;z-index:-1;display:block;width:100%;height:100%;padding-bottom:99999px;margin-bottom:-99999px;content:""}.side-nav .logo-wrapper{height:8.75rem;border-bottom:1px solid rgba(153,153,153,0.3)}.side-nav .logo-wrapper a{width:15rem;height:8.75rem;padding:0}.side-nav .logo-wrapper img{height:auto;padding-top:20%;padding-right:50px;padding-bottom:20%;padding-left:50px}@media (max-height: 992px){.side-nav .logo-wrapper{height:80px}.side-nav .logo-wrapper a{height:80px}.side-nav .logo-wrapper img{padding-top:7%;padding-bottom:7%}}.side-nav .logo-wrapper.sn-avatar-wrapper{padding-top:10%;padding-right:33%;padding-bottom:10%;padding-left:33%}.side-nav .logo-wrapper.sn-avatar-wrapper img{max-width:90px;padding:0;margin:0;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)}@media only screen and (max-height: 992px){.side-nav .logo-wrapper.sn-avatar-wrapper{padding-right:40%;padding-left:40%}.side-nav .logo-wrapper.sn-avatar-wrapper img{max-width:50px}}.side-nav .logo-wrapper.sn-ad-avatar-wrapper{height:auto;margin-bottom:0}.side-nav .logo-wrapper.sn-ad-avatar-wrapper img{float:left;max-width:3.75rem;padding:1.25rem 0.63rem}.side-nav .logo-wrapper.sn-ad-avatar-wrapper p{padding-top:1.25rem;padding-bottom:1.25rem;margin:0;font-size:.94rem}.side-nav .about{padding:1rem;border-bottom:1px solid rgba(255,255,255,0.65)}.side-nav .about p{margin-bottom:0;text-align:center}.side-nav .social{padding-top:0;text-align:center;border-bottom:1px solid rgba(255,255,255,0.65)}.side-nav .social li{display:inline-block;padding-top:.6rem;padding-bottom:.6rem;margin:0}.side-nav .social a{padding:0;margin:0}.side-nav .social .fas,.side-nav .social .fab,.side-nav .social .far{padding-right:.6rem;padding-left:.6rem;font-size:.9rem;color:#dbe4e7;-webkit-transition:.3s;transition:.3s}.side-nav .social .fas:hover,.side-nav .social .fab:hover,.side-nav .social .far:hover{color:#afc4cb;-webkit-transition:.3s;transition:.3s}.side-nav .search-form{padding:0}.side-nav .search-form input[type="text"]{padding-left:1.88rem;font-weight:300;border-bottom:1px solid rgba(255,255,255,0.65)}.side-nav .search-form input[type="text"]::-webkit-input-placeholder{color:#fff}.side-nav .search-form input[type="text"]::-moz-placeholder{color:#fff}.side-nav .search-form input[type="text"]:-ms-input-placeholder{color:#fff}.side-nav .search-form input[type="text"]::-ms-input-placeholder{color:#fff}.side-nav .search-form input[type="text"]::placeholder{color:#fff}.side-nav .search-form .form-control{margin-bottom:0}.drag-target{position:fixed;top:0;z-index:998;width:10px;height:100%}#sidenav-overlay{position:fixed;top:0;right:0;left:0;z-index:997;height:120vh;background-color:rgba(0,0,0,0.5);will-change:opacity}.transform-fix-input{-webkit-transform:translateX(0) !important;transform:translateX(0) !important}.collection-card .stripe{position:absolute;bottom:3rem;width:100%;padding:1.2rem;text-align:center}.collection-card .stripe.dark{background-color:rgba(0,0,0,0.7)}.collection-card .stripe.dark a p{color:#eee}.collection-card .stripe.light{background-color:rgba(255,255,255,0.7)}.collection-card .stripe.light a p{color:#424242}.collection-card .stripe a p{padding:0;margin:0;letter-spacing:.25rem}.rating{padding:0;color:#ffa000;list-style-type:none}.rating li{display:inline-block}.cart-modal .table,.cart-modal th{text-align:center}.cart-modal .table .total{font-weight:600;text-transform:uppercase}.cart-modal .table .fa-times{color:#4285f4}.card.card-ecommerce .card-footer{background-color:transparent}.card.card-ecommerce .card-footer .discount{color:#9e9e9e}.card.card-ecommerce .card-footer a{color:#757575;-webkit-transition:.4s;transition:.4s}.card.card-ecommerce .card-footer a:hover{color:#d50000;-webkit-transition:.4s;transition:.4s}.card.card-ecommerce .card-footer a.active{color:#d50000}.product-table .btn.btn-sm{padding:.3rem .6rem}.carousel-multi-item{margin-bottom:5rem}.carousel-multi-item .carousel-inner .carousel-item.active,.carousel-multi-item .carousel-item-next,.carousel-multi-item .carousel-item-prev{display:block}.carousel-multi-item .carousel-inner.v-2 .carousel-item.active,.carousel-multi-item .carousel-inner.v-2 .carousel-item-next,.carousel-multi-item .carousel-inner.v-2 .carousel-item-prev{display:-webkit-box;display:-ms-flexbox;display:flex}.carousel-multi-item .carousel-inner.v-2 .carousel-item-right.active,.carousel-multi-item .carousel-inner.v-2 .carousel-item-next{-webkit-transform:translateX(33%);transform:translateX(33%)}.carousel-multi-item .carousel-inner.v-2 .carousel-item-left.active,.carousel-multi-item .carousel-inner.v-2 .carousel-item-prev{-webkit-transform:translateX(-33%);transform:translateX(-33%)}.carousel-multi-item .carousel-inner.v-2 .carousel-item-right,.carousel-multi-item .carousel-inner.v-2 .carousel-item-left{-webkit-transform:translateX(0);transform:translateX(0)}.carousel-multi-item .carousel-indicators li{width:1.25rem;max-width:1.25rem;height:1.25rem;margin-bottom:-3.75rem;background-color:#4285f4}.carousel-multi-item .carousel-indicators .active{width:1.56rem;max-width:1.56rem;height:1.56rem;background-color:#4285f4;border-radius:50%}.carousel-multi-item .controls-top{margin-bottom:1.88rem;text-align:center}.carousel-multi-item .controls-top .btn-floating{background:#4285f4}.carousel-multi-item .carousel-indicators{margin-bottom:-2em}.carousel-multi-item .card-cascade.narrower{margin-top:1.25rem;margin-bottom:.3rem}@media (min-width: 768px){.carousel-multi-item .col-md-4{float:left;width:33.333333%;max-width:100%}}@media only screen and (max-width: 992px){.carousel-multi-item .carousel-indicators li{margin-bottom:-1.88rem}}.carousel-thumbnails .carousel-indicators{position:static;left:initial;width:initial;margin-right:initial;margin-left:initial;overflow-x:auto;white-space:nowrap}.carousel-thumbnails .carousel-indicators>li{width:initial;height:initial;text-indent:initial}.carousel-thumbnails .carousel-indicators>li .active img{opacity:1}.wrapper-carousel-fix .carousel-fade .active.carousel-item-left,.wrapper-carousel-fix .carousel-fade .active.carousel-item-right{-webkit-transition:-webkit-transform .6s ease;transition:-webkit-transform .6s ease;transition:transform .6s ease;transition:transform .6s ease, -webkit-transform .6s ease;-webkit-transition-property:opacity;transition-property:opacity}.comments-list .avatar,.reply-form .avatar{max-width:100px}.md-toast-title{font-weight:400}.md-toast-message{word-wrap:break-word}.md-toast-message a:hover{color:#ccc;text-decoration:none}.md-toast-close-button{position:relative;top:-.3em;right:-.3em;float:right;font-size:1.25rem;font-weight:400;text-shadow:0 1px 0 #fff;filter:alpha(opacity=80);opacity:.8}.md-toast-close-button:hover,.md-toast-close-button:focus{text-decoration:none;cursor:pointer;filter:alpha(opacity=40);opacity:.4}button.md-toast-close-button{padding:0;cursor:pointer;background:transparent;border:0;-webkit-appearance:none;-moz-appearance:none;appearance:none}.md-toast-top-center{top:0;right:0;width:100%}.md-toast-bottom-center{right:0;bottom:0;width:100%}.md-toast-top-full-width{top:0;right:0;width:100%}.md-toast-bottom-full-width{right:0;bottom:0;width:100%}.md-toast-top-left{top:12px;left:12px}.md-toast-top-right{top:12px;right:12px}.md-toast-bottom-right{right:12px;bottom:12px}.md-toast-bottom-left{bottom:12px;left:12px}#toast-container{position:fixed;z-index:999999}#toast-container *{-webkit-box-sizing:border-box;box-sizing:border-box}#toast-container>div{position:relative;width:18.75rem;padding:15px 15px 15px 50px;margin:0 0 6px;overflow:hidden;filter:alpha(opacity=95);background-repeat:no-repeat;background-position:15px center;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);opacity:.95}#toast-container>:hover{cursor:pointer;filter:alpha(opacity=100);-webkit-box-shadow:0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);box-shadow:0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);opacity:1;-webkit-transition:.45s;transition:.45s}#toast-container.md-toast-top-center>div,#toast-container.md-toast-bottom-center>div{width:18.75rem;margin:auto}#toast-container.md-toast-top-full-width>div,#toast-container.md-toast-bottom-full-width>div{width:96%;margin:auto}.md-toast{background-color:#030303}.md-toast-success{background-color:#00c851;background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADsSURBVEhLY2AYBfQMgf///3P8+/evAIgvA/FsIF+BavYDDWMBGroaSMMBiE8VC7AZDrIFaMFnii3AZTjUgsUUWUDA8OdAH6iQbQEhw4HyGsPEcKBXBIC4ARhex4G4BsjmweU1soIFaGg/WtoFZRIZdEvIMhxkCCjXIVsATV6gFGACs4Rsw0EGgIIH3QJYJgHSARQZDrWAB+jawzgs+Q2UO49D7jnRSRGoEFRILcdmEMWGI0cm0JJ2QpYA1RDvcmzJEWhABhD/pqrL0S0CWuABKgnRki9lLseS7g2AlqwHWQSKH4oKLrILpRGhEQCw2LiRUIa4lwAAAABJRU5ErkJggg==") !important}.md-toast-error{background-color:#ff3547;background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHOSURBVEhLrZa/SgNBEMZzh0WKCClSCKaIYOED+AAKeQQLG8HWztLCImBrYadgIdY+gIKNYkBFSwu7CAoqCgkkoGBI/E28PdbLZmeDLgzZzcx83/zZ2SSXC1j9fr+I1Hq93g2yxH4iwM1vkoBWAdxCmpzTxfkN2RcyZNaHFIkSo10+8kgxkXIURV5HGxTmFuc75B2RfQkpxHG8aAgaAFa0tAHqYFfQ7Iwe2yhODk8+J4C7yAoRTWI3w/4klGRgR4lO7Rpn9+gvMyWp+uxFh8+H+ARlgN1nJuJuQAYvNkEnwGFck18Er4q3egEc/oO+mhLdKgRyhdNFiacC0rlOCbhNVz4H9FnAYgDBvU3QIioZlJFLJtsoHYRDfiZoUyIxqCtRpVlANq0EU4dApjrtgezPFad5S19Wgjkc0hNVnuF4HjVA6C7QrSIbylB+oZe3aHgBsqlNqKYH48jXyJKMuAbiyVJ8KzaB3eRc0pg9VwQ4niFryI68qiOi3AbjwdsfnAtk0bCjTLJKr6mrD9g8iq/S/B81hguOMlQTnVyG40wAcjnmgsCNESDrjme7wfftP4P7SP4N3CJZdvzoNyGq2c/HWOXJGsvVg+RA/k2MC/wN6I2YA2Pt8GkAAAAASUVORK5CYII=") !important}.md-toast-info{background-color:#33b5e5;background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGwSURBVEhLtZa9SgNBEMc9sUxxRcoUKSzSWIhXpFMhhYWFhaBg4yPYiWCXZxBLERsLRS3EQkEfwCKdjWJAwSKCgoKCcudv4O5YLrt7EzgXhiU3/4+b2ckmwVjJSpKkQ6wAi4gwhT+z3wRBcEz0yjSseUTrcRyfsHsXmD0AmbHOC9Ii8VImnuXBPglHpQ5wwSVM7sNnTG7Za4JwDdCjxyAiH3nyA2mtaTJufiDZ5dCaqlItILh1NHatfN5skvjx9Z38m69CgzuXmZgVrPIGE763Jx9qKsRozWYw6xOHdER+nn2KkO+Bb+UV5CBN6WC6QtBgbRVozrahAbmm6HtUsgtPC19tFdxXZYBOfkbmFJ1VaHA1VAHjd0pp70oTZzvR+EVrx2Ygfdsq6eu55BHYR8hlcki+n+kERUFG8BrA0BwjeAv2M8WLQBtcy+SD6fNsmnB3AlBLrgTtVW1c2QN4bVWLATaIS60J2Du5y1TiJgjSBvFVZgTmwCU+dAZFoPxGEEs8nyHC9Bwe2GvEJv2WXZb0vjdyFT4Cxk3e/kIqlOGoVLwwPevpYHT+00T+hWwXDf4AJAOUqWcDhbwAAAAASUVORK5CYII=") !important}.md-toast-warning{background-color:#fb3;background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGYSURBVEhL5ZSvTsNQFMbXZGICMYGYmJhAQIJAICYQPAACiSDB8AiICQQJT4CqQEwgJvYASAQCiZiYmJhAIBATCARJy+9rTsldd8sKu1M0+dLb057v6/lbq/2rK0mS/TRNj9cWNAKPYIJII7gIxCcQ51cvqID+GIEX8ASG4B1bK5gIZFeQfoJdEXOfgX4QAQg7kH2A65yQ87lyxb27sggkAzAuFhbbg1K2kgCkB1bVwyIR9m2L7PRPIhDUIXgGtyKw575yz3lTNs6X4JXnjV+LKM/m3MydnTbtOKIjtz6VhCBq4vSm3ncdrD2lk0VgUXSVKjVDJXJzijW1RQdsU7F77He8u68koNZTz8Oz5yGa6J3H3lZ0xYgXBK2QymlWWA+RWnYhskLBv2vmE+hBMCtbA7KX5drWyRT/2JsqZ2IvfB9Y4bWDNMFbJRFmC9E74SoS0CqulwjkC0+5bpcV1CZ8NMej4pjy0U+doDQsGyo1hzVJttIjhQ7GnBtRFN1UarUlH8F3xict+HY07rEzoUGPlWcjRFRr4/gChZgc3ZL2d8oAAAAASUVORK5CYII=") !important}.md-toast-progress{position:absolute;bottom:0;left:0;height:4px;background-color:#000;filter:alpha(opacity=40);opacity:.4}.collapsible .active .rotate-icon{-webkit-transition:all 150ms ease-in 0s;transition:all 150ms ease-in 0s;-webkit-transform:rotate(180deg);transform:rotate(180deg)}.md-progress{position:relative;display:block;width:100%;height:.25rem;margin-bottom:1rem;overflow:hidden;background-color:#eee;-webkit-box-shadow:none;box-shadow:none}.md-progress .progress-bar{height:.25rem;background-color:#0d47a1;border-radius:0;-webkit-box-shadow:none;box-shadow:none}.md-progress .progress-bar-animated{-webkit-transition:width 2s ease-in-out;transition:width 2s ease-in-out}.md-progress .indeterminate{background-color:#90caf9}.md-progress .indeterminate:before{position:absolute;top:0;bottom:0;left:0;content:"";background-color:inherit;-webkit-animation:indeterminate 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;animation:indeterminate 2.1s cubic-bezier(0.65, 0.815, 0.735, 0.395) infinite;will-change:left, right}.md-progress .indeterminate:after{position:absolute;top:0;bottom:0;left:0;content:"";background-color:inherit;-webkit-animation:indeterminate 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;animation:indeterminate 2.1s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;-webkit-animation-delay:1.15s;animation-delay:1.15s;will-change:left, right}@-webkit-keyframes indeterminate{0%{right:100%;left:-35%}60%{right:-90%;left:100%}100%{right:-90%;left:100%}}@keyframes indeterminate{0%{right:100%;left:-35%}60%{right:-90%;left:100%}100%{right:-90%;left:100%}}@-webkit-keyframes indeterminate-short{0%{right:100%;left:-200%}60%{right:-8%;left:107%}100%{right:-8%;left:107%}}@keyframes indeterminate-short{0%{right:100%;left:-200%}60%{right:-8%;left:107%}100%{right:-8%;left:107%}}.preloader-wrapper{position:relative;display:inline-block;width:3rem;height:3rem;font-size:0}.preloader-wrapper.small{width:2.25rem;height:2.25rem}.preloader-wrapper.big{width:4rem;height:4rem}.preloader-wrapper.active{-webkit-animation:container-rotate 1568ms linear infinite;animation:container-rotate 1568ms linear infinite}.preloader-wrapper.crazy{-webkit-animation-duration:333ms;animation-duration:333ms}.preloader-wrapper .spinner-layer{position:absolute;width:100%;height:100%;opacity:0}.preloader-wrapper .spinner-layer .gap-patch{position:absolute;top:0;left:45%;width:10%;height:100%;overflow:hidden;border-color:inherit}.preloader-wrapper .spinner-layer .gap-patch .circle{left:-450%;width:1000%}.preloader-wrapper .spinner-layer .circle-clipper{position:relative;display:inline-block;width:50%;height:100%;overflow:hidden;border-color:inherit}.preloader-wrapper .spinner-layer .circle-clipper .circle{position:absolute;top:0;right:0;bottom:0;width:200%;height:100%;border-color:inherit;border-style:solid;border-width:.1875rem;border-bottom-color:transparent !important;border-radius:50%;-webkit-animation:none;animation:none}.preloader-wrapper .spinner-layer .circle-clipper.left .circle{left:0;border-right-color:transparent !important;-webkit-transform:rotate(129deg);transform:rotate(129deg)}.preloader-wrapper .spinner-layer .circle-clipper.right .circle{left:-100%;border-left-color:transparent !important;-webkit-transform:rotate(-129deg);transform:rotate(-129deg)}.preloader-wrapper .spinner-blue,.preloader-wrapper .spinner-blue-only{border-color:#4285f4}.preloader-wrapper .spinner-red,.preloader-wrapper .spinner-red-only{border-color:#db4437}.preloader-wrapper .spinner-yellow,.preloader-wrapper .spinner-yellow-only{border-color:#f4b400}.preloader-wrapper .spinner-green,.preloader-wrapper .spinner-green-only{border-color:#0f9d58}@-webkit-keyframes container-rotate{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes container-rotate{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.active .spinner-layer.spinner-blue{-webkit-animation:fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both,blue-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;animation:fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both,blue-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both}.active .spinner-layer.spinner-red{-webkit-animation:fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both,red-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;animation:fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both,red-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both}.active .spinner-layer.spinner-yellow{-webkit-animation:fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both,yellow-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;animation:fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both,yellow-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both}.active .spinner-layer.spinner-green{-webkit-animation:fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both,green-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;animation:fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both,green-fade-in-out 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both}.active .spinner-layer.spinner-blue-only,.active .spinner-layer.spinner-red-only,.active .spinner-layer.spinner-yellow-only,.active .spinner-layer.spinner-green-only,.active .spinner-layer.spinner-primary-color-only{opacity:1;-webkit-animation:fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;animation:fill-unfill-rotate 5332ms cubic-bezier(0.4, 0, 0.2, 1) infinite both}.active .circle-clipper.left .circle{-webkit-animation:left-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;animation:left-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both}.active .circle-clipper.right .circle{-webkit-animation:right-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both;animation:right-spin 1333ms cubic-bezier(0.4, 0, 0.2, 1) infinite both}@-webkit-keyframes fill-unfill-rotate{12.5%{-webkit-transform:rotate(135deg);transform:rotate(135deg)}25%{-webkit-transform:rotate(270deg);transform:rotate(270deg)}37.5%{-webkit-transform:rotate(405deg);transform:rotate(405deg)}50%{-webkit-transform:rotate(540deg);transform:rotate(540deg)}62.5%{-webkit-transform:rotate(675deg);transform:rotate(675deg)}75%{-webkit-transform:rotate(810deg);transform:rotate(810deg)}87.5%{-webkit-transform:rotate(945deg);transform:rotate(945deg)}to{-webkit-transform:rotate(1080deg);transform:rotate(1080deg)}}@keyframes fill-unfill-rotate{12.5%{-webkit-transform:rotate(135deg);transform:rotate(135deg)}25%{-webkit-transform:rotate(270deg);transform:rotate(270deg)}37.5%{-webkit-transform:rotate(405deg);transform:rotate(405deg)}50%{-webkit-transform:rotate(540deg);transform:rotate(540deg)}62.5%{-webkit-transform:rotate(675deg);transform:rotate(675deg)}75%{-webkit-transform:rotate(810deg);transform:rotate(810deg)}87.5%{-webkit-transform:rotate(945deg);transform:rotate(945deg)}to{-webkit-transform:rotate(1080deg);transform:rotate(1080deg)}}@-webkit-keyframes blue-fade-in-out{from{opacity:1}25%{opacity:1}26%{opacity:0}89%{opacity:0}90%{opacity:1}100%{opacity:1}}@keyframes blue-fade-in-out{from{opacity:1}25%{opacity:1}26%{opacity:0}89%{opacity:0}90%{opacity:1}100%{opacity:1}}@-webkit-keyframes red-fade-in-out{from{opacity:0}15%{opacity:0}25%{opacity:1}50%{opacity:1}51%{opacity:0}}@keyframes red-fade-in-out{from{opacity:0}15%{opacity:0}25%{opacity:1}50%{opacity:1}51%{opacity:0}}@-webkit-keyframes yellow-fade-in-out{from{opacity:0}40%{opacity:0}50%{opacity:1}75%{opacity:1}76%{opacity:0}}@keyframes yellow-fade-in-out{from{opacity:0}40%{opacity:0}50%{opacity:1}75%{opacity:1}76%{opacity:0}}@-webkit-keyframes green-fade-in-out{from{opacity:0}65%{opacity:0}75%{opacity:1}90%{opacity:1}100%{opacity:0}}@keyframes green-fade-in-out{from{opacity:0}65%{opacity:0}75%{opacity:1}90%{opacity:1}100%{opacity:0}}@-webkit-keyframes left-spin{from{-webkit-transform:rotate(130deg);transform:rotate(130deg)}50%{-webkit-transform:rotate(-5deg);transform:rotate(-5deg)}to{-webkit-transform:rotate(130deg);transform:rotate(130deg)}}@keyframes left-spin{from{-webkit-transform:rotate(130deg);transform:rotate(130deg)}50%{-webkit-transform:rotate(-5deg);transform:rotate(-5deg)}to{-webkit-transform:rotate(130deg);transform:rotate(130deg)}}@-webkit-keyframes right-spin{from{-webkit-transform:rotate(-130deg);transform:rotate(-130deg)}50%{-webkit-transform:rotate(5deg);transform:rotate(5deg)}to{-webkit-transform:rotate(-130deg);transform:rotate(-130deg)}}@keyframes right-spin{from{-webkit-transform:rotate(-130deg);transform:rotate(-130deg)}50%{-webkit-transform:rotate(5deg);transform:rotate(5deg)}to{-webkit-transform:rotate(-130deg);transform:rotate(-130deg)}}#spinnerContainer.cooldown{-webkit-animation:container-rotate 1568ms linear infinite,fade-out 400ms cubic-bezier(0.4, 0, 0.2, 1);animation:container-rotate 1568ms linear infinite,fade-out 400ms cubic-bezier(0.4, 0, 0.2, 1)}@-webkit-keyframes fade-out{from{opacity:1}to{opacity:0}}@keyframes fade-out{from{opacity:1}to{opacity:0}}#mdb-preloader{position:fixed;top:0;right:0;bottom:0;left:0;z-index:9998;width:100%;height:100%;background-color:#000}.ps{overflow:hidden !important;-ms-touch-action:auto;touch-action:auto;overflow-anchor:none;-ms-overflow-style:none}.ps__rail-x{position:absolute;bottom:0;display:none;height:15px;opacity:0;-webkit-transition:background-color .2s linear, opacity .2s linear;transition:background-color .2s linear, opacity .2s linear}.ps__rail-y{position:absolute;right:0;display:none;width:15px;opacity:0;-webkit-transition:background-color .2s linear, opacity .2s linear;transition:background-color .2s linear, opacity .2s linear}.ps--active-x>.ps__rail-x,.ps--active-y>.ps__rail-y{display:block;background-color:transparent}.ps:hover>.ps__rail-x,.ps:hover>.ps__rail-y,.ps--focus>.ps__rail-x,.ps--focus>.ps__rail-y,.ps--scrolling-x>.ps__rail-x,.ps--scrolling-y>.ps__rail-y{opacity:.6}.ps .ps__rail-x:hover,.ps .ps__rail-y:hover,.ps .ps__rail-x:focus,.ps .ps__rail-y:focus,.ps .ps__rail-x.ps--clicking,.ps .ps__rail-y.ps--clicking{background-color:#eee;opacity:.9}.ps__thumb-x{position:absolute;bottom:2px;height:6px;background-color:#aaa;border-radius:6px;-webkit-transition:background-color .2s linear, height .2s ease-in-out;transition:background-color .2s linear, height .2s ease-in-out}.ps__thumb-y{position:absolute;right:2px;width:6px;background-color:#aaa;border-radius:6px;-webkit-transition:background-color .2s linear, width .2s ease-in-out;transition:background-color .2s linear, width .2s ease-in-out}.ps__rail-x:hover>.ps__thumb-x,.ps__rail-x:focus>.ps__thumb-x,.ps__rail-x.ps--clicking .ps__thumb-x{height:11px;background-color:#999}.ps__rail-y:hover>.ps__thumb-y,.ps__rail-y:focus>.ps__thumb-y,.ps__rail-y.ps--clicking .ps__thumb-y{width:11px;background-color:#999}@supports (-ms-overflow-style: none){.ps{overflow:auto !important}}@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none){.ps{overflow:auto !important}}.ps__rail-y{top:0 !important}.navbar .mega-dropdown{position:static}.navbar .mega-dropdown .dropdown-menu.mega-menu{width:100%;border:none;border-radius:0}.navbar .mega-dropdown .dropdown-menu.mega-menu .sub-menu .news-title{font-size:1.1rem;-webkit-transition:.2s;transition:.2s}.navbar .mega-dropdown .dropdown-menu.mega-menu .sub-menu .news-title.smaller{font-size:1rem;font-weight:400;line-height:1.4}.navbar .mega-dropdown .dropdown-menu.mega-menu .sub-menu .sub-title{border-bottom:1px solid #e0e0e0}.navbar .mega-dropdown .dropdown-menu.mega-menu .sub-menu ul li a{width:100%;-webkit-transition:.3s;transition:.3s}.navbar .mega-dropdown .dropdown-menu.mega-menu .sub-menu ul li a:hover{background-color:rgba(0,0,0,0.2);-webkit-transition:.3s;transition:.3s}.navbar .mega-dropdown .dropdown-menu.mega-menu.v-1 .sub-menu .news-single{border-bottom:1px solid #e0e0e0}.navbar .mega-dropdown .dropdown-menu.mega-menu.v-1 .sub-menu .news-title{color:#4f4f4f}.navbar .mega-dropdown .dropdown-menu.mega-menu.v-1 .sub-menu .news-title:hover{color:#2196f3}.navbar .mega-dropdown .dropdown-menu.mega-menu.v-1 .sub-menu .m-sm{margin-bottom:-6px;font-size:.9rem;color:#2196f3}.navbar .mega-dropdown .dropdown-menu.mega-menu.v-1 .sub-menu .m-sm:hover{color:#2196f3}.navbar .mega-dropdown .dropdown-menu.mega-menu.v-2 .sub-menu .news-title{color:#fff}.navbar .mega-dropdown .dropdown-menu.mega-menu.v-2 .sub-menu ul li a{color:#fff}.navbar .mega-dropdown .dropdown-menu.mega-menu.v-2 .sub-menu ul li a:hover{color:#fff}.navbar .mega-dropdown .dropdown-menu.mega-menu.v-2 .sub-menu .sub-title{padding-bottom:1rem;margin-bottom:1rem}.navbar .mega-dropdown .dropdown-menu.mega-menu.v-3 .sub-menu ul li a{color:#fff}.navbar .mega-dropdown .dropdown-menu.mega-menu.v-3 .sub-menu ul li a:hover{color:#fff}.navbar .mega-dropdown .dropdown-menu.mega-menu.v-3 .sub-menu .news-title{color:#fff}.navbar .mega-dropdown .dropdown-menu.mega-menu.v-3 .sub-menu .news-title:hover{color:#e0e0e0}@media (max-width: 1024px){.navbar .mega-dropdown .dropdown-menu.mega-menu{max-height:300px;overflow-x:hidden;overflow-y:auto}}.navbar .dropdown.multi-level-dropdown .dropdown-menu .dropdown-submenu{position:relative}.navbar .dropdown.multi-level-dropdown .dropdown-menu .dropdown-submenu .dropdown-menu{top:0;left:100%}.navbar .dropdown.multi-level-dropdown .dropdown-menu .dropdown-submenu .dropdown-menu.r-100{right:100%}.navbar .dropdown.multi-level-dropdown .dropdown-menu .dropdown-submenu .dropdown-menu.l-auto{left:auto}.navbar .dropdown.multi-level-dropdown .dropdown-menu .dropdown-item{width:100%;-webkit-transition:.3s;transition:.3s}.navbar .dropdown.multi-level-dropdown .dropdown-menu .dropdown-item:hover{background-color:rgba(0,0,0,0.2);border-radius:0;-webkit-box-shadow:none;box-shadow:none;-webkit-transition:.3s;transition:.3s}.md-tooltip.show,.md-tooltip-main.show,.md-tooltip-email.show{opacity:1 !important}.md-inner{min-height:24px !important;padding:7px 8px;font-size:10px;background:rgba(97,97,97,0.9) !important;border-radius:4px}.md-arrow{display:none}.md-inner-main{min-height:32px !important;padding:9px 16px;font-size:14px;background:rgba(97,97,97,0.9) !important;border-radius:4px}.md-tooltip,.md-tooltip-main{line-height:1}.md-inner-email{padding-right:12px;padding-left:12px;font-size:12px;background-color:#232f34 !important;border-radius:25px}.test-skin .gradient{background:#fff;background:linear-gradient(135deg, #fff 0%, #fff 100%)}.test-skin .primary-color,.test-skin ul.stepper li.active a .circle,ul.stepper li.active a .test-skin .circle,.test-skin ul.stepper li.completed a .circle,ul.stepper li.completed a .test-skin .circle{background-color:#fff !important}.test-skin .navbar{color:#fff;background-color:#fff}.test-skin .navbar .navbar-nav .nav-item .dropdown-menu a{color:#000}.test-skin .navbar .navbar-nav .nav-item .dropdown-menu a:hover,.test-skin .navbar .navbar-nav .nav-item .dropdown-menu a:focus,.test-skin .navbar .navbar-nav .nav-item .dropdown-menu a:active{background-color:#f2f2f2}.test-skin .navbar.double-nav a{color:#fff}.test-skin .navbar form .md-form .form-control{font-weight:300;color:#fff}.test-skin .navbar form .md-form .form-control::-webkit-input-placeholder{color:#fff}.test-skin .navbar form .md-form .form-control::-moz-placeholder{color:#fff}.test-skin .navbar form .md-form .form-control:-ms-input-placeholder{color:#fff}.test-skin .navbar form .md-form .form-control::-ms-input-placeholder{color:#fff}.test-skin .navbar form .md-form .form-control::placeholder{color:#fff}.test-skin .page-footer{background-color:#fff}.test-skin .side-nav{background-color:#fff}.test-skin .side-nav .logo-wrapper>div{background-color:transparent !important}.test-skin .side-nav .sn-avatar-wrapper img{border:3px solid #d9d9d9}.test-skin .side-nav .social{border-bottom:1px solid rgba(153,153,153,0.3)}.test-skin .side-nav .social a:hover .fas,.test-skin .side-nav .social a:hover .fab,.test-skin .side-nav .social a:hover .far{color:#fff !important;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.test-skin .side-nav .collapsible li{background-color:transparent}.test-skin .side-nav .collapsible li .collapsible-header{color:#fff;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.test-skin .side-nav .collapsible li .collapsible-header.active{background-color:#fff}.test-skin .side-nav .collapsible li .collapsible-header:hover{background-color:#fff}.test-skin .side-nav .collapsible li .collapsible-body a{color:#fff}.test-skin .side-nav .collapsible li .collapsible-body a:hover,.test-skin .side-nav .collapsible li .collapsible-body a.active,.test-skin .side-nav .collapsible li .collapsible-body a:active{color:#fff}.test-skin .side-nav .collapsible li .collapsible-body a .fas,.test-skin .side-nav .collapsible li .collapsible-body a .fab,.test-skin .side-nav .collapsible li .collapsible-body a .far{color:#fff}.test-skin .side-nav .collapsible li a:not(.collapsible-header){color:#fff;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.test-skin .side-nav .collapsible li a:not(.collapsible-header):hover,.test-skin .side-nav .collapsible li a:not(.collapsible-header).active,.test-skin .side-nav .collapsible li a:not(.collapsible-header):active{color:#fff !important}.test-skin .side-nav .sidenav-bg:after,.test-skin .side-nav .sidenav-bg.mask-strong:after{background:#fff}.test-skin .side-nav .sidenav-bg.mask-light:after{background:#fff}.test-skin .side-nav .sidenav-bg.mask-slight:after{background:#fff}.test-skin .btn-primary{color:#000;background-color:#fff !important}.test-skin .btn-primary:hover{color:#000;background-color:#fff}.test-skin .btn-primary:focus,.test-skin .btn-primary.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.test-skin .btn-primary:focus,.test-skin .btn-primary:active,.test-skin .btn-primary.active{background-color:#ccc}.test-skin .btn-primary.dropdown-toggle{background-color:#fff !important}.test-skin .btn-primary.dropdown-toggle:hover,.test-skin .btn-primary.dropdown-toggle:focus{background-color:#fff !important}.test-skin .btn-primary:not([disabled]):not(.disabled):active,.test-skin .btn-primary:not([disabled]):not(.disabled).active,.show>.test-skin .btn-primary.dropdown-toggle{background-color:#ccc !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.test-skin .btn-primary:not([disabled]):not(.disabled):active:focus,.test-skin .btn-primary:not([disabled]):not(.disabled).active:focus,.show>.test-skin .btn-primary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.test-skin .primary-ic{color:#fff !important}.test-skin .primary-ic:hover,.test-skin .primary-ic:focus{color:#fff}.test-skin a.btn:not([href]):not([tabindex]),.test-skin a.btn:not([href]):not([tabindex]):focus,.test-skin a.btn:not([href]):not([tabindex]):hover{color:#000}.test-skin table.table a.btn.btn-primary{color:#000}.test-skin .btn-secondary{color:#000;background-color:#fff !important}.test-skin .btn-secondary:hover{color:#000;background-color:#fff}.test-skin .btn-secondary:focus,.test-skin .btn-secondary.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.test-skin .btn-secondary:focus,.test-skin .btn-secondary:active,.test-skin .btn-secondary.active{background-color:#ccc}.test-skin .btn-secondary.dropdown-toggle{background-color:#fff !important}.test-skin .btn-secondary.dropdown-toggle:hover,.test-skin .btn-secondary.dropdown-toggle:focus{background-color:#fff !important}.test-skin .btn-secondary:not([disabled]):not(.disabled):active,.test-skin .btn-secondary:not([disabled]):not(.disabled).active,.show>.test-skin .btn-secondary.dropdown-toggle{background-color:#ccc !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.test-skin .btn-secondary:not([disabled]):not(.disabled):active:focus,.test-skin .btn-secondary:not([disabled]):not(.disabled).active:focus,.show>.test-skin .btn-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.test-skin .secondary-ic{color:#fff !important}.test-skin .secondary-ic:hover,.test-skin .secondary-ic:focus{color:#fff}.test-skin a.btn:not([href]):not([tabindex]),.test-skin a.btn:not([href]):not([tabindex]):focus,.test-skin a.btn:not([href]):not([tabindex]):hover{color:#000}.test-skin table.table a.btn.btn-secondary{color:#000}.test-skin .btn-default{color:#000;background-color:#fff !important}.test-skin .btn-default:hover{color:#000;background-color:#fff}.test-skin .btn-default:focus,.test-skin .btn-default.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.test-skin .btn-default:focus,.test-skin .btn-default:active,.test-skin .btn-default.active{background-color:#ccc}.test-skin .btn-default.dropdown-toggle{background-color:#fff !important}.test-skin .btn-default.dropdown-toggle:hover,.test-skin .btn-default.dropdown-toggle:focus{background-color:#fff !important}.test-skin .btn-default:not([disabled]):not(.disabled):active,.test-skin .btn-default:not([disabled]):not(.disabled).active,.show>.test-skin .btn-default.dropdown-toggle{background-color:#ccc !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.test-skin .btn-default:not([disabled]):not(.disabled):active:focus,.test-skin .btn-default:not([disabled]):not(.disabled).active:focus,.show>.test-skin .btn-default.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.test-skin .default-ic{color:#fff !important}.test-skin .default-ic:hover,.test-skin .default-ic:focus{color:#fff}.test-skin a.btn:not([href]):not([tabindex]),.test-skin a.btn:not([href]):not([tabindex]):focus,.test-skin a.btn:not([href]):not([tabindex]):hover{color:#000}.test-skin table.table a.btn.btn-default{color:#000}.test-skin .btn-outline-primary{color:#fff !important;background-color:transparent !important;border:2px solid #fff !important}.test-skin .btn-outline-primary:hover,.test-skin .btn-outline-primary:focus,.test-skin .btn-outline-primary:active,.test-skin .btn-outline-primary:active:focus,.test-skin .btn-outline-primary.active{color:#fff !important;background-color:transparent !important;border-color:#fff !important}.test-skin .btn-outline-primary:not([disabled]):not(.disabled):active,.test-skin .btn-outline-primary:not([disabled]):not(.disabled).active,.show>.test-skin .btn-outline-primary.dropdown-toggle{background-color:transparent !important;border-color:#fff !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.test-skin .btn-outline-primary:not([disabled]):not(.disabled):active:focus,.test-skin .btn-outline-primary:not([disabled]):not(.disabled).active:focus,.show>.test-skin .btn-outline-primary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.test-skin .btn-outline-secondary{color:#fff !important;background-color:transparent !important;border:2px solid #fff !important}.test-skin .btn-outline-secondary:hover,.test-skin .btn-outline-secondary:focus,.test-skin .btn-outline-secondary:active,.test-skin .btn-outline-secondary:active:focus,.test-skin .btn-outline-secondary.active{color:#fff !important;background-color:transparent !important;border-color:#fff !important}.test-skin .btn-outline-secondary:not([disabled]):not(.disabled):active,.test-skin .btn-outline-secondary:not([disabled]):not(.disabled).active,.show>.test-skin .btn-outline-secondary.dropdown-toggle{background-color:transparent !important;border-color:#fff !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.test-skin .btn-outline-secondary:not([disabled]):not(.disabled):active:focus,.test-skin .btn-outline-secondary:not([disabled]):not(.disabled).active:focus,.show>.test-skin .btn-outline-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.test-skin .btn-outline-default{color:#fff !important;background-color:transparent !important;border:2px solid #fff !important}.test-skin .btn-outline-default:hover,.test-skin .btn-outline-default:focus,.test-skin .btn-outline-default:active,.test-skin .btn-outline-default:active:focus,.test-skin .btn-outline-default.active{color:#fff !important;background-color:transparent !important;border-color:#fff !important}.test-skin .btn-outline-default:not([disabled]):not(.disabled):active,.test-skin .btn-outline-default:not([disabled]):not(.disabled).active,.show>.test-skin .btn-outline-default.dropdown-toggle{background-color:transparent !important;border-color:#fff !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.test-skin .btn-outline-default:not([disabled]):not(.disabled):active:focus,.test-skin .btn-outline-default:not([disabled]):not(.disabled).active:focus,.show>.test-skin .btn-outline-default.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.test-skin .card .btn-action{background:#fff}.test-skin .card .btn-action:hover,.test-skin .card .btn-action:focus{background-color:#fff !important}.test-skin .card .btn-action.active{background-color:#ccc !important}.test-skin .md-outline input[type="text"]:focus:not([readonly]),.test-skin .md-outline input[type="password"]:focus:not([readonly]),.test-skin .md-outline input[type="email"]:focus:not([readonly]),.test-skin .md-outline input[type="url"]:focus:not([readonly]),.test-skin .md-outline input[type="time"]:focus:not([readonly]),.test-skin .md-outline input[type="date"]:focus:not([readonly]),.test-skin .md-outline input[type="datetime-local"]:focus:not([readonly]),.test-skin .md-outline input[type="tel"]:focus:not([readonly]),.test-skin .md-outline input[type="number"]:focus:not([readonly]),.test-skin .md-outline input[type="search-md"]:focus:not([readonly]),.test-skin .md-outline input[type="search"]:focus:not([readonly]),.test-skin .md-outline textarea:focus:not([readonly]){border-color:#fff;-webkit-box-shadow:inset 0 0 0 1px #fff;box-shadow:inset 0 0 0 1px #fff}.test-skin .md-outline input[type="text"]:focus:not([readonly])+label,.test-skin .md-outline input[type="password"]:focus:not([readonly])+label,.test-skin .md-outline input[type="email"]:focus:not([readonly])+label,.test-skin .md-outline input[type="url"]:focus:not([readonly])+label,.test-skin .md-outline input[type="time"]:focus:not([readonly])+label,.test-skin .md-outline input[type="date"]:focus:not([readonly])+label,.test-skin .md-outline input[type="datetime-local"]:focus:not([readonly])+label,.test-skin .md-outline input[type="tel"]:focus:not([readonly])+label,.test-skin .md-outline input[type="number"]:focus:not([readonly])+label,.test-skin .md-outline input[type="search-md"]:focus:not([readonly])+label,.test-skin .md-outline input[type="search"]:focus:not([readonly])+label,.test-skin .md-outline textarea:focus:not([readonly])+label{color:#fff}.test-skin .md-bg input[type="text"],.test-skin .md-bg input[type="password"],.test-skin .md-bg input[type="email"],.test-skin .md-bg input[type="url"],.test-skin .md-bg input[type="time"],.test-skin .md-bg input[type="date"],.test-skin .md-bg input[type="datetime-local"],.test-skin .md-bg input[type="tel"],.test-skin .md-bg input[type="number"],.test-skin .md-bg input[type="search-md"],.test-skin .md-bg input[type="search"],.test-skin .md-bg textarea.md-textarea{background-image:-webkit-gradient(linear, left top, left bottom, from(#fff), to(#fff)),-webkit-gradient(linear, left top, left bottom, from(#ced4da), to(#ced4da));background-image:linear-gradient(to bottom, #fff, #fff),linear-gradient(to bottom, #ced4da, #ced4da)}.test-skin input[type="email"]:focus:not([readonly]),.test-skin input[type="text"]:focus:not([readonly]),.test-skin input[type="password"]:focus:not([readonly]),.test-skin input[type="number"]:focus:not([readonly]),.test-skin textarea.md-textarea:focus:not([readonly]){border-color:#fff;-webkit-box-shadow:0 1px 0 0 #fff;box-shadow:0 1px 0 0 #fff}.test-skin input[type="email"]:focus:not([readonly])+label,.test-skin input[type="text"]:focus:not([readonly])+label,.test-skin input[type="password"]:focus:not([readonly])+label,.test-skin input[type="number"]:focus:not([readonly])+label,.test-skin textarea.md-textarea:focus:not([readonly])+label{color:#fff}.test-skin input[type="checkbox"]:checked+label:before{border-right:2px solid #fff;border-bottom:2px solid #fff}.test-skin input[type="checkbox"].filled-in:checked+label:before{border-right:2px solid #fff;border-bottom:2px solid #fff}.test-skin input[type="checkbox"].filled-in:checked+label:after{background-color:#fff;border-color:#fff}.test-skin .md-form .prefix.active{color:#fff}.test-skin .select-wrapper.colorful-select.md-form.md-outline span.caret.active{color:#fff !important}.test-skin .select-wrapper.colorful-select.md-form.md-outline input.select-dropdown:focus{border-color:#fff;-webkit-box-shadow:inset 0 0 0 1px #fff;box-shadow:inset 0 0 0 1px #fff}.test-skin .select-wrapper.colorful-select.md-form.md-outline+label.active{color:#fff}.test-skin .select-wrapper.colorful-select.md-form .dropdown-content li.active,.test-skin .select-wrapper.colorful-select.md-form .dropdown-content li a,.test-skin .select-wrapper.colorful-select.md-form .dropdown-content li span:hover{background-color:#fff !important}.test-skin .select-wrapper.colorful-select.md-form .dropdown-content li.disabled.active{background-color:transparent !important}.test-skin .top-nav-collapse{background-color:#fff}.test-skin .carousel-multi-item .controls-top>a,.test-skin .carousel-multi-item .carousel-indicators li,.test-skin .carousel-multi-item .carousel-indicators li.active{background-color:#fff}.test-skin .form-header,.test-skin .card-header{background-color:#fff}.test-skin .spinner-primary-color,.test-skin .spinner-primary-color-only{border-color:#fff}.test-skin .pagination-primary-color .page-item.active .page-link,.test-skin .pagination-primary-color .page-item.active .page-link:focus,.test-skin .pagination-primary-color .page-item.active .page-link:hover{color:#fff;background-color:#fff}.test-skin .pagination-primary-color .page-link{color:#fff}.test-skin .pagination-primary-color .page-link:focus{-webkit-box-shadow:none;box-shadow:none}.white-skin .gradient{background:#ababab;background:linear-gradient(135deg, #ababab 0%, #fff 100%)}.white-skin .primary-color,.white-skin ul.stepper li.active a .circle,ul.stepper li.active a .white-skin .circle,.white-skin ul.stepper li.completed a .circle,ul.stepper li.completed a .white-skin .circle{background-color:#4285f4 !important}.white-skin .navbar{color:#424242;background-color:#fff}.white-skin .navbar .navbar-nav .nav-item .dropdown-menu a{color:#000}.white-skin .navbar .navbar-nav .nav-item .dropdown-menu a:hover,.white-skin .navbar .navbar-nav .nav-item .dropdown-menu a:focus,.white-skin .navbar .navbar-nav .nav-item .dropdown-menu a:active{background-color:#2a75f3}.white-skin .navbar .navbar-nav .nav-item a{color:#424242}.white-skin .navbar.double-nav a{color:#424242}.white-skin .navbar form .md-form .form-control{font-weight:300;color:#424242}.white-skin .navbar form .md-form .form-control::-webkit-input-placeholder{color:#424242}.white-skin .navbar form .md-form .form-control::-moz-placeholder{color:#424242}.white-skin .navbar form .md-form .form-control:-ms-input-placeholder{color:#424242}.white-skin .navbar form .md-form .form-control::-ms-input-placeholder{color:#424242}.white-skin .navbar form .md-form .form-control::placeholder{color:#424242}.white-skin .navbar.navbar-dark form .md-form .form-control{color:#fff}.white-skin .navbar.navbar-dark form .md-form .form-control::-webkit-input-placeholder{color:#fff}.white-skin .navbar.navbar-dark form .md-form .form-control::-moz-placeholder{color:#fff}.white-skin .navbar.navbar-dark form .md-form .form-control:-ms-input-placeholder{color:#fff}.white-skin .navbar.navbar-dark form .md-form .form-control::-ms-input-placeholder{color:#fff}.white-skin .navbar.navbar-dark form .md-form .form-control::placeholder{color:#fff}.white-skin .page-footer{background-color:#6f7178}.white-skin .side-nav{background-color:#f9f9f9}.white-skin .side-nav .logo-wrapper>div{background-color:transparent !important}.white-skin .side-nav .sn-avatar-wrapper img{border:3px solid #0d5bdd}.white-skin .side-nav .social{border-bottom:1px solid rgba(153,153,153,0.3)}.white-skin .side-nav .social a .fas,.white-skin .side-nav .social a .fab,.white-skin .side-nav .social a .far{color:#424242}.white-skin .side-nav .social a:hover .fas,.white-skin .side-nav .social a:hover .fab,.white-skin .side-nav .social a:hover .far{color:#4285f4 !important;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.white-skin .side-nav .search-form .md-form input{color:#424242 !important;border-bottom:1px solid rgba(153,153,153,0.3)}.white-skin .side-nav .search-form .md-form input::-webkit-input-placeholder{color:rgba(66,66,66,0.5) !important}.white-skin .side-nav .search-form .md-form input::-moz-placeholder{color:rgba(66,66,66,0.5) !important}.white-skin .side-nav .search-form .md-form input:-ms-input-placeholder{color:rgba(66,66,66,0.5) !important}.white-skin .side-nav .search-form .md-form input::-ms-input-placeholder{color:rgba(66,66,66,0.5) !important}.white-skin .side-nav .search-form .md-form input::placeholder{color:rgba(66,66,66,0.5) !important}.white-skin .side-nav .collapsible li{background-color:transparent}.white-skin .side-nav .collapsible li a{font-weight:400}.white-skin .side-nav .collapsible li .collapsible-header{color:#424242;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.white-skin .side-nav .collapsible li .collapsible-header.active{color:#4285f4;background-color:transparent}.white-skin .side-nav .collapsible li .collapsible-header:hover{background-color:rgba(0,0,0,0.05)}.white-skin .side-nav .collapsible li .collapsible-body a{color:#424242}.white-skin .side-nav .collapsible li .collapsible-body a:hover,.white-skin .side-nav .collapsible li .collapsible-body a.active,.white-skin .side-nav .collapsible li .collapsible-body a:active{color:#4285f4}.white-skin .side-nav .collapsible li .collapsible-body a .fas,.white-skin .side-nav .collapsible li .collapsible-body a .fab,.white-skin .side-nav .collapsible li .collapsible-body a .far{color:#424242}.white-skin .side-nav .collapsible li a:not(.collapsible-header){color:#424242;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.white-skin .side-nav .collapsible li a:not(.collapsible-header):hover,.white-skin .side-nav .collapsible li a:not(.collapsible-header).active,.white-skin .side-nav .collapsible li a:not(.collapsible-header):active{color:#4285f4 !important}.white-skin .side-nav .sidenav-bg:after,.white-skin .side-nav .sidenav-bg.mask-strong:after{background:rgba(255,255,255,0.8)}.white-skin .side-nav .sidenav-bg.mask-light:after{background:rgba(255,255,255,0.65)}.white-skin .side-nav .sidenav-bg.mask-slight:after{background:rgba(255,255,255,0.5)}.white-skin .btn-primary{color:#fff;background-color:#4285f4 !important}.white-skin .btn-primary:hover{color:#fff;background-color:#5a95f5}.white-skin .btn-primary:focus,.white-skin .btn-primary.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.white-skin .btn-primary:focus,.white-skin .btn-primary:active,.white-skin .btn-primary.active{background-color:#0b51c5}.white-skin .btn-primary.dropdown-toggle{background-color:#4285f4 !important}.white-skin .btn-primary.dropdown-toggle:hover,.white-skin .btn-primary.dropdown-toggle:focus{background-color:#5a95f5 !important}.white-skin .btn-primary:not([disabled]):not(.disabled):active,.white-skin .btn-primary:not([disabled]):not(.disabled).active,.show>.white-skin .btn-primary.dropdown-toggle{background-color:#0b51c5 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.white-skin .btn-primary:not([disabled]):not(.disabled):active:focus,.white-skin .btn-primary:not([disabled]):not(.disabled).active:focus,.show>.white-skin .btn-primary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.white-skin .primary-ic{color:#4285f4 !important}.white-skin .primary-ic:hover,.white-skin .primary-ic:focus{color:#4285f4}.white-skin a.btn:not([href]):not([tabindex]),.white-skin a.btn:not([href]):not([tabindex]):focus,.white-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.white-skin table.table a.btn.btn-primary{color:#fff}.white-skin .btn-secondary{color:#fff;background-color:#fc685f !important}.white-skin .btn-secondary:hover{color:#fff;background-color:#fc8078}.white-skin .btn-secondary:focus,.white-skin .btn-secondary.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.white-skin .btn-secondary:focus,.white-skin .btn-secondary:active,.white-skin .btn-secondary.active{background-color:#f01205}.white-skin .btn-secondary.dropdown-toggle{background-color:#fc685f !important}.white-skin .btn-secondary.dropdown-toggle:hover,.white-skin .btn-secondary.dropdown-toggle:focus{background-color:#fc8078 !important}.white-skin .btn-secondary:not([disabled]):not(.disabled):active,.white-skin .btn-secondary:not([disabled]):not(.disabled).active,.show>.white-skin .btn-secondary.dropdown-toggle{background-color:#f01205 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.white-skin .btn-secondary:not([disabled]):not(.disabled):active:focus,.white-skin .btn-secondary:not([disabled]):not(.disabled).active:focus,.show>.white-skin .btn-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.white-skin .secondary-ic{color:#fc685f !important}.white-skin .secondary-ic:hover,.white-skin .secondary-ic:focus{color:#fc685f}.white-skin a.btn:not([href]):not([tabindex]),.white-skin a.btn:not([href]):not([tabindex]):focus,.white-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.white-skin table.table a.btn.btn-secondary{color:#fff}.white-skin .btn-default{color:#fff;background-color:#454545 !important}.white-skin .btn-default:hover{color:#fff;background-color:#525252}.white-skin .btn-default:focus,.white-skin .btn-default.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.white-skin .btn-default:focus,.white-skin .btn-default:active,.white-skin .btn-default.active{background-color:#121212}.white-skin .btn-default.dropdown-toggle{background-color:#454545 !important}.white-skin .btn-default.dropdown-toggle:hover,.white-skin .btn-default.dropdown-toggle:focus{background-color:#525252 !important}.white-skin .btn-default:not([disabled]):not(.disabled):active,.white-skin .btn-default:not([disabled]):not(.disabled).active,.show>.white-skin .btn-default.dropdown-toggle{background-color:#121212 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.white-skin .btn-default:not([disabled]):not(.disabled):active:focus,.white-skin .btn-default:not([disabled]):not(.disabled).active:focus,.show>.white-skin .btn-default.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.white-skin .default-ic{color:#454545 !important}.white-skin .default-ic:hover,.white-skin .default-ic:focus{color:#454545}.white-skin a.btn:not([href]):not([tabindex]),.white-skin a.btn:not([href]):not([tabindex]):focus,.white-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.white-skin table.table a.btn.btn-default{color:#fff}.white-skin .btn-outline-primary{color:#4285f4 !important;background-color:transparent !important;border:2px solid #4285f4 !important}.white-skin .btn-outline-primary:hover,.white-skin .btn-outline-primary:focus,.white-skin .btn-outline-primary:active,.white-skin .btn-outline-primary:active:focus,.white-skin .btn-outline-primary.active{color:#4285f4 !important;background-color:transparent !important;border-color:#4285f4 !important}.white-skin .btn-outline-primary:not([disabled]):not(.disabled):active,.white-skin .btn-outline-primary:not([disabled]):not(.disabled).active,.show>.white-skin .btn-outline-primary.dropdown-toggle{background-color:transparent !important;border-color:#4285f4 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.white-skin .btn-outline-primary:not([disabled]):not(.disabled):active:focus,.white-skin .btn-outline-primary:not([disabled]):not(.disabled).active:focus,.show>.white-skin .btn-outline-primary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.white-skin .btn-outline-secondary{color:#fc685f !important;background-color:transparent !important;border:2px solid #fc685f !important}.white-skin .btn-outline-secondary:hover,.white-skin .btn-outline-secondary:focus,.white-skin .btn-outline-secondary:active,.white-skin .btn-outline-secondary:active:focus,.white-skin .btn-outline-secondary.active{color:#fc685f !important;background-color:transparent !important;border-color:#fc685f !important}.white-skin .btn-outline-secondary:not([disabled]):not(.disabled):active,.white-skin .btn-outline-secondary:not([disabled]):not(.disabled).active,.show>.white-skin .btn-outline-secondary.dropdown-toggle{background-color:transparent !important;border-color:#fc685f !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.white-skin .btn-outline-secondary:not([disabled]):not(.disabled):active:focus,.white-skin .btn-outline-secondary:not([disabled]):not(.disabled).active:focus,.show>.white-skin .btn-outline-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.white-skin .btn-outline-default{color:#454545 !important;background-color:transparent !important;border:2px solid #454545 !important}.white-skin .btn-outline-default:hover,.white-skin .btn-outline-default:focus,.white-skin .btn-outline-default:active,.white-skin .btn-outline-default:active:focus,.white-skin .btn-outline-default.active{color:#454545 !important;background-color:transparent !important;border-color:#454545 !important}.white-skin .btn-outline-default:not([disabled]):not(.disabled):active,.white-skin .btn-outline-default:not([disabled]):not(.disabled).active,.show>.white-skin .btn-outline-default.dropdown-toggle{background-color:transparent !important;border-color:#454545 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.white-skin .btn-outline-default:not([disabled]):not(.disabled):active:focus,.white-skin .btn-outline-default:not([disabled]):not(.disabled).active:focus,.show>.white-skin .btn-outline-default.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.white-skin .card .btn-action{background:#454545}.white-skin .card .btn-action:hover,.white-skin .card .btn-action:focus{background-color:#525252 !important}.white-skin .card .btn-action.active{background-color:#121212 !important}.white-skin .md-outline input[type="text"]:focus:not([readonly]),.white-skin .md-outline input[type="password"]:focus:not([readonly]),.white-skin .md-outline input[type="email"]:focus:not([readonly]),.white-skin .md-outline input[type="url"]:focus:not([readonly]),.white-skin .md-outline input[type="time"]:focus:not([readonly]),.white-skin .md-outline input[type="date"]:focus:not([readonly]),.white-skin .md-outline input[type="datetime-local"]:focus:not([readonly]),.white-skin .md-outline input[type="tel"]:focus:not([readonly]),.white-skin .md-outline input[type="number"]:focus:not([readonly]),.white-skin .md-outline input[type="search-md"]:focus:not([readonly]),.white-skin .md-outline input[type="search"]:focus:not([readonly]),.white-skin .md-outline textarea:focus:not([readonly]){border-color:#4285f4;-webkit-box-shadow:inset 0 0 0 1px #4285f4;box-shadow:inset 0 0 0 1px #4285f4}.white-skin .md-outline input[type="text"]:focus:not([readonly])+label,.white-skin .md-outline input[type="password"]:focus:not([readonly])+label,.white-skin .md-outline input[type="email"]:focus:not([readonly])+label,.white-skin .md-outline input[type="url"]:focus:not([readonly])+label,.white-skin .md-outline input[type="time"]:focus:not([readonly])+label,.white-skin .md-outline input[type="date"]:focus:not([readonly])+label,.white-skin .md-outline input[type="datetime-local"]:focus:not([readonly])+label,.white-skin .md-outline input[type="tel"]:focus:not([readonly])+label,.white-skin .md-outline input[type="number"]:focus:not([readonly])+label,.white-skin .md-outline input[type="search-md"]:focus:not([readonly])+label,.white-skin .md-outline input[type="search"]:focus:not([readonly])+label,.white-skin .md-outline textarea:focus:not([readonly])+label{color:#4285f4}.white-skin .md-bg input[type="text"],.white-skin .md-bg input[type="password"],.white-skin .md-bg input[type="email"],.white-skin .md-bg input[type="url"],.white-skin .md-bg input[type="time"],.white-skin .md-bg input[type="date"],.white-skin .md-bg input[type="datetime-local"],.white-skin .md-bg input[type="tel"],.white-skin .md-bg input[type="number"],.white-skin .md-bg input[type="search-md"],.white-skin .md-bg input[type="search"],.white-skin .md-bg textarea.md-textarea{background-image:-webkit-gradient(linear, left top, left bottom, from(#4285f4), to(#4285f4)),-webkit-gradient(linear, left top, left bottom, from(#ced4da), to(#ced4da));background-image:linear-gradient(to bottom, #4285f4, #4285f4),linear-gradient(to bottom, #ced4da, #ced4da)}.white-skin input[type="email"]:focus:not([readonly]),.white-skin input[type="text"]:focus:not([readonly]),.white-skin input[type="password"]:focus:not([readonly]),.white-skin input[type="number"]:focus:not([readonly]),.white-skin textarea.md-textarea:focus:not([readonly]){border-color:#4285f4;-webkit-box-shadow:0 1px 0 0 #4285f4;box-shadow:0 1px 0 0 #4285f4}.white-skin input[type="email"]:focus:not([readonly])+label,.white-skin input[type="text"]:focus:not([readonly])+label,.white-skin input[type="password"]:focus:not([readonly])+label,.white-skin input[type="number"]:focus:not([readonly])+label,.white-skin textarea.md-textarea:focus:not([readonly])+label{color:#4285f4}.white-skin input[type="checkbox"]:checked+label:before{border-right:2px solid #4285f4;border-bottom:2px solid #4285f4}.white-skin input[type="checkbox"].filled-in:checked+label:before{border-right:2px solid #fff;border-bottom:2px solid #fff}.white-skin input[type="checkbox"].filled-in:checked+label:after{background-color:#4285f4;border-color:#4285f4}.white-skin .md-form .prefix.active{color:#4285f4}.white-skin .select-wrapper.colorful-select.md-form.md-outline span.caret.active{color:#4285f4 !important}.white-skin .select-wrapper.colorful-select.md-form.md-outline input.select-dropdown:focus{border-color:#4285f4;-webkit-box-shadow:inset 0 0 0 1px #4285f4;box-shadow:inset 0 0 0 1px #4285f4}.white-skin .select-wrapper.colorful-select.md-form.md-outline+label.active{color:#4285f4}.white-skin .select-wrapper.colorful-select.md-form .dropdown-content li.active,.white-skin .select-wrapper.colorful-select.md-form .dropdown-content li a,.white-skin .select-wrapper.colorful-select.md-form .dropdown-content li span:hover{background-color:#4285f4 !important}.white-skin .select-wrapper.colorful-select.md-form .dropdown-content li.disabled.active{background-color:transparent !important}.white-skin .top-nav-collapse{background-color:#fff}.white-skin .carousel-multi-item .controls-top>a,.white-skin .carousel-multi-item .carousel-indicators li,.white-skin .carousel-multi-item .carousel-indicators li.active{background-color:#4285f4}.white-skin .form-header,.white-skin .card-header{background-color:#4c8bf5}.white-skin .spinner-primary-color,.white-skin .spinner-primary-color-only{border-color:#4285f4}.white-skin .pagination-primary-color .page-item.active .page-link,.white-skin .pagination-primary-color .page-item.active .page-link:focus,.white-skin .pagination-primary-color .page-item.active .page-link:hover{color:#fff;background-color:#4285f4}.white-skin .pagination-primary-color .page-link{color:#4285f4}.white-skin .pagination-primary-color .page-link:focus{-webkit-box-shadow:none;box-shadow:none}.black-skin .gradient{background:#000;background:linear-gradient(135deg, #000 0%, #616161 100%)}.black-skin .primary-color,.black-skin ul.stepper li.active a .circle,ul.stepper li.active a .black-skin .circle,.black-skin ul.stepper li.completed a .circle,ul.stepper li.completed a .black-skin .circle{background-color:#2ad1a3 !important}.black-skin .navbar{color:#fff;background-color:#222}.black-skin .navbar .navbar-nav .nav-item .dropdown-menu a{color:#000}.black-skin .navbar .navbar-nav .nav-item .dropdown-menu a:hover,.black-skin .navbar .navbar-nav .nav-item .dropdown-menu a:focus,.black-skin .navbar .navbar-nav .nav-item .dropdown-menu a:active{background-color:#26bc92}.black-skin .navbar.double-nav a{color:#fff}.black-skin .navbar form .md-form .form-control{font-weight:300;color:#fff}.black-skin .navbar form .md-form .form-control::-webkit-input-placeholder{color:#fff}.black-skin .navbar form .md-form .form-control::-moz-placeholder{color:#fff}.black-skin .navbar form .md-form .form-control:-ms-input-placeholder{color:#fff}.black-skin .navbar form .md-form .form-control::-ms-input-placeholder{color:#fff}.black-skin .navbar form .md-form .form-control::placeholder{color:#fff}.black-skin .page-footer{background-color:#222}.black-skin .side-nav{background-color:#222}.black-skin .side-nav .logo-wrapper>div{background-color:transparent !important}.black-skin .side-nav .sn-avatar-wrapper img{border:3px solid #1d9171}.black-skin .side-nav .social{border-bottom:1px solid rgba(153,153,153,0.3)}.black-skin .side-nav .social a:hover .fas,.black-skin .side-nav .social a:hover .fab,.black-skin .side-nav .social a:hover .far{color:#2ad1a3 !important;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.black-skin .side-nav .collapsible li{background-color:transparent}.black-skin .side-nav .collapsible li .collapsible-header{color:#fff;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.black-skin .side-nav .collapsible li .collapsible-header.active{background-color:#2ad1a3}.black-skin .side-nav .collapsible li .collapsible-header:hover{background-color:#2ad1a3}.black-skin .side-nav .collapsible li .collapsible-body a{color:#fff}.black-skin .side-nav .collapsible li .collapsible-body a:hover,.black-skin .side-nav .collapsible li .collapsible-body a.active,.black-skin .side-nav .collapsible li .collapsible-body a:active{color:#2ad1a3}.black-skin .side-nav .collapsible li .collapsible-body a .fas,.black-skin .side-nav .collapsible li .collapsible-body a .fab,.black-skin .side-nav .collapsible li .collapsible-body a .far{color:#fff}.black-skin .side-nav .collapsible li a:not(.collapsible-header){color:#fff;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.black-skin .side-nav .collapsible li a:not(.collapsible-header):hover,.black-skin .side-nav .collapsible li a:not(.collapsible-header).active,.black-skin .side-nav .collapsible li a:not(.collapsible-header):active{color:#2ad1a3 !important}.black-skin .side-nav .sidenav-bg:after,.black-skin .side-nav .sidenav-bg.mask-strong:after{background:rgba(0,0,0,0.8)}.black-skin .side-nav .sidenav-bg.mask-light:after{background:rgba(0,0,0,0.65)}.black-skin .side-nav .sidenav-bg.mask-slight:after{background:rgba(0,0,0,0.5)}.black-skin .btn-primary{color:#fff;background-color:#2ad1a3 !important}.black-skin .btn-primary:hover{color:#fff;background-color:#3dd8ad}.black-skin .btn-primary:focus,.black-skin .btn-primary.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.black-skin .btn-primary:focus,.black-skin .btn-primary:active,.black-skin .btn-primary.active{background-color:#197c61}.black-skin .btn-primary.dropdown-toggle{background-color:#2ad1a3 !important}.black-skin .btn-primary.dropdown-toggle:hover,.black-skin .btn-primary.dropdown-toggle:focus{background-color:#3dd8ad !important}.black-skin .btn-primary:not([disabled]):not(.disabled):active,.black-skin .btn-primary:not([disabled]):not(.disabled).active,.show>.black-skin .btn-primary.dropdown-toggle{background-color:#197c61 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.black-skin .btn-primary:not([disabled]):not(.disabled):active:focus,.black-skin .btn-primary:not([disabled]):not(.disabled).active:focus,.show>.black-skin .btn-primary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.black-skin .primary-ic{color:#2ad1a3 !important}.black-skin .primary-ic:hover,.black-skin .primary-ic:focus{color:#2ad1a3}.black-skin a.btn:not([href]):not([tabindex]),.black-skin a.btn:not([href]):not([tabindex]):focus,.black-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.black-skin table.table a.btn.btn-primary{color:#fff}.black-skin .btn-secondary{color:#fff;background-color:#0f478a !important}.black-skin .btn-secondary:hover{color:#fff;background-color:#1253a1}.black-skin .btn-secondary:focus,.black-skin .btn-secondary.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.black-skin .btn-secondary:focus,.black-skin .btn-secondary:active,.black-skin .btn-secondary.active{background-color:#05182e}.black-skin .btn-secondary.dropdown-toggle{background-color:#0f478a !important}.black-skin .btn-secondary.dropdown-toggle:hover,.black-skin .btn-secondary.dropdown-toggle:focus{background-color:#1253a1 !important}.black-skin .btn-secondary:not([disabled]):not(.disabled):active,.black-skin .btn-secondary:not([disabled]):not(.disabled).active,.show>.black-skin .btn-secondary.dropdown-toggle{background-color:#05182e !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.black-skin .btn-secondary:not([disabled]):not(.disabled):active:focus,.black-skin .btn-secondary:not([disabled]):not(.disabled).active:focus,.show>.black-skin .btn-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.black-skin .secondary-ic{color:#0f478a !important}.black-skin .secondary-ic:hover,.black-skin .secondary-ic:focus{color:#0f478a}.black-skin a.btn:not([href]):not([tabindex]),.black-skin a.btn:not([href]):not([tabindex]):focus,.black-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.black-skin table.table a.btn.btn-secondary{color:#fff}.black-skin .btn-default{color:#fff;background-color:#222 !important}.black-skin .btn-default:hover{color:#fff;background-color:#2f2f2f}.black-skin .btn-default:focus,.black-skin .btn-default.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.black-skin .btn-default:focus,.black-skin .btn-default:active,.black-skin .btn-default.active{background-color:#000}.black-skin .btn-default.dropdown-toggle{background-color:#222 !important}.black-skin .btn-default.dropdown-toggle:hover,.black-skin .btn-default.dropdown-toggle:focus{background-color:#2f2f2f !important}.black-skin .btn-default:not([disabled]):not(.disabled):active,.black-skin .btn-default:not([disabled]):not(.disabled).active,.show>.black-skin .btn-default.dropdown-toggle{background-color:#000 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.black-skin .btn-default:not([disabled]):not(.disabled):active:focus,.black-skin .btn-default:not([disabled]):not(.disabled).active:focus,.show>.black-skin .btn-default.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.black-skin .default-ic{color:#222 !important}.black-skin .default-ic:hover,.black-skin .default-ic:focus{color:#222}.black-skin a.btn:not([href]):not([tabindex]),.black-skin a.btn:not([href]):not([tabindex]):focus,.black-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.black-skin table.table a.btn.btn-default{color:#fff}.black-skin .btn-outline-primary{color:#2ad1a3 !important;background-color:transparent !important;border:2px solid #2ad1a3 !important}.black-skin .btn-outline-primary:hover,.black-skin .btn-outline-primary:focus,.black-skin .btn-outline-primary:active,.black-skin .btn-outline-primary:active:focus,.black-skin .btn-outline-primary.active{color:#2ad1a3 !important;background-color:transparent !important;border-color:#2ad1a3 !important}.black-skin .btn-outline-primary:not([disabled]):not(.disabled):active,.black-skin .btn-outline-primary:not([disabled]):not(.disabled).active,.show>.black-skin .btn-outline-primary.dropdown-toggle{background-color:transparent !important;border-color:#2ad1a3 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.black-skin .btn-outline-primary:not([disabled]):not(.disabled):active:focus,.black-skin .btn-outline-primary:not([disabled]):not(.disabled).active:focus,.show>.black-skin .btn-outline-primary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.black-skin .btn-outline-secondary{color:#0f478a !important;background-color:transparent !important;border:2px solid #0f478a !important}.black-skin .btn-outline-secondary:hover,.black-skin .btn-outline-secondary:focus,.black-skin .btn-outline-secondary:active,.black-skin .btn-outline-secondary:active:focus,.black-skin .btn-outline-secondary.active{color:#0f478a !important;background-color:transparent !important;border-color:#0f478a !important}.black-skin .btn-outline-secondary:not([disabled]):not(.disabled):active,.black-skin .btn-outline-secondary:not([disabled]):not(.disabled).active,.show>.black-skin .btn-outline-secondary.dropdown-toggle{background-color:transparent !important;border-color:#0f478a !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.black-skin .btn-outline-secondary:not([disabled]):not(.disabled):active:focus,.black-skin .btn-outline-secondary:not([disabled]):not(.disabled).active:focus,.show>.black-skin .btn-outline-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.black-skin .btn-outline-default{color:#222 !important;background-color:transparent !important;border:2px solid #222 !important}.black-skin .btn-outline-default:hover,.black-skin .btn-outline-default:focus,.black-skin .btn-outline-default:active,.black-skin .btn-outline-default:active:focus,.black-skin .btn-outline-default.active{color:#222 !important;background-color:transparent !important;border-color:#222 !important}.black-skin .btn-outline-default:not([disabled]):not(.disabled):active,.black-skin .btn-outline-default:not([disabled]):not(.disabled).active,.show>.black-skin .btn-outline-default.dropdown-toggle{background-color:transparent !important;border-color:#222 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.black-skin .btn-outline-default:not([disabled]):not(.disabled):active:focus,.black-skin .btn-outline-default:not([disabled]):not(.disabled).active:focus,.show>.black-skin .btn-outline-default.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.black-skin .card .btn-action{background:#222}.black-skin .card .btn-action:hover,.black-skin .card .btn-action:focus{background-color:#2f2f2f !important}.black-skin .card .btn-action.active{background-color:#000 !important}.black-skin .md-outline input[type="text"]:focus:not([readonly]),.black-skin .md-outline input[type="password"]:focus:not([readonly]),.black-skin .md-outline input[type="email"]:focus:not([readonly]),.black-skin .md-outline input[type="url"]:focus:not([readonly]),.black-skin .md-outline input[type="time"]:focus:not([readonly]),.black-skin .md-outline input[type="date"]:focus:not([readonly]),.black-skin .md-outline input[type="datetime-local"]:focus:not([readonly]),.black-skin .md-outline input[type="tel"]:focus:not([readonly]),.black-skin .md-outline input[type="number"]:focus:not([readonly]),.black-skin .md-outline input[type="search-md"]:focus:not([readonly]),.black-skin .md-outline input[type="search"]:focus:not([readonly]),.black-skin .md-outline textarea:focus:not([readonly]){border-color:#2ad1a3;-webkit-box-shadow:inset 0 0 0 1px #2ad1a3;box-shadow:inset 0 0 0 1px #2ad1a3}.black-skin .md-outline input[type="text"]:focus:not([readonly])+label,.black-skin .md-outline input[type="password"]:focus:not([readonly])+label,.black-skin .md-outline input[type="email"]:focus:not([readonly])+label,.black-skin .md-outline input[type="url"]:focus:not([readonly])+label,.black-skin .md-outline input[type="time"]:focus:not([readonly])+label,.black-skin .md-outline input[type="date"]:focus:not([readonly])+label,.black-skin .md-outline input[type="datetime-local"]:focus:not([readonly])+label,.black-skin .md-outline input[type="tel"]:focus:not([readonly])+label,.black-skin .md-outline input[type="number"]:focus:not([readonly])+label,.black-skin .md-outline input[type="search-md"]:focus:not([readonly])+label,.black-skin .md-outline input[type="search"]:focus:not([readonly])+label,.black-skin .md-outline textarea:focus:not([readonly])+label{color:#2ad1a3}.black-skin .md-bg input[type="text"],.black-skin .md-bg input[type="password"],.black-skin .md-bg input[type="email"],.black-skin .md-bg input[type="url"],.black-skin .md-bg input[type="time"],.black-skin .md-bg input[type="date"],.black-skin .md-bg input[type="datetime-local"],.black-skin .md-bg input[type="tel"],.black-skin .md-bg input[type="number"],.black-skin .md-bg input[type="search-md"],.black-skin .md-bg input[type="search"],.black-skin .md-bg textarea.md-textarea{background-image:-webkit-gradient(linear, left top, left bottom, from(#2ad1a3), to(#2ad1a3)),-webkit-gradient(linear, left top, left bottom, from(#ced4da), to(#ced4da));background-image:linear-gradient(to bottom, #2ad1a3, #2ad1a3),linear-gradient(to bottom, #ced4da, #ced4da)}.black-skin input[type="email"]:focus:not([readonly]),.black-skin input[type="text"]:focus:not([readonly]),.black-skin input[type="password"]:focus:not([readonly]),.black-skin input[type="number"]:focus:not([readonly]),.black-skin textarea.md-textarea:focus:not([readonly]){border-color:#2ad1a3;-webkit-box-shadow:0 1px 0 0 #2ad1a3;box-shadow:0 1px 0 0 #2ad1a3}.black-skin input[type="email"]:focus:not([readonly])+label,.black-skin input[type="text"]:focus:not([readonly])+label,.black-skin input[type="password"]:focus:not([readonly])+label,.black-skin input[type="number"]:focus:not([readonly])+label,.black-skin textarea.md-textarea:focus:not([readonly])+label{color:#2ad1a3}.black-skin input[type="checkbox"]:checked+label:before{border-right:2px solid #2ad1a3;border-bottom:2px solid #2ad1a3}.black-skin input[type="checkbox"].filled-in:checked+label:before{border-right:2px solid #fff;border-bottom:2px solid #fff}.black-skin input[type="checkbox"].filled-in:checked+label:after{background-color:#2ad1a3;border-color:#2ad1a3}.black-skin .md-form .prefix.active{color:#2ad1a3}.black-skin .select-wrapper.colorful-select.md-form.md-outline span.caret.active{color:#2ad1a3 !important}.black-skin .select-wrapper.colorful-select.md-form.md-outline input.select-dropdown:focus{border-color:#2ad1a3;-webkit-box-shadow:inset 0 0 0 1px #2ad1a3;box-shadow:inset 0 0 0 1px #2ad1a3}.black-skin .select-wrapper.colorful-select.md-form.md-outline+label.active{color:#2ad1a3}.black-skin .select-wrapper.colorful-select.md-form .dropdown-content li.active,.black-skin .select-wrapper.colorful-select.md-form .dropdown-content li a,.black-skin .select-wrapper.colorful-select.md-form .dropdown-content li span:hover{background-color:#2ad1a3 !important}.black-skin .select-wrapper.colorful-select.md-form .dropdown-content li.disabled.active{background-color:transparent !important}.black-skin .top-nav-collapse{background-color:#222}.black-skin .carousel-multi-item .controls-top>a,.black-skin .carousel-multi-item .carousel-indicators li,.black-skin .carousel-multi-item .carousel-indicators li.active{background-color:#2ad1a3}.black-skin .form-header,.black-skin .card-header{background-color:#30d5a8}.black-skin .spinner-primary-color,.black-skin .spinner-primary-color-only{border-color:#2ad1a3}.black-skin .pagination-primary-color .page-item.active .page-link,.black-skin .pagination-primary-color .page-item.active .page-link:focus,.black-skin .pagination-primary-color .page-item.active .page-link:hover{color:#fff;background-color:#2ad1a3}.black-skin .pagination-primary-color .page-link{color:#2ad1a3}.black-skin .pagination-primary-color .page-link:focus{-webkit-box-shadow:none;box-shadow:none}.cyan-skin .gradient{background:#114861;background:linear-gradient(135deg, #114861 0%, #45b0c0 100%)}.cyan-skin .primary-color,.cyan-skin ul.stepper li.active a .circle,ul.stepper li.active a .cyan-skin .circle,.cyan-skin ul.stepper li.completed a .circle,ul.stepper li.completed a .cyan-skin .circle{background-color:#4fada7 !important}.cyan-skin .navbar{color:#fff;background-color:#114861}.cyan-skin .navbar .navbar-nav .nav-item .dropdown-menu a{color:#000}.cyan-skin .navbar .navbar-nav .nav-item .dropdown-menu a:hover,.cyan-skin .navbar .navbar-nav .nav-item .dropdown-menu a:focus,.cyan-skin .navbar .navbar-nav .nav-item .dropdown-menu a:active{background-color:#eea82f}.cyan-skin .navbar.double-nav a{color:#fff}.cyan-skin .navbar form .md-form .form-control{font-weight:300;color:#fff}.cyan-skin .navbar form .md-form .form-control::-webkit-input-placeholder{color:#fff}.cyan-skin .navbar form .md-form .form-control::-moz-placeholder{color:#fff}.cyan-skin .navbar form .md-form .form-control:-ms-input-placeholder{color:#fff}.cyan-skin .navbar form .md-form .form-control::-ms-input-placeholder{color:#fff}.cyan-skin .navbar form .md-form .form-control::placeholder{color:#fff}.cyan-skin .page-footer{background-color:#114861}.cyan-skin .side-nav{background-color:#24879d}.cyan-skin .side-nav .logo-wrapper>div{background-color:transparent !important}.cyan-skin .side-nav .sn-avatar-wrapper img{border:3px solid #d99012}.cyan-skin .side-nav .social{border-bottom:1px solid rgba(153,153,153,0.3)}.cyan-skin .side-nav .social a:hover .fas,.cyan-skin .side-nav .social a:hover .fab,.cyan-skin .side-nav .social a:hover .far{color:#f0b247 !important;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.cyan-skin .side-nav .collapsible li{background-color:transparent}.cyan-skin .side-nav .collapsible li .collapsible-header{color:#fff;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.cyan-skin .side-nav .collapsible li .collapsible-header.active{background-color:rgba(29,65,82,0.8)}.cyan-skin .side-nav .collapsible li .collapsible-header:hover{background-color:rgba(29,65,82,0.8)}.cyan-skin .side-nav .collapsible li .collapsible-body a{color:#fff}.cyan-skin .side-nav .collapsible li .collapsible-body a:hover,.cyan-skin .side-nav .collapsible li .collapsible-body a.active,.cyan-skin .side-nav .collapsible li .collapsible-body a:active{color:#ffa742}.cyan-skin .side-nav .collapsible li .collapsible-body a .fas,.cyan-skin .side-nav .collapsible li .collapsible-body a .fab,.cyan-skin .side-nav .collapsible li .collapsible-body a .far{color:#fff}.cyan-skin .side-nav .collapsible li a:not(.collapsible-header){color:#fff;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.cyan-skin .side-nav .collapsible li a:not(.collapsible-header):hover,.cyan-skin .side-nav .collapsible li a:not(.collapsible-header).active,.cyan-skin .side-nav .collapsible li a:not(.collapsible-header):active{color:#ffa742 !important}.cyan-skin .side-nav .sidenav-bg:after,.cyan-skin .side-nav .sidenav-bg.mask-strong:after{background:rgba(21,78,96,0.8)}.cyan-skin .side-nav .sidenav-bg.mask-light:after{background:rgba(21,78,96,0.65)}.cyan-skin .side-nav .sidenav-bg.mask-slight:after{background:rgba(21,78,96,0.5)}.cyan-skin .btn-primary{color:#fff;background-color:#ffa742 !important}.cyan-skin .btn-primary:hover{color:#fff;background-color:#ffb35c}.cyan-skin .btn-primary:focus,.cyan-skin .btn-primary.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.cyan-skin .btn-primary:focus,.cyan-skin .btn-primary:active,.cyan-skin .btn-primary.active{background-color:#db7500}.cyan-skin .btn-primary.dropdown-toggle{background-color:#ffa742 !important}.cyan-skin .btn-primary.dropdown-toggle:hover,.cyan-skin .btn-primary.dropdown-toggle:focus{background-color:#ffb35c !important}.cyan-skin .btn-primary:not([disabled]):not(.disabled):active,.cyan-skin .btn-primary:not([disabled]):not(.disabled).active,.show>.cyan-skin .btn-primary.dropdown-toggle{background-color:#db7500 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.cyan-skin .btn-primary:not([disabled]):not(.disabled):active:focus,.cyan-skin .btn-primary:not([disabled]):not(.disabled).active:focus,.show>.cyan-skin .btn-primary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.cyan-skin .primary-ic{color:#ffa742 !important}.cyan-skin .primary-ic:hover,.cyan-skin .primary-ic:focus{color:#ffa742}.cyan-skin a.btn:not([href]):not([tabindex]),.cyan-skin a.btn:not([href]):not([tabindex]):focus,.cyan-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.cyan-skin table.table a.btn.btn-primary{color:#fff}.cyan-skin .btn-secondary{color:#fff;background-color:#45b0c0 !important}.cyan-skin .btn-secondary:hover{color:#fff;background-color:#58b8c6}.cyan-skin .btn-secondary:focus,.cyan-skin .btn-secondary.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.cyan-skin .btn-secondary:focus,.cyan-skin .btn-secondary:active,.cyan-skin .btn-secondary.active{background-color:#286d77}.cyan-skin .btn-secondary.dropdown-toggle{background-color:#45b0c0 !important}.cyan-skin .btn-secondary.dropdown-toggle:hover,.cyan-skin .btn-secondary.dropdown-toggle:focus{background-color:#58b8c6 !important}.cyan-skin .btn-secondary:not([disabled]):not(.disabled):active,.cyan-skin .btn-secondary:not([disabled]):not(.disabled).active,.show>.cyan-skin .btn-secondary.dropdown-toggle{background-color:#286d77 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.cyan-skin .btn-secondary:not([disabled]):not(.disabled):active:focus,.cyan-skin .btn-secondary:not([disabled]):not(.disabled).active:focus,.show>.cyan-skin .btn-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.cyan-skin .secondary-ic{color:#45b0c0 !important}.cyan-skin .secondary-ic:hover,.cyan-skin .secondary-ic:focus{color:#45b0c0}.cyan-skin a.btn:not([href]):not([tabindex]),.cyan-skin a.btn:not([href]):not([tabindex]):focus,.cyan-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.cyan-skin table.table a.btn.btn-secondary{color:#fff}.cyan-skin .btn-default{color:#fff;background-color:#114861 !important}.cyan-skin .btn-default:hover{color:#fff;background-color:#155877}.cyan-skin .btn-default:focus,.cyan-skin .btn-default.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.cyan-skin .btn-default:focus,.cyan-skin .btn-default:active,.cyan-skin .btn-default.active{background-color:#02080a}.cyan-skin .btn-default.dropdown-toggle{background-color:#114861 !important}.cyan-skin .btn-default.dropdown-toggle:hover,.cyan-skin .btn-default.dropdown-toggle:focus{background-color:#155877 !important}.cyan-skin .btn-default:not([disabled]):not(.disabled):active,.cyan-skin .btn-default:not([disabled]):not(.disabled).active,.show>.cyan-skin .btn-default.dropdown-toggle{background-color:#02080a !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.cyan-skin .btn-default:not([disabled]):not(.disabled):active:focus,.cyan-skin .btn-default:not([disabled]):not(.disabled).active:focus,.show>.cyan-skin .btn-default.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.cyan-skin .default-ic{color:#114861 !important}.cyan-skin .default-ic:hover,.cyan-skin .default-ic:focus{color:#114861}.cyan-skin a.btn:not([href]):not([tabindex]),.cyan-skin a.btn:not([href]):not([tabindex]):focus,.cyan-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.cyan-skin table.table a.btn.btn-default{color:#fff}.cyan-skin .btn-outline-primary{color:#ffa742 !important;background-color:transparent !important;border:2px solid #ffa742 !important}.cyan-skin .btn-outline-primary:hover,.cyan-skin .btn-outline-primary:focus,.cyan-skin .btn-outline-primary:active,.cyan-skin .btn-outline-primary:active:focus,.cyan-skin .btn-outline-primary.active{color:#ffa742 !important;background-color:transparent !important;border-color:#ffa742 !important}.cyan-skin .btn-outline-primary:not([disabled]):not(.disabled):active,.cyan-skin .btn-outline-primary:not([disabled]):not(.disabled).active,.show>.cyan-skin .btn-outline-primary.dropdown-toggle{background-color:transparent !important;border-color:#ffa742 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.cyan-skin .btn-outline-primary:not([disabled]):not(.disabled):active:focus,.cyan-skin .btn-outline-primary:not([disabled]):not(.disabled).active:focus,.show>.cyan-skin .btn-outline-primary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.cyan-skin .btn-outline-secondary{color:#45b0c0 !important;background-color:transparent !important;border:2px solid #45b0c0 !important}.cyan-skin .btn-outline-secondary:hover,.cyan-skin .btn-outline-secondary:focus,.cyan-skin .btn-outline-secondary:active,.cyan-skin .btn-outline-secondary:active:focus,.cyan-skin .btn-outline-secondary.active{color:#45b0c0 !important;background-color:transparent !important;border-color:#45b0c0 !important}.cyan-skin .btn-outline-secondary:not([disabled]):not(.disabled):active,.cyan-skin .btn-outline-secondary:not([disabled]):not(.disabled).active,.show>.cyan-skin .btn-outline-secondary.dropdown-toggle{background-color:transparent !important;border-color:#45b0c0 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.cyan-skin .btn-outline-secondary:not([disabled]):not(.disabled):active:focus,.cyan-skin .btn-outline-secondary:not([disabled]):not(.disabled).active:focus,.show>.cyan-skin .btn-outline-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.cyan-skin .btn-outline-default{color:#114861 !important;background-color:transparent !important;border:2px solid #114861 !important}.cyan-skin .btn-outline-default:hover,.cyan-skin .btn-outline-default:focus,.cyan-skin .btn-outline-default:active,.cyan-skin .btn-outline-default:active:focus,.cyan-skin .btn-outline-default.active{color:#114861 !important;background-color:transparent !important;border-color:#114861 !important}.cyan-skin .btn-outline-default:not([disabled]):not(.disabled):active,.cyan-skin .btn-outline-default:not([disabled]):not(.disabled).active,.show>.cyan-skin .btn-outline-default.dropdown-toggle{background-color:transparent !important;border-color:#114861 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.cyan-skin .btn-outline-default:not([disabled]):not(.disabled):active:focus,.cyan-skin .btn-outline-default:not([disabled]):not(.disabled).active:focus,.show>.cyan-skin .btn-outline-default.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.cyan-skin .card .btn-action{background:#114861}.cyan-skin .card .btn-action:hover,.cyan-skin .card .btn-action:focus{background-color:#155877 !important}.cyan-skin .card .btn-action.active{background-color:#02080a !important}.cyan-skin .md-outline input[type="text"]:focus:not([readonly]),.cyan-skin .md-outline input[type="password"]:focus:not([readonly]),.cyan-skin .md-outline input[type="email"]:focus:not([readonly]),.cyan-skin .md-outline input[type="url"]:focus:not([readonly]),.cyan-skin .md-outline input[type="time"]:focus:not([readonly]),.cyan-skin .md-outline input[type="date"]:focus:not([readonly]),.cyan-skin .md-outline input[type="datetime-local"]:focus:not([readonly]),.cyan-skin .md-outline input[type="tel"]:focus:not([readonly]),.cyan-skin .md-outline input[type="number"]:focus:not([readonly]),.cyan-skin .md-outline input[type="search-md"]:focus:not([readonly]),.cyan-skin .md-outline input[type="search"]:focus:not([readonly]),.cyan-skin .md-outline textarea:focus:not([readonly]){border-color:#f0b247;-webkit-box-shadow:inset 0 0 0 1px #f0b247;box-shadow:inset 0 0 0 1px #f0b247}.cyan-skin .md-outline input[type="text"]:focus:not([readonly])+label,.cyan-skin .md-outline input[type="password"]:focus:not([readonly])+label,.cyan-skin .md-outline input[type="email"]:focus:not([readonly])+label,.cyan-skin .md-outline input[type="url"]:focus:not([readonly])+label,.cyan-skin .md-outline input[type="time"]:focus:not([readonly])+label,.cyan-skin .md-outline input[type="date"]:focus:not([readonly])+label,.cyan-skin .md-outline input[type="datetime-local"]:focus:not([readonly])+label,.cyan-skin .md-outline input[type="tel"]:focus:not([readonly])+label,.cyan-skin .md-outline input[type="number"]:focus:not([readonly])+label,.cyan-skin .md-outline input[type="search-md"]:focus:not([readonly])+label,.cyan-skin .md-outline input[type="search"]:focus:not([readonly])+label,.cyan-skin .md-outline textarea:focus:not([readonly])+label{color:#f0b247}.cyan-skin .md-bg input[type="text"],.cyan-skin .md-bg input[type="password"],.cyan-skin .md-bg input[type="email"],.cyan-skin .md-bg input[type="url"],.cyan-skin .md-bg input[type="time"],.cyan-skin .md-bg input[type="date"],.cyan-skin .md-bg input[type="datetime-local"],.cyan-skin .md-bg input[type="tel"],.cyan-skin .md-bg input[type="number"],.cyan-skin .md-bg input[type="search-md"],.cyan-skin .md-bg input[type="search"],.cyan-skin .md-bg textarea.md-textarea{background-image:-webkit-gradient(linear, left top, left bottom, from(#f0b247), to(#f0b247)),-webkit-gradient(linear, left top, left bottom, from(#ced4da), to(#ced4da));background-image:linear-gradient(to bottom, #f0b247, #f0b247),linear-gradient(to bottom, #ced4da, #ced4da)}.cyan-skin input[type="email"]:focus:not([readonly]),.cyan-skin input[type="text"]:focus:not([readonly]),.cyan-skin input[type="password"]:focus:not([readonly]),.cyan-skin input[type="number"]:focus:not([readonly]),.cyan-skin textarea.md-textarea:focus:not([readonly]){border-color:#f0b247;-webkit-box-shadow:0 1px 0 0 #f0b247;box-shadow:0 1px 0 0 #f0b247}.cyan-skin input[type="email"]:focus:not([readonly])+label,.cyan-skin input[type="text"]:focus:not([readonly])+label,.cyan-skin input[type="password"]:focus:not([readonly])+label,.cyan-skin input[type="number"]:focus:not([readonly])+label,.cyan-skin textarea.md-textarea:focus:not([readonly])+label{color:#f0b247}.cyan-skin input[type="checkbox"]:checked+label:before{border-right:2px solid #f0b247;border-bottom:2px solid #f0b247}.cyan-skin input[type="checkbox"].filled-in:checked+label:before{border-right:2px solid #fff;border-bottom:2px solid #fff}.cyan-skin input[type="checkbox"].filled-in:checked+label:after{background-color:#f0b247;border-color:#f0b247}.cyan-skin .md-form .prefix.active{color:#f0b247}.cyan-skin .select-wrapper.colorful-select.md-form.md-outline span.caret.active{color:#f0b247 !important}.cyan-skin .select-wrapper.colorful-select.md-form.md-outline input.select-dropdown:focus{border-color:#f0b247;-webkit-box-shadow:inset 0 0 0 1px #f0b247;box-shadow:inset 0 0 0 1px #f0b247}.cyan-skin .select-wrapper.colorful-select.md-form.md-outline+label.active{color:#f0b247}.cyan-skin .select-wrapper.colorful-select.md-form .dropdown-content li.active,.cyan-skin .select-wrapper.colorful-select.md-form .dropdown-content li a,.cyan-skin .select-wrapper.colorful-select.md-form .dropdown-content li span:hover{background-color:#f0b247 !important}.cyan-skin .select-wrapper.colorful-select.md-form .dropdown-content li.disabled.active{background-color:transparent !important}.cyan-skin .top-nav-collapse{background-color:#114861}.cyan-skin .carousel-multi-item .controls-top>a,.cyan-skin .carousel-multi-item .carousel-indicators li,.cyan-skin .carousel-multi-item .carousel-indicators li.active{background-color:#f0b247}.cyan-skin .form-header,.cyan-skin .card-header{background-color:#f1b650}.cyan-skin .spinner-primary-color,.cyan-skin .spinner-primary-color-only{border-color:#4fada7}.cyan-skin .pagination-primary-color .page-item.active .page-link,.cyan-skin .pagination-primary-color .page-item.active .page-link:focus,.cyan-skin .pagination-primary-color .page-item.active .page-link:hover{color:#fff;background-color:#4fada7}.cyan-skin .pagination-primary-color .page-link{color:#4fada7}.cyan-skin .pagination-primary-color .page-link:focus{-webkit-box-shadow:none;box-shadow:none}.mdb-skin .gradient{background:#0e2135;background:linear-gradient(135deg, #0e2135 0%, #2c76b8 100%)}.mdb-skin .primary-color,.mdb-skin ul.stepper li.active a .circle,ul.stepper li.active a .mdb-skin .circle,.mdb-skin ul.stepper li.completed a .circle,ul.stepper li.completed a .mdb-skin .circle{background-color:#33b5e5 !important}.mdb-skin .navbar{color:#fff;background-color:#243a51}.mdb-skin .navbar .navbar-nav .nav-item .dropdown-menu a{color:#000}.mdb-skin .navbar .navbar-nav .nav-item .dropdown-menu a:hover,.mdb-skin .navbar .navbar-nav .nav-item .dropdown-menu a:focus,.mdb-skin .navbar .navbar-nav .nav-item .dropdown-menu a:active{background-color:#1dade2}.mdb-skin .navbar.double-nav a{color:#fff}.mdb-skin .navbar form .md-form .form-control{font-weight:300;color:#fff}.mdb-skin .navbar form .md-form .form-control::-webkit-input-placeholder{color:#fff}.mdb-skin .navbar form .md-form .form-control::-moz-placeholder{color:#fff}.mdb-skin .navbar form .md-form .form-control:-ms-input-placeholder{color:#fff}.mdb-skin .navbar form .md-form .form-control::-ms-input-placeholder{color:#fff}.mdb-skin .navbar form .md-form .form-control::placeholder{color:#fff}.mdb-skin .page-footer{background-color:#243a51}.mdb-skin .side-nav{background-color:#224562}.mdb-skin .side-nav .logo-wrapper>div{background-color:transparent !important}.mdb-skin .side-nav .sn-avatar-wrapper img{border:3px solid #178ab4}.mdb-skin .side-nav .social{border-bottom:1px solid rgba(153,153,153,0.3)}.mdb-skin .side-nav .social a:hover .fas,.mdb-skin .side-nav .social a:hover .fab,.mdb-skin .side-nav .social a:hover .far{color:#33b5e5 !important;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.mdb-skin .side-nav .collapsible li{background-color:transparent}.mdb-skin .side-nav .collapsible li .collapsible-header{color:#fff;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.mdb-skin .side-nav .collapsible li .collapsible-header.active{background-color:rgba(72,198,255,0.8)}.mdb-skin .side-nav .collapsible li .collapsible-header:hover{background-color:rgba(72,198,255,0.8)}.mdb-skin .side-nav .collapsible li .collapsible-body a{color:#fff}.mdb-skin .side-nav .collapsible li .collapsible-body a:hover,.mdb-skin .side-nav .collapsible li .collapsible-body a.active,.mdb-skin .side-nav .collapsible li .collapsible-body a:active{color:#67d5ff}.mdb-skin .side-nav .collapsible li .collapsible-body a .fas,.mdb-skin .side-nav .collapsible li .collapsible-body a .fab,.mdb-skin .side-nav .collapsible li .collapsible-body a .far{color:#fff}.mdb-skin .side-nav .collapsible li a:not(.collapsible-header){color:#fff;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.mdb-skin .side-nav .collapsible li a:not(.collapsible-header):hover,.mdb-skin .side-nav .collapsible li a:not(.collapsible-header).active,.mdb-skin .side-nav .collapsible li a:not(.collapsible-header):active{color:#67d5ff !important}.mdb-skin .side-nav .sidenav-bg:after,.mdb-skin .side-nav .sidenav-bg.mask-strong:after{background:rgba(13,36,60,0.8)}.mdb-skin .side-nav .sidenav-bg.mask-light:after{background:rgba(13,36,60,0.65)}.mdb-skin .side-nav .sidenav-bg.mask-slight:after{background:rgba(13,36,60,0.5)}.mdb-skin .btn-primary{color:#fff;background-color:#33b5e5 !important}.mdb-skin .btn-primary:hover{color:#fff;background-color:#4abde8}.mdb-skin .btn-primary:focus,.mdb-skin .btn-primary.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin .btn-primary:focus,.mdb-skin .btn-primary:active,.mdb-skin .btn-primary.active{background-color:#14799e}.mdb-skin .btn-primary.dropdown-toggle{background-color:#33b5e5 !important}.mdb-skin .btn-primary.dropdown-toggle:hover,.mdb-skin .btn-primary.dropdown-toggle:focus{background-color:#4abde8 !important}.mdb-skin .btn-primary:not([disabled]):not(.disabled):active,.mdb-skin .btn-primary:not([disabled]):not(.disabled).active,.show>.mdb-skin .btn-primary.dropdown-toggle{background-color:#14799e !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin .btn-primary:not([disabled]):not(.disabled):active:focus,.mdb-skin .btn-primary:not([disabled]):not(.disabled).active:focus,.show>.mdb-skin .btn-primary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin .primary-ic{color:#33b5e5 !important}.mdb-skin .primary-ic:hover,.mdb-skin .primary-ic:focus{color:#33b5e5}.mdb-skin a.btn:not([href]):not([tabindex]),.mdb-skin a.btn:not([href]):not([tabindex]):focus,.mdb-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.mdb-skin table.table a.btn.btn-primary{color:#fff}.mdb-skin .btn-secondary{color:#fff;background-color:#0e3d67 !important}.mdb-skin .btn-secondary:hover{color:#fff;background-color:#114a7d}.mdb-skin .btn-secondary:focus,.mdb-skin .btn-secondary.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin .btn-secondary:focus,.mdb-skin .btn-secondary:active,.mdb-skin .btn-secondary.active{background-color:#02080d}.mdb-skin .btn-secondary.dropdown-toggle{background-color:#0e3d67 !important}.mdb-skin .btn-secondary.dropdown-toggle:hover,.mdb-skin .btn-secondary.dropdown-toggle:focus{background-color:#114a7d !important}.mdb-skin .btn-secondary:not([disabled]):not(.disabled):active,.mdb-skin .btn-secondary:not([disabled]):not(.disabled).active,.show>.mdb-skin .btn-secondary.dropdown-toggle{background-color:#02080d !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin .btn-secondary:not([disabled]):not(.disabled):active:focus,.mdb-skin .btn-secondary:not([disabled]):not(.disabled).active:focus,.show>.mdb-skin .btn-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin .secondary-ic{color:#0e3d67 !important}.mdb-skin .secondary-ic:hover,.mdb-skin .secondary-ic:focus{color:#0e3d67}.mdb-skin a.btn:not([href]):not([tabindex]),.mdb-skin a.btn:not([href]):not([tabindex]):focus,.mdb-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.mdb-skin table.table a.btn.btn-secondary{color:#fff}.mdb-skin .btn-default{color:#fff;background-color:#1a6398 !important}.mdb-skin .btn-default:hover{color:#fff;background-color:#1e71ae}.mdb-skin .btn-default:focus,.mdb-skin .btn-default.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin .btn-default:focus,.mdb-skin .btn-default:active,.mdb-skin .btn-default.active{background-color:#0b2a41}.mdb-skin .btn-default.dropdown-toggle{background-color:#1a6398 !important}.mdb-skin .btn-default.dropdown-toggle:hover,.mdb-skin .btn-default.dropdown-toggle:focus{background-color:#1e71ae !important}.mdb-skin .btn-default:not([disabled]):not(.disabled):active,.mdb-skin .btn-default:not([disabled]):not(.disabled).active,.show>.mdb-skin .btn-default.dropdown-toggle{background-color:#0b2a41 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin .btn-default:not([disabled]):not(.disabled):active:focus,.mdb-skin .btn-default:not([disabled]):not(.disabled).active:focus,.show>.mdb-skin .btn-default.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin .default-ic{color:#1a6398 !important}.mdb-skin .default-ic:hover,.mdb-skin .default-ic:focus{color:#1a6398}.mdb-skin a.btn:not([href]):not([tabindex]),.mdb-skin a.btn:not([href]):not([tabindex]):focus,.mdb-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.mdb-skin table.table a.btn.btn-default{color:#fff}.mdb-skin .btn-outline-primary{color:#33b5e5 !important;background-color:transparent !important;border:2px solid #33b5e5 !important}.mdb-skin .btn-outline-primary:hover,.mdb-skin .btn-outline-primary:focus,.mdb-skin .btn-outline-primary:active,.mdb-skin .btn-outline-primary:active:focus,.mdb-skin .btn-outline-primary.active{color:#33b5e5 !important;background-color:transparent !important;border-color:#33b5e5 !important}.mdb-skin .btn-outline-primary:not([disabled]):not(.disabled):active,.mdb-skin .btn-outline-primary:not([disabled]):not(.disabled).active,.show>.mdb-skin .btn-outline-primary.dropdown-toggle{background-color:transparent !important;border-color:#33b5e5 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin .btn-outline-primary:not([disabled]):not(.disabled):active:focus,.mdb-skin .btn-outline-primary:not([disabled]):not(.disabled).active:focus,.show>.mdb-skin .btn-outline-primary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin .btn-outline-secondary{color:#0e3d67 !important;background-color:transparent !important;border:2px solid #0e3d67 !important}.mdb-skin .btn-outline-secondary:hover,.mdb-skin .btn-outline-secondary:focus,.mdb-skin .btn-outline-secondary:active,.mdb-skin .btn-outline-secondary:active:focus,.mdb-skin .btn-outline-secondary.active{color:#0e3d67 !important;background-color:transparent !important;border-color:#0e3d67 !important}.mdb-skin .btn-outline-secondary:not([disabled]):not(.disabled):active,.mdb-skin .btn-outline-secondary:not([disabled]):not(.disabled).active,.show>.mdb-skin .btn-outline-secondary.dropdown-toggle{background-color:transparent !important;border-color:#0e3d67 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin .btn-outline-secondary:not([disabled]):not(.disabled):active:focus,.mdb-skin .btn-outline-secondary:not([disabled]):not(.disabled).active:focus,.show>.mdb-skin .btn-outline-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin .btn-outline-default{color:#1a6398 !important;background-color:transparent !important;border:2px solid #1a6398 !important}.mdb-skin .btn-outline-default:hover,.mdb-skin .btn-outline-default:focus,.mdb-skin .btn-outline-default:active,.mdb-skin .btn-outline-default:active:focus,.mdb-skin .btn-outline-default.active{color:#1a6398 !important;background-color:transparent !important;border-color:#1a6398 !important}.mdb-skin .btn-outline-default:not([disabled]):not(.disabled):active,.mdb-skin .btn-outline-default:not([disabled]):not(.disabled).active,.show>.mdb-skin .btn-outline-default.dropdown-toggle{background-color:transparent !important;border-color:#1a6398 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin .btn-outline-default:not([disabled]):not(.disabled):active:focus,.mdb-skin .btn-outline-default:not([disabled]):not(.disabled).active:focus,.show>.mdb-skin .btn-outline-default.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin .card .btn-action{background:#1a6398}.mdb-skin .card .btn-action:hover,.mdb-skin .card .btn-action:focus{background-color:#1e71ae !important}.mdb-skin .card .btn-action.active{background-color:#0b2a41 !important}.mdb-skin .md-outline input[type="text"]:focus:not([readonly]),.mdb-skin .md-outline input[type="password"]:focus:not([readonly]),.mdb-skin .md-outline input[type="email"]:focus:not([readonly]),.mdb-skin .md-outline input[type="url"]:focus:not([readonly]),.mdb-skin .md-outline input[type="time"]:focus:not([readonly]),.mdb-skin .md-outline input[type="date"]:focus:not([readonly]),.mdb-skin .md-outline input[type="datetime-local"]:focus:not([readonly]),.mdb-skin .md-outline input[type="tel"]:focus:not([readonly]),.mdb-skin .md-outline input[type="number"]:focus:not([readonly]),.mdb-skin .md-outline input[type="search-md"]:focus:not([readonly]),.mdb-skin .md-outline input[type="search"]:focus:not([readonly]),.mdb-skin .md-outline textarea:focus:not([readonly]){border-color:#33b5e5;-webkit-box-shadow:inset 0 0 0 1px #33b5e5;box-shadow:inset 0 0 0 1px #33b5e5}.mdb-skin .md-outline input[type="text"]:focus:not([readonly])+label,.mdb-skin .md-outline input[type="password"]:focus:not([readonly])+label,.mdb-skin .md-outline input[type="email"]:focus:not([readonly])+label,.mdb-skin .md-outline input[type="url"]:focus:not([readonly])+label,.mdb-skin .md-outline input[type="time"]:focus:not([readonly])+label,.mdb-skin .md-outline input[type="date"]:focus:not([readonly])+label,.mdb-skin .md-outline input[type="datetime-local"]:focus:not([readonly])+label,.mdb-skin .md-outline input[type="tel"]:focus:not([readonly])+label,.mdb-skin .md-outline input[type="number"]:focus:not([readonly])+label,.mdb-skin .md-outline input[type="search-md"]:focus:not([readonly])+label,.mdb-skin .md-outline input[type="search"]:focus:not([readonly])+label,.mdb-skin .md-outline textarea:focus:not([readonly])+label{color:#33b5e5}.mdb-skin .md-bg input[type="text"],.mdb-skin .md-bg input[type="password"],.mdb-skin .md-bg input[type="email"],.mdb-skin .md-bg input[type="url"],.mdb-skin .md-bg input[type="time"],.mdb-skin .md-bg input[type="date"],.mdb-skin .md-bg input[type="datetime-local"],.mdb-skin .md-bg input[type="tel"],.mdb-skin .md-bg input[type="number"],.mdb-skin .md-bg input[type="search-md"],.mdb-skin .md-bg input[type="search"],.mdb-skin .md-bg textarea.md-textarea{background-image:-webkit-gradient(linear, left top, left bottom, from(#33b5e5), to(#33b5e5)),-webkit-gradient(linear, left top, left bottom, from(#ced4da), to(#ced4da));background-image:linear-gradient(to bottom, #33b5e5, #33b5e5),linear-gradient(to bottom, #ced4da, #ced4da)}.mdb-skin input[type="email"]:focus:not([readonly]),.mdb-skin input[type="text"]:focus:not([readonly]),.mdb-skin input[type="password"]:focus:not([readonly]),.mdb-skin input[type="number"]:focus:not([readonly]),.mdb-skin textarea.md-textarea:focus:not([readonly]){border-color:#33b5e5;-webkit-box-shadow:0 1px 0 0 #33b5e5;box-shadow:0 1px 0 0 #33b5e5}.mdb-skin input[type="email"]:focus:not([readonly])+label,.mdb-skin input[type="text"]:focus:not([readonly])+label,.mdb-skin input[type="password"]:focus:not([readonly])+label,.mdb-skin input[type="number"]:focus:not([readonly])+label,.mdb-skin textarea.md-textarea:focus:not([readonly])+label{color:#33b5e5}.mdb-skin input[type="checkbox"]:checked+label:before{border-right:2px solid #33b5e5;border-bottom:2px solid #33b5e5}.mdb-skin input[type="checkbox"].filled-in:checked+label:before{border-right:2px solid #fff;border-bottom:2px solid #fff}.mdb-skin input[type="checkbox"].filled-in:checked+label:after{background-color:#33b5e5;border-color:#33b5e5}.mdb-skin .md-form .prefix.active{color:#33b5e5}.mdb-skin .select-wrapper.colorful-select.md-form.md-outline span.caret.active{color:#33b5e5 !important}.mdb-skin .select-wrapper.colorful-select.md-form.md-outline input.select-dropdown:focus{border-color:#33b5e5;-webkit-box-shadow:inset 0 0 0 1px #33b5e5;box-shadow:inset 0 0 0 1px #33b5e5}.mdb-skin .select-wrapper.colorful-select.md-form.md-outline+label.active{color:#33b5e5}.mdb-skin .select-wrapper.colorful-select.md-form .dropdown-content li.active,.mdb-skin .select-wrapper.colorful-select.md-form .dropdown-content li a,.mdb-skin .select-wrapper.colorful-select.md-form .dropdown-content li span:hover{background-color:#33b5e5 !important}.mdb-skin .select-wrapper.colorful-select.md-form .dropdown-content li.disabled.active{background-color:transparent !important}.mdb-skin .top-nav-collapse{background-color:#243a51}.mdb-skin .carousel-multi-item .controls-top>a,.mdb-skin .carousel-multi-item .carousel-indicators li,.mdb-skin .carousel-multi-item .carousel-indicators li.active{background-color:#33b5e5}.mdb-skin .form-header,.mdb-skin .card-header{background-color:#3cb8e6}.mdb-skin .spinner-primary-color,.mdb-skin .spinner-primary-color-only{border-color:#33b5e5}.mdb-skin .pagination-primary-color .page-item.active .page-link,.mdb-skin .pagination-primary-color .page-item.active .page-link:focus,.mdb-skin .pagination-primary-color .page-item.active .page-link:hover{color:#fff;background-color:#33b5e5}.mdb-skin .pagination-primary-color .page-link{color:#33b5e5}.mdb-skin .pagination-primary-color .page-link:focus{-webkit-box-shadow:none;box-shadow:none}.deep-purple-skin .gradient{background:#2e1f49;background:linear-gradient(135deg, #2e1f49 0%, #a47fe3 100%)}.deep-purple-skin .primary-color,.deep-purple-skin ul.stepper li.active a .circle,ul.stepper li.active a .deep-purple-skin .circle,.deep-purple-skin ul.stepper li.completed a .circle,ul.stepper li.completed a .deep-purple-skin .circle{background-color:#d0637c !important}.deep-purple-skin .navbar{color:#fff;background-color:#7f7e91}.deep-purple-skin .navbar .navbar-nav .nav-item .dropdown-menu a{color:#000}.deep-purple-skin .navbar .navbar-nav .nav-item .dropdown-menu a:hover,.deep-purple-skin .navbar .navbar-nav .nav-item .dropdown-menu a:focus,.deep-purple-skin .navbar .navbar-nav .nav-item .dropdown-menu a:active{background-color:#9d6eed}.deep-purple-skin .navbar.double-nav a{color:#fff}.deep-purple-skin .navbar form .md-form .form-control{font-weight:300;color:#fff}.deep-purple-skin .navbar form .md-form .form-control::-webkit-input-placeholder{color:#fff}.deep-purple-skin .navbar form .md-form .form-control::-moz-placeholder{color:#fff}.deep-purple-skin .navbar form .md-form .form-control:-ms-input-placeholder{color:#fff}.deep-purple-skin .navbar form .md-form .form-control::-ms-input-placeholder{color:#fff}.deep-purple-skin .navbar form .md-form .form-control::placeholder{color:#fff}.deep-purple-skin .page-footer{background-color:#7f7e91}.deep-purple-skin .side-nav{background-color:#372e5f}.deep-purple-skin .side-nav .logo-wrapper>div{background-color:transparent !important}.deep-purple-skin .side-nav .sn-avatar-wrapper img{border:3px solid #7e41e8}.deep-purple-skin .side-nav .social{border-bottom:1px solid rgba(153,153,153,0.3)}.deep-purple-skin .side-nav .social a:hover .fas,.deep-purple-skin .side-nav .social a:hover .fab,.deep-purple-skin .side-nav .social a:hover .far{color:#ac85f0 !important;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.deep-purple-skin .side-nav .collapsible li{background-color:transparent}.deep-purple-skin .side-nav .collapsible li .collapsible-header{color:#fff;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.deep-purple-skin .side-nav .collapsible li .collapsible-header.active{background-color:rgba(176,139,240,0.5)}.deep-purple-skin .side-nav .collapsible li .collapsible-header:hover{background-color:rgba(176,139,240,0.5)}.deep-purple-skin .side-nav .collapsible li .collapsible-body a{color:#fff}.deep-purple-skin .side-nav .collapsible li .collapsible-body a:hover,.deep-purple-skin .side-nav .collapsible li .collapsible-body a.active,.deep-purple-skin .side-nav .collapsible li .collapsible-body a:active{color:#c9abfc}.deep-purple-skin .side-nav .collapsible li .collapsible-body a .fas,.deep-purple-skin .side-nav .collapsible li .collapsible-body a .fab,.deep-purple-skin .side-nav .collapsible li .collapsible-body a .far{color:#fff}.deep-purple-skin .side-nav .collapsible li a:not(.collapsible-header){color:#fff;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.deep-purple-skin .side-nav .collapsible li a:not(.collapsible-header):hover,.deep-purple-skin .side-nav .collapsible li a:not(.collapsible-header).active,.deep-purple-skin .side-nav .collapsible li a:not(.collapsible-header):active{color:#c9abfc !important}.deep-purple-skin .side-nav .sidenav-bg:after,.deep-purple-skin .side-nav .sidenav-bg.mask-strong:after{background:rgba(36,9,56,0.88)}.deep-purple-skin .side-nav .sidenav-bg.mask-light:after{background:rgba(36,9,56,0.65)}.deep-purple-skin .side-nav .sidenav-bg.mask-slight:after{background:rgba(36,9,56,0.5)}.deep-purple-skin .btn-primary{color:#fff;background-color:#ac85f0 !important}.deep-purple-skin .btn-primary:hover{color:#fff;background-color:#bb9cf3}.deep-purple-skin .btn-primary:focus,.deep-purple-skin .btn-primary.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.deep-purple-skin .btn-primary:focus,.deep-purple-skin .btn-primary:active,.deep-purple-skin .btn-primary.active{background-color:#6e2ae5}.deep-purple-skin .btn-primary.dropdown-toggle{background-color:#ac85f0 !important}.deep-purple-skin .btn-primary.dropdown-toggle:hover,.deep-purple-skin .btn-primary.dropdown-toggle:focus{background-color:#bb9cf3 !important}.deep-purple-skin .btn-primary:not([disabled]):not(.disabled):active,.deep-purple-skin .btn-primary:not([disabled]):not(.disabled).active,.show>.deep-purple-skin .btn-primary.dropdown-toggle{background-color:#6e2ae5 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.deep-purple-skin .btn-primary:not([disabled]):not(.disabled):active:focus,.deep-purple-skin .btn-primary:not([disabled]):not(.disabled).active:focus,.show>.deep-purple-skin .btn-primary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.deep-purple-skin .primary-ic{color:#ac85f0 !important}.deep-purple-skin .primary-ic:hover,.deep-purple-skin .primary-ic:focus{color:#ac85f0}.deep-purple-skin a.btn:not([href]):not([tabindex]),.deep-purple-skin a.btn:not([href]):not([tabindex]):focus,.deep-purple-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.deep-purple-skin table.table a.btn.btn-primary{color:#fff}.deep-purple-skin .btn-secondary{color:#fff;background-color:#6e4ca3 !important}.deep-purple-skin .btn-secondary:hover{color:#fff;background-color:#7a58b1}.deep-purple-skin .btn-secondary:focus,.deep-purple-skin .btn-secondary.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.deep-purple-skin .btn-secondary:focus,.deep-purple-skin .btn-secondary:active,.deep-purple-skin .btn-secondary.active{background-color:#3f2c5d}.deep-purple-skin .btn-secondary.dropdown-toggle{background-color:#6e4ca3 !important}.deep-purple-skin .btn-secondary.dropdown-toggle:hover,.deep-purple-skin .btn-secondary.dropdown-toggle:focus{background-color:#7a58b1 !important}.deep-purple-skin .btn-secondary:not([disabled]):not(.disabled):active,.deep-purple-skin .btn-secondary:not([disabled]):not(.disabled).active,.show>.deep-purple-skin .btn-secondary.dropdown-toggle{background-color:#3f2c5d !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.deep-purple-skin .btn-secondary:not([disabled]):not(.disabled):active:focus,.deep-purple-skin .btn-secondary:not([disabled]):not(.disabled).active:focus,.show>.deep-purple-skin .btn-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.deep-purple-skin .secondary-ic{color:#6e4ca3 !important}.deep-purple-skin .secondary-ic:hover,.deep-purple-skin .secondary-ic:focus{color:#6e4ca3}.deep-purple-skin a.btn:not([href]):not([tabindex]),.deep-purple-skin a.btn:not([href]):not([tabindex]):focus,.deep-purple-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.deep-purple-skin table.table a.btn.btn-secondary{color:#fff}.deep-purple-skin .btn-default{color:#fff;background-color:#372e5f !important}.deep-purple-skin .btn-default:hover{color:#fff;background-color:#413670}.deep-purple-skin .btn-default:focus,.deep-purple-skin .btn-default.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.deep-purple-skin .btn-default:focus,.deep-purple-skin .btn-default:active,.deep-purple-skin .btn-default.active{background-color:#0f0d1a}.deep-purple-skin .btn-default.dropdown-toggle{background-color:#372e5f !important}.deep-purple-skin .btn-default.dropdown-toggle:hover,.deep-purple-skin .btn-default.dropdown-toggle:focus{background-color:#413670 !important}.deep-purple-skin .btn-default:not([disabled]):not(.disabled):active,.deep-purple-skin .btn-default:not([disabled]):not(.disabled).active,.show>.deep-purple-skin .btn-default.dropdown-toggle{background-color:#0f0d1a !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.deep-purple-skin .btn-default:not([disabled]):not(.disabled):active:focus,.deep-purple-skin .btn-default:not([disabled]):not(.disabled).active:focus,.show>.deep-purple-skin .btn-default.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.deep-purple-skin .default-ic{color:#372e5f !important}.deep-purple-skin .default-ic:hover,.deep-purple-skin .default-ic:focus{color:#372e5f}.deep-purple-skin a.btn:not([href]):not([tabindex]),.deep-purple-skin a.btn:not([href]):not([tabindex]):focus,.deep-purple-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.deep-purple-skin table.table a.btn.btn-default{color:#fff}.deep-purple-skin .btn-outline-primary{color:#ac85f0 !important;background-color:transparent !important;border:2px solid #ac85f0 !important}.deep-purple-skin .btn-outline-primary:hover,.deep-purple-skin .btn-outline-primary:focus,.deep-purple-skin .btn-outline-primary:active,.deep-purple-skin .btn-outline-primary:active:focus,.deep-purple-skin .btn-outline-primary.active{color:#ac85f0 !important;background-color:transparent !important;border-color:#ac85f0 !important}.deep-purple-skin .btn-outline-primary:not([disabled]):not(.disabled):active,.deep-purple-skin .btn-outline-primary:not([disabled]):not(.disabled).active,.show>.deep-purple-skin .btn-outline-primary.dropdown-toggle{background-color:transparent !important;border-color:#ac85f0 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.deep-purple-skin .btn-outline-primary:not([disabled]):not(.disabled):active:focus,.deep-purple-skin .btn-outline-primary:not([disabled]):not(.disabled).active:focus,.show>.deep-purple-skin .btn-outline-primary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.deep-purple-skin .btn-outline-secondary{color:#6e4ca3 !important;background-color:transparent !important;border:2px solid #6e4ca3 !important}.deep-purple-skin .btn-outline-secondary:hover,.deep-purple-skin .btn-outline-secondary:focus,.deep-purple-skin .btn-outline-secondary:active,.deep-purple-skin .btn-outline-secondary:active:focus,.deep-purple-skin .btn-outline-secondary.active{color:#6e4ca3 !important;background-color:transparent !important;border-color:#6e4ca3 !important}.deep-purple-skin .btn-outline-secondary:not([disabled]):not(.disabled):active,.deep-purple-skin .btn-outline-secondary:not([disabled]):not(.disabled).active,.show>.deep-purple-skin .btn-outline-secondary.dropdown-toggle{background-color:transparent !important;border-color:#6e4ca3 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.deep-purple-skin .btn-outline-secondary:not([disabled]):not(.disabled):active:focus,.deep-purple-skin .btn-outline-secondary:not([disabled]):not(.disabled).active:focus,.show>.deep-purple-skin .btn-outline-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.deep-purple-skin .btn-outline-default{color:#372e5f !important;background-color:transparent !important;border:2px solid #372e5f !important}.deep-purple-skin .btn-outline-default:hover,.deep-purple-skin .btn-outline-default:focus,.deep-purple-skin .btn-outline-default:active,.deep-purple-skin .btn-outline-default:active:focus,.deep-purple-skin .btn-outline-default.active{color:#372e5f !important;background-color:transparent !important;border-color:#372e5f !important}.deep-purple-skin .btn-outline-default:not([disabled]):not(.disabled):active,.deep-purple-skin .btn-outline-default:not([disabled]):not(.disabled).active,.show>.deep-purple-skin .btn-outline-default.dropdown-toggle{background-color:transparent !important;border-color:#372e5f !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.deep-purple-skin .btn-outline-default:not([disabled]):not(.disabled):active:focus,.deep-purple-skin .btn-outline-default:not([disabled]):not(.disabled).active:focus,.show>.deep-purple-skin .btn-outline-default.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.deep-purple-skin .card .btn-action{background:#372e5f}.deep-purple-skin .card .btn-action:hover,.deep-purple-skin .card .btn-action:focus{background-color:#413670 !important}.deep-purple-skin .card .btn-action.active{background-color:#0f0d1a !important}.deep-purple-skin .md-outline input[type="text"]:focus:not([readonly]),.deep-purple-skin .md-outline input[type="password"]:focus:not([readonly]),.deep-purple-skin .md-outline input[type="email"]:focus:not([readonly]),.deep-purple-skin .md-outline input[type="url"]:focus:not([readonly]),.deep-purple-skin .md-outline input[type="time"]:focus:not([readonly]),.deep-purple-skin .md-outline input[type="date"]:focus:not([readonly]),.deep-purple-skin .md-outline input[type="datetime-local"]:focus:not([readonly]),.deep-purple-skin .md-outline input[type="tel"]:focus:not([readonly]),.deep-purple-skin .md-outline input[type="number"]:focus:not([readonly]),.deep-purple-skin .md-outline input[type="search-md"]:focus:not([readonly]),.deep-purple-skin .md-outline input[type="search"]:focus:not([readonly]),.deep-purple-skin .md-outline textarea:focus:not([readonly]){border-color:#ac85f0;-webkit-box-shadow:inset 0 0 0 1px #ac85f0;box-shadow:inset 0 0 0 1px #ac85f0}.deep-purple-skin .md-outline input[type="text"]:focus:not([readonly])+label,.deep-purple-skin .md-outline input[type="password"]:focus:not([readonly])+label,.deep-purple-skin .md-outline input[type="email"]:focus:not([readonly])+label,.deep-purple-skin .md-outline input[type="url"]:focus:not([readonly])+label,.deep-purple-skin .md-outline input[type="time"]:focus:not([readonly])+label,.deep-purple-skin .md-outline input[type="date"]:focus:not([readonly])+label,.deep-purple-skin .md-outline input[type="datetime-local"]:focus:not([readonly])+label,.deep-purple-skin .md-outline input[type="tel"]:focus:not([readonly])+label,.deep-purple-skin .md-outline input[type="number"]:focus:not([readonly])+label,.deep-purple-skin .md-outline input[type="search-md"]:focus:not([readonly])+label,.deep-purple-skin .md-outline input[type="search"]:focus:not([readonly])+label,.deep-purple-skin .md-outline textarea:focus:not([readonly])+label{color:#ac85f0}.deep-purple-skin .md-bg input[type="text"],.deep-purple-skin .md-bg input[type="password"],.deep-purple-skin .md-bg input[type="email"],.deep-purple-skin .md-bg input[type="url"],.deep-purple-skin .md-bg input[type="time"],.deep-purple-skin .md-bg input[type="date"],.deep-purple-skin .md-bg input[type="datetime-local"],.deep-purple-skin .md-bg input[type="tel"],.deep-purple-skin .md-bg input[type="number"],.deep-purple-skin .md-bg input[type="search-md"],.deep-purple-skin .md-bg input[type="search"],.deep-purple-skin .md-bg textarea.md-textarea{background-image:-webkit-gradient(linear, left top, left bottom, from(#ac85f0), to(#ac85f0)),-webkit-gradient(linear, left top, left bottom, from(#ced4da), to(#ced4da));background-image:linear-gradient(to bottom, #ac85f0, #ac85f0),linear-gradient(to bottom, #ced4da, #ced4da)}.deep-purple-skin input[type="email"]:focus:not([readonly]),.deep-purple-skin input[type="text"]:focus:not([readonly]),.deep-purple-skin input[type="password"]:focus:not([readonly]),.deep-purple-skin input[type="number"]:focus:not([readonly]),.deep-purple-skin textarea.md-textarea:focus:not([readonly]){border-color:#ac85f0;-webkit-box-shadow:0 1px 0 0 #ac85f0;box-shadow:0 1px 0 0 #ac85f0}.deep-purple-skin input[type="email"]:focus:not([readonly])+label,.deep-purple-skin input[type="text"]:focus:not([readonly])+label,.deep-purple-skin input[type="password"]:focus:not([readonly])+label,.deep-purple-skin input[type="number"]:focus:not([readonly])+label,.deep-purple-skin textarea.md-textarea:focus:not([readonly])+label{color:#ac85f0}.deep-purple-skin input[type="checkbox"]:checked+label:before{border-right:2px solid #ac85f0;border-bottom:2px solid #ac85f0}.deep-purple-skin input[type="checkbox"].filled-in:checked+label:before{border-right:2px solid #fff;border-bottom:2px solid #fff}.deep-purple-skin input[type="checkbox"].filled-in:checked+label:after{background-color:#ac85f0;border-color:#ac85f0}.deep-purple-skin .md-form .prefix.active{color:#ac85f0}.deep-purple-skin .select-wrapper.colorful-select.md-form.md-outline span.caret.active{color:#ac85f0 !important}.deep-purple-skin .select-wrapper.colorful-select.md-form.md-outline input.select-dropdown:focus{border-color:#ac85f0;-webkit-box-shadow:inset 0 0 0 1px #ac85f0;box-shadow:inset 0 0 0 1px #ac85f0}.deep-purple-skin .select-wrapper.colorful-select.md-form.md-outline+label.active{color:#ac85f0}.deep-purple-skin .select-wrapper.colorful-select.md-form .dropdown-content li.active,.deep-purple-skin .select-wrapper.colorful-select.md-form .dropdown-content li a,.deep-purple-skin .select-wrapper.colorful-select.md-form .dropdown-content li span:hover{background-color:#ac85f0 !important}.deep-purple-skin .select-wrapper.colorful-select.md-form .dropdown-content li.disabled.active{background-color:transparent !important}.deep-purple-skin .top-nav-collapse{background-color:#7f7e91}.deep-purple-skin .carousel-multi-item .controls-top>a,.deep-purple-skin .carousel-multi-item .carousel-indicators li,.deep-purple-skin .carousel-multi-item .carousel-indicators li.active{background-color:#ac85f0}.deep-purple-skin .form-header,.deep-purple-skin .card-header{background-color:#b28ef1}.deep-purple-skin .spinner-primary-color,.deep-purple-skin .spinner-primary-color-only{border-color:#d0637c}.deep-purple-skin .pagination-primary-color .page-item.active .page-link,.deep-purple-skin .pagination-primary-color .page-item.active .page-link:focus,.deep-purple-skin .pagination-primary-color .page-item.active .page-link:hover{color:#fff;background-color:#d0637c}.deep-purple-skin .pagination-primary-color .page-link{color:#d0637c}.deep-purple-skin .pagination-primary-color .page-link:focus{-webkit-box-shadow:none;box-shadow:none}.navy-blue-skin .gradient{background:#222735;background:linear-gradient(135deg, #222735 0%, #4f68a6 100%)}.navy-blue-skin .primary-color,.navy-blue-skin ul.stepper li.active a .circle,ul.stepper li.active a .navy-blue-skin .circle,.navy-blue-skin ul.stepper li.completed a .circle,ul.stepper li.completed a .navy-blue-skin .circle{background-color:#309e9e !important}.navy-blue-skin .navbar{color:#fff;background-color:#353b50}.navy-blue-skin .navbar .navbar-nav .nav-item .dropdown-menu a{color:#000}.navy-blue-skin .navbar .navbar-nav .nav-item .dropdown-menu a:hover,.navy-blue-skin .navbar .navbar-nav .nav-item .dropdown-menu a:focus,.navy-blue-skin .navbar .navbar-nav .nav-item .dropdown-menu a:active{background-color:#36b6b6}.navy-blue-skin .navbar.double-nav a{color:#fff}.navy-blue-skin .navbar form .md-form .form-control{font-weight:300;color:#fff}.navy-blue-skin .navbar form .md-form .form-control::-webkit-input-placeholder{color:#fff}.navy-blue-skin .navbar form .md-form .form-control::-moz-placeholder{color:#fff}.navy-blue-skin .navbar form .md-form .form-control:-ms-input-placeholder{color:#fff}.navy-blue-skin .navbar form .md-form .form-control::-ms-input-placeholder{color:#fff}.navy-blue-skin .navbar form .md-form .form-control::placeholder{color:#fff}.navy-blue-skin .page-footer{background-color:#353b50}.navy-blue-skin .side-nav{background-color:#4c5678}.navy-blue-skin .side-nav .logo-wrapper>div{background-color:transparent !important}.navy-blue-skin .side-nav .sn-avatar-wrapper img{border:3px solid #2b8f8f}.navy-blue-skin .side-nav .social{border-bottom:1px solid rgba(153,153,153,0.3)}.navy-blue-skin .side-nav .social a:hover .fas,.navy-blue-skin .side-nav .social a:hover .fab,.navy-blue-skin .side-nav .social a:hover .far{color:#40c6c6 !important;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.navy-blue-skin .side-nav .collapsible li{background-color:transparent}.navy-blue-skin .side-nav .collapsible li .collapsible-header{color:#fff;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.navy-blue-skin .side-nav .collapsible li .collapsible-header.active{background-color:rgba(37,207,207,0.8)}.navy-blue-skin .side-nav .collapsible li .collapsible-header:hover{background-color:rgba(37,207,207,0.8)}.navy-blue-skin .side-nav .collapsible li .collapsible-body a{color:#fff}.navy-blue-skin .side-nav .collapsible li .collapsible-body a:hover,.navy-blue-skin .side-nav .collapsible li .collapsible-body a.active,.navy-blue-skin .side-nav .collapsible li .collapsible-body a:active{color:#40c6c6}.navy-blue-skin .side-nav .collapsible li .collapsible-body a .fas,.navy-blue-skin .side-nav .collapsible li .collapsible-body a .fab,.navy-blue-skin .side-nav .collapsible li .collapsible-body a .far{color:#fff}.navy-blue-skin .side-nav .collapsible li a:not(.collapsible-header){color:#fff;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.navy-blue-skin .side-nav .collapsible li a:not(.collapsible-header):hover,.navy-blue-skin .side-nav .collapsible li a:not(.collapsible-header).active,.navy-blue-skin .side-nav .collapsible li a:not(.collapsible-header):active{color:#40c6c6 !important}.navy-blue-skin .side-nav .sidenav-bg:after,.navy-blue-skin .side-nav .sidenav-bg.mask-strong:after{background:rgba(14,15,32,0.8)}.navy-blue-skin .side-nav .sidenav-bg.mask-light:after{background:rgba(14,15,32,0.65)}.navy-blue-skin .side-nav .sidenav-bg.mask-slight:after{background:rgba(14,15,32,0.5)}.navy-blue-skin .btn-primary{color:#fff;background-color:#40c6c6 !important}.navy-blue-skin .btn-primary:hover{color:#fff;background-color:#54cccc}.navy-blue-skin .btn-primary:focus,.navy-blue-skin .btn-primary.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.navy-blue-skin .btn-primary:focus,.navy-blue-skin .btn-primary:active,.navy-blue-skin .btn-primary.active{background-color:#257b7b}.navy-blue-skin .btn-primary.dropdown-toggle{background-color:#40c6c6 !important}.navy-blue-skin .btn-primary.dropdown-toggle:hover,.navy-blue-skin .btn-primary.dropdown-toggle:focus{background-color:#54cccc !important}.navy-blue-skin .btn-primary:not([disabled]):not(.disabled):active,.navy-blue-skin .btn-primary:not([disabled]):not(.disabled).active,.show>.navy-blue-skin .btn-primary.dropdown-toggle{background-color:#257b7b !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.navy-blue-skin .btn-primary:not([disabled]):not(.disabled):active:focus,.navy-blue-skin .btn-primary:not([disabled]):not(.disabled).active:focus,.show>.navy-blue-skin .btn-primary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.navy-blue-skin .primary-ic{color:#40c6c6 !important}.navy-blue-skin .primary-ic:hover,.navy-blue-skin .primary-ic:focus{color:#40c6c6}.navy-blue-skin a.btn:not([href]):not([tabindex]),.navy-blue-skin a.btn:not([href]):not([tabindex]):focus,.navy-blue-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.navy-blue-skin table.table a.btn.btn-primary{color:#fff}.navy-blue-skin .btn-secondary{color:#fff;background-color:#7e51b4 !important}.navy-blue-skin .btn-secondary:hover{color:#fff;background-color:#8b63bc}.navy-blue-skin .btn-secondary:focus,.navy-blue-skin .btn-secondary.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.navy-blue-skin .btn-secondary:focus,.navy-blue-skin .btn-secondary:active,.navy-blue-skin .btn-secondary.active{background-color:#4d306f}.navy-blue-skin .btn-secondary.dropdown-toggle{background-color:#7e51b4 !important}.navy-blue-skin .btn-secondary.dropdown-toggle:hover,.navy-blue-skin .btn-secondary.dropdown-toggle:focus{background-color:#8b63bc !important}.navy-blue-skin .btn-secondary:not([disabled]):not(.disabled):active,.navy-blue-skin .btn-secondary:not([disabled]):not(.disabled).active,.show>.navy-blue-skin .btn-secondary.dropdown-toggle{background-color:#4d306f !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.navy-blue-skin .btn-secondary:not([disabled]):not(.disabled):active:focus,.navy-blue-skin .btn-secondary:not([disabled]):not(.disabled).active:focus,.show>.navy-blue-skin .btn-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.navy-blue-skin .secondary-ic{color:#7e51b4 !important}.navy-blue-skin .secondary-ic:hover,.navy-blue-skin .secondary-ic:focus{color:#7e51b4}.navy-blue-skin a.btn:not([href]):not([tabindex]),.navy-blue-skin a.btn:not([href]):not([tabindex]):focus,.navy-blue-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.navy-blue-skin table.table a.btn.btn-secondary{color:#fff}.navy-blue-skin .btn-default{color:#fff;background-color:#293756 !important}.navy-blue-skin .btn-default:hover{color:#fff;background-color:#314267}.navy-blue-skin .btn-default:focus,.navy-blue-skin .btn-default.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.navy-blue-skin .btn-default:focus,.navy-blue-skin .btn-default:active,.navy-blue-skin .btn-default.active{background-color:#080b11}.navy-blue-skin .btn-default.dropdown-toggle{background-color:#293756 !important}.navy-blue-skin .btn-default.dropdown-toggle:hover,.navy-blue-skin .btn-default.dropdown-toggle:focus{background-color:#314267 !important}.navy-blue-skin .btn-default:not([disabled]):not(.disabled):active,.navy-blue-skin .btn-default:not([disabled]):not(.disabled).active,.show>.navy-blue-skin .btn-default.dropdown-toggle{background-color:#080b11 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.navy-blue-skin .btn-default:not([disabled]):not(.disabled):active:focus,.navy-blue-skin .btn-default:not([disabled]):not(.disabled).active:focus,.show>.navy-blue-skin .btn-default.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.navy-blue-skin .default-ic{color:#293756 !important}.navy-blue-skin .default-ic:hover,.navy-blue-skin .default-ic:focus{color:#293756}.navy-blue-skin a.btn:not([href]):not([tabindex]),.navy-blue-skin a.btn:not([href]):not([tabindex]):focus,.navy-blue-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.navy-blue-skin table.table a.btn.btn-default{color:#fff}.navy-blue-skin .btn-outline-primary{color:#40c6c6 !important;background-color:transparent !important;border:2px solid #40c6c6 !important}.navy-blue-skin .btn-outline-primary:hover,.navy-blue-skin .btn-outline-primary:focus,.navy-blue-skin .btn-outline-primary:active,.navy-blue-skin .btn-outline-primary:active:focus,.navy-blue-skin .btn-outline-primary.active{color:#40c6c6 !important;background-color:transparent !important;border-color:#40c6c6 !important}.navy-blue-skin .btn-outline-primary:not([disabled]):not(.disabled):active,.navy-blue-skin .btn-outline-primary:not([disabled]):not(.disabled).active,.show>.navy-blue-skin .btn-outline-primary.dropdown-toggle{background-color:transparent !important;border-color:#40c6c6 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.navy-blue-skin .btn-outline-primary:not([disabled]):not(.disabled):active:focus,.navy-blue-skin .btn-outline-primary:not([disabled]):not(.disabled).active:focus,.show>.navy-blue-skin .btn-outline-primary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.navy-blue-skin .btn-outline-secondary{color:#7e51b4 !important;background-color:transparent !important;border:2px solid #7e51b4 !important}.navy-blue-skin .btn-outline-secondary:hover,.navy-blue-skin .btn-outline-secondary:focus,.navy-blue-skin .btn-outline-secondary:active,.navy-blue-skin .btn-outline-secondary:active:focus,.navy-blue-skin .btn-outline-secondary.active{color:#7e51b4 !important;background-color:transparent !important;border-color:#7e51b4 !important}.navy-blue-skin .btn-outline-secondary:not([disabled]):not(.disabled):active,.navy-blue-skin .btn-outline-secondary:not([disabled]):not(.disabled).active,.show>.navy-blue-skin .btn-outline-secondary.dropdown-toggle{background-color:transparent !important;border-color:#7e51b4 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.navy-blue-skin .btn-outline-secondary:not([disabled]):not(.disabled):active:focus,.navy-blue-skin .btn-outline-secondary:not([disabled]):not(.disabled).active:focus,.show>.navy-blue-skin .btn-outline-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.navy-blue-skin .btn-outline-default{color:#293756 !important;background-color:transparent !important;border:2px solid #293756 !important}.navy-blue-skin .btn-outline-default:hover,.navy-blue-skin .btn-outline-default:focus,.navy-blue-skin .btn-outline-default:active,.navy-blue-skin .btn-outline-default:active:focus,.navy-blue-skin .btn-outline-default.active{color:#293756 !important;background-color:transparent !important;border-color:#293756 !important}.navy-blue-skin .btn-outline-default:not([disabled]):not(.disabled):active,.navy-blue-skin .btn-outline-default:not([disabled]):not(.disabled).active,.show>.navy-blue-skin .btn-outline-default.dropdown-toggle{background-color:transparent !important;border-color:#293756 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.navy-blue-skin .btn-outline-default:not([disabled]):not(.disabled):active:focus,.navy-blue-skin .btn-outline-default:not([disabled]):not(.disabled).active:focus,.show>.navy-blue-skin .btn-outline-default.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.navy-blue-skin .card .btn-action{background:#293756}.navy-blue-skin .card .btn-action:hover,.navy-blue-skin .card .btn-action:focus{background-color:#314267 !important}.navy-blue-skin .card .btn-action.active{background-color:#080b11 !important}.navy-blue-skin .md-outline input[type="text"]:focus:not([readonly]),.navy-blue-skin .md-outline input[type="password"]:focus:not([readonly]),.navy-blue-skin .md-outline input[type="email"]:focus:not([readonly]),.navy-blue-skin .md-outline input[type="url"]:focus:not([readonly]),.navy-blue-skin .md-outline input[type="time"]:focus:not([readonly]),.navy-blue-skin .md-outline input[type="date"]:focus:not([readonly]),.navy-blue-skin .md-outline input[type="datetime-local"]:focus:not([readonly]),.navy-blue-skin .md-outline input[type="tel"]:focus:not([readonly]),.navy-blue-skin .md-outline input[type="number"]:focus:not([readonly]),.navy-blue-skin .md-outline input[type="search-md"]:focus:not([readonly]),.navy-blue-skin .md-outline input[type="search"]:focus:not([readonly]),.navy-blue-skin .md-outline textarea:focus:not([readonly]){border-color:#40c6c6;-webkit-box-shadow:inset 0 0 0 1px #40c6c6;box-shadow:inset 0 0 0 1px #40c6c6}.navy-blue-skin .md-outline input[type="text"]:focus:not([readonly])+label,.navy-blue-skin .md-outline input[type="password"]:focus:not([readonly])+label,.navy-blue-skin .md-outline input[type="email"]:focus:not([readonly])+label,.navy-blue-skin .md-outline input[type="url"]:focus:not([readonly])+label,.navy-blue-skin .md-outline input[type="time"]:focus:not([readonly])+label,.navy-blue-skin .md-outline input[type="date"]:focus:not([readonly])+label,.navy-blue-skin .md-outline input[type="datetime-local"]:focus:not([readonly])+label,.navy-blue-skin .md-outline input[type="tel"]:focus:not([readonly])+label,.navy-blue-skin .md-outline input[type="number"]:focus:not([readonly])+label,.navy-blue-skin .md-outline input[type="search-md"]:focus:not([readonly])+label,.navy-blue-skin .md-outline input[type="search"]:focus:not([readonly])+label,.navy-blue-skin .md-outline textarea:focus:not([readonly])+label{color:#40c6c6}.navy-blue-skin .md-bg input[type="text"],.navy-blue-skin .md-bg input[type="password"],.navy-blue-skin .md-bg input[type="email"],.navy-blue-skin .md-bg input[type="url"],.navy-blue-skin .md-bg input[type="time"],.navy-blue-skin .md-bg input[type="date"],.navy-blue-skin .md-bg input[type="datetime-local"],.navy-blue-skin .md-bg input[type="tel"],.navy-blue-skin .md-bg input[type="number"],.navy-blue-skin .md-bg input[type="search-md"],.navy-blue-skin .md-bg input[type="search"],.navy-blue-skin .md-bg textarea.md-textarea{background-image:-webkit-gradient(linear, left top, left bottom, from(#40c6c6), to(#40c6c6)),-webkit-gradient(linear, left top, left bottom, from(#ced4da), to(#ced4da));background-image:linear-gradient(to bottom, #40c6c6, #40c6c6),linear-gradient(to bottom, #ced4da, #ced4da)}.navy-blue-skin input[type="email"]:focus:not([readonly]),.navy-blue-skin input[type="text"]:focus:not([readonly]),.navy-blue-skin input[type="password"]:focus:not([readonly]),.navy-blue-skin input[type="number"]:focus:not([readonly]),.navy-blue-skin textarea.md-textarea:focus:not([readonly]){border-color:#40c6c6;-webkit-box-shadow:0 1px 0 0 #40c6c6;box-shadow:0 1px 0 0 #40c6c6}.navy-blue-skin input[type="email"]:focus:not([readonly])+label,.navy-blue-skin input[type="text"]:focus:not([readonly])+label,.navy-blue-skin input[type="password"]:focus:not([readonly])+label,.navy-blue-skin input[type="number"]:focus:not([readonly])+label,.navy-blue-skin textarea.md-textarea:focus:not([readonly])+label{color:#40c6c6}.navy-blue-skin input[type="checkbox"]:checked+label:before{border-right:2px solid #40c6c6;border-bottom:2px solid #40c6c6}.navy-blue-skin input[type="checkbox"].filled-in:checked+label:before{border-right:2px solid #fff;border-bottom:2px solid #fff}.navy-blue-skin input[type="checkbox"].filled-in:checked+label:after{background-color:#40c6c6;border-color:#40c6c6}.navy-blue-skin .md-form .prefix.active{color:#40c6c6}.navy-blue-skin .select-wrapper.colorful-select.md-form.md-outline span.caret.active{color:#40c6c6 !important}.navy-blue-skin .select-wrapper.colorful-select.md-form.md-outline input.select-dropdown:focus{border-color:#40c6c6;-webkit-box-shadow:inset 0 0 0 1px #40c6c6;box-shadow:inset 0 0 0 1px #40c6c6}.navy-blue-skin .select-wrapper.colorful-select.md-form.md-outline+label.active{color:#40c6c6}.navy-blue-skin .select-wrapper.colorful-select.md-form .dropdown-content li.active,.navy-blue-skin .select-wrapper.colorful-select.md-form .dropdown-content li a,.navy-blue-skin .select-wrapper.colorful-select.md-form .dropdown-content li span:hover{background-color:#40c6c6 !important}.navy-blue-skin .select-wrapper.colorful-select.md-form .dropdown-content li.disabled.active{background-color:transparent !important}.navy-blue-skin .top-nav-collapse{background-color:#353b50}.navy-blue-skin .carousel-multi-item .controls-top>a,.navy-blue-skin .carousel-multi-item .carousel-indicators li,.navy-blue-skin .carousel-multi-item .carousel-indicators li.active{background-color:#40c6c6}.navy-blue-skin .form-header,.navy-blue-skin .card-header{background-color:#48c8c8}.navy-blue-skin .spinner-primary-color,.navy-blue-skin .spinner-primary-color-only{border-color:#309e9e}.navy-blue-skin .pagination-primary-color .page-item.active .page-link,.navy-blue-skin .pagination-primary-color .page-item.active .page-link:focus,.navy-blue-skin .pagination-primary-color .page-item.active .page-link:hover{color:#fff;background-color:#309e9e}.navy-blue-skin .pagination-primary-color .page-link{color:#309e9e}.navy-blue-skin .pagination-primary-color .page-link:focus{-webkit-box-shadow:none;box-shadow:none}.pink-skin .gradient{background:#812b5a;background:linear-gradient(135deg, #812b5a 0%, #f28cc0 100%)}.pink-skin .primary-color,.pink-skin ul.stepper li.active a .circle,ul.stepper li.active a .pink-skin .circle,.pink-skin ul.stepper li.completed a .circle,ul.stepper li.completed a .pink-skin .circle{background-color:#bd5d70 !important}.pink-skin .navbar{color:#fff;background-color:#535466}.pink-skin .navbar .navbar-nav .nav-item .dropdown-menu a{color:#000}.pink-skin .navbar .navbar-nav .nav-item .dropdown-menu a:hover,.pink-skin .navbar .navbar-nav .nav-item .dropdown-menu a:focus,.pink-skin .navbar .navbar-nav .nav-item .dropdown-menu a:active{background-color:#9192a2}.pink-skin .navbar.double-nav a{color:#fff}.pink-skin .navbar form .md-form .form-control{font-weight:300;color:#fff}.pink-skin .navbar form .md-form .form-control::-webkit-input-placeholder{color:#fff}.pink-skin .navbar form .md-form .form-control::-moz-placeholder{color:#fff}.pink-skin .navbar form .md-form .form-control:-ms-input-placeholder{color:#fff}.pink-skin .navbar form .md-form .form-control::-ms-input-placeholder{color:#fff}.pink-skin .navbar form .md-form .form-control::placeholder{color:#fff}.pink-skin .page-footer{background-color:#535466}.pink-skin .side-nav{background-color:#aa5077}.pink-skin .side-nav .logo-wrapper>div{background-color:transparent !important}.pink-skin .side-nav .sn-avatar-wrapper img{border:3px solid #76778b}.pink-skin .side-nav .social{border-bottom:1px solid rgba(153,153,153,0.3)}.pink-skin .side-nav .social a:hover .fas,.pink-skin .side-nav .social a:hover .fab,.pink-skin .side-nav .social a:hover .far{color:#9fa0ae !important;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.pink-skin .side-nav .collapsible li{background-color:transparent}.pink-skin .side-nav .collapsible li .collapsible-header{color:#fff;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.pink-skin .side-nav .collapsible li .collapsible-header.active{background-color:rgba(0,0,0,0.4)}.pink-skin .side-nav .collapsible li .collapsible-header:hover{background-color:rgba(0,0,0,0.4)}.pink-skin .side-nav .collapsible li .collapsible-body a{color:#fff}.pink-skin .side-nav .collapsible li .collapsible-body a:hover,.pink-skin .side-nav .collapsible li .collapsible-body a.active,.pink-skin .side-nav .collapsible li .collapsible-body a:active{color:#ffb0e6}.pink-skin .side-nav .collapsible li .collapsible-body a .fas,.pink-skin .side-nav .collapsible li .collapsible-body a .fab,.pink-skin .side-nav .collapsible li .collapsible-body a .far{color:#fff}.pink-skin .side-nav .collapsible li a:not(.collapsible-header){color:#fff;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.pink-skin .side-nav .collapsible li a:not(.collapsible-header):hover,.pink-skin .side-nav .collapsible li a:not(.collapsible-header).active,.pink-skin .side-nav .collapsible li a:not(.collapsible-header):active{color:#ffb0e6 !important}.pink-skin .side-nav .sidenav-bg:after,.pink-skin .side-nav .sidenav-bg.mask-strong:after{background:rgba(152,47,88,0.8)}.pink-skin .side-nav .sidenav-bg.mask-light:after{background:rgba(152,47,88,0.65)}.pink-skin .side-nav .sidenav-bg.mask-slight:after{background:rgba(152,47,88,0.5)}.pink-skin .btn-primary{color:#fff;background-color:#601f39 !important}.pink-skin .btn-primary:hover{color:#fff;background-color:#732544}.pink-skin .btn-primary:focus,.pink-skin .btn-primary.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.pink-skin .btn-primary:focus,.pink-skin .btn-primary:active,.pink-skin .btn-primary.active{background-color:#13060b}.pink-skin .btn-primary.dropdown-toggle{background-color:#601f39 !important}.pink-skin .btn-primary.dropdown-toggle:hover,.pink-skin .btn-primary.dropdown-toggle:focus{background-color:#732544 !important}.pink-skin .btn-primary:not([disabled]):not(.disabled):active,.pink-skin .btn-primary:not([disabled]):not(.disabled).active,.show>.pink-skin .btn-primary.dropdown-toggle{background-color:#13060b !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.pink-skin .btn-primary:not([disabled]):not(.disabled):active:focus,.pink-skin .btn-primary:not([disabled]):not(.disabled).active:focus,.show>.pink-skin .btn-primary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.pink-skin .primary-ic{color:#601f39 !important}.pink-skin .primary-ic:hover,.pink-skin .primary-ic:focus{color:#601f39}.pink-skin a.btn:not([href]):not([tabindex]),.pink-skin a.btn:not([href]):not([tabindex]):focus,.pink-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.pink-skin table.table a.btn.btn-primary{color:#fff}.pink-skin .btn-secondary{color:#fff;background-color:#e7649d !important}.pink-skin .btn-secondary:hover{color:#fff;background-color:#ea7aab}.pink-skin .btn-secondary:focus,.pink-skin .btn-secondary.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.pink-skin .btn-secondary:focus,.pink-skin .btn-secondary:active,.pink-skin .btn-secondary.active{background-color:#c61f68}.pink-skin .btn-secondary.dropdown-toggle{background-color:#e7649d !important}.pink-skin .btn-secondary.dropdown-toggle:hover,.pink-skin .btn-secondary.dropdown-toggle:focus{background-color:#ea7aab !important}.pink-skin .btn-secondary:not([disabled]):not(.disabled):active,.pink-skin .btn-secondary:not([disabled]):not(.disabled).active,.show>.pink-skin .btn-secondary.dropdown-toggle{background-color:#c61f68 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.pink-skin .btn-secondary:not([disabled]):not(.disabled):active:focus,.pink-skin .btn-secondary:not([disabled]):not(.disabled).active:focus,.show>.pink-skin .btn-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.pink-skin .secondary-ic{color:#e7649d !important}.pink-skin .secondary-ic:hover,.pink-skin .secondary-ic:focus{color:#e7649d}.pink-skin a.btn:not([href]):not([tabindex]),.pink-skin a.btn:not([href]):not([tabindex]):focus,.pink-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.pink-skin table.table a.btn.btn-secondary{color:#fff}.pink-skin .btn-default{color:#fff;background-color:#535466 !important}.pink-skin .btn-default:hover{color:#fff;background-color:#5e6074}.pink-skin .btn-default:focus,.pink-skin .btn-default.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.pink-skin .btn-default:focus,.pink-skin .btn-default:active,.pink-skin .btn-default.active{background-color:#25262e}.pink-skin .btn-default.dropdown-toggle{background-color:#535466 !important}.pink-skin .btn-default.dropdown-toggle:hover,.pink-skin .btn-default.dropdown-toggle:focus{background-color:#5e6074 !important}.pink-skin .btn-default:not([disabled]):not(.disabled):active,.pink-skin .btn-default:not([disabled]):not(.disabled).active,.show>.pink-skin .btn-default.dropdown-toggle{background-color:#25262e !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.pink-skin .btn-default:not([disabled]):not(.disabled):active:focus,.pink-skin .btn-default:not([disabled]):not(.disabled).active:focus,.show>.pink-skin .btn-default.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.pink-skin .default-ic{color:#535466 !important}.pink-skin .default-ic:hover,.pink-skin .default-ic:focus{color:#535466}.pink-skin a.btn:not([href]):not([tabindex]),.pink-skin a.btn:not([href]):not([tabindex]):focus,.pink-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.pink-skin table.table a.btn.btn-default{color:#fff}.pink-skin .btn-outline-primary{color:#601f39 !important;background-color:transparent !important;border:2px solid #601f39 !important}.pink-skin .btn-outline-primary:hover,.pink-skin .btn-outline-primary:focus,.pink-skin .btn-outline-primary:active,.pink-skin .btn-outline-primary:active:focus,.pink-skin .btn-outline-primary.active{color:#601f39 !important;background-color:transparent !important;border-color:#601f39 !important}.pink-skin .btn-outline-primary:not([disabled]):not(.disabled):active,.pink-skin .btn-outline-primary:not([disabled]):not(.disabled).active,.show>.pink-skin .btn-outline-primary.dropdown-toggle{background-color:transparent !important;border-color:#601f39 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.pink-skin .btn-outline-primary:not([disabled]):not(.disabled):active:focus,.pink-skin .btn-outline-primary:not([disabled]):not(.disabled).active:focus,.show>.pink-skin .btn-outline-primary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.pink-skin .btn-outline-secondary{color:#e7649d !important;background-color:transparent !important;border:2px solid #e7649d !important}.pink-skin .btn-outline-secondary:hover,.pink-skin .btn-outline-secondary:focus,.pink-skin .btn-outline-secondary:active,.pink-skin .btn-outline-secondary:active:focus,.pink-skin .btn-outline-secondary.active{color:#e7649d !important;background-color:transparent !important;border-color:#e7649d !important}.pink-skin .btn-outline-secondary:not([disabled]):not(.disabled):active,.pink-skin .btn-outline-secondary:not([disabled]):not(.disabled).active,.show>.pink-skin .btn-outline-secondary.dropdown-toggle{background-color:transparent !important;border-color:#e7649d !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.pink-skin .btn-outline-secondary:not([disabled]):not(.disabled):active:focus,.pink-skin .btn-outline-secondary:not([disabled]):not(.disabled).active:focus,.show>.pink-skin .btn-outline-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.pink-skin .btn-outline-default{color:#535466 !important;background-color:transparent !important;border:2px solid #535466 !important}.pink-skin .btn-outline-default:hover,.pink-skin .btn-outline-default:focus,.pink-skin .btn-outline-default:active,.pink-skin .btn-outline-default:active:focus,.pink-skin .btn-outline-default.active{color:#535466 !important;background-color:transparent !important;border-color:#535466 !important}.pink-skin .btn-outline-default:not([disabled]):not(.disabled):active,.pink-skin .btn-outline-default:not([disabled]):not(.disabled).active,.show>.pink-skin .btn-outline-default.dropdown-toggle{background-color:transparent !important;border-color:#535466 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.pink-skin .btn-outline-default:not([disabled]):not(.disabled):active:focus,.pink-skin .btn-outline-default:not([disabled]):not(.disabled).active:focus,.show>.pink-skin .btn-outline-default.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.pink-skin .card .btn-action{background:#535466}.pink-skin .card .btn-action:hover,.pink-skin .card .btn-action:focus{background-color:#5e6074 !important}.pink-skin .card .btn-action.active{background-color:#25262e !important}.pink-skin .md-outline input[type="text"]:focus:not([readonly]),.pink-skin .md-outline input[type="password"]:focus:not([readonly]),.pink-skin .md-outline input[type="email"]:focus:not([readonly]),.pink-skin .md-outline input[type="url"]:focus:not([readonly]),.pink-skin .md-outline input[type="time"]:focus:not([readonly]),.pink-skin .md-outline input[type="date"]:focus:not([readonly]),.pink-skin .md-outline input[type="datetime-local"]:focus:not([readonly]),.pink-skin .md-outline input[type="tel"]:focus:not([readonly]),.pink-skin .md-outline input[type="number"]:focus:not([readonly]),.pink-skin .md-outline input[type="search-md"]:focus:not([readonly]),.pink-skin .md-outline input[type="search"]:focus:not([readonly]),.pink-skin .md-outline textarea:focus:not([readonly]){border-color:#9fa0ae;-webkit-box-shadow:inset 0 0 0 1px #9fa0ae;box-shadow:inset 0 0 0 1px #9fa0ae}.pink-skin .md-outline input[type="text"]:focus:not([readonly])+label,.pink-skin .md-outline input[type="password"]:focus:not([readonly])+label,.pink-skin .md-outline input[type="email"]:focus:not([readonly])+label,.pink-skin .md-outline input[type="url"]:focus:not([readonly])+label,.pink-skin .md-outline input[type="time"]:focus:not([readonly])+label,.pink-skin .md-outline input[type="date"]:focus:not([readonly])+label,.pink-skin .md-outline input[type="datetime-local"]:focus:not([readonly])+label,.pink-skin .md-outline input[type="tel"]:focus:not([readonly])+label,.pink-skin .md-outline input[type="number"]:focus:not([readonly])+label,.pink-skin .md-outline input[type="search-md"]:focus:not([readonly])+label,.pink-skin .md-outline input[type="search"]:focus:not([readonly])+label,.pink-skin .md-outline textarea:focus:not([readonly])+label{color:#9fa0ae}.pink-skin .md-bg input[type="text"],.pink-skin .md-bg input[type="password"],.pink-skin .md-bg input[type="email"],.pink-skin .md-bg input[type="url"],.pink-skin .md-bg input[type="time"],.pink-skin .md-bg input[type="date"],.pink-skin .md-bg input[type="datetime-local"],.pink-skin .md-bg input[type="tel"],.pink-skin .md-bg input[type="number"],.pink-skin .md-bg input[type="search-md"],.pink-skin .md-bg input[type="search"],.pink-skin .md-bg textarea.md-textarea{background-image:-webkit-gradient(linear, left top, left bottom, from(#9fa0ae), to(#9fa0ae)),-webkit-gradient(linear, left top, left bottom, from(#ced4da), to(#ced4da));background-image:linear-gradient(to bottom, #9fa0ae, #9fa0ae),linear-gradient(to bottom, #ced4da, #ced4da)}.pink-skin input[type="email"]:focus:not([readonly]),.pink-skin input[type="text"]:focus:not([readonly]),.pink-skin input[type="password"]:focus:not([readonly]),.pink-skin input[type="number"]:focus:not([readonly]),.pink-skin textarea.md-textarea:focus:not([readonly]){border-color:#9fa0ae;-webkit-box-shadow:0 1px 0 0 #9fa0ae;box-shadow:0 1px 0 0 #9fa0ae}.pink-skin input[type="email"]:focus:not([readonly])+label,.pink-skin input[type="text"]:focus:not([readonly])+label,.pink-skin input[type="password"]:focus:not([readonly])+label,.pink-skin input[type="number"]:focus:not([readonly])+label,.pink-skin textarea.md-textarea:focus:not([readonly])+label{color:#9fa0ae}.pink-skin input[type="checkbox"]:checked+label:before{border-right:2px solid #9fa0ae;border-bottom:2px solid #9fa0ae}.pink-skin input[type="checkbox"].filled-in:checked+label:before{border-right:2px solid #fff;border-bottom:2px solid #fff}.pink-skin input[type="checkbox"].filled-in:checked+label:after{background-color:#9fa0ae;border-color:#9fa0ae}.pink-skin .md-form .prefix.active{color:#9fa0ae}.pink-skin .select-wrapper.colorful-select.md-form.md-outline span.caret.active{color:#9fa0ae !important}.pink-skin .select-wrapper.colorful-select.md-form.md-outline input.select-dropdown:focus{border-color:#9fa0ae;-webkit-box-shadow:inset 0 0 0 1px #9fa0ae;box-shadow:inset 0 0 0 1px #9fa0ae}.pink-skin .select-wrapper.colorful-select.md-form.md-outline+label.active{color:#9fa0ae}.pink-skin .select-wrapper.colorful-select.md-form .dropdown-content li.active,.pink-skin .select-wrapper.colorful-select.md-form .dropdown-content li a,.pink-skin .select-wrapper.colorful-select.md-form .dropdown-content li span:hover{background-color:#9fa0ae !important}.pink-skin .select-wrapper.colorful-select.md-form .dropdown-content li.disabled.active{background-color:transparent !important}.pink-skin .top-nav-collapse{background-color:#535466}.pink-skin .carousel-multi-item .controls-top>a,.pink-skin .carousel-multi-item .carousel-indicators li,.pink-skin .carousel-multi-item .carousel-indicators li.active{background-color:#9fa0ae}.pink-skin .form-header,.pink-skin .card-header{background-color:#a5a5b3}.pink-skin .spinner-primary-color,.pink-skin .spinner-primary-color-only{border-color:#bd5d70}.pink-skin .pagination-primary-color .page-item.active .page-link,.pink-skin .pagination-primary-color .page-item.active .page-link:focus,.pink-skin .pagination-primary-color .page-item.active .page-link:hover{color:#fff;background-color:#bd5d70}.pink-skin .pagination-primary-color .page-link{color:#bd5d70}.pink-skin .pagination-primary-color .page-link:focus{-webkit-box-shadow:none;box-shadow:none}.indigo-skin .gradient{background:#272d6e;background:linear-gradient(135deg, #272d6e 0%, #90a8ff 100%)}.indigo-skin .primary-color,.indigo-skin ul.stepper li.active a .circle,ul.stepper li.active a .indigo-skin .circle,.indigo-skin ul.stepper li.completed a .circle,ul.stepper li.completed a .indigo-skin .circle{background-color:#7f82c5 !important}.indigo-skin .navbar{color:#fff;background-color:#9095aa}.indigo-skin .navbar .navbar-nav .nav-item .dropdown-menu a{color:#000}.indigo-skin .navbar .navbar-nav .nav-item .dropdown-menu a:hover,.indigo-skin .navbar .navbar-nav .nav-item .dropdown-menu a:focus,.indigo-skin .navbar .navbar-nav .nav-item .dropdown-menu a:active{background-color:#fd4d79}.indigo-skin .navbar.double-nav a{color:#fff}.indigo-skin .navbar form .md-form .form-control{font-weight:300;color:#fff}.indigo-skin .navbar form .md-form .form-control::-webkit-input-placeholder{color:#fff}.indigo-skin .navbar form .md-form .form-control::-moz-placeholder{color:#fff}.indigo-skin .navbar form .md-form .form-control:-ms-input-placeholder{color:#fff}.indigo-skin .navbar form .md-form .form-control::-ms-input-placeholder{color:#fff}.indigo-skin .navbar form .md-form .form-control::placeholder{color:#fff}.indigo-skin .page-footer{background-color:#9095aa}.indigo-skin .side-nav{background-color:#404f9f}.indigo-skin .side-nav .logo-wrapper>div{background-color:transparent !important}.indigo-skin .side-nav .sn-avatar-wrapper img{border:3px solid #fc1a53}.indigo-skin .side-nav .social{border-bottom:1px solid rgba(153,153,153,0.3)}.indigo-skin .side-nav .social a:hover .fas,.indigo-skin .side-nav .social a:hover .fab,.indigo-skin .side-nav .social a:hover .far{color:#fd668c !important;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.indigo-skin .side-nav .collapsible li{background-color:transparent}.indigo-skin .side-nav .collapsible li .collapsible-header{color:#fff;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.indigo-skin .side-nav .collapsible li .collapsible-header.active{background-color:rgba(250,80,121,0.8)}.indigo-skin .side-nav .collapsible li .collapsible-header:hover{background-color:rgba(250,80,121,0.8)}.indigo-skin .side-nav .collapsible li .collapsible-body a{color:#fff}.indigo-skin .side-nav .collapsible li .collapsible-body a:hover,.indigo-skin .side-nav .collapsible li .collapsible-body a.active,.indigo-skin .side-nav .collapsible li .collapsible-body a:active{color:#ff89ac}.indigo-skin .side-nav .collapsible li .collapsible-body a .fas,.indigo-skin .side-nav .collapsible li .collapsible-body a .fab,.indigo-skin .side-nav .collapsible li .collapsible-body a .far{color:#fff}.indigo-skin .side-nav .collapsible li a:not(.collapsible-header){color:#fff;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.indigo-skin .side-nav .collapsible li a:not(.collapsible-header):hover,.indigo-skin .side-nav .collapsible li a:not(.collapsible-header).active,.indigo-skin .side-nav .collapsible li a:not(.collapsible-header):active{color:#ff89ac !important}.indigo-skin .side-nav .sidenav-bg:after,.indigo-skin .side-nav .sidenav-bg.mask-strong:after{background:rgba(35,65,134,0.8)}.indigo-skin .side-nav .sidenav-bg.mask-light:after{background:rgba(35,65,134,0.65)}.indigo-skin .side-nav .sidenav-bg.mask-slight:after{background:rgba(35,65,134,0.5)}.indigo-skin .btn-primary{color:#fff;background-color:#fd668c !important}.indigo-skin .btn-primary:hover{color:#fff;background-color:#fd7f9f}.indigo-skin .btn-primary:focus,.indigo-skin .btn-primary.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.indigo-skin .btn-primary:focus,.indigo-skin .btn-primary:active,.indigo-skin .btn-primary.active{background-color:#fa0341}.indigo-skin .btn-primary.dropdown-toggle{background-color:#fd668c !important}.indigo-skin .btn-primary.dropdown-toggle:hover,.indigo-skin .btn-primary.dropdown-toggle:focus{background-color:#fd7f9f !important}.indigo-skin .btn-primary:not([disabled]):not(.disabled):active,.indigo-skin .btn-primary:not([disabled]):not(.disabled).active,.show>.indigo-skin .btn-primary.dropdown-toggle{background-color:#fa0341 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.indigo-skin .btn-primary:not([disabled]):not(.disabled):active:focus,.indigo-skin .btn-primary:not([disabled]):not(.disabled).active:focus,.show>.indigo-skin .btn-primary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.indigo-skin .primary-ic{color:#fd668c !important}.indigo-skin .primary-ic:hover,.indigo-skin .primary-ic:focus{color:#fd668c}.indigo-skin a.btn:not([href]):not([tabindex]),.indigo-skin a.btn:not([href]):not([tabindex]):focus,.indigo-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.indigo-skin table.table a.btn.btn-primary{color:#fff}.indigo-skin .btn-secondary{color:#fff;background-color:#3c61ae !important}.indigo-skin .btn-secondary:hover{color:#fff;background-color:#456cbf}.indigo-skin .btn-secondary:focus,.indigo-skin .btn-secondary.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.indigo-skin .btn-secondary:focus,.indigo-skin .btn-secondary:active,.indigo-skin .btn-secondary.active{background-color:#223762}.indigo-skin .btn-secondary.dropdown-toggle{background-color:#3c61ae !important}.indigo-skin .btn-secondary.dropdown-toggle:hover,.indigo-skin .btn-secondary.dropdown-toggle:focus{background-color:#456cbf !important}.indigo-skin .btn-secondary:not([disabled]):not(.disabled):active,.indigo-skin .btn-secondary:not([disabled]):not(.disabled).active,.show>.indigo-skin .btn-secondary.dropdown-toggle{background-color:#223762 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.indigo-skin .btn-secondary:not([disabled]):not(.disabled):active:focus,.indigo-skin .btn-secondary:not([disabled]):not(.disabled).active:focus,.show>.indigo-skin .btn-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.indigo-skin .secondary-ic{color:#3c61ae !important}.indigo-skin .secondary-ic:hover,.indigo-skin .secondary-ic:focus{color:#3c61ae}.indigo-skin a.btn:not([href]):not([tabindex]),.indigo-skin a.btn:not([href]):not([tabindex]):focus,.indigo-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.indigo-skin table.table a.btn.btn-secondary{color:#fff}.indigo-skin .btn-default{color:#fff;background-color:#9095aa !important}.indigo-skin .btn-default:hover{color:#fff;background-color:#9ea3b5}.indigo-skin .btn-default:focus,.indigo-skin .btn-default.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.indigo-skin .btn-default:focus,.indigo-skin .btn-default:active,.indigo-skin .btn-default.active{background-color:#5c6178}.indigo-skin .btn-default.dropdown-toggle{background-color:#9095aa !important}.indigo-skin .btn-default.dropdown-toggle:hover,.indigo-skin .btn-default.dropdown-toggle:focus{background-color:#9ea3b5 !important}.indigo-skin .btn-default:not([disabled]):not(.disabled):active,.indigo-skin .btn-default:not([disabled]):not(.disabled).active,.show>.indigo-skin .btn-default.dropdown-toggle{background-color:#5c6178 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.indigo-skin .btn-default:not([disabled]):not(.disabled):active:focus,.indigo-skin .btn-default:not([disabled]):not(.disabled).active:focus,.show>.indigo-skin .btn-default.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.indigo-skin .default-ic{color:#9095aa !important}.indigo-skin .default-ic:hover,.indigo-skin .default-ic:focus{color:#9095aa}.indigo-skin a.btn:not([href]):not([tabindex]),.indigo-skin a.btn:not([href]):not([tabindex]):focus,.indigo-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.indigo-skin table.table a.btn.btn-default{color:#fff}.indigo-skin .btn-outline-primary{color:#fd668c !important;background-color:transparent !important;border:2px solid #fd668c !important}.indigo-skin .btn-outline-primary:hover,.indigo-skin .btn-outline-primary:focus,.indigo-skin .btn-outline-primary:active,.indigo-skin .btn-outline-primary:active:focus,.indigo-skin .btn-outline-primary.active{color:#fd668c !important;background-color:transparent !important;border-color:#fd668c !important}.indigo-skin .btn-outline-primary:not([disabled]):not(.disabled):active,.indigo-skin .btn-outline-primary:not([disabled]):not(.disabled).active,.show>.indigo-skin .btn-outline-primary.dropdown-toggle{background-color:transparent !important;border-color:#fd668c !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.indigo-skin .btn-outline-primary:not([disabled]):not(.disabled):active:focus,.indigo-skin .btn-outline-primary:not([disabled]):not(.disabled).active:focus,.show>.indigo-skin .btn-outline-primary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.indigo-skin .btn-outline-secondary{color:#3c61ae !important;background-color:transparent !important;border:2px solid #3c61ae !important}.indigo-skin .btn-outline-secondary:hover,.indigo-skin .btn-outline-secondary:focus,.indigo-skin .btn-outline-secondary:active,.indigo-skin .btn-outline-secondary:active:focus,.indigo-skin .btn-outline-secondary.active{color:#3c61ae !important;background-color:transparent !important;border-color:#3c61ae !important}.indigo-skin .btn-outline-secondary:not([disabled]):not(.disabled):active,.indigo-skin .btn-outline-secondary:not([disabled]):not(.disabled).active,.show>.indigo-skin .btn-outline-secondary.dropdown-toggle{background-color:transparent !important;border-color:#3c61ae !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.indigo-skin .btn-outline-secondary:not([disabled]):not(.disabled):active:focus,.indigo-skin .btn-outline-secondary:not([disabled]):not(.disabled).active:focus,.show>.indigo-skin .btn-outline-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.indigo-skin .btn-outline-default{color:#9095aa !important;background-color:transparent !important;border:2px solid #9095aa !important}.indigo-skin .btn-outline-default:hover,.indigo-skin .btn-outline-default:focus,.indigo-skin .btn-outline-default:active,.indigo-skin .btn-outline-default:active:focus,.indigo-skin .btn-outline-default.active{color:#9095aa !important;background-color:transparent !important;border-color:#9095aa !important}.indigo-skin .btn-outline-default:not([disabled]):not(.disabled):active,.indigo-skin .btn-outline-default:not([disabled]):not(.disabled).active,.show>.indigo-skin .btn-outline-default.dropdown-toggle{background-color:transparent !important;border-color:#9095aa !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.indigo-skin .btn-outline-default:not([disabled]):not(.disabled):active:focus,.indigo-skin .btn-outline-default:not([disabled]):not(.disabled).active:focus,.show>.indigo-skin .btn-outline-default.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.indigo-skin .card .btn-action{background:#9095aa}.indigo-skin .card .btn-action:hover,.indigo-skin .card .btn-action:focus{background-color:#9ea3b5 !important}.indigo-skin .card .btn-action.active{background-color:#5c6178 !important}.indigo-skin .md-outline input[type="text"]:focus:not([readonly]),.indigo-skin .md-outline input[type="password"]:focus:not([readonly]),.indigo-skin .md-outline input[type="email"]:focus:not([readonly]),.indigo-skin .md-outline input[type="url"]:focus:not([readonly]),.indigo-skin .md-outline input[type="time"]:focus:not([readonly]),.indigo-skin .md-outline input[type="date"]:focus:not([readonly]),.indigo-skin .md-outline input[type="datetime-local"]:focus:not([readonly]),.indigo-skin .md-outline input[type="tel"]:focus:not([readonly]),.indigo-skin .md-outline input[type="number"]:focus:not([readonly]),.indigo-skin .md-outline input[type="search-md"]:focus:not([readonly]),.indigo-skin .md-outline input[type="search"]:focus:not([readonly]),.indigo-skin .md-outline textarea:focus:not([readonly]){border-color:#fd668c;-webkit-box-shadow:inset 0 0 0 1px #fd668c;box-shadow:inset 0 0 0 1px #fd668c}.indigo-skin .md-outline input[type="text"]:focus:not([readonly])+label,.indigo-skin .md-outline input[type="password"]:focus:not([readonly])+label,.indigo-skin .md-outline input[type="email"]:focus:not([readonly])+label,.indigo-skin .md-outline input[type="url"]:focus:not([readonly])+label,.indigo-skin .md-outline input[type="time"]:focus:not([readonly])+label,.indigo-skin .md-outline input[type="date"]:focus:not([readonly])+label,.indigo-skin .md-outline input[type="datetime-local"]:focus:not([readonly])+label,.indigo-skin .md-outline input[type="tel"]:focus:not([readonly])+label,.indigo-skin .md-outline input[type="number"]:focus:not([readonly])+label,.indigo-skin .md-outline input[type="search-md"]:focus:not([readonly])+label,.indigo-skin .md-outline input[type="search"]:focus:not([readonly])+label,.indigo-skin .md-outline textarea:focus:not([readonly])+label{color:#fd668c}.indigo-skin .md-bg input[type="text"],.indigo-skin .md-bg input[type="password"],.indigo-skin .md-bg input[type="email"],.indigo-skin .md-bg input[type="url"],.indigo-skin .md-bg input[type="time"],.indigo-skin .md-bg input[type="date"],.indigo-skin .md-bg input[type="datetime-local"],.indigo-skin .md-bg input[type="tel"],.indigo-skin .md-bg input[type="number"],.indigo-skin .md-bg input[type="search-md"],.indigo-skin .md-bg input[type="search"],.indigo-skin .md-bg textarea.md-textarea{background-image:-webkit-gradient(linear, left top, left bottom, from(#fd668c), to(#fd668c)),-webkit-gradient(linear, left top, left bottom, from(#ced4da), to(#ced4da));background-image:linear-gradient(to bottom, #fd668c, #fd668c),linear-gradient(to bottom, #ced4da, #ced4da)}.indigo-skin input[type="email"]:focus:not([readonly]),.indigo-skin input[type="text"]:focus:not([readonly]),.indigo-skin input[type="password"]:focus:not([readonly]),.indigo-skin input[type="number"]:focus:not([readonly]),.indigo-skin textarea.md-textarea:focus:not([readonly]){border-color:#fd668c;-webkit-box-shadow:0 1px 0 0 #fd668c;box-shadow:0 1px 0 0 #fd668c}.indigo-skin input[type="email"]:focus:not([readonly])+label,.indigo-skin input[type="text"]:focus:not([readonly])+label,.indigo-skin input[type="password"]:focus:not([readonly])+label,.indigo-skin input[type="number"]:focus:not([readonly])+label,.indigo-skin textarea.md-textarea:focus:not([readonly])+label{color:#fd668c}.indigo-skin input[type="checkbox"]:checked+label:before{border-right:2px solid #fd668c;border-bottom:2px solid #fd668c}.indigo-skin input[type="checkbox"].filled-in:checked+label:before{border-right:2px solid #fff;border-bottom:2px solid #fff}.indigo-skin input[type="checkbox"].filled-in:checked+label:after{background-color:#fd668c;border-color:#fd668c}.indigo-skin .md-form .prefix.active{color:#fd668c}.indigo-skin .select-wrapper.colorful-select.md-form.md-outline span.caret.active{color:#fd668c !important}.indigo-skin .select-wrapper.colorful-select.md-form.md-outline input.select-dropdown:focus{border-color:#fd668c;-webkit-box-shadow:inset 0 0 0 1px #fd668c;box-shadow:inset 0 0 0 1px #fd668c}.indigo-skin .select-wrapper.colorful-select.md-form.md-outline+label.active{color:#fd668c}.indigo-skin .select-wrapper.colorful-select.md-form .dropdown-content li.active,.indigo-skin .select-wrapper.colorful-select.md-form .dropdown-content li a,.indigo-skin .select-wrapper.colorful-select.md-form .dropdown-content li span:hover{background-color:#fd668c !important}.indigo-skin .select-wrapper.colorful-select.md-form .dropdown-content li.disabled.active{background-color:transparent !important}.indigo-skin .top-nav-collapse{background-color:#9095aa}.indigo-skin .carousel-multi-item .controls-top>a,.indigo-skin .carousel-multi-item .carousel-indicators li,.indigo-skin .carousel-multi-item .carousel-indicators li.active{background-color:#fd668c}.indigo-skin .form-header,.indigo-skin .card-header{background-color:#fd7094}.indigo-skin .spinner-primary-color,.indigo-skin .spinner-primary-color-only{border-color:#7f82c5}.indigo-skin .pagination-primary-color .page-item.active .page-link,.indigo-skin .pagination-primary-color .page-item.active .page-link:focus,.indigo-skin .pagination-primary-color .page-item.active .page-link:hover{color:#fff;background-color:#7f82c5}.indigo-skin .pagination-primary-color .page-link{color:#7f82c5}.indigo-skin .pagination-primary-color .page-link:focus{-webkit-box-shadow:none;box-shadow:none}.light-blue-skin .gradient{background:#69adf4;background:linear-gradient(135deg, #69adf4 0%, #69adf4 100%)}.light-blue-skin .primary-color,.light-blue-skin ul.stepper li.active a .circle,ul.stepper li.active a .light-blue-skin .circle,.light-blue-skin ul.stepper li.completed a .circle,ul.stepper li.completed a .light-blue-skin .circle{background-color:#3d799c !important}.light-blue-skin .navbar{color:#fff;background-color:#3f5c80}.light-blue-skin .navbar .navbar-nav .nav-item .dropdown-menu a{color:#000}.light-blue-skin .navbar .navbar-nav .nav-item .dropdown-menu a:hover,.light-blue-skin .navbar .navbar-nav .nav-item .dropdown-menu a:focus,.light-blue-skin .navbar .navbar-nav .nav-item .dropdown-menu a:active{background-color:#a5b6be}.light-blue-skin .navbar.double-nav a{color:#fff}.light-blue-skin .navbar form .md-form .form-control{font-weight:300;color:#fff}.light-blue-skin .navbar form .md-form .form-control::-webkit-input-placeholder{color:#fff}.light-blue-skin .navbar form .md-form .form-control::-moz-placeholder{color:#fff}.light-blue-skin .navbar form .md-form .form-control:-ms-input-placeholder{color:#fff}.light-blue-skin .navbar form .md-form .form-control::-ms-input-placeholder{color:#fff}.light-blue-skin .navbar form .md-form .form-control::placeholder{color:#fff}.light-blue-skin .page-footer{background-color:#3f5c80}.light-blue-skin .side-nav{background-color:#6a9ed3}.light-blue-skin .side-nav .logo-wrapper>div{background-color:transparent !important}.light-blue-skin .side-nav .sn-avatar-wrapper img{border:3px solid #889ea9}.light-blue-skin .side-nav .social{border-bottom:1px solid rgba(153,153,153,0.3)}.light-blue-skin .side-nav .social a:hover .fas,.light-blue-skin .side-nav .social a:hover .fab,.light-blue-skin .side-nav .social a:hover .far{color:#b4c2c9 !important;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.light-blue-skin .side-nav .collapsible li{background-color:transparent}.light-blue-skin .side-nav .collapsible li .collapsible-header{color:#fff;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.light-blue-skin .side-nav .collapsible li .collapsible-header.active{background-color:rgba(29,54,86,0.6)}.light-blue-skin .side-nav .collapsible li .collapsible-header:hover{background-color:rgba(29,54,86,0.6)}.light-blue-skin .side-nav .collapsible li .collapsible-body a{color:#fff}.light-blue-skin .side-nav .collapsible li .collapsible-body a:hover,.light-blue-skin .side-nav .collapsible li .collapsible-body a.active,.light-blue-skin .side-nav .collapsible li .collapsible-body a:active{color:#aadeff}.light-blue-skin .side-nav .collapsible li .collapsible-body a .fas,.light-blue-skin .side-nav .collapsible li .collapsible-body a .fab,.light-blue-skin .side-nav .collapsible li .collapsible-body a .far{color:#fff}.light-blue-skin .side-nav .collapsible li a:not(.collapsible-header){color:#fff;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.light-blue-skin .side-nav .collapsible li a:not(.collapsible-header):hover,.light-blue-skin .side-nav .collapsible li a:not(.collapsible-header).active,.light-blue-skin .side-nav .collapsible li a:not(.collapsible-header):active{color:#aadeff !important}.light-blue-skin .side-nav .sidenav-bg:after,.light-blue-skin .side-nav .sidenav-bg.mask-strong:after{background:rgba(87,134,180,0.8)}.light-blue-skin .side-nav .sidenav-bg.mask-light:after{background:rgba(87,134,180,0.65)}.light-blue-skin .side-nav .sidenav-bg.mask-slight:after{background:rgba(87,134,180,0.5)}.light-blue-skin .btn-primary{color:#fff;background-color:#ff4a67 !important}.light-blue-skin .btn-primary:hover{color:#fff;background-color:#ff647c}.light-blue-skin .btn-primary:focus,.light-blue-skin .btn-primary.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.light-blue-skin .btn-primary:focus,.light-blue-skin .btn-primary:active,.light-blue-skin .btn-primary.active{background-color:#e30024}.light-blue-skin .btn-primary.dropdown-toggle{background-color:#ff4a67 !important}.light-blue-skin .btn-primary.dropdown-toggle:hover,.light-blue-skin .btn-primary.dropdown-toggle:focus{background-color:#ff647c !important}.light-blue-skin .btn-primary:not([disabled]):not(.disabled):active,.light-blue-skin .btn-primary:not([disabled]):not(.disabled).active,.show>.light-blue-skin .btn-primary.dropdown-toggle{background-color:#e30024 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.light-blue-skin .btn-primary:not([disabled]):not(.disabled):active:focus,.light-blue-skin .btn-primary:not([disabled]):not(.disabled).active:focus,.show>.light-blue-skin .btn-primary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.light-blue-skin .primary-ic{color:#ff4a67 !important}.light-blue-skin .primary-ic:hover,.light-blue-skin .primary-ic:focus{color:#ff4a67}.light-blue-skin a.btn:not([href]):not([tabindex]),.light-blue-skin a.btn:not([href]):not([tabindex]):focus,.light-blue-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.light-blue-skin table.table a.btn.btn-primary{color:#fff}.light-blue-skin .btn-secondary{color:#fff;background-color:#64c3f0 !important}.light-blue-skin .btn-secondary:hover{color:#fff;background-color:#7bccf2}.light-blue-skin .btn-secondary:focus,.light-blue-skin .btn-secondary.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.light-blue-skin .btn-secondary:focus,.light-blue-skin .btn-secondary:active,.light-blue-skin .btn-secondary.active{background-color:#159ad9}.light-blue-skin .btn-secondary.dropdown-toggle{background-color:#64c3f0 !important}.light-blue-skin .btn-secondary.dropdown-toggle:hover,.light-blue-skin .btn-secondary.dropdown-toggle:focus{background-color:#7bccf2 !important}.light-blue-skin .btn-secondary:not([disabled]):not(.disabled):active,.light-blue-skin .btn-secondary:not([disabled]):not(.disabled).active,.show>.light-blue-skin .btn-secondary.dropdown-toggle{background-color:#159ad9 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.light-blue-skin .btn-secondary:not([disabled]):not(.disabled):active:focus,.light-blue-skin .btn-secondary:not([disabled]):not(.disabled).active:focus,.show>.light-blue-skin .btn-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.light-blue-skin .secondary-ic{color:#64c3f0 !important}.light-blue-skin .secondary-ic:hover,.light-blue-skin .secondary-ic:focus{color:#64c3f0}.light-blue-skin a.btn:not([href]):not([tabindex]),.light-blue-skin a.btn:not([href]):not([tabindex]):focus,.light-blue-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.light-blue-skin table.table a.btn.btn-secondary{color:#fff}.light-blue-skin .btn-default{color:#fff;background-color:#2d486a !important}.light-blue-skin .btn-default:hover{color:#fff;background-color:#35547c}.light-blue-skin .btn-default:focus,.light-blue-skin .btn-default.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.light-blue-skin .btn-default:focus,.light-blue-skin .btn-default:active,.light-blue-skin .btn-default.active{background-color:#0f1722}.light-blue-skin .btn-default.dropdown-toggle{background-color:#2d486a !important}.light-blue-skin .btn-default.dropdown-toggle:hover,.light-blue-skin .btn-default.dropdown-toggle:focus{background-color:#35547c !important}.light-blue-skin .btn-default:not([disabled]):not(.disabled):active,.light-blue-skin .btn-default:not([disabled]):not(.disabled).active,.show>.light-blue-skin .btn-default.dropdown-toggle{background-color:#0f1722 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.light-blue-skin .btn-default:not([disabled]):not(.disabled):active:focus,.light-blue-skin .btn-default:not([disabled]):not(.disabled).active:focus,.show>.light-blue-skin .btn-default.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.light-blue-skin .default-ic{color:#2d486a !important}.light-blue-skin .default-ic:hover,.light-blue-skin .default-ic:focus{color:#2d486a}.light-blue-skin a.btn:not([href]):not([tabindex]),.light-blue-skin a.btn:not([href]):not([tabindex]):focus,.light-blue-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.light-blue-skin table.table a.btn.btn-default{color:#fff}.light-blue-skin .btn-outline-primary{color:#ff4a67 !important;background-color:transparent !important;border:2px solid #ff4a67 !important}.light-blue-skin .btn-outline-primary:hover,.light-blue-skin .btn-outline-primary:focus,.light-blue-skin .btn-outline-primary:active,.light-blue-skin .btn-outline-primary:active:focus,.light-blue-skin .btn-outline-primary.active{color:#ff4a67 !important;background-color:transparent !important;border-color:#ff4a67 !important}.light-blue-skin .btn-outline-primary:not([disabled]):not(.disabled):active,.light-blue-skin .btn-outline-primary:not([disabled]):not(.disabled).active,.show>.light-blue-skin .btn-outline-primary.dropdown-toggle{background-color:transparent !important;border-color:#ff4a67 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.light-blue-skin .btn-outline-primary:not([disabled]):not(.disabled):active:focus,.light-blue-skin .btn-outline-primary:not([disabled]):not(.disabled).active:focus,.show>.light-blue-skin .btn-outline-primary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.light-blue-skin .btn-outline-secondary{color:#64c3f0 !important;background-color:transparent !important;border:2px solid #64c3f0 !important}.light-blue-skin .btn-outline-secondary:hover,.light-blue-skin .btn-outline-secondary:focus,.light-blue-skin .btn-outline-secondary:active,.light-blue-skin .btn-outline-secondary:active:focus,.light-blue-skin .btn-outline-secondary.active{color:#64c3f0 !important;background-color:transparent !important;border-color:#64c3f0 !important}.light-blue-skin .btn-outline-secondary:not([disabled]):not(.disabled):active,.light-blue-skin .btn-outline-secondary:not([disabled]):not(.disabled).active,.show>.light-blue-skin .btn-outline-secondary.dropdown-toggle{background-color:transparent !important;border-color:#64c3f0 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.light-blue-skin .btn-outline-secondary:not([disabled]):not(.disabled):active:focus,.light-blue-skin .btn-outline-secondary:not([disabled]):not(.disabled).active:focus,.show>.light-blue-skin .btn-outline-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.light-blue-skin .btn-outline-default{color:#2d486a !important;background-color:transparent !important;border:2px solid #2d486a !important}.light-blue-skin .btn-outline-default:hover,.light-blue-skin .btn-outline-default:focus,.light-blue-skin .btn-outline-default:active,.light-blue-skin .btn-outline-default:active:focus,.light-blue-skin .btn-outline-default.active{color:#2d486a !important;background-color:transparent !important;border-color:#2d486a !important}.light-blue-skin .btn-outline-default:not([disabled]):not(.disabled):active,.light-blue-skin .btn-outline-default:not([disabled]):not(.disabled).active,.show>.light-blue-skin .btn-outline-default.dropdown-toggle{background-color:transparent !important;border-color:#2d486a !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.light-blue-skin .btn-outline-default:not([disabled]):not(.disabled):active:focus,.light-blue-skin .btn-outline-default:not([disabled]):not(.disabled).active:focus,.show>.light-blue-skin .btn-outline-default.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.light-blue-skin .card .btn-action{background:#2d486a}.light-blue-skin .card .btn-action:hover,.light-blue-skin .card .btn-action:focus{background-color:#35547c !important}.light-blue-skin .card .btn-action.active{background-color:#0f1722 !important}.light-blue-skin .md-outline input[type="text"]:focus:not([readonly]),.light-blue-skin .md-outline input[type="password"]:focus:not([readonly]),.light-blue-skin .md-outline input[type="email"]:focus:not([readonly]),.light-blue-skin .md-outline input[type="url"]:focus:not([readonly]),.light-blue-skin .md-outline input[type="time"]:focus:not([readonly]),.light-blue-skin .md-outline input[type="date"]:focus:not([readonly]),.light-blue-skin .md-outline input[type="datetime-local"]:focus:not([readonly]),.light-blue-skin .md-outline input[type="tel"]:focus:not([readonly]),.light-blue-skin .md-outline input[type="number"]:focus:not([readonly]),.light-blue-skin .md-outline input[type="search-md"]:focus:not([readonly]),.light-blue-skin .md-outline input[type="search"]:focus:not([readonly]),.light-blue-skin .md-outline textarea:focus:not([readonly]){border-color:#b4c2c9;-webkit-box-shadow:inset 0 0 0 1px #b4c2c9;box-shadow:inset 0 0 0 1px #b4c2c9}.light-blue-skin .md-outline input[type="text"]:focus:not([readonly])+label,.light-blue-skin .md-outline input[type="password"]:focus:not([readonly])+label,.light-blue-skin .md-outline input[type="email"]:focus:not([readonly])+label,.light-blue-skin .md-outline input[type="url"]:focus:not([readonly])+label,.light-blue-skin .md-outline input[type="time"]:focus:not([readonly])+label,.light-blue-skin .md-outline input[type="date"]:focus:not([readonly])+label,.light-blue-skin .md-outline input[type="datetime-local"]:focus:not([readonly])+label,.light-blue-skin .md-outline input[type="tel"]:focus:not([readonly])+label,.light-blue-skin .md-outline input[type="number"]:focus:not([readonly])+label,.light-blue-skin .md-outline input[type="search-md"]:focus:not([readonly])+label,.light-blue-skin .md-outline input[type="search"]:focus:not([readonly])+label,.light-blue-skin .md-outline textarea:focus:not([readonly])+label{color:#b4c2c9}.light-blue-skin .md-bg input[type="text"],.light-blue-skin .md-bg input[type="password"],.light-blue-skin .md-bg input[type="email"],.light-blue-skin .md-bg input[type="url"],.light-blue-skin .md-bg input[type="time"],.light-blue-skin .md-bg input[type="date"],.light-blue-skin .md-bg input[type="datetime-local"],.light-blue-skin .md-bg input[type="tel"],.light-blue-skin .md-bg input[type="number"],.light-blue-skin .md-bg input[type="search-md"],.light-blue-skin .md-bg input[type="search"],.light-blue-skin .md-bg textarea.md-textarea{background-image:-webkit-gradient(linear, left top, left bottom, from(#b4c2c9), to(#b4c2c9)),-webkit-gradient(linear, left top, left bottom, from(#ced4da), to(#ced4da));background-image:linear-gradient(to bottom, #b4c2c9, #b4c2c9),linear-gradient(to bottom, #ced4da, #ced4da)}.light-blue-skin input[type="email"]:focus:not([readonly]),.light-blue-skin input[type="text"]:focus:not([readonly]),.light-blue-skin input[type="password"]:focus:not([readonly]),.light-blue-skin input[type="number"]:focus:not([readonly]),.light-blue-skin textarea.md-textarea:focus:not([readonly]){border-color:#b4c2c9;-webkit-box-shadow:0 1px 0 0 #b4c2c9;box-shadow:0 1px 0 0 #b4c2c9}.light-blue-skin input[type="email"]:focus:not([readonly])+label,.light-blue-skin input[type="text"]:focus:not([readonly])+label,.light-blue-skin input[type="password"]:focus:not([readonly])+label,.light-blue-skin input[type="number"]:focus:not([readonly])+label,.light-blue-skin textarea.md-textarea:focus:not([readonly])+label{color:#b4c2c9}.light-blue-skin input[type="checkbox"]:checked+label:before{border-right:2px solid #b4c2c9;border-bottom:2px solid #b4c2c9}.light-blue-skin input[type="checkbox"].filled-in:checked+label:before{border-right:2px solid #fff;border-bottom:2px solid #fff}.light-blue-skin input[type="checkbox"].filled-in:checked+label:after{background-color:#b4c2c9;border-color:#b4c2c9}.light-blue-skin .md-form .prefix.active{color:#b4c2c9}.light-blue-skin .select-wrapper.colorful-select.md-form.md-outline span.caret.active{color:#b4c2c9 !important}.light-blue-skin .select-wrapper.colorful-select.md-form.md-outline input.select-dropdown:focus{border-color:#b4c2c9;-webkit-box-shadow:inset 0 0 0 1px #b4c2c9;box-shadow:inset 0 0 0 1px #b4c2c9}.light-blue-skin .select-wrapper.colorful-select.md-form.md-outline+label.active{color:#b4c2c9}.light-blue-skin .select-wrapper.colorful-select.md-form .dropdown-content li.active,.light-blue-skin .select-wrapper.colorful-select.md-form .dropdown-content li a,.light-blue-skin .select-wrapper.colorful-select.md-form .dropdown-content li span:hover{background-color:#b4c2c9 !important}.light-blue-skin .select-wrapper.colorful-select.md-form .dropdown-content li.disabled.active{background-color:transparent !important}.light-blue-skin .top-nav-collapse{background-color:#3f5c80}.light-blue-skin .carousel-multi-item .controls-top>a,.light-blue-skin .carousel-multi-item .carousel-indicators li,.light-blue-skin .carousel-multi-item .carousel-indicators li.active{background-color:#b4c2c9}.light-blue-skin .form-header,.light-blue-skin .card-header{background-color:#bac7cd}.light-blue-skin .spinner-primary-color,.light-blue-skin .spinner-primary-color-only{border-color:#3d799c}.light-blue-skin .pagination-primary-color .page-item.active .page-link,.light-blue-skin .pagination-primary-color .page-item.active .page-link:focus,.light-blue-skin .pagination-primary-color .page-item.active .page-link:hover{color:#fff;background-color:#3d799c}.light-blue-skin .pagination-primary-color .page-link{color:#3d799c}.light-blue-skin .pagination-primary-color .page-link:focus{-webkit-box-shadow:none;box-shadow:none}.grey-skin .gradient{background:#383838;background:linear-gradient(135deg, #383838 0%, #a5a4a4 100%)}.grey-skin .primary-color,.grey-skin ul.stepper li.active a .circle,ul.stepper li.active a .grey-skin .circle,.grey-skin ul.stepper li.completed a .circle,ul.stepper li.completed a .grey-skin .circle{background-color:#2b2b2b !important}.grey-skin .navbar{color:#fff;background-color:#44474b}.grey-skin .navbar .navbar-nav .nav-item .dropdown-menu a{color:#000}.grey-skin .navbar .navbar-nav .nav-item .dropdown-menu a:hover,.grey-skin .navbar .navbar-nav .nav-item .dropdown-menu a:focus,.grey-skin .navbar .navbar-nav .nav-item .dropdown-menu a:active{background-color:#5eb7ee}.grey-skin .navbar.double-nav a{color:#fff}.grey-skin .navbar form .md-form .form-control{font-weight:300;color:#fff}.grey-skin .navbar form .md-form .form-control::-webkit-input-placeholder{color:#fff}.grey-skin .navbar form .md-form .form-control::-moz-placeholder{color:#fff}.grey-skin .navbar form .md-form .form-control:-ms-input-placeholder{color:#fff}.grey-skin .navbar form .md-form .form-control::-ms-input-placeholder{color:#fff}.grey-skin .navbar form .md-form .form-control::placeholder{color:#fff}.grey-skin .page-footer{background-color:#44474b}.grey-skin .side-nav{background-color:#a5a4a4}.grey-skin .side-nav .logo-wrapper>div{background-color:transparent !important}.grey-skin .side-nav .sn-avatar-wrapper img{border:3px solid #30a2e9}.grey-skin .side-nav .social{border-bottom:1px solid rgba(153,153,153,0.3)}.grey-skin .side-nav .social a:hover .fas,.grey-skin .side-nav .social a:hover .fab,.grey-skin .side-nav .social a:hover .far{color:#75c1f0 !important;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.grey-skin .side-nav .collapsible li{background-color:transparent}.grey-skin .side-nav .collapsible li .collapsible-header{color:#fff;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.grey-skin .side-nav .collapsible li .collapsible-header.active{background-color:rgba(0,0,0,0.4)}.grey-skin .side-nav .collapsible li .collapsible-header:hover{background-color:rgba(0,0,0,0.4)}.grey-skin .side-nav .collapsible li .collapsible-body a{color:#fff}.grey-skin .side-nav .collapsible li .collapsible-body a:hover,.grey-skin .side-nav .collapsible li .collapsible-body a.active,.grey-skin .side-nav .collapsible li .collapsible-body a:active{color:#afdffc}.grey-skin .side-nav .collapsible li .collapsible-body a .fas,.grey-skin .side-nav .collapsible li .collapsible-body a .fab,.grey-skin .side-nav .collapsible li .collapsible-body a .far{color:#fff}.grey-skin .side-nav .collapsible li a:not(.collapsible-header){color:#fff;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.grey-skin .side-nav .collapsible li a:not(.collapsible-header):hover,.grey-skin .side-nav .collapsible li a:not(.collapsible-header).active,.grey-skin .side-nav .collapsible li a:not(.collapsible-header):active{color:#afdffc !important}.grey-skin .side-nav .sidenav-bg:after,.grey-skin .side-nav .sidenav-bg.mask-strong:after{background:rgba(121,121,121,0.8)}.grey-skin .side-nav .sidenav-bg.mask-light:after{background:rgba(121,121,121,0.65)}.grey-skin .side-nav .sidenav-bg.mask-slight:after{background:rgba(121,121,121,0.5)}.grey-skin .btn-primary{color:#fff;background-color:#46aded !important}.grey-skin .btn-primary:hover{color:#fff;background-color:#5db7ef}.grey-skin .btn-primary:focus,.grey-skin .btn-primary.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.grey-skin .btn-primary:focus,.grey-skin .btn-primary:active,.grey-skin .btn-primary.active{background-color:#127abb}.grey-skin .btn-primary.dropdown-toggle{background-color:#46aded !important}.grey-skin .btn-primary.dropdown-toggle:hover,.grey-skin .btn-primary.dropdown-toggle:focus{background-color:#5db7ef !important}.grey-skin .btn-primary:not([disabled]):not(.disabled):active,.grey-skin .btn-primary:not([disabled]):not(.disabled).active,.show>.grey-skin .btn-primary.dropdown-toggle{background-color:#127abb !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.grey-skin .btn-primary:not([disabled]):not(.disabled):active:focus,.grey-skin .btn-primary:not([disabled]):not(.disabled).active:focus,.show>.grey-skin .btn-primary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.grey-skin .primary-ic{color:#46aded !important}.grey-skin .primary-ic:hover,.grey-skin .primary-ic:focus{color:#46aded}.grey-skin a.btn:not([href]):not([tabindex]),.grey-skin a.btn:not([href]):not([tabindex]):focus,.grey-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.grey-skin table.table a.btn.btn-primary{color:#fff}.grey-skin .btn-secondary{color:#fff;background-color:#7d8488 !important}.grey-skin .btn-secondary:hover{color:#fff;background-color:#8a9194}.grey-skin .btn-secondary:focus,.grey-skin .btn-secondary.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.grey-skin .btn-secondary:focus,.grey-skin .btn-secondary:active,.grey-skin .btn-secondary.active{background-color:#4c5053}.grey-skin .btn-secondary.dropdown-toggle{background-color:#7d8488 !important}.grey-skin .btn-secondary.dropdown-toggle:hover,.grey-skin .btn-secondary.dropdown-toggle:focus{background-color:#8a9194 !important}.grey-skin .btn-secondary:not([disabled]):not(.disabled):active,.grey-skin .btn-secondary:not([disabled]):not(.disabled).active,.show>.grey-skin .btn-secondary.dropdown-toggle{background-color:#4c5053 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.grey-skin .btn-secondary:not([disabled]):not(.disabled):active:focus,.grey-skin .btn-secondary:not([disabled]):not(.disabled).active:focus,.show>.grey-skin .btn-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.grey-skin .secondary-ic{color:#7d8488 !important}.grey-skin .secondary-ic:hover,.grey-skin .secondary-ic:focus{color:#7d8488}.grey-skin a.btn:not([href]):not([tabindex]),.grey-skin a.btn:not([href]):not([tabindex]):focus,.grey-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.grey-skin table.table a.btn.btn-secondary{color:#fff}.grey-skin .btn-default{color:#fff;background-color:#353637 !important}.grey-skin .btn-default:hover{color:#fff;background-color:#424344}.grey-skin .btn-default:focus,.grey-skin .btn-default.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.grey-skin .btn-default:focus,.grey-skin .btn-default:active,.grey-skin .btn-default.active{background-color:#030303}.grey-skin .btn-default.dropdown-toggle{background-color:#353637 !important}.grey-skin .btn-default.dropdown-toggle:hover,.grey-skin .btn-default.dropdown-toggle:focus{background-color:#424344 !important}.grey-skin .btn-default:not([disabled]):not(.disabled):active,.grey-skin .btn-default:not([disabled]):not(.disabled).active,.show>.grey-skin .btn-default.dropdown-toggle{background-color:#030303 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.grey-skin .btn-default:not([disabled]):not(.disabled):active:focus,.grey-skin .btn-default:not([disabled]):not(.disabled).active:focus,.show>.grey-skin .btn-default.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.grey-skin .default-ic{color:#353637 !important}.grey-skin .default-ic:hover,.grey-skin .default-ic:focus{color:#353637}.grey-skin a.btn:not([href]):not([tabindex]),.grey-skin a.btn:not([href]):not([tabindex]):focus,.grey-skin a.btn:not([href]):not([tabindex]):hover{color:#fff}.grey-skin table.table a.btn.btn-default{color:#fff}.grey-skin .btn-outline-primary{color:#46aded !important;background-color:transparent !important;border:2px solid #46aded !important}.grey-skin .btn-outline-primary:hover,.grey-skin .btn-outline-primary:focus,.grey-skin .btn-outline-primary:active,.grey-skin .btn-outline-primary:active:focus,.grey-skin .btn-outline-primary.active{color:#46aded !important;background-color:transparent !important;border-color:#46aded !important}.grey-skin .btn-outline-primary:not([disabled]):not(.disabled):active,.grey-skin .btn-outline-primary:not([disabled]):not(.disabled).active,.show>.grey-skin .btn-outline-primary.dropdown-toggle{background-color:transparent !important;border-color:#46aded !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.grey-skin .btn-outline-primary:not([disabled]):not(.disabled):active:focus,.grey-skin .btn-outline-primary:not([disabled]):not(.disabled).active:focus,.show>.grey-skin .btn-outline-primary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.grey-skin .btn-outline-secondary{color:#7d8488 !important;background-color:transparent !important;border:2px solid #7d8488 !important}.grey-skin .btn-outline-secondary:hover,.grey-skin .btn-outline-secondary:focus,.grey-skin .btn-outline-secondary:active,.grey-skin .btn-outline-secondary:active:focus,.grey-skin .btn-outline-secondary.active{color:#7d8488 !important;background-color:transparent !important;border-color:#7d8488 !important}.grey-skin .btn-outline-secondary:not([disabled]):not(.disabled):active,.grey-skin .btn-outline-secondary:not([disabled]):not(.disabled).active,.show>.grey-skin .btn-outline-secondary.dropdown-toggle{background-color:transparent !important;border-color:#7d8488 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.grey-skin .btn-outline-secondary:not([disabled]):not(.disabled):active:focus,.grey-skin .btn-outline-secondary:not([disabled]):not(.disabled).active:focus,.show>.grey-skin .btn-outline-secondary.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.grey-skin .btn-outline-default{color:#353637 !important;background-color:transparent !important;border:2px solid #353637 !important}.grey-skin .btn-outline-default:hover,.grey-skin .btn-outline-default:focus,.grey-skin .btn-outline-default:active,.grey-skin .btn-outline-default:active:focus,.grey-skin .btn-outline-default.active{color:#353637 !important;background-color:transparent !important;border-color:#353637 !important}.grey-skin .btn-outline-default:not([disabled]):not(.disabled):active,.grey-skin .btn-outline-default:not([disabled]):not(.disabled).active,.show>.grey-skin .btn-outline-default.dropdown-toggle{background-color:transparent !important;border-color:#353637 !important;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.grey-skin .btn-outline-default:not([disabled]):not(.disabled):active:focus,.grey-skin .btn-outline-default:not([disabled]):not(.disabled).active:focus,.show>.grey-skin .btn-outline-default.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.grey-skin .card .btn-action{background:#353637}.grey-skin .card .btn-action:hover,.grey-skin .card .btn-action:focus{background-color:#424344 !important}.grey-skin .card .btn-action.active{background-color:#030303 !important}.grey-skin .md-outline input[type="text"]:focus:not([readonly]),.grey-skin .md-outline input[type="password"]:focus:not([readonly]),.grey-skin .md-outline input[type="email"]:focus:not([readonly]),.grey-skin .md-outline input[type="url"]:focus:not([readonly]),.grey-skin .md-outline input[type="time"]:focus:not([readonly]),.grey-skin .md-outline input[type="date"]:focus:not([readonly]),.grey-skin .md-outline input[type="datetime-local"]:focus:not([readonly]),.grey-skin .md-outline input[type="tel"]:focus:not([readonly]),.grey-skin .md-outline input[type="number"]:focus:not([readonly]),.grey-skin .md-outline input[type="search-md"]:focus:not([readonly]),.grey-skin .md-outline input[type="search"]:focus:not([readonly]),.grey-skin .md-outline textarea:focus:not([readonly]){border-color:#75c1f0;-webkit-box-shadow:inset 0 0 0 1px #75c1f0;box-shadow:inset 0 0 0 1px #75c1f0}.grey-skin .md-outline input[type="text"]:focus:not([readonly])+label,.grey-skin .md-outline input[type="password"]:focus:not([readonly])+label,.grey-skin .md-outline input[type="email"]:focus:not([readonly])+label,.grey-skin .md-outline input[type="url"]:focus:not([readonly])+label,.grey-skin .md-outline input[type="time"]:focus:not([readonly])+label,.grey-skin .md-outline input[type="date"]:focus:not([readonly])+label,.grey-skin .md-outline input[type="datetime-local"]:focus:not([readonly])+label,.grey-skin .md-outline input[type="tel"]:focus:not([readonly])+label,.grey-skin .md-outline input[type="number"]:focus:not([readonly])+label,.grey-skin .md-outline input[type="search-md"]:focus:not([readonly])+label,.grey-skin .md-outline input[type="search"]:focus:not([readonly])+label,.grey-skin .md-outline textarea:focus:not([readonly])+label{color:#75c1f0}.grey-skin .md-bg input[type="text"],.grey-skin .md-bg input[type="password"],.grey-skin .md-bg input[type="email"],.grey-skin .md-bg input[type="url"],.grey-skin .md-bg input[type="time"],.grey-skin .md-bg input[type="date"],.grey-skin .md-bg input[type="datetime-local"],.grey-skin .md-bg input[type="tel"],.grey-skin .md-bg input[type="number"],.grey-skin .md-bg input[type="search-md"],.grey-skin .md-bg input[type="search"],.grey-skin .md-bg textarea.md-textarea{background-image:-webkit-gradient(linear, left top, left bottom, from(#75c1f0), to(#75c1f0)),-webkit-gradient(linear, left top, left bottom, from(#ced4da), to(#ced4da));background-image:linear-gradient(to bottom, #75c1f0, #75c1f0),linear-gradient(to bottom, #ced4da, #ced4da)}.grey-skin input[type="email"]:focus:not([readonly]),.grey-skin input[type="text"]:focus:not([readonly]),.grey-skin input[type="password"]:focus:not([readonly]),.grey-skin input[type="number"]:focus:not([readonly]),.grey-skin textarea.md-textarea:focus:not([readonly]){border-color:#75c1f0;-webkit-box-shadow:0 1px 0 0 #75c1f0;box-shadow:0 1px 0 0 #75c1f0}.grey-skin input[type="email"]:focus:not([readonly])+label,.grey-skin input[type="text"]:focus:not([readonly])+label,.grey-skin input[type="password"]:focus:not([readonly])+label,.grey-skin input[type="number"]:focus:not([readonly])+label,.grey-skin textarea.md-textarea:focus:not([readonly])+label{color:#75c1f0}.grey-skin input[type="checkbox"]:checked+label:before{border-right:2px solid #75c1f0;border-bottom:2px solid #75c1f0}.grey-skin input[type="checkbox"].filled-in:checked+label:before{border-right:2px solid #fff;border-bottom:2px solid #fff}.grey-skin input[type="checkbox"].filled-in:checked+label:after{background-color:#75c1f0;border-color:#75c1f0}.grey-skin .md-form .prefix.active{color:#75c1f0}.grey-skin .select-wrapper.colorful-select.md-form.md-outline span.caret.active{color:#75c1f0 !important}.grey-skin .select-wrapper.colorful-select.md-form.md-outline input.select-dropdown:focus{border-color:#75c1f0;-webkit-box-shadow:inset 0 0 0 1px #75c1f0;box-shadow:inset 0 0 0 1px #75c1f0}.grey-skin .select-wrapper.colorful-select.md-form.md-outline+label.active{color:#75c1f0}.grey-skin .select-wrapper.colorful-select.md-form .dropdown-content li.active,.grey-skin .select-wrapper.colorful-select.md-form .dropdown-content li a,.grey-skin .select-wrapper.colorful-select.md-form .dropdown-content li span:hover{background-color:#75c1f0 !important}.grey-skin .select-wrapper.colorful-select.md-form .dropdown-content li.disabled.active{background-color:transparent !important}.grey-skin .top-nav-collapse{background-color:#44474b}.grey-skin .carousel-multi-item .controls-top>a,.grey-skin .carousel-multi-item .carousel-indicators li,.grey-skin .carousel-multi-item .carousel-indicators li.active{background-color:#75c1f0}.grey-skin .form-header,.grey-skin .card-header{background-color:#7ec5f1}.grey-skin .spinner-primary-color,.grey-skin .spinner-primary-color-only{border-color:#2b2b2b}.grey-skin .pagination-primary-color .page-item.active .page-link,.grey-skin .pagination-primary-color .page-item.active .page-link:focus,.grey-skin .pagination-primary-color .page-item.active .page-link:hover{color:#fff;background-color:#2b2b2b}.grey-skin .pagination-primary-color .page-link{color:#2b2b2b}.grey-skin .pagination-primary-color .page-link:focus{-webkit-box-shadow:none;box-shadow:none}.picker__input{cursor:default}.picker__input.picker__input--active{border-color:#0089ec}.picker{position:absolute;z-index:10000;font-size:1rem;line-height:1.2;color:#000;text-align:center;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;/*!
   * Default mobile-first, responsive styling for pickadate.js
   * Demo: http://amsul.github.io/pickadate.js
   */}.picker .picker__holder{position:fixed;width:100%;overflow-y:auto;overflow-scrolling:touch;-webkit-transition:background 0.15s ease-out,top 0s 0.15s;transition:background 0.15s ease-out,top 0s 0.15s;-webkit-backface-visibility:hidden;backface-visibility:hidden}.picker .picker__holder,.picker .picker__frame{top:100%;right:0;bottom:0;left:0}.picker .picker__frame{position:absolute;width:18.75rem;min-width:16rem;max-width:20.3125rem;max-height:21.875rem;margin:0 auto;filter:alpha(opacity=0);opacity:0;-webkit-transition:all 0.15s ease-out;transition:all 0.15s ease-out}@media (min-height: 28.875em){.picker .picker__frame{top:auto;bottom:-100%;max-height:80%;overflow:visible}}@media (min-height: 40.125em){.picker .picker__frame{margin-bottom:7.5%}}.picker .picker__frame .picker__wrap{display:table;width:100%;height:100%}@media (min-height: 28.875em){.picker .picker__frame .picker__wrap{display:block}}.picker .picker__box{display:table-cell;vertical-align:middle;background:#fff}@media (min-height: 28.875em){.picker .picker__box{display:block;border:1px solid #777;border-top-color:#898989;border-bottom-width:0;border-radius:5px 5px 0 0;-webkit-box-shadow:0 0.75rem 2.25rem 1rem rgba(0,0,0,0.24);box-shadow:0 0.75rem 2.25rem 1rem rgba(0,0,0,0.24)}}.picker--opened .picker__holder{top:0;zoom:1;background:rgba(0,0,0,0.32);-webkit-transition:background 0.15s ease-out;transition:background 0.15s ease-out}.picker--opened .picker__frame{top:0;filter:alpha(opacity=100);opacity:1}@media (min-height: 35.875em){.picker--opened .picker__frame{top:10%;bottom:auto}}.datepicker.picker__input.picker__input--active,.timepicker.picker__input.picker__input--active{border-bottom:1px solid #e3f2fd}.picker__list{padding:0.75em 0 4.2em;margin:0;list-style:none}.picker__list-item{position:relative;padding:0.75em 1.25em;margin-bottom:-1px;border-top:1px solid #ddd;border-bottom:1px solid #ddd}@media (min-height: 46.75em){.picker__list-item{padding:0.5em 1em}}.picker__list-item:hover{z-index:10;cursor:pointer;background:#b1dcfb;background-color:#000 !important;border-color:#0089ec}.picker__list-item--highlighted{z-index:10;border-color:#0089ec}.picker__list-item--highlighted:hover,.picker--focused .picker__list-item--highlighted{color:#000;cursor:pointer;background:#b1dcfb}.picker__list-item--selected,.picker__list-item--selected:hover,.picker--focused .picker__list-item--selected{z-index:10;background:#0089ec}.picker__list-item--disabled,.picker__list-item--disabled:hover,.picker--focused .picker__list-item--disabled{z-index:auto;color:#ddd;cursor:default;background:#f5f5f5;border-color:#f5f5f5}.picker--time .picker__button--clear{display:block;width:80%;padding:1em 1.25em;margin:1em auto 0;font-size:.67em;font-weight:500;color:#666;text-align:center;text-transform:uppercase;background:none;border:0}.picker--time .picker__button--clear:hover,.picker--time .picker__button--clear:focus{color:#000;cursor:pointer;background:#b1dcfb;border-color:#e20;outline:none}.picker--time .picker__button--clear::before{top:-.25em;font-size:1.25em;font-weight:700;color:#666}.picker--time .picker__frame{min-width:16rem;max-width:20rem}.picker--time .picker__box{padding:0;font-size:1em;background:#f2f2f2}@media (min-height: 40.125em){.picker--time .picker__box{margin-bottom:5em}}/*!
 * ClockPicker v0.0.7 for jQuery (http://weareoutman.github.io/clockpicker/)
 * Copyright 2014 Wang Shenwei.
 * Licensed under MIT (https://github.com/weareoutman/clockpicker/blob/gh-pages/LICENSE)
 *
 * Further modified
 * Copyright 2015 Ching Yaw Hao.
 *
 * Bootstrap v3.1.1 (http://getbootstrap.com)
 * Copyright 2011-2014 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */.picker__date-display{padding-bottom:.9375rem;margin-bottom:1rem;font-weight:300;text-align:center;background-color:#4285f4}.picker__date-display .clockpicker-display{display:inline-block;height:5.3125rem;padding:.625rem;padding-bottom:0;margin:auto;font-size:4.375rem;color:#b2dfdb;vertical-align:middle}.picker__date-display .clockpicker-display .clockpicker-display-column{float:left}.picker__date-display .clockpicker-display .clockpicker-display-column .clockpicker-span-hours.text-primary,.picker__date-display .clockpicker-display .clockpicker-display-column .clockpicker-span-minutes.text-primary,.picker__date-display .clockpicker-display .clockpicker-display-column #click-am.text-primary,.picker__date-display .clockpicker-display .clockpicker-display-column #click-pm.text-primary{-webkit-animation-name:pulse;animation-name:pulse}.picker__date-display .clockpicker-display .clockpicker-display-column #click-am,.picker__date-display .clockpicker-display .clockpicker-display-column #click-pm{cursor:pointer}.picker__date-display .clockpicker-display .clockpicker-display-am-pm{height:5.3125rem;padding-left:.3125rem;vertical-align:bottom}.picker__date-display .clockpicker-display .clockpicker-display-am-pm .clockpicker-span-am-pm{display:inline-block;font-size:1.4375rem;line-height:1.5625rem;color:#b2dfdb}.picker__date-display .clockpicker-display .clockpicker-span-hours,.picker__date-display .clockpicker-display .clockpicker-span-minutes{cursor:pointer;-webkit-transition:color 500ms;transition:color 500ms;-webkit-animation-duration:500ms;animation-duration:500ms;-webkit-animation-fill-mode:both;animation-fill-mode:both}.clockpicker-display{display:inline-block;height:5.3125rem;padding:.625rem;padding-bottom:0;margin:auto;font-size:4.375rem;color:#b2dfdb;text-align:center;vertical-align:middle}.clockpicker-display .clockpicker-display-column{float:left}.clockpicker-display .clockpicker-display-column .clockpicker-span-hours.text-primary,.clockpicker-display .clockpicker-display-column .clockpicker-span-minutes.text-primary,.clockpicker-display .clockpicker-display-column #click-am.text-primary,.clockpicker-display .clockpicker-display-column #click-pm.text-primary{-webkit-animation-name:pulse;animation-name:pulse}.clockpicker-display .clockpicker-display-column #click-am,.clockpicker-display .clockpicker-display-column #click-pm{cursor:pointer}.clockpicker-display .clockpicker-display-am-pm{height:5.3125rem;padding-left:.3125rem;vertical-align:bottom}.clockpicker-display .clockpicker-display-am-pm .clockpicker-span-am-pm{display:inline-block;font-size:1.4375rem;line-height:1.5625rem;color:#b2dfdb}.clockpicker-display .clockpicker-span-hours,.clockpicker-display .clockpicker-span-minutes{cursor:pointer;-webkit-animation-duration:500ms;animation-duration:500ms;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-transition:color 500ms;transition:color 500ms}@keyframes pulse{from{-webkit-transform:scale3d(1, 1, 1);transform:scale3d(1, 1, 1)}50%{-webkit-transform:scale3d(1.1, 1.1, 1.1);transform:scale3d(1.1, 1.1, 1.1)}to{-webkit-transform:scale3d(1, 1, 1);transform:scale3d(1, 1, 1)}}.clockpicker-moving{cursor:move}.clockpicker-plate{position:relative;width:16.875rem;height:16.875rem;margin:auto;margin-top:1.25rem;overflow:visible;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:#eee;border-radius:50%}.clockpicker-plate .clockpicker-canvas,.clockpicker-plate .clockpicker-dial{position:absolute;top:-1px;left:-1px;width:16.875rem;height:16.875rem}.clockpicker-plate .clockpicker-dial{-webkit-transition:opacity 350ms,-webkit-transform 350ms;transition:opacity 350ms,-webkit-transform 350ms;transition:transform 350ms,opacity 350ms;transition:transform 350ms,opacity 350ms,-webkit-transform 350ms}.clockpicker-plate .clockpicker-dial .clockpicker-tick{position:absolute;width:2.5rem;height:2.5rem;line-height:2.5rem;color:#666;text-align:center;cursor:pointer;background-color:rgba(0,150,136,0);border-radius:50%;-webkit-transition:background-color 300ms;transition:background-color 300ms}.clockpicker-plate .clockpicker-dial .clockpicker-tick.active,.clockpicker-plate .clockpicker-dial .clockpicker-tick:hover{background-color:rgba(0,150,136,0.25)}.clockpicker-plate .clockpicker-minutes{visibility:hidden}.clockpicker-plate .clockpicker-dial-out{opacity:0}.clockpicker-plate .clockpicker-hours.clockpicker-dial-out{-webkit-transform:scale(1.2, 1.2);transform:scale(1.2, 1.2)}.clockpicker-plate .clockpicker-minutes.clockpicker-dial-out{-webkit-transform:scale(0.8, 0.8);transform:scale(0.8, 0.8)}.clockpicker-canvas{-webkit-transition:opacity 300ms;transition:opacity 300ms}.clockpicker-canvas line{stroke:rgba(0,150,136,0.25);stroke-width:1}.clockpicker-canvas-out{opacity:.25}.clockpicker-canvas-bearing{fill:rgba(0,77,64,0.75);stroke:none}.clockpicker-canvas-fg{fill:rgba(0,77,64,0);stroke:none}.clockpicker-canvas-fg.active{fill:rgba(0,77,64,0.5)}.clockpicker-canvas-bg{fill:rgba(0,150,136,0.25);stroke:none}.clockpicker-canvas-bg-trans{fill:rgba(0,150,136,0.25)}.clockpicker-am-pm-block{width:100%;height:3.125rem;margin-top:-.625rem}.clockpicker-am-pm-block .clockpicker-button.am-button{float:left;width:2.8125rem;height:2.8125rem;border:0}.clockpicker-am-pm-block .clockpicker-button.pm-button{float:right;width:2.8125rem;height:2.8125rem;border:0}.btn-floating.btn-flat{padding:0;color:#fff;background:#4285f4}.btn-floating.btn-flat:hover{-webkit-box-shadow:none;box-shadow:none}.btn-floating.btn-flat:hover,.btn-floating.btn-flat:focus{background-color:#5a95f5}.btn-floating.btn-flat.active{background-color:#0b51c5;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.picker__footer{width:100%}.picker__footer .clockpicker-button{margin:auto;margin-top:.9375rem;text-transform:uppercase;background-color:transparent}.picker__footer .clockpicker-button:focus{background-color:transparent}.picker__footer .clockpicker-button:active{background-color:rgba(0,150,136,0.25)}.darktheme .picker__box{background-color:#212121}.darktheme .picker__box .picker__date-display{background-color:transparent}.darktheme .picker__box .picker__calendar-container .clockpicker-plate{background-color:transparent}.darktheme .picker__box .picker__calendar-container .clockpicker-plate .clockpicker-tick{background-color:rgba(255,64,129,0)}.darktheme .picker__box .picker__calendar-container .clockpicker-plate .clockpicker-tick.active,.darktheme .picker__box .picker__calendar-container .clockpicker-plate .clockpicker-tick:hover{background-color:rgba(255,64,129,0.25)}.darktheme .picker__box .picker__calendar-container .clockpicker-plate .clockpicker-canvas line{stroke:rgba(255,64,129,0.25)}.darktheme .picker__box .picker__calendar-container .clockpicker-plate .clockpicker-canvas-bearing{fill:#fff}.darktheme .picker__box .picker__calendar-container .clockpicker-plate .clockpicker-canvas-fg{fill:rgba(255,64,129,0)}.darktheme .picker__box .picker__calendar-container .clockpicker-plate .clockpicker-canvas-fg.active{fill:rgba(255,64,129,0.5)}.darktheme .picker__box .picker__calendar-container .clockpicker-plate .clockpicker-canvas-bg{fill:rgba(255,64,129,0.25)}.darktheme .picker__box .picker__calendar-container .clockpicker-plate .clockpicker-canvas-bg-trans{fill:rgba(255,64,129,0.5)}.darktheme .picker__box .picker__footer .clockpicker-button:active{background-color:rgba(255,64,129,0.25)}.picker__box{padding:0;overflow:hidden;border-radius:.125rem}.picker__box .picker__header{position:relative;margin-bottom:1.25rem;text-align:center}.picker__box .picker__header select{display:inline-block !important}.picker__box .picker__header .picker__date-display{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;padding-bottom:.3125rem;font-weight:400;background-color:#4285f4}.picker__box .picker__header .picker__date-display .picker__weekday-display{padding:.875rem .4375rem .3125rem .5rem;margin-top:1.25rem;font-size:2.1rem;letter-spacing:.5}.picker__box .picker__header .picker__date-display .picker__month-display{padding:.875rem .3125rem .25rem;margin-top:1.25rem;font-size:2.1rem}.picker__box .picker__header .picker__date-display .picker__day-display{padding:.875rem .3125rem .25rem;margin-top:1.25rem;font-size:2.1rem}.picker__box .picker__header .picker__date-display .picker__year-display{position:absolute;top:.625rem;left:45%;font-size:1.1rem;color:rgba(255,255,255,0.4)}.picker__box .picker__header .picker__month,.picker__box .picker__header .picker__year{display:inline-block;margin-right:.25em;margin-left:.25em}.picker__box .picker__header .picker__select--month,.picker__box .picker__header .picker__select--year{display:inline-block;height:2em;padding:0;margin-right:.25em;margin-left:.25em;background:transparent;border:none;border-bottom:1px solid #ced4da;outline:0}.picker__box .picker__header .picker__select--month:focus,.picker__box .picker__header .picker__select--year:focus{border-color:rgba(0,0,0,0.05)}.picker__box .picker__header .picker__select--year{width:30%}.picker__box .picker__header .picker__select--month.browser-default{display:inline;width:40%}.picker__box .picker__header .picker__select--year.browser-default{display:inline;width:25%}.picker__box .picker__header .picker__nav--prev,.picker__box .picker__header .picker__nav--next{position:absolute;-webkit-box-sizing:content-box;box-sizing:content-box;padding:.1875rem .625rem}.picker__box .picker__header .picker__nav--prev:hover,.picker__box .picker__header .picker__nav--next:hover{color:#000;cursor:pointer}.picker__box .picker__header .picker__nav--prev:before,.picker__box .picker__header .picker__nav--next:before{display:block;font-family:"Font Awesome 5 Free", sans-serif;font-weight:900}.picker__box .picker__header .picker__nav--prev{left:-.5em;padding-right:1.25em}.picker__box .picker__header .picker__nav--prev:before{content:"\f104"}.picker__box .picker__header .picker__nav--next{right:-.2em;padding-left:1.25em}.picker__box .picker__header .picker__nav--next:before{content:"\f105"}.picker__box .picker__header .picker__nav--disabled,.picker__box .picker__header .picker__nav--disabled:hover,.picker__box .picker__header .picker__nav--disabled:before,.picker__box .picker__header .picker__nav--disabled:before:hover{cursor:default;background:none;border-right-color:#f5f5f5;border-left-color:#f5f5f5}.picker__box .picker__table{width:100%;margin-top:.75em;margin-bottom:.5em;font-size:1rem;text-align:center;table-layout:fixed;border-spacing:0;border-collapse:collapse}.picker__box .picker__table th,.picker__box .picker__table td{text-align:center}.picker__box .picker__table td{padding:0;margin:0}.picker__box .picker__table .picker__weekday{width:14%;padding-bottom:.25em;font-size:.9em;font-weight:500;color:#999}@media (min-height: 33.875em){.picker__box .picker__table .picker__weekday{padding-bottom:.25em}}.picker__box .picker__table .picker__day--today{position:relative;padding:.75rem 0;font-weight:400;letter-spacing:-.3;border:1px solid transparent}.picker__box .picker__table .picker__day.picker__day--today{color:#4285f4}.picker__box .picker__table .picker__day--disabled:before{border-top-color:#aaa}.picker__box .picker__table .picker__day--infocus{padding:.75rem 0;font-weight:400;color:#595959;letter-spacing:-.3;border:#595959 transparent}.picker__box .picker__table .picker__day--infocus:hover{font-weight:500;color:#000;cursor:pointer}.picker__box .picker__table .picker__day--outfocus{display:none;padding:.75rem 0}.picker__box .picker__table .picker__day--outfocus:hover{font-weight:500;color:#ddd;cursor:pointer}.picker__box .picker__table .picker__day--highlighted:hover,.picker__box .picker__table .picker--focused .picker__day--highlighted{cursor:pointer}.picker__box .picker__table .picker__day--selected,.picker__box .picker__table .picker__day--selected:hover,.picker__box .picker__table .picker--focused{background-color:#4285f4;border-radius:50%;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);-webkit-transform:scale(0.9);transform:scale(0.9)}.picker__box .picker__table .picker__day--selected.picker__day--outfocus,.picker__box .picker__table .picker__day--selected:hover.picker__day--outfocus,.picker__box .picker__table .picker--focused.picker__day--outfocus{background-color:#ecf2fc}.picker__box .picker__table .picker__day--disabled,.picker__box .picker__table .picker__day--disabled:hover,.picker__box .picker__table .picker--focused{color:#ddd;cursor:default;background:#f5f5f5;border-color:#f5f5f5}.picker__box .picker__table .picker__day--highlighted.picker__day--disabled,.picker__box .picker__table .picker__day--highlighted.picker__day--disabled:hover{background:#bbb}.picker__box .picker__footer{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:.3125rem .625rem;text-align:right}.picker__box .picker__footer .picker__button--today,.picker__box .picker__footer .picker__button--clear,.picker__box .picker__footer .picker__button--close{display:inline-block;width:33%;padding:1rem 0 0.7rem 0;font-size:.8em;font-weight:700;text-transform:uppercase;vertical-align:bottom;background:#fff;border:1px solid #fff}.picker__box .picker__footer .picker__button--today:hover,.picker__box .picker__footer .picker__button--clear:hover,.picker__box .picker__footer .picker__button--close:hover{color:#000;cursor:pointer;background:#b1dcfb;border-bottom-color:#b1dcfb}.picker__box .picker__footer .picker__button--today:focus,.picker__box .picker__footer .picker__button--clear:focus,.picker__box .picker__footer .picker__button--close:focus{background:#b1dcfb;border-color:rgba(0,0,0,0.05);outline:none}.picker__box .picker__footer .picker__button--today:before,.picker__box .picker__footer .picker__button--clear:before,.picker__box .picker__footer .picker__button--close:before{position:relative;display:inline-block;height:0}.picker__box .picker__footer .picker__button--today:before,.picker__box .picker__footer .picker__button--clear:before{margin-right:.45em;content:" "}.picker__box .picker__footer .picker__button--today:before{top:-.05em;width:0;border-top:.66em solid #0059bc;border-left:.66em solid transparent}.picker__box .picker__footer .picker__button--clear:before{top:-.25em;width:.66em;border-top:3px solid #e20}.picker__box .picker__footer .picker__button--close:before{top:-.1em;margin-right:.35em;font-size:1.1em;color:#777;vertical-align:top;content:"\D7"}.picker__box .picker__footer .picker__button--today[disabled],.picker__box .picker__footer .picker__button--today[disabled]:hover{color:#ddd;cursor:default;background:#f5f5f5;border-color:#f5f5f5}.picker__box .picker__footer .picker__button--today[disabled]:before{border-top-color:#aaa}.picker__calendar-container{padding:0 1rem}.picker__calendar-container thead{border:none}.fixed-sn .double-nav,.fixed-sn main,.fixed-sn footer{padding-left:15rem}.fixed-sn main{padding-top:5.5rem}@media (max-width: 1440px){.fixed-sn .double-nav,.fixed-sn main,.fixed-sn footer{padding-left:0}}@media (min-width: 600px){.fixed-sn main,.fixed-sn .page-footer .container-fluid{margin-right:2%;margin-left:2%}}@media (min-width: 992px){.fixed-sn main,.fixed-sn .page-footer .container-fluid{margin-right:5%;margin-left:5%}}@media (min-width: 1200px){.fixed-sn main,.fixed-sn .page-footer .container-fluid{margin-right:6%;margin-left:6%}}.hidden-sn main{padding-top:5.5rem}.hidden-sn .button-collapse{position:relative;display:block;padding-left:0;margin-right:.625rem;margin-left:-.375rem;font-size:1.4rem}.mdb-feed .news{display:-webkit-box;display:-ms-flexbox;display:flex}.mdb-feed .news .label{display:block;-webkit-box-flex:0;-ms-flex:0 0 auto;flex:0 0 auto;-ms-flex-item-align:stretch;align-self:stretch;width:2.5rem}.mdb-feed .news .label img{width:100%;height:auto}.mdb-feed .news .excerpt{display:block;-webkit-box-flex:1;-ms-flex:1 1 auto;flex:1 1 auto;-ms-flex-item-align:stretch;align-self:stretch;margin:0 0 1.2rem 1.2rem;word-wrap:break-word}.mdb-feed .news .excerpt .brief{padding-bottom:.5rem;font-weight:500}.mdb-feed .news .excerpt .brief a{color:#4285f4}.mdb-feed .news .excerpt .brief .name{display:inline-block;vertical-align:baseline}.mdb-feed .news .excerpt .brief .date{display:inline-block;float:none;padding-left:.7rem;font-size:.86rem;font-weight:300;color:#9e9e9e}.mdb-feed .news .excerpt .added-images{margin-bottom:.6rem}.mdb-feed .news .excerpt .added-images img{display:inline-block;width:7rem;margin-right:.3rem}.mdb-feed .news .excerpt .added-text{max-width:450px;margin-bottom:.6rem}.mdb-feed .news .excerpt .feed-footer .like{font-size:.86rem;font-weight:300;color:#9e9e9e}.mdb-feed .news .excerpt .feed-footer .like:hover .fas,.mdb-feed .news .excerpt .feed-footer .like:hover .fab,.mdb-feed .news .excerpt .feed-footer .like:hover .far{color:#f44336;-webkit-transition:.4s;transition:.4s}.mdb-feed .news .excerpt .feed-footer .like:hover span{color:#000;-webkit-transition:.4s;transition:.4s}.mdb-feed .news .excerpt .feed-footer .like .fas,.mdb-feed .news .excerpt .feed-footer .like .fab,.mdb-feed .news .excerpt .feed-footer .like .far{padding-right:.5rem}.mdb-feed .news .excerpt .feed-footer span a{padding-right:.3rem;color:#4285f4;cursor:default}.mdb-feed .news .excerpt .feed-footer .thumbs .fas,.mdb-feed .news .excerpt .feed-footer .thumbs .fab,.mdb-feed .news .excerpt .feed-footer .thumbs .far{color:#9e9e9e;-webkit-transition:.4s;transition:.4s}.mdb-feed .news .excerpt .feed-footer .thumbs .fas:hover,.mdb-feed .news .excerpt .feed-footer .thumbs .fab:hover,.mdb-feed .news .excerpt .feed-footer .thumbs .far:hover{color:#757575}.mdb-feed .news .excerpt .feed-footer .thumbs .fa-thumbs-up{padding-right:.3rem}.mdb-feed .news .excerpt .feed-footer .comment{color:#9e9e9e}.card-personal .card-body .card-title{margin-bottom:.3rem;font-weight:400}.card-personal .card-body .card-title.title-one{-webkit-transition:.4s;transition:.4s}.card-personal .card-body .card-title.title-one:hover{color:#4285f4}.card-personal .card-body .card-meta{font-size:.86rem;font-weight:300;color:#757575}.card-personal .card-body .card-meta .fas,.card-personal .card-body .card-meta .fab,.card-personal .card-body .card-meta .far{padding-right:.5rem}.card-personal .card-body span{-webkit-transition:.5s;transition:.5s}.card-personal .card-body span:hover{color:#4285f4}.news-card .content .right-side-meta{float:right;margin-top:.3rem;font-weight:300;color:#9e9e9e}.news-card .content .avatar-img{width:2rem;margin-right:1rem}.news-card .content img{display:inline-block;max-width:100%;vertical-align:middle;border-radius:50%}.news-card .social-meta .fas,.news-card .social-meta .fab,.news-card .social-meta .far{padding-right:.6rem}.news-card .social-meta .fa-heart-o{color:rgba(0,0,0,0.4);cursor:pointer;-webkit-transition:.53s;transition:.53s}.news-card .social-meta .fa-heart-o:hover{color:#f44336}.news-card .social-meta span{float:right}.news-card .md-form{margin-top:1.3rem;margin-bottom:.3rem}.news-card .md-form .prefix{margin-left:.2rem;font-size:1.5rem;color:rgba(0,0,0,0.4)}.news-card .md-form .prefix ~ input,.news-card .md-form .prefix .md-form .prefix ~ textarea{width:calc(100% - 4rem)}.news-card .md-form .prefix.active{color:rgba(0,0,0,0.4)}.news-card .md-form .form-control{height:1.3rem;padding-top:0;padding-bottom:.5rem;margin-bottom:0;margin-left:3rem;border-bottom:1px solid rgba(0,0,0,0.1)}.team-section .avatar img{max-width:200px;height:auto}.team-section .avatar img.rounded-circle{max-width:150px}.testimonial-carousel .carousel-control{top:50%;background-image:none;-webkit-transform:translateY(-35%);transform:translateY(-35%)}.testimonial-carousel .carousel-control::before{font-size:5rem;color:rgba(0,0,0,0.6);-webkit-transition:.4s;transition:.4s}.testimonial-carousel .carousel-control:hover::before{color:#000;-webkit-transition:.4s;transition:.4s}.testimonial-carousel .carousel-control.left{left:6%}.testimonial-carousel .carousel-control.left::before{content:"\2039"}.testimonial-carousel .carousel-control.right{right:6%}.testimonial-carousel .carousel-control.right::before{content:"\203a"}.testimonial-carousel .testimonial{margin-right:23%;margin-left:23%}.testimonial-carousel .testimonial .avatar img{max-width:170px;-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.magazine-section .single-news{border-bottom:1px solid #e0e0e0}.magazine-section .single-news:last-of-type{border-bottom:none}.pricing-card{text-align:center}.pricing-card ul{padding:0;list-style-type:none}.pricing-card .header{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.pricing-card .option{padding:2.5rem;margin-bottom:0;font-weight:500}.pricing-card .price{position:relative;padding-top:3.94rem}.pricing-card .price .number{padding:1.5rem;font-size:5rem;font-weight:300}.pricing-card .price .number::before{position:absolute;margin-top:.7rem;margin-left:-1.2rem;font-size:1.88rem;content:"$"}.pricing-card .price .number::after{position:absolute;margin-top:3rem;font-size:1.88rem;content:"/mo"}.pricing-card .price .version{position:absolute;top:0;width:100%;padding:1rem;background-color:rgba(0,0,0,0.3);border-radius:.25rem .25rem 0 0;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)}.pricing-card .striped{padding:1rem}.pricing-card .striped li{margin-bottom:1rem;border-bottom:1px solid rgba(238,238,238,0.298039)}.pricing-card .striped.green-striped li{border-color:#33c28a}.pricing-card .striped.orange-striped li{border-color:#e97d63}.pricing-card .striped.purple-striped li{border-color:#963c94}.pricing-card .striped.darker-striped li{border-bottom:1px solid rgba(153,153,153,0.298039)}.pricing-card .card-background{background-color:#28283f;border-radius:0 0 .25rem .25rem}.card .card-circle{width:7.5rem;height:7.5rem;border:2px solid #e0e0e0;border-radius:50%}.card .card-circle .fas,.card .card-circle .fab,.card .card-circle .far{font-size:4rem}.contact-section .form .btn-floating{position:relative;bottom:3rem;float:right;margin-right:0}.contact-section .contact{background-color:#103f6d;border-radius:0 .25rem .25rem 0}.contact-section .contact .fas,.contact-section .contact .fab,.contact-section .contact .far{color:#6b89a5}.text-sm{font-size:.785rem;line-height:1rem}.card-intro{padding-left:0 !important;margin-top:67px}@media (min-width: 1441px){.card-intro{padding-left:240px !important}}.hidden-sn .card-intro{padding-left:0 !important}.card-body{padding-top:1.5rem;padding-bottom:1.5rem;border-radius:0 !important}.card-body h1{margin-bottom:0}@media (max-width: 992px){.navbar{position:relative}.card-intro{margin-top:0}.fixed-sn main{padding-top:21px}}.sky-gradient{background:-webkit-gradient(linear, left top, right top, from(#0acffe), to(#495aff));background:linear-gradient(to right, #0acffe 0%, #495aff 100%)}.users-listing-small img{width:30px;border-radius:50%}.users-listing-small .media h5{font-size:16px}.title,.secondary-heading,.primary-heading,.section-heading,.main-title{margin-bottom:1rem}.title::before,.secondary-heading::before,.primary-heading::before,.section-heading::before,.main-title::before{z-index:-1;display:block;visibility:hidden;content:""}.title::before,.secondary-heading::before,.main-title::before{height:6rem;margin-top:-6rem}.primary-heading::before,.section-heading::before{height:4rem;margin-top:-4rem}.customer-logo-carousel.customer-logo-carousel{display:block;width:117px;height:40px;margin:auto;overflow:hidden;text-indent:-666px;background-image:url("https://mdbootstrap.com/img/sprites/customers.png");background-repeat:no-repeat;background-size:1402px 40px}.customer-logo-carousel.customer-logo-carousel.nike{background-position:0 0}.customer-logo-carousel.customer-logo-carousel.amazon{background-position:-117px 0}.customer-logo-carousel.customer-logo-carousel.sony{background-position:-234px 0}.customer-logo-carousel.customer-logo-carousel.samsung{background-position:-351px 0}.customer-logo-carousel.customer-logo-carousel.airbus{background-position:-468px 0}.customer-logo-carousel.customer-logo-carousel.yahoo{background-position:-585px 0}.customer-logo-carousel.customer-logo-carousel.deloitte{background-position:-702px 0}.customer-logo-carousel.customer-logo-carousel.ge{background-position:-819px 0}.customer-logo-carousel.customer-logo-carousel.kpmg{background-position:-936px 0}.customer-logo-carousel.customer-logo-carousel.unity{background-position:-1053px 0}.customer-logo-carousel.customer-logo-carousel.ikea{background-position:-1170px 0}.customer-logo-carousel.customer-logo-carousel.aegon{background-position:-1287px 0}.error404{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;min-height:100vh}.error404 main{-webkit-box-flex:2;-ms-flex:2 0 auto;flex:2 0 auto}.switch-version{position:fixed;top:300px;right:0;width:40px;background:#fff;border-radius:4px 0 0 4px;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)}.switch-version a:first-child>.switch-to{border-top-left-radius:4px}.switch-version a:last-child>.switch-to{border-bottom-left-radius:4px}.switch-to{display:block;width:40px;height:40px;background-image:url("https://mdbootstrap.com/img/logo/mdb-angular.png");background-repeat:no-repeat}.switch-to.active{background-color:rgba(0,0,0,0.15)}.switch-to.mdb-jquery{background-position:0 -40px}.switch-to.mdb-angular{background-position:0 0}.switch-to.mdb-vue{background-position:0 -80px}.switch-to.mdb-react{background-position:0 -120px}#scrollspy .nav-item{width:100%}#scrollspy a{font-size:.8rem;font-weight:400;line-height:1.1rem;padding:0 5px;margin-top:3px;margin-bottom:3px;color:black}#scrollspy li .active{font-weight:600}.tag-common{background-color:#eee;color:#212529 !important;font-weight:500}.product_meta{position:absolute;top:-1000px}.checkout-preloader-container{position:absolute;z-index:999;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;width:100%;height:100%;background:rgba(255,255,255,0.5)}#tabCheckoutAddons,#order_cart_content{position:relative}.shrink{width:0;height:0;padding:0 !important;margin-bottom:0 !important}.woocommerce label[for="mailchimp_woocommerce_newsletter"]{display:none !important}#license-type-tabs .nav-item .nav-link:not(.active){border:1px solid rgba(0,0,0,0.25)}#individuals_radio .fa-check{display:none}#individuals_radio label.active .fa-check{display:inline-block;color:#fff}.table-products img{max-width:100px;max-height:100px}.table-products tr th,.table-products tr td{vertical-align:middle}.documentation .docs-section{padding-bottom:2.5rem;margin-bottom:3rem;border-bottom:1px solid #666}.documentation .main-title{font-size:2rem;font-weight:700 !important}.documentation .section-title{font-size:1.4rem;font-weight:500 !important}.documentation section .code-toolbar{position:relative}.documentation section .code-toolbar .btn-copy-code{position:absolute;top:8px;right:.6rem;background:#f5f2f0 !important}.documentation section .code-toolbar .export-to-snippet{position:absolute;top:8px;right:20px;background-color:transparent !important}.documentation section .docs-pills .code-toolbar{position:static !important}.documentation section .docs-pills .btn-copy-code{background-color:transparent !important}.documentation .doc-title{border-top:1px solid #e0e0e0;border-bottom:1px solid #e0e0e0;padding:2rem 0;margin:5rem 0 2rem;text-transform:uppercase;font-size:2rem}.documentation .doc-title.doc-first{border-top:none;margin-top:0;padding-top:1.2rem}.documentation .doc-title.doc-subtitle{text-transform:none;border-top:none;font-size:1.7rem;margin-top:2rem}.documentation .doc-title .btn{margin-top:-2px}@media (max-width: 776px){.documentation .doc-title .btn{margin-top:1rem;display:block}}.documentation .col-example{padding:1rem;background-color:#33b5e5;border:2px solid #fff;color:#fff;text-align:center}.documentation .example-td{padding:1rem;background-color:#33b5e5 !important;border:2px solid #fff !important;color:#fff}.documentation .example-parent{background-color:#eee !important}.documentation li.circle-li{list-style-type:disc}.documentation ul.ul-flex{padding-left:3rem}.documentation .is-visible{background-color:#bbdefb}.documentation .is-hidden{color:#9e9e9e}.documentation .scroll-box{position:relative}.documentation .scrollspy-example{overflow-y:scroll;position:relative;height:200px;padding:1rem}.documentation .dzik:after{content:"Wrrr. jestem wielkim strasznym dzikiem"}.documentation footer{padding-left:0}.color-block{text-align:center;height:130px;color:#fff;padding:40px}.color-block-dark{height:130px;text-align:center;color:#fff;padding:40px}.color-block-dark h5{font-size:1rem}.dynamic-color .col-md-4{margin-bottom:2rem}.dynamic-color .col-md-4 div{padding:7px 20px 7px 20px}.docs-pills{padding:0;margin:1.5rem 0;border:1px solid #e0e0e0;border-radius:2px}.docs-pills .nav{border-bottom:1px solid #e0e0e0}.docs-pills .tab-content{padding:0}.docs-pills .code-toolbar{margin-top:0 !important;margin-bottom:0 !important}.docs-tabs{margin-top:1rem}.docs-tabs .nav-link{margin-right:8px;margin-bottom:-1px;color:#212529;border-color:rgba(0,0,0,0.15);border-style:solid;border-width:1px 1px 0 1px;border-radius:5px 5px 0 0}.docs-tabs .nav-link.active{font-weight:600;background:#eaeaea}.docs-tab-content{position:relative;border:1px solid rgba(0,0,0,0.15);padding:0}.docs-tab-content pre[class*=language-]{margin:0 !important;-webkit-box-shadow:none !important;box-shadow:none !important}.docs-tab-content .code-toolbar{margin-top:0 !important;margin-bottom:0 !important}.mdbsh-live-example{margin-top:1rem;margin-bottom:1rem;border:1px solid #e0e0e0;-webkit-box-shadow:none !important;box-shadow:none !important}.mdbsh-live-example .card-header{background-color:rgba(0,0,0,0.03);color:black}code[class*=language-],pre[class*=language-]{max-height:450px}ul.search-dropdown li a{line-height:28px;height:28px;width:230px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.mdb-skin-custom .side-nav{background-color:#F9F9F9}.mdb-skin-custom .side-nav .logo-wrapper>div{background-color:transparent !important}.mdb-skin-custom .side-nav .search-form .md-form input{color:#424242 !important;border-bottom:1px solid rgba(153,153,153,0.3)}.mdb-skin-custom .side-nav .search-form .md-form input::-webkit-input-placeholder{color:rgba(66,66,66,0.5) !important}.mdb-skin-custom .side-nav .search-form .md-form input::-moz-placeholder{color:rgba(66,66,66,0.5) !important}.mdb-skin-custom .side-nav .search-form .md-form input:-ms-input-placeholder{color:rgba(66,66,66,0.5) !important}.mdb-skin-custom .side-nav .search-form .md-form input::-ms-input-placeholder{color:rgba(66,66,66,0.5) !important}.mdb-skin-custom .side-nav .search-form .md-form input::placeholder{color:rgba(66,66,66,0.5) !important}.mdb-skin-custom .side-nav .collapsible li{background-color:transparent}.mdb-skin-custom .side-nav .collapsible li a{font-weight:400}.mdb-skin-custom .side-nav .collapsible li .collapsible-header{color:#424242;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.mdb-skin-custom .side-nav .collapsible li .collapsible-header.active{color:#4285F4;background-color:transparent}.mdb-skin-custom .side-nav .collapsible li .collapsible-header:hover{background-color:rgba(0,0,0,0.05)}.mdb-skin-custom .side-nav .collapsible li .collapsible-body a{color:#424242;font-size:.78rem;height:28px;line-height:28px;background-color:rgba(95,93,93,0.15)}.mdb-skin-custom .side-nav .collapsible li .collapsible-body a:hover{color:#4285F4}.mdb-skin-custom .side-nav .fa{color:#424242}.mdb-skin-custom .side-nav .sidenav-bg:after,.mdb-skin-custom .side-nav .sidenav-bg.mask-strong:after{background:rgba(255,255,255,0.8)}.mdb-skin-custom .side-nav .sidenav-bg.mask-light:after{background:rgba(255,255,255,0.65)}.mdb-skin-custom .side-nav .sidenav-bg.mask-slight:after{background:rgba(255,255,255,0.5)}.mdb-skin-custom .btn-ptc{background-color:#4285F4 !important;color:#fff !important}.mdb-skin-custom .btn-ptc:hover{background-color:#5a95f5}.mdb-skin-custom .btn-ptc:focus,.mdb-skin-custom .btn-ptc.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin-custom .btn-ptc:focus,.mdb-skin-custom .btn-ptc:active,.mdb-skin-custom .btn-ptc.active{background-color:#0b51c5}.mdb-skin-custom .btn-ptc.dropdown-toggle{background-color:#4285F4 !important}.mdb-skin-custom .btn-ptc.dropdown-toggle:hover,.mdb-skin-custom .btn-ptc.dropdown-toggle:focus{background-color:#5a95f5 !important}.mdb-skin-custom .btn-ptc:not([disabled]):not(.disabled):active,.mdb-skin-custom .btn-ptc:not([disabled]):not(.disabled).active,.show>.mdb-skin-custom .btn-ptc.dropdown-toggle{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);background-color:#0b51c5 !important}.mdb-skin-custom .btn-ptc:not([disabled]):not(.disabled):active:focus,.mdb-skin-custom .btn-ptc:not([disabled]):not(.disabled).active:focus,.show>.mdb-skin-custom .btn-ptc.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin-custom .btn-stc{background-color:#fc685f !important;color:#fff !important}.mdb-skin-custom .btn-stc:hover{background-color:#fc8078}.mdb-skin-custom .btn-stc:focus,.mdb-skin-custom .btn-stc.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin-custom .btn-stc:focus,.mdb-skin-custom .btn-stc:active,.mdb-skin-custom .btn-stc.active{background-color:#f01205}.mdb-skin-custom .btn-stc.dropdown-toggle{background-color:#fc685f !important}.mdb-skin-custom .btn-stc.dropdown-toggle:hover,.mdb-skin-custom .btn-stc.dropdown-toggle:focus{background-color:#fc8078 !important}.mdb-skin-custom .btn-stc:not([disabled]):not(.disabled):active,.mdb-skin-custom .btn-stc:not([disabled]):not(.disabled).active,.show>.mdb-skin-custom .btn-stc.dropdown-toggle{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);background-color:#f01205 !important}.mdb-skin-custom .btn-stc:not([disabled]):not(.disabled):active:focus,.mdb-skin-custom .btn-stc:not([disabled]):not(.disabled).active:focus,.show>.mdb-skin-custom .btn-stc.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin-custom .btn-dtc{background-color:#454545 !important;color:#fff !important}.mdb-skin-custom .btn-dtc:hover{background-color:#525252}.mdb-skin-custom .btn-dtc:focus,.mdb-skin-custom .btn-dtc.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin-custom .btn-dtc:focus,.mdb-skin-custom .btn-dtc:active,.mdb-skin-custom .btn-dtc.active{background-color:#121212}.mdb-skin-custom .btn-dtc.dropdown-toggle{background-color:#454545 !important}.mdb-skin-custom .btn-dtc.dropdown-toggle:hover,.mdb-skin-custom .btn-dtc.dropdown-toggle:focus{background-color:#525252 !important}.mdb-skin-custom .btn-dtc:not([disabled]):not(.disabled):active,.mdb-skin-custom .btn-dtc:not([disabled]):not(.disabled).active,.show>.mdb-skin-custom .btn-dtc.dropdown-toggle{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);background-color:#121212 !important}.mdb-skin-custom .btn-dtc:not([disabled]):not(.disabled):active:focus,.mdb-skin-custom .btn-dtc:not([disabled]):not(.disabled).active:focus,.show>.mdb-skin-custom .btn-dtc.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin-custom a.button-collapse{color:#007bff}.side-nav .current-menu-item>a{color:#4285f4 !important}.hidden-sn main{padding-top:1.5rem}.navbar .navbar-brand img{height:20px}.navbar .button-collapse{padding-top:1px}.side-nav .search-form{border-top:1px solid rgba(153,153,153,0.3)}.side-nav ul .logo-sn{padding-bottom:1rem !important;padding-top:1rem;background-color:rem !important}.double-nav .breadcrumb-dn{padding-left:1rem;color:#424242}.double-nav .breadcrumb-dn a{font-weight:400;color:#0099CC}.double-nav .nav-link{padding-top:11px}.double-nav .nav-link .badge{height:15px;padding-top:2px}.nav li{list-style:none}.mdb-skin-custom .side-nav .collapsible li .collapsible-body a{font-size:.78rem}.side-nav .collapsible-body a{height:28px;line-height:28px;background-color:rgba(95,93,93,0.15)}.mdb-com-snippets::after{content:""}.card-snippet a{font-weight:500;color:#3f3e3e !important;-webkit-transition:.2s !important;transition:.2s !important}.card-snippet a:hover{color:#6d6a6a !important}.card-snippet a:hover .active{color:#a00b0b}.card-snippet a .card-snippet-title{padding-bottom:13px;margin-bottom:12px;border-bottom:1px solid #eee}.miniature-wrapper{position:relative;height:185.109px}iframe.minature{position:absolute;top:0;left:0;-webkit-transform:scale(0.25);transform:scale(0.25);width:400%;height:400%;-webkit-transform-origin:top left;transform-origin:top left}.mdb-com-support::after{content:""}.card-img-100 img{width:100px}.card-img-64 img{width:64px}.card-img-30 img{width:30px}.forum-card-img-64 img{width:64px;height:64px}.forum-card-img-30 img{width:30px;height:30px}.img-25{width:25px}.card-tabs .card-header{padding:0}.card-tabs .card-header .nav-item{border-right:1px solid #bdbdbd}.card-tabs .card-header .nav-item .nav-link{padding:1rem}.card-tabs .card-header .nav-item .nav-link.active{background-color:#bdbdbd}.question-card img{max-width:100%;height:auto}.mdb-com-tutorial .card-progress .accordion .card-header{padding-right:1.2rem;padding-left:1.2rem}.mdb-com-tutorial .card-progress .accordion .card-header a h5{font-size:1rem;font-weight:400}.mdb-com-tutorial .card-progress .list-naked .list-group-item{padding-top:5px;padding-bottom:5px;border-right:0;border-left:0}.mdb-com-tutorial .card-progress .list-naked .list-group-item:first-of-type{border-top:0}.mdb-com-tutorial .card-progress .list-naked .list-group-item:last-of-type{border-bottom:0}.mdb-com-tutorial .card-progress .list-naked .completed{color:#000;background-color:rgba(76,175,80,0.2);border-color:#bdbdbd}.mdb-com-tutorial .card-progress .list-naked .active{color:#000;background-color:rgba(3,168,244,0.151);border-color:#bdbdbd}.mdb-com-tutorial .pagination .page-item.active .page-link{background-color:#09c}.text-sm{font-size:.785rem;line-height:1rem}.card-intro{padding-left:0 !important;margin-top:67px}@media (min-width: 1441px){.card-intro{padding-left:240px !important}}.hidden-sn .card-intro{padding-left:0 !important}.card-body{padding-top:1.5rem;padding-bottom:1.5rem;border-radius:0 !important}.card-body h1{margin-bottom:0}@media (max-width: 992px){.navbar{position:relative}.card-intro{margin-top:0}.fixed-sn main{padding-top:21px}}.sky-gradient{background:-webkit-gradient(linear, left top, right top, from(#0acffe), to(#495aff));background:linear-gradient(to right, #0acffe 0%, #495aff 100%)}.users-listing-small img{width:30px;border-radius:50%}.users-listing-small .media h5{font-size:16px}.title,.secondary-heading,.primary-heading,.section-heading,.main-title{margin-bottom:1rem}.title::before,.secondary-heading::before,.primary-heading::before,.section-heading::before,.main-title::before{z-index:-1;display:block;visibility:hidden;content:""}.title::before,.secondary-heading::before,.main-title::before{height:6rem;margin-top:-6rem}.primary-heading::before,.section-heading::before{height:4rem;margin-top:-4rem}.customer-logo-carousel.customer-logo-carousel{display:block;width:117px;height:40px;margin:auto;overflow:hidden;text-indent:-666px;background-image:url("https://mdbootstrap.com/img/sprites/customers.png");background-repeat:no-repeat;background-size:1402px 40px}.customer-logo-carousel.customer-logo-carousel.nike{background-position:0 0}.customer-logo-carousel.customer-logo-carousel.amazon{background-position:-117px 0}.customer-logo-carousel.customer-logo-carousel.sony{background-position:-234px 0}.customer-logo-carousel.customer-logo-carousel.samsung{background-position:-351px 0}.customer-logo-carousel.customer-logo-carousel.airbus{background-position:-468px 0}.customer-logo-carousel.customer-logo-carousel.yahoo{background-position:-585px 0}.customer-logo-carousel.customer-logo-carousel.deloitte{background-position:-702px 0}.customer-logo-carousel.customer-logo-carousel.ge{background-position:-819px 0}.customer-logo-carousel.customer-logo-carousel.kpmg{background-position:-936px 0}.customer-logo-carousel.customer-logo-carousel.unity{background-position:-1053px 0}.customer-logo-carousel.customer-logo-carousel.ikea{background-position:-1170px 0}.customer-logo-carousel.customer-logo-carousel.aegon{background-position:-1287px 0}.error404{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;min-height:100vh}.error404 main{-webkit-box-flex:2;-ms-flex:2 0 auto;flex:2 0 auto}.switch-version{position:fixed;top:300px;right:0;width:40px;background:#fff;border-radius:4px 0 0 4px;-webkit-box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)}.switch-version a:first-child>.switch-to{border-top-left-radius:4px}.switch-version a:last-child>.switch-to{border-bottom-left-radius:4px}.switch-to{display:block;width:40px;height:40px;background-image:url("https://mdbootstrap.com/img/logo/mdb-angular.png");background-repeat:no-repeat}.switch-to.active{background-color:rgba(0,0,0,0.15)}.switch-to.mdb-jquery{background-position:0 -40px}.switch-to.mdb-angular{background-position:0 0}.switch-to.mdb-vue{background-position:0 -80px}.switch-to.mdb-react{background-position:0 -120px}#scrollspy .nav-item{width:100%}#scrollspy a{font-size:.8rem;font-weight:400;line-height:1.1rem;padding:0 5px;margin-top:3px;margin-bottom:3px;color:black}#scrollspy li .active{font-weight:600}.tag-common{background-color:#eee;color:#212529 !important;font-weight:500}.product_meta{position:absolute;top:-1000px}.checkout-preloader-container{position:absolute;z-index:999;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;width:100%;height:100%;background:rgba(255,255,255,0.5)}#tabCheckoutAddons,#order_cart_content{position:relative}.shrink{width:0;height:0;padding:0 !important;margin-bottom:0 !important}.woocommerce label[for="mailchimp_woocommerce_newsletter"]{display:none !important}#license-type-tabs .nav-item .nav-link:not(.active){border:1px solid rgba(0,0,0,0.25)}#individuals_radio .fa-check{display:none}#individuals_radio label.active .fa-check{display:inline-block;color:#fff}.table-products img{max-width:100px;max-height:100px}.table-products tr th,.table-products tr td{vertical-align:middle}.documentation .docs-section{padding-bottom:2.5rem;margin-bottom:3rem;border-bottom:1px solid #666}.documentation .main-title{font-size:2rem;font-weight:700 !important}.documentation .section-title{font-size:1.4rem;font-weight:500 !important}.documentation section .code-toolbar{position:relative}.documentation section .code-toolbar .btn-copy-code{position:absolute;top:8px;right:.6rem;background:#f5f2f0 !important}.documentation section .code-toolbar .export-to-snippet{position:absolute;top:8px;right:20px;background-color:transparent !important}.documentation section .docs-pills .code-toolbar{position:static !important}.documentation section .docs-pills .btn-copy-code{background-color:transparent !important}.documentation .doc-title{border-top:1px solid #e0e0e0;border-bottom:1px solid #e0e0e0;padding:2rem 0;margin:5rem 0 2rem;text-transform:uppercase;font-size:2rem}.documentation .doc-title.doc-first{border-top:none;margin-top:0;padding-top:1.2rem}.documentation .doc-title.doc-subtitle{text-transform:none;border-top:none;font-size:1.7rem;margin-top:2rem}.documentation .doc-title .btn{margin-top:-2px}@media (max-width: 776px){.documentation .doc-title .btn{margin-top:1rem;display:block}}.documentation .col-example{padding:1rem;background-color:#33b5e5;border:2px solid #fff;color:#fff;text-align:center}.documentation .example-td{padding:1rem;background-color:#33b5e5 !important;border:2px solid #fff !important;color:#fff}.documentation .example-parent{background-color:#eee !important}.documentation li.circle-li{list-style-type:disc}.documentation ul.ul-flex{padding-left:3rem}.documentation .is-visible{background-color:#bbdefb}.documentation .is-hidden{color:#9e9e9e}.documentation .scroll-box{position:relative}.documentation .scrollspy-example{overflow-y:scroll;position:relative;height:200px;padding:1rem}.documentation .dzik:after{content:"Wrrr. jestem wielkim strasznym dzikiem"}.documentation footer{padding-left:0}.color-block{text-align:center;height:130px;color:#fff;padding:40px}.color-block-dark{height:130px;text-align:center;color:#fff;padding:40px}.color-block-dark h5{font-size:1rem}.dynamic-color .col-md-4{margin-bottom:2rem}.dynamic-color .col-md-4 div{padding:7px 20px 7px 20px}.docs-pills{padding:0;margin:1.5rem 0;border:1px solid #e0e0e0;border-radius:2px}.docs-pills .nav{border-bottom:1px solid #e0e0e0}.docs-pills .tab-content{padding:0}.docs-pills .code-toolbar{margin-top:0 !important;margin-bottom:0 !important}.docs-tabs{margin-top:1rem}.docs-tabs .nav-link{margin-right:8px;margin-bottom:-1px;color:#212529;border-color:rgba(0,0,0,0.15);border-style:solid;border-width:1px 1px 0 1px;border-radius:5px 5px 0 0}.docs-tabs .nav-link.active{font-weight:600;background:#eaeaea}.docs-tab-content{position:relative;border:1px solid rgba(0,0,0,0.15);padding:0}.docs-tab-content pre[class*=language-]{margin:0 !important;-webkit-box-shadow:none !important;box-shadow:none !important}.docs-tab-content .code-toolbar{margin-top:0 !important;margin-bottom:0 !important}.mdbsh-live-example{margin-top:1rem;margin-bottom:1rem;border:1px solid #e0e0e0;-webkit-box-shadow:none !important;box-shadow:none !important}.mdbsh-live-example .card-header{background-color:rgba(0,0,0,0.03);color:black}code[class*=language-],pre[class*=language-]{max-height:450px}ul.search-dropdown li a{line-height:28px;height:28px;width:230px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.mdb-skin-custom .side-nav{background-color:#F9F9F9}.mdb-skin-custom .side-nav .logo-wrapper>div{background-color:transparent !important}.mdb-skin-custom .side-nav .search-form .md-form input{color:#424242 !important;border-bottom:1px solid rgba(153,153,153,0.3)}.mdb-skin-custom .side-nav .search-form .md-form input::-webkit-input-placeholder{color:rgba(66,66,66,0.5) !important}.mdb-skin-custom .side-nav .search-form .md-form input::-moz-placeholder{color:rgba(66,66,66,0.5) !important}.mdb-skin-custom .side-nav .search-form .md-form input:-ms-input-placeholder{color:rgba(66,66,66,0.5) !important}.mdb-skin-custom .side-nav .search-form .md-form input::-ms-input-placeholder{color:rgba(66,66,66,0.5) !important}.mdb-skin-custom .side-nav .search-form .md-form input::placeholder{color:rgba(66,66,66,0.5) !important}.mdb-skin-custom .side-nav .collapsible li{background-color:transparent}.mdb-skin-custom .side-nav .collapsible li a{font-weight:400}.mdb-skin-custom .side-nav .collapsible li .collapsible-header{color:#424242;-webkit-transition:all 0.3s linear;transition:all 0.3s linear}.mdb-skin-custom .side-nav .collapsible li .collapsible-header.active{color:#4285F4;background-color:transparent}.mdb-skin-custom .side-nav .collapsible li .collapsible-header:hover{background-color:rgba(0,0,0,0.05)}.mdb-skin-custom .side-nav .collapsible li .collapsible-body a{color:#424242;font-size:.78rem;height:28px;line-height:28px;background-color:rgba(95,93,93,0.15)}.mdb-skin-custom .side-nav .collapsible li .collapsible-body a:hover{color:#4285F4}.mdb-skin-custom .side-nav .fa{color:#424242}.mdb-skin-custom .side-nav .sidenav-bg:after,.mdb-skin-custom .side-nav .sidenav-bg.mask-strong:after{background:rgba(255,255,255,0.8)}.mdb-skin-custom .side-nav .sidenav-bg.mask-light:after{background:rgba(255,255,255,0.65)}.mdb-skin-custom .side-nav .sidenav-bg.mask-slight:after{background:rgba(255,255,255,0.5)}.mdb-skin-custom .btn-ptc{background-color:#4285F4 !important;color:#fff !important}.mdb-skin-custom .btn-ptc:hover{background-color:#5a95f5}.mdb-skin-custom .btn-ptc:focus,.mdb-skin-custom .btn-ptc.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin-custom .btn-ptc:focus,.mdb-skin-custom .btn-ptc:active,.mdb-skin-custom .btn-ptc.active{background-color:#0b51c5}.mdb-skin-custom .btn-ptc.dropdown-toggle{background-color:#4285F4 !important}.mdb-skin-custom .btn-ptc.dropdown-toggle:hover,.mdb-skin-custom .btn-ptc.dropdown-toggle:focus{background-color:#5a95f5 !important}.mdb-skin-custom .btn-ptc:not([disabled]):not(.disabled):active,.mdb-skin-custom .btn-ptc:not([disabled]):not(.disabled).active,.show>.mdb-skin-custom .btn-ptc.dropdown-toggle{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);background-color:#0b51c5 !important}.mdb-skin-custom .btn-ptc:not([disabled]):not(.disabled):active:focus,.mdb-skin-custom .btn-ptc:not([disabled]):not(.disabled).active:focus,.show>.mdb-skin-custom .btn-ptc.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin-custom .btn-stc{background-color:#fc685f !important;color:#fff !important}.mdb-skin-custom .btn-stc:hover{background-color:#fc8078}.mdb-skin-custom .btn-stc:focus,.mdb-skin-custom .btn-stc.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin-custom .btn-stc:focus,.mdb-skin-custom .btn-stc:active,.mdb-skin-custom .btn-stc.active{background-color:#f01205}.mdb-skin-custom .btn-stc.dropdown-toggle{background-color:#fc685f !important}.mdb-skin-custom .btn-stc.dropdown-toggle:hover,.mdb-skin-custom .btn-stc.dropdown-toggle:focus{background-color:#fc8078 !important}.mdb-skin-custom .btn-stc:not([disabled]):not(.disabled):active,.mdb-skin-custom .btn-stc:not([disabled]):not(.disabled).active,.show>.mdb-skin-custom .btn-stc.dropdown-toggle{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);background-color:#f01205 !important}.mdb-skin-custom .btn-stc:not([disabled]):not(.disabled):active:focus,.mdb-skin-custom .btn-stc:not([disabled]):not(.disabled).active:focus,.show>.mdb-skin-custom .btn-stc.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin-custom .btn-dtc{background-color:#454545 !important;color:#fff !important}.mdb-skin-custom .btn-dtc:hover{background-color:#525252}.mdb-skin-custom .btn-dtc:focus,.mdb-skin-custom .btn-dtc.focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin-custom .btn-dtc:focus,.mdb-skin-custom .btn-dtc:active,.mdb-skin-custom .btn-dtc.active{background-color:#121212}.mdb-skin-custom .btn-dtc.dropdown-toggle{background-color:#454545 !important}.mdb-skin-custom .btn-dtc.dropdown-toggle:hover,.mdb-skin-custom .btn-dtc.dropdown-toggle:focus{background-color:#525252 !important}.mdb-skin-custom .btn-dtc:not([disabled]):not(.disabled):active,.mdb-skin-custom .btn-dtc:not([disabled]):not(.disabled).active,.show>.mdb-skin-custom .btn-dtc.dropdown-toggle{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);background-color:#121212 !important}.mdb-skin-custom .btn-dtc:not([disabled]):not(.disabled):active:focus,.mdb-skin-custom .btn-dtc:not([disabled]):not(.disabled).active:focus,.show>.mdb-skin-custom .btn-dtc.dropdown-toggle:focus{-webkit-box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15);box-shadow:0 5px 11px 0 rgba(0,0,0,0.18),0 4px 15px 0 rgba(0,0,0,0.15)}.mdb-skin-custom a.button-collapse{color:#007bff}.side-nav .current-menu-item>a{color:#4285f4 !important}.hidden-sn main{padding-top:1.5rem}.navbar .navbar-brand img{height:20px}.navbar .button-collapse{padding-top:1px}.side-nav .search-form{border-top:1px solid rgba(153,153,153,0.3)}.side-nav ul .logo-sn{padding-bottom:1rem !important;padding-top:1rem;background-color:rem !important}.double-nav .breadcrumb-dn{padding-left:1rem;color:#424242}.double-nav .breadcrumb-dn a{font-weight:400;color:#0099CC}.double-nav .nav-link{padding-top:11px}.double-nav .nav-link .badge{height:15px;padding-top:2px}.nav li{list-style:none}.mdb-skin-custom .side-nav .collapsible li .collapsible-body a{font-size:.78rem}.side-nav .collapsible-body a{height:28px;line-height:28px;background-color:rgba(95,93,93,0.15)}.mdb-com-snippets::after{content:""}.card-snippet a{font-weight:500;color:#3f3e3e !important;-webkit-transition:.2s !important;transition:.2s !important}.card-snippet a:hover{color:#6d6a6a !important}.card-snippet a:hover .active{color:#a00b0b}.card-snippet a .card-snippet-title{padding-bottom:13px;margin-bottom:12px;border-bottom:1px solid #eee}.miniature-wrapper{position:relative;height:185.109px}iframe.minature{position:absolute;top:0;left:0;-webkit-transform:scale(0.25);transform:scale(0.25);width:400%;height:400%;-webkit-transform-origin:top left;transform-origin:top left}.mdb-com-support::after{content:""}.card-img-100 img{width:100px}.card-img-64 img{width:64px}.card-img-30 img{width:30px}.forum-card-img-64 img{width:64px;height:64px}.forum-card-img-30 img{width:30px;height:30px}.img-25{width:25px}.card-tabs .card-header{padding:0}.card-tabs .card-header .nav-item{border-right:1px solid #bdbdbd}.card-tabs .card-header .nav-item .nav-link{padding:1rem}.card-tabs .card-header .nav-item .nav-link.active{background-color:#bdbdbd}.question-card img{max-width:100%;height:auto}.mdb-com-tutorial .card-progress .accordion .card-header{padding-right:1.2rem;padding-left:1.2rem}.mdb-com-tutorial .card-progress .accordion .card-header a h5{font-size:1rem;font-weight:400}.mdb-com-tutorial .card-progress .list-naked .list-group-item{padding-top:5px;padding-bottom:5px;border-right:0;border-left:0}.mdb-com-tutorial .card-progress .list-naked .list-group-item:first-of-type{border-top:0}.mdb-com-tutorial .card-progress .list-naked .list-group-item:last-of-type{border-bottom:0}.mdb-com-tutorial .card-progress .list-naked .completed{color:#000;background-color:rgba(76,175,80,0.2);border-color:#bdbdbd}.mdb-com-tutorial .card-progress .list-naked .active{color:#000;background-color:rgba(3,168,244,0.151);border-color:#bdbdbd}.mdb-com-tutorial .pagination .page-item.active .page-link{background-color:#09c}

</style>