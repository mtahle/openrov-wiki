<?php
# This file was automatically generated by the MediaWiki 1.19.1
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# http://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename      = "OpenROV Wiki";
$wgMetaNamespace = "OpenROV_Wiki";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs please see:
## http://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath       = "";
$wgScriptExtension  = ".php";

## The protocol and server name to use in fully-qualified URLs
#$wgServer           = "http://wiki.openrov.dev";

## The relative URL path to the skins directory
$wgStylePath        = "$wgScriptPath/skins";

## The relative URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo             = "$wgStylePath/common/images/wiki.png";

## UPO means: this is also a user preference option

$wgEnableEmail      = true;
$wgEnableUserEmail  = true; # UPO

$wgEmergencyContact = "apache@wiki.openrov.dev";
$wgPasswordSender   = "apache@wiki.openrov.dev";

$wgEnotifUserTalk      = false; # UPO
$wgEnotifWatchlist     = false; # UPO
$wgEmailAuthentication = false;

## Database settings
$wgDBtype           = "mysql";
$wgDBserver         = "localhost";
$wgDBname           = "openrov_wiki";
$wgDBuser           = "openrov";
$wgDBpassword       = "ppeieij0";

# MySQL specific settings
$wgDBprefix         = "";

# MySQL table options to use during installation or update
$wgDBTableOptions   = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType    = CACHE_ACCEL;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads  = true;
#$wgUseImageMagick = true;
#$wgImageMagickConvertCommand = "/usr/bin/convert";

//$wgUploadPath = "/srv/wiki.openrov.com/images/";

# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons  = true;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.UTF-8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/Names.php
$wgLanguageCode = "en";

$wgSecretKey = "7b87f1f03bad373c25ad6d967460bbfd8a9f38e98be30db4171d7b417dda45a0";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "cc63e8ee9f4a03f6";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook', 'vector':
$wgDefaultSkin = "cavendish";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl  = "http://creativecommons.org/licenses/by-sa/3.0/";
$wgRightsText = "Creative Commons Attribution Share Alike";
$wgRightsIcon = "{$wgStylePath}/common/images/cc-by-sa.png";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";


# Query string length limit for ResourceLoader. You should only set this if
# your web server has a query string length limit (then set it to that limit),
# or if you have suhosin.get.max_value_length set in php.ini (then set it to
# that value)
$wgResourceLoaderMaxQueryLength = -1;

# The following permissions were set based on your choice in the installer
$wgGroupPermissions['*']['edit'] = false;

$wgRawHtml=true;

# Enabled Extensions. Most extensions are enabled by including the base extension file here
# but check specific extension documentation for more details
# The following extensions were automatically enabled:
require_once( "$IP/extensions/ConfirmEdit/ConfirmEdit.php" );
require_once( "$IP/extensions/Gadgets/Gadgets.php" );
require_once( "$IP/extensions/ParserFunctions/ParserFunctions.php" );
require_once( "$IP/extensions/WikiEditor/WikiEditor.php" );

$wgCapitalLinks =false; 

$wgShowExceptionDetails = true; 

# End of automatically generated settings.
# Add more configuration options below.

$wgUploadDirectory = "{$IP}/images";

# Additional Extensions in use
require_once( "$IP/extensions/Code/Code.php" );
require_once("$IP/extensions/notitle.php");
require_once( "$IP/extensions/CCAgreement/CCAgreement.php" );
require_once( "$IP/extensions/Vector/Vector.php" );
require_once( "$IP/extensions/ContactPage/ContactPage.php" );
require_once( "$IP/extensions/SignDocument/SignDocument.php" );
require_once("$IP/extensions/SocialProfile/SocialProfile.php");
require_once("$IP/extensions/WikiForum/WikiForum.php");

$wgMainCacheType = CACHE_NONE;

# wiki forum permissions
$wgGroupPermissions['ForumModerator']['wikiforumadmin'] = false; $wgGroupPermissions['ForumAdmin']['wikiforumadmin'] = true; $wgGroupPermissions['ForumModerator']['wikiforummod'] = true; $wgGroupPermissions['ForumAdmin']['wikiforummod'] = true;

# social profile

$wgUserProfileDisplay['friends'] = true;
$wgUserProfileDisplay['stats'] = true;

require_once("$IP/extensions/SocialProfile/UserStats/EditCount.php"); // Necessary edit counter
// The actual user level definitions -- key is simple: 'Level name' => points needed
$wgUserLevels = array(
        'Bubblemaker' => 0,
        'Open Water Diver' => 1200,
        'Adventure Diver' => 1750,
        'Advanced Open Water Diver' => 2500,
        'Rescue Diver' => 5000,
        'Deep Diver' => 10000,
        'Night Diver' => 20000,
        'Wreck Diver' => 35000,
        'Ice Diver' => 50000,
        'Cave Diver' => 75000,
        'Master Scuba Diver' => 100000,
        'Divemaster ' => 150000,
        'Open Water Scuba Instructor' => 250000,
        'Assistant Instructor' => 350000,
        'Open Water Scuba Instructor' => 500000,
        'Specialty Instructor' => 650000,
        'Master Scuba Diver Trainer' => 800000,
        'Master Scuba Diver Instructor' => 1000000,
);

//$wgUserStatsPointValues['create'] = 100; // Points awarded on a mainspace edit
$wgUserStatsPointValues['edit'] = 50; // Points awarded on a mainspace edit
$wgUserStatsPointValues['vote'] = 0; // Points awarded for voting for an article
$wgUserStatsPointValues['comment'] = 0; // Points awarded for leaving a comment
$wgUserStatsPointValues['comment_plus'] = 0; // Points awarded if your comment gets a thumbs up
$wgUserStatsPointValues['comment_ignored'] = 0; // Points awarded if another user ignores your comments
$wgUserStatsPointValues['opinions_created'] = 0; // Points awarded for writing a blog article
$wgUserStatsPointValues['opinions_pub'] = 0; // Points awarded for having that article hit the "Blogs" page
$wgUserStatsPointValues['referral_complete'] = 0; // Points awarded for recruiting a new user
$wgUserStatsPointValues['friend'] = 50; // Points awarded for adding a friend
$wgUserStatsPointValues['foe'] = 50; // Points awarded for adding a foe
$wgUserStatsPointValues['gift_rec'] = 0; // Points awarded for receiving a gift
$wgUserStatsPointValues['gift_sent'] = 0; // Points awarded for giving a gift
$wgUserStatsPointValues['points_winner_weekly'] = 0; // Points awarded for having the most points for a week
$wgUserStatsPointValues['points_winner_monthly'] = 0; // Points awarded for having the most points for a month
$wgUserStatsPointValues['user_image'] = 1000; // Points awareded for adding your first avatar
$wgUserStatsPointValues['poll_vote'] = 0; // Points awarded for taking a poll
$wgUserStatsPointValues['quiz_points'] = 0; // Points awarded for answering a quiz question
$wgUserStatsPointValues['quiz_created'] = 0; // Points awarded for creating a quiz question
$wgNamespacesForEditPoints = array( 0 ); // Array of namespaces for that can earn you points. Use numerical keys. Default is 0 -- only main namespace edits can earn a user points.

# contact page variables
$wgContactUser = 'Fusion94';
$wgContactSender = $wgPasswordSender;
$wgContactSenderName = 'Contact Form on ' . $wgSitename;

$wgVectorFeatures['collapsiblenav']['global'] = true;
# Disable reading by anonymous users
#$wgGroupPermissions['*']['read'] = false;

