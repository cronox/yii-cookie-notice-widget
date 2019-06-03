<?php
/**
 * @var $assets \Cronox\Yii\CookieWidget\assets\CookieNoticeAssets
 */

?>
<div class="cookie-notice">
    <div class="container">
        <div class="row m-0 my-2">
            <div class="col-lg-2 col-sm-2 my-auto hidden-xs-down">
                <img class="cookie-notice--img"
                     src="<?= $assets->getFileUrl('/images/cookie.svg') ?>"
                     alt="<?= $noticeImageAlt ?>">
            </div>
            <div class="col-lg-8 col-sm-8 my-auto">
                <h3><?= $noticeTitle ?></h3>
                <?= $noticeText ?>
            </div>
            <div class="col-lg-2 col-sm-2 my-auto text-center">
                <a class="btn btn-danger cookie-notice--close" href="#">
                    <span class="hidden-sm-up">Zamknij&nbsp;</span><i class="fa fa-times m-0"></i>
                </a>
            </div>
        </div>
    </div>
</div>
