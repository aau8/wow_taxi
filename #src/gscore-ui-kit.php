<div class="wrap gscore">
    <h2><?php echo get_admin_page_title() ?></h2>

    <?php
    // settings_errors() не срабатывает автоматом на страницах отличных от опций
    if( get_current_screen()->parent_base !== 'options-general' )
        settings_errors('название_опции');
    ?>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        .gscore *,
        .gscore *::before,
        .gscore *::after {
        -webkit-box-sizing: border-box;
                box-sizing: border-box;
        }

        .gscore ul[class],
        .gscore ol[class] {
        padding: 0;
        }

        .gscore body,
        .gscore h1,
        .gscore h2,
        .gscore h3,
        .gscore h4,
        .gscore p,
        .gscore ul[class],
        .gscore ol[class],
        .gscore li,
        .gscore figure,
        .gscore figcaption,
        .gscore blockquote,
        .gscore dl,
        .gscore dd {
        margin: 0;
        }

        .gscore {
        min-height: 100vh;
        scroll-behavior: smooth;
        text-rendering: optimizeSpeed;
        line-height: 1.5;
        font-weight: 500;
        font-family: 'Roboto', sans-serif;
        }

        .gscore a {
        color: #fff;
        }

        .gscore a:hover {
        color: #fff;
        text-decoration: none;
        }

        .gscore a:active {
        color: #fff;
        }

        .gscore a:focus {
        -webkit-box-shadow: none !important;
                box-shadow: none !important;
        }

        .gscore ul[class],
        .gscore ol[class] {
        list-style: none;
        }

        .gscore a:not([class]) {
        text-decoration-skip-ink: auto;
        }

        .gscore img {
        max-width: 100%;
        display: block;
        }

        .gscore article > * + * {
        margin-top: 1em;
        }

        .gscore input,
        .gscore button,
        .gscore textarea,
        .gscore select {
        font: inherit;
        }

        @media (prefers-reduced-motion: reduce) {
        .gscore * {
            -webkit-animation-duration: 0.01ms !important;
                    animation-duration: 0.01ms !important;
            -webkit-animation-iteration-count: 1 !important;
                    animation-iteration-count: 1 !important;
            -webkit-transition-duration: 0.01ms !important;
                -o-transition-duration: 0.01ms !important;
                    transition-duration: 0.01ms !important;
            scroll-behavior: auto !important;
        }
        }

        .gscore h1,
        .gscore h2 {
        font-size: 32px;
        font-weight: 700;
        }

        .gscore h3,
        .gscore h4 {
        font-size: 24px;
        font-weight: 500;
        }

        .gscore h5,
        .gscore h6 {
        font-size: 20px;
        font-weight: 500;
        }

        .gscore p {
        font-weight: 400;
        font-size: 16px;
        }

        .gscore .container {
        padding: 0 80px;
        }

        .gscore .section:not(:first-child) {
        margin: 64px 0 0 0;
        }

        .gscore .input-copy {
        position: fixed;
        visibility: none;
        opacity: 0;
        }

        .gscore .new_buttons,
        .gscore .new_inputs,
        .gscore .new_drop,
        .gscore .new_check,
        .gscore .new_ui h1,
        .gscore h2,
        .gscore h4 {
        font-family: 'Inter', sans-serif;
        }

        .gscore .new_btn {
        text-transform: uppercase;
        color: #fff;
        text-decoration: none;
        background: #DD634F;
        width: 160px;
        display: block;
        -webkit-border-radius: 10px;
                border-radius: 10px;
        font-size: 14px;
        height: 40px;
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
        margin-bottom: 35px;
        -webkit-box-shadow: none !important;
                box-shadow: none !important;
        }

        .gscore .new_buttons-wrapper {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: baseline;
        -webkit-align-items: baseline;
            -ms-flex-align: baseline;
                align-items: baseline;
        }

        .gscore .new_buttons-title {
        font-size: 48px;
        font-weight: 900;
        margin-bottom: 70px;
        }

        .gscore .new_buttons-title-item {
        font-size: 17px;
        margin-bottom: 52px;
        font-weight: 700;
        }

        .gscore .new_buttons-some {
        border: 1px dashed #7B61FF;
        -webkit-border-radius: 5px;
                border-radius: 5px;
        padding: 20px;
        margin-left: 40px;
        }

        .gscore .new_active-btn {
        background: #D34730;
        }

        .gscore .new_loading-btn {
        padding: 12px 0;
        }

        .gscore .in-btn-loading {
        margin: 0 auto;
        width: 50%;
        }

        .gscore .new_disabled-btn {
        background: #E6E6E6;
        cursor: not-allowed;
        margin-bottom: 0;
        }

        .gscore .new_icons-wrapper {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -webkit-align-items: start;
            -ms-flex-align: start;
                align-items: start;
        }

        .gscore .new_icons-second {
        border: 1px dashed #7B61FF;
        -webkit-border-radius: 5px;
                border-radius: 5px;
        padding: 20px;
        margin-left: 40px;
        }

        .gscore .new_icons-title {
        font-size: 26px;
        font-weight: 800;
        margin-top: 61px;
        margin-bottom: 100px;
        }

        .gscore .new_icon {
        background: #F7F7F7;
        -webkit-border-radius: 10px;
                border-radius: 10px;
        width: 40px;
        height: 40px;
        margin-bottom: 28px;
        }

        .gscore .new_icon-initial-table:hover {
        background: #E6E6E6;
        background-image: url("img-ui-kit/initial-icon.svg");
        background-repeat: no-repeat;
        background-position: center;
        }

        .gscore .new_icon-initial {
        background-image: url("img-ui-kit/initial-icon.svg");
        background-position: center;
        background-repeat: no-repeat;
        display: block;
        }

        .gscore .new_icon-active {
        background: #E6E6E6;
        background-image: url("img-ui-kit/initial-icon.svg");
        background-position: center;
        background-repeat: no-repeat;
        display: block;
        }

        .gscore .new_icon-loading {
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
        }

        .gscore .new_icon-disabled {
        background: #E6E6E6;
        background-image: url("img-ui-kit/disabled-icon.svg");
        background-position: center;
        background-repeat: no-repeat;
        display: block;
        margin-bottom: 0;
        cursor: not-allowed;
        }

        .gscore .new_inputs {
        margin-top: 200px;
        }

        .gscore .new-inputs-title {
        font-size: 17px;
        font-weight: 700;
        margin-bottom: 65px;
        }

        .gscore .new_inputs-wrapper {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: baseline;
        -webkit-align-items: baseline;
            -ms-flex-align: baseline;
                align-items: baseline;
        }

        .gscore .new-inputs-title:last-child {
        margin-bottom: 0;
        }

        .gscore .new-inputs-second {
        padding: 20px;
        border: 1px dashed #7B61FF;
        -webkit-border-radius: 5px;
                border-radius: 5px;
        margin-left: 36px;
        }

        .gscore .new-input {
        width: 255px;
        height: 40px;
        outline: none;
        padding: 8px 0 8px 11px !important;
        color: #494949 !important;
        font-size: 14px;
        font-weight: 400;
        margin-bottom: 48px;
        font-family: 'Roboto', sans-serif;
        }

        .gscore input {
            border: 1px solid #E0E0E0 !important;
            -webkit-border-radius: 10px !important;
                    border-radius: 10px !important;
            box-shadow: none!important;
        }

        .gscore .new-input-small {
        width: 40px;
        height: 40px;
        border: 1px solid #E0E0E0 !important;
        -webkit-border-radius: 10px !important;
                border-radius: 10px !important;
        margin-left: 23px;
        outline: none;
        color: #494949 !important;
        font-size: 14px;
        font-weight: 400;
        text-align: center;
        }

        .gscore .new-input-small.lefter {
        margin-left: 13px;
        }

        .gscore .new-input_disabled {
        background: #E6E6E6 !important;
        color: #A1A1A5 !important;
        }

        .gscore .new-input-small_disabled {
        background: #E6E6E6;
        color: #A1A1A5;
        }

        .gscore .new-input_success {
        border: 1px solid #599853 !important;
        background-image: url("img-ui-kit/check-icon.svg");
        background-repeat: no-repeat;
        background-position: 225px;
        }

        .gscore .new-input-small_success {
        border: 1px solid #599853 !important;
        }

        .gscore .new-input_error {
        border: 1px solid #DD634F !important;
        background-image: url("img-ui-kit/XCircle.svg");
        background-repeat: no-repeat;
        background-position: 225px;
        margin-bottom: 5px;
        }

        .gscore .new-input-small_error {
        border: 1px solid #DD634F !important;
        }

        .gscore .new-input-error-message {
        color: #DD634F;
        font-weight: 400;
        font-family: 'Roboto', sans-serif;
        }

        .gscore .new_drop {
        margin-top: 200px;
        }

        .gscore .new_dropdown-wrapper {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        }

        .gscore .new_drop-first {
        margin-bottom: 50px;
        }

        .gscore .new_drop-title-item {
        color: #090B12;
        font-size: 16px;
        margin-bottom: 100px;
        }

        .gscore .new_drop-title-item:last-child {
        margin-bottom: 0;
        }

        .gscore .new_button-second {
        border: 1px dashed #7B61FF;
        -webkit-border-radius: 5px;
                border-radius: 5px;
        padding: 20px;
        margin-left: 22px;
        }

        .gscore .new_button-second fieldset {
        margin-bottom: 62px;
        }

        .gscore fieldset {
        border: none;
        margin: 0;
        padding: 0;
        }

        .gscore .field-last {
        margin-bottom: 0;
        }

        .gscore legend {
        margin-bottom: .25rem;
        }

        .gscore details {
        position: relative;
        width: 255px;
        }

        .gscore details summary {
        background-color: #fff;
        border: 1px solid #E6E6E6;
        padding: .75rem .75rem;
        position: relative;
        -webkit-border-radius: 10px;
                border-radius: 10px;
        padding-right: 3rem;
        cursor: pointer;
        list-style: none;
        font-weight: 400;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
            -ms-flex-align: center;
                align-items: center;
        }

        .gscore .field-active {
        border: 1px solid #A1A1A5;
        }

        .gscore .field-disabled {
        background: #E6E6E6;
        color: #A1A1A5;
        cursor: not-allowed;
        }

        .gscore details summary::-webkit-details-marker {
        display: none;
        }

        .gscore details summary:focus {
        border: 1px solid #A1A1A5;
        }

        .gscore details summary .material-icons-round {
        position: absolute;
        background: url("img-ui-kit/input-arrows.svg");
        right: 15px;
        top: 50%;
        transform: translate(0px, -50%);
        width: 16px;
        height: 16px;
        display: block;
        margin-left: 20px;
        }

        .gscore details div {
        background-color: #fff;
        border: 1px solid #E6E6E6;
        -webkit-border-radius: 10px;
                border-radius: 10px;
        position: absolute;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
            -ms-flex-direction: column;
                flex-direction: column;
        z-index: 990;
        }

        .gscore details div label {
        position: relative;
        cursor: pointer;
        }

        .gscore details div input {
        -webkit-appearance: none;
        -moz-appearance: none;
            appearance: none;
        visibility: hidden;
        position: absolute;
        }

        .gscore details div input:checked + span {
        background-color: #E6E6E6;
        }

        .gscore details div span:hover {
        background-color: #E6E6E6;
        }

        .gscore details div span {
        display: block;
        padding: 8px;
        font-weight: 400;
        }

        .gscore .new_dropdown-sort-wrapper {
        background: #FFFFFF;
        -webkit-box-shadow: 0px 4px 24px rgba(0, 67, 101, 0.07);
                box-shadow: 0px 4px 24px rgba(0, 67, 101, 0.07);
        -webkit-border-radius: 0px 0px 10px 10px;
                border-radius: 0px 0px 10px 10px;
        -webkit-filter: drop-shadow(16px 4px 26px rgba(91, 92, 116, 0.04));
                filter: drop-shadow(16px 4px 26px rgba(91, 92, 116, 0.04));
        width: 274px;
        padding-bottom: 20px;
        margin-top: 50px;
        font-weight: 400;
        }

        .gscore .new_dropdown-sort-wrapper._hidden-filter .field-block,
        .gscore .new_dropdown-sort-wrapper._hidden-filter .new-input {
        display: none;
        }

        .gscore .new_dropdown-sort-wrapper._hidden-filter .new_initial-btn-block {
        margin-top: 18px;
        }

        .gscore .new_dropdown-sort-wrapper._hidden-filter .new_filter-drop::before {
        -webkit-transform: translate(0, -50%) rotate(180deg);
            -ms-transform: translate(0, -50%) rotate(180deg);
                transform: translate(0, -50%) rotate(180deg);
        }

        .gscore .new_dropdown-sort-item {
        display: block;
        border-bottom: 1px solid #E6E6E6;
        padding-left: 10px;
        padding-bottom: 10px;
        padding-top: 8px;
        cursor: pointer;
        }

        .gscore .new_filter-drop {
        width: 100%;
        display: block;
        cursor: pointer;
        padding-left: 10px;
        padding-top: 8px;
        position: relative;
        }

        .gscore .new_filter-drop::before {
        content: '';
        position: absolute;
        top: 50%;
        right: 10px;
        -webkit-transform: translate(0, -50%);
            -ms-transform: translate(0, -50%);
                transform: translate(0, -50%);
        width: 16px;
        height: 16px;
        background: url(img-ui-kit/filter-drop.svg) no-repeat center;
        }

        .gscore .field-block {
        padding-left: 10px;
        margin-top: 15px;
        margin-bottom: 10px;
        }

        .gscore .new_initial-block {
        margin-left: 10px;
        color: #14141F;
        margin-bottom: 20px;
        }

        .gscore .new_initial-btn {
        -webkit-box-shadow: none !important;
                box-shadow: none !important;
        }

        .gscore .new_initial-btn:hover {
        background: #D34730;
        color: #fff;
        }

        .gscore .new_initial-btn-block {
        margin: 0;
        margin-left: 10px;
        }

        .gscore .new_check {
        margin-top: 200px;
        }

        .gscore .custom-radio {
        position: absolute;
        z-index: -1;
        opacity: 0;
        }

        .gscore .custom-radio-checkbox {
        position: absolute;
        z-index: -1;
        opacity: 0;
        }

        .gscore .custom-radio-checkbox-two {
        position: absolute;
        z-index: -1;
        opacity: 0;
        }

        .gscore .custom-radio-two {
        position: absolute;
        z-index: -1;
        opacity: 0;
        }

        .gscore .custom-radio-disabled {
        position: absolute;
        z-index: -1;
        opacity: 0;
        }

        .gscore .custom-radio + label {
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
            -ms-flex-align: center;
                align-items: center;
        -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
                user-select: none;
        }

        .gscore .custom-radio + label::before {
        content: '';
        display: inline-block;
        width: 18px;
        height: 18px;
        -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
                flex-shrink: 0;
        -webkit-box-flex: 0;
        -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
                flex-grow: 0;
        border: 1px solid #DBDBDB;
        -webkit-border-radius: 3px;
                border-radius: 3px;
        margin-right: 0.5em;
        background-repeat: no-repeat;
        background-position: center center;
        }

        .gscore .custom-radio:not(:disabled):not(:checked) + label:hover::before {
        border-color: #A1A1A5;
        }

        .gscore .custom-radio:not(:disabled):active + label::before {
        background-color: #b3d7ff;
        border-color: #C4C4C4;
        }

        .gscore .custom-radio:checked + label::before {
        border-color: #C4C4C4;
        background-color: #fff;
        background-image: url("img-ui-kit/red-check.svg");
        }

        .gscore .custom-radio:disabled + label::before {
        background-color: #e9ecef;
        }

        .gscore .custom-radio-two + label {
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
            -ms-flex-align: center;
                align-items: center;
        -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
                user-select: none;
        }

        .gscore .custom-radio-two + label::before {
        content: '';
        display: inline-block;
        width: 18px;
        height: 18px;
        -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
                flex-shrink: 0;
        -webkit-box-flex: 0;
        -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
                flex-grow: 0;
        border: 1px solid #DBDBDB;
        -webkit-border-radius: 3px;
                border-radius: 3px;
        margin-right: 0.5em;
        background-repeat: no-repeat;
        background-position: center center;
        }

        .gscore .custom-radio-two:not(:disabled):not(:checked) + label:hover::before {
        border-color: #A1A1A5;
        }

        .gscore .custom-radio-two:not(:disabled):active + label::before {
        background-color: #b3d7ff;
        border-color: #C4C4C4;
        }

        .gscore .custom-radio-two:checked + label::before {
        border-color: #C4C4C4;
        background-color: #fff;
        background-image: url("img-ui-kit/red-check.svg");
        }

        .gscore .custom-radio-two:disabled + label::before {
        background-color: #e9ecef;
        }

        .gscore .custom-radio-two:disabled + label::before {
        background-color: #e9ecef;
        }

        .gscore .custom-radio-disabled + label {
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
            -ms-flex-align: center;
                align-items: center;
        -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
                user-select: none;
        }

        .gscore .custom-radio-disabled + label::before {
        content: '';
        display: inline-block;
        width: 18px;
        height: 18px;
        -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
                flex-shrink: 0;
        -webkit-box-flex: 0;
        -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
                flex-grow: 0;
        border: 1px solid #DBDBDB;
        -webkit-border-radius: 3px;
                border-radius: 3px;
        margin-right: 0.5em;
        background-repeat: no-repeat;
        background-position: center center;
        }

        .gscore .custom-radio-disabled:not(:disabled):not(:checked) + label:hover::before {
        border-color: #A1A1A5;
        }

        .gscore .custom-radio-disabled:not(:disabled):active + label::before {
        background-color: #b3d7ff;
        border-color: #C4C4C4;
        }

        .gscore .custom-radio-disabled:checked + label::before {
        border-color: #C4C4C4;
        background-color: #fff;
        background-image: url("../red-check.svg");
        }

        .gscore .custom-radio-disabled:disabled + label::before {
        border-color: #E6E6E6;
        background-color: #fff;
        background-image: url("img-ui-kit/gray-check.svg");
        }

        .gscore .new_ui-first {
        border: 1px dashed #7B61FF;
        -webkit-border-radius: 5px;
                border-radius: 5px;
        padding: 20px;
        width: 180px;
        }

        .gscore .new_ui-item-long {
        padding: 4px 8px;
        display: block;
        font-size: 14px;
        -webkit-border-radius: 4px;
                border-radius: 4px;
        width: 132px;
        font-weight: 400;
        }

        .gscore .new_ui-long-first {
        color: #fff;
        background: #DD634F;
        }

        .gscore .new_ui-long-second {
        color: #14141F;
        border: 1px solid #E6E6E6;
        margin-top: 15px;
        }

        .gscore .new_ui-second {
        border: 1px dashed #7B61FF;
        -webkit-border-radius: 5px;
                border-radius: 5px;
        padding: 20px;
        width: 205px;
        display: block;
        margin-top: 50px;
        margin-bottom: 50px;
        }

        .gscore .new_ui-second-one {
        border: 1px solid #E0E0E0;
        -webkit-border-radius: 10px;
                border-radius: 10px;
        width: 160px;
        height: 40px;
        display: block;
        }

        .gscore .new_ui-second-two {
        background: #E0E0E0;
        border: 1px solid #E0E0E0;
        -webkit-border-radius: 10px;
                border-radius: 10px;
        width: 160px;
        height: 40px;
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
        font-size: 18px;
        color: #494949;
        font-weight: 500;
        margin-top: 55px;
        }

        .gscore .new_ui-third {
        border: 1px dashed #7B61FF;
        -webkit-border-radius: 5px;
                border-radius: 5px;
        padding: 20px;
        width: 57px;
        margin-bottom: 50px;
        }

        .gscore .new_ui-third-one {
        margin-bottom: 16px;
        }

        .gscore .new_ui-fourth {
        border: 1px dashed #7B61FF;
        -webkit-border-radius: 5px;
                border-radius: 5px;
        border-radius: 5px;
        padding: 20px;
        width: 288px;
        margin-bottom: 50px;
        }

        .gscore .new_ui-fourth-item-one {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
            -ms-flex-align: center;
                align-items: center;
        border-bottom: 1px solid #E6E6E6;
        margin-bottom: 40px;
        padding-bottom: 8px;
        }

        .gscore .new_ui-fourth-item-two {
        margin-bottom: 0;
        }

        .gscore .new_ui-f-x {
        width: 16px;
        height: 16px;
        display: block;
        background: url("img-ui-kit/X.svg");
        margin: 0 0 0 12px;
        }

        .gscore .new_ui-f-text {
        padding-left: 8px;
        padding-right: 40px;
        font-size: 14px;
        color: #14141F;
        }

        .gscore .new_ui-f-copy {
        width: 16px;
        height: 16px;
        display: block;
        background: url("img-ui-kit/Copy.svg");
        margin: 0 12px 0 auto;
        }

        .gscore .new_ui-f-number {
        color: #fff;
        font-size: 10px;
        background: #14141F;
        -webkit-border-radius: 50%;
                border-radius: 50%;
        padding: 0 5px;
        font-weight: 400;
        margin: 0 0 0 12px;
        }

        .gscore .new_ui-fifth {
        padding: 20px;
        border: 1px dashed #7B61FF;
        -webkit-border-radius: 5px;
                border-radius: 5px;
        width: 340px;
        margin-bottom: 50px;
        }

        .gscore .new_ui-fi-item-one {
        border-bottom: 1px solid #E6E6E6;
        padding-bottom: 15px;
        }

        .gscore .new_ui-fi-item-two {
        border-bottom: 1px solid #E6E6E6;
        padding-bottom: 15px;
        margin-top: 27px;
        }

        .gscore .new_ui-fi-some-item-one {
        color: #DD634F;
        border-bottom: 2px solid #DD634F;
        padding-bottom: 17px;
        cursor: pointer;
        }

        .gscore .new_ui-fi-some-item-two {
        cursor: pointer;
        }

        .gscore .new_ui-fi-some-item-two-second {
        margin-right: 0;
        margin-left: 20px;
        }

        .gscore .new_ui-small-window {
        border: 1px solid #E6E6E6;
        -webkit-box-sizing: border-box;
                box-sizing: border-box;
        -webkit-box-shadow: 0px 4px 24px rgba(0, 67, 101, 0.07);
                box-shadow: 0px 4px 24px rgba(0, 67, 101, 0.07);
        -webkit-border-radius: 0px 0px 10px 10px;
                border-radius: 0px 0px 10px 10px;
        width: 131px;
        padding-top: 8px;
        margin-bottom: 50px;
        }

        .gscore .new_ui-small-item {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
            -ms-flex-align: center;
                align-items: center;
        width: 131px;
        border-bottom: 1px solid #E6E6E6;
        padding-left: 10px;
        padding-right: 10px;
        padding-bottom: 8px;
        }

        .gscore .new_ui-small-item-text {
        font-weight: 500;
        color: #14141F !important;
        margin-right: 30px;
        text-decoration: none;
        }

        .gscore .new_ui-small-item-text-two {
        margin-right: 36px;
        padding-top: 8px;
        }

        .gscore .new_ui-small-plus {
        background: url("img-ui-kit/plus-gray.svg");
        width: 16px;
        height: 16px;
        display: block;
        }

        .gscore .new_ui-small-plus.hidden {
        display: none;
        }

        .gscore .new_ui-small-item-two {
        border-bottom: none;
        }

        .gscore .new_ui-message {
        visibility: hidden;
        background: url("img-ui-kit/bg-message.png") no-repeat;
        width: 220px;
        height: 70px;
        display: block;
        -webkit-filter: drop-shadow(0px 4px 8px rgba(34, 32, 65, 0.05)) drop-shadow(0px 0px 4px rgba(34, 32, 65, 0.1));
                filter: drop-shadow(0px 4px 8px rgba(34, 32, 65, 0.05)) drop-shadow(0px 0px 4px rgba(34, 32, 65, 0.1));
        font-size: 12px;
        padding: 10px;
        text-align: center;
        font-weight: 400;
        position: absolute;
        bottom: 150%;
        left: 50%;
        margin-left: -110px;
        z-index: 1;
        }

        .gscore .new_table-sim:hover .new_ui-message {
        visibility: visible;
        }

        .gscore .new_table-title {
        font-family: 'Inter', sans-serif;
        }

        .gscore .new_table-item {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
            -ms-flex-align: center;
                align-items: center;
        padding-left: 20px;
        padding-right: 20px;
        }

        .gscore .new_keyword-title {
        margin-bottom: 25px;
        margin-top: 63px;
        }

        .gscore .new_table-item-title-first {
        font-weight: 500;
        font-size: 14px;
        line-height: 24px;
        color: #242424;
        margin-right: 8px;
        }

        .gscore .details_table {
        width: auto;
        margin-right: 21px;
        }

        .gscore .details_table_list {
        font-weight: 400;
        }

        .gscore .details_table_list input {
        visibility: hidden;
        }

        .gscore .details_table_list label {
        width: 100%;
        padding-left: 10px;
        padding-top: 10px;
        padding: 10px 0 10px 10px;
        }

        .gscore .details_table_list span {
        padding: 0;
        margin: 0;
        }

        .gscore .details_table label:not(:last-of-type) {
        margin-bottom: 15px;
        }

        .gscore .new_edit-popup .details_table label {
        margin-bottom: 0;
        }

        .gscore .details_table_list label:not(:first-of-type) {
        -webkit-border-bottom-left-radius: 2px;
                border-bottom-left-radius: 2px;
        -webkit-border-bottom-right-radius: 2px;
                border-bottom-right-radius: 2px;
        }

        .gscore .details_table_list label:first-of-type {
        -webkit-border-top-left-radius: 10px;
                border-top-left-radius: 10px;
        -webkit-border-top-right-radius: 10px;
                border-top-right-radius: 10px;
        }

        .gscore .details_table_list label:last-of-type {
        -webkit-border-bottom-left-radius: 10px;
                border-bottom-left-radius: 10px;
        -webkit-border-bottom-right-radius: 10px;
                border-bottom-right-radius: 10px;
        }

        .gscore .details_table_list label:hover {
        background-color: #E6E6E6;
        }

        .gscore .details_table_list input:checked + label {
        background-color: #cacaca;
        }

        .gscore .new_table-word {
        font-weight: 400;
        padding: 4px 8px;
        border: 1px solid #E6E6E6;
        -webkit-border-radius: 4px;
                border-radius: 4px;
        margin-right: 12px;
        }

        .gscore .new_ui-long-first-table {
        width: auto;
        border: 1px solid #E6E6E6;
        font-size: 14px;
        }

        .gscore .new_table-sim {
        width: 16px;
        height: 16px;
        background: url("img-ui-kit/sim-table.svg");
        display: block;
        margin-left: 12px;
        cursor: pointer;
        position: relative;
        }

        .gscore .new_table-pag-wrapper {
        margin-left: auto;
        }

        .gscore .new_table-pag-wrapper {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
            -ms-flex-align: center;
                align-items: center;
        }

        .gscore .new_table-pag-wrapper span {
        font-weight: 500;
        font-size: 14px;
        }

        .gscore .new_table-pag-first {
        background: #E5E5E5;
        -webkit-border-radius: 4px;
                border-radius: 4px;
        padding: 2px;
        margin-right: 3px;
        }

        .gscore .new_icon-initial-table {
        margin-bottom: 0;
        margin-left: 20px;
        }

        .gscore .new_icon-initial-table-second {
        -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
                transform: rotate(180deg);
        margin-left: 4px;
        }

        .gscore .new_ui-small-plus-table {
        margin-left: 13px;
        }

        .gscore .new_table-wrapper {
        border: 1px dashed #7B61FF;
        padding: 20px;
        -webkit-border-radius: 5px;
                border-radius: 5px;
        }

        .gscore .new_table-wrapper-second {
        width: 300px;
        border: 1px dashed #7B61FF;
        -webkit-border-radius: 5px;
                border-radius: 5px;
        padding: 20px;
        margin-top: 46px;
        }

        .gscore .new_table-wrapper-second-items-one {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
            -ms-flex-align: center;
                align-items: center;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
                justify-content: space-between;
        margin-bottom: 20px;
        }

        .gscore .new_table-wrapper-second-items-one:nth-child(1) {
        -webkit-box-pack: start;
        -webkit-justify-content: start;
            -ms-flex-pack: start;
                justify-content: start;
        }

        .gscore .new_table-wrapper-second-items-one:last-child {
        margin-bottom: 0;
        }

        .gscore .new_table-wrapper-second-items-one span {
        margin: 0;
        cursor: pointer;
        }

        .gscore .new_table-wrapper-third {
        margin-top: 82px;
        }

        .gscore .new_table-wrapper-third-title {
        margin-bottom: 34px;
        }

        .gscore .custom-radio-checkbox + label {
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
            -ms-flex-align: center;
                align-items: center;
        -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
                user-select: none;
        }

        .gscore .custom-radio-checkbox + label::before {
        content: '';
        display: inline-block;
        width: 18px;
        height: 18px;
        -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
                flex-shrink: 0;
        -webkit-box-flex: 0;
        -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
                flex-grow: 0;
        border: 1px solid #DBDBDB;
        -webkit-border-radius: 3px;
                border-radius: 3px;
        margin-right: 0.5em;
        background-repeat: no-repeat;
        background-position: center center;
        }

        .gscore .custom-radio-checkbox:not(:disabled):not(:checked) + label:hover::before {
        border-color: #A1A1A5;
        }

        .gscore .custom-radio-checkbox:not(:disabled):active + label::before {
        background-color: #b3d7ff;
        border-color: #C4C4C4;
        }

        .gscore .custom-radio-checkbox:checked + label::before {
        border-color: #C4C4C4;
        background-color: #fff;
        background-image: url("http://wp-gsc.avk129.beget.tech/wp-admin/img-ui-kit/red-check.svg");
        }

        .gscore .custom-radio-checkbox:disabled + label::before {
        background-color: #e9ecef;
        }

        .gscore .custom-radio-checkbox:disabled + label::before {
        background-color: #e9ecef;
        }

        .gscore .new_table-wrapper-third {
        width: 65%;
        }

        .gscore .net_table-wrapper-third-item-text {
        font-size: 14px;
        color: #14141F;
        margin-left: 10px;
        }

        .gscore .new_table-checkbox {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
            -ms-flex-align: center;
                align-items: center;
        position: relative;
        }

        .gscore .new_table-item-wrapper {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
            -ms-flex-align: center;
                align-items: center;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
                justify-content: space-between;
        }

        .gscore .custom-radio-checkbox-two + label {
        display: -webkit-inline-box;
        display: -webkit-inline-flex;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
            -ms-flex-align: center;
                align-items: center;
        -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
                user-select: none;
        }

        .gscore .custom-radio-checkbox-two + label::before {
        content: '';
        display: inline-block;
        width: 18px;
        height: 18px;
        -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
                flex-shrink: 0;
        -webkit-box-flex: 0;
        -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
                flex-grow: 0;
        border: 1px solid #DBDBDB;
        -webkit-border-radius: 3px;
                border-radius: 3px;
        margin-right: 0.5em;
        background-repeat: no-repeat;
        background-position: center center;
        }

        .gscore .custom-radio-checkbox-two:not(:disabled):active + label::before {
        background-color: #A1A1A5;
        border-color: #DBDBDB;
        }

        .gscore .custom-radio-checkbox-two:checked + label::before {
        border-color: #DBDBDB;
        background-color: #A1A1A5;
        background-image: url("img-ui-kit/red-check.svg");
        }

        .gscore .custom-radio-checkbox-two:disabled + label::before {
        background-color: #e9ecef;
        }

        .gscore .custom-radio-checkbox-two:disabled + label::before {
        background-color: #e9ecef;
        }

        .gscore .new_table-wrapper-fourth {
        padding: 18px 0 18px 20px;
        background: #8D9090;
        color: #fff;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
            -ms-flex-align: center;
                align-items: center;
        margin-top: 82px;
        width: 100%;
        }

        .gscore .new_table-wrapper-solo-item {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
            -ms-flex-align: center;
                align-items: center;
        cursor: pointer;
        position: relative;
        }

        .gscore .new_table-wrapper-solo-item-inner {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
            -ms-flex-align: center;
                align-items: center;
        }

        .gscore .new_table-wrapper-solo-item-inner .new_dropdown-sort-wrapper,
        .gscore .new_table-wrapper-solo-item-inner + .new_dropdown-sort-wrapper {
        position: absolute;
        top: 0px;
        left: 0px;
        color: black;
        display: none;
        margin-top: 40px;
        }

        .gscore .new_table-wrapper-solo-item-inner + .new_dropdown-sort-wrapper.right {
        left: unset;
        right: 0;
        }

        .gscore .new_table-wrapper-solo-item-inner.opened .new_dropdown-sort-wrapper,
        .gscore .new_table-wrapper-solo-item-inner.opened + .new_dropdown-sort-wrapper {
        display: block;
        z-index: 10;
        }

        .gscore .new_table-wrapper-solo-item-two {
        margin-left: 200px;
        margin-right: 61px;
        }

        .gscore .new_table-wrapper-solo-item-four {
        margin-left: 22px;
        margin-right: 73px;
        }

        .gscore .net_table-wrapper-third-item-text-two {
        color: #fff;
        cursor: pointer;
        }

        .gscore .new_table-wrapper-funnel {
        background: url("img-ui-kit/Funnel.svg") no-repeat;
        width: 16px;
        height: 16px;
        display: block;
        margin-left: 5px;
        }

        .gscore .new_edit {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        }

        .gscore .new_left-bar {
        background: #24282C;
        width: 160px;
        height: 120vh;
        }

        .gscore .new_feedback {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        background: #f1f1f1;
        }

        .gscore .new-input_initital-feedback-disabled {
        width: 190px;
        margin-right: 8px;
        }

        .gscore .new_feedback-top-texts {
        margin-left: 23px;
        }

        .gscore .new_feedback h1,
        .gscore h2,
        .gscore h3,
        .gscore h4,
        .gscore h5,
        .gscore h6 {
        font-family: 'Roboto', sans-serif;
        }

        .gscore .new_feedback-top-title {
        font-size: 20px;
        }

        .gscore .new_feedback-top-bar {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 32px;
        margin-top: 40px;
        -webkit-box-align: center;
        -webkit-align-items: center;
            -ms-flex-align: center;
                align-items: center;
        }

        .gscore .container-feedback {
        padding: 0 20px;
        }

        .gscore .new_feedback-top-text {
        width: 53%;
        font-weight: 400;
        font-size: 14px;
        }

        .gscore .new_feedback-main-item {
        background: #fff;
        padding: 32px 64px 32px 28px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
            -ms-flex-align: center;
                align-items: center;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
                justify-content: space-between;
        margin-bottom: 32px;
        }

        .gscore .new_feedback-main-text {
        width: 55%;
        margin-top: 12px;
        margin-bottom: 28px;
        }

        .gscore .new_initial-btn-feedback-first {
        margin-bottom: 0;
        text-transform: unset;
        }

        .gscore .new_feedback-step-title {
        color: #A1A1A5;
        }

        .gscore .new_feedback-main-text-two {
        width: 100%;
        }

        .gscore .new_feedback-main-text-two a {
        color: #DD634F;
        text-decoration: none;
        }

        .gscore .new_feedback-input-btn-wrapper {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        }

        .gscore .new-input_initital-feedback {
        margin-bottom: 28px;
        width: 160px;
        margin-right: 8px;
        }

        .gscore .new_feedback-main-item-opacity {
        opacity: .2;
        }

        .gscore .new-input_initital-feedback-disabled-two {
        width: 160px;
        margin-right: 8px;
        }

        .gscore .header-edit {
        padding: 13px 20px;
        border-bottom: 1px solid #E6E6E6;
        }

        .gscore .new-header_btn {
        padding: 5px 27px 5px 60px;
        background: #DD634F;
        background-image: url("img-ui-kit/gscore-mobile.svg");
        background-repeat: no-repeat;
        background-position: 27px;
        text-align: center;
        color: #fff;
        font-weight: 500;
        width: 116px;
        -webkit-border-radius: 10px;
                border-radius: 10px;
        margin-left: auto;
        cursor: pointer;
        }

        .gscore .new_edit-left {
        padding: 70px 60px 0 60px;
        width: 75%;
        border-right: 1px solid #E6E6E6;
        }

        .gscore .new_edit-right {
        width: 25%;
        }

        .gscore .new_edit-right p {
        margin-left: 16px;
        font-weight: 500;
        margin-top: 16px;
        }

        .gscore .new_edit-right-first {
        padding: 12px 11px 12px 15px;
        background: #E6E6E6;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
                justify-content: space-between;
        }

        .gscore .new_initial-btn-edit-first {
        margin-bottom: 0;
        text-transform: unset;
        margin-top: 16px;
        margin-left: 16px;
        }

        .gscore .new-header_btn-edit-4 {
        background-position: 18px;
        padding: 5px 27px 5px 53px;
        font-size: 14px;
        }

        .gscore .new_edit-rightl-first-icons {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        }

        .gscore .new_edit-right-first-icon-arrows {
        background: url("img-ui-kit/arrows-counter.svg") no-repeat;
        width: 16px;
        height: 16px;
        margin-right: 9px;
        display: block;
        }

        .gscore .new_edit-right-first-icon-funnel-black {
        background: url("img-ui-kit/funnel-black.svg") no-repeat;
        width: 16px;
        height: 16px;
        display: block;
        }

        .gscore .new_edit-right-first-texts span {
        font-weight: 400;
        }

        .gscore .new_ui-fi-item-one-right-edit-block {
        margin-top: 14px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        padding-bottom: 0;
        margin-bottom: 15px;
        padding: 0 10px;
        }

        .gscore .new_ui-fi-item-one-right-edit-block span:first-child {
        margin-right: 23px;
        }

        .gscore .new_table-wrapper-second-items-one-edit-right {
        -webkit-box-pack: left;
        -webkit-justify-content: left;
            -ms-flex-pack: left;
                justify-content: left;
        }

        .gscore .new_table-wrapper-second-items-one-edit-right span {
        margin-left: 12px;
        }

        .gscore .new_ui-f-text {
        margin-top: 0 !important;
        }

        .gscore .new_ui-fourth-item-one-edit-right-block {
        width: 100%;
        margin-bottom: 8px;
        }

        .gscore .new_ui-fourth-item-two-edit-right-block {
        width: 100%;
        margin-bottom: 10px;
        }

        .gscore .new-overlay {
        position: fixed;
        width: 100%;
        height: 100vh;
        top: 0;
        left: 0;
        background-color: rgba(0, 0, 0, 0.7);
        display: none;
        z-index: 1;
        }

        .gscore .new_edit-popup {
        position: absolute;
        width: 783px;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
        -webkit-border-radius: 20px;
                border-radius: 20px;
        -webkit-box-sizing: border-box;
                box-sizing: border-box;
        background: #fff;
        z-index: 999;
        }

        .gscore .new_edit-popup h3 {
        color: #14141F;
        font-weight: 500;
        font-size: 24px;
        margin-bottom: 15px;
        padding-top: 20px;
        padding-left: 20px;
        }

        .gscore .new_table-wrapper-solo-item-two-edit-popup {
        margin: 0;
        }

        .gscore .new_table-wrapper-solo-item-four-edit-popup {
        margin: 0;
        }

        .gscore .new_table-wrapper-fourth-edit-popup {
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
                justify-content: space-between;
        margin-top: 20px;
        }

        .gscore .new_table-wrapper-fourth-edit-popup .new_table-wrapper-solo-item,
        .gscore .new_table-item-wrapper-edit-pp-main div {
            width: 20%;
        }

        .gscore .new_table-wrapper-fourth-edit-popup .new_table-checkbox,
        .gscore .new_table-item-wrapper-edit-pp-main .new_table-checkbox {
            width: 50%;
        }

        .gscore .new_table-item-wrapper-edit-popup {
        width: 783px!important;
        padding: 10px 0 10px 20px;
        -webkit-box-pack: unset;
        -webkit-justify-content: unset;
            -ms-flex-pack: unset;
                justify-content: unset;
        position: relative;
        z-index: -1;
        }

        .gscore .new_table-item-wrapper-edit-popup:nth-child(2n+1) {
            background-color: #F7F7F7;
        }

        .gscore .net_table-wrapper-third-item-text-edit-popup {
        /* width: 100px; */
        margin-right: 36px;
        }

        .gscore .new_table-item-wrapper-edit-popup span {
        font-weight: 400;
        }

        .gscore .new_table-item-wrapper-edit-popup span:nth-child(3) {
        margin-left: 100px;
        margin-right: 148px;
        }

        .gscore .new_table-item-wrapper-edit-popup span:last-child {
        margin-left: 88px;
        }

        .gscore .new_table-item-title-first-edit-pp-footer {
        color: #14141F;
        font-size: 18px;
        font-weight: 500;
        }

        .gscore .new_edit-popup-footer {
        margin-top: 24px;
        padding-left: 18px;
        padding-right: 18px;
        padding-bottom: 20px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
                justify-content: space-between;
        }

        .gscore .new_table-item-footer-edit-pp span {
        cursor: pointer;
        }

        .gscore .new_initial-btn-edit-pp-footer {
        text-transform: unset;
        margin-bottom: 0;
        }

        .gscore .new_ui-small-window-edit-pp {
        position: absolute;
        background: #fff;
        left: 275px;
        top: 110px;
        display: none;
        z-index: 1;
        }

        .gscore .new-edit-pp-word {
        font-size: 14px;
        cursor: pointer;
        }

        .gscore .new-edit-pp-word.active {
        color: #fff;
        background: #DD634F;
        }

        .gscore #edit-pp-quest {
        display: none;
        }

        .gscore #edit-pp-long {
        display: none;
        }

        .gscore .new_table-word-edit-pp.active {
        background: #DD634F;
        color: #fff;
        }

        .gscore .new_table-item-wrapper-edit-pp-main {
        overflow-y: auto;
        overflow-x: hidden;
        height: 480px;
        }

        .gscore .new_table-item-wrapper-edit-pp-main::-webkit-scrollbar {
        width: 7px;
        background-color: #fff;
        }

        .gscore .new_table-item-wrapper-edit-pp-main::-webkit-scrollbar-thumb {
        background-color: #14141F;
        -webkit-border-radius: 5px;
                border-radius: 5px;
        }

        .gscore .new_icon-loading {
        position: relative;
        overflow: hidden;
        }

        .gscore .new_loading-btn .loader,
        .gscore .new_icon-loading .loader {
        font-size: 20px;
        margin: 0 auto;
        text-indent: -9999em;
        width: 20px;
        height: 20px;
        -webkit-border-radius: 50%;
                border-radius: 50%;
        background: #ffffff;
        background: -webkit-linear-gradient(left, #ffffff 10%, rgba(255, 255, 255, 0) 42%);
        background: -o-linear-gradient(left, #ffffff 10%, rgba(255, 255, 255, 0) 42%);
        background: -webkit-gradient(linear, left top, right top, color-stop(10%, #ffffff), color-stop(42%, rgba(255, 255, 255, 0)));
        background: linear-gradient(to right, #ffffff 10%, rgba(255, 255, 255, 0) 42%);
        position: relative;
        -webkit-animation: loading 1s infinite linear;
        animation: loading 1s infinite linear;
        -webkit-transform: translateZ(0);
        -ms-transform: translateZ(0);
        transform: translateZ(0);
        }

        .gscore .new_loading-btn .loader:before,
        .gscore .new_icon-loading .loader:before {
        content: '';
        width: 50%;
        height: 50%;
        background: #ffffff;
        -webkit-border-radius: 100% 0 0 0;
                border-radius: 100% 0 0 0;
        position: absolute;
        top: 0;
        left: 0;
        }

        .gscore .new_loading-btn .loader:after,
        .gscore .new_icon-loading .loader:after {
        content: '';
        background: #DD634F;
        width: 75%;
        height: 75%;
        -webkit-border-radius: 50%;
                border-radius: 50%;
        content: '';
        margin: auto;
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        }

        .gscore .new_icon-loading .loader:after {
        background: #F7F7F7;
        }

        .gscore .new_icon-loading .loader {
        background: #000000;
        background: -webkit-linear-gradient(left, #000000 10%, rgba(0, 0, 0, 0) 42%);
        background: -o-linear-gradient(left, #000000 10%, rgba(0, 0, 0, 0) 42%);
        background: -webkit-gradient(linear, left top, right top, color-stop(10%, #000000), color-stop(42%, rgba(0, 0, 0, 0)));
        background: linear-gradient(to right, #000000 10%, rgba(0, 0, 0, 0) 42%);
        }

        .gscore .new_icon-loading .loader:before {
        background: #000000;
        left: 2px;
        }

        .gscore .tabs .tabsInner {
        display: none;
        }

        .gscore .tabs .tabsInner.active {
        display: block;
        }

        @-webkit-keyframes loading {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
        }

        @keyframes loading {
        0% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
        }

    </style>

    <div class="section">
        <section class="new_buttons" id="new_buttons">
            <div class="container">
                <h1 class="new_buttons-title">
                    Buttons
                </h1>
                <div class="new_buttons-wrapper">
                    <div class="new_buttons-tiltes-block">
                        <h4 class="new_buttons-title-item">
                            Initial
                        </h4>
                        <h4 class="new_buttons-title-item">
                            Active
                        </h4>
                        <h4 class="new_buttons-title-item">
                            Loading
                        </h4>
                        <h4 class="new_buttons-title-item">
                            Disabled
                        </h4>
                    </div>
                    <div class="new_buttons-some">
                        <a href="#" class="new_btn new_initial-btn">
                            ok
                        </a>
                        <a href="#" class="new_btn new_active-btn">
                            ok
                        </a>
                        <a href="#" class="new_btn new_loading-btn">
                            <span class="loader"></span>
                        </a>
                        <a href="javascript:void(0)" class="new_btn new_disabled-btn">
                            ok
                        </a>
                    </div>
                </div>
                <h2 class="new_icons-title">
                    Icon
                </h2>
                <div class="new_icons-wrapper">
                    <div class="new_buttons-tiltes-block">
                        <h4 class="new_buttons-title-item">
                            Initial
                        </h4>
                        <h4 class="new_buttons-title-item">
                            Active
                        </h4>
                        <h4 class="new_buttons-title-item">
                            Loading
                        </h4>
                        <h4 class="new_buttons-title-item">
                            Disabled
                        </h4>
                    </div>
                    <div class="new_icons-second">
                        <a href="javascript:void(0)" class="new_icon new_icon-initial">

                        </a>
                        <a href="javascript:void(0)" class="new_icon new_icon-active">

                        </a>
                        <a href="javascript:void(0)" class="new_icon new_icon-loading">
                            <span class="loader"></span>
                        </a>
                        <a href="javascript:void(0)" class="new_icon new_icon-disabled">

                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="new_inputs" id="new_inputs">
            <div class="container">
                <h1 class="new_buttons-title">
                    Inputs
                </h1>
                <div class="new_inputs-wrapper">
                    <div class="new-inputs-first">
                        <h4 class="new-inputs-title">
                            Initial
                        </h4>
                        <h4 class="new-inputs-title">
                            Typing
                        </h4>
                        <h4 class="new-inputs-title">
                            Filled
                        </h4>
                        <h4 class="new-inputs-title">
                            Disabled
                        </h4>
                        <h4 class="new-inputs-title">
                            Success
                        </h4>
                        <h4 class="new-inputs-title">
                            Error
                        </h4>
                    </div>
                    <div class="new-inputs-second">
                        <div class="new-inputs-somewrapper">
                            <input type="text" class="new-input new-input_initital">
                            <input type="text" class="new-input-small new-input-small_initial">
                        </div>
                        <div class="new-inputs-somewrapper">
                            <input type="text" class="new-input new-input_initital">
                            <input type="text" class="new-input-small new-input-small_initial">
                        </div>
                        <div class="new-inputs-somewrapper">
                            <input type="text" class="new-input new-input_initital">
                            <input type="text" class="new-input-small new-input-small_initial">
                        </div>
                        <div class="new-inputs-somewrapper">
                            <input type="text" class="new-input new-input_disabled" disabled>
                            <input type="text" class="new-input-small new-input-small_disabled" disabled>
                        </div>
                        <div class="new-inputs-somewrapper">
                            <input type="text" class="new-input new-input_success">
                            <input type="text" class="new-input-small new-input-small_success">
                        </div>
                        <div class="new-inputs-somewrapper">
                            <input type="text" class="new-input new-input_error">
                            <input type="text" class="new-input-small new-input-small_error">
                            <p class="new-input-error-message">Error</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="new_drop" id="new_drop">
            <div class="container">
                <h1 class="new_buttons-title">
                    Dropdowns
                </h1>
                <div class="new_dropdown-wrapper">
                    <div class="new_drop-first">
                        <h4 class="new_drop-title-item">
                            Initial
                        </h4>
                        <h4 class="new_drop-title-item">
                            Active
                        </h4>
                        <h4 class="new_drop-title-item">
                            Filled
                        </h4>
                        <h4 class="new_drop-title-item">
                            Disabled
                        </h4>
                        <h4 class="new_drop-title-item">
                            Open
                        </h4>
                    </div>
                    <div class="new_button-second">
                        <fieldset>
                            <details>
                                <summary>Text does not contain<span class="material-icons-round"></span></summary>
                            </details>
                        </fieldset>
                        <fieldset>
                            <details>
                                <summary class="field-active">Text does not contain<span
                                        class="material-icons-round"></span></summary>
                            </details>
                        </fieldset>
                        <fieldset>
                            <details>
                                <summary>Text does not contain<span class="material-icons-round"></span></summary>
                            </details>
                        </fieldset>
                        <fieldset>
                            <details>
                                <summary class="field-disabled">Text does not contain<span
                                        class="material-icons-round"></span></summary>
                            </details>
                        </fieldset>
                        <fieldset class="field-last">
                            <details open>
                                <summary>Text does not contain<span class="material-icons-round"></span></summary>
                                <div>
                                    <label>
                                        <input type="radio" name="radio" />
                                        <span>Greater than</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="radio" />
                                        <span>Greater than</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="radio" checked />
                                        <span>Greater than</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="radio" />
                                        <span>Greater than</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="radio" />
                                        <span>Greater than</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="radio" />
                                        <span>Greater than</span>
                                    </label>
                                </div>
                                </detail>
                        </fieldset>
                    </div>
                </div>
                <div class="new_dropdown-sort-wrapper _hidden-filter">
                    <span class="new_dropdown-sort-item">
                        Sort A > Z
                    </span>
                    <span class="new_dropdown-sort-item">
                        Sort Z > A
                    </span>
                    <span class="new_filter-drop">
                        Filter by condition
                    </span>
                    <fieldset class="field-last field-block">
                        <details>
                            <summary>Text does not contain<span class="material-icons-round"></span></summary>
                            <div>
                                <label>
                                    <input type="radio" name="radio" />
                                    <span>Greater than</span>
                                </label>
                                <label>
                                    <input type="radio" name="radio" />
                                    <span>Greater than</span>
                                </label>
                                <label>
                                    <input type="radio" name="radio" checked />
                                    <span>Greater than</span>
                                </label>
                                <label>
                                    <input type="radio" name="radio" />
                                    <span>Greater than</span>
                                </label>
                                <label>
                                    <input type="radio" name="radio" />
                                    <span>Greater than</span>
                                </label>
                                <label>
                                    <input type="radio" name="radio" />
                                    <span>Greater than</span>
                                </label>
                            </div>
                            </detail>
                    </fieldset>
                    <input type="text" class="new-input new-input_initital new_initial-block">
                    <a href="#" class="new_btn new_initial-btn new_initial-btn-block">
                        ok
                    </a>
                </div>
            </div>
        </section>
        <section class="new_check" id="new_check">
            <div class="container">
                <h1 class="new_buttons-title">
                    Checkboxes
                </h1>
                <div class="radio">
                    <input class="custom-radio" type="radio" id="color-1" name="color" value="indigo" checked>
                    <label for="color-1"></label>
                </div>
                <div class="radio">
                    <input class="custom-radio-two" type="radio" id="color-2" name="color" value="indigo">
                    <label for="color-2"></label>
                </div>
                <div class="radio">
                    <input class="custom-radio-disabled" type="radio" id="color-3" name="color" value="indigo" disabled>
                    <label for="color-3"></label>
                </div>
            </div>
        </section>
        <section class="new_ui" id="new_ui">
            <div class="container">
                <h1 class="new_buttons-title">
                    UI Elements
                </h1>
                <div class="new_ui-first">
                    <span class="new_ui-item-long new_ui-long-first">
                        Longtail keywords
                    </span>
                    <span class="new_ui-item-long new_ui-long-second">
                        Longtail keywords
                    </span>
                </div>
                <div class="new_ui-second">
                    <span class="new_ui-second-one">

                    </span>
                    <span class="new_ui-second-two">
                        459 - 504
                    </span>
                </div>
                <div class="new_ui-third">
                    <img src="img-ui-kit/arrow-2.svg" alt="" class="new_ui-third-one">
                    <img src="img-ui-kit/arrow-1.svg" alt="" class="new_ui-third-two">
                </div>
                <div class="new_ui-fourth">
                    <div class="new_ui-fourth-item-one">
                        <a href="#" class="new_ui-f-x"></a>
                        <p class="new_ui-f-text">
                            Вeveloping gender-neutral
                        </p>
                        <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                    </div>
                    <div class="new_ui-fourth-item-one new_ui-fourth-item-two">
                        <span class="new_ui-f-number">
                            4
                        </span>
                        <p class="new_ui-f-text">
                            Вeveloping gender-neutral
                        </p>
                        <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                    </div>
                </div>
                <div class="new_ui-fifth">
                    <div class="new_ui-fi-item-one">
                        <span class="new_ui-fi-some-item-one">
                            Missing Keywords
                        </span>
                        <span class="new_ui-fi-some-item-two">
                            Included Keywords
                        </span>
                    </div>
                    <div class="new_ui-fi-item-two">
                        <span class="new_ui-fi-some-item-two">
                            Included Keywords
                        </span>
                        <span class="new_ui-fi-some-item-one new_ui-fi-some-item-two-second">
                            Missing Keywords
                        </span>
                    </div>
                </div>
                <div class="new_ui-small-window">
                    <div class="new_ui-small-item">
                        <a href="#" class="new_ui-small-item-text">
                            Question
                        </a>
                        <a href="#" class="new_ui-small-plus"></a>
                    </div>
                    <div class="new_ui-small-item new_ui-small-item-two">
                        <a href="#" class="new_ui-small-item-text new_ui-small-item-text-two">
                            Longtail
                        </a>
                        <a href="#" class="new_ui-small-plus"></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="new_table" id="new_table">
            <div class="container">
                <h1 class="new_buttons-title new_table-title">
                    Table
                </h1>
                <div class="new_table-wrapper">
                    <h3 class="new_keyword-title">
                        Keywords
                    </h3>
                    <div class="new_table-item">
                        <h4 class="new_table-item-title-first">
                            Date:
                        </h4>
                        <fieldset>
                            <details class="details_table">
                                <summary>3 months<span class="material-icons-round"></span></summary>
                            </details>
                        </fieldset>
                        <span class="new_table-word">
                            Word
                        </span>
                        <span class="new_table-word">
                            Questions
                        </span>
                        <span class="new_ui-item-long new_ui-long-first new_ui-long-first-table">
                            Longtail
                        </span>
                        <input type="text" class="new-input-small new-input-small_initial">
                        <span class="new_table-sim">
                            <div class="new_ui-message">
                                Enter the minimum number of words for the longtail query, e.g. 5.
                            </div>
                        </span>
                        <div class="new_table-pag-wrapper">
                            <span class="new_table-pag-first">1-100</span>
                            <span class="new_table-pag-seocnd">of 203</span>
                            <a href="javascript:void(0)" class="new_icon new_icon-initial new_icon-initial-table">

                            </a>
                            <a href="javascript:void(0)"
                                class="new_icon new_icon-initial new_icon-initial-table new_icon-initial-table-second">

                            </a>
                        </div>
                    </div>
                    <h3 class="new_keyword-title">
                        Keywords
                    </h3>
                    <div class="new_table-item">
                        <h4 class="new_table-item-title-first">
                            Date:
                        </h4>
                        <fieldset>
                            <details class="details_table">
                                <summary>3 months<span class="material-icons-round"></span></summary>
                            </details>
                        </fieldset>
                        <span class="new_table-word">
                            Word
                        </span>
                        <span class="new_ui-item-long new_ui-long-first new_ui-long-first-table">
                            Questions
                        </span>
                        <a href="#" class="new_ui-small-plus new_ui-small-plus-table"></a>
                        <div class="new_table-pag-wrapper">
                            <span class="new_table-pag-first">1-100</span>
                            <span class="new_table-pag-seocnd">of 203</span>
                            <a href="javascript:void(0)" class="new_icon new_icon-initial new_icon-initial-table">

                            </a>
                            <a href="javascript:void(0)"
                                class="new_icon new_icon-initial new_icon-initial-table new_icon-initial-table-second">

                            </a>
                        </div>
                    </div>
                    <h3 class="new_keyword-title">
                        Keywords
                    </h3>
                    <div class="new_table-item">
                        <h4 class="new_table-item-title-first">
                            Date:
                        </h4>
                        <fieldset>
                            <details class="details_table">
                                <summary>3 months<span class="material-icons-round"></span></summary>
                            </details>
                        </fieldset>
                        <span class="new_ui-item-long new_ui-long-first new_ui-long-first-table">
                            Word
                        </span>
                        <a href="#" class="new_ui-small-plus new_ui-small-plus-table"></a>
                        <div class="new_table-pag-wrapper">
                            <span class="new_table-pag-first">1-100</span>
                            <span class="new_table-pag-seocnd">of 203</span>
                            <a href="javascript:void(0)" class="new_icon new_icon-initial new_icon-initial-table">

                            </a>
                            <a href="javascript:void(0)"
                                class="new_icon new_icon-initial new_icon-initial-table new_icon-initial-table-second">

                            </a>
                        </div>
                    </div>
                </div>
                <div class="new_table-wrapper-second">
                    <div class="new_table-wrapper-second-items-one">
                        <span class="new_ui-item-long new_ui-long-first new_ui-long-first-table">
                            Words
                        </span>
                        <a href="#" class="new_ui-small-plus new_ui-small-plus-table"></a>
                    </div>
                    <div class="new_table-wrapper-second-items-one">
                        <span class="new_table-word">
                            Words
                        </span>
                        <span class="new_ui-item-long new_ui-long-first new_ui-long-first-table">
                            Questions
                        </span>
                        <span class="new_table-word">
                            Longtail
                        </span>
                    </div>
                    <div class="new_table-wrapper-second-items-one">
                        <span class="new_table-word">
                            Words
                        </span>
                        <span class="new_table-word">
                            Questions
                        </span>
                        <span class="new_ui-item-long new_ui-long-first new_ui-long-first-table">
                            Longtail
                        </span>
                    </div>
                    <div class="new_table-wrapper-second-items-one">
                        <span class="new_ui-item-long new_ui-long-first new_ui-long-first-table">
                            Words
                        </span>

                        <span class="new_table-word">
                            Questions
                        </span>
                        <span class="new_table-word">
                            Longtail
                        </span>
                    </div>
                </div>
                <div class="new_table-wrapper-third">
                    <h4 class="new_table-wrapper-third-title">
                        Line
                    </h4>
                    <div class="new_table-item-wrapper">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="radio" id="color-10" name="color-10" value="indigo">
                            <label for="color-10"></label>
                            <p class="net_table-wrapper-third-item-text">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                </div>
                <div class="new_table-wrapper-fourth">
                    <div class="new_table-checkbox">
                        <input class="custom-radio-checkbox-two" type="radio" id="color-11" name="color-11" value="indigo">
                        <label for="color-11"></label>
                        <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-two">
                            Words
                        </p>
                        <a href="javascript:void(0)" class="new_table-wrapper-funnel"></a>
                    </div>
                    <div class="new_table-wrapper-solo-item new_table-wrapper-solo-item-two">
                        Clicks
                        <a href="javascript:void(0)" class="new_table-wrapper-funnel"></a>
                    </div>
                    <div class="new_table-wrapper-solo-item ">
                        Impressions
                        <a href="javascript:void(0)" class="new_table-wrapper-funnel"></a>
                    </div>
                    <div class="new_table-wrapper-solo-item new_table-wrapper-solo-item-four">
                        CTR
                        <a href="javascript:void(0)" class="new_table-wrapper-funnel"></a>
                    </div>
                    <div class="new_table-wrapper-solo-item">
                        Positions
                        <a href="javascript:void(0)" class="new_table-wrapper-funnel"></a>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <div class="section">
        <header class="header-edit" id="header-edit">
            <div class="new-header_btn">
                0/0
            </div>
        </header>
        <section class="new_edit" id="new_edit">
            <div class="new_edit-left">
                <h3 class="new_edit-left-title">
                    Abstract
                </h3>
                <p class="new_edit-left-text">
                    Gender stereotypes continue to exist and are transmitted through media, and through social,
                    educational
                    and recreational socialization, which promote gender prejudice and discrimination. This paper argues
                    that contemporary management culture does not critically engage with the social theories of gender
                    studies, which could help in developing gender-neutral affirmative action-oriented managerial
                    perspectives.
                    <br><br>
                    The paper outlines different aspects of gender stereotyping and their impact on women’s career
                    progressions from a managerial perspective, which engages with the critical theories of gender
                    studies.
                    The paper contributes to existing literature by identifying the antecedents of gender stereotypes
                    and
                    their impacts on the career progressions of women in management. It advances theoretical
                    understanding
                    of three clear conceptual shifts, that is, (a) Women in Management, (b) Women and Management and (c)
                    Gender and Management. The theoretical transition from Women in Management to Women and Management
                    led
                    to progressive conceptual shifts in management literature but gender stereotypes continue to exist
                    in
                    society.
                </p>
            </div>
            <div class="new_edit-right">
                <div class="new_edit-right-first">
                    Gscore
                </div>
                <a href="#" class="new_btn new_initial-btn new_initial-btn-edit-first" id="new-open-main-pp">
                    Add Keywords
                </a>
            </div>
        </section>

        <div class="new-overlay" id="new-overlay">
            <div class="new_edit-popup">
                <h3>Keywords</h3>
                <div class="new_table-item">
                    <h4 class="new_table-item-title-first">
                        Date:
                    </h4>
                    <fieldset>
                        <details class="details_table details_table2">
                            <summary data-active-filter-month="3_month">
                                <span>3 months</span>
                                <span class="material-icons-round"></span>
                            </summary>
                            <div class="details_table_list">

                                <input type="radio" name="detail_choise" id="first-month" value="1_month"
                                    class="details-inp">
                                <label for="first-month" class="detail-label">7 days</label>

                                <input type="radio" name="detail_choise" id="second-month" value="2_month"
                                    class="details-inp">
                                <label for="second-month" class="detail-label">28 days</label>

                                <input type="radio" name="detail_choise" id="third-month" value="3_month"
                                    class="details-inp" checked>
                                <label for="third-month" class="detail-label">6 months</label>

                                <input type="radio" name="detail_choise" id="fourth-month" value="4_month"
                                    class="details-inp">
                                <label for="fourth-month" class="detail-label">12 months</label>

                                <input type="radio" name="detail_choise" id="fifth-month" value="5_month"
                                    class="details-inp">
                                <label for="fifth-month" class="detail-label">16 months</label>

                            </div>
                        </details>
                    </fieldset>
                    <span class="new_table-word new-edit-pp-word" id="edit-pp-quest" data-tab="1">
                        Questions
                    </span>
                    <span class="new_table-word new-edit-pp-word" id="edit-pp-long" data-tab="2">
                        Longtail
                    </span>
                    <span class="new_table-word new-edit-pp-word active" data-tab="3">
                        Word
                    </span>
                    <a href="#" class="new_ui-small-plus new_ui-small-plus-table" id="new_ui-small-plus-table"></a>
                    <input type="text" class="new-input-small new-input-small_initial">
                    <span class="new_table-sim">
                        <div class="new_ui-message">
                            Enter the minimum number of words for the longtail query, e.g. 5.
                        </div>
                    </span>
                    <div class="new_table-pag-wrapper">
                        <span class="new_table-pag-first">1-100</span>
                        <span class="new_table-pag-seocnd">of 203</span>
                        <a href="javascript:void(0)" class="new_icon new_icon-initial new_icon-initial-table">

                        </a>
                        <a href="javascript:void(0)"
                            class="new_icon new_icon-initial new_icon-initial-table new_icon-initial-table-second">

                        </a>
                    </div>
                </div>
                <div class="new_ui-small-window new_ui-small-window-edit-pp" id="new_ui-small-window-edit-pp">
                    <div class="new_ui-small-item" id="edit-pp-quest-btn">
                        <a href="#" class="new_ui-small-item-text">
                            Question
                        </a>
                        <a href="#" class="new_ui-small-plus"></a>
                    </div>
                    <div class="new_ui-small-item new_ui-small-item-two" id="edit-pp-long-btn">
                        <a href="#" class="new_ui-small-item-text new_ui-small-item-text-two">
                            Longtail
                        </a>
                        <a href="#" class="new_ui-small-plus"></a>
                    </div>
                </div>
                <!-- <table>
                    <thead>
                        <tr>
                            <th></th>
                        </tr>
                    </thead>
                </table> -->
                <div class="new_table-wrapper-fourth new_table-wrapper-fourth-edit-popup">
                    <div class="new_table-checkbox">
                        <input class="custom-radio-checkbox-two custom-radio-checkbox-two2" type="checkbox" id="color-11" name="color-11"
                            value="indigo">
                        <label for="color-11"></label>
                        <div class="new_table-wrapper-solo-item-inner">
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-two">
                                Words
                            </p>
                            <a href="javascript:void(0);" class="new_table-wrapper-funnel"></a>
                        </div>
                        <div class="new_dropdown-sort-wrapper _hidden-filter">
                            <span class="new_dropdown-sort-item">
                                Sort A &gt; Z
                            </span>
                            <span class="new_dropdown-sort-item">
                                Sort Z &gt; A
                            </span>
                            <span class="new_filter-drop">
                                Filter by condition
                            </span>
                            <fieldset class="field-last field-block">
                                <details>
                                    <summary>Text does not contain<span class="material-icons-round"></span></summary>
                                    <div>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio" checked="">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                    </div>

                                </details>
                            </fieldset>
                            <input type="text" class="new-input new-input_initital new_initial-block">
                            <a href="#" class="new_btn new_initial-btn new_initial-btn-block">
                                ok
                            </a>
                        </div>
                    </div>
                    <div
                        class="new_table-wrapper-solo-item new_table-wrapper-solo-item-two new_table-wrapper-solo-item-two-edit-popup">
                        <div class="new_table-wrapper-solo-item-inner">
                            Clicks
                            <a href="javascript:void(0);" class="new_table-wrapper-funnel"></a>
                        </div>
                        <div class="new_dropdown-sort-wrapper _hidden-filter">
                            <span class="new_dropdown-sort-item">
                                Sort A &gt; Z
                            </span>
                            <span class="new_dropdown-sort-item">
                                Sort Z &gt; A
                            </span>
                            <span class="new_filter-drop">
                                Filter by condition
                            </span>
                            <fieldset class="field-last field-block">
                                <details>
                                    <summary>Text does not contain<span class="material-icons-round"></span></summary>
                                    <div>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio" checked="">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                    </div>

                                </details>
                            </fieldset>
                            <input type="text" class="new-input new-input_initital new_initial-block">
                            <a href="#" class="new_btn new_initial-btn new_initial-btn-block">
                                ok
                            </a>
                        </div>
                    </div>
                    <div class="new_table-wrapper-solo-item ">
                        <div class="new_table-wrapper-solo-item-inner">
                            Impressions
                            <a href="javascript:void(0);" class="new_table-wrapper-funnel"></a>
                        </div>
                        <div class="new_dropdown-sort-wrapper _hidden-filter">
                            <span class="new_dropdown-sort-item">
                                Sort A &gt; Z
                            </span>
                            <span class="new_dropdown-sort-item">
                                Sort Z &gt; A
                            </span>
                            <span class="new_filter-drop">
                                Filter by condition
                            </span>
                            <fieldset class="field-last field-block">
                                <details>
                                    <summary>Text does not contain<span class="material-icons-round"></span></summary>
                                    <div>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio" checked="">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                    </div>

                                </details>
                            </fieldset>
                            <input type="text" class="new-input new-input_initital new_initial-block">
                            <a href="#" class="new_btn new_initial-btn new_initial-btn-block">
                                ok
                            </a>
                        </div>
                    </div>
                    <div
                        class="new_table-wrapper-solo-item new_table-wrapper-solo-item-four new_table-wrapper-solo-item-four-edit-popup">
                        <div class="new_table-wrapper-solo-item-inner">
                            CTR
                            <a href="javascript:void(0);" class="new_table-wrapper-funnel"></a>
                        </div>
                        <div class="new_dropdown-sort-wrapper _hidden-filter right">
                            <span class="new_dropdown-sort-item">
                                Sort A &gt; Z
                            </span>
                            <span class="new_dropdown-sort-item">
                                Sort Z &gt; A
                            </span>
                            <span class="new_filter-drop">
                                Filter by condition
                            </span>
                            <fieldset class="field-last field-block">
                                <details>
                                    <summary>Text does not contain<span class="material-icons-round"></span></summary>
                                    <div>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio" checked="">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                    </div>

                                </details>
                            </fieldset>
                            <input type="text" class="new-input new-input_initital new_initial-block">
                            <a href="#" class="new_btn new_initial-btn new_initial-btn-block">
                                ok
                            </a>
                        </div>
                    </div>
                    <div class="new_table-wrapper-solo-item">
                        <div class="new_table-wrapper-solo-item-inner">
                            Positions
                            <a href="javascript:void(0);" class="new_table-wrapper-funnel"></a>
                        </div>
                        <div class="new_dropdown-sort-wrapper _hidden-filter right">
                            <span class="new_dropdown-sort-item">
                                Sort A &gt; Z
                            </span>
                            <span class="new_dropdown-sort-item">
                                Sort Z &gt; A
                            </span>
                            <span class="new_filter-drop">
                                Filter by condition
                            </span>
                            <fieldset class="field-last field-block">
                                <details>
                                    <summary>Text does not contain<span class="material-icons-round"></span></summary>
                                    <div>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio" checked="">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                        <label>
                                            <input type="radio" name="radio">
                                            <span>Greater than</span>
                                        </label>
                                    </div>

                                </details>
                            </fieldset>
                            <input type="text" class="new-input new-input_initital new_initial-block">
                            <a href="#" class="new_btn new_initial-btn new_initial-btn-block">
                                ok
                            </a>
                        </div>
                    </div>
                </div>
                <div class="new_table-item-wrapper-edit-pp-main">
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-96" name="color-96"
                                value="indigo">
                            <label for="color-96"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-97" name="color-97"
                                value="indigo">
                            <label for="color-97"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-98" name="color-98"
                                value="indigo">
                            <label for="color-98"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-99" name="color-99"
                                value="indigo">
                            <label for="color-99"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-100" name="color-100"
                                value="indigo">
                            <label for="color-100"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-101" name="color-101"
                                value="indigo">
                            <label for="color-101"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-102" name="color-102"
                                value="indigo">
                            <label for="color-102"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-103" name="color-103"
                                value="indigo">
                            <label for="color-103"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-104" name="color-104"
                                value="indigo">
                            <label for="color-104"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-105" name="color-105"
                                value="indigo">
                            <label for="color-105"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-106" name="color-106"
                                value="indigo">
                            <label for="color-106"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-107" name="color-107"
                                value="indigo">
                            <label for="color-107"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-108" name="color-108"
                                value="indigo">
                            <label for="color-108"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-109" name="color-109"
                                value="indigo">
                            <label for="color-109"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-110" name="color-110"
                                value="indigo">
                            <label for="color-110"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-111" name="color-111"
                                value="indigo">
                            <label for="color-111"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-112" name="color-112"
                                value="indigo">
                            <label for="color-112"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-113" name="color-113"
                                value="indigo">
                            <label for="color-113"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-114" name="color-114"
                                value="indigo">
                            <label for="color-114"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-115" name="color-115"
                                value="indigo">
                            <label for="color-115"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-116" name="color-116"
                                value="indigo">
                            <label for="color-116"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-117" name="color-117"
                                value="indigo">
                            <label for="color-117"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-118" name="color-118"
                                value="indigo">
                            <label for="color-118"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-119" name="color-119"
                                value="indigo">
                            <label for="color-119"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-120" name="color-120"
                                value="indigo">
                            <label for="color-120"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-121" name="color-121"
                                value="indigo">
                            <label for="color-121"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-122" name="color-122"
                                value="indigo">
                            <label for="color-122"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                    <div class="new_table-item-wrapper new_table-item-wrapper-edit-popup">
                        <div class="new_table-checkbox">
                            <input class="custom-radio-checkbox" type="checkbox" id="color-123" name="color-123"
                                value="indigo">
                            <label for="color-123"></label>
                            <p class="net_table-wrapper-third-item-text net_table-wrapper-third-item-text-edit-popup">
                                Amet minim mollit deserunt
                            </p>
                        </div>

                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                        <div>
                            1000
                        </div>
                    </div>
                </div>
                <div class="new_edit-popup-footer">
                    <div class="new_table-item new_table-item-footer-edit-pp">
                        <h4 class="new_table-item-title-first new_table-item-title-first-edit-pp-footer">
                            Select:
                        </h4>
                        <span class="new_table-word new_table-word-edit-pp" data-tab="1">
                            All
                        </span>
                        <span class="new_table-word new_table-word-edit-pp" data-tab="2">
                            Top 40
                        </span>
                        <span class="new_table-word new_table-word-edit-pp" data-tab="3">
                            Top 20
                        </span>
                        <span class="new_ui-item-long new_ui-long-first-table new_table-word-edit-pp active"
                            data-tab="4">
                            Top 10
                        </span>
                    </div>
                    <a href="#" class="new_btn new_initial-btn new_btn new_initial-btn-edit-pp-footer"
                        id="overlay-close-pp">
                        Add
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <header class="header-edit" id="header-edit">
            <div class="new-header_btn new-header_btn-edit-4">
                20/100
            </div>
        </header>
        <section class="new_edit" id="new_edit">
            <div class="new_edit-left">
                <h3 class="new_edit-left-title">
                    Abstract
                </h3>
                <p class="new_edit-left-text">
                    Gender stereotypes continue to exist and are transmitted through media, and through social,
                    educational
                    and recreational socialization, which promote gender prejudice and discrimination. This paper argues
                    that contemporary management culture does not critically engage with the social theories of gender
                    studies, which could help in developing gender-neutral affirmative action-oriented managerial
                    perspectives.
                    <br><br>
                    The paper outlines different aspects of gender stereotyping and their impact on women’s career
                    progressions from a managerial perspective, which engages with the critical theories of gender
                    studies.
                    The paper contributes to existing literature by identifying the antecedents of gender stereotypes
                    and
                    their impacts on the career progressions of women in management. It advances theoretical
                    understanding
                    of three clear conceptual shifts, that is, (a) Women in Management, (b) Women and Management and (c)
                    Gender and Management. The theoretical transition from Women in Management to Women and Management
                    led
                    to progressive conceptual shifts in management literature but gender stereotypes continue to exist
                    in
                    society.
                </p>
            </div>
            <div class="new_edit-right">
                <div class="new_edit-right-first">
                    <div class="new_edit-right-first-texts">
                        Gscore
                        <span>12.05.2021</span>
                    </div>
                    <div class="new_edit-rightl-first-icons">
                        <a href="javascript:void(0)" class="new_edit-right-first-icon-arrows"></a>
                        <a href="javascript:void(0)" class="new_edit-right-first-icon-funnel-black"></a>
                    </div>
                </div>
                <div class="new_ui-fi-item-one new_ui-fi-item-one-right-edit-block">
                    <span class="new_ui-fi-some-item-one new_ui-fi-some-item-one-edit-right-block">
                        Missing Keywords
                    </span>
                    <span class="new_ui-fi-some-item-two">
                        Included Keywords
                    </span>
                </div>
                <div class="tabs">
                    <div class="tabsInner active">
                        <div class="new_table-wrapper-second-items-one new_table-wrapper-second-items-one-edit-right">
                            <span class="new_ui-item-long new_ui-long-first new_ui-long-first-table">
                                Words
                            </span>

                            <span class="new_table-word">
                                Questions
                            </span>
                            <span class="new_table-word">
                                Longtail
                            </span>
                        </div>
                        <div class="new_ui-fourth-item-one new_ui-fourth-item-one-edit-right-block">
                            <a href="#" class="new_ui-f-x"></a>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div class="new_ui-fourth-item-one new_ui-fourth-item-one-edit-right-block">
                            <a href="#" class="new_ui-f-x"></a>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div class="new_ui-fourth-item-one new_ui-fourth-item-one-edit-right-block">
                            <a href="#" class="new_ui-f-x"></a>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div class="new_ui-fourth-item-one new_ui-fourth-item-one-edit-right-block">
                            <a href="#" class="new_ui-f-x"></a>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div class="new_ui-fourth-item-one new_ui-fourth-item-one-edit-right-block">
                            <a href="#" class="new_ui-f-x"></a>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div class="new_ui-fourth-item-one new_ui-fourth-item-one-edit-right-block">
                            <a href="#" class="new_ui-f-x"></a>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div class="new_ui-fourth-item-one new_ui-fourth-item-one-edit-right-block">
                            <a href="#" class="new_ui-f-x"></a>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div class="new_ui-fourth-item-one new_ui-fourth-item-one-edit-right-block">
                            <a href="#" class="new_ui-f-x"></a>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div class="new_ui-fourth-item-one new_ui-fourth-item-one-edit-right-block">
                            <a href="#" class="new_ui-f-x"></a>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div class="new_ui-fourth-item-one new_ui-fourth-item-one-edit-right-block">
                            <a href="#" class="new_ui-f-x"></a>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div class="new_ui-fourth-item-one new_ui-fourth-item-one-edit-right-block">
                            <a href="#" class="new_ui-f-x"></a>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div class="new_ui-fourth-item-one new_ui-fourth-item-one-edit-right-block">
                            <a href="#" class="new_ui-f-x"></a>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div class="new_ui-fourth-item-one new_ui-fourth-item-one-edit-right-block">
                            <a href="#" class="new_ui-f-x"></a>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div class="new_ui-fourth-item-one new_ui-fourth-item-one-edit-right-block">
                            <a href="#" class="new_ui-f-x"></a>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div class="new_ui-fourth-item-one new_ui-fourth-item-one-edit-right-block">
                            <a href="#" class="new_ui-f-x"></a>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div class="new_ui-fourth-item-one new_ui-fourth-item-one-edit-right-block">
                            <a href="#" class="new_ui-f-x"></a>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div class="new_ui-fourth-item-one new_ui-fourth-item-one-edit-right-block">
                            <a href="#" class="new_ui-f-x"></a>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                    </div>
                    <div class="tabsInner">
                        <div class="new_table-wrapper-second-items-one new_table-wrapper-second-items-one-edit-right">
                            <span class="new_ui-item-long new_ui-long-first new_ui-long-first-table">
                                Words
                            </span>

                            <span class="new_table-word">
                                Questions
                            </span>
                            <span class="new_table-word">
                                Longtail
                            </span>
                        </div>
                        <div
                            class="new_ui-fourth-item-one new_ui-fourth-item-two new_ui-fourth-item-two-edit-right-block">
                            <span class="new_ui-f-number">
                                4
                            </span>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div
                            class="new_ui-fourth-item-one new_ui-fourth-item-two new_ui-fourth-item-two-edit-right-block">
                            <span class="new_ui-f-number">
                                4
                            </span>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div
                            class="new_ui-fourth-item-one new_ui-fourth-item-two new_ui-fourth-item-two-edit-right-block">
                            <span class="new_ui-f-number">
                                4
                            </span>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div
                            class="new_ui-fourth-item-one new_ui-fourth-item-two new_ui-fourth-item-two-edit-right-block">
                            <span class="new_ui-f-number">
                                4
                            </span>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div
                            class="new_ui-fourth-item-one new_ui-fourth-item-two new_ui-fourth-item-two-edit-right-block">
                            <span class="new_ui-f-number">
                                4
                            </span>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div
                            class="new_ui-fourth-item-one new_ui-fourth-item-two new_ui-fourth-item-two-edit-right-block">
                            <span class="new_ui-f-number">
                                4
                            </span>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div
                            class="new_ui-fourth-item-one new_ui-fourth-item-two new_ui-fourth-item-two-edit-right-block">
                            <span class="new_ui-f-number">
                                4
                            </span>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div
                            class="new_ui-fourth-item-one new_ui-fourth-item-two new_ui-fourth-item-two-edit-right-block">
                            <span class="new_ui-f-number">
                                4
                            </span>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div
                            class="new_ui-fourth-item-one new_ui-fourth-item-two new_ui-fourth-item-two-edit-right-block">
                            <span class="new_ui-f-number">
                                4
                            </span>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div
                            class="new_ui-fourth-item-one new_ui-fourth-item-two new_ui-fourth-item-two-edit-right-block">
                            <span class="new_ui-f-number">
                                4
                            </span>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div
                            class="new_ui-fourth-item-one new_ui-fourth-item-two new_ui-fourth-item-two-edit-right-block">
                            <span class="new_ui-f-number">
                                4
                            </span>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div
                            class="new_ui-fourth-item-one new_ui-fourth-item-two new_ui-fourth-item-two-edit-right-block">
                            <span class="new_ui-f-number">
                                4
                            </span>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div
                            class="new_ui-fourth-item-one new_ui-fourth-item-two new_ui-fourth-item-two-edit-right-block">
                            <span class="new_ui-f-number">
                                4
                            </span>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div
                            class="new_ui-fourth-item-one new_ui-fourth-item-two new_ui-fourth-item-two-edit-right-block">
                            <span class="new_ui-f-number">
                                4
                            </span>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div
                            class="new_ui-fourth-item-one new_ui-fourth-item-two new_ui-fourth-item-two-edit-right-block">
                            <span class="new_ui-f-number">
                                4
                            </span>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div
                            class="new_ui-fourth-item-one new_ui-fourth-item-two new_ui-fourth-item-two-edit-right-block">
                            <span class="new_ui-f-number">
                                4
                            </span>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                        <div
                            class="new_ui-fourth-item-one new_ui-fourth-item-two new_ui-fourth-item-two-edit-right-block">
                            <span class="new_ui-f-number">
                                4
                            </span>
                            <p class="new_ui-f-text">
                                Вeveloping gender-neutral
                            </p>
                            <a href="javascript:void(0)" class="new_ui-f-copy"></a>
                        </div>
                    </div>
                </div>



            </div>
        </section>
    </div>
    <div class="section">
        <section class="new_feedback" id="new_feedback">
            <div class="container-feedback">
                <div class="new_feedback-top-bar">
                    <img src="img-ui-kit/g-logo.svg" alt="">
                    <div class="new_feedback-top-texts">
                        <h4 class="new_feedback-top-title">
                            Gscore
                        </h4>
                        <p class="new_feedback-top-text">
                            Gscore is super convenient plugin for the ones who really want to improve their SEO
                            rankings, make their content even better and more watched
                        </p>
                    </div>
                </div>
                <div class="new_feedback-main-item">
                    <div class="new_feedback-main-item-left">
                        <h2 class="new_feedback-main-title">
                            Google Search Console Sign In
                        </h2>
                        <p class="new_feedback-main-text">
                            Hello and thanks for trying Gscore! <br>
                            To begin, you'll need to sign in with your Google Search Console account. To get started,
                            click "Sign In.
                        </p>
                        <a href="#" class="new_btn new_initial-btn new_initial-btn-feedback-first">
                            Sign In
                        </a>
                    </div>
                    <div class="new_feedback-main-item-right">
                        <h2 class="new_feedback-step-title">
                            Step 1
                        </h2>
                    </div>
                </div>
                <div class="new_feedback-main-item new_feedback-main-item-opacity">
                    <div class="new_feedback-main-item-left">
                        <h2 class="new_feedback-main-title">
                            Subscription
                        </h2>
                        <p class="new_feedback-main-text new_feedback-main-text-two">
                            Enter your licence code to active Gscore
                        </p>
                        <div class="new_feedback-input-btn-wrapper">
                            <input type="text" class="new-input new-input_initital new-input_initital-feedback">
                            <a href="#" class="new_btn new_initial-btn new_initial-btn-feedback-first">
                                Activate
                            </a>
                        </div>
                        <p class="new_feedback-main-text new_feedback-main-text-two">
                            EIf you do not have a licence code, you can purchase one at <a
                                href="gscore.io">gscore.io</a>
                        </p>
                    </div>
                    <div class="new_feedback-main-item-right">
                        <h2 class="new_feedback-step-title">
                            Step 2
                        </h2>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="section">
        <section class="new_feedback" id="new_feedback">
            <div class="container-feedback">
                <div class="new_feedback-top-bar">
                    <img src="img-ui-kit/g-logo.svg" alt="">
                    <div class="new_feedback-top-texts">
                        <h4 class="new_feedback-top-title">
                            Gscore
                        </h4>
                        <p class="new_feedback-top-text">
                            Gscore is super convenient plugin for the ones who really want to improve their SEO
                            rankings, make their content even better and more watched
                        </p>
                    </div>
                </div>
                <div class="new_feedback-main-item">
                    <div class="new_feedback-main-item-left">
                        <h2 class="new_feedback-main-title">
                            Google Search Console Sign In
                        </h2>
                        <p class="new_feedback-main-text">
                            Hello and thanks for trying Gscore! <br>
                            To begin, you'll need to sign in with your Google Search Console account. To get started,
                            click "Sign In.
                        </p>
                        <div class="new_feedback-input-btn-wrapper">
                            <input type="text" class="new-input new-input_disabled new-input_initital-feedback-disabled"
                                value="SeoNotebook@gmail.com" disabled>
                            <a href="#" class="new_btn new_initial-btn new_initial-btn-feedback-first">
                                Activate
                            </a>
                        </div>
                    </div>
                    <div class="new_feedback-main-item-right">
                        <h2 class="new_feedback-step-title">
                            Step 1
                        </h2>
                    </div>
                </div>
                <div class="new_feedback-main-item">
                    <div class="new_feedback-main-item-left">
                        <h2 class="new_feedback-main-title">
                            Subscription
                        </h2>
                        <p class="new_feedback-main-text new_feedback-main-text-two">
                            Enter your licence code to active Gscore
                        </p>
                        <div class="new_feedback-input-btn-wrapper">
                            <input type="text" class="new-input new-input_initital new-input_initital-feedback">
                            <a href="#" class="new_btn new_initial-btn new_initial-btn-feedback-first">
                                Activate
                            </a>
                        </div>
                        <p class="new_feedback-main-text new_feedback-main-text-two">
                            EIf you do not have a licence code, you can purchase one at <a
                                href="gscore.io">gscore.io</a>
                        </p>
                    </div>
                    <div class="new_feedback-main-item-right">
                        <h2 class="new_feedback-step-title">
                            Step 2
                        </h2>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="section">
        <section class="new_feedback" id="new_feedback">
            <div class="container-feedback">
                <div class="new_feedback-top-bar">
                    <img src="img-ui-kit/g-logo.svg" alt="">
                    <div class="new_feedback-top-texts">
                        <h4 class="new_feedback-top-title">
                            Gscore
                        </h4>
                        <p class="new_feedback-top-text">
                            Gscore is super convenient plugin for the ones who really want to improve their SEO
                            rankings, make their content even better and more watched
                        </p>
                    </div>
                </div>
                <div class="new_feedback-main-item">
                    <div class="new_feedback-main-item-left">
                        <h2 class="new_feedback-main-title">
                            Google Search Console Sign In
                        </h2>
                        <p class="new_feedback-main-text">
                            Hello and thanks for trying Gscore! <br>
                            To begin, you'll need to sign in with your Google Search Console account. To get started,
                            click "Sign In.
                        </p>
                        <div class="new_feedback-input-btn-wrapper">
                            <input type="text" class="new-input new-input_disabled new-input_initital-feedback-disabled"
                                value="SeoNotebook@gmail.com" disabled>
                            <a href="#" class="new_btn new_initial-btn new_initial-btn-feedback-first">
                                Log Out
                            </a>
                        </div>
                    </div>
                    <div class="new_feedback-main-item-right">
                        <h2 class="new_feedback-step-title">
                            Step 1
                        </h2>
                    </div>
                </div>
                <div class="new_feedback-main-item">
                    <div class="new_feedback-main-item-left">
                        <h2 class="new_feedback-main-title">
                            Subscription is activated
                        </h2>
                        <p class="new_feedback-main-text new_feedback-main-text-two">
                            Subscription expires: 12.05.2021
                        </p>
                        <div class="new_feedback-input-btn-wrapper">
                            <input type="text"
                                class="new-input new-input_disabled new-input_initital-feedback-disabled-two"
                                value="459- 504" disabled="">
                            <a href="#" class="new_btn new_initial-btn new_initial-btn-feedback-first">
                                Activate
                            </a>
                        </div>
                        <p class="new_feedback-main-text new_feedback-main-text-two">
                            EIf you do not have a licence code, you can purchase one at <a
                                href="gscore.io">gscore.io</a>
                        </p>
                    </div>
                    <div class="new_feedback-main-item-right">
                        <h2 class="new_feedback-step-title">
                            Step 2
                        </h2>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        let isVisible = true;
        let count = 0;
        const div = document.getElementById('new_ui-small-window-edit-pp');

        function trigger() {
        isVisible = !isVisible;
        div.style.display = isVisible ? "none" : "block";
        };

        document.querySelector('#new_ui-small-plus-table').addEventListener('click', trigger);


        let isVisibleTwo = true;
        const span = document.getElementById('edit-pp-quest');
        const spanTwo = document.getElementById('edit-pp-quest-btn');

        function triggerTwo() {
        // isVisibleTwo = !isVisibleTwo;
        span.style.display = "block";
        spanTwo.style.display = "none";
        count++;
        if(count == 2){
            $('#new_ui-small-plus-table').addClass('hidden');
            $('.new-input-small').addClass('lefter');
        }
        };

        document
        .getElementById('edit-pp-quest-btn')
        .addEventListener('click', triggerTwo);



        let isVisibleThree = true;
        const spanFirst = document.getElementById('edit-pp-long');
        const spanThree = document.getElementById('edit-pp-long-btn');

        function triggerThree() {
        // isVisibleTwo = !isVisibleTwo;
        spanFirst.style.display = "block";
        spanThree.style.display = "none";
        count++;
        if(count == 2){
            $('#new_ui-small-plus-table').addClass('hidden');
            $('.new-input-small').addClass('lefter');
        }
        };

        document
        .getElementById('edit-pp-long-btn')
        .addEventListener('click', triggerThree);

        $('.new_table-word-edit-pp').click(function () {
        var id = $(this).attr('data-tab'),
            content = $('.js-tab-content[data-tab="' + id + '"]');

        $('.new_table-word-edit-pp.active').removeClass('active');
        $(this).addClass('active');
        });

        $('.new-edit-pp-word').click(function() {
        var id = $(this).attr('data-tab'),
            content = $('.js-tab-content[data-tab="'+ id +'"]');
        
        $('.new-edit-pp-word.active').removeClass('active');
        $(this).addClass('active');
        });    

        let isVisiblelele = false;
        const divec = document.getElementById('new-overlay');

        function triggerere() {
        isVisiblelele = !isVisiblelele;
        divec.style.display = isVisiblelele = "block";
        };

        document
        .getElementById('new-open-main-pp')
        .addEventListener('click', triggerere);

        $(document).ready(function(){
        $('.new_table-wrapper-solo-item-inner').click(function(){
            $('.new_table-wrapper-solo-item-inner').not($(this)).removeClass('opened');
            $(this).toggleClass('opened');
        });
        });

        const detailBlock = document.querySelector(".details_table2");
        const labels = document.querySelectorAll(".detail-label");
        const mainFilter = detailBlock.querySelector(".details_table2 summary");

        for(const elem of labels){
            elem.addEventListener('click',()=>{
                const filter_id = elem.getAttribute("for");
                const filter_value = detailBlock.querySelector(`input[id = '${filter_id}']`).value;

                mainFilter.dataset.activeFilterMonth = filter_value;
                mainFilter.querySelector("span").textContent = elem.textContent
                detailBlock.removeAttribute("open");
            })
        }


        const mainInp = document.querySelector("#color-11");
        const allPositions = document.querySelectorAll(".new_table-item-wrapper-edit-pp-main .custom-radio-checkbox");

        const background = document.querySelector(".new-overlay")

        const popupFilters = document.querySelectorAll("#new_ui-small-window-edit-pp .new_ui-small-item");
        const plusBtn = document.getElementById('new_ui-small-plus-table');



        mainInp.addEventListener("click",function(){
            mainInp.classList.toggle('_check')
            if(mainInp.classList.contains('_check')){
                for(const position of allPositions) position.checked = true;
            }else{
                for(const position of allPositions) position.checked = false;
            }
        })  


        background.addEventListener("click",(e)=>{
            if(e.target.classList[0] == "new-overlay") background.style.display = "none"; 
            if(e.target.id == "overlay-close-pp") background.style.display = "none";
        })

        popupFilters.__proto__.map = Array.prototype.map;
        popupFilters.__proto__.filter = Array.prototype.filter;

        for(const filter of popupFilters){
            filter.addEventListener("click",()=>{
                let filteredArr = popupFilters.map((elem)=>{ return getDisplay(elem)})
                let result = filteredArr.filter((elem)=>elem=="none");

                if(result.length == popupFilters.length){
                    const blockFilters = document.querySelector("#new_ui-small-window-edit-pp");
                    blockFilters.style.display = "none";
                    plusBtn.removeEventListener("click",trigger)
                } 
            })
        }

        function getDisplay(elem){
            return window.getComputedStyle(elem)["display"];
        }

        $(document).ready(function(){
            $('.new_table-wrapper-second-items-one span').click(function(){
                $(this).parent().find('span').removeClass('new_ui-item-long new_ui-long-first new_ui-long-first-table');
                $(this).parent().find('span').addClass('new_table-word');
                $(this).removeClass('new_table-word');
                $(this).addClass('new_ui-item-long new_ui-long-first new_ui-long-first-table');
            });


            $('.new_ui-fi-item-one-right-edit-block span').click(function(){
                $(this).parent().find('span').removeClass('new_ui-fi-some-item-one');
                $(this).parent().find('span').addClass('new_ui-fi-some-item-two');

                $(this).removeClass('new_ui-fi-some-item-two');
                $(this).addClass('new_ui-fi-some-item-one');


                var index = $(this).index();
                $(this).parent().next('.tabs').find('.tabsInner').removeClass('active');
                $(this).parent().next('.tabs').find('.tabsInner:eq('+index+')').addClass('active');
            });

            $('.new_ui-f-copy').click(function(e){
            e.preventDefault();
            let input = document.createElement("input");
            input.classList.add('input-copy')
                let text = document.body.appendChild(input);
                text.value = $(this).prev().html();
                text.focus();
                text.select();
                document.execCommand('copy');
                text.parentNode.removeChild(text);
                return false;
            });
        });   

        hiddenFilterByCondition()
        function hiddenFilterByCondition() {
            const headerElems = document.querySelectorAll('.new_filter-drop')

            for (let i = 0; i < headerElems.length; i++) {
                const header = headerElems[i];
                header.addEventListener('click', (e) => {
                    const parent = header.parentElement

                    parent.classList.toggle('_hidden-filter')
                })
            }
        }

        modalSelectList()
        function modalSelectList() {
            const headerElems = document.querySelectorAll('.field-block summary')
            for (let i = 0; i < headerElems.length; i++) {
                const header = headerElems[i];
                
                const list = header.nextElementSibling
                const itemElems = list.querySelectorAll('label')
                for (let i = 0; i < itemElems.length; i++) {
                    const item = itemElems[i];
                    item.addEventListener('click', (e) => {
                        header.innerHTML = item.querySelector('span').innerText + '<span class="material-icons-round"></span>'
                        
                        const parent = header.parentElement
                        parent.removeAttribute('open')
                    })
                }
            }
        }
    </script>
</div>