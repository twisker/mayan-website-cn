+++
date = "2016-04-28T00:58:31-04:00"
draft = false
title = "Release candidate of version 2.1 available"

+++

The first release candidate for version 2.1 is now available from PyPI: https://pypi.python.org/pypi/mayan-edms/2.1rc1

To try it, specify 2.1rc1 as the version otherwise the latest stable version will be install (2.0.2):

    virtualenv venv
    source venv/bin/activate
    pip install mayan-edms==2.1rc1
    mayan-edms.py initialsetup
    mayan-edms.py runserver

Here is the announcement in the mailing list: https://groups.google.com/forum/#!topic/mayan-edms/Hnst3YH9Hfs

The highlights for this version are:

- Complete move to Django 1.8 LTS (Long time support)
- Ability to sign documents from the UI
- HTML5 drag and drop document uploaded
- Remove remaining references to Django’s User model. GitLab issue #225
- Remove included login required middleware using django-stronghold instead (http://mikegrouchy.com/django-stronghold/).
- Improve generation of success and error messages for class based views.
- Remove ownership concept from folders.
- Replace strip_spaces middleware with the spaceless template tag. GitLab issue #255
- Deselect the update checkbox for optional metadata by default.
- Silence all Django 1.8 model import warnings.
- Implement per document type document creation permission. Closes GitLab issue #232.
- Add icons to the document face menu links.
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
- More documentation chapters added.

Please report major bugs or issues (https://gitlab.com/mayan-edms/mayan-edms/issues) so we can speed up to a final 2.1 and start working on the next version, thank you! 
