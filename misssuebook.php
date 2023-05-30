<div class="tbox">

<div >
    <table border="1" >
    </div>
        
            <tr>
            
                <th>Student ID</th>
                <th>Category</th>
                <th>Book Name</th>
                <th>Edition</th>
                <th>Issue Date</th>
                <th>Return Date</th>
                <th>Today</th>
                <th>Fine</th>
                <th>Action</th>
                
            </tr>
        
        <tbody>
            <?php
              
    
              

            $sql = "SELECT * FROM issuebook WHERE active = 1";
            $result = $connect->query($sql);
            
            
         
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $returndate=$row['returndate'];
                    $currentdate=date("Y/m/d");

                    $dateTimestamp1 = strtotime($currentdate);
                    $dateTimestamp2 = strtotime($returndate);
                    if($dateTimestamp1>$dateTimestamp2){
                        $fine=100;
                    }else{
                        $fine=0;
                    }
                    echo "<tr>
                    <td>".$row['id']." </td>
                    <td>".$row['category']." </td>
                        <td>".$row['bookname']." </td>
                        <td>".$row['edition']." </td>
                        <td>".$row['issuedate']."</td>
                        <td>".$row['returndate']."</td>
                        <td>".date('y-m-d')."</td>
                        
                        <td>".$fine."</td>
                        <td>
                            <a href='phpConnection/edit.php?id=".$row['id']."'><button type='button' style='background:#C0C0C0;' >Edit</button></a>
                            <a href='bookremove.php?id=".$row['id']."'><button type='button' style='background:#C0C0C0;'>Remove</button></a>
                        </td>
                        
                        
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='7'><center>No Data Avaliable</center></td></tr>";
            }
            ?>
        </tbody>

    </table>
   


</div>
</div>