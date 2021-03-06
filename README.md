serundeputy.io
--------

Home of @serundeputy on the web.

Theming Workflow
-----

`Gulp` is used to compile and watch sass.

* Change directories to the root of the project:
  * `cd /path/to/serundeputy`
* Run `npm install` to get the node dependencies and `gulp`
  * `lando npm install`
* To compile and watch sass files type:
  * `lando gulp`


Configuration Workflow
----

* Make config changes in the Backdrop UI on your local dev environment.
* Once complete export the configuration (make sure you are in `www`):
  * `lando drush bcex`
  * Add and commit to git
  * push up to github, pull down to server and then import the config
    * `lando drush bcim`

Deploy
---

To deploy:
* From the root of the project run:

```bash
lando envoy run deploy --branch=master
```
