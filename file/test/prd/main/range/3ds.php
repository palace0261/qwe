<?php
$sceneUrl = isset($_GET['scene']) && filter_var($_GET['scene'], FILTER_VALIDATE_URL)
                ? $_GET['scene']
                : 'https://bolintechnology.com/wp-content/uploads/2026/03/scene-15-1.babylon';
?><html lang="ko" style="--mega-dropdown-top: 1549.921875px; height: 100%;"><head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>3D Studio</title>
        <style>
                html,body{height:100%;margin:0}
                #viewer{width:100%;height:100%;display:block}
                .controls{position:fixed;right:12px;top:12px;z-index:200;background:rgba(255,255,255,0.9);padding:8px;border-radius:6px;box-shadow:0 2px 8px rgba(0,0,0,.15)}
                .controls input{width:320px}
                .btn{margin-left:6px}
        </style>
<style>@-webkit-keyframes spin1 {                            0% { -webkit-transform: rotate(0deg);}
                            100% { -webkit-transform: rotate(360deg);}
                        }                        @keyframes spin1 {                            0% { transform: rotate(0deg);}
                            100% { transform: rotate(360deg);}
                        }</style><style>.cc-window{opacity:1;-webkit-transition:opacity 1s ease;-moz-transition:opacity 1s ease;-ms-transition:opacity 1s ease;-o-transition:opacity 1s ease;transition:opacity 1s ease}.cc-window.cc-invisible{opacity:0}.cc-animate.cc-revoke{-webkit-transition:transform 1s ease;-moz-transition:transform 1s ease;-ms-transition:transform 1s ease;-o-transition:transform 1s ease;transition:transform 1s ease}.cc-animate.cc-revoke.cc-top{transform:translateY(-2em)}.cc-animate.cc-revoke.cc-bottom{transform:translateY(2em)}.cc-animate.cc-revoke.cc-active.cc-top{transform:translateY(0)}.cc-animate.cc-revoke.cc-active.cc-bottom{transform:translateY(0)}.cc-revoke:hover{transform:translateY(0)}.cc-grower{max-height:0;overflow:hidden;-webkit-transition:max-height 1s;-moz-transition:max-height 1s;-ms-transition:max-height 1s;-o-transition:max-height 1s;transition:max-height 1s}.cc-window,.cc-revoke{position:fixed;overflow:hidden;box-sizing:border-box;font-family:Helvetica, Calibri, Arial, sans-serif;font-size:16px;line-height:1.5em;display:flex;flex-wrap:nowrap;z-index:9998}.cc-revoke{z-index:9999}.cc-window.cc-static{position:static}.cc-window.cc-floating{padding:2em;max-width:24em;flex-direction:column}.cc-window.cc-banner{padding:1em 1.8em;width:100%;flex-direction:row}.cc-revoke{padding:0.5em}.cc-revoke:hover{text-decoration:underline}.cc-header{font-size:18px;font-weight:bold}.cc-btn,.cc-link,.cc-close,.cc-revoke{cursor:pointer}.cc-link{opacity:0.8;display:inline-block;padding:0.2em;text-decoration:underline}.cc-link:hover{opacity:1}.cc-link:active,.cc-link:visited{color:initial}.cc-btn{display:block;padding:0.4em 0.8em;font-size:0.9em;font-weight:bold;border-width:2px;border-style:solid;text-align:center;white-space:nowrap}.cc-highlight .cc-btn:first-child{background-color:transparent;border-color:transparent}.cc-highlight .cc-btn:first-child:hover,.cc-highlight .cc-btn:first-child:focus{background-color:transparent;text-decoration:underline}.cc-close{display:block;position:absolute;top:0.5em;right:0.5em;font-size:1.6em;opacity:0.9;line-height:0.75}.cc-close:hover,.cc-close:focus{opacity:1}.cc-revoke.cc-top{top:0;left:3em;border-bottom-left-radius:0.5em;border-bottom-right-radius:0.5em}.cc-revoke.cc-bottom{bottom:0;left:3em;border-top-left-radius:0.5em;border-top-right-radius:0.5em}.cc-revoke.cc-left{left:3em;right:unset}.cc-revoke.cc-right{right:3em;left:unset}.cc-top{top:1em}.cc-left{left:1em}.cc-right{right:1em}.cc-bottom{bottom:1em}.cc-floating>.cc-link{margin-bottom:1em}.cc-floating .cc-message{display:block;margin-bottom:1em}.cc-window.cc-floating .cc-compliance{flex:1 0 auto}.cc-window.cc-banner{align-items:center}.cc-banner.cc-top{left:0;right:0;top:0}.cc-banner.cc-bottom{left:0;right:0;bottom:0}.cc-banner .cc-message{display:block;flex:1 1 auto;max-width:100%;margin-right:1em}.cc-compliance{display:flex;align-items:center;justify-content:space-between}.cc-floating .cc-compliance>.cc-btn{flex:1}.cc-btn+.cc-btn{margin-left:0.5em}.cc-window.cc-type-categories{display:inline-flex;flex-direction:column;overflow:visible}.cc-window.cc-type-categories .form{text-align:right}.cc-window.cc-type-categories .cc-btn{margin:0}.cc-window.cc-type-categories .cc-btn.cc-save{margin:0;display:inline-block}.cc-categories{display:inline-flex}.cc-categories .cc-category{display:flex;max-width:100%;margin:0 2px;position:relative}.cc-categories .cc-btn{border-right:none;outline:none;text-transform:capitalize}.cc-categories .cc-btn input[type=checkbox]{float:left;height:26px;width:calc( 100% - 22px);display:block;position:absolute;top:0;left:2px;cursor:pointer}.cc-categories .cc-btn:not(.cc-info):not(.cc-save){padding-left:26px}.cc-categories .cc-info{border-left:none;border-right:2px solid lightgrey;padding:4px;font-variant:all-small-caps}.cc-categories .cc-info:focus+.cc-tooltip{display:block}.cc-categories .cc-tooltip{display:none;position:absolute;z-index:3;width:190px;bottom:46px;padding:8px;border:thin solid lightgrey;box-shadow:1px 1px 4px rgba(150,150,150,0.7)}.cc-categories .cc-tooltip:after{content:"";width:10px;height:10px;transform:rotate(45deg);position:absolute;bottom:-7px;left:10px;box-shadow:2px 1px 1px rgba(200,200,200,0.5)}.cc-categories .cc-tooltip p{margin:0}@media print{.cc-window,.cc-revoke{display:none}}@media screen and (max-width: 900px){.cc-btn{white-space:normal}}@media screen and (max-width: 414px) and (orientation: portrait), screen and (max-width: 736px) and (orientation: landscape){.cc-window.cc-top{top:0}.cc-window.cc-bottom{bottom:0}.cc-window.cc-banner,.cc-window.cc-floating,.cc-window.cc-right,.cc-window.cc-left{left:0;right:0}.cc-window.cc-banner{flex-direction:column;align-items:unset}.cc-window.cc-banner .cc-compliance{flex:1 1 auto}.cc-window.cc-banner .cc-message{margin-right:0;margin-bottom:1em}.cc-window.cc-floating{max-width:none}.cc-window.cc-type-categories{flex-direction:column}.cc-window .cc-message{margin-bottom:1em}.cc-window .cc-categories{flex-direction:column;width:100%;margin-right:8px}.cc-window .cc-category{margin:4px 0}.cc-window .cc-category .cc-btn:not(.cc-info){width:calc( 100% - 16px);min-width:140px}}@media screen and (max-width: 854px){.cc-window.cc-type-categories .cc-btn.cc-save{margin:8px 0}}@media screen and (max-width: 790px){.cc-window.cc-type-categories .cc-categories{display:flex;flex-direction:column}.cc-categories .cc-category{margin:4px 0}.form{width:100%;max-width:350px}.cc-btn:not(.cc-info):not(.cc-save){width:calc( 100% - 16px)}}.cc-floating.cc-theme-classic{padding:1.2em;border-radius:5px}.cc-floating.cc-type-info.cc-theme-classic .cc-compliance{text-align:center;display:inline;flex:none}.cc-theme-classic{overflow:visible;justify-content:space-between}.cc-theme-classic .cc-btn{position:relative;border-radius:5px;outline:none}.cc-theme-classic .cc-btn:last-child{min-width:140px}.cc-theme-classic .cc-category .cc-btn{border-radius:5px 0 0 5px;padding-right:2px;padding-left:28px;font-weight:normal;border-right:none;box-sizing:border-box}.cc-theme-classic .cc-category .cc-btn input[type=checkbox]{position:absolute;left:0;top:-1px;width:100%;height:26px;opacity:0;cursor:pointer;z-index:1}.cc-theme-classic .cc-category .cc-btn input[type=checkbox]+.cc-btn-checkbox{display:block;font-size:2rem;position:absolute;top:2px;left:6px;z-index:0;outline:none}.cc-theme-classic .cc-category .cc-btn input[type=checkbox]+.cc-btn-checkbox:before{content:"\1F5F5"}.cc-theme-classic .cc-category .cc-btn input[type=checkbox]:checked+.cc-btn-checkbox:after{content:"\2713";position:absolute;top:-4px;left:0;font-size:2.3rem;text-shadow:0 1px 3px rgba(150,150,150,0.5)}.cc-theme-classic .cc-category .cc-btn.cc-info{margin:0;padding:0 4px;border-radius:0 5px 5px 0}.cc-theme-classic .cc-category .cc-btn:last-child{min-width:0}.cc-theme-classic .cc-category .cc-tooltip{border-radius:5px}.cc-theme-classic .cc-category .cc-tooltip:after{border-bottom:thin solid lightgrey;border-right:thin solid lightgrey}.cc-floating.cc-type-info.cc-theme-classic .cc-btn{display:inline-block}.cc-theme-edgeless.cc-window{padding:0}.cc-floating.cc-theme-edgeless .cc-message{margin:2em;margin-bottom:1.5em}.cc-banner.cc-theme-edgeless .cc-btn{margin:0;padding:0.8em 1.8em;height:100%}.cc-banner.cc-theme-edgeless .cc-message{margin-left:1em}.cc-floating.cc-theme-edgeless .cc-btn+.cc-btn{margin-left:0}.cc-window.cc-theme-edgeless.cc-type-categories .cc-categories .cc-btn{padding:0.4em 0.8em;padding-left:26px}.cc-window.cc-theme-edgeless.cc-type-categories .cc-categories .cc-btn.cc-info{padding:0.4em 4px}.cc-window.cc-theme-edgeless.cc-type-categories .cc-categories .cc-tooltip{border:none}
</style><style>INPUT:-webkit-autofill,SELECT:-webkit-autofill,TEXTAREA:-webkit-autofill{animation-name:onautofillstart}INPUT:not(:-webkit-autofill),SELECT:not(:-webkit-autofill),TEXTAREA:not(:-webkit-autofill){animation-name:onautofillcancel}@keyframes onautofillstart{}@keyframes onautofillcancel{}</style><style class="gtranslate_css">.elementor-widget-shortcode .gtranslate_wrapper .gt_switcher .gt_option {
	position: absolute;
	top: 100%;
	height: auto!important;
	max-width: 100%;
	border: none;
	background-color: white;
}
.elementor-widget-shortcode .gtranslate_wrapper .gt_switcher .gt_selected a {
	width: auto;
	border: none;
}
.elementor-widget-shortcode .gtranslate_wrapper .gt_switcher .nturl {
	border-bottom: 1px solid #f0f0f0;
}
.elementor-widget-shortcode .gtranslate_wrapper .gt_switcher {
	width: 35px;
}
.elementor-widget-shortcode .gtranslate_wrapper .gt_switcher .gt_selected a,
.elementor-widget-shortcode .gtranslate_wrapper .gt_switcher .nturl {
	font-size: 0;
	background: none;
	box-shadow: none;
}
.elementor-widget-shortcode .gtranslate_wrapper .gt_switcher .gt_selected {
	background: none;
}
.elementor-widget-shortcode .gtranslate_wrapper .gt_switcher .gt_selected a:after {
	display: none;
}
.elementor-widget-shortcode .gtranslate_wrapper .gt_option::-webkit-scrollbar {
    width: 3px;
}div.skiptranslate,#google_translate_element2{display:none!important}body{top:0!important}font font{background-color:transparent!important;box-shadow:none!important;position:initial!important}.gt_container--su28xk .gt_switcher{font-family:Arial;font-size:12pt;text-align:left;cursor:pointer;overflow:hidden;width:173px;line-height:0}.gt_container--su28xk .gt_switcher a{text-decoration:none;display:block;font-size:12pt;box-sizing:content-box}.gt_container--su28xk .gt_switcher a img{width:24px;height:24px;vertical-align:middle;display:inline;border:0;padding:0;margin:0;opacity:0.8}.gt_container--su28xk .gt_switcher a:hover img{opacity:1}.gt_container--su28xk .gt_switcher .gt_selected{background:#fff linear-gradient(180deg, #efefef 0%, #fff 70%);position:relative;z-index:9999}.gt_container--su28xk .gt_switcher .gt_selected a{border:1px solid #ccc;color:#666;padding:3px 5px;width:161px}.gt_container--su28xk .gt_switcher .gt_selected a:after{height:24px;display:inline-block;position:absolute;right:10px;width:15px;background-position:50%;background-size:11px;background-image:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 285 285'><path d='M282 76.5l-14.2-14.3a9 9 0 0 0-13.1 0L142.5 174.4 30.3 62.2a9 9 0 0 0-13.2 0L3 76.5a9 9 0 0 0 0 13.1l133 133a9 9 0 0 0 13.1 0l133-133a9 9 0 0 0 0-13z' style='fill:%23666'/></svg>");background-repeat:no-repeat;content:""!important;transition:all .2s}.gt_container--su28xk .gt_switcher .gt_selected a.open:after{transform:rotate(-180deg)}.gt_container--su28xk .gt_switcher .gt_selected a:hover{background:#fff}.gt_container--su28xk .gt_switcher .gt_current{display:none}.gt_container--su28xk .gt_switcher .gt_option{position:relative;z-index:9998;border-left:1px solid #ccc;border-right:1px solid #ccc;border-top:1px solid #ccc;background-color:#eee;display:none;width:171px;max-height:198px;height:0;box-sizing:content-box;overflow-y:auto;overflow-x:hidden;transition:height 0.5s ease-in-out}.gt_container--su28xk .gt_switcher .gt_option a{color:#000;padding:3px 5px}.gt_container--su28xk .gt_switcher .gt_option a:hover{background:#fff}.gt_container--su28xk .gt_switcher .gt_option::-webkit-scrollbar-track{background-color:#f5f5f5}.gt_container--su28xk .gt_switcher .gt_option::-webkit-scrollbar{width:5px}.gt_container--su28xk .gt_switcher .gt_option::-webkit-scrollbar-thumb{background-color:#888}</style><script src="https://bolintechnology.com/wp-includes/js/wp-emoji-release.min.js?ver=6.9.4" defer=""></script><style id="-2046365762"></style><link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.zZZZhVqDDCw.L.W.O/am=AAA4/d=0/rs=AN8SPfpXOODejAwfpX0HXTmGDSoEuMBUiQ/m=el_main_css"><script type="text/javascript" charset="UTF-8" src="https://translate.googleapis.com/_/translate_http/_/js/k=translate_http.tr.ko.u0N7smAArlY.O/am=AAAAAQ/d=1/exm=el_conf/ed=1/rs=AN8SPfr0hTTckUMHfVJBuqj17d6wXE5uMQ/m=el_main"></script></head>
<body class="wp-singular product-template product-template-elementor_theme single single-product postid-47240 wp-custom-logo wp-theme-bolintechnology theme-bolintechnology user-registration-page ur-settings-sidebar-show woocommerce woocommerce-page woocommerce-js product-range-ptz-camera-all-weather-indoor-outdoor-professional-ptz elementor-default elementor-kit-6 elementor-page elementor-page-47240 e--ua-blink e--ua-chrome e--ua-webkit" data-elementor-device-mode="laptop" style="position: relative; min-height: 100%; top: 0px;"><div role="dialog" aria-live="polite" aria-label="cookieconsent" aria-describedby="cookieconsent:desc" class="cc-window cc-banner cc-type-info cc-theme-block cc-bottom cc-color-override--2046365762" style=""></div>
        
        

        <script src="https://diffuser-cdn.app-us1.com/diffuser/diffuser.js" async=""></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-BSQMP8C016&amp;cx=c&amp;gtm=4e64f1"></script><script src="https://cdn.babylonjs.com/babylon.js"></script>
        <script src="https://cdn.babylonjs.com/loaders/babylonjs.loaders.min.js"></script>
        <script>
                const canvas = document.getElementById('viewer');
                const engine = new BABYLON.Engine(canvas, true, {preserveDrawingBuffer:true, stencil:true});
                let scene;
                let mainCamera;
                let mainLight;
                let currentBlobUrl = null;

                function createEmptyScene(){
                        const s = new BABYLON.Scene(engine);
                        const cam = new BABYLON.ArcRotateCamera('cam', Math.PI/2, Math.PI/2.5, 1, BABYLON.Vector3.Zero(), s);
                        cam.attachControl(canvas, true);
                        cam.lowerRadiusLimit = 0.28;
                        cam.upperRadiusLimit = 1.6;
                        mainCamera = cam;
                        const hemi = new BABYLON.HemisphericLight('hemi', new BABYLON.Vector3(0,1,0), s);
                        hemi.intensity = 1;
                        mainLight = hemi;
                        return s;
                }

                async function probeOrProxy(url){
                        try{
                                const r = await fetch(url, {method:'GET', mode:'cors'});
                                if(r.ok) return url;
                                throw new Error('HTTP '+r.status);
                        }catch(e){
                                // fallback to same-origin proxy to avoid CORS
                                return 'proxy.php?u='+encodeURIComponent(url);
                        }
                }

                async function loadScene(url){
                        if(currentBlobUrl){ URL.revokeObjectURL(currentBlobUrl); currentBlobUrl = null; }
                        if(scene){ scene.dispose(); scene = null; }
                        scene = createEmptyScene();
                        try{
                                const src = await probeOrProxy(url);
                                await BABYLON.SceneLoader.AppendAsync('', src, scene);
                                engine.runRenderLoop(()=>{ if(scene) scene.render(); });
                        }catch(e){
                                alert('씬 로드 실패: '+e.message+'\n원격 리소스가 CORS로 차단된 경우 프록시를 사용합니다.');
                        }
                }

                // 로컬 파일을 Blob URL로 로드
                async function loadFile(file){
                        if(!file) return;
                        const blobUrl = URL.createObjectURL(file);
                        currentBlobUrl = blobUrl;
                        await loadScene(blobUrl);
                }

                window.addEventListener('resize', ()=>engine.resize());

                document.getElementById('loadBtn').addEventListener('click', ()=>{
                        const url = document.getElementById('sceneUrl').value.trim();
                        if(url) loadScene(url);
                });
                document.getElementById('loadFileBtn').addEventListener('click', ()=>{
                        const f = document.getElementById('fileInput').files[0];
                        if(f) loadFile(f);
                        else alert('파일을 선택하세요.');
                });
                document.getElementById('lightRange').addEventListener('input', (e)=>{
                        const v = parseFloat(e.target.value);
                        if(mainLight) mainLight.intensity = v;
                });
                document.getElementById('applyCam').addEventListener('click', ()=>{
                        const min = parseFloat(document.getElementById('camMin').value) || 0.1;
                        const max = parseFloat(document.getElementById('camMax').value) || 10;
                        if(mainCamera){ mainCamera.lowerRadiusLimit = min; mainCamera.upperRadiusLimit = max; alert('카메라 제한 적용됨'); }
                });
                document.getElementById('resetCam').addEventListener('click', ()=>{
                        if(mainCamera){ mainCamera.setTarget(BABYLON.Vector3.Zero()); mainCamera.radius = 1; }
                });
                document.getElementById('exitBtn').addEventListener('click', ()=>{
                        if(scene) scene.dispose();
                        engine.stopRenderLoop();
                        window.location.href = '../main.html';
                });

                // 'Explore in 3D' 버튼: 제품 페이지와 동일한 씬을 로드하도록 설정
                document.getElementById('3d-model-switcher').addEventListener('click', ()=>{
                        const remote = 'https://bolintechnology.com/wp-content/uploads/2026/03/scene-15-1.babylon';
                        document.getElementById('sceneUrl').value = remote;
                        loadScene(remote);
                });

                // 초기 로드
                loadScene(document.getElementById('sceneUrl').value.trim());
        </script>



	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">		<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

	<!-- This site is optimized with the Yoast SEO Premium plugin v26.1 (Yoast SEO v27.4) - https://yoast.com/product/yoast-seo-premium-wordpress/ -->
	<title>Range PTZ Camera | Indoor &amp; Outdoor Professional PTZ</title>
	<meta name="description" content="Range is an all-weather professional PTZ camera designed for indoor and outdoor production. Featuring stabilized PTZR movement, AI tracking, and support for SDI, HDMI, and IP workflows.">
	<link rel="canonical" href="https://bolintechnology.com/product/range-ptz-camera-all-weather-indoor-outdoor-professional-ptz">
	<meta property="og:locale" content="en_US">
	<meta property="og:type" content="article">
	<meta property="og:title" content="Range PTZ Camera | All-Weather Indoor &amp; Outdoor Professional PTZ">
	<meta property="og:description" content="Range is an all-weather professional PTZ camera designed for indoor and outdoor production. Featuring stabilized PTZR movement, AI tracking, and support for SDI, HDMI, and IP workflows.">
	<meta property="og:url" content="https://bolintechnology.com/product/range-ptz-camera-all-weather-indoor-outdoor-professional-ptz">
	<meta property="og:site_name" content="BolinTechnology">
	<meta property="article:publisher" content="https://www.facebook.com/BolinTechnology/">
	<meta property="article:modified_time" content="2026-04-18T17:48:15+00:00">
	<meta property="og:image" content="https://bolintechnology.com/wp-content/uploads/2023/08/Bolin-Range-PTZ-Camera-1.1.webp">
	<meta property="og:image:width" content="1600">
	<meta property="og:image:height" content="1600">
	<meta property="og:image:type" content="image/webp">
	<meta name="twitter:card" content="summary_large_image">
	<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script src="https://diffuser-cdn.app-us1.com/diffuser/diffuser.js" async=""></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=UA-148166738-1&amp;cx=c&amp;gtm=4e64f1"></script><script type="application/ld+json" class="yoast-schema-graph">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/bolintechnology.com\/product\/range-ptz-camera-all-weather-indoor-outdoor-professional-ptz","url":"https:\/\/bolintechnology.com\/product\/range-ptz-camera-all-weather-indoor-outdoor-professional-ptz","name":"Range PTZ Camera | Indoor & Outdoor Professional PTZ","isPartOf":{"@id":"https:\/\/bolintechnology.com\/#website"},"primaryImageOfPage":{"@id":"https:\/\/bolintechnology.com\/product\/range-ptz-camera-all-weather-indoor-outdoor-professional-ptz#primaryimage"},"image":{"@id":"https:\/\/bolintechnology.com\/product\/range-ptz-camera-all-weather-indoor-outdoor-professional-ptz#primaryimage"},"thumbnailUrl":"https:\/\/bolintechnology.com\/wp-content\/uploads\/2023\/08\/Bolin-Range-PTZ-Camera-1.1.webp","datePublished":"2026-04-02T07:14:44+00:00","dateModified":"2026-04-18T17:48:15+00:00","description":"Range is an all-weather professional PTZ camera designed for indoor and outdoor production. Featuring stabilized PTZR movement, AI tracking, and support for SDI, HDMI, and IP workflows.","breadcrumb":{"@id":"https:\/\/bolintechnology.com\/product\/range-ptz-camera-all-weather-indoor-outdoor-professional-ptz#breadcrumb"},"inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/bolintechnology.com\/product\/range-ptz-camera-all-weather-indoor-outdoor-professional-ptz"]}]},{"@type":"ImageObject","inLanguage":"en-US","@id":"https:\/\/bolintechnology.com\/product\/range-ptz-camera-all-weather-indoor-outdoor-professional-ptz#primaryimage","url":"https:\/\/bolintechnology.com\/wp-content\/uploads\/2023\/08\/Bolin-Range-PTZ-Camera-1.1.webp","contentUrl":"https:\/\/bolintechnology.com\/wp-content\/uploads\/2023\/08\/Bolin-Range-PTZ-Camera-1.1.webp","width":1600,"height":1600,"caption":"Bolin Range PTZ Camera - 1.1"},{"@type":"BreadcrumbList","@id":"https:\/\/bolintechnology.com\/product\/range-ptz-camera-all-weather-indoor-outdoor-professional-ptz#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https:\/\/bolintechnology.com\/"},{"@type":"ListItem","position":2,"name":"Range PTZ Camera | All-Weather Indoor &#038; Outdoor Professional PTZ"}]},{"@type":"WebSite","@id":"https:\/\/bolintechnology.com\/#website","url":"https:\/\/bolintechnology.com\/","name":"BolinTechnology","description":"Bolin Technology Website","publisher":{"@id":"https:\/\/bolintechnology.com\/#organization"},"potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https:\/\/bolintechnology.com\/?s={search_term_string}"},"query-input":{"@type":"PropertyValueSpecification","valueRequired":true,"valueName":"search_term_string"}}],"inLanguage":"en-US"},{"@type":"Organization","@id":"https:\/\/bolintechnology.com\/#organization","name":"BolinTechnology","url":"https:\/\/bolintechnology.com\/","logo":{"@type":"ImageObject","inLanguage":"en-US","@id":"https:\/\/bolintechnology.com\/#\/schema\/logo\/image\/","url":"https:\/\/bolintechnology.com\/wp-content\/uploads\/2023\/02\/Bolin-Black-Web-1000px.webp","contentUrl":"https:\/\/bolintechnology.com\/wp-content\/uploads\/2023\/02\/Bolin-Black-Web-1000px.webp","width":852,"height":229,"caption":"BolinTechnology"},"image":{"@id":"https:\/\/bolintechnology.com\/#\/schema\/logo\/image\/"},"sameAs":["https:\/\/www.facebook.com\/BolinTechnology\/"]}]}</script>
	<!-- / Yoast SEO Premium plugin. -->


<link rel="dns-prefetch" href="//www.googletagmanager.com">
<link rel="alternate" type="application/rss+xml" title="BolinTechnology » Feed" href="https://bolintechnology.com/feed">
<link rel="alternate" type="application/rss+xml" title="BolinTechnology » Comments Feed" href="https://bolintechnology.com/comments/feed">
<link rel="alternate" type="application/rss+xml" title="BolinTechnology » Range PTZ Camera | All-Weather Indoor &amp; Outdoor Professional PTZ Comments Feed" href="https://bolintechnology.com/product/range-ptz-camera-all-weather-indoor-outdoor-professional-ptz/feed">
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="https://bolintechnology.com/api/oembed/1.0/embed?url=https%3A%2F%2Fbolintechnology.com%2Fproduct%2Frange-ptz-camera-all-weather-indoor-outdoor-professional-ptz">
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://bolintechnology.com/api/oembed/1.0/embed?url=https%3A%2F%2Fbolintechnology.com%2Fproduct%2Frange-ptz-camera-all-weather-indoor-outdoor-professional-ptz&amp;format=xml">
<style id="wp-img-auto-sizes-contain-inline-css">
img:is([sizes=auto i],[sizes^="auto," i]){contain-intrinsic-size:3000px 1500px}
/*# sourceURL=wp-img-auto-sizes-contain-inline-css */
</style>
<link rel="stylesheet" id="bolin-element-css" href="https://bolintechnology.com/wp-content/plugins/bolin-elementor-widget-pro/assets/css/frontend/bolin-element.css?ver=1.1.2" media="all">
<style id="bolin-element-inline-css">
:root{--mtz-main-color:#0097a7;--mtz-main-color-a25:rgba(0,151,167,0.25);--mtz-main-color-a60:rgba(0,151,167,0.60);--mtz-main-color-a85:rgba(0,151,167,0.85);--mtz-main-color-l05:#00aec2;--mtz-main-color-l40:#75f1ff;--mtz-main-color-l55:#c2f9ff;--mtz-main-color-d10:#006a75;--mtz-main-color-d15:#00535c;--mtz-main-color-l25-ds25:#44d4e4;--mtz-link:#1e88e5;--mtz-link-l20:#7bb9ef;}
/*# sourceURL=bolin-element-inline-css */
</style>
<link rel="stylesheet" id="product-gallery-css" href="https://bolintechnology.com/wp-content/plugins/bolin-elementor-widget-pro/assets/css/frontend/mdb/ecommerce-gallery.min.css?ver=1.1.9" media="all">
<link rel="stylesheet" id="vector_maps-css" href="https://bolintechnology.com/wp-content/plugins/bolin-elementor-widget-pro/assets/css/frontend/mdb/vector-maps.min.css?ver=1.1.9" media="all">
<link rel="stylesheet" id="multi_carousel-css" href="https://bolintechnology.com/wp-content/plugins/bolin-elementor-widget-pro/assets/css/frontend/mdb/multi-carousel.min.css?ver=1.1.9" media="all">
<style id="wp-emoji-styles-inline-css">

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
/*# sourceURL=wp-emoji-styles-inline-css */
</style>
<link rel="stylesheet" id="activecampaign-form-block-css" href="https://bolintechnology.com/wp-content/plugins/activecampaign-subscription-forms/activecampaign-form-block/build/style-index.css?ver=1775542164" media="all">
<style id="global-styles-inline-css">
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgb(6,147,227) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgb(252,185,0) 0%,rgb(255,105,0) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgb(255,105,0) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0);--wp--preset--shadow--crisp: 6px 6px 0px rgb(0, 0, 0);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-term-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-term-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
/*# sourceURL=global-styles-inline-css */
</style>
<link rel="stylesheet" id="user-registration-general-css" href="https://bolintechnology.com/wp-content/plugins/user-registration/assets/css/user-registration.css?ver=5.1.5" media="all">
<link rel="stylesheet" id="bolintechnology-style-css" href="https://bolintechnology.com/wp-content/themes/bolintechnology/style.css?ver=1.1.43" media="all">
<link rel="stylesheet" id="bolintechnology_mdb-css" href="https://bolintechnology.com/wp-content/themes/bolintechnology/assets/mdb-pro/mdb.min.css?ver=1681545891" media="all">
<link rel="stylesheet" id="bolintechnology_cookieconsent-css" href="https://bolintechnology.com/wp-content/themes/bolintechnology/assets/css/cookieconsent.min.css?ver=1691649233" media="all">
<link rel="stylesheet" href="https://bolintechnology.com/wp-content/plugins/elementor/assets/css/conditionals/dialog.min.css?ver=3.35.9"><link rel="stylesheet" id="elementor-frontend-css" href="https://bolintechnology.com/wp-content/uploads/elementor/css/custom-frontend.min.css?ver=1776346393" media="all">
<link rel="stylesheet" id="widget-image-css" href="https://bolintechnology.com/wp-content/plugins/elementor/assets/css/widget-image.min.css?ver=3.35.9" media="all">
<link rel="stylesheet" id="advanced-nav-css" href="https://bolintechnology.com/wp-content/plugins/bolin-elementor-widget-pro/assets/css/advanced-nav.css?ver=1.1.9" media="all">
<link rel="stylesheet" id="elementor-icons-shared-0-css" href="https://bolintechnology.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3" media="all">
<link rel="stylesheet" id="elementor-icons-fa-solid-css" href="https://bolintechnology.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3" media="all">
<link rel="stylesheet" id="widget-heading-css" href="https://bolintechnology.com/wp-content/plugins/elementor/assets/css/widget-heading.min.css?ver=3.35.9" media="all">
<link rel="stylesheet" id="widget-icon-list-css" href="https://bolintechnology.com/wp-content/uploads/elementor/css/custom-widget-icon-list.min.css?ver=1776346393" media="all">
<link rel="stylesheet" id="elementor-icons-css" href="https://bolintechnology.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.47.0" media="all">
<link rel="stylesheet" id="elementor-post-6-css" href="https://bolintechnology.com/wp-content/uploads/elementor/css/post-6.css?ver=1776346393" media="all">
<link rel="stylesheet" id="widget-spacer-css" href="https://bolintechnology.com/wp-content/plugins/elementor/assets/css/widget-spacer.min.css?ver=3.35.9" media="all">
<link rel="stylesheet" id="scene-viewer-css" href="https://bolintechnology.com/wp-content/plugins/bolin-elementor-widget-pro/assets/css/frontend/scene-viewer.css?ver=1.1.9" media="all">
<link rel="stylesheet" id="widget-divider-css" href="https://bolintechnology.com/wp-content/plugins/elementor/assets/css/widget-divider.min.css?ver=3.35.9" media="all">
<link rel="stylesheet" id="circular-slider-css" href="https://bolintechnology.com/wp-content/plugins/bolin-elementor-widget-pro/assets/css/frontend/circular-slider.css?ver=1776470974" media="all">
<link rel="stylesheet" id="icon-box-pro-css" href="https://bolintechnology.com/wp-content/plugins/bolin-elementor-widget-pro/assets/css/frontend/icon-box-pro.css?ver=1.1.9" media="all">
<link rel="stylesheet" id="swiper-css" href="https://bolintechnology.com/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5" media="all">
<link rel="stylesheet" id="e-swiper-css" href="https://bolintechnology.com/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css?ver=3.35.9" media="all">
<link rel="stylesheet" id="widget-slides-css" href="https://bolintechnology.com/wp-content/uploads/elementor/css/custom-pro-widget-slides.min.css?ver=1776346393" media="all">
<link rel="stylesheet" id="widget-video-css" href="https://bolintechnology.com/wp-content/plugins/elementor/assets/css/widget-video.min.css?ver=3.35.9" media="all">
<link rel="stylesheet" id="overlay-images-switcher-css" href="https://bolintechnology.com/wp-content/plugins/bolin-elementor-widget-pro/assets/css/frontend/overlay-images-switcher.css?ver=1775752174" media="all">
<link rel="stylesheet" id="sequential-video-css" href="https://bolintechnology.com/wp-content/plugins/bolin-elementor-widget-pro/assets/css/frontend/sequential-video.css?ver=1776184365" media="all">
<link rel="stylesheet" id="elementor-post-47240-css" href="https://bolintechnology.com/wp-content/uploads/elementor/css/post-47240.css?ver=1776534525" media="all">
<link rel="stylesheet" id="elementor-post-41-css" href="https://bolintechnology.com/wp-content/uploads/elementor/css/post-41.css?ver=1776610396" media="all">
<link rel="stylesheet" id="elementor-post-193-css" href="https://bolintechnology.com/wp-content/uploads/elementor/css/post-193.css?ver=1776346393" media="all"><div id="babylonjsLoadingDiv-0" style="opacity: 0; transition: opacity 1.5s; pointer-events: none; display: grid; grid-template-rows: 100%; grid-template-columns: 100%; place-items: center; background-color: black; position: absolute; left: 0px; top: 0px; width: 1261.25px; height: 1470px;"><div style="position: absolute; left: 0px; top: 50%; margin-top: 80px; width: 100%; height: 20px; font-family: Arial; font-size: 14px; color: white; text-align: center; z-index: 1;"></div><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxODAuMTcgMjA4LjA0Ij48ZGVmcz48c3R5bGU+LmNscy0xe2ZpbGw6I2ZmZjt9LmNscy0ye2ZpbGw6I2UwNjg0Yjt9LmNscy0ze2ZpbGw6I2JiNDY0Yjt9LmNscy00e2ZpbGw6I2UwZGVkODt9LmNscy01e2ZpbGw6I2Q1ZDJjYTt9PC9zdHlsZT48L2RlZnM+PHRpdGxlPkJhYnlsb25Mb2dvPC90aXRsZT48ZyBpZD0iTGF5ZXJfMiIgZGF0YS1uYW1lPSJMYXllciAyIj48ZyBpZD0iUGFnZV9FbGVtZW50cyIgZGF0YS1uYW1lPSJQYWdlIEVsZW1lbnRzIj48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik05MC4wOSwwLDAsNTJWMTU2bDkwLjA5LDUyLDkwLjA4LTUyVjUyWiIvPjxwb2x5Z29uIGNsYXNzPSJjbHMtMiIgcG9pbnRzPSIxODAuMTcgNTIuMDEgMTUxLjk3IDM1LjczIDEyNC44NSA1MS4zOSAxNTMuMDUgNjcuNjcgMTgwLjE3IDUyLjAxIi8+PHBvbHlnb24gY2xhc3M9ImNscy0yIiBwb2ludHM9IjI3LjEyIDY3LjY3IDExNy4yMSAxNS42NiA5MC4wOCAwIDAgNTIuMDEgMjcuMTIgNjcuNjciLz48cG9seWdvbiBjbGFzcz0iY2xzLTIiIHBvaW50cz0iNjEuODkgMTIwLjMgOTAuMDggMTM2LjU4IDExOC4yOCAxMjAuMyA5MC4wOCAxMDQuMDIgNjEuODkgMTIwLjMiLz48cG9seWdvbiBjbGFzcz0iY2xzLTMiIHBvaW50cz0iMTUzLjA1IDY3LjY3IDE1My4wNSAxNDAuMzcgOTAuMDggMTc2LjcyIDI3LjEyIDE0MC4zNyAyNy4xMiA2Ny42NyAwIDUyLjAxIDAgMTU2LjAzIDkwLjA4IDIwOC4wNCAxODAuMTcgMTU2LjAzIDE4MC4xNyA1Mi4wMSAxNTMuMDUgNjcuNjciLz48cG9seWdvbiBjbGFzcz0iY2xzLTMiIHBvaW50cz0iOTAuMDggNzEuNDYgNjEuODkgODcuNzQgNjEuODkgMTIwLjMgOTAuMDggMTA0LjAyIDExOC4yOCAxMjAuMyAxMTguMjggODcuNzQgOTAuMDggNzEuNDYiLz48cG9seWdvbiBjbGFzcz0iY2xzLTQiIHBvaW50cz0iMTUzLjA1IDY3LjY3IDExOC4yOCA4Ny43NCAxMTguMjggMTIwLjMgOTAuMDggMTM2LjU4IDkwLjA4IDE3Ni43MiAxNTMuMDUgMTQwLjM3IDE1My4wNSA2Ny42NyIvPjxwb2x5Z29uIGNsYXNzPSJjbHMtNSIgcG9pbnRzPSIyNy4xMiA2Ny42NyA2MS44OSA4Ny43NCA2MS44OSAxMjAuMyA5MC4wOCAxMzYuNTggOTAuMDggMTc2LjcyIDI3LjEyIDE0MC4zNyAyNy4xMiA2Ny42NyIvPjwvZz48L2c+PC9zdmc+" style="width: 150px; grid-area: 1 / 1; top: 50%; left: 50%; transform: translate(-50%, -50%); position: absolute;"><div style="width: 300px; grid-area: 1 / 1; top: 50%; left: 50%; transform: translate(-50%, -50%); position: absolute;"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzOTIgMzkyIj48ZGVmcz48c3R5bGU+LmNscy0xe2ZpbGw6I2UwNjg0Yjt9LmNscy0ye2ZpbGw6bm9uZTt9PC9zdHlsZT48L2RlZnM+PHRpdGxlPlNwaW5uZXJJY29uPC90aXRsZT48ZyBpZD0iTGF5ZXJfMiIgZGF0YS1uYW1lPSJMYXllciAyIj48ZyBpZD0iU3Bpbm5lciI+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNNDAuMjEsMTI2LjQzYzMuNy03LjMxLDcuNjctMTQuNDQsMTItMjEuMzJsMy4zNi01LjEsMy41Mi01YzEuMjMtMS42MywyLjQxLTMuMjksMy42NS00LjkxczIuNTMtMy4yMSwzLjgyLTQuNzlBMTg1LjIsMTg1LjIsMCwwLDEsODMuNCw2Ny40M2EyMDgsMjA4LDAsMCwxLDE5LTE1LjY2YzMuMzUtMi40MSw2Ljc0LTQuNzgsMTAuMjUtN3M3LjExLTQuMjgsMTAuNzUtNi4zMmM3LjI5LTQsMTQuNzMtOCwyMi41My0xMS40OSwzLjktMS43Miw3Ljg4LTMuMywxMi00LjY0YTEwNC4yMiwxMDQuMjIsMCwwLDEsMTIuNDQtMy4yMyw2Mi40NCw2Mi40NCwwLDAsMSwxMi43OC0xLjM5QTI1LjkyLDI1LjkyLDAsMCwxLDE5NiwyMS40NGE2LjU1LDYuNTUsMCwwLDEsMi4wNSw5LDYuNjYsNi42NiwwLDAsMS0xLjY0LDEuNzhsLS40MS4yOWEyMi4wNywyMi4wNywwLDAsMS01Ljc4LDMsMzAuNDIsMzAuNDIsMCwwLDEtNS42NywxLjYyLDM3LjgyLDM3LjgyLDAsMCwxLTUuNjkuNzFjLTEsMC0xLjkuMTgtMi44NS4yNmwtMi44NS4yNHEtNS43Mi41MS0xMS40OCwxLjFjLTMuODQuNC03LjcxLjgyLTExLjU4LDEuNGExMTIuMzQsMTEyLjM0LDAsMCwwLTIyLjk0LDUuNjFjLTMuNzIsMS4zNS03LjM0LDMtMTAuOTQsNC42NHMtNy4xNCwzLjUxLTEwLjYsNS41MUExNTEuNiwxNTEuNiwwLDAsMCw2OC41Niw4N0M2Ny4yMyw4OC40OCw2Niw5MCw2NC42NCw5MS41NnMtMi41MSwzLjE1LTMuNzUsNC43M2wtMy41NCw0LjljLTEuMTMsMS42Ni0yLjIzLDMuMzUtMy4zMyw1YTEyNywxMjcsMCwwLDAtMTAuOTMsMjEuNDksMS41OCwxLjU4LDAsMSwxLTMtMS4xNVM0MC4xOSwxMjYuNDcsNDAuMjEsMTI2LjQzWiIvPjxyZWN0IGNsYXNzPSJjbHMtMiIgd2lkdGg9IjM5MiIgaGVpZ2h0PSIzOTIiLz48L2c+PC9nPjwvc3ZnPg==" style="animation: 0.75s linear 0s infinite normal none running spin1; transform-origin: 50% 50%;"></div></div>
<link rel="stylesheet" id="elementor-icons-shared-1-css" href="https://bolintechnology.com/wp-content/plugins/bolin-elementor-widget-pro/assets/vendor/bolintech-design-icons/bolin-icons.css?ver=3.0.2" media="all">
<link rel="stylesheet" id="elementor-icons-bolin-icons-css" href="https://bolintechnology.com/wp-content/plugins/bolin-elementor-widget-pro/assets/vendor/bolintech-design-icons/bolin-icons.css?ver=3.0.2" media="all">
<link rel="stylesheet" id="elementor-icons-fa-brands-css" href="https://bolintechnology.com/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3" media="all">
<script src="https://bolintechnology.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
<script src="https://bolintechnology.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script src="https://bolintechnology.com/wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.min.js?ver=1.7.21-wc.10.7.0" id="wc-zoom-js" defer="" data-wp-strategy="defer"></script>
<script src="https://bolintechnology.com/wp-content/plugins/woocommerce/assets/js/flexslider/jquery.flexslider.min.js?ver=2.7.2-wc.10.7.0" id="wc-flexslider-js" defer="" data-wp-strategy="defer"></script>
<script src="https://bolintechnology.com/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.min.js?ver=4.1.1-wc.10.7.0" id="wc-photoswipe-js" defer="" data-wp-strategy="defer"></script>
<script src="https://bolintechnology.com/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.min.js?ver=4.1.1-wc.10.7.0" id="wc-photoswipe-ui-default-js" defer="" data-wp-strategy="defer"></script>
<script src="https://bolintechnology.com/wp-content/themes/bolintechnology/assets/js/util.js?ver=1751107458" id="bolintechnology_util-js"></script>
<script src="https://bolintechnology.com/wp-content/themes/bolintechnology/assets/js/frontend/cookieconsent.min.js?ver=1691649289" id="bolintechnology_cookieconsent-js"></script><style>.cc-window{opacity:1;-webkit-transition:opacity 1s ease;-moz-transition:opacity 1s ease;-ms-transition:opacity 1s ease;-o-transition:opacity 1s ease;transition:opacity 1s ease}.cc-window.cc-invisible{opacity:0}.cc-animate.cc-revoke{-webkit-transition:transform 1s ease;-moz-transition:transform 1s ease;-ms-transition:transform 1s ease;-o-transition:transform 1s ease;transition:transform 1s ease}.cc-animate.cc-revoke.cc-top{transform:translateY(-2em)}.cc-animate.cc-revoke.cc-bottom{transform:translateY(2em)}.cc-animate.cc-revoke.cc-active.cc-top{transform:translateY(0)}.cc-animate.cc-revoke.cc-active.cc-bottom{transform:translateY(0)}.cc-revoke:hover{transform:translateY(0)}.cc-grower{max-height:0;overflow:hidden;-webkit-transition:max-height 1s;-moz-transition:max-height 1s;-ms-transition:max-height 1s;-o-transition:max-height 1s;transition:max-height 1s}.cc-window,.cc-revoke{position:fixed;overflow:hidden;box-sizing:border-box;font-family:Helvetica, Calibri, Arial, sans-serif;font-size:16px;line-height:1.5em;display:flex;flex-wrap:nowrap;z-index:9998}.cc-revoke{z-index:9999}.cc-window.cc-static{position:static}.cc-window.cc-floating{padding:2em;max-width:24em;flex-direction:column}.cc-window.cc-banner{padding:1em 1.8em;width:100%;flex-direction:row}.cc-revoke{padding:0.5em}.cc-revoke:hover{text-decoration:underline}.cc-header{font-size:18px;font-weight:bold}.cc-btn,.cc-link,.cc-close,.cc-revoke{cursor:pointer}.cc-link{opacity:0.8;display:inline-block;padding:0.2em;text-decoration:underline}.cc-link:hover{opacity:1}.cc-link:active,.cc-link:visited{color:initial}.cc-btn{display:block;padding:0.4em 0.8em;font-size:0.9em;font-weight:bold;border-width:2px;border-style:solid;text-align:center;white-space:nowrap}.cc-highlight .cc-btn:first-child{background-color:transparent;border-color:transparent}.cc-highlight .cc-btn:first-child:hover,.cc-highlight .cc-btn:first-child:focus{background-color:transparent;text-decoration:underline}.cc-close{display:block;position:absolute;top:0.5em;right:0.5em;font-size:1.6em;opacity:0.9;line-height:0.75}.cc-close:hover,.cc-close:focus{opacity:1}.cc-revoke.cc-top{top:0;left:3em;border-bottom-left-radius:0.5em;border-bottom-right-radius:0.5em}.cc-revoke.cc-bottom{bottom:0;left:3em;border-top-left-radius:0.5em;border-top-right-radius:0.5em}.cc-revoke.cc-left{left:3em;right:unset}.cc-revoke.cc-right{right:3em;left:unset}.cc-top{top:1em}.cc-left{left:1em}.cc-right{right:1em}.cc-bottom{bottom:1em}.cc-floating>.cc-link{margin-bottom:1em}.cc-floating .cc-message{display:block;margin-bottom:1em}.cc-window.cc-floating .cc-compliance{flex:1 0 auto}.cc-window.cc-banner{align-items:center}.cc-banner.cc-top{left:0;right:0;top:0}.cc-banner.cc-bottom{left:0;right:0;bottom:0}.cc-banner .cc-message{display:block;flex:1 1 auto;max-width:100%;margin-right:1em}.cc-compliance{display:flex;align-items:center;justify-content:space-between}.cc-floating .cc-compliance>.cc-btn{flex:1}.cc-btn+.cc-btn{margin-left:0.5em}.cc-window.cc-type-categories{display:inline-flex;flex-direction:column;overflow:visible}.cc-window.cc-type-categories .form{text-align:right}.cc-window.cc-type-categories .cc-btn{margin:0}.cc-window.cc-type-categories .cc-btn.cc-save{margin:0;display:inline-block}.cc-categories{display:inline-flex}.cc-categories .cc-category{display:flex;max-width:100%;margin:0 2px;position:relative}.cc-categories .cc-btn{border-right:none;outline:none;text-transform:capitalize}.cc-categories .cc-btn input[type=checkbox]{float:left;height:26px;width:calc( 100% - 22px);display:block;position:absolute;top:0;left:2px;cursor:pointer}.cc-categories .cc-btn:not(.cc-info):not(.cc-save){padding-left:26px}.cc-categories .cc-info{border-left:none;border-right:2px solid lightgrey;padding:4px;font-variant:all-small-caps}.cc-categories .cc-info:focus+.cc-tooltip{display:block}.cc-categories .cc-tooltip{display:none;position:absolute;z-index:3;width:190px;bottom:46px;padding:8px;border:thin solid lightgrey;box-shadow:1px 1px 4px rgba(150,150,150,0.7)}.cc-categories .cc-tooltip:after{content:"";width:10px;height:10px;transform:rotate(45deg);position:absolute;bottom:-7px;left:10px;box-shadow:2px 1px 1px rgba(200,200,200,0.5)}.cc-categories .cc-tooltip p{margin:0}@media print{.cc-window,.cc-revoke{display:none}}@media screen and (max-width: 900px){.cc-btn{white-space:normal}}@media screen and (max-width: 414px) and (orientation: portrait), screen and (max-width: 736px) and (orientation: landscape){.cc-window.cc-top{top:0}.cc-window.cc-bottom{bottom:0}.cc-window.cc-banner,.cc-window.cc-floating,.cc-window.cc-right,.cc-window.cc-left{left:0;right:0}.cc-window.cc-banner{flex-direction:column;align-items:unset}.cc-window.cc-banner .cc-compliance{flex:1 1 auto}.cc-window.cc-banner .cc-message{margin-right:0;margin-bottom:1em}.cc-window.cc-floating{max-width:none}.cc-window.cc-type-categories{flex-direction:column}.cc-window .cc-message{margin-bottom:1em}.cc-window .cc-categories{flex-direction:column;width:100%;margin-right:8px}.cc-window .cc-category{margin:4px 0}.cc-window .cc-category .cc-btn:not(.cc-info){width:calc( 100% - 16px);min-width:140px}}@media screen and (max-width: 854px){.cc-window.cc-type-categories .cc-btn.cc-save{margin:8px 0}}@media screen and (max-width: 790px){.cc-window.cc-type-categories .cc-categories{display:flex;flex-direction:column}.cc-categories .cc-category{margin:4px 0}.form{width:100%;max-width:350px}.cc-btn:not(.cc-info):not(.cc-save){width:calc( 100% - 16px)}}.cc-floating.cc-theme-classic{padding:1.2em;border-radius:5px}.cc-floating.cc-type-info.cc-theme-classic .cc-compliance{text-align:center;display:inline;flex:none}.cc-theme-classic{overflow:visible;justify-content:space-between}.cc-theme-classic .cc-btn{position:relative;border-radius:5px;outline:none}.cc-theme-classic .cc-btn:last-child{min-width:140px}.cc-theme-classic .cc-category .cc-btn{border-radius:5px 0 0 5px;padding-right:2px;padding-left:28px;font-weight:normal;border-right:none;box-sizing:border-box}.cc-theme-classic .cc-category .cc-btn input[type=checkbox]{position:absolute;left:0;top:-1px;width:100%;height:26px;opacity:0;cursor:pointer;z-index:1}.cc-theme-classic .cc-category .cc-btn input[type=checkbox]+.cc-btn-checkbox{display:block;font-size:2rem;position:absolute;top:2px;left:6px;z-index:0;outline:none}.cc-theme-classic .cc-category .cc-btn input[type=checkbox]+.cc-btn-checkbox:before{content:"\1F5F5"}.cc-theme-classic .cc-category .cc-btn input[type=checkbox]:checked+.cc-btn-checkbox:after{content:"\2713";position:absolute;top:-4px;left:0;font-size:2.3rem;text-shadow:0 1px 3px rgba(150,150,150,0.5)}.cc-theme-classic .cc-category .cc-btn.cc-info{margin:0;padding:0 4px;border-radius:0 5px 5px 0}.cc-theme-classic .cc-category .cc-btn:last-child{min-width:0}.cc-theme-classic .cc-category .cc-tooltip{border-radius:5px}.cc-theme-classic .cc-category .cc-tooltip:after{border-bottom:thin solid lightgrey;border-right:thin solid lightgrey}.cc-floating.cc-type-info.cc-theme-classic .cc-btn{display:inline-block}.cc-theme-edgeless.cc-window{padding:0}.cc-floating.cc-theme-edgeless .cc-message{margin:2em;margin-bottom:1.5em}.cc-banner.cc-theme-edgeless .cc-btn{margin:0;padding:0.8em 1.8em;height:100%}.cc-banner.cc-theme-edgeless .cc-message{margin-left:1em}.cc-floating.cc-theme-edgeless .cc-btn+.cc-btn{margin-left:0}.cc-window.cc-theme-edgeless.cc-type-categories .cc-categories .cc-btn{padding:0.4em 0.8em;padding-left:26px}.cc-window.cc-theme-edgeless.cc-type-categories .cc-categories .cc-btn.cc-info{padding:0.4em 4px}.cc-window.cc-theme-edgeless.cc-type-categories .cc-categories .cc-tooltip{border:none}
</style>

<!-- Google tag (gtag.js) snippet added by Site Kit -->
<!-- Google Analytics snippet added by Site Kit -->
<script src="https://www.googletagmanager.com/gtag/js?id=G-BSQMP8C016" id="google_gtagjs-js" async=""></script>
<script id="google_gtagjs-js-after">
window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}
gtag("set","linker",{"domains":["bolintechnology.com"]});
gtag("js", new Date());
gtag("set", "developer_id.dZTNiMT", true);
gtag("config", "G-BSQMP8C016");
//# sourceURL=google_gtagjs-js-after
</script>
<link rel="https://api.w.org/" href="https://bolintechnology.com/api/"><link rel="alternate" title="JSON" type="application/json" href="https://bolintechnology.com/api/wp/v2/product/47240"><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://bolintechnology.com/xmlrpc.php?rsd">
<meta name="generator" content="WordPress 6.9.4">
<meta name="generator" content="WooCommerce 10.7.0">
<link rel="shortlink" href="https://bolintechnology.com/?p=47240">
<meta name="generator" content="Site Kit by Google 1.176.0">	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	
<!-- Google AdSense meta tags added by Site Kit -->
<meta name="google-adsense-platform-account" content="ca-host-pub-2644536267352236">
<meta name="google-adsense-platform-domain" content="sitekit.withgoogle.com">
<!-- End Google AdSense meta tags added by Site Kit -->
<meta name="generator" content="Elementor 3.35.9; features: additional_custom_breakpoints; settings: css_print_method-external, google_font-disabled, font_display-swap">
			<style>
				.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
				.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
					background-image: none !important;
				}
				@media screen and (max-height: 1024px) {
					.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
					.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
						background-image: none !important;
					}
				}
				@media screen and (max-height: 640px) {
					.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
					.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
						background-image: none !important;
					}
				}
			</style>
			<link rel="icon" href="https://bolintechnology.com/wp-content/uploads/2024/04/cropped-512-1-32x32.png" sizes="32x32">
<link rel="icon" href="https://bolintechnology.com/wp-content/uploads/2024/04/cropped-512-1-192x192.png" sizes="192x192">
<link rel="apple-touch-icon" href="https://bolintechnology.com/wp-content/uploads/2024/04/cropped-512-1-180x180.png">
<meta name="msapplication-TileImage" content="https://bolintechnology.com/wp-content/uploads/2024/04/cropped-512-1-270x270.png">
<style id="ur-dynamic-colors">:root {
	--ur-primary-color: #475bb2;
	--ur-primary-dark: #4052a0;
	--ur-primary-light: #ffffff;
	--ur-button-text-normal-color: #FFFFFF;
	--ur-button-text-hover-color: #FFFFFF;
	--ur-button-background-normal-color: #475bb2;
	--ur-button-background-hover-color: #38488e;
}</style><style>INPUT:-webkit-autofill,SELECT:-webkit-autofill,TEXTAREA:-webkit-autofill{animation-name:onautofillstart}INPUT:not(:-webkit-autofill),SELECT:not(:-webkit-autofill),TEXTAREA:not(:-webkit-autofill){animation-name:onautofillcancel}@keyframes onautofillstart{}@keyframes onautofillcancel{}</style><style class="gtranslate_css">.elementor-widget-shortcode .gtranslate_wrapper .gt_switcher .gt_option {
	position: absolute;
	top: 100%;
	height: auto!important;
	max-width: 100%;
	border: none;
	background-color: white;
}
.elementor-widget-shortcode .gtranslate_wrapper .gt_switcher .gt_selected a {
	width: auto;
	border: none;
}
.elementor-widget-shortcode .gtranslate_wrapper .gt_switcher .nturl {
	border-bottom: 1px solid #f0f0f0;
}
.elementor-widget-shortcode .gtranslate_wrapper .gt_switcher {
	width: 35px;
}
.elementor-widget-shortcode .gtranslate_wrapper .gt_switcher .gt_selected a,
.elementor-widget-shortcode .gtranslate_wrapper .gt_switcher .nturl {
	font-size: 0;
	background: none;
	box-shadow: none;
}
.elementor-widget-shortcode .gtranslate_wrapper .gt_switcher .gt_selected {
	background: none;
}
.elementor-widget-shortcode .gtranslate_wrapper .gt_switcher .gt_selected a:after {
	display: none;
}
.elementor-widget-shortcode .gtranslate_wrapper .gt_option::-webkit-scrollbar {
    width: 3px;
}div.skiptranslate,#google_translate_element2{display:none!important}body{top:0!important}font font{background-color:transparent!important;box-shadow:none!important;position:initial!important}.gt_container--su28xk .gt_switcher{font-family:Arial;font-size:12pt;text-align:left;cursor:pointer;overflow:hidden;width:173px;line-height:0}.gt_container--su28xk .gt_switcher a{text-decoration:none;display:block;font-size:12pt;box-sizing:content-box}.gt_container--su28xk .gt_switcher a img{width:24px;height:24px;vertical-align:middle;display:inline;border:0;padding:0;margin:0;opacity:0.8}.gt_container--su28xk .gt_switcher a:hover img{opacity:1}.gt_container--su28xk .gt_switcher .gt_selected{background:#fff linear-gradient(180deg, #efefef 0%, #fff 70%);position:relative;z-index:9999}.gt_container--su28xk .gt_switcher .gt_selected a{border:1px solid #ccc;color:#666;padding:3px 5px;width:161px}.gt_container--su28xk .gt_switcher .gt_selected a:after{height:24px;display:inline-block;position:absolute;right:10px;width:15px;background-position:50%;background-size:11px;background-image:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 285 285'><path d='M282 76.5l-14.2-14.3a9 9 0 0 0-13.1 0L142.5 174.4 30.3 62.2a9 9 0 0 0-13.2 0L3 76.5a9 9 0 0 0 0 13.1l133 133a9 9 0 0 0 13.1 0l133-133a9 9 0 0 0 0-13z' style='fill:%23666'/></svg>");background-repeat:no-repeat;content:""!important;transition:all .2s}.gt_container--su28xk .gt_switcher .gt_selected a.open:after{transform:rotate(-180deg)}.gt_container--su28xk .gt_switcher .gt_selected a:hover{background:#fff}.gt_container--su28xk .gt_switcher .gt_current{display:none}.gt_container--su28xk .gt_switcher .gt_option{position:relative;z-index:9998;border-left:1px solid #ccc;border-right:1px solid #ccc;border-top:1px solid #ccc;background-color:#eee;display:none;width:171px;max-height:198px;height:0;box-sizing:content-box;overflow-y:auto;overflow-x:hidden;transition:height 0.5s ease-in-out}.gt_container--su28xk .gt_switcher .gt_option a{color:#000;padding:3px 5px}.gt_container--su28xk .gt_switcher .gt_option a:hover{background:#fff}.gt_container--su28xk .gt_switcher .gt_option::-webkit-scrollbar-track{background-color:#f5f5f5}.gt_container--su28xk .gt_switcher .gt_option::-webkit-scrollbar{width:5px}.gt_container--su28xk .gt_switcher .gt_option::-webkit-scrollbar-thumb{background-color:#888}</style><script src="https://bolintechnology.com/wp-includes/js/wp-emoji-release.min.js?ver=6.9.4" defer=""></script>

		<header data-elementor-type="header" data-elementor-id="41" class="elementor elementor-41 elementor-location-header" data-elementor-post-type="elementor_library">
					<header class="elementor-section elementor-top-section elementor-element elementor-element-24ff2fb2 elementor-section-content-middle bolin-sticky elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="24ff2fb2" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;}" style="top: 0px;">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6a395ae9" data-id="6a395ae9" data-element_type="column" data-e-type="column">
			
		</div>
					</div>
		</header>
				</header>
		
	<main id="primary" class="site-main">

		<div class="woocommerce">			<div class="single-product" data-product-page-preselected-id="0">
				<div class="woocommerce-notices-wrapper"></div><div id="product-47240" class="product type-product post-47240 status-publish first instock product_cat-bolin-image-block product_cat-pov-broadcast product_cat-industrial-monitoring product_cat-house-of-worship product_cat-corporate-enterprise product_cat-broadcast-live-production product_cat-broadcast product_cat-aerospace product_cat-4k-ultra-high-definition product_cat-situational-awareness product_cat-ip-tv product_cat-fpga-based product_cat-srt product_cat-rtsp product_cat-rtmp product_cat-h-264-h-265 product_cat-4k60 product_cat-20x product_cat-sports product_cat-traffic-its product_cat-outdoor-ptz product_cat-red-line product_cat-up-to-4k60 product_cat-fast-hevc-av-over-ip-ultral-low-latency product_cat-fast-hevc-codec product_cat-poe-power product_cat-4k-camera-line product_cat-4k-ip product_cat-avoip-ultra-low-latency product_cat-camera product_cat-4k60-video-resolutin product_cat-outdoor-ptz-2 product_cat-ex-ultra product_cat-audio-over-sdi product_cat-ptz product_cat-image-stabilizer product_cat-genlock product_cat-outdoor-ip67 product_cat-outdoor product_cat-corrosion-resistant product_cat-balance-audio-out product_cat-balance-audio-in product_cat-rain-wiper product_cat-audio-over-ip product_cat-audio-over-hdmi product_cat-24vac-24vdc product_cat-fast-hevc product_cat-ultra-low-latency-product-line product_cat-ptz-camera product_cat-fpga product_cat-color-matrix product_cat-handle-built-in product_cat-trace-memory product_cat-ip-onvif product_cat-ir-remote product_cat-rs232 product_cat-rs422-485 product_cat-visca-over-ip product_cat-freed product_cat-visca product_cat-12g-sdi product_cat-hdmi-2-0 product_cat-ip-streaming product_cat-optical-sdi-video product_cat-true-dual-output has-post-thumbnail shipping-taxable product-type-simple">

	
	
			<div data-elementor-type="product-post" data-elementor-id="47240" class="elementor elementor-47240" data-elementor-post-type="product">
						<section class="elementor-section elementor-top-section elementor-element elementor-element-f792e68 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f792e68" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-69d39be" data-id="69d39be" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						
				<div class="elementor-element elementor-element-25f6b559 elementor-widget elementor-widget-bolintech-heading" data-id="25f6b559" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-heading.default">
				<div class="elementor-widget-container">
					<h2 class="title">Range</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-bf550a2 elementor-widget elementor-widget-bolintech-heading" data-id="bf550a2" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-heading.default">
				<div class="elementor-widget-container">
					<h1 class="title">All Weather 4K60 PTZ Camera</h1>				</div>
				</div>
				<div class="elementor-element elementor-element-ac8cc34 elementor-widget elementor-widget-bolintech-heading" data-id="ac8cc34" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-heading.default">
				<div class="elementor-widget-container">
					<p class="title visuallyhidden">Bolin's Range PTZ camera is designed to capture professional video in places traditional PTZ cameras cannot easily reach. Built as an anywhere camera, Range combines the portability of a compact production camera with the durability needed for challenging environments. From sports venues and live events to houses of worship, theatres, and corporate productions, Range delivers reliable performance wherever production needs to go.

Range features a 4K60 imaging system that captures sharp, detailed video with smooth motion for live production, streaming, and broadcast workflows. Its industry-leading PTZ speeds of up to 300° per second allow operators to reposition the camera instantly for dynamic coverage, while the 270° roll axis enables creative camera angles and flexible mounting options not typically possible with traditional PTZ cameras. Gyro stabilization helps maintain stable images in environments where vibration or movement can affect camera positioning.

Designed for modern production environments, Range supports both IP and baseband workflows, including NDI HX3, SRT, RTSP, and RTMP streaming, alongside 12G-SDI, HDMI, and USB-C (UVC) outputs for flexible integration into broadcast systems, AV installations, and direct connection to computers for streaming. Timecode support allows the camera to synchronize with multi-camera productions, ensuring reliable timing across complex live environments.

Practical design features such as an integrated LCD screen, built-in WiFi, accessory mounting points, and local recording to MicroSD make Range easy to deploy and operate in the field. Combined with its portable design and flexible mounting capabilities, the camera can be quickly installed in venues, production spaces, or temporary setups.

From stadiums and concert venues to theatres and corporate events, the Bolin Range PTZ camera provides a flexible, high performance solution for productions that demand mobility, durability, and professional image quality.</p>				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-3831d36d model-image-switch elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3831d36d" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-36570277" data-id="36570277" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-785aae5 elementor-widget elementor-widget-bolintech-scene-viewer" data-id="785aae5" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-scene-viewer.default">
				<div class="elementor-widget-container">
					        
        				</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-0338f0a elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0338f0a" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-4c08734 3d-model-switcher" data-id="4c08734" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-ae16478 elementor-widget__width-auto model-button elementor-widget elementor-widget-button" data-id="ae16478" data-element_type="widget" data-e-type="widget" data-target="bolin-scene-wrapper" data-widget_type="button.default">
				<div class="elementor-widget-container">
									<div class="elementor-button-wrapper">
					<a class="elementor-button elementor-size-sm" role="button" id="3d-model-switcher">
						<span class="elementor-button-content-wrapper">
									<span class="elementor-button-text">Explore in 3D</span>
					</span>
					</a>
				</div>
								</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-39d32c4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="39d32c4" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-26aa2be" data-id="26aa2be" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-4e4a89e6 elementor-widget__width-initial elementor-widget elementor-widget-bolintech-product-gallery" data-id="4e4a89e6" data-element_type="widget" data-e-type="widget" data-settings="{&quot;columns&quot;:12,&quot;columns_tablet&quot;:&quot;7&quot;,&quot;columns_mobile&quot;:4}" data-widget_type="bolintech-product-gallery.default">
				<div class="elementor-widget-container">
								<div class="ecommerce-gallery" data-mdb-zoom-effect="false" data-mdb-auto-height="true">
				<div class="row">
											<div class="col-12 mb-1">
							<div class="lightbox" data-id="lightbox-r8iw0251d"><img src="https://bolintechnology.com/wp-content/uploads/2023/08/Bolin-Range-PTZ-Camera-1.1.webp" alt="Bolin Range PTZ Camera - 1.1" class="ecommerce-gallery-main-img w-100" style="height: auto;"><img src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-3.2.webp" alt="Bolin Range PTZ Camera - 3.2" class="ecommerce-gallery-main-img w-100" style="height: auto;"><img src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-8.2.webp" alt="Bolin Range PTZ Camera - 8.2" class="ecommerce-gallery-main-img w-100" style="height: auto;"><img src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-5.2.webp" alt="Bolin Range PTZ Camera - 5.2" class="ecommerce-gallery-main-img w-100 active" style="height: auto;"><img src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-7.2.webp" alt="Bolin Range PTZ Camera - 7.2" class="ecommerce-gallery-main-img w-100" style="height: auto;"><img src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-4.2.webp" alt="Bolin Range PTZ Camera - 4.2" class="ecommerce-gallery-main-img w-100" style="height: auto;"><img src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-1.2.webp" alt="Bolin Range PTZ Camera - 1.2" class="ecommerce-gallery-main-img w-100" style="height: auto;"><img src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-4.1.webp" alt="Bolin Range PTZ Camera - 4.1" class="ecommerce-gallery-main-img w-100" style="height: auto;"><img src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-5.1.webp" alt="Bolin Range PTZ Camera - 5.1" class="ecommerce-gallery-main-img w-100" style="height: auto;"><img src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-2.1.webp" alt="Bolin Range PTZ Camera - 2.1" class="ecommerce-gallery-main-img w-100" style="height: auto;"></div>
						</div>
						<div class="ecommerce-gallery-item mt-1">
							<img decoding="async" width="300" height="300" src="https://bolintechnology.com/wp-content/uploads/2023/08/Bolin-Range-PTZ-Camera-1.1-300x300.webp" class="w-100" alt="Bolin Range PTZ Camera - 1.1" data-mdb-img="https://bolintechnology.com/wp-content/uploads/2023/08/Bolin-Range-PTZ-Camera-1.1.webp" srcset="https://bolintechnology.com/wp-content/uploads/2023/08/Bolin-Range-PTZ-Camera-1.1-300x300.webp 300w, https://bolintechnology.com/wp-content/uploads/2023/08/Bolin-Range-PTZ-Camera-1.1-768x768.webp 768w, https://bolintechnology.com/wp-content/uploads/2023/08/Bolin-Range-PTZ-Camera-1.1-12x12.webp 12w, https://bolintechnology.com/wp-content/uploads/2023/08/Bolin-Range-PTZ-Camera-1.1-600x600.webp 600w, https://bolintechnology.com/wp-content/uploads/2023/08/Bolin-Range-PTZ-Camera-1.1-100x100.webp 100w, https://bolintechnology.com/wp-content/uploads/2023/08/Bolin-Range-PTZ-Camera-1.1.webp 1600w" sizes="(max-width: 300px) 100vw, 300px">						</div>
													<div class="ecommerce-gallery-item mt-1">
								<img decoding="async" width="300" height="300" src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-3.2-300x300.webp" class="w-100" alt="Bolin Range PTZ Camera - 3.2" data-mdb-img="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-3.2.webp" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-3.2-300x300.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-3.2-768x768.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-3.2-12x12.webp 12w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-3.2-600x600.webp 600w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-3.2-100x100.webp 100w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-3.2.webp 1600w" sizes="(max-width: 300px) 100vw, 300px">							</div>
												<div class="ecommerce-gallery-item mt-1">
								<img loading="lazy" decoding="async" width="300" height="300" src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-8.2-300x300.webp" class="w-100" alt="Bolin Range PTZ Camera - 8.2" data-mdb-img="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-8.2.webp" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-8.2-300x300.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-8.2-768x768.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-8.2-12x12.webp 12w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-8.2-600x600.webp 600w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-8.2-100x100.webp 100w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-8.2.webp 1600w" sizes="auto, (max-width: 300px) 100vw, 300px">							</div>
												<div class="ecommerce-gallery-item mt-1">
								<img loading="lazy" decoding="async" width="300" height="300" src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-5.2-300x300.webp" class="w-100 active" alt="Bolin Range PTZ Camera - 5.2" data-mdb-img="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-5.2.webp" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-5.2-300x300.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-5.2-768x768.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-5.2-12x12.webp 12w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-5.2-600x600.webp 600w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-5.2-100x100.webp 100w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-5.2.webp 1600w" sizes="auto, (max-width: 300px) 100vw, 300px">							</div>
												<div class="ecommerce-gallery-item mt-1">
								<img loading="lazy" decoding="async" width="300" height="300" src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-7.2-300x300.webp" class="w-100" alt="Bolin Range PTZ Camera - 7.2" data-mdb-img="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-7.2.webp" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-7.2-300x300.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-7.2-768x768.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-7.2-12x12.webp 12w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-7.2-600x600.webp 600w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-7.2-100x100.webp 100w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-7.2.webp 1600w" sizes="auto, (max-width: 300px) 100vw, 300px">							</div>
												<div class="ecommerce-gallery-item mt-1">
								<img loading="lazy" decoding="async" width="300" height="300" src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-4.2-300x300.webp" class="w-100" alt="Bolin Range PTZ Camera - 4.2" data-mdb-img="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-4.2.webp" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-4.2-300x300.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-4.2-768x768.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-4.2-12x12.webp 12w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-4.2-600x600.webp 600w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-4.2-100x100.webp 100w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-4.2.webp 1600w" sizes="auto, (max-width: 300px) 100vw, 300px">							</div>
												<div class="ecommerce-gallery-item mt-1">
								<img loading="lazy" decoding="async" width="300" height="300" src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-1.2-300x300.webp" class="w-100" alt="Bolin Range PTZ Camera - 1.2" data-mdb-img="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-1.2.webp" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-1.2-300x300.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-1.2-768x768.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-1.2-12x12.webp 12w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-1.2-600x600.webp 600w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-1.2-100x100.webp 100w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-1.2.webp 1600w" sizes="auto, (max-width: 300px) 100vw, 300px">							</div>
												<div class="ecommerce-gallery-item mt-1">
								<img loading="lazy" decoding="async" width="300" height="300" src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-4.1-300x300.webp" class="w-100" alt="Bolin Range PTZ Camera - 4.1" data-mdb-img="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-4.1.webp" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-4.1-300x300.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-4.1-768x768.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-4.1-12x12.webp 12w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-4.1-600x600.webp 600w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-4.1-100x100.webp 100w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-4.1.webp 1600w" sizes="auto, (max-width: 300px) 100vw, 300px">							</div>
												<div class="ecommerce-gallery-item mt-1">
								<img loading="lazy" decoding="async" width="300" height="300" src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-5.1-300x300.webp" class="w-100" alt="Bolin Range PTZ Camera - 5.1" data-mdb-img="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-5.1.webp" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-5.1-300x300.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-5.1-768x768.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-5.1-12x12.webp 12w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-5.1-600x600.webp 600w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-5.1-100x100.webp 100w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-5.1.webp 1600w" sizes="auto, (max-width: 300px) 100vw, 300px">							</div>
												<div class="ecommerce-gallery-item mt-1">
								<img loading="lazy" decoding="async" width="300" height="300" src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-2.1-300x300.webp" class="w-100" alt="Bolin Range PTZ Camera - 2.1" data-mdb-img="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-2.1.webp" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-2.1-300x300.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-2.1-768x768.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-2.1-12x12.webp 12w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-2.1-600x600.webp 600w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-2.1-100x100.webp 100w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-2.1.webp 1600w" sizes="auto, (max-width: 300px) 100vw, 300px">							</div>
									</div>
			</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-cac9c8c elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="cac9c8c" data-element_type="widget" data-e-type="widget" data-widget_type="divider.default">
				<div class="elementor-widget-container">
							<div class="elementor-divider">
			<span class="elementor-divider-separator">
						</span>
		</div>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-2a2a412 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2a2a412" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
							<div class="elementor-background-overlay"></div>
							<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-43ad7e8" data-id="43ad7e8" data-element_type="column" data-e-type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-2ddfd1f elementor-widget elementor-widget-bolintech-circular-slider" data-id="2ddfd1f" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-circular-slider.default">
				<div class="elementor-widget-container">
					        <div class="css-ring-slider" id="css-ring-slider-2ddfd1f" data-auto-rotate="true" data-auto-speed="2500" data-pause-hover="false" data-total="16" role="region" aria-label="Slider">

            <!-- Stage: ring items + centre panel -->
            <div class="css-ring-slider__stage" style="display: grid; gap: var(--css-item-gap);">

                                <div class="css-ring-slider__item" data-index="0" data-label="Auditoriums" role="button" tabindex="0" aria-label="Auditoriums" style="grid-area: 1 / 1;">
                    <div class="css-ring-slider__thumb">
                        <img loading="lazy" decoding="async" width="800" height="450" src="https://bolintechnology.com/wp-content/uploads/2026/03/Auditoriums-1.webp" class="css-ring-slider__img" alt="Auditoriums" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Auditoriums-1.webp 800w, https://bolintechnology.com/wp-content/uploads/2026/03/Auditoriums-1-768x432.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Auditoriums-1-18x10.webp 18w, https://bolintechnology.com/wp-content/uploads/2026/03/Auditoriums-1-300x169.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Auditoriums-1-600x338.webp 600w" sizes="auto, (max-width: 800px) 100vw, 800px">                    </div>
                </div>
                                <div class="css-ring-slider__item" data-index="1" data-label="Arenas" role="button" tabindex="0" aria-label="Arenas" style="grid-area: 1 / 2;">
                    <div class="css-ring-slider__thumb">
                        <img loading="lazy" decoding="async" width="800" height="450" src="https://bolintechnology.com/wp-content/uploads/2026/03/Arenas-2.11P.webp" class="css-ring-slider__img" alt="Arenas" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Arenas-2.11P.webp 800w, https://bolintechnology.com/wp-content/uploads/2026/03/Arenas-2.11P-768x432.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Arenas-2.11P-18x10.webp 18w, https://bolintechnology.com/wp-content/uploads/2026/03/Arenas-2.11P-300x169.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Arenas-2.11P-600x338.webp 600w" sizes="auto, (max-width: 800px) 100vw, 800px">                    </div>
                </div>
                                <div class="css-ring-slider__item" data-index="2" data-label="Cold Climate Environments" role="button" tabindex="0" aria-label="Cold Climate Environments" style="grid-area: 1 / 3;">
                    <div class="css-ring-slider__thumb">
                        <img loading="lazy" decoding="async" width="800" height="450" src="https://bolintechnology.com/wp-content/uploads/2026/03/Cold-Climate-Environments-5.webp" class="css-ring-slider__img" alt="Cold Climate Environments" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Cold-Climate-Environments-5.webp 800w, https://bolintechnology.com/wp-content/uploads/2026/03/Cold-Climate-Environments-5-768x432.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Cold-Climate-Environments-5-18x10.webp 18w, https://bolintechnology.com/wp-content/uploads/2026/03/Cold-Climate-Environments-5-300x169.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Cold-Climate-Environments-5-600x338.webp 600w" sizes="auto, (max-width: 800px) 100vw, 800px">                    </div>
                </div>
                                <div class="css-ring-slider__item" data-index="3" data-label="Corporate Conferences" role="button" tabindex="0" aria-label="Corporate Conferences" style="grid-area: 1 / 4;">
                    <div class="css-ring-slider__thumb">
                        <img loading="lazy" decoding="async" width="800" height="450" src="https://bolintechnology.com/wp-content/uploads/2026/03/Corporate-Congferences-02.webp" class="css-ring-slider__img" alt="Corporate Conferences" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Corporate-Congferences-02.webp 800w, https://bolintechnology.com/wp-content/uploads/2026/03/Corporate-Congferences-02-768x432.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Corporate-Congferences-02-18x10.webp 18w, https://bolintechnology.com/wp-content/uploads/2026/03/Corporate-Congferences-02-300x169.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Corporate-Congferences-02-600x338.webp 600w" sizes="auto, (max-width: 800px) 100vw, 800px">                    </div>
                </div>
                                <div class="css-ring-slider__item" data-index="4" data-label="Concerts" role="button" tabindex="0" aria-label="Concerts" style="grid-area: 1 / 5;">
                    <div class="css-ring-slider__thumb">
                        <img loading="lazy" decoding="async" width="800" height="450" src="https://bolintechnology.com/wp-content/uploads/2026/03/Concert3.webp" class="css-ring-slider__img" alt="Concerts" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Concert3.webp 800w, https://bolintechnology.com/wp-content/uploads/2026/03/Concert3-768x432.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Concert3-18x10.webp 18w, https://bolintechnology.com/wp-content/uploads/2026/03/Concert3-300x169.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Concert3-600x338.webp 600w" sizes="auto, (max-width: 800px) 100vw, 800px">                    </div>
                </div>
                                <div class="css-ring-slider__item" data-index="5" data-label="Education" role="button" tabindex="0" aria-label="Education" style="grid-area: 1 / 6;">
                    <div class="css-ring-slider__thumb">
                        <img loading="lazy" decoding="async" width="800" height="450" src="https://bolintechnology.com/wp-content/uploads/2026/03/Education-01.webp" class="css-ring-slider__img" alt="Education" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Education-01.webp 800w, https://bolintechnology.com/wp-content/uploads/2026/03/Education-01-768x432.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Education-01-18x10.webp 18w, https://bolintechnology.com/wp-content/uploads/2026/03/Education-01-300x169.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Education-01-600x338.webp 600w" sizes="auto, (max-width: 800px) 100vw, 800px">                    </div>
                </div>
                                <div class="css-ring-slider__item" data-index="6" data-label="High Heat Environments" role="button" tabindex="0" aria-label="High Heat Environments" style="grid-area: 1 / 7;">
                    <div class="css-ring-slider__thumb">
                        <img loading="lazy" decoding="async" width="800" height="450" src="https://bolintechnology.com/wp-content/uploads/2026/03/High-Heat-Environments-1.webp" class="css-ring-slider__img" alt="High Heat Environments" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/High-Heat-Environments-1.webp 800w, https://bolintechnology.com/wp-content/uploads/2026/03/High-Heat-Environments-1-768x432.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/High-Heat-Environments-1-18x10.webp 18w, https://bolintechnology.com/wp-content/uploads/2026/03/High-Heat-Environments-1-300x169.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/High-Heat-Environments-1-600x338.webp 600w" sizes="auto, (max-width: 800px) 100vw, 800px">                    </div>
                </div>
                                <div class="css-ring-slider__item" data-index="7" data-label="Houses of Worship" role="button" tabindex="0" aria-label="Houses of Worship" style="grid-area: 2 / 7;">
                    <div class="css-ring-slider__thumb">
                        <img loading="lazy" decoding="async" width="800" height="450" src="https://bolintechnology.com/wp-content/uploads/2026/03/Houses-of-Worship-03.webp" class="css-ring-slider__img" alt="Houses of Worship" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Houses-of-Worship-03.webp 800w, https://bolintechnology.com/wp-content/uploads/2026/03/Houses-of-Worship-03-768x432.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Houses-of-Worship-03-18x10.webp 18w, https://bolintechnology.com/wp-content/uploads/2026/03/Houses-of-Worship-03-300x169.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Houses-of-Worship-03-600x338.webp 600w" sizes="auto, (max-width: 800px) 100vw, 800px">                    </div>
                </div>
                                <div class="css-ring-slider__item" data-index="8" data-label="Mobile Units" role="button" tabindex="0" aria-label="Mobile Units" style="grid-area: 3 / 7;">
                    <div class="css-ring-slider__thumb">
                        <img loading="lazy" decoding="async" width="800" height="450" src="https://bolintechnology.com/wp-content/uploads/2026/03/Mobile-Units-02.webp" class="css-ring-slider__img" alt="Mobile Units" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Mobile-Units-02.webp 800w, https://bolintechnology.com/wp-content/uploads/2026/03/Mobile-Units-02-768x432.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Mobile-Units-02-18x10.webp 18w, https://bolintechnology.com/wp-content/uploads/2026/03/Mobile-Units-02-300x169.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Mobile-Units-02-600x338.webp 600w" sizes="auto, (max-width: 800px) 100vw, 800px">                    </div>
                </div>
                                <div class="css-ring-slider__item" data-index="9" data-label="Performing Arts Centers" role="button" tabindex="0" aria-label="Performing Arts Centers" style="grid-area: 3 / 6;">
                    <div class="css-ring-slider__thumb">
                        <img loading="lazy" decoding="async" width="800" height="450" src="https://bolintechnology.com/wp-content/uploads/2026/03/Performing-Art-Centers-2.webp" class="css-ring-slider__img" alt="Performing Arts Centers" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Performing-Art-Centers-2.webp 800w, https://bolintechnology.com/wp-content/uploads/2026/03/Performing-Art-Centers-2-768x432.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Performing-Art-Centers-2-18x10.webp 18w, https://bolintechnology.com/wp-content/uploads/2026/03/Performing-Art-Centers-2-300x169.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Performing-Art-Centers-2-600x338.webp 600w" sizes="auto, (max-width: 800px) 100vw, 800px">                    </div>
                </div>
                                <div class="css-ring-slider__item is-active" data-index="10" data-label="Rentals" role="button" tabindex="0" aria-label="Rentals" style="grid-area: 3 / 5;" aria-selected="true">
                    <div class="css-ring-slider__thumb">
                        <img loading="lazy" decoding="async" width="800" height="450" src="https://bolintechnology.com/wp-content/uploads/2026/03/Rentals-01.webp" class="css-ring-slider__img" alt="Rentals" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Rentals-01.webp 800w, https://bolintechnology.com/wp-content/uploads/2026/03/Rentals-01-768x432.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Rentals-01-18x10.webp 18w, https://bolintechnology.com/wp-content/uploads/2026/03/Rentals-01-300x169.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Rentals-01-600x338.webp 600w" sizes="auto, (max-width: 800px) 100vw, 800px">                    </div>
                </div>
                                <div class="css-ring-slider__item" data-index="11" data-label="Remote Production" role="button" tabindex="0" aria-label="Remote Production" style="grid-area: 3 / 4;">
                    <div class="css-ring-slider__thumb">
                        <img loading="lazy" decoding="async" width="800" height="450" src="https://bolintechnology.com/wp-content/uploads/2026/03/Remote-Production-01.webp" class="css-ring-slider__img" alt="Remote Production" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Remote-Production-01.webp 800w, https://bolintechnology.com/wp-content/uploads/2026/03/Remote-Production-01-768x432.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Remote-Production-01-18x10.webp 18w, https://bolintechnology.com/wp-content/uploads/2026/03/Remote-Production-01-300x169.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Remote-Production-01-600x338.webp 600w" sizes="auto, (max-width: 800px) 100vw, 800px">                    </div>
                </div>
                                <div class="css-ring-slider__item" data-index="12" data-label="Sports" role="button" tabindex="0" aria-label="Sports" style="grid-area: 3 / 3;">
                    <div class="css-ring-slider__thumb">
                        <img loading="lazy" decoding="async" width="800" height="450" src="https://bolintechnology.com/wp-content/uploads/2026/03/Sports-F1.webp" class="css-ring-slider__img" alt="Sports" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Sports-F1.webp 800w, https://bolintechnology.com/wp-content/uploads/2026/03/Sports-F1-768x432.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Sports-F1-18x10.webp 18w, https://bolintechnology.com/wp-content/uploads/2026/03/Sports-F1-300x169.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Sports-F1-600x338.webp 600w" sizes="auto, (max-width: 800px) 100vw, 800px">                    </div>
                </div>
                                <div class="css-ring-slider__item" data-index="13" data-label="Stadiums" role="button" tabindex="0" aria-label="Stadiums" style="grid-area: 3 / 2;">
                    <div class="css-ring-slider__thumb">
                        <img loading="lazy" decoding="async" width="800" height="450" src="https://bolintechnology.com/wp-content/uploads/2026/03/Stadiums.jpg" class="css-ring-slider__img" alt="Stadiums" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Stadiums.jpg 800w, https://bolintechnology.com/wp-content/uploads/2026/03/Stadiums-768x432.jpg 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Stadiums-18x10.jpg 18w, https://bolintechnology.com/wp-content/uploads/2026/03/Stadiums-300x169.jpg 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Stadiums-600x338.jpg 600w" sizes="auto, (max-width: 800px) 100vw, 800px">                    </div>
                </div>
                                <div class="css-ring-slider__item" data-index="14" data-label="Studios" role="button" tabindex="0" aria-label="Studios" style="grid-area: 3 / 1;">
                    <div class="css-ring-slider__thumb">
                        <img loading="lazy" decoding="async" width="800" height="450" src="https://bolintechnology.com/wp-content/uploads/2026/03/Studios-01.webp" class="css-ring-slider__img" alt="Studios" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Studios-01.webp 800w, https://bolintechnology.com/wp-content/uploads/2026/03/Studios-01-768x432.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Studios-01-18x10.webp 18w, https://bolintechnology.com/wp-content/uploads/2026/03/Studios-01-300x169.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Studios-01-600x338.webp 600w" sizes="auto, (max-width: 800px) 100vw, 800px">                    </div>
                </div>
                                <div class="css-ring-slider__item" data-index="15" data-label="Touring" role="button" tabindex="0" aria-label="Touring" style="grid-area: 2 / 1;">
                    <div class="css-ring-slider__thumb">
                        <img loading="lazy" decoding="async" width="800" height="450" src="https://bolintechnology.com/wp-content/uploads/2026/03/Mobile-Units-01.webp" class="css-ring-slider__img" alt="Touring" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Mobile-Units-01.webp 800w, https://bolintechnology.com/wp-content/uploads/2026/03/Mobile-Units-01-768x432.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Mobile-Units-01-18x10.webp 18w, https://bolintechnology.com/wp-content/uploads/2026/03/Mobile-Units-01-300x169.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Mobile-Units-01-600x338.webp 600w" sizes="auto, (max-width: 800px) 100vw, 800px">                    </div>
                </div>
                
                <!-- Centre panel: positioned absolutely by JS -->
                <div class="css-ring-slider__center" aria-hidden="true" style="grid-area: 2 / 2 / 3 / 7; display: flex;">
                                            <p class="css-ring-slider__center-heading">
                            Range. Without Limits                        </p>
                                                        </div>

            </div><!-- /.css-ring-slider__stage -->

            <!-- Labels bar -->
            <div class="css-ring-slider__labels" role="tablist" aria-label="Item Labels">
                                <button class="css-ring-slider__label" data-index="0" role="tab" aria-selected="false" tabindex="-1">
                    Auditoriums                </button>
                                <button class="css-ring-slider__label" data-index="1" role="tab" aria-selected="false" tabindex="-1">
                    Arenas                </button>
                                <button class="css-ring-slider__label" data-index="2" role="tab" aria-selected="false" tabindex="-1">
                    Cold Climate Environments                </button>
                                <button class="css-ring-slider__label" data-index="3" role="tab" aria-selected="false" tabindex="-1">
                    Corporate Conferences                </button>
                                <button class="css-ring-slider__label" data-index="4" role="tab" aria-selected="false" tabindex="-1">
                    Concerts                </button>
                                <button class="css-ring-slider__label" data-index="5" role="tab" aria-selected="false" tabindex="-1">
                    Education                </button>
                                <button class="css-ring-slider__label" data-index="6" role="tab" aria-selected="false" tabindex="-1">
                    High Heat Environments                </button>
                                <button class="css-ring-slider__label" data-index="7" role="tab" aria-selected="false" tabindex="-1">
                    Houses of Worship                </button>
                                <button class="css-ring-slider__label" data-index="8" role="tab" aria-selected="false" tabindex="-1">
                    Mobile Units                </button>
                                <button class="css-ring-slider__label" data-index="9" role="tab" aria-selected="false" tabindex="-1">
                    Performing Arts Centers                </button>
                                <button class="css-ring-slider__label is-active" data-index="10" role="tab" aria-selected="true" tabindex="0">
                    Rentals                </button>
                                <button class="css-ring-slider__label" data-index="11" role="tab" aria-selected="false" tabindex="-1">
                    Remote Production                </button>
                                <button class="css-ring-slider__label" data-index="12" role="tab" aria-selected="false" tabindex="-1">
                    Sports                </button>
                                <button class="css-ring-slider__label" data-index="13" role="tab" aria-selected="false" tabindex="-1">
                    Stadiums                </button>
                                <button class="css-ring-slider__label" data-index="14" role="tab" aria-selected="false" tabindex="-1">
                    Studios                </button>
                                <button class="css-ring-slider__label" data-index="15" role="tab" aria-selected="false" tabindex="-1">
                    Touring                </button>
                            </div>

        </div><!-- /.css-ring-slider -->
        				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-95d5b9f elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="95d5b9f" data-element_type="section" data-e-type="section" id="content-codec">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1196b03" data-id="1196b03" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-4f5a799 elementor-widget elementor-widget-bolintech-heading" data-id="4f5a799" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-heading.default">
				<div class="elementor-widget-container">
					<h2 class="title">Image and Optics</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-17b82ea elementor-widget elementor-widget-heading" data-id="17b82ea" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Image Comes First. Speed Follows</h2>				</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-867fd97 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="867fd97" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-cc4c3b9" data-id="cc4c3b9" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-d9e2fd2 icon-box-columns-4 icon-box-columns-tablet-2 icon-box-columns-mobile-1 icon-box--position-top elementor-widget elementor-widget-bolintech-icon-box" data-id="d9e2fd2" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-icon-box.default">
				<div class="elementor-widget-container">
					        <div class="icon-box">
                                            <div class="icon-box__item elementor-repeater-item-617cf0d">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="4K60 Professional Video">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 328 273.16"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M125.41,234.75h22.8l-.78,3.75h-18.85l-2.77,13.25h17.46l-.79,3.8h-17.46l-3.57,17.1h-3.95l7.91-37.9ZM180.36,246.31c-1.52,7.29-7.04,11.55-14.89,11.55h-9.6l-3.09,14.79h-3.95l7.91-37.9h13.2c8.12,0,11.94,4.31,10.43,11.55ZM168.79,238.5h-8.89l-3.27,15.66h8.89c5.7,0,9.69-2.88,10.73-7.86,1.03-4.93-1.76-7.81-7.46-7.81ZM202.13,233.78c-7.7,0-13.95,4.31-15.23,10.48-1.5,7.19,4.23,9.04,9.83,10.73,6.63,1.95,9.23,3.75,8.4,7.75-.85,4.06-5.26,6.73-10.44,6.73-4.62,0-7.91-1.95-9.37-5.8l-3.71,2.26c1.73,4.52,6.24,7.24,12.25,7.24,7.91,0,13.98-4.01,15.35-10.53,1.43-6.83-3.62-9.24-9.87-11.04-4.9-1.39-9.34-2.72-8.3-7.7.77-3.7,5.24-6.42,10.23-6.42,3.96,0,6.97,2.05,8.53,5.14l3.58-2.16c-1.71-4.11-5.33-6.68-11.24-6.68ZM24,1C10.75,1,0,11.75,0,25s10.75,24,24,24,24-10.75,24-24S37.25,1,24,1ZM80,0c-13.25,0-24,10.75-24,24s10.75,24,24,24,24-10.75,24-24S93.25,0,80,0ZM136,49c13.25,0,24-10.75,24-24S149.25,1,136,1s-24,10.75-24,24,10.75,24,24,24ZM192,1c-13.25,0-24,10.75-24,24s10.75,24,24,24,24-10.75,24-24S205.25,1,192,1ZM248,1c-13.25,0-24,10.75-24,24s10.75,24,24,24,24-10.75,24-24-10.75-24-24-24ZM304,49c13.25,0,24-10.75,24-24s-10.75-24-24-24-24,10.75-24,24,10.75,24,24,24ZM24,57c-13.25,0-24,10.75-24,24s10.75,24,24,24,24-10.75,24-24-10.75-24-24-24ZM80,56c-13.25,0-24,10.75-24,24s10.75,24,24,24,24-10.75,24-24-10.75-24-24-24ZM136,105c13.25,0,24-10.75,24-24s-10.75-24-24-24-24,10.75-24,24,10.75,24,24,24ZM192,57c-13.25,0-24,10.75-24,24s10.75,24,24,24,24-10.75,24-24-10.75-24-24-24ZM248,57c-13.25,0-24,10.75-24,24s10.75,24,24,24,24-10.75,24-24-10.75-24-24-24ZM304,57c-13.25,0-24,10.75-24,24s10.75,24,24,24,24-10.75,24-24-10.75-24-24-24ZM24,113c-13.25,0-24,10.75-24,24s10.75,24,24,24,24-10.75,24-24-10.75-24-24-24ZM80,112c-13.25,0-24,10.75-24,24s10.75,24,24,24,24-10.75,24-24-10.75-24-24-24ZM136,161c13.25,0,24-10.75,24-24s-10.75-24-24-24-24,10.75-24,24,10.75,24,24,24ZM192,113c-13.25,0-24,10.75-24,24s10.75,24,24,24,24-10.75,24-24-10.75-24-24-24ZM248,113c-13.25,0-24,10.75-24,24s10.75,24,24,24,24-10.75,24-24-10.75-24-24-24ZM304,113c-13.25,0-24,10.75-24,24s10.75,24,24,24,24-10.75,24-24-10.75-24-24-24ZM24,169c-13.25,0-24,10.75-24,24s10.75,24,24,24,24-10.75,24-24-10.75-24-24-24ZM80,168c-13.25,0-24,10.75-24,24s10.75,24,24,24,24-10.75,24-24-10.75-24-24-24ZM136,217c13.25,0,24-10.75,24-24s-10.75-24-24-24-24,10.75-24,24,10.75,24,24,24ZM192,169c-13.25,0-24,10.75-24,24s10.75,24,24,24,24-10.75,24-24-10.75-24-24-24ZM248,169c-13.25,0-24,10.75-24,24s10.75,24,24,24,24-10.75,24-24-10.75-24-24-24ZM304,169c-13.25,0-24,10.75-24,24s10.75,24,24,24,24-10.75,24-24-10.75-24-24-24Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    4K60 Professional Video                                </h3>
                            
                                                            <div class="icon-box__description">
                                    True 4K60 video delivers sharp detail and fluid motion, keeping fast-moving subjects clear in live production environments.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-20ec113">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="Advanced ISP">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 348.46 217.79"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M263.82,151.87l-28.07-16.2c-2.86-1.65-6.42-1.65-9.28,0l-28.07,16.2c-2.86,1.65-4.64,4.73-4.64,8.04v32.41c0,3.31,1.78,6.38,4.64,8.04l28.07,16.2c1.43.83,3.04,1.24,4.64,1.24s3.21-.41,4.64-1.24l28.07-16.2c2.86-1.65,4.64-4.73,4.64-8.04v-32.41c0-3.3-1.78-6.38-4.64-8.04ZM265.46,192.31c0,2.24-1.2,4.32-3.14,5.44l-28.07,16.2c-1.94,1.12-4.34,1.12-6.28,0l-28.07-16.2c-1.94-1.12-3.14-3.2-3.14-5.44v-32.41c0-2.24,1.2-4.32,3.14-5.44l28.07-16.2h0c1.94-1.12,4.34-1.12,6.28,0l28.07,16.2c1.94,1.12,3.14,3.2,3.14,5.44v32.41ZM232.52,166.21l3.86,10.72h-7.98l3.86-10.72h.27ZM260.01,155.91l-25.85-14.93c-1.89-1.09-4.21-1.09-6.09,0l-25.85,14.93c-1.89,1.09-3.05,3.1-3.05,5.28v29.85c0,2.18,1.16,4.19,3.05,5.28l25.85,14.93c1.89,1.09,4.21,1.09,6.09,0l25.85-14.93c1.89-1.09,3.05-3.1,3.05-5.28v-29.85c0-2.18-1.16-4.19-3.05-5.28ZM241.74,191.91l-3.32-9.22h-12.1l-3.32,9.22h-6.47l12.71-33.9h6.29l12.67,33.9h-6.47ZM343.82,151.87l-28.07-16.2c-2.86-1.65-6.42-1.65-9.28,0l-28.07,16.2c-2.86,1.65-4.64,4.73-4.64,8.04v32.41c0,3.31,1.78,6.38,4.64,8.04l28.07,16.2c1.43.83,3.04,1.24,4.64,1.24s3.21-.41,4.64-1.24l28.07-16.2c2.86-1.65,4.64-4.73,4.64-8.04v-32.41c0-3.3-1.78-6.38-4.64-8.04ZM345.46,192.31c0,2.24-1.2,4.32-3.14,5.44l-28.07,16.2c-1.94,1.12-4.34,1.12-6.28,0l-28.07-16.2c-1.94-1.12-3.14-3.2-3.14-5.44v-32.41c0-2.24,1.2-4.32,3.14-5.44l28.07-16.2h0c1.93-1.12,4.34-1.12,6.28,0l28.07,16.2c1.94,1.12,3.14,3.2,3.14,5.44v32.41ZM312.52,166.21l3.86,10.72h-7.98l3.86-10.72h.27ZM340.01,155.91l-25.85-14.93c-1.89-1.09-4.21-1.09-6.09,0l-25.85,14.93c-1.89,1.09-3.05,3.1-3.05,5.28v29.85c0,2.18,1.16,4.19,3.05,5.28l25.85,14.93c1.89,1.09,4.21,1.09,6.09,0l25.85-14.93c1.89-1.09,3.05-3.1,3.05-5.28v-29.85c0-2.18-1.16-4.19-3.05-5.28ZM321.74,191.91l-3.32-9.22h-12.1l-3.32,9.22h-6.47l12.71-33.9h6.29l12.67,33.9h-6.47ZM0,2.25h5.47v102.73H0V2.25ZM101.46,79.01c0,18.24-14.74,27.79-34.1,27.79-16.98,0-29.75-7.72-36.35-18.81l4.49-3.23c6.31,10.38,17.54,16.84,32,16.84,15.58,0,28.21-7.72,28.21-22.45,0-13.19-9.12-19.09-30.87-25.12-16.84-4.77-32.14-9.68-32.14-27.51S47.71,0,65.95,0c15.02,0,26.8,6.46,33.26,17.26l-4.49,2.95c-6.03-9.68-16.56-15.02-29.05-15.02-14.73,0-27.23,7.58-27.23,20.77,0,15.16,13.47,18.95,28.91,23.16,23.44,6.46,34.1,14.03,34.1,29.89ZM161.1,2.25h-34.94v102.73h5.47v-42.24h29.75c20.21,0,32.84-11.23,32.84-30.17s-12.77-30.31-33.12-30.31ZM160.54,57.54h-28.91V7.58h28.91c17.12,0,27.93,9.26,27.93,24.98s-10.81,24.98-27.93,24.98ZM303.77,131.25c2.86-1.65,4.64-4.73,4.64-8.04v-32.41c0-3.3-1.78-6.38-4.64-8.04l-28.07-16.2c-2.86-1.65-6.42-1.65-9.28,0l-28.07,16.2c-2.86,1.65-4.64,4.73-4.64,8.04v32.41c0,3.31,1.78,6.38,4.64,8.04l28.07,16.2c1.43.83,3.04,1.24,4.64,1.24s3.21-.41,4.64-1.24l28.07-16.2ZM267.92,144.86l-28.07-16.2c-1.94-1.12-3.14-3.2-3.14-5.44v-32.41c0-2.24,1.2-4.32,3.14-5.44l28.07-16.2h0c1.93-1.12,4.34-1.12,6.28,0l28.07,16.2c1.94,1.12,3.14,3.2,3.14,5.44v32.41c0,2.24-1.2,4.32-3.14,5.44l-28.07,16.2c-1.94,1.12-4.34,1.12-6.28,0ZM272.47,97.11l3.86,10.72h-7.98l3.86-10.72h.27ZM303.01,92.09c0-2.18-1.16-4.19-3.05-5.28l-25.85-14.93c-1.89-1.09-4.21-1.09-6.09,0l-25.85,14.93c-1.89,1.09-3.05,3.1-3.05,5.28v29.85c0,2.18,1.16,4.19,3.05,5.28l25.85,14.93c1.89,1.09,4.21,1.09,6.09,0l25.85-14.93c1.89-1.09,3.05-3.1,3.05-5.28v-29.85ZM281.69,122.81l-3.32-9.22h-12.1l-3.32,9.22h-6.47l12.71-33.9h6.29l12.67,33.9h-6.47Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    Advanced ISP                                </h3>
                            
                                                            <div class="icon-box__description">
                                    Advanced image processing  optimizes exposure, focus, and white balance, delivering natural color, balanced images, and consistent quality.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-9e53171">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="1/1.8” Sony Sensor">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 374 244"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M192.04,132.15c.51-.24.99-.5,1.45-.76l-.78-1.33c4.54-2.34,6.36-4.15,6.59-9.19h-5.67v-10.72h10.74v10.72c0,6.21-2.49,11.85-9.95,15.58l-2.37-4.29ZM179.27,136.44c4.89-2.44,7.63-5.71,8.95-9.41,1.12-2.09,1.65-4.57,1.65-7.38v-7.88h-.65v-1.63h-10.74v10.72h5.99c0,3.84-1.2,6.65-3.73,8.85-.21.11-.42.23-.64.34l.07.13c-.93.72-2.02,1.37-3.27,1.97l2.37,4.29ZM374,0v244H0V0h374ZM372,2H2v240h370V2ZM213.27,107.47c.18,0,.37-.05.53-.15L365.53,11.85c.47-.29.61-.91.31-1.38-.29-.47-.91-.61-1.38-.31l-151.73,95.47c-.47.29-.61.91-.31,1.38.19.3.52.47.85.47ZM9,236c.18,0,.37-.05.53-.15l159.58-100.41c.47-.29.61-.91.31-1.38-.29-.47-.91-.61-1.38-.31L8.47,234.15c-.47.29-.61.91-.31,1.38.19.3.51.47.85.47Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    1/1.8” Sony Sensor                                </h3>
                            
                                                            <div class="icon-box__description">
                                    A Sony image sensor delivers sharp detail and natural color reproduction, supporting consistent, high-quality video across productions.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-0d96c24">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="25X Zoom">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 358 254.51"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M44,1c0,.55-.45,1-1,1H11C6.04,2,2,6.04,2,11v35c0,.55-.45,1-1,1s-1-.45-1-1V11C0,4.93,4.93,0,11,0h32c.55,0,1,.45,1,1ZM347,0h-32c-.55,0-1,.45-1,1s.45,1,1,1h32c4.96,0,9,4.04,9,9v35c0,.55.45,1,1,1s1-.45,1-1V11c0-6.07-4.93-11-11-11ZM357,190c-.55,0-1,.45-1,1v35c0,4.96-4.04,9-9,9h-32c-.55,0-1,.45-1,1s.45,1,1,1h32c6.07,0,11-4.93,11-11v-35c0-.55-.45-1-1-1ZM43,235H11c-4.96,0-9-4.04-9-9v-35c0-.55-.45-1-1-1s-1,.45-1,1v35c0,6.07,4.93,11,11,11h32c.55,0,1-.45,1-1s-.45-1-1-1ZM136.36,220.49v-1.52h-23.02v1.81h20.59l-21.16,31.55v1.53h24.4v-1.81h-21.97l21.16-31.55ZM169.72,236.36c0,11.06-6.24,18.16-15.34,18.16s-15.39-7.1-15.39-18.16,6.24-18.06,15.39-18.06,15.34,7.05,15.34,18.06ZM167.77,236.36c0-9.91-5.48-16.25-13.39-16.25s-13.44,6.34-13.44,16.25,5.48,16.35,13.44,16.35,13.39-6.39,13.39-16.35ZM205.8,236.36c0,11.06-6.24,18.16-15.34,18.16s-15.39-7.1-15.39-18.16,6.24-18.06,15.39-18.06,15.34,7.05,15.34,18.06ZM203.84,236.36c0-9.91-5.48-16.25-13.39-16.25s-13.44,6.34-13.44,16.25,5.48,16.35,13.44,16.35,13.39-6.39,13.39-16.35ZM228.67,242.12h-.14l-14.11-23.16h-2v34.98h1.86v-31.31h.19l13.49,22.11h1.29l13.49-22.11h.14v31.31h1.91v-34.98h-2l-14.11,23.16ZM140.79,143.71c.2.2.45.29.71.29s.51-.1.71-.29l36.79-36.79,36.79,36.79c.2.2.45.29.71.29s.51-.1.71-.29c.39-.39.39-1.02,0-1.41l-36.79-36.79,36.79-36.79c.39-.39.39-1.02,0-1.41s-1.02-.39-1.41,0l-36.79,36.79-36.79-36.79c-.39-.39-1.02-.39-1.41,0s-.39,1.02,0,1.41l36.79,36.79-36.79,36.79c-.39.39-.39,1.02,0,1.41Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    25X Zoom                                </h3>
                            
                                                            <div class="icon-box__description">
                                    A 25X zoom range allows flexible framing from wide establishing shots to tight close-ups without sacrificing image quality.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                    </div>
        				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-5bd364b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5bd364b" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ad2b20c" data-id="ad2b20c" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-55d8ee9 icon-box-columns-1 icon-box-columns-tablet_extra-1 elementor-widget__width-initial icon-box-columns-tablet-1 icon-box-columns-mobile-1 icon-box--position-top elementor-widget elementor-widget-bolintech-icon-box" data-id="55d8ee9" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-icon-box.default">
				<div class="elementor-widget-container">
					        <div class="icon-box">
                                            <div class="icon-box__item elementor-repeater-item-23d1e44">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="Low Light Performance">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 276.99 202.33"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M116.99,122.28c-34.6,0-52.94-22.32-59.7-32.96-11.37-17.88-12.96-59.43,10.42-83.83l2.17-2.26-3.08.59C29.84,10.89,13.55,31.14,6.4,46.89c-9.44,20.78-8.37,46.46,2.73,65.41,11.28,19.28,32,33.24,54.07,36.42,3.07.44,6.44.72,10.06.72,16.3,0,37.77-5.6,60.42-26.92l2.45-2.31-3.31.59c-5.62,1.01-10.88,1.46-15.83,1.46ZM63.48,146.75c-21.48-3.1-41.65-16.68-52.63-35.45C.08,92.88-.95,67.93,8.22,47.72,14.98,32.83,30.17,13.79,64.19,6.39c-9.45,10.97-15.37,25.95-16.74,42.55-1.31,15.87,1.73,31.36,8.15,41.45,6.95,10.94,25.79,33.89,61.34,33.89,4.08,0,8.38-.3,12.91-.96-26.17,23.41-50.43,25.72-66.37,23.42ZM78.27,61.87c7.1,1.99,14.47-2.15,16.46-9.25h0c-1.99,7.1,2.15,14.47,9.25,16.46-7.1-1.99-14.47,2.15-16.46,9.25h0c1.99-7.1-2.15-14.47-9.25-16.46ZM160.29,92.05c-5.06-1.42-10.32,1.53-11.74,6.59,1.42-5.06-1.53-10.32-6.59-11.74,5.06,1.42,10.32-1.53,11.74-6.59h0c-1.42,5.06,1.53,10.32,6.59,11.74ZM113.38,26.59c3.72,1.05,7.59-1.13,8.63-4.85-1.05,3.72,1.13,7.59,4.85,8.63-3.72-1.05-7.59,1.13-8.63,4.85,1.05-3.72-1.13-7.59-4.85-8.63ZM91.64,3.22c2.47.69,5.04-.75,5.74-3.22-.69,2.47.75,5.04,3.22,5.74-2.47-.69-5.04.75-5.74,3.22.69-2.47-.75-5.04-3.22-5.74ZM276.92,100.65c-.68-5.66-10.15-10.48-25.11-12.68-.54-.08-1.05.3-1.13.84-.08.55.3,1.05.84,1.13,14.04,2.06,23.47,6.62,23.47,11.35,0,6.04-16.07,12.5-40,12.5s-40-6.46-40-12.5c0-4.81,9.65-9.4,24.02-11.43.55-.08.93-.58.85-1.13-.08-.55-.59-.93-1.13-.85-14.91,2.1-24.51,6.76-25.63,12.31-.07.13-.11.28-.11.44v87.07c0,4.65,3.16,8.71,7.68,9.88,12.27,3.16,24.25,4.74,35.88,4.74s22.43-1.52,33.04-4.56c4.36-1.25,7.41-5.28,7.41-9.81v-86.99c0-.12-.03-.22-.07-.33ZM274.99,187.97c0,3.64-2.45,6.88-5.96,7.88-21.08,6.04-43.92,5.97-67.86-.2-3.64-.94-6.18-4.2-6.18-7.94v-81.91c5.37,5.86,21.03,9.99,40,9.99s34.63-4.14,40-9.99v82.16ZM233,101.69c1.32-8.39,1.33-15.81,0-22.7-.1-.54.25-1.07.79-1.17.54-.1,1.07.25,1.17.79,1.37,7.11,1.37,14.76,0,23.39-.08.49-.5.84-.99.84-.05,0-.1,0-.16-.01-.55-.09-.92-.6-.83-1.14ZM227.39,90.97c-9.53-11.34-7.42-27.34,6.27-47.56l.77-1.13.85,1.07c14.14,17.92,16.61,33.94,7.57,48.97-.19.31-.52.48-.86.48-.18,0-.35-.05-.51-.14-.47-.28-.63-.9-.34-1.37,8.38-13.93,6.23-28.86-6.58-45.61-12.44,18.84-14.34,33.64-5.63,44,.36.42.3,1.05-.12,1.41-.42.36-1.05.3-1.41-.12Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    Low Light Performance                                </h3>
                            
                                                            <div class="icon-box__description">
                                    A sensor optimized for low-light environments helps maintain clear images and natural color even in darker production settings.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                    </div>
        				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-00d4742" data-id="00d4742" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-ed232c2 elementor-widget elementor-widget-bolintech-slider-content-block" data-id="ed232c2" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-slider-content-block.default">
				<div class="elementor-widget-container">
							<div id="content-block-carousel-248" class="carousel slide" data-mdb-interval="4000000" data-mdb-ride="carousel">
			<ul class="carousel-inner list-items list-unstyled">
										<li class="carousel-item elementor-repeater-item-561349a image_compare active">
							<div class="row justify-content-center align-items-center">
								<div class="col">
									<h4 class="title"></h4>
									<div class="img-comp-container">
										<div class="img-comp-img">
											<img loading="lazy" decoding="async" width="2093" height="1210" src="https://bolintechnology.com/wp-content/uploads/2023/03/Night-View-1.jpg" class="attachment-full size-full" alt="" srcset="https://bolintechnology.com/wp-content/uploads/2023/03/Night-View-1.jpg 2093w, https://bolintechnology.com/wp-content/uploads/2023/03/Night-View-1-300x173.jpg 300w, https://bolintechnology.com/wp-content/uploads/2023/03/Night-View-1-600x347.jpg 600w, https://bolintechnology.com/wp-content/uploads/2023/03/Night-View-1-768x444.jpg 768w" sizes="auto, (max-width: 2093px) 100vw, 2093px">										</div>
										<div class="img-comp-slider" style="left: 1045px;"><i class="fal fa-arrows-h"></i></div><div class="img-comp-slider" style="left: 1045px;"><i class="fal fa-arrows-h"></i></div><div class="img-comp-img img-comp-overlay" style="width: 1046px;">
											<img loading="lazy" decoding="async" width="2094" height="1210" src="https://bolintechnology.com/wp-content/uploads/2023/03/Night-View-2.jpg" class="attachment-full size-full" alt="" srcset="https://bolintechnology.com/wp-content/uploads/2023/03/Night-View-2.jpg 2094w, https://bolintechnology.com/wp-content/uploads/2023/03/Night-View-2-300x173.jpg 300w, https://bolintechnology.com/wp-content/uploads/2023/03/Night-View-2-600x347.jpg 600w, https://bolintechnology.com/wp-content/uploads/2023/03/Night-View-2-768x444.jpg 768w" sizes="auto, (max-width: 2094px) 100vw, 2094px">										</div>
									</div>
																	</div>
							</div>
						</li>
								</ul>
					</div>
				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-0c68d25 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="0c68d25" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2b37768" data-id="2b37768" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-058a95c elementor-widget elementor-widget-bolintech-heading" data-id="058a95c" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-heading.default">
				<div class="elementor-widget-container">
					<h2 class="title">Connectivity and Outputs</h2>				</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-f9d6cd8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f9d6cd8" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5c8d5e1" data-id="5c8d5e1" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-596d052 elementor-widget elementor-widget-heading" data-id="596d052" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">From Studio to Stadium - One Camera Does It All</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-67e65e4 icon-box-columns-4 icon-box-columns-mobile-2 icon-box-columns-tablet-2 icon-box--position-top elementor-widget elementor-widget-bolintech-icon-box" data-id="67e65e4" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-icon-box.default">
				<div class="elementor-widget-container">
					        <div class="icon-box">
                                            <div class="icon-box__item elementor-repeater-item-3bd8876">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label=" Simultaneous Multi-Stream">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 314.38 142.28"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M22.3,51.08h2.53l-11.17,30.01h-2.49L0,51.08h2.53l9.83,26.54h.16l9.79-26.54ZM29.72,81.13h2.28v-21.49h-2.28v21.49ZM30.82,51.41c-1.02,0-1.67.69-1.67,1.75s.65,1.71,1.67,1.71,1.79-.65,1.79-1.71-.73-1.75-1.79-1.75ZM55.12,51.08h2.24v30.01h-2.24v-4.16h-.16c-1.39,2.94-4.08,4.73-7.42,4.73-5.34,0-9.21-4.81-9.21-11.42s3.87-11.17,9.21-11.17c3.22,0,5.87,1.92,7.42,4.81h.16v-12.8ZM55.16,70.41c0-5.34-2.98-9.09-7.22-9.09s-7.34,3.71-7.34,9.05,3.1,9.05,7.42,9.05,7.13-3.71,7.13-9.01ZM81.95,68.86c0,.65-.08,1.35-.2,2h-16.15c.16,5.18,3.14,8.64,7.58,8.64,2.57,0,5.1-1.3,6.44-3.59l1.75,1.18c-1.55,2.73-4.53,4.48-8.2,4.48-6.03,0-9.91-4.44-9.91-11.17s3.75-11.33,9.58-11.33c5.5,0,9.09,4,9.09,9.79ZM79.62,68.82c0-4.49-2.49-7.67-6.77-7.67-3.95,0-6.69,2.77-7.18,7.67h13.94ZM105.92,70.37c0,6.77-3.83,11.29-9.58,11.29s-9.54-4.53-9.54-11.29,3.83-11.29,9.54-11.29,9.58,4.53,9.58,11.29ZM103.63,70.37c0-5.5-2.94-9.17-7.3-9.17s-7.26,3.67-7.26,9.17,2.94,9.17,7.26,9.17,7.3-3.67,7.3-9.17ZM209.51,137.89h4v-4h-4v4ZM193.51,137.89h4v-4h-4v4ZM293.51,137.89h4v-4h-4v4ZM277.51,137.89h4v-4h-4v4ZM226.51,137.89h38v-4h-38v4ZM142.51,94.89h17.46v-4h-17.46v-40h5.5v-4h-5.5V4.67h-4v64.22h-18v4h18v65.33h4v-.33h38v-4h-38v-39ZM153.46,4.39h-3.97v4h3.97v-4ZM169.36,4.39h-3.97v4h3.97v-4ZM193.2,4.39h-3.97v4h3.97v-4ZM201.15,4.39h-3.97v4h3.97v-4ZM217.05,4.39h-3.97v4h3.97v-4ZM240.9,4.39h-3.97v4h3.97v-4ZM232.95,4.39h-3.97v4h3.97v-4ZM177.31,4.39h-3.97v4h3.97v-4ZM161.41,4.39h-3.97v4h3.97v-4ZM272.69,4.39h-3.97v4h3.97v-4ZM288.59,4.39h-3.97v4h3.97v-4ZM205.13,8.39h3.97v-4h-3.97v4ZM225,4.39h-3.97v4h3.97v-4ZM260.77,8.39h3.97v-4h-3.97v4ZM280.64,4.39h-3.97v4h3.97v-4ZM296.54,4.39h-3.97v4h3.97v-4ZM256.79,4.39h-3.97v4h3.97v-4ZM248.84,4.39h-3.97v4h3.97v-4ZM181.28,8.39h3.97v-4h-3.97v4ZM145.51,4.39h-2v4h2v-4ZM301.47,11.78c0,.74.78,1.23,1.44.9l10.87-5.39c.74-.37.74-1.42,0-1.79L302.91.11c-.66-.33-1.44.15-1.44.9v3.39h-.96v4h.96v3.39ZM259.07,46.89h-17.58v4h17.58v-4ZM269.25,50.89h17.58v-4h-17.58v4ZM231.3,46.89h-17.58v4h17.58v-4ZM203.54,46.89h-17.58v4h17.58v-4ZM175.78,46.89h-17.58v4h17.58v-4ZM301.51,54.28c0,.74.78,1.23,1.44.9l10.87-5.39c.74-.37.74-1.42,0-1.79l-10.87-5.39c-.66-.33-1.44.15-1.44.9v3.39h-4.5v4h4.5v3.39ZM313.83,134.99l-10.87-5.39c-.66-.33-1.44.15-1.44.9v10.78c0,.74.78,1.23,1.44.9l10.87-5.39c.74-.37.74-1.42,0-1.79ZM178.43,90.89h-3.69v4h3.69v-4ZM190.43,94.89h18.46v-4h-18.46v4ZM227.36,90.89h-3.69v4h3.69v-4ZM272.59,94.89h3.69v-4h-3.69v4ZM239.36,94.89h18.46v-4h-18.46v4ZM313.83,91.99l-10.87-5.39c-.66-.33-1.44.15-1.44.9v3.39h-13.23v4h13.23v3.39c0,.74.78,1.23,1.44.9l10.87-5.39c.74-.37.74-1.42,0-1.79Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                     Simultaneous Multi-Stream                                </h3>
                            
                                                            <div class="icon-box__description">
                                    
Output video simultaneously through HDMI, SDI, and IP with independently configurable resolutions and support for multiple concurrent IP streams.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-51e7416">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label=" NDI Embedded Bridge">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 170 170"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M155.11,0H14.89C6.68,0,0,6.68,0,14.89v140.22c0,8.21,6.68,14.89,14.89,14.89h140.22c8.21,0,14.89-6.68,14.89-14.89V14.89c0-8.21-6.68-14.89-14.89-14.89ZM168,155.11c0,7.11-5.78,12.89-12.89,12.89H14.89c-7.11,0-12.89-5.78-12.89-12.89V14.89C2,7.78,7.78,2,14.89,2h140.22c7.11,0,12.89,5.78,12.89,12.89v140.22ZM155.11,8H14.89c-3.8,0-6.89,3.08-6.89,6.89v140.22c0,3.8,3.08,6.89,6.89,6.89h140.22c3.8,0,6.89-3.08,6.89-6.89V14.89c0-3.8-3.08-6.89-6.89-6.89ZM154,144.67c0,5.15-4.18,9.33-9.33,9.33H15V62.44c0-26.2,21.24-47.44,47.44-47.44h91.56v129.67ZM85.25,84.25c-6.98,0-13.6,1.96-19.51,5.45,5.15-11.15,12-17.95,19.51-17.95s14.36,6.8,19.51,17.95c-5.91-3.49-12.53-5.45-19.51-5.45ZM114.24,140c-.09-19.93-3.72-37.84-9.48-50.3,15.19,8.97,25.75,28.09,25.98,50.3h-16.5ZM65.74,89.7c-5.76,12.46-9.39,30.37-9.48,50.3h-16.5c.23-22.21,10.78-41.33,25.98-50.3Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                     NDI Embedded Bridge                                </h3>
                            
                                                            <div class="icon-box__description">
                                    NDI Embedded Bridge enables secure NDI connections across different networks, supporting remote production and distributed workflows.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-5334b15">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="Ultra Low Latency">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 171.04 158.77"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M95.61,4.24c.17-.53.74-.81,1.26-.64,10.56,3.43,20.39,9.33,28.44,17.07.4.38.41,1.02.03,1.41-.2.2-.46.31-.72.31s-.5-.09-.69-.28c-7.83-7.53-17.4-13.27-27.67-16.61-.53-.17-.81-.73-.64-1.26ZM87.4,2.22c.09-.54-.27-1.06-.82-1.15-4.13-.71-8.36-1.07-12.59-1.07-9.2,0-18.18,1.67-26.69,4.96-.52.2-.77.78-.57,1.29.15.4.53.64.93.64.12,0,.24-.02.36-.07,8.28-3.2,17.02-4.83,25.97-4.83,4.11,0,8.23.35,12.25,1.04.56.1,1.06-.27,1.15-.82ZM36.77,11.19c-.29-.47-.9-.62-1.38-.33C20.39,20.05,9.13,34.28,3.67,50.92c-.17.52.11,1.09.64,1.26.1.03.21.05.31.05.42,0,.81-.27.95-.69,5.31-16.2,16.27-30.04,30.87-38.98.47-.29.62-.9.33-1.38ZM2,74c0-4.89.49-9.78,1.47-14.53.11-.54-.24-1.07-.78-1.18-.55-.11-1.07.24-1.18.78-1,4.88-1.51,9.91-1.51,14.94,0,14.26,4.06,28.1,11.75,40.03.19.3.51.46.84.46.19,0,.37-.05.54-.16.46-.3.6-.92.3-1.38-7.48-11.61-11.43-25.08-11.43-38.95ZM79,31c0-.55-.45-1-1-1s-1,.45-1,1v56.44l-44.58-20.35c-.5-.23-1.1,0-1.33.5-.23.5,0,1.1.5,1.33l47.42,21.65V31ZM170.75,60.29c-.39-.39-1.02-.39-1.41,0l-21.77,21.77c.29-2.67.44-5.37.44-8.06,0-15.99-5.02-31.21-14.51-44.02-.33-.44-.95-.54-1.4-.21-.44.33-.54.96-.21,1.4,9.24,12.46,14.12,27.27,14.12,42.83,0,3.03-.2,6.06-.58,9.05l-22.76-22.76c-.39-.39-1.02-.39-1.41,0s-.39,1.02,0,1.41l24.75,24.75,24.75-24.75c.39-.39.39-1.02,0-1.41ZM39.23,119.06c0,3.83-2.12,6.08-5.52,6.08s-5.52-2.28-5.52-6.16v-12.42h-1.55v12.69c0,4.61,2.73,7.39,7.07,7.39s7.07-2.79,7.07-7.39v-12.69h-1.55v12.51ZM45.12,106.55v19.71h12v-1.47h-10.44v-18.24h-1.55ZM62.36,126.26v-18.24h6.53v-1.47h-14.65v1.47h6.56v18.24h1.55ZM79.88,117.48l5.38,8.78h-1.79l-5.25-8.65h-5.03v8.65h-1.55v-19.71h6.61c3.88,0,6.4,2.04,6.4,5.62,0,3-1.82,4.85-4.77,5.3ZM83.06,112.18c0-2.7-2.01-4.15-4.95-4.15h-4.93v8.11h4.93c2.95,0,4.95-1.39,4.95-3.96ZM95.38,106.55l7.34,19.71h-1.63l-2.62-7.12h-7.77l-2.62,7.12h-1.66l7.34-19.71h1.63ZM97.9,117.67l-3.27-8.84h-.11l-3.27,8.84h6.64ZM112.94,106.55v19.71h12v-1.47h-10.44v-18.24h-1.55ZM134.69,126.64c-5.28,0-8.76-3.96-8.76-10.23s3.48-10.23,8.76-10.23,8.78,3.94,8.78,10.23-3.51,10.23-8.78,10.23ZM134.69,125.17c4.28,0,7.18-3.35,7.18-8.76s-2.89-8.76-7.18-8.76-7.18,3.35-7.18,8.76,2.87,8.76,7.18,8.76ZM162.93,123.48h-.11l-4.9-16.92h-1.69l-4.93,16.92h-.11l-4.69-16.92h-1.58l5.49,19.71h1.53l5.06-17.22h.13l5.06,17.22h1.5l5.49-19.71h-1.58l-4.69,16.92ZM44.06,138.69h-1.55v19.71h12v-1.47h-10.44v-18.24ZM64.41,138.69l7.34,19.71h-1.63l-2.62-7.12h-7.77l-2.62,7.12h-1.66l7.34-19.71h1.63ZM66.93,149.8l-3.27-8.84h-.11l-3.27,8.84h6.64ZM70.19,140.16h6.56v18.24h1.55v-18.24h6.53v-1.47h-14.65v1.47ZM89.13,148.83h9.69v-1.45h-9.69v-7.23h10.28v-1.47h-11.84v19.71h12.18v-1.47h-10.63v-8.09ZM116.44,155.74h-.11l-11.51-17.06h-1.69v19.71h1.55v-17.06h.11l11.52,17.06h1.66v-19.71h-1.53v17.06ZM130.66,139.78c2.06,0,4.15,1.07,5.33,2.84l1.23-.86c-1.31-2.14-3.78-3.45-6.56-3.45-5.44,0-8.97,3.83-8.97,10.15s3.54,10.31,8.97,10.31c2.81,0,5.22-1.31,6.56-3.45l-1.23-.88c-1.23,1.79-3.24,2.87-5.33,2.87-4.47,0-7.39-3.35-7.39-8.84s2.92-8.68,7.39-8.68ZM145.81,148.83h-.08l-5.76-10.15h-1.79l6.8,11.73v7.98h1.58v-7.98l6.8-11.73h-1.79l-5.76,10.15Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    Ultra Low Latency                                </h3>
                            
                                                            <div class="icon-box__description">
                                    
Ultra low latency video output ensures near real-time response for live production and monitoring workflows.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-79fb146">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="API">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 270.54 194.08"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M0,29.58v-12.58C0,7.63,7.63,0,17,0h191c9.37,0,17,7.63,17,17v43.33c0,.55-.45,1-1,1s-1-.45-1-1V17c0-8.27-6.73-15-15-15H17c-8.27,0-15,6.73-15,15v12.58s.04.08.08.08h202.92c.55,0,1,.45,1,1s-.45,1-1,1H2.08c-1.15,0-2.08-.93-2.08-2.08ZM138.67,159H17c-8.27,0-15-6.73-15-15V47.67c0-.55-.45-1-1-1s-1,.45-1,1v96.33c0,9.37,7.63,17,17,17h121.67c.55,0,1-.45,1-1s-.45-1-1-1ZM19,16.3c0,2.65,2.24,4.8,5,4.8s5-2.15,5-4.8-2.24-4.8-5-4.8-5,2.15-5,4.8ZM38,16.3c0,2.65,2.24,4.8,5,4.8s5-2.15,5-4.8-2.24-4.8-5-4.8-5,2.15-5,4.8ZM57,16.3c0,2.65,2.24,4.8,5,4.8s5-2.15,5-4.8-2.24-4.8-5-4.8-5,2.15-5,4.8ZM190.65,118.08l11.99,31.8h-1.85l-4.44-11.73h-13.31l-4.44,11.73h-1.84l11.99-31.8h1.89ZM195.75,136.5l-5.97-15.9h-.13l-5.97,15.9h12.08ZM230.09,127.46c0,5.87-3.95,9.34-10.28,9.34h-9.31v13.08h-1.71v-31.8h10.94c6.37,0,10.37,3.52,10.37,9.38ZM228.29,127.46c0-4.87-3.38-7.73-8.74-7.73h-9.05v15.46h9.05c5.36,0,8.74-2.87,8.74-7.73ZM236.68,149.88h1.71v-31.8h-1.71v31.8ZM269,149.48c1.08,1.35,1.21,3.26.32,4.75l-12.63,21.07c-.89,1.49-2.64,2.27-4.34,1.95l-10.53-1.97c-.5-.09-1.02,0-1.47.25l-6.96,3.96-.06-.11-1.78.97c-.45.24-.8.64-.98,1.12l-3.89,9.98c-.62,1.59-2.17,2.65-3.88,2.65h-.07l-24.56-.41c-1.73-.03-3.28-1.15-3.86-2.78l-3.55-10.1c-.17-.48-.51-.89-.95-1.15l-6.91-4.05.06-.11-1.73-1.06c-.44-.27-.95-.37-1.46-.29l-10.59,1.63c-1.71.26-3.43-.58-4.27-2.09l-11.93-21.47c-.84-1.51-.65-3.42.48-4.73l6.97-8.13c.33-.39.52-.88.52-1.39l.05-8.01h.12s.05-2.03.05-2.03c.01-.51-.15-1.01-.47-1.41l-6.7-8.36c-1.08-1.35-1.21-3.26-.32-4.75l12.63-21.07c.89-1.49,2.63-2.27,4.34-1.95l10.53,1.97c.5.09,1.02,0,1.47-.25l6.96-3.96.06.11,1.78-.97c.45-.24.8-.64.98-1.12l3.89-9.98c.62-1.59,2.17-2.65,3.88-2.65h.07l24.56.41c1.73.03,3.28,1.15,3.86,2.78l3.55,10.1c.17.48.51.89.95,1.15l6.91,4.05-.06.11,1.73,1.06c.44.27.96.37,1.46.29l10.59-1.63c1.71-.27,3.43.58,4.27,2.09l11.93,21.47c.84,1.51.65,3.42-.48,4.73l-6.97,8.13c-.33.39-.52.88-.52,1.39l-.05,8.01h-.12s-.05,2.03-.05,2.03c-.01.51.16,1.01.48,1.41l6.7,8.36ZM267.44,150.73l-6.7-8.36c-.62-.77-.94-1.73-.92-2.72l.21-8.01h0v-1.99c.02-.98.38-1.94,1.02-2.68l6.97-8.13c.59-.68.69-1.67.25-2.46l-11.93-21.47c-.44-.79-1.33-1.22-2.22-1.09l-10.59,1.63c-.97.15-1.97-.05-2.81-.57l-6.83-4.19h0s-1.72-1.01-1.72-1.01c-.85-.5-1.5-1.28-1.82-2.21l-3.55-10.11c-.3-.85-1.11-1.43-2.01-1.45l-24.56-.41c-.91-.02-1.73.54-2.05,1.38l-3.89,9.98c-.36.92-1.03,1.68-1.89,2.15l-7.04,3.82h0s-1.73.98-1.73.98c-.86.49-1.86.66-2.83.47l-10.53-1.97c-.89-.16-1.79.24-2.25,1.01l-12.63,21.07c-.46.77-.4,1.76.17,2.46l6.7,8.36c.62.77.94,1.73.91,2.72l-.21,8.01h0v1.99c-.02.98-.38,1.94-1.02,2.68l-6.97,8.13c-.59.68-.69,1.67-.25,2.46l11.93,21.47c.44.79,1.34,1.23,2.22,1.09l10.59-1.63c.97-.15,1.97.05,2.81.57l6.83,4.19h0s1.72,1.01,1.72,1.01c.85.5,1.5,1.28,1.82,2.21l3.55,10.1c.3.85,1.11,1.43,2.01,1.45l24.56.41c.9-.02,1.73-.54,2.05-1.38l3.89-9.98c.36-.92,1.03-1.68,1.89-2.15l7.04-3.82h0s1.73-.98,1.73-.98c.86-.49,1.86-.65,2.83-.47l10.53,1.97c.89.17,1.79-.24,2.25-1.01l12.63-21.07c.46-.77.4-1.76-.17-2.46Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    API                                </h3>
                            
                                                            <div class="icon-box__description">
                                    An open API allows developers and integrators to build custom applications, automate control, and integrate the camera into larger systems                                </div>
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-0c25b68">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="Wi-Fi Connectivity">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 355.02 131.29"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M88.24,94c-9.65,0-17.5,7.85-17.5,17.5s7.85,17.5,17.5,17.5,17.5-7.85,17.5-17.5-7.85-17.5-17.5-17.5ZM88.24,127c-8.55,0-15.5-6.95-15.5-15.5s6.95-15.5,15.5-15.5,15.5,6.95,15.5,15.5-6.95,15.5-15.5,15.5ZM126.49,90.76l-1.76.96c-7.28-13.4-21.26-21.72-36.49-21.72s-29.09,8.26-36.4,21.54l-1.75-.96c7.65-13.93,22.27-22.58,38.15-22.58s30.62,8.72,38.25,22.76ZM150.9,67.61l-1.64,1.15c-13.96-19.88-36.77-31.75-61.03-31.75s-46.91,11.79-60.87,31.54l-1.63-1.15c14.34-20.28,37.7-32.38,62.5-32.38s48.33,12.19,62.66,32.61ZM176.33,43.14l-1.58,1.23C153.83,17.44,122.29,2,88.24,2S22.5,17.51,1.58,44.55l-1.58-1.22C21.3,15.79,53.47,0,88.24,0s66.78,15.72,88.09,43.14ZM251.1,78.27h1.66l-14.75,52.8h-1.81l-14.97-50.34h-.14l-15.04,50.34h-1.81l-14.68-52.8h1.66l13.89,50.05h.14l14.9-50.05h2.02l14.83,50.05h.14l13.96-50.05ZM264.77,93.46h1.52v37.83h-1.52v-37.83ZM267.37,82.68c0,1.08-.72,1.81-1.81,1.81s-1.81-.72-1.81-1.81.72-1.81,1.81-1.81,1.81.72,1.81,1.81ZM275.76,102.5h24.01v1.45h-24.01v-1.45ZM307.43,78.27h29.8v1.52h-28.21v24.01h26.25v1.52h-26.25v25.75h-1.59v-52.8ZM355.02,82.68c0,1.08-.72,1.81-1.81,1.81s-1.81-.72-1.81-1.81.72-1.81,1.81-1.81,1.81.72,1.81,1.81ZM352.42,93.46h1.52v37.83h-1.52v-37.83Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    Wi-Fi Connectivity                                </h3>
                            
                                                            <div class="icon-box__description">
                                    Built-in WiFi enables wireless camera control and video streaming, simplifying setup in temporary or hard-to-wire environments.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-ddb5339">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="Color Matrix">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 250.5 234.2"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M55.99,229.92c-1.67,2.72-4.66,4.28-8.06,4.28-6.87,0-11.29-4.9-11.29-13.02s4.42-12.82,11.29-12.82c3.4,0,6.39,1.56,8.06,4.28l-1.09.75c-1.56-2.38-4.18-3.74-7-3.74-5.98,0-9.86,4.25-9.86,11.52s3.88,11.73,9.86,11.73c2.82,0,5.44-1.36,7-3.77l1.09.78ZM58.85,224.85c0-5.54,3.2-9.35,7.82-9.35s7.85,3.81,7.85,9.35-3.23,9.35-7.85,9.35-7.82-3.81-7.82-9.35ZM73.2,224.85c0-4.83-2.65-8.13-6.53-8.13s-6.49,3.3-6.49,8.13,2.65,8.12,6.49,8.12,6.53-3.3,6.53-8.12ZM78.84,208.84h1.33v22.2c0,1.12.48,1.63,1.6,1.63h1.22v1.22h-1.5c-1.77,0-2.65-.88-2.65-2.55v-22.51ZM85.81,224.85c0-5.54,3.2-9.35,7.82-9.35s7.85,3.81,7.85,9.35-3.23,9.35-7.85,9.35-7.82-3.81-7.82-9.35ZM100.16,224.85c0-4.83-2.65-8.13-6.53-8.13s-6.49,3.3-6.49,8.13,2.65,8.12,6.49,8.12,6.53-3.3,6.53-8.12ZM105.81,233.73v-17.75h1.33v4.32h.07c1.19-2.38,3.74-4.79,7.51-4.79h.31v1.36h-.48c-4.62,0-7.41,4.01-7.41,6.59v10.27h-1.33ZM127.84,233.79v-24.95h1.43l10.06,16.52h.1l10.06-16.52h1.43v24.95h-1.36v-22.33h-.1l-9.62,15.77h-.92l-9.62-15.77h-.14v22.33h-1.33ZM155.51,229.34c0-3.6,2.65-5.78,8.6-5.78h3.64v-1.56c0-3.23-1.97-5.3-5.27-5.3-1.84,0-3.71.71-4.86,2.41l-1.05-.75c1.46-2.07,3.71-2.86,5.95-2.86,4.01,0,6.53,2.52,6.53,6.43v11.8h-1.29v-3.37h-.1c-1.43,2.69-3.91,3.84-6.66,3.84-3.37,0-5.47-1.94-5.47-4.86ZM167.75,226.96v-2.18h-3.43c-5.3,0-7.48,1.63-7.48,4.52,0,2.31,1.7,3.71,4.32,3.71,3.6,0,6.6-2.52,6.6-6.05ZM181.62,217.21h-5.34v11.63c0,2.55,1.22,3.94,3.09,3.94.54,0,1.22-.17,1.83-.44v1.29c-.68.27-1.46.37-2.07.37-2.58,0-4.15-1.8-4.15-5.03v-11.76h-2.86v-1.22h2.86v-5.07h1.29v5.07h5.34v1.22ZM184.72,233.73v-17.75h1.33v4.32h.07c1.19-2.38,3.74-4.79,7.51-4.79h.31v1.36h-.48c-4.62,0-7.41,4.01-7.41,6.59v10.27h-1.33ZM197.91,211.87c-.71,0-1.16-.44-1.16-1.12,0-.71.44-1.16,1.16-1.16s1.16.44,1.16,1.16-.48,1.12-1.16,1.12ZM198.55,233.83h-1.29v-17.85h1.29v17.85ZM216,233.73h-1.6l-5.51-8.16-5.51,8.16h-1.6l6.36-9.25-5.88-8.5h1.56l5.17,7.62,5.03-7.62h1.53l-5.85,8.63,6.29,9.11ZM5.75,190.5c-3.17,0-5.75-2.58-5.75-5.75V41.75c0-3.17,2.58-5.75,5.75-5.75s5.75,2.58,5.75,5.75v143c0,3.17-2.58,5.75-5.75,5.75ZM5.75,37.5c-2.34,0-4.25,1.91-4.25,4.25v143c0,2.34,1.91,4.25,4.25,4.25s4.25-1.91,4.25-4.25V41.75c0-2.34-1.91-4.25-4.25-4.25ZM39.89,190.5c-3.17,0-5.75-2.58-5.75-5.75V63.75c0-3.17,2.58-5.75,5.75-5.75s5.75,2.58,5.75,5.75v121c0,3.17-2.58,5.75-5.75,5.75ZM39.89,59.5c-2.34,0-4.25,1.91-4.25,4.25v121c0,2.34,1.91,4.25,4.25,4.25s4.25-1.91,4.25-4.25V63.75c0-2.34-1.91-4.25-4.25-4.25ZM74.04,190.5c-3.17,0-5.75-2.58-5.75-5.75V5.75c0-3.17,2.58-5.75,5.75-5.75s5.75,2.58,5.75,5.75v179c0,3.17-2.58,5.75-5.75,5.75ZM74.04,1.5c-2.34,0-4.25,1.91-4.25,4.25v179c0,2.34,1.91,4.25,4.25,4.25s4.25-1.91,4.25-4.25V5.75c0-2.34-1.91-4.25-4.25-4.25ZM108.18,190.5c-3.17,0-5.75-2.58-5.75-5.75V51.75c0-3.17,2.58-5.75,5.75-5.75s5.75,2.58,5.75,5.75v133c0,3.17-2.58,5.75-5.75,5.75ZM108.18,47.5c-2.34,0-4.25,1.91-4.25,4.25v133c0,2.34,1.91,4.25,4.25,4.25s4.25-1.91,4.25-4.25V51.75c0-2.34-1.91-4.25-4.25-4.25ZM142.32,190.5c-3.17,0-5.75-2.58-5.75-5.75v-55c0-3.17,2.58-5.75,5.75-5.75s5.75,2.58,5.75,5.75v55c0,3.17-2.58,5.75-5.75,5.75ZM142.32,125.5c-2.34,0-4.25,1.91-4.25,4.25v55c0,2.34,1.91,4.25,4.25,4.25s4.25-1.91,4.25-4.25v-55c0-2.34-1.91-4.25-4.25-4.25ZM176.46,190.5c-3.17,0-5.75-2.58-5.75-5.75v-113c0-3.17,2.58-5.75,5.75-5.75s5.75,2.58,5.75,5.75v113c0,3.17-2.58,5.75-5.75,5.75ZM176.46,67.5c-2.34,0-4.25,1.91-4.25,4.25v113c0,2.34,1.91,4.25,4.25,4.25s4.25-1.91,4.25-4.25v-113c0-2.34-1.91-4.25-4.25-4.25ZM210.61,190.5c-3.17,0-5.75-2.58-5.75-5.75v-81c0-3.17,2.58-5.75,5.75-5.75s5.75,2.58,5.75,5.75v81c0,3.17-2.58,5.75-5.75,5.75ZM210.61,99.5c-2.34,0-4.25,1.91-4.25,4.25v81c0,2.34,1.91,4.25,4.25,4.25s4.25-1.91,4.25-4.25v-81c0-2.34-1.91-4.25-4.25-4.25ZM244.75,190.5c-3.17,0-5.75-2.58-5.75-5.75V33.75c0-3.17,2.58-5.75,5.75-5.75s5.75,2.58,5.75,5.75v151c0,3.17-2.58,5.75-5.75,5.75ZM244.75,29.5c-2.34,0-4.25,1.91-4.25,4.25v151c0,2.34,1.91,4.25,4.25,4.25s4.25-1.91,4.25-4.25V33.75c0-2.34-1.91-4.25-4.25-4.25Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    Color Matrix                                </h3>
                            
                                                            <div class="icon-box__description">
                                    Adjust color properties to better match other cameras and maintain consistent color across multi-camera productions.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-a7ce841">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="Balanced XLR Audio Input">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 159 175.5"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M101.5,19.6v-4.62c0-8.26-6.72-14.97-14.97-14.97h-15.06c-8.26,0-14.97,6.72-14.97,14.97v4.92C23.2,29.94,0,61.14,0,96c0,43.84,35.66,79.5,79.5,79.5s79.5-35.66,79.5-79.5c0-35.36-23.61-66.66-57.5-76.4ZM58.5,14.97c0-7.15,5.82-12.97,12.97-12.97h15.06c7.15,0,12.97,5.82,12.97,12.97v8.06c0,7.15-5.82,12.97-12.97,12.97h-15.06c-7.15,0-12.97-5.82-12.97-12.97v-8.06ZM71.47,38h15.06c4.6,0,8.72-2.09,11.47-5.37,27.99,8.16,47.5,34.16,47.5,63.37,0,36.39-29.61,66-66,66S13.5,132.39,13.5,96c0-28.84,19.19-54.73,46.72-63.13,2.75,3.14,6.77,5.13,11.26,5.13ZM79.5,173.5c-42.73,0-77.5-34.77-77.5-77.5C2,62.22,24.35,31.97,56.5,21.99v1.04c0,3.01.9,5.81,2.43,8.15C30.95,40.06,11.5,66.53,11.5,96c0,37.5,30.5,68,68,68s68-30.5,68-68c0-29.86-19.8-56.46-48.27-65.08,1.43-2.29,2.27-4.99,2.27-7.89v-1.34c32.74,9.68,55.5,40.04,55.5,74.32,0,42.73-34.77,77.5-77.5,77.5ZM47.5,102c6.62,0,12-5.38,12-12s-5.38-12-12-12-12,5.38-12,12,5.38,12,12,12ZM47.5,80c5.51,0,10,4.49,10,10s-4.49,10-10,10-10-4.49-10-10,4.49-10,10-10ZM110.5,102c6.62,0,12-5.38,12-12s-5.38-12-12-12-12,5.38-12,12,5.38,12,12,12ZM110.5,80c5.51,0,10,4.49,10,10s-4.49,10-10,10-10-4.49-10-10,4.49-10,10-10ZM78.5,152c6.62,0,12-5.38,12-12s-5.38-12-12-12-12,5.38-12,12,5.38,12,12,12ZM78.5,130c5.51,0,10,4.49,10,10s-4.49,10-10,10-10-4.49-10-10,4.49-10,10-10ZM77.5,72l-10,.08,19-29.08-5,21h10l-19,27,5-19Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    Balanced XLR Audio Input                                </h3>
                            
                                                            <div class="icon-box__description">
                                    Balanced XLR inputs support mic or line-level audio with optional phantom power, allowing high-quality sound to be embedded with video.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-f66dfb9">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="Onboard Recording">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 196 141.37"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M59.26,32.28h-10.01v-.74h8.49v-.05l-5.95-3.48v-.47l5.95-3.48v-.05h-8.49v-.75h10.01v.78l-6.37,3.71v.05l6.37,3.7v.78ZM59.26,35.93v-.75h-10v.75h10ZM54.3,38.5c-3.23,0-5.23,1.71-5.23,4.34,0,1.36.67,2.53,1.75,3.18l.45-.6c-.91-.6-1.45-1.57-1.45-2.58,0-2.17,1.7-3.58,4.48-3.58s4.4,1.41,4.4,3.58c0,1-.54,2.01-1.44,2.58l.43.6c1.09-.64,1.75-1.83,1.75-3.18,0-2.63-1.94-4.34-5.15-4.34ZM53.65,51.64v-2.44h-4.39v-.75h10v3.2c0,1.88-1.03,3.1-2.85,3.1-1.52,0-2.46-.88-2.69-2.31l-4.45,2.61v-.87l4.39-2.54ZM54.4,51.59c0,1.43.71,2.4,2.01,2.4,1.37,0,2.1-.97,2.1-2.4v-2.39h-4.12v2.39ZM59.45,61.1c0,2.55-2,4.25-5.19,4.25s-5.19-1.7-5.19-4.25,2.01-4.24,5.19-4.24,5.19,1.69,5.19,4.24ZM58.7,61.1c0-2.09-1.7-3.48-4.44-3.48s-4.44,1.39-4.44,3.48,1.7,3.48,4.44,3.48,4.44-1.4,4.44-3.48ZM34.74,27.76c-3.88,0-4.89,3.3-5.84,6.79-1.19,4.27-2.31,6.08-4.8,6.08-2.69,0-4.25-2.46-4.25-5.53,0-2.84,1.24-5.09,3.41-6.38l-.95-1.38c-2.43,1.43-3.99,4.24-3.99,7.72,0,4.24,2.08,7.28,5.84,7.28,3.53,0,5-2.69,6.16-7.02.84-3.13,1.59-5.88,4.57-5.88,2.4,0,3.96,2.46,3.96,5.41,0,2.43-1.13,4.5-3.01,5.76l.93,1.35c2.26-1.4,3.65-3.8,3.65-7.05,0-4.09-2.2-7.17-5.67-7.17ZM18.63,47.32h21.29v7.69c0,6.08-4.02,9.74-10.65,9.74s-10.65-3.8-10.65-10.12v-7.31ZM20.22,54.58c0,5.26,3.27,8.42,9.05,8.42s9.06-3.07,9.06-8.19v-5.79h-18.11v5.56ZM107.86,83.8H6.14c-3.38,0-6.14-2.75-6.14-6.14V6.14C0,2.75,2.75,0,6.14,0h33.37c.87,0,1.69.42,2.2,1.13l3.02,4.24c.13.18.34.29.57.29h8.82V.63h9c1.15,0,2.28.39,3.18,1.11l9.64,7.66c.55.44,1.23.67,1.93.67h29.99c3.38,0,6.14,2.75,6.14,6.14v61.45c0,3.38-2.75,6.14-6.14,6.14ZM6.14,81.8h101.72c2.28,0,4.14-1.86,4.14-4.14V16.21c0-2.28-1.86-4.14-4.14-4.14h-29.99c-1.15,0-2.28-.39-3.18-1.11l-9.64-7.66c-.55-.44-1.23-.67-1.93-.67h-7v5.03h-10.82c-.87,0-1.69-.42-2.2-1.13l-3.02-4.24c-.13-.18-.34-.29-.57-.29H6.14c-2.28,0-4.14,1.86-4.14,4.14v71.52c0,2.28,1.86,4.14,4.14,4.14ZM105.45,20.14h-27.06v2h27.06v-2ZM105.45,27.69h-27.06v2h27.06v-2ZM78.39,37.24h28.94v-2h-28.94v2ZM105.45,42.79h-27.06v2h27.06v-2ZM78.39,52.34h28.94v-2h-28.94v2ZM78.39,59.89h27.06v-2h-27.06v2ZM78.39,67.44h27.06v-2h-27.06v2ZM78.39,74.99h27.06v-2h-27.06v2ZM103,120.37v2h51v-51h-2v47.59l-30.29-30.29-1.41,1.41,30.29,30.29h-47.59ZM191.33,53.37h-55.8v2h55.8c1.47,0,2.67,1.2,2.67,2.67v78.67c0,1.47-1.2,2.67-2.67,2.67h-100.67c-1.47,0-2.67-1.2-2.67-2.67v-43.33h-2v43.33c0,2.57,2.09,4.67,4.67,4.67h100.67c2.57,0,4.67-2.09,4.67-4.67V58.04c0-2.57-2.09-4.67-4.67-4.67Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    Onboard Recording                                </h3>
                            
                                                            <div class="icon-box__description">
                                    Built-in MicroSD storage allows video to be recorded directly in the camera for local capture, backup recording, or simplified workflows.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                    </div>
        				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-58573df elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="58573df" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-72a5538" data-id="72a5538" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-22c44c1 elementor-widget elementor-widget-bolintech-slider-content-block" data-id="22c44c1" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-slider-content-block.default">
				<div class="elementor-widget-container">
							<div id="content-block-carousel-364" class="carousel slide" data-mdb-interval="4000000" data-mdb-ride="carousel">
			<ul class="carousel-inner list-items list-unstyled">
											<li class="carousel-item elementor-repeater-item-8ec4b9d content_image active">
								<div class="row justify-content-center align-items-center">
																				<div class="block-item-image col-12">
																																							<div class="elementor-image">
																													<a href="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-6.3.webp" data-elementor-open-lightbox="yes" data-elementor-lightbox-title="Bolin Range PTZ Camera - 6.3" data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6NDY1MjcsInVybCI6Imh0dHBzOlwvXC9ib2xpbnRlY2hub2xvZ3kuY29tXC93cC1jb250ZW50XC91cGxvYWRzXC8yMDI2XC8wM1wvQm9saW4tUmFuZ2UtUFRaLUNhbWVyYS02LjMud2VicCJ9">
															<img loading="lazy" decoding="async" width="640" height="313" src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-6.3-768x375.webp" class="attachment-medium_large size-medium_large wp-image-46527" alt="Bolin Range PTZ Camera - 6.3" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-6.3-768x375.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-6.3-18x9.webp 18w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-6.3-300x146.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-6.3-600x293.webp 600w, https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-PTZ-Camera-6.3.webp 1600w" sizes="auto, (max-width: 640px) 100vw, 640px">																	<i class="far fa-expand"></i>
																</a>
																													</div>
																								</div>
																		</div>
							</li>
								</ul>
					</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-aea77c0 list-layout-inline flexible-list elementor-widget elementor-widget-bolintech-list" data-id="aea77c0" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-list.default">
				<div class="elementor-widget-container">
							<ul class="list-items list-inline">
							<li class="list-inline-item align-top">
										<span class="list-text">12G-SDI</span>
									</li>
								<li class="list-inline-item align-top">
										<span class="list-text">HDMI 2.0</span>
									</li>
								<li class="list-inline-item align-top">
										<span class="list-text">USB-C (UVC)</span>
									</li>
								<li class="list-inline-item align-top">
										<span class="list-text">IP Video Streaming</span>
									</li>
								<li class="list-inline-item align-top">
										<span class="list-text">Time Code</span>
									</li>
								<li class="list-inline-item align-top">
										<span class="list-text">AUX - 12V DC Output</span>
									</li>
								<li class="list-inline-item align-top">
										<span class="list-text">AUX - RS422 Serial Control</span>
									</li>
								<li class="list-inline-item align-top">
										<span class="list-text">Balanced Mini XLR Audio Input with Phantom Power</span>
									</li>
								<li class="list-inline-item align-top">
										<span class="list-text">3.5 mm Audio Input</span>
									</li>
								<li class="list-inline-item align-top">
										<span class="list-text">1G LAN Port with POE++ Power Input</span>
									</li>
								<li class="list-inline-item align-top">
										<span class="list-text">Micro SD Local Recording</span>
									</li>
								<li class="list-inline-item align-top">
										<span class="list-text">Illuminated I/O</span>
									</li>
						</ul>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-9ab0910 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9ab0910" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-14dae92" data-id="14dae92" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated e-swiper-container">
						<div class="elementor-element elementor-element-d881d56 elementor--h-position-center elementor--v-position-middle elementor-widget elementor-widget-slides e-widget-swiper" data-id="d881d56" data-element_type="widget" data-e-type="widget" data-settings="{&quot;navigation&quot;:&quot;none&quot;,&quot;autoplay_speed&quot;:2000,&quot;transition_speed&quot;:0,&quot;autoplay&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;transition&quot;:&quot;slide&quot;}" data-widget_type="slides.default">
				<div class="elementor-widget-container">
									<div class="elementor-swiper">
					<div class="elementor-slides-wrapper elementor-main-swiper swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden" role="region" aria-roledescription="carousel" aria-label="Bolin Range PTZ Camera Side LCD Display" dir="ltr" data-animation="">
				<div class="swiper-wrapper elementor-slides" id="swiper-wrapper-74df56e4ca1bb4d3" aria-live="off" style="cursor: grab; transition-duration: 0ms; transform: translate3d(-5736px, 0px, 0px);"><div class="elementor-repeater-item-ee22e51 swiper-slide swiper-slide-duplicate" role="group" aria-roledescription="slide" data-swiper-slide-index="0" aria-label="1 / 3" style="width: 956px;"><div class="swiper-slide-bg" role="img" aria-label="Bolin Range PTZ-Side LCD-Game Video-1301"></div><div class="swiper-slide-inner"><div class="swiper-slide-contents"></div></div></div><div class="elementor-repeater-item-3ca6eca swiper-slide swiper-slide-duplicate" role="group" aria-roledescription="slide" data-swiper-slide-index="1" aria-label="2 / 3" style="width: 956px;"><div class="swiper-slide-bg" role="img" aria-label="Bolin Range PTZ-Side LCD-Camera Info-1301"></div><div class="swiper-slide-inner"><div class="swiper-slide-contents"></div></div></div><div class="elementor-repeater-item-c5f9444 swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" role="group" aria-roledescription="slide" data-swiper-slide-index="2" aria-label="3 / 3" style="width: 956px;"><div class="swiper-slide-bg" role="img" aria-label="Bolin Range PTZ-Side LCD-Camera Status-1302"></div><div class="swiper-slide-inner"><div class="swiper-slide-contents"></div></div></div>
										<div class="elementor-repeater-item-ee22e51 swiper-slide swiper-slide-duplicate-active" role="group" aria-roledescription="slide" data-swiper-slide-index="0" aria-label="1 / 3" style="width: 956px;"><div class="swiper-slide-bg" role="img" aria-label="Bolin Range PTZ-Side LCD-Game Video-1301"></div><div class="swiper-slide-inner"><div class="swiper-slide-contents"></div></div></div><div class="elementor-repeater-item-3ca6eca swiper-slide swiper-slide-duplicate-next" role="group" aria-roledescription="slide" data-swiper-slide-index="1" aria-label="2 / 3" style="width: 956px;"><div class="swiper-slide-bg" role="img" aria-label="Bolin Range PTZ-Side LCD-Camera Info-1301"></div><div class="swiper-slide-inner"><div class="swiper-slide-contents"></div></div></div><div class="elementor-repeater-item-c5f9444 swiper-slide swiper-slide-prev" role="group" aria-roledescription="slide" data-swiper-slide-index="2" aria-label="3 / 3" style="width: 956px;"><div class="swiper-slide-bg" role="img" aria-label="Bolin Range PTZ-Side LCD-Camera Status-1302"></div><div class="swiper-slide-inner"><div class="swiper-slide-contents"></div></div></div>				<div class="elementor-repeater-item-ee22e51 swiper-slide swiper-slide-duplicate swiper-slide-active" role="group" aria-roledescription="slide" data-swiper-slide-index="0" aria-label="1 / 3" style="width: 956px;"><div class="swiper-slide-bg elementor-ken-burns--active" role="img" aria-label="Bolin Range PTZ-Side LCD-Game Video-1301"></div><div class="swiper-slide-inner"><div class="swiper-slide-contents"></div></div></div><div class="elementor-repeater-item-3ca6eca swiper-slide swiper-slide-duplicate swiper-slide-next" role="group" aria-roledescription="slide" data-swiper-slide-index="1" aria-label="2 / 3" style="width: 956px;"><div class="swiper-slide-bg" role="img" aria-label="Bolin Range PTZ-Side LCD-Camera Info-1301"></div><div class="swiper-slide-inner"><div class="swiper-slide-contents"></div></div></div><div class="elementor-repeater-item-c5f9444 swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" role="group" aria-roledescription="slide" data-swiper-slide-index="2" aria-label="3 / 3" style="width: 956px;"><div class="swiper-slide-bg" role="img" aria-label="Bolin Range PTZ-Side LCD-Camera Status-1302"></div><div class="swiper-slide-inner"><div class="swiper-slide-contents"></div></div></div></div>
																					<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
				</div>
				<div><ul class="drag-container list-unstyled">
            
        </ul></div>				</div>
				</div>
				<div class="elementor-element elementor-element-3f6f9d4 elementor-widget elementor-widget-heading" data-id="3f6f9d4" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Live Video and Camera Data Realtime Monitoring</h3>				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-eaf1b58 mobile-column-reverse scroll-trigger elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="eaf1b58" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ddd4602" data-id="ddd4602" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-776d18c icon-box-columns-1 icon-box-columns-tablet-1 icon-box-columns-mobile-1 icon-box--position-top elementor-widget elementor-widget-bolintech-icon-box" data-id="776d18c" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-icon-box.default">
				<div class="elementor-widget-container">
					        <div class="icon-box">
                                            <div class="icon-box__item elementor-repeater-item-20ec113">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="Timecode Synchronization">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 287 175.5"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M276.5,0H10.5C4.71,0,0,4.71,0,10.5v138c0,5.79,4.71,10.5,10.5,10.5h138.73c11.71,10.26,27.02,16.5,43.77,16.5s32.76-6.51,44.56-17.19c.13.4.5.69.94.69h38c5.79,0,10.5-4.71,10.5-10.5V10.5c0-5.79-4.71-10.5-10.5-10.5ZM10.5,157c-4.69,0-8.5-3.81-8.5-8.5V10.5C2,5.81,5.81,2,10.5,2h266c4.69,0,8.5,3.81,8.5,8.5v26h-41.5V3.5c0-.55-.45-1-1-1s-1,.45-1,1v60.07c-12.14-12.95-29.39-21.07-48.5-21.07-36.67,0-66.5,29.83-66.5,66.5,0,18.85,7.9,35.89,20.55,48H10.5ZM252.58,79.5c-2.47-4.97-5.55-9.58-9.13-13.75.02-.08.05-.16.05-.25v-27h41.5v41h-32.42ZM285,81.5v38h-26.34c.55-3.42.84-6.93.84-10.5,0-9.81-2.15-19.11-5.98-27.5h31.48ZM128.5,109c0-35.57,28.93-64.5,64.5-64.5s64.5,28.93,64.5,64.5c0,3.58-.31,7.08-.87,10.5h-.13v.74c-5.33,30.22-31.77,53.26-63.5,53.26-35.57,0-64.5-28.93-64.5-64.5ZM276.5,157h-37.55c9.78-9.37,16.71-21.68,19.35-35.5h26.69v27c0,4.69-3.81,8.5-8.5,8.5ZM46.5,3.5v151c0,.55-.45,1-1,1s-1-.45-1-1v-33H2.5v-2h42v-38H2.5v-2h42v-41H2.5v-2h42V3.5c0-.55.45-1,1-1s1,.45,1,1ZM231.5,109.83c0,.55-.45,1-1,1h-34.83c-2.02,0-3.67-1.64-3.67-3.67v-47.67c0-.55.45-1,1-1s1,.45,1,1v47.67c0,.92.75,1.67,1.67,1.67h34.83c.55,0,1,.45,1,1Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    Timecode Synchronization                                </h3>
                            
                                                                                </div>
                    </div>
                                </div>
                                    </div>
        				</div>
				</div>
				<div class="elementor-element elementor-element-c31867b elementor-widget elementor-widget-text-editor" data-id="c31867b" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>Built-in timecode support allows the camera to synchronize with other cameras and production equipment. By aligning timecode across devices, operators can maintain accurate timing during multi-camera productions and complex broadcast workflows. This ensures video and audio remain properly aligned while simplifying synchronization across the production system.</p>								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-be85e0f" data-id="be85e0f" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-ae0ac89 elementor-widget elementor-widget-video" data-id="ae0ac89" data-element_type="widget" data-e-type="widget" data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;mute&quot;:&quot;yes&quot;,&quot;loop&quot;:&quot;yes&quot;}" data-widget_type="video.default">
				<div class="elementor-widget-container">
							<div class="e-hosted-video elementor-wrapper elementor-open-inline">
					<video class="elementor-video" src="https://bolintechnology.com/wp-content/uploads/2026/04/Range-Timecode-Video-M.webm" loop="" preload="metadata" muted="muted" controlslist="nodownload" playsinline=""></video>
				</div>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-d979b31 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d979b31" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4616a18" data-id="4616a18" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-ed4d530 elementor-widget elementor-widget-image" data-id="ed4d530" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img loading="lazy" decoding="async" width="1000" height="578" src="https://bolintechnology.com/wp-content/uploads/2026/04/AV-Sync-Adjustments-8.1.webp" class="attachment-full size-full wp-image-47971" alt="" srcset="https://bolintechnology.com/wp-content/uploads/2026/04/AV-Sync-Adjustments-8.1.webp 1000w, https://bolintechnology.com/wp-content/uploads/2026/04/AV-Sync-Adjustments-8.1-768x444.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/04/AV-Sync-Adjustments-8.1-18x10.webp 18w, https://bolintechnology.com/wp-content/uploads/2026/04/AV-Sync-Adjustments-8.1-300x173.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/04/AV-Sync-Adjustments-8.1-600x347.webp 600w" sizes="auto, (max-width: 1000px) 100vw, 1000px">															</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2bc84ea" data-id="2bc84ea" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-6029846 icon-box-columns-1 icon-box-columns-tablet-1 icon-box-columns-mobile-1 icon-box--position-top elementor-widget elementor-widget-bolintech-icon-box" data-id="6029846" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-icon-box.default">
				<div class="elementor-widget-container">
					        <div class="icon-box">
                                            <div class="icon-box__item elementor-repeater-item-20ec113">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="Lip Sync Adjustment">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 319.82 114.1"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M175.82,4.81v101c0,.55-.45,1-1,1s-1-.45-1-1V4.81c0-.55.45-1,1-1s1,.45,1,1ZM269.82.81c-.55,0-1,.45-1,1v111c0,.55.45,1,1,1s1-.45,1-1V1.81c0-.55-.45-1-1-1ZM198.82,34.81c-.55,0-1,.45-1,1v40c0,.55.45,1,1,1s1-.45,1-1v-40c0-.55-.45-1-1-1ZM294.82,34.81c-.55,0-1,.45-1,1v40c0,.55.45,1,1,1s1-.45,1-1v-40c0-.55-.45-1-1-1ZM245.82,22.81c-.55,0-1,.45-1,1v64c0,.55.45,1,1,1s1-.45,1-1V23.81c0-.55-.45-1-1-1ZM221.82,47.81c-.55,0-1,.45-1,1v15c0,.55.45,1,1,1s1-.45,1-1v-15c0-.55-.45-1-1-1ZM318.82,47.81c-.55,0-1,.45-1,1v15c0,.55.45,1,1,1s1-.45,1-1v-15c0-.55-.45-1-1-1ZM139.71,8.17l.73.22.37-.21c6.78-3.87,18.04-6.2,18.15-6.22l-.4-1.96c-.46.09-11.29,2.33-18.36,6.23-15.93-4.78-32.53-5.54-49.34-2.25C58.61,10.28,28.23,30.71.54,64.68l-.54.67.58.64c18.98,20.97,54.16,48.11,142.24,48.11,5.14,0,10.47-.09,15.98-.29l-.07-2C62.34,115.15,23.96,88.06,3.7,66.42c9.61-1.75,76.5-13.39,110.36-5.15,14.99,4,43.57,1.96,44.78,1.87l-.15-1.99c-.29.02-29.45,2.11-44.13-1.81-13.9-3.38-33.24-3.46-51.96-2.25,5.53-3.87,19.26-11.9,35.59-9.78,5.34.7,9.89,1.43,14.3,2.15,14.08,2.28,25.2,4.08,46.4,1.44l-.25-1.98c-20.92,2.6-31.37.91-45.83-1.43-4.42-.72-8.99-1.46-14.36-2.16-20.93-2.73-37.26,10.13-39.53,12.02-26.07,1.92-50.14,6.13-55.6,7.12C61.47-5.84,118,1.64,139.71,8.17Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    Lip Sync Adjustment                                </h3>
                            
                                                                                </div>
                    </div>
                                </div>
                                    </div>
        				</div>
				</div>
				<div class="elementor-element elementor-element-a3bbdb1 elementor-widget elementor-widget-text-editor" data-id="a3bbdb1" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>The camera is factory calibrated to ensure audio and video remain properly synchronized out of the box. Built-in lip sync adjustment allows operators to fine-tune audio timing when external equipment introduces processing delays. This helps maintain natural alignment between sound and on-screen action, ensuring voices and movements remain properly matched throughout production.</p>								</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-6276a27 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6276a27" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-e51f372" data-id="e51f372" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-e1d5aab elementor-widget__width-initial icon-box-columns-tablet-3 icon-box-columns-3 icon-box-columns-mobile-1 icon-box--position-top elementor-widget elementor-widget-bolintech-icon-box" data-id="e1d5aab" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-icon-box.default">
				<div class="elementor-widget-container">
					        <div class="icon-box">
                                            <div class="icon-box__item elementor-repeater-item-007d3e0">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="Instant Autofocus with TOF">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 328 185"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M10,.92v183.17c0,.51-.41.92-.92.92H.92c-.51,0-.92-.41-.92-.92V.92C0,.41.41,0,.92,0h8.17c.51,0,.92.41.92.92ZM16.08,0h-1.17c-.51,0-.92.41-.92.92v183.17c0,.51.41.92.92.92h1.17c.51,0,.92-.41.92-.92V.92c0-.51-.41-.92-.92-.92ZM311,39c4.42,0,8-3.58,8-8s-3.58-8-8-8-8,3.58-8,8,3.58,8,8,8ZM283,29H56.82c-.13-.75-.32-1.48-.58-2.18l14.01-8.09c.96-.55,1.28-1.78.73-2.73s-1.78-1.29-2.73-.73l-14,8.08c-.48-.58-1.02-1.12-1.6-1.6l5.06-8.77c.55-.96.22-2.18-.73-2.73-.96-.55-2.18-.22-2.73.73l-5.07,8.78c-.7-.26-1.43-.46-2.18-.58V3c0-1.1-.9-2-2-2s-2,.9-2,2v16.18c-.75.13-1.48.32-2.18.58l-5.07-8.78c-.55-.96-1.78-1.28-2.73-.73-.96.55-1.28,1.78-.73,2.73l5.06,8.77c-.58.48-1.12,1.02-1.6,1.6l-14-8.08c-.96-.55-2.18-.22-2.73.73s-.22,2.18.73,2.73l14.01,8.09c-.26.7-.46,1.43-.58,2.18h-9.18c-1.1,0-2,.9-2,2s.9,2,2,2h9.18c.13.75.32,1.48.58,2.18l-14.01,8.09c-.96.55-1.28,1.78-.73,2.73.37.64,1.04,1,1.73,1,.34,0,.68-.09,1-.27l14-8.08c.48.58,1.02,1.12,1.6,1.6l-5.06,8.77c-.55.96-.22,2.18.73,2.73.31.18.66.27,1,.27.69,0,1.36-.36,1.73-1l5.07-8.78c.7.26,1.43.46,2.18.58v16.18c0,1.1.9,2,2,2s2-.9,2-2v-16.18c.75-.13,1.48-.32,2.18-.58l5.07,8.78c.37.64,1.04,1,1.73,1,.34,0,.68-.09,1-.27.96-.55,1.28-1.78.73-2.73l-5.06-8.77c.58-.48,1.12-1.02,1.6-1.6l14,8.08c.31.18.66.27,1,.27.69,0,1.36-.36,1.73-1,.55-.96.22-2.18-.73-2.73l-14.01-8.09c.26-.7.46-1.43.58-2.18h226.18c1.1,0,2-.9,2-2s-.9-2-2-2ZM328,102.5c0,22.16-12.76,40.44-14.22,42.46-.41.57-1.08.91-1.78.91s-1.37-.34-1.78-.91c-1.46-2.01-14.22-20.29-14.22-42.45s12.76-40.44,14.22-42.46c.41-.57,1.08-.91,1.78-.91s1.37.34,1.78.91c1.46,2.01,14.22,20.29,14.22,42.45ZM324,102.5c0-17.44-8.41-32.38-12-37.95-3.59,5.57-12,20.51-12,37.95s8.41,32.38,12,37.95c3.59-5.57,12-20.51,12-37.95ZM306.91,110.57c-1.75-7.39-1.09-15.51,2.02-24.82.35-1.05-.21-2.18-1.26-2.53-1.05-.35-2.18.22-2.53,1.26-3.36,10.04-4.05,18.88-2.12,27.01.22.92,1.04,1.54,1.94,1.54.15,0,.31-.02.46-.05,1.07-.25,1.74-1.33,1.48-2.41ZM309.21,120.13c-.24-1.08-1.3-1.76-2.38-1.52-1.08.24-1.76,1.31-1.52,2.38.51,2.32,1.22,4.58,2.12,6.71.32.77,1.06,1.23,1.85,1.23.26,0,.52-.05.77-.16,1.02-.43,1.5-1.6,1.07-2.62-.8-1.91-1.44-3.94-1.9-6.03Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    Instant Autofocus with TOF                                </h3>
                            
                                                            <div class="icon-box__description">
                                    A Time-of-Flight sensor enables fast, accurate autofocus, helping the camera quickly lock onto subjects and maintain sharp images.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-5334b15">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="One Cable Solution">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 156 149"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M128.33,0H27.67C12.41,0,0,12.41,0,27.67v93.67c0,15.26,12.41,27.67,27.67,27.67h100.67c15.26,0,27.67-12.41,27.67-27.67V27.67c0-15.26-12.41-27.67-27.67-27.67ZM154,121.33c0,14.15-11.51,25.67-25.67,25.67H27.67c-14.15,0-25.67-11.51-25.67-25.67V27.67C2,13.51,13.51,2,27.67,2h100.67c14.15,0,25.67,11.51,25.67,25.67v93.67ZM128.33,14H27.67c-7.54,0-13.67,6.13-13.67,13.67v63.83c0,1.93,1.57,3.5,3.5,3.5h14c.83,0,1.5.67,1.5,1.5v14c0,1.93,1.57,3.5,3.5,3.5h12.11c.83,0,1.5.67,1.5,1.5v12c0,1.93,1.57,3.5,3.5,3.5h45.89c1.93,0,3.5-1.57,3.5-3.5v-12c0-.83.67-1.5,1.5-1.5h12c1.93,0,3.5-1.57,3.5-3.5v-14c0-.83.67-1.5,1.5-1.5h17c1.93,0,3.5-1.57,3.5-3.5V27.67c0-7.54-6.13-13.67-13.67-13.67ZM140,91.5c0,.83-.67,1.5-1.5,1.5h-17c-1.93,0-3.5,1.57-3.5,3.5v14c0,.83-.67,1.5-1.5,1.5h-12c-1.93,0-3.5,1.57-3.5,3.5v12c0,.83-.67,1.5-1.5,1.5h-45.89c-.83,0-1.5-.67-1.5-1.5v-12c0-1.93-1.57-3.5-3.5-3.5h-12.11c-.83,0-1.5-.67-1.5-1.5v-14c0-1.93-1.57-3.5-3.5-3.5h-14c-.83,0-1.5-.67-1.5-1.5V27.67c0-6.43,5.23-11.67,11.67-11.67h100.67c6.43,0,11.67,5.23,11.67,11.67v63.83ZM80,83h10l-19,27,5-19-10,.08,19-29.08-5,21ZM125.33,24H30.67c-2.57,0-4.67,2.09-4.67,4.67v16.67c0,2.57,2.09,4.67,4.67,4.67h94.67c2.57,0,4.67-2.09,4.67-4.67v-16.67c0-2.57-2.09-4.67-4.67-4.67ZM30.67,48c-1.47,0-2.67-1.2-2.67-2.67v-16.67c0-1.47,1.2-2.67,2.67-2.67h8.33v22h-8.33ZM41,48v-22h10.67v22h-10.67ZM53.67,48v-22h10.67v22h-10.67ZM66.33,48v-22h10.67v22h-10.67ZM79,48v-22h10.67v22h-10.67ZM91.67,48v-22h10.67v22h-10.67ZM104.33,26h10.67v22h-10.67v-22ZM128,45.33c0,1.47-1.2,2.67-2.67,2.67h-8.33v-22h8.33c1.47,0,2.67,1.2,2.67,2.67v16.67Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    One Cable Solution                                </h3>
                            
                                                            <div class="icon-box__description">
                                    A 1Gb Ethernet port with PoE++ support delivers power, control, and network connectivity through a single cable, simplifying installation.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-79fb146">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="Power External Devices">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 300 81"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M60.5,40.75c0,.55-.45,1-1,1H19c-.55,0-1-.45-1-1s.45-1,1-1h40.5c.55,0,1,.45,1,1ZM300,5.17v70.67c0,1.75-1.42,3.17-3.17,3.17h-70.67c-1.75,0-3.17-1.42-3.17-3.17v-33.83h-59.59c-.73,6.82-6.36,12.24-13.41,12.5-7.73.28-14.22-5.76-14.5-13.49-.28-7.73,5.76-14.22,13.49-14.5s14.22,5.76,14.5,13.49c0,0,0,0,0,0h59.5V5.17c0-1.75,1.42-3.17,3.17-3.17h70.67c1.75,0,3.17,1.42,3.17,3.17ZM298,5.17c0-.64-.52-1.17-1.17-1.17h-70.67c-.64,0-1.17.52-1.17,1.17v70.67c0,.64.52,1.17,1.17,1.17h70.67c.64,0,1.17-.52,1.17-1.17V5.17ZM279,39.75h-17.5v-17.75c0-.55-.45-1-1-1s-1,.45-1,1v17.75h-17.5c-.55,0-1,.45-1,1s.45,1,1,1h17.5v17.25c0,.55.45,1,1,1s1-.45,1-1v-17.25h17.5c.55,0,1-.45,1-1s-.45-1-1-1ZM187.13,57.79c-6.67,14.1-21.05,23.21-36.63,23.21-21.83,0-39.67-17.36-40.46-39h-33.04v33.89c0,1.72-1.4,3.11-3.11,3.11H3.11c-1.72,0-3.11-1.4-3.11-3.11V5.11c0-1.72,1.4-3.11,3.11-3.11h70.78c1.71,0,3.11,1.4,3.11,3.11v34.89h33.01c.27-22.1,18.32-40,40.49-40,16,0,30.53,9.45,37.03,24.07.22.5,0,1.1-.51,1.32-.51.22-1.1,0-1.32-.51-6.18-13.9-19.99-22.88-35.2-22.88-21.23,0-38.5,17.27-38.5,38.5s17.27,38.5,38.5,38.5c14.82,0,28.49-8.66,34.82-22.06.24-.5.83-.71,1.33-.48.5.24.71.83.48,1.33ZM75,5.11c0-.61-.5-1.11-1.11-1.11H3.11c-.61,0-1.11.5-1.11,1.11v70.78c0,.61.5,1.11,1.11,1.11h70.78c.61,0,1.11-.5,1.11-1.11V5.11Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    Power External Devices                                </h3>
                            
                                                            <div class="icon-box__description">
                                    The camera provides up to 12V, 2A of power output to run external devices such as wireless transmitters or other connected devices.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                    </div>
        				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-ce4da32 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="ce4da32" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5750c08" data-id="5750c08" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-3401412 elementor-widget elementor-widget-bolintech-heading" data-id="3401412" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-heading.default">
				<div class="elementor-widget-container">
					<h2 class="title">AV Over IP</h2>				</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-b5aebe2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b5aebe2" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-0365296" data-id="0365296" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-fb954c8 icon-box-columns-5 icon-box-columns-mobile-2 icon-box-columns-tablet-3 icon-box--position-top elementor-widget elementor-widget-bolintech-icon-box" data-id="fb954c8" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-icon-box.default">
				<div class="elementor-widget-container">
					        <div class="icon-box">
                                            <div class="icon-box__item elementor-repeater-item-617cf0d">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 373.88 80.36"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M50.79,0h13.81v79.45h-12.46L14.54,25.65h-.73v53.8H0V0h13.09l37.08,53.7h.62V0ZM141.2,18.8c2.94,5.96,4.41,12.91,4.41,20.88s-1.54,14.94-4.62,20.93c-3.08,5.99-7.62,10.63-13.61,13.92-5.99,3.29-13.21,4.93-21.65,4.93h-28.46V0h30.22c8.1,0,15.01,1.65,20.72,4.93,5.71,3.29,10.04,7.91,12.98,13.87ZM130.86,39.67c0-8.31-2.04-14.76-6.13-19.37-4.09-4.6-10.14-6.91-18.17-6.91h-14.96v52.66h14.12c8.24,0,14.49-2.3,18.75-6.91,4.26-4.6,6.39-11.1,6.39-19.47ZM156,79.45h14.33V0h-14.33v79.45ZM247.79,35.7h-43.73V1.74h-6.02v76.44h6.02v-36.87h43.73v36.87h6.02V1.74h-6.02v33.96ZM318.83,1.74h-7.17l-20.04,31.37-20.77-31.37h-7.17l24.1,35.94-25.86,40.51h7.37l21.71-35.52,22.33,35.52h7.27l-25.86-40.3L318.83,1.74ZM370.76,43.96c-2.08-3.43-4.83-6.04-8.26-7.84-3.43-1.8-7.08-2.7-10.96-2.7-2.22,0-4.4.31-6.54.94l-.21-.31,24.93-27.11V1.74h-42.79v5.61h34.9l-26.28,29.29,3.32,4.57c3.46-1.94,6.99-2.91,10.59-2.91,5.33,0,9.69,1.65,13.09,4.93,3.39,3.29,5.09,7.6,5.09,12.93s-1.66,9.56-4.99,12.88c-3.32,3.32-7.62,4.99-12.88,4.99-4.71,0-8.67-1.11-11.89-3.32-3.22-2.22-5.94-5.37-8.15-9.45l-4.88,3.43c2.35,4.64,5.68,8.29,9.97,10.96,4.29,2.67,9.21,4,14.75,4,4.71,0,8.91-.99,12.62-2.96,3.7-1.97,6.58-4.73,8.62-8.26,2.04-3.53,3.06-7.62,3.06-12.26s-1.04-8.78-3.12-12.2ZM181.01,76.78l1.34,2.26h-.72l-1.27-2.16h-1.02v2.16h-.62v-5.14h1.47c.6,0,1.07.13,1.42.39.34.26.51.63.51,1.11,0,.35-.1.64-.29.88-.19.24-.46.4-.82.49ZM181.46,75.41c0-.29-.11-.51-.33-.67s-.55-.23-.97-.23h-.82v1.77h.82c.87,0,1.31-.29,1.31-.87ZM183.65,74.45c.33.6.5,1.27.5,2.02s-.17,1.42-.5,2.01c-.33.59-.8,1.05-1.39,1.39-.59.33-1.26.5-2.01.5s-1.43-.17-2.03-.5-1.05-.8-1.39-1.39c-.33-.59-.5-1.26-.5-2.01s.17-1.42.5-2.02.8-1.06,1.39-1.4,1.27-.5,2.03-.5,1.42.17,2.01.5c.59.33,1.05.8,1.39,1.4ZM183.64,76.46c0-.66-.15-1.25-.44-1.77s-.69-.92-1.21-1.21c-.51-.29-1.09-.44-1.74-.44s-1.25.15-1.76.44c-.51.29-.92.69-1.21,1.21s-.44,1.11-.44,1.77.15,1.25.44,1.77.69.92,1.21,1.21c.51.29,1.1.44,1.76.44s1.23-.15,1.74-.44c.51-.29.92-.69,1.21-1.21s.44-1.11.44-1.77Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                            
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-20ec113">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 263 67.39"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M87,17.94v2.56h-10v-2.56c0-4.1-3.34-7.44-7.44-7.44H19.17c-5.05,0-9.17,4.11-9.17,9.17s4.11,9.17,9.17,9.17h48c10.38,0,18.83,8.45,18.83,18.83s-8.45,18.83-18.83,18.83H16c-8.82,0-16-7.18-16-16v-4.5h10v4.5c0,3.31,2.69,6,6,6h51.17c4.87,0,8.83-3.96,8.83-8.83s-3.96-8.83-8.83-8.83H19.17C8.6,38.83,0,30.24,0,19.67S8.6.5,19.17.5h50.39c9.62,0,17.44,7.83,17.44,17.44ZM162.33,38.5c10.02,0,18.17-8.15,18.17-18.17v-2.17c0-10.02-8.15-18.17-18.17-18.17h-68.83v67.25h10V10h58.83c4.5,0,8.17,3.66,8.17,8.17v2.17c0,4.5-3.66,8.17-8.17,8.17h-37.15l41.21,38.89h14.54l-30.56-28.89h11.96ZM263,0h-82c2.85,3.09,4.92,6.4,6,10h30.5v56.5h10V10h35.5V0Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                            
                                                            <div class="icon-box__description">
                                    
                                </div>
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-9e53171">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 290.32 97.01"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M62.77,29.22c0-16.88-11.75-27.13-30.88-27.13H0v92.52h10.75v-39.01h19.88l23.63,39.01h12.63l-24.88-40.01c13-2.88,20.75-11.75,20.75-25.38ZM10.75,45.35V12.34h20.25c12.63,0,20.63,6.13,20.63,16.88s-8,16.13-20.63,16.13H10.75ZM69.89,2.09h69.77v10.25h-29.38v82.27h-10.88V12.34h-29.51V2.09ZM258.69,2.09h-32.38v92.52h10.75v-35.63h22.63c19.5,0,30.63-10.5,30.63-28.38s-11.5-28.51-31.63-28.51ZM257.69,48.85h-20.63V12.34h20.63c13.63,0,21.51,6.63,21.51,18.25s-7.88,18.25-21.51,18.25ZM210.38,64.51c1.75,10.07-1.32,18.89-8.64,24.86-6.14,5-14.88,7.65-25.25,7.65h0c-8.26,0-17.35-1.64-27.01-4.88l-.68-.23v-10.61l1.34.49c22.97,8.37,38.46,5.4,45.29-.17,4.46-3.63,6.22-8.95,5.11-15.39-1.23-7.09-10.81-10.1-20.95-13.29-13.42-4.22-30.13-9.47-30.13-27.57,0-8.83,3.44-15.8,9.95-20.13,15.34-10.23,41.72-2.59,46.86-.95l.7.22v10.63l-1.36-.52c-10.81-4.15-31.2-7.36-40.65-1.06-3.7,2.46-5.49,6.33-5.49,11.81,0,10.04,8.74,13.51,23.13,18.03,12.55,3.94,25.52,8.02,27.8,21.11Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                            
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-0339771">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 383 91"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M352.33,0h-43.33v91h12v-31h31.33c15.81,0,30.67-10.99,30.67-30,0-20.76-14.86-30-30.67-30ZM352.33,49.53h-31.33V10.47h31.33c10.29,0,16.67,8.76,16.67,19.54s-6.37,19.53-16.67,19.53ZM72,28.67C72,8.83,57.14,0,41.33,0H0v91h12v-33.67h29.33c.56,0,1.12-.02,1.68-.04,9.39,2.72,14.79,8.03,14.99,16.71v16.83h14v-15.83c0-10.45-5.06-20.11-16.32-20.77,9.41-4.36,16.32-13.18,16.32-25.57ZM41.33,47.33H12V10h29.33c10.29,0,16.67,8.37,16.67,18.67s-6.37,18.67-16.67,18.67ZM83,0h81v10h-34v80.83h-13V10h-34V0ZM277,0h5v91h-13V20.22l-28,70.78h-20l-28-70.78v70.78h-13V0h18l33,83.42L264,0h13Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                            
                                                            <div class="icon-box__description">
                                    
                                </div>
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-0d96c24">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 418.84 104"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M417.45,34.97c-.93-1.65-2.21-2.94-3.84-3.87s-3.49-1.39-5.55-1.39-3.96.46-5.6,1.39-2.92,2.21-3.84,3.87c-.93,1.65-1.39,3.51-1.39,5.58s.46,3.92,1.39,5.55,2.21,2.92,3.84,3.84,3.5,1.39,5.6,1.39,3.92-.46,5.55-1.39,2.92-2.21,3.84-3.84,1.39-3.49,1.39-5.55-.46-3.93-1.39-5.58ZM416.2,45.43c-.8,1.44-1.91,2.55-3.33,3.36-1.42.8-3.02,1.2-4.81,1.2s-3.44-.4-4.86-1.2c-1.42-.8-2.53-1.92-3.33-3.36-.8-1.44-1.2-3.06-1.2-4.88s.4-3.45,1.2-4.88c.8-1.44,1.91-2.55,3.33-3.36,1.42-.8,3.04-1.2,4.86-1.2s3.39.4,4.81,1.2c1.42.8,2.53,1.92,3.33,3.36.8,1.44,1.2,3.06,1.2,4.88s-.4,3.45-1.2,4.88ZM412.4,40.06c.52-.66.79-1.47.79-2.43,0-1.33-.47-2.35-1.41-3.08-.94-.72-2.25-1.09-3.91-1.09h-4.07v14.21h1.71v-5.97h2.82l3.52,5.97h1.99l-3.7-6.25c.99-.25,1.74-.7,2.27-1.37ZM407.77,40.03h-2.27v-4.91h2.27c1.17,0,2.07.22,2.68.65.62.43.93,1.05.93,1.85,0,1.6-1.2,2.41-3.61,2.41ZM52,0C23.28,0,0,23.28,0,52s23.28,52,52,52,52-23.28,52-52S80.72,0,52,0ZM57.5,88c-22.37,0-40.5-18.13-40.5-40.5S35.13,7,57.5,7s40.5,18.13,40.5,40.5-18.13,40.5-40.5,40.5ZM292.5,35.5h18v62h-18v-62ZM195.5,53.5v44h-18v-44c.17-8.01-4.99-12.45-16.97-12h-20.03v56h-18v-62h55.27c9.82.16,17.73,8.15,17.73,18ZM274.04,35.28h9l-31.54,62.22h-14l-31.11-62.22h20l23.66,47.32,23.99-47.32ZM350.23,35.5h35.27v6h-18.03c-11.98-.45-17.15,3.99-16.97,12v7h31v6h-31v31h-18v-44c0-9.85,7.92-17.84,17.73-17.99h0Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                            
                                                                                </div>
                    </div>
                                </div>
                                    </div>
        				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-e4014f6 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="e4014f6" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6500f3f" data-id="6500f3f" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-d178c2c elementor-widget elementor-widget-bolintech-heading" data-id="d178c2c" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-heading.default">
				<div class="elementor-widget-container">
					<h2 class="title">PTZ - Movement and Intelligence</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-c08e1ce elementor-widget elementor-widget-heading" data-id="c08e1ce" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">No Limits. No Missed Moments.</h2>				</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-9066908 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9066908" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-e3fbe82" data-id="e3fbe82" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-0b3b1a7 icon-box-columns-1 elementor-widget__width-initial icon-box-columns-tablet-1 icon-box-columns-mobile-1 icon-box--position-top elementor-widget elementor-widget-bolintech-icon-box" data-id="0b3b1a7" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-icon-box.default">
				<div class="elementor-widget-container">
					        <div class="icon-box">
                                            <div class="icon-box__item elementor-repeater-item-23d1e44">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="High-Precision Brushless Motors">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 204 204"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M102,0C45.76,0,0,45.76,0,102s45.76,102,102,102,102-45.76,102-102S158.24,0,102,0ZM102,202c-55.14,0-100-44.86-100-100S46.86,2,102,2s100,44.86,100,100-44.86,100-100,100ZM176.61,88.5h-37.49c-.52-1.42-1.13-2.8-1.8-4.15l26.27-26.27c1.3-1.3,2.02-3.03,2.02-4.87s-.72-3.57-2.02-4.87l-8.64-8.64c-1.3-1.3-3.03-2.02-4.87-2.02s-3.57.72-4.87,2.02l-26.52,26.52c-1.36-.64-2.76-1.19-4.19-1.67V27.39c0-3.8-3.09-6.89-6.89-6.89h-12.22c-3.8,0-6.89,3.09-6.89,6.89v37.49c-1.42.52-2.8,1.13-4.15,1.8l-26.27-26.27c-1.3-1.3-3.03-2.02-4.87-2.02s-3.57.72-4.87,2.02l-8.64,8.64c-1.3,1.3-2.02,3.03-2.02,4.87s.72,3.57,2.02,4.87l26.52,26.52c-.64,1.36-1.19,2.76-1.67,4.19H27.39c-3.8,0-6.89,3.09-6.89,6.89v12.22c0,3.8,3.09,6.89,6.89,6.89h37.49c.52,1.42,1.13,2.8,1.8,4.15l-26.27,26.27c-1.3,1.3-2.02,3.03-2.02,4.87s.72,3.57,2.02,4.87l8.64,8.64c1.3,1.3,3.03,2.02,4.87,2.02s3.57-.72,4.87-2.02l26.52-26.52c1.04.49,2.11.94,3.19,1.34v37.49c0,3.8,3.09,6.89,6.89,6.89h12.22c3.8,0,6.89-3.09,6.89-6.89v-37.15c1.77-.59,3.49-1.31,5.15-2.14l26.27,26.27c1.3,1.3,3.03,2.02,4.87,2.02s3.57-.72,4.87-2.02l8.64-8.64c1.3-1.3,2.02-3.03,2.02-4.87s-.72-3.57-2.02-4.87l-26.52-26.52c.64-1.36,1.19-2.76,1.67-4.19h37.15c3.8,0,6.89-3.09,6.89-6.89v-12.22c0-3.8-3.09-6.89-6.89-6.89ZM102,139.5c-20.68,0-37.5-16.82-37.5-37.5s16.82-37.5,37.5-37.5,37.5,16.82,37.5,37.5-16.82,37.5-37.5,37.5ZM146.63,41.11c1.91-1.91,5.01-1.91,6.91,0l8.64,8.64c1.91,1.91,1.91,5.01,0,6.91l-25.85,25.85c-3.7-6.48-9.17-11.83-15.76-15.36l26.05-26.05ZM90.5,27.39c0-2.7,2.19-4.89,4.89-4.89h12.22c2.7,0,4.89,2.19,4.89,4.89v36.54c-3.35-.92-6.86-1.43-10.5-1.43-4,0-7.86.6-11.5,1.71V27.39ZM41.11,57.37c-1.91-1.91-1.91-5.01,0-6.91l8.64-8.64c1.91-1.91,5.01-1.91,6.91,0l25.85,25.85c-6.48,3.69-11.83,9.17-15.36,15.76l-26.05-26.05ZM27.39,113.5c-2.7,0-4.89-2.19-4.89-4.89v-12.22c0-2.7,2.19-4.89,4.89-4.89h36.54c-.92,3.35-1.43,6.86-1.43,10.5,0,4,.6,7.86,1.71,11.5H27.39ZM57.37,162.89c-1.91,1.9-5.01,1.91-6.91,0l-8.64-8.64c-1.91-1.91-1.91-5.01,0-6.91l25.85-25.85c3.7,6.48,9.17,11.83,15.76,15.36l-26.05,26.05ZM112.5,176.61c0,2.7-2.19,4.89-4.89,4.89h-12.22c-2.7,0-4.89-2.19-4.89-4.89v-36.82c3.64,1.11,7.5,1.71,11.5,1.71,3.64,0,7.15-.5,10.5-1.43v36.54ZM162.89,146.63c1.91,1.91,1.91,5.01,0,6.91l-8.64,8.64c-1.91,1.91-5.01,1.91-6.91,0l-25.85-25.85c6.48-3.69,11.83-9.17,15.36-15.76l26.05,26.05ZM181.5,107.61c0,2.7-2.19,4.89-4.89,4.89h-36.54c.92-3.35,1.43-6.86,1.43-10.5,0-4-.6-7.86-1.71-11.5h36.82c2.7,0,4.89,2.19,4.89,4.89v12.22ZM116.73,85.84h2.02v35.24h-1.92v-31.54h-.14l-13.58,22.27h-1.3l-13.58-22.27h-.19v31.54h-1.87v-35.24h2.02l14.21,23.33h.14l14.21-23.33Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    High-Precision Brushless Motors                                </h3>
                            
                                                            <div class="icon-box__description">
                                    Brushless motors deliver smooth, precise camera movement with powerful performance, fast acceleration, and responsive speed while maintaining consistent reliability over time.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                    </div>
        				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-f455e91 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="f455e91" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-70deb1f" data-id="70deb1f" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-f5866d0 elementor-widget elementor-widget-image" data-id="f5866d0" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img loading="lazy" decoding="async" width="1000" height="1000" src="https://bolintechnology.com/wp-content/uploads/2026/04/Range-Brushless-Motor-P.webp" class="attachment-large size-large wp-image-47274" alt="Range Brushless Motor -P" srcset="https://bolintechnology.com/wp-content/uploads/2026/04/Range-Brushless-Motor-P.webp 1000w, https://bolintechnology.com/wp-content/uploads/2026/04/Range-Brushless-Motor-P-768x768.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/04/Range-Brushless-Motor-P-12x12.webp 12w, https://bolintechnology.com/wp-content/uploads/2026/04/Range-Brushless-Motor-P-300x300.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/04/Range-Brushless-Motor-P-600x600.webp 600w, https://bolintechnology.com/wp-content/uploads/2026/04/Range-Brushless-Motor-P-100x100.webp 100w" sizes="auto, (max-width: 1000px) 100vw, 1000px">															</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-69aa716 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="69aa716" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-9ed71a0" data-id="9ed71a0" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-672266f icon-box-columns-4 icon-box-columns-tablet-2 icon-box-columns-mobile-1 icon-box--position-top elementor-widget elementor-widget-bolintech-icon-box" data-id="672266f" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-icon-box.default">
				<div class="elementor-widget-container">
					        <div class="icon-box">
                                            <div class="icon-box__item elementor-repeater-item-20ec113">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="PTZR 4-Axis Movement">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 156.17 205.6"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M11.18,28.78h8.21c9.4,0,15.01-5.4,15.01-14.36S28.62,0,18.85,0H2.16v42.12h9.02v-13.34ZM11.18,8.15h6.37c4.86,0,7.61,2.27,7.61,6.26s-2.75,6.16-7.61,6.16h-6.37v-12.42ZM55.01,21.75c-9.16,0-15.08,4.71-15.08,12,0,5.76,4.26,9.63,10.6,9.63,3.58,0,6.44-1.3,8.03-3.61v2.86h9.75v-21.02c0-7.57-5.58-12.65-13.89-12.65-5.63,0-10.03,2.27-13.05,6.75l-.28.41,6.76,4.67.28-.42c1.4-2.07,3.19-3.07,5.47-3.07,3.06,0,4.95,1.57,4.95,4.09v.36h-3.55ZM53.61,16.29c-2.45,0-4.47,1.04-6.01,3.1l-5.12-3.54c2.82-3.92,6.83-5.91,11.94-5.91,7.71,0,12.89,4.68,12.89,11.65v20.02h-7.75v-3.67h-1.14l-.13.29c-1.22,2.63-4.04,4.14-7.75,4.14-4.78,0-9.6-2.67-9.6-8.63,0-6.68,5.53-11,14.08-11h4.55v-1.36c0-3.09-2.34-5.09-5.95-5.09ZM48.84,33.16c0,1.13.56,3.04,4.33,3.04s6.39-2,6.39-4.98v-2.34h-2.71c-5.31,0-8.01,1.44-8.01,4.28ZM58.56,31.21c0,2.75-2.71,3.98-5.39,3.98-2.21,0-3.33-.69-3.33-2.04,0-2.18,2.36-3.28,7.01-3.28h1.71v1.34ZM83.16,23.92c0-3.52,2.02-5.71,5.28-5.71,2.69,0,4.36,1.96,4.36,5.12v19.29h9.69v-21.24c0-7.9-3.88-12.43-10.65-12.43-3.57,0-6.67,1.52-8.68,4.22v-3.46h-9.75v32.92h9.75v-18.7ZM82.16,41.62h-7.75V10.71h7.75v4.21h1.06l.14-.25c1.77-3,4.86-4.72,8.48-4.72,6.13,0,9.65,4.17,9.65,11.43v20.24h-7.69v-18.29c0-3.71-2.1-6.12-5.36-6.12-3.81,0-6.28,2.63-6.28,6.71v17.7ZM11.93,63.65H0v-8.42h32.83v8.42h-11.88v33.7h-9.02v-33.7ZM46.64,50.89c-3.42,0-5.63,2.23-5.63,5.68s2.21,5.68,5.63,5.68,5.74-2.28,5.74-5.68-2.25-5.68-5.74-5.68ZM46.64,61.26c-2.86,0-4.63-1.79-4.63-4.68s1.73-4.68,4.63-4.68,4.74,1.79,4.74,4.68-1.86,4.68-4.74,4.68ZM41.82,97.85h9.75v-32.92h-9.75v32.92ZM42.82,65.93h7.75v30.92h-7.75v-30.92ZM67.28,87.25v-32.52h-9.75v35.38c0,5.06,3,7.84,8.44,7.84h4.82v-9.26h-2.07c-1.03,0-1.44-.42-1.44-1.44ZM69.79,89.69v7.26h-3.82c-4.87,0-7.44-2.37-7.44-6.84v-34.38h7.75v31.52c0,1.58.87,2.44,2.44,2.44h1.07ZM76.76,87.3c0,7.36,3.92,11.41,11.03,11.41,2.1,0,3.89-.26,5.97-.88l.36-.11v-9.32l-.65.21c-1.2.38-2.37.57-3.57.57-2.19,0-3.39-1.13-3.39-3.17v-11.81h8.26v-9.26h-8.26v-9.02h-9.75v9.02h-4.91v9.26h4.91v13.11ZM72.84,73.2v-7.26h4.91v-9.02h7.75v9.02h8.26v7.26h-8.26v12.81c0,2.61,1.64,4.17,4.39,4.17,1.07,0,2.16-.14,3.23-.43v7.22c-1.84.52-3.45.74-5.33.74-6.47,0-10.03-3.7-10.03-10.41v-14.11h-4.91ZM33.48,150.35H.27v-6.91l20.09-26.78H.92v-8.42h31.64v6.91l-20.03,26.78h20.95v8.42ZM55.77,117.18c-9.62,0-15.84,6.75-15.84,17.19s6.07,17.24,15.84,17.24,15.84-6.61,15.84-17.24-6.22-17.19-15.84-17.19ZM55.77,150.6c-9.15,0-14.84-6.22-14.84-16.24s5.69-16.19,14.84-16.19,14.84,6.2,14.84,16.19-5.68,16.24-14.84,16.24ZM55.77,125.44c-4.21,0-6.93,3.5-6.93,8.92s2.72,9.03,6.93,9.03,6.93-3.54,6.93-9.03-2.72-8.92-6.93-8.92ZM55.77,142.4c-3.66,0-5.93-3.08-5.93-8.03s2.27-7.92,5.93-7.92,5.93,3.04,5.93,7.92-2.27,8.03-5.93,8.03ZM90.22,117.18c-9.62,0-15.84,6.75-15.84,17.19s6.07,17.24,15.84,17.24,15.84-6.61,15.84-17.24-6.22-17.19-15.84-17.19ZM90.22,150.6c-9.15,0-14.84-6.22-14.84-16.24s5.69-16.19,14.84-16.19,14.84,6.2,14.84,16.19-5.68,16.24-14.84,16.24ZM90.22,125.44c-4.21,0-6.93,3.5-6.93,8.92s2.72,9.03,6.93,9.03,6.93-3.54,6.93-9.03-2.72-8.92-6.93-8.92ZM90.22,142.4c-3.66,0-5.93-3.08-5.93-8.03s2.27-7.92,5.93-7.92,5.93,3.04,5.93,7.92-2.27,8.03-5.93,8.03ZM146.05,117.18c-4.25,0-7.47,1.58-9.82,4.84-1.48-3.13-4.28-4.84-7.95-4.84-3.48,0-6.42,1.45-8.41,4.12v-3.36h-9.75v32.92h9.75v-18.91c0-3.56,1.71-5.6,4.68-5.6,3.23,0,3.71,3.17,3.71,5.06v19.45h9.75v-18.91c0-3.61,1.66-5.6,4.68-5.6,2.39,0,3.77,1.84,3.77,5.06v19.45h9.69v-21.45c0-7.65-3.78-12.22-10.11-12.22ZM155.17,149.85h-7.69v-18.45c0-3.8-1.78-6.06-4.77-6.06-3.56,0-5.68,2.47-5.68,6.6v17.91h-7.75v-18.45c0-3.8-1.76-6.06-4.71-6.06-3.56,0-5.68,2.47-5.68,6.6v17.91h-7.75v-30.92h7.75v4.1h1.05l.15-.24c1.78-2.98,4.69-4.62,8.21-4.62s6,1.65,7.26,4.76l.13.31h.93l.15-.22c2.18-3.27,5.22-4.85,9.3-4.85,5.79,0,9.11,4.09,9.11,11.22v20.45ZM33.91,175.89c0-8.53-5.83-13.66-15.17-13.66H2.16v42.12h9.02v-14.8h6.32l7.94,14.8h10.58l-9.5-16.2c4.64-2.05,7.4-6.32,7.4-12.26ZM17.5,181.34h-6.32v-10.96h6.32c4.37,0,7.18,1.84,7.18,5.51s-2.81,5.45-7.18,5.45ZM55.77,179.44c-4.21,0-6.93,3.5-6.93,8.92s2.72,9.03,6.93,9.03,6.93-3.54,6.93-9.03-2.72-8.92-6.93-8.92ZM55.77,196.4c-3.66,0-5.93-3.08-5.93-8.03s2.27-7.92,5.93-7.92,5.93,3.04,5.93,7.92-2.27,8.03-5.93,8.03ZM55.77,171.18c-9.62,0-15.84,6.75-15.84,17.19s6.07,17.24,15.84,17.24,15.84-6.61,15.84-17.24-6.22-17.19-15.84-17.19ZM55.77,204.6c-9.15,0-14.84-6.22-14.84-16.24s5.69-16.19,14.84-16.19,14.84,6.2,14.84,16.19-5.68,16.24-14.84,16.24ZM85.43,194.25v-32.52h-9.75v35.38c0,5.06,3,7.84,8.44,7.84h4.82v-9.26h-2.07c-1.03,0-1.44-.42-1.44-1.44ZM87.94,203.96h-3.82c-4.87,0-7.44-2.37-7.44-6.84v-34.38h7.75v31.52c0,1.58.87,2.44,2.44,2.44h1.07v7.26ZM102,194.25v-32.52h-9.75v35.38c0,5.06,3,7.84,8.44,7.84h4.82v-9.26h-2.07c-1.03,0-1.44-.42-1.44-1.44ZM104.51,203.96h-3.82c-4.87,0-7.44-2.37-7.44-6.84v-34.38h7.75v31.52c0,1.58.87,2.44,2.44,2.44h1.07v7.26Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    PTZR 4-Axis Movement                                </h3>
                            
                                                            <div class="icon-box__description">
                                    PTZR drive enables pan, tilt, zoom, and roll movement, allowing greater flexibility in framing and camera positioning.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-0339771">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="Precise FreeD Production">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 358.55 181.5"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M0,34.62h34.98v3.15H3.23v25.53h29.51v3.15H3.23v28.84H0v-60.67ZM56.53,62.55h-.17v-10.53h-3.23v43.27h3.23v-25.03c0-6.3,6.8-16.08,18.07-16.08h1.16v-3.32h-.75c-9.2,0-15.42,5.89-18.32,11.69ZM123.92,71.01c0,.91-.08,2.07-.25,3.15h-34.07c.17,11.44,6.8,19.23,16.49,19.23,5.8,0,11.44-3.07,14.09-7.79l2.49,1.66c-2.98,5.39-9.37,9.12-16.58,9.12-11.77,0-19.73-9.2-19.73-22.71s7.71-22.79,19.31-22.79c10.86,0,18.23,8.37,18.23,20.14ZM120.68,71.17c.08-10.03-5.88-17.41-15-17.41s-15.09,6.71-16,17.41h31ZM139.17,73.66c0-13.51,7.71-22.79,19.31-22.79,10.86,0,18.23,8.37,18.23,20.14,0,.91-.08,2.07-.25,3.15h-34.07c.17,11.44,6.8,19.23,16.49,19.23,5.8,0,11.44-3.07,14.09-7.79l2.49,1.66c-2.98,5.39-9.37,9.12-16.58,9.12-11.77,0-19.73-9.2-19.73-22.71ZM142.48,71.17h31c.08-10.03-5.88-17.41-15-17.41s-15.09,6.71-16,17.41ZM213.35,95.29h-20.47v-60.67h21.38c16.83,0,27.27,11.19,27.27,30.34s-10.77,30.34-28.18,30.34ZM238.14,64.96c0-17.41-9.37-27.19-24.29-27.19h-17.74v54.37h17.07c15.33,0,24.95-9.78,24.95-27.19ZM358.06,177l-28.88-42.3V7.67c0-4.23-3.44-7.67-7.67-7.67h-158.67c-4.23,0-7.67,3.44-7.67,7.67v20.22h2V7.67c0-3.12,2.54-5.67,5.67-5.67h158.67c3.12,0,5.67,2.54,5.67,5.67v127.64l29.22,42.8c.27.4.12.78.04.92-.08.14-.3.47-.79.47h-226.88c-.49,0-.72-.33-.79-.48-.08-.14-.22-.52.05-.93l28.97-42.54.17-.25v-29.64h-2v29.02l-28.79,42.28c-.61.89-.67,2.03-.17,2.99.5.95,1.48,1.54,2.56,1.54h226.88c1.07,0,2.04-.58,2.55-1.53.51-.94.45-2.08-.15-2.98Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    Precise FreeD Production                                </h3>
                            
                                                            <div class="icon-box__description">
                                    FreeD output provides precise camera tracking data for AR elements, virtual sets, and XR production environments.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-ad36888">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="3-Axis Image Stabilization">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 246.87 240.36"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M97.63,236.46l-.87,3.91c-33.7-7.47-62.92-28.89-80.17-58.77C-2.44,148.63-5.24,109.42,8.91,74.03l3.71,1.48C-1.07,109.76,1.65,147.69,20.06,179.59c16.69,28.91,44.96,49.64,77.57,56.87ZM230.3,58.22C213.26,28.71,185.64,8.04,152.52,0l-.94,3.89c32.05,7.77,58.77,27.78,75.26,56.33,18.02,31.21,21,68.45,8.18,102.17l3.74,1.42c13.25-34.85,10.16-73.34-8.46-105.59ZM91.39,194.69l1.57-3.68c-15.46-6.61-28.09-17.83-36.52-32.43-9.21-15.95-12.43-34.69-9.07-52.77l-3.93-.73c-3.53,19.02-.14,38.72,9.54,55.5,8.87,15.36,22.15,27.15,38.41,34.11ZM158.05,46.26l-1.7,3.62c14.35,6.73,26.14,17.57,34.09,31.34,8.96,15.53,12.27,33.8,9.31,51.45l3.94.66c3.12-18.56-.36-37.78-9.79-54.11-8.36-14.49-20.76-25.89-35.86-32.96ZM172.61,122.92c2.5,4.33,3.17,9.38,1.87,14.21-1.29,4.83-4.39,8.87-8.73,11.37l-32.43,18.72c-.31.18-.66.27-1,.27-.69,0-1.36-.36-1.73-1-.55-.96-.22-2.18.73-2.73l32.43-18.72c3.41-1.97,5.84-5.14,6.86-8.94s.5-7.77-1.47-11.18l-29.77-51.57c-4.06-7.03-13.09-9.45-20.12-5.39l-32.43,18.72c-7.03,4.06-9.45,13.09-5.39,20.12l30.69,53.16c.55.96.22,2.18-.73,2.73-.96.55-2.18.22-2.73-.73l-30.69-53.16c-5.16-8.94-2.09-20.42,6.85-25.58l13.59-7.85-43.82-25.3,49.06-28.33v50.6l13.59-7.85c8.94-5.16,20.42-2.09,25.58,6.85l29.77,51.57ZM62.6,50.08l37.06,21.4V28.68l-37.06,21.4Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    3-Axis Image Stabilization                                </h3>
                            
                                                            <div class="icon-box__description">
                                    Gyro-based stabilization helps maintain steady images by automatically adjusting to camera movement and environmental vibration.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-6bbeddb">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label=" Slow and Fast Movement">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 367 161.61"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M54.68,59.3c10.97-29.72,39.63-49.69,71.32-49.69,9.86,0,19.45,1.86,28.5,5.53.51.21.76.79.55,1.3-.21.51-.79.76-1.3.55-8.82-3.57-18.16-5.38-27.75-5.38-30.86,0-58.77,19.44-69.45,48.38-.15.4-.53.65-.94.65-.12,0-.23-.02-.35-.06-.52-.19-.78-.77-.59-1.28ZM50,93.65v-23.54c0-13.23-10.77-24-24-24S2,56.88,2,70.11v17c0,18.84,8.52,37.37,23.38,50.84,17.16,15.56,41.23,23.09,66.03,20.67.57-.04,1.04.35,1.09.9.05.55-.35,1.04-.9,1.09-25.36,2.49-49.99-5.23-67.57-21.17C8.76,125.58,0,106.51,0,87.11v-17c0-14.34,11.66-26,26-26s26,11.66,26,26v23.54c0,35.76,33.89,65.96,74,65.96,11.59,0,22.56-2.68,32.33-7.45-7.07,1.29-13.84,1.94-20.23,1.94-11.06,0-21-1.93-29.44-5.78-13.31-6.07-22.43-16.77-25.7-30.15-6.87-9.06-10.96-20.34-10.96-32.56,0-29.78,24.22-54,54-54s54,24.22,54,54-24.22,54-54,54c-15.72,0-29.89-6.76-39.77-17.51,3.9,10.72,12.02,19.28,23.26,24.41,14.39,6.56,33.37,7.37,54.9,2.35,21.34-13,35.61-36.48,35.61-63.24s-15.28-52.88-39.88-65.68c-.49-.25-.68-.86-.42-1.35.25-.49.86-.68,1.35-.42,25.26,13.15,40.95,39,40.95,67.45,0,41.91-34.09,76-76,76-19.17,0-38.37-7.03-52.67-19.3-15.05-12.91-23.33-30.19-23.33-48.67ZM74,85.61c0,28.67,23.33,52,52,52s52-23.33,52-52-23.33-52-52-52-52,23.33-52,52ZM317.33,88.61c.55,0,1-.45,1-1s-.45-1-1-1h-80.33c-.55,0-1,.45-1,1s.45,1,1,1h80.33ZM366,86.61h-26.67c-.55,0-1,.45-1,1s.45,1,1,1h26.67c.55,0,1-.45,1-1s-.45-1-1-1ZM237.33,54.61h15.67c.55,0,1-.45,1-1s-.45-1-1-1h-15.67c-.55,0-1,.45-1,1s.45,1,1,1ZM237.33,121.61c-.55,0-1,.45-1,1s.45,1,1,1h33.67c.55,0,1-.45,1-1s-.45-1-1-1h-33.67ZM329,121.61h-35.67c-.55,0-1,.45-1,1s.45,1,1,1h35.67c.55,0,1-.45,1-1s-.45-1-1-1ZM298,155.61h-60.67c-.55,0-1,.45-1,1s.45,1,1,1h60.67c.55,0,1-.45,1-1s-.45-1-1-1ZM193.62,139.32c-.44-.34-1.07-.26-1.4.17-.34.44-.26,1.06.17,1.4l22.71,17.71h-51.76c-.55,0-1,.45-1,1s.45,1,1,1h54.22c.49,0,.93-.31,1.09-.78.16-.46,0-.98-.38-1.29l-24.65-19.23ZM329,52.61h-53.67c-.55,0-1,.45-1,1s.45,1,1,1h53.67c.55,0,1-.45,1-1s-.45-1-1-1ZM237.33,20.11h61.67c.55,0,1-.45,1-1s-.45-1-1-1h-61.67c-.55,0-1,.45-1,1s.45,1,1,1ZM126,53.11c.55,0,1-.45,1-1v-8.42c0-.55-.45-1-1-1s-1,.45-1,1v8.42c0,.55.45,1,1,1ZM104.02,60.47c.2.24.48.36.77.36.23,0,.45-.08.64-.23.42-.35.48-.99.12-1.41l-5.41-6.45c-.35-.42-.98-.48-1.41-.12-.42.35-.48.99-.12,1.41l5.41,6.45ZM93.5,80.38c.48,0,.9-.34.98-.83.1-.54-.27-1.06-.81-1.16l-8.29-1.46c-.55-.1-1.06.27-1.16.81-.1.54.27,1.06.81,1.16l8.29,1.46c.06.01.12.02.17.02ZM90.13,106.82c.17,0,.34-.04.5-.13l7.29-4.21c.48-.28.64-.89.37-1.37-.28-.48-.89-.64-1.37-.37l-7.29,4.21c-.48.28-.64.89-.37,1.37.19.32.52.5.87.5ZM154.08,102.48l7.29,4.21c.16.09.33.13.5.13.35,0,.68-.18.87-.5.28-.48.11-1.09-.37-1.37l-7.29-4.21c-.48-.28-1.09-.11-1.37.37s-.11,1.09.37,1.37ZM158.5,80.38c.06,0,.12,0,.17-.02l8.29-1.46c.54-.1.91-.61.81-1.16-.1-.54-.61-.91-1.16-.81l-8.29,1.46c-.54.1-.91.61-.81,1.16.08.49.51.83.98.83ZM147.21,60.83c.29,0,.57-.12.77-.36l5.41-6.45c.36-.42.3-1.05-.12-1.41-.42-.35-1.05-.3-1.41.12l-5.41,6.45c-.36.42-.3,1.05.12,1.41.19.16.42.23.64.23ZM126,88.11c1.02,0,1.9-.62,2.29-1.5h19.71c.55,0,1-.45,1-1s-.45-1-1-1h-19.71c-.39-.88-1.26-1.5-2.29-1.5-1.38,0-2.5,1.12-2.5,2.5s1.12,2.5,2.5,2.5ZM16,23.11v18.11c0,.55.45,1,1,1s1-.45,1-1v-18.11C18,8.74,6.06.62,5.55.28c-.46-.3-1.08-.18-1.39.28-.31.46-.18,1.08.28,1.39.12.08,11.56,7.89,11.56,21.17ZM32,23v18.11c0,.55.45,1,1,1s1-.45,1-1v-18.11C34,8.63,22.06.51,21.55.17c-.46-.3-1.08-.18-1.39.28-.31.46-.18,1.08.28,1.39.12.08,11.56,7.89,11.56,21.17Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                     Slow and Fast Movement                                </h3>
                            
                                                            <div class="icon-box__description">
                                    Pan and tilt speeds range from an ultra-slow 0.05° per second to a fast 70° per second, enabling both precise motion and rapid repositioning.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                    </div>
        				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-cdcdd53 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="cdcdd53" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e305238" data-id="e305238" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-284e7a4 elementor-widget elementor-widget-heading" data-id="284e7a4" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Ultra Fine Movement Control</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-d6983b2 icon-box-columns-1 icon-box-columns-tablet-1 icon-box-columns-mobile-1 icon-box--position-top elementor-widget elementor-widget-bolintech-icon-box" data-id="d6983b2" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-icon-box.default">
				<div class="elementor-widget-container">
					        <div class="icon-box">
                                            <div class="icon-box__item elementor-repeater-item-9aa8142">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 237.19 239.2"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M134.27,119.75c0,7.46-6.04,13.5-13.5,13.5s-13.5-6.04-13.5-13.5,6.04-13.5,13.5-13.5,13.5,6.04,13.5,13.5ZM96.17,136.04c-1.81-2.74-5.5-3.49-8.24-1.67-2.74,1.81-3.49,5.5-1.67,8.24,1.81,2.74,5.5,3.49,8.24,1.67,2.74-1.81,3.49-5.5,1.67-8.24ZM85.24,114.29c-3.28.05-5.91,2.74-5.86,6.03.04,3.28,2.74,5.91,6.03,5.86,3.28-.04,5.91-2.74,5.86-6.03s-2.74-5.91-6.03-5.86ZM95.73,104.15c1.74-2.79.89-6.45-1.9-8.19-2.79-1.74-6.45-.89-8.19,1.9-1.74,2.79-.89,6.45,1.9,8.19,2.79,1.74,6.45.89,8.19-1.9ZM100.23,90.26c1.4,2.97,4.95,4.23,7.92,2.83,2.97-1.4,4.23-4.95,2.83-7.92-1.4-2.97-4.95-4.23-7.92-2.83-2.97,1.4-4.23,4.95-2.83,7.92ZM124.56,90.5c3.26.42,6.24-1.87,6.66-5.13.42-3.26-1.87-6.24-5.13-6.66-3.26-.42-6.24,1.87-6.66,5.13-.42,3.26,1.87,6.24,5.13,6.66ZM148.15,96.48c2.12-2.51,1.8-6.26-.71-8.38-2.51-2.12-6.26-1.8-8.38.71-2.12,2.51-1.8,6.26.71,8.38,2.51,2.12,6.26,1.8,8.38-.71ZM156.39,114.98c3.14-.97,4.9-4.3,3.93-7.43s-4.3-4.9-7.43-3.93-4.9,4.3-3.93,7.43,4.3,4.9,7.43,3.93ZM160.64,130.87c.88-3.16-.97-6.44-4.13-7.32s-6.44.97-7.32,4.13c-.88,3.16.97,6.44,4.13,7.32s6.44-.97,7.32-4.13ZM148.3,150.66c2.45-2.18,2.67-5.94.48-8.39-2.18-2.45-5.94-2.67-8.39-.48-2.45,2.18-2.67,5.94-.48,8.39,2.18,2.45,5.94,2.67,8.39.48ZM127.22,160.64c3.24-.51,5.46-3.56,4.95-6.8-.51-3.24-3.56-5.46-6.8-4.95-3.24.51-5.46,3.56-4.95,6.8.51,3.24,3.56,5.46,6.8,4.95ZM104.09,157.63c3,1.32,6.51-.04,7.84-3.05,1.32-3-.04-6.51-3.05-7.84-3-1.32-6.51.04-7.84,3.05-1.32,3,.04,6.51,3.05,7.84ZM21.5,177.78c-2.74,1.8-3.51,5.49-1.71,8.23s5.49,3.51,8.23,1.71c2.74-1.8,3.51-5.49,1.71-8.23-1.8-2.74-5.49-3.51-8.23-1.71ZM11.89,120.8c-.03-3.28-2.72-5.92-6-5.89C2.61,114.94-.03,117.63,0,120.91c.03,3.28,2.72,5.92,6,5.89,3.28-.03,5.92-2.72,5.89-6ZM20.41,63.63c2.78,1.75,6.45.91,8.2-1.87s.91-6.45-1.87-8.2c-2.78-1.75-6.45-.91-8.2,1.87-1.75,2.78-.91,6.45,1.87,8.2ZM74.59,21.15c2.97-1.39,4.25-4.93,2.86-7.9-1.39-2.97-4.93-4.25-7.9-2.86-2.97,1.39-4.25,4.93-2.86,7.9,1.39,2.97,4.93,4.25,7.9,2.86ZM135.23,11.84c3.25.44,6.25-1.85,6.68-5.1.44-3.25-1.85-6.25-5.1-6.68-3.25-.44-6.25,1.85-6.68,5.1-.44,3.25,1.85,6.25,5.1,6.68ZM191.28,36.79c2.5,2.13,6.25,1.82,8.38-.68s1.82-6.25-.68-8.38c-2.5-2.13-6.25-1.82-8.38.68-2.13,2.5-1.82,6.25.68,8.38ZM232.36,92.04c3.14-.96,4.91-4.28,3.96-7.42-.95-3.14-4.28-4.91-7.42-3.96-3.14.96-4.91,4.28-3.96,7.42.96,3.14,4.28,4.91,7.42,3.96ZM232.87,145.33c-3.16-.9-6.45.94-7.34,4.1s.94,6.45,4.1,7.34c3.16.89,6.45-.94,7.34-4.1.9-3.16-.94-6.45-4.1-7.34ZM192.85,201.36c-2.46,2.17-2.69,5.93-.52,8.39,2.17,2.46,5.93,2.69,8.39.52,2.46-2.17,2.69-5.93.52-8.39-2.17-2.46-5.93-2.69-8.39-.52ZM137.29,227.37c-3.25.5-5.47,3.53-4.97,6.78s3.53,5.47,6.78,4.97,5.47-3.53,4.97-6.78c-.5-3.25-3.53-5.47-6.78-4.97ZM76.48,219.22c-3-1.34-6.51.01-7.85,3.01-1.34,3,.01,6.51,3.01,7.85s6.51-.01,7.85-3.01c1.34-3-.01-6.51-3.01-7.85ZM56.62,193.67c-3.73-3.23-9.37-2.83-12.6.89-3.23,3.73-2.83,9.37.89,12.6,3.73,3.23,9.37,2.83,12.6-.89,3.23-3.73,2.83-9.37-.89-12.6ZM26.84,147.26c-1.39-4.74-6.35-7.45-11.08-6.06-4.74,1.39-7.45,6.35-6.06,11.08s6.35,7.45,11.08,6.06c4.74-1.39,7.45-6.35,6.06-11.08ZM15.79,98.16c4.73,1.39,9.7-1.31,11.09-6.05,1.39-4.73-1.31-9.7-6.05-11.09-4.73-1.39-9.7,1.31-11.09,6.05s1.31,9.7,6.05,11.09ZM56.73,45.74c3.73-3.23,4.14-8.87.91-12.6s-8.87-4.14-12.6-.91c-3.73,3.23-4.14,8.87-.91,12.6,3.23,3.73,8.87,4.14,12.6.91ZM106.91,22.87c4.88-.7,8.28-5.22,7.58-10.11-.7-4.88-5.22-8.28-10.11-7.58-4.88.7-8.28,5.22-7.58,10.11s5.22,8.28,10.11,7.58ZM161.49,30.76c4.49,2.05,9.79.08,11.84-4.41,2.05-4.49.08-9.79-4.41-11.84-4.49-2.05-9.79-.08-11.84,4.41-2.05,4.49-.08,9.79,4.41,11.84ZM215.48,69.6c4.15-2.66,5.36-8.19,2.69-12.34-2.66-4.15-8.19-5.36-12.34-2.69s-5.36,8.19-2.69,12.34c2.66,4.15,8.19,5.36,12.34,2.69ZM236.5,119.84c0-4.93-3.99-8.94-8.93-8.94-4.93,0-8.94,3.99-8.94,8.93,0,4.93,3.99,8.94,8.93,8.94,4.93,0,8.94-3.99,8.94-8.93ZM215.41,170.05c-4.15-2.67-9.68-1.47-12.35,2.68-2.67,4.15-1.47,9.68,2.68,12.35,4.15,2.67,9.68,1.47,12.35-2.68,2.67-4.15,1.47-9.68-2.68-12.35ZM161.36,208.81c-4.49,2.05-6.47,7.34-4.42,11.83,2.05,4.49,7.34,6.47,11.83,4.42,4.49-2.05,6.47-7.34,4.42-11.83-2.05-4.49-7.34-6.47-11.83-4.42ZM106.77,216.62c-4.88-.71-9.41,2.68-10.12,7.56-.71,4.88,2.68,9.41,7.56,10.12s9.41-2.68,10.12-7.56c.71-4.88-2.68-9.41-7.56-10.12ZM73.55,132.86c-1.46-5.25-6.9-8.33-12.15-6.87-5.25,1.46-8.33,6.9-6.87,12.15,1.46,5.25,6.9,8.33,12.15,6.87,5.25-1.46,8.33-6.9,6.87-12.15ZM55.1,99.41c-1.61,5.21,1.3,10.74,6.51,12.35s10.74-1.3,12.35-6.51-1.3-10.74-6.51-12.35c-5.21-1.61-10.74,1.3-12.35,6.51ZM76.52,67.13c-4.17,3.51-4.71,9.74-1.2,13.91s9.74,4.71,13.91,1.2c4.17-3.51,4.71-9.74,1.2-13.91-3.51-4.17-9.74-4.71-13.91-1.2ZM111.99,51.57c-5.41.7-9.23,5.64-8.53,11.05.7,5.41,5.64,9.23,11.05,8.53s9.23-5.64,8.53-11.05c-.7-5.41-5.64-9.23-11.05-8.53ZM137.1,62.34c-2.34,4.93-.24,10.82,4.68,13.15,4.93,2.34,10.82.24,13.15-4.68,2.34-4.93.24-10.82-4.68-13.15-4.93-2.34-10.82-.24-13.15,4.68ZM175.97,97.05c4.63-2.88,6.05-8.97,3.17-13.6s-8.97-6.05-13.6-3.17-6.05,8.97-3.17,13.6c2.88,4.63,8.97,6.05,13.6,3.17ZM189.51,120.78c.08-5.45-4.27-9.94-9.73-10.02-5.45-.08-9.94,4.27-10.02,9.73-.08,5.45,4.27,9.94,9.73,10.02,5.45.08,9.94-4.27,10.02-9.73ZM164.35,160.54c4.54,3.02,10.67,1.78,13.69-2.76s1.78-10.67-2.76-13.69-10.67-1.78-13.69,2.76-1.78,10.67,2.77,13.69ZM140.46,164.62c-4.99,2.19-7.27,8.02-5.07,13.01,2.19,4.99,8.02,7.27,13.01,5.07,4.99-2.19,7.27-8.02,5.07-13.01-2.19-4.99-8.02-7.27-13.01-5.07ZM109.97,187.65c5.39.86,10.45-2.82,11.3-8.2s-2.82-10.45-8.2-11.3-10.45,2.82-11.3,8.2,2.82,10.45,8.2,11.3ZM74.98,171.03c4.07,3.63,10.31,3.28,13.94-.79,3.63-4.07,3.28-10.31-.79-13.94-4.07-3.63-10.31-3.28-13.94.79-3.63,4.07-3.28,10.31.79,13.94ZM42.03,153.3c-6.59,4.21-8.51,12.97-4.3,19.55s12.97,8.51,19.55,4.3c6.59-4.21,8.51-12.97,4.3-19.55s-12.97-8.51-19.55-4.3ZM36.39,105.41c-7.82-.02-14.17,6.31-14.19,14.12-.02,7.82,6.31,14.17,14.12,14.19,7.82.02,14.17-6.31,14.19-14.12.02-7.82-6.31-14.17-14.12-14.19ZM42.18,85.85c6.57,4.24,15.33,2.36,19.57-4.21s2.36-15.33-4.21-19.57-15.33-2.36-19.57,4.21-2.36,15.33,4.21,19.57ZM72.98,48.75c3.23,7.12,11.62,10.27,18.74,7.04s10.27-11.62,7.04-18.74c-3.23-7.12-11.62-10.27-18.74-7.04s-10.27,11.62-7.04,18.74ZM130.92,50.24c7.74,1.13,14.92-4.23,16.05-11.96s-4.23-14.92-11.96-16.05-14.92,4.23-16.05,11.96c-1.13,7.74,4.23,14.92,11.96,16.05ZM165.5,46.79c-5.13,5.9-4.51,14.84,1.38,19.97s14.84,4.51,19.97-1.38c5.13-5.9,4.51-14.84-1.38-19.97s-14.84-4.51-19.97,1.38ZM215.4,92.2c-2.19-7.51-10.04-11.82-17.55-9.63-7.51,2.19-11.82,10.04-9.63,17.55s10.04,11.82,17.55,9.63c7.51-2.19,11.82-10.04,9.63-17.55ZM197.68,157.29c7.5,2.22,15.37-2.06,17.59-9.56,2.22-7.5-2.06-15.37-9.56-17.59s-15.37,2.06-17.59,9.56c-2.22,7.5,2.06,15.37,9.56,17.59ZM166.65,172.95c-5.92,5.11-6.58,14.05-1.47,19.97,5.11,5.92,14.05,6.58,19.97,1.47,5.92-5.11,6.58-14.05,1.47-19.97-5.11-5.92-14.05-6.58-19.97-1.47ZM130.61,189.31c-7.74,1.1-13.13,8.26-12.03,16,1.1,7.74,8.26,13.13,16,12.03s13.13-8.26,12.03-16c-1.1-7.74-8.26-13.13-16-12.03ZM91.44,183.59c-7.1-3.26-15.51-.15-18.77,6.95-3.26,7.1-.15,15.51,6.95,18.77,7.1,3.26,15.51.15,18.77-6.95,3.26-7.1.15-15.51-6.95-18.77Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                            
                                                            <div class="icon-box__description">
                                    
                                </div>
                                                                                </div>
                    </div>
                                </div>
                                    </div>
        				</div>
				</div>
				<div class="elementor-element elementor-element-55fa715 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="55fa715" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="text-align: center;">UltraFine Movement Control expands PTZ positioning to 255 control steps, far beyond the typical 24-step standard used by most cameras. This increased precision allows operators to achieve smoother, more refined camera movement and more accurate positioning. The result is more controlled motion and subtle adjustments that are especially valuable in broadcast, studio, and live production environments where precise framing matters.</p>								</div>
				</div>
				<div class="elementor-element elementor-element-ebf47ed elementor-widget elementor-widget-image" data-id="ebf47ed" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img loading="lazy" decoding="async" width="2560" height="1440" src="https://bolintechnology.com/wp-content/uploads/2026/04/Ultra-Fine-Movement-Control-Range-1-scaled.webp" class="attachment-large size-large wp-image-48432" alt="Ultra Fine Movement Control - Range-1" srcset="https://bolintechnology.com/wp-content/uploads/2026/04/Ultra-Fine-Movement-Control-Range-1-scaled.webp 2560w, https://bolintechnology.com/wp-content/uploads/2026/04/Ultra-Fine-Movement-Control-Range-1-768x432.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/04/Ultra-Fine-Movement-Control-Range-1-18x10.webp 18w, https://bolintechnology.com/wp-content/uploads/2026/04/Ultra-Fine-Movement-Control-Range-1-300x169.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/04/Ultra-Fine-Movement-Control-Range-1-600x338.webp 600w" sizes="auto, (max-width: 2560px) 100vw, 2560px">															</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-7aef0dc scroll-trigger elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7aef0dc" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1e0a407" data-id="1e0a407" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-a24d39c elementor-widget elementor-widget-video" data-id="a24d39c" data-element_type="widget" data-e-type="widget" data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;mute&quot;:&quot;yes&quot;}" data-widget_type="video.default">
				<div class="elementor-widget-container">
							<div class="e-hosted-video elementor-wrapper elementor-open-inline">
					<video class="elementor-video" src="https://bolintechnology.com/wp-content/uploads/2026/03/scence.webm" preload="metadata" muted="muted" controlslist="nodownload" playsinline=""></video>
				</div>
						</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-dc4468e" data-id="dc4468e" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-ff9a460 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="ff9a460" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<h3 style="font-weight: 300;">Highest Acceleration</h3><h3 style="font-weight: 300;">Highest Speed</h3><h3 style="font-weight: 300;">Quiet Movement</h3><h6>&nbsp;</h6><h6><span style="color: #999999;"><em>Pan and Tilt, <span style="color: #ff0000;">230°/s, </span></em></span><span style="color: #999999;"><em>&nbsp;Preset </em></span><span style="color: #999999;"><em><span style="color: #ff0000;">300°/s</span></em></span></h6><h6><span style="color: #999999;"><em>Acceleration Speed from</em> <em>0° to 120°/s:</em><em><span style="color: #ff0000;"> 200ms</span></em></span></h6><h6><span style="color: #999999;"><em>with&nbsp;</em></span><span style="color: #999999;"><em><span style="color: #ff0000;">3</span> Selectable Patterns&nbsp; (Low/Mid/High)</em></span></h6>								</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-c7dd39b scroll-trigger mobile-column-reverse elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c7dd39b" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4e6408e" data-id="4e6408e" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-a46f262 elementor-widget elementor-widget-text-editor" data-id="a46f262" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>270° Roll-Axis</p>								</div>
				</div>
				<div class="elementor-element elementor-element-e23227b image-with-border elementor-widget elementor-widget-image" data-id="e23227b" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img loading="lazy" decoding="async" width="557" height="376" src="https://bolintechnology.com/wp-content/uploads/2026/03/Rolling-Images-6.png" class="attachment-large size-large wp-image-46226" alt="Bolin Rolling Images-6" srcset="https://bolintechnology.com/wp-content/uploads/2026/03/Rolling-Images-6.png 557w, https://bolintechnology.com/wp-content/uploads/2026/03/Rolling-Images-6-18x12.png 18w, https://bolintechnology.com/wp-content/uploads/2026/03/Rolling-Images-6-300x203.png 300w" sizes="auto, (max-width: 557px) 100vw, 557px">															</div>
				<div class="three-line"><span>0°</span><span>-90°</span><span>180°</span></div><div class="three-line"><span>0°</span><span>-90°</span><span>180°</span></div></div>
				<div class="elementor-element elementor-element-cbc7fc0 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="cbc7fc0" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>A 270° roll axis enables horizon correction, vertical video capture, and creative camera angles without repositioning the camera.</p>								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-62b9f93" data-id="62b9f93" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-e5a27f4 elementor-widget elementor-widget-video" data-id="e5a27f4" data-element_type="widget" data-e-type="widget" data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;mute&quot;:&quot;yes&quot;}" data-widget_type="video.default">
				<div class="elementor-widget-container">
							<div class="e-hosted-video elementor-wrapper elementor-open-inline">
					<video class="elementor-video" src="https://bolintechnology.com/wp-content/uploads/2026/04/Image-Rolling-0178_6-M4.mp4" preload="metadata" muted="muted" controlslist="nodownload" playsinline=""></video>
				</div>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-bcbd3eb scroll-trigger elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="bcbd3eb" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-77a3fee" data-id="77a3fee" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-1d6c809 elementor-widget elementor-widget-video" data-id="1d6c809" data-element_type="widget" data-e-type="widget" data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;mute&quot;:&quot;yes&quot;}" data-widget_type="video.default">
				<div class="elementor-widget-container">
							<div class="e-hosted-video elementor-wrapper elementor-open-inline">
					<video class="elementor-video" src="https://bolintechnology.com/wp-content/uploads/2026/03/Image-Stabilization-R2-S-M.webm" preload="metadata" muted="muted" controlslist="nodownload" playsinline=""></video>
				</div>
						</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-dd0fdf4" data-id="dd0fdf4" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-2628f2c elementor-widget elementor-widget-text-editor" data-id="2628f2c" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<h2 style="font-weight: 300; text-align: center; font-size: 28px;"><span style="color: #ffffff;">3-Axis Image Stabilization</span></h2><p style="text-align: center;">Gyro sensors detect vibration and environmental movement, allowing the camera to automatically adjust its pan, tilt, zoom, and roll to maintain a stable image. Even if the camera itself moves, Range helps keep the shot steady and usable in real-world production environments.</p>								</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-868590b scroll-trigger elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="868590b" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-41ecb54" data-id="41ecb54" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-6dba441 mobile-column-reverse elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6dba441" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6def89b" data-id="6def89b" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-025df60 elementor-widget elementor-widget-heading" data-id="025df60" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">ZDP - Zero Deviation Positioning</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-a1762de elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="a1762de" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="text-align: center;">Zero Deviation Positioning keeps the camera precisely aligned so shots remain consistent over time. If the camera head is bumped or physically moved, the system automatically corrects the position and returns the camera to its intended framing.</p>								</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ca3015a" data-id="ca3015a" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-2986aa0 elementor-widget elementor-widget-video" data-id="2986aa0" data-element_type="widget" data-e-type="widget" data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;mute&quot;:&quot;yes&quot;}" data-widget_type="video.default">
				<div class="elementor-widget-container">
							<div class="e-hosted-video elementor-wrapper elementor-open-inline">
					<video class="elementor-video" src="https://bolintechnology.com/wp-content/uploads/2026/03/ZDP-5-M.webm" preload="metadata" muted="muted" controlslist="nodownload" playsinline=""></video>
				</div>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-258f748 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="258f748" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-49cb780" data-id="49cb780" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-c8edf4d icon-box-columns-4 icon-box-columns-tablet-2 icon-box-columns-mobile-1 icon-box--position-top elementor-widget elementor-widget-bolintech-icon-box" data-id="c8edf4d" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-icon-box.default">
				<div class="elementor-widget-container">
					        <div class="icon-box">
                                            <div class="icon-box__item elementor-repeater-item-9aa8142">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="Silent Movement">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 268.92 193.68"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M250.51,50.93c-.34-.44-.96-.52-1.4-.18-.44.34-.52.96-.18,1.4,11.77,15.26,17.99,33.55,17.99,52.87,0,24.14-9.92,46-25.9,61.72l-51.5-51.5s.02-.08.02-.12v-44.41c0-1.87-.96-3.55-2.57-4.49-1.61-.95-3.54-.97-5.18-.06l-26.59,14.77-36.68-36.68c15.73-15.97,37.59-25.9,61.72-25.9s47.95,10.43,64.36,28.63c.37.41,1,.44,1.41.07.41-.37.44-1,.07-1.41-16.79-18.61-40.79-29.29-65.85-29.29-48.89,0-88.66,39.77-88.66,88.66s39.77,88.67,88.66,88.67,88.66-39.78,88.66-88.67c0-19.77-6.36-38.47-18.41-54.09ZM182.77,67.91c1.01-.56,2.2-.54,3.19.04.99.58,1.58,1.62,1.58,2.77v42.55l-30.87-30.87,26.09-14.49ZM180.25,191.68c-47.79,0-86.66-38.88-86.66-86.67,0-22.93,8.96-43.81,23.55-59.33l122.44,122.44c-15.52,14.6-36.39,23.55-59.33,23.55ZM208.97,124.72c6.55-13.26,6.56-25.36.02-36.98-.27-.48-.1-1.09.38-1.36.48-.27,1.09-.1,1.36.38,6.88,12.24,6.89,24.94.02,38.84-.17.35-.53.56-.9.56-.15,0-.3-.03-.44-.1-.5-.24-.7-.84-.45-1.34ZM220.85,136.5c12.19-21.13,12.2-41.51.02-60.56-.3-.46-.16-1.08.3-1.38.46-.3,1.08-.16,1.38.3,12.61,19.73,12.62,40.81.02,62.64-.19.32-.52.5-.87.5-.17,0-.34-.04-.5-.13-.48-.28-.64-.89-.37-1.37ZM128.47,126.16h17.17l36.16,20.09c.8.44,1.67.66,2.53.66s1.82-.24,2.64-.73c1.61-.95,2.57-2.63,2.57-4.49v-15.52c0-.55-.45-1-1-1s-1,.45-1,1v15.52c0,1.15-.59,2.19-1.58,2.77-.99.58-2.18.6-3.19.04l-35.87-19.93v-38.32h-18.43c-2.7,0-4.9,2.2-4.9,4.9v30.12c0,2.7,2.2,4.9,4.9,4.9ZM125.58,91.15c0-1.6,1.3-2.9,2.9-2.9h16.43v35.91h-16.43c-1.6,0-2.9-1.3-2.9-2.9v-30.12ZM89.66,44.83c0,2.12-.83,4.19-2.47,6.14-.2.24-.48.36-.77.36-.23,0-.46-.08-.64-.23-.42-.36-.48-.99-.12-1.41,1.33-1.58,2-3.21,2-4.85,0-8.87-19.61-16.37-42.83-16.37-1.36,0-2.73.03-4.07.07-3.83.14-7.59.49-11.17,1.02-.7,4.61-1.09,9.58-1.12,14.74l4.69-8.4c.27-.48.88-.66,1.36-.39.48.27.65.88.39,1.36l-6.52,11.68c-.04.06-.08.12-.13.18,0,0-.01.02-.02.03-.21.24-.52.38-.84.38h-.03c-.43-.01-.81-.26-1-.64l-5.78-11.84c-.24-.5-.04-1.09.46-1.34.5-.24,1.1-.04,1.34.46l4.1,8.39c.03-5.02.38-9.81,1-14.27-2.63.46-5.16,1.01-7.52,1.67-11.24,3.12-17.95,8.08-17.95,13.26,0,8.87,19.61,16.37,42.83,16.37,11.36,0,22.13-1.75,30.17-4.84l-9.89-1.24c-.55-.07-.94-.57-.87-1.12.07-.55.58-.94,1.12-.87l13.07,1.64c.47.06.86.37,1.01.81s.06.93-.27,1.27l-8.77,9.26c-.2.21-.46.31-.73.31-.25,0-.49-.09-.69-.27-.4-.38-.42-1.01-.04-1.41l5.85-6.18c-8.16,2.97-18.8,4.64-29.97,4.64C19.69,63.2,0,55.13,0,44.83c0-6.22,7.08-11.76,19.41-15.19,2.62-.73,5.44-1.33,8.38-1.82C30.48,11.35,37.01,0,44.83,0c6.22,0,11.76,7.08,15.19,19.41.15.53-.16,1.08-.7,1.23-.53.14-1.08-.16-1.23-.7-3.13-11.24-8.08-17.95-13.27-17.95-6.53,0-12.31,10.63-14.91,25.49,3.47-.49,7.08-.82,10.76-.95,1.37-.05,2.76-.08,4.15-.08,25.14,0,44.83,8.07,44.83,18.37ZM60.6,68.04c-3.31,13.54-9.2,21.62-15.77,21.62s-12.8-8.52-16.05-22.8c-.12-.54.21-1.07.75-1.2.54-.12,1.08.21,1.2.75,2.98,13.1,8.39,21.25,14.1,21.25s10.8-7.7,13.83-20.1c.13-.54.67-.87,1.21-.73.54.13.87.67.73,1.21Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    Silent Movement                                </h3>
                            
                                                            <div class="icon-box__description">
                                    Quiet motor operation minimizes mechanical noise, making the camera well suited for studio and noise-sensitive environments.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-97df604">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="Trace Memory">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 221.64 160.5"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M33.28,2.2h-9.8V0h21.88v2.2h-9.76v27.24h-2.32V2.2ZM48.16,17.28c0-3.08,3.2-7.04,8.44-7.04h.52v-2.4h-.36c-4.04,0-6.92,2.44-8.44,5.24h-.16v-4.68h-2.2v21.04h2.2v-12.16ZM72.72,17.2v-1.64c0-3.44-2.16-5.68-5.68-5.68-2.16,0-4.16.84-5.44,2.68l-1.76-1.24c1.76-2.44,4.4-3.48,7.24-3.48,4.76,0,7.88,2.96,7.88,7.68v13.92h-2.24v-3.6h-.16c-1.48,2.76-4.32,4.16-7.32,4.16-4.04,0-6.64-2.32-6.64-5.8,0-4.4,3.44-7,10.16-7h3.96ZM72.72,19.24h-3.56c-5.72,0-8.32,1.72-8.32,4.84,0,2.4,1.92,3.88,4.76,3.88,3.52,0,7.12-2.44,7.12-6.56v-2.16ZM89.36,30.03c3.08,0,6.08-1.68,7.64-4.4l-1.72-1.2c-1.28,2.16-3.56,3.52-6.08,3.52-4.36,0-7.24-3.68-7.24-9.04s2.92-8.88,7.28-8.88c2.48,0,4.76,1.36,6.04,3.52l1.72-1.2c-1.56-2.68-4.56-4.4-7.64-4.4-5.88,0-9.64,4.4-9.64,10.96s3.76,11.12,9.64,11.12ZM100.24,18.96c0-6.72,3.68-11.12,9.4-11.12,5.4,0,8.92,3.92,8.92,9.6,0,.64-.08,1.32-.2,1.96h-15.84c.16,5.08,3.08,8.48,7.44,8.48,2.52,0,5-1.28,6.32-3.52l1.72,1.16c-1.52,2.68-4.44,4.4-8.04,4.4-5.92,0-9.72-4.36-9.72-10.96ZM102.6,17.4h13.68c0-4.4-2.44-7.52-6.64-7.52-3.88,0-6.56,2.72-7.04,7.52ZM14,65.33h-.16L2.4,46.57H0v29.47h2.32v-25h.16l10.72,17.52h1.44l10.72-17.52h.16v25h2.28v-29.47h-2.4l-11.4,18.76ZM51.2,65.97h-15.84c.16,5.08,3.08,8.48,7.44,8.48,2.52,0,5-1.28,6.32-3.52l1.72,1.16c-1.52,2.68-4.44,4.4-8.04,4.4-5.92,0-9.72-4.36-9.72-10.96s3.68-11.12,9.4-11.12c5.4,0,8.92,3.92,8.92,9.6,0,.64-.08,1.32-.2,1.96ZM49.12,63.97c0-4.4-2.44-7.52-6.64-7.52-3.88,0-6.56,2.72-7.04,7.52h13.68ZM56.36,54.97v21.04h2.2v-12.44c0-4.16,2.8-7.12,6.12-7.12s5.28,2.76,5.28,6.88v12.68h2.24v-12.44c0-4.28,2.56-7.12,6.08-7.12,3.24,0,5.28,2.76,5.28,6.88v12.68h2.24v-13.04c0-5.28-2.68-8.56-7.08-8.56-3.24,0-6,1.92-7.24,5.08h-.12c-1.08-3.2-3.24-5.08-6.28-5.08-2.64,0-5.04,1.72-6.36,4.24h-.16l.04-3.68h-2.24ZM99.92,54.41c5.64,0,9.4,4.44,9.4,11.08s-3.76,11.08-9.4,11.08-9.36-4.44-9.36-11.08,3.76-11.08,9.36-11.08ZM92.8,65.49c0,5.4,2.88,9,7.12,9s7.16-3.6,7.16-9-2.88-9-7.16-9-7.12,3.6-7.12,9ZM116.68,59.65h-.16v-4.68h-2.2v21.04h2.2v-12.16c0-3.08,3.2-7.04,8.44-7.04h.52v-2.4h-.36c-4.04,0-6.92,2.44-8.44,5.24ZM131.84,84.33h2.44l11.84-29.35h-2.48l-7.04,18.16h-.2l-6.76-18.16h-2.48l8.08,21.04-3.4,8.32ZM220.88,94.1l-3.14-.79c1.38-7.41,4.54-27.42.41-36.51-7.3-16.07-27.08-21.49-42.35-19.74-2.38.27-4.53.72-6.4,1.31-1.12-.55-2.38-.86-3.71-.86-4.69,0-8.5,3.81-8.5,8.5,0,4,2.76,7.34,6.48,8.25,1.34,3.34,3.19,7.09,5.17,11.1,5.28,10.71,11.85,24.04,11.85,36.15,0,16.73-10.57,33.85-21.46,44.07-1.49-1.28-3.42-2.07-5.54-2.07-3.1,0-5.8,1.66-7.28,4.14-13.72-23.82-23.56-39.26-29.5-48.15.81-1.3,1.29-2.83,1.29-4.48,0-4.69-3.81-8.5-8.5-8.5s-8.5,3.81-8.5,8.5c0,.28.02.55.04.82-8.23,6.28-21.04,16.1-30.61,23.56-1.45-2.61-4.23-4.38-7.43-4.38-3.83,0-7.07,2.54-8.13,6.02-7.86-8.68-14.93-20.64-17.91-25.98l3.15-1.26c.66-.26.84-1.11.35-1.62l-6.71-6.93c-.62-.64-1.71-.21-1.72.69l-.08,9.64c0,.71.71,1.2,1.37.94l2.71-1.08c3.03,5.42,10.4,17.93,18.59,26.8-.06.42-.11.85-.11,1.29,0,4.69,3.81,8.5,8.5,8.5s8.5-3.81,8.5-8.5c0-1.13-.23-2.21-.63-3.19,9.41-7.35,22.06-17.04,30.36-23.37.88,3.76,4.24,6.57,8.27,6.57,2.66,0,5.04-1.23,6.6-3.14,6,8.99,15.86,24.49,29.57,48.33-.43,1.02-.67,2.14-.67,3.31,0,4.69,3.81,8.5,8.5,8.5s8.5-3.81,8.5-8.5c0-2.2-.84-4.19-2.21-5.7,10.95-10.19,21.71-27.24,21.71-44.8,0-12.34-6.63-25.79-11.96-36.59-1.86-3.76-3.6-7.3-4.91-10.45.28.03.57.04.86.04,4.69,0,8.5-3.81,8.5-8.5,0-2.87-1.43-5.4-3.61-6.94,1.6-.44,3.38-.78,5.33-1.01,14.92-1.72,34.22,3.54,41.32,19.16,3.95,8.68.87,28.47-.48,35.85l-2.97-.75c-.69-.17-1.34.41-1.24,1.11l1.36,9.55c.13.89,1.26,1.17,1.79.45l5.74-7.75c.42-.57.13-1.39-.56-1.56Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    Trace Memory                                </h3>
                            
                                                            <div class="icon-box__description">
                                    Record camera movements and replay them to repeat complex motion paths with smooth, consistent results.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-1de453f">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="AI Framing ">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 320 208"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M113.7,206h25.17v2h-25.17c-5.88,0-10.67-4.79-10.67-10.67v-54.67h2v54.67c0,4.78,3.89,8.67,8.67,8.67ZM213.03,197.33c0,4.78-3.89,8.67-8.67,8.67h-22.5v2h22.5c5.88,0,10.67-4.79,10.67-10.67v-54.67h-2v54.67ZM204.36,0h-22.5v2h22.5c4.78,0,8.67,3.89,8.67,8.67v37.5h2V10.67c0-5.88-4.79-10.67-10.67-10.67ZM105.03,10.67c0-4.78,3.89-8.67,8.67-8.67h25.17V0h-25.17c-5.88,0-10.67,4.79-10.67,10.67v37.5h2V10.67ZM277,43.16c9.39,0,17-7.16,17-16s-7.61-16-17-16-17,7.16-17,16,7.61,16,17,16ZM196.51,92.38c2.21,0,4-1.79,4-4s-1.79-4-4-4-4,1.79-4,4,1.79,4,4,4ZM196.51,108.38c-2.21,0-4,1.79-4,4s1.79,4,4,4,4-1.79,4-4-1.79-4-4-4ZM68.24,46.16H18.76C8.79,46.16.66,53.94.06,63.76c-.04.29-.06.59-.06.9v48c0,4.14,3.36,7.5,7.5,7.5s7.5-3.36,7.5-7.5v-43c0-1.38,1.12-2.5,2.5-2.5s2.5,1.12,2.5,2.5v117.5c0,5.52,4.48,10,10,10s10-4.48,10-10v-68.47h7v68.47c0,5.52,4.48,10,10,10s10-4.48,10-10v-117.5c0-1.38,1.12-2.5,2.5-2.5s2.5,1.12,2.5,2.5v43c0,4.14,3.36,7.5,7.5,7.5s7.5-3.36,7.5-7.5v-48c0-.3-.02-.6-.06-.9-.6-9.82-8.73-17.6-18.71-17.6ZM44,43.16c9.39,0,17-7.16,17-16s-7.61-16-17-16-17,7.16-17,16,7.61,16,17,16ZM160.51,43.38c9.39,0,17-7.16,17-16s-7.61-16-17-16-17,7.16-17,16,7.61,16,17,16ZM319.94,63.76c-.6-9.82-8.73-17.6-18.71-17.6h-49.47c-9.97,0-18.1,7.78-18.71,17.6-.04.29-.06.59-.06.9v48c0,4.14,3.36,7.5,7.5,7.5s7.5-3.36,7.5-7.5v-43c0-1.38,1.12-2.5,2.5-2.5s2.5,1.12,2.5,2.5v117.5c0,5.52,4.48,10,10,10s10-4.48,10-10v-68.47h7v68.47c0,5.52,4.48,10,10,10s10-4.48,10-10v-117.5c0-1.38,1.12-2.5,2.5-2.5s2.5,1.12,2.5,2.5v43c0,4.14,3.36,7.5,7.5,7.5s7.5-3.36,7.5-7.5v-48c0-.3-.02-.6-.06-.9ZM173.51,148.38c-2.21,0-4,1.79-4,4s1.79,4,4,4,4-1.79,4-4-1.79-4-4-4ZM146.85,148.38c-2.21,0-4,1.79-4,4s1.79,4,4,4,4-1.79,4-4-1.79-4-4-4ZM189.51,62.38c2.21,0,4-1.79,4-4s-1.79-4-4-4-4,1.79-4,4,1.79,4,4,4ZM173.51,113.38c-2.21,0-4,1.79-4,4s1.79,4,4,4,4-1.79,4-4-1.79-4-4-4ZM146.85,113.38c-2.21,0-4,1.79-4,4s1.79,4,4,4,4-1.79,4-4-1.79-4-4-4ZM173.51,182.38c-2.21,0-4,1.79-4,4s1.79,4,4,4,4-1.79,4-4-1.79-4-4-4ZM146.85,182.38c-2.21,0-4,1.79-4,4s1.79,4,4,4,4-1.79,4-4-1.79-4-4-4ZM124.51,82.38c-2.21,0-4,1.79-4,4s1.79,4,4,4,4-1.79,4-4-1.79-4-4-4ZM124.51,106.38c-2.21,0-4,1.79-4,4s1.79,4,4,4,4-1.79,4-4-1.79-4-4-4ZM183.51,187.38c0,5.52-4.48,10-10,10s-10-4.48-10-10v-68.47h-7v68.47c0,5.52-4.48,10-10,10s-10-4.48-10-10v-117.5c0-1.38-1.12-2.5-2.5-2.5s-2.5,1.12-2.5,2.5v43c0,4.14-3.36,7.5-7.5,7.5s-7.5-3.36-7.5-7.5v-48c0-.3.02-.6.06-.9.6-9.82,8.73-17.6,18.71-17.6h49.47c9.97,0,18.1,7.78,18.71,17.6.04.29.06.59.06.9v48c0,4.14-3.36,7.5-7.5,7.5s-7.5-3.36-7.5-7.5v-43c0-1.38-1.12-2.5-2.5-2.5s-2.5,1.12-2.5,2.5v117.5ZM202.51,112.38c0-3.31-2.69-6-6-6s-6,2.69-6,6,2.69,6,6,6,6-2.69,6-6ZM196.51,82.38c-3.31,0-6,2.69-6,6s2.69,6,6,6,6-2.69,6-6-2.69-6-6-6ZM183.51,58.38c0,3.31,2.69,6,6,6s6-2.69,6-6-2.69-6-6-6-6,2.69-6,6ZM130.51,110.38c0-3.31-2.69-6-6-6s-6,2.69-6,6,2.69,6,6,6,6-2.69,6-6ZM130.51,86.38c0-3.31-2.69-6-6-6s-6,2.69-6,6,2.69,6,6,6,6-2.69,6-6ZM136.51,58.38c0-3.31-2.69-6-6-6s-6,2.69-6,6,2.69,6,6,6,6-2.69,6-6ZM152.85,186.38c0-3.31-2.69-6-6-6s-6,2.69-6,6,2.69,6,6,6,6-2.69,6-6ZM152.85,152.38c0-3.31-2.69-6-6-6s-6,2.69-6,6,2.69,6,6,6,6-2.69,6-6ZM152.85,117.38c0-3.31-2.69-6-6-6s-6,2.69-6,6,2.69,6,6,6,6-2.69,6-6ZM179.51,186.38c0-3.31-2.69-6-6-6s-6,2.69-6,6,2.69,6,6,6,6-2.69,6-6ZM179.51,152.38c0-3.31-2.69-6-6-6s-6,2.69-6,6,2.69,6,6,6,6-2.69,6-6ZM179.51,117.38c0-3.31-2.69-6-6-6s-6,2.69-6,6,2.69,6,6,6,6-2.69,6-6ZM130.51,54.38c-2.21,0-4,1.79-4,4s1.79,4,4,4,4-1.79,4-4-1.79-4-4-4Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    AI Framing                                 </h3>
                            
                                                            <div class="icon-box__description">
                                    AI framing maintains balanced composition by automatically adjusting the shot to keep subjects properly positioned. To be released in a future firmware update.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-d6acebe">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="AI Tracking">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 122.21 221.28"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M66.75,8.31c9.65,0,17.5,7.85,17.5,17.5s-7.85,17.5-17.5,17.5-17.5-7.85-17.5-17.5,7.85-17.5,17.5-17.5ZM46.72,63.7c-2.21,0-4,1.79-4,4s1.79,4,4,4,4-1.79,4-4-1.79-4-4-4ZM96.72,207.7c2.21,0,4-1.79,4-4s-1.79-4-4-4-4,1.79-4,4,1.79,4,4,4ZM46.72,112.7c-2.21,0-4,1.79-4,4s1.79,4,4,4,4-1.79,4-4-1.79-4-4-4ZM67.72,162.7c2.21,0,4-1.79,4-4s-1.79-4-4-4-4,1.79-4,4,1.79,4,4,4ZM10.72,121.7c-2.21,0-4,1.79-4,4s1.79,4,4,4,4-1.79,4-4-1.79-4-4-4ZM18.72,84.7c-2.21,0-4,1.79-4,4s1.79,4,4,4,4-1.79,4-4-1.79-4-4-4ZM122,122.08c-.58,2.69-2.31,4.96-4.76,6.21-2.45,1.25-5.3,1.34-7.82.23l-29.88-13.12c-2.37-1.04-4.42-2.71-5.93-4.81l-5.41-7.58-4.5,20.23c-.23,1.05-.06,2.13.49,3.05l42.37,71.48c3.02,5.12,1.69,11.62-3.1,15.14-2,1.47-4.35,2.23-6.77,2.23-.69,0-1.38-.06-2.07-.18-3.13-.56-5.82-2.33-7.58-4.99l-51.76-78.02c-3.94-5.94-5.31-13.34-3.74-20.3l7.2-26.32-12.55,9.47c-1.36.98-2.26,2.46-2.51,4.08l-4.57,29.72c-.68,4.4-4.4,7.6-8.86,7.6-2.6,0-5.07-1.13-6.77-3.09s-2.47-4.57-2.1-7.14l5.2-36.41c.5-3.51,2.32-6.64,5.12-8.81l28.84-22.33c2.68-2.08,6.03-3.22,9.42-3.22h7.81c5.9,0,11.35,3.44,13.89,8.77l15.01,31.53c.68,1.42,1.83,2.59,3.25,3.28l27.15,13.19c3.79,1.84,5.82,6,4.93,10.12ZM16.72,125.7c0-3.31-2.69-6-6-6s-6,2.69-6,6,2.69,6,6,6,6-2.69,6-6ZM24.72,88.7c0-3.31-2.69-6-6-6s-6,2.69-6,6,2.69,6,6,6,6-2.69,6-6ZM52.72,116.7c0-3.31-2.69-6-6-6s-6,2.69-6,6,2.69,6,6,6,6-2.69,6-6ZM52.72,67.7c0-3.31-2.69-6-6-6s-6,2.69-6,6,2.69,6,6,6,6-2.69,6-6ZM90.72,203.7c0,3.31,2.69,6,6,6s6-2.69,6-6-2.69-6-6-6-6,2.69-6,6ZM61.72,158.7c0,3.31,2.69,6,6,6s6-2.69,6-6-2.69-6-6-6-6,2.69-6,6ZM88.72,105.7c0-3.31-2.69-6-6-6s-6,2.69-6,6,2.69,6,6,6,6-2.69,6-6ZM117.72,119.7c0-3.31-2.69-6-6-6s-6,2.69-6,6,2.69,6,6,6,6-2.69,6-6ZM111.72,115.7c-2.21,0-4,1.79-4,4s1.79,4,4,4,4-1.79,4-4-1.79-4-4-4ZM82.72,101.7c-2.21,0-4,1.79-4,4s1.79,4,4,4,4-1.79,4-4-1.79-4-4-4ZM38.08,165.4c-2.21,0-4,1.79-4,4s1.79,4,4,4,4-1.79,4-4-1.79-4-4-4ZM12.72,204.7c-2.21,0-4,1.79-4,4s1.79,4,4,4,4-1.79,4-4-1.79-4-4-4ZM50,161.62c1.21,1.73,1.54,3.95.87,5.95l-2.46,7.37c-1.93,5.79-4.85,11.14-8.68,15.9l-21.4,26.59c-1.88,2.34-4.69,3.74-7.69,3.83-.11,0-.22,0-.33,0-2.88,0-5.63-1.21-7.59-3.34-3.27-3.57-3.63-8.84-.88-12.82l13.64-19.7c.33-.48,5.18-6.01,8.28-13.03,3.81-8.63,5.96-19,5.96-19l2.82-8.75c.33-1.02,1.19-1.76,2.25-1.92,1.06-.15,2.1.28,2.72,1.16l12.48,17.74ZM18.72,208.7c0-3.31-2.69-6-6-6s-6,2.69-6,6,2.69,6,6,6,6-2.69,6-6ZM44.08,169.4c0-3.31-2.69-6-6-6s-6,2.69-6,6,2.69,6,6,6,6-2.69,6-6ZM88.56,40.41c0,3.98-3.24,7.22-7.22,7.22h-7.7v4h7.7c6.19,0,11.22-5.03,11.22-11.22v-7.71h-4v7.71ZM44.94,11.22c0-3.98,3.24-7.22,7.22-7.22h7.7V0h-7.7c-6.19,0-11.22,5.03-11.22,11.22v7.71h4v-7.71ZM88.56,11.22v8.71h4v-8.71c0-6.19-5.03-11.22-11.22-11.22h-7.7v4h7.7c3.98,0,7.22,3.24,7.22,7.22ZM52.16,51.63h7.7v-4h-7.7c-3.98,0-7.22-3.24-7.22-7.22v-7.71h-4v7.71c0,6.19,5.03,11.22,11.22,11.22Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    AI Tracking                                </h3>
                            
                                                            <div class="icon-box__description">
                                    AI tracking automatically follows subjects as they move, helping keep them in the shot without manual camera control. To be released in a future firmware update.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                    </div>
        				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-1a5d670 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="1a5d670" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9e367e3" data-id="9e367e3" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-b518522 elementor-widget elementor-widget-bolintech-heading" data-id="b518522" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-heading.default">
				<div class="elementor-widget-container">
					<h2 class="title">Environmental Capability</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-b188d39 elementor-widget elementor-widget-heading" data-id="b188d39" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">&nbsp;From Indoors to Outdoors - Without a Second Thought</h2>				</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-e7fd348 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e7fd348" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-299b021" data-id="299b021" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-fab7433 icon-box-columns-4 icon-box-columns-tablet-2 icon-box-columns-mobile-1 icon-box--position-top elementor-widget elementor-widget-bolintech-icon-box" data-id="fab7433" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-icon-box.default">
				<div class="elementor-widget-container">
					        <div class="icon-box">
                                            <div class="icon-box__item elementor-repeater-item-db73408">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="Indoor Outdoor Use">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 241 241"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M120.5,241C54.06,241,0,186.94,0,120.5S54.06,0,120.5,0s120.5,54.06,120.5,120.5-54.06,120.5-120.5,120.5ZM120.5,2C55.16,2,2,55.16,2,120.5s53.16,118.5,118.5,118.5,118.5-53.16,118.5-118.5S185.84,2,120.5,2ZM38.14,170c4.65-3.34,9.41-2.87,12.21,1.03,2.8,3.9,1.76,8.58-2.89,11.93-4.63,3.33-9.42,2.85-12.23-1.05s-1.73-8.58,2.9-11.91ZM46.61,181.78c4-2.88,4.93-6.79,2.65-9.96-2.29-3.18-6.29-3.52-10.28-.65-4,2.88-4.95,6.77-2.65,9.96,2.28,3.17,6.29,3.52,10.29.65ZM56.75,195.34l7.81-8.27,1.03.97-7.93,8.4c-2.88,3.05-6.43,3.18-9.29.47-2.87-2.71-2.94-6.26-.06-9.31l7.93-8.4,1.03.97-7.76,8.22c-2.43,2.57-2.45,5.4-.2,7.52,2.25,2.13,5.06,1.96,7.45-.57ZM61.63,207.14l9.23-13.79-4.96-3.32.75-1.11,11.08,7.41-.75,1.11-4.94-3.31-9.23,13.79-1.17-.79ZM74.07,214.64l6.83-16.59,5.93,2.44c4.69,1.93,6.21,6.22,4.09,11.38s-6.34,7.09-11.21,5.09l-5.63-2.32ZM80.17,215.7c4.06,1.67,7.54.12,9.39-4.38,1.86-4.51.54-8.03-3.41-9.65l-4.46-1.84-5.81,14.11,4.28,1.76ZM95.92,213.37c1.01-5.64,4.76-8.61,9.48-7.76,4.73.84,7.24,4.93,6.23,10.57-1,5.61-4.78,8.6-9.51,7.76-4.73-.84-7.21-4.95-6.21-10.57ZM110.19,215.92c.87-4.85-1.19-8.31-5.03-8.99-3.86-.69-6.97,1.85-7.83,6.7-.87,4.85,1.17,8.3,5.03,8.99,3.84.69,6.96-1.85,7.83-6.7ZM116.89,216.52c-.26-5.72,2.75-9.44,7.54-9.66,4.79-.21,8.14,3.22,8.4,8.94.25,5.7-2.77,9.44-7.57,9.66-4.8.22-8.12-3.25-8.38-8.94ZM131.37,215.88c-.22-4.92-2.98-7.84-6.88-7.67-3.92.18-6.39,3.34-6.17,8.25.22,4.92,2.96,7.84,6.88,7.67,3.9-.17,6.39-3.33,6.17-8.25ZM151.67,220.61l-6.59-6.43-4.44,1.15,1.97,7.62-1.37.35-4.49-17.37,5.83-1.51c3.42-.88,6.1.34,6.92,3.5.68,2.64-.5,4.69-2.99,5.76l6.74,6.52-1.58.41ZM138.45,206.88l1.85,7.15,4.34-1.12c2.6-.67,4.05-2.35,3.46-4.62-.62-2.38-2.71-3.2-5.31-2.53l-4.34,1.12ZM179.99,198.74l-6.41-9.41,1.17-.8,6.51,9.55c2.36,3.46,1.73,6.96-1.53,9.18-3.26,2.22-6.74,1.53-9.11-1.94l-6.5-9.55,1.17-.8,6.37,9.35c1.99,2.92,4.75,3.55,7.31,1.81s3-4.52,1.03-7.4ZM188.37,196.41l.23-1.38c2.05.52,4.12-.08,5.78-1.76,1.8-1.82,2.3-4.2.69-5.79-1.49-1.47-3.23-1.07-6.44.76-2.61,1.5-5.15,2.86-7.48.56-2.08-2.06-1.6-5.18.8-7.61,1.9-1.92,4.14-2.52,6.31-2.02l-.23,1.35c-1.86-.37-3.76.2-5.18,1.63-1.73,1.75-2.23,4.13-.79,5.55,1.79,1.76,3.85.58,6.18-.78,3.23-1.88,5.69-2.6,7.8-.51,2.25,2.23,1.72,5.26-.76,7.78-2.04,2.06-4.62,2.8-6.92,2.21ZM203.52,182.25l5.5-7.96,1.1.76-6.3,9.12-14.76-10.19,6.12-8.86,1.1.76-5.32,7.7,5.41,3.74,5.01-7.26,1.08.75-5.01,7.26,6.06,4.18ZM52.3,67.23l-.89,1.16-14.77-11.34.89-1.16,14.77,11.34ZM55.9,62.5l-12.81-13.51,1.16-1.1,18.98,4.2.07-.07-11.09-11.69,1.05-.99,12.81,13.51-1.14,1.08-18.98-4.21-.07.07,11.09,11.69-1.06,1.01ZM69.4,50.27l-9.68-15.9,5.68-3.46c4.49-2.74,9.02-1.38,12.04,3.57,3.01,4.95,2.04,9.66-2.63,12.5l-5.4,3.29ZM74.03,45.82c3.89-2.37,4.73-6.23,2.1-10.55-2.63-4.32-6.39-5.38-10.17-3.08l-4.28,2.61,8.24,13.52,4.1-2.5ZM82.41,32.12c-1.88-5.64.07-10.21,4.8-11.78,4.73-1.57,9.04.91,10.92,6.55,1.87,5.62-.1,10.21-4.82,11.79-4.73,1.57-9.03-.94-10.9-6.56ZM96.68,27.37c-1.61-4.85-5.2-6.99-9.04-5.71-3.87,1.29-5.43,5.14-3.82,9.99,1.61,4.85,5.18,6.99,9.04,5.71,3.84-1.28,5.43-5.14,3.82-9.99ZM103.52,25.77c-.54-5.92,2.4-9.92,7.36-10.37,4.96-.45,8.6,2.95,9.14,8.87.54,5.89-2.43,9.92-7.39,10.38-4.96.45-8.58-2.98-9.12-8.88ZM118.51,24.4c-.46-5.09-3.47-7.99-7.5-7.63-4.06.37-6.47,3.76-6,8.85.46,5.09,3.45,7.99,7.5,7.62,4.03-.37,6.47-3.76,6-8.85ZM137.96,35.51l-3.78-8.78-4.71-.66-1.13,8.09-1.45-.2,2.57-18.44,6.19.86c3.63.51,5.72,2.74,5.25,6.1-.39,2.81-2.34,4.3-5.15,4.34l3.89,8.92-1.68-.23ZM130.72,17.1l-1.06,7.59,4.61.64c2.76.39,4.82-.66,5.15-3.06.35-2.53-1.34-4.14-4.09-4.53l-4.61-.64ZM164.53,37.95l4.97-10.72,1.33.62-5.05,10.88c-1.83,3.95-5.28,5.25-9,3.52-3.72-1.73-4.95-5.2-3.12-9.14l5.05-10.88,1.33.62-4.94,10.65c-1.54,3.33-.63,6.12,2.28,7.47,2.91,1.35,5.62.27,7.14-3.02ZM168.41,44.25l1.45.03c-.23,2.19.69,4.22,2.67,5.68,2.14,1.58,4.66,1.74,6.05-.16,1.29-1.75.62-3.48-1.74-6.5-1.93-2.46-3.7-4.87-1.69-7.6,1.8-2.44,5.08-2.41,7.93-.31,2.26,1.67,3.21,3.88,3.02,6.18l-1.42-.04c.1-1.97-.76-3.83-2.45-5.08-2.06-1.52-4.58-1.68-5.82.01-1.55,2.1-.02,4.04,1.72,6.24,2.41,3.04,3.52,5.46,1.69,7.94-1.95,2.65-5.15,2.55-8.1.37-2.42-1.79-3.57-4.33-3.3-6.77ZM182.97,58.42l6.76,7.42-1.03.94-7.75-8.5,13.75-12.54,7.53,8.26-1.03.94-6.54-7.18-5.04,4.6,6.17,6.77-1.01.92-6.17-6.76-5.64,5.15ZM30.83,153.42c-3.87-10.53-5.83-21.6-5.83-32.92,0-13.97,2.95-27.43,8.76-40l-1.82-.84c-5.93,12.84-8.94,26.58-8.94,40.84,0,11.55,2,22.86,5.95,33.61l1.88-.69ZM218,120.5c0-14.54-3.12-28.54-9.29-41.59l-1.81.85c6.04,12.78,9.1,26.49,9.1,40.74,0,11.32-1.96,22.4-5.83,32.92l1.88.69c3.95-10.75,5.95-22.05,5.95-33.61ZM124,47.09v146.82c38.97-1.83,70-33.99,70-73.41s-31.03-71.58-70-73.41ZM179,105.75c.48-.28,1.09-.11,1.37.37.28.48.11,1.09-.37,1.37l-8.33,4.81c-.16.09-.33.13-.5.13-.35,0-.68-.18-.87-.5-.28-.48-.11-1.09.37-1.37l8.33-4.81ZM164.43,105.17l4.81-8.33c.28-.48.89-.64,1.37-.37.48.28.64.89.37,1.37l-4.81,8.33c-.19.32-.52.5-.87.5-.17,0-.34-.04-.5-.13-.48-.28-.64-.89-.37-1.37ZM170,119.33c0,7-5.67,12.67-12.67,12.67s-12.67-5.67-12.67-12.67,5.67-12.67,12.67-12.67,12.67,5.67,12.67,12.67ZM156.34,94c0-.55.45-1,1-1s1,.45,1,1v9.62c0,.55-.45,1-1,1s-1-.45-1-1v-9.62ZM144.11,96.63c.48-.28,1.09-.11,1.37.37l4.81,8.33c.28.48.11,1.09-.37,1.37-.16.09-.33.13-.5.13-.35,0-.68-.18-.87-.5l-4.81-8.33c-.28-.48-.11-1.09.37-1.37ZM134.47,106.39c.28-.48.89-.64,1.37-.37l8.33,4.81c.48.28.64.89.37,1.37-.19.32-.52.5-.87.5-.17,0-.34-.04-.5-.13l-8.33-4.81c-.48-.28-.64-.89-.37-1.37ZM131,119.66c0-.55.45-1,1-1h9.62c.55,0,1,.45,1,1s-.45,1-1,1h-9.62c-.55,0-1-.45-1-1ZM135.5,133.39c-.35,0-.68-.18-.87-.5-.28-.48-.11-1.09.37-1.37l8.33-4.81c.48-.28,1.09-.11,1.37.37.28.48.11,1.09-.37,1.37l-8.33,4.81c-.16.09-.33.13-.5.13ZM150.57,133.83l-4.81,8.33c-.19.32-.52.5-.87.5-.17,0-.34-.04-.5-.13-.48-.28-.64-.89-.37-1.37l4.81-8.33c.28-.48.89-.64,1.37-.37.48.28.64.89.37,1.37ZM158.66,145c0,.55-.45,1-1,1s-1-.45-1-1v-9.62c0-.55.45-1,1-1s1,.45,1,1v9.62ZM170.89,142.37c-.16.09-.33.13-.5.13-.35,0-.68-.18-.87-.5l-4.81-8.33c-.28-.48-.11-1.09.37-1.37.48-.28,1.09-.11,1.37.37l4.81,8.33c.28.48.11,1.09-.37,1.37ZM180.53,132.61c-.19.32-.52.5-.87.5-.17,0-.34-.04-.5-.13l-8.33-4.81c-.48-.28-.64-.89-.37-1.37s.89-.64,1.37-.37l8.33,4.81c.48.28.64.89.37,1.37ZM183,120.34h-9.62c-.55,0-1-.45-1-1s.45-1,1-1h9.62c.55,0,1,.45,1,1s-.45,1-1,1ZM47,120.5c0,39.42,31.03,71.58,70,73.41V47.09c-38.97,1.83-70,33.99-70,73.41ZM103.35,120v25h-41v-25h-9.65l15.08-13,15.08-13,11.15,9.62v-3.62h8v10.51l11,9.49h-9.65ZM83.74,135h7.6v-7.61h-7.6v7.61ZM74.35,135h7.61v-7.61h-7.61v7.61ZM74.35,125.61h7.61v-7.61h-7.61v7.61ZM83.74,125.61h7.6v-7.61h-7.6v7.61Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    Indoor Outdoor Use                                </h3>
                            
                                                            <div class="icon-box__description">
                                    Designed for both indoor and outdoor environments, allowing the camera to be deployed across a wide range of production and installation scenarios.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-617cf0d">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="IP65 Weather Protection">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 159 196.91"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M102,127.02l-22.5-37.03-22.7,37.31c-3.64,4.79-5.8,10.75-5.8,17.23,0,15.74,12.76,28.5,28.5,28.5s28.5-12.76,28.5-28.5c0-6.6-2.25-12.67-6.01-17.5h.01ZM69.56,163.08c-.38.62-1.04.96-1.71.96-.35,0-.71-.09-1.04-.29-6.77-4.12-10.81-11.31-10.81-19.23,0-7.49,3.71-14.46,9.92-18.66.92-.62,2.16-.38,2.78.54.62.92.38,2.16-.54,2.78-5.11,3.45-8.16,9.19-8.16,15.34,0,6.51,3.32,12.42,8.89,15.81.94.57,1.24,1.8.67,2.75ZM141.52,11.06L79.5,0,17.48,11.06C7.35,12.87,0,21.65,0,31.93v69.07c0,12.52,4.76,24.4,13.39,33.46l53.53,56.17c3.81,4,9.13,6.27,14.64,6.27.11,0,.21,0,.32,0,5.62-.09,11-2.54,14.75-6.74l50.03-55.96c7.96-8.9,12.35-20.39,12.35-32.33V31.93c0-10.29-7.35-19.07-17.48-20.87ZM157,101.88c0,11.45-4.2,22.46-11.84,31l-50.03,55.96c-3.43,3.83-8.15,5.99-13.29,6.07-5.12.08-9.93-1.92-13.48-5.65l-53.53-56.17c-8.28-8.69-12.84-20.08-12.84-32.08V31.93c0-9.32,6.66-17.27,15.83-18.91L79.5,2.03l61.67,11c9.17,1.64,15.83,9.59,15.83,18.91v69.94ZM26.12,33.62h2.46v46.12h-2.46v-46.12ZM69.59,47.23c0-8.51-5.73-13.61-14.87-13.61h-15.69v46.12h2.46v-18.96h13.36c9.07,0,14.74-5.04,14.74-13.55ZM41.49,58.45v-22.43h12.98c7.69,0,12.54,4.16,12.54,11.21s-4.85,11.21-12.54,11.21h-12.98ZM90.42,79.61c6.36,0,11.84-6.11,11.84-14.43,0-9.39-4.47-14.37-12.29-14.37-4.22,0-8.25,2.33-11.4,6.17.13-16.95,6.36-22.68,13.67-22.68,2.9,0,5.61,1.2,7.56,3.65l1.51-1.58c-2.27-2.52-5.1-4.16-9.01-4.16-8.44,0-16.07,6.36-16.07,25.2,0,14.05,5.29,22.18,14.18,22.18ZM89.85,52.77c7.18,0,10.02,5.42,10.02,12.41s-3.97,12.35-9.32,12.35c-7.81,0-11.47-7.43-11.91-17.83,3.72-4.98,8-6.93,11.21-6.93ZM138.42,64.24c0,9.83-6.99,15.37-13.92,15.37s-10.96-3.15-13.73-5.92l1.45-1.7c2.58,2.77,6.05,5.54,12.41,5.54s11.4-5.29,11.4-13.17-4.41-12.66-11.28-12.66c-3.4,0-5.8,1.26-8.38,3.02l-1.89-1.13,1.64-20.54h19.97v2.08h-17.89l-1.51,16.82c2.33-1.45,4.85-2.39,8.25-2.39,7.5,0,13.48,4.47,13.48,14.68Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    IP65 Weather Protection                                </h3>
                            
                                                            <div class="icon-box__description">
                                    IP65-rated protection shields the camera from dust and water, allowing reliable operation in outdoor and challenging environments.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-20ec113">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="Operation in Extreme Climates">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 402 204"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M300,0H102C45.76,0,0,45.76,0,102s45.76,102,102,102h198c56.24,0,102-45.76,102-102S356.24,0,300,0ZM300,202H102c-55.14,0-100-44.86-100-100S46.86,2,102,2h198c55.14,0,100,44.86,100,100s-44.86,100-100,100ZM83,79c-12.13,0-22,9.87-22,22s9.87,22,22,22,22-9.87,22-22-9.87-22-22-22ZM83,121c-11.03,0-20-8.97-20-20s8.97-20,20-20,20,8.97,20,20-8.97,20-20,20ZM84,71h-2v-24h2v24ZM61.08,80.49l-16.97-16.97,1.41-1.41,16.97,16.97-1.41,1.41ZM53,102h-24v-2h24v2ZM61.08,121.51l1.41,1.41-16.97,16.97-1.41-1.41,16.97-16.97ZM82,131h2v24h-2v-24ZM104.92,121.51l16.97,16.97-1.41,1.41-16.97-16.97,1.41-1.41ZM113,100h24v2h-24v-2ZM104.92,80.49l-1.41-1.41,16.97-16.97,1.41,1.41-16.97,16.97ZM177.5,141.88V29.28c0-.98-.8-1.78-1.78-1.78h-10.44c-.98,0-1.78.8-1.78,1.78v112.6c-7.57,3.08-12.25,10.87-11.4,19.07.89,8.65,7.82,15.57,16.46,16.45.66.07,1.31.1,1.96.1,4.58,0,8.91-1.66,12.36-4.77,3.89-3.51,6.11-8.51,6.11-13.73,0-7.47-4.61-14.31-11.5-17.12ZM182.22,171.99c-3.72,3.36-8.53,4.92-13.55,4.42-8.18-.84-14.73-7.38-15.57-15.56-.81-7.86,3.75-15.33,11.08-18.16l.32-.12V29.28c0-.43.35-.78.78-.78h10.44c.43,0,.78.35.78.78v113.29l.32.12c6.69,2.58,11.18,9.13,11.18,16.31,0,4.93-2.11,9.67-5.78,12.99ZM173,36.22c-1.56,1.27-3.26,2.35-5,3.37v-8.2c0-.77.62-1.39,1.39-1.39h2.22c.77,0,1.39.62,1.39,1.39v4.83ZM184.5,159c0,7.96-6.64,14.36-14.68,13.98-6.9-.32-12.66-5.84-13.27-12.72-.65-7.43,4.51-13.78,11.44-15.03V41.89c1.71-.98,3.4-2.01,5-3.16v106.51c6.54,1.18,11.5,6.89,11.5,13.76ZM250.5,141.88V29.28c0-.98-.8-1.78-1.78-1.78h-10.44c-.98,0-1.78.8-1.78,1.78v112.6c-7.57,3.08-12.25,10.87-11.4,19.07.89,8.65,7.82,15.57,16.46,16.45.66.07,1.31.1,1.96.1,4.58,0,8.91-1.66,12.36-4.77,3.89-3.51,6.11-8.51,6.11-13.73,0-7.47-4.61-14.31-11.5-17.12ZM255.22,171.99c-3.72,3.36-8.53,4.92-13.55,4.42-8.18-.84-14.73-7.38-15.57-15.56-.81-7.86,3.75-15.33,11.08-18.16l.32-.12V29.28c0-.43.35-.78.78-.78h10.44c.43,0,.78.35.78.78v113.29l.32.12c6.69,2.58,11.18,9.13,11.18,16.31,0,4.93-2.11,9.67-5.78,12.99ZM257.5,159c0,7.96-6.64,14.36-14.68,13.98-6.9-.32-12.66-5.84-13.27-12.72-.65-7.43,4.51-13.78,11.44-15.03v-8.24h5v8.24c6.54,1.18,11.5,6.89,11.5,13.76ZM353.67,117.26l18.71,10.8-1,1.73-18.62-10.75,5.84,19.86-1.92.56-6.44-21.87-25.25-14.58v28.56l16.7,16.51-1.41,1.42-15.3-15.12v21.61h-2v-21.5l-14.28,14.99-1.45-1.38,15.72-16.51v-28l-23.56,13.6-6.44,21.87-1.92-.56,5.84-19.86-19.31,11.15-1-1.73,19.4-11.2-20.74-5.69.53-1.93,22.65,6.21,24.04-13.88-24.56-14.18-22.16,5.36-.47-1.94,20.12-4.87-19.31-11.15,1-1.73,19.4,11.2-5.44-20.81,1.93-.51,5.94,22.72,24.04,13.88v-28.36l-15.72-16.51,1.45-1.38,14.28,14.99v-22.3h2v22.41l15.3-15.12,1.41,1.42-16.7,16.51v28.92l25.74-14.86,5.94-22.72,1.93.51-5.44,20.81,18.71-10.8,1,1.73-18.62,10.75,20.12,4.87-.47,1.94-22.16-5.36-25.25,14.58,24.73,14.28,22.65-6.21.53,1.93-20.74,5.69Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    Operation in Extreme Climates                                </h3>
                            
                                                            <div class="icon-box__description">
                                    Designed to operate from -40°C to +60°C, allowing reliable performance in extreme cold, heat, and demanding outdoor environments.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                                            <div class="icon-box__item elementor-repeater-item-0339771">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="Integrated Carry Handle">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 277 185.99"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M273.03,155.31h-38.57v-46.04c0-16.61-13.51-30.13-30.13-30.13h-3.51v-8.89c0-9.96,0-21.25-17.18-35.39C167.26,21.35,160.29.89,160.22.68l-.23-.68h-77.96l.08,1.07c.01.19,1.27,18.88-6.78,32.05-9.84,16.1-8.59,39.66-8.15,45.04-16.36.3-29.58,13.86-29.58,30.49v46.65H3.97c-2.19,0-3.97,1.78-3.97,3.97v22.75c0,2.19,1.78,3.97,3.97,3.97h269.06c2.19,0,3.97-1.78,3.97-3.97v-22.75c0-2.19-1.78-3.97-3.97-3.97ZM204.34,81.14c15.51,0,28.13,12.62,28.13,28.13v46.04h-16.79v-46.04c0-6.25-5.08-11.33-11.33-11.33h-3.51v-16.79h3.51ZM98.18,113.29c-2.37-3.86-6.63-6.46-11.49-6.46-5.38,0-10.02,3.17-12.18,7.73l-3.04-14.64h26.71v13.36ZM98.18,127.99c0,6.33-5.15,11.49-11.49,11.49s-11.49-5.15-11.49-11.49v-7.67c0-6.33,5.15-11.49,11.49-11.49s11.49,5.15,11.49,11.49v7.67ZM69.43,99.93l3.79,18.27c.02.11.07.2.12.29-.08.6-.14,1.2-.14,1.82v7.67c0,7.44,6.05,13.49,13.49,13.49,4.86,0,9.11-2.59,11.49-6.46v12.75c0,2.79.85,5.38,2.3,7.53h-42.1v-46.04c0-5.15,4.19-9.33,9.33-9.33h1.71ZM100.18,147.77v-49.21c0-6.33,5.15-11.49,11.49-11.49s11.49,5.15,11.49,11.49v49.21c0,6.33-5.15,11.49-11.49,11.49s-11.49-5.15-11.49-11.49ZM125.1,148.79c2.3,3.8,6.4,6.37,11.12,6.52h-13.37c1.28-1.89,2.07-4.12,2.25-6.52ZM148.13,104.5v37.34c0,6.33-5.15,11.49-11.49,11.49s-11.49-5.15-11.49-11.49v-41.3c0-6.33,5.15-11.49,11.49-11.49s11.49,5.15,11.49,11.49v3.96ZM149.87,144.48c2.32,4.11,6.71,6.89,11.75,6.89,7.44,0,13.49-6.05,13.49-13.49v-9.59c1.55,2.63,4.39,4.43,7.63,4.48l13.52.22s.05,0,.08,0c1.19,0,2.3-.46,3.15-1.29.87-.85,1.34-1.99,1.34-3.21v-28.57h3.51c5.15,0,9.33,4.19,9.33,9.33v46.04h-76.6c6.34-.2,11.6-4.78,12.8-10.83ZM161.62,93.01c6.33,0,11.49,5.15,11.49,11.49v33.39c0,6.33-5.15,11.49-11.49,11.49s-11.49-5.15-11.49-11.49v-33.39c0-6.33,5.15-11.49,11.49-11.49ZM77.03,34.17c7.35-12.03,7.29-27.89,7.12-32.17h74.41c1.38,3.74,8.68,21.94,23.81,34.39,16.45,13.55,16.45,23.87,16.45,33.85v58.26c0,.67-.26,1.31-.75,1.78-.48.47-1.12.7-1.79.71l-13.52-.22c-3.82-.06-6.92-3.22-6.92-7.04v-33.88c0-5.91-4.8-10.75-10.71-10.81l-95.96-.89c-.38-4.84-1.65-28.45,7.85-43.99ZM39.59,108.65c0-15.72,12.62-28.51,28.13-28.51,0,0,.02,0,.03,0l97.38.9c4.81.04,8.73,4,8.73,8.81v8.99c-2.14-4.62-6.81-7.84-12.23-7.84-5.04,0-9.44,2.78-11.75,6.89-1.23-6.18-6.69-10.85-13.22-10.85-5.3,0-9.88,3.08-12.09,7.54-1.7-5.5-6.83-9.52-12.89-9.52-7.23,0-13.13,5.71-13.46,12.86h-30.49c-6.25,0-11.33,5.08-11.33,11.33v46.04h-16.8v-46.65ZM275,182.03c0,1.08-.88,1.97-1.97,1.97H3.97c-1.08,0-1.97-.88-1.97-1.97v-22.75c0-1.08.88-1.97,1.97-1.97h98.14s.01,0,.02,0c2.44,2.45,5.82,3.96,9.54,3.96s7.11-1.52,9.56-3.98c.04,0,.08.03.13.03h151.68c1.08,0,1.97.88,1.97,1.97v22.75Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    Integrated Carry Handle                                </h3>
                            
                                                            <div class="icon-box__description">
                                    An integrated handle makes it easier to carry, mount, and reposition the camera during installation.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                    </div>
        				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-59e38b0 scroll-trigger delay elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="59e38b0" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-00d0937" data-id="00d0937" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-1453f12 elementor-widget elementor-widget-heading" data-id="1453f12" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Range | Anywhere</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-85421d0 elementor-widget elementor-widget-bolintech-overlay-images-switcher" data-id="85421d0" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-overlay-images-switcher.default">
				<div class="elementor-widget-container">
					        <div class="bolin-ois-wrapper" data-autoplay="true" data-autoplay-interval="3000">

            <div class="bolin-ois-image-container">

                <!-- Color overlay — z-index 1 -->
                <div class="bolin-ois-overlay" style="background-color: rgba(0, 0, 0, 0);"></div>

                <!-- Image overlay — z-index 2, floats above color overlay -->
                
                <!-- Switcher images — only the active one is visible -->
                                    <img decoding="async" src="https://bolintechnology.com/wp-content/uploads/2026/04/Range_Studio.webp" alt="" class="bolin-ois-image" data-image-index="0">
                                        <img decoding="async" src="https://bolintechnology.com/wp-content/uploads/2026/04/Range_eSports.webp" alt="" class="bolin-ois-image" data-image-index="1">
                                        <img decoding="async" src="https://bolintechnology.com/wp-content/uploads/2026/04/Range_OutdoorConcert.webp" alt="" class="bolin-ois-image" data-image-index="2">
                                        <img decoding="async" src="https://bolintechnology.com/wp-content/uploads/2026/04/Range_Conference.webp" alt="" class="bolin-ois-image" data-image-index="3">
                                        <img decoding="async" src="https://bolintechnology.com/wp-content/uploads/2026/04/Range_ConductorCam.webp" alt="" class="bolin-ois-image" data-image-index="4">
                                        <img decoding="async" src="https://bolintechnology.com/wp-content/uploads/2026/04/Range_WeatherVan.webp" alt="" class="bolin-ois-image" data-image-index="5">
                                        <img decoding="async" src="https://bolintechnology.com/wp-content/uploads/2026/04/Range_Theater.webp" alt="" class="bolin-ois-image" data-image-index="6">
                                        <img decoding="async" src="https://bolintechnology.com/wp-content/uploads/2026/04/Range_RainySoccer.webp" alt="" class="bolin-ois-image" data-image-index="7">
                                        <img decoding="async" src="https://bolintechnology.com/wp-content/uploads/2026/04/Range_Basketball.webp" alt="" class="bolin-ois-image" data-image-index="8">
                                        <img decoding="async" src="https://bolintechnology.com/wp-content/uploads/2026/04/Range_Ship.webp" alt="" class="bolin-ois-image bolin-ois-image--active" data-image-index="9">
                    
            </div><!-- /.bolin-ois-image-container -->

            <div class="bolin-ois-buttons">
                                    <button class="btn bolin-ois-btn" data-image-index="0" type="button">Studio</button>
                                        <button class="btn bolin-ois-btn" data-image-index="1" type="button">eSports</button>
                                        <button class="btn bolin-ois-btn" data-image-index="2" type="button">Outdoor Concert</button>
                                        <button class="btn bolin-ois-btn" data-image-index="3" type="button">Conference</button>
                                        <button class="btn bolin-ois-btn" data-image-index="4" type="button">Conductor Cam</button>
                                        <button class="btn bolin-ois-btn" data-image-index="5" type="button">Weather Van</button>
                                        <button class="btn bolin-ois-btn" data-image-index="6" type="button">Theater</button>
                                        <button class="btn bolin-ois-btn" data-image-index="7" type="button">Rainy Soccer</button>
                                        <button class="btn bolin-ois-btn" data-image-index="8" type="button">Basketball</button>
                                        <button class="btn bolin-ois-btn bolin-ois-btn--active" data-image-index="9" type="button">Ship</button>
                                </div>

        </div><!-- /.bolin-ois-wrapper -->
        				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-9a88a7e scroll-trigger elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="9a88a7e" data-element_type="section" data-e-type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fb5fc80" data-id="fb5fc80" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-35716df elementor-widget elementor-widget-html" data-id="35716df" data-element_type="widget" data-e-type="widget" id="water-image-wrapper" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<canvas id="water-image" width="1261" height="632" class="start"></canvas>
				</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-ed12199 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ed12199" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5f84c55" data-id="5f84c55" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-61a8baf elementor-widget elementor-widget-heading" data-id="61a8baf" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h4 class="elementor-heading-title elementor-size-default">Wipe It</h4>				</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ac42632" data-id="ac42632" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-f536bc2 elementor-widget elementor-widget-video" data-id="f536bc2" data-element_type="widget" data-e-type="widget" data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;mute&quot;:&quot;yes&quot;}" data-widget_type="video.default">
				<div class="elementor-widget-container">
							<div class="e-hosted-video elementor-wrapper elementor-open-inline">
					<video class="elementor-video" src="https://bolintechnology.com/wp-content/uploads/2026/03/wiper.webm" preload="metadata" muted="muted" controlslist="nodownload" playsinline=""></video>
				</div>
						</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-ebefb66 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="ebefb66" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d30099b" data-id="d30099b" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-e1ae362 elementor-widget elementor-widget-heading" data-id="e1ae362" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h3 class="elementor-heading-title elementor-size-default">Go Where the Story Happens</h3>				</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-01f4798 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="01f4798" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-e426601" data-id="e426601" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-a2141be elementor-widget elementor-widget-bolintech-sequential-video" data-id="a2141be" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-sequential-video.default">
				<div class="elementor-widget-container">
					        <div class="bolin-seqvid" data-config="{&quot;threshold&quot;:0.299999999999999988897769753748434595763683319091796875,&quot;loop&quot;:true,&quot;muted&quot;:true,&quot;showControls&quot;:false,&quot;showLabels&quot;:false}">

                        <div class="bolin-seqvid__item is-active" data-index="0">

                <div class="bolin-seqvid__stage">

                    <video class="bolin-seqvid__video" src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-Move-With-You-1.webm" playsinline="" muted="" preload="metadata"></video>

                    
                    
                </div><!-- /.bolin-seqvid__stage -->

            </div><!-- /.bolin-seqvid__item -->
                        <div class="bolin-seqvid__item" data-index="1">

                <div class="bolin-seqvid__stage">

                    <video class="bolin-seqvid__video" src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-Move-With-You-2.webm" playsinline="" muted="" preload="metadata"></video>

                    
                    
                </div><!-- /.bolin-seqvid__stage -->

            </div><!-- /.bolin-seqvid__item -->
                        <div class="bolin-seqvid__item" data-index="2">

                <div class="bolin-seqvid__stage">

                    <video class="bolin-seqvid__video" src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-Move-With-You-3.webm" playsinline="" muted="" preload="metadata"></video>

                    
                    
                </div><!-- /.bolin-seqvid__stage -->

            </div><!-- /.bolin-seqvid__item -->
                        <div class="bolin-seqvid__item" data-index="3">

                <div class="bolin-seqvid__stage">

                    <video class="bolin-seqvid__video" src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-Move-With-You-4.webm" playsinline="" muted="" preload="metadata"></video>

                    
                    
                </div><!-- /.bolin-seqvid__stage -->

            </div><!-- /.bolin-seqvid__item -->
                        <div class="bolin-seqvid__item" data-index="4">

                <div class="bolin-seqvid__stage">

                    <video class="bolin-seqvid__video" src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-Move-With-You-5.webm" playsinline="" muted="" preload="metadata"></video>

                    
                    
                </div><!-- /.bolin-seqvid__stage -->

            </div><!-- /.bolin-seqvid__item -->
                        <div class="bolin-seqvid__item" data-index="5">

                <div class="bolin-seqvid__stage">

                    <video class="bolin-seqvid__video" src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-Move-With-You-4-6.webm" playsinline="" muted="" preload="metadata"></video>

                    
                    
                </div><!-- /.bolin-seqvid__stage -->

            </div><!-- /.bolin-seqvid__item -->
            
                        <nav class="bolin-seqvid__nav" aria-label="Video navigation">
                                <button class="bolin-seqvid__dot is-active" data-index="0" aria-label="Video 1">
                </button>
                                <button class="bolin-seqvid__dot" data-index="1" aria-label="Video 2">
                </button>
                                <button class="bolin-seqvid__dot" data-index="2" aria-label="Video 3">
                </button>
                                <button class="bolin-seqvid__dot" data-index="3" aria-label="Video 4">
                </button>
                                <button class="bolin-seqvid__dot" data-index="4" aria-label="Video 5">
                </button>
                                <button class="bolin-seqvid__dot" data-index="5" aria-label="Video 6">
                </button>
                            </nav>
            
        </div><!-- /.bolin-seqvid -->
        				</div>
				</div>
				<div class="elementor-element elementor-element-a858a06 elementor-widget elementor-widget-text-editor" data-id="a858a06" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="text-align: center;">Range is built for productions that move. From live events to temporary installations and on-location shoots, the camera is designed to be deployed quickly and taken wherever the story happens. Remove it from the included carrying case, mount it, and start capturing. When the event is over, pack it back into the case and move on to the next location.</p>								</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-8b4f261 scroll-trigger delay elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8b4f261" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-32e2819" data-id="32e2819" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-67bdc54 elementor-widget elementor-widget-heading" data-id="67bdc54" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Accessory Mounting Points</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-fa20beb elementor-widget elementor-widget-video" data-id="fa20beb" data-element_type="widget" data-e-type="widget" data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;mute&quot;:&quot;yes&quot;}" data-widget_type="video.default">
				<div class="elementor-widget-container">
							<div class="e-hosted-video elementor-wrapper elementor-open-inline">
					<video class="elementor-video" src="https://bolintechnology.com/wp-content/uploads/2026/03/Bolin-Range-Accessory-Mount.webm" preload="metadata" muted="muted" controlslist="nodownload" playsinline=""></video>
				</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-30868cc elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="30868cc" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p style="text-align: center;">Threaded mounting points integrated into the handle allow microphones, monitors, wireless transmitters, and other accessories to be mounted directly to the camera.</p>								</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-7202398 scroll-trigger delay elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7202398" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-feaae90" data-id="feaae90" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-ddbc7ef elementor-widget elementor-widget-heading" data-id="ddbc7ef" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Covered in all Environments</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-fdadc64 elementor-widget elementor-widget-video" data-id="fdadc64" data-element_type="widget" data-e-type="widget" data-settings="{&quot;video_type&quot;:&quot;hosted&quot;,&quot;mute&quot;:&quot;yes&quot;}" data-widget_type="video.default">
				<div class="elementor-widget-container">
							<div class="e-hosted-video elementor-wrapper elementor-open-inline">
					<video class="elementor-video" src="https://bolintechnology.com/wp-content/uploads/2026/04/Rain-Cover-V3-M.webm" preload="metadata" muted="muted" controlslist="nodownload" playsinline=""></video>
				</div>
						</div>
				</div>
				<div class="elementor-element elementor-element-8991833 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="8991833" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>I/O panel covers shield the camera’s connections from rain, dust, and outdoor elements while allowing cables to remain connected.</p>								</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-cc115fd scroll-trigger delay elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="cc115fd" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-b0014ca" data-id="b0014ca" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-333764a elementor-widget elementor-widget-heading" data-id="333764a" data-element_type="widget" data-e-type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Range Works with Bolin’s Mounting System</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-96b2836 elementor-widget elementor-widget-image" data-id="96b2836" data-element_type="widget" data-e-type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
															<img loading="lazy" decoding="async" width="1600" height="900" src="https://bolintechnology.com/wp-content/uploads/2026/04/Range-Works-with-Bolins-Mounting-System.webp" class="attachment-large size-large wp-image-51095" alt="Range Works with Bolin's Mounting System" srcset="https://bolintechnology.com/wp-content/uploads/2026/04/Range-Works-with-Bolins-Mounting-System.webp 1600w, https://bolintechnology.com/wp-content/uploads/2026/04/Range-Works-with-Bolins-Mounting-System-768x432.webp 768w, https://bolintechnology.com/wp-content/uploads/2026/04/Range-Works-with-Bolins-Mounting-System-300x169.webp 300w, https://bolintechnology.com/wp-content/uploads/2026/04/Range-Works-with-Bolins-Mounting-System-600x338.webp 600w" sizes="auto, (max-width: 1600px) 100vw, 1600px">															</div>
				</div>
				<div class="elementor-element elementor-element-e49e953 elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="e49e953" data-element_type="widget" data-e-type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>Range ships with permanent (IP65-rated) and temporary waterproof covers to protect the back panel during outdoor use. Range is compatible with Bolin’s indoor and outdoor mounting solutions.</p><p><span style="color: #c7c7c7;"><a style="color: #c7c7c7;" href="https://bolintechnology.com/product/large-indoor-ptz-wall-mount-bracket"><span style="text-decoration: underline;"><em>C-WM3B</em></span></a>, ES-CMK, <a style="color: #c7c7c7;" href="https://bolintechnology.com/product/ptz-drop-ceiling-pendant-mount-system"><span style="text-decoration: underline;"><em>C-PMSB</em></span></a>, <a style="color: #c7c7c7;" href="https://bolintechnology.com/product/outdoor-ptz-upright-mount-base"><span style="text-decoration: underline;"><em>QR-BM</em></span></a>, <a style="color: #c7c7c7;" href="https://bolintechnology.com/product/quick-release-plate-for-indoor-ptz-cameras"><em><span style="text-decoration: underline;">QR-M</span></em></a>, <a style="color: #c7c7c7;" href="https://bolintechnology.com/product/professional-outdoor-ptz-wall-mount-bracket-es"><span style="text-decoration: underline;"><em>ES-WM</em></span></a>&nbsp;</span></p>								</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				<section class="elementor-section elementor-top-section elementor-element elementor-element-99b9ef5 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="99b9ef5" data-element_type="section" data-e-type="section" id="content-specificstion">
						<div class="elementor-container elementor-column-gap-no">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-92ad544" data-id="92ad544" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-64596a0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="64596a0" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-dbb06ab" data-id="dbb06ab" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-388ca57 icon-box-columns-1 icon-box-columns-tablet-1 elementor-widget__width-initial icon-box-columns-mobile-1 icon-box--position-top elementor-widget elementor-widget-bolintech-icon-box" data-id="388ca57" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-icon-box.default">
				<div class="elementor-widget-container">
					        <div class="icon-box">
                                            <div class="icon-box__item elementor-repeater-item-9e53171">
                                    <div class="icon-box__inner">
                                                    <div class="icon-box__icon" role="img" aria-label="NDAA Compliant">
                                <svg xmlns="http://www.w3.org/2000/svg" id="_图层_2" data-name="图层_2" viewBox="0 0 379.19 118.02"><defs><style>      .cls-1 {        fill: #fff;      }    </style></defs><g id="_图层_1-2" data-name="图层_1"><path class="cls-1" d="M88.67,0H21.33C9.57,0,0,9.57,0,21.33v67.33c0,11.76,9.57,21.33,21.33,21.33h67.33c11.76,0,21.33-9.57,21.33-21.33V21.33c0-11.76-9.57-21.33-21.33-21.33ZM106,88.67c0,9.56-7.78,17.33-17.33,17.33H21.33c-9.56,0-17.33-7.78-17.33-17.33V21.33c0-9.56,7.78-17.33,17.33-17.33h67.33c9.56,0,17.33,7.78,17.33,17.33v67.33ZM143.33,65.39h-12.69V3.54h11.65l26.56,37.98h.4V3.54h12.76v61.84h-11.02l-27.19-37.98h-.48v37.98ZM251.71,34.46c0-18.31-10.39-30.92-30.29-30.92h-24.02v61.84h22.67c20.77,0,31.63-12.61,31.63-30.92ZM210.64,15.91h10.15c11.89,0,17.36,7.29,17.36,18.55s-5.71,18.55-18,18.55h-9.51V15.91ZM317.67,65.39l-23.23-61.84h-13.56l-23.31,61.84h14.03l5.07-14.35h21.88l5.07,14.35h14.03ZM281.12,38.67l6.26-17.68h.48l6.26,17.68h-13ZM338.2,51.04h21.88l5.07,14.35h14.03l-23.23-61.84h-13.56l-23.31,61.84h14.03l5.07-14.35ZM348.9,20.99h.48l6.26,17.68h-13l6.26-17.68ZM133.57,89.57c0,9.11,4.97,14.9,12.41,14.9,3.5,0,7.09-1.9,9.26-4.92l3.4,2.44c-2.56,3.95-7.14,6.48-12.61,6.48-10.19,0-16.89-7.31-16.89-18.9s6.7-18.51,16.89-18.51c5.42,0,10.14,2.53,12.61,6.48l-3.4,2.34c-2.02-2.92-5.81-4.82-9.26-4.82-7.44,0-12.41,5.55-12.41,14.51ZM176.07,81.29c-7.29,0-11.92,5.26-11.92,13.59s4.63,13.59,11.92,13.59,11.92-5.26,11.92-13.59-4.68-13.59-11.92-13.59ZM176.07,104.67c-4.73,0-7.73-3.75-7.73-9.79s3-9.79,7.73-9.79,7.73,3.75,7.73,9.79-3,9.79-7.73,9.79ZM232.3,91.42v16.37h-4.09v-15.78c0-4.24-2.22-7.01-5.56-7.01-3.94,0-6.55,2.92-6.55,7.5v15.29h-4.14v-15.78c0-4.24-2.22-7.01-5.51-7.01-3.89,0-6.6,2.97-6.6,7.5v15.29h-4.09v-25.81h4.09v3.6h.25c1.62-2.58,4.38-4.29,7.19-4.29,3.4,0,5.91,1.9,7.34,5.31h.25c1.77-3.26,4.88-5.31,8.67-5.31,5.52,0,8.76,3.75,8.76,10.13ZM253.68,81.29c-3.35,0-6.3,1.66-8.22,4.38h-.25v-3.7h-4.09v36.04h4.09v-13.93h.25c1.82,2.78,4.68,4.33,8.22,4.33,6.4,0,11.08-5.8,11.08-14.03,0-7.65-4.68-13.1-11.08-13.1ZM252.59,104.48c-4.43,0-7.58-3.95-7.58-9.6s3.25-9.59,7.73-9.59,7.88,3.99,7.88,9.59-3.4,9.6-8.03,9.6ZM278.64,104.43h1.23v3.8h-2.17c-3.5,0-5.17-1.61-5.17-4.72v-31.76h4.09v30.68c0,1.31.69,2,2.02,2ZM292.09,73.84c0,1.71-1.13,2.73-2.86,2.73s-2.71-1.02-2.71-2.73,1.03-2.78,2.71-2.78,2.86,1.07,2.86,2.78ZM287.26,81.98h4.09v25.81h-4.09v-25.81ZM310.55,81.29c-3.79,0-6.99,1.41-9.26,4.43l3.2,2.24c1.43-1.9,3.4-2.97,6.01-2.97,3.64,0,6.11,2.29,6.11,5.8v1.61h-4.28c-7.83,0-12.66,3.26-12.66,8.87,0,4.33,3.45,7.21,8.57,7.21,3.25,0,6.65-1.75,8.08-4.38h.3v3.7h4.09v-17c0-5.99-4.09-9.5-10.14-9.5ZM316.61,97.95c0,4.87-4.73,6.82-7.63,6.82s-5.12-1.51-5.12-3.75c0-3.26,3.15-4.92,9.26-4.92h3.5v1.85ZM351.18,91.42v16.37h-4.09v-15.78c0-4.24-2.71-7.01-6.2-7.01-4.33,0-7.29,3.02-7.29,7.5v15.29h-4.09v-25.81h4.09v3.65h.25c1.62-2.63,5.02-4.33,8.08-4.33,5.76,0,9.26,3.7,9.26,10.13ZM365.61,81.98h7.53v3.8h-7.53v14.81c0,2.87,1.58,4.48,4.28,4.48.79,0,1.77-.2,2.66-.49v3.7c-.98.39-2.31.54-3.5.54-4.88,0-7.53-2.82-7.53-7.94v-15.1h-4.09v-3.8h4.09v-8.18h4.09v8.18ZM79.64,29.14l-31.25,45.03-18.3-18.26c-.78-.78-.78-2.05,0-2.83.78-.78,2.05-.79,2.83,0l14.92,14.88,28.53-41.1c.63-.91,1.88-1.13,2.78-.5s1.13,1.88.5,2.78Z"></path></g></svg>                            </div>
                        
                        <div class="icon-box__content">
                                                            <h3 class="icon-box__title">
                                    NDAA Compliant                                </h3>
                            
                                                            <div class="icon-box__description">
                                    Built without restricted components from banned manufacturers, supporting deployment in security-sensitive environments.                                </div>
                                                                                </div>
                    </div>
                                </div>
                                    </div>
        				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
				<div class="elementor-element elementor-element-97efb9f elementor-widget elementor-widget-bolintech-heading" data-id="97efb9f" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-heading.default">
				<div class="elementor-widget-container">
					<h2 class="title">Specification</h2>				</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-48ef438 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="48ef438" data-element_type="section" data-e-type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1e7a829" data-id="1e7a829" data-element_type="column" data-e-type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
						<div class="elementor-element elementor-element-0800c06 elementor-widget elementor-widget-bolintech-specifications" data-id="0800c06" data-element_type="widget" data-e-type="widget" data-widget_type="bolintech-specifications.default">
				<div class="elementor-widget-container">
					<ul class="nav nav-tabs mb-3" role="tablist">
					<li class="nav-item" role="presentation">
							<a class="nav-link active" id="table-header--839" data-mdb-toggle="tab" href="#table--839" role="tab" aria-controls="table--839" aria-selected="true"></a>
						</li>
				</ul><div class="tab-content">
					<div class="tab-pane fade show active" id="table--839" role="tabpanel" aria-labelledby="table-header--839">
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item" role="presentation">
									<a class="nav-link active" id="tab-header--image-4k60-25x-839" data-mdb-toggle="tab" href="#tab--image-4k60-25x-839" role="tab" aria-controls="tab--image-4k60-25x-839" aria-selected="true">Image 4K60, 25X</a>
								</li><li class="nav-item" role="presentation">
									<a class="nav-link" id="tab-header--mechanical-839" data-mdb-toggle="tab" href="#tab--mechanical-839" role="tab" aria-controls="tab--mechanical-839" aria-selected="true">Mechanical </a>
								</li><li class="nav-item" role="presentation">
									<a class="nav-link" id="tab-header--interface-839" data-mdb-toggle="tab" href="#tab--interface-839" role="tab" aria-controls="tab--interface-839" aria-selected="true">Interface</a>
								</li><li class="nav-item" role="presentation">
									<a class="nav-link" id="tab-header--hdmi-video-signal-system-839" data-mdb-toggle="tab" href="#tab--hdmi-video-signal-system-839" role="tab" aria-controls="tab--hdmi-video-signal-system-839" aria-selected="true">HDMI Video Signal System</a>
								</li><li class="nav-item" role="presentation">
									<a class="nav-link" id="tab-header--sdi-signal-format-839" data-mdb-toggle="tab" href="#tab--sdi-signal-format-839" role="tab" aria-controls="tab--sdi-signal-format-839" aria-selected="true">SDI Signal Format</a>
								</li><li class="nav-item" role="presentation">
									<a class="nav-link" id="tab-header--usb-signal-format-839" data-mdb-toggle="tab" href="#tab--usb-signal-format-839" role="tab" aria-controls="tab--usb-signal-format-839" aria-selected="true">USB Signal Format</a>
								</li><li class="nav-item" role="presentation">
									<a class="nav-link" id="tab-header--network-839" data-mdb-toggle="tab" href="#tab--network-839" role="tab" aria-controls="tab--network-839" aria-selected="true">Network</a>
								</li><li class="nav-item" role="presentation">
									<a class="nav-link" id="tab-header--general-839" data-mdb-toggle="tab" href="#tab--general-839" role="tab" aria-controls="tab--general-839" aria-selected="true">General</a>
								</li>
							</ul>
							<div class="tab-content show">
								<div class="tab-pane fade show active" id="tab--image-4k60-25x-839" role="tabpanel" aria-labelledby="tab-header--image-4k60-25x-839">
									<table class="table table-bordered table-striped table-hover">
										<tbody>
											<tr><th colspan="2">Image Sensor</th><td>1/1.8" STARVIS 2 CMOS sensor</td></tr><tr><th colspan="2">Number of effective pixels</th><td>8.4MP</td></tr><tr><th colspan="2">Picture elements</th><td>3840x2160</td></tr><tr><th colspan="2">Lens Zoom</th><td>25X Optical Zoom</td></tr><tr><th colspan="2">Digital Zoom</th><td>16X</td></tr><tr><th colspan="2">Horizontal Angle of View</th><td>59.2° (W)~2.5° (T)</td></tr><tr><th colspan="2">Vertical Angle of View</th><td>34.6° (W)~1.4° (T)</td></tr><tr><th colspan="2">Focal Length</th><td>f= 7.1 mm (WIDE) to 171.95 mm (TELE)</td></tr><tr><th colspan="2">Min. Object distance</th><td>150 mm (Wide), 1000 mm (Tele)</td></tr><tr><th colspan="2">Aperture</th><td>F/1.6-7.6 </td></tr><tr><th colspan="2">Min. Illumination</th><td>0. 5Lux(F1.61, AGC ON)</td></tr><tr><th colspan="2">Shutter Speed</th><td>1/25s ~ 1/30000s</td></tr><tr><th colspan="2">Focus</th><td>Auto, Manual</td></tr><tr><th colspan="2">White Balance    </th><td>Auto, Indoor, Outdoor,OPW,ATW, User, SVL, Manual</td></tr><tr><th colspan="2">Exposure</th><td>Auto, Manual, Shutter /Iris priority</td></tr><tr><th colspan="2">Image Adjustments</th><td>Backlight Compensation, E-FLIP, Mirror, Flicker, Contrast, Effect,SHARPNESS </td></tr><tr><th colspan="2">WDR</th><td>Yes</td></tr><tr><th colspan="2">Contrast</th><td>Yes </td></tr><tr><th colspan="2">Saturation </th><td>Yes</td></tr><tr><th colspan="2">Color Gain</th><td>Yes</td></tr><tr><th colspan="2">Color Hue</th><td>Yes </td></tr><tr><th colspan="2">Color Matrix</th><td>Yes</td></tr><tr><th colspan="2">Gamma</th><td>Yes</td></tr><tr><th colspan="2">Gamma Level</th><td>Yes</td></tr><tr><th colspan="2">Black Level</th><td>Yes</td></tr><tr><th colspan="2">Black Gamma</th><td>Yes</td></tr><tr><th colspan="2">Variable Gamma Mode</th><td>Yes</td></tr><tr><th colspan="2">Gamma Offset</th><td>Yes</td></tr><tr><th colspan="2">Noise Reduction</th><td>3D / 2D Noise Reduction</td></tr><tr><th colspan="2">S/N Ratio</th><td>≥50db</td></tr><tr><th colspan="2">HLC</th><td>Yes</td></tr><tr><th colspan="2">E-Flip</th><td>Yes</td></tr><tr><th colspan="2">Defog</th><td>Yes</td></tr><tr><th colspan="2">Backlight Compensation</th><td>Yes</td></tr><tr><th colspan="2">Low Latency Mode</th><td>YES, when it is on, 3D/2D Noise reduction features will be off, latency with image module and HDMI,SDI Output≤4 frames  </td></tr><tr><th colspan="2">AI Face Detection Focus</th><td>Yes</td></tr><tr><th colspan="2">AI Face Auto Exposure</th><td>Yes</td></tr><tr><th colspan="2">Focus Area</th><td>Top, Center, Bottom, All, Default, Face Priority(Future Firmware Update)</td></tr><tr><th colspan="2">Image Style</th><td>Default, Clear, Bright, Soft</td></tr><tr><th colspan="2">Auto Flip</th><td>Yes</td></tr><tr><th colspan="2">AI Framing</th><td>Yes (Future Firmware Update)</td></tr><tr><th colspan="2">AI Tracking</th><td>Yes (Future Firmware Update)</td></tr>
										</tbody>
									</table>
								</div><div class="tab-pane fade " id="tab--mechanical-839" role="tabpanel" aria-labelledby="tab-header--mechanical-839">
									<table class="table table-bordered table-striped table-hover">
										<tbody>
											<tr><th colspan="2">Motor System</th><td>Brushless DC Motor Direct Drive System</td></tr><tr><th colspan="2">Pan Movement</th><td>PAN: 340°(-170° to +170°) ; Fully proportional 0.05°〜300°/s </td></tr><tr><th colspan="2">Tilt Movement</th><td>TILT: 210° (-30° to +180°); Fully proportional 0.05°〜300°/s</td></tr><tr><th colspan="2">Roll Movement</th><td>Roll: Controllable Range:270°(-90° to +180°); Fully Proportional 0.05°〜180°/s;
Mechanical Range: 330° (-120° to +210°); Used for Gyro-Stabilization</td></tr><tr><th colspan="2">Acceleration</th><td>0°〜120°/s in 200ms
3 Speeds: Slow/Standard/High</td></tr><tr><th colspan="2">Speed Proportional</th><td>Yes; Pan/Tilt Speed Proportional to Zoom Range</td></tr><tr><th colspan="2">Image Stabilization</th><td>Built-in 9-axis Gyroscope</td></tr><tr><th colspan="2">Preset Position</th><td>255 positions, Speed: 0~5 Level Adjustable, Accuratcy-0.05°</td></tr><tr><th colspan="2">Preset Memory</th><td>Picture Profile Preset-Preset Memory for Image Parameters: Backlight Compensation, White Balance, Auto Exposure, Bright, Iris, Shutter, Gain, Aperture, Effect, Noise Reduction, Gamma, Ex-COMP, Color Hue, Contrast</td></tr><tr><th colspan="2">Motionless Preset</th><td>Yes</td></tr><tr><th colspan="2">PTZ Trace Memory</th><td>Yes; Up to 4 Recorded Traces</td></tr><tr><th colspan="2">Cruise</th><td>Yes, Up to 12 Saved Positions</td></tr><tr><th colspan="2">Position Limit</th><td>Programmable Pan and Tilt Limits</td></tr><tr><th colspan="2">Quietness</th><td>NC25 </td></tr><tr><th colspan="2">Home Position</th><td>Yes</td></tr><tr><th colspan="2">FreeD </th><td>Yes; FreeD Protocol for Camera Tracking Data Output</td></tr><tr><th colspan="2">ZDP</th><td>Yes; Zero Deviation Positioning</td></tr><tr><th colspan="2">Environmental</th><td>IP65-Rated; Waterproof and Dustproof</td></tr><tr><th colspan="2">Finish</th><td>C3 Salt-Air Corrosion Resistant Coating</td></tr><tr><th colspan="2">Wiper</th><td>Yes; Hidden Wiper</td></tr>
										</tbody>
									</table>
								</div><div class="tab-pane fade " id="tab--interface-839" role="tabpanel" aria-labelledby="tab-header--interface-839">
									<table class="table table-bordered table-striped table-hover">
										<tbody>
											<tr><th colspan="2">HDMI Video Output </th><td>HDMI 2.0</td></tr><tr><th colspan="2">SDI Video Output</th><td>12G-SDI: SMPTE424M /SMPTE292M /SMPTE 296M / SMPTE 274M /SMPTE ST-2081 /SMPTE ST-2082 standards, 75Ω BNC</td></tr><tr><th colspan="2">Network LAN Port</th><td>RJ45, Standard 10M/100M/1000M Ethernet, LAN Connector for IP Control/Video/Audio/Firmware Update</td></tr><tr><th colspan="2">USB</th><td>USB3.0,Type C; UVC</td></tr><tr><th colspan="2">Timecode</th><td>Yes,Timecode In; BNC</td></tr><tr><th colspan="2">PTP</th><td>Yes</td></tr><tr><th colspan="2">Audio Input</th><td>Yes; 3.5mm Stereo Audio In  and Balanced XLR In
2 channels, XLR Balanced Input (Mini XLR - Hirose Connector)
Sensitivity(MlC):-50 dBu (Manual volume center,-40dB to +20dB)
Sensitivity(LINE):+4 dBu (Manual volume center,-40dB to +20dB)
XLR Supply Voltage:48V DC
1 channel, Mic 3.5mm Stereo Input (Unbalanced, Plug-In Power Supported)
Sensitivity(MlC):-40 dBV volume center.-30dB to +15dB)
Sensitivity(LINE):-10 dBV (Manual volume center,-30dB to +
 3.5mm Supply Voltage:2.5V DC</td></tr><tr><th colspan="2">Audio Output</th><td>HDMI, SDI, USB-C (UVC), IP, MicroSD Card Recording</td></tr><tr><th colspan="2"> Audio S/N Ratio</th><td>≥85dB</td></tr><tr><th colspan="2"> Audio THD+N</th><td>≤0.05%</td></tr><tr><th colspan="2"> Audio Noise (RMS)</th><td>≤-90dB</td></tr><tr><th colspan="2">Tally Light </th><td>Yes, (Indoor/Outdoor Mode)</td></tr><tr><th colspan="2">LED Screen</th><td>Yes, 2 Inch AMOLED; 
Display: Camera Data (Camera ID, IP Address, Video Resolution/Framerate, IP Codec); Live View</td></tr><tr><th colspan="2">Power Indicator</th><td>Yes</td></tr><tr><th colspan="2">Local Recording</th><td>Yes; Supported Format: exFAT;
Storage Type: MicroSD (SDHC: 2GB to 32GB; SDXC: 32GB to 2TB; SDUC: 2TB to 128TB)</td></tr><tr><th colspan="2">System Firmware Upgrade</th><td>Update via IP</td></tr><tr><th colspan="2">Power Connector Type</th><td>Power：DC 12V~ 36V</td></tr><tr><th colspan="2">Environmental</th><td>PoE: RJ45, PoE++ (IEEE802.3bt, Type 4 Class8)</td></tr><tr><th colspan="2">Power Output</th><td>Yes, 12V 2A</td></tr><tr><th colspan="2">Wireless Connection</th><td>Yes, WiFi-6, 802.11ax, 2.4G/5G, Built-in Antenna</td></tr><tr><th colspan="2">Control Interface</th><td>RS422 via AUX Port; IP Control via RJ45, IR Remote Controller via IR Receiver </td></tr><tr><th colspan="2">Control Protocol</th><td>IP Control: VISCA Over IP, ONVIF, NDI; 
Serial Control: VISCA, PELCO P/D; </td></tr>
										</tbody>
									</table>
								</div><div class="tab-pane fade " id="tab--hdmi-video-signal-system-839" role="tabpanel" aria-labelledby="tab-header--hdmi-video-signal-system-839">
									<table class="table table-bordered table-striped table-hover">
										<tbody>
											<tr><th colspan="2">HDMI Video Format</th><td>2160P60*, 2160P59.94, 2160P50, 160P30, 2160P29.97, 2160P25, 2160P24, 2160P23.98, 1080P60, 1080P59.94, 1080P50, 1080P30, 1080P29.97, 1080P24, 1080P25, 1080P23.98, 1080I60, 1080I59.94, 1080I50, 720P60, 720P59.94, 720P50</td></tr><tr><th colspan="2">Color Precision</th><td>12bit(YUV4:2:2) 8bit(RGB)</td></tr><tr><th colspan="2">Color Space</th><td>YUV, RGB</td></tr><tr><th colspan="2">OSD Menu Display</th><td>Yes</td></tr><tr><th colspan="2">On-Screen Title</th><td>Yes;On-Screen Title Character Generator embedded with video</td></tr><tr><th colspan="2">True Multi Output</th><td>IP and HDMI signal can be output with different format</td></tr>
										</tbody>
									</table>
								</div><div class="tab-pane fade " id="tab--sdi-signal-format-839" role="tabpanel" aria-labelledby="tab-header--sdi-signal-format-839">
									<table class="table table-bordered table-striped table-hover">
										<tbody>
											<tr><th colspan="2">SDI Video Format</th><td>2160P60*, 2160P59.94, 2160P50, 2160P30, 2160P29.97, 2160P25, 2160P24, 2160P23.98, 1080P60, 1080P59.94, 1080P50, 1080P30, 1080P29.97, 1080P25, 1080P24, 1080P23.98, 1080I60, 1080I59.94, 1080I50, 720P60, 720P59.94, 720P50</td></tr><tr><th colspan="2">Color Precision</th><td>10bit(YUV), 4:2:2 </td></tr><tr><th colspan="2">Color Space</th><td>YUV</td></tr><tr><th colspan="2">Standard</th><td>12G-SDI: SMPTE: 424M/292M/296M/274M/ST-2081/ST-2082, 75Ω BNC</td></tr><tr><th colspan="2">True Multi Output</th><td>IP and SDI signal can be output with different format</td></tr><tr><th colspan="2">OSD Menu Display</th><td>Yes</td></tr><tr><th colspan="2">On-Screen Title</th><td>Yes;On-Screen Title Character Generator embedded with video</td></tr>
										</tbody>
									</table>
								</div><div class="tab-pane fade " id="tab--usb-signal-format-839" role="tabpanel" aria-labelledby="tab-header--usb-signal-format-839">
									<table class="table table-bordered table-striped table-hover">
										<tbody>
											<tr><th colspan="2">USB Port</th><td>USB3.0,Type C</td></tr><tr><th colspan="2">Compatible Integration</th><td>UVC, UAC</td></tr><tr><th colspan="2">Encoder</th><td>MJPEG, H.264, YUV2</td></tr><tr><th colspan="2">USB Video Format</th><td>H.264/MJPEG: (3840x2160, 1920×1080,1280X720, 800*600, 704*576, 640X480, 320X240) 50/60/25/30fps 
YUV2: 3840X2160 15fps
(1920X1080, 1280X720, 800*600, 704*576, 640X480, 320X240) 50/60/25/30fps </td></tr>
										</tbody>
									</table>
								</div><div class="tab-pane fade " id="tab--network-839" role="tabpanel" aria-labelledby="tab-header--network-839">
									<table class="table table-bordered table-striped table-hover">
										<tbody>
											<tr><th colspan="2">Encode</th><td>FPGA</td></tr><tr><th colspan="2">Video Compression</th><td>H.264/H.265 by FPGA, NDI HX3</td></tr><tr><th colspan="2">IP Resolution/Frame Rate </th><td>Main Stream:
3840 x 2160p/59.94/60/50/29.97/30/25/24
1920 x 1080p/59.94/60/50/29.97/30/25/24
1920 x 1080i/59.94/60/50
1280 x 720p/59.94/60/50
Second Stream:
704x576, 640x480, 640x360, 576x480, 352x228</td></tr><tr><th colspan="2">True Dual Output</th><td>IP and SDI signal can be output with different format</td></tr><tr><th colspan="2">IP Protocols</th><td>TCP/IP, IGMP, ICMP, ARP, QoS, SNMP, UDP, HTTP, DNS, DHCP, FTP, NTP, UPNP, SRT</td></tr><tr><th colspan="2">Application Protocols</th><td>RTMP, RTSP, RTP Streaming (Unicast, Multicast),MPEG-TS over UDP, MPEG-TS over RTP, NDI HX3</td></tr><tr><th colspan="2">Multi-stream</th><td>2 stream(8 users)</td></tr><tr><th colspan="2">Audio  Compression</th><td>AAC-LC
Broadband Audio Encoding(Duplex Communicate Supported, Audio/Video synchronization)</td></tr><tr><th colspan="2">Audio-Video Synchronization</th><td>Factory calibrated for less than 1 frame of delay between audio and video
Audio delay adjustable in web UI</td></tr><tr><th colspan="2">OSD</th><td>Yes (Customized OSD,with image insert)</td></tr><tr><th colspan="2">Control Protocol</th><td>ONVIF2.4 (Profile T), VISCA Over IP, NDI, Bolin API 2.0, CGI</td></tr><tr><th colspan="2">UltraFine Control</th><td>Yes; Supports up to 255 steps of VISCA for granular control</td></tr><tr><th colspan="1" rowspan="2">Bandwidth ( results may vary depending on network configuration and management
settings.)</th><th colspan="1">RTSP</th><td>128-60000kbps，By Default 3840x2160(H.264) 16384kbps；3840x2160(H.265) 8192kbps</td></tr><tr><th colspan="1">NDI HX3</th><td>NDI HX3: By Default (H.264) 3840x2160  112640kbps;  (H.265) 3840x2160 86016kbps</td></tr><tr><th colspan="2">Latency (Overall latency may increase depending on network configurations)</th><td>Mandatory ≤ 100ms for NDI HX3 Certification</td></tr><tr><th colspan="2">Browser Support</th><td>Cross Browser Compatibility - HTML5 support for Microsoft Edge, Google Chrome, Firefox, and Safari</td></tr><tr><th colspan="2">RTSP URL</th><td>Main Stream: rtsp://username:password@IP:port/media/video1 
2nd Stream: rtsp://username:password@IP:port/media/video2</td></tr>
										</tbody>
									</table>
								</div><div class="tab-pane fade " id="tab--general-839" role="tabpanel" aria-labelledby="tab-header--general-839">
									<table class="table table-bordered table-striped table-hover">
										<tbody>
											<tr><th colspan="2">Operating Temperature</th><td>-40°C to +60°C / -40°F to 140°F</td></tr><tr><th colspan="2">Operating Humidity </th><td>100% Suitable for Use</td></tr><tr><th colspan="2">Power Input</th><td> DC 12V~36V, PoE++(Compatible with IEEE802.3bt Type 4  Calss8)</td></tr><tr><th colspan="2">Power Consumption</th><td>Min 32W; Max 78W</td></tr><tr><th colspan="2">Installation Method</th><td>Tripod, Upright, Pendent</td></tr><tr><th colspan="2">Mount</th><td>Ceiling mount, Wall mount, Tripod; 2x1/4"-20  2x3/8“-16 threads on the rear handle</td></tr><tr><th colspan="2">Handle</th><td>Yes, Removable</td></tr><tr><th colspan="2">Screw Hole for Tripod</th><td> 3/8" + 1/4”  </td></tr><tr><th colspan="2">Body Color</th><td>Black</td></tr><tr><th colspan="2">Dimension</th><td>168x226x256mm  (WxHxD)</td></tr><tr><th colspan="2">Weight  (Net weight)</th><td>5.15kg/11.4lbs</td></tr><tr><th colspan="2">Weight  (Mass weight)</th><td>7.8kg/17.2lbs</td></tr><tr><th colspan="2">Accessories Included</th><td>Carrying Case x1, Power adapter x1, Power Cord x3 (UK, EU, US), Instant Rain Cover x1, Waterproof Cover for Permanent Mount x1, Waterproof Plug x6, Protection Cover x1, IR Remote Control x1, Installation Secure Lock x1; Thank You Card x1</td></tr><tr><th colspan="2">Accessories Optional</th><td>Indoor Wall Mount (C-WM3B), Upright Mount (QR-BM), Wall Mount (ES-WM), Ceiling Mount (EX-CMK)</td></tr><tr><th colspan="2">Certificates</th><td>CE, FCC,IC,UKCA,UL,CCC,ROHS,WEEE</td></tr>
										</tbody>
									</table>
								</div>
								<button class="btn load-more" style=""><i class="far fa-chevron-double-down"></i></button>
							</div>
						</div>
				</div>				</div>
				</div>
					</div>
		</div>
					</div>
		</section>
					</div>
		</div>
					</div>
		</section>
				</div>
		</div>

			</div>
			</div>
	</main><!-- #main -->

		<footer data-elementor-type="footer" data-elementor-id="193" class="elementor elementor-193 elementor-location-footer" data-elementor-post-type="elementor_library">
					
				</footer>
		
<script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"/*"},{"not":{"href_matches":["/wp-*.php","/wp-admin/*","/wp-content/uploads/*","/wp-content/*","/wp-content/plugins/*","/wp-content/themes/bolintechnology/*","/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
			<script>
				const lazyloadRunObserver = () => {
					const lazyloadBackgrounds = document.querySelectorAll( `.e-con.e-parent:not(.e-lazyloaded)` );
					const lazyloadBackgroundObserver = new IntersectionObserver( ( entries ) => {
						entries.forEach( ( entry ) => {
							if ( entry.isIntersecting ) {
								let lazyloadBackground = entry.target;
								if( lazyloadBackground ) {
									lazyloadBackground.classList.add( 'e-lazyloaded' );
								}
								lazyloadBackgroundObserver.unobserve( entry.target );
							}
						});
					}, { rootMargin: '200px 0px 200px 0px' } );
					lazyloadBackgrounds.forEach( ( lazyloadBackground ) => {
						lazyloadBackgroundObserver.observe( lazyloadBackground );
					} );
				};
				const events = [
					'DOMContentLoaded',
					'elementor/lazyload/observe',
				];
				events.forEach( ( event ) => {
					document.addEventListener( event, lazyloadRunObserver );
				} );
			</script>
				<script>
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	<link rel="stylesheet" id="wc-blocks-style-css" href="https://bolintechnology.com/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks.css?ver=wc-10.7.0" media="all">
<script id="site_tracking-js-extra">
var php_data = {"ac_settings":{"tracking_actid":25977180,"site_tracking_default":1,"site_tracking":1},"user_email":""};
//# sourceURL=site_tracking-js-extra
</script>
<script src="https://bolintechnology.com/wp-content/plugins/activecampaign-subscription-forms/site_tracking.js?ver=6.9.4" id="site_tracking-js"></script>
<script src="https://bolintechnology.com/wp-includes/js/comment-reply.min.js?ver=6.9.4" id="comment-reply-js" async="" data-wp-strategy="async" fetchpriority="low"></script>
<script src="https://bolintechnology.com/wp-content/themes/bolintechnology/assets/js/frontend/customizer.js?ver=1776469394" id="bolintechnology_customizer-js"></script>
<script id="bolintechnology_fontend_ajax-js-extra">
var myAjax = {"ajaxurl":"https://bolintechnology.com/wp-admin/admin-ajax.php"};
//# sourceURL=bolintechnology_fontend_ajax-js-extra
</script>
<script src="https://bolintechnology.com/wp-content/themes/bolintechnology/assets/js/frontend/ajax.js?ver=1755363284" id="bolintechnology_fontend_ajax-js"></script>
<script src="https://bolintechnology.com/wp-content/themes/bolintechnology/assets/mdb-pro/mdb.min.js?ver=1681545890" id="bolintechnology_mdb_pro-js"></script>
<script src="https://bolintechnology.com/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.35.9" id="elementor-webpack-runtime-js"></script>
<script src="https://bolintechnology.com/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.35.9" id="elementor-frontend-modules-js"></script>
<script src="https://bolintechnology.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3" id="jquery-ui-core-js"></script>
<script id="elementor-frontend-js-before">
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close","a11yCarouselPrevSlideMessage":"Previous slide","a11yCarouselNextSlideMessage":"Next slide","a11yCarouselFirstSlideMessage":"This is the first slide","a11yCarouselLastSlideMessage":"This is the last slide","a11yCarouselPaginationBulletMessage":"Go to slide"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":993,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":992,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":true},"laptop":{"label":"Laptop","value":1320,"default_value":1366,"direction":"max","is_enabled":true},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}},"hasCustomBreakpoints":true},"version":"3.35.9","is_static":false,"experimentalFeatures":{"additional_custom_breakpoints":true,"theme_builder_v2":true,"home_screen":true,"global_classes_should_enforce_capabilities":true,"e_variables":true,"cloud-library":true,"e_opt_in_v4_page":true,"e_components":true,"e_interactions":true,"e_editor_one":true,"import-export-customization":true,"e_pro_variables":true},"urls":{"assets":"https:\/\/bolintechnology.com\/wp-content\/plugins\/elementor\/assets\/","ajaxurl":"https:\/\/bolintechnology.com\/wp-admin\/admin-ajax.php","uploadUrl":"https:\/\/bolintechnology.com\/wp-content\/uploads"},"nonces":{"floatingButtonsClickTracking":"09008a2bd1"},"swiperClass":"swiper","settings":{"page":[],"editorPreferences":[]},"kit":{"active_breakpoints":["viewport_mobile","viewport_tablet","viewport_tablet_extra","viewport_laptop"],"viewport_tablet":992,"viewport_laptop":1320,"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","woocommerce_notices_elements":[]},"post":{"id":47240,"title":"Range%20PTZ%20Camera%20%7C%20Indoor%20%26%20Outdoor%20Professional%20PTZ","excerpt":"Bolin's Range PTZ camera is designed to capture professional video in places traditional PTZ cameras cannot easily reach. Built as an anywhere camera, Range combines the portability of a compact production camera with the durability needed for challenging environments. From sports venues and live events to houses of worship, theatres, and corporate productions, Range delivers reliable performance wherever production needs to go.","featuredImage":"https:\/\/bolintechnology.com\/wp-content\/uploads\/2023\/08\/Bolin-Range-PTZ-Camera-1.1.webp"}};
//# sourceURL=elementor-frontend-js-before
</script>
<script src="https://bolintechnology.com/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.35.9" id="elementor-frontend-js"></script><span id="elementor-device-mode" class="elementor-screen-only"></span><span id="elementor-device-mode" class="elementor-screen-only"></span>
<script src="https://bolintechnology.com/wp-includes/js/imagesloaded.min.js?ver=5.0.0" id="imagesloaded-js"></script>
<script src="https://bolintechnology.com/wp-content/plugins/elementor/assets/lib/swiper/v8/swiper.min.js?ver=8.4.5" id="swiper-js"></script>
<script src="https://bolintechnology.com/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js?ver=10.7.0" id="sourcebuster-js-js"></script>
<script id="wc-order-attribution-js-extra">
var wc_order_attribution = {"params":{"lifetime":1.0000000000000000818030539140313095458623138256371021270751953125e-5,"session":30,"base64":false,"ajaxurl":"https://bolintechnology.com/wp-admin/admin-ajax.php","prefix":"wc_order_attribution_","allowTracking":true},"fields":{"source_type":"current.typ","referrer":"current_add.rf","utm_campaign":"current.cmp","utm_source":"current.src","utm_medium":"current.mdm","utm_content":"current.cnt","utm_id":"current.id","utm_term":"current.trm","utm_source_platform":"current.plt","utm_creative_format":"current.fmt","utm_marketing_tactic":"current.tct","session_entry":"current_add.ep","session_start_time":"current_add.fd","session_pages":"session.pgs","session_count":"udata.vst","user_agent":"udata.uag"}};
//# sourceURL=wc-order-attribution-js-extra
</script>
<script src="https://bolintechnology.com/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js?ver=10.7.0" id="wc-order-attribution-js"></script>
<script id="my-elementor-safe-fix-js-after">
jQuery(window).on('elementor/frontend/init', function(){

                function waitForAnchors(){

                    if (
                        typeof elementorFrontend !== 'undefined' &&
                        elementorFrontend.utils &&
                        elementorFrontend.utils.anchors
                    ){
                        elementorFrontend.utils.anchors.setSettings(
                            'selectors.targets',
                            '.dummy-selector'
                        );
                    } else {
                        requestAnimationFrame(waitForAnchors);
                    }
                }

                waitForAnchors();

            });
        
//# sourceURL=my-elementor-safe-fix-js-after
</script>
<script id="gt_widget_script_46798112-js-before">
window.gtranslateSettings = /* document.write */ window.gtranslateSettings || {};window.gtranslateSettings['46798112'] = {"default_language":"en","languages":["zh-CN","en","fr","de","it","ja","ko","pt","ru","es"],"url_structure":"none","flag_style":"2d","flag_size":24,"wrapper_selector":"#gt-wrapper-46798112","alt_flags":{"en":"usa"},"switcher_open_direction":"top","switcher_horizontal_position":"inline","switcher_text_color":"#666","switcher_arrow_color":"#666","switcher_border_color":"#ccc","switcher_background_color":"#fff","switcher_background_shadow_color":"#efefef","switcher_background_hover_color":"#fff","dropdown_text_color":"#000","dropdown_hover_color":"#fff","dropdown_background_color":"#eee","custom_css":".elementor-widget-shortcode .gtranslate_wrapper .gt_switcher .gt_option {\r\n\tposition: absolute;\r\n\ttop: 100%;\r\n\theight: auto!important;\r\n\tmax-width: 100%;\r\n\tborder: none;\r\n\tbackground-color: white;\r\n}\r\n.elementor-widget-shortcode .gtranslate_wrapper .gt_switcher .gt_selected a {\r\n\twidth: auto;\r\n\tborder: none;\r\n}\r\n.elementor-widget-shortcode .gtranslate_wrapper .gt_switcher .nturl {\r\n\tborder-bottom: 1px solid #f0f0f0;\r\n}\r\n.elementor-widget-shortcode .gtranslate_wrapper .gt_switcher {\r\n\twidth: 35px;\r\n}\r\n.elementor-widget-shortcode .gtranslate_wrapper .gt_switcher .gt_selected a,\r\n.elementor-widget-shortcode .gtranslate_wrapper .gt_switcher .nturl {\r\n\tfont-size: 0;\r\n\tbackground: none;\r\n\tbox-shadow: none;\r\n}\r\n.elementor-widget-shortcode .gtranslate_wrapper .gt_switcher .gt_selected {\r\n\tbackground: none;\r\n}\r\n.elementor-widget-shortcode .gtranslate_wrapper .gt_switcher .gt_selected a:after {\r\n\tdisplay: none;\r\n}\r\n.elementor-widget-shortcode .gtranslate_wrapper .gt_option::-webkit-scrollbar {\r\n    width: 3px;\r\n}"};
//# sourceURL=gt_widget_script_46798112-js-before
</script><script src="https://cdn.gtranslate.net/widgets/latest/dwf.js?ver=6.9.4" data-no-optimize="1" data-no-minify="1" data-gt-orig-url="/product/range-ptz-camera-all-weather-indoor-outdoor-professional-ptz" data-gt-orig-domain="bolintechnology.com" data-gt-widget-id="46798112" defer=""></script><script id="wc-single-product-js-extra">
var wc_single_product_params = {"i18n_required_rating_text":"Please select a rating","i18n_rating_options":["1 of 5 stars","2 of 5 stars","3 of 5 stars","4 of 5 stars","5 of 5 stars"],"i18n_product_gallery_trigger_text":"View full-screen image gallery","review_rating_required":"yes","flexslider":{"rtl":false,"animation":"slide","smoothHeight":true,"directionNav":false,"controlNav":"thumbnails","slideshow":false,"animationSpeed":500,"animationLoop":false,"allowOneSlide":false},"zoom_enabled":"1","zoom_options":[],"photoswipe_enabled":"1","photoswipe_options":{"shareEl":false,"closeOnScroll":false,"history":false,"hideAnimationDuration":0,"showAnimationDuration":0},"flexslider_enabled":"1"};
//# sourceURL=wc-single-product-js-extra
</script>
<script src="https://bolintechnology.com/wp-content/plugins/woocommerce/assets/js/frontend/single-product.min.js?ver=10.7.0" id="wc-single-product-js" defer="" data-wp-strategy="defer"></script>
<script src="https://bolintechnology.com/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.35.1" id="elementor-pro-webpack-runtime-js"></script>
<script src="https://bolintechnology.com/wp-includes/js/dist/hooks.min.js?ver=dd5603f07f9220ed27f1" id="wp-hooks-js"></script>
<script src="https://bolintechnology.com/wp-includes/js/dist/i18n.min.js?ver=c26c3dc7bed366793375" id="wp-i18n-js"></script>
<script id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
//# sourceURL=wp-i18n-js-after
</script>
<script id="elementor-pro-frontend-js-before">
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/bolintechnology.com\/wp-admin\/admin-ajax.php","nonce":"234abfbf75","urls":{"assets":"https:\/\/bolintechnology.com\/wp-content\/plugins\/elementor-pro\/assets\/","rest":"https:\/\/bolintechnology.com\/api\/"},"settings":{"lazy_load_background_images":true},"popup":{"hasPopUps":false},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"},"x-twitter":{"title":"X"},"threads":{"title":"Threads"}},"woocommerce":{"menu_cart":{"cart_page_url":"https:\/\/bolintechnology.com\/?page_id=12","checkout_page_url":"https:\/\/bolintechnology.com\/?page_id=13","fragments_nonce":"2ab9fad2f7"}},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/bolintechnology.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}};
//# sourceURL=elementor-pro-frontend-js-before
</script>
<script src="https://bolintechnology.com/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.35.1" id="elementor-pro-frontend-js"></script>
<script src="https://bolintechnology.com/wp-content/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.35.1" id="pro-elements-handlers-js"></script><svg style="display: none;" class="e-font-icon-svg-symbols"></svg><svg style="display: none;" class="e-font-icon-svg-symbols"></svg>
<script src="https://bolintechnology.com/wp-content/plugins/bolin-elementor-widget-pro/assets/js//frontend/mdb/ecommerce-gallery.min.js?ver=1.1.9" id="product-gallery-js"></script><div class="lightbox-gallery" id="lightbox-r8iw0251d"><div class="lightbox-gallery-loader"><div class="spinner-grow text-light" role="status"><span class="sr-only">Loading...</span></div></div><div class="lightbox-gallery-toolbar"><div class="lightbox-gallery-left-tools"><p class="lightbox-gallery-counter"></p></div><div class="lightbox-gallery-right-tools"><button class="lightbox-gallery-fullscreen-btn" aria-label="Toggle fullscreen"></button><button class="lightbox-gallery-zoom-btn" aria-label="Zoom in"></button><button class="lightbox-gallery-close-btn" aria-label="Close"></button></div></div><div class="lightbox-gallery-content"></div><div class="lightbox-gallery-arrow-left"><button aria-label="Previous"></button></div><div class="lightbox-gallery-arrow-right"><button aria-label="Next"></button></div><div class="lightbox-gallery-caption-wrapper"><p class="lightbox-gallery-caption"></p></div></div><div class="lightbox-gallery" id="lightbox-euiholwfs"><div class="lightbox-gallery-loader"><div class="spinner-grow text-light" role="status"><span class="sr-only">Loading...</span></div></div><div class="lightbox-gallery-toolbar"><div class="lightbox-gallery-left-tools"><p class="lightbox-gallery-counter"></p></div><div class="lightbox-gallery-right-tools"><button class="lightbox-gallery-fullscreen-btn" aria-label="Toggle fullscreen"></button><button class="lightbox-gallery-zoom-btn" aria-label="Zoom in"></button><button class="lightbox-gallery-close-btn" aria-label="Close"></button></div></div><div class="lightbox-gallery-content"></div><div class="lightbox-gallery-arrow-left"><button aria-label="Previous"></button></div><div class="lightbox-gallery-arrow-right"><button aria-label="Next"></button></div><div class="lightbox-gallery-caption-wrapper"><p class="lightbox-gallery-caption"></p></div></div>
<script src="https://bolintechnology.com/wp-content/plugins/bolin-elementor-widget-pro/assets/js//frontend/icon-box-pro.js?ver=1774975680" id="icon-box-pro-js"></script>
<script src="https://cdn.babylonjs.com/babylon.js?ver=6.0.0" id="babylonjs-js"></script>
<script src="https://cdn.babylonjs.com/loaders/babylonjs.loaders.min.js?ver=6.0.0" id="babylonjs-loaders-js"></script>
<script src="https://bolintechnology.com/wp-content/plugins/bolin-elementor-widget-pro/assets/js//frontend/scene-viewer.js?ver=1776257642" id="scene-viewer-js"></script>
<script src="https://bolintechnology.com/wp-content/plugins/bolin-elementor-widget-pro/assets/js//frontend/sequential-video.js?ver=1775018845" id="sequential-video-js"></script>
<script src="https://bolintechnology.com/wp-content/plugins/bolin-elementor-widget-pro/assets/js//frontend/circular-slider.js?ver=1775595735" id="circular-slider-js"></script>
<script src="https://bolintechnology.com/wp-content/plugins/bolin-elementor-widget-pro/assets/js//frontend/overlay-images-switcher.js?ver=1775751866" id="overlay-images-switcher-js"></script>
<script id="bolintech-widgets-js-extra">
var adminAjax = {"ajaxurl":"https://bolintechnology.com/wp-admin/admin-ajax.php"};
var adminAjax = {"ajaxurl":"https://bolintechnology.com/wp-admin/admin-ajax.php"};
//# sourceURL=bolintech-widgets-js-extra
</script>
<script src="https://bolintechnology.com/wp-content/plugins/bolin-elementor-widget-pro/assets/js/frontend/bolintech.js?ver=1681545902" id="bolintech-widgets-js"></script>
<script src="https://bolintechnology.com/wp-content/plugins/bolin-elementor-widget-pro/assets/js//frontend/advanced-nav.js?ver=1.1.9" id="advanced-nav-js"></script>
<script src="https://bolintechnology.com/wp-content/plugins/bolin-elementor-widget-pro/assets/js/src/frontend/widgets.js?ver=1776240356" id="materializor-widgets-js"></script>
<script id="wp-emoji-settings" type="application/json">
{"baseUrl":"https://s.w.org/images/core/emoji/17.0.2/72x72/","ext":".png","svgUrl":"https://s.w.org/images/core/emoji/17.0.2/svg/","svgExt":".svg","source":{"concatemoji":"https://bolintechnology.com/wp-includes/js/wp-emoji-release.min.js?ver=6.9.4"}}
</script>
<script type="module">
/*! This file is auto-generated */
const a=JSON.parse(document.getElementById("wp-emoji-settings").textContent),o=(window._wpemojiSettings=a,"wpEmojiSettingsSupports"),s=["flag","emoji"];function i(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function c(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data);e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0);const a=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data);return t.every((e,t)=>e===a[t])}function p(e,t){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var n=e.getImageData(16,16,1,1);for(let e=0;e<n.data.length;e++)if(0!==n.data[e])return!1;return!0}function u(e,t,n,a){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\udde8\ud83c\uddf6","\ud83c\udde8\u200b\ud83c\uddf6")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!a(e,"\ud83e\u1fac8")}return!1}function f(e,t,n,a){let r;const o=(r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):document.createElement("canvas")).getContext("2d",{willReadFrequently:!0}),s=(o.textBaseline="top",o.font="600 32px Arial",{});return e.forEach(e=>{s[e]=t(o,e,n,a)}),s}function r(e){var t=document.createElement("script");t.src=e,t.defer=!0,document.head.appendChild(t)}a.supports={everything:!0,everythingExceptFlag:!0},new Promise(t=>{let n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),c.toString(),p.toString()].join(",")+"));",a=new Blob([e],{type:"text/javascript"});const r=new Worker(URL.createObjectURL(a),{name:"wpTestEmojiSupports"});return void(r.onmessage=e=>{i(n=e.data),r.terminate(),t(n)})}catch(e){}i(n=f(s,u,c,p))}t(n)}).then(e=>{for(const n in e)a.supports[n]=e[n],a.supports.everything=a.supports.everything&&a.supports[n],"flag"!==n&&(a.supports.everythingExceptFlag=a.supports.everythingExceptFlag&&a.supports[n]);var t;a.supports.everythingExceptFlag=a.supports.everythingExceptFlag&&!a.supports.flag,a.supports.everything||((t=a.source||{}).concatemoji?r(t.concatemoji):t.wpemoji&&t.twemoji&&(r(t.twemoji),r(t.wpemoji)))});
//# sourceURL=https://bolintechnology.com/wp-includes/js/wp-emoji-loader.min.js
</script>



<div class="mobile-menu-overlay"></div><script src="https://bolintechnology.com/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.9.3"></script><script src="https://bolintechnology.com/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.35.9"></script><link rel="stylesheet" href="https://bolintechnology.com/wp-content/uploads/elementor/css/custom-lightbox.min.css?ver=3.35.9"><svg style="display: none;" class="e-font-icon-svg-symbols"></svg><whale-quicksearch translate="no" style="visibility: visible;"></whale-quicksearch><script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script><div id="goog-gt-tt" class="VIpgJd-yAWNEb-L7lbkb skiptranslate" style="border-radius: 12px; margin: 0 0 0 -23px; padding: 0; font-family: 'Google Sans', Arial, sans-serif;" data-id=""><div id="goog-gt-vt" class="VIpgJd-yAWNEb-hvhgNd"><div class="VIpgJd-yAWNEb-hvhgNd-Ud7fr"><img src="https://fonts.gstatic.com/s/i/productlogos/translate/v14/24px.svg" width="24" height="24" alt=""><div class=" VIpgJd-yAWNEb-hvhgNd-IuizWc-i3jM8c " dir="ltr">원본 텍스트</div></div><div class="VIpgJd-yAWNEb-hvhgNd-k77Iif"><div id="goog-gt-original-text" class="VIpgJd-yAWNEb-nVMfcd-fmcmS VIpgJd-yAWNEb-hvhgNd-axAV1"></div></div><div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid ltr"><div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid-B7I4Od ltr" dir="ltr"><div class="VIpgJd-yAWNEb-hvhgNd-UTujCb">번역 평가</div><div class="VIpgJd-yAWNEb-hvhgNd-eO9mKe">보내주신 의견은 Google 번역을 개선하는 데 사용됩니다.</div></div><div class="VIpgJd-yAWNEb-hvhgNd-xgov5 ltr"><button id="goog-gt-thumbUpButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="번역 품질 좋음" aria-label="번역 품질 좋음" aria-pressed="false"><span id="goog-gt-thumbUpIcon"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7H2v13h16c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM7 18H4V9h3v9zm14-7l-3 7H9V8l4.34-4.34L12 9h9v2z"></path></svg></span><span id="goog-gt-thumbUpIconFilled"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7v13h11c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM5 7H1v13h4V7z"></path></svg></span></button><button id="goog-gt-thumbDownButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="번역 품질 좋지 않음" aria-label="번역 품질 좋지 않음" aria-pressed="false"><span id="goog-gt-thumbDownIcon"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7h5V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zM17 6h3v9h-3V6zM3 13l3-7h9v10l-4.34 4.34L12 15H3v-2z"></path></svg></span><span id="goog-gt-thumbDownIconFilled"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zm16 0h4V4h-4v13z"></path></svg></span></button></div></div><div id="goog-gt-votingHiddenPane" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><form id="goog-gt-votingForm" action="//translate.googleapis.com/translate_voting?client=te" method="post" target="votingFrame" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><input type="text" name="sl" id="goog-gt-votingInputSrcLang"><input type="text" name="tl" id="goog-gt-votingInputTrgLang"><input type="text" name="query" id="goog-gt-votingInputSrcText"><input type="text" name="gtrans" id="goog-gt-votingInputTrgText"><input type="text" name="vote" id="goog-gt-votingInputVote"></form><iframe name="votingFrame" frameborder="0"></iframe></div></div></div><svg style="display: none;" class="e-font-icon-svg-symbols"></svg><div class="VIpgJd-ZVi9od-aZ2wEe-wOHMyf"><div class="VIpgJd-ZVi9od-aZ2wEe-OiiCO"><svg xmlns="http://www.w3.org/2000/svg" class="VIpgJd-ZVi9od-aZ2wEe" width="96px" height="96px" viewBox="0 0 66 66"><circle class="VIpgJd-ZVi9od-aZ2wEe-Jt5cK" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div></body><whale-quicksearch translate="no" style="visibility: visible;"></whale-quicksearch></html>