@extends('layouts.main')
@section('meta-desc',"Top 10 Section")
@section('title',"Top 10 of Server")
@section('styles')
    <style>
        .col-xs-5
        {
            width: 45.666667% !important;
        }
        .panel-heading-separator
        {
            padding-bottom: 6px;
            margin-bottom: 8px;
            border-bottom: 2px dashed #FF69B4;
        }
        .panel-heading
        {
            color: #fff !important;
            font-weight: bold;
            font-size: 1.1em !important;
            font-family: "Marcellus SC",serif !important;
            padding-top: 5px !important;
            padding-bottom: 5px !important;
            text-shadow: 2px 2px 5px #FF69B4;
        }
        .panel h3.header
        {
            color: #f8f8f8 !important;
            font-family: "Marcellus SC",serif !important;
        }
        .panel h3
        {
            font-weight: bold;
            font-size: 1.2em;
            /*font-family: 'Trebuchet MS';*/
            font-family: "Marcellus SC",serif !important;
            text-shadow: 2px 2px 5px #FF69B4;
        }
        .header-separator
        {
            margin-left: 10px;
            margin-right: 10px !important;
            padding-bottom: 6px;
            margin-bottom: 8px;
            border-bottom: 2px dashed #FF69B4;
        }
        input[type="text"]
        {
            padding: 4px 8px;
            font-size: 13px;
            height: 35px;
            color: #808080;
            border: 1px solid #ccc;
            border-radius: 3px !important;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        .light-grey-gradient
        {
            /*background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);*/
            background: linear-gradient(#3b3b3b, #0c0c0c);
        }
        .table
        {
            padding: 14px !important;
            /*background-color: transparent;*/
            border: 1px solid #CCC;
        }
        .color-gold
        {
            color: #ffd700 !important;
            text-shadow: 2px 2px 5px #DAA520;
        }
        .color-blue
        {
            color: #0000ff !important;
            text-shadow: 2px 2px 5px #1E90FF;
        }
    </style>
@endsection
@section('main-container')
    <div class="content col-xs-9">
        @include('partials._statistics-navbar')
        <div class="row padding10">
        <div class="col-xs-5 panel light-grey-gradient" style="border-radius: 12px;box-shadow: 2px 2px 2px rgba(0,0,0,.3);">
            <div class="panel-heading panel-heading-separator no-padding"><span class="">Top 10 Scorer</span></div>
            <div class="panel-body no-padding">
                <table class="table no-margin" style="border: 0px;">
                    <thead style="font-family: Marcellus SC;"><tr>
                        <th class="col-xs-1 color-gold">#</th>
                        <th class="col-xs-1 color-gold text-center">Rank</th>
                        <th class="col-xs-1 color-gold">Name</th>
                        <th class="col-xs-1 color-gold text-right">Score</th>
                    </tr></thead>
                    @forelse($top10Score as $player)
                        <tr style="border-top: 1px solid #ccc;">
                            <th class="text-muted" style="vertical-align: middle;">{{ $position1++ }}</th>
                            <td style="vertical-align: middle;"><center>{!! Html::image($player->rankImage,'',['title' => $player->rank->name,'class' => 'tooltipster' ,'height' => '38px']) !!}</center></td>
                            <td class="color-main text-bold" style="vertical-align: middle;">{!! Html::image($player->countryImage,$player->country->countryCode,['title' => $player->country->countryName, 'class' => 'tooltipster', 'height' => '16px']) !!}&nbsp;&nbsp;{!! link_to_route('player-detail', $player->nameTrimmed, [$player->name]) !!}</td>
                            <td class="text-muted text-right" style="vertical-align: middle;">{{ $player->total_score }}</td>
                        </tr>
                    @empty
                        <div class="alert alert-dismissible text-left" role="alert" style="color: #777;border: 1px solid #ccc;background: #FFFEE7;line-height: 15px;border-radius: 5px;padding-left: 5px;padding-top: 5px;padding-bottom: 5px;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <small>No data has been collected at this moment.  Please check back later.</small>
                        </div>
                    @endforelse
                </table>
            </div>
        </div>
        <div class="col-xs-5 col-xs-offset-1 panel light-grey-gradient" style="border-radius: 12px;box-shadow: 2px 2px 2px rgba(0,0,0,.3);">
            <div class="panel-heading panel-heading-separator no-padding"><span class="">Top 10 Kill/Death Ratio</span> <small><i>( for kills > 99 )</i></small></div>
            <div class="panel-body no-padding">
                <table class="table no-margin" style="border: 0px;">
                    <thead style="font-family: Marcellus SC;"><tr>
                        <th class="col-xs-1 color-gold">#</th>
                        <th class="col-xs-1 color-gold text-center">Rank</th>
                        <th class="col-xs-1 color-gold">Name</th>
                        <th class="col-xs-1 color-gold text-right">K/D</th>
                    </tr></thead>
                    @forelse($top10KD as $player)
                        <tr style="border-top: 1px solid #ccc;">
                            <th class="text-muted" style="vertical-align: middle;">{{ $position2++ }}</th>
                            <td style="vertical-align: middle;"><center>{!! Html::image($player->rankImage,'',['title' => $player->rank->name,'class' => 'tooltipster' ,'height' => '38px']) !!}</center></td>
                            <td class="color-main text-bold" style="vertical-align: middle;">{!! Html::image($player->countryImage,$player->country->countryCode,['title' => $player->country->countryName, 'class' => 'tooltipster', 'height' => '16px']) !!}&nbsp;&nbsp;{!! link_to_route('player-detail', $player->nameTrimmed, [$player->name]) !!}</td>
                            <td class="text-muted text-right" style="vertical-align: middle;">{{ $player->killdeath_ratio }}</td>
                        </tr>
                    @empty
                        <div class="alert alert-dismissible text-left" role="alert" style="color: #777;border: 1px solid #ccc;background: #FFFEE7;line-height: 15px;border-radius: 5px;padding-left: 5px;padding-top: 5px;padding-bottom: 5px;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <small>No data has been collected at this moment.  Please check back later.</small>
                        </div>
                    @endforelse
                </table>
            </div>
        </div>
        </div>

        <div class="row padding10">
            <div class="col-xs-5 panel light-grey-gradient" style="border-radius: 12px;box-shadow: 2px 2px 2px rgba(0,0,0,.3);">
                <div class="panel-heading panel-heading-separator no-padding"><span class="">Top 10 Arrest/Arrested Ratio </span><small><i>( for arrests > 49 )</i></small></div>
                <div class="panel-body no-padding">
                    <table class="table no-margin" style="border: 0px;">
                        <thead style="font-family: Marcellus SC;"><tr>
                            <th class="col-xs-1 color-gold">#</th>
                            <th class="col-xs-1 color-gold text-center">Rank</th>
                            <th class="col-xs-1 color-gold">Name</th>
                            <th class="col-xs-1 color-gold text-right">A/A</th>
                        </tr></thead>
                        @forelse($top10AAR as $player)
                            <tr style="border-top: 1px solid #ccc;">
                                <th class="text-muted" style="vertical-align: middle;">{{ $position3++ }}</th>
                                <td style="vertical-align: middle;"><center>{!! Html::image($player->rankImage,'',['title' => $player->rank->name,'class' => 'tooltipster' ,'height' => '38px']) !!}</center></td>
                                <td class="color-main text-bold">{!! Html::image($player->countryImage,$player->country->countryCode,['title' => $player->country->countryName, 'class' => 'tooltipster', 'height' => '16px']) !!}&nbsp;&nbsp;{!! link_to_route('player-detail', $player->nameTrimmed, [$player->name]) !!}</td>
                                <td class="text-muted text-right">{{ $player->arr_ratio }}</td>
                            </tr>
                        @empty
                            <div class="alert alert-dismissible text-left" role="alert" style="color: #777;border: 1px solid #ccc;background: #FFFEE7;line-height: 15px;border-radius: 5px;padding-left: 5px;padding-top: 5px;padding-bottom: 5px;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <small>No data has been collected at this moment.  Please check back later.</small>
                            </div>
                        @endforelse
                    </table>
                </div>
            </div>
            <div class="col-xs-5 col-xs-offset-1 panel light-grey-gradient" style="border-radius: 12px;box-shadow: 2px 2px 2px rgba(0,0,0,.3);">
                <div class="panel-heading panel-heading-separator no-padding"><span class="">Top 10 Most Rounds Played</span></div>
                <div class="panel-body no-padding">
                    <table class="table no-margin" style="border: 0px;">
                        <thead style="font-family: Marcellus SC;"><tr>
                            <th class="col-xs-1 color-gold">#</th>
                            <th class="col-xs-1 color-gold text-center">Rank</th>
                            <th class="col-xs-1 color-gold">Name</th>
                            <th class="col-xs-1 color-gold text-right">Rounds</th>
                        </tr></thead>
                        @forelse($top10Round as $player)
                            <tr style="border-top: 1px solid #ccc;">
                                <th class="text-muted" style="vertical-align: middle;">{{ $position4++ }}</th>
                                <td style="vertical-align: middle;"><center>{!! Html::image($player->rankImage,'',['title' => $player->rank->name,'class' => 'tooltipster' ,'height' => '38px']) !!}</center></td>
                                <td class="color-main text-bold" style="vertical-align: middle;">{!! Html::image($player->countryImage,$player->country->countryCode,['title' => $player->country->countryName, 'class' => 'tooltipster', 'height' => '16px']) !!}&nbsp;&nbsp;{!! link_to_route('player-detail', $player->nameTrimmed, [$player->name]) !!}</td>
                                <td class="text-muted text-right" style="vertical-align: middle;">{{ $player->total_round_played }}</td>
                            </tr>
                        @empty
                            <div class="alert alert-dismissible text-left" role="alert" style="color: #777;border: 1px solid #ccc;background: #FFFEE7;line-height: 15px;border-radius: 5px;padding-left: 5px;padding-top: 5px;padding-bottom: 5px;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <small>No data has been collected at this moment.  Please check back later.</small>
                            </div>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>

    <div class="row padding10">
        <div class="col-xs-5 panel light-grey-gradient" style="border-radius: 12px;box-shadow: 2px 2px 2px rgba(0,0,0,.3);">
            <div class="panel-heading panel-heading-separator no-padding"><span class="">Top 10 Most Win</span></div>
            <div class="panel-body no-padding">
                <table class="table no-margin" style="border: 0px;">
                    <thead style="font-family: Marcellus SC;"><tr>
                        <th class="col-xs-1 color-gold">#</th>
                        <th class="col-xs-1 color-gold text-center">Rank</th>
                        <th class="col-xs-1 color-gold">Name</th>
                        <th class="col-xs-1 color-gold text-right">Wins</th>
                    </tr></thead>
                    @forelse($top10Winners as $player)
                        <tr style="border-top: 1px solid #ccc;">
                            <th class="text-muted" style="vertical-align: middle;">{{ $position5++ }}</th>
                            <td style="vertical-align: middle;"><center>{!! Html::image($player->rankImage,'',['title' => $player->rank->name,'class' => 'tooltipster' ,'height' => '38px']) !!}</center></td>
                            <td class="color-main text-bold" style="vertical-align: middle;">{!! Html::image($player->countryImage,$player->country->countryCode,['title' => $player->country->countryName, 'class' => 'tooltipster', 'height' => '16px']) !!}&nbsp;&nbsp;{!! link_to_route('player-detail', $player->nameTrimmed, [$player->name]) !!}</td>
                            <td class="text-muted text-right" style="vertical-align: middle;">{{ $player->game_won }}</td>
                        </tr>
                    @empty
                        <div class="alert alert-dismissible text-left" role="alert" style="color: #777;border: 1px solid #ccc;background: #FFFEE7;line-height: 15px;border-radius: 5px;padding-left: 5px;padding-top: 5px;padding-bottom: 5px;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <small>No data has been collected at this moment.  Please check back later.</small>
                        </div>
                    @endforelse
                </table>
            </div>
        </div>
        <div class="col-xs-5 col-xs-offset-1 panel light-grey-gradient" style="border-radius: 12px;box-shadow: 2px 2px 2px rgba(0,0,0,.3);">
            <div class="panel-heading panel-heading-separator no-padding"><span class="">Top 10 Highest Score </span><small><i>( in one round )</i></small></div>
            <div class="panel-body no-padding">
                <table class="table no-margin" style="border: 0px;">
                    <thead style="font-family: Marcellus SC;"><tr>
                        <th class="col-xs-1 color-gold">#</th>
                        <th class="col-xs-1 color-gold text-center">Rank</th>
                        <th class="col-xs-1 color-gold">Name</th>
                        <th class="col-xs-1 color-gold text-right">Score</th>
                    </tr></thead>
                    @forelse($top10HighestScore as $player)
                        <tr style="border-top: 1px solid #ccc;">
                            <th class="text-muted" style="vertical-align: middle;">{{ $position6++ }}</th>
                            <td style="vertical-align: middle;"><center>{!! Html::image($player->rankImage,'',['title' => $player->rank->name,'class' => 'tooltipster' ,'height' => '38px']) !!}</center></td>
                            <td class="color-main text-bold" style="vertical-align: middle;">{!! Html::image($player->countryImage,$player->country->countryCode,['title' => $player->country->countryName, 'class' => 'tooltipster', 'height' => '16px']) !!}&nbsp;&nbsp;{!! link_to_route('player-detail', $player->nameTrimmed, [$player->name]) !!}</td>
                            <td class="text-muted text-right" style="vertical-align: middle;">{{ $player->highest_score }}</td>
                        </tr>
                    @empty
                        <div class="alert alert-dismissible text-left" role="alert" style="color: #777;border: 1px solid #ccc;background: #FFFEE7;line-height: 15px;border-radius: 5px;padding-left: 5px;padding-top: 5px;padding-bottom: 5px;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <small>No data has been collected at this moment.  Please check back later.</small>
                        </div>
                    @endforelse
                </table>
            </div>
        </div>
    </div>

    <div class="row padding10">
        <div class="col-xs-5 panel light-grey-gradient" style="border-radius: 12px;box-shadow: 2px 2px 2px rgba(0,0,0,.3);">
            <div class="panel-heading panel-heading-separator no-padding"><span class="">Top 10 Best Kill Streak</span></div>
            <div class="panel-body no-padding">
                <table class="table no-margin" style="border: 0px;">
                    <thead style="font-family: Marcellus SC;"><tr>
                        <th class="col-xs-1 color-gold">#</th>
                        <th class="col-xs-1 color-gold text-center">Rank</th>
                        <th class="col-xs-1 color-gold">Name</th>
                        <th class="col-xs-1 color-gold text-right">KS</th>
                    </tr></thead>
                    @forelse($top10KillStreak as $player)
                        <tr style="border-top: 1px solid #ccc;">
                            <th class="text-muted" style="vertical-align: middle;">{{ $position7++ }}</th>
                            <td style="vertical-align: middle;"><center>{!! Html::image($player->rankImage,'',['title' => $player->rank->name,'class' => 'tooltipster' ,'height' => '38px']) !!}</center></td>
                            <td class="color-main text-bold" style="vertical-align: middle;">{!! Html::image($player->countryImage,$player->country->countryCode,['title' => $player->country->countryName, 'class' => 'tooltipster', 'height' => '16px']) !!}&nbsp;&nbsp;{!! link_to_route('player-detail', $player->nameTrimmed, [$player->name]) !!}</td>
                            <td class="text-muted text-right" style="vertical-align: middle;">{{ $player->best_killstreak }}</td>
                        </tr>
                    @empty
                        <div class="alert alert-dismissible text-left" role="alert" style="color: #777;border: 1px solid #ccc;background: #FFFEE7;line-height: 15px;border-radius: 5px;padding-left: 5px;padding-top: 5px;padding-bottom: 5px;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <small>No data has been collected at this moment.  Please check back later.</small>
                        </div>
                    @endforelse
                </table>
            </div>
        </div>
        <div class="col-xs-5 col-xs-offset-1 panel light-grey-gradient" style="border-radius: 12px;box-shadow: 2px 2px 2px rgba(0,0,0,.3);">
            <div class="panel-heading panel-heading-separator no-padding"><span class="">Top 10 Best Arrest Streak</span></div>
            <div class="panel-body no-padding">
                <table class="table no-margin" style="border: 0px;">
                    <thead style="font-family: Marcellus SC;"><tr>
                        <th class="col-xs-1 color-gold">#</th>
                        <th class="col-xs-1 color-gold text-center">Rank</th>
                        <th class="col-xs-1 color-gold">Name</th>
                        <th class="text-right col-xs-1 color-gold">AS</th>
                    </tr></thead>
                    @forelse($top10ArrestStreak as $player)
                        <tr style="border-top: 1px solid #ccc;">
                            <th class="text-muted" style="vertical-align: middle;">{{ $position8++ }}</th>
                            <td style="vertical-align: middle;"><center>{!! Html::image($player->rankImage,'',['title' => $player->rank->name,'class' => 'tooltipster' ,'height' => '38px']) !!}</center></td>
                            <td class="color-main text-bold" style="vertical-align: middle;">{!! Html::image($player->countryImage,$player->country->countryCode,['title' => $player->country->countryName, 'class' => 'tooltipster', 'height' => '16px']) !!}&nbsp;&nbsp;{!! link_to_route('player-detail', $player->nameTrimmed, [$player->name]) !!}</td>
                            <td class="text-muted text-right" style="vertical-align: middle;">{{ $player->best_arreststreak }}</td>
                        </tr>
                    @empty
                        <div class="alert alert-dismissible text-left" role="alert" style="color: #777;border: 1px solid #ccc;background: #FFFEE7;line-height: 15px;border-radius: 5px;padding-left: 5px;padding-top: 5px;padding-bottom: 5px;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <small>No data has been collected at this moment.  Please check back later.</small>
                        </div>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
    </div>

@endsection