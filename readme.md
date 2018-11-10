------

# SMF 2.1-STYLE ADMIN AREA v1.11

[**By Dougiefresh**](http://www.simplemachines.org/community/index.php?action=profile;u=253913) -> [Link to Mod](http://custom.simplemachines.org/mods/index.php?mod=3907)

------

## Introduction
This mod reorganizes the layout of SMF v2.0.x's Admin area so that it closely matches SMF 2.1 Alpha 1's menu, as of July 28, 2014.  It also rewrites the "Adminstration Center" page to look like SMF 2.1 Alpha 1....

Most of the modifications are to **Admin.php** and **Admin.template.php**, with a few other edits to make the moved menu entries work.

In SMF 2.1 Alpha 1, there is no Core Features page.  Those settings have been migrated to the individual pages to enable/disable the feature.  These modifications are not duplicated, as they would add MUCH, MUCH more code to the admin area....

## Related Discussion
[Thinking about Reorganizing SMF 2.0.x's Admin Area](http://www.simplemachines.org/community/index.php?topic=525769.0)

## Menu Changes Involved

- **Configuration** => **Security and Moderation** is now hidden.
- Added **Configuration** => **Anti-Spam** (from **Configuration** => **Security and Moderation**)
- Added **Forum** => **Attachments & Avatars** => **Attachment Directories**
- Moved **Bulletin Board Code** from **Forum** => **Posts & Topics** to **Configuration** => **Features & Options**
- Moved **Members** => **Search Engines** to **Forum** => **Search Engines**
- Moved **Configuration** => **Server Settings** to **Maintenance** => **Server Settings**
- Moved **Configuration** => **Security and Moderation** => **Moderation Settings** to **Members** => **Warnings**
- Calling **Configuration** => **Security and Moderation** subsections via url redirects to correct location
- Calling **Forum** => **Posts & Topics** => **Bulletin Board Code** via url redirects to correct location
- Moved **Configuration** => **Modification Settings** => **Integration Hooks** to **Maintenance** -> **Forum Maintenance**
- Added **Maintenance** => **Server Settings** => **PHP Info** using SMF 2.1's code....

## Third Party Graphics (borrowed from SMF 2.1)

- Crystal Project Icons | These icons are licensed under the GNU Lesser General Public Licence

## Compatibility Notes
This mod was tested on SMF 2.0.10, but should work on earlier versions of SMF 2.0.x.  SMF 1.x and all versions of SMF 2.1 are not and will not be supported.

[Integration Hooks Report](http://custom.simplemachines.org/mods/index.php?mod=3285) can be installed at any time.

## Changelog
The changelog can be viewed at [XPtsp.com](http://www.xptsp.com/board/free-modifications/smf-2-1-style-admin-area/?tab=1).

## License
The PHPInfo template code, source code, CSS style was copied from SMF 2.1 Alpha 1 under the BSD license.

Copyright (c) 2015 - 2018, Douglas Orend

All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
