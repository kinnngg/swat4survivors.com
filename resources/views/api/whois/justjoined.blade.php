<!--[c=FFFF00][b][u]{{ $player->name }}[\u][\b][\c] is coming from [b][c=EBFFFF]{{ $playerAddr }}[\c][\b]\n
[b][c=FFFF00][u]{{ $player->name }}[\u][\c][\b]'s Position: [c=FFFEEB][b][u]#{{ $player->position }}[\u][\b][\c] [c=00FF00]-[\c] Score: [c=FFFEEB][b][u]{{ $player->total_score }}[\u][\b][\c] [c=00FF00]-[\c] Rank: [c=FFFEEB][b][u]{{ $player->rankName }}[\u][\b][\c]\n
Score Per Min: [c=FFFEEB][b][u]{{ round($player->score_per_min,2) }} points[\u][\b][\c] [c=00FF00]-[\c] Highest Score: [c=FFFEEB][b][u]{{ $player->highest_score }}[\u][\b][\c]\n
Time Played: [c=FFFEEB][b][u]{{ $player->timePlayed }}[\u][\b][\c] [c=00ff00]-[\c] Last Seen: [c=FFFEEB][b][u]{{ $player->lastGame->created_at->diffForHumans() }}[\u][\b][\c]-->

[c=FFFF00][u]{{ $player->name }}[\u][\c] is coming from [b][u]{{ $playerAddr }}[\u][\b]\nPosition: [u]#{{ $player->position }}[\u] [c=FF0000]-[\c] Score: [b][u]{{$player->total_score }}[\u][\b] [c=FF0000]-[\c] Rank: {{ $player->rankName }}