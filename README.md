# Dynamic Graphs for radio groups

A laravel package to analyze json form for radio groups , analyze the data through various graphs 
like piechart,barchart,columnchart,linechart also write a comment for particular question and download the graph with the comment for reports.

**NOTE -** You should make a `virtual host` and run command `php artisan make:auth` before installing this package.


# Installation

You can install the package using composer

    composer require ritik/dynamicgraphs
    
Publish the configurations

    php artisan vendor:publish --provider="ritik\dynamicgraphs\DynamicGraphsServiceProvider"
    
Import the table using `php artisan migrate` command

**NOTE -** If you want to store your form in json format than replace the file `rawdata.json` from `storage\json` folder with your json
file but with the same name as `rawdata.json`

**Example format for JSON form-**[rawdata.json](https://github.com/ritik118/graphcheck/blob/develop/src/storage/json/rawdata.json)
 
## Storing data from json file into database for question and option table

In your browser run the URL

    your_virtual_host_name/store
    
## To view the questions on which you can render graphs     

In your browser run the URL

    your_virtual_host_name/questiontable
    
## To view the options of the above questions     

In your browser run the URL

    your_virtual_host_name/optiontable
    
**Note-** Now store the answers in `answers` table to generate graph of data or run command `php artisan db:seed` to store data of 10 users. Run `db:seed` command only  for above `rawdata.json` file else store your own answers .
    
## Setting up views

To run the final project in your browser run the URL

    your_virtual_host_name/printradio
