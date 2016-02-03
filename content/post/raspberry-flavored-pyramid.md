+++
date = "2012-10-02T02:45:38-04:00"
title = "Raspberry flavored pyramid"

+++

It’s been a while from the last time I’ve been so giddy and happy about new hardware.
Sure I like talking about video cards, newest and fastest DDR RAM, motherboards,
and such, but is not every day you get in the mail a $35, credit card sized,
all in one computer, with capabilities that would put some video game consoles to shame.
The capabilities of the Raspberry Pi are something straight out a geek’s fantasy:
**700 Mhz ARM based CPU** (overclockable to **1 Ghz**!) with built in **GPU**,
**SD card** slot, standard **micro USB** power connector, **256MB RAM**
(shared with GPU, shared amount can be configured), **2 USB ports**,
**Ethernet**, a whole bunch of **GPIO** pins for interfacing, **HDMI** output,
**composite video output**, **audio output** via standard audio jack.
So in a nutshell I could described it as everything you could love about the
**Arduino** but it also runs **Linux** and connects effortlessly to your big
screen TV :)

{{% img src="/content/post/Mayan-on-Raspberry-PI.png" caption="Watch the picture, rub you eyes, and watch the picture once more :)" class="col-md-6" %}}

After setting it up and achieving prompt, the next logical step was getting
**Mayan EDMS** running on this gem. Thanks to the available port of **Debian**
for the **ARM** platform and the customized **Raspian** “Wheezy” distribution
for the Raspberry Pi, installing **Mayan EDMS** was no different than installing
in on an every day computer. The only things that was not available from the
**Raspian** distribution was the **OCR** engine used by **Mayan EDMS**,
**Tesseract**. Although it ran slow, it was possible to get **Mayan EDMS** up
an running with the Raspberry Pi on it’s default hardware configuration.
So after a round of simple tweaks and try outs, overclocking to 900Mhz with a
maximum RAM vs. GPU memory configuration, using **gunicorn** with **Nginx**
and **SQLite** for data yielded the best setup achieving a rather usable
system even more so for such a constrained environment. Also I’m running
**Raspian** and **Mayan EDMS** from a class 2, 4GB brandless SD card.
Switching to a higher class card and perhaps with the aid of an USB hard drive
(even a SSD) even better results could be achieved. What’s next, why of course
a whole bunch of tiny Raspberry Pies running Mayan EDMS in cluster mode with
database replication! But that one will have to wait, enough distraction for
today, and best of all? Only $35! 😀

{{% img src="/content/post/raspberry-pi.jpg" caption="Raspberry Pi silently churning out documents via Mayan EDMS"  %}}
