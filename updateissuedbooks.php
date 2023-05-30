<?php 
 
 require_once 'phpConnection/connect.php';
 
 if($_POST){
    $id=$_POST['id'];
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
    $bookname=$_POST['bookname'];
    $author=$_POST['author'];
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
	$issuedate=$_POST['issuedate'];
	$returndate=$_POST['returndate'];

    $sql="update issuebook set id='$id',category='$category',bookname='$bookname',author='$author',edition='$edition',issuedate='$issuedate',returndate='$returndate' where id={$id}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='manageissuebook.php'><button type='button'>Back</button></a>";
        echo "<a href='admindashboard.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
        echo "<a href='manageissuebook.php'><button type='button'>Back</button></a>";
        echo "<a href='admindashboard.php'><button type='button'>Home</button></a>";
    }
 
    $connect->close();
 
}
 
?>