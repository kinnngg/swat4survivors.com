{!! Form::open(['route' => 'kosadmin.commands','id' => 'admincommandform']) !!}
<div id="inline1" style="width:400px;">
    <input type="hidden" value="{{ $player }}" name="selected_player">
    <input type="hidden" value="" name="action">
    <button id="playerMutebtn" data-type="forcemute"
            class="admincommandbtn btn btn-default btn-sm">Mute
    </button>
    <button id="playerKickbtn" data-type="kick"
            class="admincommandbtn btn btn-warning btn-sm">Kick
    </button>
    <button id="playerBanbtn" data-type="kickban"
            class="admincommandbtn btn btn-danger btn-sm">Ban
    </button>
    <button id="playerViewbtn" data-type="forceview"
            class="admincommandbtn btn btn-info btn-sm">View
    </button>
    <button id="playerSpecbtn" data-type="forcespec"
            class="admincommandbtn btn btn-info btn-sm">Spectate
    </button>
    <button id="playerJoinbtn" data-type="forcejoin"
            class="admincommandbtn btn btn-info btn-sm">Join
    </button>
    <button id="playerSTbtn" data-type="switchteam"
            class="admincommandbtn btn btn-primary btn-sm">Switch Team
    </button>
    <button id="playerLLbtn" data-type="forcelesslethal"
            class="admincommandbtn btn btn-primary btn-sm">Less Lethal
    </button>
    <button id="playerNWbtn" data-type="forcenoweapons"
            class="admincommandbtn btn btn-primary btn-sm">No Weapons
    </button>

    <div class="btn-group">
        <button class="btn btn-info dropdown-toggle" type="button" id="player" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Player Actions
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="player">
            <li><a href="#">Mute</a></li>
            <li><a href="#">Kick</a></li>
            <li><a href="#">Ban</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">View</a></li>
            <li><a href="#">Spectate</a></li>
            <li><a href="#">Join</a></li>
        </ul>
    <!--</div>-->

    <div class="dropdown">
        <button class="btn btn-danger dropdown-toggle" type="button" id="weapon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Weapon Actions
            <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="player">
            <li><a href="#">Mute</a></li>
            <li><a href="#">Kick</a></li>
            <li><a href="#">Ban</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">View</a></li>
            <li><a href="#">Spectate</a></li>
            <li><a href="#">Join</a></li>
        </ul>
    </div>

    </div>

    <br>
    <br>
    <div class="col-xs-12" style="border: 2px dashed grey">
        <h5 class="text-center text-bold">CHANGE NAME</h5>
        <div class="col-xs-8">
    {!! Form::text('forcenametxt',null,['class' => 'form-control col-xs-5 input-sm', 'placeholder' => 'Enter new Name']) !!}
        </div>
        <button id="playerNWbtn" data-type="forcename" type="submit"
                class="admincommandbtn btn btn-success btn-sm">Change Name
        </button>
    </div>
</div>
{!! Form::close() !!}