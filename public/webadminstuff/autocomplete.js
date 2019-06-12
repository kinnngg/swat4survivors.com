	var suggestions = new Array(
	
	"getplayers",
	"balanceteams",
	"lockteams",
	"getbans",
	"gettempbans",
	"addban",
	"removeban",
	"help",
	"info",
	"sc",
	"motd",
	"saveconfig",
	"ammenu",
	"restart",
	"restoresag",
	"restoremaps",
	"savemaps",
	"getmaps",
	"getsavedmaps",
	"setmap",
	"removemap",
	"addmap",
	"kickban",
	"kick",
	"makevip",
	"forcename",
	"forcelesslethal",
	"switchteam",
	"switchall",
	"lockeddefaultteam",
	"forceleader",
	"addreplacement",
	"removereplacement",
	"getreplacements",
	"say",
	"as",
	"lockmaplist",
	"forcenoweapons",
	"forcespec",
	"forceview",
	"forcejoin",
	"pause",
	"forcemute",
	"assay",
	"forcenosting",
	"forcenoflash",
	"forcenogas",
	"forcenotaser",
	"forcenopepperspray",
	"forcenopepperball",
	"forcenobeanbag",
	"anticheatstatus",
	"abortgame",
	"startgame",
	
	"sc ",
	"sc set ",
	"sc get ",
	
	"sc set AMMod.",
	"sc get AMMod.",
	
	"sc set AMMod.AMAccessControl",
	"sc get AMMod.AMAccessControl",
	
	"sc set AMMod.AMAdmin",
	"sc get AMMod.AMAdmin",
	
	"sc set AMMod.AMBroadcastHandler",
	"sc get AMMod.AMBroadcastHandler",
	
	"sc set AMMod.AMServerQuery",
	"sc get AMMod.AMServerQuery",
	
	"sc set AMMod.AMWebAdminListener",
	"sc get AMMod.AMWebAdminListener",
		
	"sc set AMMod.RQMod",
	"sc get AMMod.RQMod",
	
	"sc set AMMod.RQEventHolder",
	"sc get AMMod.RQEventHolder",
		
	"sc set AMMod.AMGameMod",
	"sc get AMMod.AMGameMod",
		
	"sc set AMMod.RQAntiCheat",
	"sc get AMMod.RQAntiCheat",
		
	"sc set AMMod.RQSounds",
	"sc get AMMod.RQSounds",
	
	"sc set SwatGame.ServerSettings",
	"sc get SwatGame.ServerSettings",
	
	
	
	"sc set AMMod.AMAccessControl DisableVoteBans ",
	"sc get AMMod.AMAccessControl DisableVoteBans",
	
	"sc set AMMod.AMAccessControl GamePassword ",
	"sc get AMMod.AMAccessControl GamePassword",
		
	"sc set AMMod.AMAccessControl MaxJoinPassword ",
	"sc get AMMod.AMAccessControl MaxJoinPassword",
	
	"sc set AMMod.AMAccessControl OnlyAdminsKickForRoom ",
	"sc get AMMod.AMAccessControl OnlyAdminsKickForRoom",
	
	"sc set AMMod.AMAccessControl MaxPlayingClients ",
	"sc get AMMod.AMAccessControl MaxPlayingClients",
	
	"sc set AMMod.AMAccessControl ReservedSlots ",
	"sc get AMMod.AMAccessControl ReservedSlots",
	
	"sc set AMMod.AMAccessControl DisallowNames (\"value1\",\"value2\",\"value3\")",
	"sc get AMMod.AMAccessControl DisallowNames",
	
	"sc set AMMod.AMAccessControl IPPolicies (\"value1\",\"value2\",\"value3\")",
	"sc get AMMod.AMAccessControl IPPolicies",


	"sc set AMMod.AMAdmin AdminPassword ",
	"sc get AMMod.AMAdmin AdminPassword",
	
	"sc set AMMod.AMAdmin AllowSpectators ",
	"sc get AMMod.AMAdmin AllowSpectators",
	
	"sc set AMMod.AMAdmin AllowFreeSpectators ",
	"sc get AMMod.AMAdmin AllowFreeSpectators",
	
	"sc set AMMod.AMAdmin MaxSpectators ",
	"sc get AMMod.AMAdmin MaxSpectators",
	
	"sc set AMMod.AMAdmin OnlyAdminSpectators ",
	"sc get AMMod.AMAdmin OnlyAdminSpectators",
	
	"sc set AMMod.AMAdmin ShowIPBans ",
	"sc get AMMod.AMAdmin ShowIPBans",
	
	"sc set AMMod.AMAdmin SuperAdminPassword ",
	"sc get AMMod.AMAdmin SuperAdminPassword",
	
	"sc set AMMod.AMAdmin SuperAdminCommands (\"value1\",\"value2\",\"value3\")",
	"sc get AMMod.AMAdmin SuperAdminCommands",
	
	"sc set AMMod.AMAdmin TextAndColourForAdminText ",
	"sc get AMMod.AMAdmin TextAndColourForAdminText",
	

	"sc set AMMod.AMBroadcastHandler IgnoreSpammingAdmins ",
	"sc get AMMod.AMBroadcastHandler IgnoreSpammingAdmins",
	
	"sc set AMMod.AMBroadcastHandler IgnoreSpammingSuperAdmins ",
	"sc get AMMod.AMBroadcastHandler IgnoreSpammingSuperAdmins",
	
	"sc set AMMod.AMBroadcastHandler LogChat ",
	"sc get AMMod.AMBroadcastHandler LogChat",
	
	"sc set AMMod.AMBroadcastHandler MaxChatAllowed ",
	"sc get AMMod.AMBroadcastHandler MaxChatAllowed",
	
	"sc set AMMod.AMBroadcastHandler MaxChatAllowedPeriod ",
	"sc get AMMod.AMBroadcastHandler MaxChatAllowedPeriod",
	
	"sc set AMMod.AMBroadcastHandler MuteTime ",
	"sc get AMMod.AMBroadcastHandler MuteTime",
	
	"sc set AMMod.AMBroadcastHandler AllowColorText ",
	"sc get AMMod.AMBroadcastHandler AllowColorText",
	
	"sc set AMMod.AMBroadcastHandler AllowAdminsColorText ",
	"sc get AMMod.AMBroadcastHandler AllowAdminsColorText",
	
	"sc set AMMod.AMBroadcastHandler AllowMultipleMsg ",
	"sc get AMMod.AMBroadcastHandler AllowMultipleMsg",
	
	"sc set AMMod.AMBroadcastHandler AllowAdminsMultipleMsg ",
	"sc get AMMod.AMBroadcastHandler AllowAdminsMultipleMsg",
	
	"sc set AMMod.AMBroadcastHandler MinTimeBetweenMsg ",
	"sc get AMMod.AMBroadcastHandler MinTimeBetweenMsg",
	
	"sc set AMMod.AMBroadcastHandler bMuteSpectators ",
	"sc get AMMod.AMBroadcastHandler bMuteSpectators",
	
	"sc set AMMod.AMBroadcastHandler bPartitionSpectators ",
	"sc get AMMod.AMBroadcastHandler bPartitionSpectators",
	
	"sc set AMMod.AMBroadcastHandler RestrictedWords (\"value1\",\"value2\",\"value3\")",
	"sc get AMMod.AMBroadcastHandler RestrictedWords",
	
	"sc set AMMod.AMBroadcastHandler RestrictedWordsWarningInterval ",
	"sc get AMMod.AMBroadcastHandler RestrictedWordsWarningInterval",
	
	"sc set AMMod.AMBroadcastHandler RestrictedWordsAction ",
	"sc get AMMod.AMBroadcastHandler RestrictedWordsAction",
	
	"sc set AMMod.AMBroadcastHandler RestrictedWordsActionLevel ",
	"sc get AMMod.AMBroadcastHandler RestrictedWordsActionLevel",
	

	"sc set AMMod.AMServerQuery ServerQueryListenPort ",
	"sc get AMMod.AMServerQuery ServerQueryListenPort",
	
	"sc set AMMod.AMServerQuery TestAllStats ",
	"sc get AMMod.AMServerQuery TestAllStats",
	

	"sc set AMMod.AMWebAdminListener WebAdminListenPort ",
	"sc get AMMod.AMWebAdminListener WebAdminListenPort",
	
	"sc set AMMod.AMWebAdminListener WebAdminUsers (\"value1\",\"value2\",\"value3\")",
	"sc get AMMod.AMWebAdminListener WebAdminUsers",
	
	"sc set AMMod.AMWebAdminListener WebAdminUser<ID>GarantedCommands (\"value1\",\"value2\",\"value3\")",
	"sc get AMMod.AMWebAdminListener WebAdminUser<ID>GarantedCommands",
	
	"sc set AMMod.AMWebAdminListener WebAdminUser<ID>RevokedCommands (\"value1\",\"value2\",\"value3\")",
	"sc get AMMod.AMWebAdminListener WebAdminUser<ID>RevokedCommands",
	
	"sc set AMMod.AMWebAdminListener WebAdminUsers (\"value1\",\"value2\",\"value3\")",
	"sc get AMMod.AMWebAdminListener WebAdminUsers",
	
	"sc set AMMod.AMWebAdminListener WebAdminCSSLink ",
	"sc get AMMod.AMWebAdminListener WebAdminCSSLink",
	

	"sc set AMMod.RQMod KillCampers ",
	"sc get AMMod.RQMod KillCampers",
	
	"sc set AMMod.RQMod EnableSpawnProtection ",
	"sc get AMMod.RQMod EnableSpawnProtection",
	
	"sc set AMMod.RQMod EnableAntiBug ",
	"sc get AMMod.RQMod EnableAntiBug",
	
	"sc set AMMod.RQMod ReportAdminAboutBugging ",
	"sc get AMMod.RQMod ReportAdminAboutBugging",
	
	"sc set AMMod.RQMod InitialCampWarningInterval ",
	"sc get AMMod.RQMod InitialCampWarningInterval",
	
	"sc set AMMod.RQMod CampWarningInterval ",
	"sc get AMMod.RQMod CampWarningInterval",
	
	"sc set AMMod.RQMod MaxCampTime ",
	"sc get AMMod.RQMod MaxCampTime",
	
	"sc set AMMod.RQMod SpawnProtectionTime ",
	"sc get AMMod.RQMod SpawnProtectionTime",
	
	"sc set AMMod.RQMod EnableAntiCheat ",
	"sc get AMMod.RQMod EnableAntiCheat",
	
	"sc set AMMod.RQMod UseRedQueenAdminRanks ",
	"sc get AMMod.RQMod UseRedQueenAdminRanks",
	
	"sc set AMMod.RQMod FillServerWithBots ",
	"sc get AMMod.RQMod FillServerWithBots",
	
	"sc set AMMod.RQMod NumberOfFixedPlayers ",
	"sc get AMMod.RQMod NumberOfFixedPlayers",
	
	"sc set AMMod.RQMod BotNameA ",
	"sc get AMMod.RQMod BotNameA",
	
	"sc set AMMod.RQMod BotNameB ",
	"sc get AMMod.RQMod BotNameB",
	
	"sc set AMMod.RQMod BotNameC ",
	"sc get AMMod.RQMod BotNameC",
	
	"sc set AMMod.RQMod BotNameD ",
	"sc get AMMod.RQMod BotNameD",
	
	"sc set AMMod.RQMod BotNameE ",
	"sc get AMMod.RQMod BotNameE",
	
	"sc set AMMod.RQMod BotNameF ",
	"sc get AMMod.RQMod BotNameF",
	
	"sc set AMMod.RQMod BotNameG ",
	"sc get AMMod.RQMod BotNameG",
	
	"sc set AMMod.RQMod BotNameH ",
	"sc get AMMod.RQMod BotNameH",
	
	"sc set AMMod.RQMod BotNameI ",
	"sc get AMMod.RQMod BotNameI",
	
	"sc set AMMod.RQMod BotNameJ ",
	"sc get AMMod.RQMod BotNameJ",
	
	"sc set AMMod.RQMod ReduceLag ",
	"sc get AMMod.RQMod ReduceLag",

	"sc set AMMod.RQEventHolder CampingAction ",
	"sc get AMMod.RQEventHolder CampingAction",
	
	"sc set AMMod.RQEventHolder CampingActionLevel ",
	"sc get AMMod.RQEventHolder CampingActionLevel",
	
	"sc set AMMod.RQEventHolder DropWhileArrestedAction ",
	"sc get AMMod.RQEventHolder DropWhileArrestedAction",

	"sc set AMMod.AMGameMod AutoAction (\"value1\",\"value2\",\"value3\")", 
	"sc get AMMod.AMGameMod AutoAction", 
	
	"sc set AMMod.AMGameMod BaseMOTD ",
	"sc get AMMod.AMGameMod BaseMOTD",
	
	"sc set AMMod.AMGameMod BroadCastToAllAdmins ",
	"sc get AMMod.AMGameMod BroadCastToAllAdmins",
	
	"sc set AMMod.AMGameMod DisableMod ",
	"sc get AMMod.AMGameMod DisableMod",
	
	"sc set AMMod.AMGameMod CaseCoordinates (\"value1\",\"value2\",\"value3\")", 
	"sc get AMMod.AMGameMod CaseCoordinates", 
	
	"sc set AMMod.AMGameMod FlushVariables ",
	"sc get AMMod.AMGameMod FlushVariables",
	
	"sc set AMMod.AMGameMod ForceEquipment ",
	"sc get AMMod.AMGameMod ForceEquipment",
	
	"sc set AMMod.AMGameMod IdleAction ",
	"sc get AMMod.AMGameMod IdleAction",
	
	"sc set AMMod.AMGameMod IdleActionTime ",
	"sc get AMMod.AMGameMod IdleActionTime",
	
	"sc set AMMod.AMGameMod IdleAdminAction ",
	"sc get AMMod.AMGameMod IdleAdminAction",
	
	"sc set AMMod.AMGameMod IdleSubAdminAction ",
	"sc get AMMod.AMGameMod IdleSubAdminAction",
	
	"sc set AMMod.AMGameMod IdleWarningInterval ",
	"sc get AMMod.AMGameMod IdleWarningInterval",
	
	"sc set AMMod.AMGameMod IgnoreHighPingAdmins ",
	"sc get AMMod.AMGameMod IgnoreHighPingAdmins",
	
	"sc set AMMod.AMGameMod IgnoreHighPingSubAdmins ",
	"sc get AMMod.AMGameMod IgnoreHighPingSubAdmins",
	
	"sc set AMMod.AMGameMod InitialIdleWarningInterval ",
	"sc get AMMod.AMGameMod InitialIdleWarningInterval",
	
	"sc set AMMod.AMGameMod LockedDefaultTeam ",
	"sc get AMMod.AMGameMod LockedDefaultTeam",
	
	"sc set AMMod.AMGameMod LockedGameType ",
	"sc get AMMod.AMGameMod LockedGameType",
	
	"sc set AMMod.AMGameMod LockedServerName ",
	"sc get AMMod.AMGameMod LockedServerName",
	
	"sc set AMMod.AMGameMod LockMapList ",
	"sc get AMMod.AMGameMod LockMapList",
	
	"sc set AMMod.AMGameMod MaxPlayerPing ",
	"sc get AMMod.AMGameMod MaxPlayerPing",
	
	"sc set AMMod.AMGameMod MOTD ",
	"sc get AMMod.AMGameMod MOTD",
	
	"sc set AMMod.AMGameMod PingKickTime ",
	"sc get AMMod.AMGameMod PingKickTime",
	
	"sc set AMMod.AMGameMod PingWarningInterval ",
	"sc get AMMod.AMGameMod PingWarningInterval",
	
	"sc set AMMod.AMGameMod ReplaceEquipment (\"value1\",\"value2\",\"value3\")", 
	"sc get AMMod.AMGameMod ReplaceEquipment", 
	
	"sc set AMMod.AMGameMod ShowKickRoomMessage ",
	"sc get AMMod.AMGameMod ShowKickRoomMessage",
	
	"sc set AMMod.AMGameMod StrictPlayerNames ",
	"sc get AMMod.AMGameMod StrictPlayerNames",
	
	"sc set AMMod.AMGameMod SuspectArrestTime ",
	"sc get AMMod.AMGameMod SuspectArrestTime",
	
	"sc set AMMod.AMGameMod SuspectCaseTime ",
	"sc get AMMod.AMGameMod SuspectCaseTime",
	
	"sc set AMMod.AMGameMod TeamKillAction ",
	"sc get AMMod.AMGameMod TeamKillAction",
	
	"sc set AMMod.AMGameMod TeamKillActionAdminPresent ",
	"sc get AMMod.AMGameMod TeamKillActionAdminPresent",
	
	"sc set AMMod.AMGameMod TeamKillActionLevel ",
	"sc get AMMod.AMGameMod TeamKillActionLevel",
	
	"sc set AMMod.AMGameMod TeamSpread ",
	"sc get AMMod.AMGameMod TeamSpread",
	
	"sc set AMMod.AMGameMod UniquePlayerNames ",
	"sc get AMMod.AMGameMod UniquePlayerNames",
	
	"sc set AMMod.AMGameMod VIPKillAction ",
	"sc get AMMod.AMGameMod VIPKillAction",
	
	"sc set AMMod.AMGameMod VIPKillActionKills ",
	"sc get AMMod.AMGameMod VIPKillActionKills",
	

	"sc set SwatGame.ServerSettings GameType ",
	"sc get SwatGame.ServerSettings GameType",
	
	"sc set SwatGame.ServerSettings ServerName ",
	"sc get SwatGame.ServerSettings ServerName",
	
	"sc set SwatGame.ServerSettings PasswordbPassworded ",
	"sc get SwatGame.ServerSettings PasswordbPassworded",
	
	"sc set SwatGame.ServerSettings bLAN ",
	"sc get SwatGame.ServerSettings bLAN",
	
	"sc set SwatGame.ServerSettings MapIndex ",
	"sc get SwatGame.ServerSettings MapIndex",
	
	"sc set SwatGame.ServerSettings NumRounds ",
	"sc get SwatGame.ServerSettings NumRounds",
	
	"sc set SwatGame.ServerSettings MaxPlayers ",
	"sc get SwatGame.ServerSettings MaxPlayers",
	
	"sc set SwatGame.ServerSettings DeathLimit ",
	"sc get SwatGame.ServerSettings DeathLimit",
	
	"sc set SwatGame.ServerSettings PostGameTimeLimit ",
	"sc get SwatGame.ServerSettings PostGameTimeLimit",
	
	"sc set SwatGame.ServerSettings RoundTimeLimit ",
	"sc get SwatGame.ServerSettings RoundTimeLimit",
	
	"sc set SwatGame.ServerSettings MPMissionReadyTime ",
	"sc get SwatGame.ServerSettings MPMissionReadyTime",
	
	"sc set SwatGame.ServerSettings bShowTeammateNames ",
	"sc get SwatGame.ServerSettings bShowTeammateNames",
	
	"sc set SwatGame.ServerSettings bShowEnemyNames ",
	"sc get SwatGame.ServerSettings bShowEnemyNames",
	
	"sc set SwatGame.ServerSettings bNoRespawn ",
	"sc get SwatGame.ServerSettings bNoRespawn",
	
	"sc set SwatGame.ServerSettings bQuickRoundReset ",
	"sc get SwatGame.ServerSettings bQuickRoundReset",
	
	"sc set SwatGame.ServerSettings FriendlyFireAmount ",
	"sc get SwatGame.ServerSettings FriendlyFireAmount",
	
	"sc set SwatGame.ServerSettings DesiredMPEntryPoint ",
	"sc get SwatGame.ServerSettings DesiredMPEntryPoint",
	
	"sc set SwatGame.ServerSettings NumMaps ",
	"sc get SwatGame.ServerSettings NumMaps",
	
	"sc set SwatGame.ServerSettings Maps ",
	"sc get SwatGame.ServerSettings Maps",
	
	"sc set SwatGame.ServerSettings RoundNumber ",
	"sc get SwatGame.ServerSettings RoundNumber",
	
	"sc set SwatGame.ServerSettings EnemyFireAmount ",
	"sc get SwatGame.ServerSettings EnemyFireAmount",
	
	
	"sc set AMMod.RQSounds SaySound ",
	"sc get AMMod.RQSounds SaySound",
	
	"sc set AMMod.RQSounds AdminSaySound ",
	"sc get AMMod.RQSounds AdminSaySound",
	
	"sc set AMMod.RQSounds MuteSound ",
	"sc get AMMod.RQSounds MuteSound",
	
	"sc set AMMod.RQSounds WarningMessageSound ",
	"sc get AMMod.RQSounds WarningMessageSound",
	
	"sc set AMMod.RQSounds FirstBloodSound ",
	"sc get AMMod.RQSounds FirstBloodSound",
	
	"sc set AMMod.RQSounds PlayerLoginSound ",
	"sc get AMMod.RQSounds PlayerLoginSound",
	
	
	"sc set AMMod.RQAntiCheat NoRecoilSensitivity ",
	"sc get AMMod.RQAntiCheat NoRecoilSensitivity",
	
	"sc set AMMod.RQAntiCheat LongArmsSensitivity ",
	"sc get AMMod.RQAntiCheat LongArmsSensitivity",
	
	"sc set AMMod.RQAntiCheat WeaponModificationSensitivity ",
	"sc get AMMod.RQAntiCheat WeaponModificationSensitivity",
	
	"sc set AMMod.RQAntiCheat FixPing ",
	"sc get AMMod.RQAntiCheat FixPing"
	
	);
	var outp;
	var oldins;
	var posi = -1;
	var words = new Array();
	var input;
	var key;

	function setVisible(visi){
		var x = document.getElementById("shadow");
		var t = document.getElementsByName("consoleinput")[0];
		x.style.position = 'absolute';
		x.style.top =  (findPosY(t)+3)+"px";
		x.style.left = (findPosX(t)+2)+"px";
		x.style.visibility = visi;
	}

	function init(){
		outp = document.getElementById("output");
		window.setInterval("lookAt()", 100);
		setVisible("hidden");
		document.onkeydown = keygetter; //needed for Opera...
		document.onkeyup = keyHandler;
	}

	function findPosX(obj)
	{
		var curleft = 0;
		if (obj.offsetParent){
			while (obj.offsetParent){
				curleft += obj.offsetLeft;
				obj = obj.offsetParent;
			}
		}
		else if (obj.x)
			curleft += obj.x;
		return curleft;
	}

	function findPosY(obj)
	{
		var curtop = 0;
		if (obj.offsetParent){
			curtop += obj.offsetHeight;
			while (obj.offsetParent){
				curtop += obj.offsetTop;
				obj = obj.offsetParent;
			}
		}
		else if (obj.y){
			curtop += obj.y;
			curtop += obj.height;
		}
		return curtop;
	}
	
	function lookAt(){
		var ins = document.getElementsByName("consoleinput")[0].value;
		if (oldins == ins) return;
		else if (posi > -1);
		else if (ins.length > 0){
			words = getWord(ins);
			if (words.length > 0){
				clearOutput();
				for (var i=0;i < words.length; ++i) addWord (words[i]);
				setVisible("visible");
				input = document.getElementsByName("consoleinput")[0].value;
			}
			else{
				setVisible("hidden");
				posi = -1;
			}
		}
		else{
			setVisible("hidden");
			posi = -1;
		}
		oldins = ins;
	}
	
	function addWord(word){
		var sp = document.createElement("div");
		sp.appendChild(document.createTextNode(word));
		sp.onmouseover = mouseHandler;
		sp.onmouseout = mouseHandlerOut;
		sp.onclick = mouseClick;
		outp.appendChild(sp);
	}
	
	function clearOutput(){
		while (outp.hasChildNodes()){
			noten=outp.firstChild;
			outp.removeChild(noten);
		}
		posi = -1;
	}
	
	function getWord(beginning){
		var words = new Array();
		var foundwords = 0;
		for (var i=0;i < suggestions.length; ++i)
		{
			
			var explodedword = suggestions[i].toUpperCase();
			
			correct = 0;
			if ( explodedword.indexOf(beginning.toUpperCase()) > -1 )
			{
				correct = 1;
			}
			if (correct == 1)
			{
				words[words.length] = suggestions[i];
				foundwords = foundwords + 1;
				if ( foundwords >= 15 )
					break;
			}
		}
		if ( foundwords > 0 )
			words[words.length] = "[close]";
		return words;
	}
	
	function setColor (_posi, _color, _forg){
		outp.childNodes[_posi].style.background = _color;
		outp.childNodes[_posi].style.color = _forg;
	}
	
	function keygetter(event){
		if (!event && window.event) event = window.event;
		if (event) key = event.keyCode;
		else key = event.which;
	}
		
	function keyHandler(event){
		if (document.getElementById("shadow").style.visibility == "visible"){
		var textfield = document.getElementsByName("consoleinput")[0];
		if (key == 40){ //Key down
			//alert (words);
			if (words.length > 0 && posi < words.length-1){
				if (posi >=0) setColor(posi, "#fff", "black");
				else input = textfield.value;
				setColor(++posi, "blue", "white");
				textfield.value = outp.childNodes[posi].firstChild.nodeValue;
			}
		}
		else if (key == 38){ //Key up
			if (words.length > 0 && posi >= 0){
				if (posi >=1){
					setColor(posi, "#fff", "black");
					setColor(--posi, "blue", "white");
					textfield.value = outp.childNodes[posi].firstChild.nodeValue;
				}
				else{
					setColor(posi, "#fff", "black");
					textfield.value = input;
					textfield.focus();
					posi--;
				}
			}
		}
		else if (key == 27){ // Esc
			textfield.value = input;
			setVisible("hidden");
			posi = -1;
			oldins = input;
		}
		else if (key == 8){ // Backspace
			posi = -1;
			oldins=-1;
		}
		else
		{
			posi = -1;
			oldins=-1;
		}
		}
	}
	
	var mouseHandler=function(){
		for (var i=0; i < words.length; ++i)
			setColor (i, "white", "black");
	
		this.style.background = "blue";
		this.style.color= "white";
	}
	
	var mouseHandlerOut=function(){
		this.style.background = "white";
		this.style.color= "black";
	}
	
	var mouseClick=function(){
		
		if ( this.firstChild.nodeValue != "[close]" )
			document.getElementsByName("consoleinput")[0].value = this.firstChild.nodeValue;
		
		setVisible("hidden");
		posi = -1;
		
		if ( this.firstChild.nodeValue != "[close]" )
			oldins = this.firstChild.nodeValue;
	}

