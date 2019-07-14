{!! Form::open(['route' => 'kossrvadmin.commands','id' => 'adminsrvcommandform','class' => 'form-horizontal form']) !!}
<div id="inline1" style="width:400px;">
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