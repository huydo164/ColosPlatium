<?php

namespace App\Modules\Statics\Controllers;

use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\FuncLib;
use App\Library\PHPDev\Loader;
use App\Library\PHPDev\Pagging;
use App\Library\PHPDev\Utility;
use App\Library\PHPDev\ValidForm;
use App\Modules\Admin\Controllers\BaseAdminController;
use App\Modules\Models\Banner;
use App\Modules\Models\Category;
use App\Modules\Models\Contact;
use App\Modules\Models\Info;
use App\Modules\Models\Statics;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

class StaticsController extends BaseStaticsController {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        Loader::loadJS('libs/owl.carousel/owl.carousel.min.js', CGlobal::$postEnd);
        Loader::loadCSS('libs/owl.carousel/owl.carousel.min.css', CGlobal::$postHead);

        $text_1 = self::viewShareVal('TEXT_1');

        $searchBannerContent['banner_status'] = CGlobal::status_show;
        $searchBannerContent['banner_type'] = 1;
        $dataBannerContent = Banner::getBannerSite($searchBannerContent, $limit = 1, 'content');
        $dataBannerContent  =FuncLib::checkBannerShow($dataBannerContent);

        $cat_1 = (int)strip_tags(self::viewShareVal('CAT_ID_1'));
        $data_cat_1 = [];
        if($cat_1 > 0){
            $data_search_1['statics_catid'] = $cat_1;
            $data_search_1['statics_order_no'] = 'asc';
            $data_cat_1 = Statics::getFocus($data_search_1, $limit=3);
        }

        $text_2 = self::viewShareVal('TEXT_2');
        $text_3 = self::viewShareVal('TEXT_3');
        $text_4  = self::viewShareVal('TEXT_4');
        $text_5 = self::viewShareVal('TEXT_5');

        $cat_2 = (int)strip_tags(self::viewShareVal('CAT_ID_2'));
        $data_cat_2 = [];
        if ($cat_2 > 0){
            $data_search_2['statics_catid'] = $cat_2;
            $data_search_2['statics_order_no'] = 'asc';
            $data_cat_2 = Statics::getFocus($data_search_2, $limit = 2);
        }

        $text_6 = self::viewShareVal('TEXT_6');
        $text_7 = self::viewShareVal('TEXT_7');
        $text_8 = self::viewShareVal('TEXT_8');
        $text_9 = self::viewShareVal('TEXT_10');
        $text_10 = self::viewShareVal('TEXT_11');
        $text_11 = self::viewShareVal('TEXT_12');
        $text_12 = self::viewShareVal('TEXT_13');
        $text_13 = self::viewShareVal('TEXT_14');
        $text_14 = self::viewShareVal('TEXT_15');
        $text_15 = self::viewShareVal('TEXT_16');

        $cat_3 = (int)strip_tags(self::viewShareVal('CAT_ID_3'));
        $data_cat_3 = [];
        if ($cat_3 > 0 ){
            $data_search_3['statics_catid'] = $cat_3;
            $data_search_3['statics_order_no'] = 'asc';
            $data_cat_3 = Statics::getFocus($data_search_3, $limit = 2);
        }

        $cat_4 = (int)strip_tags(self::viewShareVal('CAT_ID_4'));
        $data_cat_4 = [];
        if ($cat_4 > 0){
            $data_search_4['statics_catid'] = $cat_4;
            $data_search_4['statics_order_no'] = 'asc';
            $data_cat_4 = Statics::getFocus($data_search_4, $limit = 4);
        }

        $cat_5 = (int)strip_tags(self::viewShareVal('CAT_ID_5'));
        $data_cat_5 = [];
        if ($cat_5 > 0){
            $data_search_5['statics_catid'] = $cat_5;
            $data_search_5['statics_order_no'] = 'asc';
            $data_cat_5 = Statics::getFocus($data_search_5, $limit = 5);
        }

        $cat_6 = (int)strip_tags(self::viewShareVal('CAT_ID_6'));
        $data_cat_6 = [];
        if ($cat_6 > 0){
            $data_search_6['statics_catid'] = $cat_6;
            $data_search_6['statics_order_no'] = 'asc';
            $data_cat_6 = Statics::getFocus($data_search_6, $limit = 4);
        }

        $cat_7 = (int)strip_tags(self::viewShareVal('CAT_ID_7'));
        $data_cat_7 = [];
        if ($cat_7 > 0){
            $data_search_7['statics_catid'] = $cat_7;
            $data_search_7['statics_order_no'] = 'asc';
            $data_cat_7 = Statics::getFocus($data_search_7, $limit = 1);
        }

        $searchBannerPaper['banner_status'] = CGlobal::status_show;
        $searchBannerPaper['banner_type'] = 2;
        $searchBannerPaper['field_get'] = 'banner_id,banner_title,banner_title_show,banner_image,banner_link,banner_is_target,banner_is_rel,banner_is_run_time,banner_start_time,banner_end_time';
        $dataPaper = Banner::getBannerSite($searchBannerPaper, $limit = 50, 'paper');
        $dataPaper = FuncLib::checkBannerShow($dataPaper);

        $messages = Utility::messages('messages');

        return view('Statics::content.index',[
            'messages' => $messages,
            'text_1' => $text_1,
            'dataBannerContent' => $dataBannerContent,
            'data_cat_1' => $data_cat_1,
            'text_2' => $text_2,
            'text_3' => $text_3,
            'text_4' => $text_4,
            'text_5' => $text_5,
            'text_6' => $text_6,
            'text_7' => $text_7,
            'text_8' => $text_8,
            'text_9' => $text_9,
            'text_10' => $text_10,
            'text_11' => $text_11,
            'text_12' => $text_12,
            'text_13' => $text_13,
            'text_14' => $text_14,
            'text_15' => $text_15,
            'data_cat_2' => $data_cat_2,
            'data_cat_3' => $data_cat_3,
            'data_cat_4' => $data_cat_4,
            'data_cat_5' => $data_cat_5,
            'data_cat_6' => $data_cat_6,
            'data_cat_7' => $data_cat_7,
            'dataPaper' => $dataPaper,
        ]);
    }

    public function pageContactPost(){
        if (!empty($_POST)){
            $contact_name = addslashes(Request::get('contact_name', ''));
            $contact_phone = addslashes(Request::get('contact_phone', ''));
            $contact_local = addslashes(Request::get('contact_local', ''));
            $contact_created = time();

            if ($contact_name != '' && $contact_phone != '' && $contact_local != ''){
                $dataInput = array(
                    'contact_name' => $contact_name,
                    'contact_phone' => $contact_phone,
                    'contact_local' => $contact_local,
                    'contact_created' => $contact_created,
                    'contact_status' => 1
                );
                $query = Contact::addData($dataInput);
                if ($query > 0){
                    Utility::messages('messages', 'Cảm ơn bạn đã đăng ký. Chúng tôi sẽ liên hệ sớm nhất!');
                    return Redirect::route('SIndex');
                }
            }
        }
        Utility::messages('messages', 'Thông tin liên hệ chưa đúng. Bạn hãy đăng ký lại!');
        return Redirect::route('SIndex');
    }
}
