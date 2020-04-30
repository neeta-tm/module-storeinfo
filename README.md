# Magento 2 Acquired Store Information
The store owners may want to add the other store's /branches details on their site which might physically available But, Magento 2 default functionalities does not allow that. In order to solve this problem, this extension has been developed. This extension is easy to use admin just need to add information of the other store's from backend

# Installation Instruction

<b>Manual Installation</b>

- Copy the content of the repo to the <b>app/code/TechMitraa/StoreInfo</b>
- Run command: <b>php bin/magento setup:upgrade</b>
- Run command: <b>php bin/magento setup:static-content:deploy</b>
- Now flush cache: <b>php bin/magento cache:flush</b>

<b>Composer Installation</b>

## Version
We are adding a new version management to make module installation available through composer, so this is the table for reference: 

Magento Version | Composer prefix 
----            | ---- 
2.2.x           | 100.0.0
2.3.X           | 100.0.0

So if you are in magento 2.2.x or magento 2.3.x to install by composer just execute: `composer require neeta-tm/module-storeinfo:100.0.0`

So if you are in magento 2.2.x or magento 2.3.x to install by composer just execute: composer require neeta-tm/module-storeinfo:100.0.0

BUT in file etc/module.xml version will be the same for all composer version, use setup_version as global version reference.

# Enable Extension
<b>Stores > Configuration > TechMitraa > StoreInfo</b>
![image](https://raw.githubusercontent.com/neeta-tm/images/master/acquirestore/Configuration.PNG)

# Manage Acquired Store's Information 
Find Acquire Store Info in Main Menu > Manage Acquired Store Information

<b>Listing of all acquired Information 
![image](https://raw.githubusercontent.com/neeta-tm/images/master/acquirestore/Manage%20Offline%20Store%20Information%20%20%20Magento%20Admin.png)

<b>Modify Inline Store Name and Address without going to detail view page.
![image](https://raw.githubusercontent.com/neeta-tm/images/master/acquirestore/inline-edit-admin.png)

<b>Manage Store's timings easily from admin.
![image](https://raw.githubusercontent.com/neeta-tm/images/master/acquirestore/Managetime.png)
  
<b>Admin can upload custom image for particular store.</b>
![image](https://raw.githubusercontent.com/neeta-tm/images/master/acquirestore/upload-image.png)

# Add store information in Any CMS Page
{{block class="TechMitraa\StoreInfo\Block\StoreInfoListData" name="storeinfo.listdata" template="TechMitraa_StoreInfo::list.phtml" "}}

![image](https://raw.githubusercontent.com/neeta-tm/images/master/acquirestore/Our%20Acquired%20Stores.png)

# Add store information in Any CMS Page/CMS Block via widget
{{widget type="TechMitraa\StoreInfo\Block\StoreInfoListWidget" storeinfo="Visit Our Other Stores"}}

![image](https://raw.githubusercontent.com/neeta-tm/images/master/acquirestore/widget-storeinfo.png)

# Contribution

Want to contribute to this extension? The quickest way is to <a href="https://help.github.com/articles/about-pull-requests/">open a pull request</a> on GitHub.

# Support

If you encounter any problems or bugs, please <a href="https://github.com/neeta-tm/module-storeinfo/issues">open an issue</a> on GitHub.

# Changelog
Based in setup_version

<b>v1.0.0</b>

Initial module Released
