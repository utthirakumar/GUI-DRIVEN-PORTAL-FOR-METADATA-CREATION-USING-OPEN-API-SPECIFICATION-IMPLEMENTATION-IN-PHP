# GUI-DRIVEN-PORTAL-FOR-METADATA-CREATION-USING-OPEN-API-SPECIFICATION-IMPLEMENTATION-IN-PHP
In this project “GUI DRIVEN PORTAL FOR METADATA CREATION  USING OPEN API SPECIFICATION, IMPLEMENTATION IN PHP” It’s an efficient process to creating a metadata file, we need a data’s for creating a metadata file. N number of input data needed for creating a metadata file. GUI portal required for inserting a data into input fields, in this input fields are described default input fields separated by category &amp; sub category. In this fields are default statically use and we want to more input fields add dynamically by pressing a add button. The category &amp; sub category of input fields dynamically generated and removed also easy.    In the fields are need a right values all values are right the input fields shows green borders and  wrong or empty fields are fiend input fields are shows an a error message and red colour message to indicate. The all fields having a valid input data next we can generate a json file simply by pressing a submit button. Having a data’s are converted into JSON (JavaScript Object Notation) file in the json data’s are light weight data we can easily to handle and human can read and write.  The json data’s are mostly used for API (Application Programming Interface) backend data sending &amp; receiving  More data’s are inserted into same file and saved into .josn file format in the .json file is called metadata.  The metadata is data about the data large or (N) number of dataset is Called a metadata we need to save into server  


## software installation :

```
1.[PHP 7.4.3](www.php.net)
2.postgresql
3.xampp sever 
```


# Read Me First:
````
1.extract the zip file to the server 
2.Root->conn->db.php  
  =>change the databse connect details host,user ,password for the postgresql details to fill
  
   $host        = "host = localhost";
   $port        = "port = 5432";
   $dbname      = "dbname = tests";
   $credentials = "user = postgres password=1212";
$conn = pg_connect("$host $port $dbname  $credentials");


3.check the javascript folder extension .txt to .js   

Root->assets->js->XXXXXXX.js 

if the files are in txt then change the filextension to .js 

that's all 

4.put the source code on the server 
input the data and create a  .json files and then 
click the insert button 

NOTE:

postgreSQL is connected valid credentials to "dp.php"
the php code automatically create a postgreSQL databse & tables 

if you inserted run or insert the data into first time on server just refresh the page 

project backend php code automatically created a database & then the tables 




thank you...:
```````

