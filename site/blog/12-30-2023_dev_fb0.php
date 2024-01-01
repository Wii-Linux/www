<?php
$title = "/dev/fb0, the good, the bad, and the ugly";
$date = "Dec 30, 2023";
$author = "Techflash";
require '___header.php';
global $noLoad;
if ($noLoad === true) {
	return;
}
?>

/dev/fb0.  The 1st framebuffer device.
This is what you write to when you want to display graphics
on the screen, but you don't have any other form of accelerated
2D graphics device that you can use in yor system.

It's very slow, even on modern systems, and is generally a
last restort from Xorg to "just get something up there".

In the Wii's case, this is probably about as good as we are going to get
graphics without an entirely custom in house Xorg driver, written
from scratch to take advantage of the Wii's custom, (almost) undocumented GPU.

Not entirely sure if you could tell from the phrasing there, but that's not
a very easy task.

So the solution here is to just let the CPU render it.  It's not all that slow actually.
And how does the CPU (in userspace apps) dump pixels on the screen?  Why /dev/fb0 of course!

Now here's the issue, right.  In the kernel, for example, the TTY driver,
the colors work fine.  They look great, and everything is all fine and dandy.

However, the <em>SECOND</em> that you begin to touch it from userspace (writing to /dev/fb0),
suddenly the whole thing falls apart.
<a target=_blank href=/blog/media/xorg-bugged-colors-xterm.png>black becomes green!  white becomes pink!  everything is just wrong!</a>
^^^ (picture of xterm [white bg, black text], on stock Xorg [black background])

Similar issues occur when writing raw RGB565 values into /dev/fb0.
My best guess as to how this happens, is that the fb0 device doesn't catch
the writes and convert them into YUV like the Wii's actual framebuffer takes.

When writing to it from kernel space, it hits some sort of put_pixel() or similar function,
and that converts it.
However in userspace, fb0 is just directly mapped into the framebuffer's MMIO
(memory mapped I/O) address space, so writing to it just writes RGB565 values into the YUV
frameuffer directly, with no conversion.

At least, this is all my guess.
I haven't really looked very deep into why it does what it does.

Well, anyways, thanks for reading my ramblings about Xorg and framebuffer devices.
See ya in the next blog.

<?php
require '___footer.php'
?>
