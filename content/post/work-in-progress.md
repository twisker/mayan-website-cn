+++
date = "2012-08-07T15:25:53-04:00"
title = "Mayan development work in progress"

+++

This has been a very exciting development cycle, many new additions are making
their way into the code as well as third party project support.
A huge thanks go to [RTM-IT corp.](http://www.rtm-it.com/) for their donation
of **Citadel**, their commercial clustering product for **Mayan EDMS**.
**Citadel** is now part of the **Free Open Source version of Mayan EDMS**
and available for everyone to use and enjoy! We hope that along with
[RTM-IT Corp.](http://www.rtm-it.com/) and [SeeOpen S.r.l.](http://www.seeopen.it/)
other commercial organizations step up and contribute to the core of what
**Mayan EDMS** is. If you make money somehow from **Mayan EDMS** please
consider giving something back to the community, whether it is monetary
donations, patches, testing and now that clustering is an integral part
of **Mayan EDMS**, hardware for a server farm for testing will be needed,
so every bit helps.

Another great news is that the first mobile app specifically designed for
**Mayan EDMS** is in the works by Pablo Juan Rivera (orangethirty). 
Along with a major re-factoring of every internal code from navigation to tool
registration some frequently requested additions have been implemented and
added like:a complete move to Django 1.4, a bootstrap app to create metadata,
indexes and document types to help user get up and running faster when
installing **Mayan EDMS** for the first time. Several more translations 
have made their way: **Dutch** (Lucas Weel), **Bulgarian** (Iliya Georgiev and Koldo)
and **French** (Pierre Lhoste). Full migration to **South**,
this will make upgrade from this next version onward much easier.
Trash can support, a Pygments renderer to support colorized display of code
files, initial implementation of retention policies and many more fixes and
small updates everywhere.
