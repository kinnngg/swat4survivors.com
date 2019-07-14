{!! Form::open(['route' => 'kosadmin.commands','id' => 'admincommandform']) !!}
<div id="inline1" style="width:400px;">
    <input type="hidden" value="{{ $player }}" name="selected_player">
    <input type="hidden" value="" name="action">

        <h5 class="text-center text-bold">Player Actions</h5>

        <button type="button" id="playerMutebtn" data-type="forcemute" class="admincommandbtn btn btn-default btn-xs">Mute</button>
        <button type="button" id="playerKickbtn" data-type="kick" class="admincommandbtn btn btn-warning btn-xs">Kick</button>
        <button type="button" id="playerBanbtn" data-type="kickban" class="admincommandbtn btn btn-danger btn-xs">Ban</button>
        <button type="button" id="playerViewbtn" data-type="forceview" class="admincommandbtn btn btn-info btn-xs">View</button>
        <button type="button" id="playerSpecbtn" data-type="forcespec" class="admincommandbtn btn btn-info btn-xs">Spectate</button>
        <button type="button" id="playerJoinbtn" data-type="forcejoin" class="admincommandbtn btn btn-info btn-xs">Join</button>
        <button type="button" id="playerSTbtn" data-type="switchteam" class="admincommandbtn btn btn-primary btn-xs">Switch Team</button>

        <h5 class="text-center text-bold">Weapon Actions</h5>
        
        <button id="playerLLbtn" data-type="forcelesslethal" class="admincommandbtn btn btn-primary btn-xs">Less Lethal</button>
        <button id="playerNWbtn" data-type="forcenoweapons" class="admincommandbtn btn btn-primary btn-xs">No Weapons</button>
        <button id="playerNTbtn" data-type="forcenotaser" class="admincommandbtn btn btn-primary btn-xs">No Taser</button>
        <button id="playerNBBbtn" data-type="forcenobeanbag" class="admincommandbtn btn btn-primary btn-xs">No BeanBag</button>
        <button id="playerNPBbtn" data-type="forcenopepperball" class="admincommandbtn btn btn-primary btn-xs">No PepperBall</button>
        <button id="playerNSbtn" data-type="forcenosting" class="admincommandbtn btn btn-primary btn-xs">No Stingers</button>
        <button id="playerNFbtn" data-type="forcenoflash" class="admincommandbtn btn btn-primary btn-xs">No Flashes</button>
        <button id="playerNGbtn" data-type="forcenogas" class="admincommandbtn btn btn-primary btn-xs">No Gas</button>            
        <button id="playerNPSbtn" data-type="forcenopepperspray" class="admincommandbtn btn btn-primary btn-xs">No PepperSpray</button>

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