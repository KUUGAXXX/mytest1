<?php
$this->dispatcher->dispatch(new DeleteListenerEvent("ky_user_point", ['uid' => $uid]));
foreach (UserPointEnum::USER_POINT_LABEL_MAPPING as $labelItem => $labelText) {
    $this->dispatcher->dispatch(new DeleteListenerEvent("ky_user_point", ['uid' => $uid, 'label' => $labelItem]));
}