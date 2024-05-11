[<< zurück](https://github.com/michel-abele/www-abele-onl)

![GitHub last commit (branch)](https://img.shields.io/github/last-commit/michel-abele/www-abele-onl/main?logo=github&label=last%20commit%3A%20main)
![GitHub last commit (branch)](https://img.shields.io/github/last-commit/michel-abele/www-abele-onl/work?logo=github&label=last%20commit%3A%20work)
![GitHub repo size](https://img.shields.io/github/repo-size/michel-abele/www-abele-onl)
![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/michel-abele/www-abele-onl/ftp-deploy.yml)
![Website](https://img.shields.io/website?url=https%3A%2F%2Fabele.onl)

# Website: www.abele.onl

## About this repository

This repository serves as a comprehensive collection of all elements of my web project. It contains both the source code and all the content of my personal website. The purpose of making the repository publicly accessible is to give interested parties an insight into my development process and to demonstrate how I have implemented the automation of the website via GitHub.

### Target group

The main target group of this repository are:

- **potential employers**: To provide them with a detailed insight into my skills and approach as a developer.
- **Freelance clients**: To build trust in my services and illustrate my expertise in web development.

I cordially invite you to familiarize yourself with the content of this repository and am available for queries and discussions.

You can copy the code from my website as you wish, but please note that the content remains protected by copyright.

## Website structure

### Backend

The backend is based on a custom PHP framework that dynamically manages content and generates output by merging partial files. To ensure a clear separation between HTML code and PHP code, I have implemented what are called "HTML variables". These are populated with the corresponding data during program execution. Distributing HTML content across multiple files not only improves clarity but also significantly facilitates maintenance. For the conversion of SCSS to CSS code, I use the local extension _Live Sass Compiler_ in _VS Code_.

### Frontend

In the frontend, I rely on the combination of _jQuery_ and _Bootstrap_. Bootstrap serves as the foundation for the layout, while a custom-tailored S/CSS file refines the design. For the integration of various icons, I turn to _Bootstrap Icons_ and _BoxIcons_, utilizing custom-adjusted versions with font files.

jQuery is used for the implementation of various functions. With this library, for example, navigation was implemented, responding to user interactions such as clicks on menu items or controls and triggering corresponding animations or actions. The _Animate On Scroll Library_ adds dynamics to the website by revealing content from specific directions. The _Typing Animation Library_ creates a typewriter effect in the starting area of the page, while the _Pure Counter Library_ enables the animation of increasing numbers in the facts section.

Finally, all functions are consolidated in a custom-created JavaScript file. Here, the necessary functions and classes from the utilized libraries are initialized and applied to create a seamless and interactive user experience.

## Deploy

The publication of the website is carried out via an automated workflow on GitHub. Each time changes are made to the main branch, for instance, by merging from a feature branch, this workflow is triggered. As a first step, the updated files are transferred to the web server, specifically to the FTP server. Subsequently, the website's cache on Cloudflare is cleared to ensure that the new content is immediately available.
