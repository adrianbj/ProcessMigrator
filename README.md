ProcessPageTreeMigrator
=======================

Allows automated migration and sharing of page tree content along with their templates and fields via JSON files. These JSON files can be imported into another PW installation to recreate the entire structure and content, including files and images.

It takes care of replicating all the pages, as well as creating any templates and fields that are needed.

You can also use this module to share page lists. "Page Lists" are a page tree (parent and children) that store selctor values for a Page fieldtype. An example would be a list of countries that would be used to populate a countried drop-down select field. The fields might include: Country Name, 2-digit code, 3-digit code, number code. There is a repositories of page lists available from: https://github.com/adrianbj/ProcessWirePageLists and these can be added to your site from a dropdown select in this migrator module.


##How to install
Download and place the module folder named "ProcessPageTreeMigrator" in: /site/modules/

In the admin control panel, go to Modules. At the bottom of the screen, click the "Check for New Modules" button.

Now scroll to the ProcessPageTreeMigrator module and click "Install".


##Usage
Go to the Setup Page > Page Tree Migrator and follow the prompts.

##What it can migrate

Fields, templates, and page content for all field types including:
* All standard field types, including RTE, and decoding of links modified by the PageLinkAbstractor module and abstracting again on the destination PW install.
* File/Image/CropImage fields including the actual files/images
* Repeaters fields and all their required fields, templates, and content
* Page fields (and the pages, templates, and fields that make up their selectable pages)
* Multilanguage versions of field content
* Templates (including Access, Family, URL and other settings) and the template .php files. It even grabs the appropriate file if you are using the "Alternate Template Filename" setting. NB the templates directory on the destination PW installation must be writable for these to be imported.

Files/images/template files and the json structure/data file are exported in a zip file which is then imported into the destination PW install.

So, you could build sections of content on a local dev PW installation, export it, and then with a couple of clicks import everything into the live PW installation.

##Notes
* It supports multi-language fields, but you should make sure to have language support already installed on the destination installation before running the import
* It supports links in RTE fields that have been converted with the PageLinkAbstractor module - make sure the module is installed on the destination server before running the import
* Be aware of migrating textarea fields with the Inputfield Type set to CKEditor. You need to make sure that CKEDitor is installed on the destination installation, or the settings may conflict.
* In general you should make sure that any required custom fieldtypes are already installed on the destination server before running the import

##Outstanding Issues
Some outstanding issues that I hope to get to shortly:
* Need to support images inserted from a different page into an RTE field
* Rewrite any references to page ids, eg $pages->get(xxxx) in template .php files so they will be converted to the correct id on the destination installation.
* Need to look into the new core link abstractor that was added to PW 2.4 and see how to handle those links compared to the PageLinkAbstractor module.
* I still want to add finer control for determining exactly what components will be exported and imported.
* Generally needs lots more error checking for things like making sure required modules/languages/fieldtypes are installed on the destination PW install etc
* Need to add checks so that existing template php files are not overwritten (or give the option to choose)
* Might need to override PHP max_execution_time and other settings for larger exports and maybe chunk out zipping of all images to prevent memory issues on larger exports.
* Add the ability to choose exactly what you want exported and imported - probably a series of checkboxes allowing you to select exactly which fields, templates, and pages.


##Support
http://processwire.com/talk/topic/4420-page-list-migrator/
