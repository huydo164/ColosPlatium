<?php
use App\Library\PHPDev\FuncLib;
use App\Library\PHPDev\CGlobal;
use App\Library\PHPDev\Utility;
use App\Library\PHPDev\ThumbImg;
?>
@extends('Statics::layout.html')
@section('header')
    @include('Statics::block.header')
@endsection
@section('content')
    <div id="content">
        <div class="home-1">
            <div class="container">
                <div class="title">
                    {!! (isset($text_1)) ? strip_tags($text_1) : '' !!}
                </div>
                <div class="info-1">
                    <div class="img-1 pull-left">
                        @if(isset($dataBannerContent) && !empty($dataBannerContent))
                            @foreach($dataBannerContent as $item)
                                <img src="{{ThumbImg::thumbBaseNormal(CGlobal::FOLDER_BANNER, $item['banner_id'], $item['banner_image'], 1600, 0, '', true, true, false)}}" alt="{{$item['banner_title_show']}}" />
                            @endforeach
                        @endif
                    </div>
                    <div class="descrip-1 pull-right">
                        @if(!empty($data_cat_1) && isset($data_cat_1))
                            @foreach($data_cat_1 as $key => $item)
                                <div class="d1">
                                    <i class="icon-1"></i>
                                    <span class="title-icon">{{ stripcslashes($item->statics_title) }}</span>
                                    <div class="t1">
                                        {{ stripcslashes($item->statics_intro) }}
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!---------home-1------------>

        <div class="home-2">
            <div class="container">
                <div class="title">{!! (isset($text_2)) ? strip_tags($text_2) : '' !!}</div>
                <div class="intro-2">
                    {!! isset($text_3) ? strip_tags($text_3) : '' !!}
                </div>
                <div class="giai-phap">
                   {!! isset($text_4) ? strip_tags($text_4) : '' !!}
                </div>
                <div class="colos">{!! isset($text_5) ? strip_tags($text_5) : '' !!}</div>
                <div class="clip">
                    <div class="row">
                        @if(isset($data_cat_2) && !empty($data_cat_2))
                            @foreach($data_cat_2 as $key => $item)
                                <div class="col-lg-6 col-md-6">
                                    <div class="yt">
                                        <div class="title-yt">
                                            <img src="{{ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800, 0, '', true, true)}}" alt="{{ $item->statics_title  }}">
                                        </div>
                                        <div class="name-dt">
                                            <p class="name">{{ strip_tags($item->statics_title) }}</p>
                                            <p>{{ strip_tags($item->statics_intro) }}</p>
                                        </div>
                                        <div class="vid">
                                            <iframe src="@if(isset($item['statics_video'])){{ $item['statics_video'] }}@endif" width="100%" height="288" frameborder="0"></iframe>
                                            <div class="intro-vid">
                                                {!! $item->statics_content !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="click">
                    <button type="submit" class="dk" >{!! isset($text_6) ? strip_tags($text_6) : '' !!}</button>
                    {!! csrf_field() !!}
                </div>
                <div class="tv-show">
                    <h3 class="title">{!! isset($text_7) ? strip_tags($text_7) : '' !!}</h3>
                    <div class="row">
                        @if(isset($data_cat_3) && !empty($data_cat_3))
                            @foreach($data_cat_3 as $key => $item)
                                <div class="col-lg-6 col-md-6">
                                    <div class="vtc">
                                        <div class="img-vtc">
                                            <img src="{{ ThumbImg::thumbBaseNormal(CGlobal::FOLDER_STATICS, $item->statics_id, $item->statics_image, 800, 0, '', true, true) }}" alt="{{ $item->statics_title }}">
                                        </div>
                                        <div class="vid-vtc">
                                            <iframe src="@if(isset($item['statics_video'])){{ $item['statics_video'] }} @endif" width="100%" height="288" frameborder="0"></iframe>
                                            <div class="intro-vid">
                                                {!! strip_tags($item->statics_content) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <h3 class="title">Đừng để con bạn mãi biếng ăn, gầy gò, ốm yếu, chậm phát triển, thua kém các bé đồng trang lứa...</h3>
                <div class="click">
                    <button class="dk" type="submit">{!! isset($text_10) ? strip_tags($text_10) : '' !!}</button>
                    {!! csrf_field() !!}
                </div>
                <div class="choose">Lí do mẹ nên chọn Colos Platium - <span class="text-uppercase">Giúp con ăn ngon chỉ từ 3 ngày</span></div>
                <div class="ingre">
                    <h3 class="title">{!! isset($text_9) ? strip_tags($text_9) : '' !!}</h3>
                    <div class="ingre-1">
                        1. Sữa non hay còn gọi là COLOSTRUM được lấy trong 24 giờ đầu, đảm bảo hàm lượng dinh dưỡng và kháng thể tự nhiên IgG cao nhất. Với trường hợp trẻ biếng ăn, chững cân, sức đề kháng yếu đặc biệt là trường hợp trẻ sinh non thì bổ sung
                        Sữa non cho trẻ là giải pháp ưu tiên hàng đầu để tăng cường sức đề kháng, cải thiện hệ tiêu hóa, kích thích trẻ ăn ngon, hấp thu chất dinh dưỡng tốt nhất.
                    </div>
                    <div class="ingre-2">
                        2. Lysine + Taurin + Vitamin nhóm B- kích thích trẻ ăn ngon, tiêu hóa tốt: là một trong 8 axit a min cần thiết cho sự phát triển cơ thể của trẻ. Cơ thể trẻ còn nhỏ nên không thể sản sinh ra Lysine mà bắt buộc phải bổ sung từ bên ngoài để đảm bảo sức khỏe duy trì các hoạt động.
                        Lysine còn tham gia rất nhiều vào các chu trình tiến hóa trong cơ thể, kích thích tiết ra các thành phần enzym, protein,...
                    </div>
                    <div class="ar-left-up">
                        <img src="http://localhost/project.vn/ColosPlatium/public/assets/img/a-left-up.png" alt="">
                    </div>
                    <div class="ar-right-up">
                        <img src="http://localhost/project.vn/ColosPlatium/public/assets/img/a-right-up.png" alt="">
                    </div>
                    <div class="thumb-ingre">
                        <img src="http://localhost/project.vn/ColosPlatium/public/assets/img/thumb-milk.png" alt="">
                    </div>
                    <div class="ar-left-down">
                        <img src="http://localhost/project.vn/ColosPlatium/public/assets/img/a-left-down.png" alt="">
                    </div>
                    <div class="ar-right-down">
                        <img src="http://localhost/project.vn/ColosPlatium/public/assets/img/a-right-down.png" alt="">
                    </div>
                    <div class="ingre-1">
                        3. Bộ đôi DHA + Vitamin A. Canxi + Vitamin D: Giúp con có một trí não và đôi mắt sáng. Hệ xương vững chắc. Hàng năm bộ y tế đều tổ chức cho trẻ em uống 2
                        lần vitamin A liều cao để tránh còi xương - suy dinh dưỡng - biếng ăn.
                        Bộ đôi này được kết hợp trong sữa non Colos Platium 1 giúp con phát triển trí tuệ và thể chất vượt trội
                    </div>
                    <div class="ingre-2">
                        4. Bộ đôi Canxi + Vitamin D: Đây là bộ đôi hoàn hảo giúp cho con có bộ xương phát triển. Vitamin D có vai trò quan trọng trong việc vận chuyển canxi lắp vào xương.
                        Ngày nay bố mẹ cần hiểu vai trò quan trọng của vitamin D, nếu bổ sung canxi mà không có vitamin D.
                        Cơ thể không thể hấp thu hết canxi lại bị đào thải ra ngoài. Nếu không thải hết thì Canxi tích tụ lại cơ thể rất nguy hiểm cho sức khỏe
                    </div>
                </div>
                <div class="check-date">
                    <i class="icon-like"></i>
                    @if(isset($data_cat_5) && !empty($data_cat_5))
                        @foreach($data_cat_5 as $key => $item)
                            <div class="date">
                                <div class="text-d">{{ $item->statics_title }}</div>
                                <div class="result">
                                    <i class="icon-right"></i>
                                    <span class="dam">{{ $item->statics_intro }}</span>
                                </div>
                                <div class="info-date">
                                    {!! $item->statics_content !!}
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <!--------home-2--------->

        <div class="home-3">
            <div class="container">
                <h3 class="title-home-3">{!! isset($text_10) ? strip_tags($text_10) : '' !!}</h3>
                <div class="info-3">
                    @if(isset($data_cat_6) && !empty($data_cat_6))
                        @foreach($data_cat_6 as $key => $item)
                            <div class="clip-3">
                                <div class="yt-3">
                                    <iframe src="@if(isset($item->statics_video)) {{ $item->statics_video }} @endif" width="100%" height="252" frameborder="0"></iframe>
                                </div>
                                <div class="text-3">
                                    <h4 class="title-3">{{ $item->statics_title }}</h4>
                                    <div class="des-3">
                                        {!! $item->statics_content !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <!---------home-3--------->

        <div class="home-4">
            <div class="container">
                <div class="title-4">{!! isset($text_11) ? $text_11 : '' !!}</div>
                <div class="info-4">
                    <div class="yt-4">
                        @if(isset($data_cat_7) && !empty($data_cat_7))
                            @foreach($data_cat_7 as $key => $item)
                                <iframe src="@if(isset($item->statics_video)) {{ $item->statics_video }} @endif" width="100%" height="315" frameborder="0"></iframe>
                            @endforeach
                        @endif
                    </div>
                    <div class="list">
                        <ul>
                            @if(isset($dataPaper) && !empty($dataPaper))
                                @foreach($dataPaper as $key => $item)
                                    <li>
                                        <img src="{{ThumbImg::thumbBaseNormal(CGlobal::FOLDER_BANNER, $item['banner_id'], $item['banner_image'], 1600, 0, '', true, true, false)}}" alt="{{$item['banner_title_show']}}" />
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="home-bottom">
        <div class="container">
            <h3 class="title-bottom">{!! isset($text_12) ? strip_tags($text_12) : '' !!}</h3>
            <div class="title-sub">{!! isset($text_13) ? $text_13 :  '' !!}</div>
            <div class="buy">
                <div class="text-buy">
                    {!! isset($text_14) ? strip_tags($text_14) : '' !!}
                </div>
            </div>
            <div class="form-submit">
                <div class="title-form">{!! isset($text_15) ? strip_tags($text_15) : '' !!}</div>
                <form action="{{ URL::route('site.pageContactPost') }}" method="POST"  enctype="multipart/form-data">
                    <input type="text" name="contact_name" class="form-control ip-name" value="" placeholder="Họ tên">
                    <input type="text" name="contact_phone" class="form-control ip-sdt" value="" placeholder="SĐT">
                    <input type="text" name="contact_local" class="form-control ip-local" value="" placeholder="Địa chỉ">
                    <button type="submit" class="btn btn-primary sm">Đăng ký ngay</button>
                    {!! csrf_field() !!}
                </form>
            </div>
            <div class="descrip-bottom">
                Sữa non Colos Platium - Cùng con khôn lớn
            </div>
        </div>
    </div>

@endsection
@section('footer')
    @include('Statics::block.footer')
@endsection