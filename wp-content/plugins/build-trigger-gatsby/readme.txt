=== Build Trigger for Gatsby ===
Contributors: zestardtechnologies
Donate link: '';
Tags: build, trigger, gatsby, automatic-build, netlify
Requires at least: 5.0
Tested up to: 5.6
Stable tag: 4.3
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This plugin will helps you to trigger a build of Gatsby at the time of post/page save or updates with different types.

== Description ==

This plugin will takes webhook url and trigger a build of Gatsby. It is working with post and page and all post types of the website.

== Features ==

- To work with this initially user needs to enter webhook URL of server from where build is generating.

- User can choose manual/automatic option to trigger a build.

- In Automatic option build will trigger when any post, page or any post type will save or updates.

- In Manual option build will trigger when user clicks on Manual trigger button. 

- User can restrict build by entering limits for both options. It means plugin will not trigger build once this limit reached. User can manage this limit.

- User can also get notification email when user reached the limit. For that user needs to click on Require custom notification. User can set limit of this, so that once build count reached at that limit than this email will sent to an Administrator.

- Build cycle can be consider as 24 hours. Means after every 24 hours build count will be start from zero.

== Installation ==

1. Upload the `build-trigger-for-gatsby` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to "Tools/Build Trigger for Gatsby" to configure the plugin.
4. Once all configuration completes all trigger will work according to it.

== Screenshots ==
1. Plugin Admin view

== Frequently Asked Questions ==

= Is Build Trigger for Gatsby plugin is free? =
Yes, Build Trigger for Gatsby's core features are and always will be free.

== Changelog ==

= 1.0.1 =
* A small change related to Author and Developer name.

= 1.0.0 =
* A change since the previous version.

== Upgrade Notice ==

= 1.0.1 =
There is a new version of Build Trigger for Gatsby available.