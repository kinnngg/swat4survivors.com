<style>
    .light-grey-gradientxc
    {
        /*background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);*/
        background: linear-gradient(#3b3b3b, #0c0c0c) !important;
    }
    .panel-heading-separatorxc
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
        font-family: 'Marcellus SC' !important;
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
        font-family: 'Marcellus SC' !important;
    }
    .table
    {
        padding: 14px !important;
        /*background-color: #FFF;*/
        border: 1px solid #CCC;
    }
    .a-primary
    {
        color: #fff !important;
    }
    .color-gold
    {
        color: #ffd700 !important;
        text-shadow: 2px 2px 5px #DAA520;
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
    #adminsrvcommandform
    {
        background: linear-gradient(#3b3b3b, #0c0c0c) !important;
        width: 400px !important;
        box-sizing: none;
    }
</style>

{!! Form::open(['route' => 'kossrvadmin.commands','id' => 'adminsrvcommandform','class' => 'form-horizontal form']) !!}
<div id="inline1">
    <div class="container" style="width:400px;">
        <div class="row row-no-gutters">
            <div class="col-xs-4 text-center">
                <p class="text-center"><small>Taser Only</small></p>
                <button id="playerTONbtn" data-type="taseronly true" title="Taseronly On"
                        class="adminsrvcommandbtn  btn btn-success btn-xs"><i class="far fa-check"></i>
                </button>
                <button id="playerTOFFbtn" data-type="taseronly false" title="Taseronly Off"
                        class="adminsrvcommandbtn  btn btn-danger btn-xs"><i class="far fa-ban"></i>
                </button>
            </div>
            <div class="col-xs-4 text-center">
                <p class="text-center"><small>Pythons Only</small></p>
                <button id="playerPYONbtn" data-type="pythononly true" title="Pythons On"
                        class="adminsrvcommandbtn  btn btn-success btn-xs"><i class="far fa-check"></i>
                </button>
                <button id="playerPYOFFbtn" data-type="pythononly false" title="Pythons Off"
                        class="adminsrvcommandbtn  btn btn-danger btn-xs"><i class="far fa-ban"></i>
                </button>
            </div>
            <div class="col-xs-4 text-center">
                <p class="text-center"><small>Pistols Only</small></p>
                <button id="playerPTONbtn" data-type="pistolsonly true" title="Pistols On"
                        class="adminsrvcommandbtn  btn btn-success btn-xs"><i class="far fa-check"></i>
                </button>
                <button id="playerPTOFFbtn" data-type="pistolsonly false" title="Pistols Off"
                        class="adminsrvcommandbtn  btn btn-danger btn-xs"><i class="far fa-ban"></i>
                </button>
            </div>
        </div>

        <div class="row row-no-gutters">
            <div class="col-xs-4 text-center">
                <p class="text-center"><small>Shotguns Only</small></p>
                <button id="playerSHONbtn" data-type="shotgunsonly true" title="Shotguns On"
                        class="adminsrvcommandbtn  btn btn-success btn-xs"><i class="far fa-check"></i>
                </button>
                <button id="playerSHOFFbtn" data-type="shotgunsonly false" title="Shotguns Off"
                        class="adminsrvcommandbtn  btn btn-danger btn-xs"><i class="far fa-ban"></i>
                </button>
            </div>
            <div class="col-xs-4 text-center">
                <p class="text-center"><small>Anti Camp</small></p>
                <button id="playerCONbtn" data-type="anticamp true" title="Anti-Camp On"
                    class="adminsrvcommandbtn  btn btn-success btn-xs"><i class="far fa-check"></i>
                </button>
                <button id="playerCOFFbtn" data-type="anticamp false" title="Anti-Camp Off"
                        class="adminsrvcommandbtn  btn btn-danger btn-xs"><i class="far fa-ban"></i>
                </button>
            </div>
            <div class="col-xs-4 text-center">
                <p class="text-center"><small>Server Options</small></p>
                <button id="playerStartbtn" data-type="startgame" title="Start"
                    class="adminsrvcommandbtn  btn btn-success btn-xs"><i class="far fa-play"></i>
                </button>
                <button id="playerRestartbtn" data-type="restart" title="Restart"
                        class="adminsrvcommandbtn  btn btn-warning btn-xs"><i class="far fa-sync"></i>
                </button>
                <button id="playerAbortbtn" data-type="abortgame" title="Abort"
                        class="adminsrvcommandbtn  btn btn-danger btn-xs"><i class="far fa-stop"></i>
                </button>
            </div>
        </div>

        <div class="row row-no-gutters">
            <div class="col-xs-4 text-center">
                <button id="playerBTbtn" data-type="balanceteams" title="Balance Teams"
                        class="adminsrvcommandbtn  btn btn-primary btn-xs">BalanceTeams
                </button>
            </div>
            <div class="col-xs-4 text-center">
                <button id="playerLTbtn" data-type="lockteams" title="Toggle Lock Teams"
                        class="adminsrvcommandbtn  btn btn-primary btn-xs">LockTeams
                </button>
            </div>
            <div class="col-xs-4 text-center">
                <button id="playerSAbtn" data-type="switchall" title="Switch All"
                        class="adminsrvcommandbtn  btn btn-primary btn-xs">SwitchAll
                </button>
            </div>
        </div>
        
        <div class="row row-no-gutters">
            <div class="col-xs-4 text-center">
                <button id="playerFWbtn" data-type="setmap 0" title="Set Map to FoodWall"
                    class="adminsrvcommandbtn  btn btn-success btn-xs">Map FW
                </button>
            </div>
            <div class="col-xs-4 text-center">
                <button id="playerABbtn" data-type="setmap 1" title="Set Map to A-Bomb Nightclub"
                    class="adminsrvcommandbtn  btn btn-success btn-xs">Map AB
                </button>
            </div>
            <div class="col-xs-4 text-center">
                <button id="playerFFbtn" data-type="setmap 2" title="Set Map to Wolcott Projects"
                    class="adminsrvcommandbtn  btn btn-success btn-xs">Map WP
                </button>
            </div>
        </div>

        <div class="row row-no-gutters">
            <div class="col-xs-12" style="border: 2px dashed grey">
                <h5 class="text-center text-bold">SERVER COMMAND</h5>
                <div class="col-xs-10">
                    {!! Form::text('sccmd',null,['class' => 'form-control col-xs-5 input-sm', 'placeholder' => 'ex: set AMMod.RQMod KillCampers false']) !!}
                </div>
                <button id="playerNWbtn" data-type="sc" type="submit"
                        class="adminsrvcommandbtn btn btn-success btn-sm"><i class="far fa-check"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<div id="admincommand-input-group-error" class="help-block"></div>
{!! Form::close() !!}