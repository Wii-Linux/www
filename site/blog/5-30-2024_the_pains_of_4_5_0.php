<?php
$title = "The pains of releasing kernel 4.5.0";
$date = "May 30, 2024";
$author = "Techflash";
require '___header.php';
global $noLoad;
if ($noLoad === true) {
	return;
}
?>

Welcome readers!
It sure has been quite a while since I've written one of these, did ya miss me?
So, if you didn't already know, I've just released the first major update
to the kernel that Wii Linux uses.  Previously, it was using kernel version
4.4.302-cip80, based on a fork of Linux known as "Civil Infrastructure Platform", or
"CIP" for short.  This was great at the time, more stability, maybe a few new features
tossed in.  However, this came with a massive drawback.  It became nearly unbearable to upgrade.
I tried and tried for eons to get the existing kernel repo to just get over to a newer version,
however, nothing ever came of it.  It just never worked right.  It was time for some real change...

Introducing Linux kernel 4.5.0!  This is a real upstream version of Linux with no additional
patches or other cruft tacked on.  Just real, bog-standard, Linux.  The only issue being
that Linux, unmodified, will not run (with anything past a serial console and a RAMDisk)
on a Wii or GameCube.  You may be thinking, "well duh, just apply the Wii patches you dummy!",
and the thing is, I legitimately couldn't find them!  I looked around a while back, trying
to find out where the base Wii patches were at, but I just... didn't see them?
I'm not entirely sure how that one happened, but I do know that randomly while looking
at the Makefile in GitHub, just to get the version number, I noticed that the commit
was titled "Apply Wii patches", and I thought "huh, that sounds an awful lot like the
base Wii patches that I've been looking for for ages", and as it turns out, it was...

So after finding the patches, I quickly went and applied them to a stock kernel 4.4.0, compiled,
booted it and, WHAT?  IT JUST.. WORKED?  OUT OF THE BOX????
Yeah, it turns out that in 4.4, it all just for the most part, worked.  I had to fix like, 2 files
to get them compiling properly, but after that it was smooth sailing.
So then I thought, "OK, if it's just gonna work so well, why not rebase on 4.5 and see what happens?"
Unfortunately, that was just a little bit too ambitious... it threw some errors, then locked up.

So I took a step back, I thought about it.. "hmm, what do you use when you know one commit is good,
and one is bad?"  Oh, I know, it's `git bisect` time!.... Oh wait.... `git bisect` doesn't actually
work properly when all of your commits are from upstream Linux and you need to apply a patch
every time in order to actually test it.... oh no....

Regardless, I carried on and used `git bisect` anyways, just in a very unintended way.
See, when you input good and bad commits to `git bisect`, it spits out a commit hash, and
puts you at that point in the history.  You're intended to then build the project, test it,
and do a `git bisect good` or `git bisect bad` to tell git whether or not this commit has
the problem you're trying to find or not.  However, there's nothing stopping you from instead
taking the hash, then doing a `git bisect reset` to abort the bisect, and instead just
`git rebase`ing to that new commit.  Or, well, maybe your sanity is supposed to...

All in all, I spent **4 HOURS STRAIGHT** bisecting, wrestling with git, testing, and
compiling.  All just to narrow it down to this.  I'll let the commit details speak
for themselves here.

=====
commit 30e4c9ad04a7bec4a04b975ce1ad5541d74e1906
Merge: f25a96eada61 c5b635203032
Author: Linus Torvalds <torvalds@linux-foundation.org>
Date:   Sun Jan 31 14:48:58 2016 -0800

    Merge branch 'irq-urgent-for-linus' of git://git.kernel.org/pub/scm/linux/kernel/git/tip/tip
    
    Pull IRQ fixes from Ingo Molnar:
     "Mostly irqchip driver fixes, but also an irq core crash fix and a
      build fix"
    
    * 'irq-urgent-for-linus' of git://git.kernel.org/pub/scm/linux/kernel/git/tip/tip:
      irqchip/mxs: Add missing set_handle_irq()
      irqchip/atmel-aic: Fix wrong bit operation for IRQ priority
      irqchip/gic-v3-its: Recompute the number of pages on page size change
      base: Export platform_msi_domain_[alloc,free]_irqs
      of: MSI: Simplify irqdomain lookup
      irqdomain: Allow domain lookup with DOMAIN_BUS_WIRED token
      irqchip: Fix dependencies for archs w/o HAS_IOMEM
      irqchip/s3c24xx: Mark init_eint as __maybe_unused
      genirq: Validate action before dereferencing it in handle_irq_event_percpu()
=====

Didn't get any of that?  I didn't either.  All I know is that I isolated that
exact commit to be the problem of why it was hanging, with that out of the way
it'll work, right?  R-right??  Oh not again....

Unfortunately, no, that fix on it's own did not fix all of the problems, I still had to
deal with the likes of:
 - Modules just... not loading.  For no apparent reason.
   There was no problem with the modules, I could `insmod` them just fine.
   It was just `modprobe` that was dying.  Turns out it was because
   `modules.dep` wasn't being created when I packaged up the modules.
   Nice, love to see random problems that don't actually provide useful error info.

 - The `gcn-ai` driver causing a kernel Oops on startup and not actually initializaing.
   I still don't know what causes this one, I just disabled it instead of bothering.

 - The SD Card driver erroring out trying to request a memory region.
   Turns out it actually just shouldn't be requesting it at all,
   there was a separate patch I needed to force that.

 - Writing a new gumboot menu to dual boot 4.4.302 and 4.5.0,
   and how to name these files while remaining in the FAT32 "8.3" file
   name limit (8 characters, then a 3 character file extension)

 - And worst of all, a random kernel panic that provided 0 debug info,
   **AND THEN THE SYSTEM JUST CONTINUES RUNNING LIKE IT NEVER HAPPENED???????**

So yeah, this release was utterly chaotic, and annoying to make.
In total it took me 10 hours straight (started at 5:30 PM, as of writing this it's 3:30 AM) of work
to get this release finalized.  I hope now yall can appreciate the sheer amount of work that went
into this.  If you haven't already, go check it out.

That's all for tonight folks, see you in the next blog!

<?php
require '___footer.php'
?>
