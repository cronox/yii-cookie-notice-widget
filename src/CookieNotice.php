<?php

namespace Cronox\Yii\CookieWidget;

use Cronox\Yii\CookieWidget\assets\CookieNoticeAssets;
use Yii;
use yii\base\Widget;

class CookieNotice extends Widget
{

    public $noticeTitle = null;
    public $noticeText = null;
    public $noticeImageAlt = null;

    public $viewFile = 'cookie_notice';

    private $_cookieNoticeAssets = null;

    public function init()
    {
        parent::init();
        $this->noticeTitle = Yii::t('cookie-notice', 'Ciasteczka!');
        $this->noticeText = Yii::t(
            'cookie-notice',
            'Strona korzysta z plików cookies w celu realizacji usług i zgodnie z polityką plików cookies. 
            Możesz określić warunki przechowywania lub dostępu do plików cookies w Twojej przeglądarce.'
        );
        $this->noticeImageAlt = Yii::t('cookie-notice', 'Ciasteczko');

        $this->registerAssets();
    }

    public function run()
    {

        return $this->render(
            $this->viewFile,
            [
                'assets' => $this->_cookieNoticeAssets,
                'noticeTitle' => $this->noticeTitle,
                'noticeText' => $this->noticeText,
                'noticeImageAlt' => $this->noticeImageAlt,
            ]
        );

    }

    protected function registerAssets()
    {
        $view = $this->getView();
        $this->_cookieNoticeAssets = CookieNoticeAssets::register($view);
    }
}
