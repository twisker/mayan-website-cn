+++
date = "2016-02-15T02:28:31-04:00"
title = "Mayan EDMS version 2.0.2 released"

+++

This is a bug fix release and users are encouraged to upgrade. Changes:

- All the use cases of the "Update" checkbox from the metadata entry form has been defined. These include the behavior during the document upload wizard.
- A bug was fixed that didn't allowed uploading documents with optional lookup metadata if the optional field was left blank.
- The Docker files were removed from the code repository and are part of their own project at https://gitlab.com/mayan-edms/mayan-edms-docker.
- The logic to extract validation error messages was improved.
- A 2 second delay was added to some tests to workaround MySQL not storing the millisecond part of the document version's timestamp.
- When installing the development dependencies the testing dependencies are now installed too.
- An OCR API test was fixed.
- HTML tags are now stripped from to the browser title bar.

Pertinent links:

- Release Notes: http://mayan.readthedocs.org/en/latest/releases/2.0.2.html
- Downloads: https://pypi.python.org/pypi/mayan-edms/2.0.2
- Code: https://gitlab.com/mayan-edms/mayan-edms
- Mailing list: https://groups.google.com/forum/#!forum/mayan-edms
- Homepage: http://www.mayan-edms.com/
- Issues, bugs: https://gitlab.com/mayan-edms/mayan-edms/issues

Social media:

- Facebook: https://www.facebook.com/MayanEDMS
- Twitter: https://twitter.com/MayanEDMS
- Google Plus: https://plus.google.com/108413286958999778262
