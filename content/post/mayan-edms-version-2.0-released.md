+++
date = "2015-12-07T02:28:31-04:00"
title = "Mayan EDMS version 2.0 released"

+++


I am pleased to announce the immediate availability of Mayan EDMS 2.0. This is a stable release and a major version. This is a summary of the most noteworthy changes:

- Mayan EDMS has been updated to use Django 1.7.10. This change allows Mayan EDMS to make use of Django’s AppConfig and its new native migration system. This update also removes the need for the third party South migrations and removes support for Python 2.6 and lower.
- New Twitter Bootstrap user interface. This new UI allows for much easier customization by support providers or integrators.
- Easier 3rd party customization, this is achieved by separating appearance, and authentication into their own apps. Support for de-registering navigation links was added to allow 3rd party apps to modify the navigation layout without having to modify the code of other apps.
- Several custom signals were added to improve the integration of 3rd party apps.
- UI simplification: Seldom used links are now hidden from view reducing the visual complexity of the interface.
- Improved document preview generation. The entire image generation system was re-factored making it more robust and extensible. It now also allows sharing of the document image cache between nodes of a multi node install of Mayan EDMS.
- Smarter document text parsing using a combination of parsing, falling back to OCR on a per page basis, this means that text extraction from documents with both text and images is done in the best way possible without sacrificing speed (when no OCR is needed) and quality (when the page only has parseable text).
- The access control system (ACL) was re-factored for speed and simplicity. It also now allows a different type of permission inheritance, permissions can be granted for a document type and all documents of that type will inherit from it. This new inheritance model all but eliminates the need to the ACL of individual documents.
- Metadata validators were split into validators which block data entry upon errors, and parsers which allow invalid data to be entered but parse and transform it before being stored.
- Trash can support was added to avoid losing documents on when accidentally deleted. Documents are now moved to the trash can and remain there until finally deleted. Documents in the trash can, can be restored.
- Retention policies were added to automatically move documents to the trash and/or auto delete them too. This is useful if a document contains confidential information and organizational policies or governing laws dictate that is must be destroyed after a specific amount of time.
- Sharing of document indexes was added back but implemented as a FUSE filesystem this time. This new mirroring approach allows sharing of indexes regardless of the filesystem being used to store the documents, or if even it even local to the machine sharing the indexes.
- Removal of Python’s eval from the code. Instance where users are allowed to use the documents properties or make a value template (Metadata type default, metadata lookup, smart links, index template) now use the Django’s template language. This eliminates security exploits based on Python’s eval abuse.
- Improved failure tolerance, Mayan EDMS now detects several critical failures in database access and retry them in a way that greatly reduces the chance of data loss even during conditions where most software would produce a service exception and abort. For more information: http://blog.robertorosario.com/testing-django-project-infrastructure-failure-tolerance/
- Documents tags can now be of any color and not just the colors that were included in the past.
- Code test improvement was a primary focus point of this release increasing the total number of tests by an order of magnitude. The use of testing tools like Tox was added. Support for more continuous integration like GitLab CI was added as well as support for code coverage providers like CodeCodev. A custom test runner as also added that tests only Mayan EDMS apps that provide compliant tests. The philosophy and design specification of tests was improved by testing views, models and API separately and checking for both, success and failures of each test’s element.
- A new simple ‘performupgrade’ management command was added to reduce the steps required to just one (not counting requirements updates steps).
- Automatic debug logging during development and automatic information logging during production, making reporting issues much easier.
- This release also includes a Docker image and a Docker Compose file for easier deployment.

For the complete list of changes read the release notes at: http://mayan.readthedocs.org/en/latest/releases/2.0.html

Big thanks to all contributors, testers, translators, mailing members, supporters and users.

- Release Notes: http://mayan.readthedocs.org/en/latest/releases/2.0.html
- Downloads: https://pypi.python.org/pypi/mayan-edms/2.0.0
- Code: https://gitlab.com/mayan-edms/mayan-edms
- Mailing list: https://groups.google.com/forum/#!forum/mayan-edms
- Homepage: http://www.mayan-edms.com/
- Issues, bugs: https://gitlab.com/mayan-edms/mayan-edms/issues

Social media:

- Facebook: https://www.facebook.com/MayanEDMS
- Twitter: https://twitter.com/MayanEDMS
- Google Plus: https://plus.google.com/108413286958999778262
