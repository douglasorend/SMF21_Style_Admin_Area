[hr]
[center][color=red][size=16pt][b]SMF 2.1-STYLE ADMIN AREA v1.9[/b][/size][/color]
[url=http://www.simplemachines.org/community/index.php?action=profile;u=253913][b]By Dougiefresh[/b][/url] -> [url=http://custom.simplemachines.org/mods/index.php?mod=3907]Link to Mod[/url]
[/center]
[hr]

[color=blue][b][size=12pt][u]Introduction[/u][/size][/b][/color]
This mod reorganizes the layout of SMF v2.0.x's Admin area so that it closely matches SMF 2.1 Alpha 1's menu, as of July 28, 2014.  It also rewrites the "Adminstration Center" page to look like SMF 2.1 Alpha 1....

Most of the modifications are to [b]Admin.php[/b] and [b]Admin.template.php[/b], with a few other edits to make the moved menu entries work.

In SMF 2.1 Alpha 1, there is no Core Features page.  Those settings have been migrated to the individual pages to enable/disable the feature.  These modifications are not duplicated, as they would add MUCH, MUCH more code to the admin area....

[color=blue][b][size=12pt][u]Related Discussion[/u][/size][/b][/color]
[url=http://www.simplemachines.org/community/index.php?topic=525769.0]Thinking about Reorganizing SMF 2.0.x's Admin Area[/url]

[color=blue][b][size=12pt][u]Menu Changes Involved[/u][/size][/b][/color]
o [b]Configuration[/b] => [b]Security and Moderation[/b] is now hidden.
o Added [b]Configuration[/b] => [b]Anti-Spam[/b] (from [b]Configuration[/b] => [b]Security and Moderation[/b])
o Added [b]Forum[/b] => [b]Attachments & Avatars[/b] => [b]Attachment Directories[/b]
o Moved [b]Bulletin Board Code[/b] from [b]Forum[/b] => [b]Posts & Topics[/b] to [b]Configuration[/b] => [b]Features & Options[/b]
o Moved [b]Members[/b] => [b]Search Engines[/b] to [b]Forum[/b] => [b]Search Engines[/b]
o Moved [b]Configuration[/b] => [b]Server Settings[/b] to [b]Maintenance[/b] => [b]Server Settings[/b]
o Moved [b]Configuration[/b] => [b]Security and Moderation[/b] => [b]Moderation Settings[/b] to [b]Members[/b] => [b]Warnings[/b]
o Calling [b]Configuration[/b] => [b]Security and Moderation[/b] subsections via url redirects to correct location
o Calling [b]Forum[/b] => [b]Posts & Topics[/b] => [b]Bulletin Board Code[/b] via url redirects to correct location
o Moved [b]Configuration[/b] => [b]Modification Settings[/b] => [b]Integration Hooks[/b] to [b]Maintenance[/b] -> [b]Forum Maintenance[/b]
o Added [b]Maintenance[/b] => [b]Server Settings[/b] => [b]PHP Info[/b] using SMF 2.1's code....

[color=blue][b][size=12pt][u]Third Party Graphics (borrowed from SMF 2.1)[/u][/size][/b][/color]
Crystal Project Icons | These icons are licensed under the GNU Lesser General Public Licence

[color=blue][b][size=12pt][u]Compatibility Notes[/u][/size][/b][/color]
This mod was tested on SMF 2.0.10, but should work on earlier versions of SMF 2.0.x.  SMF 1.x and all versions of SMF 2.1 are not and will not be supported.

[url=http://custom.simplemachines.org/mods/index.php?mod=3285]Integration Hooks Report[/url] can be installed at any time.

[color=blue][b][size=12pt][u]Changelog[/u][/size][/b][/color]
The changelog has been removed and can be seen at [url=http://www.xptsp.com/board/index.php?topic=16.msg140#msg140]XPtsp.com[/url].

[color=blue][b][size=12pt][u]License[/u][/size][/b][/color]
The PHPInfo template code, source code, CSS style was copied from SMF 2.1 Alpha 1 under the BSD license.

Copyright (c) 2015, Douglas Orend
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
