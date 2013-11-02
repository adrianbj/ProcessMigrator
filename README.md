ProcessPageTreeMigrator
=======================

Allows automated migration and sharing of page trees along with their templates and fields via JSON files. These JSON files can be imported into another PW installation to recreate the entire structure.

It takes care of replicating all the pages, as well as creating any templates and fields that are needed.

You can also use this module to share page lists. "Page Lists" are a page tree (parent and children) that store selctor values for a Page fieldtype. An example would be a list of countries that would be used to populate a countried drop-down select field. The fields might include: Country Name, 2-digit code, 3-digit code, number code. There is a repositories of page lists available from: https://github.com/adrianbj/ProcessWirePageLists and these can be added to your site from a dropdown select in this migrator module.


##How to install
Download and place the module folder named "ProcessPageTreeMigrator" in: /site/modules/

In the admin control panel, go to Modules. At the bottom of the screen, click the "Check for New Modules" button.

Now scroll to the ProcessPageTreeMigrator module and click "Install".


##Usage
Go to the Setup Page > Page Tree Migrator and follow the prompts.

##What it can migrate

###Fields and Templates Only option
* Fields, templates, and page content for all field types including:
    * All text/number/date based fields
    * File/Image fields
    * Repeaters fields
    * Page fields (and the pages that make up their selectable content)
    * Fieldsets

###Everything including page data option
* Can migrate full page content/data for all the above field types, except File and Image

##Notes
* It supports multi-language fields, but you should make sure to have language support already installed on the destination installation before running the import
* It supports links in RTE fields that have been converted with the PageLinkAbstractor module - make sure the module is installed on the destination server before running the import
* Be aware of migrating textarea fields with the Inputfield Type set to CKEditor. You need to make sure that CKEDitor is installed on the destination installation, or the settings may conflict.
* In general you should make sure that any required custom fieldtypes are already installed on the destination server before running the import


##Roadmap
* Add automated checking for required modules/fieldtypes etc on the destination server before starting the import to prevent possible errors.
* Add the ability to choose exactly what you want exported and imported - probably a series of checkboxes allowing you to select exactly which fields, templates, and pages.


##Support
http://processwire.com/talk/topic/4420-page-list-migrator/
