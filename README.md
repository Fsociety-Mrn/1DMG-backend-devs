
# One Digital Marketing Group - Technical Exam 

### Technical exam for backend developer

this projects create a basic RESTful api endpoints using Codeigniter 4 and Xampp server for Blog posts


## Table of Contents
* [Link to download and install the necessary software](#link-to-download)
* [Setup the Xampp server and Codeigniter folder](#setup-xampp-server)
* [Start the server](#start-the-server)
* [Testing and Result](#testing-and-result)
* [reference](#reference)



## Link to download

* download [Composer](https://getcomposer.org/)
  + youtube tutorial [Link](https://youtu.be/0VczFSu78uI?si=A251YxHVafHVwFZE) to install & setup Composer

* download and install [xampp](https://www.apachefriends.org/download.html)

## Setup Xampp server

1. first run the xampp server and click Config/PHP(Php.ini)

    look for the following 'extension=initl' and remove or uncomment this part

![Logo](https://github.com/Fsociety-Mrn/one-dmg-exam/blob/main/resources/setup%20intl.png)

NOTE: A detailed tutorial how to remove or uncomment this part [xampp setup](https://stackoverflow.com/questions/60250533/codeigniter-4-problem-installing-with-composer)

2. open in the browser to view/setup the databases

    ``` browser
        localhost/phpmyadmin
    ```

2. inside the resources folder please import the `one_dmg.sql` on the phpmyadmin

3. restart the apache server on xampp

## Start the server

* to install dependencies 
```bash
    composer install --no-dev
```

* Start the server

```bash
  php spark serve
```


## API endpoints

1. Create
+ using POST method
``` API endpoints
    // please note this endpoints accept JSON format
    // actual endpoints
    http://localhost:8080/posts/
  
```
2. Read

+ to read All data using GET method
``` API endpoints
    // actual endpoints
    http://localhost:8080/posts/
```

+ to read specific data using GET method, simply put id at the end of the endpoints
``` API endpoints
    // actual endpoints
    http://localhost:8080/posts/{id}

    // Example how to delete specific data using ID
    http://localhost:8080/posts/1
```
3. Update
+ to update specific data using PUT method, simply put id at the end of the endpoints and update the data in JSON format

``` API endpoints
    // please note this endpoints accept JSON format
    // actual endpoints
    http://localhost:8080/posts/{id}
```
4. Delete
+ to delete specific data using DELETE method, simply put id at the end of the points

``` API endpoints
    // actual endpoints
    http://localhost:8080/posts/{id}
```



## Testing and Result

1. post / create

    ![Logo](https://github.com/Fsociety-Mrn/one-dmg-exam/blob/main/resources/create.png)

    + read all and read specific
![Logo](https://github.com/Fsociety-Mrn/one-dmg-exam/blob/main/resources/readall.png)
![Logo](https://github.com/Fsociety-Mrn/one-dmg-exam/blob/main/resources/read%209.png)

2. update result
    ![Logo](https://github.com/Fsociety-Mrn/one-dmg-exam/blob/main/resources/update.png)
    ![Logo](https://github.com/Fsociety-Mrn/one-dmg-exam/blob/main/resources/update%20proof.png)

3. delete and proof
    ![Logo](https://github.com/Fsociety-Mrn/one-dmg-exam/blob/main/resources/delete%209.png)
    ![Logo](https://github.com/Fsociety-Mrn/one-dmg-exam/blob/main/resources/deleteed%209.png)




## reference

1. documentation of [REST api codeigniter](https://codeigniter4.github.io/userguide/incoming/restful.html)

4. Tutorial of [CRUD operation](https://medium.com/@choirulihwan/how-to-create-crud-operation-with-codeigniter-4-and-react-js-fb54d28c923c)

2. Documentation for [Query Build](https://codeigniter.com/user_guide/database/query_builder.html)

3. Detailed [HTTP code](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status#successful_responses)