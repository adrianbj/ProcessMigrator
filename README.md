ProcessMigrator
=======================

Allows automated migration and sharing of page tree content along with their templates and fields via JSON files. These JSON files can be imported into another PW installation to recreate the entire structure and content, including files and images.

It takes care of replicating all the pages, as well as creating any templates and fields that are needed.

You can also use this module to share page lists. "Page Lists" are a page tree (parent and children) that store selctor values for a Page fieldtype. An example would be a list of countries that would be used to populate a countried drop-down select field. The fields might include: Country Name, 2-digit code, 3-digit code, number code. There is a repositories of page lists available from: https://github.com/adrianbj/ProcessWirePageLists and these can be added to your site from a dropdown select in this migrator module.

You can also use 3rd party converters to migrate content from other sources. So far we have one for Wordpress, thanks to Nico:
https://github.com/NicoKnoll/MigratorWordpress

##How to install
The easiest way to install, is to go to Modules > Site > Add New and in the "Add Module from URL" option, enter:
https://github.com/adrianbj/ProcessMigrator/archive/master.zip


##Usage
Go to the Setup Page > Migrator and follow the prompts.

##What it can migrate

Fields, templates, and page content for all field types including:
* All standard field types, including RTE, and decoding of links modified by the PageLinkAbstractor module and abstracting again on the destination PW install.
* File/Image/CropImage fields including the actual files/images/thumbnails, and all other variations
* All Profields field types: Table, PageTable, Multiplier, and Texareas
* All? custom field types
* Repeaters fields and all their required fields, templates, and content including files/images
* Page fields (and the pages, templates, and fields that make up their selectable pages)
* Multilanguage versions of field content, page names and page titles
* Templates (including Access, Family, URL and other settings) and the template .php files. It even grabs the appropriate file if you are using the "Alternate Template Filename" setting. NB the templates directory on the destination PW installation must be writable for these to be imported.

Files/images/template files and the json structure/data file are exported in a zip file which is then imported into the destination PW install.

So, you could build sections of content on a local dev PW installation, export it, and then with a couple of clicks import everything into the live PW installation.

##Notes
* It supports multi-language fields, but you should make sure to have language support already installed on the destination installation before running the import
* It supports links in RTE fields that have been converted with the PageLinkAbstractor module - make sure the module is installed on the destination server before running the import


##Outstanding Issues
Some outstanding issues that I hope to get to shortly:
* Need to support images inserted from a different page into an RTE field
* Rewrite any references to page ids, eg $pages->get(xxxx) in template .php files so they will be converted to the correct id on the destination installation.
* Need to look into the new core link abstractor that was added to PW 2.4 and see how to handle those links compared to the PageLinkAbstractor module.
* Need to add checks so that existing template php files are not overwritten (or give the option to choose)
* Might need to override PHP max_execution_time and other settings for larger exports and maybe chunk out zipping of all images to prevent memory issues on larger exports.


##Support
https://processwire.com/talk/topic/8660-migrator


## License

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

(See included LICENSE file for full license text.)