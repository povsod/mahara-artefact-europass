{if !$embed}
<!DOCTYPE html>
<html lang="{$europasslang}">
<head>
  <title>Europass portfolio</title>
  <link rel="shortcut icon" href="https://europass.cedefop.europa.eu/editors/static/ewa/images/favicon.ico" />
  <meta name="author" content="{$profilefields.firstname} {$profilefields.lastname}">
  <meta name="description" content="Europass portfolio dinamically created from Mahara e-portfolio service.">
  <meta name="generator" content="Mahara">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
{/if}

<style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans');
{if !$embed}body { margin: 0; padding: 0; order: 0; outline: 0; color: #333; background: white url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQ4AAAABCAYAAAAvkEDEAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB+EBFhANK1zqZwkAAAAdaVRYdENvbW1lbnQAAAAAAENyZWF0ZWQgd2l0aCBHSU1QZC5lBwAAABZJREFUOMtj1PHM/M8wCkbBKBgFJAAA4RsB3/79GAAAAAAASUVORK5CYII=') repeat-y left top fixed; }{/if}
a { color: #333; text-decoration: none; }
a:active, a:hover { color: #333; text-decoration: underline; }
{if !$embed}#europass table { border-collapse: collapse; border-spacing: 0;  font-family: 'Open Sans', sans-serif; font-size: 0.95em; width: 90%; min-width: 800px }
{else}#europass table { border-collapse: collapse; border-spacing: 0;  font-family: 'Open Sans', sans-serif; font-size: 1.1em; width: 100%; min-width: 800px }
{/if}
#europass table td { color: #333; border: 1px solid transparent; vertical-align: top; padding: 10px; }
#europass td.stripe { background-color: #2C4969; color: #FFFFFF; width: 250px; text-align: right; }
#europass td.middle { width: 150px; text-align: right; }
#europass div.middle { width: 150px; text-align: right; padding-right: 20px; }
#europass td.name { font-size: 1.7em; }
#europass td.logo { padding-top: 20px; padding-bottom: 50px; }
#europass div.marker, span.marker { color: #1093CB; }
#europass svg path.icon { fill: #1093CB; }
#europass span.small { font-size: .7em; display: inline-block; }
#europass div.line { border-bottom: 2px solid #1093CB; color: #1093CB; width: 100%; text-align: right; line-height: 0.6em; }
#europass .photo { width: 128px; height: 128px; border-radius: 64px; -webkit-border-radius: 64px; -moz-border-radius: 64px; border: 2px solid white; }
#europass .skilltable-header { display: table; width: 90%; border-collapse: collapse; }
#europass .skilltable-row { display: table; width: 90%; border-collapse: collapse; }
#europass .skilltable-hcell { display: table-cell; text-align: center; width: 20%; border-bottom: 2px solid #ccc; border-top: 2px solid #ccc; padding-bottom: 10px; padding-top: 10px; }
#europass .skilltable-cell { display: table-cell; text-align: center; width: 20%; padding-bottom: 10px; padding-top: 10px; border-bottom: 1px solid #ccc; }
{*-- ELP --*}
#europass td.content { padding-left: 50px; padding-right: 50px; }
#europass .langintro { display: table; width: 100%; padding-top: 5px; padding-bottom: 5px; border-top: 1px solid #1093CB; border-bottom: 1px solid #1093CB; margin-bottom: 30px; }
#europass .mothertongue { float: left; width: 49%; text-align: center; display: table-cell; border-right: 1px solid #1093CB; }
#europass .foreignlanguage { float: right; width: 50%; text-align: center; display: table-cell; }
#europass .langtable-name { padding: 10px; text-align: center; font-size: 1.2em; }
#europass .langtable-name-header { padding: 10px; text-align: center; font-size: 1.2em; background-color: #eee; border-bottom: 2px solid #ccc; }
#europass .langtable-header { display: table; width: 100%; border-collapse: collapse; border-bottom: 2px solid #ccc; }
#europass .langtable-row { display: table; width: 100%; border-collapse: collapse; border-bottom: 1px solid #ccc; }
#europass .langtable-hcell { display: table-cell; text-align: center; width: 20%; padding-bottom: 10px; padding-top: 10px; }
#europass .langtable-cell { display: table-cell; text-align: center; width: 20%; padding-top: 10px; padding-bottom: 10px; }
#europass .langtable-c10 { display: table-cell; padding-top: 10px; padding-bottom: 10px; width: 10%; text-align: center; }
#europass .langtable-c20 { display: table-cell; padding-top: 10px; padding-bottom: 10px; width: 20%; text-align: center; }
#europass .langtable-c30 { display: table-cell; padding-top: 10px; padding-bottom: 10px; width: 30%; }
#europass .langtable-c40 { display: table-cell; padding-top: 10px; padding-bottom: 10px; width: 40%; }
#europass .langtable-c70 { display: table-cell; padding-top: 10px; padding-bottom: 10px; width: 70%; }
#europass .langtable-c100 { display: table-cell; padding-top: 10px; padding-bottom: 10px; width: 100%; text-align: center; }
</style>

<div id="europass">
<table class="europass" border="0" cellpadding="10">
<tr>
  <td class="stripe logo" style="text-align:center"><img src="data:image/png;base64,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"></td>
  <td class="middle"></td>
  <td></td>
</tr>
{if $ECV}
{*--------- ECV ----------*}
<tr>
  <td class="stripe">{$text.personalinfo}</td>
  <td class="middle"></td>
  <td class="name">{if $prefs.personname == 12}{$profilefields.firstname} {$profilefields.lastname}{else}{$profilefields.lastname} {$profilefields.firstname}{/if}</td>
</tr>
<tr>
  <td class="stripe">{if $photo}<img src="data:image/jpeg;base64,{$photo}" width="128" height="128" class="photo">{/if}</td>
  <td class="middle"></td>
  <td style="line-height:1.8em">
    <!-- Marker -->
    <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="18" height="18" viewBox="0 -256 42.666998 64.000496" id="marker">
      <g transform="matrix(0.04166699,0,0,-0.04166699,-5.3429665e-7,-197.33288)" id="g4">
        <path d="m 768,896 c 0,141 -115,256 -256,256 -141,0 -256,-115 -256,-256 0,-141 115,-256 256,-256 141,0 256,115 256,256 z m 256,0 c 0,-61 -7,-124 -33,-179 L 627,-57 c -21,-44 -67,-71 -115,-71 -48,0 -94,27 -114,71 L 33,717 C 7,772 0,835 0,896 c 0,283 229,512 512,512 283,0 512,-229 512,-512 z" class="icon" />
      </g>
    </svg>
    {if $profilefields.address}{$profilefields.address}{/if}{if $profilefields.town}, {$profilefields.town}{/if}{if $profilefields.city}, {$profilefields.city}{/if}{if $profilefields.country}, {str tag='country.$profilefields.country' section='artefact.europass'}{/if}<br />
    <div style="display:table;">
      <div style="display:table-cell;width:11em;">
        <!-- Phone -->
        <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="18" height="18" viewBox="0 -256 64.000006 64.000006" id="phone">
          <g transform="matrix(0.04545455,0,0,-0.04545455,0,-191.99999)" id="g4">
            <path d="m 1408,296 c 0,-36 -16,-106 -31,-139 C 1356,108 1300,76 1255,51 1196,19 1136,0 1069,0 976,0 892,38 807,69 746,91 687,118 632,152 462,257 257,462 152,632 118,687 91,746 69,807 38,892 0,976 0,1069 c 0,67 19,127 51,186 25,45 57,101 106,122 33,15 103,31 139,31 7,0 14,0 21,-3 21,-7 43,-56 53,-76 32,-57 63,-115 96,-171 16,-26 46,-58 46,-89 0,-61 -181,-150 -181,-204 0,-27 25,-62 39,-86 101,-182 227,-308 409,-409 24,-14 59,-39 86,-39 54,0 143,181 204,181 31,0 63,-30 89,-46 56,-33 114,-64 171,-96 20,-10 69,-32 76,-53 3,-7 3,-14 3,-21 z" class="icon" inkscape:connector-curvature="0" />
          </g>
        </svg>
        {$profilefields.homenumber}
      </div>
      <div style="display:table-cell;width:11em;">
        <!-- Mobile phone -->
        <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="18" height="18" viewBox="0 -256 38.4 64" id="mobile">
          <g transform="matrix(0.05,0,0,-0.05,0,-192)" id="g4">
            <path d="m 464,128 c 0,44 -36,80 -80,80 -44,0 -80,-36 -80,-80 0,-44 36,-80 80,-80 44,0 80,36 80,80 z m 208,160 v 704 c 0,17 -15,32 -32,32 H 128 c -17,0 -32,-15 -32,-32 V 288 c 0,-17 15,-32 32,-32 h 512 c 17,0 32,15 32,32 z m -192,848 c 0,9 -7,16 -16,16 H 304 c -9,0 -16,-7 -16,-16 0,-9 7,-16 16,-16 h 160 c 9,0 16,7 16,16 z m 288,16 V 128 C 768,58 710,0 640,0 H 128 C 58,0 0,58 0,128 v 1024 c 0,70 58,128 128,128 h 512 c 70,0 128,-58 128,-128 z" class="icon" inkscape:connector-curvature="0" />
          </g>
        </svg>
        {$profilefields.mobilenumber}
      </div>
      <div style="display:table-cell;width:11em;">
        <!-- Work phone -->
        <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" Width="18" height="18" viewBox="0 -256 64.000007 64.000007" id="workphone">
          <g transform="matrix(0.03571429,0,0,-0.03571429,0,-201.14285)" id="g4">
            <path d="m 288,1152 c 88,0 160,-72 160,-160 V -96 c 0,-88 -72,-160 -160,-160 H 160 C 72,-256 0,-184 0,-96 V 992 c 0,88 72,160 160,160 H 288 z M 1664,989 c 76,-44 128,-127 128,-221 V 0 c 0,-141 -115,-256 -256,-256 H 672 c -88,0 -160,72 -160,160 v 1536 c 0,53 43,96 96,96 h 672 c 53,0 127,-31 164,-68 l 152,-152 c 37,-37 68,-111 68,-164 V 989 z M 928,0 v 128 c 0,18 -14,32 -32,32 H 768 c -18,0 -32,-14 -32,-32 V 0 c 0,-18 14,-32 32,-32 h 128 c 18,0 32,14 32,32 z m 0,256 v 128 c 0,18 -14,32 -32,32 H 768 c -18,0 -32,-14 -32,-32 V 256 c 0,-18 14,-32 32,-32 h 128 c 18,0 32,14 32,32 z m 0,256 v 128 c 0,18 -14,32 -32,32 H 768 c -18,0 -32,-14 -32,-32 V 512 c 0,-18 14,-32 32,-32 h 128 c 18,0 32,14 32,32 z M 1184,0 v 128 c 0,18 -14,32 -32,32 h -128 c -18,0 -32,-14 -32,-32 V 0 c 0,-18 14,-32 32,-32 h 128 c 18,0 32,14 32,32 z m 0,256 v 128 c 0,18 -14,32 -32,32 h -128 c -18,0 -32,-14 -32,-32 V 256 c 0,-18 14,-32 32,-32 h 128 c 18,0 32,14 32,32 z m 0,256 v 128 c 0,18 -14,32 -32,32 h -128 c -18,0 -32,-14 -32,-32 V 512 c 0,-18 14,-32 32,-32 h 128 c 18,0 32,14 32,32 z M 1440,0 v 128 c 0,18 -14,32 -32,32 h -128 c -18,0 -32,-14 -32,-32 V 0 c 0,-18 14,-32 32,-32 h 128 c 18,0 32,14 32,32 z m 0,256 v 128 c 0,18 -14,32 -32,32 h -128 c -18,0 -32,-14 -32,-32 V 256 c 0,-18 14,-32 32,-32 h 128 c 18,0 32,14 32,32 z m 0,256 v 128 c 0,18 -14,32 -32,32 h -128 c -18,0 -32,-14 -32,-32 V 512 c 0,-18 14,-32 32,-32 h 128 c 18,0 32,14 32,32 z m 96,384 v 256 h -160 c -53,0 -96,43 -96,96 v 160 H 640 V 896 h 896 z" class="icon" inkscape:connector-curvature="0" />
          </g>
        </svg>
        {$profilefields.businessnumber}
      </div>
    </div>
    <!-- Envelope -->
    <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="18" height="18" viewBox="0 -256 64.000008 50.28572" id="envelope">
      <g transform="matrix(0.03571429,0,0,-0.03571429,0,-210.28571)" id="g4">
        <path d="M 1792,826 V 32 c 0,-88 -72,-160 -160,-160 H 160 C 72,-128 0,-56 0,32 V 826 C 30,793 64,764 101,739 267,626 435,513 598,394 682,332 786,256 895,256 h 1 1 c 109,0 213,76 297,138 163,118 331,232 498,345 36,25 70,54 100,87 z m 0,294 C 1792,1008 1709,907 1621,846 1465,738 1308,630 1153,521 1088,476 978,384 897,384 h -1 -1 C 814,384 704,476 639,521 484,630 327,738 172,846 101,894 0,1007 0,1098 c 0,98 53,182 160,182 h 1472 c 87,0 160,-72 160,-160 z" class="icon" />
      </g>
    </svg>
    <a href="mailto:{$profilefields.email}">{$profilefields.email}</a><br />
    <!-- Globe -->
    <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="18" height="18" viewBox="0 -256 64.000005 64.000005" id="globe">
      <g transform="matrix(0.04166667,0,0,-0.04166667,0,-197.33333)" id="g4">
        <path d="m 768,1408 c 424,0 768,-344 768,-768 0,-424 -344,-768 -768,-768 -424,0 -768,344 -768,768 0,424 344,768 768,768 z m 274,-521 c -8,-6 -13,-17 -23,-19 5,1 10,19 13,23 6,7 14,11 22,15 17,7 34,9 52,12 17,4 38,4 51,-11 -3,3 21,24 24,25 9,5 24,3 30,12 2,3 2,22 2,22 -17,-2 -23,14 -24,28 0,-1 -2,-4 -6,-8 1,15 -18,4 -25,6 -23,6 -20,22 -27,39 -4,9 -15,12 -19,21 -4,6 -6,19 -15,20 -6,1 -17,-21 -19,-20 -9,5 -13,-2 -20,-6 -6,-4 -11,-2 -17,-5 18,6 -8,16 -17,14 14,4 7,19 -1,26 h 5 c -2,9 -30,17 -39,23 -9,6 -57,16 -67,10 -12,-7 3,-27 3,-37 1,-12 -12,-15 -12,-25 0,-17 32,-14 24,-37 -5,-14 -24,-17 -32,-28 -8,-10 1,-28 9,-35 8,-6 -14,-16 -17,-18 -17,-8 -30,17 -34,32 -3,11 -4,24 -16,30 -6,2 -25,5 -29,-1 -6,15 -27,21 -41,26 -20,7 -37,7 -58,4 7,1 -2,32 -19,27 5,10 3,21 5,31 2,8 6,16 12,23 2,4 24,27 17,28 17,-2 36,-3 50,11 9,9 13,24 22,34 13,15 29,-4 43,-5 20,-1 19,21 8,31 13,-1 2,23 -5,26 -9,3 -43,-6 -25,-13 -4,2 -28,-48 -42,-23 -4,5 -6,26 -15,27 -8,0 -13,-9 -16,-15 5,13 -28,22 -35,23 15,10 3,21 -8,27 -8,5 -33,9 -40,1 -19,-23 20,-26 30,-32 3,-2 15,-9 8,-14 -6,-3 -24,-8 -26,-12 -6,-9 7,-19 -2,-28 -9,9 -9,24 -16,34 9,-11 -36,-5 -35,-5 -15,0 -39,-10 -50,5 -2,4 -2,27 4,22 -9,7 -15,14 -21,18 -33,-11 -64,-25 -94,-41 4,-1 7,-1 12,1 8,3 15,8 23,12 10,4 31,16 42,7 1,2 4,4 5,5 7,-8 14,-16 20,-25 -8,4 -21,2 -30,1 -7,-2 -19,-4 -22,-12 3,-5 7,-13 5,-18 -13,9 -23,24 -41,26 -8,0 -16,0 -22,-1 -96,-53 -177,-130 -235,-222 4,-4 8,-7 12,-8 10,-3 0,-32 19,-17 6,-5 7,-12 3,-19 1,1 41,-25 44,-27 7,-6 18,-13 21,-21 2,-7 -4,-15 -10,-18 -1,2 -16,17 -18,13 -3,-5 0,-32 11,-31 -16,-1 -9,-63 -13,-75 0,-1 2,-1 2,-1 -3,-12 7,-59 27,-54 -13,-3 23,-49 28,-52 13,-9 28,-15 37,-28 10,-14 10,-35 24,-46 -4,-12 21,-26 20,-43 -2,-1 -3,-1 -5,-2 5,-14 24,-14 31,-27 4,-8 0,-27 13,-23 2,22 -13,44 -24,62 -6,10 -12,19 -17,29 -5,9 -6,20 -10,30 4,-1 26,-9 24,-12 -8,-20 32,-55 43,-68 3,-3 26,-33 14,-33 13,0 31,-20 37,-30 9,-15 7,-34 13,-50 6,-20 34,-29 50,-38 14,-7 26,-17 40,-22 21,-8 26,-1 44,2 26,4 29,-25 50,-36 13,-7 41,-17 55,-11 -6,-2 21,-43 23,-46 9,-12 26,-18 36,-30 3,2 6,5 7,9 -4,-11 15,-32 25,-30 11,2 14,24 14,32 -20,-10 -38,-2 -49,18 -2,5 -18,33 -4,33 19,0 6,15 4,29 -2,14 -16,23 -23,35 -6,-12 -26,-9 -32,1 0,-3 -3,-8 -3,-12 -5,0 -10,-1 -15,1 2,12 3,27 6,40 5,18 38,53 -5,51 -15,-1 -21,-7 -26,-20 -5,-12 -3,-23 -17,-29 -9,-4 -39,-2 -48,3 -19,11 -32,46 -32,66 -1,27 13,51 0,76 6,5 12,15 19,20 6,4 13,-3 16,9 -3,2 -7,6 -8,6 15,-7 43,10 56,0 8,-6 17,-8 22,2 1,3 -7,15 -3,23 3,-17 14,-20 29,-9 6,-6 22,-4 33,-10 11,-7 13,-18 26,-3 8,-12 9,-12 12,-24 3,-11 9,-39 19,-44 21,-13 16,22 14,34 -1,1 -1,34 -2,34 -32,7 -20,32 -2,49 3,2 26,10 36,18 9,8 20,22 15,35 5,0 9,4 11,9 -3,1 -15,11 -17,10 7,4 6,10 2,16 10,6 5,17 15,21 11,-15 33,2 22,14 10,14 33,7 39,20 15,-4 4,15 12,26 7,9 19,9 28,14 0,-1 25,14 17,15 17,-2 51,16 25,31 4,9 -9,13 -18,15 7,2 16,-2 22,2 13,9 4,13 -7,16 -14,4 -32,-5 -43,-12 z M 879,10 c 137,24 259,92 351,189 -6,6 -17,4 -25,8 -8,3 -14,6 -24,8 2,20 -20,27 -34,37 -13,10 -21,21 -40,17 -2,-1 -22,-8 -18,-12 -13,11 -19,17 -36,22 -16,5 -27,25 -43,7 -8,-8 -4,-20 -8,-28 -13,11 12,24 2,36 -12,14 -33,-9 -43,-15 -6,-5 -13,-7 -17,-13 -5,-7 -7,-16 -11,-23 -3,8 -20,6 -21,12 4,-24 4,-49 9,-73 3,-14 0,-37 -12,-48 -12,-11 -27,-23 -29,-40 -2,-12 1,-23 12,-26 1,-15 -16,-26 -15,-42 0,-1 1,-11 2,-16 z" class="icon" />
      </g>
    </svg>
    {if $profilefields.officialwebsite}<a href="{$profilefields.officialwebsite}">{$profilefields.officialwebsite}</a>{/if}
    {if $profilefields.officialwebsite && $profilefields.personalwebsite}<span class="marker">|</span>{/if}
    {if $profilefields.personalwebsite}<a href="{$profilefields.personalwebsite}">{$profilefields.personalwebsite}</a>{/if}
    {if $profilefields.personalwebsite && $profilefields.blogaddress}<span class="marker">|</span>{/if}
    {if $profilefields.blogaddress}<a href="{$profilefields.blogaddress}">{$profilefields.blogaddress}</a>{/if}
    {if $profilefields.blogaddress && $profilefields.portfolio}<span class="marker">|</span>{/if}
    {if $profilefields.portfolio}<a href="{$profilefields.portfolio}">{$profilefields.portfolio}</a>{/if}
    <br />
    <!-- Chat -->
    <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="18" height="18" viewBox="0 -257 74.657999 63.999588" id="speech">
      <g transform="matrix(0.04166183,0,0,-0.04166183,0,-203.67286)" id="g4">
        <path d="M 1792,640 C 1792,286 1391,0 896,0 847,0 798,3 751,8 620,-108 464,-190 291,-234 c -36,-10 -75,-17 -114,-22 -22,-2 -43,14 -48,38 v 1 c -5,25 12,40 27,58 63,71 135,131 182,298 C 132,256 0,437 0,640 c 0,353 401,640 896,640 495,0 896,-286 896,-640 z" class="icon" />
      </g>
    </svg>
    {foreach from=$profilefields.socialprofile item=item name='sp'}<span class="marker">{$item.desc}</span> {$item.title}{if !$.foreach.sp.last}<span class="marker"> | </span>{/if}{/foreach}
    <br />
    <span class="marker">{$text.gender}</span> {if $profilefields.gender == 'male'}{str tag='male' section='artefact.resume'}{/if}{if $profilefields.gender == 'female'}{str tag='female' section='artefact.resume'}{/if}{if $profilefields.gender == 'male' && $profilefields.gender == 'female'}{str tag='gendernotspecified' section='artefact.resume'}{/if}
    <span class="marker">| {$text.birthdate}</span> {$profilefields.dateofbirth}
    {if $profilefields.citizenship}<span class="marker">| {$text.nationality}</span> {$profilefields.citizenship}{/if}
  </td>
</tr>
<tr>
  <td class="stripe">{$text.employment}</td>
  <td class="middle"></td>
  <td><div class="line">&#x2b1b;</div></td>
</tr>
{foreach from=$employment_data item=employment}
<tr>
  <td class="stripe"></td>
  <td class="middle"><span class="marker">{$employment->startdate|escape}{if $employment->enddate} - {$employment->enddate|escape}{else} &rarr;{/if}</span></td>
  <td><span class="marker">{$employment->jobtitle}</span><br />{$employment->employer}{if $employment->employeraddress}, {$employment->employeraddress}{/if}{if $employment->positiondescription}<br /><span class="description">{$employment->positiondescription|nl2br}</span>{/if}</td>
</tr>
{/foreach}
<tr>
  <td class="stripe">{$text.education}</td>
  <td class="middle"></td>
  <td><div class="line">&#x2b1b;</div></td>
</tr>
{foreach from=$education_data item=education}
<tr>
  <td class="stripe"></td>
  <td class="middle"><span class="marker">{$education->startdate|escape}{if $education->enddate} - {$education->enddate|escape}{else} &rarr;{/if}</span></td>
  <td><span class="marker">{$education->qualname}</span><br />{$education->institution}{if $education->institutionaddress}, {$education->institutionaddress}{/if}{if $education->qualdescription}<br /><span class="description">{$education->qualdescription|nl2br}</span>{/if}</td>
</tr>
{/foreach}
<tr>
  <td class="stripe">{$text.skills}</td>
  <td class="middle"></td>
  <td><div class="line">&#x2b1b;</div></td>
</tr>
<tr>
  <td class="stripe">{$text.mothertongue}</td>
  <td class="middle">{foreach from=$skills.mothertongue item=lang}{$lang->label}<br />{/foreach}
  </td>
  <td></td>
</tr>
<tr>
  <td class="stripe">{$text.otherlanguage}</td>
  <td colspan="2">
    <div class="skilltable-header">
      <div class="middle"></div>
      <div class="skilltable-hcell">
      <!-- Listen -->
      <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="18" height="18" viewBox="0 -256 75.636005 63.999697" id="listen">
        <g transform="matrix(0.04545433,0,0,-0.04545433,0,-192.0003)" id="g4">
          <path d="m 1664,650 c 0,-109 -20,-215 -60,-314 l -20,-49 -185,-33 C 1370,145 1271,64 1152,64 V 32 c 0,-18 -14,-32 -32,-32 h -64 c -18,0 -32,14 -32,32 v 576 c 0,18 14,32 32,32 h 64 c 18,0 32,-14 32,-32 v -32 c 96,0 179,-53 223,-131 l 68,12 c 19,62 29,126 29,193 0,302 -299,566 -640,566 -341,0 -640,-264 -640,-566 0,-67 10,-131 29,-193 l 68,-12 c 44,78 127,131 223,131 v 32 c 0,18 14,32 32,32 h 64 c 18,0 32,-14 32,-32 V 32 C 640,14 626,0 608,0 H 544 C 526,0 512,14 512,32 V 64 C 393,64 294,145 265,254 L 80,287 60,336 C 20,435 0,541 0,650 c 0,411 381,758 832,758 451,0 832,-347 832,-758 z" class="icon" inkscape:connector-curvature="0" />
        </g>
      </svg>
      <br /><span class="marker small">{$text.listening}</span></div>
      <div class="skilltable-hcell">
      <!-- Read -->
      <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="18" height="18" viewBox="-1 -256 69.348997 63.999928" id="read">
        <g transform="matrix(0.04166662,0,0,-0.04166662,-0.98906213,-197.3334)" id="g4">
          <path d="m 1639,1058 c 25,-36 32,-83 18,-129 L 1382,23 c -25,-85 -113,-151 -199,-151 H 260 c -102,0 -211,81 -248,185 -16,45 -16,89 -2,127 2,20 6,40 7,64 1,16 -8,29 -6,41 4,24 25,41 41,68 30,50 64,131 75,183 5,19 -5,41 0,58 5,19 24,33 34,51 27,46 62,135 67,182 2,21 -8,44 -2,60 7,23 29,33 44,53 24,33 64,128 70,181 2,17 -8,34 -5,52 4,19 28,39 44,62 42,62 50,199 177,163 l -1,-3 c 17,4 34,9 51,9 h 761 c 47,0 89,-21 114,-56 26,-36 32,-83 18,-130 L 1225,316 C 1178,162 1152,128 1025,128 H 156 c -13,0 -29,-3 -38,-15 -8,-12 -9,-21 -1,-43 C 137,12 206,0 261,0 h 923 c 37,0 80,21 91,57 l 300,987 c 6,19 6,39 5,57 23,-9 44,-23 59,-43 z m -1064,-2 c -6,-18 4,-32 22,-32 h 608 c 17,0 36,14 42,32 l 21,64 c 6,18 -4,32 -22,32 H 638 c -17,0 -36,-14 -42,-32 z M 492,800 c -6,-18 4,-32 22,-32 h 608 c 17,0 36,14 42,32 l 21,64 c 6,18 -4,32 -22,32 H 555 c -17,0 -36,-14 -42,-32 z" class="icon" inkscape:connector-curvature="0" />
        </g>
      </svg>
      <br /><span class="marker small">{$text.reading}</span></div>
      <div class="skilltable-hcell">
      <!-- Comment -->
      <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="18" height="18" viewBox="0 -256 81.442995 64.000154" id="comment">
        <g transform="matrix(0.0454481,0,0,-0.0454481,0,-197.82643)" id="g4">
          <path d="M 1408,768 C 1408,485 1093,256 704,256 643,256 584,262 528,272 445,213 351,170 250,144 223,137 194,132 164,128 h -3 c -15,0 -29,12 -32,29 v 0 c -4,19 9,31 20,44 39,44 83,83 117,166 C 104,461 0,606 0,768 c 0,283 315,512 704,512 389,0 704,-229 704,-512 z m 384,-256 c 0,-163 -104,-307 -266,-401 34,-83 78,-122 117,-166 11,-13 24,-25 20,-44 v 0 c -4,-18 -19,-31 -35,-29 -30,4 -59,9 -86,16 -101,26 -195,69 -278,128 C 1208,6 1149,0 1088,0 907,0 741,50 616,132 c 29,-2 59,-4 88,-4 215,0 418,62 573,174 167,122 259,287 259,466 0,52 -8,103 -23,152 169,-93 279,-241 279,-408 z" class="icon" />
        </g>
      </svg>
      <br /><span class="marker small">{$text.spokeninteraction}</span></div>
      <div class="skilltable-hcell">
      <!-- Speech -->
      <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="18" height="18" viewBox="0 -257 74.657999 63.999588" id="speech">
        <g transform="matrix(0.04166183,0,0,-0.04166183,0,-203.67286)" id="g4">
          <path d="M 1792,640 C 1792,286 1391,0 896,0 847,0 798,3 751,8 620,-108 464,-190 291,-234 c -36,-10 -75,-17 -114,-22 -22,-2 -43,14 -48,38 v 1 c -5,25 12,40 27,58 63,71 135,131 182,298 C 132,256 0,437 0,640 c 0,353 401,640 896,640 495,0 896,-286 896,-640 z" class="icon" />
        </g>
      </svg>
      <br /><span class="marker small">{$text.spokenproduction}</span></div>
      <div class="skilltable-hcell">
      <!-- Write -->
      <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="18" height="18" viewBox="0 -256 63.999993 63.999993" id="write">
        <g transform="matrix(0.04224422,0,0,-0.04224422,0,-197.40727)" id="g4">
          <path d="M 363,0 454,91 219,326 128,235 V 128 H 256 V 0 h 107 z m 523,928 c 0,13 -9,22 -22,22 -6,0 -12,-2 -17,-7 L 305,401 c -5,-5 -7,-11 -7,-17 0,-13 9,-22 22,-22 6,0 12,2 17,7 l 542,542 c 5,5 7,11 7,17 z M 832,1120 1248,704 416,-128 H 0 v 416 z m 683,-96 c 0,-34 -14,-67 -37,-90 l -166,-166 -416,416 166,165 c 23,24 56,38 90,38 34,0 67,-14 91,-38 l 235,-234 c 23,-24 37,-57 37,-91 z" class="icon" inkscape:connector-curvature="0" />
        </g>
      </svg>
      <br /><span class="marker small">{$text.writing}</span></div>
    </div>
    {foreach from=$skills.otherlanguage item=lang}<div class="skilltable-row">
      <div class="middle">{$lang->label}</div>
      <div class="skilltable-cell">{$lang->listening}</div>
      <div class="skilltable-cell">{$lang->reading}</div>
      <div class="skilltable-cell">{$lang->spokeninteraction}</div>
      <div class="skilltable-cell">{$lang->spokenproduction}</div>
      <div class="skilltable-cell">{$lang->writing}</div>
    </div>{/foreach}
  </td>
</tr>
{if !empty($skills.skills.socialskill.desc)}<tr>
  <td class="stripe">{$text.communicationskill}</td>
  <td class="middle"></td>
  <td>{$skills.skills.socialskill.desc|safe}</td>
</tr>{/if}
{if !empty($skills.skills.organisationalskill.desc)}<tr>
  <td class="stripe">{$text.organisationalskill}</td>
  <td class="middle"></td>
  <td>{$skills.skills.organisationalskill.desc|safe}</td>
</tr>{/if}
{if !empty($skills.skills.technicalskill.desc)}<tr>
  <td class="stripe">{$text.jobrelatedskill}</td>
  <td class="middle"></td>
  <td>{$skills.skills.technicalskill.desc|safe}</td>
</tr>{/if}
{if !empty($skills.digital)}<tr>
  <td class="stripe">{$text.digitalcompetence}</td>
  <td class="middle"></td>
  <td>
    <div class="skilltable-header">
      <div class="skilltable-hcell">
      <!-- Cog (process) -->
      <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="18" height="18" viewBox="0 -256 64.000005 64.000005" id="cog">
        <g transform="matrix(0.04166667,0,0,-0.04166667,0,-197.33333)" id="g4">
          <path d="M 1024,640 C 1024,781 909,896 768,896 627,896 512,781 512,640 512,499 627,384 768,384 c 141,0 256,115 256,256 z m 512,109 V 527 c 0,-15 -12,-33 -28,-36 l -185,-28 c -11,-32 -23,-62 -39,-91 34,-49 70,-93 107,-138 6,-7 10,-16 10,-25 0,-9 -3,-16 -9,-23 C 1368,154 1233,7 1199,7 c -9,0 -18,4 -26,9 l -138,108 c -29,-15 -60,-28 -91,-38 -7,-61 -13,-126 -29,-186 -4,-16 -18,-28 -36,-28 H 657 c -18,0 -34,13 -36,30 L 593,86 c -31,10 -61,22 -90,37 L 362,16 c -7,-6 -16,-9 -25,-9 -9,0 -18,4 -25,11 -53,48 -123,110 -165,168 -5,7 -7,15 -7,23 0,9 3,16 8,23 34,46 71,90 105,137 -17,32 -31,65 -41,99 L 29,495 C 12,498 0,514 0,531 v 222 c 0,15 12,33 27,36 l 186,28 c 10,32 23,62 39,92 -34,48 -70,93 -107,138 -6,7 -10,15 -10,24 0,9 4,16 9,23 24,33 159,179 193,179 9,0 18,-4 26,-10 l 138,-107 c 29,15 60,28 91,38 7,61 13,126 29,186 4,16 18,28 36,28 h 222 c 18,0 34,-13 36,-30 l 28,-184 c 31,-10 61,-22 90,-37 l 142,107 c 6,6 15,9 24,9 9,0 18,-4 25,-10 53,-49 123,-111 165,-170 5,-6 7,-14 7,-22 0,-9 -3,-16 -8,-23 -34,-46 -71,-90 -105,-137 17,-32 31,-65 41,-98 l 183,-28 c 17,-3 29,-19 29,-36 z" class="icon" inkscape:connector-curvature="0" />
        </g>
      </svg>
      <br /><span class="marker small">{$text.information}</span></div>
      <div class="skilltable-hcell">
      <!-- Speech (communication) -->
      <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="18" height="18" viewBox="0 -257 74.657999 63.999588" id="speech">
        <g transform="matrix(0.04166183,0,0,-0.04166183,0,-203.67286)" id="g4">
          <path d="M 1792,640 C 1792,286 1391,0 896,0 847,0 798,3 751,8 620,-108 464,-190 291,-234 c -36,-10 -75,-17 -114,-22 -22,-2 -43,14 -48,38 v 1 c -5,25 12,40 27,58 63,71 135,131 182,298 C 132,256 0,437 0,640 c 0,353 401,640 896,640 495,0 896,-286 896,-640 z" class="icon" />
        </g>
      </svg>
      <br /><span class="marker small">{$text.communication}</span></div>
      <div class="skilltable-hcell">
      <!-- Write (creation) -->
      <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="18" height="18" viewBox="0 -256 63.999993 63.999993" id="write">
        <g transform="matrix(0.04224422,0,0,-0.04224422,0,-197.40727)" id="g4">
          <path d="M 363,0 454,91 219,326 128,235 V 128 H 256 V 0 h 107 z m 523,928 c 0,13 -9,22 -22,22 -6,0 -12,-2 -17,-7 L 305,401 c -5,-5 -7,-11 -7,-17 0,-13 9,-22 22,-22 6,0 12,2 17,7 l 542,542 c 5,5 7,11 7,17 z M 832,1120 1248,704 416,-128 H 0 v 416 z m 683,-96 c 0,-34 -14,-67 -37,-90 l -166,-166 -416,416 166,165 c 23,24 56,38 90,38 34,0 67,-14 91,-38 l 235,-234 c 23,-24 37,-57 37,-91 z" class="icon" inkscape:connector-curvature="0" />
        </g>
      </svg>
      <br /><span class="marker small">{$text.contentcreation}</span></div>
      <div class="skilltable-hcell">
      <!-- Lock (safety) -->
      <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="18" height="18" viewBox="0 -256 52.363999 64.000443" id="lock">
        <g transform="matrix(0.04545486,0,0,-0.04545486,0,-191.99956)" id="g4">
          <path d="m 320,768 h 512 v 192 c 0,141 -115,256 -256,256 -141,0 -256,-115 -256,-256 V 768 z m 832,-96 V 96 C 1152,43 1109,0 1056,0 H 96 C 43,0 0,43 0,96 v 576 c 0,53 43,96 96,96 h 32 v 192 c 0,246 202,448 448,448 246,0 448,-202 448,-448 V 768 h 32 c 53,0 96,-43 96,-96 z" class="icon" />
        </g>
      </svg>
      <br /><span class="marker small">{$text.safety}</span></div>
      <div class="skilltable-hcell">
      <!-- Puzzle (problem solving) -->
      <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="18" height="18" viewBox="0 -256 67.745999 64.000427" id="puzzle">
        <g transform="matrix(0.04071274,0,0,-0.04071274,0,-193.46523)" id="g4">
          <path d="m 1664,438 c 0,-103 -59,-189 -168,-189 -122,0 -154,111 -264,111 -80,0 -110,-50 -110,-124 0,-78 32,-153 31,-230 V 1 C 1142,1 1131,1 1120,0 1017,-10 913,-30 809,-30 738,-30 664,-2 664,80 664,190 775,222 775,344 775,453 689,512 586,512 481,512 384,454 384,339 384,212 481,157 481,88 481,53 459,22 435,-1 404,-30 360,-36 318,-36 236,-36 154,-25 73,-12 55,-9 36,-7 18,-4 L 5,-2 C 3,-1 0,-1 0,0 v 1024 c 4,-3 63,-10 73,-12 81,-13 163,-24 245,-24 42,0 86,6 117,35 24,23 46,54 46,89 0,69 -97,124 -97,251 0,115 97,173 203,173 102,0 188,-59 188,-168 0,-122 -111,-154 -111,-264 0,-82 74,-110 145,-110 115,0 229,26 343,32 v -2 c -3,-4 -10,-63 -12,-73 -13,-81 -24,-163 -24,-245 0,-42 6,-86 35,-117 23,-24 54,-46 89,-46 69,0 124,97 251,97 115,0 173,-97 173,-202 z" class="icon" />
        </g>
      </svg>
      <br /><span class="marker small">{$text.problemsolving}</span></div>
    </div>
    <div class="skilltable-row">
      <div class="skilltable-cell">{$skills.digital->information}</div>
      <div class="skilltable-cell">{$skills.digital->communication}</div>
      <div class="skilltable-cell">{$skills.digital->contentcreation}</div>
      <div class="skilltable-cell">{$skills.digital->safety}</div>
      <div class="skilltable-cell">{$skills.digital->problemsolving}</div>
    </div>
  </td>
</tr>
<tr>
  <td class="stripe"></td>
  <td class="middle"></td>
  <td>{$skills.digital->description|safe}</td>
</tr>{/if}
{if !empty($skills.skills.otherskill.desc)}<tr>
  <td class="stripe">{$text.otherskill}</td>
  <td class="middle"></td>
  <td>{$skills.skills.otherskill.desc|safe}</td>
</tr>{/if}
{if !empty($skills.skills.drivinglicence.desc)}<tr>
  <td class="stripe">{$text.drivinglicence}</td>
  <td class="middle"></td>
  <td>{$skills.skills.drivinglicence.desc|safe}</td>
</tr>{/if}
<tr>
  <td class="stripe">{$text.additionalinfo}</td>
  <td class="middle"></td>
  <td><div class="line">&#x2b1b;</div></td>
</tr>
{foreach from=$additionalinfo item=item}<tr>
  <td class="stripe">{$item->label}</td>
  <td class="middle"></td>
  <td>{$item->description|safe}</td>
</tr>{/foreach}
{/if}
{*--------- ELP ----------*}
{if $ECV && $ELP}
<tr>
  <td class="stripe">{$text.languagepassport}</td>
  <td class="middle"></td>
  <td><div class="line">&#x2b1b;</div></td>
</tr>
{/if}
{if $ELP}
<tr>
  <td class="stripe"></td>
  <td class="middle"></td>
  <td class="name" align="center">{if $prefs.personname == 12}{$profilefields.firstname} {$profilefields.lastname}{else}{$profilefields.lastname} {$profilefields.firstname}{/if}</td>
</tr>
<tr>
  <td class="stripe"></td>
  <td class="middle"></td>
  <td>
  <div class="langintro">
    <div class="mothertongue">
      <div class="marker">{$text.mothertongue}</div>
      <div class="langtable-name">{foreach from=$skills.mothertongue item=lang name=lg}{$lang->label}{if !$.foreach.lg.last}, {/if}{/foreach}</div>
    </div>
    <div class="foreignlanguage">
      <div class="marker">{$text.otherlanguage}</div>
      <div class="langtable-name">{foreach from=$skills.otherlanguage item=lang name=lg}{$lang->label}{if !$.foreach.lg.last}, {/if}{/foreach}</div>
    </div>
  </div>
  </td>
</tr>
{foreach from=$skills.otherlanguage item=lang}<tr>
  <td class="stripe"></td>
  <td class="middle"></td>
  <td>
    <div class="langtable-name-header">{$lang->label}</div>
    <div class="langtable-row">
      <div class="langtable-c100"><span class="marker"><b>{$text.selfassessment}</b></span></div>
    </div>
    <div class="langtable-header">
    <div class="langtable-hcell">
    <!-- Listen -->
    <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="18" height="18" viewBox="0 -256 75.636005 63.999697" id="listen">
      <g transform="matrix(0.04545433,0,0,-0.04545433,0,-192.0003)" id="g4">
        <path d="m 1664,650 c 0,-109 -20,-215 -60,-314 l -20,-49 -185,-33 C 1370,145 1271,64 1152,64 V 32 c 0,-18 -14,-32 -32,-32 h -64 c -18,0 -32,14 -32,32 v 576 c 0,18 14,32 32,32 h 64 c 18,0 32,-14 32,-32 v -32 c 96,0 179,-53 223,-131 l 68,12 c 19,62 29,126 29,193 0,302 -299,566 -640,566 -341,0 -640,-264 -640,-566 0,-67 10,-131 29,-193 l 68,-12 c 44,78 127,131 223,131 v 32 c 0,18 14,32 32,32 h 64 c 18,0 32,-14 32,-32 V 32 C 640,14 626,0 608,0 H 544 C 526,0 512,14 512,32 V 64 C 393,64 294,145 265,254 L 80,287 60,336 C 20,435 0,541 0,650 c 0,411 381,758 832,758 451,0 832,-347 832,-758 z" class="icon" inkscape:connector-curvature="0" />
      </g>
    </svg>
    <br /><span class="marker small">{$text.listening}</span></div>
    <div class="langtable-hcell">
    <!-- Read -->
    <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="18" height="18" viewBox="-1 -256 69.348997 63.999928" id="read">
      <g transform="matrix(0.04166662,0,0,-0.04166662,-0.98906213,-197.3334)" id="g4">
        <path d="m 1639,1058 c 25,-36 32,-83 18,-129 L 1382,23 c -25,-85 -113,-151 -199,-151 H 260 c -102,0 -211,81 -248,185 -16,45 -16,89 -2,127 2,20 6,40 7,64 1,16 -8,29 -6,41 4,24 25,41 41,68 30,50 64,131 75,183 5,19 -5,41 0,58 5,19 24,33 34,51 27,46 62,135 67,182 2,21 -8,44 -2,60 7,23 29,33 44,53 24,33 64,128 70,181 2,17 -8,34 -5,52 4,19 28,39 44,62 42,62 50,199 177,163 l -1,-3 c 17,4 34,9 51,9 h 761 c 47,0 89,-21 114,-56 26,-36 32,-83 18,-130 L 1225,316 C 1178,162 1152,128 1025,128 H 156 c -13,0 -29,-3 -38,-15 -8,-12 -9,-21 -1,-43 C 137,12 206,0 261,0 h 923 c 37,0 80,21 91,57 l 300,987 c 6,19 6,39 5,57 23,-9 44,-23 59,-43 z m -1064,-2 c -6,-18 4,-32 22,-32 h 608 c 17,0 36,14 42,32 l 21,64 c 6,18 -4,32 -22,32 H 638 c -17,0 -36,-14 -42,-32 z M 492,800 c -6,-18 4,-32 22,-32 h 608 c 17,0 36,14 42,32 l 21,64 c 6,18 -4,32 -22,32 H 555 c -17,0 -36,-14 -42,-32 z" class="icon" inkscape:connector-curvature="0" />
      </g>
    </svg>
    <br /><span class="marker small">{$text.reading}</span></div>
    <div class="langtable-hcell">
    <!-- Comment -->
    <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="18" height="18" viewBox="0 -256 81.442995 64.000154" id="comment">
      <g transform="matrix(0.0454481,0,0,-0.0454481,0,-197.82643)" id="g4">
        <path d="M 1408,768 C 1408,485 1093,256 704,256 643,256 584,262 528,272 445,213 351,170 250,144 223,137 194,132 164,128 h -3 c -15,0 -29,12 -32,29 v 0 c -4,19 9,31 20,44 39,44 83,83 117,166 C 104,461 0,606 0,768 c 0,283 315,512 704,512 389,0 704,-229 704,-512 z m 384,-256 c 0,-163 -104,-307 -266,-401 34,-83 78,-122 117,-166 11,-13 24,-25 20,-44 v 0 c -4,-18 -19,-31 -35,-29 -30,4 -59,9 -86,16 -101,26 -195,69 -278,128 C 1208,6 1149,0 1088,0 907,0 741,50 616,132 c 29,-2 59,-4 88,-4 215,0 418,62 573,174 167,122 259,287 259,466 0,52 -8,103 -23,152 169,-93 279,-241 279,-408 z" class="icon" />
      </g>
    </svg>
    <br /><span class="marker small">{$text.spokeninteraction}</span></div>
    <div class="langtable-hcell">
    <!-- Speech -->
    <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="18" height="18" viewBox="0 -257 74.657999 63.999588" id="speech">
      <g transform="matrix(0.04166183,0,0,-0.04166183,0,-203.67286)" id="g4">
        <path d="M 1792,640 C 1792,286 1391,0 896,0 847,0 798,3 751,8 620,-108 464,-190 291,-234 c -36,-10 -75,-17 -114,-22 -22,-2 -43,14 -48,38 v 1 c -5,25 12,40 27,58 63,71 135,131 182,298 C 132,256 0,437 0,640 c 0,353 401,640 896,640 495,0 896,-286 896,-640 z" class="icon" />
      </g>
    </svg>
    <br /><span class="marker small">{$text.spokenproduction}</span></div>
    <div class="langtable-hcell">
    <!-- Write -->
    <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="18" height="18" viewBox="0 -256 63.999993 63.999993" id="write">
      <g transform="matrix(0.04224422,0,0,-0.04224422,0,-197.40727)" id="g4">
        <path d="M 363,0 454,91 219,326 128,235 V 128 H 256 V 0 h 107 z m 523,928 c 0,13 -9,22 -22,22 -6,0 -12,-2 -17,-7 L 305,401 c -5,-5 -7,-11 -7,-17 0,-13 9,-22 22,-22 6,0 12,2 17,7 l 542,542 c 5,5 7,11 7,17 z M 832,1120 1248,704 416,-128 H 0 v 416 z m 683,-96 c 0,-34 -14,-67 -37,-90 l -166,-166 -416,416 166,165 c 23,24 56,38 90,38 34,0 67,-14 91,-38 l 235,-234 c 23,-24 37,-57 37,-91 z" class="icon" inkscape:connector-curvature="0" />
      </g>
    </svg>
    <br /><span class="marker small">{$text.writing}</span></div>
    </div>
    <div class="langtable-row">
      <div class="langtable-cell">{$lang->listening}</div>
      <div class="langtable-cell">{$lang->reading}</div>
      <div class="langtable-cell">{$lang->spokeninteraction}</div>
      <div class="langtable-cell">{$lang->spokenproduction}</div>
      <div class="langtable-cell">{$lang->writing}</div>
    </div>
    {if !empty($lang->certificate)}<div class="langtable-row">
      <div class="langtable-c100"><span class="marker"><b>{$text.languagediplomas}</b></span></div>
    </div>
    <div class="langtable-row">
      <div class="langtable-c40"><span class="marker small">{$text.diplomatitle}</span></div>
      <div class="langtable-c30"><span class="marker small">{$text.diplomainstitution}</span></div>
      <div class="langtable-c20"><span class="marker small">{$text.diplomadate}</span></div>
      <div class="langtable-c10"><span class="marker small">{$text.diplomalevel}</span></div>
    </div>
    {foreach from=$lang->certificate item=cert}<div class="langtable-row">
      <div class="langtable-c40">{$cert->certificate}</div>
      <div class="langtable-c30">{$cert->awardingbody}</div>
      <div class="langtable-c20">{$cert->certificatedate|format_date:'strfdaymonthyearshort'}</div>
      <div class="langtable-c10">{$cert->europeanlevel}</div>
    </div>{/foreach}{/if}
    {if !empty($lang->experience)}<div class="langtable-row">
      <div class="langtable-c100"><span class="marker"><b>{$text.languageexperience}</b></span></div>
    </div>
    <div class="langtable-row">
      <div class="langtable-c70"><span class="marker small">{$text.description}</span></div>
      <div class="langtable-c30"><span class="marker small">{$text.period}</span></div>
    </div>
    {foreach from=$lang->experience item=exp}<div class="langtable-row">
      <div class="langtable-c70">{$exp->description}</div>
      <div class="langtable-c30">{$exp->startdate|format_date:'strfdaymonthyearshort'}{if $exp->enddate} - {$exp->enddate|format_date:'strfdaymonthyearshort'}{/if}</div>
    </div>{/foreach}{/if}
  </td>
</tr>{/foreach}
{/if}
<tr>
  <td class="stripe"></td>
  <td class="middle"></td>
  <td align="center"><br /><span class="marker small">{$text.copyright}</span></td>
</tr>
</table>
</div>

{if !$embed}
</body>
</html>
{/if}