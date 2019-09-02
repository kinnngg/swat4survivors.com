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
            <div class="panel-heading panel-heading-separator12 no-padding">
                Swat 4 Survivors Downloads
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail light-grey-gradient12">
                            <center>
                                <!--<i class="fad fa-server fa-10x" style="color: grey;"></i>-->
                                <img src="/images/icons/13.svg" style="width: 87%;">
                            </center>
                            <div class="caption">
                                <h3 class="panel-heading panel-heading-separator12 no-padding no-margin">Admin Mod
                                    <sup>1.0</sup>
                                </h3>
                                <p class="text-muted">
                                    <small>SWAT4 Admin Mod by Kinnngg is an improved version of Gezmod adding new features like anti camp.<br>
                                    <a href="{{ route('news.show',App\News::find(3)->summary) }}" class="">Click here</a> to see installation instructions.</small>
                                </p><br>
                                <p><a href="/downloads/1" class="btn btn-sm btn-primary tooltipster" title="Download" role="button"><i class="fad fa-download fa-fw"></i>&nbsp;&nbsp;Download</a>
                                    <?php
                                        $file = '../storage/AMMod.u';
                                        $filesize = filesize($file);
                                        $filesize = round($filesize / 1024, 2);
                                        echo "<small class='text-info'>&nbsp;&nbsp;$filesize KB</small>";
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail light-grey-gradient12">
                            <center>
                                <!--<i class="fad fa-user-shield fa-10x" style="color: grey;"></i>-->
                                <img src="/images/icons/23.svg" style="width: 80%;">
                            </center>
                            <div class="caption">
                                <h3 class="panel-heading panel-heading-separator12 no-padding no-margin">Antics
                                    <sup>1.0</sup>
                                </h3>
                                <p class="text-muted">
                                    <small>Client-side anti-cheat by rapher. <br>
                                    You need to place it in your 'System' folder of SWAT4 to join Swat 4 Survivors Server.</small>
                                </p><br><br><br>
                                <p><a href="/downloads/2" class="btn btn-sm btn-primary tooltipster" title="Download" role="button"><i class="fad fa-download fa-fw" style="color: grey;"></i>&nbsp;&nbsp;Download</a>
                                    <?php
                                        $file = '../storage/antics_v1.u';
                                        $filesize = filesize($file);
                                        $filesize = round($filesize / 1024, 2);
                                        echo "<small class='text-info'>&nbsp;&nbsp;$filesize KB</small>";
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail light-grey-gradient12">
                            <center>
                                <!--<i class="fad fa-poll-people fa-10x" style="color: grey;"></i>-->
                                <img src="/images/icons/4.svg" style="width: 80%;">
                            </center>
                            <div class="caption">
                                <h3 class="panel-heading panel-heading-separator12 no-padding no-margin">KMod <small>(vote & whois)</small>
                                    <sup>1.0</sup>
                                </h3>
                                <p class="text-muted">
                                    <small>KMod by Kinnngg adds voting and whois functionality to your SWAT4 1.0 Server.
                                    This Mod depends on Serge's Julia package.
                                    You need to configure it first if you want KMod to work.
                                    Visit <a target="_blank" href="https://github.com/sergeii/swat-julia">Sergii Github</a> for information about installing Julia.</small>
                                </p>
                                <p><a href="/downloads/3" class="btn btn-sm btn-primary tooltipster" title="Download" role="button"><i class="fad fa-download fa-fw" style="color: grey;"></i>&nbsp;&nbsp;Download</a>
                                    <?php
                                        $file = '../storage/KMod.u';
                                        $filesize = filesize($file);
                                        $filesize = round($filesize / 1024, 2);
                                        echo "<small class='text-info'>&nbsp;&nbsp;$filesize KB</small>";
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail light-grey-gradient12">
                            <center><i class="fad fa-th-list fa-10x" style="color: grey;"></i></center>
                            <div class="caption">
                                <h3 class="panel-heading panel-heading-separator12 no-padding no-margin">Streak Mod
                                    <sup>1.0</sup>
                                </h3>
                                <p class="text-muted">
                                    <small>Streak Mod by Kinnngg adds some stat, chat tracking functionality to your SWAT4 1.0 Server.
                                    This Mod depends on Serge's Julia package.
                                    You need to configure it first if you want Streak Mod to work.
                                    Visit <a target="_blank" href="https://github.com/sergeii/swat-julia">Sergii Github</a> for information about installing Julia.</small>
                                </p>
                                <p><a href="/downloads/4" class="btn btn-sm btn-primary tooltipster" title="Download" role="button"><i class="fad fa-download fa-fw" style="color: grey;"></i>&nbsp;&nbsp;Download</a>
                                    <?php
                                        $file = '../storage/StreakMod.u';
                                        $filesize = filesize($file);
                                        $filesize = round($filesize / 1024, 2);
                                        echo "<small class='text-info'>&nbsp;&nbsp;$filesize KB</small>";
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail light-grey-gradient12">
                            <center>
                                <!--<i class="fad fa-file-archive fa-10x" style="color: grey;"></i>-->
                                <img src="/images/icons/33.svg" style="width: 80%;">
                            </center>
                            <div class="caption">
                                <h3 class="panel-heading panel-heading-separator12 no-padding no-margin">Map Converter</h3>
                                <p class="text-muted">
                                    <small>Streak Mod by Kinnngg adds some stat, chat tracking functionality to your SWAT4 1.0 Server.
                                    This Mod depends on Serge's Julia package.
                                    You need to configure it first if you want Streak Mod to work.
                                    Visit <a target="_blank" href="https://github.com/sergeii/swat-julia">Sergii Github</a> for information about installing Julia.</small>
                                </p>
                                <p><a href="/downloads/5" class="btn btn-sm btn-primary tooltipster" title="Download" role="button"><i class="fad fa-download fa-fw" style="color: grey;"></i>&nbsp;&nbsp;Download</a>
                                    <?php
                                        $file = '../storage/Map_Converter.rar';
                                        $filesize = filesize($file);
                                        $filesize = round($filesize / 1024, 2);
                                        echo "<small class='text-info'>&nbsp;&nbsp;$filesize KB</small>";
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail light-grey-gradient12">
                            <center><i class="fad fa-file-pdf fa-10x" style="color: grey;"></i></center>
                            <div class="caption">
                                <h3 class="panel-heading panel-heading-separator12 no-padding no-margin">Prima Official Game Guide</h3>
                                <p class="text-muted">
                                    <small>Streak Mod by Kinnngg adds some stat, chat tracking functionality to your SWAT4 1.0 Server.
                                    This Mod depends on Serge's Julia package.
                                    You need to configure it first if you want Streak Mod to work.
                                    Visit <a target="_blank" href="https://github.com/sergeii/swat-julia">Sergii Github</a> for information about installing Julia.</small>
                                </p>
                                <p><a href="/downloads/6" class="btn btn-sm btn-primary tooltipster" title="Download" role="button"><i class="fad fa-download fa-fw" style="color: grey;"></i>&nbsp;&nbsp;Download</a>
                                    <?php
                                        $file = '../storage/Prima_Official_Game_Guide.pdf';
                                        $filesize = filesize($file);
                                        $filesize = round($filesize / 1024, 2);
                                        echo "<small class='text-info'>&nbsp;&nbsp;$filesize KB</small>";
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail light-grey-gradient12">
                            <center><i class="fad fa-file-archive fa-10x" style="color: grey;"></i></center>
                            <div class="caption">
                                <h3 class="panel-heading panel-heading-separator12 no-padding no-margin">Swat 4 Launcher</h3>
                                <p class="text-muted">
                                    <small>Streak Mod by Kinnngg adds some stat, chat tracking functionality to your SWAT4 1.0 Server.
                                    This Mod depends on Serge's Julia package.
                                    You need to configure it first if you want Streak Mod to work.
                                    Visit <a target="_blank" href="https://github.com/sergeii/swat-julia">Sergii Github</a> for information about installing Julia.</small>
                                </p>
                                <p><a href="/downloads/7" class="btn btn-sm btn-primary tooltipster" title="Download" role="button"><i class="fad fa-download fa-fw" style="color: grey;"></i>&nbsp;&nbsp;Download</a>
                                    <?php
                                        $file = '../storage/SWAT4_Launcher.rar';
                                        $filesize = filesize($file);
                                        $filesize = round($filesize / 1024, 2);
                                        echo "<small class='text-info'>&nbsp;&nbsp;$filesize KB</small>";
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail light-grey-gradient12">
                            <center><i class="fad fa-file-pdf fa-10x" style="color: grey;"></i></center>
                            <div class="caption">
                                <h3 class="panel-heading panel-heading-separator12 no-padding no-margin">Swat 4 Modding Overview</h3>
                                <p class="text-muted">
                                    <small>Streak Mod by Kinnngg adds some stat, chat tracking functionality to your SWAT4 1.0 Server.
                                    This Mod depends on Serge's Julia package.
                                    You need to configure it first if you want Streak Mod to work.
                                    Visit <a target="_blank" href="https://github.com/sergeii/swat-julia">Sergii Github</a> for information about installing Julia.</small>
                                </p>
                                <p><a href="/downloads/8" class="btn btn-sm btn-primary tooltipster" title="Download" role="button"><i class="fad fa-download fa-fw" style="color: grey;"></i>&nbsp;&nbsp;Download</a>
                                    <?php
                                        $file = '../storage/SWAT4_Modding_Overview.pdf';
                                        $filesize = filesize($file);
                                        $filesize = round($filesize / 1024, 2);
                                        echo "<small class='text-info'>&nbsp;&nbsp;$filesize KB</small>";
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail light-grey-gradient12">
                            <center><i class="fad fa-file-archive fa-10x" style="color: grey;"></i></center>
                            <div class="caption">
                                <h3 class="panel-heading panel-heading-separator12 no-padding no-margin">Swat 4 Toolkit</h3>
                                <p class="text-muted">
                                    <small>Streak Mod by Kinnngg adds some stat, chat tracking functionality to your SWAT4 1.0 Server.
                                    This Mod depends on Serge's Julia package.
                                    You need to configure it first if you want Streak Mod to work.
                                    Visit <a target="_blank" href="https://github.com/sergeii/swat-julia">Sergii Github</a> for information about installing Julia.</small>
                                </p>
                                <p><a href="/downloads/9" class="btn btn-sm btn-primary tooltipster" title="Download" role="button"><i class="fad fa-download fa-fw" style="color: grey;"></i>&nbsp;&nbsp;Download</a>
                                    <?php
                                        $file = '../storage/SWAT4_Toolkit.rar';
                                        $filesize = filesize($file);
                                        $filesize = round($filesize / 1024, 2);
                                        echo "<small class='text-info'>&nbsp;&nbsp;$filesize KB</small>";
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail light-grey-gradient12">
                            <center><i class="fad fa-file-archive fa-10x" style="color: grey;"></i></center>
                            <div class="caption">
                                <h3 class="panel-heading panel-heading-separator12 no-padding no-margin">Swat 4 Server Browser</h3>
                                <p class="text-muted">
                                    <small>Streak Mod by Kinnngg adds some stat, chat tracking functionality to your SWAT4 1.0 Server.
                                    This Mod depends on Serge's Julia package.
                                    You need to configure it first if you want Streak Mod to work.
                                    Visit <a target="_blank" href="https://github.com/sergeii/swat-julia">Sergii Github</a> for information about installing Julia.</small>
                                </p>
                                <p><a href="/downloads/10" class="btn btn-sm btn-primary tooltipster" title="Download" role="button"><i class="fad fa-download fa-fw" style="color: grey;"></i>&nbsp;&nbsp;Download</a>
                                    <?php
                                        $file = '../storage/SWAT4SBA_install.exe';
                                        $filesize = filesize($file);
                                        $filesize = round($filesize / 1024, 2);
                                        echo "<small class='text-info'>&nbsp;&nbsp;$filesize KB</small>";
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail light-grey-gradient12">
                            <center><i class="fad fa-file-pdf fa-10x" style="color: grey;"></i></center>
                            <div class="caption">
                                <h3 class="panel-heading panel-heading-separator12 no-padding no-margin">Swat 4 Manual</h3>
                                <p class="text-muted">
                                    <small>Streak Mod by Kinnngg adds some stat, chat tracking functionality to your SWAT4 1.0 Server.
                                    This Mod depends on Serge's Julia package.
                                    You need to configure it first if you want Streak Mod to work.
                                    Visit <a target="_blank" href="https://github.com/sergeii/swat-julia">Sergii Github</a> for information about installing Julia.</small>
                                </p>
                                <p><a href="/downloads/11" class="btn btn-sm btn-primary tooltipster" title="Download" role="button"><i class="fad fa-download fa-fw" style="color: grey;"></i>&nbsp;&nbsp;Download</a>
                                    <?php
                                        $file = '../storage/SWT4_Mn_TX_7162010.pdf';
                                        $filesize = filesize($file);
                                        $filesize = round($filesize / 1024, 2);
                                        echo "<small class='text-info'>&nbsp;&nbsp;$filesize KB</small>";
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
@endsection