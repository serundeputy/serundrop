serundeputy.io
--------
Home of @serundeputy on the web.

Configuration Workflow
----

* Make config changes in the Backdrop UI on your local dev environment.
* Once complete export the configuration:
  * `lando drush bcex`
  * Add and commit to git
  * push up to github, pull down to server and then import the config
    * `drush bcim`
