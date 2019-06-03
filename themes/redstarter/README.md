# Inhabitent

A WordPress custom theme developed during my class at Red Academy.

## Installation

### 1. This theme was created with files from a Red-Starter WP theme 

The theme files are downloaded and added to your own computer in the `wp-content` directory.

### 2. Install the dev dependencies

Run `npm install` **inside your theme directory** next to install the node modules for Gulp, etc.


### 4. Styling with much SCSS

The styling in this website includes flex, grid, and extensive amounts of scss to achieve the overall design. Be careful in Wordpress to find and specify the exact class and page your are styling.

For example, the Journal page is styling is nested inside blog:

// /*--------------------------------------------------------------
// # Jounal Page Template
// --------------------------------------------------------------*/

.blog {
    
    .site {
            display: flex;
            flex-direction: column;
            min-height: 100vh;

        }

        .site-content {
            flex-grow: 1;
            display: flex;
            padding-top: 50px;
            @extend .container;
    
        }

        .content-area {
            width: 70%;
        }

        .widget-area {
            width: 30%;
            margin:40px;
           
        } 


### 5. Personal Notes

This project was a huge stretch for me! By doing all the CSS, I realized that I had learned enough to keep
on learning. Although I don't remember all the code by heart, I know what I'm looking for and I can sort out how to do it through trial and error. This is one of the best ways to put things into practice that you are learning. Codex is the encyclopedia of all things wordpress: https://codex.wordpress.org/



### 6. Share the Love

Once again a huge thank-you to my/our teachers, teacher's aids and tutorial leads at Red Academy. I could not have learned this much without you.
