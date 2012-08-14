Email Me
============================

Just a simple helper and config to email the developer when something happens. Saves some steps.


Setup
----------------------------

1. Install Sparks at [GetSparks.org](http://getsparks.org)
3. Edit **config/email_me.php** with whatever email addresses you want to include in your emails.

Usage
----------------------------

Load Spark 

    $this->load->spark('email_me/x.x.x');

Email yourself

    email_me('a message');
    
More options

    email_me('a message', 'a subject', 'to_email_address@test.com');


----------------------------

Changelog
----------------------------

**1.0.1**

* Fixed potential carryover of email params from previous email class
  use. Thanks to [Eclarian](https://github.com/Eclarianhttps://github.com/Eclarian).

**1.0.0**

* Initial Release
