<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="ja">
<html>
<head>
    <title>from</title>
    <!-- noindex/nofollow -->
    <meta name="robots" content="noindex" />
    <meta name=”robots” content=”nofollow” />
    <!-- CSS -->
    <?php echo link_tag("/assets/style.css"); ?>
</head>
<body>
    <div class="inner">
        <?php echo validation_errors(); ?> 
        <form action="form" method="post">
            <h1>ユーザ登録</h1>
            <p class="attention">*は必須項目です</p>
            <ul class="table_nav">
                <li class="row"><span class="dan">mail <span class="attention">*</span></span><span class="dan2-r"><input type="text" id="email" name="email" value="" /></span></li>
                <li class="row"><span class="dan">名前 <span class="attention">*</span></span><span class="dan2-r"><input type="text" id="name" name="name" value="" /></span></li>
                <li class="row"><span class="dan">年齢 <span class="attention">*</span></span><span class="dan2-r">
                    <select id="age" name="age">
                        <option value="">--</option>
                        <option value="10">10代</option>
                        <option value="20">20代</option>
                        <option value="30">30代</option>
                        <option value="40">40代</option>
                        <option value="50">50代</option>
                        <option value="60">60以上</option>
                    </select>
                </span></li>
                <li class="row"><span class="dan">都道府県 <span class="attention">*</span></span><span class="dan2-r">
                    <select id="pref" name="pref">
                        <option value="">---</option>
                        <option value="08">東京都</option>
                        <option value="09">茨城県</option>
                        <option value="10">栃木県</option>
                        <option value="11">群馬県</option>
                        <option value="12">埼玉県</option>
                        <option value="13">千葉県</option>
                        <option value="14">神奈川県</option>
                    </select>
                </span></li>
                <li class="row"><span class="dan">その他</span><span class="dan2-r"><textarea id="etc" name="etc" value="" /></textarea></li>
            </ul>
            <button class="c-button" type="submit" value="submit">submit</button>
        </form>
    </div>
</body>
</html>