ProcessPageTreeMigrator
=======================

Allows automated migration and sharing of page trees along with their templates and fields via JSON files. These JSON files can be imported into another PW installation to recreate the entire structure.

It takes care of replicating all the pages, as well as creating any templates and fields that are needed.

You can also use this module to share page lists. "Page Lists" are a page tree (parent and children) that store selctor values for a Page fieldtype. An example would be a list of countries that would be used to populate a countried drop-down select field. The fields might include: Country Name, 2-digit code, 3-digit code, number code
There is a repositories of page lists available from: https://github.com/adrianbj/ProcessWirePageLists and these can be added to your site from a dropdown select in this migrator module.


##How to install

Download and place the module folder named "ProcessPageTreeMigrator" in: /site/modules/

In the admin control panel, go to Modules. At the bottom of the screen, click the "Check for New Modules" button.

Now scroll to the ProcessPageTreeMigrator module and click "Install".


##Usage

Go to the Setup Page > Page Tree Migrator and follow the prompts.


##What currently works

* Support for multi-language fields has been implemented, but it may need still need work.
* Support for links in RTE fields that have been converted with the PageLinkAbstractor module.

###Fields and Templates Only Option
* All text/number/date based fields
* File/Image fields
* Repeaters fields
* Fieldsets
* Page fields - can migrate the main field, but currently not the selectable pages fields and templates (coming soon)


###Everything including page data Option
* Can migrate full page data/content for all the above field types, except File, Image, Repeater, and Page
* Repeater and Page will be coming soon, but obviously File and Image would be beyond the scope of this modules, given that is uses JSON to migrate the content


##Roadmap

* Full support for page fields - currently only the page field itself is migrated, but not the selectable pages fields and templates. 
* Migration of the page content for repeater and page fields
* Add the ability to choose exactly what you want exported and imported - probably a series of checkboxes allowing you to select exactly which fields, templates, and pages.


##Support

http://processwire.com/talk/topic/4420-page-list-migrator/
