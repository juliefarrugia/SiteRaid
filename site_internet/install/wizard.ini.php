
; path related to the ini file. By default, the ini file is expected to be into the myapp/install/ directory.
pagesPath = "../../jelix/lib/installwizard/pages/,pages/"
customPath = "custom/"
start = welcome
tempPath = "../../temp/site_internet/www/"
supportedLang = fr

[welcome.step]
next=checkjelix

[checkjelix.step]
next=confmail
databases=mysql

[confmail.step]
next=dbprofile

[dbprofile.step]
next=installapp

[installapp.step]
next=end

[end.step]
noprevious = on

[foo.step]
;enctype=
;noprevious = on