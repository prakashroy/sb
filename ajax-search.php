
<?php  
 $connect = mysqli_connect("localhost", "root", "", "new_buggy");  
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT a.* FROM database_complete as a, user as b WHERE (a.email LIKE '%".$_POST["query"]."%' or a.mobile LIKE '%".$_POST["query"]."%' or a.company LIKE '%".$_POST["query"]."%' or a.name LIKE '%".$_POST["query"]."%' or a.tel1 LIKE '%".$_POST["query"]."%' or a.tel2 LIKE '%".$_POST["query"]."%') and a.assigned_to = b.user_id";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li><a href="http://localhost/public_html/buggy/admin/company/'.$row["id"].'" target="_blank">'.$row["name"].'</a></li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>No result</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  