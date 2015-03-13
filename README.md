# webkeepassx
What is Webkeepassx:
A application that can open keepassx file(kdb file).

Why I need this:
For better password sync - people can easily get password via web, especially for people who
don't actually generate password but only need get password, like oncall guys, etc.

What is the status:
Currently it only support read only - fit my demand already. But with libKeePHPass, it's possible
to create/write groups and entries.

How to use:
Put kdb file in webkeepassx/libKeePHPass/kdbfile, change webkeepassx/libKeePHPass/access_kdb.php
as follow. make sure the kdb file name and the password match yours.
<?php
require_once "Kdb.php";
$db = Kdb::open('kdbfile/test.kdb', 'password');

Known bug:
Apologize, my thoughtless, current version only support 1 layer nesting, like:
FatherGroup
|
---SubGroup01
---SubGroup02
