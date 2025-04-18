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
        href='{{asset('web-assets/css/block-library/style.ver6.7.2.min.css')}}' type='text/css'
        media='all' />
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
        href='{{asset('web-assets/css/plugins/contact-form-7/styles.ver6.0.5.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'
        href='{{asset('web-assets/css/plugins/woocommerce/woocommerce-layout.ver9.7.1.css')}}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
        href='{{asset('web-assets/css/plugins/woocommerce/woocommerce-smallscreen.ver9.7.1.css')}}'
        type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'
        href='{{asset('web-assets/css/plugins/woocommerce/woocommerce.ver9.7.1.css')}}'
        type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='brands-styles-css'
        href='{{asset('web-assets/css/plugins/woocommerce/brands.ver9.7.1.css')}}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='twentyseventeen-fonts-css'
        href='https://fonts.googleapis.com/css?family=Libre+Franklin%3A300%2C300i%2C400%2C400i%2C600%2C600i%2C800%2C800i&amp;subset=latin%2Clatin-ext'
        type='text/css' media='all' />
    <link rel='stylesheet' id='twentyseventeen-style-css'
        href='{{asset('web-assets/css/themes/style.ver6.7.2.css')}}' type='text/css' media='all' />
    <script type="text/javascript" src="{{asset('web-assets/js/jquery/jquery.ver3.7.1.min.js')}}"
        id="jquery-core-js"></script>
    <script type="text/javascript"
        src="{{asset('web-assets/js/jquery/jquery-migrate.ver3.4.1.min.js')}}"
        id="jquery-migrate-js"></script>
    <script type="text/javascript"
        src="{{asset('web-assets/js/jquery/jquery.blockUI.ver2.7.0-wc.9.7.1.min.js')}}"
        id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript"
        src="{{asset('web-assets/js/js.cookie.ver2.1.4-wc.9.7.1.min.js')}}"
        id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        var woocommerce_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%", "i18n_password_show": "Show password", "i18n_password_hide": "Hide password" };
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{asset('web-assets/js/plugins/woocommerce/woocommerce.ver9.7.1.min.js')}}"
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
    <link rel="icon" href="{{asset('assets/images/favicon/cropped-fevicon-32x32.png')}}"
        sizes="32x32" />
    <link rel="icon" href="{{asset('assets/images/favicon/cropped-fevicon-192x192.png')}}"
        sizes="192x192" />
    <link rel="apple-touch-icon"
        href="{{asset('assets/images/favicon/cropped-fevicon-180x180.png')}}" />
    <meta name="msapplication-TileImage"
        content="{{asset('assets/images/favicon/cropped-fevicon-270x270.png')}}" />
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

    <!-- WELCOME -->
    <section class="pt-4 pt-md-7 demo-wrap">
        <div class="containers" style="overflow: hidden">
            <div class="row align-items-center">
                <div class="col-12 col-md-7 col-lg-6 order-md-1" data-aos="fade-up">
                    <!-- Heading -->
                    <h1 style="font-weight: 900;font-size: 2.6rem;color:#000;"
                        class="display-3 text-center text-md-start">
                        Your Ultimate Solution For Quality Local Services and Global Shopping - Delivered!
                    </h1>
                    <!-- Text -->
                    <p class="lead text-center text-md-start text-body-secondary mb-2 mb-lg-2"
                        style="font-size: 2rem;color: #555 !important;">Get Hooked With C<span class="two">2</span>S
                        Today!</p>
                    <!-- Buttons -->
                    <div class="text-left text-md-left">
                        <a href="#" style="color:#000;"><span
                                style="font-size: 20px;font-weight: bold;display: inline-grid;text-align: center;"><span
                                    style="font-size: 18px;margin-top: -25px;display: block;position: absolute;margin-left: 55px;">Scroll
                                    Down</span>To See Our Services <i style="color:#e00505"
                                    class="fe fe-arrow-down arrow1"></i> </span></a>
                        <img src="{{asset('assets/images/logowithtext.png')}}" alt="logo"
                            style="width: 80px;vertical-align: -30px;margin-left: 0.5rem;"> <a
                            style="font-size: 20px;color: #000;font-weight: 600;padding: 10px 15px;text-decoration: underline;"
                            href="#" target="_blank" class="">Then Start Here</a>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-6 order-md-2 pb-3">
                    <!-- Image -->
                    <img src="{{asset('assets/images/banner1.png')}}"
                        class="img-fluid mw-md-150 mw-lg-110 mb-6 mb-md-0" alt="..." data-aos="fade-up" style="width: 100%;"
                        data-aos-delay="100">
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>
    <section class="py-3 py-md-5" style="background: #000;">
        <div class="container">
            <div class="row">
                <!--   <div class="col-12 text-center">
          
            <a href="#prosbee" class=" btn btn-white btn-rounded-circle shadow mt-n12 mt-md-n14" data-scroll="">
              <i style="color:#e00505" class="fe fe-arrow-down arrow1"></i>
            </a>
          </div> -->
            </div>
            <!-- / .row -->
            <div class="row  justify-content-center" id="services" style="padding: 20px;">
                <div class="col-12 pb-md-7  text-center">
                    <!-- Heading -->
                    <h2 class="fw-bold" style="color: #fff;">Why Cut<span class="two">2</span>Style / C<span
                            class="two">2</span>S </h2>
                </div>
                <div class="col-12 col-md-4 aos-init aos-animate text-center" data-aos="fade-up">
                    <!-- Icon -->
                    <div class="icon text-primary mb-5">
                        <img class="img-fluid" src="{{asset('assets/images/whyc2s/van.png')}}" style="width: 130px;">
                    </div>
                    <!-- Heading -->
                    <h3
                        style="color: #fff;border-bottom: 1px solid #353535;padding-bottom: 0.5rem;text-align: center;text-transform: uppercase;font-size: 15px;">
                        Convenience</h3>
                    <p style="color: #d2d2d2;font-size: 13px;margin-top: 0.5rem;">Personalized services without the
                        hassle of traveling </p>
                </div>
                <div class="col-12 col-md-4 aos-init aos-animate text-center" data-aos="fade-up" data-aos-delay="50">
                    <!-- Icon -->
                    <div class="icon text-primary mb-5">
                        <img class="img-fluid" src="{{asset('assets/images/whyc2s/quality-img.png')}}">
                    </div>
                    <!-- Heading -->
                    <h3
                        style="color: #fff;border-bottom: 1px solid #353535;padding-bottom: 0.5rem;text-align: center;text-transform: uppercase;font-size: 15px;">
                        Quality</h3>
                    <p style="color: #d2d2d2;font-size: 13px;margin-top: 0.5rem;">Outstanding service for every client,
                        guaranteed</p>
                </div>
                <div class="col-12 col-md-4 aos-init aos-animate text-center" data-aos="fade-up" data-aos-delay="100">
                    <!-- Icon -->
                    <div class="icon text-primary mb-5">
                        <img class="img-fluid" src="{{asset('assets/images/whyc2s/selection-img.png')}}">
                    </div>
                    <!-- Heading -->
                    <h3
                        style="color: #fff;border-bottom: 1px solid #353535;padding-bottom: 0.5rem;text-align: center;text-transform: uppercase;font-size: 15px;">
                        Selection
                    </h3>
                    <p style="color: #d2d2d2;font-size: 13px;margin-top: 0.5rem;">The widest variety of top services
                        under one roof</p>
                </div>
                <div class="col-12 col-md-4 aos-init aos-animate text-center" data-aos="fade-up" data-aos-delay="100">
                    <!-- Icon -->
                    <div class="icon text-primary mb-5">
                        <img class="img-fluid" src="{{asset('assets/images/whyc2s/myhome-img.png')}}">
                    </div>
                    <!-- Heading -->
                    <h3
                        style="font-size: 13px;color: #fff;border-bottom: 1px solid #353535;padding-bottom: 0.5rem;text-align: center;text-transform: uppercase;font-size: 15px;">
                        MY HOME & 'OTHER SERVICES'
                    </h3>
                    <p style="color: #d2d2d2;font-size: 13px;margin-top: 0.5rem;">Direct interaction with local experts
                        without intermediates </p>
                </div>
                <div class="col-12 col-md-4 aos-init aos-animate text-center" data-aos="fade-up" data-aos-delay="100">
                    <!-- Icon -->
                    <div class="icon text-primary mb-5">
                        <img class="img-fluid" src="{{asset('assets/images/whyc2s/globalshop-img.png')}}">
                    </div>
                    <!-- Heading -->
                    <h3
                        style="color: #fff;border-bottom: 1px solid #353535;padding-bottom: 0.5rem;text-align: center;text-transform: uppercase;font-size: 15px;">
                        One Stop Global Shop
                    </h3>
                    <p style="color: #d2d2d2;font-size: 13px;margin-top: 0.5rem;">All your favorite products under one
                        roof</p>
                </div>
                <div class="col-12 col-md-4 aos-init aos-animate text-center" data-aos="fade-up" data-aos-delay="100">
                    <!-- Icon -->
                    <div class="icon text-primary mb-5">
                        <img class="img-fluid" src="{{asset('assets/images/whyc2s/bee.png')}}" style="width:119px;">
                    </div>
                    <!-- Heading -->
                    <h3
                        style="color: #fff;border-bottom: 1px solid #353535;padding-bottom: 0.5rem;text-align: center;text-transform: uppercase;font-size: 15px;">
                        Pro Helper
                    </h3>
                    <p style="color: #d2d2d2;font-size: 13px;margin-top: 0.5rem;">Trusted partner in Beauty, Wellness,
                        Home, and Beyond... </p>
                </div>
                <div class="col-12 col-md-4 aos-init aos-animate text-center" data-aos="fade-up" data-aos-delay="100">
                    <!-- Icon -->
                    <div class="icon text-primary mb-5">
                        <img class="img-fluid" src="{{asset('assets/images/whyc2s/saving-img.png')}}">
                    </div>
                    <!-- Heading -->
                    <h3
                        style="color: #fff;border-bottom: 1px solid #353535;padding-bottom: 0.5rem;text-align: center;text-transform: uppercase;font-size: 15px;">
                        Savings
                    </h3>
                    <p style="color: #d2d2d2;font-size: 13px;margin-top: 0.5rem;">No travel fee
                        Discounts:
                        Shared Order
                        Birthday
                        Memberships
                        Add-Ons
                        Rewards:
                        My Home improvements
                        'Other Services;
                        BeeBoutique
                        One-Stop Global Shop</p>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>
    <section id="prosbee">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-5 pt-md-8 text-center">
                    <!-- Heading -->
                    <h2 class="fw-bold">Our <em>Bee</em>Pro Services at Your Doorstep </h2>
                </div>
                <div class="col-12">
                    <!-- Flickity -->
                    <div class="flickity-viewport-visible pt-2 pb-9"
                        data-flickity='{"cellAlign": "left", "imagesLoaded": true, "pageDots": false, "prevNextButtons": true, "contain": true, "groupCells": 3}'>
                        <div id="acup" class="d-block col-12 col-md-5 col-lg-4">
                            <!-- Card -->
                            <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #fff;">
                                <div class="card-body text-center">
                                    <div class="img-fluid mb-5 w-100 mx-auto" style="color: #000;">
                                        <img src="{{asset('assets/images/service-doorstep/acupuncture.jpg')}}">
                                    </div>
                                    <!-- Text -->
                                    <p class="text-gray-700 mb-5">Effective way to get cured naturally</p>
                                    <!-- Link -->
                                    <a href="#!" style="color: #000;">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div id="barber" class="d-block col-12 col-md-5 col-lg-4">
                            <!-- Card -->
                            <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #fff;">
                                <div class="card-body text-center">
                                    <!-- Icon -->
                                    <div class="img-fluid mb-5 w-100 mx-auto" style="color: #000;">
                                        <img src="{{asset('assets/images/service-doorstep/barber.jpg')}}">
                                    </div>
                                    <!-- Text -->
                                    <p class="text-gray-700 mb-5">Great haircuts - that’s what we do </p>
                                    <!-- Link -->
                                    <a href="#!" style="color: #000;">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div id="bodytreatement" class="d-block col-12 col-md-5 col-lg-4">
                            <!-- Card -->
                            <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #fff;">
                                <div class="card-body text-center">
                                    <div class="img-fluid mb-5 w-100 mx-auto" style="color: #000;">
                                        <img
                                            src="{{asset('assets/images/service-doorstep/body-treatement.jpg')}}">
                                    </div>
                                    <p class="text-gray-700 mb-5">Wrap yourself in wellness you deserve</p>
                                    <!-- Link -->
                                    <a href="#!" style="color: #000;">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div id="denti" class="d-block col-12 col-md-5 col-lg-4">
                            <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #fff;">
                                <div class="card-body text-center">
                                    <div class="img-fluid mb-5 w-100 mx-auto" style="color: #000;">
                                        <img src="{{asset('assets/images/service-doorstep/dentistry.png')}}">
                                    </div>
                                    <p class="text-gray-700 mb-5">Caring for all your family’s dental needs</p>
                                    <a href="#!" style="color: #000;">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div id="eyebro" class="d-block col-12 col-md-5 col-lg-4">
                            <!-- Card -->
                            <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #fff;">
                                <div class="card-body text-center">
                                    <div class="img-fluid mb-5 w-100 mx-auto" style="color: #000;">
                                        <img src="{{asset('assets/images/service-doorstep/eyesandlashsa.jpg')}}">
                                    </div>
                                    <p class="text-gray-700 mb-5">
                                        Never underestimate the power of beautiful brows and lushes
                                    </p>
                                    <!-- Link -->
                                    <a href="#!" style="color: #000;">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div id="face" class="d-block col-12 col-md-5 col-lg-4">
                            <!-- Card -->
                            <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #fff;">
                                <div class="card-body text-center">
                                    <div class="img-fluid mb-5 w-100 mx-auto" style="color: #000;">
                                        <img
                                            src="{{asset('assets/images/service-doorstep/facetreatement.jpg')}}">
                                    </div>
                                    <!-- Text -->
                                    <p class="text-gray-700 mb-5">Your face deserves the best care </p>
                                    <!-- Link -->
                                    <a href="#!" style="color: #000;">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div id="hair" class="d-block col-12 col-md-5 col-lg-4">
                            <!-- Card -->
                            <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #fff;">
                                <div class="card-body text-center">
                                    <!-- Icon -->
                                    <div class="img-fluid mb-5 w-100 mx-auto" style="color: #000;">
                                        <img
                                            src="{{asset('assets/images/service-doorstep/hairremoval.png')}}">
                                    </div>
                                    <!-- Text -->
                                    <p class="text-gray-700 mb-5">Say goodbye to razors and hello to flawless Skin</p>
                                    <!-- Link -->
                                    <a href="#!" style="color: #000;">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div id="hairstyling" class="d-block col-12 col-md-5 col-lg-4">
                            <!-- Card -->
                            <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #fff;">
                                <div class="card-body text-center">
                                    <!-- Icon -->
                                    <div class="img-fluid mb-5 w-100 mx-auto" style="color: #000;">
                                        <img src="{{asset('assets/images/service-doorstep/hairstyle.png')}}">
                                    </div>
                                    <!-- Text -->
                                    <p class="text-gray-700 mb-5">Your hair beauty is our duty</p>
                                    <!-- Link -->
                                    <a href="#" style="color: #000;">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div id="infu" class="d-block col-12 col-md-5 col-lg-4">
                            <!-- Card -->
                            <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #fff;">
                                <div class="card-body text-center">
                                    <!-- Icon -->
                                    <div class="img-fluid mb-5 w-100 mx-auto" style="color: #000;">
                                        <img src="{{asset('assets/images/service-doorstep/infusion.jpg')}}">
                                    </div>
                                    <p class="text-gray-700 mb-5">We deliver vitality to your body & mind</p>
                                    <!-- Link -->
                                    <a href="#!" style="color: #000;">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div id="makeup" class="d-block col-12 col-md-5 col-lg-4">
                            <!-- Card -->
                            <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #fff;">
                                <div class="card-body text-center">
                                    <div class="img-fluid mb-5 w-100 mx-auto" style="color: #000;">
                                        <img src="{{asset('assets/images/service-doorstep/makeover.png')}}">
                                    </div>
                                    <!-- Text -->
                                    <p class="text-gray-700 mb-5">Nothing is perfect, but your makeup can be </p>
                                    <!-- Link -->
                                    <a href="#!" style="color: #000;">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div id="massage" class="d-block col-12 col-md-5 col-lg-4">
                            <!-- Card -->
                            <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #fff;">
                                <div class="card-body text-center">
                                    <!-- Icon -->
                                    <div class="img-fluid mb-5 w-100 mx-auto" style="color: #000;">
                                        <img src="{{asset('assets/images/service-doorstep/massage.jpg')}}">
                                    </div>
                                    <!-- Text -->
                                    <p class="text-gray-700 mb-5">Massage excellence comes with experience</p>
                                    <!-- Link -->
                                    <a href="#!" style="color: #000;">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div id="medspa" class="d-block col-12 col-md-5 col-lg-4">
                            <!-- Card -->
                            <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #fff;">
                                <div class="card-body text-center">
                                    <!-- Icon -->
                                    <div class="img-fluid mb-5 w-100 mx-auto" style="color: #000;">
                                        <img src="{{asset('assets/images/service-doorstep/medspa.jpg')}}">
                                    </div>
                                    <p class="text-gray-700 mb-5">Relax, Rejuvenate, Recharge, Heal</p>
                                    <!-- Link -->
                                    <a href="#!" style="color: #000;">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div id="nailwork" class="d-block col-12 col-md-5 col-lg-4">
                            <!-- Card -->
                            <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #fff;">
                                <div class="card-body text-center">
                                    <!-- Icon -->
                                    <div class="img-fluid mb-5 w-100 mx-auto" style="color: #000;">
                                        <img src="{{asset('assets/images/service-doorstep/nailwork.jpg')}}">
                                    </div>
                                    <p class="text-gray-700 mb-5">We’ll make your nail dreams come true
                                    </p>
                                    <!-- Link -->
                                    <a href="#!" style="color: #000;">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div id="neuro" class="d-block col-12 col-md-5 col-lg-4">
                            <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #fff;">
                                <div class="card-body text-center">
                                    <div class="img-fluid mb-5 w-100 mx-auto" style="color: #000;">
                                        <img src="{{asset('assets/images/service-doorstep/neuropathy.png')}}">
                                    </div>
                                    <p class="text-gray-700 mb-5">Say goodbye to nerve pain!</p>
                                    <a href="#!" style="color: #000;">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div id="optme" class="d-block col-12 col-md-5 col-lg-4">
                            <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #fff;">
                                <div class="card-body text-center">
                                    <div class="img-fluid mb-5 w-100 mx-auto" style="color: #000;">
                                        <img src="{{asset('assets/images/service-doorstep/optomerty.png')}}">
                                    </div>
                                    <p class="text-gray-700 mb-5">Eye care that you can trust</p>
                                    <a href="#!" style="color: #000;">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div id="personal" class="d-block col-12 col-md-5 col-lg-4">
                            <!-- Card -->
                            <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #fff;">
                                <div class="card-body text-center">
                                    <div class="img-fluid mb-5 w-100 mx-auto" style="color: #000;">
                                        <img src="{{asset('assets/images/service-doorstep/prsonltrner.jpg')}}">
                                    </div>
                                    <!-- Text -->
                                    <p class="text-gray-700 mb-5">Achieve your best with one-on-one expert coaching</p>
                                    <!-- Link -->
                                    <a href="#!" style="color: #000;">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div id="pet" class="d-block col-12 col-md-5 col-lg-4">
                            <!-- Card -->
                            <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #fff;">
                                <div class="card-body text-center">
                                    <div class="img-fluid mb-5 w-100 mx-auto" style="color: #000;">
                                        <img src="{{asset('assets/images/service-doorstep/petgromng.jpg')}}">
                                    </div>
                                    <!-- Text -->
                                    <p class="text-gray-700 mb-5">Every pet deserves celebrity treatment</p>
                                    <!-- Link -->
                                    <a href="#!" style="color: #000;">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div id="physio" class="d-block col-12 col-md-5 col-lg-4">
                            <!-- Card -->
                            <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #fff;">
                                <div class="card-body text-center">
                                    <!-- Icon -->
                                    <div class="img-fluid mb-5 w-100 mx-auto" style="color: #000;">
                                        <img src="{{asset('assets/images/service-doorstep/physio.jpg')}}">
                                    </div>
                                    <!-- Text -->
                                    <p class="text-gray-700 mb-5">We are your neighborhood body specialists</p>
                                    <!-- Link -->
                                    <a href="#!" style="color: #000;">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div id="tanni" class="d-block col-12 col-md-5 col-lg-4">
                            <!-- Card -->
                            <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #fff;">
                                <div class="card-body text-center">
                                    <div class="img-fluid mb-5 w-100 mx-auto" style="color: #000;">
                                        <img src="{{asset('assets/images/service-doorstep/tanning.jpg')}}">
                                    </div>
                                    <!-- Text -->
                                    <p class="text-gray-700 mb-5">We deliver beach suntan to your doorstep without sand
                                    </p>
                                    <!-- Link -->
                                    <a href="#!" style="color: #000;">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div id="tattos" class="d-block col-12 col-md-5 col-lg-4">
                            <!-- Card -->
                            <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #fff;">
                                <div class="card-body text-center">
                                    <!-- Icon -->
                                    <div class="img-fluid mb-5 w-100 mx-auto" style="color: #000;">
                                        <img src="{{asset('assets/images/service-doorstep/tattos.jpg')}}">
                                    </div>
                                    <!-- Text -->
                                    <p class="text-gray-700 mb-5">Experience beauty handmade for life </p>
                                    <!-- Link -->
                                    <a href="#!" style="color: #000;">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div id="veter" class="d-block col-12 col-md-5 col-lg-4">
                            <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #fff;">
                                <div class="card-body text-center">
                                    <div class="img-fluid mb-5 w-100 mx-auto" style="color: #000;">
                                        <img src="{{asset('assets/images/service-doorstep/veenary.jpg')}}">
                                    </div>
                                    <p class="text-gray-700 mb-5">A trusted partner in your pet’s well-being</p>
                                    <a href="#!" style="color: #000;">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div id="yoga" class="d-block col-12 col-md-5 col-lg-4">
                            <div class="card card-border shadow-light-lg lift lift-lg" style="border-top-color: #fff;">
                                <div class="card-body text-center">
                                    <div class="img-fluid mb-5 w-100 mx-auto" style="color: #000;">
                                        <img src="{{asset('assets/images/service-doorstep/yoga-img.jpg')}}">
                                    </div>
                                    <p class="text-gray-700 mb-5">Journey to wellness begins with Yoga</p>
                                    <a href="#!" style="color: #000;">More Info</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>
    <section id="our-services" style="background: #fff;">
        <div class="container">
            <div class="row pb-8 px-7">
                <div class="col-12 pt-5 pb-5 pb-md-8 pt-md-8 text-center">
                    <!-- Heading -->
                    <h2 style="color: #000;" class="fw-bold">Our <u>'MY HOME'</u> Improvement Services </h2>
                </div>
                <div class="col-12 col-lg-3">
                    <!-- Item -->
                    <div class="d-flex">
                        <!-- Check -->
                        <div class="badge badge-rounded-circle text-bg-success-subtles mt-1 me-4">
                            <i class="fe fe-check"></i>
                        </div>
                        <!-- Text -->
                        <a href="#">
                            <p class="text-successs">Popular</p>
                        </a>
                    </div>
                    <div class="d-flex">
                        <!-- Check -->
                        <div class="badge badge-rounded-circle text-bg-success-subtles mt-1 me-4">
                            <i class="fe fe-check"></i>
                        </div>
                        <!-- Text -->
                        <a href="#">
                            <p class="text-successs" style="font-size:17px;">A/C, Heating & Ventilation </p>
                        </a>
                    </div>
                    <!-- Item -->
                    <div class="d-flex">
                        <!-- Check -->
                        <div class="badge badge-rounded-circle text-bg-success-subtles mt-1 me-4">
                            <i class="fe fe-check"></i>
                        </div>
                        <a href="#">
                            <p class="text-successs">Alarm & Security </p>
                        </a>
                    </div>
                    <div class="d-flex">
                        <!-- Check -->
                        <div class="badge badge-rounded-circle text-bg-success-subtles mt-1 me-4">
                            <i class="fe fe-check"></i>
                        </div>
                        <a href="#">
                            <p class="text-successs">
                                Appliances & Equipment
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="d-flex">

                        <div class="badge badge-rounded-circle text-bg-success-subtles mt-1 me-4">
                            <i class="fe fe-check"></i>
                        </div>
                        <a href="#">
                            <p class="text-successs">
                                Backyard & Front
                            </p>
                        </a>
                    </div>
                    <div class="d-flex">
                        <!-- Check -->
                        <div class="badge badge-rounded-circle text-bg-success-subtles mt-1 me-4">
                            <i class="fe fe-check"></i>
                        </div>
                        <a href="#">
                            <p class="text-successs" style="font-size: 17px;">
                                Cleaning & Restoration
                            </p>
                        </a>
                    </div>
                    <!-- Item -->
                    <div class="d-flex">
                        <!-- Check -->
                        <span class="badge badge-rounded-circle text-bg-success-subtles mt-1 me-4">
                            <i class="fe fe-check"></i>
                        </span>
                        <!-- Text -->
                        <a href="#">
                            <p class="text-successs">
                                Concrete & Cement
                            </p>
                        </a>
                    </div>
                    <!-- Item -->
                    <div class="d-flex">
                        <!-- Check -->
                        <div class="badge badge-rounded-circle text-bg-success-subtles me-1 me-4">
                            <i class="fe fe-check"></i>
                        </div>
                        <!-- Text -->
                        <a href="#">
                            <p class="text-successs">
                                Doors & Window
                            </p>
                        </a>
                    </div>


                </div>
                <div class="col-12 col-lg-3">

                    <div class="d-flex">
                        <!-- Check -->
                        <div class="badge badge-rounded-circle text-bg-success-subtles mt-1 me-4">
                            <i class="fe fe-check"></i>
                        </div>
                        <a href="#">
                            <p class="text-successs">
                                Electrical
                            </p>
                        </a>
                    </div>
                    <div class="d-flex">
                        <!-- Check -->
                        <span class="badge badge-rounded-circle text-bg-success-subtles mt-1 me-4">
                            <i class="fe fe-check"></i>
                        </span>
                        <!-- Text -->
                        <a href="#">
                            <p class="text-successs">
                                Flooring
                            </p>
                        </a>
                    </div>
                    <div class="d-flex">
                        <!-- Check -->
                        <div class="badge badge-rounded-circle text-bg-success-subtles me-1 me-4">
                            <i class="fe fe-check"></i>
                        </div>
                        <!-- Text -->
                        <a href="#">
                            <p class="text-successs">
                                Home Building
                            </p>
                        </a>
                    </div>

                </div>
                <div class="col-12 col-lg-3">

                    <div class="d-flex">
                        <!-- Check -->
                        <div class="badge badge-rounded-circle text-bg-success-subtles me-1 me-4">
                            <i class="fe fe-check"></i>
                        </div>
                        <!-- Text -->
                        <a href="#">
                            <p class="text-successs">
                                Painting
                            </p>
                        </a>
                    </div>
                    <!-- Item -->
                    <div class="d-flex">
                        <!-- Check -->
                        <span class="badge badge-rounded-circle text-bg-success-subtles mt-1 me-4">
                            <i class="fe fe-check"></i>
                        </span>
                        <!-- Text -->
                        <a href="#">
                            <p class="text-successs">
                                Plumbing </p>
                        </a>
                    </div>

                    <div class="d-flex">
                        <!-- Check -->
                        <div class="badge badge-rounded-circle text-bg-success-subtles me-1 me-4">
                            <i class="fe fe-check"></i>
                        </div>
                        <!-- Text -->
                        <a href="#">
                            <p class="text-successs">
                                Miscellaneous
                            </p>
                        </a>
                    </div>
                </div>
                <br>
                <h2 style="color: #000;" class="fw-bold text-center"> Our 'Other Services' </h2>
                <div class="col-12 col-lg-3">
                    <!-- Item -->
                    <div class="d-flex">
                        <!-- Check -->
                        <div class="badge badge-rounded-circle text-bg-success-subtles mt-1 me-4">
                            <i class="fe fe-check"></i>
                        </div>
                        <!-- Text -->
                        <a href="#">
                            <p class="text-successs">
                                Automotive
                            </p>
                        </a>
                    </div>
                    <!-- Item -->
                    <div class="d-flex">
                        <!-- Check -->
                        <div class="badge badge-rounded-circle text-bg-success-subtles mt-1 me-4">
                            <i class="fe fe-check"></i>
                        </div>
                        <a href="#">
                            <p class="text-successs">
                                Education
                            </p>
                        </a>
                    </div>
                    <div class="d-flex">
                        <!-- Check -->
                        <div class="badge badge-rounded-circle text-bg-success-subtles mt-1 me-4">
                            <i class="fe fe-check"></i>
                        </div>
                        <a href="#">
                            <p class="text-successs">
                                Events
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="d-flex">
                        <!-- Check -->
                        <div class="badge badge-rounded-circle text-bg-success-subtles mt-1 me-4">
                            <i class="fe fe-check"></i>
                        </div>
                        <a href="#">
                            <p class="text-successs">
                                Finances
                            </p>
                        </a>
                    </div>
                    <!-- Item -->
                    <div class="d-flex">
                        <!-- Check -->
                        <span class="badge badge-rounded-circle text-bg-success-subtles mt-1 me-4">
                            <i class="fe fe-check"></i>
                        </span>
                        <!-- Text -->
                        <a href="#">
                            <p class="text-successs">
                                Insurance / Security
                            </p>
                        </a>
                    </div>
                    <!-- Item -->
                    <div class="d-flex">
                        <!-- Check -->
                        <div class="badge badge-rounded-circle text-bg-success-subtles me-1 me-4">
                            <i class="fe fe-check"></i>
                        </div>
                        <!-- Text -->
                        <a href="#">
                            <p class="text-successs">
                                Legal
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <!-- Item -->
                    <div class="d-flex">
                        <!-- Check -->
                        <span class="badge badge-rounded-circle text-bg-success-subtles mt-1 me-4">
                            <i class="fe fe-check"></i>
                        </span>
                        <!-- Text -->
                        <a href="#">
                            <p class="text-successs">
                                Pets
                            </p>
                        </a>
                    </div>
                    <!-- Item -->
                    <div class="d-flex">
                        <!-- Check -->
                        <div class="badge badge-rounded-circle text-bg-success-subtles me-1 me-4">
                            <i class="fe fe-check"></i>
                        </div>
                        <!-- Text -->
                        <a href="#">
                            <p class="text-successs">
                                Real Estate
                            </p>
                        </a>
                    </div>
                    <div class="d-flex">
                        <!-- Check -->
                        <div class="badge badge-rounded-circle text-bg-success-subtles me-1 me-4">
                            <i class="fe fe-check"></i>
                        </div>
                        <!-- Text -->
                        <a href="#">
                            <p class="text-successs">
                                Technology
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <!-- Item -->
                    <div class="d-flex">
                        <!-- Check -->
                        <span class="badge badge-rounded-circle text-bg-success-subtles mt-1 me-4">
                            <i class="fe fe-check"></i>
                        </span>
                        <!-- Text -->
                        <a href="#">
                            <p class="text-successs">
                                Travel
                            </p>
                        </a>
                    </div>
                    <!-- Item -->
                    <div class="d-flex">
                        <!-- Check -->
                        <div class="badge badge-rounded-circle text-bg-success-subtles me-1 me-4">
                            <i class="fe fe-check"></i>
                        </div>
                        <!-- Text -->
                        <a href="#">
                            <p class="text-successs">
                                Wellness
                            </p>
                        </a>
                    </div>
                    <div class="d-flex">
                        <!-- Check -->
                        <div class="badge badge-rounded-circle text-bg-success-subtles me-1 me-4">
                            <i class="fe fe-check"></i>
                        </div>
                        <!-- Text -->
                        <a href="#">
                            <p class="text-successs">
                                Miscellaneous
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>
    <section style="background:#fff;">
        <div class="container py-1" style="padding-bottom: 4rem !important;">
            <div class="row">
                <div class="col-12  text-center">
                    <h2 class="fw-bold">HOME, BEAUTY & WELLNESS</h2>
                    <h2 class="h3 mb-sm-3">Quality Products at Your Fingertip</h2>
                </div>
            </div>
            <div class="row mx-lg-n4">
                <div class="col-lg-3 col-md-6 px-lg-3">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div>
                                    <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                                        <img src="{{asset('assets/images/quality-products/a-zicon.png')}}"
                                            class="img-fluid iconog">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="h6">Brands</span>
                                <span class="fs-xs dis"><a href="#">A - B</a></span>
                                <span class="fs-xs dis"><a href="#">C - D - E</a></span>
                                <span class="fs-xs dis"><a href="#">F - G - H</a></span>
                                <span class="fs-xs dis"><a href="#">I - J - K</a></span>
                                <span class="fs-xs dis"><a href="#">L - M - N</a></span>
                                <span class="fs-xs dis"><a href="#">O - P - Q</a></span>
                                <span class="fs-xs dis"><a href="#">R - S - T</a></span>
                                <span class="fs-xs dis"><a href="#">U - V - W</a></span>
                                <span class="fs-xs dis"><a href="#">X - Y - Z</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 px-lg-3">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                                    <img src="{{asset('assets/images/quality-products/hair-icon.png')}}"
                                        class="img-fluid iconog">
                                </div>
                            </div>
                            <div>
                                <span class="h6">Hair</span>
                                <span class="fs-xs dis"><a href="#">Shampoos &amp; Conditioners</a></span>
                                <span class="fs-xs dis"><a href="#">Styling &amp; Treatments</a></span>
                                <span class="fs-xs dis"><a href="#">Haircare &amp; Color </a></span>
                                <span class="fs-xs dis"><a href="#">Shaving &amp; Hair Off</a></span>
                                <span class="fs-xs dis"><a href="#">Tools &amp; Accessories</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 px-lg-3">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                                    <img src="{{asset('assets/images/quality-products/skin-icon.png')}}"
                                        class="img-fluid iconog">
                                </div>
                            </div>
                            <div>
                                <span class="h6">Skin</span>
                                <span class="fs-xs dis"><a href="#">Concerns &amp; Treatments</a></span>
                                <span class="fs-xs dis"><a href="#">Cleansers &amp; Moisturizers</a></span>
                                <span class="fs-xs dis"><a href="#">Creams &amp; Lotions</a></span>
                                <span class="fs-xs dis"><a href="#">Serums &amp; Oils</a></span>
                                <span class="fs-xs dis"><a href="#">Eye Care</a></span>
                                <span class="fs-xs dis"><a href="#">Masks &amp; Scrubs</a></span>
                                <span class="fs-xs dis"><a href="#">Sun Care</a></span>
                                <span class="fs-xs dis"><a href="#">Tools &amp; Accessories </a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 px-lg-3">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                                    <img src="{{asset('assets/images/quality-products/makeup-icon.png')}}"
                                        class="img-fluid iconog">
                                </div>
                            </div>
                            <div>
                                <span class="h6">MakeUp & Nails</span>
                                <span class="fs-xs dis"><a href="#">Eyes</a></span>
                                <span class="fs-xs dis"><a href="#"> Face</a></span>
                                <span class="fs-xs dis"><a href="#">Lips</a></span>
                                <span class="fs-xs dis"><a href="#">Nail Care</a></span>
                                <span class="fs-xs dis"><a href="#">Tools &amp; Accessories</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 px-lg-3">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                                    <img src="{{asset('assets/images/quality-products/bath-icon.png')}}"
                                        class="img-fluid iconog">
                                </div>
                            </div>
                            <div>
                                <span class="h6">Beth & Beauty</span>
                                <span class="fs-xs dis"><a href="#">Bath &amp; Shower</a></span>
                                <span class="fs-xs dis"><a href="#"> Body Care</a></span>
                                <span class="fs-xs dis"><a href="#">Kids &amp; Baby Care</a></span>
                                <span class="fs-xs dis"><a href="#">Tools &amp; Accessories</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 px-lg-3">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                                    <img src="{{asset('assets/images/quality-products/gift-icon.png')}}"
                                        class="img-fluid iconog">
                                </div>
                            </div>
                            <div>
                                <span class="h6">Fragrances & Gifts</span>
                                <span class="fs-xs dis"><a href="#">4 Her &amp; Him</a></span>
                                <span class="fs-xs dis"><a href="#">4 Baby</a></span>
                                <span class="fs-xs dis"><a href="#">4 Teens</a></span>
                                <span class="fs-xs dis"><a href="#">Sprays &amp; Mists</a></span>
                                <span class="fs-xs dis"><a href="#">Perfume &amp; Cologne</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 px-lg-3">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                                    <img src="{{asset('assets/images/quality-products/diet-icon.png')}}"
                                        class="img-fluid iconog">
                                </div>
                            </div>
                            <div>
                                <span class="h6">Diet / Meals</span>
                                <span class="fs-xs dis"><a href="#">Plant Based</a></span>
                                <span class="fs-xs dis"><a href="#">Low Carbs</a></span>
                                <span class="fs-xs dis"><a href="#">Gluten Free</a></span>
                                <span class="fs-xs dis"><a href="#">Balance &amp; Diabetes</a></span>
                                <span class="fs-xs dis"><a href="#">Weight Watcher</a></span>
                                <span class="fs-xs dis"><a href="#">Paleo</a></span>
                                <span class="fs-xs dis"><a href="#">Keto</a></span>
                                <span class="fs-xs dis"><a href="#">Organic</a></span>
                                <span class="fs-xs dis"><a href="#">Economy</a></span>
                                <span class="fs-xs dis"><a href="#">More Options</a></span>
                                <span class="fs-xs dis"><a href="#">Items &amp; Ingredients</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 px-lg-3">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div>
                                    <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                                        <img src="{{asset('assets/images/quality-products/heath-icon.png')}}"
                                            class="img-fluid iconog">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="h6">Health / Wellness</span>
                                <span class="fs-xs dis"><a href="#">Life Essentials</a></span>
                                <span class="fs-xs dis"><a href="#">Energy</a></span>
                                <span class="fs-xs dis"><a href="#">Skin, Hair &amp; Nails</a></span>
                                <span class="fs-xs dis"><a href="#">Weight Watcher</a></span>
                                <span class="fs-xs dis"><a href="#">Women</a></span>
                                <span class="fs-xs dis"><a href="#">Men</a></span>
                                <span class="fs-xs dis"><a href="#">Kids &amp; Babies</a></span>
                                <span class="fs-xs dis"><a href="#">Miscellaneous</a></span>
                                <span class="fs-xs dis"><a href="#">Tools &amp; Accessories</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 px-lg-3">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div>
                                    <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                                        <img src="{{asset('assets/images/quality-products/homebeauty_icon.png')}}"
                                            class="img-fluid iconog">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="h6">Home Beauty</span>
                                <span class="fs-xs dis"><a href="#">Décor</a></span>
                                <span class="fs-xs dis"><a href="#">Furnishing</a></span>
                                <span class="fs-xs dis"><a href="#">Window Treatments</a></span>
                                <span class="fs-xs dis"><a href="#">Miscellaneous</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 px-lg-3">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div>
                                    <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                                        <img src="{{asset('assets/images/quality-products/and-more.png')}}"
                                            class="img-fluid iconog">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="h6">and More...</span>
                                <span class="fs-xs dis"><a href="#">Website Design</a></span>
                                <span class="fs-xs dis"><a href="#">Flowers</a></span>
                                <span class="fs-xs dis"><a href="#">Gifts</a></span>
                                <span class="fs-xs dis"><a href="#">Pets</a></span>
                                <span class="fs-xs dis"><a href="#">Miscellaneous</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 px-lg-3">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div>
                                    <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                                        <img src="{{asset('assets/images/quality-products/prouser.png')}}"
                                            class="img-fluid iconog">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span class="h6">PRO CORNER</span>
                                <span class="fs-xs dis"><a href="#">Beauty</a></span>
                                <span class="fs-xs dis"><a href="#">Health & Wellness</a></span>
                                <span class="fs-xs dis"><a href="#">My Home</a></span>
                                <span class="fs-xs dis"><a href="#">Miscellaneous</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background: #fff;" class="py-0 py-md-0 white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 text-center">
                    <!-- Heading -->
                    <h2 class="fw-bold">Our Blog</h2>
                </div>
            </div>
            <!-- / .row -->
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <!-- Card -->
                    <div class="card mb-6 mb-lg-0 pt-14 overlay overlay-black overlay-30 bg-cover shadow-light-lg lift lift-lg"
                        style="background-image: url({{asset('assets/images/blog/blog-1.jpg);')}}">
                        <!-- Body -->
                        <a class="card-body mt-auto" href="#!">
                            <!-- Heading -->
                            <h3 class="text-white">
                                Using Unsplash to improve your listing visibility
                            </h3>
                            <!-- Text -->
                            <p class="mb-0 text-white" style="font-size: 14px;">
                                Using free stock photos of your surrounding areas can skyrocket your popularity.
                            </p>
                        </a>
                        <!-- Meta -->
                        <a class="card-meta" href="#!">
                            <!-- Divider -->
                            <hr class="card-meta-divider text-white text-opacity-20">
                            <!-- Date -->
                            <p class="h6 text-uppercase text-white text-opacity-80 mb-0 ms-auto">
                                <time datetime="2019-05-02">Posted On May 02, 2024</time>
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <!-- Card -->
                    <div class="card mb-6 mb-lg-0 pt-14 overlay overlay-black overlay-30 bg-cover shadow-light-lg lift lift-lg"
                        style="background-image: url({{asset('assets/images/blog/blog-2.jpg);')}}">
                        <!-- Body -->
                        <a class="card-body mt-auto" href="#!">
                            <!-- Heading -->
                            <h3 class="text-white">
                                Using Unsplash to improve your listing visibility
                            </h3>
                            <!-- Text -->
                            <p class="mb-0 text-white" style="font-size: 14px;">
                                Using free stock photos of your surrounding areas can skyrocket your popularity.
                            </p>
                        </a>
                        <!-- Meta -->
                        <a class="card-meta" href="#!">
                            <!-- Divider -->
                            <hr class="card-meta-divider text-white text-opacity-20">
                            <!-- Date -->
                            <p class="h6 text-uppercase text-white text-opacity-80 mb-0 ms-auto">
                                <time datetime="2019-05-02">Posted On May 02, 2024</time>
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <!-- Card -->
                    <div class="card mb-6 mb-lg-0 pt-14 overlay overlay-black overlay-30 bg-cover shadow-light-lg lift lift-lg"
                        style="background-image: url({{asset('assets/images/blog/blog-3.jpg);')}}">
                        <!-- Body -->
                        <a class="card-body mt-auto" href="#!">
                            <!-- Heading -->
                            <h3 class="text-white">
                                Using Unsplash to improve your listing visibility
                            </h3>
                            <!-- Text -->
                            <p class="mb-0 text-white" style="font-size: 14px;">
                                Using free stock photos of your surrounding areas can skyrocket your popularity.
                            </p>
                        </a>
                        <!-- Meta -->
                        <a class="card-meta" href="#!">
                            <!-- Divider -->
                            <hr class="card-meta-divider text-white text-opacity-20">
                            <!-- Date -->
                            <p class="h6 text-uppercase text-white text-opacity-80 mb-0 ms-auto">
                                <time datetime="2019-05-02">Posted On May 02, 2024</time>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>

    <section class="home-testimonial" style="background: #f9f9f9;">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="fw-bold pt-5">Reviews & Ratings </h2>
                </div>
            </div>
            <div class="main-gallery" style="margin-bottom: 100px;"
                data-flickity='{"cellAlign": "left", "imagesLoaded": true, "pageDots": false, "prevNextButtons": true, "contain": true, "groupCells": 1,  "autoPlay": 4000 }'>
                <div class="gallery-cell">
                    <div class="testimonial">
                        <p
                            style="font-size:16px;font-weight: 600;margin-bottom: 6px !important;color: #a90307;border: 1px solid #cecece;width: 100px;margin: 0 auto;border-radius: 5px;">
                            <em>Bee</em>PROs</p>
                        <img class="testimonial-avatar"
                            src="{{asset('assets/images/testimonial/testimonial1.png')}}">
                        <q class="testimonial-quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                            mauris ex, gravida ut leo eu, rhoncus porta orci. Fusce vitae rutrum nulla."</q>
                        <span class="testimonial-author">Joe Smith, CEO of Cubix</span>
                    </div>
                </div>
                <div class="gallery-cell">
                    <div class="testimonial">
                        <p
                            style="font-size:16px;font-weight: 600;margin-bottom: 6px !important;color: #a90307;border: 1px solid #cecece;width: 100px;margin: 0 auto;border-radius: 5px;">
                            MY HOME</p>
                        <img class="testimonial-avatar"
                            src="{{asset('assets/images/testimonial/testimonial2.png')}}">
                        <q class="testimonial-quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                            mauris ex, gravida ut leo eu, rhoncus porta orci. Fusce vitae rutrum nulla."</q>
                        <span class="testimonial-author">Lisa Jones, Freelance Web Developer</span>
                    </div>
                </div>
                <div class="gallery-cell">
                    <div class="testimonial">
                        <p
                            style="font-size:16px;font-weight: 600;margin-bottom: 6px !important;color: #a90307;border: 1px solid #cecece;width: 180px;margin: 0 auto;border-radius: 5px;">
                            OTHER SERVICES</p>
                        <img class="testimonial-avatar"
                            src="{{asset('assets/images/testimonial/testimonial3.png')}}">
                        <q class="testimonial-quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                            mauris ex, gravida ut leo eu, rhoncus porta orci. Fusce vitae rutrum nulla."</q>
                        <span class="testimonial-author">Ryan Waltz, Front-End Developer</span>
                    </div>
                </div>
                <div class="gallery-cell">
                    <div class="testimonial">
                        <p
                            style="font-size:16px;font-weight: 600;margin-bottom: 6px !important;color: #a90307;border: 1px solid #cecece;width: 100px;margin: 0 auto;border-radius: 5px;">
                            <em>Bee</em>PROs</p>
                        <img class="testimonial-avatar"
                            src="{{asset('assets/images/testimonial/testimonial1.png')}}">
                        <q class="testimonial-quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                            mauris ex, gravida ut leo eu, rhoncus porta orci. Fusce vitae rutrum nulla."</q>
                        <span class="testimonial-author">Ryan Waltz, Front-End Developer</span>
                    </div>
                </div>
                <div class="gallery-cell">
                    <div class="testimonial">
                        <p
                            style="font-size:16px;font-weight: 600;margin-bottom: 6px !important;color: #a90307;border: 1px solid #cecece;width: 100px;margin: 0 auto;border-radius: 5px;">
                            MY HOME</p>
                        <img class="testimonial-avatar"
                            src="{{asset('assets/images/testimonial/testimonial3.png')}}">
                        <q class="testimonial-quote">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis
                            mauris ex, gravida ut leo eu, rhoncus porta orci. Fusce vitae rutrum nulla."</q>
                        <span class="testimonial-author">Ryan Waltz, Front-End Developer</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER -->
    <!-- FOOTER -->
    <style>
        .fw-bold.text-uppercase.footerheading.mb-6 {
            min-height: 38px;
        }
    </style>

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
        href='{{asset('web-assets/css/plugins/woocommerce/wc-blocks.verwc-9.7.1.css')}}'
        type='text/css' media='all' />
    <script type="text/javascript"
        src="{{asset('web-assets/js/hooks.min.js')}}"
        id="wp-hooks-js"></script>
    <script type="text/javascript"
        src="{{asset('web-assets/js/i18n.min.js')}}"
        id="wp-i18n-js"></script>
    <script type="text/javascript" id="wp-i18n-js-after">
        /* <![CDATA[ */
        wp.i18n.setLocaleData({ 'text direction\u0004ltr': ['ltr'] });
        /* ]]> */
    </script>
    <script type="text/javascript"
        src="{{asset('web-assets/js/plugins/contact-form-7/swv/index.ver6.0.5.js')}}"
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
    <script type="text/javascript"
        src="{{asset('web-assets/js/plugins/contact-form-7/index.ver6.0.5.js')}}"
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