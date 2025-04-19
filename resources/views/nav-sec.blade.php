<!DOCTYPE html>
<html lang="en-US" class="no-js no-svg">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&amp;family=Open+Sans:ital,wght@0,300..800;1,300..800&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/ajax/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/libs.bundle.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/theme.bundle.css')}}">
    <script>
        (function (html) { html.className = html.className.replace(/\bno-js\b/, 'js') })(document.documentElement);
    </script>
    <title>CUT2STYLE</title>
    <meta name='robots' content='noindex, nofollow' />
    <style>
        img:is([sizes="auto" i], [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px
        }
    </style>
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link href='https://fonts.gstatic.com/' crossorigin rel='preconnect' />
    <link rel="alternate" type="application/rss+xml" title="CUT2STYLE &raquo; Feed"
        href="https://demo.cut2style.com/feed/" />
    <link rel="alternate" type="application/rss+xml" title="CUT2STYLE &raquo; Comments Feed"
        href="https://demo.cut2style.com/comments/feed/" />
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/demo.cut2style.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.7.2" } };
        /*! This file is auto-generated */
        !function (i, n) { var o, s, e; function c(e) { try { var t = { supportTests: e, timestamp: (new Date).valueOf() }; sessionStorage.setItem(o, JSON.stringify(t)) } catch (e) { } } function p(e, t, n) { e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0); var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data), r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data)); return t.every(function (e, t) { return e === r[t] }) } function u(e, t, n) { switch (t) { case "flag": return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"); case "emoji": return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b") }return !1 } function f(e, t, n) { var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"), a = r.getContext("2d", { willReadFrequently: !0 }), o = (a.textBaseline = "top", a.font = "600 32px Arial", {}); return e.forEach(function (e) { o[e] = t(a, e, n) }), o } function t(e) { var t = i.createElement("script"); t.src = e, t.defer = !0, i.head.appendChild(t) } "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = { everything: !0, everythingExceptFlag: !0 }, e = new Promise(function (e) { i.addEventListener("DOMContentLoaded", e, { once: !0 }) }), new Promise(function (t) { var n = function () { try { var e = JSON.parse(sessionStorage.getItem(o)); if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests } catch (e) { } return null }(); if (!n) { if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try { var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));", r = new Blob([e], { type: "text/javascript" }), a = new Worker(URL.createObjectURL(r), { name: "wpTestEmojiSupports" }); return void (a.onmessage = function (e) { c(n = e.data), a.terminate(), t(n) }) } catch (e) { } c(n = f(s, u, p)) } t(n) }).then(function (e) { for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]); n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function () { n.DOMReady = !0 } }).then(function () { return e }).then(function () { var e; n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji))) })) }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
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

        @media only screen and (max-width: 600px) {
            .gallery-cell {
                width: 100% !important;
            }

            .testimonial-quote {
                font-size: 13px;
            }

            .testimonial-author {
                font-size: 13px;
            }
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
        href='{{asset('web-assets/css/block-library/style.ver6.7.2.min.css')}}' type='text/css' media='all' />
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--font-family--inter: "Inter", sans-serif;
            --wp--preset--font-family--cardo: Cardo;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css'
        href='{{asset('web-assets/css/plugins/contact-form-7/styles.ver6.0.5.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'
        href='{{asset('web-assets/css/plugins/woocommerce/woocommerce-layout.ver9.7.1.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='{{asset('web-assets/css/plugins/woocommerce/woocommerce-smallscreen.ver9.7.1.css')}}' type='text/css'
        media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'
        href='{{asset('web-assets/css/plugins/woocommerce/woocommerce.ver9.7.1.css')}}' type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='brands-styles-css'
        href='{{asset('web-assets/css/plugins/woocommerce/brands.ver9.7.1.css')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='twentyseventeen-fonts-css'
        href='https://fonts.googleapis.com/css?family=Libre+Franklin%3A300%2C300i%2C400%2C400i%2C600%2C600i%2C800%2C800i&amp;subset=latin%2Clatin-ext'
        type='text/css' media='all' />
    <link rel='stylesheet' id='twentyseventeen-style-css' href='{{asset('web-assets/css/themes/style.ver6.7.2.css')}}'
        type='text/css' media='all' />
    <script type="text/javascript" src="{{asset('web-assets/js/jquery/jquery.ver3.7.1.min.js')}}"
        id="jquery-core-js"></script>
    <script type="text/javascript" src="{{asset('web-assets/js/jquery/jquery-migrate.ver3.4.1.min.js')}}"
        id="jquery-migrate-js"></script>
    <script type="text/javascript" src="{{asset('web-assets/js/jquery/jquery.blockUI.ver2.7.0-wc.9.7.1.min.js')}}"
        id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="{{asset('web-assets/js/js.cookie.ver2.1.4-wc.9.7.1.min.js')}}" id="js-cookie-js"
        defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%", "i18n_password_show": "Show password", "i18n_password_hide": "Hide password" };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{asset('web-assets/js/plugins/woocommerce/woocommerce.ver9.7.1.min.js')}}"
        id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
    <link rel="canonical" href="https://demo.cut2style.com/" />
    <link rel='shortlink' href='https://demo.cut2style.com/' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="https://demo.cut2style.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.cut2style.com%2F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="https://demo.cut2style.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.cut2style.com%2F&amp;format=xml" />
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <style class='wp-fonts-local' type='text/css'>
        @font-face {
            font-family: Inter;
            font-style: normal;
            font-weight: 300 900;
            font-display: fallback;
            src: url('{{asset('assets/fonts/Inter-VariableFont_slnt,wght.woff2')}}') format('woff2');
            font-stretch: normal;
        }

        @font-face {
            font-family: Cardo;
            font-style: normal;
            font-weight: 400;
            font-display: fallback;
            src: url('{{asset('assets/fonts/cardo_normal_400.woff2')}}') format('woff2');
        }
    </style>
    <link rel="icon" href="{{asset('assets/images/favicon/cropped-fevicon-32x32.png')}}" sizes="32x32" />
    <link rel="icon" href="{{asset('assets/images/favicon/cropped-fevicon-192x192.png')}}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{asset('assets/images/favicon/cropped-fevicon-180x180.png')}}" />
    <meta name="msapplication-TileImage" content="{{asset('assets/images/favicon/cropped-fevicon-270x270.png')}}" />
    <style>
        .gallery-cell {
            width: 50%;
            padding: 0px 2rem;
        }

        .testimonial {
            text-align: center;
            max-width: 850px;
            margin: 50px auto 50px auto;
            padding: 0 20px;
        }

        .testimonial-avatar {
            width: 100px;
            border-radius: 50%;
        }

        .testimonial-quote {
            display: block;
            font-size: 18px;
            font-weight: 300;
            padding: 10px 0;
        }

        .main-gallery {
            min-height: 310px;
            height: 310px;
        }

        .testimonial-author {
            display: block;
            font-weight: 800;
            color: #000;
        }

        .flickity-page-dots {
            bottom: 25px;
        }

        .flickity-page-dots .dot.is-selected {
            background: #7AA641;
        }

        .card-body.text-center a {
            background: #000;
            color: #fff !important;
            padding: 7px 20px;
            font-size: 16px;
            border-radius: 20px;
        }

        .text-gray-700 {
            color: #000 !important;
            font-size: 20px !important;
            height: 65px;
        }

        .col-12.col-md-3.aos-init.aos-animate.text-center {
            width: 14.2%;
            text-align: left !important;
        }

        .col-12.col-md-3.aos-init.aos-animate.text-center h3 {
            font-size: 15px;
        }

        #prosbee .card-body.text-center {
            padding: 10px;
        }

        .img-fluid.mb-5.w-100.mx-auto img {
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3);
            padding: 5px;
        }

        .p-3.d-flex div span {
            display: inline-block;
            width: 100%;
            font-size: 20px;
            font-weight: 500;
        }

        .fs-xs.dis {
            height: 0px !important;
            padding: 0px !important;
            margin: 0px !important;
            line-height: 0px;
        }

        .icon.icon-shape.rounded-circle.bg-warning.text-white.mr-4 {
            margin-right: 12px;
            width: 75px;
            height: 75px;
            padding: 10px 0px;
        }

        .fs-xs.dis a {
            font-size: 14px;
            padding: 0px !important;
            margin: 0px !important;
            color: #090909;
        }


        @keyframes slide1 {

            0%,
            100% {
                transform: translate(0, -10px);
            }

            50% {
                transform: translate(0, 10px);
            }
        }

        .arrow1 {
            animation: slide1 1s ease-in-out infinite;
        }

        .demo-wrap:before {
            content: ' ';
            display: block;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            opacity: 0.3;
            background-image: url("{{asset('assets/images/banner-bg.png')}}");
            background-repeat: no-repeat;
            background-position: 50% 0;
            background-size: cover;
            margin-top: 6rem;
        }

        .flickity-prev-next-button {
            background-color: #000 !important;
        }

        .flickity-viewport {
            overflow: hidden !important;
        }

        #app-logo {
            border: 1px solid #444444;
            border-radius: 5px;
            padding: 5px;
            width: 190px;
        }
    </style>
</head>

<body
    class="home page-template page-template-home-template page-template-home-template-php page page-id-6 theme-alphax woocommerce-no-js twentyseventeen-front-page has-header-image page-two-column colors-light">

    <!-- Navbar -->
    @include('partials.navbar')

    <style>
        h2.wp-block-heading strong {

            font-size: 20px;
            font-weight: 500;
            font-family: 'Arial Mdm' !important;
        }
    </style>
    <section class="py-6 py-md-6" style="background: #fff;">
        <div class="container">
            <div class="row justify-content-center py-4">
                <div class="col-12  text-left">

                    <!-- Headin -->
                    <h1 class="display-6 ftwe-500 text-capitalize" style="color: #1c1c1c;font-size: 20px;">
                        Welcome to C<span class="two">2</span>S
                    </h1>
                </div>
            </div>

            <div class="row contentss" id="textrepalced ">
                <p class="has-text-align-center"><strong>"Quality & Value at Your Fingertip"</strong></p>

                <p>Welcome to the C<span class="two">2</span>S a versatile Beauty &amp; Wellness platform designed to
                    cater to your needs wherever you are. With a focus on convenience and direct interaction with
                    professionals, C<span class="two">2</span>S aims to streamline the process of accessing beauty and
                    wellness services. The added benefit of instant Loyalty Rewards enhances the appeal for those who
                    value both quality and affordability. It's a modern solution for those who prioritize their time and
                    well-being, offering a personalized experience in the comfort of their preferred location.</p>

                <p>The C<span class="two">2</span>S also connects you with suppliers worldwide, allowing you to shop for
                    your favorite products at affordable prices while instantly earning rewards.</p>

                <p>Join C<span class="two">2</span>S today and experience the difference, please click <a
                        href="#">here</a>.</p>
            </div>
            <div class="row justify-content-center pb-5">
                <div class="col-12 col-md-12 col-lg-12 text-center">
                    <span class="mt-2 mb-5 mb-md-3 taglinsefooter">
                        <img alt="bee lof of C2S" class="beepic"
                            src="{{asset('assets/images/bee.png')}}">
                            YOUR HOME, WELLNESS & BEAUTY IS OUR DUTY
                            <sup style="font-weight: 100;font-size: 10px;top: -1.1em;color:#000;font-family: 'Arial Rounded MT Bold';">TM</sup>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('partials.footer')

    <script type='text/javascript'>
        (function () {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <link rel='stylesheet' id='wc-blocks-style-css'
        href='{{asset('web-assets/css/plugins/woocommerce/wc-blocks.verwc-9.7.1.css')}}' type='text/css' media='all' />
    <script type="text/javascript" src="{{asset('web-assets/js/hooks.min.js')}}" id="wp-hooks-js"></script>
    <script type="text/javascript" src="{{asset('web-assets/js/i18n.min.js')}}" id="wp-i18n-js"></script>
    <script type="text/javascript" id="wp-i18n-js-after">
        /* <![CDATA[ */
        wp.i18n.setLocaleData({ 'text direction\u0004ltr': ['ltr'] });
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{asset('web-assets/js/plugins/contact-form-7/swv/index.ver6.0.5.js')}}"
        id="swv-js"></script>
    <script type="text/javascript" id="contact-form-7-js-before">
        /* <![CDATA[ */
        var wpcf7 = {
            "api": {
                "root": "https:\/\/demo.cut2style.com\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            }
        };
        /* ]]> */
    </script>
    <script type="text/javascript" src="{{asset('web-assets/js/plugins/contact-form-7/index.ver6.0.5.js')}}"
        id="contact-form-7-js"></script>
    <script type="text/javascript" id="rtrar.appLocal-js-extra">
        /* <![CDATA[ */
        var rtafr = { "rules": "" };
        /* ]]> */
    </script>
    <script type="text/javascript" id="twentyseventeen-skip-link-focus-fix-js-extra">
        /* <![CDATA[ */
        var twentyseventeenScreenReaderText = { "quote": "<svg class=\"icon icon-quote-right\" aria-hidden=\"true\" role=\"img\"> <use href=\"#icon-quote-right\" xlink:href=\"#icon-quote-right\"><\/use> <\/svg>" };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{asset('web-assets/js/plugins/woocommerce/sourcebuster/sourcebuster.ver9.7.1.min.js')}}"
        id="sourcebuster-js-js"></script>
    <script type="text/javascript" id="wc-order-attribution-js-extra">
        /* <![CDATA[ */
        var wc_order_attribution = { "params": { "lifetime": 1.0000000000000000818030539140313095458623138256371021270751953125e-5, "session": 30, "base64": false, "ajaxurl": "https:\/\/demo.cut2style.com\/wp-admin\/admin-ajax.php", "prefix": "wc_order_attribution_", "allowTracking": true }, "fields": { "source_type": "current.typ", "referrer": "current_add.rf", "utm_campaign": "current.cmp", "utm_source": "current.src", "utm_medium": "current.mdm", "utm_content": "current.cnt", "utm_id": "current.id", "utm_term": "current.trm", "utm_source_platform": "current.plt", "utm_creative_format": "current.fmt", "utm_marketing_tactic": "current.tct", "session_entry": "current_add.ep", "session_start_time": "current_add.fd", "session_pages": "session.pgs", "session_count": "udata.vst", "user_agent": "udata.uag" } };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{asset('web-assets/js/plugins/woocommerce/order-attribution.ver9.7.1.min.js')}}"
        id="wc-order-attribution-js"></script>
    <script type="text/javascript"
        src="{{asset('web-assets/js/plugins/real-time-auto-find-and-replace/rtafar.ver1.7.0.app.min.js')}}"
        id="rtrar.app-js"></script>

    <!-- Vendor JS  -->
    <script src="{{asset('web-assets/js/themes/vendor.bundle.js')}}"></script>

    <!-- Theme JS -->
    <script src="{{asset('web-assets/js/themes/theme.bundle.js')}}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#submenus1").hide();
            $("#button1").click(function () {
                $("#submenus1").slideToggle();
            });
            $("#submenus2").hide();
            $("#button2").click(function () {
                $("#submenus2").slideToggle();
            });
            $("#submenus3").hide();
            $("#button3").click(function () {
                $("#submenus3").slideToggle();
            });
        });
    </script>
</body>

</html>