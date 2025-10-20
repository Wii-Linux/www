<?php
$title = "For Developers: build and boot stack changes";
$date = "Jun 19, 2025";
$author = "Techflash";
require '___header.php';
global $noLoad;
if ($noLoad === true) {
	return;
}
?>

Welcome, developers!  There's recently been a <b>major build workflow change, that you probably care about.</b>

<b>For anyone making custom builds, this announcement is for you!</b>
The build-stack and boot-stack have undergone massive changes, that affect how, and what, you build to get the kernel and boot menu.
You can check the commit logs on GitHub (<a href="https://github.com/Wii-Linux/boot-stack/compare/1c1013549c6e...cd7815d5c924">boot-stack</a>, <a href="https://github.com/Wii-Linux/build-stack/compare/4535046aac78...dd62bd6a9119">build-stack</a>) for the actual code changes, but here's the cliff notes:
- The Internal Loader has been <b>removed</b>.  If you were relying on that to exist (perhaps making modifications to it), it doesn't anymore.
- The Loader-Img (Boot Menu) has now <b>included in the kernel</b>.  If you were relying on it to be a `.ldr` file on the SD Card, it isn't anymore.
- `/run/boot_part` can now <b>fail to mount gracefully</b> in the loader-img, you can't rely on it to always exist.  You can check  `if [ "$noBootPart" = "true" ]` to see if it failed to mount or not.
-  The <b>parameters that you need to pass to</b> `build-kernel.sh`, `build-loader.sh`, and `copy-ssh.sh` have been updated.  Please review the new parameters in the usage if you need to update build scripts.
- `build-loader.sh` is now <b>called automatically</b> during `build-kernel.sh`.  You don't need to call it manually anymore.  If you did/are, it won't hurt anything, but it's redundant, and a minor waste of time.


<b>For regular users:</b>
This announcement probably doesn't concern you.  You'll see that `wii-linux-loader-stable` will be removed next time you try to update - this will not affect functionality, and you should not be concerned.
<?php
require '___footer.php'
?>
