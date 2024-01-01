<?php
$title = "USB 3.0 (& hubs) on the Wii.... oh how I hate it";
$date = "Dec 30, 2023";
$author = "Techflash";
require '___header.php';
global $noLoad;
if ($noLoad === true) {
	return;
}

?>

USB 3.0.  It's typically great!
Ultra fast transfer speeds, 5gbps or higher.  Pretty useful feature right?
Sadly, the Wii does not support this awesomeness.
The best it can do is USB 2.0, which maxes out at 540mbps.
Now for normal devices, like a PC, that would be fine.
The attached device would realize that this isn't a &gt;3.0 port, and negotiate down to 2.0 or below.

So how doesn't this work on a Wii?  I'm not quite sure!
Evidently, the devices do negotiate down to the EHCI (USB 2.0) protocol, but... not well...
The Wii and attached device can still communicate, however, the Wii will have for ~1-2 seconds every time they do.
<a href=/blog/media/usb_3_0_hub_kernel_spinlock_hang.txt target=_blank>here</a> is a log file showing what happens when I plug in my USB 2.0 keyboard into a port on my 3.0 hub, and plug <em>that</em> into my Wii.
Before this message get's printed, the console appears to simply hang for little bit.

The thing is, that I don't have any purely USB 2.0 Hubs (I'm not that old).
Because of this, I have no way of verifying if the above issue is related to
the USB hub of any kind, or the fact that it's a 3.0 hub specifically, or
just that fact that it is a 3.0 device.

If any of you amazing viewers happens to have a purely USB 2.0 hub that you
are willing to connect up to your Wii to see if it works, it would be greatly
appreciated!

So yeah.  All in all, I hate USB 3.0 devices (or maybe just USB hubs?).
Thanks for reading my rant about USB on the Wii, lol.


<?php
require '___footer.php'
?>
