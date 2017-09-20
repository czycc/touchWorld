<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="{{ asset('site/css/index.css') }}">
</head>
<body>
<div class="all">
    <div class="tabel">
        <div class="header">
            项目执行表
        </div>
        <ul class="title">
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
            <div class="scroll">
                @foreach($projects as $project)
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
                @endforeach
            </div>
        </div>
    </div>
</div>

</body>
<script src="{{ asset('site/js/jquery-1.11.3.min.js') }}"></script>
<script>
    var status = 0;
    var timer = setInterval(function () {
        status++;
        var scrollHei = parseInt($('.scroll').height());
        var contentHei = parseInt($('.content').height());
        var scrollTop = parseInt($('.scroll').css('top'));
        if (scrollHei <= contentHei) {
            clearInterval(timer);
            setTimeout(function () {
                window.location.reload();
            }, 10000)
        }
        $('.scroll').css('top', -status + 'px');
        if (-scrollTop >= scrollHei) {
            clearInterval(timer);
            window.location.reload();
        }
    }, 100)
</script>
</html>