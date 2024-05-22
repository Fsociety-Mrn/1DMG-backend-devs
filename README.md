
# One Digital Marketing Group - Technical Exam 

Technical exam for backend developer




### Note: please install composer and xampp if already install you can skip this

link to download

[Composer](https://getcomposer.org/)

[xampp](https://www.apachefriends.org/download.html)

[youtube tutorial link](https://youtu.be/0VczFSu78uI?si=A251YxHVafHVwFZE )


## setup 

first run the xampp server and click Config/ PHP(Php.ini)

look for the following 'extension=initl' and remove or uncomment this part just like the picture

![Logo](https://github.com/Fsociety-Mrn/one-dmg-exam/blob/main/resources/setup%20intl.png)

[xampp setup](https://stackoverflow.com/questions/60250533/codeigniter-4-problem-installing-with-composer)

inside the repo folder please import the [one_dmg.sql](https://github.com/Fsociety-Mrn/one-dmg-exam/blob/main/resources/one_dmg.sql) on 

``` HTTP
    localhost/phpmyadmin
```

and restart the apache server on xampp

### to run the project please follow the following

install dependencies 
```bash
  composer install --no-dev
```

Start the server

```bash
  php spark serve
```


## API Reference

#### Create

``` API endpoints
  // Accept JSON data
  POST http://localhost:8080/posts/
  
```
### Read
``` API endpoints
  GET http://localhost:8080/posts/
  GET http://localhost:8080/posts/{1}
      ex: http://localhost:8080/posts/1
```
### Update
``` API endpoints
  // Accept JSON data
  PUT http://localhost:8080/posts/{4}
      ex: http://localhost:8080/posts/4
```
### Delete
``` API endpoints
  DELETE http://localhost:8080/posts/{4}
      ex: http://localhost:8080/posts/4
```



## Testing and Result

post / create

![Logo](https://github.com/Fsociety-Mrn/one-dmg-exam/blob/main/resources/create.png)

read all and read specific
![Logo](https://github.com/Fsociety-Mrn/one-dmg-exam/blob/main/resources/readall.png)
![Logo](https://github.com/Fsociety-Mrn/one-dmg-exam/blob/main/resources/read%209.png)

update result
![Logo](https://github.com/Fsociety-Mrn/one-dmg-exam/blob/main/resources/update.png)
![Logo](https://github.com/Fsociety-Mrn/one-dmg-exam/blob/main/resources/update%20proof.png)

delete and proof
![Logo](https://github.com/Fsociety-Mrn/one-dmg-exam/blob/main/resources/delete%209.png)
![Logo](https://github.com/Fsociety-Mrn/one-dmg-exam/blob/main/resources/deleteed%209.png)




## reference

Any additional information goes here

[REST api codeignite](https://codeigniter4.github.io/userguide/incoming/restful.html)

[CRUD operation](https://medium.com/@choirulihwan/how-to-create-crud-operation-with-codeigniter-4-and-react-js-fb54d28c923c)

[Query Build](https://codeigniter.com/user_guide/database/query_builder.html)

[HTTP code](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status#successful_responses)