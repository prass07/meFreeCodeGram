@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class = "col-3 p-5">
            <img alt="freecodecamp's profile picture" class="rounded-circle" crossorigin="anonymous" data-testid="user-avatar" draggable="false" src="https://instagram.fktm8-1.fna.fbcdn.net/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?tp=1&amp;_nc_ht=instagram.fktm8-1.fna.fbcdn.net&amp;_nc_ohc=ICGP666HnNAAX9a0W8B&amp;oh=03f40ffd1871f4bb61679ab970113863&amp;oe=607758E7">
        </div>

        <div class = "col-9 p-5">
            <div class = 'd-flex justify-content-between align-items-baseline'>
                <h1>{{ $user->username}}</h1>
                <a href = '#'>Add New Post</a>
            </div>

            <div class = "d-flex">
                <div class = "pr-5"><strong>367</strong> posts</div>
                <div class = "pr-5"><strong>67.1k</strong> followers</div>
                <div class = "pr-5"><strong>301</strong> following</div>
            </div>
            <div class = "pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img alt="Photo by freeCodeCamp.org on March 12, 2021. May be an image of 1 person and indoor." class="FFVAD w-70" crossorigin="anonymous" decoding="auto" style="object-fit: cover;" sizes="293px" srcset="https://instagram.fktm8-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.129.1034.1034a/s150x150/159113925_224405209391401_5023734514820725236_n.jpg?tp=1&amp;_nc_ht=instagram.fktm8-1.fna.fbcdn.net&amp;_nc_cat=101&amp;_nc_ohc=403mNzI44YUAX_sn8MI&amp;oh=987eb14cb6d1eb01dfccbe074568c0d1&amp;oe=60772169 150w,https://instagram.fktm8-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.129.1034.1034a/s240x240/159113925_224405209391401_5023734514820725236_n.jpg?tp=1&amp;_nc_ht=instagram.fktm8-1.fna.fbcdn.net&amp;_nc_cat=101&amp;_nc_ohc=403mNzI44YUAX_sn8MI&amp;oh=c7ec66141fb5aa570279928beebf0f6f&amp;oe=60770D6F 240w,https://instagram.fktm8-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.129.1034.1034a/s320x320/159113925_224405209391401_5023734514820725236_n.jpg?tp=1&amp;_nc_ht=instagram.fktm8-1.fna.fbcdn.net&amp;_nc_cat=101&amp;_nc_ohc=403mNzI44YUAX_sn8MI&amp;oh=3c479f826643e0df84fe9011e4fd5228&amp;oe=6077BD91 320w,https://instagram.fktm8-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.129.1034.1034a/s480x480/159113925_224405209391401_5023734514820725236_n.jpg?tp=1&amp;_nc_ht=instagram.fktm8-1.fna.fbcdn.net&amp;_nc_cat=101&amp;_nc_ohc=403mNzI44YUAX_sn8MI&amp;oh=d47c58104a55532830fcc12102ca7f0d&amp;oe=60794058 480w,https://instagram.fktm8-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.129.1034.1034a/s640x640/159113925_224405209391401_5023734514820725236_n.jpg?tp=1&amp;_nc_ht=instagram.fktm8-1.fna.fbcdn.net&amp;_nc_cat=101&amp;_nc_ohc=403mNzI44YUAX_sn8MI&amp;oh=1b22623736dd4bbbbfd40b7ec49c7c53&amp;oe=60798259 640w" src="https://instagram.fktm8-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.129.1034.1034a/s640x640/159113925_224405209391401_5023734514820725236_n.jpg?tp=1&amp;_nc_ht=instagram.fktm8-1.fna.fbcdn.net&amp;_nc_cat=101&amp;_nc_ohc=403mNzI44YUAX_sn8MI&amp;oh=1b22623736dd4bbbbfd40b7ec49c7c53&amp;oe=60798259" >
        </div>
        <div class="col-4">
            <img alt="Photo by freeCodeCamp.org on March 08, 2021. May be an image of 1 person." class="FFVAD w-70" crossorigin="anonymous" decoding="auto" style="object-fit: cover;" sizes="293px" srcset="https://instagram.fktm8-1.fna.fbcdn.net/v/t51.2885-15/e35/s150x150/157712100_495573674790980_9025787082838431165_n.jpg?tp=1&amp;_nc_ht=instagram.fktm8-1.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=fW_hv6hWsGUAX-wETyV&amp;oh=65d727ffd65db37a8c02c3463f9ff8cd&amp;oe=6079BC1C 150w,https://instagram.fktm8-1.fna.fbcdn.net/v/t51.2885-15/e35/s240x240/157712100_495573674790980_9025787082838431165_n.jpg?tp=1&amp;_nc_ht=instagram.fktm8-1.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=fW_hv6hWsGUAX-wETyV&amp;oh=b17294ca0161f0a8fdbe7d4e9af0d5d6&amp;oe=6077649E 240w,https://instagram.fktm8-1.fna.fbcdn.net/v/t51.2885-15/e35/s320x320/157712100_495573674790980_9025787082838431165_n.jpg?tp=1&amp;_nc_ht=instagram.fktm8-1.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=fW_hv6hWsGUAX-wETyV&amp;oh=c30bf7860b38175f14d642c59dfc590f&amp;oe=60775164 320w,https://instagram.fktm8-1.fna.fbcdn.net/v/t51.2885-15/e35/s480x480/157712100_495573674790980_9025787082838431165_n.jpg?tp=1&amp;_nc_ht=instagram.fktm8-1.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=fW_hv6hWsGUAX-wETyV&amp;oh=83ff55aeb13c69cf1f882861aa3b06b1&amp;oe=6076B625 480w,https://instagram.fktm8-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/157712100_495573674790980_9025787082838431165_n.jpg?tp=1&amp;_nc_ht=instagram.fktm8-1.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=fW_hv6hWsGUAX-wETyV&amp;oh=a0da046e0dee0a5bd9c2ad976bd1071f&amp;oe=6077B51F 640w" src="https://instagram.fktm8-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/157712100_495573674790980_9025787082838431165_n.jpg?tp=1&amp;_nc_ht=instagram.fktm8-1.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=fW_hv6hWsGUAX-wETyV&amp;oh=a0da046e0dee0a5bd9c2ad976bd1071f&amp;oe=6077B51F">
        </div>
        <div class="col-4">
            <img alt="Photo by freeCodeCamp.org on March 01, 2021. May be an image of 1 person." class="FFVAD w-70" crossorigin="anonymous" decoding="auto" style="object-fit: cover;" sizes="293px" srcset="https://instagram.fktm8-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.128.1034.1034a/s150x150/155930641_449057102970296_7520574586017729636_n.jpg?tp=1&amp;_nc_ht=instagram.fktm8-1.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=hTvnTb3GzXsAX_lKvUe&amp;oh=38e895ec5cc311aeb923c73191ad2466&amp;oe=6078873B 150w,https://instagram.fktm8-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.128.1034.1034a/s240x240/155930641_449057102970296_7520574586017729636_n.jpg?tp=1&amp;_nc_ht=instagram.fktm8-1.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=hTvnTb3GzXsAX_lKvUe&amp;oh=a81d685af1bb777fe5bc015a31228d3d&amp;oe=60787F3D 240w,https://instagram.fktm8-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.128.1034.1034a/s320x320/155930641_449057102970296_7520574586017729636_n.jpg?tp=1&amp;_nc_ht=instagram.fktm8-1.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=hTvnTb3GzXsAX_lKvUe&amp;oh=1f568b1bcb0f13aff23c3729477746db&amp;oe=6079FC43 320w,https://instagram.fktm8-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.128.1034.1034a/s480x480/155930641_449057102970296_7520574586017729636_n.jpg?tp=1&amp;_nc_ht=instagram.fktm8-1.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=hTvnTb3GzXsAX_lKvUe&amp;oh=e39f10b4e811bc1e81debabc184e89bc&amp;oe=60769306 480w,https://instagram.fktm8-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.128.1034.1034a/s640x640/155930641_449057102970296_7520574586017729636_n.jpg?tp=1&amp;_nc_ht=instagram.fktm8-1.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=hTvnTb3GzXsAX_lKvUe&amp;oh=17e1f36ed331929a61b423946cee621d&amp;oe=607A738B 640w" src="https://instagram.fktm8-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.128.1034.1034a/s640x640/155930641_449057102970296_7520574586017729636_n.jpg?tp=1&amp;_nc_ht=instagram.fktm8-1.fna.fbcdn.net&amp;_nc_cat=108&amp;_nc_ohc=hTvnTb3GzXsAX_lKvUe&amp;oh=17e1f36ed331929a61b423946cee621d&amp;oe=607A738B">
        </div>
    </div>
</div>
@endsection
