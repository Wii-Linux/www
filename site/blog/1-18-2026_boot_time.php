<?php
$title = "Wii Boot Times";
$date = "Jan 18, 2026";
$author = "Techflash";
require '___header.php';
global $noLoad;
if ($noLoad === true) {
	return;
}
?>
So, yesterday, I was bored, and I did some Wii boot timing tests.
I've always felt that the Wii sometimes took a weirdly long amount of time to boot up given what it has to do to pull it off.
So, as such, I decided to try put it to the test and get hard numbers to confirm my suspicions.
These were all
- on the same console
- with the same SD Card
- measuring time from power -&gt; unless mentioned
... to cut down on testing variance; yes I had to switch between BootMii-as-boot2 installed/not and Priiloader installed/not for this test

So, here's the results:
- Worst case (boot0 -&gt; boot1 -&gt; boot2 (stock) -&gt; IOS -&gt; Priiloader (set to autoboot SysMenu) -&gt; reload IOS -&gt; boot sysmenu): <b>6.52 seconds</b>
- Second-worst case (boot0 -&gt; boot1 -&gt; boot2 (stock) -&gt; IOS -&gt; Priiloader (set to autoboot BootMii IOS) -&gt; BootMii IOS -&gt; MINI -&gt; Gumboot): <b>5.36 seconds</b>
- Meh case [stock] (boot0 -&gt; boot1 -&gt; boot2 (stock) -&gt; IOS -&gt; sysmenu): <b>4.85 seconds</b>
- Best case (boot0 -&gt; boot1 -&gt; boot2 (BootMii) -&gt; MINI -&gt; Gumboot): <b>3.48 seconds</b>
- Best case - only measuring power -&gt; first USB gecko output from BootMii boot2 (boot0 -&gt; boot1 -&gt; boot2 (BootMii): <b>1.53 seconds</b>

so, that gives a rough estimate that the early parts of the process
(Hardware init -&gt; boot0 -&gt; load and verify boot1 -&gt; boot1 starts -&gt; load and verify boot2 -&gt; boot2 starts -&gt; *[measure here]*)
... clocks in somewhere around 1.5s.  I wonder how much of that is boot1, DDR Controller initialization is probably costly...

That's all I wanted to put out for today, thanks for reading :)
<?php
require '___footer.php'
?>
