<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>Title</title>
    <link rel="stylesheet" href="{{ asset('site/css/index.css') }}">
</head>
<body>
<div class="all">
    <img class="bg" src="{{asset('site/images/logo.png')}}" alt="">
    <img class="ti" src="{{asset('site/images/title.png')}}" alt="">
    <div class="tabel">
        <div class="header">
            项目执行表
        </div>
        <ul class="title titleAll">
            <li class="appellation">项目名称</li>
            <li class="beginTime">项目开始时间</li>
            <li class="endTime">项目结束时间</li>
            <li class="place">项目地点</li>
            <li class="Responsible">负责人</li>
            <li class="supervisor">监督人</li>
            <li class="detail">项目明细</li>
            <li class="remark">备注</li>
            <li class="articles">文章推送</li>
        </ul>
        <div class="content">
            @foreach($projects as $project)
                @if(($loop->index +1)== 1)
                    <div class="scroll">
                        @endif
                        @if(($loop->index +1)== 7)
                            <div class="scroll">
                                @endif
                                @if(($loop->index +1)== 13)
                                    <div class="scroll">
                                        @endif
                                        @if(($loop->index +1)== 19)
                                            <div class="scroll">
                                                @endif
                                                <ul class="title">
                                                    <li class="appellation">{{$project->name}}</li>
                                                    <li class="beginTime">{{$project->dateStart}}</li>
                                                    <li class="endTime">{{$project->dateOver}}</li>
                                                    <li class="place">{{$project->location}}</li>
                                                    <li class="Responsible">{{$project->principal}}</li>
                                                    <li class="supervisor">{{$project->supervision}}</li>
                                                    <li class="detail">{{$project->info}}</li>
                                                    <li class="remark">{{$project->remark}}</li>
                                                    <li class="articles">{{$project->pub}}</li>
                                                </ul>
                                                @if(($loop->index +1)== 6)
                                            </div>
                                        @endif
                                        @if(($loop->index +1)== 12)
                                    </div>
                                @endif
                                @if(($loop->index +1)== 18)
                            </div>
                        @endif
                        @if(($loop->index +1)== 24)
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>

</body>
<script src="{{ asset('site/js/jquery-1.11.3.min.js') }}"></script>
<script>
    //获取屏幕的高宽
    var width = $(window).width();
    var height = $(window).height();
    $('.all').css({'width': width + 'px', 'height': height + 'px'});


    var status = 0;
    var len = $('.scroll').length;
    $('.scroll').eq(status).fadeIn(1000).siblings().fadeOut(1000);
    var timer = setInterval(function () {
        status++;
        $('.scroll').eq(status).fadeIn(1000).siblings().fadeOut(1000);
        if (status >= len) {
//            status = -1;
            setTimeout(function () {

                window.location.reload();

            }, 8000)
        }

    }, 8000)
</script>
</html>