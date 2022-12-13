
<script>

    if(window.history.replaceState){

        window.history.replaceState(null,null,window.location.href);

    }
    </script>
    
<?php

include __DIR__.("/session.php");

include __DIR__ . ("/header.php");

$search_bar ="";


if ($_SERVER["REQUEST_METHOD"]== "POST"){


    $search_bar = htmlspecialchars ($_POST["search-blog"]);


    include __DIR__ .("/connection.php");

    $min_length =3;
    if(strlen($search_bar) >= $min_length){



        $sql = ("SELECT * FROM Question_answers
        
        WHERE Title LIKE '%".$search_bar."%'"); 


    $result = $conn -> query($sql);

    if($result -> num_rows > 0){
        echo    "<div class='search_result_container'><p>You search for: </p></div>" ;
        while($row = $result -> fetch_assoc()){

            echo "<div class='search_result_container'><p><a href=blog.php?id=$row[id]>" .$row["Title"]. ".</a></p></div>";
        }
         
        }elseif (strlen($search_bar)  < $min_length){
            echo "<p style='text-align: center'>Search too short</p>"
;
        
    }
        else{

            echo "<p style='text-align:center'>No result found</p>";
        }
    }
}
         

           /* if ($_SERVER["REQUEST_METHOD"]== "POST"){


                $search_bar = htmlspecialchars ($_POST["search-blog"]);
            
            
   $conn -> real_escape_string($_POST["search-blog"]);

                include __DIR__ .("/connection.php");
            
                $min_length =3;
                if(strlen($search_bar) >= $min_length){
            
            
            
                    $sql = ("SELECT * FROM Question_answers
                    
                    WHERE Title LIKE '%".$search_bar."%'"); 
            
            
                $search_result = $conn -> query($sql);
                if($search_result-> num_rows > 0){

                    while($livesearch_result = $search_result -> fetch_assoc()){
            
                        echo "<div class='search_result_container'><p>" .$livesearch_result["Title"]. ".</p></div>";
                    }
                    
                    }else{
                      echo   "<div class='search_result_container'><p>No result found.</p></div>";
                    }
                }else if(strlen($search_bar) <= 2){
                    echo "<div class='search_result_container'><p>search too short,try using keywords or be more specific with your search.</p></div>";
                }
        
        
        }

        }
    }else if(strlen($search_bar) <= 2){
        echo "<div class='search_result_container'><p>search too short,try using keywords or be more specific with your search.</p></div>";
    }
}/*
else{

    if ($_SERVER["REQUEST_METHOD"]== "POST"){


        $search_bar = htmlspecialchars ($_POST["search-blog"]);
    
    
        include __DIR__ .("/connection.php");
    
        $min_length =3;
        if(strlen($search_bar) >= $min_length){
    
    
    
            $sql = ("SELECT * FROM Question_answers
            
            WHERE code LIKE '%".$search_bar."%'"); 
    
    
        $result = $conn -> query($sql);
        if($result -> num_rows > 0){
            echo    "<div class='search_result_container'><p>You search for: </p></div>" ;
            while($row = $result -> fetch_assoc()){
    
                echo "<div class='search_result_container'><p>" .$row["title"]. ".</p></div>";
            }
            
            }else{
              echo   "<div class='search_result_container'><p>No result found.</p></div>";
            }
        }else if(strlen($search_bar) <= 2){
            echo "<div class='search_result_container'><p>search too short,try using keywords or be more specific with your search.</p></div>";
        }


}
    }


/*
if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__)==
realpath($_SERVER['SCRIPT_FILENAME'])){

      header('HTTP/1.0 403 Forbiddden',TRUE,403);
      die("<h3> 403 Access denied!</H3>The file you request for does not exist.");
}*/


/*
$myfile = fopen("new text.xml","r") or die("unable to open file");
echo fread($myfile,filesize("new text.xml"));
fclose($myfile);*/

include __DIR__ .("/livechat.php");


 include __DIR__. ("/footer.php");               

?>
<style>
body{
    
font-family: 'montserrat';
    font-size: 18px;
    font-weight: lighter;
}
    .search_result_container{

        text-align:center;
    }
    .search_result a:link{
    color: black;
}
a:visited{
    color: black;
}
    </style>

