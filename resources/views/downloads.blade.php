@extends('layouts.main')
@section('styles')
    <style>
        h4
        {
            font-weight: bolder;
        }
        .light-grey-gradient12
        {
            background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);
        }
        .panel-heading-separator12
        {
            margin-left: 10px;
            margin-right: 10px !important;
            padding-bottom: 6px;
            margin-bottom: 8px;
            border-bottom: 2px dashed #FF69B4;
        }
        .panel-heading
        {
            color: #444;
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

        <div class="panel light-grey-gradient12" style="padding: 20px;border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);padding: 20px;">
            <div class="download-item row">
                <div class="col-xs-4">
                    <img src="/images/admin-icon.png" style="width: 225px;height: 225px;" class="img" alt="">
                </div>
                <div class="col-xs-8">
                    <h4 class="ainorange">Admin Mod</h4>
                    <p>
                        SWAT4 Admin Mod by Kinnngg is improved version of Gezmod adding new features like anti camp.<br>
                        <a href="{{ route('news.show',App\News::find(3)->summary) }}" class="">Click here</a> to see installation instructions.
                    </p>
                    <table class="table table-striped table-responsive">
                        <tr>
                            <td>Version</td>
                            <td>1.0</td>
                        </tr>
                        <tr>
                            <td>File Size</td>
                            <td>708.21 KB</td>
                        </tr>
                        <tr>
                            <td>Added</td>
                            <td>14-7-2016</td>
                        </tr>
                    </table>

                    <a href="/downloads/1" class="btn btn-success">Download</a>
                </div>
            </div>
            <hr>
            <div class="download-item row">
                <div class="col-xs-4">
                    <img src="/images/cheaters.jpeg" style="width: 225px;height: 225px;" class="img" alt="">
                </div>
                <div class="col-xs-8">
                    <h4 class="ainorange">antics (anti-cheat)</h4>
                    <p>
                        Client-side anti-cheat by rapher. <br>
                        You need to place it in your 'System' folder of SWAT4 to join KoS Server.
                    </p>
                    <table class="table table-striped table-responsive">
                        <tr>
                            <td>Version</td>
                            <td>1.0</td>
                        </tr>
                        <tr>
                            <td>File Size</td>
                            <td>13.28 KB</td>
                        </tr>
                        <tr>
                            <td>Added</td>
                            <td>14-7-2016</td>
                        </tr>
                    </table>

                    <a href="/downloads/2" class="btn btn-success">Download</a>
                </div>
            </div>
            <hr>
            <div class="download-item row">
                <div class="col-xs-4">
                    <img src="/images/vote-icon.jpg" style="width: 225px;height: 225px;" class="img" alt="">
                </div>
                <div class="col-xs-8">
                    <h4 class="ainorange">KMod (vote & whois)</h4>
                    <p>
                        KMod by Kinnngg adds voting and whois functionality to your SWAT4 1.0 Server.
                        This Mod depends on Serge's Julia package.
                        You need to configure it first if you want KMod to work.
                        Visit <a target="_blank" href="https://github.com/sergeii/swat-julia">Sergii Github</a> for information about installing Julia.
                    </p>
                    <table class="table table-striped table-responsive">
                        <tr>
                            <td>Version</td>
                            <td>1.1</td>
                        </tr>
                        <tr>
                            <td>File Size</td>
                            <td>113.46 KB</td>
                        </tr>
                        <tr>
                            <td>Added</td>
                            <td>14-7-2016</td>
                        </tr>
                    </table>

                    <a href="/downloads/3" class="btn btn-success">Download</a>
                </div>
            </div>
        </div>


    </div>
@endsection