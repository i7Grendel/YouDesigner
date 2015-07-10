<style type="text/css">
html, body						{ height:100% !important; min-height:100%; }
body, form						{ padding:0; margin:0; }
body							{ background:#fff; }
div,
table,
td,
input,
textarea,
select							{ font-family:tahoma; font-size:12px; color:#000; }
input, textarea, select			{ /* background:#fff; border:1px solid #7F9DB9; */ }
a								{ color:#000; outline:none; text-decoration:none; }
a:hover							{ color:#343434; text-decoration:underline; }
a.hot							{ color:#EE7E2B !important; }
a:hover.hot						{ color:#F3AB76 !important; }
h1, h2, h3, h4, h5				{ margin:0; padding:0; font-weight:normal; }
img                             { border: 0; }

.hide   {display:none;}
.clear  {clear: both;}
.tal    {text-align: left !important;}
.tar    {text-align: right !important;}
#start				{ width:950px; min-width:950px; min-height:500px; height:100%; margin: 0 auto; }
#bef-main 			{ width:100%; border-left: 1px solid #8B919F; border-right: 1px solid #8B919F; border-bottom: 1px solid #8B919F; }
#main				{ width:100%; position:relative; background:url(http://cpanel.main-hosting.com/themes/x1/images/top-menu.gif) 0 100px repeat-x; }

#top				{ width:100%; height:100px; background:#fff url(http://cpanel.main-hosting.com/themes/x1/images/top.png) no-repeat; }
#top .logo			{ overflow: hidden; position:absolute; left:23px; top:30px; width:231px; height:53px; /*background:url(http://cpanel.main-hosting.com/themes/x1/images/logo-company.png) no-repeat;*/ }
#top .choose		{ float:right; padding:46px 20px 0 0; }

#top .choose span	{ display:block; padding-bottom:5px; }
#top .choose select	{ width:120px; }

#top-menu			{ border-collapse:collapse; width:956px; background:url(http://cpanel.main-hosting.com/themes/x1/images/top-menu.gif) repeat-x; }
#top-menu td		{ padding:0; text-align:center; height:32px; }
#top-menu td.sep	{ padding:0 1px 0 0; width:0; height:32px; font-size:0; background:url(http://cpanel.main-hosting.com/themes/x1/images/top-menu-sep.gif) no-repeat; }
#top-menu td.sep.s	{ padding:0; width:0; height:32px; font-size:0; background:none; }
#top-menu a			{ color:#fff; display:block; width:100%; padding:8px 0 10px 0; text-decoration:none; }
#top-menu a:hover, #top-menu a.s	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/top-menu-s.gif) repeat-x; }
#top-menu td.ls, #top-menu td.rs	{ width:0; }

ul.main-menu        { display: block; height: 32px; background:url(http://cpanel.main-hosting.com/themes/x1/images/top-menu.gif) repeat-x; margin:0; padding:0;}
ul.main-menu li     { display: inline; text-align: center; }
ul.main-menu li a	{ color:#fff; display:inline-block; padding:8px 20px 10px 20px; text-decoration:none; }
ul.main-menu li a:hover, ul.main-menu li a.s	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/top-menu-s.gif) repeat-x; }

#nav				{ list-style-type:none; padding:0; margin:0; }
#nav li				{ padding:0; margin:0; }
#nav li a			{ font-size:12px; }
#nav li a.s			{ font-weight:bold; }

#mid, #mid-inner	{ width:100%; overflow:hidden; }
#mid-inner			{ padding-top:0; background:#FCFCFC url(http://cpanel.main-hosting.com/themes/x1/images/mid.gif) repeat-y; }

#ba					{ position:absolute; left:0; bottom:0; width:249px; height:492px; background:url(http://cpanel.main-hosting.com/themes/x1/images/mid.jpg) no-repeat; }

.dashboard-menu,
.head				{ padding:23px 0 5px 20px; border-bottom:1px solid #8B919F; background:#F0F0F0; font-size:18px; color:#003399; width:auto; }

#side-1				{ float:left; width:70%; background:url(http://cpanel.main-hosting.com/themes/x1/images/side-1.gif) 100% 0 repeat-y; padding-bottom:20px; overflow:auto; }
#mid-inner #side-1	{ width:257px; background:none; }

.list				{ overflow:auto; padding-top:16px; }
.list.top			{ padding-top:0; }
.list .name			{ color:#003399; background:url(http://cpanel.main-hosting.com/themes/x1/images/list-name.gif) 0 19px repeat-x; padding:12px 0 0 0; overflow:auto; clear:left; }
.list .name span	{ background:#fff; padding:0 10px 0 20px; }
.list .item			{ float:left; width:25%; padding:10px 0 5px 0; min-height:28px; overflow:hidden; margin-top:6px; min-height:60px; }
.list .item .icon	{ margin-left:auto; margin-right:auto; }
.list .item a		{ display:block; margin:0 10px 0 20px; text-decoration: none;}
.list .item a img	{ display:block; }
.list .item a:hover span { text-decoration: underline; }
.list .item .label	{ display:block; width:100%; text-align:center; }
.list .sep			{ float:left; width:100%; font-size:0; height:0; }

.list .item span.icon { display: block; width: 32px; height: 32px;}

.list .item span.icon-0	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-0.png) 0px 0px no-repeat; }
.list .item span.icon-1	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-1.png) 0px 0px no-repeat; }
.list .item span.icon-2	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-2.png) 0px 0px no-repeat; }
.list .item span.icon-3	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-3.png) 0px 0px no-repeat; }
.list .item span.icon-4	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-4.png) 0px 0px no-repeat; }
.list .item span.icon-5	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-5.png) 0px 0px no-repeat; }
.list .item span.icon-6	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-6.png) 0px 0px no-repeat; }
.list .item span.icon-7	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-7.png) 0px 0px no-repeat; }
.list .item span.icon-8	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-8.png) 0px 0px no-repeat; }
.list .item span.icon-9	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-9.png) 0px 0px no-repeat; }
.list .item span.icon-10	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-10.png) 0px 0px no-repeat; }
.list .item span.icon-11	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-11.png) 0px 0px no-repeat; }
.list .item span.icon-12	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-12.png) 0px 0px no-repeat; }
.list .item span.icon-13	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-13.png) 0px 0px no-repeat; }
.list .item span.icon-14	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-14.png) 0px 0px no-repeat; }
.list .item span.icon-15	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-15.png) 0px 0px no-repeat; }
.list .item span.icon-16	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-16.png) 0px 0px no-repeat; }
.list .item span.icon-17	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-17.png) 0px 0px no-repeat; }
.list .item span.icon-18	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-18.png) 0px 0px no-repeat; }
.list .item span.icon-19	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-19.png) 0px 0px no-repeat; }
.list .item span.icon-20	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-20.png) 0px 0px no-repeat; }
.list .item span.icon-21	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-21.png) 0px 0px no-repeat; }
.list .item span.icon-22	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-22.png) 0px 0px no-repeat; }
.list .item span.icon-23	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-23.png) 0px 0px no-repeat; }
.list .item span.icon-24	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-24.png) 0px 0px no-repeat; }
.list .item span.icon-25	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-25.png) 0px 0px no-repeat; }
.list .item span.icon-26	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-26.png) 0px 0px no-repeat; }
.list .item span.icon-27	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-27.png) 0px 0px no-repeat; }
.list .item span.icon-28	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-28.png) 0px 0px no-repeat; }
.list .item span.icon-29	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-29.png) 0px 0px no-repeat; }
.list .item span.icon-30	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-30.png) 0px 0px no-repeat; }
.list .item span.icon-31	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-31.png) 0px 0px no-repeat; }
.list .item span.icon-32	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-32.png) 0px 0px no-repeat; }
.list .item span.icon-33	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-33.png) 0px 0px no-repeat; }
.list .item span.icon-34	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-34.png) 0px 0px no-repeat; }
.list .item span.icon-35	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-35.png) 0px 0px no-repeat; }
.list .item span.icon-36	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-36.png) 0px 0px no-repeat; }
.list .item span.icon-37	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-37.png) 0px 0px no-repeat; }
.list .item span.icon-38	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-38.png) 0px 0px no-repeat; }
.list .item span.icon-39	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-39.png) 0px 0px no-repeat; }
.list .item span.icon-40	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-40.png) 0px 0px no-repeat; }
.list .item span.icon-41	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-41.png) 0px 0px no-repeat; }
.list .item span.icon-42	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-42.png) center 0px no-repeat; }
.list .item span.icon-43	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-43.png) center 0px no-repeat; }
.list .item span.icon-44	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-44.png) center 0px no-repeat; }
.list .item span.icon-45	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-45.png) center 0px no-repeat; }
.list .item span.icon-46	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-46.png) center 0px no-repeat; }
.list .item span.icon-47	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-47.png) center 0px no-repeat; }
.list .item span.icon-48	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-48.png) center 0px no-repeat; }
.list .item span.icon-49	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-49.png) center 0px no-repeat; }
.list .item span.icon-50	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-50.png) center 0px no-repeat; }
.list .item span.icon-51	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-51.png) center 0px no-repeat; }
.list .item span.icon-52	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-52.png) center 0px no-repeat; }
.list .item span.icon-53	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-53.png) center 0px no-repeat; }
.list .item span.icon-54	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-54.png) center 0px no-repeat; }
.list .item span.icon-55	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-55.png) center 0px no-repeat; }
.list .item span.icon-56	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-56.png) center 0px no-repeat; }
.list .item span.icon-57	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-57.png) center 0px no-repeat; }
.list .item span.icon-cron-output	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-29.png) 0px 0px no-repeat; }
.list .item span.icon-mail-service-control { background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-mail-service-control.png) 0px 0px no-repeat; }

