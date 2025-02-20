# Codeytek Advanced Theme Development - Aquarius Theme

This is a theme created with the help of Codeytek Advanced Theme Development course.

## Theme Start and Tailwind CSS
- Initialize npm project ```npm init -y```.

- Install Tailwind CSS using npm ```npm install -D tailwindcss@3```.

- Initialize Tailwind CSS ```npx tailwindcss init```.

- Added the following code to the ```tailwind.config.js``` file:

    ```js
    content: [
      "./*.php", "./**/*.php"
      ],
    ```

- Create ```assets/css/input.css``` file and add the following code:

    ```css 
    @tailwind base;
    @tailwind components;
    @tailwind utilities;
    ``` 

- Create ```functions.php``` file and add the following code:

    ```php
    function brad_enqueue_tailwind() {
      wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/build/css/tailwind.css');
    }

    add_action('wp_enqueue_scripts', 'brad_enqueue_tailwind');
    ```
  - This code will enqueue the Tailwind CSS file to the theme.

- Add a script to the ```package.json``` file to watch for changes in the ```input.css``` file and compile it to the ```tailwind.css``` file.
  ```json
  "scripts": {
    "tailwind": "npx tailwindcss -i ./assets/css/input.css -o ./build/css/tailwind.css --watch"
  }
  ```

- Run Tailwind CSS ```npm run tailwind```.
  
  <h1><i> 
    <u><b>NOTE:</b></u> In order for Tailwind CSS to work, Dont forget to add:
  </i></h1>

  ```php
  get_header();
  ```

## Lesson 1 - Theme Setup (Directory Structure):

- Create ```index.php``` file to serve as the main template file.

- Create ```style.css``` file to serve as the theme details file that would show up in the WordPress admin dashboard.

  [Tutorial](https://www.youtube.com/watch?v=cK_wvACTGMw&list=PLD8nQCAhR3tT3ehpyOpoYeUj3KHDEVK9h)

## Lesson 2 - Header and Footer (get_header get_footer):

- Create ```header.php``` file and ```footer.php``` file.

- Seperate the header and footer files from the ```index.php``` file to ```header.php``` and ```footer.php``` files.

  [Tutorial](https://www.youtube.com/watch?v=cP4FprafrkE&list=PLD8nQCAhR3tT3ehpyOpoYeUj3KHDEVK9h)

## Lesson 3 - Header and Footer (wp_head wp_footer):

- Modify the ```header.php``` file to get dynamic data:
  - ```lang="<?php language_attributes(); ?>"``` - This will get the language of the website.
  - ```<meta charset="<?php bloginfo( 'charset' ); ?>">``` - This will get the character set of the website.
  - ```<?php wp_head(); ?>``` - This will add the head section of the website i.e. meta tags, scripts, styles etc.
  
- Modify the ```footer.php``` file to get dynamic data:
  - ```<?php wp_footer(); ?>``` - This will add the footer section of the website i.e. scripts, styles etc.

  [Tutorial](https://www.youtube.com/watch?v=T0_FqVuOte4&list=PLD8nQCAhR3tT3ehpyOpoYeUj3KHDEVK9h)

## Lesson 4 - wp_body_open:

- Add the ```wp_body_open()``` function to the ```index.php``` file.
  - This function enables inserting content after the opening body tag.

- Add the ```body_class()``` function to the ```index.php``` file.
  - This function adds wordpress generated class to the body tag.
  - This function can get parameters to add custom classes to the body tag.

  [Tutorial](https://www.youtube.com/watch?v=DIyvwx806nw&list=PLD8nQCAhR3tT3ehpyOpoYeUj3KHDEVK9h)

## Lesson 5 - enqueue stylesheet:

- ```wp_enqueue_style()``` function is used to enqueue a stylesheet. It takes 5 parameters:
  - 1st parameter: The handle name of the stylesheet, should be unique and a string.
  - 2nd parameter: The URL of the stylesheet, can be a relative path or a full URL. used with ```get_template_directory_uri()``` function to get the URL of the theme.
  - 3rd parameter: The dependencies of the stylesheet, an array of stylesheet handles that this stylesheet depends on.
  - 4th parameter: The version of the stylesheet, a string that is used to version the stylesheet.
    - ```filemtime()``` function is used to get the time in milliseconds since the file was last modified.
    - can be used to version the stylesheet.
  - 5th parameter: The media type of the stylesheet, a string that is used to specify the media type of the stylesheet.
    - ```'all'``` - for all media types.
    - ```'print'``` - for print media types.
    - ```'screen'``` - for screen media types.

  [Tutorial](https://www.youtube.com/watch?v=7HfPqzm2mzU&list=PLD8nQCAhR3tT3ehpyOpoYeUj3KHDEVK9h)

## Lesson 6 - enqueue script:

- ```wp_register_script()``` function is used to register a script. It takes 5 parameters:
  - 1st parameter: The handle name of the script, should be unique and a string.
  - 2nd parameter: The URL of the script, can be a relative path or a full URL. used with ```get_template_directory_uri()``` function to get the URL of the theme.
  - 3rd parameter: The dependencies of the script, an array of script handles that this script depends on.
  - 4th parameter: The version of the script, a string that is used to version the script.
  - 5th parameter: Whether the script should be enqueued in the footer, a boolean value.

- ```wp_enqueue_script()``` function is used to enqueue a script. It takes 5 parameters:
  - 1st parameter: The handle name of the script, should be unique and a string.
  - 2nd parameter: The URL of the script, can be a relative path or a full URL. used with ```get_template_directory_uri()``` function to get the URL of the theme.
  - 3rd parameter: The dependencies of the script, an array of script handles that this script depends on.
  - 4th parameter: The version of the script, a string that is used to version the script.
  - 5th parameter: Whether the script should be enqueued in the footer, a boolean value.
  - **Note:** This function can take 1 parameter which is the handle name of the registered script. (same for stylesheets)

  - Adding screenshot to the theme:
    - Add a screenshot.png or screenshot.jpg file to the root of the theme folder.

  [Tutorial](https://www.youtube.com/watch?v=7HfPqzm2mzU&list=PLD8nQCAhR3tT3ehpyOpoYeUj3KHDEVK9h)

## Lesson 7 + 8 - get_template_part:

- Added a check if the ```wp_body_open``` function exists before calling it to the ```header.php``` file:
  ```php
  <?php
    if ( function_exists( 'wp_body_open' ) ) {
      wp_body_open(); 
    }
  ?>
  ```
- Created responsive navigation menu with tailwind css and javascript.
  - Moved the header content to ```template-parts/header/nav.php``` file.
  - Added the ```get_template_part``` function to the ```header.php``` file to get the navigation menu.
    ```php
    <?php get_template_part('template-parts/header/nav'); ?>
    ```

  [Tutorial (part 7)](https://www.youtube.com/watch?v=XhMxCF2n2X8&list=PLD8nQCAhR3tT3ehpyOpoYeUj3KHDEVK9h)
  
  [Tutorial (part 8)](https://www.youtube.com/watch?v=KdrHOgCvR3w&list=PLD8nQCAhR3tT3ehpyOpoYeUj3KHDEVK9h)