<?php
class GMSC_Translation
{

    public function __construct()
    {

    }

    public static function get_translation()
    {
        $translation_array = array(
            'open_tutorial' => __('開啟教學', GMSC_TEXT_DOMAIN),
            'input_ship_start_point_tutorial' => __('先輸入運送起始點', GMSC_TEXT_DOMAIN),
            'input_ship_end_point_tutorial' => __('再輸入運送目的地', GMSC_TEXT_DOMAIN),
            'ship_price_tutorial' => __('您此趟運送所需的費用', GMSC_TEXT_DOMAIN),
            'send_order_tutorial' => __('若有需求請填寫資料下訂', GMSC_TEXT_DOMAIN),
            'input_ship_start_point_placeholder' => __('輸入起始地點', GMSC_TEXT_DOMAIN),
            'input_ship_end_point_placeholder' => __('輸入結束地點', GMSC_TEXT_DOMAIN),
            'estimate_ship_price' => __('估計運送價格', GMSC_TEXT_DOMAIN),
            'start_point' => __('起始地點', GMSC_TEXT_DOMAIN),
            'end_point' => __('結束地點', GMSC_TEXT_DOMAIN),
            'ship_price' => __('費用', GMSC_TEXT_DOMAIN),
            'ship_order_name' => __('姓名', GMSC_TEXT_DOMAIN),
            'phone_num' => __('手機', GMSC_TEXT_DOMAIN),
            'send_order' => __('送出訂單', GMSC_TEXT_DOMAIN),
            'dollar' => __('元', GMSC_TEXT_DOMAIN),
            'current_position' => __('您目前的位置', GMSC_TEXT_DOMAIN),
            'name_and_phone_alert' => __('姓名及電話不可留空', GMSC_TEXT_DOMAIN),
            'choose_path_alert' => __('請先選擇路徑', GMSC_TEXT_DOMAIN),
            'error_msg' => __('處理失敗', GMSC_TEXT_DOMAIN),
            'success_msg' => __('處理成功', GMSC_TEXT_DOMAIN),
        );
        return $translation_array;
    }

}
