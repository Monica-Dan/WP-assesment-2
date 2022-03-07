### Author: 
Monica Danial
### Description: 
I have created a Wordpress woocommerce store with products that have two new attributes showing up under each product on the shop page using local server application: WordPress, WooCommerce and the default 2021 / 2022 Theme.
### Steps of downloading the server, database, and create the child theme:
1. Dowenload and install a local server, I used WampServer. 
2. Dowenload WordPress from wordpress.org and follow steps to install it. 
3. Create the database from the WAMP server (go to PhPMyAdmin). I created my database under monicadb. 
4. Continue installing WordPress after adding some information like username, password, and email. 
5. Now, you will be able to open your WordPress dashboard and the Twenty-Twenty-Two theme is active. 
6. In order to modify the theme, we should create a Child Theme. 
7. Install Child Themify plugin in Wordpress and create the Twenty Twenty Two child theme to make some changes. 
8. Then, Install the Woocommerce plugin from the plugins section and activate it. 
9. I used the dummy products from Woocommerce to display some products. 
10. Inside the Products in the left menu I selecte attibutes to adde two attributes for the products like(color & size). 
11. Install Variation Swatches for WooCommerce plugin to show the color in different way. 
12. In order to show the size and the color attributes under the products, go to Twenty Twenty Two Child function.php file. 
13. Inside the Twenty Twenty Two Child function.php file use the hook (add_action)

### Steps to write the code:
1. Use the hook tool like add_action to perform functions (actions) in specific places of the theme. add_action accepts at least two parameters. 
2. First parameter is the hook (required), in this case we use 'woocommerce_after_shop_loop_item_title' to specify the action. 
3. The second parameter will be the call back function (required), which is the name of the function we want to be hooked, in our case we use 'display_product_size'. 
4. The Third parameter is the priority (optional), whish is used to specify the order in which the functions associated with a particular action are executed. 
5. Declare the “global $product” inside the function. Create a size variable to get the size attribute. 
6. Make an if condition to check if there is size attribute and show its div on the page. 
7. Apply the previous logic of hooking the size to the color attribute but change the call back function name, the priority parameter, and the if condition parameter.

### Steps to upload the files and database.
1. Create a new repository on github, I created two repositories: 
2. https://github.com/Monica-Dan/WP-Assesment.github.io This repository to upload the database, and I used (Git LFS) with some command lines to be able to upload the large files. 
3. https://github.com/Monica-Dan/WP-assesment-2 This repository to upload the themes files because the first one is over its data quota, and I used the Github desktop programe to commit and push the files.
