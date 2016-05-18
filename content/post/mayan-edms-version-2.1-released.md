+++
date = "2016-05-14T02:00:00-04:00"
title = "Mayan EDMS version 2.1 released"

+++

{{% img src="/content/post/document-signature.jpg" %}}


Version 2.1 has been release on PyPI: https://pypi.python.org/pypi/mayan-edms/2.1

The biggest news for this version is the addition of document signing support.
Cryptographic document signing is a feature found only in expensive commercial software.
Previously Mayan EDMS was the only Free Open Source DMS software with the ability to verify electronic signatures.
Now, with the added capability of creating electronic document signatures,
Mayan EDMS joins the ranks of the commercial solutions like Adobe ECHOSIGN and DocuSign.
Aside from being able to sign documents electronically for a truly paperless experience,
the usual level of access control Mayan EDMS usually provides has been added to this feature too.

The highlights for this version are:

- Complete move to Django 1.8 LTS (Long time support)
- Ability to sign documents from the UI
- HTML5 drag and drop document uploaded
- Upgraded requirements.
- Remove remaining references to Django’s User model. GitLab issue #225
- Rename ‘Content’ search box to ‘OCR’.
- Remove included login required middleware using django-stronghold instead (http://mikegrouchy.com/django-stronghold/).
- Improve generation of success and error messages for class based views.
- Remove ownership concept from folders.
- Replace strip_spaces middleware with the spaceless template tag. GitLab issue #255
- Deselect the update checkbox for optional metadata by default.
- Silence all Django 1.8 model import warnings.
- Implement per document type document creation permission. Closes GitLab issue #232.
- Add icons to the document face menu links.
- Increase icon to text spacing to 3px.
- Make document type delete time period optional.
- Fixed date locale handling in document properties, checkout and user detail views.
- Add new permission: checkout details view.
- Add Message of the Day app. Issue #222
- Update Document model’s uuid field to use Django’s native UUIDField class.
- Add new split view index navigation
- Newly uploaded documents appear in the Recent document list of the user.
- Document indexes now have ACL support.
- Remove the document index setup permission.
- Status messages now display the object class on which they operate not just the word “Object”.
- More tests added.
- Handle unicode filenames in staging folders.
- Add staging file deletion permission.
- New document_signature_view permission.
- Add support for signing documents.
- Instead of multiple keyservers only one keyserver is now supported.
- Replace document type selection widget with an opened selection list.
- Add mailing documentation chapter.
- Add roadmap documentation chapter.

Big thanks to all contributors, testers, translators, mailing members, supporters and users.

- Release Notes: http://mayan.readthedocs.org/en/latest/releases/2.1.html
- Downloads: https://pypi.python.org/pypi/mayan-edms/2.1
- Code: https://gitlab.com/mayan-edms/mayan-edms
- Mailing list: https://groups.google.com/forum/#!forum/mayan-edms
- Homepage: http://www.mayan-edms.com/
- Issues, bugs: https://gitlab.com/mayan-edms/mayan-edms/issues

Social media:

- Facebook: https://www.facebook.com/MayanEDMS
- Twitter: https://twitter.com/MayanEDMS
- Google Plus: https://plus.google.com/108413286958999778262
