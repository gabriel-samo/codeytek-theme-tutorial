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

    [Tutorial](https://www.youtube.com/watch?v=cK_wvACTGMw&list=PLD8nQCAhR3tT3ehpyOpoYeUj3KHDEVK9h)