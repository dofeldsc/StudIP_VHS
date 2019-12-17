<? if (sizeof($intranets) >1) : ?>
    <?= $this->render_partial('_partials/intranet_selector', array('intranets' => $intranets)) ?>
<? endif ?>


<style>
iframe {
    height: 320px;
    width: 660px;
    margin-top: 19px;
    margin-left: 10px;
} 
    
.portal-boxenouter:nth-of-type(n+2) {
    margin-top: 1.15rem;
}
.portal-boxenouter:nth-of-type(2) {
    margin-top: 0;
}
.portal-boxenouter:nth-of-type(3) {
    margin-top: 0;
}
.portal-boxeninner {
    width: 100%;
    padding-top: 100%;
    position: relative;
    background-color: #eee;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
    overflow: hidden;
}
.portal-boxentext p {
    color: #fff;
}
.portal-boxenclose {
    position: absolute;
    top: 1rem;
    right: 1rem;
    color: #fff;
    border: 0;
    padding: 0;
    display: block;
    background: 0 0;
    font-size: 1rem;
    z-index: 99;
}
.portal-boxeninner:hover {
    cursor: pointer;
}
.portal-boxenintro.away {
    opacity: 0;
}
.portal-boxenoverlay.active {
    opacity: 1;
    top: 0;
}
.portal-boxenintro {
    display: block;
    opacity: 1;
    position: absolute;
    bottom: 0;
    padding-top: 4rem;
    left: 0;
    right: 0;
    width: 100%;
    transition: top 150ms,opacity 150ms;
    padding: 1rem;
    background: -webkit-linear-gradient(top,transparent 0,rgba(0,0,0,.8) 100%);
}
.portal-boxenoverlay {
    opacity: 0;
    display: none;
    position: absolute;
    top: 10%;
    height: 100%;
    left: 0;
    right: 0;
    width: 100%;
    transition: opacity 150ms,top 150ms;
    padding: 1rem;
    background: -webkit-linear-gradient(top,rgba(0,0,0,.5) 0,rgba(0,0,0,.8) 100%);
}
.portal-boxenouter.small-12 {
 width:100% !important
}

@media (min-width:800px) {
 .portal-boxenouter.large-4 {
  width:33.3333% !important
 }
}
.portal-boxenheadline {
    color: #fff;
    font-weight: 600;
    font-size: 0.9rem;
    margin-bottom: 0;
    padding-right: 2rem;
}
.portal-boxendate {
    color: #fff;
    display: block;
    margin-top: 4px;
}

/*foundation.css aus ohn layout plugin*/

*,*:before,*:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

html,body {
  font-size: 100%;
}



a:hover {
  cursor: pointer;
}

a:focus {
  outline: none;
}

img,object,embed {
  max-width: 100%;
  height: auto;
}

object,embed {
  height: 100%;
}

img {
  -ms-interpolation-mode: bicubic;
}

#map_canvas img,#map_canvas embed,#map_canvas object,.map_canvas img,.map_canvas embed,.map_canvas object {
  max-width: none !important;
}

.left {
  float: left !important;
}

