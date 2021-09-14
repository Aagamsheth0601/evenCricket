<?php

?>

<style>
    @media(max-width: 1023.98px) {
        .player-match-container {
            padding: 0 16px;
            margin-bottom: 30px
        }
    }

    .player-index-container {
        background: #fff;
        box-shadow: 1px 1px 6px rgba(0, 0, 0, .16);
        border-radius: 10px;
        height: -moz-fit-content;
        height: fit-content
    }

    .player-index-age {
        font-size: 12px;
        line-height: 18px
    }

    @media(min-width: 1024px) {
        .player-index-age {
            font-size: 14px;
            line-height: 21px
        }
    }

    .player-index-role {
        font-size: 14px;
        line-height: 21px
    }

    @media(min-width: 1024px) {
        .player-index-role {
            font-size: 16px;
            line-height: 24px
        }
    }

    .player-index-grid {
        display: grid;
        grid-template-columns: 1fr 1fr
    }

    .player-index-grid .index-data {
        border-bottom: 1px solid #edeef0;
        display: flex
    }

    @media(max-width: 1023.98px) {
        .player-index-grid .index-data {
            grid-column: span 2
        }
    }

    @media(min-width: 768px) {
        .player-index-grid .index-data:nth-child(2n+1) {
            border-right: 1px solid #edeef0
        }
    }

    .player-index-grid .index-data:last-child {
        border-right: none
    }

    .player-index-grid .index-data>a {
        min-width: 80px;
        min-height: 80px;
        width: 80px;
        height: 80px
    }

    .player-index-headhot-grid {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        flex: 0 0 80px
    }

    @media(max-width: 1023.98px) {
        .player-index-headhot-grid {
            width: 70px;
            height: 70px
        }
    }

    .alpha-active::after {
        content: "";
        display: block;
        position: absolute;
        width: 100%;
        height: 3px;
        background: #d00;
        bottom: -8px;
        left: 0
    }

    .alpha-inactive {
        opacity: .7
    }

    .alpha-disabled {
        opacity: .2
    }

    .caps-heading {
        margin-bottom: 22px
    }

    @media(max-width: 1023.98px) {
        .caps-heading {
            font-size: 20px;
            margin-bottom: 6px
        }
    }

    @media(max-width: 1023.98px) {
        .player-index-class-page {
            overflow: scroll;
            -ms-overflow-style: none;
            scrollbar-width: none
        }

        .player-index-class-page::-webkit-scrollbar {
            display: none
        }
    }

    .player-index-class-page .heading-container {
        background-color: #f9f9fb;
        font-size: 14px;
        line-height: 20px;
        letter-spacing: .2px;
        padding-top: 13px;
        padding-bottom: 6px;
        border-bottom: solid 2px #2b2c2d
    }

    .player-index-class-page .player-row {
        min-height: 54px
    }

    .player-index-class-page .player-row:nth-child(odd) {
        background-color: #f9f9fb
    }

    .player-index-class-page .cap-index-heading {
        font-size: 14px;
        line-height: 20px
    }

    .player-index-class-page .cap-value {
        font-size: 16px;
        line-height: 24px
    }

    @media(max-width: 1023.98px) {
        .player-index-class-page .cap-value {
            font-size: 12px;
            line-height: 18px
        }
    }

    .player-index-class-page .cap-container {
        min-width: 47px
    }

    @media(max-width: 1023.98px) {
        .player-index-class-page .cap-container {
            min-width: 43px
        }
    }

    .player-index-class-page .player-name-container {
        min-width: 266px;
        padding-left: 8px
    }

    @media(max-width: 1023.98px) {
        .player-index-class-page .player-name-container {
            min-width: 190px
        }
    }

    .player-index-class-page .player-page-name {
        font-weight: 500;
        font-size: 16px;
        line-height: 24px
    }

    @media(max-width: 1023.98px) {
        .player-index-class-page .player-page-name {
            font-size: 14px;
            line-height: 21px
        }
    }

    .player-index-class-page .match-container {
        min-width: 200px;
        font-size: 16px;
        line-height: 24px
    }

    @media(max-width: 1023.98px) {
        .player-index-class-page .match-container {
            font-size: 12px;
            line-height: 18px;
            letter-spacing: .1px
        }
    }

    .player-class-switcher-container {
        padding: 12px;
        display: flex;
        flex-wrap: row;
        overflow: auto
    }

    .player-index-class-btn {
        display: inline-block;
        font-size: 12px;
        background-color: #f1f2f3;
        padding: 0 12px;
        margin: 0 0 0 4px;
        white-space: nowrap
    }

    .player-index-class-active {
        background: rgba(3, 169, 244, .08)
    }

    .mobile_header-player_index {
        height: 56px;
        width: 100%;
        border-radius: 0;
        border: none;
        position: relative;
        background-color: #03a9f4;
        color: #000;
        display: flex;
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        padding: 16px
    }

    .more-option-bottomsheet {
        z-index: 1100;
        position: fixed;
        width: 100vw;
        min-height: 100vh;
        background-color: rgba(43, 44, 45, .7);
        top: 0;
        left: 0
    }

    .more-options-player-index {
        z-index: 1100;
        position: fixed;
        width: 100%;
        bottom: 0;
        background-color: #fff !important;
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        border-radius: 10px 10px 0px 0px;
        opacity: 1
    }

    .more-options-player-index .cancel {
        position: fixed;
        right: 14px;
        width: 20px;
        transform: translateY(-20px);
        font-size: 24px;
        color: #2b2c2d;
        cursor: pointer
    }

    @media(max-width: 1023.98px) {
        .more-options-player-index .cancel {
            position: fixed
        }
    }

    .all-countries {
        height: 100vh;
        overflow: auto;
        border-radius: 0;
        z-index: 1100;
        grid-gap: 0;
        padding: 1.5rem;
        top: 0
    }

    .all-countries .cancel {
        position: absolute;
        right: 12px;
        top: 24px;
        width: 20px;
        height: 20px;
        font-size: 24px;
        color: #2b2c2d;
        cursor: pointer
    }

    @media(max-width: 1023.98px) {
        .all-countries .cancel {
            position: fixed
        }
    }

    .search-icon-index {
        position: absolute;
        top: 14px;
        left: 14px
    }

    .search-index-input {
        width: 100%;
        padding-left: 32px;
        height: 40px
    }

    .search-index-input ::placeholder {
        color: #a5a6a7;
        font-size: 12px
    }

    .other-teams-search-modal {
        display: flex;
        flex-wrap: wrap;
        background-color: #f9f9fb;
        padding: 1rem
    }

    .other-teams-search-modal a {
        flex: 0 0 32%
    }

    .teams-search-modal {
        display: flex;
        flex-wrap: wrap;
        padding: 1.5rem
    }

    .teams-search-modal a {
        flex: 0 0 32%
    }

    .desktop-search-modal {
        display: flex
    }

    .all-countries-modal {
        border-radius: 0
    }

    .all-countries-modal .modal-content {
        border-radius: 10px
    }

    .all-countries-modal .modal-header .modal-title {
        width: 100%
    }

    .all-countries-modal .modal-header .close {
        top: 40px;
        right: 24px;
        width: 20px
    }

    .all-countries-modal .modal-body {
        padding: 0;
        height: 540px;
        width: 795px;
        overflow: auto
    }

    .all-countries-modal .modal-body::-webkit-scrollbar-thumb {
        background-color: #dcdddf;
        border: 4px solid transparent;
        border-radius: 8px;
        background-clip: padding-box
    }

    .all-countries-modal .modal-body::-webkit-scrollbar {
        width: 16px
    }

    .player-index-sub-navbar {
        border: none;
        margin-top: -1px
    }

    .player-index-sub-navbar .navbar .custom-scroll .navbar-nav {
        width: 100%
    }

    @media(max-width: 1023.98px) {
        .player-index-sub-navbar .navbar .custom-scroll .navbar-nav .nav-item .nav-link {
            text-transform: uppercase
        }
    }

    .player-index-sub-navbar .navbar .custom-scroll .navbar-nav .more-item {
        z-index: 5000;
        position: relative !important;
        top: -2px
    }

    .player-index-sub-navbar .navbar .custom-scroll .navbar-nav .more-item .dropdown-menu {
        display: block;
        opacity: 0;
        transition: all .3s;
        pointer-events: none
    }

    .player-index-sub-navbar .navbar .custom-scroll .navbar-nav .more-item .dropdown-menu ul {
        width: 100%
    }

    .player-index-sub-navbar .navbar .custom-scroll .navbar-nav .more-item .dropdown-menu ul .dropdown-item {
        width: 100%
    }

    .player-index-sub-navbar .navbar .custom-scroll .navbar-nav .more-item .dropdown-menu ul .dropdown-item:hover {
        font-family: "BentonSans-Bold", Arial, "Noto Sans", sans-serif;
        font-weight: bold;
        color: #2b2c2d
    }

    .player-index-sub-navbar .navbar .custom-scroll .navbar-nav .more-item .dropdown-menu ul .dropdown-item.active {
        background-color: #fff !important
    }

    .player-index-sub-navbar .navbar .custom-scroll .navbar-nav .more-item:hover .dropdown-menu {
        opacity: 1;
        background-color: #fff !important;
        pointer-events: all
    }

    .player-index-sub-navbar .navbar .custom-scroll .navbar-nav.space-out {
        display: flex;
        justify-content: space-between
    }

    .sub-nav-relative {
        position: relative;
        z-index: 998
    }

    @media(max-width: 1023.98px) {
        .deathpage-dd .ci-dd__menu {
            left: inherit;
            right: 0
        }
    }

    .right-widget-mobile {
        padding-top: 20px;
        padding-right: 6px
    }

    .right-widget-desktop {
        margin-top: 32px;
        padding-right: 22px
    }

    .no-player-index {
        padding-top: 70px;
        padding-bottom: 70px
    }

    @media(max-width: 1023.98px) {
        .no-player-index {
            padding-top: 60px;
            padding-bottom: 40px
        }
    }

    .player-page-name {
        line-height: 28px
    }

    @media(max-width: 1023.98px) {
        .player-page-name {
            font-size: 16px
        }
    }

    .player-index-layout {
        display: grid;
        grid-template-columns: 300px calc(100% - 324px) !important;
        grid-gap: 16px
    }

    /* @charset"UTF-8"; */

    .icon-external-outline-after:after,
    .icon-external-outline-before:before {
        content: ""
    }

    .icon-external-outline2-after:after,
    .icon-external-outline2-before:before {
        content: ""
    }

    .icon-arrow-up-solid-after:after,
    .icon-arrow-up-solid-before:before {
        content: "⬆"
    }

    .icon-caret-left-outline-after:after,
    .icon-caret-left-outline-before:before {
        content: ""
    }

    .icon-caret-right-outline-after:after,
    .icon-caret-right-outline-before:before {
        content: ""
    }

    .icon-star-solid-after:after,
    .icon-star-solid-before:before {
        content: "ü"
    }

    .icon-check-solid-after:after,
    .icon-check-solid-before:before {
        content: ""
    }

    .icon-search-outline-after:after,
    .icon-search-outline-before:before {
        content: "§"
    }

    .icon-search-solid-after:after,
    .icon-search-solid-before:before {
        content: "•"
    }

    .icon-search-thin-solid-after:after,
    .icon-search-thin-solid-before:before {
        content: ""
    }

    .icon-filter-outline-after:after,
    .icon-filter-outline-before:before {
        content: ""
    }

    .icon-close-solid-after:after,
    .icon-close-solid-before:before {
        content: ""
    }

    .icon-caret-down-outline-after:after,
    .icon-caret-down-outline-before:before {
        content: ""
    }

    .icon-caret-sm-down-after:after,
    .icon-caret-sm-down-before:before {
        content: ""
    }

    .icon-caret-sm-up-after:after,
    .icon-caret-sm-up-before:before {
        content: ""
    }

    .icon-caret-sm-right-after:after,
    .icon-caret-sm-right-before:before {
        content: ""
    }

    .icon-caret-sm2-right-after:after,
    .icon-caret-sm2-right-before:before {
        content: ""
    }

    .icon-caret-sm2-down-after:after,
    .icon-caret-sm2-down-before:before {
        content: ""
    }

    .icon-play-arrow-solid-after:after,
    .icon-play-arrow-solid-before:before {
        content: ""
    }

    .icon-games-solid-after:after,
    .icon-games-solid-before:before {
        content: "n"
    }

    .icon-games-outline-after:after,
    .icon-games-outline-before:before {
        content: "m"
    }

    .icon-calendar-outline-after:after,
    .icon-calendar-outline-before:before {
        content: "˚"
    }

    .icon-plus-solid-after:after,
    .icon-plus-solid-before:before {
        content: "";
        content: ""
    }

    .icon-more-after:after,
    .icon-more-before:before {
        content: ""
    }

    .icon-alert-solid-after:after,
    .icon-alert-solid-before:before {
        content: "ì"
    }

    .icon-shield-outline-after:after,
    .icon-shield-outline-before:before {
        content: ""
    }

    .icon-rss-solid-after:after,
    .icon-rss-solid-before:before {
        content: ""
    }

    .icon-cricket-outline-after:after,
    .icon-cricket-outline-before:before {
        content: "G"
    }

    .icon-boxed-arrow-left-solid-after:after,
    .icon-boxed-arrow-left-solid-before:before {
        content: "ß"
    }

    .icon-share-solid-after:after,
    .icon-share-solid-before:before {
        content: "©"
    }

    .icon-info-outline-after:after,
    .icon-info-outline-before:before {
        content: "≈"
    }

    .icon-watch-live-solid-after:after,
    .icon-watch-live-solid-before:before {
        content: "◊"
    }

    .icon-news-outline-after:after,
    .icon-news-outline-before:before {
        content: ""
    }

    .icon-news-solid-after:after,
    .icon-news-solid-before:before {
        content: ""
    }

    .icon-play-solid-after:after,
    .icon-play-solid-before:before {
        content: ""
    }

    .icon-arrow-right-outline-after:after,
    .icon-arrow-right-outline-before:before {
        content: "→"
    }

    .icon-facebook-solid-after:after,
    .icon-facebook-solid-before:before {
        content: ""
    }

    .icon-twitter-solid-after:after,
    .icon-twitter-solid-before:before {
        content: ""
    }

    .icon-facebook-messenger-solid-after:after,
    .icon-facebook-messenger-solid-before:before {
        content: ""
    }

    .icon-whatsapp-solid-after:after,
    .icon-whatsapp-solid-before:before {
        content: ""
    }

    .icon-shield-solid-after:after,
    .icon-shield-solid-before:before {
        content: ""
    }

    .icon-pinterest-solid-after:after,
    .icon-pinterest-solid-before:before {
        content: ""
    }

    .icon-email-solid-after:after,
    .icon-email-solid-before:before {
        content: "@"
    }

    .icon-print-solid-after:after,
    .icon-print-solid-before:before {
        content: "°"
    }

    .icon-play02-outline-after:after,
    .icon-play02-outline-before:before {
        content: "³"
    }

    .icon-triple-line-outline-after:after,
    .icon-triple-line-outline-before:before {
        content: ""
    }

    .icon-home-outline-after:after,
    .icon-home-outline-before:before {
        content: "ñ"
    }

    .icon-edit-outline-after:after,
    .icon-edit-outline-before:before {
        content: "ä"
    }

    .icon-graph-vertical-outline-after:after,
    .icon-graph-vertical-outline-before:before {
        content: "q"
    }

    .icon-twitter-more-solid-after:after,
    .icon-twitter-more-solid-before:before {
        content: ""
    }

    .icon-arrow-left-solid-after:after,
    .icon-arrow-left-solid-before:before {
        content: "⬅"
    }

    .icon-caret-sm2-up-after:after,
    .icon-caret-sm2-up-before:before {
        content: ""
    }

    .icon-caret-down-solid-after:after,
    .icon-caret-down-solid-before:before {
        content: ""
    }

    .icon-double-arrow-left-outline-after:after,
    .icon-double-arrow-left-outline-before:before {
        content: ""
    }

    .icon-double-arrow-right-outline-after:after,
    .icon-double-arrow-right-outline-before:before {
        content: ""
    }

    .icon-scores01-outline-after:after,
    .icon-scores01-outline-before:before {
        content: "Δ"
    }

    .icon-reset-solid-after:after,
    .icon-reset-solid-before:before {
        content: ""
    }

    .icon-arrow-right-solid-after:after,
    .icon-arrow-right-solid-before:before {
        content: "➡"
    }

    .icon-caret-up-solid-after:after,
    .icon-caret-up-solid-before:before {
        content: ""
    }

    .icon-play-outline-after:after,
    .icon-play-outline-before:before {
        content: ""
    }

    @font-face {
        font-family: BentonSans;
        src: url(/static/fonts/BentonSans/BentonSans-Regular/BentonSans-Regular.woff) format("woff"), url(/static/fonts/BentonSans/BentonSans-Regular/BentonSans-Regular.ttf) format("ttf"), url(/static/fonts/BentonSans/BentonSans-Regular/BentonSans-Regular.eot) format("eot");
        font-weight: 400;
        font-style: normal;
        font-display: swap
    }

    @font-face {
        font-family: BentonSans-Bold;
        src: url(/static/fonts/BentonSans/BentonSans-Bold/BentonSans-Bold.woff) format("woff"), url(/static/fonts/BentonSans/BentonSans-Bold/BentonSans-Bold.ttf) format("ttf"), url(/static/fonts/BentonSans/BentonSans-Bold/BentonSans-Bold.eot) format("eot");
        font-weight: 700;
        font-style: normal;
        font-display: swap
    }

    @font-face {
        font-family: BentonSans-Medium;
        src: url(/static/fonts/BentonSans/BentonSans-Medium/BentonSans-Medium.woff) format("woff"), url(/static/fonts/BentonSans/BentonSans-Medium/BentonSans-Medium.ttf) format("ttf"), url(/static/fonts/BentonSans/BentonSans-Medium/BentonSans-Medium.eot) format("eot");
        font-weight: 400;
        font-style: normal;
        font-display: swap
    }

    @font-face {
        font-family: ESPNIcons;
        src: url(/static/fonts/EspnIcon/ESPNIcons.woff2) format("woff2"), url(/static/fonts/EspnIcon/ESPNIcons.woff) format("woff"), url(/static/fonts/EspnIcon/ESPNIcons.ttf) format("truetype");
        font-weight: 400;
        font-style: normal;
        font-display: swap
    }

    @font-face {
        font-family: BentonSans-RegularItalic;
        src: url(/static/fonts/BentonSans/BentonSans-Italic/BentonSans-RegularItalic.woff2) format("woff2"), url(/static/fonts/BentonSans/BentonSans-Italic/BentonSans-RegularItalic.woff) format("woff");
        font-weight: 400;
        font-style: italic;
        font-display: swap
    }

    *,
    :after,
    :before {
        box-sizing: border-box
    }

    html {
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
    }

    article,
    aside,
    figcaption,
    figure,
    footer,
    header,
    main,
    nav,
    section {
        display: block
    }

    body {
        margin: 0;
        font-family: BentonSans, Arial, Noto Sans, sans-serif;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #48494a;
        text-align: left;
        background-color: #fff
    }

    hr {
        box-sizing: content-box;
        height: 0;
        overflow: visible
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-top: 0;
        margin-bottom: .5rem
    }

    p {
        margin-top: 0
    }

    address,
    p {
        margin-bottom: 1rem
    }

    address {
        font-style: normal;
        line-height: inherit
    }

    ul {
        margin-top: 0;
        margin-bottom: 1rem
    }

    ul ul {
        margin-bottom: 0
    }

    blockquote {
        margin: 0 0 1rem
    }

    b,
    strong {
        font-weight: bolder
    }

    small {
        font-size: 80%
    }

    sub {
        position: relative;
        font-size: 75%;
        line-height: 0;
        vertical-align: baseline;
        bottom: -.25em
    }

    a {
        color: #03a9f4;
        background-color: transparent
    }

    a,
    a:hover {
        text-decoration: none
    }

    a:hover {
        color: #0278bb
    }

    a:not([href]):not([class]),
    a:not([href]):not([class]):hover {
        color: inherit;
        text-decoration: none
    }

    code,
    pre {
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
        font-size: 1em
    }

    pre {
        margin-top: 0;
        margin-bottom: 1rem;
        overflow: auto;
        -ms-overflow-style: scrollbar
    }

    figure {
        margin: 0 0 1rem
    }

    img {
        border-style: none
    }

    img,
    svg {
        vertical-align: middle
    }

    svg {
        overflow: hidden
    }

    table {
        border-collapse: collapse
    }

    caption {
        padding-top: .75rem;
        padding-bottom: .75rem;
        color: #a5a6a7;
        text-align: left;
        caption-side: bottom
    }

    th {
        text-align: inherit;
        text-align: -webkit-match-parent
    }

    label {
        display: inline-block;
        margin-bottom: .5rem
    }

    button {
        border-radius: 0
    }

    button:focus:not(:focus-visible) {
        outline: 0
    }

    button,
    input,
    select,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit
    }

    button,
    input {
        overflow: visible
    }

    button,
    select {
        text-transform: none
    }

    [role=button] {
        cursor: pointer
    }

    select {
        word-wrap: normal
    }

    [type=button],
    [type=reset],
    [type=submit],
    button {
        -webkit-appearance: button
    }

    [type=button]:not(:disabled),
    [type=reset]:not(:disabled),
    [type=submit]:not(:disabled),
    button:not(:disabled) {
        cursor: pointer
    }

    [type=button]::-moz-focus-inner,
    [type=reset]::-moz-focus-inner,
    [type=submit]::-moz-focus-inner,
    button::-moz-focus-inner {
        padding: 0;
        border-style: none
    }

    input[type=checkbox] {
        box-sizing: border-box;
        padding: 0
    }

    textarea {
        overflow: auto;
        resize: vertical
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
        white-space: normal
    }

    @media(max-width:1200px) {
        legend {
            font-size: calc(1.275rem + .3vw)
        }
    }

    progress {
        vertical-align: baseline
    }

    [type=number]::-webkit-inner-spin-button,
    [type=number]::-webkit-outer-spin-button {
        height: auto
    }

    [type=search] {
        outline-offset: -2px;
        -webkit-appearance: none
    }

    [type=search]::-webkit-search-decoration {
        -webkit-appearance: none
    }

    summary {
        display: list-item;
        cursor: pointer
    }

    template {
        display: none
    }

    [hidden] {
        display: none !important
    }

    .h1,
    .h2,
    .h3,
    .h4,
    .h5,
    .h6,
    .mobile-dropdown .dropdown-header .header-title,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-bottom: .5rem;
        font-family: BentonSans-Bold, Arial, Noto Sans, sans-serif;
        font-weight: 700;
        line-height: 1.2;
        color: #2b2c2d
    }

    @media(max-width:1200px) {

        .h1,
        h1 {
            font-size: calc(1.325rem + .9vw)
        }

        .h2,
        h2 {
            font-size: calc(1.275rem + .3vw)
        }
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, .1)
    }

    .home-page-wrapper .match-scorecard-table td,
    .home-page-wrapper .match-scorecard-table td a,
    .home-page-wrapper .match-scorecard-table th,
    .modal-header .modal-description,
    .primary-navbar .nav-link,
    .sidebar-head>.head-title,
    .small,
    .widget-tab,
    small {
        font-size: 80%;
        font-weight: 400
    }

    .list-unstyled {
        padding-left: 0;
        list-style: none
    }

    .blockquote {
        margin-bottom: 1rem;
        font-size: 1.25rem
    }

    .img-thumbnail {
        padding: 0;
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, .1);
        border-radius: 8px;
        max-width: 100%;
        height: auto
    }

    .figure {
        display: inline-block
    }

    code {
        font-size: 87.5%;
        color: #e83e8c;
        word-wrap: break-word
    }

    a>code {
        color: inherit
    }

    pre {
        display: block;
        font-size: 87.5%;
        color: #2b2c2d
    }

    pre code {
        font-size: inherit;
        color: inherit;
        word-break: normal
    }

    .container,
    .container-fluid {
        width: 100%;
        padding-right: 10px;
        padding-left: 10px;
        margin-right: auto;
        margin-left: auto
    }

    @media(min-width:414px) {
        .container {
            max-width: 382px
        }
    }

    @media(min-width:768px) {
        .container {
            max-width: 720px
        }
    }

    @media(min-width:1024px) {
        .container {
            max-width: 960px
        }
    }

    @media(min-width:1280px) {
        .container {
            max-width: 1240px
        }
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -10px;
        margin-left: -10px
    }

    .no-gutters,
    .site-header .mobile-leagues-container>.row {
        margin-right: 0;
        margin-left: 0
    }

    .no-gutters>.col,
    .no-gutters>[class*=col-],
    .site-header .mobile-leagues-container>.row>.col,
    .site-header .mobile-leagues-container>.row>[class*=col-] {
        padding-right: 0;
        padding-left: 0
    }

    .col,
    .col-1,
    .col-2,
    .col-3,
    .col-4,
    .col-5,
    .col-6,
    .col-7,
    .col-8,
    .col-9,
    .col-10,
    .col-11,
    .col-12,
    .col-13,
    .col-14,
    .col-15,
    .col-16,
    .col-auto,
    .col-lg,
    .col-lg-1,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12,
    .col-lg-13,
    .col-lg-14,
    .col-lg-15,
    .col-lg-16,
    .col-lg-auto,
    .col-md,
    .col-md-1,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md-13,
    .col-md-14,
    .col-md-15,
    .col-md-16,
    .col-md-auto,
    .col-sm,
    .col-sm-1,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm-13,
    .col-sm-14,
    .col-sm-15,
    .col-sm-16,
    .col-sm-auto,
    .col-xl,
    .col-xl-1,
    .col-xl-2,
    .col-xl-3,
    .col-xl-4,
    .col-xl-5,
    .col-xl-6,
    .col-xl-7,
    .col-xl-8,
    .col-xl-9,
    .col-xl-10,
    .col-xl-11,
    .col-xl-12,
    .col-xl-13,
    .col-xl-14,
    .col-xl-15,
    .col-xl-16,
    .col-xl-auto {
        position: relative;
        width: 100%;
        padding-right: 10px;
        padding-left: 10px
    }

    .col {
        flex-basis: 0;
        flex-grow: 1;
        max-width: 100%
    }

    .col-auto {
        flex: 0 0 auto;
        width: auto;
        max-width: 100%
    }

    .col-1 {
        flex: 0 0 6.25%;
        max-width: 6.25%
    }

    .col-2 {
        flex: 0 0 12.5%;
        max-width: 12.5%
    }

    .col-3 {
        flex: 0 0 18.75%;
        max-width: 18.75%
    }

    .col-4 {
        flex: 0 0 25%;
        max-width: 25%
    }

    .col-5 {
        flex: 0 0 31.25%;
        max-width: 31.25%
    }

    .col-6 {
        flex: 0 0 37.5%;
        max-width: 37.5%
    }

    .col-7 {
        flex: 0 0 43.75%;
        max-width: 43.75%
    }

    .col-8 {
        flex: 0 0 50%;
        max-width: 50%
    }

    .col-9 {
        flex: 0 0 56.25%;
        max-width: 56.25%
    }

    .col-10 {
        flex: 0 0 62.5%;
        max-width: 62.5%
    }

    .col-11 {
        flex: 0 0 68.75%;
        max-width: 68.75%
    }

    .col-12 {
        flex: 0 0 75%;
        max-width: 75%
    }

    .col-13 {
        flex: 0 0 81.25%;
        max-width: 81.25%
    }

    .col-14 {
        flex: 0 0 87.5%;
        max-width: 87.5%
    }

    .col-15 {
        flex: 0 0 93.75%;
        max-width: 93.75%
    }

    .col-16 {
        flex: 0 0 100%;
        max-width: 100%
    }

    @media(min-width:414px) {
        .col-sm {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%
        }

        .col-sm-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%
        }

        .col-sm-1 {
            flex: 0 0 6.25%;
            max-width: 6.25%
        }

        .col-sm-2 {
            flex: 0 0 12.5%;
            max-width: 12.5%
        }

        .col-sm-3 {
            flex: 0 0 18.75%;
            max-width: 18.75%
        }

        .col-sm-4 {
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-sm-5 {
            flex: 0 0 31.25%;
            max-width: 31.25%
        }

        .col-sm-6 {
            flex: 0 0 37.5%;
            max-width: 37.5%
        }

        .col-sm-7 {
            flex: 0 0 43.75%;
            max-width: 43.75%
        }

        .col-sm-8 {
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-sm-9 {
            flex: 0 0 56.25%;
            max-width: 56.25%
        }

        .col-sm-10 {
            flex: 0 0 62.5%;
            max-width: 62.5%
        }

        .col-sm-11 {
            flex: 0 0 68.75%;
            max-width: 68.75%
        }

        .col-sm-12 {
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-sm-13 {
            flex: 0 0 81.25%;
            max-width: 81.25%
        }

        .col-sm-14 {
            flex: 0 0 87.5%;
            max-width: 87.5%
        }

        .col-sm-15 {
            flex: 0 0 93.75%;
            max-width: 93.75%
        }

        .col-sm-16 {
            flex: 0 0 100%;
            max-width: 100%
        }
    }

    @media(min-width:768px) {
        .col-md {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%
        }

        .col-md-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%
        }

        .col-md-1 {
            flex: 0 0 6.25%;
            max-width: 6.25%
        }

        .col-md-2 {
            flex: 0 0 12.5%;
            max-width: 12.5%
        }

        .col-md-3 {
            flex: 0 0 18.75%;
            max-width: 18.75%
        }

        .col-md-4 {
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-md-5 {
            flex: 0 0 31.25%;
            max-width: 31.25%
        }

        .col-md-6 {
            flex: 0 0 37.5%;
            max-width: 37.5%
        }

        .col-md-7 {
            flex: 0 0 43.75%;
            max-width: 43.75%
        }

        .col-md-8 {
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-md-9 {
            flex: 0 0 56.25%;
            max-width: 56.25%
        }

        .col-md-10 {
            flex: 0 0 62.5%;
            max-width: 62.5%
        }

        .col-md-11 {
            flex: 0 0 68.75%;
            max-width: 68.75%
        }

        .col-md-12 {
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-md-13 {
            flex: 0 0 81.25%;
            max-width: 81.25%
        }

        .col-md-14 {
            flex: 0 0 87.5%;
            max-width: 87.5%
        }

        .col-md-15 {
            flex: 0 0 93.75%;
            max-width: 93.75%
        }

        .col-md-16 {
            flex: 0 0 100%;
            max-width: 100%
        }
    }

    @media(min-width:1024px) {
        .col-lg {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%
        }

        .col-lg-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%
        }

        .col-lg-1 {
            flex: 0 0 6.25%;
            max-width: 6.25%
        }

        .col-lg-2 {
            flex: 0 0 12.5%;
            max-width: 12.5%
        }

        .col-lg-3 {
            flex: 0 0 18.75%;
            max-width: 18.75%
        }

        .col-lg-4 {
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-lg-5 {
            flex: 0 0 31.25%;
            max-width: 31.25%
        }

        .col-lg-6 {
            flex: 0 0 37.5%;
            max-width: 37.5%
        }

        .col-lg-7 {
            flex: 0 0 43.75%;
            max-width: 43.75%
        }

        .col-lg-8 {
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-lg-9 {
            flex: 0 0 56.25%;
            max-width: 56.25%
        }

        .col-lg-10 {
            flex: 0 0 62.5%;
            max-width: 62.5%
        }

        .col-lg-11 {
            flex: 0 0 68.75%;
            max-width: 68.75%
        }

        .col-lg-12 {
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-lg-13 {
            flex: 0 0 81.25%;
            max-width: 81.25%
        }

        .col-lg-14 {
            flex: 0 0 87.5%;
            max-width: 87.5%
        }

        .col-lg-15 {
            flex: 0 0 93.75%;
            max-width: 93.75%
        }

        .col-lg-16 {
            flex: 0 0 100%;
            max-width: 100%
        }
    }

    @media(min-width:1280px) {
        .col-xl {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%
        }

        .col-xl-auto {
            flex: 0 0 auto;
            width: auto;
            max-width: 100%
        }

        .col-xl-1 {
            flex: 0 0 6.25%;
            max-width: 6.25%
        }

        .col-xl-2 {
            flex: 0 0 12.5%;
            max-width: 12.5%
        }

        .col-xl-3 {
            flex: 0 0 18.75%;
            max-width: 18.75%
        }

        .col-xl-4 {
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-xl-5 {
            flex: 0 0 31.25%;
            max-width: 31.25%
        }

        .col-xl-6 {
            flex: 0 0 37.5%;
            max-width: 37.5%
        }

        .col-xl-7 {
            flex: 0 0 43.75%;
            max-width: 43.75%
        }

        .col-xl-8 {
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-xl-9 {
            flex: 0 0 56.25%;
            max-width: 56.25%
        }

        .col-xl-10 {
            flex: 0 0 62.5%;
            max-width: 62.5%
        }

        .col-xl-11 {
            flex: 0 0 68.75%;
            max-width: 68.75%
        }

        .col-xl-12 {
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-xl-13 {
            flex: 0 0 81.25%;
            max-width: 81.25%
        }

        .col-xl-14 {
            flex: 0 0 87.5%;
            max-width: 87.5%
        }

        .col-xl-15 {
            flex: 0 0 93.75%;
            max-width: 93.75%
        }

        .col-xl-16 {
            flex: 0 0 100%;
            max-width: 100%
        }
    }

    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #48494a;
        background-color: transparent
    }

    .table td,
    .table th {
        padding: .75rem;
        vertical-align: top;
        border-top: 1px solid #edeef0
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #edeef0
    }

    .table tbody+tbody {
        border-top: 2px solid #edeef0
    }

    .table-sm td,
    .table-sm th {
        padding: .3rem
    }

    .table-bordered,
    .table-bordered td,
    .table-bordered th {
        border: 1px solid #edeef0
    }

    .table-bordered thead td,
    .table-bordered thead th {
        border-bottom-width: 2px
    }

    .table .thead-light th {
        color: #2b2c2d;
        background-color: transparent;
        border-color: #edeef0
    }

    .table-responsive>.table-bordered {
        border: 0
    }

    .form-control {
        display: block;
        width: 100%;
        height: calc(1.5em + 1rem + 2px);
        padding: .5rem .75rem;
        font-size: .875rem;
        font-weight: 400;
        line-height: 1.5;
        color: #48494a;
        background-color: transparent;
        background-clip: padding-box;
        border: 1px solid #dcdddf;
        border-radius: 0;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out
    }

    @media(prefers-reduced-motion:reduce) {
        .form-control {
            transition: none
        }
    }

    .form-control::-ms-expand {
        background-color: transparent;
        border: 0
    }

    .form-control:-moz-focusring {
        color: transparent;
        text-shadow: 0 0 0 #48494a
    }

    .form-control:focus {
        color: #48494a;
        background-color: transparent;
        border-color: #03a9f4;
        outline: 0;
        box-shadow: none
    }

    .form-control:-ms-input-placeholder {
        color: #6c6d6f;
        opacity: 1
    }

    .form-control::placeholder {
        color: #6c6d6f;
        opacity: 1
    }

    .form-control:disabled {
        background-color: #f9f9fb;
        opacity: 1
    }

    input[type=date].form-control,
    input[type=month].form-control,
    input[type=time].form-control {
        -webkit-appearance: none;
        appearance: none
    }

    select.form-control:focus::-ms-value {
        color: #48494a;
        background-color: transparent
    }

    .col-form-label {
        margin-bottom: 0;
        font-size: inherit
    }

    .col-form-label,
    .col-form-label-lg {
        padding-top: calc(.5rem + 1px);
        padding-bottom: calc(.5rem + 1px);
        line-height: 1.5
    }

    .col-form-label-lg {
        font-size: 1.125rem
    }

    .col-form-label-sm {
        padding-top: calc(.25rem + 1px);
        padding-bottom: calc(.25rem + 1px);
        font-size: .875rem;
        line-height: 1.5
    }

    select.form-control[multiple],
    select.form-control[size],
    textarea.form-control {
        height: auto
    }

    .form-group {
        margin-bottom: 1rem
    }

    .form-text {
        display: block;
        margin-top: .25rem
    }

    .form-check {
        position: relative;
        display: block;
        padding-left: 1.25rem
    }

    .form-check-input {
        position: absolute;
        margin-top: .3rem;
        margin-left: -1.25rem
    }

    .form-check-input:disabled~.form-check-label,
    .form-check-input[disabled]~.form-check-label {
        color: #a5a6a7
    }

    .form-check-label {
        margin-bottom: 0
    }

    .invalid-feedback {
        display: none;
        width: 100%;
        margin-top: .25rem;
        font-size: 80%;
        color: #c00
    }

    .is-invalid~.invalid-feedback {
        display: block
    }

    .form-control.is-invalid {
        border-color: #c00;
        padding-right: calc(1.5em + 1rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23cc0000' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23cc0000' stroke='none'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right calc(.375em + .25rem) center;
        background-size: calc(.75em + .5rem) calc(.75em + .5rem)
    }

    .form-control.is-invalid:focus {
        border-color: #c00;
        box-shadow: 0 0 0 0 rgba(204, 0, 0, .25)
    }

    textarea.form-control.is-invalid {
        padding-right: calc(1.5em + 1rem);
        background-position: top calc(.375em + .25rem) right calc(.375em + .25rem)
    }

    .form-check-input.is-invalid~.form-check-label {
        color: #c00
    }

    .form-check-input.is-invalid~.invalid-feedback {
        display: block
    }

    .form-inline {
        display: flex;
        flex-flow: row wrap;
        align-items: center
    }

    .form-inline .form-check {
        width: 100%
    }

    @media(min-width:414px) {
        .form-inline label {
            justify-content: center
        }

        .form-inline .form-group,
        .form-inline label {
            display: flex;
            align-items: center;
            margin-bottom: 0
        }

        .form-inline .form-group {
            flex: 0 0 auto;
            flex-flow: row wrap
        }

        .form-inline .form-control {
            display: inline-block;
            width: auto;
            vertical-align: middle
        }

        .form-inline .input-group {
            width: auto
        }

        .form-inline .form-check {
            display: flex;
            align-items: center;
            justify-content: center;
            width: auto;
            padding-left: 0
        }

        .form-inline .form-check-input {
            position: relative;
            flex-shrink: 0;
            margin-top: 0;
            margin-right: .25rem;
            margin-left: 0
        }
    }

    .btn {
        display: inline-block;
        font-family: BentonSans-Bold, Arial, Noto Sans, sans-serif;
        font-weight: 700;
        color: #48494a;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: 1px 2.1rem;
        font-size: 1rem;
        line-height: 262%;
        border-radius: 100px;
        transition: color .5s ease-in-out, background-color .5s ease-in-out, border-color .5s ease-in-out, box-shadow .5s ease-in-out
    }

    @media(prefers-reduced-motion:reduce) {
        .btn {
            transition: none
        }
    }

    .btn:hover {
        color: #48494a;
        text-decoration: none
    }

    .btn.focus,
    .btn:focus {
        outline: 0;
        box-shadow: none
    }

    .btn.disabled,
    .btn:disabled {
        opacity: 1
    }

    .btn:not(:disabled):not(.disabled) {
        cursor: pointer
    }

    a.btn.disabled {
        pointer-events: none
    }

    .btn-primary {
        color: #fff;
        background-color: #03a9f4;
        border-color: #03a9f4
    }

    .btn-primary.focus,
    .btn-primary:focus,
    .btn-primary:hover {
        color: #fff;
        background-color: #038fce;
        border-color: #0286c2
    }

    .btn-primary.focus,
    .btn-primary:focus {
        box-shadow: 0 0 0 .2rem rgba(41, 182, 246, .5)
    }

    .btn-primary.disabled,
    .btn-primary:disabled {
        color: #fff;
        background-color: #03a9f4;
        border-color: #03a9f4
    }

    .btn-primary:not(:disabled):not(.disabled).active,
    .btn-primary:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #0286c2;
        border-color: #027db5
    }

    .btn-primary:not(:disabled):not(.disabled).active:focus,
    .btn-primary:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(41, 182, 246, .5)
    }

    .btn-outline-primary {
        color: #03a9f4;
        border-color: #03a9f4
    }

    .btn-outline-primary:hover {
        color: #fff;
        background-color: #03a9f4;
        border-color: #03a9f4
    }

    .btn-outline-primary.focus,
    .btn-outline-primary:focus {
        box-shadow: 0 0 0 .2rem rgba(3, 169, 244, .5)
    }

    .btn-outline-primary.disabled,
    .btn-outline-primary:disabled {
        color: #03a9f4;
        background-color: transparent
    }

    .btn-outline-primary:not(:disabled):not(.disabled).active,
    .btn-outline-primary:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #03a9f4;
        border-color: #03a9f4
    }

    .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
    .btn-outline-primary:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(3, 169, 244, .5)
    }

    .btn-outline-light {
        color: #f9f9fb;
        border-color: #f9f9fb
    }

    .btn-outline-light:hover {
        color: #2b2c2d;
        background-color: #f9f9fb;
        border-color: #f9f9fb
    }

    .btn-outline-light.focus,
    .btn-outline-light:focus {
        box-shadow: 0 0 0 .2rem rgba(249, 249, 251, .5)
    }

    .btn-outline-light.disabled,
    .btn-outline-light:disabled {
        color: #f9f9fb;
        background-color: transparent
    }

    .btn-outline-light:not(:disabled):not(.disabled).active,
    .btn-outline-light:not(:disabled):not(.disabled):active {
        color: #2b2c2d;
        background-color: #f9f9fb;
        border-color: #f9f9fb
    }

    .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .btn-outline-light:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(249, 249, 251, .5)
    }

    .btn-outline-dark {
        border-color: #48494a
    }

    .btn-outline-dark:hover {
        color: #fff;
        background-color: #48494a;
        border-color: #48494a
    }

    .btn-outline-dark.focus,
    .btn-outline-dark:focus {
        box-shadow: 0 0 0 .2rem rgba(72, 73, 74, .5)
    }

    .btn-outline-dark.disabled,
    .btn-outline-dark:disabled {
        color: #48494a;
        background-color: transparent
    }

    .btn-outline-dark:not(:disabled):not(.disabled).active,
    .btn-outline-dark:not(:disabled):not(.disabled):active {
        color: #fff;
        background-color: #48494a;
        border-color: #48494a
    }

    .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .btn-outline-dark:not(:disabled):not(.disabled):active:focus {
        box-shadow: 0 0 0 .2rem rgba(72, 73, 74, .5)
    }

    .btn-sm {
        padding: 1px 1.1rem;
        font-size: .75rem;
        line-height: 250%;
        border-radius: 100px
    }

    .btn-block {
        display: block;
        width: 100%
    }

    .btn-block+.btn-block {
        margin-top: .5rem
    }

    input[type=button].btn-block,
    input[type=reset].btn-block,
    input[type=submit].btn-block {
        width: 100%
    }

    .fade {
        transition: opacity .15s linear
    }

    @media(prefers-reduced-motion:reduce) {
        .fade {
            transition: none
        }
    }

    .fade:not(.show) {
        opacity: 0
    }

    .collapse:not(.show) {
        display: none
    }

    .dropdown {
        position: relative
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 10rem;
        padding: .5rem 0;
        margin: .125rem 0 0;
        font-size: 1rem;
        color: #48494a;
        text-align: left;
        list-style: none;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: 10px
    }

    .dropdown-menu-right {
        right: 0;
        left: auto
    }

    .dropdown-item {
        display: block;
        width: 100%;
        padding: .25rem 1.5rem;
        clear: both;
        font-weight: 400;
        color: #2b2c2d;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0
    }

    .dropdown-item:focus,
    .dropdown-item:hover {
        color: #1f1f20;
        text-decoration: none;
        background-color: #f1f2f3
    }

    .dropdown-item.active,
    .dropdown-item:active {
        color: #fff;
        text-decoration: none;
        background-color: #03a9f4
    }

    .dropdown-item.disabled,
    .dropdown-item:disabled {
        color: #cbccce;
        pointer-events: none;
        background-color: transparent
    }

    .dropdown-menu.show {
        display: block
    }

    .dropdown-header {
        display: block;
        padding: .5rem 1.5rem;
        margin-bottom: 0;
        font-size: .875rem;
        color: #a5a6a7;
        white-space: nowrap
    }

    .nav {
        display: flex;
        flex-wrap: wrap;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none
    }

    .nav-link {
        display: block;
        padding: .5rem 1rem
    }

    .nav-link:focus,
    .nav-link:hover {
        text-decoration: none
    }

    .nav-link.disabled {
        color: #a5a6a7;
        pointer-events: none;
        cursor: default
    }

    .nav-tabs {
        border-bottom: 1px solid #edeef0
    }

    .nav-tabs .nav-link {
        margin-bottom: -1px;
        border: 1px solid transparent;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px
    }

    .nav-tabs .nav-link:focus,
    .nav-tabs .nav-link:hover {
        border-color: #f1f2f3 #f1f2f3 #edeef0
    }

    .nav-tabs .nav-link.disabled {
        color: #a5a6a7;
        background-color: transparent;
        border-color: transparent
    }

    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        color: #6c6d6f;
        background-color: #fff;
        border-color: #edeef0 #edeef0 #fff
    }

    .nav-tabs .dropdown-menu {
        margin-top: -1px;
        border-top-left-radius: 0;
        border-top-right-radius: 0
    }

    .nav-fill .nav-item,
    .nav-fill>.nav-link {
        flex: 1 1 auto;
        text-align: center
    }

    .navbar {
        position: relative;
        padding: 0 1.5rem
    }

    .navbar,
    .navbar .container,
    .navbar .container-fluid {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between
    }

    .navbar-brand {
        display: inline-block;
        padding-top: .40625rem;
        padding-bottom: .40625rem;
        margin-right: 1.5rem;
        font-size: 1.125rem;
        line-height: inherit;
        white-space: nowrap
    }

    .navbar-brand:focus,
    .navbar-brand:hover {
        text-decoration: none
    }

    .navbar-nav {
        display: flex;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none
    }

    .navbar-nav .nav-link {
        padding-right: 0;
        padding-left: 0
    }

    .navbar-nav .dropdown-menu {
        position: static;
        float: none
    }

    .navbar-collapse {
        flex-basis: 100%;
        flex-grow: 1;
        align-items: center
    }

    .navbar-toggler {
        padding: .25rem .75rem;
        font-size: 1.125rem;
        line-height: 1;
        background-color: transparent;
        border: 1px solid transparent;
        border-radius: 100px
    }

    .navbar-toggler:focus,
    .navbar-toggler:hover {
        text-decoration: none
    }

    @media(max-width:1023.98px) {

        .navbar-expand-lg>.container,
        .navbar-expand-lg>.container-fluid {
            padding-right: 0;
            padding-left: 0
        }
    }

    @media(min-width:1024px) {
        .navbar-expand-lg {
            flex-flow: row nowrap;
            justify-content: flex-start
        }

        .navbar-expand-lg .navbar-nav {
            flex-direction: row
        }

        .navbar-expand-lg .navbar-nav .dropdown-menu {
            position: absolute
        }

        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: .75rem;
            padding-left: .75rem
        }

        .navbar-expand-lg>.container,
        .navbar-expand-lg>.container-fluid {
            flex-wrap: nowrap
        }

        .navbar-expand-lg .navbar-collapse {
            display: flex !important;
            flex-basis: auto
        }

        .navbar-expand-lg .navbar-toggler {
            display: none
        }
    }

    .navbar-light .navbar-brand,
    .navbar-light .navbar-brand:focus,
    .navbar-light .navbar-brand:hover,
    .navbar-light .navbar-nav .nav-link {
        color: #fff
    }

    .navbar-light .navbar-nav .nav-link:focus,
    .navbar-light .navbar-nav .nav-link:hover {
        color: transparent
    }

    .navbar-light .navbar-nav .nav-link.disabled {
        color: hsla(0, 0%, 100%, .3)
    }

    .navbar-light .navbar-nav .active>.nav-link,
    .navbar-light .navbar-nav .nav-link.active,
    .navbar-light .navbar-nav .nav-link.show,
    .navbar-light .navbar-nav .show>.nav-link {
        color: #fff
    }

    .navbar-light .navbar-toggler {
        color: #fff;
        border-color: rgba(0, 0, 0, .1)
    }

    .card,
    .language-card,
    .notification-card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid transparent;
        border-radius: 10px
    }

    .card>hr,
    .language-card>hr,
    .notification-card>hr {
        margin-right: 0;
        margin-left: 0
    }

    .card>.list-group,
    .language-card>.list-group,
    .notification-card>.list-group {
        border-top: inherit;
        border-bottom: inherit
    }

    .card>.list-group:first-child,
    .language-card>.list-group:first-child,
    .notification-card>.list-group:first-child {
        border-top-width: 0;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px
    }

    .card>.list-group:last-child,
    .language-card>.list-group:last-child,
    .notification-card>.list-group:last-child {
        border-bottom-width: 0;
        border-bottom-right-radius: 10px;
        border-bottom-left-radius: 10px
    }

    .jumbotron {
        padding: 0;
        margin-bottom: 0;
        background-color: #000;
        border-radius: .3rem
    }

    @media(min-width:414px) {
        .jumbotron {
            padding: 0
        }
    }

    .media {
        display: flex;
        align-items: flex-start
    }

    .close {
        float: right;
        font-size: 1.5rem;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        opacity: .5
    }

    @media(max-width:1200px) {
        .close {
            font-size: calc(1.275rem + .3vw)
        }
    }

    .close:hover {
        color: #000;
        text-decoration: none
    }

    .close:not(:disabled):not(.disabled):focus,
    .close:not(:disabled):not(.disabled):hover {
        opacity: .75
    }

    button.close {
        padding: 0;
        background-color: transparent;
        border: 0
    }

    a.close.disabled {
        pointer-events: none
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
        outline: 0
    }

    .modal-dialog {
        position: relative;
        width: auto;
        margin: .5rem;
        pointer-events: none
    }

    .modal.fade .modal-dialog {
        transition: transform .3s ease-out;
        transform: translateY(-50px)
    }

    @media(prefers-reduced-motion:reduce) {
        .modal.fade .modal-dialog {
            transition: none
        }
    }

    .modal.show .modal-dialog {
        transform: none
    }

    .modal-content {
        position: relative;
        display: flex;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: .3rem;
        outline: 0
    }

    .modal-header {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        padding: 1rem;
        border-bottom: 1px solid #edeef0;
        border-top-left-radius: calc(.3rem - 1px);
        border-top-right-radius: calc(.3rem - 1px)
    }

    .modal-header .close {
        padding: 1rem;
        margin: -1rem -1rem -1rem auto
    }

    .modal-title {
        margin-bottom: 0;
        line-height: 1.5
    }

    .modal-body {
        position: relative;
        flex: 1 1 auto;
        padding: 1rem
    }

    @media(min-width:414px) {
        .modal-dialog {
            max-width: 500px;
            margin: 1.75rem auto
        }
    }

    @media(min-width:1024px) {
        .modal-lg {
            max-width: 800px
        }
    }

    .bg-primary,
    .snackbar {
        background-color: #03a9f4 !important
    }

    a.bg-primary:focus,
    a.bg-primary:hover,
    a.snackbar:focus,
    a.snackbar:hover,
    button.bg-primary:focus,
    button.bg-primary:hover,
    button.snackbar:focus,
    button.snackbar:hover {
        background-color: #0286c2 !important
    }

    .bg-light {
        background-color: #f9f9fb !important
    }

    a.bg-light:focus,
    a.bg-light:hover,
    button.bg-light:focus,
    button.bg-light:hover {
        background-color: #dadae7 !important
    }

    .bg-white {
        background-color: #fff !important
    }

    .border {
        border: 1px solid #edeef0 !important
    }

    .border-top {
        border-top: 1px solid #edeef0 !important
    }

    .border-right,
    .sliding-match-cards .view-all-card {
        border-right: 1px solid #edeef0 !important
    }

    .border-bottom,
    .sidebar-head,
    .sidebar-widget .sidebar-widget__title {
        border-bottom: 1px solid #edeef0 !important
    }

    .border-left {
        border-left: 1px solid #edeef0 !important
    }

    .border-0 {
        border: 0 !important
    }

    .border-right-0 {
        border-right: 0 !important
    }

    .border-bottom-0 {
        border-bottom: 0 !important
    }

    .border-left-0 {
        border-left: 0 !important
    }

    .rounded {
        border-radius: 10px !important
    }

    .rounded-circle {
        border-radius: 50% !important
    }

    .rounded-0 {
        border-radius: 0 !important
    }

    .d-none {
        display: none !important
    }

    .d-inline {
        display: inline !important
    }

    .d-inline-block {
        display: inline-block !important
    }

    .d-block {
        display: block !important
    }

    .d-flex {
        display: flex !important
    }

    @media(min-width:414px) {
        .d-sm-inline {
            display: inline !important
        }
    }

    @media(min-width:768px) {
        .d-md-none {
            display: none !important
        }

        .d-md-inline {
            display: inline !important
        }

        .d-md-inline-block {
            display: inline-block !important
        }

        .d-md-block {
            display: block !important
        }
    }

    @media(min-width:1024px) {
        .d-lg-none {
            display: none !important
        }

        .d-lg-block {
            display: block !important
        }
    }

    @media(min-width:1280px) {
        .d-xl-block {
            display: block !important
        }
    }

    .flex-row {
        flex-direction: row !important
    }

    .flex-column {
        flex-direction: column !important
    }

    .flex-wrap {
        flex-wrap: wrap !important
    }

    .flex-grow-1 {
        flex-grow: 1 !important
    }

    .justify-content-start {
        justify-content: flex-start !important
    }

    .justify-content-end {
        justify-content: flex-end !important
    }

    .justify-content-center {
        justify-content: center !important
    }

    .justify-content-between {
        justify-content: space-between !important
    }

    .align-items-center {
        align-items: center !important
    }

    .align-items-baseline {
        align-items: baseline !important
    }

    .align-items-stretch {
        align-items: stretch !important
    }

    .align-content-center {
        align-content: center !important
    }

    .align-self-center {
        align-self: center !important
    }

    @media(min-width:768px) {
        .flex-md-column {
            flex-direction: column !important
        }

        .justify-content-md-between {
            justify-content: space-between !important
        }
    }

    @media(min-width:1024px) {
        .flex-lg-row {
            flex-direction: row !important
        }

        .justify-content-lg-around {
            justify-content: space-around !important
        }
    }

    .float-right {
        float: right !important
    }

    .overflow-auto {
        overflow: auto !important
    }

    .overflow-hidden {
        overflow: hidden !important
    }

    .position-relative {
        position: relative !important
    }

    .position-absolute {
        position: absolute !important
    }

    @supports((position:-webkit-sticky) or (position:sticky)) {
        .sticky-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020
        }
    }

    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0
    }

    .w-25 {
        width: 25% !important
    }

    .w-50 {
        width: 50% !important
    }

    .w-75 {
        width: 75% !important
    }

    .w-100 {
        width: 100% !important
    }

    .h-75 {
        height: 75% !important
    }

    .h-100 {
        height: 100% !important
    }

    .m-0 {
        margin: 0 !important
    }

    .mt-0 {
        margin-top: 0 !important
    }

    .mr-0 {
        margin-right: 0 !important
    }

    .mb-0 {
        margin-bottom: 0 !important
    }

    .mt-1 {
        margin-top: .25rem !important
    }

    .mr-1,
    .mx-1 {
        margin-right: .25rem !important
    }

    .mb-1 {
        margin-bottom: .25rem !important
    }

    .ml-1,
    .mx-1 {
        margin-left: .25rem !important
    }

    .m-2 {
        margin: .5rem !important
    }

    .mt-2,
    .my-2,
    .sliding-match-cards .match-cards {
        margin-top: .5rem !important
    }

    .mr-2 {
        margin-right: .5rem !important
    }

    .mb-2,
    .my-2 {
        margin-bottom: .5rem !important
    }

    .ml-2 {
        margin-left: .5rem !important
    }

    .m-3 {
        margin: 1rem !important
    }

    .mt-3,
    .my-3,
    .sliding-match-cards {
        margin-top: 1rem !important
    }

    .mr-3,
    .mx-3 {
        margin-right: 1rem !important
    }

    .mb-3,
    .my-3 {
        margin-bottom: 1rem !important
    }

    .ml-3,
    .mx-3 {
        margin-left: 1rem !important
    }

    .m-4 {
        margin: 1.5rem !important
    }

    .mt-4 {
        margin-top: 1.5rem !important
    }

    .mr-4 {
        margin-right: 1.5rem !important
    }

    .mb-4 {
        margin-bottom: 1.5rem !important
    }

    .mt-5 {
        margin-top: 3rem !important
    }

    .mb-5 {
        margin-bottom: 3rem !important
    }

    .p-0 {
        padding: 0 !important
    }

    .pt-0,
    .py-0 {
        padding-top: 0 !important
    }

    .pr-0 {
        padding-right: 0 !important
    }

    .pb-0,
    .py-0 {
        padding-bottom: 0 !important
    }

    .pl-0 {
        padding-left: 0 !important
    }

    .p-1 {
        padding: .25rem !important
    }

    .pt-1,
    .py-1 {
        padding-top: .25rem !important
    }

    .pr-1,
    .px-1 {
        padding-right: .25rem !important
    }

    .py-1 {
        padding-bottom: .25rem !important
    }

    .pl-1,
    .px-1 {
        padding-left: .25rem !important
    }

    .p-2 {
        padding: .5rem !important
    }

    .pt-2,
    .py-2 {
        padding-top: .5rem !important
    }

    .pr-2,
    .px-2 {
        padding-right: .5rem !important
    }

    .pb-2,
    .py-2 {
        padding-bottom: .5rem !important
    }

    .pl-2,
    .px-2 {
        padding-left: .5rem !important
    }

    .p-3 {
        padding: 1rem !important
    }

    .pt-3,
    .py-3 {
        padding-top: 1rem !important
    }

    .pr-3,
    .px-3 {
        padding-right: 1rem !important
    }

    .pb-3,
    .py-3 {
        padding-bottom: 1rem !important
    }

    .pl-3,
    .px-3 {
        padding-left: 1rem !important
    }

    .p-4 {
        padding: 1.5rem !important
    }

    .pt-4 {
        padding-top: 1.5rem !important
    }

    .pr-4,
    .px-4 {
        padding-right: 1.5rem !important
    }

    .pb-4 {
        padding-bottom: 1.5rem !important
    }

    .pl-4,
    .px-4 {
        padding-left: 1.5rem !important
    }

    .p-5 {
        padding: 3rem !important
    }

    .pt-5 {
        padding-top: 3rem !important
    }

    .pb-5 {
        padding-bottom: 3rem !important
    }

    .m-auto {
        margin: auto !important
    }

    .mr-auto {
        margin-right: auto !important
    }

    .ml-auto {
        margin-left: auto !important
    }

    @media(min-width:768px) {
        .mb-md-1 {
            margin-bottom: .25rem !important
        }

        .mt-md-2 {
            margin-top: .5rem !important
        }

        .mt-md-4 {
            margin-top: 1.5rem !important
        }

        .pt-md-0 {
            padding-top: 0 !important
        }

        .px-md-0 {
            padding-right: 0 !important
        }

        .pb-md-0 {
            padding-bottom: 0 !important
        }

        .px-md-0 {
            padding-left: 0 !important
        }

        .pt-md-2,
        .py-md-2 {
            padding-top: .5rem !important
        }

        .py-md-2 {
            padding-bottom: .5rem !important
        }

        .px-md-4 {
            padding-right: 1.5rem !important
        }

        .pb-md-4 {
            padding-bottom: 1.5rem !important
        }

        .pl-md-4,
        .px-md-4 {
            padding-left: 1.5rem !important
        }
    }

    @media(min-width:1024px) {

        .mt-lg-0,
        .my-lg-0 {
            margin-top: 0 !important
        }

        .my-lg-0 {
            margin-bottom: 0 !important
        }

        .mt-lg-2 {
            margin-top: .5rem !important
        }

        .mb-lg-3 {
            margin-bottom: 1rem !important
        }

        .pt-lg-0 {
            padding-top: 0 !important
        }

        .pt-lg-3 {
            padding-top: 1rem !important
        }

        .pt-lg-4 {
            padding-top: 1.5rem !important
        }

        .pb-lg-5 {
            padding-bottom: 3rem !important
        }
    }

    .text-nowrap {
        white-space: nowrap !important
    }

    .text-truncate {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap
    }

    .text-left {
        text-align: left !important
    }

    .text-right {
        text-align: right !important
    }

    .text-center {
        text-align: center !important
    }

    .section-header .header-title,
    .sidebar-widget-table.table thead th,
    .text-uppercase {
        text-transform: uppercase !important
    }

    .text-capitalize {
        text-transform: capitalize !important
    }

    .font-weight-light {
        font-weight: 300 !important
    }

    .feed-item,
    .font-weight-bold,
    .form-inline .btn:hover,
    .nav-tabs .nav-link,
    .no-matches-div .redirect-link,
    .primary-navbar .nav-item .dropdown-menu .nav-item:hover .nav-link,
    .primary-navbar .nav-link.active,
    .section-header .header-link,
    .sidebar-head>.head-title,
    .video-hero .video-hero-duration span,
    .video-hero .video-hero-subtitle,
    .video-img-duration,
    .video-info .video-info__details .video-info__tag,
    b,
    strong {
        font-weight: 700 !important
    }

    .font-italic {
        font-style: italic !important
    }

    .snackbar-title,
    .text-white {
        color: #fff !important
    }

    .text-primary {
        color: #03a9f4 !important
    }

    a.text-primary:focus,
    a.text-primary:hover {
        color: #0275a8 !important
    }

    .text-secondary,
    .video-img-play-icon {
        color: #d00 !important
    }

    a.text-secondary:focus,
    a.text-secondary:hover,
    a.video-img-play-icon:focus,
    a.video-img-play-icon:hover {
        color: #910000 !important
    }

    .text-danger {
        color: #c00 !important
    }

    a.text-danger:focus,
    a.text-danger:hover {
        color: maroon !important
    }

    .text-light {
        color: #f9f9fb !important
    }

    a.text-light:focus,
    a.text-light:hover {
        color: #cbcbdc !important
    }

    .text-muted {
        color: #a5a6a7 !important
    }

    .text-break {
        word-break: break-word !important;
        word-wrap: break-word !important
    }

    .visible {
        visibility: visible !important
    }

    @media print {

        *,
        :after,
        :before {
            text-shadow: none !important;
            box-shadow: none !important
        }

        a:not(.btn) {
            text-decoration: underline
        }

        pre {
            white-space: pre-wrap !important
        }

        blockquote,
        pre {
            border: 1px solid #cbccce;
            page-break-inside: avoid
        }

        thead {
            display: table-header-group
        }

        img,
        tr {
            page-break-inside: avoid
        }

        h2,
        h3,
        p {
            orphans: 3;
            widows: 3
        }

        h2,
        h3 {
            page-break-after: avoid
        }

        @page {
            size: a3
        }

        .container,
        body {
            min-width: 1024px !important
        }

        .navbar {
            display: none
        }

        .table {
            border-collapse: collapse !important
        }

        .table td,
        .table th {
            background-color: #fff !important
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #edeef0 !important
        }
    }

    .h1,
    h1 {
        font-size: 2rem;
        line-height: 1.25
    }

    .h1,
    .h2,
    h1,
    h2 {
        letter-spacing: 0
    }

    .h2,
    h2 {
        font-size: 1.5rem;
        line-height: 1.33
    }

    .h3,
    h3 {
        font-size: 1.25rem;
        line-height: 1.5;
        letter-spacing: .2px
    }

    .h4,
    h4 {
        font-size: 1rem
    }

    .h4,
    .h5,
    h4,
    h5 {
        line-height: 1.25;
        letter-spacing: .2px
    }

    .h5,
    h5 {
        font-size: .875rem
    }

    .h6,
    .mobile-dropdown .dropdown-header .header-title,
    h6 {
        font-size: .75rem;
        line-height: 1;
        letter-spacing: .3px
    }

    .large {
        font-size: 1.125rem;
        line-height: 1.78;
        letter-spacing: 0
    }

    .home-page-wrapper .match-scorecard-table td,
    .home-page-wrapper .match-scorecard-table td a,
    .home-page-wrapper .match-scorecard-table th,
    .modal-header .modal-description,
    .primary-navbar .nav-link,
    .sidebar-head>.head-title,
    .small,
    .widget-tab {
        font-size: .875rem;
        line-height: 1.5;
        letter-spacing: 0
    }

    .extra-small,
    .nav-tabs .nav-link,
    .section-header .header-link,
    .sidebar-widget-coverage-item .content .title,
    .sidebar-widget-league-schedule .note,
    .sidebar-widget-score-quick-links .quick-link-desc,
    .sidebar-widget-score-quick-links .quick-link-title,
    .sidebar-widget-videos-item,
    .sliding-match-cards .view-all-card .text,
    .snackbar-title {
        font-size: .75rem;
        line-height: 1.5;
        letter-spacing: .1px
    }

    .player-short-description,
    .primary-navbar .header-toolbar-btn,
    .sidebar-head>.head-link,
    .sidebar-widget-coverage-item .content .description,
    .sliding-match-cards .title,
    .tiny {
        font-size: .625rem;
        line-height: 1.6;
        letter-spacing: 0
    }

    .label,
    label {
        text-transform: uppercase;
        font-family: BentonSans-Bold, Arial, Noto Sans, sans-serif;
        font-weight: 700;
        color: #2b2c2d;
        font-size: .75rem;
        line-height: 1.5;
        letter-spacing: .6px
    }

    .label-light,
    .mobile-navbar .nav-item .nav-link .label {
        text-transform: uppercase;
        font-family: BentonSans, Arial, Noto Sans, sans-serif;
        font-weight: 400;
        color: #48494a;
        font-size: .75rem;
        line-height: 1.5;
        letter-spacing: .4px
    }

    .label-large {
        font-size: .875rem;
        line-height: 1.428;
        letter-spacing: .4px
    }

    .label-large.label-light,
    .mobile-navbar .nav-item .nav-link .label-large.label {
        letter-spacing: .2px
    }

    .label-small,
    .mobile-navbar .nav-item .nav-link .label {
        font-size: .625rem;
        line-height: 1.4;
        letter-spacing: .8px
    }

    .label-small.label-light,
    .mobile-navbar .nav-item .nav-link .label {
        letter-spacing: .3px
    }

    .icon {
        font-family: ESPNIcons;
        padding-right: .5rem;
        font-weight: 400
    }

    .feed-item,
    .font-weight-bold,
    .form-inline .btn:hover,
    .nav-tabs .nav-link,
    .no-matches-div .redirect-link,
    .primary-navbar .nav-item .dropdown-menu .nav-item:hover .nav-link,
    .primary-navbar .nav-link.active,
    .section-header .header-link,
    .sidebar-head>.head-title,
    .video-hero .video-hero-duration span,
    .video-hero .video-hero-subtitle,
    .video-img-duration,
    .video-info .video-info__details .video-info__tag,
    b,
    strong {
        font-family: BentonSans-Bold, Arial, Noto Sans, sans-serif;
        font-weight: 700;
        color: #2b2c2d
    }

    .font-weight-semibold {
        font-weight: 500;
        font-family: BentonSans-Medium, Arial, Noto Sans, sans-serif
    }

    .btn,
    .font-weight-medium,
    .sidebar-widget-coverage-item .content .title,
    .video-info .video-info__details .video-info__title {
        font-family: BentonSans-Medium, Arial, Noto Sans, sans-serif;
        font-weight: 400
    }

    i:not(.espn-icon) {
        font-family: BentonSans-RegularItalic, Arial, Noto Sans, sans-serif;
        font-weight: 400;
        font-style: italic
    }

    b i,
    i b {
        font-family: BentonSans-MediumItalic, Arial, Noto Sans, sans-serif;
        font-weight: 500;
        font-style: italic
    }

    .fw-500 {
        font-weight: 500 !important
    }

    body {
        background-color: #f9f9fb
    }

    a {
        transition: all .5s ease-in-out;
        display: inline-block
    }

    .espn-icon,
    .icon-font-after,
    .icon-font-before {
        font-size: 1.125rem;
        line-height: 1
    }

    .espn-icon:after,
    .espn-icon:before,
    .icon-font-after:after,
    .icon-font-after:before,
    .icon-font-before:after,
    .icon-font-before:before {
        font-family: ESPNIcons;
        font-weight: 400;
        -moz-font-smoothing: antialiased;
        -o-font-smoothing: antialiased;
        -webkit-font-smoothing: antialiased;
        visibility: inherit;
        text-transform: none;
        font-style: normal
    }

    .icon-xs {
        font-size: .625rem
    }

    .icon-md {
        font-size: 1rem
    }

    .font-sm,
    .icon-sm {
        font-size: .875rem
    }

    .font-xxs {
        font-size: 10px
    }

    .font-xs {
        font-size: .75rem
    }

    .font-lg {
        font-size: 1.125rem
    }

    .font-xl {
        font-size: 2rem
    }

    .icon-lg {
        font-size: 1.375rem
    }

    .icon-xl {
        font-size: 1.875rem
    }

    .card,
    .language-card,
    .notification-card {
        box-shadow: 1px 1px 6px rgba(0, 0, 0, .16)
    }

    .card:focus,
    .language-card:focus,
    .notification-card:focus {
        outline: 0
    }

    .a-white,
    .a-white:hover {
        color: #fff
    }

    .img,
    img {
        border-radius: 10px;
        max-width: 100%;
        height: auto
    }

    .main-container {
        padding-top: 10px;
        padding-bottom: 3rem
    }

    @media(max-width:1023.98px) {
        .main-container {
            padding-top: 0;
            padding-bottom: 0
        }
    }

    .nav-tabs {
        border-bottom: 0
    }

    .nav-tabs .nav-link {
        background-color: transparent;
        border: 0;
        border-bottom: 3px solid transparent;
        margin-right: 2rem;
        padding-left: 0;
        padding-right: 0;
        padding-bottom: .25rem;
        color: #fff;
        position: relative
    }

    .nav-tabs .nav-link.active {
        background-color: transparent;
        color: #fff;
        border-color: transparent
    }

    .nav-tabs .nav-link.active:after {
        content: "";
        position: absolute;
        width: 100%;
        height: 3px;
        background-color: #fff;
        bottom: -3px;
        z-index: 1;
        opacity: 1;
        border-radius: 3px;
        left: 0
    }

    .slick-next,
    .slick-prev {
        transition: all .5s ease-in-out
    }

    .slick-next:before,
    .slick-prev:before {
        font-size: 1.125rem !important;
        font-family: ESPNIcons !important;
        font-weight: 400;
        -moz-font-smoothing: antialiased;
        -o-font-smoothing: antialiased;
        visibility: inherit;
        text-transform: none;
        font-style: normal
    }

    .slick-next:hover,
    .slick-prev:hover {
        color: #f9f9fb
    }

    .slick-prev {
        left: -2rem
    }

    .slick-prev:before {
        content: "" !important
    }

    .slick-next {
        right: -2rem
    }

    .slick-next:before {
        content: "" !important
    }

    .icon-facebook,
    .icon-facebook-solid-after,
    .icon-facebook-solid-after:after,
    .icon-facebook-solid-after:before,
    .icon-facebook-solid-before,
    .icon-facebook-solid-before:after,
    .icon-facebook-solid-before:before,
    .icon-facebook:after,
    .icon-facebook:before {
        color: #3b5998
    }

    .icon-twitter,
    .icon-twitter-solid-after,
    .icon-twitter-solid-after:after,
    .icon-twitter-solid-after:before,
    .icon-twitter-solid-before,
    .icon-twitter-solid-before:after,
    .icon-twitter-solid-before:before,
    .icon-twitter:after,
    .icon-twitter:before {
        color: #55acee
    }

    .icon-instagram,
    .icon-instagram-solid-after,
    .icon-instagram-solid-after:after,
    .icon-instagram-solid-after:before,
    .icon-instagram-solid-before,
    .icon-instagram-solid-before:after,
    .icon-instagram-solid-before:before,
    .icon-instagram:after,
    .icon-instagram:before {
        color: #000
    }

    .icon-email-solid-after,
    .icon-email-solid-after:after,
    .icon-email-solid-after:before,
    .icon-email-solid-before,
    .icon-email-solid-before:after,
    .icon-email-solid-before:before,
    .icon-print-solid-after,
    .icon-print-solid-after:after,
    .icon-print-solid-after:before,
    .icon-print-solid-before,
    .icon-print-solid-before:after,
    .icon-print-solid-before:before {
        color: #1d1e1f
    }

    .icon-pinterest-solid-after,
    .icon-pinterest-solid-after:after,
    .icon-pinterest-solid-after:before,
    .icon-pinterest-solid-before,
    .icon-pinterest-solid-before:after,
    .icon-pinterest-solid-before:before {
        color: #ae2626
    }

    .icon-facebook-messenger-solid-after,
    .icon-facebook-messenger-solid-after:after,
    .icon-facebook-messenger-solid-after:before,
    .icon-facebook-messenger-solid-before,
    .icon-facebook-messenger-solid-before:after,
    .icon-facebook-messenger-solid-before:before {
        color: #0078ff
    }

    .icon-whatsapp-solid-after,
    .icon-whatsapp-solid-after:after,
    .icon-whatsapp-solid-after:before,
    .icon-whatsapp-solid-before,
    .icon-whatsapp-solid-before:after,
    .icon-whatsapp-solid-before:before {
        color: #075e54
    }

    .modal.show {
        opacity: 1;
        display: flex;
        background: rgba(0, 0, 0, .6);
        justify-content: center;
        align-items: center
    }

    @media(min-width:1024px) {
        .modal.show {
            z-index: 5001
        }
    }

    .modal.show .modal-dialog {
        max-height: 95vh
    }

    @media(max-width:1023.98px) {
        .modal.show .modal-dialog {
            width: 95%
        }
    }

    .modal.show .modal-dialog .modal-content {
        max-height: 100vh
    }

    .modal-header {
        display: inline-block
    }

    .modal-header .modal-title {
        width: 95%
    }

    @media(max-width:1023.98px) {
        .modal-header .modal-title {
            font-size: .75rem;
            line-height: 1.5;
            letter-spacing: .1px
        }
    }

    .modal-header .modal-description {
        width: 95%;
        color: #48494a;
        margin-top: 5px
    }

    .modal-header button.close {
        position: absolute;
        top: 1rem;
        right: 1rem
    }

    .cursor-pointer {
        cursor: pointer
    }

    .main-rhs {
        width: 320px !important;
        flex: 0 0 320px
    }

    .main-rhs .widget-container {
        max-width: 320px !important;
        min-width: 300px;
        width: -webkit-fit-content;
        width: -moz-fit-content;
        width: fit-content
    }

    .main-content-x {
        width: calc(100% - 320px) !important;
        flex-grow: 0;
        flex-shrink: 0;
        flex-basis: calc(100% - 320px)
    }

    @media(max-width:1023.98px) {
        .main-rhs {
            max-width: 100% !important
        }

        .main-content-x,
        .main-rhs {
            width: 100% !important;
            flex: 0 0 100%
        }
    }

    .black-1000 {
        color: #000
    }

    .gray-700 {
        color: #6c6d6f
    }

    .blue-text {
        color: #03a9f4 !important
    }

    .gray-400 {
        color: #dcdddf !important
    }

    .gray-650 {
        color: #888
    }

    .block-story .story-footer-container span,
    .gray-800 {
        color: #48494a
    }

    .gray-900 {
        color: #2b2c2d
    }

    .gray-1000 {
        color: #1d1e1f !important
    }

    .red {
        color: #d00 !important
    }

    .no-wrap {
        white-space: nowrap
    }

    .box-shadow-none {
        box-shadow: none !important
    }

    .no-content-div {
        margin: 25% 0;
        display: flex;
        align-items: center;
        text-align: center;
        justify-content: center;
        flex-direction: column;
        flex-wrap: "wrap"
    }

    .no-content-div .no-content-img {
        width: 118px;
        height: 41px;
        border-radius: 0
    }

    .no-matches-div {
        margin: 25% 0;
        display: flex;
        align-items: center;
        text-align: center;
        justify-content: center;
        flex-direction: column
    }

    .no-matches-div .no-matches-img {
        width: 117px;
        height: 35px;
        border-radius: 0
    }

    .no-matches-div .no-results-img {
        width: 86px;
        height: 40px;
        border-radius: 0
    }

    .no-matches-div .no-matches-text {
        padding: 15px 10px;
        width: 100%
    }

    .no-matches-div .redirect-link {
        color: #03a9f4;
        border: 1px solid #03a9f4;
        padding: 7px 15px;
        font-size: 12px;
        font-weight: 700;
        border-radius: 5px
    }

    .no-matches-div .redirect-link:hover {
        color: #007aff;
        border-color: #007aff
    }

    @media(max-width:1023.98px) {
        .hide-on-mobile {
            display: none
        }
    }

    .text-align-right {
        text-align: right !important
    }

    .hide-scrollbar {
        scrollbar-width: none;
        -webkit-overflow-scrolling: touch
    }

    .hide-scrollbar::-webkit-scrollbar {
        display: none
    }

    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        scrollbar-width: none;
        -webkit-overflow-scrolling: touch
    }

    .table-responsive::-webkit-scrollbar {
        display: none
    }

    .sticky {
        z-index: 1000;
        transform: inherit !important
    }

    .home-page-wrapper,
    .series-page-wrapper,
    .series-results-page-wrapper,
    .series-standings-page-wrapper,
    .table-page,
    .team-page-wrapper,
    .team-scores-page-wrapper,
    .teams-page-wrapper {
        margin-top: 10px
    }

    .home-page-wrapper>.container,
    .series-page-wrapper>.container,
    .series-results-page-wrapper>.container,
    .series-standings-page-wrapper>.container,
    .table-page>.container,
    .team-page-wrapper>.container,
    .team-scores-page-wrapper>.container,
    .teams-page-wrapper>.container {
        padding-top: 10px;
        background-color: #f9f9fb
    }

    .match-page-wrapper.home-page-wrapper {
        margin-top: 0
    }

    .match-page-wrapper>.container,
    .page-match-finder>.container,
    .video-page-wrapper>.container {
        padding-top: 10px;
        background-color: #f9f9fb
    }

    @keyframes spinner {
        0% {
            transform: translate(-50%, -50%) rotate(0deg)
        }

        to {
            transform: translate(-50%, -50%) rotate(1turn)
        }
    }

    .solid-loader {
        width: 50px;
        height: 50px;
        display: inline-block;
        overflow: hidden;
        background: none
    }

    .solid-loader .loader {
        width: 100%;
        height: 100%;
        position: relative;
        transform: translateZ(0) scale(.5);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        transform-origin: 0 0
    }

    .solid-loader .loader div {
        position: absolute;
        width: 60px;
        height: 60px;
        border: 10px solid #03a9f4;
        border-top-color: transparent;
        border-radius: 50%;
        animation: spinner 1s linear infinite;
        top: 50px;
        left: 50px;
        box-sizing: content-box
    }

    .dotted-loader .sk-chase {
        width: 40px;
        height: 40px;
        position: relative;
        animation: sk-chase 2.5s linear infinite both
    }

    .dotted-loader .sk-chase .sk-chase-dot {
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        animation: sk-chase-dot 2s ease-in-out infinite both
    }

    .dotted-loader .sk-chase .sk-chase-dot:before {
        content: "";
        display: block;
        width: 25%;
        height: 25%;
        background-color: #d00;
        border-radius: 100%;
        animation: sk-chase-dot-before 2s ease-in-out infinite both
    }

    .dotted-loader .sk-chase .sk-chase-dot:first-child {
        animation-delay: -1.1s
    }

    .dotted-loader .sk-chase .sk-chase-dot:nth-child(2) {
        animation-delay: -1s
    }

    .dotted-loader .sk-chase .sk-chase-dot:nth-child(3) {
        animation-delay: -.9s
    }

    .dotted-loader .sk-chase .sk-chase-dot:nth-child(4) {
        animation-delay: -.8s
    }

    .dotted-loader .sk-chase .sk-chase-dot:nth-child(5) {
        animation-delay: -.7s
    }

    .dotted-loader .sk-chase .sk-chase-dot:nth-child(6) {
        animation-delay: -.6s
    }

    .dotted-loader .sk-chase .sk-chase-dot:first-child:before {
        animation-delay: -1.1s
    }

    .dotted-loader .sk-chase .sk-chase-dot:nth-child(2):before {
        animation-delay: -1s
    }

    .dotted-loader .sk-chase .sk-chase-dot:nth-child(3):before {
        animation-delay: -.9s
    }

    .dotted-loader .sk-chase .sk-chase-dot:nth-child(4):before {
        animation-delay: -.8s
    }

    .dotted-loader .sk-chase .sk-chase-dot:nth-child(5):before {
        animation-delay: -.7s
    }

    .dotted-loader .sk-chase .sk-chase-dot:nth-child(6):before {
        animation-delay: -.6s
    }

    @keyframes sk-chase {
        to {
            transform: rotate(1turn)
        }
    }

    @keyframes sk-chase-dot {

        80%,
        to {
            transform: rotate(1turn)
        }
    }

    @keyframes sk-chase-dot-before {
        50% {
            transform: scale(.4)
        }

        0%,
        to {
            transform: scale(1)
        }
    }

    .table-head-border-bottom {
        border-bottom: 1px solid #a5a6a7 !important
    }

    .opacity-0 {
        opacity: 0
    }

    .table-head-title-not-clicked {
        position: relative;
        left: 5px
    }

    .table {
        border-collapse: separate;
        border-spacing: 0
    }

    .border-gray400 {
        border: 1px solid #dcdddf !important
    }

    @media(max-width:1023.98px) {

        .match-finder-body,
        .team-scores-page {
            padding-bottom: 40px
        }
    }

    @media(max-width:767.98px) {

        .match-finder-body,
        .team-scores-page {
            padding-bottom: 0
        }
    }

    .w-15 {
        width: 15% !important
    }

    .w-8-5 {
        width: 8.5% !important
    }

    @keyframes shakeX {

        0%,
        to {
            transform: translateZ(0)
        }

        10%,
        30%,
        50%,
        70%,
        90% {
            transform: translate3d(-5px, 0, 0)
        }

        20%,
        40%,
        60%,
        80% {
            transform: translate3d(5px, 0, 0)
        }
    }

    .animation-shakeX {
        display: inline-block;
        animation-name: shakeX;
        animation-duration: 1.5s;
        animation-iteration-count: 1
    }

    .benton-bold {
        font-family: BentonSans-Bold;
        font-weight: 700
    }

    .benton-normal {
        font-family: BentonSans !important
    }

    .benton-medium {
        font-family: BentonSans-Medium !important
    }

    .gray-1000 {
        color: #1d1e1f
    }

    .gray-600 {
        color: #a5a6a7
    }

    .bg-gray-100 {
        background-color: #f9f9fb
    }

    .more-content {
        position: relative;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: none
    }

    .more-content-gradient .more-content-gradient-content {
        height: 3.6em
    }

    .more-content-gradient:after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        height: 70px;
        width: 100%;
        background: linear-gradient(180deg, hsla(0, 0%, 100%, 0), hsla(0, 0%, 100%, .93) 62.6%, #fff)
    }

    .more_content-footer {
        display: flex;
        width: 100%;
        height: 56px;
        justify-content: center;
        align-items: center;
        cursor: pointer
    }

    .more_content-footer p {
        color: #03a9f4;
        font-size: 500
    }

    .more_content-footer p:hover {
        text-decoration: underline;
        color: #0278bb
    }

    .a-black-pearl {
        color: #151617;
        transition: all .5s
    }

    .a-black-pearl:active,
    .a-black-pearl:hover {
        color: #03a9f4
    }

    .a-gray-900 {
        color: #2b2c2d;
        transition: all .5s
    }

    .a-gray-900:active,
    .a-gray-900:hover {
        color: #03a9f4
    }

    .a-gray-800 {
        color: #48494a;
        -webkit-text-decoration: dashed;
        text-decoration: dashed
    }

    .a-gray-800:active,
    .a-gray-800:hover {
        color: #03a9f4
    }

    .dashed-underline {
        text-decoration: underline !important;
        -webkit-text-decoration-style: dashed !important;
        text-decoration-style: dashed !important;
        -webkit-text-decoration-color: #cbccce !important;
        text-decoration-color: #cbccce !important
    }

    .white-space-nowrap {
        white-space: nowrap !important
    }

    .width-full {
        width: 100%
    }

    .section-header .header-title,
    .sidebar-widget-table.table thead th,
    .text-uppercase {
        text-transform: uppercase
    }

    .text-transform-none {
        text-transform: none !important
    }

    .link-border-bottom {
        text-decoration: underline;
        -webkit-text-decoration-style: dotted;
        text-decoration-style: dotted
    }

    .pb-0-5 {
        padding-bottom: 2px
    }

    .zoom-img-container {
        width: 100%;
        overflow: hidden;
        border-radius: 10px
    }

    .img-hover:hover {
        transform: scale(1.1);
        transition: all .5s ease-in-out
    }

    .pagination-extreme-end-link {
        background-color: #f1f2f3
    }

    @media(max-width:1023.98px) {
        .pagination-extreme-end-link {
            max-width: 24px !important
        }
    }

    .hover-blue:hover {
        color: #03a9f4;
        transition: all .5s ease-in-out
    }

    .pagination-middle-link {
        background-color: #f9f9fb;
        border-left: none !important;
        border-right: none !important
    }

    .list-style-none {
        list-style-type: none
    }

    .tag {
        background-color: #f1f2f3;
        color: #2b2c2d;
        border-radius: 100px;
        transition: all .3s ease;
        margin-bottom: 10px
    }

    .tag-link:focus .tag,
    .tag-link:hover .tag {
        background-color: #03a9f4;
        color: #fff
    }

    .black-link {
        text-decoration: underline;
        -webkit-text-decoration-style: dotted;
        text-decoration-style: dotted;
        -webkit-text-decoration-color: #cbccce;
        text-decoration-color: #cbccce;
        text-underline-offset: 3px;
        color: #2b2c2d
    }

    .black-link:hover {
        color: #0278bb
    }

    .masonry-grid {
        display: flex;
        margin-left: -16px;
        width: auto
    }

    .masonry-grid-column {
        padding-left: 16px;
        background-clip: padding-box
    }

    @media(max-width:1023.98px) {
        .masonry-grid {
            margin-left: -8px
        }

        .masonry-grid-column {
            padding-left: 8px
        }
    }

    @media(max-width:767.98px) {
        .masonry-grid .masonry-grid-column {
            width: 100% !important
        }
    }

    .rounded {
        border-radius: .25rem
    }

    .rounded-md {
        border-radius: .5rem
    }

    .link-hover-blue:hover {
        color: #0278bb !important
    }

    .navbar-back-arrow {
        font-size: 1.5rem;
        margin-right: 12px
    }

    .headshake-animation {
        animation: shake .82s cubic-bezier(.36, .07, .19, .97) both;
        animation-delay: 2s;
        transform: translateZ(0);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        perspective: 1000px
    }

    @keyframes shake {

        10%,
        90% {
            transform: translate3d(-1px, 0, 0)
        }

        20%,
        80% {
            transform: translate3d(2px, 0, 0)
        }

        30%,
        50%,
        70% {
            transform: translate3d(-4px, 0, 0)
        }

        40%,
        60% {
            transform: translate3d(4px, 0, 0)
        }
    }

    .background-blue {
        background-color: #03a9f4
    }

    .img-thumbnail {
        background-color: transparent
    }

    .blue-on-hover:hover {
        color: #0278bb !important
    }

    .left-50 {
        left: 50%
    }

    @media(min-width:768px) {
        .grid-span-2 {
            grid-column: span 2
        }
    }

    @media(max-width:1023.98px) {
        .remove-max-width {
            max-width: 100%
        }
    }

    .icon-xl {
        width: 64px;
        height: 64px
    }

    .bet-link-color,
    a .header-title {
        color: #03a9f4
    }

    .ad-center {
        display: flex;
        justify-content: center;
        align-items: center
    }

    h1,
    h2 {
        color: #1d1e1f
    }

    .round-image {
        border-radius: 50%;
        height: 60px;
        width: 60px
    }

    .top-1 {
        top: 1px
    }

    .btn-primary.disabled,
    .btn-primary:disabled {
        background-color: #cbccce;
        border-color: #cbccce
    }

    .btn-primary:focus {
        box-shadow: none
    }

    .btn-outline-primary.disabled,
    .btn-outline-primary:disabled {
        color: #cbccce;
        border-color: #cbccce
    }

    .btn-outline-primary:focus {
        box-shadow: none
    }

    .btn-outline-light.disabled,
    .btn-outline-light:disabled {
        color: #cbccce;
        border-color: #cbccce
    }

    .btn-outline-light:focus {
        box-shadow: none
    }

    .btn-outline-dark.disabled,
    .btn-outline-dark:disabled {
        color: #cbccce;
        border-color: #cbccce
    }

    .btn-outline-dark:focus {
        box-shadow: none
    }

    .btn-outline-primary:hover {
        background-color: rgba(3, 169, 244, .12);
        color: #03a9f4
    }

    .btn-outline-dark {
        color: #48494a;
        border-color: #edeef0
    }

    .btn-outline-dark:hover {
        background-color: rgba(72, 73, 74, .12)
    }

    .share-btn {
        display: flex;
        justify-content: center;
        align-items: center
    }

    .share-btn .share-icon {
        cursor: pointer
    }

    .share-btn .share-icon:hover {
        color: #2b2c2d
    }

    .share-btn .speech-bubble-left {
        right: 32px
    }

    .share-btn .speech-bubble-left:after {
        right: 0;
        top: 50%;
        border-left-color: #fff;
        border-right: 0;
        margin-top: -.625em;
        margin-right: -.625em
    }

    .share-btn .icon {
        position: relative;
        padding: 4px 9px;
        margin-right: 10px;
        border-radius: 5px
    }

    .share-btn .icon:hover {
        opacity: .8
    }

    .share-btn .icon>img {
        position: relative;
        width: 26px !important;
        height: 20px !important
    }

    input,
    textarea {
        caret-color: #03a9f4;
        font-size: 1rem !important
    }

    input:-ms-input-placeholder,
    textarea:-ms-input-placeholder {
        font-size: 14px
    }

    input::placeholder,
    textarea::placeholder {
        font-size: 14px
    }

    .form-inline {
        position: relative;
        display: inline-block
    }

    .form-inline .form-group {
        flex-grow: 1
    }

    .form-inline .form-control {
        padding-right: 75px;
        flex-grow: 1
    }

    .form-inline .form-control.is-invalid {
        background-image: none
    }

    .form-inline .btn {
        position: absolute;
        right: 1rem;
        top: .9rem;
        padding: 0;
        background: transparent;
        color: #03a9f4;
        font-family: BentonSans, Arial, Noto Sans, sans-serif;
        font-weight: 400;
        border: 0;
        font-size: .75rem;
        line-height: 1.1
    }

    .form-inline .btn:hover {
        background: transparent;
        color: #03a9f4;
        top: .8rem
    }

    .form-inline.is-invalid-form {
        padding-bottom: 0
    }

    .form-inline.is-invalid-form .invalid-feedback {
        position: absolute;
        left: 0;
        top: 100%;
        max-width: 100%
    }

    .form-inline.is-invalid-form .btn {
        color: #c00
    }

    input[type=checkbox] {
        opacity: 0
    }

    input[type=checkbox]+.form-check-label:before {
        font-family: ESPNIcons;
        font-weight: 400;
        -moz-font-smoothing: antialiased;
        -o-font-smoothing: antialiased;
        -webkit-font-smoothing: antialiased;
        visibility: inherit;
        text-transform: none;
        color: #03a9f4;
        position: absolute;
        left: -1.2rem;
        top: 0;
        font-size: 1rem;
        line-height: 1.1rem;
        overflow: hidden
    }

    input[type=checkbox]+.form-check-label:hover:before {
        background-color: rgba(3, 169, 244, .3)
    }

    input[type=checkbox]:checked+.form-check-label:before {
        color: #03a9f4
    }

    input[type=checkbox]+.form-check-label {
        position: relative
    }

    input[type=checkbox]+.form-check-label:before {
        content: ""
    }

    input[type=checkbox]+.form-check-label:hover:before {
        border-radius: 5px
    }

    input[type=checkbox]:checked+.form-check-label:before {
        content: ""
    }

    .radio-button-container {
        box-shadow: none;
        font-size: .875rem;
        width: 100%;
        height: 100%;
        z-index: 9;
        background: #fff;
        border-radius: 10px;
        border-top-left-radius: 0;
        min-width: 196px;
        left: 0;
        border-top-right-radius: 0;
        overflow-y: auto
    }

    .radio-button-container .item {
        cursor: pointer
    }

    .radio-button-container .item:hover {
        background-color: #f9f9fb
    }

    .radio-button-container .item input~span {
        min-height: 15px;
        min-width: 15px;
        border-radius: 15px;
        border: 1px solid #dcdddf
    }

    @media(max-width:1023.98px) {
        .radio-button-container .item input~span {
            font-size: .875rem
        }
    }

    .radio-button-container .selected .item input~span {
        background-color: #d00;
        border: 1px solid #d00
    }

    .radio-button-container .selected .item input~span .espn-icon {
        color: #fff
    }

    .radio-button-container label {
        font-size: inherit;
        font-family: inherit;
        cursor: inherit
    }

    .primary-navbar .main-container {
        padding-top: 0;
        padding-bottom: 0
    }

    .primary-navbar .navbar-brand .logo {
        width: 138px;
        height: auto;
        border-radius: 0;
        position: relative;
        top: -2px
    }

    .primary-navbar .header-title {
        left: 50px;
        font-size: .875rem;
        line-height: 1.5;
        letter-spacing: 0;
        color: #fff;
        font-weight: 700;
        display: none
    }

    .primary-navbar .nav-link {
        padding-top: .75rem;
        padding-bottom: .75rem;
        transition: none;
        position: relative;
        cursor: pointer
    }

    .primary-navbar .nav-link.active:after {
        opacity: 1
    }

    .primary-navbar .header-toolbar-btn {
        background: #fff;
        color: #03a9f4;
        border-radius: 15px;
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: .5px;
        padding: 6px 8px;
        line-height: 15px;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: pointer;
        margin-left: 16px
    }

    .primary-navbar .header-toolbar-btn-bell-desktop {
        background: transparent;
        color: #fff;
        margin-left: 0
    }

    .primary-navbar .header-toolbar-btn-bell-desktop>i {
        font-size: 18px
    }

    .primary-navbar .nav-item {
        overflow: hidden;
        transition: none
    }

    .primary-navbar .nav-item:hover {
        overflow: visible
    }

    .primary-navbar .nav-item:hover .dropdown-menu {
        display: block;
        opacity: 1;
        top: 100%
    }

    .primary-navbar .nav-item:hover>.nav-link {
        color: #f9f9fb;
        background-color: #00c0ff
    }

    .primary-navbar .nav-item:focus {
        outline: none
    }

    .primary-navbar .nav-item:focus>.nav-link {
        outline: none;
        color: #f9f9fb
    }

    .primary-navbar .nav-item .nav-link:hover {
        color: #f9f9fb;
        background-color: #00c0ff
    }

    .primary-navbar .nav-item .nav-link:focus {
        outline: none;
        color: #f9f9fb
    }

    .primary-navbar .nav-item .dropdown-menu {
        will-change: filter;
        display: block;
        border: 0;
        box-shadow: 0 2px 13px rgba(0, 0, 0, .12);
        border-radius: 0 0 10px 10px;
        margin-top: 0;
        padding-top: .25rem;
        padding-bottom: .25rem;
        opacity: 0;
        top: 102%;
        transition: all .2s ease-in-out;
        z-index: 5000
    }

    .primary-navbar .nav-item .dropdown-menu:before {
        content: "";
        width: 0;
        height: 0;
        border-color: transparent transparent #f9f9fb;
        border-style: solid;
        border-width: 0 6px 8px;
        position: absolute;
        top: -8px;
        left: .75rem
    }

    .primary-navbar .nav-item .dropdown-menu .nav-item:hover .nav-link {
        background: #fff
    }

    .primary-navbar .nav-item .dropdown-menu .nav-item:hover .nav-link:after {
        opacity: 1;
        color: #2b2c2d
    }

    .primary-navbar .nav-item .dropdown-menu .nav-link {
        font-size: .875rem;
        line-height: 1.5;
        letter-spacing: 0;
        color: #2b2c2d;
        transition: none
    }

    .primary-navbar .nav-item .dropdown-menu .nav-link:after {
        text-align: left;
        left: .75rem;
        transition: none
    }

    .primary-navbar .nav-item .dropdown-menu .nav-link:hover {
        background: #fff;
        color: #2b2c2d
    }

    .primary-navbar .nav-item .dropdown-menu .nav-link:hover:after {
        opacity: 1;
        color: #2b2c2d
    }

    .primary-navbar .nav-item .dropdown-menu .nav-link.active {
        background: #fff;
        color: #2b2c2d
    }

    .primary-navbar .nav-item .dropdown-menu .nav-link.active:after {
        opacity: 1;
        color: #2b2c2d
    }

    .primary-navbar a:after {
        content: none
    }

    .primary-navbar .nav-utils li {
        padding-left: .75rem;
        padding-right: .75rem
    }

    .primary-navbar .nav-utils .nav-icon-svg {
        display: inline-block;
        margin-right: 4px;
        position: relative;
        top: -1px
    }

    .primary-navbar .nav-utils .nav-icon-svg>svg {
        height: 20px
    }

    .primary-navbar .nav-utils .nav-icon-svg>svg path {
        fill: #fff
    }

    .primary-navbar .nav-utils li.nav-more {
        padding-left: 0;
        padding-right: 0
    }

    @media(min-width:1024px)and (max-width:1279.98px) {
        .primary-navbar .nav-utils li.nav-more .nav-link {
            padding-left: .5rem;
            padding-right: .5rem
        }

        .primary-navbar .nav-utils>.nav-item:first-child {
            padding-right: 0
        }
    }

    .primary-navbar .nav-utils>.nav-item:nth-child(2):not(.nav-more) {
        padding-left: 0
    }

    @media(min-width:1024px)and (max-width:1279.98px) {
        .primary-navbar .nav-utils>.nav-item:nth-child(2):not(.nav-more) {
            padding-right: 0
        }
    }

    @media(max-width:1023.98px) {
        .primary-navbar {
            justify-content: start;
            align-items: center;
            padding-left: 1rem;
            padding-right: 1rem
        }

        .primary-navbar .navbar-brand {
            display: block;
            width: 150px
        }

        .primary-navbar .navbar-toggler {
            padding-left: 0;
            padding-right: 0;
            border: 0
        }

        .primary-navbar.is-home .navbar-brand {
            opacity: 1;
            padding-left: 0
        }

        .primary-navbar.is-home .navbar-toggler {
            display: none
        }
    }

    .primary-navbar .dropdown-menu .nav-item .nav-link {
        min-width: 220px;
        width: auto
    }

    .primary-navbar .language-dropdown {
        left: auto;
        right: 0
    }

    .primary-navbar .language-dropdown:before {
        left: auto !important;
        right: 1.2rem
    }

    .primary-navbar .edition-dropdown {
        left: -315px
    }

    .primary-navbar .edition-dropdown:before {
        left: 75% !important
    }

    .site-header {
        background-color: #038dcc
    }

    .site-header .leagues-container {
        padding-top: .25rem;
        padding-bottom: .75rem
    }

    .site-header .leagues-container .matches-count {
        font-family: BentonSans, Arial, Noto Sans, sans-serif;
        font-size: 10px;
        position: relative;
        top: -1px;
        padding-left: .25rem
    }

    .site-header .league-tabs {
        flex-wrap: nowrap;
        max-width: 100%;
        overflow-x: auto;
        overflow-y: hidden;
        scrollbar-width: none;
        -webkit-overflow-scrolling: touch
    }

    .site-header .league-tabs::-webkit-scrollbar {
        display: none
    }

    .site-header .league-tabs .nav-link {
        white-space: nowrap;
        opacity: .6;
        cursor: pointer
    }

    .site-header .league-tabs .nav-link.active {
        opacity: 1
    }

    .site-header .mobile-leagues-container {
        padding: 0;
        background-color: #03a9f4;
        min-width: 100%
    }

    .site-header .mobile-leagues-container .league-tabs .nav-item:first-child {
        margin-left: 1rem
    }

    .site-header .mobile-leagues-container .league-tabs .nav-item .nav-link {
        color: #fff;
        opacity: .6;
        margin-right: 12px;
        padding: 4px 0 0
    }

    .site-header .mobile-leagues-container .league-tabs .nav-item .nav-link.active {
        opacity: 1
    }

    .site-header .mobile-leagues-container .league-tabs .nav-item .nav-link.active:after {
        content: none
    }

    .site-header .mobile-leagues-container .league-tabs .nav-item .nav-link:hover {
        opacity: 1
    }

    .featured-scoreboard {
        padding-top: .75rem;
        position: relative
    }

    @media(min-width:768px) {
        .featured-scoreboard.slick-slider-container {
            padding-left: .7rem;
            padding-right: .7rem
        }
    }

    .featured-scoreboard .horizontal-slider-item+.horizontal-slider-item {
        margin-left: 8px
    }

    .featured-scoreboard .horizontal-slider-item:last-of-type {
        padding-right: 12px
    }

    .featured-scoreboard .horizontal-slider-item:nth-of-type(2) {
        margin-left: 0
    }

    .featured-scoreboard .slick-track {
        margin: 0;
        display: flex
    }

    .featured-scoreboard .slick-track .slick-slide {
        display: flex;
        height: auto;
        align-items: center;
        justify-content: center
    }

    .featured-scoreboard .slick-track .slick-slide:first-of-type {
        width: unset
    }

    @media(max-width:1023.98px) {
        .featured-scoreboard .slick-track .slick-slide:nth-of-type(2) {
            width: unset
        }
    }

    .featured-scoreboard .slick-track .slick-slide>div {
        height: 100%;
        width: 100%
    }

    .featured-scoreboard .slick-track .slick-slide+.slick-slide {
        margin-left: 10px
    }

    .featured-scoreboard .slick-track .slick-slide:nth-of-type(2) {
        margin-left: 0
    }

    .featured-scoreboard .adSlot.scoresCarousel,
    .featured-scoreboard .adSlot.scoresCarouselApp {
        margin-left: 8px
    }

    .featured-scoreboard .adSlot.presbyHeader {
        margin-right: 10px
    }

    .featured-scoreboard .scorecard-container {
        padding-bottom: .25rem;
        height: 100%;
        position: relative
    }

    .featured-scoreboard .scorecard-container .bet365-hsb-scorecard {
        display: flex;
        background: #fff;
        width: 124px;
        height: 124px;
        padding: .5rem;
        margin-right: .5rem;
        box-shadow: 1px 1px 4px rgba(0, 0, 0, .25);
        border-radius: .25rem
    }

    .featured-scoreboard .scorecard-container.bet365-mobile {
        margin-left: 8px
    }

    @media(max-width:1023.98px) {
        .featured-scoreboard .horizontal-slider-cnt {
            padding-left: .75rem
        }
    }

    .mobile-navbar {
        background-color: #fff;
        position: fixed;
        bottom: 0;
        width: 100%;
        z-index: 1002;
        box-shadow: 1px -1px 6px rgba(0, 0, 0, .16)
    }

    .mobile-navbar .nav-item {
        text-align: center
    }

    .mobile-navbar .nav-item .nav-link,
    .mobile-navbar .nav-item .nav-link:focus .espn-icon {
        color: #48494a
    }

    .mobile-navbar .nav-item .nav-link.active .espn-icon,
    .mobile-navbar .nav-item .nav-link:hover .espn-icon {
        color: #d00
    }

    .mobile-navbar .nav-item .nav-link.active .label,
    .mobile-navbar .nav-item .nav-link:hover .label {
        color: #000
    }

    .mobile-navbar .nav-item .nav-link.is-forced-inactive,
    .mobile-navbar .nav-item .nav-link.is-forced-inactive .espn-icon,
    .mobile-navbar .nav-item .nav-link.is-forced-inactive .label {
        color: #48494a
    }

    .mobile-dropdown {
        display: none;
        width: 100%;
        min-height: 100vh;
        position: fixed;
        background: #fff;
        z-index: 1001;
        top: 0;
        left: 0;
        bottom: 0;
        transition: all .5s ease-in-out;
        padding-top: 1.5rem;
        padding-bottom: 200px;
        overflow-y: auto
    }

    .mobile-dropdown .tabs-wrapper {
        height: calc(100vh - 54px);
        overflow: scroll;
        scrollbar-width: none;
        -webkit-overflow-scrolling: touch
    }

    .mobile-dropdown .tabs-wrapper::-webkit-scrollbar {
        display: none
    }

    .mobile-dropdown .title {
        margin-bottom: .5rem;
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    .mobile-dropdown .nav-item .nav-link {
        padding: .5rem 1.5rem;
        font-size: .875rem;
        line-height: 1.5;
        letter-spacing: 0;
        position: relative
    }

    .mobile-dropdown .nav-item .nav-link.active {
        color: #2b2c2d;
        background-color: transparent;
        font-family: BentonSans-Bold, Arial, Noto Sans, sans-serif
    }

    .mobile-dropdown.more-dropdown {
        padding-top: 0;
        padding-bottom: 0;
        overflow: hidden
    }

    .mobile-dropdown.show {
        display: block
    }

    .mobile-dropdown .tabs {
        flex-direction: column;
        overflow-y: scroll;
        background: #f9f9fb;
        justify-content: flex-start;
        padding-bottom: 120px;
        padding-top: 15px;
        min-height: 100%
    }

    .mobile-dropdown .tabs .nav-link {
        margin-right: 0;
        color: #6c6d6f;
        text-align: center;
        border: 0;
        padding: 8px 12px
    }

    .mobile-dropdown .tabs .nav-link .espn-icon {
        margin-bottom: .25rem;
        display: block
    }

    .mobile-dropdown .tabs .nav-link .label {
        font-size: .625rem;
        line-height: 1.6;
        letter-spacing: 0;
        text-transform: none;
        font-family: BentonSans, Arial, Noto Sans, sans-serif;
        font-weight: 400;
        color: #6c6d6f
    }

    .mobile-dropdown .tabs .nav-link.active,
    .mobile-dropdown .tabs .nav-link.active .label {
        color: #2b2c2d
    }

    .mobile-dropdown .tabs .nav-link.active:after {
        content: "";
        width: 0;
        height: 0;
        border-color: transparent #d00 transparent transparent;
        border-style: solid;
        border-width: 8px 10px 8px 0;
        bottom: unset;
        left: unset;
        right: 0;
        top: .75rem
    }

    .mobile-dropdown .tabs .nav-item:last-child .nav-link .label {
        color: transparent
    }

    .mobile-dropdown .tab-panel {
        flex: 1 1;
        align-self: stretch;
        padding-top: 1.5rem;
        height: calc(100vh - 54px);
        padding-bottom: 55px;
        overflow-y: auto;
        box-shadow: 1px 1px 6px rgba(0, 0, 0, .16)
    }

    .mobile-dropdown .dropdown-header {
        background-color: #03a9f4;
        padding: 1rem;
        color: #f9f9fb
    }

    .mobile-dropdown .dropdown-header .header-title {
        margin-bottom: 0;
        text-transform: uppercase;
        color: #f9f9fb
    }

    .mobile-dropdown.inner-dropdown {
        position: static;
        padding-bottom: 90px;
        padding-top: 0;
        height: 100%;
        display: flex;
        flex-direction: column
    }

    .mobile-dropdown.inner-dropdown ul {
        flex: 1 1
    }

    .mobile-dropdown .copyright {
        padding: 1rem 1.5rem
    }

    .mobile-dropdown .copyright p {
        color: #a5a6a7
    }

    @media(orientation:landscape) {
        .mobile-dropdown .search-icon {
            display: none
        }
    }

    .edition-flag-icon {
        width: 20px;
        height: 20px;
        margin-bottom: 4px
    }

    .mobile-dropdown .tab-panel,
    .mobile-navbar .tab-panel {
        overflow: scroll
    }

    .mobile-dropdown .tab-panel .mobile-dropdown.inner-dropdown,
    .mobile-navbar .tab-panel .mobile-dropdown.inner-dropdown {
        min-height: -webkit-max-content;
        min-height: max-content
    }

    .mobile-dropdown .tab-panel .form-inline,
    .mobile-navbar .tab-panel .form-inline {
        width: calc(100% - 10px);
        margin-left: 5px;
        margin-right: 5px
    }

    .mobile-dropdown .nav-link.active .icon-home-outline-after:after,
    .mobile-navbar .nav-link.active .icon-home-outline-after:after {
        content: "ó"
    }

    .mobile-dropdown .nav-link.active .icon-cricket-outline-after:after,
    .mobile-navbar .nav-link.active .icon-cricket-outline-after:after {
        content: "H"
    }

    .mobile-dropdown .nav-link.active .icon-games-outline-after:after,
    .mobile-navbar .nav-link.active .icon-games-outline-after:after {
        content: "n"
    }

    .mobile-dropdown .nav-link.active .icon-triple-line-outline-after:after,
    .mobile-navbar .nav-link.active .icon-triple-line-outline-after:after {
        content: ""
    }

    .mobile-dropdown .nav-link.active .icon-play02-outline-after:after,
    .mobile-navbar .nav-link.active .icon-play02-outline-after:after {
        content: "²"
    }

    .mobile-dropdown .nav-link.active .icon-shield-outline-after:after,
    .mobile-navbar .nav-link.active .icon-shield-outline-after:after {
        content: ""
    }

    .mobile-dropdown .nav-link.active .icon-edit-outline-after:after,
    .mobile-navbar .nav-link.active .icon-edit-outline-after:after {
        content: "ã"
    }

    .mobile-dropdown .nav-link.active .icon-play-outline-after:after,
    .mobile-navbar .nav-link.active .icon-play-outline-after:after {
        content: ""
    }

    .mobile-dropdown .nav-link.active .icon-graph-vertical-outline-after:after,
    .mobile-navbar .nav-link.active .icon-graph-vertical-outline-after:after {
        content: "r"
    }

    .mobile-dropdown .nav-link.is-forced-inactive .icon-home-outline-after:after,
    .mobile-navbar .nav-link.is-forced-inactive .icon-home-outline-after:after {
        content: "ñ"
    }

    .mobile-dropdown .nav-link.is-forced-inactive .icon-cricket-outline-after:after,
    .mobile-navbar .nav-link.is-forced-inactive .icon-cricket-outline-after:after {
        content: "G"
    }

    @media(max-width:767.98px) {
        .mobile-navbar-search:-ms-input-placeholder {
            font-size: 12px
        }

        .mobile-navbar-search::placeholder {
            font-size: 12px
        }
    }

    .search-form {
        padding: 5px;
        background-color: #fff;
        font-size: 14px
    }

    .search-form input {
        border: 0;
        width: 300px
    }

    @media(max-width:1279.98px) {
        .search-form input {
            width: 220px
        }
    }

    .search-form input::-webkit-input-placeholder {
        color: #6c6d6f
    }

    .search-form input:focus {
        outline: none
    }

    .search-form button {
        box-sizing: border-box;
        float: right;
        border: 0;
        background: transparent
    }

    @media(max-width:1279.98px) {
        .search-form button {
            line-height: 28px;
            padding: 0 8px
        }
    }

    .more-options:hover,
    .search:hover,
    .user-profile:hover {
        cursor: pointer
    }

    .more-options {
        font-size: 2rem !important;
        line-height: 0 !important;
        background: transparent !important
    }

    .more-dropdown-menu {
        margin-top: 10px !important;
        left: -257px;
        width: 360px;
        padding: 20px 0 !important
    }

    .more-dropdown-menu:before {
        left: 78% !important
    }

    .more-dropdown-menu .featured-links {
        position: relative;
        padding: 0 20px
    }

    .more-dropdown-menu .featured-links .featured-link {
        display: flex;
        align-items: center;
        margin-bottom: 5px;
        border-bottom: 1px solid #edeef0;
        padding: 10px 0;
        color: #48494a
    }

    .more-dropdown-menu .featured-links .featured-link:last-of-type {
        border-bottom: none
    }

    .more-dropdown-menu .featured-links .featured-link img {
        position: relative;
        width: 25px;
        margin-right: 10px;
        border-radius: 0
    }

    .more-dropdown-menu .featured-links .featured-link .link-label {
        position: relative;
        font-size: 14px
    }

    .more-dropdown-menu .featured-links .featured-link .external-icon {
        position: absolute;
        right: 20px
    }

    .more-dropdown-menu .footer-links {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        border-top: 1px solid #edeef0;
        padding: 15px 20px 0
    }

    .more-dropdown-menu .footer-links .footer-link {
        color: #48494a;
        font-size: 12px;
        margin-bottom: 5px
    }

    .more-dropdown-menu .footer-links .footer-link:last-of-type {
        margin-bottom: 0
    }

    .print .navbar-brand img {
        border-radius: 0;
        margin: 0
    }

    .print .print-icon {
        cursor: pointer
    }

    @media print {
        .print .print-icon {
            display: none !important
        }
    }

    .content-block {
        padding-top: .25rem;
        margin-bottom: 1rem
    }

    .content-block .border-bottom:last-child,
    .content-block .sidebar-head:last-child,
    .content-block .sidebar-widget .sidebar-widget__title:last-child,
    .sidebar-widget .content-block .sidebar-widget__title:last-child {
        border-bottom: 0 !important
    }

    .content-block:empty {
        padding: 0;
        margin: 0
    }

    .content-block.breaking-news {
        padding-top: 0
    }

    .section-header {
        padding: .25rem 1rem
    }

    .section-header .image-container {
        padding-right: .75rem
    }

    .section-header img {
        width: 40px;
        height: auto
    }

    .section-header .header-title {
        margin-bottom: 0;
        letter-spacing: .4px
    }

    .section-header .header-subtitle {
        color: #6c6d6f;
        margin-top: 2px
    }

    @media(max-width:413.98px) {
        .section-header {
            padding: .5rem 1rem
        }
    }

    .sidebar-widget {
        margin-bottom: .5rem;
        width: 100%
    }

    .sidebar-widget .video-img {
        width: 100%
    }

    .sidebar-widget.content-block {
        padding-bottom: .25rem
    }

    .sidebar-widget .widget-title {
        padding-top: 10px;
        padding-bottom: 10px
    }

    .sidebar-widget .widget-title .header-title {
        text-transform: none !important
    }

    .sidebar-widget .sidebar-widget__content,
    .sidebar-widget .sidebar-widget__title {
        padding: 16px
    }

    .sidebar-widget .widget-items {
        margin-bottom: 0
    }

    .sidebar-widget .gallery-items {
        padding: 0
    }

    .sidebar-widget .gallery-items li {
        list-style-type: none
    }

    .sidebar-widget .gallery-items .widget-item {
        padding: 1rem
    }

    .sidebar-widget .gallery-items .widget-item:first-child {
        margin-top: .75rem
    }

    .sidebar-widget .gallery-items .widget-item:first-child .video-img {
        margin-bottom: 10px
    }

    .sidebar-widget .gallery-items .widget-item:last-child {
        margin-bottom: 1rem
    }

    .sidebar-widget .gallery-items .widget-item a {
        padding: 0
    }

    .sidebar-widget .gallery-items .widget-item .image-container {
        margin-bottom: .75rem
    }

    .sidebar-widget .gallery-items .widget-item .image-container .story-image {
        width: 100%
    }

    .sidebar-widget .gallery-items .widget-item .story-title {
        line-height: 1.5 !important
    }

    .sidebar-widget .gallery-items .widget-item .story-description {
        margin-top: .25rem
    }

    @media(max-width:413.98px) {
        .sidebar-widget .gallery-items .widget-item .block-story.story-enhanced .story-title {
            font-size: .75rem;
            line-height: 1.5;
            letter-spacing: .1px
        }
    }

    .sidebar-widget .widget-item a {
        padding: .5rem 1rem;
        transition: all .5s ease-in-out
    }

    .sidebar-widget .widget-item .feed-item {
        padding: .25rem .75rem .5rem 2.25rem
    }

    .sidebar-widget .widget-item:hover a {
        background-color: #f1f2f3;
        color: inherit
    }

    .sidebar-widget .widget-item:hover .block-story a {
        background-color: transparent
    }

    .sidebar-widget-videos {
        padding: 1rem
    }

    .sidebar-widget-videos a {
        display: block
    }

    .sidebar-widget-videos a:after {
        display: none
    }

    .sidebar-widget-videos .sidebar-widget-video {
        min-height: 140px;
        background: #f1f2f3
    }

    .sidebar-widget-videos .sidebar-widget-video .video-img {
        min-height: 140px
    }

    .sidebar-widget-videos-item {
        display: flex;
        margin-top: 15px;
        cursor: pointer
    }

    .sidebar-widget-videos-item .play-icon {
        width: 16px;
        height: 16px;
        margin-right: 8px
    }

    .sidebar-widget-videos-item .title {
        color: #000;
        font-weight: 700;
        font-family: BentonSans-Bold, Arial, Noto Sans, sans-serif;
        line-height: 20px
    }

    .sidebar-widget-videos-item .description {
        color: #6c6d6f
    }

    .sidebar-widget-videos-item .status {
        font-style: italic
    }

    .sidebar-head {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem
    }

    .sidebar-head>.head-title .pad-left {
        padding-left: .875rem
    }

    .sidebar-head>.head-link {
        letter-spacing: .2px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #06c;
        font-weight: 700
    }

    .sidebar-head>.head-link:hover {
        text-decoration: none
    }

    .sidebar-head>.head-link:hover .head-link-text {
        text-decoration: underline !important
    }

    .sidebar-widget-coverage {
        padding: 0
    }

    .sidebar-widget-coverage-item {
        padding: 1rem;
        border-bottom: 1px solid #edeef0
    }

    .sidebar-widget-coverage-item a:after {
        display: none
    }

    .sidebar-widget-coverage-item a {
        display: flex;
        align-items: flex-start;
        justify-content: space-between
    }

    .sidebar-widget-coverage-item a:hover img {
        transform: scale(1.1)
    }

    .sidebar-widget-coverage-item:last-of-type {
        border-bottom: none
    }

    .sidebar-widget-coverage-item img {
        min-height: 48px;
        min-width: 48px;
        width: 48px;
        height: 48px;
        -o-object-fit: cover;
        object-fit: cover;
        transition: all .5s ease-in-out
    }

    .sidebar-widget-coverage-item .image-container {
        border-radius: 10px;
        overflow: hidden;
        min-height: 48px;
        min-width: 48px;
        width: 48px;
        height: 48px
    }

    .sidebar-widget-coverage-item .content {
        margin-right: 1rem
    }

    .sidebar-widget-coverage-item .content .title {
        color: #000;
        transition: all .5s ease-in-out
    }

    .sidebar-widget-coverage-item .content .title:hover {
        color: #0278bb
    }

    .sidebar-widget-coverage-item .content .description {
        color: #6c6d6f
    }

    .sidebar-widget-customizations {
        font-size: .75rem
    }

    .sidebar-widget-customizations .option-title {
        font-family: BentonSans-Bold, Arial, Noto Sans, sans-serif;
        font-weight: 700;
        color: #2b2c2d
    }

    .sidebar-widget-customizations .option {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: .5rem 1rem;
        box-sizing: content-box;
        word-wrap: normal
    }

    .sidebar-widget-customizations .option-switch {
        width: 60%;
        padding: 1px;
        border: 1px solid #edeef0;
        background-color: #f1f2f3;
        border-radius: 4px
    }

    .sidebar-widget-customizations .option-switch .switch {
        padding: .5rem 1rem;
        box-sizing: content-box;
        border-radius: 4px;
        cursor: pointer;
        text-align: center
    }

    .sidebar-widget-customizations .option-switch .active {
        background-color: #fff
    }

    .link-with-image {
        color: #48494a;
        display: flex;
        align-items: center;
        width: 100%;
        position: relative;
        padding-right: 0
    }

    .link-with-image:hover:after,
    .link-with-image:hover:before {
        content: none
    }

    .link-with-image .link-image {
        width: 20px;
        height: 20px;
        border-radius: 100px;
        margin-right: .5rem
    }

    .feed-item {
        padding-left: 1rem;
        position: relative;
        color: #2b2c2d
    }

    .feed-item .feed-icon {
        position: absolute;
        height: 16px;
        left: .75rem
    }

    .block-story a {
        display: block
    }

    .block-story a:after {
        content: none
    }

    .block-story a .image-container {
        min-height: 100px
    }

    .block-story:hover .story-description,
    .block-story:hover .story-title {
        transition: all .5s ease-in-out
    }

    .block-story:hover .story-title {
        color: #0278bb
    }

    .block-story:hover .story-image {
        transform: scale(1.1);
        transition: all .5s ease-in-out
    }

    .block-story.story-enhanced {
        padding: 1rem
    }

    .block-story.story-enhanced .image-container {
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 1.5rem
    }

    .block-story.story-enhanced .story-content {
        padding-left: 0
    }

    .block-story.story-enhanced .story-content .story-title {
        margin-bottom: .2rem;
        line-height: 1.7rem
    }

    .block-story.story-slim {
        padding: 1rem
    }

    .block-story.story-slim .image-container {
        position: relative;
        width: 100%;
        padding-top: 66%;
        border-radius: 10px;
        overflow: hidden
    }

    .block-story.story-slim .image-container .story-image {
        position: absolute;
        height: 100%;
        width: auto;
        max-width: none;
        border-radius: 0;
        left: 50%;
        top: 50%;
        transform: translateY(-50%) translateX(-50%);
        -webkit-transform: translateY(-50%) translateX(-50%)
    }

    .block-story.story-slim>.story-container:hover .story-image {
        transform: translateY(-50%) translateX(-50%) scale(1.1);
        -webkit-transform: translateY(-50%) translateX(-50%) scale(1.1);
        transition: all .5s ease-in-out
    }

    .block-story .story-title {
        margin-bottom: .25rem;
        display: block
    }

    .block-story .story-description {
        margin-bottom: .5rem;
        color: #48494a
    }

    .block-story .story-footer-container span {
        margin-right: .5rem
    }

    .block-story .story-footer-container span:after {
        content: "";
        font-family: ESPNIcons;
        font-weight: 400;
        -moz-font-smoothing: antialiased;
        -o-font-smoothing: antialiased;
        -webkit-font-smoothing: antialiased;
        visibility: inherit;
        text-transform: none;
        font-size: .5rem;
        position: relative;
        top: -2px;
        left: 4px
    }

    .block-story .story-footer-container span:last-child:after {
        content: none
    }

    .block-story .story-content {
        padding-left: 1rem
    }

    @media(max-width:767.98px) {
        .block-story.story-slim {
            padding: 1rem
        }

        .block-story.story-slim .image-container {
            padding-top: 100%;
            margin-right: -4px
        }
    }

    @media(max-width:767.98px)and (orientation:landscape) {
        .block-story.story-slim .image-container {
            padding-top: 66%
        }
    }

    @media(max-width:767.98px) {
        .block-story.story-slim .story-title {
            font-size: .875rem;
            line-height: 1.25;
            letter-spacing: .2px;
            margin-bottom: .25rem
        }

        .block-story.story-slim .story-description {
            font-size: .75rem;
            line-height: 1.5;
            letter-spacing: .1px;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden
        }

        .block-story.story-enhanced {
            padding: 1rem
        }

        .block-story.story-enhanced .story-title {
            font-size: 1rem;
            line-height: 1.25 !important;
            letter-spacing: .2px
        }

        .block-story.story-enhanced .story-description {
            font-size: .75rem;
            line-height: 1.5;
            letter-spacing: .1px
        }
    }

    .links-story-block .section-header .col {
        height: auto !important
    }

    .snackbar {
        height: 44px;
        display: flex;
        align-items: center;
        position: sticky !important;
        position: -webkit-sticky !important;
        width: 100%;
        z-index: 120;
        top: 0
    }

    .snackbar-back-arrow {
        position: relative;
        margin-left: 5px
    }

    @media(max-width:1023.98px) {
        .snackbar-back-arrow {
            top: -3px
        }
    }

    .snackbar-back-arrow i {
        font-weight: 700
    }

    .snackbar-title {
        font-weight: 700;
        letter-spacing: .3px
    }

    .widget-tabs {
        background: #fff;
        height: 40px;
        display: flex;
        flex-direction: row
    }

    @media(max-width:1023.98px) {
        .widget-tabs {
            overflow-x: scroll;
            height: auto;
            scrollbar-width: none;
            -webkit-overflow-scrolling: touch
        }

        .widget-tabs::-webkit-scrollbar {
            display: none
        }
    }

    .widget-tab {
        padding: 10px;
        position: relative;
        color: #a5a6a7;
        cursor: pointer
    }

    .widget-tab-link {
        color: #a5a6a7;
        transition: none;
        flex-shrink: 0
    }

    .widget-tab-link:after,
    .widget-tab-link:before {
        display: none !important
    }

    .widget-tab:hover,
    .widget-tab:hover a {
        color: #007aff
    }

    .widget-tab-active,
    .widget-tab-active a {
        color: #2b2c2d
    }

    .widget-tab-active:after {
        content: "";
        display: block;
        position: absolute;
        width: 100%;
        height: 3px;
        background: #d00;
        bottom: 0;
        left: 0
    }

    .video-landscape .img,
    .video-landscape img {
        width: 100%
    }

    .video-img {
        position: relative;
        border-radius: 10px;
        background: #f1f2f3;
        cursor: pointer
    }

    .video-img:hover .image-container .video-icon {
        background: #fff
    }

    .video-img-unplayed:hover .image-container .story-video-image {
        transform: scale(1.1);
        transition: all .5s ease-in-out
    }

    .video-img-icon {
        width: 76px;
        height: 32px;
        background-color: #fff;
        display: flex;
        position: absolute;
        bottom: 10px;
        left: 10px;
        border-radius: 20px;
        z-index: 2;
        flex-direction: row;
        justify-content: center;
        align-items: center
    }

    .video-img-icon .icon-play-arrow-solid-after:after {
        position: static
    }

    .video-img-icon.no-duration {
        width: 32px;
        height: 32px;
        border-radius: 50%
    }

    .video-img-duration {
        font-size: .75rem;
        display: inline-block;
        margin-left: 6px
    }

    .video-img.video-carousel .video-img-icon {
        width: 58px;
        height: 24px
    }

    .video-img.video-carousel .video-img-icon i {
        font-size: 9px
    }

    .video-img.video-carousel .video-img-duration {
        font-size: .625rem;
        margin-left: 4px
    }

    @media(max-width:1023.98px) {
        .video-img-icon {
            width: 58px;
            height: 24px
        }

        .video-img-icon i {
            font-size: 9px
        }

        .video-img-duration {
            font-size: .625rem;
            margin-left: 4px
        }
    }

    .video-modal .modal-title {
        text-transform: uppercase;
        min-height: 18px
    }

    .video-modal .modal-body {
        height: 400px;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-width: 700px
    }

    @media(max-width:1023.98px) {
        .video-modal .modal-body {
            min-width: 500px
        }
    }

    @media(max-width:767.98px) {
        .video-modal .modal-body {
            min-width: auto
        }
    }

    .video-feed-title {
        cursor: pointer
    }

    .sidebar-widget-table.table thead th {
        border: 0;
        padding: .6rem .2rem;
        color: #2b2c2d;
        font-size: .625rem;
        background-color: #f9f9fb;
        font-family: BentonSans-Bold, Arial, Noto Sans, sans-serif
    }

    .sidebar-widget-table.table td {
        padding: .6rem .2rem;
        color: #2b2c2d;
        border-color: #edeef0;
        font-size: .75rem
    }

    .sidebar-widget-view-all {
        padding: .5rem;
        display: flex;
        justify-content: center;
        border-top: 1px solid #edeef0
    }

    .sidebar-table-name {
        color: #2b2c2d;
        font-size: .75rem;
        padding: .6rem;
        border-bottom: 1px solid #edeef0
    }

    .sidebar-widget-league-schedule .note {
        color: #6c6d6f;
        text-transform: none
    }

    .sidebar-widget-league-schedule .desc {
        color: #a5a6a7;
        text-transform: none
    }

    .sidebar-widget-league-schedule .cta-link {
        text-align: center;
        padding: 10px 0
    }

    .sidebar-widget-league-schedule .cta-link a {
        color: #03a9f4
    }

    .sidebar-widget-league-schedule .no-matches-container {
        box-shadow: none
    }

    .sidebar-widget-league-schedule .widget-items {
        padding: 5px 0;
        width: 100%
    }

    .sidebar-widget-league-schedule .widget-items>label {
        padding-top: 2px !important
    }

    .sidebar-widget-score-quick-links {
        padding-bottom: 10px
    }

    .sidebar-widget-score-quick-links a {
        width: 100%;
        position: relative
    }

    .sidebar-widget-score-quick-links .quick-link-parent:hover {
        background-color: #f1f2f3
    }

    .sidebar-widget-score-quick-links .quick-link {
        display: flex;
        padding: 10px;
        align-items: baseline;
        width: 85%;
        position: relative
    }

    .sidebar-widget-score-quick-links .quick-link-title {
        color: #151617;
        font-weight: 700
    }

    .sidebar-widget-score-quick-links .quick-link-desc {
        color: #6c6d6f;
        letter-spacing: .1px;
        margin-top: 5px
    }

    .sidebar-widget-score-quick-links .quick-link-icon {
        margin-right: 10px;
        color: #151617
    }

    .sidebar-widget-score-quick-links .quick-link-external-icon {
        color: #1d1e1f;
        position: absolute;
        top: 10px;
        right: 10px
    }

    .widget-items.list-unstyled {
        padding: .5rem 0
    }

    .sliding-match-cards .title {
        text-transform: uppercase;
        letter-spacing: .8px;
        color: #151617;
        font-weight: 700
    }

    .sliding-match-cards .match-cards {
        display: flex;
        overflow-x: scroll;
        flex-direction: row;
        border-radius: 0;
        box-shadow: 1px 1px 6px rgba(0, 0, 0, .16);
        background: #fff;
        scrollbar-width: none;
        -webkit-overflow-scrolling: touch
    }

    .sliding-match-cards .match-cards::-webkit-scrollbar {
        display: none
    }

    .sliding-match-cards .view-all-card {
        min-width: 225px;
        display: flex;
        justify-content: center;
        align-items: center
    }

    .sliding-match-cards .view-all-card .text {
        color: #000;
        font-weight: 700
    }

    .sliding-match-cards .view-all-card .icon {
        position: relative;
        top: -2px;
        margin-right: 2px
    }

    .widget-container {
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between
    }

    .league-leader .player-name:hover {
        text-decoration: underline
    }

    .league-leader .innings-and-average {
        color: #6c6d6f
    }

    @keyframes ci-spinner-animation {
        0% {
            transform: rotate(0deg)
        }

        to {
            transform: rotate(1turn)
        }
    }

    .ci-spinner {
        display: block;
        position: fixed;
        z-index: 1031;
        top: 15px;
        right: 15px
    }

    .ci-spinner .spinner-icon {
        width: 18px;
        height: 18px;
        box-sizing: border-box;
        border-color: #fff transparent transparent #fff;
        border-style: solid;
        border-width: 2px;
        border-radius: 50%;
        animation: ci-spinner-animation .4s linear infinite
    }

    .absolute-center {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%)
    }

    .horizontal-slider-cnt {
        overflow: hidden;
        overflow-x: scroll;
        overflow-y: hidden;
        display: flex;
        scrollbar-width: none;
        -webkit-overflow-scrolling: touch
    }

    .horizontal-slider-cnt::-webkit-scrollbar {
        display: none
    }

    .horizontal-slider-item {
        display: inline-block;
        flex: 0 0 auto
    }

    .scroll-to-top {
        display: flex;
        justify-content: center;
        padding: 12px 0;
        cursor: pointer;
        color: #06c;
        font-size: .875rem;
        line-height: 1.5;
        letter-spacing: 0;
        margin: 10px 0;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .scroll-to-top .arrow-top-icon {
        position: relative;
        height: 14px;
        top: 2px;
        margin-left: 4px
    }

    .winner-icon {
        margin-left: .25rem;
        position: relative;
        top: -1px
    }

    .winner-icon,
    .winner-icon:after {
        line-height: 1
    }

    .livestream-wrapper {
        position: relative
    }

    .livestream-wrapper .video-img-play-icon,
    .livestream-wrapper img {
        cursor: pointer
    }

    .livestreamIframe,
    .youTubeIframe {
        border-radius: 10px;
        overflow: hidden
    }

    .youtube-parent {
        padding: 1rem
    }

    .youtube-parent .youTubeIframe {
        background: #f1f2f3
    }

    .mobile-sticky-ad {
        position: fixed;
        background: #f9f9fb;
        bottom: 54px;
        left: 0;
        right: 0;
        width: 100%;
        padding: 4px 10px;
        min-height: 60px;
        border-top: 1px solid rgba(0, 0, 0, .1);
        z-index: 111
    }

    .page-bottom-margin {
        margin-bottom: 100px
    }

    .language-card .modal-body-header,
    .notification-card .modal-body-header {
        padding: 35px 20px 0;
        font-family: BentonSans-Bold, Arial, Noto Sans, sans-serif;
        font-size: 18px;
        letter-spacing: .2px
    }

    .home-page-wrapper .match-scorecard-table .language-card td.modal-body-header,
    .home-page-wrapper .match-scorecard-table .language-card th.modal-body-header,
    .home-page-wrapper .match-scorecard-table .notification-card td.modal-body-header,
    .home-page-wrapper .match-scorecard-table .notification-card th.modal-body-header,
    .home-page-wrapper .match-scorecard-table td .language-card a.modal-body-header,
    .home-page-wrapper .match-scorecard-table td .notification-card a.modal-body-header,
    .language-card .home-page-wrapper .match-scorecard-table td.modal-body-header,
    .language-card .home-page-wrapper .match-scorecard-table td a.modal-body-header,
    .language-card .home-page-wrapper .match-scorecard-table th.modal-body-header,
    .language-card .modal-body-header.small,
    .language-card .modal-body-header.widget-tab,
    .language-card .modal-header .modal-body-header.modal-description,
    .language-card .primary-navbar .modal-body-header.nav-link,
    .language-card .sidebar-head>.modal-body-header.head-title,
    .modal-header .language-card .modal-body-header.modal-description,
    .modal-header .notification-card .modal-body-header.modal-description,
    .notification-card .home-page-wrapper .match-scorecard-table td.modal-body-header,
    .notification-card .home-page-wrapper .match-scorecard-table td a.modal-body-header,
    .notification-card .home-page-wrapper .match-scorecard-table th.modal-body-header,
    .notification-card .modal-body-header.small,
    .notification-card .modal-body-header.widget-tab,
    .notification-card .modal-header .modal-body-header.modal-description,
    .notification-card .primary-navbar .modal-body-header.nav-link,
    .notification-card .sidebar-head>.modal-body-header.head-title,
    .primary-navbar .language-card .modal-body-header.nav-link,
    .primary-navbar .notification-card .modal-body-header.nav-link {
        font-size: 14px
    }

    .language-card .cancel,
    .notification-card .cancel {
        position: absolute;
        right: 14px;
        top: 2px;
        font-size: 24px;
        color: #2b2c2d;
        cursor: pointer
    }

    @media(max-width:1023.98px) {

        .language-card .cancel,
        .notification-card .cancel {
            position: fixed
        }
    }

    .notification-entity {
        padding: 15px 20px;
        border-bottom: 1px solid #f1f2f3;
        display: flex
    }

    .notification-entity .entity-toggle {
        margin-right: 12px
    }

    .notification-entity .entity-body {
        width: 98%;
        position: relative
    }

    .notification-entity:last-of-type {
        padding-bottom: 20px;
        border-bottom: none
    }

    .notification-entity .header {
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: space-between
    }

    .notification-entity .header img {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px
    }

    .notification-entity .header .title {
        color: #a5a6a7;
        font-size: 12px;
        line-height: 18px;
        font-weight: 700;
        font-family: BentonSans-Bold, Arial, Noto Sans, sans-serif;
        letter-spacing: .6px
    }

    .notification-entity .header .sub-title {
        color: #2b2c2d;
        font-size: 14px;
        line-height: 21px;
        margin-top: 2px
    }

    .notification-entity .header .description {
        color: #a5a6a7;
        font-size: 12px;
        line-height: 18px
    }

    .notification-entity .preferences {
        margin-top: 14px;
        display: flex
    }

    .notification-entity .preference {
        color: #000;
        font-size: 12px;
        line-height: 18px;
        letter-spacing: .1px;
        margin-bottom: 8px;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
        display: flex;
        background: #f1f2f3;
        cursor: pointer;
        padding: 8px 16px;
        margin-right: 8px;
        border-radius: 4px
    }

    .notification-entity .preference-single {
        background: inherit
    }

    .notification-entity .preference .check-icon-container {
        background: #dcdddf;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        margin-right: 8px;
        overflow: hidden
    }

    .notification-entity .preference .check-icon-container.checked {
        background: #d00
    }

    .notification-entity .preference .check-icon-container i {
        color: #fff
    }

    .notification-entity-single .preference {
        border: none;
        font-size: 14px;
        padding-left: 0
    }

    .notification-entity-single .preference .switch {
        margin-right: 6px
    }

    .notification-card-mobile {
        position: fixed;
        width: 100%;
        height: 100%;
        bottom: 0;
        border-radius: 0;
        overflow: scroll
    }

    .notification-card-desktop {
        width: 500px;
        padding-bottom: 20px
    }

    .language-card .modal-body-header {
        padding-top: 20px;
        font-size: 12px
    }

    .language-card .language-body {
        margin: 12px 0;
        padding: 12px 20px;
        border-top: 1px solid #edeef0;
        border-bottom: 1px solid #edeef0
    }

    .language-card .language-body .extra-info {
        font-size: 12px;
        color: #6c6d6f;
        padding-left: 32px;
        display: block
    }

    .language-card .language-footer {
        font-size: 12px;
        color: #6c6d6f;
        padding: 0 20px 12px
    }

    .language-card-mobile {
        position: fixed;
        width: 100%;
        bottom: 0;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0
    }

    .nlp-sidebar-widget {
        display: flex;
        margin-bottom: .5rem
    }

    .nlp-sidebar-widget .logo-wrapper {
        text-align: center;
        padding-top: 1.5rem;
        padding-bottom: .5rem
    }

    .nlp-sidebar-widget .logo-wrapper img {
        width: 135px;
        border-radius: 0
    }

    .nlp-sidebar-widget .content {
        padding: 1rem
    }

    .nlp-sidebar-widget .divider {
        height: 1px;
        width: 100%;
        background: #edeef0
    }

    .nlp-sidebar-widget .title {
        font-weight: 500;
        font-size: 14px;
        font-family: BentonSans-Bold, Arial, Noto Sans, sans-serif;
        margin-bottom: 1rem
    }

    .nlp-sidebar-widget .questions {
        text-align: center
    }

    .nlp-sidebar-widget .questions .question {
        color: #2b2c2d;
        font-size: 14px;
        margin-bottom: 1rem
    }

    .nlp-sidebar-widget .questions a.question {
        font-size: 14px;
        margin-bottom: 8px;
        display: flex;
        align-items: baseline
    }

    .nlp-sidebar-widget .questions a.question:hover {
        color: #0278bb
    }

    .nlp-sidebar-widget .questions a.question>i {
        margin-right: 8px
    }

    .nlp-sidebar-widget .questions-cta {
        width: 100%;
        text-align: center;
        margin-top: .5rem
    }

    .nlp-sidebar-widget .questions-cta i {
        position: relative;
        top: -1px;
        right: 4px
    }

    .nlp-sidebar-widget .questions-cta a {
        border: 1px solid #03a9f4;
        padding: 8px 0;
        width: 100%;
        border-radius: 40px;
        font-size: 14px;
        font-weight: 700;
        font-family: BentonSans-Bold, Arial, Noto Sans, sans-serif
    }

    .nlp-banner {
        width: 100%;
        display: flex;
        padding: 1.5rem 1rem !important
    }

    .nlp-banner .content {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center
    }

    .nlp-banner .content .title {
        font-weight: 500;
        font-family: BentonSans-Bold, Arial, Noto Sans, sans-serif
    }

    .nlp-banner .content .question {
        color: #2b2c2d
    }

    .nlp-banner .content .question:hover {
        color: #0278bb
    }

    .nlp-banner .logo {
        text-align: right
    }

    .nlp-banner .logo img {
        border-radius: 0;
        width: 120px
    }

    @media(max-width:767.98px) {

        .nlp-banner .question,
        .nlp-banner .title {
            font-size: 14px
        }

        .nlp-banner .icon img {
            width: 100px
        }
    }

    .nlp-sticky-button {
        position: fixed;
        right: 6px;
        width: 56px;
        height: 56px;
        border-radius: 50%;
        box-shadow: 0 0 16px rgba(0, 0, 0, .16);
        z-index: 1
    }

    .nlp-sticky-button img {
        width: 100%;
        height: 100%
    }

    .sidebar-widget-videos-item {
        position: relative;
        display: block
    }

    .sidebar-widget-videos-item .video-img-play-icon {
        top: 30%
    }

    .sidebar-widget-videos-item.no-image {
        display: flex;
        flex-direction: row
    }

    .sidebar-widget-videos-item.no-image .description,
    .sidebar-widget-videos-item.no-image .title {
        transition: all .5s ease-in-out
    }

    .sidebar-widget-videos-item.no-image .play-icon:after {
        position: static
    }

    .sidebar-widget-videos-item.no-image:hover .description,
    .sidebar-widget-videos-item.no-image:hover .title {
        color: #0278bb;
        transition: all .5s ease-in-out
    }

    .description p {
        font-size: .75rem;
        line-height: 1.5;
        letter-spacing: .1px
    }

    .icon-play-arrow-solid-after:after {
        left: 55% !important
    }

    #language-tooltip {
        position: absolute;
        right: calc(40px + .4rem);
        transform: translate3d(0, -50%, 0) !important;
        display: inline-block;
        z-index: 998;
        top: calc(6px + .2rem)
    }

    #language-tooltip .tooltip-label {
        padding: 16px;
        text-align: center;
        background: #000;
        box-shadow: 4px 4px 20px rgba(0, 0, 0, .16);
        font-family: BentonSans;
        font-size: 16px;
        line-height: 24px;
        color: #fff;
        border-radius: 10px
    }

    #language-tooltip .tooltip-arrow {
        background: #000;
        position: absolute;
        top: calc(50% - 6px);
        right: 0;
        transform: translate3d(100%, 0, 0);
        width: 12px;
        height: 12px;
        -webkit-clip-path: polygon(0 0, 50% 50%, 50% 50%, 0 100%);
        clip-path: polygon(0 0, 50% 50%, 50% 50%, 0 100%)
    }

    .adjust-tooltip-with-notification {
        right: calc(70px + .4rem) !important
    }

    .no-content .empty-container {
        height: 120px;
        width: 120px;
        margin-bottom: 16px;
        background-color: #edeef0
    }

    .no-content label {
        font-size: 16px;
        color: #6c6d6f
    }

    .player-short-description {
        color: #6c6d6f;
        position: relative;
        top: 1px;
        text-transform: lowercase;
        margin-left: 5px
    }

    .dropdown-container {
        position: relative;
        display: inline-block;
        min-width: inherit;
        margin-right: 10px
    }

    .dropdown-container button {
        z-index: 89;
        width: 100%;
        padding: 6px 10px;
        border: 1px solid #edeef0;
        border-radius: 16px;
        background-color: #fff;
        min-height: 32px;
        color: #333;
        outline: 0;
        font-family: BentonSans, Arial, Noto Sans, sans-serif;
        font-size: 12px;
        font-weight: 700;
        display: flex;
        justify-content: space-between
    }

    .dropdown-container button .espn-icon:after {
        color: red
    }

    .dropdown-container .btn-focus {
        background-color: #fff
    }

    .dropdown-container .ci-dd__menu,
    .dropdown-container .ci-dd__menu-2 {
        z-index: 99;
        position: absolute;
        top: 110%;
        left: 0;
        border-radius: 10px;
        width: 100%;
        border: 1px solid rgba(0, 0, 0, .04);
        box-shadow: 0 16px 24px 2px rgba(0, 0, 0, .14);
        background-color: #fff;
        max-height: 500px;
        overflow-y: auto;
        overflow-x: hidden
    }

    @media(max-width:1023.98px) {

        .dropdown-container .ci-dd__menu,
        .dropdown-container .ci-dd__menu-2 {
            min-width: 200px
        }
    }

    .dropdown-container .ci-dd__menu-2 ul,
    .dropdown-container .ci-dd__menu ul {
        list-style: none;
        padding: 0;
        margin: 0
    }

    .dropdown-container .ci-dd__menu-2 ul li,
    .dropdown-container .ci-dd__menu ul li {
        font-family: BentonSans, Arial, Noto Sans, sans-serif;
        font-size: 12px;
        font-weight: 700;
        padding: 10px;
        display: flex;
        align-items: center;
        cursor: pointer
    }

    .dropdown-container .ci-dd__menu-2 ul .ci-dd__selected-option,
    .dropdown-container .ci-dd__menu-2 ul li:active,
    .dropdown-container .ci-dd__menu-2 ul li:hover,
    .dropdown-container .ci-dd__menu ul .ci-dd__selected-option,
    .dropdown-container .ci-dd__menu ul li:active,
    .dropdown-container .ci-dd__menu ul li:hover {
        background-color: #edeef0
    }

    .dropdown-container .ci-dd__menu-2 {
        left: auto;
        right: 164px;
        width: 120%
    }

    .standings-widget-table.table thead th {
        border: 0;
        padding: 9px 8px;
        color: #2b2c2d;
        text-transform: uppercase;
        font-size: .625rem;
        background-color: #f9f9fb;
        font-family: BentonSans-Bold, Arial, Noto Sans, sans-serif
    }

    .standings-widget-table.table thead th:first-child {
        text-align: left;
        white-space: nowrap;
        position: sticky !important;
        position: -webkit-sticky !important;
        left: 0;
        z-index: 10
    }

    .standings-widget-table.table thead th>button {
        padding: 0
    }

    .standings-widget-table.table td {
        padding: 9px 10px;
        color: #2b2c2d;
        border-color: #edeef0;
        font-size: .75rem
    }

    .standings-widget-table.table td:first-child {
        text-align: left;
        position: sticky !important;
        position: -webkit-sticky !important;
        left: 0;
        z-index: 10;
        background-color: #fdfdfd;
        white-space: nowrap
    }

    .standings-widget-table.table .rank {
        min-width: 20px
    }

    .standings-widget-table.table .team-listing>.row {
        flex-wrap: nowrap
    }

    .standings-widget-table.table .team-listing .image-container .espn-icon {
        font-size: 1.5rem
    }

    .standings-widget-table.table .team-listing .image-container img {
        width: 25px;
        border-radius: 5px
    }

    .standings-widget-table.table .team-listing h5 {
        color: #03a9f4;
        font-size: .75rem;
        margin-left: 10px
    }

    .standings-widget-table.table a:hover:after,
    .standings-widget-table.table a:hover:before {
        display: none
    }

    @media(max-width:1023.98px) {
        .standings-widget-table .image-container {
            padding-right: 0
        }

        .standings-widget-table.table .team-listing>.row {
            display: flex;
            flex-direction: column
        }

        .standings-widget-table.table .team-listing h5 {
            font-size: .625rem;
            line-height: 1.6;
            letter-spacing: 0;
            margin-left: 0
        }
    }

    .related-videos {
        margin-top: 1rem
    }

    .related-videos .slick-next,
    .related-videos .slick-prev {
        background: #f9f9fb;
        box-shadow: 1px 1px 6px rgba(0, 0, 0, .16);
        z-index: 99;
        border-radius: 4px;
        width: 28px;
        height: 28px;
        top: 30%
    }

    .related-videos .slick-next:before,
    .related-videos .slick-prev:before {
        opacity: 1;
        color: #d00
    }

    .related-videos .slick-next.slick-disabled:before,
    .related-videos .slick-prev.slick-disabled:before {
        color: #cbccce
    }

    .related-videos .slick-prev {
        left: -6px
    }

    .related-videos .slick-next {
        right: -2px
    }

    .related-videos .latest-video {
        vertical-align: top
    }

    .related-videos .latest-video .video-info {
        margin: 0
    }

    .related-videos .latest-video+.latest-video {
        margin-left: 16px
    }

    @media(max-width:1023.98px) {
        .related-videos h2 {
            font-size: 1rem;
            margin-bottom: 16px !important
        }

        .related-videos .horizontal-slider-item+.horizontal-slider-item {
            margin-left: 12px
        }

        .related-videos .video-info {
            width: 240px;
            margin: 0
        }

        .related-videos .video-info .video-info__image .video-img {
            height: 135px
        }
    }

    .video-info {
        width: 284px;
        margin: 0 8px
    }

    .video-info .video-info__image .video-img {
        height: 160px;
        overflow: hidden
    }

    .video-info .video-info__image .video-img img {
        width: 100%;
        transition: all .2s ease-in
    }

    .video-info .video-info__details {
        margin-top: 6px
    }

    .video-info .video-info__details .video-info__title {
        margin: 8px 0;
        color: #2b2c2d;
        font-size: .875rem
    }

    .video-info .video-info__details .video-info__tag {
        color: #a5a6a7;
        font-size: .75rem
    }

    .video-info .video-info__details .video-info__tag+p {
        margin-top: 2px
    }

    .video-info .video-info__details .video-info__subtitle {
        color: #6c6d6f;
        font-size: .75rem;
        font-weight: 400
    }

    .video-info:hover .video-info__image img {
        transform: scale(1.05)
    }

    @media(max-width:1023.98px) {
        .video-info {
            width: 100%;
            margin: 0 0 12px
        }

        .video-info .video-info__image .video-img {
            height: 190px;
            overflow: hidden
        }

        .video-info .video-info__details {
            margin-top: 2px
        }

        .video-info .video-info__details p {
            font-size: .75rem;
            margin: 4px 0
        }

        .video-info .video-info__details .video-info__subtitle {
            font-size: .625rem
        }
    }

    .video-hero .jumbotron .jumbotron-image {
        border: none;
        width: auto
    }

    .video-hero .video-hero-duration {
        width: 94px;
        height: 48px;
        border-radius: 100px;
        background: #fff;
        display: flex;
        align-items: center;
        flex-direction: row;
        padding: 12px;
        color: #2b2c2d;
        justify-content: center;
        margin-bottom: 24px
    }

    .video-hero .video-hero-duration.no-duration {
        width: 48px
    }

    .video-hero .video-hero-duration i {
        color: #d00
    }

    .video-hero .video-hero-duration .icon-play-arrow-solid-after:after {
        position: static
    }

    .video-hero .video-hero-duration span {
        font-size: .875rem;
        margin-left: 8px
    }

    .video-hero .video-hero-subtitle {
        color: #f1f2f3;
        font-size: .875rem !important;
        margin-bottom: 8px !important
    }

    .video-hero h1 {
        margin-bottom: 8px !important
    }

    @media(max-width:1023.98px) {
        .video-hero h1 {
            margin-bottom: 1px !important
        }

        .video-hero .video-hero-duration {
            width: 76px;
            height: 32px;
            margin-bottom: 16px
        }

        .video-hero .video-hero-duration span {
            font-size: .75rem;
            margin-left: 6px
        }

        .video-hero .video-hero-duration.no-duration {
            width: 32px
        }

        .video-hero .video-hero-subtitle {
            font-size: .75rem !important
        }

        .video-hero h1 {
            font-size: 1.25rem
        }

        .video-hero time {
            font-size: .75rem
        }
    }

    .video-hero.hero-full-width .jumbotron-block {
        padding-right: 58.5%;
        padding-top: 0;
        height: 500px
    }

    .video-hero.hero-full-width .jumbotron-block .image-container {
        right: 0;
        left: auto;
        width: 656px;
        height: 500px;
        padding-right: 72.5%;
        padding-top: 0
    }

    .video-hero.hero-full-width .jumbotron-block .image-container:after {
        background: linear-gradient(90deg, #000, rgba(0, 0, 0, .95) 22%, rgba(4, 4, 4, .7) 60%, transparent);
        width: auto;
        height: 100%;
        padding-right: 30%;
        padding-top: 0;
        bottom: 0;
        left: -16px
    }

    .video-hero.hero-full-width .jumbotron-block .image-container .jumbotron-image {
        width: auto
    }

    .video-hero.hero-full-width .jumbotron-block .content {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding-left: 3rem
    }

    .video-hero.hero-full-width .jumbotron-block .content h1 {
        font-size: 2rem
    }

    .video-hero.hero-full-width .jumbotron-block .content time {
        font-size: .875rem;
        color: #a5a6a7
    }

    .home-page-wrapper .match-scorecard-table .section-header {
        padding: 12px 14px
    }

    @media(max-width:1023.98px) {
        .vertical-story-image {
            width: 100%;
            height: 100%
        }
    }

    .vertical-image-container {
        overflow: hidden !important;
        border-radius: 10px !important
    }

    @media(max-width:1023.98px) {
        .match-comment-run-container {
            display: flex;
            justify-content: center;
            align-items: center
        }
    }

    .match-comment-run {
        background: #edeef0;
        border-radius: 4px;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: .875rem;
        line-height: 1.5;
        letter-spacing: 0;
        font-weight: 700;
        font-family: BentonSans-Bold, Arial, Noto Sans, sans-serif;
        color: #2b2c2d
    }

    @media(max-width:1023.98px) {
        .match-comment-run {
            width: 36px;
            height: 20px;
            font-size: .75rem;
            line-height: 1.5;
            letter-spacing: .1px
        }
    }

    .match-comment-run-four {
        background: #094;
        color: #fff
    }

    .match-comment-run-six {
        background: #7a41d8;
        color: #fff
    }

    .match-comment-run-wicket {
        background: #d00;
        color: #fff
    }

    .react-tabs__tab {
        color: #a5a6a7;
        font-size: .875rem;
        flex-grow: 1;
        text-align: center
    }

    .react-tabs__tab-list {
        box-shadow: 0 4px 6px rgba(0, 0, 0, .16);
        border-bottom: none !important;
        display: flex
    }

    .react-tabs__tab--selected {
        border: none !important;
        border-bottom: 3px solid #d00 !important;
        color: #2b2c2d !important;
        font-weight: 700
    }

    .switch {
        position: relative;
        display: inline-block;
        width: 30px;
        height: 16px;
        margin-bottom: 0
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0
    }

    .switch .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        transition: .4s;
        border-radius: 34px
    }

    .switch .slider:before {
        position: absolute;
        content: "";
        background-color: #fff;
        transition: .4s;
        border-radius: 50%;
        height: 11px;
        width: 11px;
        left: 4px;
        bottom: 3px
    }

    .switch input.checked+.slider {
        background-color: #d00
    }

    .switch input:focus+.slider {
        box-shadow: 0 0 1px #d00
    }

    .switch input.checked+.slider:before {
        transform: translateX(10px);
        left: 6px
    }

    .popular-player-image {
        width: 32px;
        height: 32px;
        border-radius: 16px
    }

    .popular-players-flag {
        width: 20px;
        height: 20px
    }

    .twitter-readers-recommend {
        position: relative
    }

    .twitter-readers-recommend .sidebar-widget__content {
        border-radius: 10px !important;
        padding: 0;
        overflow: hidden;
        -ms-overflow-style: none;
        scrollbar-width: none
    }

    .twitter-readers-recommend .sidebar-widget__content::-webkit-scrollbar {
        display: none
    }

    .category-select {
        width: 100%;
        flex-direction: row;
        list-style: none;
        flex-wrap: wrap;
        background-color: #f1f2f3;
        border-radius: 16px;
        height: 32px;
        margin: 0;
        padding: 0
    }

    .category-select,
    .category-select li {
        display: flex;
        align-items: center;
        justify-content: center
    }

    .category-select li {
        flex: 1 0 auto;
        text-align: center;
        height: 100%;
        line-height: 1px;
        cursor: pointer
    }

    .category-select li.active {
        background: #fff;
        box-shadow: 1px 1px 6px rgba(0, 0, 0, .16);
        border-radius: 16px;
        color: #d00
    }

    .custom-nav {
        height: 56px
    }

    .custom-nav a {
        text-decoration: none;
        cursor: pointer;
        font-size: 1rem;
        color: #a5a6a7;
        display: flex;
        align-items: center;
        justify-content: center
    }

    .custom-nav a.active {
        border-bottom: 3px solid #d00;
        color: #2b2c2d
    }

    .custom-nav a.active:hover {
        color: #2b2c2d
    }

    .custom-nav a:hover {
        color: #a5a6a7
    }

    .custom-nav a:before,
    .custom-nav a:hover {
        text-decoration: none
    }

    .custom-nav a:after {
        background: transparent
    }

    .static-content {
        margin: 20px 0
    }

    .static-content .gray600 {
        color: #a5a6a7
    }

    .static-content h5 {
        font-family: BentonSans, Arial, Noto Sans, sans-serif;
        font-weight: 400
    }

    .static-content .table-legend {
        margin-bottom: 40px
    }

    .static-content .legend-section {
        font-size: .75rem;
        color: #6c6d6f;
        padding: 5px
    }

    .static-content .legend-section span {
        font-family: BentonSans-Bold, Arial, Noto Sans, sans-serif;
        font-size: .625rem;
        color: #2b2c2d;
        padding: 0 4px 0 0
    }

    .static-content .info-content {
        font-size: .75rem
    }

    .static-content p:empty {
        margin: 0
    }

    .sub-nav {
        position: relative;
        z-index: 998
    }

    .sub-nav-top {
        top: 44px !important;
        z-index: 998
    }

    @media(max-width:1023.98px) {
        .sub-nav-top {
            top: 0 !important
        }
    }

    nav.sub-navbar {
        background: #fff;
        box-shadow: 1px 1px 6px rgba(0, 0, 0, .16);
        height: 65px;
        flex-wrap: wrap;
        z-index: 998
    }

    @media(max-width:1023.98px) {
        nav.sub-navbar>.container {
            margin: 0;
            display: block
        }

        nav.sub-navbar {
            top: 0;
            background-color: #03a9f4;
            padding: 0;
            height: auto;
            display: block;
            box-shadow: none
        }
    }

    nav.sub-navbar .navbar-brand {
        font-family: BentonSans-Bold, Arial, Noto Sans, sans-serif;
        font-size: 1.25rem;
        color: #2b2c2d;
        padding-right: 30px;
        border-right: 1px solid #edeef0;
        margin-right: .5rem;
        text-transform: lowercase !important
    }

    @media(max-width:1023.98px) {
        nav.sub-navbar .navbar-brand {
            font-size: .875rem;
            color: #fff;
            border-right: 0;
            display: flex;
            align-items: center;
            padding: 10px 0 10px 12px;
            width: 100%
        }
    }

    nav.sub-navbar .navbar-brand .navbar-toggler {
        padding-left: 0;
        position: relative;
        top: -3px
    }

    nav.sub-navbar .navbar-brand .navbar-toggler i {
        font-size: 24px;
        font-weight: 700
    }

    nav.sub-navbar .navbar-brand .section-header img {
        width: 32px;
        border-radius: 4px
    }

    @media(max-width:1023.98px) {
        nav.sub-navbar .navbar-brand .section-header img {
            width: 24px
        }
    }

    nav.sub-navbar .navbar-brand .section-header .row {
        flex-wrap: nowrap
    }

    nav.sub-navbar .navbar-brand .section-header .row .col {
        height: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center
    }

    nav.sub-navbar .navbar-brand .section-header .row .col h5.header-title {
        font-size: 1.25rem;
        text-transform: none !important;
        color: #2b2c2d;
        max-width: 400px;
        overflow: hidden;
        text-overflow: ellipsis
    }

    @media(max-width:1279.98px) {
        nav.sub-navbar .navbar-brand .section-header .row .col h5.header-title {
            max-width: 350px
        }
    }

    @media(max-width:1023.98px) {
        nav.sub-navbar .navbar-brand .section-header .row .col h5.header-title {
            font-size: .875rem;
            color: #fff;
            max-width: 100%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }

        nav.sub-navbar .navbar-brand .section-header {
            width: 90%
        }
    }

    nav.sub-navbar .custom-scroll {
        display: flex;
        flex-grow: 1;
        justify-content: space-between
    }

    @media(max-width:1023.98px) {
        nav.sub-navbar .custom-scroll {
            overflow: scroll;
            padding: 0 5px;
            scrollbar-width: none;
            -webkit-overflow-scrolling: touch
        }

        nav.sub-navbar .custom-scroll::-webkit-scrollbar {
            display: none
        }
    }

    @media(max-width:1023.98px) {
        nav.sub-navbar .custom-scroll .navbar-nav {
            overflow: scroll;
            display: flex;
            flex-direction: row;
            width: 680px;
            scrollbar-width: none;
            -webkit-overflow-scrolling: touch
        }

        nav.sub-navbar .custom-scroll .navbar-nav::-webkit-scrollbar {
            display: none
        }
    }

    @media(max-width:1023.98px) {
        nav.sub-navbar .custom-scroll .navbar-nav .nav-item {
            display: inline-block;
            padding: 0 10px
        }

        nav.sub-navbar .custom-scroll .navbar-nav .nav-item:first-child {
            padding-left: 0
        }
    }

    nav.sub-navbar .custom-scroll .navbar-nav .nav-item .nav-link {
        font-family: BentonSans, Arial, Noto Sans, sans-serif;
        font-size: .875rem;
        color: #2b2c2d;
        width: -webkit-max-content;
        width: max-content;
        cursor: pointer
    }

    @media(max-width:1023.98px) {
        nav.sub-navbar .custom-scroll .navbar-nav .nav-item .nav-link {
            text-transform: uppercase;
            font-size: .75rem;
            line-height: 1.5;
            letter-spacing: .1px;
            margin-top: 4px;
            padding-bottom: 4px;
            font-weight: 700;
            color: #fff;
            opacity: .5;
            letter-spacing: .6px;
            padding-top: 0
        }
    }

    nav.sub-navbar .custom-scroll .navbar-nav .nav-item .nav-link.active {
        font-family: BentonSans-Bold, Arial, Noto Sans, sans-serif;
        opacity: 1
    }

    @media(max-width:1023.98px) {
        nav.sub-navbar .custom-scroll .navbar-nav .nav-item .nav-link.active {
            border-bottom: 3px solid #fff
        }
    }

    nav.sub-navbar-follow .navbar-brand {
        position: relative
    }

    nav.sub-navbar-follow .navbar-brand .section-header .row .col h5.header-title {
        max-width: 320px
    }

    @media(max-width:1279.98px) {
        nav.sub-navbar-follow .navbar-brand .section-header .row .col h5.header-title {
            max-width: 155px
        }
    }

    @media(max-width:1023.98px) {
        nav.sub-navbar-follow .navbar-brand .section-header .row .col h5.header-title {
            font-size: .875rem;
            color: #fff;
            max-width: 100%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }

        nav.sub-navbar-follow .navbar-brand .section-header {
            width: 66%
        }

        nav.sub-navbar-follow .navbar-brand .section-header.team-header {
            width: 55%
        }
    }

    nav.sub-navbar-follow .follow-btn button {
        margin: 0;
        font-size: .75rem;
        width: 166px
    }

    nav.sub-navbar-follow .follow-btn button.subscribed {
        color: #fff;
        background-color: #03a9f4;
        border-color: #03a9f4
    }

    @media(max-width:1023.98px) {
        nav.sub-navbar-follow .follow-btn button.subscribed {
            background: #fff;
            color: #03a9f4
        }

        nav.sub-navbar-follow .follow-btn button {
            color: #fff;
            padding: 5px 0;
            width: 80px;
            border-color: #fff;
            line-height: normal
        }

        nav.sub-navbar-follow .follow-btn {
            position: absolute;
            right: 0
        }
    }

    body:not([data-sport=fantasy]) #main-container {
        width: unset !important;
        margin-left: 0 !important;
        left: 0 !important
    }

    .ad-slot-cnt {
        transition: min-height .8s linear
    }

    .ad-slot-wallpaper>div>iframe {
        position: absolute;
        margin-left: -840px;
        left: 50%
    }

    .ad-slot.ad-slot-wallpaper {
        position: sticky !important;
        position: -webkit-sticky !important;
        z-index: -1;
        top: 45px
    }

    .ad-double-longstrip-wrapper {
        display: flex;
        justify-content: center
    }

    .ad-double-longstrip-wrapper .longstripGamepackageRight {
        margin-left: 10px
    }

    .incontent2:empty,
    .incontent3:empty,
    .incontentRoW:empty {
        margin-top: 0;
        margin-bottom: 0
    }

    .bannerTop,
    .bannerTopRoW,
    .presbyMobile {
        padding-top: 10px
    }

    .bannerTop>div,
    .bannerTopRoW>div {
        z-index: 0 !important
    }

    .ad-300 {
        clear: both;
        overflow: hidden;
        position: relative;
        z-index: 1
    }

    .feed .presby {
        position: absolute;
        right: 0
    }

    @media only screen and (max-width:321px) {

        .feed .bannerBottom,
        .feed .bannerNewBottom {
            margin-left: -10px
        }
    }

    .site-footer .footer-card {
        padding: 3rem 3.5rem 1.5rem
    }

    @media(max-width:767.98px) {
        .site-footer .footer-card {
            padding: 1rem 1.5rem
        }
    }

    .site-footer .footer-card .section-header {
        padding: 0 0 .5rem
    }

    .site-footer .footer-card .section-header .header-title {
        text-transform: none !important
    }

    .site-footer .footer-card .widget-item {
        margin-bottom: 20px
    }

    .site-footer .footer-card .widget-item:last-child {
        margin-bottom: 0
    }

    .site-footer .footer-card .widget-item .link-with-image .espn-icon {
        margin-right: .75rem
    }

    @media(max-width:767.98px) {
        .site-footer .footer-card .footer-list {
            width: 100%;
            min-width: 100%
        }
    }

    .site-footer .footer-card .info-items {
        flex-direction: row
    }

    .site-footer .footer-card .info-items a {
        color: #48494a;
        margin-left: 1.5rem
    }

    .site-footer .footer-card .info-items a:hover {
        color: #0278bb
    }

    @media(max-width:767.98px) {
        .site-footer .footer-card .info-items {
            flex-direction: column;
            margin-top: 20px
        }

        .site-footer .footer-card .info-items a {
            margin-left: 0;
            margin-bottom: .5rem
        }
    }

    .site-footer .copyright {
        color: #a5a6a7;
        margin-top: 12px
    }

    .global-footer {
        background: #f1f2f3;
        padding: 20px 0
    }

    .global-footer .footer-link-wrapper {
        margin-right: 10px;
        display: inline
    }

    .global-footer .footer-link-wrapper:last-of-type {
        margin-right: 0
    }

    .global-footer .footer-link-wrapper a {
        color: #2b2c2d
    }

    .global-footer .footer-link-wrapper a:hover {
        color: #0278bb
    }

    .global-footer .footer-link-wrapper .footer-link-divider {
        display: none
    }

    .global-footer .copyright {
        font-size: .75rem;
        line-height: 1.5;
        letter-spacing: .1px;
        text-align: right
    }

    @media(max-width:1023.98px) {
        .global-footer {
            padding: 25px 0
        }

        .global-footer .footer-links-wrapper {
            margin-bottom: 15px
        }

        .global-footer .footer-link-wrapper {
            margin-right: 0
        }

        .global-footer .footer-link-wrapper a {
            color: #6c6d6f;
            display: inline
        }

        .global-footer .footer-link-wrapper .footer-link-divider {
            display: inline;
            padding: 0 5px
        }

        .global-footer .footer-link-wrapper:last-of-type .footer-link-divider {
            display: none
        }

        .global-footer .copyright {
            color: #6c6d6f;
            text-align: left;
            text-align: initial
        }

        .global-footer .copyright,
        .global-footer .footer-link-divider,
        .global-footer a {
            font-size: .875rem;
            line-height: 1.5;
            letter-spacing: 0
        }
    }

    @media(max-width:767.98px) {

        .global-footer .copyright,
        .global-footer .footer-link-divider,
        .global-footer a {
            font-size: .75rem;
            line-height: 1.5;
            letter-spacing: .1px
        }
    }

    #nprogress {
        pointer-events: none
    }

    #nprogress .bar {
        background: #1d36b1;
        position: fixed;
        z-index: 1031;
        top: 0;
        left: 0;
        width: 100%;
        height: 2px
    }

    .pagination {
        padding-top: 1rem;
        -webkit-padding-start: 0;
        padding-inline-start: 0
    }

    .pagination li {
        list-style: none !important;
        display: inline
    }

    .pagination button {
        border: 1px solid #dcdddf;
        height: 48px;
        width: 48px;
        padding: 0 8px
    }

    @media(max-width:1023.98px) {
        .pagination button {
            height: 30px;
            padding: 0 2px
        }
    }

    .pagination .inactive-page-number {
        color: #6c6d6f;
        transition: color .5s
    }

    .pagination .inactive-page-number:hover {
        color: #000
    }

    .pagination .inactive-page-number:focus {
        outline: none
    }

    .pagination li:first-of-type button {
        border-top-left-radius: 8px;
        border-bottom-left-radius: 8px
    }

    .pagination li:last-of-type button {
        border-top-right-radius: 8px;
        border-bottom-right-radius: 8px
    }

    .pagination .active-arrow {
        color: #03a9f4
    }

    .pagination .disabled-arrow {
        color: #cbccce
    }

    .pagination-title {
        font-size: .75rem;
        color: #6c6d6f
    }

    .can-toggle {
        position: relative
    }

    .can-toggle *,
    .can-toggle :after,
    .can-toggle :before {
        box-sizing: border-box
    }

    .can-toggle input[type=checkbox] {
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0
    }

    .can-toggle input[type=checkbox][disabled]~label {
        pointer-events: none
    }

    .can-toggle input[type=checkbox][disabled]~label .can-toggle-switch {
        opacity: .4
    }

    .can-toggle input[type=checkbox]:checked~label .can-toggle-switch:before {
        content: attr(data-unchecked);
        left: 0
    }

    .can-toggle input[type=checkbox]:checked~label .can-toggle-switch:after {
        content: attr(data-checked)
    }

    .can-toggle label {
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
        position: relative;
        display: flex;
        align-items: center
    }

    .can-toggle label .can-toggle-switch {
        position: relative
    }

    .can-toggle label .can-toggle-switch:before {
        content: attr(data-checked);
        position: absolute;
        top: 0;
        text-transform: uppercase;
        text-align: center
    }

    .can-toggle label .can-toggle-switch:after {
        content: attr(data-unchecked);
        position: absolute;
        text-transform: uppercase;
        text-align: center;
        background: #fff;
        transform: translateZ(0)
    }

    .can-toggle input[type=checkbox][disabled]~label {
        color: rgba(241, 242, 243, .5)
    }

    .can-toggle input[type=checkbox]:focus~label .can-toggle-switch,
    .can-toggle input[type=checkbox]:hover~label .can-toggle-switch {
        background-color: #f1f2f3
    }

    .can-toggle input[type=checkbox]:focus~label .can-toggle-switch:after,
    .can-toggle input[type=checkbox]:hover~label .can-toggle-switch:after {
        color: #d00
    }

    .can-toggle input[type=checkbox]:hover~label {
        color: #e3e5e7
    }

    .can-toggle input[type=checkbox]:checked~label:hover {
        color: #e9eaec
    }

    .can-toggle input[type=checkbox]:checked~label .can-toggle-switch {
        background-color: #f1f2f3
    }

    .can-toggle input[type=checkbox]:checked~label .can-toggle-switch:after {
        color: #d00;
        left: 2px
    }

    .can-toggle input[type=checkbox]:checked:focus~label .can-toggle-switch,
    .can-toggle input[type=checkbox]:checked:hover~label .can-toggle-switch {
        background-color: #f1f2f3
    }

    .can-toggle input[type=checkbox]:checked:focus~label .can-toggle-switch:after,
    .can-toggle input[type=checkbox]:checked:hover~label .can-toggle-switch:after {
        color: #d00
    }

    .can-toggle label .can-toggle-switch {
        transition: background-color .3s cubic-bezier(0, 1, .5, 1);
        background: #f1f2f3;
        white-space: nowrap
    }

    .can-toggle label .can-toggle-switch:before {
        color: #2b2c2d;
        cursor: pointer
    }

    .can-toggle label .can-toggle-switch:after {
        transition: transform .3s cubic-bezier(0, 1, .5, 1);
        color: #d00;
        cursor: pointer
    }

    .can-toggle input[type=checkbox]:focus~label .can-toggle-switch:after,
    .can-toggle input[type=checkbox]:hover~label .can-toggle-switch:after {
        box-shadow: 1px 1px 6px rgba(0, 0, 0, .16)
    }

    .can-toggle input[type=checkbox]:checked~label .can-toggle-switch:after {
        transform: translate3d(100%, 0, 0)
    }

    .can-toggle input[type=checkbox]:checked:focus~label .can-toggle-switch:after,
    .can-toggle input[type=checkbox]:checked:hover~label .can-toggle-switch:after {
        box-shadow: 1px 1px 6px rgba(0, 0, 0, .16)
    }

    .can-toggle label {
        font-size: 14px
    }

    .can-toggle label .can-toggle-switch {
        height: 32px;
        flex: 0 0 134px;
        border-radius: 16px;
        min-width: 100%
    }

    .can-toggle label .can-toggle-switch:before {
        left: 50%;
        font-size: 10px;
        line-height: 32px;
        width: 67px;
        min-width: 50%;
        padding: 0 12px
    }

    .can-toggle label .can-toggle-switch:after {
        top: 0;
        left: -1px;
        box-shadow: 1px 1px 6px rgba(0, 0, 0, .16);
        border-radius: 16px;
        width: 67px;
        line-height: 32px;
        min-width: 50%;
        font-size: 10px
    }

    .can-toggle label .can-toggle-switch:hover:after {
        box-shadow: 1px 1px 6px rgba(0, 0, 0, .16)
    }

    .slick-slider {
        box-sizing: border-box;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-touch-callout: none;
        -khtml-user-select: none;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent
    }

    .slick-list,
    .slick-slider {
        position: relative;
        display: block
    }

    .slick-list {
        overflow: hidden;
        margin: 0;
        padding: 0
    }

    .slick-list:focus {
        outline: none
    }

    .slick-slider .slick-list,
    .slick-slider .slick-track {
        transform: translateZ(0)
    }

    .slick-track {
        position: relative;
        top: 0;
        left: 0;
        display: block;
        margin-left: auto;
        margin-right: auto
    }

    .slick-track:after,
    .slick-track:before {
        display: table;
        content: ""
    }

    .slick-track:after {
        clear: both
    }

    .slick-loading .slick-track {
        visibility: hidden
    }

    .slick-slide {
        display: none;
        float: left;
        height: 100%;
        min-height: 1px
    }

    .slick-slide img {
        display: block
    }

    .slick-slide.slick-loading img {
        display: none
    }

    .slick-initialized .slick-slide {
        display: block
    }

    .slick-loading .slick-slide {
        visibility: hidden
    }

    .slick-vertical .slick-slide {
        display: block;
        height: auto;
        border: 1px solid transparent
    }

    .slick-arrow.slick-hidden {
        display: none
    }

    .slick-loading .slick-list {
        background: #fff url(https://wassets.hscicdn.com/_next/static/media/ajax-loader.fb6f3c230cb846e25247dfaa1da94d8f.gif) 50% no-repeat
    }

    @font-face {
        font-family: slick;
        font-weight: 400;
        font-style: normal;
        src: url(https://wassets.hscicdn.com/_next/static/media/slick.a4e97f5a2a64f0ab132323fbeb33ae29.eot);
        src: url(https://wassets.hscicdn.com/_next/static/media/slick.a4e97f5a2a64f0ab132323fbeb33ae29.eot#iefix) format("embedded-opentype"), url(https://wassets.hscicdn.com/_next/static/media/slick.295183786cd8a138986521d9f388a286.woff) format("woff"), url(https://wassets.hscicdn.com/_next/static/media/slick.c94f7671dcc99dce43e22a89f486f7c2.ttf) format("truetype"), url(https://wassets.hscicdn.com/_next/static/media/slick.2630a3e3eab21c607e21576571b95b9d.svg#slick) format("svg")
    }

    .slick-next,
    .slick-prev {
        font-size: 0;
        line-height: 0;
        position: absolute;
        top: 50%;
        display: block;
        width: 20px;
        height: 20px;
        padding: 0;
        transform: translateY(-50%);
        cursor: pointer;
        border: none
    }

    .slick-next,
    .slick-next:focus,
    .slick-next:hover,
    .slick-prev,
    .slick-prev:focus,
    .slick-prev:hover {
        color: transparent;
        outline: none;
        background: transparent
    }

    .slick-next:focus:before,
    .slick-next:hover:before,
    .slick-prev:focus:before,
    .slick-prev:hover:before {
        opacity: 1
    }

    .slick-next.slick-disabled:before,
    .slick-prev.slick-disabled:before {
        opacity: .25
    }

    .slick-next:before,
    .slick-prev:before {
        font-family: slick;
        font-size: 20px;
        line-height: 1;
        opacity: .75;
        color: #fff;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .slick-prev {
        left: -25px
    }

    .slick-prev:before {
        content: "←"
    }

    .slick-next {
        right: -25px
    }

    .slick-next:before {
        content: "→"
    }

    .slick-dotted.slick-slider {
        margin-bottom: 30px
    }

    .slick-dots {
        position: absolute;
        bottom: -25px;
        display: block;
        width: 100%;
        padding: 0;
        margin: 0;
        list-style: none;
        text-align: center
    }

    .slick-dots li {
        position: relative;
        display: inline-block;
        margin: 0 5px;
        padding: 0
    }

    .slick-dots li,
    .slick-dots li button {
        width: 20px;
        height: 20px;
        cursor: pointer
    }

    .slick-dots li button {
        font-size: 0;
        line-height: 0;
        display: block;
        padding: 5px;
        color: transparent;
        border: 0;
        outline: none;
        background: transparent
    }

    .slick-dots li button:focus,
    .slick-dots li button:hover {
        outline: none
    }

    .slick-dots li button:focus:before,
    .slick-dots li button:hover:before {
        opacity: 1
    }

    .slick-dots li button:before {
        font-family: slick;
        font-size: 6px;
        line-height: 20px;
        position: absolute;
        top: 0;
        left: 0;
        width: 20px;
        height: 20px;
        content: "•";
        text-align: center;
        opacity: .25;
        color: #000;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .slick-dots li.slick-active button:before {
        opacity: .75;
        color: #000
    }
</style>

<div class="player-index-container mt-1 mt-lg-0">
    <h2 class="d-inline-block benton-bold pl-3 pt-4 h3">India Players</h2>
    <div>

        <hr class="m-0">
    </div>
    <hr class="mt-0 mb-0">
    <div>
        <div class="player-index-grid w-100">
            <div class="index-data p-3"><a data-hover="" target="_self" rel="" href="/player/mayank-agarwal-398438">
                    <div class="rounded-circle border border-gray400 ci-avatar overflow-hidden" style="height: 70px; width: 70px;"><img src="https://img1.hscicdn.com/image/upload/f_auto,t_h_100/lsci/db/PICTURES/CMS/302300/302377.jpg" alt="Mayank Agarwal portrait" class="img img" style="height: 70px; width: 70px;"></div>
                </a>
                <div class="pl-3"><a data-hover="" target="_self" rel="" href="/player/mayank-agarwal-398438">
                        <h3 class="benton-bold m-0 text-break color-900 h3 player-page-name hover-blue">Agarwal, MA</h3>
                    </a>
                    <p class="gray-900 benton-normal mb-0 mb-md-1 player-index-role">Mayank Agarwal</p>
                    <p class="benton-normal m-0 gray-700 player-index-age">Age: 30y 210d</p>
                </div>
            </div>
            <div class="index-data p-3"><a data-hover="" target="_self" rel="" href="/player/ravichandran-ashwin-26421">
                    <div class="rounded-circle border border-gray400 ci-avatar overflow-hidden" style="height: 70px; width: 70px;"><img src="https://img1.hscicdn.com/image/upload/f_auto,t_h_100/lsci/db/PICTURES/CMS/302300/302395.jpg" alt="R Ashwin portrait" class="img img" style="height: 70px; width: 70px;"></div>
                </a>
                <div class="pl-3"><a data-hover="" target="_self" rel="" href="/player/ravichandran-ashwin-26421">
                        <h3 class="benton-bold m-0 text-break color-900 h3 player-page-name hover-blue">Ashwin, R</h3>
                    </a>
                    <p class="gray-900 benton-normal mb-0 mb-md-1 player-index-role">Ravichandran Ashwin</p>
                    <p class="benton-normal m-0 gray-700 player-index-age">Age: 34y 362d</p>
                </div>
            </div>
            <div class="index-data p-3"><a data-hover="" target="_self" rel="" href="/player/simran-bahadur-1204925">
                    <div class="rounded-circle border border-gray400 ci-avatar overflow-hidden" style="height: 70px; width: 70px;"><img src="https://img1.hscicdn.com/image/upload/f_auto,t_h_100/esci/i/headshots/cricket/players/default-player-logo-500.png" alt="" class="img img" style="height: 70px; width: 70px;"></div>
                </a>
                <div class="pl-3"><a data-hover="" target="_self" rel="" href="/player/simran-bahadur-1204925">
                        <h3 class="benton-bold m-0 text-break color-900 h3 player-page-name hover-blue">Bahadur,SD</h3>
                    </a>
                    <p class="gray-900 benton-normal mb-0 mb-md-1 player-index-role">Simran Bahadur</p>
                    <p class="benton-normal m-0 gray-700 player-index-age">Age: 21y 275d</p>
                </div>
            </div>

        </div>
    </div>