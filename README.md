lorem-php - by Loreto Gabawa Jr.
===============

https://github.com/loretog/lorem-php

Lorem Framework, a tool for beginners or students

How-to:

1. Download files
2. Extract in your root folder (e.g.: C:\xampp\htdocs\my-app)


Active nav-link
1. echo basename($_SERVER['REQUEST_URI']) == 'dashboard' ? 'active' : ''; 
For Notif success
1. echo show_message();
For Selected Item
1. echo ($user->usertype == 'Administrator') ? 'selected="selected"' : ''
For Menu access limitation
1. if($_SESSION['usertype'] == 'Administrator') { } 
MPDF
1. "mpdf/mpdf": "^8.1",
