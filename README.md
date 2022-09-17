# File-Host

It's File Protector PHP Script maked by Shakib Ahmed

# Futures

1. Mediafire.com

2. Google.com

3. Yandex.com

4. Send.cm (Only video supported)

5. Bayfiles.com

6. Anonfiles.com
 
7. Dropbox.com

8. Zippyshare.com

9. Openload.cc

10. Megaupload.nz

11. Letsupload.cc


# Error Fix

Hello dear, you can see this script not working.

When you create a new link then automatic return homepage.

If you fix it this then you can modify only two page

1. view.php line no 22 { $con = sacms($uri.'id='.$id); } to { $con = file_get_contents($uri.'id='.$id); }

2. process.php  line no 29 { $con = sacms($link); } to { $con = file_get_contents($link); }

# Join Telegram Channel

https://t.me/fhserver

# Demo

https://file-host.herokuapp.com

# Contact Us

Facebook :- https://facebook.com/expertskb

Telegram :- https://t.me/expertskb

Email :- hello@shakib.cyou

URL :- https://shakib.cyou


# Installation

https://file-host.herokuapp.com/readme.txt
