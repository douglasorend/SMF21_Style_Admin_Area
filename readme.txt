[hr]
[center][color=red][size=16pt][b]SMF 2.1-STYLE ADMIN AREA v1.3[/b][/size][/color]
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

[color=blue][b][size=12pt][u]Third Party Graphics (borrowed from SMF 2.1)[/u][/size][/b][/color]
Crystal Project Icons | These icons are licensed under the GNU Lesser General Public Licence

[color=blue][b][size=12pt][u]Compatibility Notes[/u][/size][/b][/color]
This mod was tested on SMF 2.0.8, but should work on earlier versions of SMF 2.0.x.  SMF 1.x is not and will not be supported.

[color=blue][b][size=12pt][u]Changelog[/u][/size][/b][/color]
[b][u]v1.3 - November 6th, 2014[/u][/b]
o Fixed an issue with the [b]Warnings[/b] section being shown when it isn't enabled....

[b][u]v1.2 - November 2nd, 2014[/u][/b]
o Fixed missing global variable declaration within [b]ManageServer.php[/b]...

[b][u]v1.1 - November 1st, 2014[/u][/b]
o Fixed some language string issues

[b][u]v1.0 - August 11th, 2014[/u][/b]
o Initial Release

[hr]
[url=http://creativecommons.org/licenses/by/3.0][img]http://i.creativecommons.org/l/by/3.0/80x15.png[/img][/url]
This work is licensed under a [url=http://creativecommons.org/licenses/by/3.0]Creative Commons Attribution 3.0 Unported License[/url]