.right {
  float: right !important;
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

.text-justify {
  text-align: justify !important;
}

.hide {
  display: none;
}

.antialiased {
  -webkit-font-smoothing: antialiased;
}

img {
  display: inline-block;
  vertical-align: middle;
}

textarea {
  height: auto;
  min-height: 50px;
}

/*
select {
  width: 100%;
}
*/

.row {
  width: 100%;
  margin-left: auto;
  margin-right: auto;
  margin-top: 0;
  margin-bottom: 0;
  max-width: 63.75em;
  *zoom: 1;
}

.row:before,.row:after {
  content: " ";
  display: table;
}

.row:after {
  clear: both;
}

.row.collapse .column,.row.collapse .columns {
  position: relative;
  padding-left: 0;
  padding-right: 0;
  float: left;
}

.row .row {
  width: auto;
  margin-left: -0.625em;
  margin-right: -0.625em;
  margin-top: 0;
  margin-bottom: 0;
  max-width: none;
  *zoom: 1;
}

.row .row:before,.row .row:after {
  content: " ";
  display: table;
}

.row .row:after {
  clear: both;
}

.row .row.collapse {
  width: auto;
  margin: 0;
  max-width: none;
  *zoom: 1;
}

.row .row.collapse:before,.row .row.collapse:after {
  content: " ";
  display: table;
}

.row .row.collapse:after {
  clear: both;
}

.column,.columns {
  position: relative;
  padding-left: 0.625em;
  padding-right: 0.625em;
  width: 100%;
  float: left;
}

@media only screen {
  .column,.columns {
    position: relative;
    padding-left: 0.625em;
    padding-right: 0.625em;
    float: left;
  }

  .small-1 {
    position: relative;
    width: 8.333333%;
  }

  .small-2 {
    position: relative;
    width: 16.666667%;
  }

  .small-3 {
    position: relative;
    width: 25%;
  }

  .small-4 {
    position: relative;
    width: 33.333333%;
  }

  .small-5 {
    position: relative;
    width: 41.666667%;
  }

  .small-6 {
    position: relative;
    width: 50%;
  }

  .small-7 {
    position: relative;
    width: 58.333333%;
  }

  .small-8 {
    position: relative;
    width: 66.666667%;
  }

  .small-9 {
    position: relative;
    width: 75%;
  }

  .small-10 {
    position: relative;
    width: 83.333333%;
  }

  .small-11 {
    position: relative;
    width: 91.666667%;
  }

  .small-12 {
    position: relative;
    width: 100%;
  }

  .small-offset-0 {
    position: relative;
    margin-left: 0%;
  }

  .small-offset-1 {
    position: relative;
    margin-left: 8.333333%;
  }

  .small-offset-2 {
    position: relative;
    margin-left: 16.666667%;
  }

  .small-offset-3 {
    position: relative;
    margin-left: 25%;
  }

  .small-offset-4 {
    position: relative;
    margin-left: 33.333333%;
  }

  .small-offset-5 {
    position: relative;
    margin-left: 41.666667%;
  }

  .small-offset-6 {
    position: relative;
    margin-left: 50%;
  }

  .small-offset-7 {
    position: relative;
    margin-left: 58.333333%;
  }

  .small-offset-8 {
    position: relative;
    margin-left: 66.666667%;
  }

  .small-offset-9 {
    position: relative;
    margin-left: 75%;
  }

  .small-offset-10 {
    position: relative;
    margin-left: 83.333333%;
  }

  [class*="column"]+[class*="column"]:last-child {
    
  }

  [class*="column"]+[class*="column"].end {
    float: left;
  }

  .column.small-centered,.columns.small-centered {
    position: relative;
    margin-left: auto;
    margin-right: auto;
    float: none !important;
  }
}

@media only screen and (min-width: 660px) {
  .large-1 {
    position: relative;
    width: 8.333333%;
  }

  .large-2 {
    position: relative;
    width: 16.666667%;
  }

  .large-3 {
    position: relative;
    width: 25%;
  }

  .large-4 {
    position: relative;
    width: 33.333333%;
  }

  .large-5 {
    position: relative;
    width: 41.666667%;
  }

  .large-6 {
    position: relative;
    width: 50%;
  }

  .large-7 {
    position: relative;
    width: 58.333333%;
  }

  .large-8 {
    position: relative;
    width: 66.666667%;
  }

  .large-9 {
    position: relative;
    width: 75%;
  }

  .large-10 {
    position: relative;
    width: 83.333333%;
  }

  .large-11 {
    position: relative;
    width: 91.666667%;
  }

  .large-12 {
    position: relative;
    width: 100%;
  }

  .row .large-offset-0 {
    position: relative;
    margin-left: 0%;
  }

  .row .large-offset-1 {
    position: relative;
    margin-left: 8.333333%;
  }

  .row .large-offset-2 {
    position: relative;
    margin-left: 16.666667%;
  }

  .row .large-offset-3 {
    position: relative;
    margin-left: 25%;
  }

  .row .large-offset-4 {
    position: relative;
    margin-left: 33.333333%;
  }

  .row .large-offset-5 {
    position: relative;
    margin-left: 41.666667%;
  }

  .row .large-offset-6 {
    position: relative;
    margin-left: 50%;
  }

  .row .large-offset-7 {
    position: relative;
    margin-left: 58.333333%;
  }

  .row .large-offset-8 {
    position: relative;
    margin-left: 66.666667%;
  }

  .row .large-offset-9 {
    position: relative;
    margin-left: 75%;
  }

  .row .large-offset-10 {
    position: relative;
    margin-left: 83.333333%;
  }

  .row .large-offset-11 {
    position: relative;
    margin-left: 91.666667%;
  }

  .push-1 {
    position: relative;
    left: 8.333333%;
    right: auto;
  }

  .pull-1 {
    position: relative;
    right: 8.333333%;
    left: auto;
  }

  .push-2 {
    position: relative;
    left: 16.666667%;
    right: auto;
  }

  .pull-2 {
    position: relative;
    right: 16.666667%;
    left: auto;
  }

  .push-3 {
    position: relative;
    left: 25%;
    right: auto;
  }

  .pull-3 {
    position: relative;
    right: 25%;
    left: auto;
  }

  .push-4 {
    position: relative;
    left: 33.333333%;
    right: auto;
  }

  .pull-4 {
    position: relative;
    right: 33.333333%;
    left: auto;
  }

  .push-5 {
    position: relative;
    left: 41.666667%;
    right: auto;
  }

  .pull-5 {
    position: relative;
    right: 41.666667%;
    left: auto;
  }

  .push-6 {
    position: relative;
    left: 50%;
    right: auto;
  }

  .pull-6 {
    position: relative;
    right: 50%;
    left: auto;
  }

  .push-7 {
    position: relative;
    left: 58.333333%;
    right: auto;
  }

  .pull-7 {
    position: relative;
    right: 58.333333%;
    left: auto;
  }

  .push-8 {
    position: relative;
    left: 66.666667%;
    right: auto;
  }

  .pull-8 {
    position: relative;
    right: 66.666667%;
    left: auto;
  }

  .push-9 {
    position: relative;
    left: 75%;
    right: auto;
  }

  .pull-9 {
    position: relative;
    right: 75%;
    left: auto;
  }

  .push-10 {
    position: relative;
    left: 83.333333%;
    right: auto;
  }

  .pull-10 {
    position: relative;
    right: 83.333333%;
    left: auto;
  }

  .push-11 {
    position: relative;
    left: 91.666667%;
    right: auto;
  }

  .pull-11 {
    position: relative;
    right: 91.666667%;
    left: auto;
  }

  .column.large-centered,.columns.large-centered {
    position: relative;
    margin-left: auto;
    margin-right: auto;
    float: none !important;
  }

  .column.large-uncentered,.columns.large-uncentered {
    margin-left: 0;
    margin-right: 0;
    float: left !important;
  }

  .column.large-uncentered.opposite,.columns.large-uncentered.opposite {
    float: right !important;
  }
}

.show-for-small,.show-for-medium-down,.show-for-large-down {
  display: inherit !important;
}

.show-for-medium,.show-for-medium-up,.show-for-large,.show-for-large-up,.show-for-xlarge {
  display: none !important;
}

.hide-for-medium,.hide-for-medium-up,.hide-for-large,.hide-for-large-up,.hide-for-xlarge {
  display: inherit !important;
}

.hide-for-small,.hide-for-medium-down,.hide-for-large-down {
  display: none !important;
}

table.show-for-small,table.show-for-medium-down,table.show-for-large-down,table.hide-for-medium,table.hide-for-medium-up,table.hide-for-large,table.hide-for-large-up,table.hide-for-xlarge {
  display: table;
}

thead.show-for-small,thead.show-for-medium-down,thead.show-for-large-down,thead.hide-for-medium,thead.hide-for-medium-up,thead.hide-for-large,thead.hide-for-large-up,thead.hide-for-xlarge {
  display: table-header-group !important;
}

tbody.show-for-small,tbody.show-for-medium-down,tbody.show-for-large-down,tbody.hide-for-medium,tbody.hide-for-medium-up,tbody.hide-for-large,tbody.hide-for-large-up,tbody.hide-for-xlarge {
  display: table-row-group !important;
}

tr.show-for-small,tr.show-for-medium-down,tr.show-for-large-down,tr.hide-for-medium,tr.hide-for-medium-up,tr.hide-for-large,tr.hide-for-large-up,tr.hide-for-xlarge {
  display: table-row !important;
}

td.show-for-small,td.show-for-medium-down,td.show-for-large-down,td.hide-for-medium,td.hide-for-medium-up,td.hide-for-large,td.hide-for-large-up,td.hide-for-xlarge,th.show-for-small,th.show-for-medium-down,th.show-for-large-down,th.hide-for-medium,th.hide-for-medium-up,th.hide-for-large,th.hide-for-large-up,th.hide-for-xlarge {
  display: table-cell !important;
}

@media only screen and (min-width: 660px) {
  .show-for-medium,.show-for-medium-up {
    display: inherit !important;
  }

  .show-for-small {
    display: none !important;
  }

  .hide-for-small {
    display: inherit !important;
  }

  .hide-for-medium,.hide-for-medium-up {
    display: none !important;
  }

  table.show-for-medium,table.show-for-medium-up,table.hide-for-small {
    display: table;
  }

  thead.show-for-medium,thead.show-for-medium-up,thead.hide-for-small {
    display: table-header-group !important;
  }

  tbody.show-for-medium,tbody.show-for-medium-up,tbody.hide-for-small {
    display: table-row-group !important;
  }

  tr.show-for-medium,tr.show-for-medium-up,tr.hide-for-small {
    display: table-row !important;
  }

  td.show-for-medium,td.show-for-medium-up,td.hide-for-small,th.show-for-medium,th.show-for-medium-up,th.hide-for-small {
    display: table-cell !important;
  }
}

@media only screen and (min-width: 1280px) {
  .show-for-large,.show-for-large-up {
    display: inherit !important;
  }

  .show-for-medium,.show-for-medium-down {
    display: none !important;
  }

  .hide-for-medium,.hide-for-medium-down {
    display: inherit !important;
  }

  .hide-for-large,.hide-for-large-up {
    display: none !important;
  }

  table.show-for-large,table.show-for-large-up,table.hide-for-medium,table.hide-for-medium-down {
    display: table;
  }

  thead.show-for-large,thead.show-for-large-up,thead.hide-for-medium,thead.hide-for-medium-down {
    display: table-header-group !important;
  }

  tbody.show-for-large,tbody.show-for-large-up,tbody.hide-for-medium,tbody.hide-for-medium-down {
    display: table-row-group !important;
  }

  tr.show-for-large,tr.show-for-large-up,tr.hide-for-medium,tr.hide-for-medium-down {
    display: table-row !important;
  }

  td.show-for-large,td.show-for-large-up,td.hide-for-medium,td.hide-for-medium-down,th.show-for-large,th.show-for-large-up,th.hide-for-medium,th.hide-for-medium-down {
    display: table-cell !important;
  }
}

@media only screen and (min-width: 1440px) {
  .show-for-xlarge {
    display: inherit !important;
  }

  .show-for-large,.show-for-large-down {
    display: none !important;
  }

  .hide-for-large,.hide-for-large-down {
    display: inherit !important;
  }

  .hide-for-xlarge {
    display: none !important;
  }

  table.show-for-xlarge,table.hide-for-large,table.hide-for-large-down {
    display: table;
  }

  thead.show-for-xlarge,thead.hide-for-large,thead.hide-for-large-down {
    display: table-header-group !important;
  }

  tbody.show-for-xlarge,tbody.hide-for-large,tbody.hide-for-large-down {
    display: table-row-group !important;
  }

  tr.show-for-xlarge,tr.hide-for-large,tr.hide-for-large-down {
    display: table-row !important;
  }

  td.show-for-xlarge,td.hide-for-large,td.hide-for-large-down,th.show-for-xlarge,th.hide-for-large,th.hide-for-large-down {
    display: table-cell !important;
  }
}

.show-for-landscape,.hide-for-portrait {
  display: inherit !important;
}

.hide-for-landscape,.show-for-portrait {
  display: none !important;
}

table.hide-for-landscape,table.show-for-portrait {
  display: table;
}

thead.hide-for-landscape,thead.show-for-portrait {
  display: table-header-group !important;
}

tbody.hide-for-landscape,tbody.show-for-portrait {
  display: table-row-group !important;
}

tr.hide-for-landscape,tr.show-for-portrait {
  display: table-row !important;
}

td.hide-for-landscape,td.show-for-portrait,th.hide-for-landscape,th.show-for-portrait {
  display: table-cell !important;
}

@media only screen and (orientation: landscape) {
  .show-for-landscape,.hide-for-portrait {
    display: inherit !important;
  }

  .hide-for-landscape,.show-for-portrait {
    display: none !important;
  }

  table.show-for-landscape,table.hide-for-portrait {
    display: table;
  }

  thead.show-for-landscape,thead.hide-for-portrait {
    display: table-header-group !important;
  }

  tbody.show-for-landscape,tbody.hide-for-portrait {
    display: table-row-group !important;
  }

  tr.show-for-landscape,tr.hide-for-portrait {
    display: table-row !important;
  }

  td.show-for-landscape,td.hide-for-portrait,th.show-for-landscape,th.hide-for-portrait {
    display: table-cell !important;
  }
}

@media only screen and (orientation: portrait) {
  .show-for-portrait,.hide-for-landscape {
    display: inherit !important;
  }

  .hide-for-portrait,.show-for-landscape {
    display: none !important;
  }

  table.show-for-portrait,table.hide-for-landscape {
    display: table;
  }

  thead.show-for-portrait,thead.hide-for-landscape {
    display: table-header-group !important;
  }

  tbody.show-for-portrait,tbody.hide-for-landscape {
    display: table-row-group !important;
  }

  tr.show-for-portrait,tr.hide-for-landscape {
    display: table-row !important;
  }

  td.show-for-portrait,td.hide-for-landscape,th.show-for-portrait,th.hide-for-landscape {
    display: table-cell !important;
  }
}

.show-for-touch {
  display: none !important;
}

.hide-for-touch {
  display: inherit !important;
}

.touch .show-for-touch {
  display: inherit !important;
}

.touch .hide-for-touch {
  display: none !important;
}

table.hide-for-touch {
  display: table;
}

.touch table.show-for-touch {
  display: table;
}

thead.hide-for-touch {
  display: table-header-group !important;
}

.touch thead.show-for-touch {
  display: table-header-group !important;
}

tbody.hide-for-touch {
  display: table-row-group !important;
}

.touch tbody.show-for-touch {
  display: table-row-g
 roup !important;
}

tr.hide-for-touch {
  display: table-row !important;
}

.touch tr.show-for-touch {
  display: table-row !important;
}

td.hide-for-touch {
  display: table-cell !important;
}

.touch td.show-for-touch {
  display: table-cell !important;
}

th.hide-for-touch {
  display: table-cell !important;
}

.touch th.show-for-touch {
  display: table-cell !important;
}

@media only screen {
  [class*="block-grid-"] {
    display: block;
    padding: 0;
    margin: -0.625em;
    *zoom: 1;
  }

  [class*="block-grid-"]:before,[class*="block-grid-"]:after {
    content: " ";
    display: table;
  }

  [class*="block-grid-"]:after {
    clear: both;
  }

  [class*="block-grid-"]>li {
    display: inline;
    height: auto;
    float: left;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-1>li {
    width: 100%;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-1>li:nth-of-type(n) {
    clear: none;
  }

  .small-block-grid-1>li:nth-of-type(1n+1) {
    clear: both;
  }

  .small-block-grid-2>li {
    width: 50%;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-2>li:nth-of-type(n) {
    clear: none;
  }

  .small-block-grid-2>li:nth-of-type(2n+1) {
    clear: both;
  }

  .small-block-grid-3>li {
    width: 33.333333%;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-3>li:nth-of-type(n) {
    clear: none;
  }

  .small-block-grid-3>li:nth-of-type(3n+1) {
    clear: both;
  }

  .small-block-grid-4>li {
    width: 25%;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-4>li:nth-of-type(n) {
    clear: none;
  }

  .small-block-grid-4>li:nth-of-type(4n+1) {
    clear: both;
  }

  .small-block-grid-5>li {
    width: 20%;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-5>li:nth-of-type(n) {
    clear: none;
  }

  .small-block-grid-5>li:nth-of-type(5n+1) {
    clear: both;
  }

  .small-block-grid-6>li {
    width: 16.666667%;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-6>li:nth-of-type(n) {
    clear: none;
  }

  .small-block-grid-6>li:nth-of-type(6n+1) {
    clear: both;
  }

  .small-block-grid-7>li {
    width: 14.285714%;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-7>li:nth-of-type(n) {
    clear: none;
  }

  .small-block-grid-7>li:nth-of-type(7n+1) {
    clear: both;
  }

  .small-block-grid-8>li {
    width: 12.5%;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-8>li:nth-of-type(n) {
    clear: none;
  }

  .small-block-grid-8>li:nth-of-type(8n+1) {
    clear: both;
  }

  .small-block-grid-9>li {
    width: 11.111111%;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-9>li:nth-of-type(n) {
    clear: none;
  }

  .small-block-grid-9>li:nth-of-type(9n+1) {
    clear: both;
  }

  .small-block-grid-10>li {
    width: 10%;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-10>li:nth-of-type(n) {
    clear: none;
  }

  .small-block-grid-10>li:nth-of-type(10n+1) {
    clear: both;
  }

  .small-block-grid-11>li {
    width: 9.090909%;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-11>li:nth-of-type(n) {
    clear: none;
  }

  .small-block-grid-11>li:nth-of-type(11n+1) {
    clear: both;
  }

  .small-block-grid-12>li {
    width: 8.333333%;
    padding: 0 0.625em 1.25em;
  }

  .small-block-grid-12>li:nth-of-type(n) {
    clear: none;
  }

  .small-block-grid-12>li:nth-of-type(12n+1) {
    clear: both;
  }
}

@media only screen and (min-width: 660px) {
  .small-block-grid-1>li:nth-of-type(1n+1) {
    clear: none;
  }

  .small-block-grid-2>li:nth-of-type(2n+1) {
    clear: none;
  }

  .small-block-grid-3>li:nth-of-type(3n+1) {
    clear: none;
  }

  .small-block-grid-4>li:nth-of-type(4n+1) {
    clear: none;
  }

  .small-block-grid-5>li:nth-of-type(5n+1) {
    clear: none;
  }

  .small-block-grid-6>li:nth-of-type(6n+1) {
    clear: none;
  }

  .small-block-grid-7>li:nth-of-type(7n+1) {
    clear: none;
  }

  .small-block-grid-8>li:nth-of-type(8n+1) {
    clear: none;
  }

  .small-block-grid-9>li:nth-of-type(9n+1) {
    clear: none;
  }

  .small-block-grid-10>li:nth-of-type(10n+1) {
    clear: none;
  }

  .small-block-grid-11>li:nth-of-type(11n+1) {
    clear: none;
  }

  .small-block-grid-12>li:nth-of-type(12n+1) {
    clear: none;
  }

  .large-block-grid-1>li {
    width: 100%;
    padding: 0 0.625em 1.25em;
  }

  .large-block-grid-1>li:nth-of-type(n) {
    clear: none;
  }

  .large-block-grid-1>li:nth-of-type(1n+1) {
    clear: both;
  }

  .large-block-grid-2>li {
    width: 50%;
    padding: 0 0.625em 1.25em;
  }

  .large-block-grid-2>li:nth-of-type(n) {
    clear: none;
  }

  .large-block-grid-2>li:nth-of-type(2n+1) {
    clear: both;
  }

  .large-block-grid-3>li {
    width: 33.333333%;
    padding: 0 0.625em 1.25em;
  }

  .large-block-grid-3>li:nth-of-type(n) {
    clear: none;
  }

  .large-block-grid-3>li:nth-of-type(3n+1) {
    clear: both;
  }

  .large-block-grid-4>li {
    width: 25%;
    padding: 0 0.625em 1.25em;
  }

  .large-block-grid-4>li:nth-of-type(n) {
    clear: none;
  }

  .large-block-grid-4>li:nth-of-type(4n+1) {
    clear: both;
  }

  .large-block-grid-5>li {
    width: 20%;
    padding: 0 0.625em 1.25em;
  }

  .large-block-grid-5>li:nth-of-type(n) {
    clear: none;
  }

  .large-block-grid-5>li:nth-of-type(5n+1) {
    clear: both;
  }

  .large-block-grid-6>li {
    width: 16.666667%;
    padding: 0 0.625em 1.25em;
  }

  .large-block-grid-6>li:nth-of-type(n) {
    clear: none;
  }

  .large-block-grid-6>li:nth-of-type(6n+1) {
    clear: both;
  }

  .large-block-grid-7>li {
    width: 14.285714%;
    padding: 0 0.625em 1.25em;
  }

  .large-block-grid-7>li:nth-of-type(n) {
    clear: none;
  }

  .large-block-grid-7>li:nth-of-type(7n+1) {
    clear: both;
  }

  .large-block-grid-8>li {
    width: 12.5%;
    padding: 0 0.625em 1.25em;
  }

  .large-block-grid-8>li:nth-of-type(n) {
    clear: none;
  }

  .large-block-grid-8>li:nth-of-type(8n+1) {
    clear: both;
  }

  .large-block-grid-9>li {
    width: 11.111111%;
    padding: 0 0.625em 1.25em;
  }

  .large-block-grid-9>li:nth-of-type(n) {
    clear: none;
  }

  .large-block-grid-9>li:nth-of-type(9n+1) {
    clear: both;
  }

  .large-block-grid-10>li {
    width: 10%;
    padding: 0 0.625em 1.25em;
  }

  .large-block-grid-10>li:nth-of-type(n) {
    clear: none;
  }

  .large-block-grid-10>li:nth-of-type(10n+1) {
    clear: both;
  }

  .large-block-grid-11>li {
    width: 9.090909%;
    padding: 0 0.625em 1.25em;
  }

  .large-block-grid-11>li:nth-of-type(n) {
    clear: none;
  }

  .large-block-grid-11>li:nth-of-type(11n+1) {
    clear: both;
  }

  .large-block-grid-12>li {
    width: 8.333333%;
    padding: 0 0.625em 1.25em;
  }

  .large-block-grid-12>li:nth-of-type(n) {
    clear: none;
  }

  .large-block-grid-12>li:nth-of-type(12n+1) {
    clear: both;
  }
}

p.lead {
  font-size: 1.21875em;
  line-height: 1.6;
}

.subheader {
  line-height: 1.4;
  color: #6f6f6f;
  font-weight: 300;
  margin-top: 0.2em;
  margin-bottom: 0.5em;
}

div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,p,blockquote,th,td {
  margin: 0;
  padding: 0;
  direction: ltr;
}

a {
  color: #2ba6cb;
  text-decoration: none;
  line-height: inherit;
}

a:hover,a:focus {
  color: #2795b6;
}

a img {
  border: none;
}

p {
  font-family: inherit;
  font-weight: normal;
  font-size: 1em;
  line-height: 1.6;
  margin-bottom: 1.25em;
  text-rendering: optimizeLegibility;
}

p aside {
  font-size: 0.875em;
  line-height: 1.35;
  font-style: italic;
}

h1,h2,h3,h4,h5,h6 {
  font-family: "Helvetica Neue","Helvetica",Helvetica,Arial,sans-serif;
  font-weight: bold;
  font-style: normal;
  color: #222;
  text-rendering: optimizeLegibility;
  margin-top: 0.2em;
  margin-bottom: 0.5em;
  line-height: 1.2125em;
}

h1 small,h2 small,h3 small,h4 small,h5 small,h6 small {
  font-size: 60%;
  color: #6f6f6f;
  line-height: 0;
}

h1 {
  font-size: 2.125em;
}

h2 {
  font-size: 1.6875em;
}

h3 {
  font-size: 1.375em;
}

h4 {
  font-size: 1.125em;
}

h5 {
  font-size: 1.125em;
}

h6 {
  font-size: 1em;
}

hr {
  border: solid #ddd;
  border-width: 1px 0 0;
  clear: both;
  margin: 1.25em 0 1.1875em;
  height: 0;
}

em,i {
  font-style: italic;
  line-height: inherit;
}

strong,b {
  font-weight: bold;
  line-height: inherit;
}

small {
  font-size: 60%;
  line-height: inherit;
}

code {
  font-family: Consolas,"Liberation Mono",Courier,monospace;
  font-weight: bold;
  color: #7f0a0c;
}

ul,ol,dl {
  font-size: 1em;
  line-height: 1.6;
  margin-bottom: 1.25em;
  list-style-position: outside;
  font-family: inherit;
}

ul,ol {
  margin-left: 1.25em;
}

ul li ul,ul li ol {
  margin-left: 1.25em;
  margin-bottom: 0;
  font-size: 1em;
}

ul.square li ul,ul.circle li ul,ul.disc li ul {
  list-style: inherit;
}

ul.square {
  list-style-type: square;
}

ul.circle {
  list-style-type: circle;
}

ul.disc {
  list-style-type: disc;
}

ul.no-bullet {
  list-style: none;
}

ol li ul,ol li ol {
  margin-left: 1.25em;
  margin-bottom: 0;
}

dl dt {
  margin-bottom: 0.3em;
  font-weight: bold;
}

dl dd {
  margin-bottom: 0.75em;
}

abbr,acronym {
  text-transform: uppercase;
  font-size: 90%;
  color: #666;
  border-bottom: 1px dotted #ddd;
  cursor: help;
}

abbr {
  text-transform: none;
}

blockquote {
  margin: 0 0 1.25em;
  padding: 0.5625em 1.25em 0 1.1875em;
  border-left: 1px solid #ddd;
}

blockquote cite {
  display: block;
  font-size: 0.8125em;
  color: #555;
}

blockquote cite:before {
  content: "\2014 \0020";
}

blockquote cite a,blockquote cite a:visited {
  color: #555;
}

blockquote,blockquote p {
  line-height: 1.6;
  color: #6f6f6f;
}

.vcard {
  display: inline-block;
  margin: 0 0 1.25em 0;
  border: 1px solid #ddd;
  padding: 0.625em 0.75em;
}

.vcard li {
  margin: 0;
  display: block;
}

.vcard .fn {
  font-weight: bold;
  font-size: 0.9375em;
}

.vevent .summary {
  font-weight: bold;
}

.vevent abbr {
  cursor: default;
  text-decoration: none;
  font-weight: bold;
  border: none;
  padding: 0 0.0625em;
}

@media only screen and (min-width: 660px) {
  h1,h2,h3,h4,h5,h6 {
    line-height: 1.4;
  }

  h1 {
    font-size: 2.75em;
  }

  h2 {
    font-size: 2.3125em;
  }

  h3 {
    font-size: 1.6875em;
  }

  h4 {
    font-size: 1.4375em;
  }
}

.print-only {
  display: none !important;
}

@media print {
  * {
    background: transparent !important;
    color: #000 !important;
    box-shadow: none !important;
    text-shadow: none !important;
  }

  a,a:visited {
    text-decoration: underline;
  }

  a[href]:after {
    content: " (" attr(href) ")";
  }

  abbr[title]:after {
    content: " (" attr(title) ")";
  }

  .ir a:after,a[href^="javascript:"]:after,a[href^="#"]:after {
    content: "";
  }

  pre,blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }

  thead {
    display: table-header-group;
  }

  tr,img {
    page-break-inside: avoid;
  }

  img {
    max-width: 100% !important;
  }@  page {
    margin: 0.5cm;
  }

  p,h2,h3 {
    orphans: 3;
    widows: 3;
  }

  h2,h3 {
    page-break-after: avoid;
  }

  .hide-on-print {
    display: none !important;
  }

  .print-only {
    display: block !important;
  }

  .hide-for-print {
    display: none !important;
  }

  .show-for-print {
    display: inherit !important;
  }
}

.flex-video {
  position: relative;
  padding-top: 1.5625em;
  padding-bottom: 67.5%;
  height: 0;
  margin-bottom: 1em;
  overflow: hidden;
}

.flex-video.widescreen {
  padding-bottom: 57.25%;
}

.flex-video.vimeo {
  padding-top: 0;
}

.flex-video iframe,.flex-video object,.flex-video embed,.flex-video video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.section-container,.section-container.auto {
  width: 100%;
  display: block;
  margin-bottom: 1.25em;
  border: 1px solid #ccc;
  border-top: none;
}

.section-container>section,.section-container>.section,.section-container.auto>section,.section-container.auto>.section {
  position: relative;
}

.section-container>section>.title,.section-container>.section>.title,.section-container.auto>section>.title,.section-container.auto>.section>.title {
  background-color: #efefef;
  cursor: pointer;
  margin-bottom: 0;
}

.section-container>section>.title a,.section-container>.section>.title a,.section-container.auto>section>.title a,.section-container.auto>.section>.title a {
  padding: 0.9375em;
  display: inline-block;
  color: #333;
  font-size: 0.875em;
  white-space: nowrap;
}

.section-container>section>.title:hover,.section-container>.section>.title:hover,.section-container.auto>section>.title:hover,.section-container.auto>.section>.title:hover {
  background-color: #e2e2e2;
}

.section-container>section .content,.section-container>.section .content,.section-container.auto>section .content,.section-container.auto>.section .content {
  display: none;
  padding: 0.9375em;
  background-color: #fff;
}

.section-container>section .content>*:last-child,.section-container>.section .content>*:last-child,.section-container.auto>section .content>*:last-child,.section-container.auto>.section .content>*:last-child {
  margin-bottom: 0;
}

.section-container>section .content>*:first-child,.section-container>.section .content>*:first-child,.section-container.auto>section .content>*:first-child,.section-container.auto>.section .content>*:first-child {
  padding-top: 0;
}

.section-container>section .content>*:last-child,.section-container>.section .content>*:last-child,.section-container.auto>section .content>*:last-child,.section-container.auto>.section .content>*:last-child {
  padding-bottom: 0;
}

.section-container>section.active>.content,.section-container>.section.active>.content,.section-container.auto>section.active>.content,.section-container.auto>.section.active>.content {
  display: block;
}

.section-container>section.active>.title,.section-container>.section.active>.title,.section-container.auto>section.active>.title,.section-container.auto>.section.active>.title {
  background: #d5d5d5;
}

.section-container>section.active>.title a,.section-container>.section.active>.title a,.section-container.auto>section.active>.title a,.section-container.auto>.section.active>.title a {
  color: #333;
}

.section-container>section>.title,.section-container>.section>.title,.section-container.auto>section>.title,.section-container.auto>.section>.title {
  top: 0;
  width: 100%;
  margin: 0;
  border-top: solid 1px #ccc;
}

.section-container>section>.title a,.section-container>.section>.title a,.section-container.auto>section>.title a,.section-container.auto>.section>.title a {
  width: 100%;
}

.section-container.tabs {
  border: 0;
  position: relative;
}

.section-container.tabs>section,.section-container.tabs>.section {
  border: 0;
  position: static;
}

.section-container.tabs>section>.title,.section-container.tabs>.section>.title {
  background-color: #efefef;
  cursor: pointer;
  margin-bottom: 0;
}

.section-container.tabs>section>.title a,.section-container.tabs>.section>.title a {
  padding: 0.9375em;
  display: inline-block;
  color: #333;
  font-size: 0.875em;
  white-space: nowrap;
}

.section-container.tabs>section>.title:hover,.section-container.tabs>.section>.title:hover {
  background-color: #e2e2e2;
}

.section-container.tabs>section .content,.section-container.tabs>.section .content {
  display: none;
  padding: 0.9375em;
  background-color: #fff;
}

.section-container.tabs>section .content>*:last-child,.section-container.tabs>.section .content>*:last-child {
  margin-bottom: 0;
}

.section-container.tabs>section .content>*:first-child,.section-container.tabs>.section .content>*:first-child {
  padding-top: 0;
}

.section-container.tabs>section .content>*:last-child,.section-container.tabs>.section .content>*:last-child {
  padding-bottom: 0;
}

.section-container.tabs>section.active>.content,.section-container.tabs>.section.active>.content {
  display: block;
}

.section-container.tabs>section.active>.title,.section-container.tabs>.section.active>.title {
  background: #fff;
}

.section-container.tabs>section.active>.title a,.section-container.tabs>.section.active>.title a {
  color: #333;
}

.section-container.tabs>section>.title,.section-container.tabs>.section>.title {
  width: auto;
  border: solid 1px #ccc;
  border-right: 0;
  border-bottom: 0;
  position: absolute;
  top: 0;
  z-index: 1;
}

.section-container.tabs>section>.title a,.section-container.tabs>.section>.title a {
  width: 100%;
}

.section-container.tabs>section:last-child .title,.section-container.tabs>.section:last-child .title {
  border-right: solid 1px #ccc;
}

.section-container.tabs>section .content,.section-container.tabs>.section .content {
  border: solid 1px #ccc;
  position: absolute;
  z-index: 10;
  display: none;
  top: -1px;
}

.section-container.tabs>section.active>.title,.section-container.tabs>.section.active>.title {
  z-index: 11;
  border-bottom: 0;
  background-color: #fff;
}

.section-container.tabs>section.active>.content,.section-container.tabs>.section.active>.content {
  position: relative;
}

@media only screen and (min-width: 660px) {
  .section-container.auto {
    border: 0;
    position: relative;
  }

  .section-container.auto>section,.section-container.auto>.section {
    border: 0;
    position: static;
  }

  .section-container.auto>section>.title,.section-container.auto>.section>.title {
    background-color: #efefef;
    cursor: pointer;
    margin-bottom: 0;
  }

  .section-container.auto>section>.title a,.section-container.auto>.section>.title a {
    padding: 0.9375em;
    display: inline-block;
    color: #333;
    font-size: 0.875em;
    white-space: nowrap;
  }

  .section-container.auto>section>.title:hover,.section-container.auto>.section>.title:hover {
    background-color: #e2e2e2;
  }

  .section-container.auto>section .content,.section-container.auto>.section .content {
    display: none;
    padding: 0.9375em;
    background-color: #fff;
  }

  .section-container.auto>section .content>*:last-child,.section-container.auto>.section .content>*:last-child {
    margin-bottom: 0;
  }

  .section-container.auto>section .content>*:first-child,.section-container.auto>.section .content>*:first-child {
    padding-top: 0;
  }

  .section-container.auto>section .content>*:last-child,.section-container.auto>.section .content>*:last-child {
    padding-bottom: 0;
  }

  .section-container.auto>section.active>.content,.section-container.auto>.section.active>.content {
    display: block;
  }

  .section-container.auto>section.active>.title,.section-container.auto>.section.active>.title {
    background: #fff;
  }

  .section-container.auto>section.active>.title a,.section-container.auto>.section.active>.title a {
    color: #333;
  }

  .section-container.auto>section>.title,.section-container.auto>.section>.title {
    width: auto;
    border: solid 1px #ccc;
    border-right: 0;
    border-bottom: 0;
    position: absolute;
    top: 0;
    z-index: 1;
  }

  .section-container.auto>section>.title a,.section-container.auto>.section>.title a {
    width: 100%;
  }

  .section-container.auto>section:last-child .title,.section-container.auto>.section:last-child .title {
    border-right: solid 1px #ccc;
  }

  .section-container.auto>section .content,.section-container.auto>.section .content {
    border: solid 1px #ccc;
    position: absolute;
    z-index: 10;
    display: none;
    top: -1px;
  }

  .section-container.auto>section.active>.title,.section-container.auto>.section.active>.title {
    z-index: 11;
    border-bottom: 0;
    background-color: #fff;
  }

  .section-container.auto>section.active>.content,.section-container.auto>.section.active>.content {
    position: relative;
  }

  .section-container.accordion .section {
    padding-top: 0 !important;
  }

  .section-container.vertical-tabs {
    border: 1px solid #ccc;
    position: relative;
  }

  .section-container.vertical-tabs section,.section-container.vertical-tabs .section {
    padding-top: 0 !important;
    border: 0;
    position: static;
  }

  .section-container.vertical-tabs section>.title,.section-container.vertical-tabs .section>.title {
    background-color: #efefef;
    cursor: pointer;
    margin-bottom: 0;
  }

  .section-container.vertical-tabs section>.title a,.section-container.vertical-tabs .section>.title a {
    padding: 0.9375em;
    display: inline-block;
    color: #333;
    font-size: 0.875em;
    white-space: nowrap;
  }

  .section-container.vertical-tabs section>.title:hover,.section-container.vertical-tabs .section>.title:hover {
    background-color: #e2e2e2;
  }

  .section-container.vertical-tabs section .content,.section-container.vertical-tabs .section .content {
    display: none;
    padding: 0.9375em;
    background-color: #fff;
  }

  .section-container.vertical-tabs section .content>*:last-child,.section-container.vertical-tabs .section .content>*:last-child {
    margin-bottom: 0;
  }

  .section-container.vertical-tabs section .content>*:first-child,.section-container.vertical-tabs .section .content>*:first-child {
    padding-top: 0;
  }

  .section-container.vertical-tabs section .content>*:last-child,.section-container.vertical-tabs .section .content>*:last-child {
    padding-bottom: 0;
  }

  .section-container.vertical-tabs section.active>.content,.section-container.vertical-tabs .section.active>.content {
    display: block;
  }

  .section-container.vertical-tabs section.active>.title,.section-container.vertical-tabs .section.active>.title {
    background: #d5d5d5;
  }

  .section-container.vertical-tabs section.active>.title a,.section-container.vertical-tabs .section.active>.title a {
    color: #333;
  }

  .section-container.vertical-tabs section>.title,.section-container.vertical-tabs .section>.title {
    position: absolute;
    border-top: solid 1px #ccc;
    width: 12.5em;
  }

  .section-container.vertical-tabs section:first-child .title,.section-container.vertical-tabs .section:first-child .title {
    border-top: 0;
  }

  .section-container.vertical-tabs section .content,.section-container.vertical-tabs .section .content {
    display: block;
    position: relative;
    left: 12.5em;
    border-left: solid 1px #ccc;
    z-index: 10;
  }

  .section-container.vertical-tabs section.active>.title,.section-container.vertical-tabs .section.active>.title {
    background-color: #d5d5d5;
    width: 12.5625em;
    border-right: solid 0 transparent;
    z-index: 11;
  }

  .section-container.vertical-tabs section.active:last-child .title,.section-container.vertical-tabs .section.active:last-child .title {
    border-bottom: 0;
  }

  .section-container.vertical-nav {
    border: 0;
    position: relative;
  }

  .section-container.vertical-nav>section,.section-container.vertical-nav>.section {
    padding-top: 0 !important;
    position: relative;
  }

  .section-container.vertical-nav>section>.title,.section-container.vertical-nav>.section>.title {
    background-color: #efefef;
    cursor: pointer;
    margin-bottom: 0;
  }

  .section-container.vertical-nav>section>.title a,.section-container.vertical-nav>.section>.title a {
    padding: 0.9375em;
    display: inline-block;
    color: #333;
    font-size: 0.875em;
    white-space: nowrap;
  }

  .section-container.vertical-nav>section>.title:hover,.section-container.vertical-nav>.section>.title:hover {
    background-color: #e2e2e2;
  }

  .section-container.vertical-nav>section .content,.section-container.vertical-nav>.section .content {
    display: none;
    padding: 0.9375em;
    background-color: #fff;
  }

  .section-container.vertical-nav>section .content>*:last-child,.section-container.vertical-nav>.section .content>*:last-child {
    margin-bottom: 0;
  }

  .section-container.vertical-nav>section .content>*:first-child,.section-container.vertical-nav>.section .content>*:first-child {
    padding-top: 0;
  }

  .section-container.vertical-nav>section .content>*:last-child,.section-container.vertical-nav>.section .content>*:last-child {
    padding-bottom: 0;
  }

  .section-container.vertical-nav>section.active>.content,.section-container.vertical-nav>.section.active>.content {
    display: block;
  }

  .section-container.vertical-nav>section.active>.title,.section-container.vertical-nav>.section.active>.title {
    background: #d5d5d5;
  }

  .section-container.vertical-nav>section.active>.title a,.section-container.vertical-nav>.section.active>.title a {
    color: #333;
  }

  .section-container.vertical-nav>section>.title,.section-container.vertical-nav>.section>.title {
    border-top: none;
    border: solid 1px #ccc;
  }

  .section-container.vertical-nav>section>.title a,.section-container.vertical-nav>.section>.title a {
    display: block;
    width: 100%;
  }

  .section-container.vertical-nav>section .content,.section-container.vertical-nav>.section .content {
    display: none;
  }

  .section-container.vertical-nav>section:first-child .title,.section-container.vertical-nav>.section:first-child .title {
    border-bottom: none;
  }

  .section-container.vertical-nav>section.active>.content,.section-container.vertical-nav>.section.active>.content {
    display: block;
    position: absolute;
    left: 100%;
    top: 0px;
    z-index: 999;
    min-width: 12.5em;
    border: solid 1px #ccc;
  }

  .section-container.horizontal-nav {
    position: relative;
    background: #efefef;
    border: 1px solid #ccc;
  }

  .section-container.horizontal-nav>section,.section-container.horizontal-nav>.section {
    padding-top: 0;
    border: 0;
    position: static;
  }

  .section-container.horizontal-nav>section>.title,.section-container.horizontal-nav>.section>.title {
    background-color: #efefef;
    cursor: pointer;
    margin-bottom: 0;
  }

  .section-container.horizontal-nav>section>.title a,.section-container.horizontal-nav>.section>.title a {
    padding: 0.9375em;
    display: inline-block;
    color: #333;
    font-size: 0.875em;
    white-space: nowrap;
  }

  .section-container.horizontal-nav>section>.title:hover,.section-container.horizontal-nav>.section>.title:hover {
    background-color: #e2e2e2;
  }

  .section-container.horizontal-nav>section .content,.section-container.horizontal-nav>.section .content {
    display: none;
    padding: 0.9375em;
    background-color: #fff;
  }

  .section-container.horizontal-nav>section .content>*:last-child,.section-container.horizontal-nav>.section .content>*:last-child {
    margin-bottom: 0;
  }

  .section-container.horizontal-nav>section .content>*:first-child,.section-container.horizontal-nav>.section .content>*:first-child {
    padding-top: 0;
  }

  .section-container.horizontal-nav>section .content>*:last-child,.section-container.horizontal-nav>.section .content>*:last-child {
    padding-bottom: 0;
  }

  .section-container.horizontal-nav>section.active>.content,.section-container.horizontal-nav>.section.active>.content {
    display: block;
  }

  .section-container.horizontal-nav>section.active>.title,.section-container.horizontal-nav>.section.active>.title {
    background: #d5d5d5;
  }

  .section-container.horizontal-nav>section.active>.title a,.section-container.horizontal-nav>.section.active>.title a {
    color: #333;
  }

  .section-container.horizontal-nav>section>.title,.section-container.horizontal-nav>.section>.title {
    width: auto;
    border: solid 1px #ccc;
    border-left: 0;
    top: -1px;
    position: absolute;
    z-index: 1;
  }

  .section-container.horizontal-nav>section>.title a,.section-container.horizontal-nav>.section>.title a {
    width: 100%;
  }

  .section-container.horizontal-nav>section .content,.section-container.horizontal-nav>.section .content {
    display: none;
  }

  .section-container.horizontal-nav>section.active>.content,.section-container.horizontal-nav>.section.active>.content {
    display: block;
    position: absolute;
    z-index: 999;
    left: 0;
    top: -2px;
    min-width: 12.5em;
    border: solid 1px #ccc;
  }
}

.no-js .section-container.auto,.no-js .section-container.accordion,.no-js .section-container.tabs,.no-js .section-container.vertical-tabs,.no-js .section-container.vertical-nav,.no-js .section-container.horizontal-nav {
  width: 100%;
  display: block;
  margin-bottom: 1.25em;
  border: 1px solid #ccc;
  border-top: none;
}

.no-js .section-container.auto>section,.no-js .section-container.auto>.section,.no-js .section-container.accordion>section,.no-js .section-container.accordion>.section,.no-js .section-container.tabs>section,.no-js .section-container.tabs>.section,.no-js .section-container.vertical-tabs>section,.no-js .section-container.vertical-tabs>.section,.no-js .section-container.vertical-nav>section,.no-js .section-container.vertical-nav>.section,.no-js .section-container.horizontal-nav>section,.no-js .section-container.horizontal-nav>.section {
  position: relative;
}

.no-js .section-container.auto>section>.title,.no-js .section-container.auto>.section>.title,.no-js .section-container.accordion>section>.title,.no-js .section-container.accordion>.section>.title,.no-js .section-container.tabs>section>.title,.no-js .section-container.tabs>.section>.title,.no-js .section-container.vertical-tabs>section>.title,.no-js .section-container.vertical-tabs>.section>.title,.no-js .section-container.vertical-nav>section>.title,.no-js .section-container.vertical-nav>.section>.title,.no-js .section-container.horizontal-nav>section>.title,.no-js .section-container.horizontal-nav>.section>.title {
  background-color: #efefef;
  cursor: pointer;
  margin-bottom: 0;
}

.no-js .section-container.auto>section>.title a,.no-js .section-container.auto>.section>.title a,.no-js .section-container.accordion>section>.title a,.no-js .section-container.accordion>.section>.title a,.no-js .section-container.tabs>section>.title a,.no-js .section-container.tabs>.section>.title a,.no-js .section-container.vertical-tabs>section>.title a,.no-js .section-container.vertical-tabs>.section>.title a,.no-js .section-container.vertical-nav>section>.title a,.no-js .section-container.vertical-nav>.section>.title a,.no-js .section-container.horizontal-nav>section>.title a,.no-js .section-container.horizontal-nav>.section>.title a {
  padding: 0.9375em;
  display: inline-block;
  color: #333;
  font-size: 0.875em;
  white-space: nowrap;
}

.no-js .section-container.auto>section>.title:hover,.no-js .section-container.auto>.section>.title:hover,.no-js .section-container.accordion>section>.title:hover,.no-js .section-container.accordion>.section>.title:hover,.no-js .section-container.tabs>section>.title:hover,.no-js .section-container.tabs>.section>.title:hover,.no-js .section-container.vertical-tabs>section>.title:hover,.no-js .section-container.vertical-tabs>.section>.title:hover,.no-js .section-container.vertical-nav>section>.title:hover,.no-js .section-container.vertical-nav>.section>.title:hover,.no-js .section-container.horizontal-nav>section>.title:hover,.no-js .section-container.horizontal-nav>.section>.title:hover {
  background-color: #e2e2e2;
}

.no-js .section-container.auto>section .content,.no-js .section-container.auto>.section .content,.no-js .section-container.accordion>section .content,.no-js .section-container.accordion>.section .content,.no-js .section-container.tabs>section .content,.no-js .section-container.tabs>.section .content,.no-js .section-container.vertical-tabs>section .content,.no-js .section-container.vertical-tabs>.section .content,.no-js .section-container.vertical-nav>section .content,.no-js .section-container.vertical-nav>.section .content,.no-js .section-container.horizontal-nav>section .content,.no-js .section-container.horizontal-nav>.section .content {
  display: none;
  padding: 0.9375em;
  background-color: #fff;
}

.no-js .section-container.auto>section .content>*:last-child,.no-js .section-container.auto>.section .content>*:last-child,.no-js .section-container.accordion>section .content>*:last-child,.no-js .section-container.accordion>.section .content>*:last-child,.no-js .section-container.tabs>section .content>*:last-child,.no-js .section-container.tabs>.section .content>*:last-child,.no-js .section-container.vertical-tabs>section .content>*:last-child,.no-js .section-container.vertical-tabs>.section .content>*:last-child,.no-js .section-container.vertical-nav>section .content>*:last-child,.no-js .section-container.vertical-nav>.section .content>*:last-child,.no-js .section-container.horizontal-nav>section .content>*:last-child,.no-js .section-container.horizontal-nav>.section .content>*:last-child {
  margin-bottom: 0;
}

.no-js .section-container.auto>section .content>*:first-child,.no-js .section-container.auto>.section .content>*:first-child,.no-js .section-container.accordion>section .content>*:first-child,.no-js .section-container.accordion>.section .content>*:first-child,.no-js .section-container.tabs>section .content>*:first-child,.no-js .section-container.tabs>.section .content>*:first-child,.no-js .section-container.vertical-tabs>section .content>*:first-child,.no-js .section-container.vertical-tabs>.section .content>*:first-child,.no-js .section-container.vertical-nav>section .content>*:first-child,.no-js .section-container.vertical-nav>.section .content>*:first-child,.no-js .section-container.horizontal-nav>section .content>*:first-child,.no-js .section-container.horizontal-nav>.section .content>*:first-child {
  padding-top: 0;
}

.no-js .section-container.auto>section .content>*:last-child,.no-js .section-container.auto>.section .content>*:last-child,.no-js .section-container.accordion>section .content>*:last-child,.no-js .section-container.accordion>.section .content>*:last-child,.no-js .section-container.tabs>section .content>*:last-child,.no-js .section-container.tabs>.section .content>*:last-child,.no-js .section-container.vertical-tabs>section .content>*:last-child,.no-js .section-container.vertical-tabs>.section .content>*:last-child,.no-js .section-container.vertical-nav>section .content>*:last-child,.no-js .section-container.vertical-nav>.section .content>*:last-child,.no-js .section-container.horizontal-nav>section .content>*:last-child,.no-js .section-container.horizontal-nav>.section .content>*:last-child {
  padding-bottom: 0;
}

.no-js .section-container.auto>section.active>.content,.no-js .section-container.auto>.section.active>.content,.no-js .section-container.accordion>section.active>.content,.no-js .section-container.accordion>.section.active>.content,.no-js .section-container.tabs>section.active>.content,.no-js .section-container.tabs>.section.active>.content,.no-js .section-container.vertical-tabs>section.active>.content,.no-js .section-container.vertical-tabs>.section.active>.content,.no-js .section-container.vertical-nav>section.active>.content,.no-js .section-container.vertical-nav>.section.active>.content,.no-js .section-container.horizontal-nav>section.active>.content,.no-js .section-container.horizontal-nav>.section.active>.content {
  display: block;
}

.no-js .section-container.auto>section.active>.title,.no-js .section-container.auto>.section.active>.title,.no-js .section-container.accordion>section.active>.title,.no-js .section-container.accordion>.section.active>.title,.no-js .section-container.tabs>section.active>.title,.no-js .section-container.tabs>.section.active>.title,.no-js .section-container.vertical-tabs>section.active>.title,.no-js .section-container.vertical-tabs>.section.active>.title,.no-js .section-container.vertical-nav>section.active>.title,.no-js .section-container.vertical-nav>.section.active>.title,.no-js .section-container.horizontal-nav>section.active>.title,.no-js .section-container.horizontal-nav>.section.active>.title {
  background: #d5d5d5;
}

.no-js .section-container.auto>section.active>.title a,.no-js .section-container.auto>.section.active>.title a,.no-js .section-container.accordion>section.active>.title a,.no-js .section-container.accordion>.section.active>.title a,.no-js .section-container.tabs>section.active>.title a,.no-js .section-container.tabs>.section.active>.title a,.no-js .section-container.vertical-tabs>section.active>.title a,.no-js .section-container.vertical-tabs>.section.active>.title a,.no-js .section-container.vertical-nav>section.active>.title a,.no-js .section-container.vertical-nav>.section.active>.title a,.no-js .section-container.horizontal-nav>section.active>.title a,.no-js .section-container.horizontal-nav>.section.active>.title a {
  color: #333;
}

.no-js .section-container.auto>section>.title,.no-js .section-container.auto>.section>.title,.no-js .section-container.accordion>section>.title,.no-js .section-container.accordion>.section>.title,.no-js .section-container.tabs>section>.title,.no-js .section-container.tabs>.section>.title,.no-js .section-container.vertical-tabs>section>.title,.no-js .section-container.vertical-tabs>.section>.title,.no-js .section-container.vertical-nav>section>.title,.no-js .section-container.vertical-nav>.section>.title,.no-js .section-container.horizontal-nav>section>.title,.no-js .section-container.horizontal-nav>.section>.title {
  top: 0;
  width: 100%;
  margin: 0;
  border-top: solid 1px #ccc;
}

.no-js .section-container.auto>section>.title a,.no-js .section-container.auto>.section>.title a,.no-js .section-container.accordion>section>.title a,.no-js .section-container.accordion>.section>.title a,.no-js .section-container.tabs>section>.title a,.no-js .section-container.tabs>.section>.title a,.no-js .section-container.vertical-tabs>section>.title a,.no-js .section-container.vertical-tabs>.section>.title a,.no-js .section-container.vertical-nav>section>.title a,.no-js .section-container.vertical-nav>.section>.title a,.no-js .section-container.horizontal-nav>section>.title a,.no-js .section-container.horizontal-nav>.section>.title a {
  width: 100%;
}

.no-js .section-container.auto>section .title,.no-js .section-container.auto>.section .title,.no-js .section-container.accordion>section .title,.no-js .section-container.accordion>.section .title,.no-js .section-container.tabs>section .title,.no-js .section-container.tabs>.section .title,.no-js .section-container.vertical-tabs>section .title,.no-js .section-container.vertical-tabs>.section .title,.no-js .section-container.vertical-nav>section .title,.no-js .section-container.vertical-nav>.section .title,.no-js .section-container.horizontal-nav>section .title,.no-js .section-container.horizontal-nav>.section .title {
  position: static;
  width: 100%;
  border-left: 0;
  border-right: 0;
}

.no-js .section-container.auto>section .content,.no-js .section-container.auto>.section .content,.no-js .section-container.accordion>section .content,.no-js .section-container.accordion>.section .content,.no-js .section-container.tabs>section .content,.no-js .section-container.tabs>.section .content,.no-js .section-container.vertical-tabs>section .content,.no-js .section-container.vertical-tabs>.section .content,.no-js .section-container.vertical-nav>section .content,.no-js .section-container.vertical-nav>.section .content,.no-js .section-container.horizontal-nav>section .content,.no-js .section-container.horizontal-nav>.section .content {
  position: static;
  display: block;
  width: 100%;
  border-left: 0;
  border-right: 0;
  border-bottom: 0;
}

.contain-to-grid {
  width: 100%;
  background: #111;
}

.contain-to-grid .top-bar {
  margin-bottom: 0;
}

.fixed {
  width: 100%;
  left: 0;
  position: fixed;
  top: 0;
  z-index: 99;
}

.top-bar {
  overflow: hidden;
  height: 45px;
  line-height: 45px;
  position: relative;
  background: #111;
  margin-bottom: 1.875em;
}

.top-bar ul {
  margin-bottom: 0;
  list-style: none;
}

.top-bar .row {
  max-width: none;
}

.top-bar form,.top-bar input {
  margin-bottom: 0;
}

.top-bar input {
  height: 2.45em;
}

.top-bar .button {
  padding-top: .5em;
  padding-bottom: .5em;
  margin-bottom: 0;
}

.top-bar .title-area {
  position: relative;
  margin: 0;
}

.top-bar .name {
  height: 45px;
  margin: 0;
  font-size: 16px;
}

.top-bar .name h1 {
  line-height: 45px;
  font-size: 1.0625em;
  margin: 0;
}

.top-bar .name h1 a {
  font-weight: bold;
  color: #fff;
  width: 50%;
  display: block;
  padding: 0 15px;
}

.top-bar .toggle-topbar {
  position: absolute;
  right: 0;
  top: 0;
}

.top-bar .toggle-topbar a {
  color: #fff;
  text-transform: uppercase;
  font-size: 0.8125em;
  font-weight: bold;
  position: relative;
  display: block;
  padding: 0 15px;
  height: 45px;
  line-height: 45px;
}

.top-bar .toggle-topbar.menu-icon {
  right: 15px;
  top: 50%;
  margin-top: -16px;
  padding-left: 40px;
}

.top-bar .toggle-topbar.menu-icon a {
  text-indent: -48px;
  width: 34px;
  height: 34px;
  line-height: 33px;
  padding: 0;
  color: #fff;
}

.top-bar .toggle-topbar.menu-icon a span {
  position: absolute;
  right: 0;
  display: block;
  width: 16px;
  height: 0;
  -webkit-box-shadow: 0 10px 0 1px #fff,0 16px 0 1px #fff,0 22px 0 1px #fff;
  box-shadow: 0 10px 0 1px #fff,0 16px 0 1px #fff,0 22px 0 1px #fff;
}

.top-bar.expanded {
  height: auto;
  background: transparent;
}

.top-bar.expanded .title-area {
  background: #111;
}

.top-bar.expanded .toggle-topbar a {
  color: #888;
}

.top-bar.expanded .toggle-topbar a span {
  -webkit-box-shadow: 0 10px 0 1px #888,0 16px 0 1px #888,0 22px 0 1px #888;
  box-shadow: 0 10px 0 1px #888,0 16px 0 1px #888,0 22px 0 1px #888;
}

.top-bar-section {
  left: 0;
  position: relative;
  width: auto;
  -webkit-transition: left 300ms ease-out;
  -moz-transition: left 300ms ease-out;
  transition: left 300ms ease-out;
}

.top-bar-section ul {
  width: 100%;
  height: auto;
  display: block;
  background: #111;
  font-size: 16px;
  margin: 0;
}

.top-bar-section .divider,.top-bar-section [role="separator"] {
  border-bottom: solid 1px #2b2b2b;
  border-top: solid 1px #000;
  clear: both;
  height: 1px;
  width: 100%;
}

.top-bar-section ul li>a {
  display: block;
  width: 100%;
  color: #fff;
  padding: 12px 0 12px 0;
  padding-left: 15px;
  font-size: 0.8125em;
  font-weight: bold;
  background: #222;
}

.top-bar-section ul li>a.hover {
  background: #090909;
  color: #fff;
}

.top-bar-section ul li>a.button {
  background: #2ba6cb;
  font-size: 0.8125em;
}

.top-bar-section ul li>a.button.hover {
  background: #2284a1;
}

.top-bar-section ul li>a.button.secondary {
  background: #e9e9e9;
}

.top-bar-section ul li>a.button.secondary.hover {
  background: #d0d0d0;
}

.top-bar-section ul li>a.button.success {
  background: #5da423;
}

.top-bar-section ul li>a.button.success.hover {
  background: #457a1a;
}

.top-bar-section ul li>a.button.alert {
  background: #c60f13;
}

.top-bar-section ul li>a.button.alert.hover {
  background: #970b0e;
}

.top-bar-section ul li.active>a {
  background: #090909;
  color: #fff;
}

.top-bar-section .has-form {
  padding: 15px;
}

.top-bar-section .has-dropdown {
  position: relative;
}

.top-bar-section .has-dropdown>a:after {
  content: "";
  display: block;
  width: 0;
  height: 0;
  border: inset 5px;
  border-color: transparent transparent transparent rgba(255,255,255,0.5);
  border-left-style: solid;
  margin-right: 15px;
  margin-top: -4.5px;
  position: absolute;
  top: 50%;
  right: 0;
}

.top-bar-section .has-dropdown.moved {
  position: static;
}

.top-bar-section .has-dropdown.moved>.dropdown {
  visibility: visible;
}

.top-bar-section .dropdown {
  position: absolute;
  left: 100%;
  top: 0;
  visibility: hidden;
  z-index: 99;
}

.top-bar-section .dropdown li {
  width: 100%;
  height: auto;
}

.top-bar-section .dropdown li a {
  font-weight: normal;
  padding: 8px 15px;
}

.top-bar-section .dropdown li.title h5 {
  margin-bottom: 0;
}

.top-bar-section .dropdown li.title h5 a {
  color: #fff;
  line-height: 22.5px;
  display: block;
}

.top-bar-section .dropdown label {
  padding: 8px 15px 2px;
  margin-bottom: 0;
  text-transform: uppercase;
  color: #555;
  font-weight: bold;
  font-size: 0.625em;
}

.top-bar-js-breakpoint {
  width: 58.75em !important;
  visibility: hidden;
}

.js-generated {
  display: block;
}

@media only screen and (min-width: 58.75em) {
  .top-bar {
    background: #111;
    *zoom: 1;
    overflow: visible;
  }

  .top-bar:before,.top-bar:after {
    content: " ";
    display: table;
  }

  .top-bar:after {
    clear: both;
  }

  .top-bar .toggle-topbar {
    display: none;
  }

  .top-bar .title-area {
    float: left;
  }

  .top-bar .name h1 a {
    width: auto;
  }

  .top-bar input,.top-bar .button {
    line-height: 2em;
    font-size: 0.875em;
    height: 2em;
    padding: 0 10px;
    position: relative;
    top: 8px;
  }

  .top-bar.expanded {
    background: #111;
  }

  .contain-to-grid .top-bar {
    max-width: 63.75em;
    margin: 0 auto;
  }

  .top-bar-section {
    -webkit-transition: none 0 0;
    -moz-transition: none 0 0;
    transition: none 0 0;
    left: 0 !important;
  }

  .top-bar-section ul {
    width: auto;
    height: auto !important;
    display: inline;
  }

  .top-bar-section ul li {
    float: left;
  }

  .top-bar-section ul li .js-generated {
    display: none;
  }

  .top-bar-section li a:not(.button) {
    padding: 0 15px;
    line-height: 45px;
    background: #111;
  }

  .top-bar-section li a:not(.button).hover {
    background: #000;
  }

  .top-bar-section .has-dropdown>a {
    padding-right: 35px !important;
  }

  .top-bar-section .has-dropdown>a:after {
    content: "";
    display: block;
    width: 0;
    height: 0;
    border: inset 5px;
    border-color: rgba(255,255,255,0.5) transparent transparent transparent;
    border-top-style: solid;
    margin-top: -2.5px;
    top: 22.5px;
  }

  .top-bar-section .has-dropdown.moved {
    position: relative;
  }

  .top-bar-section .has-dropdown.moved>.dropdown {
    visibility: hidden;
  }

  .top-bar-section .has-dropdown.hover>.dropdown {
    visibility: visible;
  }

  .top-bar-section .has-dropdown .dropdown li.has-dropdown>a:after {
    border: none;
    content: "\00bb";
    margin-top: -16px;
    right: 5px;
  }

  .top-bar-section .dropdown {
    left: 0;
    top: auto;
    background: transparent;
    min-width: 100%;
  }

  .top-bar-section .dropdown li a {
    color: #fff;
    line-height: 1;
    white-space: nowrap;
    padding: 7px 15px;
    background: #1e1e1e;
  }

  .top-bar-section .dropdown li label {
    white-space: nowrap;
    background: #1e1e1e;
  }

  .top-bar-section .dropdown li .dropdown {
    left: 100%;
    top: 0;
  }

  .top-bar-section>ul>.divider,.top-bar-section>ul>[role="separator"] {
    border-bottom: none;
    border-top: none;
    border-right: solid 1px #2b2b2b;
    border-left: solid 1px #000;
    clear: none;
    height: 45px;
    width: 0px;
  }

  .top-bar-section .has-form {
    background: #111;
    padding: 0 15px;
    height: 45px;
  }

  .top-bar-section ul.right li .dropdown {
    left: auto;
    right: 0;
  }

  .top-bar-section ul.right li .dropdown li .dropdown {
    right: 100%;
  }
}

@-webkit-keyframes rotate {
  from {
    -webkit-transform: rotate(0deg);
  }

  to {
    -webkit-transform: rotate(360deg);
  }
}

@-moz-keyframes rotate {
  from {
    -webkit-transform: rotate(0deg);
  }

  to {
    -webkit-transform: rotate(360deg);
  }
}

@-o-keyframes rotate {
  from {
    -webkit-transform: rotate(0deg);
  }

  to {
    -webkit-transform: rotate(360deg);
  }
}

@keyframes rotate {
  from {
    -webkit-transform: rotate(0deg);
  }

  to {
    -webkit-transform: rotate(360deg);
  }
}

.slideshow-wrapper {
  position: relative;
}

.slideshow-wrapper ul {
  list-style-type: none;
  margin: 0;
}

.slideshow-wrapper ul li,.slideshow-wrapper ul li .orbit-caption {
  display: none;
}

.slideshow-wrapper ul li:first-child {
  display: block;
}

.slideshow-wrapper .orbit-container {
  background-color: transparent;
}

.slideshow-wrapper .orbit-container li {
  display: block;
}

.slideshow-wrapper .orbit-container li .orbit-caption {
  display: block;
}

.preloader {
  display: block;
  width: 40px;
  height: 40px;
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -20px;
  margin-left: -20px;
  border: solid 3px;
  border-color: #555 #fff;
  -webkit-border-radius: 1000px;
  border-radius: 1000px;
  -webkit-animation-name: rotate;
  -webkit-animation-duration: 1.5s;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  -moz-animation-name: rotate;
  -moz-animation-duration: 1.5s;
  -moz-animation-iteration-count: infinite;
  -moz-animation-timing-function: linear;
  -o-animation-name: rotate;
  -o-animation-duration: 1.5s;
  -o-animation-iteration-count: infinite;
  -o-animation-timing-function: linear;
  animation-name: rotate;
  animation-duration: 1.5s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
}

.orbit-container {
  overflow: hidden;
  width: 100%;
  position: relative;
  background: #f5f5f5;
}

.orbit-container .orbit-slides-container {
  list-style: none;
  margin: 0;
  padding: 0;
  position: relative;
}

.orbit-container .orbit-slides-container img {
  display: block;
}

.orbit-container .orbit-slides-container>* {
  position: relative;
  float: left;
  height: auto;
}

.orbit-container .orbit-slides-container>* .orbit-caption {
  position: absolute;
  bottom: 0;
  background-color: #000;
  background-color: rgba(0,0,0,0.6);
  color: #fff;
  width: 100%;
  padding: 10px 14px;
  font-size: 0.875em;
}

.orbit-container .orbit-slide-number {
  position: absolute;
  top: 10px;
  left: 10px;
  font-size: 12px;
  color: #fff;
  background: rgba(0,0,0,0);
}

.orbit-container .orbit-slide-number span {
  font-weight: 700;
  padding: 0.3125em;
}

.orbit-container .orbit-timer {
  position: absolute;
  top: 10px;
  right: 10px;
  height: 6px;
  width: 100px;
}

.orbit-container .orbit-timer .orbit-progress {
  height: 100%;
  background-color: #000;
  background-color: rgba(0,0,0,0.6);
  display: block;
  width: 0%;
}

.orbit-container .orbit-timer>span {
  display: none;
  position: absolute;
  top: 10px;
  right: 0px;
  width: 11px;
  height: 14px;
  border: solid 4px #000;
  border-top: none;
  border-bottom: none;
}

.orbit-container .orbit-timer.paused>span {
  right: -6px;
  top: 9px;
  width: 11px;
  height: 14px;
  border: inset 8px;
  border-right-style: solid;
  border-color: transparent transparent transparent #000;
}

.orbit-container:hover .orbit-timer>span {
  display: block;
}

.orbit-container .orbit-prev,.orbit-container .orbit-next {
  position: absolute;
  top: 50%;
  margin-top: -25px;
  background-color: #000;
  background-color: rgba(0,0,0,0.6);
  width: 50px;
  height: 60px;
  line-height: 50px;
  color: white;
  text-indent: -9999px !important;
}

.orbit-container .orbit-prev>span,.orbit-container .orbit-next>span {
  position: absolute;
  top: 50%;
  margin-top: -16px;
  display: block;
  width: 0;
  height: 0;
  border: inset 16px;
}

.orbit-container .orbit-prev {
  left: 0;
}

.orbit-container .orbit-prev>span {
  border-right-style: solid;
  border-color: transparent;
  border-right-color: #fff;
}

.orbit-container .orbit-prev:hover>span {
  border-right-color: #ccc;
}

.orbit-container .orbit-next {
  right: 0;
}

.orbit-container .orbit-next>span {
  border-color: transparent;
  border-left-style: solid;
  border-left-color: #fff;
  left: 50%;
  margin-left: -8px;
}

.orbit-container .orbit-next:hover>span {
  border-left-color: #ccc;
}

.orbit-bullets {
  margin: 0 auto 30px auto;
  overflow: hidden;
  position: relative;
  top: 10px;
}

.orbit-bullets li {
  display: block;
  width: 18px;
  height: 18px;
  background: #999;
  float: left;
  margin-right: 6px;
  border: solid 2px #222;
  -webkit-border-radius: 1000px;
  border-radius: 1000px;
}

.orbit-bullets li.active {
  background: #222;
}

.orbit-bullets li:last-child {
  margin-right: 0;
}

.touch .orbit-container .orbit-prev,.touch .orbit-container .orbit-next {
  display: none;
}

.touch .orbit-bullets {
  display: none;
}

@media only screen and (min-width: 660px) {
  .touch .orbit-container .orbit-prev,.touch .orbit-container .orbit-next {
    display: inherit;
  }

  .touch .orbit-bullets {
    display: block;
  }
}

.reveal-modal-bg {
  position: fixed;
  height: 100%;
  width: 100%;
  background: #000;
  background: rgba(0,0,0,0.45);
  z-index: 98;
  display: none;
  top: 0;
  left: 0;
}

.reveal-modal {
  visibility: hidden;
  display: none;
  position: absolute;
  left: 50%;
  z-index: 99;
  height: auto;
  margin-left: -40%;
  width: 80%;
  background-color: #fff;
  padding: 1.25em;
  border: solid 1px #666;
  -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.4);
  box-shadow: 0 0 10px rgba(0,0,0,0.4);
  top: 50px;
}

.reveal-modal .column,.reveal-modal .columns {
  min-width: 0;
}

.reveal-modal>:first-child {
  margin-top: 0;
}

.reveal-modal>:last-child {
  margin-bottom: 0;
}

.reveal-modal .close-reveal-modal {
  font-size: 1.375em;
  line-height: 1;
  position: absolute;
  top: 0.5em;
  right: 0.6875em;
  color: #aaa;
  font-weight: bold;
  cursor: pointer;
}

@media only screen and (min-width: 660px) {
  .reveal-modal {
    padding: 1.875em;
    top: 6.25em;
  }

  .reveal-modal.tiny {
    margin-left: -15%;
    width: 30%;
  }

  .reveal-modal.small {
    margin-left: -20%;
    width: 40%;
  }

  .reveal-modal.medium {
    margin-left: -30%;
    width: 60%;
  }

  .reveal-modal.large {
    margin-left: -35%;
    width: 70%;
  }

  .reveal-modal.xlarge {
    margin-left: -47.5%;
    width: 95%;
  }
}

@media print {
  .reveal-modal {
    background: #fff !important;
  }
}

.joyride-list {
  display: none;
}

.joyride-tip-guide {
  display: none;
  position: absolute;
  background: #000;
  color: #fff;
  z-index: 101;
  top: 0;
  left: 2.5%;
  font-family: inherit;
  font-weight: normal;
  width: 95%;
}

.lt-ie9 .joyride-tip-guide {
  max-width: 800px;
  left: 50%;
  margin-left: -400px;
}

.joyride-content-wrapper {
  width: 100%;
  padding: 1.125em 1.25em 1.5em;
}

.joyride-content-wrapper .button {
  margin-bottom: 0 !important;
}

.joyride-tip-guide .joyride-nub {
  display: block;
  position: absolute;
  left: 22px;
  width: 0;
  height: 0;
  border: inset 14px;
}

.joyride-tip-guide .joyride-nub.top {
  border-top-style: solid;
  border-color: #000;
  border-top-color: transparent !important;
  border-left-color: transparent !important;
  border-right-color: transparent !important;
  top: -28px;
}

.joyride-tip-guide .joyride-nub.bottom {
  border-bottom-style: solid;
  border-color: #000 !important;
  border-bottom-color: transparent !important;
  border-left-color: transparent !important;
  border-right-color: transparent !important;
  bottom: -28px;
}

.joyride-tip-guide .joyride-nub.right {
  right: -28px;
}

.joyride-tip-guide .joyride-nub.left {
  left: -28px;
}

.joyride-tip-guide h1,.joyride-tip-guide h2,.joyride-tip-guide h3,.joyride-tip-guide h4,.joyride-tip-guide h5,.joyride-tip-guide h6 {
  line-height: 1.25;
  margin: 0;
  font-weight: bold;
  color: #fff;
}

.joyride-tip-guide p {
  margin: 0 0 1.125em 0;
  font-size: 0.875em;
  line-height: 1.3;
}

.joyride-timer-indicator-wrap {
  width: 50px;
  height: 3px;
  border: solid 1px #555;
  position: absolute;
  right: 1.0625em;
  bottom: 1em;
}

.joyride-timer-indicator {
  display: block;
  width: 0;
  height: inherit;
  background: #666;
}

.joyride-close-tip {
  position: absolute;
  right: 12px;
  top: 10px;
  color: #777 !important;
  text-decoration: none;
  font-size: 30px;
  font-weight: normal;
  line-height: .5 !important;
}

.joyride-close-tip:hover,.joyride-close-tip:focus {
  color: #eee !important;
}

.joyride-modal-bg {
  position: fixed;
  height: 100%;
  width: 100%;
  background: transparent;
  background: rgba(0,0,0,0.5);
  z-index: 100;
  display: none;
  top: 0;
  left: 0;
  cursor: pointer;
}

.joyride-expose-wrapper {
  background-color: #ffffff;
  position: absolute;
  border-radius: 3px;
  z-index: 102;
  -moz-box-shadow: 0px 0px 30px #ffffff;
  -webkit-box-shadow: 0px 0px 15px #ffffff;
  box-shadow: 0px 0px 15px #ffffff;
}

.joyride-expose-cover {
  background: transparent;
  border-radius: 3px;
  position: absolute;
  z-index: 9999;
  top: 0px;
  left: 0px;
}

@media only screen and (min-width: 660px) {
  .joyride-tip-guide {
    width: 300px;
    left: inherit;
  }

  .joyride-tip-guide .joyride-nub.bottom {
    border-color: #000 !important;
    border-bottom-color: transparent !important;
    border-left-color: transparent !important;
    border-right-color: transparent !important;
    bottom: -28px;
  }

  .joyride-tip-guide .joyride-nub.right {
    border-color: #000 !important;
    border-top-color: transparent !important;
    border-right-color: transparent !important;
    border-bottom-color: transparent !important;
    top: 22px;
    left: auto;
    right: -28px;
  }

  .joyride-tip-guide .joyride-nub.left {
    border-color: #000 !important;
    border-top-color: transparent !important;
    border-left-color: transparent !important;
    border-bottom-color: transparent !important;
    top: 22px;
    left: -28px;
    right: auto;
  }
}

[data-clearing] {
  *zoom: 1;
  margin-bottom: 0;
  list-style: none;
}

[data-clearing]:before,[data-clearing]:after {
  content: " ";
  display: table;
}

[data-clearing]:after {
  clear: both;
}

[data-clearing] li {
  float: left;
  margin-right: 10px;
}

.clearing-blackout {
  background: #111;
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 998;
}

.clearing-blackout .clearing-close {
  display: block;
}

.clearing-container {
  position: relative;
  z-index: 998;
  height: 100%;
  overflow: hidden;
  margin: 0;
}

.visible-img {
  height: 95%;
  position: relative;
}

.visible-img img {
  position: absolute;
  left: 50%;
  top: 50%;
  margin-left: -50%;
  max-height: 100%;
  max-width: 100%;
}

.clearing-caption {
  color: #fff;
  line-height: 1.3;
  margin-bottom: 0;
  text-align: center;
  bottom: 0;
  background: #111;
  width: 100%;
  padding: 10px 30px;
  position: absolute;
  left: 0;
}

.clearing-close {
  z-index: 999;
  padding-left: 20px;
  padding-top: 10px;
  font-size: 40px;
  line-height: 1;
  color: #fff;
  display: none;
}

.clearing-close:hover,.clearing-close:focus {
  color: #ccc;
}

.clearing-assembled .clearing-container {
  height: 100%;
}

.clearing-assembled .clearing-container .carousel>ul {
  display: none;
}

.clearing-feature li {
  display: none;
}

.clearing-feature li.clearing-featured-img {
  display: block;
}

@media only screen and (min-width: 660px) {
  .clearing-main-prev,.clearing-main-next {
    position: absolute;
    height: 100%;
    width: 40px;
    top: 0;
  }

  .clearing-main-prev>span,.clearing-main-next>span {
    position: absolute;
    top: 50%;
    display: block;
    width: 0;
    height: 0;
    border: solid 16px;
  }

  .clearing-main-prev {
    left: 0;
  }

  .clearing-main-prev>span {
    left: 5px;
    border-color: transparent;
    border-right-color: #fff;
  }

  .clearing-main-next {
    right: 0;
  }

  .clearing-main-next>span {
    border-color: transparent;
    border-left-color: #fff;
  }

  .clearing-main-prev.disabled,.clearing-main-next.disabled {
    opacity: 0.5;
  }

  .clearing-assembled .clearing-container .carousel {
    background: #111;
    height: 150px;
    margin-top: 5px;
  }

  .clearing-assembled .clearing-container .carousel>ul {
    display: block;
    z-index: 999;
    width: 200%;
    height: 100%;
    margin-left: 0;
    position: relative;
    left: 0;
  }

  .clearing-assembled .clearing-container .carousel>ul li {
    display: block;
    width: 175px;
    height: inherit;
    padding: 0;
    float: left;
    overflow: hidden;
    margin-right: 1px;
    position: relative;
    cursor: pointer;
    opacity: 0.4;
  }

  .clearing-assembled .clearing-container .carousel>ul li.fix-height img {
    min-height: 100%;
    height: 100%;
    max-width: none;
  }

  .clearing-assembled .clearing-container .carousel>ul li a.th {
    border: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    display: block;
  }

  .clearing-assembled .clearing-container .carousel>ul li img {
    cursor: pointer !important;
    min-width: 100% !important;
  }

  .clearing-assembled .clearing-container .carousel>ul li.visible {
    opacity: 1;
  }

  .clearing-assembled .clearing-container .visible-img {
    background: #111;
    overflow: hidden;
    height: 75%;
  }

  .clearing-close {
    position: absolute;
    top: 10px;
    right: 20px;
    padding-left: 0;
    padding-top: 0;
  }
}

.alert-box {
  border-style: solid;
  border-width: 1px;
  display: block;
  font-weight: bold;
  margin-bottom: 1.25em;
  position: relative;
  padding: 0.6875em 1.3125em 0.75em 0.6875em;
  font-size: 0.875em;
  background-color: #2ba6cb;
  border-color: #2284a1;
  color: #fff;
}

.alert-box .close {
  font-size: 1.375em;
  padding: 5px 4px 4px;
  line-height: 0;
  position: absolute;
  top: 0.4375em;
  right: 0.3125em;
  color: #333;
  opacity: 0.3;
}

.alert-box .close:hover,.alert-box .close:focus {
  opacity: 0.5;
}

.alert-box.radius {
  -webkit-border-radius: 3px;
  border-radius: 3px;
}

.alert-box.round {
  -webkit-border-radius: 1000px;
  border-radius: 1000px;
}

.alert-box.success {
  background-color: #5da423;
  border-color: #457a1a;
  color: #fff;
}

.alert-box.alert {
  background-color: #c60f13;
  border-color: #970b0e;
  color: #fff;
}

.alert-box.secondary {
  background-color: #e9e9e9;
  border-color: #d0d0d0;
  color: #505050;
}

.breadcrumbs {
  display: block;
  padding: 0.5625em 0.875em 0.5625em;
  overflow: hidden;
  margin-left: 0;
  list-style: none;
  border-style: solid;
  border-width: 1px;
  background-color: #f6f6f6;
  border-color: #dcdcdc;
  -webkit-border-radius: 3px;
  border-radius: 3px;
}

.breadcrumbs>* {
  margin: 0;
  float: left;
  font-size: 0.6875em;
  text-transform: uppercase;
  color: #2ba6cb;
}

.breadcrumbs>*:hover a,.breadcrumbs>*:focus a {
  text-decoration: underline;
}

.breadcrumbs>* a,.breadcrumbs>* span {
  text-transform: uppercase;
  color: #2ba6cb;
}

.breadcrumbs>*.current {
  cursor: default;
  color: #333;
}

.breadcrumbs>*.current a {
  cursor: default;
  color: #333;
}

.breadcrumbs>*.current:hover,.breadcrumbs>*.current:hover a,.breadcrumbs>*.current:focus,.breadcrumbs>*.current:focus a {
  text-decoration: none;
}

.breadcrumbs>*.unavailable {
  color: #999;
}

.breadcrumbs>*.unavailable a {
  color: #999;
}

.breadcrumbs>*.unavailable:hover,.breadcrumbs>*.unavailable:hover a,.breadcrumbs>*.unavailable:focus,.breadcrumbs>*.unavailable a:focus {
  text-decoration: none;
  color: #999;
  cursor: default;
}

.breadcrumbs>*:before {
  content: "/";
  color: #aaa;
  margin: 0 0.75em;
  position: relative;
  top: 1px;
}

.breadcrumbs>*:first-child:before {
  content: " ";
  margin: 0;
}

.keystroke,kbd {
  background-color: #ededed;
  border-color: #dbdbdb;
  color: #222;
  border-style: solid;
  border-width: 1px;
  margin: 0;
  font-family: "Consolas","Menlo","Courier",monospace;
  font-size: 0.875em;
  padding: 0.125em 0.25em 0em;
  -webkit-border-radius: 3px;
  border-radius: 3px;
}

.label {
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  line-height: 1;
  white-space: nowrap;
  display: inline-block;
  position: relative;
  padding: 0.1875em 0.625em 0.25em;
  font-size: 0.875em;
  background-color: #2ba6cb;
  color: #fff;
}

.label.radius {
  -webkit-border-radius: 3px;
  border-radius: 3px;
}

.label.round {
  -webkit-border-radius: 1000px;
  border-radius: 1000px;
}

.label.alert {
  background-color: #c60f13;
  color: #fff;
}

.label.success {
  background-color: #5da423;
  color: #fff;
}

.label.secondary {
  background-color: #e9e9e9;
  color: #333;
}

.inline-list {
  margin: 0 auto 1.0625em auto;
  margin-left: -1.375em;
  margin-right: 0;
  padding: 0;
  list-style: none;
  overflow: hidden;
}

.inline-list>li {
  list-style: none;
  float: left;
  margin-left: 1.375em;
  display: block;
}

.inline-list>li>* {
  display: block;
}

.pagination {
  display: block;
  height: 1.5em;
  margin-left: -0.3125em;
}

.pagination li {
  display: block;
  float: left;
  height: 1.5em;
  color: #222;
  font-size: 0.875em;
  margin-left: 0.3125em;
}

.pagination li a {
  display: block;
  padding: 0.0625em 0.4375em 0.0625em;
  color: #999;
}

.pagination li:hover a,.pagination li a:focus {
  background: #e6e6e6;
}

.pagination li.unavailable a {
  cursor: default;
  color: #999;
}

.pagination li.unavailable:hover a,.pagination li.unavailable a:focus {
  background: transparent;
}

.pagination li.current a {
  background: #2ba6cb;
  color: #fff;
  font-weight: bold;
  cursor: default;
}

.pagination li.current a:hover,.pagination li.current a:focus {
  background: #2ba6cb;
}

.pagination-centered {
  text-align: center;
}

.pagination-centered ul>li {
  float: none;
  display: inline-block;
}

.panel {
  border-style: solid;
  border-width: 1px;
  border-color: #d9d9d9;
  margin-bottom: 1.25em;
  padding: 1.25em;
  background: #f2f2f2;
}

.panel h1,.panel h2,.panel h3,.panel h4,.panel h5,.panel h6,.panel p {
  color: #333;
}

.panel>:first-child {
  margin-top: 0;
}

.panel>:last-child {
  margin-bottom: 0;
}

.panel h1,.panel h2,.panel h3,.panel h4,.panel h5,.panel h6 {
  line-height: 1;
  margin-bottom: 0.625em;
}

.panel h1.subheader,.panel h2.subheader,.panel h3.subheader,.panel h4.subheader,.panel h5.subheader,.panel h6.subheader {
  line-height: 1.4;
}

.panel.callout {
  border-style: solid;
  border-width: 1px;
  border-color: #2284a1;
  margin-bottom: 1.25em;
  padding: 1.25em;
  background: #2ba6cb;
  -webkit-box-shadow: 0 1px 0 rgba(255,255,255,0.5) inset;
  box-shadow: 0 1px 0 rgba(255,255,255,0.5) inset;
}

.panel.callout h1,.panel.callout h2,.panel.callout h3,.panel.callout h4,.panel.callout h5,.panel.callout h6,.panel.callout p {
  color: #fff;
}

.panel.callout>:first-child {
  margin-top: 0;
}

.panel.callout>:last-child {
  margin-bottom: 0;
}

.panel.callout h1,.panel.callout h2,.panel.callout h3,.panel.callout h4,.panel.callout h5,.panel.callout h6 {
  line-height: 1;
  margin-bottom: 0.625em;
}

.panel.callout h1.subheader,.panel.callout h2.subheader,.panel.callout h3.subheader,.panel.callout h4.subheader,.panel.callout h5.subheader,.panel.callout h6.subheader {
  line-height: 1.4;
}

.panel.radius {
  -webkit-border-radius: 3px;
  border-radius: 3px;
}

.pricing-table {
  border: solid 1px #ddd;
  margin-left: 0;
  margin-bottom: 1.25em;
}

.pricing-table * {
  list-style: none;
  line-height: 1;
}

.pricing-table .title {
  background-color: #ddd;
  padding: 0.9375em 1.25em;
  text-align: center;
  color: #333;
  font-weight: bold;
  font-size: 1em;
}

.pricing-table .price {
  background-color: #eee;
  padding: 0.9375em 1.25em;
  text-align: center;
  color: #333;
  font-weight: normal;
  font-size: 1.25em;
}

.pricing-table .description {
  background-color: #fff;
  padding: 0.9375em;
  text-align: center;
  color: #777;
  font-size: 0.75em;
  font-weight: normal;
  line-height: 1.4;
  border-bottom: dotted 1px #ddd;
}

.pricing-table .bullet-item {
  background-color: #fff;
  padding: 0.9375em;
  text-align: center;
  color: #333;
  font-size: 0.875em;
  font-weight: normal;
  border-bottom: dotted 1px #ddd;
}

.pricing-table .cta-button {
  background-color: #f5f5f5;
  text-align: center;
  padding: 1.25em 1.25em 0;
}

.progress {
  background-color: transparent;
  height: 1.5625em;
  border: 1px solid #ccc;
  padding: 0.125em;
  margin-bottom: 0.625em;
}

.progress .meter {
  background: #2ba6cb;
  height: 100%;
  display: block;
}

.progress.secondary .meter {
  background: #e9e9e9;
  height: 100%;
  display: block;
}

.progress.success .meter {
  background: #5da423;
  height: 100%;
  display: block;
}

.progress.alert .meter {
  background: #c60f13;
  height: 100%;
  display: block;
}

.progress.radius {
  -webkit-border-radius: 3px;
  border-radius: 3px;
}

.progress.radius .meter {
  -webkit-border-radius: 2px;
  border-radius: 2px;
}

.progress.round {
  -webkit-border-radius: 1000px;
  border-radius: 1000px;
}

.progress.round .meter {
  -webkit-border-radius: 999px;
  border-radius: 999px;
}

@media only screen {
  div.switch {
    position: relative;
    width: 100%;
    padding: 0;
    display: block;
    overflow: hidden;
    border-style: solid;
    border-width: 1px;
    margin-bottom: 1.25em;
    -webkit-animation: webkitSiblingBugfix infinite 1s;
    height: 36px;
    background: #fff;
    border-color: #ccc;
  }

  div.switch label {
    position: relative;
    left: 0;
    z-index: 2;
    float: left;
    width: 50%;
    height: 100%;
    margin: 0;
    font-weight: bold;
    text-align: left;
    -webkit-transition: all 0.1s ease-out;
    -moz-transition: all 0.1s ease-out;
    transition: all 0.1s ease-out;
  }

  div.switch input {
    position: absolute;
    z-index: 3;
    opacity: 0;
    width: 100%;
    height: 100%;
    -moz-appearance: none;
  }

  div.switch input:hover,div.switch input:focus {
    cursor: pointer;
  }

  div.switch>span {
    position: absolute;
    top: -1px;
    left: -1px;
    z-index: 1;
    display: block;
    padding: 0;
    border-width: 1px;
    border-style: solid;
    -webkit-transition: all 0.1s ease-out;
    -moz-transition: all 0.1s ease-out;
    transition: all 0.1s ease-out;
  }

  div.switch input:not(:checked)+label {
    opacity: 0;
  }

  div.switch input:checked {
    display: none !important;
  }

  div.switch input {
    left: 0;
    display: block !important;
  }

  div.switch input:first-of-type+label,div.switch input:first-of-type+span+label {
    left: -50%;
  }

  div.switch input:first-of-type:checked+label,div.switch input:first-of-type:checked+span+label {
    left: 0%;
  }

  div.switch input:last-of-type+label,div.switch input:last-of-type+span+label {
    right: -50%;
    left: auto;
    text-align: right;
  }

  div.switch input:last-of-type:checked+label,div.switch input:last-of-type:checked+span+label {
    right: 0%;
    left: auto;
  }

  div.switch span.custom {
    display: none !important;
  }

  div.switch label {
    padding: 0 0.375em;
    line-height: 2.3em;
    font-size: 0.875em;
  }

  div.switch input:first-of-type:checked ~ span {
    left: 100%;
    margin-left: -2.1875em;
  }

  div.switch>span {
    width: 2.25em;
    height: 2.25em;
  }

  div.switch>span {
    border-color: #b3b3b3;
    background: #fff;
    background: -moz-linear-gradient(top, #fff 0%, #f2f2f2 100%);
    background: -webkit-linear-gradient(top, #fff 0%, #f2f2f2 100%);
    background: linear-gradient(to bottom, #fff 0%, #f2f2f2 100%);
    -webkit-box-shadow: 2px 0 10px 0 rgba(0,0,0,0.07),1000px 0 0 1000px #e1f5d1,-2px 0 10px 0 rgba(0,0,0,0.07),-1000px 0 0 1000px #f5f5f5;
    box-shadow: 2px 0 10px 0 rgba(0,0,0,0.07),1000px 0 0 980px #e1f5d1,-2px 0 10px 0 rgba(0,0,0,0.07),-1000px 0 0 1000px #f5f5f5;
  }

  div.switch:hover>span,div.switch:focus>span {
    background: #fff;
    background: -moz-linear-gradient(top, #fff 0%, #e6e6e6 100%);
    background: -webkit-linear-gradient(top, #fff 0%, #e6e6e6 100%);
    background: linear-gradient(to bottom, #fff 0%, #e6e6e6 100%);
  }

  div.switch:active {
    background: transparent;
  }

  div.switch.large {
    height: 44px;
  }

  div.switch.large label {
    padding: 0 0.375em;
    line-height: 2.3em;
    font-size: 1.0625em;
  }

  div.switch.large input:first-of-type:checked ~ span {
    left: 100%;
    margin-left: -2.6875em;
  }

  div.switch.large>span {
    width: 2.75em;
    height: 2.75em;
  }

  div.switch.small {
    height: 28px;
  }

  div.switch.small label {
    padding: 0 0.375em;
    line-height: 2.1em;
    font-size: 0.75em;
  }

  div.switch.small input:first-of-type:checked ~ span {
    left: 100%;
    margin-left: -1.6875em;
  }

  div.switch.small>span {
    width: 1.75em;
    height: 1.75em;
  }

  div.switch.tiny {
    height: 22px;
  }

  div.switch.tiny label {
    padding: 0 0.375em;
    line-height: 1.9em;
    font-size: 0.6875em;
  }

  div.switch.tiny input:first-of-type:checked ~ span {
    left: 100%;
    margin-left: -1.3125em;
  }

  div.switch.tiny>span {
    width: 1.375em;
    height: 1.375em;
  }

  div.switch.radius {
    -webkit-border-radius: 4px;
    border-radius: 4px;
  }

  div.switch.radius>span {
    -webkit-border-radius: 3px;
    border-radius: 3px;
  }

  div.switch.round {
    -webkit-border-radius: 1000px;
    border-radius: 1000px;
  }

  div.switch.round>span {
    -webkit-border-radius: 999px;
    border-radius: 999px;
  }

  div.switch.round label {
    padding: 0 0.5625em;
  }@  -webkit-keyframes webkitSiblingBugfix {
    from{position: relative;
  }

  to {
    position: relative;
  }
}}

[data-magellan-expedition] {
  background: #fff;
  z-index: 50;
  min-width: 100%;
  padding: 10px;
}

[data-magellan-expedition] .sub-nav {
  margin-bottom: 0;
}

[data-magellan-expedition] .sub-nav dd {
  margin-bottom: 0;
}

table {
  background: #fff;
  margin-bottom: 1.25em;
  border: solid 1px #ddd;
}

table thead,table tfoot {
  background: #f5f5f5;
  font-weight: bold;
}

table thead tr th,table thead tr td,table tfoot tr th,table tfoot tr td {
  padding: 0.5em 0.625em 0.625em;
  font-size: 0.875em;
  color: #222;
  text-align: left;
}

table tr th,table tr td {
  padding: 0.5625em 0.625em;
  font-size: 0.875em;
  color: #222;
}

table tr.even,table tr.alt,table tr:nth-of-type(even) {
  background: #f9f9f9;
}

table thead tr th,table tfoot tr th,table tbody tr td,table tr td,table tfoot tr td {
  display: table-cell;
  line-height: 1.125em;
}

.th {
  line-height: 0;
  display: inline-block;
  border: solid 4px #fff;
  -webkit-box-shadow: 0 0 0 1px rgba(0,0,0,0.2);
  box-shadow: 0 0 0 1px rgba(0,0,0,0.2);
  -webkit-transition: all 200ms ease-out;
  -moz-transition: all 200ms ease-out;
  transition: all 200ms ease-out;
}

.th:hover,.th:focus {
  -webkit-box-shadow: 0 0 6px 1px rgba(43,166,203,0.5);
  box-shadow: 0 0 6px 1px rgba(43,166,203,0.5);
}

.th.radius {
  -webkit-border-radius: 3px;
  border-radius: 3px;
}

a.th {
  display: inline-block;
}

.has-tip {
  border-bottom: dotted 1px #ccc;
  cursor: help;
  font-weight: bold;
  color: #333;
}

.has-tip:hover,.has-tip:focus {
  border-bottom: dotted 1px #196177;
  color: #2ba6cb;
}

.has-tip.tip-left,.has-tip.tip-right {
  float: none !important;
}


.tap-to-close {
  display: block;
  font-size: 0.625em;
  color: #888;
  font-weight: normal;
}

@media only screen and (min-width: 660px) {
  .tooltip>.nub {
    border-color: transparent transparent #000 transparent;
    top: -10px;
  }

  .tooltip.tip-top>.nub {
    border-color: #000 transparent transparent transparent;
    top: auto;
    bottom: -10px;
  }

  .tooltip.tip-left,.tooltip.tip-right {
    float: none !important;
  }

  .tooltip.tip-left>.nub {
    border-color: transparent transparent transparent #000;
    right: -10px;
    left: auto;
    top: 50%;
    margin-top: -5px;
  }

  .tooltip.tip-right>.nub {
    border-color: transparent #000 transparent transparent;
    right: auto;
    left: -10px;
    top: 50%;
    margin-top: -5px;
  }
}

@media only screen and (max-width: 767px) {
  .f-dropdown {
    max-width: 100%;
    left: 0;
  }
}

.f-dropdown {
  position: absolute;
  top: -9999px;
  list-style: none;
  width: 100%;
  max-height: none;
  height: auto;
  background: #fff;
  border: solid 1px #ccc;
  font-size: 16px;
  z-index: 99;
  margin-top: 2px;
  max-width: 200px;
}

.f-dropdown>*:first-child {
  margin-top: 0;
}

.f-dropdown>*:last-child {
  margin-bottom: 0;
}

.f-dropdown:before {
  content: "";
  display: block;
  width: 0;
  height: 0;
  border: inset 6px;
  border-color: transparent transparent #fff transparent;
  border-bottom-style: solid;
  position: absolute;
  top: -12px;
  left: 10px;
  z-index: 99;
}

.f-dropdown:after {
  content: "";
  display: block;
  width: 0;
  height: 0;
  border: inset 7px;
  border-color: transparent transparent #ccc transparent;
  border-bottom-style: solid;
  position: absolute;
  top: -14px;
  left: 9px;
  z-index: 98;
}

.f-dropdown.right:before {
  left: auto;
  right: 10px;
}

.f-dropdown.right:after {
  left: auto;
  right: 9px;
}

.f-dropdown li {
  font-size: 0.875em;
  cursor: pointer;
  line-height: 1.125em;
  margin: 0;
}

.f-dropdown li:hover,.f-dropdown li:focus {
  background: #eee;
}

.f-dropdown li a {
  display: block;
  padding: 0.3125em 0.625em;
  color: #555;
}

.f-dropdown.content {
  position: absolute;
  top: -9999px;
  list-style: none;
  padding: 1.25em;
  width: 100%;
  height: auto;
  max-height: none;
  background: #fff;
  border: solid 1px #ccc;
  font-size: 16px;
  z-index: 99;
  max-width: 200px;
}

.f-dropdown.content>*:first-child {
  margin-top: 0;
}

.f-dropdown.content>*:last-child {
  margin-bottom: 0;
}

.f-dropdown.tiny {
  max-width: 200px;
}

.f-dropdown.small {
  max-width: 300px;
}

.f-dropdown.medium {
  max-width: 500px;
}

.f-dropdown.large {
  max-width: 800px;
}











</style>
<style> #start_page #start_kurse .list_item .info { position: absolute; display: inline-block; left: 14px; bottom: 10px; color: #5ea2bb; background-clip: padding-box; background-image: none; padding: 6px 22px 10px 35px; } #start_page #start_kurse .list_item .infobild { width: 30px; height: 30px; float: left; margin: 24px 0px 10px 9px; } /* Tooltip text */ .info .tooltiptext { visibility: hidden; width: 220px; background-color: black; color: #fff; text-align: center; padding: 5px 0; border-radius: 6px; /* Position the tooltip text - see examples below! */ position: absolute; z-index: 1; } /* Show the tooltip text when you mouse over the tooltip container */ .info:hover .tooltiptext { visibility: visible; } </style> 
<div id="start_page">  <div class="banner_inner"> 
<div style="text-align: left"> </div>

</div>

<section class="portal-boxen js-portalboxen">
	<h2 class="kursportal-h2 align-center"></h2>
	<div class="row">


		

<div class="columns small-12 medium-6 large-4 portal-boxenouter">
			<div class="portal-boxeninner" style="background-image: url(<?=$plugin->getPluginURL().'/assets/images/business.jpg' ?>)" onclick="changeclass(this);">
			
				<div class="portal-boxenintro">
					<h3 class="portal-boxenheadline">Meine Kurse und Projekte</h3>
					<p class="portal-boxendate"></p>
				</div>
				<div class="portal-boxenoverlay">
					<h3 class="portal-boxenheadline">English For Your Studies B1</h3>
					<p class="portal-boxendate">09.04.2018-11.06.2018</p>
					<div class="portal-boxentext"><p>Unterstützt Sie bei der gezielten Auffrischung und Erweiterung von Lese- und Schreibfähigkeit in der englischen Sprache.<br>Dieser Kurs wird angeboten von der VHS Region Lüneburg.</p></div>
					<a href="https://vhs.lueneburg.de/kurse/kurssuche/kurs/Englisch-Online+English+For+Your+Studies+B1/nr/181-42000/bereich/details/#inhalt" type="submit" target='_blank' class="btn btn-primary portal-boxenbutton">weiter <img src="/assets/images/icons/white/arr_1right.svg"></a>
					<button class="portal-boxenclose" onclick="changeBack(this);"><img src="<?=$plugin->getPluginURL()?>/assets/images/close.png" alt="[X]"></button>
				</div>
			
			</div>
		</div>


		<div class="columns small-12 medium-6 large-4 portal-boxenouter">
			<div class="portal-boxeninner" style="background-image: url(<?=$plugin->getPluginURL().'/assets/images/coffee.png' ?>)" onclick="changeclass(this);">
			
				<div class="portal-boxenintro">
					<h3 class="portal-boxenheadline">Stud.IP Nachrichten</h3>
					<p class="portal-boxendate"></p>
				</div>
				<div class="portal-boxenoverlay">
					<h3 class="portal-boxenheadline">Tipp: Stud.IP Nachrichten</h3>
					<p class="portal-boxendate"></p>
					<div class="portal-boxentext"><p>Stud.IP bietet ein eigenes internes Nachrichtensystem. Interne Nachrichten werden Ihnen zusätzlich per Mail weitergeleitet. Dies können Sie optional im Bereich Profil/Einstellungen anpassen. </p></div>
					<a href="<?=$GLOBALS['ABSOLUTE_URI_STUDIP']?>dispatch.php/messages/overview" type="submit" class="btn btn-primary portal-boxenbutton">weiter zu meinen Nachrichten <img src="http://localhost/studip3.4/public/assets/images/icons/lightblue/mail.svg"></a>
					<button class="portal-boxenclose" onclick="changeBack(this);"><img src="<?=$plugin->getPluginURL()?>/assets/images/close.png" alt="[X]"></button>
				</div>
			
			</div>
		</div>


				<div class="columns small-12 medium-6 large-4 portal-boxenouter">
			<div class="portal-boxeninner" style="background-image: url(<?=$plugin->getPluginURL().'/assets/images/people.jpg' ?>)" onclick="changeclass(this);">
			
				<div class="portal-boxenintro">
					<h3 class="portal-boxenheadline">Stud.IP für DozentInnen</h3>
					<p class="portal-boxendate"></p>
				</div>
				<div class="portal-boxenoverlay">
					<h3 class="portal-boxenheadline">Mathematik für Wirtschaftswissenschaften</h3>
					<p class="portal-boxendate">28.05.2018-22.06.2018</p>
					<div class="portal-boxentext"><p>Jetzt wirds speziell! In diesem Kurs erwerben Sie gezielt mathematische Grundlagenkenntnisse für ein wirtschaftswissenschaftliches Studium.</p></div>
					<a href="<?=$GLOBALS['ABSOLUTE_URI_STUDIP']?>dispatch.php/messages/overview" type="submit" class="btn btn-primary portal-boxenbutton">weiter <img src="<?=$plugin->getPluginURL().'/assets/images/icons/white/arr_1right.svg'?>"></a>
					<button class="portal-boxenclose" onclick="changeBack(this);"><img src="<?=$plugin->getPluginURL()?>/assets/images/close.png" alt="[X]"></button>
				</div>
			
			</div>
		</div>
		
    <div class="columns small-12 medium-6 large-4 portal-boxenouter">
        <div class="portal-boxeninner" style="background-image: url(http://localhost/studip3.4/public/plugins_packages/asudau@elan-ev.de/VHSViewPlugin/images/banner.jpg)" onclick="changeclass(this);">

            <div class="portal-boxenintro">
                <h3 class="portal-boxenheadline">Die VHS Osnabrück bietet ihren Dozentinnen und Dozenten regelmäßig die Gelegenheit die Funktionen und Einsatzmöglichkeiten von Stud.IP in einer Schulung vor Ort kennenzulernen. Die nächste Schulung findet am 13.02.2019 statt. Zusätzlich stellen wir Ihnen verschiedene Vidoes und Anleitungen bereit um Stud.IP selbst zu erkunden. Viel Spaß!</h3>
                <p class="portal-boxendate"></p>
            </div>
            <div class="portal-boxenoverlay">
                <h3 class="portal-boxenheadline">Vom Beruf ins Studium</h3>
                <p class="portal-boxendate">20.08.2018-24.09.2018</p>
                <div class="portal-boxentext"><p>Sie spielen mit dem Gedanken, zu studieren? In diesem Orientierungskurs finden Sie Wege an die Hochschule und Unterstützung bei der Entscheidung für oder gegen ein Studium.</p></div>
                <a href="<?=$GLOBALS['ABSOLUTE_URI_STUDIP']?>dispatch.php/messages/overview" type="submit" class="btn btn-primary portal-boxenbutton">weiter <img src="/assets/images/icons/white/arr_1right.svg"></a>
                <button class="portal-boxenclose" onclick="changeBack(this);"><img src="<?=$plugin->getPluginURL()?>/assets/images/close.png" alt="[X]"></button>
            </div>

        </div>
    </div>        


        
<iframe src='https://www.youtube.com/embed/VAibAJquJSo'></iframe>


    <div class="columns small-12 medium-6 large-4 portal-boxenouter">
			<div class="portal-boxeninner" style="background-image: url(<?=$plugin->getPluginURL().'/assets/images/question-mark-small.jpg' ?>)" onclick="changeclass(this);">
			
				<div class="portal-boxenintro">
					<h3 class="portal-boxenheadline">Die wichtigsten Fragen und Antworten</h3>
					<p class="portal-boxendate"></p>
				</div>
				<div class="portal-boxenoverlay">
					<h3 class="portal-boxenheadline">Zeit- und Selbstmanagement</h3>
					<p class="portal-boxendate">13.08.2018-14.09.2018</p>
					<div class="portal-boxentext"><p>Auch Erholung muss sein! Ein Studium und parallele Verpflichtungen erfordern eine gute Organisation. Lernen Sie die passenden Techniken kennen.</p></div>
					<a href="" type="submit" class="btn btn-primary portal-boxenbutton">weiter <img src="/assets/images/icons/white/arr_1right.svg"></a>
					<button class="portal-boxenclose" onclick="changeBack(this);"><img src="<?=$plugin->getPluginURL()?>/assets/images/close.png" alt="[X]"></button>
				</div>
			
			</div>
		</div>


        <div class="columns small-12 medium-6 large-4 portal-boxenouter">
			<div class="portal-boxeninner" style="background-image: url(<?=$plugin->getPluginURL().'/assets/images/orientierung.jpg' ?>)" onclick="changeclass(this);">
			
				<div class="portal-boxenintro">
					<h3 class="portal-boxenheadline">Stud.IP erkunden</h3>
					<p class="portal-boxendate"></p>
				</div>
				<div class="portal-boxenoverlay">
					<h3 class="portal-boxenheadline">HANDWERKSZEUG studieren</h3>
					<p class="portal-boxendate">10.09.2018-14.10.2018</p>
					<div class="portal-boxentext"><p>Keine Angst vor Hausarbeiten und Referaten! In dem Kurs "HANDWERKSZEUG studieren" machen Sie sich mit den wichtigsten Spielregeln vertraut.</p></div>
					<a href="" type="submit" class="btn btn-primary portal-boxenbutton">weiter <img src="/assets/images/icons/white/arr_1right.svg"></a>
					<button class="portal-boxenclose" onclick="changeBack(this);"><img src="<?=$plugin->getPluginURL()?>/assets/images/close.png" alt="[X]"></button>
				</div>
			
			</div>
        </div>

    <div class="columns small-12 medium-6 large-4 portal-boxenouter">
        <div class="portal-boxeninner" style="background-image: url(http://localhost/studip3.4/public/plugins_packages/asudau@elan-ev.de/VHSViewPlugin/images/banner.jpg)" onclick="changeclass(this);">

            <div class="portal-boxenintro">
                <h3 class="portal-boxenheadline">Bei Fragen und Wünschen rund um Stud.IP helfen wir Ihnen gerne weiter:</h3>
                <p class="portal-boxendate">Albrechtk@osnabrueck.de</p>
            </div>
            <div class="portal-boxenoverlay">
                <h3 class="portal-boxenheadline">Vom Beruf ins Studium</h3>
                <p class="portal-boxendate">20.08.2018-24.09.2018</p>
                <div class="portal-boxentext"><p>Sie spielen mit dem Gedanken, zu studieren? In diesem Orientierungskurs finden Sie Wege an die Hochschule und Unterstützung bei der Entscheidung für oder gegen ein Studium.</p></div>
                <a href="" type="submit" class="btn btn-primary portal-boxenbutton">weiter <img src="/assets/images/icons/white/arr_1right.svg"></a>
                <button class="portal-boxenclose" onclick="changeBack(this);"><img src="<?=$plugin->getPluginURL()?>/assets/images/close.png" alt="[X]"></button>
            </div>

        </div>
    </div>    


</div>
</section>

<script>
function changeclass(element) {
overlay = element.getElementsByClassName("portal-boxenoverlay")[0];
element.classList.add("deactivated");
element.getElementsByClassName("portal-boxenintro")[0].classList.add("away");
overlay.style.display = "block";
overlay.classList.add("active");
} 

function changeBack(button) {
setTimeout(function(){element = button.closest(".portal-boxeninner");
element.classList.remove("deactivated");
element.getElementsByClassName("portal-boxenintro")[0].classList.remove("away");
overlay = element.getElementsByClassName("portal-boxenoverlay")[0];
overlay.style.display = "none";
overlay.classList.remove("active");}, 400 );
} 

</script>