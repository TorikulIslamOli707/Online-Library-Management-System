<?php 

require_once 'connect.php';
if($_POST){
    $id = $_POST['id'];
    $bookname = $_POST['bookname'];
    $author = $_POST['author'];
    
    if(isset($_POST['category'])){
        $category = $_POST['category'];
        switch ($category) {
            case '0':
                $category='CSE';
                break;
            case '1':
                $category='EEE';
                break;
            case '2':
                $category='ME';
                break;
            case '3':
                 $category='IPE';
                 break; 
            case '4':
                 $category='BBA';
                break;   
            default:
                # code...
                break;
        }
    }
    
    if(isset($_POST['edition'])){
    
        $edition=$_POST['edition'];
        switch($edition){
            case '0':
                $edition='1';
                break;
            case '1':
                $edition='2';
                break;
            case '2':
                $edition='3';
                break;
            case '3':
                $edition='4';
                break;
            case '4':
                $edition='5';
                break;
            case '5':
                $edition='6';
                break;
            case '6':
                $edition='7';
                break;
            case '7':
                $edition='8';
                break;
            case '8':
                $edition='9';
                break;
            case '9':
                $edition='10';
                break;
            case '10':
                $edition='11';
                break;
            case '11':
                $edition='12';
                break;
            case '12':
                $edition='13';
                break;
            case '13':
                $edition='14';
                break;
            case '14':
                $edition='15';
                break;
             
            default:
                # code...
            break;   
        }
        
    }

    
    $issuedate=date('y-m-d',strtotime($_POST['sdate']));
    $returndate=date('y-m-d',strtotime($_POST['rdate']));
    $currentdate=date("Y/m/d");

   
    

    
    
        $sql="insert into issuebook(id,category,bookname,author,edition,issuedate,returndate,active) values ('$id','$category','$bookname','$author','$edition','$issuedate','$returndate',1)";
        if($connect->query($sql)===true){
           echo "Issue Book successful.";
           echo "<a href='../issuebooks.php'><button type='button'>Back</button></a>";
            echo "<a href='../adminsashboard.php'><button type='button'>Home</button></a>";
        }else{
            echo ("Error in Issue book");
            echo "<a href='../issuebooks.php'><button type='button'>Back</button></a>";
            echo "<a href='../adminsashboard.php'><button type='button'>Home</button></a>";
            $connect->connect_error;
            
        }
    }
    
    
   
    


?>