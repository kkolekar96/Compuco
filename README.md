# Compuco

Home page.

----
## Introduction

This product is based on open-source Php template engine. <br />
Following are the tech stack
1. DDEV
2. php
3. SCSS
4. Bootstrap 5
5. Drupal 7

----
## Local Setup

1. UnZip the project folder
2. From console navigate to project directory and run following command. Before this command make sure local system should have     Docker, Docker-Compoase and Colima/Docker desktop
    ```
    $ ddev start
    ```
3. CCS are pre-compiled with the project. You can update the css by running following command from theme directory.<br />
    To complie the SCSS
    ```
    $ npm install
    ```

    ```
    $ npm run build
    ```

---
## Highlights
1. Create a custom theme named Compuco <br />
2. Created separate php templates file based on the  components created.
3. Created separate SCSS file for indivial component having seprate funcationality to reduce code complexity and increase maintablity of code
