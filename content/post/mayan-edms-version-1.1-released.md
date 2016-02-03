+++
date = "2015-02-22T02:32:46-04:00"
title = "Mayan EDMS version 1.1 released"

+++

Although it was a minor version in numbering it could be argued that this is a new mayor version of Mayan EDMS if it were for the amount of new features and improvements!

This version took barely 4 months to be completed. More than 70 issues closed, and 800+ commits were added to the repository. Some of the most important features and additions include:

- A complete move to Celery for background task processing, including thumbnail generation.
- Much expanded REST API.
- Sending documents link or documents as attachments via email.
- New release cycle with focus of maintenance and support.
- Receiving documents via email (IMAP and POP supported).
- Addition of watched folders.
- No more segfaults when generating PDF.
- Browser memory usage reduction, hundred page documents load and display much better.
- Per user language and timezone settings.
- Optional and required metadata per document types.
- Explicit testing against PostgreSQL, MySQL and SQLite.
- Per document language setting.
- Metadata validation and parsing.
- Document workflows.

Big thanks to all contributors, testers, translators, and mailing members, and big thanks to our two corporate sponsors: Cryptico Corp. and S.A. LLC, their support allowed me to work full time on Mayan EDMS these past 4 months.

- Release Notes: http://mayan.readthedocs.org/en/latest/releases/1.1.html
- Downloads: https://pypi.python.org/pypi/mayan-edms
- Code: https://github.com/mayan-edms/mayan-edms
- Mailing list: https://groups.google.com/forum/#!forum/mayan-edms
- Support chat: https://gitter.im/mayan-edms/mayan-edms
- Homepage: http://www.mayan-edms.com/
- Issues, bugs: https://github.com/mayan-edms/mayan-edms/issues

Enjoy Mayan EDMS 1.1!
