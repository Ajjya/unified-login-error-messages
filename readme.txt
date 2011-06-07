=== Unified Login Error Messages ===
Contributors: Lutz Schroeer
Donate link: http://elektroelch.net
Requires at least: 3.0
Tested up to: 3.2
Stable tag: trunk

Changes the login error messages revealing the existence of a user name to a more secure version.


== Description ==

If you log-in to your WordPress backend and enter the right username but a false
password WordPress shows the error message "ERROR: The password you entered for
the username admin is incorrect. Lost your password?" revealing that the username
"admin" is registered and a possible attacker can check passwords with this
username to gain access to the installation.
This plugin changes the error messages to "ERROR: Invalid user/password
combination." if you enter a non-registered username and/or a false password and
makes it more difficult for an attacker to decypher your blog's passwords.

== Installation ==
Copy to plugin directory and activate.

== Screenshots ==
1. Changed error message

== Changelog ==
= 1.0 =
* Initial version.
