<?php
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\FuncLib;
use App\Library\PHPDev\ThumbImg;
?>
<div id="header">
    {!! isset($messages) && ($messages != '') ? $messages : '' !!}
    <div class="top">
        <div class="container">
            <div class="logo">
                <a href="{{FuncLib::getBaseUrl()}}">
                    <img src="{{FuncLib::getBaseUrl()}}assets/img/logo.png" alt="" title="">
                </a>
            </div>
            <div class="menu-top">
                <div class="navigation mNavigation">
                           <span class="navigationIcon">
                               <span></span>
                           </span>
                    <div class="backdropNav"></div>
                    <ul>
                        @if(isset($arrCategory) && !empty($arrCategory))
                            @foreach($arrCategory as $cat)
                                @if($cat->category_menu == CGlobal::status_show && $cat->category_parent_id == 0)
                                    <?php $i=0 ?>
                                    <li>
                                        <a @if($i > 0) @endif title="{{$cat->category_title}}" href="@if($cat->category_link_replace != ''){{$cat->category_link_replace}}@endif">
                                            {{$cat->category_title}}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="info-top">
        <div class="thumb-top">
            <div class="container">
                <div class="descrip-top">
                    Colos Platium chính là giải pháp hoàn hảo giúp mẹ đánh bay nỗi lo con biếng ăn chỉ từ 3 ngày sử dụng
                </div>
                <div class="gif">
                    <span>"Món quà quý"</span> cho sức khỏe con yêu
                </div>
                <div class="hot-line">
                    <div class="tv">
                        Tư vấn ngay
                    </div>
                    <div class="phone">{!! $textHotline !!}</div>
                </div>
            </div>
        </div>
    </div>
</div>