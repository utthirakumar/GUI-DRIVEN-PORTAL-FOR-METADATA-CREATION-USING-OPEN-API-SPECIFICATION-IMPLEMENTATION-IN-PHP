<?php

require '../conn/db.php';
$data=file_get_contents('../jsondata/data.json');


if($data){
    //find if table exist or not
    $query="SELECT * FROM information_schema.tables where table_schema='public' AND table_name= 'dataa';";

    
    $result=pg_query($query);
     if(pg_numrows($result)==1){ // $result;
     //update query

     $query= "UPDATE dataa SET  json = '$data', time = now();
                INSERT INTO dataa_log ( json,time) VALUES ('$data',now()); ";
        if( $result=pg_query($query)){
            echo "<script>alert('table is updated,data inserted successfully');document.location='../index.php'</script>";
            }
            else{
                echo "<script>alert('table is updated error');document.location='../index.php'</script>";
                // echo $query;
            }
        // echo "table exist";
     }
     else{
     //careate new tables
     $query='CREATE TABLE public.dataa(id serial NOT NULL,json jsonb NOT NULL,"time" time with time zone NOT NULL,PRIMARY KEY (id));';
     $query.='CREATE TABLE public.dataa_log(id serial NOT NULL,json jsonb NOT NULL,"time" time with time zone NOT NULL,PRIMARY KEY (id));';
    if( $result=pg_query($query)){
        $query = "INSERT INTO dataa ( json,time) VALUES ('$data',now());";
        $query .= "INSERT INTO dataa_log ( json,time) VALUES ('$data',now());  ";
        $result=pg_query($query);
            echo "<script>alert('New tables created & data insert succesfully');document.location='../index.php'</script>";
        
    }
    // echo "created";
     }
}
else{
    // echo "file not found";
    echo "<script>alert('file not found');document.location='../index.php'</script>";
}

?>