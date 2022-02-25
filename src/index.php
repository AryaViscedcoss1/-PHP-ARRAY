<!DOCTYPE html>
<html>  

<head>
</head>
<body> 

<?php  

$products = array(
    "Electronics" => array(
      "Television" => array(
        array(
        "id" => "PR001",
        "name" => "MAX-001",
        "brand" => "Samsung"
        ),
        array(
        "id" => "PR002",
        "name" => "BIG-301",
        "brand" => "Bravia"
        ),
        array(
        "id" => "PR003",
        "name" => "APL-02",
        "brand" => "Apple"
        )
      ),
      "Mobile" => array(
        array(
        "id" => "PR004",
        "name" => "GT-1980",
        "brand" => "Samsung"
        ),
        array(
        "id" => "PR005",
        "name" => "IG-5467",
        "brand" => "Motorola"
        ),
        array(
        "id" => "PR006",
        "name" => "IP-8930",
        "brand" => "Apple"
        )
      )
    ),
    "Jewelry" => array(
      "Earrings" => array(
        array(
        "id" => "PR007",
        "name" => "ER-001",
        "brand" => "Chopard"
        ),
        array(
        "id" => "PR008",
        "name" => "ER-002",
        "brand" => "Mikimoto"
        ),
        array(
        "id" => "PR009",
        "name" => "ER-003",
        "brand" => "Bvlgari"
        )
      ),
      "Necklaces" => array(
        array(
        "id" => "PR010",
        "name" => "NK-001",
        "brand" => "Piaget"
        ),
        array(
        "id" => "PR011",
        "name" => "NK-002",
        "brand" => "Graff"
        ),
        array(
        "id" => "PR012",
        "name" => "NK-003",
        "brand" => "Tiffany"
        )
      )
    )
        );
?>
<h1>Task1 </h1>
<table>

<tr>
<th>Category</th>
<th>Subcategory</th>
<th>ID</th>
<th>Name</th>
<th>Brand</th>
</tr>
<?php
//task1
foreach($products as $KCategory=>$VCategory)
{  
    foreach($VCategory as $KsubCategory=>$Vsubcategory)
    {
 
     foreach($Vsubcategory as $singlearray)
     {
        echo "<tr>";
        echo "<td>".$KCategory."</td>";
        echo "<td>".$KsubCategory."</td>";
       foreach($singlearray as $key=>$value)
       {   
        
        echo "<td>".$value."</td>";
          
       }
       echo "</tr>";
      
    }

     }  
}
?>
</table>

<h1>Task2 </h1>
<table>

<tr>
<th>Category</th>
<th>Subcategory</th>
<th>ID</th>
<th>Name</th>
<th>Brand</th>
</tr>
<?php

//task 2
foreach($products as $KCategory=>$VCategory)
{   
    foreach($VCategory as $KsubCategory=>$Vsubcategory)
    {
 
     foreach($Vsubcategory as $singlearray)
     {
       if ($KsubCategory=='Mobile')
       {

        echo "<tr>";
        echo "<td>".$KCategory."</td>";
        echo "<td>".$KsubCategory."</td>";
       foreach($singlearray as $key=>$value)
       {   
        
        echo "<td>".$value."</td>";
          
       }
       echo "</tr>";

       }
   
      
    }

     }  
}
?>
</table>


<h1>Task3 </h1>

<table>
<?php
//task 3
foreach($products as $KCategory=>$VCategory)
{   
    foreach($VCategory as $KsubCategory=>$Vsubcategory)
    {
 
     foreach($Vsubcategory as $singlearray)
     {
      
      
      
      
        if($singlearray['brand']=='Samsung')
         {
          
          echo "<tr>";
          echo "<td>ID : ".$singlearray['id']."</td>";
          echo "</tr>";
          echo "<tr>";
          echo "<td>NAME : ".$singlearray['name']."</td>";
          echo "</tr>";
          
          echo "<tr>";
          echo "<td>Subcategory : ".$KsubCategory."</td>";
          echo "</tr>";
          echo "<tr>";
          echo "<td>Category : ".$KCategory."</td>";
           echo "</tr>";
         
         }
      
   

       }
       
      
    }
  
   

}
?> 
</table>
<h1>Task4</h1>
<table>

<tr>
<th>Category</th>
<th>Subcategory</th>
<th>ID</th>
<th>Name</th>
<th>Brand</th>
</tr>
<?php
//Task no:4
foreach($products as $KCategory=>$VCategory)
{  
    foreach($VCategory as $KsubCategory=>$Vsubcategory)
    {
 
     foreach($Vsubcategory as $skey=>$singlearray)
     {
       if ($singlearray['id']=='PR003')
       {
        unset($products[$KCategory][$KsubCategory][$skey]);
    }
   
      }       
}
}
?>
<?php
foreach($products as $KCategory=>$VCategory)
{  
    foreach($VCategory as $KsubCategory=>$Vsubcategory)
    {
 
     foreach($Vsubcategory as $singlearray)
     {
        echo "<tr>";
        echo "<td>".$KCategory."</td>";
        echo "<td>".$KsubCategory."</td>";
       foreach($singlearray as $key=>$value)
       {   
        
        echo "<td>".$value."</td>";
          
       }
       echo "</tr>";
      
    }

     }  
}
?> 
</table>

<h1>Task5</h1>
<table>

<tr>
<th>Category</th>
<th>Subcategory</th>
<th>ID</th>
<th>Name</th>
<th>Brand</th>
</tr>

<?php

//Task no:5
foreach($products as $KCategory=>$VCategory)
{  
    foreach($VCategory as $KsubCategory=>$Vsubcategory)
    {
 
     foreach($Vsubcategory as $skey=>$singlearray)
     {
       if ($singlearray['id']=='PR002')
       {
        $products[$KCategory][$KsubCategory][$skey]['name']="BIG-555";
       }
      
        
    }
   
      }       
}

?>
<?php
foreach($products as $KCategory=>$VCategory)
{  
    foreach($VCategory as $KsubCategory=>$Vsubcategory)
    {
 
     foreach($Vsubcategory as $singlearray)
     {
        echo "<tr>";
        echo "<td>".$KCategory."</td>";
        echo "<td>".$KsubCategory."</td>";
       foreach($singlearray as $key=>$value)
       {   
        
        echo "<td>".$value."</td>";
          
       }
       echo "</tr>";
      
    }

     }  
}
?> 
</table>
</body>  
</html>  