#nav-left			{ list-style-type:none; padding:4px 0 0 0; margin:0; }
#nav-left li		{ padding:13px 0 13px 25px; margin:0; font-weight:bold; font-size:12px; }
#nav-left li.sub	{ padding:4px 0 4px 25px; font-weight:normal; }
#nav-left li.s		{ background:url(http://cpanel.main-hosting.com/themes/x1/images/nav-left.gif) 10px center no-repeat; }
#nav-left a			{ color:#fff; }
#nav-left a:hover	{ color:#CFDDE5; }
#nav-left a.s		{ font-weight:bold; }
#nav-left a.s:hover	{ text-decoration:none; color:#fff; }

ul.nav-left         { list-style-type:none; padding:4px 0 0 0px; margin:0; }
ul.nav-left li      { padding:5px 0; margin:0; font-weight:bold; font-size:12px; }
ul.nav-left li a    { padding: 0 0 0 25px; font-weight:bold; display: block; height: 21px; background-repeat: no-repeat; background-position: left center ;}
ul.nav-left li ul   { list-style-type:none; margin:0; padding: 0 0 0 10px; }
ul.nav-left li ul li a { height: auto; font-weight:normal; padding-left: 30px; font-size: 0.85em;}
ul.nav-left a       { color:#fff; }
ul.nav-left a:hover       { color:#CFDDE5; }
ul.nav-left li.active > a { padding:5px 0 0 25px; font-weight:bold; background:url(http://cpanel.main-hosting.com/themes/x1/images/nav-left.gif) 10px center no-repeat;}

#side-2				{ float:left; width:30%; position:relative; left:60%; margin-left:-60%; }
#mid-inner #side-2	{ width:690px; float:right; overflow:visible; margin:0 0 0 257px; left:auto; margin-left:auto; /* position:relative; left:60%; margin-left:-60%; */ }
#mid-inner2 #side-2	{ width:auto; float:none; overflow:auto; margin:0 0 0 257px; left:auto; margin-left:auto; /* position:relative; left:60%; margin-left:-60%; */ }

.body               { padding: 12px 14px; }

.block				{ border-bottom:1px solid #B8C1D0; padding-bottom:7px; }
.block table		{ border-collapse:collapse; margin-top:6px; width:100%; }
.block td			{ padding:4px 0 4px 20px; }
.block td.color		{ padding-right:20px; color:#747474; }
span.active		{ background:url(http://cpanel.main-hosting.com/themes/x1/images/active.gif) no-repeat; display:block; padding:1px 0 1px 21px; }
span.active.not, span.inactive	{ background:url(http://cpanel.main-hosting.com/themes/x1/images/inactive.gif) no-repeat; display:block; padding:1px 0 1px 21px;}

.profile .client-profile { background-color: #fff; width: 249px; overflow-x:hidden; }
.profile .client-profile table		{ border-collapse:collapse; margin-top:6px; width:100%; }
.profile .client-profile td			{ padding:4px 0 4px 20px; }
.profile .client-profile td.color		{ padding-right:20px; color:#747474; }

.cont				{ width:auto; padding:0; color:#666; min-height:500px; }
.cont h1			{ font-size:18px; margin:6px 0 15px 6px; }
.cont h2			{ margin-bottom:17px; padding-left:55px; position:relative; }
.cont h2.icon-0		{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-0.png) 9px 14px no-repeat; }
.cont h2.icon-1		{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-1.png) 9px 14px no-repeat; }
.cont h2.icon-2		{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-2.png) 9px 14px no-repeat; }
.cont h2.icon-3		{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-3.png) 9px 14px no-repeat; }
.cont h2.icon-4		{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-4.png) 9px 14px no-repeat; }
.cont h2.icon-5		{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-5.png) 9px 14px no-repeat; }
.cont h2.icon-6		{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-6.png) 9px 14px no-repeat; }
.cont h2.icon-7		{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-7.png) 9px 14px no-repeat; }
.cont h2.icon-8		{ background:url(http://cpanel.main-hosting.com/themes/x1/images/icon-8.png) 9px 14px no-repeat; }
.cont h2.head em	{ font-size:12px; color:#000; font-style:normal; position:absolute; top:5px; left:55px; padding-right:12px; background:url(http://cpanel.main-hosting.com/themes/x1/images/square.gif) 100% center no-repeat; }
.cont h2.head em a	{ color:#000; }
.cont h3			{ font-size:12px; font-weight:bold; padding-left:15px; padding-right:15px; margin-bottom:10px; }
.cont h4			{ font-size:13px; font-weight:bold; color:#3B6086; }
.cont table			{ border-collapse:collapse; width:auto; border:0; margin:15px;}
.cont a				{ color:#0066CC; }
.cont a:hover		{ color:#4E91D4; }
.cont td			{ border:0; }
.cont p				{ padding-left:15px; padding-right:15px; margin-bottom:15px; line-height:20px; }
.cont ul			{ padding:0 0 0 30px; margin:0 0 15px 0; list-style-type:none; }
.cont li			{ padding:0 0 0 10px; line-height:20px; margin:0; background:url(http://cpanel.main-hosting.com/themes/x1/images/square.gif) 0 center no-repeat; }
.cont input[type=text],
.cont input[type=password],
.cont textarea,
.cont select		{ background:#fff; border:1px solid #7F9DB9; font-size:11px; padding:1px 5px 2px 5px; }
.cont select		{ padding:0; }
.cont .block		{ width:auto; padding:0 0 5px 0; margin-bottom:0; overflow:auto; border:0; }
.cont .block.top	{ border:0; }

.cont-wrap			{ margin-left:0; }

ul.errors           { list-style-type: none; color: #E25F53; margin: 0; padding: 0;}
ul.errors li        { list-style: none; padding: 0px; background: none;}

table.type-1				{ width:auto; background:#fff; }
table.type-1 td				{ padding:0 15px 9px 15px; }
table.type-1 tr.bot td		{ border:0; padding:0 15px 10px 15px; }

table.type-2				{ margin:3px 20px 15px 20px; border:1px solid #D5D5D5; }
table.type-2 td				{ padding:5px 15px 5px 15px; border:0; }
table.type-2 tr.top td		{ padding-top:17px; }
table.type-2 tr.bot td		{ padding-bottom:19px; }

table.type-3				{ margin:3px 20px 15px 20px; border:1px solid #D5D5D5; width:70%;}
table.type-3 td				{ padding:3px 20px 3px 20px; border:0; vertical-align: top;}
table.type-3 tr.top td, table.type-3 tr:first-child td		{ padding-top:19px; }
table.type-3 tr.bot td, table.type-3 tr:last-child td		{ padding-bottom:19px; }
table.type-3 td input[type=text], table.type-3 td input[type=password], table.type-3 td textarea    	{ width:180px; }
table.type-3 td label.required:after    	{ content: ' *'; color:red;}

table.type-4				{ margin:3px 20px 15px 20px; border:1px solid #D5D5D5; }
table.type-4 td				{ padding:3px 20px 3px 20px; }
table.type-4 tr.top td		{ padding-top:19px; }
table.type-4 tr.bot td		{ padding-bottom:19px; }
table.type-4 td input[type=text], table.type-4 td input[type=password],
table.type-4 td input.txt	{ width:100px; }
table.type-4 td input.generate,
table.type-4 td select		{ width:140px; }
table.type-4 td.micro		{ padding:6px 0 0 0; vertical-align:top; }

td.password					{ text-align:center; color:#636363; }
td.password div				{ background:#fff url(http://cpanel.main-hosting.com/themes/x1/images/password.gif) 1px 1px no-repeat; border:1px solid #7F9DB9; height:7px; font-size:0; padding:1px; margin-bottom:5px; }

table.type-5					{ width:97%; border:1px solid #D5D5D5; }
table.type-5 td					{ padding:10px 0px 10px 0px; border:0; border-top:1px solid #D5D5D5; text-align:center; color:#747474; }
table.type-5 tr.head td			{ text-align:center; padding:10px 0px 10px 0px; font-weight:normal; border-top:1px solid #D5D5D5; color:#000; }
table.type-5 tr.bot td			{ text-align:right; border-bottom:1px solid #D5D5D5; border-top:1px solid #D5D5D5;}
table.type-5 td.link a			{ font-size:0; display:block; width:16px; height:16px; background:url(http://cpanel.main-hosting.com/themes/x1/images/link.gif) no-repeat; color:#fff; margin:0 auto; }
table.type-5 td.misc			{ white-space:nowrap; }
table.type-5 td.t5-left			{ border-left:0; color:#000; }

.cont .per-page				{ padding-left:0; margin-bottom:20px; }
.cont .per-page select		{ vertical-align:middle; margin:0 20px; }

.cont .host			{ border:1px solid #D5D5D5; position:relative; background:url(http://cpanel.main-hosting.com/themes/x1/images/host.gif) 22px 39px no-repeat; margin:2px 20px 15px 20px; }
.cont .host span	{ position:absolute; background:#fff; padding:0 5px; top:-6px; left:17px; }
.cont .host div		{ padding:27px 0 27px 65px; }

table.type-6					{ margin:3px 20px 15px 20px; border:1px solid #D5D5D5; width: 97%;}
table.type-6 td					{ padding:4px 20px 5px 20px; line-height:20px; }
table.type-6 tr.top td			{ padding-top:15px; }
table.type-6 tr.bot td			{ padding-bottom:14px; }
table.type-6 tfoot td           { text-align: right; }
table.type-6 tbody td textarea  { width: 100%; }

table.type-7 td					{ padding:102px 30px 15px 30px; }
table.type-7 input				{ width:124px; }
table.type-7 td.style-x1			{ background:url(http://cpanel.main-hosting.com/themes/x1/images/style-1.png) center top no-repeat; }
table.type-7 td.style-x2			{ background:url(http://cpanel.main-hosting.com/themes/x1/images/style-2.png) center top no-repeat; }
table.type-7 td.style-x3			{ background:url(http://cpanel.main-hosting.com/themes/x1/images/style-3.png) center top no-repeat; }
table.type-7 td.style-xx			{ background:url(http://cpanel.main-hosting.com/themes/x1/images/style-3.png) center top no-repeat; }

#foot						{ width:100%; height:39px; border-top:1px solid #8B919F; background:#F0F0F0; }
#bef-cop					{ width:920px; padding:12px 20px 12px 20px; color:#747474; }

div.ssh_cli {
width: 100%;
}
div.ssh_cli div.dark,
div.ssh_cli textarea {
width: 99%;
}

/* SSH console */
div.ssh_cli textarea,
div.ssh_cli #command,
div.ssh_cli div.dark,
div.ssh_cli #cwd {
font-size: 14px;
font-family: courier;
background-color: #000;
color: #fff;
margin: 0;
padding: 2px 0 2px 5px;
border: 0;
}

div.ssh_cli div.dark {
border-top: 1px solid white;
}

#cwd {
height:20px;
text-align:right;
white-space: nowrap;
}

#cwd,
div.ssh_cli #command {
display: block;
float: left;
/*    width: 48%;*/
}

div.ssh_cli_comm {
padding: 10px;
}

div.ssh_cli_comm dl dd {
margin-bottom: 20px;
}

div.ssh_cli_comm dl dd dl dd{
margin:-15px 0 10px 64px;
}


button.clear_cli,
button.comm {
width: 100px;
margin: 2px;
}

/* MODAL BOX */
#basic-modal-content {display:none;}

/* Overlay */
#simplemodal-overlay {background-color:#E6F0FC; cursor: wait;}

/* Container */
#simplemodal-container, #loading-mask .loader { background-color:#fff; border:6px solid #3D4453; padding:12px;}
#simplemodal-container code {background:#141414; border-left:3px solid #65B43D; display:block; margin-bottom:12px; padding:4px 6px 6px;}
#simplemodal-container a.modalCloseImg {background:url(http://cpanel.main-hosting.com/themes/x1/images/x.png) no-repeat; width:25px; height:29px; display:inline; z-index:3200; position:absolute; top:-15px; right:-16px; cursor:pointer;}
#simplemodal-container #basic-modal-content {padding:8px;}

#loading-mask
{
position:absolute;
color:#d85909;
font-size:1.1em;
font-weight:bold;
text-align:center;
opacity:0.80;
-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)"; /* IE8 */
z-index:500;
}

.loader {
background: url(http://cpanel.main-hosting.com/themes/x1/images/progress-bar.gif) no-repeat center center;
}

#loading-mask .loader
{
position:fixed;
top:45%;
left:50%;
width:150px;
height:50px;
margin:-25px 0 0 -75px;
padding:15px 60px;
font-weight:bold;
text-align:center;
z-index:1000;
}


/* -------------------------------------------
NOTIFICATIONS
-------------------------------------------- */

.msg  {
margin:10px !important;
padding:5px 0px 5px 55px !important;
background-position: 15px center;
background-repeat: no-repeat;
cursor: default;
}

.msg.warn {
background-image: url(http://cpanel.main-hosting.com/themes/x1/images/32x32/error.png);
border: 1px solid #FFC237;
background-color: #FFEAA8;
color: #826200;
}

.msg.success {
background-image: url(http://cpanel.main-hosting.com/themes/x1/images/32x32/accept.png);
border: 1px solid #99C600;
background-color: #EFFFB9;
color: #3C5A01;
}

.msg.error {
background-image: url(http://cpanel.main-hosting.com/themes/x1/images/32x32/exclamation.png);
border: 1px solid #EB5339;
background-color: #FCCAC2;
color: #AC260F;
}

.msg.info {
background-image: url(http://cpanel.main-hosting.com/themes/x1/images/32x32/information.png);
border: 1px solid #418ACC;
background-color: #D0E4F4;
color: #235685;
}
.msg h5 {
margin:0;
padding:5px 0px;
font-size:1.0em;
line-height:1.7em;
}

.msg p {
line-height:18px !important;
margin:0 0 10px !important;
padding:0 !important;
}
.msg .close {
text-decoration: none;
float: right;
margin: 0 5px;
color: inherit;
}

.attention {
width: 16px;
height: 16px;
display: inline-block;
background-image: url(http://cpanel.main-hosting.com/themes/x2/images/attention.png);
background-repeat: no-repeat;
}

#progress_bars {
color: #FFF;
padding:15px 0 0 25px;
}
#progress_bars span {
color: #fff;
}

/* Payment gateways */

.pg-Custom,
.pg-Interkassa,
.pg-InterkassaV2,
.pg-PayPalEmail,
.pg-Payza,
.pg-BitPay,
.pg-Ebanx,
.pg-TwoCheckout,
.pg-WebMoney,
.pg-LibertyReserve,
.pg-Skrill,
.pg-DineroMail,
.pg-PaySera,
.pg-PayU{
background-repeat: no-repeat;
width: 135px;
height: 70px;
background-position: center center;
text-indent: -999px;
/* IE fix*/
font-size: 0;
display: inline-block;
line-height: 0;
}

.pg-PaySera { background-image: url(http://cpanel.main-hosting.com/themes/x3/images/gateways/PaySera.png); }
.pg-BitPay { background-image: url(http://cpanel.main-hosting.com/themes/x3/images/gateways/BitPay.png); }
.pg-PayPalEmail { background-image: url(http://cpanel.main-hosting.com/themes/x1/images/gateways/PayPalEmail.png); }
.pg-Ebanx { background-image: url(http://cpanel.main-hosting.com/themes/x1/images/gateways/Ebanx.png); }
.pg-Payza { background-image: url(http://cpanel.main-hosting.com/themes/x1/images/gateways/Payza.png); }
.pg-TwoCheckout { background-image: url(http://cpanel.main-hosting.com/themes/x1/images/gateways/TwoCheckout.png); }
.pg-WebMoney { background-image: url(http://cpanel.main-hosting.com/themes/x1/images/gateways/WebMoney.png); }
.pg-Custom { background-image: url(http://cpanel.main-hosting.com/themes/x1/images/gateways/Custom.png); }
.pg-Interkassa { background-image: url(http://cpanel.main-hosting.com/themes/x1/images/gateways/Interkassa.png); }
.pg-InterkassaV2 { background-image: url(http://cpanel.main-hosting.com/themes/x1/images/gateways/Interkassa.png); }
.pg-Skrill { background-image: url(http://cpanel.main-hosting.com/themes/x1/images/gateways/Skrill.png); }
.pg-LibertyReserve { background-image: url(http://cpanel.main-hosting.com/themes/x1/images/gateways/LibertyReserve.png); }
.pg-DineroMail { background-image: url(http://cpanel.main-hosting.com/themes/x1/images/gateways/DineroMail.png); }
.pg-PayU { background-image: url(http://cpanel.main-hosting.com/themes/x1/images/gateways/PayU.jpg); }
/* Progress bar actions */
div.res-link {
float: right;
}
div.action span.fail {
background-image: url(http://cpanel.main-hosting.com/themes/x1/images/error.png);
display: block;
width: 16px;
height: 16px;
}

.jeditor {
width: 616px;
}
#api-public-ticket {
margin:0 0 0 290px;
}
/* Public ticket form */
#api-public-ticket form {
margin-top: 20px;
}

#api-public-ticket form fieldset {
border: 0;
}

#api-public-ticket form legend {
display: none;
}

#api-public-ticket form .api_input {
margin: 10px 0;
}

#api-public-ticket form .api_input input,
#api-public-ticket form .api_input textarea{
width: 200px;
}
#api-public-ticket form label {
display: block;
margin: 0 0 3px 0;
}
#api-public-ticket img.api_captcha {
display: block;
}

.cont h1 {
display:none;
}

ul#referrals-menu {
display:block;
width:90%;
position:relative;
float:left;
padding:15px;
}

ul#referrals-menu li {
width:auto;
margin:0 10px;
position:relative;
display:block;
float:left;
}

ul#referrals-menu li.first {
margin-left:0;
}

table.banner-list td.title {
width:120px;
padding:10px;
}

table.banner-list td.content {
text-align:left;
}

p.center {
text-align:center;
}

.auto-width {
display:inline;
width:auto;
}

input#phone_cc {
width:28px;
}
/*Auto Installer*/
.ai-software {
display: block;
float: left;
width: 80px;
height: 80px;
padding: 15px 25px 35px 25px;
margin: 16px;
background-color: white;
text-align: center;
text-decoration: none;
color: #666;
}
.ai-software-icon {
width: 80px;
height: 80px;
background-color: #FFF;
background-position: -1000px 0px;
background-image:url('/images/software/all.jpg');
}
.ai-software-label {
margin: 4px 0px;
line-height: 14px;
}
.ai-software-tooltip{
display:none;
padding:2px 3px;
margin-left:-88px;
width:130px;
}
.ai-software:hover .ai-software-tooltip{
font-size: 11px;
padding: 8px;
width: 240px;
text-align: left;
display: inline;
position: absolute;
background: white;
border: 1px solid #CCC;
overflow: visible;
z-index: 99999999;
}
/* Auto Installer Icons */
.ai-software-icon-wordpress {
background-position: -0px 0px;
}
.ai-software-icon-joomla {
background-position: -80px 0px;
}
.ai-software-icon-phpbb {
background-position: -160px 0px;
}
.ai-software-icon-smf {
background-position: -240px 0px;
}
.ai-software-icon-coppermine {
background-position: -320px 0px;
}
.ai-software-icon-b2evolution {
background-position: -400px 0px;
}
.ai-software-icon-mambo {
background-position: -480px 0px;
}
.ai-software-icon-mybb {
background-position: -560px 0px;
}
.ai-software-icon-oscommerce {
background-position: -640px 0px;
}
.ai-software-icon-zencart {
background-position: -720px 0px;
}
.ai-software-icon-concrete {
background-position: -800px 0px;
}
.ai-software-icon-drupal {
background-position: -880px 0px;
}
.ai-software-icon-jcow {
background-position: -960px 0px;
}
.ai-software-icon-mediawiki {
background-position: -1040px 0px;
}
.ai-software-icon-moodle {
background-position: -1120px 0px;
}
.ai-software-icon-openblog {
background-position: -1200px 0px;
}
.ai-software-icon-piwigo {
background-position: -1280px 0px;
}
.ai-software-icon-piwik {
background-position: -1360px 0px;
}
.ai-software-icon-prestashop {
background-position: -1440px 0px;
}
.ai-software-icon-punbb {
background-position: -1520px 0px;
}
.ai-software-icon-aef {
background-position: -1600px 0px;
}
.ai-software-icon-buddypress {
background-position: -1680px 0px;
}
.ai-software-icon-contao {
background-position: -1760px 0px;
}
.ai-software-icon-dotclear {
background-position: -1840px 0px;
}
.ai-software-icon-gallery3 {
background-position: -1920px 0px;
}
.ai-software-icon-lazarusgb {
background-position: -2000px 0px;
}
.ai-software-icon-osticket {
background-position: -2080px 0px;
}
.ai-software-icon-pligg {
background-position: -2160px 0px;
}
.ai-software-icon-sharetronix {
background-position: -2240px 0px;
}
.ai-software-icon-zenphoto {
background-position: -2320px 0px;
}
.ai-software-icon-cmsmadesimple {
background-position: -2400px 0px;
}
.ai-software-icon-zikula {
background-position: -2480px 0px;
}
.ai-software-icon-dokuwiki {
background-position: -2560px 0px;
}
.ai-software-icon-tinywebgallery {
background-position: -2640px 0px;
}
.ai-software-icon-limesurvey {
background-position: -2720px 0px;
}
.ai-software-icon-glfusion {
background-position: -2800px 0px;
}
.ai-software-icon-kplaylist {
background-position: -2880px 0px;
}
.ai-software-icon-podcast {
background-position: -2960px 0px;
}
.ai-software-icon-fengoffice {
background-position: -3040px 0px;
}
.ai-software-icon-gregarius {
background-position: -3120px 0px;
}
.ai-software-icon-pyrocms {
background-position: -3200px 0px;
}
.ai-software-icon-boxbilling {
background-position: -3280px 0px;
}
.ai-software-icon-chyrp {
background-position: -3360px 0px;
}
.ai-software-icon-pixie {
background-position: -3440px 0px;
}
.ai-software-icon-adaptcms {
background-position: -3520px 0px;
}
.ai-software-icon-seopanel {
background-position: -3600px 0px;
}
.ai-software-icon-websitebaker {
background-position: -3680px 0px;
}
.ai-software-icon-imm {
background-position: -3760px 0px;
}
.ai-software-icon-tikiwiki {
background-position: -3840px 0px;
}
.ai-software-icon-pivotx {
background-position: -3920px 0px;
}

.green-bar {
height: 5px;
background-color: green;
}
.yellow-bar {
height: 5px;
background-color: yellow;
}
.red-bar {
height: 5px;
background-color: red;
}
#diskUsageProgressBar,
#BandwidthProgressBar {
height: 5px;
width: 95%;
border: 1px solid #ccc ;
}

span.tree-element {
display: inline-block;
width: 16px;
height: 11px;
background-image: url(http://cpanel.main-hosting.com/themes/x1/images/tree_element.gif);
}

div.rateit
{
display: -moz-inline-box;
display: inline-block;
position: relative;
-webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-o-user-select: none;
user-select: none;
-webkit-touch-callout: none;
}

div.rateit div.rateit-range
{
position: relative;
display: -moz-inline-box;
display: inline-block;
background: url(images/star.gif);
height: 16px;
}

/* for IE 6 */
* html div.rateit, * html div.rateit div.rateit-range
{
display: inline;
}

/* for IE 7 */
* + html div.rateit, * + html div.rateit div.rateit-range
{
display: inline;
}

div.rateit div.rateit-hover, div.rateit div.rateit-selected
{
position: absolute;
left: 0px;
}

div.rateit div.rateit-hover-rtl, div.rateit div.rateit-selected-rtl
{
left: auto;
right: 0px;
}

div.rateit div.rateit-hover
{
background: url(images/star.gif) left -32px;
}

div.rateit div.rateit-hover-rtl
{
background-position: right -32px;
}

div.rateit div.rateit-selected
{
background: url(images/star.gif) left -16px;
}

div.rateit div.rateit-selected-rtl
{
background-position: right -16px;
}

div.rateit div.rateit-preset
{
background: url(images/star.gif) left -48px;
}

div.rateit div.rateit-preset-rtl
{
background: url(images/star.gif) left -48px;
}

div.rateit div.rateit-reset
{
background: url(images/del.gif) 0 0;
width: 16px;
height: 16px;
display: -moz-inline-box;
display: inline-block;
float: left;
}

div.rateit div.rateit-reset:hover
{
background-position: 0 -16px;
}

#findInput {
font-size: 11px; width:84%; display: block; float: left; padding-right: 9%;
}
#clear_findInput {
float:left; margin: 5px 0px 0px -17px; cursor: pointer; display: none;
}
.invoice_details td {
border: none !important;
}
.invoice_details {
vertical-align: top;
width: 50%;
padding: 0px;
margin: 0px;
}




/*
Document   : progressBar
Created on : 2013-02-08, 16.12.53
Author     : Zygis
Description:
Purpose of the stylesheet follows.
*/

/*
Set the container for the bar
*/
.bar {
height:20px;
width:500px;
padding:5px;
margin:0 auto;
margin-bottom:20px;
background-color:rgba(255,255,255,.1);
-webkit-box-shadow:0 1px 0 rgba(255,255,255,.03),inset 0 1px 0 rgba(0,0,0,.1);
-moz-box-shadow:0 1px 0 rgba(255,255,255,.03),inset 0 1px 0 rgba(0,0,0,.1);
-ms-box-shadow:0 1px 0 rgba(255,255,255,.03),inset 0 1px 0 rgba(0,0,0,.1);
box-shadow:0 1px 0 rgba(255,255,255,.03),inset 0 1px 0 rgba(0,0,0,.1);
}

.progressbarInfo {
width:530px;
margin:0 auto;
text-align:left;
}

/*
This is the actual bar with stripes
*/
.bar span {
display:inline-block;
height:100%;
width:100%;
border:1px solid #ff9a1a;
border-bottom-color:#ff6201;
background-color:#d3d3d3;
-webkit-box-sizing:border-box;
-moz-box-sizing:border-box;
-ms-box-sizing:border-box;
box-sizing:border-box;
background-image:
-webkit-linear-gradient(
-45deg,
rgba(255, 154, 26, 1) 25%,
transparent 25%,
transparent 50%,
rgba(255, 154, 26, 1) 50%,
rgba(255, 154, 26, 1) 75%,
transparent 75%,
transparent
);
background-image:
-moz-linear-gradient(
-45deg,
rgba(255, 154, 26, 1) 25%,
transparent 25%,
transparent 50%,
rgba(255, 154, 26, 1) 50%,
rgba(255, 154, 26, 1) 75%,
transparent 75%,
transparent
);
background-image:
-ms-linear-gradient(
-45deg,
rgba(255, 154, 26, 1) 25%,
transparent 25%,
transparent 50%,
rgba(255, 154, 26, 1) 50%,
rgba(255, 154, 26, 1) 75%,
transparent 75%,
transparent
);
background-image:
linear-gradient(
-45deg,
rgba(255, 154, 26, 1) 25%,
transparent 25%,
transparent 50%,
rgba(255, 154, 26, 1) 50%,
rgba(255, 154, 26, 1) 75%,
transparent 75%,
transparent
);
-webkit-background-size:50px 50px;
-moz-background-size:50px 50px;
-ms-background-size:50px 50px;
background-size:50px 50px;
-webkit-animation:move 2s linear infinite;
-moz-animation:move 2s linear infinite;
-ms-animation:move 2s linear infinite;
animation:move 2s linear infinite;
overflow: hidden;
-webkit-box-shadow:inset 0 10px 0 rgba(255,255,255,.2);
-moz-box-shadow:inset 0 10px 0 rgba(255,255,255,.2);
-ms-box-shadow:inset 0 10px 0 rgba(255,255,255,.2);
box-shadow:inset 0 10px 0 rgba(255,255,255,.2);
}

.ppw_join {
display: block;
background: url(http://cpanel.main-hosting.com/themes/x1/images/ppw-join-button.png) center 0px no-repeat;
width: 505px;
height: 73px;
margin: 0 auto;
color: #fff !important;
font-size: 16px;
text-decoration: none !important;
line-height: 73px;
text-shadow: 2px 2px #b47a00 !important;
}

.ppw_join:hover {
color: #fff !important;
text-shadow: 2px 2px #a36f00 !important;
text-decoration: none !important;
}

/*
Animate the stripes
*/
@-webkit-keyframes move{
0% {
background-position: 0 0;
}
100% {
background-position: 50px 50px;
}
}
@-moz-keyframes move{
0% {
background-position: 0 0;
}
100% {
background-position: 50px 50px;
}
}
@-ms-keyframes move{
0% {
background-position: 0 0;
}
100% {
background-position: 50px 50px;
}
}
@keyframes move{
0% {
background-position: 0 0;
}
100% {
background-position: 50px 50px;
}
}
    </style>