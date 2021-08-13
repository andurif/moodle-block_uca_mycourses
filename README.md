Moodle UCA My Courses Block
==================================
Development made in order to intuitively display all user's courses in a Moodle block.
The block will need the local plugin which will contain all libs and functions needed to this display and also for course bookmarks management (feature not available in a basic Moodle).

Requirements
------------
- Moodle 3.3 (build 2017051500) or later.<br/>
-> Tests on Moodle 3.3 to 3.11.0 versions.<br/>
- Dependencies on <a href="https://github.com/andurif/moodle-local_uca_mycourses" targer="_blank">Moodle UCA My Courses Plugin</a> (build 2021080100) to show plugin's informations.
- Moodle 3.3.1 (build 2017051500) or later.

Installation
------------
1. Local plugin installation

- Git way:
> git clone https://github.com/andurif/moodle-local_uca_mycourses.git local/uca_mycourses

- Download way:
> Download the zip from <a href="https://github.com/andurif/moodle-local_uca_mycourses/archive/refs/heads/master.zip">https://github.com/andurif/moodle-local_uca_mycourses/archive/refs/heads/master.zip</a>, unzip it in local/ folder and rename it "uca_mycourses" if necessary.
  
2. Block installation

- Git way:
> git clone https://github.com/andurif/moodle-block_uca_mycourses.git blocks/uca_mycourses

- Download way:
> Download the zip from <a href="https://github.com/andurif/moodle-block_uca_mycourses/archive/refs/heads/master.zip">https://github.com/andurif/moodle-block_uca_mycourses/archive/refs/heads/master.zip</a>, unzip it in blocks/ folder and rename it "uca_mycourses" if necessary.

3. Then visit your Admin Notifications page to complete the installation.

4. Once installed, you should see new administration options:

> Site administration -> Plugins -> Blocks -> My courses block -> list_view_limit

This option will decide since how many courses we display the "My courses" block on tree view and it will be used only if the user has not chosen a preference view yet.

> Site administration -> Plugins -> Blocks -> My courses block -> roles_to_exclude

This option will decide roles you want to exclude from the block. If users have this/these role(s) in a course it won't be visible in the block (and can not be bookmarked).

Usages
-----
1. Display the list of your course in a block according 2 views (a tree view or a list view).
2. Display courses you chose to bookmark.
3. Advanced bookmarks management (filing in folders, renaming, display or not in block, updates in cases of deletion).
4. Option to display or not finished courses.

Working
-----
1. Add the block to your moodle page.
2. By default only your courses will be display (and not your bookmarks yet, logic) in the block. If you have only few courses the "list view" (less than the limit you choose in the administration) will be used. You can easily change this view thanks to two block links.   
3. Click on "Manage my bookmarks" to add courses as bookmarks and potentially add them to the block.
4. Check (uncheck) the box called "Display finished courses" to choose to display them or not (cacher). By default, this option is checked.

About us
------
<a href="http://www.uca.fr" target="_blank">Université Clermont Auvergne</a> - 2021.
