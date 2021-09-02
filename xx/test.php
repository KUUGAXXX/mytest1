<?php
// 删除缓存
use App\Constants\User\UserPointEnum;
use Hyperf\Cache\Listener\DeleteListenerEvent;

$this->dispatcher->dispatch(new DeleteListenerEvent("ky_user_point", ['uid' => $uid]));
foreach (UserPointEnum::USER_POINT_LABEL_MAPPING as $labelItem => $labelText) {
    $this->dispatcher->dispatch(new DeleteListenerEvent("ky_user_point", ['uid' => $uid, 'label' => $labelItem]));
}