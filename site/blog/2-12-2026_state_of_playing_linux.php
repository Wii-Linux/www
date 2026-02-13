<?php
$title = "State of Play(ing Linux on PowerPC game consoles)";
$date = "Feb 12, 2026";
$author = "Techflash";
require '___header.php';
global $noLoad;
if ($noLoad === true) {
	return;
}
?>
So, I was recently curious just how Linux is doing on the PowerPC game consoles
recently, since it had been a while since I had taken full inventory of the scene.
I did so, and was quite shocked at what I saw.  So shocked, in fact, that I decided
to make this blog post about it.  So, without further ado, here it is:

<table border=1>
	<tr>
		<th>Device</th>
		<th>Can run<br>Linux?</th>
		<th>Needs hardware<br>mod?</th>
		<th>Description</th>
		<th>Maintainer</th>
		<th>Website</th>
	</tr>
	<tr>
		<td>Nintendo(R)<br>GameCube(TM)</td>
		<td>Kinda<a href=#note-1>[1]</a></td>
		<td>Maybe<a href=#note-2>[2]</a></td>
		<td>I'm working on it, but it's just<br>not ready yet for general-purpose<br>usage. For the brave, compile from<br>source or ask Techflash.</td>
		<td>Techflash</td>
		<td><a href=http://wii-linux.org>wii-linux.org</a></td>
	</tr>
	<tr>
		<td>Nintendo Wii(TM)</td>
		<td>Yes</td>
		<td>No</td>
		<td>Works flawlessly, try it out!<br>You're already here after all :)</td>
		<td>Techflash</td>
		<td><a href=http://wii-linux.org>wii-linux.org</a></td>
	</tr>
	<tr>
		<td>Nintendo Wii U(TM)</td>
		<td>Yes</td>
		<td>No</td>
		<td>Works flawlessly, just needs the<br>ability to load an fw.img<a href=#note-3>[3]</a></td>
		<td>Quarky, Loganius,<br>Techflash, CompuCat</td>
		<td><a href=http://linux-wiiu.org>linux-wiiu.org</a></td>
	</tr>
	<tr>
		<td>Sony(R)<br>PlayStation(R) 3</td>
		<td>It's<br>complicated<a href=#note-4>[4]</a></td>
		<td>It's also<br>complicated<a href=#note-5>[5]</a></td>
		<td>So this one is.... weird.<br>It will kinda work if you have<br>really ancient OFW with "OtherOS"<br>functionality, otherwise you need<br>to install CFW (which isn't even<br>possible on all models). If you can<br>get into OtherOS, the pain doesn't<br>stop there. The only modern distro<br>that offers any PS3 support is<br><a href=http://archlinuxpower.org</a>ArchPOWER</a>, and it's PS3 support<br>isn't doing particularly great at<br>the current moment.</td>
		<td>damiandudycz (kernel,<br>seemingly abandoned)<br><br>Fancy2209<br>(ArchPOWER packaging)</td>
		<td><a href=https://github.com/damiandudycz/ps3>damiandudycz's<br>abandoned repo</a><br><br><a href=http://archlinuxpower.org>ArchPOWER</a></td>
	</tr>
	<tr>
		<td>Microsoft(R)<br>Xbox 360(R)</td>
		<td>Yes</td>
		<td>Not<br>anymore!<a href=#note-6>[6]</a></td>
		<td>So how this happened is actually a<br>really funny story. I was pretty<br>curious about trying to revive<br>Xbox 360 Linux back around September<br>of 2025, and I happened to be public<br>about this around the right people<br>at the right time. Quarky picked up<br>on it at the same time that she was<br>interested in doing her own revival,<br>so she ended up talking to Emma (IPG)<br>about it, who happens to not only<br>have contacts to some of the<br>previously-active Free60 members,<br>but even had merge access, and<br>authority to make a community for<br>everybody. That was never really my<br>goal, but it was far better than<br>what I could've hoped to do on my<br>own.<br><br>Since then, progress across all<br>Free60 projects (Linux, libxenon,<br>XeLL, etc) has been going<br>excellently. I've helped here<br>and there with some things, like<br>somewhat porting the Linux kernel<br>fork up to newer versions, fixing<br>some DT stuff in libxenon+XeLL,<br>and packaging, but much of it was<br>the rest of the community that<br>formed and/or returned.<br><br>Currently, <a href=http://archlinuxpower.org>ArchPOWER</a> has<br>linux-xenon packaged, and ISO<br>building support is present in a<br>draft PR, but no final builds are<br>ready yet.</td>
		<td>Cancerous1, Emma (IPG),<br>Juvenal, Quarky,<br>realweezerfan93,<br>sk1080, Swizzy,<br>Techflash, tuxuser<br></td>
		<td><a href=http://free60.org>free60.org</a><br><br><a href=http://archlinuxpower.org>ArchPOWER</a></td>
	</tr>
</table>

<b id=note-1>Note 1:</b> It's not a great experience.
<b id=note-2>Note 2:</b> Requires either a hardware mod or a game-based exploit, see <a href=https://gamecube-guide.retrotastes.com/introToHomebrew>the guide</a> if interested.
<b id=note-4>Note 4:</b> If you have some way to boot OtherOS, via either OFW or CFW.
<b id=note-5>Note 5:</b> If you need to install CFW (you probably do), then it depends on your model.
	Some models can take CFW in software. Some models need a Pico-based hardware mod.
        Some models cannot take CFW at all.
<b id=note-6>Note 6:</b> It used to require hardware mods like RGH, but now you can boot XeLL, and thus Linux, as well
	as other libxenon-based homebrew, using <a href=https://free60.org/Hacks/Bad_Update_Hack/>nothing but a USB Flash Drive and an updated Xbox 360!</a>

<b>Disclaimer:</b> I have no serious intention of keeping this list, it is representative of the current state at its time of posting, but I make no garuantees as to its continued accuracy into the future.

P.S. If you didn't get the pun in the title, you should go look at what happened today :P
<?php
require '___footer.php'
?>
