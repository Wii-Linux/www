<?php
$title = "Wii-Linux 4.19 released!";
$date = "Apr 11, 2025";
$author = "Techflash";
require '___header.php';
global $noLoad;
if ($noLoad === true) {
	return;
}
?>

Welcome readers!  It's been a while since the last blog, huh?
Here's a big one, as of today, the latest ArchPOWER images you download
as well as the latest stable kernel you can download from the site, will
be based on Linux 4.19, with full LTS patches (4.19.325), as opposed to
the old 4.5.0.

Now, you might be asking; "How did this happen out of nowhere?"
And I'm here to give you the rundown of how this happened so quickly,
what it actually means for normal users, and what it means for developers.
Let's start with normal users.  People who just want to put Linux on their
Wii, and nothing deeper.  What impact does this have on you?  Well, for you,
it has a few main benefits:
1. Better compatibility with USB peripherals.
   Some USB devices that didn't work previously in 4.5 due to lack of
   drivers, or buggy drivers, should start working now.
2. Better compatibility with software.
   Some software would throw bad syscall errors on 4.5, because it
   was built with a newer kernel in mind, and was calling APIs (syscalls)
   that Linux 4.5 doesn't support, because they didn't exist at the time.
3. More secure, less known vulnerabilities.
   I'd sure hope that nobody is trying to hack your Wii (if they are, you
   probably have bigger problems), but since 4.19 is much more recent, and
   was a supported LTS (still getting security updates) up until a few months
   ago (as of the writing of this post), you should in theory be more secure.
4. New features.
   For example, the ability to properly hotplug EXI devices, the USB
   Gecko TTY driver being included once again, and the RTC driver being
   included once again.

For developers?  You all have everything above, plus the following to be
happy about:
1. Overall code improvements.
   For example, I cleaned up tons (nearly 10k lines) of legacy code, such as
   the old IOS IPC driver stack.
2. Newer kernel base means more distro compatibility
   For all you distro porters, no longer should you be bound by the old
   kernel.  4.19 is recent enough that mostly anything should just work,
   (heck the Switch runs an older kernel, and it can run Ubuntu 24.04 and
   Fedora 41).
3. USB Gecko support
   *The* quintessential GameCube/Wii developer device, now has a proper TTY
   drvier on Linux.  In my opinion that warrants a new release all on it's
   own.


So, that's great and all, but what does this mean for the future?
Sadly, probably not much.  I tried to bring up 5.4 to no success; apparently
they massively overhauled the DMA subsystem around that time, so stuff like
USB just has no chance of working with even heavy tweaking.  If you're curious
you can check out the `wii-v5.4` branch on the kernel repo on GitHub, to see
what I did, but it doesn't really work.  It compiles, it technically boots,
but USB is completely broken, and the SD Card is incredibly unstable.

However, I will continue to iterate on 4.19, with some spicy new changes
planned.  In no particular order:
* GameCube support
* Fixing rvl-di (Wii DVD drive)
* Fixing gcn-sd (SDGecko)
* Dropping gcn-rsw (GameCube/Wii Reset SWitch) and replacing it with gpio-keys
* Dropping MINI IPC once and for all
* Reverse engineering the Hollywood STM to potentially implement Linux
  suspend-to-RAM, assuming that MEM1 & MEM2 are actually kept alive.
* Finally figuring out where that missing RAM has gone

Thanks for reading this post, and I'll hopefully see you soon
in the next one.
- Techflash
<?php
require '___footer.php'
?>
