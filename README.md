# Dynamic Graphs

A laravel package to analyze json form for radio groups and create random data for 1000 users and analyze the data through various graphs 
like piechart,barchart,columnchart,linechart and also to write comment and download the graph with the comment for reports.


**NOTE -** You should make a `virtual host` and run command `php artisan make:auth` before installing my package.


# Installation

You can install the package using composer

    composer require ritik/dynamicgraphs
    
Publish the configurations

    php artisan vendor:publish --provider="ritik\dynamicgraphs\DynamicGraphsServiceProvider"
    
Import the table using `php artisan migrate` command

**NOTE -** If you want to store your form in json format than replace my file `rawdata.json` from `storage\json` folder with your json
file but with the same name as `rawdata.json`
 
## Storing data from json file into database and generating random data for 1000 people

In your browser run the URL

    your_virtual_host_name/store
    
## Setting up views

To run the final project in your browser run the URL

    your_virtual_host_name/printradio
