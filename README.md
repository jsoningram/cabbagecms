#cabbagecms

Customizes WordPress for More Cabbage clients. Features are:

  * Email obfuscation shortcode
  * Social sharing and connect bars
  * Adds more contact methods to user profile
  * Adds shortcut to Gravity Forms entries
  * Provides user friendly interface for Google (WT and Analytics), Bing and Pinterest verification

##Usage  / Instructions

Upload to wp-content/plugins and activate. Edit Settings/CabbageCMS with site info as needed.

**Email:**
Wrap an email address in the [email] shortcode ex:
```
[email]user@example.com[/email]
```

**Sharing:**
```php
cabbagecms_share_bar();
```

**Connect:**
```php
cabbagecms_connect();
```

**Display author info:**
before loop...
```php
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
```
Then:
```php
echo $curauth->linkedinurl;
echo $curauth->linkedinid;
echo $curauth->twitterurl;
echo $curauth->twitterid;
echo $curauth->title;
echo $curauth->cabbagecms_role;
echo $curauth->photo;
echo $curauth->cabbagecms_caption;
echo $curauth->facebookurl;
echo $curauth->googleplusurl;
```

##Credits

Thanks to [@jkudish](https://github.com/jkudish/WordPress-GitHub-Plugin-Updater) for the Git updater class

##Change Log

**1.0.1** Removed usage instructions from settings page

**1.0** Initial Release
