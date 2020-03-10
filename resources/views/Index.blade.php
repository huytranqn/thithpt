
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
<title>{{$title}}</title>
    <link rel="stylesheet" href="{{ asset ('public/client/lib/bootstrap/dist/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset ('public/client/lib/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{ asset ('public/client/css/site.css')}}" />
    
</head>
<body>
    <header>
    <div style="min-height:67px; background-image:linear-gradient(to top, #dbdbdb, #ffffff);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="/" style="text-decoration:none">
                        <img src="/img/layer-58.png" alt="Logo" style="float:left; margin-right:10px; min-height:45px; margin-top:10px" />
                        <p style="margin:0; color:#920009; font-size:13px; line-height:1.38; text-transform:uppercase; margin-top:14px; margin-bottom:3px">Sở gD&ĐT Thành phố hà nội</p>
                        <h4 class="top-header-caption">Hệ thống thi trắc nghiệm trực tuyến</h4>
                    </a>
                </div>
                <div class="col-md-6 text-right" style="margin-bottom:10px">
                            <a href="/dang-nhap?returnUrl=/" style="margin-top:13px;margin-bottom:10px; border-radius:5px; background-color:#124e7a; border-color:#124e7a; color:#fff; font-size:17px" class="btn btn-primary"><i class="fas fa-user-circle" style="color:#fff; margin-right:5px"></i> Đăng nhập</a>
                </div>
            </div>
        </div>
    </div>
    <nav id="main-nav" class="navbar navbar-expand-lg navbar-toggleable-lg navbar-light border-bottom box-shadow mb-3">
        <div class="container">
            <a class="navbar-brand active" href="/"><i class="fas fa-home show-on-mobile-f" style="display:none"></i> <span class="hiden-on-mobile-f">Kỳ thi luyện tập</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="margin-right:10px">
                <span class="fas fa-bars" style="color:#d2d2d2"></span>
            </button>
            <div class="navbar-collapse collapse">
                <ul class="navbar-nav mr-auto">
                    <li style="display:none" class="nav-item show-on-mobile-f active">
                        <a class="nav-link" href="/">Kỳ thi luyện tập</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/ky-thi-chinh-thuc">Kỳ thi chính thức</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/">Giới thiệu</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/thong-bao/huong-dan-su-dung-he-thong-thi-trac-nghiem-thanh-pho-ha-noi-30">Hướng dẫn</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/tin-tuc">Tin tức</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
    <nav id="home-nav">
    <div class="container">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-02-tab" data-toggle="tab" onclick="ChangeSchoolLevel('02')" role="tab" aria-controls="nav-02" aria-selected="true">Cấp Tiểu học</a>
                <a class="nav-item nav-link" id="nav-03-tab" data-toggle="tab" onclick="ChangeSchoolLevel('03')" role="tab" aria-controls="nav-03" aria-selected="false">Cấp THCS</a>
                <a class="nav-item nav-link" id="nav-04-tab" data-toggle="tab" onclick="ChangeSchoolLevel('04')" role="tab" aria-controls="nav-04" aria-selected="false">Cấp THPT</a>
        </div>
    </div>
</nav>
<div style="background-color:#f5f5f6; padding-bottom:50px;">
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-12 col-xl-8" style="padding-top:20px;">
                    <div class="row title-page">
                        <div class="col-12">
                            <h3 class="home-title-content" style="margin-bottom:20px">Kỳ thi mới nhất</h3>
                        </div>
                    </div>
                    <div class="row exam-filter">
                        <div class="col-12">
                            <select id="school-block" class="form-control" style="margin-right: 5px; float:left; margin-bottom: 5px; display:">
                                <option value="">Chọn khối</option>
                            </select>
                            <select id="subjects" class="form-control" style="margin-right: 5px; float:left; margin-bottom: 5px;">
                                <option value="">Chọn môn học</option>
                            </select>
                            <select id="chapters" class="form-control" style="margin-right: 5px; float:left; margin-bottom: 5px;">
                                <option value="">Chọn chương</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="margin-top:20px" id="list-ky-thi-content"></div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <button class="btn btn-primary show-more" onclick="LoadMore()">Xem Thêm</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-4 rank-col">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="home-title-content" style="margin-bottom:20px">Bảng xếp hạng thành tích</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <select id="exam-rank-select" class="form-control" style="margin-right: 5px; float:left;">
                            </select>
                        </div>
                    </div>
                    <div class="row" style="margin-top:20px" id="list-test-score">
                        <div class="col-12" style="margin-bottom:20px">
                            <h3 style="color:#0b4b79; padding:0; margin:0; margin-top:20px; font-size:15px;font-weight: 500;line-height: 1.32; text-align:center">Chưa có dữ liệu</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div style="margin-bottom:200px;">
</div>
<footer class="border-top footer text-muted">
    <div class="text-center" style="background-color:#f5f5f4; color:#124e7a; line-height:1.46; padding:15px 0px; font-size:13px">
        <h4 style="text-transform:uppercase; font-size:15px; font-weight:bold">sở giáo dục và đào tạo thành phố hà nội</h4>
        Địa chỉ: 23 Quang Trung, 81 Thợ Nhuộm, Hoàn Kiếm, Hà Nội<br />
        Điện thoại: <a href="tel:02439347489">024.39347489</a>, Hotline: <a href="tel:1900 4740">1900 4740</a>; Fax: 024.39423985<br />
        Email: khcntt@hanoiedu.vn, gdtrunghoc@hanoiedu.vn
    </div>
    <div class="text-center border-top" style="background-color:#1e5c8b; color:rgba(255, 255, 255, 0.8); padding:15px 5px; font-size:13px; font-weight:300">
        Copyright © 2019 Trắc nghiệm trực tuyến - Hỗ trợ trực tuyến <a style="color:#fff" target="_blank" href="https://www.teamviewer.com/vi/">Teamviewer</a><br />
        Hệ thống thi trắc nghiệm trực tuyến phiên bản chạy thử nghiệm
    </div>
</footer>
<script src="{{ asset ('public/client/lib/jquery/jquery.min.js')}}"></script>
<script src="{{ asset ('public/client/lib/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="{{ asset ('public/client/js/site.js')}}"></script>
</body>
</html>
