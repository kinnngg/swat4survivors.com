@extends('layouts.main')
@section('title','Rules all should respect')
@section('main-container')

<style>
    .light-grey-gradient3
    {
        /*background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);*/
        background: linear-gradient(#3b3b3b, #0c0c0c);
    }
    .panel-heading-separator3
    {
        margin-left: 10px;
        margin-right: 10px !important;
        padding-bottom: 6px;
        margin-bottom: 8px;
        border-bottom: 2px dashed #FF69B4;
    }
    .panel-heading
    {
        color: #fff;
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
    .color-gold
    {
        color: #ffd700 !important;
        text-shadow: 2px 2px 5px #DAA520;
    }
</style>
    <div class="content col-xs-9">

        <div class="panel light-grey-gradient3" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);padding: 20px;">
            <div class="panel-heading panel-heading-separator3 no-padding">
                Rules of Swat4Survivors
            </div>
            <div class="panel-body">
                <ul class="ruleslist text-muted" style="list-style-type: square; font-family: 'Ubuntu', Helvetica, Arial, sans-serif;">
                    <li>Use of any type of hacks is not allowed.</li>
                    <li>Be <b>polite</b>. Insulting others will not be tolerated.</li>
                    <li><b class="text-danger">Racism</b>, <b class="text-danger">Hatred</b>, etc are <b class="text-danger">strictly</b> prohibited. This may lead to permanent ban.</li>
                    <li>Using bugs/glitches of any kind is not allowed.</li>
                    <li>Do not start kick/map/ask/taser votes without reason.</li>
                    <li>Do not team -kill, -nade, -tase, etc. on purpose.</li>
                    <li>Do not kill or steal arrests.</li>
                    <li>Hard <b>camping</b> is strictly <b>prohibited</b>. <i>( tactical camping  allowed )</i></li>
                    <li>Tactical camping is only a short wait of 15-20 seconds.</li>
                    <li>Do not spam/flood/attack the server.</li>
                    <li>Do not use another player's name. <b>Impersonation</b> will get you banned.</li>
                    <li>If you find any admin/superadmin <b>misusing his powers</b>, plz <b>shout</b> at shoutbox.</li>
                    <li><b>Respect Swat4Survivors & |nGGz|TEAM</b></li>
                </ul>
                <p class="text-muted">
                  (<b class="text-danger">3 seconds rule:</b> Spawn nade/gas/etc. or killing is <b>NOT</b> allowed until <b>3 seconds</b> has elapsed after respawn.<br><u>But if the respawned player move out of</u> <b class="text-danger">RESPAWN AREA</b> during 3s after respawn, <b>he can be killed or naded</b>).
                </p>
                <br>
                <p style="padding-bottom:20px" class="text-muted">Respect these rules so everyone can have a fun gameplay experience or <span class="text-bold">risk getting kicked/banned</span>.</p>
                <p class="text-muted"><small><i>Note: Swat 4 Survivors & |nGGz|TEAM reserves the right to change the rules with or without any notice.</i></small></p>
            </div>
        </div>

        @if(Auth::check() && Auth::user()->isAdmin())
        <div class="panel light-grey-gradient3" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);padding: 20px;">
            <div class="panel-heading panel-heading-separator3 no-padding">
                <!--<h3 class="text"><b>Rules/Guide for </b>&nbsp;<i title="Administrator" class="tooltipster fa fa-user-secret fa-2x"></i> Administrators</h3>-->
                Rules and Guide for Administrators
            </div>
            <div class="panel-body">
                <p class="text-muted">
                  In general, if there's <span class="text-danger">bad player behavior</span>, always try to defuse the situation. Try to talk sense, switch team, etc.  The
                  mod on our server has a lot of built in functions.  Please try to allow the mod to work before taking action unless needed.
                </p>
                <p style="margin-bottom:0;font-weight:bold" class="text-muted">
                  If the situation cannot be solved in a <u>mature way</u>:
                </p>
                <ul class="ruleslist text-muted" style="list-style-type: square;font-family: 'Ubuntu', Helvetica, Arial, sans-serif;">
                    <li>Issue at least a clear warning first. (make sure the player reads/understands what he's doing wrong)</li>
                    <li>Issue a clear second warning. <i>(optional)</i></li>
                    <ul class="ruleslist text-muted" style="list-style-type: circle;font-family: 'Ubuntu', Helvetica, Arial, sans-serif;">
                        <li>Force Mute</li>
                        <li>Kick</li>
                        <li>No Weapons</li>
                        <li>No Less Lethal</li>
                        <li>No Taser</i>
                        <li>No Sting Grenades</li>
                        <li>No Flash Grenades</li>
                        <li>No Gas Grenades</li>
                        <li>No Pepper Spray</li>
                        <li>No Pepper Ball Gun</li>
                    </ul>
                    <li class="text-muted">No improvements:<!-- <b>FORCE MUTE / KICK / NOWEAPONS</b> again.--></li>
                    <ul class="ruleslist text-muted" style="list-style-type: circle;font-family: 'Ubuntu', Helvetica, Arial, sans-serif;">
                        <li>Force Mute</li>
                        <li>Kick</li>
                        <li>No Weapons</li>
                        <li>No Less Lethal</li>
                        <li>No Taser</i>
                        <li>No Sting Grenades</li>
                        <li>No Flash Grenades</li>
                        <li>No Gas Grenades</li>
                        <li>No Pepper Spray</li>
                        <li>No Pepper Ball Gun</li>
                    </ul>
                    <li>Still no improvement <b>BAN</b>!</li>
                </ul>

                <p style="margin-bottom:0;font-weight:bold" class="text-muted">
                  Bans should <span class="text-danger">ONLY</span> be used as a last resort for:
                </p>
                <ul class="ruleslist text-muted" style="list-style-type: square;font-family: 'Ubuntu', Helvetica, Arial, sans-serif;">
                    <li>Obvious use of <u>cheats/bugs</u> if the mod does not detect it.</li>
                    <li>Harming the server of any type. (Ddos/hacks etc)</li>
                    <li>Repeatedly messing up the gameplay purposely, such as:</li>
                    <ul class="ruleslist" style="list-style-type: circle;font-family: 'Ubuntu', Helvetica, Arial, sans-serif;">
                        <li>Repeated <b>team killing</b> (<span class="text-danger">5 days ban</span>).</li>
                        <li>Repeated <b>team hurt/nade/gas/sprays</b> (<span class="text-danger">3 days ban</span>).</li>
                        <li>Arrest <b>drops</b> (<span class="text-danger">5 days ban</span>).</li>
                        <li>Repeated <b>blockings</b> (<span class="text-danger">1 day ban</span>).</li>
                        <li>Repeated <b>arrest stealings</b> (<span class="text-danger">3 days ban</span>).</li>
                        <li>Repeated <b>team tasing</b> (<span class="text-danger">3 days ban</span>).</li>
                        <li>Repeated <b>arrest killing</b> (<span class="text-danger">5 days ban</span>).</li>
                    </ul>
                </ul>
                <p class="text-muted">
                  Our server runs a spawn protection system and will not allow <b>spawn kill/nade/gas/etc</b> before 3 seconds is <b>NOT allowed</b>. Unless player just happened to be there in time of spawn, then kill is <b class="text-green">allowed</b>.If someone violates this rule, you give him <u>warning</u>, if he repeat same, you give can give second warning, next repeat <b class="text-danger">KICK</b>.
                </p>
                <p class="text-muted">
                  (<b class="text-danger">3 seconds rule:</b> Spawn nade/gas/etc. or killing is <b>NOT</b> allowed until <b>3 seconds</b> has elapsed after respawn.<br><u>But if the respawned player move out of</u> <b class="text-danger">RESPAWN AREA</b> during 3s after respawn, <b>he can be killed or naded</b>).
                </p>
                <ul class="ruleslist text-muted" style="list-style-type: square;font-family: 'Ubuntu', Helvetica, Arial, sans-serif;">
                  <li>
                    <b>Insults - RACISM - Nationalist talks - Religion Insult = <span class="text-danger">MUTE</span></b>, if player continue with his dirty talk by reconnecting or changing his nick to another insult = <b class="text-danger">KICK</b>, if that's not enough and he continue = <b class="text-danger">BAN</b> him on server and <b class="text-danger">MUTE</b> him on website.<br>
                    As a last resort even <b class="text-danger">BAN</b> on website too. Same for dirty talk on <u>Website Shoutbox</u>. <small class="text-danger">(BAN time for this decided by admin)</small>
                  </li>
                  <li class="text-info"><b>KICK,BAN or any other admin action againts a player who is <span class="text-danger">ACCUSED FOR CAMP</span> is NOT ALLOWED, Because S4S SERVER already have <u class="text-success">ANTI-CAMP SYSTEM inbuilt.</u></b></li>
                  <li>You cannot <b>unban</b> the <b class="text-danger">BANNED PLAYERS</b> who are not banned by your hands. Rather you should speak to admin who banned that player and if he agree you can unban.</li>
                  <li><b>SERVER DEFAULT SETTING</b> should not be changed without <b>SUPER ADMINISTRATOR</b>'s support.</li>
                </ul>
                <p class="text-muted">
                  THIS RULES MUST BE RESPECTED, <b>PENALTIES FOR PLAYER</b> WHICH HAVE VOILATED SERVER FULES MUST NOT BE INCREASED, <b>MAY ONLY BE REDUCED,</b> DEPENDS ON ADMIN.
                </p>
                <p style="margin-bottom:0;font-weight:bold">
                  <b class="text-info">SERVER DEFAULT SETTING</b>
                </p>
                <ul class="ruleslist text-muted" style="list-style-type: circle;font-family: 'Ubuntu', Helvetica, Arial, sans-serif;">
                  <li><b>Round Time:</b> <span class="color-gold">20:00</span></li>
                  <li><b>Time b/w rounds:</b> <span class="color-gold">0:05</span></li>
                  <li><b>Mission ready time:</b>  <span class="color-gold">0:15</span></li>
                  <li><b>No. of Rounds:</b> <span class="color-gold">3</span></li>
                  <li><b>Friendly fire:</b> <span class="color-gold">100%</span></li>
                  <li><b>Maps:</b> <span class="color-gold">Food, Bomb, FF, WP</span></li>
                  <li><b>Slots:</b> <span class="color-gold">12</span></li>
                </ul>
                <p class="text-muted">
                  FAIR PLAY IS THE BEST PLAY!<br>
                  <b>Swat 4 Survivors</b>
                </p>
            </div>
        </div>
        @endif

    </div>
@endsection
