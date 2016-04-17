<?php 
	function sendShellCmd($command)
	{
		$sStdOut = shell_exec("/home/pi/ROUTER/2_OTHER/5_RaspiPlayer/RaspiPlayer.bash $command 2>&1");
		echo $sStdOut;
	}

	if (isset($_POST['getVarStatusEvent'])) 
	{ 
		$sReceivedPostData = htmlspecialchars($_POST['getVarStatusEvent']);
		if($sReceivedPostData == 'Repeat')
		{
			$sStdOut = shell_exec("/usr/sbin/service PlaybackStatusDaemon getRepeatStatus"); 
			echo "$sStdOut";
		}
		if($sReceivedPostData == 'Shuffle')
		{
			$sStdOut = shell_exec("/usr/sbin/service PlaybackStatusDaemon getShuffleStatus 2>&1"); 
			echo "$sStdOut";
		}
		if($sReceivedPostData == 'RawStatus')
		{
			$sStdOut = shell_exec("/usr/sbin/service PlaybackStatusDaemon getRawStatus 2>&1"); 
			echo "$sStdOut";
		}
		if($sReceivedPostData == 'Playlist')
		{
			$sStdOut = shell_exec("/usr/sbin/service PlaybackStatusDaemon getPlaylist 2>&1"); 
			echo "$sStdOut";
		}
	}

	if (isset($_POST['getPlaylistNames'])) 
	{ 
		$sPlaylistNamesReq = htmlspecialchars($_POST['getPlaylistNames']);
		if($sPlaylistNamesReq == "AllPaths")
		{
			$sStdOut = shell_exec("/usr/sbin/service PlaybackStatusDaemon getPlaylistNames"); 
			echo "$sStdOut";
		}
		else
		{
			echo "argument not supported";
		}
	}

	if (isset($_POST['playlistEvent'])) 
	{
		$sPlaylistName=htmlspecialchars($_POST['playlistEvent']);
		$sPlaylistCollection = shell_exec("/usr/sbin/service PlaybackStatusDaemon getPlaylistNames"); 
		
		if(strpos($sPlaylistCollection,$sPlaylistName) !== FALSE)
		{
			sendShellCmd("stop");
			sendShellCmd("setSavedPlaylist \"$sPlaylistName\"");
			sendShellCmd("start");
		}
		else
		{
			echo "Error: Track name is invalid";
		}
	}
	
	if (isset($_POST['trackChangeEvent'])) 
	{
		$sNewTrackName=htmlspecialchars($_POST['trackChangeEvent']);
		$sCommand="changeTrack \"$sNewTrackName\"";
		sendShellCmd($sCommand);
	}
	
	if (isset($_POST['musicControlEvent'])) 
	{ 
		$sMusicControlData=$_POST['musicControlEvent'];
		if($sMusicControlData == 'Start')
		{
			sendShellCmd("start");
		}
		if($sMusicControlData == 'NextSong')
		{
			sendShellCmd("next");
		}
		if($sMusicControlData == 'TogglePause')
		{
			sendShellCmd("pause");
		}
		if($sMusicControlData == 'StopPlayback')
		{
			sendShellCmd("stop");
		}
		if($sMusicControlData == 'FastForward')
		{
			sendShellCmd("fastForward");
		}
		if($sMusicControlData == 'FastBackward')
		{
			sendShellCmd("fastBackward");
		}
		if($sMusicControlData == 'VolumeUp')
		{
			sendShellCmd("+");
		}
		if($sMusicControlData == 'VolumeDown')
		{
			sendShellCmd("-");
		}
		if($sMusicControlData == 'ToggleRepeat')
		{
			sendShellCmd("repeat");
		}
		if($sMusicControlData == 'ToggleShuffle')
		{
			sendShellCmd("shuffle");
		}
	}
?>