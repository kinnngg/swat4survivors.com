@extends('layouts.main')
@section('styles')
    <style>
        h4
        {
            font-weight: bolder;
        }
        .light-grey-gradient12
        {
            /*background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);*/
            background: linear-gradient(#3b3b3b, #0c0c0c);
        }
        .panel-heading-separator12
        {
            margin-left: 10px;
            margin-right: 10px !important;
            padding-bottom: 6px;
            margin-bottom: 8px;
            border-bottom: 2px dashed #FF69B4 !important;
        }
        .panel-heading
        {
            color: #fff !important;
            font-weight: bold;
            font-size: 1.1em;
            font-family: 'Trebuchet MS';
            padding-top: 5px !important;
            padding-bottom: 5px !important;
        }
        .panel h3.header
        {
            color: #f8f8f8 !important;
        }
        .panel h3
        {
            font-weight: bold;
            font-size: 1.3em;
            font-family: 'Trebuchet MS';
    </style>
    @endsection
@section('title','Downloads')
@section('main-container')
    <div class="content col-xs-9">

        <div class="panel light-grey-gradient12" style="padding: 20px;border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);">
            <div class="download-item row">
                <div class="col-xs-4">
                    <!--<img src="/images/admin-icon.png" style="width: 225px;height: 225px;" class="img" alt="">-->
                    <i class="fad fa-server fa-10x" style="color: grey;"></i>
                </div>
                <div class="col-xs-8">
                    <h4 class="panel-heading no-padding"><a href="/downloads/1" class="panel-heading">Admin Mod</a></h4>
                    <p class="text-muted">
                        SWAT4 Admin Mod by Kinnngg is an improved version of Gezmod adding new features like anti camp.<br>
                        <a href="{{ route('news.show',App\News::find(3)->summary) }}" class="">Click here</a> to see installation instructions.
                    </p>
                    <table class="table table-responsive" style="border-top: 2px dashed #999999;border-bottom: 2px dashed #999999;">
                        <tr>
                            <td class="text-muted"><strong>Version</strong></td>
                            <td class="text-info">1.0</td>
                        </tr>
                        <tr>
                            <td class="text-muted"><strong>File Size</strong></td>
                            <!--<td class="text-info">708.21 KB</td>-->
                            <td class="text-info">
                                <?php
                                    $file = '../storage/AMMod.u';
                                    $filesize = filesize($file);
                                    $filesize = round($filesize / 1024, 2);
                                    echo "$filesize KB";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted"><strong>Added</strong></td>
                            <td class="text-info">14-7-2016</td>
                        </tr>
                    </table>

                    <a href="/downloads/1" class="pull-left"><i class="fad fa-download fa-3x tooltipster" title="Download" style="color: grey;"></i></a>
                </div>
            </div>
            <hr>
            <div class="download-item row">
                <div class="col-xs-4">
                    <!--<img src="/images/cheaters.jpeg" style="width: 225px;height: 225px;" class="img" alt="">-->
                    <i class="fad fa-user-shield fa-10x" style="color: grey;"></i>
                </div>
                <div class="col-xs-8">
                    <h4 class="panel-heading no-padding"><a href="/downloads/2" class="panel-heading">Antics</a></h4>
                    <p class="text-muted">
                        Client-side anti-cheat by rapher. <br>
                        You need to place it in your 'System' folder of SWAT4 to join KoS Server.
                    </p>
                    <table class="table table-responsive" style="border-top: 2px dashed #999999;border-bottom: 2px dashed #999999;">
                        <tr>
                            <td class="text-muted">Version</td>
                            <td class="text-info">1.0</td>
                        </tr>
                        <tr>
                            <td class="text-muted">File Size</td>
                            <td class="text-info">
                                <?php
                                    $file = '../storage/antics_v1.u';
                                    $filesize = filesize($file);
                                    $filesize = round($filesize / 1024, 2);
                                    echo "$filesize KB";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">Added</td>
                            <td class="text-info">14-7-2016</td>
                        </tr>
                    </table>

                    <a href="/downloads/2" class="pull-left"><i class="fad fa-download fa-3x tooltipster" title="Download" style="color: grey;"></i></a>
                </div>
            </div>
            <hr>
            <div class="download-item row">
                <div class="col-xs-4">
                    <!--<img src="/images/vote-icon.jpg" style="width: 225px;height: 225px;" class="img" alt="">-->
                    <i class="fad fa-poll-people fa-10x" style="color: grey;"></i>
                </div>
                <div class="col-xs-8">
                    <h4 class="panel-heading no-padding"><a href="/downloads/3" class="panel-heading">KMod (vote & whois)</a></h4>
                    <p class="text-muted">
                        KMod by Kinnngg adds voting and whois functionality to your SWAT4 1.0 Server.
                        This Mod depends on Serge's Julia package.
                        You need to configure it first if you want KMod to work.
                        Visit <a target="_blank" href="https://github.com/sergeii/swat-julia">Sergii Github</a> for information about installing Julia.
                    </p>
                    <table class="table table-responsive" style="border-top: 2px dashed #999999;border-bottom: 2px dashed #999999;">
                        <tr>
                            <td class="text-muted">Version</td>
                            <td class="text-info">1.1</td>
                        </tr>
                        <tr>
                            <td class="text-muted">File Size</td>
                            <td class="text-info">
                                <?php
                                    $file = '../storage/KMod.u';
                                    $filesize = filesize($file);
                                    $filesize = round($filesize / 1024, 2);
                                    echo "$filesize KB";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">Added</td>
                            <td class="text-info">14-7-2016</td>
                        </tr>
                    </table>

                    <a href="/downloads/3" class="pull-left"><i class="fad fa-download fa-3x tooltipster" title="Download" style="color: grey;"></i></a>
                </div>
            </div>
            <hr>
            <div class="download-item row">
                <div class="col-xs-4">
                    <!--<img src="/images/vote-icon.jpg" style="width: 225px;height: 225px;" class="img" alt="">-->
                    <i class="fad fa-th-list fa-10x" style="color: grey;"></i>
                </div>
                <div class="col-xs-8">
                    <h4 class="panel-heading no-padding"><a href="/downloads/4" class="panel-heading">Streak Mod</a></h4>
                    <p class="text-muted">
                        Streak Mod by Kinnngg adds some stat, chat tracking functionality to your SWAT4 1.0 Server.
                        This Mod depends on Serge's Julia package.
                        You need to configure it first if you want Streak Mod to work.
                        Visit <a target="_blank" href="https://github.com/sergeii/swat-julia">Sergii Github</a> for information about installing Julia.
                    </p>
                    <table class="table table-responsive" style="border-top: 2px dashed #999999;border-bottom: 2px dashed #999999;">
                        <tr>
                            <td class="text-muted">Version</td>
                            <td class="text-info">1.0</td>
                        </tr>
                        <tr>
                            <td class="text-muted">File Size</td>
                            <td class="text-info">
                                <?php
                                    $file = '../storage/StreakMod.u';
                                    $filesize = filesize($file);
                                    $filesize = round($filesize / 1024, 2);
                                    echo "$filesize KB";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted">Added</td>
                            <td class="text-info">14-7-2016</td>
                        </tr>
                    </table>

                    <a href="/downloads/4" class="pull-left"><i class="fad fa-download fa-3x tooltipster" title="Download" style="color: grey;"></i></a>
                </div>
            </div>
        </div>


    </div>
@endsection